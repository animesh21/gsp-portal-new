<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_waste extends CI_Controller {

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
    
	public function waste() {
	ini_set('memory_limit', '-1');
	$uArray =$uArray = $this->db->select('*')->from('gsp_school AS a')->join('gsp_aduit_submitted AS b','b.userid=a.userid','left')->where('a.progress="100"')->where('b.date_on > "2017-11-30"')->where('b.status="1"')->get()->result_array();
	$points=array();
	for($i=0; $i<count($uArray); $i++)
	{
	
	$paper=null;
	if($this->getFiled('Q11Wa1S1', $uArray[$i]['userid'])==1):
		   $paper=$paper."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa1S2', $uArray[$i]['userid'])==1):
		    $paper=$paper."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa1S3', $uArray[$i]['userid'])==1):
		    $paper=$paper."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa1S4', $uArray[$i]['userid'])==1):
		   $paper=$paper."Internal procedure".",";  
		  endif;	  
	$plastic=null;
	if($this->getFiled('Q11Wa2S1', $uArray[$i]['userid'])==1):
		   $plastic="Local scrap collector (kabadiwala)";
    endif;
	if($this->getFiled('Q11Wa2S2', $uArray[$i]['userid'])==1):
		    $plastic="Authorized dealer";
	endif;
	if($this->getFiled('Q11Wa2S3', $uArray[$i]['userid'])==1):
		    $plastic="Dumped at a designated community site";
	endif;
	if($this->getFiled('Q11Wa2S4', $uArray[$i]['userid'])==1):
		   $plastic="Internal procedure".",";  
		  endif;
		  
		  
		  
	$horticultural_waste=null;
	if($this->getFiled('Q11Wa3S1', $uArray[$i]['userid'])==1):
		   $horticultural_waste=$horticultural_waste."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa3S2', $uArray[$i]['userid'])==1):
		    $horticultural_waste=$horticultural_waste."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa3S3', $uArray[$i]['userid'])==1):
		    $horticultural_waste=$horticultural_waste."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa3S4', $uArray[$i]['userid'])==1):
		   $horticultural_waste=$horticultural_waste."Internal procedure".",";  
		  endif;
		  
		  
	$e_waste=null;
	if($this->getFiled('Q11Wa4S1', $uArray[$i]['userid'])==1):
		   $e_waste=$e_waste."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa4S2', $uArray[$i]['userid'])==1):
		    $e_waste=$e_waste."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa4S3', $uArray[$i]['userid'])==1):
		    $e_waste=$e_waste."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa4S4', $uArray[$i]['userid'])==1):
		   $e_waste=$e_waste."Internal procedure".",";  
		  endif;	  	  
	
	
	$hazardous_waste=null;
	if($this->getFiled('Q11Wa5S1', $uArray[$i]['userid'])==1):
		   $hazardous_waste=$hazardous_waste."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa5S2', $uArray[$i]['userid'])==1):
		    $hazardous_waste=$hazardous_waste."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa5S3', $uArray[$i]['userid'])==1):
		    $hazardous_waste=$hazardous_waste."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa5S4', $uArray[$i]['userid'])==1):
		   $hazardous_waste=$hazardous_waste."Internal procedure".",";  
		  endif;	  
	
	
	$wood_glass_metal=null;
	if($this->getFiled('Q11Wa6S1', $uArray[$i]['userid'])==1):
		   $wood_glass_metal=$wood_glass_metal."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa6S2', $uArray[$i]['userid'])==1):
		    $wood_glass_metal=$wood_glass_metal."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa6S3', $uArray[$i]['userid'])==1):
		    $wood_glass_metal=$wood_glass_metal."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa6S4', $uArray[$i]['userid'])==1):
		   $wood_glass_metal=$wood_glass_metal."Internal procedure".",";  
		  endif;
	
		$biomedical_waste=null;
	if($this->getFiled('Q11Wa7S1', $uArray[$i]['userid'])==1):
		   $biomedical_waste=$biomedical_waste."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa7S2', $uArray[$i]['userid'])==1):
		    $biomedical_waste=$biomedical_waste."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa7S3', $uArray[$i]['userid'])==1):
		    $biomedical_waste=$biomedical_waste."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa7S4', $uArray[$i]['userid'])==1):
		   $biomedical_waste=$biomedical_waste."Internal procedure".",";  
		  endif;
	
	
	$Others=null;
	if($this->getFiled('Q11Wa8S1', $uArray[$i]['userid'])==1):
		   $Others=$Others."Local scrap collector (kabadiwala)".",";
    endif;
	if($this->getFiled('Q11Wa8S2', $uArray[$i]['userid'])==1):
		    $Others=$Others."Authorized dealer".",";
	endif;
	if($this->getFiled('Q11Wa8S3', $uArray[$i]['userid'])==1):
		    $Others=$Others."Dumped at a designated community site".",";
	endif;
	if($this->getFiled('Q11Wa8S4', $uArray[$i]['userid'])==1):
		   $Others=$Others."Internal procedure".",";  
		  endif;
	
	$Q18Wa2S1=null;
	
	if($this->getFiled('Q18Wa2S1', $uArray[$i]['userid'])==1):
		   $Q18Wa2S1=$Q18Wa2S1."As part of the curriculum".",";
    endif;
	if($this->getFiled('Q18Wa2S2', $uArray[$i]['userid'])==2):
		    $Q18Wa2S1=$Q18Wa2S1."As part of extracurricular activities such as guest lectures".",";
	endif;
	if($this->getFiled('Q18Wa2S3', $uArray[$i]['userid'])==3):
		    $Q18Wa2S1=$Q18Wa2S1."By the showcasing of posters and stickers".",";
	endif;
	
	$Q15Wa2S1=null;
	
	if($this->getFiled('Q15Wa2S1', $uArray[$i]['userid'])==1):
		   $Q15Wa2S1=$Q15Wa2S1."Horticultural".",";
    endif;
	if($this->getFiled('Q15Wa2S2', $uArray[$i]['userid'])==1):
		    $Q15Wa2S1=$Q15Wa2S1."Plastic".",";
	endif;
	if($this->getFiled('Q15Wa2S3', $uArray[$i]['userid'])==1):
		    $Q15Wa2S1=$Q15Wa2S1."Tyres".",";
	endif;
	if($this->getFiled('Q15Wa2S4', $uArray[$i]['userid'])==1):
		    $Q15Wa2S1=$Q15Wa2S1."Paper".",";
	endif;
	
	
	$Q15Wa2=null;
	if($this->getFiled('Q15Wa2', $uArray[$i]['userid'])==1):
		   $Q15Wa2=$Q15Wa2."Inside the school".",";
	elseif($this->getFiled('Q15Wa2', $uArray[$i]['userid'])==2):
		    $Q15Wa2=$Q15Wa2."Outside the school".",";
	endif;
	
	$Q14Wa1="";
	
	if($this->getFiled('Q14Wa1', $uArray[$i]['userid'])==1):
		   $Q14Wa1=$Q14Wa1."Open dumping".",";
	elseif($this->getFiled('Q14Wa1', $uArray[$i]['userid'])==2):
		    $Q14Wa1=$Q14Wa1."Designated dumping site (Dhalao)".",";
				elseif($this->getFiled('Q14Wa1', $uArray[$i]['userid'])==3):
		    $Q14Wa1=$Q14Wa1."Landfill Site".",";
				elseif($this->getFiled('Q14Wa1', $uArray[$i]['userid'])==4):
		    $Q14Wa1=$Q14Wa1."Don’t know".",";
	endif;
	$Q4Wa2="";
		if($this->getFiled('Q4Wa2', $uArray[$i]['userid'])==1):
		   $Q4Wa2=$Q4Wa2."Two".",";
	elseif($this->getFiled('Q4Wa2', $uArray[$i]['userid'])==2):
		    $Q4Wa2=$Q4Wa2."Three".",";
	elseif($this->getFiled('Q4Wa2', $uArray[$i]['userid'])==3):
		    $Q4Wa2=$Q4Wa2."More than three".",";
	endif;
	$Q9Wa2S1="";
		if($this->getFiled('Q9Wa2S1', $uArray[$i]['userid'])==1):
		   $Q9Wa2S1=$Q9Wa2S1." Natural composting without added microbes".",";
	    endif;
		if($this->getFiled('Q9Wa2S2', $uArray[$i]['userid'])==1):
		    $Q9Wa2S1=$Q9Wa2S1."Vermi composting".",";
	    endif;
		if($this->getFiled('Q9Wa2S3', $uArray[$i]['userid'])==1):
		    $Q9Wa2S1=$Q9Wa2S1."Mechanical composting".",";
	    endif;
	
	$Q9Wa4S1="";
		if($this->getFiled('Q9Wa4S1', $uArray[$i]['userid'])==1):
		   $Q9Wa4S1=$Q9Wa4S1."For horticultural purposes".",";
	endif;
	if($this->getFiled('Q9Wa4S2', $uArray[$i]['userid'])==1):
		    $Q9Wa4S1=$Q9Wa4S1."For school garden".",";
	endif;		
	if($this->getFiled('Q9Wa4S3', $uArray[$i]['userid'])==1):
		    $Q9Wa4S1=$Q9Wa4S1."For sale".",";
	endif;
	if($this->getFiled('Q9Wa4S4', $uArray[$i]['userid'])==1):
		    $Q9Wa4S1=$Q9Wa4S1."For charity".",";
	endif;
	
	
	$Q13Wa2="";
		if($this->getFiled('Q13Wa2', $uArray[$i]['userid'])==1):
		   $Q13Wa2=$Q13Wa2."Kabadiwalla/ Scrapdealer".",";
	elseif($this->getFiled('Q13Wa2', $uArray[$i]['userid'])==2):
		    $Q13Wa2=$Q13Wa2."Taken back by manufacturer/vendor".",";
	elseif($this->getFiled('Q13Wa2', $uArray[$i]['userid'])==3):
		    $Q13Wa2=$Q13Wa2."Authorised dealer".",";
	elseif($this->getFiled('Q13Wa2', $uArray[$i]['userid'])==4):
		    $Q13Wa2=$Q13Wa2."Authorised dismantler".",";		
	endif;

	
	
	
	
	
	
	   $points[$i]=array(
	  'userid'=>$uArray[$i]['userid'],
	  //'school_id'=>$uArray[$i]['school_id'],
      'Q4Wa1'=>($this->getFiled('Q4Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa1', $uArray[$i]['userid']) : "N/A",
      'Q4Wa2'=>($this->getFiled('Q4Wa2', $uArray[$i]['userid']) != '') ? $Q4Wa2 : "N/A",
/*'Q4Wa2S2'=>($this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S3'=>($this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S5'=>($this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S1'=>($this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S2'=>($this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S3'=>($this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q4Wa2S5'=>($this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) : "N/A",*/
'Q5Wa1S1'=>($this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa1S2'=>($this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa1S3'=>($this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa1S4'=>($this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa1S5'=>($this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa2S1'=>($this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa2S2'=>($this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa2S3'=>($this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa2S4'=>($this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa2S5'=>($this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa3S1'=>($this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa3S2'=>($this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa3S3'=>($this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa3S4'=>($this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa3S5'=>($this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa4S1'=>($this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa4S2'=>($this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa4S3'=>($this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa4S4'=>($this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa4S5'=>($this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa5S1'=>($this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa5S2'=>($this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa5S3'=>($this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa5S4'=>($this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa5S5'=>($this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa6S1'=>($this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa6S2'=>($this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa6S3'=>($this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa6S4'=>($this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa6S5'=>($this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa7S1'=>($this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa7S2'=>($this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa7S3'=>($this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa7S4'=>($this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa7S5'=>($this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa8S1'=>($this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa8S2'=>($this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa8S3'=>($this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa8S4'=>($this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa8S5'=>($this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa9S1'=>($this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa9S2'=>($this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa9S3'=>($this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa9S4'=>($this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa9S5'=>($this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa10S1'=>($this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa10S2'=>($this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa10S3'=>($this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa10S4'=>($this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa10S5'=>($this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) : "N/A",
'Q5Wa11S1'=>($this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) : "N/A",
'Q5Wa11S2'=>($this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) : "N/A",
'Q5Wa11S3'=>($this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) : "N/A",
'Q5Wa11S4'=>($this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) : "N/A",
'Q5Wa11S5'=>($this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) : "N/A",
'Q6Wa1S1'=>($this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa1S2'=>($this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa1S3'=>($this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) : "N/A",

'Q6Wa1S4'=>($this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) : "N/A",
'Q6Wa1S5'=>($this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) : "N/A",
'Q6Wa1S6'=>($this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S1'=>($this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S2'=>($this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S3'=>($this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S4'=>($this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S5'=>($this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S6'=>($this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S7'=>($this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S8'=>($this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) : "N/A",
'Q6Wa2S9'=>($this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) : "N/A",
'Q6Wa3S1'=>($this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa3S2'=>($this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa3S3'=>($this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) : "N/A",
'Q6Wa3S4'=>($this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) : "N/A",
'Q6Wa4S1'=>($this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa4S2'=>($this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa5S1'=>($this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa5S2'=>($this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa6S1'=>($this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa6S2'=>($this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) : "N/A",
'Q6Wa7S1'=>($this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) : "N/A",
'Q6Wa7S2'=>($this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa1'=>($this->getFiled('Q8Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S1'=>($this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S2'=>($this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S3'=>($this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S4'=>($this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S5'=>($this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) : "N/A",
'Q8Wa1S6'=>($this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S1'=>($this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S2'=>($this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S3'=>($this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S4'=>($this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S5'=>($this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S6'=>($this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S7'=>($this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S8'=>($this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) : "N/A",
'Q8Wa2S9'=>($this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) : "N/A",
'Q8Wa3S1'=>($this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa3S2'=>($this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa3S3'=>($this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) : "N/A",
'Q8Wa3S4'=>($this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) : "N/A",
'Q8Wa4S1'=>($this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa4S2'=>($this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa5S1'=>($this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa5S2'=>($this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa6S1'=>($this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa6S2'=>($this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) : "N/A",
'Q8Wa7S1'=>($this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) : "N/A",
'Q8Wa7S2'=>($this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) : "N/A",
'Q9Wa1'=>($this->getFiled('Q9Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa1', $uArray[$i]['userid']) : "N/A",
'Q9Wa2S1'=>( $Q9Wa2S1 != '') ? $Q9Wa2S1: "N/A",

'Q9Wa31'=>($this->getFiled('Q9Wa3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa3', $uArray[$i]['userid']) : "N/A",

'Q9Wa4S1'=>($Q9Wa4S1 != '') ? $Q9Wa4S1 : "N/A",
/*'Q9Wa2S4'=>($this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) : "N/A",*/
/*'Q9Wa3'=>($this->getFiled('Q9Wa3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa3', $uArray[$i]['userid']) : "N/A",*/
'Q10Wa1'=>($this->getFiled('Q10Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10Wa1', $uArray[$i]['userid']) : "N/A",
  'paper_recycling_procedures'=>$paper?: "N/A",
    'plastic_recycling_procedures'=>$plastic?: "N/A",
    'horticultural_waste_recycling_procedures'=>$horticultural_waste?: "N/A",
    'e_waste_recycling_procedures'=>$e_waste?: "N/A",
    'hazardous_waste_recycling_procedures'=>$hazardous_waste?: "N/A",
    'wood_glass_metal_recycling_procedures'=>$wood_glass_metal?: "N/A",
    'biomedical_waste_recycling_procedures'=>$biomedical_waste?: "N/A",
    'others_recycling_procedures'=>$Others?: "N/A",



'Q12Wa1S1'=>($this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa1S2'=>($this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa1S3'=>($this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa1S4'=>($this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa2S1'=>($this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa2S2'=>($this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa2S3'=>($this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa2S4'=>($this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa3S1'=>($this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa3S2'=>($this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa3S3'=>($this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa3S4'=>($this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa4S1'=>($this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa4S2'=>($this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa4S3'=>($this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa4S4'=>($this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa5S1'=>($this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa5S2'=>($this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa5S3'=>($this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa5S4'=>($this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa6S1'=>($this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa6S2'=>($this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa6S3'=>($this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa6S4'=>($this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa7S1'=>($this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa7S2'=>($this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa7S3'=>($this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa7S4'=>($this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa8S1'=>($this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa8S2'=>($this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa8S3'=>($this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa8S4'=>($this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa9S1'=>($this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa9S2'=>($this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa9S3'=>($this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa9S4'=>($this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa10S1'=>($this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa10S2'=>($this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa10S3'=>($this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa10S4'=>($this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa11S1'=>($this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa11S2'=>($this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa11S3'=>($this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa11S4'=>($this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa12S1'=>($this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa12S2'=>($this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa12S3'=>($this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa12S4'=>($this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa13S1'=>($this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa13S2'=>($this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa13S3'=>($this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa13S4'=>($this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) : "N/A",
/*'Q12Wa14S1'=>($this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa14S2'=>($this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa14S3'=>($this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa14S4'=>($this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) : "N/A",*/
'Q12Wa15S1'=>($this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa15S2'=>($this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa15S3'=>($this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa15S4'=>($this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa16S1'=>($this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa16S2'=>($this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa16S3'=>($this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa16S4'=>($this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa17S1'=>($this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa17S2'=>($this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa17S3'=>($this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa17S4'=>($this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa18S1'=>($this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa18S2'=>($this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa18S3'=>($this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa18S4'=>($this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa19S1'=>($this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa19S2'=>($this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa19S3'=>($this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa19S4'=>($this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa20S1'=>($this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa20S2'=>($this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa20S3'=>($this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa20S4'=>($this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa21S1'=>($this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa21S2'=>($this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa21S3'=>($this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa21S4'=>($this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa22S1'=>($this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa22S2'=>($this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa22S3'=>($this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa22S4'=>($this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa23S1'=>($this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa23S2'=>($this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa23S3'=>($this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa23S4'=>($this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa24S1'=>($this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa24S2'=>($this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa24S3'=>($this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa24S4'=>($this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa25S1'=>($this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa25S2'=>($this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa25S3'=>($this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa25S4'=>($this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa26S1'=>($this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa26S2'=>($this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa26S3'=>($this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa26S4'=>($this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa27S1'=>($this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa27S2'=>($this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa27S3'=>($this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa27S4'=>($this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) : "N/A",
'Q12Wa28S1'=>($this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) : "N/A",
'Q12Wa28S2'=>($this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) : "N/A",
'Q12Wa28S3'=>($this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) : "N/A",
'Q12Wa28S4'=>($this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) : "N/A",
'Q13Wa1'=>($this->getFiled('Q13Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa1', $uArray[$i]['userid']) : "N/A",
'Q13Wa2'=>($this->getFiled('Q13Wa2', $uArray[$i]['userid']) != '') ? $Q13Wa2 : "N/A",
/*'Q13Wa20'=>($this->getFiled('Q13Wa2O', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa2O', $uArray[$i]['userid']) : "N/A",*/
'Q14Wa1'=>($Q14Wa1 != '') ? $Q14Wa1 : "N/A",
'Q15Wa1'=>($this->getFiled('Q15Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa1', $uArray[$i]['userid']) : "N/A",
'Q15Wa2'=>($this->getFiled('Q15Wa2', $uArray[$i]['userid']) != '') ? $Q15Wa2 : "N/A",
'Q15Wa2S1'=>($this->getFiled('Q15Wa2S1', $uArray[$i]['userid']) != '') ? $Q15Wa2S1 : "N/A",
'Q16Wa1'=>($this->getFiled('Q16Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16Wa1', $uArray[$i]['userid']) : "N/A",
'Q17Wa1'=>($this->getFiled('Q17Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q17Wa1', $uArray[$i]['userid']) : "N/A",
'Q18Wa1'=>($this->getFiled('Q18Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa1', $uArray[$i]['userid']) : "N/A",
'Q18Wa2S1'=>($this->getFiled('Q18Wa1', $uArray[$i]['userid']) != '') ? $Q18Wa2S1 : "N/A",
'Q19Wa1'=>($this->getFiled('Q19Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19Wa1', $uArray[$i]['userid']) : "N/A",
'points'=>getWastePoints($uArray[$i]['userid'])
);
	}
	//echo '<pre>'; print_r($points);
	//$this->db->insert_batch('tbl_waste',$points);
	//$this->db->insert_batch('tbl_waste',$points);
	$this->db->insert_batch('tbl_waste',$points,'userid');
    }
 
   function getWastePoints($argUserID) {
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
	//Q3.How much waste does your school generate?
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
	}
	//Q5 Does your school have a composting facility?
	$composition_facility = (getFiled('Q9Wa1', $argUserID) != '') ? getFiled('Q9Wa1', $argUserID) : "";
	if ($composition_facility != '') {
	    if ($composition_facility == 'Y') {
		$waste_points['Q5_facility'] = 10;
	    } else if ($composition_facility == 'N') {
		$waste_points['Q5_facility'] = 0;
	    }
	}
	//Q5 a. What is the methodology used?
//	$methodology = (getFiled('Q9Wa2S1', $argUserID) != '') ? getFiled('Q9Wa2S1', $argUserID) : "";
//	if ($methodology != '') {
//	    $waste_points['Q5_facility'] = 10;
//	}

	//Q9 Do you know that your e-waste can be collected by an authorized dealer or dismantler?
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
	echo array_sum($waste_points);
	echo '<pre>'; print_r($waste_points);
	//return number_format(array_sum($waste_points), 2);
	//print_r($waste_points);
    }
    	public function table() {
	$this->load->dbforge();
	$key = array(
	    'id',
	    'userid',
	    'Q4Wa1',
    'Q4Wa2',
    'Q5Wa1S1',
    'Q5Wa1S2',
    'Q5Wa1S3',
    'Q5Wa1S4',
    'Q5Wa1S5',
    'Q5Wa2S1',
    'Q5Wa2S2',
    'Q5Wa2S3',
    'Q5Wa2S4',
    'Q5Wa2S5',
    'Q5Wa3S1',
    'Q5Wa3S2',
    'Q5Wa3S3',
    'Q5Wa3S4',
    'Q5Wa3S5',
    'Q5Wa4S1',
    'Q5Wa4S2',
    'Q5Wa4S3',
    'Q5Wa4S4',
    'Q5Wa4S5',
    'Q5Wa5S1',
    'Q5Wa5S2',
    'Q5Wa5S3',
    'Q5Wa5S4',
    'Q5Wa5S5',
    'Q5Wa6S1',
    'Q5Wa6S2',
    'Q5Wa6S3',
    'Q5Wa6S4',
    'Q5Wa6S5',
    'Q5Wa7S1',
    'Q5Wa7S2',
    'Q5Wa7S3',
    'Q5Wa7S4',
    'Q5Wa7S5',
    'Q5Wa8S1',
    'Q5Wa8S2',
    'Q5Wa8S3',
    'Q5Wa8S4',
    'Q5Wa8S5',
    'Q5Wa9S1',
    'Q5Wa9S2',
    'Q5Wa9S3',
    'Q5Wa9S4',
    'Q5Wa9S5',
    'Q5Wa10S1',
    'Q5Wa10S2',
    'Q5Wa10S3',
    'Q5Wa10S4',
    'Q5Wa10S5',
    'Q5Wa11S1',
    'Q5Wa11S2',
    'Q5Wa11S3',
    'Q5Wa11S4',
    'Q5Wa11S5',
    'Q6Wa1S1',
    'Q6Wa1S2',
    'Q6Wa1S3',
    'Q6Wa1S4',
    'Q6Wa1S5',
    'Q6Wa1S6',
    'Q6Wa2S1',
    'Q6Wa2S2',
    'Q6Wa2S3',
    'Q6Wa2S4',
    'Q6Wa2S5',
    'Q6Wa2S6',
    'Q6Wa2S7',
    'Q6Wa2S8',
    'Q6Wa2S9',
    'Q6Wa3S1',
    'Q6Wa3S2',
    'Q6Wa3S3',
    'Q6Wa3S4',
    'Q6Wa4S1',
    'Q6Wa4S2',
    'Q6Wa5S1',
    'Q6Wa5S2',
    'Q6Wa6S1',
    'Q6Wa6S2',
    'Q6Wa7S1',
    'Q6Wa7S2',
    'Q8Wa1',
    'Q8Wa1S1',
    'Q8Wa1S2',
    'Q8Wa1S3',
    'Q8Wa1S4',
    'Q8Wa1S5',
    'Q8Wa1S6',
    'Q8Wa2S1',
    'Q8Wa2S2',
    'Q8Wa2S3',
    'Q8Wa2S4',
    'Q8Wa2S5',
    'Q8Wa2S5',
    'Q8Wa2S7',
    'Q8Wa2S8',
    'Q8Wa2S9',
    'Q8Wa3S1',
    'Q8Wa3S2',
    'Q8Wa3S3',
    'Q8Wa3S4',
    'Q8Wa4S1',
    'Q8Wa4S2',
    'Q8Wa5S1',
    'Q8Wa5S2',
    'Q8Wa6S1',
    'Q8Wa6S2',
    'Q8Wa7S1',
    'Q8Wa7S2',
    'Q9Wa1',
    'Q9Wa2S1',
    'Q9Wa31',
    'Q9Wa4S1',
    'Q10Wa1',
    'paper_recycling_procedures',
    'plastic_recycling_procedures',
    'horticultural_waste_recycling_procedures',
    'e_waste_recycling_procedures',
    'hazardous_waste_recycling_procedures',
    'wood_glass_metal_recycling_procedures',
    'biomedical_waste_recycling_procedures',
    'others_recycling_procedures',
    'Q12Wa1S1',
    'Q12Wa1S2',
    'Q12Wa1S3',
    'Q12Wa1S4',
    'Q12Wa2S1',
    'Q12Wa2S2',
    'Q12Wa2S3',
    'Q12Wa2S4',
    'Q12Wa3S1',
    'Q12Wa3S2',
    'Q12Wa3S3',
    'Q12Wa3S4',
    'Q12Wa4S1',
    'Q12Wa4S2',
    'Q12Wa4S3',
    'Q12Wa4S4',
    'Q12Wa5S1',
    'Q12Wa5S2',
    'Q12Wa5S3',
    'Q12Wa5S4',
    'Q12Wa6S1',
    'Q12Wa6S2',
    'Q12Wa6S3',
    'Q12Wa6S4',
    'Q12Wa7S1',
    'Q12Wa7S2',
    'Q12Wa7S3',
    'Q12Wa7S4',
    'Q12Wa8S1',
    'Q12Wa8S2',
    'Q12Wa8S3',
    'Q12Wa8S4',
    'Q12Wa9S1',
    'Q12Wa9S2',
    'Q12Wa9S3',
    'Q12Wa9S4',
    'Q12Wa10S1',
    'Q12Wa10S2',
    'Q12Wa10S3',
    'Q12Wa10S4',
    'Q12Wa11S1',
    'Q12Wa11S2',
    'Q12Wa11S3',
    'Q12Wa11S4',
    'Q12Wa12S1',
    'Q12Wa12S2',
    'Q12Wa12S3',
    'Q12Wa12S4',
    'Q12Wa13S1',
    'Q12Wa13S2',
    'Q12Wa13S3',
    'Q12Wa13S4',
    'Q12Wa15S1',
    'Q12Wa15S2',
    'Q12Wa15S3',
    'Q12Wa15S4',
    'Q12Wa16S1',
    'Q12Wa16S2',
    'Q12Wa16S3',
    'Q12Wa16S4',
    'Q12Wa17S1',
    'Q12Wa17S2',
    'Q12Wa17S3',
    'Q12Wa17S4',
    'Q12Wa18S1',
    'Q12Wa18S2',
    'Q12Wa18S3',
    'Q12Wa18S4',
    'Q12Wa19S1',
    'Q12Wa19S2',
    'Q12Wa19S3',
    'Q12Wa19S4',
    'Q12Wa20S1',
    'Q12Wa20S2',
    'Q12Wa20S3',
    'Q12Wa20S4',
    'Q12Wa21S1',
    'Q12Wa21S2',
    'Q12Wa21S3',
    'Q12Wa21S4',
    'Q12Wa22S1',
    'Q12Wa22S2',
    'Q12Wa22S3',
    'Q12Wa22S4',
    'Q12Wa23S1',
    'Q12Wa23S2',
    'Q12Wa23S3',
    'Q12Wa23S4',
    'Q12Wa24S1',
    'Q12Wa24S2',
    'Q12Wa24S3',
    'Q12Wa24S4',
    'Q12Wa25S1',
    'Q12Wa25S2',
    'Q12Wa25S3',
    'Q12Wa25S4',
    'Q12Wa26S1',
    'Q12Wa26S2',
    'Q12Wa26S3',
    'Q12Wa26S4',
    'Q12Wa27S1',
    'Q12Wa27S2',
    'Q12Wa27S3',
    'Q12Wa27S4',
    'Q12Wa28S1',
    'Q12Wa28S2',
    'Q12Wa28S3',
    'Q12Wa28S4',
    'Q13Wa1',
    'Q13Wa2',
    'Q14Wa1',
    'Q15Wa1',
    'Q15Wa2',
    'Q15Wa2S1',
    'Q16Wa1',
    'Q17Wa1',
    'Q18Wa1',
    'Q18Wa2S1',
    'Q19Wa1',
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
	$this->dbforge->create_table('tbl_waste');
    }
}
