<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PrimaryPoint extends CI_Controller {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
		$this->load->helper('common_helper');
    }
    /**This Code Used For Year To Year Representation**/
    public function index(){
	  $query = $this->db->query("SELECT gsp_school.*,gsp_school.id As school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	  $uArray=$query->result_array();
	  for ($i = 0; $i < count($uArray); $i++) {
	  $air=$this->Air_performance($uArray[$i]['userid']);
	  $energy=$this->getEnergyPoints($uArray[$i]['userid']);
	  $food=$this->getFoodPoints($uArray[$i]['userid']);
	  $land=$this->getLandPoints($uArray[$i]['userid']);
	  $water=$this->getWaterPoints($uArray[$i]['userid']);
	  $waste=$this->getWastePoints($uArray[$i]['userid']);
	   echo "Air:".$air."<br/>";
	   echo "Energy:".$energy."<br/>";
	   echo "Food:".$food."<br/>";
	   echo "land:".$land."<br/>";
	   echo "water:".$water."<br/>";
	   echo "waste:".$waste."<br/>";
	   $total=($energy+$food+$land+$water+$waste)/95;
	   echo $total*100;
	  $this->db->where("lowest_level>=1");
	   $this->db->where("higest_level<=5");
	  $dataPrimarySchool=$this->db->select("*")->from("tbl_total")->get()->result();
	  foreach($dataPrimarySchool as $dataPrimarySchool){
	  	$air=$this->Air_performance($dataPrimarySchool->userid);
	  $energy=$this->getEnergyPoints($dataPrimarySchool->userid);
	  $food=$this->getFoodPoints($dataPrimarySchool->userid);
	  $land=$this->getLandPoints($dataPrimarySchool->userid);
	  $water=$this->getWaterPoints($dataPrimarySchool->userid);
	   $waste=$this->getWastePoints($dataPrimarySchool->userid);
	  $primaryDump[]=array("userid"=>$dataPrimarySchool->userid,"energy_points"=>$energy,"food_points"=>$food,"land_points"=>$land);
	  $this->db->where(array("userid"=>$dataPrimarySchool->userid));
	 $this->db->where("lowest_level>=1");
	  $this->db->where("higest_level<=5");
	  $this->db->update("tbl_total",array("air_points"=>$air, "energy_points"=>$energy,"food_points"=>$food,"land_points"=>$land,"water_points"=>$water,"waste_points"=>$waste));
	  }
	  }	
	  echo $this->db->last_query();
	 //  echo "<pre>";
	 // print_r($primaryDump);
	}	
    
	
	
	 public function Air_performance($argUserID) {
	$arrPoints = array();
	$Q3_b_CNG = 0;
	$Q3_b_ELE_BIO = 0;
	$Q3_b_LPG = 0;
	$Q3_b_PETROL = 0;
	$no_of_vehicle = 0;
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
	    $arrPoints['Q3'] = 3;
	} else if ($ownship_vehicle == 3 || $ownship_vehicle == 4 || $ownship_vehicle == 5) {
	    $no_of_vehicle = (getFiled('Q6A2S1T1', $argUserID) != '') ? getFiled('Q6A2S1T1', $argUserID) : "";
	    $eight_year_old = (getFiled('Q6A2S1T2', $argUserID) != '') ? getFiled('Q6A2S1T2', $argUserID) : "";
	    $air_condtioned_vehicle = (getFiled('Q6A2S1T3', $argUserID) != '') ? getFiled('Q6A2S1T3', $argUserID) : "";
	    $puc_vehicle = (getFiled('Q6A2S1T4', $argUserID) != '') ? getFiled('Q6A2S1T4', $argUserID) : "";
	    $authorise_parking = (getFiled('Q6A2S1T5', $argUserID) != '') ?getFiled('Q6A2S1T5', $argUserID) : "";
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
	//echo '';
	//print_r($arrPoints);
	$total_cng_vehicle = (getFiled('Q6A2S3C5', $argUserID) != '') ? getFiled('Q6A2S3C5', $argUserID) : "";
	$total_elec_bio_vehicle = (getFiled('Q6A2S3H5', $argUserID) != '') ? getFiled('Q6A2S3H5', $argUserID) : "";
	$total_lpg_vehicle = (getFiled('Q6A2S3L5', $argUserID) != '') ? getFiled('Q6A2S3L5', $argUserID) : "";
	$total_petrol_vehicle = (getFiled('Q6A2S3P5', $argUserID) != '') ? getFiled('Q6A2S3P5', $argUserID) : "";
	$total_disel_vehicle = (getFiled('Q6A2S3D5', $argUserID) != '') ? getFiled('Q6A2S3D5', $argUserID) : "";
	//Cng Vehicle Points
	if ($total_cng_vehicle != '' && $total_cng_vehicle !=0) {
	    if ($total_cng_vehicle == $no_of_vehicle) {
		$Q3_b_CNG = 1;
	    } else if ($total_cng_vehicle < $no_of_vehicle) {
		$Q3_b_CNG = ($total_cng_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//Electric Bio Points
	if ($total_elec_bio_vehicle != '' && $total_elec_bio_vehicle !=0) {
	    if ($total_elec_bio_vehicle == $no_of_vehicle) {
		$Q3_b_ELE_BIO = 1;
	    } else if ($total_elec_bio_vehicle < $no_of_vehicle) {
		$Q3_b_ELE_BIO = ($total_elec_bio_vehicle * 1) / $no_of_vehicle;
	    }
	}
	//LPG Points
	if ($total_lpg_vehicle != '' && $total_lpg_vehicle !=0) {
	    if ($total_lpg_vehicle == $no_of_vehicle) {
		$Q3_b_LPG = 1;
	    } else if ($total_lpg_vehicle < $no_of_vehicle) {
		$Q3_b_LPG = ($total_lpg_vehicle * 0.50) / $no_of_vehicle;
	    }
	}
	//Petrol Points
	if ($total_petrol_vehicle != ''  && $total_petrol_vehicle !=0) {
	    if ($total_petrol_vehicle == $no_of_vehicle) {
		$Q3_b_PETROL = 1;
	    } else if ($total_petrol_vehicle < $no_of_vehicle) {
		$Q3_b_PETROL = ($total_petrol_vehicle * 0.25) / $no_of_vehicle;
	    }
	}
	echo $arrPoints['Fuel'] = $Q3_b_CNG + $Q3_b_ELE_BIO + $Q3_b_LPG + $Q3_b_PETROL;
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
	// echo "<pre>";
	// print_r($arrPoints);
	return $total_air_points;
    }
	
	
	
	
	
	
	
	
	
	
 public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	}
	
	
	public function getEnergyPoints($argUserID) {
	///$argUserID=2429;
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
	    //echo $megajole_per_cepta_day;
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
        //Q Are?there?any?alternate?sources?of?energy?employed/?installed?in?your?school?
	$point = array();
	$totaL_energy = getFiled('Q6E15S2', $argUserID) ;
	//echo $totaL_energy;
	if(getFiled('Q6E9S2', $argUserID) != "" && getFiled('Q6E9S2', $argUserID) > 0) //Solar 
	{
	    $point['Solar']= (getFiled('Q6E9S2', $argUserID) / $totaL_energy) * 5;
	}
	if(getFiled('Q6E8S2', $argUserID) != "" && getFiled('Q6E8S2', $argUserID) > 0) //Animal Waste
	{
	    $point['Animal']= (getFiled('Q6E8S2', $argUserID) / $totaL_energy) * 5;
	}
	if(getFiled('Q6E10S2', $argUserID) != "" && getFiled('Q6E10S2', $argUserID) > 0) //Wind
	{
	    $point['Wind']= (getFiled('Q6E10S2', $argUserID) / $totaL_energy) * 5;
	}
	if(getFiled('Q6E13S2', $argUserID) != "" && getFiled('Q6E13S2', $argUserID) > 0) //BioGas
	{
	    $point['BioGas']= (getFiled('Q6E13S2', $argUserID) / $totaL_energy) * 5;
	}
	if(getFiled('Q6E5S2', $argUserID) != "" && getFiled('Q6E5S2', $argUserID) > 0) //CNG
	{
	    $point['CNG']= (getFiled('Q6E5S2', $argUserID) / $totaL_energy) * 3.33;
	}
	if(getFiled('Q6E16S2', $argUserID) != "" && getFiled('Q6E16S2', $argUserID) > 0) //Wood
	{
	    $point['Wood']= (getFiled('Q6E16S2', $argUserID) / $totaL_energy) * 3.33;
	}
	if(getFiled('Q6E11S2', $argUserID) != "" && getFiled('Q6E11S2', $argUserID) > 0) //LPG
	{
	    $point['LPG']= (getFiled('Q6E11S2', $argUserID) / $totaL_energy) * 3.33;
	}
	if(getFiled('Q6E12S2', $argUserID) != "" && getFiled('Q6E12S2', $argUserID) > 0) //PNG
	{
	    $point['PNG']= (getFiled('Q6E12S2', $argUserID) / $totaL_energy) * 3.33;
	}
	if(getFiled('Q6E1S2', $argUserID) != "" && getFiled('Q6E1S2', $argUserID) > 0) //Electricity From Board
	{
	    //echo getFiled('Q6E1S2', $argUserID);
	    $point['ElectricityFboard']= (getFiled('Q6E1S2', $argUserID) / $totaL_energy) * 2.5;
	    //echo "electricity".$point;
	}
	if(getFiled('Q6E1S2', $argUserID) != "" && getFiled('Q6E2S2', $argUserID) > 0) //Electricity From Generator
	{
	    $point['ElectricityGenrator']= (getFiled('Q6E2S2', $argUserID) / $totaL_energy) * 1.67;
	}
	
	if(getFiled('Q6E3S2', $argUserID) != "" && getFiled('Q6E3S2', $argUserID) > 0) //Petrol
	{
	    $point['Petrol']= (getFiled('Q6E3S2', $argUserID) / $totaL_energy) * 1.67;
	}
	if(getFiled('Q6E4S2', $argUserID) != "" && getFiled('Q6E4S2', $argUserID) > 0) //Diesel
	{
	    $point['Disel']= (getFiled('Q6E4S2', $argUserID) / $totaL_energy) * 0.83;
	}
	if(getFiled('Q6E6S2', $argUserID) != "" && getFiled('Q6E6S2', $argUserID) > 0) //Kerosene
	{
	    $point['Kerosene']= (getFiled('Q6E6S2', $argUserID) / $totaL_energy) * 0.83;
	}
	if(getFiled('Q6E7S2', $argUserID) != "" && getFiled('Q6E7S2', $argUserID) > 0) // Coal
	{
	    $point['Coal']= (getFiled('Q6E7S2', $argUserID) / $totaL_energy) * 0.83;
	}
	//echo '<pre>'; print_r($point); exit;
	$energy_points['source_energy']= array_sum($point);
        if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : "") != "") {
            if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "Y") {
                $energy_points['Q6_energy'] = 1;
            } else if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "N") {
                $energy_points['Q6_energy'] = 0;
            }
        }
	///echo array_sum($energy_points);
        
		// echo '<pre>'; print_r($energy_points);
        return number_format(array_sum($energy_points), 2);
		
    }
	
	public function getFoodPoints($argUserID) {
	$food_points = array();
	//Q.3 What kind of food is being served/sold in your school?
	/*$totalFlavourVariaint = array();
	$totalItemSold = array();
	$monthFoodSold = array();
	$TASK_TWO = (getFiled('Q4F1', $argUserID) != '') ? getFiled('Q4F1', $argUserID) : "";
	if ($TASK_TWO != '') {
	    if ($TASK_TWO == "N") {
		$food_points['q3_served'] = 6;
	    } else if($TASK_TWO == "Y"){
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
	    }
	}else
	{
	    $food_points['q3_serverd'] = 0;
	}*/
	///$Task3 = getFiled('Q4F1', $argUserID) != "" ? (getFiled('Q4F1', $argUserID) == "N" ? 6 : 0) : 0;  //Need To This. If it is No then add 6 points else follow task 3
	//Q4 Does your school serve traditional Indian snacks?
	$q4 = (getFiled('Q7F1', $argUserID) != '') ? getFiled('Q7F1', $argUserID) : "";
	//echo 'Traditional Foode'.$q4;
	if ($q4 != '') {
	    if ($q4 == 'Y') {
		$samosa = (getFiled('Q7F1S1', $argUserID) != '') ? getFiled('Q7F1S1', $argUserID) : "";
		$sambhar = (getFiled('Q7F1S2', $argUserID) != '') ? getFiled('Q7F1S2', $argUserID) : "";
		$pavBhaji = (getFiled('Q7F1S3', $argUserID) != '') ? getFiled('Q7F1S3', $argUserID) : "";
		$momos = (getFiled('Q7F1S4', $argUserID) != '') ? getFiled('Q7F1S4', $argUserID) : "";
		$other = (getFiled('Q7F1S5', $argUserID) != '') ? getFiled('Q7F1S5', $argUserID) : "";
		//echo $samosa.$sambhar.$pavBhaji.$momos.$other;
		if (($samosa == '' || $samosa == 0) && ($sambhar == '' || $sambhar == 0) && ($pavBhaji == '' || $pavBhaji == 0) && ($momos == '' || $momos == 0) && ($other == '' || $other == 0)) {
		    $food_points['q4_trad_snack'] = 0;
		} else {
		    $food_points['q4_trad_snack'] = 1;
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
		if (($nimbopani == '' || $nimbopani == 0) && ($lassi == '' || $lassi == 0) && ($buttermilk == '' || $buttermilk == 0) && ($aampana == '' || $aampana == 0) && ($other == '' || $other == 0)) {
		    $food_points['q4_trad_beverages'] = 0;
		} else {
		    $food_points['q4_trad_beverages'] = 1;
		}
	    } else if ($q5 == 'N') {
		$food_points['q4_trad_beverages'] = 0;
	    }
	}
	//What kind of food does your school promote? 
	//Q6 Does the school distribute packaged food items as rewards during schools events?
	$q6 = (getFiled('Q9F1', $argUserID) != '') ? getFiled('Q9F1', $argUserID) : "";
	//echo  $q6 ;
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
	/*$q8 = (getFiled('Q11F1', $argUserID) != '') ? getFiled('Q11F1', $argUserID) : "";
	if ($q8 == 'Y') {
	    $food_points['q8_food_company'] = 0;
	} else {
	    $food_points['q8_food_company'] = 1;
	}*/

	//Q9.Does your school measure height and weight of all the students?
	/*$q9 = (getFiled('Q12F1', $argUserID) != '') ? getFiled('Q12F1', $argUserID) : "";
	if ($q9 == 'Y') {
	    $food_points['q9'] = 1;
	} else {
	    $food_points['q9'] = 0;
	}*/
	 // echo "<pre>";
	 // print_r($food_points);
	return array_sum($food_points);
    }
	
	
	public function getLandPoints($argUserID) {
        $land_points = array();
        // Explore the number of species of plants and animals in your school
        $total_site_area = (getFiled('Q4L2', $argUserID) != '') ? getFiled('Q4L2', $argUserID) : 0 + (getFiled('Q4L3', $argUserID) != '') ? getFiled('Q4L3', $argUserID) : 0 + (getFiled('Q4L4', $argUserID) != '') ? getFiled('Q4L4', $argUserID) : 0 + (getFiled('Q4L5', $argUserID) != '') ? getFiled('Q4L5', $argUserID) : 0 + (getFiled('Q4L6', $argUserID) != '') ? getFiled('Q4L6', $argUserID) : 0 + (getFiled('Q4L7', $argUserID) != '') ? getFiled('Q4L7', $argUserID) : 0 + (getFiled('Q4L8', $argUserID) != '') ? getFiled('Q4L8', $argUserID) : 0;

        //Q2 How many species of plants and animals exist in your school
        $plants = (getFiled('Q5L1S3', $argUserID) != '') ? getFiled('Q5L1S3', $argUserID) : 0;
        $animals = (getFiled('Q5L2S3', $argUserID) != '') ? getFiled('Q5L2S3', $argUserID) : 0;
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
            $land_points['Q2_animals'] = ($animals / 50) * 2;
        }
        //Find out if your school uses chemical-based pesticides 
        //Q3 Do you use chemical-based pesticides in your school green cover?
        $pestiside = (getFiled('Q6L1', $argUserID) != '') ? getFiled('Q6L1', $argUserID) : "";
        if ($pestiside != '') {
            if ($pestiside == 'Y') {
                $land_points['Q3_pestiside'] = 0;
            } else if ($pestiside == 'N') {
                $land_points['Q3_pestiside'] = 2;
            }
        }
       
	 //    echo "<pre>";
		// print_r($land_points);
        return array_sum($land_points);
    }
	
	
	public function getWaterPoints($argUserID) {
	//WATER POINTS CALCULATIONS STARTS HERE
	$water_points = array();
	//Q1.Calculate your school’s water consumption, per activity:	(7 points)
	//Total Water Consumption
	$total_water_consumption = (getFiled('Q4W11', $argUserID) != '') ? getFiled('Q4W11', $argUserID) : 0;
	$total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;
	$total_population=getFiled('Q4G4S3', $argUserID);
	$lpcd = $total_water_consumption / $total_population;
	$school_type = (getFiled('Q1S1', $argUserID) != '') ? getFiled('Q1S1', $argUserID) : 0;

	if (($lpcd < 13) && ($lpcd !=0)) {
	    $water_points['q1_water_consuption'] = ceil(($lpcd * 7) / 13);
	} else {
	    if (($school_type == 1) && ($lpcd >= 13 && $lpcd <= 17)) { // condition for Day Scholar school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 2) && ($lpcd >= 15 && $lpcd <= 25)) { // condition for Day Boarding school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 3) && ($lpcd >= 125 && $lpcd <= 135)) { // condition for Residential school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 4) && ($lpcd >= 15 && $lpcd <= 25)) { // condition for Day Scholar + Day Boarding school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 5) && ($lpcd >= 25 && $lpcd <= 135)) { // condition for Day Boarding + Residential school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 6) && ($lpcd >= 17 && $lpcd <= 135)) { // condition for Day Scholar + Residential school.
		$water_points['q1_water_consuption'] = 7;
	    } else if (($school_type == 7) && ($lpcd >= 15 && $lpcd <= 135)) { // condition for Day Scholar + Day Boarding + Residential school.
		$water_points['q1_water_consuption'] = 7;
	    } else {
		$water_points['q1_water_consuption'] = 0;
	    }
	}
	
	
	//Task 3: What Are The Sources, Supply and Storage of Water in your School?
	//Q2.Where does the water your school uses, come from?
	$A = (getFiled('Q5W1', $argUserID) != '') ? getFiled('Q5W1', $argUserID) : 0;
	$B = (getFiled('Q5W2', $argUserID) != '') ? getFiled('Q5W2', $argUserID) : 0;
	$C = (getFiled('Q5W3', $argUserID) != '') ? getFiled('Q5W3', $argUserID) : 0;
	$D = (getFiled('Q5W4', $argUserID) != '') ? getFiled('Q5W4', $argUserID) : 0;
	//echo 'A '.$A.'B '.$B.'C '.$C.' D'.$D;
	if (($B != '') && ($C != '') && ($D != '')) {
	    $water_points['q2_water_comes'] = 4;
	}else if(($B !='') && ($C !=''))
	{
	    $water_points['q2_water_comes'] = 3;
	}else if(($B !='') && ($D !=''))
	{
	    $water_points['q2_water_comes'] = 3;
	}else if (($A != '') && ($B != '') && ($C != '') && ($D != ''))
	{
	    $water_points['q2_water_comes'] = 2;
	}else if (($A != '') && ($D != ''))
	{
	    $water_points['q2_water_comes'] = 2;
	}else if(($A != '') && ($C != ''))
	{
	    $water_points['q2_water_comes'] = 2;
	}else if(($A != '') && ($B != '') && ($D != ''))
	{
	    $water_points['q2_water_comes'] = 2;
	}else if(($A != '') && ($B != '') && ($C != ''))
	{
	    $water_points['q2_water_comes'] = 2;
	}else if(($B != '') && ($A == '') && ($C == '') && ($D == ''))
	{
	     $water_points['q2_water_comes'] = 1;
	}else if(($B != '') && ($A != ''))
	{
	    $water_points['q2_water_comes'] = 1;
	}else if(($B == '') && ($A != '') && ($C == '') && ($D == ''))
	{
	    $water_points['q2_water_comes'] = 0;
	}else if(($B == '') && ($A == '') && ($C != '') && ($D != ''))
	{
	    $water_points['q2_water_comes'] = 0;
	}else if(($C != '') && ($A == '') && ($B == '') && ($D == ''))
	{
	    $water_points['q2_water_comes'] = 0;
	}else if(($D != '') && ($A == '') && ($B == '') && ($C == ''))
	{
	    $water_points['q2_water_comes'] = 0;
	}

		//Task 5: Does your school harvest rainwater? 
	//Q4.Do you have Rainwater harvesting (RWH) system in your school? 2 POINTS
	$rain_water_harvest = ($this->getFiled('Q8W2', $argUserID) != '') ? $this->getFiled('Q8W2', $argUserID) : 0;
	if ($rain_water_harvest == 'Y') {
	    $water_points['q4_water_harvest'] = 2;
	} else {
	    $water_points['q4_water_harvest'] = 0;
	}

	//4(a) Which is the catchment area being harvested by your school? 

	echo $catchment_harested = (getFiled('Q8W2S1S1', $argUserID) != '') ? getFiled('Q8W2S1S1', $argUserID) : 0;
	//echo '<pre>';
	if (($catchment_harested == 1) || ($catchment_harested == 2) || ($catchment_harested == 3) || ($catchment_harested == 4) || ($catchment_harested == 5) || ($catchment_harested == 6)) {
	    $water_points['q6_a_water_catchments'] = 2;
	} else if ($catchment_harested == 7) {
	    $water_points['q6_a_water_catchments'] = 4;
	} else {
	    $water_points['q6_a_water_catchments'] = 0;
	}


	//Q.4(c) Does your school clean your catchment and system (structure?)?
	$catchmentsystem = getFiled('Q8W2S61', $argUserID);
	//echo $catchmentsystem;
	if ($catchmentsystem == "Y") {
	    $water_points['q6f_cathment_structure'] = 2; //If answer to above question is Yes, then your school will get 2 points.
	} else {
	    $water_points['q6f_cathment_structure'] = 0;
	}



	//Task 6: Are the plumbing and sanitation facilities in your school adequate?
	//7 Please share details about sanitation and hygiene practices in your school:
	$sperate_toilets = (getFiled('Q8W3S1', $argUserID) != '') ?getFiled('Q8W3S1', $argUserID) : "";
	$toilet_accesible = (getFiled('Q8W3S4', $argUserID) != '') ? getFiled('Q8W3S4', $argUserID) : "";
	$toilet_accesible_differently_abled = (getFiled('Q8W3S5', $argUserID) != '') ? getFiled('Q8W3S5', $argUserID) : "";
	$differently_abled_teacher_nonteacher = (getFiled('Q8W3S6', $argUserID) != '') ?getFiled('Q8W3S6', $argUserID) : "";
	$pivacy_safty = (getFiled('Q8W3S7', $argUserID) != '') ? getFiled('Q8W3S7', $argUserID) : "";
	$light = (getFiled('Q8W3S8', $argUserID) != '') ? getFiled('Q8W3S8', $argUserID) : "";
	$after_luanch = (getFiled('Q8W3S9', $argUserID) != '') ? getFiled('Q8W3S9', $argUserID) : "";
	$before_luanch = (getFiled('Q8W3S10', $argUserID) != '') ? getFiled('Q8W3S10', $argUserID) : "";
	if ($sperate_toilets == "Y") {
	    $water_points['q7_seprate_toiltes'] = 1;
	} else {
	    $water_points['q7_seprate_toiltes'] = 0;
	}
	if ($toilet_accesible == "Y") {
	    $water_points['q7_accible_toilets'] = 1;
	} else {
	    $water_points['q7_accible_toilets'] = 0;
	}
	if ($toilet_accesible_differently_abled == "Y") {
	    $water_points['q7_accible_toilets_differently_abled'] = 1;
	} else {
	    $water_points['q7_accible_toilets_differently_abled'] = 0;
	}
	if ($differently_abled_teacher_nonteacher == "Y") {
	    $water_points['q7_accible_toilets_differently_abled_teacher'] = 1;
	} else {
	    $water_points['q7_accible_toilets_differently_abled_teacher'] = 0;
	}
	if ($pivacy_safty == "Y") {
	    $water_points['Q7_privacy_staff'] = 1;
	} else {
	    $water_points['Q7_privacy_staff'] = 0;
	}
	if ($light == "Y") {
	    $water_points['Q7_light'] = 1;
	} else {
	    $water_points['Q7_light'] = 0;
	}
	if ($after_luanch == "Y") {
	    $water_points['after_luanch'] = 1;
	} else {
	    $water_points['after_luanch'] = 0;
	}
	if ($before_luanch == "Y") {
	    $water_points['before_luanch'] = 1;
	} else {
	    $water_points['before_luanch'] = 0;
	}


	    //Q6How many drinking water taps do you have? 
	$q6_drinkin_water_taps = (getFiled('Q9W1', $argUserID) != '') ? getFiled('Q9W1', $argUserID) : "";
	$drinking_load = $total_population / $q6_drinkin_water_taps;
	if($q6_drinkin_water_taps !=0)
	{
	if (($drinking_load < 50) ) {
	    $water_points['Q6_Load_water_drinking'] = 1;
	} else {
	    $water_points['Q6_Load_water_drinking'] = 0;
	}
	}
	
	//Q9How many hand pumps do you have?
	 $hand_pumps = ($this->getFiled('Q10W1', $argUserID) != '') ? $this->getFiled('Q10W1', $argUserID) : "";
	if ($drinking_load >= 0) {
	    $water_points['Q9_hand_pumps'] = 1;
	} else {
	    $water_points['Q9_hand_pumps'] = 0;
	}



	//Q8 How many ablution taps (taps used for washing hands only) do you have?
	$ablution_taps_q8 = (getFiled('Q11W1', $argUserID) != '') ? getFiled('Q11W1', $argUserID) : "";
	if (($ablution_taps_q8 != "") && ($ablution_taps_q8 != 0)) {
	    $Load_for_ablution_taps = $total_population / $ablution_taps_q8;

	    if ($Load_for_ablution_taps <= 50 && $ablution_taps_q8 != "" && $ablution_taps_q8 != 0) {
		         $water_points['q8_abosultion_tap'] = 1;
	         } else {
		         $water_points['q8_abosultion_tap'] = 0;
	    }
	}

		////Q.9 How many water closets (used for defecation and urination) do you have?
	$water_closets_q9 = (getFiled('Q13W1S4', $argUserID) != '') ? getFiled('Q13W1S4', $argUserID) : "";
	if (($water_closets_q9 != '') && ($water_closets_q9 != 0)) {
	    $Load_for_water_closets = $total_population / $water_closets_q9;
	    if ($school_type == 1 && $Load_for_water_closets <= 45 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //school type Day Scholar
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 2 && $Load_for_water_closets <= 35 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Boarding 
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 3 && $Load_for_water_closets <= 25 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Residential 
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 4 && $Load_for_water_closets <= 40 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Day Boarding
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 5 && $Load_for_water_closets <= 30 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Boarding + Residential
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 6 && $Load_for_water_closets <= 35 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Residential
		$water_points['q9_water_closets'] = 1;
	    } else if ($school_type == 7 && $Load_for_water_closets <= 25 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q9_water_closets'] = 1;
	    } else {
		$water_points['q9_water_closets'] = 0;
	    }
	}

    //Q.10 How many urinals (strictly used for urination only) do you have?
	$water_closets_q10 = (getFiled('Q14W1', $argUserID) != '') ? getFiled('Q14W1', $argUserID) : "";
	if (($water_closets_q10 != "") && ($water_closets_q10 != 0)) {
	    $Load_for_urinals = $total_population / $water_closets_q10;
	    if ($school_type == 1 && $Load_for_urinals <= 50 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //school type Day Scholar
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 2 && $Load_for_urinals <= 40 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Day Boarding 
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 3 && $Load_for_urinals <= 30 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Residential 
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 4 && $Load_for_urinals <= 50 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Day Scholar + Day Boarding
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 5 && $Load_for_urinals <= 35 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Day Boarding + Residential
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 6 && $Load_for_urinals <= 50 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Day Scholar + Residential
		$water_points['q10_urinals'] = 1;
	    } else if ($school_type == 7 && $Load_for_urinals <= 30 && $water_closets_q10 != "" && $water_closets_q10 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q10_urinals'] = 1;
	    }
	}
	if (!isset($water_points['q10_urinals']))
	    $water_points['q10_urinals'] = 0;

 

    //Q.11 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )
	$other_water_outlets_q11 = (getFiled('Q15W1', $argUserID) != '') ? getFiled('Q15W1', $argUserID) : "";
	//$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;
    if($water_points['Q6_Load_water_drinking'] + $water_points['q8_abosultion_tap'] + $water_points['q9_water_closets'] + $water_points['q10_urinals'] > 1){
       	    $water_points['q11_water_outlets'] = 0;
	}else{
	if ($hand_pumps <= 1) {
	    $water_points['q11_water_outlets'] = 1;
	} }


	//Q.12 Is there a water storage system in place to supply water in the toilets? ( 1 Points )
	$supply_water_in_toilets = (getFiled('Q16W1', $argUserID) != '') ? getFiled('Q16W1', $argUserID) : "";
	if ($supply_water_in_toilets == "Y") {
	    $water_points['q12_water_in_toilets'] = 1;
	} else {
	    $water_points['q12_water_in_toilets'] = 0;
	}
	// Q.13. Is the water supply sufficient?  ( 1 Points )
	$supply_sufficient = (getFiled('Q17W1', $argUserID) != '') ? getFiled('Q17W1', $argUserID) : "";
	if ($supply_sufficient == "Y") {
	    $water_points['q13_supply_sufficient'] = 1;
	} else {
	    $water_points['q13_supply_sufficient'] = 0;
	}
	//Q.14. Are the toilets cleaned? Yes. ( 1 Points )
	$toilets_cleaned = (getFiled('Q18W1', $argUserID) != '') ? getFiled('Q18W1', $argUserID) : "";
	if ($toilets_cleaned == "Y") {
	    $water_points['q14_toilets_cleaned'] = 1;
	} else {
	    $water_points['q14_toilets_cleaned'] = 0;
	}
	//Q.15. Does your school treat wastewater? ( 5 Points )
	$treat_wastewater = (getFiled('Q19W1', $argUserID) != '') ? getFiled('Q19W1', $argUserID) : "";
	if ($treat_wastewater == "Y") {
	    $water_points['q15_treat_wastewater'] = 5;
	} else {
	    $water_points['q15_treat_wastewater'] = 0;
	}
	//Q.16. Does your school reuse the treated wastewater? ( 5 Points )
	//If Yes
    //Q.16.(a). How does your school reuse wastewater? (Multiple Choice)
	//If yes, and Q18(a) is answered,  your school gets five points

	$reusewastewater = (getFiled('Q20W1', $argUserID) != '') ? getFiled('Q20W1', $argUserID) : "";
	$reusewastewater_a=(getFiled('Q20W3', $argUserID) != '') ? getFiled('Q20W3', $argUserID) : "";
	if ($reusewastewater == "Y") {
	    $water_points['q16_reuse_water'] = 5;
	} else {
	    $water_points['q16_reuse_water'] = 0;
	}

	//Task 4: What is the water conservation practices followed in your school?
	//Q5What are the water conservation practices your school follows 
	//Do all tanks in the school have float valves installed to stop overflow?
	// $q_5_3 = ($this->getFiled('Q8W1S1', $argUserID) != '') ? $this->getFiled('Q8W1S1', $argUserID) : 0;
	// if ($q_5_3 == "Y") {
	//     $water_points['q_5_1'] = 1;
	// } else {
	//     $water_points['q_5_1'] = 0;
	// }
	// //Do the drinking water points have spill proof taps to check overflow?
	// $q_5_4 = ($this->getFiled('Q8W1S4', $argUserID) != '') ? $this->getFiled('Q8W1S4', $argUserID) : 0;
	// if ($q_5_4 == "Y") {
	//     $water_points['q_5_4'] = 1;
	// } else {
	//     $water_points['q_5_4'] = 0;
	// }
	// //Does your school use appliances with a quick-wash setting?
	// $q_5_5 = ($this->getFiled('Q8W1S5', $argUserID) != '') ? $this->getFiled('Q8W1S5', $argUserID) : 0;
	// if ($q_5_5 == "Y") {
	//     $water_points['q_5_5'] = 1;
	// } else {
	//     $water_points['q_5_5'] = 0;
	// }
	// //Are dual flush systems installed in the toilets?
	// $q_5_6 = ($this->getFiled('Q8W1S6', $argUserID) != '') ? $this->getFiled('Q8W1S6', $argUserID) : 0;
	// if ($q_5_6 == "Y") {
	//     $water_points['q_5_6'] = 1;
	// } else {
	//     $water_points['q_5_6'] = 0;
	// }
	// //Are the toilets situated in the right location in terms of privacy and safety?
	// $q_5_8 = (getFiled('Q8W3S7', $argUserID) != '') ? getFiled('Q8W3S7', $argUserID) : 0;
	// if ($q_5_8 == "Y") {
	//     $water_points['q_5_7'] = 1;
	// } else {
	//     $water_points['q_5_7'] = 0;
	// }
	
	// //Does your school grow local plant species which require limited amount of water to grow?
	// $q_5_8 = (getFiled('Q8W1S8', $argUserID) != '') ? getFiled('Q8W1S8', $argUserID) : 0;
	// if ($q_5_8 == "Y") {
	//     $water_points['q_5_8'] = 1;
	// } else {
	//     $water_points['q_5_8'] = 0;
	// }
	// //Has your school initiated any water conservation steps in the school or outside, in the past one year?
	// $q_5_9 = ($this->getFiled('Q8W1S9', $argUserID) != '') ? $this->getFiled('Q8W1S9', $argUserID) : 0;
	// if ($q_5_9 == "Y") {
	//     $water_points['q_5_9'] = 1;
	// } else {
	//     $water_points['q_5_9'] = 0;
	// }
	// //Does your school use a drip or irrigation system?
	// $q_5_10 = ($this->getFiled('Q8W1S10', $argUserID) != '') ? $this->getFiled('Q8W1S10', $argUserID) : 0;
	// if ($q_5_10 == "Y") {
	//     $water_points['q_5_10'] = 1;
	// } else {
	//     $water_points['q_5_10'] = 0;
	// }

	


 

	
	// //6(c) How much area in your school is harvested?
	// $school_harvested_area = ($this->getFiled('Q8W2S4', $argUserID) != '') ? $this->getFiled('Q8W2S4', $argUserID) : 0;
	// if ($school_harvested_area == 7 || $school_harvested_area == 8 || $school_harvested_area == 9) {
	//     $water_points['q6c_harvested_area'] = 10;
	// } else if ($school_harvested_area == 5 || $school_harvested_area == 6) {
	//     $water_points['q6c_harvested_area'] = 8;
	// } else if ($school_harvested_area == 4) {
	//     $water_points['q6c_harvested_area'] = 6;
	// } else if ($school_harvested_area == 3) {
	//     $water_points['q6c_harvested_area'] = 4;
	// } else if ($school_harvested_area == 1 || $school_harvested_area == 2) {
	//     $water_points['q6c_harvested_area'] = 2;
	// } else {
	//     $water_points['q6c_harvested_area'] = 0;
	// }
	// //Q6.eRate your catchment on cleanliness
	// $cleanliness = ($this->getFiled('Q8W2S5', $argUserID) != '') ? $this->getFiled('Q8W2S5', $argUserID) : 0;
	// if ($cleanliness == 1) {
	//     $water_points['q6e_cleanness'] = 3; //good
	// } else if ($cleanliness == 2) {
	//     $water_points['q6e_cleanness'] = 1; //Average
	// } else {
	//     $water_points['q6e_cleanness'] = 0; //Poor
	// }
	
	// ////Q.6(g). Does your school monitor the rainwater harvesting structure for its efficiency?
	// $harvesting_structure = $this->getFiled('Q8W2S8', $argUserID);
	// if ($harvesting_structure == "Y") {
	//     $water_points['q6f_monitor'] = 1;
	// } else {
	//     $water_points['q6f_monitor'] = 0;
	// }
	
	
/*	//Q8How many drinking water taps do you have? 
	$q8_drinkin_water_taps = (getFiled('Q9W1', $argUserID) != '') ? getFiled('Q9W1', $argUserID) : "";
	$drinking_load = $total_population / $q8_drinkin_water_taps;
	if($q8_drinkin_water_taps !=0)
	{
	if (($drinking_load < 50) ) {
	    $water_points['Q8_Load_water_drinking'] = 1;
	} else {
	    $water_points['Q8_Load_water_drinking'] = 0;
	}
	}
	//Q9How many hand pumps do you have?
	$hand_pumps = (getFiled('Q10W1', $argUserID) != '') ? $this->getFiled('Q10W1', $argUserID) : "";
	echo $hand_pumps;
	if ($drinking_load <= 1) {
	    $water_points['Q9_hand_pumps'] = 1;
	} else {
	    $water_points['Q9_hand_pumps'] = 0;
	}
	//Q10 How many ablution taps (taps used for washing hands only) do you have?
	$ablution_taps_q10 = ($this->getFiled('Q11W1', $argUserID) != '') ? $this->getFiled('Q11W1', $argUserID) : "";
	if (($ablution_taps_q10 != "") && ($ablution_taps_q10 != 0)) {
	    $Load_for_ablution_taps = $total_population / $ablution_taps_q10;

	    if ($Load_for_ablution_taps <= 50 && $ablution_taps_q10 != "" && $ablution_taps_q10 != 0) {
		$water_points['q10_abosultion_tap'] = 1;
	    } else {
		$water_points['q10_abosultion_tap'] = 0;
	    }
	}*/
	
	//Q6=
	
	
	
	/*////Q.11 How many water closets (used for defecation and urination) do you have?
	$water_closets_q9 = ($this->getFiled('Q13W1S4', $argUserID) != '') ? $this->getFiled('Q13W1S4', $argUserID) : "";
	if (($water_closets_q9 != '') && ($water_closets_q9 != 0)) {
	    $Load_for_water_closets = $total_population / $water_closets_q9;
	    if ($school_type == 1 && $Load_for_water_closets <= 45 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //school type Day Scholar
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 2 && $Load_for_water_closets <= 35 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Boarding 
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 3 && $Load_for_water_closets <= 25 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Residential 
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 4 && $Load_for_water_closets <= 40 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Day Boarding
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 5 && $Load_for_water_closets <= 30 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Boarding + Residential
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 6 && $Load_for_water_closets <= 35 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Residential
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 7 && $Load_for_water_closets <= 25 && $water_closets_q9 != "" && $water_closets_q9 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q11_water_closets'] = 1;
	    } else {
		$water_points['q11_water_closets'] = 0;
	    }
	}*/
	
	
	
    //echo '<pre>';
    //print_r($water_points);

	return array_sum($water_points);
    }
	
	
	
	
public function getWastePoints($argUserID) {
	$waste_points = array();
	//Q1Does your school segregate solid waste
	$Q1=(getFiled('Q4Wa1', $argUserID) != '') ? getFiled('Q4Wa1', $argUserID) : 0;
	//echo 'Q1'.$Q1;
	if($Q1=='Y')
	{
	    $waste_points['Q1_solid_waste']=5;
	}else if($Q1=='N')
	{
	    $waste_points['Q1_solid_waste']=0;
	}
	
	
	//2(a) How many categories does your school segregate waste into? 
	$total_two_bins = (getFiled('Q5Wa11S3', $argUserID) != '') ? getFiled('Q5Wa11S3', $argUserID) : 0;
	$total_three_bins = (getFiled('Q5Wa11S4', $argUserID) != '') ? getFiled('Q5Wa11S4', $argUserID) : 0;
	$total_collection_point = (getFiled('Q5Wa11S5', $argUserID) != '') ? getFiled('Q5Wa11S5', $argUserID) : 0;

	$total_with_no_bins = (getFiled('Q5Wa11S1', $argUserID) != '') ? getFiled('Q5Wa11S1', $argUserID) : 0;
	$total_with_one_bin = (getFiled('Q5Wa11S2', $argUserID) != '') ? getFiled('Q5Wa11S2', $argUserID) : 0;
	$total_with_three_bin = (getFiled('Q5Wa11S4', $argUserID) != '') ? getFiled('Q5Wa11S4', $argUserID) : 0;

	if($total_collection_point>=0){	
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
}
	
/*	
	//Q3.How much waste does yousr school generate?
	$_PER_CAPITA_VAL='';
	//Determine the quantity of waste generated in your school.
	$total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;
	//Biodigrable/Wet Waste
	$biodigrable=(getFiled('Q6Wa1S5', $argUserID) != '') ? getFiled('Q6Wa1S5', $argUserID) : 0;
	//Dry Recycable Waste
	$total_dry_waste=(getFiled('Q6Wa2S8', $argUserID) != '') ? getFiled('Q6Wa2S8', $argUserID) : 0;
	//Domestic hazardous waste
	$total_hazardous_waste=(getFiled('Q6Wa3S3', $argUserID) != '') ? getFiled('Q6Wa3S3', $argUserID) : 0;
	//E-Waste
	$total_e_waste=(getFiled('Q6Wa4S1', $argUserID) != '') ? getFiled('Q6Wa4S1', $argUserID) : 0;
	//Biomedical waste
	$total_biomedical_waste=(getFiled('Q6Wa5S1', $argUserID) != '') ? getFiled('Q6Wa5S1', $argUserID) : 0;
	//Sanitery Waste
	$total_sanitary_waste=(getFiled('Q6Wa6S1', $argUserID) != '') ? getFiled('Q6Wa6S1', $argUserID) : 0;
	//Cc and DD
	$total_cc_and_dd=(getFiled('Q6Wa7S1', $argUserID) != '') ? getFiled('Q6Wa7S1', $argUserID) : 0;	
	$PER_DAY_WASTE=($biodigrable+$total_dry_waste+$total_hazardous_waste+$total_e_waste+$total_biomedical_waste+$total_sanitary_waste+$total_cc_and_dd)/30;
	$PER_CAPITA_WASTE=$PER_DAY_WASTE/$total_population;
	$SCHOOL_CATGEORY=(getFiled('Q1S1', $argUserID) != '') ? getFiled('Q1S1', $argUserID) : 0;
	//echo $PER_CAPITA_WASTE;
	if($SCHOOL_CATGEORY==1)//Day Schoolar
	{
	    $_PER_CAPITA_VAL=100;
	}else if($SCHOOL_CATGEORY==2)
	{
	    $_PER_CAPITA_VAL=150;
	}else if($SCHOOL_CATGEORY==3)
	{
	    $_PER_CAPITA_VAL=300;
	}else if($SCHOOL_CATGEORY==4)
	{
	    $_PER_CAPITA_VAL=150;
	}else if($SCHOOL_CATGEORY==5)
	{
	    $_PER_CAPITA_VAL=300;
	}else if($SCHOOL_CATGEORY==6)
	{
	    $_PER_CAPITA_VAL=300;
	}else if($SCHOOL_CATGEORY==7)
	{
	     $_PER_CAPITA_VAL=300;
	}
	//echo $PER_CAPITA_WASTE;
	if($PER_CAPITA_WASTE<=$_PER_CAPITA_VAL)
	{
	    $waste_points['Q3_percapita_waste']=10;
	}else
	{
	    $waste_points['Q3_percapita_waste']=0;
	}
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
	}*/
	
	//Q4 Does your school have a composting facility?
	/*Point*/
	$composition_facility = (getFiled('Q9Wa1', $argUserID) != '') ? getFiled('Q9Wa1', $argUserID) : "";
	if ($composition_facility != '') {
	    if ($composition_facility == 'Y') {
		$waste_points['Q4_facility'] = 5;
	    } else if ($composition_facility == 'N') {
		$waste_points['Q4_facility'] = 0;
	    }
	}
	
	$methodology_used_1= (getFiled('Q9Wa4S1', $argUserID) != '') ? getFiled('Q9Wa4S1', $argUserID) : "";
	$methodology_used_2= (getFiled('Q9Wa4S2', $argUserID) != '') ? getFiled('Q9Wa4S2', $argUserID) : "";
	$methodology_used_3= (getFiled('Q9Wa4S3', $argUserID) != '') ? getFiled('Q9Wa4S3', $argUserID) : "";
	$methodology_used_4= (getFiled('Q9Wa4S4', $argUserID) != '') ? getFiled('Q9Wa4S4', $argUserID) : "";
	if(!empty($methodology_used_1) || !empty($methodology_used_2) || !empty($methodology_used_3) || !empty($methodology_used_4)){
	  $waste_points['Q4_methodology_used'] = 5;
	}
	else{
	  $waste_points['Q4_methodology_used'] = 0;
	}
	
	
	$author_waste=(getFiled('Q13Wa1', $argUserID) != '') ? getFiled('Q13Wa1', $argUserID) : "";
	$authorize_e_easte=(getFiled('Q13Wa2', $argUserID) != '') ? getFiled('Q13Wa2', $argUserID) : "";
	//echo $authorize_e_easte;
	if($author_waste =='Y')
	{
	    if(($authorize_e_easte==2) || ($authorize_e_easte==3) || ($authorize_e_easte==4)){
		$waste_points['Q9_Ewaste_scapping']=5;
	    }else if($authorize_e_easte==1){
		$waste_points['Q9_Ewaste_scapping']=0;
	    }
	}
	
	//Q5 a. What is the methodology used?
//	$methodology = (getFiled('Q9Wa2S1', $argUserID) != '') ? getFiled('Q9Wa2S1', $argUserID) : "";
//	if ($methodology != '') {
//	    $waste_points['Q5_facility'] = 10;
//	}

	/*//Q9 Do you know that your e-waste can be collected by an authorized dealer or dismantler?
	$author_waste=(getFiled('Q13Wa1', $argUserID) != '') ? getFiled('Q13Wa1', $argUserID) : "";
	$authorize_e_easte=(getFiled('Q13Wa2', $argUserID) != '') ? getFiled('Q13Wa2', $argUserID) : "";
	//echo $authorize_e_easte;
	if($author_waste =='Y')
	{
	    if(($authorize_e_easte==2) || ($authorize_e_easte==3) || ($authorize_e_easte==4)){
		$waste_points['Q9_Ewaste_scapping']=5;
	    }else if($authorize_e_easte==1){
		$waste_points['Q9_Ewaste_scapping']=0;
	    }
	}*/
	
	// echo '<pre>'; print_r($waste_points);
	return array_sum($waste_points);
	//print_r($waste_points);
    }
 
} 
   