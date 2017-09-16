<?php
session_start();
ob_start();
define('DOMPDF_ENABLE_AUTOLOAD', false);
// include DOMPDF's default configuration
require_once 'dompdf/dompdf_config.inc.php';
//include 'report.php';
include('performance-report.php');
$htmlString = ob_get_contents();
ob_end_clean(); 

$filename = "report - ".date('j-M-y').".pdf";
$dompdf = new DOMPDF();
//$dompdf->set_paper("A4");
$dompdf->load_html($htmlString);
$dompdf->render();
$dompdf->stream($filename);
