<?php
session_start();
session_destroy();
session_unset();
$page = "index.php?proc=out";
header("location:$page");
?>
