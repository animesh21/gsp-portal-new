<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * School Count
     */

    public function schoolCount() {
        $this->db->where('YEAR(date_added)', 2018);
	$this->db->where('date_added <', '2018-11-18 00:00:00');
        return $this->db->count_all_results('gsp_school');
    }
   
    /*This Function Used For Certifciate Count*/
	public function schoolCertificateCount() {
        return $this->db->count_all_results('tblcertificate');
    }
	
	
	public function schoolCertificateCount_2018() {
        return $this->db->count_all_results('tblcertificate');
    }
	
	/*This Function Used For Getting All Records Of Certifciate*/
	public function getSchoolCertificateRecords() {
        return $this->db->select("a.certificate_username,a.certificate_schoolname,a.certificate_srno,b.id as school_id")
		->from('tblcertificate as a')
		->join('gsp_school as b','a.userid=b.userid','left')
		->get()->result();
    }	
	
	
	public function getSchoolCertificateRecords_2018() {
        return $this->db->select("a.certificate_username,a.certificate_schoolname,a.certificate_srno,b.id as school_id")
		->from('tblcertificate as a')
		->join('gsp_school as b','a.userid=b.userid','left')
		->get()->result();
    }	

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
                        ->where('YEAR(a.date_added)', 2018)
			->where('a.date_added <', '2018-11-18 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
	
	public function totalschool()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.date_added <', '2018-11-18 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function school_started_audit()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress_phase_1 >=', 10)
						->where('progress_phase_1 <=', 100)
			                        ->where('YEAR(a.date_added)', 2018)
						->where('a.date_added <=', '2018-11-18 00:00:00')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschool_started_audit() {
		$this->db->where('progress_phase_1 >=', 10);
		$this->db->where('progress_phase_1 <=', 100);
		$this->db->where('date_added <=', '2018-11-18 00:00:00');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function school_that_complete_audit()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('e.status="1"')
					->where('e.date_on <=', '2018-11-18 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function getschool_that_complete_audit() {
		   $this->db->select('a.*, b.name AS state_name,c.name As district_name');
		   $this->db->from('gsp_school AS a');
		   $this->db->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left');
				 $this->db->join('states AS b', 'a.state=b.id', 'left');
				 $this->db->join('cities AS c', 'a.district=c.id', 'left');
				 $this->db->where('e.status="1"');
				 $this->db->where('e.date_on <=', '2018-11-18 00:00:00');
				 $this->db->order_by('a.id', 'desc');
				return $this->db->count_all_results();
        
	}
	
	public function getschool_that_submit_audit() {
		 $this->db->select('a.*,b.name AS state_name,c.name As district_name');
		 $this->db->from('gsp_school AS a');
		 $this->db->join('states AS b', 'a.state=b.id', 'left');
		 $this->db->join('cities AS c', 'a.district=c.id', 'left');
		 $this->db->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left');
		 $this->db->where('e.date_on <=', '2018-11-18');
		 $this->db->where('e.status','1');
		 $this->db->order_by('a.id', 'desc');
	         return $this->db->count_all_results();
	}
	
	public function getschool_that_submit_audit_data() {
		return $this->db->select('a.*,b.name AS state_name,c.name As district_name')
		            ->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
					->where('e.date_on <=', '2018-11-18')
					->where('e.status','1')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function getschool_that_submit_audit_data1($userId) {
		return $this->db->select('a.*,b.name AS state_name,c.name As district_name')
		            ->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left')
					->where('e.date_on <=', '2018-11-18')
					->where('e.status','1')
					->where('a.userid',$userId)
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function school_start_but_not_complete()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('progress_phase_1 >=', 10)
					->where('progress_phase_1 <=', 75)
					->where('a.date_added <=', '2017-11-29')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function getschool_start_but_not_complete() {
		$this->db->where('progress_phase_1 >=', 10);
		$this->db->where('progress_phase_1 <=', 75);
		$this->db->where('date_added <=', '2018-11-18');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function schools_not_start_the_audit()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
						->from('gsp_school AS a')
						->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress_phase_1=5')
						->where('date_added <=', '2018-11-18')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschools_not_start_the_audit() {
		$this->db->where('progress_phase_1 = 5');
		$this->db->where('date_added <=', '2018-11-18');
		return $this->db->count_all_results('gsp_school');

    }
	
	
	
	
	
	
	/*******************************************************************/
	/**GSP Audit Pahse -2**/
	/*******************************************************************/
	public function schoolCount_phase_2() {
	    //$this->db->where('date_added >=', '2019-11-12 00:00:00');
	    $this->db->where("make_school_disabled","1");
            return $this->db->count_all_results('gsp_school') ;
	
    }

    public function getData_phase_2() {
// 	    //$this->db->where('date_added >=', '2019-11-12 00:00:00');
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			            ->join('cities AS c', 'a.district=c.id', 'left')
			            ->where('a.complete_status=', '0')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
	
	public function getData_phase_2_submitted(){

              $r=$this->db->select('school_id')
                        ->from('gsp_aduit_submitted')
                        ->where('date_on >=', '2019-11-12 00:00:00')
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

			            return $er;


       }
	
    
     public function getData_phase_2_1() {
	$this->db->where("a.make_school_disabled","1");     
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			            ->join('cities AS c', 'a.district=c.id', 'left')
			            ->where('a.date_added >=', '2019-11-12 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }	
	
	
	public function totalschool_phase_2()
	{
		$this->db->where("a.make_school_disabled","1");
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.date_added >=', '2019-11-12 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function school_started_audit_phase_2()
	{
		$this->db->where("a.make_school_disabled","1");
// 		//$this->db->where('date_added >=', '2019-11-12 00:00:00');
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress >=', 10)
						->where('progress <=', 100)
						->where('a.complete_status =', '0')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschool_started_audit_phase_2() {
// 		//$this->db->where('date_added >=', '2019-11-12 00:00:00');
		$this->db->where('progress >=', 10);
		$this->db->where('progress <=', 100);
		$this->db->where('complete_status =', '0');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
	}
	
	
	
			
	
	public function getschool_that_complete_audit_phase_2() {
		$this->db->where('progress = 100');
		//$this->db->where('date_added >=', '2019-11-12 00:00:00');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function getschool_that_submit_audit_phase_2() {
	 
		$data=	$this->db->query('SELECT * FROM gsp_aduit_submitted where date_on>="2019-11-12 00:00:00" and status="1" group by school_id ');
	return	$data->num_rows();
	}
	
	public function getschool_that_submit_audit_data_phase_2() {
// 	$this->db->where("a.make_school_disabled","1");	
	return $this->db->select('a.*,b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
        ->join('cities AS c', 'a.district=c.id', 'left')
        ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
        ->where('e.status=','1')
        ->where('e.date_on >=', '2019-11-12 00:00:00')
	->group_by('a.id')
        ->get()->result();
   
	}
	public function school_that_complete_audit_phase_2()
	{
		/*return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('progress=100')
					->where('date_added >', '2017-11-29 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result(); */
		$this->db->where("a.make_school_disabled","1");
		//$this->db->where('a.date_added >=', '2019-11-12 00:00:00');
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.complete_status','0')
                                        ->where('a.progress',100)
					->get()->result();
		
		
	}
	
	public function school_start_but_not_complete_phase_2()
	{	//$this->db->where('a.date_added >=', '2019-11-12 00:00:00');
		$this->db->where("a.make_school_disabled","1");
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('progress >', 5)
					->where('progress <=', 75)
					->where('a.complete_status =', '0')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function getschool_start_but_not_complete_phase_2() {
		$this->db->where('date_added >=', '2019-11-12 00:00:00');
		$this->db->where('progress >', 5);
		$this->db->where('progress <=', 75);
		$this->db->where('complete_status =', '0');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function schools_not_start_the_audit_phase_2()
	{
		$this->db->where('date_added >=', '2019-11-12 00:00:00');
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
						->from('gsp_school AS a')
						->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress=5')
						->where('complete_status =', '0')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschools_not_start_the_audit_phase_2() {
		$this->db->where('progress =','5');
		$this->db->where('complete_status =', '0');
		//$this->db->where('date_added >=', '2019-11-12 00:00:00');
		return $this->db->count_all_results('gsp_school');
    }
	
	public function getschool_that_complete_audit_phase_2_1() {
		$this->db->where('progress = 100');
		$this->db->where('progress = 100');
		$this->db->where('complete_status','0');
		//$this->db->where('date_added >=', '2019-11-12 00:00:00');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function school_that_complete_audit_phase_2_1()
	{
		$this->db->where("a.make_school_disabled","1"); 
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.progress=100')
					->where('a.complete_status','0')
					->where('a.date_added <', '2019-11-12 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	
	
	/******************************  2018 **************************/
	
	public function getSchool_alldata(){
	$this->db->where("a.make_school_disabled","1");
	//$this->db->where("a.date_added <=","2019-11-11 00:00:00");
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
		->where("a.kvs_school_status","NULL")
        ->order_by('a.id', 'desc')
        ->get()->result();
        }
	
	public function getSchool_18data(){
	$this->db->where("a.make_school_disabled","1");      
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2019-03-01 00:00:00')
	->where("a.date_added <=", "2019-11-10 00:00:00")
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
	
	
      public function getSchool_19data(){
	$this->db->where("a.make_school_disabled","1");      
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	->join('cities AS c', 'a.district=c.id', 'left')
        ->where('a.date_added >=', '2019-03-01 00:00:00')
	->where("a.date_added <=", "2019-11-10 00:00:00")
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
	  
	   public function getstartedtheaudit_19data(){
	//$this->db->where("a.date_added <=","2019-11-10 00:00:00");
	$this->db->where("a.make_school_disabled","1");
	//$this->db->where("a.complete_status",'0');
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
       ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
		->where('a.progress_phase_1>=', 10)
		->where('a.progress_phase_1<=', 100)
		->where("a.p1s",'0')
        ->order_by('a.id', 'desc')
        ->get()->result();
        
      }
	  
	  
  public function getCompletedAuditButNotSubmitted_19data(){
	$this->db->where("a.date_added <=","2019-11-10 00:00:00");
	$this->db->where("a.make_school_disabled","1");  
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	    ->join('cities AS c', 'a.district=c.id', 'left')
	    ->join('gsp_aduit_submitted AS d','a.userid=d.userid','left')	
	    ->where('a.progress_phase_1', '100')
	    ->where('a.complete_status','0')
	    //->where('a.phase1','1')
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
   
      public function getSubmittedTheAudit_19data(){
	      $this->db->where("e.date_on >=","2019-04-27 08:50:40");
        $this->db->where("e.date_on <=","2019-11-12 00:00:00");
    return  $this->db->select('a.*, b.name AS state_name, c.name AS district_name , d.password, e.date_on')
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
//       	$this->db->where("d.date_on >=","2019-04-27 08:50:40");
//       	$this->db->where("d.date_on <","2019-11-12 00:00:00");
// 	    return $this->db->select('a.*, b.name AS state_name,c.name As district_name,d.date_on')
//         ->from('gsp_school AS a')
//         ->join('states AS b', 'a.state=b.id', 'left')
// 	    ->join('cities AS c', 'a.district=c.id', 'left')
// 	    ->join('gsp_aduit_submitted AS d','d.userid=a.userid')       
// 	    ->where('a.progress_phase_1', '100')
// 	    ->where('a.complete_status','1')
// 	    ->where('a.make_school_disabled',1)
//         ->order_by('a.id', 'desc')
//         ->get()->result();
      }
	 
	
	public function getStartedAuditButDidNotComplete_19data(){
	//$this->db->where("a.date_added <=","2019-11-10 00:00:00");
	$this->db->where("a.make_school_disabled","1");	   
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')       
		->where('progress_phase_1 >=','10')
		->where('progress_phase_1 <=','75')
        ->order_by('a.id', 'desc')
        ->get()->result();
		
		
      }
   
     
	 public function getNotStartTheAudit_19data(){
	//$this->db->where("a.date_added <=","2019-11-10 00:00:00");
	$this->db->where("a.make_school_disabled","1");	 
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
	->join('cities AS c', 'a.district=c.id', 'left')        
	->where('progress_phase_1 =','5')
        ->order_by('a.id', 'desc')
        ->get()->result();
		
		
      }
   
   public function getMasterData(){
        return $this->db->select('a.name,b.school_id,b.school_name,b.state,b.district,a.principle_name,a.schoolemail,a.mobile,a.coname,a.coemail,a.comobile,b.data_2020,b.data_2019,b.data_2018,b.data_2017,b.data_2016,b.data_2015')
        ->from('gsp_school AS a')
        ->join('tbl_yoy as b', 'a.id=b.school_id', 'right')
        ->get()->result();
      } 	
	 
       public function getAirQuality($question_id){
           return $this->db->select('a.'.$question_id.',count(a.'.$question_id.') as total')
           ->from('tbl_total as a')
           ->group_by('(a.'.$question_id.')')
           ->get()->result();
       }
     /**This Function Used For Counting Disbaled School**/
     public function getDisabledScoolCounts(){
         $countDisbaled=$this->db->select("count('id') AS labelCount")
        ->from('gsp_school')
	->like("make_school_disabled","0")
	//->where("date_added <=","2019-11-10 00:00:00")
        ->get()->result();
	return $countDisbaled[0]->labelCount;
       }
	
	
	 // compbined result of school by jeetu

        public function combinedgetSchool(){
		$this->db->where("make_school_disabled","1");
		// $this->db->where("date_added >=","2019-03-03 00:00:00");
        return $this->db->count_all_results('gsp_school');
        }

        public function combinedgetSchool_startedAudit() {
		//$this->db->where("date_added >=","2019-03-03 00:00:00");
		$this->db->where('progress >=', 10);
		$this->db->where('progress <', 100);
		$this->db->where('complete_status =', '0');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
	}

		public function combinedgetSchool_compliteAudit() {
		//$this->db->where("date_added >=","2019-03-03 00:00:00");
		$this->db->where('progress =', 100);
		$this->db->where('complete_status =', '0');
		$this->db->where("make_school_disabled","1");
		return $this->db->count_all_results('gsp_school');
	}

	public function combinedgetSchool_submited() {
		$this->db->where("date_on >=","2019-06-20 00:00:00");
		$this->db->where('status =', '1');
		$this->db->group_by('school_id');
		return $this->db->count_all_results('gsp_aduit_submitted');		  
	}

	public function combinedgetSchool_not_complete() {
		//$this->db->where("date_added >=","2019-03-03 00:00:00");
		$this->db->where('progress >', '5');
		$this->db->where('progress <=', '75');
		$this->db->where("make_school_disabled","1");	 
		$this->db->group_by('id');
		return $this->db->count_all_results('gsp_school');		  
	}

	public function combinded_total_school() {
// 	    //$this->db->where('date_added >=', '2019-11-12 00:00:00');
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			            ->join('cities AS c', 'a.district=c.id', 'left')
			            // ->where('a.complete_status=', '0')
						->where("a.make_school_disabled","1")
                        ->order_by('a.id', 'desc')
                        ->group_by('a.id')
                        ->get()->result();
    }


    public function combinded_startedtheaudit()
	{
		$this->db->where("a.make_school_disabled","1");
		//$this->db->where("a.date_added >=","2019-03-03 00:00:00");
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress >=', 10)
						->where('progress <', 100)
						->where('a.complete_status =', '0')
						->order_by('a.id', 'desc')
						->get()->result();
	}


	public function combinded_completecount()
	{		
		$this->db->where("a.make_school_disabled","1");
		//$this->db->where("a.date_added >=","2019-03-03 00:00:00");
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name, d.password')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->join('gsp_user AS d', 'a.userid=d.id', 'left')
					->where('a.complete_status','0')
                    ->where('a.progress',100)
					->get()->result();		
	}


	public function combinded_submitcount() {
// 	$this->db->where("a.make_school_disabled","1");	
	return $this->db->select('a.*,b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
        ->join('cities AS c', 'a.district=c.id', 'left')
        ->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
        ->where('e.status=','1')
        ->where('e.date_on >=', '2019-06-20 00:00:00')
        ->group_by('a.id')
        ->get()->result();
   
	}

	public function combinded_uncompletecount()
	{	//$this->db->where('a.date_added >=', '2019-03-03 00:00:00');
		$this->db->where("a.make_school_disabled","1");
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('progress >', 5)
					->where('progress <=', 75)
					->where('a.complete_status =', '0')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	 
	
	
}


?>


