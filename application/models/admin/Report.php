<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model {
     /*
     * Constructor 
     */
    public function __construct() {
	parent::__construct();
    }
	/********************************************************/
	/********************************************************/
    public function startparticipationByZone($region)
	{
	  $startAuditSum=0;
	  foreach($region as $regions)
	  {
	   $this->db->where("state",$regions);
	   $this->db->where("complete_status",'0');
	   $this->db->where("progress <",'100');
	   $this->db->like("date_added",'2017'); 
	   $startAudit=$this->db->count_all_results("gsp_school");
	   $startAuditSum=$startAuditSum + $startAudit;
	  }
	   return $startAuditSum;
	}
	/********************************************************/
	/********************************************************/
    public function completeparticipationByZone($region)
	{
	  $completeAuditSum=0;
	  foreach($region as $regions)
	  {
	   $this->db->where("state",$regions);
	   $this->db->where("complete_status",'1');
	   $this->db->where("progress =",'100');
	   $this->db->where("date_added <=",'2017-11-30'); 
	   $startAudit=$this->db->count_all_results("gsp_school");
	   $completeAuditSum=$completeAuditSum + $startAudit;
	  }
	   return $completeAuditSum;
	}
	/********************************************************/
	/********************************************************/
    public function registerparticipationByZone($region)
	{
	  $registerAuditSum=0;
	  foreach($region as $regions)
	  {
	   $this->db->where("state",$regions);
	   $this->db->like("date_added",'2017'); 
	   $startAudit=$this->db->count_all_results("gsp_school");
	   $registerAuditSum=$registerAuditSum + $startAudit;
	  }
	   return $registerAuditSum;
	}
	/********************************************************/
	/********************************************************/
    public function singlenotstartparticipationByZone($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("complete_status",'0');
	   $this->db->where("progress =",'5');
	   $this->db->like("date_added",'2017'); 
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
    public function singlestartparticipationByZone($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("complete_status",'0');
	   $this->db->where("progress <",'100');
	   $this->db->like("date_added",'2017'); 
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
		return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
    public function singlecompleteparticipationByZone($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("complete_status",'1');
	   $this->db->where("progress =",'100');
	   $this->db->where("date_added <=",'2017-11-30'); 
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	   
	}
	/********************************************************/
	/********************************************************/
    public function singleregisterparticipationByZone($region)
	{
	   $this->db->where("state",$region);
	   $this->db->like("date_added",'2017'); 
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	}
	/********************************************************/
	/********************************************************/
    public function percentage_70_percent($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("percentage>",'70');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('tbl_sendmail')->get()->row();
	   return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
    public function percentage_50_69_percent($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("percentage>=",'50');
	   $this->db->where("percentage<=",'69.9');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('tbl_sendmail')->get()->row();
	   return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
    public function percentage_35_49_percent($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("percentage>=",'35');
	   $this->db->where("percentage<=",'49.9');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('tbl_sendmail')->get()->row();
	   return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
    public function percentage_0_34_percent($region)
	{
	   $this->db->where("state",$region);
	   $this->db->where("percentage<=",'34.9');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('tbl_sendmail')->get()->row();
	   return $data->countlabel;
	  
	}
	/********************************************************/
	/********************************************************/
	public function geteWasteDisposalReport($region,$question_id,$answer){
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school AS a')
	   ->join("gsp_answers AS b","b.userid=a.userid","LEFT")
	   ->where("a.state",$region)
	   ->where("b.questionid",$question_id)
	   ->where("b.answer",$answer)
	   ->get()->row();
	  return $data->countlabel;
	}
	/********************************************************/
	/********************************************************/
	public function geteWasteDisposalReport1($region,$question_id){
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school AS a')
	   ->join("gsp_answers AS b","b.userid=a.userid","LEFT")
	   ->where("a.state",$region)
	   ->where("b.questionid",$question_id)
	   ->get()->row();
	  return $data->countlabel;
	}
	
	/*************************Air Question*******************************/
	/********************************************************************/
	
	
	public function SchoolDoesNotOwnVehicles($question_id,$answer)
		{
					$this->db->where('questionid',$question_id);
					$this->db->where('answer', $answer);
			 return $this->db->count_all_results('gsp_answers');
					
		}
		
		public function Operatorownedvehicles($question_id,$answer)
		{
					$this->db->where('questionid',$question_id);
					$this->db->where('answer', $answer);
			 return $this->db->count_all_results('gsp_answers');
					
		}
		
		public function Schoolownedvehicles($question_id,$answer)
		{
					$this->db->where('questionid',$question_id);
					$this->db->where('answer', $answer);
			 return $this->db->count_all_results('gsp_answers');
					
		}
		
		public function CombinationSchoolandOperatorvehicles($question_id,$answer)
		{
					$this->db->where('questionid',$question_id);
					$this->db->where('answer', $answer);
			 return $this->db->count_all_results('gsp_answers');
					
		}
		
		public function Hiredvehicles($question_id,$answer)
		{
					$this->db->where('questionid',$question_id);
					$this->db->where('answer', $answer);
			        return $this->db->count_all_results('gsp_answers');
					
		}
		
		
		
		public function Airconditionedvehicles($question_id)
		{
			$this->db->select_sum('answer');
			$this->db->where('questionid',$question_id);
			$this->db->from('gsp_answers');
            return $this->db->get()->row(); 
			//echo $this->db->last_query();
					
		}
		
		public function BusesonDiesel($question_id)
		{
			$this->db->select_sum('answer');
			$this->db->where('questionid',$question_id);
            $this->db->from('gsp_answers');
            return $this->db->get()->row(); 
			//echo $this->db->last_query();
					
		}
		
		public function BusesonPetrol($question_id)
		{
			$this->db->select_sum('answer');
			$this->db->where('questionid',$question_id);
            $this->db->from('gsp_answers');
            return $this->db->get()->row(); 
			//echo $this->db->last_query();
					
		}
		
		public function AirReportData($question_id)
		{
		  return $this->db->select('sum(a.answer) as total')
						  ->from('gsp_answers as a')
			              ->where('questionid',$question_id)
						  ->get()->result(); 
			//echo $this->db->last_query();
					
		}
		
		public function getAirVehicle($question_id){
            return $this->db->select('Avg(a.answer) as avg')
                     ->from('gsp_answers as a')
                     ->like('a.questionid', $question_id)
                     ->get()->result();
            
        }
        
        public function getAirQuality($question_id){
            return $this->db->select('a.answer,count(a.answer) as total')
                     ->from('gsp_answers as a')
                     ->like('a.questionid', $question_id)
                     ->group_by('a.answer')
                     ->get()->result();
            
        }
	
}
