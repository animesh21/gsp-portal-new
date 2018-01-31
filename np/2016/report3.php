<?php
session_start();
error_reporting(1);
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');
include('functions.php');

//POST VALUES FROM THE FORM
if(isset($_REQUEST['show']))
{
$state = $_REQUEST['state'];

$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$state."'"));
$state_name=$sql_state['name'];

$cond='';
$Airpoints=GetAirPointsState($state);
$Energypoints=GetEnergyPointsState($state);

$Foodpoints=GetFoodPointsState($state);
$Landpoints=GetLandPointsState($state);
$Waterpoints=GetWaterPointsState($state);
$Wastepoints=GetWastePointsState($state);


//echo "<pre>";
//print_r($Airpoints);
//print_r($Energypoints);
//print_r($Foodpoints);
//print_r($Landpoints);
//print_r($Waterpoints);
//print_r($Wastepoints);
//echo "</pre>";


$CombineArray = array($Airpoints,$Energypoints,$Foodpoints,$Landpoints,$Waterpoints,$Wastepoints);


//$Airpoints=GetAirPoints_ByState($state,$cond);
//$Energypoints=GetEnergyPoints_ByState($state,$cond);
//
//$Foodpoints=GetFoodPoints_ByState($state,$cond);
//$Landpoints=GetLandPoints_ByState($state,$cond);
//$Waterpoints=GetWaterPoints_ByState($state,$cond);
//$Wastepoints=GetWastePoints_ByState($state,$cond);

//$CombineArray=array_merge($Airpoints,$Energypoints,$Foodpoints,$Landpoints,$Waterpoints,$Wastepoints);

//$CombineArray=array_map($Airpoints,$Energypoints,$Foodpoints,$Landpoints,$Waterpoints,$Wastepoints);

$sumArray = array();


//echo "<pre>";
//print_r($CombineArray);
//echo "</pre>";

foreach ($CombineArray as $k=>$subArray) {
  foreach ($subArray as $id=>$value) {
    $sumArray[$id]+=$value;
  }
}
//echo "<hr>";

//echo "<pre>";
//print_r($sumArray);
//echo "</pre>";

//print_r(array_count_values($sumArray));


$performance_1=0;
$performance_2=0;
$performance_3=0;
$performance_4=0;
foreach($sumArray as $key => $value)
{
    
$totalpointspercent=number_format((($value*100)/157),2);

    
    if ($totalpointspercent >= 70 && $totalpointspercent<=100) 
        $performance_1++;
    if ($totalpointspercent >= 50 && $totalpointspercent<=69.9) 
        $performance_2++;
    if ($totalpointspercent >= 35 && $totalpointspercent<=49.9) 
        $performance_3++;
    if ($totalpointspercent >= 0 && $totalpointspercent<=34.9) 
        $performance_4++;
    
}
    
    echo $count;

//$performance_1=array_reduce($sumArray, function ($a, $b) {
//    return ($b >= 70 && $b<=100) ? ++$a : $a;
//}); // returns 4
//
//$performance_2=array_reduce($sumArray, function ($a, $b) {
//    return ($b >= 50 && $b<=69.9) ? ++$a : $a;
//}); // returns 4
//
//$performance_3=array_reduce($sumArray, function ($a, $b) {
//    return ($b >= 35 && $b<=49.9) ? ++$a : $a;
//}); // returns 4
//
//$performance_4=array_reduce($sumArray, function ($a, $b) {
//    return ($b >= 0 && $b<=34.9) ? ++$a : $a;
//}); // returns 4


//echo $performance_1." === ".$performance_2." ==== ".$performance_3."####".$performance_4;
if($performance_1=="")
{
	$performance_1=0;
}

if($performance_2=="")
{
	$performance_2=0;
}
if($performance_3=="")
{
	$performance_3=0;
}
if($performance_4=="")
{
	$performance_4=0;
}
/*
$performance_1=15;
$performance_2=20;
$performance_3=40;
$performance_4=0;
*/
//Performance Report
/*
$performance_query1 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <=0 AND `score` BETWEEN 70 AND 100");
$performance_1 = mysql_num_rows($performance_query1); 

$performance_query2 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <=0 AND `score` BETWEEN 50 AND 69.9");
$performance_2 = mysql_num_rows($performance_query2); 

$performance_query3 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <=0 AND `score` BETWEEN 35 AND 49.9");
$performance_3 = mysql_num_rows($performance_query3); 

$performance_query4 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <=0 AND  `score` BETWEEN 0 AND 34.9");
$performance_4 = mysql_num_rows($performance_query3); 
*/


}
include('header.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GSP Audit Dashboard</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function Validate() {
            var option1 = document.getElementById("state");
            if (option1.value == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select state");
                document.getElementById("state").focus();
                return false;
            }
            return true;
        }
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<?php echo $state_name; ?> Schools Performance'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
            exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.y} Schools ({point.percentage:.1f}%)</b>',
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: <?php echo $performance_1; ?>}, {name: 'Between 50% to 69.9%',color:'#fcfc00',y: <?php echo $performance_2; ?>}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: <?php echo $performance_3; ?>}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: <?php echo $performance_4; ?>}]
            }]
        });
    });
});
		</script>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div class="container">
<div class="wrapper">
<div class="content-form" style="padding-top: 2px;">

<div class="top-area">
<h2><?php echo strtoupper("Performance By State"); ?></h2>
</div>

    <form name="state_compare" id="state_compare" method="post">
        <div class="row" style="margin: 20px 0;">
       
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <select id="state" class="form-control" name="state">
            <option value="">Select State</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india`");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>" <?php if($state == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()" />
            </div>
    </div>
    </form>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<!--<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<div id="container4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>-->
</div>
</div>
</div>

</body>
</html>
