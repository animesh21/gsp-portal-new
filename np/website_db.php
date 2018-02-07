<?php

define("DB_Hostname", "43.255.154.31");
		define("DB_Username", "studio_gsp2015");
		define("DB_Password", "Studio@123");
		define("DB_databasename", "gsp_2015");

$link = mysql_connect(DB_Hostname, DB_Username, DB_Password) or die('Error connecting to mysql');
$mysql_db = mysql_select_db(DB_databasename, $link);
?>
