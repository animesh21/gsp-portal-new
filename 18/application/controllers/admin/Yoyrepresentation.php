<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Yoyrepresentation extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
		$this->load->helper('common_helper');
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
} 
