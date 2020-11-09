	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Land extends CI_Controller {

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
					
						$data['title'] = 'land';
						if($this->session->userdata('USER_ID') == ''){
							redirect('login');
				}
				else
				{ 
						$userId = $this->session->userdata('USER_ID');
						$type = 1;
						$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
						$this->load->view('land',$records);
				}
			}	

			public function set()
			{
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$this->form_validation->set_rules('Q1L1','Q1L1','required|trim');
				$this->form_validation->set_rules('Q2L1','Q2L1','required|trim');
				$this->form_validation->set_rules('Q3L1','Q3L1','required|trim');
				$this->form_validation->set_rules('lscore','lscore','required|trim');

				

			if($this->form_validation->run() == false)
			{
				$this->load->view('land');
			}
			else
			{
				$argPost = $this->input->post();
				
				$this->Answer_model->submitAnswers($argPost,$userId,$type);
				redirect(base_url('water'));
			}


			}


	}

	?>
