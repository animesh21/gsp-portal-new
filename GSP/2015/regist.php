<?php
session_start();
session_destroy();
session_unset();
//$page = "index.php?proc=out";
$page = "index.php";
header("location:$page");
?>
