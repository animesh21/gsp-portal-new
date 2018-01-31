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
		$sql_state = mysql_fetch_assoc(mysql_query("SELECT `state_id`,`name` FROM `states_india` WHERE `state_id` = '".$state."'"));
        $state=$sql_state['name'];
        
        $state_id= $sql_state['state_id'];
	 }


	 
//Combined
$sql_query_combined = mysql_fetch_assoc(mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null $state_condition"));
//$possible_waste_combined = round($sql_query_combined['266617X32X33SQ004_SQ003']*100);
$possible_waste_combined = round($sql_query_combined['totpop']*100);
$actual_waste_combined = round($sql_query_combined['ag']);
$recycled_waste_combined = round($sql_query_combined['recy']);
$decomposed_waste_combined = round($sql_query_combined['decompo']);

//echo "<br>";
//echo "select SUM(ltok.totpop) as totpop as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608SQ001` = 'Y' $state_condition";

//Day Scholer Query
$query1= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '1' $state_condition");
if(mysql_num_rows($query1) > 0)
{
$sql_query_dayscholer = mysql_fetch_assoc($query1);
$possible_waste_dayscholer = round($sql_query_dayscholer['totpop']*100);
$actual_waste_dayscholer = round($sql_query_dayscholer['ag']);
$recycled_waste_dayscholer = round($sql_query_dayscholer['recy']);
$decomposed_waste_dayscholer = round($sql_query_dayscholer['decompo']);
}

//Day Bording Query
$query2= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND  ltok.`266617X34X1608` = '2' $state_condition");
if(mysql_num_rows($query2) > 0)
{

$sql_query_daybording = mysql_fetch_assoc($query2);
$possible_waste_daybording = round($sql_query_daybording['totpop']*150);
$actual_waste_daybording = round($sql_query_daybording['ag']);
$recycled_waste_daybording = round($sql_query_daybording['recy']);
$decomposed_waste_daybording = round($sql_query_daybording['decompo']);
}

//Residential Query

$query3= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '3' $state_condition");
if(mysql_num_rows($query3) > 0)
{
$sql_query_residential = mysql_fetch_assoc($query3);
$possible_waste_residential = round($sql_query_residential['totpop']*300);
$actual_waste_residential = round($sql_query_residential['ag']);
$recycled_waste_residential = round($sql_query_residential['recy']);
$decomposed_waste_residential = round($sql_query_residential['decompo']);
}


//Day Scholar + Day Boarding Query

$query4= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '4' $state_condition");
if(mysql_num_rows($query4) > 0)
{
$sql_query_day_scholar_day_boarding = mysql_fetch_assoc($query4);
$possible_waste_day_scholar_day_boarding = round($sql_query_day_scholar_day_boarding['totpop']*300);
$actual_waste_day_scholar_day_boarding = round($sql_query_day_scholar_day_boarding['ag']);
$recycled_waste_day_scholar_day_boarding = round($sql_query_day_scholar_day_boarding['recy']);
$decomposed_waste_day_scholar_day_boarding = round($sql_query_day_scholar_day_boarding['decompo']);
}


//Day Boarding + Residential
$query5= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '5' $state_condition");
if(mysql_num_rows($query5) > 0)
{
$sql_query_day_boarding_residential = mysql_fetch_assoc($query5);
$possible_waste_day_boarding_residential = round($sql_query_day_boarding_residential['totpop']*350);
$actual_waste_day_boarding_residential = round($sql_query_day_boarding_residential['ag']);
$recycled_waste_day_boarding_residential = round($sql_query_day_boarding_residential['recy']);
$decomposed_waste_day_boarding_residential = round($sql_query_day_boarding_residential['decompo']);
}


//Day Scholar + Residential
$query6= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '6' $state_condition");
if(mysql_num_rows($query6) > 0)
{
$sql_query_day_scholar_residential = mysql_fetch_assoc($query6);
$possible_waste_day_scholar_residential = round($sql_query_day_scholar_residential['totpop']*300);
$actual_waste_day_scholar_residential = round($sql_query_day_scholar_residential['ag']);
$recycled_waste_day_scholar_residential = round($sql_query_day_scholar_residential['recy']);
$decomposed_waste_day_scholar_residential = round($sql_query_day_scholar_residential['decompo']);
}


//Day Scholar + Day Boarding + Residential

$query7= mysql_query("select SUM(ltok.266617X32X33SQ004_SQ003) as totpop, SUM(ltok.266617X38X2125SQ009_SQ001) as ag, SUM(ltok.266617X38X2042SQ010_SQ001) as recy, SUM(ltok.266617X38X2068) as decompo from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` is not null AND ltok.`266617X34X1608` = '7' $state_condition");
if(mysql_num_rows($query7) > 0)
{
$sql_query_day_scholar_boarding_residential = mysql_fetch_assoc($query7);

$possible_waste_day_scholar_boarding_residential = round($sql_query_day_scholar_boarding_residential['totpop']*500);
$actual_waste_day_scholar_boarding_residential = round($sql_query_day_scholar_boarding_residential['ag']);
$recycled_waste_day_scholar_boarding_residential = round($sql_query_day_scholar_boarding_residential['recy']);
$decomposed_waste_day_scholar_boarding_residential = round($sql_query_day_scholar_boarding_residential['decompo']);
}



// Final Arrays
$final_array_poss = array($possible_waste_combined,$possible_waste_dayscholer, $possible_waste_daybording, $possible_waste_residential,$possible_waste_day_scholar_day_boarding,$possible_waste_day_boarding_residential,$possible_waste_day_scholar_residential,$possible_waste_day_scholar_boarding_residential);
$final_poss_data = json_encode($final_array_poss);
//print_r($final_poss_data);
//echo "<br>";

$final_array_act = array($actual_waste_combined,$actual_waste_dayscholer, $actual_waste_daybording, $actual_waste_residential,$actual_waste_day_scholar_day_boarding,$actual_waste_day_boarding_residential,$actual_waste_day_scholar_residential,$actual_waste_day_scholar_boarding_residential);
$final_act_data = json_encode($final_array_act);
//print_r($final_act_data);
//echo "<br>";

$final_array_recy = array($recycled_waste_combined,$recycled_waste_dayscholer, $recycled_waste_daybording, $recycled_waste_residential,$recycled_waste_day_scholar_day_boarding,$recycled_waste_day_boarding_residential,$recycled_waste_day_scholar_residential,$recycled_waste_day_scholar_boarding_residential);
$final_recy_data = json_encode($final_array_recy);
//print_r($final_recy_data);
//echo "<br>";

$final_array_decomp = array($decomposed_waste_combined,$decomposed_waste_dayscholer, $decomposed_waste_daybording, $decomposed_waste_residential,$decomposed_waste_day_scholar_day_boarding,$decomposed_waste_day_boarding_residential,$decomposed_waste_day_scholar_residential,$decomposed_waste_day_scholar_boarding_residential);
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
                'Residential',
				'Day Scholar + Day Boarding',
				'Day Boarding + Residential',
				'Day Scholar + Residential',
				'Day Scholar + Day Boarding + Residential'
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
<div class="wrapper">
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
            $sql_states = mysql_query("select * from `states_india`");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>" <?php if($state_id == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
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
<!--
<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
-->

</div>
</div>
</div>

</body>
</html>
