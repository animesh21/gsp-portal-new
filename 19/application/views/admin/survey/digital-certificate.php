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
// 		if ($certificate->certificate_username !="") {
// 		    echo "<div class='container' 
// style='background:url(assets/img/images/Certificate_new_19_1.jpg); 0% -10%  no-repeat; width:1000px; height:720px; margin:-40px;'>

//   <div class='first_name'>" . $certificate->certificate_username ."</div>&nbsp;
//   <div class='school_name'>". $certificate->certificate_schoolname."</div>
//   <div class='certificateno'>Certificate No: "."GSPAudit/2019/".$certificate->id." </div>
//     </div><div class='page'><strong></strong></div>";
// 		}
	  }
	}


	if (!empty($principal)) {
	    $i=0;
	    foreach($principal as $principal) {

		if ($principal->principle_name !="") {
		    echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/Certificate201.jpg' width='1000' height='700'></div>

  <div class='principal'>" . $principal->principle_name ."</div>&nbsp;
  <div class='school_name'>". $certificate->certificate_schoolname."</div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2019/".$certificate->id." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}


	if (!empty($staffadmin)) {
	    $i=0;
	    foreach($staffadmin as $staffadmin) {

		if ($staffadmin !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/Certificate201.jpg' width='1000' height='700'></div>

  <div class='principal'>" . ucwords($staffadmin)  ."</div>&nbsp;
  <div class='school_name'>". $certificate->certificate_schoolname."</div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2019/".$certificate->id." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}	
   

	if (!empty($students)) {
	    $i=0;
	    foreach($students as $students) {

		if ($students !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/Certificate202.jpg' width='1000' height='700'></div>

  <div class='first_name'>" . $students['name']  ."</div>&nbsp;
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2019/".$certificate->id." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}


// 	if (!empty($staffadmin)) {
// 	    for ($i = 0; $i < count($staffadmin); $i++) {
// 		if ($staffadmin != '') {
// 		    echo "<div class='container' 
// style='background:url(assets/img/images/Certificate-2017.jpg) 0% 17%  no-repeat; width:1124px; height:791px; margin:0px auto;'><div class='first_name'>" . $staffadmin[$i]['teacher'] . "</div>&nbsp;<div class='school_name'>" .  $staffadmin[$i]['school'] . "</div></div>";
// 		}
// 	    }
// 	}
	    
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
	font-family: mtcorsva; font-size: 20px;
}
 

         .certificateno{ position:absolute; top:660px; left: 10px;}
         .first_name{ position:relative; text-align: center; top:350px;}
         .principal{ position:relative; text-align: center; top:270px;}
	    .school_name{ position:relative; text-align: center; top:360px;}
		.first_name1{ position:relative; text-align: center; top:265px;}
	    .school_name1{ position:absolute; top:265px;}
        .grade{position:absolute; top:205px; left:650px}
        .image{position:absolute; margin-left: -40px; margin-top: -20px;}
</style>


<style type="text/css">
        /*.first_name{ position:absolute; top:405px; left:240px}
	    .school_name{ position:absolute; top:452px; left:100px}
		.first_name1{ position:absolute; top:400px; left:240px}
	    .school_name1{ position:absolute; top:447px; left:100px}
        .grade{position:absolute; top:265px; left:650px}*/
		
		.page{ text-align:right; page-break-after:always;}
</style>
