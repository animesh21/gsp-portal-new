
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Badge code View</title>
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
<link rel="shortcut icon" href="http://studiotesseract.co/audit2016/upload/templates/tfr_responsive/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
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
.navbar-default .navbar-nav>li>a {
    color: #fff !important;
    font-size: 15px!important;
    text-transform: uppercase!important;
    padding: 11px 20px!important;
    font-weight: 400!important;
}
.dropdown-menu li a  {
    color: #fff !important;
    font-size: 15px;
    text-transform: uppercase;
    padding: 11px 20px;
    font-weight: 400;
}
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
                                 id="image"> </div>
      </header>
    </div>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class=""><a href="https://greenschoolsprogramme.org/audit/20/download/downloadFiles">   Home</a></li>
             
            <?php  $userid=$this->session->userdata('USER_ID'); ?>
              <li class=""><a href="<?php echo base_url('https://greenschoolsprogramme.org/audit/19/download/downloadReportsSection'); ?>">Downloads</a></li>
             <li class=""><a href="<?php echo base_url('download/badgecodeview'); ?>">GSP Logo</a></li>
              <li class=""> <a href="<?php echo base_url('Downloadlogout'); ?>" class="pull-right">Logout</a></li>
            </ul>
          </div> 
        </div>
      </nav>

    
       
  <div class="jumbotron" style="text-align: justify;">
  <p class="lead">Being a Green School for GSP Audit 2019, you may place the GSP logo on the home page of your website.</p>
  <p class="lead">The purpose of this logo would be to help people understand that you are a green school certified by Centre for Science and Environment (CSE). The code is given in the window below. Once the logo is placed on your school website and when it is clicked on, it would take the viewer to the GSP results page, where your school is shown as a Green School.</p>
  <p class="lead">Please share the code with your IT team and request the person concerned to paste the code (as is) on the school's website homepage (back end). The Green logo will be valid for a period of three years from the date on which it has been uploaded on the website and will disappear in 2023.</p>
  <p class="lead">We hope that you will upload the logo on the school's website. Please feel free to share your feedback at support@greenschoolsprogramme.org in case of any confusion.</p>
  <p class="lead">Look forward to see you do well in the GSP Audit 2020, as and when it starts.
</p>
  <hr class="my-4">
  <p>
        <textarea style="height:200px";>
        <script src="https://www.greenschoolsprogramme.org/audit/19/assets/js/badge-code.js"></script>
        <script>
      /*School Badge Code*/
      window.onload = function(){
        get_date_difference('03-31-2022');
      }
      </script>
      <div class='badges' style='height:200px; width:200px;'></div>
      </textarea></p>
   
</div>

   </div>
   
</div>
</div>
 
</body>
</html>
<style type="text/css">
.navbar-default {margin-bottom: 0;border-radius: 0;background: #505050!important; border: 0; padding: 0; z-index:0;}
.main > .container {background: #eee;padding: 0px 0px 5px!important;box-shadow: 0 0 6px #ccc;box-sizing: border-box;z-index:1;}
.table tr:nth-child(1) td{background:#e86549!important; color:#FFFFFF;}
.table tr:nth-child(1){background:#e86549!important; color:#FFFFFF;}
.table tr td:nth-child(1){background:#505050; color:#FFFFFF;}
.navbar-default li a { color:#FFFFFF!important;}
ul.nav li:hover > ul.dropdown-menu { display: block; z-index:10000;}
.hdr-hdr {border-bottom: solid 14px #e86549;z-index: 1;}
</style>
 
