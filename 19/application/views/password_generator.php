<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Green Schools Programme</title>

<link href="<?php echo base_url('');?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url('');?>assets/css/responsive.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<header class="hdr-bdr">
  <div class="container">
    <figure class="logo"><a href="<?php echo base_url('admin/dashboard') ?>"><img src="<?php echo base_url('');?>assets/img/logo.png" class="img-responsive" alt=""></a></figure>
    <img src="<?php echo base_url('');?>assets/img/top-bnr2.png" alt="" class="top-bnr img-responsive"> </div>
</header>

<div class="container" style="padding: 20px">
  <div class="home_container">
    <h1>Generate Digital Certificate</h1>
    <?php if(!empty($this->session->flashdata('data_name'))) { ?>
     <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      
      <strong><?php echo $this->session->flashdata('data_name'); ?></strong>
    </div>
  <?php } ?>
    <p style="color: red"></p>
     <div class="row" style="padding: 30px; margin: 0px; text-align: center;">
    <?php echo form_open('GetCertificate/getCertificate', array('class'=>'form-inline')); ?>
        <div class="form-group">
            <label for="number">Mobile Number</label> &nbsp; &nbsp;
            <input type="text" class="form-control" id="number" name="mobile" placeholder="14845551324">
        </div> <br/>  <br/> 
        <button type="submit" class="btn org-btn width100" style="padding: 12px">Login</button>
    <?php echo form_close(); ?>

</div>
         
  </div>  

  <p class="log-p text-center">Access to the dashboard is restricted to authorized personnel only.</p>
</div>


<div class='badges' style='height:200px; height:200px;'></div>
<footer class="mrg30">
  <div class="container">
    <p>Copyright © 2015 Centre for Science and Environment</p>
  </div>

</footer>



</body>
</html>
