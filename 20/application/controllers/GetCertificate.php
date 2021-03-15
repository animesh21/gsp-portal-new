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
    }
    
    /*
     * Index function
     */
    public function index(){
    	$this->load->view('password_generator');
        // $this->load->view('certificates/closed');
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



}

