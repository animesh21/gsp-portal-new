	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Waste extends CI_Controller {

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
		
						$data['title'] = 'waste';
						if($this->session->userdata('USER_ID') == ''){
							redirect('login');
				}
				else
				{ 
						$userId = $this->session->userdata('USER_ID');
						$type = 1;
						$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
						$this->load->view('waste',$records);
				}
			}	


			public function set()
			{
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$this->form_validation->set_rules('Q1WS1','Q1WS1','required|trim');
				$this->form_validation->set_rules('Q2WS1','Q2WS1','required|trim');
				$this->form_validation->set_rules('Q3WS1','Q3WS1','required|trim');
				$this->form_validation->set_rules('Q4WS1','Q4WS1','required|trim');
				$this->form_validation->set_rules('Q5WS1','Q5WS1','required|trim');
				$this->form_validation->set_rules('Q6WS1','Q6WS1','required|trim');
				$this->form_validation->set_rules('Q7WS1','Q7WS1','required|trim');
				$this->form_validation->set_rules('Q8WS1','Q8WS1','required|trim');
				$this->form_validation->set_rules('wascore','wascore','required|trim');

				

			if($this->form_validation->run() == false)
			{
				$this->load->view('waste');
			}
			else
			{
				$argPost = $this->input->post();
				
				$this->Answer_model->submitAnswers($argPost,$userId,$type);
				redirect(base_url('feedback'));
			}


			}


	}

	?>
