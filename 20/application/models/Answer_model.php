<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAnswers($argPost) {
        $query = $this->db->select('*')
            ->from('gsp_answers')
            ->where(array('userid' => $argPost['userid'],'type' => $argPost['type']))
            ->get();
        $air = array();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach($result as $res)
            {
                $air[''.$res->questionid] = $res->answer;
            }
            return $air;
        }
        return $school = array("test"=>"nil");
    }
    public function getAllAnswers($argPost) {
        $query = $this->db->select('*')
            ->from('gsp_answers')
            ->where(array('userid' => $argPost['userid']))
            ->get();
        $air = array();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach($result as $res)
            {
                $air[''.$res->questionid] = $res->answer;
            }
            return $air;
        }
        return $school = array("test"=>"nil");
    }
	
   public function submitSchoolAnswers($post){
      $type = 0;
      //echo $this->session->userdata('USER_ID');
      //echo '<pre>';print_r($post);die();
        foreach ($post as $key => $value) {
            if(isset($post[$key]) && $post[$key] != "")
            {
                $query = $this->db->select('*')
                    ->from('gsp_answers')
                    ->where(array('userid' => $this->session->userdata('USER_ID'),'type' => $type,'questionid' => $key))
                    ->get();
                if($query->num_rows() > 0)
                {
                    $this->db->set('answer', $value)
                        ->where( array('userid' => $this->session->userdata('USER_ID'),'questionid'=>$key,'type'=>$type )) //which row want to upgrade
                        ->update('gsp_answers');
                    //print_r("Update");
                }
                else
                {
                    $update = array('userid'=>$this->session->userdata('USER_ID'),
                                   'questionid'=>$key,
                                   'answer'=>$value,
                                   'type'=>$type);
                    
		    	
	            $this->db->insert('gsp_answers',$update);//insert if does not exist
		   //echo ($this->db->last_query());	
                  //  print_r("insert");

                }
            }
        }
      
    }	

        function updateteam() {
            $CI = & get_instance();
            $argID = getSchoolId($this->session->userdata('USER_ID'));
            $temp = $CI->db->get_where('progress_year', array('school_id' => $argID))->row();
            if ($argID) {
                $CI->db->where('school_id', $argID);
                $CI->db->update('year_2021', 1);
            }
            //print_r($temp); exit;
        }
      
      
	
    public function submitAnswers($post,$type)
    {
        if($type == 1)
        {
            if(isset($post['Q7G1']) || isset($post['Q7G2']) || isset($post['Q7G3']) || isset($post['Q7G4']) || isset($post['Q7G5']) || isset($post['Q7G6']) || isset($post['Q7G8']) || isset($post['Q7G9']) || isset($post['Q7G10']) || isset($post['Q7G11']) || isset($post['Q7G12']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->like('questionid', 'Q7G');
                $this->db->delete('gsp_answers');
                //echo '<pre>'; print_r($temp); exit;

            }
        }
        if($type == 3)
        {
            if(isset($post['Q9E1S1']) || isset($post['Q9E1S2']) || isset($post['Q9E1S3']) || isset($post['Q9E1S4']) || isset($post['Q9E1S5']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->like('questionid', 'Q9E1S');
                $this->db->delete('gsp_answers');
                //echo $this->db->last_query();
                //exit();
            }
        }

        if($type == 6)
        {
            if(isset($post['Q5W1']) || isset($post['Q5W2']) || isset($post['Q5W3']) || isset($post['Q5W4']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q5W1');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q5W2');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q5W3');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q5W4');
                $this->db->delete('gsp_answers');


            }

            if(isset($post['Q8W2S2S1']) || isset($post['Q8W2S2S2']) || isset($post['Q8W2S2S3']) || isset($post['Q8W2S2S4']) || isset($post['Q8W2S2S5']) || isset($post['Q8W2S2S6']) || isset($post['Q8W2S2S7']) || isset($post['Q8W2S2S8']) || isset($post['Q8W2S2S9'])|| isset($post['Q8W2S2S10']) )
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->like('questionid', 'Q8W2S2S');
                $this->db->delete('gsp_answers');
            }
            if(isset($post['Q6W1']) || isset($post['Q6W2']) || isset($post['Q6W3']) || isset($post['Q6W4']) || isset($post['Q6W5']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q6W1');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q6W2');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q6W3');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q6W4');
                $this->db->delete('gsp_answers');

                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->where('questionid', 'Q6W5');
                $this->db->delete('gsp_answers');



            }
            if(isset($post['Q8W2S31']) || isset($post['Q8W2S32']) || isset($post['Q8W2S33']) || isset($post['Q8W2S34']) || isset($post['Q8W2S35']) || isset($post['Q8W2S36']) || isset($post['Q8W2S37']) || isset($post['Q8W2S38']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->like('questionid', 'Q8W2S3');
                $this->db->delete('gsp_answers');
            }
            if(isset($post['Q8W2S4S21']) || isset($post['Q8W2S4S22']) || isset($post['Q8W2S4S23']) || isset($post['Q8W2S4S24']))
            {
                $this->db->where('userid', $this->session->userdata('USER_ID'));
                $this->db->like('questionid', 'Q8W2S4S2');
                $this->db->delete('gsp_answers');
            }
        }
        if($type == 7)
        {
            $this->db->where('userid', $this->session->userdata('USER_ID'));
            $this->db->like('questionid', 'Q4Wa2S');
            $this->db->delete('gsp_answers');

            //$this->db->where('userid', $this->session->userdata('USER_ID'));
            //$this->db->like('questionid', 'Q8Wa1S');
            //$this->db->delete('gsp_answers');

            $this->db->where('userid', $this->session->userdata('USER_ID'));
            $this->db->like('questionid', 'Q15Wa2S');
            $this->db->delete('gsp_answers');

            $this->db->where('userid', $this->session->userdata('USER_ID'));
            $this->db->like('questionid', 'Q11Wa');
            $this->db->delete('gsp_answers');

        }


        foreach ($post as $key => $value) {
            if(isset($post[$key]) && $post[$key] != "")
            {
                $query = $this->db->select('*')
                    ->from('gsp_answers')
                    ->where(array('userid' => $this->session->userdata('USER_ID'),'type' => $type,'questionid' => $key))
                    ->get();
                if($query->num_rows() > 0)
                {
                    $this->db->set('answer', $post[$key])
                        ->where( array('userid' => $this->session->userdata('USER_ID'),'questionid'=>$key,'type'=>$type )) //which row want to upgrade
                        ->update('gsp_answers');
                    print_r("Update");
                }
                else
                {
                    $update = array('userid'=>$this->session->userdata('USER_ID'),'questionid'=>$key,'answer'=>$post[$key],'type'=>$type);
                    //echo '<pre>';
                    //print_r($update);
		    	
	            $this->db->insert('gsp_answers',$update);//insert if does not exist
		   //echo ($this->db->last_query());	
                    print_r("insert");

                }
            }
        }

        if($type == 1)
        {
            if(isset($post['Q3G1']))
            {
                if($post['Q3G1'] == 1)
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q3G1O');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q3G2');
                    $this->db->delete('gsp_answers');
                    echo '<pre>'; print_r('Deleted');

                }
            }
        }
        if($type == 2)
        {
            if(isset($post['Q4A1']))
            {
                for($x=$post['Q4A1']+1; $x<=10;$x++)
                {
                    $qid = 'Q5A'.$x.'S';
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', $qid);
                    $this->db->delete('gsp_answers');
                }
            }
            if(isset($post['Q6A1']))
            {
                if($post['Q6A1'] == 1 || $post['Q6A1'] == 2)
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q6A2S1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q6A2S3');
                    $this->db->delete('gsp_answers');

                }
            }
            if(isset($post['Q8A1']))
            {
                if($post['Q8A1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q9A1');
                    $this->db->delete('gsp_answers');

                }
            }
        }
        if($type == 3)
        {
            if(isset($post['Q9E1']))
            {
                if($post['Q9E1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q9E1S');
                    $this->db->delete('gsp_answers');

                }
            }

        }
        if($type == 4)
        {
            if(isset($post['Q5F1']))
            {
                if($post['Q5F1'] == 'N')
                {
                    if(isset($post['Q5F1S1']))
                    {
                        $this->db->where('userid', $this->session->userdata('USER_ID'));
                        $this->db->like('questionid', 'Q5F2S');
                        $this->db->delete('gsp_answers');

                        if($post['Q5F1S1'] == 'N')
                        {

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q5F1S2');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q5F1S3');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q5F1S4');
                            $this->db->delete('gsp_answers');


                        }
                    }
                }
                else if($post['Q5F1'] == 'Y')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q5F1S2');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q5F1S3');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q5F1S4');
                    $this->db->delete('gsp_answers');

                }

            }
            if(isset($post['Q4F1']))
            {
                if($post['Q4F1'] == 'Y')
                {
                    if(isset($post['Q7F1']))
                    {
                        if($post['Q7F1'] == 'N')
                        {
                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->like('questionid', 'Q7F1S');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q7F3S1');
                            $this->db->delete('gsp_answers');

                        }

                    }
                    if(isset($post['Q8F1']))
                    {
                        if($post['Q8F1'] == 'N')
                        {
                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->like('questionid', 'Q8F1S');
                            $this->db->delete('gsp_answers');

                        }

                    }

                }
                if($post['Q4F1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q6F');
                    $this->db->delete('gsp_answers');


                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q7F1');
                    $this->db->delete('gsp_answers');


                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q7F1S');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q7F3S1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8F1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8F1S');
                    $this->db->delete('gsp_answers');

                }
            }
            if(isset($post['Q9F1']))
            {
                if($post['Q9F1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q9F2');
                    $this->db->delete('gsp_answers');

                }
            }
            if(isset($post['Q10F1']))
            {
                if($post['Q10F1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q10F2');
                    $this->db->delete('gsp_answers');

                }
            }
            if(isset($post['Q11F1']))
            {
                if($post['Q11F1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q11F2');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q11F3');
                    $this->db->delete('gsp_answers');

                }

            }
            if(isset($post['Q12F1']))
            {
                if($post['Q12F1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q12F2');
                    $this->db->delete('gsp_answers');

                }

            }
        }
        if($type == 5)
        {
        }
        if($type == 6)
        {
            if(isset($post['Q7W1']))
            {
                if($post['Q7W1'] == 'Y')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q7W3');
                    $this->db->delete('gsp_answers');

                }
                else if($post['Q7W1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q7W2');
                    $this->db->delete('gsp_answers');

                }
            }
            if(isset($post['Q8W2']))
            {

                if($post['Q8W2'] ==  'Y')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S6');
                    $this->db->delete('gsp_answers');

                    if(isset($post['Q8W2S1']))
                    {
                        if($post['Q8W2S1'] == 'N')
                        {
                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S1S1');
                            $this->db->delete('gsp_answers');

                        }
                    }
                    if(isset($post['Q8W2S2']))
                    {
                        if($post['Q8W2S2'] == 'N')
                        {
                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S1');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S2');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S3');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S4');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S5');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S6');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S7');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S8');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->like('questionid', 'Q8W2S2S9');
                            $this->db->delete('gsp_answers');

                            $this->db->where('userid', $this->session->userdata('USER_ID'));
                            $this->db->where('questionid', 'Q8W2S2S10');
                            $this->db->delete('gsp_answers');


                        }
                        else if($post['Q8W2S2'] == 'Y')
                        {
                            if(isset($post['Q8W2S2S2']))
                            {
                                if($post['Q8W2S2S2'] == 'N')
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S2S3');
                                    $this->db->delete('gsp_answers');

                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S2S4');
                                    $this->db->delete('gsp_answers');

                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S2S5');
                                    $this->db->delete('gsp_answers');

                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S2S6');
                                    $this->db->delete('gsp_answers');
                                }
                            }
                            if(isset($post['Q8W2S2S7']))
                            {
                                if($post['Q8W2S2S7'] == 'N')
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S2S8');
                                    $this->db->delete('gsp_answers');
                                }
                            }
                            if(empty($post['Q8W2S33']))
                            {
                                $this->db->where('userid', $this->session->userdata('USER_ID'));
                                $this->db->where('questionid', 'Q8W2S4S1');
                                $this->db->delete('gsp_answers');

                                $this->db->where('userid', $this->session->userdata('USER_ID'));
                                $this->db->like('questionid', 'Q8W2S4');
                                $this->db->delete('gsp_answers');
                            }
                            if(isset($post['Q8W2S61']))
                            {
                                if($post['Q8W2S61'] == 'N')
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S7');
                                    $this->db->delete('gsp_answers');
                                }

                            }
                            if(isset($post['Q8W2S8']))
                            {
                                if($post['Q8W2S8'] == 'N')
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S9');
                                    $this->db->delete('gsp_answers');
                                }

                            }
                            if(isset($post['Q8W2S10']))
                            {
                                if($post['Q8W2S10'] == 1)
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S12');
                                    $this->db->delete('gsp_answers');
                                }
                                else if($post['Q8W2S10'] == 2)
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S11');
                                    $this->db->delete('gsp_answers');
                                }
                                else if($post['Q8W2S10'] == 3)
                                {
                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S12');
                                    $this->db->delete('gsp_answers');

                                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                                    $this->db->where('questionid', 'Q8W2S11');
                                    $this->db->delete('gsp_answers');
                                }

                            }
                        }
                    }
                }
                if($post['Q8W2'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2');
                    $this->db->delete('gsp_answers');



                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S2');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S3');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S4');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S5');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S6');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S7');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S8');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8W2S2S9');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S2S10');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8W2S3');
                    $this->db->delete('gsp_answers');


                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S4S1');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8W2S4');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8W2S4S2');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S5');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S61');
                    $this->db->delete('gsp_answers');


                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S7');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S8');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S10');
                    $this->db->delete('gsp_answers');


                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S9');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S12');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S11');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q8W2S13');
                    $this->db->delete('gsp_answers');


                }
            }
        }
        if($type == 7)
        {
            echo "Deleted Waste";
            if(isset($post['Q4Wa1']))
            {
                if($post['Q4Wa1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q4Wa2S');
                    $this->db->delete('gsp_answers');
                }

            }
            if(isset($post['Q8Wa1']))
                if($post['Q8Wa1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q8Wa1S');
                    $this->db->delete('gsp_answers');
                }
            if(isset($post['Q13Wa1']))
            {
                if($post['Q13Wa1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q13Wa2');
                    $this->db->delete('gsp_answers');
                }
                else if($post['Q13Wa2'] == 1 || $post['Q13Wa2'] == 2 || $post['Q13Wa2'] == 3|| $post['Q13Wa2'] == 4)
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q13Wa2O');
                    $this->db->delete('gsp_answers');   
                }
            }
            if(isset($post['Q15Wa1']))
            {
                if($post['Q15Wa1'] == 'N')
                {
                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->where('questionid', 'Q15Wa2');
                    $this->db->delete('gsp_answers');

                    $this->db->where('userid', $this->session->userdata('USER_ID'));
                    $this->db->like('questionid', 'Q15Wa2S');
                    $this->db->delete('gsp_answers');
                }
            }
        }





    }
    public function Answers($argPost) {
        $query = $this->db->select('*')
            ->from('gsp_answers')
            ->where(array('userid' => $argPost))
            ->get();
        $air = array();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach($result as $res)
            {
                $air[''.$res->questionid] = array('Answer' => $res->answer,'type'=>$res->type,'user'=>$res->userid) ;
            }
            return $air;
        }
        return $school = array("test"=>"nil");
    }
    public function SubmitAPIAnswers($data)
    {
        if(isset($data))
        {
            $query = $this->db->select('*')
                ->from('gsp_answers')
                ->where(array('userid' => $data['userid'],'type' => $data['type'],'questionid' => $data['questionid']))
                ->get();
            if($query->num_rows() > 0)
            {
                $this->db->set('answer', $data['answer'])
                    ->where( array('userid' => $data['userid'],'questionid'=>$data['questionid'],'type'=>$data['type'] )) //which row want to upgrade
                    ->update('gsp_answers');
                return "Updated";

            }
            else
            {
                $update = array('userid'=>$data['userid'],'questionid'=>$data['questionid'],'answer'=>$data['answer'],'type'=>$data['type']);
                $this->db->insert('gsp_answers',$update);//insert if does not exist
                //print_r("insert");
                return "Inserted";

            }
        }


    }
}
?>
