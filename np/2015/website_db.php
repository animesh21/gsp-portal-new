<?php
     	define("DB_Hostname", "localhost");
		define("DB_Username", "root");
		define("DB_Password", "");
		define("DB_databasename", "gsp_audit");
	
	$link = mysql_connect(DB_Hostname,DB_Username,DB_Password) or die('Error connecting to mysql');
	$mysql_db = mysql_select_db(DB_databasename, $link);
?>