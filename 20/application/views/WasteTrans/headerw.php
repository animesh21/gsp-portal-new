<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?></title>
<!-- BOOTSTRAP CORE STYLE  -->
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-106078591-1', 'auto');
ga('send', 'pageview');

</script>
<style>
	#myBtn {
		cursor: pointer;
		position: fixed;
		bottom: 20px;
		right: 20px;
		display: none;
	}
</style>
<style type="text/css">
	button {
		background-color: #e86549;
		border-radius: 2px;
		box-shadow: 0 0 6px #cccccc;
		color: #fff;
		margin: 30px 5px;
		min-width: 138px;
		padding: 16px 15px;
		text-transform: uppercase;
		border: none;
	}

	#index li {
    padding: 0px 45px !important;
}

</style>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/yui-utilities.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/shadowbox-yui.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/shadowbox.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/validatorr.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/CrossLink.js" type="text/javascript"></script> 
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
	window.onload = function () {
		Shadowbox.init();

	};
</script>
<script type="text/javascript">
	$("body").addClass("page-odd");
	$(document).ready(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#myBtn').fadeIn();
			} else {
				$('#myBtn').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#myBtn').click(function () {
			$('#myBtn').tooltip('hide');
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

		$('#myBtn').tooltip('show');

	});
</script>
<style type="text/css">
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #6f6d69!important;
  border-right: 16px solid #e86549 !important;
  border-bottom: 16px solid #6f6d69!important;
  border-left: 16px solid #e86549 !important;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.hide_one{ 
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
	width:100%;
	height:100%;
	background:#0000009e;
	}
</style>		
</head>
<body>
<div class="main-wrapper">
<div class="main" role="main">
<div id="jhead">
  <header class="form-hdr">
    <div class="container">
      <figure class="logo2"><a href="http://www.greenschoolsprogramme.org/" target="_blank"> <img
								src="<?php echo base_url(); ?>assets/img/logo.png" title="CSE GSP" alt=""
								class="img-responsive"></a></figure>
   <!--   <h1 style="
font-size: 20px; font-family: fantasy; margin-left: 42px; position: relative;
left: -208px; color: #e86549;  text-align: center; top: 28px; display:none;">Extended Submission Deadline <span style="display:none;">
      November 18, 2018</span> </h1>-->
      <img src="<?php echo base_url(); ?>assets/img/top-bnr.png" alt="" class="top-bnr1" style="left:20px; position:relative;"></div>
  </header>
</div>
<div id="index" class="index">
  <div class="index-body">
    <h2>Question index</h2>
    <ol>
      <li id="Nav" class="row  <?php echo ($this->router->fetch_class() == 'WasteTransformers') ? "current" : "missing"; ?>"onClick="javascript:window.location.href='<?php echo base_url("WasteTransformers") ?>';">School
        Profile </li>
		<li id="Nav" class="row  <?php echo ($this->router->fetch_class() == 'Wt') ? "current" : "missing"; ?>"onClick="javascript:window.location.href='<?php echo base_url("Wt") ?>';">General
        </li>
		<li id="Nav" class="row  <?php echo ($this->router->fetch_class() == 'Baseline/downloadWasteSection') ? "current" : "missing"; ?>"onClick="javascript:window.location.href='<?php echo base_url("Baseline/downloadWasteSection") ?>';">Baseline
        </li>
		<li id="Nav" class="row  <?php echo ($this->router->fetch_class() == '#') ? "current" : "missing"; ?>"onClick="javascript:window.location.href='<?php echo base_url("#") ?>';">Action Plan
        </li>
		<li id="Nav" class="row  <?php echo ($this->router->fetch_class() == '#') ? "current" : "missing"; ?>"onClick="javascript:window.location.href='<?php echo base_url("#") ?>';">The Team
        </li>
		
      
    </ol>
  </div>
</div>
<script type="text/javascript">
generalNav
</script>
<div class="hide_one text-center hide">
</div>
