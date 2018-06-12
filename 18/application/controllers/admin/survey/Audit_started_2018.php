<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_2018 extends CI_Controller {
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
    
    
    public function excel_total_school() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelTotalSchool();
        $name = 'registration_2017.csv';
        force_download($name, $row);
    }
}    
