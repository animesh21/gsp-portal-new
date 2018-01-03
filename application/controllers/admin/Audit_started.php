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
	ini_set('max_execution_time', 300);    
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
			 
            $rec=explode(',', $record[$i]);
	   // $msg = "Dear &nbsp;";
           // $msg .= "School,".$rec[1]."<br/><br/>";
           // $msg .= "Message: &nbsp; &nbsp; ".$message . "," . "<br/><br/>";
            
          //  $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            //$msg .= "Thanks,<br><br>";
	    $data['from']=$from;
            $data['school']=$rec[0][1];
            $data['message']=$message;
            $data['subject']=$subject;
            $msg  = $this->load->view('admin/audit/template', $data,TRUE);
            
            $this->email->to($rec[0]);
            $this->email->from($from, "GSP Team");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();	
		
        }
         //$arrMails = array($query->schoolemail, $query->coemail, 'nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'studiotesseractst@gmail.com');
            
              
           
		   
        }
        $this->load->view('admin/includes/template', $data);
    }
	
     public function feedback1() {
        $data['main'] = 'admin/audit/feedback1';
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
			 
            $rec=explode(',', $record[$i]);
	   // $msg = "Dear &nbsp;";
           // $msg .= "School,".$rec[1]."<br/><br/>";
           // $msg .= "Message: &nbsp; &nbsp; ".$message . "," . "<br/><br/>";
            
          //  $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            //$msg .= "Thanks,<br><br>";
	    $data['from']=$from;
            $data['school']=$rec[0][1];
            $data['message']=$message;
            $data['subject']=$subject;
            $msg  = $this->load->view('admin/audit/template', $data,TRUE);
            
            $this->email->to($rec[0]);
            $this->email->from($from, "GSP Team");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();	
		
        }
         //$arrMails = array($query->schoolemail, $query->coemail, 'nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'studiotesseractst@gmail.com');
            
              
           
		   
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
    /*
     * Filter Message
     */

    public function filter_email() {
	$sr_no=0;    
	$args_email_type= $this->input->post('coemail');
	if($this->input->post('progress'))
	{
		$args_progress= $this->input->post('progress');
		//print_r($args_progress);exit;
		$condition=$args_progress;
	}
	if($this->input->post('state'))
	{
		$args_state= $this->input->post('state');
		$condition=$args_state;
	}
	$args_email_type=explode(',',$args_email_type);
	$email_list="";
	foreach($args_email_type as $args_email_type1):
	if(strcmp($args_email_type1,"coemail")==0):
	   $data=$this->db->select("id,name,progress,state,district,".$args_email_type1)->from('gsp_school')->where($condition)->get()->result();
	  //echo $this->db->last_query();die;
	    
	    foreach ($data as $data1): 
			 $email_list .='<tr class="odd"><td>'.++$sr_no.'</td><td>'.$data1->id.'</td><td>'.$data1->coemail.'</td><td>'.$data1->progress.'</td><td><label class="checkbox-inline"><input type="checkbox" class="checkbox" name="email_list[]" value='.$data1->coemail.' style="opacity: 0.8; margin-top:-1px;" /></label></td></tr>';
		endforeach;
		endif; 
		
	if(strcmp($args_email_type1,"schoolemail")==0):
       $data=$this->db->select("id,name,progress,state,district,".$args_email_type1)->from('gsp_school')->where($condition)->get()->result();
	   foreach ($data as $data1):    
	  $email_list .='<tr class="even"><td>'.++$sr_no.'</td><td>'.$data1->id.'</td><td>'.$data1->schoolemail.'</td><td>'.$data1->progress.'</td><td><label class="checkbox-inline"><input type="checkbox" name="email_list[]" class="checkbox" value='.$data1->schoolemail.' style="opacity: 0.8; margin-top:-1px;" /></label></td></tr>';
	   // echo $this->db->last_query();die;
	  endforeach;
		 endif;
	endforeach;
	echo $email_list;
    }	

}
