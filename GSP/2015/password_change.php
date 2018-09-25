<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location: index.php');
}
include('website_db.php');
$error = "";
$sucessmsg="";
$errormsg="";
if(isset($_REQUEST['change_pass']))
{
/* @var $_REQUEST type */
$username = $_SESSION['username'];   
$cpass=$_REQUEST['currentpass'];
$npass=$_REQUEST['npass'];
$rpass=$_REQUEST['rpass'];


$sql_check=mysql_query("select * from `dashboard_login` where `username`='".$username."' AND `password`='".$cpass."'");
if(mysql_num_rows($sql_check)>0)
   {
       if($npass == $rpass)
       {    
           $sql_check_token = mysql_query("select * from `dashboard_login` where `password` = '".$npass."'");
           if(mysql_num_rows($sql_check_token)>0)
           {
                $errormsg="This password is already in use. Please enter another password.";    
           }
           else{
           $sql_passupdate=mysql_query("UPDATE `dashboard_login` SET `password`='".$npass."' WHERE `username`='".$username."'");
           if($sql_passupdate)
               {
                  $sucessmsg="You have successfully changed your password.";
               }
           }
       }
       
       else
       {
          $errormsg="Password mis-matched. Please check your new password and repeat password, they both should be same.";
       }
       
   }   
   else
   {
       $errormsg="Please check your current password.";
   }
}
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if($sucessmsg !="")
{
echo "<script type='text/javascript'>window.parent.location.reload()</script>";    
//header("Refresh:0; url=dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Green Schools Programme</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--close header-->
<form name="login" method="post" action="">
<div class="container">
    <div class="home_container" style="margin-top: 23px;">
    <h1>Change Password</h1>
    <p style="color: red"><?php if($error !=""){ echo $error; }  ?></p>
      <div class="form-group">
          <input type="password" class="form-control " id="exampleInputEmail1" name="currentpass" placeholder="Current Password">
      </div>
      <div class="form-group">
       <input type="password" class="form-control" id="exampleInputPassword1" name="npass" placeholder="New Password">
       </div>
    <div class="form-group">
       <input type="password" class="form-control" id="exampleInputPassword1" name="rpass" placeholder="Repeat New Password">
       </div>
    <button type="submit" class="btn org-btn width100" name="change_pass">Submit</button>
  </div>
  <!--close home_container--> 
  <p class="log-p">Need help? <a href="mailto:gsphelp@cseindia.org"> Email gsphelp@cseindia.org</a> or call 98-105-05283 or 98-739-26822.</p>
  
</div>
</form>
   
<!--close container--> 




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>