<?php
include_once('get_response_report.php');
if(isset($_REQUEST['id']))
{
 $token   =$_REQUEST['id'];
}
echo getResponseHtml($token);
?>