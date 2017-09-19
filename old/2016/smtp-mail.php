<?php
require_once "Mail.php";
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge
$from = "Green School Programme <sanjeev.kumar@netprophetsglobal.com>";
$to = "Sanjeev <sanjeev.kumar@netprophetsglobal.com>";
$subject = "Test email using PHP SMTP\r\n\r\n";
//$body = "This is a test email message";

$host = "email-smtp.us-west-2.amazonaws.com";
$username = "AKIAJVL37MOCTOFNY5JQ";
$password = "AiW+B0LDtOYOX/+aTCpfyUX9qf5NwtJDoyzkddXQoZlo";





$headers2 = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);


// text and html versions of email.
$text = 'Lorem Ipsum TEXT FORMAT';
$html = '<strong>Lorem Ipsum HTML FORMAT</strong>.';
 
// attachment
$file = 'images/water.png';
$crlf = "\n";
 
$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);
$mime->addAttachment($file, 'text/plain');
 
$body = $mime->get();
$headers = $mime->headers($headers2);

$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => 587,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>