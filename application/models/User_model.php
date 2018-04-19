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
        $query = $this->db->select('*')
            ->from('gsp_user')
            ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
			if($row->login_status==0)
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
        $query = $this->db->select('a.*, b.email, b.password')
            ->from('gsp_school AS a')
            ->join('gsp_user AS b', 'a.userid=b.id', 'left')
            ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
			if($row->complete_status==1)
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

    public function forgetPassword()
    {
        //echo $argEmail; exit;
        $this->load->helper('string');
        $email_count = $this->db->get_where('gsp_user', array('email' => $this->input->post('val')))->num_rows();
        //echo $this->db->last_query(); exit;
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
//                echo '<pre>';                print_r($query); exit;

                $this->load->library('email');
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $from = "support@greenschoolsprogramme.org";
                $to = $query->email;
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
//                echo $this->email->print_debugger();
//                die();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

?>
