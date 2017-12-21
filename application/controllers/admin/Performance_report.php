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
        $data['record'] = $this->Performance_model->getTotalCalculation();
        $this->load->view('admin/includes/template', $data);
    }	
 
  public function allExcelDump() {
        $this->config->load('array_config');
        $data['main'] = 'admin/performance_report/total-point';
        $data['title'] = 'Home | Total Calculation';
        $data['record1'] = $this->Performance_model->combinedPerformancePoint();
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
            
            
    
    public function PdfById() {
        $this->config->load('array_config');
        
        $data = array(
          'gsp_userid' => $this->input->post('dname')
            );
           //print_r($data['gsp_userid']);
            //die();
        $d['performance'] = $this->Performance_model->getDataById($data['gsp_userid']);
        //print_r($d);
        $html=$this->load->view('admin/performance_report/Performance', $d,true);
           

            //this the the PDF filename that user will get to download
            $pdfFilePath = "performance-report.pdf";

            //load mPDF library
           $this->load->library('M_pdf');

            //generate the PDF from the given html
           $this->m_pdf->pdf->WriteHTML($html);

            //download it.
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
        
    }
    
//    public function excel()
//    {
//        $arrUserID=array();
//        $this->load->dbutil();
//        $record= $this->Performance_model->getData();
//        foreach($record as $r)
//        {
//            $arrUserID[]=$r->userid;
//        }
//        //echo '<pre>'; print_r($arrUserID); exit;
//        $row = $this->Performance_model->getExcel($arrUserID);
//        $name = 'registration2017_by_state.csv';
//        force_download($name, $row);
//    }
	
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
	
    

}
