<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auditexcel extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->helper('common_helper');
    }

    public function getFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_quiz_answer', array('questionid' => $argWhere, 'user_id' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function getSchoolFiled($argWhere, $argUserID) {
	$test = '';
	$temp = $this->db->get_where('gsp_quiz_answer', array('questionid' => $argWhere, 'user_id' => $argUserID))->row();
	//echo $CI->db->last_query();
	//print_r($temp);
	if (!empty($temp)) {
	    $test = $temp->answer;
	}
	return $test;
    }

    public function auditfeb() {
	
	
	$this->db->select('*');
    $this->db->from('gsp_aduit_home a'); 
    $this->db->join('users b', 'b.id=a.userid');
	// $this->db->join('all_yoy_presentation c', 'c.school_id=a.school_id');
	// $this->db->join('tbl_yoy d', 'd.school_id=a.school_id');
    // $this->db->where('c.audit_year','2019');
    // $this->db->order_by('a.school_id','asc');         
	
	$query = $this->db->get(); 
    // if($query->num_rows() != 0)
    // {
    //     return $query->result_array();
    // }
    // else
    // {
    //     return false;
    // }
	
	$uArray=$query->result_array();

	
	// Table YOY code to get the score of every school
	
	// echo '<pre>'; print_r($uArrayyoy);
	// end;
	


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
		'school_id'=>$uArray[$i]['school_id'],
		'name' => $uArray[$i]['name'],
		'grade' => $uArray[$i]['grade'],
		'gender' => $uArray[$i]['gender'],
		'mobile' => 'mobile',
		'district' => $uArray[$i]['district'],
		'school_name' => $uArray[$i]['school_name'],
		'school_address' => $uArray[$i]['school_address'],
		'pincode' => $uArray[$i]['pincode'],
		'participate' => $uArray[$i]['participate'],
		'Q1A1' => (getFiled('Q1A1', $uArray[$i]['user_id']) != '') ? getFiled('Q1A1', $uArray[$i]['user_id']) : "",
		'Q2A1' => $uArray[$i]['Q2A1'],
		'Q3A1' => $uArray[$i]['Q3A1'],
		'Q4A1' => $uArray[$i]['Q4A1'],
		'Q5A1' => $uArray[$i]['Q5A1'],
		'Q6A1' => $uArray[$i]['Q6A1'],
		'Q7A1' => $uArray[$i]['Q7A1'],
		'Q8A1' => $uArray[$i]['Q8A1'],
		'Q9A1' => $uArray[$i]['Q9A1'],
		'Q10A1' => $uArray[$i]['Q10A1'],
		'Q1WS1' => $uArray[$i]['Q1WS1'],
		'Q2WS1' => $uArray[$i]['Q2WS1'],
		'Q3WS1' => $uArray[$i]['Q3WS1'],
		'Q4WS1' => $uArray[$i]['Q4WS1'],
		'Q5WS1' => $uArray[$i]['Q5WS1'],
		'Q6WS1' => $uArray[$i]['Q6WS1'],
		'Q8WS1' => $uArray[$i]['Q8WS1'],
		'Q7WS1' => $uArray[$i]['Q7WS1'],
		'Q9WS1' => $uArray[$i]['Q9WS1'],
		'Q10WS1' => $uArray[$i]['Q10WS1'],
		'Q1FF1' => $uArray[$i]['Q1FF1'],
		'Q1FF2' => $uArray[$i]['Q1FF2'],
		'Q1FF3' => $uArray[$i]['Q1FF3'],
		'Q1FF4' => $uArray[$i]['Q1FF4'],
		'Q1FF5' => $uArray[$i]['Q1FF5'],
		'Q1FF6' => $uArray[$i]['Q1FF6'],
		);
	}

        //	print_r($data); exit;
        $this->db->insert_batch('tbl_feb', $data);
        echo '<pre>';
        print_r($data);
        echo '<pre>';
    }

    public function table() {
	$this->load->dbforge();
	$key = array(
	    'id', 
		'school_id',/*** General Part Table Start ***/
	    'name',
	    'grade',
	    'gender',
	    'mobile',
	    'district',
	    'school_name',
	    'school_address',
	    'pincode',
	    'participate',
	    'Q1A1',
	    'Q2A1',
	    'Q3A1',
	    'Q4A1',
	    'Q5A1',
	    'Q6A1',
	    'Q7A1',
	    'Q8A1',
	    'Q9A1',
	    'Q10A1',
	    'Q1WS1',
	    'Q2WS1',
	    'Q3WS1',
	    'Q4WS1',
	    'Q5WS1',
	    'Q6WS1',
	    'Q7WS1',
	    'Q8WS1',
	    'Q9WS1',
	    'Q10WS1',
	    'Q1FF1',
	    'Q1FF2',
	    'Q1FF3',
	    'Q1FF4',
	    'Q1FF5',
	    'Q1FF6',
		
		
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
    $this->dbforge->create_table('tbl_feb');
    }

}
