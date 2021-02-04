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
    <img src="<?php echo base_url('');?>assets/img/toppbar.png" alt="" class="top-bnr img-responsive"> </div>
</header>

<div class="container" style="padding: 20px">
  <div class="home_container" style="padding: 30px 15px 30px 15px; width: 55%;">
    <h1> APNGC Online Capacity Building Workshop - January, 2021</h1>
    <?php if(!empty($this->session->flashdata('data_name'))) { ?>
     <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      
      <strong><?php echo $this->session->flashdata('data_name'); ?></strong> 
    </div>
  <?php } ?>
    <p style="color: red"></p>
     <div class="row" style="padding: 30px; margin: 0px; text-align: center;">
    <?php echo form_open('GetCertificate/getCertificate', array('class'=>'form-inline')); ?>
    <!-- <p style="font-weight: bold;">The link to download the GSP-Skill Building E-Camp certificate is now closed. For any questions, please write to: <a href = "mailto: support@greenschoolsprogramme.org">support@greenschoolsprogramme.org</a>. </p> -->
        <div class="form-group" style="width: 100%">
            <label for="number">Registered Mobile Number<a class="tt" data-tooltip="Please enter the mobile number used at the time of online registration."><span
                            class="badge">?</span></a></label> &nbsp; &nbsp;
            <input type="text" class="form-control" id="number" name="mobile" required="" placeholder="14845551324">
        </div> <br/>  <br/> 
        <button type="submit" class="btn org-btn width100" style="padding: 12px">Login</button>
    <?php echo form_close(); ?>

</div>
         
  </div>  

  <p class="log-p text-center">Access to the dashboard is restricted to authorized personnel only.</p>
</div>


<footer class="mrg30">
  <div class="container">
    <p>Copyright © 2020 Centre for Science and Environment</p>
  </div>

</footer>

<style>
.mrg30 {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}

.tt {
    display: inline-block;
    color: #fff;
    height: 27px;
    width: auto;
    text-align: left;
    }

    a{
    text-decoration: none;
}



.badge {
    background-color: #9b9796;
    font-size: 19px;
    display: inline-block;
    margin-left: 5px;
    border-radius: 50%;
    text-align: center;
    vertical-align: top;
    line-height: 27px;
    font-family: 'Lato Bold', sans-serif;
    font-weight: normal;
}
</style>


</body>
</html>
