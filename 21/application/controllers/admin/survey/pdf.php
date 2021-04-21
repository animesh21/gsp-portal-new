<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    	
    }

    public function index() {
    	$data['title'] = 'General';
        
            
        
        
        
        
        
        
            $argPost['userid'] = $this->session->userdata('userid');
            $argPost['type'] = 1;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $this->load->view('admin/survey/general',$data);
        
    }
    
	
}

