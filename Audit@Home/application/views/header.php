<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Student Quiz Portal</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon/logo.ico">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/favicon/logo.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>/assets/img/favicon/logo.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    
  </head>
  
  <body>
  
  <nav class="ec-nav sticky-top bg-light border-bottom">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href="#"><img alt="" src="<?php echo base_url(); ?>/assets/img/logo.png"></a>

      </div>
        <div class="navbar-brand" style="padding-left: 380px; margin-bottom: 25px;">
        <a class="logo-default" href="#"><img alt="" src="<?php echo base_url(); ?>/assets/img/toppbar.png"></a> | <a  style="color: red; font-size: 16px;" href="<?php echo base_url('Login/logout'); ?>" style="color: white"><?php echo $this->session->userdata('USERNAME'); ?> Logout</a>
      </div>
          
    </div>
  </div>   
  </nav>     
 
 <style type="text/css">
   body {
    font-family: "Work Sans", sans-serif;
    color: #606065;
    font-size: 1.1rem;
    background-color: antiquewhite;
}

.col-md-12 {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 10px;
    border: 1px solid #e0d8d8;
    box-shadow: lightsteelblue;
    padding: 20px 0 9px 19px;
}

.bg-light {
    background-color: transparent !important;}

.form-control {
    display: block;
    width: 98%;}


input[type="radio"] {
  -ms-transform: scale(1.6);
  -webkit-transform: scale(1.6);
  transform: scale(1.6);
  margin-left:25px;  
}

 </style>