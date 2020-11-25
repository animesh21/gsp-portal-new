<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   /*
    * Constructor 
    */
    
	/****************************************************/
	/****************************************************/
	public function index()
	{

        $this->load->view('admin/welcome');
        echo "test";
    }
}