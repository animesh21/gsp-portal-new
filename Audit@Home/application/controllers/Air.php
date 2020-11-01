	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Air extends CI_Controller {

	    public function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'security','common_helper'));
			$this->load->library('form_validation');	
			$this->load->model('Answer_model');	
			//$this->load->model('User_model');
			if($this->session->userdata('USER_ID') == ''){
				redirect('login');
			}
	    }

	    public function index() {
		
			$data['title'] = 'air';
				if($this->session->userdata('USER_ID') == ''){
					redirect('login');
			}
			else
			{ 
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
				$this->load->view('air',$records);
			}
		}
		public function set()
		{
			$userId = $this->session->userdata('USER_ID');
			$type = 1;
			$this->form_validation->set_rules('Q1A1','Q1A1','required|trim');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('air');
		}
		else
		{
			$argPost = $this->input->post();
			
			$this->Answer_model->submitAnswers($argPost,$userId,$type);
			redirect(base_url('energy'));
		}


	    }


	}

	?>
