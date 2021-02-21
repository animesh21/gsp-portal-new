<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GSP Audit 2017 Dashboard</title>
<!-- begin css --->
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/shadowbox.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/chosen.css" rel="stylesheet">
<!-- begin js --->
<style type="text/css">
 
.dropdown-menu > li.kopie > a {
    padding-left:5px;
}
 
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: none;
}  
  
@media (max-width: 767px) {

  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}  
.content-form {
    background: #fff;
    padding: 40px 25px;
    box-sizing: border-box;
    overflow: hidden;
    min-height: 850px!important;
}
</style>
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
    <img src="<?php echo base_url(); ?>assets/front/images/top-bnr.png" alt="" class="top-bnr1 "> 
	
	  <h1 style="font-size: 30px;
    font-family: fantasy;
    margin-left: 42px;
    position: relative;
    left: 33px;
    color: #e86549;
    text-shadow: 1px 1px 1px #000;">GSP Audit 2017 ( Dashboard )</h1>
	</div>
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
              <li class=""><a href="<?php base_url('admin/audit_started_2017')?>"><!--REGISTRATIONS--> MASTER LIST <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="<?php echo base_url('admin/audit_started'); ?>">AUDIT STARTED</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started_2017'); ?>">MASTER LIST REGISTRATIONS </a></li>
		  <!--<li><a href="<?php //echo base_url('admin/dashboard/total18_registration'); ?>">REGISTRATIONS 2018</a></li>-->	
                  <li><a href="<?php echo base_url('admin/audit_started/statewise'); ?>">REGISTRATIONS BY STATE</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started/feedback'); ?>">E-Mail Blast</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started_2017/partnersList'); ?>">Master List Partners</a></li>
                  <li><a href="<?php echo base_url('admin/audit_started/getSummary'); ?>">Summary of Audit</a></li>															
                  <li><a href="<?php echo base_url('admin/dashboard/masterList'); ?>">Master list Y-O-Y</a></li>
                </ul>
              </li>
              <li class=""><a href="#">AUDIT COMPLETED<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="#">PERFORMANCE REPORT</a></li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIMARY AUDIT PHASE I</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('admin/performance_report/schoolgeneralPrimary'); ?>">School Profile & General </a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/airPrimary'); ?>">AIR</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/energyPrimary'); ?>">ENERGY</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/foodPrimary'); ?>">Food</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/landPrimary'); ?>">LAND</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/waterPrimary'); ?>">WATER</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/wastePrimary'); ?>">WASTE</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/feedbackPrimary'); ?>">FEEDBACK</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/ExcelPrimary'); ?>">Total Primary Excel</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SECONDARY AUDIT PHASE I</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('admin/performance_report/schoolgeneral'); ?>">School Profile & General</a> </li>
                      <li><a href="<?php echo base_url('admin/performance_report/air'); ?>">AIR</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/energy'); ?>">ENERGY</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/food'); ?>">FOOD</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/land'); ?>">LAND</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/water'); ?>">WATER</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/waste'); ?>">WASTE</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/feedback'); ?>">Feedback</a> </li>
                      <li><a href="<?php echo base_url('admin/performance_report/ExcelSecondary'); ?>">Total Secondary Excel</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIMARY AUDIT PHASE II</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('admin/performance_report/schoolgeneralPrimary_phase2'); ?>">School Profile & General </a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/airPrimary_phase2'); ?>">AIR</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/energyPrimary_phase2'); ?>">ENERGY</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/foodPrimary_phase2'); ?>">Food</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/landPrimary_phase2'); ?>">LAND</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/waterPrimary_phase2'); ?>">WATER</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/wastePrimary_phase2'); ?>">WASTE</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/feedbackPrimary_phase2'); ?>">FEEDBACK</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/ExcelPrimary_phase2'); ?>">Total Primary Excel</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SECONDARY AUDIT PHASE II</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('admin/performance_report/schoolgeneral_phase2'); ?>">School Profile & General</a> </li>
                      <li><a href="<?php echo base_url('admin/performance_report/air_phase2'); ?>">AIR</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/energy_phase2'); ?>">ENERGY</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/food_phase2'); ?>">FOOD</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/land_phase2'); ?>">LAND</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/water_phase2'); ?>">WATER</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/waste_phase2'); ?>">WASTE</a></li>
                      <li><a href="<?php echo base_url('admin/performance_report/feedback_phase2'); ?>">Feedback</a> </li>
                      <li><a href="<?php echo base_url('admin/performance_report/ExcelSecondary_phase2'); ?>">Total Secondary Excel</a> </li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url('admin/performance_report/allExcelDump'); ?>">All Excel Dump</a></li>
                  <li class=""><a href="<?php echo base_url('admin/performance_report/totalCalculation'); ?>">Total Points Calculation</a> </li>
                 <!-- <li><a href="analysis_report_all_question.php">All Responses</a></li> -->
                </ul>
              </li>
              <li class=""><a href="#">ANALYTICS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <li><a href="<?php echo base_url('admin/reports/'); ?>">Participation By Zone</a></li>
                  <li><a href="<?php echo base_url('admin/reports/getParticipationByState'); ?>">Participation By State</a></li>
                  <li><a href="<?php echo base_url('admin/reports/getPerformanceByState'); ?>">Performance By State</a></li>
				  <li><a href="<?php echo base_url('admin/reports/getParticipationByStateComparison'); ?>">Participation Comparison Report</a></li>
                  <li><a href="<?php echo base_url('admin/reports/getPerformanceByStateComparison'); ?>">Performance Comparison Report</a></li>
                  <li><a href="<?php echo base_url('admin/reports/getWasteGenerationReport'); ?>">Waste Generation Report</a></li>
                  <li><a href="<?php echo base_url('admin/reports/geteWasteDisposalReport'); ?>">e-Waste Disposal Report</a></li>
		  <li><a href="<?php echo base_url('admin/reports/getair'); ?>">Air Report</a></li>
	          <li><a href="<?php echo base_url('admin/reports/getenergy'); ?>">Energy Report</a></li>
		  <li><a href="<?php echo base_url('admin/reports/getFood'); ?>">Food Report</a></li>		
		  <li><a href="<?php echo base_url('admin/reports/getland'); ?>">Land Report</a></li>
		  <li><a href="<?php echo base_url('admin/reports/getWater'); ?>">Water Report</a></li>
		  <li><a href="<?php echo base_url('admin/reports/getWaste'); ?>">Waste Report</a></li>	
                </ul>
              </li>
              <li class=""> <a href="#">ANALYTICAL TABLES<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="participation_report.php">Participation Report</a></li>
                  <li><a href="school_profiling_report.php">Schools Profiling Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/meritList'); ?>">Merit List</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/eWasteReport'); ?>">e-Waste Report</a></li>
                  <li><a href="yes_no_report.php">Yes/No Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/vehicleprofile'); ?>">Vehicle Profiling Report</a></li>
                  <li><a href="commuting_practices_profiling_report.php">Commuting Practices Profiling Report</a></li>
                  <li><a href="energy_consumption_profiling_report.php">Energy Consumption Profiling Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/foodbrandsponser'); ?>">Brands Sponsoring Events</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/foodprofiletraditional'); ?>">Food Profiling Traditional</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/foodflavour'); ?>">Food Ultra Processed flavour</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/fooditemsell'); ?>">Food Ultra Processed Sales</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/getGreenCoverReport'); ?>">Green Cover Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/getbuiltupAreaProfilingReport'); ?>">Built-up Area Profiling Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/getToiletProfilingReport'); ?>">Toilet Profiling Report</a></li>
                  <li><a href="<?php echo base_url('admin/analytics/getWaterConsumptionPatternReport'); ?>">Water Consumption Pattern Report</a></li>
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
