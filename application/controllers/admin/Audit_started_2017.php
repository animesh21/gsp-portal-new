<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_2017 extends CI_Controller {
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
        $this->load->model(array('Answer_model', 'file','User_model'));
        $this->load->helper(array('download', 'common_helper', 'form'));
        $this->load->model('admin/Audit_started_model');
        $this->session->userdata('USER_ID') == '';
	$this->load->helper('date');
	$this->load->library('zip');
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started_2017';
        $data['title'] = 'Home | Registration 2017';
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
		    'name'=>$record->name,
		   'userid'=>$record->userid,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city,
		    'coname'=>$record->coname,
		    'coemail'=>$record->coemail,
		    'comobile'=>$record->comobile,
		    'progress'=>$record->progress,
		    'date_added'=>$record->date_added);
	   endforeach;
		$data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
		    echo json_encode($data['record']);
   }		

      public function getPartnerSchoolData()
   {   
       $records=$this->Audit_started_model->getPartnerData();
	   $arr_school=array();
	   $i=0;
	   foreach($records as $record):
		   $arr_school[]=array('sr_no'=>++$i,
		    'id'=>$record->id,
			'userid'=>$record->userid,
		    'name'=>$record->name,
		    'state_name'=>$record->state_name,
		    'district_name'=>$record->district_name,
		    'city'=>$record->city,
		    'coname'=>$record->coname,
		    'coemail'=>$record->coemail,
		    'comobile'=>$record->comobile,
		    'progress'=>$record->progress,
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
        $this->load->view('admin/includes/template', $data);
   }
	
	
    /*
     * Generate Excel
     */

    public function excel() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData();
        $name = 'registration_2017.csv';
        force_download($name, $row);
    }
 /*
     * Generate Excel By Condition
     */

    public function excelByProgress() {
	    $varProgress="a.progress > '5' && a.progress < '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress( $varProgress);
        $name = 'registration_2017.csv';
		force_download($name, $row);
    }
	
	/*
     * Generate Excel By Condition
     */

    public function excelByProgress1() {
	    $varProgress="a.progress > '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }
    
	/*
     * Generate Excel By Condition
     */

    public function excelByProgress2() {
	    $varProgress="a.progress = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }

/*
     * Generate Excel By Condition
     */

    public function excelByProgress3() {
	    $varProgress="a.progress = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress($varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
		force_download($name, $row);
    }

    /*
     * Generate Excel By Condition
     */

    public function excelByProgress4() {
	    $varProgress="a.progress = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
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
	 ini_set('memory_limit', '256M');
	 ini_set('max_execution_time', 300);   
        $data['title'] = 'Home';
        $data['id'] = $argID;
        $data['states'] = getStates();
        $data['school'] = $this->Audit_started_model->getSchoolByIdRecoad($argID);
	//echo '<pre>'; print_r($data['school']);  die();  
        $data['schoolUserID'] = $data['school'][0]->userid;
        $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
        $data['filesfules'] = $this->file->getFilesDatafules($this->session->userdata('USER_ID'));
        $data['airQualityMonitering'] = $this->file->AirQuality($this->session->userdata('USER_ID'));
        $data['SupportiveAir'] = $this->file->SupportiveAir($this->session->userdata('USER_ID'));
       
	$data['pucCertificate'] = $this->file->pucCertificate($this->session->userdata('USER_ID'));
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($this->session->userdata('USER_ID'));
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($this->session->userdata('USER_ID'));
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($this->session->userdata('USER_ID'));
        $data['alternativeResource'] = $this->file->alternativeResource($this->session->userdata('USER_ID'));
        $data['energySupport'] = $this->file->getEnergySupportData($this->session->userdata('USER_ID'));
        //food
        $data['midDayMeal'] = $this->file->getMidDayMeal($this->session->userdata('USER_ID'));
        $data['canteen'] = $this->file->getCanteen($this->session->userdata('USER_ID'));
        $data['files'] = $this->file->getFoodFilesData($this->session->userdata('USER_ID'));
        $data['uppc'] = $this->file->getFoodUPPCData($this->session->userdata('USER_ID'));
        $data['AuditTeamD'] = $this->file->AuditTeamD($this->session->userdata('USER_ID'));	    
        //land
        $data['greenCover'] = $this->file->Green_Cover($this->session->userdata('USER_ID'));
        //waste
        $data['segregationClassroom'] = uploadHelper($this->session->userdata('USER_ID'), 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($this->session->userdata('USER_ID'), 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($this->session->userdata('USER_ID'), 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste');
        $data['houseKeeping'] = uploadHelper($this->session->userdata('USER_ID'), 'Housekeeping');
        $data['burningWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Buring_Waste');
        $data['teamDoingWaste'] = $this->file->AuditTeamWaste($this->session->userdata('USER_ID'));
        $data['ewasteStorage'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($this->session->userdata('USER_ID'), 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($this->session->userdata('USER_ID'), 'Pictures_of_Audit_Team');
        //water  
        $data['task4supporting'] = uploadHelper($this->session->userdata('USER_ID'), 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($this->session->userdata('USER_ID'), 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($this->session->userdata('USER_ID'), 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = $this->file->SupportingWater($this->session->userdata('USER_ID'));
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
        $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
        $data['filesfules'] = $this->file->getFilesDatafules($this->session->userdata('USER_ID'));
        $data['airQualityMonitering'] = $this->file->AirQuality($this->session->userdata('USER_ID'));
        $data['pucCertificate'] = $this->file->pucCertificate($this->session->userdata('USER_ID'));
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
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($this->session->userdata('USER_ID'));
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($this->session->userdata('USER_ID'));
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($this->session->userdata('USER_ID'));
        $data['alternativeResource'] = $this->file->alternativeResource($this->session->userdata('USER_ID'));
        $data['energySupport'] = $this->file->getEnergySupportData($this->session->userdata('USER_ID'));
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
        $data['greenCover'] = uploadHelper($this->session->userdata('USER_ID'), 'Green_Cover');
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
        $data['midDayMeal'] = $this->file->getMidDayMeal($this->session->userdata('USER_ID'));
        $data['canteen'] = $this->file->getCanteen($this->session->userdata('USER_ID'));
        $data['files'] = $this->file->getFoodFilesData($this->session->userdata('USER_ID'));
        $data['uppc'] = $this->file->getFoodUPPCData($this->session->userdata('USER_ID'));

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
        $data['task4supporting'] = uploadHelper($this->session->userdata('USER_ID'), 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($this->session->userdata('USER_ID'), 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($this->session->userdata
                        ('USER_ID'), 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = uploadHelper($this->session->userdata('USER_ID'), 'Supporting_Document_Water');
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
            'comobile'=>$this->input->post('comobile')
        );
        ///echo '<pre>'; print_r($this->input->post()); exit;
        $this->db->where('id', $argSchoolID);
        if($this->db->update('gsp_school', $arrSchool))
        {
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
        redirect(base_url('admin/audit_started_2017/edit/'.$argSchoolID), 'refresh');
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
	/*School Generate Badge Code*/
	public function generatebadge($argID){
	      $data=$this->Audit_started_model->getgeneratebadge($argID);
		  redirect(base_url("admin/audit_started_2017"));  
	}
	
	/*Get School Badge Code*/
	public function printBadge(){
	      $argID=$this->input->post('userid');
	      $data=$this->Audit_started_model->getprintbadgecode($argID);
		 foreach($data as  $r):
		     echo $r->badge_code;
		 endforeach;
		 
	}
	
	
	
	public function delete_school($argID)
	{
		$check1= $this->Audit_started_model->school_delete($argID);
		if($check1){
		   redirect('Admin/Audit_started_2017');
	        }
		else{
	          echo "record failed";
	        } 
	}
	 public function uploadAttachment() {
    global $username, $apikey;
	$filepath="uploads/files/ARMY_PUBLIC_SCHOOL_PANCHKULA_2237.pdf"; 
	$filename="ARMY_PUBLIC_SCHOOL_PANCHKULA_2237.pdf";
	$username = "siddhartha2488@gmail.com";
    $apikey = "3dc010df-18e2-4bb9-9ac7-ac4d8382c490";
    $data = http_build_query(array('username' => $username,'api_key' => $apikey,'file' => $filename));
    $file = file_get_contents($filepath);
    $result = ''; 
    $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30); 
	 if ($fp){
	 fputs($fp, "PUT /attachments/upload?".$data." HTTP/1.1\r\n");
	 fputs($fp, "Host: api.elasticemail.com\r\n");
	 fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
	 fputs($fp, "Content-length: ". strlen($file) ."\r\n");
	 fputs($fp, "Connection: close\r\n\r\n");
	 fputs($fp, $file);
	 while(!feof($fp)) {
	 $result .= fgets($fp, 128);
	 }
	 } else { 
	 return array(
	 'status'=>false,
	 'error'=>$errstr.'('.$errno.')',
	 'result'=>$result);
	 }
	 fclose($fp);
	 $result = explode("\r\n\r\n", $result, 2); 
	 return array(
	 'status' => true,
	 'attachId' => isset($result[1]) ? $result[1] : ''
	 );
	}
	
	public function sendElasticEmail()
	{
	 $from="siddhartha2488@gmail.com.com";
	 $subject="GreenSchoolProgramme";
	 $body_text="ResponseReport 2017";
	 $body_html="ResponseReport 2017";
	 $to="sunnykul024@gmail.com";
	 $attachments=$this->uploadAttachment();
	 $fromName= "GreenSchoolProgramme";
	 $username = "siddhartha2488@gmail.com";
     $apikey = "3dc010df-18e2-4bb9-9ac7-ac4d8382c490";
	 $res = "";
	 $data = "username=".$username;
	 $data .= "&api_key=".$apikey;
	 $data .= "&from=".urlencode($from);
	 $data .= "&from_name=".urlencode($fromName);
	 $data .= "&to=".urlencode($to);
	 $data .= "&subject=".urlencode($subject);
	 if($body_html)
	 $data .= "&body_html=".urlencode($body_html);
	 if($body_text)
	 $data .= "&body_text=".urlencode($body_text);
	 if($attachments)
	 $data .= "&attachments=".urlencode($attachments['attachId']);
	 $header = "POST /mailer/send HTTP/1.0\r\n";
	 $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	 $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
	 $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);
	 if(!$fp)
	 return "ERROR. Could not open connection";
	 else {
	 fputs ($fp, $header.$data);
	 while (!feof($fp)) {
	 $res .= fread ($fp, 1024);
	 }
	 fclose($fp);
	 }
	 echo $res; 
	}
	
}

