<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

     

    public function getAllAnswers($userId,$type) {
        $query = $this->db->select('*')->from('gsp_quiz_answer')->where(array('user_id' => $userId, 'type'=>$type))
            ->get();
        $records = array();
        if ($query->num_rows() > 0) {
            $results = $query->result();
            foreach($results as $result)
            {
                $records[''.$result->question_id] = $result->answer;
            }
            return $records;
        }
        return $school = array("test"=>"No Records!");
    }
	
    
	
    public function submitAnswers($argPost,$userId,$type)
    {  
        if($type == 1)
        {
            foreach ($argPost as $key => $value) {
            if(isset($argPost[$key]) && $argPost[$key] != "")
            {
                $query = $this->db->select('*')
                    ->from('gsp_quiz_answer')
                    ->where(array('user_id' => $userId,'type' => $type,'question_id' => $key))
                    ->get();
                if($query->num_rows() > 0)
                {
                    $this->db->set('answer', $argPost[$key])
                        ->where( array('user_id' => $userId,'question_id'=>$key,'type'=>$type ))
                        ->update('gsp_quiz_answer');
                        echo $this->db->last_query();
                    // print_r("Update");
                }
                else
                {
                    $update = array('user_id'=>$userId,'question_id'=>$key,'answer'=>$argPost[$key],'type'=>$type);    
                    $this->db->insert('gsp_quiz_answer',$update);  
                    print_r("insert");

                }
            }
        }
        }

    }
}
?>
