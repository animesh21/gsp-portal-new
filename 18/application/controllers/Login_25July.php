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

    public function Register() {
        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './uploads/',
            'img_url' => 'http://studio-tesseract.co/GSP/uploads/',
            'img_width' => '230',
            'img_height' => 40,
            'expiration' => 3600,
            'word_length' => 8
            );

        $cap = create_captcha($vals);
        $this->session->set_userdata('captcha_word', $cap['word']);
        $data['captcha_image'] = $cap['image'];
        $data['states'] = $this->User_model->getStates();
        $this->load->view('register', $data);
    }

    public function RegisterUser() {
        //        Captcha Validation
        if ($this->session->userdata('captcha_word') == $this->input->post('captcha')) {
            $details = $this->input->post();
            $pass = $this->generateRandomString();
			$userDetails = array(
					'email' => $details['schoolemail'],
					'username' => $details['name'],
					'Password' => $pass
					);

            $user = $this->User_model->CreateUser($userDetails);
            $details['userid'] = $user;
			$details['pass'] = $pass;
            $user = $this->School_model->RegisterUser($details);
            if (isset($user))
			    redirect(base_url('login'));
        } else 
        {
            $this->session->set_flashdata('error', 'Please Enter a Valid Captcha !');
            redirect(base_url('login/register'));
        }
    }
	 public function generateRandomString($length = 5) 
	 {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
    
    function ChangePass()
    {
        $post = $this->input->post();
		if($this->User_model->CheckPassword($post,$this->session->userdata('USER_ID')))
		{
			if($this->User_model->ChangePassword($post,$this->session->userdata('USER_ID')))
				redirect('/Login');
        }
		else
		{
			$this->session->set_flashdata('error', 'Invalid Password');
			redirect('/School');
		}
    }


}

?>