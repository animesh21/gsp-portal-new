<!DOCTYPE html>
<html>
<?php include('config.php'); ?>
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
 
 <link href="css/custom.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">


    <!--<link href='https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css' rel='stylesheet'/> -->
    <link href='https://nightly.datatables.net/css/jquery.dataTables.min.css' rel='stylesheet'/>
    <!-- <link href='https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css' rel='stylesheet'/> -->
    <link href='https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css' rel='stylesheet'/>
     
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
     
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
     
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/dataTables.buttons.js"></script>
     
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.html5.min.js"></script>
     
    <title>Green Schools Programme Dashboard</title>
</head>
<body>
     
    <style>
    #example th{text-align: center}
    
</style>
<main class="bdr"  style='border: none;'>
	<div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>All Questions Reports</h2>
        </div>
          
            <div style="overflow: scroll">         
   <table id="example" class="display" cellspacing="0" width="40%">
     <thead>
  <tr>
    <th>S.No</th>
    <th>Sch.Id</th>
    <th>School Name</th>
    <th>Address1</th>
    <th>Address2</th>
    <th>State</th>
    <th>City</th>
    <th>Pincode</th>
    <th>ISD Code</th>
    <th>STD Code</th>
    <th>Landline No.</th>
    <th>School Email</th>
    <th>Principal Name</th>
    <th>Principal Mobile</th>
    <th>Coordinator Name</th>
    <th>Coordinator Email</th>
    <th>Coordinator Mobile</th>
	
	 <th>Category</th>
     <th>Shifts</th>
	
    <th>Password</th>
    <th>Reg. Date</th>
    <th>Comp. Date</th>
   <!-- <th>Completeness</th> -->
   
	
	<!-- GENERAL QUESTIONS -->
	
	<th>School Level</th>
	<th>Gender</th>
	<th>Board</th>
	<th>Total Population</th>
	<th>Male</th>
	<th>Female</th>
	<th>Total working days in year</th>
	<th>GSP Audit Month</th>
	<th>Location</th>

	<!-- end GENERAL QUESTIONS-->
	
	
	<th>Total Classrooms</th>
    <th>Window Floor Ratio</th>
    <th>Vehicles Ownership</th>
    <th>School Owned Vehicles</th>
	
	<th>Diesel Bus</th>
	<th>Diesel Cars</th>
	<th>Diesel Van</th>
	
	<th>Petrol Bus</th>
	<th>Petrol Cars</th>
	<th>Petrol Van</th>

	<th>LPG Bus</th>
	<th>LPG Cars</th>
	<th>LPG Van</th>
	
	<th>CNG Bus</th>
	<th>CNG Cars</th>
	<th>CNG Van</th>
	
	
	<th>Transport_Use_Students</th>
	<th>Transport_Use_Teaching_Staff</th>
	<th>Transport_Use_Non_Teaching_Staff</th>
	
	<th>Students_Suffer_from_respiratory_ailments</th>
	<th>Air_quality_monitoring_equipment</th>
	
	<!-- start energy question -->
	
	<th>school_have_access_electricity_bill?</th>
	<th>school have its own vehicles</th>
	<th>energy_Quantity_consumed/monthly_average</th>
	
	<th>average_number_of_sunny_days_in_your_area</th>
	
		<th>alternate sources of energy employed</th>
	<th>Name the alternate sources of energy employed</th>
	
	
   <!--
    <th>Vehicles with AC</th>
    <th>Vehicles more than 5 years Old</th>
    <th>Vehicles on CNG</th>
    <th>Details of Buses on CNG</th>
    <th>Details of Car on CNG</th>
    <th>Details of Van on CNG</th>
	 <th>Total Population GQ</th>
	-->
	
   <!--
    <th>Total Population in Air</th>
    <th>Sustainble Motorised Vehicles: Numbers</th>
    <th>Sustainble Motorised Vehicles: Percentgae</th>
    <th>Non Polluting Transport: Numbers</th>
    <th>Non Polluting Transport: Percentage</th>
    <th>Points in <br />
    Air Section</th>
	-->
	
	
    <th>Energy: Per cap/day (MJ)</th>
    <th>Source of Energy</th>
    <th>Alternate Source <br />
    of Energy</th>
    <th>Points in <br />
    Energy Section</th>
	
	<!-- food section start -->
    <th>Food_Served_in_Canteen</th>
	<th>School_Serve_Midday-meals?</th>
	<th>students_carrying_lunch_from_home?</th>
	<th>school serve traditional Indian snacks?</th>
	<th>school serve traditional Indian beverages?</th>
	
	
	
    <th>Packaged Food distribution as Rewards</th>
    <th>Details of Packaged Food</th>
    <th>Distribution of Chocolate/similar products during events</th>
    <th>Names_of_Products</th>
    <th>Events sponsored by Food companies</th>
    <th>Brand Banners</th>
    <th>Banners, brochures, hoardings, stalls put-up during events</th>
    <th>Points in <br />
      Food Section</th>
	  
      <th>Total of Green Cover(m<sup>2</sup>)</th>
      <th>Percentage of Green Cover(%)</th>
      <th>Use of Chemical based pesticides</th>
      <th>Points in Land Section</th>
	  
	  <!-- start water section -->
	  
      <th>Water: Total Consumption(ltrs)/day</th>
      <th>Water: per cap/day(ltrs)</th>
	  
	  <th>Where_does_the_water_you_use_come_from Surface water (streams/ lakes/ ponds, etc)</th>
	  <th>Where_does_the_water_you_use_come_from Ground water (hand pump/ borewell/ well, etc)</th>
	  <th>Where_does_the_water_you_use_come_from Stored rainwater</th>
	  <th>24/7 supply of water</th>
	  
	  <th>many hours of water supply</th>
	  <th>use storage tanks to store water</th>
	  <th>capacity of the tank</th>
	  <th>storage tank refilled Duration(Mins)</th>
	
	  
	  
      <th>Load on Drinking Water Taps</th>
      <th>Load on Ablution Taps</th>
      <th>Load on Urinals</th>
      <th>Load on Water Closet</th>
	  
	  <th>Average annual rainfall received by your area (In mm) Quantity</th>
	  <th>Average annual rainfall of your area (In mm)? Quantity</th>
	  <th>Number of rainy days in your area?</th>
	  
	  
      <th>Rainwater Harvesting System</th>
      <th>Type of Rainwater Harvesting System</th>
      <th>Waste Water Reuse/Recycle</th>
      <th>Treat Waste Water</th>
      <th>Points in Water Section</th>
	  
	  <!-- Start waste section -->
      <th>Solid Waste Segregation</th>
      <th>Segregator at Source</th>
	  <th>Segregator  in classrooms</th>
	
      <th>Waste Collection points with 0 bin</th>
      <th>Waste Collection points with 1 bin</th>
      <th>Waste Collection points with 2 bins</th>
      <th>Waste Collection points with 3 bins</th>
      <th>Waste: Per cap/day(gms)</th>
      <th>Recyle Solid Waste</th>
      <th>Total Waste Generated(gms)</th>
      <th>Total Waste Recycled(gms)</th>
      <th>Percentage of Waste Recycled(%)</th>
      <th>Composting Facility</th>
      <th>Composting Methodology</th>
      <th>Quantity of Compost generated per month</th>
	  <th>Purpose of compost that is generated per month</th>
      <th>Reuse Textbook</th>
	  
	  <th>Internal or external waste recycling procedures are applied to waste(Local kabadiwala)</th>
	  <th>Internal or external waste recycling procedures are applied to waste(Authorised dealer)</th>
	  <th>Internal or external waste recycling procedures are applied to waste(Dumped at a designated community site)</th>
	  
	  <th>Internal or external waste recycling procedures are applied to waste(Internal procedure)</th>
	  
      <th>Waste Disposal</th>
      <th>Burn Waste</th>
      <th>Where do you burn waste</th>
      <th>Kind of waste burnt</th>
	  
	  <th>Does_your_school_have_the_following (Working conditions)</th>
      <th>Does_your_school_have_the_following (Non-working condition)</th>
	 
	  <th>E-waste Disposal</th>
      <th>Who collects E-waste</th>
	  
	  <th>school have a policy on waste</th>
	  <th>Are there awareness drives with regard to Reduce, Recycle and Reuse?</th>
	  <th>What form do these awareness drives take?</th>
	  <th>Is the study of the environment integrated into the curriculum?</th>
	  
      <th>Points in Waste Section</th>
      <th>Total Points</th>
      <th>Bonus Points</th>
	  
	   
  </tr>
  
  
  
  
  </thead> 
     <tbody>
	 
<?php
$sql_data = mysql_query("SELECT survey.*, tokentbl.attribute_1,tokentbl.attribute_5, tokentbl.attribute_7,tokentbl.attribute_12, tokentbl.attribute_14, tokentbl.token,tokentbl.datetime,tokentbl.completed FROM lime_survey_266617 AS survey,lime_tokens_266617 AS tokentbl WHERE survey.token=tokentbl.token AND survey.`submitdate` IS NOT NULL ORDER BY `startdate` DESC");   

$i = 0;
while($sql_data_array=mysql_fetch_assoc($sql_data))
{
    /*
    $sq = "SELECT `completeness` FROM `lime_answers_for_progress` where `token`='".$sql_data_array['token']."'";
    $sql_1 = mysql_query($sq);
    $sql_comp = mysql_fetch_assoc($sql_1);
	*/
    

    //$sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$sql_data_array['token']."'"));
	
$sql_score_total = mysql_query("select SUM(score) as score2,SUM(bonus) as bonus from calculation where token='".$sql_data_array['token']."'");
$sql_score = mysql_result($sql_score_total,0,0);
$sql_bonus = mysql_result($sql_score_total,0,1);	

$token=$sql_data_array['token'];	
$sql_score_air=GetScoreBySection($token,4); //Air Section Score

$sql_score_energy=GetScoreBySection($token,8); //Energy Section Score

$sql_score_food=GetScoreBySection($token,36); //Food Section Score  

$sql_score_land=GetScoreBySection($token,7); //Land Section Score  
$sql_score_water=GetScoreBySection($token,37); //water Section Score  
$sql_score_waste=GetScoreBySection($token,38); //Waste Section Score  

    //Air
   // $sql_score_air = mysql_fetch_array(mysql_query("select SUM(score) as scoreAir from `calculation` where `token` = //'".$sql_data_array['token']."' AND `section_id`='4'"));
    
    //Energy
    //$sql_score_energy = mysql_fetch_array(mysql_query("select SUM(score) as scoreEnergy from `calculation` where `token` = //'".$sql_data_array['token']."' AND `section_id`='8'"));
    
    //Food
    //$sql_score_food = mysql_fetch_array(mysql_query("select SUM(score) as scoreFood from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='36'"));
    
    //Land
   // $sql_score_land = mysql_fetch_array(mysql_query("select SUM(score) as scoreLand from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='7'"));
    
    //Water
   // $sql_score_water = mysql_fetch_array(mysql_query("select SUM(score) as scoreWater from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='37'"));
    
    //Waste
   // $sql_score_waste = mysql_fetch_array(mysql_query("select SUM(score) as scoreWaste from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='38'"));
    
  
   //$sql_details = mysql_query("select * from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");
   // while($sql_details_array=mysql_fetch_array($sql_details))
    //{
        $i++;
   
    ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $sql_data_array['id']; ?></td>
    <td><?php echo $sql_data_array['attribute_1']; ?></td>
    <td><?php echo $sql_data_array['266617X34X1591']; ?></td>
    <td><?php echo $sql_data_array['266617X34X1592']; ?></td>
    <td><?php echo $sql_data_array['attribute_5']; ?></td>
    <td><?php echo $sql_data_array['attribute_7']; ?></td>
    <td>
	<?php 
	if($sql_data_array['266617X34X1596']!="" && $sql_data_array['266617X34X1596']!=0)
	echo number_format($sql_data_array['266617X34X1596'],$decimals = 0, $dec_point = ".", $thousands_sep = "");
	?>
	</td>
    <td><?php echo (int)number_format($sql_data_array['266617X34X1597SQ001'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
    <td><?php echo number_format($sql_data_array['266617X34X1597SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
    <td><?php echo number_format($sql_data_array['266617X34X1597SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
    <td><?php echo $sql_data_array['attribute_12']; ?></td>
    <td><?php echo $sql_data_array['266617X34X1602']; ?></td>
    <td><?php echo $sql_data_array['attribute_14']; ?></td>
    <td><?php echo $sql_data_array['266617X34X1604']; ?></td>
    <td><?php echo $sql_data_array['266617X34X1605']; ?></td>
    <td><?php echo number_format($sql_data_array['266617X34X1606SQ002'],$decimals = 0, $dec_point = ".", 
	$thousands_sep = ""); ?></td>
	
	    <td>
         <?php 
            $a = array();
         if($sql_data_array['266617X34X1608SQ001'] != "")
            {
                $a[] = "Day Scholar (6 hours)";
            } 
            if($sql_data_array['266617X34X1608SQ002'] != "")
            {
                $a[] = "Day Boarding (8 hours)";
            }
            if($sql_data_array['266617X34X1608SQ003'] != "")
            {
                $a[] = "Residential (24 hours)";
            }
            echo implode($a, ',');
         ?>
     </td>
	     <td><?php if($sql_data_array['266617X34X1609'] == "A1") { echo "Morning"; } elseif($sql_data_array['266617X34X1609'] == "A2"){ echo "Evening"; } elseif($sql_data_array['266617X34X1609'] == "A3") { echo "Both"; } ?>
		 </td>
	
    <td><?php echo $sql_data_array['token']; ?></td>
    <td><?php echo date('d-m-Y', strtotime($sql_data_array['datetime'])); ?></td>
    <td><?php if($sql_data_array['completed'] != "N") { echo date('d-m-Y', strtotime($sql_data_array['completed'])); } else { echo "N/A"; } ?></td>
    
	<!--<td><?php echo $sql_comp['completeness']; ?></td> -->
   
  <!-- start General Questions. -->	
	
	<td>
	 <?php 
            $level = array();
         if($sql_data_array['266617X32X1674SQ001_SQ001'] != "")
            {
                $level[] = "Pre-primary";
            } 
            if($sql_data_array['266617X32X1674SQ001_SQ002'] != "")
            {
                $level[] = "1st";
            }
            if($sql_data_array['266617X32X1674SQ001_SQ014'] != "")
            {
                $level[] = "2nd";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ013'] != "")
            {
                $level[] = "3rd";
            }
			
			if($sql_data_array['266617X32X1674SQ001_SQ012'] != "")
            {
                $level[] = "4th";
            }
			
			if($sql_data_array['266617X32X1674SQ001_SQ011'] != "")
            {
                $level[] = "5th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ010'] != "")
            {
                $level[] = "6th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ009'] != "")
            {
                $level[] = "7th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ008'] != "")
            {
                $level[] = "8th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ007'] != "")
            {
                $level[] = "9th";
            }
			
			if($sql_data_array['266617X32X1674SQ001_SQ006'] != "")
            {
                $level[] = "10th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ005'] != "")
            {
                $level[] = "11th";
            }
			if($sql_data_array['266617X32X1674SQ001_SQ004'] != "")
            {
                $level[] = "12th";
            }
			
			
            echo implode($level, ',');
         ?>
	</td>
	  <td><?php if($sql_data_array['266617X32X27'] == "A1") { echo "Only Boys"; }elseif($sql_data_array['266617X32X27'] == "A3"){ echo "Only Girls"; }elseif($sql_data_array['266617X32X27'] == "A2"){ echo "Mixed/Co-education"; } ?></td>
	<td>
	<?php 
         $b = array();
         if($sql_data_array['266617X32X28SQ001'] != "")
            {
                $b[] = "State Board of Education";
            } 
            if($sql_data_array['266617X32X28SQ002'] != "")
            {
                $b[] = "Central Board of Secondary Education";
            }
            if($sql_data_array['266617X32X28SQ003'] != "")
            {
                $b[] = "Indian Certificate of Secondary Education";
            }
            if($sql_data_array['266617X32X28SQ004'] != "")
            {
                $b[] = "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
            if($sql_data_array['266617X32X28othercbox'] != "")
            {
                $b[] = "Other";
            }
            echo implode($b, ',');
         ?>
	</td>
	 <td><?php echo $sql_data_array['266617X32X33SQ004_SQ003']; ?></td>
     <td><?php echo $sql_data_array['266617X32X33SQ004_SQ001']; ?></td>
     <td><?php echo $sql_data_array['266617X32X33SQ004_SQ002']; ?></td>
	 
	<td><?php echo abs($sql_data_array['266617X32X40']); ?></td>
	<td>
	<?php 
         $gspaudit = array();
         if($sql_data_array['266617X32X43SQ001_SQ001'] != "")
            {
                $gspaudit[] = "Jan";
            } 
            if($sql_data_array['266617X32X43SQ001_SQ003'] != "")
            {
                $gspaudit[] = "Feb";
            }
            if($sql_data_array['266617X32X43SQ001_SQ002'] != "")
            {
                $gspaudit[] = "Mar";
            }
            if($sql_data_array['266617X32X43SQ001_SQ004'] != "")
            {
                $gspaudit[] = "Apr";
            }
            if($sql_data_array['266617X32X43SQ001_SQ005'] != "")
            {
                $gspaudit[] = "May";
            }
			if($sql_data_array['266617X32X43SQ001_SQ006'] != "")
            {
                $gspaudit[] = "Jun";
            }
            if($sql_data_array['266617X32X43SQ001_SQ007'] != "")
            {
                $gspaudit[] = "Jul";
            }
            if($sql_data_array['266617X32X43SQ001_SQ008'] != "")
            {
                $gspaudit[] = "Aug";
            }
			if($sql_data_array['266617X32X43SQ001_SQ009'] != "")
            {
                $gspaudit[] = "Sep";
            }
            if($sql_data_array['266617X32X43SQ001_SQ010'] != "")
            {
                $gspaudit[] = "Oct";
            }
            if($sql_data_array['266617X32X43SQ001_SQ011'] != "")
            {
                $gspaudit[] = "Nov";
            }
			if($sql_data_array['266617X32X43SQ001_SQ012'] != "")
            {
                $gspaudit[] = "Dec";
            }
            
            echo implode($gspaudit, ',');
         ?>
	
	
	</td>
	 <td><?php if($sql_data_array['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($sql_data_array['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
 
 <!--end General Questions -->
	
	 <!-- Start Air Section Questions -->
	
	 <td><?php echo number_format($sql_data_array['266617X4X1127'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td> <!-- total classrooms-->
	
    <td><!-- window floor ratio-->
         <?php
         
         $sql_floor_details = mysql_query("select 266617X4X2197SQ001_SQ001, 266617X4X2197SQ002_SQ001, 266617X4X2197SQ003_SQ001, 266617X4X2197SQ004_SQ001, 266617X4X2197SQ005_SQ001, 266617X4X2197SQ006_SQ001, 266617X4X2197SQ007_SQ001, 266617X4X2197SQ008_SQ001, 266617X4X2197SQ009_SQ001, 266617X4X2197SQ010_SQ001, 266617X4X2197SQ011_SQ004 from `lime_survey_266617` where `token`='".$sql_data_array['token']."'");
         $resultSet = array();
         while($result = mysql_fetch_assoc($sql_floor_details))
         {
             $resultSet = $result;
             $total_percentage_ventilated = number_format($result['266617X4X2197SQ011_SQ004'],2);
         }
         $non_empty_records = count(array_filter($resultSet))-1;
		
         $avg = $total_percentage_ventilated/$non_empty_records;
         echo $view_avg = number_format($avg,2)
         ?>
    </td>
	
	

    <td><!-- Vehicles Owned-->
         <?php
         if($sql_data_array['266617X4X164'] == "A1")
         {
             echo "School does not use or own vehicles";
             echo "<br>";
         }
         elseif($sql_data_array['266617X4X164'] == "A2")
         {
             echo "Operator-owned vehicles";
             echo "<br>";
         }
         elseif($sql_data_array['266617X4X164'] == "A3")
         {
             echo "School-owned vehicles";
             echo "<br>";
         }
         elseif($sql_data_array['266617X4X164'] == "A4")
         {
             echo "A combination of school-owned and operator-owned vehicles";
             echo "<br>";
         }
         ?>
    </td>
	
    <td><?php if($sql_data_array['266617X4X165SQ001_SQ003'] == 0 || $sql_data_array['266617X4X165SQ001_SQ003'] == 00){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ001_SQ003']; } ?></td> <!-- School Owned Vehicles-->
	
	<td><?php if($sql_data_array['266617X4X2217SQ001_SQ001']==0 || $sql_data_array['266617X4X2217SQ001_SQ001']=='00'){echo 0;}else{$sql_data_array['266617X4X2217SQ001_SQ001'];} ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ002_SQ001']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ003_SQ001']; ?></td>
	
	<td><?php echo $sql_data_array['266617X4X2217SQ001_SQ002']; ?></td> <!-- petrol bus-->
	<td><?php echo $sql_data_array['266617X4X2217SQ002_SQ002']; ?></td> <!-- petrol Cars-->
	<td><?php echo $sql_data_array['266617X4X2217SQ003_SQ002']; ?></td>
	
     <!-- LPG -->
	<td><?php echo $sql_data_array['266617X4X2217SQ001_SQ003']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ002_SQ003']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ003_SQ003']; ?></td>
	
	<!-- CNG -->
		<td><?php echo $sql_data_array['266617X4X2217SQ001_SQ004']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ002_SQ004']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ003_SQ004']; ?></td>
	
	<!--Que..  Please specify how many members of the school community use each type of transport -->
	
	<?php 
      if($sql_data_array['266617X4X176SQ001_SQ001']!="" && $sql_data_array['266617X4X176SQ001_SQ001']!=0)
	  {
	$Schoolbus_student="School bus:".$sql_data_array['266617X4X176SQ001_SQ001'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ002_SQ001']!="" && $sql_data_array['266617X4X176SQ002_SQ001']!=0)
	  {
	$Publicbus_student=",Public bus:".$sql_data_array['266617X4X176SQ002_SQ001'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ003_SQ001']!="" && $sql_data_array['266617X4X176SQ003_SQ001']!=0)
	  {
$schooltrnotherthenbus_student=",School transport (other than bus):".$sql_data_array['266617X4X176SQ003_SQ001'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ0012_SQ001']!="" && $sql_data_array['266617X4X176SQ0012_SQ001']!=0)
	  {
$pbtotbusmcarpool_student=",Public transport (other than bus, Metro, car pool:".$sql_data_array['266617X4X176SQ0012_SQ001'];
	  }
	    if($sql_data_array['266617X4X176SQ005_SQ001']!="" && $sql_data_array['266617X4X176SQ005_SQ001']!=0)
	  {
$Taxifourwheeler_student=",Taxi four-wheeler:".$sql_data_array['266617X4X176SQ005_SQ001'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ006_SQ001']!="" && $sql_data_array['266617X4X176SQ006_SQ001']!=0)
	  {
$Taxithreewheeler_student=",Taxi four-wheeler:".$sql_data_array['266617X4X176SQ006_SQ001'];
	  }
	  
	  
	    if($sql_data_array['266617X4X176SQ007_SQ001']!="" && $sql_data_array['266617X4X176SQ007_SQ001']!=0)
	  {
$Personalfourwheeler_student=",Personal four-wheeler:".$sql_data_array['266617X4X176SQ007_SQ001'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ008_SQ001']!="" && $sql_data_array['266617X4X176SQ008_SQ001']!=0)
	  {
$Personal_two_wheeler_student=",Personal two-wheeler:".$sql_data_array['266617X4X176SQ008_SQ001'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ009_SQ001']!="" && $sql_data_array['266617X4X176SQ009_SQ001']!=0)
	  {
$Bicycle_student=",Bicycle:".$sql_data_array['266617X4X176SQ009_SQ001'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ010_SQ001']!="" && $sql_data_array['266617X4X176SQ010_SQ001']!=0)
	  {
$Onfoot_student=",On foot:".$sql_data_array['266617X4X176SQ010_SQ001'];
	  }
	  if($sql_data_array['266617X4X176SQ011_SQ001']!="" && $sql_data_array['266617X4X176SQ011_SQ001']!=0)
	  {
$Others_student=",Others (non-motorised):".$sql_data_array['266617X4X176SQ011_SQ001'];
	  }
	  
	?>
	
	<td><?php echo $Schoolbus_student."".$Publicbus_student."".$schooltrnotherthenbus_student."".$pbtotbusmcarpool_student."".$Taxifourwheeler_student."".$Taxithreewheeler_student."".$Personalfourwheeler_student."".$Personal_two_wheeler_student."".$Bicycle_student."".$Onfoot_student."".$Others_student; ?> 
	</td>
	
	
	<?php 
      if($sql_data_array['266617X4X176SQ001_SQ002']!="" && $sql_data_array['266617X4X176SQ001_SQ002']!=0)
	  {
$Schoolbus_teach="School bus:".$sql_data_array['266617X4X176SQ001_SQ002'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ002_SQ002']!="" && $sql_data_array['266617X4X176SQ002_SQ002']!=0)
	  {
$Publicbus_teach=",Public bus:".$sql_data_array['266617X4X176SQ002_SQ002'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ003_SQ002']!="" && $sql_data_array['266617X4X176SQ003_SQ002']!=0)
	  {
$schooltrnotherthenbus_teach=",School transport (other than bus):".$sql_data_array['266617X4X176SQ003_SQ002'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ0012_SQ002']!="" && $sql_data_array['266617X4X176SQ0012_SQ002']!=0)
	  {
$pbtotbusmcarpool_teach=",Public transport (other than bus, Metro, car pool:".$sql_data_array['266617X4X176SQ0012_SQ002'];
	  }
	    if($sql_data_array['266617X4X176SQ005_SQ002']!="" && $sql_data_array['266617X4X176SQ005_SQ002']!=0)
	  {
$Taxifourwheeler_teach=",Taxi four-wheeler:".$sql_data_array['266617X4X176SQ005_SQ002'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ006_SQ002']!="" && $sql_data_array['266617X4X176SQ006_SQ002']!=0)
	  {
$Taxithreewheeler_teach=",Taxi Three-wheeler:".$sql_data_array['266617X4X176SQ006_SQ002'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ007_SQ002']!="" && $sql_data_array['266617X4X176SQ007_SQ002']!=0)
	  {
$Personalfourwheeler_teach=",Personal four-wheeler:".$sql_data_array['266617X4X176SQ007_SQ002'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ008_SQ002']!="" && $sql_data_array['266617X4X176SQ008_SQ002']!=0)
	  {
$Personal_two_wheeler_teach=",Personal two-wheeler:".$sql_data_array['266617X4X176SQ008_SQ002'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ009_SQ002']!="" && $sql_data_array['266617X4X176SQ009_SQ002']!=0)
	  {
$Bicycle_teach=",Bicycle:".$sql_data_array['266617X4X176SQ009_SQ002'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ010_SQ002']!="" && $sql_data_array['266617X4X176SQ010_SQ002']!=0)
	  {
$Onfoot_teach=",On foot:".$sql_data_array['266617X4X176SQ010_SQ002'];
	  }
	  if($sql_data_array['266617X4X176SQ011_SQ002']!="" && $sql_data_array['266617X4X176SQ011_SQ002']!=0)
	  {
$Others_teach=",Others (non-motorised):".$sql_data_array['266617X4X176SQ011_SQ002'];
	  }
	  
	?>
	
	<td><?php echo $Schoolbus_teach."".$Publicbus_teach."".$schooltrnotherthenbus_teach."".$pbtotbusmcarpool_teach."".$Taxithreewheeler_teach."".$Taxifourwheeler_teach."".$Personalfourwheeler_teach."".$Personal_two_wheeler_teach."".$Bicycle_teach."".$Onfoot_teach."".$Others_teach; ?> 
	</td>
	
	
	<?php 
      if($sql_data_array['266617X4X176SQ001_SQ003']!="" && $sql_data_array['266617X4X176SQ001_SQ003']!=0)
	  {
$Schoolbus_non_teach="School bus:".$sql_data_array['266617X4X176SQ001_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ002_SQ003']!="" && $sql_data_array['266617X4X176SQ002_SQ003']!=0)
	  {
$Publicbus_non_teach=",Public bus:".$sql_data_array['266617X4X176SQ002_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ003_SQ003']!="" && $sql_data_array['266617X4X176SQ003_SQ003']!=0)
	  {
$schooltrnotherthenbus_non_teach=",School transport (other than bus):".$sql_data_array['266617X4X176SQ003_SQ003'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ0012_SQ003']!="" && $sql_data_array['266617X4X176SQ0012_SQ003']!=0)
	  {
$pbtotbusmcarpool_non_teach=",Public transport (other than bus, Metro, car pool:".$sql_data_array['266617X4X176SQ0012_SQ003'];
	  }
	    if($sql_data_array['266617X4X176SQ005_SQ003']!="" && $sql_data_array['266617X4X176SQ005_SQ003']!=0)
	  {
$Taxifourwheeler_non_teach=",Taxi four-wheeler:".$sql_data_array['266617X4X176SQ005_SQ003'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ006_SQ003']!="" && $sql_data_array['266617X4X176SQ006_SQ003']!=0)
	  {
$Taxithreewheeler_non_teach=",Taxi Three-wheeler:".$sql_data_array['266617X4X176SQ006_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ007_SQ003']!="" && $sql_data_array['266617X4X176SQ007_SQ003']!=0)
	  {
$Personalfourwheeler_non_teach=",Personal four-wheeler:".$sql_data_array['266617X4X176SQ007_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ008_SQ003']!="" && $sql_data_array['266617X4X176SQ008_SQ003']!=0)
	  {
$Personal_two_wheeler_non_teach=",Personal two-wheeler:".$sql_data_array['266617X4X176SQ008_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ009_SQ003']!="" && $sql_data_array['266617X4X176SQ009_SQ003']!=0)
	  {
$Bicycle_non_teach=",Bicycle:".$sql_data_array['266617X4X176SQ009_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ010_SQ003']!="" && $sql_data_array['266617X4X176SQ010_SQ003']!=0)
	  {
$Onfoot_non_teach=",On foot:".$sql_data_array['266617X4X176SQ010_SQ003'];
	  }
	  if($sql_data_array['266617X4X176SQ011_SQ003']!="" && $sql_data_array['266617X4X176SQ011_SQ003']!=0)
	  {
$Others_non_teach=",Others (non-motorised):".$sql_data_array['266617X4X176SQ011_SQ003'];
	  }
	  
	?>
	
	
<td><?php echo $Schoolbus_non_teach."".$Publicbus_non_teach."".$schooltrnotherthenbus_non_teach."".$pbtotbusmcarpool_non_teach."".$Taxithreewheeler_non_teach."".$Taxifourwheeler_non_teach."".$Personalfourwheeler_non_teach."".$Personal_two_wheeler_non_teach."".$Bicycle_non_teach."".$Onfoot_non_teach."".$Others_non_teach; ?> 
	</td>
	
	<td><?php echo abs($sql_data_array['266617X4X184']);  ?></td>
	<td><?php if($sql_data_array['266617X4X187']=="Y"){echo "Yes";}else{ echo "No";}  ?></td>
	<td><?php if($sql_data_array['266617X8X237']=="Y"){echo "Yes";}else{echo "No";} ?></td>
	<td><?php if($sql_data_array['266617X8X2274']=="Y"){echo "Yes";}else{ echo "No";} ?></td>
	

	
	<?php 
      if($sql_data_array['266617X4X176SQ001_SQ003']!="" && $sql_data_array['266617X4X176SQ001_SQ003']!=0)
	  {
$Electricityfromtheboard=" Electricity from the board:".$sql_data_array['266617X4X176SQ001_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ002_SQ003']!="" && $sql_data_array['266617X4X176SQ002_SQ003']!=0)
	  {
$Petrol=" Petrol:".$sql_data_array['266617X4X176SQ002_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ003_SQ003']!="" && $sql_data_array['266617X4X176SQ003_SQ003']!=0)
	  {
$Diesel=" Diesel:".$sql_data_array['266617X4X176SQ003_SQ003'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ0012_SQ003']!="" && $sql_data_array['266617X4X176SQ0012_SQ003']!=0)
	  {
$CNG=" CNG:".$sql_data_array['266617X4X176SQ0012_SQ003'];
	  }
	    if($sql_data_array['266617X4X176SQ005_SQ003']!="" && $sql_data_array['266617X4X176SQ005_SQ003']!=0)
	  {
$Kerosene=" Kerosene:".$sql_data_array['266617X4X176SQ005_SQ003'];
	  }
	  
	     if($sql_data_array['266617X4X176SQ006_SQ003']!="" && $sql_data_array['266617X4X176SQ006_SQ003']!=0)
	  {
$Coal=" Coal:".$sql_data_array['266617X4X176SQ006_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ007_SQ003']!="" && $sql_data_array['266617X4X176SQ007_SQ003']!=0)
	  {
$Wood=" Wood:".$sql_data_array['266617X4X176SQ007_SQ003'];
	  }
	  
	   if($sql_data_array['266617X4X176SQ008_SQ003']!="" && $sql_data_array['266617X4X176SQ008_SQ003']!=0)
	  {
$Animalwaste=" Animal waste:".$sql_data_array['266617X4X176SQ008_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ009_SQ003']!="" && $sql_data_array['266617X4X176SQ009_SQ003']!=0)
	  {
$Solar=" Solar:".$sql_data_array['266617X4X176SQ009_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ010_SQ003']!="" && $sql_data_array['266617X4X176SQ010_SQ003']!=0)
	  {
$Wind=" Wind:".$sql_data_array['266617X4X176SQ010_SQ003'];
	  }
	  if($sql_data_array['266617X4X176SQ011_SQ003']!="" && $sql_data_array['266617X4X176SQ011_SQ003']!=0)
	  {
$LPG=" LPG:".$sql_data_array['266617X4X176SQ011_SQ003'];
	  }
	  
	    if($sql_data_array['266617X4X176SQ011_SQ003']!="" && $sql_data_array['266617X4X176SQ011_SQ003']!=0)
	  {
$Othersspecify=" Others (specify):".$sql_data_array['266617X4X176SQ011_SQ003'];
	  }
	  
	?>
	
	<td><?php echo $Electricityfromtheboard."".$Petrol."".$Diesel."".$CNG."".$Kerosene."".$Coal."".$Wood."".$Animalwaste."".$Solar."".$Wind."".$LPG."".$Othersspecify; ?></td>
	
	<td><?php echo abs($sql_data_array['266617X8X260']); ?></td>
	<td><?php  if($sql_data_array['266617X8X261']=="Y"){echo "Yes";}else{echo "No";} ?></td>
	
	
	<td>
	<?php 
            $alternate_source = array();
         if($sql_data_array['266617X8X262SQ001'] != "")
            {
                $alternate_source[] = "Solar";
            } 
            if($sql_data_array['266617X8X262SQ002'] != "")
            {
                $alternate_source[] = "Wind";
            }
            if($sql_data_array['266617X8X262SQ003'] != "")
            {
                $alternate_source[] = "Hydro";
            }
			 if($sql_data_array['266617X8X262SQ004'] != "")
            {
                $alternate_source[] = "Combination of solar and wind";
            }
			
            echo implode($alternate_source, ',');
         ?>
	
	</td>
	
   
	<!--
    <td>Buses: <?php if($sql_data_array['266617X4X165SQ004_SQ001'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ001']; } ?><br/>&nbsp;&nbsp;Car:<?php if($sql_data_array['266617X4X165SQ004_SQ002'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ002']; } ?><br/>&nbsp;&nbsp;Van:<?php if($sql_data_array['266617X4X165SQ004_SQ008'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ008']; } ?></td>
	
    <td>Buses: <?php if($sql_data_array['266617X4X165SQ002_SQ001'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ001']; } ?><br/>&nbsp;&nbsp;Car:<?php if($sql_data_array['266617X4X165SQ002_SQ002'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ002']; } ?><br/>&nbsp;&nbsp;Van: <?php if($sql_data_array['266617X4X165SQ002_SQ008'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ008']; } ?></td>
	
	
    <td><?php if($sql_data_array['266617X4X2217SQ004_SQ004'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X2217SQ004_SQ004']; } ?></td>
	
    <td><?php echo $sql_data_array['266617X4X2217SQ001_SQ004']; ?></td>
    <td><?php echo $sql_data_array['266617X4X2217SQ002_SQ004']; ?></td>
    <td><?php echo $sql_data_array['266617X4X2217SQ003_SQ004']; ?></td>
	
    
	
	<td><?php echo $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; ?></td>
	-->
	<!--
    <td><?php echo $total_population = $sql_data_array['266617X4X176SQ004_SQ004']; ?></td>
    <td><?php echo $total_smv = $sql_data_array['266617X4X176SQ001_SQ004'] + $sql_data_array['266617X4X176SQ002_SQ004'] + $sql_data_array['266617X4X176SQ003_SQ004'] + $sql_data_array['266617X4X176SQ0012_SQ004'] + $sql_data_array['266617X4X176SQ005_SQ004'] + $sql_data_array['266617X4X176SQ006_SQ004']; ?></td>
    <td><?php echo $per_smv = number_format(($total_smv/$total_population)*100,2); echo "%";?></td>
    <td><?php echo $total_npt = $sql_data_array['266617X4X176SQ009_SQ004'] + $sql_data_array['266617X4X176SQ010_SQ004'] + $sql_data_array['266617X4X176SQ011_SQ004'];?></td>
    <td><?php echo $per_npt = number_format(($total_npt/$total_population)*100,2); echo "%";?></td>
    <td><?php echo number_format($sql_score_air, 2); ?></td>
	-->
	
    <td><!-- ENERGY PER DAY-->
       <?php 
         $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
         $a = $sql_data_array['266617X8X2180SQ013_SQ002']/30; 
         echo number_format($a/$total_population_gq,2);
         ?> 
    </td>
    <td><!-- ENERGY SOURCES-->
     <?php
         $a = array();
         if($sql_data_array['266617X8X2180SQ001_SQ001'] != "" && $sql_data_array['266617X8X2180SQ001_SQ001'] != 0)
            {
                $a[] = "Electricity from the board";
            } 
            if($sql_data_array['266617X8X2180SQ002_SQ001'] != "" && $sql_data_array['266617X8X2180SQ002_SQ001'] != 0)
            {
                $a[] = "Petrol";
            }
            if($sql_data_array['266617X8X2180SQ003_SQ001'] != "" && $sql_data_array['266617X8X2180SQ003_SQ001'] != 0)
            {
                $a[] = "Diesel";
            }if($sql_data_array['266617X8X2180SQ004_SQ001'] != "" && $sql_data_array['266617X8X2180SQ004_SQ001'] != 0)
            {
                $a[] = "CNG";
            }if($sql_data_array['266617X8X2180SQ005_SQ001'] != "" && $sql_data_array['266617X8X2180SQ005_SQ001'] != 0)
            {
                $a[] = "Kerosene";
            }if($sql_data_array['266617X8X2180SQ006_SQ001'] != "" && $sql_data_array['266617X8X2180SQ006_SQ001'] != 0)
            {
                $a[] = "Coal";
            }if($sql_data_array['266617X8X2180SQ007_SQ001'] != "" && $sql_data_array['266617X8X2180SQ007_SQ001'] != 0)
            {
                $a[] = "Wood";
            }if($sql_data_array['266617X8X2180SQ008_SQ001'] != "" && $sql_data_array['266617X8X2180SQ008_SQ001'] != 0)
            {
                $a[] = "Animal waste";
            }if($sql_data_array['266617X8X2180SQ009_SQ001'] != "" && $sql_data_array['266617X8X2180SQ009_SQ001'] != 0)
            {
                $a[] = "Solar";
            }if($sql_data_array['266617X8X2180SQ010_SQ001'] != "" && $sql_data_array['266617X8X2180SQ010_SQ001'] != 0)
            {
                $a[] = "Wind";
            }if($sql_data_array['266617X8X2180SQ011_SQ001'] != "" && $sql_data_array['266617X8X2180SQ011_SQ001'] != 0)
            {
                $a[] = "LPG";
            }if($sql_data_array['266617X8X2180SQ012_SQ001'] != "" && $sql_data_array['266617X8X2180SQ012_SQ001'] != 0)
            {
                $a[] = "Others (specify)";
            }
            echo implode($a, ', ');
         ?>   
    </td>
	
    <td><!-- ENERGY ALTERNATE SOURCE-->
     <?php 
         if($sql_data_array['266617X8X261'] == "Y")
         {
         echo "Yes: "; 
         $b = array();
         if($sql_data_array['266617X8X262SQ001'] != "")
            {
                $b[] = "Solar ";
            } 
            if($sql_data_array['266617X8X262SQ002'] != "")
            {
                $b[] = "Wind ";
            }
            if($sql_data_array['266617X8X262SQ003'] != "")
            {
                $b[] = "Hydro ";
            }
            if($sql_data_array['266617X8X262SQ004'] != "")
            {
                $b[] = "Combination of solar and wind ";
            }
            echo implode($b, ',');
         }
         else
         {
         echo "No";    
         }
         ?>   
    </td>
    <td>ssss<?php echo number_format($sql_score_energy, 2); ?></td>
    <td>
      <?php 
         if($sql_data_array['266617X36X1858'] == "Y")
         {
         $c = array();
         if($sql_data_array['266617X36X1871SQ001_SQ002'] != "" && $sql_data_array['266617X36X1871SQ001_SQ002'] != 0)
            {
                $c[] = "Savoury snacks and similar packaged food ";
            } 
            if($sql_data_array['266617X36X1871SQ002_SQ002'] != "" && $sql_data_array['266617X36X1871SQ002_SQ002'] != 0)
            {
                $c[] = "Instant Noodles";
            }
            if($sql_data_array['266617X36X1871SQ003_SQ002'] != "" && $sql_data_array['266617X36X1871SQ003_SQ002'] != 0)
            {
                $c[] = "Potato fries and Burgers";
            }if($sql_data_array['266617X36X1871SQ004_SQ002'] != "" && $sql_data_array['266617X36X1871SQ004_SQ002'] != 0)
            {
                $c[] = "Confectionery items";
            }if($sql_data_array['266617X36X1871SQ005_SQ002'] != "" && $sql_data_array['266617X36X1871SQ005_SQ002'] != 0)
            {
                $c[] = "Ice-cream";
            }if($sql_data_array['266617X36X1871SQ006_SQ002'] != "" && $sql_data_array['266617X36X1871SQ006_SQ002'] != 0)
            {
                $c[] = "Carbonated beverages";
            }if($sql_data_array['266617X36X1871SQ007_SQ002'] != "" && $sql_data_array['266617X36X1871SQ007_SQ002'] != 0)
            {
                $c[] = "Sugar sweetened non-carbonated beverages";
            }if($sql_data_array['266617X36X1871SQ008_SQ002'] != "" && $sql_data_array['266617X36X1871SQ008_SQ002'] != 0)
            {
                $c[] = "Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk";
            }if($sql_data_array['266617X36X1871SQ009_SQ002'] != "" && $sql_data_array['266617X36X1871SQ009_SQ002'] != 0)
            {
                $c[] = "Packaged/Bottled Energy Drinks";
            }
            echo implode($c, ', ');
         }
         else
         {
         echo "No Canteen";    
         }
         ?>  
    </td>
	
	<td><?php if($sql_data_array['266617X36X1859']=="Yes"){echo "Yes";}else{echo "No";} ?></td>
	<td><?php if($sql_data_array['266617X36X1863']=="Y"){echo "Yes";}else{echo "No";} ?></td>
	<td>
	<?php if($sql_data_array['266617X36X2238']=="Y")
	{
		echo "Yes";
	}else{
		echo "No";
	}

		?>
	
	</td>
	
	<td>
	<?php if($sql_data_array['266617X36X2246']=="Y")
	{
		echo "Yes";
	}else{
		echo "No";
	}

		?>
	</td>
	
    <td><!--Food Promotions (7)-->
         <?php 
         if($sql_data_array['266617X36X1864'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         
         ?>
    </td>
    <td><?php echo $sql_data_array['266617X36X1865']; ?></td><!--Packaged food details-->
    <td>
        <?php 
         if($sql_data_array['266617X36X1866'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
    </td>
    <td><?php echo $sql_data_array['266617X36X1867']; ?></td><!--details-->
    
    <td><!--Distribution of Chocolate/similar products during events-->
        <?php 
         if($sql_data_array['266617X36X1868'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
    </td>
    <td><?php echo $sql_data_array['266617X36X1869']; ?></td><!--Details-->
    <td><!--Events sponsored by Food companies-->
         <?php 
         if($sql_data_array['266617X36X1870'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
    </td>
    <td><?php echo number_format($sql_score_food, 2); ?></td><!--Food Points-->
    <td><!--LAND green area-->
         <?php 
         $green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ003_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
         //echo number_format($green_area,2);
		  echo $green_area;
         ?>
    </td>
	
	
    <td><!--LAND percentage of green area-->
         <?php 
         $green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ003_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
         $total_area = $sql_data_array['266617X7X1810SQ009_SQ002'];
         echo $perc_green_area = number_format(($green_area*100)/$total_area,2);
         //echo " sss %";
         ?> 
        
    </td>
	
      <td><!--LAND Pestiside Use-->
         <?php 
         if($sql_data_array['266617X7X196'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
	  
	  
	  
      <td><?php echo number_format($sql_score_land, 2); ?></td>
      
	  <!-- Start Water Section Questions -->
	  
      <td><?php echo number_format($sql_data_array['266617X37X1883'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?>
	  </td>
	  <!--Water Total Consumption-->
      <td>
	  <!--Water Per capita/day-->
         <?php 
         $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
         $total_water_consumption = $sql_data_array['266617X37X1883'];
         echo $per = number_format($total_water_consumption/$total_population_gq,2);
         ?>
	  </td>
	  
	  
<?php 
      if($sql_data_array['266617X37X1884SQ001_SQ001']!="" && $sql_data_array['266617X37X1884SQ001_SQ001']!=0)
	  {
$MunicipalitySurfacewater="Municipality:".$sql_data_array['266617X37X1884SQ001_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ002_SQ001']!="" && $sql_data_array['266617X37X1884SQ002_SQ001']!=0)
	  {
$PanchayatSurfacewater=" Panchayat:".$sql_data_array['266617X37X1884SQ002_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ003_SQ001']!="" && $sql_data_array['266617X37X1884SQ003_SQ001']!=0)
	  {
$PrivatesupplierSurfacewater=" Private supplier:".$sql_data_array['266617X37X1884SQ003_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ004_SQ001']!="" && $sql_data_array['266617X37X1884SQ004_SQ001']!=0)
	  {
$ownsupply_surfacewater=" School's own supply(borewell,rainwater harvesting etc:".$sql_data_array['266617X37X1884SQ004_SQ001'];
	  }
  	  
?>
	  <td><?php echo $MunicipalitySurfacewater."".$PanchayatSurfacewater."".$PrivatesupplierSurfacewater."".$ownsupply_surfacewater; ?>
	  </td>
	
	
	<?php 
      if($sql_data_array['266617X37X1884SQ001_SQ002']!="" && $sql_data_array['266617X37X1884SQ001_SQ002']!=0)
	  {
$MunicipalityGroundwater="Municipality:".$sql_data_array['266617X37X1884SQ001_SQ002'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ002_SQ002']!="" && $sql_data_array['266617X37X1884SQ002_SQ002']!=0)
	  {
$PanchayatGroundwater=" Panchayat:".$sql_data_array['266617X37X1884SQ002_SQ002'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ003_SQ002']!="" && $sql_data_array['266617X37X1884SQ003_SQ002']!=0)
	  {
$PrivatesupplierGroundwater=" Private supplier:".$sql_data_array['266617X37X1884SQ003_SQ002'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ004_SQ002']!="" && $sql_data_array['266617X37X1884SQ004_SQ002']!=0)
	  {
$ownsupply_Groundwater=" School's own supply(borewell,rainwater harvesting etc:".$sql_data_array['266617X37X1884SQ004_SQ002'];
	  }
  	  
?>

<td><?php echo $MunicipalityGroundwater."".$PanchayatGroundwater."".$PrivatesupplierGroundwater."".$ownsupply_Groundwater; ?>
	  </td>
	
	
	<?php 
      if($sql_data_array['266617X37X1884SQ001_SQ003']!="" && $sql_data_array['266617X37X1884SQ001_SQ003']!=0)
	  {
$MunicipalityStoredrainwater="Municipality:".$sql_data_array['266617X37X1884SQ001_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ002_SQ003']!="" && $sql_data_array['266617X37X1884SQ002_SQ003']!=0)
	  {
$PanchayatStoredrainwater=" Panchayat:".$sql_data_array['266617X37X1884SQ002_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ003_SQ003']!="" && $sql_data_array['266617X37X1884SQ003_SQ003']!=0)
	  {
$PrivatesupplierStoredrainwater=" Private supplier:".$sql_data_array['266617X37X1884SQ003_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1884SQ004_SQ003']!="" && $sql_data_array['266617X37X1884SQ004_SQ003']!=0)
	  {
$ownsupply_Storedrainwater=" School's own supply(borewell,rainwater harvesting etc:".$sql_data_array['266617X37X1884SQ004_SQ003'];
	  }
  	  
?>
	
		
	   <td><?php echo $MunicipalityStoredrainwater." ".$PanchayatStoredrainwater." ".$PrivatesupplierStoredrainwater." ".$ownsupply_Storedrainwater;  ?></td>  
	   
	   
	      <td><?php if($sql_data_array['266617X37X1885']=="Y"){echo "Yes";}else{echo "No";} ?></td>
		  <td><?php echo abs($sql_data_array['266617X37X1886']); ?></td>
	<td><?php if($sql_data_array['266617X37X1887']=="Y"){echo "Yes";}else{ echo "No";} ?></td>
		  <td><?php echo abs($sql_data_array['266617X37X1888']); ?></td>
		  
		  <?php 
      if($sql_data_array['266617X37X1889SQ001_SQ001']!="" && $sql_data_array['266617X37X1889SQ001_SQ001']!=0)
	  {
$morning="Morning:".$sql_data_array['266617X37X1889SQ001_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1889SQ001_SQ002']!="" && $sql_data_array['266617X37X1889SQ001_SQ002']!=0)
	  {
$AfterNoon="After Noon:".$sql_data_array['266617X37X1889SQ001_SQ002'];
	  }
	  
	   if($sql_data_array['266617X37X1889SQ001_SQ003']!="" && $sql_data_array['266617X37X1889SQ001_SQ003']!=0)
	  {
$Evening=" Evening:".$sql_data_array['266617X37X1889SQ001_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1889SQ001_SQ004']!="" && $sql_data_array['266617X37X1889SQ001_SQ004']!=0)
	  {
$asrequired=" As and when required:".$sql_data_array['266617X37X1889SQ001_SQ004'];
	  }
  	  
?>
		  
		  
		  <td><?php echo $morning." ".$AfterNoon." ".$Evening." ".$asrequired; ?></td>
		  
		  
	  
	  
		  <td>
		  <?php $dwt = $sql_data_array['266617X37X1893']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; 
		  echo $dwtload = number_format($total_population/$dwt,2); ?>
		  </td>
	  
      <td><?php $at = $sql_data_array['266617X37X1894']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo $atload = number_format($total_population/$at,2); ?></td>
      <td><?php $urinals = $sql_data_array['266617X37X1895']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($urinalload = $total_population/$urinals,2); ?></td><!--Load of  drinking Water taps-->
      <td><?php $wc = $sql_data_array['266617X37X1896SQ005_SQ004']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($wcload = $total_population/$wc,2); ?></td><!--Load of  abulution taps-->
	  
	  
	  
	   
		  <?php 
      if($sql_data_array['266617X37X1897SQ004_SQ001']!="" && $sql_data_array['266617X37X1897SQ004_SQ001']!=0)
	  {
$Local="Local:".$sql_data_array['266617X37X1897SQ004_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1897SQ004_SQ003']!="" && $sql_data_array['266617X37X1897SQ004_SQ003']!=0)
	  {
$District="District:".$sql_data_array['266617X37X1897SQ004_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1897SQ004_SQ002']!="" && $sql_data_array['266617X37X1897SQ004_SQ002']!=0)
	  {
$State=" State:".$sql_data_array['266617X37X1897SQ004_SQ002'];
	  }
	  
	   
  	  
?>

	  <td><?php echo $Local." ".$District." ".$State; ?></td>
	  
	  	  <?php 
      if($sql_data_array['266617X37X1898SQ004_SQ001']!="" && $sql_data_array['266617X37X1898SQ004_SQ001']!=0)
	  {
$tenyearaverage="10-year average:".$sql_data_array['266617X37X1898SQ004_SQ001'];
	  }
	  
	   if($sql_data_array['266617X37X1898SQ004_SQ003']!="" && $sql_data_array['266617X37X1898SQ004_SQ003']!=0)
	  {
$twentyfiveyears="25-year average:".$sql_data_array['266617X37X1898SQ004_SQ003'];
	  }
	  
	   if($sql_data_array['266617X37X1898SQ004_SQ002']!="" && $sql_data_array['266617X37X1898SQ004_SQ002']!=0)
	  {
$thirtyyears=" 30-year average:".$sql_data_array['266617X37X1898SQ004_SQ002'];
	  }
	  
	   
  	  
?>
	  
	  <td><?php echo $tenyearaverage." ".$twentyfiveyears." ".$thirtyyears; ?></td>
	  <td><?php echo abs($sql_data_array['266617X37X1899']); ?></td>
	  
	  
      <td><!--Water RWH-->
         <?php 
         if($sql_data_array['266617X37X1900'] == "Y")
         {
         echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
      <td><!--Water Type of RWH-->
          <?php
          $d = array();
         if($sql_data_array['266617X37X1901SQ002'] != "")
            {
                $d[] = "Storage Tanks";
            } 
            if($sql_data_array['266617X37X1901SQ002'] != "")
            {
                $d[] = "Recharging of ground water";
            }
            if($sql_data_array['266617X37X1901SQ002'] != "")
            {
                $d[] = "Combination of recharging groundwater and storage";
            }
            echo implode($d, ', ');
          ?>
      </td>
      <td><!--Water Water Reuse-->
         <?php 
         if($sql_data_array['266617X37X1904'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
	  
      <td><!--Water Treate Waste Water-->
          <?php
          if($sql_data_array['266617X37X1905'] == "Y")
             {
                 echo "Yes";
                 echo "<br/>";
                 echo "Details: ";
                 echo $sql_data_array['266617X37X1906'];
             }
             else 
             {
                 echo "No";
             }
          ?></td>
      <td><?php echo number_format($sql_score_water, 2); ?></td>
	  
	  <!-- Waste Section start -->
	  
      <td><!--Waste Solid Segregation-->
         <?php 
         if($sql_data_array['266617X38X2032'] == "Y")
         {
             echo "Yes";
         }    
         else
         {
             echo "No";
         }
         ?>
	  </td>
	  
      <td><!--Waste Solid Segregator at source-->
          <?php
          $e = array();
             if($sql_data_array['266617X38X2033SQ001'] != "")
             {
                $e[] = "Housekeeping";
             } 
             if($sql_data_array['266617X38X2033SQ002'] != "")
             {
                $e[] = "Gardener";
             }
             if($sql_data_array['266617X38X2033SQ003'] != "")
             {
                $e[] = "Ragpicker";
             }
             if($sql_data_array['266617X38X2033othercbox'] != "")
             {
                $e[] = "Other: ";
                $e[] = $sql_data_array['266617X38X2033othercbox'];
             }
             echo implode($e, ', ');
          ?>
      </td>
	  
	  <td>
	   <?php
          $ec = array();
             if($sql_data_array['266617X38X2037SQ001'] != "")
             {
                $ec[] = "Students and Teachers";
             } 
             if($sql_data_array['266617X38X2037SQ002'] != "")
             {
                $ec[] = "Housekeeping (Sweeper)";
             }
             
             if($sql_data_array['266617X38X2037othercbox'] != "")
             {
                $ec[] = "Other: ";
                $ec[] = $sql_data_array['266617X38X2037other'];
             }
             echo implode($ec, ', ');
          ?>
      </td>
	  
      <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ001']; ?></td>
      <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ002']; ?></td>
      <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ003']; ?></td><!--Rooms with no bins-->
      <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ004']; ?></td><!--Rooms with one bins-->
	  
      <td><!--Waste Per Capita/Day generation-->
         <?php 
         $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
         $total_waste_generated = $sql_data_array['266617X38X2125SQ009_SQ001'];
         
         $perday = $total_waste_generated/30;
         echo $percapita = number_format($perday/$total_population_gq,$decimals = 0, $dec_point = ".", $thousands_sep = "");
         ?>
		
      </td><!--Rooms with two bins-->
      <td><!--Waste Recycle-->
         <?php 
         if($sql_data_array['266617X38X2041'] == "Y")
         {
             echo "Yes";
         }    
         else
         {
             echo "No";
         }
         ?>
      </td>
	  <!--Rooms with three bins-->
      <td><?php echo $sql_data_array['266617X38X2125SQ009_SQ001']; ?></td>
      <td><?php 
	  //echo number_format($sql_data_array['266617X38X2042SQ010_SQ001'],2);
	  echo $sql_data_array['266617X38X2042SQ010_SQ001'];
	  ?>
	  </td>
      <td><?php echo $per_wr = number_format(($sql_data_array['266617X38X2042SQ010_SQ001']/$sql_data_array['266617X38X2125SQ009_SQ001'])*100,2);
	  //echo "%";

	  ?>
	  
	  </td>
      <td><!--Waste Composting Facility-->
         <?php 
         if($sql_data_array['266617X38X2064'] == "Y")
         {
             echo "Yes";
         }    
         else
         {
             echo "No";
         }
         ?>
      </td>
      <td><!--Waste Composting Methodology-->
          <?php 
          $f = array();
             if($sql_data_array['266617X38X2065SQ001'] != "")
             {
                $f[] = "Natural composting without added microbes";
             } 
             if($sql_data_array['266617X38X2065SQ002'] != "")
             {
                $f[] = "Mechanical composting (with electricity/ machines)";
             }
             if($sql_data_array['266617X38X2065othercbox'] != "")
             {
                $f[] = "Other: ";
                $f[] = $sql_data_array['266617X38X2065othercbox'];
             }
             echo implode($f, ',');
          ?>
      </td>
      <td><?php echo number_format($sql_data_array['266617X38X2068'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	  
	  <td>
	  <?php 
          $purpose = array();
             if($sql_data_array['266617X38X2069SQ001'] != "")
             {
                $purpose[] = "For horticultural purposes";
             } 
             if($sql_data_array['266617X38X2069SQ002'] != "")
             {
                $purpose[] = "For school garden";
             }
             if($sql_data_array['266617X38X2069SQ003'] != "")
             {
                $purpose[] = "For sale";  
             }
			 if($sql_data_array['266617X38X2069SQ004'] != "")
             {
                $purpose[] = "For charity";  
             }
             echo implode($purpose, ',');
          ?>
	 <!-- purpose of the compost that is generated per month? -->
	  </td>
      
	  <td><!--Waste Reuse Textbook-->
         <?php 
         if($sql_data_array['266617X38X2074'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
	  
	  
	  
	  
	  <td><?php  //question No.7 Waste section.
          $purpose = array();
             if($sql_data_array['266617X38X2171SQ001_SQ001'] != "")
             {
                $purpose[] = "Paper(e.g.,used notebooks,paper etc.)";
             } 
             if($sql_data_array['266617X38X2171SQ002_SQ001'] != "")
             {
                $purpose[] = "Plastic";
             }
             if($sql_data_array['266617X38X2171SQ003_SQ001'] != "")
             {
                $purpose[] = "Horticultural waste";  
             }
			 if($sql_data_array['266617X38X2171SQ004_SQ001'] != "")
             {
                $purpose[] = "E-waste";  
             }
			 
			 
			  if($sql_data_array['266617X38X2171SQ007_SQ001'] != "")
             {
                $purpose[] = "Hazardous waste";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ005_SQ001'] != "")
             {
                $purpose[] = "Wood,glass, metal etc";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ008_SQ001'] != "")
             {
                $purpose[] = "Biomedical waste";  
             }
             echo implode($purpose, ',');
          ?>
		  </td>
		  
	  <td>
	  <?php  //question No.7 Waste section.
          $dealer = array();
             if($sql_data_array['266617X38X2171SQ001_SQ002'] != "")
             {
                $dealer[] = "Paper";
             } 
             if($sql_data_array['266617X38X2171SQ002_SQ002'] != "")
             {
                $dealer[] = "Plastic";
             }
             if($sql_data_array['266617X38X2171SQ003_SQ002'] != "")
             {
                $dealer[] = "Horticultural waste";  
             }
			 if($sql_data_array['266617X38X2171SQ004_SQ002'] != "")
             {
                $dealer[] = "E-waste";  
             }
			 
			 
			  if($sql_data_array['266617X38X2171SQ007_SQ002'] != "")
             {
                $dealer[] = "Hazardous waste";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ005_SQ002'] != "")
             {
                $dealer[] = "Wood,glass, metal etc";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ008_SQ002'] != "")
             {
                $dealer[] = "Biomedical waste";  
             }
             echo implode($dealer, ',');
          ?>
	  
	  </td>
	  
	  <td>
	  <?php  //question No.7 Waste section.
          $Dumped = array();
             if($sql_data_array['266617X38X2171SQ001_SQ003'] != "")
             {
                $Dumped[] = "Paper";
             } 
             if($sql_data_array['266617X38X2171SQ002_SQ003'] != "")
             {
                $Dumped[] = "Plastic";
             }
             if($sql_data_array['266617X38X2171SQ003_SQ003'] != "")
             {
                $Dumped[] = "Horticultural waste";  
             }
			 if($sql_data_array['266617X38X2171SQ004_SQ003'] != "")
             {
                $Dumped[] = "E-waste";  
             }
			 
			 
			  if($sql_data_array['266617X38X2171SQ007_SQ003'] != "")
             {
                $Dumped[] = "Hazardous waste";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ005_SQ003'] != "")
             {
                $Dumped[] = "Wood etc";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ008_SQ003'] != "")
             {
                $Dumped[] = "Biomedical waste";  
             }
             echo implode($Dumped, ',');
          ?>
	  
	  </td>
	  
	  
	  <td>
	 <?php  //question No.7 Waste section.
          $Internalprocedure = array();
             if($sql_data_array['266617X38X2171SQ001_SQ004'] != "")
             {
                $Internalprocedure[] = "Paper";
             } 
             if($sql_data_array['266617X38X2171SQ002_SQ004'] != "")
             {
                $Internalprocedure[] = "Plastic";
             }
             if($sql_data_array['266617X38X2171SQ003_SQ004'] != "")
             {
                $Internalprocedure[] = "Horticultural waste";  
             }
			 if($sql_data_array['266617X38X2171SQ004_SQ004'] != "")
             {
                $Internalprocedure[] = "E-waste";  
             }
			 
			 
			  if($sql_data_array['266617X38X2171SQ007_SQ004'] != "")
             {
                $Internalprocedure[] = "Hazardous waste";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ005_SQ004'] != "")
             {
                $Internalprocedure[] = "Wood etc";  
             }
			 
			  if($sql_data_array['266617X38X2171SQ008_SQ004'] != "")
             {
                $Internalprocedure[] = "Biomedical waste";  
             }
             echo implode($Internalprocedure, ',');
          ?>
	  </td>
	  
      <td><!--Question No.8 Waste Dispose-->
         <?php
         if($sql_data_array['266617X38X2076'] == "A1")
         {
             echo "Disposal Destination: ";
             echo "Open dumping";
         }
         elseif($sql_data_array['266617X38X2076'] == "A2")
         {
             echo "Disposal Destination: ";
             echo "Designated dumping site (Dhalao)";
         }
         elseif($sql_data_array['266617X38X2076'] == "A3")
         {
             echo "Disposal Destination: ";
             echo "Landfill Site";
         }
         elseif($sql_data_array['266617X38X2076'] == "A4")
         {
             echo "Disposal Destination: ";
             echo "Don’t know";
         }
         ?>
      </td><!--Quantity of Compost generated per month-->
      <td>
         <?php
          if($sql_data_array['266617X38X2081'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
      <td> 
          <?php
          if($sql_data_array['266617X38X2082'] == "A1")
             {
                 echo "Inside the school";
             }
             elseif($sql_data_array['266617X38X2082'] == "A2")
             {
                 echo "Outside the school";
             }
          ?>
      </td>
      <td>
          <?php
          $g = array();
             if($sql_data_array['266617X38X2083SQ001'] != "")
             {
                $g[] = "Horticultural";
             } 
             if($sql_data_array['266617X38X2083SQ002'] != "")
             {
                $g[] = "Plastic";
             }
             if($sql_data_array['266617X38X2083SQ003'] != "")
             {
                $g[] = "Tyres";
             }
             echo implode($g, ', ');
          ?>
      </td>
	  
	  
	  
	  
	  
	  	  <?php  //waste section question no.10
      if($sql_data_array['266617X38X2087SQ001_SQ002']!="" && $sql_data_array['266617X38X2087SQ001_SQ002']!=0)
	  {
$TVs="TVs:".$sql_data_array['266617X38X2087SQ001_SQ002'];
	  }
	  
	   if($sql_data_array['266617X38X2087SQ002_SQ002']!="" && $sql_data_array['266617X38X2087SQ002_SQ002']!=0)
	  {
$VCRorDVDplayers=" VCR or DVD players:".$sql_data_array['266617X38X2087SQ002_SQ002'];
	  }
	  
	   if($sql_data_array['266617X38X2087SQ003_SQ002']!="" && $sql_data_array['266617X38X2087SQ003_SQ002']!=0)
	  {
$Refrigerators=" Refrigerators and freezers:".$sql_data_array['266617X38X2087SQ003_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ004_SQ002']!="" && $sql_data_array['266617X38X2087SQ004_SQ002']!=0)
	  {
$Washing=" Washing machines:".$sql_data_array['266617X38X2087SQ004_SQ002'];
	  }
	    if($sql_data_array['266617X38X2087SQ005_SQ002']!="" && $sql_data_array['266617X38X2087SQ005_SQ002']!=0)
	  {
$Aircond=" Air conditioners:".$sql_data_array['266617X38X2087SQ005_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ006_SQ002']!="" && $sql_data_array['266617X38X2087SQ006_SQ002']!=0)
	  {
$Heaters=" Heaters:".$sql_data_array['266617X38X2087SQ006_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ007_SQ002']!="" && $sql_data_array['266617X38X2087SQ007_SQ002']!=0)
	  {
$Microwaves=" Microwaves:".$sql_data_array['266617X38X2087SQ007_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ008_SQ002']!="" && $sql_data_array['266617X38X2087SQ008_SQ002']!=0)
	  {
$Ovens=" Ovens:".$sql_data_array['266617X38X2087SQ008_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ009_SQ002']!="" && $sql_data_array['266617X38X2087SQ009_SQ002']!=0)
	  {
$Toasters=" Toasters:".$sql_data_array['266617X38X2087SQ009_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ010_SQ002']!="" && $sql_data_array['266617X38X2087SQ010_SQ002']!=0)
	  {
$ElectricKettles=" Electric Kettles:".$sql_data_array['266617X38X2087SQ010_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ011_SQ002']!="" && $sql_data_array['266617X38X2087SQ011_SQ002']!=0)
	  {
$Personalcomputers=" Personal computers:".$sql_data_array['266617X38X2087SQ011_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ012_SQ002']!="" && $sql_data_array['266617X38X2087SQ012_SQ002']!=0)
	  {
$Laptop =" Laptop:".$sql_data_array['266617X38X2087SQ012_SQ002'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ014_SQ002']!="" && $sql_data_array['266617X38X2087SQ014_SQ002']!=0)
	  {
$Notepadcomputers=" Notepad computers:".$sql_data_array['266617X38X2087SQ014_SQ002'];
	  }
  

  
     if($sql_data_array['266617X38X2087SQ015_SQ002']!="" && $sql_data_array['266617X38X2087SQ015_SQ002']!=0)
	  {
$Printers=" Printers:".$sql_data_array['266617X38X2087SQ015_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ016_SQ002']!="" && $sql_data_array['266617X38X2087SQ016_SQ002']!=0)
	  {
$Photocopiers=" Photocopiers:".$sql_data_array['266617X38X2087SQ016_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ017_SQ002']!="" && $sql_data_array['266617X38X2087SQ017_SQ002']!=0)
	  {
$Projectors=" Projectors:".$sql_data_array['266617X38X2087SQ017_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ018_SQ002']!="" && $sql_data_array['266617X38X2087SQ018_SQ002']!=0)
	  {
$Whiteboards=" Whiteboards:".$sql_data_array['266617X38X2087SQ018_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ019_SQ002']!="" && $sql_data_array['266617X38X2087SQ019_SQ002']!=0)
	  {
$typewriters=" Typewriters:".$sql_data_array['266617X38X2087SQ019_SQ002'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ020_SQ002']!="" && $sql_data_array['266617X38X2087SQ020_SQ002']!=0)
	  {
$calculators=" Pocket & desk calculators:".$sql_data_array['266617X38X2087SQ020_SQ002'];
	  }
  
  
  
      if($sql_data_array['266617X38X2087SQ021_SQ002']!="" && $sql_data_array['266617X38X2087SQ021_SQ002']!=0)
	  {
$Faxmachines=" Fax machines:".$sql_data_array['266617X38X2087SQ021_SQ002'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ022_SQ002']!="" && $sql_data_array['266617X38X2087SQ022_SQ002']!=0)
	  {
$Telex=" Telex:".$sql_data_array['266617X38X2087SQ022_SQ002'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ023_SQ002']!="" && $sql_data_array['266617X38X2087SQ023_SQ002']!=0)
	  {
$Telephones=" Telephones:".$sql_data_array['266617X38X2087SQ023_SQ002'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ024_SQ002']!="" && $sql_data_array['266617X38X2087SQ024_SQ002']!=0)
	  {
$Pay_telephones=" Pay telephones:".$sql_data_array['266617X38X2087SQ024_SQ002'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ025_SQ002']!="" && $sql_data_array['266617X38X2087SQ025_SQ002']!=0)
	  {
$Mobiles=" Mobiles:".$sql_data_array['266617X38X2087SQ025_SQ002'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ026_SQ002']!="" && $sql_data_array['266617X38X2087SQ026_SQ002']!=0)
	  {
$Answeringsystems=" Answering systems:".$sql_data_array['266617X38X2087SQ026_SQ002'];
	  }
  
?>
	  
	  
	  
	  <td>
	  <?php echo $TVs." ".$VCRorDVDplayers." ".$Refrigerators." ".$Washing." ".$Aircond." ".$Heaters." ".$Microwaves." ".$Ovens." ".$Toasters." ".$ElectricKettles." ".$Personalcomputers." ".$Laptop." ".$Notepadcomputers." ".$Printers." ".$Photocopiers." ".$Projectors." ".$Whiteboards." ".$typewriters." ".$calculators." ".$Faxmachines." ".$Telex." ".$Telephones." ".$Pay_telephones." ".$Mobiles." ".$Answeringsystems; ?>  
		  
	  
	  </td>
	  
	  
	  
	  <?php  //waste section question no.10 non Woking condition.
      if($sql_data_array['266617X38X2087SQ001_SQ003']!="" && $sql_data_array['266617X38X2087SQ001_SQ003']!=0)
	  {
$TVs_non_work="TVs:".$sql_data_array['266617X38X2087SQ001_SQ003'];
	  }
	  
	   if($sql_data_array['266617X38X2087SQ002_SQ003']!="" && $sql_data_array['266617X38X2087SQ002_SQ003']!=0)
	  {
$VCRorDVDplayers_non_work=" VCR or DVD players:".$sql_data_array['266617X38X2087SQ002_SQ003'];
	  }
	  
	   if($sql_data_array['266617X38X2087SQ003_SQ003']!="" && $sql_data_array['266617X38X2087SQ003_SQ003']!=0)
	  {
$Refrigerators_non_work=" Refrigerators and freezers:".$sql_data_array['266617X38X2087SQ003_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ004_SQ003']!="" && $sql_data_array['266617X38X2087SQ004_SQ003']!=0)
	  {
$Washing_non_work=" Washing machines:".$sql_data_array['266617X38X2087SQ004_SQ003'];
	  }
	    if($sql_data_array['266617X38X2087SQ005_SQ003']!="" && $sql_data_array['266617X38X2087SQ005_SQ003']!=0)
	  {
$Aircond_non_work=" Air conditioners:".$sql_data_array['266617X38X2087SQ005_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ006_SQ003']!="" && $sql_data_array['266617X38X2087SQ006_SQ003']!=0)
	  {
$Heaters_non_work=" Heaters:".$sql_data_array['266617X38X2087SQ006_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ007_SQ003']!="" && $sql_data_array['266617X38X2087SQ007_SQ003']!=0)
	  {
$Microwaves_non_work=" Microwaves:".$sql_data_array['266617X38X2087SQ007_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ008_SQ003']!="" && $sql_data_array['266617X38X2087SQ008_SQ003']!=0)
	  {
$Ovens_non_work=" Ovens:".$sql_data_array['266617X38X2087SQ008_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ009_SQ003']!="" && $sql_data_array['266617X38X2087SQ009_SQ003']!=0)
	  {
$Toasters_non_work=" Toasters:".$sql_data_array['266617X38X2087SQ009_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ010_SQ003']!="" && $sql_data_array['266617X38X2087SQ010_SQ003']!=0)
	  {
$ElectricKettles_non_work=" Electric Kettles:".$sql_data_array['266617X38X2087SQ010_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ011_SQ003']!="" && $sql_data_array['266617X38X2087SQ011_SQ003']!=0)
	  {
$Personalcomputers_non_work=" Personal computers:".$sql_data_array['266617X38X2087SQ011_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ012_SQ003']!="" && $sql_data_array['266617X38X2087SQ012_SQ003']!=0)
	  {
$Laptop_non_work =" Laptop:".$sql_data_array['266617X38X2087SQ012_SQ003'];
	  }

 if($sql_data_array['266617X38X2087SQ013_SQ003']!="" && $sql_data_array['266617X38X2087SQ013_SQ003']!=0)
	  {
$Notebookcomputers_non_work=" NoteBook computers:".$sql_data_array['266617X38X2087SQ013_SQ003'];
	  }
	  
	    if($sql_data_array['266617X38X2087SQ014_SQ003']!="" && $sql_data_array['266617X38X2087SQ014_SQ003']!=0)
	  {
$Notepadcomputers_non_work=" Notepad computers:".$sql_data_array['266617X38X2087SQ014_SQ003'];
	  }
  

  
     if($sql_data_array['266617X38X2087SQ015_SQ003']!="" && $sql_data_array['266617X38X2087SQ015_SQ003']!=0)
	  {
$Printers_non_work=" Printers:".$sql_data_array['266617X38X2087SQ015_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ016_SQ003']!="" && $sql_data_array['266617X38X2087SQ016_SQ003']!=0)
	  {
$Photocopiers_non_work=" Photocopiers:".$sql_data_array['266617X38X2087SQ016_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ017_SQ003']!="" && $sql_data_array['266617X38X2087SQ017_SQ003']!=0)
	  {
$Projectors_non_work=" Projectors:".$sql_data_array['266617X38X2087SQ017_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ018_SQ003']!="" && $sql_data_array['266617X38X2087SQ018_SQ003']!=0)
	  {
$Whiteboards_non_work=" Whiteboards:".$sql_data_array['266617X38X2087SQ018_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ019_SQ003']!="" && $sql_data_array['266617X38X2087SQ019_SQ003']!=0)
	  {
$typewriters_non_work=" Typewriters:".$sql_data_array['266617X38X2087SQ019_SQ003'];
	  }
	  
	     if($sql_data_array['266617X38X2087SQ020_SQ003']!="" && $sql_data_array['266617X38X2087SQ020_SQ003']!=0)
	  {
$calculators_non_work=" Pocket & desk calculators:".$sql_data_array['266617X38X2087SQ020_SQ003'];
	  }
  
  
  
      if($sql_data_array['266617X38X2087SQ021_SQ003']!="" && $sql_data_array['266617X38X2087SQ021_SQ003']!=0)
	  {
$Faxmachines_non_work=" Fax machines:".$sql_data_array['266617X38X2087SQ021_SQ003'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ022_SQ003']!="" && $sql_data_array['266617X38X2087SQ022_SQ003']!=0)
	  {
$Telex_non_work=" Telex:".$sql_data_array['266617X38X2087SQ022_SQ003'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ023_SQ003']!="" && $sql_data_array['266617X38X2087SQ023_SQ003']!=0)
	  {
$Telephones_non_work=" Telephones:".$sql_data_array['266617X38X2087SQ023_SQ003'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ024_SQ003']!="" && $sql_data_array['266617X38X2087SQ024_SQ003']!=0)
	  {
$Pay_telephones_non_work=" Pay telephones:".$sql_data_array['266617X38X2087SQ024_SQ003'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ025_SQ003']!="" && $sql_data_array['266617X38X2087SQ025_SQ003']!=0)
	  {
$Mobiles_non_work=" Mobiles:".$sql_data_array['266617X38X2087SQ025_SQ003'];
	  }
	  
	      if($sql_data_array['266617X38X2087SQ026_SQ003']!="" && $sql_data_array['266617X38X2087SQ026_SQ003']!=0)
	  {
$Answeringsystems_non_work=" Answering systems:".$sql_data_array['266617X38X2087SQ026_SQ003'];
	  }
  
?>
	  
	  
	  
	  <td>
	  <?php echo $TVs_non_work." ".$VCRorDVDplayers_non_work." ".$Refrigerators_non_work." ".$Washing_non_work." ".$Aircond_non_work." ".$Heaters_non_work." ".$Microwaves_non_work." ".$Ovens_non_work." ".$Toasters_non_work." ".$ElectricKettles_non_work." ".$Personalcomputers_non_work." ".$Laptop_non_work." ".$Notepadcomputers_non_work." ".$Printers_non_work." ".$Photocopiers_non_work." ".$Projectors_non_work." ".$Whiteboards_non_work." ".$typewriters_non_work." ".$calculators_non_work." ".$Faxmachines_non_work." ".$Telex_non_work." ".$Telephones_non_work." ".$Pay_telephones_non_work." ".$Mobiles_non_work." ".$Answeringsystems_non_work; ?>  
		  
	  
	  </td>
	  
	  
      <td><!--Waste E-Waste Displosal-->
         <?php 
         if($sql_data_array['266617X38X2114'] == "Y")
         {
             echo "Yes";
         }
         else
         {
             echo "No";
         }
         ?>
      </td>
      <td> <?php
          if($sql_data_array['266617X38X2115'] == "A1")
             {
                echo "Kabadiwalla/ Scrapdealer ";
             } 
             elseif($sql_data_array['266617X38X2115'] != "A2")
             {
                echo "Taken back by manufacturer ";
             }
             elseif($sql_data_array['266617X38X2115'] != "A3")
             {
                echo "Authorised dealer ";
             }
             elseif($sql_data_array['266617X38X2115'] != "A4")
             {
                echo "Authorised dismantler ";
             }
             elseif($sql_data_array['266617X38X2115'] != "-oth-")
             {
                echo "Other: ";
                echo $sql_data_array['266617X38X2115other'];
             }
          ?>
      </td>
	  <td><?php if($sql_data_array['266617X38X2121']=="Y"){echo "Yes";}else{ echo "No";} ?></td>
	<td>
	<?php if($sql_data_array['266617X38X2122']=="Y"){echo "Yes";}else { echo "No";} ?>
	</td>
	  <td>
	  <?php
          $gs = array();
             if($sql_data_array['266617X38X2123SQ001'] != "")
             {
                $gs[] = "As part of the curriculum";
             } 
             if($sql_data_array['266617X38X2123SQ002'] != "")
             {
                $gs[] = "As part of extracurricular activities such as guest lectures";
             }
             if($sql_data_array['266617X38X2123SQ003'] != "")
             {
                $gs[] = "By the showcasing of posters and stickers";
             }
             echo implode($gs, ', ');
          ?>
	  
	  </td>
	  <td><?php if($sql_data_array['266617X38X2124']=="Y"){ echo "Yes"; }else{ echo "No";} ?></td>
	  
	  
      <td><?php echo number_format($sql_score_waste, 2); ?></td>
      <td><?php echo number_format($sql_score, 2); ?></td>
      <td><?php echo number_format($sql_bonus, 2); ?></td>
	
	 
	  
  </tr>
   <?php
   // }
}
?>
<?php
function  GetScoreBySection($token,$sectionid)
{
	
$sqlscore=mysql_query("select SUM(score) as score from calculation where token= '".$token."' AND section_id='$sectionid'");
$totalscorebysection=mysql_result($sqlscore,0,0);

return $totalscorebysection;
	
}

?>




</tbody> 
</table> 
            </div>
        </div>
    
  </div>
</main>
     
<script type="text/javascript">
 
    $(document).ready(function() {
        document.title = 'All Question Report(GSP-Audit-2015)'; 
        var t = $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: ['excel'],
			 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 5
        });
 
    } );
     
</script>
 
</body>
</html>