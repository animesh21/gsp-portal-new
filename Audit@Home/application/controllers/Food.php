	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Food extends CI_Controller {

	    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'security'));
		$this->load->library('form_validation');		
		$this->load->model('Answer_model');
		if($this->session->userdata('USER_ID') == ''){
			redirect('login');
		    }
	    }

	    public function index() {
		

			$data['title'] = 'food';
				if($this->session->userdata('USER_ID') == ''){
					redirect('login');
		}
		else
		{ 
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
	        	$this->load->view('food',$records);
		}
	}


		public function set()
		{
			$userId = $this->session->userdata('USER_ID');
			$type = 1;
			 $this->form_validation->set_rules('Q1F1','Q1F1','required|trim');
			 $this->form_validation->set_rules('Q2F1','Q2F1','required|trim');
			 $this->form_validation->set_rules('Q3F1','Q3F1','required|trim');
			 $this->form_validation->set_rules('Q4F1','Q4F1','required|trim');
			 $this->form_validation->set_rules('Q5F1','Q5F1','required|trim');
			 $this->form_validation->set_rules('fscore','fscore','required|trim');

			

		if($this->form_validation->run() == false)
		{
			$this->load->view('food');
		}
		else
		{
			$argPost = $this->input->post();
			
			$this->Answer_model->submitAnswers($argPost,$userId,$type);
			redirect(base_url('land'));
		}
	

    	}
	}

	?>
