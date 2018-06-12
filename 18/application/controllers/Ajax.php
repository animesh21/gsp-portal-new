<?php

header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    /*
     * Get Cities
     */
    public function citites()
    {
        $response=$this->User_model->getCities($this->input->post('id'));
        echo '<option value="">Select District</option>';
        foreach($response as $r)
        {
            echo '<option value="'.$r->id.'">'.$r->name.'</option>';
        }
    }
    
    //Forget Password Function
    public function forgetpass() {
        $varResponse = array();
        $varPost = json_decode(file_get_contents('php://input'), true);
        if ($this->Rest_model->exists_email($varPost['email']) > 0) {
            $string=random_string('alnum', 8);
            if($this->Rest_model->changePassword($varPost['email'], $string)==true)
            {
                $varResponse = array('success' => true);
                //send mail
                sendMail($varPost['email'], $string);
            }else
            {
                $varResponse = array('error' => false);
            }
        } else {
            $varResponse = array('warning' => false);
        }
        $this->output->set_output(json_encode($varResponse));
    }

}
