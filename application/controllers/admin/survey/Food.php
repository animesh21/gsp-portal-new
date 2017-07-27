<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    	$user = 1;
   
    }

    public function index() {
    	$data['title'] = 'Food';
       
            $argPost['userid'] = $this->session->userdata('userid');
            $argPost['type'] = 4 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            
            $this->load->view('admin/survey/food',$data);
        
    }
    
	
}
