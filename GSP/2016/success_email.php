<?php


error_reporting(E_ALL);

ini_set("display_errors", 1);
ini_set("memory_limit", "999M");
ini_set("max_execution_time", "999");


$headers = 'From: Green Schools Programme <support@greenschoolsprogramme.org>'. "\r\n";
//ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
//if(mail('sanjeev.kumar@netprophetsglobal.com', 'subject', 'message',$headers))
//{
//	echo "Success";
//}
//
// exit;
include('config.php');


//$loop_query = mysql_query("select ltok.token from lime_tokens_266617 as ltok join lime_survey_266617 as lsur ON ltok.token=lsur.token WHERE `submitdate` != 'NULL' LIMIT 540,550");

$message = "";
$subject = "Confirmation of your participation in our survey";

$query="SELECT survey.id,survey.token,surtoken.tid,surtoken.email,surtoken.attribute_1,surtoken.attribute_2,surtoken.attribute_5,surtoken.attribute_7,surtoken.attribute_12,surtoken.datetime,surtoken.completed,state.name AS state_name FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken,states_india AS state WHERE survey.token=surtoken.token AND surtoken.usesleft<=0  AND surtoken.completed <> 'N' AND state.state_id=surtoken.attribute_5 AND survey.`submitdate` IS NOT NULL ORDER BY survey.`startdate` DESC LIMIT 600,105 ";
$result=mysql_query($query);
echo "Total:".mysql_num_rows($result);
$i=0;
while($loop_data = mysql_fetch_array($result))
{
    $i++;        
    //$to ="sanjeev.kumar@netprophetsglobal.com";   
    
    //echo $loop_data['email'];
    if(trim($loop_data['attribute_12']) !="")
    {
          $to = $loop_data['email'].','.$loop_data['attribute_12'];
    }
    else
    {
         $to = $loop_data['email'];
    }
 

	$schoolname=$loop_data['attribute_1'];
                  $address1=$loop_data['attribute_2'];
	$city=$loop_data['attribute_7'];
	$state=$loop_data['state_name'];
	$completed=$loop_data['completed'];                  
                  $completed_date = date("j F, Y H:i A", strtotime($completed));        
	$message = "Dear Principal,\n\n";  
                  $message .= "Thank you for participating in the GSP Audit 2016. Your Audit has been successfully submitted.\n";
                  $message .= "Details are below:  \n";
	$message .= "School Name: $schoolname  \n";
                  $message .= "Address: $address1, $city, $state \n";
	$message .= "Submission Date & Time: $completed_date \n\n";                  
                  $message .= "Should there be any problem or query, you can mail us at: support@greenschoolsprogramme.org or you can call us on: 011-40616000 Ext-219 and 300 !\n\n";                  
                  $message .= "The GSP Awards will be announced next year January/February 2017. You will receive your school's performance report by March 2017.\n\n";
                  $message .= "Stay tuned!\n\n";	
	$message .="Thank you,\n";
                  $message .= "Team GSP \n";
	
	//echo $message;
	//echo "<br>";
    // boundary 
    $mime_boundary = md5(time()); 

    // multipart boundary 
$headers = 'From: Green Schools Programme <support@greenschoolsprogramme.org>'. "\r\n";
//$headers .= 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-Type: multipart/mixed; boundary="' . $mime_boundary . '"' . "\r\n";

// place legacy message before first MIME part
//$emailBody = 'This is a multi-part message in MIME format.' . "\n"; 
// make user text message first part of body
//$emailBody .= '--' . $mime_boundary . "\r\n";

// first MIME part is the email message in text format
//$emailBody .= 'Content-Type: text/plain; charset=iso-8859-1' . "\r\n";

// ==== SET MESSAGE 
//$emailBody = 'Content-Transfer-Encoding: 7bit' . "\r\n\r\n"; // double CRLF (empty line) between headers and body
$emailBody = $message . "\r\n";


 $ok = mail($to, $subject, $emailBody, $headers, '-odb -fsupport@greenschoolsprogramme.org'); 
 //sleep(1);
//$ok=true;

    if($ok)
    {
       echo "Sent to " .$i."-> ". $to .", ".$loop_data['attribute_1'];    
       echo "<br>";
    }
 else {
       echo "Failed to send to " . $to;
       echo "<br>";
    }
   
}