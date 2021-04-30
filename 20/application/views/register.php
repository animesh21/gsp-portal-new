<!DOCTYPE html>
<!-- saved from url=(0050)http://www.greenschoolsprogramme.org/registration/ -->
<html>
<head>  

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration Form - Green Schools Programme Audit 2020</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jquery.typeahead.css" rel="stylesheet">
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
<script type="text/javascript" src="captcha.js"></script>
<style type="text/css">
  
#success, #fail{
  display: none;

}

#message, #success, #fail{
  margin-top: 10px;
  margin-bottom: 10px;
}

p{
  display: inline;
  margin-right: 5px;
}
  
  
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
      udise: {
                            required: true,
                            //number:true
                        },
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
                        bharti:{
                            required: true
                        },
                        telephone: {
                            required: true
                        },
                        schoolemail: {
                            required: true,
                            email: true,
                            remote: {url: "<?php echo base_url(); ?>login/checkschoomail", async: false}
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
                            email: true,
                            remote: {url: "<?php echo base_url(); ?>login/checkschoomail", async: false}
                        },
                        comobile: {
                            required: true,
                            number: true,
                            maxlength: 10,
                            remote: {url: "<?php echo base_url(); ?>login/checkschoomail", async: false}
                        },
                        captcha: {
                            required: true
                        },
            partner_list: {
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
                            email: 'Enter valid Email Address',
                            remote: function ()
                            {
                                alert("This Email is already exsist please login !");
                                location.href="<?php echo base_url('login') ?>";
                            }
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
                            email: 'Enter a valid email address',
                            remote: function ()
                            {
                                alert("The co-ordinator's email already exists and your school need not be registered again.");
                                location.href="<?php echo base_url('login') ?>";
                            }
                        },
                        comobile: {
                            required: 'Please enter GSP Coordinator Mobile',
                            number: 'Enter valid Mobile Number',
                            maxlength: 'Enter valid Mobile Number',
                            remote: function ()
                            {
                                alert("This Mobile is already exsist please login !");
                                location.href="<?php echo base_url('login') ?>";
                            }
                        },
                        captcha: 'Please Enter Captcha',
            partner_list:'Please Select Partner List'
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
  <header> <a href="http://www.greenschoolsprogramme.org/"> <img src="<?php echo base_url(); ?>assets/img/logo.png" style="padding: 20px 1px 20px 1px;"></a> <img src="<?php echo base_url(); ?>assets/img/top-bnr.png" class="icon" style="height:110px;" > </header>
</div>
<main class="bdr">
<div class="container">
<div class="wrapper" style="display: block;">
  <div class="top-area">
    <h2>REGISTRATION Form</h2>
    <p>Please complete and submit this form to register for the CSE's Green Schools Programme Audit 2020. On submission of the registration form, you will receive an email with login credentials (username and password). Please save your login credentials to be used when you want to access the GSP Audit 2020. There is no fee for participation.</p>
    <strong>Please spell the name of your school correctly – the name provided by you will appear on the digital certificates and other documents. </strong>
    <p class="required">All fields marked * are required.</p>
  </div>
  <?php if ($this->session->flashdata('success')) { ?>
  <div class="top-area">
    <div class="alert alert-success"
                                 style="boredr-radius:0px !important; border: 1px solid green !important"> <a href="#" class="close" data-dismiss="alert" aria-label="close"><strong>&times;</strong></a> <?php echo $this->session->flashdata('success'); ?> </div>
  </div>
  <?php } ?>
  <?php
                    if ($this->session->flashdata('error')) {
                        echo '<h4 class="text-danger">' . $this->session->flashdata('error') . '</h4>';
                    }
                    ?>
  <?php echo validation_errors(); ?> <?php echo form_open('login/register', array('id' => 'registration-form')); ?>

  <div class="form-group">
     <strong>Select Franchise / Institution: <a class="tt" data-tooltip="If your school is a member of any of the following, please select the option or else, select 'Not Applicable (NA)'"><span class="badge" style="color:#FFFFFF;">?</span></a></strong>
   <ul class="list-inline">
     <li><input type="radio" name="partner_list" value="1" /> Church of South India</li>
   <li><input type="radio" name="partner_list" value="2" /> Jawahar Navodaya Vidyalaya</li>
   <li><input type="radio" name="partner_list" value="3" /> Kendriya Vidyalaya Sangathan (KVS)</li>
   <li><input type="radio" name="partner_list" value="4" /> Montfortian Education Foundation</li>
   <li><input type="radio" name="partner_list" value="5" /> Mount Litera Zee Schools</li>
   <li><input type="radio" name="partner_list" value="6" /> Satya Bharti Foundation</li>
   <li><input type="radio" name="partner_list" value="0" /> Not Applicable (NA)</li>
   </ul>
   <!-- <select class="schoolname name form-control  placeholder" name="partner_list" id="partner_list">
    <option value>Select Partner</option>
    <option value="0">If Your Are Not Partner Then Select This Option</option>
    <option value="1">Church of South India</option>
    <option value="2">Jawahar Navodaya Vidyalaya</option>
    <option value="3">Kendriya Vidyalaya Sangathan (KVS)</option>
    <option value="4">Montfortian Education Foundation</option>
    <option value="5">Mount Litera Zee Schools</option>
    <option value="6">Satya Bharti Foundation</option>
  </select>-->
  </div>


  <div class="form-group satya" style="display: none;">
     <strong>Please Select</strong>
   <ul class="list-inline">
     <li><input type="radio" name="bharti" value="7"/> Satya Bharti School</li>
   <li><input type="radio" name="bharti" value="8"/> BF Quality Support Programme </li>
   
   </ul>
   
  </div>



  <div class="form-group typeahead__container">
    <div class="typeahead__field">
      <div class="typeahead__query">
        <input type="text" name="udise" class="schoolname name form-control  placeholder"
                               value="<?php echo set_value('udise'); ?>" placeholder="School U-Dise Code*" id="udise">
                                                              <div id="udise_error"></div>
      </div>
    </div>
  </div>
  <div class="form-group typeahead__container">
    <div class="typeahead__field">
      <div class="typeahead__query">
        <input type="text" name="name" class="schoolname name form-control  placeholder"
                               value="<?php echo set_value('name'); ?>" placeholder="Name of the School*" id="name">
      </div>
    </div>
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
    <div class="country state"> <?php echo form_dropdown('state', $states, set_select('state'), array('class' => 'form-control', 'id' => 'country-select', 'onchange' => 'getCities();')); ?> </div>
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
                                   value="<?php echo set_value('pincode'); ?>" placeholder="Pin Code*" maxlength="6">
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
                                       value="<?php echo set_value('mobile'); ?>" placeholder="Mobile Number*" maxlength="10">
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
                                       value="<?php echo set_value('comobile'); ?>" placeholder="Mobile Number*" maxlength="10">
      </div>
    </div>
     
    <div class="form-group marginN">
    
       
        <input type="hidden" name="browser_details" id="browser_details" value="<?php echo $user['browser_details']; ?>" >
        <input type="hidden" name="browser_version" id="browser_version" value="<?php echo $user['browser_version']; ?>">
        <input type="hidden" name="user_ip_address" id="user_ip_address" value="<?php echo $user['user_ip_address']; ?>">  

    <div class="captcha" style="text-align: center; margin-top:50px" > 
      <p id="question"></p><input id="ans" type="text" required="true">
      <div id="message">Please verify.</div>
      <div id="success">Validation complete :</div>
      <div id="fail">Validation failed :</div>
    </div>      
         
    
 </div>
    <div class="form-group text-center">
     <input type="submit" name="submit" value="Submit" class="btn btn-default">
    </div>
    <?php echo form_close(); ?> </div>
  <noscript>
  &lt;p class="disabled"&gt;This form requires JavaScript for proper functioning. Please enable JavaScript
  or use another browser.&lt;/p&gt;
  </noscript>
</div>
</main>
<div id="myModal" class="modal fade in" role="dialog" style="display: block; padding-right: 17px; background:rgba(0, 0, 0, 0.57);">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#e86549; color:#FFFFFF;">
        <h4 class="modal-title" style="font-size: 20px">GSP Audit 2021</h4>
      </div>
      <div class="modal-body" style="font-size: 17px">
        <p>Registration for CSE's Green Schools Programme Network is now open. Please click on the button below to register.  On submission of the registration form, you will receive an email with login credentials (username and password). Please save your login credentials to be used when you want to participate in the GSP initiatives. There is no fee for participation.</p>
     <p class="text-center"><a href="http://www.greenschoolsprogramme.org/audit/21/register" target="_blank" class="btn btn-danger btn-block btn-lg" style="margin-top: 15px; margin-bottom: -20px;">Register for GSP Network</a></p>
      </div>
      
    </div>

  </div>

   </div>


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
                                src="<?php echo base_url(); ?>assets/img/rain.jpg"
                                class="img-responsive"></a></li>
      <li class="times"><a href="https://www.downtoearth.org.in/category/young" target="_blank"><img
                                src="<?php echo base_url(); ?>assets/img/times.jpg" class="img-responsive"></a></li>
    </ul>
  </div>
  <div class="text-center">Copyright &COPY; 2020 Centre for Science and Environment</div>
</footer>
</body>
</html>
<script src="<?php echo base_url(); ?>assets/js/jquery.typeahead.min.js"></script>
<script type="text/javascript">
$.typeahead({
             input: '.schoolname',
             minLength: 1,
             order: "asc",
             offset: true,
             hint: true,
             source: {
             data: [
            "KENDRIYA VIDYALAYA","Jawahar Navodaya Vidyalaya","Satya Bharti","Montfort","Zila Parishad","Mount Litera"
        ]
    },
    callback: {
        onInit: function (node) {
            console.log('Typeahead Initiated on ' + node.selector);
        }
    }
});
</script>
<style type="text/css">
/* ============= TOOL TIP ============= */

#captcha{

  margin-left: 56px;
}
  
  
.tt {display: inline-block; color: #fff; height: 27px;}
.tt:hover {color: #fff;}
[data-tooltip], .tooltip {position: relative; cursor: pointer;}
.badge {background-color: #9b9796; font-size: 19px; display: inline-block; width: 27px; height: 27px; margin-left: 5px; border-radius: 50%; text-align: center; vertical-align: top; line-height: 27px; font-family: 'Lato Bold', sans-serif; font-weight: normal;}

.tooltip {position: absolute; z-index: 1070; display: block; visibility: visible; font-size: 12px; line-height: 1.4; opacity: 0; filter: alpha(opacity=0);}
.tooltip.in {opacity: 0.9; filter: alpha(opacity=90);}
.tooltip.top {margin-top: -3px; padding: 5px 0;}
.tooltip.right {margin-left: 3px; padding: 0 5px;}
.tooltip.bottom {margin-top: 3px; padding: 5px 0;}
.tooltip.left {margin-left: -3px; padding: 0 5px;}
.tooltip-inner {max-width: 200px; padding: 3px 8px; color: #fff; text-align: center; text-decoration: none; background-color: #000; border-radius: 4px;}

/* tooltip arrow */
.tooltip-arrow {position: absolute; width: 0; height: 0; border-color: transparent; border-style: solid;}
.tooltip.top .tooltip-arrow {bottom: 0; left: 50%; margin-left: -5px; border-width: 5px 5px 0; border-top-color: #000;}
.tooltip.top-left .tooltip-arrow {bottom: 0; left: 5px; border-width: 5px 5px 0; border-top-color: #000;}
.tooltip.top-right .tooltip-arrow {bottom: 0; right: 5px; border-width: 5px 5px 0; border-top-color: #000;}
.tooltip.right .tooltip-arrow {top: 50%; left: 0; margin-top: -5px; border-width: 5px 5px 5px 0; border-right-color: #000;}
.tooltip.left .tooltip-arrow {top: 50%; right: 0; margin-top: -5px; border-width: 5px 0 5px 5px; border-left-color: #000;}
.tooltip.bottom .tooltip-arrow {top: 0; left: 50%; margin-left: -5px; border-width: 0 5px 5px; border-bottom-color: #000;}
.tooltip.bottom-left .tooltip-arrow {top: 0; left: 5px; border-width: 0 5px 5px; border-bottom-color: #000;}
.tooltip.bottom-right .tooltip-arrow {top: 0; right: 5px; border-width: 0 5px 5px; border-bottom-color: #000;}
/* Base styles for the entire tooltip */
[data-tooltip]:before, [data-tooltip]:after, .tooltip:before, .tooltip:after {position: absolute; visibility: hidden; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
opacity: 0; -webkit-transition: opacity 0.2s ease-in-out, visibility 0.2s ease-in-out, -webkit-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24); -moz-transition: opacity 0.2s ease-in-out, visibility 0.2s ease-in-out, -moz-transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24); transition: opacity 0.2s ease-in-out, visibility 0.2s ease-in-out, transform 0.2s cubic-bezier(0.71, 1.7, 0.77, 1.24); -webkit-transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); pointer-events: none;}

/* Show the entire tooltip on hover and focus */
[data-tooltip]:hover:before, [data-tooltip]:hover:after, [data-tooltip]:focus:before, [data-tooltip]:focus:after, .tooltip:hover:before, .tooltip:hover:after, .tooltip:focus:before, .tooltip:focus:after {visibility: visible; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
opacity: 1;}

/* Base styles for the tooltip's directional arrow */
.tooltip:before, [data-tooltip]:before {z-index: 1001; border: 6px solid transparent; background: transparent; content: "";}


/* ===== Base styles for the tooltip's content area ====== */
.tooltip:after, [data-tooltip]:after {font-family: 'Lato', sans-serif; font-weight: normal; color: #666666; font-size: 13px; line-height: 1.3; border-radius: 4px; border: 1px solid #999999; background-color: rgba(240, 240, 240, .95); z-index: 1000; padding: 8px; min-width: 400px; content: attr(data-tooltip);  }
</style>
  
  
  <script type="text/javascript">
  
  // $( "#registration-form" ).submit(function(){

  // validateCaptcha();

  // });



</script>



<script type="text/javascript">
  
 $("input[name='partner_list']").click(function(){

  var partner_id=$(this).val();

   if(partner_id=='6'){
    
    $('.satya').css("display","block");

      
   }else{

    $('.satya').css("display","none");
   }


 });


</script>
  
<!--   <script type="text/javascript">
    
    $(document).ready(function(){

      $("input[name='udise']").keyup(function(){

        var udise = $("input[name='udise']").val();

        if(isNaN(udise)){
          var error = "Please enter only numbers!"          
         
          $("#udise_error").html(error);          
          $("#udise_error").css('color', 'red');
          $("#udise_error").css('font-size', '15px');
          $("input[name='udise']").val('');          
           
          return false;
         
        }
        else{
          $("#udise_error").remove(error);
        }


      });
        

    });

  </script> -->
  
  <script type="text/javascript">
  
$(document).ready(function(){

  $('button[type=submit]').attr('disabled','disabled');

  var randomNum1;
  var randomNum2;

  //set the largeest number to display

  var maxNum = 20;
  var total;

  randomNum1 = Math.ceil(Math.random()*maxNum);
  randomNum2 = Math.ceil(Math.random()*maxNum);
  total =randomNum1 + randomNum2;

  $( "#question" ).prepend( randomNum1 + " + " + randomNum2 + "=" );

  // When users input the value

  $( "#ans" ).keyup(function() {

    var input = $(this).val();
    var slideSpeed = 200;

    $('#message').hide();

    if (input == total) {

      $('button[type=submit]').removeAttr('disabled');
      $('#success').slideDown(slideSpeed);
      $('#fail').slideUp(slideSpeed);

    }

    else {

      $('button[type=submit]').attr('disabled','disabled');
      $('#fail').slideDown(slideSpeed);
      $('#success').slideUp(slideSpeed);

    }

  });

//   // Wheen "reset button" click, generating new randomNum1 & randomNum2

 });

</script>
  
  
<script type="text/javascript">
  
  $("input[name='city']").keyup(function(){
     var fake = $("input[name='city']").val();
      if(fake==='New York' || fake==='new york' || fake==='New york' || fake==='new York' ){
         alert('.');
         $("input[name='city']").val('');
        return false;

      }
  });

</script>
