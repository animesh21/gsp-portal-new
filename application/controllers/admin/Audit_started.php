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
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

    public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['val'] = $this->input->post('state');
        $data['record'] = $this->Audit_started_model->getDataSearch($this->input->post('state'));
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
        $data['main'] = 'admin/audit/feedback';
        $data['title'] = 'Home | Send Feedback';
        $data['school'] = $this->Audit_started_model->getCordinatorsEmail();
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        } else {
            
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $from = "support@greenschoolsprogramme.org";
            $record = $this->input->post('email');
            $subject = $this->input->post('subject');
	    $message=$this->input->post('message');
        for ($i = 0; $i < count($record); $i++) {
			 
            $rec[]=explode(',', $record[$i]);
        }
        for ($i = 0; $i < count($record); $i++) {
            $arrMails[]=$rec[$i][0];
            $arrMsg[]=$rec[$i][1];
        }    //$arrMails = array($query->schoolemail, $query->coemail, 'nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'studiotesseractst@gmail.com');
            $to = $arrMails;
            $msg = "Dear &nbsp;";
            $msg .= "School,<br/><br/>";
            $msg .= "Message: &nbsp; &nbsp; ".$message . "," . "<br/><br/>";
            
            $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            $msg .= "Thanks,<br><br>";
            
            $this->email->to($to);
            $this->email->from($from, "GSP Team");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
              
           
		   
        }
        $this->load->view('admin/includes/template', $data);
    }
    /*
     * Success Message
     */

    public function success() {
        //echo 'Hi'; exit;
        $this->load->view('admin/audit/template');
    }

}
