<?php
//require_once('Mail.php');
//require_once('Mail/mime.php'); // PEAR Mail_Mime packge

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("memory_limit", "999M");

define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
include_once('website_db.php');
//include_once('get_response_report.php');
$loop_query = mysql_query("SELECT  ttok.token, ttok.email, ttok.attribute_1, ttok.attribute_7, ttok.attribute_12, ttok.tid FROM lime_tokens_266617 as ttok JOIN  lime_survey_266617 as ssur ON ttok.token=ssur.token WHERE ssur.token=ttok.token AND ttok.usesleft<=0  AND ttok.completed !='N' AND ssur.submitdate IS NOT NULL LIMIT 1");

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
     
//	ini_set("max_execution_time", "9999");
//	$token = $loop_data['token'];   
//	$html = getResponseHtml($token);
//	//$html = ob_get_flush();
//	$dompdf = new DOMPDF();
//	$dompdf->set_paper("A4","portrait");
//	$dompdf->load_html($html);
//	$dompdf->render();
//	$pdf = $dompdf->output();
//	
//                 
        
	//$random = rand(5, 100);
	
        
                  $pdf_sc_city = $loop_data['attribute_7'];
                  $school_id = $loop_data['tid'];
	$school_name_pdf = str_replace(' ', '_', trim($loop_data['attribute_1']));
	$filename = "$school_name_pdf" . "_" . trim($pdf_sc_city)."_".$school_id.'.pdf';
        
                
                  // Save dynamically generated pdf to a floder location
                  $file_location = $_SERVER['DOCUMENT_ROOT']."/dashboard/2016/response_pdf/".$filename;
                  //file_put_contents($file_location,$pdf); 
        
	
	/////////////////////////////////////////////// MAIL SCRIPT ///////////////////////////////////////////////////////////////////////        
//	    if(trim($loop_data['attribute_12']) !="")
//	    {
//	          $to = $loop_data['email'].','.$loop_data['attribute_12'];
//	    }
//	    else
//	    {
//	         $to = $loop_data['email'];
//	    }
	$to = 'sanjeev.kumar@netprophetsglobal.com';
	$from = 'Support <support@greenschoolsprogramme.org>';    
	$subject = 'Response Report your Green Schools Programme Audit 2016';
        
	$message = '<html><body>'; 
	$message = "<p>Dear GSP Audit team,</p>";
	$message .= "<p>A Big thank you for participating in Green Schools Programme (GSP) Audit 2016.</p>";
	$message .= "We are pleased to inform you that this year too we had a positive response for GSP Audit 2016 from across India. We had 2514 registrations from the 29 states and 4 Union Territories of India. Of the total national footprint, 701 schools submitted the GSP Audit on time. 533 schools had started filing the GSP Audit report but couldn't submit within the deadline, which was extended once for three weeks. </p>";
	$message .= "<p>Attached is your response report of the GSP Audit 2016 for your records. But remember your data has also been archived on the audit portal. Should you misplace the attached, you can contact us at support@greenschoolsprogramme.org. Please feel free to contact us at 011-40616000 Extn-219.</p>";
	$message .= "<p>We will be validating and analysing the audit reports of the submitted audits between now and January 2017. The GSP team will contact some (not all of the 701 schools) of the schools for verification of data submitted. We will announce the GSP Audit 2016 results in Feb 2017.</p>";   
	$message .= "<p>Stay tuned!</p>";
	$message .= "<p>GSP Team</p>";
	$message .= '</body></html>';
	
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