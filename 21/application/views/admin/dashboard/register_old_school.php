<!DOCTYPE html>
<html>
<head>  

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration Form - Green Schools Programme Audit 2020</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">



<style type="text/css">

input[type="radio"] {position: relative; opacity: 1; width: 15px; height: 15px; display: inline-block; vertical-align: middle; left: -4px; top: -4px;}

  .wrapper{
    padding: 5px 25px;
  }

  .form-group .btn, .form-group .btn:hover, .form-group .btn:focus {
    background: #24a5a0;
    color: #fff;
    border: none;
    padding: 10px 25px;
    font-size: 15px;}

    .wrapper form{
      padding: 0px;
    }
    .container {
      width: 100%;
}
.wrapper form input[type='text']{
  width: 100%;
}
  
  </style>


</head>
<body>
  <div class="col-md-12">
    <div class="col-md-6">
 <?php if(!empty($record_old)) { ?>
<div class="container">
<div class="wrapper">
  <div class="top-area">
    <h2>Old School Registration Data</h2>   
  </div>
  <?php echo form_open('admin/audit_started/kvs_school_add', array('id' => 'registration-form')); ?>
  <div class="form-group">
     <strong>Select Franchise / Institution:</strong>
   <ul class="list-inline">
    <?php if($record_old[0]->partner_status==1) { ?>
   <li><input type="radio" name="partner_status" value="1" checked="checked" /> Church of South India</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="1" /> Church of South India</li> <?php
   } if($record_old[0]->partner_status==2) { ?>
   <li><input type="radio" name="partner_status" value="2" checked="checked" /> Jawahar Navodaya Vidyalaya</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="2" /> Jawahar Navodaya Vidyalaya</li> <?php
   } if($record_old[0]->partner_status==3) { ?>
   <li><input type="radio" name="partner_status" value="3" checked="checked" /> Kendriya Vidyalaya Sangathan (KVS)</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="3" /> Kendriya Vidyalaya Sangathan (KVS)</li> <?php
   } if($record_old[0]->partner_status==4) { ?>
   <li><input type="radio" name="partner_status" value="4" checked="checked" /> Montfortian Education Foundation</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="4" /> Montfortian Education Foundation</li> <?php
   } if($record_old[0]->partner_status==5) { ?>
   <li><input type="radio" name="partner_status" value="5" checked="checked" /> Mount Litera Zee Schools</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="5" /> Mount Litera Zee Schools</li> <?php
   } if($record_old[0]->partner_status==6) { ?>
   <li><input type="radio" name="partner_status" value="6" checked="checked" /> Satya Bharti Foundation</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="6" /> Satya Bharti Foundation</li> <?php
   } if($record_old[0]->partner_status==0) { ?>
   <li><input type="radio" name="partner_status" value="0" checked="checked" /> Not Applicable (NA)</li>
 <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="0" /> Not Applicable (NA)</li> <?php
   } ?>
   </ul>   
  </div>
  
<?php if($record_old[0]->partner_status==6) { ?>
  <div class="form-group satya">
     <strong>Please Select</strong>
   <ul class="list-inline">
    <?php if($record_old[0]->satya_foundation_status==7){ ?>
   <li><input type="radio" name="satya_foundation_status" value="7" checked="checked" /> Satya Bharti School</li>
 <?php } else{ ?>
    <li><input type="radio" name="satya_foundation_status" value="7" /> Satya Bharti School</li> <?php
   } if($record_old[0]->satya_foundation_status==8) { ?>
   <li><input type="radio" name="satya_foundation_status" value="8" checked="checked" /> BF Quality Support Programme</li>
 <?php } else{ ?>
    <li><input type="radio" name="satya_foundation_status" value="8" /> BF Quality Support Programme</li> <?php
   } ?>
   </ul>   
  </div>
<?php } ?>

  <div class="form-group">
  <input type="text" name="udise" class="schoolname name form-control" required="" value="<?php echo $record_old[0]->udise; ?>" placeholder="School U-Dise Code*" id="udise">
  <div id="udise_error"></div>
  </div>
  <div class="form-group">
  <input type="text" name="name" class="schoolname name form-control" required="" value="<?php echo $record_old[0]->name;?>" placeholder="Name of the School*" id="name">
  </div>
  <div class="form-group">
  <input type="text" name="address1" id="address1" class="form-control address" required="" value="<?php echo $record_old[0]->address1; ?>" placeholder="Address Line 1*">
  </div>
  <div class="form-group">
  <input type="text" name="address2" class="form-control address" value="<?php echo $record_old[0]->address2; ?>" placeholder="Address Line 2">
  </div>
  <div class="form-group">
  <div class="country" style="width: 58px;">
     <input type="text" name="country" class="form-control" value="India" readonly="" placeholder="Country Name">
  </div>
   <div class="country state" style="width: 205px;">
   <input type="text" name="state" class="form-control" required="" readonly="" value="<?php echo getStateById($record_old[0]->state); ?>" placeholder="Country Name">
   </div>
  <div class="district state" style="width: 208px; margin-right: 0px">
  <input type="text" name="district" class="form-control" required="" readonly="" value="<?php echo getdistrictById($record_old[0]->district); ?>" placeholder="Country Name">
  </div>  
  </div>
  <div class="form-group">
  <div class="city">
  <input type="text" name="city" class="form-control" required="" value="<?php echo $record_old[0]->city; ?>" placeholder="City*">
  </div>
  <div class="code">
  <input type="text" name="pincode" id="pinc" class="form-control" required="" value="<?php echo $record_old[0]->pincode; ?>" placeholder="Pin Code*" maxlength="6">
  </div>
  </div>
  <div class="form-group marginN">
  <div class="cName cCode">
  <input type="text" name="country_code" id="tisd" class="form-control" value="<?php echo set_value('country_code', '+91'); ?>" placeholder="Country Code" readonly>
  </div>
  <div class="cEmail iniCname">
  <input type="text" name="std" id="tstd" class="form-control" required="" value="<?php echo $record_old[0]->std; ?>" placeholder="STD">
  </div>
  <div class="mNumber">
  <input type="text" name="telephone" class="form-control" required="" value="<?php echo $record_old[0]->telephone; ?>" placeholder="Landline Number*">
  </div>
  <div class="mNumber ceCode" style="width: 225px;">
  <input type="text" name="schoolemail" class="form-control" required="" value="<?php echo $record_old[0]->schoolemail; ?>" placeholder="School Email Address*">
  </div>
  </div>
  <div class="form-2">
  <div class="form-group">
  <div class="pName">
  <input type="text" name="principle_name" class="form-control" required="" value="<?php echo $record_old[0]->principle_name; ?>" placeholder="Principal&#39;s Name*">
  </div>
  <div class="mNumber">
  <input type="text" name="mobile" id="pno" class="form-control" required="" value="<?php echo $record_old[0]->mobile; ?>" placeholder="Mobile Number*" maxlength="10">
  </div>
  </div>
  <div class="form-group marginN">
  <div class="cName wrap">
  <input type="text" name="coname" class="form-control" required="" value="<?php echo $record_old[0]->coname; ?>" placeholder="GSP Coordinator&#39;s Name*">
  <span>Name of teacher responsible for GSP audit</span></div>
  <div class="cEmail">
  <input type="text" name="coemail" class="form-control" required="" value="<?php echo $record_old[0]->coemail; ?>" placeholder="GSP Coordinator&#39;s Email*">
  </div>
  <div class="mNumber">
  <input type="text" name="comobile" id="gspmno" class="form-control" required="" value="<?php echo $record_old[0]->comobile; ?>" placeholder="Mobile Number*" maxlength="10">
  <input type="hidden" name="new_school_id" value="<?php echo $record_new[0]->id; ?>" />
  <input type="hidden" name="old_school_id" value="<?php echo $record_old[0]->id; ?>" />
  </div>
  </div>
  </div>
  <div class="form-group text-center">
  <input type="submit" name="submit" value="Submit" class="btn btn-default">
  </div>
    <?php echo form_close(); ?> </div>  
  </div>
<?php } else{ ?>
<div class="top-area">
    <h2>No Record Found</h2>   
  </div>
<?php } ?>
</div>

<div class="col-md-6">
 <?php if(!empty($record_new)) { ?>
<div class="container">
<div class="wrapper">
  <div class="top-area">
    <h2>New School Registration Data</h2>   
  </div>
  <?php echo form_open('', array('id' => 'registration-form')); ?>
  <div class="form-group">
     <strong>Select Franchise / Institution:</strong>
   <ul class="list-inline">
    <?php if($record_new[0]->partner_status==1) { ?>
   <li><input type="radio" name="partner_status" value="1" checked="checked" /> Church of South India</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="1" /> Church of South India</li> <?php
   } if($record_new[0]->partner_status==2) { ?>
   <li><input type="radio" name="partner_status" value="2" checked="checked" /> Jawahar Navodaya Vidyalaya</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="2" /> Jawahar Navodaya Vidyalaya</li> <?php
   } if($record_new[0]->partner_status==3) { ?>
   <li><input type="radio" name="partner_status" value="3" checked="checked" /> Kendriya Vidyalaya Sangathan (KVS)</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="3" /> Kendriya Vidyalaya Sangathan (KVS)</li> <?php
   } if($record_new[0]->partner_status==4) { ?>
   <li><input type="radio" name="partner_status" value="4" checked="checked" /> Montfortian Education Foundation</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="4" /> Montfortian Education Foundation</li> <?php
   } if($record_new[0]->partner_status==5) { ?>
   <li><input type="radio" name="partner_status" value="5" checked="checked" /> Mount Litera Zee Schools</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="5" /> Mount Litera Zee Schools</li> <?php
   } if($record_new[0]->partner_status==6) { ?>
   <li><input type="radio" name="partner_status" value="6" checked="checked" /> Satya Bharti Foundation</li>
   <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="6" /> Satya Bharti Foundation</li> <?php
   } if($record_new[0]->partner_status==0) { ?>
   <li><input type="radio" name="partner_status" value="0" checked="checked" /> Not Applicable (NA)</li>
 <?php } else{ ?>
    <li><input type="radio" name="partner_status" value="0" /> Not Applicable (NA)</li> <?php
   } ?>
   </ul>   
  </div>
  
<?php if($record_new[0]->partner_status==6) { ?>
  <div class="form-group satya">
     <strong>Please Select</strong>
   <ul class="list-inline">
    <?php if($record_new[0]->satya_foundation_status==7){ ?>
   <li><input type="radio" name="satya_foundation_status" value="7" checked="checked" /> Satya Bharti School</li>
 <?php } else{ ?>
    <li><input type="radio" name="satya_foundation_status" value="7" /> Satya Bharti School</li> <?php
   } if($record_new[0]->satya_foundation_status==8) { ?>
   <li><input type="radio" name="satya_foundation_status" value="8" checked="checked" /> BF Quality Support Programme</li>
 <?php } else{ ?>
    <li><input type="radio" name="satya_foundation_status" value="8" /> BF Quality Support Programme</li> <?php
   } ?>
   </ul>   
  </div>
<?php } ?>

  <div class="form-group">
  <input type="text" name="udise" class="schoolname name form-control" required="" value="<?php echo $record_new[0]->udise; ?>" placeholder="School U-Dise Code*" id="udise">
  <div id="udise_error"></div>
  </div>
  <div class="form-group">
  <input type="text" name="name" class="schoolname name form-control" required="" value="<?php echo $record_new[0]->name;?>" placeholder="Name of the School*" id="name">
  </div>
  <div class="form-group">
  <input type="text" name="address1" id="address1" class="form-control address" required="" value="<?php echo $record_new[0]->address1; ?>" placeholder="Address Line 1*">
  </div>
  <div class="form-group">
  <input type="text" name="address2" class="form-control address" value="<?php echo $record_new[0]->address2; ?>" placeholder="Address Line 2">
  </div>
  <div class="form-group">
  <div class="country" style="width: 58px;">
     <input type="text" name="country" class="form-control" value="India" readonly="" placeholder="Country Name">
  </div>
   <div class="country state" style="width: 205px;">
   <input type="text" name="state" class="form-control" required="" readonly="" value="<?php echo getStateById($record_new[0]->state); ?>" placeholder="Country Name">
   </div>
  <div class="district state" style="width: 208px; margin-right: 0px;">
  <input type="text" name="district" class="form-control" required="" readonly="" value="<?php echo getdistrictById($record_new[0]->district); ?>" placeholder="Country Name">
  </div>  
  </div>
  <div class="form-group">
  <div class="city">
  <input type="text" name="city" class="form-control" required="" value="<?php echo $record_new[0]->city; ?>" placeholder="City*">
  </div>
  <div class="code">
  <input type="text" name="pincode" id="pinc" class="form-control" required="" value="<?php echo $record_new[0]->pincode; ?>" placeholder="Pin Code*" maxlength="6">
  </div>
  </div>
  <div class="form-group marginN">
  <div class="cName cCode">
  <input type="text" name="country_code" id="tisd" class="form-control" value="<?php echo set_value('country_code', '+91'); ?>" placeholder="Country Code" readonly>
  </div>
  <div class="cEmail iniCname">
  <input type="text" name="std" id="tstd" class="form-control" required="" value="<?php echo $record_new[0]->std; ?>" placeholder="STD">
  </div>
  <div class="mNumber">
  <input type="text" name="telephone" class="form-control" required="" value="<?php echo $record_new[0]->telephone; ?>" placeholder="Landline Number*">
  </div>
  <div class="mNumber ceCode">
  <input type="text" name="schoolemail" class="form-control" required="" value="<?php echo $record_new[0]->schoolemail; ?>" placeholder="School Email Address*">
  </div>
  </div>
  <div class="form-2">
  <div class="form-group">
  <div class="pName">
  <input type="text" name="principle_name" class="form-control" required="" value="<?php echo $record_new[0]->principle_name; ?>" placeholder="Principal&#39;s Name*">
  </div>
  <div class="mNumber">
  <input type="text" name="mobile" id="pno" class="form-control" required="" value="<?php echo $record_new[0]->mobile; ?>" placeholder="Mobile Number*" maxlength="10">
  </div>
  </div>
  <div class="form-group marginN">
  <div class="cName wrap">
  <input type="text" name="coname" class="form-control" required="" value="<?php echo $record_new[0]->coname; ?>" placeholder="GSP Coordinator&#39;s Name*">
  <span>Name of teacher responsible for GSP audit</span></div>
  <div class="cEmail">
  <input type="text" name="coemail" class="form-control" required="" value="<?php echo $record_new[0]->coemail; ?>" placeholder="GSP Coordinator&#39;s Email*">
  </div>
  <div class="mNumber">
  <input type="text" name="comobile" id="gspmno" class="form-control" required="" value="<?php echo $record_new[0]->comobile; ?>" placeholder="Mobile Number*" maxlength="10">
  </div>
  </div>
  </div>
  <!-- <div class="form-group text-center">
  <input type="submit" name="submit" value="Submit" class="btn btn-default">
  </div> -->
    <!-- <?php //echo form_close(); ?> </div>   -->
  </div>
<?php } else{ ?>
<div class="top-area">
    <h2>No Record Found</h2>   
  </div>
<?php } ?>
</div>
</div>

  </body>
</html>

