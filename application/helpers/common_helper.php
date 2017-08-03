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