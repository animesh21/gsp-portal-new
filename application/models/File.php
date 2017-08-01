<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class File extends CI_Model {

    public function getRows($id = '') {
        $this->db->select('id,file_name,created');
        $this->db->from('files');
        if ($id) {
            $this->db->where('id', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            $this->db->order_by('created', 'desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result) ? $result : false;
    }

    public function insert($data = array()) {
        if ($this->db->insert_batch('files', $data)) {
            return true;
        }
        return false;
    }

    //Get Data of File
    public function getFilesData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Supporting_Document_Air')
                        ->get()->result();
//            return $this->db->where('userid', $argID)
//                            ->like('file_name', 'Supporting_Document_Air')
//                            ->get('files')->result();
    }
    
    //Get Data of File
    public function getFilesDatafules($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Fuels')
                        ->get()->result();
//            return $this->db->where('userid', $argID)
//                            ->like('file_name', 'Supporting_Document_Air')
//                            ->get('files')->result();
    }
    
    //Remove File
    public function removeFiles($argID) {
        $sql = $this->db->select('*')
                ->from('files')
                ->where('id', $argID)
                ->get()
                ->row();
        //Remove File
        //echo '<pre>';            print_r($sql); exit;
        $path = '.uploads/files/';
        if (file_exists($path . $sql->file_name)) {
            unlink($path . $sql->file_name);
        }
        //Deleting files from Data base
        $this->db->where('id', $argID);
        if ($this->db->delete('files')) {
            return true;
        }
        return false;
    }
    
    //Electricity Bills
    public function getElectricityFulesBillsData($argID)
    {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Electricity_Bill')
                        ->get()->result();
    }
    
    //Get Files For Fule Bills
    public function getEnergyFulesBillsData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Fuels_Bills')
                        ->get()->result();
    }
    
    //Get Appliances Bills Data
    public function getEnergyApplianceBillsData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Five_Star_Appliances')
                        ->get()->result();
    }
    
    //Get Alternative Resource
    public function alternativeResource($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Alternative_Source_of_Energy')
                        ->get()->result();
    }
    
     //Get Energy Support Bills Data
    public function getEnergySupportData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Supporting_Document_Energy')
                        ->get()->result();
    }
    
    //Get Mid Day Meal Files
    public function getMidDayMeal($argID)
    {
         return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Mid_Day_Meal')
                        ->get()->result();
    }
    
    //Get Canteen Files
    public function getCanteen($argID)
    {
         return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Canteen_Food_Items')
                        ->get()->result();
    }
    
    //Get Food Files Data
    public function getFoodFilesData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'Audit_Team_doing_Survey')
                        ->get()->result();
    }
    
    //Get Food Files UPPC Data
    public function getFoodUPPCData($argID) {
        return $this->db->select('a.*, b.name')
                        ->from('files AS a')
                        ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
                        ->where('a.userid', $argID)
                        ->like('a.file_name', 'UPPF')
                        ->get()->result();
    }
}
