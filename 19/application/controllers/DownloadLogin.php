<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
		$this->load->model('admin/Audit_started_model');
        $this->load->model('User_model');
        $this->load->model('School_model');
    }

    public function index() {
        $data['title'] = 'Green School';
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $varCheckLogin = $this->User_model->UserLoginDownload($post);
            $varCheckLogin1 = $this->User_model->UserLoginDownload2($post);
            if ($varCheckLogin) {
			    if($varCheckLogin=="success"){
                redirect('https://localhost/gsp_19/18/download/downloadFiles');
				}
				elseif($varCheckLogin=="warning")
				{
				  $this->session->set_flashdata('error', "The School Have Completed The GSP Audit So The School Can't Submit Audit Again");
				}
		                elseif($varCheckLogin=="incomplete")
				{
				  $this->session->set_flashdata('error', "The School Have To Completed Full GSP Audit.");
				}
            } else if($varCheckLogin=="error") {
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }

            if ($varCheckLogin1) {
          if($varCheckLogin1=="success"){
                redirect('https://greenschoolsprogramme.org/audit/download/downloadFiles');
        }
        elseif($varCheckLogin1=="warning")
        {
          $this->session->set_flashdata('error', "The School Have Completed The GSP Audit So The School Can't Submit Audit Again");
        }
                    elseif($varCheckLogin1=="incomplete")
        {
          $this->session->set_flashdata('error', "The School Have To Completed Full GSP Audit.");
        }
            } else if($varCheckLogin1=="error") {
                $this->session->set_flashdata('error', 'Invalid Email/Password!');
            }

        }
	     $this->load->view('download-login');
    }
	
	
	
	 public function download_report() {
       
        $data['title'] = 'Green School';
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $varCheckLogin = $this->User_model->UserLoginDownload1($post);
            $varCheckLogin1 = $this->User_model->UserLoginDownload2($post);
            if ($varCheckLogin) {

                 redirect(base_url('download/downloadFiles'));
                     }
                      if ($varCheckLogin1) {

                 redirect(base_url('download/downloadFiles'));
                     }
                     else{

                         $this->session->set_flashdata('error', 'Invalid Email/Password!');
                     }
         $this->load->view('download-login_home');
      }
    	
   }
	
	
    	
}

?>
