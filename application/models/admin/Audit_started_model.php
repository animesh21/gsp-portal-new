<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * Get School Data
     */

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
    
    public function getPartnerData() {
	  $this->db->where('a.id=2752 OR a.id=2314 OR a.id=4621 OR a.id=4052 OR a.id=4130 OR a.id=2026 OR a.id=2729 OR
                            a.id=3203 OR a.id=4234 OR a.id=2043 OR a.id=4194 OR a.id=4248 OR a.id=4079 OR a.id=2075 OR 
			    a.id=2015 OR a.id=4868 OR a.id=2342 OR a.id=2023 OR a.id=4056 OR a.id=4239 OR a.id=4160 OR 
			    a.id=2494 OR a.id=2831 OR a.id=2044 OR a.id=4193 OR a.id=2229 OR a.id=2311 OR a.id=2329 OR 
			    a.id=4598 OR a.id=4195 OR a.id=2298 OR a.id=4175 OR a.id=4190 OR a.id=2013 OR a.id=4602 OR 
			    a.id=4257 OR a.id=2488 OR a.id=2322 OR a.id=4050 OR a.id=4596 OR a.id=2297 OR a.id=2312 OR
			    a.id=4616 OR a.id=4112 OR a.id=4617 OR a.id=2316 OR a.id=2058 OR a.id=2324 OR a.id=4088 OR
			    a.id=4600 OR a.id=3451 OR a.id=4149 OR a.id=5478 OR a.id=4831 OR a.id=3510 OR a.id=4004 OR 
			    a.id=3485 OR a.id=4077 OR a.id=4089 OR a.id=4875 OR a.id=3978 OR a.id=3473 OR a.id=4086 OR 
			    a.id=3986 OR a.id=5425 OR a.id=4070 OR a.id=3970 OR a.id=4057 OR a.id=4153 OR a.id=4183 OR 
			    a.id=3950 OR a.id=4074 OR a.id=4076 OR a.id=4080 OR a.id=4388 OR a.id=3997 OR a.id=3984 OR 
			    a.id=5309 OR a.id=4101 OR a.id=4833 OR a.id=5387 OR a.id=4899 OR a.id=3429 OR a.id=3361 OR 
			    a.id=3430 OR a.id=4323 OR a.id=5398 OR a.id=5516 OR a.id=5469 OR a.id=3996 OR a.id=5597 OR 
			    a.id=5615 OR a.id=4016 OR a.id=3800 OR a.id=4071 OR a.id=4211 OR a.id=4078 OR a.id=5442 OR 
			    a.id=3952 OR a.id=4008 OR a.id=4095 OR a.id=4108 OR a.id=4109 OR a.id=3981 OR a.id=4673 OR 
			    a.id=3988 OR a.id=4121 OR a.id=4012 OR a.id=4106 OR a.id=5569 OR a.id=5385 OR a.id=3982 OR 
			    a.id=3408 OR a.id=4075 OR a.id=4028 OR a.id=4024 OR a.id=4023 OR a.id=4235 OR a.id=4044 OR 
			    a.id=4110 OR a.id=3513 OR a.id=4241 OR a.id=3490 OR a.id=3471 OR a.id=4990 OR a.id=5427 OR 
			    a.id=4103 OR a.id=4051 OR a.id=4058 OR a.id=4148 OR a.id=4113 OR a.id=3794 OR a.id=4922 OR 
			    a.id=3438 OR a.id=3965 OR a.id=4011 OR a.id=3455 OR a.id=4155 OR a.id=4328 OR a.id=3804 OR 
			    a.id=5370 OR a.id=3448 OR a.id=4735 OR a.id=4042 OR a.id=4002 OR a.id=5452 OR a.id=3355 OR 
			    a.id=4177 OR a.id=4001 OR a.id=3979 OR a.id=4587 OR a.id=5443 OR a.id=3447 OR a.id=4010 OR 
			    a.id=3474 OR a.id=4053 OR a.id=3359 OR a.id=5539 OR a.id=3985 OR a.id=3487 OR a.id=5401 OR 
			    a.id=3786 OR a.id=3469 OR a.id=3466 OR a.id=3437 OR a.id=3519 OR a.id=3435 OR a.id=3789 OR 
			    a.id=3518 OR a.id=3454 OR a.id=4865 OR a.id=3465 OR a.id=3805 OR a.id=3760 OR a.id=3426 OR 
			    a.id=3439 OR a.id=3840 OR a.id=3432 OR a.id=3516 OR a.id=3758 OR a.id=3511 OR a.id=3460 OR
			    a.id=3480 OR a.id=3527 OR a.id=3523 OR a.id=3453 OR a.id=3420 OR a.id=3746 OR a.id=3423 OR 
			    a.id=3850 OR a.id=3419 OR a.id=3517 OR a.id=3441 OR a.id=3457 OR a.id=3524 OR a.id=3492 OR
			    a.id=3489 OR a.id=3479 OR a.id=3525 OR a.id=3491 OR a.id=3481 OR a.id=3443 OR a.id=4059 OR 
			    a.id=3442 OR a.id=3971 OR a.id=3822 OR a.id=3488 OR a.id=3790 OR a.id=3476 OR a.id=2665 OR 
			    a.id=3980 OR a.id=3825 OR a.id=3751 OR a.id=3820 OR a.id=4349 OR a.id=3846 OR a.id=3509 OR 
			    a.id=3456 OR a.id=3808 OR a.id=3515 OR a.id=3458 OR a.id=3977 OR a.id=3989 OR a.id=4840 OR 
			    a.id=4191 OR a.id=3434 OR a.id=5558 OR a.id=4333 OR a.id=4350 OR a.id=5614 OR a.id=5630 OR 
			    a.id=4068 OR a.id=4007');
	  $data=$this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
	 return $data;				
	}	
	
	
    public function row_delete($id){
    $user_id=$this->db->select('a.userid')
                       ->from('gsp_school AS a')
                       ->where('id',$id)
                       ->get()->result(); 
    //  print_r ($user_id[0]->userid);       die();
    $this->db->where('userid', $user_id[0]->userid);
    $this->db->delete('gsp_school');
    $this->db->where('id', $user_id[0]->userid);
    $this->db->delete('gsp_user');
    
    }


    /*
     * Get User By Id
     */
    public function getUserById($argID)
    {
        return $this->db->get_where('gsp_user', array('id'=>$argID))->row();
    }

    /*
     * Generate Excel Data
     */

    public function getExcelData() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	
    /*
     * Generate Excel Data
     */

    public function getExcelDataByProgress($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where($progress)
						->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }

    /*
     * Generate Excel Data
     */

    public function getExcelDataByProgress1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
						->join('gsp_aduit_submitted AS e', 'a.userid=e.userid', 'left')
                        ->where($progress)
						->where("e.status='1'")
						->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }

    	
	

    /*
     * Get School By Id
     */

    public function getSchoolById($argID) {
        return $this->db->get_where('gsp_school', array('id' => $argID))->row();
    }

    /*
     * Get Data By State
     */

    public function getDataSearch($argID) {
        return $this->db->select('a.*, b.name AS state_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->where('a.state', $argID)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
    
  
    
    
    public function getStateWiseSchool($state,$school) {
       // $sql="SELECT * FROM `gsp_school` WHERE `userid` IN ?";
       //SELECT a.userid,a.name,a.principle_name,s.name,a.id FROM states AS s,gsp_school AS a INNER JOIN gsp_answers as b on a.userid=b.userid WHERE b.questionid='Q1G2' AND b.answer>5 AND s.id= a.state;
      
	if($state==0 && $school==2)
	{
		
		  $sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
		   	->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
		
           return $sql;	
	}    
      elseif($state != 0 && $school != 2){
        if($school==1){  
        $sql= $this->db->select('a.*,s.name as state_name,c.name As district_name')
                       ->from('gsp_school AS a')
                        ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('states AS s','a.state=s.id')
                        ->where('b.questionid','Q1G2')
                        ->where('b.answer >=',6)
                        ->where('a.state',$state)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo $sql->num_rows();die;
        return $sql;
            
        }elseif ($school==0) {
                $sql= $this->db->select('a.*,s.name as state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('states AS s','a.state=s.id')
                        ->where('b.questionid','Q1G2')
                        ->where('b.answer <',6)
                        ->where('a.state',$state)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
                return $sql;
                
            }
        
      }elseif ($state == 0 && $school != 2) {
          if($school==1){  
        $sql= $this->db->select('a.*,s.name as state_name,c.name As district_name')
                        ->from('states AS s')
                        ->from('gsp_school AS a')
                        ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
			->where('b.questionid','Q1G2')
                        ->where('b.answer >=',6)
                        ->where('s.id= a.state')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
         
            return $sql;
            
        }elseif ($school==0) {
                $sql= $this->db->select('a.*,s.name as state_name,c.name As district_name')
                        ->from('states AS s')
                        ->from('gsp_school AS a')
                        ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
                        ->where('b.questionid','Q1G2')
                        ->where('b.answer <',6)
                        ->where('s.id= a.state')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
                
                return $sql;
                
            }
            
        }elseif ($state != 0 && $school == 2) {
           $sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
		   	->join('cities AS c', 'a.district=c.id', 'left')
                        ->where('a.state', $state)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
          
           return $sql;
        }
        
	
        
    }
    /*
     * Generate Excel Data
     */

    public function getExcelDataByState($argID) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('a.state', $argID)
			
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	

public function getExcel2017Data() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
			->where('YEAR(a.date_added)', 2017)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
        $output .= '"School Name",';
        $output .= '"Address1",';
        $output .= '"Address2",';
        $output .= '"Country",';
        $output .= '"State",';
        $output .= '"District",';
        $output .= '"City",';
        $output .= '"Pincode",';
        $output .= '"ISD Code",';
        $output .= '"STD Code",';
        $output .= '"Landline Number",';
        $output .= '"School Email",';
        $output .= '"Principal Name",';
        $output .= '"Principal Mobile",';
        $output .= '"Coordinator Name",';
        $output .= '"Coordinator Email",';
        $output .= '"Coordinator Mobile",';
        $output .= '"Password",';
        $output .= '"Date & Time",';
        $output .= '"Completeness",';
        $output .= "\n";
        foreach ($arrRecord as $a) {
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
            $output .= '"' . $a->name . '",';
            $output .= '"' . $a->address1 . '",';
            $output .= '"' . $a->address2 . '",';
            $output .= '"' . $a->country . '",';
            $output .= '"' . $a->state_name . '",';
            $output .= '"' . $a->district_name . '",';
            $output .= '"' . $a->city . '",';
            $output .= '"' . $a->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $a->std . '",';
            $output .= '"' . $a->telephone . '",';
            $output .= '"' . $a->schoolemail . '",';
            $output .= '"' . $a->principle_name . '",';
            $output .= '"' . $a->mobile . '",';
            $output .= '"' . $a->coname . '",';
            $output .= '"' . $a->coemail . '",';
            $output .= '"' . $a->comobile . '",';
            $output .= '"' . $a->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
        return $output;
    }	
	

	/*
     * Get COrdinator mail
     */
    public function getCordinatorsEmail()
    {
        return $this->db->get('gsp_school')->result();
    }
     
    public function getCorEmail()
    {
        return $this->db->get('mail')->result();
    }
	
    /*School Image Zip Download Now*/
	public function getZipImagesOfSchool($argsUserId)
	{
	   $data=$this->db->select("*")
	   ->from("files")
	   ->where("userid=".$argsUserId)
	   ->get()
	   ->result();
	   return $data;
	}
	
	public function school_delete($argID)
	{
	$this->db->where('userid', $argID);
	if($this->db->delete('gsp_school'))
	{
		$this->db->where('id', $argID);
		$this->db->delete('gsp_user');
	}
	return true;	
	
	   
}
	/*School Generate Badge Now*/
	public function getgeneratebadge($argsUserId)
	{
	   $get_current_year=date('Y');
	   $data=$this->db->select("id,date_added")->from('gsp_school')->where("userid=".$argsUserId)->get()->result();
	   $get_school_id=$data[0]->id;
	   $date_start=date('d-m-Y',strtotime($data[0]->date_added));
	   $end_date=date('Y-m-d', strtotime($date_start .'+1 day'));
	   $result=$this->db->select("*")->from('gsp_school')->where("userid=".$argsUserId)->where("id=".$get_school_id)
	               ->get()->result();
				   $badge_code="<script>
			/*School Badge Code*/
			function get_badge_code(){
			var date1 = new Date();
			var date2 = new Date('".date('m-d-Y', strtotime($end_date))."');
			var timeDiff = Math.abs(date2.getTime() - date1.getTime());
			var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
			if(diffDays > 0){
			 $('.badge').append('<img src=http://localhost/gsp/assets/img/logo.png />');
			}
			}
			window.onload = function(){
			  get_badge_code();
			};
			</script>
			<div class='badge' style='height:200px; height:200px;'></div>";
				   $shool_record=array("userid"=>$argsUserId,"school_id"=>$get_school_id,"badge_code"=>$badge_code,"date_start"=>$date_start,"end_date"=>$end_date,"year"=>$get_current_year);
				   $this->db->insert('gsp_badge',$shool_record);
}	
        /*Get School Generate Badge Code Now*/
        public function getprintbadgecode($argsUserId){
			$data=$this->db->select("*")->from("gsp_badge")
			     ->where("userid=".$argsUserId)
			     ->get()
				 ->result();
				 return $data;
		} 
	   
}
