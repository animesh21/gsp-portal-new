<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $title; ?></title>
    </head>
    <body>

	<?php

	 

	if (!empty($teachers)) {
	    $i=0;
	    foreach($teachers as $teacher) {

		if ($teacher->name_of_participant !="") {
		    echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/Certificate-new.jpg' width='1000' height='700'></div>";

  echo "<div class='principal'>" . strtoupper($teacher->name_of_participant) ."</div>&nbsp;";
    $length = strlen($teacher->school_name.$teacher->district.$teacher->state);
  if($length > 61) {
  echo	"<div class='school_name1'>". strtoupper($teacher->school_name).', '.strtoupper($teacher->district).', '.strtoupper($teacher->state). "</div>";
  }else{
  	echo "<div class='school_name'>". strtoupper($teacher->school_name).', '.strtoupper($teacher->district).', '.strtoupper($teacher->state). "</div>";
  	echo "<div class='airquality'> To find out the air quality in your city in real-time, <br/> you can visit CPCB (Central Pollution Control Board) <br/> <a href='https://app.cpcbccr.com/AQI_India/'>website: https://app.cpcbccr.com/AQI_India/</a> </div>";
  }
  
 echo "<div class='certificateno'>Certificate No: "."GSPOnlineSeminar/2020/".$teacher->id." </div>
   </div> ";
		}
	  }
	}

	?>

    </body>
</html>


<style type="text/css">
          @font-face {
  font-family: myFirstFont;
  src: url(18/assets/scriptina/mtcorsva.ttf);
}

body{
	font-family: mtcorsva; font-size: 20px;
}
 

.certificateno{ position:absolute; top:670px; left: 10px;}
.principal{ position:relative; text-align: center; top:330px;}
.school_name1{ position:relative; text-align: center; top:328px; font-size: 17px; margin-left: 25px;}
.school_name{ position:relative; text-align: center; top:325px; margin-left: 25px;}
.airquality{ position:relative; text-align: left; top:510px; margin-left: 22px; font-size: 13px;}
.image{position:absolute; margin-left: -40px; margin-top: -20px;}
</style>


<style type="text/css">		
		.page{ text-align:right; page-break-after:always;}
</style>
