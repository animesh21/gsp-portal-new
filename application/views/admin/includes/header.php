<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Green Schools Programme Dashboard</title>
<!-- begin css --->
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/shadowbox.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/chosen.css" rel="stylesheet">
<!-- begin js --->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.html5.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>


<!--<script src="Scripts/yui-utilities.js" type="text/javascript"></script>
<script src="Scripts/shadowbox-yui.js" type="text/javascript"></script>
<script src="Scripts/shadowbox.js" type="text/javascript"></script>
<script src="Scripts/admin.js"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>-->

</head>
<body>
<header class="form-hdr ">
  <div class="container">
    <figure class="logo2"><a href="#"><img src="<?php echo base_url(); ?>assets/front/images/logo.png" alt="" class="img-responsive"></a></figure>
    <img src="<?php echo base_url(); ?>assets/front/images/top-bnr.png" alt="" class="top-bnr1 "> </div>
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
              <li class="<?php echo ($this->router->fetch_class()=='dashboard') ? "active" : ""; ?>"><a href="<?php echo base_url('admin/dashboard'); ?>">HOME</a></li>
              <li class=""><a href="<?php base_url()?>dashboard/total_school_registration">REGISTRATIONS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="<?php echo base_url('admin/audit_started'); ?>">AUDIT STARTED</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started_2017'); ?>">REGISTRATIONS 2017</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started/statewise'); ?>">REGISTRATIONS BY STATE</a></li>
				   <li><a href="<?php echo base_url('admin/audit_started/feedback'); ?>">Feedback</a></li>
                </ul>
              </li>
              <li class=""><a href="#">AUDIT COMPLETED<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="#">PERFORMANCE REPORT</a> </li>
                  <li class=""><a href="<?php echo base_url('admin/performance_report/air_land'); ?>">Air-Land</a> </li>
                  <li class=""><a href="<?php echo base_url('admin/performance_report/water'); ?>">Water</a> </li>
                  <li class=""><a href="<?php echo base_url('admin/performance_report/waste'); ?>">Waste</a> </li>
                  <li class=""><a href="<?php echo base_url('admin/performance_report/feedback'); ?>">Feedback And Points</a> </li>
                 
                  <li><a href="analysis_report_all_question.php">All Responses</a></li>
                </ul>
              </li>
              <li class=""><a href="#">ANALYTICS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="report1.php">Participation By Zone</a></li>
                  <li><a href="report2.php">Participation By State</a></li>
                  <li><a href="report3.php">Performance By State</a></li>
                  <li><a href="report4.php">Performance Comparison Report</a></li>
                  <li><a href="report5.php">Waste Generation Report</a></li>
                  <li><a href="report6.php">e-Waste Disposal Report</a></li>
                </ul>
              </li>
              <li class=""> <a href="#">ANALYTICAL TABLES<span class="caret"></span></a>
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
              <li class=""><a href="#">Feedback Analytics<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="feedback_audit_before.php">How many Times schools participated Report </a></li>
                  <li><a href="feedback_self_explanatory.php"> Audit easy to understand and self explanatory Report </a></li>
                  <li><a href="feedback_resource_efficient_2019.php">Green School (resource efficient) by 2019 Report </a></li>
                  <li><a href="feedback_rate_overall_design.php">rate the overall design of the audit Report </a></li>
                  <li><a href="feedback_how_many_times_contact.php">How many times did you contact GSP Team</a></li>
                </ul>
              </li>
              <li class=""><a class="lptext" title="Change Password Form" href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse  -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </div>
  </div>
</header>
<!--close header-->
<div class="container">
  <div class="content-form wrapper">
    
