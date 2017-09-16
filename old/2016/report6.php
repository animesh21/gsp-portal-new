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
$state = $_REQUEST['state'];

 if($state=="all")
	 {
		 $state_condition=" ";
		 $state="All India";
	 }else{
		 
		$state_condition=" AND `attribute_5`='".$state."'";
		
	$sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '".$state."'"));
$state=$sql_state['name'];	
	 }


//Day Scholer Query
$query_scrapdealer = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` <= 0 AND `266617X38X2115` = 'A1' $state_condition");
$scrapdealer_count = mysql_num_rows($query_scrapdealer);

$query_btvendor = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` <= 0 AND `266617X38X2115` = 'A2' $state_condition");
$btvendor_count = mysql_num_rows($query_btvendor);

$query_authorized_dealer = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` <= 0 AND `266617X38X2115` = 'A4' $state_condition");
$authorized_dealer_count = mysql_num_rows($query_authorized_dealer);

$query_authorized_dismentler = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` <= 0  AND `266617X38X2115` = 'A5' $state_condition");
$authorized_dismentler_count = mysql_num_rows($query_authorized_dismentler);

$query_others = mysql_query("select * from lime_survey_266617 as ltok join `lime_tokens_266617` as lsur ON ltok.token=lsur.token WHERE `completed` !='N' AND `usesleft` <= 0 AND `266617X38X2115` = '-oth-' $state_condition");
$others_count = mysql_num_rows($query_others);

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
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: '<?php echo $state; ?> - All Schools e-Waste Disposal Report'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
                exporting: { enabled: false },
            credits: {enabled: false},
            colors: ['#4E7FBB','#BE4F4C','#99B958','#7E63A0','#4AAAC4'],
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}<br/>{point.percentage:.1f}%</b>'
                },
				showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: '',
            data: [
                ['Scrap Dealer', <?php echo $scrapdealer_count; ?>],
                ['Back to vendor', <?php echo $btvendor_count; ?>],
                ['Authorized Dealer', <?php echo $authorized_dealer_count; ?>],
                ['Authorized Dismantler', <?php echo $authorized_dismentler_count; ?>],
                ['Others', <?php echo $others_count; ?>]
            ]
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
<h2><?php echo strtoupper("e-Waste Disposal Report"); ?></h2>
</div>

    <form name="state_compare" id="state_compare" method="post">
        <div class="row" style="margin: 20px 0;">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <select id="state" class="form-control" name="state">
            <option value="">Select State</option> 
		   <option value="all" <?php if($_REQUEST['state'] =="all") { ?>selected="selected"<?php } ?>>All India</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india`");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>" <?php if($state == $states_array['name']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
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
