<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

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
    
        $data['title'] = 'feedback';
            if($this->session->userdata('USER_ID') == ''){
                redirect('login');
        }
        else
        { 
            $userId = $this->session->userdata('USER_ID');
            $type = 1;
            $records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
            $this->load->view('auditfeb/feedback',$records);
        }
    }

    // public function end_aduit()
    // {
    //    $this->load->view('end-message');
    // }


    public function set()
    {
        $userId = $this->session->userdata('USER_ID');
        $type = 1;
        $this->form_validation->set_rules('fiscore','fiscore','required|trim');
         
         
        // $post = $this->input->post();
        //  $get_current_user=$this->session->userdata('USER_ID');
        //  $get_current_year=date('Y');
        //  $data=$this->db->select("id")->from('users')->where("userid=".$get_current_user)->get()->result();
        //  $get_school_id=$data[0]->id;
        //  $result=$this->db->select("*")->from('gsp_aduit_home')->where("userid=".$get_current_user)->where("school_id=".$get_current_user)->where("year=".$get_current_year)->get()->result();
        //  if($result){
        //  redirect(base_url("Feedback/end_aduit")); 
        //  }
        //  else
        //  {
        //   $shool_record=array("school_id"=>$get_current_user,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
        //   $this->db->insert('gsp_aduit_home',$shool_record);
        //   $this->db->where(array("userid"=>$get_current_user));	   
        //   $this->db->update("gsp_school",array("complete_status"=>'1'));	   
        //   redirect(base_url("Feedback/end_aduit")); 
        //  }

                // if($this->form_validation->run() == false)
                // {
                //     $this->load->view('auditfeb/feedback');
                // }
                // else
                // {
                    $argPost = $this->input->post();
                    // $shool_record=array("school_id"=>$get_current_user,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
                    // $this->db->insert('gsp_aduit_home',$shool_record);
                    // $this->db->where(array("userid"=>$get_current_user));
                    // $this->db->update("users",array("is_submitted"=>'1'));     
                    // $argPost = $this->input->post();
                    // $shool_record=array("school_id"=>$get_current_user,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
                    // $this->db->insert('gsp_aduit_home',$shool_record);
                    // $this->db->where(array("id"=>$get_current_user));
                    // $this->db->update("users",array("is_submitted"=>'1'));     

                    
                    $this->Answer_model->submitAnswers($argPost,$userId,$type);
                    // $this->Answer_model->submitAnswers($argPost,$userId,$type);
                    // updateProgress($this->session->userdata('USER_ID'), 60);
                    redirect(base_url('End_audit'));
                // }


    }


}

?>
