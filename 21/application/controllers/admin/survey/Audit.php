<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
         $this->load->helper(array('form', 'security', 'common_helper'));
         $this->load->library('form_validation');
         $this->load->model(array('Answer_model', 'file','User_model','admin/Dashboard_model'));
         $this->load->helper(array('download', 'common_helper', 'form'));
         $this->load->model('admin/Audit_started_model');
         $this->session->userdata('USER_ID') == '';
	     $this->load->helper('date');
	     $this->load->library('zip');
    }
   
	public function excel_all_total_school() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelallTotalSchool();
        $name = 'All registration.csv';
        force_download($name, $row);
    }
    
    public function excel_total_school() {

        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelTotalSchool();
        $name = 'registration_2019.csv';
        force_download($name, $row);
    }
	
	public function excel_Started_The_Audit() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelStartedTheAudit();
        $name = 'School that started the audit_2019.csv';
        force_download($name, $row);
    }
	
	public function excel_school_completed_not_sumbitted() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelcompletednotsumbitted();
        $name = 'School that Completed but not sumbitted the audit_2019.csv';
        force_download($name, $row);
    }
	
	public function excel_sumbitted_the_audit() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelsumbittedtheaudit();
        $name = 'School that sumbitted the audit_2019.csv';
        force_download($name, $row);
    }
	
	public function excel_started_but_not_complete() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelstartedtheauditbutnotcomplete();
        $name = 'School that Started the audit but not complete_2018.csv';
        force_download($name, $row);
    }
	
	public function excel_not_start_the_audit() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelnotstatedtheaudit();
        $name = 'School that Not Started the audit_2018.csv';
        force_download($name, $row);
    }
}    
