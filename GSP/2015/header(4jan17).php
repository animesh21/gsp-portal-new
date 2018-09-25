<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
$pagename = basename($_SERVER['PHP_SELF']);
$ActiveClass1 = "";
$ActiveClass2 = "";
$ActiveClass3 = "";
$ActiveClass4 = "";
$ActiveClass5 = "";
$ActiveClass6 = "";
if($pagename == "dashboard.php")
{
    $ActiveClass1 = "active";
}
else if($pagename == "audit_registrations.php")
{
    $ActiveClass2 = "active";
}
else if($pagename == "audit_completed.php")
{
    $ActiveClass3 = "active";
}
else if($pagename == "audit_feedback.php" || $pagename == "view_complete_feedback.php")
{
    $ActiveClass4 = "active";
}

else if($pagename == "analytical_report1.php")
{
    $ActiveClass6 = "active";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Green Schools Programme Dashboard</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!--
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
-->
<link href="css/custom.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">


<!--<link href='https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css' rel='stylesheet'/> -->
    <link href='https://nightly.datatables.net/css/jquery.dataTables.min.css' rel='stylesheet'/>
    <!-- <link href='https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css' rel='stylesheet'/> -->
    <link href='https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css' rel='stylesheet'/>
     
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
     
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
     
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/dataTables.buttons.js"></script>
     
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script> -->
    <script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.html5.min.js"></script>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.flash.min.js"></script>
<script src="js/vfs_fonts.js"></script>


<script src="js/buttons.html5.min.js"></script>

<script src="js/buttons.print.min.js"></script>
-->

<link href="Scripts/shadowbox.css" type=text/css rel=stylesheet>
<SCRIPT src="Scripts/yui-utilities.js" type=text/javascript></SCRIPT>
<SCRIPT src="Scripts/shadowbox-yui.js" type=text/javascript></SCRIPT>
<SCRIPT src="Scripts/shadowbox.js" type=text/javascript></SCRIPT>
<SCRIPT src="Scripts/admin.js"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/JavaScript">
window.onload = function(){
    Shadowbox.init();
    
};
</script>

</head>
<body>
<header class="form-hdr ">
  <div class="container">
    <figure class="logo2"><a href="#"><img src="images/logo.png" alt="" class="img-responsive"></a></figure>
    <img src="images/top-bnr.png" alt=""  class="top-bnr1 "> </div>
  <!--close container-->
  
  <div class="container-fluid nav_main">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid"> 
           
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
           
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="<?php echo $ActiveClass1; ?>"><a href="dashboard.php">HOME </a></li>
              <li class="<?php echo $ActiveClass2; ?>"><a href="audit_registrations.php">REGISTRATIONS </a></li>
              <li class="<?php echo $ActiveClass3; ?>"><a href="audit_completed.php">AUDIT COMPLETED</a></li>
              <li class="<?php echo $ActiveClass4; ?>"><a href="audit_feedback.php">FEEDBACK</a></li>
              <li class="<?php echo $ActiveClass5; ?>"><a href="analysis_report.php">PERFORMANCE REPORT</a></li>
              <li class="dropdown <?php echo $ActiveClass6; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ANALYTICS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="report1.php">Participation By Zone</a></li>
                      <li><a href="report2.php">Participation By State</a></li>
                      <li><a href="report3.php">Performance By State</a></li>
                      <li><a href="report4.php">Performance Comparison Report</a></li>
                      <li><a href="report5.php">Waste Generation Report</a></li>
                      <li><a href="report6.php">e-Waste Disposal Report</a></li>

                    </ul>
                </li>
                
                <li class="dropdown <?php echo $ActiveClass6; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ANALYTICAL TABLES<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="participation_report.php">Participation Report</a></li>
                      <li><a href="school_profiling_report.php">Schools Profiling Report</a></li>
                      <li><a href="merit_list.php">Merit List</a></li>
                      <li><a href="e_waste_report.php">e-Waste Report</a></li>
                      <li><a href="yes_no_report.php">Yes/No Report</a></li>
                      <li><a href="vehicle_profiling_report.php">Vehicle Profiling Report</a></li>
                      <li><a href="commuting_practices_profiling_report.php">Commuting Practices Profiling Report</a></li>
                      <li><a href="energy_consumption_profiling_report.php">Energy Consumption Profiling Report</a></li>
                      <li><a href="brands_sponsoring_events_report.php">Brands Sponsoring Events</a></li>
                      <li><a href="food_profiling_traditional.php">Food Profiling Traditional</a></li>
					  <li><a href="food_ultra_processed_flavour.php">Food Ultra Processed flavour</a></li>
					  <li><a href="food_ultra_processed_sales.php">Food Ultra Processed Sales</a></li>
                      <li><a href="green_cover_report.php">Green Cover Report</a></li>
                      <li><a href="builtup_area_profiling_report.php">Built-up Area Profiling Report</a></li>
                      <li><a href="toilet_profiling_report.php">Toilet Profiling Report</a></li>
                      <li><a href="water_consumption_pattern_report.php">Water Consumption Pattern Report</a></li>
                      
                    </ul>
                </li>
                
              <li class="<?php echo $ActiveClass5; ?>"><a class="lptext" title="Change Password Form" href="password_change.php" rel=shadowbox;width=580;height=500;>CHANGE PASSWORD</a></li>
                
            </ul>
          </div>
<!--           /.navbar-collapse  -->
        </div>
        <!-- /.container-fluid --> 
      </nav>
    </div>
  </div>
</header>
<!--close header-->