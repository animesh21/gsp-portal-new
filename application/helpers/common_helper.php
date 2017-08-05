<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('getStates')) {

    function getStates()
    {
        $arrState=array();
        $CI =& get_instance();
        $temp=$CI->db->get('states')->result();
        foreach($temp as $t)
        {
            $arrState[$t->id]=$t->name;
        }
        return $arrState;
    }

}
/*
 * Get Filed
 */
if (!function_exists('getFiled')) {

    function getFiled($argWhere, $argUserID)
    {
        $CI =& get_instance();
        $temp=$CI->db->get_where('gsp_answers', array('questionid'=>$argWhere, 'userid'=>$argUserID))->row();
        return $temp->answer;
    }

}

/*
 * Upload Helper Function
 */
if (!function_exists('uploadHelper')) {

    function uploadHelper($argID, $argTypeName)
    {
        $CI =& get_instance();
        return $CI->db->select('a.*, b.name')
            ->from('files AS a')
            ->join('gsp_school AS b', 'a.userid=b.userid', 'left')
            ->where('a.userid', $argID)
            ->like('a.file_name', $argTypeName)
            ->get()->result();
    }

}

/*
 * Update Progress Function
 */
if (!function_exists('updateProgress')) {

    function updateProgress($argID, $argProgress)
    {
        $arr=array('progress'=>$argProgress);
        $CI =& get_instance();
        $CI->db->where('userid', $argID);
        $CI->db->update('gsp_school', $arr);
    }

}
