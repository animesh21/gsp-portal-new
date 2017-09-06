<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_2017 extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->helper(array('download', 'common_helper', 'form'));
        $this->load->model('admin/Audit_started_model');
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started_2017';
        $data['title'] = 'Home | Registration 2017';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    /*
     * Generate Excel
     */

    public function excel() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData();
        $name = 'registration_2017.csv';
        force_download($name, $row);
    }
    
    /*
     * Generate Response
     */
    public function response($argID)
    {
        $data['title'] = 'Home | School';
        $data['states'] = getStates();
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/school', $data);
    }
    
    /*
     * Generate Response General
     */
    public function general($argID)
    {
        $data['title'] = 'Home | General';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/general', $data);
    }

    /*
     * Generate Response Air
     */
    public function air($argID)
    {
        $data['title'] = 'Home | Air';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/air', $data);

    }
    /*
     * Generate Response Energy
     */
    public function energy($argID)
    {
        $data['title'] = 'Home | Energy';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/energy', $data);
    }

    /*
     * Generate Response Land
     */
    public function land($argID)
    {
        $data['title'] = 'Home | Land';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/land', $data);
    }

    /*
     * Generate Response Land
     */
    public function water($argID)
    {
        $data['title'] = 'Home | Water';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/water', $data);
    }

    /*
     * Generate Response Waste
     */
    public function waste($argID)
    {
        $data['title'] = 'Home | Waste';
        $data['id']=$argID;
        $data['school']=$this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID']=$data['school']->userid;
        $this->load->view('admin/survey/waste', $data);
    }
}
