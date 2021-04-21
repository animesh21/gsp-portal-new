<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waste extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    	$user = 1;
    	
    }

    public function index() {
    	$data['title'] = 'Air';
        //Validation
        //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'trim|required');

        /*if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {*/
            //$post = $this->security->xss_clean($this->input->post());
            $argPost['userid'] = $this->session->userdata('userid');
            $argPost['type'] = 7  ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            print_r($data['data']);
            $this->load->view('waste',$data);
        
    }
    public function update()
    {

    }
	
}
