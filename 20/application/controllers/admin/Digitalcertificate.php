<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Digitalcertificate extends CI_Controller {
    /****  Constructor****/ 
    public function __construct() {
        parent::__construct();
		$this->load->helper(array('form', 'security', 'common_helper'));
    }
    public function index() {
	
		// $this->db->like(array("a.progress"=>"100"));
		// $this->db->like(array("a.complete_status"=>"1"));
		$this->db->like(array("a.wt"=>"1"));

	  $dataUserIds=$this->db->select("a.userid")
	       ->from("gsp_school as a")
		   //->join("tblcertificate as b","a.userid=b.userid","LEFT")
		  // ->where("b.userid IS NULL")
		   ->get()
		   ->result();
		   echo "Count Unique Id:".count($dataUserIds);
		   $certificate=array();
		   foreach($dataUserIds as $userId){
	        //    $certificate[]=$this->digital_certificate_for_principal_coordinator($userId->userid);
			  $certificate[]=$this->studentDigitalcertificate($userId->userid);
		    //   $certificate[]=$this->count_certificates_staffamin($userId->userid);

		   } 
		   for($t=0; $t<sizeof($certificate);++$t){
		     for($r=0;$r<sizeof($certificate[$t]);++$r){
			   $this->db->insert("tblcertificate",array("userid"=>$certificate[$t][$r]['userid'],"certificate_username"=>$certificate[$t][$r]['name'],"certificate_schoolname"=>$certificate[$t][$r]['schoolname'],"certificate_srno"=>"","leader"=>"0"));
		       //echo $certificate[$t][$r]['name'];
			 }
			//echo $certificate[$t]->userid;
			//echo $certificate[$t]->school_name;
		   }
		   
		   //echo "<pre>";
		  //print_r(array_filter($certificate));               
	}
    public function studentDigitalcertificate($argID) {
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
        'name' => getFiled("Q3".$q. $i . "S1", $argID) . " " . getFiled("Q3" .$q.$i . "S2",$argID)." (".getFiled("Q3" .$q.$i . "S3", $argID).")",
		"userid"=>$argID
		,'schoolname'=>$username->name);
	  }
     }
	}
	 return $arrStudents; 		  
   }
   
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
     $arrForcoordinator_principal[]=array('userid'=>$argID,'name'=>$q,'schoolname'=>$username->name);
   }
   return $arrForcoordinator_principal;
  }
	
	
	
	
  public function count_certificates_staffamin($argID) {
   $airTeachers=array();
   $arrStaff = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   foreach ($question_alphabet as $q) {
       //Teachers
    //    for ($i = 1; $i <= 3; $i++) {
    //    if((getFiled("Q1" . $q . $i . "S1", $argID) !="0") && (getFiled("Q1" . $q . $i . "S1", $argID) !='') || (getFiled("Q1" . $q . $i . "S3", $argID) !="0") && (getFiled("Q1" . $q . $i . "S3", $argID) !=''))
    //    {
    //    $airTeachers[] = array('userid'=>$argID,"teacher"=>getFiled("Q1" . $q . $i . "S1", $argID) . " " . getFiled("Q1" . $q . $i . "S3", $argID),"school"=>$username->name);
	   
    //    }
    //    }
       //Staff
       for ($i = 1; $i <= 5; $i++) {
       if((getFiled("Q2".$q. $i . "S1", $argID)!="" && getFiled("Q2" .$q.$i . "S3", $argID) !="")){
       $arrStaff[] = array('userid'=>$argID,"name"=>getFiled("Q2" . $q . $i . "S1", $argID) . " " . getFiled("Q2" . $q . $i . "S3", $argID),"schoolname"=>$username->name);
	
       }
       }
   }
    	return $arrStaff;
		}
} 
