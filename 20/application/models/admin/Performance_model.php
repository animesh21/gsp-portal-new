<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
	parent::__construct();
    }

    /*
     * Get Data
     */
   public function getData() {
        return $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
                ->from('gsp_school AS a')
                ->join('states AS b', 'a.state=b.id', 'left')
                ->join('cities AS c', 'a.district=c.id', 'left')
                ->join('gsp_user AS d', 'a.userid=d.id', 'left')
                ->where('a.progress', 100)
                ->order_by('a.id', 'desc')
                ->get()->result();	   
   }
   /* public function getData() {
	$query = $this->db->query("SELECT DISTINCT * FROM tbl_general LEFT JOIN tbl_air ON tbl_general.userid=tbl_air.userid LEFT JOIN tbl_energy ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_food ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_land ON tbl_general.userid=tbl_land.userid LEFT JOIN tbl_water ON tbl_general.userid=tbl_water.userid LEFT JOIN tbl_waste ON tbl_general.userid=tbl_waste.userid LEFT JOIN tbl_feedback ON tbl_general.userid=tbl_feedback.userid  LIMIT 4");
	$data = $query->result();
	return $data;
    }*/

    public function getDataById($id) {
	return $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
			->from('gsp_school AS a')
			->join('states AS b', 'a.state=b.id', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
			->join('gsp_user AS d', 'a.userid=d.id', 'left')
			->where('a.id', $id)
			->order_by('a.id', 'desc')
			->get()->result();
    }

//    public function record()
//    {
//	$query = $this->db->query("SELECT * FROM tbl_general LEFT JOIN tbl_air ON tbl_general.userid=tbl_air.userid LEFT JOIN tbl_energy ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_food ON tbl_general.userid=tbl_food.userid LEFT JOIN tbl_land ON tbl_general.userid=tbl_land.userid LEFT JOIN tbl_water ON tbl_general.userid=tbl_water.userid LEFT JOIN tbl_waste ON tbl_general.userid=tbl_waste.userid LEFT JOIN tbl_feedback ON tbl_general.userid=tbl_feedback.userid");
//	return $query->result();
//    }

   // public function air_performance() {
	//return $this->db->select('a.*, b.id, b.name, c.category, c.population')
		//	->from('tbl_air AS a')
		//	->join('gsp_school AS b', 'a.userid=b.userid', 'left')
		//	->join('tbl_general AS c', 'a.userid=c.userid', 'left')
		//	->get()->result();
  //  }

	 public function air_performance()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_air AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();
		
		
	} 
	
  //  public function schoolgeneral_performance() {
	//return $this->db->select('a.*, b.id, c.name AS state_name, d.name AS district_name')
	//		->from('tbl_general AS a')
	//		->join('gsp_school AS b', 'a.userid=b.userid', 'left')
	//		->join('states AS c', 'a.state=c.id', 'left')
	//		->join('cities AS d', 'a.district=d.id', 'left')
	//		->get()->result();
   // }
	
	 public function schoolgeneral_performance()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name')
							->from('tbl_general AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();
		
		}

    public function feedback_performance() {
	return $this->db->select('a.*, b.id')
			->from('tbl_feedback AS a')
			->join('gsp_school AS b', 'a.userid=b.userid', 'left')
			->get()->result();
    }
	
	

   // public function land() {
	//return  $this->db->select('a.*, b.name,b.id,c.category,c.population')
          //      ->from('tbl_land AS a')
             //    ->join('gsp_school AS b','a.userid=b.userid', 'left')
              //      ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
              //      ->get()->result();
 //   }
	
	public function land() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_land AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}

   // public function food() {
	// return $a= $this->db->select('a.*, b.name,b.id,c.category,c.population')
                 //   ->from('tbl_food AS a')
                  //  ->join('gsp_school AS b','a.userid=b.userid', 'left')
                  //  ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
                  //  ->get()->result();
   // }
	
	public function food() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_food AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	

    //public function energy() {
	//return  $this->db->select('a.*, b.name,b.id,c.category,c.population')
            //    ->from('tbl_energy AS a')
            //   ->join('gsp_school AS b','a.userid=b.userid', 'left')
             //       ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
              //      ->get()->result();
  //  }
	
	public function energy() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_energy AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
  
// public function getDataWater() {
  // return $this->db->select('a.*,b.name,b.id,c.population,c.category')->from('tbl_water AS a')
      //     ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
	//   ->join('tbl_general AS c', 'a.userid=c.userid', 'left') 
       //    ->get()->result();
// }
	
	 public function getDataWater() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_water AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
 
// public function getDataWaste() {
  //return $this->db->select('a.*,b.name,b.id,c.population,c.category')->from('tbl_waste AS a')
    //  ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
	//   ->join('tbl_general AS c', 'a.userid=c.userid', 'left')
      // ->get()->result();
//  }	
  
	public function getDataWaste() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_waste AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	
	
 public function getTotalCalculation() {
return $this->db->select('y.name AS state_name, z.name AS district_name,a.coemail,a.comobile,a.name,a.id,a.userid,c.population,c.category,d.points AS air_point,e.Point AS energy_point ,f.Point As food_point,g.Point AS land_point,h.points AS water_point,b.points AS waste_point')
	    ->from('gsp_school AS a')
	    ->where('a.progress=100')
	    ->join('states AS y', 'a.state=y.id', 'left')
            ->join('cities AS z', 'a.district=z.id', 'left')
            ->join('tbl_waste AS b', 'a.userid=b.userid', 'left')
	    ->join('tbl_general AS c', 'a.userid=c.userid', 'left')
	    ->join('tbl_air AS d', 'a.userid=d.userid', 'left')
	    ->join('tbl_energy AS e', 'a.userid=e.userid', 'left')
	    ->join('tbl_food AS f', 'a.userid=f.userid', 'left')
	    ->join('tbl_land AS g', 'a.userid=g.userid', 'left')
	    ->join('tbl_water AS h', 'a.userid=h.userid', 'left')
	    ->get()->result();
      }

	
	  public function combinedPerformancePoint() {
	    return $this->db->select('a.*,b.name AS state_name, c.name AS district_name, d.schoolemail')->from('tbl_total AS a')
	       ->join('states AS b', 'a.state=b.id', 'left')
	       ->join('cities AS c', 'a.district=c.id', 'left')
	       ->join('gsp_school AS d', 'a.school_id=d.id')        
	       ->get()->result();
	  }	
	
		public function combinedPerformancePoint1() {
	    return $this->db->select('a.*,b.name AS state_name, c.name AS district_name')->from('tbl_total_phase2 AS a')
	       ->join('states AS b', 'a.state=b.id', 'left')
	       ->join('cities AS c', 'a.district=c.id', 'left')
	       ->get()->result();
	  }	
	
	
	public function getLandPrimarySchool()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_land AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
         
         
         
         public function getFoodPrimarySchool()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_food AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	 
	  public function getEnergyPrimarySchool()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_energy AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	 
	  public function getWastePrimarySchool()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_waste AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	
	public function getWaterPrimarySchool()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_water AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	 
	 
	 public function getAirPrimarySchool()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_air AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		
		}
		
		
		 public function getSchoolgeneralPrimarySchool()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name')
							->from('tbl_general AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		
		}
	
	
	public function getExcelPrimarySchool()
	 
		{
// 		$this->db->where("c.make_school_disabled","1");	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,a.category,a.population AS population,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
							->from('tbl_total AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		
		}
		
		public function getExcelSecondarySchool()
	 
		{
// 			$this->db->where("c.make_school_disabled","1");
			$this->db->distinct("a.school_id");
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,a.category AS category,a.population ,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
					->from('tbl_total AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
					->join('gsp_school AS c','b.userid=c.userid', 'left')
					->join('states AS e', 'a.state=e.id', 'left')
					->join('cities AS f', 'a.district=f.id', 'left')
					->where('b.questionid','Q1G2')
					->where('b.answer >', 5)
					->get()->result();	
		}

		public function getExcelSecondaryHome()
	 
		{
// 			$this->db->where("c.make_school_disabled","1");
			$this->db->distinct("a.school_id");
			return $this->db->select('a.*,b.user_id,b.question_id,b.answer,c.name,c.id,a.category AS category,a.population ,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
					->from('tbl_total AS a')	
			        ->join('gsp_quiz_answer As b','a.userid=b.user_id','left')
					->join('gsp_school AS c','b.user_id=c.userid', 'left')
					->join('states AS e', 'a.state=e.id', 'left')
					->join('cities AS f', 'a.district=f.id', 'left')
					// ->where('b.question_id','Q1G2')
					// ->where('b.answer >', 5)
					->get()->result();	
		}
	
	public function getExcelPrimarySchoolPhase_2()	 
		{
		$this->db->where("c.make_school_disabled","1");	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,a.category,a.population AS population,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
							->from('tbl_total_phase2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();		
		}
		
		public function getExcelSecondarySchoolPhase_2()	 
		{
			$this->db->where("c.make_school_disabled","1");
			$this->db->distinct("a.school_id");
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,a.category AS category,a.population ,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
					->from('tbl_total_phase2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
					->join('gsp_school AS c','b.userid=c.userid', 'left')
					->join('states AS e', 'a.state=e.id', 'left')
					->join('cities AS f', 'a.district=f.id', 'left')
					->where('b.questionid','Q1G2')
					->where('b.answer >', 5)
					->get()->result();	
		}
	
		
	 public function air_performance_phase2()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_air_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();
		
		
	} 
	
	            public function schoolgeneral_performance_phase2()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name, c.id AS school_id')
							->from('tbl_general_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();
		
		}
	
	public function land_phase2() {
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_land_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		}
	
	 public function food_phase2() {
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_food_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	
	public function energy_phase2() {
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_energy_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	
	public function getDataWater_phase2() {
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_water_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	
	        public function getDataWaste_phase2() {
	
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_waste_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
							->get()->result();	
		
		}
	
	 public function getLandPrimarySchool_phase2()
	{
		return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_land_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
	 }
	
	 public function getFoodPrimarySchool_phase2()
	 {
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_food_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
	 }
	
	  public function getEnergyPrimarySchool_phase2()
	{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_energy_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	
	 public function getWastePrimarySchool_phase2()
	 {
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_waste_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();	
	 }
	
	 public function getWaterPrimarySchool_phase2()
	{
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population')
							->from('tbl_water_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
			
		
	 }
	
	public function getAirPrimarySchool_phase2()
		{
		  return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category AS category,d.population')
							->from('tbl_air_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		}
	
	 public function getSchoolgeneralPrimarySchool_phase2()
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name, c.id AS school_id')
							->from('tbl_general_phase_2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		
		}
	
	public function getExcelPrimarySchool_phase2()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
							->from('tbl_total_phase2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer <=', 5)
							->get()->result();
		
		}
	
		public function getExcelSecondarySchool_phase2()
	 
		{
			
			return $this->db->select('a.*,b.userid,b.questionid,b.answer,c.name,c.id,d.category,d.population ,e.name AS state_name, f.name AS district_name, c.schoolemail AS schoolemail')
							->from('tbl_total_phase2 AS a')	
			                ->join('gsp_answers As b','a.userid=b.userid','left')
							->join('gsp_school AS c','b.userid=c.userid', 'left')
                 			->join('tbl_general_phase_2 AS d', 'c.userid=d.userid', 'left')
							->join('states AS e', 'a.state=e.id', 'left')
							->join('cities AS f', 'a.district=f.id', 'left')
							->where('b.questionid','Q1G2')
							->where('b.answer >', 5)
				                        ->group_by('a.school_id')
							->get()->result();
		
		}
	
		
	
	
	
	
}
