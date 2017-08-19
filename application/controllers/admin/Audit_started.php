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
        $this->load->helper(array('common_helper', 'form'));
    }

    public function index() {
        $data['main']='admin/audit/audit_started';
        $data['title']='Home | Audit Started';
        $data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    
    public function statewise()
    {
        $data['main']='admin/audit/statewise';
        $data['title']='Home | Audit State Wise';
        $data['states'] = getStates();
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    
    public function search()
    {
        $data['main']='admin/audit/search';
        $data['title']='Home | Audit State Wise';
        $data['states'] = getStates();
        $data['val']=$this->input->post('state');
        $data['record']=$this->Audit_started_model->getDataSearch($this->input->post('state'));
        //echo '<pre>'; print_r($data['record']); exit;
        $this->load->view('admin/includes/template', $data);
    }

}
