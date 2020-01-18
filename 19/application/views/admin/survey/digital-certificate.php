<html>
    <head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
    </head>
    <body>

	<?php


	function integerToRoman($integer)
		  {
		 // Convert the integer into an integer (just to make sure)
		 $integer = intval($integer);
		 $result = '';
		 
		 // Create a lookup array that contains all of the Roman numerals.
		 $lookup = array('M' => 1000,
		 'CM' => 900,
		 'D' => 500,
		 'CD' => 400,
		 'C' => 100,
		 'XC' => 90,
		 'L' => 50,
		 'XL' => 40,
		 'X' => 10,
		 'IX' => 9,
		 'V' => 5,
		 'IV' => 4,
		 'I' => 1);
		 
		 foreach($lookup as $roman => $value){
		  // Determine the number of matches
		  $matches = intval($integer/$value);
		 
		  // Add the same number of characters to the string
		  $result .= str_repeat($roman,$matches);
		 
		  // Set the integer to be the remainder of the integer and the value
		  $integer = $integer % $value;
		 }
		 
		 // The Roman numeral should be built, return it
		 return $result;
		}

	
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
		    <div class='image'><img src='assets/img/images/certificate_new_19_1.jpg' width='1000' height='700'></div>

  <div class='principal'>" . strtoupper($principal->principle_name) ."</div>&nbsp;
  <div class='school_name'>". $certificate->certificate_schoolname."</div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2020/".$certificate->id." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}


	if (!empty($staffadmin)) {
	    $i=0;
	    foreach($staffadmin as $staffadmin) {

		if ($staffadmin !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/certificate_new_19_1.jpg' width='1000' height='700'></div>

  <div class='principal'>" . strtoupper($staffadmin)  ."</div>&nbsp;
  <div class='school_name'>". $certificate->certificate_schoolname."</div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2020/".$certificate->id." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}	
   

	if (!empty($students)) {
	    $i=0;
	    foreach($students as $students) {

		if ($students !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/certificate_new_19_2.jpg' width='1000' height='700'></div>

  <div class='first_name'>" . strtoupper($students['name'])  . ', Class : '. integerToRoman($students['grade'])  ."</div>&nbsp;
  <div class='school_name1'>". $certificate->certificate_schoolname."</div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2020/".$students['school_name']." </div>
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
 

        .certificateno{ position:absolute; top:670px; left: 10px;}
        .first_name{ position:relative; text-align: center; top:350px;}
        .principal{ position:relative; text-align: center; top:270px;}
	    .school_name{ position:relative; text-align: center; top:360px;}
		.first_name1{ position:relative; text-align: center; top:265px;}
	    .school_name1{ position:relative; text-align: center; top:350px;}
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
