<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land extends CI_Controller {
	
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
        if (!$_SERVER['HTTP_REFERER']) redirect('food');
    	$data['title'] = 'Land';
    	if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
        else
        {
        
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 5 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            $data['greenCover']=uploadHelper($this->session->userdata('USER_ID'), 'Green_Cover');
	    $data['Vertical_Gardens']=uploadHelper($this->session->userdata('USER_ID'), 'Vertical_Gardens');	
            if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
	            if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
	            {  //  print("Primaryland");
					$this->load->view('Primaryland',$data);
	            }
				else
					$this->load->view('land',$data);
			else
				$this->load->view('land',$data);
	}                
    }
    public function set()
    {
        
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,5);
	updateProgress($this->session->userdata('USER_ID'), 50);    
        //print_r($post);
        redirect(base_url("water"));
    }
	
}
