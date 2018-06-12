<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }

	public function getQuestion($argPost) {
        $query = $this->db->select('*')
                ->from('gsp_school')
                ->where(array('userid' => $argPost['userid'],'type' => $argPost['type']))
                ->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $school = array(
                'name' => $row->name,
                'address1' => $row->address1,
                'address2' => $row->address2,
                'country' => $row->country,
                'state' => $row->state,
                'district' => $row->district,
                'city' => $row->city,
                'pincode' => $row->pincode,
                'std' => $row->std,
                'telephone' => $row->telephone,
                'country_code' => $row->country_code,
                'schoolemail' => $row->schoolemail,
                'principle_name' => $row->principle_name,
                'mobile' => $row->mobile,
                'coname' => $row->coname,
                'coemail' => $row->coemail,
                'comobile' => $row->comobile
                
            );
            
            return $school;
        }
        return $school = array("name"=>"Sunil");
    }
}
?>
