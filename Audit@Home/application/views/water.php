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

                <?php echo form_open('Water/set', array('id'=>'water')); ?>
                    <div class="controls">
                        <div class="row">

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. How much water do you consume per person per day on average? </label>
                                <p style="font-size: 14px; margin-left:25px;">You can find out per day water consumption by approximating how many buckets (of 20 Litre capacity for instance) of water you generally consume in a day. Take into account everyday activities like bathing, brushing, laundry, drinking, etc.</p>
                                <input type="radio" id="Q1W1" name="Q1W1" value="<?php  echo set_value('Q1W1',1)?>"<?php if (isset($records['Q1W1'])) echo $records['Q1W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. 100 to 150 Litre</label><br>
                                <input type="radio" id="Q1W1" name="Q1W1" value="<?php  echo set_value('Q1W1',2)?>"<?php if (isset($records['Q1W1'])) echo $records['Q1W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. 150 to 200 Litre</label><br>
                                <input type="radio" id="Q1W1" name="Q1W1" value="<?php  echo set_value('Q1W1',3)?>"<?php if (isset($records['Q1W1'])) echo $records['Q1W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Above 200 Litre</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How do you usually prefer to take a bath?</label>
                                <br/>
                                <input type="radio" id="Q2W1" name="Q2W1" value="<?php  echo set_value('Q2W1',1)?>"<?php if (isset($records['Q2W1'])) echo $records['Q2W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Bucket</label><br>
                                <input type="radio" id="Q2W1" name="Q2W1" value="<?php  echo set_value('Q2W1',2)?>"<?php if (isset($records['Q2W1'])) echo $records['Q2W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Shower</label><br>
                                <input type="radio" id="Q2W1" name="Q2W1" value="<?php  echo set_value('Q2W1',3)?>"<?php if (isset($records['Q2W1'])) echo $records['Q2W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Bathtub</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. Do you have an RO water purifier at home?</label> <br/> 
                                <input type="radio" id="Q3W1" name="Q3W1" value="<?php  echo set_value('Q3W1',1)?>"<?php if (isset($records['Q3W1'])) echo $records['Q3W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. No</label><br>
                                <input type="radio" id="Q3W1" name="Q3W1" value="<?php  echo set_value('Q3W1',2)?>"<?php if (isset($records['Q3W1'])) echo $records['Q3W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes</label>               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. What do you do with the excess water from the RO water purifier?</label>
                                <br/>
                                <input type="radio" id="Q4W1" name="Q4W1" value="<?php  echo set_value('Q4W1',1)?>"<?php if (isset($records['Q4W1'])) echo $records['Q4W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Not applicable</label><br>
                                <input type="radio" id="Q4W1" name="Q4W1" value="<?php  echo set_value('Q4W1',2)?>"<?php if (isset($records['Q4W1'])) echo $records['Q4W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Water is reused for other purposes like cleaning, flushing, etc.</label><br>
                                <input type="radio" id="Q4W1" name="Q4W1" value="<?php  echo set_value('Q4W1',3)?>"<?php if (isset($records['Q4W1'])) echo $records['Q4W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Water flows directly to the drain</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. Are there any water leakages in the washroom or other areas in your house?</label>
                                <br/>
                                <input type="radio" id="Q5W1" name="Q5W1" value="<?php  echo set_value('Q5W1',1)?>"<?php if (isset($records['Q5W1'])) echo $records['Q5W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. There are no leakages.</label><br>
                                <input type="radio" id="Q5W1" name="Q5W1" value="<?php  echo set_value('Q5W1',2)?>"<?php if (isset($records['Q5W1'])) echo $records['Q5W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes but the leakages are fixed regularly.</label><br>
                                <input type="radio" id="Q5W1" name="Q5W1" value="<?php  echo set_value('Q5W1',3)?>"<?php if (isset($records['Q5W1'])) echo $records['Q5W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Yes, there are some permanent leakages.</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. How many taps/ handpumps in your house have soap or handwash next to them?</label>
                                <br/>
                                <input type="radio" id="Q6W1" name="Q6W1" value="<?php  echo set_value('Q6W1',1)?>"<?php if (isset($records['Q6W1'])) echo $records['Q6W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. All of them</label><br>
                                <input type="radio" id="Q6W1" name="Q6W1" value="<?php  echo set_value('Q6W1',2)?>"<?php if (isset($records['Q6W1'])) echo $records['Q6W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Some of them</label><br>
                                <input type="radio" id="Q6W1" name="Q6W1" value="<?php  echo set_value('Q6W1',3)?>"<?php if (isset($records['Q6W1'])) echo $records['Q6W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. None of them</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. Does your house have a dual flush system in the toilet?</label>
                                <br/>
                                <input type="radio" id="Q7W1" name="Q7W1" value="<?php  echo set_value('Q7W1',1)?>"<?php if (isset($records['Q7W1'])) echo $records['Q7W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes</label><br>
                                <input type="radio" id="Q7W1" name="Q7W1" value="<?php  echo set_value('Q7W1',2)?>"<?php if (isset($records['Q7W1'])) echo $records['Q7W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Some of them</label><br>
                                <input type="radio" id="Q7W1" name="Q7W1" value="<?php  echo set_value('Q7W1',3)?>"<?php if (isset($records['Q7W1'])) echo $records['Q7W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>8. Have you noticed any rainwater harvesting (RWH) structures around your house or in the locality? Example: recharge trenches or storage containers.</label>
                                <br/>
                                <input type="radio" id="Q8W1" name="Q8W1" value="<?php  echo set_value('Q8W1',1)?>"<?php if (isset($records['Q8W1'])) echo $records['Q8W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes</label><br>
                                <input type="radio" id="Q8W1" name="Q8W1" value="<?php  echo set_value('Q8W1',2)?>"<?php if (isset($records['Q8W1'])) echo $records['Q8W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. No</label><br>
                                <input type="radio" id="Q8W1" name="Q8W1" value="<?php  echo set_value('Q8W1',3)?>"<?php if (isset($records['Q8W1'])) echo $records['Q8W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Not aware</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>9. How would you rate the quality and working conditions of these RWH structures?.</label>
                                <br/>
                                <input type="radio" id="Q9W1" name="Q9W1" value="<?php  echo set_value('Q9W1',1)?>"<?php if (isset($records['Q9W1'])) echo $records['Q9W1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Good</label><br>
                                <input type="radio" id="Q9W1" name="Q9W1" value="<?php  echo set_value('Q9W1',2)?>"<?php if (isset($records['Q9W1'])) echo $records['Q9W1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Average</label><br>
                                <input type="radio" id="Q9W1" name="Q9W1" value="<?php  echo set_value('Q9W1',3)?>"<?php if (isset($records['Q9W1'])) echo $records['Q9W1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Poor / Don't know</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Water section is: </label> <input id="mobile" type="text" name="wscore" class="form-control" placeholder="Water section score"> </div>
                            </div>

                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div>
                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Next"> </div>
                            

                        
                       </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div> 
<!-- </div> 
<iframe src="https://www.jigsawplanet.com/?rc=play&amp;pid=1ca359fc6f3f&amp;view=iframe" style="width:100%;height:600px" frameborder=0 allowfullscreen></iframe>
</div> -->


<style type="text/css">
.col-md-12{
margin-bottom: 20px;
}

body {
  background: #00b4ff;
  color: #333;
  font: 100% Lato, Arial, Sans Serif;
  height: 100vh;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

#background-wrap {
    bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: -1;
}

/* KEYFRAMES */

@-webkit-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-moz-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-webkit-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@-moz-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

/* ANIMATIONS */

.x1 {
    -webkit-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
  
  left: -5%;
  top: 5%;
  
  -webkit-transform: scale(0.6);
  -moz-transform: scale(0.6);
  transform: scale(0.6);
}

.x2 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
  -moz-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
  animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
  
  left: 5%;
  top: 80%;
  
  -webkit-transform: scale(0.4);
  -moz-transform: scale(0.4);
  transform: scale(0.4);
}

.x3 {
    -webkit-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
  
  left: 10%;
  top: 40%;
  
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  transform: scale(0.7);
}

.x4 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  
  left: 20%;
  top: 0;
  
  -webkit-transform: scale(0.3);
  -moz-transform: scale(0.3);
  transform: scale(0.3);
}

.x5 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  
  left: 30%;
  top: 50%;
  
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  transform: scale(0.5);
}

.x6 {
    -webkit-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
  
  left: 50%;
  top: 0;
  
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  transform: scale(0.8);
}

.x7 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
  
  left: 65%;
  top: 70%;
  
  -webkit-transform: scale(0.4);
  -moz-transform: scale(0.4);
  transform: scale(0.4);
}

.x8 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
  
  left: 80%;
  top: 10%;
  
  -webkit-transform: scale(0.3);
  -moz-transform: scale(0.3);
  transform: scale(0.3);
}

.x9 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
  
  left: 90%;
  top: 50%;
  
  -webkit-transform: scale(0.6);
  -moz-transform: scale(0.6);
  transform: scale(0.6);
}

.x10 {
    -webkit-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
  
  left: 80%;
  top: 80%;
  
  -webkit-transform: scale(0.3);
  -moz-transform: scale(0.3);
  transform: scale(0.3);
}

/* OBJECTS */

.bubble {
    -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  
    -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
  -moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
  
    height: 200px;
  position: absolute;
  width: 200px;
}

.bubble:after {
    background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 70%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,0.5)), color-stop(70%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* IE10+ */
    background: radial-gradient(ellipse at center,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  
    -webkit-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
  -moz-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
  box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
  
  content: "";
    height: 180px;
  left: 10px;
  position: absolute;
  width: 180px;
}

</style>

<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>