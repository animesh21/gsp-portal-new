<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waste extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model(array('Answer_model','file'));
        $user = 1;
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');

        }
    }

    public function index() {
        if (!$_SERVER['HTTP_REFERER']) redirect('water');
        $data['title'] = 'Waste';
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');

        }
        else
        {
            $argPost['userid'] =$this->session->userdata('USER_ID');
            $argPost['type'] = 7  ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            $data['segregationClassroom']=uploadHelper
            ($this->session->userdata('USER_ID'), 'Segregation_Source_Classrooms');
            $data['solidWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Weighing_Solid_Waste');
            //$data['composingPit']=uploadHelper($this->session->userdata('USER_ID'), 'Composting_Pit');
            $data['recycleMachine']=uploadHelper($this->session->userdata('USER_ID'), 'Recycling_Machine');
            $data['eWaste']=uploadHelper($this->session->userdata('USER_ID'),
                'E-Waste');
            $data['houseKeeping']=uploadHelper($this->session->userdata('USER_ID'), 'Housekeeping');
            $data['burningWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Buring_Waste');
            $data['teamDoingWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Doing_Survey');
            $data['ewasteStorage']=uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Storage');
            $data['disposing']=uploadHelper($this->session->userdata('USER_ID'), 'Disposing');
            $data['eWasteDisposing']=uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Disposing_Certificate');
            $data['pictures']=uploadHelper($this->session->userdata
            ('USER_ID'), 'Pictures_of_Audit_Team');
            $data['composingPit']=$this->file->getWasteData($this->session->userdata('USER_ID'));
            $data['authorised_dealer']=$this->file->getAuthorisedDealer($this->session->userdata('USER_ID'));
            
            $data['Initiatives']=$this->file->getInitiatives($this->session->userdata('USER_ID'));
            $data['chikoo']=$this->file->getWastePolicy($this->session->userdata('USER_ID'));

            if( isset($data['other']['Q1G2']))
            {  
                if( $data['other']['Q1G2'] < 6)
                {   
                    $this->load->view('PrimaryWaste',$data);
                }
                else
                {
                    $this->load->view('waste',$data);
                }
            }
            else
            {
                $this->load->view('waste',$data);//$this->load->view('waste',$data); this is where problem was, I told you that 2 views might be loaded.
            }
        }
    }
    public function set()
    {

        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,7);
        updateProgress($this->session->userdata('USER_ID'), 100);
        //print_r($post);
        redirect(base_url("feedback"));
    }


}
