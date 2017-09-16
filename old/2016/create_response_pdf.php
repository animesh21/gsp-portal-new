<?php
ob_start();
define("DOMPDF_ENABLE_PHP", true);
require_once("dompdf/dompdf_config.inc.php");
include_once('get_response_report.php');
if(isset($_REQUEST['id']))
{
    $token_id = $_REQUEST['id'];
}
$sql_email_school = mysql_fetch_assoc(mysql_query("SELECT `email`, `attribute_1`,`attribute_7`, `tid` FROM lime_tokens_266617 WHERE `token` = '" . $token_id . "'"));
$html = getResponseHtml($token_id);
$html .= ob_get_contents();
$html .= ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->set_paper("A4","portrait");
$dompdf->load_html($html);
$dompdf->render();
$random = rand(5, 100);
$date = $sql_email_school['tid'];
$pdf_sc_city = $sql_email_school['attribute_7'];
$school_name_pdf = str_replace(' ', '_', $sql_email_school['attribute_1']);
$postfix = "$school_name_pdf" . "_" . $pdf_sc_city . "_" . $date . '.pdf';
//$postfix = "responses_".$random.$date.'.pdf';
$dompdf->stream($postfix);
