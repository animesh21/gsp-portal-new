<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetPassword extends CI_Controller{
    
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
    	$this->load->view('password_generator');
    }


    public function getCertificate(){
        $mobile = $this->input->post('mobile');
        $this->db->where("mobile",$mobile);
        $dataCertificate=$this->db->select("*")->from("gsp_new_certificate")->get()->result();
        $data['teachers'] = $dataCertificate;

        $data['title']="GSP Digital Certificates";
        $this->load->library('dompdf_lib');
        ini_set('memory_limit', '-1');
       
        $html1 = $this->load->view('digital-certificate-new', $data, true);
        $this->dompdf->load_html($html1);
        $this->dompdf->set_paper(array(0, 0, 580, 760), 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
         
    }



}

