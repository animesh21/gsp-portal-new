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
    public function checkAuth($argPost) {
        $query = $this->db->select('*')
                ->from('tbl_admin')
                ->where(array('password' => $argPost['password'], 'status' => '1'))
                ->get();
        if ($query->num_rows() == 1) {
            
            return true;
        }
        return false;
    }

}
