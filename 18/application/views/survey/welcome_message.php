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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-casual.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        
      .affix {
          top: 0;
          width: 100%;
      }

      .affix + .container-fluid {
          padding-top: 70px;
      }
    .navbar-nav > li > a 
    {
        padding-top:10px !important; 
        padding-bottom:10px !important;
        padding-left: 8px !important;
        padding-right: 8px !important;
        color: white !important;
        z-index: 100;

    }
    .navbar 
    {
        min-height:40px !important;
        background-color: rgb(232,101,73) !important;
    }
        
    .nav .active a 
    { 
        background:#ce4d31 !important 
    }

    </style>
    
</head>

<body>

    <div class="container-fluid" style="background-color:#e4e6e5;color:#fff;height:200px;">
        <div class="brand" style="color: black">GREEN SCHOOLS</div>
        <div class="address-bar" style="color: black">PROGRAMEE</div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
        <ul class="nav navbar-nav">
            <li class="active"><a href="">SCHOOL PROFILE</a></li>
            <li><a href="#home">GENERAL QUESTIONS</a></li>
            <li><a href="#menu1">AIR</a></li>
            <li><a href="blog.html">ENERGY</a></li>
            <li><a href="blog.html">FOOD</a></li>
            <li><a href="blog.html">LAND</a></li>
            <li><a href="blog.html">WATER</a></li>
            <li><a href="blog.html">WASTE</a></li>
            <li><a href="blog.html">FEEDBACK</a></li>
        </ul>
    </nav>

    
    <div class="container">
        <div class="row">
            <h2>SCHOOL PROFILE</h2>
            <p class="lead">
                In this section, all questions are compulsory. The school contact details should match with the details provided during the time of registration to the Green Schools Programme (GSP) Audit.<br />
                
            </p>
        
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Name of the School / Institution:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 1:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 2:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Country:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">State:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">District:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">City:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Pin Code:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Telephone Number (Landline Number):</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Mobile number:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Principal's Name:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Name: </label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Email:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Enter GSP Coordinator's Mobile Number:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Please select the appropriate category for your school</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">How many shifts does your school have</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
    </script>
    <!-- Script to Activate the Carousel -->
    <!-- Bootstrap Core JavaScript -->
    
    <!-- Script to Activate the Carousel -->
    
</body>

</html>
