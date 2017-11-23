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
	$query = $this->db->query("SELECT DISTINCT * FROM tbl_general LEFT JOIN tbl_air ON tbl_general.userid=tbl_air.userid LEFT JOIN tbl_energy ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_food ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_land ON tbl_general.userid=tbl_land.userid LEFT JOIN tbl_water ON tbl_general.userid=tbl_water.userid LEFT JOIN tbl_waste ON tbl_general.userid=tbl_waste.userid LEFT JOIN tbl_feedback ON tbl_general.userid=tbl_feedback.userid  LIMIT 4");
	$data = $query->result();
	return $data;
    }

    public function getDataById($id = 1446) {
	return $this->db->select('a.*, b.name AS state_name, c.name AS district_name, d.password')
			->from('gsp_school AS a')
			->join('states AS b', 'a.state=b.id', 'left')
			->join('cities AS c', 'a.district=c.id', 'left')
			->join('gsp_user AS d', 'a.userid=d.id', 'left')
			->where('a.progress', 100)
			->where('a.id', $id)
			->order_by('a.id', 'desc')
			->get()->result();
    }

//    public function record()
//    {
//	$query = $this->db->query("SELECT * FROM tbl_general LEFT JOIN tbl_air ON tbl_general.userid=tbl_air.userid LEFT JOIN tbl_energy ON tbl_general.userid=tbl_energy.userid LEFT JOIN tbl_food ON tbl_general.userid=tbl_food.userid LEFT JOIN tbl_land ON tbl_general.userid=tbl_land.userid LEFT JOIN tbl_water ON tbl_general.userid=tbl_water.userid LEFT JOIN tbl_waste ON tbl_general.userid=tbl_waste.userid LEFT JOIN tbl_feedback ON tbl_general.userid=tbl_feedback.userid");
//	return $query->result();
//    }

    public function air_performance() {
	return $this->db->select('a.*, b.id, b.name, c.category, c.population')
			->from('tbl_air AS a')
			->join('gsp_school AS b', 'a.userid=b.userid', 'left')
			->join('tbl_general AS c', 'a.userid=c.userid', 'left')
			->get()->result();
    }

    public function schoolgeneral_performance() {
	return $this->db->select('a.*, b.id, c.name AS state_name, d.name AS district_name')
			->from('tbl_general AS a')
			->join('gsp_school AS b', 'a.userid=b.userid', 'left')
			->join('states AS c', 'a.state=c.id', 'left')
			->join('cities AS d', 'a.district=d.id', 'left')
			->get()->result();
    }

    public function feedback_performance() {
	return $this->db->select('a.*, b.id')
			->from('tbl_feedback AS a')
			->join('gsp_school AS b', 'a.userid=b.userid', 'left')
			->get()->result();
    }

    public function land() {
	return  $this->db->select('a.*, b.name,b.id,c.category,c.population')
                ->from('tbl_land AS a')
                 ->join('gsp_school AS b','a.userid=b.userid', 'left')
                    ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
                    ->get()->result();
    }

    public function food() {
	 return $a= $this->db->select('a.*, b.name,b.id,c.category,c.population')
                    ->from('tbl_food AS a')
                    ->join('gsp_school AS b','a.userid=b.userid', 'left')
                    ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
                    ->get()->result();
    }

    public function energy() {
	return  $this->db->select('a.*, b.name,b.id,c.category,c.population')
                ->from('tbl_energy AS a')
               ->join('gsp_school AS b','a.userid=b.userid', 'left')
                    ->join('tbl_general AS c', 'b.userid=c.userid', 'left')
                    ->get()->result();
    }
  
 public function getDataWater() {
   return $this->db->select('a.*,b.name,b.id,c.population,c.category')->from('tbl_water AS a')
       ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
	   ->join('tbl_general AS c', 'a.userid=c.userid', 'left')
       ->get()->result();
 }

}
