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
$state1 = $_REQUEST['state1'];
$state2 = $_REQUEST['state2'];
$gender = $_REQUEST['gender'];

if($gender == "ALL")
{
    $gender_name = "All";
	$cond="";
}
elseif($gender == "A1")
{
    $gender_name = "Male";
	$cond="AND ltok.`266617X32X27` = '".$gender."'";
}
elseif($gender == "A2")
{
    $gender_name = "Female";
	$cond="AND ltok.`266617X32X27` = '".$gender."'";
}
elseif($gender == "A3")
{
    $gender_name = "Mixed";
	$cond="AND ltok.`266617X32X27` = '".$gender."'";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// QUERY FOR FIRST STATE
$first_state_query1 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state1."' AND lsur.`score` BETWEEN 70 AND 100 $cond");
$first_state_row1 = mysql_num_rows($first_state_query1);

$first_state_query2 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state1."' AND lsur.`score` BETWEEN 50 AND 69.9 $cond");
$first_state_row2 = mysql_num_rows($first_state_query2);

$first_state_query3 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state1."' AND lsur.`score` BETWEEN 35 AND 49.9 $cond");
$first_state_row3 = mysql_num_rows($first_state_query3);

$first_state_query4 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state1."' AND lsur.`score` BETWEEN 0 AND 34.9 $cond");
$first_state_row4 = mysql_num_rows($first_state_query4);


// QUERY FOR SECOND STATE
$second_state_query1 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state2."' AND lsur.`score` BETWEEN 70 AND 100 $cond");
$second_state_row1 = mysql_num_rows($second_state_query1);

$second_state_query2 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state2."' AND lsur.`score` BETWEEN 50 AND 69.9 $cond");
$second_state_row2 = mysql_num_rows($second_state_query2);

$second_state_query3 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state2."' AND lsur.`score` BETWEEN 35 AND 49.9 $cond");
$second_state_row3 = mysql_num_rows($second_state_query3);

$second_state_query4 = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` = 0 AND `attribute_5` = '".$state2."' AND lsur.`score` BETWEEN 0 AND 34.9 $cond");
$second_state_row4 = mysql_num_rows($second_state_query4);




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
function Validate() 
{
            var staet1 = document.getElementById("state1");
            var state2 = document.getElementById("state2");
            var gender = document.getElementById("gender");
            if (staet1.value == "")
            {
                alert("Please select first state");
                return false;
            }
            if (state2.value == "") 
            {
                alert("Please select second state");
                return false;
            }
            if (gender.value == "") 
            {
                alert("Please select gender");
                return false;
            }
            
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
                text: '<?php echo $state1; ?> Schools Performance by Gender: <?php echo $gender_name; ?>'
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
                    exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.percentage:.1f}%</b>',	
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: <?php echo $first_state_row1; ?>}, {name: 'Between 50% to 69.9%',color:'#fcfc00',y: <?php echo $first_state_row2; ?>}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: <?php echo $first_state_row3; ?>}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: <?php echo $first_state_row4; ?>}]
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
                text: '<?php echo $state2; ?> Schools Performance by Gender: <?php echo $gender_name; ?>'
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
                    exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.percentage:.1f}%</b>',	
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: <?php echo $second_state_row1; ?>}, {name: 'Between 50% to 69.9%',color:'#fcfc00' ,y: <?php echo $second_state_row2; ?>}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: <?php echo $second_state_row3; ?>}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: <?php echo $second_state_row4; ?>}]
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
<h2><?php echo strtoupper("Performance Comparison Report"); ?></h2>
</div>

    <form name="state_compare" id="state_compare" method="post">
        <div class="row" style="margin: 20px 0;">
       
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <select id="state1" class="form-control" name="state1">
            <option value="">Select First State</option> 
            <?php
            $sql_states1 = mysql_query("select * from `states` where `country_id` = 101");
            while($states_array1 = mysql_fetch_array($sql_states1))
            {
            ?>
            <option value="<?php echo $states_array1['name']; ?>" <?php if($state1 == $states_array1['name']) { ?>selected="selected" <?php } ?>><?php echo $states_array1['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <select id="state2" class="form-control" name="state2">
            <option value="">Select Second State</option> 
            <?php
            $sql_states2 = mysql_query("select * from `states` where `country_id` = 101");
            while($states_array2 = mysql_fetch_array($sql_states2))
            {
            ?>
            <option value="<?php echo $states_array2['name']; ?>" <?php if($state2 == $states_array2['name']) { ?>selected="selected" <?php } ?>><?php echo $states_array2['name']; ?></option> 
            <?php
            }
            ?>
        </select>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <select id="gender" class="form-control" name="gender">
            <option value="">Select Gender</option>
			 <option value="ALL" <?php if($gender == "ALL") { ?>selected="selected" <?php } ?>>All</option>
            <option value="A1" <?php if($gender == "A1") { ?>selected="selected" <?php } ?>>Male</option>
            <option value="A2" <?php if($gender == "A2") { ?>selected="selected" <?php } ?>>Female</option>
            <option value="A3" <?php if($gender == "A3") { ?>selected="selected" <?php } ?>>Mixed</option>
        </select>
           </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()" />
            </div>
    </div>
    </form>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;"></div>

<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto;"></div>
</div>
</div>

</body>
</html>
