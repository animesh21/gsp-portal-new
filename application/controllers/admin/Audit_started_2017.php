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
    }

    public function index() {
        $data['main'] = 'admin/audit/audit_started_2017';
        $data['title'] = 'Home | Registration 2017';
        $data['record'] = $this->Audit_started_model->getData();
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
        $data['title'] = 'Home';
        $data['id'] = $argID;
        $data['states'] = getStates();
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
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
        $data['files'] = $this->file->getFoodFilesData($this->session->userdata('USER_ID'));
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
        
        $rank=getFiled('Q1G2',$data['schoolUserID']);
        
        if ($rank >= 6 ) { 
           $html1 = $this->load->view('admin/survey/school_pdf', $data, true);
             
            } else {
               $html1 = $this->load->view('admin/survey/primary-school-pdf', $data, true);
            }

            //this the the PDF filename that user will get to download
            $pdfFilePath = "school_pdf_name.pdf";

            //load mPDF library
            $this->load->library('M_pdf');

            //generate the PDF from the given html
            $this->m_pdf->pdf->WriteHTML($html1);

            //download it.
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
        
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

}

