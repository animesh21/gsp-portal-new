<?php $this->load->view('header'); ?>

<?php $this->load->view('nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
  
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 45%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>

<br/> <br/>

</div>
<div class="row ">
  <div class="col-lg-10 mx-auto">
      <div class="card mt-2 mx-auto p-4 bg-light">
          <div class="card-body bg-light">
              <div class="container">
                  <?php echo form_open('general', array('id'=>'general')); ?>
                      <div class="controls">
                          <div class="row">
                            
                              <div class="col-md-12">
                                  <div class="form-group"> <label>1. Name of the participant *</label> <input id="name" type="text" name="name" class="form-control" placeholder="Name of the participant *" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>2. Grade/Class *</label> <select id="form_need" class="form-control" name="grade" required="required">
                                          <option value="" selected disabled>--Select Grade--</option>
                                          <option name="grade" value="5">Grade 5</option>
                                          <option name="grade" value="6">Grade 6</option>
                                          <option name="grade" value="7">Grade 7</option>
                                          <option name="grade" value="8">Grade 8</option>
                                          <option name="grade" value="9">Grade 9</option>
                                          <option name="grade" value="10">Grade 10</option>
                                          <option name="grade" value="11">Grade 11</option>
                                          <option name="grade" value="12">Grade 12</option>
                                      </select> </div>
                              </div>                         
                           
                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_email">3. Gender *</label> <br/>
                                  <input type="radio" id="Female" name="gender" value="female">
                                  <label for="male"> &nbsp; Female</label><br>
                                  <input type="radio" id="male" name="gender" value="male">
                                  <label for="female"> &nbsp; Male</label><br>
                                  <input type="radio" id="other" name="gender" value="other">
                                  <label for="other"> &nbsp; Other</label> 
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>4. Guardian's 10-digit mobile number:</label> <input id="mobile" type="text" name="mobile" class="form-control" placeholder="Guardian's 10-digit mobile number" required="required"> </div>
                              </div>                              
                              <div class="col-md-12">
                                  <div class="form-group"> <label>5. Email *</label> <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>6. District</label> <input id="district" type="text" name="district" class="form-control" placeholder="District" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_need">7. State *</label> <select id="form_need" name="state" class="form-control" required="required" data-error="State">
                                          <option value="" selected disabled>Select Your State</option>
                                          <option>Delhi</option>
                                          <option>Uttar Pradesh</option>
                                          <option>Maharashtra</option>
                                          <option>Himachal Pradesh</option>
                                      </select> </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group"> <label>8. School Name</label> <input id="school_name" type="text" name="school_name" class="form-control" placeholder="School Name" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>9. School Address</label> <input id="school_address" type="text" name="school_address" class="form-control" placeholder="School Address" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label>10. Pincode of the school</label> <input id="pincode" type="text" name="pincode" class="form-control" placeholder="Pincode of the school" required="required"> </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group"> <label for="form_email">11. Did your school participate in the GSP Audit 2019?</label> <br/>
                                  <input type="radio" id="Female" name="participate " value="Y">
                                  <label for="male"> &nbsp; Yes</label><br>
                                  <input type="radio" id="male" name="participate " value="N">
                                  <label for="female"> &nbsp; No</label><br> 
                                  </div>
                              </div>
                              
                              
                              <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div>
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