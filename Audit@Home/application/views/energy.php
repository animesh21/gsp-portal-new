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
                <?php echo form_open('Energy/set', array('id'=>'energy')); ?>
                    <div class="controls">
                        <div class="row">

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. Do you get an electricity bill every month?</label> <br/>
                                <input type="radio" name="Q1E1" value="<?php  echo set_value('Q1E1',1)?>"<?php if (isset($records['Q1E1'])) echo $records['Q1E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes</label><br>
                                <input type="radio" name="Q1E1" value="<?php  echo set_value('Q1E1',2)?>"<?php if (isset($records['Q1E1'])) echo $records['Q1E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. No</label><br>
                                <input type="radio" name="Q1E1" value="<?php  echo set_value('Q1E1',3)?>"<?php if (isset($records['Q1E1'])) echo $records['Q1E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Not aware</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. Do you know how to read an electricity bill?</label> <br/>
                                <input type="radio" id="Q2E1" name="Q2E1" value="<?php  echo set_value('Q2E1',1)?>"<?php if (isset($records['Q2E1'])) echo $records['Q2E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes, I can read most of the information in a bill</label><br>
                                <input type="radio" id="Q2E1" name="Q2E1" value="<?php  echo set_value('Q2E1',2)?>"<?php if (isset($records['Q2E1'])) echo $records['Q2E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. I only know where to find the amount.</label><br>
                                <input type="radio" id="Q2E1" name="Q2E1" value="<?php  echo set_value('Q2E1',3)?>"<?php if (isset($records['Q2E1'])) echo $records['Q2E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No, I am not familiar with the information provided in a bill</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. If you compare your monthly electricity bill now to what it was before the lockdown, the amount has.</label> 
                                <p style="font-size: 14px; margin-left:25px;">Pollution Under Control is a mandatory certification issued by the transport department. It keeps a check on the emission levels of the vehicle. This can be obtained at authorised pollution checking centres, like petrol pumps.</p>
                                <input type="radio" id="Q3E1" name="Q3E1" value="<?php  echo set_value('Q3E1',1)?>"<?php if (isset($records['Q3E1'])) echo $records['Q3E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Reduced slightly</label><br>
                                <input type="radio" id="Q3E1" name="Q3E1" value="<?php  echo set_value('Q3E1',2)?>"<?php if (isset($records['Q3E1'])) echo $records['Q3E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Remained similar</label><br>
                                <input type="radio" id="Q3E1" name="Q3E1" value="<?php  echo set_value('Q3E1',3)?>"<?php if (isset($records['Q3E1'])) echo $records['Q3E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Increased</label>                      
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. Do you use renewable energy in any form in the house?</label> <br/>
                                <input type="radio" id="Q4E1" name="Q4E1" value="<?php  echo set_value('Q4E1',1)?>"<?php if (isset($records['Q4E1'])) echo $records['Q4E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes, in the form of water heaters, solar panels for electricity, or biogas</label><br>
                                <input type="radio" id="Q4E1" name="Q4E1" value="<?php  echo set_value('Q4E1',2)?>"<?php if (isset($records['Q4E1'])) echo $records['Q4E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes, in the form of solar-powered torches, toys, etc.</label><br>
                                <input type="radio" id="Q4E1" name="Q4E1" value="<?php  echo set_value('Q4E1',3)?>"<?php if (isset($records['Q4E1'])) echo $records['Q4E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No, I don't use renewable energy in any form</label>               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. How do you operate electronic appliances, such as computer, television, etc.?</label> <br/>
                                <input type="radio" id="Q5E1" name="Q5E1" value="<?php  echo set_value('Q5E1',1)?>"<?php if (isset($records['Q5E1'])) echo $records['Q5E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Switch off when not in use</label><br>
                                <input type="radio" id="Q5E1" name="Q5E1" value="<?php  echo set_value('Q5E1',2)?>"<?php if (isset($records['Q5E1'])) echo $records['Q5E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Keep on standby mode</label><br>
                                <input type="radio" id="Q5E1" name="Q5E1" value="<?php  echo set_value('Q5E1',3)?>"<?php if (isset($records['Q5E1'])) echo $records['Q5E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Keep on permanently to save time</label>                          
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. What type of lighting do you have at home?</label> 
                                <p style="font-size: 14px; margin-left:25px;">Tip: Choose the response that best captures the type of lighting if there are multiple types at your home.</p>
                                <input type="radio" id="Q6E1" name="Q6E1" value="<?php  echo set_value('Q6E1',1)?>"<?php if (isset($records['Q6E1'])) echo $records['Q6E1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. LED</label><br>
                                <input type="radio" id="Q6E1" name="Q6E1" value="<?php  echo set_value('Q6E1',2)?>"<?php if (isset($records['Q6E1'])) echo $records['Q6E1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. CFL</label><br>
                                <input type="radio" id="Q6E1" name="Q6E1" value="<?php  echo set_value('Q6E1',3)?>"<?php if (isset($records['Q6E1'])) echo $records['Q6E1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Incandescent bulbs</label>                      
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Energy section is:</label> <input type="number" id="escore" name="escore" class="form-control" placeholder="Energy section score" value="<?php if (isset($records['escore'])) echo $records['escore'];?>"> </div>
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
                    window.location.href = "<?php echo base_url('air'); ?>";
                }
            });
        });
    });
</script>