<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Theteam extends CI_Controller {
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
    	$data['title'] = 'The Team';
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
            $data['files']=$this->file->getFilesData($this->session->userdata('USER_ID'));
            $data['filesfules']=$this->file->getFilesDatafules($this->session->userdata('USER_ID'));
            $data['airQualityMonitering']=$this->file->AirQuality($this->session->userdata('USER_ID'));
            $data['pucCertificate']=$this->file->pucCertificate($this->session->userdata('USER_ID'));
        	//New Added Code
        	$data['cities'] = $this->User_model->getCitiesAll($data['data']['state']);
        	$this->load->view('WasteTrans/theteam',$data);
        }
    }

    public function set()
    {
        
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,0);
        redirect(base_url("Areyou"));
        //print_r($post);
    }
	
      

}