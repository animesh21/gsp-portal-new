<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Audit_started_model');
        $this->load->helper(array('common_helper', 'form', 'download'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started';
        $data['title'] = 'Home | Audit Started';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    public function statewise() {
        $data['main'] = 'admin/audit/statewise';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
	 $data['states'][0]="All";    
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['states'][0]="All";
        $data['val'] = $this->input->post('state');
        $data['school'] = $this->input->post('school');
      
        $state=$this->input->post('state');
        $school=$this->input->post('school');
        $data['record'] = $this->Audit_started_model->getStateWiseSchool($state,$school);   
	 
       
        
        //echo '<pre>'; print_r($data['record']); exit;
        $this->load->view('admin/includes/template', $data);
    }

    /*
     * State Wise Excel Generation
     */

    public function excel($argID) {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByState($argID);
        $name = 'registration2017_by_state.csv';
        force_download($name, $row);
    }


    /*
     * Send Feedback
     */
     public function feedback() {
	 $data['states'] = getStates();
	 $data['states'][0]="All"; 
	 $data['main'] = 'admin/audit/feedback';
	 $data['title'] = 'Home | Send Feedback';
         $this->load->view('admin/includes/template', $data);
     }
	/*
     * Send Filter Feedback
     */ 
	/*
     * Send Filter Feedback
     */ 
   public function filter_email() {
        
        $mail = '';
        $filed = '';
        $byMail = $this->input->post('email');
        if ($byMail == 'coemail') {
            $filed = "a.coemail, a.schoolemail";
            $mail = "coemail";
        } else if ($byMail == 'schoolemail') {
            $filed = "a.coemail, a.schoolemail";
            $mail = "schoolemail";
        } else if ($byMail == "allemail") {
            $filed = "a.coemail, a.schoolemail";
            $mail = "both";
        }
        $category = array();
        $aid = array();
        $byPhase=$this->input->post('phase');
        $byProgress = $this->input->post('progress');
        $byCategory = $this->input->post('school_category');
        $bySchoolType = $this->input->post('school_type');
        $byAidType = $this->input->post('school_aid');
        $byState = $this->input->post('state');
        $bySchoolName = $this->input->post('schoolname');
        $rating = $this->input->post('rating');
        $query = "SELECT a.id, a.udise, a.userid, a.name, a.country, a.state, a.district, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, d.remark, d.phase FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id LEFT JOIN tbl_sendmail AS d ON a.id=d.school_id  WHERE";
        $conditions = array();

        
       
        if ($byState != '') {
            if ($byState == "0") {
                $conditions[] = " a.state!='$byState'";
            } else {
                $conditions[] = " a.state='$byState'";
            }
        }

        //school Name
        if (!empty($bySchoolName)) {
            $conditions[] = " a.name LIKE '%$bySchoolName%'";
        }

        //Schoo Type
        if (!empty($bySchoolType)) {
            foreach ($bySchoolType as $a) {
                $aid[] = " a.Q2G1='$a'";
            }
            $conditions[] = "(" . implode(' OR ', $aid) . ")";
        }

        //Progress Condition
        if (!empty($byProgress)) {
           
            foreach ($byProgress as $p) {
               
                $test[] = " a.progress='$p'";
            }
            $conditions[] = "(" . implode(' OR ', $test) . ")";
        }


        //Category
        if (!empty($byCategory)) {
            foreach ($byCategory as $c) {
                $category[] = " a.Q1S1='$c'";
            }
            $conditions[] = "(" . implode(' OR ', $category) . ")";
           
        }

        //School type aid
        if (!empty($byAidType)) {
            foreach ($byAidType as $u) {
                $Aid[] = "a.Q9G1='$u'";
            }
            $conditions[] = "(" . implode(' OR ', $Aid) . ")";
        }

        //school rating
        if (!empty($rating)) {
            $conditions[] = " d.remark LIKE '%$rating%'";
        }
        
        //By Phase
        if($byPhase !=0)
        {
            $conditions[] = "d.phase='$byPhase'";
        }

        $sql = $query;

        if (count($conditions) > 0) {
            $sql .= implode(' AND ', $conditions);
        }
        ///echo $sql; exit;
        $query = $this->db->query($sql);
        ///$data=$query->result_array();

        $data['states'] = getStates();
        $data['states'][0] = "All";
        $data['main'] = 'admin/audit/feedback-with-filter';
        $data['record'] = $query->result_array();
        $data['mail_status'] = $mail;
        $this->load->view('admin/includes/template', $data);
    }
}
