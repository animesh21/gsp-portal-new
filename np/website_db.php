<?php
define("DB_Hostname", "localhost");
define("DB_Username", "GSP_2016");
define("DB_Password", "Studio@123");
define("DB_databasename", "GSP_2016");
$link = mysql_connect(DB_Hostname, DB_Username, DB_Password) or die('Error connecting to mysql');
$mysql_db = mysql_select_db(DB_databasename, $link);
?>
