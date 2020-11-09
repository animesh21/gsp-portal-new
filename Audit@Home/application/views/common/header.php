<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo isset($title) ? $title : 'GSP-Community Portal'; ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel='shortcut icon' href='<?php echo base_url('assets/images/favicon.ico') ?>' type='image/x-icon' />
        <!-- css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

        <!-- commented datetimepicker -->
        <!-- <link href="<?php //echo base_url('assets/css/bootstrap-datetimepicker.min.css')     ?>" rel="stylesheet"> -->

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

<!--        <script type="text/javascript" src="<?php //echo base_url('assets/js/jQuery-custom-input-file.js')     ?>"></script>
<script type="text/javascript" src="<?php //echo base_url('assets/js/jquery.upload.js')     ?>"></script>-->

        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/script.js') ?>"></script>


        <!-- commented datetimepicker --> 
        <!-- <script src="<?php //echo base_url('assets/js/moment-with-locales.js')     ?>"></script>
        <script src="<?php //echo base_url('assets/js/bootstrap-datetimepicker.min.js')     ?>"></script> --> 

        <script>
            /* $(function() {
             $('#datetimepicker1').click(function() {
             //alert('kkkk');
             });
             $('#datetimepicker1').datetimepicker({format: 'YYYY-MM-DD'});
             }); */
        </script>
 
        <?php if (!empty($admin_logged_in)) { ?>
            <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/jquery.dataTables.min.css') ?>"> -->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin.css') ?>">
            <!-- <script src="<?php //echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script> -->


            <script type = 'text/javascript'>
                $(document).ready(function() {
                    $.fn.dataTable.ext.errMode = 'none';
                    $('#example_old').DataTable({
                        "bPaginate": false,
                        "info" : false,
                        "searching": true,
                        "order": [[ 7, "desc" ]],
                        "bAutoWidth": false
                    });
                    $('#activity_old').dataTable({
                        "bPaginate": false,
                        "info" : false,
                        "searching": true,
                        "order": [[ 5, "desc" ]],
                        "bAutoWidth": false,
                    });
                    $('#nomination_old').dataTable({
                        "bPaginate": false,
                        "info" : false,
                        "searching": true,
                        "order": [[ 4, "desc" ]],
                        "bAutoWidth": false
                    });
                    
                });
            </script>

        <?php } ?>

    </head>
    <body>
	<div id="gsp_link">
	<a href="http://www.greenschoolsprogramme.org" class="" target="_blank"><img src="<?php echo base_url('assets/images/GSP.png'); ?>" class="img-responsive" alt=""></a>
	</div>
        <div class="confirmBox hide">
            <a href="javascript: void(0);"><img src="<?php echo base_url('assets/images/cross-small.png'); ?>" alt=""></a>
            <h2>Please confirm your activity</h2>
            <p></p>
            <input type="submit" class="button" value="Ok" >
            <input type="submit" class="button" value="Cancel" >
        </div>
        <header class="no-border">
            <section class="container">
                <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" class="img-responsive"></a>
                <?php if (!empty($logged_in)) { ?>
                    <section class="loginDetail">
                        <?php
                        if ($logged_in['user_image'] == "") {
                            if ($logged_in['gender'] == 'Mr') {
                                $logged_in['user_image'] = 'boy_profile.png';
                            } else if ($logged_in['gender'] == 'Ms') {
                                $logged_in['user_image'] = 'girl_profile.png';
                            }
                        }
                        ?>
                        <figure><img src="<?php echo base_url("assets/profile") . '/' . $logged_in['user_image'] ?>" alt="" class="img-responsive"></figure>
                        <a href="javascript:void(0);" class="user"><?php echo $logged_in['first_name'] . '&nbsp;' . $logged_in['last_name']; ?></a>
                        <ul class="list-unstyled dropdown-menu">
                            <li><a href="<?php echo base_url('user/myprofile') ?>">Profile</a></li>
                            <li><a href="<?php echo base_url('user/change_password') ?>">Change Password</a></li>
                            <li><a href="<?php echo base_url('user/logout') ?>">Logout</a></li>
                        </ul>
                    </section>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <section class="menu">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">

                                    <li <?php if (strstr($this->uri->uri_string(), 'share')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('share') ?>">Share</a></li>
                                    <li <?php if (strstr($this->uri->uri_string(), 'buzz')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('community-buzz') ?>">Community Buzz</a></li>
                                    <li <?php if (strstr($this->uri->uri_string(), 'forum')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('forum') ?>">Forum</a></li>
                                    <li <?php if (strstr($this->uri->uri_string(), 'nominate')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('nominate') ?>">Nominate</a></li>
                                    <li <?php if (strstr($this->uri->uri_string(), 'leaderboard')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('leaderboard') ?>">Leaderboard</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </section>
                <?php } else { ?>
                    <ul class="list-unstyled icon-list">
                        <li><img src="<?php echo base_url('assets/images/air-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                        <li><img src="<?php echo base_url('assets/images/energy-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                        <li><img src="<?php echo base_url('assets/images/food-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                        <li><img src="<?php echo base_url('assets/images/land-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                        <li><img src="<?php echo base_url('assets/images/water-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                        <li><img src="<?php echo base_url('assets/images/waste-icon.png'); ?>" class="img-responsive" alt=""><span> </span></li>
                    </ul> 
                <?php } ?>
            </section>
            <?php if (!empty($admin_logged_in)) { ?>
                <div class="container-fluid nav_main">
                    <div class="container">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid"> 
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button aria-expanded="false" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav admin-nav"> 
                                        <li <?php if (strstr($this->uri->uri_string(), 'Student')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('admin/users/Student') ?>">Students </a></li>
                                        <!-- <li <?php if (strstr($this->uri->uri_string(), 'Teacher')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('admin/users/Teacher') ?>">Teachers </a></li> -->
                                        <li <?php if (strstr($this->uri->uri_string(), 'activity')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('admin/activity/all') ?>">activities </a></li>
                                        <li <?php if (strstr($this->uri->uri_string(), 'nominations')) { ?> class="active" <?php } ?>><a href="<?php echo base_url('admin/nominations') ?>">nominations </a></li>
                                        <li style="float:right"><a href="<?php echo base_url('admin/logout') ?>">logout </a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse --> 
                            </div>
                            <!-- /.container-fluid --> 
                        </nav>
                    </div>
                </div>
            <?php } ?>
        </header>
		
		

