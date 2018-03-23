<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Report');
        $this->load->helper(array('common_helper', 'form', 'download'));
    }

    public function index() {
        $data['main'] = 'admin/reports/report1';
        $data['title'] = 'Participation By Zone';
		$east_india = array("36", "26", "16", "1", "5");
		$north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
		$north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
        $south_india = array("2", "17", "18", "31", "32", "19", "27");
		$west_india = array("12", "21", "11", "9", "8");
        $central_india = array("7", "20");
		$eastregionarr=array();
		$audit_register=array();
		$audit_register[]=$this->Report->registerparticipationByZone($north_india);
		$audit_register[]=$this->Report->registerparticipationByZone($south_india);
		$audit_register[]=$this->Report->registerparticipationByZone($east_india);
		$audit_register[]=$this->Report->registerparticipationByZone($west_india);
		$audit_register[]=$this->Report->registerparticipationByZone($north_east_india);
		$audit_register[]=$this->Report->registerparticipationByZone($central_india);
		$data['audit_register']=$audit_register;
		$audit_start=array();
		$audit_start[]=$this->Report->startparticipationByZone($north_india);
		$audit_start[]=$this->Report->startparticipationByZone($south_india);
		$audit_start[]=$this->Report->startparticipationByZone($east_india);
		$audit_start[]=$this->Report->startparticipationByZone($west_india);
		$audit_start[]=$this->Report->startparticipationByZone($north_east_india);
		$audit_start[]=$this->Report->startparticipationByZone($central_india);
		$data['audit_start']=$audit_start;
		
		$audit_complete=array();
		$audit_complete[]=$this->Report->completeparticipationByZone($north_india);
		$audit_complete[]=$this->Report->completeparticipationByZone($south_india);
		$audit_complete[]=$this->Report->completeparticipationByZone($east_india);
		$audit_complete[]=$this->Report->completeparticipationByZone($west_india);
		$audit_complete[]=$this->Report->completeparticipationByZone($north_east_india);
		$audit_complete[]=$this->Report->completeparticipationByZone($central_india);
		$data['audit_complete']=$audit_complete;
        $this->load->view('admin/includes/template', $data);
    }
	
	public function getParticipationByState()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report2';
		$this->load->view('admin/includes/template', $data);
	}
	public function setParticipationByState()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
		$state1=$this->input->post('state1');
		$state2=$this->input->post('state2');
		$data['state_id1'] = $this->input->post('state1');
		$data['state_id2'] = $this->input->post('state2');
	    $data['main'] = 'admin/reports/report2-graphs';
        $data['title'] = 'Participation By State';
		$data['registerd_audit_1']=$this->Report->singleregisterparticipationByZone($state1);
		$data['total_started_audit_1']=$this->Report->singlestartparticipationByZone($state1);
		$data['completed_1']=$this->Report->singlecompleteparticipationByZone($state1);
		$data['total_notstarted_audit_1']=$this->Report->singlenotstartparticipationByZone($state1);
		/***************/
		$data['registerd_audit_2']=$this->Report->singleregisterparticipationByZone($state2);
		$data['total_started_audit_2']=$this->Report->singlestartparticipationByZone($state2);
		$data['completed_2']=$this->Report->singlecompleteparticipationByZone($state2);
		$data['total_notstarted_audit_2']=$this->Report->singlenotstartparticipationByZone($state2);
		$data['stateId1']=$state1;
		$data['stateId2']=$state2;
		$this->load->view('admin/includes/template', $data);
	}
	
	public function getPerformanceByState()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report3';
		$this->load->view('admin/includes/template', $data);
	}
	
	public function setPerformanceByState()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report3-graph';
		$state1=$this->input->post('state');
		$data['state_id'] = $this->input->post('state');
		$data['performance_1']=$this->Report->percentage_70_percent($state1);
		$data['performance_2']=$this->Report->percentage_50_69_percent($state1);
		$data['performance_3']=$this->Report->percentage_35_49_percent($state1);
		$data['performance_4']=$this->Report->percentage_0_34_percent($state1);
		/***************/
		$this->load->view('admin/includes/template', $data);
	}
	
	public function geteWasteDisposalReport()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "E Waste Disposal Report";
	    $data['main'] = 'admin/reports/report6';
		$this->load->view('admin/includes/template', $data);
	}
	
	public function seteWasteDisposalReport()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "E Waste Disposal Report";
	    $data['main'] = 'admin/reports/report6-graph';
		$state1=$this->input->post('state');
		$data['state_id'] = $this->input->post('state');
		$data['scrapdealer_count']=$this->Report->geteWasteDisposalReport($state1,"Q13Wa2","1");
		$data['btvendor_count']=$this->Report->geteWasteDisposalReport($state1,"Q13Wa2","2");
		$data['authorized_dealer_count']=$this->Report->geteWasteDisposalReport($state1,"Q13Wa2","3");
		$data['authorized_dismentler_count']=$this->Report->geteWasteDisposalReport($state1,"Q13Wa2","4");
		$data['others_count']=$this->Report->geteWasteDisposalReport1($state1,"Q13Wa2O");
		$this->load->view('admin/includes/template', $data);
	}
	public function geteAirQuestionReport()
	{   
	   $data['main'] = 'admin/reports/report_air';
	   
	   $this->load->view('admin/includes/template', $data);
	}
	
	
	
	<!--  Air report   -->
	
	public function getair(){
		
		$data['main'] = 'admin/reports/air_graph';
		
		
		$data['NotOwnVehicles_count'] = $this->Report->SchoolDoesNotOwnVehicles("Q6A1","1");
		$data['Operatorowned_count'] = $this->Report->Operatorownedvehicles("Q6A1","2");
		$data['OwnVehicles_count'] = $this->Report->Schoolownedvehicles("Q6A1","3");
        $data['CombinationSchoolandOperatorvehicles'] = $this->Report->CombinationSchoolandOperatorvehicles("Q6A1","4");
		$data['Hiredvehicles'] = $this->Report->Hiredvehicles("Q6A1","5");
		
		
		$data['Airconditionedvehicles'] = $this->Report->Airconditionedvehicles("Q6A2S1B3");
		//print_r($data['Airconditionedvehicles']);
		//$data['BusesonDiesel'] = $this->Report->BusesonDiesel("Q6A2S3D1","20");
		$data['Bus']['petrol'] = $this->Report->AirReportData("Q6A2S3P1");
		$data['Bus']['diesel'] = $this->Report->AirReportData("Q6A2S3D1");
		$data['Bus']['cng'] = $this->Report->AirReportData("Q6A2S3C1");
		$data['Bus']['electric'] = $this->Report->AirReportData("Q6A2S3E2");
		
		
		//*****************Sustainable Motorised Vehicles ********************************* //   
           $data['sustain']['Q7A1S4'] = $this->Report->getAirVehicle('Q7A1S4');
           $data['sustain']['Q7A2S4'] = $this->Report->getAirVehicle('Q7A2S4');
           $data['sustain']['Q7A3S4'] = $this->Report->getAirVehicle('Q7A3S4');
           $data['sustain']['Q7A4S4'] = $this->Report->getAirVehicle('Q7A4S4');
           $data['sustain']['Q7A5S4'] = $this->Report->getAirVehicle('Q7A5S4');
           $data['sustain']['Q7A6S4'] = $this->Report->getAirVehicle('Q7A6S4');
          
       //****************Private vehicles *********************************//  
            $data['private']['Q7A7S4'] = $this->Report->getAirVehicle('Q7A7S4');
            $data['private']['Q7A8S4'] = $this->Report->getAirVehicle('Q7A8S4');
       //**************** Non-Polluting Mode *****************************//
            $data['np']['Q7A9S4'] = $this->Report->getAirVehicle('Q7A9S4');
            $data['np']['Q7A10S4'] = $this->Report->getAirVehicle('Q7A10S4');
            $data['np']['Q7A11S4'] = $this->Report->getAirVehicle('Q7A11S4');
            
        //******************* Air quality ******************************//
            $data['quality']['Q9A1'] = $this->Report->getAirQuality('Q9A1');
            
            
	   $this->load->view('admin/includes/template', $data);
	}
	
	
}
