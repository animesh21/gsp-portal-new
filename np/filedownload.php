<?php
$dbfilename = '../audit_98474755/upload/surveys/266617/files/'.$_REQUEST['dbfilename'];
$actualfilename = $_REQUEST['actualfilename'];

if (file_exists($dbfilename)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$actualfilename.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($dbfilename));
    readfile($dbfilename);
    exit;
}
?>