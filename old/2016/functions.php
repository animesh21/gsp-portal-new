<?php include('config.php');

function GetAirPointsState($state)
{
    $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetAirPoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
       
}

function GetEnergyPointsState($state)
{
     $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetEnergyPoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
       
}

function GetFoodPointsState($state)
{
     $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetFoodPoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
}

function GetLandPointsState($state)
{
     $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetLandPoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
       
}

function GetWaterPointsState($state)
{
     $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetWaterPoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
       
}

function GetWastePointsState($state)
{
     $get_token_query ="SELECT token FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate IS NOT NULL";
    $query_result_air_state=mysql_query($get_token_query);
    while ($data = mysql_fetch_assoc($query_result_air_state))
    {
       $total_air_value = number_format(GetWastePoints($data['token']),2);
       $token[] = $data['token'];
       $total_air_value1 [] =    $total_air_value;
    }
    $total_air_value = array_combine($token,$total_air_value1);
    return $total_air_value;
       
}


function GetAirPoints($token)
{
	//Air Section  Points Calculation 
	$query_air="SELECT 266617X4X2197SQ011_SQ002,266617X4X2197SQ011_SQ003,266617X4X164,266617X4X165SQ001_SQ003,266617X4X165SQ002_SQ003,266617X4X165SQ004_SQ003,266617X4X165SQ005_SQ003,266617X4X2217SQ004_SQ001,266617X4X2217SQ004_SQ002,266617X4X2217SQ004_SQ003,266617X4X2217SQ004_SQ004,266617X4X176SQ004_SQ004,266617X4X176SQ001_SQ004,266617X4X176SQ002_SQ004,266617X4X176SQ003_SQ004,266617X4X176SQ0012_SQ004,266617X4X176SQ005_SQ004,266617X4X176SQ006_SQ004,266617X4X176SQ009_SQ004,266617X4X176SQ010_SQ004,266617X4X176SQ011_SQ004,266617X4X176SQ007_SQ004,266617X4X176SQ008_SQ004 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_air=mysql_query($query_air);
	$getdata=mysql_fetch_assoc($query_result_air);

	$air_points = array(); 

	//$group_id = 4;
	// $question_number = 2197;
	$total_floor_area = $getdata['266617X4X2197SQ011_SQ002']; //X = Area of floor (LxB)
	$total_area_of_openings  = $getdata['266617X4X2197SQ011_SQ003']; //Y = Area of openings (LxH)
	$ventilation_percentage = ($total_area_of_openings/$total_floor_area)*100; //window area to floor ratio
	
	if($ventilation_percentage>=5)
	{
		$air_points['q2_2197'] = 3;
	}
	
	
	//  SECTION 3: How eco-friendly are the vehicles in your school?
	//Q.3)What is the ownership of the vehicles used by your school?   

	if($getdata['266617X4X164']== "A1" || $getdata['266617X4X164']== "A2")
	{
		$air_points['q3_164'] =5;    
	}else if($getdata['266617X4X165SQ002_SQ003']==0 || $getdata['266617X4X165SQ002_SQ003']=="")
	{
	$air_points['q3_164'] =1;  	
	}
	else if($getdata['266617X4X165SQ004_SQ003']==0 || $getdata['266617X4X165SQ004_SQ003']=="")
	{
	$air_points['q3_164'] =1;  	
	}
	else if($getdata['266617X4X165SQ005_SQ003']==0 || $getdata['266617X4X165SQ005_SQ003']=="") //PUC Done
	{
	$air_points['q3_164'] =0;  	
	}
	else if($getdata['266617X4X165SQ005_SQ003']==$getdata['266617X4X165SQ001_SQ003']) //PUC Done == total_vehicles get 1 points
	{
	$air_points['q3_164'] =1;  	
	}
	else if($getdata['266617X4X165SQ002_SQ003']==$getdata['266617X4X165SQ001_SQ003']) //No. of vehicles more than five years old == total_vehicles get 0 points
	{
	$air_points['q3_164'] =0;  	
	}
	else if($getdata['266617X4X165SQ006_SQ003']==0 || $getdata['266617X4X165SQ006_SQ003']=="")
	{
	$air_points['q3_164'] =0;  	
	}
	else if($getdata['266617X4X165SQ006_SQ003']==0 || $getdata['266617X4X165SQ001_SQ003']=="") //
	{
	$air_points['q3_164'] =0;  	
	}
	else
	{ //3(a) Provide details of school-owned motorised vehicles 
		//$group_id = 4;
		//$question_number = 165;
		$total_vehicles = $getdata['266617X4X165SQ001_SQ003'];
		$vehicles_more_5_years = $getdata['266617X4X165SQ002_SQ003'];
		$total_vehicles_use_ac = $getdata['266617X4X165SQ004_SQ003'];
		$total_vehicles_non_ac = $total_vehicles - $total_vehicles_use_ac;
		$puc_done_total = $getdata['266617X4X165SQ005_SQ003'];
		$puc_not_done_total = $total_vehicles - $puc_done_total;
		$vehicles_with_parking = $getdata['266617X4X165SQ006_SQ003'];
		$vehicles_without_parking = $total_vehicles - $vehicles_with_parking;

		//No. of Vehicles less than five year
		$vehicles_less_5_years = $total_vehicles - $vehicles_more_5_years;
		$points_1 = ($vehicles_less_5_years/$total_vehicles)*1; 

		//Use of Air Conditioning
		$points_2 = ($total_vehicles_non_ac/$total_vehicles)*1;
		//Pollution Under Control Certificate
		$points_3 = ($puc_done_total/$total_vehicles)*1;
		//Authorized parking area for vehicles
		$points_4 = ($vehicles_with_parking/$total_vehicles)*1;
		
		//Q3(b) Specify the type of fuel used by your school’s vehicles:

		//$question_number = 2217;
		$total_diesel = $getdata['266617X4X2217SQ004_SQ001'];
		$total_petrol = $getdata['266617X4X2217SQ004_SQ002'];
		$total_lpg = $getdata['266617X4X2217SQ004_SQ003'];
		$total_cng = $getdata['266617X4X2217SQ004_SQ004'];
		
		if($total_cng==$total_vehicles)
		{
			$air_points['q3a_165']=1;
		}elseif($total_lpg==$total_vehicles)
		{
			$air_points['q3a_165']=0.50;
		}
		elseif($total_petrol==$total_vehicles)
		{
			$air_points['q3a_165']=0.25;
		}
		elseif($total_diesel==$total_vehicles)
		{
			$air_points['q3a_165']=0;
		}else{
		
		$total_vehicles = $total_diesel + $total_petrol + $total_lpg + $total_cng;
		
		$cng_points = ($total_cng/$total_vehicles)*1;
		$lpg_points = ($total_lpg/$total_vehicles)*0.5;
		$petrol_points = ($total_petrol/$total_vehicles)*0.25;
		$points_5 =  $cng_points + $lpg_points + $petrol_points;
		
		$air_points['q3a_165'] = $points_1 + $points_2 + $points_3 + $points_4 + $points_5;
		}
	}	

	

	//Q.4 Please specify how many members of the school community use each type of transport:

	$total_population = $getdata['266617X4X176SQ004_SQ004'];
	// Sustainable Motorized Vehicle (SMV) 
	$total_population_smv = $getdata['266617X4X176SQ001_SQ004'] + $getdata['266617X4X176SQ002_SQ004'] + $getdata['266617X4X176SQ003_SQ004'] + $getdata['266617X4X176SQ0012_SQ004'] + $getdata['266617X4X176SQ005_SQ004'] + $getdata['266617X4X176SQ006_SQ004'];
	//Non polluting mode(NPM)
	$total_population_npm = $getdata['266617X4X176SQ009_SQ004'] + $getdata['266617X4X176SQ010_SQ004'] + $getdata['266617X4X176SQ011_SQ004'];
	
	//Private vehicles population
	$private_veh_population = $getdata['266617X4X176SQ007_SQ004'] + $getdata['266617X4X176SQ008_SQ004'];
	
	$total_smv_npm = $total_population_smv + $total_population_npm; 

 
	if($total_population == $total_smv_npm)
	{
		$air_points['q4_176'] = 4;
	}
	else if($total_population == $private_veh_population)
	{
		$air_points['q4_176'] = 0;
	}else{
		$score1 = ($total_population_smv/$total_population)*4;
		$score2 = ($total_population_npm/$total_population)*4;
		$air_points['q4_176'] = $score1 + $score2;
	}

	$total_air_points=array_sum($air_points);
	
	return $total_air_points;
}


//Energy section Points Calculation.
 
function GetEnergyPoints($token)
{
	//Energy section Points Calculation.
	$query_energy="SELECT 266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X8X237,266617X8X2180SQ013_SQ002,266617X8X2180SQ001_SQ002,266617X8X2180SQ002_SQ002,266617X8X2180SQ003_SQ002,266617X8X2180SQ004_SQ002,266617X8X2180SQ005_SQ002,266617X8X2180SQ006_SQ002,266617X8X2180SQ007_SQ002,266617X8X2180SQ008_SQ002,266617X8X2180SQ009_SQ002,266617X8X2180SQ010_SQ002,266617X8X2180SQ011_SQ002,266617X8X2180SQ014_SQ002,266617X8X2180SQ015_SQ002,266617X8X261 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_energy=mysql_query($query_energy);
	$getdata=mysql_fetch_assoc($query_result_energy);


	$energy_points =array();  
	
	
	$total_population = $getdata['totalpopulation']; //total population of school.
	$total_energy_con_mj = ($getdata['266617X8X2180SQ013_SQ002']/30);  //Total
	//(mj per capita per day)
	$mjprd = $total_energy_con_mj/$total_population; 
	
	$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($mjprd<=46.2)) // condition for Day Scholar school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==2) && ($mjprd<=49.8)) // condition for Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==3) && ($mjprd<=24.6)) // condition for Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==4) && ($mjprd<=48.0)) // condition for Day Scholar + Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==5) && ($mjprd<=46.2)) // condition for Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==6) && ($mjprd<=49.8)) // condition for Day Scholar + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==7) && ($mjprd<=46.2)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	if(!isset($energy_points['q3_1_2180']))
	    $energy_points['q3_1_2180']=0;
 
	/*
	//Q.1 Does your school have access to an electricity bill? if Yes
	//$group_id = 8;
	//$question_number = 237;
	$answer237 = $getdata['266617X8X237'];
	if($answer237 == "Y")
	{
		$energy_points['q1_237'] = 1;    
	}
	*/
	

	//Q2) How much energy does the school derive from each type of energy source? 
	//$group_id = 8;
	//$question_number = 2180;   
	$total_mj = $getdata['266617X8X2180SQ013_SQ002'];  //Total
	
	$answer1 = $getdata['266617X8X2180SQ001_SQ002']; //Electricity from the board (kwh)..
	$points1 = ($answer1/$total_mj) * 2.5;
	

	
    $answer13 = $getdata['266617X8X2180SQ014_SQ002']; //Electricity from generator (diesel) (litres)
	$points13 = ($answer13/$total_mj) * 1.67;
	
	
	$answer2 = $getdata['266617X8X2180SQ002_SQ002']; //Petrol (litres)..
	$points2 = ($answer2/$total_mj) * 1.67;
	
	$answer3 = $getdata['266617X8X2180SQ003_SQ002']; //Diesel..
	$points3 = ($answer3/$total_mj) * 0.83;
	
	$answer4 = $getdata['266617X8X2180SQ004_SQ002']; //CNG (kilogrammes)..
	$points4 = ($answer4/$total_mj) * 3.33;
	
	
	$answer5 = $getdata['266617X8X2180SQ005_SQ002']; //Kerosene (litres)..
	$points5 = ($answer5/$total_mj) * 0.83;
	
	
	$answer6 = $getdata['266617X8X2180SQ006_SQ002']; //Coal (kilogrammes)..
	$points6 = ($answer6/$total_mj) * 0.83;
	
	
	$answer7 = $getdata['266617X8X2180SQ007_SQ002']; //Wood (kilogrammes)..
	$points7 = ($answer7/$total_mj) * 3.33;
	
	
	$answer8 = $getdata['266617X8X2180SQ008_SQ002']; //Animal waste (kilogrammes)..
	$points8 = ($answer8/$total_mj) * 5;

	$answer9 = $getdata['266617X8X2180SQ009_SQ002']; //solar..
	$points9 = ($answer9/$total_mj) * 5;
	
	$answer10 = $getdata['266617X8X2180SQ010_SQ002']; //wind..
	$points10 = ($answer10/$total_mj) * 5;
	
	$answer11 = $getdata['266617X8X2180SQ011_SQ002']; //LPG (kilogrammes)..
	$points11 = ($answer11/$total_mj) * 3.33;
	
	$answer12 = $getdata['266617X8X2180SQ015_SQ002']; //Piped Natural Gas  (kilogrammes)..
	$points12 = ($answer12/$total_mj) * 3.33;
	
	

	$fscore = $points1 + $points2 + $points3 + $points4 + $points5 + $points6 + $points7 + $points8 + $points9 + $points10 + $points11 + $points12 + $points13;
	
	$energy_points['q3_2181'] = $fscore;
	/*
	if(($fscore >= 5))
	{
		$energy_points['q3_2180'] = 5;
	}else{
	$energy_points['q3_2180'] = 0;	
	}*/



	//Q.6) Are there any alternate sources of energy employed/ installed in your school? 
	// $group_id = 8;
	//$question_number = 261;
	$answer261 = $getdata['266617X8X261'];
	if($answer261 == "Y")
	{
		$energy_points['q6_261'] = 1;    
	}else{
		$energy_points['q6_261'] = 0;
	}

	//echo "<pre>";
	//print_r($energy_points);
	
	$total_energy_points=array_sum($energy_points);

	return $total_energy_points;
}




//Energy section Points Calculation.

function GetEnergyPoints_New($token)
{
	//Energy section Points Calculation.
	$query_energy="SELECT 266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X8X237,266617X8X2180SQ013_SQ002,266617X8X2180SQ001_SQ002,266617X8X2180SQ002_SQ002,266617X8X2180SQ003_SQ002,266617X8X2180SQ004_SQ002,266617X8X2180SQ005_SQ002,266617X8X2180SQ006_SQ002,266617X8X2180SQ007_SQ002,266617X8X2180SQ008_SQ002,266617X8X2180SQ009_SQ002,266617X8X2180SQ010_SQ002,266617X8X2180SQ011_SQ002,266617X8X2180SQ014_SQ002,266617X8X2180SQ015_SQ002,266617X8X261 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_energy=mysql_query($query_energy);
	$getdata=mysql_fetch_assoc($query_result_energy);


	$energy_points =array();  
	
	
	$total_population = $getdata['totalpopulation']; //total population of school.
	$total_energy_con_mj = ($getdata['266617X8X2180SQ013_SQ002']/30);  //Total
	//(mj per capita per day)
	$mjprd = $total_energy_con_mj/$total_population; 
	
	$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($mjprd<=46.2)) // condition for Day Scholar school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==2) && ($mjprd<=49.8)) // condition for Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==3) && ($mjprd<=24.6)) // condition for Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==4) && ($mjprd<=48.0)) // condition for Day Scholar + Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==5) && ($mjprd<=46.2)) // condition for Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==6) && ($mjprd<=49.8)) // condition for Day Scholar + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==7) && ($mjprd<=46.2)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	if(!isset($energy_points['q3_1_2180']))
	    $energy_points['q3_1_2180']=0;
 
	/*
	//Q.1 Does your school have access to an electricity bill? if Yes
	//$group_id = 8;
	//$question_number = 237;
	$answer237 = $getdata['266617X8X237'];
	if($answer237 == "Y")
	{
		$energy_points['q1_237'] = 1;    
	}
	*/
	

	//Q2) How much energy does the school derive from each type of energy source? 
	//$group_id = 8;
	//$question_number = 2180;   
	echo "Total MJ:".$total_mj = $getdata['266617X8X2180SQ013_SQ002']."<br>";  //Total
	
	echo "Electricity from the board(mj) :".$answer1 = $getdata['266617X8X2180SQ001_SQ002']."=="; //Electricity from the board (kwh)..
	$points1 = ($answer1/$total_mj) * 2.5;
	
	echo $points1."<br>";
	
		echo "Electricity from generator (mj) :".$answer13 = $getdata['266617X8X2180SQ014_SQ002']."=="; ; //Electricity from generator (diesel) (litres)
	$points13 = ($answer13/$total_mj) * 1.67;
	echo $points13."<br>";
	
	echo "Petrol  (mj) :".$answer2 = $getdata['266617X8X2180SQ002_SQ002']."=="; ; //Petrol (litres)..
	$points2 = ($answer2/$total_mj) * 1.67;
	echo $points2."<br>";
	
	
	
	echo "Diesel  (mj) :".$answer3 = $getdata['266617X8X2180SQ003_SQ002']."=="; ; //Diesel..
	$points3 = ($answer3/$total_mj) * 0.83;
	
	echo $points3."<br>";
	
	echo "CNG  (mj) :".$answer4 = $getdata['266617X8X2180SQ004_SQ002']."=="; ; //CNG (kilogrammes)..
	$points4 = ($answer4/$total_mj) * 3.33;
	echo $points4."<br>";
	
	echo "Kerosene  (mj) :".$answer5 = $getdata['266617X8X2180SQ005_SQ002']."=="; ; //Kerosene (litres)..
	$points5 = ($answer5/$total_mj) * 0.83;
	echo $points5."<br>";
	
	echo "Coal  (mj) :".$answer6 = $getdata['266617X8X2180SQ006_SQ002']."=="; ; //Coal (kilogrammes)..
	$points6 = ($answer6/$total_mj) * 0.83;
	echo $points6."<br>";
	
	echo "Wood  (mj) :".$answer7 = $getdata['266617X8X2180SQ007_SQ002']."=="; ; //Wood (kilogrammes)..
	$points7 = ($answer7/$total_mj) * 3.33;
	echo $points7."<br>";
	
	echo "Animal  (mj) :".$answer8 = $getdata['266617X8X2180SQ008_SQ002']."=="; ; //Animal waste (kilogrammes)..
	$points8 = ($answer8/$total_mj) * 5;
	echo $points8."<br>";
	echo "solar  (mj) :".$answer9 = $getdata['266617X8X2180SQ009_SQ002']."=="; ; //solar..
	$points9 = ($answer9/$total_mj) * 5;
	echo $points9."<br>";
	echo "wind  (mj) :".$answer10 = $getdata['266617X8X2180SQ010_SQ002']."=="; ; //wind..
	$points10 = ($answer10/$total_mj) * 5;
	echo $points10."<br>";
	echo "LPG  (mj) :".$answer11 = $getdata['266617X8X2180SQ011_SQ002']."=="; ; //LPG (kilogrammes)..
	$points11 = ($answer11/$total_mj) * 3.33;
	echo $points11."<br>";
	echo "PNG  (mj) :".$answer12 = $getdata['266617X8X2180SQ015_SQ002']."=="; ; //Piped Natural Gas  (kilogrammes)..
	$points12 = ($answer12/$total_mj) * 3.33;
	echo $points12."<br>";
	

	
	
	
	//266617X8X2180SQ015_SQ002 ,266617X8X2180SQ014_SQ002
	
	$fscore = $points1 + $points2 + $points3 + $points4 + $points5 + $points6 + $points7 + $points8 + $points9 + $points10 + $points11 + $points12 + $points13;
	
	$energy_points['q3_2181'] = $fscore;
	/*
	if(($fscore >= 5))
	{
		$energy_points['q3_2180'] = 5;
	}else{
	$energy_points['q3_2180'] = 0;	
	}*/



	//Q.6) Are there any alternate sources of energy employed/ installed in your school? 
	// $group_id = 8;
	//$question_number = 261;
	$answer261 = $getdata['266617X8X261'];
	if($answer261 == "Y")
	{
		$energy_points['q6_261'] = 1;    
	}else{
		$energy_points['q6_261'] = 0;
	}

	//echo "<pre>";
	//print_r($energy_points);
	
	$total_energy_points=array_sum($energy_points);

	return $total_energy_points;
}






// Food  Section Points Calculation. group id 36.


function GetFoodPoints($token)
{
	
	//Food  Section Points Calculation. group id 36.
	
	$query_food="SELECT 266617X36X1871SQ001_SQ002,266617X36X1871SQ002_SQ002,266617X36X1871SQ003_SQ002,266617X36X1871SQ004_SQ002,266617X36X1871SQ005_SQ002,266617X36X1871SQ006_SQ002,266617X36X1871SQ007_SQ002,266617X36X1871SQ008_SQ002,266617X36X1871SQ009_SQ002 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_food=mysql_query($query_food);
	$getdata=mysql_fetch_assoc($query_result_food);
	
	//Q.3 What kind of food is being served/sold in your school?                            
	 
	$food_points =array(); 
	$packageditem=$getdata['266617X36X1871SQ001_SQ002']+$getdata['266617X36X1871SQ002_SQ002']+$getdata['266617X36X1871SQ003_SQ002']+ $getdata['266617X36X1871SQ004_SQ002']+$getdata['266617X36X1871SQ005_SQ002']+$getdata['266617X36X1871SQ006_SQ002']+$getdata['266617X36X1871SQ007_SQ002']+$getdata['266617X36X1871SQ008_SQ002']+$getdata['266617X36X1871SQ009_SQ002'];
	
	if($packageditem =="" || $packageditem<1)
	{ 
		$food_points['q3_1871'] = 2;   
	}else{
		$food_points['q3_1871'] = 0;  
	}

	$total_food_points=array_sum($food_points);
	
	return $total_food_points;
}


//Land Section Point Calculation.
function GetLandPoints($token)
{

	$query_land="SELECT 266617X7X1810SQ010_SQ002,266617X7X1810SQ002_SQ002,266617X7X1810SQ012_SQ002,266617X7X196,266617X7X1810SQ006_SQ002 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_land=mysql_query($query_land);
	$getdata=mysql_fetch_assoc($query_result_land);

	$land_points =array();  
	
	//Task 2: Measure the four critical areas of your school campus
	//Q.1 Total Green Cover 
	
	$total_site_area = $getdata['266617X7X1810SQ010_SQ002'];
	
	//Green landscaped area on-ground + Green cover on exposed roof & terrace + Play area that has grass on ground
    $total_green_cover_area = $getdata['266617X7X1810SQ002_SQ002'] + $getdata['266617X7X1810SQ012_SQ002'] + $getdata['266617X7X1810SQ006_SQ002'];
	 
	 /*
	 $green_cover_perc =number_format((($total_green_cover_area/$total_site_area)*100),2);
	
	if($green_cover_perc >=33)
	{
		$land_points['q1_1810'] = 5;
	}
	else
	{
		//$calculation = $total_site_area*0.33;
		//$Lowpoints = ($total_green_cover_area/$calculation)*5;
		$land_points['q1_1810'] = ($green_cover_perc/33)*5;

	}
	*/
	
	$RequiredGreenArea_per =(($total_site_area*33)/100);
	 
	// echo "<br>Green Cover %: ".$green_cover_perc =number_format((($total_green_cover_area/$total_site_area)*100),2);

	if($total_green_cover_area >= $RequiredGreenArea_per)
	{
		$land_points['q1_1810'] = 5;
	}
	else
	{
		//$calculation = $total_site_area*0.33;
		//$Lowpoints = ($total_green_cover_area/$calculation)*5;
		$land_points['q1_1810'] = ($total_green_cover_area/$RequiredGreenArea_per)*5;

	}
	
	
	
	//4) Do you use chemical based pesticides in your school green cover? Yes/No
	
	$answer196 = $getdata['266617X7X196'];
	if($answer196 == "N" && $total_green_cover_area!=0)
	{
		$land_points['q4_196'] = 1;    
	}else{
		$land_points['q4_196'] = 0;
	}

	
	//echo "<pre>";
	//print_r($land_points);
	
	$total_land_points=array_sum($land_points);
	
	return $total_land_points;
	
	
}




//Land Section Point Calculation.
function GetLandPoints_new($token)
{

	$query_land="SELECT 266617X7X1810SQ010_SQ002,266617X7X1810SQ002_SQ002,266617X7X1810SQ012_SQ002,266617X7X196,266617X7X1810SQ006_SQ002 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_land=mysql_query($query_land);
	$getdata=mysql_fetch_assoc($query_result_land);

	$land_points =array();  
	
	//Task 2: Measure the four critical areas of your school campus
	//Q.1 Total Green Cover 
	 
	 
	echo "Total Site Area:".$total_site_area = $getdata['266617X7X1810SQ010_SQ002']."<br>";
	
	echo "Green landscaped area on-ground:".$getdata['266617X7X1810SQ002_SQ002']."<br>";
	echo "Green cover on exposed roof & terrace:".$getdata['266617X7X1810SQ012_SQ002']."<br>";
	echo "Play area that has grass on ground:".$getdata['266617X7X1810SQ006_SQ002']."<br>";
	//Green landscaped area on-ground + Green cover on exposed roof & terrace + Play area that has grass on ground
    echo "Total Green Cover:".$total_green_cover_area = $getdata['266617X7X1810SQ002_SQ002'] + $getdata['266617X7X1810SQ012_SQ002'] + $getdata['266617X7X1810SQ006_SQ002'];
	 
	 $RequiredGreenArea_per =(($total_site_area*33)/100);
	 
	// echo "<br>Green Cover %: ".$green_cover_perc =number_format((($total_green_cover_area/$total_site_area)*100),2);
	echo "<br>";
	if($total_green_cover_area >= $RequiredGreenArea_per)
	{
		$land_points['q1_1810'] = 5;
	}
	else
	{
		//$calculation = $total_site_area*0.33;
		//$Lowpoints = ($total_green_cover_area/$calculation)*5;
		$land_points['q1_1810'] = ($total_green_cover_area/$RequiredGreenArea_per)*5;

	}
	
	echo "Green cover Points:".number_format($land_points['q1_1810'],2)."<br>";
	
	//4) Do you use chemical based pesticides in your school green cover? Yes/No
	
	$answer196 = $getdata['266617X7X196'];
	if($answer196 == "N" && $total_green_cover_area!=0)
	{
		$land_points['q4_196'] = 1;    
	}else{
		$land_points['q4_196'] = 0;
	}
	
	echo "Pesticides points:".$land_points['q4_196']."<br>";
	
	//echo "<pre>";
	//print_r($land_points);
	
	$total_land_points=array_sum($land_points);
	
	return $total_land_points;
	
}





//Water points1

function GetWaterPoints($token)
{

	//START WATER SECTION QUESTIONS POINTS CALCULATION.
	
	$query="SELECT token,266617X37X1883SQ010_SQ001,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X37X1884SQ001,266617X37X1884SQ002,266617X37X1884SQ003,266617X37X1884SQ004,266617X37X2320SQ003,266617X37X2320SQ004,266617X37X2320SQ005,266617X37X2320SQ006,266617X37X2320SQ008,266617X37X2320SQ009,266617X37X2320SQ010,266617X37X1900,266617X37X2354,266617X37X2376,266617X37X2396,266617X37X2398,266617X37X2400,266617X37X2337SQ001,266617X37X2337SQ004,266617X37X2337SQ005,266617X37X2337SQ006,266617X37X2337SQ007,266617X37X2337SQ008,266617X37X2349,266617X37X2350,266617X37X2351,266617X37X2332,266617X37X1893,266617X37X2346,266617X37X1894,266617X37X1896SQ005_SQ004,266617X37X1895,266617X37X2347,266617X37X2654,266617X37X26551,266617X37X26552,266617X37X26553,266617X37X2355 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result=mysql_query($query);
	$getdata=mysql_fetch_assoc($query_result);

	
	//Question 1.: Calculate your school’s water consumption, per activity:	(7 points)
	$water_points =array();  
	$answer1883 = $getdata['266617X37X1883SQ010_SQ001']; // total water consumption
	$total_population = $getdata['totalpopulation']; //total population of school.
	
	//(liters per capita per day)
	$lpcd = $answer1883/$total_population; 
	
	$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($lpcd>=13 && $lpcd<=17)) // condition for Day Scholar school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==2) && ($lpcd>=15 && $lpcd<=25)) // condition for Day Boarding school.
	{
		$water_points['q1_1883']=7;
	} 
	else if(($school_type==3) && ($lpcd>=125 && $lpcd<=135)) // condition for Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==4) && ($lpcd>=14 && $lpcd<=21)) // condition for Day Scholar + Day Boarding school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==5) && ($lpcd>=70 && $lpcd<=80)) // condition for Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==6) && ($lpcd>=50 && $lpcd<=76)) // condition for Day Scholar + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==7) && ($lpcd>=51 && $lpcd<=59)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}else{
		$water_points['q1_1883']=0;
	}
	
	
	
	//Q.2: Where does the water your school uses, come from? (please tick the correct options):
	$Groundwater=$getdata['266617X37X1884SQ001'];
	$Surfacewater=$getdata['266617X37X1884SQ002'];
	$Rainwater=$getdata['266617X37X1884SQ003'];
	$Recycledwastewater=$getdata['266617X37X1884SQ004'];
	
	
	
	$harvestrainwater6b=$getdata['266617X37X2355'];
	

	if($Surfacewater=="Y" && $Rainwater=="Y" && $Recycledwastewater=="Y")
	{
		$water_points['q2_1884']=4;
	}
	else if(($Surfacewater=="Y" && $Rainwater=="Y") ||  ($Surfacewater=="Y" && $Recycledwastewater=="Y") || ($Rainwater=="Y" && $Recycledwastewater=="Y"))
	{
	$water_points['q2_1884']=2; 
	
	}else if ($Surfacewater=="Y" || $Rainwater=="Y" || $Recycledwastewater=="Y"){
		$water_points['q2_1884']=1; 
	}
	else if($Groundwater=="Y" && $harvestrainwater6b=="A2" && $harvestrainwater6b=="A3" )
	{
		$water_points['q2_1884']=1;
	}
	else if($Surfacewater=="Y" && $harvestrainwater6b=="A2" && $harvestrainwater6b=="A3" )
	{
		$water_points['q2_1884']=1;
	}
	else{
		$water_points['q2_1884']=0;	
	}

	


	//Q.5: What are the water conservation practices your school follows

	$tanksintheschool =$getdata['266617X37X2320SQ003']; //Do all tanks in the school have float valves installed to stop overflow?
	$drinkingwaterpoints=$getdata['266617X37X2320SQ004']; //Do the drinking water points have spill proof taps to check overflow?
	$appliancesquickwash=$getdata['266617X37X2320SQ005']; //Does your school use appliances with a quick-wash setting?
	$flushsystems=$getdata['266617X37X2320SQ006']; //Are dual flush systems installed in the toilets?
	$growlocalplant=$getdata['266617X37X2320SQ008']; //Does your school grow local plant species which require limited amount of water to grow?
	$conservation=$getdata['266617X37X2320SQ009']; //Has your school initiated any water conservation steps in the school or outside, in the past one year?	
	$irrigation=$getdata['266617X37X2320SQ010']; //Does your school use a drip or irrigation system?

	
	if($tanksintheschool=="A1")
	{
		$water_points['q5_2320_1']=1; 
	}else{
		$water_points['q5_2320_1']=0;
	}
	if($drinkingwaterpoints=="A1")
	{
		$water_points['q5_2320_2']=1; 
	}else{
		$water_points['q5_2320_2']=0;
	}
	if($appliancesquickwash=="A1")
	{
		$water_points['q5_2320_3']=1; 
	}else{
		$water_points['q5_2320_3']=0;
	}
	if($flushsystems=="A1")
	{
		$water_points['q5_2320_4']=1; 
	}else{
		$water_points['q5_2320_4']=0;
	}
	if($growlocalplant=="A1")
	{
		$water_points['q5_2320_5']=1; 
	}else{
		$water_points['q5_2320_5']=0;
	}
	if($conservation=="A1")
	{
		$water_points['q5_2320_6']=1; 
	}else{
		$water_points['q5_2320_6']=0;
	}
	if($irrigation=="A1")
	{
		$water_points['q5_2320_7']=1; 
	}else{
		$water_points['q5_2320_7']=0;
	}
	
	$wcpoints=$water_points['q5_2320_1']+$water_points['q5_2320_2']+$water_points['q5_2320_3']+$water_points['q5_2320_4']+$water_points['q5_2320_5']+$water_points['q5_2320_6']+$water_points['q5_2320_7'];
	

	//Q6. Do you have Rainwater harvesting (RWH) system in your school?

	$Rainwater_harvesting=$getdata['266617X37X1900'];

	if($Rainwater_harvesting=="Y")
	{
		$water_points['q6_1900']=2; 
	}else{
		$water_points['q6_1900']=0;
	}
	
	

	//Q.6(a)(1) Which is the catchment area being harvested by your school?
	$harbyschool=$getdata['266617X37X2354'];
	
	if($harbyschool=="A1" || $harbyschool=="A2" || $harbyschool=="A3" || $harbyschool=="A4" || $harbyschool=="A5" || $harbyschool=="A6")
	{
		$water_points['q6a1_2354']=2;
	}else if($harbyschool=="A7")
	{
		$water_points['q6a1_2354']=4;
	}else{
		$water_points['q6a1_2354']=0;
	}

	

	//Q6(c). How much area in your school is harvested? //10 points
	$school_harvested_area=$getdata['266617X37X2376'];
	if($school_harvested_area==7 || $school_harvested_area==8 || $school_harvested_area==9)
	{
		$water_points['q6c_2376']=10;
		
	}else if($school_harvested_area==5 || $school_harvested_area==6)
	{
		$water_points['q6c_2376']=8;
		
	}else if($school_harvested_area==4)
	{
		$water_points['q6c_2376']=6;
	}
	else if($school_harvested_area==3)
	{
		$water_points['q6c_2376']=4;
	}
	else if($school_harvested_area==1 || $school_harvested_area==2)
	{
		$water_points['q6c_2376']=2;
	}else{
		$water_points['q6c_2376']=0;
	}

	
	//Q.6(e) Rate your catchment on cleanliness:
	$cleanliness=$getdata['266617X37X2396'];
	if($cleanliness==1) 
	{
		$water_points['q6e_2396']=3; //good
		
	}else if($cleanliness==2)
	{
		$water_points['q6e_2396']=1; //Average
	}else{
		$water_points['q6e_2396']=0; //Poor
	}
	
	
	//Q.6(f) Does your school clean your catchment and system (structure?)?
	$catchmentsystem=$getdata['266617X37X2398'];	  
	if($catchmentsystem=="Y")
	{
		$water_points['q6f_2398']=2; //If answer to above question is Yes, then your school will get 2 points.
	}else{
		$water_points['q6f_2398']=0;
	}	 

	
	//Q.6(g). Does your school monitor the rainwater harvesting structure for its efficiency?
	$harvesting_structure=$getdata['266617X37X2400'];
	if($harvesting_structure=="Y")
	{
		$water_points['q6f_2400']=1;
	}else{
		$water_points['q6f_2400']=0;
	}
	
	
	
	

		//Q.6(g)(1). Please specify when does your school monitor the groundwater level?
	//$groundwater_level_monitoring=$getdata['266617X37X2401'];
	//if($groundwater_level_monitoring==1 || $groundwater_level_monitoring==2)
	//{
	//	$water_points['q6g1_2399']=1;
	//}else{
	//	$water_points['q6g1_2399']=0;
	//} 
	
	//echo "<br>Groundwater level monitoring Points: ".$water_points['q6g1_2399'];
	
	
	//Q.7: Please share details about sanitation and hygiene practices in your school. //6 points
	
	$separate_toilets=$getdata['266617X37X2337SQ001']; //Does the school have separate toilets for males and females?
	$toilets_accessible=$getdata['266617X37X2337SQ004'];
	$differently_abled_children =$getdata['266617X37X2337SQ005'];
	$teaching_toilets=$getdata['266617X37X2337SQ006'];
	$non_teaching_toilets=$getdata['266617X37X2337SQ007'];
	$safety_toilets=$getdata['266617X37X2337SQ008'];
	if($separate_toilets=="A1")
	{
		$water_points['q7_2337_01']=1;
	}else{
		$water_points['q7_2337_01']=0;	
	}
	if($toilets_accessible=="A1")
	{
		$water_points['q7_2337_02']=1;
	}else{
		$water_points['q7_2337_02']=0;	
	}
	if($differently_abled_children=="A1")
	{
		$water_points['q7_2337_03']=1;
	}else{
		$water_points['q7_2337_03']=0;	
	}
	if($teaching_toilets=="A1")
	{
		$water_points['q7_2337_04']=1;
	}else{
		$water_points['q7_2337_04']=0;	
	}
	if($non_teaching_toilets=="A1")
	{
		$water_points['q7_2337_05']=1;
	}else{
		$water_points['q7_2337_05']=0;	
	}
	if($safety_toilets=="A1")
	{
		$water_points['q7_2337_06']=1;
	}else{
		$water_points['q7_2337_06']=0;	
	}

	$totalhygienepoints=$water_points['q7_2337_01']+$water_points['q7_2337_02']+$water_points['q7_2337_03']+$water_points['q7_2337_04']+$water_points['q7_2337_05']+$water_points['q7_2337_06'];
	
	
	
	
	//Q.8 How many drinking water taps do you have?
//if($drinking_water_taps_8!=""){
//	$drinking_water_taps_8=$getdata['266617X37X1893'];
//	$Load_for_drinking_water_tap=$total_population/$drinking_water_taps_8;
//
//	if($Load_for_drinking_water_tap<=50 && $drinking_water_taps_8!="" && $drinking_water_taps_8!=0)
//	{
//		$water_points['q8_1893']=1;	
//	}else{
//		$water_points['q8_1893']=0;	
//	}
//
//}
	//Q.9 How many hand pumps do you have?

	$hand_pumps=$getdata['266617X37X2346'];
	//$Load_for_hand_pumps=$total_population/$hand_pumps;

	if($hand_pumps<=1) //Ref not provided in table
	{
		$water_points['q9_2346']=1;	
	}else{
		$water_points['q9_2346']=0;
	}
	
	

	//Q.10 How many ablution taps (taps used for washing hands only) do you have?
	$ablution_taps_q10=$getdata['266617X37X1894'];
	
if($ablution_taps_q10!="")	{
	$Load_for_ablution_taps=$total_population/$ablution_taps_q10;

	if($Load_for_ablution_taps<=50 && $ablution_taps_q10!="" && $ablution_taps_q10!=0)
	{
		$water_points['q10_1894']=1;	
	}else{
		$water_points['q10_1894']=0;	
	}
}
	
	
	//Q.11 How many water closets (used for defecation and urination) do you have?
  
	
	$water_closets_q11=$getdata['266617X37X1896SQ005_SQ004'];
	if($water_closets_q11!=""){
	$Load_for_water_closets=$total_population/$water_closets_q11;

	if($school_type==1 && $Load_for_water_closets<=45 && $water_closets_q11!="" && $water_closets_q11!=0) //school type Day Scholar
	{
		$water_points['q11_1896']=1;	
	}else if($school_type==2 && $Load_for_water_closets<=35 && $water_closets_q11!="" && $water_closets_q11!=0) //Day Boarding 
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==3 && $Load_for_water_closets<=25 && $water_closets_q11!="" && $water_closets_q11!=0) //Residential 
	{
		$water_points['q11_1896']=1;	
	}
	else if($school_type==4 && $Load_for_water_closets<=40 && $water_closets_q11!="" && $water_closets_q11!=0) //Day Scholar + Day Boarding
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==5 && $Load_for_water_closets<=30 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Boarding + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==6 && $Load_for_water_closets<=35 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Scholar + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==7 && $Load_for_water_closets<=25 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q11_1896']=1;	
	}
	else {
	$water_points['q11_1896']=0;
	}
}



	//Q.12 How many urinals (strictly used for urination only) do you have?

	$water_urinals_q12=$getdata['266617X37X1895'];
	if($water_urinals_q12!=""){
	$Load_for_urinals=$total_population/$water_urinals_q12;


	if($school_type==1 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0) //school type Day Scholar
	{
		$water_points['q12_1895']=1;	
	}else if($school_type==2 && $Load_for_urinals<=40 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Day Boarding 
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==3 && $Load_for_urinals<=30 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Residential 
	{
		$water_points['q12_1895']=1;	
	}
	else if($school_type==4 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Day Scholar + Day Boarding
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==5 && $Load_for_urinals<=35 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Boarding + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==6 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Scholar + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==7 && $Load_for_urinals<=30 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q12_1895']=1;	
	}
}
	if(!isset($water_points['q12_1895']))
	$water_points['q12_1895']=0;



	//Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )

	$other_water_outlets_q13=$getdata['266617X37X2347'];
	//$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;

	if($other_water_outlets_q13<=1) //not provided by cse
	{
		$water_points['q13_2347']=1;	
	}else{
		$water_points['q13_2347']=0;	
	}

	

	//Q.14 Is there a water storage system in place to supply water in the toilets? ( 1 Points )

	$supply_water_in_toilets=$getdata['266617X37X2349'];
	if($supply_water_in_toilets=="Y")
	{
		$water_points['q14_2349']=1;
	}else{
		$water_points['q14_2349']=0;
	}

	
	
	// Q.15. Is the water supply sufficient?  ( 1 Points )
	$supply_sufficient=$getdata['266617X37X2350'];
	if($supply_sufficient=="Y")
	{
		$water_points['q15_2350']=1;	
	}else{
		$water_points['q15_2350']=0;	
	}
	
	

	//Q.16. Are the toilets cleaned? Yes. ( 1 Points )
	$toilets_cleaned=$getdata['266617X37X2351'];
	if($toilets_cleaned=="Y")
	{
		$water_points['q16_2351']=1;	
	}else{
		$water_points['q16_2351']=0;
	}
	
	
	
	//Q.17. Does your school treat wastewater? ( 5 Points )
	$treat_wastewater=$getdata['266617X37X2332'];
	if($treat_wastewater=="Y")
	{
		$water_points['q17_2332']=5;	
	}else{
		$water_points['q17_2332']=0;
	}
	
	
	
	//Q.18. Does your school reuse the treated wastewater? ( 5 Points )
	//If Yes
//Q.18.(a). How does your school reuse wastewater? (Multiple Choice)
//If yes, and Q18(a) is answered,  your school gets five points

 $reusewastewater=$getdata['266617X37X2654'];

 if($reusewastewater=="Y" && ($getdata['266617X37X26551']!="" || $getdata['266617X37X26552']!="" || $getdata['266617X37X26553']!=""))
 {	 
    $water_points['q18_2654']=5;	
 }else{
   $water_points['q18_2654']=0;
	}
	
	

	//echo "<pre>";
	//print_r($water_points);

	$total_water_points=array_sum($water_points);

	return $total_water_points;
	
}





function GetWaterPoints_new($token)
{

	//START WATER SECTION QUESTIONS POINTS CALCULATION.
	
	$query="SELECT token,266617X37X1883SQ010_SQ001,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X37X1884SQ001,266617X37X1884SQ002,266617X37X1884SQ003,266617X37X1884SQ004,266617X37X2320SQ003,266617X37X2320SQ004,266617X37X2320SQ005,266617X37X2320SQ006,266617X37X2320SQ008,266617X37X2320SQ009,266617X37X2320SQ010,266617X37X1900,266617X37X2354,266617X37X2376,266617X37X2396,266617X37X2398,266617X37X2400,266617X37X2337SQ001,266617X37X2337SQ004,266617X37X2337SQ005,266617X37X2337SQ006,266617X37X2337SQ007,266617X37X2337SQ008,266617X37X2349,266617X37X2350,266617X37X2351,266617X37X2332,266617X37X1893,266617X37X2346,266617X37X1894,266617X37X1896SQ005_SQ004,266617X37X1895,266617X37X2347,266617X37X2654,266617X37X26551,266617X37X26552,266617X37X26553,266617X37X2355 FROM lime_survey_266617 WHERE  token='$token'";
	$query_result=mysql_query($query);
	$getdata=mysql_fetch_assoc($query_result);

	
	//Question 1.: Calculate your school’s water consumption, per activity:	(7 points)
	$water_points =array();  
	$answer1883 = $getdata['266617X37X1883SQ010_SQ001']; // total water consumption
	$total_population = $getdata['totalpopulation']; //total population of school.
	
	//(liters per capita per day)
	echo "Per capita per day: ".$lpcd = $answer1883/$total_population; 
	
	echo "<br>School Type: ".$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($lpcd>=13 && $lpcd<=17)) // condition for Day Scholar school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==2) && ($lpcd>=15 && $lpcd<=25)) // condition for Day Boarding school.
	{
		$water_points['q1_1883']=7;
	} 
	else if(($school_type==3) && ($lpcd>=125 && $lpcd<=135)) // condition for Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==4) && ($lpcd>=14 && $lpcd<=21)) // condition for Day Scholar + Day Boarding school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==5) && ($lpcd>=70 && $lpcd<=80)) // condition for Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==6) && ($lpcd>=50 && $lpcd<=76)) // condition for Day Scholar + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==7) && ($lpcd>=51 && $lpcd<=59)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}else{
		$water_points['q1_1883']=0;
	}
	
	echo "<br>Per Capita Points: ".$water_points['q1_1883'];
	
	//Q.2: Where does the water your school uses, come from? (please tick the correct options):
	$Groundwater=$getdata['266617X37X1884SQ001'];
	$Surfacewater=$getdata['266617X37X1884SQ002'];
	$Rainwater=$getdata['266617X37X1884SQ003'];
	$Recycledwastewater=$getdata['266617X37X1884SQ004'];
	
	
	
	$harvestrainwater6b=$getdata['266617X37X2355'];
	

	if($Surfacewater=="Y" && $Rainwater=="Y" && $Recycledwastewater=="Y")
	{
		$water_points['q2_1884']=4;
	}
	else if(($Surfacewater=="Y" && $Rainwater=="Y") ||  ($Surfacewater=="Y" && $Recycledwastewater=="Y") || ($Rainwater=="Y" && $Recycledwastewater=="Y"))
	{
	$water_points['q2_1884']=2; 
	
	}else if ($Surfacewater=="Y" || $Rainwater=="Y" || $Recycledwastewater=="Y"){
		$water_points['q2_1884']=1; 
	}
	else if($Groundwater=="Y" && $harvestrainwater6b=="A2" && $harvestrainwater6b=="A3" )
	{
		$water_points['q2_1884']=1;
	}
	else if($Surfacewater=="Y" && $harvestrainwater6b=="A2" && $harvestrainwater6b=="A3" )
	{
		$water_points['q2_1884']=1;
	}
	else{
		$water_points['q2_1884']=0;	
	}

	echo "<br>Water Sources Points: ".$water_points['q2_1884'];


	//Q.5: What are the water conservation practices your school follows

	$tanksintheschool =$getdata['266617X37X2320SQ003']; //Do all tanks in the school have float valves installed to stop overflow?
	$drinkingwaterpoints=$getdata['266617X37X2320SQ004']; //Do the drinking water points have spill proof taps to check overflow?
	$appliancesquickwash=$getdata['266617X37X2320SQ005']; //Does your school use appliances with a quick-wash setting?
	$flushsystems=$getdata['266617X37X2320SQ006']; //Are dual flush systems installed in the toilets?
	$growlocalplant=$getdata['266617X37X2320SQ008']; //Does your school grow local plant species which require limited amount of water to grow?
	$conservation=$getdata['266617X37X2320SQ009']; //Has your school initiated any water conservation steps in the school or outside, in the past one year?	
	$irrigation=$getdata['266617X37X2320SQ010']; //Does your school use a drip or irrigation system?

	
	if($tanksintheschool=="A1")
	{
		$water_points['q5_2320_1']=1; 
	}else{
		$water_points['q5_2320_1']=0;
	}
	if($drinkingwaterpoints=="A1")
	{
		$water_points['q5_2320_2']=1; 
	}else{
		$water_points['q5_2320_2']=0;
	}
	if($appliancesquickwash=="A1")
	{
		$water_points['q5_2320_3']=1; 
	}else{
		$water_points['q5_2320_3']=0;
	}
	if($flushsystems=="A1")
	{
		$water_points['q5_2320_4']=1; 
	}else{
		$water_points['q5_2320_4']=0;
	}
	if($growlocalplant=="A1")
	{
		$water_points['q5_2320_5']=1; 
	}else{
		$water_points['q5_2320_5']=0;
	}
	if($conservation=="A1")
	{
		$water_points['q5_2320_6']=1; 
	}else{
		$water_points['q5_2320_6']=0;
	}
	if($irrigation=="A1")
	{
		$water_points['q5_2320_7']=1; 
	}else{
		$water_points['q5_2320_7']=0;
	}
	
	$wcpoints=$water_points['q5_2320_1']+$water_points['q5_2320_2']+$water_points['q5_2320_3']+$water_points['q5_2320_4']+$water_points['q5_2320_5']+$water_points['q5_2320_6']+$water_points['q5_2320_7'];
	echo "<br>Water conservation Points: ".$wcpoints;

	//Q6. Do you have Rainwater harvesting (RWH) system in your school?

	$Rainwater_harvesting=$getdata['266617X37X1900'];

	if($Rainwater_harvesting=="Y")
	{
		$water_points['q6_1900']=2; 
	}else{
		$water_points['q6_1900']=0;
	}
	
	echo "<br>Rainwater harvesting points: ".$water_points['q6_1900'];

	//Q.6(a)(1) Which is the catchment area being harvested by your school?
	$harbyschool=$getdata['266617X37X2354'];
	if($harbyschool=="A1" || $harbyschool=="A2" || $harbyschool=="A3" || $harbyschool=="A4" || $harbyschool=="A5" || $harbyschool=="A6")
	{
		$water_points['q6a1_2354']=2;
	}else if($harbyschool=="A7")
	{
		$water_points['q6a1_2354']=4;
	}else{
		$water_points['q6a1_2354']=0;
	}
	echo "<br>Catchment area being harvested Points: ".$water_points['q6a1_2354'];

	//Q6(c). How much area in your school is harvested? //10 points
	$school_harvested_area=$getdata['266617X37X2376'];
	if($school_harvested_area==7 || $school_harvested_area==8 || $school_harvested_area==9)
	{
		$water_points['q6c_2376']=10;
		
	}else if($school_harvested_area==5 || $school_harvested_area==6)
	{
		$water_points['q6c_2376']=8;
		
	}else if($school_harvested_area==4)
	{
		$water_points['q6c_2376']=6;
	}
	else if($school_harvested_area==3)
	{
		$water_points['q6c_2376']=4;
	}
	else if($school_harvested_area==1 || $school_harvested_area==2)
	{
		$water_points['q6c_2376']=2;
	}else{
		$water_points['q6c_2376']=0;
	}

	echo "<br>Harvested area Points: ".$water_points['q6c_2376'];


	//Q.6(e) Rate your catchment on cleanliness:
	$cleanliness=$getdata['266617X37X2396'];
	if($cleanliness==1) 
	{
		$water_points['q6e_2396']=3; //good
		
	}else if($cleanliness==2)
	{
		$water_points['q6e_2396']=1; //Average
	}else{
		$water_points['q6e_2396']=0; //Poor
	}
	echo "<br>Catchment cleanliness Points: ".$water_points['q6e_2396'];
	
	//Q.6(f) Does your school clean your catchment and system (structure?)?
	$catchmentsystem=$getdata['266617X37X2398'];	  
	if($catchmentsystem=="Y")
	{
		$water_points['q6f_2398']=2; //If answer to above question is Yes, then your school will get 2 points.
	}else{
		$water_points['q6f_2398']=0;
	}	 
echo "<br>Catchment cleaning Points: ".$water_points['q6f_2398'];
	
	//Q.6(g). Does your school monitor the rainwater harvesting structure for its efficiency?
	$harvesting_structure=$getdata['266617X37X2400'];
	if($harvesting_structure=="Y")
	{
		$water_points['q6f_2400']=1;
	}else{
		$water_points['q6f_2400']=0;
	}
	
	echo "<br>RWH efficiency monitoring points: ".$water_points['q6f_2400'];
	
	

		//Q.6(g)(1). Please specify when does your school monitor the groundwater level?
	//$groundwater_level_monitoring=$getdata['266617X37X2401'];
	//if($groundwater_level_monitoring==1 || $groundwater_level_monitoring==2)
	//{
	//	$water_points['q6g1_2399']=1;
	//}else{
	//	$water_points['q6g1_2399']=0;
	//} 
	
	//echo "<br>Groundwater level monitoring Points: ".$water_points['q6g1_2399'];
	
	
	//Q.7: Please share details about sanitation and hygiene practices in your school. //6 points
	
	$separate_toilets=$getdata['266617X37X2337SQ001']; //Does the school have separate toilets for males and females?
	$toilets_accessible=$getdata['266617X37X2337SQ004'];
	$differently_abled_children =$getdata['266617X37X2337SQ005'];
	$teaching_toilets=$getdata['266617X37X2337SQ006'];
	$non_teaching_toilets=$getdata['266617X37X2337SQ007'];
	$safety_toilets=$getdata['266617X37X2337SQ008'];
	if($separate_toilets=="A1")
	{
		$water_points['q7_2337_01']=1;
	}else{
		$water_points['q7_2337_01']=0;	
	}
	if($toilets_accessible=="A1")
	{
		$water_points['q7_2337_02']=1;
	}else{
		$water_points['q7_2337_02']=0;	
	}
	if($differently_abled_children=="A1")
	{
		$water_points['q7_2337_03']=1;
	}else{
		$water_points['q7_2337_03']=0;	
	}
	if($teaching_toilets=="A1")
	{
		$water_points['q7_2337_04']=1;
	}else{
		$water_points['q7_2337_04']=0;	
	}
	if($non_teaching_toilets=="A1")
	{
		$water_points['q7_2337_05']=1;
	}else{
		$water_points['q7_2337_05']=0;	
	}
	if($safety_toilets=="A1")
	{
		$water_points['q7_2337_06']=1;
	}else{
		$water_points['q7_2337_06']=0;	
	}

	$totalhygienepoints=$water_points['q7_2337_01']+$water_points['q7_2337_02']+$water_points['q7_2337_03']+$water_points['q7_2337_04']+$water_points['q7_2337_05']+$water_points['q7_2337_06'];
	
	echo "<br>Sanitation and hygiene practices points: ".$totalhygienepoints;
	
	
	//Q.8 How many drinking water taps do you have?

	$drinking_water_taps_8=$getdata['266617X37X1893'];
	$Load_for_drinking_water_tap=$total_population/$drinking_water_taps_8;

	if($Load_for_drinking_water_tap<=50 && $drinking_water_taps_8!="" && $drinking_water_taps_8!=0)
	{
		$water_points['q8_1893']=1;	
	}else{
		$water_points['q8_1893']=0;	
	}

	echo "<br>Drinking water taps points: ".$water_points['q8_1893'];
	
	//Q.9 How many hand pumps do you have?

	$hand_pumps=$getdata['266617X37X2346'];
	//$Load_for_hand_pumps=$total_population/$hand_pumps;

	if($hand_pumps<=1) //Ref not provided in table
	{
		$water_points['q9_2346']=1;	
	}else{
		$water_points['q9_2346']=0;
	}
	
	echo "<br>Hand pumps points: ".$water_points['q9_2346'];

	//Q.10 How many ablution taps (taps used for washing hands only) do you have?
	$ablution_taps_q10=$getdata['266617X37X1894'];
	if($ablution_taps_q10!=""){
	$Load_for_ablution_taps=$total_population/$ablution_taps_q10;

	if($Load_for_ablution_taps<=50 && $ablution_taps_q10!="" && $ablution_taps_q10!=0)
	{
		$water_points['q10_1894']=1;	
	}else{
		$water_points['q10_1894']=0;	
	}
	}

	echo "<br>Ablution taps points: ".$water_points['q10_1894'];
	
	//Q.11 How many water closets (used for defecation and urination) do you have?

	$water_closets_q11=$getdata['266617X37X1896SQ005_SQ004'];
	if($water_closets_q11!=""){
	$Load_for_water_closets=$total_population/$water_closets_q11;

	if($school_type==1 && $Load_for_water_closets<=45 && $water_closets_q11!="" && $water_closets_q11!=0) //school type Day Scholar
	{
		$water_points['q11_1896']=1;	
	}else if($school_type==2 && $Load_for_water_closets<=35 && $water_closets_q11!="" && $water_closets_q11!=0) //Day Boarding 
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==3 && $Load_for_water_closets<=25 && $water_closets_q11!="" && $water_closets_q11!=0) //Residential 
	{
		$water_points['q11_1896']=1;	
	}
	else if($school_type==4 && $Load_for_water_closets<=40 && $water_closets_q11!="" && $water_closets_q11!=0) //Day Scholar + Day Boarding
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==5 && $Load_for_water_closets<=30 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Boarding + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==6 && $Load_for_water_closets<=35 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Scholar + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==7 && $Load_for_water_closets<=25 && $water_closets_q11!="" && $water_closets_q11!=0){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q11_1896']=1;	
	}
	else {
	$water_points['q11_1896']=0;
	}
}
echo "<br>Water closets points: ".$water_points['q11_1896'];


	//Q.12 How many urinals (strictly used for urination only) do you have?

	$water_urinals_q12=$getdata['266617X37X1895'];
	$Load_for_urinals=$total_population/$water_urinals_q12;


	if($school_type==1 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0) //school type Day Scholar
	{
		$water_points['q12_1895']=1;	
	}else if($school_type==2 && $Load_for_urinals<=40 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Day Boarding 
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==3 && $Load_for_urinals<=30 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Residential 
	{
		$water_points['q12_1895']=1;	
	}
	else if($school_type==4 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0) //Day Scholar + Day Boarding
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==5 && $Load_for_urinals<=35 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Boarding + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==6 && $Load_for_urinals<=50 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Scholar + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==7 && $Load_for_urinals<=30 && $water_urinals_q12!="" && $water_urinals_q12!=0){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q12_1895']=1;	
	}

	if(!isset($water_points['q12_1895']))
	$water_points['q12_1895']=0;

echo "<br>Urinals points: ".$water_points['q12_1895'];

	//Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )

	$other_water_outlets_q13=$getdata['266617X37X2347'];
	//$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;

	if($other_water_outlets_q13<=1) //not provided by cse
	{
		$water_points['q13_2347']=1;	
	}else{
		$water_points['q13_2347']=0;	
	}

	echo "<br>Other water outlets points: ".$water_points['q13_2347'];

	//Q.14 Is there a water storage system in place to supply water in the toilets? ( 1 Points )

	$supply_water_in_toilets=$getdata['266617X37X2349'];
	if($supply_water_in_toilets=="Y")
	{
		$water_points['q14_2349']=1;
	}else{
		$water_points['q14_2349']=0;
	}

	echo "<br>Water storage system points:".$water_points['q14_2349'];
	
	// Q.15. Is the water supply sufficient?  ( 1 Points )
	$supply_sufficient=$getdata['266617X37X2350'];
	if($supply_sufficient=="Y")
	{
		$water_points['q15_2350']=1;	
	}else{
		$water_points['q15_2350']=0;	
	}
	
	echo "<br>Water supply sufficient points: ".$water_points['q15_2350'];

	//Q.16. Are the toilets cleaned? Yes. ( 1 Points )
	$toilets_cleaned=$getdata['266617X37X2351'];
	if($toilets_cleaned=="Y")
	{
		$water_points['q16_2351']=1;	
	}else{
		$water_points['q16_2351']=0;
	}
	
	echo "<br>Toilets cleaned points: ".$water_points['q16_2351'];
	
	//Q.17. Does your school treat wastewater? ( 5 Points )
	$treat_wastewater=$getdata['266617X37X2332'];
	if($treat_wastewater=="Y")
	{
		$water_points['q17_2332']=5;	
	}else{
		$water_points['q17_2332']=0;
	}
	
	echo "<br>School treat waste water points: ".$water_points['q17_2332'];
	
	//Q.18. Does your school reuse the treated wastewater? ( 5 Points )
	//If Yes
//Q.18.(a). How does your school reuse wastewater? (Multiple Choice)
//If yes, and Q18(a) is answered,  your school gets five points

 $reusewastewater=$getdata['266617X37X2654'];

 if($reusewastewater=="Y" && ($getdata['266617X37X26551']!="" || $getdata['266617X37X26552']!="" || $getdata['266617X37X26553']!=""))
 {	 
    $water_points['q18_2654']=5;	
 }else{
   $water_points['q18_2654']=0;
	}
	
	echo "<br>Reuse the treated wastewater points: ".$water_points['q18_2654'];

	//echo "<pre>";
	//print_r($water_points);

	$total_water_points=array_sum($water_points);

	return $total_water_points;
	
}







//START WASTE SECTION QUESTIONS POINTS CALCULATION.

function GetWastePoints($token)
{
	//START WASTE SECTION QUESTIONS POINTS CALCULATION.
	
	$query_waste="SELECT token,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X38X2032,266617X38X2033SQ001,266617X38X2143SQ011_SQ001,266617X38X2143SQ011_SQ002,266617X38X2143SQ011_SQ003,266617X38X2143SQ011_SQ004,266617X38X2125SQ009_SQ001,266617X38X2041,266617X38X2042SQ010_SQ001,266617X38X2074,266617X38X2076,266617X38X2115,266617X38X2114,266617X38X2064,266617X38X2065SQ001,266617X38X2065SQ002,266617X38X2065other FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_waste=mysql_query($query_waste);
	$getdata=mysql_fetch_assoc($query_result_waste);

	$waste_points =array();  
	//$waste_bonus_points=array();
	//Question 1.:  Does your school segregate solid waste? 	
	$answer2032 = $getdata['266617X38X2032']; // total water consumption
	if($answer2032=="Y") // if Yes
	{
		$waste_points['q1_2032']=5;	
	}else{
		$waste_points['q1_2032']=0;	
	}
	
	
	//Q.2) Waste collection points in your school.
	$nobin = $getdata['266617X38X2143SQ011_SQ001'];
	$onebin = $getdata['266617X38X2143SQ011_SQ002'];
	$twobin = $getdata['266617X38X2143SQ011_SQ003'];
	$threebin = $getdata['266617X38X2143SQ011_SQ004'];
	
	$total_collecting_points = $onebin + $nobin + $twobin + $threebin;
	
	if($total_collecting_points==$twobin)
	{
	 $waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points ==$threebin)
	{
		$waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points == ($twobin + $threebin))
	{
		$waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points == ($nobin + $onebin))
	{
		$waste_points['q2_2143'] = 0;
	}
	else
	{
		$waste_points['q2_2143']= (($twobin + $threebin)/$total_collecting_points)*10;
	}
	

	
	
	//Q.3) Determine the quantity of waste generated in your school.
	
	$total_waste = ($getdata['266617X38X2125SQ009_SQ001']*1000);

	
	$total_population=$getdata['totalpopulation'];
	$per_day_waste_generation = $total_waste/30;
	$per_capita_waste_generation = $per_day_waste_generation/$total_population;
	
	$school_type = $getdata['266617X34X1608'];
	
	
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
		$per_capita = 300;
	}
	else if($school_type ==6) //Day Scholar + Residential
	{
		$per_capita = 300;
	}
	else if($school_type ==7) //Day Scholar + Day Boarding + Residential
	{
		$per_capita = 300; // Not provided by CSE
	}
	
	//$double_of_standard = $per_capita*2;
	if($per_capita_waste_generation <= $per_capita)
	{
		$waste_points['q3_2125']=10;
	}else{
	   $waste_points['q3_2125']=0;	
	}
	/*elseif($per_capita_waste_generation < $per_capita*2)
	{
		$waste_points['q3_2125'] = ($per_capita/$per_capita_waste_generation)*10; 
	}*/
	
	
	
	
	
	
	//4) Does your school recycle any generated waste?

	$waste_recycle=$getdata['266617X38X2041']; 
	if($waste_recycle=="Y")
	{
		 
		$total_generated_waste = $getdata['266617X38X2125SQ009_SQ001'];
		$total_recycled_waste = $getdata['266617X38X2042SQ010_SQ001']; //109
		
		//150
		$Required_waste_recycle=($total_generated_waste/2);
		
		//$recycle_ratio=$total_recycled_waste/$total_generated_waste;
		
		
		if($total_recycled_waste>= $Required_waste_recycle)
		{
			$waste_points['q4_2041'] = 20;
		}
		else
		{
			$waste_points['q4_2041'] = (($total_recycled_waste/$total_generated_waste)*20);
		}
		
	}else{
		$waste_points['q4_2041']=0;
	}
	
	
	
	//Q.5. Does your school have a composting facility? 
	//Q.5. (a) What is the methodology used? if Yes
	$methodologyused=$getdata['266617X38X2064']; 
	 
	if($methodologyused=="Y" && ($getdata['266617X38X2065SQ001']=="Y" || $getdata['266617X38X2065SQ002']=="Y" || $getdata['266617X38X2065other']!=" " ))
	{
		$waste_points['q5_2065'] =10;
	}else{
		$waste_points['q5_2065'] =0;
	}
	
	
	
	
	
	
	//Q.8) What is the final destination for waste that is disposed off externally? 
	
	if($getdata['266617X38X2076']=="A2" || $getdata['266617X38X2076']=="A3")
	{
		$waste_points['q8_2076']=5; 
	}else{
		$waste_points['q8_2076']=0; 
	}
	
	
	
	//Q.11)  Who collects your e-waste, when not in working condition?

	$ewaste_collected=$getdata['266617X38X2115'];
	if(($getdata['266617X38X2114']=="Y") && ($ewaste_collected=="A2" || $ewaste_collected=="A4" || $ewaste_collected=="A5"))
	{
		$waste_points['q11_2114']=5;  
		
	}else{
		$waste_points['q11_2114']=0; 
	}
	
	

	// echo "<pre>";	
	//print_r($waste_points);
	
	$total_waste_points=number_format(array_sum($waste_points),2);
	//$total_waste_bonus_points=array_sum($waste_bonus_points);
	//$waste_grand_total=number_format($total_waste_points+$total_waste_bonus_points,2);

	return $total_waste_points;

}





function GetWastePoints_new($token)
{
	//START WASTE SECTION QUESTIONS POINTS CALCULATION.
	
	$query_waste="SELECT token,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X38X2032,266617X38X2033SQ001,266617X38X2143SQ011_SQ001,266617X38X2143SQ011_SQ002,266617X38X2143SQ011_SQ003,266617X38X2143SQ011_SQ004,266617X38X2125SQ009_SQ001,266617X38X2041,266617X38X2042SQ010_SQ001,266617X38X2074,266617X38X2076,266617X38X2115,266617X38X2114,266617X38X2064,266617X38X2065SQ001,266617X38X2065SQ002,266617X38X2065other FROM lime_survey_266617 WHERE  token='$token'";
	$query_result_waste=mysql_query($query_waste);
	$getdata=mysql_fetch_assoc($query_result_waste);

	$waste_points =array();  
	//$waste_bonus_points=array();
	//Question 1.:  Does your school segregate solid waste? 	
	$answer2032 = $getdata['266617X38X2032']; // total water consumption
	if($answer2032=="Y") // if Yes
	{
		$waste_points['q1_2032']=5;	
	}else{
		$waste_points['q1_2032']=0;	
	}
	
	echo "Segregate solid waste points: ".$waste_points['q1_2032'];
	
	//Q.2) Waste collection points in your school.
	$nobin = $getdata['266617X38X2143SQ011_SQ001'];
	$onebin = $getdata['266617X38X2143SQ011_SQ002'];
	$twobin = $getdata['266617X38X2143SQ011_SQ003'];
	$threebin = $getdata['266617X38X2143SQ011_SQ004'];
	
	$total_collecting_points = $onebin + $nobin + $twobin + $threebin;
	
	if($total_collecting_points==$twobin)
	{
	 $waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points ==$threebin)
	{
		$waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points == ($twobin + $threebin))
	{
		$waste_points['q2_2143']= 10;
	}
	else if($total_collecting_points == ($nobin + $onebin))
	{
		$waste_points['q2_2143'] = 0;
	}
	else
	{
		$waste_points['q2_2143']= (($twobin + $threebin)/$total_collecting_points)*10;
	}
	

	echo "<br>Waste collection points score: ".number_format($waste_points['q2_2143'],2);
	
	//Q.3) Determine the quantity of waste generated in your school.
	
	$total_waste = ($getdata['266617X38X2125SQ009_SQ001']*1000);

	
	$total_population=$getdata['totalpopulation'];
	$per_day_waste_generation = $total_waste/30;
	$per_capita_waste_generation = $per_day_waste_generation/$total_population;
	
	$school_type = $getdata['266617X34X1608'];
	
	
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
		$per_capita = 300;
	}
	else if($school_type ==6) //Day Scholar + Residential
	{
		$per_capita = 300;
	}
	else if($school_type ==7) //Day Scholar + Day Boarding + Residential
	{
		$per_capita = 300; // Not provided by CSE
	}
	
	//$double_of_standard = $per_capita*2;
	if($per_capita_waste_generation <= $per_capita)
	{
		$waste_points['q3_2125']=10;
	}else{
	   $waste_points['q3_2125']=0;	
	}
	/*elseif($per_capita_waste_generation < $per_capita*2)
	{
		$waste_points['q3_2125'] = ($per_capita/$per_capita_waste_generation)*10; 
	}*/
	
	echo "<br>Quantity of waste generated points:".$waste_points['q3_2125'];
	
	
	
	
	//4) Does your school recycle any generated waste?

	$waste_recycle=$getdata['266617X38X2041']; 
	if($waste_recycle=="Y")
	{
		 
		$total_generated_waste = $getdata['266617X38X2125SQ009_SQ001'];
		$total_recycled_waste = $getdata['266617X38X2042SQ010_SQ001']; //109
		
		//150
		$Required_waste_recycle=($total_generated_waste/2);
		
		//$recycle_ratio=$total_recycled_waste/$total_generated_waste;
		
		
		if($total_recycled_waste>= $Required_waste_recycle)
		{
			$waste_points['q4_2041'] = 20;
		}
		else
		{
			$waste_points['q4_2041'] = (($total_recycled_waste/$total_generated_waste)*20);
		}
		
	}else{
		$waste_points['q4_2041']=0;
	}
	
	echo "<br>Waste recycling points: ".$waste_points['q4_2041'];
	
	//Q.5. Does your school have a composting facility? 
	//Q.5. (a) What is the methodology used? if Yes
	$methodologyused=$getdata['266617X38X2064']; 
	 
	if($methodologyused=="Y" && ($getdata['266617X38X2065SQ001']=="Y" || $getdata['266617X38X2065SQ002']=="Y" || $getdata['266617X38X2065other']!=" " ))
	{
		$waste_points['q5_2065'] =10;
	}else{
		$waste_points['q5_2065'] =0;
	}
	
	echo "<br>Composting facility points: ".$waste_points['q5_2065'];
	
	
	
	
	//Q.8) What is the final destination for waste that is disposed off externally? 
	
	if($getdata['266617X38X2076']=="A2" || $getdata['266617X38X2076']=="A3")
	{
		$waste_points['q8_2076']=5; 
	}else{
		$waste_points['q8_2076']=0; 
	}
	
	echo "<br>Final destination for waste points: ".$waste_points['q8_2076'];
	
	//Q.11)  Who collects your e-waste, when not in working condition?

	$ewaste_collected=$getdata['266617X38X2115'];
	if(($getdata['266617X38X2114']=="Y") && ($ewaste_collected=="A2" || $ewaste_collected=="A4" || $ewaste_collected=="A5"))
	{
		$waste_points['q11_2114']=5;  
		
	}else{
		$waste_points['q11_2114']=0; 
	}
	echo "<br>E-waste disposal points: ".$waste_points['q11_2114'];
	
	// echo "<pre>";	
	//print_r($waste_points);
	
	
	$total_waste_points=number_format(array_sum($waste_points),2);
	//$total_waste_bonus_points=array_sum($waste_bonus_points);
	//$waste_grand_total=number_format($total_waste_points+$total_waste_bonus_points,2);

	return $total_waste_points;

}











////////////////////////////////// Get Points By State ///////////////////


function GetAirPoints_ByState($state,$cond)
{
	//Air Section  Points Calculation 
	$query_air="SELECT token,266617X4X2197SQ011_SQ002,266617X4X2197SQ011_SQ003,266617X4X164,266617X4X165SQ001_SQ003,266617X4X165SQ002_SQ003,266617X4X165SQ004_SQ003,266617X4X165SQ005_SQ003,266617X4X2217SQ004_SQ001,266617X4X2217SQ004_SQ002,266617X4X2217SQ004_SQ003,266617X4X2217SQ004_SQ004,266617X4X176SQ004_SQ004,266617X4X176SQ001_SQ004,266617X4X176SQ002_SQ004,266617X4X176SQ003_SQ004,266617X4X176SQ0012_SQ004,266617X4X176SQ005_SQ004,266617X4X176SQ006_SQ004,266617X4X176SQ009_SQ004,266617X4X176SQ010_SQ004,266617X4X176SQ011_SQ004,266617X4X176SQ007_SQ004,266617X4X176SQ008_SQ004 FROM lime_survey_266617 WHERE  266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result_air=mysql_query($query_air);
	$air_points = array(); 
	$i=0;
	$total_air_points=array();
	while($getdata=mysql_fetch_assoc($query_result_air))
	{
		//echo "<pre>";
//print_r($getdata);
	

	//$group_id = 4;
	// $question_number = 2197;
	$total_floor_area = $getdata['266617X4X2197SQ011_SQ002']; //X = Area of floor (LxB)
	$total_area_of_openings  = $getdata['266617X4X2197SQ011_SQ003']; //Y = Area of openings (LxH)
	$ventilation_percentage = ($total_area_of_openings/$total_floor_area)*100; //window area to floor ratio
	
	if($ventilation_percentage>=5)
	{
		$air_points['q2_2197'] = 3;
	}
	
	
	//  SECTION 3: How eco-friendly are the vehicles in your school?
	//Q.3)What is the ownership of the vehicles used by your school?   

	if($getdata['266617X4X164']== "A1" || $getdata['266617X4X164']== "A2")
	{
		$air_points['q3_164'] =5;    
	}
	else
	{ //3(a) Provide details of school-owned motorised vehicles 
		//$group_id = 4;
		//$question_number = 165;
		$total_vehicles = $getdata['266617X4X165SQ001_SQ003'];
		$vehicles_more_5_years = $getdata['266617X4X165SQ002_SQ003'];
		$total_vehicles_use_ac = $getdata['266617X4X165SQ004_SQ003'];
		$total_vehicles_non_ac = $total_vehicles - $total_vehicles_use_ac;
		$puc_done_total = $getdata['266617X4X165SQ005_SQ003'];
		$puc_not_done_total = $total_vehicles - $puc_done_total;
		//$vehicles_with_parking = $getdata['answer266617X4X165SQ006_SQ003'];
		//$vehicles_without_parking = $total_vehicles - $vehicles_with_parking;

		//No. of Vehicles less than five year
		$vehicles_less_5_years = $total_vehicles - $vehicles_more_5_years;
		$points_1 = ($vehicles_less_5_years/$total_vehicles)*1; 

		//Use of Air Conditioning
		$points_2 = ($total_vehicles_non_ac/$total_vehicles)*1;
		//Pollution Under Control Certificate
		$points_3 = ($puc_done_total/$total_vehicles)*1;
		//Authorized parking area for vehicles
		//$points_4 = ($vehicles_with_parking/$total_vehicles)*1;
		
		//Q3(b) Specify the type of fuel used by your school’s vehicles:

		//$question_number = 2217;
		$total_diesel = $getdata['266617X4X2217SQ004_SQ001'];
		$total_petrol = $getdata['266617X4X2217SQ004_SQ002'];
		$total_lpg = $getdata['266617X4X2217SQ004_SQ003'];
		$total_cng = $getdata['266617X4X2217SQ004_SQ004'];
		
		$total_vehicles = $total_diesel + $total_petrol + $total_lpg + $total_cng;
		
		$cng_points = ($total_cng/$total_vehicles)*1;
		$lpg_points = ($total_lpg/$total_vehicles)*0.5;
		$petrol_points = ($total_petrol/$total_vehicles)*0.5;
		$points_5 =  $cng_points + $lpg_points + $petrol_points;
		
		$air_points['q3a_165'] = $points_1 + $points_2 + $points_3 + $points_5;
	}	

	
	//Q.4 Please specify how many members of the school community use each type of transport:

	$total_population = $getdata['266617X4X176SQ004_SQ004'];
	// Sustainable Motorized Vehicle (SMV) 
	$total_population_smv = $getdata['266617X4X176SQ001_SQ004'] + $getdata['266617X4X176SQ002_SQ004'] + $getdata['266617X4X176SQ003_SQ004'] + $getdata['266617X4X176SQ0012_SQ004'] + $getdata['266617X4X176SQ005_SQ004'] + $getdata['266617X4X176SQ006_SQ004'];
	//Non polluting mode(NPM)
	$total_population_npm = $getdata['266617X4X176SQ009_SQ004'] + $getdata['266617X4X176SQ010_SQ004'] + $getdata['266617X4X176SQ011_SQ004'];
	
	//Private vehicles population
	$private_veh_population = $getdata['266617X4X176SQ007_SQ004'] + $getdata['266617X4X176SQ008_SQ004'];
	
	$total_smv_npm = $total_population_smv + $total_population_npm; 


	if($total_population == $total_smv_npm)
	{
		$air_points['q4_176'] = 4;
	}
	else if($total_population == $private_veh_population)
	{
		$air_points['q4_176'] = 0;
	}else{
		$score1 = ($total_population_smv/$total_population)*4;
		$score2 = ($total_population_npm/$total_population)*4;
		$air_points['q4_176'] = $score1 + $score2;
	}

	 
	//print_r($air_points);
	
		$total_air_points[$i][$getdata['token']]=array_sum($air_points);
		unset($air_points);
		//print_r($total_air_points);
		$i++;
	}
	
	

	return $total_air_points;
}



//Energy section Points Calculation.

function GetEnergyPoints_ByState($state,$cond)
{
	//Energy section Points Calculation.
	$query_energy="SELECT token,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X8X237,266617X8X2180SQ013_SQ002,266617X8X2180SQ001_SQ002,266617X8X2180SQ002_SQ002,266617X8X2180SQ003_SQ002,266617X8X2180SQ004_SQ002,266617X8X2180SQ005_SQ002,266617X8X2180SQ006_SQ002,266617X8X2180SQ007_SQ002,266617X8X2180SQ008_SQ002,266617X8X2180SQ009_SQ002,266617X8X2180SQ010_SQ002,266617X8X2180SQ011_SQ002,266617X8X2180SQ014_SQ002,266617X8X2180SQ015_SQ002,266617X8X261 FROM lime_survey_266617 WHERE  266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result_energy=mysql_query($query_energy);
	
	$energy_points =array();  
	
	$i=0;
	while($getdata=mysql_fetch_assoc($query_result_energy))
	{


	$total_population = $getdata['totalpopulation']; //total population of school.
	$total_energy_con_mj = $getdata['266617X8X2180SQ013_SQ002'];  //Total
	//(mj per capita per day)
	$mjprd = $total_energy_con_mj/$total_population; 
	
	$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($mjprd<=46.2)) // condition for Day Scholar school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==2) && ($mjprd<=49.8)) // condition for Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==3) && ($mjprd<=24.6)) // condition for Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==4) && ($mjprd<=48.0)) // condition for Day Scholar + Day Boarding school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==5) && ($mjprd<=46.2)) // condition for Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==6) && ($mjprd<=49.8)) // condition for Day Scholar + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	else if(($school_type==7) && ($mjprd<=46.2)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$energy_points['q3_1_2180']=1;
	}
	if(!isset($energy_points['q3_1_2180']))
	    $energy_points['q3_1_2180']=0;
 
	/*
	//Q.1 Does your school have access to an electricity bill? if Yes
	//$group_id = 8;
	//$question_number = 237;
	$answer237 = $getdata['266617X8X237'];
	if($answer237 == "Y")
	{
		$energy_points['q1_237'] = 1;    
	}
	*/
	

	//Q2) How much energy does the school derive from each type of energy source? 
	//$group_id = 8;
	//$question_number = 2180;   
	$total_mj = $getdata['266617X8X2180SQ013_SQ002'];  //Total
	
	$answer1 = $getdata['266617X8X2180SQ001_SQ002']; //Electricity from the board (kwh)..
	$points1 = ($answer1/$total_mj) * 2.5;
	
	
	$answer13 = $getdata['266617X8X2180SQ014_SQ002']; //Electricity from generator (diesel) (litres)
	$points13 = ($answer13/$total_mj) * 1.67;
	
	
	$answer2 = $getdata['266617X8X2180SQ002_SQ002']; //Petrol (litres)..
	$points2 = ($answer2/$total_mj) * 1.67;

	
	
	
	$answer3 = $getdata['266617X8X2180SQ003_SQ002']; //Diesel..
	$points3 = ($answer3/$total_mj) * 0.83;
	
	$answer4 = $getdata['266617X8X2180SQ004_SQ002']; //CNG (kilogrammes)..
	$points4 = ($answer4/$total_mj) * 3.33;
	
	
	$answer5 = $getdata['266617X8X2180SQ005_SQ002']; //Kerosene (litres)..
	$points5 = ($answer5/$total_mj) * 0.83;
	
	
	$answer6 = $getdata['266617X8X2180SQ006_SQ002']; //Coal (kilogrammes)..
	$points6 = ($answer6/$total_mj) * 0.83;

	$answer7 = $getdata['266617X8X2180SQ007_SQ002']; //Wood (kilogrammes)..
	$points7 = ($answer7/$total_mj) * 3.33;
	
	
	$answer8 = $getdata['266617X8X2180SQ008_SQ002']; //Animal waste (kilogrammes)..
	$points8 = ($answer8/$total_mj) * 5;

	$answer9 = $getdata['266617X8X2180SQ009_SQ002']; //solar..
	$points9 = ($answer9/$total_mj) * 5;
	
	$answer10 = $getdata['266617X8X2180SQ010_SQ002']; //wind..
	$points10 = ($answer10/$total_mj) * 5;
	
	
	$answer11 = $getdata['266617X8X2180SQ011_SQ002']; //LPG (kilogrammes)..
	$points11 = ($answer11/$total_mj) * 3.33;

	$answer12 = $getdata['266617X8X2180SQ015_SQ002']; //Piped Natural Gas  (kilogrammes)..
	$points12 = ($answer12/$total_mj) * 3.33;
	
	

	
	
	
	//266617X8X2180SQ015_SQ002 ,266617X8X2180SQ014_SQ002
	
	$fscore = $points1 + $points2 + $points3 + $points4 + $points5 + $points6 + $points7 + $points8 + $points9 + $points10 + $points11 + $points12 + $points13;
	
	$energy_points['q3_2180'] = $fscore;
	/*
	if(($fscore >= 5))
	{
		$energy_points['q3_2180'] = 5;
	}else{
	$energy_points['q3_2180'] = 0;	
	}*/



	//Q.6) Are there any alternate sources of energy employed/ installed in your school? 
	// $group_id = 8;
	//$question_number = 261;
	$answer261 = $getdata['266617X8X261'];
	if($answer261 == "Y")
	{
		$energy_points['q6_261'] = 1;    
	}else{
		$energy_points['q6_261'] = 0;
	}

	
	$total_energy_points[$i][$getdata['token']]=array_sum($energy_points);
	unset($energy_points);
	$i++;
}
	

	return $total_energy_points;
}





// //Food  Section Points Calculation. group id 36.


function GetFoodPoints_ByState($state,$cond)
{
	
	//Food  Section Points Calculation. group id 36.
	
	$query_food="SELECT token,266617X36X1871SQ001_SQ002,266617X36X1871SQ002_SQ002,266617X36X1871SQ006_SQ002,266617X36X1871SQ007_SQ002,266617X36X1871SQ008_SQ002,266617X36X1871SQ009_SQ002 FROM lime_survey_266617 WHERE  266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result_food=mysql_query($query_food);
	
	$food_points =array();  
	$i=0;
	
	while($getdata=mysql_fetch_assoc($query_result_food))
	{
	
	//Q.4 What kind of food is being served/sold in your school?
	
	$packageditem=$getdata['266617X36X1871SQ001_SQ002']+$getdata['266617X36X1871SQ002_SQ002']+$getdata['266617X36X1871SQ006_SQ002']+$getdata['266617X36X1871SQ007_SQ002']+$getdata['266617X36X1871SQ008_SQ002']+$getdata['266617X36X1871SQ009_SQ002'];
	
	if($packageditem =="" || $packageditem<1)
	{ 
		$food_points['q3_1871'] = 2;   
	}
	
	$total_food_points[$i][$getdata['token']]=array_sum($food_points);
	unset($food_points);
	$i++;

}
	return $total_food_points;
}


//Land Section Point Calculation.
function GetLandPoints_ByState($state,$cond)
{

	$query_land="SELECT token,266617X7X1810SQ010_SQ002,266617X7X1810SQ002_SQ002,266617X7X1810SQ012_SQ002,266617X7X196,266617X7X1810SQ006_SQ002 FROM lime_survey_266617 WHERE 266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result_land=mysql_query($query_land);
	
	$land_points =array(); 
    $i=0;	
	
while($getdata=mysql_fetch_assoc($query_result_land))
	{

	//Task 2: Measure the four critical areas of your school campus
	//Q.1 Total Green Cover 
	
	$total_site_area = $getdata['266617X7X1810SQ010_SQ002'];
	
	//Green landscaped area on-ground + Green cover on exposed roof & terrace + Play area that has grass on ground
    $total_green_cover_area = $getdata['266617X7X1810SQ002_SQ002'] + $getdata['266617X7X1810SQ012_SQ002'] + $getdata['266617X7X1810SQ006_SQ002'];
	 
	 $green_cover_perc =number_format((($total_green_cover_area/$total_site_area)*100),2);
	
	if($green_cover_perc >=33)
	{
		$land_points['q1_1810'] = 5;
	}
	else
	{
		//$calculation = $total_site_area*0.33;
		//$Lowpoints = ($total_green_cover_area/$calculation)*5;
		$land_points['q1_1810'] = ($green_cover_perc/33)*5;

	}
	
	
	
	//4) Do you use chemical based pesticides in your school green cover? Yes/No
	
	$answer196 = $getdata['266617X7X196'];
	if($answer196 == "N")
	{
		$land_points['q4_196'] = 1;    
	}else{
		$land_points['q4_196'] = 0;
	}
	//echo "<pre>";
	//print_r($land_points);
	
	
	$total_land_points[$i][$getdata['token']]=array_sum($land_points);
	unset($land_points);
	$i++;
	
 }
	
	
	return $total_land_points;
	
}



//Water points1

function GetWaterPoints_ByState($state,$cond)
{

	//START WATER SECTION QUESTIONS POINTS CALCULATION.
	
	$query="SELECT token,266617X37X1883SQ010_SQ001,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X37X1884SQ001,266617X37X1884SQ002,266617X37X1884SQ003,266617X37X1884SQ004,266617X37X2320SQ003,266617X37X2320SQ004,266617X37X2320SQ005,266617X37X2320SQ006,266617X37X2320SQ008,266617X37X2320SQ009,266617X37X2320SQ010,266617X37X1900,266617X37X2354,266617X37X2376,266617X37X2396,266617X37X2398,266617X37X2400,266617X37X2337SQ001,266617X37X2337SQ004,266617X37X2337SQ005,266617X37X2337SQ006,266617X37X2337SQ007,266617X37X2337SQ008,266617X37X2349,266617X37X2350,266617X37X2351,266617X37X2332,266617X37X1893,266617X37X2346,266617X37X1894,266617X37X1896SQ005_SQ004,266617X37X1895,266617X37X2347,266617X37X2654,266617X37X26551,266617X37X26552,266617X37X26553 FROM lime_survey_266617 WHERE  266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result=mysql_query($query);
	
	$water_points =array();
	$i=0;
	while($getdata=mysql_fetch_assoc($query_result))
	{

	//Question 1.: Calculate your school’s water consumption, per activity:	(7 points)
	$water_points =array();  
	$answer1883 = $getdata['266617X37X1883SQ010_SQ001']; // total water consumption
	$total_population = $getdata['totalpopulation']; //total population of school.
	
	//(liters per capita per day)
	$lpcd = $answer1883/$total_population; 
	 
	$school_type = $getdata['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
	
	if(($school_type==1) && ($lpcd>=13 && $lpcd<=17)) // condition for Day Scholar school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==2) && ($lpcd>=15 && $lpcd<=25)) // condition for Day Boarding school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==3) && ($lpcd>=125 && $lpcd<=135)) // condition for Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==4) && ($lpcd>=14 && $lpcd<=21)) // condition for Day Scholar + Day Boarding school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==5) && ($lpcd>=70 && $lpcd<=80)) // condition for Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==6) && ($lpcd>=50 && $lpcd<=76)) // condition for Day Scholar + Residential school.
	{
		$water_points['q1_1883']=7;
	}
	else if(($school_type==7) && ($lpcd>=51 && $lpcd<=59)) // condition for Day Scholar + Day Boarding + Residential school.
	{
		$water_points['q1_1883']=7;
	}else{
		$water_points['q1_1883']=0;
	}
	

	//Q.2: Where does the water your school uses, come from? (please tick the correct options):
	$Groundwater=$getdata['266617X37X1884SQ001'];
	$Surfacewater=$getdata['266617X37X1884SQ002'];
	$Rainwater=$getdata['266617X37X1884SQ003'];
	$Recycledwastewater=$getdata['266617X37X1884SQ004'];

	if($Surfacewater=="Y" && $Rainwater=="Y" && $Recycledwastewater=="Y")
	{
		$water_points['q2_1884']=4;
	}
	else if(($Surfacewater=="Y" && $Rainwater=="Y") ||  ($Surfacewater=="Y" && $Recycledwastewater=="Y") || ($Rainwater=="Y" && $Recycledwastewater=="Y"))
	{
		if($Groundwater=="Y")
		{
			$water_points['q2_1884']=2; 
		}else{
			$water_points['q2_1884']=3;
		}
	}else if ($Surfacewater=="Y" || $Rainwater=="Y" || $Recycledwastewater=="Y"){
		$water_points['q2_1884']=1; 
	}else{
		$water_points['q2_1884']=0;	
	}


	//Q.5: What are the water conservation practices your school follows

	$tanksintheschool =$getdata['266617X37X2320SQ003']; //Do all tanks in the school have float valves installed to stop overflow?
	$drinkingwaterpoints=$getdata['266617X37X2320SQ004']; //Do the drinking water points have spill proof taps to check overflow?
	$appliancesquickwash=$getdata['266617X37X2320SQ005']; //Does your school use appliances with a quick-wash setting?
	$flushsystems=$getdata['266617X37X2320SQ006']; //Are dual flush systems installed in the toilets?
	$growlocalplant=$getdata['266617X37X2320SQ008']; //Does your school grow local plant species which require limited amount of water to grow?
	$conservation=$getdata['266617X37X2320SQ009']; //Has your school initiated any water conservation steps in the school or outside, in the past one year?	
	$irrigation=$getdata['266617X37X2320SQ010']; //Does your school use a drip or irrigation system?

	
	if($tanksintheschool=="A1")
	{
		$water_points['q5_2320_1']=1; 
	}else{
		$water_points['q5_2320_1']=0;
	}
	if($drinkingwaterpoints=="A1")
	{
		$water_points['q5_2320_2']=1; 
	}else{
		$water_points['q5_2320_2']=0;
	}
	if($appliancesquickwash=="A1")
	{
		$water_points['q5_2320_3']=1; 
	}else{
		$water_points['q5_2320_3']=0;
	}
	if($flushsystems=="A1")
	{
		$water_points['q5_2320_4']=1; 
	}else{
		$water_points['q5_2320_4']=0;
	}
	if($growlocalplant=="A1")
	{
		$water_points['q5_2320_5']=1; 
	}else{
		$water_points['q5_2320_5']=0;
	}
	if($conservation=="A1")
	{
		$water_points['q5_2320_6']=1; 
	}else{
		$water_points['q5_2320_6']=0;
	}
	if($irrigation=="A1")
	{
		$water_points['q5_2320_7']=1; 
	}else{
		$water_points['q5_2320_7']=0;
	}
	

	//Q6. Do you have Rainwater harvesting (RWH) system in your school?

	$Rainwater_harvesting=$getdata['266617X37X1900'];

	if($Rainwater_harvesting=="Y")
	{
		$water_points['q6_1900']=2; 
	}else{
		$water_points['q6_1900']=0;
	}
	
	

	//Q.6(a)(1) Which is the catchment area being harvested by your school?
	$harbyschool=$getdata['266617X37X2354'];
	if($harbyschool=="A1" || $harbyschool=="A2" || $harbyschool=="A3" || $harbyschool=="A4" || $harbyschool=="A5" || $harbyschool=="A6")
	{
		$water_points['q6a1_2354']=2;
	}else if($harbyschool=="A7")
	{
		$water_points['q6a1_2354']=4;
	}else{
		$water_points['q6a1_2354']=0;
	}
	

	//Q6(c). How much area in your school is harvested? 
	$school_harvested_area=$getdata['266617X37X2376'];
	if($school_harvested_area==7 || $school_harvested_area==8 || $school_harvested_area==9)
	{
		$water_points['q6c_2376']=10;
	}else if($school_harvested_area==5 || $school_harvested_area==6)
	{
		$water_points['q6c_2376']=8;
		
	}else if($school_harvested_area==4)
	{
		$water_points['q6c_2376']=6;
	}
	else if($school_harvested_area==3)
	{
		$water_points['q6c_2376']=4;
	}
	else if($school_harvested_area==1 || $school_harvested_area==2)
	{
		$water_points['q6c_2376']=2;
	}else{
		$water_points['q6c_2376']=0;
	}



	//Q.6(e) Rate your catchment on cleanliness:
	$cleanliness=$getdata['266617X37X2396'];
	if($cleanliness==1) 
	{
		$water_points['q6e_2396']=3; //good
	}else if($cleanliness==2)
	{
		$water_points['q6e_2396']=1; //Average
	}else{
		$water_points['q6e_2396']=0; //Poor
	}
	
	
	//Q.6(f) Does your school clean your catchment and system (structure?)?
	$catchmentsystem=$getdata['266617X37X2398'];	  
	if($catchmentsystem=="Y")
	{
		$water_points['q6f_2398']=2; //If answer to above question is Yes, then your school will get 2 points.
	}else{
		$water_points['q6f_2398']=0;
	}	 

	
	//Q.6(g). Does your school monitor the rainwater harvesting structure for its efficiency?
	$harvesting_structure=$getdata['266617X37X2400'];
	if($harvesting_structure=="Y")
	{
		$water_points['q6f_2400']=1;
	}else{
		$water_points['q6f_2400']=0;
	}
	
		//Q.6(g)(1). Please specify when does your school monitor the groundwater level?
	$groundwater_level_monitoring=$getdata['266617X37X2401'];
	if($groundwater_level_monitoring==1 || $groundwater_level_monitoring==2)
	{
		$water_points['q6g1_2399']=1;
	}else{
		$water_points['q6g1_2399']=0;
	}
	
	
	//Q.7: Please share details about sanitation and hygiene practices in your school.
	
	$separate_toilets=$getdata['266617X37X2337SQ001']; //Does the school have separate toilets for males and females?
	$toilets_accessible=$getdata['266617X37X2337SQ004'];
	$differently_abled_children =$getdata['266617X37X2337SQ005'];
	$teaching_toilets=$getdata['266617X37X2337SQ006'];
	$non_teaching_toilets=$getdata['266617X37X2337SQ007'];
	$safety_toilets=$getdata['266617X37X2337SQ008'];
	if($separate_toilets=="A1")
	{
		$water_points['q7_2337_01']=1;
	}else{
		$water_points['q7_2337_01']=0;	
	}
	if($toilets_accessible=="A1")
	{
		$water_points['q7_2337_02']=1;
	}else{
		$water_points['q7_2337_02']=0;	
	}
	if($differently_abled_children=="A1")
	{
		$water_points['q7_2337_03']=1;
	}else{
		$water_points['q7_2337_03']=0;	
	}
	if($teaching_toilets=="A1")
	{
		$water_points['q7_2337_04']=1;
	}else{
		$water_points['q7_2337_04']=0;	
	}
	if($non_teaching_toilets=="A1")
	{
		$water_points['q7_2337_05']=1;
	}else{
		$water_points['q7_2337_05']=0;	
	}
	if($safety_toilets=="A1")
	{
		$water_points['q7_2337_06']=1;
	}else{
		$water_points['q7_2337_06']=0;	
	}


	//Q.8 How many drinking water taps do you have?

	$drinking_water_taps_8=$getdata['266617X37X1893'];
	$Load_for_drinking_water_tap=$total_population/$drinking_water_taps_8;

	if($Load_for_drinking_water_tap<=50)
	{
		$water_points['q8_1893']=1;	
	}else{
		$water_points['q8_1893']=0;	
	}


	//Q.9 How many hand pumps do you have?

	$hand_pumps=$getdata['266617X37X2346'];
	$Load_for_hand_pumps=$total_population/$hand_pumps;

	if($Load_for_hand_pumps<=50) //Ref not provided in table
	{
		$water_points['q9_2346']=1;	
	}else{
		$water_points['q9_2346']=0;
	}
	
	
	//Q.10 How many ablution taps (taps used for washing hands only) do you have?
	$ablution_taps_q10=$getdata['266617X37X1894'];
	$Load_for_ablution_taps=$total_population/$ablution_taps_q10;

	if($Load_for_ablution_taps<=50)
	{
		$water_points['q10_1894']=1;	
	}else{
		$water_points['q10_1894']=0;	
	}

	
	//Q.11 How many water closets (used for defecation and urination) do you have?

	$water_closets_q11=$getdata['266617X37X1896SQ005_SQ004'];
	$Load_for_water_closets=$total_population/$water_closets_q11;

	if($school_type==1 && $Load_for_water_closets<=45) //school type Day Scholar
	{
		$water_points['q11_1896']=1;	
	}else if($school_type==2 && $Load_for_water_closets<=35) //Day Boarding 
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==3 && $Load_for_water_closets<=25) //Residential 
	{
		$water_points['q11_1896']=1;	
	}
	else if($school_type==4 && $Load_for_water_closets<=40) //Day Scholar + Day Boarding
	{ 
		$water_points['q11_1896']=1;	
	}
	else if($school_type==5 && $Load_for_water_closets<=30){ //Day Boarding + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==6 && $Load_for_water_closets<=35){ //Day Scholar + Residential
		$water_points['q11_1896']=1;	
	}
	else if($school_type==7 && $Load_for_water_closets<=25){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q11_1896']=1;	
	}
	if(!isset($water_points['q11_1896']))
	$water_points['q11_1896']=0;


	//Q.12 How many urinals (strictly used for urination only) do you have?

	$water_urinals_q12=$getdata['266617X37X1895'];
	$Load_for_urinals=$total_population/$water_urinals_q12;


	if($school_type==1 && $Load_for_urinals<=50) //school type Day Scholar
	{
		$water_points['q12_1895']=1;	
	}else if($school_type==2 && $Load_for_urinals<=40) //Day Boarding 
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==3 && $Load_for_urinals<=30) //Residential 
	{
		$water_points['q12_1895']=1;	
	}
	else if($school_type==4 && $Load_for_urinals<=50) //Day Scholar + Day Boarding
	{ 
		$water_points['q12_1895']=1;	
	}
	else if($school_type==5 && $Load_for_urinals<=35){ //Day Boarding + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==6 && $Load_for_urinals<=50){ //Day Scholar + Residential
		$water_points['q12_1895']=1;	
	}
	else if($school_type==7 && $Load_for_urinals<=30){ //Day Scholar + Day Boarding + Residential (ref value not provided)
		$water_points['q12_1895']=1;	
	}

	if(!isset($water_points['q12_1895']))
	$water_points['q12_1895']=0;


	//Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )

	$other_water_outlets_q13=$getdata['266617X37X2347'];
	$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;

	if($Load_for_other_water_outlets<=50) //not provided by cse
	{
		$water_points['q13_2347']=1;	
	}else{
		$water_points['q13_2347']=0;	
	}


	//Q.14 Is there a water storage system in place to supply water in the toilets? ( 1 Points )

	$supply_water_in_toilets=$getdata['266617X37X2349'];
	if($supply_water_in_toilets=="Y")
	{
		$water_points['q14_2349']=1;
	}else{
		$water_points['q14_2349']=0;
	}

	
	
	// Q.15. Is the water supply sufficient?  ( 1 Points )
	$supply_sufficient=$getdata['266617X37X2350'];
	if($supply_sufficient=="Y")
	{
		$water_points['q15_2350']=1;	
	}else{
		$water_points['q15_2350']=0;	
	}
	
	

	//Q.16. Are the toilets cleaned? Yes. ( 1 Points )
	$toilets_cleaned=$getdata['266617X37X2351'];
	if($toilets_cleaned=="Y")
	{
		$water_points['q16_2351']=1;	
	}else{
		$water_points['q16_2351']=0;
	}
	
	
	
	//Q.17. Does your school treat wastewater? ( 5 Points )
	$treat_wastewater=$getdata['266617X37X2332'];
	if($treat_wastewater=="Y")
	{
		$water_points['q17_2332']=5;	
	}else{
		$water_points['q17_2332']=0;
	}
	
	
	
	//Q.18. Does your school reuse the treated wastewater? ( 5 Points )
	//If Yes
//Q.18.(a). How does your school reuse wastewater? (Multiple Choice)
//If yes, and Q18(a) is answered,  your school gets five points

 $reusewastewater=$getdata['266617X37X2654'];

 if($reusewastewater=="Y" && ($getdata['266617X37X26551']!="" || $getdata['266617X37X26552']!="" || $getdata['266617X37X26553']!=""))
 {	 
    $water_points['q18_2654']=5;	
 }else{
   $water_points['q18_2654']=0;
	}
 
   
	//echo "<pre>";
	//print_r($water_points);
	
	$total_water_points[$i][$getdata['token']]=array_sum($water_points);
	unset($water_points);
	$i++;
}
	
	return $total_water_points;
	
}

//START WASTE SECTION QUESTIONS POINTS CALCULATION.

function GetWastePoints_ByState($state,$cond)
{
	//START WASTE SECTION QUESTIONS POINTS CALCULATION.
	
	$query_waste="SELECT token,266617X32X33SQ004_SQ003 AS totalpopulation,266617X34X1608,266617X38X2032,266617X38X2033SQ001,266617X38X2143SQ011_SQ001,266617X38X2143SQ011_SQ002,266617X38X2143SQ011_SQ003,266617X38X2143SQ011_SQ004,266617X38X2125SQ009_SQ001,266617X38X2041,266617X38X2042SQ010_SQ001,266617X38X2074,266617X38X2076,266617X38X2115,266617X38X2114,266617X38X2064,266617X38X2065SQ001,266617X38X2065SQ002,266617X38X2065other FROM lime_survey_266617 WHERE  266617X34X1594='$state' AND submitdate!='' $cond";
	$query_result_waste=mysql_query($query_waste);
	
	$waste_points =array();
    $i=0;	
	while($getdata=mysql_fetch_assoc($query_result_waste))
	{

	//Question 1.:  Does your school segregate solid waste? 	
	$answer2032 = $getdata['266617X38X2032']; // total water consumption
	if($answer2032=="Y") // if Yes
	{
		$waste_points['q1_2032']=5;	
	}else{
		$waste_points['q1_2032']=0;	
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
	else if($total_collecting_points == ($nobin + $onebin))
	{
		$waste_points['q2_2143'] = 0;
	}
	else
	{
		$waste_points['q2_2143']= (($twobin + $threebin)/$total_collecting_points)*10;
	}
	

	
	
	//Q.3) Determine the quantity of waste generated in your school.
	
	$total_waste = $getdata['266617X38X2125SQ009_SQ001'];

	
	$total_population=$getdata['totalpopulation'];
	$per_day_waste_generation = $total_waste/30;
	$per_capita_waste_generation = $per_day_waste_generation/$total_population;
	
	$school_type = $getdata['266617X34X1608'];
	
	
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
		$per_capita = 400; // Not provided by CSE
	}
	
	//$double_of_standard = $per_capita*2;
	if($per_capita_waste_generation <= $per_capita)
	{
		$waste_points['q3_2125']=10;
	}else{
	   $waste_points['q3_2125']=0;	
	}
	/*elseif($per_capita_waste_generation < $per_capita*2)
	{
		$waste_points['q3_2125'] = ($per_capita/$per_capita_waste_generation)*10; 
	}*/
	

	
	//4) Does your school recycle any generated waste?

	$waste_recycle=$getdata['266617X38X2041']; 
	if($waste_recycle=="Y")
	{
		
		$total_generated_waste = $getdata['266617X38X2125SQ009_SQ001'];
		$total_recycled_waste = $getdata['266617X38X2042SQ010_SQ001'];
		
		$recycle_ratio=$total_recycled_waste/$total_generated_waste;
		
		
		if($recycle_ratio>=0.5)
		{
			$waste_points['q4_2041'] = 20;
		}
		else
		{
			$waste_points['q4_2041'] = $recycle_ratio*30;
		}
		
	}else{
		$waste_points['q4_2041']=0;
	}
	
	
	
	//Q.5. Does your school have a composting facility? 
	//Q.5. (a) What is the methodology used? if Yes
	$methodologyused=$getdata['266617X38X2064']; 
	
	if($methodologyused=="Y" && ($getdata['266617X38X2065SQ001']=="Y" || $getdata['266617X38X2065SQ002']=="Y" || $getdata['266617X38X2065other']!=" " ))
	{
		$waste_points['q5_2065'] =10;
	}else{
		$waste_points['q5_2065'] =0;
	}
	
	
	//Q.8) What is the final destination for waste that is disposed off externally? 
	
	if($getdata['266617X38X2076']=="A2" || $getdata['266617X38X2076']=="A3")
	{
		$waste_points['q8_2076']=5; 
	}else{
		$waste_points['q8_2076']=0; 
	}
	
	
	
	//Q.11)  Who collects your e-waste, when not in working condition?

	$ewaste_collected=$getdata['266617X38X2115'];
	if(($getdata['266617X38X2114']=="Y") && ($ewaste_collected=="A2" || $ewaste_collected=="A4" || $ewaste_collected=="A5"))
	{
		$waste_points['q11_2114']=5;  
		
	}else{
		$waste_points['q11_2114']=0; 
	}
	
	
	

$total_waste_points[$i][$getdata['token']]=array_sum($waste_points);
	unset($waste_points);
	$i++;

}
	// echo "<pre>";	
	//print_r($waste_points);
	//$total_waste_points=number_format(array_sum($waste_points),2);
	//$total_waste_bonus_points=array_sum($waste_bonus_points);
	//$waste_grand_total=number_format($total_waste_points+$total_waste_bonus_points,2);

	return $total_waste_points;

}

?>