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
       ->from('users')
       ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))->where('is_submitted', 0)->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $userData = array(
                'USERNAME' => $row->first_name." ".$row->last_name,
                'USER_ID' => $row->id);
            $this->session->set_userdata($userData);
            return true;
        }
        return false;
    }



    public function checkLoginadmin($argPost) {
        $query = $this->db->select('*')
        ->from('users')
        ->where(array('email' => $argPost['email'], 'password' => $argPost['password']))->where('is_admin', 1)->get();
        
         if ($query->num_rows() > 0) {
             $row = $query->row();
             $userData = array(
                 'USERNAME' => $row->first_name." ".$row->last_name,
                 'USER_ID' => $row->id);
             $this->session->set_userdata($userData);
             return true;
         }
         return false;
     }
} 