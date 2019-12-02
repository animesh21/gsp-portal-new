<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_total extends CI_Controller {

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


     function getFiledNum($argWhere, $argUserID) {
        $test = 0;
        $CI = & get_instance();
        $temp = $CI->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
        //echo $CI->db->last_query();
        //print_r($temp);
        if (!empty($temp)) {

             if(is_numeric($temp->answer)){
               $test = $temp->answer;
             }
           
            
        }
        return $test;
    }
    
	public function air() {
	ini_set('max_execution_time',"-1");
	ini_set('memory_limit', '-1');
	$this->benchmark->mark('code_start');
	echo 'Test Class';
	$this->benchmark->mark('code_end');
	echo $this->benchmark->elapsed_time('code_start', 'code_end');

	$query = $this->db->query("SELECT gsp_school.*,gsp_school.id As school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_school.complete_status='1' && gsp_aduit_submitted.year='2019' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
	// echo "<pre>";
	// print_r($uArray);
	// exit;
	$points=array();
	
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
	
	$paper="";
	if($this->getFiled('Q11Wa1S1', $uArray[$i]['userid'])==1){
	 $paper.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa1S2', $uArray[$i]['userid'])==1){
	 $paper.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa1S3', $uArray[$i]['userid'])==1){
	 $paper.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa1S4', $uArray[$i]['userid'])==1){
	 $paper.="Internal procedure".",";
	}
	$plastic="";
	if($this->getFiled('Q11Wa2S1', $uArray[$i]['userid'])==1){
	 $plastic.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa2S2', $uArray[$i]['userid'])==1){
	 $plastic.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa2S3', $uArray[$i]['userid'])==1){
	 $plastic.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa2S4', $uArray[$i]['userid'])==1){
	 $plastic.="Internal procedure".",";
	}
	
	$horticultural_waste="";
	if($this->getFiled('Q11Wa3S1', $uArray[$i]['userid'])==1){
	 $horticultural_waste.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa3S2', $uArray[$i]['userid'])==1){
	 $horticultural_waste.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa3S3', $uArray[$i]['userid'])==1){
	 $horticultural_waste.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa3S4', $uArray[$i]['userid'])==1){
	 $horticultural_waste.="Internal procedure".",";
	}
	
	$e_waste="";
	if($this->getFiled('Q11Wa4S1', $uArray[$i]['userid'])==1){
	 $e_waste.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa4S2', $uArray[$i]['userid'])==1){
	 $e_waste.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa4S3', $uArray[$i]['userid'])==1){
	 $e_waste.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa4S4', $uArray[$i]['userid'])==1){
	 $e_waste.="Internal procedure".",";
	}
	
	$hazardous_waste="";
	if($this->getFiled('Q11Wa5S1', $uArray[$i]['userid'])==1){
	 $hazardous_waste.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa5S2', $uArray[$i]['userid'])==1){
	 $hazardous_waste.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa5S3', $uArray[$i]['userid'])==1){
	 $hazardous_waste.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa5S4', $uArray[$i]['userid'])==1){
	 $hazardous_waste.="Internal procedure".",";
	}
	
	$wood_glass_metal="";
	if($this->getFiled('Q11Wa6S1', $uArray[$i]['userid'])==1){
	 $wood_glass_metal.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa6S2', $uArray[$i]['userid'])==1){
	 $wood_glass_metal.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa6S3', $uArray[$i]['userid'])==1){
	 $wood_glass_metal.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa6S4', $uArray[$i]['userid'])==1){
	 $wood_glass_metal.="Internal procedure".",";
	}
	
	$biomedical_waste="";
	if($this->getFiled('Q11Wa7S1', $uArray[$i]['userid'])==1){
	 $biomedical_waste.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa7S2', $uArray[$i]['userid'])==1){
	 $biomedical_waste.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa7S3', $uArray[$i]['userid'])==1){
	 $biomedical_waste.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa7S4', $uArray[$i]['userid'])==1){
	 $biomedical_waste.="Internal procedure".",";
	}
	
	$others="";
	if($this->getFiled('Q11Wa8S1', $uArray[$i]['userid'])==1){
	 $others.="Local scrap collector (kabadiwala)".",";
	}if($this->getFiled('Q11Wa8S2', $uArray[$i]['userid'])==1){
	 $others.="Authorized dealer".",";
	}if($this->getFiled('Q11Wa8S3', $uArray[$i]['userid'])==1){
	 $others.="Dumped at a designated community site".",";
	}if($this->getFiled('Q11Wa8S4', $uArray[$i]['userid'])==1){
	 $others.="Internal procedure".",";
	}
	
	$purpose_of_composite="";
	if($this->getFiled('Q9Wa4S1', $uArray[$i]['userid'])==1){
	  $purpose_of_composite.="For horticultural purposes".",";
	}
	if($this->getFiled('Q9Wa4S2', $uArray[$i]['userid'])==1){
	 $purpose_of_composite.="For school garden".",";
	}
	if($this->getFiled('Q9Wa4S3', $uArray[$i]['userid'])==1){
	 $purpose_of_composite.="For sale".",";
	}
	if($this->getFiled('Q9Wa4S4', $uArray[$i]['userid'])==1){
	 $purpose_of_composite.="For charity".",";
	}
	$methodology="";
	if($this->getFiled('Q9Wa2S1', $uArray[$i]['userid'])==1){
	  $methodology.="Natural composting without added microbes".",";
	}
	if($this->getFiled('Q9Wa2S2', $uArray[$i]['userid'])==1){
	 $methodology.="Vermi composting".",";
	}
	if($this->getFiled('Q9Wa2S3', $uArray[$i]['userid'])==1){
	 $methodology.="Mechanical composting".",";
	}
	if($this->getFiled('Q9Wa2S4', $uArray[$i]['userid'])!=""){
	 $methodology.=$this->getFiled('Q9Wa2S4', $uArray[$i]['userid']).",";
	}
	
	
	
	
    $audit_period=null;
	if(getFiled('Q7G1', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Jan".", ";
	endif;
	if(getFiled('Q7G2', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Feb".", ";
	endif;
	if(getFiled('Q7G3', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Mar".", ";
	endif;
	if(getFiled('Q7G4', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."April".", ";
	endif;
	if(getFiled('Q7G5', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."May".", ";
	endif;
	if(getFiled('Q7G6', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."June".", ";
	endif;
	if(getFiled('Q7G7', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."July".", ";
	endif;
	if(getFiled('Q7G8', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Aug".", ";
	endif;
	if(getFiled('Q7G9', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Sept".", ";
	endif;
	if(getFiled('Q7G10', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Oct".", ";
	endif;
	if(getFiled('Q7G11', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Nov".", ";
	endif;
	if(getFiled('Q7G12', $uArray[$i]['userid'])=='true'):
	$audit_period=$audit_period."Dec".", ";
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
	    $points[$i] = array(
		'userid' => $uArray[$i]['userid'],
		'school_id' => $uArray[$i]['school_id'],
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
		'shifts' => ($val_shift != '') ? $val_shift : "",
		'school_class_level' =>(getFiled('Q10G1', $uArray[$i]['userid']) != '') ? getFiled('Q10G1', $uArray[$i]['userid']) : "",
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
		'aid' => ($val_aid != '') ? $type_aid[$val_aid] : "",
	   
	   'Q4A1' => ($this->getFiled('Q4A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4A1', $uArray[$i]['userid']) : '000.000',
		'Q5A110S2' => ($this->getFiled('Q5A110S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A110S2', $uArray[$i]['userid']) : '000.000',
		'Q5A110S3' => ($this->getFiled('Q5A110S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5A110S3', $uArray[$i]['userid']) : '000.000',
		'Q6A1' => ($this->getFiled('Q6A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T1' => ($this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T2' => ($this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T3' => ($this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T4' => ($this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T5' => ($this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T5', $uArray[$i]['userid']) : '000.000',
		'Q6A2S1T6' => ($this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S1T6', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3D1' => ($this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3P1' => ($this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3L1' => ($this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3C1' => ($this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3E1' => ($this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3H1' => ($this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3D5' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : '000.000',
		'total_cars' => $this->getFiledNum('Q6A2S3B1', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3D2', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3P2', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3L2', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3C2', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3E2', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3H2', $uArray[$i]['userid']),
		'Q6A2S3B1' => ($this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B1', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3D2' => ($this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3P2' => ($this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3L2' => ($this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3C2' => ($this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3E2' => ($this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E2', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3H2' => ($this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H2', $uArray[$i]['userid']) : '000.000',
		'total_vans' => $this->getFiledNum('Q6A2S3D3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3P3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3L3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3C3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3E3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3H3', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3B3', $uArray[$i]['userid']),
		'Q6A2S3D3' => ($this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3P3' => ($this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3L3' => ($this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3C3' => ($this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3E3' => ($this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E3', $uArray[$i]['userid']) : '000.000',

		'Q6A2S3H3' => ($this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H3', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3B3' => ($this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B3', $uArray[$i]['userid']) : '000.000',
		'total_other' => $this->getFiledNum('Q6A2S3D4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3P4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3L4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3C4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3E4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3H4', $uArray[$i]['userid']) + $this->getFiledNum('Q6A2S3B4', $uArray[$i]['userid']),
		'Q6A2S3D4' => ($this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3P4' => ($this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3L4' => ($this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3C4' => ($this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3E4' => ($this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3H4' => ($this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H4', $uArray[$i]['userid']) : '000.000',
		'Q6A2S3B4' => ($this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B4', $uArray[$i]['userid']) : '000.000',
		'total_disel' => ($this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3D5', $uArray[$i]['userid']) : '000.000',
		'total_petrol' => ($this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3P5', $uArray[$i]['userid']) : '000.000',
		'total_lpg' => ($this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3L5', $uArray[$i]['userid']) : '000.000',
		'total_cng' => ($this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3C5', $uArray[$i]['userid']) : '000.000',
		'total_hybrid' => ($this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3E5', $uArray[$i]['userid']) : '000.000',
		'total_electric' => ($this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3H5', $uArray[$i]['userid']) : '000.000',
		'total_biofuel' => ($this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A2S3B5', $uArray[$i]['userid']) : '000.000',
		'Q6A3' => ($this->getFiled('Q6A3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A3', $uArray[$i]['userid']) : '000.000',
		'Q6A4S1' => ($this->getFiled('Q6A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6A4S1', $uArray[$i]['userid']) : '000.000',
		'Q7A1S1' => ($this->getFiled('Q7A1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S1', $uArray[$i]['userid']) : '000.000',
		'Q7A1S2' => ($this->getFiled('Q7A1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S2', $uArray[$i]['userid']) : '000.000',
		'Q7A1S3' => ($this->getFiled('Q7A1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S3', $uArray[$i]['userid']) : '000.000',
		'Q7A1S4' => ($this->getFiled('Q7A1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A1S4', $uArray[$i]['userid']) :'000.000',
		'Q7A2S1' => ($this->getFiled('Q7A2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S1', $uArray[$i]['userid']) : '000.000',
		'Q7A2S2' => ($this->getFiled('Q7A2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S2', $uArray[$i]['userid']) : '000.000',
		'Q7A2S3' => ($this->getFiled('Q7A2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S3', $uArray[$i]['userid']) : '000.000',
		'Q7A2S4' => ($this->getFiled('Q7A2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A2S4', $uArray[$i]['userid']) : '000.000',
		'Q7A3S1' => ($this->getFiled('Q7A3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S1', $uArray[$i]['userid']) : '000.000',
		'Q7A3S2' => ($this->getFiled('Q7A3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S2', $uArray[$i]['userid']) : '000.000',
		'Q7A3S3' => ($this->getFiled('Q7A3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S3', $uArray[$i]['userid']) : '000.000',
		'Q7A3S4' => ($this->getFiled('Q7A3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A3S4', $uArray[$i]['userid']) : '000.000',
		'Q7A4S1' => ($this->getFiled('Q7A4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S1', $uArray[$i]['userid']) : '000.000',
		'Q7A4S2' => ($this->getFiled('Q7A4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S2', $uArray[$i]['userid']) : '000.000',
		'Q7A4S3' => ($this->getFiled('Q7A4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S3', $uArray[$i]['userid']) : '000.000',
		'Q7A4S4' => ($this->getFiled('Q7A4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A4S4', $uArray[$i]['userid']) : '000.000',
		'Q7A5S1' => ($this->getFiled('Q7A5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S1', $uArray[$i]['userid']) : '000.000',
		'Q7A5S2' => ($this->getFiled('Q7A5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S2', $uArray[$i]['userid']) : '000.000',
		'Q7A5S3' => ($this->getFiled('Q7A5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S3', $uArray[$i]['userid']) : '000.000',
		'Q7A5S4' => ($this->getFiled('Q7A5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A5S4', $uArray[$i]['userid']) : '000.000',
		'Q7A6S1' => ($this->getFiled('Q7A6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S1', $uArray[$i]['userid']) : '000.000',
		'Q7A6S2' => ($this->getFiled('Q7A6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S2', $uArray[$i]['userid']) : '000.000',
		'Q7A6S3' => ($this->getFiled('Q7A6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S3', $uArray[$i]['userid']) : '000.000',
		'Q7A6S4' => ($this->getFiled('Q7A6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A6S4', $uArray[$i]['userid']) : '000.000',
		'Q7A7S1' => ($this->getFiled('Q7A7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S1', $uArray[$i]['userid']) : '000.000',
		'Q7A7S2' => ($this->getFiled('Q7A7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S2', $uArray[$i]['userid']) : '000.000',
		'Q7A7S3' => ($this->getFiled('Q7A7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S3', $uArray[$i]['userid']) : '000.000',
		'Q7A7S4' => ($this->getFiled('Q7A7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A7S4', $uArray[$i]['userid']) : '000.000',
		'Q7A8S1' => ($this->getFiled('Q7A8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S1', $uArray[$i]['userid']) : '000.000',
		'Q7A8S2' => ($this->getFiled('Q7A8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S2', $uArray[$i]['userid']) : '000.000',
		'Q7A8S3' => ($this->getFiled('Q7A8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S3', $uArray[$i]['userid']) : '000.000',
		'Q7A8S4' => ($this->getFiled('Q7A8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A8S4', $uArray[$i]['userid']) : '000.000',
		'Q7A9S1' => ($this->getFiled('Q7A9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S1', $uArray[$i]['userid']) : '000.000',
		'Q7A9S2' => ($this->getFiled('Q7A9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S2', $uArray[$i]['userid']) : '000.000',
		'Q7A9S3' => ($this->getFiled('Q7A9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S3', $uArray[$i]['userid']) : '000.000',
		'Q7A9S4' => ($this->getFiled('Q7A9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A9S4', $uArray[$i]['userid']) : '000.000',
		'Q7A10S1' => ($this->getFiled('Q7A10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S1', $uArray[$i]['userid']) : '000.000',
		'Q7A10S2' => ($this->getFiled('Q7A10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S2', $uArray[$i]['userid']) : '000.000',
		'Q7A10S3' => ($this->getFiled('Q7A10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S3', $uArray[$i]['userid']) : '000.000',
		'Q7A10S4' => ($this->getFiled('Q7A10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A10S4', $uArray[$i]['userid']) : '000.000',
		'Q7A11S1' => ($this->getFiled('Q7A11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S1', $uArray[$i]['userid']) : '000.000',
		'Q7A11S2' => ($this->getFiled('Q7A11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S2', $uArray[$i]['userid']) : '000.000',
		'Q7A11S3' => ($this->getFiled('Q7A11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S3', $uArray[$i]['userid']) : '000.000',
		'Q7A11S4' => ($this->getFiled('Q7A11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7A11S4', $uArray[$i]['userid']) : '000.000',
		'Q8A1' => ($this->getFiled('Q8A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8A1', $uArray[$i]['userid']) : '000.000',
		'Q9A1' => ($this->getFiled('Q9A1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A1', $uArray[$i]['userid']) : '000.000',
		'Q9A2' => ($this->getFiled('Q9A2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9A2', $uArray[$i]['userid']) : '000.000',
		'air_points' => $this->Air_performance($uArray[$i]['userid']),
	   
	   'Q4E1'=>($this->getFiled('Q4E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4E1', $uArray[$i]['userid']) : '000.000',
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'Q5E1'=>($this->getFiled('Q5E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5E1', $uArray[$i]['userid']) : '000.000',
		'Q6E1S1'=>($this->getFiled('Q6E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S1', $uArray[$i]['userid']) : '000.000',
		'Q6E2S1'=>($this->getFiled('Q6E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S1', $uArray[$i]['userid']) : '000.000',
		'Q6E3S1'=>($this->getFiled('Q6E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S1', $uArray[$i]['userid']) : '000.000',
		'Q6E4S1'=>($this->getFiled('Q6E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S1', $uArray[$i]['userid']) : '000.000',
		'Q6E5S1'=>($this->getFiled('Q6E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S1', $uArray[$i]['userid']) : '000.000',
		'Q6E6S1'=>($this->getFiled('Q6E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S1', $uArray[$i]['userid']) : '000.000',
		'Q6E7S1'=>($this->getFiled('Q6E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S1', $uArray[$i]['userid']) : '000.000',
		'Q6E16S1'=>($this->getFiled('Q6E16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S1', $uArray[$i]['userid']) : '000.000',
		'Q6E8S1'=>($this->getFiled('Q6E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S1', $uArray[$i]['userid']) : '000.000',
		'Q6E9S1'=>($this->getFiled('Q6E9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S1', $uArray[$i]['userid']) : '000.000',
		'Q6E10S1'=>($this->getFiled('Q6E10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S1', $uArray[$i]['userid']) : '000.000',
		'Q6E11S1'=>($this->getFiled('Q6E11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S1', $uArray[$i]['userid']) : '000.000',
		'Q6E12S1'=>($this->getFiled('Q6E12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S1', $uArray[$i]['userid']) : '000.000',
		'Q6E13S1'=>($this->getFiled('Q6E13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S1', $uArray[$i]['userid']) : '000.000',
		'Q6E14S1'=>($this->getFiled('Q6E14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S1', $uArray[$i]['userid']) : '000.000',
		'Q6E1S2'=>($this->getFiled('Q6E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E1S2', $uArray[$i]['userid']) : '000.000',
		'Q6E2S2'=>($this->getFiled('Q6E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E2S2', $uArray[$i]['userid']) : '000.000',
		'Q6E3S2'=>($this->getFiled('Q6E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E3S2', $uArray[$i]['userid']) : '000.000',
		'Q6E4S2'=>($this->getFiled('Q6E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E4S2', $uArray[$i]['userid']) : '000.000',
		'Q6E5S2'=>($this->getFiled('Q6E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E5S2', $uArray[$i]['userid']) : '000.000',
		'Q6E6S2'=>($this->getFiled('Q6E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E6S2', $uArray[$i]['userid']) : '000.000',
		'Q6E7S2'=>($this->getFiled('Q6E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E7S2', $uArray[$i]['userid']) : '000.000',
		'Q6E16S2'=>($this->getFiled('Q6E16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E16S2', $uArray[$i]['userid']) : '000.000',
		'Q6E8S2'=>($this->getFiled('Q6E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E8S2', $uArray[$i]['userid']) : '000.000',
		'Q6E9S2'=>($this->getFiled('Q6E9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E9S2', $uArray[$i]['userid']) : '000.000',
		'Q6E10S2'=>($this->getFiled('Q6E10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E10S2', $uArray[$i]['userid']) : '000.000',
		'Q6E11S2'=>($this->getFiled('Q6E11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E11S2', $uArray[$i]['userid']) : '000.000',
		'Q6E12S2'=>($this->getFiled('Q6E12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E12S2', $uArray[$i]['userid']) : '000.000',
		'Q6E13S2'=>($this->getFiled('Q6E13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E13S2', $uArray[$i]['userid']) : '000.000',
		'Q6E14S2'=>($this->getFiled('Q6E14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E14S2', $uArray[$i]['userid']) : '000.000',
		'Q6E15S2'=>($this->getFiled('Q6E15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6E15S2', $uArray[$i]['userid']) : '000.000',
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		
		
		
		'Q7E2S1'=>($this->getFiled('Q7E2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E2S2'=>($this->getFiled('Q7E2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S2', $uArray[$i]['userid']) : '000.000',
		'Q7E2S3'=>($this->getFiled('Q7E2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E2S3', $uArray[$i]['userid']) : '000.000',
		'Q7E3S1'=>($this->getFiled('Q7E3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E3S2'=>($this->getFiled('Q7E3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S2', $uArray[$i]['userid']) : '000.000',
		'Q7E3S3'=>($this->getFiled('Q7E3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E3S3', $uArray[$i]['userid']) : '000.000',
		'Q7E4S1'=>($this->getFiled('Q7E4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E4S2'=>($this->getFiled('Q7E4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S2', $uArray[$i]['userid']) : '000.000',
		'Q7E4S3'=>($this->getFiled('Q7E4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E4S3', $uArray[$i]['userid']) : '000.000',
		'Q7E5S1'=>($this->getFiled('Q7E5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E5S2'=>($this->getFiled('Q7E5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S2', $uArray[$i]['userid']) : '000.000',
		'Q7E5S3'=>($this->getFiled('Q7E5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E5S3', $uArray[$i]['userid']) : '000.000',
		'Q7E6S1'=>($this->getFiled('Q7E6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E6S2'=>($this->getFiled('Q7E6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S2', $uArray[$i]['userid']) : '000.000',
		'Q7E6S3'=>($this->getFiled('Q7E6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E6S3', $uArray[$i]['userid']) : '000.000',
		'Q7E7S1'=>($this->getFiled('Q7E7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E7S2'=>($this->getFiled('Q7E7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S2', $uArray[$i]['userid']) : '000.000',
		'Q7E7S3'=>($this->getFiled('Q7E7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E7S3', $uArray[$i]['userid']) : '000.000',
		'Q7E8S1'=>($this->getFiled('Q7E8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S1', $uArray[$i]['userid']) : '000.000',
		
		'Q7E8S2'=>($this->getFiled('Q7E8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S2', $uArray[$i]['userid']) : '000.000',
		'Q7E8S3'=>($this->getFiled('Q7E8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7E8S3', $uArray[$i]['userid']) : '000.000',
	/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,
	*/
	
	
	
		'Q8E1'=>($this->getFiled('Q8E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8E1', $uArray[$i]['userid']) : '000.000',
		'Q9E1'=>($this->getFiled('Q9E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1', $uArray[$i]['userid']) : '000.000',
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		'Q9E1S1'=>($this->getFiled('Q9E1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1', $uArray[$i]['userid']) : '000.000',
		'Q9E1S2'=>($this->getFiled('Q9E1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S2', $uArray[$i]['userid']) : '000.000',
		'Q9E1S3'=>($this->getFiled('Q9E1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S3', $uArray[$i]['userid']) : '000.000',
		'Q9E1S5'=>($this->getFiled('Q9E1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S5', $uArray[$i]['userid']) : '000.000',
		'Q9E1S4'=>($this->getFiled('Q9E1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S4', $uArray[$i]['userid']) : '000.000',
		'Q10E1'=>($this->getFiled('Q10E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10E1', $uArray[$i]['userid']) : '000.000',
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/


	// New energy field value insert in tbl
	'Q11E1'=>($this->getFiled('Q11E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11E1', $uArray[$i]['userid']) : '000.000',
	'Q13E1'=>($this->getFiled('Q13E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13E1', $uArray[$i]['userid']) : '000.000',

	'Q14E1'=>($this->getFiled('Q14E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14E1', $uArray[$i]['userid']) : '000.000',

	'Q15E1'=>($this->getFiled('Q15E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15E1', $uArray[$i]['userid']) : '000.000',

	'Q16E1'=>($this->getFiled('Q16E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16E1', $uArray[$i]['userid']) : '000.000',

	'Q19E1'=>($this->getFiled('Q19E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19E1', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1020'=>($this->getFiled('Q9E1S1020', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1020', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1021'=>($this->getFiled('Q9E1S1021', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1021', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1022'=>($this->getFiled('Q9E1S1022', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1022', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1023'=>($this->getFiled('Q9E1S1023', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1023', $uArray[$i]['userid']) : '000.000',

	'Q9E1S101'=>($this->getFiled('Q9E1S101', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S101', $uArray[$i]['userid']) : '000.000',

	'Q9E1S102'=>($this->getFiled('Q9E1S102', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S102', $uArray[$i]['userid']) : '000.000',

	'Q9E1S103'=>($this->getFiled('Q9E1S103', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S103', $uArray[$i]['userid']) : '000.000',

	'Q27E3'=>($this->getFiled('Q27E3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q27E3', $uArray[$i]['userid']) : '000.000',
	'Q27E1'=>($this->getFiled('Q27E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q27E1', $uArray[$i]['userid']) : '000.000',
	'Q27E2'=>($this->getFiled('Q27E2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q27E2', $uArray[$i]['userid']) : '000.000',

	'Q33E1'=>($this->getFiled('Q33E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q33E1', $uArray[$i]['userid']) : '000.000',

	'Q29E1'=>($this->getFiled('Q29E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q29E1', $uArray[$i]['userid']) : '000.000',

	'Q30E1'=>($this->getFiled('Q30E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q30E1', $uArray[$i]['userid']) : '000.000',

	'Q31E1'=>($this->getFiled('Q31E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q31E1', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1026'=>($this->getFiled('Q9E1S1026', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1026', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1027'=>($this->getFiled('Q9E1S1027', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1027', $uArray[$i]['userid']) : '000.000',

	'Q9E1S106'=>($this->getFiled('Q9E1S106', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S106', $uArray[$i]['userid']) : '000.000',

	'Q9E1S107'=>($this->getFiled('Q9E1S107', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S107', $uArray[$i]['userid']) : '000.000',

	'Q9E1S108'=>($this->getFiled('Q9E1S108', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S108', $uArray[$i]['userid']) : '000.000',

	'Q9E1S109'=>($this->getFiled('Q9E1S109', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S109', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1010'=>($this->getFiled('Q9E1S1010', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1010', $uArray[$i]['userid']) : '000.000',

	'Q34E1'=>($this->getFiled('Q34E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q34E1', $uArray[$i]['userid']) : '000.000',

	'Q38E1'=>($this->getFiled('Q38E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q38E1', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1011'=>($this->getFiled('Q9E1S1011', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1011', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1012'=>($this->getFiled('Q9E1S1012', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1012', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1013'=>($this->getFiled('Q9E1S1013', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1013', $uArray[$i]['userid']) : '000.000',
	'Q43E1'=>($this->getFiled('Q43E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q43E1', $uArray[$i]['userid']) : '000.000',

	'Q42E1'=>($this->getFiled('Q42E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q42E1', $uArray[$i]['userid']) : '000.000',

	'Q44E1'=>($this->getFiled('Q44E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q44E1', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1014'=>($this->getFiled('Q9E1S1014', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1014', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1015'=>($this->getFiled('Q9E1S1015', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1015', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1016'=>($this->getFiled('Q9E1S1016', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1016', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1017'=>($this->getFiled('Q9E1S1017', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1017', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1018'=>($this->getFiled('Q9E1S1018', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1018', $uArray[$i]['userid']) : '000.000',

	'Q9E1S1019'=>($this->getFiled('Q9E1S1019', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9E1S1019', $uArray[$i]['userid']) : '000.000',

	'Q51E1'=>($this->getFiled('Q51E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q51E1', $uArray[$i]['userid']) : '000.000',

	'Q52E1'=>($this->getFiled('Q52E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q52E1', $uArray[$i]['userid']) : '000.000',

	'Q53E1'=>($this->getFiled('Q53E1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q53E1', $uArray[$i]['userid']) : '000.000',

	 


	'energy_points'=>$this->getEnergyPoints($uArray[$i]['userid']),
	'per_day_energy_point'=>$this->perDayEnergyConsumptionPoint($uArray[$i]['userid']),
	'per_capta_energy_consumption'=>$this->perCaptaEnergy($uArray[$i]['userid']),
	'per_day_energy_consumption'=>$this->perDayEnergy($uArray[$i]['userid']),

		
	    'Q4F1'=>($this->getFiled('Q4F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4F1', $uArray[$i]['userid']) : '000.000',
		'Q5F1'=>($this->getFiled('Q5F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1', $uArray[$i]['userid']) : '000.000',
		'Q5F1S1'=>($this->getFiled('Q5F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S1', $uArray[$i]['userid']) : '000.000',
		'Q5F1S2'=>($this->getFiled('Q5F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S2', $uArray[$i]['userid']) : '000.000',
		'Q5F1S3'=>($this->getFiled('Q5F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S3', $uArray[$i]['userid']) : '000.000',
		'Q5F1S4'=>($this->getFiled('Q5F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F1S4', $uArray[$i]['userid']) : '000.000',
		'Q5F2'=>($this->getFiled('Q5F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5F2', $uArray[$i]['userid']) : '000.000',
		'Q6F2S1'=>($this->getFiled('Q6F2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S1', $uArray[$i]['userid']) : '000.000',
		'Q6F2S2'=>($this->getFiled('Q6F2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S2', $uArray[$i]['userid']) : '000.000',
		'Q6F2S3'=>($this->getFiled('Q6F2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F2S3', $uArray[$i]['userid']) : '000.000',
		'Q6F3S1'=>($this->getFiled('Q6F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S1', $uArray[$i]['userid']) : '000.000',
		'Q6F3S2'=>($this->getFiled('Q6F3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S2', $uArray[$i]['userid']) : '000.000',
		'Q6F3S3'=>($this->getFiled('Q6F3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F3S3', $uArray[$i]['userid']) : '000.000',
		'Q6F4S1'=>($this->getFiled('Q6F4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S1', $uArray[$i]['userid']) : '000.000',
		'Q6F4S2'=>($this->getFiled('Q6F4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S2', $uArray[$i]['userid']) : '000.000',
		'Q6F4S3'=>($this->getFiled('Q6F4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F4S3', $uArray[$i]['userid']) : '000.000',
		'Q6F5S1'=>($this->getFiled('Q6F5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S1', $uArray[$i]['userid']) : '000.000',
		'Q6F5S2'=>($this->getFiled('Q6F5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S2', $uArray[$i]['userid']) : '000.000',
		
		
		'Q6F5S3'=>($this->getFiled('Q6F5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F5S3', $uArray[$i]['userid']) : '000.000',
		'Q6F6S1'=>($this->getFiled('Q6F6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S1', $uArray[$i]['userid']) : '000.000',
		'Q6F6S2'=>($this->getFiled('Q6F6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S2', $uArray[$i]['userid']) : '000.000',
		'Q6F6S3'=>($this->getFiled('Q6F6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F6S3', $uArray[$i]['userid']) : '000.000',
		
		
		'Q6F7S1'=>($this->getFiled('Q6F7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S1', $uArray[$i]['userid']) : '000.000',
		'Q6F7S2'=>($this->getFiled('Q6F7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S2', $uArray[$i]['userid']) : '000.000',
		'Q6F7S3'=>($this->getFiled('Q6F7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F7S3', $uArray[$i]['userid']) : '000.000',
		
		
		'Q6F8S1'=>($this->getFiled('Q6F8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S1', $uArray[$i]['userid']) : '000.000',
		'Q6F8S2'=>($this->getFiled('Q6F8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S2', $uArray[$i]['userid']) : '000.000',
		'Q6F8S3'=>($this->getFiled('Q6F8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F8S3', $uArray[$i]['userid']) : '000.000',
		
		
		'Q6F9S1'=>($this->getFiled('Q6F9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S1', $uArray[$i]['userid']) : '000.000',
		'Q6F9S2'=>($this->getFiled('Q6F9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S2', $uArray[$i]['userid']) : '000.000',
		'Q6F9S3'=>($this->getFiled('Q6F9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F9S3', $uArray[$i]['userid']) : '000.000',
		
		
		'Q6F10S1'=>($this->getFiled('Q6F10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S1', $uArray[$i]['userid']) : '000.000',
		'Q6F10S2'=>($this->getFiled('Q6F10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S2', $uArray[$i]['userid']) : '000.000',
		'Q6F10S3'=>($this->getFiled('Q6F10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6F10S3', $uArray[$i]['userid']) : '000.000',
		
		
		
		
		'Q7F1'=>($this->getFiled('Q7F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1', $uArray[$i]['userid']) : '000.000',
		'Q7F1S1'=>($this->getFiled('Q7F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S1', $uArray[$i]['userid']) : '000.000',
		'Q7F1S2'=>($this->getFiled('Q7F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S2', $uArray[$i]['userid']) : '000.000',
		'Q7F1S3'=>($this->getFiled('Q7F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S3', $uArray[$i]['userid']) : '000.000',
		'Q7F1S4'=>($this->getFiled('Q7F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S4', $uArray[$i]['userid']) : '000.000',
		'Q7F1S5'=>($this->getFiled('Q7F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F1S5', $uArray[$i]['userid']) : '000.000',
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'Q7F3S1'=>($this->getFiled('Q7F3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7F3S1', $uArray[$i]['userid']) : '000.000',
		
		
		
		
		'Q8F1'=>($this->getFiled('Q8F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1', $uArray[$i]['userid']) : '000.000',
		'Q8F1S1'=>($this->getFiled('Q8F1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S1', $uArray[$i]['userid']) : '000.000',
		'Q8F1S2'=>($this->getFiled('Q8F1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S2', $uArray[$i]['userid']) : '000.000',
		'Q8F1S3'=>($this->getFiled('Q8F1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S3', $uArray[$i]['userid']) : '000.000',
		'Q8F1S4'=>($this->getFiled('Q8F1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S4', $uArray[$i]['userid']) : '000.000',
		'Q8F1S5'=>($this->getFiled('Q8F1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8F1S5', $uArray[$i]['userid']) : '000.000',
		
		
		
		'Q9F1'=>($this->getFiled('Q9F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F1', $uArray[$i]['userid']) : '000.000',
		'Q9F2'=>($this->getFiled('Q9F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9F2', $uArray[$i]['userid']) : '000.000',
		
		
		'Q10F1'=>($this->getFiled('Q10F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F1', $uArray[$i]['userid']) : '000.000',
		'Q10F2'=>($this->getFiled('Q10F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10F2', $uArray[$i]['userid']) : '000.000',
		
		
		'Q11F1'=>($this->getFiled('Q11F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F1', $uArray[$i]['userid']) : '000.000',
		'Q11F2'=>($this->getFiled('Q11F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F2', $uArray[$i]['userid']) : '000.000',
		
		
		'Q11F3'=>($this->getFiled('Q11F3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11F3', $uArray[$i]['userid']) : '000.000',
	/*	'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		
		
		'Q12F1'=>($this->getFiled('Q12F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F1', $uArray[$i]['userid']) : '000.000',
		'Q12F2'=>($this->getFiled('Q12F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12F2', $uArray[$i]['userid']) : '000.000',
		'Q13F1'=>($this->getFiled('Q13F1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F1', $uArray[$i]['userid']) : '000.000',
		'Q13F2'=>($this->getFiled('Q13F2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13F2', $uArray[$i]['userid']) : '000.000',
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'food_points'=>$this->getFoodPoints($uArray[$i]['userid']),
		
	   'Q4L1'=>($this->getFiled('Q4L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L1', $uArray[$i]['userid']) : '000.000',
		'Q4L2'=>($this->getFiled('Q4L2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L2', $uArray[$i]['userid']) : '000.000',
		'Q4L3'=>($this->getFiled('Q4L3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L3', $uArray[$i]['userid']) : '000.000',
		'Q4L4'=>($this->getFiled('Q4L4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L4', $uArray[$i]['userid']) : '000.000',
		'Q4L5'=>($this->getFiled('Q4L5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L5', $uArray[$i]['userid']) : '000.000',
		'Q4L6'=>($this->getFiled('Q4L6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L6', $uArray[$i]['userid']) : '000.000',
		'Q4L7'=>($this->getFiled('Q4L7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L7', $uArray[$i]['userid']) : '000.000',
		'Q4L8'=>($this->getFiled('Q4L8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L8', $uArray[$i]['userid']) : '000.000',
		'Q4L9'=>($this->getFiled('Q4L9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L9', $uArray[$i]['userid']) : '000.000',
		'Q4L10'=>($this->getFiled('Q4L10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L10', $uArray[$i]['userid']) : '000.000',
		'Q4L11'=>($this->getFiled('Q4L11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L11', $uArray[$i]['userid']) : '000.000',
		'Q4L12'=>($this->getFiled('Q4L12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4L12', $uArray[$i]['userid']) : '000.000',
		'Q2V1'=>($this->getFiled('Q2V1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q2V1', $uArray[$i]['userid']) : '000.000',
		'TotalArea'=>$this->getTotalArea($uArray[$i]['userid']),
		
		
		'PercentageArea'=>($this->getPercentageArea($uArray[$i]['userid'])!= '')?$this->getPercentageArea($uArray[$i]['userid']):'000.000',
		
		'Q5L1S3'=>($this->getFiled('Q5L1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S3', $uArray[$i]['userid']) : '000.000',
		'Q5L1S1'=>($this->getFiled('Q5L1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S1', $uArray[$i]['userid']) : '000.000',
		'Q5L1S2'=>($this->getFiled('Q5L1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L1S2', $uArray[$i]['userid']) : '000.000',
		'Q5L2S3'=>($this->getFiled('Q5L2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S3', $uArray[$i]['userid']) : '000.000',
		'Q5L2S2'=>($this->getFiled('Q5L2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S2', $uArray[$i]['userid']) : '000.000',
		'Q5L2S1'=>($this->getFiled('Q5L2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5L2S1', $uArray[$i]['userid']) : '000.000',
		'Q6L1'=>($this->getFiled('Q6L1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6L1', $uArray[$i]['userid']) : '000.000',
		/*'upload'=>($this->getFiled('upload', $uArray[$i]['userid']) != '') ? $this->getFiled('upload', $uArray[$i]['userid']) : 0,*/
		'land_points'=>$this->getLandPoints($uArray[$i]['userid']),
	   
	  'Q4W1'=>($this->getFiled('Q4W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W1', $uArray[$i]['userid']) : '000.000',
		'Q4W2'=>($this->getFiled('Q4W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W2', $uArray[$i]['userid']) : '000.000',
		'Q4W3'=>($this->getFiled('Q4W3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W3', $uArray[$i]['userid']) : '000.000',
		'Q4W4'=>($this->getFiled('Q4W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W4', $uArray[$i]['userid']) : '000.000',
		'Q4W5'=>($this->getFiled('Q4W5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W5', $uArray[$i]['userid']) : '000.000',
		'Q4W6'=>($this->getFiled('Q4W6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W6', $uArray[$i]['userid']) : '000.000',
		'Q4W7'=>($this->getFiled('Q4W7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W7', $uArray[$i]['userid']) : '000.000',
		'Q4W8'=>($this->getFiled('Q4W8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W8', $uArray[$i]['userid']) : '000.000',
		'Q4W9'=>($this->getFiled('Q4W9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W9', $uArray[$i]['userid']) : '000.000',
		'Q4W10'=>($this->getFiled('Q4W10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W10', $uArray[$i]['userid']) : '000.000',
		'Q4W11'=>($this->getFiled('Q4W11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4W11', $uArray[$i]['userid']) : '000.000',
		'Q5W1'=>($this->getFiled('Q5W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W1', $uArray[$i]['userid']) : '000.000',
		'Q5W2'=>($this->getFiled('Q5W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W2', $uArray[$i]['userid']) : '000.000',
		'Q5W3'=>($this->getFiled('Q5W3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W3', $uArray[$i]['userid']) : '000.000',
		'Q5W4'=>($this->getFiled('Q5W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5W4', $uArray[$i]['userid']) : '000.000',
		'Q6W1'=>($this->getFiled('Q6W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W1', $uArray[$i]['userid']) : '000.000',
		'Q6W2'=>($this->getFiled('Q6W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W2', $uArray[$i]['userid']) : '000.000',
		'Q6W3'=>($this->getFiled('Q6W3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W3', $uArray[$i]['userid']) : '000.000',
		'Q6W4'=>($this->getFiled('Q6W4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W4', $uArray[$i]['userid']) : '000.000',
		'Q6W5'=>($this->getFiled('Q6W5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6W5', $uArray[$i]['userid']) : '000.000',
		'Q7W1'=>($this->getFiled('Q7W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W1', $uArray[$i]['userid']) : '000.000',
		'Q7W2'=>($this->getFiled('Q7W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q7W2', $uArray[$i]['userid']) : '000.000',
		'Q8W1S1'=>($this->getFiled('Q8W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S1', $uArray[$i]['userid']) : '000.000',
		'Q8W1S2'=>($this->getFiled('Q8W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S2', $uArray[$i]['userid']) : '000.000',	
		'Q8W1S3'=>($this->getFiled('Q8W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S3', $uArray[$i]['userid']) : '000.000',
		'Q8W1S4'=>($this->getFiled('Q8W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S4', $uArray[$i]['userid']) : '000.000',
		'Q8W1S5'=>($this->getFiled('Q8W1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S5', $uArray[$i]['userid']) : '000.000',
		'Q8W1S6'=>($this->getFiled('Q8W1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S6', $uArray[$i]['userid']) : '000.000',
		'Q8W1S7'=>($this->getFiled('Q8W1S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S7', $uArray[$i]['userid']) : '000.000',
		'Q8W1S8'=>($this->getFiled('Q8W1S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S8', $uArray[$i]['userid']) : '000.000',
		'Q8W1S9'=>($this->getFiled('Q8W1S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S9', $uArray[$i]['userid']) : '000.000',
		'Q8W1S10'=>($this->getFiled('Q8W1S10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S10', $uArray[$i]['userid']) : '000.000',
		'Q8W1S12'=>($this->getFiled('Q8W1S12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S12', $uArray[$i]['userid']) : '000.000',
		'Q8W1S11'=>($this->getFiled('Q8W1S11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W1S11', $uArray[$i]['userid']) : '000.000',
		'Q8W2'=>($this->getFiled('Q8W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2', $uArray[$i]['userid']) : '000.000',
		'Q8W2S1'=>($this->getFiled('Q8W2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S1', $uArray[$i]['userid']) : '000.000',
		'Q8W2S1S1'=>($this->getFiled('Q8W2S1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S1S1', $uArray[$i]['userid']) : '000.000',
		'Q8W2S2S3'=>($this->getFiled('Q8W2S2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S3', $uArray[$i]['userid']) : '000.000',
		'Q8W2S2S4'=>($this->getFiled('Q8W2S2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S4', $uArray[$i]['userid']) : '000.000',
		'Q8W2S2S8'=>($this->getFiled('Q8W2S2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S8', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2'=>($this->getFiled('Q8W2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S1'=>($this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) : '000.000',

		'QSW2S2W1'=>($this->getFiled('QSW2S2W1', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W1', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W2'=>($this->getFiled('QSW2S2W2', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W2', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W3'=>($this->getFiled('QSW2S2W3', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W3', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W4'=>($this->getFiled('QSW2S2W4', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W4', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W5'=>($this->getFiled('QSW2S2W5', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W5', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W6'=>($this->getFiled('QSW2S2W6', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W6', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W7'=>($this->getFiled('QSW2S2W7', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W7', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W8'=>($this->getFiled('QSW2S2W8', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W8', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W9'=>($this->getFiled('QSW2S2W9', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W9', $uArray[$i]['userid']) : '000.000',
		'QSW2S2W10'=>($this->getFiled('QSW2S2W10', $uArray[$i]['userid']) != '') ? $this->getFiled('QSW2S2W10', $uArray[$i]['userid']) : '000.000',
		 
		
		
		'Q8W2S2S14'=>($this->getFiled('Q8W2S2S14', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S14', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S25'=>($this->getFiled('Q8W2S2S25', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S25', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S36'=>($this->getFiled('Q8W2S2S36', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S36', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S47'=>($this->getFiled('Q8W2S2S47', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S47', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S58'=>($this->getFiled('Q8W2S2S58', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S58', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S69'=>($this->getFiled('Q8W2S2S69', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S69', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S723'=>($this->getFiled('Q8W2S2S723', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S723', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S811'=>($this->getFiled('Q8W2S2S811', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S811', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S912'=>($this->getFiled('Q8W2S2S912', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S912', $uArray[$i]['userid']) : '000.000',
		
		
		'Q8W2S2S1013'=>($this->getFiled('Q8W2S2S1013', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S1013', $uArray[$i]['userid']) : '000.000',
		
		
		
		
		
		
		
		'Q8W2S2S2'=>($this->getFiled('Q8W2S2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S2', $uArray[$i]['userid']) : '000.000',
		
		'Q8W2S2S1'=>($this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S1', $uArray[$i]['userid']) : '000.000',
		'Q8W2S2S7'=>($this->getFiled('Q8W2S2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S7', $uArray[$i]['userid']) : '000.000',
			'Q8W2S2S10'=>($this->getFiled('Q8W2S2S10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S2S10', $uArray[$i]['userid']) : '000.000',
		'Q8W2S4'=>($this->getFiled('Q8W2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S4', $uArray[$i]['userid']) : '000.000',
		'Q8W2S31'=>($this->getFiled('Q8W2S31', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S31', $uArray[$i]['userid']) : '000.000',
		'Q8W2S32'=>($this->getFiled('Q8W2S32', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S32', $uArray[$i]['userid']) : '000.000',
		'Q8W2S33'=>($this->getFiled('Q8W2S33', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S33', $uArray[$i]['userid']) : '000.000',
		'Q8W2S34'=>($this->getFiled('Q8W2S34', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S34', $uArray[$i]['userid']) : '000.000',
		'Q8W2S35'=>($this->getFiled('Q8W2S35', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S35', $uArray[$i]['userid']) : '000.000',
		'Q8W2S36'=>($this->getFiled('Q8W2S36', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S36', $uArray[$i]['userid']) : '000.000',
		'Q8W2S37'=>($this->getFiled('Q8W2S37', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S37', $uArray[$i]['userid']) : '000.000',
		'Q8W2S38'=>($this->getFiled('Q8W2S38', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S38', $uArray[$i]['userid']) : '000.000',
		'Q8W2S4S1'=>($this->getFiled('Q8W2S4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S4S1', $uArray[$i]['userid']) : '000.000',
		'Q8W2S4S22'=>($this->getFiled('Q8W2S4S22', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S4S22', $uArray[$i]['userid']) : '000.000',
		'Q8W2S5'=>($this->getFiled('Q8W2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S5', $uArray[$i]['userid']) : '000.000',
		'Q8W2S7'=>($this->getFiled('Q8W2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S7', $uArray[$i]['userid']) : '000.000',
		'Q8W2S61'=>($this->getFiled('Q8W2S61', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S61', $uArray[$i]['userid']) : '000.000',
		'Q8W2S9'=>($this->getFiled('Q8W2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S9', $uArray[$i]['userid']) : '000.000',
		'Q8W2S8'=>($this->getFiled('Q8W2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S8', $uArray[$i]['userid']) : '000.000',
		'Q8W2S10'=>($this->getFiled('Q8W2S10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S10', $uArray[$i]['userid']) : '000.000',
		'Q8W2S12'=>($this->getFiled('Q8W2S12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S12', $uArray[$i]['userid']) : '000.000',
		'Q8W2S13'=>($this->getFiled('Q8W2S13', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S13', $uArray[$i]['userid']) : '000.000',
		
		
		
		'Q8W2S6'=>($this->getFiled('Q8W2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W2S6', $uArray[$i]['userid']) : '000.000',
		'Q8W3S1'=>($this->getFiled('Q8W3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S1', $uArray[$i]['userid']) : '000.000',
		'Q8W3S2'=>($this->getFiled('Q8W3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S2', $uArray[$i]['userid']) : '000.000',
		'Q8W3S3'=>($this->getFiled('Q8W3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S3', $uArray[$i]['userid']) : '000.000',
		'Q8W3S4'=>($this->getFiled('Q8W3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S4', $uArray[$i]['userid']) : '000.000',	
		'Q8W3S5'=>($this->getFiled('Q8W3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S5', $uArray[$i]['userid']) : '000.000',
		'Q8W3S6'=>($this->getFiled('Q8W3S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S6', $uArray[$i]['userid']) : '000.000',
		'Q8W3S7'=>($this->getFiled('Q8W3S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S7', $uArray[$i]['userid']) : '000.000',
		'Q8W3S8'=>($this->getFiled('Q8W3S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8W3S8', $uArray[$i]['userid']) : '000.000',
		'Q9W1'=>($this->getFiled('Q9W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9W1', $uArray[$i]['userid']) : '000.000',
		'Q10W1'=>($this->getFiled('Q10W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10W1', $uArray[$i]['userid']) : '000.000',
		'Q11W1'=>($this->getFiled('Q11W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q11W1', $uArray[$i]['userid']) : '000.000',
		'Q13W1S1'=>($this->getFiled('Q13W1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S1', $uArray[$i]['userid']) : '000.000',
		'Q13W1S2'=>($this->getFiled('Q13W1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S2', $uArray[$i]['userid']) : '000.000',
		'Q13W1S3'=>($this->getFiled('Q13W1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S3', $uArray[$i]['userid']) : '000.000',
		'Q13W1S4'=>($this->getFiled('Q13W1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13W1S4', $uArray[$i]['userid']) : '000.000',
		'Q14W1'=>($this->getFiled('Q14W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14W1', $uArray[$i]['userid']) : '000.000',
		'Q15W1'=>($this->getFiled('Q15W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15W1', $uArray[$i]['userid']) : '000.000',
		'Q16W1'=>($this->getFiled('Q16W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16W1', $uArray[$i]['userid']) : '000.000',
		'Q21W1'=>($this->getFiled('Q21W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q21W1', $uArray[$i]['userid']) : '000.000',
		'Q18W1'=>($this->getFiled('Q18W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18W1', $uArray[$i]['userid']) : '000.000'	,
		'Q18W2'=>($this->getFiled('Q18W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18W2', $uArray[$i]['userid']) : '000.000',
		'Q19W1'=>($this->getFiled('Q19W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W1', $uArray[$i]['userid']) : '000.000',
		'Q19W11'=>($this->getFiled('Q19W11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W11', $uArray[$i]['userid']) : '000.000',
		'Q19W12'=>($this->getFiled('Q19W12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W12', $uArray[$i]['userid']) : '000.000',
		'Q19W13'=>($this->getFiled('Q19W13', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W13', $uArray[$i]['userid']) : '000.000',
		'Q19W131'=>($this->getFiled('Q19W131', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W131', $uArray[$i]['userid']) : '000.000',
		'Q19W132'=>($this->getFiled('Q19W132', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W132', $uArray[$i]['userid']) : '000.000',
		'Q19W14'=>($this->getFiled('Q19W14', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W14', $uArray[$i]['userid']) : '000.000',
		'Q19W15'=>($this->getFiled('Q19W15', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W15', $uArray[$i]['userid']) : '000.000',
		'Q19W16'=>($this->getFiled('Q19W16', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W16', $uArray[$i]['userid']) : '000.000',
		'Q19W161'=>($this->getFiled('Q19W161', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W161', $uArray[$i]['userid']) : '000.000',
		'Q19W162'=>($this->getFiled('Q19W162', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19W162', $uArray[$i]['userid']) : '000.000',
		'Q20W1'=>($this->getFiled('Q20W1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q20W1', $uArray[$i]['userid']) : '000.000',
		'Q20W2'=>($this->getFiled('Q20W2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q20W2', $uArray[$i]['userid']) : '000.000',
		'water_points'=>getWaterPoints($uArray[$i]['userid']),
	  
	  
      'Q4Wa1'=>($this->getFiled('Q4Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa1', $uArray[$i]['userid']) : '000.000',
      'Q4Wa2S1'=>($this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q4Wa2S2'=>($this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q4Wa2S3'=>($this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q4Wa2S4'=>($this->getFiled('Q4Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q4Wa2S5'=>($this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2S5', $uArray[$i]['userid']) : '000.000',
'Q4Wa2'=>($this->getFiled('Q4Wa2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q4Wa2', $uArray[$i]['userid']) : '000.000',
'Q5Wa1S1'=>($this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa1S2'=>($this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa1S3'=>($this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa1S4'=>($this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa1S5'=>($this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa1S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa2S1'=>($this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa2S2'=>($this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa2S3'=>($this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa2S4'=>($this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa2S5'=>($this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa2S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa3S1'=>($this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa3S2'=>($this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa3S3'=>($this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa3S4'=>($this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa3S5'=>($this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa3S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa4S1'=>($this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa4S2'=>($this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa4S3'=>($this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa4S4'=>($this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa4S5'=>($this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa4S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa5S1'=>($this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa5S2'=>($this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa5S3'=>($this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa5S4'=>($this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa5S5'=>($this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa5S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa6S1'=>($this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa6S2'=>($this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa6S3'=>($this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa6S4'=>($this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa6S5'=>($this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa6S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa7S1'=>($this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa7S2'=>($this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa7S3'=>($this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa7S4'=>($this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa7S5'=>($this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa7S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa8S1'=>($this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa8S2'=>($this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa8S3'=>($this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa8S4'=>($this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa8S5'=>($this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa8S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa9S1'=>($this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa9S2'=>($this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa9S3'=>($this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa9S4'=>($this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa9S5'=>($this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa9S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa10S1'=>($this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa10S2'=>($this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa10S3'=>($this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa10S4'=>($this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa10S5'=>($this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa10S5', $uArray[$i]['userid']) : '000.000',
'Q5Wa11S1'=>($this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S1', $uArray[$i]['userid']) : '000.000',
'Q5Wa11S2'=>($this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S2', $uArray[$i]['userid']) : '000.000',
'Q5Wa11S3'=>($this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S3', $uArray[$i]['userid']) : '000.000',
'Q5Wa11S4'=>($this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S4', $uArray[$i]['userid']) : '000.000',
'Q5Wa11S5'=>($this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q5Wa11S5', $uArray[$i]['userid']) : '000.000',
'Q6Wa1S1'=>($this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa1S2'=>($this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa1S3'=>($this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S3', $uArray[$i]['userid']) : '000.000',

'Q6Wa1S4'=>($this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S4', $uArray[$i]['userid']) : '000.000',
'Q6Wa1S5'=>($this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S5', $uArray[$i]['userid']) : '000.000',
'Q6Wa1S6'=>($this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa1S6', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S1'=>($this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S2'=>($this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S3'=>($this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S4'=>($this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S5'=>($this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S5', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S6'=>($this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S6', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S7'=>($this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S7', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S8'=>($this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S8', $uArray[$i]['userid']) : '000.000',
'Q6Wa2S9'=>($this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa2S9', $uArray[$i]['userid']) : '000.000',
'Q6Wa3S1'=>($this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa3S2'=>($this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa3S3'=>($this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S3', $uArray[$i]['userid']) : '000.000',
'Q6Wa3S4'=>($this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa3S4', $uArray[$i]['userid']) : '000.000',
'Q6Wa4S1'=>($this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa4S2'=>($this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa4S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa5S1'=>($this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa5S2'=>($this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa5S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa6S1'=>($this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa6S2'=>($this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa6S2', $uArray[$i]['userid']) : '000.000',
'Q6Wa7S1'=>($this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S1', $uArray[$i]['userid']) : '000.000',
'Q6Wa7S2'=>($this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q6Wa7S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa1'=>($this->getFiled('Q8Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S1'=>($this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S2'=>($this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S3'=>($this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S3', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S4'=>($this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S4', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S5'=>($this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S5', $uArray[$i]['userid']) : '000.000',
'Q8Wa1S6'=>($this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa1S6', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S1'=>($this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S2'=>($this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S3'=>($this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S4'=>($this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S5'=>($this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S5', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S6'=>($this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S6', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S7'=>($this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S7', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S8'=>($this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S8', $uArray[$i]['userid']) : '000.000',
'Q8Wa2S9'=>($this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa2S9', $uArray[$i]['userid']) : '000.000',
'Q8Wa3S1'=>($this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa3S2'=>($this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa3S3'=>($this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S3', $uArray[$i]['userid']) : '000.000',
'Q8Wa3S4'=>($this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa3S4', $uArray[$i]['userid']) : '000.000',
'Q8Wa4S1'=>($this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa4S2'=>($this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa4S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa5S1'=>($this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa5S2'=>($this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa5S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa6S1'=>($this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa6S2'=>($this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa6S2', $uArray[$i]['userid']) : '000.000',
'Q8Wa7S1'=>($this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S1', $uArray[$i]['userid']) : '000.000',
'Q8Wa7S2'=>($this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Wa7S2', $uArray[$i]['userid']) : '000.000',
'Q9Wa1'=>($this->getFiled('Q9Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa1', $uArray[$i]['userid']) : '000.000',
'Q9Wa2S4'=>($this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q9Wa3'=>($this->getFiled('Q9Wa3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa3', $uArray[$i]['userid']) : '000.000',


'Q9Wa2S1'=>$methodology,

'Q9Wa31'=>($this->getFiled('Q9Wa31', $uArray[$i]['userid']) != '') ? $this->getFiled('Q9Wa31', $uArray[$i]['userid']) : '000.000',
'Q9Wa4S1'=>$purpose_of_composite,

'Q10Wa1'=>($this->getFiled('Q10Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q10Wa1', $uArray[$i]['userid']) : '000.000',







'paper_recycling_procedures'=>$paper,
'plastic_recycling_procedures'=>$plastic,
'horticultural_waste_recycling_procedures'=>$horticultural_waste,
'e_waste_recycling_procedures'=>$e_waste,
'hazardous_waste_recycling_procedures'=>$hazardous_waste,
'wood_glass_metal_recycling_procedures'=>$wood_glass_metal,
'biomedical_waste_recycling_procedures'=>$wood_glass_metal,
'others_recycling_procedures'=>$wood_glass_metal,










'Q12Wa1S1'=>($this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa1S2'=>($this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa1S3'=>($this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa1S4'=>($this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa1S4', $uArray[$i]['userid']) : '000.000',



'Q12Wa2S1'=>($this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa2S2'=>($this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa2S3'=>($this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa2S4'=>($this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa3S1'=>($this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa3S2'=>($this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa3S3'=>($this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa3S4'=>($this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa3S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa4S1'=>($this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa4S2'=>($this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa4S3'=>($this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa4S4'=>($this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa4S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa5S1'=>($this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa5S2'=>($this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa5S3'=>($this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa5S4'=>($this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa5S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa6S1'=>($this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa6S2'=>($this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa6S3'=>($this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa6S4'=>($this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa6S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa7S1'=>($this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa7S2'=>($this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa7S3'=>($this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa7S4'=>($this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa7S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa8S1'=>($this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa8S2'=>($this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa8S3'=>($this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa8S4'=>($this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa8S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa9S1'=>($this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa9S2'=>($this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa9S3'=>($this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa9S4'=>($this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa9S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa10S1'=>($this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa10S2'=>($this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa10S3'=>($this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa10S4'=>($this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa10S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa11S1'=>($this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa11S2'=>($this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa11S3'=>($this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa11S4'=>($this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa11S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa12S1'=>($this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa12S2'=>($this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa12S3'=>($this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa12S4'=>($this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa12S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa13S1'=>($this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa13S2'=>($this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa13S3'=>($this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa13S4'=>($this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa13S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa14S1'=>($this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa14S2'=>($this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa14S3'=>($this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa14S4'=>($this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa14S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa15S1'=>($this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa15S2'=>($this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa15S3'=>($this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa15S4'=>($this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa15S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa16S1'=>($this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa16S2'=>($this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa16S3'=>($this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa16S4'=>($this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa16S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa17S1'=>($this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa17S2'=>($this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa17S3'=>($this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa17S4'=>($this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa17S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa18S1'=>($this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa18S2'=>($this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa18S3'=>($this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa18S4'=>($this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa18S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa19S1'=>($this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa19S2'=>($this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa19S3'=>($this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa19S4'=>($this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa19S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa20S1'=>($this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa20S2'=>($this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa20S3'=>($this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa20S4'=>($this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa20S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa21S1'=>($this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa21S2'=>($this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa21S3'=>($this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa21S4'=>($this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa21S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa22S1'=>($this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa22S2'=>($this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa22S3'=>($this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa22S4'=>($this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa22S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa23S1'=>($this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa23S2'=>($this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa23S3'=>($this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa23S4'=>($this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa23S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa24S1'=>($this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa24S2'=>($this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa24S3'=>($this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa24S4'=>($this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa24S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa25S1'=>($this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa25S2'=>($this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa25S3'=>($this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa25S4'=>($this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa25S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa26S1'=>($this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa26S2'=>($this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa26S3'=>($this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa26S4'=>($this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa26S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa27S1'=>($this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa27S2'=>($this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa27S3'=>($this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S3', $uArray[$i]['userid']) : "NA",
'Q12Wa27S4'=>($this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa27S4', $uArray[$i]['userid']) : '000.000',
'Q12Wa28S1'=>($this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S1', $uArray[$i]['userid']) : '000.000',
'Q12Wa28S2'=>($this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S2', $uArray[$i]['userid']) : '000.000',
'Q12Wa28S3'=>($this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S3', $uArray[$i]['userid']) : '000.000',
'Q12Wa28S4'=>($this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q12Wa28S4', $uArray[$i]['userid']) : '000.000',
'Q13Wa1'=>($this->getFiled('Q13Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa1', $uArray[$i]['userid']) : '000.000',
'Q13Wa2'=>($this->getFiled('Q13Wa2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q13Wa2', $uArray[$i]['userid']) : '000.000',
'Q14Wa1'=>($this->getFiled('Q14Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q14Wa1', $uArray[$i]['userid']) : '000.000',
'Q15Wa1'=>($this->getFiled('Q15Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa1', $uArray[$i]['userid']) : '000.000',
'Q15Wa2'=>($this->getFiled('Q15Wa2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2', $uArray[$i]['userid']) : '000.000',
'Q15Wa2S1'=>($this->getFiled('Q15Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q15Wa2S2'=>($this->getFiled('Q15Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q15Wa2S3'=>($this->getFiled('Q15Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q15Wa2S4'=>($this->getFiled('Q15Wa2S4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2S4', $uArray[$i]['userid']) : '000.000',
'Q15Wa2S5'=>($this->getFiled('Q15Wa2S5', $uArray[$i]['userid']) != '') ? $this->getFiled('Q15Wa2S5', $uArray[$i]['userid']) : '000.000',

'Q16Wa1'=>($this->getFiled('Q16Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q16Wa1', $uArray[$i]['userid']) : '000.000',
'Q17Wa1'=>($this->getFiled('Q17Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q17Wa1', $uArray[$i]['userid']) : '000.000',
'Q18Wa1'=>($this->getFiled('Q18Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa1', $uArray[$i]['userid']) : '000.000',
'Q18Wa2S1'=>($this->getFiled('Q18Wa2S1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa2S1', $uArray[$i]['userid']) : '000.000',
'Q18Wa2S2'=>($this->getFiled('Q18Wa2S2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa2S2', $uArray[$i]['userid']) : '000.000',
'Q18Wa2S3'=>($this->getFiled('Q18Wa2S3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q18Wa2S3', $uArray[$i]['userid']) : '000.000',
'Q19Wa1'=>($this->getFiled('Q19Wa1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q19Wa1', $uArray[$i]['userid']) : '000.000',
'waste_points'=>getWastePoints($uArray[$i]['userid']),
/*'Q1Fe1' => ($this->getFiled('Q1Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe1', $uArray[$i]['userid']) : 0,
		'Q1Fe1_A' => '',
		'Q1Fe1_B' => '',
		'Q1Fe2' => ($this->getFiled('Q1Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe2', $uArray[$i]['userid']) : 0,
		'Q1Fe2_A' => '',
		'Q1Fe3' => ($this->getFiled('Q1Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe4' => ($this->getFiled('Q1Fe4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe4', $uArray[$i]['userid']) : 0,
		'Q1Fe4_B' => '',
		'Q1Fe5' => '',
		'content' => ($this->getFiled('Q8Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe1', $uArray[$i]['userid']) : 0,
		'task_distribute' => ($this->getFiled('Q8Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe2', $uArray[$i]['userid']) : 0,
		'question_sequence' => ($this->getFiled('Q8Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe7_A' => ($this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe8' => ($this->getFiled('Q1Fe8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe8', $uArray[$i]['userid']) : 0,
		'Q1Fe9' => ($this->getFiled('Q1Fe9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe9', $uArray[$i]['userid']) : 0,
		'Q1Fe10' => ($this->getFiled('Q1Fe10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe10', $uArray[$i]['userid']) : 0,
		'Q1Fe10_A' => '',
		'Q1Fe11' => ($this->getFiled('Q1Fe11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe11', $uArray[$i]['userid']) : 0,
		'Q1Fe12' => ($this->getFiled('Q1Fe12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe12', $uArray[$i]['userid']) : 0
*/

);
	}
	//echo '<pre>'; print_r($points);
	$this->db->insert_batch('tbl_total',$points,'userid');
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
	    elseif($percentage_of_genrated_waste<50){
	    	$waste_points['Q4_recycled_waste'] = ($total_recycled_waste / $total_generated_waste) * 20;
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
	// echo array_sum($waste_points);
	// echo '<pre>'; print_r($waste_points);
	return number_format(array_sum($waste_points), 2);
	//print_r($waste_points);
    }
    
	



public function perDayEnergy($argUserID) {
	///$argUserID=2429;       
       $per_day_energy='';
      $total_energy_consumtion_mj = (getFiled('Q6E15S2', $argUserID) != '') ? (getFiled('Q6E15S2', $argUserID)) : 0;
        
          $per_day_energy = ($total_energy_consumtion_mj) / 30;
          return $per_day_energy;
          

  }

 
public function perCaptaEnergy($argUserID) {
	///$argUserID=2429;       
         $perCaptaEnergy='';      

        //Total Points
         $total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;

//        //Total Energy Consumption
        $total_energy_consumtion_mj = (getFiled('Q6E15S2', $argUserID) != '') ? (getFiled('Q6E15S2', $argUserID)) : 0;

        if ($total_population == 0) {
            $perCaptaEnergy = 0;
        } else {
            //per day energy
             $per_day_energy = ($total_energy_consumtion_mj) / 30;
            //echo 'Total Population' . $total_population . 'Per_day_energy' . $per_day_energy;
            $megajole_per_cepta_day = $per_day_energy / $total_population;
	      $megajole_per_cepta_day;
            //school type
            $school_type = (getFiled('Q1S1', $argUserID) != '') ? getFiled('Q1S1', $argUserID) : 0;

            //Day Scholar
            if (($school_type == 1) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 2) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Boarding school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 3) && ($megajole_per_cepta_day <= 24.6)) { // condition for Residential school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 4) && ($megajole_per_cepta_day <= 48.0)) { // condition for Day Scholar + Day Boarding school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 5) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Boarding + Residential school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 6) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Scholar + Residential school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            } else if (($school_type == 7) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar + Day Boarding + Residential school.
                $perCaptaEnergy = $megajole_per_cepta_day;
            }
            else{
                $per_day_energy_consumption = '000.000';
            }
            
            // echo "<pre>";
            // print_r($perCaptaEnergy) ;
        }
        // echo "<pre>";
          
          return $perCaptaEnergy;

  }



public function perDayEnergyConsumptionPoint($argUserID) {
	///$argUserID=2429;       
         $per_day_energy_consumption_point='';      

        //Total Points
         $total_population = (getFiled('Q4G4S3', $argUserID) != '') ? getFiled('Q4G4S3', $argUserID) : 0;

//        //Total Energy Consumption
        $total_energy_consumtion_mj = (getFiled('Q6E15S2', $argUserID) != '') ? (getFiled('Q6E15S2', $argUserID)) : 0;

        if ($total_population == 0) {
            $per_day_energy_consumption_point = 0;
        } else {
            //per day energy
             $per_day_energy = ($total_energy_consumtion_mj) / 30;
            //echo 'Total Population' . $total_population . 'Per_day_energy' . $per_day_energy;
            $megajole_per_cepta_day = $per_day_energy / $total_population;
	      $megajole_per_cepta_day;
            //school type
            $school_type = (getFiled('Q1S1', $argUserID) != '') ? getFiled('Q1S1', $argUserID) : 0;

            //Day Scholar
            if (($school_type == 1) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 2) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Boarding school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 3) && ($megajole_per_cepta_day <= 24.6)) { // condition for Residential school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 4) && ($megajole_per_cepta_day <= 48.0)) { // condition for Day Scholar + Day Boarding school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 5) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Boarding + Residential school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 6) && ($megajole_per_cepta_day <= 49.8)) { // condition for Day Scholar + Residential school.
                $per_day_energy_consumption_point = 1;
            } else if (($school_type == 7) && ($megajole_per_cepta_day <= 46.2)) { // condition for Day Scholar + Day Boarding + Residential school.
                $per_day_energy_consumption_point = 1;
            }
            else{
                $per_day_energy_consumption_point = '000.000';
            }
            
            // echo "<pre>";
            // print_r($megajole_per_cepta_day) ;
        }
        // echo "<pre>";
          
          return $per_day_energy_consumption_point;

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
	// echo '<pre>'; print_r($point); exit;
	$energy_points['source_energy']= array_sum($point);
        if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : "") != "") {
            if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "Y") {
                $energy_points['Q6_energy'] = 1;
            } else if (((getFiled('Q9E1', $argUserID) != '') ? (getFiled('Q9E1', $argUserID)) : 0) == "N") {
                $energy_points['Q6_energy'] = 0;
            }
        }
	///echo array_sum($energy_points);

        // New energy_points calculation by jeetu start here
        // Que 9 and 10 calculation here...

       $installed_capacity = (getFiled('Q13E1', $argUserID) != '') ? getFiled('Q13E1', $argUserID) : 0;

       $connected_load = (getFiled('Q14E1', $argUserID) != '') ? getFiled('Q14E1', $argUserID) : 0;      
       if($connected_load>0){
        $total_capacity_load = ($installed_capacity/$connected_load)*100;
         $total_capacity_load = (int)$total_capacity_load;

         if($total_capacity_load>=75){
         	$energy_points['total_capacity_load']=2;
         }
         elseif($total_capacity_load>=50){
         	$energy_points['total_capacity_load']=1.5;
         }
         elseif($total_capacity_load>=25){
         	$energy_points['total_capacity_load']=1;
         }
         elseif($total_capacity_load>1){
         	$energy_points['total_capacity_load']=0.5;
         }
       

    }
    else{
    	$energy_points['total_capacity_load']=0;
    }
      
     // Que 9 and 13 calculation here...
      
        $power_generated = (getFiledNum('Q19E1', $argUserID) != '') ? getFiledNum('Q19E1', $argUserID) : 0;

        

        if($installed_capacity>0){
        $capacity_utilization_factor =  $power_generated/($installed_capacity*24*365)*100; 
        //echo $total_capacity_load = (int)$total_capacity_load;

         if($capacity_utilization_factor>=20){
          	$energy_points['capacity_utilization_factor']=0;
         }
         elseif($capacity_utilization_factor>=15){
          	$energy_points['capacity_utilization_factor']=2;
         }
         elseif($capacity_utilization_factor>=12){
          	$energy_points['capacity_utilization_factor']=1.5;
         }
         elseif($capacity_utilization_factor<12){
         	$energy_points['capacity_utilization_factor']=1;
         }
          

    }
    else{
    	 $energy_points['capacity_utilization_factor']=0;
    }


     // Que 16 and 17 calculation here...

        $invertors_size = (getFiled('Q29E1', $argUserID) != '') ? getFiled('Q29E1', $argUserID) : 0;

        echo $invertors_capacity = (getFiled('Q29E1', $argUserID) != '') ? getFiled('Q29E1', $argUserID) : 0;  

        if(is_numeric($invertors_size)&&$invertors_size>0){

        	 $new_inventors_size=$invertors_size*24*365;

        	 $new_inventors_size = (int)$new_inventors_size;
        	 $invertors_capacity = (int)$invertors_capacity;

        $total_invertors_size = ($invertors_capacity/$new_inventors_size)*100;

         	if($total_invertors_size>=65){
         		$energy_points['total_invertors_size']=2;

         	}
         	elseif($total_invertors_size>=50)
         	{
         		$energy_points['total_invertors_size']=1.5;
         	}
         	elseif($total_invertors_size>=30){
         		$energy_points['total_invertors_size']=1;
         	}
         	elseif($total_invertors_size<30){
         		$energy_points['total_invertors_size']=.5;
         	}
         	
         }
         else{
    	 $energy_points['total_invertors_size']=0;
    }

         $hours_biogas = (getFiled('Q51E1', $argUserID) != '') ? getFiled('Q51E1', $argUserID) : 0;
   
         $hours_other_source = (getFiled('Q53E1', $argUserID) != '') ? getFiled('Q53E1', $argUserID) : 0; 

        if($hours_biogas > $hours_other_source)
        {
        	 $energy_points['hours_other_source']=1;
        }
        else{
        	 $energy_points['hours_other_source']=0;
        }


        // New energy_points calculation by jeetu end here
        
		 // echo '<pre>'; print_r($energy_points);
          return number_format(array_sum($energy_points), 2);
		
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
	if ($drinking_load > 0) {
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
	// echo '<pre>';
	// print_r($water_points);
//	exit;
	return array_sum($water_points);
    }
	
	
	public function getFoodPoints($argUserID) {
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
	return array_sum($food_points);
    }
	
	 public function getTotalArea($argUserID) {
       $a=getFiled('Q4L2', $argUserID); 
       $b=getFiled('Q4L5', $argUserID); 
       $c=getFiled('Q4L6', $argUserID); 
       $d=getFiled('Q4L7', $argUserID); 
       $e=getFiled('Q4L8', $argUserID); 
       $total = $a+$b+$c+$d+$e;
       return $total;
    }



   public function getPercentageArea($argUserID) {
       $total=getTotalArea($argUserID);
       $b=getFiled('Q4L5', $argUserID);
      if($total>0){ 
       $percentage = ($b/$total)*100;
      
       //$terrace=getFiled('Q4L10', $argUserID); 
       //$percentage1 = ($terrace/$total)*100;
      }
    else {
          return 0;
      }
       //echo($percentage+$percentage1);
	   //echo($percentage);
	   return $percentage;
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
                $land_points['Q3_pestiside'] = 1;
            }
        }
        $site=getTotalArea($argUserID);
        $total=getPercentageArea($argUserID); 
        $avaible_green_area = (getFiled('Q4L5', $argUserID) != '') ? getFiled('Q4L5', $argUserID) : "";
       $actual_green_area = ($site*35)/100;
        if($site>0){
        if($total>=35){
           $land_points['total']=5; 
        } else {
             $land_points['total']=($avaible_green_area/$actual_green_area)*5; 
        }
      } else {
           $land_points['total']=0;
      }
        return array_sum($land_points);
		// echo "<pre>";
		// print_r($land_points);
	//	echo $site."<br/>";
		//echo $total."<br/>";
		//echo array_sum($land_points); 
    }
	    
		


/*public function feedback() {
	$data = array();
	$uArray = $this->db->select('*')->from('gsp_school')->get()->result_array();
	for ($i = 0; $i < count($uArray); $i++) {
	    $data[$i] = array(
		'userid' => $uArray[$i]['userid'],
		'Q1Fe1' => ($this->getFiled('Q1Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe1', $uArray[$i]['userid']) : 0,
		'Q1Fe1_A' => '',
		'Q1Fe1_B' => '',
		'Q1Fe2' => ($this->getFiled('Q1Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe2', $uArray[$i]['userid']) : 0,
		'Q1Fe2_A' => '',
		'Q1Fe3' => ($this->getFiled('Q1Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe4' => ($this->getFiled('Q1Fe4', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe4', $uArray[$i]['userid']) : 0,
		'Q1Fe4_B' => '',
		'Q1Fe5' => '',
		'content' => ($this->getFiled('Q8Fe1', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe1', $uArray[$i]['userid']) : 0,
		'task_distribute' => ($this->getFiled('Q8Fe2', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe2', $uArray[$i]['userid']) : 0,
		'question_sequence' => ($this->getFiled('Q8Fe3', $uArray[$i]['userid']) != '') ? $this->getFiled('Q8Fe3', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe7_A' => ($this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7_A', $uArray[$i]['userid']) : 0,
		'Q1Fe7' => ($this->getFiled('Q1Fe7', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe7', $uArray[$i]['userid']) : 0,
		'Q1Fe8' => ($this->getFiled('Q1Fe8', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe8', $uArray[$i]['userid']) : 0,
		'Q1Fe9' => ($this->getFiled('Q1Fe9', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe9', $uArray[$i]['userid']) : 0,
		'Q1Fe10' => ($this->getFiled('Q1Fe10', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe10', $uArray[$i]['userid']) : 0,
		'Q1Fe10_A' => '',
		'Q1Fe11' => ($this->getFiled('Q1Fe11', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe11', $uArray[$i]['userid']) : 0,
		'Q1Fe12' => ($this->getFiled('Q1Fe12', $uArray[$i]['userid']) != '') ? $this->getFiled('Q1Fe12', $uArray[$i]['userid']) : 0
	    );
	}
	$this->db->insert_batch('tbl_feedback', $data);
    }*/
	  public function Air_performance($argUserID) {
	$arrPoints = array();
	$Q3_b_CNG = 0;
	$Q3_b_ELE_BIO = 0;
	$Q3_b_LPG = 0;
	$Q3_b_PETROL = 0;
	$no_of_vehicle = 0;
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
	$total_cng_vehicle = ($this->getFiled('Q6A2S3C5', $argUserID) != '') ? $this->getFiled('Q6A2S3C5', $argUserID) : ""; 
	$total_elec_bio_vehicle = ($this->getFiled('Q6A2S3H5', $argUserID) != '') ? $this->getFiled('Q6A2S3H5', $argUserID) : ""; 
	$total_lpg_vehicle = ($this->getFiled('Q6A2S3L5', $argUserID) != '') ? $this->getFiled('Q6A2S3L5', $argUserID) : "";
	$total_petrol_vehicle = ($this->getFiled('Q6A2S3P5', $argUserID) != '') ? $this->getFiled('Q6A2S3P5', $argUserID) : ""; 
	$total_disel_vehicle = ($this->getFiled('Q6A2S3D5', $argUserID) != '') ? $this->getFiled('Q6A2S3D5', $argUserID) : ""; 
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
	if ($total_petrol_vehicle != '' && $total_petrol_vehicle !=0) {
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
	$A1 = ($this->getFiled('Q7A1S4', $argUserID) != '') ? $this->getFiled('Q7A1S4', $argUserID) : 0;
	$A2 = ($this->getFiled('Q7A2S4', $argUserID) != '') ? $this->getFiled('Q7A2S4', $argUserID) : 0;
	$A3 = ($this->getFiled('Q7A3S4', $argUserID) != '') ? $this->getFiled('Q7A3S4', $argUserID) : 0;
	$A4 = ($this->getFiled('Q7A4S4', $argUserID) != '') ? $this->getFiled('Q7A4S4', $argUserID) : 0;
	$A5 = ($this->getFiled('Q7A5S4', $argUserID) != '') ? $this->getFiled('Q7A5S4', $argUserID) : 0;
	$A6 = ($this->getFiled('Q7A6S4', $argUserID) != '') ? $this->getFiled('Q7A6S4', $argUserID) : 0;
	 $total_population_smv = $A1 + $A2 + $A3 + $A4 + $A5 + $A6 ;  

	//Private Vehicles Points Calculation
	$B1 = ($this->getFiled('Q7A7S4', $argUserID) != '') ? $this->getFiled('Q7A7S4', $argUserID) : 0;
	$B2 = ($this->getFiled('Q7A8S4', $argUserID) != '') ? $this->getFiled('Q7A8S4', $argUserID) : 0;
	  $private_veh_population = $B1 + $B2;

	//Non-Polluting Mode Ponits Calcution
	 $C1 = ($this->getFiled('Q7A9S4', $argUserID) != '') ? $this->getFiled('Q7A9S4', $argUserID) : 0;
	 $C2 = ($this->getFiled('Q7A10S4', $argUserID) != '') ? $this->getFiled('Q7A10S4', $argUserID) : 0;
	 $C3 = ($this->getFiled('Q7A11S4', $argUserID) != '') ? $this->getFiled('Q7A11S4', $argUserID) : 0;
	  $total_population_npm = $C1 + $C2 + $C3 ;

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
	 
} 
