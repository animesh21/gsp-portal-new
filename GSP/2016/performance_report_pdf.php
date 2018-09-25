<?php
ob_start();
define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
if(isset($_REQUEST['id']))
{
    $token= $_REQUEST['id'];
}
include_once('performance_report_html.php');

$sql_email_school = mysql_fetch_assoc(mysql_query("SELECT `email`, `attribute_1`,`attribute_7`, `tid` FROM lime_tokens_266617 WHERE `token` = '" . $token . "'"));
$html = ob_get_contents();
$html .= ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->set_paper("A4","portrait");
$dompdf->load_html($html);
$dompdf->render();
$random = rand(5, 100);
$school_id = $sql_email_school['tid'];
$school_city = $sql_email_school['attribute_7'];
$school_name = str_replace(' ', '_', $sql_email_school['attribute_1']);
$postfix = $school_name . "_" . $school_city . "_" . $school_id . '.pdf';
$dompdf->stream($postfix);

