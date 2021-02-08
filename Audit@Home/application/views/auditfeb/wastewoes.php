<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>

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
                <?php echo form_open('feb/WasteWoes/set', array('id'=>'Waste Woes')); ?>
                    <div class="controls">
                        <div class="row">
                            
                            <!-- <div class="col-md-12">
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
                            </div> -->


                          <div class="col-md-12">
                                <div class="form-group"> <label>1. Which of the following materials is difficult to recycle?</label> <br/>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',1)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Glass bottle</label><br>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',2)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Paper</label><br>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',3)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Metal can</label> <br>
                                <input type="radio" id="Q1A1" name="Q1A1" value="<?php  echo set_value('Q1A1',4)?>"<?php if (isset($records['Q1A1'])) echo $records['Q1A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D. Pen</label>                               
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>2.	All the following items are biodegradable, but one of them should not be put into a compost bin. Which one is it?</label> <br/>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',1)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A. Newspaper</label><br>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',2)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B. Walnut</label><br>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',3)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C. Plain rice</label><br>
                                <input type="radio" id="Q2A1" name="Q2A1" value="<?php  echo set_value('Q2A1',4)?>"<?php if (isset($records['Q2A1'])) echo $records['Q2A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D. Dead leaves</label>                             
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>3. Which product can paper be recycled into?</label> <br/>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',1)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	Cardboard</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',2)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B.	Magazine</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',3)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	bags</label><br>
                                <input type="radio" name="Q3A1" value="<?php  echo set_value('Q3A1',4)?>"<?php if (isset($records['Q3A1'])) echo $records['Q3A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D.	All of the above</label>                          
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>4. How can you pack yourself a waste-free lunch?</label><br/>
                                <!-- <p style="font-size: 14px; margin-left:25px;">Pollution Under Control is a mandatory certification issued by the transport department. It keeps a check on the emission levels of the vehicle. This can be obtained at authorised pollution checking centres, like petrol pumps. </p> -->
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',1)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	Carry a plastic water bottle</label><br>
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',2)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B.	Pack vegetables grown in different areas</label><br>
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',3)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	Pack the lunch in a reusable and durable box</label><br>  
                                <input type="radio" id="Q4A1" name="Q4A1" value="<?php  echo set_value('Q4A1',4)?>"<?php if (isset($records['Q4A1'])) echo $records['Q4A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D.	Pack many things to eat and drink</label>  
                             
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>5. Which two harmful gases are released in great quantities in landfills?</label> <br/>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',1)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	Methane and oxygen</label><br>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',2)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B.	Methane and carbon dioxide</label><br>
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',3)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	Nitrogen and oxygen</label><br>                          
                                <input type="radio" id="Q5A1" name="Q5A1" value="<?php  echo set_value('Q5A1',4)?>"<?php if (isset($records['Q5A1'])) echo $records['Q5A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D.	Oxygen and carbon dioxide</label>    
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>6. Sana wants to buy some juice for the house, and there are many options for her at the store. Which of the following will be the most sustainable option for her?</label>                                  
                                <!-- <p style="font-size: 14px; margin-left:25px;">Air quality index is a scale that tells the quality of air in a particular region. </p> -->
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',1)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp; A.	Buy a big glass jar</label><br>
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',2)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B.	Buy six single-serve plastic bottles</label><br>
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',3)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	Buy a big plastic bottle</label><br>  
                                <input type="radio" id="Q6A1" name="Q6A1" value="<?php  echo set_value('Q6A1',4)?>"<?php if (isset($records['Q6A1'])) echo $records['Q6A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D.	Buy six aluminium cans</label><br>                        
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"> <label>7. In which type of waste will you put single-use masks and gloves from a non-quarantined household?</label> <br/>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',1)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Wet waste</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',2)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp; B.	Dry waste</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',3)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp; C.	Sanitary waste</label><br>   
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',4)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp; D.	Mixed bin with all types of waste</label>                        
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> <label>8. Which is the best way to dispose of a mobile phone?</label> <br/>
                                <input type="radio" id="Q8A1" name="Q8A1" value="<?php  echo set_value('Q8A1',1)?>"<?php if (isset($records['Q8A1'])) echo $records['Q8A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Throw in the dry waste bin</label><br>
                                <input type="radio" id="Q8A1" name="Q8A1" value="<?php  echo set_value('Q8A1',2)?>"<?php if (isset($records['Q8A1'])) echo $records['Q8A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Put in the recycling bin</label><br>
                                <input type="radio" id="Q8A1" name="Q8A1" value="<?php  echo set_value('Q8A1',3)?>"<?php if (isset($records['Q8A1'])) echo $records['Q8A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Give to scrap collector</label><br>   
                                <input type="radio" id="Q8A1" name="Q8A1" value="<?php  echo set_value('Q8A1',4)?>"<?php if (isset($records['Q8A1'])) echo $records['Q8A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	Return to the store </label>                        
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> <label>9. Which are the three categories that we should segregate our household solid waste into?</label> <br/>
                                <input type="radio" id="Q9A1" name="Q9A1" value="<?php  echo set_value('Q9A1',1)?>"<?php if (isset($records['Q9A1'])) echo $records['Q9A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Wet, sanitary, electronic</label><br>
                                <input type="radio" id="Q9A1" name="Q9A1" value="<?php  echo set_value('Q9A1',2)?>"<?php if (isset($records['Q9A1'])) echo $records['Q9A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Wet, dry, domestic hazardous</label><br>
                                <input type="radio" id="Q9A1" name="Q9A1" value="<?php  echo set_value('Q9A1',3)?>"<?php if (isset($records['Q9A1'])) echo $records['Q9A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Wet, dry, biomedical</label><br>   
                                <input type="radio" id="Q9A1" name="Q9A1" value="<?php  echo set_value('Q9A1',4)?>"<?php if (isset($records['Q9A1'])) echo $records['Q9A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	Dry, sanitary, electronic</label>                        
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> <label>10. Which of the following is/are likely to ensure less waste generation?</label> <br/>
                                <input type="radio" id="Q10A1" name="Q10A1" value="<?php  echo set_value('Q10A1',1)?>"<?php if (isset($records['Q10A1'])) echo $records['Q10A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Carrying steel water bottles</label><br>
                                <input type="radio" id="Q10A1" name="Q10A1" value="<?php  echo set_value('Q10A1',2)?>"<?php if (isset($records['Q10A1'])) echo $records['Q10A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Reusing textbooks</label><br>
                                <input type="radio" id="Q10A1" name="Q10A1" value="<?php  echo set_value('Q10A1',3)?>"<?php if (isset($records['Q10A1'])) echo $records['Q10A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Measuring food wastage frequently</label><br>   
                                <input type="radio" id="Q10A1" name="Q10A1" value="<?php  echo set_value('Q10A1',4)?>"<?php if (isset($records['Q10A1'])) echo $records['Q10A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	All of the above</label>                        
                                </div>
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
                    window.location.href = "<?php echo base_url('feb/general'); ?>";
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