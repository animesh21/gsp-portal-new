<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Previous extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Answer_model');
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');
        }
    }

    public function wastetrans() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,0);
        echo $staus;
    }

    public function teamupdate() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,0);
        echo $staus;
    }
    /*
     * Air Ajax
     */

    public function airprevious() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 2);
        echo $staus;
    }

    /*
     * General Ajax
     */

    public function generalajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 1);
        echo $staus;
    }

    /*
     * Energy Ajax
     */

    public function energyajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 3);
        echo $staus;
    }

    /* Food Ajax
     * 
     */

    public function foodajax() {
        $staus = 'success';
        $post = $this->input->post();
	//print_r($post);	
        $this->Answer_model->submitAnswers($post, 4);
        echo $staus;
    }

    /*
     * Land Ajax
     */

    public function landajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 5);
        echo $staus;
    }

    /*
     * Water Ajax
     */

    public function waterajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 6);
        echo $staus;
    }
    
    /*
     * Waste Ajax
     */
    public function wasteajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 7);
        echo $staus;
    }
    
    /*
     * Feed Ajax
     */
    public function feedbackajax() {
        $staus = 'success';
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post, 8);
        echo $staus;
    }

}
