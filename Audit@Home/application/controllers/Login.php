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

            $submitted= $this->Login_model->checksumitted($post);
             
            if (!empty($varCheckLogin)) { 		  
                redirect(base_url('general'));
            } else { 
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }
            if (!empty($submitted)) { 		  
                redirect(base_url('general'));
            } else { 
                $this->session->set_flashdata('error', 'You have already submitted the survey. Please stay tuned to our emails for further updates on your scorecard! 
                ');
            }
        }
		$this->load->view('login',$data);
	}

	public function logout(){
        $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
        $this->session->set_flashdata('success', 'Successfully logged out!');
	    redirect(base_url());
    }

    public function welcome(){
        $this->load->view('admin/welcome');
    }
    // public function forgot_password()
    // {
    //     $data = new stdClass();

    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('useremail', 'User Email', 'required|valid_email|trim|callback_is_exist');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('common/header', $data);
    //         $this->load->view('user/login/forgot-password', $data);
    //         // $this->load->view('common/footer');
    //     } else {
    //         $useremail = $this->input->post('useremail');
    //         $this->load->library('email');
    //         $user_id = $this->user_model->get_user_id_from_useremail($useremail);
    //         $user = $this->user_model->get_user($user_id);
    //         $this->email->from('support@greenschoolsprogramme.org', 'Green Schools Programme');
    //         $this->email->to($user->email);
    //         $this->email->subject('Your GSP Community Portal Password');

    //         $email_str = "Dear $user->first_name,";
    //         $email_str .= '<br><br>';
    //         $email_str .= "Your Green Schools Programme Community Portal password is: $user->password";
    //         $email_str .= '<br><br>';
    //         $email_str .= "You can log in to the Portal any time using this email id and the above password: <br>";
    //         $email_str .= base_url('user/login');
    //         $email_str .= '<br><br>';
    //         $email_str .= 'Thank you,';
    //         $email_str .= '<br>';
    //         $email_str .= 'The GSP Team <br><br><br>This is an automated email. Please respond only if you face a problem.';


    //         $this->email->message($email_str);
    //         $this->email->set_mailtype("html");

    //         $this->email->set_alt_message($email_str);

    //         $this->email->send();


    //         $this->session->set_flashdata('backend_success', "Your password has been sent to your email id. <a href='" . base_url("user/login") . "'>Click here</a> to log in to the Community Portal.");
    //         redirect('user/forgot-password');
    //     }
    // }
}



 