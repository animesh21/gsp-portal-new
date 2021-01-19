<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->helper('common_helper');
    }

    public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_quiz_answer', array('question_id' => $argWhere, 'user_id' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function air() {
	ini_set('memory_limit', '-1');
	$query = $this->db->query("SELECT users.*,users.id AS userid FROM `users` INNER JOIN gsp_aduit_home ON users.id=gsp_aduit_home.userid WHERE gsp_aduit_home.status='1'");
	$uArray=$query->result_array();
//	foreach ($user as $u) {
//	    $uArray[] = $this->Air_performance($u->userid);
//	}
	// echo '<pre>';
	// print_r($uArray); exit;
	$points = array();
	for ($i = 0; $i < count($uArray); $i++) {
	    $points[$i] = array(
		'userid' => $uArray[$i]['userid'],
		'name' => ($this->getFiled('name', $uArray[$i]['userid']) != '') ? $this->getFiled('name', $uArray[$i]['userid']) : "NA",
		'grade' => ($this->getFiled('grade', $uArray[$i]['userid']) != '') ? $this->getFiled('grade', $uArray[$i]['userid']) : "NA",
		'gender' => ($this->getFiled('gender', $uArray[$i]['userid']) != '') ? $this->getFiled('gender', $uArray[$i]['userid']) : "NA",
		'mobile' => ($this->getFiled('mobile', $uArray[$i]['userid']) != '') ? $this->getFiled('mobile', $uArray[$i]['userid']) : "NA",
		'email' => ($this->getFiled('email', $uArray[$i]['userid']) != '') ? $this->getFiled('email', $uArray[$i]['userid']) : "NA",
		'district' => ($this->getFiled('district', $uArray[$i]['userid']) != '') ? $this->getFiled('district', $uArray[$i]['userid']) : "NA",
		'state' => ($this->getFiled('state', $uArray[$i]['userid']) != '') ? $this->getFiled('state', $uArray[$i]['userid']) : "NA",
		'school_name' => ($this->getFiled('school_name', $uArray[$i]['userid']) != '') ? $this->getFiled('school_name', $uArray[$i]['userid']) : "NA",
		'school_address' => ($this->getFiled('school_address', $uArray[$i]['userid']) != '') ? $this->getFiled('school_address', $uArray[$i]['userid']) : "NA",
		'pincode' => ($this->getFiled('pincode', $uArray[$i]['userid']) != '') ? $this->getFiled('pincode', $uArray[$i]['userid']) : "NA",
		'participate' => ($this->getFiled('participate', $uArray[$i]['userid']) != '') ? $this->getFiled('participate', $uArray[$i]['userid']) : "NA",
		'Q1A1' => ($this->getFiled('Q1A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1A1', $uArray[$i]['userid']) : "NA",
		'Q2A1' => ($this->getFiled('Q2A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2A1', $uArray[$i]['userid']) : "NA",
		'Q3A1' => ($this->getFiled('Q3A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3A1', $uArray[$i]['userid']) : "NA",
		'Q4A1' => ($this->getFiled('Q4A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4A1', $uArray[$i]['userid']) : "NA",
		'Q5A1' => ($this->getFiled('Q5A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A1', $uArray[$i]['userid']) : "NA",
		'Q6A1' => ($this->getFiled('Q6A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A1', $uArray[$i]['userid']) : "NA",
		'Q7A1' => ($this->getFiled('Q7A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1', $uArray[$i]['userid']) : "NA",
		'ascore' => ($this->getFiled('ascore', $uArray[$i]['userid']) != '') ? $this->getFiled('ascore', $uArray[$i]['userid']) : "NA",
		'Q1E1' => ($this->getFiled('Q1E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1E1', $uArray[$i]['userid']) : "NA",
		'Q2E1' => ($this->getFiled('Q2E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2E1', $uArray[$i]['userid']) : "NA",
		'Q3E1' => ($this->getFiled('Q3E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3E1', $uArray[$i]['userid']) : "NA",
		'Q4E1' => ($this->getFiled('Q4E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4E1', $uArray[$i]['userid']) : "NA",
		'Q5E1' => ($this->getFiled('Q5E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5E1', $uArray[$i]['userid']) : "NA",
		'Q6E1' => ($this->getFiled('Q6E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1', $uArray[$i]['userid']) : "NA",
		'escore' => ($this->getFiled('escore', $uArray[$i]['userid']) != '') ? $this->getFiled('escore', $uArray[$i]['userid']) : "NA",
		'Q1F1' => ($this->getFiled('Q1F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1F1', $uArray[$i]['userid']) : "NA",
		'Q2F1' => ($this->getFiled('Q2F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2F1', $uArray[$i]['userid']) : "NA",
		'Q3F1' => ($this->getFiled('Q3F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3F1', $uArray[$i]['userid']) : "NA",
		'Q4F1' => ($this->getFiled('Q4F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4F1', $uArray[$i]['userid']) : "NA",
		'Q5F1' => ($this->getFiled('Q5F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1', $uArray[$i]['userid']) : "NA",
		'fscore' => ($this->getFiled('fscore', $uArray[$i]['userid']) != '') ? $this->getFiled('fscore', $uArray[$i]['userid']) : "NA",
		'Q1L1' => ($this->getFiled('Q1L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1L1', $uArray[$i]['userid']) : "NA",
		'Q2L1' => ($this->getFiled('Q2L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2L1', $uArray[$i]['userid']) : "NA",
		'Q3L1' => ($this->getFiled('Q3L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3L1', $uArray[$i]['userid']) : "NA",
		'lscore' => ($this->getFiled('lscore', $uArray[$i]['userid']) != '') ? $this->getFiled('lscore', $uArray[$i]['userid']) : "NA",
		'Q1W1' => ($this->getFiled('Q1W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1W1', $uArray[$i]['userid']) : "NA",
		'Q2W1' => ($this->getFiled('Q2W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2W1', $uArray[$i]['userid']) : "NA",
		'Q3W1' => ($this->getFiled('Q3W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3W1', $uArray[$i]['userid']) : "NA",
		'Q4W1' => ($this->getFiled('Q4W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W1', $uArray[$i]['userid']) : "NA",
		'Q5W1' => ($this->getFiled('Q5W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W1', $uArray[$i]['userid']) : "NA",
		'Q6W1' => ($this->getFiled('Q6W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W1', $uArray[$i]['userid']) : "NA",
		'Q7W1' => ($this->getFiled('Q7W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W1', $uArray[$i]['userid']) : "NA",
		'Q8W1' => ($this->getFiled('Q8W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1', $uArray[$i]['userid']) : "NA",
		'Q9W1' => ($this->getFiled('Q9W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9W1', $uArray[$i]['userid']) : "NA",
		'wscore' => ($this->getFiled('wscore', $uArray[$i]['userid']) != '') ? $this->getFiled('wscore', $uArray[$i]['userid']) : "NA",
		'Q1WS1' => ($this->getFiled('Q1WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1WS1', $uArray[$i]['userid']) : "NA",
		'Q2WS1' => ($this->getFiled('Q2WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2WS1', $uArray[$i]['userid']) : "NA",
		'Q3WS1' => ($this->getFiled('Q3WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q3WS1', $uArray[$i]['userid']) : "NA",
		'Q4WS1' => ($this->getFiled('Q4WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4WS1', $uArray[$i]['userid']) : "NA",
		'Q5WS1' => ($this->getFiled('Q5WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5WS1', $uArray[$i]['userid']) : "NA",
		'Q6WS1' => ($this->getFiled('Q6WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6WS1', $uArray[$i]['userid']) : "NA",
		'Q7WS1' => ($this->getFiled('Q7WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7WS1', $uArray[$i]['userid']) : "NA",
		'Q8WS1' => ($this->getFiled('Q8WS1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8WS1', $uArray[$i]['userid']) : "NA",
		'wascore' => ($this->getFiled('wascore', $uArray[$i]['userid']) != '') ? $this->getFiled('wascore', $uArray[$i]['userid']) : "NA",
		

	
	
	
	
	);
	}
//	echo '<pre>';
	print_r($points);
	//$this->db->insert_batch('tbl_air', $points);
	$this->db->insert_batch('tbl_home',$points,'userid');
    }

    public function table() {
	$this->load->dbforge();
	$key = array(
		'userid',
	    'name',
		'grade',
		'gender',
		'mobile',
		'email',
		'district',
		'state',
		'school_name',
		'school_address',
		'pincode',
		'participate',
		'Q1A1',
		'Q2A1',
		'Q3A1',
		'Q4A1',
		'Q5A1',
		'Q6A1',
		'Q7A1',
		'ascore',
		'Q1E1',
		'Q2E1',
		'Q3E1',
		'Q4E1',
		'Q5E1',
		'Q6E1',
		'escore',
		'Q1F1',
		'Q2F1',
		'Q3F1',
		'Q4F1',
		'Q5F1',
		'fscore',
		'Q1L1',
		'Q2L1',
		'Q3L1',
		'lscore',
		'Q1W1',
		'Q2W1',
		'Q3W1',
		'Q4W1',
		'Q5W1',
		'Q6W1',
		'Q7W1',
		'Q8W1',
		'Q9W1',
		'wscore',
		'Q1WS1',
		'Q2WS1',
		'Q3WS1',
		'Q4WS1',
		'Q5WS1',
		'Q6WS1',
		'Q7WS1',
		'Q8WS1',
		'wascore',
		




	    
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
	$this->dbforge->add_key('userid', TRUE);
	$this->dbforge->create_table('tbl_home');
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
