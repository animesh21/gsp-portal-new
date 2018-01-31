<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');


//POST VALUES FROM THE FORM
if(isset($_REQUEST['compare']))
{
$state1 = $_REQUEST['state1'];
$state2 = $_REQUEST['state2'];

		$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$state1."'"));
        $state1_name=$sql_state['name'];
		
		$sql_state2 = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$state2."'"));
        $state2_name=$sql_state2['name'];


//Registered for Audit
$registerd_query1 = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` = '".$state1."'");
$registerd_query2 = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` = '".$state2."'");

$registerd_audit_1 = mysql_num_rows($registerd_query1); //Data for first record in data aaray
$registerd_audit_2 = mysql_num_rows($registerd_query2); //Data for first record in data aaray

//Audit Started Section
$started_query1 = mysql_query("SELECT * FROM lime_tokens_266617 AS limetoken,lime_answers_for_progress AS progress, lime_survey_266617 AS survey,states_india AS state WHERE limetoken.token=survey.token 
 AND limetoken.token=progress.token
 AND  state.state_id=limetoken.attribute_5 AND limetoken.completed ='N' AND survey.`submitdate` IS NULL
 AND progress.completeness>9 AND limetoken.attribute_5='".$state1."'");
$started_query2 = mysql_query("SELECT * FROM lime_tokens_266617 AS limetoken,lime_answers_for_progress AS progress, lime_survey_266617 AS survey,states_india AS state WHERE 
 limetoken.token=survey.token 
 AND limetoken.token=progress.token
 AND  state.state_id=limetoken.attribute_5 AND limetoken.completed ='N' AND survey.`submitdate` IS NULL
 AND progress.completeness>9 AND limetoken.attribute_5='".$state2."'");

$total_started_audit_1 = mysql_num_rows($started_query1); //Data for second record in data aaray
$total_started_audit_2 = mysql_num_rows($started_query2); //Data for second record in data aaray

//Audit Completed Section
$completed_query1 = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND `attribute_5` = '".$state1."'");
$completed_query2 = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` = '".$state2."'");

$completed_1 = mysql_num_rows($completed_query1); //Data for third record in data aaray
$completed_2 = mysql_num_rows($completed_query2); //Data for third record in data aaray


//Audit Not Started
$total_notstarted_audit_1 = ($registerd_audit_1)-($total_started_audit_1+ $completed_1);
$total_notstarted_audit_2 = ($registerd_audit_2)-($total_started_audit_2+ $completed_2);


///// Audit Started But Not Completed
//
//$sql_Started_Audit1= mysql_query("select count(*) from 
//lime_tokens_266617 as token join lime_answers_for_progress as progress 
//on token.token = progress.token
//where progress.completeness > 9 AND `attribute_5` = ".$state1);
//$Started_Audit_count1 = mysql_result($sql_Started_Audit1,0,0);
//
//
//$sql_Started_Audit2 = mysql_query("select count(*) from 
//lime_tokens_266617 as token join lime_answers_for_progress as progress 
//on token.token = progress.token
//where progress.completeness > 9 AND `attribute_5` = ".$state2);
//$Started_Audit_count2 = mysql_result($sql_Started_Audit20,0);
//
//// Audit Completed
//
//$sql_data1 = mysql_query("SELECT count(*) FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND surtoken.usesleft<=0  AND surtoken.completed !='N' AND survey.`submitdate` IS NOT NULL AND `attribute_5` = ".$state1);
//$audit_completed1 = mysql_result($sql_data1,0,0);
//
//
//$sql_data2 = mysql_query("SELECT count(*) FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND surtoken.usesleft<=0  AND surtoken.completed !='N' AND survey.`submitdate` IS NOT NULL AND `attribute_5` = ".$state2);
//
//$audit_completed2 = mysql_result($sql_data2,0,0);
//
//
//$audit_not_completed1 = $Started_Audit_count1 - $audit_completed1;
//$audit_not_completed2 = $Started_Audit_count2 - $audit_completed2;

/// Audit Started But Not Completed




//Feedback Recieved
/*
$feedback_query1 = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` = '".$state1."'");
$feedback_query2 = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` = '".$state2."'");

$feedback_1 = mysql_num_rows($feedback_query1); //Data for fourth record in data aaray
$feedback_2 = mysql_num_rows($feedback_query2); //Data for fourth record in data aaray
*/

//$final_array_north = array($registerd_audit_north, $registerd_audit_south, $registerd_audit_east, $registerd_audit_west);
//$final_array_north_data = json_encode($final_array_north); // Final values for JSON DATA array

//$final_array_south = array($total_started_audit_north, $total_started_audit_south, $total_started_audit_east, $total_started_audit_west);
//$final_array_south_data = json_encode($final_array_south); // Final values for JSON DATA array

//$final_array_east = array($completed_north_count, $completed_south_count, $completed_east_count, $completed_west_count);
//$final_array_east_data = json_encode($final_array_east); // Final values for JSON DATA array

//$final_array_west = array($feedback_north_count, $feedback_south_count, $feedback_east_count, $feedback_west_count);
//$final_array_west_data = json_encode($final_array_west); // Final values for JSON DATA array
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
            var option1 = document.getElementById("state1");
            var option2 = document.getElementById("state2");
            if (option1.value == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select first state");
                document.getElementById("state1").focus();
                return false;
            }
            if (option2.value == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select second state");
                document.getElementById("state2").focus();
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
                text: 'Participation Chart for <?php echo $state1_name; ?>'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						 format: '{point.name}<br/><b> {point.y} Schools</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Registered for Audit', y: <?php echo $registerd_audit_1; ?>}, {name: 'Audit Not Started', y: <?php echo $total_notstarted_audit_1; ?>},{name: 'Audit Started', y: <?php echo $total_started_audit_1; ?>}, {name: 'Audit Completed', y: <?php echo $completed_1; ?>}]
            }]
        });
    });
});
		</script>

<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for <?php echo $state2_name; ?>'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
            exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b> {point.y} Schools</b>',	
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Registered for Audit', y: <?php echo $registerd_audit_2; ?>}, {name: 'Audit Not Started', y: <?php echo $total_notstarted_audit_2; ?>},{name: 'Audit Started', y: <?php echo $total_started_audit_2; ?>}, {name: 'Audit Completed', y: <?php echo $completed_2; ?>}]
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
      	<h2>PARTICIPATION BY STATE</h2>
</div>
    <form name="state_compare" id="state_compare" method="post">
        <div class="row" style="margin: 20px 0;">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <select id="state1" class="form-control" name="state1">
            <option value="">Select First State</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india`");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>"<?php if($state1 == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <select id="state2" class="form-control" name="state2">
            <option value="">Select Second State</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india`");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>"<?php if($state2 == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Compare" name="compare" onclick="return Validate()" />
            </div>
    </div>
    </form>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>
</div>
</div>

</body>
</html>
