<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('School_model');
    }

    public function index() {
        $data['title'] = 'Green School';
        //Validation
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $varCheckLogin = $this->User_model->UserLogin($post);
            
            if ($varCheckLogin) {
                redirect(base_url('school'));
            } else {
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }
            print_r(1);
        }
        $this->load->view('login', $data);
        
    }
    public function Register()
    {
        $data['states']=$this->User_model->getStates();
        $this->load->view('register', $data);
    }
    public function RegisterUser()
    {
    	$details = $this->input->post();
    	$userDetails = array(
                            'email' => $details['schoolemail'],
                            'username' => 'Default',
                            'Password' => 'pass',
                        );

        $user = $this->User_model->CreateUser($userDetails);
        $details['userid'] = $user;
    	$user = $this->School_model->RegisterUser($details);
        if(isset($user))
            redirect(base_url('login'));
    	
        
    }
	
}
?>