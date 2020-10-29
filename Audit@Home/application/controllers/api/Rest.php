<?php

header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('School_model');
        $this->load->model('Answer_model');
        $this->load->model('User_model');
        
    }

    //Signup Function
    public function signup() {
        $record = array();
        $varResponse = array();
        $varPost = json_decode(file_get_contents('php://input'), true);
        $record = array(
            'firstname' => $varPost['firstname'],
            'lastname' => $varPost['lastname'],
            'email' => $varPost['email'],
            'mobile' => $varPost['mobile'],
            'country' => $varPost['country'],
            'currency' => $varPost['currency'],
            'password' => $varPost['password'],
            'date_added' => date('Y-m-d H:i:s'),
            'date_modified' => date('Y-m-d H:i:s')
        );
        if ($this->Rest_model->exists_email($varPost['email']) > 0) {
            $varResponse = array('warning' => false);
        } else {
            if ($this->Rest_model->add_account($record) == true) {
                $varResponse = array('success' => true);
            } else {
                $varResponse = array('error' => false);
            }
        }
        $this->output->set_output(json_encode($varResponse));
    }

    //Login Function
    public function login() {
        $record = array();
        $varResponse = array();
        $varPost = json_decode(file_get_contents('php://input'), true);
        $record = array(
            'email' => $varPost['email'],
            'password' => $varPost['password']
        );
        $details = array();
        if ($details === NULL)
        {
            $users = $this->User_model->Login($record);
            if ($users)
            {
                $detail['school'] = $this->School_model->getSchool($users);
                $detail['data'] = $this->Answer_model->Answers($users);
                //print_r($details);
                $this->set_response($detail, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
                 // OK (200) being the HTTP response code
            }
        }
            $this->output->set_output(json_encode($details));
    }

}
