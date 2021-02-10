<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>

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
                <?php echo form_open('feb/WasteWoes/set', array('id'=>'wastewose')); ?>
                    <div class="controls">
                        <div class="row">
                            
                            <div class="col-md-12">
                            <div class="form-group">
                            <h1>WASTE WOES</h1>
                                <p>Do you know that globally more than 8 billion metric tons of plastic has been produced from 1950 to 2015? Of this, 80 per cent is now plastic waste! </p>
                                <p>While plastic waste is just one component of the waste generated, there are many other streams of waste, such as wet, dry (includes plastic), electronic, domestic hazardous, sanitary and biomedical. The biggest landfills in India have exceeded their capacity. They can’t accommodate more waste. Have you wondered where the waste that we generate every day will go?</p>
                                <p>Solid waste management (SWM) has become a big environmental issue for the country as our waste remains largely mismanaged. According to the CPCB (Central Pollution Control Board) Annual Report, 2016, more than 50 per cent of the waste from our homes ends up in landfills that are already beyond their storage capacity. Waste dumped in landfills then releases harmful greenhouse gases, such as methane and carbon dioxide. Moreover, open waste burning also directly contributes to harmful particulate matter and other toxins in the air. All these factors worsen global warming and eventually add to climate change.</p>
                                <p>As young environmentalists, it has now become crucial that we all understand the long-term impacts of poor waste management and start adopting sustainable practices to improve the SWM scenario at our homes. </p>
                                <p><strong>GSP Audit@Home: Waste Warriors</strong> is an environmental survey that will help you understand the current waste management practices in your household and what you can do to improve those. It is meant for students of Grades 5 to 10. Students from Grades 11 to 12 are also welcome to participate. You may take the help of your family members to do the survey.</p>
                                <p>The ideal way to take Audit@Home: Waste Warriors is to observe waste management practices at your home for a few days and then answer the questions. Here is a plan that you can follow to answer accurately:</p>
                                <p>
                                <strong>STEP 1:</strong> For the first two-three days, read up on the existing waste management issues in the country and in your state. Then, observe the practices in your house: How many dustbins are there in the house? Are all types of waste dumped into the same bin? How are old electronic items disposed of? What happens to the leftover food? Don’t forget to take notes while you observe. </p>

                                <p>
                                <strong>STEP 2:</strong> 
                                For the fourth and fifth days, document your observations and notes for each practice and try to summarise what is done with each type of waste at home.
                                </p>

                                <p>
                                <strong>STEP 3:</strong> 
                                Log in again and start answering the questions.
                                </p>
                                <p>
                                The last date to submit the survey is 26 February 2021. All the best! </br>
                                For any queries, please write to<strong> gsphomeaudit@gmail.com</strong> 
                                </p>


                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                            <h1>WASTE-O-PEDIA</h1>
                            </div>
                            </div>

                          <div class="col-md-12" id="chk">
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
                                <div class="form-group"> <label>In which bin will you put single-use masks and gloves at home?</label> <br/>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',1)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 1 ? "checked" : "" ?>>
                                <label> &nbsp;A.	Green for wet waste</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',2)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 2 ? "checked" : "" ?>>
                                <label> &nbsp;B.	Blue for dry waste</label><br>
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',3)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 3 ? "checked" : "" ?>>
                                <label> &nbsp;C.	Red for domestic hazardous waste</label><br>   
                                <input type="radio" id="Q7A1" name="Q7A1" value="<?php  echo set_value('Q7A1',4)?>"<?php if (isset($records['Q7A1'])) echo $records['Q7A1'] == 4 ? "checked" : "" ?>>
                                <label> &nbsp;D.	Mixed bin with all types of waste</label>                        
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




<script>

$(document).ready(function () {
        $('#btnAirPrevious').on('click', function (data) {
            var fd = $('#wastewose').serialize();
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

<!-- <script>
$("#foodnext").click(function(e){
  if($('input[name="Q1A1"]:checked').length == 0){
        alert("Q10 Is cooking part of any regular subjects or extracurricular activities?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
}
</script> -->

<script>
$(document).ready(function() {
  $("select.country").change(function() {
    var selectedCountry = $(".country option:selected").text();
    if (selectedCountry == "India") {
      alert("You have selected the language - Hindi");
    } else if (selectedCountry == "Nepal") {
      alert("You have selected the language - Nepali");
    }
  });
});

$(document).ready(function() {
  $('input[name=Q1A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: D. Pen \nExplanation: A pen contains bits of metal, plastic and ink. Therefore, it is difficult to separate the elements of a pen and recycle.');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q2A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: B. Walnut \nExplanation: Walnut releases a chemical that could be toxic for other plants and vegetables in the compost bin.');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q3A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: D. All of the above \nExplanation: Paper can be recycled to form a range of things. Some more examples are egg trays, paper towels and newspaper.');
    }
  });   
});


$(document).ready(function() {
  $('input[name=Q4A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: C. Pack the lunch in a reusable and durable box \nExplanation: A lunch box that can be reused for a long period of time ensures less waste. Packing too many non-native food items or using plastic generates more waste and pollution.');
    }
  });   
});


$(document).ready(function() {
  $('input[name=Q5A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: B. Methane and carbon dioxide \nExplanation: Methane and carbon amount to 90 per cent of the harmful gases released in landfills. In fact, methane is even more than 80 times more potent and dangerous than carbon dioxide.');
    }
  });   
});


$(document).ready(function() {
  $('input[name=Q6A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: A. Buy a big glass jar \nExplanation: A big glass jar can be reused for storage purposes later as well. Small packaging will generate more waste and add to the existing plastic and metal waste. ');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q7A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: B. Dry waste \nExplanation: Single-use masks and gloves from non-quarantined households—households with no infected person—should be stored separately for 72 hours, shredded and then disposed of with the rest of the dry waste. It can then be given to the waste collector.');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q8A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: D. Return to the store \nExplanation: It is best to buy electronic products with a buy-back policy. Then, the products can be given to the dealer in exchange for another product or money. The second best way is to give it to an authorised E-waste dealer.');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q9A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: B. Wet, dry, domestic hazardous \nExplanation: The household solid waste should be segregated into three categories: wet and/or biodegradable waste; dry and/or recyclable waste; and domestic hazardous waste. You can also read the Solid Waste Management Rules 2016 document for more information. ');
    }
  });   
});

$(document).ready(function() {
  $('input[name=Q10A1]').click(function(){
    if($(this).is(':checked')){
        alert('Correct Answer: D. All of the above \nExplanation: We can take many small steps at home and school to ensure that less waste is generated. Some more examples are not using disposable dishes; avoiding online shopping that involves heavy packaging; and using electronics till the end of their life cycle.');
    }
  });   
});

// Disable button code
$('input[type="radio"][name="Q1A1"]').click(function() {
  var radioName = "Q1A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q2A1"]').click(function() {
  var radioName = "Q2A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q3A1"]').click(function() {
  var radioName = "Q3A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q4A1"]').click(function() {
  var radioName = "Q4A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q5A1"]').click(function() {
  var radioName = "Q5A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q6A1"]').click(function() {
  var radioName = "Q6A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q7A1"]').click(function() {
  var radioName = "Q7A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q8A1"]').click(function() {
  var radioName = "Q8A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q9A1"]').click(function() {
  var radioName = "Q9A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});

$('input[type="radio"][name="Q10A1"]').click(function() {
  var radioName = "Q10A1"; 
  $('input[name="' + radioName + '"]:not(:checked)').attr("disabled", true); 
});


    
</script>

