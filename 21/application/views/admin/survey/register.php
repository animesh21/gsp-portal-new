<!DOCTYPE html>
<!-- saved from url=(0050)http://www.greenschoolsprogramme.org/registration/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Registration Form - Green Schools Programme Audit 2016</title>
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
    </style>
</head>
<body>
<div id="loader"><img src="<?php echo base_url(); ?>assets/img/loader.gif" width="64" height="64"></div>
<div class="container">
    <header>
        <a href="http://www.greenschoolsprogramme.org/registration/">
            <img src="<?php echo base_url(); ?>assets/img/header-2.jpg" width="1028" height="117"></a>
        <img src="<?php echo base_url(); ?>assets/img/icons.png" width="605" height="94" class="icon">
    </header>
</div>
<main class="bdr">
    <div class="container">
        <div class="wrapper" style="display: block;">
            <div class="top-area">
                <h2>REGISTRATION Form</h2>
                <p>The CSE's Green Schools Programme Audit 2017 is now open.
                    Please complete and submit this form to register for the GSP Audit 2017.
                    On submission of registration form, you will receive an email with login
                    credentials (username and password) for completing the Audit. Please
                    save your login credentials to be used when you want to access the GSP
                    Audit 2017. There are no fees for participation.</p>
                <p class="required">All fields marked * are required.</p>
            </div>
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="top-area">
                    <div class="alert alert-success"
                         style="boredr-radius:0px !important; border: 1px solid green !important">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><strong>&times;</strong></a>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                </div>
            <?php } ?>
            <?php
            if ($this->session->flashdata('error')) {
                echo '<h4 class="text-danger">' . $this->session->flashdata('error') . '</h4>';
            }
            ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('login/register', array('id' => 'registration-form')); ?>
            <div class="form-group">
                <input type="text" name="name" class="form-control name placeholder"
                       value="<?php echo set_value('name'); ?>" placeholder="Name of the School*" id="name">
            </div>
            <div class="form-group">
                <input type="text" name="address1" id="address1" class="form-control address placeholder"
                       value="<?php echo set_value('address1'); ?>" placeholder="Address Line 1*">
            </div>
            <div class="form-group">
                <input type="text" name="address2" class="form-control address placeholder"
                       value="<?php echo set_value('address2'); ?>" placeholder="Address Line 2">
            </div>
            <div class="form-group">
                <div class="country">
                    <input type="text" name="country" class="form-control" value="India" readonly=""
                           placeholder="Country Name">
                </div>
                <div class="country state">
                    <?php echo form_dropdown('state', $states, set_select('state'), array('class' => 'form-control', 'id' => 'country-select', 'onchange' => 'getCities();')); ?>
                </div>

                <div class="district state">
                    <select class="form-control" id="city-select" name="district">
                        <option value="">Select District</option>
                    </select>
                </div>

                <!--
                      <div class="district">
                       <input type="text" name="district"  class="form-control" value="<?php echo set_value('address2'); ?>"  placeholder="District*">
                      </div>
                        -->

            </div>
            <div class="form-group">
                <div class="city">
                    <input type="text" name="city" class="form-control placeholder"
                           value="<?php echo set_value('city'); ?>" placeholder="City*">
                </div>
                <div class="code">
                    <input type="text" name="pincode" id="pinc" class="form-control placeholder"
                           value="<?php echo set_value('pincode'); ?>" placeholder="Pin Code*">
                </div>
            </div>
            <div class="form-group marginN">
                <div class="cName cCode">
                    <input type="text" name="country_code" id="tisd" class="form-control placeholder"
                           value="<?php echo set_value('country_code', '+91'); ?>" placeholder="Country Code" readonly>
                </div>
                <div class="cEmail iniCname">
                    <input type="text" name="std" id="tstd" class="form-control placeholder"
                           value="<?php echo set_value('std'); ?>" placeholder="STD">
                </div>
                <div class="mNumber">
                    <input type="text" name="telephone" class="form-control placeholder"
                           value="<?php echo set_value('telephone'); ?>" placeholder="Landline Number*">
                </div>
                <div class="mNumber ceCode">
                    <input type="text" name="schoolemail" class="form-control placeholder"
                           value="<?php echo set_value('schoolemail'); ?>" placeholder="School Email Address*">
                </div>
            </div>

            <!--        <div class="form-group wrap">
                      <input type="text" name="telephone_number" class="form-control number"  placeholder="Telephone Number*">
                  <span>Landline Number with STD code</span>
                </div>-->
            <div class="form-2">
                <div class="form-group">
                    <div class="pName">
                        <input type="text" name="principle_name" class="form-control placeholder"
                               value="<?php echo set_value('principle_name'); ?>" placeholder="Principal&#39;s Name*">
                    </div>
                    <div class="mNumber">
                        <input type="text" name="mobile" id="pno" class="form-control placeholder"
                               value="<?php echo set_value('mobile'); ?>" placeholder="Mobile Number*">
                    </div>
                </div>
                <div class="form-group marginN">
                    <div class="cName wrap">
                        <input type="text" name="coname" class="form-control placeholder"
                               value="<?php echo set_value('coname'); ?>" placeholder="GSP Coordinator&#39;s Name*">
                        <span>Name of teacher responsible for GSP audit</span></div>
                    <div class="cEmail">
                        <input type="text" name="coemail" class="form-control placeholder"
                               value="<?php echo set_value('coemail'); ?>" placeholder="GSP Coordinator&#39;s Email*">
                    </div>
                    <div class="mNumber">
                        <input type="text" name="comobile" id="gspmno" class="form-control placeholder"
                               value="<?php echo set_value('comobile'); ?>" placeholder="Mobile Number*">

                    </div>
                </div>
                <div class="form-2">

                </div>
                <div class="form-group marginN">
                    <div class="cEmail">
                        <input type="text" class="form-control" name="captcha" placeholder="Enter Captcha"/>
                    </div>
                    <?php echo $captcha_image; ?>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="submit" value="Submit" class="btn btn-default">
                </div>
                <?php echo form_close(); ?>
            </div>
            <noscript>
                &lt;p class="disabled"&gt;This form requires JavaScript for proper functioning. Please enable JavaScript
                or use another browser.&lt;/p&gt;
            </noscript>
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
    <div class="text-center">Copyright Â© 2017 Centre for Science and Environment</div>
</footer>
</body>
</html>