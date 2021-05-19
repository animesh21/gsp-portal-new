<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_home_scorecard extends CI_Controller{
    
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
    //   $this->load->view('audit_home');
    $this->load->view('certificates/closedcer');
    }


    public function getAuditScore(){
        
        $mobile = $this->input->post('parent_mob');
        $this->db->where("mobile",$mobile);
        $dataCertificate=$this->db->select("*")->from("ww")->get()->result();
         

        // $this->session->set_flashdata('data_name', 'The link to download the GSP Online Air Seminar April 2020 certificate is now closed.');
        //     return redirect('GetCertificate');

        if(!empty($dataCertificate)){
       if(count($dataCertificate)==1){
        $data['teachers'] = $dataCertificate;

        $data['title']="Waste Warriors";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('digital-waste', $data, true);
        $html = preg_replace('/>\s+</', "><", $html);

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream("Student Audit Home Score.pdf", array("Attachment" => false));
        $this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('ww', array('download_count'=>$dataCertificate[0]->download_count+1));
        }else{
            $data['fullstudent'] = $dataCertificate;
            $this->load->view('audit_home_link', $data);
             

        }
    }
        else{
            $this->session->set_flashdata('data_name', 'Your password is incorrect. Please try again. For any assistance, write to us at: support@greenschoolsprogramme.org');
            return redirect('Audit_home_scorecard');
        }

    }


    public function getAuditScoreByName(){
         $id = $_GET['id'];

         // $mobile = $this->input->post('parent_mob');
        $this->db->where("id",$id);
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
        $this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('ww', array('download_count'=>$dataCertificate[0]->download_count+1));
        }
}


}

}
