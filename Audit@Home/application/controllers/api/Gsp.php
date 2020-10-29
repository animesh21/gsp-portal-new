<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Gsp extends REST_Controller {

    function __construct() {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('School_model');
        $this->load->model('Answer_model');
        $this->load->model('User_model');
    }

    public function users_get() {
        $email = $this->get('email');
        $password = $this->get('password');
        $email = str_replace("-", "@", $email);
        if (isset($email) && isset($password)) {
            $details['email'] = $email;
            $details['password'] = $password;
            $users = $this->User_model->Login($details);

            if ($users) {
                $detail['school'] = $this->School_model->getSchool($users);
                $detail['data'] = $this->Answer_model->Answers($users);
                $detail['states'] = $this->User_model->getStates($users);
				
                $this->set_response($detail, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
               
	/*	$this->response([
                    'status' => FALSE,
                    'message' => 'Survey has been closed',
                    'id' => $details
                        ], REST_Controller::HTTP_NOT_FOUND);	*/
				
			// OK (200) being the HTTP response code
            } else {

                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found',
                    'id' => $details
                        ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
    }

    public function states_get() {
        $id = $this->get("stateid");
        if (isset($id)) {
            $city = $this->User_model->getCitiesAll($id);

            $this->set_response($city, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
        } else {

            $this->response([
                'status' => FALSE,
                'message' => 'Please Specify State ID',
                'id' => $id
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function users_post() {
        $details = $this->post('survey');
        if (isset($details)) {
            foreach ($details as $data) {
                //print_r($data);*
                if ($data["questionid"] != "username" && !preg_match("/.*next.*$/", $data['questionid']) && !preg_match("/.*previous.*$/", $data['questionid']) && !preg_match("/.*submit.*$/", $data['questionid']))
                    if (preg_match("/^Q.*$/", $data['questionid'])) {
                        $this->Answer_model->SubmitAPIAnswers($data);
                    } else {
                        print_r($this->School_model->SubmitAPIAnswers($data));
                    }
            }
        }
    }

    /*
     * Get User Image
     * 
     */

    public function image_get() {
        $id = $this->get("userid");
        $temp = $this->db->get_where('files', array('userid' => $id))->result();
        if (!empty($temp)) {
            $this->set_response($temp, REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No User Id Found'
                    ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

}
