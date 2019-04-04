<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->
session->userdata('ADMIN_ID') == '') {
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
		//Old data array $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
	        $north_east_india = array("3", "4", "22", "23", "24", "25", "30", "33");
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
		//$state2=$this->input->post('state2');
		$data['state_id1'] = $this->input->post('state1');
		//$data['state_id2'] = $this->input->post('state2');
	    $data['main'] = 'admin/reports/report2-graphs';
        $data['title'] = 'Participation By State';
		$data['registerd_audit_1']=$this->Report->singleregisterparticipationByZone($state1);
		$data['total_started_audit_1']=$this->Report->singlestartparticipationByZone($state1);
		$data['completed_1']=$this->Report->singlecompleteparticipationByZone($state1);
		$data['total_notstarted_audit_1']=$this->Report->singlenotstartparticipationByZone($state1);
		/**************
		$data['registerd_audit_2']=$this->Report->singleregisterparticipationByZone($state2);
		$data['total_started_audit_2']=$this->Report->singlestartparticipationByZone($state2);
		$data['completed_2']=$this->Report->singlecompleteparticipationByZone($state2);
		$data['total_notstarted_audit_2']=$this->Report->singlenotstartparticipationByZone($state2);*/
		$data['stateId1']=$state1;
		//$data['stateId2']=$state2;
		$this->load->view('admin/includes/template', $data);
	}
	
	
	
	
	public function getParticipationByStateComparison()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report4';
		$this->load->view('admin/includes/template', $data);
	}
	public function setParticipationByStateComparison()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
		$state1=$this->input->post('state1');
		$state2=$this->input->post('state2');
		$data['state_id1'] = $this->input->post('state1');
		$data['state_id2'] = $this->input->post('state2');
	    $data['main'] = 'admin/reports/report4-graphs';
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
	
	
	public function getPerformanceByStateComparison()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report7';
		$this->load->view('admin/includes/template', $data);
	}
	
	public function setPerformanceByStateComparison()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "All";
	    $data['main'] = 'admin/reports/report7-graph';
		$data['state_id1'] = $this->input->post('state1');
		$data['state_id2'] = $this->input->post('state2');
		$state1=$this->input->post('state1');
		$state2=$this->input->post('state2');
		$data['performance_1']=$this->Report->percentage_70_percent($state1);
		$data['performance_2']=$this->Report->percentage_50_69_percent($state1);
		$data['performance_3']=$this->Report->percentage_35_49_percent($state1);
		$data['performance_4']=$this->Report->percentage_0_34_percent($state1);
		/***************/
		$data['performance_1_2']=$this->Report->percentage_70_percent($state2);
		$data['performance_2_2']=$this->Report->percentage_50_69_percent($state2);
		$data['performance_3_2']=$this->Report->percentage_35_49_percent($state2);
		$data['performance_4_2']=$this->Report->percentage_0_34_percent($state2);
		$this->load->view('admin/includes/template', $data);
	}
	
	
	public function getWasteGenerationReport()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "Waste Generation Report";
	    $data['main'] = 'admin/reports/report5';
		$this->load->view('admin/includes/template', $data);
	}
	
	public function setWasteGenerationReport()
	{   
	    $data['states'] = getStates();
	    $data['states'][0] = "Waste Generation Report";
		$data['state_id']=$this->input->post('state');
	    $data['main'] = 'admin/reports/report5-graph';
		$this->load->view('admin/includes/template', $data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function geteAirQuestionReport()
	{   
	   $data['main'] = 'admin/reports/report_air';
	   
	   $this->load->view('admin/includes/template', $data);
	}
	
	
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
		
		
		 $data['sustain']['Q7A1S4'] = $this->Report->getAirVehicle('Q7A1S4');
          	 $data['sustain']['Q7A2S4'] = $this->Report->getAirVehicle('Q7A2S4');
          	 $data['sustain']['Q7A3S4'] = $this->Report->getAirVehicle('Q7A3S4');
          	 $data['sustain']['Q7A4S4'] = $this->Report->getAirVehicle('Q7A4S4');
           	 $data['sustain']['Q7A5S4'] = $this->Report->getAirVehicle('Q7A5S4');
           	 $data['sustain']['Q7A6S4'] = $this->Report->getAirVehicle('Q7A6S4');
		
		$data['private']['Q7A7S4'] = $this->Report->getAirVehicle('Q7A7S4');
                $data['private']['Q7A8S4'] = $this->Report->getAirVehicle('Q7A8S4');
		
		 $data['np']['Q7A9S4'] = $this->Report->getAirVehicle('Q7A9S4');
                 $data['np']['Q7A10S4'] = $this->Report->getAirVehicle('Q7A10S4');
                 $data['np']['Q7A11S4'] = $this->Report->getAirVehicle('Q7A11S4');
		
		 $data['quality']['Q9A1'] = $this->Report->getAirQuality_recheck('Q9A1');
		
            
            
	   $this->load->view('admin/includes/template', $data);
	}
	
	public function getenergy()
	{
		
		$data['main'] = 'admin/reports/energy_graph';
		
		$data['energy']['Airconditioner_count'] = $this->Report->getWaterSchool("Q7E2S1");
		$data['energy']['Tubelight_count'] = $this->Report->getWaterSchool("Q7E5S1");
		$data['energy']['CFLbulb_count'] = $this->Report->getWaterSchool("Q7E6S1");
		$data['energy']['LEDbulb_count'] = $this->Report->getWaterSchool("Q7E7S1");
		$data['energy']['SchoolHavingAlternateSourceOfEnergy'] = $this->Report->getWaterSchool("Q9E1");
		
		$data['energy2'] = $this->Report->getEnergyReport_2();
		$data['energy1'] = $this->Report->getEnergyReport();
        $data['generator1'] = $this->Report->getEnergyGeneratorSchool();
        $data['biogas1'] = $this->Report->getEnergyBiogasSchool();
        $data['solar1'] = $this->Report->getEnergySolarSchool();
             $data['generator2'] = $this->Report->getEnergyGeneratorSchool_2();
             $data['biogas2'] = $this->Report->getEnergyBiogasSchool_2();
            $data['solar2'] = $this->Report->getEnergySolarSchool_2();     
	   $this->load->view('admin/includes/template', $data);
	}
	
	
	
	public function getland()
	{   
	   $data['main'] = 'admin/reports/land_graph';
           
            $data['Q4L5'] = $this->Report->getLand_1();
            $data['Q6L1'] = $this->Report->getLand_2();
           
           
	   $this->load->view('admin/includes/template', $data);
	}
	
	public function getWater()
	{   
	   $data['main'] = 'admin/reports/water-report';
           
           $data['water']['Q5W1'] = $this->Report->getWaterSchool('Q5W1');
           $data['water']['Q5W2'] = $this->Report->getWaterSchool('Q5W2');
           $data['water']['Q5W3'] = $this->Report->getWaterSchool('Q5W3');
           $data['water']['Q5W4'] = $this->Report->getWaterSchool('Q5W4');
           
           $data['water']['Q8W1S10'] = $this->Report->getAirQuality('Q8W1S10');
           
           $data['water']['Q8W2'] = $this->Report->getAnswerByGroup();
           
           $data['Q8W2S2']['store'] = $this->Report->getWaterByAnswer('Q8W2S2',1);
           $data['Q8W2S2']['recharge'] = $this->Report->getWaterByAnswer('Q8W2S2',2);
           $data['Q8W2S2']['both'] = $this->Report->getWaterByAnswer('Q8W2S2',3);
           
           $data['RWH']['Conduits'] = $this->Report->getWaterSchool('Q8W2S31');
           $data['RWH']['Gutters'] = $this->Report->getWaterSchool('Q8W2S32');
		$data['RWH']['Filter'] = $this->Report->getWaterSchool('Q8W2S33');
		$data['RWH']['First'] = $this->Report->getWaterSchool('Q8W2S34');
		$data['RWH']['Storage'] = $this->Report->getWaterSchool('Q8W2S35');
		$data['RWH']['Collection '] = $this->Report->getWaterSchool('Q8W2S36');
		$data['RWH']['Pump'] = $this->Report->getWaterSchool('Q8W2S37');
		$data['RWH']['Recharge'] = $this->Report->getWaterSchool('Q8W2S38');
		
		
	    $data['water']['reuse'] = $this->Report->getAirQuality('Q20W1');
           
           $data['Q20W2']['gardening'] = $this->Report->getWaterByAnswer('Q20W2',1);
           $data['Q20W2']['flushing'] = $this->Report->getWaterByAnswer('Q20W2',2);
           $data['Q20W2']['recharge_ground_water'] = $this->Report->getWaterByAnswer('Q20W2',3);
           
	   $this->load->view('admin/includes/template', $data);
	}
        
         public function getWaste()
	{ 
           $data['main'] = 'admin/reports/waste-report';
           
           $data['waste']['Q5Wa11S1'] = $this->Report->getAirVehicle('Q5Wa11S1');
           $data['waste']['Q5Wa11S2'] = $this->Report->getAirVehicle('Q5Wa11S2');
           $data['waste']['Q5Wa11S3'] = $this->Report->getAirVehicle('Q5Wa11S3');
           $data['waste']['Q5Wa11S4'] = $this->Report->getAirVehicle('Q5Wa11S4');
           
           $data['waste']['Q9Wa1'] = $this->Report->getAirQuality('Q9Wa1');
           $data['waste']['natural_composting'] = $this->Report->getWaterSchool('Q9Wa2S1');
           $data['waste']['vermi_composting'] = $this->Report->getWaterSchool('Q9Wa2S2');
           $data['waste']['mechanical_composting'] = $this->Report->getWaterSchool('Q9Wa2S3');
           $data['waste']['other'] = $this->Report->getWaterSchool('Q9Wa2S4');
           
           $data['waste']['reuse_book'] = $this->Report->getAirQuality('Q10Wa1');
           
           $data['paper']['kabadiwala'] = $this->Report->getWaterSchool('Q11Wa1S1');
           $data['paper']['authorized_dealer'] = $this->Report->getWaterSchool('Q11Wa1S2');
           $data['paper']['dumped'] = $this->Report->getWaterSchool('Q11Wa1S3');
           $data['paper']['internal_procedure'] = $this->Report->getWaterSchool('Q11Wa1S4');
           
           $data['plastic']['kabadiwala'] = $this->Report->getWaterSchool('Q11Wa2S1');
           $data['plastic']['authorized_dealer'] = $this->Report->getWaterSchool('Q11Wa2S2');
           $data['plastic']['dumped'] = $this->Report->getWaterSchool('Q11Wa2S3');
           $data['plastic']['internal_procedure'] = $this->Report->getWaterSchool('Q11Wa2S4');
           
           $data['ewaste']['kabadiwala'] = $this->Report->getWaterSchool('Q11Wa4S1');
           $data['ewaste']['authorized_dealer'] = $this->Report->getWaterSchool('Q11Wa4S2');
           $data['ewaste']['dumped'] = $this->Report->getWaterSchool('Q11Wa4S3');
           $data['ewaste']['internal_procedure'] = $this->Report->getWaterSchool('Q11Wa4S4');
           $data['burn']['Q15Wa1'] = $this->Report->getAirQuality('Q15Wa1');
           $this->load->view('admin/includes/template', $data);
             
         } 	
	public function getFood()
	{ 
           $data['main'] = 'admin/reports/food-report';
	   $data['food']['Q4F1'] = $this->Report->getAirQuality('Q4F1');
           $data['food']['Q5F1'] = $this->Report->getAirQuality('Q5F1');
           
           $data['food']['Q5F1S2'] = $this->Report->getAirVehicle('Q5F1S2');
           
           $data['food']['snacks'] = $this->Report->getAirQuality('Q7F1');
           $data['food']['beverages'] = $this->Report->getAirQuality('Q8F1');
           
           $data['food']['rewards'] = $this->Report->getAirQuality('Q9F1');
           $data['food']['event'] = $this->Report->getAirQuality('Q10F1');
           $data['food']['quiz'] = $this->Report->getAirQuality('Q11F1');
           $data['food']['height'] = $this->Report->getAirQuality('Q12F1');
           
           $data['height']['monthly'] = $this->Report->getWaterByAnswer('Q12F2',1);
           $data['height']['quarterly'] = $this->Report->getWaterByAnswer('Q12F2',2);
           $data['height']['bi_annually'] = $this->Report->getWaterByAnswer('Q12F2',3);
           $data['height']['annually'] = $this->Report->getWaterByAnswer('Q12F2',4);	
		
	  $this->load->view('admin/includes/template', $data);	
	}	
	
	
} 
