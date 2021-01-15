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
        // $this->Answer_model->submitAnswers($post,0);
        // redirect(base_url("Areyou"));
        //print_r($post);
        // $post = $this->input->post();
        // $this->Answer_model->submitAnswers($post,0);
        $get_current_user=$this->session->userdata('USER_ID');
        $get_current_year=date('Y');
        $data=$this->db->select("id")->from('gsp_school')->where("userid=".$get_current_user)->get()->result();
        $get_school_id=$data[0]->id;

                    $shool_record=array("school_id"=>$get_school_id,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
                    $this->db->insert('gsp_waste_submitted',$shool_record);
                    
                    // $this->db->where(array("id"=>$get_current_user));
                    // $this->db->update("gsp_user",array("status"=>'1'));     
                    
                    
                    
                    // $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
                    // $this->session->set_flashdata('success', 'Successfully logged out!');
                    
                    $this->Answer_model->submitAnswers($post,0);

                    // $this->Answer_model->submitAnswers($argPost,$userId,$type);
                    updateProgress($this->session->userdata('USER_ID'), 100);
                    redirect(base_url('Theteam/submit'));
                    //print_r($post);
    }
    public function submit(){
        $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
        $this->session->set_flashdata('success', 'Successfully logged out!');
        $this->load->view('WasteTrans/areyou',$data);
    }
	
      

}