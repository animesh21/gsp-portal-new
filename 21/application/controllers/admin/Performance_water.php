<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_water extends CI_Controller {

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
    
	public function water() {
	ini_set('memory_limit', '-1');
	
	
	$uArray = $this->db->select('a.*,a.id AS school_id')->from('gsp_school AS a')->join('gsp_aduit_submitted AS b','b.userid=a.userid','left')->where('a.progress="100"')->where('b.status="1"')->get()->result_array();
	$points=array();
	 $Q5W1="";
	for($i=0; $i<count($uArray); $i++)
	{
	   
	$Q7W2="";
	if($this->getFiled('Q7W2', $uArray[$i]['userid'])==1):
		   $Q7W2="=1 hours";
		  elseif($this->getFiled('Q7W2', $uArray[$i]['userid'])==2):
		    $Q7W2="2-6 hours";
		  elseif($this->getFiled('Q7W2', $uArray[$i]['userid'])==3):
		    $Q7W2="7-12 hours";
		  elseif($this->getFiled('Q7W2', $uArray[$i]['userid'])==4):
		   $Q7W2="13-18 hours";
		  elseif($this->getFiled('Q7W2', $uArray[$i]['userid'])==5):
		    $Q7W2="19-24 hours";  
		  endif;
	$Q20W2="";
	if($this->getFiled('Q20W2', $uArray[$i]['userid'])==1):
		   $Q20W2="Gardening";
		  elseif($this->getFiled('Q20W2', $uArray[$i]['userid'])==2):
		    $Q20W2="Flushing";
		  elseif($this->getFiled('Q20W2', $uArray[$i]['userid'])==3):
		    $Q20W2="Recharge Ground Water"; 
		  endif;
		  
	$Q8W2S10="";
	if($this->getFiled('Q8W2S10', $uArray[$i]['userid'])==1):
		   $Q8W2S10="If there was a decrease, please specify";
		  elseif($this->getFiled('Q8W2S10', $uArray[$i]['userid'])==2):
		    $Q8W2S10="If there was an increase, please specify";
		  elseif($this->getFiled('Q8W2S10', $uArray[$i]['userid'])==3):
		    $Q8W2S10="No change"; 
		  endif;
    
		$Q8W2S9="";
	if($this->getFiled('Q8W2S9', $uArray[$i]['userid'])==1):
		   $Q8W2S9="Pre-monsoon";
		  elseif($this->getFiled('Q8W2S9', $uArray[$i]['userid'])==2):
		    $Q8W2S9="Post-monsoon";
		  elseif($this->getFiled('Q8W2S9', $uArray[$i]['userid'])==3):
		    $Q8W2S9="Do not follow any such pattern"; 
		  endif;
	$Q8W2S1S1="";
	   	  
		  if($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==1):
		   $Q8W2S1S1="Rooftop";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==2):
		    $Q8W2S1S1="Paved";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==3):
		    $Q8W2S1S1="Unpaved";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==4):
		   $Q8W2S1S1="Rooftop + paved";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==5):
		    $Q8W2S1S1="Paved + unpaved";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==6):
		    $Q8W2S1S1="Rooftop + unpaved";
		  elseif($this->getFiled('Q8W2S1S1', $uArray[$i]['userid'])==7):
		    $Q8W2S1S1="Rooftop + paved + unpaved";  
		  endif;
	$Q8W2S2="";	  
		 if($this->getFiled('Q8W2S2', $uArray[$i]['userid'])==1):
		   $Q8W2S2="By storing";
		  elseif($this->getFiled('Q8W2S2', $uArray[$i]['userid'])==2):
		    $Q8W2S2="By recharging groundwater";
		  elseif($this->getFiled('Q8W2S2', $uArray[$i]['userid'])==3):
		    $Q8W2S2="Combination of both"; 
		  endif; 
	$Q8W2S2S10="";
		  
		if($this->getFiled('Q8W2S2S10', $uArray[$i]['userid'])==1):
		   $Q8W2S2S10="Storage = Recharge";
		  elseif($this->getFiled('Q8W2S2S10', $uArray[$i]['userid'])==2):
		    $Q8W2S2S10="Storage > Recharge";
		  elseif($this->getFiled('Q8W2S2S10', $uArray[$i]['userid'])==3):
		    $Q8W2S2S10="Recharge > Storage";
		  elseif($this->getFiled('Q8W2S2S10', $uArray[$i]['userid'])==4):
		   $Q8W2S2S10="Only recharge";
		  elseif($this->getFiled('Q8W2S2S10', $uArray[$i]['userid'])==5):
		    $Q8W2S2S10="Only storage";  
		  endif;
		  
		$Q8W2S4="";  
		  
		  if($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==1):
		   $Q8W2S4="10 to 20 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==2):
		    $Q8W2S4="21 to 30 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==3):
		    $Q8W2S4="31 to 40 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==4):
		   $Q8W2S4="41 to 50 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==5):
		    $Q8W2S4="51 to 60 per cent"; 
		 elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==6):
		    $Q8W2S4="61 to 70 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==7):
		    $Q8W2S4="71 to 80 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==8):
		   $Q8W2S4=" 81 to 90 per cent";
		  elseif($this->getFiled('Q8W2S4', $uArray[$i]['userid'])==9):
		    $Q8W2S4="91 to 100 per cent";  
		  endif;
		  
		$Q8W2S7="";  
		  if($this->getFiled('Q8W2S7', $uArray[$i]['userid'])==1):
		   $Q8W2S7="Pre-monsoon";
		  elseif($this->getFiled('Q8W2S7', $uArray[$i]['userid'])==2):
		    $Q8W2S7=" Post-monsoon";
		  elseif($this->getFiled('Q8W2S7', $uArray[$i]['userid'])==3):
		    $Q8W2S7="Do not follow any such pattern"; 
		  endif; 
		$Q8W2S4S1="";
		   if($this->getFiled('Q8W2S4S1', $uArray[$i]['userid'])==1):
		   $Q8W2S4S1="Before storage tank";
		  elseif($this->getFiled('Q8W2S4S1', $uArray[$i]['userid'])==2):
		    $Q8W2S4S1="Before recharge system";
		  elseif($this->getFiled('Q8W2S4S1', $uArray[$i]['userid'])==3):
		    $Q8W2S4S1="Before both storage tank and recharge system"; 
		  elseif($this->getFiled('Q8W2S4S1', $uArray[$i]['userid'])==3):
		    $Q8W2S4S1="We do not use filters"; 
		  endif; 
		$Q8W2S5="";
		   if($this->getFiled('Q8W2S5', $uArray[$i]['userid'])==1):
		   $Q8W2S5="Good";
		  elseif($this->getFiled('Q8W2S5', $uArray[$i]['userid'])==2):
		    $Q8W2S5="Average";
		  elseif($this->getFiled('Q8W2S5', $uArray[$i]['userid'])==3):
		    $Q8W2S5="Poor";
		  endif; 
		  
		$Q8W2S31="";
		if($this->getFiled('Q8W2S31', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Conduits".",";
		endif;  
		if($this->getFiled('Q8W2S32', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Gutters".",";
		endif;  
		if($this->getFiled('Q8W2S33', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Filter unit".",";
		endif;  
		if($this->getFiled('Q8W2S34', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."First flush".",";
		endif;  
		if($this->getFiled('Q8W2S35', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Storage tank".",";
		endif;  
		if($this->getFiled('Q8W2S36', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Collection sump".",";
		endif;  
		if($this->getFiled('Q8W2S37', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Pump unit".",";
		endif;   
		if($this->getFiled('Q8W2S38', $uArray[$i]['userid'])==1):
		$Q8W2S31=$Q8W2S31."Recharge structure".",";
		endif;   
	    
		$types_you_fliter="";
		if($this->getFiled('Q8W2S4S21', $uArray[$i]['userid'])==1):
		$types_you_fliter=$types_you_fliter."Sand gravel filter".",";
		endif;
		if($this->getFiled('Q8W2S4S22', $uArray[$i]['userid'])==1):
		$types_you_fliter=$types_you_fliter." Charcoal filter".",";
		endif;
		if($this->getFiled('Q8W2S4S23', $uArray[$i]['userid'])==1):
		$types_you_fliter=$types_you_fliter."Readymade on line filter".",";
		endif;
		if($this->getFiled('Q8W2S4S24', $uArray[$i]['userid'])==1):
		$types_you_fliter=$types_you_fliter."Chemical used".",";
		endif;
	  
	    $Q8W2S12="";
		if($this->getFiled('Q8W2S12', $uArray[$i]['userid'])==1):
		$Q8W2S12=$Q8W2S12."Less than a metre annually".",";
		elseif($this->getFiled('Q8W2S12', $uArray[$i]['userid'])==2):
		$Q8W2S12=$Q8W2S12."1-5 metre annually".",";
		elseif($this->getFiled('Q8W2S12', $uArray[$i]['userid'])==3):
		$Q8W2S12=$Q8W2S12."More than 5 metres annually".",";
		endif;
		
		
		
		
	
	    $points[$i]=array(
		'userid'=>$uArray[$i]['userid'],
		//'school_id'=>$uArray[$i]['school_id'],
		'Q4W1'=>($this->getFiled('Q4W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W1', $uArray[$i]['userid']) : "N/A",
		'Q4W2'=>($this->getFiled('Q4W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W2', $uArray[$i]['userid']) : "N/A",
		'Q4W3'=>($this->getFiled('Q4W3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W3', $uArray[$i]['userid']) :"N/A",
		'Q4W4'=>($this->getFiled('Q4W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W4', $uArray[$i]['userid']) : "N/A",
		'Q4W5'=>($this->getFiled('Q4W5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W5', $uArray[$i]['userid']) : "N/A",
		'Q4W6'=>($this->getFiled('Q4W6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W6', $uArray[$i]['userid']) : "N/A",
		'Q4W7'=>($this->getFiled('Q4W7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W7', $uArray[$i]['userid']) : "N/A",
		'Q4W8'=>($this->getFiled('Q4W8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W8', $uArray[$i]['userid']) : "N/A",
		'Q4W9'=>($this->getFiled('Q4W9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W9', $uArray[$i]['userid']) : "N/A",
		'Q4W10'=>($this->getFiled('Q4W10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W10', $uArray[$i]['userid']) : "N/A",
		'Q4W11'=>($this->getFiled('Q4W11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W11', $uArray[$i]['userid']) : "N/A",
	'Q5W1'=>($this->getFiled('Q5W1', $uArray[$i]['userid']) != '') ? "Ground water" : "N/A",
	'Q5W2'=>($this->getFiled('Q5W2', $uArray[$i]['userid']) != '') ? "Surface water" : "N/A",
	'Q5W3'=>($this->getFiled('Q5W3', $uArray[$i]['userid']) != '') ? "Rain water" : "N/A",
	'Q5W4'=>($this->getFiled('Q5W4', $uArray[$i]['userid']) != '') ? "Recycled waste water" : "N/A",
	
	
	'Q6W1'=>($this->getFiled('Q6W1', $uArray[$i]['userid']) != '') ? "Municipality" : "N/A",
	'Q6W2'=>($this->getFiled('Q6W2', $uArray[$i]['userid']) != '') ? "Panchayat" : "N/A",
	'Q6W3'=>($this->getFiled('Q6W3', $uArray[$i]['userid']) != '') ? "Public Health Engineering Department (PHED)" : "N/A",
	'Q6W4'=>($this->getFiled('Q6W4', $uArray[$i]['userid']) != '') ? "Private supplier" : "N/A",
	'Q6W5'=>($this->getFiled('Q6W5', $uArray[$i]['userid']) != '') ? "School’s own supply (bore well, rainwater harvesting facility, etc" : "N/A",
	
		
		'Q7W1'=>($this->getFiled('Q7W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W1', $uArray[$i]['userid']) : "N/A",
		'Q7W2'=>($Q7W2 != '') ? $Q7W2 : "N/A",
		
		
		'Q8W1S1'=>($this->getFiled('Q8W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S1', $uArray[$i]['userid']) : "N/A",
		'Q8W1S2'=>($this->getFiled('Q8W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S2', $uArray[$i]['userid']) : "N/A",	
		'Q8W1S3'=>($this->getFiled('Q8W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S3', $uArray[$i]['userid']) : "N/A",
		'Q8W1S4'=>($this->getFiled('Q8W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S4', $uArray[$i]['userid']) : "N/A",
		'Q8W1S5'=>($this->getFiled('Q8W1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S5', $uArray[$i]['userid']) : "N/A",
		'Q8W1S6'=>($this->getFiled('Q8W1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S6', $uArray[$i]['userid']) : "N/A",
		'Q8W1S7'=>($this->getFiled('Q8W1S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S7', $uArray[$i]['userid']) : "N/A",
		'Q8W1S8'=>($this->getFiled('Q8W1S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S8', $uArray[$i]['userid']) : "N/A",
		'Q8W1S9'=>($this->getFiled('Q8W1S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S9', $uArray[$i]['userid']) : "N/A",
		'Q8W1S10'=>($this->getFiled('Q8W1S10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S10', $uArray[$i]['userid']) : "N/A",
		'Q8W1S11'=>($this->getFiled('Q8W1S11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S11', $uArray[$i]['userid']) : "N/A",
		'Q8W2'=>($this->getFiled('Q8W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2', $uArray[$i]['userid']) : "N/A",
		
		'Q8W2S1'=>($this->getFiled('Q8W2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S1', $uArray[$i]['userid']) : "N/A",
		
		
		'Q8W2S1S1'=>($this->getFiled('Q8W2S1S1', $uArray[$i]['userid']) != '') ? $Q8W2S1S1 : "N/A",
		
			'Q8W2S2'=>($this->getFiled('Q8W2S2', $uArray[$i]['userid']) != '') ? $Q8W2S2 : "N/A",
		
		
		
		
		
		
		'Q8W2S2S1'=>($this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) : "N/A",
			'Q8W2S2S2'=>($this->getFiled('Q8W2S2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S2', $uArray[$i]['userid']) : "N/A",
				'Q8W2S2S7'=>($this->getFiled('Q8W2S2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S7', $uArray[$i]['userid']) : "N/A",
					'Q8W2S2S10'=>($this->getFiled('Q8W2S2S10', $uArray[$i]['userid']) != '') ? $Q8W2S2S10 : "N/A",
						'Q8W2S4'=>($this->getFiled('Q8W2S4', $uArray[$i]['userid']) != '') ? $Q8W2S4 : "N/A",
							'Q8W2S31'=>($Q8W2S31 != '') ? $Q8W2S31 : "N/A",
		
		'Q8W2S4S1'=>($this->getFiled('Q8W2S4S1', $uArray[$i]['userid']) != '') ? $Q8W2S4S1 : "N/A",
		
		
		
		'Q8W2S4S22'=>($types_you_fliter != '') ? $types_you_fliter : "N/A",
		
		'Q8W2S5'=>($this->getFiled('Q8W2S5', $uArray[$i]['userid']) != '') ? $Q8W2S5 : "N/A",
		
			'Q8W2S7'=>($this->getFiled('Q8W2S7', $uArray[$i]['userid']) != '') ? $Q8W2S7 : "N/A",
				'Q8W2S61'=>($this->getFiled('Q8W2S61', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S61', $uArray[$i]['userid']) : "N/A",
					'Q8W2S9'=>($Q8W2S9 != '') ? $Q8W2S9 : "N/A",
						'Q8W2S8'=>($this->getFiled('Q8W2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S8', $uArray[$i]['userid']) : "N/A",
							
								'Q8W2S10'=>($this->getFiled('Q8W2S10', $uArray[$i]['userid']) != '') ? $Q8W2S10 : "N/A",
									'Q8W2S12'=>($Q8W2S12 != '') ? $Q8W2S12 : "N/A",
								'Q8W2S13'=>($this->getFiled('Q8W2S13', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S13', $uArray[$i]['userid']) : "N/A",
		
		
		'Q8W2S6'=>($this->getFiled('Q8W2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S6', $uArray[$i]['userid']) : "N/A",
		
		
		
		
		
		
		
		'Q8W3S1'=>($this->getFiled('Q8W3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S1', $uArray[$i]['userid']) : "N/A",
		'Q8W3S2'=>($this->getFiled('Q8W3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S2', $uArray[$i]['userid']) : "N/A",
		'Q8W3S3'=>($this->getFiled('Q8W3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S3', $uArray[$i]['userid']) : "N/A",
		'Q8W3S4'=>($this->getFiled('Q8W3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S4', $uArray[$i]['userid']) : "N/A",	
		'Q8W3S5'=>($this->getFiled('Q8W3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S5', $uArray[$i]['userid']) : "N/A",
		'Q8W3S6'=>($this->getFiled('Q8W3S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S6', $uArray[$i]['userid']) : "N/A",
		'Q8W3S7'=>($this->getFiled('Q8W3S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S7', $uArray[$i]['userid']) : "N/A",
		'Q8W3S8'=>($this->getFiled('Q8W3S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S8', $uArray[$i]['userid']) : "N/A",
		'Q9W1'=>($this->getFiled('Q9W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9W1', $uArray[$i]['userid']) : "N/A",
		'Load_on_DWT'=>"-",
		
		'Q10W1'=>($this->getFiled('Q10W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10W1', $uArray[$i]['userid']) : "N/A",
		'Q11W1'=>($this->getFiled('Q11W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11W1', $uArray[$i]['userid']) : "N/A",
		'Load_on_Ablution_Tap'=>"-",
		
		'Q13W1S1'=>($this->getFiled('Q13W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S1', $uArray[$i]['userid']) : "N/A",
		'Q13W1S2'=>($this->getFiled('Q13W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S2', $uArray[$i]['userid']) : "N/A",
		'Q13W1S3'=>($this->getFiled('Q13W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S3', $uArray[$i]['userid']) : "N/A",
		'Q13W1S4'=>($this->getFiled('Q13W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S4', $uArray[$i]['userid']) : "N/A",
		
		'Load_on_Water_Closet'=>"-",
		'Q14W1'=>($this->getFiled('Q14W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14W1', $uArray[$i]['userid']) : "N/A",
		'Q15W1'=>($this->getFiled('Q15W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15W1', $uArray[$i]['userid']) : "N/A",
		'Q16W1'=>($this->getFiled('Q16W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16W1', $uArray[$i]['userid']) : "N/A",
		'Q21W1'=>($this->getFiled('Q21W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q21W1', $uArray[$i]['userid']) : "N/A",
		'Q18W1'=>($this->getFiled('Q18W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18W1', $uArray[$i]['userid']) : "N/A"	,
		
		'Q19W1'=>($this->getFiled('Q19W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W1', $uArray[$i]['userid']) : "N/A",
		'Q20W1'=>($this->getFiled('Q20W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q20W1', $uArray[$i]['userid']) : "N/A",
		'Q20W2'=>($this->getFiled('Q20W2', $uArray[$i]['userid']) != '') ? $Q20W2 : "N/A",
		'points'=>getWaterPoints($uArray[$i]['userid'])
		);
	}
	//$this->db->insert_batch('tbl_water',$points);
	//$this->db->insert_batch('tbl_water',$points);
	$this->db->insert_batch('tbl_water',$points,'userid');
	echo "<pre>";
	print_r($points);
	echo "<pre>";
    }
 
   public function getWaterPoints($argUserID) {
	//WATER POINTS CALCULATIONS STARTS HERE
	$water_points = array();
	//Q1.Calculate your school’s water consumption, per activity:	(7 points)
	//Total Water Consumption
	$total_water_consumption = ($this->getFiled('Q4W11', $argUserID) != '') ? $this->getFiled('Q4W11', $argUserID) : 0;
	$total_population = ($this->getFiled('Q4G4S3', $argUserID) != '') ? $this->getFiled('Q4G4S3', $argUserID) : 0;
	$lpcd = $total_water_consumption / $total_population;

	$school_type = ($this->getFiled('Q1S1', $argUserID) != '') ? $this->getFiled('Q1S1', $argUserID) : 0;
	if (($lpcd < 13) && ($lpcd !=0)) {
	    $water_points['q1_water_consuption'] = ($lpcd * 7) / 13;
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
	$A = ($this->getFiled('Q5W1', $argUserID) != '') ? $this->getFiled('Q5W1', $argUserID) : 0;
	$B = ($this->getFiled('Q5W2', $argUserID) != '') ? $this->getFiled('Q5W2', $argUserID) : 0;
	$C = ($this->getFiled('Q5W3', $argUserID) != '') ? $this->getFiled('Q5W3', $argUserID) : 0;
	$D = ($this->getFiled('Q5W4', $argUserID) != '') ? $this->getFiled('Q5W4', $argUserID) : 0;
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
	//Task 4: What is the water conservation practices followed in your school?
	//Q5What are the water conservation practices your school follows 
	//Do all tanks in the school have float valves installed to stop overflow?
	$q_5_3 = ($this->getFiled('Q8W1S3', $argUserID) != '') ? $this->getFiled('Q8W1S3', $argUserID) : 0;
	if ($q_5_3 == "Y") {
	    $water_points['q_5_3'] = 1;
	} else {
	    $water_points['q_5_3'] = 0;
	}
	//Do the drinking water points have spill proof taps to check overflow?
	$q_5_4 = ($this->getFiled('Q8W1S4', $argUserID) != '') ? $this->getFiled('Q8W1S4', $argUserID) : 0;
	if ($q_5_4 == "Y") {
	    $water_points['q_5_4'] = 1;
	} else {
	    $water_points['q_5_4'] = 0;
	}
	//Does your school use appliances with a quick-wash setting?
	$q_5_5 = ($this->getFiled('Q8W1S5', $argUserID) != '') ? $this->getFiled('Q8W1S5', $argUserID) : 0;
	if ($q_5_5 == "Y") {
	    $water_points['q_5_5'] = 1;
	} else {
	    $water_points['q_5_5'] = 0;
	}
	//Are dual flush systems installed in the toilets?
	$q_5_6 = ($this->getFiled('Q8W1S6', $argUserID) != '') ? $this->getFiled('Q8W1S6', $argUserID) : 0;
	if ($q_5_6 == "Y") {
	    $water_points['q_5_6'] = 1;
	} else {
	    $water_points['q_5_6'] = 0;
	}
	//Does your school grow local plant species which require limited amount of water to grow?
	$q_5_8 = ($this->getFiled('Q8W1S8', $argUserID) != '') ? $this->getFiled('Q8W1S8', $argUserID) : 0;
	if ($q_5_8 == "Y") {
	    $water_points['q_5_8'] = 1;
	} else {
	    $water_points['q_5_8'] = 0;
	}
	//Has your school initiated any water conservation steps in the school or outside, in the past one year?
	$q_5_9 = ($this->getFiled('Q8W1S9', $argUserID) != '') ? $this->getFiled('Q8W1S9', $argUserID) : 0;
	if ($q_5_9 == "Y") {
	    $water_points['q_5_9'] = 1;
	} else {
	    $water_points['q_5_9'] = 0;
	}
	//Does your school use a drip or irrigation system?
	$q_5_10 = ($this->getFiled('Q8W1S10', $argUserID) != '') ? $this->getFiled('Q8W1S10', $argUserID) : 0;
	if ($q_5_10 == "Y") {
	    $water_points['q_5_10'] = 1;
	} else {
	    $water_points['q_5_10'] = 0;
	}
	//Task 5: Does your school harvest rainwater? 
	//Q6.Do you have Rainwater harvesting (RWH) system in your school?
	$rain_water_harvest = ($this->getFiled('Q8W2', $argUserID) != '') ? $this->getFiled('Q8W2', $argUserID) : 0;
	if ($rain_water_harvest == 'Y') {
	    $water_points['q6_water_harvest'] = 2;
	} else {
	    $water_points['q6_water_harvest'] = 0;
	}
	//6(a)(1) Which is the catchment area being harvested by your school? 
	$catchment_harested = ($this->getFiled('Q8W2S1S1', $argUserID) != '') ? $this->getFiled('Q8W2S1S1', $argUserID) : 0;
	//echo '<pre>';
	if (($catchment_harested == 1) || ($catchment_harested == 2) || ($catchment_harested == 3) || ($catchment_harested == 4) || ($catchment_harested == 5) || ($catchment_harested == 6)) {
	    $water_points['q6_a_water_catchments'] = 2;
	} else if ($catchment_harested == 7) {
	    $water_points['q6_a_water_catchments'] = 4;
	} else {
	    $water_points['q6_a_water_catchments'] = 0;
	}
	//6(c) How much area in your school is harvested?
	$school_harvested_area = ($this->getFiled('Q8W2S4', $argUserID) != '') ? $this->getFiled('Q8W2S4', $argUserID) : 0;
	if ($school_harvested_area == 7 || $school_harvested_area == 8 || $school_harvested_area == 9) {
	    $water_points['q6c_harvested_area'] = 10;
	} else if ($school_harvested_area == 5 || $school_harvested_area == 6) {
	    $water_points['q6c_harvested_area'] = 8;
	} else if ($school_harvested_area == 4) {
	    $water_points['q6c_harvested_area'] = 6;
	} else if ($school_harvested_area == 3) {
	    $water_points['q6c_harvested_area'] = 4;
	} else if ($school_harvested_area == 1 || $school_harvested_area == 2) {
	    $water_points['q6c_harvested_area'] = 2;
	} else {
	    $water_points['q6c_harvested_area'] = 0;
	}
	//Q6.eRate your catchment on cleanliness
	$cleanliness = ($this->getFiled('Q8W2S5', $argUserID) != '') ? $this->getFiled('Q8W2S5', $argUserID) : 0;
	if ($cleanliness == 1) {
	    $water_points['q6e_cleanness'] = 3; //good
	} else if ($cleanliness == 2) {
	    $water_points['q6e_cleanness'] = 1; //Average
	} else {
	    $water_points['q6e_cleanness'] = 0; //Poor
	}
	//Q.6(f) Does your school clean your catchment and system (structure?)?
	$catchmentsystem = $this->getFiled('Q8W2S61', $argUserID);
	//echo $catchmentsystem;
	if ($catchmentsystem == "Y") {
	    $water_points['q6f_cathment_structure'] = 2; //If answer to above question is Yes, then your school will get 2 points.
	} else {
	    $water_points['q6f_cathment_structure'] = 0;
	}

	////Q.6(g). Does your school monitor the rainwater harvesting structure for its efficiency?
	$harvesting_structure = $this->getFiled('Q8W2S8', $argUserID);
	if ($harvesting_structure == "Y") {
	    $water_points['q6f_monitor'] = 1;
	} else {
	    $water_points['q6f_monitor'] = 0;
	}
	//Task 6: Are the plumbing and sanitation facilities in your school adequate?
	//7 Please share details about sanitation and hygiene practices in your school:
	$sperate_toilets = ($this->getFiled('Q8W3S1', $argUserID) != '') ? $this->getFiled('Q8W3S1', $argUserID) : "";
	$toilet_accesible = ($this->getFiled('Q8W3S4', $argUserID) != '') ? $this->getFiled('Q8W3S4', $argUserID) : "";
	$toilet_accesible_differently_abled = ($this->getFiled('Q8W3S5', $argUserID) != '') ? $this->getFiled('Q8W3S5', $argUserID) : "";
	$differently_abled_teacher_nonteacher = ($this->getFiled('Q8W3S6', $argUserID) != '') ? $this->getFiled('Q8W3S6', $argUserID) : "";
	$pivacy_safty = ($this->getFiled('Q8W3S7', $argUserID) != '') ? $this->getFiled('Q8W3S7', $argUserID) : "";
	$light = ($this->getFiled('Q8W3S8', $argUserID) != '') ? $this->getFiled('Q8W3S8', $argUserID) : "";
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
	//Q8How many drinking water taps do you have? 
	$q8_drinkin_water_taps = ($this->getFiled('Q9W1', $argUserID) != '') ? $this->getFiled('Q9W1', $argUserID) : "";
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
	$hand_pumps = ($this->getFiled('Q10W1', $argUserID) != '') ? $this->getFiled('Q10W1', $argUserID) : "";
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
	}
	////Q.11 How many water closets (used for defecation and urination) do you have?
	$water_closets_q11 = ($this->getFiled('Q13W1S4', $argUserID) != '') ? $this->getFiled('Q13W1S4', $argUserID) : "";
	if (($water_closets_q11 != '') && ($water_closets_q11 != 0)) {
	    $Load_for_water_closets = $total_population / $water_closets_q11;
	    if ($school_type == 1 && $Load_for_water_closets <= 45 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //school type Day Scholar
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 2 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding 
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 3 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Residential 
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 4 && $Load_for_water_closets <= 40 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 5 && $Load_for_water_closets <= 30 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding + Residential
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 6 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Residential
		$water_points['q11_water_closets'] = 1;
	    } else if ($school_type == 7 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q11_water_closets'] = 1;
	    } else {
		$water_points['q11_water_closets'] = 0;
	    }
	}
	//Q.12 How many urinals (strictly used for urination only) do you have?
	$water_urinals_q12 = ($this->getFiled('Q14W1', $argUserID) != '') ? $this->getFiled('Q14W1', $argUserID) : "";
	if (($water_urinals_q12 != "") && ($water_urinals_q12 != 0)) {
	    $Load_for_urinals = $total_population / $water_urinals_q12;
	    if ($school_type == 1 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //school type Day Scholar
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 2 && $Load_for_urinals <= 40 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding 
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 3 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Residential 
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 4 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 5 && $Load_for_urinals <= 35 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding + Residential
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 6 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Residential
		$water_points['q12_urinals'] = 1;
	    } else if ($school_type == 7 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q12_urinals'] = 1;
	    }
	}
	if (!isset($water_points['q12_urinals']))
	    $water_points['q12_urinals'] = 0;
	//Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )
	$other_water_outlets_q13 = ($this->getFiled('Q15W1', $argUserID) != '') ? $this->getFiled('Q15W1', $argUserID) : "";
	//$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;
	if ($other_water_outlets_q13 > 1) { //not provided by cse
	    $water_points['q13_water_outlets'] = 0;
	} else {
	    $water_points['q13_water_outlets'] = 1;
	}
	//Q.14 Is there a water storage system in place to supply water in the toilets? ( 1 Points )
	$supply_water_in_toilets = ($this->getFiled('Q16W1', $argUserID) != '') ? $this->getFiled('Q16W1', $argUserID) : "";
	if ($supply_water_in_toilets == "Y") {
	    $water_points['q14_water_in_toilets'] = 1;
	} else {
	    $water_points['q14_water_in_toilets'] = 0;
	}
	// Q.15. Is the water supply sufficient?  ( 1 Points )
	$supply_sufficient = ($this->getFiled('Q21W1', $argUserID) != '') ? $this->getFiled('Q21W1', $argUserID) : "";
	if ($supply_sufficient == "Y") {
	    $water_points['q15_supply_sufficient'] = 1;
	} else {
	    $water_points['q15_supply_sufficient'] = 0;
	}
	//Q.16. Are the toilets cleaned? Yes. ( 1 Points )
	$toilets_cleaned = ($this->getFiled('Q18W1', $argUserID) != '') ? $this->getFiled('Q18W1', $argUserID) : "";
	if ($toilets_cleaned == "Y") {
	    $water_points['q16_toilets_cleaned'] = 1;
	} else {
	    $water_points['q16_toilets_cleaned'] = 0;
	}
	//Q.17. Does your school treat wastewater? ( 5 Points )
	$treat_wastewater = ($this->getFiled('Q19W1', $argUserID) != '') ? $this->getFiled('Q19W1', $argUserID) : "";
	if ($treat_wastewater == "Y") {
	    $water_points['q17_treat_wastewater'] = 5;
	} else {
	    $water_points['q17_treat_wastewater'] = 0;
	}
	//Q.18. Does your school reuse the treated wastewater? ( 5 Points )
	//If Yes
//Q.18.(a). How does your school reuse wastewater? (Multiple Choice)
//If yes, and Q18(a) is answered,  your school gets five points

	$reusewastewater = ($this->getFiled('Q20W1', $argUserID) != '') ? $this->getFiled('Q20W1', $argUserID) : "";
	//$reusewastewater_a=(getFiled('Q20W3', $argUserID) != '') ? getFiled('Q20W3', $argUserID) : "";
	if ($reusewastewater == "Y") {
	    $water_points['q18_reuse_water'] = 5;
	} else {
	    $water_points['q18_reuse_water'] = 0;
	}
//	echo '<pre>';
//	print_r($water_points);
//	exit;
	echo array_sum($water_points);
    }

	public function table() {
	$this->load->dbforge();
	$key = array(
	    'id',
	    'userid',
	     'Q4W1',
   'Q4W2',
   'Q4W3',
   'Q4W4',
   'Q4W5',
   'Q4W6',
   'Q4W7',
   'Q4W8',
   'Q4W9',
   'Q4W10',
   'Q4W11',
   'Q5W1',
   'Q5W2',
   'Q5W3',
   'Q5W4',
   'Q6W1',
   'Q6W2',
   'Q6W3',
   'Q6W4',
   'Q6W5',
   'Q7W1',
   'Q7W2',
   'Q8W1S1',
   'Q8W1S2',
   'Q8W1S3',
   'Q8W1S4',
   'Q8W1S5',
   'Q8W1S6',
   'Q8W1S7',
   'Q8W1S8',
   'Q8W1S9',
   'Q8W1S10',
   'Q8W1S11',
   'Q8W2',
   'Q8W2S1',
   'Q8W2S1S1',
   'Q8W2S2',
   'Q8W2S2S1',
   'Q8W2S2S2',
   'Q8W2S2S7',
   'Q8W2S2S10',
   'Q8W2S4',
   'Q8W2S31',
   'Q8W2S4S1',
   'Q8W2S4S22',
   'Q8W2S5',
   'Q8W2S7',
   'Q8W2S61',
   'Q8W2S9',
   'Q8W2S8',
   'Q8W2S9',
   'Q8W2S10',
   'Q8W2S12',
   'Q8W2S13',
   'Q8W3S1',
   'Q8W3S2',
   'Q8W3S3',
   'Q8W3S4',
   'Q8W3S5',
   'Q8W3S6',
   'Q8W3S7',
   'Q8W3S8',
   'Q9W1',
   'Load_on_DWT',
   'Q10W1',
   'Q11W1',
   'Load_on_Ablution_Tap',
   'Q13W1S1',
   'Q13W1S2',
   'Q13W1S3',
   'Q13W1S4',
   'Load_on_Water_Closet',
   'Q14W1',
   'Q15W1',
   'Q15W1',
   'Q16W1',
   'Q21W1',
   'Q18W1',
   'Q19W1',
   'Q20W1',
   'Q20W2',
   'points'
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
//	echo '<pre>';
//	print_r($test->fields);
//	exit;
	$this->dbforge->add_key('id', TRUE);
	$this->dbforge->create_table('tbl_water');
    }

}
