<?php
include('config.php');
require_once("dompdf/dompdf_config.inc.php");

$link = mysql_connect($servername, $username, $password) or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");

$sql_token_details = $_REQUEST['id'];
$sql_email_school = mysql_fetch_array(mysql_query("SELECT `email`, `attribute_1`, `tid` FROM lime_tokens_266617 WHERE `token` = '".$sql_token_details."'")); 
$sql_data = mysql_fetch_array(mysql_query("SELECT * FROM lime_survey_266617 WHERE `token` = '".$sql_token_details."'"));   

$sql_country = mysql_fetch_array(mysql_query("SELECT `name` FROM `countries` WHERE `id` = '".$sql_data['266617X34X1593']."'"));

//for percentage
//$sql_percentage = mysql_fetch_array(mysql_query("select `completeness` from `lime_answers_for_progress` where `token` = '".$sql_token_details."'"));
$html ='<html>
<head>
<link href="custom_pdf.css" rel="stylesheet">
</head>    
<body>
<header class="form-hdr ">
  <div class="container">
    <figure class="logo2" style="text-align:center"><img src="images/logo.png" alt="" class="img-responsive" height="87" width="332"></figure>
  </div>
</header>    
<p style=text-align:center>Your Responses For <strong>GREEN SCHOOLS PROGRAMME</strong> Audit</p>
<p style=text-align:center>School Name: '; $html .= $sql_data['266617X34X1590']; $html .= '</p>';
$html .= '<p style=text-align:center>Address: '; $html .= $sql_data['266617X34X1591']; 
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
        if($sql_data['name'] !="")
        {    
        $html .= ' '; 
        }
        $html .= $sql_country['name']; $html .= '</p>';   
$html .= '<p style=text-align:center>Coordinator Name: '; $html .= $sql_data['266617X34X1604']; $html .='</p>';
$html .='<div class="container">
    <div class="content-form" style="padding-top: 2px;">
    <h1>School Profile</h1>
   <form>
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">1</span>  Name of the School / Institution</label>
        <p class="formanswertext">'; 
        $html .= $sql_data['266617X34X1590']; 
        $html .='</p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">2</span> Address</label>
        <p class="formanswertext">';
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
        if($sql_data['name'] !="")
        {    
        $html .= ' '; 
        }
        $sql_country['name'];
        $html .= '</p>';
        $html .= '</div>';
      $html .= '<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">3</span> Telephone Number (Landline Number with STD code)</label>
        <p class="formanswertext">(ISD) ';
      $html .= number_format($sql_data['266617X34X1597SQ001']); 
      $html .= '&nbsp;&nbsp; (STD) '; 
      $html .= number_format($sql_data['266617X34X1597SQ003']); 
      $html .= '&nbsp;&nbsp; (NUMBER) '; 
      $html .= number_format($sql_data['266617X34X1597SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
      $html .='</p>
        </div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">4</span> Mobile Number (Mobile Number with STD code)</label>
      <p class="formanswertext">(ISD)';
      $html .= number_format($sql_data['266617X34X1600SQ001']); 
      $html .= '&nbsp;&nbsp; (Number)'; 
      $html .= number_format($sql_data['266617X34X1600SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); 
      $html .='</p>
      </div>';
      $html .= '<div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">5</span> Principal Name</label>
      <p class="formanswertext">';
      $html .= $sql_data['266617X34X1602'];
      $html .='</p>
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">6</span> GSP Coordinator Name </label>
      <p class="formanswertext">';
      $html .= $sql_data['266617X34X1604'];
      $html .='</p>
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">7</span> GSP Coordinator Email</label>
      <p class="formanswertext">';
      $html .= $sql_data['266617X34X1605'];
      $html .='</p>
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">8</span> GSP Coordinator Mobile Number</label>
      <p class="formanswertext">(ISD) ';
      $html .= number_format($sql_data['266617X34X1606SQ001']); 
      $html .= '&nbsp;&nbsp; (Number) ';
      $html .= number_format($sql_data['266617X34X1606SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
      $html .='</p>';
      $html .='</div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">9</span> Category Of The School </label>
      <p class="formanswertext">';
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
      $html .='</p>  
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1"> <span class="cube ">10</span> Category For Your School (Not Applicable in Case of Residential Category)</label>
      <p class="formanswertext">';
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
      </div>';
      $html .='</form>';      
///////////////////////////////////////////////////////////////////////////////////GENERAL QUESTIONS//////////////////////////////////////////////

$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
      $html .='<h1 style="padding-top:30px;">General Questions</h1>';
      
      
      
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span>How many levels does your school have? Please choose what is applicable.
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Check or uncheck the answer for each subquestion. " class="question subquestions-list questions-list  checkbox-list ">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
<col width="04%" class="even">
<col width="04%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Pre-primary</th>
	<th>1st</th>
	<th>2nd</th>
	<th>3rd</th>
	<th>4th</th>
	<th>5th</th>
	<th>6th</th>
	<th>7th</th>
	<th>8th</th>
	<th>9th</th>
	<th>10th</th>
	<th>11th</th>
	<th>12th</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X32X1674SQ001">
	<th width="20%" class="answertext">
School Level
<input type="hidden" value="" id="java266617X32X1674SQ001" name="java266617X32X1674SQ001" class="form-control">
	</th>
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
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';
      
      $html .= '<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Is your school single gender or mixed gender? 
      </span>
      </label>
          <p class="formanswertext">';
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
          $html .='</p></div>';
      
      $html .= '<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> Which board of education does the school follow?
      </span>
      </label>
          <p class="formanswertext">';
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
      </div>';

      
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">4</span> Total population of the school </label>
        <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Male</th>
	<th>Female</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ001">
	<th width="20%" class="answertext">
Students
<input type="hidden" value="" id="java266617X32X33SQ001" name="java266617X32X33SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ001_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ001_SQ002'];
        $html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ001_SQ003'];
        $html .='</td>';
        $html .='</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ002">
	<th width="20%" class="answertext">
Teachers';
	$html .='</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ002_SQ001']; 
        $html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ002_SQ002'];
        $html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ002_SQ003'];
        $html .='</td>';
$html .='</tr>';

$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ003">
	<th width="20%" class="answertext">
Non-Teaching Staff
<input type="hidden" value="" id="java266617X32X33SQ003" name="java266617X32X33SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ003_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ003_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ003_SQ003'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ004">
	<th width="20%" class="answertext">
Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ004_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ004_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">';
	$html .=$sql_data['266617X32X33SQ004_SQ003'];
	$html .='</td>
</tr>
	
	
	</tbody>
</table>
      </div> ';
      
      
   $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">5</span>  What is the total number of working days of your school in a year?</label>
        <p class="formanswertext">';
   $html .=number_format($sql_data['266617X32X40'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
   $html .='</p>
      </div>';   
      
   $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">6</span>  Month(s) in which the GSP audit was carried out? </label>
        <p class="formanswertext">';
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
      </div>';  
      
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">7</span>  Where is the school located?</label>
        <p class="formanswertext">';
            if($sql_data['266617X32X56'] == "A1")
                { 
                $html .="Urban Area"; 
                }
                else 
                    {
                    $html .="Rural Area"; 
                    } 
                   
        
        $html .='</p>
        </div>';
      
      /////////////////////////////////////////////////// AIR CHAPTER /////////////////////////////////////////////////////////////////////////
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />"; 
$html .= "<br />";
$html .= "<br />"; 
      $html .='<h1 style="padding-top:30px;">Air</h1>';
      
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Air Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X4X1973SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X4X1973SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X4X1973SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';
      
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">1</span> How many classrooms does your school have? </label>
        <p class="formanswertext">';
      $html .=number_format($sql_data['266617X4X1127']);
      $html .='</p>
      </div>';
      
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">2</span> Window-floor ratio of classrooms in the school.</label>
        
        <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list   ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Details of the classroom (e.g. Class II section b)</th>
	<th class="answertext">X = Area of floor (LxB)</th>
	<th class="answertext">Y = Area of openings (LxH)</th>
	<th class="answertext">Percentage of the floor area being ventilated (y/x x 100)</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ001">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ001" name="java266617X4X2197SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ001_SQ001'];
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ001_SQ002'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ001_SQ003'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ001_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ002">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ002_SQ001'];
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ002_SQ002'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ002_SQ003'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ002_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ003">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ003_SQ001'];
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ003_SQ002'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ003_SQ003'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ003_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ004">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ004_SQ001'];
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ004_SQ002'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ004_SQ003'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ004_SQ004'],2);
			$html .='</td>';
		$html .='</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ005">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ005_SQ001'];
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ005_SQ002'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ005_SQ003'],2);
			$html .='</td>';
	$html .='<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ005_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ006">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ006_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ006_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ006_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ006_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ007">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ007_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ007_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ007_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ007_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ008">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ008_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ008_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ008_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ008_SQ004'],2);
			$html .='</td>';

		$html .='</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ009">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ009_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ009_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ009_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ009_SQ004'],2);
			$html .='</td>

		</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ010">
			<th class="answertext">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X4X2197SQ010_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ010_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ010_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ010_SQ004'],2);
			$html .='</td>

		</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ011">
			<th class="answertext">
				Total
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .='<input type="text" value="" size="20" class="empty form-control" id="answer266617X4X2197SQ011_SQ001" name="266617X4X2197SQ011_SQ001" style="display: none;">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ011_SQ002'],2);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X4X2197SQ011_SQ003'],2);
			$html .='</td>
	<td class="answer_cell_00SQ004 answer-item text-item">';
				//$html .=$sql_data['266617X4X2197SQ011_SQ004'];
			$html .='</td>

		</tr>
	</tbody>
</table>
        
        
      </div>';
      
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> What is the ownership used by the vehicles used in your school? Please choose what is applicable?
      </span>
      </label>
          <p class="formanswertext">';
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
      </div>';
      
      $html .='<div class="question array-multi-flexi" id="question2217">
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4</span>&nbsp;Specify the type of fuel used by your school vehicles:

            </span>
            </label>

        <div class="answer clearfix">
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Diesel</th>
	<th>Petrol</th>
	<th>LPG</th>
	<th>CNG</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ001">
	<th width="20%" class="answertext">
Bus
<input type="hidden" value="" id="java266617X4X2217SQ001" name="java266617X4X2217SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ001_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ001_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ001_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ001_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ002">
	<th width="20%" class="answertext">
Car
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ002_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ002_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ002_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ002_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ003">
	<th width="20%" class="answertext">
Van
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ003_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ003_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ003_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ003_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ004">
	<th width="20%" class="answertext">
Sub-Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ004_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ004_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ004_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X2217SQ004_SQ004'];
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
</div>';
      
      
 $html .='<div class="question array-multi-flexi" id="question176">
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">5</span> How many members of the school community use each type of transport: 
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Students</th>
	<th>Teaching Staff</th>
	<th>Non-Teaching Staff</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ001">
	<th width="20%" class="answertext">
School bus
<input type="hidden" value="" id="java266617X4X176SQ001" name="java266617X4X176SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ001_SQ001'];
	$html .='</td>';
	$html .='<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ001_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ001_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ001_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ002">
	<th width="20%" class="answertext">
Public bus
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ002_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ002_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ002_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ002_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ003">
	<th width="20%" class="answertext">
School transport (other than bus)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ003_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ003_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ003_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ003_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ0012">
	<th width="20%" class="answertext">
Public transport (other than bus, Metro, car pool)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ0012_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ0012_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ0012_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ0012_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ005">
	<th width="20%" class="answertext">
Taxi four-wheeler
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ005_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ005_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ005_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ005_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ006">
	<th width="20%" class="answertext">
Taxi three-wheeler
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ006_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ006_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ006_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ006_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ007">
	<th width="20%" class="answertext">
Personal four-wheeler
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ007_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ007_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ007_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ007_SQ004'];
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ008">
	<th width="20%" class="answertext">
Personal two-wheeler
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ008_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ008_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ008_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ008_SQ004'];
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ009">
	<th width="20%" class="answertext">
Bicycle
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ009_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ009_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ009_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ009_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ010">
	<th width="20%" class="answertext">
On foot
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ010_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ010_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ010_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ010_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ011">
	<th width="20%" class="answertext">
Others (non-motorised)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ011_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ011_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ011_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ011_SQ004'];
	$html .='</td>
</tr>';


	$html .='<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ004">
	<th width="20%" class="answertext">
Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ004_SQ001'];
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ004_SQ002'];
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ004_SQ003'];
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X4X176SQ004_SQ004'];
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
</div>';     
      
      
 $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">6</span> How many students suffer from respiratory ailments ?
  </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                <p class="question answer-item text-item numeric-item  integeronly">'; 
	$html .=number_format($sql_data['266617X4X184']);
$html .='</p>
          
            </div>
            
            
    
        </div>
    </div>';     
      
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">7</span> Does the school laboratory have air quality monitoring equipment?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X4X187'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .= "No";
           }
           
          $html .='</p>
      </div>';
      
      if($sql_data['266617X4X2252_filecount'] > 0)
      {
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';       
           if($sql_data['266617X4X2252_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X4X2252']);
               $html .=$data_arr[0]->name;
           }
          $html .=  '</li>
        </ul>
      </div>';
      }
      else
      {
          $html .= "No documents uploaded by the school.";
      }
    ///////////////////////////////////////////////////////////// ENERGY CHAPTER /////////////////////////////////////////////////////////////  
    
      $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />"; 
$html .= "<br />";
$html .= "<br />"; 
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";      
    $html .='<h1 style="padding-top:30px;">Energy</h1>';
    
    $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Energy Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X8X1999SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X8X1999SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X8X1999SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';
      
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> Does your school have access to an electricity bill?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X8X237'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           
          $html .='</p>
      </div>';
      
          
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Does your school have its own vehicles?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X8X2274'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           
          $html .='</p>
      </div>';
      
      
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <span class="cube">3</span> Provide the details of total energy consumed by the school: <a data-tooltip="Type of use/purpose (mention the type of use in the above table): 1. Lighting 2. Housekeeping 3. Cooking 4. Transport 5. Teaching/learning aid. If your school does not use a particular source of energy." class="tt"><span class="badge">?</span></a> 
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-10  ">
<colgroup class="col-responses">

<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
</colgroup>

<thead>
<tr class="dontread">
	<td width="20%">&nbsp;</td>
	<th class="answertext">Quantity consumed/monthly average</th>
	<th class="answertext">Energy consumed in Megajoules (MJ)</th>
	<th class="answertext">Type of use</th>
</tr>
</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ001">
			<th class="answertext">
				Electricity from the board
				<input type="hidden" value="" id="java266617X8X2180SQ001" name="java266617X8X2180SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ001_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .= $sql_data['266617X8X2180SQ001_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ001_SQ003'];
			$html .='</td>

		</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ002">
			<th class="answertext">
				Petrol
				<input type="hidden" value="" id="java266617X8X2180SQ002" name="java266617X8X2180SQ002" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ002_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ002_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ002_SQ003'];
			$html .='</td>

		</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ003">
			<th class="answertext">
				Diesel
				<input type="hidden" value="" id="java266617X8X2180SQ003" name="java266617X8X2180SQ003" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ003_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ003_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ003_SQ003'];
			$html .='</td>

		</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ004">
			<th class="answertext">
				CNG
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ004_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ004_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ004_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ005">
			<th class="answertext">
				Kerosene
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ005_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ005_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ005_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ006">
			<th class="answertext">
				Coal
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ006_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ006_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ006_SQ003'];
			$html .='</td>

		</tr>';


	$html .='<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ007">
			<th class="answertext">
				Wood
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
        
       			$html .=$sql_data['266617X8X2180SQ007_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ007_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ007_SQ003'];
			$html .='</td>

		</tr>';


	$html .='<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ008">
			<th class="answertext">
				Animal waste
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ008_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ008_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ008_SQ003']; 
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ009">
			<th class="answertext">
				Solar
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ009_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ009_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ009_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ010">
			<th class="answertext">
				Wind
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ010_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ010_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ010_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ011">
			<th class="answertext">
				LPG
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ011_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ011_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ011_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ012">
			<th class="answertext">
				Others (specify)
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ012_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ012_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ012_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ013">
			<th class="answertext">
				Total
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ013_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ013_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=$sql_data['266617X8X2180SQ013_SQ003'];
			$html .='</td>

		</tr>
	</tbody>
</table>
       
            </div>
            
            
    
        </div>
    </div>';
      
  $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4</span> What is the average number of sunny days in your area?

            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        $html .= number_format($sql_data['266617X8X260']);
        $html .='</p>
        </div>
        </div>
    </div>';
      
     $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5</span> Are there any alternate sources of energy employed/ installed in your school?

     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
           if($sql_data['266617X8X261'] == "Y")
           {
                $html .= "Yes";
           }
           else
           {
                $html .= "No";
           }
           
         $html .='</p>
        </div>';   
      
     if($sql_data['266617X8X261'] == "Y")
     {
     $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5(a)</span> Name the alternate sources of energy employed/ installed in your school?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
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
        </div>
    </div> ';
      
      } 
      
      if($sql_data['266617X8X2260_filecount'] > 0)
           {
      
      $html .='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';
           if($sql_data['266617X8X2260_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X8X2260']);
               $html .= $data_arr[0]->name;
               
           }
            
        $html .='</li>  
        </ul>
      </div>';
           }
           else
           {
               $html .= "No documents uploaded by the school.";
           }
      /////////////////////////////////////////////////////////// FOOD CHAPTER //////////////////////////////////////////////

           $html .= "<br />"; 
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  
           $html .='<h1 style="padding-top:30px;">Good Food</h1>';        
      
 $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Food Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X36X2016SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X36X2016SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X36X2016SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';     
      
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> Does your school have a canteen?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1858'] == "Y")
           {
              $html .= "Yes";
           }
           else
           {
              $html .= "No";
           }
           
          $html .='</p>
      </div>';
      
      
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Does your school serve midday-meals?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1859'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
          $html .='</p>
      </div>';
      
      if($sql_data['266617X36X1859'] == "N")
      {
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)</span> Do students bring their own lunch from home?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1860'] == "Y")
           {
              $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           
          $html .='</p>
      </div>';
      } 
     if($sql_data['266617X36X1860'] == "Y")
      {
      $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)(1)</span>  How many students out of total student population bring home-made lunch?
      </span>
      </label>
          <p class="formanswertext">';
           $html .=number_format($sql_data['266617X36X1861']);
         $html .='</p>
      </div>';
         
         $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)(2)</span>  Of the students who bring lunch from home, how many bring packaged food?
      </span>
      </label>
          <p class="formanswertext">';
           $html .=number_format($sql_data['266617X36X1862']);
         $html .='</p>
      </div>'; 
         
       }   
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> Do teachers have the responsibility to ensure if the students are carrying lunch from home?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1863'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
          $html .='</p>
      </div>';

          
          
          
          
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4</span>&nbsp;What kind of food is being served/sold in your school? 
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-24  ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Please count all flavours/variants available in the school canteen separately</th>
	<th class="answertext">Total number of items sold in a month in the canteen</th>
	<th class="answertext">Month the food items were sold in </th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ001">
			<th class="answertext">
				Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc
				<input type="hidden" value="" id="java266617X36X1871SQ001" name="java266617X36X1871SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ001_SQ002" name="java266617X36X1871SQ001_SQ002" class="form-control">';
				$html .=number_format($sql_data['266617X36X1871SQ001_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ001_SQ001" name="java266617X36X1871SQ001_SQ001" class="form-control">';
				$html .=number_format($sql_data['266617X36X1871SQ001_SQ001']);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ001_SQ003" name="java266617X36X1871SQ001_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ001_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ002">
			<th class="answertext">
				Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee,  Foodles, Maggi, etc
				<input type="hidden" value="" id="java266617X36X1871SQ002" name="java266617X36X1871SQ002" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ002_SQ002" name="java266617X36X1871SQ002_SQ002" class="form-control">';
				$html .=number_format($sql_data['266617X36X1871SQ002_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ002_SQ001" name="java266617X36X1871SQ002_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ002_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ002_SQ003" name="java266617X36X1871SQ002_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ002_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ003">
			<th class="answertext">
				Potato fries and Burgers
				<input type="hidden" value="" id="java266617X36X1871SQ003" name="java266617X36X1871SQ003" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ003_SQ002" name="java266617X36X1871SQ003_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ003_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ003_SQ001" name="java266617X36X1871SQ003_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ003_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ003_SQ003" name="java266617X36X1871SQ003_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ003_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ004">
			<th class="answertext">
				Confectionery items (chocolate, candies, gums)
				<input type="hidden" value="" id="java266617X36X1871SQ004" name="java266617X36X1871SQ004" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ004_SQ002" name="java266617X36X1871SQ004_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ004_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ004_SQ001" name="java266617X36X1871SQ004_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ004_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ004_SQ003" name="java266617X36X1871SQ004_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ004_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ005">
			<th class="answertext">
				Ice-cream
				<input type="hidden" value="" id="java266617X36X1871SQ005" name="java266617X36X1871SQ005" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ005_SQ002" name="java266617X36X1871SQ005_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ005_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ005_SQ001" name="java266617X36X1871SQ005_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ005_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ005_SQ003" name="java266617X36X1871SQ005_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ005_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ006">
			<th class="answertext">
				Carbonated beverages
				<input type="hidden" value="" id="java266617X36X1871SQ006" name="java266617X36X1871SQ006" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ006_SQ002" name="java266617X36X1871SQ006_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ006_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ006_SQ001" name="java266617X36X1871SQ006_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ006_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ006_SQ003" name="java266617X36X1871SQ006_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ006_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ007">
			<th class="answertext">
				Sugar sweetened non-carbonated beverages
				<input type="hidden" value="" id="java266617X36X1871SQ007" name="java266617X36X1871SQ007" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ007_SQ002" name="java266617X36X1871SQ007_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ007_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ007_SQ001" name="java266617X36X1871SQ007_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ007_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ007_SQ003" name="java266617X36X1871SQ007_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ007_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ008">
			<th class="answertext">
				Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk
				<input type="hidden" value="" id="java266617X36X1871SQ008" name="java266617X36X1871SQ008" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ008_SQ002" name="java266617X36X1871SQ008_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ008_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ008_SQ001" name="java266617X36X1871SQ008_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ008_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ008_SQ003" name="java266617X36X1871SQ008_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ008_SQ003'];
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ009">
			<th class="answertext">
				Packaged/Bottled Energy Drinks
				<input type="hidden" value="" id="java266617X36X1871SQ009" name="java266617X36X1871SQ009" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ009_SQ002" name="java266617X36X1871SQ009_SQ002" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ009_SQ002'];
			$html .='</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ009_SQ001" name="java266617X36X1871SQ009_SQ001" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ009_SQ001'];
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="hidden" id="java266617X36X1871SQ009_SQ003" name="java266617X36X1871SQ009_SQ003" class="form-control">';
				$html .=$sql_data['266617X36X1871SQ009_SQ003'];
			$html .='</td>

		</tr>
	</tbody>
</table>
 
            </div>

    
        </div>
    </div>';          
          
   
          

          
          
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">5</span> Does your school serve traditional Indian snacks?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X2238'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
            
          $html .='</p>
      </div>';
          
          
if($sql_data['266617X36X2238'] == "Y")
      {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">5(a)</span> Please provide the details:
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list   ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Number of plates sold when on the menu</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X2239SQ001">
			<th class="answertext">
				Samosas
				<input type="hidden" value="" id="java266617X36X2239SQ001" name="java266617X36X2239SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
	                        $html .=number_format($sql_data['266617X36X2239SQ001_SQ001']);
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ002">
			<th class="answertext">
				Idli/vada
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X36X2239SQ002_SQ001']);
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X2239SQ003">
			<th class="answertext">
				Sambhar
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X36X2239SQ003_SQ001']);
			$html .='</td>

		</tr>

	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ004">
			<th class="answertext">
				Pav bhaji
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X36X2239SQ004_SQ001']);
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X2239SQ005">
			<th class="answertext">
				Momos
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X36X2239SQ005_SQ001']);
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ006">
			<th class="answertext">
				Others
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=$sql_data['266617X36X2239SQ006_SQ001'];
			$html .='</td>

		</tr>
	</tbody>
</table>
            </div>
            
            
        </div>
    </div>';
      }           
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does your school serve traditional Indian beverages?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X2246'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
          $html .='</p>
      </div>';
          
if($sql_data['266617X36X2246'] == "Y")
      {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">6(a)</span> Details are as follows: <a href="#" data-tooltip="If the space is limited please create the table in a word document and upload as attachment. Option has been provided at the end of the section." class="tt"><span class="badge">?</span></a>
            </span>
            </label>
  <div class="answer clearfix">
            <div class="answer clearfix">
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">
	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>
	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Number of servings sold when on the menu</th>
</tr>
	</thead>
<tbody>
	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ001">
	<th width="20%" class="answertext">
Nimboo pani
<input type="hidden" value="" id="java266617X36X2247SQ001" name="java266617X36X2247SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X36X2247SQ001_SQ001'];
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ002">
	<th width="20%" class="answertext">
Salted butter milk
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X36X2247SQ002_SQ001'];
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ003">
	<th width="20%" class="answertext">
Sweet lassi
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=$sql_data['266617X36X2247SQ003_SQ001']; 
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';
      }            
 $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">7</span> Does the school distribute packaged food items as rewards during schools events?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1864'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
            
          $html .='</p>
      </div>';  
      
      if($sql_data['266617X36X1864'] == "Y")
           {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">7(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">';
             $html .=$sql_data['266617X36X1865'];
            $html .='</p>
        </div>
        </div>
    </div>';
           }  
      
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">8</span> Does the school distribute chocolates/similar products as refreshments during schools events?
      </span>
      </label>
          <p class="formanswertext">';
          
           if($sql_data['266617X36X1866'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
          
          $html .='</p>
      </div>';
        if($sql_data['266617X36X1866'] == "Y")
           {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">8(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">';
             $html .=$sql_data['266617X36X1867'];  
            $html .='</p>
        </div>
        </div>
    </div>';
           }         
        
   $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">9</span> Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1868'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
             
          $html .='</p>
      </div>';     
        
  
      if($sql_data['266617X36X1868'] == "Y")
           {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">9(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">';
             $html .=$sql_data['266617X36X1869'];   
            $html .='</p>
        </div>
        </div>
    </div>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">9(b)</span> Are their banners, brochures, hoardings, stalls etc. put-up during the events?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X36X1870'] == "Y")
           {
               $html .="Yes";
           }
           else
           {
               $html .="No";
           }
           
          $html .='</p>
      </div>';
            }  
            
            if($sql_data['266617X36X2259_filecount'] > 0)
            {
   $html .='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';
           if($sql_data['266617X36X2259_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2259']);
              $html .=$data_arr[0]->name;
               
           }
        $html .='</li>  
        </ul>
      </div>';   
            }
            else
            {
                $html .= "No documents uploaded by the school.";
            }
/////////////////////////////////////////////////////// LAND CHAPTER /////////////////////////////////////////////////////////////////////////////////
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  
 $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .='<h1 style="padding-top:30px;">Land</h1>';

$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Land Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X7X1991SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X7X1991SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X7X1991SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';    

$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span> Complete the table:
    </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">
	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>
	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Your school area</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ001">
	<th width="20%" class="answertext">
Ground coverage area
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
$html .=number_format($sql_data['266617X7X1810SQ001_SQ002']);
	$html .='</td></tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ002">
	<th width="20%" class="answertext">
Green landscaped area on-ground
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ002_SQ002']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ003">
	<th width="20%" class="answertext">
Green cover on terrace/ balconies

	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ003_SQ002']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ004">
	<th width="20%" class="answertext">
Surface parking area
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ004_SQ002']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ005">
	<th width="20%" class="answertext">
Play area that is paved/ concrete
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ005_SQ002']); 
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ006">
	<th width="20%" class="answertext">
Play area that has grass
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ006_SQ002']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ007">
	<th width="20%" class="answertext">
Service Area
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X7X1810SQ007_SQ002']);
	$html .'</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ008">
	<th width="20%" class="answertext">
Others
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X1810SQ008_SQ002']);
	$html.='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ009">
	<th width="20%" class="answertext">
Total site area in m2
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X1810SQ009_SQ002']);
	$html.='</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>';         
        
 
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2&nbsp;</span>Complete the table: 
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
        <ul class="subquestions-list questions-list text-list numeric-list">
	
<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ001">
<label class="numeric-label" for="answer266617X7X2279SQ001">Ground coverage area</label>
<p class="input">';
$html .=number_format($sql_data['266617X7X2279SQ001']);
$html .='</p>
</li>

<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ002">

<label class="numeric-label" for="answer266617X7X2279SQ002">Number of floors</label>
<p class="input">';
	
$html .=number_format($sql_data['266617X7X2279SQ002']);
	
$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ003">

<label class="numeric-label" for="answer266617X7X2279SQ003">Rooftop</label>
<p class="input">';
	
	$html .=number_format($sql_data['266617X7X2279SQ003']);
	
$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ004">

<label class="numeric-label" for="answer266617X7X2279SQ004">Total built-up area</label>
<p class="input">';
	
	$html .=number_format($sql_data['266617X7X2279SQ004']);
	
$html .='</p>
	</li>
</ul>
            </div>
        </div>
    </div>';        
        
        
        
 $html.='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span> How many species of plants and animals exist in your school?
            </span>
            </label>
<div class="answer clearfix">
            <div class="answer clearfix">
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">
	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>
	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Native</th>
	<th>Exotic</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>
	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X189SQ001">
	<th width="20%" class="answertext">
Plants
<input type="hidden" value="" id="java266617X7X189SQ001" name="java266617X7X189SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ001_SQ002']);
	$html.='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ001_SQ003']);
	$html.='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ001_SQ004']);
	$html.='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X189SQ003">
	<th width="20%" class="answertext">
Animals
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ003_SQ002']);
	$html.='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ003_SQ003']);
	$html.='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html.=number_format($sql_data['266617X7X189SQ003_SQ004']);
	$html.='</td>
</tr>
	</tbody>
</table></div>
        </div>
    </div>';        
$html.='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4</span> Do you use chemical based pesticides in your school green cover?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X7X196'] == "Y")
           {
               $html.="Yes";
           }
           else
           {
               $html.="No";
           }
          
          $html.='</p>
      </div>';
          
          if($sql_data['266617X7X2258_filecount'] > 0)
          {
          
$html.='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';
           if($sql_data['266617X7X2258_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X7X2258']);
               $html.=$data_arr[0]->name;
           }
        $html.='</li>  
        </ul>
      </div>';
          }
          else
          {
              $html .= "No documents uploaded by the school.";
          }
          
///////////////////////////////////////////////////////////////////// WATER CHAPTER ////////////////////////////////////////////////////////////////////////////
 $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  $html .= "<br />";

$html.='<h1 style="padding-top:30px;">Water</h1>';
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Water Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X37X1982SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X37X1982SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X37X1982SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';     
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span> What is your school total water consumption per day? 
            </span>
            </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
	$html .=number_format($sql_data['266617X37X1883']);
        $html .='</p>
        </div>';

$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2</span> Where does the water you use come from? Please provide the quantity.
            </span>
            </label>
        <div class="answer clearfix">
            <div class="answer clearfix">
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-5  ">
	<colgroup class="col-responses">
		<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Surface water (streams/ lakes/ ponds, etc)</th>
	<th class="answertext">Ground water (hand pump/ borewell/ well, etc)</th>
	<th class="answertext">Stored rainwater</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X37X1884SQ001">
			<th class="answertext">
				Municipality
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
                                $html .=number_format($sql_data['266617X37X1884SQ001_SQ001']);
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ001_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ001_SQ003']);
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X37X1884SQ002">
			<th class="answertext">
				Panchayat
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .= number_format($sql_data['266617X37X1884SQ002_SQ001']);
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ002_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ002_SQ003']);
			$html .='</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X37X1884SQ003">
			<th class="answertext">
				Private supplier
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ003_SQ001']);
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ003_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ003_SQ003']);
			$html .='</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X37X1884SQ004">
			<th class="answertext">
				School own supply (Example: borewell; rainwater harvesting facility, etc)
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ004_SQ001']);
			$html .='</td>
	<td class="answer_cell_00SQ002 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ004_SQ002']);
			$html .='</td>
	<td class="answer_cell_00SQ003 answer-item text-item">';
				$html .=number_format($sql_data['266617X37X1884SQ004_SQ003']);
			$html .='</td>
		</tr>
	</tbody>
</table>
            </div>
        </div>
    </div>';         
$html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">3</span>Do you get 24/7 supply of water?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
           if($sql_data['266617X37X1885'] == "Y")
           {
              $html .= "Yes";
           }
           else
           {
              $html .= "No";
           }
           
        $html .='</p>
        </div>
    </div>';        

           if($sql_data['266617X37X1885'] == "N")
           {
      
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">3(a)</span>How many hours of water supply does your school get? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        $html .=number_format($sql_data['266617X37X1886'],2);
         
       $html .='</p>
        </div>
    </div> ';
    }     
$html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4</span> Do you use storage tanks to store water?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        
           if($sql_data['266617X37X1887'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
          
       $html .='</p>
        </div>
    </div>';               
           if($sql_data['266617X37X1887'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4(a)</span> What is the capacity of the tank(s)? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        $html .=number_format($sql_data['266617X37X1888']);
         
        $html .='</p>
        </div>
    </div> 
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4(b)</span>&nbsp;When is the storage tank refilled?
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  minvalue minvalue- numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Morning</th>
	<th>After Noon</th>
	<th>Evening</th>
	<th>As and when required</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1889SQ001">
	<th width="20%" class="answertext">
Duration(Mins)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">';
$html .=number_format($sql_data['266617X37X1889SQ001_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1889SQ001_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1889SQ001_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1889SQ001_SQ004']);
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';
      }  
 
$html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5</span> How many drinking water taps do you have? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        $html .=number_format($sql_data['266617X37X1893']);
       $html .='</p>
        </div>
    </div>';       
$html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6</span> How many ablution taps (taps used for washing hands only) do you have? 
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">'; 
        $html .=number_format($sql_data['266617X37X1894']);
        $html .='</p>
        </div>
    </div>';  
    
    $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">7</span> How many urinals (strictly used for urination only) do you have? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        $html .=number_format($sql_data['266617X37X1895']);
          
        $html .='</p>
        </div>
    </div>'; 
 
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">8</span> How many water closets (used for defecation and urination) do you have?
            </span>
            </label>

        <div class="answer clearfix">
                    <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Girls</th>
	<th>Boys</th>
	<th>Common</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1896SQ005">
	<th width="20%" class="answertext">
Number of toilets
</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	
$html .=number_format($sql_data['266617X37X1896SQ005_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1896SQ005_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1896SQ005_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1896SQ005_SQ004']);
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
        </div>
    </div>';        
        
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">9</span> What is the average annual rainfall received by your area (In mm)?
            </span>
            </label>
<div class="answer clearfix">
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Local</th>
	<th>District</th>
	<th>State</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1897SQ004">
	<th width="20%" class="answertext">
Quantity
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
$html .=number_format($sql_data['266617X37X1897SQ004_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1897SQ004_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1897SQ004_SQ002']);
	$html .='</td>
</tr>
	</tbody>
</table> </div>
        </div>
    </div>';        
        
 $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">10</span> What is the average annual rainfall of your area (In mm)?
            </span>
            </label>
<div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>10-year average</th>
	<th>25-year average</th>
	<th>30-year average</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1898SQ004">
	<th width="20%" class="answertext">
Quantity
<input type="hidden" value="" id="java266617X37X1898SQ004" name="java266617X37X1898SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
$html .=number_format($sql_data['266617X37X1898SQ004_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1898SQ004_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X37X1898SQ004_SQ002']);
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';         
        
 $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">11</span> What is the number of rainy days in your area?
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                <p class="question answer-item text-item numeric-item ">'; 
	        $html .=number_format($sql_data['266617X37X1899']);
                $html .='</p>
          
            </div>
            
            
    
        </div>
    </div>';
        
   $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">12</span> Do you have RWH system in your school? 
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
           if($sql_data['266617X37X1900'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
          
       $html .='</p>
        </div>
    </div>';      
           if($sql_data['266617X37X1900'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">12(a)</span> If yes, what kind of RWH system do you use?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
       
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
        </div>
    </div>';
      }
  
  $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13</span> Do you recycle/reuse the generated waste water?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">'; 
        
           if($sql_data['266617X37X1904'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
        $html .='</p>
        </div>
    </div>';          

           if($sql_data['266617X37X1904'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13(a)</span> If you recycle/reuse waste water, do you treat the waste water? 


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        
           if($sql_data['266617X37X1905'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
         
        $html .='</p>
        </div>
    </div>'; 
           if($sql_data['266617X37X1905'] == "Y")
           {  
      
    $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">13(b)</span>&nbsp;If your school partially treats the waste water, locate the waste water exit-point in your school and give its location(s) on the school site.
            </span>
            </label>

        <div class="answer clearfix">
          <div class="answer clearfix">
                <p class="question answer-item text-item ">';
                $html .= $sql_data['266617X37X1906'];
                
                $html .='</p>
          
            </div>
            
            
    
        </div>
    </div>';
           }
      }
if($sql_data['266617X37X2257_filecount'] > 0)
{
$html .='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';
           if($sql_data['266617X37X2257_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X37X2257']);
               $html .= $data_arr[0]->name;
           }
        $html .='</li>  
        </ul>
      </div>';
}
else
{
    $html .= "No documents uploaded by the school.";
}
 //////////////////////////////////////////////////////////////////////// WASTE CHAPTER //////////////////////////////////////////////////////////////////////////
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";  
 $html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";
$html .= "<br />";

        
$html .='<h1 style="padding-top:30px;">Waste </h1>';        
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
            <h6>
	    Task 1: Waste Audit Team</h6>
            </span>
            </label>
            <div class="answer clearfix">
            <div class="answer clearfix">
            <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">
        <label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<p>';
        $html .=$sql_data['266617X38X2026SQ001'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">
        <label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<p>';
        $html .= $sql_data['266617X38X2026SQ002'];
	$html .='</p>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">
        <label for="answer266617X4X1973SQ003">Name of Students:</label>
	<p>';
        $html .=$sql_data['266617X38X2026SQ003']; 
	$html .='</p>
	</li>
        </ul>
          
        </div>
        </div>
        </div>';     

$html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1</span> Does your school segregate solid waste?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
           if($sql_data['266617X38X2032'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
         
        $html .='</p>
        </div>
    </div>'; 

           if($sql_data['266617X38X2032'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1(a)</span> Who segregates the waste at source?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        if($sql_data['266617X38X2033SQ001'] == "Y")
        {
            $html .= "Housekeeping";
        }
        if($sql_data['266617X38X2033SQ002'] == "Y")
        {
            $html .= "<br>";
            $html .= "Gardener";
        }
        if($sql_data['266617X38X2033SQ003'] == "Y")
        {
            $html .= "<br>";
            $html .= "Ragpicker";
        }
        if($sql_data['266617X38X2033other'] != "")
        {
            $html .= "<br>";
            $html .= "Other: ". $sql_data['266617X38X2033other'];
        }
           
        $html .='</p>
        </div>
    </div>
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1(b)</span> Who segregates the waste in classrooms?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        if($sql_data['266617X38X2037SQ001'] == "Y")
        {
            $html .= "Students and Teachers";
        }
        if($sql_data['266617X38X2037SQ002'] == "Y")
        {
            $html .= "<br>";
            $html .= "Housekeeping (Sweeper)";
        }
        if($sql_data['266617X38X2037other'] != "")
        {
            $html .= "<br>";
            $html .= "Other: ". $sql_data['266617X38X2037other'];
        }
       $html .='</p>
        </div>
    </div>';
      }
 $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2</span> Waste collection points in your school. <a data-tooltip="Students will have to count the number of waste disposal points in the school as, for instance, one dustbin, two dustbins or more. If there are no dustbins, please say zero (0)" class="tt"><span class="badge">?</span></a> 
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>No bin</th>
	<th>One bin</th>
	<th>Two bins (wet &amp; dry)</th>
	<th>Three bins or more</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ001">
	<th width="20%" class="answertext">
Classrooms
</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
$html .=number_format($sql_data['266617X38X2143SQ001_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ001_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ001_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ001_SQ004']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ002">
	<th width="20%" class="answertext">
Playgrounds
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ002_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ002_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ002_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ002_SQ004']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ003">
	<th width="20%" class="answertext">
Common area (e.g. reception, corridors)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ003_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ003_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ003_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ003_SQ004']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ004">
	<th width="20%" class="answertext">
Staffroom
<input type="hidden" value="" id="java266617X38X2143SQ004" name="java266617X38X2143SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ004_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .= number_format($sql_data['266617X38X2143SQ004_SQ002']); 
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ004_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ004_SQ004']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ005">
	<th width="20%" class="answertext">
Laboratory
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ005_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ005_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ005_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ005_SQ004']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ006">
	<th width="20%" class="answertext">
Canteen
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ006_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .= number_format($sql_data['266617X38X2143SQ006_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ006_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ006_SQ004']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ007">
	<th width="20%" class="answertext">
Clinic/ Sick room
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ007_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ007_SQ002']); 
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ007_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ007_SQ004']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ008">
	<th width="20%" class="answertext">
Library
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ008_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ008_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ008_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ008_SQ004']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ009">
	<th width="20%" class="answertext">
Toilets
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ009_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ009_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ009_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ009_SQ004']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ010">
	<th width="20%" class="answertext">
Others
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ010_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ010_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ010_SQ003']); 
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ010_SQ004']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ011">
	<th width="20%" class="answertext">
Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ011_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ011_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ011_SQ003']);
	$html .='</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2143SQ011_SQ004']);
	$html .='</td>
</tr>
	</tbody>
</table>
           </div>
          
        </div>
    </div>';
        
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span> Determine the quantity of waste generated in your school. (in grams) <a data-tooltip="Please note that some categories of waste may happen daily, weekly, monthly, bi-annually or annually. Please convert these to monthly averages before entering." class="tt"><span class="badge">?</span></a> <input type="hidden" value="1283" name="totalpopulation">
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-10">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Collection per month (Frequency may differ)</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ001">
	<th width="20%" class="answertext">
Garden/ horticulture waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
$html .=number_format($sql_data['266617X38X2125SQ001_SQ001']);
	$html .='</td>
</tr>

	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ002">
	<th width="20%" class="answertext">
Kitchen waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ002_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ003">
	<th width="20%" class="answertext">
Paper
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ003_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ004">
	<th width="20%" class="answertext">
Plastic
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ004_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ005">
	<th width="20%" class="answertext">
Wood, glass, metal, classroom furniture
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ005_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ006">
	<th width="20%" class="answertext">
E-waste

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ006_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ007">
	<th width="20%" class="answertext">
Biomedical waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ007_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ008">
	<th width="20%" class="answertext">
Sanitary waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ008_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ010">
	<th width="20%" class="answertext">
Construction and Demolition (C &amp; D) waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ010_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ011">
	<th width="20%" class="answertext">
Hazardous waste
<input type="hidden" value="" id="java266617X38X2125SQ011" name="java266617X38X2125SQ011" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ011_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ009">
	<th width="20%" class="answertext">
Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">';
	$html .=number_format($sql_data['266617X38X2125SQ009_SQ001']);
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';
        
 $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4</span>  Does your school recycle any generated waste?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2041'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
         $html .='</p>
      </div>';
         
           if($sql_data['266617X38X2041'] == "Y")
           {
      $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4(a)</span>&nbsp;Please provide quantity of which is applicable. 

            </span>
            </label>

        <div class="answer clearfix">
            
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Quantity</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ001">
	<th width="20%" class="answertext">
Garden/ horticulture waste 
<input type="hidden" value="" id="java266617X38X2042SQ001" name="java266617X38X2042SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	
$html .=number_format($sql_data['266617X38X2042SQ001_SQ001']); 
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ002">
	<th width="20%" class="answertext">
Kitchen waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ002_SQ001']); 
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ003">
	<th width="20%" class="answertext">
Paper
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ003_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ004">
	<th width="20%" class="answertext">
Wood, glass, metal, classroom furniture
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ004_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ005">
	<th width="20%" class="answertext">
E-waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ005_SQ001']); 
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ006">
	<th width="20%" class="answertext">
Bio-medical waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ006_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ007">
	<th width="20%" class="answertext">
Sanitary waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ007_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ008">
	<th width="20%" class="answertext">
Construction and Demolition D Waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ008_SQ001']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ009">
	<th width="20%" class="answertext">
Hazardous waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2042SQ009_SQ001']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ010">
	<th width="20%" class="answertext">
Total
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .= number_format($sql_data['266617X38X2042SQ010_SQ001']); 
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';
      
           }
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">5</span>  Does your school have a composting facility?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2064'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
            
          $html .='</p>
      </div>';
          
           if($sql_data['266617X38X2064'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5(a)</span> What is the methodology used? 


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        if($sql_data['266617X38X2065SQ001'] == "Y")
        {
            $html .= "Natural composting without added microbes";
        }
        if($sql_data['266617X38X2065SQ002'] == "Y")
        {
            $html .= "<br>";
            $html .= "Mechanical composting (with electricity/ machines)";
        }
        if($sql_data['266617X38X2065other'] != "")
        {
            $html .= "<br>";
            $html .= "Other: ".$sql_data['266617X38X2065other'];
        }
        
        $html .='</p>
        </div>
    </div>';
           }
           
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does your school encourage students & teachers to reuse textbooks?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2074'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
              
          $html .='</p>
      </div> ';
          
  $html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">7</span> Table to understand whether internal or external waste recycling procedures are applied to waste. 

            </span>
            </label>

        <div class="answer clearfix">
            
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Check or uncheck the answer for each subquestion. " class="question subquestions-list questions-list  checkbox-list ">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Local kabadiwala (the scrap collector)</th>
	<th>Authorised dealer</th>
	<th>Dumped at a designated community site</th>
	<th>Internal procedure</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ001">
	<th width="20%" class="answertext">
Paper (e.g., used notebooks, used examination paper, subscription newspaper and magazines)
<input type="hidden" value="" id="java266617X38X2171SQ001" name="java266617X38X2171SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ001_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }
        else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ001_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ001_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ001_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ001_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ001_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ001_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ001_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ002">
	<th width="20%" class="answertext">
Plastic (e.g. plastic bottles)
<input type="hidden" value="" id="java266617X38X2171SQ002" name="java266617X38X2171SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
        if($sql_data['266617X38X2171SQ002_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ002_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ002_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ002_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
$html .='<label for="cbox_266617X38X2171SQ002_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ002_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
$html .='<label for="cbox_266617X38X2171SQ002_SQ004" class="read"></label>';
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ003">
	<th width="20%" class="answertext">
Horticultural waste
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ003_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ003_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ003_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ003_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ003_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ003_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ003_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
$html .='<label for="cbox_266617X38X2171SQ003_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ004">
	<th width="20%" class="answertext">
E-waste (e.g. broken, unusable computers)
<input type="hidden" value="" id="java266617X38X2171SQ004" name="java266617X38X2171SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ004_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
           $html .= '<img src="images/1445961880_cross.png">';
        }
$html .='<label for="cbox_266617X38X2171SQ004_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ004_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ004_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ004_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
     
$html .='<label for="cbox_266617X38X2171SQ004_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ004_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ004_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ007">
	<th width="20%" class="answertext">
Hazardous waste (e.g. diesel fuel, battery)
<input type="hidden" value="" id="java266617X38X2171SQ007" name="java266617X38X2171SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ007_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ007_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ007_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ007_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ007_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ007_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ007_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ007_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ005">
	<th width="20%" class="answertext">
Wood,glass, metal scrap, other scrap
<input type="hidden" value="" id="java266617X38X2171SQ005" name="java266617X38X2171SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ005_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
       
$html .='<label for="cbox_266617X38X2171SQ005_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ005_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ005_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
        if($sql_data['266617X38X2171SQ005_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .='<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ005_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
        if($sql_data['266617X38X2171SQ005_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ005_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ008">
	<th width="20%" class="answertext">
Biomedical waste (e.g. waste from Nurseroom in school, e.g. band-aids, syringe)
<input type="hidden" value="" id="java266617X38X2171SQ008" name="java266617X38X2171SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">';
	
        if($sql_data['266617X38X2171SQ008_SQ001'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
        
$html .='<label for="cbox_266617X38X2171SQ008_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ008_SQ002'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ008_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ008_SQ003'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }
      
$html .='<label for="cbox_266617X38X2171SQ008_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">';
	if($sql_data['266617X38X2171SQ008_SQ004'] == 1)
        {
           $html .= '<img src="images/1445961706_tick.png">';
        }else
        {
            $html .= '<img src="images/1445961880_cross.png">';
        }

$html .='<label for="cbox_266617X38X2171SQ008_SQ004" class="read"></label>
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>';               
 $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">8</span> What is the final destination for waste that is disposed of externally?
      </span>
      </label>
          <p class="formanswertext">';
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
      </div>';  
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">9</span> Does your school burn waste?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2081'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
      $html .='</p>
      </div>';
      
$html .='<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">10</span>&nbsp;Does your school have the following? If yes, please give the numbers.
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Number</th>
	<th>Working conditions</th>
	<th>Non-working condition</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ001">
	<th width="20%" class="answertext">
TVs
<input type="hidden" value="" id="java266617X38X2087SQ001" name="java266617X38X2087SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ001_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ001_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ001_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ002">
	<th width="20%" class="answertext">
VCR or DVD players
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ002_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ002_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ002_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ003">
	<th width="20%" class="answertext">
Refrigerators and freezers
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ003_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ003_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ003_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ004">
	<th width="20%" class="answertext">
Washing machines
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ004_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ004_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ004_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ005">
	<th width="20%" class="answertext">
Air conditioners
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ005_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ005_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ005_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ006">
	<th width="20%" class="answertext">
Heaters
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ006_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ006_SQ002']); 
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ006_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ007">
	<th width="20%" class="answertext">
Microwaves
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ007_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ007_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ007_SQ003']);
$html .='</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ008">
	<th width="20%" class="answertext">
Ovens
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ008_SQ001']); 
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ008_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ008_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ009">
	<th width="20%" class="answertext">
Toasters
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ009_SQ001']); 
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ009_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ009_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ010">
	<th width="20%" class="answertext">
Electric Kettles
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ010_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ010_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ010_SQ003']);
	$html .='</td>
</tr>';


	$html .='<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ011">
	<th width="20%" class="answertext">
Personal computers (CPU, mouse, screen and keyboard included)';
$html .='</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ011_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ011_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ011_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ012">
	<th width="20%" class="answertext">
Laptop computer (CPU, mouse, screen and keyboard included)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ012_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ012_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ012_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ013">
	<th width="20%" class="answertext">
Notebook computers
<input type="hidden" value="" id="java266617X38X2087SQ013" name="java266617X38X2087SQ013" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ013_SQ001']); 
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ013_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ013_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ014">
	<th width="20%" class="answertext">
Notepad computers
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ014_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ014_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ014_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ015">
	<th width="20%" class="answertext">
Printers
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ015_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ015_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ015_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ016">
	<th width="20%" class="answertext">
Copying equipment (Photocopiers)
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ016_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ016_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ016_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ017">
	<th width="20%" class="answertext">
Projectors
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ017_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ017_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ017_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ018">
	<th width="20%" class="answertext">
Whiteboards
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ018_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ018_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ018_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ019">
	<th width="20%" class="answertext">
Electrical &amp; electronic typewriters
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ019_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ019_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .= number_format($sql_data['266617X38X2087SQ019_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ020">
	<th width="20%" class="answertext">
Pocket &amp; desk calculators
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ020_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ020_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ020_SQ002']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ021">
	<th width="20%" class="answertext">
Fax machines
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ021_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ021_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ021_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ022">
	<th width="20%" class="answertext">
Telex
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ022_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ022_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ022_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ023">
	<th width="20%" class="answertext">
Telephones
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ023_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ023_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ023_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ024">
	<th width="20%" class="answertext">
Pay telephones
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ024_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ024_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ024_SQ003']);
	$html .='</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ025">
	<th width="20%" class="answertext">
Mobiles
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ025_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ025_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ025_SQ003']);
	$html .='</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ026">
	<th width="20%" class="answertext">
Answering systems
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ026_SQ001']);
	$html .='</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ026_SQ002']);
	$html .='</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">';
	$html .=number_format($sql_data['266617X38X2087SQ026_SQ003']);
	$html .='</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>'; 
        

        
        
        
        
 $html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">11</span> Do you know that your E-waste can be collected by an authorised dealer or dismantler? 
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2114'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
           
          $html .='</p>
      </div>';
      if($sql_data['266617X38X2114'] == "Y")
           {
     $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">11(a)</span> Who collects your e-waste, when not in working condition? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
        
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
        </div>
    </div>';
           }

$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">12</span> Does the school have a policy on waste?
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2121'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
          
          $html .='</p>
      </div>';            
          
           if($sql_data['266617X38X2121'] == "Y")
           {
      $html .='<p>Policy document</p>';
      if($sql_data['266617X38X2255_filecount'] > 0)
      {
      $data_arr = json_decode($sql_data['266617X38X2255']);
      $html .=$data_arr[0]->name;
      } 
           }
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">13</span> Are there awareness drives with regard to Reduce, Recycle and Reuse?  
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2122'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
         $html .='</p>
      </div>'; 
         
           if($sql_data['266617X38X2122'] == "Y")
           {
      $html .='<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13(a)</span> What form do these awareness drives take?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item ">';
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
        </div>
    </div>';
           }
$html .='<div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">14</span> Is the study of the environment integrated into the curriculum?   
      </span>
      </label>
          <p class="formanswertext">';
           if($sql_data['266617X38X2124'] == "Y")
           {
               $html .= "Yes";
           }
           else
           {
               $html .= "No";
           }
          $html .='</p>
      </div>'; 
if($sql_data['266617X38X2256_filecount'] > 0)
{
$html .='<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>';
           if($sql_data['266617X38X2256_filecount'] > 0)
           {
               $data_arr = json_decode($sql_data['266617X38X2256']);
               $html .= $data_arr[0]->name;
           }
        $html .='</li>  
        </ul>
      </div>';
}
 else {
 $html .= "No documents uploaded by the school.";   
}
$html .='</div></div>';     
$html .='</body></html>';
$html .= ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->set_paper("A4");
$dompdf->load_html($html);
$dompdf->render();
$random = rand(5, 100);
$date = $sql_email_school['tid'];
$pdf_sc_city = $sql_email_school['attribute_7'];
$school_name_pdf = str_replace(' ', '_', $sql_email_school['attribute_1']);
$postfix = "$school_name_pdf"."_".$pdf_sc_city."_".$date.'.pdf';
//$postfix = "responses_".$random.$date.'.pdf';
$dompdf->stream($postfix);
?>