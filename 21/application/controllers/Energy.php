<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Energy extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->library('form_validation');
        $this->load->model(array('Answer_model', 'file'));
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');

        }

    }

    public function index() {
        if (!$_SERVER['HTTP_REFERER']) redirect('air');
        $data['title'] = 'Energy';
        //Validation
        if ($this->session->userdata('USER_ID') == '') {

            redirect('login');

        }
        else
        {
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 3 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $other = $this->Answer_model->getAllAnswers($argPost);
            $data['other'] = $other;
            $argPost['type'] = 2;
            $air = $this->Answer_model->getAnswers($argPost);
            $data['electricityBills']=$this->file->getElectricityFulesBillsData($this->session->userdata('USER_ID'));
            $data['fulesBills']=$this->file->getEnergyFulesBillsData($this->session->userdata('USER_ID'));
            $data['appliancesBills']=$this->file->getEnergyApplianceBillsData($this->session->userdata('USER_ID'));
            $data['alternativeResource']=$this->file->alternativeResource($this->session->userdata('USER_ID'));
            $data['energySupport']=$this->file->getEnergySupportData($this->session->userdata('USER_ID'));
            if(isset($air['Q6A1']))
                if($air['Q6A1']>2)
                    $data['data']['Q5E1'] = 'Y';
                else
                    $data['data']['Q5E1'] = 'N';


            if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
                if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
                {  //  print("Primaryland");
                    $this->load->view('PrimaryEnergy',$data);
                }
                else
                    $this->load->view('energy',$data);
            else
                $this->load->view('energy',$data);



        }
    }
    public function set()
    {
        //$argPost['userid'] = $this->session->userdata('USER_ID');
        //$argPost['type'] = 3 ;
        //$data['data'] = $this->Answer_model->getAnswers($argPost);
        //$this->load->view('energy',$data);


        //$argPost['userid'] = $this->session->userdata('USER_ID');
        //$argPost['type'] = 2 ;
        $post = $this->input->post();
		
        //$data = $this->Answer_model->getAnswers($argPost);

        /*if(isset($post['Q6E2S1']) && $data['Q6A1'] != 3)
        {
            echo "<script>
            alert('School Does Not own vehicle.');
            window.location.href='/GSP/energy';
            </script>";

        }
        else if(CheckData($data['Q6A1'],$post['Q6E11S1'],$post['Q6E2S1'],$post['Q6E3S1'],$post['Q6E4S1'],$post['Q6E11S1']) == false)
        {
            echo "<script>
            alert('School Does Not own vehicle.2');
            window.location.href='/GSP/energy';
            </script>";
        }
        else if(isset($post['Q6E3S1']) && $data['Q6A1'] != 3)
        {
            echo "<script>
            alert('School Does Not own vehicle.');
            window.location.href='/GSP/energy';
            </script>";
        }
        else if(isset($post['Q6E4S1']) && $data['Q6A1'] != 3)
        {
            echo "<script>
            alert('School Does Not own vehicle.');
            window.location.href='/GSP/energy';
            </script>";
        }
        else if(isset($post['Q6E10S1']) && $data['Q6A1'] != 3)
        {
            echo "<script>
            alert('School Does Not own vehicle.');
            window.location.href='/GSP/energy';
            </script>";
        }
        else if(isset($post['Q6E9S1']) && $data['Q6A1'] != 3)
        {
            echo "<script>
            alert('School Does Not own vehicle.');
            window.location.href='/GSP/energy';
            </script>";
        }
        else if(isset($post['Q9E1']))
        {
            if((isset($post['Q6E9S1']) || isset($post['Q6E10S1'])) && $post['Q9E1'] != 'Y')
            {
                echo "<script>
                console.log('Test');
                alert('School Does Not have alternative source or Energy.');
                window.location.href='/GSP/energy';
                </script>";
            }
            else if((empty($post['Q6E9S1']) || empty($post['Q6E10S1'])) && $post['Q9E1'] == 'Y')
            {
                echo "<script>
                console.log('Test1');
                alert('Alternative Source set as Yes, But not listed in Q3');
                window.location.href='/GSP/energy';
                </script>";
            }
            else
            {
               $this->Answer_model->submitAnswers($post,3);
                        //print_r($post);
               redirect(base_url("food"));

            }
        }
        else
        {*/
        $this->Answer_model->submitAnswers($post,3);
	updateProgress($this->session->userdata('USER_ID'), 90);
        //print_r($post);
        redirect(base_url("waste"));
        // }
    }
    function CheckData($air,$Q2,$Q3,$Q4,$Q11)
    {
        if(isset($air))
        {
            if(($air != 1) || ($air != 2))
            {
                if(isset($Q2) || isset($Q3) || isset($Q4) || isset($Q11))
                {
                    return true;
                }
                else
                    return false;
            }
            else
            {
                if(isset($Q2) || isset($Q3) || isset($Q4) || isset($Q11))
                {
                    return false;
                }
                else
                    return true;
            }
        }
        else if(isset($Q2) || isset($Q3) || isset($Q4) || isset($Q11))
        {
            return false;
        }

    }

}
