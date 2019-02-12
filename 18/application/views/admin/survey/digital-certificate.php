<html>
    <head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    </head>
    <body>
	<?php
	if (!empty($school_certificates)) {
	    $i=0;
	    foreach($school_certificates as $certificate) {
		if ($certificate->certificate_username !="") {
		    echo "<div class='container' 
style='background:url(assets/img/images/certificate3-2018.jpg) 0% -10%  no-repeat; width:724px; height:490px; margin:0px auto;'>

  <div class='first_name'>" . $certificate->certificate_username ."</div>&nbsp;
  <div class='school_name'>". $certificate->certificate_schoolname."</div>
  <div class='certificateno'>Certificate No: "."GSPAudit/2018/".$certificate->id." </div>
    </div><div class='page'><strong>Page No.: ".++$i."</strong></div>";
		}
	  }
	}
	/*if (!empty($staffadmin)) {
	    for ($i = 0; $i < count($staffadmin); $i++) {
		if ($staffadmin != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) 0% 17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name'>" . $staffadmin[$i]['teacher'] . "</div>&nbsp;<div class='school_name'>" .  $staffadmin[$i]['school'] . "</div></div>";
		}
	    }
	}*/
	    
/*	if (!empty($principal)) {
	    for ($i = 0; $i < count($principal); $i++) {
		if ($principal != '') {
		    echo "<div class='container' 
style='background:url(assets/img/images/Certificate-2017.jpg) 0% -17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name1'>" . $principal[$i]['name'] . "</div>&nbsp;<div class='school_name1'>" .  $principal[$i]['schoolname'] . "</div></div>";
		}
	    }
	}*/
	
	?>
    </body>
</html>


<style type="text/css">
          @font-face {
  font-family: myFirstFont;
  src: url(18/assets/scriptina/mtcorsva.ttf);
}

body{
	font-family: myFirstFont;
}
 

         .certificateno{ position:absolute; top:500px font-weight:bold; font-family:Verdana, Arial, Helvetica, sans-serif }
         .first_name{ position:absolute; top:225px; left:240px}
	    .school_name{ position:absolute; top:265px; left:100px}
		.first_name1{ position:absolute; top:225px; left:240px}
	    .school_name1{ position:absolute; top:265px; left:100px}
        .grade{position:absolute; top:205px; left:650px}
</style>


<style type="text/css">
        /*.first_name{ position:absolute; top:405px; left:240px}
	    .school_name{ position:absolute; top:452px; left:100px}
		.first_name1{ position:absolute; top:400px; left:240px}
	    .school_name1{ position:absolute; top:447px; left:100px}
        .grade{position:absolute; top:265px; left:650px}*/
		
		.page{ text-align:right; page-break-after:always;}
</style>
