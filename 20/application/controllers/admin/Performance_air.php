<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_air extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->helper('common_helper');
    }

    public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function air() {
	ini_set('memory_limit', '-1');
	$query = $this->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
//	foreach ($user as $u) {
//	    $uArray[] = $this->Air_performance($u->userid);
//	}
//	echo '<pre>';
//	print_r($uArray); exit;
	$points = array();
	for ($i = 0; $i < count($uArray); $i++) {
	    $points[$i] = array(
		'userid' => $uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4A1' => ($this->getFiled('Q4A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4A1', $uArray[$i]['userid']) : "NA",
		'Q5A110S2' => ($this->getFiled('Q5A110S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A110S2', $uArray[$i]['userid']) : "NA",
		'Q5A110S3' => ($this->getFiled('Q5A110S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A110S3', $uArray[$i]['userid']) : "NA",
		'Q6A1' => ($this->getFiled('Q6A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A1', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T1' => ($this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T2' => ($this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T3' => ($this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T4' => ($this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T5' => ($this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T6' => ($this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D1' => ($this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P1' => ($this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L1' => ($this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C1' => ($this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E1' => ($this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H1' => ($this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'total_cars' => $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H2', $uArray[$i]['userid']),
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D2' => ($this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P2' => ($this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L2' => ($this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C2' => ($this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E2' => ($this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H2' => ($this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) : "NA",
		'total_vans' => $this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3B3', $uArray[$i]['userid']),
		'Q6A2S3D3' => ($this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P3' => ($this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L3' => ($this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C3' => ($this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E3' => ($this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H3' => ($this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B3' => ($this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) : "NA",
		'total_other' => $this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) + $this->getFiled('Q6A2S3B4', $uArray[$i]['userid']),
		'Q6A2S3D4' => ($this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P4' => ($this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L4' => ($this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C4' => ($this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E4' => ($this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H4' => ($this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B4' => ($this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) : "NA",
		'total_disel' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'total_petrol' => ($this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) : "NA",
		'total_lpg' => ($this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) : "NA",
		'total_cng' => ($this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) : "NA",
		'total_hybrid' => ($this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) : "NA",
		'total_electric' => ($this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) : "NA",
		'total_biofuel' => ($this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) : "NA",
		'Q6A3' => ($this->getFiled('Q6A3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A3', $uArray[$i]['userid']) : "NA",
		'Q6A4S1' => ($this->getFiled('Q6A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A4S1', $uArray[$i]['userid']) : "NA",
		'Q7A1S1' => ($this->getFiled('Q7A1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S1', $uArray[$i]['userid']) : "NA",
		'Q7A1S2' => ($this->getFiled('Q7A1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S2', $uArray[$i]['userid']) : "NA",
		'Q7A1S3' => ($this->getFiled('Q7A1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S3', $uArray[$i]['userid']) : "NA",
		'Q7A1S4' => ($this->getFiled('Q7A1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S4', $uArray[$i]['userid']) : "NA",
		'Q7A2S1' => ($this->getFiled('Q7A2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S1', $uArray[$i]['userid']) : "NA",
		'Q7A2S2' => ($this->getFiled('Q7A2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S2', $uArray[$i]['userid']) : "NA",
		'Q7A2S3' => ($this->getFiled('Q7A2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S3', $uArray[$i]['userid']) : "NA",
		'Q7A2S4' => ($this->getFiled('Q7A2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S4', $uArray[$i]['userid']) : "NA",
		'Q7A3S1' => ($this->getFiled('Q7A3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S1', $uArray[$i]['userid']) : "NA",
		'Q7A3S2' => ($this->getFiled('Q7A3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S2', $uArray[$i]['userid']) : "NA",
		'Q7A3S3' => ($this->getFiled('Q7A3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S3', $uArray[$i]['userid']) : "NA",
		'Q7A3S4' => ($this->getFiled('Q7A3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S4', $uArray[$i]['userid']) : "NA",
		'Q7A4S1' => ($this->getFiled('Q7A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S1', $uArray[$i]['userid']) : "NA",
		'Q7A4S2' => ($this->getFiled('Q7A4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S2', $uArray[$i]['userid']) : "NA",
		'Q7A4S3' => ($this->getFiled('Q7A4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S3', $uArray[$i]['userid']) : "NA",
		'Q7A4S4' => ($this->getFiled('Q7A4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S4', $uArray[$i]['userid']) : "NA",
		'Q7A5S1' => ($this->getFiled('Q7A5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S1', $uArray[$i]['userid']) : "NA",
		'Q7A5S2' => ($this->getFiled('Q7A5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S2', $uArray[$i]['userid']) : "NA",
		'Q7A5S3' => ($this->getFiled('Q7A5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S3', $uArray[$i]['userid']) : "NA",
		'Q7A5S4' => ($this->getFiled('Q7A5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S4', $uArray[$i]['userid']) : "NA",
		'Q7A6S1' => ($this->getFiled('Q7A6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S1', $uArray[$i]['userid']) : "NA",
		'Q7A6S2' => ($this->getFiled('Q7A6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S2', $uArray[$i]['userid']) : "NA",
		'Q7A6S3' => ($this->getFiled('Q7A6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S3', $uArray[$i]['userid']) : "NA",
		'Q7A6S4' => ($this->getFiled('Q7A6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S4', $uArray[$i]['userid']) : "NA",
		'Q7A7S1' => ($this->getFiled('Q7A7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S1', $uArray[$i]['userid']) : "NA",
		'Q7A7S2' => ($this->getFiled('Q7A7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S2', $uArray[$i]['userid']) : "NA",
		'Q7A7S3' => ($this->getFiled('Q7A7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S3', $uArray[$i]['userid']) : "NA",
		'Q7A7S4' => ($this->getFiled('Q7A7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S4', $uArray[$i]['userid']) : "NA",
		'Q7A8S1' => ($this->getFiled('Q7A8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S1', $uArray[$i]['userid']) : "NA",
		'Q7A8S2' => ($this->getFiled('Q7A8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S2', $uArray[$i]['userid']) : "NA",
		'Q7A8S3' => ($this->getFiled('Q7A8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S3', $uArray[$i]['userid']) : "NA",
		'Q7A8S4' => ($this->getFiled('Q7A8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S4', $uArray[$i]['userid']) : "NA",
		'Q7A9S1' => ($this->getFiled('Q7A9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S1', $uArray[$i]['userid']) : "NA",
		'Q7A9S2' => ($this->getFiled('Q7A9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S2', $uArray[$i]['userid']) : "NA",
		'Q7A9S3' => ($this->getFiled('Q7A9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S3', $uArray[$i]['userid']) : "NA",
		'Q7A9S4' => ($this->getFiled('Q7A9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S4', $uArray[$i]['userid']) : "NA",
		'Q7A10S1' => ($this->getFiled('Q7A10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S1', $uArray[$i]['userid']) : "NA",
		'Q7A10S2' => ($this->getFiled('Q7A10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S2', $uArray[$i]['userid']) : "NA",
		'Q7A10S3' => ($this->getFiled('Q7A10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S3', $uArray[$i]['userid']) : "NA",
		'Q7A10S4' => ($this->getFiled('Q7A10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S4', $uArray[$i]['userid']) : "NA",
		'Q7A11S1' => ($this->getFiled('Q7A11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S1', $uArray[$i]['userid']) : "NA",
		'Q7A11S2' => ($this->getFiled('Q7A11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S2', $uArray[$i]['userid']) : "NA",
		'Q7A11S3' => ($this->getFiled('Q7A11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S3', $uArray[$i]['userid']) : "NA",
		'Q7A11S4' => ($this->getFiled('Q7A11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S4', $uArray[$i]['userid']) : "NA",
		'Q8A1' => ($this->getFiled('Q8A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8A1', $uArray[$i]['userid']) : "NA",
		'Q9A1' => ($this->getFiled('Q9A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A1', $uArray[$i]['userid']) : "NA",
		'Q9A2' => ($this->getFiled('Q9A2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A2', $uArray[$i]['userid']) : "NA",
		'points' => $this->Air_performance($uArray[$i]['userid'])
	    );
	}
//	echo '<pre>';
	print_r($points);
	//$this->db->insert_batch('tbl_air', $points);
	$this->db->insert_batch('tbl_air',$points,'userid');
    }

    public function table() {
	$this->load->dbforge();
	$key = array(
	    'id',
	    'userid',
	    'Q4A1',
	    'Q5A110S2',
	    'Q6A1',
	    'Q6A2S1T1',
	    'Q6A2S1T2',
	    'Q6A2S1T3',
	    'Q6A2S1T4',
	    'Q6A2S1T5',
	    'Q6A2S1T6',
	    'Q6A2S3D5',
	    'Q6A2S3D1',
	    'Q6A2S3P1',
	    'Q6A2S3L1',
	    'Q6A2S3C1',
	    'Q6A2S3E1',
	    'Q6A2S3H1',
	    'Q6A2S3B1',
	    'Q6A2S3D5',
	    'total_cars',
	    'Q6A2S3B1',
	    'Q6A2S3D2',
	    'Q6A2S3P2',
	    'Q6A2S3L2',
	    'Q6A2S3C2',
	    'Q6A2S3E2',
	    'Q6A2S3H2',
	    'total_vans',
	    'Q6A2S3D3',
	    'Q6A2S3P3',
	    'Q6A2S3L3',
	    'Q6A2S3C3',
	    'Q6A2S3E3',
	    'Q6A2S3H3',
	    'Q6A2S3B3',
	    'total_other',
	    'Q6A2S3D4',
	    'Q6A2S3P4',
	    'Q6A2S3L4',
	    'Q6A2S3C4',
	    'Q6A2S3E4',
	    'Q6A2S3H4',
	    'Q6A2S3B4',
	    'total_disel',
	    'total_petrol',
	    'total_lpg',
	    'total_cng',
	    'total_hybruser',
	    'total_electric',
	    'total_biofuel',
	    'Q6A3',
	    'Q6A4S1',
	    'Q7A1S1',
	    'Q7A1S2',
	    'Q7A1S3',
	    'Q7A1S4',
	    'Q7A2S1',
	    'Q7A2S2',
	    'Q7A2S3',
	    'Q7A2S4',
	    'Q7A3S1',
	    'Q7A3S2',
	    'Q7A3S3',
	    'Q7A3S4',
	    'Q7A4S1',
	    'Q7A4S2',
	    'Q7A4S3',
	    'Q7A4S4',
	    'Q7A5S1',
	    'Q7A5S2',
	    'Q7A5S3',
	    'Q7A5S4',
	    'Q7A6S1',
	    'Q7A6S2',
	    'Q7A6S3',
	    'Q7A6S4',
	    'Q7A7S1',
	    'Q7A7S2',
	    'Q7A7S3',
	    'Q7A7S4',
	    'Q7A8S1',
	    'Q7A8S2',
	    'Q7A8S3',
	    'Q7A8S4',
	    'Q7A9S1',
	    'Q7A9S2',
	    'Q7A9S3',
	    'Q7A9S4',
	    'Q7A10S1',
	    'Q7A10S2',
	    'Q7A10S3',
	    'Q7A10S4',
	    'Q7A11S1',
	    'Q7A11S2',
	    'Q7A11S3',
	    'Q7A11S4',
	    'Q8A1',
	    'Q9A1',
	    'Q9A2',
	    'points'
	);
	for ($x = 0; $x < count($key); $x++) {
	    if ($x == 0) {
		$test = $this->dbforge->add_field(array(
		    $key[$x] => array(
			'type' => 'INT',
			'constraint' => 11,
			'auto_increment' => TRUE
		    ),
		));
	    } else {
		$test = $this->dbforge->add_field(array(
		    $key[$x] => array(
			'type' => 'TEXT',
		    ),
		));
	    }
	}
//	echo '<pre>';
//	print_r($test->fields);
//	exit;
	$this->dbforge->add_key('id', TRUE);
	$this->dbforge->create_table('tbl_air');
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
//	    echo "Eight Year" . $eight_year_old . '<br>';
//	    echo "Air Condition" . $air_condtioned_vehicle . '<br>';
//	    echo "PUC" . $puc_vehicle . '<br>';
//	    echo "Authorize Parking" . $authorise_parking . '<br>';
	    //Eight years Old Ponits
	    if (($eight_year_old == "") && ($eight_year_old == 0)) {
		$arrPoints['Q3_eigth_years'] = 0;
	    } else {
		if ($eight_year_old == $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = 0;
		} else if ($eight_year_old == 0) {
		    $arrPoints['Q3_eigth_years'] = 1;
		} else if ($eight_year_old < $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = (($eight_year_old * 1) / $no_of_vehicle);
		} else if ($eight_year_old > $no_of_vehicle) {
		    $arrPoints['Q3_eigth_years'] = 0;
		}
	    }
	    //Air Condition Ponits
	    if (($air_condtioned_vehicle != '') && ($air_condtioned_vehicle != 0)) {
		if ($air_condtioned_vehicle == $no_of_vehicle) {
		    $arrPoints['Q3_air_condition'] = 0;
		} else if ($air_condtioned_vehicle == 0) {
		    $arrPoints['Q3_air_condition'] = 1;
		} else if ($air_condtioned_vehicle < $no_of_vehicle) {
		    $arrPoints['Q3_air_condition'] = ($air_condtioned_vehicle * 1) / $no_of_vehicle;
		}
	    } else {
		$arrPoints['Q3_air_condition'] = 0;
	    }
	    //PUC Points
	    if (($puc_vehicle != '') && ($puc_vehicle != 0)) {
		if ($puc_vehicle == $no_of_vehicle) {
		    $arrPoints['Q3_puc_points'] = 1;
		} else if ($puc_vehicle == 0) {
		    $arrPoints['Q3_puc_points'] = 0;
		} else if ($puc_vehicle < $no_of_vehicle) {
		    $arrPoints['Q3_puc_points'] = ($puc_vehicle * 1) / $no_of_vehicle;
		}
	    } else {
		$arrPoints['Q3_puc_points']=0;
	    }
	    //Authorized Parking Points
	    if (($authorise_parking != '') && ($authorise_parking != 0)) {
		if ($authorise_parking == $no_of_vehicle) {
		    $arrPoints['Q3_auth_parking'] = 1;
		} else if ($authorise_parking == 0) {
		    $arrPoints['Q3_auth_parking'] = 0;
		} else if ($authorise_parking < $no_of_vehicle) {
		    $arrPoints['Q3_auth_parking'] = ($authorise_parking * 1) / $no_of_vehicle;
		}
	    } else {
		$arrPoints['Q3_auth_parking']=0;
	    }
	}
	//Q3b Specify the type of fuel used by your schoolâ€™s vehicles
	//echo '<pre>';
	//print_r($arrPoints);
	$total_cng_vehicle = ($this->getFiled('Q6A2S3C5', $argUserID) != '') ? $this->getFiled('Q6A2S3C5', $argUserID) : "";
	$total_elec_bio_vehicle = ($this->getFiled('Q6A2S3H5', $argUserID) != '') ? $this->getFiled('Q6A2S3H5', $argUserID) : "";
	$total_lpg_vehicle = ($this->getFiled('Q6A2S3L5', $argUserID) != '') ? $this->getFiled('Q6A2S3L5', $argUserID) : "";
	$total_petrol_vehicle = ($this->getFiled('Q6A2S3P5', $argUserID) != '') ? $this->getFiled('Q6A2S3P5', $argUserID) : "";
	$total_disel_vehicle = ($this->getFiled('Q6A2S3D5', $argUserID) != '') ? $this->getFiled('Q6A2S3D5', $argUserID) : "";
//	echo 'Total No of Vehicle' . $no_of_vehicle . 'CNG ' . $total_cng_vehicle . 'Elec Bio ' . $total_elec_bio_vehicle . 'LPG ' . $total_lpg_vehicle . 'Disel ' . $total_disel_vehicle;
	//Cng Vehicle Points
	if (($total_cng_vehicle != '') && ($total_cng_vehicle != 0)) {
	    if ($total_cng_vehicle == $no_of_vehicle) {
		$Q3_b_CNG = 1;
	    } else if ($total_cng_vehicle < $no_of_vehicle) {
		$Q3_b_CNG = ($total_cng_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//Electric Bio Points
	if (($total_elec_bio_vehicle != '') && ($total_elec_bio_vehicle != 0)) {
	    if ($total_elec_bio_vehicle == $no_of_vehicle) {
		$Q3_b_ELE_BIO = 1;
	    } else if ($total_elec_bio_vehicle < $no_of_vehicle) {
		$Q3_b_ELE_BIO = ($total_elec_bio_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//LPG Points
	if (($total_lpg_vehicle != '') && ($total_lpg_vehicle != 0)) {
	    if ($total_lpg_vehicle == $no_of_vehicle) {
		$Q3_b_LPG = 1;
	    } else if ($total_lpg_vehicle < $no_of_vehicle) {
		$Q3_b_LPG = ($total_lpg_vehicle * 0.50) / $no_of_vehicle;
	    }
	}
	//Petrol Points
	if (($total_petrol_vehicle != '') && ($total_petrol_vehicle != 0)) {
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
	$total_population_smv = $this->getFiled('Q7A1S4', $argUserID) + $this->getFiled('Q7A2S4', $argUserID) + $this->getFiled('Q7A3S4', $argUserID) + $this->getFiled('Q7A4S4', $argUserID) + $this->getFiled('Q7A5S4', $argUserID) + $this->getFiled('Q7A6S4', $argUserID);

	//Private Vehicles Points Calculation
	$private_veh_population = ($this->getFiled('Q7A7S4', $argUserID)) ? $this->getFiled('Q7A7S4', $argUserID) : 0 + ($this->getFiled('Q7A8S4', $argUserID)) ? $this->getFiled('Q7A8S4', $argUserID) : 0;

	//Non-Polluting Mode Ponits Calcution
	//echo  $this->getFiled('Q7A9S4', $argUserID);
	$total_population_npm = $this->getFiled('Q7A9S4', $argUserID) + $this->getFiled('Q7A10S4', $argUserID) + $this->getFiled('Q7A11S4', $argUserID);

	$total_smv_npm = $total_population_smv + $total_population_npm;
	//echo $total_population_smv;
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
//	echo $total_air_points;
//	echo '<pre>';
//	print_r($arrPoints);
//	exit;
	return $total_air_points;
    }

}
