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

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js(1)"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/yui-utilities.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/shadowbox-yui.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/shadowbox.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/AC_RunActiveContent.js" type="text/javascript"></script>
    <script type="text/javascript">
    window.onload = function(){
        Shadowbox.init();
    
};
    </script>

    <style type="text/css">
    #loader { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1001; background: #FFFFFF; opacity: .7; }
    #loader img { position: absolute; top: 50%; left: 50%; margin-left: -32px; margin-top: -32px; }
    .placeholder { color: #aaa; }
    </style>
    </head>
    
<header class="form-hdr ">
  <div class="container">
    <figure class="logo2"><a href="http://studiotesseract.co/dashboard/2016/dashboard.php#"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="img-responsive"></a></figure>
    <img src="<?php echo base_url(); ?>assets/img/top-bnr.png" alt="" class="top-bnr1 "> </div>
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
      <li class="active"><a href="<?php echo base_url("school")?>">SCHOOL PROFILE</a></li>
              <li class="active"><a href="<?php echo base_url("general")?>">GENERAL QUESTIONS</a></li>
              <li class=""><a href="<?php echo base_url("air")?>">AIR</span></a></li>
              <li class=""><a href="<?php echo base_url("energy")?>">ENERGY</a></li>
              <li><a href="<?php echo base_url("food")?>">FOOD</a></li>
              <li class=""><a href="<?php echo base_url("land") ?>">LAND</span></a></li>
              <li class=""><a href="<?php echo base_url("water")?>">WATER</a> </li>
              <li><a href="">WASTE</a></li>
              <li><a href="">FEEDBACK</a></li>
              <li><a href="<?php echo base_url('logout');?>">LOGOUT</a></li>
              
              </ul>
          </div>
          <!-- /.navbar-collapse  --> 
        </div>
        <!-- /.container-fluid --> 
      </nav>
    </div>
  </div>
</header>

    