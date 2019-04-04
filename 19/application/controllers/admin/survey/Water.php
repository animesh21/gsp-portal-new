<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Water extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    
    }

    public function index() {
    	    $data['title'] = 'Water';
            $argPost['userid'] = $this->session->flashdata('userid');
            $argPost['type'] = 6;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $this->load->view('admin/survey/water',$data);
        
    }
    
}
