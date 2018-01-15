<html>
    <head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    </head>
    <body>
	<?php
	
	if (!empty($students)) {
	    for ($i = 0; $i < count($students); $i++) {
			//echo '<pre>'; print_r($students);exit;
		if ($students[$i]['name'] !="") {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) no-repeat; width:1024px; height:485px; margin:0 auto;'><div class='first_name'>" . $students[$i]['name'] . "&nbsp;&nbsp;(" .  $students[$i]['grade'] . ")&nbsp;(".$students[$i]['school_name'].")</div></div>";
		}
	    }
	}
	if (!empty($staffadmin)) {
	    for ($i = 0; $i < count($staffadmin); $i++) {
		if ($staffadmin != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) no-repeat; width:1024px; height:500px; margin:0 auto;'><div class='first_name'>" . $staffadmin['teacher'] . "&nbsp;(" .  $staffadmin['school'] . ")</div></div>";
		}
	    }
	}
	?>
    </body>
</html>
<style type="text/css">
    .first_name{ position:absolute; top:280px; left:300px}
    .grade{position:absolute; top:280px; left:650px}
</style>
