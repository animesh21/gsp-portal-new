<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Air extends CI_Controller {
  
  public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model(array('Answer_model', 'file'));
        if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
        }
    }

    public function index() {
        if (!$_SERVER['HTTP_REFERER']) redirect('general');
      	$data['title'] = 'Air';
        //Validation
        if ($this->session->userdata('USER_ID') == '') {        
            redirect('login');
        }
        else
        {
        
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 2;        
        $data['data'] = $this->Answer_model->getAnswers($argPost);
        $data['other'] = $this->Answer_model->getAllAnswers($argPost);
        $data['files']=$this->file->getFilesData($this->session->userdata('USER_ID'));
        $data['filesfules']=$this->file->getFilesDatafules($this->session->userdata('USER_ID'));
        $data['airQualityMonitering']=$this->file->AirQuality($this->session->userdata('USER_ID'));
        $data['pucCertificate']=$this->file->pucCertificate($this->session->userdata('USER_ID'));
        if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
            {	 
            	if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
		 {  
			$this->load->view('PrimaryAir',$data);
		 }
		else
		{
			$this->load->view('air',$data);    	
		}
	     }	
            else
            {
	    	$this->load->view('air',$data);
    	//$this->load->view('waste',$data); this is where problem was, I told you that 2 views might be loaded.
	    }
        
        }
    }
    public function set()
    {
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 2;        
        $air = $this->Answer_model->getAnswers($argPost);        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('email1', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('email2', 'Email', 'required|valid_email');        
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('name1','Username', 'required');
        $this->form_validation->set_rules('name2','Username', 'required');        
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 1 ;
        $general = $this->Answer_model->getAnswers($argPost);
        $argPost['type'] = 7 ;
        $waste = $this->Answer_model->getAnswers($argPost);        
        $post = $this->input->post();        
        // Points Calculation
        $score = 0;
        if($post['Q6A2S1T1'] == $post['Q6A2S1T2'])
        {
            $score += 0;
        }
        if($post['Q6A2S1T2'] == 0)
        {
            $score += 1;
        }
        if($post['Q6A2S1T1'] > $post['Q6A2S1T2'])
        {
            $points = $post['Q6A2S1T2']/$post['Q6A2S1T1'];
            $score += $points;
        }       

        if($post['Q6A2S1T1'] == $post['Q6A2S1T3'])
        {
            $score += 0;
        }
        if($post['Q6A2S1T3'] == 0)
        {
            $score += 1;
        }
        if($post['Q6A2S1T1'] > $post['Q6A2S1T3'])
        {
            $points = $post['Q6A2S1T3']/$post['Q6A2S1T1'];
            $score += $points;
        }

        if($post['Q6A2S1T1'] == $post['Q6A2S1T4'])
        {
            $score += 0;
        }
        if($post['Q6A2S1T4'] == 0)
        {
            $score += 1;
        }
        if($post['Q6A2S1T1'] > $post['Q6A2S1T4'])
        {
            $points = $post['Q6A2S1T4']/$post['Q6A2S1T1'];
            $score += $points;
        }

        if($post['Q6A2S1T1'] == $post['Q6A2S1T5'])
        {
            $score += 0;
        }
        if($post['Q6A2S1T5'] == 0)
        {
            $score += 1;
        }
        if($post['Q6A2S1T1'] > $post['Q6A2S1T5'])
        {
            $points = $post['Q6A2S1T5']/$post['Q6A2S1T1'];
            $score += $points;
        }
        
        /*if($post['Q7A12S4'] != $general['Q4G4S3'])
        {
            echo "<script>
            alert('Total School members does not match');
            window.location.href='/GSP/air';
            </script>";       
        }*/
        /*else if($post['Q4A1'] > $waste['Q5Wa1S5'] )
        {
            echo "<script>
            alert('No. of dustbin available is less then No. of classes');
            window.location.href='/GSP/air';
            </script>";
        }*/
        /*else
        {
    */   
          $this->Answer_model->submitAnswers($post, 2);
	      updateProgress($this->session->userdata('USER_ID'), 60);
          redirect(base_url("energy"));

        /*}
        */
        
        //print_r($post);
         
        
    }

}


