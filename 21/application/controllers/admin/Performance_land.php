<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_land extends CI_Controller {

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

    public function land() {
		ini_set('memory_limit', '-1');
	$query = $this->db->query("SELECT * FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();	
	$points=array();
	for($i=0; $i<count($uArray); $i++)
	{
	//print_r($uArray[$i]['userid']);exit;
	    $points[$i]=array(
		'userid'=>$uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4L1'=>($this->getFiled('Q4L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L1', $uArray[$i]['userid']) : "N/A",
		'Q4L2'=>($this->getFiled('Q4L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L2', $uArray[$i]['userid']) : "N/A",
		'Q4L3'=>($this->getFiled('Q4L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L3', $uArray[$i]['userid']) : "N/A",
		'Q4L4'=>($this->getFiled('Q4L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L4', $uArray[$i]['userid']) : "N/A",
		'Q4L5'=>($this->getFiled('Q4L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L5', $uArray[$i]['userid']) : "N/A",
		'Q4L6'=>($this->getFiled('Q4L6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L6', $uArray[$i]['userid']) : "N/A",
		'Q4L7'=>($this->getFiled('Q4L7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L7', $uArray[$i]['userid']) : "N/A",
		'Q4L8'=>($this->getFiled('Q4L8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L8', $uArray[$i]['userid']) : "N/A",
		'Q4L9'=>($this->getFiled('Q4L9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L9', $uArray[$i]['userid']) : "N/A",
		'Q4L10'=>($this->getFiled('Q4L10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L10', $uArray[$i]['userid']) : "N/A",
		'Q4L11'=>($this->getFiled('Q4L11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L11', $uArray[$i]['userid']) : "N/A",
		'Q4L12'=>($this->getFiled('Q4L12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L12', $uArray[$i]['userid']) : "N/A",
		'TotalArea'=>$this->getTotalArea($uArray[$i]['userid']),
		
		
		'PercentageArea'=>$this->getPercentageArea($uArray[$i]['userid']),
		
		'Q5L1S3'=>($this->getFiled('Q5L1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S3', $uArray[$i]['userid']) : "N/A",
		'Q5L1S1'=>($this->getFiled('Q5L1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S1', $uArray[$i]['userid']) : "N/A",
		'Q5L1S2'=>($this->getFiled('Q5L1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S2', $uArray[$i]['userid']) : "N/A",
		'Q5L2S3'=>($this->getFiled('Q5L2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S3', $uArray[$i]['userid']) : "N/A",
		'Q5L2S2'=>($this->getFiled('Q5L2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S2', $uArray[$i]['userid']) : "N/A",
		'Q5L2S1'=>($this->getFiled('Q5L2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S1', $uArray[$i]['userid']) : "N/A",
		'Q6L1'=>($this->getFiled('Q6L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6L1', $uArray[$i]['userid']) : "N/A",
		
		'Point'=>$this->getLandPoints($uArray[$i]['userid'])
		);
	}
	echo '<pre>'; print_r($points);
	//$this->db->insert_batch('tbl_land',$points);
	$this->db->insert_batch('tbl_land',$points,'userid');
    }

   Public function getTotalArea($argUserID) {
       $a=getFiled('Q4L1', $argUserID); 
//       $b=getFiled('Q4L5', $argUserID); 
//       $c=getFiled('Q4L6', $argUserID); 
//       $d=getFiled('Q4L7', $argUserID); 
//       $e=getFiled('Q4L8', $argUserID); 
       $total = $a;//+$b+$c+$d+$e;
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





    Public function getLandPoints($argUserID) 
    {
	///$argUserID=1030;
        $land_points = array();
        // Explore the number of species of plants and animals in your school
	$A=(getFiled('Q4L2', $argUserID) != '') ? getFiled('Q4L2', $argUserID) : 0;
	$B=(getFiled('Q4L5', $argUserID) != '') ? getFiled('Q4L5', $argUserID) : 0;
	$C=(getFiled('Q4L6', $argUserID) != '') ? getFiled('Q4L6', $argUserID) : 0;
	$D=(getFiled('Q4L7', $argUserID) != '') ? getFiled('Q4L7', $argUserID) : 0;
	$E=(getFiled('Q4L8', $argUserID) != '') ? getFiled('Q4L8', $argUserID) : 0;
        $TOTAL_SITE_AREA=$A+$B+$C+$D+$E;
	$PER_GREEN_AREA=($B/$TOTAL_SITE_AREA)*100;
	//echo $PER_GREEN_AREA; exit;
        //Q2 How many species of plants and animals exist in your school
        $plants_native = (getFiled('Q5L1S1', $argUserID) != '') ? getFiled('Q5L1S1', $argUserID) : 0;
	$plants_exotic=(getFiled('Q5L1S2', $argUserID) != '') ? getFiled('Q5L1S2', $argUserID) : 0;
	$plants=$plants_native+$plants_exotic;
        $animals_native = (getFiled('Q5L2S1', $argUserID) != '') ? getFiled('Q5L2S1', $argUserID) : 0;
	$animals_exotic=(getFiled('Q5L2S2', $argUserID) != '') ? getFiled('Q5L2S2', $argUserID) : 0;
        $animals=$animals_native+$animals_exotic;
	$exotic = 0;
	//echo 'Plants'.$plants.'Animal'.$animals;
	if ($plants >= 100) {
            $exotic += 2;
        }  else if ($plants < 100) {
            $exotic += ($plants / 100) * 2;
        }
        //Animals
        if ($animals >= 50) {
            $exotic += 2;
        }  else if ($animals < 50) {
            $exotic += ($animals / 50) * 2;
        }
	$land_points['Q2_plants'] = $exotic;
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
	
        ///echo $total;
	if($TOTAL_SITE_AREA>0){
        if($PER_GREEN_AREA>=35){
           $land_points['green_area']=5; 
        } else {
            $land_points['green_area']=0;
        }
      } else {
           $land_points['green_area']=0;
      }
      //echo array_sum($land_points);
      //echo '<pre>'; print_r($land_points);
      return array_sum($land_points);
    }
	
public function table() {
    $this->load->dbforge();
    $key = array(
        'id',
        'userid',
        'Q4L1',
        'Q4L2',
        'Q4L3',
        'Q4L4',
        'Q4L5',
        'Q4L6',
        'Q4L7',
        'Q4L8',
        'Q4L9',
        'Q4L10',
        'Q4L11',
        'Q4L12',
        'TotalArea',
        'PercentageArea',
        'Q5L1S3',
        'Q5L1S1',
        'Q5L1S2',
        'Q5L2S3',
        'Q5L2S2',
        'Q5L2S1',
        'Q6L1',
        'upload',
        'Point'
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
    $this->dbforge->create_table('tbl_land');
    }

}
?>


