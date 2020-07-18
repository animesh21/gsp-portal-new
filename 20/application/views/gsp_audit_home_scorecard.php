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

    if ($teacher->participant_name !="") {
        echo "<div class='container'>
        <div class='image'><img src='assets/img/images/page-1.jpg' width='794' height='1100'></div>";

  echo "<div class='principal'>" . strtoupper($teacher->participant_name) ."</div>&nbsp;";
    $length = strlen($teacher->school_name);
  if($length > 61) {
  echo  "<div class='school_name1'>". strtoupper($teacher->school_name." ".$teacher->state )."</div>";
  
  }else{
    echo "<div class='school_name'>". strtoupper($teacher->school_name.", ".$teacher->state )."</div>";
     
  }  
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>Certificate No : "."GSP'S Audit Home Scorecard/2020/0".$teacher->id." </div>
   </div> ";


  echo "<div class='container'>
        <div class='image'><img src='assets/img/images/page-2.jpg' width='794' height='1100'></div>";
  echo "<div class='finalScore'>" . strtoupper($teacher->final_score) ."</div>&nbsp;";
  echo "<div class='air'>" . strtoupper($teacher->air_score) ."</div>&nbsp;";
  echo "<div class='energy'>" . strtoupper($teacher->energy_score) ."</div>&nbsp;";
  echo "<div class='food'>" . strtoupper($teacher->food_score) ."</div>&nbsp;";
  echo "<div class='land'>" . strtoupper($teacher->land_score) ."</div>&nbsp;";
  echo "<div class='water'>" . strtoupper($teacher->water_score) ."</div>&nbsp;";
  echo "<div class='waste'>" . strtoupper($teacher->waste_score) ."</div>&nbsp;";
     
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>Certificate No : "."GSP Skill Building E-Camp/2020/0".$teacher->id." </div>
   </div> ";


   echo "<div class='container'>
        <div class='image'><img src='assets/img/images/page-3.jpg' width='794' height='1100'></div>";
 
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>Certificate No : "."GSP Skill Building E-Camp/2020/0".$teacher->id." </div>
   </div> ";


   echo "<div class='container'>
        <div class='image'><img src='assets/img/images/page-4.jpg' width='794' height='1080'></div>";
  
        echo "<div class='certificateno'>Certificate No : "."GSP Skill Building E-Camp/2020/0".$teacher->id." </div>
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

.certificateno{ position:absolute; top:1045px; left: 10px;}
.principal{ position:relative; text-align: center; top:560px;}
.finalScore{ position:relative;top:300px; left: 245px}
.school_name1{ position:relative; text-align: center; top:555px; font-size: 20px;}
.school_name{ position:relative; text-align: center; top:555px; margin-left: 20px;}
.image{position:absolute; margin-left: -45px; margin-top: -45px;}
.air{position:relative;top:754px; left: 53px; font-weight: bold; color: white}
.energy{position:relative;top:707px; left: 165px; font-weight: bold; color: white}
.food{position:relative;top:659px; left: 280px; font-weight: bold; color: white}
.land{position:relative;top:610px; left: 395px; font-weight: bold; color: white}
.water{position:relative;top:563px; left: 505px; font-weight: bold; color: white}
.waste{position:relative;top:515px; left: 625px; font-weight: bold; color: white}

</style>

<style type="text/css">   
    .page{ text-align:right; page-break-after:always;}
</style>
