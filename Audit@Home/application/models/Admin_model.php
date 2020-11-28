<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin_model class.
 * 
 * @extends CI_Model
 */
class Admin_model extends CI_Model {

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct() {

        parent::__construct();
        $this->load->database();
    }

    /**
     * update_user_rights function.
     * 
     * @access public
     * @param int $user_id
     * @param bool $is_admin
     * @param bool $is_moderator
     * @return bool
     */
    public function update_user_rights($user_id, $is_admin, $is_moderator) {

        $data = array(
            'is_admin' => $is_admin,
            'is_moderator' => $is_moderator,
            'updated_at' => date('Y-m-j H:i:s'),
            'updated_by' => $_SESSION['user_id'],
        );

        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

    /**
     * resolve_user_login function.
     * 
     * @access public
     * @param string $username
     * @param string $password
     * @return bool true on success, false on failure
     */
    public function resolve_user_login($useremail, $password) {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('email', $useremail);
        $this->db->where('password', $password);
//        $hash = $this->db->get()->row('password');
        //return $this->verify_password_hash($password, $hash);
        if ($this->db->get()->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * This function will save all user login details in session for use later.
     *
     * * @param array $session_data
     */
    function create_admin_user_session($session_data = array()) {
        $CI = &get_instance();
        $CI->session->set_userdata('admin_logged_in', $session_data);
    }

    public function is_admin($useremail) {

        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email', $useremail);
        $this->db->where('is_admin', 1);
        $id = $this->db->get()->row('id');

        return $id;
    }

    public function get_users($user_type = 'Student', $limit, $limit_offset) {
        $this->db->select('*');
        $this->db->from('users u');
        $this->db->where('u.user_type', $user_type);
        // $this->db->where('u.is_deleted', 0);
        $this->db->order_by('u.created_at', 'DESC');
        $this->db->limit($limit, $limit_offset);
        return $this->db->get()->result();
    }
    
    public function get_usershome($user_type = 'Student', $limit, $limit_offset) {
        $this->db->select('*');
        $this->db->from('users u');
        $this->db->where('u.user_type', $user_type);
        $this->db->where('u.is_deleted', 0);
        $this->db->order_by('u.created_at', 'DESC');
        $this->db->limit($limit, $limit_offset);
        return $this->db->get()->result();
    }

    





    /**
     * Get total count of user with user type
     * 
     * @param type $user_type 
     * @return type
     */
    public function get_users_total_count($user_type = 'Student') {
        $this->db->select('u.id');
        $this->db->from('users u');
        $this->db->where('u.user_type', $user_type);
        return $this->db->get()->num_rows();
    }

    public function get_community_activity($user, $limit, $limit_offset = 0) {

        $this->db->select('uact.*,usr.first_name,usr.last_name,usr.avatar,usr.gender,usr.user_type,usr.date_of_birth,usr.school_name,usr.school_address,usr.user_state_id,usr.city,mat.activity_type_name,mad.declaration_short_title', false);
        $this->db->from('users_activities as uact');
        $this->db->join('users as usr', 'uact.activity_user_id = usr.id', 'left');
        $this->db->join('master_activity_type as mat', 'uact.activity_type_id = mat.activity_type_id', 'left');
        $this->db->join('master_declaration as mad', 'uact.activity_table_id = mad.declaration_id', 'left');
        if ($user != 'all') {
            $this->db->where('uact.activity_user_id', $user);
        }
        $this->db->order_by('uact.activity_created_at', 'DESC');

        $this->db->limit($limit, $limit_offset);

        return $this->db->get()->result();
    }

    public function get_community_activity_total_count($user) {
        $this->db->select('uact.activity_id', false);
        $this->db->from('users_activities as uact');
        if ($user != 'all') {
            $this->db->where('uact.activity_user_id', $user);
        }
        return $this->db->get()->num_rows();
    }

    public function get_all_nomitations($limit, $limit_offset = 0) {		
		$this->db->select('nms.*,usr.user_type,usr.date_of_birth,usr.user_state_id,usr.city, usr.email as useremail, CONCAT(usr.first_name, " ",usr.first_name) as user_name' , false);
		$this->db->from('nominations as nms');
		$this->db->join('users as usr', 'nms.user_id = usr.id','left');	
                $this->db->order_by('nms.created_at', 'DESC');
                $this->db->limit($limit, $limit_offset);
               // echo $this->db->last_query();
		return $this->db->get()->result();
    }
    
    public function get_all_nomitations_total_count() {		
		$this->db->select('nms.id', false);
		$this->db->from('nominations as nms');
		return $this->db->get()->num_rows();
    }
}
