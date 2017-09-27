<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_report extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Performance_model');
        $this->load->helper('common_helper');
    }

    /*
     * Index Function
     */

    public function index() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/index';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    public function air_land() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/air_to_land';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    public function water() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/wate_to_waste';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    public function waste() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/waste';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    public function feedback() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/feedback_points';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    
//    public function excel()
//    {
//        $arrUserID=array();
//        $this->load->dbutil();
//        $record= $this->Performance_model->getData();
//        foreach($record as $r)
//        {
//            $arrUserID[]=$r->userid;
//        }
//        //echo '<pre>'; print_r($arrUserID); exit;
//        $row = $this->Performance_model->getExcel($arrUserID);
//        $name = 'registration2017_by_state.csv';
//        force_download($name, $row);
//    }
    

}
