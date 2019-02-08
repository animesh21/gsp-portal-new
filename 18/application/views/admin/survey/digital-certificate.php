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
style='background:url(assets/img/images/certificate-2018.jpg) 0% 10%  no-repeat; width:724px; height:490px; margin:0px auto;'><div class='first_name'>" . $students[$i]['name'] . "&nbsp;&nbsp;" . numberToRomanRepresentation($students[$i]['grade']) . "</div>&nbsp;<div class='school_name'>".$students[$i]['school_name']."</div></div>";
		}
	    }
	}
	if (!empty($staffadmin)) {
	    for ($i = 0; $i < count($staffadmin); $i++) {
		if ($staffadmin != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/certificate-2018.jpg) 0% 10%  no-repeat; width:724px; height:490px; margin:0px auto;'><div class='first_name'>" . $staffadmin[$i]['teacher'] . "</div>&nbsp;<div class='school_name'>" .  $staffadmin[$i]['school'] . "</div></div>";
		}
	    }
	}
	    
	if (!empty($principal)) {
	    for ($i = 0; $i < count($principal); $i++) {
		if ($principal != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/certificate-2018.jpg) 0% -10%  no-repeat; width:724px; height:490px; margin:0px auto;'><div class='first_name1'>" . $principal[$i]['name'] . "</div>&nbsp;<div class='school_name1'>" .  $principal[$i]['schoolname'] . "</div></div>";
		}
	    }
	}
	
	?>
    </body>
</html>
<style type="text/css">
          @font-face {
  font-family: myFirstFont;
  src: url(assets/scriptina/SCRIPALT.ttf);
}

.first_name{
	font-family: myFirstFont;
}

.school_name{
	font-family: myFirstFont;
}

.first_name1{
	font-family: myFirstFont;
}

        .first_name{ position:absolute; top:256px; left:240px}
	    .school_name{ position:absolute; top:293px; left:100px}
		.first_name1{ position:absolute; top:256px; left:240px}
	    .school_name1{ position:absolute; top:293px; left:100px}
        .grade{position:absolute; top:205px; left:650px}
</style>
