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
	    $this->load->model('admin/Report');
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
	    $data['states'][1]="All";    
        $this->load->view('admin/includes/template', $data);
    }

     public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['states'][1]="All";
        $data['val'] = $this->input->post('state');
        $data['school'] = $this->input->post('school');
		$state=$this->input->post('state');
		$school=$this->input->post('school');
		
		if($school==2 && $state==1)
		{
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateall();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateall();
		    $data['completed_1']=$this->Report->completeparticipationBystateall();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateall();
			
		}else if($school==1 && $state==1){
			
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateallsecondary();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateallsecondary();
		    $data['completed_1']=$this->Report->completeparticipationBystateallsecondary();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateallsecondary();
			
			
		} else if($school==0 && $state==1){
			
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateallprimary();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateallprimary();
		    $data['completed_1']=$this->Report->completeparticipationBystateallprimary();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateallprimary();
			
		}
		else{
		
		if($school==0)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystateprimary($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystateprimary($state);
		   $data['completed_1']=$this->Report->completeparticipationBystateprimary($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateprimary($state);
		}
		
		if($school==1)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystatesecondary($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystatesecondary($state);
		   $data['completed_1']=$this->Report->completeparticipationBystatesecondary($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystatesecondary($state);
		}
		
		if($school==2)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystate($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystate($state);
		   $data['completed_1']=$this->Report->completeparticipationBystate($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystate($state);
		}
		
		}
		
		
		$data['record'] = $this->Audit_started_model->getStateWiseSchool($state,$school);   
	    $data['state_id1']=$state;
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
	
	 public function excel_region($argID) {
        $this->load->dbutil();
		if($argID=='East')
		{
		  $argID1=array("36", "26", "16", "1", "5"); //$east_india
		}
		
		if($argID=='West')
		{
		  $argID1=array("12", "21", "11", "9", "8"); //$west_india
		}
		
		if($argID=='North')
		{
		  $argID1=array("28", "15", "13", "29", "14", "34", "35", "10", "6"); //$north_india
		}
		
		if($argID=='South')
		{
		  $argID1=array("2", "17", "18", "31", "32", "19", "27"); //$south_india
		}
		
		if($argID=='North East')
		{
		  $argID1=array("3", "4", "22", "23", "24", "25", "30", "33"); //$north_east_india
		}
		
		if($argID=='Central')
		{
		  $argID1=array("7", "20"); //$central_india
		}
		
		if($argID=='All')
		{
		  $argID1=array("3","36", "26", "16", "1", "5","12", "21", "11", "9", "8","28", "15", "13", "29", "14", "34", "35", "10", "6","2", "17", "18", "31", "32", "19", "27","7", "20","4", "22", "23", "24", "25", "30", "33"); //$all
		}
	    $row = $this->Audit_started_model->getExcelDataByRegion($argID1);
        $name = 'registration2018_by_region.csv';
        force_download($name, $row);
    }
	
	
	

	public function regionwise() {
        $data['main'] = 'admin/audit/regionwise';
        $data['title'] = 'Home | Audit Region Wise';
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function regionsearch() {
        $data['main'] = 'admin/audit/regionsearch';
        $data['title'] = 'Home | Audit Region Wise';
        $data['region'] = $this->input->post('region');
        $data['school'] = $this->input->post('school');
		 $region=$this->input->post('region');
		 $school=$this->input->post('school');
		 
		 if($region=='East')
		{
		  $region1=array("36", "26", "16", "1", "5"); //$east_india
		}
		
		if($region=='West')
		{
		  $region1=array("12", "21", "11", "9", "8"); //$west_india
		}
		
		if($region=='North')
		{
		  $region1=array("28", "15", "13", "29", "14", "34", "35", "10", "6"); //$north_india
		}
		
		if($region=='South')
		{
		  $region1=array("2", "17", "18", "31", "32", "19", "27"); //$south_india
		}
		
		if($region=='North East')
		{
		  $region1=array("3", "4", "22", "23", "24", "25", "30", "33"); //$north_east_india
		}
		
		if($region=='Central')
		{
		  $region1=array("7", "20"); //$central_india
		}
		
		if($region=='All')
		{
		  $region1=array("3","36", "26", "16", "1", "5","12", "21", "11", "9", "8","28", "15", "13", "29", "14", "34", "35", "10", "6","2", "17", "18", "31", "32", "19", "27","7", "20","4", "22", "23", "24", "25", "30", "33"); //$all
		}
		 
		 
		 
		 if($school==0)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationByregionprimary($region1);
		   $data['total_started_audit_1']=$this->Report->startparticipationByregionprimary($region1);
		   $data['completed_1']=$this->Report->completeparticipationByregionprimary($region1);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregionprimary($region1);
		}
		
		if($school==1)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationByregionsecondary($region1);
		   $data['total_started_audit_1']=$this->Report->startparticipationByregionsecondary($region1);
		   $data['completed_1']=$this->Report->completeparticipationByregionsecondary($region1);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregionsecondary($region1);
		}
		
		if($school==2)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationByregion($region1);
		   $data['total_started_audit_1']=$this->Report->startparticipationByregion($region1);
		   $data['completed_1']=$this->Report->completeparticipationByregion($region1);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregion($region1);
		}
		 
		 
		 
		 
		 $data['region']= $region;	
          $data['record'] = $this->Audit_started_model->getRegionWiseSchool($region,$school);   
         $this->load->view('admin/includes/template', $data);
    }

	
	
	
	
	/*
     * PArtner Excel Generation
     */

   public function partnerexcel() {
        $this->load->dbutil();
        $row =$this->Audit_started_model->getallPartnerData();
        $name = 'Partner List.csv';
        force_download($name, $row);
    }

	

    /*
     * Send Feedback
     */
     public function feedback() {
	 $data['states'] = getStates();
	 $data['states'][0]="All"; 
	 $data['district'] = getDistricts();
	 $data['district'][0]="All";     
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
        ini_set('memory_limit', '-1');
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
	$progress_range= $this->input->post('progress_range');   		
	$byComplete = $this->input->post('complete');   
        $byProgress = $this->input->post('progress');
        $byCategory = $this->input->post('school_category');
        $bySchoolType = $this->input->post('school_type');
        $byAidType = $this->input->post('school_aid');
        $byState = $this->input->post('state');
        $byDistrict = $this->input->post('district');   
        $bySchoolName = $this->input->post('schoolname');
        $rating = $this->input->post('rating');
	$byAlphabate = $this->input->post('alphabate');
	 $byBoard=$this->input->post('board');   
       // $query = "SELECT a.id, a.udise, a.userid, a.name, a.country, a.state, a.district, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, d.remark, d.phase FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id LEFT JOIN tbl_sendmail AS d ON a.id=d.school_id  WHERE";
      // $query = "SELECT a.id,a.school_id,a.Q1S1,a.Q2G1,a.Q9G1, a.udise, a.userid,a.country, a.name, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, a.remark, a.phase FROM tbl_sendmail AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id  WHERE";
     $query = "SELECT a.date_added,a.address1,a.coname,a.address2,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.coemail,a.comobile,a.password,a.mobile,a.principle_name,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1, a.udise, a.userid,a.country, a.name, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, a.remark, a.phase FROM gsp_filter AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id  WHERE"; 
	$conditions = array();

        
	
	   
       
        if ($byState != '') {
            if ($byState == "0") {
                $conditions[] = " a.state!='$byState'";
            } else {
                $conditions[] = " a.state='$byState'";
            }
        }
	
	if ($byDistrict != '') {
            if ($byDistrict == "0") {
                $conditions[] = " a.district!='$byDistrict'";
            } else {
                $conditions[] = " a.district='$byDistrict'";
            }
        }   

        //school Name
        if (!empty($bySchoolName)) {
            $conditions[] = " a.name LIKE '%$bySchoolName%'";
        }
	
	if (!empty($byAlphabate)) {
            $conditions[] = " a.name LIKE '$byAlphabate%'";
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
	
	if (!empty($progress_range)) {
            $conditions[] = " a.progress BETWEEN 10 AND 40";
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
            $conditions[] = " a.remark LIKE '%$rating%'";
        }
	
	if($byBoard !=0)
        {
            $conditions[] = "a.Q3G1='$byBoard'";
        }   
        
        //By Phase
        if($byPhase !=0)
        {
            $conditions[] = "a.phase='$byPhase'";
        }
	   
	if($byComplete !='')
        {
            $conditions[] = "a.complete_status= '1'";
        }      

        $sql = $query;

        if (count($conditions) > 0) {
            $sql .= implode(' AND ', $conditions);
        }
        //echo $sql; exit;
        $query = $this->db->query($sql);
        ///$data=$query->result_array();

        $data['states'] = getStates();
        $data['states'][0] = "All";
	$data['district'] = getDistricts();
        $data['district'][0]="All";   
        $data['main'] = 'admin/audit/feedback-with-filter';
        $data['record'] = $query->result_array();
        $data['mail_status'] = $mail;
        $this->load->view('admin/includes/template', $data);
    }
	
    /**Get Smmary Data**/
	/*24-04-2018*/
	public function getSummary(){
	 $data['main'] = 'admin/audit/summary';
	 $data['title'] = 'Summary';
	 $data['School_18data']=$this->Audit_started_model->getSchool_18data();
	 $data['startedtheaudit_18data']=$this->Audit_started_model->getstartedtheaudit_18data();
	 $data['CompletedAuditButNotSubmitted_18data']=$this->Audit_started_model->getCompletedAuditButNotSubmitted_18data();
	 $data['SubmittedTheAudit_18data']=$this->Audit_started_model->getSubmittedTheAudit_18data();
	 $data['StartedAuditButDidNotComplete']=$this->Audit_started_model->getStartedAuditButDidNotComplete_18data();
	 $data['NotStartTheAudit_18data']=$this->Audit_started_model->getNotStartTheAudit_18data();
	 $data['CompletedAuditButNotSubmitted_18data']=$this->Audit_started_model->getCompletedAuditButNotSubmitted_18data();
         $this->load->view('admin/includes/template', $data);
	}
   /**Get School Delete**/
	/*24-04-2018*/
	public function getSchoolDelete(){
	 $data['main'] = 'admin/audit/delete-school';
	 $data['title'] = 'Summary';
         $this->load->view('admin/includes/template', $data);
	}
	
	public function getSchoolDisable(){
	 $data['main'] = 'admin/audit/unable-school';
	 $data['title'] = 'Summary';
      $this->load->view('admin/includes/template', $data);
	}
}
