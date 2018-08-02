<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_total extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->helper('common_helper');
    }

    public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }
    
	public function air() {
	ini_set('memory_limit', '-1');
	$uArray = $this->db->select('*')->from('gsp_school')->where("progress=","100")->get()->result_array();
	$points=array();
	$arr = array(
	    '1' => 'Day Scholar',
	    '2' => 'Day Boarding',
	    '3' => 'Residential',
	    '4' => 'Day Scholar + Day Boarding',
	    '5' => 'Day Boarding + Residential',
	    '6' => 'Day Scholar + Residential',
	    '7' => 'Day Scholar + Day Boarding + Residential'
	);
	$shifts = array(
	    '1' => 'Morning',
	    '2' => 'Evening',
	    '3' => 'Both',
	);
	$arrBoard = array(
	    '1' => 'State board of education',
	    '2' => 'Central Board of Secondary Education',
	    '3' => 'Indian Certificate of Secondary Education',
	    '4' => 'International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination',
	    '5' => 'Others'
	);
	$area = array(
	    '1' => 'Urban Area',
	    '2' => 'Rural Area',
	);
	$type_aid = array(
	    '1' => 'Government School',
	    '2' => 'Government – Aided School',
	    '3' => 'Private School',
	);
	for($i=0; $i<count($uArray); $i++)
	{
	     $vale = (getFiled('Q1S1', $uArray[$i]['id']) != '') ? getFiled('Q1S1', $uArray[$i]['id']) : "";
	     $val_shift = (getFiled('Q2S1', $uArray[$i]['id']) != '') ? getFiled('Q2S1', $uArray[$i]['id']) : "";
	    $val_board = (getFiled('Q3G1', $uArray[$i]['id']) != '') ? getFiled('Q3G1', $uArray[$i]['id']) : "";
	    $val_area=(getFiled('Q8G1', $uArray[$i]['id']) != '') ? getFiled('Q8G1', $uArray[$i]['id']) : "";
	    $val_aid=(getFiled('Q9G1', $uArray[$i]['id']) != '') ? getFiled('Q9G1', $uArray[$i]['id']) : "";
		$arrPoints = array();
	$Q3_b_CNG = "";
	$Q3_b_ELE_BIO = "";
	$Q3_b_LPG = "";
	$Q3_b_PETROL = "";
	$no_of_vehicle = "";
	   $points[$i]=array(
	    'userid'=>$uArray[$i]['userid'],
		'school_id' => $uArray[$i]['id'],
		'name' => $uArray[$i]['name'],
		'address1' => $uArray[$i]['address1'],
		'address2' => $uArray[$i]['address2'],
		'country' => 'India',
		'state' => $uArray[$i]['state'],
		'district' => $uArray[$i]['district'],
		'city' => $uArray[$i]['city'],
		'pincode' => $uArray[$i]['pincode'],
		'isd' => '91',
		'std' => $uArray[$i]['std'],
		'landline' => $uArray[$i]['telephone'],
		'mobile' => $uArray[$i]['mobile'],
		'principal' => $uArray[$i]['principle_name'],
		'codinator' => $uArray[$i]['coname'],
		'codinator_mail' => $uArray[$i]['coemail'],
		'password' => $uArray[$i]['password'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'codinator_mobile' => $uArray[$i]['comobile'],
		'category' => ($vale != '') ? $arr[$vale] : "",
		'shifts' => ($val_shift != '') ? $shifts[$val_shift] : "",
		'lowest_level' => (getFiled('Q1G1', $uArray[$i]['id']) != '') ? getFiled('Q1G1', $uArray[$i]['id']) : "",
		'higest_level' => (getFiled('Q1G2', $uArray[$i]['id']) != '') ? getFiled('Q1G2', $uArray[$i]['id']) : "",
		'gender' => '',
		'educatio_board' => ($val_board != '') ? $arrBoard[$val_board] : "",
		'population' => (getFiled('Q4G4S3', $uArray[$i]['id']) != '') ? getFiled('Q4G4S3', $uArray[$i]['id']) : "",
		'students' => (getFiled('Q4G1S3', $uArray[$i]['id']) != '') ? getFiled('Q4G1S3', $uArray[$i]['id']) : "",
		'teachers' => (getFiled('Q4G2S3', $uArray[$i]['id']) != '') ? getFiled('Q4G2S3', $uArray[$i]['id']) : "",
		'nonteachers' => (getFiled('Q4G3S3', $uArray[$i]['id']) != '') ? getFiled('Q4G3S3', $uArray[$i]['id']) : "",
		'male' => (getFiled('Q4G4S1', $uArray[$i]['id']) != '') ? getFiled('Q4G4S1', $uArray[$i]['id']) : "",
		'female' => (getFiled('Q4G4S2', $uArray[$i]['id']) != '') ? getFiled('Q4G4S2', $uArray[$i]['id']) : "",
		'visitor' => (getFiled('Q5G1', $uArray[$i]['id']) != '') ? getFiled('Q5G1', $uArray[$i]['id']) : "",
		'working_days' => (getFiled('Q6G1', $uArray[$i]['id']) != '') ? getFiled('Q6G1', $uArray[$i]['id']) : "",
		'audit_period' => (getFiled('Q7G1', $uArray[$i]['id']) != '') ? getFiled('Q7G1', $uArray[$i]['id']) : "",
		'location' => ($val_area != '') ? $area[$val_area] : "",
		'aid' => ($val_aid != '') ? $type_aid[$val_aid] : "",
	   
	   'Q4A1' => ($this->getFiled('Q4A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4A1', $uArray[$i]['userid']) : 0,
		'Q5A110S2' => ($this->getFiled('Q5A110S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A110S2', $uArray[$i]['userid']) : 0,
		'Q6A1' => ($this->getFiled('Q6A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A1', $uArray[$i]['userid']) : 0,
		'Q6A2S1T1' => ($this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) : 0,
		'Q6A2S1T2' => ($this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) : 0,
		'Q6A2S1T3' => ($this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) : 0,
		'Q6A2S1T4' => ($this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) : 0,
		'Q6A2S1T5' => ($this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) : 0,
		'Q6A2S1T6' => ($this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) : 0,
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : 0,
		'Q6A2S3D1' => ($this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) : 0,
		'Q6A2S3P1' => ($this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) : 0,
		'Q6A2S3L1' => ($this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) : 0,
		'Q6A2S3C1' => ($this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) : 0,
		'Q6A2S3E1' => ($this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) : 0,
		'Q6A2S3H1' => ($this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) : 0,
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : 0,
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : 0,
		'total_cars' => $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H2', $uArray[$i]['userid']),
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : 0,
		'Q6A2S3D2' => ($this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) : 0,
		'Q6A2S3P2' => ($this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) : 0,
		'Q6A2S3L2' => ($this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) : 0,
		'Q6A2S3C2' => ($this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) : 0,
		'Q6A2S3E2' => ($this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) : 0,
		'Q6A2S3H2' => ($this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) : 0,
		'total_vans' => $this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3B3', $uArray[$i]['userid']),
		'Q6A2S3D3' => ($this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) : 0,
		'Q6A2S3P3' => ($this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) : 0,
		'Q6A2S3L3' => ($this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) : 0,
		'Q6A2S3C3' => ($this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) : 0,
		'Q6A2S3E3' => ($this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) : 0,
		'Q6A2S3H3' => ($this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) : 0,
		'Q6A2S3B3' => ($this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) : 0,
		'total_other' => $this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3B4', $uArray[$i]['userid']),
		'Q6A2S3D4' => ($this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) : 0,
		'Q6A2S3P4' => ($this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) : 0,
		'Q6A2S3L4' => ($this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) : 0,
		'Q6A2S3C4' => ($this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) : 0,
		'Q6A2S3E4' => ($this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) : 0,
		'Q6A2S3H4' => ($this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) : 0,
		'Q6A2S3B4' => ($this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) : 0,
		'total_disel' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : 0,
		'total_petrol' => ($this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) : 0,
		'total_lpg' => ($this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) : 0,
		'total_cng' => ($this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) : 0,
		'total_hybrid' => ($this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) : 0,
		'total_electric' => ($this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) : 0,
		'total_biofuel' => ($this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) : 0,
		'Q6A3' => ($this->getFiled('Q6A3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A3', $uArray[$i]['userid']) : 0,
		'Q6A4S1' => ($this->getFiled('Q6A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A4S1', $uArray[$i]['userid']) : 0,
		'Q7A1S1' => ($this->getFiled('Q7A1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S1', $uArray[$i]['userid']) : 0,
		'Q7A1S2' => ($this->getFiled('Q7A1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S2', $uArray[$i]['userid']) : 0,
		'Q7A1S3' => ($this->getFiled('Q7A1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S3', $uArray[$i]['userid']) : 0,
		'Q7A1S4' => ($this->getFiled('Q7A1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S4', $uArray[$i]['userid']) : 0,
		'Q7A2S1' => ($this->getFiled('Q7A2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S1', $uArray[$i]['userid']) : 0,
		'Q7A2S2' => ($this->getFiled('Q7A2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S2', $uArray[$i]['userid']) : 0,
		'Q7A2S3' => ($this->getFiled('Q7A2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S3', $uArray[$i]['userid']) : 0,
		'Q7A2S4' => ($this->getFiled('Q7A2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S4', $uArray[$i]['userid']) : 0,
		'Q7A3S1' => ($this->getFiled('Q7A3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S1', $uArray[$i]['userid']) : 0,
		'Q7A3S2' => ($this->getFiled('Q7A3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S2', $uArray[$i]['userid']) : 0,
		'Q7A3S3' => ($this->getFiled('Q7A3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S3', $uArray[$i]['userid']) : 0,
		'Q7A3S4' => ($this->getFiled('Q7A3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S4', $uArray[$i]['userid']) : 0,
		'Q7A4S1' => ($this->getFiled('Q7A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S1', $uArray[$i]['userid']) : 0,
		'Q7A4S2' => ($this->getFiled('Q7A4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S2', $uArray[$i]['userid']) : 0,
		'Q7A4S3' => ($this->getFiled('Q7A4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S3', $uArray[$i]['userid']) : 0,
		'Q7A4S4' => ($this->getFiled('Q7A4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S4', $uArray[$i]['userid']) : 0,
		'Q7A5S1' => ($this->getFiled('Q7A5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S1', $uArray[$i]['userid']) : 0,
		'Q7A5S2' => ($this->getFiled('Q7A5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S2', $uArray[$i]['userid']) : 0,
		'Q7A5S3' => ($this->getFiled('Q7A5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S3', $uArray[$i]['userid']) : 0,
		'Q7A5S4' => ($this->getFiled('Q7A5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S4', $uArray[$i]['userid']) : 0,
		'Q7A6S1' => ($this->getFiled('Q7A6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S1', $uArray[$i]['userid']) : 0,
		'Q7A6S2' => ($this->getFiled('Q7A6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S2', $uArray[$i]['userid']) : 0,
		'Q7A6S3' => ($this->getFiled('Q7A6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S3', $uArray[$i]['userid']) : 0,
		'Q7A6S4' => ($this->getFiled('Q7A6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S4', $uArray[$i]['userid']) : 0,
		'Q7A7S1' => ($this->getFiled('Q7A7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S1', $uArray[$i]['userid']) : 0,
		'Q7A7S2' => ($this->getFiled('Q7A7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S2', $uArray[$i]['userid']) : 0,
		'Q7A7S3' => ($this->getFiled('Q7A7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S3', $uArray[$i]['userid']) : 0,
		'Q7A7S4' => ($this->getFiled('Q7A7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S4', $uArray[$i]['userid']) : 0,
		'Q7A8S1' => ($this->getFiled('Q7A8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S1', $uArray[$i]['userid']) : 0,
		'Q7A8S2' => ($this->getFiled('Q7A8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S2', $uArray[$i]['userid']) : 0,
		'Q7A8S3' => ($this->getFiled('Q7A8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S3', $uArray[$i]['userid']) : 0,
		'Q7A8S4' => ($this->getFiled('Q7A8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S4', $uArray[$i]['userid']) : 0,
		'Q7A9S1' => ($this->getFiled('Q7A9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S1', $uArray[$i]['userid']) : 0,
		'Q7A9S2' => ($this->getFiled('Q7A9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S2', $uArray[$i]['userid']) : 0,
		'Q7A9S3' => ($this->getFiled('Q7A9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S3', $uArray[$i]['userid']) : 0,
		'Q7A9S4' => ($this->getFiled('Q7A9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S4', $uArray[$i]['userid']) : 0,
		'Q7A10S1' => ($this->getFiled('Q7A10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S1', $uArray[$i]['userid']) : 0,
		'Q7A10S2' => ($this->getFiled('Q7A10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S2', $uArray[$i]['userid']) : 0,
		'Q7A10S3' => ($this->getFiled('Q7A10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S3', $uArray[$i]['userid']) : 0,
		'Q7A10S4' => ($this->getFiled('Q7A10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S4', $uArray[$i]['userid']) : 0,
		'Q7A11S1' => ($this->getFiled('Q7A11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S1', $uArray[$i]['userid']) : 0,
		'Q7A11S2' => ($this->getFiled('Q7A11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S2', $uArray[$i]['userid']) : 0,
		'Q7A11S3' => ($this->getFiled('Q7A11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S3', $uArray[$i]['userid']) : 0,
		'Q7A11S4' => ($this->getFiled('Q7A11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S4', $uArray[$i]['userid']) : 0,
		'Q8A1' => ($this->getFiled('Q8A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8A1', $uArray[$i]['userid']) : 0,
		'Q9A1' => ($this->getFiled('Q9A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A1', $uArray[$i]['userid']) : 0,
		'Q9A2' => ($this->getFiled('Q9A2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A2', $uArray[$i]['userid']) : 0,
		'air_points' => $this->Air_performance($uArray[$i]['userid']),
	   
	   'Q4E1'=>($this->getFiled('Q4E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4E1', $uArray[$i]['userid']) : 0,
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'Q5E1'=>($this->getFiled('Q5E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5E1', $uArray[$i]['userid']) : 0,
		'Q6E1S1'=>($this->getFiled('Q6E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S1', $uArray[$i]['userid']) : 0,
		'Q6E2S1'=>($this->getFiled('Q6E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S1', $uArray[$i]['userid']) : 0,
		'Q6E3S1'=>($this->getFiled('Q6E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S1', $uArray[$i]['userid']) : 0,
		'Q6E4S1'=>($this->getFiled('Q6E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S1', $uArray[$i]['userid']) : 0,
		'Q6E5S1'=>($this->getFiled('Q6E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S1', $uArray[$i]['userid']) : 0,
		'Q6E6S1'=>($this->getFiled('Q6E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S1', $uArray[$i]['userid']) : 0,
		'Q6E7S1'=>($this->getFiled('Q6E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S1', $uArray[$i]['userid']) : 0,
		'Q6E16S1'=>($this->getFiled('Q6E16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S1', $uArray[$i]['userid']) : 0,
		'Q6E8S1'=>($this->getFiled('Q6E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S1', $uArray[$i]['userid']) : 0,
		'Q6E9S1'=>($this->getFiled('Q6E9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S1', $uArray[$i]['userid']) : 0,
		'Q6E10S1'=>($this->getFiled('Q6E10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S1', $uArray[$i]['userid']) : 0,
		'Q6E11S1'=>($this->getFiled('Q6E11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S1', $uArray[$i]['userid']) : 0,
		'Q6E12S1'=>($this->getFiled('Q6E12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S1', $uArray[$i]['userid']) : 0,
		'Q6E13S1'=>($this->getFiled('Q6E13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S1', $uArray[$i]['userid']) : 0,
		'Q6E14S1'=>($this->getFiled('Q6E14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S1', $uArray[$i]['userid']) : 0,
		'Q6E1S2'=>($this->getFiled('Q6E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S2', $uArray[$i]['userid']) : 0,
		'Q6E2S2'=>($this->getFiled('Q6E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S2', $uArray[$i]['userid']) : 0,
		'Q6E3S2'=>($this->getFiled('Q6E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S2', $uArray[$i]['userid']) : 0,
		'Q6E4S2'=>($this->getFiled('Q6E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S2', $uArray[$i]['userid']) : 0,
		'Q6E5S2'=>($this->getFiled('Q6E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S2', $uArray[$i]['userid']) : 0,
		'Q6E6S2'=>($this->getFiled('Q6E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S2', $uArray[$i]['userid']) : 0,
		'Q6E7S2'=>($this->getFiled('Q6E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S2', $uArray[$i]['userid']) : 0,
		'Q6E16S2'=>($this->getFiled('Q6E16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S2', $uArray[$i]['userid']) : 0,
		'Q6E8S2'=>($this->getFiled('Q6E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S2', $uArray[$i]['userid']) : 0,
		'Q6E9S2'=>($this->getFiled('Q6E9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S2', $uArray[$i]['userid']) : 0,
		'Q6E10S2'=>($this->getFiled('Q6E10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S2', $uArray[$i]['userid']) : 0,
		'Q6E11S2'=>($this->getFiled('Q6E11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S2', $uArray[$i]['userid']) : 0,
		'Q6E12S2'=>($this->getFiled('Q6E12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S2', $uArray[$i]['userid']) : 0,
		'Q6E13S2'=>($this->getFiled('Q6E13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S2', $uArray[$i]['userid']) : 0,
		'Q6E14S2'=>($this->getFiled('Q6E14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S2', $uArray[$i]['userid']) : 0,
		'Q6E15S2'=>($this->getFiled('Q6E15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E15S2', $uArray[$i]['userid']) : 0,
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		
		
		
		'Q7E2S1'=>($this->getFiled('Q7E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S1', $uArray[$i]['userid']) : 0,
		
		'Q7E2S2'=>($this->getFiled('Q7E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S2', $uArray[$i]['userid']) : 0,
		'Q7E2S3'=>($this->getFiled('Q7E2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S3', $uArray[$i]['userid']) : 0,
		'Q7E3S1'=>($this->getFiled('Q7E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S1', $uArray[$i]['userid']) : 0,
		
		'Q7E3S2'=>($this->getFiled('Q7E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S2', $uArray[$i]['userid']) : 0,
		'Q7E3S3'=>($this->getFiled('Q7E3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S3', $uArray[$i]['userid']) : 0,
		'Q7E4S1'=>($this->getFiled('Q7E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S1', $uArray[$i]['userid']) : 0,
		
		'Q7E4S2'=>($this->getFiled('Q7E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S2', $uArray[$i]['userid']) : 0,
		'Q7E4S3'=>($this->getFiled('Q7E4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S3', $uArray[$i]['userid']) : 0,
		'Q7E5S1'=>($this->getFiled('Q7E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S1', $uArray[$i]['userid']) : 0,
		
		'Q7E5S2'=>($this->getFiled('Q7E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S2', $uArray[$i]['userid']) : 0,
		'Q7E5S3'=>($this->getFiled('Q7E5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S3', $uArray[$i]['userid']) : 0,
		'Q7E6S1'=>($this->getFiled('Q7E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S1', $uArray[$i]['userid']) : 0,
		
		'Q7E6S2'=>($this->getFiled('Q7E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S2', $uArray[$i]['userid']) : 0,
		'Q7E6S3'=>($this->getFiled('Q7E6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S3', $uArray[$i]['userid']) : 0,
		'Q7E7S1'=>($this->getFiled('Q7E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S1', $uArray[$i]['userid']) : 0,
		
		'Q7E7S2'=>($this->getFiled('Q7E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S2', $uArray[$i]['userid']) : 0,
		'Q7E7S3'=>($this->getFiled('Q7E7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S3', $uArray[$i]['userid']) : 0,
		'Q7E8S1'=>($this->getFiled('Q7E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S1', $uArray[$i]['userid']) : 0,
		
		'Q7E8S2'=>($this->getFiled('Q7E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S2', $uArray[$i]['userid']) : 0,
		'Q7E8S3'=>($this->getFiled('Q7E8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S3', $uArray[$i]['userid']) : 0,
	/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,
	*/
	
	
	
		'Q8E1'=>($this->getFiled('Q8E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8E1', $uArray[$i]['userid']) : 0,
		'Q9E1'=>($this->getFiled('Q9E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1', $uArray[$i]['userid']) : 0,
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		'Q9E1S1'=>($this->getFiled('Q9E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1', $uArray[$i]['userid']) : 0,
		'Q9E1S2'=>($this->getFiled('Q9E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S2', $uArray[$i]['userid']) : 0,
		'Q9E1S3'=>($this->getFiled('Q9E1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S3', $uArray[$i]['userid']) : 0,
		'Q9E1S5'=>($this->getFiled('Q9E1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S5', $uArray[$i]['userid']) : 0,
		'Q9E1S4'=>($this->getFiled('Q9E1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S4', $uArray[$i]['userid']) : 0,
		'Q10E1'=>($this->getFiled('Q10E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10E1', $uArray[$i]['userid']) : 0,
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'energy_points'=>$this->getEnergyPoints($uArray[$i]['userid']),
		
	    'Q4F1'=>($this->getFiled('Q4F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4F1', $uArray[$i]['userid']) : 0,
		'Q5F1'=>($this->getFiled('Q5F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1', $uArray[$i]['userid']) : 0,
		'Q5F1S1'=>($this->getFiled('Q5F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S1', $uArray[$i]['userid']) : 0,
		'Q5F1S2'=>($this->getFiled('Q5F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S2', $uArray[$i]['userid']) : 0,
		'Q5F1S3'=>($this->getFiled('Q5F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S3', $uArray[$i]['userid']) : 0,
		'Q5F1S4'=>($this->getFiled('Q5F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S4', $uArray[$i]['userid']) : 0,
		'Q5F2'=>($this->getFiled('Q5F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F2', $uArray[$i]['userid']) : 0,
		'Q6F2S1'=>($this->getFiled('Q6F2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S1', $uArray[$i]['userid']) : 0,
		'Q6F2S2'=>($this->getFiled('Q6F2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S2', $uArray[$i]['userid']) : 0,
		'Q6F2S3'=>($this->getFiled('Q6F2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S3', $uArray[$i]['userid']) : 0,
		'Q6F3S1'=>($this->getFiled('Q6F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S1', $uArray[$i]['userid']) : 0,
		'Q6F3S2'=>($this->getFiled('Q6F3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S2', $uArray[$i]['userid']) : 0,
		'Q6F3S3'=>($this->getFiled('Q6F3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S3', $uArray[$i]['userid']) : 0,
		'Q6F4S1'=>($this->getFiled('Q6F4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S1', $uArray[$i]['userid']) : 0,
		'Q6F4S2'=>($this->getFiled('Q6F4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S2', $uArray[$i]['userid']) : 0,
		'Q6F4S3'=>($this->getFiled('Q6F4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S3', $uArray[$i]['userid']) : 0,
		'Q6F5S1'=>($this->getFiled('Q6F5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S1', $uArray[$i]['userid']) : 0,
		'Q6F5S2'=>($this->getFiled('Q6F5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S2', $uArray[$i]['userid']) : 0,
		
		
		'Q6F5S3'=>($this->getFiled('Q6F5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S3', $uArray[$i]['userid']) : 0,
		'Q6F6S1'=>($this->getFiled('Q6F6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S1', $uArray[$i]['userid']) : 0,
		'Q6F6S2'=>($this->getFiled('Q6F6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S2', $uArray[$i]['userid']) : 0,
		'Q6F6S3'=>($this->getFiled('Q6F6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S3', $uArray[$i]['userid']) : 0,
		
		
		'Q6F7S1'=>($this->getFiled('Q6F7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S1', $uArray[$i]['userid']) : 0,
		'Q6F7S2'=>($this->getFiled('Q6F7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S2', $uArray[$i]['userid']) : 0,
		'Q6F7S3'=>($this->getFiled('Q6F7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S3', $uArray[$i]['userid']) : 0,
		
		
		'Q6F8S1'=>($this->getFiled('Q6F8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S1', $uArray[$i]['userid']) : 0,
		'Q6F8S2'=>($this->getFiled('Q6F8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S2', $uArray[$i]['userid']) : 0,
		'Q6F8S3'=>($this->getFiled('Q6F8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S3', $uArray[$i]['userid']) : 0,
		
		
		'Q6F9S1'=>($this->getFiled('Q6F9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S1', $uArray[$i]['userid']) : 0,
		'Q6F9S2'=>($this->getFiled('Q6F9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S2', $uArray[$i]['userid']) : 0,
		'Q6F9S3'=>($this->getFiled('Q6F9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S3', $uArray[$i]['userid']) : 0,
		
		
		'Q6F10S1'=>($this->getFiled('Q6F10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S1', $uArray[$i]['userid']) : 0,
		'Q6F10S2'=>($this->getFiled('Q6F10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S2', $uArray[$i]['userid']) : 0,
		'Q6F10S3'=>($this->getFiled('Q6F10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S3', $uArray[$i]['userid']) : 0,
		
		
		
		
		'Q7F1'=>($this->getFiled('Q7F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1', $uArray[$i]['userid']) : 0,
		'Q7F1S1'=>($this->getFiled('Q7F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S1', $uArray[$i]['userid']) : 0,
		'Q7F1S2'=>($this->getFiled('Q7F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S2', $uArray[$i]['userid']) : 0,
		'Q7F1S3'=>($this->getFiled('Q7F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S3', $uArray[$i]['userid']) : 0,
		'Q7F1S4'=>($this->getFiled('Q7F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S4', $uArray[$i]['userid']) : 0,
		'Q7F1S5'=>($this->getFiled('Q7F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S5', $uArray[$i]['userid']) : 0,
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'Q7F3S1'=>($this->getFiled('Q7F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F3S1', $uArray[$i]['userid']) : 0,
		
		
		
		
		'Q8F1'=>($this->getFiled('Q8F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1', $uArray[$i]['userid']) : 0,
		'Q8F1S1'=>($this->getFiled('Q8F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S1', $uArray[$i]['userid']) : 0,
		'Q8F1S2'=>($this->getFiled('Q8F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S2', $uArray[$i]['userid']) : 0,
		'Q8F1S3'=>($this->getFiled('Q8F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S3', $uArray[$i]['userid']) : 0,
		'Q8F1S4'=>($this->getFiled('Q8F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S4', $uArray[$i]['userid']) : 0,
		'Q8F1S5'=>($this->getFiled('Q8F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S5', $uArray[$i]['userid']) : 0,
		
		
		
		'Q9F1'=>($this->getFiled('Q9F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F1', $uArray[$i]['userid']) : 0,
		'Q9F2'=>($this->getFiled('Q9F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F2', $uArray[$i]['userid']) : 0,
		
		
		'Q10F1'=>($this->getFiled('Q10F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F1', $uArray[$i]['userid']) : 0,
		'Q10F2'=>($this->getFiled('Q10F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F2', $uArray[$i]['userid']) : 0,
		
		
		'Q11F1'=>($this->getFiled('Q11F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F1', $uArray[$i]['userid']) : 0,
		'Q11F2'=>($this->getFiled('Q11F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F2', $uArray[$i]['userid']) : 0,
		
		
		'Q11F3'=>($this->getFiled('Q11F3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F3', $uArray[$i]['userid']) : 0,
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		'Q12F1'=>($this->getFiled('Q12F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F1', $uArray[$i]['userid']) : 0,
		'Q12F2'=>($this->getFiled('Q12F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F2', $uArray[$i]['userid']) : 0,
		'Q13F1'=>($this->getFiled('Q13F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F1', $uArray[$i]['userid']) : 0,
		'Q13F2'=>($this->getFiled('Q13F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F2', $uArray[$i]['userid']) : 0,
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'food_points'=>$this->getFoodPoints($uArray[$i]['userid']),
		
	   'Q4L1'=>($this->getFiled('Q4L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L1', $uArray[$i]['userid']) : 0,
		'Q4L2'=>($this->getFiled('Q4L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L2', $uArray[$i]['userid']) : 0,
		'Q4L3'=>($this->getFiled('Q4L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L3', $uArray[$i]['userid']) : 0,
		'Q4L4'=>($this->getFiled('Q4L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L4', $uArray[$i]['userid']) : 0,
		'Q4L5'=>($this->getFiled('Q4L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L5', $uArray[$i]['userid']) : 0,
		'Q4L6'=>($this->getFiled('Q4L6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L6', $uArray[$i]['userid']) : 0,
		'Q4L7'=>($this->getFiled('Q4L7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L7', $uArray[$i]['userid']) : 0,
		'Q4L8'=>($this->getFiled('Q4L8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L8', $uArray[$i]['userid']) : 0,
		'Q4L9'=>($this->getFiled('Q4L9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L9', $uArray[$i]['userid']) : 0,
		'Q4L10'=>($this->getFiled('Q4L10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L10', $uArray[$i]['userid']) : 0,
		'Q4L11'=>($this->getFiled('Q4L11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L11', $uArray[$i]['userid']) : 0,
		'Q4L12'=>($this->getFiled('Q4L12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L12', $uArray[$i]['userid']) : 0,
		'TotalArea'=>$this->getTotalArea($uArray[$i]['userid']),
		
		
		'PercentageArea'=>$this->getPercentageArea($uArray[$i]['userid']),
		
		'Q5L1S3'=>($this->getFiled('Q5L1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S3', $uArray[$i]['userid']) : 0,
		'Q5L1S1'=>($this->getFiled('Q5L1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S1', $uArray[$i]['userid']) : 0,
		'Q5L1S2'=>($this->getFiled('Q5L1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S2', $uArray[$i]['userid']) : 0,
		'Q5L2S3'=>($this->getFiled('Q5L2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S3', $uArray[$i]['userid']) : 0,
		'Q5L2S2'=>($this->getFiled('Q5L2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S2', $uArray[$i]['userid']) : 0,
		'Q5L2S1'=>($this->getFiled('Q5L2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S1', $uArray[$i]['userid']) : 0,
		'Q6L1'=>($this->getFiled('Q6L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6L1', $uArray[$i]['userid']) : 0,
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'land_points'=>$this->getLandPoints($uArray[$i]['userid']),
	   
	  'Q4W1'=>($this->getFiled('Q4W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W1', $uArray[$i]['userid']) : 0,
		'Q4W2'=>($this->getFiled('Q4W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W2', $uArray[$i]['userid']) : 0,
		'Q4W3'=>($this->getFiled('Q4W3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W3', $uArray[$i]['userid']) : 0,
		'Q4W4'=>($this->getFiled('Q4W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W4', $uArray[$i]['userid']) : 0,
		'Q4W5'=>($this->getFiled('Q4W5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W5', $uArray[$i]['userid']) : 0,
		'Q4W6'=>($this->getFiled('Q4W6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W6', $uArray[$i]['userid']) : 0,
		'Q4W7'=>($this->getFiled('Q4W7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W7', $uArray[$i]['userid']) : 0,
		'Q4W8'=>($this->getFiled('Q4W8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W8', $uArray[$i]['userid']) : 0,
		'Q4W9'=>($this->getFiled('Q4W9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W9', $uArray[$i]['userid']) : 0,
		'Q4W10'=>($this->getFiled('Q4W10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W10', $uArray[$i]['userid']) : 0,
		'Q4W11'=>($this->getFiled('Q4W11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W11', $uArray[$i]['userid']) : 0,
		'Q5W1'=>($this->getFiled('Q5W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W1', $uArray[$i]['userid']) : 0,
		'Q6W1'=>($this->getFiled('Q6W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W1', $uArray[$i]['userid']) : 0,
		'Q6W4'=>($this->getFiled('Q6W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W4', $uArray[$i]['userid']) : 0,
		'Q7W1'=>($this->getFiled('Q7W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W1', $uArray[$i]['userid']) : 0,
		'Q7W2'=>($this->getFiled('Q7W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W2', $uArray[$i]['userid']) : 0,
		'Q8W1S1'=>($this->getFiled('Q8W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S1', $uArray[$i]['userid']) : 0,
		'Q8W1S2'=>($this->getFiled('Q8W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S2', $uArray[$i]['userid']) : 0,	
		'Q8W1S3'=>($this->getFiled('Q8W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S3', $uArray[$i]['userid']) : 0,
		'Q8W1S4'=>($this->getFiled('Q8W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S4', $uArray[$i]['userid']) : 0,
		'Q8W1S5'=>($this->getFiled('Q8W1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S5', $uArray[$i]['userid']) : 0,
		'Q8W1S6'=>($this->getFiled('Q8W1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S6', $uArray[$i]['userid']) : 0,
		'Q8W1S7'=>($this->getFiled('Q8W1S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S7', $uArray[$i]['userid']) : 0,
		'Q8W1S8'=>($this->getFiled('Q8W1S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S8', $uArray[$i]['userid']) : 0,
		'Q8W1S9'=>($this->getFiled('Q8W1S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S9', $uArray[$i]['userid']) : 0,
		'Q8W1S10'=>($this->getFiled('Q8W1S10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S10', $uArray[$i]['userid']) : 0,
		'Q8W1S11'=>($this->getFiled('Q8W1S11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S11', $uArray[$i]['userid']) : 0,
		'Q8W2'=>($this->getFiled('Q8W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2', $uArray[$i]['userid']) : 0,
		'Q8W2S1S1'=>($this->getFiled('Q8W2S1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S1S1', $uArray[$i]['userid']) : 0,
		'Q8W2S2S3'=>($this->getFiled('Q8W2S2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S3', $uArray[$i]['userid']) : 0,
		'Q8W2S2S4'=>($this->getFiled('Q8W2S2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S4', $uArray[$i]['userid']) : 0,
		'Q8W2S2S8'=>($this->getFiled('Q8W2S2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S8', $uArray[$i]['userid']) : 0,
		'Q8W2S6'=>($this->getFiled('Q8W2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S6', $uArray[$i]['userid']) : 0,
		'Q8W3S1'=>($this->getFiled('Q8W3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S1', $uArray[$i]['userid']) : 0,
		'Q8W3S2'=>($this->getFiled('Q8W3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S2', $uArray[$i]['userid']) : 0,
		'Q8W3S3'=>($this->getFiled('Q8W3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S3', $uArray[$i]['userid']) : 0,
		'Q8W3S4'=>($this->getFiled('Q8W3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S4', $uArray[$i]['userid']) : 0,	
		'Q8W3S5'=>($this->getFiled('Q8W3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S5', $uArray[$i]['userid']) : 0,
		'Q8W3S6'=>($this->getFiled('Q8W3S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S6', $uArray[$i]['userid']) : 0,
		'Q8W3S7'=>($this->getFiled('Q8W3S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S7', $uArray[$i]['userid']) : 0,
		'Q8W3S8'=>($this->getFiled('Q8W3S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S8', $uArray[$i]['userid']) : 0,
		'Q9W1'=>($this->getFiled('Q9W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9W1', $uArray[$i]['userid']) : 0,
		'Q10W1'=>($this->getFiled('Q10W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10W1', $uArray[$i]['userid']) : 0,
		'Q11W1'=>($this->getFiled('Q11W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11W1', $uArray[$i]['userid']) : 0,
		'Q13W1S1'=>($this->getFiled('Q13W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S1', $uArray[$i]['userid']) : 0,
		'Q13W1S2'=>($this->getFiled('Q13W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S2', $uArray[$i]['userid']) : 0,
		'Q13W1S3'=>($this->getFiled('Q13W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S3', $uArray[$i]['userid']) : 0,
		'Q13W1S4'=>($this->getFiled('Q13W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S4', $uArray[$i]['userid']) : 0,
		'Q14W1'=>($this->getFiled('Q14W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14W1', $uArray[$i]['userid']) : 0,
		'Q15W1'=>($this->getFiled('Q15W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15W1', $uArray[$i]['userid']) : 0,
		'Q16W1'=>($this->getFiled('Q16W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16W1', $uArray[$i]['userid']) : 0,
		'Q21W1'=>($this->getFiled('Q21W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q21W1', $uArray[$i]['userid']) : 0,
		'Q18W1'=>($this->getFiled('Q18W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18W1', $uArray[$i]['userid']) : 0	,
		'Q18W2'=>($this->getFiled('Q18W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18W2', $uArray[$i]['userid']) : 0,
		'Q19W1'=>($this->getFiled('Q19W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W1', $uArray[$i]['userid']) : 0,
		'Q20W1'=>($this->getFiled('Q20W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q20W1', $uArray[$i]['userid']) : 0,
		'Q20W2'=>($this->getFiled('Q20W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q20W2', $uArray[$i]['userid']) : 0,
		'water_points'=>getWaterPoints($uArray[$i]['userid']),
	  
	  
      'Q4Wa1'=>($this->getFiled('Q4Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa1', $uArray[$i]['userid']) : 0,
      'Q4Wa2S1'=>($this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) : 0,
'Q4Wa2S2'=>($this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) : 0,
'Q4Wa2S3'=>($this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) : 0,
'Q4Wa2S5'=>($this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) : 0,
'Q4Wa2'=>($this->getFiled('Q4Wa2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2', $uArray[$i]['userid']) : 0,
'Q5Wa1S1'=>($this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) : 0,
'Q5Wa1S2'=>($this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) : 0,
'Q5Wa1S3'=>($this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) : 0,
'Q5Wa1S4'=>($this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) : 0,
'Q5Wa1S5'=>($this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) : 0,
'Q5Wa2S1'=>($this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) : 0,
'Q5Wa2S2'=>($this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) : 0,
'Q5Wa2S3'=>($this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) : 0,
'Q5Wa2S4'=>($this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) : 0,
'Q5Wa2S5'=>($this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) : 0,
'Q5Wa3S1'=>($this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) : 0,
'Q5Wa3S2'=>($this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) : 0,
'Q5Wa3S3'=>($this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) : 0,
'Q5Wa3S4'=>($this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) : 0,
'Q5Wa3S5'=>($this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) : 0,
'Q5Wa4S1'=>($this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) : 0,
'Q5Wa4S2'=>($this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) : 0,
'Q5Wa4S3'=>($this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) : 0,
'Q5Wa4S4'=>($this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) : 0,
'Q5Wa4S5'=>($this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) : 0,
'Q5Wa5S1'=>($this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) : 0,
'Q5Wa5S2'=>($this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) : 0,
'Q5Wa5S3'=>($this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) : 0,
'Q5Wa5S4'=>($this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) : 0,
'Q5Wa5S5'=>($this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) : 0,
'Q5Wa6S1'=>($this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) : 0,
'Q5Wa6S2'=>($this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) : 0,
'Q5Wa6S3'=>($this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) : 0,
'Q5Wa6S4'=>($this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) : 0,
'Q5Wa6S5'=>($this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) : 0,
'Q5Wa7S1'=>($this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) : 0,
'Q5Wa7S2'=>($this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) : 0,
'Q5Wa7S3'=>($this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) : 0,
'Q5Wa7S4'=>($this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) : 0,
'Q5Wa7S5'=>($this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) : 0,
'Q5Wa8S1'=>($this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) : 0,
'Q5Wa8S2'=>($this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) : 0,
'Q5Wa8S3'=>($this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) : 0,
'Q5Wa8S4'=>($this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) : 0,
'Q5Wa8S5'=>($this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) : 0,
'Q5Wa9S1'=>($this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) : 0,
'Q5Wa9S2'=>($this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) : 0,
'Q5Wa9S3'=>($this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) : 0,
'Q5Wa9S4'=>($this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) : 0,
'Q5Wa9S5'=>($this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) : 0,
'Q5Wa10S1'=>($this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) : 0,
'Q5Wa10S2'=>($this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) : 0,
'Q5Wa10S3'=>($this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) : 0,
'Q5Wa10S4'=>($this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) : 0,
'Q5Wa10S5'=>($this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) : 0,
'Q5Wa11S1'=>($this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) : 0,
'Q5Wa11S2'=>($this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) : 0,
'Q5Wa11S3'=>($this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) : 0,
'Q5Wa11S4'=>($this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) : 0,
'Q5Wa11S5'=>($this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) : 0,
'Q6Wa1S1'=>($this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) : 0,
'Q6Wa1S2'=>($this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) : 0,
'Q6Wa1S3'=>($this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) : 0,

'Q6Wa1S4'=>($this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) : 0,
'Q6Wa1S5'=>($this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) : 0,
'Q6Wa1S6'=>($this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) : 0,
'Q6Wa2S1'=>($this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) : 0,
'Q6Wa2S2'=>($this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) : 0,
'Q6Wa2S3'=>($this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) : 0,
'Q6Wa2S4'=>($this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) : 0,
'Q6Wa2S5'=>($this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) : 0,
'Q6Wa2S6'=>($this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) : 0,
'Q6Wa2S7'=>($this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) : 0,
'Q6Wa2S8'=>($this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) : 0,
'Q6Wa2S9'=>($this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) : 0,
'Q6Wa3S1'=>($this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) : 0,
'Q6Wa3S2'=>($this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) : 0,
'Q6Wa3S3'=>($this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) : 0,
'Q6Wa3S4'=>($this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) : 0,
'Q6Wa4S1'=>($this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) : 0,
'Q6Wa4S2'=>($this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) : 0,
'Q6Wa5S1'=>($this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) : 0,
'Q6Wa5S2'=>($this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) : 0,
'Q6Wa6S1'=>($this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) : 0,
'Q6Wa6S2'=>($this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) : 0,
'Q6Wa7S1'=>($this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) : 0,
'Q6Wa7S2'=>($this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) : 0,
'Q8Wa1'=>($this->getFiled('Q8Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1', $uArray[$i]['userid']) : 0,
'Q8Wa1S1'=>($this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) : 0,
'Q8Wa1S2'=>($this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) : 0,
'Q8Wa1S3'=>($this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) : 0,
'Q8Wa1S4'=>($this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) : 0,
'Q8Wa1S5'=>($this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) : 0,
'Q8Wa1S6'=>($this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) : 0,
'Q8Wa2S1'=>($this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) : 0,
'Q8Wa2S2'=>($this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) : 0,
'Q8Wa2S3'=>($this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) : 0,
'Q8Wa2S4'=>($this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) : 0,
'Q8Wa2S5'=>($this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) : 0,
'Q8Wa2S6'=>($this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) : 0,
'Q8Wa2S7'=>($this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) : 0,
'Q8Wa2S8'=>($this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) : 0,
'Q8Wa2S9'=>($this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) : 0,
'Q8Wa3S1'=>($this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) : 0,
'Q8Wa3S2'=>($this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) : 0,
'Q8Wa3S3'=>($this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) : 0,
'Q8Wa3S4'=>($this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) : 0,
'Q8Wa4S1'=>($this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) : 0,
'Q8Wa4S2'=>($this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) : 0,
'Q8Wa5S1'=>($this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) : 0,
'Q8Wa5S2'=>($this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) : 0,
'Q8Wa6S1'=>($this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) : 0,
'Q8Wa6S2'=>($this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) : 0,
'Q8Wa7S1'=>($this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) : 0,
'Q8Wa7S2'=>($this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) : 0,
'Q9Wa1'=>($this->getFiled('Q9Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa1', $uArray[$i]['userid']) : 0,
'Q9Wa2S4'=>($this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) : 0,
'Q9Wa3'=>($this->getFiled('Q9Wa3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa3', $uArray[$i]['userid']) : 0,
'Q10Wa1'=>($this->getFiled('Q10Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10Wa1', $uArray[$i]['userid']) : 0,
'paper_recycling_procedures'=>($this->getFiled('Q11Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11Wa4S2', $uArray[$i]['userid']) : 0,
'plastic_recycling_procedures'=>($this->getFiled('Q11Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11Wa5S2', $uArray[$i]['userid']) : 0,
'horticultural_waste_recycling_procedures'=>($this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) : 0,
'e_waste_recycling_procedures'=>($this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) : 0,
'hazardous_waste_recycling_procedures'=>($this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) : 0,
'wood_glass_metal_recycling_procedures'=>($this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) : 0,
'Q12Wa2S1'=>($this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) : 0,
'Q12Wa2S2'=>($this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) : 0,
'Q12Wa2S3'=>($this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) : 0,
'Q12Wa2S4'=>($this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) : 0,
'Q12Wa3S1'=>($this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) : 0,
'Q12Wa3S2'=>($this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) : 0,
'Q12Wa3S3'=>($this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) : 0,
'Q12Wa3S4'=>($this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) : 0,
'Q12Wa4S1'=>($this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) : 0,
'Q12Wa4S2'=>($this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) : 0,
'Q12Wa4S3'=>($this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) : 0,
'Q12Wa4S4'=>($this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) : 0,
'Q12Wa5S1'=>($this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) : 0,
'Q12Wa5S2'=>($this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) : 0,
'Q12Wa5S3'=>($this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) : 0,
'Q12Wa5S4'=>($this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) : 0,
'Q12Wa6S1'=>($this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) : 0,
'Q12Wa6S2'=>($this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) : 0,
'Q12Wa6S3'=>($this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) : 0,
'Q12Wa6S4'=>($this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) : 0,
'Q12Wa7S1'=>($this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) : 0,
'Q12Wa7S2'=>($this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) : 0,
'Q12Wa7S3'=>($this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) : 0,
'Q12Wa7S4'=>($this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) : 0,
'Q12Wa8S1'=>($this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) : 0,
'Q12Wa8S2'=>($this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) : 0,
'Q12Wa8S3'=>($this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) : 0,
'Q12Wa8S4'=>($this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) : 0,
'Q12Wa9S1'=>($this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) : 0,
'Q12Wa9S2'=>($this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) : 0,
'Q12Wa9S3'=>($this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) : 0,
'Q12Wa9S4'=>($this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) : 0,
'Q12Wa10S1'=>($this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) : 0,
'Q12Wa10S2'=>($this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) : 0,
'Q12Wa10S3'=>($this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) : 0,
'Q12Wa10S4'=>($this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) : 0,
'Q12Wa11S1'=>($this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) : 0,
'Q12Wa11S2'=>($this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) : 0,
'Q12Wa11S3'=>($this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) : 0,
'Q12Wa11S4'=>($this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) : 0,
'Q12Wa12S1'=>($this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) : 0,
'Q12Wa12S2'=>($this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) : 0,
'Q12Wa12S3'=>($this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) : 0,
'Q12Wa12S4'=>($this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) : 0,
'Q12Wa13S1'=>($this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) : 0,
'Q12Wa13S2'=>($this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) : 0,
'Q12Wa13S3'=>($this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) : 0,
'Q12Wa13S4'=>($this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) : 0,
'Q12Wa14S1'=>($this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) : 0,
'Q12Wa14S2'=>($this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) : 0,
'Q12Wa14S3'=>($this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) : 0,
'Q12Wa14S4'=>($this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) : 0,
'Q12Wa15S1'=>($this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) : 0,
'Q12Wa15S2'=>($this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) : 0,
'Q12Wa15S3'=>($this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) : 0,
'Q12Wa15S4'=>($this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) : 0,
'Q12Wa16S1'=>($this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) : 0,
'Q12Wa16S2'=>($this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) : 0,
'Q12Wa16S3'=>($this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) : 0,
'Q12Wa16S4'=>($this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) : 0,
'Q12Wa17S1'=>($this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) : 0,
'Q12Wa17S2'=>($this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) : 0,
'Q12Wa17S3'=>($this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) : 0,
'Q12Wa17S4'=>($this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) : 0,
'Q12Wa18S1'=>($this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) : 0,
'Q12Wa18S2'=>($this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) : 0,
'Q12Wa18S3'=>($this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) : 0,
'Q12Wa18S4'=>($this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) : 0,
'Q12Wa19S1'=>($this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) : 0,
'Q12Wa19S2'=>($this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) : 0,
'Q12Wa19S3'=>($this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) : 0,
'Q12Wa19S4'=>($this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) : 0,
'Q12Wa20S1'=>($this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) : 0,
'Q12Wa20S2'=>($this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) : 0,
'Q12Wa20S3'=>($this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) : 0,
'Q12Wa20S4'=>($this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) : 0,
'Q12Wa21S1'=>($this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) : 0,
'Q12Wa21S2'=>($this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) : 0,
'Q12Wa21S3'=>($this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) : 0,
'Q12Wa21S4'=>($this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) : 0,
'Q12Wa22S1'=>($this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) : 0,
'Q12Wa22S2'=>($this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) : 0,
'Q12Wa22S3'=>($this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) : 0,
'Q12Wa22S4'=>($this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) : 0,
'Q12Wa23S1'=>($this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) : 0,
'Q12Wa23S2'=>($this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) : 0,
'Q12Wa23S3'=>($this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) : 0,
'Q12Wa23S4'=>($this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) : 0,
'Q12Wa24S1'=>($this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) : 0,
'Q12Wa24S2'=>($this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) : 0,
'Q12Wa24S3'=>($this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) : 0,
'Q12Wa24S4'=>($this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) : 0,
'Q12Wa25S1'=>($this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) : 0,
'Q12Wa25S2'=>($this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) : 0,
'Q12Wa25S3'=>($this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) : 0,
'Q12Wa25S4'=>($this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) : 0,
'Q12Wa26S1'=>($this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) : 0,
'Q12Wa26S2'=>($this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) : 0,
'Q12Wa26S3'=>($this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) : 0,
'Q12Wa26S4'=>($this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) : 0,
'Q12Wa27S1'=>($this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) : 0,
'Q12Wa27S2'=>($this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) : 0,
'Q12Wa27S3'=>($this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) : 0,
'Q12Wa27S4'=>($this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) : 0,
'Q12Wa28S1'=>($this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) : 0,
'Q12Wa28S2'=>($this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) : 0,
'Q12Wa28S3'=>($this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) : 0,
'Q12Wa28S4'=>($this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) : 0,
'Q13Wa1'=>($this->getFiled('Q13Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa1', $uArray[$i]['userid']) : 0,
'Q13Wa2'=>($this->getFiled('Q13Wa2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa2', $uArray[$i]['userid']) : 0,
'Q14Wa1'=>($this->getFiled('Q14Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14Wa1', $uArray[$i]['userid']) : 0,
'Q15Wa1'=>($this->getFiled('Q15Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa1', $uArray[$i]['userid']) : 0,
'Q16Wa1'=>($this->getFiled('Q16Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16Wa1', $uArray[$i]['userid']) : 0,
'Q17Wa1'=>($this->getFiled('Q17Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q17Wa1', $uArray[$i]['userid']) : 0,
'Q18Wa1'=>($this->getFiled('Q18Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa1', $uArray[$i]['userid']) : 0,
'Q19Wa1'=>($this->getFiled('Q19Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19Wa1', $uArray[$i]['userid']) : 0,
'waste_points'=>getWastePoints($uArray[$i]['userid']),
/*'Q1Fe1' => ($this->getFiled('Q1Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe1', $uArray[$i]['userid']) : 0,
		'Q1Fe1_A' => '',
		'Q1Fe1_B' => '',
		'Q1Fe2' => ($this->getFiled('Q1Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe2', $uArray[$i]['userid']) : 0,
		'Q1Fe2_A' => '',
		'Q1Fe3' => ($this->getFiled('Q1Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe4' => ($this->getFiled('Q1Fe4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe4', $uArray[$i]['userid']) : 0,
		'Q1Fe4_B' => '',
		'Q1Fe5' => '',
		'content' => ($this->getFiled('Q8Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe1', $uArray[$i]['userid']) : 0,
		'task_distribute' => ($this->getFiled('Q8Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe2', $uArray[$i]['userid']) : 0,
		'question_sequence' => ($this->getFiled('Q8Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe7_A' => ($this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe8' => ($this->getFiled('Q1Fe8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe8', $uArray[$i]['userid']) : 0,
		'Q1Fe9' => ($this->getFiled('Q1Fe9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe9', $uArray[$i]['userid']) : 0,
		'Q1Fe10' => ($this->getFiled('Q1Fe10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe10', $uArray[$i]['userid']) : 0,
		'Q1Fe10_A' => '',
		'Q1Fe11' => ($this->getFiled('Q1Fe11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe11', $uArray[$i]['userid']) : 0,
		'Q1Fe12' => ($this->getFiled('Q1Fe12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe12', $uArray[$i]['userid']) : 0
*/

);
	}
	echo '<pre>'; print_r($points);
	$this->db->insert_batch('tbl_total',$points,'userid');
    }
 
       function getWastePoints($argUserID) {
        $waste_points = array();
        //2(a) How many categories does your school segregate waste into? 
        $total_two_bins = (getFiled('Q5Wa11S3', $argUserID) != '') ? getFiled('Q5Wa11S3', $argUserID) : 0;
        $total_three_bins = (getFiled('Q5Wa11S4', $argUserID) != '') ? getFiled('Q5Wa11S4', $argUserID) : 0;
        $total_collection_point = (getFiled('Q5Wa11S5', $argUserID) != '') ? getFiled('Q5Wa11S5', $argUserID) : 0;

        $total_with_no_bins = (getFiled('Q5Wa11S1', $argUserID) != '') ? getFiled('Q5Wa11S1', $argUserID) : 0;
        $total_with_one_bin = (getFiled('Q5Wa11S2', $argUserID) != '') ? getFiled('Q5Wa11S2', $argUserID) : 0;
        $total_with_three_bin = (getFiled('Q5Wa11S4', $argUserID) != '') ? getFiled('Q5Wa11S4', $argUserID) : 0;
        if ($total_collection_point == ($total_three_bins + $total_two_bins)) {
            $waste_points['Q2_segregate'] = 10;
        } else if ($total_collection_point == ($total_with_no_bins + $total_with_one_bin)) {
            $waste_points['Q2_segregate'] = 0;
        } else if ($total_two_bins == $total_collection_point) {
            $waste_points['Q2_segregate'] = 10;
        } else if ($total_with_three_bin == $total_collection_point) {
            $waste_points['Q2_segregate'] = 10;
        } else if (($total_two_bins + $total_with_three_bin) < $total_collection_point) {
            $waste_points['Q2_segregate'] = ($total_two_bins + $total_with_three_bin) * 10 / $total_collection_point;
        }

        ///Point Calculation Water recycled
        //Total Amount of Generated Waste
        //Biodigradble
        $A = (getFiled('Q6Wa1S5', $argUserID) != '') ? getFiled('Q6Wa1S5', $argUserID) : 0;
        //Dry/Recycalbe
        $B = (getFiled('Q6Wa2S8', $argUserID) != '') ? getFiled('Q6Wa2S8', $argUserID) : 0;
        //Domestic
        $C = (getFiled('Q6Wa3S3', $argUserID) != '') ? getFiled('Q6Wa3S3', $argUserID) : 0;
        //E-Watse
        $D = (getFiled('Q6Wa4S1', $argUserID) != '') ? getFiled('Q6Wa4S1', $argUserID) : 0;
        //Biomedical waste
        $E = (getFiled('Q6Wa5S1', $argUserID) != '') ? getFiled('Q6Wa5S1', $argUserID) : 0;
        //Sanitary
        $F = (getFiled('Q6Wa6S1', $argUserID) != '') ? getFiled('Q6Wa6S1', $argUserID) : 0;
        //Cc&&D
        $G = (getFiled('Q6Wa7S1', $argUserID) != '') ? getFiled('Q6Wa7S1', $argUserID) : 0;
        $total_generated_waste = $A + $B + $C + $D + $E + $F + $G;
        //Recycled Watse
        $A1 = (getFiled('Q8Wa1S5', $argUserID) != '') ? getFiled('Q8Wa1S5', $argUserID) : 0;
        //Dry/Recycalbe
        $B1 = (getFiled('Q8Wa2S8', $argUserID) != '') ? getFiled('Q8Wa2S8', $argUserID) : 0;
        //Domestic
        $C1 = (getFiled('Q8Wa3S3', $argUserID) != '') ? getFiled('Q8Wa3S3', $argUserID) : 0;
        //E-Watse
        $D1 = (getFiled('Q8Wa4S1', $argUserID) != '') ? getFiled('Q8Wa4S1', $argUserID) : 0;
        //Biomedical waste
        $E1 = (getFiled('Q8Wa5S1', $argUserID) != '') ? getFiled('Q8Wa5S1', $argUserID) : 0;
        //Sanitary
        $F1 = (getFiled('Q8Wa6S1', $argUserID) != '') ? getFiled('Q8Wa6S1', $argUserID) : 0;
        //Cc&&D
        $G1 = (getFiled('Q8Wa7S1', $argUserID) != '') ? getFiled('Q8Wa7S1', $argUserID) : 0;
        $total_recycled_waste = $A1 + $B1 + $C1 + $D1 + $E1 + $F1 + $G1;
        if ($total_generated_waste != 0) {
            $percentage_of_genrated_waste = ($total_recycled_waste / $total_generated_waste) * 100;
            if ($percentage_of_genrated_waste > 50) {
                $waste_points['Q4_recycled_waste'] = 20;
            }
        }
        //Q5 Does your school have a composting facility?
        $composition_facility = (getFiled('Q9Wa1', $argUserID) != '') ? getFiled('Q9Wa1', $argUserID) : "";
        if ($composition_facility != '') {
            if ($composition_facility == 'Y') {
                $waste_points['Q5_facility'] = 5;
            } else if ($composition_facility == 'N') {
                $waste_points['Q5_facility'] = 0;
            }
        }
        //Q5 a. What is the methodology used?
        $methodology = (getFiled('Q9Wa2S1', $argUserID) != '') ? getFiled('Q9Wa2S1', $argUserID) : "";
        if ($methodology != '') {
            $waste_points['Q5_facility'] = 10;
        }

        //What is the waste segregation system in your school?
        //Q1 Does your school segregate waste
        $segregateWaste = (getFiled('Q4Wa1', $argUserID) != '') ? getFiled('Q4Wa1', $argUserID) : "";
        if ($segregateWaste != '') {
            if ($segregateWaste == 'Y') {
                $waste_points['Q2_segregate_wasre'] = 5;
            } else if ($segregateWaste == 'N') {
                $waste_points['Q2_segregate_wasre'] = 0;
            }
        }
        return number_format(array_sum($waste_points), 2);
    }
    
	
	
	public function getEnergyPoints($argUserID) {
        $energy_points = array();
        //Total Points
        $total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;

//        //Total Energy Consumption
        $total_energy_consumtion_mj = (getFiled('Q6E15S2', $argUserID) != '') ? (getFiled('Q6E15S2', $argUserID)) : 0;

        if ($total_population == 0) {
            $energy_points['Q3_energy'] = 0;
        } else {
            //per day energy
            $per_day_energy = ($total_energy_consumtion_mj) / 30;
            //echo 'Total Population' . $total_population . 'Per_day_energy' . $per_day_energy;
            $megajole_per_cepta_day = $per_day_energy / $total_population;
            //school type
            $school_type = (getFiled('Q1S1', $argUserID) != '') ? getFiled('Q1S1', $argUserID) : 0;

            //Day Scholar
            if (($school_type == 1) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 2) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Boarding school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 3) && ($megajole_per_cepta_day <= 24.6)) { // condition for Residential school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 4) && ($megajole_per_cepta_day <= 48.0)) { // condition for Day Scholar + Day Boarding school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 5) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Boarding + Residential school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 6) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Scholar + Residential school.
                $energy_points['Q3_energy'] = 1;
            } else if (($school_type == 7) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar + Day Boarding + Residential school.
                $energy_points['Q3_energy'] = 1;
            }
            if (!isset($energy_points['Q3_energy'])) {
                $energy_points['Q3_energy'] = 0;
            }
        }
        //Q Are there any alternate sources of energy employed/ installed in your school?
        if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : "") != "") {
            if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "Y") {
                $energy_points['Q6_energy'] = 1;
            } else if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "N") {
                $energy_points['Q6_energy'] = 0;
            }
        }
        //echo '<pre>'; print_r($energy_points);
        return number_format(array_sum($energy_points), 2);
    }
	
	
	
	function getWaterPoints($argUserID) {
        $water_points = array();
        $water_use = array();
        $water_consumed_per_day = 0;
        $i = 0;
        for ($i = 1; $i <= 10; $i++) {
            $water_consumed_per_day = $water_consumed_per_day + getFiled('Q4W'.$i, $argUserID);
        }
        $total_population = getFiled('Q4G4S3', $argUserID);
        $arr = array('1' => 'Day-Scholar',
            '2' => 'Day-Boarding',
            '3' => 'Residential',
            '4' => 'Day-Scholar+Day Boarding',
            '5' => 'Day-Boarding+Residential',
            '6' => 'Day-Scholar+Residential',
            '7' => 'Day-Scholar+Day-Boarding+Residential'
        );
        
        $c=getFiled('Q1S1', $argUserID);
        if(!empty($c) && isset($c) && $c>=1 && $c<=7){
             
        $type_school = $arr[$c];
        } else {
        $type_school='other';    
        }
        if($total_population>0){
        $per_capita_per_day_water_consumption = ($water_consumed_per_day / $total_population);
        switch ($type_school) {
            case 'Day-Scholar':
                if ($per_capita_per_day_water_consumption > 17) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 13) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 13) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }

                break;
            case 'Day-Boarding':
                if ($per_capita_per_day_water_consumption > 25) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 15) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 15) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            case 'Residential':
                if ($per_capita_per_day_water_consumption > 135) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 125) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 125) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            case 'Day-Scholar+Day Boarding':
                if ($per_capita_per_day_water_consumption > 25) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 15) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 15) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            case 'Day-Boarding+Residential':
                if ($per_capita_per_day_water_consumption > 135) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 25) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 25) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            case 'Day-Scholar+Residential':
                if ($per_capita_per_day_water_consumption > 135) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 17) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 17) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            case 'Day-Scholar+Day-Boarding+Residential':
                if ($per_capita_per_day_water_consumption > 135) {
                    $water_points['per_day'] = 0;
                } elseif ($per_capita_per_day_water_consumption < 15) {
                    $water_points['per_day'] = ($per_capita_per_day_water_consumption / 15) * 7;
                } else {
                    $water_points['per_day'] = 7;
                }
                break;
            default :
                $water_points['per_day']=0;
        }
    } else {
        $water_points['per_day'] = 0;      
    }    
        
        for ($i = 2; $i <= 4; $i++) {
            $water_use[$i] = getFiled('Q5W' . $i, $argUserID);
        }
        $ground = getFiled('Q5W1', $argUserID);
        $sum = array_sum($water_use);
        if ($sum == 3) {
            $water_points['water_use'] = 4;
        } elseif ($sum == 2) {
            $water_points['water_use'] = 2;
        } elseif ($sum == 1 && $water_use[2] != 1) {
            $water_points['water_use'] = 1;
        } elseif ($sum == 1 && $ground == 1) {
            $water_points['water_use'] = 2;
        } else {
            $water_points['water_use'] = 0;
        }

        $count = 0;

        for ($i = 3; $i <= 10; $i++) {
            if (getFiled('Q8W1S' . $i, $argUserID) == 'Y') {
                $count++;
            }
        }
        if (getFiled('Q8W1S7', $argUserID) == 'Y') {
            $count--;
        }
        $water_points['conservation'] = $count;
        if (getFiled('Q8W2', $argUserID) == "Y") {
            $water_points['harvest'] = 2;
        } else {
            $water_points['harvest'] = 0;
        }

        if (getFiled('Q8W2S1S1', $argUserID) == 7) {
            $water_points['catchment '] = 4;
        } elseif (getFiled('Q8W2S1S1', $argUserID) == 1 || getFiled('Q8W2S1S1', $argUserID) == 2 || getFiled('Q8W2S1S1', $argUserID) == 3 || getFiled('Q8W2S1S1', $argUserID) == 4 || getFiled('Q8W2S1S1', $argUserID) == 5 || getFiled('Q8W2S1S1', $argUserID) == 6) {
            $water_points['catchment '] = 2;
        }

        if (getFiled('Q8W2S4', $argUserID) >= 7) {
            $water_points['area'] = 10;
        } elseif (getFiled('Q8W2S4', $argUserID) >= 7) {
            $water_points['area'] = 8;
        } elseif (getFiled('Q8W2S4', $argUserID) >= 5 && getFiled('Q8W2S4', $argUserID) <= 6) {
            $water_points['area'] = 6;
        } elseif (getFiled('Q8W2S4', $argUserID) >= 3 && getFiled('Q8W2S4', $argUserID) <= 4) {
            $water_points['area'] = 4;
        } elseif (getFiled('Q8W2S4', $argUserID) >= 2 && getFiled('Q8W2S4', $argUserID) <= 1) {
            $water_points['area'] = 2;
        }
        if (getFiled('Q8W2S5', $argUserID) == 1) {
            $water_points['cleaness'] = 3;
        } elseif (getFiled('Q8W2S5', $argUserID) == 2) {
            $water_points['cleaness'] = 1;
        } else {
            $water_points['cleaness'] = 0;
        }
        if (getFiled('Q8W2S61', $argUserID) == "Y") {
            $water_points['clean-system'] = 2;
        } else {
            $water_points['clean-system'] = 0;
        }
        if (getFiled('Q8W2S8', $argUserID) == "Y") {
            $water_points['rainwater'] = 1;
        } else {
            $water_points['rainwater'] = 0;
        }
        $count1 = 0;

        for ($i = 4; $i <= 8; $i++) {
            if (getFiled('Q8W3S' . $i, $argUserID) == 'Y') {
                $count1++;
            }
        }
        if (getFiled('Q8W3S1', $argUserID) == 'Y') {
            $count1++;
        }
        $water_points['sanitation'] = $count1;

        if (getFiled('Q16W1', $argUserID) == "Y") {
            $water_points['storage'] = 1;
        }
        if (getFiled('Q21W1', $argUserID) == "Y") {
            $water_points['supply'] = 1;
        }
        if (getFiled('Q18W1', $argUserID) == "Y") {
            $water_points['toilets'] = 1;
        }
        if (getFiled('Q19W1', $argUserID) == "Y") {
            $water_points['treat-water'] = 5;
        }
        if (getFiled('Q20W1', $argUserID) == "Y") {
            if (!empty(getFiled('Q20W1', $argUserID))) {
                $water_points['reuse-water'] = 5;
            }
        }
        if (!empty(getFiled('Q9W1', $argUserID))) {
            $load_drinking_water_tap = ($total_population / getFiled('Q9W1', $argUserID));
        
        if ($load_drinking_water_tap < 50) {
            $water_points['load_drinking_water_tap'] = 1;
        }
    }
        if (!empty(getFiled('Q11W1', $argUserID))) {
            $load_ablution_tap = ($total_population / getFiled('Q11W1', $argUserID));
        
        if ($load_ablution_tap < 50) {
            $water_points['load_ablution_tap'] = 1;
        }
    } 
        if (!empty(getFiled('Q13W1S4', $argUserID))) {
            $load_closets = ($total_population / getFiled('Q13W1S4', $argUserID));
        
        if (!empty(getFiled('Q14W1', $argUserID))) {
            $load_urinals = ($total_population / getFiled('Q14W1', $argUserID));
        
        switch ($type_school) {
            case 'Day-Scholar':
                if ($load_urinals < 50) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 45) {
                    $water_points['load_closets'] = 1;
                }
                break;
            case 'Day-Boarding':
                if ($load_urinals < 40) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 35) {
                    $water_points['load_closets'] = 1;
                }
                break;
            case 'Residential':
                if ($load_urinals < 30) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 25) {
                    $water_points['load_closets'] = 1;
                }
                break;
            case 'Day-Scholar+Day Boarding':
                if ($load_urinals < 50) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 35) {
                    $water_points['load_closets'] = 1;
                }
                break;
            case 'Day-Boarding+Residential':
                if ($load_urinals < 35) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 30) {
                    $water_points['load_closets'] = 1;
                }
                break;
            case 'Day-Scholar+Residential':
                if ($load_urinals < 50) {
                    $water_points['load_urinals'] = 1;
                }
                if ($load_closets < 40) {
                    $water_points['load_closets'] = 1;
                }
                break;
            default :
                $water_points['load_closets']=0;    
        }
        }
        }

        $handpump = getFiled('Q10W1', $argUserID);
        if ($handpump > 1) {
            $water_points['handpump'] = 0;
        }
        $outlet = getFiled('Q15W1', $argUserID);
        if ($outlet > 1) {
            $water_points['outlet'] = 0;
        }
   


        return array_sum($water_points);
    }
	
	
	public function getFoodPoints($argUserID) {
        $food_points = array();
        //Q.3 What kind of food is being served/sold in your school?
        $totalFlavourVariaint = array();
        $totalItemSold = array();
        $monthFoodSold = array();
        for ($i = 2; $i <= 10; $i++) {
            $totalFlavourVariaint[] = (getFiled('Q6F' . $i . 'S1', $argUserID) != '') ? (getFiled('Q6F' . $i . 'S1', $argUserID)) : 0;
            $totalItemSold[] = (getFiled('Q6F' . $i . 'S2', $argUserID) != '') ? (getFiled('Q6F' . $i . 'S2', $argUserID)) : 0;
            $monthFoodSold[] = (getFiled('Q6F' . $i . 'S3', $argUserID) != '') ? (getFiled('Q6F' . $i . 'S3', $argUserID)) : 0;
        }
        $packageditem = array_sum($totalFlavourVariaint) + array_sum($totalItemSold) + array_sum($monthFoodSold);
        if ($packageditem == "" || $packageditem == 0) {
            $food_points['q3_served'] = 2;
        } else {
            $food_points['q3_serverd'] = 0;
        }
        //Q4 Does your school serve traditional Indian snacks?
        $q4 = (getFiled('Q7F1', $argUserID) != '') ? getFiled('Q7F1', $argUserID) : "";
        if ($q4 != '') {
            if ($q4 == 'Y') {
                $samosa = (getFiled('Q7F1S1', $argUserID) != '') ? getFiled('Q7F1S1', $argUserID) : "";
                $sambhar = (getFiled('Q7F1S2', $argUserID) != '') ? getFiled('Q7F1S2', $argUserID) : "";
                $pavBhaji = (getFiled('Q7F1S3', $argUserID) != '') ? getFiled('Q7F1S3', $argUserID) : "";
                $momos = (getFiled('Q7F1S4', $argUserID) != '') ? getFiled('Q7F1S4', $argUserID) : "";
                $other = (getFiled('Q7F1S5', $argUserID) != '') ? getFiled('Q7F1S5', $argUserID) : "";
                if (($samosa == '' || $samosa == 0) && ($sambhar == '' || $sambhar == 0) && ($pavBhaji == '' || $pavBhaji == 0) || ($momos == '' || $momos == 0) || ($other == '' || $other == 0)) {
                    $food_points['q4_trad_snack'] = 0;
                } else {
                    $food_points['q4_trad_snack'] = 2;
                }
            } else if ($q4 == 'N') {
                $food_points['q4_trad_snack'] = 0;
            }
        }

        ///Q5 Does your school serve traditional Indian beverages?
        $q5 = (getFiled('Q8F1', $argUserID) != '') ? getFiled('Q8F1', $argUserID) : "";
        if ($q5 !== '') {
            if ($q5 == 'Y') {
                $nimbopani = (getFiled('Q8F1S1', $argUserID) != '') ? getFiled('Q8F1S1', $argUserID) : "";
                $lassi = (getFiled('Q8F1S2', $argUserID) != '') ? getFiled('Q8F1S2', $argUserID) : "";
                $buttermilk = (getFiled('Q8F1S3', $argUserID) != '') ? getFiled('Q8F1S3', $argUserID) : "";
                $aampana = (getFiled('Q8F1S4', $argUserID) != '') ? getFiled('Q8F1S4', $argUserID) : "";
                $other = (getFiled('Q8F1S5', $argUserID) != '') ? getFiled('Q8F1S5', $argUserID) : "";
                if (($nimbopani == '' || $nimbopani == 0) && ($lassi == '' || $lassi == 0) && ($buttermilk == '' || $buttermilk == 0) || ($aampana == '' || $aampana == 0) || ($other == '' || $other == 0)) {
                    $food_points['q4_trad_beverages'] = 0;
                } else {
                    $food_points['q4_trad_beverages'] = 2;
                }
            } else if ($q5 == 'N') {
                $food_points['q4_trad_beverages'] = 0;
            }
        }
        //What kind of food does your school promote? 
        //Q6 Does the school distribute packaged food items as rewards during schools events?
        $q6 = (getFiled('Q9F1', $argUserID) != '') ? getFiled('Q9F1', $argUserID) : "";
        if ($q6 == 'Y') {
            $food_points['q6_pack_food'] = 0;
        } else {
            $food_points['q6_pack_food'] = 1;
        }
        //Q7 Does the school distribute chocolates/similar products as refreshments during schools events?
        $q7 = (getFiled('Q10F1', $argUserID) != '') ? getFiled('Q10F1', $argUserID) : "";
        if ($q7 == 'Y') {
            $food_points['q7_pack_food'] = 0;
        } else {
            $food_points['q7_pack_food'] = 1;
        }
        //Q8 Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?
        $q8 = (getFiled('Q11F1', $argUserID) != '') ? getFiled('Q11F1', $argUserID) : "";
        if ($q8 == 'Y') {
            $food_points['q8_food_company'] = 0;
        } else {
            $food_points['q8_food_company'] = 1;
        }
        return array_sum($food_points);
    }
	
	 Public function getTotalArea($argUserID) {
       $a=getFiled('Q4L2', $argUserID); 
       $b=getFiled('Q4L5', $argUserID); 
       $c=getFiled('Q4L6', $argUserID); 
       $d=getFiled('Q4L7', $argUserID); 
       $e=getFiled('Q4L8', $argUserID); 
       $total = $a+$b+$c+$d+$e;
       return $total;
    }



   Public function getPercentageArea($argUserID) {
       $total=getTotalArea($argUserID);
       $b=getFiled('Q4L5', $argUserID);
      if($total>0){ 
       $percentage = ($b/$total)*100;
      
       $terrace=getFiled('Q4L10', $argUserID); 
       $percentage1 = ($terrace/$total)*100;
      }
    else {
          return 0;
      }
       return ($percentage+$percentage1);
    }





		Public function getLandPoints($argUserID) {
        $land_points = array();
        // Explore the number of species of plants and animals in your school
        $total_site_area = (getFiled('Q4L2', $argUserID) != '') ? getFiled('Q4L2', $argUserID) : 0 + (getFiled('Q4L3', $argUserID) != '') ? getFiled('Q4L3', $argUserID) : 0 + (getFiled('Q4L4', $argUserID) != '') ? getFiled('Q4L4', $argUserID) : 0 + (getFiled('Q4L5', $argUserID) != '') ? getFiled('Q4L5', $argUserID) : 0 + (getFiled('Q4L6', $argUserID) != '') ? getFiled('Q4L6', $argUserID) : 0 + (getFiled('Q4L7', $argUserID) != '') ? getFiled('Q4L7', $argUserID) : 0 + (getFiled('Q4L8', $argUserID) != '') ? getFiled('Q4L8', $argUserID) : 0;

        //Q2 How many species of plants and animals exist in your school
        $plants = (getFiled('Q5L1S1', $argUserID) != '') ? getFiled('Q5L1S1', $argUserID) : 0;
        $animals = (getFiled('Q5L2S1', $argUserID) != '') ? getFiled('Q5L2S1', $argUserID) : 0;
        if ($plants == 100) {
            $land_points['Q2_plants'] = 2;
        } else if ($plants > 100) {
            $land_points['Q2_plants'] = 2;
        } else if ($plants < 100) {
            $land_points['Q2_plants'] = ($plants / 100) * 2;
        }
        //Animals
        if ($animals == 50) {
            $land_points['Q2_animals'] = 2;
        } else if ($animals > 50) {
            $land_points['Q2_animals'] = 2;
        } else if ($animals < 50) {
            $land_points['Q2_plants'] = ($plants / 50) * 2;
        }

        //Find out if your school uses chemical-based pesticides 
        //Q3 Do you use chemical-based pesticides in your school green cover?
        $pestiside = (getFiled('Q6L1', $argUserID) != '') ? getFiled('Q6L1', $argUserID) : "";
        if ($pestiside != '') {
            if ($pestiside == 'Y') {
                $land_points['Q3_pestiside'] = 0;
            } else if ($pestiside == 'N') {
                $land_points['Q3_pestiside'] = 1;
            }
        }
        $site=getTotalArea($argUserID);
        
        $total=getPercentageArea($argUserID);
        if($site>0){
        if($total>=35){
           $land_points['total']=5; 
        } else {
            $land_points['total']=($total/(.35*$site))*5; 
        }
      } else {
           $land_points['total']=0;
      }
        return array_sum($land_points);
    }
	    
		


public function feedback() {
	$data = array();
	$uArray = $this->db->select('*')->from('gsp_school')->get()->result_array();
	for ($i = 0; $i < count($uArray); $i++) {
	    $data[$i] = array(
		'userid' => $uArray[$i]['userid'],
		'Q1Fe1' => ($this->getFiled('Q1Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe1', $uArray[$i]['userid']) : 0,
		'Q1Fe1_A' => '',
		'Q1Fe1_B' => '',
		'Q1Fe2' => ($this->getFiled('Q1Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe2', $uArray[$i]['userid']) : 0,
		'Q1Fe2_A' => '',
		'Q1Fe3' => ($this->getFiled('Q1Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe4' => ($this->getFiled('Q1Fe4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe4', $uArray[$i]['userid']) : 0,
		'Q1Fe4_B' => '',
		'Q1Fe5' => '',
		'content' => ($this->getFiled('Q8Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe1', $uArray[$i]['userid']) : 0,
		'task_distribute' => ($this->getFiled('Q8Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe2', $uArray[$i]['userid']) : 0,
		'question_sequence' => ($this->getFiled('Q8Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe7_A' => ($this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe8' => ($this->getFiled('Q1Fe8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe8', $uArray[$i]['userid']) : 0,
		'Q1Fe9' => ($this->getFiled('Q1Fe9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe9', $uArray[$i]['userid']) : 0,
		'Q1Fe10' => ($this->getFiled('Q1Fe10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe10', $uArray[$i]['userid']) : 0,
		'Q1Fe10_A' => '',
		'Q1Fe11' => ($this->getFiled('Q1Fe11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe11', $uArray[$i]['userid']) : 0,
		'Q1Fe12' => ($this->getFiled('Q1Fe12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe12', $uArray[$i]['userid']) : 0
	    );
	}
	$this->db->insert_batch('tbl_feedback', $data);
    }
	  public function Air_performance($argUserID) {
	$arrPoints = array();
	$Q3_b_CNG = "";
	$Q3_b_ELE_BIO = "";
	$Q3_b_LPG = "";
	$Q3_b_PETROL = "";
	$no_of_vehicle = "";
	//Q2 To calculate the Window-floor ratio of classrooms in your school
	$total_floor_area = ($this->getFiled('Q5A110S2', $argUserID) != '') ? $this->getFiled('Q5A110S2', $argUserID) : 0; //X = Area of floor (LxB)
	$total_area_of_openings = ($this->getFiled('Q5A110S3', $argUserID) != '') ? $this->getFiled('Q5A110S3', $argUserID) : 0; //Y = Area of openings (LxH)
	if (($total_floor_area != 0) || ($total_floor_area != 0)) {
	    $ventilation_percentage = ($total_area_of_openings / $total_floor_area) * 100; //window area to floor ratio
	    if ($ventilation_percentage >= 5) {
		$arrPoints['Q2'] = 3;
	    }
	} else {
	    $arrPoints['Q2'] = 0;
	}

	//  SECTION 3: How eco-friendly are the vehicles in your school?
	//Q.3)What is the ownership of the vehicles used by your school?
	$ownship_vehicle = ($this->getFiled('Q6A1', $argUserID) != '') ? $this->getFiled('Q6A1', $argUserID) : 0;
	if (($ownship_vehicle == 1) || ($ownship_vehicle == 2)) {
	    $arrPoints['Q3'] = 5;
	} else if ($ownship_vehicle == 3 || $ownship_vehicle == 4 || $ownship_vehicle == 5) {
	    $no_of_vehicle = ($this->getFiled('Q6A2S1T1', $argUserID) != '') ? $this->getFiled('Q6A2S1T1', $argUserID) : "";
	    $eight_year_old = ($this->getFiled('Q6A2S1T2', $argUserID) != '') ? $this->getFiled('Q6A2S1T2', $argUserID) : "";
	    $air_condtioned_vehicle = ($this->getFiled('Q6A2S1T3', $argUserID) != '') ? $this->getFiled('Q6A2S1T3', $argUserID) : "";
	    $puc_vehicle = ($this->getFiled('Q6A2S1T4', $argUserID) != '') ? $this->getFiled('Q6A2S1T4', $argUserID) : "";
	    $authorise_parking = ($this->getFiled('Q6A2S1T5', $argUserID) != '') ? $this->getFiled('Q6A2S1T5', $argUserID) : "";
	    //Eight years Old Ponits
	    if ($eight_year_old == "") {
		$arrPoints['Q3_eigth_years'] = 0;
	    } else {
		if ($eight_year_old == $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = 0;
		} else if ($eight_year_old == 0) {
		    $arrPoints['Q3_eigth_years'] = 1;
		} else if ($eight_year_old < $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = ($eight_year_old * 1) / $no_of_vehicle;
		} else if ($eight_year_old > $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = 0;
		}
	    }
	    //Air Condition Ponits
	    if ($air_condtioned_vehicle == $no_of_vehicle) {
		$arrPoints['Q3_air_condition'] = 0;
	    } else if ($air_condtioned_vehicle == 0) {
		$arrPoints['Q3_air_condition'] = 1;
	    } else if ($air_condtioned_vehicle < $no_of_vehicle) {
		$arrPoints['Q3_air_condition'] = ($air_condtioned_vehicle * 1) / $no_of_vehicle;
	    }
	    //PUC Points
	    if ($puc_vehicle == $no_of_vehicle) {
		$arrPoints['Q3_puc_points'] = 1;
	    } else if ($puc_vehicle == 0) {
		$arrPoints['Q3_puc_points'] = 0;
	    } else if ($puc_vehicle < $no_of_vehicle) {
		$arrPoints['Q3_puc_points'] = ($puc_vehicle * 1) / $no_of_vehicle;
	    }
	    //Authorized Parking Points
	    if ($authorise_parking == $no_of_vehicle) {
		$arrPoints['Q3_auth_parking'] = 1;
	    } else if ($authorise_parking == 0) {
		$arrPoints['Q3_auth_parking'] = 0;
	    } else if ($authorise_parking < $no_of_vehicle) {
		$arrPoints['Q3_auth_parking'] = ($authorise_parking * 1) / $no_of_vehicle;
	    }
	}
	//Q3b Specify the type of fuel used by your school’s vehicles
	//echo '<pre>';
	//print_r($arrPoints);
	$total_cng_vehicle = ($this->getFiled('Q6A2S3C5', $argUserID) != '') ? $this->getFiled('Q6A2S3C5', $argUserID) : "";
	$total_elec_bio_vehicle = ($this->getFiled('Q6A2S3H5', $argUserID) != '') ? $this->getFiled('Q6A2S3H5', $argUserID) : "";
	$total_lpg_vehicle = ($this->getFiled('Q6A2S3L5', $argUserID) != '') ? $this->getFiled('Q6A2S3L5', $argUserID) : "";
	$total_petrol_vehicle = ($this->getFiled('Q6A2S3P5', $argUserID) != '') ? $this->getFiled('Q6A2S3P5', $argUserID) : "";
	$total_disel_vehicle = ($this->getFiled('Q6A2S3D5', $argUserID) != '') ? $this->getFiled('Q6A2S3D5', $argUserID) : "";
	//Cng Vehicle Points
	if ($total_cng_vehicle != '') {
	    if ($total_cng_vehicle == $no_of_vehicle) {
		$Q3_b_CNG = 1;
	    } else if ($total_cng_vehicle < $no_of_vehicle) {
		$Q3_b_CNG = ($total_cng_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//Electric Bio Points
	if ($total_elec_bio_vehicle != '') {
	    if ($total_elec_bio_vehicle == $no_of_vehicle) {
		$Q3_b_ELE_BIO = 1;
	    } else if ($total_elec_bio_vehicle < $no_of_vehicle) {
		$Q3_b_ELE_BIO = ($total_elec_bio_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//LPG Points
	if ($total_lpg_vehicle != '') {
	    if ($total_lpg_vehicle == $no_of_vehicle) {
		$Q3_b_LPG = 1;
	    } else if ($total_lpg_vehicle < $no_of_vehicle) {
		$Q3_b_LPG = ($total_lpg_vehicle * 0.50) / $no_of_vehicle;
	    }
	}
	//Petrol Points
	if ($total_petrol_vehicle != '') {
	    if ($total_petrol_vehicle == $no_of_vehicle) {
		$Q3_b_PETROL = 1;
	    } else if ($total_petrol_vehicle < $no_of_vehicle) {
		$Q3_b_PETROL = ($total_petrol_vehicle * 0.25) / $no_of_vehicle;
	    }
	}
	$arrPoints['Fuel'] = $Q3_b_CNG + $Q3_b_ELE_BIO + $Q3_b_LPG + $Q3_b_PETROL;
	//Q.4 Please specify how many members of the school community use each type of transport:
	//Total Population
	$total_population = ($this->getFiled('Q4G4S3', $argUserID) != '') ? $this->getFiled('Q4G4S3', $argUserID) : 0;

	//Total of Sustainable Motorised Vehicles
	$total_population_smv = ($this->getFiled('Q7A1S4', $argUserID) != '') ? $this->getFiled('Q7A1S4', $argUserID) : 0 + ($this->getFiled('Q7A2S4', $argUserID) != '') ? $this->getFiled('Q7A2S4', $argUserID) : 0 + ($this->getFiled('Q7A3S4', $argUserID) != '') ? $this->getFiled('Q7A3S4', $argUserID) : 0 + ($this->getFiled('Q7A4S4', $argUserID) != '') ? $this->getFiled('Q7A4S4', $argUserID) : 0 + ($this->getFiled('Q7A5S4', $argUserID) != '') ? $this->getFiled('Q7A5S4', $argUserID) : 0 + ($this->getFiled('Q7A6S4', $argUserID) != '') ? $this->getFiled('Q7A6S4', $argUserID) : 0;

	//Private Vehicles Points Calculation
	$private_veh_population = ($this->getFiled('Q7A7S4', $argUserID) != '') ? $this->getFiled('Q7A7S4', $argUserID) : 0 + ($this->getFiled('Q7A8S4', $argUserID) != '') ? $this->getFiled('Q7A8S4', $argUserID) : 0;

	//Non-Polluting Mode Ponits Calcution
	$total_population_npm = ($this->getFiled('Q7A9S4', $argUserID) != '') ? $this->getFiled('Q7A9S4', $argUserID) : 0 + ($this->getFiled('Q7A10S4', $argUserID) != '') ? $this->getFiled('Q7A10S4', $argUserID) : 0 + ($this->getFiled('Q7A11S4', $argUserID) != '') ? $this->getFiled('Q7A11S4', $argUserID) : 0;

	$total_smv_npm = $total_population_smv + $total_population_npm;
	if ($total_population != 0) {
	    if ($total_population == $total_smv_npm) {
		$arrPoints['q4_total_population'] = 4;
	    } else if ($total_population == $private_veh_population) {
		$arrPoints['q4_total_population'] = 0;
	    } else {
		$score1 = ($total_population_smv / $total_population) * 4;
		$score2 = ($total_population_npm / $total_population) * 4;
		$arrPoints['q4_total_population'] = $score1 + $score2;
	    }
	}

	$total_air_points = array_sum($arrPoints);
	return $total_air_points;
    }
	
}
