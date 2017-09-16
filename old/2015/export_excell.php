<?php // Database Connection
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');

// Fetch Record from Database

$output = "";
$table = "lime_tokens_266617"; // Enter Your Table Name 
$sql = mysql_query("select `tid`,`firstname`, `email`, `token`, `attribute_1`, `attribute_2`, `attribute_3`, `attribute_4`, `attribute_5`, `attribute_6`, `attribute_7`, `attribute_8`, `attribute_9`, `attribute_10`, `attribute_11`, `attribute_12`, `attribute_13`, `attribute_14`, `attribute_15`, `attribute_17`, `attribute_18`, `datetime` from $table ORDER By `datetime` DESC");
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
$output .= '"Completeness",';
$output .="\n";

// Get Records from the table

$k = 0;
while ($row = mysql_fetch_array($sql)) {
    
         $sql_cntryname = "select `name` from `countries` where `id`='".$row['attribute_4']."'";
         $sql_cname_array = mysql_query($sql_cntryname);
         $sql_cname = mysql_fetch_array($sql_cname_array);
         
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
    
$k ++;
    $output .='"'.$k.'",';
    $output .='"'.$row['tid'].'",';
    $output .='"'.$row['attribute_1'].'",';
    $output .='"'.$row['attribute_2'].'",';
    $output .='"'.$row['attribute_3'].'",';
    $output .='"'.$sql_cname['name'].'",';
    $output .='"'.$row['attribute_5'].'",';
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
    $output .='"'.$completeness.'%",';
    $output .="\n";
}

// Download the file

$filename = "Complete_RegData_('".date('d-m-Y')."').csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
exit;
?>
