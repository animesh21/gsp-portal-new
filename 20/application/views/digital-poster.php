<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo $title; ?></title>
    </head>
    <body>
  <?php
  if (!empty($title)) {
    $i=0;
    foreach($teachers as $teacher) {

    if ($teacher->school !="") {
        echo "<div class='container'>
        <div class='image'><img src='assets/img/images/poster.jpg' width='500' height='707'></div>";

    echo "<div class='sc_name'>" . strtoupper($teacher->school) ."</div>&nbsp;";
    echo "<div class='sc_state'>" . strtoupper($teacher->district) .",". strtoupper($teacher->state) ."</div>&nbsp;";
    echo "<div class='sc_sc'>" . strtoupper($teacher->sc) ."</div>&nbsp;";
    echo "<div class='sc_st'>" . strtoupper($teacher->st) ."</div>&nbsp;";
    echo "<div class='sc_ll_hl'>" . strtoupper($teacher->ll) ." - ". strtoupper($teacher->hl) ."</div>&nbsp;";
    echo "<div class='sc_p'>" . strtoupper($teacher->tp) ."</div>&nbsp;";
    echo "<div class='sc_sw'>" . strtoupper($teacher->tswg) ."</div>&nbsp;";
    echo "<div class='sc_pcwg'>" . strtoupper($teacher->pc) ."</div>&nbsp;";
    echo "<div class='sc_tbwg'>" . strtoupper($teacher->tbwg) ."</div>&nbsp;";
    echo "<div class='sc_pww'>" . strtoupper($teacher->pww) ."</div>&nbsp;";
    echo "<div class='sc_tdwg'>" . strtoupper($teacher->tdwg) ."</div>&nbsp;";
    echo "<div class='sc_pdw'>" . strtoupper($teacher->pdw) ."</div>&nbsp;";
    echo "<div class='sc_towg'>" . strtoupper($teacher->towg) ."</div>&nbsp;";
    echo "<div class='sc_pow'>" . strtoupper($teacher->pow) ."</div>&nbsp;";
    echo "<div class='sc_ap'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";
    echo "<div class='sc_pw'><p>" . html_entity_decode($teacher->pw) ."</p></div>&nbsp;";
    echo "<div class='sc_si'><p>" . html_entity_decode($teacher->si) ."</p></div>&nbsp;";
    $out = html_entity_decode($teacher->tw);
    if($out=="GREEN"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/2021.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="ORANGE"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/orange.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="YELLOW"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/yellow.jpg' style='width:50%;'></p></div>&nbsp;";
    }else{
      echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
    }

    // leaf 2019
    $out = html_entity_decode($teacher->tn);
    if($out=="GREEN"){
    echo "<div class='sc_19'><p><img alt='2020' src = 'assets/img/images/2021.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="ORANGE"){
    echo "<div class='sc_19'><p><img alt='2020' src = 'assets/img/images/orange.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="YELLOW"){
    echo "<div class='sc_19'><p><img alt='2020' src = 'assets/img/images/yellow.jpg' style='width:50%;'></p></div>&nbsp;";
    }else{
      echo "<div class='sc_19'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
    }
    //..........
     // leaf 2018
     $out = html_entity_decode($teacher->te);
     if($out=="GREEN"){
     echo "<div class='sc_18'><p><img alt='2020' src = 'assets/img/images/2021.jpg' style='width:50%;'></p></div>&nbsp;";
     }elseif($out=="ORANGE"){
     echo "<div class='sc_18'><p><img alt='2020' src = 'assets/img/images/orange.jpg' style='width:50%;'></p></div>&nbsp;";
     }elseif($out=="YELLOW"){
     echo "<div class='sc_18'><p><img alt='2020' src = 'assets/img/images/yellow.jpg' style='width:50%;'></p></div>&nbsp;";
     }else{
       echo "<div class='sc_18'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
     }
     //..........

     // leaf 2017
     $out = html_entity_decode($teacher->ts);
     if($out=="GREEN"){
     echo "<div class='sc_17'><p><img alt='2020' src = 'assets/img/images/2021.jpg' style='width:50%;'></p></div>&nbsp;";
     }elseif($out=="ORANGE"){
     echo "<div class='sc_17'><p><img alt='2020' src = 'assets/img/images/orange.jpg' style='width:50%;'></p></div>&nbsp;";
     }elseif($out=="YELLOW"){
     echo "<div class='sc_17'><p><img alt='2020' src = 'assets/img/images/yellow.jpg' style='width:50%;'></p></div>&nbsp;";
     }else{
       echo "<div class='sc_17'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
     }
     //..........

  echo "<div class='principal'>" . strtoupper($teacher->school_name) ."</div>&nbsp;";
    $length = strlen($teacher->school_name);
  if($length > 61) {
  echo  "<div class='school_name1'>". strtoupper($teacher->name_of_participant)."</div>";
  
  }else{
    echo "<div class='school_name'>". strtoupper($teacher->name_of_participant). "</div>";
     
  }  echo "<div class='date'>"  . strtoupper($teacher->state). "</div> ";
  //       echo "<div class='certificateno'>Certificate No : "."GSP".$teacher->school." </div>
  //  </div> ";
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


.sc_sc{position:absolute;text-align:center;top:208px; margin-left: 50px;font-size: 9px;color:#41ad49;}
.sc_st{position:absolute;text-align:center;top:233px; margin-left: 50px;font-size: 9px;color:#41ad49;}
.sc_ll_hl{position:absolute;text-align:center;top:183px; margin-left: 147px;font-size: 10px;color:#41ad49;}
.sc_p{position:absolute;text-align:center;top:212px; margin-left: 147px;font-size: 10px;color:#41ad49;}
.sc_sw{position:absolute;text-align:center;top:192px; margin-left: 243px;font-size: 9px;color:#41ad49;}
.sc_pcwg{position:absolute;text-align:center;top:237px; margin-left: 243px;font-size: 9px;color:#41ad49;}
.sc_name{position:absolute;text-align:center;top:110px; margin-left: 0px;font-weight:bold;width:100%;}
.sc_state{position:absolute;text-align:center;top:135px; margin-left: 0px;font-size: 12px;color:#41ad49;width:100%;}
.sc_tbwg{position:absolute;text-align:center;top:342px; margin-left: 83px;font-size: 9px;color:#41ad49;}
.sc_pww{position:absolute;text-align:center;top:367px; margin-left: 83px;font-size: 9px;color:#41ad49;}
.sc_tdwg{position:absolute;text-align:center;top:342px; margin-left: 150px;font-size: 9px;color:#41ad49;}
.sc_pdw{position:absolute;text-align:center;top:367px; margin-left: 150px;font-size: 9px;color:#41ad49;}
.sc_towg{position:absolute;text-align:center;top:342px; margin-left: 220px;font-size: 9px;color:#41ad49;}
.sc_pow{position:absolute;text-align:center;top:367px; margin-left: 220px;font-size: 9px;color:#41ad49;}
.sc_ap{position:absolute;text-align:left;top:423px; margin-left: 22px;width:270px;height:115px;font-size: 9px;}
.sc_pw{position:absolute;text-align:left;top:543px; margin-left: 22px;width:270px;height:55px;font-size: 9px;}
.sc_si{position:absolute;text-align:left;top:597px; margin-left: 22px;width:270px;height:55px;font-size: 9px;}
.sc_20{position:absolute;text-align:center;top:163px; margin-left: 370px;}
.sc_19{position:absolute;text-align:center;top:185px; margin-left: 370px;}
.sc_18{position:absolute;text-align:center;top:206px; margin-left: 370px;}
.sc_17{position:absolute;text-align:center;top:227px; margin-left: 370px;}






.date{position:absolute; text-align: center; top:510px; margin-left: 480px;}
.certificateno{ position:absolute; top:680px; left: 10px;}
.principal{ position:relative; text-align: center; top:260px;}
.school_name1{ position:relative; text-align: center; top:250px; font-size: 20px; margin-left: 25px;}
.school_name{ position:relative; text-align: center; top:250px; margin-left: 25px;}
.image{position:absolute; margin-left: -40px; margin-top: -20px;}
</style>

<style type="text/css">   
    .page{ text-align:right; page-break-after:always;}
</style> 
