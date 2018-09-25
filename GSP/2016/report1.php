<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');


//$east_india = array("West Bengal", "Odisha", "Jharkhand", "Andaman and Nicobar Islands", "Bihar");

$qry_east=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=2");
$east_india=mysql_result($qry_east,0,0);

$qry_north=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=1");
$north_india=mysql_result($qry_north,0,0);
//$north_india = array("Punjab", "Jammu and Kashmir", "Haryana", "Rajasthan", "Himachal Pradesh", "Uttar Pradesh", "Uttarakhand", "Delhi", "Chandigarh");


$qry_south=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=4");
$south_india=mysql_result($qry_south,0,0);
//$south_india = array("Andhra Pradesh", "Karnataka", "Kerala", "Tamil Nadu", "Telangana", "Lakshadweep", "Puducherry");

$qry_west=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=3");
$west_india=mysql_result($qry_west,0,0);

//$west_india = array("Gujarat", "Maharashtra", "Goa", "Daman and Diu", "Dadra and Nagar Haveli");

$qry_north_east=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=5");
$north_east_india=mysql_result($qry_north_east,0,0);
//$north_east_india = array("Arunachal Pradesh", "Assam", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Sikkim", "Tripura");

$qry_central=mysql_query("SELECT GROUP_CONCAT(state_id) as state_id  FROM `states_india` WHERE rid=6");
$central_india=mysql_result($qry_central,0,0);
//$central_india = array("Chhattisgarh", "Madhya Pradesh");

//Registered for Audit
$registerd_query_east = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($east_india)");
$registerd_query_north = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($north_india)");
$registerd_query_south = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($south_india)");
$registerd_query_west = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($west_india)");
$registerd_query_north_east = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($north_east_india)");
$registerd_query_central = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `attribute_5` IN ($central_india)");



$registerd_audit_east = mysql_num_rows($registerd_query_east); //Data for first record in data aaray
$registerd_audit_north = mysql_num_rows($registerd_query_north); //Data for first record in data aaray
$registerd_audit_south = mysql_num_rows($registerd_query_south); //Data for first record in data aaray
$registerd_audit_west = mysql_num_rows($registerd_query_west); //Data for first record in data aaray
$registerd_audit_north_east = mysql_num_rows($registerd_query_north_east); //Data for first record in data aaray
$registerd_audit_central = mysql_num_rows($registerd_query_central); //Data for first record in data aaray

// Audit Started Section
$started_query_east = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($east_india)");
$started_query_north = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($north_india)");
$started_query_south = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($south_india)");
$started_query_west = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($west_india)");
$started_query_north_east = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($north_east_india)");
$started_query_central = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `lastpage` != '0' AND `attribute_5` IN ($central_india)");



$total_started_audit_east = mysql_num_rows($started_query_east); //Data for second record in data aaray
$total_started_audit_north = mysql_num_rows($started_query_north); //Data for second record in data aaray
$total_started_audit_south = mysql_num_rows($started_query_south); //Data for second record in data aaray
$total_started_audit_west = mysql_num_rows($started_query_west); //Data for second record in data aaray
$total_started_audit_north_east = mysql_num_rows($started_query_north_east); //Data for second record in data aaray
$total_started_audit_central = mysql_num_rows($started_query_central); //Data for second record in data aaray

//echo "SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <= 0 AND  `attribute_5` IN ($north_india)";
// Audit Completed Section
$completed_query_east = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND `attribute_5` IN ($east_india)");
$completed_query_north = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` IN ($north_india)");
$completed_query_south = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` IN ($south_india)");
$completed_query_west = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` IN ($west_india)");
$completed_query_north_east = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` IN ($north_east_india)");
$completed_query_central = mysql_query("SELECT `token` FROM `lime_tokens_266617` WHERE `completed` != 'N' AND `usesleft` <=0 AND  `attribute_5` IN ($central_india)");


$completed_east_count = mysql_num_rows($completed_query_east); //Data for third record in data aaray
$completed_north_count = mysql_num_rows($completed_query_north); //Data for third record in data aaray
$completed_south_count = mysql_num_rows($completed_query_south); //Data for third record in data aaray
$completed_west_count = mysql_num_rows($completed_query_west); //Data for third record in data aaray
$completed_north_east_count = mysql_num_rows($completed_query_north_east); //Data for third record in data aaray
$completed_central_count = mysql_num_rows($completed_query_central); //Data for third record in data aaray


/*
//Feedback Recieved
$feedback_query_east = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $east_india) . "\")");
$feedback_query_north = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $north_india) . "\")");
$feedback_query_south = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $south_india) . "\")");
$feedback_query_west = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $west_india) . "\")");
$feedback_query_north_east = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $north_east_india) . "\")");
$feedback_query_central = mysql_query("select * from gsp_feedback as ftok join `lime_tokens_266617` as lsur ON ftok.token=lsur.token WHERE `attribute_5` IN (\"".implode('","', $central_india) . "\")");

$feedback_east_count = mysql_num_rows($feedback_query_east); //Data for fourth record in data aaray
$feedback_north_count = mysql_num_rows($feedback_query_north); //Data for fourth record in data aaray
$feedback_south_count = mysql_num_rows($feedback_query_south); //Data for fourth record in data aaray
$feedback_west_count = mysql_num_rows($feedback_query_west); //Data for fourth record in data aaray
$feedback_north_east_count = mysql_num_rows($feedback_query_north_east); //Data for fourth record in data aaray
$feedback_central_count = mysql_num_rows($feedback_query_central); //Data for fourth record in data aaray
*/


$final_array_north = array($registerd_audit_north, $registerd_audit_south, $registerd_audit_east, $registerd_audit_west, $registerd_audit_north_east, $registerd_audit_central);
$final_array_north_data = json_encode($final_array_north); // Final values for JSON DATA array

$final_array_south = array($total_started_audit_north, $total_started_audit_south, $total_started_audit_east, $total_started_audit_west, $total_started_audit_north_east, $total_started_audit_central);
$final_array_south_data = json_encode($final_array_south); // Final values for JSON DATA array

$final_array_east = array($completed_north_count, $completed_south_count, $completed_east_count, $completed_north_east_count, $completed_central_count);
$final_array_east_data = json_encode($final_array_east); // Final values for JSON DATA array
//print_r($final_array_east_data);


//$final_array_west = array($feedback_north_count, $feedback_south_count, $feedback_east_count, $feedback_west_count, $feedback_north_east_count, $feedback_central_count);
//$final_array_west_data = json_encode($final_array_west); // Final values for JSON DATA array


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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Schools Participation Report'
        },
        xAxis: {
            categories: [
                'North',
                'South',
                'East',
                'West',
                'North East',
                'Central'
            ],
            crosshair: true
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
            data: <?php echo $final_array_north_data; ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Started',
            data: <?php echo $final_array_south_data; ?> //South

        }, {
            name: 'Audit Completed',
            data: <?php echo $final_array_east_data; ?> //East

       // }, {
          //  name: 'Feedback Received',
           // data: <?php echo $final_array_west_data; ?> //West

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
 <div class="wrapper">
<div class="top-area">
      	<h2><?php echo strtoupper("Participation By Zone"); ?></h2>
        </div>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
 </div>
</div>
</div>

</body>
</html>
