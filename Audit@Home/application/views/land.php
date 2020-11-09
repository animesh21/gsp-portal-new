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
                <?php echo form_open('Land/set', array('id'=>'land')); ?>
                    <div class="controls">
                        <div class="row">

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. Do you have indoor and/or outdoor plants at home? </label> <br/>
                                <input type="radio" id="Q1L1" name="Q1L1" value="<?php  echo set_value('Q1L1',1)?>"<?php if (isset($records['Q1L1'])) echo $records['Q1L1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes, we have indoor and outdoor plants.</label><br>
                                <input type="radio" id="Q1L1" name="Q1L1" value="<?php  echo set_value('Q1L1',2)?>"<?php if (isset($records['Q1L1'])) echo $records['Q1L1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes, we only have indoor/outdoor plants.</label><br>
                                <input type="radio" id="Q1L1" name="Q1L1" value="<?php  echo set_value('Q1L1',3)?>"<?php if (isset($records['Q1L1'])) echo $records['Q1L1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. No, we don't have plants at home.</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How many types of plants are there around you?</label>
                                <p style="font-size: 14px; margin-left:25px;">Please count the 'type', and not the 'number' of plants. For example, if there are 3 neem trees and 2 rose plants, it will be 2 types of plants. Choose 'not applicable' if there are no plants in and around your house.</p>
                                <input type="radio" id="Q2L1" name="Q2L1" value="<?php  echo set_value('Q2L1',1)?>"<?php if (isset($records['Q2L1'])) echo $records['Q2L1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. More than ten</label><br>
                                <input type="radio" id="Q2L1" name="Q2L1" value="<?php  echo set_value('Q2L1',2)?>"<?php if (isset($records['Q2L1'])) echo $records['Q2L1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Six to ten</label><br>
                                <input type="radio" id="Q2L1" name="Q2L1" value="<?php  echo set_value('Q2L1',3)?>"<?php if (isset($records['Q2L1'])) echo $records['Q2L1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. One to five</label><br>
                                <input type="radio" id="Q2L1" name="Q2L1" value="<?php  echo set_value('Q2L1',4)?>"<?php if (isset($records['Q2L1'])) echo $records['Q2L1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D. Not applicable</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. Do you use chemical pesticides to take care of the plants?</label> <br/> 
                                <input type="radio" id="Q3L1" name="Q3L1" value="<?php  echo set_value('Q3L1',1)?>"<?php if (isset($records['Q3L1'])) echo $records['Q3L1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. No</label><br>
                                <input type="radio" id="Q3L1" name="Q3L1" value="<?php  echo set_value('Q3L1',2)?>"<?php if (isset($records['Q3L1'])) echo $records['Q3L1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Yes</label><br>
                                <input type="radio" id="Q3L1" name="Q3L1" value="<?php  echo set_value('Q3L1',3)?>"<?php if (isset($records['Q3L1'])) echo $records['Q3L1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Not applicable</label>                
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Land section is:</label> <input id="mobile" type="text" name="lscore" class="form-control" placeholder="Energy section score"> </div>
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
                    window.location.href = "<?php echo base_url('food'); ?>";
                }
            });
        });
    });
</script>