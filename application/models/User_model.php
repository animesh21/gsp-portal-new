<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }

	public function UserLogin($argPost) {
        $query = $this->db->select('*')
                ->from('gsp_user')
                ->where(array('email' => $argPost['email'], 'password' => $argPost['password'], 'status' => '0'))
                ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $userData = array(
                'USERNAME' => $row->username,
                'USER_ID' => $row->id,
                'status'=> $row->status,
                'lastid' => $row->lastQuestionId
            );
            $this->session->set_userdata($userData);
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
                $this->db->insert('gsp_user',$update);//insert if does not exist
                $query = $this->db->select('COUNT(*) count')
                        ->from('gsp_user')
                        ->get();
                $row = $query->row();       
                return $row->count;
    }
    public function Login($argPost) {
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
        $states=array(''=>'Select State');
        $data=$this->db->get_where('states', array('country_id =' => '1'))->result();
        foreach($data as $d)
        {
            $states[$d->id]=$d->name;
        }
        return $states;
    }
    
    /*
     * Get Cities
     */
    public function getCIties($argID)
    {
        $cities=array();
        $data=$this->db->get_where('cities', array('state_id =' => $argID))->result();
        return $data;
    }
 
    /*
     * Get Cities All New Added Code By Siddhant
     */
    public function getCitiesAll($argID)
    {
        $cities=array();
        $data=$this->db->get_where('cities', array('state_id =' => $argID))->result();
        //echo $this->db->last_query(); exit;
        foreach($data as $d)
        {
            $cities[$d->id]=$d->name;
        }
        return $cities;
    }
	public function ChangePassword($pass)
    {
        $this->db->set('password',$pass['pass'])  
        ->where( array('id' => $this->session->userdata('USER_ID'))) //which row want to upgrade  
        ->update('gsp_user');
        print_r("Update");
        $this->session->sess_destroy();
        return true;
    }
	function CheckPassword($pass)
	{
		$current = $this->db->select('*')->where( 'id' , $this->session->userdata('USER_ID'))->from('gsp_user')->get()->row()->password;
        if($current == $pass['oldPassword'])
			return true;
		else
			return false;
	}
}
?>
