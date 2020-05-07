<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrations extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation','session');
        $this->load->model('School_model');
    }

    public function index() {

        $data['data'] = $this->School_model->GetRegistered();
        $data['title'] = 'ADMIN | Dashboard';
        $this->load->view('admin/registrations', $data);
    }
    public function setUser()
    {
        //$user = $this->input->get();
        //$user = 1;
        $user['userid'] = $this->uri->segment(4);

        $this->session->set_userdata($user);
        redirect('admin/survey/School');
    }

}
