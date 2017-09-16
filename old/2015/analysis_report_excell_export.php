<?php // Database Connection
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');

// Fetch Record from Database

$output = "";
$table = "lime_survey_266617"; // Enter Your Table Name 
$sql = mysql_query("select * from $table where `submitdate` is not null order by `startdate` DESC");
$columns_total = mysql_num_fields($sql);

// Get The Field Name

$output .= '"S.No",';
$output .= '"Sch.Id",';
$output .= '"School Name",';
$output .= '"Address1",';
$output .= '"Address2",';

$output .= '"Country",'; //from token table
$output .= '"State",';  // from token table

$output .= '"City",';
$output .= '"Pincode",';
$output .= '"ISD Code",';
$output .= '"STD Code",';
$output .= '"Landline Number",';

$output .= '"School Email",'; //from token table

$output .= '"Principal Name",';
$output .= '"Principal Mobile",';
$output .= '"Coordinator Name",';
$output .= '"Coordinator Email",';
$output .= '"Coordinator Mobile",';
$output .= '"Password",';
$output .= '"Reg. Date",'; //from token table
$output .= '"Comp. Date",';//from token table
$output .= '"Completeness",'; //From score table


$output .= '"AIR:No. of classrooms",'; 
$output .= '"AIR:Window floor ratio",';
$output .= '"AIR:Ownership of vehicles",';



$output .="\n";

// Get Records from the table

$k = 0;
while ($sql_data_array=mysql_fetch_array($sql)) {
    
         $sql_cntryname = "select `name` from `countries` where `id`='".$sql_data_array['266617X34X1593']."'";
         $sql_cname_array = mysql_query($sql_cntryname);
         $sql_cname = mysql_fetch_array($sql_cname_array);
         
         $sq = mysql_fetch_array(mysql_query("SELECT `completeness` FROM `lime_answers_for_progress` where `token`='".$sql_data_array['token']."'"));
         $sql_comp = $sq['completeness'];
    
    $sql_details = mysql_query("select * from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'"); //Token table data
    $sql_details_array = mysql_fetch_array($sql_details);
    
    $sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$sql_data_array['token']."' GROUP BY `token`"));
    
    $sql_bonus = mysql_fetch_array(mysql_query("select SUM(bonus) as bonus from `calculation` where `token` = '".$sql_data_array['token']."' GROUP BY `token`"));
    
    //Air
    $sql_score_air = mysql_fetch_array(mysql_query("select SUM(score) as scoreAir from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='4'  GROUP BY `token`"));
    
    //Energy
    $sql_score_energy = mysql_fetch_array(mysql_query("select SUM(score) as scoreEnergy from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='8'  GROUP BY `token`"));
    
    //Food
    $sql_score_food = mysql_fetch_array(mysql_query("select SUM(score) as scoreFood from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='36'  GROUP BY `token`"));
    
    //Land
    $sql_score_land = mysql_fetch_array(mysql_query("select SUM(score) as scoreLand from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='7'  GROUP BY `token`"));
    
    //Water
    $sql_score_water = mysql_fetch_array(mysql_query("select SUM(score) as scoreWater from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='37'  GROUP BY `token`"));
    
    //Waste
    $sql_score_waste = mysql_fetch_array(mysql_query("select SUM(score) as scoreWaste from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='38'  GROUP BY `token`"));
    
$k ++;

    $output .='"'.$k.'",';
    $output .='"'.$sql_data_array['id'].'",';
    $output .='"'.$sql_data_array['266617X34X1590'].'",';
    $output .='"'.$sql_data_array['266617X34X1591'].'",';
    $output .='"'.$sql_data_array['266617X34X1592'].'",';
    $output .='"'.$sql_cname.'",';
    $output .='"'.$sql_cname.'",';
    $output .='"'.$sql_data_array['266617X34X1656'].'",';
    $output .='"'.$sql_data_array['266617X34X1596'].'",';
    $output .='"'.$sql_data_array['266617X34X1597SQ001'].'",';
    $output .='"'.$sql_data_array['266617X34X1597SQ003'].'",';
    $output .='"'.$sql_data_array['266617X34X1597SQ002'].'",';
    $output .='"'.$sql_details['attribute_12'].'",';
    $output .='"'.$sql_data_array['266617X34X1602'].'",';
    $output .='"'.$sql_data_array['266617X34X1600SQ002'].'",';
    $output .='"'.$sql_data_array['266617X34X1604'].'",';
    $output .='"'.$sql_data_array['266617X34X1605'].'",';
    $output .='"'.$sql_data_array['266617X34X1606SQ002'].'",';
    $output .='"'.$sql_data_array['token'].'",';
    $output .='"'.date('d-m-Y', strtotime($sql_details['datetime'])).'",';
    $output .='"'.date('d-m-Y', strtotime($sql_data_array['submitdate'])).'",';
    $output .='"'.$sql_comp.'",';
    $output .='"'.number_format($sql_data_array['266617X4X1127'],$decimals = 0, $dec_point = ".", $thousands_sep = "").'",'; //total classrooms
    $sql_floor_details = mysql_query("select 266617X4X2197SQ001_SQ001, 266617X4X2197SQ002_SQ001, 266617X4X2197SQ003_SQ001, 266617X4X2197SQ004_SQ001, 266617X4X2197SQ005_SQ001, 266617X4X2197SQ006_SQ001, 266617X4X2197SQ007_SQ001, 266617X4X2197SQ008_SQ001, 266617X4X2197SQ009_SQ001, 266617X4X2197SQ010_SQ001, 266617X4X2197SQ011_SQ004 from `lime_survey_266617` where `token`='".$sql_details_array['token']."'");
                  $resultSet = array();
                  while($result = mysql_fetch_assoc($sql_floor_details))
                  {
                    $resultSet = $result;
                    $total_percentage_ventilated = number_format($result['266617X4X2197SQ011_SQ004'],2);
                  }
                  $non_empty_records = count(array_filter($resultSet));
                  $avg = $total_percentage_ventilated/$non_empty_records;
                  $view_avg = number_format($avg,2).'",';
    $output .='"'.$view_avg.'"'; //Window floor ratio
    
    
         if($sql_data_array['266617X4X164'] == "A1") // Vechicle Ownership starts
         {             
             $output .='School does not use or own vehicles ';
         }
         elseif($sql_data_array['266617X4X164'] == "A2")
         {
             $output .='Operator-owned vehicles ';
         }
         elseif($sql_data_array['266617X4X164'] == "A3")
         {
             $output .='School-owned vehicles ';
         }
         elseif($sql_data_array['266617X4X164'] == "A4")
         {
             $output .='A combination of school-owned and operator-owned vehicles ';
         }
        
        $output .=": Total vehicles = "; 
        if($sql_data_array['266617X4X165SQ001_SQ003'] == 0)
            { 
            $output .=0; 
            }
            else
            { 
            $output .=$sql_data_array['266617X4X165SQ001_SQ003']; 
            }
        $output .=": Vehicles on CNG = "; 
        if($sql_data_array['266617X4X2217SQ004_SQ004'] == 0)
            { 
            $output .=0; 
            }
            else
            { 
            $output .=$sql_data_array['266617X4X2217SQ004_SQ004']; 
            $output .=" Buses: ".$sql_data_array['266617X4X2217SQ001_SQ004']; 
            $output .=" Car: ".$sql_data_array['266617X4X2217SQ002_SQ004']; 
            $output .=" Van: ".$sql_data_array['266617X4X2217SQ003_SQ004'];
            } 
            
        $output .=": Vehicles more than 5 years = "; 
        if($sql_data_array['266617X4X165SQ002_SQ003'] == 0)
            { 
            $output .= 0; 
            }
            else
            { 
            $output .= $sql_data_array['266617X4X165SQ002_SQ003']; 
            $output .=" Buses: ".$sql_data_array['266617X4X165SQ002_SQ001']; 
            $output .=" Car: ".$sql_data_array['266617X4X165SQ002_SQ002']; 
            $output .=" Van: ".$sql_data_array['266617X4X165SQ002_SQ008'];
            } 
            
            
        $output .=": Vehicles with AC = "; 
        if($sql_data_array['266617X4X165SQ004_SQ003'] == 0)
            { 
            $output .= 0; 
            }
            else
            { 
            $output .=$sql_data_array['266617X4X165SQ004_SQ003']; 
            $output .=" Buses: ".$sql_data_array['266617X4X165SQ004_SQ001']; 
            $output .=" Car: ".$sql_data_array['266617X4X165SQ004_SQ002']; 
            $output .=" Van: ".$sql_data_array['266617X4X165SQ004_SQ008']; 
            } 
            
        
        $output .=": Vehicles with PUC = "; 
        if($sql_data_array['266617X4X165SQ005_SQ003'] == 0)
            { 
            $output .= 0; 
            }
            else
            { 
            $output .=$sql_data_array['266617X4X165SQ005_SQ003'];
            $output .=" Buses: ".$sql_data_array['266617X4X165SQ005_SQ001']; 
            $output .=" Car: ".$sql_data_array['266617X4X165SQ005_SQ002']; 
            $output .=" Van: ".'"'.$sql_data_array['266617X4X165SQ005_SQ008'].'"';
            
            }
            
        // Vechicles ownership ends
    
    
    $output .="\n";
}

// Download the file

$filename = "Analysis_Report_('".date('d-m-Y')."').csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
exit;
?>
