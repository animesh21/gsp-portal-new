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
	echo "hello";
        
	$config = array(
               'protocol' => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_port' => 465,
               'smtp_user' => 'guruvachanj@gmail.com',
                'smtp_pass' => 'chikoo!96',
               'mailtype' => 'html',
               'charset' => 'iso-8859-1',
               'wordwrap' => TRUE
           );    

        $this->load->library('email', $config);

        $this->email->from('guruvachanj@gmail.com', 'invoice');
        $this->email->to('guruvachan@studiotesseract.biz');
        $this->email->subject('Invoice');
        $this->email->message('Test');
        
        $this->email->send();
       echo $this->email->print_debugger();      
		   
        
    }

    /*
     * Success Message
     */

    public function success() {
        //echo 'Hi'; exit;
        $this->load->view('admin/audit/template');
    }

}
