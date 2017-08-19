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

}
