	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Energy extends CI_Controller {

	    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'security','common_helper'));
		$this->load->library('form_validation');		
		$this->load->model('Answer_model');
		if($this->session->userdata('USER_ID') == ''){
			redirect('login');
		    }
	    }

	    public function index() {

		$data['title'] = 'energy';
				if($this->session->userdata('USER_ID') == ''){
					redirect('login');
		}
		else
		{ 
				$userId = $this->session->userdata('USER_ID');
				$type = 1;
				$records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
		        $this->load->view('energy',$records);
	    }
	}

	public function set()
		{
			$userId = $this->session->userdata('USER_ID');
			$type = 1;
			 $this->form_validation->set_rules('Q1E1','Q1E1','required|trim');
			 $this->form_validation->set_rules('Q2E1','Q2E1','required|trim');
			 $this->form_validation->set_rules('Q3E1','Q3E1','required|trim');
			 $this->form_validation->set_rules('Q4E1','Q4E1','required|trim');
			 $this->form_validation->set_rules('Q5E1','Q5E1','required|trim');
			 $this->form_validation->set_rules('Q6E1','Q6E1','required|trim');
			

		if($this->form_validation->run() == false)
		{
			$this->load->view('energy');
		}
		else
		{
			$argPost = $this->input->post();
			
			$this->Answer_model->submitAnswers($argPost,$userId,$type);
			redirect(base_url('food'));
		}


	 }
}
	


	?>
