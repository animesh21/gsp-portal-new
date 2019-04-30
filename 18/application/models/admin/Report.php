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
		  $this->db->where("make_school_disabled","1");
	   //Old Code//$this->db->where("progress <=",'100');
	   //$this->db->where("date_added <=",'2017-11-20'); 
	   $this->db->where('progress>=', 10);
	   $this->db->where('progress<=', 100);	  
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
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("complete_status",'1');
	   $this->db->where("progress =",'100');
	  // $this->db->where("date_added <",'2017-11-20'); 
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
		  $this->db->where("make_school_disabled","1");
	  // $this->db->where("date_added <",'2017-11-20'); 
	   $startAudit=$this->db->count_all_results("gsp_school");
	   $registerAuditSum=$registerAuditSum + $startAudit;
	  }
	   return $registerAuditSum;
	}
/********************************************************/
	/********************************************************/
    public function singlenotstartparticipationByZone($region)
	{
	  if($region==0){ 
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("progress=",'5');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }else{
	   $this->db->where("state",$region);
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("progress=",'5');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }
	}
	/********************************************************/
	/********************************************************/
    public function singlestartparticipationByZone($region)
	{
	  if($region==0){ 
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("complete_status",'0');
	   $this->db->where("progress >=",'10');
	   $this->db->where("progress <=",'100');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
		return $data->countlabel;
	  }else{
	   $this->db->where("state",$region);
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("progress >",'5');
	   $this->db->where("progress <",'100');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
		return $data->countlabel;
	  }
	  
	}
	/********************************************************/
	/********************************************************/
    public function singlecompleteparticipationByZone($region)
	{
	  if($region==0){ 
	   $this->db->where("make_school_disabled","1");
	   $this->db->where("progress =",'100');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }else{
	   $this->db->where("state",$region);
	   $this->db->where("make_school_disabled","1");  
	   $this->db->where("progress =",'100');
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }
	}
	/********************************************************/
	/********************************************************/
    public function singleregisterparticipationByZone($region)
	{
	  if($region==0){ 
	   $this->db->where("make_school_disabled","1");
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }else{
	   $this->db->where("state",$region);
	   $this->db->where("make_school_disabled","1");
	   $data=$this->db->select("COUNT(id) AS countlabel")->from('gsp_school')->get()->row();
	   return $data->countlabel;
	  }
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
			 $this->db->where('a.'.$question_id,$answer);
		     $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
			 $phase1 = $this->db->count_all_results('tbl_total as a');
             
            // return $phase1;

			 $this->db->where('a.'.$question_id,$answer);
		     $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
		    $phase2 = $this->db->count_all_results('tbl_total_phase2 as a');
              
             $Final=$phase1+$phase2;

             return $Final;

		}
		
		public function Operatorownedvehicles($question_id,$answer)
		{
		     $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
			 $phase1 = $this->db->count_all_results('tbl_total as a');
              
               // return $phase1;

			 $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
			$phase2 = $this->db->count_all_results('tbl_total_phase2 as a');

			 $Final=$phase1+$phase2;

             return $Final;			
		}
		
		public function Schoolownedvehicles($question_id,$answer)
		{
			$this->db->where('a.'.$question_id,$answer);
			$this->db->join('gsp_school as b','a.userid=b.userid','left'); 
            $this->db->where('b.complete_status','1');
			$phase1 = $this->db->count_all_results('tbl_total as a');

             //echo $phase1; 
             
			$this->db->where('a.'.$question_id,$answer);
			$this->db->join('gsp_school as b','a.userid=b.userid','left'); 
            $this->db->where('b.complete_status','1');
			$phase2 = $this->db->count_all_results('tbl_total_phase2 as a');
               
              // echo $phase2;

			$Final=$phase1+$phase2;

             return $Final;	
					
		}
		
public function CombinationSchoolandOperatorvehicles($question_id,$answer)
		{
			 $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
		 $phase1 = $this->db->count_all_results('tbl_total as a');

            $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
		 $phase2 = $this->db->count_all_results('tbl_total_phase2 as a');

            

			 $Final=$phase1+$phase2;

             return $Final;	
					
		}
		
		public function Hiredvehicles($question_id,$answer)
		{
			 $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
		 $phase1 = $this->db->count_all_results('tbl_total as a');	
           
			 $this->db->where('a.'.$question_id,$answer);
			 $this->db->join('gsp_school as b','a.userid=b.userid','left'); 
             $this->db->where('b.complete_status','1');
		 $phase2 = $this->db->count_all_results('tbl_total_phase2 as a');


               
               $Final=$phase1+$phase2;

                return $Final;	


		}
		
		
		
		public function Airconditionedvehicles($question_id)
		{
			$this->db->select_sum("'".$question_id."'");
			$this->db->from('tbl_total');
            return $this->db->get()->row(); 
		}
		
		public function BusesonDiesel($question_id)
		{
			$this->db->select_sum("'".$question_id."'");
            $this->db->from('tbl_total');
            $phase1 = $this->db->get()->row(); 



            $this->db->select_sum("'".$question_id."'");
            $this->db->from('tbl_total_phase2');
            $phase2 = $this->db->get()->row(); 

           

            $Final=$phase1+$phase2;

            

                return $Final;	
            

		}
		
		public function BusesonPetrol($question_id)
		{
			$this->db->select_sum("'".$question_id."'");
            $this->db->from('tbl_total');
            return $this->db->get()->row(); 
		}
		
		public function AirReportData($question_id)
		{
		  return $this->db->select('sum(a.'.$question_id.') as total')
		  ->from('tbl_total as a')
		  ->join('gsp_school as b','a.userid=b.userid','left') 
          ->where('b.complete_status','1')
		  ->get()->result(); 

        }


        public function AirReportData_phase2($question_id)
		{
		  return $this->db->select('sum(a.'.$question_id.') as total')
		  ->from('tbl_total_phase2 as a')
		  ->join('gsp_school as b','a.userid=b.userid','left') 
          ->where('b.complete_status','1')
		  ->get()->result(); 

        }

		
		public function getAirVehicle_totalpopulation(){

	        	$question_id1='Q7A1S4';	
	        	$question_id2='Q7A2S4';
	        	$question_id3='Q7A3S4';
	        	$question_id4='Q7A4S4';
	        	$question_id5='Q7A5S4';
	        	$question_id6='Q7A6S4';
	        	$question_id7='Q7A7S4';
	        	$question_id8='Q7A8S4';
	        	$question_id9='Q7A9S4';
	        	$question_id10='Q7A10S4';
	        	$question_id11='Q7A11S4';
	        	

	 return $this->db->select('sum(a.'.$question_id1.'+a.'.$question_id2.'+a.'.$question_id3.'+a.'.$question_id4.'+a.'.$question_id5.'+a.'.$question_id6.'+a.'.$question_id7.'+a.'.$question_id8.'+a.'.$question_id9.'+a.'.$question_id10.'+a.'.$question_id11.') as avg')
	            ->from('tbl_total as a')
			    ->join('gsp_school as b','a.userid=b.userid','left') 
	            ->where('b.complete_status','1')
	            ->get()->result();

	            //echo $this->db->last_query(); exit;
	        }




	           public function getAirVehicle_totalpopulation_phase2(){

	        	$question_id1='Q7A1S4';	
	        	$question_id2='Q7A2S4';
	        	$question_id3='Q7A3S4';
	        	$question_id4='Q7A4S4';
	        	$question_id5='Q7A5S4';
	        	$question_id6='Q7A6S4';
	        	$question_id7='Q7A7S4';
	        	$question_id8='Q7A8S4';
	        	$question_id9='Q7A9S4';
	        	$question_id10='Q7A10S4';
	        	$question_id11='Q7A11S4';
	        	

	 return $this->db->select('sum(a.'.$question_id1.'+a.'.$question_id2.'+a.'.$question_id3.'+a.'.$question_id4.'+a.'.$question_id5.'+a.'.$question_id6.'+a.'.$question_id7.'+a.'.$question_id8.'+a.'.$question_id9.'+a.'.$question_id10.'+a.'.$question_id11.') as avg')
	            ->from('tbl_total_phase2 as a')
			    ->join('gsp_school as b','a.userid=b.userid','left') 
	            ->where('b.complete_status','1')
	            ->get()->result();

	            //echo $this->db->last_query(); exit;
	        }
			
			public function getAirVehicle($question_id){
	            return $this->db->select('sum(a.'.$question_id.') as avg')
	            ->from('tbl_total as a')
			    ->join('gsp_school as b','a.userid=b.userid','left') 
	            ->where('b.complete_status','1')
	            ->get()->result();
	        }


	         public function getAirVehicle_phase2($question_id){
	            return $this->db->select('sum(a.'.$question_id.') as avg')
	            ->from('tbl_total_phase2 as a')
			    ->join('gsp_school as b','a.userid=b.userid','left') 
	            ->where('b.complete_status','1')
	            ->get()->result();
	        }
	         

	
	public function getAirphase_1($question_id){
            return $this->db->select('Avg(a.'.$question_id.') as avg')
                     ->from('tbl_total as a')
                     ->get()->result();
            
        }
	
	  /*public function getAirPhase_2($question_id){
            return $this->db->select('Avg(a.'.$question_id.') as avg')
                     ->from('tbl_air_phase_2 as a')
                     ->get()->result();
            
        }*/
	
        
        public function getAirQuality($question_id){
            return $this->db->select('a.answer,count(a.answer) as total')
                     ->from('gsp_answers as a')
                     ->where('a.questionid', $question_id)
		     ->join('gsp_school as b','a.userid=b.userid','left') 
                     ->where('b.complete_status','1')
                     ->group_by('a.answer')
                     ->get()->result();
            
        }
	
	public function getAirQuality_recheck($question_id){
     return $this->db->select('a.'.$question_id.',count(a.'.$question_id.') as total')
               ->from('tbl_total as a')
               ->group_by('(a.'.$question_id.')')
               ->get()->result();

             
  
        }


        public function getAirQuality_recheck_phase2($question_id){
     return $this->db->select('a.'.$question_id.',count(a.'.$question_id.') as total')
               ->from('tbl_total_phase2 as a')
               ->group_by('(a.'.$question_id.')')
               ->get()->result();

          }
	
	public function getfoodByAnswer_phase1($question_id,$answer){
            return $this->db->select('count(a.Q12F2) as total')
                    ->from('tbl_total as a')
                    ->where('a.Q12F2',$answer)
		            ->get()->result();

		           
            
        }


        public function getfoodByAnswer_phase2($question_id,$answer){
            return $this->db->select('count(a.Q12F2) as total')
                    ->from('tbl_total_phase2 as a')
                    ->where('a.Q12F2',$answer)
		            ->get()->result();

		           
            
        }
	
	/*************************Energy Question*******************************/
	/********************************************************************/
	
	public function Airconditioner($question_id)
	{
		     $this->db->select_sum($question_id);
			 $this->db->from('tbl_total');
             return $this->db->get()->row();

          
	}

	public function Airconditioner_phase2($question_id)
	{
		     $this->db->select_sum($question_id);
			 $this->db->from('tbl_total_phase2');
             return $this->db->get()->row();

          
	}
	
	public function Tubelight($question_id)
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total');
            return $this->db->get()->row();
	}

    public function Tubelight_phase2($question_id)
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total_phase2');
            return $this->db->get()->row();
	}


	public function CFLbulb($question_id)
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total');
            return $this->db->get()->row();
	}

    public function CFLbulb_phase2($question_id)
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total_phase2');
            return $this->db->get()->row();
	}


	public function LEDbulb($question_id)	
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total');
            return $this->db->get()->row();
	}

	public function LEDbulb_phase2($question_id)	
	{
		    $this->db->select_sum($question_id);
			$this->db->from('tbl_total_phase2');
            return $this->db->get()->row();
	}

	public function SchoolHavingAlternateSourceOfEnergy($question_id)
	{
		    $this->db->where($question_id,'Y');
	        return $this->db->count_all_results('tbl_total');
			 
	}


	public function SchoolHavingAlternateSourceOfEnergy_phase2($question_id)
	{
		    $this->db->where($question_id,'Y');
	        return $this->db->count_all_results('tbl_total_phase2');
			 
	}
	
	public function getEnergyReport(){
             return $this->db->select('Avg(a.Q6E1S2) as board, Avg(a.percatitaaa) as capita')
					       ->from('tbl_total as a')
					       ->get()->result();

					     //  echo $this->db->last_query();
        }
	
	public function getEnergyReport_2(){
            return $this->db->select('Avg(a.Q6E1S2) as board, Avg(a.percatitaaa) as capita')
                     ->from('tbl_total_phase2 as a')
		             ->get()->result();
            
        }
        
        public function getEnergyGeneratorSchool(){
            return $this->db->select('count(a.Q6E2S1) as generator')
                     ->from('tbl_total as a')
                     ->where('a.Q6E2S1 != ',0,FALSE)
		             ->get()->result();
            
        }
	 public function getEnergyGeneratorSchool_2(){
            return $this->db->select('count(a.Q6E2S1) as generator')
                     ->from('tbl_total_phase2 as a')
                     ->where('a.Q6E2S1 != ',0,FALSE)
		             ->get()->result();
            
        }
        
         public function getEnergyBiogasSchool(){
            return $this->db->select('count(a.Q6E13S1) as biogas')
                     ->from('tbl_total as a')
                     ->where('a.Q6E13S1 != ',0,FALSE)
		             ->get()->result();
            
        }
	public function getEnergyBiogasSchool_2(){
            return $this->db->select('count(a.Q6E13S1) as biogas')
                     ->from('tbl_total_phase2 as a')
                     ->where('a.Q6E13S1 != ',0,FALSE)
		             ->get()->result();
            
        }
         public function getEnergySolarSchool(){
            return $this->db->select('count(a.Q6E9S1) as solar')
                     ->from('tbl_total as a')
                     ->where('a.Q6E9S1 != ',0,FALSE)
		             ->get()->result();
            
        }
	
	public function getEnergySolarSchool_2(){
                return $this->db->select('count(a.Q6E9S1) as solar')
                     ->from('tbl_total_phase2 as a')
                     ->where('a.Q6E9S1 != ',0,FALSE)
		             ->get()->result();
            
        }
	
	/*************************Land Question*******************************/
	/********************************************************************/
		public function getLand_1(){
            return $this->db->select('Avg(a.Q4L5) as avg')
                     ->from('tbl_total as a')
		     ->join('gsp_school as b','a.userid=b.userid','left') 
                     ->where('b.complete_status','1')
                     ->get()->result();
            
        }
	
	public function getLand_1_phase2(){
           return  $this->db->select('Avg(a.Q4L5) as avg')
                     ->from('tbl_total_phase2 as a')
		            ->join('gsp_school as b','a.userid=b.userid','left')
		            ->where('b.complete_status','1')
                     ->get()->result();

                    // echo $this->db->last_query();
            
        }
        
        public function getLand_2(){
            return $this->db->select('a.answer,count(a.answer) as total')
                     ->from('gsp_answers as a')
                     ->where('a.questionid','Q6L1')
		     ->join('gsp_school as b','a.userid=b.userid','left') 
                     ->where('b.complete_status','1')
                     ->group_by('a.answer')
                     ->get()->result();
            
        }
	
	public function getWaterSchool($question_id){
            return $this->db->select('count(a.answer) as total')
                     ->from('gsp_answers as a')
                     ->where('a.questionid',$question_id)
		    ->join('gsp_school as b','a.userid=b.userid','left') 
                     ->where('b.complete_status','1')
                     ->get()->result();
            
        }
        
        public function getWaterByAnswer($question_id,$answer){
            return $this->db->select('count(a.answer) as total')
                    ->from('gsp_answers as a')
                    ->where('a.questionid',$question_id)
                    ->where('a.answer',$answer)
		    ->join('gsp_school as b','a.userid=b.userid','left') 
                    ->where('b.complete_status','1')
                    ->get()->result();
            
        }
        
        
        public function getAnswerByGroup(){
            return $this->db->select('a.answer, count(a.answer) as total')
                     ->from('gsp_answers as a')
                     ->where('a.questionid','Q8W2')
		     ->join('gsp_school as b','a.userid=b.userid','left') 
                     ->where('b.complete_status','1')
                     ->group_by('a.answer')
                     ->get()->result();
            
        }
	/********* food_ultra_processed_sales Report*************/
        /******* author:guruvachan@studiotesseract *************/
        public function getFoodItemSell(){
            return $this->db->select("a.state,a.name,b.name AS state_name,a.location,a.category,a.Q6F2S2,a.Q6F3S2,a.Q6F4S2,a.Q6F5S2,a.Q6F6S2,a.Q6F7S2,a.Q6F8S2,a.Q6F9S2,a.Q6F10S2")
            ->from('tbl_total AS a')
            ->join('states AS b', 'a.state=b.id', 'left')
            ->get()->result();
        }
        
        /********* FOOD PROFILING TRADITIONAL Report*************/
        /******* author:guruvachan@studiotesseract *************/
        public function getFoodProfileTraditional(){
            return $this->db->select("a.state,a.name,b.name AS state_name,a.location,a.category,a.Q7F1S1,a.Q7F1S2,a.Q7F1S3,a.Q7F1S4,a.Q7F1S5")
            ->from('tbl_total AS a')
            ->join('states AS b', 'a.state=b.id', 'left')
            ->get()->result();
        }
        
        /********* FOOD ULTRA PROCESSED FLAVOUR Report*************/
        /******* author:guruvachan@studiotesseract *************/
        public function getFoodFlavour(){
            return $this->db->select("a.state,a.name,b.name AS state_name,a.location,a.category,a.Q6F2S1,a.Q6F3S1,a.Q6F4S1,a.Q6F5S1,a.Q6F6S1,a.Q6F7S1,a.Q6F8S1,a.Q6F9S1,a.Q6F10S1")
            ->from('tbl_total AS a')
            ->join('states AS b', 'a.state=b.id', 'left')
            ->get()->result();
        }
        
        /********* BRANDS SPONSORING EVENTS Report*************/
        /******* author:guruvachan@studiotesseract *************/
        public function getFoodBrandSponser(){
            return $this->db->select("a.state,a.name,b.name AS state_name,a.location,a.category,a.Q11F2,a.Q11F3")
            ->from('tbl_total AS a')
            ->join('states AS b', 'a.state=b.id', 'left')
            ->get()->result();
        }
        
        /********* VEHICLE PROFILING Report*************/
        /******* author:guruvachan@studiotesseract *************/
        public function getVehicleProfile(){
            return $this->db->select("a.state,a.name,b.name AS state_name,a.location,a.category,a.Q6A2S1T1,a.Q6A2S1T2,a.Q6A2S1T3,a.Q6A2S1T4,a.total_disel,a.total_petrol,a.total_lpg,a.total_cng")
            ->from('tbl_total AS a')
            ->join('states AS b', 'a.state=b.id', 'left')
            ->get()->result();
        }
	
	       public function get_registeredpartner($status)
		{
		       $this->db->where('make_school_disabled',"1");
			$this->db->where('partner_status',$status);
		    return $this->db->count_all_results('gsp_school');
			
		}
		
		public function get_startedpartner($status)
		{
			$this->db->where('partner_status',$status);
			$this->db->where('make_school_disabled',"1");
		   $this->db->where("progress >",'5');
		   $this->db->where("progress <",'100');
		   return $this->db->count_all_results('gsp_school');
		}
		
		public function get_completedpartner($status)
		{
			$this->db->where('partner_status',$status);
			$this->db->where('make_school_disabled',"1");
		   $this->db->where("progress =",'100');
		   return $this->db->count_all_results('gsp_school');
			
		}
		
		public function get_notstartedpartner($status)
		{
			$this->db->where('partner_status',$status);
			$this->db->where('make_school_disabled',"1");
		   $this->db->where("progress=",'5');
		   return $this->db->count_all_results('gsp_school');
			
		}
	
	       public function registerparticipationBystate($state)
		{
		 $this->db->where("make_school_disabled","1");       
		return $this->db->select('*')
			            ->from('gsp_school')
			         ->where('state',$state)
					 ->get()
					 ->result();
		   
			
		}
		
		public function startparticipationBystate($state)
		{
			$this->db->where("make_school_disabled","1");
			return $this->db->select('*')
			         ->from('gsp_school')
					 ->where('state',$state)
					 ->where("progress >",'5')
					 ->where("progress <",'100')
		             ->get()
					 ->result();
		}
		
		public function completeparticipationBystate($state)
		{
			 $this->db->where("make_school_disabled","1");
			return $this->db->select('*')
			         ->from('gsp_school')
			->where('state',$state)
		   ->where("progress =",'100')
		    ->get()
					 ->result();
			
		}
		
		public function notstartparticipationBystate($state)
		{
			 $this->db->where("make_school_disabled","1");
			return $this->db->select('*')
			         ->from('gsp_school')
			         ->where('state',$state)
		             ->where("progress=",'5')
		             ->get()
					 ->result();
			
		}
		
		
		
		public function registerparticipationBystatesecondary($state)
		{
			 $this->db->where('a.make_school_disabled',"1");
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			         ->where('a.state',$state)
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer >=',6)
					 ->get()
					 ->result();
			
		}
		
		public function startparticipationBystatesecondary($state)
		{
			$this->db->where('a.make_school_disabled',"1");
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					   ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					   ->where('a.state',$state)
					   ->where("a.progress >",'5')
					   ->where("a.progress <",'100')
					   ->where('b.questionid','Q1G2')
                       ->where('b.answer >=',6)
		               ->get()
					   ->result();
		}
		
		public function completeparticipationBystatesecondary($state)
		{
			$this->db->where('a.make_school_disabled',"1");
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
				    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			        ->where('a.state',$state)
				    ->where("a.progress =",'100')
				    ->where('b.questionid','Q1G2')
                    ->where('b.answer >=',6)
					->get()
					->result();
			
		}
		
		public function notstartparticipationBystatesecondary($state)
		{
			 $this->db->where('a.make_school_disabled',"1");	
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			         ->where('a.state',$state)
                     ->where("a.progress=",'5')
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer >=',6)
		             ->get()
					 ->result();
			
		}
		
		public function registerparticipationBystateprimary($state)
		{
			$this->db->where('a.make_school_disabled',"1");
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			         ->where('a.state',$state)
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer <',6)
					 ->get()
					 ->result();
			
		}
		
		public function startparticipationBystateprimary($state)
		{
			$this->db->where('a.make_school_disabled',"1");
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					   ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					   ->where('a.state',$state)
					   ->where("a.progress >",'5')
					   ->where("a.progress <",'100')
					   ->where('b.questionid','Q1G2')
                       ->where('b.answer <',6)
		               ->get()
					   ->result();
		}
		
		public function completeparticipationBystateprimary($state)
		{
			 $this->db->where('a.make_school_disabled',"1");
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
				    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			            ->where('a.state',$state)
				    ->where("a.progress =",'100')
				    ->where('b.questionid','Q1G2')
                                    ->where('b.answer <',6)
					->get()
					->result();
			
		}
		
		public function notstartparticipationBystateprimary($state)
		{
			 $this->db->where('a.make_school_disabled',"1");
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
			         ->where('a.state',$state)
                     ->where("a.progress=",'5')
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer <',6)
		             ->get()
					 ->result();
			
		}
		
		public function registerparticipationBystateall()
		{
			$this->db->where('a.make_school_disabled','1'); 
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->get()
					 ->result();
					 
			
		}
		
		public function startparticipationBystateall()
		{
			 $this->db->where('a.make_school_disabled','1'); 
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					  ->where("a.progress >",'10')
					   ->where("a.progress <",'100')
					   ->get()
					   ->result();
		}
		
		public function completeparticipationBystateall()
		{
			$this->db->where("complete_status","1");
			 $this->db->where('a.make_school_disabled','1'); 
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
				   ->where("a.progress=",'100')
				   ->get()
				   ->result();
			
		}
		
		public function notstartparticipationBystateall()
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					->where("a.progress=",'5')
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
		
		             
		
		public function registerparticipationBystateallsecondary()
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer  >=',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
					//echo $this->db->last_query();exit; 
			
		}
		
		public function startparticipationBystateallsecondary()
		{
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					     ->where("a.progress >",'10')
					    ->where("a.progress <",'100')
					    ->where('b.questionid','Q1G2')
                        ->where('b.answer >=',6)
				 ->where('a.make_school_disabled','1')
					    ->get()
					    ->result();
		}
		
		public function completeparticipationBystateallsecondary()
		{
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
					->join('gsp_answers as b', 'a.userid=b.userid', 'left')
				     ->where("a.progress =",'100')
				    ->where('b.questionid','Q1G2')
                                    ->where('b.answer >=',6)
				    ->where('a.make_school_disabled','1')
				   ->get()
					->result();
			
		}
		
		public function notstartparticipationBystateallsecondary()
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					  ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					->where("a.progress=",'5')
					->where('b.questionid','Q1G2')
                     ->where('b.answer >=',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
		
		
		public function registerparticipationBystateallprimary()
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer <',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
					 
			
		}
		
		public function startparticipationBystateallprimary()
		{
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					     ->where("a.progress >",'5')
					    ->where("a.progress <",'100')
					    ->where('b.questionid','Q1G2')
                       ->where('b.answer <',6)
				 ->where('a.make_school_disabled','1')
					    ->get()
					    ->result();
		}
		
		public function completeparticipationBystateallprimary()
		{
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
				  	->join('gsp_answers as b', 'a.userid=b.userid', 'left')
				      ->where("a.progress =",'100')
				     ->where('b.questionid','Q1G2')
                                     ->where('b.answer <',6)
				     ->where('a.make_school_disabled','1')
				     ->get()
					->result();
			
		}
		
		public function notstartparticipationBystateallprimary()
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					  ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					->where("a.progress=",'5')
					->where('b.questionid','Q1G2')
                    ->where('b.answer <',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
	
	/* Region Graph */
		
		
		
		public function registerparticipationByregionprimary($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					 ->where_in('a.state',$region1)
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer <',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
					 
			
		}
		
		public function startparticipationByregionprimary($region1)
		{
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
						->where_in('a.state',$region1)
					     ->where("a.progress >",'5')
					    ->where("a.progress <",'100')
					    ->where('b.questionid','Q1G2')
                       ->where('b.answer <',6)
				 ->where('a.make_school_disabled','1')
					    ->get()
					    ->result();
		}
		
		public function completeparticipationByregionprimary($region1)
		{
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
					->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					->where_in('a.state',$region1)
				   ->where("a.progress =",'100')
				    ->where('b.questionid','Q1G2')
                    ->where('b.answer <',6)
				->where('a.make_school_disabled','1')
				   ->get()
					->result();
			
		}
		
		public function notstartparticipationByregionprimary($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					  ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					  ->where_in('a.state',$region1)
					->where("a.progress=",'5')
					->where('b.questionid','Q1G2')
                    ->where('b.answer <',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
		
		
			
		public function registerparticipationByregionsecondary($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					 ->where_in('a.state',$region1)
					 ->where('b.questionid','Q1G2')
                     ->where('b.answer  >=',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
					//echo $this->db->last_query();exit; 
			
		}
		
		public function startparticipationByregionsecondary($region1)
		{
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					    ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
						->where_in('a.state',$region1)
					     ->where("a.progress >",'5')
					    ->where("a.progress <",'100')
					    ->where('b.questionid','Q1G2')
                        ->where('b.answer >=',6)
				 ->where('a.make_school_disabled','1')
					    ->get()
					    ->result();
		}
		
		public function completeparticipationByregionsecondary($region1)
		{
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
					->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					->where_in('a.state',$region1)
				   ->where("a.progress =",'100')
				    ->where('b.questionid','Q1G2')
                     ->where('b.answer >=',6)
				->where('a.make_school_disabled','1')
				   ->get()
					->result();
			
		}
		
		public function notstartparticipationByregionsecondary($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					  ->join('gsp_answers as b', 'a.userid=b.userid', 'left')
					  ->where_in('a.state',$region1)
					->where("a.progress=",'5')
					->where('b.questionid','Q1G2')
                     ->where('b.answer >=',6)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
		
		
		
		public function registerparticipationByregion($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->where_in('a.state',$region1)
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
					 
			
		}
		
		public function startparticipationByregion($region1)
		{
			 return $this->db->select('a.*')
			           ->from('gsp_school As a')
					   ->where_in('a.state',$region1)
					  ->where("a.progress >",'5')
					   ->where("a.progress <",'100')
				 ->where('a.make_school_disabled','1')
					   ->get()
					   ->result();
		}
		
		public function completeparticipationByregion($region1)
		{
			return $this->db->select('a.*')
			        ->from('gsp_school As a')
					->where_in('a.state',$region1)
				   ->where("a.progress =",'100')
				->where('a.make_school_disabled','1')
				   ->get()
					->result();
			
		}
		
		public function notstartparticipationByregion($region1)
		{
			return $this->db->select('a.*')
			         ->from('gsp_school As a')
					 ->where_in('a.state',$region1)
					->where("a.progress=",'5')
				->where('a.make_school_disabled','1')
					 ->get()
					 ->result();
			
		}
		
	
	
}
