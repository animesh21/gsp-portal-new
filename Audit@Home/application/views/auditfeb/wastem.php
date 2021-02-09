<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
      
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 90%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>

<br/> <br/>

  </div>

<div class="row ">
<div class="col-lg-10 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
            <div class="container">
                <?php echo form_open('feb/Wastem/set', array('id'=>'waste')); ?>
                    <div class="controls">
                        <div class="row">

                            <div class="col-md-12">
                            <div class="form-group">
                            <h1>WASTE MANAGEMENT AT HOME</h1>
                                <p>The waste generated at our houses can be a resource or a menace depending on how we treat it. Separating different types of waste and treating each one appropriately can help greatly in reducing carbon emissions, plastic pollution and the load on landfills.</p>


                            </div>
                            </div>

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. Do you segregate solid waste into wet and dry?</label><br/>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',1)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	Rarely</label><br>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',2)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Sometimes</label><br>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',3)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	Always</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How many dustbins are there in your house to collect different types of waste?</label>
                                <br/>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',1)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	One common dustbin</label><br>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',2)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Two to three</label><br>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',3)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	More than three</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. How frequently do you or your parents get new mobile phones?</label> <br/> 
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',1)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Every six months</label><br>
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',2)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B. Every year</label><br>
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',3)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Every 2-3 years</label>               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. How do you dispose of electronic waste like old phones, computers, etc? </label>
                                <br/>
                                <div style="margin-right:19px;">
                                  <img src="<?php echo base_url(); ?>assets/img/picturewaste.PNG" alt="AQI" style="margin-right:10px;">
                                </div>
                                </br>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',1)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Dump with the rest of the waste</label><br>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',2)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B. Store items for later use</label><br>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',3)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Give to local scrap collector or authorized dealer</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. How do you dispose of sanitary waste?</label>
                                <br/>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',1)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Incinerate it</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',2)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Dump with the rest of the solid waste</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',3)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Not applicable</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',4)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	Give to authorised biomedical unit for processing</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. Do you practise composting at home?</label>
                                <p style="font-size: 14px; margin-left:25px;">To know more about how composting can be done, you can visit <a href="https://www.greenschoolsprogramme.org/students/what-can-i-do/" style="color:blue;">https://www.greenschoolsprogramme.org/students/what-can-i-do/</a> </p>
                                <br/>
                                <div style="margin-right:19px;">
                                  <img src="<?php echo base_url(); ?>assets/img/Picture1.png" alt="AQI" style="margin-right:10px;">
                                </div>
                                </br>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',1)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Don't know about composting</label><br>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',2)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	No</label><br>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',3)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Yes</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. Do you share and reuse books rather than buying every time?</label>
                                <br/>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',1)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Rarely</label><br>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',2)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Sometimes</label><br>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',3)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Most times</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. What do you do with the leftover food? </label>
                                <br/>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',1)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Throw it</label><br>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',2)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Clean and compost it</label><br>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',3)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Give away to the needy</label>  <br> 
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',4)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	Repurpose it into cooking</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>9. Where do you dispose of the single-use or reusable masks and gloves used to protect yourself from the coronavirus? </label>
                                <br/>
                                
                                <div style="margin-right:19px;">
                                  <img src="<?php echo base_url(); ?>assets/img/Picture2.png" alt="AQI" style="margin-right:10px;">
                                </div>
                                </br>
                                <input type="radio" id="Q9WS1" name="Q9WS1" value="<?php  echo set_value('Q9WS1',1)?>"<?php if (isset($records['Q9WS1'])) echo $records['Q9WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Mixed bin</label><br>
                                <input type="radio" id="Q9WS1" name="Q9WS1" value="<?php  echo set_value('Q9WS1',2)?>"<?php if (isset($records['Q9WS1'])) echo $records['Q9WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	With other dry waste</label><br>
                                <input type="radio" id="Q9WS1" name="Q9WS1" value="<?php  echo set_value('Q9WS1',3)?>"<?php if (isset($records['Q9WS1'])) echo $records['Q9WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Separate/ Yellow bin for biomedical waste</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>10. According to you, which of the following will be the most environmentally-friendly way of disposing of waste, such as dried leaves, fallen branches, etc?</label>
                                <br/>
                                <input type="radio" id="Q10WS1" name="Q10WS1" value="<?php  echo set_value('Q10WS1',1)?>"<?php if (isset($records['Q10WS1'])) echo $records['Q10WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Collect the waste and burn it</label><br>
                                <input type="radio" id="Q10WS1" name="Q10WS1" value="<?php  echo set_value('Q10WS1',2)?>"<?php if (isset($records['Q10WS1'])) echo $records['Q10WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Lay them on unpaved ground as mulch</label><br>
                                <input type="radio" id="Q10WS1" name="Q10WS1" value="<?php  echo set_value('Q10WS1',3)?>"<?php if (isset($records['Q10WS1'])) echo $records['Q10WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Collect the waste and compost it</label>                     
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Waste section is:</label> <input type="number" id="wascore" name="wascore" class="form-control" placeholder="Waste section score" value="<?php if (isset($records['wascore'])) echo $records['wascore'];?>"> </div>
                            </div> -->

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
            var fd = $('#waste').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('feb/WasteWoes'); ?>";
                }
            });
        });
    });
</script>