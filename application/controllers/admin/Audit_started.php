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
    }

    public function index() {
        $data['main']='admin/audit/audit_started';
        $data['title']='Home | Audit Started';
        $data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

}
