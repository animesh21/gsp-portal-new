<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("memory_limit", "999M");
define("DOMPDF_ENABLE_PHP", true);
include_once('website_db.php');
$loop_query = mysql_query("SELECT ttok.token,ttok.tid,ttok.email, ttok.attribute_1, ttok.attribute_7, ttok.attribute_12, ttok.tid FROM lime_tokens_266617 AS ttok JOIN  lime_survey_266617 AS ssur ON ttok.token=ssur.token WHERE ssur.token=ttok.token AND ttok.usesleft<=0  AND ttok.completed !='N' AND ssur.submitdate IS NOT NULL AND ttok.tid IN(1857)");
echo "Total Audit Completed:".mysql_num_rows($loop_query);
$i =0;
while($loop_data = mysql_fetch_assoc($loop_query))
{
    $i++;
        set_time_limit(40);     	
        ini_set("max_execution_time", "9999");
        $pdf_sc_city = $loop_data['attribute_7'];
        $school_id = $loop_data['tid'];
		$school_name_pdf = str_replace(' ', '_', trim($loop_data['attribute_1']));
		$filename = "$school_name_pdf" . "_" . trim($pdf_sc_city)."_".$school_id.'.pdf';
        // Get dynamically generated performance report pdf from performance_pdf directory.
        $file_location = $_SERVER['DOCUMENT_ROOT']."/dashboard/2016/performance_pdf/".$filename;
        //file_put_contents($file_location,$pdf); 
		$schoolName = $loop_data['attribute_1'];
        /////////////////////////////////////////////// Recepient Email Id ///////////////////////////////////////////////////////////////////////        
        //    if(trim($loop_data['attribute_12']) !="")
        //    {
        //          $to = $loop_data['email'].','.$loop_data['attribute_12']; // Cordinator email id,school_email
        //    }
        //    else
        //    {
        //         $to = $loop_data['email'];
        //    }
		$school_email_id = $loop_data['attribute_12'];
		$coordinator_email_id = $loop_data['email'];        
        
    //echo $loop_data['email'].','.$loop_data['attribute_12'];    
    $to = $school_email_id; 
    //$to = 'sanjeev.kumar@netprophetsglobal.com';
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
    // boundary 
    $file = 'performance_pdf/'.$filename;   
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
     //$content = chunk_split(base64_encode($content));
    $mime_boundary = md5(uniqid(time()));
    //$mime_boundary = md5(time()); 
    // multipart boundary 
    $headers = 'From: Green Schools Programme <support@greenschoolsprogramme.org>'. "\r\n";
    $headers .= 'Cc: '.$coordinator_email_id."\r\n";
    $headers .= 'Bcc: sanjeev.kumar@netprophetsglobal.com'."\r\n";    
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
    // append this attachment to emailBody
    $emailBody .= '--' . $mime_boundary . "\r\n";
    // set this part's MIME headers
    $emailBody .= 'Content-Type: "application/pdf"; name="' . $filename . '"' . "\r\n"; // set mime type of file attachment
    $emailBody .= 'Content-Transfer-Encoding: base64' . "\r\n"; // set transfer encoding (always 64 bit)
    $emailBody .= 'Content-Disposition: attachment; filename="' . $filename . '"' . "\r\n\r\n"; // double CRLF between headers and body
    //$fileContents = $this->encodeFileContents($postfix);
    $fileContents = chunk_split(base64_encode($content)); 
    // add this file's contents as body
    $emailBody .= $fileContents . "\r\n"; // double CRLF after file contents??????
    // Finished attachments. Add closing mime boundary.
    $emailBody .= '--' . $mime_boundary . '--' . "\r\n";  // mail will probably add one more CRLF since this is a separte param like headers
    // send the mail
                  if(file_exists( $file_location))
                  {
                            $ok = mail($to, $subject, $emailBody, $headers, '-odb -fsupport@greenschoolsprogramme.org');     
                            sleep(1);
                            //echo "HERE ".$i;
                  }
                  else
                  {
                     echo $filename ." not exists in pdf directory";
                  }    
    //$ok = true;   
    if($ok)
        {
            echo "Sent to " .$i."-> ". $to .", ". $loop_data['attribute_1'];       
            echo "<br>";
        }
    else 
        {
           echo "Failed to send to " . $to;
           echo "<br>";
        }
   }