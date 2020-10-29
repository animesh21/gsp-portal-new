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
                <?php echo form_open('Food', array('id'=>'food')); ?>
                    <div class="controls">
                        <div class="row">

                          <div class="col-md-12">
                                <div class="form-group"> <label>1. For how many days do you buy groceries at a time? </label> <br/>
                                <input type="radio" id="Q1F1" name="Q1F" value="1">
                                <label> &nbsp; A. Less than 7 days</label><br>
                                <input type="radio" id="Q1F2" name="Q1F" value="2">
                                <label> &nbsp; B. 7 days</label><br>
                                <input type="radio" id="Q1F2" name="Q1F" value="3">
                                <label> &nbsp; C. More than 7 days</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2. How often do you read the food labels on packaged products, like biscuit, chocolate, etc. before consuming them?</label> <br/>
                                <input type="radio" id="Q2F1" name="Q2F" value="1">
                                <label> &nbsp; A. Most times</label><br>
                                <input type="radio" id="Q2F2" name="Q2F" value="2">
                                <label> &nbsp; B. Sometimes</label><br>
                                <input type="radio" id="Q2F3" name="Q2F" value="3">
                                <label> &nbsp; C. Rarely</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. What do you do with the left over food?</label> <br/> 
                                <input type="radio" id="Q3F1" name="Q3F" value="1">
                                <label> &nbsp; A. Repurpose it into cooking</label><br>
                                <input type="radio" id="Q3F2" name="Q3F" value="2">
                                <label> &nbsp; B. Give away to the needy</label><br>
                                <input type="radio" id="Q3F3" name="Q3F" value="3">
                                <label> &nbsp; C. Clean and compost it</label><br>
                                <input type="radio" id="Q3F4" name="Q3F" value="3">
                                <label> &nbsp; D. Throw it</label>                      
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group"> <label>4. Approximately, what percentage of the food in your house is packaged, processed food?</label> 
                                <p style="font-size: 14px; margin-left:25px;">Tip: Ultra processed and packaged foods (UPPF) are items that are usually high in fat, sugar or salt and have a longer shelf life, owing to the artificial ingredients used. For example, chips, instant noodles, energy drinks, etc.</p>
                                <input type="radio" id="Q4F1" name="Q4F" value="1">
                                <label> &nbsp; A. Less than 30 per cent</label><br>
                                <input type="radio" id="Q4F2" name="Q4F" value="2">
                                <label> &nbsp; B. 30 to 60 per cent</label><br>
                                <input type="radio" id="Q4F3" name="Q4F" value="3">
                                <label> &nbsp; C. More than 60 percent</label>                      
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. Which of the following constitutes the biggest part of your everyday diet?</label> <br/>
                                <input type="radio" id="Q5F1" name="Q5F" value="1">
                                <label> &nbsp; A. Traditional homemade food, like rajma chawal, rice, chapati</label><br>
                                <input type="radio" id="Q5F2" name="Q5F" value="2">
                                <label> &nbsp; B. Food ordered from outside like pizza, french fries, etc.</label><br>
                                <input type="radio" id="Q5F3" name="Q5F" value="3">
                                <label> &nbsp; C. Packaged food items, like instant noodles, bread</label>            
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>My score in the Food section is:</label> <input id="mobile" type="text" name="fscore" class="form-control" placeholder="Energy section score"> </div>
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