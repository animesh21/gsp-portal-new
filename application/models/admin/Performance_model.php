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

}
