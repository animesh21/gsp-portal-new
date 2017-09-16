<?php // Database Connection
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');



// Fetch Record from Database
$sql = mysql_query("select * from `gsp_feedback`"); 
$output = "";
$table = "lime_tokens_266617"; // Enter Your Table Name 

$columns_total = mysql_num_fields($sql);

// Get The Field Name

$output .= '"S.No",';
$output .= '"Sch.Id",';
$output .= '"School Name",';
$output .= '"State",';
$output .= '"City",';
$output .= '"Date & Time",';
$output .="\n";

// Get Records from the table

$k = 0;
while ($row = mysql_fetch_array($sql)) {
    
    $sql_data = mysql_fetch_array(mysql_query("select `tid`, `attribute_1`, `attribute_5`, `attribute_6` from $table where `token` = '".$row['token']."' ORDER By `datetime` DESC"));
             
    $output .='"'.$k.'",';
    $output .='"'.$sql_data['tid'].'",';
    $output .='"'.$sql_data['attribute_1'].'",';
    $output .='"'.$sql_data['attribute_5'].'",';
    $output .='"'.$sql_data['attribute_6'].'",';
    $output .='"'.date('d-m-Y H:i:s', strtotime($row['date'])).'",';
    $output .="\n";
    
    $k ++;
}

// Download the file

$filename = "feedbacks_('".date('d-m-Y')."').csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
exit;
?>
