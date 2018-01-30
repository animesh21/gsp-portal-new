<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Green Schools Programme</title>
<meta name="generator" content="Green Schools Programme">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/shadowbox.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/jquery-ui-custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 8]>
        <link rel="stylesheet" href="/audit2016/upload/templates/tfr_responsive/css/template_ie8.css"/>
        <![endif]-->
<link rel="shortcut icon" href="http://studiotesseract.co/audit2016/upload/templates/tfr_responsive/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.alert {
	height: 50px !important;
	padding: 15px !important;
	font-weight: bold;
	border-radius: 0px;
}

.alert-success {
	border: 2px solid green;
}

.alert-danger {
	border: 2px solid red;
}
.schools-statics {padding: 35px 15px 15px; border-radius: 6px; font-size: 16px; width: 48%; min-height: 200px; margin: 10px 10px; display: inline-block; vertical-align: top; border: 1px solid #ccc; background: rgba(232, 101, 73, 0.1); position: relative;}
.schools-statics:nth-child(even) {margin-right: 0;}
.schools-statics .title {display: block; margin: 20px; text-align: center;}
.schools-statics .statics-circle {width: 80px; height: 80px; background: rgb(232, 101, 73); color: #fff; text-align: center; border-radius: 50%; padding: 12px; transition: all 0.5s ease-in-out; border: 5px solid #fff; margin: 0 auto;}
.schools-statics .statics-circle:hover {border: 5px solid rgb(232, 101, 73);}
.schools-statics .statics-circle span {font-weight: bold; font-size: 18px; display: block; margin: 0;}
.schools-statics label {color: #000; font-size: 12px; font-weight: normal; cursor: pointer;}
.schools-statics a {text-decoration: none;}
        </style>
</head>
<body class="lang-en groupbygroup showqnumcode-X">
<div id="loader"><img src="<?php echo base_url(''); ?>assets/img/loader.gif" width="64" height="64"></div>
<div class="main-wrapper">
  <div class="main" role="main">
    <div id="jhead">
      <header class="hdr-hdr">
        <div class="container">
          <figure class="logo"><img src="<?php echo base_url(''); ?>assets/img/logo.png"
                                                      class="img-responsive" id="logo" alt="CSE GSP"></figure>
          <img src="<?php echo base_url(''); ?>assets/img/top-bnr2.png" alt="" class="top-bnr img-responsive"
                                 id="image"></div>
      </header>
    </div>
    <div class="container" style="height:600px;">
      <div class="col-md-12">
        <h1><strong>GSP Audit 2017-18 Reports & Certificate</strong></h1>
        <a href="<?php echo base_url('Downloadlogout'); ?>" class="pull-right">Logout</a> 
		<hr/></div>
      <div class="col-md-4">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/admin/responsreport/pdf/").$this->session->userdata('USER_ID'); ?>" target="_blank">
          <div class="statics-circle"> <span><i class="fa fa-file-text-o fa-2x"></i></span> </div>
          </a>
          <div class="title"><strong>Response Report</strong></div>
        </div>
      </div>
      <div class="col-md-4 hide">
        <div class="schools-statics" style="width:100%;"> <a href="dashboard/audit_pahse_1" target="_blank">
          <div class="statics-circle"> <span><i class="fa fa-file-text-o fa-2x"></i></span> </div>
          </a>
          <div class="title"><strong>Performance Report</strong></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url('/download/getdigitalCertificate/').$this->session->userdata('USER_ID') ?>" target="_blank">
          <div class="statics-circle"> <span><i class="fa fa-file-text-o fa-2x"></i></span> </div>
          </a>
          <div class="title"><strong>Digital Certificate</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<footer>
  <div class="container">
    <p>Copyright © 2017 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. </p>
    <p></p>
  </div>
  <style type="text/css">
    .main > .container {
    background: #fff;
    padding: 75px 20px 45px;
    box-shadow: 0 0 6px #ccc;
    box-sizing: border-box;
   }
   .list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
    width: 154px;
   }
  </style>
</footer>
</body>
</html>
<!--close footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/chosen.jquery.js"></script>
