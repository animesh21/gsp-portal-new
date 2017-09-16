<?php
session_start();
ob_start();
        if(isset($_SESSION['year']))
        header('location:/dashboard/'.$_SESSION['year'].'/dashboard.php');
        else
        header('location:/dashboard/'); 
       
include('website_db.php');
$error = "";
if(isset($_REQUEST['submit']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $sql_check = mysql_query("select * from `dashboard_login` where `username`='".$username."' AND `password` = '".$password."'");
    if(mysql_num_rows($sql_check) > 0)
    {
        $sql_data_array = mysql_fetch_array($sql_check);
        $_SESSION['username'] = $sql_data_array['username'];
        $_SESSION['name'] = $sql_data_array['name'];
        header('location:dashboard.php');
    }
    else 
    {
        $error = "Please enter correct login credentials.";   
    }
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
<header class="hdr-bdr">
  <div class="container">
    <figure class="logo"><a href="#"><img src="images/logo.png" class="img-responsive" alt=""></a></figure>
    <img src="images/top-bnr2.png" alt="" class="top-bnr img-responsive">

  </div>
  <!--close container--> 
  
</header>
<!--close header-->
<form name="login" method="post" action="">
<div class="container">
  <div class="home_container">
    <h1>Please Log In To Enter Dashboard</h1>
    <p style="color: red"><?php if($error !=""){ echo $error; }  ?></p>
      <div class="form-group">
          <input type="text" class="form-control " id="exampleInputEmail1" name="username" placeholder="Email">
      </div>
      <div class="form-group">
       <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
<!--       <span><a href="#"> Forgot your password?</a></span>-->
      </div>
     <!--<div class="form-group">
         <select name="year" class="form-control">
             <option value="">Please Select</option>
             <option value="2015">2015</option>
             <option value="2016">2016</option>
         </select>
      </div>-->
    <button type="submit" class="btn org-btn width100" name="submit">Next</button>
  </div>
  <!--close home_container--> 
  <!-- <p class="log-p">Need help? <a href="mailto:support@greenschoolsprogramme.org"> Email support@greenschoolsprogramme.org</a> or call 98-105-05283 or 98-739-26822.</p>-->
  <p class="log-p">Access to the dashboard is restricted to authorized personnel only.</p>
  
</div>
</form>
   
<!--close container--> 

<footer class="mrg30">
	<div class="container">
    	<p>Copyright &copy; 2015 Centre for Science and Environment</p>
    </div><!--close container-->
</footer><!--close footer-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>