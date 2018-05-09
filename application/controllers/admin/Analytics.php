<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Analytics extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
		$this->load->model('admin/Analytics_Model');
        $this->load->helper(array('common_helper', 'form', 'download'));
    }
	/*******************************************************************/
	/*******************************************************************/
	public function eWasteReport(){
	    $data['main'] = 'admin/reports/e_waste_report';
		$east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
	  $data["east"]=$east_india;
	  $data["north"]=$north_india;
	  $data["south"]=$south_india;
	  $data["west"]=$west_india;
	  $data["north_east"]=$north_east_india;
	  $data["central"]=$central_india;
		$data['records']=$this->Analytics_Model->getSchoolData();	
	    $this->load->view('admin/includes/template', $data);	
	}
	/*******************************************************************/
	/*******************************************************************/
	public function meritList(){
	  $data['main'] = 'admin/reports/merit_list';
	  $east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
	  $data["east"]=$east_india;
	  $data["north"]=$north_india;
	  $data["south"]=$south_india;
	  $data["west"]=$west_india;
	  $data["north_east"]=$north_east_india;
	  $data["central"]=$central_india;
	  $data['records']=$this->Analytics_Model->getSchoolData();	
	  $this->load->view('admin/includes/template', $data);	
	}
	
	/*******************************************************************/
	/*******************************************************************/
	public function getGreenCoverReport()
	{ 
	  $east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
      $data['main'] = 'admin/reports/green_cover_report';
	  $cityList=array();
	  $cityList1=array();
	  $cityList2=array();
	  $cityList3=array();
	  $cityList4=array();
	  $cityList5=array();
	  foreach($north_india as $north_india1){
	    $cityList[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_india1);
	  }
	  foreach($east_india as $east_india1){
	    $cityList1[]=$this->Analytics_Model->getWaterConsumptionPatternReport($east_india1);
	  }
	  foreach($west_india as $west_india1){
	    $cityList2[]=$this->Analytics_Model->getWaterConsumptionPatternReport($west_india1);
	  }
	  foreach($south_india as $south_india1){
	    $cityList3[]=$this->Analytics_Model->getWaterConsumptionPatternReport($south_india1);
	  }
	  foreach($north_east_india as $north_east_india1){
	    $cityList4[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_east_india1);
	  }
	  foreach($central_india as $central_india1){
	    $cityList5[]=$this->Analytics_Model->getWaterConsumptionPatternReport($central_india1);
	  }
	  $wcpatternList=array();
	  for($i=0;$i<sizeof($cityList);++$i){
	     $wcpatternList[]=array("region"=>"North","statename"=>$cityList[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList1);++$i){
	     $wcpatternList[]=array("region"=>"East","statename"=>$cityList1[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList2);++$i){
	     $wcpatternList[]=array("region"=>"West","statename"=>$cityList2[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList3);++$i){
	     $wcpatternList[]=array("region"=>"South","statename"=>$cityList3[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList4);++$i){
	     $wcpatternList[]=array("region"=>"North East","statename"=>$cityList4[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList5);++$i){
	     $wcpatternList[]=array("region"=>"Central","statename"=>$cityList5[$i]->statename);
	  }
	  $data['records']=$wcpatternList;
	  $this->load->view('admin/includes/template', $data);	
	}
	/*******************************************************************/
	/*******************************************************************/
	public function getbuiltupAreaProfilingReport()
	{ 
	  $east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
      $data['main'] = 'admin/reports/builtup_area_profiling_report';
	  $cityList=array();
	  $cityList1=array();
	  $cityList2=array();
	  $cityList3=array();
	  $cityList4=array();
	  $cityList5=array();
	   foreach($north_india as $north_india1){
	    $cityList[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_india1);
	  }
	  foreach($east_india as $east_india1){
	    $cityList1[]=$this->Analytics_Model->getWaterConsumptionPatternReport($east_india1);
	  }
	  foreach($west_india as $west_india1){
	    $cityList2[]=$this->Analytics_Model->getWaterConsumptionPatternReport($west_india1);
	  }
	  foreach($south_india as $south_india1){
	    $cityList3[]=$this->Analytics_Model->getWaterConsumptionPatternReport($south_india1);
	  }
	  foreach($north_east_india as $north_east_india1){
	    $cityList4[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_east_india1);
	  }
	  foreach($central_india as $central_india1){
	    $cityList5[]=$this->Analytics_Model->getWaterConsumptionPatternReport($central_india1);
	  }
	  $wcpatternList=array();
	  for($i=0;$i<sizeof($cityList);++$i){
	     $wcpatternList[]=array("region"=>"North","statename"=>$cityList[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList1);++$i){
	     $wcpatternList[]=array("region"=>"East","statename"=>$cityList1[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList2);++$i){
	     $wcpatternList[]=array("region"=>"West","statename"=>$cityList2[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList3);++$i){
	     $wcpatternList[]=array("region"=>"South","statename"=>$cityList3[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList4);++$i){
	     $wcpatternList[]=array("region"=>"North East","statename"=>$cityList4[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList5);++$i){
	     $wcpatternList[]=array("region"=>"Central","statename"=>$cityList5[$i]->statename);
	  }
	  $data['records']=$wcpatternList;
	  $this->load->view('admin/includes/template', $data);	
	}
	/*******************************************************************/
	/*******************************************************************/
	public function getToiletProfilingReport()
	{ 
	  $east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
      $data['main'] = 'admin/reports/toilet_profiling_report';
	  $cityList=array();
	  $cityList1=array();
	  $cityList2=array();
	  $cityList3=array();
	  $cityList4=array();
	  $cityList5=array();
	  foreach($north_india as $north_india1){
	    $cityList[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_india1);
	  }
	  foreach($east_india as $east_india1){
	    $cityList1[]=$this->Analytics_Model->getWaterConsumptionPatternReport($east_india1);
	  }
	  foreach($west_india as $west_india1){
	    $cityList2[]=$this->Analytics_Model->getWaterConsumptionPatternReport($west_india1);
	  }
	  foreach($south_india as $south_india1){
	    $cityList3[]=$this->Analytics_Model->getWaterConsumptionPatternReport($south_india1);
	  }
	  foreach($north_east_india as $north_east_india1){
	    $cityList4[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_east_india1);
	  }
	  foreach($central_india as $central_india1){
	    $cityList5[]=$this->Analytics_Model->getWaterConsumptionPatternReport($central_india1);
	  }
	  $wcpatternList=array();
	  for($i=0;$i<sizeof($cityList);++$i){
	     $wcpatternList[]=array("region"=>"North","statename"=>$cityList[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList1);++$i){
	     $wcpatternList[]=array("region"=>"East","statename"=>$cityList1[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList2);++$i){
	     $wcpatternList[]=array("region"=>"West","statename"=>$cityList2[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList3);++$i){
	     $wcpatternList[]=array("region"=>"South","statename"=>$cityList3[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList4);++$i){
	     $wcpatternList[]=array("region"=>"North East","statename"=>$cityList4[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList5);++$i){
	     $wcpatternList[]=array("region"=>"Central","statename"=>$cityList5[$i]->statename);
	  }
	  $data['records']=$wcpatternList;
	  $this->load->view('admin/includes/template', $data);	
	}
	/*******************************************************************/
	/*******************************************************************/
	public function getWaterConsumptionPatternReport()
	{ 
	  $east_india = array("36", "26", "16", "1", "5");
	  $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
	  $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
      $south_india = array("2", "17", "18", "31", "32", "19", "27");
	  $west_india = array("12", "21", "11", "9", "8");
      $central_india = array("7", "20");
	  $data['main'] = 'admin/reports/water_consumption_pattern_report';
	  $cityList=array();
	  $cityList1=array();
	  $cityList2=array();
	  $cityList3=array();
	  $cityList4=array();
	  $cityList5=array();
	  foreach($north_india as $north_india1){
	    $cityList[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_india1);
	  }
	  foreach($east_india as $east_india1){
	    $cityList1[]=$this->Analytics_Model->getWaterConsumptionPatternReport($east_india1);
	  }
	  foreach($west_india as $west_india1){
	    $cityList2[]=$this->Analytics_Model->getWaterConsumptionPatternReport($west_india1);
	  }
	  foreach($south_india as $south_india1){
	    $cityList3[]=$this->Analytics_Model->getWaterConsumptionPatternReport($south_india1);
	  }
	  foreach($north_east_india as $north_east_india1){
	    $cityList4[]=$this->Analytics_Model->getWaterConsumptionPatternReport($north_east_india1);
	  }
	  foreach($central_india as $central_india1){
	    $cityList5[]=$this->Analytics_Model->getWaterConsumptionPatternReport($central_india1);
	  }
	  $wcpatternList=array();
	  for($i=0;$i<sizeof($cityList);++$i){
	     $wcpatternList[]=array("region"=>"North","statename"=>$cityList[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList1);++$i){
	     $wcpatternList[]=array("region"=>"East","statename"=>$cityList1[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList2);++$i){
	     $wcpatternList[]=array("region"=>"West","statename"=>$cityList2[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList3);++$i){
	     $wcpatternList[]=array("region"=>"South","statename"=>$cityList3[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList4);++$i){
	     $wcpatternList[]=array("region"=>"North East","statename"=>$cityList4[$i]->statename);
	  }
	  for($i=0;$i<sizeof($cityList5);++$i){
	     $wcpatternList[]=array("region"=>"Central","statename"=>$cityList5[$i]->statename);
	  }
	  $data['records']=$wcpatternList;
	  $this->load->view('admin/includes/template',$data);	
	}
	
	public function VehicleProfile(){
           $data['zone']=$this->Report->getVehicleProfile();
           $data['main'] = 'admin/reports/vehicle_profile';
           $this->load->view('admin/includes/template', $data);
        
        }
	public function FoodBrandSponser(){
           $data['zone']=$this->Report->getFoodBrandSponser();
           $data['main'] = 'admin/reports/brand_sponser';
           $this->load->view('admin/includes/template', $data);
        
        }
	public function FoodFlavour(){
           $data['zone']=$this->Report->getFoodFlavour();
           $data['main'] = 'admin/reports/food_item_flavour';
           $this->load->view('admin/includes/template', $data);
        
        }
	public function FoodProfileTraditional(){
           $data['zone']=$this->Report->getFoodProfileTraditional();
           $data['main'] = 'admin/reports/food_traditional';
           $this->load->view('admin/includes/template', $data);
        
        }
	public function FoodItemSell(){
           $data['zone']=$this->Report->getFoodItemSell();
           $data['main'] = 'admin/reports/food_item_sell';
           $this->load->view('admin/includes/template', $data);
        
        }
	
}
