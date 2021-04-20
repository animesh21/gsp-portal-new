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

    if ($teacher->name !="") {
        echo "<div class='container'>
        <div class='image'><img src='assets/img/images/ww/ww1.jpg' width='794' height='1100'></div>";
  $parlen = strlen($teacher->participant_name);
  if($parlen > 30){
    echo "<div class='principal1'>" . strtoupper($teacher->name) ."</div>&nbsp;";

  }
  else{
    echo "<div class='principal'>" . strtoupper($teacher->name) ."</div>&nbsp;";

  }


  // echo "<div class='principal'>" . strtoupper($teacher->participant_name) ."</div>&nbsp;";
    $length = strlen($teacher->school_name);
  if($length > 61) {
  echo  "<div class='school_name1'>". strtoupper($teacher->school." ".$teacher->state )."</div>";
  
  }else{
    echo "<div class='school_name'>". strtoupper($teacher->school.", ".$teacher->state )."</div>";
     
  }  
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>"."GSP'S Audit@Home Scorecard/FEB2021/0".$teacher->id." </div>
   </div> ";


  echo "<div class='container'>
        <div class='image'><img src='assets/img/images/ww/ww2.jpg' width='794' height='1100'></div>";
  echo "<div class='finalScore'>" . strtoupper($teacher->total) ."</div>&nbsp;";
  echo "<div class='air'>" . strtoupper($teacher->score) ."</div>&nbsp;";
  echo "<div class='energy'>" . strtoupper($teacher->home) ."</div>&nbsp;";
//   echo "<div class='food'>" . strtoupper($teacher->food_score) ."</div>&nbsp;";
//   echo "<div class='land'>" . strtoupper($teacher->land_score) ."</div>&nbsp;";
//   echo "<div class='water'>" . strtoupper($teacher->water_score) ."</div>&nbsp;";
//   echo "<div class='waste'>" . strtoupper($teacher->waste_score) ."</div>&nbsp;";
     
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>"."GSP'S Audit@Home Scorecard/FEB2021/0".$teacher->id." </div>
   </div> ";


   echo "<div class='container'>
        <div class='image'><img src='assets/img/images/ww/ww3.jpg' width='794' height='1100'></div>";
        
        // echo "<div class='link-1' ><a href='https://cdn.cseindia.org/docs/GSP-AP-seminar-april2020/Quizzes-Activities-on-Air-Pollution.pdf' style='color:#f7a206;' target='_blank'>https://cdn.cseindia.org/docs/GSP-AP-seminar-april2020/Quizzes-Activities-on-Air-Pollution.pdf</a></div>";

        // echo "<div class='link-2' ><a href='https://cdn.cseindia.org/docs/GSP-Solar-Schools/GSP-RE-Energy-Board-Game.jpg' style='color:#f7a206;' target='_blank'>https://cdn.cseindia.org/docs/GSP-Solar-Schools/GSP-RE-Energy-Board-Game.jpg</a></div>";

        echo "<div class='link-3' ><a href='https://www.downtoearth.org.in/dte-infographics/waste-to-worth/index.html' style='color:#f7a206;' target='_blank'>https://www.downtoearth.org.in/dte-infographics/waste-to-worth/index.html</a></div>";
 
        echo "<div class='certificateno' style='text-align:right; page-break-after:always;'>"."GSP'S Audit@Home Scorecard/FEB2021/0".$teacher->id." </div>
   </div> ";


   echo "<div class='container'>
        <div class='image'><img src='assets/img/images/ww/ww4.jpg' width='794' height='1080'></div>";
        $parlen = strlen($teacher->participant_name);
        if($parlen > 30){
          echo "<div class='principal1'>" . strtoupper($teacher->name) ."</div>&nbsp;";
      
        }
        else{
          echo "<div class='principal'>" . strtoupper($teacher->name) ."</div>&nbsp;";
      
        }

        $length = strlen($teacher->school_name);
        if($length > 61) {
        echo  "<div class='school_name1'>". strtoupper($teacher->school." ".$teacher->state )."</div>";
        
        }else{
          echo "<div class='school_name'>". strtoupper($teacher->school.", ".$teacher->state )."</div>";
           
        }  
        
  
        echo "<div class='certificateno'>"."GSP'S Audit@Home Scorecard/FEB2021/0".$teacher->id." </div>
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

.certificateno{ position:absolute; top:1048px; left: 10px; font-size: 16px;}
.link-1{ position:absolute; top:196px; left: 60px; font-size:12px; font-style:italic; font-weight:bold;}
.link-2{ position:absolute; top:363px; left: 60px; font-size:12px; font-style:italic; font-weight:bold;}
.link-3{ position:absolute; top:540px; left: 22px; font-size:12px; font-style:italic; font-weight:bold;}
.link-4{ position:absolute; top:368px; left: 125px; font-size:16px; font-weight:bold;}
.link-5{ position:absolute; top:425px; left: 315px; font-size:16px; font-weight:bold;}
.principal{ position:relative; text-align: center; top:565px; font-size: 18px;}
.principal1{ position:relative; text-align: center; top:565px; font-size: 15px;}
.finalScore{ position:relative;top:255px; left: 242px; font-weight: bold; font-size: 25px;}
.school_name1{ position:relative; text-align: center; top:562px; font-size: 14px;}
.school_name{ position:relative; text-align: center; top:562px; font-size: 18px;}
.image{position:absolute; margin-left: -45px; margin-top: -45px;}
.air{position:relative;top:748px; left: 128px; font-weight: bold; color: white}
.energy{position:relative;top:701px; left: 336px; font-weight: bold; color: white}
.food{position:relative;top:653px; left: 280px; font-weight: bold; color: white}
.land{position:relative;top:604px; left: 395px; font-weight: bold; color: white}
.water{position:relative;top:558px; left: 505px; font-weight: bold; color: white}
.waste{position:relative;top:509px; left: 625px; font-weight: bold; color: white}

</style>

<style type="text/css">   
    .page{ text-align:right; page-break-after:always;}
</style>
