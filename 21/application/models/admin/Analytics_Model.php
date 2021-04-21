<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class Analytics_Model extends CI_Model {
      /*
      * Constructor 
      */
       public function __construct() {
	    parent::__construct();
       }
	   /***************************************************/
	   /***************************************************/
	   public function getWaterConsumptionPatternReport($region){
		     $this->db->where("a.id",$region);
	         return $this->db->select("name AS statename")
			 ->from("states as a") 
			 ->get()->row();
	   }
	   /***************************************************/
	   /***************************************************/
	   public function getSchoolData(){
	      return $this->db->select("*")
	      ->from("tbl_total")->get()->result();
	   }
} 