	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class General extends CI_Controller {

	    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'security'));
		$this->load->library('form_validation');		
		$this->load->model('User_model');
	    }

	    public function index() {
	    	if(!empty($this->input->post())){
		echo "<pre>";
		print_r($this->input->post());}
		$this->load->view('general');
	    }


	}

	?>
