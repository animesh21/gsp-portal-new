<?php $this->load->view('admin/survey/header');?>

<div class="container">
        <div class="row">
            <h2>GENERAL QUESTIONS</h2>
            <p class="lead">
                In this section, all questions are compulsory. The school contact details should match with the details provided during the time of registration to the Green Schools Programme (GSP) Audit.<br />
                
            </p>
        
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open('general/set'); ?>
                                    <div class="row">
                                        <label for="username" class="control-label">How many levels does your school have</label>
                                        <div class="col-xs-6 form-group">
                                            Lowest level of grade:
                                            <input class="form-control" type="text" name="Q1G1" placeholder="<?php if(isset($data['Q1G1'])) echo $data['Q1G1'] ?>" value="<?php echo set_value('Q1G1'); ?>"/>
                                        </div>
                                        <div class="col-xs-6 form-group">
                                            Highest level of grade:
                                            <input class="form-control" type="text" name="Q1G2" placeholder="<?php if(isset($data['Q1G2'])) echo $data['Q1G2'] ?>" value="<?php echo set_value('Q1G2'); ?>"/>
                                        </div>
                                      
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Is your school single gender or mixed gender?</label>
                                        <div class="form-group">
                                        <label class="radio-inline">
                                          <input type="radio" name="Q2G1"  value="<?php echo set_value('Q2G1',1)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 1 ?"checked":"" ?>>Only boys
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="Q2G1"  value="<?php echo set_value('Q2G1',2)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 2 ?"checked":"" ?>>Only Girls
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="Q2G1"  value="<?php echo set_value('Q2G1',3)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 3 ?"checked":"" ?>>Mixed/Co-education
                                        </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Which board of education does the school follow</label>
                                        <div class="radio">
                                          <label><input type="radio" name="Q3G1" value="" value="<?php echo set_value('Q3G1',1)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 1 ?"checked":"" ?>>
                                                    State board of education (please specify your state)</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="Q3G1" value="<?php echo set_value('Q3G1',2)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 2 ?"checked":"" ?>>Central Board of Secondary Education</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="Q3G1" value="<?php echo set_value('Q3G1',3)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 3 ?"checked":"" ?>>Indian Certificate of Secondary Education</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="Q3G1" value="<?php echo set_value('Q3G1',4)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 4 ?"checked":"" ?>>International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination</label>
                                        </div>
                                        <div class="radio">
                                          <input class="form-control" id="ex3" type="text" name="Q3G1O" placeholder="<?php if(isset($data['Q3G1O'])) echo $data['Q3G1O'] ?>" value="<?php echo set_value('Q3G1O'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> What is the total permanent population of the school</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                              </div> 
                                              <div class="col-xs-2">
                                                <label for="ex2">Male</label>   
                                                </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Female</label>
                                                </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Total</label>
                                                
                                              </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Students</label>
                                              </div>
                                              
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q4G1S1" placeholder="<?php if(isset($data['Q4G1S1'])) echo $data['Q4G1S1'] ?>" value="<?php echo set_value('Q4G1S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q4G1S2" placeholder="<?php if(isset($data['Q4G1S2'])) echo $data['Q4G1S2'] ?>" value="<?php echo set_value('Q4G1S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q4G1S3" placeholder="<?php if(isset($data['Q4G1S3'])) echo $data['Q4G1S3'] ?>" value="<?php echo set_value('Q4G1S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                             <div class="col-xs-2">
                                                <label for="ex1">Teachers</label>
                                              </div>
                                              
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q4G2S1" placeholder="<?php if(isset($data['Q4G2S1'])) echo $data['Q4G2S1'] ?>" value="<?php echo set_value('Q4G2S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q4G2S2" placeholder="<?php if(isset($data['Q4G2S2'])) echo $data['Q4G2S2'] ?>" value="<?php echo set_value('Q4G2S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q4G2S3" placeholder="<?php if(isset($data['Q4G2S3'])) echo $data['Q4G2S3'] ?>" value="<?php echo set_value('Q4G2S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-2">
                                                <label for="ex1">Non-teaching Staff</label>
                                              </div>
                                             

                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q4G3S1" placeholder="<?php if(isset($data['Q4G3S1'])) echo $data['Q4G3S1'] ?>" value="<?php echo set_value('Q4G3S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q4G3S2" placeholder="<?php if(isset($data['Q4G3S2'])) echo $data['Q4G3S2'] ?>" value="<?php echo set_value('Q4G3S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q4G3S3" placeholder="<?php if(isset($data['Q4G3S3'])) echo $data['Q4G3S3'] ?>" value="<?php echo set_value('Q4G3S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Sub-Total</label>
                                              </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" name="Q4G4S1" placeholder="<?php if(isset($data['Q4G4S1'])) echo $data['Q4G4S1'] ?>" value="<?php echo set_value('Q4G4S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" name="Q4G4S2" placeholder="<?php if(isset($data['Q4G4S2'])) echo $data['Q4G4S2'] ?>" value="<?php echo set_value('Q4G4S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" name="Q4G4S3" placeholder="<?php if(isset($data['Q4G4S3'])) echo $data['Q4G4S3'] ?>" value="<?php echo set_value('Q4G4S3'); ?>" readonly/>
                                              </div>
                                              
                                        </div>
                                      <div class="row">
                                        <div class="col-xs-6 form-group">
                                            <label for="ex1">How many visitors visit your school</label>
                                            <input class="form-control" type="text" name="Q5G1" placeholder="<?php if(isset($data['Q5G1'])) echo $data['Q5G1'] ?>" value="<?php echo set_value('Q5G1'); ?>"/>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-xs-6 form-group">
                                            <label for="ex1">What is the total number of working days of your school in a year?</label>
                                            <input class="form-control" type="text" name="Q6G1" placeholder="<?php if(isset($data['Q6G1'])) echo $data['Q6G1'] ?>" value="<?php echo set_value('Q6G1'); ?>"/>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                            <label for="ex1">What is the total number of working days of your school in a year?</label>
                                            <div class="col-xs-4">
                                              <label for="ex3">Jan</label>
                                              <input  type="checkbox" name="Q7G1" value="<?php echo set_value('Q7G1'); ?>" <?php if(isset($data['Q7G1'])) echo set_checkbox('Q7G1', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Feb</label>
                                              <input type="checkbox" name="Q7G2" value="<?php echo set_value('Q7G2'); ?>" <?php if(isset($data['Q7G2'])) echo set_checkbox('Q7G2', '1', true); ?> />
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Mar</label>
                                              <input type="checkbox" name="Q7G3" value="<?php echo set_value('Q7G3'); ?>" <?php if(isset($data['Q7G3'])) echo set_checkbox('Q7G3', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">April</label>
                                              <input type="checkbox" name="Q7G4" value="<?php echo set_value('Q7G4'); ?>" <?php if(isset($data['Q7G4'])) echo set_checkbox('Q7G4', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">May</label>
                                              <input type="checkbox" name="Q7G5" value="<?php echo set_value('Q7G5'); ?>" <?php if(isset($data['Q7G5'])) echo set_checkbox('Q7G5', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">June</label>
                                              <input type="checkbox" name="Q7G6" value="<?php echo set_value('Q7G6'); ?>" <?php if(isset($data['Q7G6'])) echo set_checkbox('Q7G6', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">July</label>
                                              <input type="checkbox" name="Q7G7" value="<?php echo set_value('Q7G7'); ?>" <?php if(isset($data['Q7G7'])) echo set_checkbox('Q7G7', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Aug</label>
                                              <input type="checkbox" name="Q7G8" value="<?php echo set_value('Q7G8'); ?>" <?php if(isset($data['Q7G8'])) echo set_checkbox('Q7G8', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Sept</label>
                                              <input type="checkbox" name="Q7G9" value="<?php echo set_value('Q7G9'); ?>" <?php if(isset($data['Q7G9'])) echo set_checkbox('Q7G9', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Oct</label>
                                              <input type="checkbox" name="Q7G10" value="<?php echo set_value('Q7G10'); ?>" <?php if(isset($data['Q7G10'])) echo set_checkbox('Q7G10', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Nov</label>
                                              <input type="checkbox" name="Q7G11" value="<?php echo set_value('Q7G11'); ?>" <?php if(isset($data['Q7G11'])) echo set_checkbox('Q7G11', '1', true); ?>/>
                                            </div>
                                            <div class="col-xs-4">
                                              <label for="ex3">Dec</label>
                                              <input type="checkbox" name="Q7G12" value="<?php echo set_value('Q7G12'); ?>" <?php if(isset($data['Q7G12'])) echo set_checkbox('Q7G12', '1', true); ?>/>
                                            </div>
                                            
                                            
                                        </div>
                                      </div>
                                    
                                   <input type="submit" value="Submit" />  
                                <?php echo form_close(); ?>
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
