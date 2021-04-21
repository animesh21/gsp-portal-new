<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_2019 extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model(array('Answer_model', 'file','User_model','admin/Dashboard_model'));
        $this->load->helper(array('download', 'common_helper', 'form'));
        $this->load->model('admin/Audit_started_model');
	    $this->load->model('admin/Report');
        $this->session->userdata('USER_ID') == '';
	$this->load->helper('date');
	$this->load->library('zip');
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started_2019';
        $data['title'] = 'Home | Registration 2019';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

     public function getSchoolData()
    {   
       $records=$this->Audit_started_model->getData();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
		    'udise'=>$record->udise,
		    'name'=>$record->name,
		   'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city,
		    'coname'=>$record->coname,
		    'coemail'=>$record->coemail,
		    'comobile'=>$record->comobile,
		    'progress'=>$record->progress,
		     'partner_status'=>$record->partner_status,
		    'date_added'=>$record->date_added);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
   }		
   	   	
   	 public function disabled_school() {
        $data['main'] = 'admin/audit/disabled_school';
        $data['title'] = 'Home | Disabled School';
        $this->load->view('admin/includes/template', $data);
    }
	
    public function getDisabledSchoolData()
    {   
       $records=$this->Audit_started_model->getDisabledSchool();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
		    'udise'=>$record->udise,
		    'name'=>$record->name,
		    'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city,
		    'coname'=>$record->coname,
		    'coemail'=>$record->coemail,
		    'comobile'=>$record->comobile,
		    'progress'=>$record->progress,
		     'partner_status'=>$record->partner_status,
		    'date_added'=>$record->date_added);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
   }
	
   public function partnersList(){
       $data['main'] = 'admin/audit/partners';
        $data['title'] = 'Home | Partners Registration 2017';
	    $data['list_school1']=$this->Audit_started_model->getPartnerData('1');
	    $data['list_school2']=$this->Audit_started_model->getPartnerData('2');
	    $data['list_school3']=$this->Audit_started_model->getPartnerData('3');
	    $data['list_school4']=$this->Audit_started_model->getPartnerData('4');
	    $data['list_school5']=$this->Audit_started_model->getPartnerData('5');
	    $data['list_school6']=$this->Audit_started_model->getPartnerData('6');
	   
	   
	        $data['csi_registerd_audit']=$this->Report->get_registeredpartner("1");
		$data['csi_total_started_audit']=$this->Report->get_startedpartner("1");
		$data['csi_completed']=$this->Report->get_completedpartner("1");
		$data['csi_total_notstarted_audit']=$this->Report->get_notstartedpartner("1");
		
		$data['csi_registerd_audit2']=$this->Report->get_registeredpartner("2");
		$data['csi_total_started_audit2']=$this->Report->get_startedpartner("2");
		$data['csi_completed2']=$this->Report->get_completedpartner("2");
		$data['csi_total_notstarted_audit2']=$this->Report->get_notstartedpartner("2");
		
		$data['csi_registerd_audit3']=$this->Report->get_registeredpartner("3");
		$data['csi_total_started_audit3']=$this->Report->get_startedpartner("3");
		$data['csi_completed3']=$this->Report->get_completedpartner("3");
		$data['csi_total_notstarted_audit3']=$this->Report->get_notstartedpartner("3");
		
		$data['csi_registerd_audit4']=$this->Report->get_registeredpartner("4");
		$data['csi_total_started_audit4']=$this->Report->get_startedpartner("4");
		$data['csi_completed4']=$this->Report->get_completedpartner("4");
		$data['csi_total_notstarted_audit4']=$this->Report->get_notstartedpartner("4");
		
		$data['csi_registerd_audit5']=$this->Report->get_registeredpartner("5");
		$data['csi_total_started_audit5']=$this->Report->get_startedpartner("5");
		$data['csi_completed5']=$this->Report->get_completedpartner("5");
		$data['csi_total_notstarted_audit5']=$this->Report->get_notstartedpartner("5");
		
		$data['csi_registerd_audit6']=$this->Report->get_registeredpartner("6");
		$data['csi_total_started_audit6']=$this->Report->get_startedpartner("6");
		$data['csi_completed6']=$this->Report->get_completedpartner("6");
		$data['csi_total_notstarted_audit6']=$this->Report->get_notstartedpartner("6");
		$this->load->view('admin/includes/template', $data);
   }
	
	
 /*
     * Generate Excel
     */

    public function excel_phase1() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase1();
        $name = 'registration_2017.csv';
        force_download($name, $row);
    }
  
 /*
     * Disabled School Excel
     */

    public function disabled_school_excel() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->disabled_school();
        $name = 'Disabled School.csv';
        force_download($name, $row);
    }
	
	/*
     * Generate Excel
     */

    public function excel_phase2() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase2();
        $name = 'registration_2018.csv';
        force_download($name, $row);
    }
   
    public function excel_phase2_1() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase2_1();
        $name = 'registration_2018.csv';
        force_download($name, $row);
    }	
	
	
    /*
     * Generate Excel By Condition
     */

    public function excelByProgress_phase1() {
	    $varProgress="a.progress_phase_1 > '5' && a.progress_phase_1 < '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1( $varProgress);
        $name = 'registration_2017.csv';
		force_download($name, $row);
    }
	
	 public function excelByProgress_phase2() {
	    $varProgress="a.progress > '5' && a.progress <= '75' && a.complete_status='0'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->getExcelDataByProgress_phase2( $varProgress);
            $name = 'SCHOOLS STARTED THE AUDIT BUT DID NOT COMPLETE'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	
	/*
     * Generate Excel By Condition
     */

    public function excelByProgress1_phase1() {
	    $varProgress="a.progress_phase_1 > '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	public function excelByProgress1_phase2() {
	  $varProgress="a.progress >= '10' && a.progress <= '100' && a.complete_status ='0'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase2( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
    
	/* Generate Excel That started the audit */
	public function excelByProgress2_phase1() {
	    $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress2_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	 public function excelByProgress2_phase2() {
	 $varProgress="a.progress ='100' && a.complete_status='0'";
         $this->load->dbutil();
         $row = $this->Audit_started_model->getExcelDataByProgress_phase2($varProgress);
	 //$row = $this->Dashboard_model->school_that_complete_audit_phase_2()		 
         $name = 'SCHOOL_THAT_COMPLETED_THE_AUDIT'.date('d-m-Y').'.csv';
	 force_download($name, $row);
    }

/*
     * Generate Excel By Condition
     */

    public function excelByProgress3_phase1() {
	    $varProgress="a.progress_phase_1 = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1($varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	public function excelByProgress3_phase2() {
	    $varProgress="a.progress = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase2($varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }

	/* Generate Excel started but did not complete */
	 public function excelByProgress5_phase1() {
	    $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress5_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	
	/* Generate Excel did not start */
	public function excelByProgress6_phase1() {
	    $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress6_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	/* Generate Excel 2017 school */
	public function excelByProgress7_phase1() {
	    $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress7_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
    /*
     * Generate Excel By Condition
     */

    public function excelByProgress4_phase1() {
	    $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress1_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	 public function excelByProgress4_phase2() {
	  $varProgress="a.progress = '100' && a.complete_status='1'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->getExcelDataByProgress1_phase2($varProgress);
            $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	/* Schools Did Not Start The Audit phase2 */
	public function excelByProgress6_phase2() {
	$varProgress="a.progress = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase6($varProgress);
        $name = 'SCHOOL_DID_NOT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
	
	
	 /*
     * Generate Excel 2017
     */
	
	
public function excel2017() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcel2017Data();
        $name = 'registration_2017.csv';
        force_download($name, $row);
    }	
	
    /*
     * Generate Response
     */

    public function response($argID) {
        $data['title'] = 'Home | School';
        $data['states'] = getStates();
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/school', $data);
    }

    /*
     * Generate Pdf
     */

    public function pdf($argID) {
	// ini_set('memory_limit', '256M');
	    ini_set('memory_limit', '-1');
	 ini_set('max_execution_time', 300);   
        $data['title'] = 'Home';
        $data['id'] = $argID;
        $data['states'] = getStates();
        $data['school'] = $this->Audit_started_model->getSchoolByIdRecoad($argID);
	//echo '<pre>'; print_r($data['school']);  die();  
        $data['schoolUserID'] = $data['school'][0]->userid;
        //$data['files'] = $this->file->getFilesData($data['school'][0]->userid);
	$data['Supporting_Document_Air'] = uploadHelper($data['school'][0]->userid, 'Supporting_Document_Air');    
	    
        $data['filesfules'] = $this->file->getFilesDatafules($data['school'][0]->userid);
        $data['airQualityMonitering'] = $this->file->AirQuality($data['school'][0]->userid);
        $data['SupportiveAir'] = $this->file->SupportiveAir($data['school'][0]->userid);
       
	$data['pucCertificate'] = $this->file->pucCertificate($data['school'][0]->userid);
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($data['school'][0]->userid);
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($data['school'][0]->userid);
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($data['school'][0]->userid);
        $data['alternativeResource'] = $this->file->alternativeResource($data['school'][0]->userid);
        $data['energySupport'] = $this->file->getEnergySupportData($data['school'][0]->userid);
        //food
        $data['midDayMeal'] = $this->file->getMidDayMeal($data['school'][0]->userid);
        //$data['canteen'] = $this->file->getCanteen($data['school'][0]->userid);
	$data['food_gsp_audit'] = uploadHelper($data['school'][0]->userid, 'Audit_Team_doing_Survey_Food');    
        $data['files'] = $this->file->getFoodFilesData($data['school'][0]->userid);
        $data['uppc'] = $this->file->getFoodUPPCData($data['school'][0]->userid);
        $data['AuditTeamD'] = $this->file->AuditTeamD($data['school'][0]->userid);	    
        //land
        $data['greenCover'] = $this->file->Green_Cover($data['school'][0]->userid);
        //waste
        $data['segregationClassroom'] = uploadHelper($data['school'][0]->userid, 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($data['school'][0]->userid, 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($data['school'][0]->userid, 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($data['school'][0]->userid, 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($data['school'][0]->userid, 'E-Waste');
        $data['houseKeeping'] = uploadHelper($data['school'][0]->userid, 'Housekeeping');
        $data['burningWaste'] = uploadHelper($data['school'][0]->userid, 'Buring_Waste');
        $data['teamDoingWaste'] = $this->file->AuditTeamWaste($data['school'][0]->userid);
        $data['ewasteStorage'] = uploadHelper($data['school'][0]->userid, 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($data['school'][0]->userid, 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($data['school'][0]->userid, 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($data['school'][0]->userid, 'Pictures_of_Audit_Team');
        //water  
        $data['task4supporting'] = uploadHelper($data['school'][0]->userid, 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($data['school'][0]->userid, 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($data['school'][0]->userid, 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = $this->file->SupportingWater($data['school'][0]->userid);
	$data['chikoo']=uploadHelper($data['school'][0]->userid, 'Waste_Policy');
	$data['Initiatives']=uploadHelper($data['school'][0]->userid, 'School_Initiatives');
	$data['teamDoingWaste']=uploadHelper($data['school'][0]->userid, 'Audit_Team_Doing_Survey_Waste');    
        //echo '<pre>'; print_r($data);die;
        $rank=getFiled('Q1G2',$data['schoolUserID']);
        
        if ($rank >= 6 ) { 
           $html1 = $this->load->view('admin/survey/school_pdf', $data, true);
             
            } else {
               $html1 = $this->load->view('admin/survey/primary-school-pdf', $data, true);
            }

          /*  //this the the PDF filename that user will get to download
            $pdfFilePath = "school_pdf_name.pdf";

            //load mPDF library
            $this->load->library('M_pdf');

            //generate the PDF from the given html
            $this->m_pdf->pdf->WriteHTML($html1);

            //download it.
            $this->m_pdf->pdf->Output($pdfFilePath, "I");*/
			
			  $this->load->library('dompdf_lib');
			  $this->dompdf->set_paper("A4");
			$this->dompdf->load_html($html1);
		    $this->dompdf->render();
		    $this->dompdf->stream("welcome.pdf", array("Attachment" => false));
        
    }
	
	
function getdigitalCertificate($argID) {
   $data['title']="GSP Digital Certificates";
   $this->load->library('dompdf_lib');
   //Students Records
   $students = $this->count_certificates_stuents($argID);
   $staffadmin = $this->count_certificates_staffamin($argID);
   $principal=$this->digital_certificate_for_principal_coordinator($argID);
	
   $data['students'] = $students;
   $data['staffadmin'] = $staffadmin;
   $data['principal'] = $principal;	
   $html1 = $this->load->view('admin/survey/digital-certificate', $data, true);
   $this->dompdf->load_html($html1);
   $this->dompdf->set_paper(array(0, 0, 505, 691), 'portrait');
   $this->dompdf->render();
   $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
  }
	
	public function count_certificates_stuents($argID) {
   //Stuents
   $arrStudents = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 10; $i++) {
       //Students
       if(getFiled("Q3".$q. $i . "S1", $argID)!="" && getFiled("Q3" .$q.$i . "S2", $argID) !="")
       {
       $arrStudents[] = array(
       'name' => getFiled("Q3".$q. $i . "S1", $argID) . " " . getFiled("Q3" .$q.$i . "S2", $argID),
       'grade' => getFiled("Q3" .$q.$i . "S3", $argID),
	   'school_name'=>$username->name,
	   );
	}
       }
   }
   return $arrStudents;
  }

public function digital_certificate_for_principal_coordinator($argID)
  {
   $arrForcoordinator_principal=array();
   $principal_coordinator=$this->db->select('principle_name,coname')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   foreach ($principal_coordinator as $q) {
     $arrForcoordinator_principal[]=array('name'=>$q,'schoolname'=>$username->name);
   }
   return $arrForcoordinator_principal;
  }
	
	
	
	
  public function count_certificates_staffamin($argID) {
   $airTeachers=array();
   $arrStaff = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   foreach ($question_alphabet as $q) {
       //Teachers
       for ($i = 1; $i <= 3; $i++) {
       if((getFiled("Q1" . $q . $i . "S1", $argID) !="0") && (getFiled("Q1" . $q . $i . "S1", $argID) !='') || (getFiled("Q1" . $q . $i . "S3", $argID) !="0") && (getFiled("Q1" . $q . $i . "S3", $argID) !=''))
       {
       $airTeachers[] = array("teacher"=>getFiled("Q1" . $q . $i . "S1", $argID) . " " . getFiled("Q1" . $q . $i . "S3", $argID),"school"=>$username->name);
	   
       }
       }
       //Staff
       for ($i = 1; $i <= 5; $i++) {
       if((getFiled("Q2" . $q . $i . "S1", $argID) !="0") && (getFiled("Q2" . $q . $i . "S1", $argID) !='') || (getFiled("Q2" . $q . $i . "S3", $argID) !="0") && (getFiled("Q2" . $q . $i . "S3", $argID) !='')){
       $arrStaff[] = array("teacher"=>getFiled("Q2" . $q . $i . "S1", $argID) . " " . getFiled("Q2" . $q . $i . "S3", $argID),"school"=>$username->name);
	
       }
       }
   }
//    $value="0"." "."0";
//    $temp= array_search($value, $arrStaff);
//    print_r($temp);
   //echo '<pre>'; print_r($airTeacher['school']); exit;
   //echo '<pre>'; print_r($arrStaff);
   return array_merge($airTeachers, $arrStaff);
  }

    /*
     * Generate Response General
     */

    public function general($argID) {
        $data['title'] = 'Home | General';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/general', $data);
    }

    /*
     * Generate Response Air
     */

    public function air($argID) {
        $data['title'] = 'Home | Air';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['files'] = $this->file->getFilesData($data['school']->userid);
        $data['filesfules'] = $this->file->getFilesDatafules($data['school']->userid);
        $data['airQualityMonitering'] = $this->file->AirQuality($data['school']->userid);
        $data['pucCertificate'] = $this->file->pucCertificate($data['school']->userid);
	$data['Supporting_Document_Air'] = uploadHelper($data['school']->userid, 'Supporting_Document_Air');
        //echo '<pre>'; print_r($data['image']);exit();
        $this->load->view('admin/survey/air', $data);
    }

    /*
     * Generate Response Energy
     */

    public function energy($argID) {
        $data['title'] = 'Home | Energy';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($data['school']->userid);
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($data['school']->userid);
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($data['school']->userid);
        $data['alternativeResource'] = $this->file->alternativeResource($data['school']->userid);
	$data['Alternative_Source_of_Energy'] = uploadHelper($data['school']->userid, 'Alternative_Source_of_Energy');
        $data['energySupport'] = $this->file->getEnergySupportData($data['school']->userid);
        $this->load->view('admin/survey/energy', $data);
    }

    /*
     * Generate Response Land
     */

    public function land($argID) {
        $data['title'] = 'Home | Land';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['greenCover'] = uploadHelper($data['school']->userid, 'Green_Cover');
        $this->load->view('admin/survey/land', $data);
    }

    /*
     * Generate Response Food
     */

    public function food($argID) {
        $data['title'] = 'Home | Food';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['midDayMeal'] = $this->file->getMidDayMeal($data['school']->userid);
        $data['canteen'] = $this->file->getCanteen($data['school']->userid);
        $data['files'] = $this->file->getFoodFilesData($data['school']->userid);
	$data['food_gsp_audit'] = uploadHelper($data['school']->userid, 'Audit_Team_doing_Survey_Food');
        $data['uppc'] = $this->file->getFoodUPPCData($data['school']->userid);

        $this->load->view('admin/survey/food', $data);
    }

    /*
     * Generate Response Water
     */

    public function water($argID) {
        $data['title'] = 'Home | Water';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['task4supporting'] = uploadHelper($data['school']->userid, 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($data['school']->userid, 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($data['school']->userid, 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = uploadHelper($data['school']->userid, 'Supporting_Document_Water');
        $this->load->view('admin/survey/water', $data);
    }

    /*
     * Generate Response Waste
     */

    public function waste($argID) {
        $data['title'] = 'Home | Waste';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['segregationClassroom'] = uploadHelper($data['school']->userid, 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($data['school']->userid, 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($data['school']->userid, 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($data['school']->userid, 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($data['school']->userid, 'E-Waste');
        $data['houseKeeping'] = uploadHelper($data['school']->userid, 'Housekeeping');
        $data['burningWaste'] = uploadHelper($data['school']->userid, 'Buring_Waste');
        $data['teamDoingWaste'] = uploadHelper($data['school']->userid, 'Audit_Team_Doing_Survey');
        $data['ewasteStorage'] = uploadHelper($data['school']->userid, 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($data['school']->userid, 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($data['school']->userid, 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($this->session->userdata
                        ('USER_ID'), 'Pictures_of_Audit_Team');
        $this->load->view('admin/survey/waste', $data);
    }

    public function feedback($argID) {
        $data['title'] = 'Home | Feedback';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/feedback', $data);
    }
    public function edit($argID) {
       $data['title'] = 'Home | Edit';
       $data['main'] = 'admin/survey/edit';
       $data['states'] = $this->User_model->getStates();
       $data['school'] = $this->Audit_started_model->getSchoolById($argID);
       $data['cities'] = $this->User_model->getCitiesAll($data['school']->state);
       $data['user'] = $this->Audit_started_model->getUserById($data['school']->userid);
       $this->load->view('admin/includes/template', $data);
   }
   
   
   
   /*
     * Update Function
     */
    public function update($argSchoolID, $argUserID)
    {   
        $arrSchool=array(
            'name'=>$this->input->post('name'),
	       'udise'=>$this->input->post('udise'),
            'address1'=>$this->input->post('address1'),
            'address2'=>$this->input->post('address2'),
            'state'=>$this->input->post('state'),
            'district'=>$this->input->post('district'),
            'city'=>$this->input->post('city'),
            'pincode'=>$this->input->post('pincode'),
	        'std'=>$this->input->post('std'),
            'telephone'=>$this->input->post('telephone'),
            'schoolemail'=>$this->input->post('schoolemail'),	
            'mobile'=>$this->input->post('mobile'),
            'principle_name'=>$this->input->post('principle_name'),
            'coname'=>$this->input->post('coname'),
            'coemail'=>$this->input->post('coemail'),
            'comobile'=>$this->input->post('comobile'),
	        'partner_status'=>$this->input->post('partner_list')
        );
        ///echo '<pre>'; print_r($this->input->post()); exit;
		$arrSchool0=array('answer'=>$this->input->post('name'));
		$arrSchool1=array('answer'=>$this->input->post('udise'));
		$arrSchool2=array('answer'=>$this->input->post('address1'));
		$arrSchool3=array('answer'=>$this->input->post('address2'));
		$arrSchool4=array('answer'=>$this->input->post('state'));			
		$arrSchool5=array('answer'=>$this->input->post('district'));
		$arrSchool6=array('answer'=>$this->input->post('city'));
		$arrSchool7=array('answer'=>$this->input->post('pincode'));	
		$arrSchool8=array('answer'=>$this->input->post('std'));
		$arrSchool9=array('answer'=>$this->input->post('telephone'));
		$arrSchool10=array('answer'=>$this->input->post('schoolemail'));	
		$arrSchool11=array('answer'=>$this->input->post('mobile'));
		$arrSchool12=array('answer'=>$this->input->post('principle_name'));
		$arrSchool13=array('answer'=>$this->input->post('coname'));
		$arrSchool14=array('answer'=>$this->input->post('coemail'));
	        $arrSchool15=array('answer'=>$this->input->post('comobile'));
        $this->db->where('id', $argSchoolID);
        if($this->db->update('gsp_school', $arrSchool))
        {
            
			$userid=getUserId($argSchoolID);
		    $this->db->where('userid', $userid);
			$this->db->where('questionid','name');
		    $this->db->update('gsp_answers',$arrSchool0);
			
			$userid=getUserId($argSchoolID);
		    $this->db->where('userid', $userid);
			$this->db->where('questionid','udise');
		    $this->db->update('gsp_answers',$arrSchool1);
			
			$this->db->where('userid', $userid);
		    $this->db->where('questionid','address1');
		    $this->db->update('gsp_answers',$arrSchool2);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','address2');
		    $this->db->update('gsp_answers',$arrSchool3);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','state');
		    $this->db->update('gsp_answers',$arrSchool4);
			
			$this->db->where('userid', $userid);
		    $this->db->where('questionid','district');
		    $this->db->update('gsp_answers',$arrSchool5);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','city');
		    $this->db->update('gsp_answers',$arrSchool6);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','pincode');
		    $this->db->update('gsp_answers',$arrSchool7);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','std');
		    $this->db->update('gsp_answers',$arrSchool8);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','telephone');
		    $this->db->update('gsp_answers',$arrSchool9);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','schoolemail');
		    $this->db->update('gsp_answers',$arrSchool10);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','mobile');
		    $this->db->update('gsp_answers',$arrSchool11);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','principle_name');
		    $this->db->update('gsp_answers',$arrSchool12);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','coname');
		    $this->db->update('gsp_answers',$arrSchool13);
			
			$this->db->where('userid', $userid);
			$this->db->where('questionid','coemail');
		    $this->db->update('gsp_answers',$arrSchool14);
			
		    $this->db->where('userid', $userid);
		    $this->db->where('questionid','comobile');
		    $this->db->update('gsp_answers',$arrSchool15);
			
			//update user data as well
            $arrUser=array(
                'email'=>$this->input->post('coemail'),
                'password'=>$this->input->post('password')
            );
            $this->db->where('id', $argUserID);
            $this->db->update('gsp_user', $arrUser);
            $this->session->set_flashdata('success', 'School Infomation Successfully Updated');
        } else {
            $this->session->set_flashdata('error', 'There is an error updating school information !');
        }
        redirect(base_url('admin/audit_started_2019/edit/'.$argSchoolID), 'refresh');
    }
    
  
	/*Download image*/
	
	public function download_file($argID){
	$this->load->helper('download');
	echo "hello";die;
	    echo $argID; exit;
	    
        $data =base_url()."/uploads/files/".$argID; // Read the file's contents
        $name = $argUserID;
 
        force_download($data,NULL);    
            
    }
	/*Download zip image*/
	public function downloadzip($argID){
	     $data=$this->Audit_started_model->getZipImagesOfSchool($argID);
	      foreach($data as $r):
		   $filedata=$r->file_name;
		   $filename=base_url()."uploads/files/".$r->file_name;
		   if(file_exists("uploads/files/".$filedata))
		   {
           $this->zip->add_data($filedata,file_get_contents($filename)); 
		   }
	      endforeach; 
            $this->zip->download(date('d-M-Y'));
	}
	/*School Generate  Badge Code*/
	public function generatebadge($argID){
	      $data=$this->Audit_started_model->getgeneratebadge($argID);
		  redirect(base_url("admin/audit_started_2019"));  
	}
	
	/*Get School Badge Code*/
	public function printBadge(){
	      $argID=$this->input->post('userid');
	      $data=$this->Audit_started_model->getprintbadgecode($argID);
		 foreach($data as  $r):
		     echo $r->badge_code;
		 endforeach;
		 
	}
	
	/**This Function Used For Disabling A School**/
	
	public function unable_school(){
	  $argID=$this->input->post("school_id");
	  $check1= $this->Audit_started_model->unable_school($argID);
	  if($check1){
		   redirect('/admin/audit_started_2019');
	  }
	}
	
	public function disable_school(){
	  $argID=$this->input->post("school_id");
	  $check1= $this->Audit_started_model->disable_school($argID);
	  if($check1){
		   redirect(base_url('/admin/audit_started_2019'));
	  }
	}
	
	/**This Function Used For Deleting A School**/
	public function delete_school($argID)
	{
		$check1= $this->Audit_started_model->school_delete($argID);
		if($check1){
		   redirect(base_url('/admin/audit_started_2019'));
	        }
		else{
	          echo "record failed";
	        } 
	}
	
	public function update_school_partner()
	{
	  $partner=$this->input->post('partner');
	  $school_id=$this->input->post('school_id');
	  
	  
	  if($partner=='No partner'){
	     $partner_status='0';
	  }
	  
	  
	  if($partner=='Church of South India'){
	     $partner_status='1';
	  }
	  
	  if($partner=='Jawahar Navodaya Vidyalaya'){
	     $partner_status='2';
	  }
	  
	  if($partner=='Kendriya Vidyalaya Sangathan (KVS)'){
	     $partner_status='3';
	  }
	  
	  if($partner=='Montfortian Education Foundation'){
	     $partner_status='4';
	  }
	  
	  if($partner=='Mount Litera Zee Schools'){
	     $partner_status='5';
	  }
	  
	  if($partner=='Satya Bharti Foundation'){
	     $partner_status='6';
	  }
	  
	  $data=array(
	  'partner_status'=>$partner_status
	  );
	  $this->db->where('id',$school_id);
	  $this->db->update('gsp_school',$data);
	
	}
	
}

