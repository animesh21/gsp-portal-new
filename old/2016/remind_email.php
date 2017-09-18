<?php
//ini_set('max_execution_time', 300000); //300 seconds = 5 minutes

error_reporting(E_ALL);

ini_set("display_errors", 1);
ini_set("memory_limit", "999M");
ini_set("max_execution_time", "999");

include('website_db.php');


//$loop_query = mysql_query("select ltok.token from lime_tokens_266617 as ltok join lime_survey_266617 as lsur ON ltok.token=lsur.token WHERE `submitdate` != 'NULL' LIMIT 540,550");

$message = "";
//echo 'hello';

    $subject = "Save the date: Green Schools Awards on Tuesday, February 23, 2016";
    $message = "Dear All,\n\n";
  
    $message .= "We are happy to share that the Green Schools Awards will be announced on Tuesday, February 23, 2016 at Stein Auditorium, India Habitat Centre, Lodhi Road, New Delhi.  \n\n";
	
    $message .= "From now to February, we will be validating and analysing the reports. We will announce the results in February / March, 2016.  \n\n";
    $message .= "Based on the online green schools reports, the schools with the best environmental practices will be identified and awarded during the awards ceremony. All participating schools are also awarded certificates according to their scores. Like previous years, the GSP awards ceremony will host many competitions and live informative sessions on environmental issues. \n\n";
    $message .= "Do save the date in your calendar and stay tuned for information in our next email!.\n\n";
    $message .= "Hope to see you all.\n\n";
	$message ."Regards \n\n";
    $message .= "GSP Team \n";
	$message .= "Mob: 9871825346 \n";



$query="SELECT `email`,`attribute_12`,`tid` FROM lime_tokens_266617 WHERE attribute_12!='' ORDER BY tid";

$result=mysql_query($query);
$i=0;
while($loop_data = mysql_fetch_array($result))
{
    $i++;     
    $to_email = $loop_data['attribute_12'];
	
	//$to_email ="sarvesh.yadav@netprophetsglobal.com";
   
    $to = $to_email;
    
    
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


 $ok = mail($to, $subject, $emailBody, $headers, '-odb -fsupport@greenschoolsprogramme.org'); 

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