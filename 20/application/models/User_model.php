<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   public function UserLogin($argPost)
    {
    $msg=''; 
        $query = $this->db->select('a.*, a.username AS username, a.id AS id, a.status AS status, a.login_status as login_status, b.complete_status, c.date_on' )
            ->from('gsp_user As a')
            ->join('gsp_school AS b', 'b.userid=a.id', 'left')
      ->join('gsp_aduit_submitted AS c', 'b.id=c.school_id', 'left')
            ->where(array('a.email' => $argPost['email'], 'a.password' => $argPost['password']))
    ->order_by('c.date_on', 'desc')
            ->get();
//             echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $row = $query->row();
//    if($row->complete_status==1 || $row->date_on >='2019-11-12 00:00:00')
      if($row->login_status==1)
      {
      $userData = array(
      'USERNAME' => $row->username,
      'USER_ID' => $row->id,
      'status' => $row->status,
      'lastid' => $row->lastQuestionId
      );
              $this->session->set_userdata($userData);
              $msg='success';
    }
    
//   elseif($row->complete_status==1) {
//         $msg = 'complitesurveyschool';
//          }
  
  else
  {
  $msg='warning';
  }
        } else
    {
       $msg='error';
    }
        return $msg;
    }
   
  public function UserLoginDownload($argPost)
    {
    $msg=''; 
        $query = $this->db->select('a.*, a.username AS username, a.id AS id, a.status AS status, b.complete_status AS complete_status, b.progress AS progress')
            ->from('gsp_user As a')
            ->join('gsp_school AS b', 'b.coemail=a.email', 'left')    
            ->where(array('a.email' => $argPost['email'], 'a.password' => $argPost['password'], 'b.complete_status'=>'1'))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
      if($row->login_status==0)
      {
        $userData = array(
          'USERNAME' => $row->username,
          'USER_ID' => $row->id,
          'status' => $row->status,
          'lastid' => $row->lastQuestionId,
          'email' => $row->email
        );
              $this->session->set_userdata($userData);
              $msg='success';
      }
      else
      {
        $msg='warning';
      }
        }
     elseif($row->complete_status==0 || $row->progress<100)
      {
        $msg='incomplete';
      }
         else
    {
       $msg='error';
    }
     
           
        return $msg;
    }


    public function UserLoginDownload2($argPost)
    {
    $msg=''; 
        $query = $this->db->select('a.*, a.username AS username, a.id AS id, a.status AS status, b.status AS status' )
            ->from('gsp_user As a')
            ->join('gsp_aduit_submitted AS b', 'b.userid=a.id', 'left')     
            ->where(array('a.email' => $argPost['email'], 'a.password' => $argPost['password'], 'b.status'=>'1'))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
      if($row->login_status==0)
      {
        $userData = array(
          'USERNAME' => $row->username,
          'USER_ID' => $row->id,
          'status' => $row->status,
          'lastid' => $row->lastQuestionId,
                    'email' => $row->email
        );
              $this->session->set_userdata($userData);
              $msg='success';
      }
      else
      {
        $msg='warning';
      }
        }
     elseif($row->complete_status==0 || $row->progress<100)
      {
        $msg='incomplete';
      }
         else
    {
       $msg='error';
    }
     
           
        return $msg;
    }
  
   public function UserLoginDownload1($argPost)
    {
       $query = $this->db->select('*')
                ->from('tbl_admin')
                ->where(array('email' => $argPost['email'], 'password' => $argPost['password'], 'status' => '0'))
                ->get();
        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }
  
  
  
    public function CreateUser($argPost)
    {
        $query = $this->db->select('COUNT(*) count')
            ->from('gsp_user')
            ->get();

        $row = $query->row();

        $update = array(
            'email' => $argPost['email'],
            'password' => $argPost['Password'],
            'username' => $argPost['username']
        );
     $query1 = $this->db->select('COUNT(*) as count')
                ->from('gsp_user')
                ->where('email', $argPost['email'])    
                ->get()->result();
        
        if($query1[0]->count==0){
        $this->db->insert('gsp_user', $update);//insert if does not exist
        }
        $query = $this->db
            ->select('id')
            ->from('gsp_user')
            ->where('email', $argPost['email'])
            ->get();
        $row = $query->row();
        return $row->id;
    }

    public function Login($argPost)
    {
        $query = $this->db->select('*')
            ->from('gsp_user')
            ->where(array('email' => $argPost['email'], 'password' => $argPost['password'], 'status' => '0'))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return (int)$row->id;
        }
        return null;
    }

    /*
     * Get States
     */
    public function getStates()
    {
        $states = array('' => 'Select State');
        $data = $this->db->select('id,name')->from('states')->order_by('name')->get()->result();
        foreach ($data as $d) {
            $states[$d->id] = $d->name;
        }
        return $states;
    }

    /*
     * Get Cities
     */
    public function getCIties($argID)
    {
        $cities = array();    
  $this->db->order_by("name");
        $data = $this->db->get_where('cities', array('state_id =' => $argID))->result();
        return $data;
    }

    /*
     * Get Cities All New Added Code By Siddhant
     */
    public function getCitiesAll($argID)
    {
        $cities = array();
        $data = $this->db->get_where('cities', array('state_id =' => $argID))->result();
        //echo $this->db->last_query(); exit;
        foreach ($data as $d) {
            $cities[$d->id] = $d->name;
        }
        return $cities;
    }

    public function ChangePassword($pass)
    {
        $this->db->set('password', $pass['pass'])
            ->where(array('id' => $this->session->userdata('USER_ID')))//which row want to upgrade
            ->update('gsp_user');
        print_r("Update");
        $this->session->sess_destroy();
        return true;
    }

    function CheckPassword($pass)
    {
        $current = $this->db->select('*')->where('id', $this->session->userdata('USER_ID'))->from('gsp_user')->get()->row()->password;
        if ($current == $pass['oldPassword'])
            return true;
        else
            return false;
    }



  /* public function forgetPassword()
    {
       
        $this->load->helper('string');
    $oneTimeCounter =$this->db->get_where('gsp_school',array("coemail"=>$this->input->post('val')))->num_rows();  
        $email_count = $this->db->get_where('gsp_user', array('email' => $this->input->post('val')))->num_rows();
        if ($email_count > 0) {
            $varNewPass = strtolower(random_string('alnum', 5));
            $arr = array(
                'password' => $varNewPass
            );
            $this->db->where('email', $this->input->post('val'));
            if ($this->db->update('gsp_user', $arr)) {
                $query = $this->db->select('*')
                    ->from('gsp_user')
                    ->where('email', $this->input->post('val'))
                    ->get()->row();
            $this->db->where('coemail',$this->input->post('val'));
            $this->db->update('gsp_school',array("forgetpassword_email_date"=>date("Y-m-d")));   
            $this->load->library('email');
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $from = "support@greenschoolsprogramme.org";
                $to =array($query->email,"siddhartha2488@gmail.com","Studiotesseractst@gmail.com","ranjita@cseindia.org");
                $subject = "GSP Forget Password";
                $msg = "Dear &nbsp;";
                $msg .= $query->username . "," . "<br><br>";
                $msg .= "Your new password for GSP Login.<br><br>";
                $msg .= $varNewPass . "<br><br>";
                $msg .= "Regards,<br/>GSP Team.<br><br>";
                $this->email->to($to);
                $this->email->from($from, "Green Schools Programme");
                $this->email->subject($subject);
                $this->email->message($msg);
                $this->email->send();
            return $varNewPass;
                } else {
                   return false;
                }
                } else {
                 return false;
        }
    }*/
	 public function forgetPassword($tt)
    {
      if(!empty($tt)){
      date_default_timezone_set('Asia/Kolkata');
      $this->load->helper('string');
    
      $email_count =$this->db->select("id")->from('gsp_user')->get()->result();
      if (count($email_count)>0) {
        $this->db->like('coemail',$tt);
//           $this->db->like('forgetpassword_email_time',date("Y-m-d"));
              $dataResult = $this->db->select("counter")->from('gsp_school')->get()->result();
          if(!empty($dataResult)){
          $update_counter=$dataResult[0]->counter+1; 
          $this->db->where('coemail',$tt);
          $this->db->update('gsp_school',array("forgetpassword_email_time"=>date("Y-m-d"),"counter"=>$update_counter));  
        }
         if($dataResult[0]->counter>=1){
            return  "You Can Send Request For Forgetpassword Only Once in A Day. Please Send Next Query After Half An Hour & If You Have Any Doubts, Mail support@greenschoolsprogramme.org OR CALL 011-4061600";
         }
         else{
             
         $query = $this->db->select('*')->from('gsp_user')->like('email', $this->input->post('val'))->get()->row();       $varNewPass = strtolower(random_string('alnum', 5));
                  $arr = array('password' => $varNewPass);
                  $this->db->like('email',$tt);
                  $this->db->update('gsp_user', $arr);
                  $this->load->library('email');         

                  $config['protocol']    = 'smtp';
                  $config['smtp_host']    = 'ssl://smtp.gmail.com';
                  $config['smtp_port']    = '465';
                  $config['smtp_timeout'] = '60';

                  $config['smtp_user']    = 'support@greenschoolsprogramme.org';    //Important
                  $config['smtp_pass']    = 'GSP@2000';  //Important

                  $config['charset']    = 'utf-8';
                  $config['newline']    = "\r\n";
                  $config['mailtype'] = 'html'; // or html
                  $config['validation'] = TRUE; // bool whether to validate email or not
                 
                 $this->email->initialize($config);
                 $from = "support@greenschoolsprogramme.org";
                 $to =array($query->email,"support@greenschoolsprogramme.org","Studiotesseractst@gmail.com","ranjita@cseindia.org");
                 $subject = "GSP Forget Password";
                 $msg = "Dear &nbsp;";
                 $msg .= $query->username . "," . "<br><br>";
                 $msg .= "Your new password for GSP Login.<br><br>";
                 $msg .= $varNewPass . "<br><br>";
                 $msg .= "Regards,<br/>GSP Team.<br><br>";
                 $this->email->to($to);
                 $this->email->from($from, "Green Schools Programme");
                 $this->email->subject($subject);
                 $this->email->message($msg);
                 $this->email->send();
                 return "Your password request has been accepted and the new password will be sent to the registered email address of the GSP co-ordinator in the next five - ten minutes. If the password is not received in the next 10 minutes, then please check the spam folder. If not in the spam folder, then please send an email saying that you haven't received the new password to: support@greenschoolsprogramme.org, Please note that passwords can be changed only once in a day.";
              }
          }
        else {
              return false;
            }
    }    }
}

?>
