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
		
		/* total_answer */
				$get_school_id=$this->db->select('*')
				                       ->from('gsp_school')
									   ->where('userid',$this->session->userdata('USER_ID'))
									   ->get()
									   ->result();
									   
								$school_id = $get_school_id[0]->id;	
									   
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'name'=>$this->input->post('name'),
					'address1'=>$this->input->post('address1'),
					'address2'=>$this->input->post('address2'),
					'country'=>$this->input->post('country'),
					'state'=>$this->input->post('state'),
					'district'=>$this->input->post('district'),
					'city'=>$this->input->post('city'),
					'pincode'=>$this->input->post('pincode'),
					'std'=>$this->input->post('std'),
					'landline'=>$this->input->post('telephone'),
					'mobile'=>$this->input->post('mobile'),
					'principal'=>$this->input->post('principle_name'),
					'codinator'=>$this->input->post('coname'),
					'codinator_mail'=>$this->input->post('coemail'),
					'codinator_mobile'=>$this->input->post('comobile'),
					'category'=>$this->input->post('Q1S1'),
					'shifts'=>$this->input->post('Q2S1')
					);
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    //print_r("Update");
                }
                else
                {
                    $update = array('userid'=>$this->session->userdata('USER_ID'),
					                'school_id'=>$school_id,
                                   'name'=>$this->input->post('name'),
					'address1'=>$this->input->post('address1'),
					'address2'=>$this->input->post('address2'),
					'country'=>$this->input->post('country'),
					'state'=>$this->input->post('state'),
					'district'=>$this->input->post('district'),
					'city'=>$this->input->post('city'),
					'pincode'=>$this->input->post('pincode'),
					'std'=>$this->input->post('std'),
					'landline'=>$this->input->post('telephone'),
					'mobile'=>$this->input->post('mobile'),
					'principal'=>$this->input->post('principle_name'),
					'codinator'=>$this->input->post('coname'),
					'codinator_mail'=>$this->input->post('coemail'),
					'codinator_mobile'=>$this->input->post('comobile'),
					'category'=>$this->input->post('Q1S1'),
					'shifts'=>$this->input->post('Q2S1')
                     );
                    
		    	
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
				
		
		
      
    }	
	
	
    public function submitAnswers($post,$type)
    {
        if($type == 1)
        {
			$post = $this->input->post();
		
			//print_r($post);exit;
			
			
			/* total_answer */
				
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'lowest_level'=>$this->input->post('Q1G1'),
					'higest_level'=>$this->input->post('Q1G2'),
					'gender'=>$this->input->post('Q2G1'),
					'educatio_board'=>$this->input->post('Q3G1'),
					'other_board'=>$this->input->post('Q3G1O'),
					'state_board'=>$this->input->post('Q3G2'),
					'population'=>$this->input->post('Q4G4S3'),
					'students'=>$this->input->post('Q4G1S3'),
					'teachers'=>$this->input->post('Q4G2S3'),
					'nonteachers'=>$this->input->post('Q4G3S3'),
					'male'=>$this->input->post('Q4G4S1'),
					'female'=>$this->input->post('Q4G4S2'),
					'visitor'=>$this->input->post('Q5G1'),
					'working_days'=>$this->input->post('Q6G1'),
					'location'=>$this->input->post('Q8G1'),
					'aid'=>$this->input->post('Q9G1')
					);
					$auditList="";
					if(!empty($this->input->post('Q7G1'))){
						$auditList.=$this->input->post('Q7G1').",";
					}
					if(!empty($this->input->post('Q7G2'))){
						$auditList.=$this->input->post('Q7G2').",";
					}
					if(!empty($this->input->post('Q7G3'))){
						$auditList.=$this->input->post('Q7G3').",";
					}
					if(!empty($this->input->post('Q7G4'))){
						$auditList.=$this->input->post('Q7G4').",";
					}
					if(!empty($this->input->post('Q7G5'))){
						$auditList.=$this->input->post('Q7G5').",";
					}
					if(!empty($this->input->post('Q7G6'))){
						$auditList.=$this->input->post('Q7G6').",";
					}
					if(!empty($this->input->post('Q7G7'))){
						$auditList.=$this->input->post('Q7G7').",";
					}
					if(!empty($this->input->post('Q7G8'))){
						$auditList.=$this->input->post('Q7G8').",";
					}
					if(!empty($this->input->post('Q7G9'))){
						$auditList.=$this->input->post('Q7G9').",";
					}
					if(!empty($this->input->post('Q7G10'))){
						$auditList.=$this->input->post('Q7G10').",";
					}
					if(!empty($this->input->post('Q7G11'))){
						$auditList.=$this->input->post('Q7G11').",";
					}
					if(!empty($this->input->post('Q7G12'))){
						$auditList.=$this->input->post('Q7G12').",";
					}
					
					$schoolprofile['audit_period']= $auditList;
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    //print_r("Update");
                }
                else
                {
                    $update = array('lowest_level'=>$this->input->post('Q1G1'),
					'higest_level'=>$this->input->post('Q1G2'),
					'gender'=>$this->input->post('Q2G1'),
					'educatio_board'=>$this->input->post('Q3G1'),
					'other_board'=>$this->input->post('Q3G1O'),
					'state_board'=>$this->input->post('Q3G2'),
					'population'=>$this->input->post('Q4G4S3'),
					'students'=>$this->input->post('Q4G1S3'),
					'teachers'=>$this->input->post('Q4G2S3'),
					'nonteachers'=>$this->input->post('Q4G3S3'),
					'male'=>$this->input->post('Q4G4S1'),
					'female'=>$this->input->post('Q4G4S2'),
					'visitor'=>$this->input->post('Q5G1'),
					'working_days'=>$this->input->post('Q6G1'),
					'location'=>$this->input->post('Q8G1'),
					'aid'=>$this->input->post('Q9G1')
                     );
                     $auditList="";
					if(!empty($this->input->post('Q7G1'))){
						$auditList.=$this->input->post('Q7G1').",";
					}
					if(!empty($this->input->post('Q7G2'))){
						$auditList.=$this->input->post('Q7G2').",";
					}
					if(!empty($this->input->post('Q7G3'))){
						$auditList.=$this->input->post('Q7G3').",";
					}
					if(!empty($this->input->post('Q7G4'))){
						$auditList.=$this->input->post('Q7G4').",";
					}
					if(!empty($this->input->post('Q7G5'))){
						$auditList.=$this->input->post('Q7G5').",";
					}
					if(!empty($this->input->post('Q7G6'))){
						$auditList.=$this->input->post('Q7G6').",";
					}
					if(!empty($this->input->post('Q7G7'))){
						$auditList.=$this->input->post('Q7G7').",";
					}
					if(!empty($this->input->post('Q7G8'))){
						$auditList.=$this->input->post('Q7G8').",";
					}
					if(!empty($this->input->post('Q7G9'))){
						$auditList.=$this->input->post('Q7G9').",";
					}
					if(!empty($this->input->post('Q7G10'))){
						$auditList.=$this->input->post('Q7G10').",";
					}
					if(!empty($this->input->post('Q7G11'))){
						$auditList.=$this->input->post('Q7G11').",";
					}
					if(!empty($this->input->post('Q7G12'))){
						$auditList.=$this->input->post('Q7G12').",";
					}
					
					$schoolprofile['audit_period']= $auditList;
		    	
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
			
			
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
			
			
			/* total_answer */
				
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'Q4A1'=>$this->input->post('Q4A1'),
					'Q5A110S2'=>$this->input->post('Q5A110S2'),
					'Q5A110S3'=>$this->input->post('Q5A110S3'),
					'Q6A1'=>$this->input->post('Q6A1'),
					'Q6A2S1T1'=>$this->input->post('Q6A2S1T1'),
					'Q6A2S1T2'=>$this->input->post('Q6A2S1T2'),
					'Q6A2S1T3'=>$this->input->post('Q6A2S1T3'),
					'Q6A2S1T4'=>$this->input->post('Q6A2S1T4'),
					'Q6A2S1T5'=>$this->input->post('Q6A2S1T5'),
					'Q6A2S1T6'=>$this->input->post('Q6A2S1T6'),
					'Q6A2S3D1'=>$this->input->post('Q6A2S3D1'),
					'Q6A2S3P1'=>$this->input->post('Q6A2S3P1'),
					'Q6A2S3L1'=>$this->input->post('Q6A2S3L1'),
					'Q6A2S3C1'=>$this->input->post('Q6A2S3C1'),
					'Q6A2S3E1'=>$this->input->post('Q6A2S3E1'),
					'Q6A2S3H1'=>$this->input->post('Q6A2S3H1'),
					'Q6A2S3B1'=>$this->input->post('Q6A2S3B1'),
					'Q6A2S3B2'=>$this->input->post('Q6A2S3B2'),
					'Q6A2S3D2'=>$this->input->post('Q6A2S3D2'),
					'Q6A2S3P2'=>$this->input->post('Q6A2S3P2'),
					'Q6A2S3L2'=>$this->input->post('Q6A2S3L2'),
					'Q6A2S3C2'=>$this->input->post('Q6A2S3C2'),
					'Q6A2S3E2'=>$this->input->post('Q6A2S3E2'),
					'Q6A2S3H2'=>$this->input->post('Q6A2S3H2'),
					'Q6A2S3D3'=>$this->input->post('Q6A2S3D3'),
					'Q6A2S3P3'=>$this->input->post('Q6A2S3P3'),
					'Q6A2S3L3'=>$this->input->post('Q6A2S3L3'),
					'Q6A2S3C3'=>$this->input->post('Q6A2S3C3'),
					'Q6A2S3E3'=>$this->input->post('Q6A2S3E3'),
					'Q6A2S3H3'=>$this->input->post('Q6A2S3H3'),
					'Q6A2S3B3'=>$this->input->post('Q6A2S3B3'),
					'Q6A2S3D4'=>$this->input->post('Q6A2S3D4'),
					'Q6A2S3P4'=>$this->input->post('Q6A2S3P4'),
					'Q6A2S3L4'=>$this->input->post('Q6A2S3L4'),
					'Q6A2S3C4'=>$this->input->post('Q6A2S3C4'),
					'Q6A2S3E4'=>$this->input->post('Q6A2S3E4'),
					'Q6A2S3H4'=>$this->input->post('Q6A2S3H4'),
					'Q6A2S3B4'=>$this->input->post('Q6A2S3B4'),
					'total_disel'=>$this->input->post('Q6A2S3D5'),
					'total_petrol'=>$this->input->post('Q6A2S3P5'),
					'total_lpg'=>$this->input->post('Q6A2S3L5'),
					'total_cng'=>$this->input->post('Q6A2S3C5'),
					'total_hybrid'=>$this->input->post('Q6A2S3E5'),
					'total_electric'=>$this->input->post('Q6A2S3H5'),
					'total_biofuel'=>$this->input->post('Q6A2S3B5'),
					'Q6A3'=>$this->input->post('Q6A3'),
					'Q6A4S1'=>$this->input->post('Q6A4S1'),
					'Q7A1S1'=>$this->input->post('Q7A1S1'),
					'Q7A1S2'=>$this->input->post('Q7A1S2'),
					'Q7A1S3'=>$this->input->post('Q7A1S3'),
					'Q7A1S4'=>$this->input->post('Q7A1S4'),
					'Q7A2S1'=>$this->input->post('Q7A2S1'),
					'Q7A2S2'=>$this->input->post('Q7A2S2'),
					'Q7A2S3'=>$this->input->post('Q7A2S3'),
					'Q7A2S4'=>$this->input->post('Q7A2S4'),
					'Q7A3S1'=>$this->input->post('Q7A3S1'),
					'Q7A3S2	'=>$this->input->post('Q7A3S2'),
					'Q7A3S3'=>$this->input->post('Q7A3S3'),
					'Q7A3S4'=>$this->input->post('Q7A3S4'),
					'Q7A4S1'=>$this->input->post('Q7A4S1'),
					'Q7A4S2'=>$this->input->post('Q7A4S2'),
					'Q7A4S3'=>$this->input->post('Q7A4S3'),
					'Q7A4S4'=>$this->input->post('Q7A4S4'),
					'Q7A5S1'=>$this->input->post('Q7A5S1'),
					'Q7A5S2'=>$this->input->post('Q7A5S2'),
					'Q7A5S3'=>$this->input->post('Q7A5S3'),
					'Q7A5S4'=>$this->input->post('Q7A5S4'),
					'Q7A6S1'=>$this->input->post('Q7A6S1'),
					'Q7A6S2'=>$this->input->post('Q7A6S2'),
					'Q7A6S3'=>$this->input->post('Q7A6S3'),
					'Q7A6S4'=>$this->input->post('Q7A6S4'),
					'Q7A7S1'=>$this->input->post('Q7A7S1'),
					'Q7A7S2'=>$this->input->post('Q7A7S2'),
					'Q7A7S3'=>$this->input->post('Q7A7S3'),
					'Q7A7S4'=>$this->input->post('Q7A7S4'),
					'Q7A8S1'=>$this->input->post('Q7A8S1'),
					'Q7A8S2'=>$this->input->post('Q7A8S2'),
					'Q7A8S3'=>$this->input->post('Q7A8S3'),
					'Q7A8S4'=>$this->input->post('Q7A8S4'),
					'Q7A9S1'=>$this->input->post('Q7A9S1'),
					'Q7A9S2'=>$this->input->post('Q7A9S2'),
					'Q7A9S3'=>$this->input->post('Q7A9S3'),
					'Q7A9S4'=>$this->input->post('Q7A9S4'),
					'Q7A10S1'=>$this->input->post('Q7A10S1'),
					'Q7A10S2'=>$this->input->post('Q7A10S2'),
					'Q7A10S3'=>$this->input->post('Q7A10S3'),
					'Q7A10S4'=>$this->input->post('Q7A10S4'),
					'Q7A11S1'=>$this->input->post('Q7A11S1'),
					'Q7A11S2'=>$this->input->post('Q7A11S2'),
					'Q7A11S3'=>$this->input->post('Q7A11S3'),
					'Q7A11S4'=>$this->input->post('Q7A11S4'),
					'Q8A1'=>$this->input->post('Q8A1'),
					'Q9A1'=>$this->input->post('Q9A1'),
					'Q9A2'=>$this->input->post('Q9A2'),
					);
					
					$total_buses=$this->input->post('Q6A2S3D1')+$this->input->post('Q6A2S3P1')+$this->input->post('Q6A2S3L1')+$this->input->post('Q6A2S3C1')+$this->input->post('Q6A2S3E1')+$this->input->post('Q6A2S3H1')+$this->input->post('Q6A2S3B1');
					
				    $total_cars=$this->input->post('Q6A2S3B2')+$this->input->post('Q6A2S3D2')+$this->input->post('Q6A2S3P2')+$this->input->post('Q6A2S3L2')+$this->input->post('Q6A2S3C2')+$this->input->post('Q6A2S3E2')+$this->input->post('Q6A2S3H2');
					
					$total_vans=$this->input->post('Q6A2S3D3')+$this->input->post('Q6A2S3P3')+$this->input->post('Q6A2S3L3')+$this->input->post('Q6A2S3C3')+$this->input->post('Q6A2S3E3')+$this->input->post('Q6A2S3H3')+$this->input->post('Q6A2S3B3');
					
					$total_other=$this->input->post('Q6A2S3D4')+$this->input->post('Q6A2S3P4')+$this->input->post('Q6A2S3L4')+$this->input->post('Q6A2S3C4')+$this->input->post('Q6A2S3E4')+$this->input->post('Q6A2S3H4')+$this->input->post('Q6A2S3B4');
					
					$schoolprofile['total_buses']=$total_buses;
					$schoolprofile['total_cars']=$total_cars;
					$schoolprofile['total_vans']=$total_vans;
					$schoolprofile['total_other']=$total_other;
					 
					
					
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    
                }
                else
                {
                    $update = array(
					'Q4A1'=>$this->input->post('Q4A1'),
					'Q5A110S2'=>$this->input->post('Q5A110S2'),
					'Q5A110S3'=>$this->input->post('Q5A110S3'),
					'Q6A1'=>$this->input->post('Q6A1'),
					'Q6A2S1T1'=>$this->input->post('Q6A2S1T1'),
					'Q6A2S1T2'=>$this->input->post('Q6A2S1T2'),
					'Q6A2S1T3'=>$this->input->post('Q6A2S1T3'),
					'Q6A2S1T4'=>$this->input->post('Q6A2S1T4'),
					'Q6A2S1T5'=>$this->input->post('Q6A2S1T5'),
					'Q6A2S1T6'=>$this->input->post('Q6A2S1T6'),
					'Q6A2S3D1'=>$this->input->post('Q6A2S3D1'),
					'Q6A2S3P1'=>$this->input->post('Q6A2S3P1'),
					'Q6A2S3L1'=>$this->input->post('Q6A2S3L1'),
					'Q6A2S3C1'=>$this->input->post('Q6A2S3C1'),
					'Q6A2S3E1'=>$this->input->post('Q6A2S3E1'),
					'Q6A2S3H1'=>$this->input->post('Q6A2S3H1'),
					'Q6A2S3B1'=>$this->input->post('Q6A2S3B1'),
					'Q6A2S3B2'=>$this->input->post('Q6A2S3B2'),
					'Q6A2S3D2'=>$this->input->post('Q6A2S3D2'),
					'Q6A2S3P2'=>$this->input->post('Q6A2S3P2'),
					'Q6A2S3L2'=>$this->input->post('Q6A2S3L2'),
					'Q6A2S3C2'=>$this->input->post('Q6A2S3C2'),
					'Q6A2S3E2'=>$this->input->post('Q6A2S3E2'),
					'Q6A2S3H2'=>$this->input->post('Q6A2S3H2'),
					'Q6A2S3D3'=>$this->input->post('Q6A2S3D3'),
					'Q6A2S3P3'=>$this->input->post('Q6A2S3P3'),
					'Q6A2S3L3'=>$this->input->post('Q6A2S3L3'),
					'Q6A2S3C3'=>$this->input->post('Q6A2S3C3'),
					'Q6A2S3E3'=>$this->input->post('Q6A2S3E3'),
					'Q6A2S3H3'=>$this->input->post('Q6A2S3H3'),
					'Q6A2S3B3'=>$this->input->post('Q6A2S3B3'),
					'Q6A2S3D4'=>$this->input->post('Q6A2S3D4'),
					'Q6A2S3P4'=>$this->input->post('Q6A2S3P4'),
					'Q6A2S3L4'=>$this->input->post('Q6A2S3L4'),
					'Q6A2S3C4'=>$this->input->post('Q6A2S3C4'),
					'Q6A2S3E4'=>$this->input->post('Q6A2S3E4'),
					'Q6A2S3H4'=>$this->input->post('Q6A2S3H4'),
					'Q6A2S3B4'=>$this->input->post('Q6A2S3B4'),
					'total_disel'=>$this->input->post('Q6A2S3D5'),
					'total_petrol'=>$this->input->post('Q6A2S3P5'),
					'total_lpg'=>$this->input->post('Q6A2S3L5'),
					'total_cng'=>$this->input->post('Q6A2S3C5'),
					'total_hybrid'=>$this->input->post('Q6A2S3E5'),
					'total_electric'=>$this->input->post('Q6A2S3H5'),
					'total_biofuel'=>$this->input->post('Q6A2S3B5'),
					'Q6A3'=>$this->input->post('Q6A3'),
					'Q6A4S1'=>$this->input->post('Q6A4S1'),
					'Q7A1S1'=>$this->input->post('Q7A1S1'),
					'Q7A1S2'=>$this->input->post('Q7A1S2'),
					'Q7A1S3'=>$this->input->post('Q7A1S3'),
					'Q7A1S4'=>$this->input->post('Q7A1S4'),
					'Q7A2S1'=>$this->input->post('Q7A2S1'),
					'Q7A2S2'=>$this->input->post('Q7A2S2'),
					'Q7A2S3'=>$this->input->post('Q7A2S3'),
					'Q7A2S4'=>$this->input->post('Q7A2S4'),
					'Q7A3S1'=>$this->input->post('Q7A3S1'),
					'Q7A3S2	'=>$this->input->post('Q7A3S2'),
					'Q7A3S3'=>$this->input->post('Q7A3S3'),
					'Q7A3S4'=>$this->input->post('Q7A3S4'),
					'Q7A4S1'=>$this->input->post('Q7A4S1'),
					'Q7A4S2'=>$this->input->post('Q7A4S2'),
					'Q7A4S3'=>$this->input->post('Q7A4S3'),
					'Q7A4S4'=>$this->input->post('Q7A4S4'),
					'Q7A5S1'=>$this->input->post('Q7A5S1'),
					'Q7A5S2'=>$this->input->post('Q7A5S2'),
					'Q7A5S3'=>$this->input->post('Q7A5S3'),
					'Q7A5S4'=>$this->input->post('Q7A5S4'),
					'Q7A6S1'=>$this->input->post('Q7A6S1'),
					'Q7A6S2'=>$this->input->post('Q7A6S2'),
					'Q7A6S3'=>$this->input->post('Q7A6S3'),
					'Q7A6S4'=>$this->input->post('Q7A6S4'),
					'Q7A7S1'=>$this->input->post('Q7A7S1'),
					'Q7A7S2'=>$this->input->post('Q7A7S2'),
					'Q7A7S3'=>$this->input->post('Q7A7S3'),
					'Q7A7S4'=>$this->input->post('Q7A7S4'),
					'Q7A8S1'=>$this->input->post('Q7A8S1'),
					'Q7A8S2'=>$this->input->post('Q7A8S2'),
					'Q7A8S3'=>$this->input->post('Q7A8S3'),
					'Q7A8S4'=>$this->input->post('Q7A8S4'),
					'Q7A9S1'=>$this->input->post('Q7A9S1'),
					'Q7A9S2'=>$this->input->post('Q7A9S2'),
					'Q7A9S3'=>$this->input->post('Q7A9S3'),
					'Q7A9S4'=>$this->input->post('Q7A9S4'),
					'Q7A10S1'=>$this->input->post('Q7A10S1'),
					'Q7A10S2'=>$this->input->post('Q7A10S2'),
					'Q7A10S3'=>$this->input->post('Q7A10S3'),
					'Q7A10S4'=>$this->input->post('Q7A10S4'),
					'Q7A11S1'=>$this->input->post('Q7A11S1'),
					'Q7A11S2'=>$this->input->post('Q7A11S2'),
					'Q7A11S3'=>$this->input->post('Q7A11S3'),
					'Q7A11S4'=>$this->input->post('Q7A11S4'),
					'Q8A1'=>$this->input->post('Q8A1'),
					'Q9A1'=>$this->input->post('Q9A1'),
					'Q9A2'=>$this->input->post('Q9A2'),
					);
					
					$total_buses=$this->input->post('Q6A2S3D1')+$this->input->post('Q6A2S3P1')+$this->input->post('Q6A2S3L1')+$this->input->post('Q6A2S3C1')+$this->input->post('Q6A2S3E1')+$this->input->post('Q6A2S3H1')+$this->input->post('Q6A2S3B1');
					
				    $total_cars=$this->input->post('Q6A2S3B2')+$this->input->post('Q6A2S3D2')+$this->input->post('Q6A2S3P2')+$this->input->post('Q6A2S3L2')+$this->input->post('Q6A2S3C2')+$this->input->post('Q6A2S3E2')+$this->input->post('Q6A2S3H2');
					
					$total_vans=$this->input->post('Q6A2S3D3')+$this->input->post('Q6A2S3P3')+$this->input->post('Q6A2S3L3')+$this->input->post('Q6A2S3C3')+$this->input->post('Q6A2S3E3')+$this->input->post('Q6A2S3H3')+$this->input->post('Q6A2S3B3');
					
					$total_other=$this->input->post('Q6A2S3D4')+$this->input->post('Q6A2S3P4')+$this->input->post('Q6A2S3L4')+$this->input->post('Q6A2S3C4')+$this->input->post('Q6A2S3E4')+$this->input->post('Q6A2S3H4')+$this->input->post('Q6A2S3B4');
					
					$update['total_buses']=$total_buses;
					$update['total_cars']=$total_cars;
					$update['total_vans']=$total_vans;
					$update['total_other']=$total_other;
		    	
				 
				
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
			
			
			
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
			
			$d=$this->input->post();
			//print_r($d);exit;
			
			/* total_answer */
				
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'Q4E1'=>$this->input->post('Q4E1'),
					'Q5E1'=>$this->input->post('Q5E1'),
					'Q6E1S1'=>$this->input->post('Q6E1S1'),
					'Q6E2S1'=>$this->input->post('Q6E2S1'),
					'Q6E3S1'=>$this->input->post('Q6E3S1'),
					'Q6E4S1'=>$this->input->post('Q6E4S1'),
					'Q6E5S1'=>$this->input->post('Q6E5S1'),
					'Q6E6S1'=>$this->input->post('Q6E6S1'),
					'Q6E7S1'=>$this->input->post('Q6E7S1'),
					'Q6E16S1'=>$this->input->post('Q6E16S1'),
					'Q6E8S1'=>$this->input->post('Q6E8S1'),
					'Q6E9S1'=>$this->input->post('Q6E9S1'),
					'Q6E10S1'=>$this->input->post('Q6E10S1'),
					'Q6E11S1'=>$this->input->post('Q6E11S1'),
					'Q6E12S1'=>$this->input->post('Q6E12S1'),
					'Q6E13S1'=>$this->input->post('Q6E13S1'),
					'Q6E14S1'=>$this->input->post('Q6E14S1'),
					'Q6E1S2'=>$this->input->post('Q6E1S2'),
					'Q6E2S2'=>$this->input->post('Q6E2S2'),
					'Q6E3S2'=>$this->input->post('Q6E3S2'),
					'Q6E4S2'=>$this->input->post('Q6E4S2'),
					'Q6E5S2'=>$this->input->post('Q6E5S2'),
					'Q6E6S2'=>$this->input->post('Q6E6S2'),
					'Q6E7S2'=>$this->input->post('Q6E7S2'),
					'Q6E16S2'=>$this->input->post('Q6E16S2'),
					'Q6E8S2'=>$this->input->post('Q6E8S2'),
					'Q6E9S2'=>$this->input->post('Q6E9S2'),
					'Q6E10S2'=>$this->input->post('Q6E10S2'),
					'Q6E11S2'=>$this->input->post('Q6E11S2'),
					'Q6E12S2'=>$this->input->post('Q6E12S2'),
					'Q6E13S2'=>$this->input->post('Q6E13S2'),
					'Q6E14S2'=>$this->input->post('Q6E14S2'),
					'Q6E15S2'=>$this->input->post('Q6E15S2'),
					'Q7E2S1'=>$this->input->post('Q7E2S1'),
					'Q7E2S2'=>$this->input->post('Q7E2S2'),
					'Q7E2S3'=>$this->input->post('Q7E2S3'),
					'Q7E3S1'=>$this->input->post('Q7E3S1'),
					'Q7E3S2'=>$this->input->post('Q7E3S2'),
					'Q7E3S3'=>$this->input->post('Q7E3S3'),
					'Q7E4S1'=>$this->input->post('Q7E4S1'),
					'Q7E4S2'=>$this->input->post('Q7E4S2'),
					'Q7E4S3'=>$this->input->post('Q7E4S3'),
					'Q7E5S1'=>$this->input->post('Q7E5S1'),
					'Q7E5S2'=>$this->input->post('Q7E5S2'),
					'Q7E5S3'=>$this->input->post('Q7E5S3'),
					'Q7E6S1'=>$this->input->post('Q7E6S1'),
					'Q7E6S2'=>$this->input->post('Q7E6S2'),
					'Q7E6S3'=>$this->input->post('Q7E6S3'),
					'Q7E7S1'=>$this->input->post('Q7E7S1'),
					'Q7E7S2'=>$this->input->post('Q7E7S2'),
					'Q7E7S3'=>$this->input->post('Q7E7S3'),
					'Q7E8S1'=>$this->input->post('Q7E8S1'),
					'Q7E8S2'=>$this->input->post('Q7E8S2'),
					'Q7E8S3'=>$this->input->post('Q7E8S3'),
					'Q8E1'=>$this->input->post('Q8E1'),
					'Q9E1'=>$this->input->post('Q9E1'),
					'Q9E1S1	'=>$this->input->post('Q9E1S1'),
					'Q9E1S2'=>$this->input->post('Q9E1S2'),
					'Q9E1S3'=>$this->input->post('Q9E1S3'),
					'Q9E1S5'=>$this->input->post('Q9E1S5'),
					'Q9E1S4'=>$this->input->post('Q9E1S4'),
					'Q10E1'=>$this->input->post('Q10E1')
					
					);
					
					
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    
                }
                else
                {
                    $update = array(
					'Q4E1'=>$this->input->post('Q4E1'),
					'Q5E1'=>$this->input->post('Q5E1'),
					'Q6E1S1'=>$this->input->post('Q6E1S1'),
					'Q6E2S1'=>$this->input->post('Q6E2S1'),
					'Q6E3S1'=>$this->input->post('Q6E3S1'),
					'Q6E4S1'=>$this->input->post('Q6E4S1'),
					'Q6E5S1'=>$this->input->post('Q6E5S1'),
					'Q6E6S1'=>$this->input->post('Q6E6S1'),
					'Q6E7S1'=>$this->input->post('Q6E7S1'),
					'Q6E16S1'=>$this->input->post('Q6E16S1'),
					'Q6E8S1'=>$this->input->post('Q6E8S1'),
					'Q6E9S1'=>$this->input->post('Q6E9S1'),
					'Q6E10S1'=>$this->input->post('Q6E10S1'),
					'Q6E11S1'=>$this->input->post('Q6E11S1'),
					'Q6E12S1'=>$this->input->post('Q6E12S1'),
					'Q6E13S1'=>$this->input->post('Q6E13S1'),
					'Q6E14S1'=>$this->input->post('Q6E14S1'),
					'Q6E1S2'=>$this->input->post('Q6E1S2'),
					'Q6E2S2'=>$this->input->post('Q6E2S2'),
					'Q6E3S2'=>$this->input->post('Q6E3S2'),
					'Q6E4S2'=>$this->input->post('Q6E4S2'),
					'Q6E5S2'=>$this->input->post('Q6E5S2'),
					'Q6E6S2'=>$this->input->post('Q6E6S2'),
					'Q6E7S2'=>$this->input->post('Q6E7S2'),
					'Q6E16S2'=>$this->input->post('Q6E16S2'),
					'Q6E8S2'=>$this->input->post('Q6E8S2'),
					'Q6E9S2'=>$this->input->post('Q6E9S2'),
					'Q6E10S2'=>$this->input->post('Q6E10S2'),
					'Q6E11S2'=>$this->input->post('Q6E11S2'),
					'Q6E12S2'=>$this->input->post('Q6E12S2'),
					'Q6E13S2'=>$this->input->post('Q6E13S2'),
					'Q6E14S2'=>$this->input->post('Q6E14S2'),
					'Q6E15S2'=>$this->input->post('Q6E15S2'),
					'Q7E2S1'=>$this->input->post('Q7E2S1'),
					'Q7E2S2'=>$this->input->post('Q7E2S2'),
					'Q7E2S3'=>$this->input->post('Q7E2S3'),
					'Q7E3S1'=>$this->input->post('Q7E3S1'),
					'Q7E3S2'=>$this->input->post('Q7E3S2'),
					'Q7E3S3'=>$this->input->post('Q7E3S3'),
					'Q7E4S1'=>$this->input->post('Q7E4S1'),
					'Q7E4S2'=>$this->input->post('Q7E4S2'),
					'Q7E4S3'=>$this->input->post('Q7E4S3'),
					'Q7E5S1'=>$this->input->post('Q7E5S1'),
					'Q7E5S2'=>$this->input->post('Q7E5S2'),
					'Q7E5S3'=>$this->input->post('Q7E5S3'),
					'Q7E6S1'=>$this->input->post('Q7E6S1'),
					'Q7E6S2'=>$this->input->post('Q7E6S2'),
					'Q7E6S3'=>$this->input->post('Q7E6S3'),
					'Q7E7S1'=>$this->input->post('Q7E7S1'),
					'Q7E7S2'=>$this->input->post('Q7E7S2'),
					'Q7E7S3'=>$this->input->post('Q7E7S3'),
					'Q7E8S1'=>$this->input->post('Q7E8S1'),
					'Q7E8S2'=>$this->input->post('Q7E8S2'),
					'Q7E8S3'=>$this->input->post('Q7E8S3'),
					'Q8E1'=>$this->input->post('Q8E1'),
					'Q9E1'=>$this->input->post('Q9E1'),
					'Q9E1S1	'=>$this->input->post('Q9E1S1'),
					'Q9E1S2'=>$this->input->post('Q9E1S2'),
					'Q9E1S3'=>$this->input->post('Q9E1S3'),
					'Q9E1S5'=>$this->input->post('Q9E1S5'),
					'Q9E1S4'=>$this->input->post('Q9E1S4'),
					'Q10E1'=>$this->input->post('Q10E1')
					);
					
					
				
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
			
			
			
			
			
			
			
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
			
			
			$d=$this->input->post();
			//print_r($d);exit;
			
			/* total_answer */
				
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'Q4F1'=>$this->input->post('Q4F1'),
					'Q5F1'=>$this->input->post('Q5F1'),
					'Q5F1S1'=>$this->input->post('Q5F1S1'),
					'Q5F1S2'=>$this->input->post('Q5F1S2'),
					'Q5F1S3'=>$this->input->post('Q5F1S3'),
					'Q5F1S4'=>$this->input->post('Q5F1S4'),
					'Q5F2'=>$this->input->post('Q5F2'),
					'Q6F2S1'=>$this->input->post('Q6F2S1'),
					'Q6F2S2'=>$this->input->post('Q6F2S2'),
					'Q6F2S3'=>$this->input->post('Q6F2S3'),
					'Q6F3S1'=>$this->input->post('Q6F3S1'),
					'Q6F3S2'=>$this->input->post('Q6F3S2'),
					'Q6F3S3'=>$this->input->post('Q6F3S3'),
					'Q6F4S1'=>$this->input->post('Q6F4S1'),
					'Q6F4S2'=>$this->input->post('Q6F4S2'),
					'Q6F4S3'=>$this->input->post('Q6F4S3'),
					'Q6F5S1'=>$this->input->post('Q6F5S1'),
					'Q6F5S2'=>$this->input->post('Q6F5S2'),
					'Q6F5S3'=>$this->input->post('Q6F5S3'),
					'Q6F6S1'=>$this->input->post('Q6F6S1'),
					'Q6F6S2'=>$this->input->post('Q6F6S2'),
					'Q6F6S3'=>$this->input->post('Q6F6S3'),
					'Q6F7S1'=>$this->input->post('Q6F7S1'),
					'Q6F7S2'=>$this->input->post('Q6F7S2'),
					'Q6F7S3'=>$this->input->post('Q6F7S3'),
					'Q6F8S1'=>$this->input->post('Q6F8S1'),
					'Q6F8S2'=>$this->input->post('Q6F8S2'),
					'Q6F8S3'=>$this->input->post('Q6F8S3'),
					'Q6F9S1'=>$this->input->post('Q6F9S1'),
					'Q6F9S2'=>$this->input->post('Q6F9S2'),
					'Q6F9S3'=>$this->input->post('Q6F9S3'),
					'Q6F10S1'=>$this->input->post('Q6F10S1'),
					'Q6F10S2'=>$this->input->post('Q6F10S2'),
					'Q6F10S3'=>$this->input->post('Q6F10S3'),
					'Q7F1'=>$this->input->post('Q7F1'),
					'Q7F1S1'=>$this->input->post('Q7F1S1'),
					'Q7F1S2'=>$this->input->post('Q7F1S2'),
					'Q7F1S3'=>$this->input->post('Q7F1S3'),
					'Q7F1S4'=>$this->input->post('Q7F1S4'),
					'Q7F1S5'=>$this->input->post('Q7F1S5'),
					'Q7F3S1'=>$this->input->post('Q7F3S1'),
					'Q8F1'=>$this->input->post('Q8F1'),
					'Q8F1S1'=>$this->input->post('Q8F1S1'),
					'Q8F1S2'=>$this->input->post('Q8F1S2'),
					'Q8F1S3'=>$this->input->post('Q8F1S3'),
					'Q8F1S4'=>$this->input->post('Q8F1S4'),
					'Q8F1S5'=>$this->input->post('Q8F1S5'),
					'Q9F1'=>$this->input->post('Q9F1'),
					'Q9F2'=>$this->input->post('Q9F2'),
					'Q10F1'=>$this->input->post('Q10F1'),
					'Q10F2'=>$this->input->post('Q10F2'),
					'Q11F1'=>$this->input->post('Q11F1'),
					'Q11F2'=>$this->input->post('Q11F2'),
					'Q11F3'=>$this->input->post('Q11F3'),
					'Q12F1'=>$this->input->post('Q12F1'),
					'Q12F2'=>$this->input->post('Q12F2'),
					'Q13F1'=>$this->input->post('Q13F1'),
					'Q13F2'=>$this->input->post('Q13F2')
					
					
					);
					
					
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    
                }
                else
                {
                    $update = array(
					'Q4F1'=>$this->input->post('Q4F1'),
					'Q5F1'=>$this->input->post('Q5F1'),
					'Q5F1S1'=>$this->input->post('Q5F1S1'),
					'Q5F1S2'=>$this->input->post('Q5F1S2'),
					'Q5F1S3'=>$this->input->post('Q5F1S3'),
					'Q5F1S4'=>$this->input->post('Q5F1S4'),
					'Q5F2'=>$this->input->post('Q5F2'),
					'Q6F2S1'=>$this->input->post('Q6F2S1'),
					'Q6F2S2'=>$this->input->post('Q6F2S2'),
					'Q6F2S3'=>$this->input->post('Q6F2S3'),
					'Q6F3S1'=>$this->input->post('Q6F3S1'),
					'Q6F3S2'=>$this->input->post('Q6F3S2'),
					'Q6F3S3'=>$this->input->post('Q6F3S3'),
					'Q6F4S1'=>$this->input->post('Q6F4S1'),
					'Q6F4S2'=>$this->input->post('Q6F4S2'),
					'Q6F4S3'=>$this->input->post('Q6F4S3'),
					'Q6F5S1'=>$this->input->post('Q6F5S1'),
					'Q6F5S2'=>$this->input->post('Q6F5S2'),
					'Q6F5S3'=>$this->input->post('Q6F5S3'),
					'Q6F6S1'=>$this->input->post('Q6F6S1'),
					'Q6F6S2'=>$this->input->post('Q6F6S2'),
					'Q6F6S3'=>$this->input->post('Q6F6S3'),
					'Q6F7S1'=>$this->input->post('Q6F7S1'),
					'Q6F7S2'=>$this->input->post('Q6F7S2'),
					'Q6F7S3'=>$this->input->post('Q6F7S3'),
					'Q6F8S1'=>$this->input->post('Q6F8S1'),
					'Q6F8S2'=>$this->input->post('Q6F8S2'),
					'Q6F8S3'=>$this->input->post('Q6F8S3'),
					'Q6F9S1'=>$this->input->post('Q6F9S1'),
					'Q6F9S2'=>$this->input->post('Q6F9S2'),
					'Q6F9S3'=>$this->input->post('Q6F9S3'),
					'Q6F10S1'=>$this->input->post('Q6F10S1'),
					'Q6F10S2'=>$this->input->post('Q6F10S2'),
					'Q6F10S3'=>$this->input->post('Q6F10S3'),
					'Q7F1'=>$this->input->post('Q7F1'),
					'Q7F1S1'=>$this->input->post('Q7F1S1'),
					'Q7F1S2'=>$this->input->post('Q7F1S2'),
					'Q7F1S3'=>$this->input->post('Q7F1S3'),
					'Q7F1S4'=>$this->input->post('Q7F1S4'),
					'Q7F1S5'=>$this->input->post('Q7F1S5'),
					'Q7F3S1'=>$this->input->post('Q7F3S1'),
					'Q8F1'=>$this->input->post('Q8F1'),
					'Q8F1S1'=>$this->input->post('Q8F1S1'),
					'Q8F1S2'=>$this->input->post('Q8F1S2'),
					'Q8F1S3'=>$this->input->post('Q8F1S3'),
					'Q8F1S4'=>$this->input->post('Q8F1S4'),
					'Q8F1S5'=>$this->input->post('Q8F1S5'),
					'Q9F1'=>$this->input->post('Q9F1'),
					'Q9F2'=>$this->input->post('Q9F2'),
					'Q10F1'=>$this->input->post('Q10F1'),
					'Q10F2'=>$this->input->post('Q10F2'),
					'Q11F1'=>$this->input->post('Q11F1'),
					'Q11F2'=>$this->input->post('Q11F2'),
					'Q11F3'=>$this->input->post('Q11F3'),
					'Q12F1'=>$this->input->post('Q12F1'),
					'Q12F2'=>$this->input->post('Q12F2'),
					'Q13F1'=>$this->input->post('Q13F1'),
					'Q13F2'=>$this->input->post('Q13F2')
					);
					
					
				
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
			
			
			
			
			
			
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
			
			$d=$this->input->post();
			//print_r($d);exit;
			
			/* total_answer */
				
				$query1 = $this->db->select('*')
                    ->from('total_answer')
                    ->where(array('userid' => $this->session->userdata('USER_ID')))
                    ->get();
                if($query1->num_rows() > 0)
                {
					$schoolprofile=array(
					'Q4L1'=>$this->input->post('Q4L1'),
					'Q4L2'=>$this->input->post('Q4L2'),
					'Q4L3'=>$this->input->post('Q4L3'),
					'Q4L4'=>$this->input->post('Q4L4'),
					'Q4L5'=>$this->input->post('Q4L5'),
					'Q4L6'=>$this->input->post('Q4L6'),
					'Q5F2'=>$this->input->post('Q5F2'),
					'Q4L7'=>$this->input->post('Q4L7'),
					'Q4L8'=>$this->input->post('Q4L8'),
					'Q4L9'=>$this->input->post('Q4L9'),
					'Q4L10'=>$this->input->post('Q4L10'),
					'Q4L11'=>$this->input->post('Q4L11'),
					'Q4L12'=>$this->input->post('Q4L12'),
					'Q5L1S3'=>$this->input->post('Q5L1S3'),
					'Q5L1S1'=>$this->input->post('Q5L1S1'),
					'Q5L1S2'=>$this->input->post('Q5L1S2'),
					'Q5L2S3'=>$this->input->post('Q5L2S3'),
					'Q5L2S2'=>$this->input->post('Q5L2S2'),
					'Q5L2S1'=>$this->input->post('Q5L2S1'),
					'Q6L1'=>$this->input->post('Q6L1')
					);
					
					
					
					  $this->db->where( array('userid' => $this->session->userdata('USER_ID'))); //which row want to upgrade
                       $this->db->update('total_answer',$schoolprofile);
                    
                }
                else
                {
                    $update = array(
					'Q4L1'=>$this->input->post('Q4L1'),
					'Q4L2'=>$this->input->post('Q4L2'),
					'Q4L3'=>$this->input->post('Q4L3'),
					'Q4L4'=>$this->input->post('Q4L4'),
					'Q4L5'=>$this->input->post('Q4L5'),
					'Q4L6'=>$this->input->post('Q4L6'),
					'Q5F2'=>$this->input->post('Q5F2'),
					'Q4L7'=>$this->input->post('Q4L7'),
					'Q4L8'=>$this->input->post('Q4L8'),
					'Q4L9'=>$this->input->post('Q4L9'),
					'Q4L10'=>$this->input->post('Q4L10'),
					'Q4L11'=>$this->input->post('Q4L11'),
					'Q4L12'=>$this->input->post('Q4L12'),
					'Q5L1S3'=>$this->input->post('Q5L1S3'),
					'Q5L1S1'=>$this->input->post('Q5L1S1'),
					'Q5L1S2'=>$this->input->post('Q5L1S2'),
					'Q5L2S3'=>$this->input->post('Q5L2S3'),
					'Q5L2S2'=>$this->input->post('Q5L2S2'),
					'Q5L2S1'=>$this->input->post('Q5L2S1'),
					'Q6L1'=>$this->input->post('Q6L1')
					);
					
					
				
	                $this->db->insert('total_answer',$update);//insert if does not exist
                          //echo ($this->db->last_query());	
                         //  print_r("insert");

                }
			
			
			
			
			
			
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
