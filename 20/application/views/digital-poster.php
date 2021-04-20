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
        <div class='image' style='margin-top:-45px;'><img src='assets/img/images/poster.jpg' width='500' height='750'></div>";
    $scu = strlen($teacher->school);
    if($scu > 15 && $scu < 28){
      echo "<div class='sc_name1'>" . strtoupper($teacher->school) ."</div>&nbsp;";
    }elseif($scu > 28 && $scu < 55){
      echo "<div class='sc_name2'>" . strtoupper($teacher->school) ."</div>&nbsp;";

    }
    else{
      echo "<div class='sc_name'>" . strtoupper($teacher->school) ."</div>&nbsp;";
    }


    // echo "<div class='sc_name'>" . strtoupper($teacher->school) ."</div>&nbsp;";
    echo "<div class='sc_state'>" . strtoupper($teacher->district) .", ". strtoupper($teacher->state) ."</div>&nbsp;";
    echo "<div class='sc_sc'>" . strtoupper($teacher->sc) ."</div>&nbsp;";
    $sct = strlen($teacher->st);
    if($sct > 16){
      echo "<div class='sc_st1'>" . strtoupper($teacher->st) ."</div>&nbsp;";
    }else{
      echo "<div class='sc_st'>" . strtoupper($teacher->st) ."</div>&nbsp;";

    }

    // echo "<div class='sc_st'>" . strtoupper($teacher->st) ."</div>&nbsp;";
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
    $apc = strlen($teacher->ap); 
    if($apc < 450){
      echo "<div class='sc_ap'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";
    }elseif($apc >450 && $apc < 680 ){
      echo "<div class='sc_ap1'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";
    }elseif( 680 > $apc && $apc < 1000 ){
      echo "<div class='sc_ap2'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";
    }else{
      echo "<div class='sc_ap2'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";

    }

    // echo "<div class='sc_ap'><p>" . html_entity_decode($teacher->ap) ."</p></div>&nbsp;";
    echo "<div class='sc_pw'><p>" . html_entity_decode($teacher->pw) ."</p></div>&nbsp;";
    echo "<div class='sc_si'><p>" . html_entity_decode($teacher->si) ."</p></div>&nbsp;";
    $out = html_entity_decode($teacher->tw);
    if($out=="GREEN"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/2021.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="ORANGE"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/orange.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="YELLOW"){
    echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/yellow.jpg' style='width:50%;'></p></div>&nbsp;";
    }elseif($out=="RED"){
      echo "<div class='sc_20'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
    }else{

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
     }elseif($out=="RED"){
       echo "<div class='sc_18'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
     }else{

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
     }elseif($out=="RED"){
       echo "<div class='sc_17'><p><img alt='2020' src = 'assets/img/images/red.jpg' style='width:50%;'></p></div>&nbsp;";
     }else{

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
  font-family: Roboto;
  src: url(20/assets/Roboto/Roboto.ttf);
}

body{
  font-family: Roboto; font-size: 20px;
} 


.sc_sc{position:absolute;text-align:center;top:195px; margin-left: 50px;font-size: 9px;color:#41ad49;}
.sc_st{position:absolute;text-align:center;top:232px; margin-left: 50px;font-size: 9px;color:#41ad49;}
.sc_st1{position:absolute;text-align:center;top:232px; margin-left: 50px;font-size: 7px;color:#41ad49;}
.sc_ll_hl{position:absolute;text-align:center;top:172px; margin-left: 147px;font-size: 10px;color:#41ad49;}
.sc_p{position:absolute;text-align:center;top:201px; margin-left: 147px;font-size: 10px;color:#41ad49;}
.sc_sw{position:absolute;text-align:center;top:182px; margin-left: 243px;font-size: 9px;color:#41ad49;}
.sc_pcwg{position:absolute;text-align:center;top:230px; margin-left: 243px;font-size: 9px;color:#41ad49;}
.sc_name{position:absolute;text-align:center;top:93px; margin-left: 0px;font-weight:bold;width:100%;}
.sc_name1{position:absolute;text-align:center;top:93px; margin-left: 0px;font-weight:bold;width:100%;font-size:18px;}
.sc_name2{position:absolute;text-align:center;top:93px; margin-left: 0px;font-weight:bold;width:100%;font-size:14px;}

.sc_state{position:absolute;text-align:center;top:122px; margin-left: 0px;font-size: 12px;color:#41ad49;width:100%;}
.sc_tbwg{position:absolute;text-align:center;top:342px; margin-left: 83px;font-size: 9px;color:#41ad49;}
.sc_pww{position:absolute;text-align:center;top:367px; margin-left: 83px;font-size: 9px;color:#41ad49;}
.sc_tdwg{position:absolute;text-align:center;top:342px; margin-left: 150px;font-size: 9px;color:#41ad49;}
.sc_pdw{position:absolute;text-align:center;top:367px; margin-left: 150px;font-size: 9px;color:#41ad49;}
.sc_towg{position:absolute;text-align:center;top:342px; margin-left: 220px;font-size: 9px;color:#41ad49;}
.sc_pow{position:absolute;text-align:center;top:367px; margin-left: 220px;font-size: 9px;color:#41ad49;}
.sc_ap{position:absolute;text-align:left;top:423px; margin-left: 22px;width:270px;height:115px;font-size: 9px;}
.sc_ap1{position:absolute;text-align:left;top:423px; margin-left: 22px;width:270px;height:115px;font-size: 8.5px;}
.sc_ap2{position:absolute;text-align:left;top:423px; margin-left: 22px;width:270px;height:115px;font-size: 7.5px;}

.sc_pw{position:absolute;text-align:left;top:552px; margin-left: 22px;width:270px;height:55px;font-size: 9px;}
.sc_si{position:absolute;text-align:left;top:607px; margin-left: 22px;width:270px;height:55px;font-size: 9px;}

.sc_20{position:absolute;text-align:center;top:152px; margin-left: 370px;}
.sc_19{position:absolute;text-align:center;top:175px; margin-left: 370px;}
.sc_18{position:absolute;text-align:center;top:197px; margin-left: 370px;}
.sc_17{position:absolute;text-align:center;top:219px; margin-left: 370px;}






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
