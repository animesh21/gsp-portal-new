<?php $this->load->view('header');?>

<div class="container">
  <div class="content-form">
    <div class="log-nav">
      <div class="welcome">Welcome, <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME');?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        <li>|</li>
        <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
      </ul>
    </div>
    <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: 25%; height: 35px;">25%</div>
    </div>
    <h1>GENERAL QUESTIONS</h1>
  <?php echo form_open('general/set',['name'=>'General','onsubmit'=>'return validateForm() ']); ?>
     <div class="form-group">
      <label class="control-label" data-toggle="tooltip" data-placement="top" title="If your school has classes from Grade 6 to 11, you response will be lowest level of grade: Grade 6 and Highest level of grade: Grade 11. If your school has only one Grade (Grade 7) then your response for both will be Grade 7."><span class="cube">1</span>How many levels does your school have <a class="tt" data-tooltip="If your school has classes from Grade 6 to 11, your response will be lowest level of grade: Grade 6 and Highest level of grade: Grade 11. If your school has only one Grade (Grade 7) then your response for both will be Grade 7"><span class="badge">?</span></a></label>
    </div>
         <div class="form-group"> Lowest level of grade:
      <select name="Q1G1" id="Q1G1" onchange="ComputePrimary()" class="form-control" style="display:inline; width:10%; margin-left:10px;">
        <option <?php echo set_value('Q1G1',1); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 1 ?"selected":""; ?>>1</option>
        <option <?php echo set_value('Q1G1',2); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 2 ?"selected":""; ?>>2</option>
        <option <?php echo set_value('Q1G1',3); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 3 ?"selected":""; ?>>3</option>
        <option <?php echo set_value('Q1G1',4); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 4 ?"selected":""; ?>>4</option>
        <option <?php echo set_value('Q1G1',5); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 5 ?"selected":""; ?>>5</option>
        <option <?php echo set_value('Q1G1',6); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 6 ?"selected":""; ?>>6</option>
        <option <?php echo set_value('Q1G1',7); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 7 ?"selected":""; ?>>7</option>
        <option <?php echo set_value('Q1G1',8); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 8 ?"selected":""; ?>>8</option>
        <option <?php echo set_value('Q1G1',9); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 9 ?"selected":""; ?>>9</option>
        <option <?php echo set_value('Q1G1',10); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 10 ?"selected":""; ?>>10</option>
        <option <?php echo set_value('Q1G1',11); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 11 ?"selected":""; ?>>11</option>
        <option <?php echo set_value('Q1G1',12); ?> <?php if (isset($data['Q1G1']))  echo $data['Q1G1'] == 12 ?"selected":""; ?>>12</option>
      </select>
    </div>
    <div class="clear-fix">&nbsp;</div>
    <div class="form-group"> Highest level of grade:
      <select name="Q1G2" id="Q1G2" onchange="ComputePrimary()" class="form-control" style="display:inline; width:10%; margin-left:7px;">
        <option <?php echo set_value('Q1G2',1); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 1 ?"selected":""; ?>>1</option>
        <option <?php echo set_value('Q1G2',2); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 2 ?"selected":""; ?>>2</option>
        <option <?php echo set_value('Q1G2',3); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 3 ?"selected":""; ?>>3</option>
        <option <?php echo set_value('Q1G2',4); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 4 ?"selected":""; ?>>4</option>
        <option <?php echo set_value('Q1G2',5); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 5 ?"selected":""; ?>>5</option>
        <option <?php echo set_value('Q1G2',6); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 6 ?"selected":""; ?>>6</option>
        <option <?php echo set_value('Q1G2',7); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 7 ?"selected":""; ?>>7</option>
        <option <?php echo set_value('Q1G2',8); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 8 ?"selected":""; ?>>8</option>
        <option <?php echo set_value('Q1G2',9); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 9 ?"selected":""; ?>>9</option>
        <option <?php echo set_value('Q1G2',10); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 10 ?"selected":""; ?>>10</option>
        <option <?php echo set_value('Q1G2',11); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 11 ?"selected":""; ?>>11</option>
        <option <?php echo set_value('Q1G2',12); ?> <?php if (isset($data['Q1G2']))  echo $data['Q1G2'] == 12 ?"selected":""; ?>>12</option>
      </select>
    </div>
    
        <input type="hidden" name="primary" id="primary" name="Q2G1" value="<?php echo set_value('Primary')?>"/>
		<div class="clearfix">&nbsp;</div>
        <div class="form-group">
          <label class="control-label"><span class="cube">2</span>Is your school single gender or mixed gender?</label>
          <div class="">

            <label class="radio-inline">
              <input type="radio" name="Q2G1" class="radio" onclick="Gender(1)" id="Q2G1Boys" value="<?php echo set_value('Q2G1',1)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 1 ?"checked":"" ?>/>
              Only boys 
            </label>
            <label class="radio-inline">
              <input type="radio" name="Q2G1" class="radio" onclick="Gender(2)" id="Q2G1Girls" value="<?php echo set_value('Q2G1',2)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 2 ?"checked":"" ?>/>
              Only Girls
            </label>
            <label class="radio-inline">
              <input type="radio" name="Q2G1" class="radio" onclick="Gender(3)" id="Q2G1Mixed"  value="<?php echo set_value('Q2G1',3)?>" <?php if(isset($data['Q2G1'])) echo $data['Q2G1'] == 3 ?"checked":"" ?>/>
              Mixed/Co-education 
            </label>
          </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    
        <div class="form-group">
          <label for="username" class="control-label"><span class="cube">3</span>Which board of education does the school follow <a class="tt" data-tooltip="For Other: For example: school-specific curriculum board of education, open learning, etc"><span class="badge">?</span></a></label>
          <div class="answer-item radio-item">
            <label class="radio">
              <input type="radio" class="radio" onclick="StateValidation(1)" name="Q3G1" value="<?php echo set_value('Q3G1',1)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 1 ?"checked":"" ?>>State board of education (please specify your state)
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="Q3G1" onclick="StateValidation(2)" value="<?php echo set_value('Q3G1',2)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 2 ?"checked":"" ?>>
              Central Board of Secondary Education
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="Q3G1" onclick="StateValidation(2)" value="<?php echo set_value('Q3G1',3)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 3 ?"checked":"" ?>>
              Indian Certificate of Secondary Education
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="Q3G1" onclick="StateValidation(2)" value="<?php echo set_value('Q3G1',4)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 4 ?"checked":"" ?>>
              International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="Q3G1" onclick="StateValidation(2)" value="<?php echo set_value('Q3G1',5)?>" <?php if(isset($data['Q3G1'])) echo $data['Q3G1'] == 5 ?"checked":"" ?>>
              Others
            </label>
            <input type="text" name="Q3G1O" placeholder="<?php if(isset($data['Q3G1O'])) echo $data['Q3G1O'] ?>" value="<?php echo set_value('Q3G1O'); ?>"<?php if(isset($data['Q3G1O'])) if($data['Q3G1O'] == 2) echo "disabled"; ?>/>
          </div>
        </div>
        <div class="clearfix">&nbsp;</div>

        <?php
        if(isset($data['Q3G1']))
          if($data['Q3G1'] == 1)
          {
           ?>
           <div class="form-group" id="Q3G2">
            <label class="control-label"><span class="cube">3(a)</span> Select State for Board of Education:  </label>
            <div class="form-group row">
              <?php if(empty($data["Q3G2"])) $data['Q3G2']=0; echo form_dropdown('Q3G2', $states,set_select($data["Q3G2"]), array('class' => 'form-control', 'id' => 'country-select')); ?>
            </div>
          </div>
          
          <?php
          } 
          ?>
          <div class="form-group" id="Q3G2" style="display: none;">
            <label class="control-label"><span class="cube">3(a)</span> Select State for Board of Education:  </label>
            <div class="form-group row">
              <?php if(empty($data["Q3G2"])) $data['Q3G2']=0; echo form_dropdown('Q3G2', $states,set_select($data["Q3G2"]), array('class' => 'form-control', 'id' => 'country-select')); ?>
            </div>
          </div>

          <div class="clearfix">&nbsp;</div>
          <div class="form-group">
            <label class="control-label"><span class="cube">4(a)</span> What is the total permanent population of the school <a class="tt" data-tooltip="Permanent members are students, teachers, non-teaching staff such as technical and administrative staff, guards, etc."><span class="badge">?</span></a></label>
            <div class="form-group row">
              <div class="col-xs-2"> </div>
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
                <input class="form-control" id="male" type="number" min="0" onkeyup="CalculateStudent()" onchange="CalculateStudent()" name="Q4G1S1" placeholder="<?php if(isset($data['Q4G1S1'])) echo $data['Q4G1S1'] ?>" value="<?php echo set_value('Q4G1S1'); ?>"<?php if(isset($data['Q2G1'])) if($data['Q2G1'] == 2) echo "disabled"; ?>/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="female" type="number" min="0" onkeyup="CalculateStudent()" onchange="CalculateStudent()" name="Q4G1S2" placeholder="<?php if(isset($data['Q4G1S2'])) echo $data['Q4G1S2'] ?>" value="<?php echo set_value('Q4G1S2'); ?>" <?php if(isset($data['Q2G1'])) if($data['Q2G1'] == 1) echo "disabled"; ?> />
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="mixed" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G1S3" placeholder="<?php if(isset($data['Q4G1S3'])) echo $data['Q4G1S3'] ?>" value="<?php echo set_value('Q4G1S3'); ?>" readonly/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="ex1">Teachers</label>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="teacherMale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G2S1" placeholder="<?php if(isset($data['Q4G2S1'])) echo $data['Q4G2S1'] ?>" value="<?php echo set_value('Q4G2S1'); ?>"/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="teacherFemale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G2S2" placeholder="<?php if(isset($data['Q4G2S2'])) echo $data['Q4G2S2'] ?>" value="<?php echo set_value('Q4G2S2'); ?>"/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="teacherMixed" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G2S3" placeholder="<?php if(isset($data['Q4G2S3'])) echo $data['Q4G2S3'] ?>" value="<?php echo set_value('Q4G2S3'); ?>" readonly/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="ex1">Non-teaching Staff</label>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="NteacherMale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G3S1" placeholder="<?php if(isset($data['Q4G3S1'])) echo $data['Q4G3S1'] ?>" value="<?php echo set_value('Q4G3S1'); ?>"/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="NteacherFemale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G3S2" placeholder="<?php if(isset($data['Q4G3S2'])) echo $data['Q4G3S2'] ?>" value="<?php echo set_value('Q4G3S2'); ?>"/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="NteacherMixed" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G3S3" placeholder="<?php if(isset($data['Q4G3S3'])) echo $data['Q4G3S3'] ?>" value="<?php echo set_value('Q4G3S3'); ?>" readonly/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-2">
                <label for="ex1">Sub-Total</label>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="subMale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G4S1" placeholder="<?php if(isset($data['Q4G4S1'])) echo $data['Q4G4S1'] ?>" value="<?php echo set_value('Q4G4S1'); ?>" readonly/>
              </div>
              <div class="col-xs-2">
                <input class="form-control" id="subFemale" onkeyup="CalculateStudent()" onchange="CalculateStudent()" type="number" min="0" name="Q4G4S2" placeholder="<?php if(isset($data['Q4G4S2'])) echo $data['Q4G4S2'] ?>" value="<?php echo set_value('Q4G4S2'); ?>" readonly/>
              </div>
              <div class="col-xs-2">
                <?php
                if(empty($data['Q4G4S3']))
                  $data['Q4G4S3'] = 0;
                $attribs = array("class"=>"form-control", "id"=>"subMix", "onkeyup"=>"CalculateStudent()", "type"=>"number", "name"=>"Q4G4S3","readonly"=>"true");
                echo form_input('Q4G4S3', $data['Q4G4S3'],$attribs);
                ?>

              </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="row">
              <div class="col-xs-24 form-group">
                <label for="ex1"><span class="cube">4(b)</span>How many visitors visit your school <a class="tt" data-tooltip="Visitors are students from other schools, teachers from other schools, technicians, NGOs, contractors and laborers, vendors, chief guests, etc . Please provide the average number of visitors for any month, between August - October."><span class="badge">?</span></a></label>
                <input class="form-control" type="number" min="0" name="Q5G1" placeholder="<?php if(isset($data['Q5G1'])) echo $data['Q5G1'] ?>" value="<?php echo set_value('Q5G1'); ?>"/>
              </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php 
            if(isset($other['Q1S1'])) 

              if($other['Q1S1'] >= 3) 
              {
                ?>
                <div class="row">
                  <div class="col-xs-24 form-group">
                    <label for="ex1"><span class="cube">4(c)</span>How many family members stay in the school campus? </label>
                    <input class="form-control" type="number" min="0" name="Q5G2" placeholder="<?php if(isset($data['Q5G2'])) echo $data['Q5G2'] ?>" value="<?php echo set_value('Q5G2'); ?>"/>
                  </div>
                </div>
                <div class="clearfix">&nbsp;</div>


                <?php
              }
              ?>



              <div class="form-group">
                <label><span class="cube">5</span>What is the total number of working days of your school in a year? <a class="tt" data-tooltip="
                  On an average, a school runs for 220-230 days in a year"><span class="badge">?</span></a>
                </label>
                <input class="form-control" type="number" min="0" max="366" name="Q6G1" placeholder="<?php if(isset($data['Q6G1'])) echo $data['Q6G1'] ?>" value="<?php echo set_value('Q6G1'); ?>"/>
              </div>     
              <div class="clearfix">&nbsp;</div>
              <div class="form-group">
      <label><span class="cube">6</span>Please select the month(s) in which the GSP audit was carried out?</label>
      <ul class="list-inline">
        <li style="width:200px;">Months</li>
        <li>
          <label for="ex3">Jan</label>
          <br/>
          <input  type="checkbox" name="Q7G1" value="<?php echo set_value('Q7G1',1); ?>" <?php if(isset($data['Q7G1'])) echo "checked" ?> />
        </li>
        <li>
          <label for="ex3">Feb</label>
          <br/>
          <input type="checkbox" name="Q7G2" value="<?php echo set_value('Q7G2', 2); ?>" <?php if(isset($data['Q7G2'])) echo "checked" ?> />
        </li>
        <li>
          <label for="ex3">Mar</label>
          <br/>
          <input type="checkbox" name="Q7G3" value="<?php echo set_value('Q7G3', 3); ?>" <?php if(isset($data['Q7G3'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">April</label>
          <br/>
          <input type="checkbox" name="Q7G4" value="<?php echo set_value('Q7G4', 4); ?>" <?php if(isset($data['Q7G4'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">May</label>
          <br/>
          <input type="checkbox" name="Q7G5" value="<?php echo set_value('Q7G5', 5); ?>" <?php if(isset($data['Q7G5'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">June</label>
          <br/>
          <input type="checkbox" name="Q7G6" value="<?php echo set_value('Q7G6', 6); ?>" <?php if(isset($data['Q7G6'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">July</label>
          <br/>
          <input type="checkbox" name="Q7G7" value="<?php echo set_value('Q7G7', 7); ?>" <?php if(isset($data['Q7G7'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">Aug</label>
          <br/>
          <input type="checkbox" name="Q7G8" value="<?php echo set_value('Q7G8', 8); ?>" <?php if(isset($data['Q7G8'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">Sept</label>
          <br/>
          <input type="checkbox" name="Q7G9" value="<?php echo set_value('Q7G9', 9); ?>" <?php if(isset($data['Q7G9'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">Oct</label>
          <br/>
          <input type="checkbox" name="Q7G10" value="<?php echo set_value('Q7G10', 10); ?>" <?php if(isset($data['Q7G10'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">Nov</label>
          <br/>
          <input type="checkbox" name="Q7G11" value="<?php echo set_value('Q7G11', 11); ?>" <?php if(isset($data['Q7G11'])) echo "checked" ?>/>
        </li>
        <li>
          <label for="ex3">Dec</label>
          <br/>
          <input type="checkbox" name="Q7G12" value="<?php echo set_value('Q7G12', 12); ?>" <?php if(isset($data['Q7G12'])) echo "checked" ?>/>
        </li>
      </ul>
    </div>
    <div class="clearfix">&nbsp;</div>
    
            <div class="form-group">
              <label class="control-label"><span class="cube">7</span>Where is the school located? <a class="tt" data-tooltip="Urban area has a municipality/corporation/cantonment board/notified town area, a minimum population of 5000 and a density of population of at least 400 per square kilometer. Any area which is not covered by the definition of Urban is Rural."><span class="badge">?</span></a></label>
              <div class="radio">
                <label>
                  <input type="radio" name="Q8G1" value="<?php echo set_value('Q8G1',1)?>" <?php if(isset($data['Q8G1'])) echo $data['Q8G1'] == 1 ?"checked":"" ?>>
                  Urban Area
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="Q8G1" value="<?php echo set_value('Q8G1',2)?>" <?php if(isset($data['Q8G1'])) echo $data['Q8G1'] == 2 ?"checked":"" ?>>
                  Rural Area
                </label>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label"><span class="cube">8</span>Whether your school is: <!-- <a class="tt" data-tooltip=""><span class="badge">?</span></a> --></label>
              <div class="radio">
                <label>
                  <input type="radio" name="Q9G1" value="<?php echo set_value('Q9G1',1)?>" <?php if(isset($data['Q9G1'])) echo $data['Q9G1'] == 1 ?"checked":"" ?>>
                  Government School</label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="Q9G1" value="<?php echo set_value('Q9G1',2)?>" <?php if(isset($data['Q9G1'])) echo $data['Q9G1'] == 2 ?"checked":"" ?>>
                    Government – Aided School</label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Q9G1" value="<?php echo set_value('Q9G1',3)?>" <?php if(isset($data['Q9G1'])) echo $data['Q9G1'] == 3 ?"checked":"" ?>>
                      Private School</label>
                    </div>

                  </div>
                  <div class="text-center">
					<a href="<?php echo base_url('waste'); ?>" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button" style="min-width: 138px; !important; padding: 16px 15px !important; margin: 30px 5px !important ">Previous</a>
					<button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
					<input type="submit" value="Save and Resume Later" class="submit button" id="movenextbtn"/>
				</div>
				<?php echo form_close(); ?> </div>
                </div>
           
          <!-- /.container -->
          <?php $this->load->view('footer');?>
