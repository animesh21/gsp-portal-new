<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_food extends CI_Controller {

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

    public function food() {
	$uArray = $this->db->select('a.*,a.id AS school_id')->from('gsp_school AS a')->join('gsp_aduit_submitted AS b','b.userid=a.userid','left')->where('a.progress="100"')->where('b.status="1"')->get()->result_array();
	$points=array();
	for($i=0; $i<count($uArray); $i++)
	{
	    $points[$i]=array(
		'userid'=>$uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4F1'=>($this->getFiled('Q4F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4F1', $uArray[$i]['userid']) : "N/A",
		'Q5F1'=>($this->getFiled('Q5F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1', $uArray[$i]['userid']) : "N/A",
		'Q5F1S1'=>($this->getFiled('Q5F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S1', $uArray[$i]['userid']) : "N/A",
		'Q5F1S2'=>($this->getFiled('Q5F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S2', $uArray[$i]['userid']) : "N/A",
		'Q5F1S3'=>($this->getFiled('Q5F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S3', $uArray[$i]['userid']) : "N/A",
		'Q5F1S4'=>($this->getFiled('Q5F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S4', $uArray[$i]['userid']) : "N/A",
		'Q5F2'=>($this->getFiled('Q5F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F2', $uArray[$i]['userid']) : 0,
		'Q6F2S1'=>($this->getFiled('Q6F2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S1', $uArray[$i]['userid']) : "N/A",
		'Q6F2S2'=>($this->getFiled('Q6F2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S2', $uArray[$i]['userid']) : "N/A",
		'Q6F2S3'=>($this->getFiled('Q6F2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S3', $uArray[$i]['userid']) : "N/A",
		'Q6F3S1'=>($this->getFiled('Q6F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S1', $uArray[$i]['userid']) : "N/A",
		'Q6F3S2'=>($this->getFiled('Q6F3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S2', $uArray[$i]['userid']) : "N/A",
		'Q6F3S3'=>($this->getFiled('Q6F3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S3', $uArray[$i]['userid']) : "N/A",
		'Q6F4S1'=>($this->getFiled('Q6F4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S1', $uArray[$i]['userid']) : "N/A",
		'Q6F4S2'=>($this->getFiled('Q6F4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S2', $uArray[$i]['userid']) : "N/A",
		'Q6F4S3'=>($this->getFiled('Q6F4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S3', $uArray[$i]['userid']) : "N/A",
		'Q6F5S1'=>($this->getFiled('Q6F5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S1', $uArray[$i]['userid']) : "N/A",
		'Q6F5S2'=>($this->getFiled('Q6F5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S2', $uArray[$i]['userid']) : "N/A",
		
		
		'Q6F5S3'=>($this->getFiled('Q6F5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S3', $uArray[$i]['userid']) : "N/A",
		'Q6F6S1'=>($this->getFiled('Q6F6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S1', $uArray[$i]['userid']) : "N/A",
		'Q6F6S2'=>($this->getFiled('Q6F6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S2', $uArray[$i]['userid']) : "N/A",
		'Q6F6S3'=>($this->getFiled('Q6F6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S3', $uArray[$i]['userid']) : "N/A",
		
		
		'Q6F7S1'=>($this->getFiled('Q6F7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S1', $uArray[$i]['userid']) : "N/A",
		'Q6F7S2'=>($this->getFiled('Q6F7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S2', $uArray[$i]['userid']) : "N/A",
		'Q6F7S3'=>($this->getFiled('Q6F7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S3', $uArray[$i]['userid']) : "N/A",
		
		
		'Q6F8S1'=>($this->getFiled('Q6F8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S1', $uArray[$i]['userid']) : "N/A",
		'Q6F8S2'=>($this->getFiled('Q6F8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S2', $uArray[$i]['userid']) : "N/A",
		'Q6F8S3'=>($this->getFiled('Q6F8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S3', $uArray[$i]['userid']) : "N/A",
		
		
		'Q6F9S1'=>($this->getFiled('Q6F9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S1', $uArray[$i]['userid']) : "N/A",
		'Q6F9S2'=>($this->getFiled('Q6F9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S2', $uArray[$i]['userid']) : "N/A",
		'Q6F9S3'=>($this->getFiled('Q6F9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S3', $uArray[$i]['userid']) : "N/A",
		
		
		'Q6F10S1'=>($this->getFiled('Q6F10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S1', $uArray[$i]['userid']) : "N/A",
		'Q6F10S2'=>($this->getFiled('Q6F10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S2', $uArray[$i]['userid']) : "N/A",
		'Q6F10S3'=>($this->getFiled('Q6F10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S3', $uArray[$i]['userid']) : "N/A",
		
		
		
		
		'Q7F1'=>($this->getFiled('Q7F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1', $uArray[$i]['userid']) : "N/A",
		'Q7F1S1'=>($this->getFiled('Q7F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S1', $uArray[$i]['userid']) : "N/A",
		'Q7F1S2'=>($this->getFiled('Q7F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S2', $uArray[$i]['userid']) : "N/A",
		'Q7F1S3'=>($this->getFiled('Q7F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S3', $uArray[$i]['userid']) : "N/A",
		'Q7F1S4'=>($this->getFiled('Q7F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S4', $uArray[$i]['userid']) : "N/A",
		'Q7F1S5'=>($this->getFiled('Q7F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S5', $uArray[$i]['userid']) : "N/A",
		
		'Q7F3S1'=>($this->getFiled('Q7F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F3S1', $uArray[$i]['userid']) : 0,
		
		
		
		
		'Q8F1'=>($this->getFiled('Q8F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1', $uArray[$i]['userid']) : 0,
		'Q8F1S1'=>($this->getFiled('Q8F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S1', $uArray[$i]['userid']) : "N/A",
		'Q8F1S2'=>($this->getFiled('Q8F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S2', $uArray[$i]['userid']) : "N/A",
		'Q8F1S3'=>($this->getFiled('Q8F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S3', $uArray[$i]['userid']) : "N/A",
		'Q8F1S4'=>($this->getFiled('Q8F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S4', $uArray[$i]['userid']) : "N/A",
		'Q8F1S5'=>($this->getFiled('Q8F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S5', $uArray[$i]['userid']) : "N/A",
		
		
		
		'Q9F1'=>($this->getFiled('Q9F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F1', $uArray[$i]['userid']) : "N/A",
		'Q9F2'=>($this->getFiled('Q9F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F2', $uArray[$i]['userid']) : "N/A",
		
		
		'Q10F1'=>($this->getFiled('Q10F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F1', $uArray[$i]['userid']) : "N/A",
		'Q10F2'=>($this->getFiled('Q10F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F2', $uArray[$i]['userid']) : "N/A",
		
		
		'Q11F1'=>($this->getFiled('Q11F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F1', $uArray[$i]['userid']) : "N/A",
		'Q11F2'=>($this->getFiled('Q11F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F2', $uArray[$i]['userid']) : "N/A",
		
		
		'Q11F3'=>($this->getFiled('Q11F3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F3', $uArray[$i]['userid']) : "N/A",
		
		
		
		'Q12F1'=>($this->getFiled('Q12F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F1', $uArray[$i]['userid']) : "N/A",
		'Q12F2'=>($this->getFiled('Q12F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F2', $uArray[$i]['userid']) : "N/A",
		'Q13F1'=>($this->getFiled('Q13F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F1', $uArray[$i]['userid']) : "N/A",
		'Q13F2'=>($this->getFiled('Q13F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F2', $uArray[$i]['userid']) : "N/A",
		
		'Point'=>$this->getFoodPoints($uArray[$i]['userid'])
		 );
	}
	echo '<pre>'; print_r($points);
	$this->db->insert_batch('tbl_food',$points,'userid');
    }

   Public function getFoodPoints($argUserID) {
	$food_points = array();
	//Q.3 What kind of food is being served/sold in your school?
	$totalFlavourVariaint = array();
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
	}
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
		if (($nimbopani == '' || $nimbopani == 0) && ($lassi == '' || $lassi == 0) && ($buttermilk == '' || $buttermilk == 0) && ($aampana == '' || $aampana == 0) && ($other == '' || $other == 0)) {
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
	$q8 = (getFiled('Q11F1', $argUserID) != '') ? getFiled('Q11F1', $argUserID) : "";
	if ($q8 == 'Y') {
	    $food_points['q8_food_company'] = 0;
	} else {
	    $food_points['q8_food_company'] = 1;
	}

	//Q9.Does your school measure height and weight of all the students?
	$q9 = (getFiled('Q12F1', $argUserID) != '') ? getFiled('Q12F1', $argUserID) : "";
	if ($q9 == 'Y') {
	    $food_points['q9'] = 1;
	} else {
	    $food_points['q9'] = 0;
	}
//	echo array_sum($food_points);
//	echo '<pre>';
//	print_r($food_points);
//	exit;
	echo array_sum($food_points);
    }

	

public function table() {
    $this->load->dbforge();
    $key = array(
        'id',
        'userid',
        'Q4F1',
        'Q5F1',
        'Q5F1S1',
        'Q5F1S2',
        'Q5F1S3',
        'Q5F1S4',
        'Q5F2',
        'Q6F2S1',
        'Q6F2S2',
        'Q6F2S3',
        'Q6F3S1',
        'Q6F3S2',
        'Q6F3S3',
        'Q6F4S1',
        'Q6F4S2',
        'Q6F4S3',
        'Q6F5S1',
        'Q6F5S2',
        'Q6F5S3',
        'Q6F6S1',
        'Q6F6S2',
        'Q6F6S3',
        'Q6F7S1',
        'Q6F7S2',
        'Q6F7S3',
        'Q6F8S1',
        'Q6F8S2',
        'Q6F8S3',
        'Q6F9S1',
        'Q6F9S2',
        'Q6F9S3',
        'Q6F10S1',
        'Q6F10S2',
        'Q6F10S3',
        'Q7F1',
        'Q7F1S1',
        'Q7F1S2',
		'Q7F1S3',
        'Q7F1S4',
        'Q7F1S5',
        'upload',
		'Q7F3S1',
        'Q8F1',
        'Q8F1S1',
        'Q8F1S2',
		'Q8F1S3',
        'Q8F1S4',
        'Q8F1S5',
        'Q9F1',
		'Q9F2',
        'Q10F1',
        'Q10F2',
        'Q11F1',
		'Q11F2',
        'Q11F3',
        'upload2',
        'Q12F1',
		'Q12F2',
        'Q13F1',
        'Q13F2',
        'upload3',
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
    $this->dbforge->create_table('tbl_food');
    }

}
?>
