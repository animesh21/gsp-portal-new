<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>
<?php $this->session->userdata('USERNAME');
 ?>
<div class="container"><div class=" text-center mt-5 ">
  
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 10%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
</div>

<br/> <br/>

</div>
<div class="row ">
  <div class="col-lg-10 mx-auto">
      <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">
              <div class="container">
                  <?php echo form_open('feb/general/set', array('id'=>'general')); ?>
                      <div class="controls">
                          <div class="row"> 

                           <div class="col-md-12">
                            <div class="form-group">
                            <h1>GENERAL</h1>

                            </div>
                            </div> 
                            
                              <div class="col-md-12">
                                  <div class="form-group"> <label>1. Name of the participant *</label> <input id="name" type="text" name="name" class="form-control" placeholder="Name of the participant" value="<?php if (isset($records['name'])) echo $records['name'];?>"/> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>2. Grade/Class *</label> <select id="form_need" class="form-control" name="grade" required="required">
                                          <option value="" selected disabled>--Select Grade--</option>


<option value="5" <?php if (isset($records['grade'])) echo $records['grade'] == '5' ? "selected" : ""; ?>>Grade 5</option>
<option value="6" <?php if (isset($records['grade'])) echo $records['grade'] == '6' ? "selected" : ""; ?>>Grade 6</option>
<option value="7" <?php if (isset($records['grade'])) echo $records['grade'] == '7' ? "selected" : ""; ?>>Grade 7</option>
<option value="8" <?php if (isset($records['grade'])) echo $records['grade'] == '8' ? "selected" : ""; ?>>Grade 8</option>
<option value="9" <?php if (isset($records['grade'])) echo $records['grade'] == '9' ? "selected" : ""; ?>>Grade 9</option>
<option value="10" <?php if (isset($records['grade'])) echo $records['grade'] == '10' ? "selected" : ""; ?>>Grade 10</option>
<option value="11" <?php if (isset($records['grade'])) echo $records['grade'] == '11' ? "selected" : ""; ?>>Grade 11</option>
<option value="12" <?php if (isset($records['grade'])) echo $records['grade'] == '12' ? "selected" : ""; ?>>Grade 12</option>

                                      </select> </div>
                              </div>                         
                           
                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_email">3. Gender *</label> <br/>
                                  <input type="radio" id="Female" name="gender" value="<?php echo set_value('gender', 'female') ?>" <?php if (isset($records['gender'])) echo $records['gender'] == 'female' ? "checked" : "" ?>/>
                                  <label for="male"> &nbsp; Female</label><br>
                                  <input type="radio" id="male" name="gender" value="<?php echo set_value('gender', 'male') ?>" <?php if (isset($records['gender'])) echo $records['gender'] == 'male' ? "checked" : "" ?>/>
                                  <label for="female"> &nbsp; Male</label><br>
                                  <input type="radio" id="other" name="gender" value="<?php echo set_value('gender', 'other') ?>" <?php if (isset($records['gender'])) echo $records['gender'] == 'other' ? "checked" : "" ?>/>
                                  <label for="other"> &nbsp; Other</label> 
                                  </div>
                              </div>
                               

                              <div class="col-md-12">
                                  <div class="form-group"> <label>4. Guardian's 10-digit mobile number:</label> <input id="mobile" type="text" name="mobile" class="form-control" placeholder="Guardian's 10-digit mobile number" value="<?php if (isset($records['mobile'])) echo $records['mobile'];?>"> </div>
                              </div>                              
                              <!-- <div class="col-md-12">
                                  <div class="form-group"> <label>5. Email *</label> <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email" value="<?php if (isset($records['email'])) echo $records['email'];?>"> </div>
                              </div> -->

                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_need">5. State *</label> <select id="state" name="state" class="form-control" required="required" data-error="State">
                                          <option value="" selected disabled>Select Your State</option>
                                          <option <?php echo set_value('state', 'Andhra Pradesh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Andhra Pradesh' ? "selected" : ""; ?>>Andhra Pradesh</option>
                                          <option <?php echo set_value('state', 'Arunachal Pradesh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Arunachal Pradesh' ? "selected" : ""; ?>>Arunachal Pradesh</option>
                                          <option <?php echo set_value('state', 'Andaman and Nicobar Islands'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Andaman and Nicobar Islands' ? "selected" : ""; ?>>Andaman and Nicobar Islands</option>
                                          <option <?php echo set_value('state', 'Assam'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Assam' ? "selected" : ""; ?>>Assam</option>
                                          <option <?php echo set_value('state', 'Bihar'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Bihar' ? "selected" : ""; ?>>Bihar</option>
                                          <option <?php echo set_value('state', 'Chandigarh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Chandigarh' ? "selected" : ""; ?>>Chandigarh</option>
                                          <option <?php echo set_value('state', 'Chhattisgarh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Chhattisgarh' ? "selected" : ""; ?>>Chhattisgarh</option>
                                          <option <?php echo set_value('state', 'Dadra & Nagar Haveli and Daman & Diu'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Dadra & Nagar Haveli and Daman & Diu' ? "selected" : ""; ?>>Dadra & Nagar Haveli and Daman & Diu</option>
                                          <option <?php echo set_value('state', 'Delhi'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Delhi' ? "selected" : ""; ?>>Delhi</option>
                                          <option <?php echo set_value('state', 'Goa'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Goa' ? "selected" : ""; ?>>Goa</option>
                                          <option <?php echo set_value('state', 'Gujarat'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Gujarat' ? "selected" : ""; ?>>Gujarat</option>
                                          <option <?php echo set_value('state', 'Haryana'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Haryana' ? "selected" : ""; ?>>Haryana</option>
                                          <option <?php echo set_value('state', 'Himachal Pradesh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Himachal Pradesh' ? "selected" : ""; ?>>Himachal Pradesh</option>
                                          <option <?php echo set_value('state', 'Jammu and Kashmir'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Jammu and Kashmir' ? "selected" : ""; ?>>Jammu and Kashmir</option>
                                          <option <?php echo set_value('state', 'Jharkhand'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Jharkhand' ? "selected" : ""; ?>>Jharkhand</option>
                                          <option <?php echo set_value('state', 'Karnataka'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Karnataka' ? "selected" : ""; ?>>Karnataka</option>
                                          <option <?php echo set_value('state', 'Kerala'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Kerala' ? "selected" : ""; ?>>Kerala</option>
                                          <option <?php echo set_value('state', 'Ladakh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Ladakh' ? "selected" : ""; ?>>Ladakh</option>
                                          <option <?php echo set_value('state', 'Lakshadweep'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Lakshadweep' ? "selected" : ""; ?>>Lakshadweep</option>
                                          <option <?php echo set_value('state', 'Madhya Pradesh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Madhya Pradesh' ? "selected" : ""; ?>>Madhya Pradesh</option>
                                          <option <?php echo set_value('state', 'Maharashtra'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Maharashtra' ? "selected" : ""; ?>>Maharashtra</option>
                                          <option <?php echo set_value('state', 'Manipur'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Manipur' ? "selected" : ""; ?>>Manipur</option>
                                          <option <?php echo set_value('state', 'Meghalaya'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Meghalaya' ? "selected" : ""; ?>>Meghalaya</option>
                                          <option <?php echo set_value('state', 'Mizoram'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Mizoram' ? "selected" : ""; ?>>Mizoram</option>
                                          <option <?php echo set_value('state', 'Nagaland'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Nagaland' ? "selected" : ""; ?>>Nagaland</option>
                                          <option <?php echo set_value('state', 'Odisha'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Odisha' ? "selected" : ""; ?>>Odisha</option>
                                          <option <?php echo set_value('state', 'Puducherry'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Puducherry' ? "selected" : ""; ?>>Puducherry</option>
                                          <option <?php echo set_value('state', 'Punjab'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Punjab' ? "selected" : ""; ?>>Punjab</option>
                                          <option <?php echo set_value('state', 'Rajasthan'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Rajasthan' ? "selected" : ""; ?>>Rajasthan</option>
                                          <option <?php echo set_value('state', 'Sikkim'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Sikkim' ? "selected" : ""; ?>>Sikkim</option>
                                          <option <?php echo set_value('state', 'Tamil Nadu'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Tamil Nadu' ? "selected" : ""; ?>>Tamil Nadu</option>
                                          <option <?php echo set_value('state', 'Telangana'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Telangana' ? "selected" : ""; ?>>Telangana</option>
                                          <option <?php echo set_value('state', 'Tripura'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Tripura' ? "selected" : ""; ?>>Tripura</option>
                                          <option <?php echo set_value('state', 'Uttar Pradesh'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Uttar Pradesh' ? "selected" : ""; ?>>Uttar Pradesh</option>
                                          <option <?php echo set_value('state', 'Uttarakhand'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'Uttarakhand' ? "selected" : ""; ?>>Uttarakhand</option>
                                          <option <?php echo set_value('state', 'West Bengal'); ?> <?php if (isset($records['state'])) echo $records['state'] == 'West Bengal' ? "selected" : ""; ?>>West Bengal</option>
                                      </select> </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group"> <label>6. District</label> <input id="district" type="text" name="district" class="form-control" placeholder="District" value="<?php if (isset($records['district'])) echo $records['district']; ?>"> </div>
                              </div>
                           
                              <div class="col-md-12">
                                  <div class="form-group"> <label>7. School Name</label> <input id="school_name" type="text" name="school_name" class="form-control" placeholder="School Name" value="<?php if (isset($records['school_name'])) echo $records['school_name']; ?>"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>8. School Address</label> <input id="school_address" type="text" name="school_address" class="form-control" placeholder="School Address" value="<?php if (isset($records['school_address'])) echo $records['school_address'];?>"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>9. Pincode of the school</label> <input id="pincode" type="text" name="pincode" class="form-control" placeholder=Pincode" value="<?php if (isset($records['pincode'])) echo $records['pincode'];?>"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_email">10. Did your school participate in the GSP Audit 2019?</label> <br/>
                                  <input type="radio"  name="participate" value="<?php echo set_value('participate', 'Y') ?>" <?php if (isset($records['participate'])) echo $records['participate'] == 'Y' ? "checked" : "" ?>/>
                                  <label for="male"> &nbsp; Yes</label><br>
                                  <input type="radio"  name="participate" value="<?php echo set_value('participate', 'N') ?>" <?php if (isset($records['participate'])) echo $records['participate'] == 'N' ? "checked" : "" ?>/>
                                  <label for="female"> &nbsp; No</label><br> 
                                  <input type="radio"  name="participate" value="<?php echo set_value('participate', 'No') ?>" <?php if (isset($records['participate'])) echo $records['participate'] == 'No' ? "checked" : "" ?>/>
                                  <label for="female"> &nbsp; Not sure</label><br> 
                                  </div>
                              </div>
                              
                               


                              <!-- <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div> -->
                              <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Next"> </div>
                              

                          
                         </div>
                      </div>
                  <?php echo form_close(); ?>
              </div>
          </div>
      </div> 
  </div> 
</div>


<style type="text/css">
.col-md-12{
margin-bottom: 20px;
}
</style>


<div id="background-wrap">
    <div class="x1">
        <div class="cloud"></div>
    </div>

    <div class="x2">
        <div class="cloud"></div>
    </div>

    <div class="x3">
        <div class="cloud"></div>
    </div>

    <div class="x4">
        <div class="cloud"></div>
    </div>

    <div class="x5">
        <div class="cloud"></div>
    </div>
</div>

<style type="text/css">
  body{
  padding: 0px 0;
  background: #c9dbe9;
  background: -webkit-linear-gradient(top, #c9dbe9 0%, #fff 100%);
  background: -linear-gradient(top, #c9dbe9 0%, #fff 100%);
  background: -moz-linear-gradient(top, #c9dbe9 0%, #fff 100%);
}

#background-wrap {
    bottom: 0;
  left: 0;
  padding-top: 50px;
  position: fixed;
  right: 0;
  top: 0;
  z-index: -1;
}

/* KEYFRAMES */

@-webkit-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

/* ANIMATIONS */

.x1 {
  -webkit-animation: animateCloud 35s linear infinite;
  -moz-animation: animateCloud 35s linear infinite;
  animation: animateCloud 35s linear infinite;
  
  -webkit-transform: scale(0.65);
  -moz-transform: scale(0.65);
  transform: scale(0.65);
}

.x2 {
  -webkit-animation: animateCloud 20s linear infinite;
  -moz-animation: animateCloud 20s linear infinite;
  animation: animateCloud 20s linear infinite;
  
  -webkit-transform: scale(0.3);
  -moz-transform: scale(0.3);
  transform: scale(0.3);
}

.x3 {
  -webkit-animation: animateCloud 30s linear infinite;
  -moz-animation: animateCloud 30s linear infinite;
  animation: animateCloud 30s linear infinite;
  
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  transform: scale(0.5);
}

.x4 {
  -webkit-animation: animateCloud 18s linear infinite;
  -moz-animation: animateCloud 18s linear infinite;
  animation: animateCloud 18s linear infinite;
  
  -webkit-transform: scale(0.4);
  -moz-transform: scale(0.4);
  transform: scale(0.4);
}

.x5 {
  -webkit-animation: animateCloud 25s linear infinite;
  -moz-animation: animateCloud 25s linear infinite;
  animation: animateCloud 25s linear infinite;
  
  -webkit-transform: scale(0.55);
  -moz-transform: scale(0.55);
  transform: scale(0.55);
}

/* OBJECTS */

 
.cloud {
  background: #fff;
  background: -moz-linear-gradient(top,  #fff 5%, #f1f1f1 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#fff), color-stop(100%,#f1f1f1));
  background: -webkit-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
  background: -o-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
  background: -ms-linear-gradient(top,  #fff 5%,#f1f1f1 100%);
  background: linear-gradient(top,  #fff 5%,#f1f1f1 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f1f1f1',GradientType=0 );
  
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  
  -webkit-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
  box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);

  height: 120px;
  position: relative;
  width: 350px;
}

.cloud:after, .cloud:before {
    background: #fff;
  content: '';
  position: absolute;
  z-indeX: -1;
}

.cloud:after {
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;

  height: 100px;
  left: 50px;
  top: -50px;
  width: 100px;
}

.cloud:before {
  -webkit-border-radius: 200px;
  -moz-border-radius: 200px;
  border-radius: 200px;

  width: 180px;
  height: 180px;
  right: 50px;
  top: -90px;
}
</style>