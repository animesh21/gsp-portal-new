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
		$data['audit1']=$this->Dashboard_model->getschool_started_audit();
		//echo '<pre>'; print_r($data['audit1']);exit();
        $data['Schools'] = $this->School_model->getSchools();
        $data['schoolcount']=$this->Dashboard_model->schoolCount();
		$data['completecount']=$this->Dashboard_model->getschool_that_complete_audit();
	        $data['submitcount']=$this->Dashboard_model->getschool_that_submit_audit();
		$data['uncompletecount']=$this->Dashboard_model->getschool_start_but_not_complete();
		$data['notstartcount']=$this->Dashboard_model->getschools_not_start_the_audit();
		//echo '<pre>'; print_r($data['uncompletecount']);exit();
        $this->load->view('admin/includes/template', $data);
    }
    
    public function  registration_2017()
    {
        $data['main']='admin/audit/register_2017';
        $data['title']='Registration 2017';
        $data['record']=$this->Dashboard_model->getData();
		//echo '<pre>'; print_r($data['record']);exit();
        $data['Schools'] = $this->School_model->getSchools();
		//echo '<pre>'; print_r($data['Schools']);exit();
        $data['schoolcount']=$this->Dashboard_model->schoolCount();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function total_school_registration()
	{
		$data['main']='admin/audit/total_school';
		$data['title']='Total no. of school';
		 
		$data['records']=$this->Dashboard_model->totalschool();
		//echo '<pre>'; print_r($data['records']);exit();
		 $this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_started_audit()
	{
		$data['main']='admin/audit/started_audit';
		$data['audit']=$this->Dashboard_model->school_started_audit();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_complete_audit()
	{
		$data['main']='admin/audit/complete_school';
		$data['complete']=$this->Dashboard_model->school_that_complete_audit();
		//echo '<pre>'; print_r($data['complete']);exit();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_submit_audit()
	{
		$data['main']='admin/audit/complete_audit_submit';
		$data['complete_submit']=$this->Dashboard_model->getschool_that_submit_audit_data();
		//echo '<pre>'; print_r($data['complete']);exit();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function audit_started_but_not_complete()
	{
		$data['main']='admin/audit/uncomplete_school';
		$data['uncomplete']=$this->Dashboard_model->school_start_but_not_complete();
		//echo '<pre>'; print_r($data['uncomplete']);exit();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function schools_did_not_start_the_audit()
	{
		$data['main']='admin/audit/notstart_school';
		$data['notstart']=$this->Dashboard_model->schools_not_start_the_audit();
		//echo '<pre>'; print_r($data['notstart']);exit();
		$this->load->view('admin/includes/template', $data);
	}

}
	
