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
        redirect(base_url('admin/audit_started_2017'));
    }

}
