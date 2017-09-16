<?php
//ini_set('max_execution_time', 300000); //300 seconds = 5 minutes

error_reporting(E_ALL);

ini_set("display_errors", 1);
ini_set("memory_limit", "999M");
ini_set("max_execution_time", "999");

include('website_db.php');

    $subject = "GSP Audit 2016 – Participation Open";
    $message= file_get_contents("audit-open-email.html"); 
    
    // boundary 
    $mime_boundary = md5(time()); 

    // multipart boundary 
$headers = 'From: Green Schools Programme <support@greenschoolsprogramme.org>'. "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
// first MIME part is the email message in text format
$headers .= 'Content-Type: text/html; charset=iso-8859-1' . "\r\n";

$query="SELECT `attribute_12` FROM lime_tokens_266617 WHERE attribute_12!='' ORDER BY tid";

$result=mysql_query($query);
$i=0;
while($loop_data = mysql_fetch_assoc($result))
{
    $i++;     
    $to_email = $loop_data['attribute_12'];
	//$to_email ="sarvesh.yadav@netprophetsglobal.com";
   
    $to = $to_email;

$to = "ravi.pai@netprophetsglobal.com";
$ok = mail($to, $subject, $message, $headers, '-odb -fsupport@greenschoolsprogramme.org'); 
die();
    if($ok)
    {
       echo "Sent to " .$i."->". $to;
       echo "<br>";
    }
 else {
        echo "Failed to send to " . $to;
       echo "<br>";
    }
   
}