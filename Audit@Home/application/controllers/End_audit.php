<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class End_audit extends CI_Controller {

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
    

        $data['title'] = 'end-audit';
            if($this->session->userdata('USER_ID') == ''){
                redirect('login');
            }
            else
            { 
                    $userId = $this->session->userdata('USER_ID');
                    $type = 1;
                    // $records['records'] = $this->Answer_model->getAllAnswers($userId,$type);
                    $this->load->view('end-message');
                    $get_current_user=$this->session->userdata('USER_ID');
                    $this->db->where(array("userid"=>$get_current_user));	   
                    $this->db->update("gsp_school",array("complete_status"=>'1'));	   

                    // redirect(base_url('login'));
                    // $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
                    // $this->session->set_flashdata('success', 'Successfully logged out!');

            }
}

    public function sub(){
                   
                    $get_current_user=$this->session->userdata('USER_ID');
                    $get_current_year=date('Y');
                    $type = 1;
                       
                    
                    $argPost = $this->input->post();
                    $shool_record=array("school_id"=>$get_current_user,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
                    $this->db->insert('gsp_aduit_home',$shool_record);
                    $this->db->where(array("id"=>$get_current_user));
                    $this->db->update("users",array("is_submitted"=>'1'));     

                    
                    $this->Answer_model->submitAnswers($argPost,$userId,$type);
                    

                    $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
                    $this->session->set_flashdata('success', 'Successfully logged out!');
                    redirect(base_url('login'));
                    


    }

    // public function set()
    // {
    //     $userId = $this->session->userdata('USER_ID');
    //     $type = 1;
    //     //  $this->form_validation->set_rules('Q1F1','Q1F1','required|trim');
    //     //  $this->form_validation->set_rules('Q2F1','Q2F1','required|trim');
    //     //  $this->form_validation->set_rules('Q3F1','Q3F1','required|trim');
    //     //  $this->form_validation->set_rules('Q4F1','Q4F1','required|trim');
    //     //  $this->form_validation->set_rules('Q5F1','Q5F1','required|trim');
    //     //  $this->form_validation->set_rules('fscore','fscore','required|trim');

        

    // if($this->form_validation->run() == false)
    // {
    //     $this->load->view('End-audit');
    // }
    // else
    // {
    //     $argPost = $this->input->post();
        
    //     $this->Answer_model->submitAnswers($argPost,$userId,$type);
    //     redirect(base_url('login'));
    // }


    // }
}

?>
