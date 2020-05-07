<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Yoyrepresentation extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
		$this->load->helper('common_helper');
	        $this->load->model('admin/Audit_started_model');
                $this->load->helper(array('download','form'));
    }
    /**This Code Used For Year To Year Representation**/
    public function index(){
	   $data['main'] = 'admin/reports/year-to-year';
       $data['title'] = 'Year To Year';
	   $this->load->view('admin/includes/template', $data);			
    }
	/**This Code Used For Year To Year Representation**/
    public function yoyPresentation(){
	   $data['main'] = 'admin/reports/year-to-year-presentation';
       $data['title'] = 'Year To Year Presentation';
	   $this->load->view('admin/includes/template', $data);			
    }
	
	 public function excel_yoyrepresentation() {
        $this->load->dbutil();
        $userid=$_GET['userid'];       
        $row = $this->Audit_started_model->school_excel_yoyrepresentation($userid);
        $name = 'yoyrepresentation.csv';
        force_download($name, $row);
    }
} 
