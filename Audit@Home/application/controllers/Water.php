	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Water extends CI_Controller {

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
		
						$data['title'] = 'water';
						if($this->session->userdata('USER_ID') == ''){
							redirect('login');
				}
				else
				{ 
						$userId = $this->session->userdata('USER_ID');
						$type = 1;
						$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
						$this->load->view('water',$records);
				}
			}	


			public function set()
			{
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$this->form_validation->set_rules('Q1W1','Q1W1','required|trim');
				$this->form_validation->set_rules('Q2W1','Q2W1','required|trim');
				$this->form_validation->set_rules('Q3W1','Q3W1','required|trim');
				$this->form_validation->set_rules('Q4W1','Q4W1','required|trim');
				$this->form_validation->set_rules('Q5W1','Q5W1','required|trim');
				$this->form_validation->set_rules('Q6W1','Q6W1','required|trim');
				$this->form_validation->set_rules('Q7W1','Q7W1','required|trim');
				$this->form_validation->set_rules('Q8W1','Q8W1','required|trim');
				$this->form_validation->set_rules('Q9W1','Q9W1','required|trim');
				$this->form_validation->set_rules('wscore','wscore','required|trim');

				
				

			if($this->form_validation->run() == false)
			{
				$this->load->view('water');
			}
			else
			{
				$argPost = $this->input->post();
				
				$this->Answer_model->submitAnswers($argPost,$userId,$type);
				redirect(base_url('waste'));
			}


			}


	}

	?>
