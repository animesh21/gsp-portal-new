<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Audit_started_model extends CI_Model {
    /*
     * Constructor 
     */

    public function __construct() {
        parent::__construct();
    }

    /*
     * Get School Data
     */
    public function getData()
    {
        return $this->db->get('gsp_school')->result();
    }
    

}
