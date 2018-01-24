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
	 $data['states'] = getStates();
	 $data['states'][0]="All"; 
	 $data['main'] = 'admin/audit/feedback';
	 $data['title'] = 'Home | Send Feedback';
         $this->load->view('admin/includes/template', $data);
     }
	/*
     * Send Filter Feedback
     */ 
	public function filter_email() {
	  	//echo '<pre>'; print_r($_POST);
		$filed='';
		$byMail=$this->input->post('email');
		if($byMail=='coemail')
		{
		   $filed="a.coemail";
		}else if($byMail=='schoolemail')
		{
		   $filed="a.schoolemail";
		}
		$byProgress=$this->input->post('progress');
		$byCategory=$this->input->post('school_category');
		$bySchoolType=$this->input->post('school_type');
		$byAidType=$this->input->post('school_aid');
		$byState=$this->input->post('state');
		$bySchoolName=$this->input->post('schoolname');
		$rating=$this->input->post('rating');
		$query = "SELECT a.id, a.udise, a.userid, a.name, a.country, a.state, a.district, a.city, a.progress, a.Q1S1, a.Q2G1, a.Q9G1, $filed, b.name AS state_name, c.name AS district_name,a.remark FROM tbl_sendmail AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id";
        $conditions = array();
		
		//Progress Condition
		if(! empty($byProgress)) {
         $conditions[] = "a.progress='$byProgress'";
        }
		
		//Category
		if(! empty($byCategory)) {
         $conditions[] = "a.Q1S1='$byCategory'";
        }
		
		//Schoo Type
		if(! empty($bySchoolType)) {
         $conditions[] = "a.Q2G1='$bySchoolType'";
        }
		
		//School type aid
		if(! empty($byAidType)) {
         $conditions[] = "a.Q9G1='$byAidType'";
        }
		
		//State
		if(! empty($byState)) {
         $conditions[] = "a.state='$byState'";
        }
		
		//school Name
		if(! empty($bySchoolName)) {
         $conditions[] = "a.name LIKE '%$bySchoolName%'";
        }
	//school rating
	if(! empty($bySchoolName)) {
         $conditions[] = "a.remark LIKE '%$rating%'";
        }	
		
		$sql = $query;
		
        if (count($conditions) > 0) {
          $sql .= " WHERE " . implode(' AND ', $conditions);
        }
		//echo $sql; exit;
        $query =$this->db->query($sql);
		///$data=$query->result_array();
		$data['states'] = getStates();
		$data['main'] = 'admin/audit/feedback-with-filter';
		$data['record']=$query->result_array();
        $this->load->view('admin/includes/template', $data);
    }

}
