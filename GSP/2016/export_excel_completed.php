<?php // Database Connection
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
//include('website_db.php');
include('functions.php');
// Fetch Record from Database

$output = "";
$table = "lime_tokens_266617"; // Enter Your Table Name
//echo "select `tid`,`firstname`, `email`, `token`, `attribute_1`, `attribute_2`, `attribute_3`, `attribute_4`, `attribute_5`, `attribute_6`, `attribute_7`, `attribute_8`, `attribute_9`, `attribute_10`, `attribute_11`, `attribute_12`, `attribute_13`, `attribute_14`, `attribute_15`, `attribute_17`, `attribute_18`, `datetime` from $table WHERE `completed` != N and `usesleft` = 0 ORDER By `datetime` DESC";
//die();
//$sql = mysql_query("select `tid`,`firstname`, `email`, `token`, `attribute_1`, `attribute_2`, `attribute_3`, `attribute_4`, `attribute_5`, `attribute_6`, `attribute_7`, `attribute_8`, `attribute_9`, `attribute_10`, `attribute_11`, `attribute_12`, `attribute_13`, `attribute_14`, `attribute_15`, `attribute_17`, `attribute_18`, `datetime` from $table WHERE `completed` != 'N' AND usesleft<=0 ORDER By `datetime` DESC");

$sql = mysql_query("SELECT tokentbl.tid,tokentbl.firstname, tokentbl.email, tokentbl.token, tokentbl.attribute_1, tokentbl.attribute_2, tokentbl.attribute_3, tokentbl.attribute_4, tokentbl.attribute_5, tokentbl.attribute_6, tokentbl.attribute_7, tokentbl.attribute_8, tokentbl.attribute_9, tokentbl.attribute_10, tokentbl.attribute_11, tokentbl.attribute_12, tokentbl.attribute_13, tokentbl.attribute_14, tokentbl.attribute_15, tokentbl.attribute_17, tokentbl.attribute_18, tokentbl.datetime FROM lime_survey_266617 AS survey,lime_tokens_266617 AS tokentbl WHERE survey.token=tokentbl.token and tokentbl.completed!='N' AND survey.submitdate IS NOT NULL ORDER BY survey.startdate DESC");

$columns_total = mysql_num_fields($sql);

// Get The Field Name

$output .= '"S.No",';
$output .= '"Sch.Id",';
$output .= '"School Name",';
$output .= '"Address1",';
$output .= '"Address2",';
$output .= '"Country",';
$output .= '"State",';
$output .= '"District",';
$output .= '"City",';
$output .= '"Pincode",';
$output .= '"ISD Code",';
$output .= '"STD Code",';
$output .= '"Landline Number",';
$output .= '"School Email",';
$output .= '"Principal Name",';
$output .= '"Principal Mobile",';
$output .= '"Coordinator Name",';
$output .= '"Coordinator Email",';
$output .= '"Coordinator Mobile",';
$output .= '"Password",';
$output .= '"Date & Time",';
//$output .= '"Percentage",';
$output .="\n";

// Get Records from the table

$k = 0;
while ($row = mysql_fetch_assoc($sql)) {
    
        
		 $sql_statename = "select `name` from `states_india` where `state_id`='".$row['attribute_5']."'";
         $sql_statename_array = mysql_query($sql_statename);
         $sql_statename = mysql_fetch_assoc($sql_statename_array);
         
		 $token=$row['token'];
		  $totalpoints=number_format(GetAirPoints($token)+GetEnergyPoints($token)+GetFoodPoints($token)+GetLandPoints($token)+GetWaterPoints($token)+GetWastePoints($token), 2);

		 
		 /*
         $new_comp = "select `completeness` from `lime_answers_for_progress` where `token`='".$row['token']."'";
         $sql_audit_complete = mysql_query($new_comp);
         $comp = mysql_fetch_array($sql_audit_complete);
         if($comp['completeness'] == "")
         {
             $completeness = 0;
         }
         else
         { 
             $completeness = $comp['completeness'];
         }
		 */
		 
    
$k++;
    $output .='"'.$k.'",';
    $output .='"'.$row['tid'].'",';
    $output .='"'.$row['attribute_1'].'",';
    $output .='"'.$row['attribute_2'].'",';
    $output .='"'.$row['attribute_3'].'",';
    $output .='"India",';
    $output .='"'.$sql_statename['name'].'",';
    $output .='"'.$row['attribute_6'].'",';
    $output .='"'.$row['attribute_7'].'",';
    $output .='"'.$row['attribute_8'].'",';
    $output .='"'.$row['attribute_9'].'",';
    $output .='"'.$row['attribute_10'].'",';
    $output .='"'.$row['attribute_11'].'",';
    $output .='"'.$row['attribute_12'].'",';
    $output .='"'.$row['attribute_13'].'",';
    $output .='"'.$row['attribute_14'].'",';
    $output .='"'.$row['firstname'].'",';
    $output .='"'.$row['email'].'",';
    $output .='"'.$row['attribute_18'].'",';
    $output .='"'.$row['token'].'",';
    $output .='"'.date('d-m-Y H:i:s', strtotime($row['datetime'])).'",';
   // $output .='"'.number_format((($totalpoints*100)/157),2).'%",';
    $output .="\n";
}

// Download the file

$filename = "Audit_Completed_('".date('d-m-Y')."').csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;

exit;
?>
