<?php
ini_set('memory_limit', '-1');
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_report extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Performance_model');
        $this->load->helper('common_helper');
        $this->load->helper('form');
	$this->output->set_header('HTTP/1.0 200 OK');
	$this->output->set_header('HTTP/1.1 200 OK');
	$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
	$this->output->set_header('Cache-Control: post-check=0, pre-check=0');
	$this->output->set_header('Pragma: no-cache');
    }

    /*
     * Index Function
     */

    public function index() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/index';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    public function air() {    
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/air_to_land';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record1'] = $this->Performance_model->air_performance();
	//echo '<pre>'; print_r($data['record1']); exit;
        $this->load->view('admin/includes/template', $data);
    }
    public function schoolgeneral() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/schoolgeneral';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record1'] = $this->Performance_model->schoolgeneral_performance();
	//echo '<pre>'; print_r($data['record1']); exit;
        $this->load->view('admin/includes/template', $data);
    }
    public function water() {
       $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/water';
        $data['title'] = 'Home | Water';
        $data['record'] = $this->Performance_model->getDataWater();
        $this->load->view('admin/includes/template', $data);
    }
    public function waste() {
        $this->config->load('array_config');
         $data['main'] = 'admin/performance_report/waste';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getDataWaste();
        $this->load->view('admin/includes/template', $data);
    }
    public function feedback() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/feedback_points';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->feedback_performance();
	//echo '<pre>'; print_r($data['record']); exit;
        $this->load->view('admin/includes/template', $data);
    }
    
    public function totalCalculation() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/total-point-calculation';
        $data['title'] = 'Home | Total Calculation';
	    $data['record1'] = $this->db->select('a.school_id, a.userid, a.name, a.category, a.population, a.codinator_mail, a.codinator_mobile, a.state, a.district, a.higest_level, a.air_points, a.energy_points, a.food_points, a.land_points, a.water_points, a.waste_points, b.name AS state_name, c.name AS district_name')->from('tbl_total AS a')
	       ->join('states AS b', 'a.state=b.id', 'left')
	       ->join('cities AS c', 'a.district=c.id', 'left')
	       ->get()->result();
		
	    $data['record2'] = $this->db->select('a.school_id, a.userid, a.name, a.category, a.population, a.codinator_mail, a.codinator_mobile, a.state, a.district, a.higest_level, a.air_points, a.energy_points, a.food_points, a.land_points, a.water_points, a.waste_points, b.name AS state_name, c.name AS district_name')->from('tbl_total_phase2 AS a')
	       ->join('states AS b', 'a.state=b.id', 'left')
	       ->join('cities AS c', 'a.district=c.id', 'left')
	       ->get()->result();
	       $data['record'] = array_merge($data['record1'],$data['record2']);
	      $this->load->view('admin/includes/template', $data);
    }
 
  public function allExcelDump() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/total-point';
        $data['title'] = 'Home | Total Calculation';
        $data['record1'] = $this->Performance_model->combinedPerformancePoint();
        $this->load->view('admin/includes/template', $data);
    }

    public function allExcelDump_phase_2() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/total-point';
        $data['title'] = 'Home | Total Calculation';
        $data['record1'] = $this->Performance_model->combinedPerformancePoint1();        
        $this->load->view('admin/includes/template', $data);
    }
	
      public function AllExcelPrimary()
	{
		$data['main']='admin/performance_report/all-primary';
        $data['title']='Primary_Excel';
		$data['record1']=$this->Performance_model->getExcelPrimarySchool();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function AllExcelSecondary()
	{
		$data['main']='admin/performance_report/all-seconday';
        $data['title']='Secondary_Excel';
		$data['record1']=$this->Performance_model->getExcelSecondarySchool();
		$this->load->view('admin/includes/template', $data);	
	}	
	
	public function AllExcelHome()
	{
		$data['main']='admin/performance_report/all-secondary-home';
        $data['title']='Secondary_Excel';
		$data['record1']=$this->Performance_model->getExcelSecondaryHome();
		$this->load->view('admin/includes/template', $data);	
	}
	public function AllExcelPrimaryPhase_2()
	{
		$data['main']='admin/performance_report/all_primary_phase_2';
                $data['title']='Primary_Excel';
		$data['record1']=$this->Performance_model->getExcelPrimarySchoolPhase_2();
		$this->load->view('admin/includes/template', $data);
	}
	
	public function AllExcelSecondaryPhase_2()
	{
		$data['main']='admin/performance_report/all_seconday_phase_2';
                $data['title']='Secondary_Excel';
		$data['record1']=$this->Performance_model->getExcelSecondarySchoolPhase_2();
		$this->load->view('admin/includes/template', $data);	
	}	
	
	
	
	
    public function land()
    {
        $data['main']='admin/performance_report/land';
        $data['title']='Land';
         
        $data['records']=$this->Performance_model->land();
        //echo '<pre>'; print_r($data['records']);exit();
         $this->load->view('admin/includes/template', $data);
    }
    
     public function food()
    {
        $data['main']='admin/performance_report/food';
        $data['title']='Food';
         
        $data['records']=$this->Performance_model->food();
        //echo '<pre>'; print_r($data['records']);exit();
         $this->load->view('admin/includes/template', $data);
    }
    
    public function energy()
    {
        $data['main']='admin/performance_report/energy';
        $data['title']='Energy';
         
        $data['records']=$this->Performance_model->energy();
        //echo '<pre>'; print_r($data['records']);exit();
         $this->load->view('admin/includes/template', $data);
    }
            
            
    
   public function PdfById($argsID) {
        $this->config->load('array_config');
        $data['performance'] = $this->Performance_model->getDataById($argsID);
        $userId = getUserId($argsID);
        $rank   = getFiled('Q1G2',$userId);
           if($rank <= 5){
             $html=$this->load->view('admin/performance_report/Performance_primary', $data,true);
           }else{
             $html=$this->load->view('admin/performance_report/Performance', $data,true);           	
           }
		    $this->load->library('dompdf_lib');
		    $this->dompdf->set_paper("A4");
			$this->dompdf->load_html($html);
		    $this->dompdf->render();
		    $this->dompdf->stream("performance-report.pdf", array("Attachment" => false));
    }
    

	
	 public function landPrimary()
	{
		
		
		$data['main']='admin/performance_report/primary_land';
        $data['title']='Primary_Land';
		$data['records']=$this->Performance_model->getLandPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
        
        
        public function foodPrimary()
	{
		
		
		$data['main']='admin/performance_report/primary_food';
                $data['title']='Primary_Food';
		$data['records']=$this->Performance_model->getFoodPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	  public function energyPrimary()
	{
		
		
		$data['main']='admin/performance_report/primary_energy';
                $data['title']='Primary_Energy';
		$data['records']=$this->Performance_model->getEnergyPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	 public function wastePrimary()
	{
		
		
		$data['main']='admin/performance_report/primary_waste';
                $data['title']='Primary_Waste';
		$data['records']=$this->Performance_model->getWastePrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	public function waterPrimary()
	{
		 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		
		$data['main']='admin/performance_report/primary_water';
                $data['title']='Primary_Waste';
		$data['records']=$this->Performance_model->getWaterPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	public function airPrimary()
	{
		 
		
		$data['main']='admin/performance_report/primary_air';
                $data['title']='Primary_Air';
		$data['record1']=$this->Performance_model->getAirPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	
	public function schoolgeneralPrimary()
	{
		 
		
		$data['main']='admin/performance_report/primary_schoolgeneral';
                $data['title']='Primary_School&Genaral';
		$data['record1']=$this->Performance_model->getSchoolgeneralPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	 public function feedbackPrimary()
	{
		
		
		$data['main']='admin/performance_report/primary_feedback';
                $data['title']='Primary_Feedback';
		$data['records']=$this->Performance_model->getFeedbackPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	public function ExcelPrimary()
	{
		 
		
		$data['main']='admin/performance_report/primarytotal_point';
                $data['title']='Primary_Excel';
		$data['record1']=$this->Performance_model->getExcelPrimarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);
		
	}
	
	
	public function ExcelSecondary()
	{
		$data['main']='admin/performance_report/secondarytotal_point';
                $data['title']='Secondary_Excel';
		$data['record1']=$this->Performance_model->getExcelSecondarySchool();
		//echo "<pre>";print_r($data['records']);exit;
		$this->load->view('admin/includes/template', $data);	
	}
	
	
	public function schoolgeneral_phase2() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/schoolgeneral_phase2';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record1'] = $this->Performance_model->schoolgeneral_performance_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
	 public function water_phase2() {
       $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/water_phase2';
        $data['title'] = 'Home | Water';
        $data['record'] = $this->Performance_model->getDataWater_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
	 public function waste_phase2() {
        $this->config->load('array_config');
         $data['main'] = 'admin/performance_report/waste';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record'] = $this->Performance_model->getDataWaste_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
	 public function land_phase2()
    {
        $data['main']='admin/performance_report/land_phase2';
        $data['title']='Land';
        $data['records']=$this->Performance_model->land_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
    public function food_phase2()
    {
        $data['main']='admin/performance_report/food_phase2';
        $data['title']='Food';
        $data['records']=$this->Performance_model->food_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function energy_phase2()
    {
        $data['main']='admin/performance_report/energy_phase2';
        $data['title']='Energy';
        $data['records']=$this->Performance_model->energy_phase2();
        $this->load->view('admin/includes/template', $data);
    }
	
	public function landPrimary_phase2()
	{
	    $data['main']='admin/performance_report/primary_land_phase2';
            $data['title']='Primary_Land';
		$data['records']=$this->Performance_model->getLandPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);	
	}
	
	public function foodPrimary_phase2()
	 {
		$data['main']='admin/performance_report/primary_food_phase2';
        $data['title']='Primary_Food';
		$data['records']=$this->Performance_model->getFoodPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	 }
	 public function energyPrimary_phase2()
	 {
		$data['main']='admin/performance_report/primary_energy_phase2';
        $data['title']='Primary_Energy';
		$data['records']=$this->Performance_model->getEnergyPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	 }
	
	public function wastePrimary_phase2()
	 {
		$data['main']='admin/performance_report/primary_waste_phase2';
        $data['title']='Primary_Waste';
		$data['records']=$this->Performance_model->getWastePrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	 }
	
	public function waterPrimary_phase2()
	 {
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$data['main']='admin/performance_report/primary_waste_phase2';
        $data['title']='Primary_Waste';
		$data['records']=$this->Performance_model->getWaterPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	 }
	
	public function airPrimary_phase2()
	 {
	    $data['main']='admin/performance_report/primary_air_phase2';
        $data['title']='Primary_Air_phase2';
		$data['record1']=$this->Performance_model->getAirPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	 }
	
	public function schoolgeneralPrimary_phase2()
	{
		$data['main']='admin/performance_report/primary_schoolgeneral_phase2';
        $data['title']='Primary_School&Genaral';
		$data['record1']=$this->Performance_model->getSchoolgeneralPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	}
	
	 public function air_phase2() {    
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/air_to_land_phase2';
        $data['title'] = 'Home | Perofrmance Report';
        $data['record1'] = $this->Performance_model->air_performance_phase2();
        $this->load->view('admin/includes/template', $data);
       }
	/******************************************************************/
	/******************************************************************/
	public function ExcelPrimary_Phase2()
	{
		$data['main']='admin/performance_report/primarytotal_point_phase2';
        $data['title']='Primary_Excel';
		$data['record1']=$this->Performance_model->getExcelPrimarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	}
	/******************************************************************/
	/******************************************************************/
	public function ExcelSecondary_Phase2()
	{
		$data['main']='admin/performance_report/secondarytotal_point_phase2';
        $data['title']='Secondary_Excel';
		$data['record1']=$this->Performance_model->getExcelSecondarySchool_phase2();
		$this->load->view('admin/includes/template', $data);
	} 
	

}
