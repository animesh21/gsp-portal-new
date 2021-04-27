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
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.password AS user_password,e.region AS region')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id','left')
                        ->join('region AS e', 'a.id=e.schoolid','left')
                        ->where("a.make_school_disabled","1")
                        ->where("a.kvs_school_status",NULL)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }

    public function getDatawt() {
      return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                      ->from('gsp_school AS a')
                      ->join('states AS b', 'a.state=b.id', 'left')
                      ->join('cities AS c', 'a.district=c.id', 'left')
                      ->where("a.make_school_disabled","1")
                      ->where("a.complete_status","1")
                      ->where("a.kvs_school_status",NULL)
                      ->order_by('a.id', 'desc')
                      ->get()->result();
  }

     public function kvs_school_list() {
        return  $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                ->where("a.kvs_school_status","2")
		->where("a.make_school_disabled","1")
                        ->order_by('a.id', 'desc')
                        ->get()->result();
                        // echo $this->db->last_query();
    }
    
    public function getDisabledSchool() {
        //$this->db->where("a.date_added <=","2019-11-10 00:00:00");
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
    
    
     public function getParterSubpartnerData($satya_foundation_status){        
         
        $this->db->where('a.satya_foundation_status', $satya_foundation_status);
        $this->db->where('a.make_school_disabled','1');
        $data=$this->db->select('a.*, b.name AS state_name,c.name AS district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
                       // echo $this->db->last_query();
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
    
     $output .= "\n"; 
         $output .= "\n";
         $output .= '"","","","","","","","","Satya Bharti School","","","","","","","",';
         $output .= "\n"; 
         $output .= "\n";
        
        $data=get_partner_subpartner(7);
         
        
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
         $output .= '"","","","","","","","","BF Quality Support Programme","","","","","","","",';
         $output .= "\n"; 
         $output .= "\n";
        
        $data=get_partner_subpartner(8);
         
        
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
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password,e.region')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->join('region AS e', 'a.id = e.schoolid','left')
                        ->where(array('make_school_disabled'=>"1"))
		                    ->where("a.kvs_school_status",NULL)
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
        $output .= '"Regions",';
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
            $output .= '"' . $a->region .'",';
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
    
   
      public function excel_kvs_school_list() {
        $output = "";
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where("a.kvs_school_status","2")
			->where("a.make_school_disabled","1")
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
        $this->db->where("a.date_added <=","2019-11-10 00:00:00");
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
        
         $r=$this->db->select('school_id')
                        ->from('gsp_aduit_submitted')
                       // ->where('date_on >', '2019-11-12 00:00:00')
                        ->get()->result();
             //print_r($r); exit;

                   $er=array();
                        foreach($r as $t)
                        {
                         $er[]= $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                            ->from('gsp_school AS a')
                            ->join('states AS b', 'a.state=b.id', 'left')
                            ->join('cities AS c', 'a.district=c.id', 'left')
                            ->where('a.id', $t->school_id)
                            ->order_by('a.id', 'desc')
                            ->get()->result();

                            //echo $this->db->last_query(); exit;

                        }
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
        
        
        foreach ($er as $e) {
            $output .= '"' . $k . '",';
            $output .= '"' . $e[0]->id . '",';
            $output .= '"' . $e[0]->udise . '",';
            $output .= '"' . $e[0]->name . '",';
            $output .= '"' . $e[0]->address1 . '",';
            $output .= '"' . $e[0]->address2 . '",';
            $output .= '"' . $e[0]->country . '",';
            $output .= '"' . $e[0]->state_name . '",';
            $output .= '"' . $e[0]->district_name . '",';
            $output .= '"' . $e[0]->city . '",';
            $output .= '"' . $e[0]->pincode . '",';
            $output .= '"' . $isdCode . '",';
            $output .= '"' . $e[0]->std . '",';
            $output .= '"' . $e[0]->telephone . '",';
            $output .= '"' . $e[0]->schoolemail . '",';
            $output .= '"' . $e[0]->principle_name . '",';
            $output .= '"' . $e[0]->mobile . '",';
            $output .= '"' . $e[0]->coname . '",';
            $output .= '"' . $e[0]->coemail . '",';
            $output .= '"' . $e[0]->comobile . '",';
            $output .= '"' . $e[0]->password . '",';
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($e[0]->date_added)) . '",';
            $output .= '"' . $e[0]->progress . '%",';
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
                        ->where('a.date_added>=', '2019-11-12 00:00:00')
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
    $this->db->where('a.date_added >=', '2019-11-12 00:00:00');
        $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
        ->join('cities AS c', 'a.district=c.id', 'left')
        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
        ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
        ->where($progress)
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
//         $this->db->where('a.date_added >=', '2019-11-12 00:00:00');
        $this->db->where("a.make_school_disabled","1");
      $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.password')
                    ->from('gsp_school AS a')
                    ->join('states AS b', 'a.state=b.id', 'left')
                    ->join('cities AS c', 'a.district=c.id', 'left')
                    ->join('gsp_user AS d', 'a.userid=d.id')
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
//      $this->db->where("a.make_school_disabled","1");
      $this->db->where("e.date_on>=","2019-11-12 00:00:00");
      $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
                                ->from('gsp_school AS a')
                                ->join('states AS b', 'a.state=b.id', 'left')
                                ->join('cities AS c', 'a.district=c.id', 'left')
                                 ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                                
                                ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
                                ->where('e.status=','1')
                                ->group_by('a.id')
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
		  ->where('a.state',$state)
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
                        
                            /* $sql3=array_merge($sql1,$sql2);   */
                        
                        
                        
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

    public function disable_schoolapp($argID)
    {
      $this->db->where('id', $argID);
      return $this->db->update("gsp_school",array("make_school_disabled"=>"0"));
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
       $end_date=date('Y-m-d', strtotime($date_start .'+2 year'));
                   $badge_code="
                   <script src='http://www.greenschoolsprogramme.org/audit/18/assets/js/badge-code.js'></script>
                <script>
            /*School Badge Code*/
            window.onload = function(){
              get_date_difference('".date('m-d-Y',strtotime($end_date))."');
            }
            </script>
            <div class='badges' style='height:200px; width:200px;'></div>";
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
    //$this->db->where("a.date_added <=","2019-11-11 00:00:00");
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
                        ->where('a.date_added >=', '2019-03-01 00:00:00')
            ->where("a.date_added <=","2019-11-10 00:00:00")
                        ->order_by('a.id', 'desc')
                ->where("a.make_school_disabled","1")
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
                            ->where("a.date_added <=","2019-11-10 00:00:00")
                        ->where('a.progress_phase_1>=', 10)
                        ->where('a.progress_phase_1<=', 100)
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
                        //->join('gsp_aduit_submitted AS d','a.userid=d.userid','left') 
                        //->where('a.progress_phase_1', '100')
                        ->where('a.phase1','1')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
		
		
		
		
		
		
		
//                         ->join('states AS b', 'a.state=b.id', 'left')
//                         ->join('cities AS c', 'a.district=c.id', 'left')
//                         ->join('gsp_user AS d', 'a.userid=d.id', 'left')
//                             ->where("a.date_added <=","2019-11-10 00:00:00")
//                         ->where('a.progress_phase_1', '100')
//                         ->where('a.complete_status','0')
//                         ->order_by('a.id', 'desc')
//                         ->get()->result();
        
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
    $this->db->where("e.date_on >=","2019-04-27 08:50:40");
        $this->db->where("e.date_on <=","2019-11-12 00:00:00");
    $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password, e.date_on')
                       ->from('gsp_school AS a')
                       ->join('states AS b', 'a.state=b.id', 'left')
                       ->join('cities AS c', 'a.district=c.id', 'left')
                       ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                       ->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
                       ->where('a.progress_phase_1', '100')                       
                       ->where('a.complete_status','1')
                       ->where('a.make_school_disabled',1)
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
        $output .= '"School Staus",';
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
            if($a->make_school_disabled=='1')
            {
                $output .= '"Yes",';
            }
            else{
                $output .= '"No",';
            }

            $output .= "\n";
            $k++;
        }

        return $output;
    }
     
    public function getExcelstartedtheauditbutnotcomplete() {
        $output = "";
        $this->db->where("a.date_added <=","2019-11-10 00:00:00");
        $this->db->where("a.make_school_disabled","1");
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                ->join('gsp_user AS d', 'a.userid=d.id', 'left')                            
                ->where('progress_phase_1 >','5')
                ->where('progress_phase_1 <=','75')
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
     $this->db->where("a.date_added <=","2019-11-10 00:00:00");
     $this->db->where("a.make_school_disabled","1");
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                ->join('gsp_user AS d', 'a.userid=d.id', 'left')                       
                ->where('progress_phase_1 =','5')
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
            $this->db->where("a.make_school_disabled","1");
            $this->db->where("a.complete_status",'0');
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
           $this->db->where("a.make_school_disabled","1");  
        $this->db->where('d.date_on <=', '2018-11-19');
        $this->db->where('d.date_on >=', '2018-02-21');
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
            $this->db->where("a.make_school_disabled","1");
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
           $this->db->where("a.make_school_disabled","1");
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
            $this->db->where("a.make_school_disabled","1");
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
    
    
    public function school_excel_yoyrepresentation($userid) {
        $output = "";
        $arrRecord = $this->db->select('*')
                        ->from('all_yoy_presentation')
                        ->where('school_id',$userid)
                        ->order_by('id', 'asc')
                        ->get()->result();                        
                      
     

        
        $output .= '"Year",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->audit_year . '",';                         
        }      

        $output .= "\n";
        $output .= '"School Id",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_id . '",';                         
        }      

        $output .= "\n";
        $output .= '"Name of the School/Institution",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->name_of_the_school_institution . '",';            
           
        }      

        $output .= "\n";
        $output .= '"Address Line 1",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->address_line_1 . '",';
                       
        }      

        $output .= "\n";
        $output .= '"Address Line 2",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->address_line_2 . '",';                       
        }
       
        $output .= "\n";
        $output .= '"State",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->state . '",';                        
        }
      

        $output .= "\n";
        $output .= '"District",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->district . '",';
                        
        }
      

        $output .= "\n";
        $output .= '"City",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->city . '",';
                        
        }
      

        $output .= "\n";
        $output .= '"Pin code",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pin_code . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"STD Code",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->std_code . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Landline No.",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->landline_no . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Principal Name",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->principals_name . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Principal Mobile",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->principal_mobile . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"GSP Coordintor Name",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->gsp_coordintor_name . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"GSP Coordintor Email",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->gsp_coordintor_email . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"GSP Coordintor Mobile",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->gsp_coordintor_mobile . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"School Category",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_category . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Shifts",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_shifts . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Lowest Level",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->lowest_level . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Highest Level",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->highest_level . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"School type - Gender",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_type___gender . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Board of Education",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->board_of_education . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Total Population",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_population . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Students",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->students . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Teachers",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->teachers . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Non-Teaching Staff",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->non_teaching_staff . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Male",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->male . '",';           
            
        }
      

        $output .= "\n";
        $output .= '"Female",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->female . '",';            
            
        }
      


        $output .= "\n";
        $output .= '"No.of Classrooms",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_classrooms . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Window-floor Ratio(%)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->window_floor_ratio . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"Ownership of Vehicles",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->ownership_of_vehicles . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Vehicles",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_vehicles . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Vehicles more than eight years old",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_vehicles_more_than_eight_years_old . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Vehicles with Air conditioner",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_vehicles_with_air_conditioner . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Vehicles with PUC certificate",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_vehicles_with_puc_certificate . '",';            
            
        }
      

        $output .= "\n";
        $output .= '"No.of Vehicles with Authorised parking available",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_vehicles_with_authorised_parking_available . '",';            
            
        }


        $output .= "\n";
        $output .= '"Annual Road worthiness certificate",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->annual_road_worthiness_certificate . '",';            
            
        }

        $output .= "\n";
        $output .= '"No. of Others Bio fuel",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_others_bio_fuel . '",';            
            
        }


        $output .= "\n";
        $output .= '"Subtotal Diesel",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_diesel . '",';            
            
        }
      

      $output .= "\n";      
      $output .= '"Subtotal Petrol",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_petrol . '",';            
            
        }

      $output .= "\n";      
      $output .= '"Subtotal LPG",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_lpg . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Subtotal CNG",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_cng . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Subtotal Hybrid",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_hybrid . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Subtotal Electric",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_electric . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Subtotal Bio Fuel",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->subtotal_bio_fuel . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Sustainble Motorised Vehicles: Numbers",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sustainble_motorised_vehicles_numbers . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Sustainble Motorised Vehicles: Percentgae",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sustainble_motorised_vehicles_percentgae . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Non Polluting Transport: Numbers",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->non_polluting_transport_numbers . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Non Polluting Transport: Percentage",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->non_polluting_transport_percentage . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of students suffer from respiratory problems",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_students_suffer_from_respiratory_problems . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Percentage of students suffer from respiratory",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->percentage_of_students_suffer_from_respiratory . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Air Quality Monitoring in School",';  
      foreach ($arrRecord as $a) {

          $rrrr =  $a->air_quality_monitoring_in_school;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
            
            
        }      
         
      
      $output .= "\n";
      $output .= '"Air Quality Monitoring in close to school",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->air_quality_monitoring_in_close_to_school . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"School has its own vehicle",'; 
      foreach ($arrRecord as $a) {

          $rrrr =  $a->school_has_its_own_vehicle;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){
            
            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
            
            
        }       
        
      
      $output .= "\n";
      $output .= '"Electricity from the board (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->electricity_from_the_board_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Electricity from generator (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->electricity_from_generator_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Petrol (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->petrol_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Diesel (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->diesel_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"CNG (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->cng_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Kerosene (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->kerosene_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Coal (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->coal_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Wood (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->wood_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Animal waste (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->animal_waste_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Solar (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->solar_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Wind (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->wind_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"LPG (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->lpg_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Piped Natural Gas (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->piped_natural_gas_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Biogas (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->biogas_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Others (MJ)",';        
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->others_mj . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Total MJ",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_mj . '",';            
            
        }

      $output .= "\n";
      $output .= '"Per capita Energy Consumption",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->per_capita_energy_consumption . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of Air conditioner",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_air_conditioner . '",';            
            
        }      

      $output .= "\n";
      $output .= '"BEE Star rating Air conditioner",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->bee_star_rating_air_conditioner . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of Refrigerator",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_refrigerator . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of Microwave",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_microwave . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of Tubelight",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_tubelight . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of CFL bulb",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_cfl_bulb . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of LED bulb",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_led_bulb . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"No.of Fans",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_fans . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Alternate source of energy",';  

      foreach ($arrRecord as $a) {

          $rrrr =  $a->alternate_source_of_energy;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
            
            
        }     
        
      
      $output .= "\n";
      $output .= '"Solar",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->solar . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Wind",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->wind . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Hydro",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->hydro . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Biogas Plant",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->biogas_plant . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Combination of solar and wind",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->combination_of_solar_and_wind . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Use of Solar water heater",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->use_of_solar_water_heater . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Provision of packaged food",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->provision_of_packaged_food . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Serve Mid-day Meal",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->serve_mid_day_meal . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Students bring own lunch",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->students_bring_own_lunch . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"How many students bring home-made lunch",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_many_students_bring_home_made_lunch . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"how many bring packaged food as home-made lunch",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_many_bring_packaged_food_as_home_made_lunch . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Teachers have responsibility to check",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->teachers_have_responsibility_to_check . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Savouary Snacks count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->savouary_snacks_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Savouary Snacks no.of item sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->savouary_snacks_no_of_item_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_1 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Instand Noodles count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->instand_noodles_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Instand Noodles no.of item sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->instand_noodles_no_of_item_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_2 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Potato Fries Count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->potato_fries_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Potato Fries no.of item sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->potato_fries_no_of_item_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_3 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Confectionary - count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->confectionary_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Confectionary no.of item sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->confectionary_no_of_item_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_4 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Ice Cream count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->ice_cream_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Ice Cream no.of items sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->ice_cream_no_of_items_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_5 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Carbonatd beverages count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->carbonatd_beverages_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Carbonated beverages no.of items sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->carbonated_beverages_no_of_items_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_6 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Sugar sweetened non-carbonated beverages count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sugar_sweetened_non_carbonated_beverages_count_of_flavour . '",';    
            
        }
      
      $output .= "\n";
      $output .= '"Sugar sweetened non-carbonated beverages no.of items sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sugar_sweetened_non_carbonated_beverages_no_of_items_sold . '",';    
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_7 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Packaged/bottled nimboo paani/lassi/flavoured milk  - count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->packaged_bottled_nimboo_paani_lassi_flavoured_milk_count_of_flav . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Packaged/bottled nimboo paani/lassi/flavoured milk -no.of item sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->packaged_bottled_nimboo_paani_lassi_flavoured_milk_no_of_item_so . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_8 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Packaged/bottled energy drinks count of flavour",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->packaged_bottled_energy_drinks_count_of_flavour . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Packaged/bottled energy drinks no.of items sold",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->packaged_bottled_energy_drinks_no_of_items_sold . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Month",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->month_9 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"School serve traditional Indian snacks",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_serve_traditional_indian_snacks . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Samosas",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->samosas . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Idli/vada",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->idli_vada . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Pav Bhaji",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pav_bhaji . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Momos",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->momos . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Others",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->others_1 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Descriptions",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->descriptions . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Schools serve traditional Indian beverages",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->schools_serve_traditional_indian_beverages . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Nimboo Pani",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->nimboo_pani . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Sweet Lassi",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sweet_lassi . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Salted Butter Milk",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->salted_butter_milk . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Aam Panna",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->aam_panna . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Others",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->others_2 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Schools distributes packaged food items as rewards",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->schools_distributes_packaged_food_items_as_rewards . '",';           
            
        }
      
      $output .= "\n";
      $output .= '"Details",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->details . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"School distribute chocolates/similar products as refreshments during schools events",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_distribute_chocolates_similar_products_as_refreshments . '",';
                        
        }
      
      $output .= "\n";
      $output .= '"Details",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->details_1 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"School events sponsored by food companies/brands",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_events_sponsored_by_food_companies_brands . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Details",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->details_2 . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Are their banners, brochures, hoardings put up during the events",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_their_banners_brochures_hoardings_put_up_during_the_events . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"School measure height and weight of all the student",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_measure_height_and_weight_of_all_the_student . '",';          
            
        }
      
      $output .= "\n";
      $output .= '"How regularly height & weight is measured",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_regularly_height__weight_is_measured . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Site area in square meter (m2)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->site_area_in_square_meter . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Ground coverage area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->ground_coverage_area . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Green Landscaped area on ground",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->green_landscaped_area . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Play area that has grass on ground",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->play_area_that_has . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Green area on ground",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->green_area_on_ground . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Play area that is paved/concrete on ground",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->play_area_that_is_paved_concrete . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Surface parking area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->surface_parking_area . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Service area on ground",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->service_area_on_ground . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Roof and terrace area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->roof_and_terrace_area . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Green cover on exposed roof and terrace",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->green_cover_on_exposed_roof_and_terrace . '",';            
            
        }
      
      $output .= "\n";
      $output .= '"Total built-up/constructed area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_built_up_constructed_area . '",';            
            
        }
      
            
      $output .= "\n";
      $output .= '"Total Area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_area . '",';            
            
        }
      
       
      $output .= "\n";
      $output .= '"Total Green Area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_green_area . '",';            
            
        }
      

      $output .= "\n";
      $output .= '"Percentage of Green Area",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->percentage_of_green_area . '",';            
            
        }
      

      $output .= "\n";
      $output .= '"Total Plants",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_plants . '",';            
            
        }
      

      $output .= "\n";
      $output .= '"Native Plants",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->native_plants . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Exotic Plants",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->exotic_plants . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Total Animals",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_animals . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Native Animals",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->native_animals . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Exotic Animals",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->exotic_animals . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Use of Chemical Pesticides",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->use_of_chemical_pesticides . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Drinking",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->drinking . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Toilet flushing",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->toilet_flushing . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Personal cleaning",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->personal_cleaning . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Washing clothes",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->washing_clothes . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Cooking",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->cooking . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Cleaning Utensils",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->cleaning_utensils . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Washing Vegetables",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->washing_vegetables . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Mopping floors",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->mopping_floors . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Gardening",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->gardening . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Others",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->others_3 . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Total water consumption per day",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_water_consumption_per_day . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Per capita/day water consumption",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->per_capita_day_water_consumption . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Ground Water as source",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->ground_water_as_source . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Surface water as source",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->surface_water_as_source . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Rainwater as source",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->rainwater_as_source . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Recycled waste water as source",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->recycled_waste_water_as_source . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Municipality as supplier",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->municipality_as_supplier . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Panchayat as supplier",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->panchayat_as_supplier . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"PHED as supplier",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->phed_as_supplier . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Private Supplier",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->private_supplier . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"School own supply",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->schools_own_supply . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"School gets daily water supply",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_gets_daily_water_supply . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Do all tanks in the school have float valves installed to stop overflow",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->do_all_tanks_in_the_school_have_float_valves . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Do the drinking water points have spill proof taps to check overflow",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->do_the_drinking_water_points_have_spill . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Does your school use appliances with a quick-wash setting",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_use_appliances_with . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Are dual flush systems installed in the toilets",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_dual_flush_systems_installed_in_the_toilets . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Does your school encourage bottled water for drinking water",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_encourage_bottled_water . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Does your school grow local plant species which require limited amount of water to grow",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_grow_local_plant_species_which . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Has your school initiated any water conservation steps in the school or outside, in the past one year",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->has_your_school_initiated_any_water_conservation . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Does your school use a drip or irrigation system",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_use_a_drip_or_irrigation_system . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Do you have Rainwater harvesting (RWH) system in your school?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->do_you_have_rainwater_harvesting_rwh_system_in_your_school . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Does your school harvest different catchments?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_harvest_different . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"Which is the catchment area being harvested by your school?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->which_is_the_catchment_area_being_harvested_by_your_school . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"How does your school harvest rainwater?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_does_your_school_harvest_rainwater . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Drinking)",'; 

        foreach ($arrRecord as $a) {
         
           if(!empty($a->stored_rainwater_use_drinking)){$data_final= $a->stored_rainwater_use_drinking;}else{ $data_final= "NA"; };    

            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Gardening)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_gardening)){$data_final= $a->stored_rainwater_use_gardening;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Mopping)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_mopping)){$data_final= $a->stored_rainwater_use_mopping;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Toilets)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_toilets)){$data_final= $a->stored_rainwater_use_toilets;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Washing vehicles)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_washing_vehicles)){$data_final= $a->stored_rainwater_use_washing_vehicles;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Kitchen)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_kitchen)){$data_final=$a->stored_rainwater_use_kitchen;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Shower, Brushing teeth, Bathing, Hand washing)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing)){$data_final= $a->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Stored rainwater use (Swimming Pool)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->stored_rainwater_use_swimming_pool)){$data_final= $a->stored_rainwater_use_swimming_pool;}else{ $data_final= "NA"; };
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"If your school only stores rainwater, please select the use of stored rainwater",';  foreach ($arrRecord as $a) {
            $output .= '"' . $a->if_your_school_only_stores_rainwater_please . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Does your school have rainwater storage tank?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_have_rainwater_storage_tank . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Total number of storage tanks",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_number_of_storage_tanks . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Does your school have groundwater recharge structure?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_have_groundwater_recharge_structure . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Total number of recharge structure",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_number_of_recharge_structure . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Type of groundwater recharge",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->type_of_groundwater_recharge . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"If your school practices rainwater harvesting, then what is the ratio between storage and recharge",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->if_your_school_practices_rainwater_harvesting_then . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"How much area in your school is harvested?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_much_area_in_your_school_is_harvested . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Conduits)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_conduits)){$data_final= $a->rainwater_harvesting_structures_conduits;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Gutters)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_gutters)){$data_final= $a->rainwater_harvesting_structures_gutters;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Filter unit)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_filter_unit)){$data_final= $a->rainwater_harvesting_structures_filter_unit;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (First flush)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_first_flush)){$data_final= $a->rainwater_harvesting_structures_first_flush;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Storage tank)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_storage_tank)){$data_final= $a->rainwater_harvesting_structures_storage_tank;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Collection sump)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_collection_sump)){$data_final= $a->rainwater_harvesting_structures_collection_sump;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Pump unit)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->rainwater_harvesting_structures_collection_sump)){$data_final= $a->rainwater_harvesting_structures_pump_unit;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Q6(d) rainwater harvesting structures (Recharge structure)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->rainwater_harvesting_structures_recharge_structure . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"RWH structures present in your school:",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->rwh_structures_present_in_your_school . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Where is your filter unit",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->where_is_your_filter_unit . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Types of filter used in your school:",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->types_of_filter_used_in_your_school . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Does your school clean your catchment and system",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_clean_your_catchment_and_system . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"When does your school clean the catchment and RWH system?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->when_does_your_school_clean_the_catchment_and_rwh_system . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Does your school monitor the rainwater harvesting structure for its efficiency?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_your_school_monitor_the_rainwater_harvesting . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"When does your school monitor the groundwater level?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->when_does_your_school_monitor_the_groundwater_level . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"What is the trend of groundwater level in your school across the year",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->what_is_the_trend_of_groundwater_level . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"How much was the increase?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_much_was_the_increase . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Does the school have separate toilets for males and females",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_the_school_have_separate_toilets_for_males_and_females . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Are the toilets accessible and safe to use for children",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_the_toilets_accessible_and_safe_to_use_for_children . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Are the toilets accessible and safe to use for differently abled children",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_the_toilets_accessible_and_safe_abled_children . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_the_toilets_accessible_and_safe_abled_staff_teaching . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Are the toilets situated in the right location in terms of privacy and safety",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->are_the_toilets_situated_in_the_right_location_in . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Is there sufficient light during day time",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->is_there_sufficient_light_during_day_time . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"No. of drinking water taps",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no__of_drinking_water_taps . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Load on DWT",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->load_on_dwt . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"No.of hand pumps",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_hand_pumps . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"No. of ablution taps",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no__of_ablution_taps . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Load on Ablution Tap",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->load_on_ablution_tap . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Toilet for Girls",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->toilet_for_girls . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Toilet for Boys",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->toilet_for_boys . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Common Toilets",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->common_toilets . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"No. of Toilets (water closet)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no__of_toilets_water_closet . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Load on Water Closet",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->load_on_water_closet . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"No. of urinals",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no__of_urinals . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Load on urinals",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->load_on_urinals . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"No. of water outlets",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no__of_water_outlets . '",';
                        
        }
             
      $output .= "\n";
      $output .= '"Water storage system in the toilets?",';

      foreach ($arrRecord as $a) {

          $rrrr =  $a->water_storage_system_in_the_toilets;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                        
        }

         
      $output .= "\n";
      $output .= '"Is the water supply sufficient?",';

      foreach ($arrRecord as $a) {

          $rrrr =  $a->is_the_water_supply_sufficient;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                        
        }       
        
             
      $output .= "\n";
      $output .= '"Are the toilets cleaned?",';  

      foreach ($arrRecord as $a) {

          $rrrr =  $a->are_the_toilets_cleaned;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';            
            
        }     
        
             
      $output .= "\n";
      $output .= '"Does school treat waste water",';

      foreach ($arrRecord as $a) {

          $rrrr =  $a->does_school_treat_waste_water;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';            
            
        }            
        
             
      $output .= "\n";
      $output .= '"Does schools reuse treated wastewater",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->does_schools_reuse_treated_wastewater . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"How does your school reuse wastewater",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->how_does_your_school_reuse_wastewater . '",';            
            
        }
             
      $output .= "\n";
      $output .= '"School reuse wastewater in (Flushing)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->school_reuse_wastewater_in_flushing)){$data_final= $a->school_reuse_wastewater_in_flushing;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"School reuse wastewater in (Recharge Ground Water)",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->school_reuse_wastewater_in_recharge_ground_water)){$data_final= $a->school_reuse_wastewater_in_recharge_ground_water;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Please specify the fate of wastewater",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->please_specify_the_fate_of_wastewater)){
                  $data_final= $a->please_specify_the_fate_of_wastewater; }else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"School segregated solid waste",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_segregated_solid_waste . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"Segregator at Source",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->segregator_at_source)){ $data_final= $a->segregator_at_source;}else{ $data_final= "NA"; }
            $output .= '"' . $data_final . '",';
                     
        }
             
//       $output .= "\n";
//       $output .= '"segregates the waste by (Students and teachers)",';       
//         foreach ($arrRecord as $a) {
//             if(!empty($a->segregates_the_waste_by_students_and_teachers)){$data_final= $a->segregates_the_waste_by_students_and_teachers;}else{ $data_final= "NA"; }
//             $output .= '"' . $data_final . '",';
                     
//         }
             
//       $output .= "\n";
//       $output .= '"segregates the waste by (Housekeeping)",';       
//         foreach ($arrRecord as $a) {
//             if(!empty($a->segregates_the_waste_by_housekeeping)){ $data_final= $a->segregates_the_waste_by_housekeeping;}else{ $data_final= "NA"; }
//             $output .= '"' . $data_final . '",';
                     
//         }
             
//       $output .= "\n";
//       $output .= '"segregates the waste by (Gardener)",';       
//         foreach ($arrRecord as $a) {
//             if(!empty($a->segregates_the_waste_by_gardener)){$data_final= $a->segregates_the_waste_by_gardener;}else{ $data_final= "NA"; }
//            $output .= '"' . $data_final . '",';
                      
//         }
             
//       $output .= "\n";
//       $output .= '"segregates the waste by (Ragpickers)",';       
//         foreach ($arrRecord as $a) {
//             if(!empty($a->segregates_the_waste_by_ragpickers)){$data_final= $a->segregates_the_waste_by_ragpickers;}else{ $data_final= "NA"; }
//             $output .= '"' . $data_final . '",';
                      
//         }
             
//       $output .= "\n";
//       $output .= '"segregates the waste by (other)",';       
//         foreach ($arrRecord as $a) {
//             if(!empty($a->segregates_the_waste_by_other)){$data_final= $a->segregates_the_waste_by_other;}else{ $data_final= "NA"; }
//             $output .= '"' . $data_final . '",';
                      
//         }
             
      $output .= "\n";
      $output .= '"No.of category",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->no_of_category . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Collection points with no bins",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->collection_points_with_no_bins . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Collection points with one bin (mixed)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->collection_points_with_one_bin_mixed . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Collection points with two bins",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->collection_points_with_two_bins . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Collection points with three bins",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->collection_points_with_three_bins . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total Collection points",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_collection_points . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total biodegradable waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_biodegradable_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD of biodegradable",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_of_biodegradable . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total Dry/recyclable waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_dry_recyclable_waste_generated . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"PCPD Dry/recyclable",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_dry_recyclable . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total Domestic waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_domestic_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Domestic waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_domestic_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"E-waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->e_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD E-waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_e_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Biomedical waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->biomedical_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Biomedical waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_biomedical_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Sanitary Waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sanitary_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Sanitary Waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_sanitary_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"C&D waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->cd_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD C&D waste generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_cd_waste_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"School recycle any generated waste?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->school_recycle_any_generated_waste . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total Waste Generated(kilogram)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_waste_generated_kilogram . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total Waste Recycled(kilogram)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_waste_recycled_kilogram . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Percentage of Waste Recycled(%)",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->percentage_of_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Total biodegradable waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_biodegradable_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD of biodegradable recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_of_biodegradable_recycled . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Total Dry/recyclable waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_dry_recyclable_waste_recycled . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"PCPD Dry/recyclable",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_dry_recyclable_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Hazardous and toxic waste (Paints, lab waste, etc) recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->hazardous_and_toxic_waste_paints_lab_waste_etc_recycled . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"Oil from DG sets recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->oil_from_dg_sets_recycled . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"Total Domestic waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->total_domestic_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Domestic waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_domestic_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"E-waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->e_waste_recycled . '",';
                       
        }
             
      $output .= "\n";
      $output .= '"PCPD E-waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_e_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Biomedical waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->biomedical_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Biomedical waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_biomedical_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Sanitary Waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->sanitary_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"PCPD Sanitary Waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_sanitary_waste_recycled . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"C&D waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->cd_waste_recycled . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"PCPD C&D waste recycled",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->pcpd_cd_waste_recycled . '",';
                     
        }
             
      $output .= "\n";
      $output .= '"Composting facility",'; 

      foreach ($arrRecord as $a) {

          $rrrr =  $a->composting_facility;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                     
        }      
        
             
      $output .= "\n";
      $output .= '"Quantity of compost generated",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->quantity_of_compost_generated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Reuse textbooks",'; 

      foreach ($arrRecord as $a) {

          $rrrr =  $a->reuse_textbooks;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){
            
            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                      
        }      
       
             
      $output .= "\n";
      $output .= '"What is the final destination for waste from your school that is disposed of externally",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->what_is_the_final_destination_for_waste_from_your . '",';
                 
        }
             
      $output .= "\n";
      $output .= '"Does your school burn waste?",';

          foreach ($arrRecord as $a) {

          $rrrr =  $a->does_your_school_burn_waste;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                      
        }
        
             
      $output .= "\n";
      $output .= '"Where does your school burn waste?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->where_does_your_school_burn_waste . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"What kind of waste is burnt/ incinerated?",';       
        foreach ($arrRecord as $a) {
            $output .= '"' . $a->what_kind_of_waste_is_burnt__incinerated . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Who collects E-waste",';       
        foreach ($arrRecord as $a) {
            if(!empty($a->who_collects_e_waste)){ $data_final= $a->who_collects_e_waste;}else{ $data_final= "NA";}
            $output .= '"' . $data_final . '",';
                      
        }
             
      $output .= "\n";
      $output .= '"Are there awareness drives with regard to Reduce, Recycle and Reuse",';   

        foreach ($arrRecord as $a) {

          $rrrr =  $a->are_there_awareness_drives_with_regard;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){
            
            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }
                  
            $output .= '"' .$ttt. '",';
                       
        }
             
      $output .= "\n";
      $output .= '"Is the study of the environment integrated into the curriculum?",';  


        foreach ($arrRecord as $a) {

          $rrrr =  $a->is_the_study_of_the_environment_integrated;
        
        if($rrrr=='Y')
        {
            $ttt= 'Yes';

        }else if($rrrr=='N'){

            $ttt= 'No';

        }else{

           $ttt =$rrrr;
        }                  
            $output .= '"' .$ttt. '",';                       
        }           
      
        return $output;
    }
	
	 // total combined code by jeetu

    public function combinded_total_school() {
        $output = "";
    
        $arrRecord = $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->join('cities AS c', 'a.district=c.id', 'left')
                        ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                        ->where("a.make_school_disabled","1")
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
            //$output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
            $output .= '"' . date('Y-m-d H:i:s', strtotime($a->date_added)) . '",';
            $output .= '"' . $a->progress . '%",';
            $output .= "\n";
            $k++;
        }        
        

        return $output;
    }


    public function combinded_startedtheaudit($progress) {
        $output = "";
       
//         $this->db->where("a.date_added >=","2019-03-03 00:00:00");
        $this->db->where("a.make_school_disabled","1");
        $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.password')
                    ->from('gsp_school AS a')
                    ->join('states AS b', 'a.state=b.id', 'left')
                    ->join('cities AS c', 'a.district=c.id', 'left')
                    ->join('gsp_user AS d', 'a.userid=d.id')
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


    public function combinded_completecount($progress) {
        $output = "";
       
        $this->db->where("a.date_added >=","2019-03-03 00:00:00");
        $this->db->where("a.make_school_disabled","1");
      $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.password')
                    ->from('gsp_school AS a')
                    ->join('states AS b', 'a.state=b.id', 'left')
                    ->join('cities AS c', 'a.district=c.id', 'left')
                    ->join('gsp_user AS d', 'a.userid=d.id')
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


    public function combinded_submitcount($progress) {
        $output = "";
//      $this->db->where("a.make_school_disabled","1");
      $this->db->where("e.date_on>=","2019-06-20 00:00:00");
      $arrRecord = $this->db->select('a.*,b.name AS state_name,c.name As district_name , d.password')
                                ->from('gsp_school AS a')
                                ->join('states AS b', 'a.state=b.id', 'left')
                                ->join('cities AS c', 'a.district=c.id', 'left')
                                 ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                                
                                ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
                                ->where('e.status=','1')
                                ->group_by('a.id')
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


    public function combinded_uncompletecount($progress) {
        $output = "";
       
        $this->db->where('a.date_added >=', '2019-03-03 00:00:00');
        $this->db->where("a.make_school_disabled","1");
      $arrRecord = $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.password')
                    ->from('gsp_school AS a')
                    ->join('states AS b', 'a.state=b.id', 'left')
                    ->join('cities AS c', 'a.district=c.id', 'left')
                    ->join('gsp_user AS d', 'a.userid=d.id')
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

    
       
}
