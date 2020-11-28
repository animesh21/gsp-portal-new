<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

   /*
    * Constructor 
    */
    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','common_helper'));
        // $this->load->model('forum_model');
        // $this->load->model('user_model');
        $this->load->model('admin_model');
        // $this->load->model('community_model');

        //$this->output->enable_profiler(TRUE);

        if (uri_string() == 'admin/users' || uri_string() == 'admin/users/') {
            redirect('admin/users/Student');
        }
    }
    
	/****************************************************/
	/****************************************************/
	public function index()
	{

        $this->load->view('admin/welcome');
    }

    public function audithome($user_type = 'Student', $limit_offset = 0){
        // if the user is not admin, redirect to base url
        $admin_logged_in = $this->session->userdata('admin_logged_in');
        if (empty($admin_logged_in)) {
            // redirect('Admin');
            // return;
        }
        // create the data object
        $data = new stdClass();
        $data->page_title = $user_type.' Audit@Home';
        $data->admin_logged_in = $admin_logged_in;
        $total_row = $this->admin_model->get_users_total_count($user_type);
        $data->user_data_list = "";        
        $all_user_data = $this->admin_model->get_usershome($user_type, $limit, $limit_offset);
         $s_no=1;
        foreach ($all_user_data as $row) {
            $schoolName='';
            if(is_numeric($row->school_name)){ $schoolName = get_schoolName_gsp($row->school_name);}else{$schoolName = $row->school_name;}
            $data->user_data_list .= "<tr>
                                          <td>$s_no</td>
                                          <td>$row->date_of_birth</td>
                                          <td>$row->first_name $row->last_name</td>
                                          <td>$row->email</td>
                                          <td>$row->password</td>
                                          <td>$row->grade</td>
                                          <td>$row->user_total_point</td>
                                          <td>$row->school_name</td>
                                          <td>$schoolName</td>
                                          <td>$row->pincode</td>
                                          <td>".get_state_gsp($row->user_state_id)."</td>
                                          <td>".get_city_gsp($row->city)."</td>
                                          <td><span style='display:none'>".date('yyyy-mm-dd, H:i a', strtotime($row->created_at))."</span>".date('d-M-y, g:i a', strtotime($row->created_at))."</td>
                                          <td>$row->gender</td>
                                          <td>
                                          <a href='" . base_url("admin/editStudent?id=$row->id")."' class='btn btn-primary'>Edit Record</a>
                                          <a href='" . base_url("admin/disabled?id=$row->id")."' class='btn btn-danger'>Make School Disable</a>                                     
                                          <a href='#' class='btn btn-success'>Zip</a>
                                          <a href='" . base_url("admin/activity/$row->id/0") . "' class='btn btn-info'>Activities</a>
                                          </td>
                                    </tr>";
            $s_no++;
        }
 

        $this->load->view('header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('footer', $data);
    




    }




}