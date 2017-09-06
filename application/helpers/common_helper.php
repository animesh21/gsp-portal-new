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
        $CI->db->where('userid', $argID);
        $CI->db->update('gsp_school', $arr);
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
    function getEnergyPoints($argID)
    {
        
    }
}
