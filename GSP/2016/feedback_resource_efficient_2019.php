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
$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$state1."'"));

$statename=$sql_state['name'];




$query_resource_efficient_yes=mysql_query("SELECT * FROM lime_survey_266617 AS ltok JOIN `lime_tokens_266617` AS lsur ON ltok.token=lsur.token 
WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` IS NOT NULL  AND `attribute_5` = '".$state1."'  AND  ltok.266617X39X2434='Y'");
$totalresource_efficient_yes = mysql_num_rows($query_resource_efficient_yes);

$query_resource_efficient_no=mysql_query("SELECT * FROM lime_survey_266617 AS ltok JOIN `lime_tokens_266617` AS lsur ON ltok.token=lsur.token 
WHERE lsur.`completed` !='N' AND lsur.`usesleft` <= 0 AND ltok.`submitdate` IS NOT NULL AND `attribute_5` = '".$state1."' AND ltok.266617X39X2434='n'");
$totalresource_efficient_no = mysql_num_rows($query_resource_efficient_no);

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
                text: 'Do you think your school will be a Green School (resource efficient) by 2019 ? <?php echo $statename; ?>'
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
                data: [{name: 'Do you think your school will be a Green School (resource efficient) by 2019 (Yes)', y: <?php echo $totalresource_efficient_yes; ?>}, {name: 'Do you think your school will be a Green School (resource efficient) by 2019 (No)', y: <?php echo $totalresource_efficient_no; ?>}]
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
      	<h2>FEEDBACK BY STATE</h2>
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
      
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Submit" name="compare" onclick="return Validate()" />
            </div>
    </div>
    </form>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


</div>
</div>
</div>

</body>
</html>
