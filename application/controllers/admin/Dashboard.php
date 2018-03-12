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
	
        $this->load->view('admin/includes/template', $data);    
	    
       
    }
	
    public function year() {
         $data['main']='admin/dashboard/year';
        $data['title']='Home | Dashboard';
	$data['audit1']=$this->School_model->getSchools();
	$data['audit2']=$this->School_model->getSchools_phase_2();
        $this->load->view('admin/includes/template', $data);
    }

    public function year18() {
         $data['main']='admin/dashboard/year_18';
        $data['title']='Home | Dashboard';
	
        $this->load->view('admin/includes/template', $data);
    }	
	
	public function audit_pahse_1(){
	        $data['main']='admin/dashboard/audit-pahse-1';
                $data['title']='Home | Audit Phase 1';
		$data['audit1']=$this->Dashboard_model->getschool_started_audit();
                $data['Schools'] = $this->School_model->getSchools();
                $data['schoolcount']=$this->Dashboard_model->schoolCount();
		$data['completecount']=$this->Dashboard_model->getschool_that_complete_audit();
		$data['submitcount']=$this->Dashboard_model->getschool_that_submit_audit();
		$data['submitcount2']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
		$data['uncompletecount']=$this->Dashboard_model->getschool_start_but_not_complete();
		$data['notstartcount']=$this->Dashboard_model->getschools_not_start_the_audit();
	    $this->load->view('admin/includes/template', $data);
	}
	
    public function  registration_2017()
    {
        $data['main']='admin/audit/register_2017';
        $data['title']='Registration 2017';
        $data['record']=$this->Dashboard_model->getData();
        $data['Schools'] = $this->School_model->getSchools();
        $data['schoolcount']=$this->Dashboard_model->schoolCount();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function total_school_registration()
	{
		$data['main']='admin/audit/total_school';
		$data['title']='Total no. of school'; 
		$data['records']=$this->Dashboard_model->totalschool();
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
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_submit_audit()
	{
		$data['main']='admin/audit/complete_audit_submit';
		$this->load->view('admin/includes/template', $data);
	}
	public function school_that_submit_audit_emailsend_phase_email()
	{
	   $records=$this->Dashboard_model->getschool_that_submit_audit_data();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
		    'udise'=>$record->udise,
		    'name'=>$record->name,
		    'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city,
		    'coname'=>$record->coname,
		    'coemail'=>$record->coemail,
		    'comobile'=>$record->comobile,
		    'progress'=>$record->progress,
		    'date_added'=>$record->date_added);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
	}
	
	public function audit_started_but_not_complete()
	{
		$data['main']='admin/audit/uncomplete_school';
		$data['uncomplete']=$this->Dashboard_model->school_start_but_not_complete();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function schools_did_not_start_the_audit()
	{
		$data['main']='admin/audit/notstart_school';
		$data['notstart']=$this->Dashboard_model->schools_not_start_the_audit();
		$this->load->view('admin/includes/template', $data);
	}
	 
	 
	
	public function audit_pahse_2(){
	    $data['main']='admin/dashboard/audit-pahse-2';
        $data['title']='Home | Audit Phase 2';
		$data['audit1']=$this->Dashboard_model->getschool_started_audit_phase_2();
        $data['Schools_pahse2'] = $this->School_model->getSchools_phase_2();
        $data['schoolcount']=$this->Dashboard_model->schoolCount_phase_2();
	$data['complete_audit_phase_2_count']= $this->Dashboard_model->school_that_complete_audit_phase_2_count();
		$data['completecount']=$this->Dashboard_model->getschool_that_complete_audit_phase_2();
		$data['completecount1']=$this->Dashboard_model->getschool_that_complete_audit_phase_2_1();
		$data['submitcount']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
		$data['uncompletecount']=$this->Dashboard_model->getschool_start_but_not_complete_phase_2();
		$data['notstartcount']=$this->Dashboard_model->getschools_not_start_the_audit_phase_2();
	    $this->load->view('admin/includes/template', $data);
	}
	 
	 
	public function  registration_2017_phase_2()
    {
        $data['main']='admin/audit/register_2017_phase_2';
        $data['title']='Registration 2017';
        $data['record']=$this->Dashboard_model->getData_phase_2();
        $data['Schools'] = $this->School_model->getSchools_phase_2();
        $data['schoolcount']=$this->Dashboard_model->schoolCount_phase_2();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function  registration_2017_phase_new_2()
        {
        $data['main']='admin/audit/register_2017_phase_new_2';
        $data['title']='Registration 2017';
        $data['record']=$this->Dashboard_model->getData_phase_2_1();
        $data['Schools'] = $this->School_model->getSchools_phase_2();
        $data['schoolcount']=$this->Dashboard_model->schoolCount_phase_2();
        $this->load->view('admin/includes/template', $data);
        }
	
	
	public function total_school_registration_phase_2()
	{
		$data['main']='admin/audit/total_school_phase_2';
		$data['title']='Total no. of school'; 
		$data['records']=$this->Dashboard_model->totalschool_phase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_started_audit_phase_2()
	{
		$data['main']='admin/audit/started_audit_phase_2';
		$data['audit']=$this->Dashboard_model->school_started_audit_phase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_complete_audit_phase_2()
	{
		$data['main']='admin/audit/complete_school_phase_2';
		$data['complete']=$this->Dashboard_model->school_that_complete_audit_phase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function school_that_submit_audit_phase_2()
	{
		$data['main']='admin/audit/complete_audit_submit_phase_2';
		$data['complete_submit']=$this->Dashboard_model->getschool_that_submit_audit_data_phase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function audit_started_but_not_complete_phase_2()
	{
		$data['main']='admin/audit/uncomplete_school_phase_2';
		$data['uncomplete']=$this->Dashboard_model->school_start_but_not_complete_phase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function schools_did_not_start_the_audit_phase_2()
	{
		$data['main']='admin/audit/notstart_school_phase_2';
		$data['notstart']=$this->Dashboard_model->schools_not_start_the_audit_phase_2();
		$this->load->view('admin/includes/template', $data);
	} 
	
	/************** 2018 ******************/
    public function total18_registration()
	{
		$data['main']='admin/audit18/total_school';
		$data['title']='Total no. of school'; 
		$data['records']=$this->Dashboard_model->getSchool_18data();
		$this->load->view('admin/includes/template', $data);
	}  
	 
}
	
