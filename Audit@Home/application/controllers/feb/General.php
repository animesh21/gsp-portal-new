<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class General extends CI_Controller {
  
  public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
       
        if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
        }      
    }

    public function index() {   	 
           
      	   $data['title'] = 'General';
            if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
           }
            else
           {
            $userId = $this->session->userdata('USER_ID');
            $type = 1; 
            $records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
            $this->load->view('auditfeb/general',$records);
      	    }
    }
    
     public function set()
    {	
        $userId = $this->session->userdata('USER_ID');
        $type = 1; 
    	$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('grade', 'Grade', 'required|trim');
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('district', 'District', 'required|trim');
		$this->form_validation->set_rules('state', 'State', 'required|trim');
		$this->form_validation->set_rules('school_name', 'School Name', 'required|trim');
		$this->form_validation->set_rules('school_address', 'School Address', 'required|trim');
		$this->form_validation->set_rules('pincode', 'Pincode', 'required|trim');
		$this->form_validation->set_rules('participate', 'Participat', 'required|trim');

		if($this->form_validation->run()==false)
		{
			$this->load->view('auditfeb/general');
			
		}
		else
		{		
		 $argPost = $this->input->post();

		 $this->Answer_model->submitAnswers($argPost,$userId,$type);
		 redirect(base_url("feb/WasteWoes"));		 
	}
      	
     }
  
}
?>