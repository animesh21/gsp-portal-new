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

		 
$students = array_unique($students, SORT_REGULAR);
 
 

global $userid;
$userid = $principal[0]->userid;

$certificateNo1 = array();
  foreach($staffadmin as $staffadmin2) {
	    	$data = $this->db->select('id')->from('tblcertificate')->like('certificate_username', substr($staffadmin2, 0, strrpos($staffadmin2, ' ')))->where('userid', $userid)->get()->result();
	    	// echo $this->db->last_query();
	    	$data = json_decode(json_encode($data), true);
	    	
	    	foreach ($data as $value) {
	    		foreach ($value as $value) {
	    			 $certificateNo1[] = $value; 
	    		}
	    		
	    	}
	    }
 

$certificateNo2 = array();
 $students2 = array_column($students, 'name');
  

  foreach($students2 as $students2) {
	    	$data2 = $this->db->select('id')->from('tblcertificate')->like('certificate_username', substr($students2, 0, strrpos($students2, ' ')))->where('userid', $userid)->get()->result();
	    	// echo $this->db->last_query(); echo "<br>";
	    	$data2 = json_decode(json_encode($data2), true);
	    	 
	    	foreach ($data2 as $value) {
	    		foreach ($value as $value) {
	    			 $certificateNo2[] = $value; 
	    		}
	    		
	    	}
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
$string = strtoupper($certificate->certificate_schoolname.', '.getdistrictById($students[0]['district']).', '.getStateById($students[0]['state']));
 $school = '';
 if(strlen($string)<=70){
 	 $school = '<span>'.$string.'</span>';
 }else{
 	 $school = '<span style="font-size: 12pt">'.$string.'</span>';
 }

 

 

	if (!empty($principal)) {
	    $i=0;
	    foreach($principal as $principal) {

		if ($principal->principle_name !="") {
		    echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/cer/leadership.jpg' width='1000' height='700'></div>

  <div class='principal'><i>" . strtoupper($principal->principle_name) ."</i></div>&nbsp;
  <div class='school_name'><i>".$principle->name."</i></div>
  
  <div class='certificateno1'>Certificate No: "."GSPAudit/2021/".($certificate->id-1)." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}
	
	
	if (!empty($coname)) {
	    $i=0;
	    foreach($coname as $coname) {

		if ($coname->coname !="") {
		    echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/cer/leadership.jpg' width='1000' height='700'></div>

  <div class='principal'><i>" . strtoupper($coname->coname) ."</i></div>&nbsp;
  <div class='school_name'><i>".$school."</i></div>
  
  <div class='certificateno1'>Certificate No: "."GSPAudit/2021/".($certificate->id-2)." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}

	    

	if (!empty($staffadmin)) {
	    $i=0;
	    foreach($staffadmin as $staffadmin) {
 
		if ($staffadmin !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/cer/leadership.jpg' width='1000' height='700'></div>

  <div class='principal'><i>" . strtoupper($staffadmin)  ."</i></div>&nbsp;
  <div class='school_name'><i>".$school."</i></div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2021/".$certificateNo1[$i++]." </div>
    </div><div class='page'><strong></strong></div>";
		}
	  }
	}	


	if (!empty($students)) {
	    $i=0;
	    foreach($students as $students) {

		if ($students !="") {
		   echo "<div class='container'>
		    <div class='image'><img src='assets/img/images/cer/student.jpg' width='1000' height='700'></div>

  <div class='first_name'><i>" . strtoupper($students['name'])  . ' &nbsp;&nbsp;&nbsp;  CLASS '. integerToRoman($students['grade'])  ."</i></div>&nbsp;
  <div class='school_name1'><i>".$school."</i></div>
  
  <div class='certificateno'>Certificate No: "."GSPAudit/2021/".$certificateNo2[$i++]." </div>
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
        .certificateno1{ position:absolute; top:690px; left: 10px;}
        .first_name{ position:relative; text-align: center; top:333px;}
        .principal{ position:relative; text-align: center; top:270px;}
	    .school_name{ position:relative; text-align: center; top:410px;}
		.first_name1{ position:relative; text-align: center; top:265px;}
	    .school_name1{ position:relative; text-align: center; top:333px;}
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
