<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_energy extends CI_Controller {

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

    public function energy() {
		ini_set('memory_limit', '-1');
	$query = $this->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
	
	$points=array();
	for($i=0; $i<count($uArray); $i++)
	{
		 $total_p= (getFiled('Q4G4S3', $uArray[$i]['userid']) != '') ? getFiled('Q4G4S3', $uArray[$i]['userid']) : 0;
		 $total_e_c = (getFiled('Q6E15S2', $uArray[$i]['userid']) != '') ? (getFiled('Q6E15S2', $uArray[$i]['userid'])) : 0;
		 $per_d_e = ($total_e_c) / 30;
		 $megajole_p_c_d = $per_d_e / $total_p;
	//print_r($uArray[$i]['userid']);exit;
	    $points[$i]=array(
		'userid'=>$uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4E1'=>($this->getFiled('Q4E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4E1', $uArray[$i]['userid']) : "N/A",
		
		'Q5E1'=>($this->getFiled('Q5E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5E1', $uArray[$i]['userid']) : "N/A",
		'Q6E1S1'=>($this->getFiled('Q6E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S1', $uArray[$i]['userid']) : "N/A",
		'Q6E2S1'=>($this->getFiled('Q6E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S1', $uArray[$i]['userid']) : "N/A",
		'Q6E3S1'=>($this->getFiled('Q6E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S1', $uArray[$i]['userid']) : "N/A",
		'Q6E4S1'=>($this->getFiled('Q6E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S1', $uArray[$i]['userid']) : "N/A",
		'Q6E5S1'=>($this->getFiled('Q6E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S1', $uArray[$i]['userid']) : "N/A",
		'Q6E6S1'=>($this->getFiled('Q6E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S1', $uArray[$i]['userid']) : "N/A",
		'Q6E7S1'=>($this->getFiled('Q6E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S1', $uArray[$i]['userid']) : "N/A",
		'Q6E16S1'=>($this->getFiled('Q6E16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S1', $uArray[$i]['userid']) : "N/A",
		'Q6E8S1'=>($this->getFiled('Q6E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S1', $uArray[$i]['userid']) : "N/A",
		'Q6E9S1'=>($this->getFiled('Q6E9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S1', $uArray[$i]['userid']) : "N/A",
		'Q6E10S1'=>($this->getFiled('Q6E10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S1', $uArray[$i]['userid']) : "N/A",
		'Q6E11S1'=>($this->getFiled('Q6E11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S1', $uArray[$i]['userid']) : "N/A",
		'Q6E12S1'=>($this->getFiled('Q6E12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S1', $uArray[$i]['userid']) : "N/A",
		'Q6E13S1'=>($this->getFiled('Q6E13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S1', $uArray[$i]['userid']) : "N/A",
		'Q6E14S1'=>($this->getFiled('Q6E14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S1', $uArray[$i]['userid']) : "N/A",
		'Q6E1S2'=>($this->getFiled('Q6E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S2', $uArray[$i]['userid']) : "N/A",
		'Q6E2S2'=>($this->getFiled('Q6E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S2', $uArray[$i]['userid']) : "N/A",
		'Q6E3S2'=>($this->getFiled('Q6E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S2', $uArray[$i]['userid']) : "N/A",
		'Q6E4S2'=>($this->getFiled('Q6E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S2', $uArray[$i]['userid']) : "N/A",
		'Q6E5S2'=>($this->getFiled('Q6E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S2', $uArray[$i]['userid']) : "N/A",
		'Q6E6S2'=>($this->getFiled('Q6E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S2', $uArray[$i]['userid']) : "N/A",
		'Q6E7S2'=>($this->getFiled('Q6E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S2', $uArray[$i]['userid']) : "N/A",
		'Q6E16S2'=>($this->getFiled('Q6E16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S2', $uArray[$i]['userid']) : "N/A",
		'Q6E8S2'=>($this->getFiled('Q6E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S2', $uArray[$i]['userid']) : "N/A",
		'Q6E9S2'=>($this->getFiled('Q6E9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S2', $uArray[$i]['userid']) : "N/A",
		'Q6E10S2'=>($this->getFiled('Q6E10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S2', $uArray[$i]['userid']) : "N/A",
		'Q6E11S2'=>($this->getFiled('Q6E11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S2', $uArray[$i]['userid']) : "N/A",
		'Q6E12S2'=>($this->getFiled('Q6E12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S2', $uArray[$i]['userid']) : "N/A",
		'Q6E13S2'=>($this->getFiled('Q6E13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S2', $uArray[$i]['userid']) : "N/A",
		'Q6E14S2'=>($this->getFiled('Q6E14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S2', $uArray[$i]['userid']) : "N/A",
		'Q6E15S2'=>($this->getFiled('Q6E15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E15S2', $uArray[$i]['userid']) : "N/A",
		
		'percatitaaa'=>number_format($megajole_p_c_d,2),
		
		
		'Q7E2S1'=>($this->getFiled('Q7E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E2S2'=>($this->getFiled('Q7E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S2', $uArray[$i]['userid']) : "N/A",
		'Q7E2S3'=>($this->getFiled('Q7E2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S3', $uArray[$i]['userid']) : "N/A",
		'Q7E3S1'=>($this->getFiled('Q7E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E3S2'=>($this->getFiled('Q7E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S2', $uArray[$i]['userid']) : "N/A",
		'Q7E3S3'=>($this->getFiled('Q7E3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S3', $uArray[$i]['userid']) : "N/A",
		'Q7E4S1'=>($this->getFiled('Q7E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E4S2'=>($this->getFiled('Q7E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S2', $uArray[$i]['userid']) : "N/A",
		'Q7E4S3'=>($this->getFiled('Q7E4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S3', $uArray[$i]['userid']) : "N/A",
		'Q7E5S1'=>($this->getFiled('Q7E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E5S2'=>($this->getFiled('Q7E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S2', $uArray[$i]['userid']) : "N/A",
		'Q7E5S3'=>($this->getFiled('Q7E5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S3', $uArray[$i]['userid']) : "N/A",
		'Q7E6S1'=>($this->getFiled('Q7E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E6S2'=>($this->getFiled('Q7E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S2', $uArray[$i]['userid']) : "N/A",
		'Q7E6S3'=>($this->getFiled('Q7E6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S3', $uArray[$i]['userid']) : "N/A",
		'Q7E7S1'=>($this->getFiled('Q7E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E7S2'=>($this->getFiled('Q7E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S2', $uArray[$i]['userid']) : "N/A",
		'Q7E7S3'=>($this->getFiled('Q7E7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S3', $uArray[$i]['userid']) : "N/A",
		'Q7E8S1'=>($this->getFiled('Q7E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S1', $uArray[$i]['userid']) : "N/A",
		
		'Q7E8S2'=>($this->getFiled('Q7E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S2', $uArray[$i]['userid']) : "N/A",
		'Q7E8S3'=>($this->getFiled('Q7E8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S3', $uArray[$i]['userid']) : "N/A",
	
	
	
	
	
		'Q8E1'=>($this->getFiled('Q8E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8E1', $uArray[$i]['userid']) : "N/A",
		'Q9E1'=>($this->getFiled('Q9E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1', $uArray[$i]['userid']) : "N/A",
		
		
		
		'Q9E1S1'=>($this->getFiled('Q9E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1', $uArray[$i]['userid']) : "N/A",
		'Q9E1S2'=>($this->getFiled('Q9E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S2', $uArray[$i]['userid']) : "N/A",
		'Q9E1S3'=>($this->getFiled('Q9E1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S3', $uArray[$i]['userid']) : "N/A",
		'Q9E1S5'=>($this->getFiled('Q9E1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S5', $uArray[$i]['userid']) : "N/A",
		'Q9E1S4'=>($this->getFiled('Q9E1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S4', $uArray[$i]['userid']) : "N/A",
		'Q10E1'=>($this->getFiled('Q10E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10E1', $uArray[$i]['userid']) : "N/A",
		
		'Point'=>$this->getEnergyPoints($uArray[$i]['userid'])
		
	    );
	}
	echo '<pre>'; print_r($points);
	$this->db->insert_batch('tbl_energy',$points,'userid');
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
        //Q Are�there�any�alternate�sources�of�energy�employed/�installed�in�your�school?
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
        //echo '<pre>'; print_r($energy_points);
        return number_format(array_sum($energy_points), 2);
    }
	
	
public function table() {
    $this->load->dbforge();
    $key = array(
        'id',
        'userid',
        'Q4E1',
        
        'Q5E1',
        'Q6E1S1',
        'Q6E2S1',
        'Q6E3S1',
        'Q6E4S1',
        'Q6E5S1',
        'Q6E6S1',
        'Q6E7S1',
        'Q6E16S1',
        'Q6E8S1',
        'Q6E9S1',
        'Q6E10S1',
        'Q6E11S1',
        'Q6E12S1',
        'Q6E13S1',
        'Q6E14S1',
        'Q6E1S2',
        'Q6E2S2',
        'Q6E3S2',
        'Q6E4S2',
        'Q6E5S2',
        'Q6E6S2',
        'Q6E7S2',
        'Q6E16S2',
        'Q6E8S2',
        'Q6E9S2',
        'Q6E10S2',
        'Q6E11S2',
        'Q6E12S2',
        'Q6E13S2',
        'Q6E14S2',
        'Q6E15S2',
		'percatitaaa',
        'Q7E2S1',
        'Q7E2S2',
		'Q7E2S3',
        'Q7E3S1',
        'Q7E3S2',
        'Q7E3S3',
        'Q7E4S1',
        'Q7E4S2',
		'Q7E4S3',
        'Q7E5S1',
        'Q7E5S2',
        'Q7E5S3',
        'Q7E6S1',
        'Q7E6S2',
		'Q7E6S3',
        'Q7E7S1',
        'Q7E7S2',
        'Q7E7S3',
        'Q7E8S1',
        'Q7E8S2',
		'Q7E8S3',
        
        'Q8E1',
        'Q9E1',
        
        'Q9E1S1',
		'Q9E1S2',
        'Q9E1S3',
        'Q9E1S5',
        'Q9E1S4',
        'Q10E1',
        
		'Point',
     );
    echo count($key);
    for ($x = 0; $x < count($key); $x++) {
        if ($x == 0) {
        $test=$this->dbforge->add_field(array(
            $key[$x] => array(
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => TRUE
            ),
        ));
        } else {
        $test=$this->dbforge->add_field(array(
            $key[$x] => array(
            'type' => 'TEXT',
            ),
        ));
        }
    }
//    echo '<pre>';
//    print_r($test->fields);
//    exit;
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('tbl_energy');
    }

}
?>
	
