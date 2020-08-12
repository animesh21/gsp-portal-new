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
        $this->load->model('admin/Login_model');
        $this->load->model('admin/Audit_started_model');
    }

    public function index() {
        $data['title'] = 'ADMIN | LOGIN';
        //Validation
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $varCheckLogin = $this->Login_model->checkLogin($post);
            if ($varCheckLogin) {
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }
        }
        $this->load->view('admin/login/index', $data);
    }
    
    public function Auth(){
        $password = $this->input->post('password');
        $userid = $this->input->post('userid');
        $auth = $this->Login_model->checkAuth($password,$userid);
        redirect(base_url('admin/audit_started'));
    }
	
	 public function Auth_unable(){
		  $data['main'] = 'admin/audit/disabled_school';
        $data['title'] = 'Home | Disabled School';
		
	  
        $password = $this->input->post('password');
		//echo $password;exit;
		
		if($password!=''){
		
		$userid = $this->input->post('userid');
		
		$auth_unabled = $this->Login_model->checkAuth_unable($password,$userid);
		if($auth_unabled)
			{
				echo '<script language="javascript">';
				echo 'alert("School Successfully Unable")';
				echo '</script>';
				
				
			}
			else
			{
			 echo '<script language="javascript">';
			 echo 'alert("Wrong Password")';
			 echo '</script>';
			}
			
		 $this->load->view('admin/includes/template', $data);
		}else{
			 $this->load->view('admin/includes/template', $data);
			
		}
    }
	
	public function Auth_unable1(){
		  $data['main'] = 'admin/audit/audit_started';
        $data['title'] = 'Home | Disabled School';
		
	  
        $password = $this->input->post('password');
		//echo $password;exit;
		
		if($password!=''){
		
		$userid = $this->input->post('userid');
		
		$auth_unabled = $this->Login_model->checkAuth_unable1($password,$userid);
		if($auth_unabled)
			{
				echo '<script language="javascript">';
				echo 'alert("School Successfully Disable")';
				echo '</script>';
				
				
			}
			else
			{
			 echo '<script language="javascript">';
			 echo 'alert("Wrong Password")';
			 echo '</script>';
			}
			
			 $this->load->view('admin/includes/template', $data);
		}else{
			 $this->load->view('admin/includes/template', $data);
			
		}
    }
	

}
