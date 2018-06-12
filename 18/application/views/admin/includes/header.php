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
              <li class=""><a href="#"><!--REGISTRATIONS--> MASTER LIST <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="#">AUDIT STARTED</a></li>
                  <li><a href="#">MASTER LIST REGISTRATIONS </a></li>
		  <!--<li><a href="<?php //echo base_url('admin/dashboard/total18_registration'); ?>">REGISTRATIONS 2018</a></li>-->	
                  <li><a href="#">REGISTRATIONS BY STATE</a></li>
                  <li><a href="#">E-Mail Blast</a></li>
                  <li><a href="#">Master List Partners</a></li>
		  <li><a href="#">Summary of Audit</a></li>															
		  <li><a href="#">Master list Y-O-Y</a></li>
                </ul>
              </li>
              <li class=""><a href="#">AUDIT COMPLETED<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="#">PERFORMANCE REPORT</a></li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIMARY AUDIT PHASE I</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">School Profile & General </a></li>
                      <li><a href="#">AIR</a></li>
                      <li><a href="#">ENERGY</a></li>
                      <li><a href="#">Food</a></li>
                      <li><a href="#">LAND</a></li>
                      <li><a href="#">WATER</a></li>
                      <li><a href="#">WASTE</a></li>
                      <li><a href="#">FEEDBACK</a></li>
                      <li><a href="#">Total Primary Excel</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SECONDARY AUDIT PHASE I</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">School Profile & General</a> </li>
                      <li><a href="#">AIR</a></li>
                      <li><a href="#">ENERGY</a></li>
                      <li><a href="#">FOOD</a></li>
                      <li><a href="#">LAND</a></li>
                      <li><a href="#">WATER</a></li>
                      <li><a href="#">WASTE</a></li>
                      <li><a href="#">Feedback</a> </li>
                      <li><a href="#">Total Secondary Excel</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIMARY AUDIT PHASE II</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">School Profile & General </a></li>
                      <li><a href="#">AIR</a></li>
                      <li><a href="#">ENERGY</a></li>
                      <li><a href="#">Food</a></li>
                      <li><a href="#">LAND</a></li>
                      <li><a href="#">WATER</a></li>
                      <li><a href="#">WASTE</a></li>
                      <li><a href="#">FEEDBACK</a></li>
                      <li><a href="#">Total Primary Excel</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SECONDARY AUDIT PHASE II</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">School Profile & General</a> </li>
                      <li><a href="#">AIR</a></li>
                      <li><a href="#">ENERGY</a></li>
                      <li><a href="#">FOOD</a></li>
                      <li><a href="#">LAND</a></li>
                      <li><a href="#">WATER</a></li>
                      <li><a href="#">WASTE</a></li>
                      <li><a href="#">Feedback</a> </li>
                      <li><a href="#">Total Secondary Excel</a> </li>
                    </ul>
                  </li>
                  <li><a href="#">All Excel Dump</a></li>
                  <li class=""><a href="#">Total Points Calculation</a> </li>
                
                </ul>
              </li>
              <li class=""><a href="#">ANALYTICS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <li><a href="#">Participation By Zone</a></li>
                  <li><a href="#">Participation By State</a></li>
                  <li><a href="#">Performance By State</a></li>
				  <li><a href="#">Participation Comparison Report</a></li>
                  <li><a href="#">Performance Comparison Report</a></li>
                  <li><a href="#">Waste Generation Report</a></li>
                  <li><a href="#">e-Waste Disposal Report</a></li>
		  <li><a href="#">Air Report</a></li>
	          <li><a href="#">Energy Report</a></li>
		  <li><a href="#">Food Report</a></li>		
		  <li><a href="#">Land Report</a></li>
		  <li><a href="#">Water Report</a></li>
		  <li><a href="#">Waste Report</a></li>	
                </ul>
              </li>
              <li class=""> <a href="#">ANALYTICAL TABLES<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Participation Report</a></li>
                  <li><a href="#">Schools Profiling Report</a></li>
                  <li><a href="#">Merit List</a></li>
                  <li><a href="#">e-Waste Report</a></li>
                  <li><a href="#">Yes/No Report</a></li>
                  <li><a href="#">Vehicle Profiling Report</a></li>
                  <li><a href="#">Commuting Practices Profiling Report</a></li>
                  <li><a href="#">Energy Consumption Profiling Report</a></li>
                  <li><a href="#">Brands Sponsoring Events</a></li>
                  <li><a href="#">Food Profiling Traditional</a></li>
                  <li><a href="#">Food Ultra Processed flavour</a></li>
                  <li><a href="#">Food Ultra Processed Sales</a></li>
                  <li><a href="#">Green Cover Report</a></li>
                  <li><a href="#">Built-up Area Profiling Report</a></li>
                  <li><a href="#">Toilet Profiling Report</a></li>
                  <li><a href="#">Water Consumption Pattern Report</a></li>
                </ul>
              </li>
              <li class=""><a href="#">Feedback Analytics<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">How many Times schools participated Report </a></li>
                  <li><a href="#"> Audit easy to understand and self explanatory Report </a></li>
                  <li><a href="#">Green School (resource efficient) by 2019 Report </a></li>
                  <li><a href="#">rate the overall design of the audit Report </a></li>
                  <li><a href="#">How many times did you contact GSP Team</a></li>
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
