<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
            
        }
        $this->load->model(array('School_model', 'admin/Dashboard_model'));
    }

    public function index() {
        $data['main']='admin/dashboard/index';
        $data['title']='Home | Dashboard';
        $data['Schools'] = $this->School_model->getSchools();
        $data['schoolcount']=$this->Dashboard_model->schoolCount();
        $this->load->view('admin/includes/template', $data);
    }
    
    public function  registration_2017()
    {
        $data['main']='admin/audit/register_2017';
        $data['title']='Registration 2017';
        $data['record']=$this->Dashboard_model->getData();
        //$data['Schools'] = $this->School_model->getSchools();
        //$data['schoolcount']=$this->Dashboard_model->schoolCount();
        $this->load->view('admin/includes/template', $data);
    }

}
