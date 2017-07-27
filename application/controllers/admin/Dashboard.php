<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        $this->load->model('School_model');
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
            
        }
    }

    public function index() {
        $data['main']='admin/dashboard/index';
        $data['title']='Home | Dashboard';
        $data['Schools'] = $this->School_model->getSchools();
        $this->load->view('admin/includes/template', $data);
    }

}
