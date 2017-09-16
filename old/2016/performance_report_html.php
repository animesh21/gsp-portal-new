<?php
//include_once('config.php');
include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Performance Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="performance/css/style.css">
</head>
<body>
<?php     
if(isset($_REQUEST['id']))
{
    $token= $_REQUEST['id'];
}
        //$token = $_GET['id'];
        //$session_token = "h9aWsgkE8V";
        $path = $_SERVER['HTTP_HOST'];
        //$sql = mysql_query("select * from `lime_survey_266617` where `token` = '" . $token . "' and `submitdate` is not NULL");
        $sql = mysql_query("SELECT * FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND survey.`token` = '" . $token . "' AND surtoken.usesleft<=0  AND surtoken.completed !='N' AND survey.`submitdate` IS NOT NULL");
        
        
        $sql_data_array = mysql_fetch_assoc($sql);
        //        echo "<pre>";
        //        print_r($sql_data_array);
        //        echo "</pre>";
        $school_name = $sql_data_array['266617X34X1590'];
        $audit_coordinator = $sql_data_array['266617X34X1604']; // Audit Coordinator
        $city_name = $sql_data_array['266617X34X1656']; // City
        $district_name = $sql_data_array['266617X34X1611']; // District           
        $state_id = $sql_data_array['266617X34X1594']; // State Id 
        // State name 
        $state_sql = mysql_query("SELECT `name` from states_india where `state_id`=" . $state_id);
        $sql_state_data = mysql_fetch_assoc($state_sql);
        $state_name = $sql_state_data['name'];
         
        $total_audit_points =  number_format((GetAirPoints($token) +  GetEnergyPoints($token) + GetFoodPoints($token) + GetLandPoints($token) + GetWaterPoints($token) + GetWastePoints($token)),2,".","");
        
                
        $totalpointspercent=number_format((($total_audit_points*100)/157),2);
 
        if($totalpointspercent>=70)
        {
                $school_category="Green";
        }elseif($totalpointspercent>=50)
        {
                 $school_category="Yellow";
        }elseif($totalpointspercent>=35)
        {
                 $school_category="Orange";
        }elseif($totalpointspercent<35)
        {
                 $school_category="Red";
        }
        
        ?>
<div class="report-container">
  <div class="cover">
    <figure class="banner"><img src="performance/images/title-page.jpg"></figure>
    <div class="report-title">
      <h4>GSP Audit 2016</h4>
      <h3>Performance Report</h3>
      <p><strong><?php echo $school_name; ?></strong></p>
      <p><strong><?php echo $city_name; ?>, <?php echo $state_name; ?></strong></p>
      <p>Audit Coordinator: <?php echo $audit_coordinator; ?></p>
       <!--      <p>Overall Score: <?php echo $total_audit_points; ?>/157</p>-->
      <p>Category: <?php echo $school_category; ?> School</p>
    </div>
  </div>
  <div class="introduction page-break-before">
    <h2 class="intro-heading">
      <label>Introduction</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>Dear Principal,</p>
    <p>Thank you for taking part in GSP Audit 2016, an initiative to make your school resource efficient and to inculcate green practices in your students.</p>
    <p>As Anil Agarwal, founder-director, CSE, rightly said, '...that as they (children) grow older, it is important they begin to understand how human beings and human societies interact with their environment for their survival and their growth, how these human-nature interactions become a part of a society's culture, and why it is important to rationalize our relationship with our environment.'</p>
    <p>The Green Schools Programme (GSP) is about fostering environmental literacy. It takes the classroom into our lives. The joy is not just in the learning. The joy is in the experience of making change in our environment. We then live the change. GSP has been built on the twin objectives of "Learning by doing" and "making change work" to help schools audit the consumption of natural resources within their premises, and assess themselves as environment managers.</p>
    <p>Like last year, we were overwhelmed with the response we received from across India. More than 2500 schools registered for the Audit, and 700 submitted the Audit. The performance report of the school is based on the data submitted by the schools. Therefore, the school needs to make sure that the data entered is correct to the best of their knowledge. We hope that as the school continues to audit their consumption each year, they will refine the data collection and complete the report with honesty. Our endeavor is to provide India with a green report card of schools with credible data and this can be done only if schools provide accurate data.</p>
    
<!--    <div class="introduction-graph">
      <figure class="pull-left"> <img src="performance/images/daily-progress.png">
<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit</figcaption>
      </figure>
    </div>-->
    <p>We hope that your students immersed themselves in the activities and learnt about rainwater harvesting, waste segregation at source, non-polluting modes of transport, eating healthy, etc. While the performance report will give schools the baselines and is an indicator of the progress that the schools make on the environment front - year-on-year, we hope that your school continues to participate each year, and build a generation of environmentally responsible citizens.</p>
    <p>This report will help you move beyond "awareness activities" such as cleanliness drives, poster-making, debates etc, which are, undoubtedly, important, but will also help you to identify long term activities that will deliver measurable impacts.</p>
    <p>Hope, that in coming years, your school continues to participate and manage resources efficiently within your school.</p>
    <p>Look forward to receiving your Audit report in 2017!</p>
    <p>Warmly,</p>
    <p>The GSP team</p>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">1</span>-->
    </div>
    <h2 class="intro-heading">
      <label>Introduction</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>A snapshot GSP Audit 2016 is as follows:</p>
    <table width="100%" class="intro-table" cellspacing="0">
      <tr>
        <th width="22%">Rating</th>
        <th width="44%">Score (Percentage)</th>
        <th width="34%">Number of Schools</th>
      </tr>
      <tr>
        <td>GREEN</td>
        <td>70% & above</td>
        <td>71</td>
      </tr>
      <tr>
        <td>YELLOW</td>
        <td>Between 50-69.9%</td>
        <td>208</td>
      </tr>
      <tr>
        <td>ORANGE</td>
        <td>Between 35-49.9% </td>
        <td>352</td>
      </tr>
      <tr>
        <td>RED</td>
        <td>Below 34.9%</td>
        <td>69</td>
      </tr>
    </table>
    <figure> <img src="performance/images/categories.jpg"> </figure>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">2</span>-->
    </div>
  </div>
  <div class="air">
    <h2>
      <figure><img src="performance/images/Air_logo.jpg"></figure>
      <label>Air</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>Sources of air pollution are many and diverse. But none are as lethal as vehicles as they are responsible for very high exposure. Vehicular emissions take place in the breathing zone of people. Experts say that those who live or work in close proximity to heavily travelled roadways are subject to high levels of exposure.  No wonder that during the past few years, we have been desperately looking out for tools to assess the problem and find ways to combat the menace.</p>
    <section class="remember">
      <h3>Remember:</h3>
      <ul>
        <li>Circulation of fresh air keeps the mind and body healthy, therefore the total window-floor ratio of a class-room should be more than five per cent.</li>
        <li>The fuel type should be switched from diesel to petrol to CNG to prevent ambient air quality from deteriorating further.</li>
        <li>Your school should motivate most of the permanent population to use non-polluting mode of transport such as walking or cycling, or at least use a sustainably motorized vehicles such as buses, public transport.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php
                    $total_air_points = number_format(GetAirPoints($token),2);
                    if($total_air_points == 12)
                        $point_performance_msg_a = "Your school fulfils all the norms of Air Quality check. Overall, school has done very well in air section.  ";
                    elseif($total_air_points >= 9 && $total_air_points < 12 )
                        $point_performance_msg_a = "Your school fulfils almost all the norms of Air Quality check. You can improve by considering the recommendations through the assessment below.  Overall, school has done well in air section.";
                    elseif($total_air_points < 9 && $total_air_points >=5 )
                        $point_performance_msg_a = "Your school fulfils few norms of Air Quality check. You can improve by considering the recommendations through the assessment below.  Overall, school has done average in air section.";
                    elseif($total_air_points < 5)
                        $point_performance_msg_a = "Your school fulfils very few norms of Air Quality check. You can improve by considering the recommendations through the assessment below.  Overall, your school needs to improve the Air Quality.";                   
                ?>
    <p><?php echo $point_performance_msg_a ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure> <img src="performance/images/window.jpg"> </figure>
          <div class="description">
            <h3>Classrooms Window Floor Ratio (WFR)</h3>
            <?php
                                $sql_floor_details = mysql_query("select 266617X4X2197SQ001_SQ001, 266617X4X2197SQ002_SQ001, 266617X4X2197SQ003_SQ001, 266617X4X2197SQ004_SQ001, 266617X4X2197SQ005_SQ001, 266617X4X2197SQ006_SQ001, 266617X4X2197SQ007_SQ001, 266617X4X2197SQ008_SQ001, 266617X4X2197SQ009_SQ001, 266617X4X2197SQ010_SQ001, 266617X4X2197SQ011_SQ004 from `lime_survey_266617` where `token`='" . $token . "'");
                                $resultSet = array();
                                while ($result = mysql_fetch_assoc($sql_floor_details)) {
                                    $resultSet = $result;
                                    $total_percentage_ventilated = number_format($result['266617X4X2197SQ011_SQ004'], 2);
                                }
                                $non_empty_records = count(array_filter($resultSet)) - 1;

                                $avg = $total_percentage_ventilated / $non_empty_records;
                                $view_avg = number_format($avg, 2)
                                ?>
            <h4><?php echo $view_avg; ?> % Average WFR</h4>
            <?php
                                if ($view_avg < 5) {
                                    $window_floor_msg = "Your window-floor ratio is less than five per cent. It suggests that your school does not fulfil the oxygen requirement of the school community. If possible, consider increasing the window-floor ratio by providing more openings for better air circulation. Please note that this result is from the sample you have provided.";
                                } else if ($view_avg >= 5 && $view_avg < 10) {
                                    $window_floor_msg = "Your window-floor ratio is between five-10 per cent. It suggests that your school fulfills the oxygen requirement of the community. Please note that this result is from the sample you have provided.";
                                } elseif ($view_avg >= 10) {
                                    $window_floor_msg = "Your window-floor ratio is more than ten per cent. It suggests that your school fulfills the oxygen requirement of the community by providing more openings for better air circulation. Please note that this result is from the sample you have provided.";
                                }
                                ?>
            <p><?php echo $window_floor_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/key.jpg"></figure>
          <div class="description">
            <h3>Ownership of Vehicles</h3>
            <?php
                                if ($sql_data_array['266617X4X164'] == "A1") {
                                    $ownership = "School does not use or own vehicles";
                                    $ownership_msg = "This is a very good practice. Some schools do not have their own buses, but hire from a transport contractor. This indicates that students, teaching staff and others are using sustainable modes of transport to commute to school and back. ";
                                } elseif ($sql_data_array['266617X4X164'] == "A2") {
                                    $ownership = "Operator-owned vehicles";
                                    $ownership_msg = "This is a good practice. Your school does not have their own buses, but have an operator-based network. This indicates that students, teaching staff and others are using sustainable modes of transport to commute to school and back. ";
                                } elseif ($sql_data_array['266617X4X164'] == "A3") {
                                    $ownership = "School-owned vehicles";
                                    $ownership_msg = "This is not an ideal situation as it is better for schools to hire buses rather than owning them. Sharing buses with an operator is recommended";
                                } elseif ($sql_data_array['266617X4X164'] == "A4") {
                                    $ownership = "A combination of school-owned and operator-owned vehicles";
                                    $ownership_msg = "Good that your school uses 'operator owned' vehicles. It will be ideal if you can reduce the number of school-owned vehicles, and move to operator-owned. Hope your school has enough space within the school premises to park the vehicles owned by  the school. ";
                                }
                                ?>
            <h4><?php echo $ownership; ?></h4>
            <p><?php echo $ownership_msg; ?></p>
          </div>
        </li>
        </ul>
        </section>
        <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">3</span>-->
        </div>
      </div>
     <?php
     if ($sql_data_array['266617X4X164'] == "A3" || $sql_data_array['266617X4X164'] == "A4")
     {
     ?>
      <div class="air">
        <h2>
      <figure><img src="performance/images/Air_logo.jpg"></figure>
      <label>Air</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/age.jpg"></figure>
          <div class="description">
            <h3>Age of Vehicles</h3>
            <?php
                                $totalvehicle = $sql_data_array['266617X4X165SQ001_SQ003'];
                                $oldvehicles = $sql_data_array['266617X4X165SQ002_SQ003'];
                                $almostvicleper = (($oldvehicles / $totalvehicle) * 100);

                                if ($oldvehicles > 0 && $oldvehicles < $totalvehicle ) {
                                    $vehicletype = "Combination of old and new vehicles";
                                    $vehicle_msg = "As you know that vehicles that are older than 15 years emit very high Levels of pollutants. We suggest that that you keep a check on your vehicle's age.";
                                } elseif ($oldvehicles == 0 || $oldvehicles == " ") {
                                    $vehicletype = "All new vehicles or around five years";
                                    $vehicle_msg = "Good that your school keeps a check on the age of the vehicles. It's very important that the norms are followed for better Air Quality around us!  Old vehicles emit very high Levels of pollutants.";
                                } elseif ($oldvehicles == $totalvehicle) {
                                    $vehicletype = "Almost all vehicles are old";
                                    $vehicle_msg = "As you know that vehicles that are older than 15 years emit very high Levels of pollutants. We suggest that that you keep a check on the age of all vehicles.";
                                }
                                ?>
            <h4><?php echo $vehicletype; ?></h4>
            <p><?php echo $vehicle_msg; ?></p>
          </div>
        </li>
        
        <li>
          <figure><img src="performance/images/ac.jpg"></figure>
          <div class="description">
            <h3>Air Conditioning in Vehicles</h3>
            <?php
                                $totalvehicle = $sql_data_array['266617X4X165SQ001_SQ003'];
                                $acvehicles = $sql_data_array['266617X4X165SQ004_SQ003'];
                                $almostacvicleper = (($acvehicles / $totalvehicle) * 100);

                                if ($acvehicles < $totalvehicle && $acvehicles > 0) {
                                    $vehicleactype = "Combination of vehicles with Acs and without Acs";
                                    $acvehicle_msg = "Air conditioners in vehicles use a lot of fuel. We suggest that that you keep a check that your fuel consumption does not go up because of the Air conditioners. Also, ACs release harmful toxins further polluting the air.";
                                } elseif ($acvehicles == 0 || $acvehicles == " ") {
                                    $vehicleactype = "No air conditioners in the  vehicles";
                                    $acvehicle_msg = "Good that none of your vehicles are air-conditioned. Air conditioners in vehicles use a lot of fuel and release harmful toxins further polluting the air. You save a lot of fuel and keep the air clean around the city!";
                                } elseif ($acvehicles == $totalvehicle) {
                                    $vehicleactype = "Almost all vehicles have Air Conditioners";
                                    $acvehicle_msg = "All vehicles in your school are fitted with Acs! Air conditioners in vehicles use a lot of fuel and release harmful toxins further polluting the air. We suggest that when you need to replace your vehicles, then you shift to operator-owned buses that are not fitted with ACs.";
                                }
                                ?>
            <h4><?php echo $vehicleactype; ?></h4>
            <p><?php echo $acvehicle_msg; ?></p>
          </div>
        </li>
     
        <li>
          <figure><img src="performance/images/puc.jpg"></figure>
          <div class="description">
            <h3>PUC Certificates</h3>
            <?php
                                $totalvehicle = $sql_data_array['266617X4X165SQ001_SQ003'];
                                 $puc_done = $sql_data_array['266617X4X165SQ005_SQ003'];
                                $almost_puc_vicleper = (($puc_done / $totalvehicle) * 100);

                                if ( $puc_done > 0 && $puc_done < $totalvehicle  ) {
                                    $vehicleapuctype = "Combination of vehicles with PUC done and not done";
                                    $puc_done_msg = "PUC certification should be up to date for all your vehicles. Please ensure that you update the PUCs at the earliest.";
                                } elseif ($puc_done == $totalvehicle ) {
                                    $vehicleapuctype = "All vehicles with PUCs";
                                    $puc_done_msg = "PUC certification should be up to date for all your vehicles, and yours is! Good that all the vehicles have up to date PUC certification. ";
                                } elseif ($puc_done == 0) {
                                    $vehicleapuctype = "Almost all vehicles without PUCs";
                                    $puc_done_msg = "PUC certification should be up to date for all your vehicles. Please ensure that you update all your vehicles' PUCs at the earliest.";
                                }
                                ?>
            <h4><?php echo $vehicleapuctype; ?></h4>
            <p><?php echo $puc_done_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/parking.jpg"></figure>
          <div class="description">
            <h3>Parking Area for Vehicles</h3>
            <?php
                                $totalvehicle = $sql_data_array['266617X4X165SQ001_SQ003'];
                                $Parking_Area = $sql_data_array['266617X4X165SQ006_SQ003'];
                                $almost_parking_area = (($Parking_Area / $totalvehicle) * 100);

                                if ($Parking_Area > 0 && $Parking_Area < $totalvehicle) {
                                    $vehicle_parking = "Parking space for few vehicles";
                                    $vehicle_parking_msg = "There should be adequate parking area for school-owned vehicles. More the vehicles, more the area required. Thus, encouraging students to use public transport will ensure more space for school.";
                                } elseif ($Parking_Area >= $totalvehicle) {
                                    $vehicle_parking = "Parking space for all vehicles";
                                    $vehicle_parking_msg = "Its good that there is adequate parking area for school-owned vehicles. More the vehicles, more the area required. Therefore, encouraging students to use public transport will ensure more space for school or move to operator-owned vehicles, when your school needs to replace vehicles.";
                                } elseif ($Parking_Area == 0) {
                                    $vehicle_parking = "No Parking space for vehicles";
                                    $vehicle_parking_msg = "There should be adequate parking area for school-owned vehicles. More the vehicles, more the area required. Thus, encouraging students to use public transport will ensure more space for school.";
                                }
                                ?>
            <h4><?php echo $vehicle_parking ?></h4>
            <p><?php echo $vehicle_parking_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/fuel.jpg"></figure>
          <div class="description">
            <h3>Type of Fuel</h3>
            <?php
                                $Diesel = $sql_data_array['266617X4X2217SQ004_SQ001']; // Total Diesel vehicle
                                $Petrol = $sql_data_array['266617X4X2217SQ004_SQ002']; // Total Petrol vehicle
                                $LPG = $sql_data_array['266617X4X2217SQ004_SQ003'];   // Total LPG vehicle
                                $CNG = $sql_data_array['266617X4X2217SQ004_SQ004'];  // Total CNG vehicle
                                
                                $total_vehicles = $sql_data_array['266617X4X165SQ001_SQ003'];  // Total No. vehicle
                                
                                $totaldisel = $Diesel + $Petrol;                                
                                $desiel_petrol_percentage = round((($totaldisel * 100)/$total_vehicles),2);
                                
                                //$totallpgcng = $LPG + $CNG;  
                                $totalcng = $CNG;
                                $cng_percentage = round((($totalcng * 100)/$total_vehicles),2);
                                
                                $totallpg = $LPG;
                                $lpg_percentage = round((($totallpg * 100)/$total_vehicles),2);
                                
                                if ($desiel_petrol_percentage >= 71) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "Your diesel/ petrol consumption is too high. Consider switching to cleaner sources of energy.";
                                } 
                                elseif ($desiel_petrol_percentage >= 36 && $desiel_petrol_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "Your diesel/petrol consumption is moderate. Consider switching to cleaner sources of energy.";
                                }
                                elseif ($desiel_petrol_percentage > 0 &&  $desiel_petrol_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "Your diesel/petrol consumption is low. Consider exploring cleaner sources of energy for all your vehicles.";
                                }
                                elseif ($desiel_petrol_percentage == 0) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "Good your school doesn't use diesal or petrol as a fuel.";
                                }
                                if ($cng_percentage >= 71) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Good that most of your vehicles run on CNG!";
                                }
                                elseif ($cng_percentage >= 36 && $cng_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Good that some of your schools' vehicles run on CNG! Try switching over to CNG as a fuel for all your vehicles.";
                                }
                                elseif ($cng_percentage > 0 && $cng_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Your CNG consumption is low. Consider switching to CNG for all your vehicles.";
                                }
                                elseif ($cng_percentage == 0) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Your school doesn't use CNG as a fuel. Consider switching to CNG as a fuel in future.";
                                }
                                if ($lpg_percentage >= 71 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "Your LPG consumption is too high, which can be dangerous to students. Consider exploring cleaner sources of energy.";
                                }
                                elseif ($lpg_percentage >= 36 && $lpg_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "Your LPG consumption is moderate, but can be dangerous to students. Consider exploring cleaner sources of energy.";
                                }
                                elseif ($lpg_percentage > 0 && $lpg_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "Your LPG consumption is low. Consider exploring cleaner sources of energy.";
                                }
                                
                                elseif ($lpg_percentage == 0) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "Good that your school doesn’t use LPG as a fuel.";
                                }
                                
                                ?>
<!--            <h4><?php echo implode(",",$typeofFuel); ?></h4>-->
            <?php 
            foreach ($typeoffuel_msg as $value)
            {
                ?>
           <p><?php echo $value; ?></p>
            <?php
             }
            ?>
          </div>
        </li>
        </ul>
        </section>
        <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">4</span>-->
        </div>
      </div>
      <?php
     }
      ?>
      <div class="air">
        <h2>
      <figure><img src="performance/images/Air_logo.jpg"></figure>
      <label>Air</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/mode.jpg"></figure>
          <div class="description">
            <h3>Mode of Commuting</h3>
            <?php
                                $total_population = $sql_data_array['266617X4X176SQ004_SQ004'];
                                 // Sustainable Motorized Vehicle (SMV) 
                                
                                $total_population_smv = $sql_data_array['266617X4X176SQ001_SQ004'] + $sql_data_array['266617X4X176SQ002_SQ004'] + $sql_data_array['266617X4X176SQ003_SQ004'] + $sql_data_array['266617X4X176SQ0012_SQ004'] + $sql_data_array['266617X4X176SQ005_SQ004'] + $sql_data_array['266617X4X176SQ006_SQ004'];
                                 //Non polluting mode(NPM)
                                $total_population_smv_percentage = round((($total_population_smv * 100)/$total_population),2);
                                
                                $total_population_npm = $sql_data_array['266617X4X176SQ009_SQ004'] + $sql_data_array['266617X4X176SQ010_SQ004'] + $sql_data_array['266617X4X176SQ011_SQ004'];
                                
                                $total_population_npm_percentage = round((($total_population_npm * 100)/$total_population),2);
                                 //Private vehicles population
                                $private_veh_population = $sql_data_array['266617X4X176SQ007_SQ004'] + $sql_data_array['266617X4X176SQ008_SQ004'];
                                $total_smv_npm = $total_population_smv + $total_population_npm;
                                
                                $private_veh_population_percentage = round((($private_veh_population * 100)/$total_population),2);
                                
                                if ($total_population_smv_percentage > 50 && $total_population_npm_percentage < 50 ) {
                                    $members_use_transport_type = "More than 50% population using sustainable motorized vehicles and less than 50% population using Non- polluting mode of transport";
                                    $members_use_transport_msg = "Good most of the students and staff use Sustainable Motorized Vehicle (SMV). School should now motivate them to use Non- polluting mode of transport (NPT).";
                                } elseif ($total_population_smv_percentage < 50 && $total_population_npm_percentage > 50) {
                                    $members_use_transport_type = "More than 50% population using Non- polluting mode of transport and less than 50% population using sustainable motorized vehicles";
                                    $members_use_transport_msg = "Good most of the students and staff use Non- polluting mode of transport (NPT). School should now motivate rest of the population to use Non- polluting mode of transport.";
                                } elseif ($private_veh_population_percentage > 50) {
                                    $members_use_transport_type = "More than 50% population using Private vehicles";
                                    $members_use_transport_msg = "Your school mostly uses private vehicles for transportation. We recommend that you encourage the staff and students to use public transport and also to car pool.";
                                }
                                ?>
            <h4><?php echo $members_use_transport_type; ?></h4>
            <p><?php echo $members_use_transport_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
     <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">5</span>-->
     </div>
  </div>
  <div class="energy">
    <h2>
      <figure><img src="performance/images/energy.jpg"></figure>
      <label>Energy</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>The impact of 'global warming' has already reached scorching levels, and is rising rapidly. Saving energy is the first step to energy conservation. Switching off electrical gadgets when they are not in use and switching the usage of bulbs to CFLs/ LEDs are great ways to start.</p>
    <section class="remember">
      <h3>Remember</h3>
      <ul>
        <li>Per capita per day electricity consumption should be well within the norms (46.5 MJ) and we all know that our 
          non-renewable resources are depleting faster than they can re-generate.</li>
        <li>Switching over to renewable resources and expanding its usage is the only available option.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
               // Energy Points
                    $total_energy_points = number_format(GetEnergyPoints($token),2);
                    if($total_energy_points == 7)
                        $point_performance_msg_e = "The energy consumption of your school falls within the norms. Your school has scored well in energy section.";
                    elseif($total_energy_points >= 4 && $total_energy_points < 7 )
                        $point_performance_msg_e = "The energy consumption of your school partially falls within the norms. Your school has scored average in energy section. It is recommended that your school explores or experiment with renewable energy sources.";
                    elseif($total_energy_points < 4 )
                        $point_performance_msg_e = "The energy consumption of your school does not fall within the norms. Your school needs to prudently manage energy consumption. It is recommended that your school explores or experiment with renewable energy sources.";                             
                ?>
    <p><?php echo $point_performance_msg_e ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/percapita.jpg"></figure>
          <div class="description">
            <h3>Energy per capita per day consumption</h3>
            <?php
                                $total_population = $sql_data_array['266617X32X33SQ004_SQ003']; //total population of school.
                                $total_energy_con_mj = ($sql_data_array['266617X8X2180SQ013_SQ002'] / 30);  //Total Energy consumed in Megajoules (mj)
                                //(mj per capita per day)
                                $mjprd = number_format(($total_energy_con_mj / $total_population),2,".","");                                
                                //Day Scholar 1  46.2 mj
                                //Day Boarding 2 49.8 mj
                                //Residential 3   24.6 mj
                                // Day Scholar + Day Boarding 4 48.0 mj
                                //Day Boarding + Residential 5   46.2 mj
                                //Day Scholar + Residential 6  49.8 mj
                                //Day Scholar + Day Boarding + Residential 7
                                $school_category_array = array(1=>46.2,2=>49.8,3=>24.6,4=>48.0,5=>46.2,6=>49.8);
                                $school_category = $sql_data_array['266617X34X1608'];  // School Category
                                         //echo $school_category_array[$school_category];                       
                                if ($mjprd <= $school_category_array[$school_category]) {
                                    $mjpcpd_per_day = "School's Consumption meets the requirement";
                                    $mjpcpd_per_day_msg = "Your per day per person average consumption of energy meets the norm.";
                                } elseif($mjprd > $school_category_array[$school_category]) {
                                    $mjpcpd_per_day = "School's Consumption does not meet the requirement ";
                                    $mjpcpd_per_day_msg = "Your school's per day per person average consumption of energy does not meet the norms. Please check the energy consumption table and make your school Energy efficient at the earliest.";                                   
                                  
                                    
                                }
                                ?>
            <h4><?php echo $mjpcpd_per_day; ?></h4>
            <p><?php echo $mjpcpd_per_day_msg; ?></p>
            
          </div>
          <table width="100%" class="intro-table" cellspacing="0" style="margin-bottom: 0">
             <tr>
                 <th width="50%" class="performance-orange-bg">Category</th>
                 <th width="50%" class="performance-orange-bg">Per capita/day energy consumption</th>
             </tr>
             <tr>
               <td>Day Scholar</td>
               <td>46.2 MJ</td>

             </tr>
             <tr>
               <td>Day Boarding</td>
               <td>49.8 MJ</td>

             </tr>
             <tr>
               <td>Residential</td>
               <td>24.6 MJ</td>

             </tr>
             <tr>
               <td>Scholar + Boarding</td>
               <td>48.0 MJ</td>                                      
             </tr>
             <tr>
               <td>Scholar + Residential</td>
               <td>49.8 MJ</td>                                      
             </tr>
             <tr>
               <td>Boarding + Residential</td>
               <td>46.2 MJ</td>                                      
             </tr>
           </table>
        </li>
        <li>
          <figure><img src="performance/images/source.jpg"></figure>
          <div class="description">
            <h3>Sources of Energy</h3>
            <?php
                                if ($sql_data_array['266617X8X261'] == "Y") {
                                    //$sourceofenergy_msg = "Your school uses 'x' as a renewable source of energy. We hope that in the near future you switch to 100% renewable sources of Energy!";
                                    //$energy = array();
                                    if ($sql_data_array['266617X8X262SQ001'] == "Y") {
                                        $solar_energy = "Solar";
                                    }
                                    else
                                    {
                                        $solar_energy = "";
                                    }
                                    if ($sql_data_array['266617X8X262SQ002'] == "Y") {
                                        $wind_energy = "Wind";
                                    }
                                    else
                                    {
                                        $wind_energy = "";
                                    }
                                    if ($sql_data_array['266617X8X262SQ003'] == "Y") {
                                        $hydro_energy = "Hydro";
                                    }
                                    else
                                    {
                                        $hydro_energy = "";
                                    }
                                    if ($sql_data_array['266617X8X262SQ004'] == "Y") {
                                        $solar_wind_energy = "Combination of solar and wind";
                                    }
                                    else
                                    {
                                        $solar_wind_energy = "";
                                    }
                                    //$energyuse = implode($energy, ',');
                                    if($solar_wind_energy == "Combination of solar and wind" && $solar_energy =="" && $wind_energy =="" && $hydro_energy =="")
                                    {
                                        $energyuse ="All Renewable sources of Energy ";
                                        $sourceofenergy_msg = "Good that the source of the energy used by your school is not exhaustive in the near future." ;
                                    }
                                    elseif($solar_wind_energy == "Combination of solar and wind" && ($solar_energy !="" || $wind_energy !="" || $hydro_energy !=""))
                                    {
                                        $energyuse ="Combination of renewable and non- renewable sources";
                                        $sourceofenergy_msg ="Good that the source of the energy used by your school is not exhaustive in the near future.  We recommend that you expand/ increase your use of renewable sources of energy." ;
                                    }
                                     elseif($solar_wind_energy == "" && ($solar_energy !="" || $wind_energy !="" || $hydro_energy !=""))
                                    {
                                        $energyuse ="Non-renewable sources";
                                        $sourceofenergy_msg ="Your school uses more sources of energy that could be exhausted in the near future. We recommend that you expand/ increase your use of renewable sources of energy. " ;
                                    }
                                                                        
                                } else {
                                    $sourceofenergy_msg = "Your school does not use any renewable source of energy. We hope that in the near future you switch to 100% renewable sources of Energy!";
                                    $energyuse = "No";
                                }
                                ?>
<!--            <h4><?php echo $energyuse; ?></h4>-->
            <p><?php echo $sourceofenergy_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">6</span>-->
    </div>
  </div>
  <div class="food">
    <h2>
      <figure><img src="performance/images/food.jpg"></figure>
      <label>Food</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>Food has been at the centre of policy debate in India for many years, as more than 20 per cent of the country's population suffers from undernourishment. Meanwhile, childhood obesity is also alarmingly on the rise globally as well as in India.Given India's dubious distinction of carrying the twin burden of under nutrition and overfeeding, we need to be extra cautious.</p>
    <p>We all are aware about the ill-effects of Ultra Processed Packaged Food (UPPF) that has high fat, sugar and salt content in it. This UPPF category is one of the most popular categories in today's market. </p>
    <section class="remember">
      <h3>Remember:</h3>
      <ul>
        <li>Avoid UPPF in school canteens, and encourage children to eat healthy and traditional foods/ beverages.</li>
        <li>Sponsorship by UPPF brands should be avoided.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
               // Food Points
                    $total_food_points = number_format(GetFoodPoints($token),2);
                    if($total_food_points == 2)
                        $point_performance_msg_f = "Good that your school provides quality and nutritious food in your school canteen. You have scored good in this section.";
                    elseif($total_food_points == 0 )
                        $point_performance_msg_f = "The food sold in your school canteen is processed, packaged or fast food, which is not good for the students. We recommend that you push students towards Good Food.";
                                     
                ?>
    <p><?php echo $point_performance_msg_f ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/sale.jpg"></figure>
          <div class="description">
            <h3>What kind of food is being served / sold in your school</h3>
            <?php
                                $packageditem = $sql_data_array['266617X36X1871SQ001_SQ002'] + $sql_data_array['266617X36X1871SQ002_SQ002'] + $sql_data_array['266617X36X1871SQ003_SQ002'] + $sql_data_array['266617X36X1871SQ004_SQ002'] + $sql_data_array['266617X36X1871SQ005_SQ002'] + $sql_data_array['266617X36X1871SQ006_SQ002'] + $sql_data_array['266617X36X1871SQ007_SQ002'] + $sql_data_array['266617X36X1871SQ008_SQ002'] + $sql_data_array['266617X36X1871SQ009_SQ002'];
                                if ($packageditem == "" || $packageditem < 1) {
                                    $packageitem_served = "Yes";
                                    $packageitem_served_msg = "Your school has scored points in the food section as your canteen does not sell ultra processed packaged food and packaged/bottled drinks.";
                                } else {
                                    $packageitem_served = "No";
                                    $packageitem_served_msg = "Your school sells ultra processed packaged food (UPPF) items daily in the campus - a practice that needs to be discouraged as UPPF items are high in fats, salt and sugar and harm children. We suggest that with the beginning of the new academic session, unhealthy food items be substituted with local and seasonal delicacies.";
                                }
                                ?>
<!--        <h4><?php echo $packageitem_served; ?></h4>-->
            <p><?php echo $packageitem_served_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/sale.jpg"></figure>
          <div class="description">
            <h3>Does the school distribute packaged food items as rewards during schools events.</h3>
            <?php
                                if ($sql_data_array['266617X36X1864'] == "Y") {
                                    $distributepackaged_food = "Yes";
                                    $distributepackaged_food_msg = "Ultra processed packaged food (UPPF) not only has ill effects on the health of the students but are also negative environmental impacts. We hope you replace these with local/ traditional snacks.";
                                } else {
                                    $distributepackaged_food = "No";
                                    $distributepackaged_food_msg = "Ultra processed packaged food (UPPF) not only has ill effects on the health of the students but are also negative environmental impacts. We hope you that you serve local/ traditional snacks and discourage students to eat UPPF.";
                                }
                                ?>
            <h4><?php echo $distributepackaged_food; ?></h4>
            <p><?php echo $distributepackaged_food_msg; ?></p>
          </div>
        </li>
            </ul>
            </section>
            <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">7</span>-->
            </div>
            </div>
            <div class="food">
    <h2>
      <figure><img src="performance/images/food.jpg"></figure>
      <label>Food</label>
      <span>Green Schools Programme Audit 2016</span></h2>
      <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/sale.jpg"></figure>
          <div class="description">
            <h3>Does the school distribute chocolates/similar products as refreshments during schools events? </h3>
            <?php
                                if ($sql_data_array['266617X36X1866'] == "Y") { //Food Q.7
                                    $chocolatespackaged_food = "Yes";
                                    $chocolatespackaged_food_msg = "Students are easily influenced by the fancy brand advertisement and promotions. We would like to request you to discourage promotions of UPPF.";
                                } else {
                                    $chocolatespackaged_food = "No";
                                    $chocolatespackaged_food_msg = "Students are easily influenced by the fancy brand advertisement and promotions. It is great that your school doesn't promote such brand promotions and advertisements.";
                                }
                                ?>
            <h4><?php echo $chocolatespackaged_food; ?></h4>
            <p><?php echo $chocolatespackaged_food_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/sale.jpg"></figure>
          <div class="description">
            <h3>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</h3>
            <?php
                                if ($sql_data_array['266617X36X1868'] == "Y") { //Food Q.7
                                    $sponsored_event = "Yes";
                                    $sponsored_event_msg = "Students are easily influenced by the fancy brand advertisement and promotions. We would like to request you to discourage promotions of UPPF.";
                                } else {
                                    $sponsored_event = "No";
                                    $sponsored_event_msg = "Students are easily influenced by the fancy brand advertisement and promotions. It is great that your school doesn't promote such brand promotions and advertisements.";
                                }
                                ?>
            <h4><?php echo $sponsored_event; ?></h4>
            <p><?php echo $sponsored_event_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">8</span>-->
    </div>
  </div>
  <div class="land">
    <h2>
      <figure><img src="performance/images/land.jpg"></figure>
      <label>Land</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>Your school grounds can provide excellent educational opportunities for creating awareness about land resources and the natural world around you, as well as the land-use pattern. The biological diversity 
      supported by an area is a good indicator of its ecological well-being. A proper management of land resources can transform the grounds into biologically diverse outdoor classrooms and healthy open spaces.</p>
    <section class="remember">
      <h3>Remember:</h3>
      <ul>
        <li>Congestion on land (more buildings and inadequate green cover) leads to pressure on resources and hence on our 
          environment.</li>
        <li>We all know that a mind with plenty of oxygen has a greater power to grasp things. And for more oxygen we need more trees - our only oxygen factory.</li>
        <li>To keep these oxygen factories healthy, we should not use chemical pesticides to raise them.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
                    // Land Points
                    $total_land_points = number_format(GetLandPoints($token),2);
                    if($total_land_points == 6)
                        $point_performance_msg_l = "Good your school has plenty of green cover and that too, without using any chemical-based pesticides. Though the norms say that minimum 33% of your total land should be green cover, we encourage that you target to increase your green cover by 10 - 15 per cent in next two years!";
                    elseif($total_land_points >=4 && $total_land_points < 6  )
                        $point_performance_msg_l= "Your school has done average in this section.  Though the norms say that minimum 33% of your total land should be green cover, we encourage that you target to increase your green cover by 10 - 15 per cent in next two years!";
                    
                     elseif($total_land_points < 4 )
                        $point_performance_msg_l= "Your school does not meet the Green Cover norms. Though the norms say that minimum 33% of your total land should be green cover, we encourage that you target to increase your green cover to 40% in next two years!";
                                     
                ?>
    <p><?php echo $point_performance_msg_l ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/green.jpg"></figure>
          <div class="description">
            <h3>Total Green Cover</h3>
            <?php
                                $total_site_area = $sql_data_array['266617X7X1810SQ010_SQ002'];

                                //Green landscaped area on-ground + Green cover on exposed roof & terrace + Play area that has grass on ground
                                $total_green_cover_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ012_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];

                                $green_cover_perc = number_format((($total_green_cover_area / $total_site_area) * 100), 2);
                                if ($green_cover_perc >= 33) {
                                    $greencover_msg = "Your school has the required green cover but aim to increase the cover by 10 - 15 percent in the next two years.";
                                } else if ($green_cover_perc >= 15 && $green_cover_perc <= 32.9) {
                                    $greencover_msg = "Your school does not have the required green cover so aim to increase the cover by at least 20  percent in the next two years.";
                                } else if ($green_cover_perc <= 14.9) {
                                    $greencover_msg = "Your school does not have the required green cover so aim to increase the cover by at least 30  percent in the next two years.";
                                }
                                ?>
<!--            <h4><?php echo $green_cover_perc; ?></h4>-->
            <p><?php echo $greencover_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/pest.jpg"></figure>
          <div class="description">
            <h3>Use of Pesticide</h3>
            <?php
                                if ($sql_data_array['266617X7X196'] == "N") {
                                    $pesticides = "No";
                                    $pesticides_msg = "Your school does not use any sort of chemical pesticides. Hope that you compost your waste and make your own organic fertilizer!";
                                } else {
                                    $pesticides = "Yes";
                                    $pesticides_msg = "Your school uses some sort of chemical pesticides. Hope that you compost your waste and make your own organic fertilizer and move away from chemical-based fertilizers. ";
                                }
                                ?>
            <h4><?php echo $pesticides; ?></h4>
            <p><?php echo $pesticides_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">9</span>-->
    </div>
  </div>
  <div class="water">
    <h2>
      <figure><img src="performance/images/tap.jpg"></figure>
      <label>Water</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>The right to water is really the right to life and livelihood. Just as we cannot live without water, a country cannot survive if it is water-stressed. This resource determines our future, and acts as a driving force for our economic growth. Even today, the government admits to not being able to provide' safe drinking water to more than half the country's population. Poor sanitation and unsafe drinking water account for a substantial part of the disease burden in India, contributing to diarrhea, cholera, typhoid and jaundice.</p>
    <section class="remember">
      <h3>Remember:</h3>
      <ul>
        <li>Children should get adequate amount of water required per day starting from drinking to flushing to mopping floors to everything.</li>
        <li>Catch rain where it falls. Today, rainwater harvesting has evolved as an appropriate measure to overcome the water scarcity plus water logging due to excessive rains.</li>
        <li>Recharge groundwater. This should be done irrespective of whether the area has high ground water level or low because it's high time to take preventive measure to stop further depletion of water table.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
                    // Water Points
                    $total_water_points = number_format(GetWaterPoints($token),2);
                    if($total_water_points == 65)
                        $point_performance_msg_water = "It is good that your school has managed to provide water as per the prescribed level as well as all the sanitation facilities have load under the prescribed norms. Well done! Your school's score in water section is very good.";
                    elseif($total_water_points >=45 && $total_water_points < 65  )
                        $point_performance_msg_water= "It is good that your school tries to provide water as per the prescribed level as well as all the sanitation facilities have load under the prescribed norms. Your school's score in water section is good. Hope you take suggestions and become a water efficient school at the earliest.";                    
                     elseif($total_water_points >=15 && $total_water_points < 45 )
                        $point_performance_msg_water= "Your school does not provide water as per the prescribed level as well as all the sanitation facilities does not have load under the prescribed norms. Your school's score in water section is average. Hope you take suggestions and become a water efficient school at the earliest.";
                     elseif($total_water_points < 15 )
                        $point_performance_msg_water= "Your school does not provide water as per the prescribed level as well as all the sanitation facilities does not have load under the prescribed norms. Your school's score in water section is poor. Hope you take suggestions and become a water efficient school at the earliest.";
                                     
                ?>
    <p><?php echo $point_performance_msg_water ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/water-consume.jpg"></figure>
          <div class="description">
            <h3>Per Capita Water Consumption</h3>
            <?php
                                $answer1883 = $sql_data_array['266617X37X1883SQ010_SQ001']; // total water consumption
                                $total_population = $sql_data_array['266617X32X33SQ004_SQ003']; //total population of school.
                                //(liters per capita per day)
                                $lpcd = number_format(($answer1883 / $total_population),2,".",""); //discuss                            
                                $school_category_type = $sql_data_array['266617X34X1608']; // School Category
                                
                                if ($school_category_type == 1) 
                                {
                                    $llimit =13;
                                    $ulimit =17;
                                }  
                                elseif ($school_category_type == 2) 
                                {
                                    $llimit =15;
                                    $ulimit =25;
                                }
                                elseif ($school_category_type == 3) 
                                {
                                    $llimit =125;
                                    $ulimit =135;
                                }
                                elseif ($school_category_type == 4) 
                                {
                                    $llimit =14;
                                    $ulimit =21;
                                }
                                elseif ($school_category_type == 5) 
                                {
                                    $llimit =70;
                                    $ulimit =80;
                                }
                                elseif ($school_category_type == 6) 
                                {
                                    $llimit =50;
                                    $ulimit =76;
                                }
                                elseif ($school_category_type == 7) 
                                {
                                    $llimit =51;
                                    $ulimit =59;
                                }
                                  
                                if($lpcd >=$llimit && $lpcd <=$ulimit)
                                {
                                    $pcw_condition ="Per capita consumption within the range according to their category";
                                    $pcw_message ="Your school's per person per day consumption is within the norms. Good that you manage your water efficiently.";

                                }                                                                     
                                elseif($lpcd < $llimit)
                                {
                                    $pcw_condition ="Per capita consumption is less";
                                    $pcw_message ="Your school's per person per day consumption is less than it should be. Refer to the table to see the recommended consumption. ";
                                }
                                 elseif($lpcd >$ulimit)
                                {
                                    $pcw_condition ="Per capita consumption is more";
                                    $pcw_message ="Your school's per person per day consumption is more than it should be. Refer to the table to see the recommended consumption, and review where wastage of water can be minimized.";
                                }
                              
                                //Day Scholar 1  13-17
                                //Day Boarding 2 15-25
                                //Residential 3   125-135
                                // Day Scholar + Day Boarding 4 14-21
                                //Day Boarding + Residential 5   70-80
                                //Day Scholar + Residential 6  50-76
                                //Day Scholar + Day Boarding + Residential 7 51-59                                                              
                                
                                ?>
            <h4><?php echo $lpcd; ?> litres per person/day (<?php echo $pcw_condition?>)</h4>
            <p><?php echo $pcw_message?></p>
            
             
          </div>
          
          <table width="100%" class="intro-table" cellspacing="0">
             <tr>
                 <th width="100%" colspan="2" class="performance-blue-bg">School Average - CSE recommended consumption of water, per capita per day</th>             
             </tr>
             <tr>
                 <th width="50%" class="performance-blue-bg">Type of School</th>
                 <th width="50%" class="performance-blue-bg">Average consumption(in Litres)</th>
             </tr>
             <tr>
               <td>Day Scholar</td>
               <td>13-17</td>

             </tr>
             <tr>
               <td>Day Boarding</td>
               <td>15-25</td>

             </tr>
             <tr>
               <td>Residential</td>
               <td>125-135</td>

             </tr>
             <tr>
               <td>Scholar + Boarding</td>
               <td>14-21</td>                                      
             </tr>
             <tr>
               <td>Boarding + Residential</td>
               <td>70-80</td>                                      
             </tr>
             <tr>
               <td>Scholar + Residential</td>
               <td>50-76</td>                                      
             </tr>
             <tr>
               <td>Scholar + Boarding +Residential</td>
               <td>51-59</td>                                      
             </tr>
           </table>
        </li>
           </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">10</span>-->
    </div>
  </div>
  <div class="water">
    <h2>
      <figure><img src="performance/images/tap.jpg"></figure>
      <label>Water</label>
      <span>Green Schools Programme Audit 2016</span></h2>
        <section class="performance-category">
        <ul>
        <li>
          <figure><img src="performance/images/water-source.jpg"></figure>
          <div class="description">
            <h3>Source of Water</h3>
            <?php
                                //Question.2 water
                                $Groundwater = $sql_data_array['266617X37X1884SQ001'];
                                $Surfacewater = $sql_data_array['266617X37X1884SQ002'];
                                $Rainwater = $sql_data_array['266617X37X1884SQ003'];
                                $Recycledwastewater = $sql_data_array['266617X37X1884SQ004'];
                                $harvestrainwater6b = $sql_data_array['266617X37X2355'];


                                if (($Surfacewater == "Y" && $Rainwater == "Y" && $Recycledwastewater == "Y" && $Groundwater == "Y") || ($Surfacewater == "Y" && $Rainwater == "Y" && $Recycledwastewater == "Y")) {
                                    $SourceofWater = "All 4 or Surface+ rainwater+ recycle water";
                                    $SourceofWater_msg = "Your source of water is surface, recycled water and rainwater which are viable sources for Water usage. Good you know where your water comes from!";
                                } else if (($Surfacewater == "Y" && $Rainwater == "Y") || ($Surfacewater == "Y" && $Recycledwastewater == "Y") || ($Rainwater == "Y" && $Recycledwastewater == "Y")) {
                                    $SourceofWater = "'surface + rainwater or surface + recycled water or rainwater + recycled water";
                                    $SourceofWater_msg = "You use a combination of either surface + rainwater or surface + recycled water or rainwater + recycled water.  All of these combinations demonstrate that your school is not extracting ground water, but is making an effort to either catch rainwater or treat waste water for further use.";
                                } 
                                else if ($Groundwater == "Y" && $Rainwater == "Y") {
                                    if($Surfacewater == "Y")
                                        $wcombination[] = "Surface water";
                                     if($Rainwater == "Y")
                                        $wcombination[] = "Rain water";
                                     if($Recycledwastewater == "Y")
                                        $wcombination[] = "Recycled waste water";
                                     if($Groundwater == "Y")
                                        $wcombination []= "Ground water";
                                     $wcombination_msg =implode(",",$wcombination);                                     
                                    
                                    $SourceofWater =$wcombination_msg;
                                    $SourceofWater_msg = "Your source of water is combination of $wcombination_msg. Which is not sufficient to fulfill the water requirements of your school. You should expand your source of water to more options such as surface water, rainwater and recycled wastewater.";
                                }
                                
                                else if ($Surfacewater == "Y" || $Rainwater == "Y" || $Recycledwastewater == "Y" || $Groundwater == "Y") {
                                    
                                    if($Surfacewater == "Y")
                                        $wcombination = "Surface water";
                                     elseif($Rainwater == "Y")
                                        $wcombination = "Rain water";
                                     elseif($Recycledwastewater == "Y")
                                        $wcombination = "Recycled waste water";
                                     elseif($Groundwater == "Y")
                                        $wcombination = "Ground water";
                                    $SourceofWater = $wcombination;
                                    $SourceofWater_msg = "Your source of water is '".$wcombination."'. You should expand your source of water to more options and combinations of surface water, rainwater and recycled wastewater. ";
                                } else {
                                    
                                     if($Surfacewater == "Y")
                                        $wcombination[] = "Surface water";
                                     if($Rainwater == "Y")
                                        $wcombination[] = "Rain water";
                                     if($Recycledwastewater == "Y")
                                        $wcombination[] = "Recycled waste water";
                                     if($Groundwater == "Y")
                                        $wcombination []= "Ground water";
                                     $wcombination_msg =implode(",",$wcombination);                                     
                                    
                                    $SourceofWater =$wcombination_msg;
                                    $SourceofWater_msg = "Your source of water is combination of $wcombination_msg. Which is not sufficient to fulfill the water requirements of your school. You should expand your source of water to more options such as surface water, rainwater and recycled wastewater.";
                                }
                                ?>
<!--            <h4><?php echo $SourceofWater; ?></h4>-->
            <p><?php echo $SourceofWater_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/water-source.jpg"></figure>
          <div class="description">
            <h3>Does your school get daily water supply?</h3>
            <?php
//Question.4 water
                                if ($sql_data_array['266617X37X1885'] == "Y") {
                                    $daily_water = "Yes";
                                    $daily_water_msg = "Please ensure that your water supply is adequate, so that you can meet required per capita income.";
                                } else {
                                    $daily_water = "No";
                                    $daily_water_msg = "Please ensure that your water supply is adequate. Explore how can you mange your supply of water better.";
                                }
                                ?>
            <h4><?php echo $daily_water; ?></h4>
            <p><?php echo $daily_water_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/conserve.jpg"></figure>
          <div class="description">
            <h3>Water Conservation Practices</h3>
            <?php
                                //Question 5 Water.
                                $tanksintheschool = $sql_data_array['266617X37X2320SQ003']; //Do all tanks in the school have float valves installed to stop overflow?
                                $drinkingwaterpoints = $sql_data_array['266617X37X2320SQ004']; //Do the drinking water points have spill proof taps to check overflow?
                                $appliancesquickwash = $sql_data_array['266617X37X2320SQ005']; //Does your school use appliances with a quick-wash setting?
                                $flushsystems = $sql_data_array['266617X37X2320SQ006']; //Are dual flush systems installed in the toilets?
                                $growlocalplant = $sql_data_array['266617X37X2320SQ008']; //Does your school grow local plant species which require limited amount of water to grow?
                                $conservation = $sql_data_array['266617X37X2320SQ009']; //Has your school initiated any water conservation steps in the school or outside, in the past one year?	
                                $irrigation = $sql_data_array['266617X37X2320SQ010']; //Does your school use a drip or irrigation system?

                                if($tanksintheschool == 'A1')
                                    $check_count = 1;
                                if($drinkingwaterpoints == 'A1')
                                    $check_count += 1 ;
                                if($appliancesquickwash == 'A1')
                                    $check_count += 1 ;
                                if($flushsystems == 'A1')
                                    $check_count +=1 ;
                                if($growlocalplant == 'A1')
                                    $check_count += 1 ;
                                if($conservation == 'A1')
                                    $check_count += 1 ;
                                if($irrigation == 'A1')
                                    $check_count += 1 ;
                                //echo $check_count;
                                If($sql_data_array['266617X37X2320SQ001']== 'A1' && $sql_data_array['266617X37X2320SQ002']== 'A1' && $sql_data_array['266617X37X2320SQ007']== 'A1' && $sql_data_array['266617X37X2320SQ011']== 'A1' )
                                {
                                  $other_check = 'Yes';  
                                }
                                
                                $question_count_array =array(1,2,3,4,5);
                                if(in_array($check_count,$question_count_array))
                                {
                                 $Conservation_Practices_msg = "Your school should look into these water conservation practices to become more water efficient: Float valves installed to stop overflow, Spill proof taps to check overflow, Appliances with a quick-wash setting, Dual flush systems installed in the toilets, Local plant species which require limited amount of water to grow, In initiating any water conservation steps in the schools and outside, Using a drip or irrigation system";   
                                }
                               elseif($check_count == 6)
                                {
                                 $Conservation_Practices_msg = "Your school should look into this water conservation practices to become more water efficient: Float valves installed to stop overflow, Spill proof taps to check overflow, Appliances with a quick-wash setting, Dual flush systems installed in the toilets, Local plant species which require limited amount of water to grow, In initiating any water conservation steps in the schools and outside, Using a drip or irrigation system";   
                                }
                                elseif($check_count ==7)
                                {
                                  $Conservation_Practices_msg = "Your school Follows all the good water conservation practices. Please keep up the good work. Promote students to practice these things even at home.";    
                                }
                                elseif($check_count ==7 && $other_check == 'Yes')
                                {
                                  $Conservation_Practices_msg = "Your school should look into these water conservation practices to become more water efficient: Float valves installed to stop overflow, Spill proof taps to check overflow, Appliances with a quick-wash setting, Dual flush systems installed in the toilets, Local plant species which require limited amount of water to grow, In initiating any water conservation steps in the schools and outside, Using a drip or irrigation system.";    
                                }
//                                if ($tanksintheschool == "A1" && $drinkingwaterpoints == "A1" && $appliancesquickwash == "A1" && $flushsystems == "A1" && $growlocalplant == "A1" && $conservation == "A1" && $irrigation == "A1") {
//                                    $Conservation_Practices = "Yes";
//                                    $Conservation_Practices_msg = "Your school Follows all the good water conservation practices. Please keep up the good work. Promote students to practice these things even at home.";
//                                } else {
//                                    $Conservation_Practices = "No";
//                                    $Conservation_Practices_msg = "Your school should look into these water conservation practices to become more water efficient: Float valves installed to stop overflow, Spill proof taps to check overflow, Appliances with a quick-wash setting, Dual flush systems installed in the toilets, Local plant species which require limited amount of water to grow, In initiating any water conservation steps in the schools and outside, Using a drip or irrigation system";
//                                }
                                ?>
<!--            <h4><?php echo $Conservation_Practices; ?></h4>-->
            <p><?php echo $Conservation_Practices_msg; ?></p>
          </div>
        </li>
     
        <li>
          <figure><img src="performance/images/harvesting.jpg"></figure>
          <div class="description">
            <h3>Rainwater Harvesting</h3>
            <?php
                                if ($sql_data_array['266617X37X1900'] == "Y") {
                                    $RainwaterHarvesting = "Yes";
                                    $RainwaterHarvesting_msg = "It's really good that your school has rainwater harvesting system. We are glad that your school recognises how important rainwater harvesting is!";
                                } else {
                                    $RainwaterHarvesting = "No";
                                    $RainwaterHarvesting_msg = "We really hope you consider rainwater harvesting methods for your school. Rainwater Harvesting is a good and easy practice. Catching rainwater from any of the catchments (roof, paved and unpaved areas) is cost-effective and you will be able to recharge ground water. Do consider it!";
                                }
                                ?>
            <h4><?php echo $RainwaterHarvesting; ?></h4>
            <p><?php echo $RainwaterHarvesting_msg; ?></p>
          </div>
        </li>
        <?php 
                          if($sql_data_array['266617X37X1900']=="N")
                          {                              
                              ?>
                          <li>
                          <figure><img src="performance/images/catchment.jpg"></figure>
                          <div class="description">
                          <h3>RWH Potential</h3>
<!--                          <h4>Rooftop</h4>-->
                          <p>Your RWH potential is '<?php echo $sql_data_array['266617X37X2476'] ?>' litres. Please explore the options of Rainwater Harvesting in your School.</p>
                          </div>
                          </li>
                          <?php }  ?>
        <?php
                        if ($sql_data_array['266617X37X1900'] == "Y") {
                            ?>
        <li>
          <figure><img src="performance/images/catchment.jpg"></figure>
          <div class="description">
            <h3>Does your school harvest different catchments</h3>
            <?php
                                    if ($sql_data_array['266617X37X2353'] == "Y") {
                                        $catchments = "Yes";
                                        $catchments_msg = "";
                                    } else if ($sql_data_array['266617X37X2353'] == "N") {
                                        $catchments = "No";
                                        $catchments_msg = "Your school has rainwater harvesting system, which indirectly means your school must be catching rainwater from atleast one of the catchments: Rooftop, Paved area or Unpaved area. Please fill in the correct details for better analysis of your reports.";
                                    }
                                    ?>
            <h4><?php echo $catchments; ?></h4>
            <p><?php echo $catchments_msg; ?></p>
          </div>
        </li>
        
        <?php
                        if ($sql_data_array['266617X37X2353'] == "Y") {
                            ?>
        <li>
          <figure><img src="performance/images/catchment.jpg"></figure>
          <div class="description">
            <h3>Which is the catchment area being harvested by your school</h3>
            <?php
                                    if ($sql_data_array['266617X37X2354'] == "A7") {
                                        $catchments_area = "Rooftop + Paved + Unpaved";
                                        $catchments_area_msg = "You use all catchments to catch rainwater, namely,  rooftop + Paved + Unpaved, of rainwater harvesting which is really good.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A1") {
                                        $catchments_area = "Rooftop";
                                        $catchments_area_msg = "You use 'Rooftop' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A2") {
                                        $catchments_area = "Paved";
                                        $catchments_area_msg = "You use 'Paved' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A3") {
                                        $catchments_area = "Unpaved";
                                        $catchments_area_msg = "You use 'Unpaved' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A4") {
                                        $catchments_area = "Rooftop + Paved";
                                        $catchments_area_msg = "You use 'Rooftop + Paved' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A5") {
                                        $catchments_area = "Paved + Unpaved";
                                        $catchments_area_msg = "You use 'Paved + Unpaved' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    } else if ($sql_data_array['266617X37X2354'] == "A6") {
                                        $catchments_area = "Rooftop + Unpaved";
                                        $catchments_area_msg = "You use 'Rooftop + Unpaved' method of catchment for rainwater harvesting which is good. You can try moving toward combination of rooftop + Paved + Unpaved.";
                                    }
                                    ?>
            <h4><?php echo $catchments_area; ?></h4>
            <p><?php echo $catchments_area_msg; ?></p>
          </div>
        </li>
        <?php } ?>
        <li>
          <figure><img src="performance/images/area.jpg"></figure>
          <div class="description">
            <h3>Harvested Area</h3>
            <?php
                                if ($sql_data_array['266617X37X2355'] == "A1") {
                                    $rainwater_harvested = "By storing";
                                    $rainwater_harvested_msg = "A good Practice.";
                                } elseif ($sql_data_array['266617X37X2355'] == "A2") {
                                    $rainwater_harvested = "By recharge ground";
                                    $rainwater_harvested_msg = "Recharging the ground water is a very good practice.";
                                } elseif ($sql_data_array['266617X37X2355'] == "A3") {
                                    $rainwater_harvested = "Combination of both";
                                    $rainwater_harvested_msg = "An excellent practice. Hope that you use the RWH systems to its full potential.";
                                }
                                ?>
            <h4><?php echo $rainwater_harvested; ?></h4>
            <p><?php echo $rainwater_harvested_msg; ?></p>
          </div>
        </li>
        <?php
                        if ($sql_data_array['266617X37X2355'] == "A2") {
                            ?>
        <li>
          <figure><img src="performance/images/clean.jpg"></figure>
          <div class="description">
            <h3>Groundwater recharge structure</h3>
            <?php
                                    if ($sql_data_array['266617X37X2372'] == "Y") {
                                        $gw_recharge_structure = "Yes";
                                        $gw_recharge_structure_msg = "Recharging the ground water is a very good practice.";
                                    }
                                    ?>
            <h4><?php echo $gw_recharge_structure; ?></h4>
            <p><?php echo $gw_recharge_structure_msg; ?></p>
          </div>
        </li>
        <?php } ?>
        <li>
          <figure><img src="performance/images/clean.jpg"></figure>
          <div class="description">
            <h3>How much area in your school is harvested</h3>
            <?php
                                //need to discuss for $school_harvested info
                                $school_harvested_area = $sql_data_array['266617X37X2376'];
                                
                                
                                if ($school_harvested_area == 7 || $school_harvested_area == 8 || $school_harvested_area == 9) {
                                    if($school_harvested_area ==7) 
                                    $school_harvested = "71 to 80 per cent";
                                    elseif($school_harvested_area ==8) 
                                    $school_harvested = "81 to 90 per cent";
                                    elseif($school_harvested_area ==9) 
                                    $school_harvested = "91 to 100 per cent";
                                    //$school_harvested = "91 to 100 per cent";
                                    $school_harvested_msg = "It's great that your school's rainwater harvesting area is more than 90%! We hope you continue with this green practice.";
                                } else if ($school_harvested_area == 5 || $school_harvested_area == 6) {
                                    
                                    if($school_harvested_area ==5) 
                                    $school_harvested = "51 to 60 per cent";
                                    elseif($school_harvested_area ==6) 
                                    $school_harvested = "61 to 70 per cent";
                                    //$school_harvested = "61 to 70 per cent";
                                    $school_harvested_msg = "It's great that your school's rainwater harvesting area is more than 50%! We hope you continue with this green practice and increase the catchment area in the near future.  Your school has the potential!";
                                } else if ($school_harvested_area == 4) {
                                    $school_harvested = "41 to 50 per cent";
                                    $school_harvested_msg = "Your school's rainwater harvesting area is between ".$school_harvested."! We hope you continue with this green practice and increase the catchment area in the near future.  Your school has the potential!";
                                } else if ($school_harvested_area == 3) {
                                    $school_harvested = "31 to 40 per cent";
                                    $school_harvested_msg = "Your school's rainwater harvesting area is ".$school_harvested."! We hope you continue with this green practice and expand the area in the near future.";
                                } else if ($school_harvested_area == 1 || $school_harvested_area == 2) {
                                    if($school_harvested_area ==1) 
                                    $school_harvested = "10 to 20 per cent";
                                    else
                                    $school_harvested = "21 to 30 per cent";
                                    $school_harvested_msg = "Your school's rainwater harvesting area is ".$school_harvested."! We hope you continue with this green practice and expand the area in the near future.";
                                }
                                ?>
            <h4><?php echo $school_harvested; // Need to discuss with ravi sir/ client   ?></h4>
            <p><?php echo $school_harvested_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/clean.jpg"></figure>
          <div class="description">
            <h3>Catchment Cleanliness</h3>
            <?php
                                //Q.6(e) Rate your catchment on cleanliness:
                                $cleanliness = $sql_data_array['266617X37X2396'];
                                if ($cleanliness == 1) {
                                    $Rateyourcatchment = "Good"; //good
                                    $Rateyourcatchment_msg = "Good that the catchments are clean and well maintained!";
                                } else if ($cleanliness == 2) {
                                    $Rateyourcatchment = "Average"; //Average
                                    $Rateyourcatchment_msg = "You need to clean the catchments more often.";
                                } else {
                                    $Rateyourcatchment = "Poor"; //Poor
                                    $Rateyourcatchment_msg = "The catchments are badly maintained! You need to clean the catchments more often. The best times are: pre-monsoon and post-monsoon.";
                                }
                                ?>
            <h4><?php echo $Rateyourcatchment; ?></h4>
            <p><?php echo $Rateyourcatchment_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/monitor.jpg"></figure>
          <div class="description">
            <h3>Does your school clean your catchment and system</h3>
            <?php
                                if ($sql_data_array['266617X37X2398'] == "Y") {
                                    $catchment_system = "Yes";
                                    $catchment_system_msg = "Good you are regular with cleaning the catchment.";
                                } elseif ($sql_data_array['266617X37X2398'] == "N") {
                                    $catchment_system = "No";
                                    $catchment_system_msg = "Clean your catchments twice a year! Unclean catchments can lead to a lot unwanted problems - could be a breeding place for mosquitoes.";
                                }
//                                else {
//                                    $catchment_system = "No";
//                                    $catchment_system_msg = "Clean your catchments twice a year! Unclean catchments can lead to a lot unwanted problems - could be a breeding place for mosquitoes.";
//                                }
                                ?>
            <h4><?php echo $catchment_system; ?></h4>
            <p><?php echo $catchment_system_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/monitor.jpg"></figure>
          <div class="description">
            <h3>Monitoring Rainwater Harvesting Efficiency</h3>
            <?php
//Question 6.g Water Section.
                                if ($sql_data_array['266617X37X2400'] == "Y") {
                                    $Rainwater_Harvesting = "Yes";
                                    $Rainwater_Harvesting_msg = "Its good that your school monitors the structure for its efficiency.";
                                } elseif ($sql_data_array['266617X37X2400'] == "N") {
                                    $Rainwater_Harvesting = "No";
                                    $Rainwater_Harvesting_msg = "You should ensure that the rainwater harvesting structure is monitored for its efficiency.";
                                }
                                else{
                                    $Rainwater_Harvesting = "No";
                                    $Rainwater_Harvesting_msg = "You should ensure that the rainwater harvesting structure is monitored for its efficiency.";
                                }
                                ?>
            <h4><?php echo $Rainwater_Harvesting; ?></h4>
            <p><?php echo $Rainwater_Harvesting_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/monitor.jpg"></figure>
          <div class="description">
            <h3>If your school's RWH structure is more than a year old, is there any improvement in the groundwater
              quality after the implementation of the RWH structure?</h3>
            <?php
                                //Question 6.i Water Section.
                                if ($sql_data_array['266617X37X2405'] == "Y") {
                                    $RWH_structure = "Yes";
                                    $RWH_structure_msg = "Its good that your school monitors the structure for its efficiency.";
                                } elseif ($sql_data_array['266617X37X2405'] == "N") {
                                    $RWH_structure = "No";
                                    $RWH_structure_msg = "Please ensure that you maintain the groundwater level in your area.";
                                }
                                ?>
            <h4><?php echo $RWH_structure; ?></h4>
            <p><?php echo $RWH_structure_msg; ?></p>
          </div>
        </li>
        <?php } ?>
<!--        <li>
          <figure><img src="performance/images/hygene.jpg"></figure>
          <div class="description">
            <h3>Sanitation and Hygiene Practices</h3>-->
            <?php
//Q.7: Please share details about sanitation and hygiene practices in your school. //6 points

                                $separate_toilets = $sql_data_array['266617X37X2337SQ001']; //Does the school have separate toilets for males and females?
                                $toilets_accessible = $sql_data_array['266617X37X2337SQ004'];
                                $differently_abled_children = $sql_data_array['266617X37X2337SQ005'];
                                $teaching_toilets = $sql_data_array['266617X37X2337SQ006'];
                                $non_teaching_toilets = $sql_data_array['266617X37X2337SQ007'];
                                $safety_toilets = $sql_data_array['266617X37X2337SQ008'];
                                if ($separate_toilets == "A1" && $toilets_accessible == "A1" && $differently_abled_children == "A1" && $teaching_toilets == "A1" && $non_teaching_toilets == "A1" && $safety_toilets == "A1") {
                                    $Hygiene_Practices = "Yes";
                                    $Hygiene_Practices_Msg = "Great that your school practices all the sanitation and hygiene related practices. Keep up the good work!";
                                } else {
                                    $Hygiene_Practices = "No";
                                    $Hygiene_Practices_Msg = "To make your school more hygiene friendly, please consider the following practices: Separate toilets for males and females, making toilets accessible and safe to use for children, making toilets accessible and safe to use for differently abled children, making  toilets accessible and safe to use for differently abled staff,  considering the right location for toilets in terms of privacy and safety,  ensure sufficient light during day time.";
                                }
                                ?>
<!--            <h4><?php echo $Hygiene_Practices; ?></h4>
            <p><?php echo $Hygiene_Practices_Msg; ?></p>
          </div>
        </li>-->
      </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">11</span>-->
    </div>
  </div>
  <div class="water">
    <h2>
      <figure><img src="performance/images/tap.jpg"></figure>
      <label>Water</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/drink.jpg"></figure>
          <div class="description">
            <h3>Load on Drinking Water Taps</h3>
            <?php        //Q.8 discuss regarding msg. for $DrinkingWaterTabs variable. 
                                $drinking_water_taps_8 = $sql_data_array['266617X37X1893'];
                                $Load_for_drinking_water_tap = $total_population / $drinking_water_taps_8;

                                if ($Load_for_drinking_water_tap <= 50 && $drinking_water_taps_8 != "" && $drinking_water_taps_8 != 0) {
                                    //$DrinkingWaterTabs = "If equal to the load";
                                    $DrinkingWaterTabs_Msg = "You have the required number of drinking water taps in your school. Please refer to the table for prescribed norm.";
                                } else {
                                    //$DrinkingWaterTabs = "If not equal to the load";
                                    $DrinkingWaterTabs_Msg = "You do not have the required number of drinking water taps in your school. Please refer to the table for prescribed norm.";
                                }
                                ?>
<!--            <h4><?php echo $DrinkingWaterTabs; ?></h4>-->
            <p><?php echo $DrinkingWaterTabs_Msg; ?></p>
          </div>
              <table width="100%" class="intro-table" cellspacing="0" style="margin-bottom: 0">
             <tr>
                 <th class="performance-blue-bg">Category</th>
                 <th class="performance-blue-bg">Load per drinking water tap</th>
                 <th class="performance-blue-bg">Load per ablution tap</th>
                 <th class="performance-blue-bg">Load per urinal</th>
                 <th class="performance-blue-bg">Load per water closet  </th>
                 
             </tr>
             <tr>
               <td>Day Scholar</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>45 people</td>
               

             </tr>
             <tr>
               <td>Day Boarding</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>40 people</td>
               <td>35 people</td>

             </tr>
             <tr>
               <td>Residential</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>30 people</td>
               <td>25 people</td>

             </tr>
             <tr>
               <td>Day scholar + Residential</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>35 people</td>                            
             </tr>
             <tr>
               <td>Day boarding + Residential</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>35 people</td>
               <td>30 people</td>                                
             </tr>
             <tr>
               <td>Day Scholar + Boarding </td>
               <td>50 people</td>
               <td>50 people</td>
               <td>50 people</td>
               <td>40 people</td>                               
             </tr>
           </table>
        </li>
        <li>
          <figure><img src="performance/images/pump.jpg"></figure>
          <div class="description">
            <h3>Hand Pumps</h3>
            <?php
                                //Q.9 How many hand pumps do you have?
                                $hand_pumps = $sql_data_array['266617X37X2346'];
                                //$Load_for_hand_pumps=$total_population/$hand_pumps;

                                if ($hand_pumps <= 1) { //Ref not provided in table
                                    $handpumps = "1 or 0";
                                    $handpumps_msg = "You do not have the hand pumps in your school. Good that your school is not extracting a lot of ground water.";
                                } else {
                                    $handpumps = "More than 1";
                                    $handpumps_msg = "You have many hand pumps in your school. Please ensure that you are not extracting too much of ground water.";
                                }
                                ?>
<!--            <h4><?php echo $handpumps; ?></h4>-->
            <p><?php echo $handpumps_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/ablution.jpg"></figure>
          <div class="description">
            <h3>Load on Ablution Taps</h3>
            <?php
                                //Q.10 How many ablution taps (taps used for washing hands only) do you have?
                                $ablution_taps_q10 = $sql_data_array['266617X37X1894'];
                                $Load_for_ablution_taps = $total_population / $ablution_taps_q10;

                                if ($Load_for_ablution_taps <= 50 && $ablution_taps_q10 != "" && $ablution_taps_q10 != 0) {
                                    $abulation_tabs = "Equal to or less than the load";
                                    $abulation_tabs_msg = "You have the required number of ablution taps in your school.";
                                } else {
                                    $abulation_tabs = "More than the load";
                                    $abulation_tabs_msg = "You do not have the required number of ablution taps in your school. Please refer to the table for prescribed norm.";
                                }
                                ?>
<!--            <h4><?php echo $abulation_tabs; ?></h4>-->
            <p><?php echo $abulation_tabs_msg; ?></p>
          </div>
        </li>
        <li class="page-break-before-new">
          <figure><img src="performance/images/wc.jpg"></figure>
          <div class="description">
            <h3>Load on Water Closets</h3>
            <?php          
            
//50 people  	45 people            Day scholar            1  
//40 people	                  35 people            Day boarding          2
//30 people	                  25 people            Residential              3
//50 people	                  35 people            Day scholar + Residential   6
//35 people        	30 people            Day boarding + Residential  5
//50 people	                  40 people            Day Scholar + Boarding 4
    
                                //Q.11 How many water closets (used for defecation and urination) do you have?
    $water_closets_q11 = $sql_data_array['266617X37X1896SQ005_SQ004'];
    $Load_for_water_closets = $total_population / $water_closets_q11;
    $school_type = $sql_data_array['266617X34X1608'];
    if ($school_type == 1 && $Load_for_water_closets <= 45 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //school type Day Scholar
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else if ($school_type == 2 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding 
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else if ($school_type == 3 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Residential 
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
  } else if ($school_type == 4 && $Load_for_water_closets <= 40 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else if ($school_type == 5 && $Load_for_water_closets <= 30 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding + Residential
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else if ($school_type == 6 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Residential
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else if ($school_type == 7 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination)  in your school.";
    } else {
        $waterclosets = "More than the load";
        $waterclosets_msg = "You do not have the required number of water closets (used for defecation and urination) in your school. Please refer to the table for prescribed norm.";
    }
                                ?>
<!--            <h4><?php echo $waterclosets; ?></h4>-->
            <p><?php echo $waterclosets_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/uninal.jpg"></figure>
          <div class="description">
            <h3>Load on Urinals</h3>
            
            <?php
                                //Q.12 How many urinals (strictly used for urination only) do you have?
                                $water_urinals_q12 = $sql_data_array['266617X37X1895'];
                                $Load_for_urinals = number_format(($total_population / $water_urinals_q12),2,".","");
                                $school_type = $sql_data_array['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
                                if ($school_type == 1 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //school type Day Scholar
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 2 && $Load_for_urinals <= 40 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding 
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 3 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Residential 
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 4 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 5 && $Load_for_urinals <= 35 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding + Residential
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 6 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Residential
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else if ($school_type == 7 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
                                } else {
                                    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You do not have the required number of urinals (strictly used for urination only) in your school. Please refer to the table for prescribed norm.";
                                }
                                ?>
<!--            <h4><?php echo $Load_for_urinals; ?> people per Urinal</h4>-->
            <p><?php echo $Load_for_urinals_msg; ?></p>
          </div>
        </li>
           </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">12</span>-->
    </div>
  </div>
  <div class="water">
    <h2>
      <figure><img src="performance/images/tap.jpg"></figure>
      <label>Water</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/outlet.jpg"></figure>
          <div class="description">
            <h3>Water Outlets</h3>
            <?php
                                //Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )

                                $other_water_outlets_q13 = $sql_data_array['266617X37X2347'];
                                $Load_for_other_water_outlets = $total_population / $other_water_outlets_q13;

                                if ($other_water_outlets_q13 > 1) { //not provided by cse
                                    $water_outlets = $Load_for_other_water_outlets;
                                    $water_outlets_msg = "You have many water outlets in your school. Please ensure that you are not extracting too much of ground water.";
                                } elseif($other_water_outlets_q13 ==0 || $other_water_outlets_q13 ==1 ) {
                                    $water_outlets = $Load_for_other_water_outlets;
                                    $water_outlets_msg = "You do not have many water outlets in your school. Good that your school is not extracting a lot of ground water.";
                                }
                                ?>
<!--            <h4><?php echo $water_outlets; ?> people per outlet</h4>-->
            <p><?php echo $water_outlets_msg; ?></p>
          </div>
        </li>
      
        <li>
          <figure><img src="performance/images/water_storage.jpg"></figure>
          <div class="description">
            <h3>Is there a water storage system in place to supply water in the toilets?</h3>
            <?php
                                //Q.14 Is there a water storage system in place to supply water in the toilets?

                                $storage_system_q14 = $sql_data_array['266617X37X2349'];
                                //$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;

                                if ($storage_system_q14  == 'Y') { //not provided by cse
                                    $storage_heading_q14 = "Yes";
                                    $water_supply = "You have a water storage system in place to supply water in the toilets";
                                } else {
                                    $storage_heading_q14 = "No";
                                    $water_supply = "You do not have a water storage system in place to supply water in the toilets";
                                }
                                ?>
            <h4><?php echo $storage_heading_q14; ?></h4>
            <p><?php echo $water_supply; ?></p>
          </div>
        </li>
        
        <li>
          <figure><img src="performance/images/water_supply.jpg"></figure>
          <div class="description">
            <h3>Is the water supply sufficient?</h3>
            <?php
                                //Q.15  Is the water supply sufficient? 
                                $storage_system_q15 = $sql_data_array['266617X37X2350'];
                                if ($storage_system_q15  == 'Y') { //not provided by cse
                                   $storage_heading_q15 = "Yes";
                                    $water_supply15 = "You have enough water supply.";
                                } else {
                                    $storage_heading_q15 = "No";
                                    $water_supply15 = "You do not have sufficient water supply";
                                }
                                ?>
            <h4><?php echo $storage_heading_q15; ?></h4>
            <p><?php echo $water_supply15; ?></p>
          </div>
        </li>
        
        <li>
          <figure><img src="performance/images/cleaned_toilets.jpg"></figure>
          <div class="description">
            <h3>Are the toilets cleaned?</h3>
            <?php
                                //Q.16 Are the toilets cleaned?
                                $storage_system_q16= $sql_data_array['266617X37X2351'];
                               if ($storage_system_q16  == 'Y') {         
                                   $storage_heading_q16 = "Yes";
                                    $water_supply16 = "Good that your toilets are cleaned everyday. Cleaning of toilet more than once a day is necessary.";
                                } else 
                                    {
                                    $storage_heading_q16 = "No";
                                 $water_supply16 = "Your toilets are not cleaned everyday. Cleaning of toilet more than once a day is necessary. ";
                                }
                                ?>
            <h4><?php echo $storage_heading_q16; ?></h4>
            <p><?php echo $water_supply16; ?></p>
          </div>
        </li>
        
          <li>
          <figure><img src="performance/images/wastewater_treatment.jpg"></figure>
          <div class="description">
            <h3>Does your school have a wastewater treatment facility</h3>
            <?php
                                //Q.17 Does your school have a wastewater treatment facility
                                $storage_system_q17= $sql_data_array['266617X37X2332'];
                               if ($storage_system_q17  == 'Y') {           
                                   $storage_heading_q17 = "Yes";
                                    $water_supply17 = "Good that your school has a wastewater treatment facility. Its really important that we treat our own wastewater.";
                                } else 
                                    {
                                    $storage_heading_q17 = "No";
                                 $water_supply17= "Your school does not have a wastewater treatment facility. It would be nice if your school could consider getting started with the treatment of wastewater within the school premises.";
                                }
                                ?>
            <h4><?php echo $storage_heading_q17; ?></h4>
            <p><?php echo $water_supply17; ?></p>
          </div>
        </li>
                </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">13</span>-->
    </div>
  </div>
  <div class="water">
    <h2>
      <figure><img src="performance/images/tap.jpg"></figure>
      <label>Water</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
          <li>
          <figure><img src="performance/images/reuse_wastewater.jpg"></figure>
          <div class="description">
            <h3>Does your school reuse the treated wastewater?</h3>
            <?php
                                //Q.18 Does your school reuse the treated wastewater?
                                $storage_system_q18= $sql_data_array['266617X37X2654'];
                               if ($storage_system_q18  == 'Y') {
                                   $storage_heading_q18 = "Yes";
                                    $water_supply18 = "Good that the treated wastewater is used within your school.";
                                } else 
                                    {
                                    $storage_heading_q18 = "No";
                                 $water_supply18 = "Your school should consider ways to use the treated wastewater.";
                                }
                                ?>
<!--            <h4><?php echo $storage_heading_q18; ?></h4>-->
            <p><?php echo $water_supply18; ?></p>
          </div>
        </li>
        
      </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">14</span>-->
    </div>
  </div>
  <div class="waste">
    <h2>
      <figure><img src="performance/images/waste.jpg"></figure>
      <label>Waste</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <p>Waste is another headache arising at an alarming level. Where to dispose waste? How to dispose waste? What to do with the waste? We feel one of the easiest solution could be waste segregation. We should feed it into our system that no matter what, we will segregate our waste, even if it gets mixed after it goes out from our homes/schools.</p>
    <section class="remember">
      <h3>Remember:</h3>
      <ul>
        <li>Segregation at source is very important.</li>
        <li>Every class should have minimum of two dustbins to collect wet and dry waste.</li>
        <li>Schools should have a composting facility to manage the wet waste in the school premises itself.</li>
        <li>Send e-waste to Authorised dealers.</li>
        <li>Do not burn waste in school premises, especially horticultural waste. Alternatively, composting should be done by horticultural waste.</li>
        <li>Waste should be sent to designated dumping or landfill sites.</li>
        <li>Schools should have a waste policy that is to be practiced in schools.</li>
      </ul>
    </section>
    <h3>Your School's Performance</h3>
    <?php
                    $total_waste_points = number_format(GetWastePoints($token),2);
                    if($total_waste_points >= 61 && $total_waste_points <=  65 )
                        $point_performance_msg_w = "You have done very well in this section. Your school manages all of its waste very efficiently. We are glad that your school has created a waste-wise society.";
                    elseif($total_waste_points >= 45 && $total_waste_points <= 60.9 )
                        $point_performance_msg_w = "You have done good in this section. Your school manages most of the waste. We hope that through the assessment below you will take what is required to make your school a waste management efficient school.";
                    elseif($total_waste_points >= 15 && $total_waste_points <= 44.9)
                        $point_performance_msg_w = "You have done average in this section. Your school manages most of the waste. We hope that through the assessment below you will take what is required to make your school a waste management efficient school.";
                    elseif($total_waste_points < 15)
                        $point_performance_msg_w = "You have done poorly  in this section. Your school needs to manage its waste. We hope that through the assessment below you will take what is required to make your school a waste management efficient school. ";                   
                ?>
    <p><?php echo $point_performance_msg_w; ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/segregate.jpg"></figure>
          <div class="description">
            <h3>Segregation of Solid Waste</h3>
            <?php
                                // Qn 1 : Does your school segregate solid waste?
                                $segregate_solid_waste = $sql_data_array['266617X38X2032'];
                                if ($segregate_solid_waste == 'Y') {
                                    $st_msg = "Yes";
                                    $watse1_msg = "Your school segregates Waste at source. Inculcating this habit of waste segregation at source among students can help reform the waste related problem at a bigger level.";
                                } else {
                                    $st_msg = "No";
                                    $watse1_msg = "Your School does not segregate waste at source. We strongly recommend that waste is segregated at source and students should be made aware and practice segregation within the school premises.";
                                }
                                ?>
            <h4><?php echo $st_msg; ?></h4>
            <p><?php echo $watse1_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/collection.jpg"></figure>
          <?php
                            //Qn 2 : Waste collection points in your school.
                            // Total Sum of (0,1,2 and 3 bins);
                            $total_collection_bins = $sql_data_array['266617X38X2143SQ011_SQ004'];
                            // Total Sum of (0,1 bins);     
                            $total_collection_0_1_bins = $sql_data_array['266617X38X2143SQ011_SQ001'] + $sql_data_array['266617X38X2143SQ011_SQ002'];

                            // Total Sum of (2,3 bins);
                            $total_collection_2_3_bins = $sql_data_array['266617X38X2143SQ011_SQ003'] + $sql_data_array['266617X38X2143SQ011_SQ005'];
                            
                            // Percentage of 2 and 3 bins
                            $two_three_bin_percentage = number_format(($total_collection_2_3_bins/$total_collection_bins)*100,2,".","");

                            // Column 5 (2bins) and Column 6 (3or more bins) is equal to Sum of Total no. of collection points
                            if ($two_three_bin_percentage >= 76 && $two_three_bin_percentage <=100) {
                                $msg_waste2 = "Most of the collection points have two or more than two dustbins for different categories of waste. A good practice! We encourage that students learn to segregate waste at source.";
                            }

                            //   Column 5 (2bins) and Column 6 (3or more bins) is very less than Sum of Total no. of collection 
                            elseif ($two_three_bin_percentage >= 50 && $two_three_bin_percentage <=75) {
                                $msg_waste2 = "Most of the collection points have two or more than two dustbins for different categories of waste. A good practice! We encourage that students learn to segregate waste at source.";
                            }

                              //Column 5 (2bins) and Column 6 (3 or more bins) is less than Sum of Total no. of collection 
                            elseif ($two_three_bin_percentage >= 25 && $two_three_bin_percentage <=49) {
                                $msg_waste2 = "Waste segregation at source is not efficient in your school. We strongly recommend that your school considers putting more collection points with two or more dustbins! We encourage that students learn to segregate waste at source.";
                            }
                            
                             elseif ($two_three_bin_percentage < 25) {
                                $msg_waste2 = "Waste segregation at source is not efficient in your school. We strongly recommend that your school considers putting more collection points with two or more dustbins! We encourage that students learn to segregate waste at source.";
                            }
                            //'Column 3 (No bin) and Column 4 (1 bin) is equal to Sum of Total no. of collection points the school 
                            elseif ($total_collection_0_1_bins == $total_collection_bins) {
                                $msg_waste2 = "Waste segregation at source is not efficient in your school. We strongly recommend that your school considers putting more collection points with two or more dustbins! We encourage that students learn to segregate waste at source. ";
                            }

                          
                        
                            ?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
        </li>
            </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">15</span>-->
    </div>
  </div>
  <div class="waste">
    <h2>
      <figure><img src="performance/images/waste.jpg"></figure>
      <label>Waste</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="performance/images/quantity.jpg"></figure>
          <div class="description">
            <?php
$school_type = $sql_data_array['266617X34X1608'];


if ($school_type == 1) { //Day Scholar
    $per_capita = 100;
} else if ($school_type == 2) { //Day Boarding (8 hours)
    $per_capita = 150;
} else if ($school_type == 3) { // "Residential (24 hours)")
    $per_capita = 300;
} else if ($school_type == 4) { //Day Scholar + Day Boarding
    $per_capita = 150;
} else if ($school_type == 5) { //Day Boarding + Residential
    $per_capita = 350;
} else if ($school_type == 6) { //Day Scholar + Residential
    $per_capita = 300;
} else if ($school_type == 7) { //Day Scholar + Day Boarding + Residential
    $per_capita = 300; // Not provided by CSE
}

$generated_solid_waste = $sql_data_array['266617X38X2125SQ009_SQ001'];
$total_waste = ($generated_solid_waste * 1000);                   //in grams	
$total_population = $sql_data_array['266617X32X33SQ004_SQ003'];

$per_day_waste_generation = $total_waste / 30;
$per_capita_waste_generation = $per_day_waste_generation / $total_population;
$per_capita_waste_generation = round($per_capita_waste_generation, 2);


if ($per_capita_waste_generation <= $per_capita) {
    $waste_msg1 = "Your school's per capita waste consumption (" . $per_capita_waste_generation . " gms per person) is according to the norms (" . $per_capita . " gms per person) for your school type";
    $waste_msg2 = "Well done! Your school's per person per day waste generation is according to the norms.";
} elseif ($per_capita_waste_generation > $per_capita) {
    $waste_msg1 = "Your school's per capita waste consumption (" . $per_capita_waste_generation . " gms per person) is higher than norms (" . $per_capita . " gms per person) for your school type";
    $waste_msg2 = "Your school's per person per day waste generation is not according to the norms. You are generating waste more than you should. Refer to the table to see how much waste per person per day is acceptable. ";
}
?>
            <h3>Quantity of Waste Generated</h3>
<!--            <h4><?php echo $waste_msg1; ?></h4>-->
            <p><?php echo $waste_msg2; ?></p>
          </div>
        </li>
    
        <li>
          <figure><img src="performance/images/recycle.jpg"></figure>
          <div class="description">
            <?php
//4) Does your school recycle any generated waste?
$waste_recycle = $sql_data_array['266617X38X2041'];
if ($waste_recycle == "Y") {

    $total_generated_waste = $sql_data_array['266617X38X2125SQ009_SQ001'];
    $total_recycled_waste = $sql_data_array['266617X38X2042SQ010_SQ001'];
    $waste_recycled_percent = round((($total_recycled_waste * 100) / $total_generated_waste), 2);

    if ($waste_recycled_percent == 100) {    //100%
        $waste_msg41 = "School recycles 100% of the waste";
        $waste_msg42 = "Your school recycles a lot of its waste. You recycle " . $waste_recycled_percent . " per cent of waste. We hope you are able to become waste efficient school at the earliest.";
    } elseif ($waste_recycled_percent >= 50 && $waste_recycled_percent < 100) {    //50%
        $waste_msg41 = "School recycles 50% or above of it's waste ";
        $waste_msg42 = "Your school recycles most of it's waste. You recycle " . $waste_recycled_percent . " per cent of waste. We hope you are able to become waste efficient school at the earliest.";
    } elseif ($waste_recycled_percent >= 0 && $waste_recycled_percent <= 49.9) {   //0%-49.9%
        $waste_msg41 = "School recycles 0%-49.9% of it's waste";
        $waste_msg42 = "Your school recycles some of its waste. You recycle " . $waste_recycled_percent . " per cent of waste. We hope you are able to become waste efficient school at the earliest.";
    }
    elseif ($waste_recycled_percent > 100) { 
        $waste_msg42 = "Calculation Error : Your school did not submit the correct data therefore there is a calculation error here. Please fill the correct data for better analysis.";
            } 
}
?>
            <h3>Recycling of Waste</h3>
            <?php
                                if ($waste_msg41 != "" && $waste_msg42 != "") {
                                    ?>
<!--            <h4><?php echo $waste_msg41 ?></h4>-->
            <p><?php echo $waste_msg42 ?></p>
            <?php
                                } else {
                                    ?>
            <p>School does not recycle the waste</p>
            <?php
}
?>
          </div>
        </li>
        <li>
          <figure><img src="performance/images/compose.jpg"></figure>
          <div class="description">
            <?php
//Qn 5 : Does your school have a composting facility?
                                $waste_composting = $sql_data_array['266617X38X2064'];
                                if ($waste_composting == "Y") {
                                    $st_waste5 = "Yes";
                                    $msg_waste5 = "Your school has a composting facility and we hope that you are using it to its potential.";
                                } elseif ($waste_composting == "N") {
                                    $st_waste5 = "No";
                                    $msg_waste5 = "Your school does not have a composting facility. We encourage you to start composting in your school.";
                                }
                                ?>
            <h3>Waste Composting</h3>
            <h4><?php echo $st_waste5; ?></h4>
            <p><?php echo $msg_waste5; ?></p>
          </div>
        </li>
        <!-- Textbook Reuse Start -->
        <li>
          <figure><img src="performance/images/book.jpg"></figure>
          <div class="description">
            <?php
//Qn 6 : Does your school encourage students & teachers to reuse textbooks?
$reuse_textbook = $sql_data_array['266617X38X2074'];
if ($reuse_textbook == "Y") {
    $st_waste6 = "Yes";
    $msg_waste6 = "It is great that you encourage the school community to reuse textbooks.";
} elseif ($reuse_textbook == "N") {
    $st_waste6 = "No";
    $msg_waste6 = "Your school is not encouraging the students and teachers to reuse textbooks. Please encourage your school community to reuse the textbooks.";
}
?>
            <h3>Textbook Reuse</h3>
            <h4><?php echo $st_waste6; ?></h4>
            <p><?php echo $msg_waste6; ?></p>
          </div>
        </li>
        <!-- Textbook Reuse End --->
        
        <li>
          <figure><img src="performance/images/destination.jpg"></figure>
          <?php
//Qn 8 Final destination for waste from your school
$waste_destination = $sql_data_array['266617X38X2076'];
if ($waste_destination == "A1") {
    $st_waste8 = "Open dumping";
    $msg_waste8 = "Your school does not know where its waste goes for waste disposal. Try to  recycle more of your waste within the school! And try to get your students to map the disposal of waste outside the school premises - as an exercise! ";
} elseif ($waste_destination == "A2") {
    $st_waste8 = "Designated dumping site (Dhalao)";
    $msg_waste8 = "Your school makes sure that the waste reaches the designated site for waste disposal. Try to  recycle more of your waste within the school!";
} elseif ($waste_destination == "A3") {
    $st_waste8 = "Landfill Site";
    $msg_waste8 = "Your school makes sure that the waste reaches the designated site for waste disposal. Try to  recycle more of your waste within the school!";
} elseif ($waste_destination == "A4") {
    $st_waste8 = "Don't know";
    $msg_waste8 = "Your school does not know where its waste goes for waste disposal. Try to  recycle more of your waste within the school! And try to get your students to map the disposal of waste outside the school premises - as an exercise! ";
}
?>
          <div class="description">
            <h3>Waste Destination</h3>
            <h4><?php echo $st_waste8; ?></h4>
            <p><?php echo $msg_waste8; ?></p>
          </div>
        </li>
          </ul>
    </section>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">16</span>-->
    </div>
  </div>
  <div class="waste">
    <h2>
      <figure><img src="performance/images/waste.jpg"></figure>
      <label>Waste</label>
      <span>Green Schools Programme Audit 2016</span></h2>
    <section class="performance-category">
      <ul>
        <!-- Burning of Waste Start -->
        <li>
          <figure><img src="performance/images/trash.jpg"></figure>
          <div class="description">
            <?php
//Qn 9 : Does your school burn waste?
$burn_waste = $sql_data_array['266617X38X2081'];
if ($burn_waste == "Y") {
    $st_waste9 = "Yes";
    $msg_waste9 = "Burning waste is one of the biggest environmental hazards. It releases toxic gases which is not only bad for the human body but also has adverse effects on the environment. We request you to kindly not burn the waste";
} elseif ($burn_waste == "N") {
    $st_waste9 = "No";
    $msg_waste9 = "It's great that you do not burn waste. This practice of should be instilled in kids so that they discourage burning waste even outside the school.";
}
?>
            <h3>Burning of Waste</h3>
            <h4><?php echo $st_waste9; ?></h4>
            <p><?php echo $msg_waste9; ?></p>
          </div>
        </li>
        
        <!-- Burning of Waste End --->
        
        <?php
//Qn 11 Do you know that your E-waste can be collected by an authorised dealer or dismantler?
$authorised_dealer = $sql_data_array['266617X38X2114'];
if ($authorised_dealer == "Y") {
    ?>
        <li>
          <figure><img src="performance/images/e-waste.jpg"></figure>
          <div class="description">
            <?php
                            ////Qn 11(a)  Who collects your e-waste, when not in working condition?
                            $e_waste_disposal = $sql_data_array['266617X38X2115'];
                            if ($e_waste_disposal == "A1") {
                                $st_waste11 = "Kabadiwalla/ Scrapdealer";
                                $msg_waste11 = "You sell your e-waste to a Kabadiwala/ Scrapdealer,  which is an efficient disposal method. Sell your E- waste to an authorised reseller so that they can reuse or recycle the waste effectively. ";
                            } elseif ($e_waste_disposal == "A2") {
                                $st_waste11 = "Taken back by manufacturer/vendor";
                                $msg_waste11 = "You sell your e-waste to an authorised seller which helps it get reused or recycled more effectively. ";
                            } elseif ($e_waste_disposal == "A4") {
                                $st_waste11 = "Authorised dealer";
                                $msg_waste11 = "You sell your e-waste to an authorised seller which helps it get reused or recycled more effectively. ";
                            } elseif ($e_waste_disposal == "A5") {
                                $st_waste11 = "Authorised dismantler";
                                $msg_waste11 = "You sell your e-waste to an authorised seller which helps it get reused or recycled more effectively. ";
                            } elseif ($e_waste_disposal == "-oth-" && $sql_data_array['266617X38X2115other'] != "") {
                                $st_waste11 = $sql_data_array['266617X38X2115other'];
                                $msg_waste11 = "Your school does not know where its waste goes for waste disposal. Try to  recycle more of your waste within the school! And try to get your students to map the disposal of waste outside the school premises - as an exercise! ";
                            }
                            ?>
            <h3>E-waste Disposal</h3>
            <h4><?php echo $st_waste11; ?></h4>
            <p><?php echo $msg_waste11; ?></p>
          </div>
        </li>
        <?php
                                }
                                ?>
      </ul>
    </section>
    <h3>Thank You</h3>
    <p>Hope that each year your school will participate in the GSP audit and build a cadre of environmentally responsible citizens, in addition to moving up the rank to become the # 1 Green School in India!</p>
    <div class="footer">
      <p>Performance Report | <?php echo $school_name; ?></p>
<!--      <span class="p-number">17</span>-->
    </div>
  </div>
</div>
</body>
</html>
