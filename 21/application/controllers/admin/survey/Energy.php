<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Energy extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    	
    }

    public function index() {
    	$data['title'] = 'Energy';
        //Validation
        
            $argPost['userid'] = $this->session->userdata('userid');
            $argPost['type'] = 3 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            
            $this->load->view('admin/survey/energy',$data);
        
    }
   
}
