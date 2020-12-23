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
        $db2 = $this->load->database('db2', TRUE);
        $query = $db2->select('*')
            ->from('gsp_user')
            ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
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
			else
			{
			 	$msg='warning';
			}
        }else
		{
		   $msg='error';
		}
        return $msg;
    }
   
   public function UserLoginDownload($argPost)
    {
        $msg=''; 
        $db2 = $this->load->database('db2', TRUE);
        $query = $db2->select('a.*, a.username AS username, a.id AS id, a.status AS status, b.complete_status AS complete_status, b.progress AS progress')
            ->from('gsp_user As a')
            ->join('gsp_school AS b', 'b.coemail=a.email', 'left') 		
            ->where(array('a.email' => $argPost['email'], 'a.password' => $argPost['password']))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
			if($row->login_status==1)
			{
				$userData = array(
					'USERNAME' => $row->username,
					'USER_ID' => $row->id,
					'status' => $row->status,
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
        $data = $this->db->get_where('states', array('country_id =' => '1'))->result();
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
	public function forgetPassword()
    {
		if(!empty($this->input->post('val'))){
		date_default_timezone_set('Asia/Kolkata');
        $this->load->helper('string');
		$this->db->like('email',$this->input->post('val'));
        $email_count =$this->db->select("id")->from('gsp_user')->get()->row();
			if (count($email_count)>0) {
			  $this->db->like('coemail',$this->input->post('val'));
		      $this->db->like('forgetpassword_email_time',date("Y-m-d"));
              $dataResult = $this->db->select("*")->from('gsp_school')->get()->row();
		      $update_counter=$dataResult->counter+1;	
			  $this->db->like('coemail',$this->input->post('val'));
			 $this->db->update('gsp_school',array("forgetpassword_email_time"=>date("Y-m-d"),"counter"=>$update_counter));	
			   if($dataResult->counter>=3){
			     return $dataResult->counter;
			   }
			   else{
		$query = $this->db->select('*')
                    ->from('gsp_user')
                    ->like('email', $this->input->post('val'))
                    ->get()->row();		   
                 $varNewPass = strtolower(random_string('alnum', 5));
                 $arr = array('password' => $varNewPass);
			     $this->db->like('email',$this->input->post('val'));
				 $this->db->update('gsp_user', $arr);
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
			    }
			}
			else {
              return false;
            }
		}  }
}

?>
