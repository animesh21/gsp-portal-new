<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * Get School Data
     */

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
//                        ->where('YEAR(a.date_added)', 2017)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }

    /*
     * Generate Excel Data
     */

    public function getExcelData() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }

    /*
     * Get School By Id
     */

    public function getSchoolById($argID) {
        return $this->db->get_where('gsp_school', array('id' => $argID))->row();
    }

    /*
     * Get Data By State
     */

    public function getDataSearch($argID) {
        return $this->db->select('a.*, b.name AS state_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->where('a.state', $argID)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
    
    
    /*
     * Generate Excel Data
     */

    public function getExcelDataByState($argID) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('a.state', $argID)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }

}
