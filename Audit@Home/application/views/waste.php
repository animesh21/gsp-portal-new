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
                <?php echo form_open('Waste/set', array('id'=>'waste')); ?>
                    <div class="controls">
                        <div class="row">

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. Do you segregate solid waste into wet and dry?</label><br/>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',1)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Always</label><br>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',2)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Sometimes</label><br>
                                <input type="radio" id="Q1WS1" name="Q1WS1" value="<?php  echo set_value('Q1WS1',3)?>"<?php if (isset($records['Q1WS1'])) echo $records['Q1WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Rarely</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How many dustbins are there in your house to collect different types of waste?</label>
                                <br/>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',1)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. More than three</label><br>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',2)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Two to three</label><br>
                                <input type="radio" id="Q2WS1" name="Q2WS1" value="<?php  echo set_value('Q2WS1',3)?>"<?php if (isset($records['Q2WS1'])) echo $records['Q2WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. One common dustbin</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. How frequently do you or your parents get new mobile phones?</label> <br/> 
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',1)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Every 2-3 years</label><br>
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',2)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Every year</label><br>
                                <input type="radio" id="Q3WS1" name="Q3WS1" value="<?php  echo set_value('Q3WS1',3)?>"<?php if (isset($records['Q3WS1'])) echo $records['Q3WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Every six months</label>               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. How do you dispose of electronic waste like old phones, computers, etc? </label>
                                <br/>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',1)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Give to local scrap collector or authorized dealer</label><br>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',2)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Store items for later use</label><br>
                                <input type="radio" id="Q4WS1" name="Q4WS1" value="<?php  echo set_value('Q4WS1',3)?>"<?php if (isset($records['Q4WS1'])) echo $records['Q4WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Dump with the rest of the waste</label>                           
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. How do you dispose of sanitary waste?</label>
                                <br/>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',1)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Not applicable</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',2)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Give to authorised biomedical unit for processing</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',3)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Incinerate it</label><br>
                                <input type="radio" id="Q5WS1" name="Q5WS1" value="<?php  echo set_value('Q5WS1',4)?>"<?php if (isset($records['Q5WS1'])) echo $records['Q5WS1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D. Dump with the rest of the solid waste</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. Do you practise composting at home?</label>
                                <p style="font-size: 14px; margin-left:25px;">To know more about how composting can be done, you can visit https://www.greenschoolsprogramme.org/students/what-can-i-do/</p>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',1)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Yes</label><br>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',2)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. No</label><br>
                                <input type="radio" id="Q6WS1" name="Q6WS1" value="<?php  echo set_value('Q6WS1',3)?>"<?php if (isset($records['Q6WS1'])) echo $records['Q6WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Don't know about composting</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. Do you share and reuse books rather than buying every time?</label>
                                <br/>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',1)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Most times</label><br>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',2)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Sometimes</label><br>
                                <input type="radio" id="Q7WS1" name="Q7WS1" value="<?php  echo set_value('Q7WS1',3)?>"<?php if (isset($records['Q7WS1'])) echo $records['Q7WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Rarely</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>8. Where do you dispose of the single-use masks and gloves used to protect yourself from the coronavirus?</label>
                                <br/>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',1)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Separate/ Yellow bin for biomedical waste</label><br>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',2)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. With other solid waste</label><br>
                                <input type="radio" id="Q8WS1" name="Q8WS1" value="<?php  echo set_value('Q8WS1',3)?>"<?php if (isset($records['Q8WS1'])) echo $records['Q8WS1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Mixed bin</label>                     
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Waste section is:</label> <input id="mobile" type="text" name="wscore" class="form-control" placeholder="Waste section score"> </div>
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