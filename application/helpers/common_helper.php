<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('getStates')) {

    function getStates() {
        $arrState = array();
        $CI = & get_instance();
        $temp = $CI->db->get('states')->result();
        foreach ($temp as $t) {
            $arrState[$t->id] = $t->name;
        }
        return $arrState;
    }

}
/******
* GET SCHOOL ID
*
*******/
if (!function_exists('getSchoolId')) {
       function getSchoolId($argUserID)
	   {
	     $CI = & get_instance();
         $temp = $CI->db->get_where('gsp_school', array('userid' => $argUserID))->row();
		 return $temp->id;
	   }
}


/*
 * Get Filed
 */
if (!function_exists('getFiled')) {

    function getFiled($argWhere, $argUserID) {
        $test = '';
        $CI = & get_instance();
        $temp = $CI->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
        //echo $CI->db->last_query();
        //print_r($temp);
        if (!empty($temp)) {
            $test = $temp->answer;
            ;
        }
        return $test;
    }

}
/**
* Roman Number Digit
*
*/
if (!function_exists('numberToRomanRepresentation')) {
function numberToRomanRepresentation($number) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
}




/*
 * Upload Helper Function
 */
if (!function_exists('uploadHelper')) {

    function uploadHelper($argID, $argTypeName) {
        $CI = & get_instance();
        return $CI->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', $argTypeName)
                        ->get()->result();
    }

}

/*
 * Update Progress Function
 */
if (!function_exists('updateProgress')) {

    function updateProgress($argID, $argProgress) {
        $arr = array('progress' => $argProgress);
        $CI = & get_instance();
        $temp = $CI->db->get_where('gsp_school', array('userid' => $argID))->row();
        if ($argProgress > $temp->progress) {
            $CI->db->where('userid', $argID);
            $CI->db->update('gsp_school', $arr);
        }
        //print_r($temp); exit;
    }

}

/*
 * Progress Bar Value
 */
if (!function_exists('progressBarValue')) {

    function progressBarValue($argID) {
        $CI = get_instance();
        $temp = $CI->db->get_where('gsp_school', array('userid' => $argID))->row();
        return $temp->progress;
    }

}

/*
 * Get Upload File
 */
if (!function_exists('getUploadData')) {

    function getUploadData($argText, $argUserID) {
        $CI = get_instance();
        $temp = $CI->db->select('*')
                        ->from('files')
                        ->where('userid', $argUserID)
                        ->like('file_name', $argText)
                        ->get()->result();
        return $temp;
    }

}

/*
 * Get Air Point Calculation
 */
if (!function_exists('getAirPoints')) {

    function getAirPoints($argUserID) {
        $arrPoints = array();
        $Q3_b_CNG = "";
        $Q3_b_ELE_BIO = "";
        $Q3_b_LPG = "";
        $Q3_b_PETROL = "";
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
        $total_cng_vehicle = (getFiled('Q6A2S3C5', $argUserID) != '') ? getFiled('Q6A2S3C5', $argUserID) : "";
        $total_elec_bio_vehicle = (getFiled('Q6A2S3H5', $argUserID) != '') ? getFiled('Q6A2S3H5', $argUserID) : "";
        $total_lpg_vehicle = (getFiled('Q6A2S3L5', $argUserID) != '') ? getFiled('Q6A2S3L5', $argUserID) : "";
        $total_petrol_vehicle = (getFiled('Q6A2S3P5', $argUserID) != '') ? getFiled('Q6A2S3P5', $argUserID) : "";
        $total_disel_vehicle = (getFiled('Q6A2S3D5', $argUserID) != '') ? getFiled('Q6A2S3D5', $argUserID) : "";
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
        $total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;

        //Total of Sustainable Motorised Vehicles
        $total_population_smv = (getFiled('Q7A1S4', $argUserID) != '') ? getFiled('Q7A1S4', $argUserID) : 0 + (getFiled('Q7A2S4', $argUserID) != '') ? getFiled('Q7A2S4', $argUserID) : 0 + (getFiled('Q7A3S4', $argUserID) != '') ? getFiled('Q7A3S4', $argUserID) : 0 + (getFiled('Q7A4S4', $argUserID) != '') ? getFiled('Q7A4S4', $argUserID) : 0 + (getFiled('Q7A5S4', $argUserID) != '') ? getFiled('Q7A5S4', $argUserID) : 0 + (getFiled('Q7A6S4', $argUserID) != '') ? getFiled('Q7A6S4', $argUserID) : 0;

        //Private Vehicles Points Calculation
        $private_veh_population = (getFiled('Q7A7S4', $argUserID) != '') ? getFiled('Q7A7S4', $argUserID) : 0 + (getFiled('Q7A8S4', $argUserID) != '') ? getFiled('Q7A8S4', $argUserID) : 0;

        //Non-Polluting Mode Ponits Calcution
        $total_population_npm = (getFiled('Q7A9S4', $argUserID) != '') ? getFiled('Q7A9S4', $argUserID) : 0 + (getFiled('Q7A10S4', $argUserID) != '') ? getFiled('Q7A10S4', $argUserID) : 0 + (getFiled('Q7A11S4', $argUserID) != '') ? getFiled('Q7A11S4', $argUserID) : 0;

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

/*
 * Get Energy Points Here
 */
if (!function_exists('getEnergyPoints')) {

    function getEnergyPoints($argUserID) {
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

}

/*
 * Get Food Points
 */
if (!function_exists('getFoodPoints')) {

    function getFoodPoints($argUserID) {
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

}

/*
 * Lands Point
 */
if (!function_exists('getTotalArea')) {

    function getTotalArea($argUserID) {
       $a=getFiled('Q4L2', $argUserID); 
       $b=getFiled('Q4L5', $argUserID); 
       $c=getFiled('Q4L6', $argUserID); 
       $d=getFiled('Q4L7', $argUserID); 
       $e=getFiled('Q4L8', $argUserID); 
       $total = $a+$b+$c+$d+$e;
       return $total;
    }
}
if (!function_exists('getPercentageArea')) {

    function getPercentageArea($argUserID) {
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
}


if (!function_exists('getLandPoints')) {

    function getLandPoints($argUserID) {
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

}

/*
 * Get Waste Point
 */
if (!function_exists('getWastePoints')) {

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

}
if (!function_exists('getWaterPoints')) {

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
        if (!empty(getFiled('Q9W1', $argUserID)) && getFiled('Q9W1', $argUserID)!=0) {
            $load_drinking_water_tap = ($total_population / getFiled('Q9W1', $argUserID));
        
        if ($load_drinking_water_tap < 50) {
            $water_points['load_drinking_water_tap'] = 1;
        }
    }
        if (!empty(getFiled('Q11W1', $argUserID)) &&  getFiled('Q11W1', $argUserID)!=0) {
            $load_ablution_tap = ($total_population / getFiled('Q11W1', $argUserID));
        
        if ($load_ablution_tap < 50) {
            $water_points['load_ablution_tap'] = 1;
        }
    } 
        if (!empty(getFiled('Q13W1S4', $argUserID)) && getFiled('Q13W1S4', $argUserID)!=0) {
            $load_closets = ($total_population / getFiled('Q13W1S4', $argUserID));
        
        if (!empty(getFiled('Q14W1', $argUserID)) && getFiled('Q14W1', $argUserID)!=0 ) {
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

    if (!function_exists('getTotalPoints')) {

        function getTotalPoints($argUserID) {
          $total['air']=getAirPoints($argUserID);
          $total['energy']=getEnergyPoints($argUserID);
          $total['water']=getWaterPoints($argUserID);
          $total['waste']=getWastePoints($argUserID);
          $total['land']=getLandPoints($argUserID);
          $total['food']=getFoodPoints($argUserID);
          
          return array_sum($total);
        }

    }
}   
