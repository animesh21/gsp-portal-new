<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wastet extends CI_Controller {

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

    public function getSchoolFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_answers', array('questionid' => $argWhere, 'userid' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function schoolprofilegenral() {
	$data = array();
	$query = $this->db->query("SELECT gsp_school.*,gsp_school.id AS school_id FROM `gsp_school` INNER JOIN gsp_aduit_submitted ON gsp_school.userid=gsp_aduit_submitted.userid WHERE gsp_school.progress ='100' && gsp_aduit_submitted.status='1'");
	$uArray=$query->result_array();
	//echo '<pre>'; print_r($uArray);
	
	
	
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
		'shifts' => ($val_shift != '') ? $shifts[$val_shift] : "NA",
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
		'Q1B1' => (getFiled('Q1B1', $uArray[$i]['userid']) != '') ? getFiled('Q1B1', $uArray[$i]['userid']) : "",
		'Q1AP2' => (getFiled('Q1AP2', $uArray[$i]['userid']) != '') ? getFiled('Q1AP2', $uArray[$i]['userid']) : "",
		'Q2AP1' => (getFiled('Q2AP1', $uArray[$i]['userid']) != '') ? getFiled('Q2AP1', $uArray[$i]['userid']) : "",
		'Q3AP1' => (getFiled('Q3AP1', $uArray[$i]['userid']) != '') ? getFiled('Q3AP1', $uArray[$i]['userid']) : "",
		'Q4AP1' => (getFiled('Q4AP1', $uArray[$i]['userid']) != '') ? getFiled('Q4AP1', $uArray[$i]['userid']) : "",
		'Q4AP2' => (getFiled('Q4AP2', $uArray[$i]['userid']) != '') ? getFiled('Q4AP2', $uArray[$i]['userid']) : "",
		'Q4AP3' => (getFiled('Q4AP3', $uArray[$i]['userid']) != '') ? getFiled('Q4AP3', $uArray[$i]['userid']) : "",
		'Q4AP4' => (getFiled('Q4AP4', $uArray[$i]['userid']) != '') ? getFiled('Q4AP4', $uArray[$i]['userid']) : "",
		'Q4AP5' => (getFiled('Q4AP5', $uArray[$i]['userid']) != '') ? getFiled('Q4AP5', $uArray[$i]['userid']) : "",
		'Q4AP6' => (getFiled('Q4AP6', $uArray[$i]['userid']) != '') ? getFiled('Q4AP6', $uArray[$i]['userid']) : "",
		'Q5AP1' => (getFiled('Q5AP1', $uArray[$i]['userid']) != '') ? getFiled('Q5AP1', $uArray[$i]['userid']) : "",
		'Q6AP1' => (getFiled('Q6AP1', $uArray[$i]['userid']) != '') ? getFiled('Q6AP1', $uArray[$i]['userid']) : "",
		'Q7AP1' => (getFiled('Q7AP1', $uArray[$i]['userid']) != '') ? getFiled('Q7AP1', $uArray[$i]['userid']) : "",
		'Q8AP1' => (getFiled('Q8AP1', $uArray[$i]['userid']) != '') ? getFiled('Q8AP1', $uArray[$i]['userid']) : "",
		'Q9AP1' => (getFiled('Q9AP1', $uArray[$i]['userid']) != '') ? getFiled('Q9AP1', $uArray[$i]['userid']) : "",
		'Q10AP1' => (getFiled('Q10AP1', $uArray[$i]['userid']) != '') ? getFiled('Q10AP1', $uArray[$i]['userid']) : "",
		'Q1A1S1' => (getFiled('Q1A1S1', $uArray[$i]['userid']) != '') ? getFiled('Q1A1S1', $uArray[$i]['userid']) : "",
		'Q1A1S3' => (getFiled('Q1A1S3', $uArray[$i]['userid']) != '') ? getFiled('Q1A1S3', $uArray[$i]['userid']) : "",
		'Q1A1S2' => (getFiled('Q1A1S2', $uArray[$i]['userid']) != '') ? getFiled('Q1A1S2', $uArray[$i]['userid']) : "",
		'Q2A1S1' => (getFiled('Q2A1S1', $uArray[$i]['userid']) != '') ? getFiled('Q2A1S1', $uArray[$i]['userid']) : "",
		'Q2A1S3' => (getFiled('Q2A1S3', $uArray[$i]['userid']) != '') ? getFiled('Q2A1S3', $uArray[$i]['userid']) : "",
		'Q2A1S2' => (getFiled('Q2A1S2', $uArray[$i]['userid']) != '') ? getFiled('Q2A1S2', $uArray[$i]['userid']) : "",
		'Q2A2S1' => (getFiled('Q2A2S1', $uArray[$i]['userid']) != '') ? getFiled('Q2A2S1', $uArray[$i]['userid']) : "",
		'Q2A2S3' => (getFiled('Q2A2S3', $uArray[$i]['userid']) != '') ? getFiled('Q2A2S3', $uArray[$i]['userid']) : "",
		'Q2A2S2' => (getFiled('Q2A2S2', $uArray[$i]['userid']) != '') ? getFiled('Q2A2S2', $uArray[$i]['userid']) : "",
		'Q2A3S1' => (getFiled('Q2A3S1', $uArray[$i]['userid']) != '') ? getFiled('Q2A3S1', $uArray[$i]['userid']) : "",
		'Q2A3S3' => (getFiled('Q2A3S3', $uArray[$i]['userid']) != '') ? getFiled('Q2A3S3', $uArray[$i]['userid']) : "",
		'Q2A3S2' => (getFiled('Q2A3S2', $uArray[$i]['userid']) != '') ? getFiled('Q2A3S2', $uArray[$i]['userid']) : "",
		'Q2A4S1' => (getFiled('Q2A4S1', $uArray[$i]['userid']) != '') ? getFiled('Q2A4S1', $uArray[$i]['userid']) : "",
		'Q2A4S3' => (getFiled('Q2A4S3', $uArray[$i]['userid']) != '') ? getFiled('Q2A4S3', $uArray[$i]['userid']) : "",
		'Q2A4S2' => (getFiled('Q2A4S2', $uArray[$i]['userid']) != '') ? getFiled('Q2A4S2', $uArray[$i]['userid']) : "",
		'Q2A5S1' => (getFiled('Q2A5S1', $uArray[$i]['userid']) != '') ? getFiled('Q2A5S1', $uArray[$i]['userid']) : "",
		'Q2A5S3' => (getFiled('Q2A5S3', $uArray[$i]['userid']) != '') ? getFiled('Q2A5S3', $uArray[$i]['userid']) : "",
		'Q2A5S2' => (getFiled('Q2A5S2', $uArray[$i]['userid']) != '') ? getFiled('Q2A5S2', $uArray[$i]['userid']) : "",
		'Q3A1S1' => (getFiled('Q3A1S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A1S1', $uArray[$i]['userid']) : "",
		'Q3A1S2' => (getFiled('Q3A1S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A1S2', $uArray[$i]['userid']) : "",
		'Q3A1S3' => (getFiled('Q3A1S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A1S3', $uArray[$i]['userid']) : "",
		'Q3A2S1' => (getFiled('Q3A2S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A2S1', $uArray[$i]['userid']) : "",
		'Q3A2S2' => (getFiled('Q3A2S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A2S2', $uArray[$i]['userid']) : "",
		'Q3A2S3' => (getFiled('Q3A2S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A2S3', $uArray[$i]['userid']) : "",
		'Q3A3S1' => (getFiled('Q3A3S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A3S1', $uArray[$i]['userid']) : "",
		'Q3A3S2' => (getFiled('Q3A3S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A3S2', $uArray[$i]['userid']) : "",
		'Q3A3S3' => (getFiled('Q3A3S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A3S3', $uArray[$i]['userid']) : "",
		'Q3A4S1' => (getFiled('Q3A4S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A4S1', $uArray[$i]['userid']) : "",
		'Q3A4S2' => (getFiled('Q3A4S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A4S2', $uArray[$i]['userid']) : "",
		'Q3A4S3' => (getFiled('Q3A4S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A4S3', $uArray[$i]['userid']) : "",
		'Q3A5S1' => (getFiled('Q3A5S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A5S1', $uArray[$i]['userid']) : "",
		'Q3A5S2' => (getFiled('Q3A5S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A5S2', $uArray[$i]['userid']) : "",
		'Q3A5S3' => (getFiled('Q3A5S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A5S3', $uArray[$i]['userid']) : "",
		'Q3A6S1' => (getFiled('Q3A6S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A6S1', $uArray[$i]['userid']) : "",
		'Q3A6S2' => (getFiled('Q3A6S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A6S2', $uArray[$i]['userid']) : "",
		'Q3A6S3' => (getFiled('Q3A6S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A6S3', $uArray[$i]['userid']) : "",
		'Q3A7S1' => (getFiled('Q3A7S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A7S1', $uArray[$i]['userid']) : "",
		'Q3A7S2' => (getFiled('Q3A7S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A7S2', $uArray[$i]['userid']) : "",
		'Q3A7S3' => (getFiled('Q3A7S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A7S3', $uArray[$i]['userid']) : "",
		'Q3A8S1' => (getFiled('Q3A8S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A8S1', $uArray[$i]['userid']) : "",
		'Q3A8S2' => (getFiled('Q3A8S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A8S2', $uArray[$i]['userid']) : "",
		'Q3A8S3' => (getFiled('Q3A8S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A8S3', $uArray[$i]['userid']) : "",
		'Q3A9S1' => (getFiled('Q3A9S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A9S1', $uArray[$i]['userid']) : "",
		'Q3A9S2' => (getFiled('Q3A9S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A9S2', $uArray[$i]['userid']) : "",
		'Q3A9S3' => (getFiled('Q3A9S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A9S3', $uArray[$i]['userid']) : "",
		'Q3A10S1' => (getFiled('Q3A10S1', $uArray[$i]['userid']) != '') ? getFiled('Q3A10S1', $uArray[$i]['userid']) : "",
		'Q3A10S2' => (getFiled('Q3A10S2', $uArray[$i]['userid']) != '') ? getFiled('Q3A10S2', $uArray[$i]['userid']) : "",
		'Q3A10S3' => (getFiled('Q3A10S3', $uArray[$i]['userid']) != '') ? getFiled('Q3A10S3', $uArray[$i]['userid']) : "",
		);
	}

        //	print_r($data); exit;
        $this->db->insert_batch('tbl_waste', $data);
        echo '<pre>';
        print_r($data);
        echo '<pre>';
    }

    public function table() {
	$this->load->dbforge();
	$key = array(
	    'id', 
	    'userid',
		'school_id',/*** General Part Table Start ***/
	    'name',
	    'address1',
	    'address2',
	    'country',
	    'state',
	    'district',
	    'city',
	    'pincode',
	    'isd',
	    'std',
	    'landline',
	    'mobile',
	    'principal',
	    'codinator',
	    'codinator_mail',
	    'password',
	    'codinator_mobile',
	    'codinator_mobile',
	    'codinator_mobile',
	    'category',
	    'shifts',
	    'lowest_level',
	    'higest_level',
	    'gender',
	    'educatio_board',
	    'population',
	    'students',
	    'teachers',
	    'nonteachers',
	    'male',
	    'female',
	    'visitor',
	    'working_days',
	    'audit_period',
	    'location',
	    'aid',/*** General Part Table End ***/
		'Q1B1',
		'Q1AP2',
		'Q2AP1',
		'Q3AP1',
		'Q4AP1',
		'Q4AP2',
		'Q4AP3',
		'Q4AP4',
		'Q4AP5',
		'Q4AP6',
		'Q5AP1',
		'Q6AP1',
		'Q7AP1',
		'Q8AP1',
		'Q9AP1',
		'Q10AP1',
		'Q1A1S1',
		'Q1A1S3',
		'Q1A1S2',
		'Q2A1S1',
		'Q2A1S3',
		'Q2A1S2',
		'Q2A2S1',
		'Q2A2S3',
		'Q2A2S2',
		'Q2A3S1',
		'Q2A3S3',
		'Q2A3S2',
		'Q2A4S1',
		'Q2A4S3',
		'Q2A4S2',
		'Q2A5S1',
		'Q2A5S3',
		'Q2A5S2',
		'Q3A1S1',
		'Q3A1S2',
		'Q3A1S3',
		'Q3A2S1',
		'Q3A2S2',
		'Q3A2S3',
		'Q3A3S1',
		'Q3A3S2',
		'Q3A3S3',
		'Q3A4S1',
		'Q3A4S2',
		'Q3A4S3',
		'Q3A5S1',
		'Q3A5S2',
		'Q3A5S3',
		'Q3A6S1',
		'Q3A6S2',
		'Q3A6S3',
		'Q3A7S1',
		'Q3A7S2',
		'Q3A7S3',
		'Q3A8S1',
		'Q3A8S2',
		'Q3A8S3',
		'Q3A9S1',
		'Q3A9S2',
		'Q3A9S3',
		'Q3A10S1',
		'Q3A10S2',
		'Q3A10S3',



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
    $this->dbforge->create_table('tbl_waste');
    }

}
