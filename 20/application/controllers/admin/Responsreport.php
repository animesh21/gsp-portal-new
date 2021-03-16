<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Responsreport extends CI_Controller {
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
    }

    public function index() {
        $data['main'] = 'Response Report 2017';
        $data['title'] = 'Home | Response Report 2017';
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
       // $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
    $data['Supporting_Document_Air'] = uploadHelper($this->session->userdata('USER_ID'), 'Supporting_Document_Air');
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
        $data['lunch']=$this->file->getLunchBoxData($this->session->userdata('USER_ID'));
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
        $data['teamDoingWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Doing_Survey');
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
           $html1 = $this->load->view('admin/survey/school_wt', $data, true);
             
            } else {
               $html1 = $this->load->view('admin/survey/primary-school-pdf', $data, true);
            }
            
              $this->load->library('dompdf_lib');
              $this->dompdf->set_paper("A4");
            $this->dompdf->load_html($html1);
            $this->dompdf->render();
            $this->dompdf->stream("welcome.pdf", array("Attachment" => false));
        
    }
}

