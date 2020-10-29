<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   /*
    * Constructor 
    */
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }
	/****************************************************/
	/****************************************************/
	public function index()
	{
	    $data['title'] = 'LOGIN';
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
         $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $varCheckLogin = $this->Login_model->checkLogin($post);
            if (!empty($varCheckLogin)) { 		  
                redirect(base_url('general'));
            } else { 
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }
        }
		$this->load->view('login',$data);
	}

	public function logout(){
        $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
        $this->session->set_flashdata('success', 'Successfully logged out!');
	    redirect(base_url());
    }
}


 