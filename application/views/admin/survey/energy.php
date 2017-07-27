<?php $this->load->view('admin/survey/header');?>

<div class="container">
        <div class="row">
            <h2>ENERGY</h2>
            <p class="lead">
                Prior to answering these questions, please consider using a meter to measure the monthly average amount of energy used from the respective energy sources.

The unit of measurement to be used in the Energy section is megajoule (mj).
            </p>
        
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open('energy/set'); ?>
                                    <div class="form-group">
                                    <label>Task 1: Choose your Energy Eudit Team
                                        The school administrative staff must be members of your team as you would require electricity bills, fuel consumption bills, etc. Other support staff such as generator attendant and electricians are also important contacts. It would be a good idea to rope in a Physics or Science teacher as well and, most importantly, a team of five to 10 of your schoolmates.</label>
                                    </div>
                                    <div class="form-group">
                                   		
                                        <label for="username" class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
                                           <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q1E1S1" placeholder="<?php  if(isset($data['Q1E1S1'])) echo $data['Q1E1S1']; ?>" value="<?php echo set_value('Q1E1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="Q1E1S2" placeholder="<?php if(isset($data['Q1E1S2'])) echo $data['Q1E1S2']; ?>" value="<?php echo set_value('Q1E1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1E2S1" placeholder="<?php if(isset($data['Q1E2S1'])) echo $data['Q1E2S1'] ?>" value="<?php echo set_value('Q1E2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1E2S2" placeholder="<?php if(isset($data['Q1E2S2'])) echo $data['Q1E2S2'] ?>" value="<?php echo set_value('Q1E2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1E3S1" placeholder="<?php if(isset($data['Q1E3S1'])) echo $data['Q1E3S1'] ?>" value="<?php echo set_value('Q1E3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q1E3S2" placeholder="<?php if(isset($data['Q1E3S2'])) echo $data['Q1E3S2'] ?>" value="<?php echo set_value('Q1E3S2'); ?>" readonly/>
                                                </div>
                                            </div>
                                           
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Edministrative staff (maximum of five staff can be part of the team):</label>
                                        <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="Q2E1S1" placeholder="<?php if(isset($data['Q2E1S1'])) echo $data['Q2E1S1'] ?>" value="<?php echo set_value('Q2E1S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="text" name="Q2E1S2" placeholder="<?php if(isset($data['Q2E1S2'])) echo $data['Q2E1S2'] ?>" value="<?php echo set_value('Q2E1S2'); ?>" readonly/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E2S1" placeholder="<?php if(isset($data['Q2E2S1'])) echo $data['Q2E2S1'] ?>" value="<?php echo set_value('Q2E2S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E2S2" placeholder="<?php if(isset($data['Q2E2S2'])) echo $data['Q2E2S2'] ?>" value="<?php echo set_value('Q2E2S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E3S1" placeholder="<?php if(isset($data['Q2E3S1'])) echo $data['Q2E3S1'] ?>" value="<?php echo set_value('Q2E3S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E3S2" placeholder="<?php if(isset($data['Q2E3S2'])) echo $data['Q2E3S2'] ?>" value="<?php echo set_value('Q2E3S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E4S1" placeholder="<?php if(isset($data['Q2E4S1'])) echo $data['Q2E4S1'] ?>" value="<?php echo set_value('Q2E4S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E4S2" placeholder="<?php if(isset($data['Q2E4S2'])) echo $data['Q2E4S2'] ?>" value="<?php echo set_value('Q2E4S2'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E5S1" placeholder="<?php if(isset($data['Q2E5S1'])) echo $data['Q2E5S1'] ?>" value="<?php echo set_value('Q2E5S1'); ?>" readonly/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" name="Q2E5S2" placeholder="<?php if(isset($data['Q2E5S2'])) echo $data['Q2E5S2'] ?>" value="<?php echo set_value('Q2E5S2'); ?>" readonly/>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Students (maximum of ten students can be part of the team):</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Name</label>
                                                <input class="form-control" id="ex1" type="text" name="Q3E1S1" placeholder="<?php if(isset($data['Q3E1S1'])) echo $data['Q3E1S1'] ?>"  value="<?php echo set_value('Q3E1S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Email id</label>
                                                <input class="form-control" id="ex2" type="text" name="Q3E1S2" placeholder="<?php if(isset($data['Q3E1S2'])) echo $data['Q3E1S2'] ?>" value="<?php echo set_value('Q3E1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Grade/Class</label>
                                                <input class="form-control" id="ex3" type="text" name="Q3E1S3" placeholder="<?php if(isset($data['Q3E1S3'])) echo $data['Q3E1S3'] ?>" value="<?php echo set_value('Q3E1S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E2S1" placeholder="<?php if(isset($data['Q3E2S1'])) echo $data['Q3E2S1'] ?>" value="<?php echo set_value('Q3E2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E2S2" placeholder="<?php if(isset($data['Q3E2S2'])) echo $data['Q3E2S2'] ?>" value="<?php echo set_value('Q3E2S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E2S3" placeholder="<?php if(isset($data['Q3E2S3'])) echo $data['Q3E2S3'] ?>" value="<?php echo set_value('Q3E2S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E3S1" placeholder="<?php if(isset($data['Q3E3S1'])) echo $data['Q3E3S1'] ?>" value="<?php echo set_value('Q3E3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E3S2" placeholder="<?php if(isset($data['Q3E3S2'])) echo $data['Q3E3S2'] ?>" value="<?php echo set_value('Q3E3S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E3S3" placeholder="<?php if(isset($data['Q3E3S3'])) echo $data['Q3E3S3'] ?>" value="<?php echo set_value('Q3E3S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E4S1" placeholder="<?php if(isset($data['Q3E4S1'])) echo $data['Q3E4S1'] ?>" value="<?php echo set_value('Q3E4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E4S2" placeholder="<?php if(isset($data['Q3E4S2'])) echo $data['Q3E4S2'] ?>" value="<?php echo set_value('Q3E4S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E4S3" placeholder="<?php if(isset($data['Q3E4S3'])) echo $data['Q3E4S3'] ?>" value="<?php echo set_value('Q3E4S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E5S1" placeholder="<?php if(isset($data['Q3E5S1'])) echo $data['Q3E5S1'] ?>" value="<?php echo set_value('Q3E5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E5S2" placeholder="<?php if(isset($data['Q3E5S2'])) echo $data['Q2E5S2'] ?>" value="<?php echo set_value('Q3E5S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E5S3" placeholder="<?php if(isset($data['Q3E5S3'])) echo $data['Q3E5S3'] ?>" value="<?php echo set_value('Q3E5S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E6S1" placeholder="<?php if(isset($data['Q3E6S1'])) echo $data['Q3E6S1'] ?>" value="<?php echo set_value('Q3E6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E6S2" placeholder="<?php if(isset($data['Q3E6S2'])) echo $data['Q3E6S2'] ?>" value="<?php echo set_value('Q3E6S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E6S3" placeholder="<?php if(isset($data['Q3E6S3'])) echo $data['Q3E6S3'] ?>" value="<?php echo set_value('Q3E6S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E7S1" placeholder="<?php if(isset($data['Q3E7S1'])) echo $data['Q3E7S1'] ?>" value="<?php echo set_value('Q3E7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E7S2" placeholder="<?php if(isset($data['Q3E7S2'])) echo $data['Q3E7S2'] ?>" value="<?php echo set_value('Q3E7S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E7S3" placeholder="<?php if(isset($data['Q3E7S3'])) echo $data['Q3E7S3'] ?>" value="<?php echo set_value('Q3E7S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E7S1" placeholder="<?php if(isset($data['Q3E7S1'])) echo $data['Q3E7S1'] ?>" value="<?php echo set_value('Q3E7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E7S2" placeholder="<?php if(isset($data['Q3E7S2'])) echo $data['Q3E7S2'] ?>" value="<?php echo set_value('Q3E7S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E7S3" placeholder="<?php if(isset($data['Q3E7S3'])) echo $data['Q3E7S3'] ?>" value="<?php echo set_value('Q3E7S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E8S1" placeholder="<?php if(isset($data['Q3E8S1'])) echo $data['Q3E8S1'] ?>" value="<?php echo set_value('Q3E8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E8S2" placeholder="<?php if(isset($data['Q3E8S2'])) echo $data['Q3E8S2'] ?>" value="<?php echo set_value('Q3E8S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" name="Q3E8S3" placeholder="<?php if(isset($data['Q3E8S3'])) echo $data['Q3E8S3'] ?>" value="<?php echo set_value('Q3E8S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E9S1" placeholder="<?php if(isset($data['Q3E9S1'])) echo $data['Q3E9S1'] ?>" value="<?php echo set_value('Q3E9S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E9S2" placeholder="<?php if(isset($data['Q3E9S2'])) echo $data['Q3E9S2'] ?>" value="<?php echo set_value('Q3E9S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E9S3" placeholder="<?php if(isset($data['Q3E9S3'])) echo $data['Q3E9S3'] ?>" value="<?php echo set_value('Q3E9S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q3E10S1" placeholder="<?php if(isset($data['Q3E10S1'])) echo $data['Q3E10S1'] ?>" value="<?php echo set_value('Q3E10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q3E10S2" placeholder="<?php if(isset($data['Q3E10S2'])) echo $data['Q3E10S2'] ?>" value="<?php echo set_value('Q3E10S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q3E10S3" placeholder="<?php if(isset($data['Q3E10S3'])) echo $data['Q3E10S3'] ?>" value="<?php echo set_value('Q3E10S3'); ?>" readonly/>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Task 2: How much energy does your school consume?</label>
                                        <br>
                                        In this section you will be asked questions related to energy consumption of your school. This will involve finding out the different sources of energy used and jotting down the monthly consumption.
                                        <br>
                                        <label>To collect data: </label><br>

                                        Please collect all the bills that your school receives for its energy consumption, e.g. electricity and gas bills. If the frequency of any energy consumption bill is fortnightly, bi-monthly, quarterly or half yearly, try to convert them into monthly averages. Take an average of the bills for a minimum of four months â€“ e.g January to April.  <br><br>

                                        <label>Electricity:</label> The audit team will have to get in touch with the administrative staff in the school office to procure the electricity bills.
                                        <br><br>
                                        <label>Diesel:</label> Ask the generator attendant to show the log book of fuels and find out how many litres are being used. If diesel is being used for transport, the transport in-charge will have the register/log book with details about the amount consumed and cost paid. Remember the energy output of a generator would be taken only in terms of input, i.e, fuel used.

                                        LPG: Ask the mess/canteen staff, how many cylinders are used in one month on an average. Remember each gas cylinder generally weighs 14.2 kg.
                                    </div>
                                      <div class="form-group">
                                        <label for="username" class="control-label">Does your school have access to an electricity bill?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q4E1" value="<?php echo set_value('Q4E1','Y')?>" <?php if(isset($data['Q4E1'])) echo $data['Q4E1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q4E1" value="<?php echo set_value('Q4E1','N')?>" <?php if(isset($data['Q4E1'])) echo $data['Q4E1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Does your school have its own vehicles?</label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q5E1" value="<?php echo set_value('Q5E1','Y')?>" <?php if(isset($data['Q5E1'])) echo $data['Q5E1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q5E1" value="<?php echo set_value('Q5E1','N')?>" <?php if(isset($data['Q5E1'])) echo $data['Q5E1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="username" class="control-label">Provide the details of total energy consumed by the school:</label>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                  <label for="ex1">Source of energy</label>
                                                  <label> Electricity from the board (kwh) </label>
                                                </div>
                                              <div class="col-xs-3">
                                                <label for="ex2">Quantity consumed/monthly average</label>
                                                <input class="form-control" id="ex2" type="text" name="Q6E1S1" placeholder="<?php if(isset($data['Q6E1S1'])) echo $data['Q6E1S1'] ?>" value="<?php echo set_value('Q6E1S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">Energy consumed in Megajoules (mj)</label>
                                                <input class="form-control" id="ex3" type="text" name="Q6E1S2" placeholder="<?php if(isset($data['Q6E1S2'])) echo $data['Q6E1S2'] ?>" value="<?php echo set_value('Q6E1S3'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">Type of use</label>
                                                <input class="form-control" id="ex3" type="text" name="Q6E1S3" placeholder="<?php if(isset($data['Q6E1S3'])) echo $data['Q6E1S3'] ?>" value="<?php echo set_value('Q6E1S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label>Electricity from generator (diesel) (litres)</label>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E2S1" placeholder="<?php if(isset($data['Q6E2S1'])) echo $data['Q6E2S1'] ?>" value="<?php echo set_value('Q6E2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E2S2" placeholder="<?php if(isset($data['Q6E2S2'])) echo $data['Q6E2S2'] ?>" value="<?php echo set_value('Q6E2S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E2S3" placeholder="<?php if(isset($data['Q6E2S3'])) echo $data['Q6E2S3'] ?>" value="<?php echo set_value('Q6E2S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 <label>Petrol (litres)</label>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E3S1" placeholder="<?php if(isset($data['Q6E3S1'])) echo $data['Q6E3S1'] ?>" value="<?php echo set_value('Q6E3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E3S2" placeholder="<?php if(isset($data['Q6E3S2'])) echo $data['Q6E3S2'] ?>" value="<?php echo set_value('Q6E3S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E3S3" placeholder="<?php if(isset($data['Q6E3S3'])) echo $data['Q6E3S3'] ?>" value="<?php echo set_value('Q6E3S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              <label>Diesel (litres)</label>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E4S1" placeholder="<?php if(isset($data['Q6E4S1'])) echo $data['Q6E4S1'] ?>" value="<?php echo set_value('Q6E4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E4S2" placeholder="<?php if(isset($data['Q6E4S2'])) echo $data['Q6E4S2'] ?>" value="<?php echo set_value('Q6E4S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E4S3" placeholder="<?php if(isset($data['Q6E4S3'])) echo $data['Q6E4S3'] ?>" value="<?php echo set_value('Q6E4S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              <label>CNG (kilogrammes)</label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E5S1" placeholder="<?php if(isset($data['Q6E5S1'])) echo $data['Q6E5S1'] ?>" value="<?php echo set_value('Q6E5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E5S2" placeholder="<?php if(isset($data['Q6E5S2'])) echo $data['Q2E5S2'] ?>" value="<?php echo set_value('Q6E5S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E5S3" placeholder="<?php if(isset($data['Q6E5S3'])) echo $data['Q6E5S3'] ?>" value="<?php echo set_value('Q6E5S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              <label>Kerosene (litres)</label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E6S1" placeholder="<?php if(isset($data['Q6E6S1'])) echo $data['Q6E6S1'] ?>" value="<?php echo set_value('Q6E6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E6S2" placeholder="<?php if(isset($data['Q6E6S2'])) echo $data['Q6E6S2'] ?>" value="<?php echo set_value('Q6E6S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E6S3" placeholder="<?php if(isset($data['Q6E6S3'])) echo $data['Q6E6S3'] ?>" value="<?php echo set_value('Q6E6S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              <label> Coal (kilogrammes) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E7S1" placeholder="<?php if(isset($data['Q6E7S1'])) echo $data['Q6E7S1'] ?>" value="<?php echo set_value('Q6E7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E7S2" placeholder="<?php if(isset($data['Q6E7S2'])) echo $data['Q6E7S2'] ?>" value="<?php echo set_value('Q6E7S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E7S3" placeholder="<?php if(isset($data['Q6E7S3'])) echo $data['Q6E7S3'] ?>" value="<?php echo set_value('Q6E7S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              <label> Wood (kilogrammes) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E7S1" placeholder="<?php if(isset($data['Q6E7S1'])) echo $data['Q6E7S1'] ?>" value="<?php echo set_value('Q6E7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E7S2" placeholder="<?php if(isset($data['Q6E7S2'])) echo $data['Q6E7S2'] ?>" value="<?php echo set_value('Q6E7S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E7S3" placeholder="<?php if(isset($data['Q6E7S3'])) echo $data['Q6E7S3'] ?>" value="<?php echo set_value('Q6E7S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label> Animal waste (kilogrammes) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E8S1" placeholder="<?php if(isset($data['Q6E8S1'])) echo $data['Q6E8S1'] ?>" value="<?php echo set_value('Q6E8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E8S2" placeholder="<?php if(isset($data['Q6E8S2'])) echo $data['Q6E8S2'] ?>" value="<?php echo set_value('Q6E8S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3"> 
                                                <input class="form-control" id="ex3" type="text" name="Q6E8S3" placeholder="<?php if(isset($data['Q6E8S3'])) echo $data['Q6E8S3'] ?>" value="<?php echo set_value('Q6E8S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label> Solar (kwh) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E10S1" placeholder="<?php if(isset($data['Q6E10S1'])) echo $data['Q6E10S1'] ?>" value="<?php echo set_value('Q6E10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E10S2" placeholder="<?php if(isset($data['Q6E10S2'])) echo $data['Q6E10S2'] ?>" value="<?php echo set_value('Q6E10S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E10S3" placeholder="<?php if(isset($data['Q6E10S3'])) echo $data['Q6E10S3'] ?>" value="<?php echo set_value('Q6E10S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label>Wind (kwh) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E10S1" placeholder="<?php if(isset($data['Q6E10S1'])) echo $data['Q6E10S1'] ?>" value="<?php echo set_value('Q6E10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E10S2" placeholder="<?php if(isset($data['Q6E10S2'])) echo $data['Q6E10S2'] ?>" value="<?php echo set_value('Q6E10S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E10S3" placeholder="<?php if(isset($data['Q6E10S3'])) echo $data['Q6E10S3'] ?>" value="<?php echo set_value('Q6E10S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label> LPG (kilogrammes) </label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E10S1" placeholder="<?php if(isset($data['Q6E10S1'])) echo $data['Q6E10S1'] ?>" value="<?php echo set_value('Q6E10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E10S2" placeholder="<?php if(isset($data['Q6E10S2'])) echo $data['Q6E10S2'] ?>" value="<?php echo set_value('Q6E10S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E10S3" placeholder="<?php if(isset($data['Q6E10S3'])) echo $data['Q6E10S3'] ?>" value="<?php echo set_value('Q6E10S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label> Piped Natural Gas (kilogrammes)</label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E10S1" placeholder="<?php if(isset($data['Q6E10S1'])) echo $data['Q6E10S1'] ?>" value="<?php echo set_value('Q6E10S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E10S2" placeholder="<?php if(isset($data['Q6E10S2'])) echo $data['Q6E10S2'] ?>" value="<?php echo set_value('Q6E10S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q6E10S3" placeholder="<?php if(isset($data['Q6E10S3'])) echo $data['Q6E10S3'] ?>" value="<?php echo set_value('Q6E10S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                <label>Total</label>
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q6E10S1" placeholder="<?php if(isset($data['Q6E10S1'])) echo $data['Q6E10S1'] ?>" value="<?php echo set_value('Q6E10S1'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q6E10S2" placeholder="<?php if(isset($data['Q6E10S2'])) echo $data['Q6E10S2'] ?>" value="<?php echo set_value('Q6E10S2'); ?>" readonly readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                
                                              </div>
                                              
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Please upload fuel bills</label>
                                        <input type="file"  readonly/>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label> What appliances does your school have? </label>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                  <label for="ex1">Appliances/Equipments</label>
                                                 
                                                </div>
                                              <div class="col-xs-3">
                                                <label for="ex2">Number</label>
                                                
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">Size</label>
                                               
                                              </div>
                                              <div class="col-xs-3">
                                                <label for="ex3">BEE Star Rating</label>
                                               
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                Air Conditioners
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E2S1" placeholder="<?php if(isset($data['Q7E2S1'])) echo $data['Q7E2S1'] ?>" value="<?php echo set_value('Q7E2S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E2S2" placeholder="<?php echo isset($data['Q7E2S2'])?$data['Q7E2S2']:"(litres)" ?>" value="<?php echo set_value('Q7E2S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E2S3" placeholder="<?php if(isset($data['Q7E2S3'])) echo $data['Q7E2S3'] ?>" value="<?php echo set_value('Q7E2S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                                 Refrigerator
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E3S1" placeholder="<?php if(isset($data['Q7E3S1'])) echo $data['Q7E3S1'] ?>" value="<?php echo set_value('Q7E3S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E3S2" placeholder="<?php echo isset($data['Q7E3S2'])?$data['Q7E3S2']:"(kg)" ?>" value="<?php echo set_value('Q7E3S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E3S3" placeholder="<?php if(isset($data['Q7E3S3'])) echo $data['Q7E3S3'] ?>" value="<?php echo set_value('Q7E3S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Microwave
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E4S1" placeholder="<?php if(isset($data['Q7E4S1'])) echo $data['Q7E4S1'] ?>" value="<?php echo set_value('Q7E4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E4S2" placeholder="<?php echo isset($data['Q7E4S2'])?$data['Q7E4S2']:"(Watts)"?>" value="<?php echo set_value('Q7E4S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E4S3" placeholder="<?php if(isset($data['Q7E4S3'])) echo $data['Q7E4S3'] ?>" value="<?php echo set_value('Q7E4S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Tube Lights
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E5S1" placeholder="<?php if(isset($data['Q7E5S1'])) echo $data['Q7E5S1'] ?>" value="<?php echo set_value('Q7E5S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E5S2" placeholder="<?php echo isset($data['Q7E5S2'])?$data['Q7E5S2']:"(Watts)" ?>" value="<?php echo set_value('Q7E5S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E5S3" placeholder="<?php if(isset($data['Q7E5S3'])) echo $data['Q7E5S3'] ?>" value="<?php echo set_value('Q7E5S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              CFL Bulbs
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E6S1" placeholder="<?php if(isset($data['Q7E6S1'])) echo $data['Q7E6S1'] ?>" value="<?php echo set_value('Q7E6S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E6S2" placeholder="<?php echo isset($data['Q7E6S2'])?$data['Q7E6S2']:"(Watts)" ?>" value="<?php echo set_value('Q7E6S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E6S3" placeholder="<?php if(isset($data['Q7E6S3'])) echo $data['Q7E6S3'] ?>" value="<?php echo set_value('Q7E6S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              LED Lights
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E7S1" placeholder="<?php if(isset($data['Q7E7S1'])) echo $data['Q7E7S1'] ?>" value="<?php echo set_value('Q7E7S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E7S2" placeholder="<?php echo isset($data['Q7E7S2'])?$data['Q7E7S2']:"(Watts)" ?>" value="<?php echo set_value('Q7E7S2'); ?>"  readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E7S3" placeholder="<?php if(isset($data['Q7E7S3'])) echo $data['Q7E7S3'] ?>" value="<?php echo set_value('Q7E7S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-3">
                                              Fans
                                              </div>
                                              
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex1" type="text" name="Q7E8S1" placeholder="<?php if(isset($data['Q7E8S1'])) echo $data['Q7E8S1'] ?>" value="<?php echo set_value('Q7E8S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex2" type="text" name="Q7E8S2" placeholder="<?php echo isset($data['Q7E8S2'])?$data['Q7E8S2']:"(Watts)" ?>" value="<?php echo set_value('Q7E8S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-3">
                                                <input class="form-control" id="ex3" type="text" name="Q7E8S3" placeholder="<?php if(isset($data['Q7E8S3'])) echo $data['Q7E8S3'] ?>" value="<?php echo set_value('Q7E8S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="username" class="control-label">Please upload fuel bills</label>
                                        <input type="file"  readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Task 3: Is your school using any renewable sources of energy?</label>
                                         <input class="form-control" id="ex3" type="text" name="" placeholder="<?php if(isset($data['Q8E1'])) echo $data['Q8E1'] ?>" value="<?php echo set_value('Q8E1'); ?>" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Are there any alternate sources of energy employed/ installed in your school? </label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="Q9E1" value="<?php echo set_value('Q9E1','Y')?>" <?php if(isset($data['Q9E1'])) echo $data['Q9E1'] == 'Y'?"checked":"" ?>>Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="Q9E1" value="<?php echo set_value('Q9E1','N')?>" <?php if(isset($data['Q9E1'])) echo $data['Q9E1'] == 'N'?"checked":"" ?>>No
                                          </label>
                                        </div>
                                    </div>
                                     <input type="submit" value="Submit"  readonly/>
                                <?php echo form_close(); ?>
                                
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
