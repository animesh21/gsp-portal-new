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
class Certificate extends REST_Controller {

    function __construct() {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->
methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('School_model');
        $this->load->model('Answer_model');
        $this->load->model('User_model');
		$this->load->helper(array('download', 'common_helper', 'form'));
    }

	/*
	*Get Digital Certificate Users
	*/
    public function digitalcerticatestudent_get(){
	    $argID = $this->get("userid");
		$students = $this->count_certificates_stuents($argID);
		if (!empty($students)) {
            $this->set_response($students, REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No User Id Found'
                    ], REST_Controller::HTTP_NOT_FOUND);
        }
	}
	
	 public function digitalcerticatestaff_get(){
	    $argID = $this->get("userid");
        $staffadmin = $this->count_certificates_staffamin($argID);
		if (!empty($staffadmin)) {
			$this->set_response($staffadmin, REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No User Id Found'
                    ], REST_Controller::HTTP_NOT_FOUND);
        }
	}
	/**Digital Certificate Data Has Been Avaliavle Or Not**/
	public function checkDigitalCertificateAvaivale_get(){
	  $userid = $this->get("userid");
	  $certificate_username = $this->get("certificate_username");
	  $this->db->where("userid",$userid);
	  $this->db->like("certificate_username",$certificate_username);	   
	  $fetchCertificateData=$this->db->select("*")->from("tblcertificate")->get()->result(); 
	  if($fetchCertificateData){
		$this->set_response('true', REST_Controller::HTTP_CREATED);
	  }else{
		 $this->response([
                'status' => FALSE,
                'message' => 'No User Id Found'
                    ], REST_Controller::HTTP_NOT_FOUND);
	  }
	}
	
	/**This Function Used Get Digital Certificate**/
	public function generateDigitalCertificate_post(){
	   $certificateData=$this->post();
	   $this->db->where("userid",$certificateData[0]['userid']);
	   $this->db->like("certificate_username",$certificateData[0]['certificate_username']);	   
	   $fetchCertificateData=$this->db->select("*")->from("tblcertificate")->get()->result();
	   if($fetchCertificateData){
	    $this->db->where("userid",$certificateData[0]['userid']);
	    $this->db->like("certificate_username",$certificateData[0]['certificate_username']);	        $this->db->delete("tblcertificate");
	   }else{
	     $this->db->insert("tblcertificate",array("userid"=>$certificateData[0]['userid'],"certificate_username"=>$certificateData[0]['certificate_username'],"certificate_schoolname"=>$certificateData[0]['certificate_schoolname']));
	   }
	}
	
	
	/**This Function Used Get Digital Certificate**/
	public function digitalcerticateprincipal_get(){
	    $argID = $this->get("userid");
		$principal=$this->digital_certificate_for_principal_coordinator($argID);
		if (!empty($principal)) {
			$this->set_response($principal, REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No User Id Found'
                    ], REST_Controller::HTTP_NOT_FOUND);
        }
	}
   /**This Function Used Student Certificate**/
   public function count_certificates_stuents($argID) {
    $arrStudents = array();
    $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
    $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
    foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 10; $i++) {
      if(getFiled("Q3".$q. $i . "S1", $argID)!="" && getFiled("Q3" .$q.$i . "S2", $argID) !="")
       {
       $arrStudents[] = array(
       'name' => getFiled("Q3".$q. $i . "S1", $argID) . " " . getFiled("Q3" .$q.$i . "S2", $argID)." (".getFiled("Q3" .$q.$i . "S3", $argID).")",
	   'school_name'=>$username->name,
	   );
	   }
     }
   }
   return $arrStudents;
  }
  
  /**This Function Used Staff Certificate**/
  public function count_certificates_staffamin($argID) {
   $airTeachers=array();
   $arrStaff = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
      foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 3; $i++) {
         if((getFiled("Q1" . $q . $i . "S1", $argID) !="0") && (getFiled("Q1" . $q . $i . "S1", $argID) !='') || (getFiled("Q1" . $q . $i . "S3", $argID) !="0") && (getFiled("Q1" . $q . $i . "S3", $argID) !=''))
       {
        $airTeachers[] = array("teacher"=>getFiled("Q1" . $q . $i . "S1", $argID) . " " . getFiled("Q1" . $q . $i . "S3", $argID),"school"=>$username->name);
        }
       }
       for ($i = 1; $i <= 5; $i++) {
       if((getFiled("Q2" . $q . $i . "S1", $argID) !="0") && (getFiled("Q2" . $q . $i . "S1", $argID) !='') || (getFiled("Q2" . $q . $i . "S3", $argID) !="0") && (getFiled("Q2" . $q . $i . "S3", $argID) !='')){
       $arrStaff[] = array("teacher"=>getFiled("Q2" . $q . $i . "S1", $argID) . " " . getFiled("Q2" . $q . $i . "S3", $argID),"school"=>$username->name);
	
       }
     }
   }
   return array_merge($airTeachers, $arrStaff);
  }
  
  /**This Function Used Principal & Coordinator Certificate**/
  public function digital_certificate_for_principal_coordinator($argID)
  {
     $arrForcoordinator_principal=array();
     $principal_coordinator=$this->db->select('principle_name,coname')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
     $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
     foreach ($principal_coordinator as $q) {
       $arrForcoordinator_principal[]=array('name'=>$q,'schoolname'=>$username->name);
     }
     return $arrForcoordinator_principal;
   }	
} 