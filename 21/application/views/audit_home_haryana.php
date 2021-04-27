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
  <div class="home_container"  >
    <h1>GSP'S Audit@Home Scorecard 2020</h1>
     
     <div class="row">
        <div class="form-group" style="padding-left: 50px;"><label for="number">Click on your name below to get the Audit@Home scorecard.</label></div> 

        <div class="list">
            <ul style="text-align: left; padding-left: 50px;  ">
              <?php $i=1; foreach($fullstudent as $fullstudent){ ?>
              <li><a href="<?php echo base_url("Audit_home_scorecard/getAuditScoreByName?id=").$fullstudent->id; ?>" target='_blank'><?php echo $i++; echo ". "; echo $fullstudent->participant_name; ?></a></li>
            <?php } ?>
          </ul> 
        </div>
                       
         

</div>
         
  </div>  

</div>


<footer class="mrg30">
  <div class="container">
    <p>Copyright © 2021 Centre for Science and Environment</p>
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

.home_container .form-group {width: 100%; text-align: left; margin: 0 0 10px 0;}
.home_container{width: 80%;}

a {
     text-decoration: none ;
     color: #000;
     font-weight: bold;
  }
  
a:hover
  {
    color:#047773;
    text-decoration:none;
    cursor:pointer;
   }

 
</style>


</body>
</html>
