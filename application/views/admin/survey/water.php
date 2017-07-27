<?php $this->load->view('admin/survey/header');?>

<div class="container">
        <div class="row">
            <h2>WATER</h2>
            <br>
                To understand water, it is important to know the source of water in your school premise. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive. The questions below will help students to understand where their water is coming from – at a cost.
 
            <br><br>
            <b>The unit of measurement to be used in the Water section is Litre (L).</b>
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                               <?php echo form_open('land/set'); ?>
                                    <div class="form-group">
                                   		<div>
                                      <div class="form-group">
                                       <label> Task 1: Choose your Water Audit Team</label><br>
                                        Before you start, you must put together a team. An ideal team would consist of one teacher (Science or Social Science) to guide you during the audit. You would also require the help of the administrative staff of your school and other staff, such as the plumber, electrician and other maintenance staff. And, most importantly, five to 10 of your schoolmates
                                      </div>
                                      </div>
                                        <label for="username" class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
                                           <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q1W1S1" placeholder="<?php if(isset($data['Q1W1S1'])) echo $data['Q1W1S1']; ?>" value="<?php echo set_value('Q1W1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="Q1W1S2" placeholder="<?php if(isset($data['Q1W1S2'])) echo $data['Q1W1S2']; ?>" value="<?php echo set_value('Q1W1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1W2S1" placeholder="<?php if(isset($data['Q1W2S1'])) echo $data['Q1W2S1'] ?>" value="<?php echo set_value('Q1W2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1W2S2" placeholder="<?php if(isset($data['Q1W2S2'])) echo $data['Q1W2S2'] ?>" value="<?php echo set_value('Q1W2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1W3S1" placeholder="<?php if(isset($data['Q1W3S1'])) echo $data['Q1W3S1'] ?>" value="<?php echo set_value('Q1W3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1W3S2" placeholder="<?php if(isset($data['Q1W3S2'])) echo $data['Q1W3S2'] ?>" value="<?php echo set_value('Q1W3S2'); ?>" readonly/>
                                                </div>
                                            </div>
                                           
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
                                        <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q2W1S1" placeholder="<?php if(isset($data['Q2W1S1'])) echo $data['Q2W1S1'] ?>" value="<?php echo set_value('Q2W1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="text" name="Q2W1S2" placeholder="<?php if(isset($data['Q2W1S2'])) echo $data['Q2W1S2'] ?>" value="<?php echo set_value('Q2W1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W2S1" placeholder="<?php if(isset($data['Q2W2S1'])) echo $data['Q2W2S1'] ?>" value="<?php echo set_value('Q2W2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W2S2" placeholder="<?php if(isset($data['Q2W2S2'])) echo $data['Q2W2S2'] ?>" value="<?php echo set_value('Q2W2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W3S1" placeholder="<?php if(isset($data['Q2W3S1'])) echo $data['Q2W3S1'] ?>" value="<?php echo set_value('Q2W3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W3S2" placeholder="<?php if(isset($data['Q2W3S2'])) echo $data['Q2W3S2'] ?>" value="<?php echo set_value('Q2W3S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W4S1" placeholder="<?php if(isset($data['Q2W4S1'])) echo $data['Q2W4S1'] ?>" value="<?php echo set_value('Q2W4S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W4S2" placeholder="<?php if(isset($data['Q2W4S2'])) echo $data['Q2W4S2'] ?>" value="<?php echo set_value('Q2W4S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W5S1" placeholder="<?php if(isset($data['Q2W5S1'])) echo $data['Q2W5S1'] ?>" value="<?php echo set_value('Q2W5S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2W5S2" placeholder="<?php if(isset($data['Q2W5S2'])) echo $data['Q2W5S2'] ?>" value="<?php echo set_value('Q2W5S2'); ?>" readonly/>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Students (maximum of ten students can be part of the team):</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Name</label>
                                                <input class="form-control" id="ex1" type="text" name="Q3W1S1" placeholder="<?php if(isset($data['Q3W1S1'])) echo $data['Q3W1S1'] ?>"  value="<?php echo set_value('Q3W1S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Email id</label>
                                                <input class="form-control" id="ex2" type="text" name="Q3W1S2" placeholder="<?php if(isset($data['Q3W1S2'])) echo $data['Q3W1S2'] ?>" value="<?php echo set_value('Q3W1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Grade/Class</label>
                                                <input class="form-control" id="ex3" type="text" name="Q3W1S3" placeholder="<?php if(isset($data['Q3W1S3'])) echo $data['Q3W1S3'] ?>" value="<?php echo set_value('Q3W1S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W2S1" placeholder="<?php if(isset($data['Q3W2S1'])) echo $data['Q3W2S1'] ?>" value="<?php echo set_value('Q3W2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W2S2" placeholder="<?php if(isset($data['Q3W2S2'])) echo $data['Q3W2S2'] ?>" value="<?php echo set_value('Q3W2S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W2S3" placeholder="<?php if(isset($data['Q3W2S3'])) echo $data['Q3W2S3'] ?>" value="<?php echo set_value('Q3W2S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W3S1" placeholder="<?php if(isset($data['Q3W3S1'])) echo $data['Q3W3S1'] ?>" value="<?php echo set_value('Q3W3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W3S2" placeholder="<?php if(isset($data['Q3W3S2'])) echo $data['Q3W3S2'] ?>" value="<?php echo set_value('Q3W3S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W3S3" placeholder="<?php if(isset($data['Q3W3S3'])) echo $data['Q3W3S3'] ?>" value="<?php echo set_value('Q3W3S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W4S1" placeholder="<?php if(isset($data['Q3W4S1'])) echo $data['Q3W4S1'] ?>" value="<?php echo set_value('Q3W4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W4S2" placeholder="<?php if(isset($data['Q3W4S2'])) echo $data['Q3W4S2'] ?>" value="<?php echo set_value('Q3W4S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W4S3" placeholder="<?php if(isset($data['Q3W4S3'])) echo $data['Q3W4S3'] ?>" value="<?php echo set_value('Q3W4S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W5S1" placeholder="<?php if(isset($data['Q3W5S1'])) echo $data['Q3W5S1'] ?>" value="<?php echo set_value('Q3W5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W5S2" placeholder="<?php if(isset($data['Q3W5S2'])) echo $data['Q2W5S2'] ?>" value="<?php echo set_value('Q3W5S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W5S3" placeholder="<?php if(isset($data['Q3W5S3'])) echo $data['Q3W5S3'] ?>" value="<?php echo set_value('Q3W5S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W6S1" placeholder="<?php if(isset($data['Q3W6S1'])) echo $data['Q3W6S1'] ?>" value="<?php echo set_value('Q3W6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W6S2" placeholder="<?php if(isset($data['Q3W6S2'])) echo $data['Q3W6S2'] ?>" value="<?php echo set_value('Q3W6S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W6S3" placeholder="<?php if(isset($data['Q3W6S3'])) echo $data['Q3W6S3'] ?>" value="<?php echo set_value('Q3W6S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W7S1" placeholder="<?php if(isset($data['Q3W7S1'])) echo $data['Q3W7S1'] ?>" value="<?php echo set_value('Q3W7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W7S2" placeholder="<?php if(isset($data['Q3W7S2'])) echo $data['Q3W7S2'] ?>" value="<?php echo set_value('Q3W7S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W7S3" placeholder="<?php if(isset($data['Q3W7S3'])) echo $data['Q3W7S3'] ?>" value="<?php echo set_value('Q3W7S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W8S1" placeholder="<?php if(isset($data['Q3W8S1'])) echo $data['Q3W8S1'] ?>" value="<?php echo set_value('Q3W8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W8S2" placeholder="<?php if(isset($data['Q3W8S2'])) echo $data['Q3W8S2'] ?>" value="<?php echo set_value('Q3W8S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W8S3" placeholder="<?php if(isset($data['Q3W8S3'])) echo $data['Q3W8S3'] ?>" value="<?php echo set_value('Q3W8S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W9S1" placeholder="<?php if(isset($data['Q3W9S1'])) echo $data['Q3W9S1'] ?>" value="<?php echo set_value('Q3W9S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W9S2" placeholder="<?php if(isset($data['Q3W9S2'])) echo $data['Q3W9S2'] ?>" value="<?php echo set_value('Q3W9S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" name="Q3W9S3" placeholder="<?php if(isset($data['Q3W9S3'])) echo $data['Q3W9S3'] ?>" value="<?php echo set_value('Q3W9S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W10S1" placeholder="<?php if(isset($data['Q3W10S1'])) echo $data['Q3W10S1'] ?>" value="<?php echo set_value('Q3W10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W10S2" placeholder="<?php if(isset($data['Q3W10S2'])) echo $data['Q3W10S2'] ?>" value="<?php echo set_value('Q3W10S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W10S3" placeholder="<?php if(isset($data['Q3W10S3'])) echo $data['Q3W10S3'] ?>" value="<?php echo set_value('Q3W10S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3W11S1" placeholder="<?php if(isset($data['Q3W11S1'])) echo $data['Q3W11S1'] ?>" value="<?php echo set_value('Q3W11S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3W11S2" placeholder="<?php if(isset($data['Q3W11S2'])) echo $data['Q3W11S2'] ?>" value="<?php echo set_value('Q3W11S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3W11S3" placeholder="<?php if(isset($data['Q3W11S3'])) echo $data['Q3W11S3'] ?>" value="<?php echo set_value('Q3W10S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Task 2: How much water does your school use?</label><br>
                                        To find total consumption, monitor water consumption over a period of three working days, spread over one month and take the average.<br><br>

                                        For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all three total consumptions and then divide it with number of days of observation (that is three days). You will get an average per day water consumption.<br><br>

                                         <label>To collect data:</label> <br><br>

                                         <label>The bill method:</label> If the school’s water meter is monitored regularly—water bills by the government/municipality state the actual amount used—students can simply compile bills to assess total consumption.<br><br>

                                         <label>Monitoring overhead tanks:</label> If the bills are irregular and incorrect, then monitor the overhead tanks. Note the difference in levels of water in your overhead tank between the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check the water level when school is over by noting the difference in levels of water in your overhead tank between beginning and end of a day. Estimate consumption.<br><br>

                                         <label>Using the motor method:</label> If your school uses groundwater, take a bucket and know its measurement. Then switch on the underground-water pump. Let the water run out of the hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate the flow of water in litres per minute. Find out (from the gardener or other administrative staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor is run by how much water comes out from the hose pipe in a minute. The administrative staff and the plumber would be helpful in gauging the above. Conduct an audit for two or three days and then take an average to find the total consumption.<br><br>
                                    </div>
                                    <div class="form-group">
                                        <label> Calculate your school’s water consumption, per activity:</label><br>
                                        
                                         <label>To collect data:</label> <br><br>

                                         The school will use a glass (250 ml) for drinking during the audit period; they should know the volume of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.<br><br>

                                          To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please monitor over a period of 15 working days.<br><br>

                                         <label>Gardening:</label> To measure total water used in Gardening, first find out what is the method of watering garden.<br>

                                        *If water from water storage tank is used with hose pipes then measure the capacity of storage tank. Fill the storage tank before watering session. After watering the plants, measure the water left in the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank. <br>
                                        *If garden is watered manually with buckets then measure the capacity of the bucket and multiply by number of times the bucket is filled to water plants.<br>
                                        *If sprinkler irrigation is used to water garden, then measure the quantity of water released by the sprinklers and multiply it by the time the sprinkler system  works. <br>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="username" class="control-label">To calculate the Window-floor ratio of classrooms in your school, please fill the table below:</label>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label for="ex1">Activity</label>
                                                
                                              </div>
                                              <div class="col-xs-5">
                                                <label for="ex2"> Total Quantity (litres per day)</label>
                                               
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Drinking</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W1" placeholder="<?php if(isset($data['Q4W1'])) echo $data['Q4W1'] ?>" value="<?php echo set_value('Q4W1'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Toilet flushing</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W2" placeholder="<?php if(isset($data['Q4W2'])) echo $data['Q4W2'] ?>" value="<?php echo set_value('Q4W2'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Personal cleaning</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W3" placeholder="<?php if(isset($data['Q4W3'])) echo $data['Q4W3'] ?>" value="<?php echo set_value('Q4W3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Washing clothes</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W4" placeholder="<?php if(isset($data['Q4W4'])) echo $data['Q4W4'] ?>" value="<?php echo set_value('Q4W4'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Cooking</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W5" placeholder="<?php if(isset($data['Q4W5'])) echo $data['Q4W5'] ?>" value="<?php echo set_value('Q4W5'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Service Area on ground</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W6" placeholder="<?php if(isset($data['Q4W6'])) echo $data['Q4W6'] ?>" value="<?php echo set_value('Q4W6'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Roof and terrace area</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W7" placeholder="<?php if(isset($data['Q4W7'])) echo $data['Q4W7'] ?>" value="<?php echo set_value('Q4W7'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Cleaning Utensils</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W8" placeholder="<?php if(isset($data['Q4W8'])) echo $data['Q4W8'] ?>" value="<?php echo set_value('Q4W8'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Washing Vegetables</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W9" placeholder="<?php if(isset($data['Q4W9'])) echo $data['Q4W9'] ?>" value="<?php echo set_value('Q4W9'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Mopping floors</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W10" placeholder="<?php if(isset($data['Q4W10'])) echo $data['Q4W10'] ?>" value="<?php echo set_value('Q4W10'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Gardening</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W11" placeholder="<?php if(isset($data['Q4W11'])) echo $data['Q4W11'] ?>" value="<?php echo set_value('Q4W11'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label for="ex3">Total</label>
                                              </div>
                                              <div class="col-xs-5">
                                                 <input class="form-control" id="ex2" type="text" name="Q4W12" placeholder="<?php if(isset($data['Q4W12'])) echo $data['Q4W12'] ?>" value="<?php echo set_value('Q4W12'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Task 3: What Are The Sources, Supply and Storage of Water in your School?</label><br>
                                        To understand water, it is important to know the source of water in your school premises. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive.<br><br>
                                        The questions below will help students to understand where their water is coming from – at a cost.
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Where does the water your school uses, come from? (please tick the correct options):</label>
                                       <div class="form-group row">
                                           
                                            
                                              
                                              <input  type="checkbox" name="Q5W1" value="<?php echo set_value('Q5W1',1); ?>" <?php if(isset($data['Q5W1'])) echo set_checkbox('Q5W1', '1', true); ?> readonly/><label for="ex3" col-xs-4>Ground water</label>
                                              
                                              <input type="checkbox" name="Q5W2" value="<?php echo set_value('Q5W2',1); ?>" <?php if(isset($data['Q5W2'])) echo set_checkbox('Q5W2', '1', true); ?>  readonly/><label for="ex3">Surface water</label>
                                             
                                              <input type="checkbox" name="Q5W3" value="<?php echo set_value('Q5W3',1); ?>" <?php if(isset($data['Q5W3'])) echo set_checkbox('Q5W3', '1', true); ?> readonly/> <label for="ex3">Rain water</label>
                                              
                                              <input type="checkbox" name="Q5W4" value="<?php echo set_value('Q5W4',1); ?>" <?php if(isset($data['Q5W4'])) echo set_checkbox('Q5W4', '1', true); ?> readonly/><label for="ex3">Recycled waste water</label>
                                             
                                             
                                            </div>
                                            
                                            
                                      </div>
                                      <div class="form-group">
                                         <label for="username" class="control-label">Who supplies the water in your school? (please tick the correct options):</label><br>
                                              
                                              <input  type="checkbox" name="Q6W1" value="<?php echo set_value('Q6W1',1); ?>" <?php if(isset($data['Q6W1'])) echo set_checkbox('Q6W1', '1', true); ?> readonly/><label for="ex3" col-xs-4>Municipality</label>
                                              
                                              <input type="checkbox" name="Q6W2" value="<?php echo set_value('Q6W2',1); ?>" <?php if(isset($data['Q6W2'])) echo set_checkbox('Q6W2', '1', true); ?>  readonly/><label for="ex3">Panchayat</label>
                                             
                                              <input type="checkbox" name="Q6W3" value="<?php echo set_value('Q6W3',1); ?>" <?php if(isset($data['Q6W3'])) echo set_checkbox('Q6W3', '1', true); ?> readonly/> <label for="ex3">Rain Public Health Engineering Department (PHED)</label>
                                              
                                              <input type="checkbox" name="Q6W4" value="<?php echo set_value('Q6W4',1); ?>" <?php if(isset($data['Q6W4'])) echo set_checkbox('Q6W4', '1', true); ?> readonly/><label for="ex3">Private supplier</label>
                                             
                                             <input type="checkbox" name="Q6W5" value="<?php echo set_value('Q6W5',1); ?>" <?php if(isset($data['Q6W5'])) echo set_checkbox('Q6W5', '1', true); ?> readonly/><label for="ex3">School’s own supply (bore well, rainwater harvesting facility, etc)</label>
                                            </div>
                                            
                                            
                                      </div>
                                   <div class="form-group">
                                        <label for="username" class="control-label">Does your school get daily water supply?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q7W1" value="<?php echo set_value('Q7W1','Y')?>" <?php if(isset($data['Q7W1'])) echo $data['Q7W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q7W1" value="<?php echo set_value('Q7W1','N')?>" <?php if(isset($data['Q7W1'])) echo $data['Q7W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Task 4: What are the water conservation practices followed in your school?</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> What are the water conservation practices your school follows</label>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5" >
                                            
                                            Does your school have any water and sanitation policy?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S1" value="<?php echo set_value('Q8W1S1','Y')?>" <?php if(isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S1" value="<?php echo set_value('Q8W1S1','N')?>" <?php if(isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            If your school has an eco-club, do they have water component?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S2" value="<?php echo set_value('Q8W1S2','Y')?>" <?php if(isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S2" value="<?php echo set_value('Q8W1S2','N')?>" <?php if(isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Do all tanks in the school have float valves installed to stop overflow?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S3" value="<?php echo set_value('Q8W1S3','Y')?>" <?php if(isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S3" value="<?php echo set_value('Q8W1S3','N')?>" <?php if(isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Do the drinking water points have spill proof taps to check overflow?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S4" value="<?php echo set_value('Q8W1S4','Y')?>" <?php if(isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S4" value="<?php echo set_value('Q8W1S4','N')?>" <?php if(isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Does your school use appliances with a quick-wash setting?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S5" value="<?php echo set_value('Q8W1S5','Y')?>" <?php if(isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S5" value="<?php echo set_value('Q8W1S5','N')?>" <?php if(isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Are dual flush systems installed in the toilets?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S6" value="<?php echo set_value('Q8W1S6','Y')?>" <?php if(isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S6" value="<?php echo set_value('Q8W1S6','N')?>" <?php if(isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Does your school encourage bottled water for drinking water?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S7" value="<?php echo set_value('Q8W1S7','Y')?>" <?php if(isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S7" value="<?php echo set_value('Q8W1S7','N')?>" <?php if(isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Does your school grow local plant species which require limited amount of water to grow?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S8" value="<?php echo set_value('Q8W1S8','Y')?>" <?php if(isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S8" value="<?php echo set_value('Q8W1S8','N')?>" <?php if(isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-8">
                                            
                                            Has your school initiated any water conservation steps in the school or outside, in the past one year?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S9" value="<?php echo set_value('Q8W1S9','Y')?>" <?php if(isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S9" value="<?php echo set_value('Q8W1S9','N')?>" <?php if(isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Does your school use a drip or irrigation system?
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','Y')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','N')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label class="radio-inline col-xs-5">
                                            
                                            Any other step taken for water conservation? (if Yes, please specify)
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','Y')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','N')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                       <div class="form-group">
                                        <label>How many drinking water taps do you have?</label>
                                        <input class="form-control" type="text" name="Q9W1" placeholder="<?php if(isset($data['Q9W1'])) echo $data['Q9W1']; ?>" value="<?php echo set_value('Q9W1'); ?>" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label>How many hand pumps do you have?</label>
                                        <input class="form-control" type="text" name="Q10W1" placeholder="<?php if(isset($data['Q10W1'])) echo $data['Q10W1']; ?>" value="<?php echo set_value('Q10W1'); ?>" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label>How many ablution taps (taps used for washing hands only) do you have?</label>
                                        <input class="form-control" type="text" name="Q11W1" placeholder="<?php if(isset($data['Q11W1'])) echo $data['Q11W1']; ?>" value="<?php echo set_value('Q11W1'); ?>" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label>How many water closets (used for defecation and urination) do you have?</label>
                                        <input class="form-control" type="text" name="Q12W1" placeholder="<?php if(isset($data['Q12W1'])) echo $data['Q12W1']; ?>" value="<?php echo set_value('Q12W1'); ?>" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> How many water closets (used for defecation and urination) do you have?</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                              
                                                <label for="ex1">Number of toilets</label>
                                               </div>
                                              <div class="col-xs-2">
                                                <label for="ex1"> Girls</label>
                                                <input class="form-control" id="ex1" type="text" name="Q13W1S1" placeholder="<?php if(isset($data['Q13W1S1'])) echo $data['Q13W1S1'] ?>"  value="<?php echo set_value('Q13W1S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Boys</label>
                                                <input class="form-control" id="ex2" type="text" name="Q13W1S2" placeholder="<?php if(isset($data['Q13W1S2'])) echo $data['Q13W1S2'] ?>" value="<?php echo set_value('Q13W1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Common</label>
                                                <input class="form-control" id="ex3" type="text" name="Q13W1S3" placeholder="<?php if(isset($data['Q13W1S3'])) echo $data['Q13W1S3'] ?>" value="<?php echo set_value('Q13W1S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Total</label>
                                                <input class="form-control" id="ex3" type="text" name="Q13W1S4" placeholder="<?php if(isset($data['Q13W1S4'])) echo $data['Q13W1S4'] ?>" value="<?php echo set_value('Q13W1S4'); ?>" readonly readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label>How many urinals (strictly used for urination only) do you have?</label>
                                            <input class="form-control" type="text" name="Q14W1" placeholder="<?php if(isset($data['Q14W1'])) echo $data['Q14W1']; ?>" value="<?php echo set_value('Q14W1'); ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?</label>
                                            <input class="form-control" type="text" name="Q15W1" placeholder="<?php if(isset($data['Q15W1'])) echo $data['Q15W1']; ?>" value="<?php echo set_value('Q15W1'); ?>" readonly/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        Water supply and cleaning of toilets in your school:
                                      </div>
                                      <div class="form-group">
                                        <label for="username" class="control-label">Is there a water storage system in place to supply water in the toilets?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q16W1" value="<?php echo set_value('Q16W1','Y')?>" <?php if(isset($data['Q16W1'])) echo $data['Q16W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q16W1" value="<?php echo set_value('Q16W1','N')?>" <?php if(isset($data['Q16W1'])) echo $data['Q16W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="control-label">Is the water supply sufficient?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q17W1" value="<?php echo set_value('Q17W1','Y')?>" <?php if(isset($data['Q17W1'])) echo $data['Q17W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q17W1" value="<?php echo set_value('Q17W1','N')?>" <?php if(isset($data['Q17W1'])) echo $data['Q17W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="control-label">Are the toilets cleaned?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q18W1" value="<?php echo set_value('Q18W1','Y')?>" <?php if(isset($data['Q18W1'])) echo $data['Q18W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q18W1" value="<?php echo set_value('Q18W1','N')?>" <?php if(isset($data['Q18W1'])) echo $data['Q18W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label>Task 7: Does your school reuse/recycle waste water?</label><br>
Water recycling is the process of treating waste or used water, in order to upgrade its quality, so that it can be used again. When water, once used for a particular purpose, is put to use again, it is then being reused.
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Does your school treat wastewater?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q19W1" value="<?php echo set_value('Q19W1','Y')?>" <?php if(isset($data['Q19W1'])) echo $data['Q19W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q19W1" value="<?php echo set_value('Q19W1','N')?>" <?php if(isset($data['Q19W1'])) echo $data['Q19W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="control-label">Does your school reuse the treated wastewater?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q20W1" value="<?php echo set_value('Q20W1','Y')?>" <?php if(isset($data['Q20W1'])) echo $data['Q20W1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q20W1" value="<?php echo set_value('Q20W1','N')?>" <?php if(isset($data['Q20W1'])) echo $data['Q20W1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>
                                    <input type="submit" value="Submit"  readonly/> 
                                <?php echo form_close(); ?>
                                
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
