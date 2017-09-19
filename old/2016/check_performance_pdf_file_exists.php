<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("memory_limit", "999M");
define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
include_once('website_db.php');
//include_once('performance_report_html.php');
$loop_query = mysql_query("SELECT  ttok.token, ttok.email, ttok.attribute_1, ttok.attribute_7, ttok.attribute_12, ttok.tid FROM lime_tokens_266617 as ttok JOIN  lime_survey_266617 as ssur ON ttok.token=ssur.token WHERE ssur.token=ttok.token AND ttok.usesleft<=0  AND ttok.completed !='N' AND ssur.submitdate IS NOT NULL");
$i =0;
while ($loop_data = mysql_fetch_assoc($loop_query))
{
    $i++;
	$pdf_sc_city = $loop_data['attribute_7'];
                  $school_id = $loop_data['tid'];
	$school_name_pdf = str_replace(' ', '_', trim($loop_data['attribute_1']));
	$filename = "$school_name_pdf" . "_" . trim($pdf_sc_city)."_".$school_id.'.pdf';
                  // Save dynamically generated pdf to a floder location
                 
                  $file_location = $_SERVER['DOCUMENT_ROOT']."/dashboard/2016/performance_pdf/".$filename;
                  
                  if(!file_exists( $file_location))
                  {
                        echo "<p style='color:red'>".$i ."-".$filename. " not exists</p>";
                        
                  }
                  else {
                      echo $i ."-".$filename. " already exists <br>";
                  }
                  //echo "PDF File ".$filename. "Successfully generated";                 
	
}