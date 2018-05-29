<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

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
        if (!$_SERVER['HTTP_REFERER']) redirect('energy');
        $data['title'] = 'Food';
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');

        }
        else
        {

            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 4 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            $data['midDayMeal']=$this->file->getMidDayMeal($this->session->userdata('USER_ID'));
            $data['canteen']=$this->file->getCanteen($this->session->userdata('USER_ID'));
            $data['files']=$this->file->getFoodFilesData($this->session->userdata('USER_ID'));
            $data['uppc']=$this->file->getFoodUPPCData($this->session->userdata('USER_ID'));
            $data['lunch']=$this->file->getLunchBoxData($this->session->userdata('USER_ID'));
            if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
                if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
                {  //  print("Primaryland");
                    $this->load->view('PrimaryFood',$data);
                }
                else
                    $this->load->view('food',$data);
            else
                $this->load->view('food',$data);
        }
    }
    public function set()
    {

        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 4 ;
        $data['data'] = $this->Answer_model->getAnswers($argPost);

        $this->load->view('food',$data);


        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 1 ;
        $data = $this->Answer_model->getAnswers($argPost);

        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,4);
		updateProgress($this->session->userdata('USER_ID'), 40);
        //print_r($post);
        redirect(base_url("land"));
    }

}
