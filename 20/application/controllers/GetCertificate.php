<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetCertificate extends CI_Controller{
    
    /*
     * Constructor 
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');   
        $this->load->helper(array('download', 'common_helper', 'form'));
     
    }
    
    /*
     * Index function
     */
    public function index(){
    	// $this->load->view('password_generator');
        $this->load->view('certificates/closed');
    }


    public function getCertificate(){
        $mobile = $this->input->post('mobile');
        $this->db->where("mobile",$mobile);
        $dataCertificate=$this->db->select("*")->from("gsp_skill_building_camp")->get()->result();

        // $this->session->set_flashdata('data_name', 'The link to download the GSP Online Air Seminar April 2020 certificate is now closed.');
        //     return redirect('GetCertificate');

        if(!empty($dataCertificate)){

        $data['teachers'] = $dataCertificate;

        $data['title']="GSP Digital Certificates";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('digital-certificate-new', $data, true);
         $html = preg_replace('/>\s+</', "><", $html);

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper(array(0, 0, 580, 760), 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
		$this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('gsp_skill_building_camp', array('download_count'=>$dataCertificate[0]->download_count+1));
        }
        else{
            $this->session->set_flashdata('data_name', 'Your password is incorrect. Please try again. For any assistance, write to us at : support@greenschoolprogramme.org');
            return redirect('GetCertificate');
        }

    }


    public function getPoster($argsID){
        // ini_set('memory_limit', '-1');      
        // ini_set('max_execution_time', 300);   
           $data['title'] = 'Home';
        //    $data['id'] = $argID;
        // $schoolId=getSchoolId($this->session->userdata('USER_ID'));
        // $mobile=1188;

        $schoolId=getSchoolId($this->session->userdata('USER_ID'));
        $this->db->where("schoolno",$schoolId);
        $phase2=$this->db->select("*")->from("poster")->get()->result();
        


        if(!empty($phase2)){

        $data['teachers'] = $phase2;
        // echo'<pre>';
        // print_r($phase2);


        $data['title']="GSP Poster";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('digital-poster', $data, true);
         $html = preg_replace('/>\s+</', "><", $html);
       
        $this->dompdf->load_html($html);
        $this->dompdf->set_paper(array(0, 0, 380, 560), 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
		// $this->db->where('id', $dataCertificate[0]->id);
        // $this->db->update('gsp_skill_building_camp', array('download_count'=>$dataCertificate[0]->download_count+1));
        }
        else{
            $this->session->set_flashdata('data_name', 'Your password is incorrect. Please try again. For any assistance, write to us at : support@greenschoolprogramme.org');
            return redirect('GetCertificate');

            
        }

    }

    public function wasteWarriors(){
       $this->load->view('audit_home');
        // $this->load->view('certificates/closed');
    }

    public function getWaste($argsID){
        $id = $_GET['number'];

        // $mobile = $this->input->post('parent_mob');
       $this->db->where("mobile",$id);
       $dataCertificate=$this->db->select("*")->from("ww")->get()->result(); 

       if(!empty($dataCertificate)){
      if(count($dataCertificate)==1){
       $data['teachers'] = $dataCertificate;

       $data['title']="GSP Student Audit Home Score";
       $this->load->library('dompdf_lib');
       ini_set('memory_limit', '-1');
      
       $html = $this->load->view('digital-waste', $data, true);
       $html = preg_replace('/>\s+</', "><", $html);

       $this->dompdf->load_html($html);
       $this->dompdf->set_paper('A4', 'portrait');
       $this->dompdf->render();
       $this->dompdf->stream("Student Audit Home Score.pdf", array("Attachment" => false));
    //    $this->db->where('id', $dataCertificate[0]->id);
    //    $this->db->update('gsp_audit_home_scorecard_haryana', array('download_count'=>$dataCertificate[0]->download_count+1));
       }
}


    }



}

