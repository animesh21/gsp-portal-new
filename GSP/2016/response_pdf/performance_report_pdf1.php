<?php
ob_start();
define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
if(isset($_REQUEST['id']))
{
    $token= $_REQUEST['id'];
}
//include_once('performance_report_html.php');

$sql_email_school = mysql_fetch_assoc(mysql_query("SELECT `email`, `attribute_1`,`attribute_7`, `tid` FROM lime_tokens_266617 WHERE `token` = '" . $token . "'"));

//$html = ob_get_contents();
//$html .= ob_get_clean();

$html = file_get_contents("http://www.greenschoolsprogramme.org/dashboard/2016/performance_report_html.php?id=9b3ja");


$file_location = $_SERVER['DOCUMENT_ROOT']."/dashboard/2016/response_pdf/asd.html" ;
file_put_contents($file_location,$html);


