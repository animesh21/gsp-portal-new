<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model('School_model');
        $this->load->model('User_model');
        $this->load->model('Answer_model');
        
        
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

    	}
    }

    public function index() {
        if (!$_SERVER['HTTP_REFERER']) redirect('waste');
    	$data['title'] = 'Feedback';
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 8 ;
        $data['data'] = $this->Answer_model->getAnswers($argPost);
        $this->load->view('feedback',$data);
        
    }

     public function end_aduit()
    {
       $this->load->view('end-message');
    }
   
    public function set()
    {
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,8);
        redirect(base_url("Feedback/end_aduit"));
    }
	
}
