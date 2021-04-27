<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started extends CI_Controller {
    /* 
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('ADMIN_ID') == '') {
            redirect(base_url('admin/login'));
        }
        $this->load->model('admin/Audit_started_model');
        $this->load->model('School_model');
        $this->load->model(array('admin/Report','admin/Dashboard_model'));
        $this->load->helper(array('common_helper', 'form', 'download'));
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'security', 'common_helper'));
        $this->load->model(array('Answer_model', 'file','User_model','admin/Dashboard_model'));
        $this->load->model('admin/Audit_started_model');
        $this->load->model('admin/Report');
        $this->session->userdata('USER_ID') == '';
        $this->load->helper('date');
        $this->load->library('zip');
        $this->load->helper('download');

    }

    public function audit_started_school() {
        $data['main'] = 'admin/audit/audit_started';
        $data['title'] = 'Home | Audit Started';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }


        public function index() {
        $data['main'] = 'admin/audit/audit_started_2017';
        $data['title'] = 'Home | Registration';
        $data['record'] = $this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }

 public function kvs_school_list() {
        $data['main'] = 'admin/audit/kvs_school_list';
        $data['title'] = 'Home | Registration 2020';
        $data['record'] = $this->Audit_started_model->kvs_school_list();
        $this->load->view('admin/includes/template', $data);
    }
    
    
public function kvs_school_merge() {
        $id= $this->input->post('mergeid');
        $old_school_id=  $this->input->post('old_school_id');
        $data['main'] = 'admin/dashboard/register_old_school';
        $data['title'] = 'Home | Registration 2020';
        $data['record_new'] = $this->db->select('*')->from('gsp_school')->where('id', $id)->get()->result();
        $data['record_old'] = $this->db->select('*')->from('gsp_school')->where('id', $old_school_id)->get()->result();
        
        $this->load->view('admin/includes/template', $data);
    }

    public function kvs_school_add() {
        if(!empty(extract($this->input->post()))){
           // echo $old_school_id = $old_school_id; exit;
            $update = array(
                'udise'=>$udise,
                'name'=>$name,
                'address1'=>$address1,
                'address2'=>$address2,               
                'city'=>$city,
                'pincode'=>$pincode,
                'country_code'=>$country_code,
                'std'=>$std,
                'telephone'=>$telephone,
                'schoolemail'=>$schoolemail,
                'principle_name'=>$principle_name,
                'mobile'=>$mobile,
                'coname'=>$coname,
                'coemail'=>$coemail,
                'comobile'=>$comobile,
                'partner_status'=>$partner_status
            );

            $this->db->where('id',$old_school_id);
            $this->db->update('gsp_school',$update);
        }

        $disable = array('make_school_disabled'=>'0');
        // echo "<pre>";
        // print_r($this->input->post());
        //  exit;
        $id= $this->input->post('new_school_id');
        $this->db->where('id',$id);
        $this->db->update('gsp_school',$disable);

        $old_school_id=  $this->input->post('old_school_id');



        // $query = $this->db->select('kvs_school_status')->from('gsp_school')->where('id', $id)->get()->result();        
        // echo $query[0]->kvs_school_status;
        $this->db->where('id', $old_school_id);
        $this->db->update("gsp_school",array("kvs_school_status"=>NULL));
        // echo $this->db->last_query();
        $query = $this->db->select('a.*, b.email AS emailfiled, b.password, b.username, c.name AS state_name, d.name AS district_name')
                ->from('gsp_school AS a')
                ->join('gsp_user AS b', 'a.userid=b.id', 'left')
                ->join('states AS c', 'a.state=c.id', 'left')
                ->join('cities AS d', 'a.district=d.id', 'left')
                ->where('a.id', $old_school_id)
                ->get()->row();
            // echo '<pre>'; print_r($query); exit;
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $from = "support@greenschoolsprogramme.org";
            $arrMails = array($schoolemail, $coemail, 'ranjita@cseindia.org', 'studiotesseractst@gmail.com', 'srishti.jha@cseindia.org', 'tushita.rawat@cseindia.org', 'neeraj.kumar@cseindia.org', 'hamender.yadav@studiotesseract.in, Jitendra@studiotesseract.in');
            $date = date('d M Y');
            $to = $arrMails;
            $subject = "GSP Audit Registration".$date;
            $msg = "Dear &nbsp;";
            $msg .= $coname . "," . "<br/><br/>";
            $msg .= "Please note that a duplicate GSP account of your school " . $name . " was recently made. <strong> Your school is already a part of GSP and registering again will lead to duplicate data. Therefore, we request you to not register again. </strong> The duplicate account has now been deleted. <br/><br/>";
            $msg .= "If you wish to make any changes to the profile details please write to us at 'support@greenschoolsprogramme.org' <br><br>";
            $msg .= "Given the current health crisis, GSP Audit 2020 will be launched as and when the schools reopen and you will then be informed. We will inform you as and when it opens. Please stay tuned to our email updates.<br><br>";
        $msg.= "We request you to save your username and password given below for future reference. We will keep you posted on the GSP Audit 2020 launch.";
        $msg .= "To participate, please remember to save your username and password given below.<br><br>";
            $msg .= "URL: http://www.greenschoolsprogramme.org/audit/20 <br/><br/>";
            $msg .= "Username: " . $coemail . "<br><br>";
            $msg .= "Password: " . $query->password . "<br><br>";
            $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            $msg .= "Thanks,<br><br>";
            $msg .= "The Green Schools Programme Team <br><br>";
            $msg .= "<strong>Also sharing your account details as entered by you in the registration form: </strong><br><br>";
            $msg .= "UDISE Code: " . $udise . "<br><br>";
            $msg .= "Name of School: " . $name . "<br><br>";
            $msg .= "Address Line 1: " . $address1 . "<br><br>";
            $msg .= "Address Line 2: " . $address2 . "<br><br>";
            $msg .= "State: " . $state_name . "<br><br>";
            $msg .= "District: " . $district_name . "<br><br>";
            $msg .= "City: " . $city . "<br><br>";
            $msg .= "Pincode: " . $pincode . "<br><br>";
            $msg .= "Land Line No: " . "91 - " . $std . " - " . $telephone . "<br><br>";
            $msg .= "Principal's Name: " . $principle_name . "<br><br>";
            $msg .= "Mobile Number: " . $mobile . "<br><br>";
            $msg .= "GSP Coordinator's Name: " . $coname . "<br><br>";
            $msg .= "GSP Coordinator's Email: " . $coemail . "<br><br>";
            $msg .= "Mobile Number: " . $comobile . "<br><br>";
            $this->email->to($to);
            //$this->email->cc('nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'contact@studiotesseract.biz');
            $this->email->from($from, "Green Schools Programme");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
        
        $data['main'] = 'admin/dashboard/register_old_school';
        $data['title'] = 'Home | Registration 2020';
        $data['record_new'] = $this->db->select('*')->from('gsp_school')->where('id', $id)->get()->result();
        $data['record_old'] = $this->db->select('*')->from('gsp_school')->where('id', $old_school_id)->get()->result();
        
        $this->load->view('admin/includes/template', $data);
    redirect(base_url("admin/audit_started"));
    }

    public function kvs_school_mail() {
        $id = $this->input->post('school_id');
        // $query = $this->db->select('kvs_school_status')->from('gsp_school')->where('id', $id)->get()->result();        
        // echo $query[0]->kvs_school_status;
        $this->db->where('id', $id);
        $this->db->update("gsp_school",array("kvs_school_status"=>NULL));
        // echo $this->db->last_query();
        $query = $this->db->select('a.*, b.email AS emailfiled, b.password, b.username, c.name AS state_name, d.name AS district_name')
                ->from('gsp_school AS a')
                ->join('gsp_user AS b', 'a.userid=b.id', 'left')
                ->join('states AS c', 'a.state=c.id', 'left')
                ->join('cities AS d', 'a.district=d.id', 'left')
                ->where('a.id', $id)
                ->get()->row();
            // echo '<pre>'; print_r($query); exit;
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $from = "support@greenschoolsprogramme.org";
            $arrMails = array($query->schoolemail, $query->coemail, 'ranjita@cseindia.org', 'studiotesseractst@gmail.com', 'srishti.jha@cseindia.org', 'tushita.rawat@cseindia.org', 'neeraj.kumar@cseindia.org');
            $date = date('d M Y');
            $to = $arrMails;
            $subject = "GSP Audit Registration".$date;
            $msg = "Dear &nbsp;";
            $msg .= $query->coname . "," . "<br/><br/>";
            $msg .= "Thank you for registering your school '" . $query->name . "', for GSP (Green Schools Programme) Audit 2020. Your account has been successfully created.<br><br>";
            $msg .= "GSP Audit 2020 will be launched as and when the schools reopen and you will then be informed.<br><br>";
            $msg .= "We request you to save your username and password given below for future reference. We will keep you posted on the GSP Audit 2020 launch.<br><br>";
           $msg .= "To participate, please remember to save your username and password given below.<br><br>";
            $msg .= "URL: http://www.greenschoolsprogramme.org/audit/20 <br/><br/>";
            $msg .= "Username: " . $query->coemail . "<br><br>";
            $msg .= "Password: " . $query->password . "<br><br>";
            $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            $msg .= "Thanks,<br><br>";
            $msg .= "The Green Schools Programme Team <br><br>";
            $msg .= "<strong>Also sharing your account details as entered by you in the registration form: </strong><br><br>";
            $msg .= "UDISE Code: " . $query->udise . "<br><br>";
        $msg .= "Name of School: " . $query->name . "<br><br>";
            $msg .= "Address Line 1: " . $query->address1 . "<br><br>";
            $msg .= "Address Line 2: " . $query->address2 . "<br><br>";
            $msg .= "State: " . $query->state_name . "<br><br>";
            $msg .= "District: " . $query->district_name . "<br><br>";
            $msg .= "City: " . $query->city . "<br><br>";
            $msg .= "Pincode: " . $query->pincode . "<br><br>";
            $msg .= "Land Line No: " . "91 - " . $query->std . " - " . $query->telephone . "<br><br>";
            $msg .= "Principal's Name: " . $query->principle_name . "<br><br>";
            $msg .= "Mobile Number: " . $query->mobile . "<br><br>";
            $msg .= "GSP Coordinator's Name: " . $query->coname . "<br><br>";
            $msg .= "GSP Coordinator's Email: " . $query->coemail . "<br><br>";
            $msg .= "Mobile Number: " . $query->comobile . "<br><br>";
            $this->email->to($to);
            //$this->email->cc('nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'contact@studiotesseract.biz');
            $this->email->from($from, "Green Schools Programme");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
    }

    
    
    public function getSchoolData()
    {   
       $records=$this->Audit_started_model->getData();
       $arr_school=array();
       $i=0;
       foreach ($records as $record) { 
           $arr_school[]=array('sr_no'=>++$i,
            'id'=>$record->id,
            'udise'=>$record->udise,
            'name'=>$record->name,
            'userid'=>$record->userid,
            'state_name'=>$record->state_name,
            'district_name'=>$record->district_name,
            'city'=>$record->city,
            'region'=>$record->region,
            'coname'=>$record->coname,
            'coemail'=>$record->coemail,
            'user_password' => $record->user_password,
            'comobile'=>$record->comobile,
            'progress'=>$record->progress,
            'partner_status'=>$record->partner_status,
            'satya_foundation_status'=>$record->satya_foundation_status,
            'date_added'=>$record->date_added);
       }
        $data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
            echo json_encode($data['record']);
   }        
        
     public function disabled_school() {
        $data['main'] = 'admin/audit/disabled_school';
        $data['title'] = 'Home | Disabled School';
        $this->load->view('admin/includes/template', $data);
    }
    
    public function getDisabledSchoolData()
    {   
       $records=$this->Audit_started_model->getDisabledSchool();
       $arr_school=array();
       $i=0;
       foreach($records as $record):
           $arr_school[]=array('sr_no'=>++$i,
            'id'=>$record->id,
            'udise'=>$record->udise,
            'name'=>$record->name,
            'userid'=>$record->userid,
            'state_name'=>$record->state_name,
            'district_name'=>$record->district_name,
            'city'=>$record->city,
            'coname'=>$record->coname,
            'coemail'=>$record->coemail,
            'comobile'=>$record->comobile,
            'progress'=>$record->progress,
             'partner_status'=>$record->partner_status,
            'date_added'=>$record->date_added);
       endforeach;
        $data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
            echo json_encode($data['record']);
   }
    
   public function partnersList(){
       $data['main'] = 'admin/audit/partners';
        $data['title'] = 'Home | Partners Registration';
        $data['list_school1']=$this->Audit_started_model->getPartnerData('1');
        $data['list_school2']=$this->Audit_started_model->getPartnerData('2');
        $data['list_school3']=$this->Audit_started_model->getPartnerData('3');
        $data['list_school4']=$this->Audit_started_model->getPartnerData('4');
        $data['list_school5']=$this->Audit_started_model->getPartnerData('5');
        $data['list_school6']=$this->Audit_started_model->getPartnerData('6');
        $data['list_school7']=$this->Audit_started_model->getParterSubpartnerData('7');
        $data['list_school8']=$this->Audit_started_model->getParterSubpartnerData('8');       
       
        $data['csi_registerd_audit']=$this->Report->get_registeredpartner("1");
        $data['csi_total_started_audit']=$this->Report->get_startedpartner("1");
        $data['csi_completed']=$this->Report->get_completedpartner("1");
        $data['csi_total_notstarted_audit']=$this->Report->get_notstartedpartner("1");
        $data['csi_audit_submitted']=$this->Report->get_audit_submitted("1");
        
        $data['csi_registerd_audit2']=$this->Report->get_registeredpartner("2");
        $data['csi_total_started_audit2']=$this->Report->get_startedpartner("2");
        $data['csi_completed2']=$this->Report->get_completedpartner("2");
        $data['csi_total_notstarted_audit2']=$this->Report->get_notstartedpartner("2");
        $data['csi_audit_submitted2']=$this->Report->get_audit_submitted("2");
         
        $data['csi_registerd_audit3']=$this->Report->get_registeredpartner("3");
        $data['csi_total_started_audit3']=$this->Report->get_startedpartner("3");
        $data['csi_completed3']=$this->Report->get_completedpartner("3");
        $data['csi_total_notstarted_audit3']=$this->Report->get_notstartedpartner("3");
         $data['csi_audit_submitted3']=$this->Report->get_audit_submitted("3");
        
        $data['csi_registerd_audit4']=$this->Report->get_registeredpartner("4");
        $data['csi_total_started_audit4']=$this->Report->get_startedpartner("4");
        $data['csi_completed4']=$this->Report->get_completedpartner("4");
        $data['csi_total_notstarted_audit4']=$this->Report->get_notstartedpartner("4");
        $data['csi_audit_submitted4']=$this->Report->get_audit_submitted("4");
        
        $data['csi_registerd_audit5']=$this->Report->get_registeredpartner("5");
        $data['csi_total_started_audit5']=$this->Report->get_startedpartner("5");
        $data['csi_completed5']=$this->Report->get_completedpartner("5");
        $data['csi_total_notstarted_audit5']=$this->Report->get_notstartedpartner("5");
        $data['csi_audit_submitted5']=$this->Report->get_audit_submitted("5");
        
        $data['csi_registerd_audit6']=$this->Report->get_registeredpartner("6");
        $data['csi_total_started_audit6']=$this->Report->get_startedpartner("6");
        $data['csi_completed6']=$this->Report->get_completedpartner("6");
        $data['csi_total_notstarted_audit6']=$this->Report->get_notstartedpartner("6");
        $data['csi_audit_submitted6']=$this->Report->get_audit_submitted("6");
       
        $data['csi_registerd_audit7']=$this->Report->get_subregisteredpartner("7");
        $data['csi_total_started_audit7']=$this->Report->get_substartedpartner("7");
        $data['csi_completed7']=$this->Report->get_subcompletedpartner("7");
        $data['csi_total_notstarted_audit7']=$this->Report->get_subnotstartedpartner("7");
        $data['csi_audit_submitted7']=$this->Report->get_subaudit_submitted("7");

        $data['csi_registerd_audit8']=$this->Report->get_subregisteredpartner("8");
        $data['csi_total_started_audit8']=$this->Report->get_substartedpartner("8");
        $data['csi_completed8']=$this->Report->get_subcompletedpartner("8");
        $data['csi_total_notstarted_audit8']=$this->Report->get_subnotstartedpartner("8");
        $data['csi_audit_submitted8']=$this->Report->get_subaudit_submitted("8");
       
        $this->load->view('admin/includes/template', $data);
   }
    
    
 /*
     * Generate Excel
     */

    public function excel_phase1() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase1();
        $name = 'registration.csv';
        force_download($name, $row);
    }
    
 
    public function excel_kvs_school_list() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->excel_kvs_school_list();
        $name = 'registration.csv';
        force_download($name, $row);
    }
  
  
 /*
     * Disabled School Excel
     */

    public function disabled_school_excel() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->disabled_school();
        $name = 'Disabled School.csv';
        force_download($name, $row);
    }
    
    /*
     * Generate Excel
     */

    public function excel_phase2() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase1();
        $name = 'registration_2018.csv';
        force_download($name, $row);
    }
   
    public function excel_phase2_1() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelData_phase2_1();
        $name = 'registration_2018.csv';
        force_download($name, $row);
    }   
    
    
    /*
     * Generate Excel By Condition
     */

    public function excelByProgress_phase1() {
        $varProgress="a.progress_phase_1 > '5' && a.progress_phase_1 < '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1( $varProgress);
        $name = 'registration.csv';
        force_download($name, $row);
    }
    
     public function excelByProgress_phase2() {
        $varProgress="a.progress > '5' && a.progress <= '75' && a.complete_status='0'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->getExcelDataByProgress_phase2( $varProgress);
            $name = 'SCHOOLS STARTED THE AUDIT BUT DID NOT COMPLETE'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    
    /*
     * Generate Excel By Condition
     */

    public function excelByProgress1_phase1() {
        $varProgress="a.progress_phase_1 > '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    public function excelByProgress1_phase2() {
      $varProgress="a.progress >= '10' && a.progress < '100' && a.complete_status ='0'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase2( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    /* Generate Excel That started the audit */
    public function excelByProgress2_phase1() {
        $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress2_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
     public function excelByProgress2_phase2() {
     $varProgress="a.progress ='100' && a.complete_status='0'";
         $this->load->dbutil();
         $row = $this->Audit_started_model->getExcelDataByProgress_phase2($varProgress);
     //$row = $this->Dashboard_model->school_that_complete_audit_phase_2()       
         $name = 'SCHOOL_THAT_COMPLETED_THE_AUDIT'.date('d-m-Y').'.csv';
     force_download($name, $row);
    }

/*
     * Generate Excel By Condition
     */

    public function excelByProgress3_phase1() {
        $varProgress="a.progress_phase_1 = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase1($varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    public function excelByProgress3_phase2() {
        $varProgress="a.progress = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase2($varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }

    /* Generate Excel started but did not complete */
     public function excelByProgress5_phase1() {
        $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress5_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    
    /* Generate Excel did not start */
    public function excelByProgress6_phase1() {
        $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress6_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    /* Generate Excel 2017 school */
    public function excelByProgress7_phase1() {
        $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress7_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    /*
     * Generate Excel By Condition
     */

    public function excelByProgress4_phase1() {
        $varProgress="a.progress_phase_1 = '100'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress1_phase1($varProgress);
        $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
     public function excelByProgress4_phase2() {
      $varProgress="a.progress = '100' && a.complete_status='1'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->getExcelDataByProgress1_phase2($varProgress);
            $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    /* Schools Did Not Start The Audit phase2 */
    public function excelByProgress6_phase2() {
    $varProgress="a.progress = '5'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByProgress_phase6($varProgress);
        $name = 'SCHOOL_DID_NOT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }
    
    
     /*
     * Generate Excel 2017
     */
    
    
public function excel2017() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcel2017Data();
        $name = 'registration.csv';
        force_download($name, $row);
    }   
    
    /*
     * Generate Response
     */

    public function response($argID) {
        $data['title'] = 'Home | School';
        $data['states'] = getStates();
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/school', $data);
    }

    /*
     * Generate Pdf
     */

    public function pdf($argID) {
    ini_set('memory_limit', '-1');      
     ini_set('max_execution_time', 300);   
        $data['title'] = 'Home';
        $data['id'] = $argID;
        $data['states'] = getStates();
        $data['school'] = $this->Audit_started_model->getSchoolByIdRecoad($argID);
    //echo '<pre>'; print_r($data['school']);  die();  
        $data['schoolUserID'] = $data['school'][0]->userid;
       // $data['files'] = $this->file->getFilesData($this->session->userdata('USER_ID'));
    $data['Supporting_Document_Air'] = uploadHelper($this->session->userdata('USER_ID'), 'Supporting_Document_Air');
        $data['filesfules'] = $this->file->getFilesDatafules($this->session->userdata('USER_ID'));
        $data['airQualityMonitering'] = $this->file->AirQuality($this->session->userdata('USER_ID'));
        $data['SupportiveAir'] = $this->file->SupportiveAir($this->session->userdata('USER_ID'));
       
    $data['pucCertificate'] = $this->file->pucCertificate($this->session->userdata('USER_ID'));
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($this->session->userdata('USER_ID'));
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($this->session->userdata('USER_ID'));
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($this->session->userdata('USER_ID'));
        $data['alternativeResource'] = $this->file->alternativeResource($this->session->userdata('USER_ID'));
        $data['energySupport'] = $this->file->getEnergySupportData($this->session->userdata('USER_ID'));
        //food
        $data['midDayMeal'] = $this->file->getMidDayMeal($this->session->userdata('USER_ID'));
        $data['canteen'] = $this->file->getCanteen($this->session->userdata('USER_ID'));
        $data['files'] = $this->file->getFoodFilesData($this->session->userdata('USER_ID'));
        $data['uppc'] = $this->file->getFoodUPPCData($this->session->userdata('USER_ID'));
        $data['AuditTeamD'] = $this->file->AuditTeamD($this->session->userdata('USER_ID'));
        $data['lunch']=$this->file->getLunchBoxData($this->session->userdata('USER_ID'));
        //land
        $data['greenCover'] = $this->file->Green_Cover($this->session->userdata('USER_ID'));
        //waste
        $data['segregationClassroom'] = uploadHelper($this->session->userdata('USER_ID'), 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($this->session->userdata('USER_ID'), 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($this->session->userdata('USER_ID'), 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste');
        $data['houseKeeping'] = uploadHelper($this->session->userdata('USER_ID'), 'Housekeeping');
        $data['burningWaste'] = uploadHelper($this->session->userdata('USER_ID'), 'Buring_Waste');
        $data['teamDoingWaste']=uploadHelper($this->session->userdata('USER_ID'), 'Audit_Team_Doing_Survey');
        $data['ewasteStorage'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($this->session->userdata('USER_ID'), 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($this->session->userdata('USER_ID'), 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($this->session->userdata('USER_ID'), 'Pictures_of_Audit_Team');
        //water  
        $data['task4supporting'] = uploadHelper($this->session->userdata('USER_ID'), 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($this->session->userdata('USER_ID'), 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($this->session->userdata('USER_ID'), 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = $this->file->SupportingWater($this->session->userdata('USER_ID'));
        //echo '<pre>'; print_r($data);die;
        $rank=getFiled('Q1G2',$data['schoolUserID']);
        
        if ($rank >= 6 ) { 
           $html1 = $this->load->view('admin/survey/school_pdf', $data, true);
             
            } else {
               $html1 = $this->load->view('admin/survey/primary-school-pdf', $data, true);
            }
            
              $this->load->library('dompdf_lib');
              $this->dompdf->set_paper("A4");
            $this->dompdf->load_html($html1);
            $this->dompdf->render();
            $this->dompdf->stream("welcome.pdf", array("Attachment" => false));
        
    }
    
    
function getdigitalCertificate($argID) {
   $data['title']="GSP Digital Certificates";
   $this->load->library('dompdf_lib');
   //Students Records
  $students = $this->count_certificates_stuents($argID);
  $staffadmin = $this->count_certificates_staffamin($argID);
  $staffadmin = array_column($staffadmin, 'teacher');
  $staffadmin=   implode(',', $staffadmin);
  $staffadmin = preg_replace('/\s+/', ' ', $staffadmin);
  $staffadmin = strtolower($staffadmin);
 // echo $staffadmin = ucfirst($staffadmin);
 
  $staffadmin = explode(',', $staffadmin);
 
  $staffadmin = array_unique($staffadmin);
 
  // $principal=$this->digital_certificate_for_principal_coordinator($argID);
  // $principal = array_shift($principal);
  
   $data['students'] = $students;
   $data['staffadmin'] = $staffadmin;

 //     echo "<pre>";
 // print_r($students);
 //  exit;
 
   // $data['principal'] = $principal;
  
   $this->db->where("userid",$argID);
   $dataCertificate=$this->db->select("certificate_username,certificate_schoolname,id")
   ->from("tblcertificate")->group_by("certificate_username")->order_by('id','ASC')->get()->result();
   $data['school_certificates']=$dataCertificate;
   $principal = $this->db->select("a.userid,a.principle_name")
                                 ->from("gsp_school AS a")
                                 ->where("userid", $argID)
                                 ->get()
                                 ->result();
  $data['principal']=$principal;
                                 // echo "<pre>";
                                 // print_r($principal);exit;
   $html1 = $this->load->view('admin/survey/digital-certificate', $data, true);
   $this->dompdf->load_html($html1);
   $this->dompdf->set_paper(array(0, 0, 580, 760), 'landscape');
   $this->dompdf->render();
   $this->dompdf->stream("Digital Certificate.pdf", array("Attachment" => false));
  }
    
    public function count_certificates_stuents($argID) {
   //Stuents
   $arrStudents = array();
   $question_alphabet = array("A", "E", "F", "L", "W", "Wa");
   $username=$this->db->select('name,state,district')
                ->from('gsp_school')
                ->where('userid',$argID)
                ->get()->row();
   foreach ($question_alphabet as $q) {
       for ($i = 1; $i <= 10; $i++) {
       //Students
       if(getFiled("Q3".$q. $i . "S1", $argID)!="" && getFiled("Q3" .$q.$i . "S2", $argID) !="")
       {
       $arrStudents[] = array(
       'name' => strtoupper( trim(getFiled("Q3".$q. $i . "S1", $argID))) . " " .strtoupper(trim( getFiled("Q3" .$q.$i . "S2", $argID))),
       'grade' => getFiled("Q3" .$q.$i . "S3", $argID),
     'school_name'=>$username->name, 'state'=>$username->state, 'district'=>$username->district,
     );
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
     $arrForcoordinator_principal[]=array('name'=>$q,'schoolname'=>$username->name);
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
//    $value="0"." "."0";
//    $temp= array_search($value, $arrStaff);
//    print_r($temp);
   //echo '<pre>'; print_r($airTeacher['school']); exit;
   //echo '<pre>'; print_r($arrStaff);
   return array_merge($airTeachers);
  }

    /*
     * Generate Response General
     */

    public function general($argID) {
        $data['title'] = 'Home | General';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/general', $data);
    }

    /*
     * Generate Response Air
     */

    public function air($argID) {
        $data['title'] = 'Home | Air';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['files'] = $this->file->getFilesData($data['school']->userid);
        $data['filesfules'] = $this->file->getFilesDatafules($data['school']->userid);
        $data['airQualityMonitering'] = $this->file->AirQuality($data['school']->userid);
        $data['pucCertificate'] = $this->file->pucCertificate($data['school']->userid);
    $data['Supporting_Document_Air'] = uploadHelper($data['school']->userid, 'Supporting_Document_Air');
        //echo '<pre>'; print_r($data['image']);exit();
        $this->load->view('admin/survey/air', $data);
    }

    /*
     * Generate Response Energy
     */

    public function energy($argID) {
        $data['title'] = 'Home | Energy';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['electricityBills'] = $this->file->getElectricityFulesBillsData($data['school']->userid);
        $data['fulesBills'] = $this->file->getEnergyFulesBillsData($data['school']->userid);
        $data['appliancesBills'] = $this->file->getEnergyApplianceBillsData($data['school']->userid);
        $data['alternativeResource'] = $this->file->alternativeResource($data['school']->userid);
    $data['Alternative_Source_of_Energy'] = uploadHelper($data['school']->userid, 'Alternative_Source_of_Energy');
        $data['energySupport'] = $this->file->getEnergySupportData($data['school']->userid);
        $this->load->view('admin/survey/energy', $data);
    }

    /*
     * Generate Response Land
     */

    public function land($argID) {
        $data['title'] = 'Home | Land';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['greenCover'] = uploadHelper($data['school']->userid, 'Green_Cover');
        $this->load->view('admin/survey/land', $data);
    }

    /*
     * Generate Response Food
     */

    public function food($argID) {
        $data['title'] = 'Home | Food';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['midDayMeal'] = $this->file->getMidDayMeal($data['school']->userid);
        $data['canteen'] = $this->file->getCanteen($data['school']->userid);
        $data['files'] = $this->file->getFoodFilesData($data['school']->userid);
    $data['food_gsp_audit'] = uploadHelper($data['school']->userid, 'Audit_Team_doing_Survey_Food');
        $data['uppc'] = $this->file->getFoodUPPCData($data['school']->userid);

        $this->load->view('admin/survey/food', $data);
    }

    /*
     * Generate Response Water
     */

    public function water($argID) {
        $data['title'] = 'Home | Water';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['task4supporting'] = uploadHelper($data['school']->userid, 'Task_4_Supporting_docs');
        $data['waterTreatment'] = uploadHelper($data['school']->userid, 'Water_Treatment_Process');
        $data['flowChartHandDrawn'] = uploadHelper($data['school']->userid, 'Flow_Chart_Hand_Drwan');
        $data['supportDocWater'] = uploadHelper($data['school']->userid, 'Supporting_Document_Water');
        $this->load->view('admin/survey/water', $data);
    }

    /*
     * Generate Response Waste
     */

    public function waste($argID) {
        $data['title'] = 'Home | Waste';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $data['segregationClassroom'] = uploadHelper($data['school']->userid, 'Segregation_Source_Classrooms');
        $data['solidWaste'] = uploadHelper($data['school']->userid, 'Audit_Team_Weighing_Solid_Waste');
        $data['composingPit'] = uploadHelper($data['school']->userid, 'Composting_Pit');
        $data['recycleMachine'] = uploadHelper($data['school']->userid, 'Recycling_Machine');
        $data['eWaste'] = uploadHelper($data['school']->userid, 'E-Waste');
        $data['houseKeeping'] = uploadHelper($data['school']->userid, 'Housekeeping');
        $data['burningWaste'] = uploadHelper($data['school']->userid, 'Buring_Waste');
        $data['teamDoingWaste'] = uploadHelper($data['school']->userid, 'Audit_Team_Doing_Survey');
        $data['ewasteStorage'] = uploadHelper($data['school']->userid, 'E-Waste_Storage');
        $data['disposing'] = uploadHelper($data['school']->userid, 'Disposing');
        $data['eWasteDisposing'] = uploadHelper($data['school']->userid, 'E-Waste_Disposing_Certificate');
        $data['pictures'] = uploadHelper($this->session->userdata
                        ('USER_ID'), 'Pictures_of_Audit_Team');
        $this->load->view('admin/survey/waste', $data);
    }

    public function feedback1($argID) {
        $data['title'] = 'Home | Feedback';
        $data['id'] = $argID;
        $data['school'] = $this->Audit_started_model->getSchoolById($argID);
        $data['schoolUserID'] = $data['school']->userid;
        $this->load->view('admin/survey/feedback', $data);
    }
    public function edit($argID) {
       $data['title'] = 'Home | Edit';
       $data['main'] = 'admin/survey/edit';
       $data['states'] = $this->User_model->getStates();
       $data['school'] = $this->Audit_started_model->getSchoolById($argID);
       $data['cities'] = $this->User_model->getCitiesAll($data['school']->state);
       $data['user'] = $this->Audit_started_model->getUserById($data['school']->userid);
       $this->load->view('admin/includes/template', $data);
   }
   
   
   
   /*
     * Update Function
     */
    public function update($argSchoolID, $argUserID)
    {   
        $arrSchool=array(
            'name'=>$this->input->post('name'),
           'udise'=>$this->input->post('udise'),
            'address1'=>$this->input->post('address1'),
            'address2'=>$this->input->post('address2'),
            'state'=>$this->input->post('state'),
            'district'=>$this->input->post('district'),
            'city'=>$this->input->post('city'),
            'pincode'=>$this->input->post('pincode'),
            'std'=>$this->input->post('std'),
            'telephone'=>$this->input->post('telephone'),
            'schoolemail'=>$this->input->post('schoolemail'),   
            'mobile'=>$this->input->post('mobile'),
            'principle_name'=>$this->input->post('principle_name'),
            'coname'=>$this->input->post('coname'),
            'coemail'=>$this->input->post('coemail'),
            'comobile'=>$this->input->post('comobile'),
            'partner_status'=>$this->input->post('partner_list'),
            'satya_foundation_status'=>$this->input->post('satya_list')
        );
        ///echo '<pre>'; print_r($this->input->post()); exit;
        $arrSchool0=array('answer'=>$this->input->post('name'));
        $arrSchool1=array('answer'=>$this->input->post('udise'));
        $arrSchool2=array('answer'=>$this->input->post('address1'));
        $arrSchool3=array('answer'=>$this->input->post('address2'));
        $arrSchool4=array('answer'=>$this->input->post('state'));           
        $arrSchool5=array('answer'=>$this->input->post('district'));
        $arrSchool6=array('answer'=>$this->input->post('city'));
        $arrSchool7=array('answer'=>$this->input->post('pincode')); 
        $arrSchool8=array('answer'=>$this->input->post('std'));
        $arrSchool9=array('answer'=>$this->input->post('telephone'));
        $arrSchool10=array('answer'=>$this->input->post('schoolemail'));    
        $arrSchool11=array('answer'=>$this->input->post('mobile'));
        $arrSchool12=array('answer'=>$this->input->post('principle_name'));
        $arrSchool13=array('answer'=>$this->input->post('coname'));
        $arrSchool14=array('answer'=>$this->input->post('coemail'));
            $arrSchool15=array('answer'=>$this->input->post('comobile'));
        $this->db->where('id', $argSchoolID);
        if($this->db->update('gsp_school', $arrSchool))
        {
            
            $userid=getUserId($argSchoolID);
            $this->db->where('userid', $userid);
            $this->db->where('questionid','name');
            $this->db->update('gsp_answers',$arrSchool0);
            
            $userid=getUserId($argSchoolID);
            $this->db->where('userid', $userid);
            $this->db->where('questionid','udise');
            $this->db->update('gsp_answers',$arrSchool1);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','address1');
            $this->db->update('gsp_answers',$arrSchool2);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','address2');
            $this->db->update('gsp_answers',$arrSchool3);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','state');
            $this->db->update('gsp_answers',$arrSchool4);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','district');
            $this->db->update('gsp_answers',$arrSchool5);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','city');
            $this->db->update('gsp_answers',$arrSchool6);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','pincode');
            $this->db->update('gsp_answers',$arrSchool7);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','std');
            $this->db->update('gsp_answers',$arrSchool8);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','telephone');
            $this->db->update('gsp_answers',$arrSchool9);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','schoolemail');
            $this->db->update('gsp_answers',$arrSchool10);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','mobile');
            $this->db->update('gsp_answers',$arrSchool11);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','principle_name');
            $this->db->update('gsp_answers',$arrSchool12);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','coname');
            $this->db->update('gsp_answers',$arrSchool13);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','coemail');
            $this->db->update('gsp_answers',$arrSchool14);
            
            $this->db->where('userid', $userid);
            $this->db->where('questionid','comobile');
            $this->db->update('gsp_answers',$arrSchool15);
            
            //update user data as well
            $arrUser=array(
                'email'=>$this->input->post('coemail'),
                'password'=>$this->input->post('password')
            );
            $this->db->where('id', $argUserID);
            $this->db->update('gsp_user', $arrUser);
            $this->session->set_flashdata('success', 'School Infomation Successfully Updated');
        } else {
            $this->session->set_flashdata('error', 'There is an error updating school information !');
        }
        redirect(base_url('admin/audit_started/edit/'.$argSchoolID), 'refresh');
    }
    
  
    /*Download image*/
    
    public function download_file($argID){
    $this->load->helper('download');
    echo "hello";die;
        echo $argID; exit;
        
        $data =base_url()."/uploads/files/".$argID; // Read the file's contents
        $name = $argUserID;
 
        force_download($data,NULL);    
            
    }
    
    
  public function downloadzip($argID){
         $data=$this->Audit_started_model->getZipImagesOfSchool($argID);
          foreach($data as $r):
           $filedata=$r->file_name;
           $filename="uploads/files/".$r->file_name;
           if(file_exists("uploads/files/".$filedata))
           {
              $data = $this->zip->add_data($filedata,file_get_contents($filename)); 
              $this->zip->read_file($data); 
           }
          endforeach; 
            $this->zip->download(date('d-M-Y'));
    }
    
    
    /*School Generate Badge Code*/
    public function generatebadge($argID){
          $data=$this->Audit_started_model->getgeneratebadge($argID);
          redirect(base_url("admin/audit_started"));  
    }
    
    /*Get School Badge Code*/
    public function printBadge(){
          $argID=$this->input->post('userid');
          $data=$this->Audit_started_model->getprintbadgecode($argID);
         foreach($data as  $r):
             echo $r->badge_code;
         endforeach;
         
    }
    
    /**This Function Used For Disabling A School**/
    
    public function unable_school(){
      $argID=$this->input->post("school_id");
      $check1= $this->Audit_started_model->unable_school($argID);
      if($check1){
           redirect('/admin/audit_started');
      }
    }

    

    public function disable_schoolapp(){
        $argID=$this->input->post("school_id");
        $check1= $this->Audit_started_model->disable_schoolapp($argID);
        if($check1){
             redirect(base_url('/admin/audit_started'));
        }
      }

    public function disable_school(){
      $argID=$this->input->post("school_id");
      $check1= $this->Audit_started_model->disable_school($argID);
      if($check1){
           redirect(base_url('/admin/audit_started'));
      }
    }
    
    /**This Function Used For Deleting A School**/
    public function delete_school($argID)
    {
        $check1= $this->Audit_started_model->school_delete($argID);
        if($check1){
           redirect(base_url('/admin/audit_started'));
            }
        else{
              echo "record failed";
            } 
    }
    
    public function update_school_partner()
    {
        $partner=$this->input->post('partner');
            $satya_foundation_status=$this->input->post('satya_foundation_status');
        $school_id=$this->input->post('school_id');
      
      
      if($partner=='No partner'){
         $partner_status='0';
      }
      
      
      if($partner=='Church of South India' && $satya_foundation_status==0){
         $partner_status='1';
      }
      
      if($partner=='Jawahar Navodaya Vidyalaya (JNV)' && $satya_foundation_status==0){
         $partner_status='2';
      }
      
      if($partner=='Kendriya Vidyalaya Sangathan (KVS)' && $satya_foundation_status==0){
         $partner_status='3';
      }
      
      if($partner=='Montfortian Education Foundation' && $satya_foundation_status==0){
         $partner_status='4';
      }
      
      if($partner=='Mount Litera Zee Schools' && $satya_foundation_status==0){
         $partner_status='5';
      }
      
      if($partner=='Satya Bharti Foundation' && $satya_foundation_status==0 ){
         $partner_status='6';
      }

         if($partner=='Satya Bharti School' || $satya_foundation_status==7 ){
            $partner_status='6';
            $satya_foundation_status='7';
         }

         if($partner=='BF Quality Support Programme' || $satya_foundation_status==8 ){
            $partner_status='6';
            $satya_foundation_status='8';
      }

      
      
      $data=array(
      'partner_status'=>$partner_status,
          'satya_foundation_status'=>$satya_foundation_status
      );
         
            $this->db->where('id',$school_id);
        $this->db->update('gsp_school',$data);
    
    }
    
    
    // this is written code by jeetu


     public function combinded_total_school() {
        $this->load->dbutil();
        $row = $this->Audit_started_model->combinded_total_school();
        $name = 'registration_2018.csv';
        force_download($name, $row);
    }

     public function combinded_startedtheaudit() {
      $varProgress="a.progress >= '10' && a.progress < '100' && a.complete_status ='0'";
        $this->load->dbutil();
        $row = $this->Audit_started_model->combinded_startedtheaudit( $varProgress);
        $name = 'SCHOOL_THAT_STARTED_THE_AUDIT'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }

    public function combinded_completecount() {
     $varProgress="a.progress ='100' && a.complete_status='0'";
         $this->load->dbutil();
         $row = $this->Audit_started_model->combinded_completecount($varProgress);
         $name = 'SCHOOL_THAT_COMPLETED_THE_AUDIT'.date('d-m-Y').'.csv';
     force_download($name, $row);
    }

     public function combinded_submitcount() {
      $varProgress="a.progress = '100' && a.complete_status='1'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->combinded_submitcount($varProgress);
            $name = 'School_That_Submit_Audit'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }

     public function combinded_uncompletecount() {
        $varProgress="a.progress > '5' && a.progress <= '75' && a.complete_status='0'";
            $this->load->dbutil();
            $row = $this->Audit_started_model->combinded_uncompletecount( $varProgress);
            $name = 'SCHOOLS STARTED THE AUDIT BUT DID NOT COMPLETE'.date('d-m-Y').'.csv';
        force_download($name, $row);
    }




    public function statewise() {
        $data['main'] = 'admin/audit/statewise';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['states']['0']="All"; 
        asort($data['states']); 
        $this->load->view('admin/includes/template', $data);
    }

     public function search() {
        $data['main'] = 'admin/audit/search';
        $data['title'] = 'Home | Audit State Wise';
        $data['states'] = getStates();
        $data['states']['0']="All";
    asort($data['states']); 
        $data['val'] = $this->input->post('state');
        $data['school'] = $this->input->post('school');
    $data['state'] = $this->input->post('state');
    $state=$this->input->post('state');
    $school=$this->input->post('school');
        
        if($school==0)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationBystateprimary($state);
           $data['total_started_audit_1']=$this->Report->startparticipationBystateprimary($state);
           $data['completed_1']=$this->Report->completeparticipationBystateprimary($state);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystateprimary($state);
           $data['unompleted_audit']=$this->Report->uncompleteparticipationBystateprimary($state);
        }
        
        if($school==1)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationBystatesecondary($state);
           $data['total_started_audit_1']=$this->Report->startparticipationBystatesecondary($state);
           $data['completed_1']=$this->Report->completeparticipationBystatesecondary($state);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystatesecondary($state);
           $data['unompleted_audit']=$this->Report->uncompleteparticipationBystatesecondary($state);
        }
        
        if($school==2)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationBystate($state);
           $data['total_started_audit_1']=$this->Report->startparticipationBystate($state);
           $data['completed_1']=$this->Report->completeparticipationBystate($state);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationBystate($state);
           $data['unompleted_audit']=$this->Report->uncompleteparticipationBystate($state);
        }
        
        
        
        $data['record'] = $this->Audit_started_model->getStateWiseSchool($state,$school);   
        $data['state_id1']=$state;
        $this->load->view('admin/includes/template', $data);
    }
    /*
     * State Wise Excel Generation
     */

    public function excel($argID) {
        $this->load->dbutil();
        $row = $this->Audit_started_model->getExcelDataByState($argID);
        $name = 'registration_by_state.csv';
        force_download($name, $row);
    }
    
     public function excel_region($argID) {
        $this->load->dbutil();
        if($argID=='East')
        {
          $argID1=array("36", "26", "16", "1", "5"); //$east_india
        }
        
        if($argID=='West')
        {
          $argID1=array("12", "21", "11", "9", "8"); //$west_india
        }
        
        if($argID=='North')
        {
          $argID1=array("28", "15", "13", "29", "14", "34", "35", "10", "6"); //$north_india
        }
        
        if($argID=='South')
        {
          $argID1=array("2", "17", "18", "31", "32", "19", "27"); //$south_india
        }
        
        if($argID=='North East')
        {
          $argID1=array("3", "4", "22", "23", "24", "25", "30", "33"); //$north_east_india
        }
        
        if($argID=='Central')
        {
          $argID1=array("7", "20"); //$central_india
        }
        
        if($argID=='All')
        {
          $argID1=array("3","36", "26", "16", "1", "5","12", "21", "11", "9", "8","28", "15", "13", "29", "14", "34", "35", "10", "6","2", "17", "18", "31", "32", "19", "27","7", "20","4", "22", "23", "24", "25", "30", "33"); //$all
        }
        $row = $this->Audit_started_model->getExcelDataByRegion($argID1);
        $name = 'registration_by_region.csv';
        force_download($name, $row);
    }
    
    
    

    public function regionwise() {
        $data['main'] = 'admin/audit/regionwise';
        $data['title'] = 'Home | Audit Region Wise';
        //$data['record']=$this->Audit_started_model->getData();
        $this->load->view('admin/includes/template', $data);
    }
    
    public function regionsearch() {
        $data['main'] = 'admin/audit/regionsearch';
        $data['title'] = 'Home | Audit Region Wise';
        $data['region'] = $this->input->post('region');
        $data['school'] = $this->input->post('school');
         $region=$this->input->post('region');
         $school=$this->input->post('school');
         
         if($region=='East')
        {
          $region1=array("36", "26", "16", "1", "5"); //$east_india
        }
        
        if($region=='West')
        {
          $region1=array("12", "21", "11", "9", "8"); //$west_india
        }
        
        if($region=='North')
        {
          $region1=array("28", "15", "13", "29", "14", "34", "35", "10", "6"); //$north_india
        }
        
        if($region=='South')
        {
          $region1=array("2", "17", "18", "31", "32", "19", "27"); //$south_india
        }
        
        if($region=='North East')
        {
          $region1=array("3", "4", "22", "23", "24", "25", "30", "33"); //$north_east_india
        }
        
        if($region=='Central')
        {
          $region1=array("7", "20"); //$central_india
        }
        
        if($region=='All')
        {
          $region1=array("3","36", "26", "16", "1", "5","12", "21", "11", "9", "8","28", "15", "13", "29", "14", "34", "35", "10", "6","2", "17", "18", "31", "32", "19", "27","7", "20","4", "22", "23", "24", "25", "30", "33"); //$all
        }
         
         
         
         if($school==0)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationByregionprimary($region1);
           $data['total_started_audit_1']=$this->Report->startparticipationByregionprimary($region1);
           $data['completed_1']=$this->Report->completeparticipationByregionprimary($region1);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregionprimary($region1);
        }
        
        if($school==1)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationByregionsecondary($region1);
           $data['total_started_audit_1']=$this->Report->startparticipationByregionsecondary($region1);
           $data['completed_1']=$this->Report->completeparticipationByregionsecondary($region1);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregionsecondary($region1);
        }
        
        if($school==2)
        {
           $data['registerd_audit_1']=$this->Report->registerparticipationByregion($region1);
           $data['total_started_audit_1']=$this->Report->startparticipationByregion($region1);
           $data['completed_1']=$this->Report->completeparticipationByregion($region1);
           $data['total_notstarted_audit_1']=$this->Report->notstartparticipationByregion($region1);
        }
         
         
         
         
         $data['region']= $region;  
          $data['record'] = $this->Audit_started_model->getRegionWiseSchool($region,$school);   
         $this->load->view('admin/includes/template', $data);
    }

    
    
    
    
    /*
     * PArtner Excel Generation
     */

   public function partnerexcel() {
        $this->load->dbutil();
        $row =$this->Audit_started_model->getallPartnerData();
        $name = 'Partner List.csv';
        force_download($name, $row);
    }

    

    /*
     * Send Feedback
     */
     public function feedback() {
     $data['states'] = getStates();
     $data['states'][0]="All"; 
     $data['district'] = getDistricts();
     $data['district'][0]="All";     
     $data['main'] = 'admin/audit/feedback';
     $data['title'] = 'Home | Send Feedback';
         $this->load->view('admin/includes/template', $data);
     }
    /*
     * Send Filter Feedback
     */ 
    /*
     * Send Filter Feedback
     */ 
       public function filter_email() {
       
       $data['subject'] = $this->input->post('subject');
        $data['message'] = $this->input->post('message');

        ini_set('memory_limit', '-1');
        $mail = '';
        $filed = '';
        $byMail = $this->input->post('email');
        if ($byMail == 'coemail') {
            $filed = "a.coemail, a.schoolemail";
            $mail = "coemail";
        } else if ($byMail == 'schoolemail') {
            $filed = "a.coemail, a.schoolemail";
            $mail = "schoolemail";
        } else if ($byMail == "allemail") {
            $filed = "a.coemail, a.schoolemail";
            $mail = "both";
        }
        $category = array();
        $aid = array();
        $byPhase=$this->input->post('phase');
        $progress_range= $this->input->post('progress_range');          
        $byComplete = $this->input->post('complete');   
        $byProgress = $this->input->post('progress');
        $byCategory = $this->input->post('school_category');
        $bySchoolType = $this->input->post('school_type');
        $byAidType = $this->input->post('school_aid');
        $byState = $this->input->post('state');
        $byDistrict = $this->input->post('district');   
        $bySchoolName = $this->input->post('schoolname');
        $rating = $this->input->post('rating');
        $byAlphabate = $this->input->post('alphabate');
        $byBoard=$this->input->post('board');
  $byPartner=$this->input->post('partner_status');
       // $query = "SELECT a.id, a.udise, a.userid, a.name, a.country, a.state, a.district, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, d.remark, d.phase FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id LEFT JOIN tbl_sendmail AS d ON a.id=d.school_id  WHERE";
      // $query = "SELECT a.id,a.school_id,a.Q1S1,a.Q2G1,a.Q9G1, a.udise, a.userid,a.country, a.name, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, a.remark, a.phase FROM tbl_sendmail AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id  WHERE";
//      $query = "SELECT a.date_added,a.address1,a.coname,a.address2,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.coemail,a.comobile,a.password,a.mobile,a.principle_name,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1, a.udise, a.userid,a.country, a.name, a.city, a.progress, $filed, b.name AS state_name, c.name AS district_name, a.remark, a.phase FROM gsp_filter AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id  WHERE"; 
     if($byPhase != '0'){

        $query = "SELECT a.id,a.userid,a.udise,a.name,a.address1,a.address2,a.country,a.city,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.mobile,a.coname,a.coemail,a.comobile,a.date_added,a.password,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1,a.progress,a.remark, a.coemail, a.schoolemail,a.partner_status, b.name AS state_name, c.name AS district_name FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id LEFT JOIN gsp_aduit_submitted AS d ON a.id = d.school_id WHERE" ;
            $conditions = array();
     }else{

         $query = "SELECT a.id,a.userid,a.udise,a.name,a.address1,a.address2,a.country,a.city,a.pincode,a.std,a.telephone,a.schoolemail,a.principle_name,a.mobile,a.coname,a.coemail,a.comobile,a.date_added,a.password,a.id,a.Q3G1,a.Q1S1,a.Q2G1,a.Q9G1,a.progress,a.remark, a.partner_status, $filed, b.name AS state_name, c.name AS district_name FROM gsp_school AS a LEFT JOIN states AS b ON a.state=b.id LEFT JOIN cities AS c ON a.district=c.id WHERE";
            $conditions = array();
     }    
       
       
        if ($byState != '') {
            if ($byState == "0") {
                $conditions[] = " a.state!='$byState'";
            } else {
                $conditions[] = " a.state='$byState'";
            }
        }
    
    if ($byDistrict != '') {
            if ($byDistrict == "0") {
                $conditions[] = " a.district!='$byDistrict'";
            } else {
                $conditions[] = " a.district='$byDistrict'";
            }
        }   
  //school $byPartner
    if (!empty($byPartner)) {
            $conditions[] = " a.partner_status = '$byPartner'";
        }
        
        //school Name
        if (!empty($bySchoolName)) {
            $conditions[] = " a.name LIKE '%$bySchoolName%'";
        }
    
    if (!empty($byAlphabate)) {
            $conditions[] = " a.name LIKE '$byAlphabate%'";
        }   

        //Schoo Type
        if (!empty($bySchoolType)) {
            foreach ($bySchoolType as $a) {
                $aid[] = " a.Q2G1='$a'";
            }
            $conditions[] = "(" . implode(' OR ', $aid) . ")";
        }

        //Progress Condition
        if (!empty($byProgress)) {
           
            foreach ($byProgress as $p) {
               
                if($p=='100')
                {
                    $test[] = " a.progress='$p' AND make_school_disabled = '1' AND complete_status = '0' ";
                }
        elseif($p=='5')
                {
                    $test[] = " a.progress='$p' AND make_school_disabled = '1'";
                }
         else{
                    $test[] = " a.progress='$p'";
                }
            }
            $conditions[] = "(" . implode(' OR ', $test) . ")";
        }
    
    if (!empty($progress_range)) {
            $conditions[] = " a.progress BETWEEN 10 AND 40 AND make_school_disabled = '1'";
        }   

        //Category
        if (!empty($byCategory)) {
            foreach ($byCategory as $c) {
                $category[] = " a.Q1S1='$c'";
            }
            $conditions[] = "(" . implode(' OR ', $category) . ")";
           
        }

        //School type aid
        if (!empty($byAidType)) {
            foreach ($byAidType as $u) {
                $Aid[] = "a.Q9G1='$u'"; }
            $conditions[] = "(" . implode(' OR ', $Aid) . ")";
        }

        //school rating
        if (!empty($rating)) {
            $conditions[] = " a.remark LIKE '%$rating%'";
        }
    
    if($byBoard !=0)
        {
            $conditions[] = "a.Q3G1='$byBoard'";
        }   
        
        //By Phase
        if($byPhase != '0')
        {
            if($byPhase == 1){
            $conditions[] = "a.progress='100' AND a.complete_status='1' AND d.date_on >='2019-04-28 08:50:40' AND d.date_on <='2019-11-12 00:00:00' ";                
            }
            if($byPhase == 2){
            $conditions[] = "a.progress='100' AND a.complete_status='1' AND d.date_on >='2019-11-12 00:00:00' ";                
            }
        }
       
    if($byComplete !='')
        {
            $conditions[] = "a.complete_status= '1'";
        }      

        $sql = $query;

        if (count($conditions) > 0) {
            $sql .= implode(' AND ', $conditions);
        }
        // echo $sql; exit;
        $query = $this->db->query($sql);
        // $data=$query->result_array();

        $data['states'] = getStates();
        $data['states'][0] = "All";
        $data['district'] = getDistricts();
        $data['district'][0]="All";   
        $data['main'] = 'admin/audit/feedback-with-filter';
        $data['record'] = $query->result_array();
        $data['mail_status'] = $mail;
        $this->load->view('admin/includes/template', $data);
    }
     
        
    
    public function send_email() {

           //echo $this->input->post('send_mail'); exit;
        if(!empty(extract($this->input->post())))
        {

                 $Totalemail = implode(",", $email_list); 

               $Totalemailpp= explode(',', $Totalemail);
               //print_r($Totalemailpp);

               $school = array();
               $codinator = array();

               foreach ($Totalemailpp as $key => $value) {
                if ($key % 2==0){
                    $school[$key] = $value;
                }
                else{
                    $codinator[$key] = $value;
                }
               }
              
               $i=1;
               foreach ($school as $gg) {  
                
                require_once APPPATH . "/third_party/pepipost/vendor/autoload.php";
                $client = new PepipostAPILib\PepipostAPIClient();
                $emailController = $client->getEmail();

                // Your Pepipost API Key
                $apiKey = '9fa182fa586cf4b70fad25044936cf7e'; #add apikey from panel here

                $body = new PepipostAPILib\Models\EmailBody();

                // List of Email Recipients
                $body->personalizations = array();
                $body->personalizations[0] = new PepipostAPILib\Models\Personalizations;
                 $body->personalizations[0]->recipient = $gg;

                  $mm = implode(',', $codinator);
                   $mm;

                 if($i==1){                 
                                     
                 $body->personalizations[0]->recipientCc =  array($mm); 
                         
                }
              
                //$body->personalizations[0]->recipientCc = array($Totalemail);
                             #To/Recipient email address
                
                // Email Header
                $body->from = new PepipostAPILib\Models\From;
                $body->from->fromEmail = 'support@greenschoolsprogramme.org';   #Sender Domain. Note: The sender domain should be verified and active under your Pepipost account.
                $body->from->fromName = 'Green School Programme';       #Sender/From name

                //Email Body Content
                $body->subject = "".$subject."";               #Subject of email
                $body->content = '<html><body>'.$message.'</html>'; #HTML content which need to be send in the mail body

                // Email Settings
                $body->settings = new PepipostAPILib\Models\Settings;
                $body->settings->clicktrack = 1;    #clicktrack for emails enable=1 | disable=0
                $body->settings->opentrack = 1;     #opentrack for emails enable=1 | disable=0
                $body->settings->unsubscribe = 1;   #unsubscribe for emails enable=1 | disable=0
                 //$body->settings->bcc = 'ranjita@cseindia.org';

                $response = $emailController->createSendEmail($apiKey,$body);  

              $i++; } 
 
                 #function sends email
                print_r(json_encode($response)); 

        $this->session->set_flashdata('success', 'Your Email is Successfully Send');

                redirect(base_url('admin/audit_started/feedback'));

        }

 }

    /**Get Smmary Data**/
    /*24-04-2018*/
public function getSummary(){
     ini_set('memory_limit', '256M');
     $data['main'] = 'admin/audit/summary';
     $data['title'] = 'Summary';
     $data['School_18data']=$this->Audit_started_model->getSchool_18data();
     $data['startedtheaudit_18data']=$this->Audit_started_model->getstartedtheaudit_18data();
     $data['CompletedAuditButNotSubmitted_18data']=$this->Audit_started_model->getCompletedAuditButNotSubmitted_18data();
     $data['SubmittedTheAudit_18data']=$this->Audit_started_model->getSubmittedTheAudit_18data();
     $data['StartedAuditButDidNotComplete']=$this->Audit_started_model->getStartedAuditButDidNotComplete_18data();
     $data['NotStartTheAudit_18data']=$this->Audit_started_model->getNotStartTheAudit_18data();
     
     $data['schoolcount_phase_2']=$this->Dashboard_model->schoolCount_phase_2();
     $data['audit1_phase_2']=$this->Dashboard_model->getschool_started_audit_phase_2();
     $data['submitcount_phase_2']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
     $data['uncompletecount_phase_2']=$this->Dashboard_model->getschool_start_but_not_complete_phase_2();
     $data['notstartcount_phase_2']=$this->Dashboard_model->getschools_not_start_the_audit_phase_2();
     $data['complete_audit_phase_2_count_phase_2']= $this->Dashboard_model->school_that_complete_audit_phase_2();

     /**Get Smmary Data of 2019_Phase_1 Detail**/

    $data['total_school']=$this->Dashboard_model->getSchool_alldata();
    $data['school']=$this->Dashboard_model->getSchool_18data();
        $data['startedtheaudit']=$this->Dashboard_model->getstartedtheaudit_19data();
        $data['CompletedAuditButNotSubmitted']=$this->Dashboard_model->getCompletedAuditButNotSubmitted_19data();
        $data['SubmittedTheAudit']=$this->Dashboard_model->getSubmittedTheAudit_19data();
        $data['StartedAuditButDidNotComplete']=$this->Dashboard_model->getStartedAuditButDidNotComplete_19data();
        $data['NotStartTheAudit']=$this->Dashboard_model->getNotStartTheAudit_19data();

       /**Get Smmary Data of 2019_Phase_2 Detail**/

        $data['audit1']=$this->Dashboard_model->getschool_started_audit_phase_2();
        $data['Schools_pahse2'] = $this->School_model->getSchools_phase_2();
        $data['schoolcount']=$this->Dashboard_model->schoolCount_phase_2();
    $data['complete_audit_phase_2_count']= $this->Dashboard_model->school_that_complete_audit_phase_2();
    $data['completecount']=$this->Dashboard_model->getschool_that_complete_audit_phase_2();
    $data['completecount1']=$this->Dashboard_model->getschool_that_complete_audit_phase_2_1();
    $data['submitcount']=$this->Dashboard_model->getschool_that_submit_audit_phase_2();
    $data['uncompletecount']=$this->Dashboard_model->getschool_start_but_not_complete_phase_2();
    $data['notstartcount']=$this->Dashboard_model->getschools_not_start_the_audit_phase_2(); 

         $this->load->view('admin/includes/template', $data);
    }
    
    /**Get School Delete**/
    /*24-04-2018*/
    public function getSchoolDelete(){
     $data['main'] = 'admin/audit/delete-school';
     $data['title'] = 'Summary';
         $this->load->view('admin/includes/template', $data);
    }
    
    public function getSchoolDisable(){
     $data['main'] = 'admin/audit/unable-school';
     $data['title'] = 'Summary';
      $this->load->view('admin/includes/template', $data);
    }
    
    public function getSchoolDisable1(){
     $data['main'] = 'admin/audit/Disable-school';
     $data['title'] = 'Summary';
      $this->load->view('admin/includes/template', $data);
    }
    
    public function foundationPartnerrexcel($partnerId){
     $this->load->library('Excel'); 
     $objPHPExcel = new PHPExcel();
       $styleArray1 = array(
         'font'  => array(
         'bold'  => true,
        'name' => 'Calibri',
        'size'  => 13,
          ));
       
       
      $partner_countgreen_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","green");
      $partner_countyellow_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","yellow");
      $partner_countorange_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","orange");
      $partner_countred_2018=getPartnerWithAllCOUNT($partnerId,"data_2018","red");
      
      $partner_countgreen_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","green");
      $partner_countyellow_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","yellow");
      $partner_countorange_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","orange");
      $partner_countred_2017=getPartnerWithAllCOUNT($partnerId,"data_2017","red");
      
      $partner_countgreen_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","green");
      $partner_countyellow_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","yellow");
      $partner_countorange_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","orange");
      $partner_countred_2016=getPartnerWithAllCOUNT($partnerId,"data_2016","red");
      
      $partner_countgreen_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","green");
      $partner_countyellow_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","yellow");
      $partner_countorange_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","orange");
      $partner_countred_2015=getPartnerWithAllCOUNT($partnerId,"data_2015","red");
      $objPHPExcel->setActiveSheetIndex()->setCellValue("J3",$partner_countgreen_2018);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("J4",$partner_countyellow_2018);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("J5",$partner_countorange_2018);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("J6",$partner_countred_2018);
      
      $objPHPExcel->setActiveSheetIndex()->setCellValue("K3",$partner_countgreen_2017);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("K4",$partner_countyellow_2017);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("K5",$partner_countorange_2017);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("K6",$partner_countred_2017);
      
      $objPHPExcel->setActiveSheetIndex()->setCellValue("L3",$partner_countgreen_2016);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("L4",$partner_countyellow_2016);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("L5",$partner_countorange_2016);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("L6",$partner_countred_2016);
      
      $objPHPExcel->setActiveSheetIndex()->setCellValue("M3",$partner_countgreen_2015);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("M4",$partner_countyellow_2015);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("M5",$partner_countorange_2015);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("M6",$partner_countred_2015);
      
      $objPHPExcel->setActiveSheetIndex()->setCellValue("D4",$partner_countgreen_2018+$partner_countyellow_2018+$partner_countorange_2018+$partner_countred_2018);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("E4",$partner_countgreen_2017+$partner_countyellow_2017+$partner_countorange_2017+$partner_countred_2017);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("F4",$partner_countgreen_2016+$partner_countyellow_2016+$partner_countorange_2016+$partner_countred_2016);
      $objPHPExcel->setActiveSheetIndex()->setCellValue("G4",$partner_countgreen_2015+$partner_countyellow_2015+$partner_countorange_2015+$partner_countred_2015);
        
      
       
      $objPHPExcel->getActiveSheet()->getStyle('A7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('B7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('D7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('E7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('F7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('G7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('H7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('J7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('K7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('L7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('M7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('N7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('O7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('P7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('Q7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('R7')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C3')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C4')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C5')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('C6')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I3')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I4')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I5')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('I6')->applyFromArray($styleArray1);
       $objPHPExcel->getActiveSheet()->getStyle('J2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('K2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('L2')->applyFromArray($styleArray1);
      $objPHPExcel->getActiveSheet()->getStyle('M2')->applyFromArray($styleArray1);
      
      $styleArray = array(
      'borders' => array(
          'allborders' => array(
              'style' => PHPExcel_Style_Border::BORDER_THIN
          )
      )
     );
      
      
        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName("GSP LOGO");
        $objDrawing->setDescription("GSP Partners Excel Dump");
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
        $logo="assets/img/excel1.jpg";
        $objDrawing->setPath($logo);
        $objDrawing->setWidth(160);
        $objDrawing->setCoordinates('A1');
        
        $objDrawing1 = new PHPExcel_Worksheet_Drawing();
        $objDrawing1->setName("GSP LOGO");
        $objDrawing1->setDescription("GSP Partners Excel Dump");
        $objDrawing1->setWorksheet($objPHPExcel->getActiveSheet());
        $logo1="assets/img/excel2.jpg";
        $objDrawing1->setPath($logo1);
        $objDrawing1->setWidth(150);
        $objDrawing1->setCoordinates('S1');
     
      $objPHPExcel->getDefaultStyle()->applyFromArray($styleArray);
      $objPHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight("100px");
      $objPHPExcel->getActiveSheet()
              ->getStyle("A1:Z1".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
     $objPHPExcel->getActiveSheet()->getColumnDimension('C2')->setWidth('100'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('C3')->setWidth('50'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('C4')->setWidth('50'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('C5')->setWidth('50'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('C6')->setWidth('50');
     $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth('50'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth('15');
     $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth('15'); 
     $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth('15');
     $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth('15');
     $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth('15');
     $objPHPExcel->setActiveSheetIndex()
            ->setCellValue("C2"," ")
            ->setCellValue("C3","Total Registrations from Bharti Foundation")
            ->setCellValue("C4","Audit Completed")
            ->setCellValue("C5","Audit started but not completed")
            ->setCellValue("C6","Registered but not started")
            ->setCellValue("D2","2018")
            ->setCellValue("E2","2017")
            ->setCellValue("F2","2016")
            ->setCellValue("G2","2015")
            ->setCellValue("H2"," ")
            ->setCellValue("I2","School Category")
            ->setCellValue("I3","Green")
            ->setCellValue("I4","Yellow")
            ->setCellValue("I5","Orange")
            ->setCellValue("I6","Red")
            ->setCellValue("J2","2018")
            ->setCellValue("K2","2017")
            ->setCellValue("L2","2016")
            ->setCellValue("M2","2015")
            ->setCellValue("A7","2015")
            ->setCellValue("B7","2015")
            ->setCellValue("C7","2015")
            ->setCellValue("A7","S. No")
            ->setCellValue("B7","School ID")
            ->setCellValue("C7","School Name")
            ->setCellValue("D7","State")
            ->setCellValue("E7","District")
            ->setCellValue("F7","City")
            ->setCellValue("G7","Pin code")
            ->setCellValue("H7","School Email")
            ->setCellValue("I7","Principal Name")
            ->setCellValue("J7","Principal Mobile")
            ->setCellValue("K7","Coordinator Name")
            ->setCellValue("L7","Coordinator Email")
            ->setCellValue("M7","Coordinator Mobile")
            ->setCellValue("N7","Completeness 2018")
            ->setCellValue("O7","Status 2018")
            ->setCellValue("P7","Status 2017")
            ->setCellValue("Q7","Status 2016")
            ->setCellValue("R7","Status 2015");
        $partnerList=$this->Audit_started_model->getPartnerData($partnerId);
        $row=7;
        $sr_no=0;
        foreach($partnerList as $r){
           ++$row;
           $rowsData=getPartnerWithAllYears($r->id);
           $data_2018=!empty($rowsData[0]->data_2018)?$rowsData[0]->data_2018:"NA";
           $data_2017=!empty($rowsData[0]->data_2017)?$rowsData[0]->data_2017:"NA";
           $data_2016=!empty($rowsData[0]->data_2016)?$rowsData[0]->data_2016:"NA";
           $data_2015=!empty($rowsData[0]->data_2015)?$rowsData[0]->data_2015:"NA";
           /**********************************************************/
           /*Column Color Code On Yearwise 2015-2018*/
           if($data_2015>=70){
             $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
           }
           if($data_2015>=50 && $data_2015<=69.9){
              $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
           }
           if($data_2015>=35 && $data_2015<=49.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
           }
           if($data_2015<=34.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
           }
           if(strcmp($data_2015,"NA")==0 || $data_2015==""){
              $objPHPExcel->getActiveSheet()
              ->getStyle("R".$row,$data_2015)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
           }
           /**********************************************************/
           /*Column Color Code On Yearwise 2015-2018*/
           if($data_2016>=70){
             $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
           }
           if($data_2016>=50 && $data_2016<=69.9){
              $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
           }
           if($data_2016>=35 && $data_2016<=49.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
           }
           if($data_2016<=34.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
           }
           if(strcmp($data_2016,"NA")==0 || $data_2016==""){
              $objPHPExcel->getActiveSheet()
              ->getStyle("Q".$row,$data_2016)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
           }
              /**********************************************************/
           /*Column Color Code On Yearwise 2015-2018*/
           if($data_2017>=70){
             $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
           }
           if($data_2017>=50 && $data_2017<=69.9){
              $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
           }
           if($data_2017>=35 && $data_2017<=49.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
           }
           if($data_2017<=34.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
           }
           if(strcmp($data_2017,"NA")==0 || $data_2017==""){
              $objPHPExcel->getActiveSheet()
              ->getStyle("P".$row,$data_2017)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
           }
              /**********************************************************/
           /*Column Color Code On Yearwise 2015-2018*/
           if($data_2018>=70){
             $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('7fa656');
           }
           if($data_2018>=50 && $data_2018<=69.9){
              $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fcfc00');
           }
           if($data_2018>=35 && $data_2018<=49.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('d7851f');
           }
           if($data_2018<=34.9){
               $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('fc3300');
           }
           if(strcmp($data_2018,"NA")==0 || $data_2018==""){
              $objPHPExcel->getActiveSheet()
              ->getStyle("O".$row,$data_2018)
              ->getFill()
              ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
              ->getStartColor()
              ->setRGB('ffffff');
           }
           
           $objPHPExcel->setActiveSheetIndex()
            ->setCellValue("A".$row,++$sr_no)
            ->setCellValue("B".$row,$r->id)
            ->setCellValue("C".$row,$r->name)
            ->setCellValue("D".$row,$r->state_name)
            ->setCellValue("E".$row,$r->district_name)
            ->setCellValue("F".$row,$r->city)
            ->setCellValue("G".$row,$r->pincode)
            ->setCellValue("H".$row,$r->schoolemail)
            ->setCellValue("I".$row,$r->principle_name)
            ->setCellValue("J".$row,$r->mobile)
            ->setCellValue("K".$row,$r->coname)
            ->setCellValue("L".$row,$r->coemail)
            ->setCellValue("M".$row,$r->comobile)
            ->setCellValue("N".$row,$r->progress)
            ->setCellValue("O".$row,$data_2018)
            ->setCellValue("P".$row,$data_2017)
            ->setCellValue("Q".$row,$data_2016)
            ->setCellValue("R".$row,$data_2015);
        }   
            
     $objPHPExcel->getActiveSheet()
     ->getStyle('C3:C4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('C5:C6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
      $objPHPExcel->getActiveSheet()
     ->getStyle('D3:D4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('D5:D6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
     $objPHPExcel->getActiveSheet()
     ->getStyle('E3:E4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('E5:E6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
     $objPHPExcel->getActiveSheet()
     ->getStyle('F3:F4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('F5:F6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
     $objPHPExcel->getActiveSheet()
     ->getStyle('G3:G4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('G5:G6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('7fa656');
     $objPHPExcel->getActiveSheet()
     ->getStyle('I3')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('10c136');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('I4')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('fcfc00');
     $objPHPExcel->getActiveSheet()
     ->getStyle('I5')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('d7851f');    
     $objPHPExcel->getActiveSheet()
     ->getStyle('I6')
     ->getFill()
     ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
     ->getStartColor()
     ->setRGB('fc3300');    
     $filename='PartnersData.xls';
        ob_end_clean();
     $objPHPExcel->setActiveSheetIndex(0);
     header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
     header('Content-Disposition: attachment;filename="'.$filename.'"');
     header('Cache-Control: max-age=0');
     header('Cache-Control: max-age=1');
     header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
     header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
     header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
     header ('Pragma: public'); // HTTP/1.0
     $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
     $objWriter->save('php://output');
    }
    
    /**This Function Used For Digital Certificate JSON**/
    public function getDigitalCertificateRecordJson(){
       ini_set('memory_limit', '-1');
       $records=$this->Dashboard_model->getSchoolCertificateRecords();
       $arr_school=array();
       $i=0;
       foreach($records as $record):
           $arr_school[]=array('sr_no'=>++$i,
            'school_id'=>$record->school_id,
            'certificate_username'=>$record->certificate_username,
            'certificate_schoolname'=>$record->certificate_schoolname,
            'certificate_srno'=>$record->certificate_srno);
       endforeach;
        $data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
            echo json_encode($data['record']);
    }
    
    
    
    public function getDigitalCertificateRecordJson_2018(){
       ini_set('memory_limit', '-1');
       $records=$this->Dashboard_model->getSchoolCertificateRecords_2018();
       $arr_school=array();
       $i=0;
       foreach($records as $record):
           $arr_school[]=array('sr_no'=>++$i,
            'school_id'=>$record->school_id,
            'certificate_username'=>$record->certificate_username,
            'certificate_schoolname'=>$record->certificate_schoolname,
            'certificate_srno'=>$record->certificate_srno);
       endforeach;
        $data['record']=array(
            "sEcho" => 1,
            "iTotalRecords" => count($arr_school),
            "iTotalDisplayRecords" => count($arr_school),
            "aaData"=>$arr_school);
            echo json_encode($data['record']);
    }
    
    
    
    /**This Function Used For Digital Certificate Records**/
    public function getDigitalCertificateRecord(){
        $data['main'] = 'admin/audit/all-digital-certificates';
        $data['title'] = 'Home | Digital Certificate Records';
        $this->load->view('admin/includes/template', $data);
    }
    
    
    public function getDigitalCertificateRecord_2018(){
        $data['main'] = 'admin/audit/all-digital-certificates_2018';
        $data['title'] = 'Home | Digital Certificate Records';
        $this->load->view('admin/includes/template', $data);
    }

    public function downloadwt(){
        // $this->load->helper('downlaod');
        // force_download(base_url('/assets/Waste.csv.zip'), NULL);
        $filepath = base_url('/assets/school_pdf_name.pdf');
        $this->zip->read_file([$filepath]);
        $this->zip->download('myba.zip');
        // echo $filepath;
    }
    
}
