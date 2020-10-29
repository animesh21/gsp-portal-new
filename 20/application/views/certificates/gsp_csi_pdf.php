
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
        <div class='image'><img src='assets/img/images/Certificate EEU October 14 to 16, 2020.jpg' width='1000' height='700'></div>";

  echo "<div class='principal'>" . strtoupper($teacher->name_of_participant) ."</div>&nbsp;";
    $length = strlen($teacher->school_name);
  if($length > 61) {
  echo  "<div class='school_name1'>". strtoupper($teacher->school_name)."</div>";
  
  }else{
    echo "<div class='school_name'>". strtoupper($teacher->school_name). "</div>";
     
  }  
        echo "<div class='certificateno'>Certificate No : "."GSP Capacity Building Workshop/2020/01/0".$teacher->id." </div>
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

.certificateno{ position:absolute; top:633px; left: 10px;}
.principal{ position:relative; text-align: center; top:265px;}
.school_name1{ position:relative; text-align: center; top:255px; font-size: 16px; margin-left: 25px;}
.school_name{ position:relative; text-align: center; top:255px; margin-left: 25px;}
.image{position:absolute; margin-left: -40px; margin-top: -45px;}
</style>

<style type="text/css">   
    .page{ text-align:right; page-break-after:always;}
</style>

