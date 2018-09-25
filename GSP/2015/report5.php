<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

//POST VALUES FROM THE FORM
if(isset($_REQUEST['compare']))
{
$state = $_REQUEST['state'];

 if($state=="All India")
	 {
		 $state_condition=" ";
		 $state="All India";
	 }else{
		 
		$state_condition=" AND lsur.`attribute_5`='".$state."'";
	 }


//Combined
$sql_query_combined = mysql_fetch_array(mysql_query("select ltok.`266617X32X33SQ004_SQ003`, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` = 0 AND ltok.`submitdate` is not null $state_condition"));
$possible_waste_combined = round($sql_query_combined['266617X32X33SQ004_SQ003']*100/1000);
$actual_waste_combined = round($sql_query_combined['ag']/1000);
$recycled_waste_combined = round($sql_query_combined['recy']/1000);
$decomposed_waste_combined = round($sql_query_combined['decompo']/1000);


//Day Scholer Query
$sql_query_dayscholer = mysql_fetch_array(mysql_query("select ltok.`266617X32X33SQ004_SQ003`, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` = 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608SQ001` = 'Y' $state_condition"));
$possible_waste_dayscholer = round($sql_query_dayscholer['266617X32X33SQ004_SQ003']*100/1000);
$actual_waste_dayscholer = round($sql_query_dayscholer['ag']/1000);
$recycled_waste_dayscholer = round($sql_query_dayscholer['recy']/1000);
$decomposed_waste_dayscholer = round($sql_query_dayscholer['decompo']/1000);

//Day Bording Query
$sql_query_daybording = mysql_fetch_array(mysql_query("select ltok.`266617X32X33SQ004_SQ003`, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` = 0 AND ltok.`submitdate` is not null AND  ltok.`266617X34X1608SQ002` = 'Y' $state_condition"));
$possible_waste_daybording = round($sql_query_daybording['266617X32X33SQ004_SQ003']*150/1000);
$actual_waste_daybording = round($sql_query_daybording['ag']/1000);
$recycled_waste_daybording = round($sql_query_daybording['recy']/1000);
$decomposed_waste_daybording = round($sql_query_daybording['decompo']/1000);

//Residential Query
$sql_query_residential = mysql_fetch_array(mysql_query("select ltok.`266617X32X33SQ004_SQ003`, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` = 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608SQ003` = 'Y' $state_condition"));
$possible_waste_residential = round($sql_query_residential['266617X32X33SQ004_SQ003']*300/1000);
$actual_waste_residential = round($sql_query_residential['ag']/1000);
$recycled_waste_residential = round($sql_query_residential['recy']/1000);
$decomposed_waste_residential = round($sql_query_residential['decompo']/1000);



// Final Arrays
$final_array_poss = array($possible_waste_combined,$possible_waste_dayscholer, $possible_waste_daybording, $possible_waste_residential);
$final_poss_data = json_encode($final_array_poss);
//print_r($final_poss_data);
//echo "<br>";

$final_array_act = array($actual_waste_combined,$actual_waste_dayscholer, $actual_waste_daybording, $actual_waste_residential);
$final_act_data = json_encode($final_array_act);
//print_r($final_act_data);
//echo "<br>";

$final_array_recy = array($recycled_waste_combined,$recycled_waste_dayscholer, $recycled_waste_daybording, $recycled_waste_residential);
$final_recy_data = json_encode($final_array_recy);
//print_r($final_recy_data);
//echo "<br>";

$final_array_decomp = array($decomposed_waste_combined,$decomposed_waste_dayscholer, $decomposed_waste_daybording, $decomposed_waste_residential);
$final_decomp_data = json_encode($final_array_decomp);
//print_r($final_decomp_data);
//echo "<br>";

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
                return false;
            }
            return true;
        }
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo $state; ?> Waste Generation Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
				'Combined',
                'Day Scholar',
                'Day Boarding',
                'Residential'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Kilograms'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} Kg.</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Possible Generation',
            data: <?php echo $final_poss_data; ?>

        }, {
            name: 'Actual Generation',
            data: <?php echo $final_act_data; ?>

        }, {
            name: 'Recycled',
            data: <?php echo $final_recy_data; ?>

        }, {
            name: 'Decomposed',
            data: <?php echo $final_decomp_data; ?>

        }]
    });
});
</script>

                
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



<div class="container">
<div class="content-form" style="padding-top: 2px;">

<div class="top-area">
<h2><?php echo strtoupper("Waste Generation Report"); ?></h2>
</div>


    <form name="state_compare" id="state_compare" method="post">
        <div class="row" style="margin: 20px 0;">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <select id="state" class="form-control" name="state">
            <option value="">Select State</option> 
			<option value="All India" <?php if($_REQUEST['state'] =="All India") { ?>selected="selected"<?php } ?>>All India</option> 
            <?php
            $sql_states = mysql_query("select * from `states` where `country_id` = 101");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['name']; ?>" <?php if($state == $states_array['name']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
           
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Submit" name="compare" onclick="return Validate()" />
            </div>
    </div>
    </form>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>
</div>

</body>
</html>
