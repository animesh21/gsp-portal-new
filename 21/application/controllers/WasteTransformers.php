<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WasteTransformers extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->model(array('Answer_model', 'file','User_model'));
        $this->load->helper(array('download', 'common_helper', 'form'));
        $this->load->model('admin/Audit_started_model');
        $this->load->library('pagination');
        $this->load->model(array('School_model', 'admin/Dashboard_model'));
        $this->load->model('admin/Performance_model');
        $this->load->library('form_validation');
        $this->load->model('School_model');
        $this->load->model('User_model');
        $this->load->model('Answer_model');    
    }

    public function index() {
    	$data['title'] = 'School';
    	if ($this->session->userdata('USER_ID') == '') {
        
            redirect('downloadLogin');

        }
        else
        { 
        	$school1 = $this->School_model->getSchool($this->session->userdata('USER_ID'));

	        $argPost['userid'] = $this->session->userdata('USER_ID');
       	 	$argPost['type'] = 0;
        	$school2 = $this->Answer_model->getAnswers($argPost);
        	$data['data'] = array_merge($school1, $school2);
        	$data['states'] = $this->User_model->getStates();
        	//New Added Code
        	$data['cities'] = $this->User_model->getCitiesAll($data['data']['state']);
            $this->load->view('WasteTrans/wastet',$data);
            // $this->load->view('certificates/closed');
        }
    }

    public function set()
    {
        
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,0);
        redirect(base_url("general"));
        //print_r($post);
    }
	
      public function schoolAnswer()
    {
        
        $post = $this->input->post();
        if(!empty(extract($this->input->post()))){
          $id = $this->session->userdata('USER_ID');
          
           $Q1S1_new=  array(
                'Q1S1'=>$Q1S1
            );          
          
            $this->db->where('userid', $id);
            $this->db->update('gsp_school', $Q1S1_new);           

        }
		//print_r($post);exit;

        $this->Answer_model->submitSchoolAnswers($post);
	updateProgress($this->session->userdata('USER_ID'), 25);
        redirect(base_url("Wt"));
       
    }

}