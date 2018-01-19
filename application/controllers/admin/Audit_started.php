<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Audit_started_model');
        $this->load->helper(array('common_helper', 'form', 'download'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started';
        $data['title'] = 'Home | Audit Started';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    public function statewise() {
        $data['main'] = 'admin/audit/statewise';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
	 $data['states'][0]="All";    
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['states'][0]="All";
        $data['val'] = $this->input->post('state');
        $data['school'] = $this->input->post('school');
      
        $state=$this->input->post('state');
        $school=$this->input->post('school');
        $data['record'] = $this->Audit_started_model->getStateWiseSchool($state,$school);   
	 
       
        
        //echo '<pre>'; print_r($data['record']); exit;
        $this->load->view('admin/includes/template', $data);
    }

    /*
     * State Wise Excel Generation
     */

    public function excel($argID) {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByState($argID);
        $name = 'registration2017_by_state.csv';
        force_download($name, $row);
    }


    /*
     * Send Feedback
     */
     public function feedback() {
	 $data['main'] = 'admin/audit/feedback';
	 $data['title'] = 'Home | Send Feedback';
	 $data['states'] = getStates();
     $this->load->view('admin/includes/template', $data);
     }
	/*
     * Send Filter Feedback
     */ 
	public function filter_email() {
	 $data['states'] = getStates();
	   $data['states'][0]="All";
	   $progress= $this->input->post('progress');
	   $school_category= $this->input->post('school_category');
	   $school_type= $this->input->post('school_type');
	   $state= $this->input->post('state');
	   $email=$this->input->post('email');
	   $school=$this->input->post('school');
	   if(!empty($progress)){
	      $condition=array("a.progress="=>$progress,'a.state='=>$state,"d.questionid="=>'Q1S1',"d.answer="=>$school_category);
	   }
	   $data['title'] = 'Home | Send Feedback With Filters';
	   if(strcmp($email,"coemail")==0){
	   $data['main'] = 'admin/audit/feedback-with-filter';
           $data['record'] = $this->Audit_started_model->emailFilter($condition);
	   $this->load->view('admin/includes/template', $data); 
	   }
	   else if(strcmp($email,"schoolemail")==0)
	   {
	   $data['main'] = 'admin/audit/feedback-with-filter-1';
           $data['record'] = $this->Audit_started_model->emailFilter1($condition);
	   $this->load->view('admin/includes/template', $data); 
	   }	
    }

}
