<?php $this->load->view('admin/survey/header');?>

<div class="container">
        <div class="row">
            <h2>FOOD</h2>
            
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                 <?php echo form_open('food/set'); ?>
                                    <div class="form-group">
                                      <label> Task 1: Choose your Food Fudit Team </label>
                                        You would require at least 5 to 10 of your schoolmates in the Food audit team. The teacher co-ordinator may be a science or home science teacher or midday meal in-charge with an interest in food and nutrition. Do include the canteen in-charge in your audit team.
                                    </div>
                                    <div class="form-group">
                                   		
                                        <label for="username" class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
                                           <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q1F1S1" placeholder="<?php if(isset($data['Q1F1S1'])) echo $data['Q1F1S1']; ?>" value="<?php echo set_value('Q1F1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Fmail</label>
                                                    <input class="form-control" type="text" name="Q1F1S2" placeholder="<?php if(isset($data['Q1F1S2'])) echo $data['Q1F1S2']; ?>" value="<?php echo set_value('Q1F1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1F2S1" placeholder="<?php if(isset($data['Q1F2S1'])) echo $data['Q1F2S1'] ?>" value="<?php echo set_value('Q1F2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1F2S2" placeholder="<?php if(isset($data['Q1F2S2'])) echo $data['Q1F2S2'] ?>" value="<?php echo set_value('Q1F2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1F3S1" placeholder="<?php if(isset($data['Q1F3S1'])) echo $data['Q1F3S1'] ?>" value="<?php echo set_value('Q1F3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1F3S2" placeholder="<?php if(isset($data['Q1F3S2'])) echo $data['Q1F3S2'] ?>" value="<?php echo set_value('Q1F3S2'); ?>" readonly/>
                                                </div>
                                            </div>
                                           
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Fdministrative staff (maximum of five staff can be part of the team):</label>
                                        <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q2F1S1" placeholder="<?php if(isset($data['Q2F1S1'])) echo $data['Q2F1S1'] ?>" value="<?php echo set_value('Q2F1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Fmail Id</label>
                                                    <input class="form-control" type="text" name="Q2F1S2" placeholder="<?php if(isset($data['Q2F1S2'])) echo $data['Q2F1S2'] ?>" value="<?php echo set_value('Q2F1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F2S1" placeholder="<?php if(isset($data['Q2F2S1'])) echo $data['Q2F2S1'] ?>" value="<?php echo set_value('Q2F2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F2S2" placeholder="<?php if(isset($data['Q2F2S2'])) echo $data['Q2F2S2'] ?>" value="<?php echo set_value('Q2F2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F3S1" placeholder="<?php if(isset($data['Q2F3S1'])) echo $data['Q2F3S1'] ?>" value="<?php echo set_value('Q2F3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F3S2" placeholder="<?php if(isset($data['Q2F3S2'])) echo $data['Q2F3S2'] ?>" value="<?php echo set_value('Q2F3S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F4S1" placeholder="<?php if(isset($data['Q2F4S1'])) echo $data['Q2F4S1'] ?>" value="<?php echo set_value('Q2F4S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F4S2" placeholder="<?php if(isset($data['Q2F4S2'])) echo $data['Q2F4S2'] ?>" value="<?php echo set_value('Q2F4S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F5S1" placeholder="<?php if(isset($data['Q2F5S1'])) echo $data['Q2F5S1'] ?>" value="<?php echo set_value('Q2F5S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2F5S2" placeholder="<?php if(isset($data['Q2F5S2'])) echo $data['Q2F5S2'] ?>" value="<?php echo set_value('Q2F5S2'); ?>" readonly/>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Students (maximum of ten students can be part of the team):</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Name</label>
                                                <input class="form-control" id="ex1" type="text" name="Q3F1S1" placeholder="<?php if(isset($data['Q3F1S1'])) echo $data['Q3F1S1'] ?>"  value="<?php echo set_value('Q3F1S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Fmail id</label>
                                                <input class="form-control" id="ex2" type="text" name="Q3F1S2" placeholder="<?php if(isset($data['Q3F1S2'])) echo $data['Q3F1S2'] ?>" value="<?php echo set_value('Q3F1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Grade/Class</label>
                                                <input class="form-control" id="ex3" type="text" name="Q3F1S3" placeholder="<?php if(isset($data['Q3F1S3'])) echo $data['Q3F1S3'] ?>" value="<?php echo set_value('Q3F1S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F2S1" placeholder="<?php if(isset($data['Q3F2S1'])) echo $data['Q3F2S1'] ?>" value="<?php echo set_value('Q3F2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F2S2" placeholder="<?php if(isset($data['Q3F2S2'])) echo $data['Q3F2S2'] ?>" value="<?php echo set_value('Q3F2S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F2S3" placeholder="<?php if(isset($data['Q3F2S3'])) echo $data['Q3F2S3'] ?>" value="<?php echo set_value('Q3F2S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F3S1" placeholder="<?php if(isset($data['Q3F3S1'])) echo $data['Q3F3S1'] ?>" value="<?php echo set_value('Q3F3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F3S2" placeholder="<?php if(isset($data['Q3F3S2'])) echo $data['Q3F3S2'] ?>" value="<?php echo set_value('Q3F3S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F3S3" placeholder="<?php if(isset($data['Q3F3S3'])) echo $data['Q3F3S3'] ?>" value="<?php echo set_value('Q3F3S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F4S1" placeholder="<?php if(isset($data['Q3F4S1'])) echo $data['Q3F4S1'] ?>" value="<?php echo set_value('Q3F4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F4S2" placeholder="<?php if(isset($data['Q3F4S2'])) echo $data['Q3F4S2'] ?>" value="<?php echo set_value('Q3F4S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F4S3" placeholder="<?php if(isset($data['Q3F4S3'])) echo $data['Q3F4S3'] ?>" value="<?php echo set_value('Q3F4S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F5S1" placeholder="<?php if(isset($data['Q3F5S1'])) echo $data['Q3F5S1'] ?>" value="<?php echo set_value('Q3F5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F5S2" placeholder="<?php if(isset($data['Q3F5S2'])) echo $data['Q2F5S2'] ?>" value="<?php echo set_value('Q3F5S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F5S3" placeholder="<?php if(isset($data['Q3F5S3'])) echo $data['Q3F5S3'] ?>" value="<?php echo set_value('Q3F5S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F6S1" placeholder="<?php if(isset($data['Q3F6S1'])) echo $data['Q3F6S1'] ?>" value="<?php echo set_value('Q3F6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F6S2" placeholder="<?php if(isset($data['Q3F6S2'])) echo $data['Q3F6S2'] ?>" value="<?php echo set_value('Q3F6S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F6S3" placeholder="<?php if(isset($data['Q3F6S3'])) echo $data['Q3F6S3'] ?>" value="<?php echo set_value('Q3F6S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F7S1" placeholder="<?php if(isset($data['Q3F7S1'])) echo $data['Q3F7S1'] ?>" value="<?php echo set_value('Q3F7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F7S2" placeholder="<?php if(isset($data['Q3F7S2'])) echo $data['Q3F7S2'] ?>" value="<?php echo set_value('Q3F7S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F7S3" placeholder="<?php if(isset($data['Q3F7S3'])) echo $data['Q3F7S3'] ?>" value="<?php echo set_value('Q3F7S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F8S1" placeholder="<?php if(isset($data['Q3F8S1'])) echo $data['Q3F8S1'] ?>" value="<?php echo set_value('Q3F8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F8S2" placeholder="<?php if(isset($data['Q3F8S2'])) echo $data['Q3F8S2'] ?>" value="<?php echo set_value('Q3F8S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F8S3" placeholder="<?php if(isset($data['Q3F8S3'])) echo $data['Q3F8S3'] ?>" value="<?php echo set_value('Q3F8S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F9S1" placeholder="<?php if(isset($data['Q3F9S1'])) echo $data['Q3F9S1'] ?>" value="<?php echo set_value('Q3F9S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F9S2" placeholder="<?php if(isset($data['Q3F9S2'])) echo $data['Q3F9S2'] ?>" value="<?php echo set_value('Q3F9S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" name="Q3F9S3" placeholder="<?php if(isset($data['Q3F9S3'])) echo $data['Q3F9S3'] ?>" value="<?php echo set_value('Q3F9S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F10S1" placeholder="<?php if(isset($data['Q3F10S1'])) echo $data['Q3F10S1'] ?>" value="<?php echo set_value('Q3F10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F10S2" placeholder="<?php if(isset($data['Q3F10S2'])) echo $data['Q3F10S2'] ?>" value="<?php echo set_value('Q3F10S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F10S3" placeholder="<?php if(isset($data['Q3F10S3'])) echo $data['Q3F10S3'] ?>" value="<?php echo set_value('Q3F10S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3F11S1" placeholder="<?php if(isset($data['Q3F11S1'])) echo $data['Q3F11S1'] ?>" value="<?php echo set_value('Q3F11S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3F11S2" placeholder="<?php if(isset($data['Q3F11S2'])) echo $data['Q3F11S2'] ?>" value="<?php echo set_value('Q3F11S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3F11S3" placeholder="<?php if(isset($data['Q3F11S3'])) echo $data['Q3F11S3'] ?>" value="<?php echo set_value('Q3F11S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Task 2: Find out about the food service in your school.</label>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Does your school have a provision/space to sell packaged food items within the campus</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q4F1" value="<?php echo set_value('Q4F1','Y')?>" <?php if(isset($data['Q4F1'])) echo $data['Q4F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q4F1" value="<?php echo set_value('Q4F1','N')?>" <?php if(isset($data['Q4F1'])) echo $data['Q4F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Does your school serve midday meals? </label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q5F1" value="<?php echo set_value('Q5F1','Y')?>" <?php if(isset($data['Q5F1'])) echo $data['Q5F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q5F1" value="<?php echo set_value('Q5F1','N')?>" <?php if(isset($data['Q5F1'])) echo $data['Q5F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Task 3: What kind of food is served/sold in your school </label>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Provide the details of total energy consumed by the school:</label>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                  <label for="ex1">Packaged food items served / sold inside school campus</label>
                                                  <label> Flectricity from the board (kwh) </label>
                                                </div>
                                              <div class="col-xs-3">
                                                <label for="ex2"> Please count all flavours/variants available in the school separately</label>
                                                <input class="form-control" id="ex2" type="text" name="Q6F1S1" placeholder="<?php if(isset($data['Q6F1S1'])) echo $data['Q6F1S1'] ?>" value="<?php echo set_value('Q6F1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">Total no. of items sold, on an average, in a month</label>
                                                <input class="form-control" id="ex3" type="text" name="Q6F1S2" placeholder="<?php if(isset($data['Q6F1S2'])) echo $data['Q6F1S2'] ?>" value="<?php echo set_value('Q6F1S3'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">Month the food items were sold in</label>
                                                <input class="form-control" id="ex3" type="text" name="Q6F1S3" placeholder="<?php if(isset($data['Q6F1S3'])) echo $data['Q6F1S3'] ?>" value="<?php echo set_value('Q6F1S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F2S1" placeholder="<?php if(isset($data['Q6F2S1'])) echo $data['Q6F2S1'] ?>" value="<?php echo set_value('Q6F2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F2S2" placeholder="<?php if(isset($data['Q6F2S2'])) echo $data['Q6F2S2'] ?>" value="<?php echo set_value('Q6F2S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F2S3" placeholder="<?php if(isset($data['Q6F2S3'])) echo $data['Q6F2S3'] ?>" value="<?php echo set_value('Q6F2S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F3S1" placeholder="<?php if(isset($data['Q6F3S1'])) echo $data['Q6F3S1'] ?>" value="<?php echo set_value('Q6F3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F3S2" placeholder="<?php if(isset($data['Q6F3S2'])) echo $data['Q6F3S2'] ?>" value="<?php echo set_value('Q6F3S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F3S3" placeholder="<?php if(isset($data['Q6F3S3'])) echo $data['Q6F3S3'] ?>" value="<?php echo set_value('Q6F3S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Potato fries and burgers
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F4S1" placeholder="<?php if(isset($data['Q6F4S1'])) echo $data['Q6F4S1'] ?>" value="<?php echo set_value('Q6F4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F4S2" placeholder="<?php if(isset($data['Q6F4S2'])) echo $data['Q6F4S2'] ?>" value="<?php echo set_value('Q6F4S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F4S3" placeholder="<?php if(isset($data['Q6F4S3'])) echo $data['Q6F4S3'] ?>" value="<?php echo set_value('Q6F4S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Confectionery items (chocolate, candies, gums)
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F5S1" placeholder="<?php if(isset($data['Q6F5S1'])) echo $data['Q6F5S1'] ?>" value="<?php echo set_value('Q6F5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F5S2" placeholder="<?php if(isset($data['Q6F5S2'])) echo $data['Q2F5S2'] ?>" value="<?php echo set_value('Q6F5S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F5S3" placeholder="<?php if(isset($data['Q6F5S3'])) echo $data['Q6F5S3'] ?>" value="<?php echo set_value('Q6F5S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Ice cream
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F6S1" placeholder="<?php if(isset($data['Q6F6S1'])) echo $data['Q6F6S1'] ?>" value="<?php echo set_value('Q6F6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F6S2" placeholder="<?php if(isset($data['Q6F6S2'])) echo $data['Q6F6S2'] ?>" value="<?php echo set_value('Q6F6S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F6S3" placeholder="<?php if(isset($data['Q6F6S3'])) echo $data['Q6F6S3'] ?>" value="<?php echo set_value('Q6F6S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Carbonated beverages
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F7S1" placeholder="<?php if(isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>" value="<?php echo set_value('Q6F7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F7S2" placeholder="<?php if(isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>" value="<?php echo set_value('Q6F7S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F7S3" placeholder="<?php if(isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>" value="<?php echo set_value('Q6F7S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Sugar sweetened non-carbonated beverages
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F7S1" placeholder="<?php if(isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>" value="<?php echo set_value('Q6F7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F7S2" placeholder="<?php if(isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>" value="<?php echo set_value('Q6F7S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F7S3" placeholder="<?php if(isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>" value="<?php echo set_value('Q6F7S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                Packaged/bottled nimboo paani/lassi/flavoured milk
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F8S1" placeholder="<?php if(isset($data['Q6F8S1'])) echo $data['Q6F8S1'] ?>" value="<?php echo set_value('Q6F8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F8S2" placeholder="<?php if(isset($data['Q6F8S2'])) echo $data['Q6F8S2'] ?>" value="<?php echo set_value('Q6F8S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3"> 
                                                <input class="form-control" id="ex3" type="text" name="Q6F8S3" placeholder="<?php if(isset($data['Q6F8S3'])) echo $data['Q6F8S3'] ?>" value="<?php echo set_value('Q6F8S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                Packaged/bottled energy drinks
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6F10S1" placeholder="<?php if(isset($data['Q6F10S1'])) echo $data['Q6F10S1'] ?>" value="<?php echo set_value('Q6F10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6F10S2" placeholder="<?php if(isset($data['Q6F10S2'])) echo $data['Q6F10S2'] ?>" value="<?php echo set_value('Q6F10S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6F10S3" placeholder="<?php if(isset($data['Q6F10S3'])) echo $data['Q6F10S3'] ?>" value="<?php echo set_value('Q6F10S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">DDoes your school serve traditional Indian snacks?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q7F1" value="<?php echo set_value('Q7F1','Y')?>" <?php if(isset($data['Q7F1'])) echo $data['Q7F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q7F1" value="<?php echo set_value('Q7F1','N')?>" <?php if(isset($data['Q7F1'])) echo $data['Q7F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                     <div class="form-group">
                                        <label for="username" class="control-label">Does your school serve traditional Indian beverages? </label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8F1" value="<?php echo set_value('Q8F1','Y')?>" <?php if(isset($data['Q8F1'])) echo $data['Q8F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q8F1" value="<?php echo set_value('Q8F1','N')?>" <?php if(isset($data['Q8F1'])) echo $data['Q8F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                    <div class="form-group">
                                    <label>Task 4: What kind of food does your school promote?</label>
                                    </div>
                                     <div class="form-group">
                                        <label for="username" class="control-label"> Does the school distribute packaged food items as rewards during schools events?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q9F1" value="<?php echo set_value('Q9F1','Y')?>" <?php if(isset($data['Q9F1'])) echo $data['Q9F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q9F1" value="<?php echo set_value('Q9F1','N')?>" <?php if(isset($data['Q9F1'])) echo $data['Q9F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                     <div class="form-group">
                                        <label for="username" class="control-label">Does the school distribute chocolates/similar products as refreshments during schools events?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q10F1" value="<?php echo set_value('Q10F1','Y')?>" <?php if(isset($data['Q10F1'])) echo $data['Q10F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q10F1" value="<?php echo set_value('Q10F1','N')?>" <?php if(isset($data['Q10F1'])) echo $data['Q10F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                     <div class="form-group">
                                        <label for="username" class="control-label">Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands? </label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q11F1" value="<?php echo set_value('Q11F1','Y')?>" <?php if(isset($data['Q11F1'])) echo $data['Q11F1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q11F1" value="<?php echo set_value('Q11F1','N')?>" <?php if(isset($data['Q11F1'])) echo $data['Q11F1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                    </div>
                                    <div class="form-group">
                                       <label>Please upload pictures of your Audit Team doing the survey</label><br>
Please upload all supporting documents related to this section here. Note: files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 500 KB.
                                       <input  type="file"  readonly/>
                                    </div>
                                    
                                    <input type="submit" value="Submit"  readonly/> 
                               <?php echo form_close(); ?>
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
