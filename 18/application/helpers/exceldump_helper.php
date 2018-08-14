<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/************************************************************************/
/*Some Other Function*/
/************************************************************************/
if (!function_exists('getFiled')) {
function getFiled($argWhere, $argUserID) {
    $CI = & get_instance();
	$test = '';
	$temp = $CI ->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
  }
}
if (!function_exists('getSchoolFiled')) {
function getSchoolFiled($argWhere, $argUserID) {
    $CI = & get_instance();
	$test = '';
	$temp = $CI->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }
}
/************************************************************************/
/*This Function Used For General Profile Excel Dump*/
/************************************************************************/
if (!function_exists('schoolprofilegeneral')) {
function schoolprofilegeneral($userId) {
    $CI = & get_instance();
	$data = array();
	$query = $CI->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1' && gsp_school.userid=".$userId."");
	$uArray=$query->result_array();
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
	for ($i = 0; $i < count($uArray); $i++) {
    $audit_period=null;
	if(getFiled('Q7G1', $uArray[$i]['userid'])==1):
	$audit_period=$audit_period."Jan".",";
	endif;
	if(getFiled('Q7G2', $uArray[$i]['userid'])==2):
	$audit_period=$audit_period."Feb".",";
	endif;
	if(getFiled('Q7G3', $uArray[$i]['userid'])==3):
	$audit_period=$audit_period."Mar".",";
	endif;
	if(getFiled('Q7G4', $uArray[$i]['userid'])==4):
	$audit_period=$audit_period."April".",";
	endif;
	if(getFiled('Q7G5', $uArray[$i]['userid'])==5):
	$audit_period=$audit_period."May".",";
	endif;
	if(getFiled('Q7G6', $uArray[$i]['userid'])==6):
	$audit_period=$audit_period."June".",";
	endif;
	if(getFiled('Q7G7', $uArray[$i]['userid'])==7):
	$audit_period=$audit_period."July".",";
	endif;
	if(getFiled('Q7G8', $uArray[$i]['userid'])==8):
	$audit_period=$audit_period."Aug".",";
	endif;
	if(getFiled('Q7G9', $uArray[$i]['userid'])==9):
	$audit_period=$audit_period."Sept".",";
	endif;
	if(getFiled('Q7G10', $uArray[$i]['userid'])==10):
	$audit_period=$audit_period."Oct".",";
	endif;
	if(getFiled('Q7G11', $uArray[$i]['userid'])==11):
	$audit_period=$audit_period."Nov".",";
	endif;
	if(getFiled('Q7G12', $uArray[$i]['userid'])==12):
	$audit_period=$audit_period."Dec".",";
	endif;
	$gender=null;
	if(getFiled('Q2G1', $uArray[$i]['userid'])==1):
	$gender=$gender."only boys".",";
	elseif(getFiled('Q2G1', $uArray[$i]['userid'])==2):
	$gender=$gender."Only Girls".",";
	elseif(getFiled('Q2G1', $uArray[$i]['userid'])==3):
	$gender=$gender."Mixed/Co-education".",";
	endif;
	    $vale = (getFiled('Q1S1', $uArray[$i]['userid']) != '') ? getFiled('Q1S1', $uArray[$i]['userid']) : "";
	    //echo $vale.$uArray[$i]['id'].'<br>';
	    $val_shift = (getFiled('Q2S1', $uArray[$i]['userid']) != '') ? getFiled('Q2S1', $uArray[$i]['userid']) : "";
	    $val_board = (getFiled('Q3G1', $uArray[$i]['userid']) != '') ? getFiled('Q3G1', $uArray[$i]['userid']) : "";
	    $val_area = (getFiled('Q8G1', $uArray[$i]['userid']) != '') ? getFiled('Q8G1', $uArray[$i]['userid']) : "";
	    $val_aid = (getFiled('Q9G1', $uArray[$i]['userid']) != '') ? getFiled('Q9G1', $uArray[$i]['userid']) : "";
	    //echo $vale;
	    $data[$i] = array(
		'userid' => $uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
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
		'lowest_level' => (getFiled('Q1G1', $uArray[$i]['userid']) != '') ? getFiled('Q1G1', $uArray[$i]['userid']) : "",
		'higest_level' => (getFiled('Q1G2', $uArray[$i]['userid']) != '') ? getFiled('Q1G2', $uArray[$i]['userid']) : "",
		'gender' => ($gender != '') ? $gender : "",
		'educatio_board' => ($val_board != '') ? $arrBoard[$val_board] : "",
		'population' => (getFiled('Q4G4S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S3', $uArray[$i]['userid']) : "",
		'students' => (getFiled('Q4G1S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G1S3', $uArray[$i]['userid']) : "",
		'teachers' => (getFiled('Q4G2S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G2S3', $uArray[$i]['userid']) : "",
		'nonteachers' => (getFiled('Q4G3S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G3S3', $uArray[$i]['userid']) : "",
		'male' => (getFiled('Q4G4S1', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S1', $uArray[$i]['userid']) : "",
		'female' => (getFiled('Q4G4S2', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S2', $uArray[$i]['userid']) : "",
		'visitor' => (getFiled('Q5G1', $uArray[$i]['userid']) != '') ? getFiled('Q5G1', $uArray[$i]['userid']) : "",
		'working_days' => (getFiled('Q6G1', $uArray[$i]['userid']) != '') ? getFiled('Q6G1', $uArray[$i]['userid']) : "",
		'audit_period' => ($audit_period != '') ? $audit_period : "",
		'location' => ($val_area != '') ? $area[$val_area] : "",
		'aid' => ($val_aid != '') ? $type_aid[$val_aid] : ""
	    );
	}
   $result=$CI->db->select("*")->from("tbl_general")->where(array("userid"=>$userId))->get()->row();
   if($result){	
    $CI->db->update_batch('tbl_general',$data,'userid');
   }else{
     $CI->db->insert_batch('tbl_general', $data);
   }
 }
}  
/************************************************************************/
/*This Function Used For Air Section Excel Dump*/
/************************************************************************/

if (!function_exists('Air_performance')) {
function Air_performance($argUserID) {
	$arrPoints = array();
	$Q3_b_CNG = "";
	$Q3_b_ELE_BIO = "";
	$Q3_b_LPG = "";
	$Q3_b_PETROL = "";
	$no_of_vehicle = "";
	//Q2 To calculate the Window-floor ratio of classrooms in your school
	$total_floor_area = (getFiled('Q5A110S2', $argUserID) != '') ? getFiled('Q5A110S2', $argUserID) : 0; //X = Area of floor (LxB)
	$total_area_of_openings = (getFiled('Q5A110S3', $argUserID) != '') ? getFiled('Q5A110S3', $argUserID) : 0; //Y = Area of openings (LxH)
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
	$ownship_vehicle = (getFiled('Q6A1', $argUserID) != '') ? getFiled('Q6A1', $argUserID) : 0;
	if (($ownship_vehicle == 1) || ($ownship_vehicle == 2)) {
	    $arrPoints['Q3'] = 5;
	} else if ($ownship_vehicle == 3 || $ownship_vehicle == 4 || $ownship_vehicle == 5) {
	    $no_of_vehicle = (getFiled('Q6A2S1T1', $argUserID) != '') ? getFiled('Q6A2S1T1', $argUserID) : "";
	    $eight_year_old = (getFiled('Q6A2S1T2', $argUserID) != '') ? getFiled('Q6A2S1T2', $argUserID) : "";
	    $air_condtioned_vehicle = (getFiled('Q6A2S1T3', $argUserID) != '') ? getFiled('Q6A2S1T3', $argUserID) : "";
	    $puc_vehicle = (getFiled('Q6A2S1T4', $argUserID) != '') ? getFiled('Q6A2S1T4', $argUserID) : "";
	    $authorise_parking = (getFiled('Q6A2S1T5', $argUserID) != '') ? getFiled('Q6A2S1T5', $argUserID) : "";
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
	$total_cng_vehicle = (getFiled('Q6A2S3C5', $argUserID) != '') ? getFiled('Q6A2S3C5', $argUserID) : "";
	$total_elec_bio_vehicle = (getFiled('Q6A2S3H5', $argUserID) != '') ? getFiled('Q6A2S3H5', $argUserID) : "";
	$total_lpg_vehicle = (getFiled('Q6A2S3L5', $argUserID) != '') ? getFiled('Q6A2S3L5', $argUserID) : "";
	$total_petrol_vehicle = (getFiled('Q6A2S3P5', $argUserID) != '') ? getFiled('Q6A2S3P5', $argUserID) : "";
	$total_disel_vehicle = (getFiled('Q6A2S3D5', $argUserID) != '') ? getFiled('Q6A2S3D5', $argUserID) : "";
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
	$total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;

	//Total of Sustainable Motorised Vehicles
	$total_population_smv = getFiled('Q7A1S4', $argUserID) + getFiled('Q7A2S4', $argUserID) + getFiled('Q7A3S4', $argUserID) + getFiled('Q7A4S4', $argUserID) + getFiled('Q7A5S4', $argUserID) + getFiled('Q7A6S4', $argUserID);

	//Private Vehicles Points Calculation
	$private_veh_population = (getFiled('Q7A7S4', $argUserID)) ? getFiled('Q7A7S4', $argUserID) : 0 + (getFiled('Q7A8S4', $argUserID)) ? getFiled('Q7A8S4', $argUserID) : 0;

	//Non-Polluting Mode Ponits Calcution
	//echo  $CI->getFiled('Q7A9S4', $argUserID);
	$total_population_npm = getFiled('Q7A9S4', $argUserID) + getFiled('Q7A10S4', $argUserID) + getFiled('Q7A11S4', $argUserID);

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
/**********************************************************/
if (!function_exists('air')) {
function air($userId) {
	ini_set('memory_limit', '-1');
	$CI = & get_instance();
	$query = $CI->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
	$points = array();
	for ($i = 0; $i < count($uArray); $i++) {
	    $points[$i] = array(
		'userid' => $uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4A1' => (getFiled('Q4A1', $uArray[$i]['userid']) != '') ? getFiled('Q4A1', $uArray[$i]['userid']) : "NA",
		'Q5A110S2' => (getFiled('Q5A110S2', $uArray[$i]['userid']) != '') ? getFiled('Q5A110S2', $uArray[$i]['userid']) : "NA",
		'Q5A110S3' => (getFiled('Q5A110S3', $uArray[$i]['userid']) != '') ? getFiled('Q5A110S3', $uArray[$i]['userid']) : "NA",
		'Q6A1' => (getFiled('Q6A1', $uArray[$i]['userid']) != '') ? getFiled('Q6A1', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T1' => (getFiled('Q6A2S1T1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T1', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T2' => (getFiled('Q6A2S1T2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T2', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T3' => (getFiled('Q6A2S1T3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T3', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T4' => (getFiled('Q6A2S1T4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T4', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T5' => (getFiled('Q6A2S1T5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T5', $uArray[$i]['userid']) : "NA",
		'Q6A2S1T6' => (getFiled('Q6A2S1T6', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S1T6', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D5' => (getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D1' => (getFiled('Q6A2S3D1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P1' => (getFiled('Q6A2S3P1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3P1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L1' => (getFiled('Q6A2S3L1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3L1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C1' => (getFiled('Q6A2S3C1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3C1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E1' => (getFiled('Q6A2S3E1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3E1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H1' => (getFiled('Q6A2S3H1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3H1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B1' => (getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3B1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D5' => (getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'total_cars' => getFiled('Q6A2S3B1', $uArray[$i]['userid']) + getFiled('Q6A2S3D2', $uArray[$i]['userid']) + getFiled('Q6A2S3P2', $uArray[$i]['userid']) + getFiled('Q6A2S3L2', $uArray[$i]['userid']) + getFiled('Q6A2S3C2', $uArray[$i]['userid']) + getFiled('Q6A2S3E2', $uArray[$i]['userid']) + getFiled('Q6A2S3H2', $uArray[$i]['userid']),
		'Q6A2S3B1' => (getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3B1', $uArray[$i]['userid']) : "NA",
		'Q6A2S3D2' => (getFiled('Q6A2S3D2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P2' => (getFiled('Q6A2S3P2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3P2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L2' => (getFiled('Q6A2S3L2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3L2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C2' => (getFiled('Q6A2S3C2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3C2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E2' => (getFiled('Q6A2S3E2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3E2', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H2' => (getFiled('Q6A2S3H2', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3H2', $uArray[$i]['userid']) : "NA",
		'total_vans' => getFiled('Q6A2S3D3', $uArray[$i]['userid']) + getFiled('Q6A2S3P3', $uArray[$i]['userid']) + getFiled('Q6A2S3L3', $uArray[$i]['userid']) + getFiled('Q6A2S3C3', $uArray[$i]['userid']) + getFiled('Q6A2S3E3', $uArray[$i]['userid']) + getFiled('Q6A2S3H3', $uArray[$i]['userid']) + getFiled('Q6A2S3B3', $uArray[$i]['userid']),
		'Q6A2S3D3' => (getFiled('Q6A2S3D3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P3' => (getFiled('Q6A2S3P3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3P3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L3' => (getFiled('Q6A2S3L3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3L3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C3' => (getFiled('Q6A2S3C3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3C3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E3' => (getFiled('Q6A2S3E3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3E3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H3' => (getFiled('Q6A2S3H3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3H3', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B3' => (getFiled('Q6A2S3B3', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3B3', $uArray[$i]['userid']) : "NA",
		'total_other' => getFiled('Q6A2S3D4', $uArray[$i]['userid']) + getFiled('Q6A2S3P4', $uArray[$i]['userid']) + getFiled('Q6A2S3L4', $uArray[$i]['userid']) + getFiled('Q6A2S3C4', $uArray[$i]['userid']) + getFiled('Q6A2S3E4', $uArray[$i]['userid']) + getFiled('Q6A2S3H4', $uArray[$i]['userid']) + getFiled('Q6A2S3B4', $uArray[$i]['userid']),
		'Q6A2S3D4' => (getFiled('Q6A2S3D4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3P4' => (getFiled('Q6A2S3P4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3P4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3L4' => (getFiled('Q6A2S3L4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3L4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3C4' => (getFiled('Q6A2S3C4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3C4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3E4' => (getFiled('Q6A2S3E4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3E4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3H4' => (getFiled('Q6A2S3H4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3H4', $uArray[$i]['userid']) : "NA",
		'Q6A2S3B4' => (getFiled('Q6A2S3B4', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3B4', $uArray[$i]['userid']) : "NA",
		'total_disel' => (getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3D5', $uArray[$i]['userid']) : "NA",
		'total_petrol' => (getFiled('Q6A2S3P5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3P5', $uArray[$i]['userid']) : "NA",
		'total_lpg' => (getFiled('Q6A2S3L5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3L5', $uArray[$i]['userid']) : "NA",
		'total_cng' => (getFiled('Q6A2S3C5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3C5', $uArray[$i]['userid']) : "NA",
		'total_hybrid' => (getFiled('Q6A2S3E5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3E5', $uArray[$i]['userid']) : "NA",
		'total_electric' => (getFiled('Q6A2S3H5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3H5', $uArray[$i]['userid']) : "NA",
		'total_biofuel' => (getFiled('Q6A2S3B5', $uArray[$i]['userid']) != '') ? getFiled('Q6A2S3B5', $uArray[$i]['userid']) : "NA",
		'Q6A3' => (getFiled('Q6A3', $uArray[$i]['userid']) != '') ? getFiled('Q6A3', $uArray[$i]['userid']) : "NA",
		'Q6A4S1' => (getFiled('Q6A4S1', $uArray[$i]['userid']) != '') ? getFiled('Q6A4S1', $uArray[$i]['userid']) : "NA",
		'Q7A1S1' => (getFiled('Q7A1S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A1S1', $uArray[$i]['userid']) : "NA",
		'Q7A1S2' => (getFiled('Q7A1S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A1S2', $uArray[$i]['userid']) : "NA",
		'Q7A1S3' => (getFiled('Q7A1S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A1S3', $uArray[$i]['userid']) : "NA",
		'Q7A1S4' => (getFiled('Q7A1S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A1S4', $uArray[$i]['userid']) : "NA",
		'Q7A2S1' => (getFiled('Q7A2S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A2S1', $uArray[$i]['userid']) : "NA",
		'Q7A2S2' => (getFiled('Q7A2S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A2S2', $uArray[$i]['userid']) : "NA",
		'Q7A2S3' => (getFiled('Q7A2S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A2S3', $uArray[$i]['userid']) : "NA",
		'Q7A2S4' => (getFiled('Q7A2S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A2S4', $uArray[$i]['userid']) : "NA",
		'Q7A3S1' => (getFiled('Q7A3S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A3S1', $uArray[$i]['userid']) : "NA",
		'Q7A3S2' => (getFiled('Q7A3S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A3S2', $uArray[$i]['userid']) : "NA",
		'Q7A3S3' => (getFiled('Q7A3S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A3S3', $uArray[$i]['userid']) : "NA",
		'Q7A3S4' => (getFiled('Q7A3S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A3S4', $uArray[$i]['userid']) : "NA",
		'Q7A4S1' => (getFiled('Q7A4S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A4S1', $uArray[$i]['userid']) : "NA",
		'Q7A4S2' => (getFiled('Q7A4S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A4S2', $uArray[$i]['userid']) : "NA",
		'Q7A4S3' => (getFiled('Q7A4S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A4S3', $uArray[$i]['userid']) : "NA",
		'Q7A4S4' => (getFiled('Q7A4S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A4S4', $uArray[$i]['userid']) : "NA",
		'Q7A5S1' => (getFiled('Q7A5S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A5S1', $uArray[$i]['userid']) : "NA",
		'Q7A5S2' => (getFiled('Q7A5S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A5S2', $uArray[$i]['userid']) : "NA",
		'Q7A5S3' => (getFiled('Q7A5S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A5S3', $uArray[$i]['userid']) : "NA",
		'Q7A5S4' => (getFiled('Q7A5S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A5S4', $uArray[$i]['userid']) : "NA",
		'Q7A6S1' => (getFiled('Q7A6S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A6S1', $uArray[$i]['userid']) : "NA",
		'Q7A6S2' => (getFiled('Q7A6S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A6S2', $uArray[$i]['userid']) : "NA",
		'Q7A6S3' => (getFiled('Q7A6S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A6S3', $uArray[$i]['userid']) : "NA",
		'Q7A6S4' => (getFiled('Q7A6S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A6S4', $uArray[$i]['userid']) : "NA",
		'Q7A7S1' => (getFiled('Q7A7S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A7S1', $uArray[$i]['userid']) : "NA",
		'Q7A7S2' => (getFiled('Q7A7S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A7S2', $uArray[$i]['userid']) : "NA",
		'Q7A7S3' => (getFiled('Q7A7S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A7S3', $uArray[$i]['userid']) : "NA",
		'Q7A7S4' => (getFiled('Q7A7S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A7S4', $uArray[$i]['userid']) : "NA",
		'Q7A8S1' => (getFiled('Q7A8S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A8S1', $uArray[$i]['userid']) : "NA",
		'Q7A8S2' => (getFiled('Q7A8S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A8S2', $uArray[$i]['userid']) : "NA",
		'Q7A8S3' => (getFiled('Q7A8S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A8S3', $uArray[$i]['userid']) : "NA",
		'Q7A8S4' => (getFiled('Q7A8S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A8S4', $uArray[$i]['userid']) : "NA",
		'Q7A9S1' => (getFiled('Q7A9S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A9S1', $uArray[$i]['userid']) : "NA",
		'Q7A9S2' => (getFiled('Q7A9S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A9S2', $uArray[$i]['userid']) : "NA",
		'Q7A9S3' => (getFiled('Q7A9S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A9S3', $uArray[$i]['userid']) : "NA",
		'Q7A9S4' => (getFiled('Q7A9S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A9S4', $uArray[$i]['userid']) : "NA",
		'Q7A10S1' => (getFiled('Q7A10S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A10S1', $uArray[$i]['userid']) : "NA",
		'Q7A10S2' => (getFiled('Q7A10S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A10S2', $uArray[$i]['userid']) : "NA",
		'Q7A10S3' => (getFiled('Q7A10S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A10S3', $uArray[$i]['userid']) : "NA",
		'Q7A10S4' => (getFiled('Q7A10S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A10S4', $uArray[$i]['userid']) : "NA",
		'Q7A11S1' => (getFiled('Q7A11S1', $uArray[$i]['userid']) != '') ? getFiled('Q7A11S1', $uArray[$i]['userid']) : "NA",
		'Q7A11S2' => (getFiled('Q7A11S2', $uArray[$i]['userid']) != '') ? getFiled('Q7A11S2', $uArray[$i]['userid']) : "NA",
		'Q7A11S3' => (getFiled('Q7A11S3', $uArray[$i]['userid']) != '') ? getFiled('Q7A11S3', $uArray[$i]['userid']) : "NA",
		'Q7A11S4' => (getFiled('Q7A11S4', $uArray[$i]['userid']) != '') ? getFiled('Q7A11S4', $uArray[$i]['userid']) : "NA",
		'Q8A1' => (getFiled('Q8A1', $uArray[$i]['userid']) != '') ? getFiled('Q8A1', $uArray[$i]['userid']) : "NA",
		'Q9A1' => (getFiled('Q9A1', $uArray[$i]['userid']) != '') ? getFiled('Q9A1', $uArray[$i]['userid']) : "NA",
		'Q9A2' => (getFiled('Q9A2', $uArray[$i]['userid']) != '') ? getFiled('Q9A2', $uArray[$i]['userid']) : "NA",
		'points' => Air_performance($uArray[$i]['userid'])
	    );
	}
    $result=$CI->db->select("*")->from("tbl_air")->where(array("userid"=>$userId))->get()->row();
   if($result){	
    $CI->db->update_batch('tbl_air',$points,'userid');
   }else{
     $CI->db->insert_batch('tbl_air', $points);
   }
    }
}
