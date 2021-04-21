<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation','session');
        $this->load->model('School_model');
    	
    }

    public function index() {
    	$data['title'] = 'School';
        $data['data'] = $this->School_model->getSchool($this->session->userdata('userid'));
        $this->load->view('admin/survey/school',$data);
        
    }
	
}
