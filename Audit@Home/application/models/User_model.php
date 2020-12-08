<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

public function UserSubmitted($argPost)
    {
    $msg=''; 
        $query = $this->db->select('a.*')
            ->from('users As a')   
            ->where(array('a.email' => $argPost['email'], 'a.password' => $argPost['password'], 'a.is_submitted'=>'1'))
            ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
      if($row->is_submitted==0)
      {
        $userData = array(
          'USERNAME' => $row->username,
          'USER_ID' => $row->id,
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
}