<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Baseline extends CI_Controller {
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
    }


public function index() {
	    if ($this->session->userdata('USER_ID') == '') {
            redirect('downloadLogin');
    	}
        $data['main'] = 'All School List Complete & Submit The Audit';
        $data['title'] = 'Home | Response Report 2017';
	$schoolId=getSchoolId($this->session->userdata('USER_ID'));
//      $data['date'] = $this->db->select('date_added')->from('gsp_school')->where('id', $schoolId)->get()->result();
        $phase2 = $this->db->select('school_id')->from('tbl_total_phase2')->where('school_id',$schoolId)->get()->result();
        if(!empty($phase2)){
        $this->load->view('download-report', $data);        
        }else{
        $this->load->view('d1');
        }
    }
    public function downloadWasteSection(){
        $this->load->view('download_waste1');
      }
}
