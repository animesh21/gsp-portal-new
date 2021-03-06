<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_home_scorecard_haryana extends CI_Controller{
    
    /*
     * Constructor 
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');        
    }
    
    /*
     * Index function
     */
    public function index(){
      $this->load->view('certificates/closed');
    }


    public function getAuditScoreHaryana(){
        $mobile = $this->input->post('parent_mob');
        $this->db->where("parent_mob",$mobile);
        $dataCertificate=$this->db->select("*")->from("gsp_audit_home_scorecard_haryana")->get()->result();
         

        // $this->session->set_flashdata('data_name', 'The link to download the GSP Online Air Seminar April 2020 certificate is now closed.');
        //     return redirect('GetCertificate');

        if(!empty($dataCertificate)){
       if(count($dataCertificate)==1){
        $data['teachers'] = $dataCertificate;

        $data['title']="GSP Student Audit Home Score";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('gsp_audit_scorecard_haryana', $data, true);
        $html = preg_replace('/>\s+</', "><", $html);

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("Student Audit Home Score.pdf", array("Attachment" => false));
        $this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('gsp_audit_home_scorecard_haryana', array('download_count'=>$dataCertificate[0]->download_count+1));
        }else{
            $data['fullstudent'] = $dataCertificate;
            $this->load->view('audit_home_haryana', $data);
             

        }
    }
        else{
            $this->session->set_flashdata('data_name', 'Your password is incorrect. Please try again. For any assistance, write to us at: support@greenschoolsprogramme.org');
            return redirect('Audit_home_scorecard_haryana');
        }

    }


    public function getAuditScoreByName(){
         $id = $_GET['id'];

         // $mobile = $this->input->post('parent_mob');
        $this->db->where("id",$id);
        $dataCertificate=$this->db->select("*")->from("gsp_audit_home_scorecard_haryana")->get()->result(); 

        if(!empty($dataCertificate)){
       if(count($dataCertificate)==1){
        $data['teachers'] = $dataCertificate;

        $data['title']="GSP Student Audit Home Score";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('gsp_audit_home_scorecard', $data, true);
        $html = preg_replace('/>\s+</', "><", $html);

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("Student Audit Home Score.pdf", array("Attachment" => false));
        $this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('gsp_audit_home_scorecard_haryana', array('download_count'=>$dataCertificate[0]->download_count+1));
        }
}


}

}
