<?php
require_once('Mail.php');
require_once('Mail/mime.php'); // PEAR Mail_Mime packge
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("memory_limit", "999M");

define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
include_once('website_db.php');
//include_once('get_response_report.php');
$loop_query = mysql_query("SELECT ttok.token,ttok.tid,ttok.email, ttok.attribute_1, ttok.attribute_7, ttok.attribute_12, ttok.tid FROM lime_tokens_266617 AS ttok JOIN  lime_survey_266617 AS ssur ON ttok.token=ssur.token WHERE ssur.token=ttok.token AND ttok.usesleft<=0  AND ttok.completed !='N' AND ssur.submitdate IS NOT NULL AND ttok.tid IN(2058) LIMIT 1");
//echo "Total Audit Completed:".mysql_num_rows($loop_query);
// set smtp connection vars	
$host = "email-smtp.us-west-2.amazonaws.com";
$username = "AKIAJVL37MOCTOFNY5JQ";
$password = "AiW+B0LDtOYOX/+aTCpfyUX9qf5NwtJDoyzkddXQoZlo";
$i =0;
while ($loop_data = mysql_fetch_assoc($loop_query))
{
    $i++;
                  set_time_limit(40);
     	ini_set("max_execution_time", "9999");     
                  $pdf_sc_city = $loop_data['attribute_7'];
                  $school_id = $loop_data['tid'];
				  $school_name_pdf = str_replace(' ', '_', trim($loop_data['attribute_1']));
	              $filename = "$school_name_pdf" . "_" . trim($pdf_sc_city)."_".$school_id.'.pdf';   
				  $file_location = $_SERVER['DOCUMENT_ROOT']."/dashboard/2016/response_pdf/".$filename; 
				  $schoolName = $loop_data['attribute_1'];	

				  $school_email_id = $loop_data['attribute_12'];
	              $coordinator_email_id = $loop_data['email'];				  
	
	/////////////////////////////////////////////// MAIL SCRIPT ///////////////////////////////////////////////////////////////////////        
//	    if(trim($loop_data['attribute_12']) !="")
//	    {
//	          $to = $loop_data['email'].','.$loop_data['attribute_12'];
//	    }
//	    else
//	    {
//	         $to = $loop_data['email'];
//	    }
	//echo $loop_data['email'].','.$loop_data['attribute_12'];    
    //$to = $school_email_id; 
    $to = 'sanjeev.kumar@netprophetsglobal.com';
    //$to = 'sanjeev.kumar@netprophetsglobal.com,aditi.sharma@cseindia.org,ajanta@cseindia.org,bhasker@netprophetsglobal.com';
    $from = 'support@greenschoolsprogramme.org';    
    $subject = "Green Schools Programme Audit 2016: Performance Report ".$schoolName;
    $message = "Dear Principal,\n\n";
    $message .= "Greetings from the Green Schools Programme (GSP)!\n\n";
    $message .= "This has reference to your school’s participation in the GSP Audit 2016. We thank you for all the efforts your GSP Audit team put in towards improving the environment while carrying out all the activities. \n\n";
    $message .= "We are glad to share the performance report, as announced previously. The report will help your school in assessing the initiatives undertaken and move towards filling in the gaps by the next GSP Audit.\n\n";
    $message .= "Also, we would like to inform you that from the next Audit cycle, i.e., GSP Audit 2017, our focus will be on measuring the change. The school’s actions for bettering the environment and sensitivity towards environment will be looked at from the baseline year (the year the school did the Audit for the first time). And the degree of change will be appreciated and recognised.\n\n";
    $message .= "Please find attached your performance report. You may save it for future reference. We hope you find it useful and helpful to prepare for the GSP Audit 2017. In case you have any query, please write to us at support@greenschoolsprogramme.org.\n\n";   
    $message .= "Regards,\n\n";
    $message .= "GSP Team";  
	
	// set from and subject in headers
	$headers = array('From' => $from,'Subject' => $subject);		
	// set eol character
	$crlf = "\r\n";	
    $file = 'response_pdf/'.$filename;
	// initialize mime object 
	$mime =  new Mail_mime(array('eol' => $crlf));	
	// optional text version of message for older mail clients
	//$mime->setTXTBody($text);	
	// set HTML body
	$mime->setHTMLBody($message);	
	// set the attachment
	//$mime->addAttachment($pdf, 'application/pdf', $filename, false );
    $mime->addAttachment($file, 'text/plain');	
	// get message body from mime object
	$body = $mime->getMessageBody();	
	// get message headers from mime object
	$headers = $mime->headers($headers);	
	// ready smtp connection
	$smtp = Mail::factory('smtp',
		array ('host' => $host,
			'port' => 587,
			'auth' => true,
			'username' => $username,
			'password' => $password));	
	// send the mail
                  if(file_exists( $file_location))
                  {
	$mail = $smtp->send($to, $headers, $body);
                  //sleep(1);
                 echo "HERE ".$i;
                  }
                  else
                      {
                  echo $filename ."not exists in pdf directory";
                        }           
	
	if (PEAR::isError($mail)) 
	{
		echo("<p>" . $mail->getMessage() . "</p>");
	} else 
	{
		echo("<p>Message successfully sent! to ".$to." School:".$loop_data['attribute_1']." </p>");
	}
}