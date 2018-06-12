<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Downloadlogout extends CI_Controller{
    
    /*
     * Constructor 
     */
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * Index function
     */
    public function index(){
        $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
        $this->session->set_flashdata('success', 'Successfully logged out!');
	    redirect('http://www.greenschoolsprogramme.org/schools/gsp-award-2016-2017/is-your-school-green/');
    }
}
