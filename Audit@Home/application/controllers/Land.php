	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Land extends CI_Controller {

	    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'security'));
		$this->load->library('form_validation');		
		$this->load->model('Answer_model');
	    }

	    public function index() {
		
		$this->load->view('land');
	    }


	}

	?>
