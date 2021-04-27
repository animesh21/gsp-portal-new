<!DOCTYPE html>
<!-- saved from url=(0036)http://studiotesseract.co/dashboard/ -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Green Schools Programme</title>
<!-- Bootstrap -->
<link href="<?php echo base_url('');?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('');?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url('');?>assets/css/responsive.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="hdr-bdr">
  <div class="container">
    <figure class="logo"><a href="<?php echo base_url('admin/dashboard') ?>"><img src="<?php echo base_url('');?>assets/img/logo.png" class="img-responsive" alt=""></a></figure>
    <img src="<?php echo base_url('');?>assets/img/toppbar.png" alt="" class="top-bnr img-responsive"> </div>
  <!--close container-->
</header>
<!--close header-->
<?php echo form_open('admin/login'); ?>
<div class="container">
  <div class="home_container">
    <h1>Please Log In To Enter Dashboard</h1>
    <p style="color: red"></p>
    <div class="form-group"> <?php echo form_error('email'); ?>
      <input type="text" class="form-control" name="email" placeholder="Email" autofocus="" value="<?php echo set_value('email'); ?>" />
    </div>
    <div class="form-group"> <?php echo form_error('password'); ?>
      <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
    </div>
    <div class="form-group">
      <select name="year" class="form-control" onchange="redirect(this.value)">
         <option value="2017" selected="selected">2021</option>
      </select>
    </div>
    <button type="submit" class="btn org-btn width100">Next</button>
  </div>
  <!--close home_container-->
  <!-- <p class="log-p">Need help? <a href="mailto:support@greenschoolsprogramme.org"> Email support@greenschoolsprogramme.org</a> or call 98-105-05283 or 98-739-26822.</p>-->
  <p class="log-p text-center">Access to the dashboard is restricted to authorized personnel only.</p>
</div>
<?php echo form_close(); ?>
<!--close container-->
</script>
<script src='http://www.greenschoolsprogramme.org/audit2017/assets/js/badge-code.js'></script>
<script>
			/*School Badge Code*/
			window.onload = function(){
			  get_date_difference('12-24-2017');
			}
			</script>
<div class='badges' style='height:200px; height:200px;'></div>
<footer class="mrg30">
  <div class="container">
    <p>Copyright © 2020 Centre for Science and Environment</p>
  </div>
  <!--close container-->
</footer>
<!--close footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('')?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
<script>
    function redirect(value)
    {
       if(value=='2015' || value=='2016')
       {
           location.href="http://greenschoolsprogramme.org/audit/np/index.php";
       }
       if(value=='2017'){
	  location.href="http://greenschoolsprogramme.org/audit/index.php";
	 }	    
    }
</script>
</body>
</html>
