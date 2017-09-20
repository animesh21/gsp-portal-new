<?php
$servername = "localhost";
$username = "audit2016";
$password = "ByJ^zyY7K(m";
$dbname = "gsp_audit16";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$link = mysql_connect($servername, $username, $password) or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");

if(isset($_REQUEST['id']))
$token_request_id = $_REQUEST['id'];
else
$token_request_id = "";

$sql_token_details = $token_request_id;

//$sql_data = mysql_fetch_array(mysql_query("SELECT * FROM lime_survey_266617 WHERE `token` = '".$sql_token_details."'"));

$sql_data = mysql_fetch_assoc(mysql_query("SELECT * FROM lime_survey_266617 WHERE `token` = '".$sql_token_details."'"));

$sql_country = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `countries` WHERE `id` = '".$sql_data['266617X34X1593']."'"));

$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$sql_data['266617X34X1594']."'"));

//for percentage
$sql_percentage = mysql_fetch_assoc(mysql_query("select `completeness` from `lime_answers_for_progress` where `token` = '".$sql_token_details."'"));
?>

