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
	$this->load->model('School_model');
	$this->load->model(array('admin/Report','admin/Dashboard_model'));
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
	    $data['states'][38]="All";    
        $this->load->view('admin/includes/template', $data);
    }

     public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();

        $data['states'][38]="All";
        $data['val'] = $this->input->post('state');
        $data['school'] = $this->input->post('school');
	    $data['state'] = $this->input->post('state');
		$state=$this->input->post('state');
		$school=$this->input->post('school');
		
		if($school==2 && $state==1)
		{
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateall();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateall();
		    $data['completed_1']=$this->Report->completeparticipationBystateall();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateall();
		    $data['unompleted_audit']=$this->Report->uncompleteparticipationBystateall();
			
		}else if($school==1 && $state==1){
			
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateallsecondary();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateallsecondary();
		    $data['completed_1']=$this->Report->completeparticipationBystateallsecondary();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateallsecondary();
		    $data['unompleted_audit']=$this->Report->uncompleteparticipationBystateallsecondary();
			
			
		} else if($school==0 && $state==1){
			
			$data['registerd_audit_1']=$this->Report->registerparticipationBystateallprimary();
			$data['total_started_audit_1']=$this->Report->startparticipationBystateallprimary();
		    $data['completed_1']=$this->Report->completeparticipationBystateallprimary();
		    $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateallprimary();
		    $data['unompleted_audit']=$this->Report->uncompleteparticipationBystateallprimary();
			
		}
		else{
		
		if($school==0)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystateprimary($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystateprimary($state);
		   $data['completed_1']=$this->Report->completeparticipationBystateprimary($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateprimary($state);
		   $data['unompleted_audit']=$this->Report->uncompleteparticipationBystateprimary($state);
		   if($data['unompleted_audit']==null)
		   {
		   	$data['unompleted_audit']=0;
		   }
		}
		
		if($school==1)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystatesecondary($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystatesecondary($state);
		   $data['completed_1']=$this->Report->completeparticipationBystatesecondary($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystatesecondary($state);
		   $data['unompleted_audit']=$this->Report->uncompleteparticipationBystatesecondary($state);
		}
		
		if($school==2)
		{
		   $data['registerd_audit_1']=$this->Report->registerparticipationBystate($state);
		   $data['total_started_audit_1']=$this->Report->startparticipationBystate($state);
		   $data['completed_1']=$this->Report->completeparticipationBystate($state);
		   $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystate($state);
		   $data['unompleted_audit']=$this->Report->uncompleteparticipationBystate($state);
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
        $name = 'registration2019_by_state.csv';
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
        $name = 'registration2019_by_region.csv';
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
       
       $data['subject'] = $this->input->post('subject');
        $data['message'] = $this->input->post('message');

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
//      $query = "SELECT a.date_added,a.address1,a.coname,a.address2,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.coemail,a.comobile,a.password,a.mobile,a.principle_name,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1, a.udise, a.userid,a.country, a.name, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, a.remark, a.phase FROM gsp_filter AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id  WHERE"; 
	$query = "SELECT a.id,a.userid,a.udise,a.name,a.address1,a.address2,a.country,a.city,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.mobile,a.coname,a.coemail,a.comobile,a.date_added,a.password,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1,a.progress,a.remark, $filed, b.name AS state_name, c.name AS district_name FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id WHERE"; 
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
               
                if($p=='100')
            	{
            		$test[] = " a.progress='$p' AND make_school_disabled = '1' AND complete_status = '0' ";
            	}
		elseif($p=='5')
            	{
            		$test[] = " a.progress='$p' AND make_school_disabled = '1'";
            	}
		 else{

            		$test[] = " a.progress='$p'";
            	}
            }
            $conditions[] = "(" . implode(' OR ', $test) . ")";
        }
	
	if (!empty($progress_range)) {
            $conditions[] = " a.progress BETWEEN 10 AND 40 AND make_school_disabled = '1'";
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
	
	
	
	public function send_email() {

           //echo $this->input->post('send_mail'); exit;
        if(!empty(extract($this->input->post())))
        {

        	     $Totalemail = implode(",", $email_list); 

        	   $Totalemailpp= explode(',', $Totalemail);
        	   //print_r($Totalemailpp);

        	   $school = array();
		       $codinator = array();

		       foreach ($Totalemailpp as $key => $value) {
		       	if ($key % 2==0){
        	   		$school[$key] = $value;
        	   	}
        	   	else{
        	   		$codinator[$key] = $value;
        	   	}
		       }
        	  
               $i=1;
        	   foreach ($school as $gg) {  
                
        	    require_once APPPATH . "/third_party/pepipost/vendor/autoload.php";
				$client = new PepipostAPILib\PepipostAPIClient();
				$emailController = $client->getEmail();

				// Your Pepipost API Key
				$apiKey = '9fa182fa586cf4b70fad25044936cf7e'; #add apikey from panel here

				$body = new PepipostAPILib\Models\EmailBody();

				// List of Email Recipients
				$body->personalizations = array();
				$body->personalizations[0] = new PepipostAPILib\Models\Personalizations;
				 $body->personalizations[0]->recipient = $gg;

				  $mm = implode(',', $codinator);
				   $mm;

				 if($i==1){                 
                                	 
				 $body->personalizations[0]->recipientCc =  array($mm);	
				  		 
				}
              
				//$body->personalizations[0]->recipientCc = array($Totalemail);
				             #To/Recipient email address
				
				// Email Header
				$body->from = new PepipostAPILib\Models\From;
				$body->from->fromEmail = 'support@greenschoolsprogramme.org';   #Sender Domain. Note: The sender domain should be verified and active under your Pepipost account.
				$body->from->fromName = 'Green School Programme';       #Sender/From name

				//Email Body Content
				$body->subject = "".$subject."";               #Subject of email
				$body->content = '<html><body>'.$message.'</html>'; #HTML content which need to be send in the mail body

				// Email Settings
				$body->settings = new PepipostAPILib\Models\Settings;
				$body->settings->clicktrack = 1;    #clicktrack for emails enable=1 | disable=0
				$body->settings->opentrack = 1;     #opentrack for emails enable=1 | disable=0
				$body->settings->unsubscribe = 1;   #unsubscribe for emails enable=1 | disable=0
				 //$body->settings->bcc = 'ranjita@cseindia.org';

				$response = $emailController->createSendEmail($apiKey,$body);  

              $i++; } 
 
				 #function sends email
				print_r(json_encode($response)); 

		$this->session->set_flashdata('success', 'Your Email is Successfully Send');

				redirect(base_url('admin/audit_started/feedback'));

        }

 }

    /**Get Smmary Data**/
	/*24-04-2018*/
public function getSummary(){
	 ini_set('memory_limit', '256M');
	 $data['main'] = 'admin/audit/summary';
	 $data['title'] = 'Summary';
	 $data['School_18data']=$this->Audit_started_model->getSchool_18data();
	 $data['startedtheaudit_18data']=$this->Audit_started_model->getstartedtheaudit_18data();
	 $data['CompletedAuditButNotSubmitted_18data']=$this->Audit_started_model->getCompletedAuditButNotSubmitted_18data();
	 $data['SubmittedTheAudit_18data']=$this->Audit_started_model->getSubmittedTheAudit_18data();
	 $data['StartedAuditButDidNotComplete']=$this->Audit_started_model->getStartedAuditButDidNotComplete_18data();
	 $data['NotStartTheAudit_18data']=$this->Audit_started_model->getNotStartTheAudit_18data();
	 
	 $data['schoolcount_phase_2']=$this->Dashboard_model->schoolCount_phase_2();
	 $data['audit1_phase_2']=$this->Dashboard_model->getschool_started_audit_phase_2();
	 $data['submitcount_phase_2']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
	 $data['uncompletecount_phase_2']=$this->Dashboard_model->getschool_start_but_not_complete_phase_2();
	 $data['notstartcount_phase_2']=$this->Dashboard_model->getschools_not_start_the_audit_phase_2();
	 $data['complete_audit_phase_2_count_phase_2']= $this->Dashboard_model->school_that_complete_audit_phase_2();

	 /**Get Smmary Data of 2019_Phase_1 Detail**/

	$data['total_school']=$this->Dashboard_model->getSchool_alldata();
	$data['school']=$this->Dashboard_model->getSchool_18data();
    	$data['startedtheaudit']=$this->Dashboard_model->getstartedtheaudit_19data();
    	$data['CompletedAuditButNotSubmitted']=$this->Dashboard_model->getCompletedAuditButNotSubmitted_19data();
    	$data['SubmittedTheAudit']=$this->Dashboard_model->getSubmittedTheAudit_19data();
    	$data['StartedAuditButDidNotComplete']=$this->Dashboard_model->getStartedAuditButDidNotComplete_19data();
    	$data['NotStartTheAudit']=$this->Dashboard_model->getNotStartTheAudit_19data();

       /**Get Smmary Data of 2019_Phase_2 Detail**/

    	$data['audit1']=$this->Dashboard_model->getschool_started_audit_phase_2();
    	$data['Schools_pahse2'] = $this->School_model->getSchools_phase_2();
    	$data['schoolcount']=$this->Dashboard_model->schoolCount_phase_2();
	$data['complete_audit_phase_2_count']= $this->Dashboard_model->school_that_complete_audit_phase_2();
	$data['completecount']=$this->Dashboard_model->getschool_that_complete_audit_phase_2();
	$data['completecount1']=$this->Dashboard_model->getschool_that_complete_audit_phase_2_1();
	$data['submitcount']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
	$data['uncompletecount']=$this->Dashboard_model->getschool_start_but_not_complete_phase_2();
	$data['notstartcount']=$this->Dashboard_model->getschools_not_start_the_audit_phase_2(); 

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
	
	public function getSchoolDisable1(){
	 $data['main'] = 'admin/audit/Disable-school';
	 $data['title'] = 'Summary';
      $this->load->view('admin/includes/template', $data);
	}
	
	public function foundationPartnerrexcel($partnerId){
	 $this->load->library('Excel');	
	 $objPHPExcel = new PHPExcel();
	   $styleArray1 = array(
         'font'  => array(
         'bold'  => true,
		'name' => 'Calibri',
		'size'  => 13,
          ));
	   
	   
	  $partner_countgreen_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","green");
	  $partner_countyellow_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","yellow");
	  $partner_countorange_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","orange");
	  $partner_countred_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","red");
	  
	  $partner_countgreen_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","green");
	  $partner_countyellow_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","yellow");
	  $partner_countorange_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","orange");
	  $partner_countred_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","red");
	  
	  $partner_countgreen_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","green");
	  $partner_countyellow_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","yellow");
	  $partner_countorange_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","orange");
	  $partner_countred_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","red");
	  
	  $partner_countgreen_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","green");
	  $partner_countyellow_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","yellow");
	  $partner_countorange_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","orange");
	  $partner_countred_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","red");
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("J3",$partner_countgreen_2018);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("J4",$partner_countyellow_2018);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("J5",$partner_countorange_2018);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("J6",$partner_countred_2018);
	  
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("K3",$partner_countgreen_2017);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("K4",$partner_countyellow_2017);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("K5",$partner_countorange_2017);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("K6",$partner_countred_2017);
	  
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("L3",$partner_countgreen_2016);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("L4",$partner_countyellow_2016);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("L5",$partner_countorange_2016);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("L6",$partner_countred_2016);
	  
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("M3",$partner_countgreen_2015);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("M4",$partner_countyellow_2015);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("M5",$partner_countorange_2015);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("M6",$partner_countred_2015);
	  
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("D4",$partner_countgreen_2018+$partner_countyellow_2018+$partner_countorange_2018+$partner_countred_2018);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("E4",$partner_countgreen_2017+$partner_countyellow_2017+$partner_countorange_2017+$partner_countred_2017);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("F4",$partner_countgreen_2016+$partner_countyellow_2016+$partner_countorange_2016+$partner_countred_2016);
	  $objPHPExcel->setActiveSheetIndex()->setCellValue("G4",$partner_countgreen_2015+$partner_countyellow_2015+$partner_countorange_2015+$partner_countred_2015);
	    
	  
	   
	  $objPHPExcel->getActiveSheet()->getStyle('A7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('B7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('D7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('E7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('F7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('G7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('H7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('J7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('K7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('L7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('M7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('N7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('O7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('P7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('Q7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('R7')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C3')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C4')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C5')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('C6')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I3')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I4')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I5')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('I6')->applyFromArray($styleArray1);
	   $objPHPExcel->getActiveSheet()->getStyle('J2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('K2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('L2')->applyFromArray($styleArray1);
	  $objPHPExcel->getActiveSheet()->getStyle('M2')->applyFromArray($styleArray1);
	  
	  $styleArray = array(
      'borders' => array(
          'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN
          )
      )
     );
	  
	  
	    $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName("GSP LOGO");
        $objDrawing->setDescription("GSP Partners Excel Dump");
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		$logo="assets/img/excel1.jpg";
        $objDrawing->setPath($logo);
        $objDrawing->setWidth(160);
        $objDrawing->setCoordinates('A1');
		
		$objDrawing1 = new PHPExcel_Worksheet_Drawing();
        $objDrawing1->setName("GSP LOGO");
        $objDrawing1->setDescription("GSP Partners Excel Dump");
        $objDrawing1->setWorksheet($objPHPExcel->getActiveSheet());
		$logo1="assets/img/excel2.jpg";
        $objDrawing1->setPath($logo1);
        $objDrawing1->setWidth(150);
        $objDrawing1->setCoordinates('S1');
	 
      $objPHPExcel->getDefaultStyle()->applyFromArray($styleArray);
	  $objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight("100px");
	  $objPHPExcel->getActiveSheet()
              ->getStyle("A1:Z1".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C2')->setWidth('100'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C3')->setWidth('50'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C4')->setWidth('50'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C5')->setWidth('50'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C6')->setWidth('50');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth('50'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth('15');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth('15'); 
	 $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth('15');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth('15');
	 $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth('15');
	 $objPHPExcel->setActiveSheetIndex()
	        ->setCellValue("C2"," ")
			->setCellValue("C3","Total Registrations from Bharti Foundation")
			->setCellValue("C4","Audit Completed")
			->setCellValue("C5","Audit started but not completed")
			->setCellValue("C6","Registered but not started")
            ->setCellValue("D2","2018")
            ->setCellValue("E2","2017")
            ->setCellValue("F2","2016")
			->setCellValue("G2","2015")
			->setCellValue("H2"," ")
			->setCellValue("I2","School Category")
			->setCellValue("I3","Green")
			->setCellValue("I4","Yellow")
			->setCellValue("I5","Orange")
			->setCellValue("I6","Red")
			->setCellValue("J2","2018")
			->setCellValue("K2","2017")
			->setCellValue("L2","2016")
			->setCellValue("M2","2015")
			->setCellValue("A7","2015")
			->setCellValue("B7","2015")
			->setCellValue("C7","2015")
			->setCellValue("A7","S. No")
			->setCellValue("B7","School ID")
			->setCellValue("C7","School Name")
			->setCellValue("D7","State")
			->setCellValue("E7","District")
			->setCellValue("F7","City")
			->setCellValue("G7","Pin code")
			->setCellValue("H7","School Email")
			->setCellValue("I7","Principal Name")
			->setCellValue("J7","Principal Mobile")
			->setCellValue("K7","Coordinator Name")
			->setCellValue("L7","Coordinator Email")
			->setCellValue("M7","Coordinator Mobile")
			->setCellValue("N7","Completeness 2018")
			->setCellValue("O7","Status 2018")
			->setCellValue("P7","Status 2017")
			->setCellValue("Q7","Status 2016")
			->setCellValue("R7","Status 2015");
		$partnerList=$this->Audit_started_model->getPartnerData($partnerId);
		$row=7;
		$sr_no=0;
		foreach($partnerList as $r){
		   ++$row;
		   $rowsData=getPartnerWithAllYears($r->id);
		   $data_2018=!empty($rowsData[0]->data_2018)?$rowsData[0]->data_2018:"NA";
		   $data_2017=!empty($rowsData[0]->data_2017)?$rowsData[0]->data_2017:"NA";
		   $data_2016=!empty($rowsData[0]->data_2016)?$rowsData[0]->data_2016:"NA";
		   $data_2015=!empty($rowsData[0]->data_2015)?$rowsData[0]->data_2015:"NA";
		   /**********************************************************/
		   /*Column Color Code On Yearwise 2015-2018*/
		   if($data_2015>=70){
		     $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
		   }
		   if($data_2015>=50 && $data_2015<=69.9){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
		   }
		   if($data_2015>=35 && $data_2015<=49.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
		   }
		   if($data_2015<=34.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
		   }
		   if(strcmp($data_2015,"NA")==0 || $data_2015==""){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
		   }
		   /**********************************************************/
		   /*Column Color Code On Yearwise 2015-2018*/
		   if($data_2016>=70){
		     $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
		   }
		   if($data_2016>=50 && $data_2016<=69.9){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
		   }
		   if($data_2016>=35 && $data_2016<=49.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
		   }
		   if($data_2016<=34.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
		   }
		   if(strcmp($data_2016,"NA")==0 || $data_2016==""){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
		   }
		      /**********************************************************/
		   /*Column Color Code On Yearwise 2015-2018*/
		   if($data_2017>=70){
		     $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
		   }
		   if($data_2017>=50 && $data_2017<=69.9){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
		   }
		   if($data_2017>=35 && $data_2017<=49.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
		   }
		   if($data_2017<=34.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
		   }
		   if(strcmp($data_2017,"NA")==0 || $data_2017==""){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
		   }
		      /**********************************************************/
		   /*Column Color Code On Yearwise 2015-2018*/
		   if($data_2018>=70){
		     $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
		   }
		   if($data_2018>=50 && $data_2018<=69.9){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
		   }
		   if($data_2018>=35 && $data_2018<=49.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
		   }
		   if($data_2018<=34.9){
		       $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
		   }
		   if(strcmp($data_2018,"NA")==0 || $data_2018==""){
		      $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
		   }
		   
		   $objPHPExcel->setActiveSheetIndex()
			->setCellValue("A".$row,++$sr_no)
			->setCellValue("B".$row,$r->id)
			->setCellValue("C".$row,$r->name)
			->setCellValue("D".$row,$r->state_name)
			->setCellValue("E".$row,$r->district_name)
			->setCellValue("F".$row,$r->city)
			->setCellValue("G".$row,$r->pincode)
			->setCellValue("H".$row,$r->schoolemail)
			->setCellValue("I".$row,$r->principle_name)
			->setCellValue("J".$row,$r->mobile)
			->setCellValue("K".$row,$r->coname)
			->setCellValue("L".$row,$r->coemail)
			->setCellValue("M".$row,$r->comobile)
			->setCellValue("N".$row,$r->progress)
			->setCellValue("O".$row,$data_2018)
			->setCellValue("P".$row,$data_2017)
			->setCellValue("Q".$row,$data_2016)
			->setCellValue("R".$row,$data_2015);
		}	
			
	 $objPHPExcel->getActiveSheet()
     ->getStyle('C3:C4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('C5:C6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
	  $objPHPExcel->getActiveSheet()
     ->getStyle('D3:D4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('D5:D6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
	 $objPHPExcel->getActiveSheet()
     ->getStyle('E3:E4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('E5:E6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
	 $objPHPExcel->getActiveSheet()
     ->getStyle('F3:F4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('F5:F6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
	 $objPHPExcel->getActiveSheet()
     ->getStyle('G3:G4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('G5:G6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
	 $objPHPExcel->getActiveSheet()
     ->getStyle('I3')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('10c136');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('I4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('fcfc00');
	 $objPHPExcel->getActiveSheet()
     ->getStyle('I5')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('d7851f');	
	 $objPHPExcel->getActiveSheet()
     ->getStyle('I6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('fc3300');	
     $filename='PartnersData.xls';
		ob_end_clean();
     $objPHPExcel->setActiveSheetIndex(0);
     header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
     header('Content-Disposition: attachment;filename="'.$filename.'"');
     header('Cache-Control: max-age=0');
     header('Cache-Control: max-age=1');
     header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
     header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
     header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
     header ('Pragma: public'); // HTTP/1.0
     $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
     $objWriter->save('php://output');
	}
	
	/**This Function Used For Digital Certificate JSON**/
	public function getDigitalCertificateRecordJson(){
	   ini_set('memory_limit', '-1');
       $records=$this->Dashboard_model->getSchoolCertificateRecords();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'school_id'=>$record->school_id,
		    'certificate_username'=>$record->certificate_username,
		    'certificate_schoolname'=>$record->certificate_schoolname,
		    'certificate_srno'=>$record->certificate_srno);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
	}
	
	
	
	public function getDigitalCertificateRecordJson_2018(){
	   ini_set('memory_limit', '-1');
       $records=$this->Dashboard_model->getSchoolCertificateRecords_2018();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'school_id'=>$record->school_id,
		    'certificate_username'=>$record->certificate_username,
		    'certificate_schoolname'=>$record->certificate_schoolname,
		    'certificate_srno'=>$record->certificate_srno);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
	}
	
	
	
	/**This Function Used For Digital Certificate Records**/
	public function getDigitalCertificateRecord(){
	    $data['main'] = 'admin/audit/all-digital-certificates';
        $data['title'] = 'Home | Digital Certificate Records';
        $this->load->view('admin/includes/template', $data);
	}
	
	
	public function getDigitalCertificateRecord_2018(){
	    $data['main'] = 'admin/audit/all-digital-certificates_2018';
        $data['title'] = 'Home | Digital Certificate Records';
        $this->load->view('admin/includes/template', $data);
	}
	
}
