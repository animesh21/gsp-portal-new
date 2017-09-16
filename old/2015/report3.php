<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

//POST VALUES FROM THE FORM
if(isset($_REQUEST['show']))
{
$state = $_REQUEST['state'];

//Performance Report
$performance_query1 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` = 0 AND `score` BETWEEN 70 AND 100");
$performance_1 = mysql_num_rows($performance_query1); 

$performance_query2 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` = 0 AND `score` BETWEEN 50 AND 69.9");
$performance_2 = mysql_num_rows($performance_query2); 

$performance_query3 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` = 0 AND `score` BETWEEN 35 AND 49.9");
$performance_3 = mysql_num_rows($performance_query3); 

$performance_query4 = mysql_query("select * from `lime_tokens_266617` WHERE `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` = 0 AND  `score` BETWEEN 0 AND 34.9");
$performance_4 = mysql_num_rows($performance_query3); 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Performance report by gender (MALE)
//$gender_query_male1 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A1' AND `score` BETWEEN 70 AND 100");
//$gender_male1 = mysql_num_rows($gender_query_male1);
//
//$gender_query_male2 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A1' AND `score` BETWEEN 50 AND 69.9");
//$gender_male2 = mysql_num_rows($gender_query_male2);
//
//$gender_query_male3 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A1' AND `score` BETWEEN 35 AND 49.9");
//$gender_male3 = mysql_num_rows($gender_query_male3);
//
//$gender_query_male4 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A1' AND `score` BETWEEN 0 AND 34.9");
//$gender_male4 = mysql_num_rows($gender_query_male4);


//Performance report by gender (FEMALE)
//$gender_query_female1 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A2' AND `score` BETWEEN 70 AND 100");
//$gender_female1 = mysql_num_rows($gender_query_female1);
//
//$gender_query_female2 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A2' AND `score` BETWEEN 50 AND 69.9");
//$gender_female2 = mysql_num_rows($gender_query_female2);
//
//$gender_query_female3 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A2' AND `score` BETWEEN 35 AND 49.9");
//$gender_female3 = mysql_num_rows($gender_query_female3);
//
//$gender_query_female4 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A2' AND `score` BETWEEN 0 AND 34.9");
//$gender_female4 = mysql_num_rows($gender_query_female4);



//Performance report by gender (MIXED)
//$gender_query_mixed1 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A3' AND `score` BETWEEN 70 AND 100");
//$gender_mixed1 = mysql_num_rows($gender_query_mixed1);
//
//$gender_query_mixed2 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A3' AND `score` BETWEEN 50 AND 69.9");
//$gender_mixed2 = mysql_num_rows($gender_query_mixed2);
//
//$gender_query_mixed3 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A3' AND `score` BETWEEN 35 AND 49.9");
//$gender_mixed3 = mysql_num_rows($gender_query_mixed3);
//
//$gender_query_mixed4 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state."' AND `266617X32X27` = 'A3' AND `score` BETWEEN 0 AND 34.9");
//$gender_mixed4 = mysql_num_rows($gender_query_mixed4);
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
                text: '<?php echo $state; ?> Schools Performance'
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

</body>
</html>
