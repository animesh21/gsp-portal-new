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
