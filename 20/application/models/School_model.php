<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSchool($argPost)
    {
        $query = $this->db->select('*')
            ->from('gsp_school')
            ->where(array('userid' => $argPost))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $school = array(
                'userid' => $row->userid,
        'udise' => $row->udise,
                'name' => $row->name,
                'address1' => $row->address1,
                'address2' => $row->address2,
                'country' => $row->country,
                'state' => $row->state,
                'district' => $row->district,
                'city' => $row->city,
                'pincode' => $row->pincode,
                'std' => $row->std,
                'telephone' => $row->telephone,
                'country_code' => $row->country_code,
                'schoolemail' => $row->schoolemail,
                'principle_name' => $row->principle_name,
                'mobile' => $row->mobile,
                'coname' => $row->coname,
                'coemail' => $row->coemail,
                'comobile' => $row->comobile,
                'progress'=>$row->progress,


            );
            return $school;
        }
        return $school = array("name" => "Sunil");
    }

     public function RegisterUser($argPost)
    { 
        if($argPost['partner_list']==3){

            if(!isset($argPost['bharti']))
        {
            $bharti = 0;
        }else{

            $bharti = $argPost['bharti'];
        }
        
        
        $update = array(
            'userid' => $argPost['userid'],
            'udise' =>  $argPost['udise'],
            'name' => $argPost['name'],
            'address1' => $argPost['address1'],
            'address2' => $argPost['address2'],
            'country' => $argPost['country'],
            'state' => $argPost['state'],
            'district' => $argPost['district'],
            'city' => $argPost['city'],
            'pincode' => $argPost['pincode'],
            'std' => $argPost['std'],
            'telephone' => $argPost['telephone'],
            'country_code' => $argPost['country_code'],
            'schoolemail' => $argPost['schoolemail'],
            'principle_name' => $argPost['principle_name'],
            'mobile' => $argPost['mobile'],
            'coname' => $argPost['coname'],
            'coemail' => $argPost['coemail'],
            'comobile' => $argPost['comobile'],
            'date_added' => date('Y-m-d H:i:s'),
            'partner_status'=>$argPost['partner_list'],
            'satya_foundation_status'=>$bharti,
            'browser_details' => $argPost['browser_details'],
            'browser_version' => $argPost['browser_version'],
            'user_ip_address' => $argPost['user_ip_address'],
            'kvs_school_status'=>'2',
            'password'=>$argPost['pass']
        );
        if ($this->db->insert('gsp_school', $update)) {
            //Sending Mail To The School
            $insert_id = $this->db->insert_id();
            $query = $this->db->select('a.*, b.email AS emailfiled, b.password, b.username, c.name AS state_name, d.name AS district_name')
                ->from('gsp_school AS a')
                ->join('gsp_user AS b', 'a.userid=b.id', 'left')
                ->join('states AS c', 'a.state=c.id', 'left')
                ->join('cities AS d', 'a.district=d.id', 'left')
                ->where('a.id', $insert_id)
                ->get()->row();
            //echo '<pre>'; print_r($query); exit;
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $from = "support@greenschoolsprogramme.org";
            $arrMails = array('ranjita@cseindia.org', 'studiotesseractst@gmail.com', 'srishti.jha@cseindia.org', 'tushita.rawat@cseindia.org', 'neeraj.kumar@cseindia.org, hamender.yadav@studiotesseract.in, Jitendra@studiotesseract.in');
            $date = date('d M Y');
            $to = $arrMails;
            $subject = "GSP Audit Registration".$date;
            $msg = "Dear &nbsp;";
            $msg .= $query->coname . "," . "<br/><br/>";
            $msg .= "Thank you for registering your school '" . $query->name . "', for GSP (Green Schools Programme) network. This is a one-time process and now that your school's account has been successfully created, you need not register your school again.<br><br>";
            $msg .= "Under the GSP programme, we have been organising a range of offline and online environmental <a href=\'https://www.greenschoolsprogramme.org/schools/online-events/'> activities </a> for students and teachers.<br><br>";
            $msg .= "Going ahead, you will be notified of our new initiatives as and when they are launched on the email ids provided in the registration form.<br><br>";
           $msg .= "Please save your login credentials to be used when you want to participate in the GSP initiatives. There is no fee for participation.<br><br>";
           $msg .= "<strong>Please spell the name of your school correctly the name provided by you will appear on the digital certificates and other documents.</strong><br><br>";

           $msg .= "Should the principal or the GSP coordinator change, please inform us at support@greenschoolsprogramme.org and we will update the database. <br><br>";           
           $msg .= "URL: http://www.greenschoolsprogramme.org/ <br/><br/>";
            $msg .= "Username: " . $query->coemail . "<br><br>";
            $msg .= "Password: " . $query->password . "<br><br>";
            $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            $msg .= "Thanks,<br><br>";
            $msg .= "The Green Schools Programme Team <br><br>";
            $msg .= "<strong>Your registration details are as follows: </strong><br><br>";
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
            // $this->email->cc('nirma.bora@cseindia.org', 'ranjita@cseindia.org', 'aditi.sharma@cseindia.org', 'contact@studiotesseract.biz');
            $this->email->from($from, "Green Schools Programme");
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->send();
            // echo $this->email->print_debugger();
            // die();
        
            //insert into filter table

            $this->db->select_max('id');
            $this->db->from('gsp_filter');
            $query = $this->db->get();
            $r=$query->result();

            $max_id =  $r[0]->id; 

             $rec = array(
            'id'=>$max_id + 1,
            'userid' => $argPost['userid'],
            'udise' =>  $argPost['udise'],
            'name' => $argPost['name'],
            'address1' => $argPost['address1'],
            'address2' => $argPost['address2'],
            'country' => $argPost['country'],
            'state' => $argPost['state'],
            'district' => $argPost['district'],
            'city' => $argPost['city'],
            'pincode' => $argPost['pincode'],
            'std' => $argPost['std'],
            'telephone' => $argPost['telephone'],
            'country_code' => $argPost['country_code'],
            'schoolemail' => $argPost['schoolemail'],
            'principle_name' => $argPost['principle_name'],
            'mobile' => $argPost['mobile'],
            'coname' => $argPost['coname'],
            'coemail' => $argPost['coemail'],
            'comobile' => $argPost['comobile'],
            'progress' => '5',
            'progress_phase_1' => '5',
            'date_added' => date('Y-m-d H:i:s'),
            'complete_status'=> '0',
            'phase'=>'1',
            'percentage'=>NULL,
            'remark'=>NULL,
            'Q1S1'=>NULL,
            'Q2G1'=>NULL,
            'Q9G1'=>NULL,
            'Q3G1'=>NULL
        );

            $this->db->insert('gsp_filter',$rec);
        
     return true;
        }
                
        }
        else{
            
        
        if(!isset($argPost['bharti']))
        {
            $bharti = 0;
        }else{

            $bharti = $argPost['bharti'];
        }
        
        
        $update = array(
            'userid' => $argPost['userid'],
            'udise' =>  $argPost['udise'],
            'name' => $argPost['name'],
            'address1' => $argPost['address1'],
            'address2' => $argPost['address2'],
            'country' => $argPost['country'],
            'state' => $argPost['state'],
            'district' => $argPost['district'],
            'city' => $argPost['city'],
            'pincode' => $argPost['pincode'],
            'std' => $argPost['std'],
            'telephone' => $argPost['telephone'],
            'country_code' => $argPost['country_code'],
            'schoolemail' => $argPost['schoolemail'],
            'principle_name' => $argPost['principle_name'],
            'mobile' => $argPost['mobile'],
            'coname' => $argPost['coname'],
            'coemail' => $argPost['coemail'],
            'comobile' => $argPost['comobile'],
            'date_added' => date('Y-m-d H:i:s'),
            'partner_status'=>$argPost['partner_list'],
            'satya_foundation_status'=>$bharti,
            'browser_details' => $argPost['browser_details'],
            'browser_version' => $argPost['browser_version'],
            'user_ip_address' => $argPost['user_ip_address'],
            'password'=> $argPost['pass']
        );
        if ($this->db->insert('gsp_school', $update)) {
            //Sending Mail To The School
            $insert_id = $this->db->insert_id();
            $query = $this->db->select('a.*, b.email AS emailfiled, b.password, b.username, c.name AS state_name, d.name AS district_name')
                ->from('gsp_school AS a')
                ->join('gsp_user AS b', 'a.userid=b.id', 'left')
                ->join('states AS c', 'a.state=c.id', 'left')
                ->join('cities AS d', 'a.district=d.id', 'left')
                ->where('a.id', $insert_id)
                ->get()->row();
            //echo '<pre>'; print_r($query); exit;
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
        //     $msg .= "Thank you for registering your school '" . $query->name . "', for GSP (Green Schools Programme) Audit 2020. Your account has been successfully created.<br><br>";
        //     $msg .= "GSP Audit 2020 will be launched as and when the schools reopen and you will then be informed.<br><br>";
        //     $msg .= "We request you to save your username and password given below for future reference. We will keep you posted on the GSP Audit 2020 launch.<br><br>";
        //    $msg .= "To participate, please remember to save your username and password given below.<br><br>";
        //     $msg .= "URL: http://www.greenschoolsprogramme.org/audit/20 <br/><br/>";
           $msg .= "Thank you for registering your school '" . $query->name . "', for GSP (Green Schools Programme) Audit 2021. This is a one-time process and now that your school's account has been successfully created, you need not register your school again.<br><br>";
            $msg .= "Under the GSP programme, we have been organising a range of offline and online environmental activities for students and teachers.<br><br>";
           $msg .= "Going ahead, you will be notified of our new initiatives as and when they are launched on the email ids provided in the registration form.<br><br>";
           $msg .= "We request you to save your username and password given below, for future reference and participation in GSP initiatives.<br><br>";
           $msg .= "Should the principal or the GSP coordinator change, please inform us at support@greenschoolsprogramme.org and we will update the database. <br><br>";           
      
            $msg .= "Username: " . $query->coemail . "<br><br>";
            $msg .= "Password: " . $query->password . "<br><br>";
            $msg .= "In case of any further queries please feel free to write back to us.<br><br>";
            $msg .= "Thanks,<br><br>";
            $msg .= "The Green Schools Programme Team <br><br>";
            $msg .= "<strong>Your registration details are as follows: </strong><br><br>";
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
            //echo $this->email->print_debugger();
            //die();
        
            //insert into filter table

            $this->db->select_max('id');
            $this->db->from('gsp_filter');
            $query = $this->db->get();
            $r=$query->result();

            $max_id =  $r[0]->id; 

             $rec = array(
            'id'=>$max_id + 1,
            'userid' => $argPost['userid'],
            'udise' =>  $argPost['udise'],
            'name' => $argPost['name'],
            'address1' => $argPost['address1'],
            'address2' => $argPost['address2'],
            'country' => $argPost['country'],
            'state' => $argPost['state'],
            'district' => $argPost['district'],
            'city' => $argPost['city'],
            'pincode' => $argPost['pincode'],
            'std' => $argPost['std'],
            'telephone' => $argPost['telephone'],
            'country_code' => $argPost['country_code'],
            'schoolemail' => $argPost['schoolemail'],
            'principle_name' => $argPost['principle_name'],
            'mobile' => $argPost['mobile'],
            'coname' => $argPost['coname'],
            'coemail' => $argPost['coemail'],
            'comobile' => $argPost['comobile'],
            'progress' => '5',
            'progress_phase_1' => '5',
            'date_added' => date('Y-m-d H:i:s'),
            'complete_status'=> '0',
            'phase'=>'1',
            'percentage'=>NULL,
            'remark'=>NULL,
            'Q1S1'=>NULL,
            'Q2G1'=>NULL,
            'Q9G1'=>NULL,
            'Q3G1'=>NULL
        );

            $this->db->insert('gsp_filter',$rec);
        
     return true;
        }
    }
    }
    public function GetRegistered()
    {
        $query = $this->db->select('*')
            ->from('gsp_school')
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row;
        }
    }

    public function getSchools()
    {
        $this->db->where('date_added <=', '2017-11-29 00:00:00');
        $query = $this->db->select('COUNT(*) count')->from('gsp_school')->get();
        $row = $query->row();
        return $row->count;
    }
    
     public function getSchools_phase_2()
    {
        $this->db->where('date_on >', '2019-11-12 00:00:00');
           $d1= $this->db->count_all_results('gsp_aduit_submitted');
        

       $this->db->where('complete_status=', '0');
       $d2= $this->db->count_all_results('gsp_school');

       $d3=$d1+$d2; 

       return $d3;
    }
    
            

    public function getState($stateID)
    {
        $data = $this->db->select('*')->where('id ', $stateID)->from('states')->get()->row()->name;
        return $data;
    }

    /*
     * Get Cities
     */
    public function getCity($cityID)
    {
        $data = $this->db->select('*')->where('id ', $cityID)->from('cities')->get()->row()->name;
        return $data;
    }

    public function SubmitAPIAnswers($data)
    {
      if (isset($data)) {
          try {
         $currentProgress='';    
         if(strcmp($data['questionid'],"progress")==0){
          $currentProgress=$data['answer'];
        } 
            echo $currentProgress; 
        $getProgress=$this->db->select("*")->from("gsp_school")->where(array('userid' => $data['userid']))->get()->row();
        $fetchProgress= $getProgress->progress;
        if(strcmp($data['questionid'],"dieselValidation")!=0 && strcmp($data['questionid'],"PetrolValidation")!=0 && strcmp($data['questionid'],"CNGValidation")!=0){  
         if($currentProgress<$fetchProgress){
            $this->db->set($data['questionid'], $data['answer'])
                    ->where(array('userid' => $data['userid']))//which row want to upgrade
                    ->update('gsp_school'); 
           /***********************************/
            $this->db->set(array("progress"=>$fetchProgress))
                    ->where(array('userid' => $data['userid']))//which row want to upgrade
                    ->update('gsp_school');
         }else{
            $this->db->set($data['questionid'], $data['answer'])
                    ->where(array('userid' => $data['userid']))//which row want to upgrade
                    ->update('gsp_school');     
            $this->db->set(array("progress"=>$currentProgress))
                    ->where(array('userid' => $data['userid']))//which row want to upgrade
                    ->update('gsp_school');
         } 
        }
        //print_r($data);    
              //  $this->db->set($data['questionid'], $data['answer'])
                  //  ->where(array('userid' => $data['userid']))//which row want to upgrade
                   // ->update('gsp_school');
                //return "SCHOOL Updated";
            } catch (Exception $e) {
                return "Invalid Key";
        }
      }
    }
}

?>
