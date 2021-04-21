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
    <title>Greenschools Programme</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <style>
        #myBtn {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }
    </style>
    <style type="text/css">
        button {
            background-color: #e86549;
            border-radius: 2px;
            box-shadow: 0 0 6px #cccccc;
            color: #fff;
            margin: 30px 5px;
            min-width: 138px;
            padding: 16px 15px;
            text-transform: uppercase;
            border: none;
        }
    </style>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/yui-utilities.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/shadowbox-yui.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/shadowbox.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/AC_RunActiveContent.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validatorr.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/CrossLink.js" type="text/javascript"></script>

    <script type="text/javascript">
        window.onload = function () {
            Shadowbox.init();

        };
    </script>
    <script type="text/javascript">
        $("body").addClass("page-odd");
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#myBtn').fadeIn();
                } else {
                    $('#myBtn').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#myBtn').click(function () {
                $('#myBtn').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $('#myBtn').tooltip('show');

        });
    </script>
</head>
<body>
<div class="main-wrapper">
    <div class="main" role="main">
        <div id="jhead">
            <header class="form-hdr">
                <div class="container">
                    <figure class="logo2"><a href="http://www.greenschoolsprogramme.org/" target="_blank"> <img
                                    src="<?php echo base_url(); ?>assets/img/logo.png" title="CSE GSP" alt=""
                                    class="img-responsive"></a></figure>
                    <img src="<?php echo base_url(); ?>assets/img/top-bnr.png" alt="" class="top-bnr1 "></div>
            </header>
        </div>
        <div id="index" class="index">
            <div class="index-body">
                <h2>Question index</h2>
                <ol>
                    <li id="Nav"
                        class="row  <?php echo ($this->router->fetch_class() == 'school') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/response/'.$id) ?>';">School
                        Profile
                    </li>
                    <li id="generalNav"
                        class="row <?php echo ($this->router->fetch_class() == 'general') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/general/'.$id) ?>';">General
                        Questions
                    </li>
                    <li id="airNav"
                        class="row <?php echo ($this->router->fetch_class() == 'air') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/air/'.$id) ?>';">Air
                    </li>
                    <li id="Nav"
                        class="row <?php echo ($this->router->fetch_class() == 'energy') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/energy/'.$id) ?>';">Energy
                    </li>
                    <li id="Nav"
                        class="row <?php echo ($this->router->fetch_class() == 'food') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/food/'.$id) ?>';">Food
                    </li>
                    <li id="Nav"
                        class="row <?php echo ($this->router->fetch_class() == 'land') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/land/'.$id) ?>';">Land
                    </li>
                    <li id="Nav"
                        class="row <?php echo ($this->router->fetch_class() == 'water') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/water/'.$id) ?>';">Water
                    </li>
                    <li id="Nav"
                        class="row <?php echo ($this->router->fetch_class() == 'waste') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/waste/'.$id) ?>';">Waste
                    </li>
                    <li class="row <?php echo ($this->router->fetch_class() == 'feedback') ? "current" : "missing"; ?>"
                        id="link" onClick="javascript:window.location.href='<?php echo base_url('admin/audit_started/feedback/'.$id) ?>';">
                        Feedback
                    </li>
                </ol>
            </div>
        </div>
