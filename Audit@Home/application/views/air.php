<?php $this->load->view('header'); ?>

<?php $this->load->view('nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
      
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>

<br/> <br/>

  </div>

<div class="row ">
<div class="col-lg-10 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
            <div class="container">
                <?php echo form_open('Air/set', array('id'=>'air')); ?>
                    <div class="controls">
                        <div class="row">
                            
                            <div class="col-md-12">
                            <div class="form-group">
                            <p><strong>The ideal way to take Audit@Home is to observe practices at your home for a few days</br>
                               and then begin the survey. Here is a plan that you can follow to answer accurately:</strong></p>
                               <p>
                                <strong>STEP 1:</strong> For the first two days, observe the consumption of resources: Quantity of water</br>
                                being used in activities; management of food leftovers; amount of electricity consumed </br>
                                in the last months; usage of electrical appliances in the house, and so on.</p>

                                <p>
                                <strong>STEP 2:</strong> 
                                For the third and fourth days, record observations for each practice and try to </br>
                                find a pattern: Are we using more electricity these days as compared to, lets say, </br>
                                March? What is the average amount of water that gets consumed every day? Where do </br>
                                different types of waste go?
                                </p>

                                <p>
                                <strong>STEP 3:</strong> 
                                        On the fifth day, take the survey! Every question has 2-4 options: A, B, C and</br>
                                        D. Starting from the Air section, you will also keep a track of your score:</br>
                                        For every A: Give yourself 1 point</br>
                                        For every B: Give yourself 2 points</br>
                                        For every C: Give yourself 3 points</br>
                                        For every D (where applicable): Give yourself 4 points</br>
                                </p>
                                <p>
                                The last date to submit the survey is <strong>11 December 2020.</strong> All the best!</br>
                                For any queries, write to <strong>gsphomeaudit@gmail.com</strong> 
                                </p>


                            </div>
                            </div>


                          <div class="col-md-12">
                                <div class="form-group"> <label>1. How do you travel for everyday activities?</label> <br/>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',1)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Walking / Cycling</label><br>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',2)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Public transport (bus, taxi, etc.)</label><br>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',3)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Personal vehicle</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How many 2-wheeler and/or 4-wheeler vehicles does your family own?</label> <br/>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',1)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. None</label><br>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',2)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. One to two</label><br>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',3)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Three or more</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. Which fuel does the vehicle(s) use?</label> <br/>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',1)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Not applicable</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',2)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Electricity/CNG</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',3)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Petrol</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',4)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D. Diesel</label>                          
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. Does your vehicle(s) have PUC (Pollution Under Control) Certification?</label>
                                <p style="font-size: 14px; margin-left:25px;">Pollution Under Control is a mandatory certification issued by the transport department. It keeps a check on the emission levels of the vehicle. This can be obtained at authorised pollution checking centres, like petrol pumps. </p>
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',1)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Not applicable</label><br>
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',2)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes</label><br>
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',3)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. How would you rate the ventilation in your house?</label> <br/>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',1)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Good</label><br>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',2)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Average</label><br>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',3)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Poor</label>                          
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. Do you know about the air quality index (AQI)?</label>                                  
                                <p style="font-size: 14px; margin-left:25px;">Air quality index is a scale that tells the quality of air in a particular region. </p>
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',1)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes, I know about AQI and check it in newspaper/on the internet.</label><br>
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',2)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. I have heard about AQI but don't understand completely.</label><br>
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',3)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No, I don't know about AQI.</label>                          
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. Do you think that there is air pollution inside your home (indoor air pollution)?</label> <br/>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',1)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',2)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. No</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',3)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Can't say</label>                          
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <p>
                                    Do you know that you can check the air quality around you online in real-time? To find </br>
                                    out if there is an air quality monitoring station near you and the air quality, visit the</br>
                                    CPCB (Central Pollution Control Board) website: https://app.cpcbccr.com/AQI_India/</br>

                                    </p>
                                    <p style="font-size:12px;">Reading the Air Quality Index (AQI)</p>

                                    <div style="margin-right:19px;">
                                    <img src="<?php echo base_url(); ?>assets/img/pictureair.PNG" alt="AQI" style="margin-right:10px;">
                                    </div>

                                </div>


                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Air section is:</label> <input type="number" id="ascore" name="ascore" class="form-control" placeholder="Air section score" value="<?php if (isset($records['ascore'])) echo $records['ascore'];?>"> </div>
                            </div>


                            <div class="col-md-6"> <input type="button" id="btnAirPrevious" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div>
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


<!-- <script type="text/javascript">
    $(document).ready(function(){
      $("#previous").click(function(){
        alert('dd');
         window.location.href = "<?php echo base_url('general'); ?>";
      })  
    })
</script> -->

<script>

$(document).ready(function () {
        $('#btnAirPrevious').on('click', function (data) {
            var fd = $('#air').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('general'); ?>";
                }
            });
        });
    });
</script>

<script>
$("#foodnext").click(function(e){
  if($('input[name="Q1A1"]:checked').length == 0){
        alert("Q10 Is cooking part of any regular subjects or extracurricular activities?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
}
</script>