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
        $this->db->where('YEAR(date_added)', 2017);
		$this->db->where('date_added <', '2017-11-29 00:00:00');
        return $this->db->count_all_results('gsp_school');
    }

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
                        ->where('YEAR(a.date_added)', 2017)
						->where('a.date_added <', '2017-11-29 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
	
	public function totalschool()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.date_added <', '2017-11-29 00:00:00')
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
						->where('a.date_added <=', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschool_started_audit() {
		$this->db->where('progress_phase_1 >=', 10);
		$this->db->where('progress_phase_1 <=', 100);
		$this->db->where('date_added <=', '2017-11-29 00:00:00');
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
					->where('e.date_on <=', '2017-11-29 00:00:00')
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
				 $this->db->where('e.date_on <=', '2017-11-29 00:00:00');
				 $this->db->order_by('a.id', 'desc');
				return $this->db->count_all_results();
        
	}
	
	public function getschool_that_submit_audit() {
		 $this->db->select('a.*,b.name AS state_name,c.name As district_name');
		 $this->db->from('gsp_school AS a');
		 $this->db->join('states AS b', 'a.state=b.id', 'left');
		 $this->db->join('cities AS c', 'a.district=c.id', 'left');
		 $this->db->join('gsp_aduit_submitted AS e','e.userid=a.userid', 'left');
		 $this->db->where('e.date_on <=', '2017-11-29');
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
					->where('e.date_on <=', '2017-11-29')
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
					->where('e.date_on <=', '2017-11-29')
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
					->where('a.date_added <=', '2017-11-29 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function getschool_start_but_not_complete() {
		$this->db->where('progress_phase_1 >=', 10);
		$this->db->where('progress_phase_1 <=', 75);
		$this->db->where('date_added <=', '2017-11-29 00:00:00');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function schools_not_start_the_audit()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
						->from('gsp_school AS a')
						->join('states AS b', 'a.state=b.id', 'left')
						->join('cities AS c', 'a.district=c.id', 'left')
						->where('progress_phase_1=5')
						->where('date_added <=', '2017-11-29 00:00:00')
						->order_by('a.id', 'desc')
						->get()->result();
	}
	
	public function getschools_not_start_the_audit() {
		$this->db->where('progress_phase_1 = 5');
		$this->db->where('date_added <=', '2017-11-29 00:00:00');
		return $this->db->count_all_results('gsp_school');

    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*******************************************************************/
	/**GSP Audit Pahse -2**/
	/*******************************************************************/
	public function schoolCount_phase_2() {
	    $this->db->where('date_added >', '2017-11-29 00:00:00');
        return $this->db->count_all_results('gsp_school') ;
	
    }

    public function getData_phase_2() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			            ->join('cities AS c', 'a.district=c.id', 'left')
			            ->where('a.complete_status=', '0')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
    
     public function getData_phase_2_1() {
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
			            ->join('cities AS c', 'a.district=c.id', 'left')
			            ->where('a.date_added>=', '2017-11-30 00:00:00')
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }	
	
	
	public function totalschool_phase_2()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.date_added >', '2017-11-29 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	public function school_started_audit_phase_2()
	{
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
		$this->db->where('progress >=', 10);
		$this->db->where('progress <=', 100);
		$this->db->where('complete_status =', '0');
		return $this->db->count_all_results('gsp_school');
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
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.complete_status','0')
                                        ->where('a.progress',100)
					->get()->result();
		
		
	}
	
			
	
	public function getschool_that_complete_audit_phase_2() {
		$this->db->where('progress = 100');
		$this->db->where('date_added >', '2017-11-29 00:00:00');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function getschool_that_submit_audit_phase_2() {
		$this->db->where("status='1'");
		$this->db->where('date_on >', '2017-11-29 00:00:00');
		return $this->db->count_all_results('gsp_aduit_submitted');
	}
	
	public function getschool_that_submit_audit_data_phase_2() {
		return $this->db->select('a.*,b.name AS state_name,c.name As district_name')
		->from('gsp_school AS a')
		->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
		->join('gsp_aduit_submitted AS e','a.userid=e.userid', 'left')
		->where('e.status=','1')
		->where('e.date_on >', '2017-11-29 00:00:00')
		->get()->result();
	}
	
	
	public function school_start_but_not_complete_phase_2()
	{
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
		$this->db->where('progress >', 5);
		$this->db->where('progress <=', 75);
		$this->db->where('complete_status =', '0');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function schools_not_start_the_audit_phase_2()
	{
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
		return $this->db->count_all_results('gsp_school');
    }
	
	public function getschool_that_complete_audit_phase_2_1() {
		$this->db->where('progress = 100');
		$this->db->where('progress = 100');
		$this->db->where('complete_status','0');
		$this->db->where('date_added <=', '2017-11-29 00:00:00');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function school_that_complete_audit_phase_2_1()
	{
		return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
					->from('gsp_school AS a')
					->join('states AS b', 'a.state=b.id', 'left')
					->join('cities AS c', 'a.district=c.id', 'left')
					->where('a.progress=100')
					->where('a.complete_status','0')
					->where('a.date_added <', '2017-11-29 00:00:00')
					->order_by('a.id', 'desc')
					->get()->result();
	}
	
	/******************************  2018 **************************/
	
	public function getSchool_alldata(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
        ->order_by('a.id', 'desc')
        ->get()->result();
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
       
		->where('a.progress>=', 10)
		->where('a.progress<=', 100)
        ->order_by('a.id', 'desc')
        ->get()->result();
      }
	  
	  
	  public function getCompletedAuditButNotSubmitted_18data(){
        return $this->db->select('a.*, b.name AS state_name,c.name As district_name')
        ->from('gsp_school AS a')
        ->join('states AS b', 'a.state=b.id', 'left')
		->join('cities AS c', 'a.district=c.id', 'left')
       
		->where('a.progress', '100')
		->where('a.complete_status','0')
        ->order_by('a.id', 'desc')
        ->get()->result();
		//echo $this->db->last_query(); exit;
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
        
		->where('progress =','5')
        ->order_by('a.id', 'desc')
        ->get()->result();
		
		
      }
   
   
   
      public function getMasterData(){
        return $this->db->select('a.*')
        ->from('tbl_masterlist AS a')
        ->get()->result();
      } 	
	 
       public function getAirQuality($question_id){
           return $this->db->select('a.'.$question_id.',count(a.'.$question_id.') as total')
           ->from('tbl_total as a')
           ->group_by('(a.'.$question_id.')')
           ->get()->result();
       }	  
}
?>


