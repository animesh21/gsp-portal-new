<?php
//ini_set('max_execution_time', 300000); //300 seconds = 5 minutes


error_reporting(E_ALL);

ini_set("display_errors", 1);

ini_set("memory_limit", "999M");
ini_set("max_execution_time", "999");
require_once("dompdf/dompdf_config.inc.php");
include('website_db.php');


$loop_query = mysql_query("select ltok.token from lime_tokens_266617 as ltok join lime_survey_266617 as lsur ON ltok.token=lsur.token WHERE `submitdate` != 'NULL' LIMIT 540,550");
$i =1;
$message = "";
//echo 'hello';

while($loop_data = mysql_fetch_array($loop_query))
{
         
    $sql_token_details = $loop_data['token'];
    
    //$sql_token_details = 'garv';
    
    // get school details
    $school_details = mysql_query("SELECT `email`, `attribute_1`, `attribute_7`, `attribute_12`, `tid` FROM lime_tokens_266617 WHERE `token` = '" . $sql_token_details . "'");
    //echo '999';
    
    list($email, $school_name, $city, $altr_id, $tid) = mysql_fetch_row($school_details);
    //echo "$email, $school_name, $tid";
    
    // get school responses
    $responses = mysql_query("SELECT * FROM lime_survey_266617 WHERE `token` = '" . $sql_token_details . "'");
    $sql_data = mysql_fetch_array($responses);
    //print_r($sql_data);
    
    // get country name
    $country = mysql_query("SELECT `name` FROM `countries` WHERE `id` = '" . $sql_data['266617X34X1593'] . "'");
    $country_name = mysql_result($country, 0, 0);
    
    //echo $country_name;
    
    
$html ='<html>
<head>
<meta charset="utf-8">
<title>Green School Programms Audit Portal</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<script type="text/php">
        if ( isset($pdf) ) {
            $font = Font_Metrics::get_font("helvetica", "bold");
            $pdf->page_text(280, 15, "{PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));
        }
    </script>
<div class="cover">

	<img src="images/logo.png" width="436" height="118" class="logo">
    <h1>Responses For Green Schools Programme Audit 2015</h1>
    <div class="school-detail">
    	<p><span>School Name:</span><span>';
$html .= $sql_data['266617X34X1590'];
$html .='</span></p>
        <p><span>Address:</span><span>';
$html .= $sql_data['266617X34X1591'];
if($sql_data['266617X34X1656'] !="")
        {    
        $html .= ' '; 
        }
        $sql_data['266617X34X1656'];
        if($sql_data['266617X34X1592'] !="")
        {    
        $html .= ' '; 
        }
        $sql_data['266617X34X1592'];
        
        $sql_data['266617X34X1611'];
        
$html .= ", ";
$html .= $country_name;
$html .='</span></p>
        <p><span>Coordinator Name:</span><span>';
$html .= $sql_data['266617X34X1604'];
$html .='</span></p>
    </div>
    <div class="address-wrap">
        <img src="images/cover.png" width="100%">
    	<div class="address">
        	<p>Green Schools Programme <br />Centre for Science and Environment</p>
            <p>41, Tughlakabad Institutional Area, New Delhi. India - 110062<br/>
				Tel: +91-11 29955124, 29956110, 40616000<br/>
				http://www.greenschoolsprogramme.org/</p>
        </div>
    </div>
    
</div>
<div class="container">
    <h2 class="heading">School Profile</h2>
    <div class="wrapper">
    	<ul class="list">
        	<li>
                <p class="orange"><span>1</span><span>Name of the School / Institution</span></p>
                <p>';
        $html .= $sql_data['266617X34X1590']; 
        $html .='</p>';
            $html .='</li>
            <li>
                <p class="orange"><span>2</span><span>Address</span></p>
                <p>';
            $html .= $sql_data['266617X34X1591']; 
        if($sql_data['266617X34X1656'] !="")
        {    
        $html .= ' '; 
        }
        $sql_data['266617X34X1656'];
        if($sql_data['266617X34X1592'] !="")
        {    
        $html .= ' '; 
        }
        $sql_data['266617X34X1592'];
        if($sql_data['266617X34X1611'] !="")
        {    
        $html .= ' '; 
        }
        $sql_data['266617X34X1611'];
        
        $html .= $country_name;
            $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>3</span><span>Telephone Number (Landline Number with STD code)</span></p>
                <p>(ISD)';
                $html .= number_format($sql_data['266617X34X1597SQ001']); 
      $html .= '&nbsp;&nbsp; (STD) '; 
      $html .= number_format($sql_data['266617X34X1597SQ003']); 
      $html .= '&nbsp;&nbsp; (NUMBER) '; 
      $html .= number_format($sql_data['266617X34X1597SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
                $html .='</p>
            </li>
            <li>
                <p class="orange"><span>4</span><span>Mobile Number (Mobile Number with STD code)</span></p>
                <p>(ISD)';
               $html .= number_format($sql_data['266617X34X1600SQ001']); 
               $html .= '&nbsp;&nbsp; (Number)'; 
               $html .= number_format($sql_data['266617X34X1600SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); 
               $html .='</p>
            </li>
            <li>
                <p class="orange"><span>5</span><span>Principal Name</span></p>
                <p>';
               $html .= $sql_data['266617X34X1602'];
               $html .='</p>
            </li>
            <li>
                <p class="orange"><span>6</span><span>GSP Coordinator Name</span></p>
                <p>';
               $html .= $sql_data['266617X34X1604'];
               $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>7</span><span>GSP Coordinator Email</span></p>
                <p>';
            $html .= $sql_data['266617X34X1605'];
            $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>8</span><span>GSP Coordinator Mobile Number</span></p>
                <p>(ISD)';
            $html .= number_format($sql_data['266617X34X1606SQ001']); 
      $html .= '&nbsp;&nbsp; (Number) ';
      $html .= number_format($sql_data['266617X34X1606SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
            $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>9</span><span>Category Of The School</span></p>
                <p>';
            if($sql_data['266617X34X1608SQ001'] == "Y")
                {
                   $html .= "Day Scholar (6 hours)";
                } 
            elseif($sql_data['266617X34X1608SQ002'] == "Y")
            {
                $html .= "Day Boarding (8 hours)";
            }
            elseif($sql_data['266617X34X1608SQ003'] == "Y")
            {
                $html .= "Residential (24 hours)";
            }
            $html .='</p>';
            $html .='</li>
            <li>
                <p class="orange"><span>10</span><span>Category For Your School (Not Applicable in Case of Residential Category)</span></p>
                <p>';
            if($sql_data['266617X34X1609'] == "A1")
                {
                   $html .= "Morning";
                } 
            elseif($sql_data['266617X34X1609'] == "A2")
            {
                $html .= "Evening";
            }
            elseif($sql_data['266617X34X1609'] == "A3")
            {
                $html .= "Both";
            }
            $html .='</p>
            </li>
        </ul>
    </div>

    <div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
 


<h2 class="heading page_break">General Questions</h2>
   
    <div class="wrapper">
    
    	<ul class="list">
        	<li>
                <p class="orange"><span>1</span><span>How many levels does your school have? Please choose what is applicable.</span></p>
                <table class="table question1ge tick">
                    <tr>
	<th width="16%">Pre-Primary</th>
        <th width="6%">1st</th>
	<th width="6%">2nd</th>
	<th width="6%">3rd</th>
	<th width="6%">4th</th>
	<th width="6%">5th</th>
	<th width="6%">6th</th>
	<th width="6%">7th</th>
	<th width="6%">8th</th>
	<th width="6%">9th</th>
	<th width="6%">10th</th>
	<th width="6%">11th</th>
	<th width="6%">12th</th>
                    </tr>
                    <tr>
                           <td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>
                 <td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	
	$html .='<td class="answer_cell_00SQ014 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ014'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	
	$html .='<td class="answer_cell_00SQ013 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ013'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ012 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ012'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ011 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ011'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ010 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ010'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
        $html .='<td class="answer_cell_00SQ009 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ009'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ008 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ008'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ007 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ007'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
        $html .='<td class="answer_cell_00SQ006 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ006'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
        $html .='<td class="answer_cell_00SQ005 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ005'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>';
        $html .='<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X32X1674SQ001_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>
        
</tr>
                    </table>
            </li>
            <li>
                <p class="orange"><span>2</span><span> Is your school single gender or mixed gender?</span></p>
                <p>';
            if($sql_data['266617X32X27'] == "A1")
                {
                   $html .= "Only boys";
                } 
            elseif($sql_data['266617X32X27'] == "A3")
            {
               $html .= "Only girls";
            }
            elseif($sql_data['266617X32X27'] == "A2")
            {
                $html .= "Mixed/Co-education";
            }
           $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>3</span><span> Which board of education does the school follow?</span></p>
                <p>';
            if($sql_data['266617X32X28SQ001'] != "")
                {
                   $html .="State Board of Education (please select name of your state from the list below if applicable)";
                   $html .= "<br>";
                   
                   if($sql_data['266617X32X274'] == 1)
                   {
                       $state = "Andaman and Nicobar Islands";
                   }elseif($sql_data['266617X32X274'] == 2)
                   {
                       $state = "Andhra Pradesh";
                   }elseif($sql_data['266617X32X274'] == 3)
                   {
                       $state = "Arunachal Pradesh";
                   }elseif($sql_data['266617X32X274'] == 4)
                   {
                       $state = "Assam";
                   }elseif($sql_data['266617X32X274'] == 5)
                   {
                       $state = "Bihar";
                   }elseif($sql_data['266617X32X274'] == 6)
                   {
                       $state = "Chandigarh";
                   }elseif($sql_data['266617X32X274'] == 7)
                   {
                       $state = "Chhattisgarh";
                   }elseif($sql_data['266617X32X274'] == 8)
                   {
                       $state = "Dadra and Nagar Haveli";
                   }elseif($sql_data['266617X32X274'] == 9)
                   {
                       $state = "Daman and Diu";
                   }elseif($sql_data['266617X32X274'] == 10)
                   {
                       $state = "Delhi";
                   }elseif($sql_data['266617X32X274'] == 11)
                   {
                       $state = "Goa";
                   }elseif($sql_data['266617X32X274'] == 12)
                   {
                       $state = "Gujarat";
                   }elseif($sql_data['266617X32X274'] == 13)
                   {
                       $state = "Haryana";
                   }elseif($sql_data['266617X32X274'] == 14)
                   {
                       $state = "Himachal Pradesh";
                   }elseif($sql_data['266617X32X274'] == 15)
                   {
                       $state = "Jammu and Kashmir";
                   }elseif($sql_data['266617X32X274'] == 16)
                   {
                       $state = "Jharkhand";
                   }elseif($sql_data['266617X32X274'] == 17)
                   {
                       $state = "Karnataka";
                   }elseif($sql_data['266617X32X274'] == 18)
                   {
                       $state = "Kerala";
                   }elseif($sql_data['266617X32X274'] == 19)
                   {
                       $state = "Lakshadweep";
                   }elseif($sql_data['266617X32X274'] == 20)
                   {
                       $state = "Madhya Pradesh";
                   }elseif($sql_data['266617X32X274'] == 21)
                   {
                       $state = "Maharashtra";
                   }elseif($sql_data['266617X32X274'] == 22)
                   {
                       $state = "Manipur";
                   }elseif($sql_data['266617X32X274'] == 23)
                   {
                       $state = "Meghalaya";
                   }elseif($sql_data['266617X32X274'] == 24)
                   {
                       $state = "Mizoram";
                   }elseif($sql_data['266617X32X274'] == 25)
                   {
                       $state = "Nagaland";
                   }elseif($sql_data['266617X32X274'] == 26)
                   {
                       $state = "Odisha (Orissa)";
                   }elseif($sql_data['266617X32X274'] == 27)
                   {
                       $state = "Puducherry";
                   }elseif($sql_data['266617X32X274'] == 28)
                   {
                       $state = "Punjab";
                   }elseif($sql_data['266617X32X274'] == 29)
                   {
                       $state = "Rajasthan";
                   }elseif($sql_data['266617X32X274'] == 30)
                   {
                       $state = "Sikkim";
                   }elseif($sql_data['266617X32X274'] == 31)
                   {
                       $state = "Tamil Nadu";
                   }elseif($sql_data['266617X32X274'] == 32)
                   {
                       $state = "Telangana";
                   }elseif($sql_data['266617X32X274'] == 33)
                   {
                       $state = "Tripura";
                   }elseif($sql_data['266617X32X274'] == 34)
                   {
                       $state = "Uttar Pradesh";
                   }elseif($sql_data['266617X32X274'] == 35)
                   {
                       $state = "Uttarakhand";
                   }elseif($sql_data['266617X32X274'] == 36)
                   {
                       $state = "West Bengal";
                   }
                  
                   
                   $html .= "State: "." ".$state." ";
                } 
            if($sql_data['266617X32X28SQ002'] != "")
            {
                $html .= "Central Board of Secondary Education";
            }
            if($sql_data['266617X32X28SQ003'] != "")
            {
                $html .= "Indian Certificate of Secondary Education";
            }
            if($sql_data['266617X32X28SQ004'] != "")
            {
                $html .="International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
            if($sql_data['266617X32X28other'] != "")
            {
                $html .= "Other: "." '".$sql_data['266617X32X28other']."' ";
            }
            
            $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>4</span><span> Total population of the school</span></p>
            <table class="table">
                    <tr>
                        <th></th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Students</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ001_SQ003'];
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>Teachers</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ002_SQ003'];
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>Non-Teaching Staff</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ003_SQ003'];
                        $html .='</td>
                    </tr>
                    
                    <tr class="total">
                        <td>Total</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X32X33SQ004_SQ003'];
                        $html .='</td>
                    </tr>
                </table>';
            $html .='</p>
            </li>
            <li>
                <p class="orange"><span>5</span><span> What is the total number of working days of your school in a year?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X32X40'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
                $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>6</span><span> Month(s) in which the GSP audit was carried out?</span></p>
                <p>';
            $sql_values = mysql_query("select `266617X32X43SQ001_SQ001`, `266617X32X43SQ001_SQ002`, `266617X32X43SQ001_SQ003`, `266617X32X43SQ001_SQ004`, `266617X32X43SQ001_SQ005`, `266617X32X43SQ001_SQ006`, `266617X32X43SQ001_SQ007`, `266617X32X43SQ001_SQ008`, `266617X32X43SQ001_SQ009`, `266617X32X43SQ001_SQ010`, `266617X32X43SQ001_SQ011`, `266617X32X43SQ001_SQ012` from lime_survey_266617 WHERE `token`='".$sql_token_details."'"); 
           $state = array(); 
           if($sql_data['266617X32X43SQ001_SQ001'] != "")
                   {
                      $state[] = "Jan";
                   }
            if($sql_data['266617X32X43SQ001_SQ003'] != "")
                   {
                       $state[] = "Feb";
                   }
            if($sql_data['266617X32X43SQ001_SQ002'] != "")
                   {
                       $state[] = "March";
                   }
            if($sql_data['266617X32X43SQ001_SQ004'] != "")
                   {
                       $state[] = "April";
                   }
            if($sql_data['266617X32X43SQ001_SQ005'] != "")
                   {
                       $state[] = "May";
                   }
            if($sql_data['266617X32X43SQ001_SQ006'] != "")
                   {
                       $state[] = "June";
                   }
            if($sql_data['266617X32X43SQ001_SQ007'] != "")
                   {
                       $state[] = "July";
                   }
            if($sql_data['266617X32X43SQ001_SQ008'] != "")
                   {
                       $state[] = "Aug";
                   }
            if($sql_data['266617X32X43SQ001_SQ009'] != "")
                   {
                       $state[] = "Sep";
                   }
            if($sql_data['266617X32X43SQ001_SQ010'] != "")
                   {
                       $state[] = "Oct";
                   }
            if($sql_data['266617X32X43SQ001_SQ011'] != "")
                   {
                       $state[] = "Nov";
                   }
            if($sql_data['266617X32X43SQ001_SQ012'] != "")
                   {
                       $state[] = "Dec";
                   }
            $html .=implode($state, ', ');
                $html .='</p>
            </li>';
            $html .='<li>
                <p class="orange"><span>7</span><span> Where is the school located?</span></p>
                <p>';
            if($sql_data['266617X32X56'] == "A1")
                { 
                $html .="Urban Area"; 
                }
                else 
                    {
                    $html .="Rural Area"; 
                    } 
                $html .='</p>
            </li>
            
        </ul>
    </div>
    
	<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>


<h2 class="heading section air page_break"><img src="images/air.png" width="94" height="94">Air</h2>
   
    <div class="wrapper">
        <div class="task-area">
            <h3 class="task">Task 1: Air Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X4X1973SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X4X1973SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X4X1973SQ003']; 
            $html .='</span></p>
        </div>
        <ul class="list">
            <li>
                <p class="orange"><span>1</span><span>How many classrooms does your school have?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X4X1127']);
                $html .='</p>
            </li>
            <li>
                <p class="orange"><span>2</span><span>Window-floor ratio of classrooms in the school.</span></p>
                <table class="table">
                    <tr>
                        <th>Details of the classroom (e.g. Class II section b)</th>
                        <th>X = Area of floor (LxB)</th>
                        <th>Y = Area of openings (LxH)</th>
                        <th>Percentage of the floor area being ventilated (y/xx 100)</th>
                    </tr>
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ001_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ001_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ001_SQ004'],2);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ002_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ002_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ002_SQ004'],2);
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ003_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ003_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ003_SQ004'],2);
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ004_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ004_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ004_SQ004'],2);
                        $html .='</td>
                    </tr>

                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ005_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ005_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ005_SQ004'],2);
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ006_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ006_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ006_SQ004'],2);
                        $html .='</td>
                    </tr>
                    
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ007_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ007_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ007_SQ004'],2);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ008_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ008_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ008_SQ004'],2);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ009_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ009_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ009_SQ004'],2);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>';
                        $html .=$sql_data['266617X4X2197SQ010_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ010_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ010_SQ003'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ010_SQ004'],2);
                        $html .='</td>
                    </tr>
                    <tr class="total">
                        <td>';
                        $html .='Total';
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ011_SQ002'],2);
                        $html .='</td>
                        <td>';
                        $html .=number_format($sql_data['266617X4X2197SQ011_SQ003'],2);
                        $html .='</td>
                        <td>';
                        
                        $html .='</td>
                    </tr>
                    
                </table>
            </li>
            <li>
                <p class="orange"><span>3</span><span> What is the ownership used by the vehicles used in your school? Please choose what is applicable? </span></p>
                <p>';
                         if($sql_data['266617X4X164'] == "A1")
                {
                  $html .="School does not use or own vehicles";
                }
           elseif($sql_data['266617X4X164'] == "A2")
                {
                  $html .="Operator-owned vehicles";
                }   
           elseif($sql_data['266617X4X164'] == "A3")
                {
                  $html .="School-owned vehicles";
                }    
            elseif($sql_data['266617X4X164'] == "A4")
                {
                  $html .="A combination of school-owned and operator-owned vehicles";
                }    
                $html .='</p>
            </li>';
            
if($sql_data['266617X4X164'] == "A4" || $sql_data['266617X4X164'] == "A3")
{
    $html .='<li>
                <p class="orange"><span>3a</span><span>Window-floor ratio of classrooms in the school.</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Buses</th>
                        <th>Cars</th>
                        <th>Vans</th>
                        <th>Others</th>
                        <th>Total</th>
                    </tr>
                   <tr>
                        <td>No. of vehicles </td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ001_SQ008'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ001_SQ007'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ001_SQ003'];
                        $html .='</td> 
                    </tr> 
                    <tr>
                        <td>No. of vehicles more than five years old</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ002_SQ008'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ002_SQ007'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ002_SQ003'];
                        $html .='</td> 
                    </tr> 
                    <tr>
                        <td>Air conditioned </td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ004_SQ008'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ004_SQ007'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ004_SQ003'];
                        $html .='</td> 
                    </tr> 
                    <tr>
                        <td>No. of vehicles with PUC done </td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ005_SQ008'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X165SQ005_SQ007'];
                        $html .='</td> 
                        <td>';
                        $html .=$sql_data['266617X4X165SQ005_SQ003'];
                        $html .='</td>     
                    </tr> 
                </table>
            </li>';
    
    
    
}


            $html .='<li>
                <p class="orange"><span>4</span><span>Specify the type of fuel used by your school vehicles:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Diesel</th>
                        <th>Petrol</th>
                        <th>LPG</th>
                        <th>CNG</th>
                    </tr>
                    <tr>
                        <td>Bus</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ001_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ001_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Car</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ002_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ002_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Van</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ003_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ003_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr class="total">
                        <td>Sub-Total</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ004_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X2217SQ004_SQ004'];
                        $html .='</td>
                    </tr>
                </table>
            </li>
            
        <li>
                <p class="orange"><span>5</span><span>How many members of the school community use each type of transport:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Students</th>
                        <th>Teaching Staff</th>
                        <th>Non Teaching Staff</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Schoool Bus</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ001_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ001_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Public Bus</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ002_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ002_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>School Transport(Other than bus)</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ003_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ003_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Public transport (other than bus, Metro, car pool)</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ0012_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ0012_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ0012_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ0012_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Taxi four-wheeler</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ005_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ005_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Taxi three-wheeler</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ006_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ006_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ006_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Personal four-wheeler</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ007_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ007_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ007_SQ004'];
                        $html .='</td>
                    </tr>                    
                    <tr>
                        <td>Personal two-wheeler</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ008_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ008_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ008_SQ004'];
                        $html .='</td>
                    </tr> 
                    
                    <tr>
                        <td>Bicycle</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ009_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ009_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ009_SQ004'];
                        $html .='</td>
                    </tr> 
                    <tr>
                        <td>On foot</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ010_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ010_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ010_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ010_SQ004'];
                        $html .='</td>
                    </tr> 
                    <tr>
                        <td>Others (non-motorised)</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ011_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ011_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ011_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ011_SQ004'];
                        $html .='</td>
                    </tr> 

                    <tr class="total">
                        <td>Sub-Total</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ004_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X4X176SQ004_SQ004'];
                        $html .='</td>
                    </tr>
                </table>
            </li> 


                <li>
                <p class="orange"><span>6</span><span> How many students suffer from respiratory ailments ?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X4X184']);
                $html .='</p>
            </li>    
            
            <li>
                <p class="orange"><span>7</span><span> Does the school laboratory have air quality monitoring equipment?</span></p>
                <p>';
                if($sql_data['266617X4X187'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .= "No";
           }
                $html .='</p>
            </li>';
            
if($sql_data['266617X4X2252_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">
        Supporting Documents
        <ol class="support-docs">';       
           if($sql_data['266617X4X2252_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X4X2252']);
              // print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>";
                  $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
      
           }
          $html .= '
        </ol>
      </div>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school.";
          $html .='</div>';
      }

        $html .='</ul>
    </div>  
 
    
     


   <div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

   
    <h2 class="heading section energy"><img src="images/energy.png" width="94" height="94">Energy</h2>
    <div class="wrapper">
    	<div class="task-area">
            <h3 class="task">Task 1: Energy Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X8X1999SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X8X1999SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X8X1999SQ003'];
            $html .='</span></p>
        </div>
        <ul class="list">
            <li>
                <p class="orange"><span>1</span><span> Does your school have access to an electricity bill?</span></p>
                <p>';
            if($sql_data['266617X8X237'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>
            <li>
                <p class="orange"><span>2</span><span> Does your school have its own vehicles?</span></p>
                <p>';
            if($sql_data['266617X8X2274'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>

            <li>
                <p class="orange"><span>3</span><span>Provide the details of total energy consumed by the school</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Quantity consumed/monthly average</th>
                        <th>Energy consumed in Megajoules (MJ)</th>
                        <th>Type of use</th>
                    </tr>
                    <tr>
                        <td>Electricity from the board</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .= $sql_data['266617X8X2180SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ001_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Petrol</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ002_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Diesel</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ003_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>CNG</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ004_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Kerosene</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ005_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Coal</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ006_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ006_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Wood</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ007_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ007_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Animal waste</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ008_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ008_SQ003']; 
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Solar</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ009_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ009_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Wind</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ010_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ010_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ010_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>LPG</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ011_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ011_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ011_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Others (specify)</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ012_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ012_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ012_SQ003'];
                        $html .='</td>
                    </tr>
                    
                    <tr class="total">
                        <td>Total</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ013_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ013_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X8X2180SQ013_SQ003'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';
                        
            $html .='<li>
                <p class="orange"><span>4</span><span> What is the average number of sunny days in your area?</span></p>
                <p>';
              $html .= number_format($sql_data['266617X8X260']);
           $html .='</p>
            </li>';            
              
            $html .='<li>
                <p class="orange"><span>5</span><span> Are there any alternate sources of energy employed/ installed in your school?</span></p>
                <p>';
            if($sql_data['266617X8X261'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
            if($sql_data['266617X8X261'] == "Y")
     {
           $html .='<li>
                <p class="orange"><span>5a</span><span> Name the alternate sources of energy employed/ installed in your school?</span></p>
                <p>';
             if($sql_data['266617X8X262SQ001'] == "Y")
           {
               $html .= "Solar";
           }
           if($sql_data['266617X8X262SQ002'] == "Y")
           {
               $html .= ", Wind";
           }
           if($sql_data['266617X8X262SQ003'] == "Y")
           {
               $html .= ", Hydro";
           }
           if($sql_data['266617X8X262SQ004'] == "Y")
           {
               $html .= ", Combination of solar and wind";
           }
           $html .='</p>
            </li>';
     }     
if($sql_data['266617X8X2260_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">Supporting Documents</div>
        <ol class="support-docs">';
           if($sql_data['266617X8X2260_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X8X2260']);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>"; 
                  $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
           }
          $html .= '</ul>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school for energy chapter.";
          $html .='</div>';
      }

        $html .='</ol>
    </div>  
	<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
        
<h2 class="heading section food page_break"><img src="images/food.png" width="94" height="94">Food</h2>
    <div class="wrapper">
    	<div class="task-area">
            <h3 class="task">Task 1: Food Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X36X2016SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X36X2016SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X36X2016SQ003'];
            $html .='</span></p>
        </div>
        <ul class="list">
            <li>
                <p class="orange"><span>1</span><span> Does your school have a canteen?</span></p>
                <p>';
            if($sql_data['266617X36X1858'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>
            
          <li>
                <p class="orange"><span>2</span><span> Does your school serve midday-meals?</span></p>
                <p>';
            if($sql_data['266617X36X1859'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           if($sql_data['266617X36X1859'] == "N")
      { 
          $html .='<li>
                <p class="orange"><span>2(a)</span><span> Do students bring their own lunch from home?</span></p>
                <p>';
            if($sql_data['266617X36X1860'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           }
           
           $html .='<li>
                <p class="orange"><span>3</span><span> Do teachers have the responsibility to ensure if the students are carrying lunch from home?</span></p>
                <p>';
            if($sql_data['266617X36X1863'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           $html .='<li>
                <p class="orange"><span>4</span>Provide the details of total energy consumed by the school</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Please count all flavours/variants available in the school canteen separately</th>
                        <th>Total number of items sold in a month in the canteen</th>
                        <th>Month the food items were sold in</th>
                    </tr>
                    <tr>
                        <td>Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .= $sql_data['266617X36X1871SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ001_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ002_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Potato fries and Burgers</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ003_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Confectionery items (chocolate, candies, gums)</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ004_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Ice-cream</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ005_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Carbonated beverages</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ006_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ006_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Sugar sweetened noncarbonated beverages</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ007_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ007_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ008_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ008_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Packaged/Bottled Energy Drinks</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ009_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X36X1871SQ009_SQ003'];
                        $html .='</td>
                    </tr>
                </table>
            </li>
        ';
                       
$html .='<li>
                <p class="orange"><span>5</span><span> Does your school serve traditional Indian snacks?</span></p>
                <p>';
            if($sql_data['266617X36X2238'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           $html .='</p>
            </li>';  
          if($sql_data['266617X36X2238'] == "Y")
      { 
           $html .='<li>
                <p class="orange"><span>5a</span><span> Please provide the details:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Number of plates sold when on the menu</th>
                    </tr>
                    <tr>
                        <td>Samosas</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2239SQ001_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Idli/vada</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2239SQ002_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Sambhar</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2239SQ003_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Pav bhaji</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2239SQ004_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Momos</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2239SQ005_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td>';
                        $html .=$sql_data['266617X36X2239SQ006_SQ001'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';
      }  
     $html .='<li>
                <p class="orange"><span>6</span><span> Does your school serve traditional Indian beverages?</span></p>
                <p>';
            if($sql_data['266617X36X2246'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>'; 
           
           if($sql_data['266617X36X2246'] == "Y")
      { 
           $html .='<li>
                <p class="orange"><span>6a</span><span> Details are as follows:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Number of servings sold when on the menu</th>
                    </tr>
                    <tr>
                        <td>Nimboo pani</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2247SQ001_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Salted butter milk</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2247SQ002_SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Sweet lassi</td>
                        <td>';
                        $html .=number_format($sql_data['266617X36X2247SQ003_SQ001']);
                        $html .='</td>
                    </tr>
                    
                </table>
            </li>';
      }  
           
   $html .='<li>
                <p class="orange"><span>7</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
                <p>';
            if($sql_data['266617X36X1864'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           if($sql_data['266617X36X1864'] == "Y")
           {
           $html .='<li>
                <p class="orange"><span>7a</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
                <p>';
           $html .=$sql_data['266617X36X1865'];            
           $html .='</p>
            </li>';
           }
           
           $html .='<li>
                <p class="orange"><span>8</span><span> Does the school distribute chocolates/similar products as refreshments during schools events?</span></p>
                <p>';
            if($sql_data['266617X36X1866'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           if($sql_data['266617X36X1866'] == "Y")
           {
      $html .='<li>
                <p class="orange"><span>8a</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
                <p>';
           $html .=$sql_data['266617X36X1867'];            
           $html .='</p>
            </li>';
           }      
   
           $html .='<li>
                <p class="orange"><span>9</span><span> Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</span></p>
                <p>';
            if($sql_data['266617X36X1868'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           if($sql_data['266617X36X1868'] == "Y")
           {
      $html .='<li>
                <p class="orange"><span>9a</span><span> Does the school distribute packaged food items as rewards during schools events?</span></p>
                <p>';
           $html .=$sql_data['266617X36X1869'];            
           $html .='</p>
            </li>';
           
           $html .='<li>
                <p class="orange"><span>9b</span><span>  Are their banners, brochures, hoardings, stalls etc. put-up during the events?</span></p>
                <p>';
            if($sql_data['266617X36X1870'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           }
           
           
    if($sql_data['266617X36X2259_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">
        Supporting Documents
        <ol class="support-docs">';       
           if($sql_data['266617X36X2259_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X36X2259']);
              // print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>"; 
                  $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
      
           }
          $html .= '
        </ol>
      </div>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school.";
          $html .='</div>';
      }

        $html .='</ul>
    </div>';
        
 
   $html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

   
    <h2 class="heading section land"><img src="images/land.png" width="94" height="94">Land</h2>
    <div class="wrapper">
    	<div class="task-area">
            <h3 class="task">Task 1: Land Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X7X1991SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X7X1991SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X7X1991SQ003'];
            $html .='</span></p>
        </div>';


$html .='<h3 class="task">Task 2: Measure the four critical areas of your school campus</h3>';

        $html .='<ul class="list">
            <li>
                <p class="orange"><span>1</span><span> Complete the table:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Your school’s area</th>
                    </tr>
                    <tr>
                        <td>Ground coverage area</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ001_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Green landscaped area on-ground</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ002_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Green cover on terrace/ balconies</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ003_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Surface parking area</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ004_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Play area that is paved/ concrete</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ005_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Play area that has grass</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ006_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Service Area</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ007_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ008_SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Total site area in m2</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X1810SQ009_SQ002']);
                        $html .='</td>
                    </tr>
                   
                    
                </table>
            </li>';   
        
           $html .='<li>
                <p class="orange"><span>2</span><span> Complete the table:</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Ground coverage area</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X2279SQ001']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Number of floors</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X2279SQ002']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Rooftop</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X2279SQ003']);
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Total built-up area</td>
                        <td>';
                        $html .=number_format($sql_data['266617X7X2279SQ004']);
                        $html .='</td>
                    </tr>
                    
                </table>
            </li>';
        
     $html .='<h3 class="task">Task 3: Explore the number of species of plants and animals in your school</h3>           
           ';
     
             $html .='<li>
                <p class="orange"><span>3</span><span> How many species of plants and animals exist in your school?</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Native</th>
                        <th>Exotic</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Plants</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ001_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ001_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Animals</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ003_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X7X189SQ003_SQ004'];
                        $html .='</td>
                    </tr>
                    
                </table>
            </li>';           
            
            $html .='
            <h3 class="task">Task 4: Find out if your school uses pesticides</h3>           
            ';
            
            $html .='<li>
                <p class="orange"><span>4</span><span> Do you use chemical based pesticides in your school green cover?</span></p>
                <p>';
            if($sql_data['266617X7X196'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           if($sql_data['266617X7X2258_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">
        Supporting Documents
        <ol class="support-docs">';       
           if($sql_data['266617X7X2258_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X7X2258']);
              // print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>"; 
                 $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
      
           }
          $html .= '
        </ol>
      </div>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school.";
          $html .='</div>';
      }

        $html .='</ul>
    </div>';
 
$html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

   
    <h2 class="heading section water"><img src="images/water.png" width="94" height="94">Water</h2>
    <div class="wrapper">
    	<div class="task-area">
            <h3 class="task">Task 1: Water Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X37X1982SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X37X1982SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X37X1982SQ003'];
            $html .='</span></p>
        </div>';
            
        $html .='
            <h3 class="task">Task 2: How much water does your school use?</h3>           
            ';
        
        $html .='<ul class="list">
            <li>
                <p class="orange"><span>1</span><span> What is your school total water consumption per day?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1883']);
                $html .='</p>
            </li>';
       
                
        $html .='<li>
                <p class="orange"><span>2</span><span> Where does the water you use come from? Please provide the quantity. </span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Surface water (streams/ lakes/ ponds, etc)</th>
                        <th>Ground water (hand pump/ borewell/ well, etc)</th>
                        <th>Stored rainwater</th>
                    </tr>
                    <tr>
                        <td>Municipality</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ001_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Panchayat</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ002_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Private supplier</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ003_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>School`s own supply (Example: borewell; rainwater harvesting facility, etc)</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1884SQ004_SQ003'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';               
                
        $html .='<li>
                <p class="orange"><span>3</span><span> Do you get 24/7 supply of water?</span></p>
                <p>';
            if($sql_data['266617X37X1885'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           if($sql_data['266617X37X1885'] == "N")
           {
               $html .='
            <li>
                <p class="orange"><span>3a</span><span> How many hours of water supply does your school get?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1886']);
                $html .='</p>
            </li>';
           }
           
           $html .='<li>
                <p class="orange"><span>4</span><span> Do you use storage tanks to store water? </span></p>
                <p>';
            if($sql_data['266617X37X1887'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
            if($sql_data['266617X37X1887'] == "Y")
           {
               $html .='
            <li>
                <p class="orange"><span>4a</span><span> What is the capacity of the tank(s)?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1888']);
                $html .='</p>
            </li>';
                
                
            $html .='<li>
                <p class="orange"><span>4b</span><span> Where does the water you use come from? Please provide the quantity. </span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Morning</th>
                        <th>After Noon</th>
                        <th>Evening</th>
                        <th>As and when required</th>
                    </tr>
                    <tr>
                        <td>Municipality</td>
                        <td>';
                        $html .=$sql_data['266617X37X1889SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1889SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1889SQ001_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1889SQ001_SQ004'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';             
           }
           
       $html .='
            <li>
                <p class="orange"><span>5</span><span> How many drinking water taps do you have?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1893']);
                $html .='</p>
            </li>';  
                
                
       $html .='
            <li>
                <p class="orange"><span>6</span><span> How many ablution taps (taps used for washing hands only) do you have?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1894']);
                $html .='</p>
            </li>';         
      
        $html .='
            <li>
                <p class="orange"><span>7</span><span> How many urinals (strictly used for urination only) do you have?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1895']);
                $html .='</p>
            </li>';        
           
        $html .='<li>
                <p class="orange"><span>8</span><span> Where does the water you use come from? Please provide the quantity. </span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Girls</th>
                        <th>Boys</th>
                        <th>Common</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Number of toilets</td>
                        <td>';
                        $html .=$sql_data['266617X37X1896SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1896SQ005_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1896SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1896SQ005_SQ004'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';                     
  
$html .='
            <h3 class="task">Task 5: Does your school harvest rainwater?</h3>           
           ';                        

$html .='<li>
                <p class="orange"><span>9</span><span>  What is the average annual rainfall received by your area (In mm)?</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Local</th>
                        <th>District</th>
                        <th>State</th>
                        
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>';
                        $html .=$sql_data['266617X37X1897SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1897SQ004_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1897SQ004_SQ002'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';   
                        
                        
$html .='<li>
                <p class="orange"><span>10</span><span>  What is the average annual rainfall of your area (In mm)?</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>10-year average</th>
                        <th>25-year average</th>
                        <th>30-year average</th>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>';
                        $html .=$sql_data['266617X37X1898SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1898SQ004_SQ003'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X37X1898SQ004_SQ002'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';                           
$html .='<li>
                <p class="orange"><span>11</span><span> What is the number of rainy days in your area?</span></p>
                <p>';
                $html .=number_format($sql_data['266617X37X1899']);
                $html .='</p>
            </li>';  
                
$html .='<li><p class="orange"><span>12</span><span> Do you have RWH system in your school?</span></p>
           <p>';
           if($sql_data['266617X37X1900'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';
 if($sql_data['266617X37X1900'] == "Y")
     {
             
        $html .='<li>
                <p class="orange"><span>12a</span><span> If yes, what kind of RWH system do you use?</span></p>
                <p>';
               if($sql_data['266617X37X1901SQ002'] == "Y")
        {
            $html .= "Storage Tanks";
        }
        if($sql_data['266617X37X1901SQ003'] == "Y")
        {
            $html .= "<br>";
            $html .= "Recharging of ground water";
        }
        if($sql_data['266617X37X1901SQ004'] == "Y")
        {
            $html .= "<br>";
            $html .= "Combination of recharging groundwater and storage";
        }
                $html .='</p>
            </li>';     
     
     }  
     
$html .='
            <h3 class="task">Task 6: Does your school reuse/recycle water?</h3>           
         ';     


$html .='<li><p class="orange"><span>13</span><span> Do you recycle/reuse the generated waste water?</span></p>
           <p>';
           if($sql_data['266617X37X1904'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';

if($sql_data['266617X37X1904'] == "Y")
    {

            $html .='<li><p class="orange"><span>13a</span><span>  If you recycle/reuse waste water, do you treat the waste water?</span></p>
           <p>';
           if($sql_data['266617X37X1905'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';   
    
   if($sql_data['266617X37X1905'] == "Y")
           {  
      
    $html .='<li>
                <p class="orange"><span>13b</span><span> If your school partially treats the waste water, locate the waste water exit-point in your school and give its location(s) on the school site.</span></p>
                <p>';
                $html .=$sql_data['266617X37X1906'];
                $html .='</p>
            </li>';  
           }        
           
    }           
 
    
 
           if($sql_data['266617X37X2257_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">
        Supporting Documents
        <ol class="support-docs">';       
           if($sql_data['266617X37X2257_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X37X2257']);
              // print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>"; 
                  $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
      
           }
          $html .= '
        </ol>
      </div>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school.";
          $html .='</div>';
      }

        $html .='</ul>
    </div>';   


 $html .='<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>

   
    <h2 class="heading section waste"><img src="images/waste.png" width="94" height="94">Waste</h2>
    <div class="wrapper">
    	<div class="task-area">
            <h3 class="task">Task 1: Waste Audit Team</h3>
            <p><span>Name of Teacher:</span><span>';
            $html .=$sql_data['266617X38X2026SQ001'];
            $html .='</span></p>
            <p><span>Name of Administrative staff:</span><span>';
            $html .= $sql_data['266617X38X2026SQ002'];
            $html .='</span></p>
            <p><span>Name of Students:</span><span>';
            $html .=$sql_data['266617X38X2026SQ003'];
            $html .='</span></p>
        </div>';
            
        $html .='
            <h3 class="task">Task 2: What is the waste segregation system in your school?</h3>           
            ';      
        
        $html .='<ul class="list">
            <li>
                <p class="orange"><span>1</span><span> Does your school segregate solid waste?</span></p>
                <p>';
            if($sql_data['266617X38X2032'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
            </li>';
           
           if($sql_data['266617X38X2032'] == "Y")
           {
               $html .='<li>
                <p class="orange"><span>1a</span><span> Who segregates the waste at source?</span></p>
                <ol>';
                if($sql_data['266617X38X2033SQ001'] == "Y")
        {
             $html .= "<li>";
             $html .= "Housekeeping";
             $html .= "</li>";
        }
        if($sql_data['266617X38X2033SQ002'] == "Y")
        {
            $html .= "<li>";
            $html .= "Gardener";
            $html .= "</li>";
        }
        if($sql_data['266617X38X2033SQ003'] == "Y")
        {
            $html .= "<li>";
            $html .= "Ragpicker";
            $html .= "</li>";
        }
        if($sql_data['266617X38X2033other'] != "")
        {
            $html .= "<li>";
            $html .= "Other: ". $sql_data['266617X38X2033other'];
            $html .= "</li>";
        }
                $html .='</ol>
                </li>'; 
                
            $html .='<li>
                <p class="orange"><span>1b</span><span> Who segregates the waste in classrooms?</span></p>
                <ol>';
                if($sql_data['266617X38X2037SQ001'] == "Y")
        {
            $html .= "<li>";
            $html .= "Students and Teachers";
            $html .= "</li>";
        }
        if($sql_data['266617X38X2037SQ002'] == "Y")
        {
            $html .= "<li>";
            $html .= "Housekeeping (Sweeper)";
            $html .= "</li>";
        }
        if($sql_data['266617X38X2037other'] != "")
        {
            $html .= "<li>";
            $html .= "Other: ". $sql_data['266617X38X2037other'];
            $html .= "</li>";
        }
                $html .='</ol>
                </li>';    
                
           }


$html .='<li>
                <p class="orange"><span>2</span><span> Where does the water you use come from? Please provide the quantity. </span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>No bin</th>
                        <th>One bin</th>
                        <th>Two bins (wet & dry)</th>
                        <th>Three bins or more</th>
                    </tr>
                    <tr>
                        <td>Classrooms</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ001_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ001_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Playgrounds</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ002_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ002_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Common area (e.g. reception, corridors)</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ003_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ003_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Staffroom</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ004_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ004_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Laboratory</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ005_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ005_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Canteen</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ006_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ006_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ006_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Clinic/ Sick room</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ007_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ007_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ007_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Library</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ008_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ008_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ008_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Toilets</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ009_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ009_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ009_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ010_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ010_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ010_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ010_SQ004'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ011_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ011_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2143SQ011_SQ003'];
                        $html .='</td><td>';
                        $html .=$sql_data['266617X38X2143SQ011_SQ004'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';
      
    
$html .='
            <h3 class="task">Task 3: How much waste does your school generate?</h3>           
         ';    
 
$html .='<li>
                <p class="orange"><span>3</span><span> Determine the quantity of waste generated in your school. (in grams)</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Collection per month (Frequency may differ)</th>
                    </tr>
                    <tr>
                        <td>Garden/ horticulture waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ001_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Kitchen waste </td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ002_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Paper</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ003_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Plastic</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ004_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Wood, glass, metal, classroom furniture</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ005_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>E-waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ006_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Biomedical waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ007_SQ001'];
                        $html .='</td>
                        
                    </tr>
                    <tr>
                        <td>Sanitary waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ008_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Construction and Demolition (C & D) waste </td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ010_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Hazardous waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ011_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Total (in grams) </td>
                        <td>';
                        $html .=$sql_data['266617X38X2125SQ009_SQ001'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';

$html .='
            <h3 class="task">Task 4: How much waste does your school recycle/treat?</h3>           
         ';


$html .='<li><p class="orange"><span>4</span><span>  Does your school recycle any generated waste?</span></p>
           <p>';
           if($sql_data['266617X38X2041'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>'; 
           
           if($sql_data['266617X38X2041'] == "Y")
           {
               $html .='<li>
                <p class="orange"><span>4a</span><span> Determine the quantity of waste generated in your school. (in grams)</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Quantity</th>
                    </tr>
                    <tr>
                        <td>Garden/ horticulture waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ001_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Kitchen waste </td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ002_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Paper</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ003_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Wood, glass, metal, classroom furniture</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ004_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>E-waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ005_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Biomedical waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ006_SQ001'];
                        $html .='</td>
                        
                    </tr>
                    <tr>
                        <td>Sanitary waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ007_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Construction and Demolition (C & D) waste </td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ008_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Hazardous waste</td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ009_SQ001'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Total (in grams) </td>
                        <td>';
                        $html .=$sql_data['266617X38X2042SQ010_SQ001'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';
           }

$html .='<li><p class="orange"><span>5</span><span>  Does your school have a composting facility?</span></p>
           <p>';
           if($sql_data['266617X38X2064'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';            
 if($sql_data['266617X38X2064'] == "Y")
 {
  
     $html .='<li>
                <p class="orange"><span>5a</span><span> What is the methodology used?</span></p>
                <p>';
            if($sql_data['266617X38X2065SQ001'] == "Y")
        {
            $html .= "Natural composting without added microbes";
        }
        if($sql_data['266617X38X2065SQ002'] == "Y")
        {
            $html .= "Mechanical composting (with electricity/ machines)";
        }
        if($sql_data['266617X38X2065other'] != "")
        {
            $html .= "Other: ".$sql_data['266617X38X2065other'];
        }
           $html .='</p>
            </li>';
     
    $html .='<li>
                <p class="orange"><span>5b</span><span> What is the quantity of compost that is generated per month?</span></p>
                <p>';
            $html .=number_format($sql_data['266617X38X2068'],2);
           $html .='</p>
            </li>';       
     $html .='<li>
                <p class="orange"><span>5c</span><span> What is the purpose of the compost that is generated per month? </span></p>
                <p>';
            if($sql_data['266617X38X2069SQ001'] == "Y")
        {
            $html .= "Natural composting without added microbes";
        }
        if($sql_data['266617X38X2069SQ002'] == "Y")
        {
            $html .= "Mechanical composting (with electricity/ machines)";
        }
        if($sql_data['266617X38X2069SQ003'] != "")
        {
            $html .= "Other: ".$sql_data['266617X38X2065other'];
        }
        if($sql_data['266617X38X2069SQ004'] != "")
        {
            $html .= "Other: ".$sql_data['266617X38X2065other'];
        }
           $html .='</p>
            </li>';      
 }          
 
 $html .='<li><p class="orange"><span>6</span><span> Does your school encourage students & teachers to reuse textbooks?</span></p>
           <p>';
           if($sql_data['266617X38X2074'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';  
 


$html .='<li>
                <p class="orange"><span>7</span><span> Table to understand whether internal or external waste recycling procedures are applied to waste.</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Local kabadiwala (the scrap collector)</th>
                        <th>Authorised dealer</th>
                        <th>Dumped at a designated community site</th>
                        <th>Internal procedure</th>
                    </tr>
                    <tr>
                        <td>Paper (e.g., used notebooks, used examination paper, subscription newspaper and magazines) </td>
                        <td>';
                        if($sql_data['266617X38X2171SQ001_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ001_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ001_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                        if($sql_data['266617X38X2171SQ001_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Plastic (e.g. plastic bottles)</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ002_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ002_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ002_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                        if($sql_data['266617X38X2171SQ002_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Horticultural waste </td>
                        <td>';
                        if($sql_data['266617X38X2171SQ003_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                       if($sql_data['266617X38X2171SQ003_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ003_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                        if($sql_data['266617X38X2171SQ003_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>E-waste (e.g. broken, unusable computers)</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ004_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ004_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ004_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                       if($sql_data['266617X38X2171SQ004_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Hazardous waste (e.g. diesel fuel, battery)</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ007_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ007_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ007_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                       if($sql_data['266617X38X2171SQ007_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Wood,glass, metal scrap, other scrap </td>
                        <td>';
                        if($sql_data['266617X38X2171SQ005_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                       if($sql_data['266617X38X2171SQ005_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                         if($sql_data['266617X38X2171SQ005_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .='<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                        if($sql_data['266617X38X2171SQ005_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Biomedical waste (e.g. waste from Nurse\'s room in school, e.g. band-aids, syringe) </td>
                        <td>';
                        if($sql_data['266617X38X2171SQ008_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ008_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                        <td>';
                        if($sql_data['266617X38X2171SQ008_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td><td>';
                       if($sql_data['266617X38X2171SQ008_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
                        $html .='</td>
                    </tr>
                    
                </table>
            </li>';           
           

$html .='
            <h3 class="task">Task 5: How does your school dispose waste?</h3>           
         ';           
 
$html .='<li>
                <p class="orange"><span>8</span><span> What is the final destination for waste that is disposed of externally?</span></p>
                <p>';
           if($sql_data['266617X38X2076'] == "A1")
           {
               $html .= "Open dumping";
           }
           elseif($sql_data['266617X38X2076'] == "A2")
           {
               $html .= "Designated dumping site (Dhalao)";
           }
           elseif($sql_data['266617X38X2076'] == "A3")
           {
               $html .= "Landfill Site";
           }
           elseif($sql_data['266617X38X2076'] == "A4")
           {
               $html .= "Don’t know";
           }
           $html .='</p>
            </li>';   

$html .='<li><p class="orange"><span>9</span><span> Does your school burn waste?</span></p>
           <p>';
           if($sql_data['266617X38X2081'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';             
if($sql_data['266617X38X2081'] == "Y")
{
 
    $html .='<li>
                <p class="orange"><span>9a</span><span> Where does your school burn waste?</span></p>
                <p>';
           if($sql_data['266617X38X2082'] == "A1")
           {
               $html .= "Inside the school";
           }
           elseif($sql_data['266617X38X2082'] == "A2")
           {
               $html .= "Outside the school";
           }
           $html .='</p>
            </li>';  
           
    $html .='<li>
                <p class="orange"><span>9b</span><span> What kind of waste is being burnt/ incinerated?</span></p>
                <p>';
            if($sql_data['266617X38X2083SQ001'] == "Y")
        {
            $html .= "Horticultural";
        }
        if($sql_data['266617X38X2083SQ002'] == "Y")
        {
            $html .= "Plastic";
        }
        if($sql_data['266617X38X2083SQ003'] != "")
        {
            $html .= "Tyres";
        }
           $html .='</p>
            </li>';         
} 

$html .='<li>
                <p class="orange"><span>10</span><span> Does your school have the following? If yes, please give the numbers.</span></p>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th>Working conditions</th>
                        <th>Non-working condition</th>
                    </tr>
                    <tr>
                        <td>TVs</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ001_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ001_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ001_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>VCR or DVD players</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ002_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ002_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ002_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Refrigerators and freezers </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ003_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ003_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ003_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Washing machines</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ004_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ004_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ004_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Air conditioners </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ005_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ005_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ005_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Heaters</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ006_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ006_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ006_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Microwaves</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ007_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ007_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ007_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Ovens</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ008_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ008_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ008_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Toasters</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ009_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ009_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ009_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Electric Kettles</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ010_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ010_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ010_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Personal computers (CPU, mouse, screen and keyboard included) </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ011_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ011_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ011_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Laptop computer (CPU, mouse, screen and keyboard included) </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ012_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ012_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ012_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Notebook computers </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ013_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ013_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ013_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Notepad computers </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ014_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ014_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ014_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Printers</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ015_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ015_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ015_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Copying equipment (Photocopiers)</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ016_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ016_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ016_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Projectors</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ017_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ017_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ017_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Whiteboards</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ018_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ018_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ018_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Electrical & electronic typewriters</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ019_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ019_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ019_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Pocket & desk calculators </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ020_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ020_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ020_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Fax machines</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ021_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ021_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ021_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Telex</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ022_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ022_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ022_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Telephones</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ023_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ023_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ023_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Pay telephones</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ024_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ024_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ024_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Mobiles</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ025_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ025_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ025_SQ003'];
                        $html .='</td>
                    </tr>
                    <tr>
                        <td>Answering systems </td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ026_SQ001'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ026_SQ002'];
                        $html .='</td>
                        <td>';
                        $html .=$sql_data['266617X38X2087SQ026_SQ003'];
                        $html .='</td>
                    </tr>
                </table>
            </li>';
 
                        
$html .='<li><p class="orange"><span>11</span><span> Do you know that your E-waste can be collected by an authorised dealer or dismantler?</span></p>
           <p>';
           if($sql_data['266617X38X2114'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>';             
if($sql_data['266617X38X2114'] == "Y")
{
 
    $html .='<li>
                <p class="orange"><span>11a</span><span> Who collects your e-waste, when not in working condition?</span></p>
                <p>';
          if($sql_data['266617X38X2115'] == "A1")
        {
            $html .= "Kabadiwalla/ Scrapdealer";
        }
        elseif($sql_data['266617X38X2115'] == "A2")
        {
            $html .= "Taken back by manufacturer";
        }
        elseif($sql_data['266617X38X2115'] != "A4")
        {
            $html .= "Authorised dealer";
        }
        elseif($sql_data['266617X38X2115'] != "A5")
        {
            $html .= "Authorised dismantler";
        }
        elseif($sql_data['266617X38X2115other'] != "")
        {
            $html .= "Other: ".$sql_data['266617X38X2115other'];
        }
         
           $html .='</p>
            </li>';                         
}                        

$html .='
            <h3 class="task">Task 6: School\'s initiatives</h3>           
         ';


$html .='<li><p class="orange"><span>12</span><span> Does the school have a policy on waste? </span></p>
           <p>';
           if($sql_data['266617X38X2121'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>'; 
if($sql_data['266617X38X2121'] == "Y")
{
    
    $html .='<p>Policy document</p>';
      if($sql_data['266617X38X2255_filecount'] > 0)
      {
      $data_arr = json_decode($sql_data['266617X38X2255']);
      $html .= str_replace('%20', ' ', $data_arr[0]->name);
      
      } 
    
}

$html .='<li><p class="orange"><span>13</span><span> Are there awareness drives with regard to Reduce, Recycle and Reuse?</span></p>
           <p>';
           if($sql_data['266617X38X2122'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>'; 
if($sql_data['266617X38X2122'] == "Y")
{
    
    $html .='<li><p class="orange"><span>13a</span><span> What form do these awareness drives take?</span></p>
           <p>';
           if($sql_data['266617X38X2123SQ001'] == "Y")
        {
            $html .= "As part of the curriculum";
        }
        if($sql_data['266617X38X2123SQ002'] == "Y")
        {
            $html .= "As part of extracurricular activities such as guest lectures";
        }
        if($sql_data['266617X38X2123SQ003'] != "Y")
        {
            $html .= "By the showcasing of posters and stickers";
        }
           $html .='</p>
           </li>'; 
    
}

$html .='<li><p class="orange"><span>14</span><span> Is the study of the environment integrated into the curriculum?</span></p>
           <p>';
           if($sql_data['266617X38X2124'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           $html .='</p>
           </li>'; 
           

           if($sql_data['266617X38X2256_filecount'] > 0)
      {
    $q = 0;
      $html .='<div class="support_files_head">
        Supporting Documents
        <ol class="support-docs">';       
           if($sql_data['266617X38X2256_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X38X2256']);
              // print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  $html .= "<li>"; 
                  $html .= str_replace('%20', ' ', $dataResult->name);
                  $html .="</li>";
               }
      
           }
          $html .= '
        </ol>
      </div>';
      }
      else
      {
          $html .='<div class="support_files">';
          $html .= "No documents uploaded by the school.";
          $html .='</div>';
      }

        $html .='</ul>
    </div>';
           
           
           
$html .='</div>
</body>
</html>';
//echo $html;
//die();
        
//$html .= ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->set_paper("A4");
$dompdf->load_html($html);
$dompdf->render();
$pdf = $dompdf->output();
unset($dompdf);
$date = $tid;
$pdf_sc_city = $city;
$school_name_pdf = str_replace(' ', '_', $school_name);
$postfix = "$school_name_pdf"."_".$pdf_sc_city."_".$date.'.pdf';

//echo $postfix;


//$dompdf->stream("Response.pdf");
//file_put_contents($postfix, $pdf);

/////////////////////////////////////////////// MAIL SCRIPT ///////////////////////////////////////////////////////////////////////
    $to = $altr_id;
    //if($altr_id !="")
    //{
    //$to = $email.','.$altr_id;
    //}
    //else
    //{
    //$to = $email;    
    //}
    $from = 'support@greenschoolsprogramme.org';
    $from_email = 'support@greenschoolsprogramme.org';
    $subject = "PDF of your GSP audit report 2015.";
    $message = "Dear GSP Audit team,\n\n";
    $message .= "A Big thank you for participating in Green Schools Programme (GSP) Audit 2015. \n\n";
    $message .= "We are pleased to announce that we had around 1400 registrations from the 28 states and 3 Union Territories of India. Of the total national footprint, 37 per cent of the registered schools could submit the GSP audit on time. Around 23 per cent of the schools had started filing the GSP audit report but couldn't submit within the deadline, which was extended once for three weeks. The rest 40 per cent of the schools had registered but never started the audit.  \n\n";
    $message .= "From now to February, we will be validating and analysing the reports. We will announce the results in February / March, 2016.  \n\n";
    $message .= "Attached is your pdf of the GSP Audit report for your records. Your data has been archived and should you misplace the attached, you can contact us at support@greenschoolsprogramme.org. Your GSP audit report 2015 will serve as your school's baseline to measure your year-on-year green performance. \n\n";
    $message .= "Please feel free to contact us at 011-40616000 Extn-219 or write to us at support@greenschoolsprogramme.org in case you have any query.\n\n";
    $message .= "Happy holidays and wishing you all a wonderful 2016.\n\n";
    $message .= "GSP Team";
    

    // boundary 
    $mime_boundary = md5(time()); 

    // multipart boundary 
$headers = 'From: Green Schools Programme <support@greenschoolsprogramme.org>'. "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: multipart/mixed; boundary="' . $mime_boundary . '"' . "\r\n";

// place legacy message before first MIME part
$emailBody = 'This is a multi-part message in MIME format.' . "\n"; 

// make user text message first part of body
$emailBody .= '--' . $mime_boundary . "\r\n";

// first MIME part is the email message in text format
$emailBody .= 'Content-Type: text/plain; charset=iso-8859-1' . "\r\n";

// ==== SET MESSAGE 
$emailBody .= 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n"; // double CRLF (empty line) between headers and body
$emailBody .= $message . "\r\n";

// append this attachment to emailBody
$emailBody .= '--' . $mime_boundary . "\r\n";

// set this part's MIME headers
$emailBody .= 'Content-Type: "application/pdf"; name="' . $postfix . '"' . "\r\n"; // set mime type of file attachment
$emailBody .= 'Content-Transfer-Encoding: base64' . "\r\n"; // set transfer encoding (always 64 bit)
$emailBody .= 'Content-Disposition: attachment; filename="' . $postfix . '"' . "\r\n\r\n"; // double CRLF between headers and body

//$fileContents = $this->encodeFileContents($postfix);
$fileContents = chunk_split(base64_encode($pdf)); 
// add this file's contents as body
$emailBody .= $fileContents . "\r\n"; // double CRLF after file contents??????


// Finished attachments. Add closing mime boundary.
$emailBody .= '--' . $mime_boundary . '--' . "\r\n";  // mail will probably add one more CRLF since this is a separte param like headers


    // send
    //print $message;

 $ok = mail($to, $subject, $emailBody, $headers, '-odb -fsupport@greenschoolsprogramme.org'); 
    
//$ok = true;
    //mail('gaurav.saxena@netprophetsglobal.com', 'Test message', 'Hello', 'From:support@greenschoolsprogramme.org');
    if($ok)
    {
       echo "Sent to " . $school_name_pdf;
       echo "<br>";
    }
 else {
        echo "Failed to send to " . $school_name_pdf;
       echo "<br>";
    }
   
}