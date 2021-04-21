<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * Check Login function
     */
    public function checkLogin($argPost) {
        $query = $this->db->select('*')
                ->from('tbl_admin')
                ->where(array('email' => $argPost['email'], 'password' => $argPost['password'], 'status' => '0'))
                ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $userData = array(
                'ADMIN_USERNAME' => $row->username,
                'ADMIN_ID' => $row->id,
            );
            $this->session->set_userdata($userData);
            return true;
        }
        return false;
    }
    
    /*
     * Check Auth for delete record
     */
    public function checkAuth($argPassword,$argUserId) {
        $query = $this->db->select('*')
                ->from('tbl_admin')
                ->where('password=',$argPassword)
				->where('status=','1')
                ->get();
        if ($query) 
		{
		   $this->db->delete("gsp_school",array("userid"=>$argUserId));
		   $this->db->delete("gsp_user",array("id"=>$argUserId));
		   $this->db->delete("gsp_answers",array("userid"=>$argUserId));
		   echo $this->db->last_query();
        }
    }
	
	
	public function checkAuth_unable($argPassword,$argUserId) {
		
		 if($argPassword=="CSE@12345")
		 {
			 $this->db->where('userid',$argUserId);
	         $this->db->update("gsp_school",array("make_school_disabled"=>"1"));
			 
		    return true;
		 }else
			{
				return false;
			}
        
  }
	
	public function checkAuth_unable1($argPassword,$argUserId) {
		
		 if($argPassword=="CSE@12345")
		 {
			 $this->db->where('userid',$argUserId);
	         $this->db->update("gsp_school",array("make_school_disabled"=>"0"));
			 
		    return true;
		 }else
			{
				return false;
			}
        
  }
	
}
