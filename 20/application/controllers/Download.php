<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
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
        $data['main'] = 'All School List Complete & Submit The Audit';
        $data['title'] = 'Home | Response Report 2017';
	      $this->load->view('list-school');
    }
	public function downloadFiles() {
	    if ($this->session->userdata('USER_ID') == '') {
            redirect('downloadLogin');
    	}
        $data['main'] = 'All School List Complete & Submit The Audit';
        $data['title'] = 'Home | Response Report 2021';
      	$schoolId=getSchoolId($this->session->userdata('USER_ID'));
//      $data['date'] = $this->db->select('date_added')->from('gsp_school')->where('id', $schoolId)->get()->result();
        $phase2 = $this->db->select('school_id')->from('tbl_total_phase2')->where('school_id',$schoolId)->get()->result();
        if(!empty($phase2)){
        $this->load->view('download-report', $data);        
        }else{
        $this->load->view('download');
        }
    }
	public function getSchoolDataAfterlogin($userId)
    {   
       $records=$this->Dashboard_model->getschool_that_submit_audit_data1($userId);
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
		    'name'=>$record->name,
		    'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
   }	
	
	public function getSchoolData()
    {   
        $records=$this->Dashboard_model->getschool_that_submit_audit_data();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
		    'name'=>$record->name,
		    'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
   }		

    /*
     * Generate Response Report Pdf
     */

    public function pdf($argID) {
        $data['title'] = 'Home';
        $data['id'] = $argID;
        $data['states'] = getStates();
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
       // $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
	$data['Supporting_Document_Air'] = uploadHelper($this->session->userdata('USER_ID'), 'Supporting_Document_Air');    
	    
        $data['filesfules'] = $this->file->getFilesDatafules($this->session->userdata('USER_ID'));
        $data['airQualityMonitering'] = $this->file->AirQuality($this->session->userdata('USER_ID'));
        $data['pucCertificate'] = $this->file->pucCertificate($this->session->userdata('USER_ID'));
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($this->session->userdata('USER_ID'));
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($this->session->userdata('USER_ID'));
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($this->session->userdata('USER_ID'));
        $data['alternativeResource'] = $this->file->alternativeResource($this->session->userdata('USER_ID'));
        $data['energySupport'] = $this->file->getEnergySupportData($this->session->userdata('USER_ID'));
        //food
        $data['midDayMeal'] = $this->file->getMidDayMeal($this->session->userdata('USER_ID'));
        $data['canteen'] = $this->file->getCanteen($this->session->userdata('USER_ID'));
        //$data['files'] = $this->file->getFoodFilesData($this->session->userdata('USER_ID'));
	
	$data['food_gsp_audit'] = uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_doing_Survey_Food');    
	    
        $data['uppc'] = $this->file->getFoodUPPCData($this->session->userdata('USER_ID'));
        //land
        $data['greenCover'] = uploadHelper($this->session->userdata('USER_ID'), 'Green_Cover');
        //waste
        $data['segregationClassroom'] = uploadHelper($this->session->userdata('USER_ID'), 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($this->session->userdata('USER_ID'), 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($this->session->userdata('USER_ID'), 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste');
        $data['houseKeeping'] = uploadHelper($this->session->userdata('USER_ID'), 'Housekeeping');
        $data['burningWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Buring_Waste');
        $data['teamDoingWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Doing_Survey');
        $data['ewasteStorage'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($this->session->userdata('USER_ID'), 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($this->session->userdata('USER_ID'), 'Pictures_of_Audit_Team');
        //water  
        $data['task4supporting'] = uploadHelper($this->session->userdata('USER_ID'), 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($this->session->userdata('USER_ID'), 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($this->session->userdata('USER_ID'), 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = uploadHelper($this->session->userdata('USER_ID'), 'Supporting_Document_Water');
	$data['chikoo']=uploadHelper($this->session->userdata('USER_ID'), 'Waste_Policy');
	$data['Initiatives']=uploadHelper($this->session->userdata('USER_ID'), 'School_Initiatives');
	$data['teamDoingWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Doing_Survey_Waste');    
        $rank=getFiled('Q1G2',$data['schoolUserID']);
        if ($rank >= 6 ) { 
            $html1 = $this->load->view('school_pdf', $data, true);
             
            } else {
               $html1 = $this->load->view('primary-school-pdf', $data, true);
            }
            $pdfFilePath = "school_pdf_name.pdf";
            $this->load->library('dompdf_lib');
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
  $staffadmin = array_column($staffadmin, 'teacher');
  $staffadmin=   implode(',', $staffadmin);
  $staffadmin = preg_replace('/\s+/', ' ', $staffadmin);
  $staffadmin = strtolower($staffadmin);
 // echo $staffadmin = ucfirst($staffadmin);
 
  $staffadmin = explode(',', $staffadmin);
 
  $staffadmin = array_unique($staffadmin);
 
  // $principal=$this->digital_certificate_for_principal_coordinator($argID);
  // $principal = array_shift($principal);
  
   $data['students'] = $students;
   $data['staffadmin'] = $staffadmin;

 //     echo "<pre>";
 // print_r($students);
 //  exit;
 
   // $data['principal'] = $principal;
  
  $this->db->where("userid",$argID);
   $dataCertificate=$this->db->select("certificate_username,certificate_schoolname,id")
   ->from("tblcertificate")->group_by("certificate_username")->order_by('id','ASC')->get()->result();
   $data['school_certificates']=$dataCertificate;
   $principal = $this->db->select("a.userid,a.principle_name,a.name as school_name,c.name as district_name,b.name as state_name")
                                 ->from("gsp_school AS a")
                                 ->join('states as b','a.state=b.id','left')
                                 ->join('cities as c','a.district=c.id','left')
                                 ->where("userid", $argID)
                                 ->get()
                                 ->result();
  // $data['principal']=$principal;
  $data['principal']=$principal;
  $coname = $this->db->select("a.userid,a.coname,a.name")
                                 ->from("gsp_school AS a")
                                 ->where("userid", $argID)
                                 ->get()
                                 ->result();
  $data['coname']=$coname;
                                 // echo "<pre>";
                                 // print_r($principal);exit;
	ob_clean();
   $html1 = $this->load->view('admin/survey/digital-certificate', $data, true);
   $this->dompdf->load_html($html1);
   $this->dompdf->set_paper(array(0, 0, 580, 760), 'landscape');
   $this->dompdf->render();
   $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
	flush();
  }
  
	
// function getdigitalCertificate($argID) {

//   //echo $argID; exit;
//    $data['title']="GSP Digital Certificates";
//    $this->load->library('dompdf_lib');
//    $students = $this->count_certificates_stuents($argID);
//    $staffadmin = $this->count_certificates_staffamin($argID);
//   // $data['students'] = $students;
//    //$data['staffadmin'] = $staffadmin;
//   $principal=$this->digital_certificate_for_principal_coordinator($argID);
	 
//    $data['user_id'] = $argID;
//    $data['students'] = $students;
//    $data['staffadmin'] = $staffadmin;
//    $data['principal'] = $principal;	
//    $html1 = $this->load->view('admin/survey/digital-certificate', $data, true);
//    $this->dompdf->load_html($html1);
//    $this->dompdf->set_paper(array(0, 0, 500, 571), 'landscape');
//    $this->dompdf->render();
//    $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
//   }
	
public function count_certificates_stuents($argID) {
   //Stuents
   $arrStudents = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
    $username=$this->db->select('name,state,district')
        ->from('gsp_school')
        ->where('userid',$argID)
        ->get()->row();
   foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 10; $i++) {
       //Students
      if(getFiled("Q3".$q. $i . "S1", $argID)!="")
       {
       $arrStudents[] = array(
       'student_name' => strtoupper( trim(getFiled("Q3".$q. $i . "S1", $argID))) . " " .strtoupper(trim( getFiled("Q3" .$q.$i . "S2", $argID))),
       'grade' => getFiled("Q3" .$q.$i . "S3", $argID),
     'name'=>$username->name, 'state'=>$username->state, 'district'=>$username->district,
     );
  }
       }
   }
   return $arrStudents;
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
      //  for ($i = 1; $i <= 3; $i++) {
      //  if((getFiled("Q1" . $q . $i . "S1", $argID) !="0") && (getFiled("Q1" . $q . $i . "S1", $argID) !='') || (getFiled("Q1" . $q . $i . "S3", $argID) !="0") && (getFiled("Q1" . $q . $i . "S3", $argID) !=''))
      //  {
      //  $airTeachers[] = array("teacher"=>getFiled("Q1" . $q . $i . "S1", $argID) . " " . getFiled("Q1" . $q . $i . "S3", $argID),"school"=>$username->name);
     
      //  }
      //  }
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
   return array_merge($arrStaff);
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
  
   public function PdfById($argsID) {
        $this->config->load('array_config');
	   ini_set('memory_limit', '256M');
	   ob_clean();
        $data['performance'] = $this->Performance_model->getDataById($argsID);
        $userId = getUserId($argsID);
        $rank   = getFiled('Q1G2',$userId);
           if($rank <= 5){
		   $html=$this->load->view('admin/performance_report/Performance_primary', $data,true);
            // echo "<center><h2>Comming Soon</h2></center>";
           }else{
             $html=$this->load->view('admin/performance_report/Performance', $data,true);             
           }
        $this->load->library('dompdf_lib');
        $this->dompdf->set_paper("A4");
      $this->dompdf->load_html($html);
        $this->dompdf->render();
	   ob_end_clean();
        $this->dompdf->stream("performance-report.pdf", array("Attachment" => false));
	   flush();
    }	


public function downloadReportsSection(){
    $this->load->view('download-report');
  }

public function badgecodeview(){
    $this->load->view('badgeview');
  }
	
public function ask_password()
       {
            $this->load->view('download-login_home');
       }
    
public function downloadAirSection(){
    $this->load->view('download_air');
  } 
  public function downloadEnergySection(){
    $this->load->view('download_energy');
  } 
  public function downloadFoodSection(){
    $this->load->view('download_food');
  } 
  public function downloadLandSection(){
    $this->load->view('download_land');
  }
  public function downloadWaterSection(){
    $this->load->view('download_water');
  } 
  public function downloadWasteSection(){
    $this->load->view('download_waste');
  } 


}

