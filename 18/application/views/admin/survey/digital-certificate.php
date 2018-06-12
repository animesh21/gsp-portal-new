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
style='background:url(assets/img/images/Certificate-2017.jpg) 0% 17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name'>" . $students[$i]['name'] . "&nbsp;&nbsp;" . numberToRomanRepresentation($students[$i]['grade']) . "</div>&nbsp;<div class='school_name'>".$students[$i]['school_name']."</div></div>";
		}
	    }
	}
	if (!empty($staffadmin)) {
	    for ($i = 0; $i < count($staffadmin); $i++) {
		if ($staffadmin != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) 0% 17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name'>" . $staffadmin[$i]['teacher'] . "</div>&nbsp;<div class='school_name'>" .  $staffadmin[$i]['school'] . "</div></div>";
		}
	    }
	}
	    
	if (!empty($principal)) {
	    for ($i = 0; $i < count($principal); $i++) {
		if ($principal != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) 0% -17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name1'>" . $principal[$i]['name'] . "</div>&nbsp;<div class='school_name1'>" .  $principal[$i]['schoolname'] . "</div></div>";
		}
	    }
	}
	
	?>
    </body>
</html>
<style type="text/css">
        .first_name{ position:absolute; top:405px; left:240px}
	    .school_name{ position:absolute; top:452px; left:100px}
		.first_name1{ position:absolute; top:400px; left:240px}
	    .school_name1{ position:absolute; top:447px; left:100px}
        .grade{position:absolute; top:265px; left:650px}
</style>
