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
		        ->where("a.make_school_disabled","1")
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
    
    public function getDisabledSchool() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
			->where(array("a.make_school_disabled"=>"0"))
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }	
	
    public function getPartnerData($partner_status) {
	  $this->db->where('a.partner_status',$partner_status);
	  $this->db->where('a.make_school_disabled',"1");  
	  $data=$this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
	                    return $data;				
	}	
	
	
	public function getallPartnerData() {
	   
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
		 $output .= "\n";
		 $output .= '"","","","","","","","","Church of South India","","","","","","","",';
		$output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(1);
		$k = 1;
        foreach ($data as $a) 
		
		
		{
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		 $output .= "\n"; 
		 $output .= "\n";
		 $output .= '"","","","","","","","","Jawahar Navodaya Vidyalaya","","","","","","","",';
		 $output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(2);
		 
		$k = 1;
		
        foreach ($data as $a) {
		    
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		
		
		 $output .= "\n"; 
		 $output .= "\n";
		 $output .= '"","","","","","","","","Kendriya Vidyalaya Sangathan (KVS)","","","","","","","",';
		 $output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(3);
		 
		
		 $k = 1;
        foreach ($data as $a) {
		   
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		$output .= "\n"; 
		 $output .= "\n";
		 $output .= '"","","","","","","","","Montfortian Education Foundation","","","","","","","",';
		 $output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(4);
		 
		$k = 1;
		
        foreach ($data as $a) {
		    
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		
		$output .= "\n"; 
		 $output .= "\n";
		 $output .= '"","","","","","","","","Mount Litera Zee Schools","","","","","","","",';
		 $output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(5);
		 
		$k = 1;
		
        foreach ($data as $a) {
		    
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		$output .= "\n"; 
		 $output .= "\n";
		 $output .= '"","","","","","","","","Satya Bharti Foundation","","","","","","","",';
		 $output .= "\n"; 
		 $output .= "\n";
		
		$data=get_partner(6);
		 
		
		$k = 1;
        foreach ($data as $a) {
		    
            $output .= '"' . $k . '",';
            $output .= '"' . $a->id . '",';
			$output .= '"' . $a->udise . '",';
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
            $output .= '"' . getPasswordBySchoolUserId($a->coemail) . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }
		
		

        return $output;
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

     public function getExcelData_phase1() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where(array('make_school_disabled'=>"1"))
                        ->order_by('a.id', 'desc')
                        ->get()->result();
	     
	 // ->where('a.date_added <', '2017-11-29 00:00:00')    
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
			$output .= '"' . $a->udise . '",';
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
	
	public function disabled_school() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
						->where(array('make_school_disabled'=>"0"))
                        ->order_by('a.id', 'desc')
                        ->get()->result();
	     
	 // ->where('a.date_added <', '2017-11-29 00:00:00')    
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
			$output .= '"' . $a->udise . '",';
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
	
	
	
	
	public function getExcelData_phase2() {
        $output = "";
	
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
			->where('a.complete_status =', '0')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
			$output .= '"' . $a->udise . '",';
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
	
    public function getExcelData_phase2_1() {
        $output = "";
	$this->db->where("a.make_school_disabled","1");    
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
						->where('a.date_added>=', '2018-11-19 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
			$output .= '"' . $a->udise . '",';
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

    public function getExcelDataByProgress_phase1($progress) {
        $output = "";
        $arrRecord =$this->db->select('a.*, b.name AS state_name,c.name As district_name , d.password')
					->from('gsp_school AS a')
					->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->join('gsp_user AS d', 'a.userid=d.id', 'left')
					->where('e.status="1"')
					->where('e.date_on <=', '2017-11-29 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
		/* $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where($progress)
						->where($progress)
						->where('a.date_added <', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
                        ->get()->result(); */
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
            $output .= '"' . $a->udise . '",';
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
	
	/* Generate Excel That started the audit */
	
	public function getExcelDataByProgress2_phase1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('progress >=', 10)
						->where('progress <=', 100)
						->where('a.date_added <=', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
                        ->get()->result(); 
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
            $output .= '"' . $a->udise . '",';
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
	
	/* Excel Audit strated but school did not start */
	public function getExcelDataByProgress5_phase1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('progress >=', 10)
					    ->where('progress <=', 75)
					    ->where('a.date_added <=', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
                        ->get()->result(); 
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
            $output .= '"' . $a->udise . '",';
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
	
	/* Excel Did not complete */
	
	public function getExcelDataByProgress6_phase1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name , d.password')
						->from('gsp_school AS a')
						->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->join('gsp_user AS d', 'a.userid=d.id', 'left')
						->where('progress=5')
						->where('date_added <=', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
						->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
            $output .= '"' . $a->udise . '",';
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
	
	/* 2017 Registration */
	public function getExcelDataByProgress7_phase1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('YEAR(a.date_added)', 2017)
						->where('a.date_added <', '2017-11-29 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
            $output .= '"' . $a->udise . '",';
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

	
	/* Schools Did Not Start The Audit phase2 */
    	
	 public function getExcelDataByProgress_phase6($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
								->from('gsp_school AS a')
								->join('states AS b', 'a.state=b.id', 'left')
								->join('cities AS c', 'a.district=c.id', 'left')
								->join('gsp_user AS d', 'a.userid=d.id', 'left')
								->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
								->where('progress=5')
								->where('a.complete_status =', '0')
								->order_by('a.id', 'desc')
								->get()->result();
	
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"Udise",';
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
	    $output .= '"' . $a->udise . '",';
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

	
	
    public function getExcelDataByProgress_phase2($progress) {
        $output = "";
       /* $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where($progress)
						->where($progress)
						->where('a.complete_status =', '0')
						->order_by('a.id', 'desc')
                        ->get()->result(); */
	    $this->db->where("a.make_school_disabled","1");
	  $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where($progress)
					->order_by('a.id', 'desc')
					->get()->result();    
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
	$output .= '"Udise",';
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
	    $output .= '"' . $a->udise . '",';
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

    public function getExcelDataByProgress1_phase1($progress) {
        $output = "";
        $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
		            ->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
		                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
					->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
					->where('e.date_on <=', '2017-11-29')
					->where('e.status','1')
					->order_by('a.id', 'desc')
					->get()->result();
		
		/* $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
						->join('gsp_aduit_submitted AS e', 'a.userid=e.userid', 'left')
                        ->where($progress)
						->where("e.status='1'")
						->where('a.date_added <', '2017-11-20 00:00:00')
						->order_by('a.id', 'desc')
                        ->get()->result(); */
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

    public function getExcelDataByProgress1_phase2($progress) {
        $output = "";
	    $this->db->where("a.make_school_disabled","1");
      $this->db->where("e.date_on>=","2018-11-19 00:00:00");
      $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
                                ->from('gsp_school AS a')
                                ->join('states AS b', 'a.state=b.id', 'left')
                                ->join('cities AS c', 'a.district=c.id', 'left')
                                 ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                                
                                ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
                                ->where('e.status=','1')
                                ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
	$output .= '"Udise",';
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
	    $output .= '"' . $a->udise . '",';
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

    public function getSchoolByIdRecoad($argID) {
        return $this->db->select('a.*,a.name,b.name AS state_name,c.name AS district')
			->from('gsp_school as a')
			->where('a.id', $argID)
			->join('states AS b', 'a.state=b.id', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
		        ->get()->result();
		//get_where('gsp_school', array('id' => $argID))->row();
    }
   
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
      
	if($state==1 && $school==2)
	{
		  $this->db->where("a.make_school_disabled=","1");
		  $sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
		   	->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
		
           return $sql;	
	}    
      elseif($state != 1 && $school != 2){
        if($school==1){
	 $this->db->where("a.make_school_disabled=","1");	
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
		 $this->db->where("a.make_school_disabled=","1");
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
        
      }elseif ($state == 1 && $school != 2) {
          if($school==1){  
	 $this->db->where("a.make_school_disabled=","1");	  
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
		 $this->db->where("a.make_school_disabled=","1");  
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
            
        }elseif ($state != 1 && $school == 2) {
	    $this->db->where("a.make_school_disabled=","1");   
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
	
	
	
	public function getRegionWiseSchool($region,$school)
	{
	   if($region=='East')
		{
		  $region1=array("36", "26", "16", "1", "5"); //$east_india
		}
		
		if($region=='West')
		{
		  $region1=array("12", "21", "11", "9", "8"); //$west_india
		}
		
		if($region=='North')
		{
		  $region1=array("28", "15", "13", "29", "14", "34", "35", "10", "6"); //$north_india
		}
		
		if($region=='South')
		{
		  $region1=array("2", "17", "18", "31", "32", "19", "27"); //$south_india
		}
		
		if($region=='North East')
		{
		  $region1=array("3", "4", "22", "23", "24", "25", "30", "33"); //$north_east_india
		}
		
		if($region=='Central')
		{
		  $region1=array("7", "20"); //$central_india
		}
		
		if($region=='All')
		{
		  $region1=array("3","36", "26", "16", "1", "5","12", "21", "11", "9", "8","28", "15", "13", "29", "14", "34", "35", "10", "6","2", "17", "18", "31", "32", "19", "27","7", "20","4", "22", "23", "24", "25", "30", "33"); //$all
		}
		
		if($school==0){
		
		$sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
		   	            ->join('cities AS c', 'a.district=c.id', 'left')
						->join('gsp_answers as d', 'a.userid=d.userid', 'left')
						->like('d.questionid','Q1G2')
                        ->where('d.answer <',6)
						->where_in('state',$region1)
                        ->order_by('a.id', 'desc')
						->get()->result();
						//echo $this->db->last_query(); exit;
						return  $sql;
				}
				
		if($school==1){
		
                           $this->db->where('d.answer >=',6);
					      $this->db->where_in('state',$region1);
		                  $sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                            ->from('gsp_school AS a')
                            ->join('states AS b', 'a.state=b.id', 'left')
		   	                ->join('cities AS c', 'a.district=c.id', 'left')
						    ->join('gsp_answers as d', 'a.userid=d.userid', 'left')
						->like('d.questionid','Q1G2')
                        ->order_by('a.id', 'desc')
						->group_by('a.id')
                        ->get()->result();
						
						 /* $regionss = join("','",$region1);
	                    $sql2=$this->db->query("SELECT gsp_school.*, states.name AS state_name,cities.name As district_name FROM `gsp_school` INNER JOIN states ON gsp_school.state=states.id INNER JOIN cities ON gsp_school.district=cities.id WHERE `userid` NOT IN(SELECT userid FROM gsp_answers) AND `state`IN ('$regionss')")->result();  */
						
					        /* $sql3=array_merge($sql1,$sql2);	 */
						
						
						
						return $sql;
						//echo $this->db->last_query(); exit;
				}
		
		if($school==2){
		
		$sql = $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
		   	            ->join('cities AS c', 'a.district=c.id', 'left')
						->where_in('state',$region1)
                        ->order_by('a.id', 'desc')
						->group_by('a.id')
                        ->get()->result();
						return $sql;
						
						//echo $this->db->last_query(); exit;
				}	
	
	}
	
	
	
	
	
	
	
    /*
     * Generate Excel Data
     */

    public function getExcelDataByState($argID) {
        $output = "";
	    $this->db->where("a.make_school_disabled=","1");
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
	$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",'; 
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
	
public function getExcelDataByRegion($argID) {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where_in('a.state', $argID)
			            ->order_by('a.id', 'desc')
                        ->get()->result();
        //echo '<pre>'; print_r($arrRecord); exit;
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
	$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",'; 
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
	$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",'; 
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
	/*School Disabled By Id*/
	
	public function unable_school($argID)
	{
	  $this->db->where('userid', $argID);
	  return $this->db->update("gsp_school",array("make_school_disabled"=>"1"));
	}
	
	
	
	public function disable_school($argID)
	{
	  $this->db->where('userid', $argID);
	  return $this->db->update("gsp_school",array("make_school_disabled"=>"0"));
	}
	/*School Deleted By Id*/
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
	   $date_start=date('Y-m-d');
	   $end_date=date('Y-m-d', strtotime($date_start .'+3 year'));
	    		   $badge_code="
				   <script src='http://www.greenschoolsprogramme.org/audit2017/assets/js/badge-code.js'></script>
				<script>
			/*School Badge Code*/
			window.onload = function(){
			  get_date_difference('".date('m-d-Y',strtotime($end_date))."');
			}
			</script>
			<div class='badges' style='height:200px; height:200px;'></div>";
			$school_record=array("userid"=>$argsUserId,"school_id"=>$get_school_id,"badge_code"=>$badge_code,"date_start"=>$date_start,"end_date"=>$end_date,"year"=>$get_current_year);
				   $result=$this->db->select('*')->from("gsp_badge")->where("school_id=",$get_school_id)->get()->result();
				   if($result):
				   $this->db->update('gsp_badge',$school_record,array('school_id'=>$get_school_id));
				   else:
				   $this->db->insert('gsp_badge',$school_record);
				   endif;
				   echo $this->db->last_query();
}	
        /*Get School Generate Badge Code Now*/
        public function getprintbadgecode($argsUserId){
			$data=$this->db->select("*")->from("gsp_badge")
			     ->where("userid=".$argsUserId)
			     ->get()
				 ->result();
				 return $data;
		} 
	     
		/*Email Filter For Coordinators*/
		public function emailFilter($args)
		{
		  $sql = $this->db->distinct()->select('a.*, b.name AS state_name,c.name As district_name,d.answer AS answer_type')
		  ->from('gsp_school AS a')
		  ->join('states AS b', 'a.state=b.id', 'left')
		  ->join('cities AS c', 'a.district=c.id', 'left')
		  ->join('gsp_answers AS d', 'a.userid=d.userid', 'left')
		  ->where($args)
		  ->order_by('a.id', 'asc')
		  ->get()->result();
		  return $sql;
		} 
	       /*Email Filter For SchoolEmail*/
		public function emailFilter1($args)
		{
		  $sql = $this->db->distinct()->select('a.*, b.name AS state_name,c.name As district_name,d.answer AS answer_type')
		  ->from('gsp_school AS a')
		  ->join('states AS b', 'a.state=b.id', 'left')
		  ->join('cities AS c', 'a.district=c.id', 'left')
		  ->join('gsp_answers AS d', 'a.userid=d.userid', 'left')
		  ->where($args)
		  ->order_by('a.id', 'asc')
		  ->get()->result();
		  return $sql;
		}
	
	/*************************** 2018 **************/
    /*************************** 2018 **************/
	
	public function getExcelallTotalSchool() {
        $output = "";
	$this->db->where("a.make_school_disabled","1");	
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                         ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	
	
	
     public function getExcelTotalSchool() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where('a.date_added >=', '2018-02-21 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	
	public function getExcelStartedTheAudit() {
        $output = "";
	$this->db->where("a.make_school_disabled","1");	
	$this->db->where("a.complete_status","0");	
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                      
		                ->where('a.progress>=', 10)
		                ->where('a.progress<=', 100)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	
	public function getExcelcompletednotsumbitted() {
        $output = "";
	$this->db->where("a.make_school_disabled","1");	
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                       
		                ->where('a.progress', '100')
		                ->where('a.complete_status','0')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	
	public function getExcelsumbittedtheaudit() {
        $output = "";
	$this->db->where("a.make_school_disabled","1");
	$this->db->where('e.date_on <=', '2018-11-18');
	$arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                       ->from('gsp_school AS a')
                       ->join('states AS b', 'a.state=b.id', 'left')
                       ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left');
                        ->where('a.progress', '100')
                        ->where('a.complete_status','1')
                       ->order_by('a.id', 'desc')
                       ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }
	 
    public function getExcelstartedtheauditbutnotcomplete() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                       
		                ->where('progress >','5')
		                ->where('progress <=','75')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    }

	 public function getExcelnotstatedtheaudit() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
		                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                       
		                ->where('progress =','5')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
        
        $k = 1;
        $isdCode = '+91';
        $output .= '"S.No",';
        $output .= '"School ID",';
		$output .= '"UDISE Code",';
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
	    $output .= '"' . $a->udise . '",';
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
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }

        return $output;
    } 
	
	 public function getSchool_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2018-02-21 00:00:00')
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
	  
	    public function getstartedtheaudit_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2018-02-21 00:00:00')
		->where('a.progress>=', 10)
		->where('a.progress<=', 100)
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
	  
	  
	  
       public function getSubmittedTheAudit_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	    ->join('cities AS c', 'a.district=c.id', 'left')
        ->join('gsp_aduit_submitted as d',"a.userid=d.userid")
	    ->where('a.progress', '100')
	    ->where('d.status','1')
        ->order_by('a.id', 'desc')
        ->get()->result();
	 }
	  
	    public function getStartedAuditButDidNotComplete_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2018-02-21 00:00:00')
		->where('progress >','5')
		->where('progress <=','75')
        ->order_by('a.id', 'desc')
        ->get()->result();
		 }
   
     
	   public function getNotStartTheAudit_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2018-02-21 00:00:00')
		->where('progress =','5')
        ->order_by('a.id', 'desc')
        ->get()->result();
	  }	
	  
	    public function getCompletedAuditButNotSubmitted_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	->join('cities AS c', 'a.district=c.id', 'left')
	->join('gsp_aduit_submitted AS d','a.userid=d.userid','left')
    ->where('a.date_added >=', '2018-02-21 00:00:00')	
	->where('a.progress', '100')
	->where('a.complete_status','0')
        ->order_by('a.id', 'desc')
        ->get()->result();
		//echo $this->db->last_query(); exit;
      }
	   
}
