<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GspWorkshopSbs extends CI_Controller{ 
    
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
        $this->load->view('certificates/gspworkshopsbb');
    }


    public function getWorkshop(){
        $mobile = $this->input->post('mobile'); ;
        $this->db->where("mobile",$mobile);
        $dataCertificate=$this->db->select("*")->from("gsp_workshop_sbb")->get()->result();
        
         

       
        if(!empty($dataCertificate)){
       
        $data['teachers'] = $dataCertificate;

        $data['title']="GSP Digital Certificates";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html = $this->load->view('gsp_workshop_one_pdf', $data, true);
         $html = preg_replace('/>\s+</', "><", $html);

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper(array(0, 0, 530, 760), 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
        $this->db->where('id', $dataCertificate[0]->id);
        $this->db->update('gsp_workshop_sbb', array('download_count'=>$dataCertificate[0]->download_count+1));
        }
        else{
            $this->session->set_flashdata('data_name', 'Your password is incorrect. Please try again. For any assistance, write to us at : support@greenschoolsprogramme.org');
            return redirect('GspWorkshopSbs');
        }

    }



}

