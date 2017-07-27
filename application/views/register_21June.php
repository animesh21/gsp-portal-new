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
  
    <style type="text/css">
    .wrapper { display: none; }
    </style>
    <script type="text/javascript">
    	$(document).ready(function(){
    			$('.wrapper').show();
    	});
    </script>
    <script type="text/javascript">
    window.onload = function(){
        Shadowbox.init();
    
};
</script>

    <style type="text/css">
    #loader { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1001; background: #FFFFFF; opacity: .7; }
    #loader img { position: absolute; top: 50%; left: 50%; margin-left: -32px; margin-top: -32px; }
    .placeholder { color: #aaa; }
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
          <p>The CSE's Green Schools Programme Audit 2017 will be open in July/August 2017. Please complete and submit this form to register for the GSP Audit 2017. On submission of registration form, you will receive an email with login credentials (username and password) for completing the Audit. Please save your login credentials to be used when Audit opens in 2017. There are no fees for participation.</p>    
      <p class="required">All fields marked * are required.</p>
     </div>
     <?php echo form_open('login/RegisterUser'); ?>
      <div class="form-group">
       <input type="text" name="name" class="form-control name placeholder" value="<?php echo set_value('name'); ?>" placeholder="Name of the School*">
      </div>
      <div class="form-group">
       <input type="text" name="address1" class="form-control address placeholder" value="<?php echo set_value('address1'); ?>" placeholder="Address Line 1*">
      </div>
      <div class="form-group">
       <input type="text" name="address2" class="form-control address placeholder" value="<?php echo set_value('address2'); ?>" placeholder="Address Line 2">
      </div>
      <div class="form-group">
       <div class="country">
        <input type="text" name="country" class="form-control" value="India" readonly="" placeholder="Country Name">
       </div>
       <div class="country state">
        <select name="state" id="state" class="form-control" onchange="statechange()">
          <option value="">Select State*</option>
          <option value="<?php echo set_value('state','Andaman &amp; Nicobar Islands'); ?>">Andaman &amp; Nicobar Islands</option>
          <option value="<?php echo set_value('state','Andhra Pradesh'); ?>">Andhra Pradesh</option>
          <option value="<?php echo set_value('state','Arunachal Pradesh'); ?>">Arunachal Pradesh</option>
          <option value="<?php echo set_value('state','Assam'); ?>">Assam</option>
          <option value="<?php echo set_value('state','Bihar'); ?>">Bihar</option>
          <option value="<?php echo set_value('state','Chandigarh'); ?>">Chandigarh</option>
          <option value="<?php echo set_value('state','Chhattisgarh'); ?>">Chhattisgarh</option>
          <option value="<?php echo set_value('state','Dadra & Nagar Haveli'); ?>">Dadra &amp; Nagar Haveli</option>
          <option value="<?php echo set_value('state','Daman & Diu'); ?>">Daman &amp; Diu</option>
          <option value="<?php echo set_value('state','Delhi'); ?>">Delhi</option>
          <option value="<?php echo set_value('state','Goa'); ?>">Goa</option>
          <option value="<?php echo set_value('state','Gujarat'); ?>">Gujarat</option>
          <option value="<?php echo set_value('state','Haryana'); ?>">Haryana</option>
          <option value="<?php echo set_value('state','Himachal Pradesh'); ?>">Himachal Pradesh</option>
          <option value="<?php echo set_value('state','Jammu and Kashmir'); ?>">Jammu and Kashmir</option>
          <option value="<?php echo set_value('state','Jharkhand'); ?>">Jharkhand</option>
          <option value="<?php echo set_value('state','Karnataka'); ?>">Karnataka</option>
          <option value="<?php echo set_value('state','Kerala'); ?>">Kerala</option>
          <option value="<?php echo set_value('state','Lakshadweep'); ?>">Lakshadweep</option>
          <option value="<?php echo set_value('state','Madhya Pradesh'); ?>">Madhya Pradesh</option>
          <option value="<?php echo set_value('state','Maharashtra'); ?>">Maharashtra</option>
          <option value="<?php echo set_value('state','Manipur'); ?>">Manipur</option>
          <option value="<?php echo set_value('state','Meghalaya'); ?>">Meghalaya</option>
          <option value="<?php echo set_value('state','Mizoram'); ?>">Mizoram</option>
          <option value="<?php echo set_value('state','Nagaland'); ?>">Nagaland</option>
          <option value="<?php echo set_value('state','Odisha(Orissa)'); ?>">Odisha(Orissa)</option>
          <option value="<?php echo set_value('state','Puducherry'); ?>">Puducherry</option>
          <option value="<?php echo set_value('state','Punjab'); ?>">Punjab</option>
          <option value="<?php echo set_value('state','Rajasthan'); ?>">Rajasthan</option>
          <option value="<?php echo set_value('state','Sikkim'); ?>">Sikkim</option>
          <option value="<?php echo set_value('state','Tamil Nadu'); ?>">Tamil Nadu</option>
          <option value="<?php echo set_value('state','Telangana'); ?>">Telangana</option>
          <option value="<?php echo set_value('state','Tripura'); ?>">Tripura</option>
          <option value="<?php echo set_value('state','Uttar Pradesh'); ?>">Uttar Pradesh</option>
          <option value="<?php echo set_value('state','Uttarakhand'); ?>">Uttarakhand</option>
          <option value="<?php echo set_value('state','West Bengal'); ?>">West Bengal</option>
          </select>
               </div>
  	 
  	  <div class="district state">
        <input type="text" name="district" value="<?php echo set_value('district'); ?>" class="form-control" placeholder="District"/>
         <!--select name="district" id="district" class="form-control">
         <option value="<?php echo set_value('district'); ?>">Select District*</option>
        </select-->
       </div>
  	 
  	 <!--
       <div class="district">
        <input type="text" name="district"  class="form-control" value="<?php echo set_value('address2'); ?>"  placeholder="District*">
       </div>
  	 -->
  	 
      </div>
      <div class="form-group">
       <div class="city">
        <input type="text" name="city" class="form-control placeholder" value="<?php echo set_value('city'); ?>" placeholder="City*">
       </div>
       <div class="code">
        <input type="text" name="pincode" id="pinc" class="form-control placeholder" value="<?php echo set_value('pincode'); ?>" placeholder="Pin Code*">
       </div>
      </div>
      <div class="form-group marginN">
       <div class="cName cCode">
        <input type="text" name="country_code" id="tisd" class="form-control placeholder" value="<?php echo set_value('country_code'); ?>" placeholder="Country Code">
       </div>
       <div class="cEmail iniCname">
        <input type="text" name="std" id="tstd" class="form-control placeholder" value="<?php echo set_value('std'); ?>" placeholder="STD">
       </div>
       <div class="mNumber">
        <input type="text" name="telephone" class="form-control placeholder" value="<?php echo set_value('telephone'); ?>" placeholder="Landline Number*">
       </div>
       <div class="mNumber ceCode">
        <input type="text" name="schoolemail" class="form-control placeholder" value="<?php echo set_value('schoolemail'); ?>" placeholder="School Email Address*">
       </div>
      </div>
      
      <!--        <div class="form-group wrap">
          	<input type="text" name="telephone_number" class="form-control number"  placeholder="Telephone Number*">
            <span>Landline Number with STD code</span>
          </div>-->
      <div class="form-2">
       <div class="form-group">
        <div class="pName">
         <input type="text" name="principle_name" class="form-control placeholder" value="<?php echo set_value('principle_name'); ?>" placeholder="Principal&#39;s Name*">
        </div>
        <div class="mNumber">
         <input type="text" name="mobile" id="pno" class="form-control placeholder" value="<?php echo set_value('mobile'); ?>" placeholder="Mobile Number*">
        </div>
       </div>
       <div class="form-group marginN">
        <div class="cName wrap">
         <input type="text" name="coname" class="form-control placeholder" value="<?php echo set_value('coname'); ?>" placeholder="GSP Coordinator&#39;s Name*">
         <span>Name of teacher responsible for GSP audit</span> </div>
        <div class="cEmail">
         <input type="text" name="coemail" class="form-control placeholder" value="<?php echo set_value('coemail'); ?>" placeholder="GSP Coordinator&#39;s Email*">
        </div>
        <div class="mNumber">
         <input type="text" name="comobile" id="gspmno" class="form-control placeholder" value="<?php echo set_value('comobile'); ?>" placeholder="Mobile Number*">
         
        </div>
       </div>
       <div class="form-2">
        
      </div>
      <div class="form-group text-center">
       <input type="submit" name="submit" value="Submit" class="btn btn-default">
      </div>
    <?php echo form_close(); ?>  
       </div>
     <noscript>
          &lt;p class="disabled"&gt;This form requires JavaScript for proper functioning. Please enable JavaScript or use another browser.&lt;/p&gt;
    </noscript>
   </div>
  </main>
<footer>
 <div class="container">
  <ul class="links">
   <li class="store"><a href="http://csestore.cse.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/store.jpg" class="img-responsive"></a></li>
   <li class="portal"><a href="http://www.indiaenvironmentportal.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/portal.jpg" class="img-responsive"></a></li>
   <li class="earth"><a href="http://www.downtoearth.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/earth.jpg" class="img-responsive"></a></li>
   <li class="rain"><a href="http://www.rainwaterharvesting.org/" target="_blank"><img src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/img/rain.jpg" class="img-responsive"></a></li>
   <li class="times"><a href="http://www.gobartimes.org/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/times.jpg" class="img-responsive"></a></li>
  </ul>
 </div>
 <div class="text-center">Copyright © 2017 Centre for Science and Environment</div>
</footer>
 


</body></html>