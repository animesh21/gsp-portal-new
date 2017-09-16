<?php
session_start();
if($_SESSION['username'] == "")
{
	header('location:index.php');
}
include('config.php');
//$link = mysql_connect($servername, $username, $password) or die("Couldn't make connection.");
//$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
//$total_count = mysql_query("select * from `lime_survey_266617` where `submitdate` is not null");

include('header.php');
include('functions.php');
?>


<style>
#example th{text-align: center}

</style>
<main class="bdr"  style='border: none;'>
<div class="container" style="width: 100%">
<div class="wrapper">
<div class="top-area">
<h2>PERFORMANCE REPORT</h2>
</div>
<?php
if(isset($_REQUEST['para']) && $_REQUEST['para'] == "success")
{
	?>
	<div style="text-align: center; color: green; font-size:16px; ">Response PDF has been successfully sent to the Co-ordinator's mail id.</div>
			<?php 
			}
			?>
						
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
	<th>Password</th>
	<th>Reg. Date</th>
	<th>Comp. Date</th>
	<th>Completeness</th>
	<th>Total Classrooms</th>
	<th>Window Floor Ratio</th>
	<th>Vehicles Ownership</th>
	<th>School Owned Vehicles</th>
	<th>PUC done</th>
	<th>Vehicles with AC</th>
	<th>Vehicles more than 5 years Old</th>
	<th>Vehicles on CNG</th>
	<th>Details of Buses on CNG</th>
	<th>Details of Car on CNG</th>
	<th>Details of Van on CNG</th>
	<th>Total Population GQ</th>
	<th>Total Population in Air</th>
	<th>Sustainble Motorised Vehicles: Numbers</th>
	<th>Sustainble Motorised Vehicles: Percentgae</th>
	<th>Non Polluting Transport: Numbers</th>
	<th>Non Polluting Transport: Percentage</th>
	<th>Points in <br />
	Air Section</th>
	<th>Energy: Per cap/day (MJ)</th>
	<th>Source of Energy</th>
	<th>Alternate Source <br />
	of Energy</th>
	<th>Points in <br />
	Energy Section</th>
	<th>Food Served in Canteen</th>
	<th>Packaged Food distribution as Rewards</th>
	<th>Details of Packaged Food</th>
	<th>Distribution of Chocolate/similar products during events</th>
	<th>Names of Products</th>
	<th>Events sponsored by Food companies</th>
	<th>Brand Banners</th>
	<th>Banners, brochures, hoardings, stalls put-up during events</th>
	<th>Points in <br />
	Food Section</th>
	<th>Total of Green Cover(m<sup>2</sup>)</th>
	<th>Percentage of Green Cover(%)</th>
	<th>Use of Chemical based pesticides</th>
	<th>Points in Land Section</th>
	<th>Water: Total Consumption(ltrs)</th>
	<th>Water: per cap/day(ltrs)</th>
	<th>Load on Drinking Water Taps</th>
	<th>Load on Ablution Taps</th>
	<th>Load on Urinals</th>
	<th>Load on Water Closet</th>
	<th>Rainwater Harvesting System</th>
	<th>Type of Rainwater Harvesting System</th>
	<th>Waste Water Reuse/Recycle</th>
	<th>Treat Waste Water</th>
	<th>Points in Water Section</th>
	<th>Solid Waste Segregation</th>
	<th>Segregator at Source</th>
	<th>Waste Collection points with 0 bin</th>
	<th>Waste Collection points with 1 bin</th>
	<th>Waste Collection points with 2 bins</th>
	<th>Waste Collection points with 3 bins</th>
	<th>Waste: Per cap/day(Grams)</th>
	<th>Recyle Solid Waste</th>
	<th>Total Waste Generated(Grams)</th>
	<th>Total Waste Recycled(Grams)</th>
	<th>Percentage of Waste Recycled</th>
	<th>Composting Facility</th>
	<th>Composting Methodology</th>
	<th>Quantity of Compost generated per month</th>
	<th>Reuse Textbook</th>
	<th>Waste Disposal</th>
	<th>Burn Waste</th>
	<th>Where do you burn waste</th>
	<th>Kind of waste burnt</th>
	<th>E-waste Disposal</th>
	<th>Who collects E-waste</th>
	<th>Points in Waste Section</th>
	<th>Total Points</th>
	<!--<th>Bonus Points</th>-->
</tr>
</thead> 
	<tbody>
<?php  
//$sql_data = mysql_query("select * from `lime_survey_266617` where `submitdate` is not null order by `startdate` DESC");   
$sql_data = mysql_query("SELECT survey.*,surtoken.tid,surtoken.attribute_1,surtoken.attribute_5,surtoken.attribute_7,surtoken.datetime,surtoken.completed FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND surtoken.usesleft<=0 AND surtoken.completed!='N'  AND survey.`submitdate` IS NOT NULL ORDER BY survey.`startdate` DESC");   



$i = 0;
while($sql_data_array=mysql_fetch_array($sql_data))
{
	
	$token=$sql_data_array['token'];
	$sq = "SELECT `completeness` FROM `lime_answers_for_progress` where `token`='".$sql_data_array['token']."'";
	$sql_1 = mysql_query($sq);
	$sql_comp = mysql_fetch_assoc($sql_1);
	
	
	$sql_details = mysql_query("select * from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");
	
	
	  
	
	/*
	//For Feedback Icon
	$sql_chk_feedback = mysql_query("select id from `gsp_feedback` where `token` = '".$sql_data_array['token']."'");
	if(mysql_num_rows($sql_chk_feedback) > 0)
	{
		$feedback_icon = 1;
	}
	else
	{
		$feedback_icon = 0;
	}
	*/
	while($sql_details_array=mysql_fetch_assoc($sql_details))
	{
		$i++;

		 $sql_statename = "select `name` from states_india where `state_id`='".$sql_details_array['attribute_5']."'";
         $sql_state_array = mysql_query($sql_statename);
         $sql_statename_row = mysql_fetch_assoc($sql_state_array);
		
	?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $sql_details_array['tid']; ?></td>
	<td><?php echo $sql_details_array['attribute_1']; ?></td>
	<td><?php echo $sql_data_array['266617X34X1591']; ?></td>
	<td><?php echo $sql_data_array['266617X34X1592']; ?></td>
	<td><?php echo $sql_statename_row['name']; ?></td>
	<td><?php echo $sql_details_array['attribute_7']; ?></td>
	<td><?php echo number_format($sql_data_array['266617X34X1596'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	<td><?php echo number_format($sql_data_array['266617X34X1597SQ001'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	<td><?php echo number_format($sql_data_array['266617X34X1597SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	<td><?php echo number_format($sql_data_array['266617X34X1597SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	<td><?php echo $sql_details_array['attribute_12']; ?></td>
	<td><?php echo $sql_data_array['266617X34X1602']; ?></td>
	<td><?php echo $sql_details_array['attribute_14']; ?></td>
	<td><?php echo $sql_data_array['266617X34X1604']; ?></td>
	<td><?php echo $sql_data_array['266617X34X1605']; ?></td>
	<td><?php echo number_format($sql_data_array['266617X34X1606SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	<td><?php echo $sql_details_array['token']; ?></td>
	<td><?php echo date('d-m-Y', strtotime($sql_details_array['datetime'])); ?></td>
	<td><?php if($sql_details_array['completed'] != "N") { echo date('d-m-Y', strtotime($sql_details_array['completed'])); } else { echo "N/A"; } ?></td>
	<td><?php echo $sql_comp['completeness']; ?></td>
	<td><?php echo number_format($sql_data_array['266617X4X1127'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td> <!-- total classrooms-->
	<td><!-- window floor ratio-->
		<?php 
		$sql_floor_details = mysql_query("select 266617X4X2197SQ001_SQ001, 266617X4X2197SQ002_SQ001, 266617X4X2197SQ003_SQ001, 266617X4X2197SQ004_SQ001, 266617X4X2197SQ005_SQ001, 266617X4X2197SQ006_SQ001, 266617X4X2197SQ007_SQ001, 266617X4X2197SQ008_SQ001, 266617X4X2197SQ009_SQ001, 266617X4X2197SQ010_SQ001, 266617X4X2197SQ011_SQ004 from `lime_survey_266617` where `token`='".$sql_details_array['token']."'");
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
	<td><?php if($sql_data_array['266617X4X165SQ001_SQ003'] == 0){ echo "0"; }else{ echo $sql_data_array['266617X4X165SQ001_SQ003']; } ?></td> <!-- School Owned Vehicles-->
	<td>Buses: <?php if($sql_data_array['266617X4X165SQ005_SQ001'] == 0){ echo "0"; }else{ echo $sql_data_array['266617X4X165SQ005_SQ001']; } ?><br/>&nbsp;&nbsp;Car:<?php if($sql_data_array['266617X4X165SQ005_SQ002'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ005_SQ002']; } ?><br/>&nbsp;&nbsp;Van:<?php if($sql_data_array['266617X4X165SQ005_SQ008'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ005_SQ008']; } ?></td><!-- PUC-->
	<td>Buses: <?php if($sql_data_array['266617X4X165SQ004_SQ001'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ001']; } ?><br/>&nbsp;&nbsp;Car:<?php if($sql_data_array['266617X4X165SQ004_SQ002'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ002']; } ?><br/>&nbsp;&nbsp;Van:<?php if($sql_data_array['266617X4X165SQ004_SQ008'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ004_SQ008']; } ?></td><!-- AC-->
	<td>Buses: <?php if($sql_data_array['266617X4X165SQ002_SQ001'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ001']; } ?><br/>&nbsp;&nbsp;Car:<?php if($sql_data_array['266617X4X165SQ002_SQ002'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ002']; } ?><br/>&nbsp;&nbsp;Van: <?php if($sql_data_array['266617X4X165SQ002_SQ008'] == 0){ echo 0; }else{ echo $sql_data_array['266617X4X165SQ002_SQ008']; } ?></td><!-- AGE-->
	<td><?php if($sql_data_array['266617X4X2217SQ004_SQ004'] == 0){ echo "0"; }else{ echo $sql_data_array['266617X4X2217SQ004_SQ004']; } ?></td><!-- CNG-->
	<td><?php echo $sql_data_array['266617X4X2217SQ001_SQ004']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ002_SQ004']; ?></td>
	<td><?php echo $sql_data_array['266617X4X2217SQ003_SQ004']; ?></td>
	<td><?php echo $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; ?></td>
	<td><?php echo $total_population = $sql_data_array['266617X4X176SQ004_SQ004']; ?></td>
	<td><?php echo $total_smv = $sql_data_array['266617X4X176SQ001_SQ004'] + $sql_data_array['266617X4X176SQ002_SQ004'] + $sql_data_array['266617X4X176SQ003_SQ004'] + $sql_data_array['266617X4X176SQ0012_SQ004'] + $sql_data_array['266617X4X176SQ005_SQ004'] + $sql_data_array['266617X4X176SQ006_SQ004']; ?></td>
	
	<td><?php $per_smv = (($total_smv/$total_population)*100); 
	echo number_format((float)$per_smv, 2, '.', '');  // Outputs -> 105.00
	//echo "%";
	?>
	</td>
	
	<td><?php echo $total_npt = $sql_data_array['266617X4X176SQ009_SQ004'] + $sql_data_array['266617X4X176SQ010_SQ004'] + $sql_data_array['266617X4X176SQ011_SQ004'];?>
	
	</td>
	
	<td><?php $per_npt = (($total_npt/$total_population)*100);
	echo number_format((float)$per_npt, 2, '.', ''); 
	?></td>
	
	<td>

	<?php echo GetAirPoints($token); ?>
	
	</td>
	
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
	<td>
	<?php
/*
	//Energy section Points Calculation.

$query_energy="SELECT * FROM lime_survey_266617 WHERE  token='a9mx2'";
$query_result_energy=mysql_query($query_energy);
$getdata=mysql_fetch_assoc($query_result_energy);

$energy_points =array();  
	
//Q.1 Does your school have access to an electricity bill? 
	//$group_id = 8;
	//$question_number = 237;
	$answer237 = $getdata['266617X8X237'];
	if($answer237 == "Y")
	{
	$energy_points['q1_237'] = 1;    
	}
	

//Q2) How much energy does the school derive from each type of energy source? 
	//$group_id = 8;
	//$question_number = 2180;
	$total_mj = $getdata['266617X8X2180SQ013_SQ002']; 
	$answer1 = $getdata['266617X8X2180SQ001_SQ002'];
	$points1 = ($answer1/$total_mj) * 2.5;
	
	$answer2 = $getdata['266617X8X2180SQ002_SQ002'];
	$points2 = ($answer2/$total_mj) * 1.67;
	
	$answer3 = $getdata['266617X8X2180SQ003_SQ002'];
	$points3 = ($answer3/$total_mj) * 0.83;
	
	$answer4 = $getdata['266617X8X2180SQ004_SQ002'];
	$points4 = ($answer4/$total_mj) * 3.33;
	
	$answer5 = $getdata['266617X8X2180SQ005_SQ002'];
	$points5 = ($answer5/$total_mj) * 0.83;
	
	$answer6 = $getdata['266617X8X2180SQ006_SQ002'];
	$points6 = ($answer6/$total_mj) * 0.83;
	
	$answer7 = $getdata['266617X8X2180SQ007_SQ002'];
	$points7 = ($answer7/$total_mj) * 3.33;
	
	$answer8 = $getdata['266617X8X2180SQ008_SQ002'];
	$points8 = ($answer8/$total_mj) * 5;
	
	$answer9 = $getdata['266617X8X2180SQ009_SQ002'];
	$points9 = ($answer9/$total_mj) * 5;
	
	$answer10 = $getdata['266617X8X2180SQ0010_SQ002'];
	$points10 = ($answer10/$total_mj) * 5;
	
	$answer11 = $getdata['266617X8X2180SQ0011_SQ002'];
	$points11 = ($answer11/$total_mj) * 3.33;
	
	$fscore = $points1 + $points2 + $points3 + $points4 + $points5 + $points6 + $points7 + $points8 + $points9 + $points10 + $points11;
	
	if(($fscore > 5) || ($fscore == 5))
	{
		$energy_points['q3_2180'] = 5;
	}


//Q.6) Are there any alternate sources of energy employed/ installed in your school? 
// $group_id = 8;
	//$question_number = 261;
	$answer261 = $getdata['266617X8X261'];
	if($answer261 == "Y")
	{
	$energy_points['q6_261'] = 1;    
	}

	$total_energy_points=array_sum($energy_points);
	*/
	?>
	
	<?php echo number_format(GetEnergyPoints($token)); ?>
	</td>

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
	<td> 
	<?php 
	/*
	//Food  Section Points Calculation. group id 36.
	
	$query_food="SELECT 266617X36X1871SQ001_SQ002,266617X36X1871SQ002_SQ002,266617X36X1871SQ006_SQ002,266617X36X1871SQ007_SQ002,266617X36X1871SQ008_SQ002,266617X36X1871SQ009_SQ002 FROM lime_survey_266617 WHERE  token='a9mx2'";
	$query_result_food=mysql_query($query_food);
	$getdata=mysql_fetch_assoc($query_result_food);
	
	//Q.4 What kind of food is being served/sold in your school?
	
	$food_points =array();  	
	$packageditem=$getdata['266617X36X1871SQ001_SQ002']+$getdata['266617X36X1871SQ002_SQ002']+$getdata['266617X36X1871SQ006_SQ002']+$getdata['266617X36X1871SQ007_SQ002']+$getdata['266617X36X1871SQ008_SQ002']+$getdata['266617X36X1871SQ009_SQ002'];
	
	if($packageditem == " " || $packageditem<1)
	{ 
	$food_points['q3_1871'] = 2;   
	}

	$total_food_points=array_sum($food_points);
	*/
	?>
	<?php echo GetFoodPoints($token); ?>
	</td><!--Food Points-->
	<td><!--LAND green area-->
		<?php 
		$green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ012_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
		//echo number_format($green_area,2);
		echo number_format((float)$green_area, 2, '.', ''); 
		?>
	</td>
	<td><!--LAND percentage of green area-->
		<?php 
		$green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ012_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
		$total_area = $sql_data_array['266617X7X1810SQ010_SQ002'];
		// echo $perc_green_area = number_format(($green_area*100)/$total_area,2);
		// echo " %";
		?> 
		<?php 
	echo number_format((float)($green_area*100)/$total_area, 2, '.', '');  // Outputs -> 105.00
	//echo "%";
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
	<td>  <!--	START LAND SECTION CALCULATION POINTS -->
	<?php
	/*
	$query_land="SELECT * FROM lime_survey_266617 WHERE  token='a9mx2'";
	$query_result_land=mysql_query($query_land);
	$getdata=mysql_fetch_assoc($query_result_land);

	$land_points =array();  
	$land_bonus_points=array();
	
	//Task 2: Measure the four critical areas of your school campus
	//Q.1 Total Green Cover 
	
	$total_site_area = $getdata['266617X7X1810SQ009_SQ002'];
	$total_green_cover_area = $getdata['266617X7X1810SQ002_SQ002'] + $getdata['266617X7X1810SQ003_SQ002'];
	
	$percentage = 33;
	$first_cal = ($total_green_cover_area/$total_site_area)*100 ;
	
	
	if($first_cal > 32.99)
	{
	$land_points['q1_1810'] = 5;
	}
	else
	{
		$calculation = $total_site_area*0.33;
		$Lowpoints = ($total_green_cover_area/$calculation)*5;
		$land_points['q1_1810'] = $Lowpoints;

	}
	
//4) Do you use chemical based pesticides in your school green cover? Yes/No
	
	$answer196 = $getdata['266617X7X196'];
if($answer196 == "N")
	{
	$land_points['q4_196'] = 1;    
	}
	
	$total_land_points=array_sum($land_points);
	*/
	?>
	
	
	<?php echo number_format(GetLandPoints($token),2); ?>
	
	</td>
	
	<td><?php echo number_format($sql_data_array['266617X37X1883'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td><!--Water Total Consumption-->
	<td><!--Water Per capita/day-->
		<?php 
		$total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
		$total_water_consumption = $sql_data_array['266617X37X1883'];
		echo $per = number_format($total_water_consumption/$total_population_gq,2);
		?></td>
	<td><?php $dwt = $sql_data_array['266617X37X1893']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo $dwtload = number_format($total_population/$dwt,2); ?></td>
	<td><?php $at = $sql_data_array['266617X37X1894']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo $atload = number_format($total_population/$at,2); ?></td>
	<td><?php $urinals = $sql_data_array['266617X37X1895']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($urinalload = $total_population/$urinals,2); ?></td><!--Load of  drinking Water taps-->
	<td><?php $wc = $sql_data_array['266617X37X1896SQ005_SQ004']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($wcload = $total_population/$wc,2); ?></td><!--Load of  abulution taps-->
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
		if($sql_data_array['266617X37X2332'] == "Y")
			{
				echo "Yes";
				//echo "<br/>";
				//echo "Details: ";
				//echo $sql_data_array['266617X37X1906'];
			}
			else 
			{
				echo "No";
			}
		?></td>
	<td>
	<?php echo GetWaterPoints($token); ?>
	</td>
	<!--  END WATER SECTION QUESTIONS POINTS CALCULATION. -->
	
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
		?></td>
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
	<td><?php echo $sql_data_array['266617X38X2143SQ011_SQ001']; ?></td>
	<td><?php echo $sql_data_array['266617X38X2143SQ011_SQ002']; ?></td>
	<td><?php echo $sql_data_array['266617X38X2143SQ011_SQ003']; ?></td><!--Rooms with no bins-->
	<td><?php echo $sql_data_array['266617X38X2143SQ011_SQ004']; ?></td><!--Rooms with one bins-->
	<td><!--Waste: Per cap/day(grams)-->
            
		<?php 
		$total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
		$total_waste_generated = $sql_data_array['266617X38X2125SQ009_SQ001'] * 1000;		
		$perday = $total_waste_generated/30;
		//echo $percapita = number_format($perday/$total_population_gq,$decimals = 0, $dec_point = ".", $thousands_sep = "");
                                   
                                   $percapita_person = $perday / $total_population_gq;
                                  //echo $percapita = number_format($percapita_person, 2, '.', '');
                                  echo number_format((float)$percapita_person, 2, '.', '');  
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
	</td><!--Rooms with three bins-->
	<td><?php //echo number_format($sql_data_array['266617X38X2125SQ009_SQ001'],2);
                   //Total Waste Generated(grams)
                   $generated_waste = $sql_data_array['266617X38X2125SQ009_SQ001'] * 1000;
	echo number_format((float)$generated_waste, 2, '.', ''); 
	?>
	</td>
	<td><?php 
                  // Total Waste Recycled(grams)
                  $recycled_waste = $sql_data_array['266617X38X2042SQ010_SQ001'] * 1000; // In Grams
	echo number_format((float)$recycled_waste, 2, '.', ''); 
	?>
	</td>
	<td>
	<?php //echo $per_wr = number_format(($sql_data_array['266617X38X2042SQ010_SQ001']/$sql_data_array['266617X38X2125SQ009_SQ001'])*100,2);
	//echo "%"; 
	?>	
	<?php 
                  //Percentage of Waste Recycled
                 $per_wr =(($recycled_waste/$generated_waste)*100);
	echo number_format((float)$per_wr, 2, '.', '');  // Outputs -> 105.00
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
	<td><!--Waste Dispose-->
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
	<td>
	<?php //START WASTE SECTION QUESTIONS POINTS CALCULATION.
	/*
	$query_waste="SELECT token,266617X38X2032,266617X38X2033SQ001,266617X38X2143SQ011_SQ001,266617X38X2143SQ011_SQ002,266617X38X2143SQ011_SQ003,266617X38X2143SQ011_SQ004,266617X38X2125SQ009_SQ001,266617X38X2041,266617X38X2125SQ009_SQ001,266617X38X2042SQ010_SQ001,266617X38X2074,266617X38X2076,266617X38X2115,266617X38X2114 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_waste=mysql_query($query_waste);
	$getdata=mysql_fetch_assoc($query_result_waste);

$waste_points =array();  
$waste_bonus_points=array();
//Question 1.:  Does your school segregate solid waste? 	
$answer2032 = $getdata['266617X38X2032']; // total water consumption
	if($answer2032=="Y") // if Yes
	{
		$waste_points['q1_2032']=5;
		//bonus points
		$Students_and_teachers=$getdata['266617X38X2033SQ001'];
		if($Students_and_teachers=="Y")
		{
			$waste_bonus_points['q1_2032']=5;
		}
	}
	
	//Q.2) Waste collection points in your school.
	$nobin = $getdata['266617X38X2143SQ011_SQ001'];
	$onebin = $getdata['266617X38X2143SQ011_SQ002'];
	$twobin = $getdata['266617X38X2143SQ011_SQ003'];
	$threebin = $getdata['266617X38X2143SQ011_SQ004'];
	
	$total_collecting_points = $onebin + $nobin + $twobin + $threebin;
	
	if($total_collecting_points == ($twobin + $threebin))
	{
		$waste_points['q2_2143']= 10;
	}
	elseif($total_collecting_points == ($nobin + $onebin))
	{
		$waste_points['q2_2143'] = 0;
	}
	else
	{
		$waste_points['q2_2143']= (($twobin + $threebin)/$total_collecting_points)*10;
	}
	
	// Bonus Points
	if($threebin > 0)
	{
		$waste_bonus_points['q2_2143'] = 5; 
	}
	
//Q.3) Determine the quantity of waste generated in your school.
	
	$total_waste = $getdata['266617X38X2125SQ009_SQ001'];

	$per_day_waste_generation = $total_waste/30;
	$per_capita_waste_generation = $per_day_waste_generation/$total_population;
	
	if($school_type == 1) //Day Scholar
	{
		$per_capita = 100;
	}
	else if($school_type ==2) //Day Boarding (8 hours)
	{
		$per_capita = 150;
	}
	else if($school_type ==3) // "Residential (24 hours)")
	{
		$per_capita = 300;
	} 
	else if($school_type ==4) //Day Scholar + Day Boarding
	{
		$per_capita = 150;
	}
	else if($school_type ==5) //Day Boarding + Residential
	{
		$per_capita = 350;
	}
	else if($school_type ==6) //Day Scholar + Residential
	{
		$per_capita = 300;
	}
	else if($school_type ==7) //Day Scholar + Day Boarding + Residential
	{
		$per_capita = 400; 
	}
	
	//$double_of_standard = $per_capita*2;
	if($per_capita_waste_generation < $per_capita)
	{
		$waste_points['q3_2125']=10;
	}
	elseif($per_capita_waste_generation < $per_capita*2)
	{
		$waste_points['q3_2125'] = ($per_capita/$per_capita_waste_generation)*10; 
	}
	
	//4) Does your school recycle any generated waste?

		$waste_recycle=$getdata['266617X38X2041']; 
		if($waste_recycle=="Y")
		{
			
			$total_generated_waste = $getdata['266617X38X2125SQ009_SQ001'];
			$total_recycled_waste = $getdata['266617X38X2042SQ010_SQ001'];
			
			$half_of_total_generated_waste = $getdata['266617X38X2125SQ009_SQ001']/2;
			
			if($total_recycled_waste >= $half_of_total_generated_waste)
			{
				$waste_points['q4_2041'] = 30;
			}
			else
			{
				$waste_points['q4_2041'] = ($total_recycled_waste/$total_generated_waste)*30;
			}
			
		}
		
	//Q.6) Does your school encourage students & teachers to reuse textbooks?
	
	if($getdata['266617X38X2074']=="Y") //if yes get 5 bonus points
	{
		$waste_bonus_points['q6_2074'] = 5;
	}
	
	//Q.8) What is the final destination for waste that is disposed off externally? 
	
	if($getdata['266617X38X2076']=="A2" || $getdata['266617X38X2076']=="A3")
	{
		$waste_points['q8_2076']=5; 
	}
	
	//Q.11) Do you know that your E-waste can be collected by an authorised dealer or dismantler? If yes, then points calculation

	$ewaste_collected=$getdata['266617X38X2115'];
	if(($getdata['266617X38X2114']=="Y") && ($ewaste_collected=="A2" || $ewaste_collected=="A4" || $ewaste_collected=="A5"))
	{
		$waste_points['q8_2114']=5;  
		
	}
	
	
	
	
	$total_waste_points=number_format(array_sum($waste_points),2);
	$total_waste_bonus_points=array_sum($waste_bonus_points);
$waste_grand_total=number_format($total_waste_points+$total_waste_bonus_points,2);
*/
	?>
	
	<?php echo number_format(GetWastePoints($token), 2); ?>
	
	</td>
	<td><?php echo number_format(GetAirPoints($token)+GetEnergyPoints($token)+GetFoodPoints($token)+GetLandPoints($token)+GetWaterPoints($token)+GetWastePoints($token), 2); ?></td>
	<!--<td><?php //echo number_format($sql_bonus['bonus'], 2); ?></td> -->
</tr>
<?php
	}
}
?>
</tbody> 
</table> 
			</div>
		</div>
	
</div>
</main>
<footer>
	<div class="text-center">Copyright &copy; <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>
<script language="javascript" type="text/javascript">

function popitup(url) {
	newwindow=window.open(url,'name','height=200,width=600');
	if (window.focus) {newwindow.focus()}
	return false;
}
</script>

<script type = 'text/javascript'>
$(document).ready(function() {
	document.title = 'Performance Report(GSP-Audit-2016)';
	$('#example').DataTable( {
dom: 'lBfrtip',
buttons: [
		'excel'
		],
		"aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
		"iDisplayLength": 25
	} );
} );
</script>
</body>

</html>