<!DOCTYPE html>
<!-- saved from url=(0050)http://www.greenschoolsprogramme.org/registration/ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration Form - Green Schools Programme Audit 2021</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
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
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<style type="text/css">
        .error {
            font-size: 12px !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
    </style>
<script type="text/javascript">
        $(document).ready(function () {
            $('.wrapper').show();

            $('#registration-form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    address1: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    district: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    pincode: {
                        required: true,
                        number: true,
                        maxlength: 6
                    },
                    std: {
                        required: true
                    },
                    telephone: {
                        required: true
                    },
                    schoolemail: {
                        required: true,
                        email: true
                    },
                    principle_name: {
                        required: true
                    },
                    mobile: {
                        required: true,
                        number: true,
                        maxlength: 10
                    },
                    coname: {
                        required: true
                    },
                    coemail: {
                        required: true,
                        email: true
                    },
                    comobile: {
                        required: true,
                        number: true,
                        maxlength: 10
                    },
                    captcha: {
                        required: true
                    }
                },
                messages: {
                    name: 'Please enter School Name',
                    address1: 'Please enter Address',
                    state: 'Please enter State',
                    district: 'Please enter District',
                    city: 'Please enter City',
                    pincode: {
                        required: 'Please enter Pincode',
                        number: 'Enter valid Pincode',
                        maxlength: 'Enter valid Pincode'
                    },
                    std: {
                        required: 'Please ented STD Code'
                    },
                    telephone: 'Please enter Landline Number',
                    schoolemail: {
                        required: 'Please enter Email Address',
                        email: 'Enter valid Email Address'
                    },
                    principle_name: 'Please enter Prinicipla Name',
                    mobile: {
                        required: 'Please enter Mobile Number',
                        number: 'Enter valid Mobile Number',
                        maxlength: 'Enter valid Mobile Number'
                    },
                    coname: 'Please enter GSP Coordinator Name',
                    coemail: {
                        required: 'Please enter GSP Coordinator Email',
                        email: 'Enter a valid email address'
                    },
                    comobile: {
                        required: 'Please enter GSP Coordinator Mobile',
                        number: 'Enter valid Mobile Number',
                        maxlength: 'Enter valid Mobile Number'
                    },
                    captcha: 'Please Enter Captcha'
                }
            });
        });
    </script>
<script type="text/javascript">
        window.onload = function () {
            Shadowbox.init();

        };
        var getCities = function () {
            var value = new Object();
            value.id = $('#country-select').val();
            var URL = "<?php echo base_url(); ?>";
            $.ajax({
                url: URL + 'ajax/citites',
                type: 'POST',
                data: value,
                success: function (html) {
                    $('#city-select').html(html);
                }
            });
        };
    </script>
<style type="text/css">
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1001;
            background: #FFFFFF;
            opacity: .7;
        }

        #loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -32px;
            margin-top: -32px;
        }

        .placeholder {
            color: #aaa;
        }
   .btn-group{
     background: #24a5a0;
     border: none;
     color: #fff;
     min-width: 138px;
     box-sizing: border-box;
     padding: 16px 15px;
     text-transform: uppercase;
     border-radius: 2px;
     margin: 10px 0 0 0;
     box-shadow: 0 0 6px #ccc;
   }
   .btn-group:hover{
     color:#fff;
    }
    </style>
<script type="text/javascript">   
function redirect_page() 
{  
 window.location="<?php echo base_url('login'); ?>"; 
} 
function redirect_phase(){ 
  setTimeout('redirect_page()', 14000);   
}
</script>
</head>
<body onLoad="redirect_phase();">
<div id="loader"><img src="<?php echo base_url(); ?>assets/img/loader.gif" width="64" height="64"></div>
<div class="container">
  <header> <a href="http://www.greenschoolsprogramme.org/registration/"> <img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="1028" height="117"></a> <img src="<?php echo base_url(); ?>assets/img/icons.png" width="205" height="94" class="icon"> </header>
</div>
<main class="bdr">
<div class="container">
<div class="wrapper" style="display: block; height:500px;">
  <div class="top-area">
    <h2 class="text-center">Welcome To Green Schools Programme </h2>
    <div class="well col-md-8 col-md-offset-2">
      <p class="text-center">You have successfully registered your school for the GSP Network. Kindly add <a href="" style="">support@greenschoolsprogramme.org</a> to your Contact list so that emails from GSP do not go into your spam box. Good luck! GSP Team. <br/><br/>
        <a class="btn-group" href="<?php echo base_url('login'); ?>"> Login </a></p>
	  <br/>	
      <p class="help text-center">Need help? Email: <a href="mailto:support@greenschoolsprogramme.org">support@greenschoolsprogramme.org</a><br/><br>
         </p>
    </div>
  </div>
</div>
</main>
<footer>
  <div class="container">
    <ul class="links">
      <li class="store"><a href="http://csestore.cse.org.in/" target="_blank"><img
                            src="<?php echo base_url(); ?>assets/img/store.jpg" class="img-responsive"></a></li>
      <li class="portal"><a href="http://www.indiaenvironmentportal.org.in/" target="_blank"><img
                            src="<?php echo base_url(); ?>assets/img/portal.jpg" class="img-responsive"></a></li>
      <li class="earth"><a href="http://www.downtoearth.org.in/" target="_blank"><img
                            src="<?php echo base_url(); ?>assets/img/earth.jpg" class="img-responsive"></a></li>
      <li class="rain"><a href="http://www.rainwaterharvesting.org/" target="_blank"><img
                            src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/img/rain.jpg"
                            class="img-responsive"></a></li>
      <li class="times"><a href="http://www.gobartimes.org/" target="_blank"><img
                            src="<?php echo base_url(); ?>assets/img/times.jpg" class="img-responsive"></a></li>
    </ul>
  </div>
  <div class="text-center">Copyright © 2021 Centre for Science and Environment</div>
</footer>
</body>
</html>
