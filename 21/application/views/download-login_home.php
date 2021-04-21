<!DOCTYPE html>
<!-- saved from url=(0052)http://studiotesseract.co/audit2016/index.php/266617 -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Green Schools Programme</title>
<meta name="generator" content="Green Schools Programme">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/jquery-ui-custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/responsive.css">
<!--[if lte IE 8]>
        <link rel="stylesheet" href="/audit2016/upload/templates/tfr_responsive/css/template_ie8.css"/>
        <![endif]-->
<link rel="shortcut icon" href="http://studiotesseract.co/audit2016/upload/templates/tfr_responsive/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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
			.btn-danger{ background:#e86549; border:1px solid #e86549;}
			.btn-danger:hover{ background:#e86549; border:1px solid #e86549;}
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
                                 id="image"></div>
      </header>
    </div>
    <script type="text/javascript">
                    $(document).ready(function () {
                        $("li").removeAttr("title");
                    });
                </script>
    <script src="<?php echo base_url(''); ?>assets/js/main.js"></script>
    <!-- Gem jQuery -->
    <div class="survey-heading">
      <div class="col-md-4 languageswitcher" style="display: none;"></div>
    </div>
    <style type="text/css">
                    .mform {
                        display: none;
                    }
                </style>
    <script type="text/javascript">
                    $(document).ready(function () {
                        $('.mform').show();
                    });
                </script>
    <div class="home_container">
      <div class="mform" style="display: block;">
        <h1>Please Log In For Download Document</h1>
        <p class="errortext"></p>
        <?php
                        if($this->session->flashdata('error'))
                        {
                            echo '<div class="alert alert-danger alert-dismissable">';
                            echo $this->session->flashdata('error');
                            echo '</div></div>';
                        }
                        ?>
        <?php echo form_open('downloadLogin/download_report'); ?>
        <div class="form-group"> <?php echo form_error('email'); ?>
          <input type="text" class="form-control" name="email" placeholder="Enter Coordinator’s Email"
                                   autofocus="" value="<?php echo set_value('email'); ?>"/>
        </div>
        <div class="form-group"> <?php echo form_error('password'); ?>
          <input type="password" class="form-control" name="password" placeholder="Password"
                                   value="<?php echo set_value('password'); ?>"/>
          <p><a class="lptext" title="Forgot Password Form" href="javascript:void(0)" rel="shadowbox;"
                                  width="580" height="360" data-toggle="modal" data-target="#myModal">&nbsp;</a></p>
        </div>
        <div class="btn-group">
          <input class="org-btn" type="submit" value="Continue">
        </div>
        <?php echo form_close(); ?>
        <p class="help">Need help? Email: <a href="mailto:support@greenschoolsprogramme.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. <br>
          Call between 10am to 5:30pm - Monday to Friday. </p>
      </div>
      <noscript>
      &lt;p class="disabled"&gt;This Audit requires Javascript to be enabled in your browser. Please enable
      Javascript and try again.&lt;/p&gt;
      </noscript>
    </div>
    <script src="http://www.greenschoolsprogramme.org/audit2017/assets/js/jquery.min.js"></script>
    <script src='http://www.greenschoolsprogramme.org/audit2017/assets/js/badge-code.js'></script>
    <script>
			/*School Badge Code*/
			window.onload = function(){
			  get_date_difference('12-24-2017');
			}
			</script>
  </div>
</div>
<p class="m-browser">Please use a modern browser such as <a href="https://www.mozilla.org/en-US/firefox/new/"
                                                                            target="_blank">Firefox</a> or <a
                                                                            href="https://www.google.com/chrome/" target="_blank">Chrome</a> to take the audit. This audit
  requires Javascript to be enabled in your browser and will not function properly without it.</p>
</div>
</div>
<!--</div>-->
<footer>
  <div class="container">
    <p>Copyright © 2017 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. </p>
    <p></p>
  </div>
  <!--close container-->
</footer>
<div id="shadowbox_overlay"></div>
<div id="shadowbox_container">
  <div id="shadowbox">
    <div id="shadowbox_title">
      <div id="shadowbox_title_inner"></div>
    </div>
    <div id="shadowbox_body">
      <div id="shadowbox_body_inner"></div>
      <div id="shadowbox_loading"></div>
    </div>
    <div id="shadowbox_toolbar">
      <div id="shadowbox_toolbar_inner"></div>
    </div>
  </div>
</div>
<!--<div id="myModal" class="modal fade in" role="dialog" style="display: block; padding-right: 17px; background:rgba(0, 0, 0, 0.57);">
  <div class="modal-dialog"> Modal content
    <div class="modal-content">
      <div class="modal-header"  style="background:#e86549; color:#FFFFFF;">
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">GSP Audit 2017</h4>
      </div>
      <div class="modal-body">
        <p>If you want to download the reports of previous year CSE's Green Schools Programme Audit 2017. Please click the below button </p>
        <p class="text-center"><a href="http://www.greenschoolsprogramme.org/audit/downloadLogin" target="_blank" class="btn btn-danger btn-block btn-lg">Download Reports For GSP Audit 2017</a></p>
      </div>
    </div>
  </div>
</div>-->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header" style="background:#e86549; color:#fff;">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Forget Password</h4>
  </div>
  <div class="modal-body"> <span id="msgForget"></span>
    <div class="form-group">
      <label class="text-gray">Email-Id&nbsp;</label>
      <input type="text" name="email_id" id="email_id" class="form-control"
                                   style="border-radius:0px; height:40px;"/>
    </div>
  </div>
  <div class="modal-footer" style="background:#e86549; color:#fff;">
    <button type="button" class="btn btn-default" id="btnForgetPassword">Forget Password</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
<script type="text/javascript">
            $(document).ready(function () {
                $('#btnForgetPassword').on('click', function () {
                    var emailval = $('input[name="email_id"]').val();
                    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                    if (emailval == '') {
                        $('#msgForget').html('<p style="color:red; font-weight:bold">Please enter email address !</p>');
                    } else if (!pattern.test(emailval)) {
                        $('#msgForget').html('<p style="color:red; font-weight:bold">Please enter a valid email address !</p>');
                    } else {
                        record = {
                            val: emailval
                        };
                        $.post('<?php echo base_url('login/forgetpassword') ?>', record, function (data) {

                            console.log(data);
                            if (data == "success") {
                                $('#msgForget').html('<div class="alert alert-success">' +
                                        '<strong>&#10004; Success!</strong> New password successfully send to your email !.' +
                                        '</div>');
                            } else if (data == "error") {
                                $('#msgForget').html('<div class="alert alert-danger">' +
                                        '<strong>&#x2716; Error!</strong> The email you have entered is not registered.' +
                                        '</div>');
                            }
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        }, 'json');
                    }
                });
            });
    </body>
		
</html>
