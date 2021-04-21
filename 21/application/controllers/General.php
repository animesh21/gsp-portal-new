<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class General extends CI_Controller {
  
  public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
        $this->load->model('School_model');        
        $this->load->model('User_model');
       
        if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
        }      
    }

    public function index() {
           if (!$_SERVER['HTTP_REFERER']) redirect('school');
      	   $data['title'] = 'General';
            if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
           }
            else
           {
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 1 ;
            $current = $this->Answer_model->getAnswers($argPost);
            $data['states'] = $this->User_model->getStates();
            $school = $this->School_model->getSchool($this->session->userdata('USER_ID'));
      	    if(empty($current['Q3G2']))
              $current['Q3G2'] = $school['state'];            
              $data['data'] = $current;
              $data['other'] = $this->Answer_model->getAllAnswers($argPost);
              $data['school'] = $school;            
            $this->load->view('general',$data);
            }
    }
    
     public function set()
    {
    	$post = $this->input->post();
     // print_r($post);

      if(!empty(extract($this->input->post()))){
          $id = $this->session->userdata('USER_ID');          
           $Q1S1_new=  array(
                'Q2G1'=>$Q2G1,
                'Q3G1'=>$Q3G1,
                'Q9G1'=>$Q9G1
            );          
          
            $this->db->where('userid', $id);
            $this->db->update('gsp_school', $Q1S1_new);
        }
		//print_r($post);exit;
        $this->Answer_model->submitAnswers($post,1);
	updateProgress($this->session->userdata('USER_ID'), 35);
      	redirect(base_url("air"));
     }
  
}
