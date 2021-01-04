<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wt extends CI_Controller {
    /* 
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Audit_started_model');
        $this->load->model('School_model');
        $this->load->model(array('admin/Report','admin/Dashboard_model'));
        $this->load->helper(array('common_helper', 'form', 'download'));
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->model(array('Answer_model', 'file','User_model','admin/Dashboard_model'));
        $this->load->model('admin/Audit_started_model');
        $this->load->model('admin/Report');
        $this->session->userdata('USER_ID') == '';
        $this->load->helper('date');
        $this->load->library('zip');
    }

    public function audit_started_school_waste() {
        $data['main'] = 'admin/audit/audit_started';
        $data['title'] = 'Home | Audit Started';
        $data['record'] = $this->Audit_started_model->getDatawt();
        $this->load->view('admin/includes/template', $data);
    }


}