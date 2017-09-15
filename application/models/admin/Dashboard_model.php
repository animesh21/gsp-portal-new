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
        return $this->db->count_all_results('gsp_school');
    }

    public function getData() {
        return $this->db->select('a.*, b.name AS state_name')
                        ->from('gsp_school AS a')
                        ->join('states AS b', 'a.state=b.id', 'left')
                        ->where('YEAR(a.date_added)', 2017)
                        ->order_by('a.id', 'desc')
                        ->get()->result();
    }
	
	public function totalschool()
	{
		return $this->db->select('*')
					->from('gsp_school')
					->get()->result();
	}
	
	public function school_started_audit()
	{
		return $this->db->select('*')
					->from('gsp_school')
					->where( 'progress >5')
					->get()->result();
	}
	
	public function getschool_started_audit() {
		$this->db->where('progress >', 5);
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function school_that_complete_audit()
	{
		return $this->db->select('*')
					->from('gsp_school')
					->where('progress=100')
					->get()->result();
	}
	public function getschool_that_complete_audit() {
		$this->db->where('progress = 100');
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function school_start_but_not_complete()
	{
		return $this->db->select('*')
					->from('gsp_school')
					->where('progress >', 5)
					->where('progress <', 100)
					->get()->result();
	}
	
	public function getschool_start_but_not_complete() {
		$this->db->where('progress >', 5);
		$this->db->where('progress <', 100);
		return $this->db->count_all_results('gsp_school');
        
	}
	
	public function schools_not_start_the_audit()
	{
		return $this->db->select('*')
						->from('gsp_school')
						->where('progress=5')
						->get()->result();
	}
	public function getschools_not_start_the_audit() {
		$this->db->where('progress = 5');
		return $this->db->count_all_results('gsp_school');

}
}



