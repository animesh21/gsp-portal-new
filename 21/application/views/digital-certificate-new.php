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
        <div class='image'><img src='assets/img/images/Mandi_HP workshop_certificate-Mar 3-5.jpg' width='1000' height='700'></div>";

  echo "<div class='principal'>" . strtoupper($teacher->school_name) ."</div>&nbsp;";
    $length = strlen($teacher->school_name);
  if($length > 61) {
  echo  "<div class='school_name1'>". strtoupper($teacher->name_of_participant)."</div>";
  
  }else{
    echo "<div class='school_name'>". strtoupper($teacher->name_of_participant). "</div>";
     
  }  echo "<div class='date'>"  . strtoupper($teacher->date). "</div> ";
        echo "<div class='certificateno'>Certificate No : "."GSP- HIMCOSTE Online Capacity Building Workshop MANDI/2021/0".$teacher->id." </div>
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
.date{position:relative; text-align: center; top:510px; margin-left: 480px;}
.certificateno{ position:absolute; top:680px; left: 10px;}
.principal{ position:relative; text-align: center; top:260px;}
.school_name1{ position:relative; text-align: center; top:250px; font-size: 20px; margin-left: 25px;}
.school_name{ position:relative; text-align: center; top:250px; margin-left: 25px;}
.image{position:absolute; margin-left: -40px; margin-top: -20px;}
</style>

<style type="text/css">   
    .page{ text-align:right; page-break-after:always;}
</style> 
