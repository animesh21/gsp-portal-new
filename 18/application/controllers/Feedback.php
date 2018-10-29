<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model('School_model');
        $this->load->model('User_model');
        $this->load->model('Answer_model');
        
        
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

    	}
    }

     public function index() {
        if (!$_SERVER['HTTP_REFERER']) redirect('waste');
    	$data['title'] = 'Feedback';
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 8 ;
		  $airTeachers=array();
		  $argID=$this->session->userdata('USER_ID');
   $arrStaff = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$this->session->userdata('USER_ID'))
				->get()->row();
   foreach ($question_alphabet as $q) {
       //Teachers
       for ($i = 1; $i <= 3; $i++) {
       if((getFiled("Q1" . $q . $i . "S1", $argID) !="0") && (getFiled("Q1" . $q . $i . "S1", $argID) !='') || (getFiled("Q1" . $q . $i . "S3", $argID) !="0") && (getFiled("Q1" . $q . $i . "S3", $argID) !=''))
       {
       $airTeachers[] = array("teacher"=>getFiled("Q1" . $q . $i . "S1", $argID) . " " . getFiled("Q1" . $q . $i . "S3", $argID),"school"=>$username->name);
	   
       }
       }
       //Staff
       for ($i = 1; $i <= 5; $i++) {
       if((getFiled("Q2" . $q . $i . "S1", $argID) !="0") && (getFiled("Q2" . $q . $i . "S1", $argID) !='') || (getFiled("Q2" . $q . $i . "S3", $argID) !="0") && (getFiled("Q2" . $q . $i . "S3", $argID) !='')){
       $arrStaff[] = array("teacher"=>getFiled("Q2" . $q . $i . "S1", $argID) . " " . getFiled("Q2" . $q . $i . "S3", $argID),"school"=>$username->name);
	
       }
       }
	   }
	    //Stuents
   $arrStudents = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name')
				->from('gsp_school')
				->where('userid',$argID)
				->get()->row();
   foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 10; $i++) {
       //Students
       if(getFiled("Q3".$q. $i . "S1", $argID)!="" && getFiled("Q3" .$q.$i . "S2", $argID) !="")
       {
       $arrStudents[] = array(
       'name' => getFiled("Q3".$q. $i . "S1", $argID) . " " . getFiled("Q3" .$q.$i . "S2", $argID),
       'grade' => getFiled("Q3" .$q.$i . "S3", $argID),
	   'school_name'=>$username->name,
	   );
	    }
       }
	  }
	     $data['school_name']=$this->db->select('*')
				 ->from('gsp_school')
				 ->where('userid',$this->session->userdata('USER_ID'))
				 ->get()->result();
		$data['staff_certificate']=array_merge($airTeachers, $arrStaff);
		$data['student_certificate']=$arrStudents;
        $data['data'] = $this->Answer_model->getAnswers($argPost);
        $this->load->view('feedback',$data);
        
    }
	
	public function insert_digitalcertificate()
	{
		$query=$this->db->select('*')
		        ->from('tblcertificate')
				->where('userid',$this->session->userdata('USER_ID'))
				->get()
				->row();
				if ($query) {
					
							$this->db->where('userid',$this->session->userdata('USER_ID'));
							$finaldata=$this->db->delete('tblcertificate');
							
									if($finaldata)
									{
												extract($this->input->post());
												$schoolname=getSchoolNameBYUniqueId($this->uri->segment(3));
										
												 $total_certificate=count($digitalCertificateName); 
													for($i=0;$i<$total_certificate;$i++)
													{
														$data=array(
														'userid'=>$this->session->userdata('USER_ID'),
														'certificate_username'=>$digitalCertificateName[$i],
														'certificate_schoolname'=> $schoolname,
														'certificate_srno'=>rand(10201,10001)
														);
														$this->db->insert('tblcertificate',$data);
													}
										
													   redirect('feedback');
									}

                }else{
		
						extract($this->input->post());
						$schoolname=getSchoolNameBYUniqueId($this->uri->segment(3));
						
						$total_certificate=count($digitalCertificateName); 
						for($i=0;$i<$total_certificate;$i++)
						{
							$data=array(
							'userid'=>$this->session->userdata('USER_ID'),
							'certificate_username'=>$digitalCertificateName[$i],
							'certificate_schoolname'=> $schoolname,
							'certificate_srno'=>rand(10201,10001)
							);
							
							$this->db->insert('tblcertificate',$data);
							
						}
						redirect('feedback');
				}
		
		
	}
	
	public function getDigitalValue()
	{
		$userid=$this->input->post('userid');
		$data=$this->db->select('*')
		         ->from('tblcertificate')
				 ->where('userid',$userid)
				 ->get()
				 ->result();
				 if($data)
				 {
					 echo 'true';
				 }else{
					 
					 echo 'false';
				 }
		
		
	}
	
	
	
	
	
	public function generateDigitalCertificate(){
	  extract($this->input->post());
	  $result=$this->db->insert("tblcertificate",array("userid"=>$userid,"certificate_username"=>$membername,"certificate_schoolname"=>$school_name,"certificate_srno"=>rand(10201,10001)));
	  if($result){echo "Data Has Been Send For Generating Digital Certificate.";}
	}
	
	public function deleteDigitalCertificate(){
		//print_r($this->input->post());exit;
	  extract($this->input->post());
	  $this->db->where("userid",$userid);
	  $this->db->where("certificate_username",$membername);
	  $this->db->where("certificate_schoolname",$school_name);
	  $result=$this->db->delete("tblcertificate");
	  if($result){echo "Generating Digital Certificate Has been Cancelled.";}
	}
	
	
	
	

     public function end_aduit()
    {
       $this->load->view('end-message');
    }
   
	
	
	
   /* public function set()
    {
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,8);
        redirect(base_url("Feedback/end_aduit"));
    }*/
    public function set()
    {	
       $post = $this->input->post();
       $this->Answer_model->submitAnswers($post,8);   
	   $get_current_user=$this->session->userdata('USER_ID');
	   $get_current_year=date('Y');
	   $data=$this->db->select("id")->from('gsp_school')->where("userid=".$get_current_user)->get()->result();
	   $get_school_id=$data[0]->id;
	   $result=$this->db->select("*")->from('gsp_aduit_submitted')->where("userid=".$get_current_user)->where("school_id=".$get_school_id)->where("year=".$get_current_year)->get()->result();
	   if($result){
       redirect(base_url("Feedback/end_aduit")); 
	   }
	   else
	   {
	    $shool_record=array("school_id"=>$get_school_id,"userid"=>$get_current_user,"year"=>$get_current_year,"status"=>'1');
	    $this->db->insert('gsp_aduit_submitted',$shool_record);
	    $this->db->where(array("userid"=>$get_current_user));	   
	    $this->db->update("gsp_school",array("complete_status"=>'1'));	   
		redirect(base_url("Feedback/end_aduit")); 
	   }	
    }
}
