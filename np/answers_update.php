<?php
include('website_db.php');

$query1 = mysql_query("select * from lime_survey_266617 as lsur join lime_tokens_266617 as ltok ON ltok.token=lsur.token");
$count = mysql_num_rows($query1);

//print_r($vari);
//$vari = $data_array['q_number'];

while($query = mysql_fetch_array($query1))
{
   $token = $query['token'];
   $sql_select_points = mysql_fetch_array(mysql_query("select SUM(score) as score from `calculation` where `token` = '".$token."'"));
   
   $score = number_format($sql_select_points['score'],2);
   
   
   $sql_update = mysql_query("update `lime_tokens_266617` SET `score` = '".$score."' where `token`='".$token."'");
   
   
}