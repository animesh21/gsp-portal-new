<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('WasteTrans/headerw'); ?>

<div class="container">
<div class="content-form">
<div class="log-nav">
  <div class="welcome">Welcome <span
                        style="font-weight:bold">
                        <?php $user_id = $this->session->userdata('USER_ID'); 

                       $School_name = getSchoolNameBYUniqueId($user_id);
                       echo $School_name;
                        ?></span></div>
  <ul>
    <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<!--     <li>|</li>
    <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
  </ul>
</div>
<!-- <div id="pprg" class="newprog progress" style="text-align:center">
  <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
</div> -->
<h1>GENERAL QUESTIONS</h1>
<?php echo form_open('Wt/set',array('id'=>'general-form')); ?>
<div class="form-group">
  <label class="control-label" data-toggle="tooltip" data-placement="top"
                   title="If your school has classes from Grade 6 to 11, you response will be lowest level of grade: Grade 6 and Highest level of grade: Grade 11. If your school has only one Grade (Grade 7) then your response for both will be Grade 7."><span
                        class="cube">1</span>How many levels does your school have? 
                        <a class="tt" data-tooltip="If your school has classes from Grade 6 to 11, your response will be lowest level of grade: Grade 6 and Highest level of grade: Grade 11. If your school has only one Grade (Grade 7) then your response for both will be Grade 7"><span
                            class="badge">?</span></a></label>
  <!--<audio controls>
    <source src="<?php echo base_url(); ?>assets/img/jana_gana_mana.ogg" type="audio/ogg">
    <source src="<?php echo base_url(); ?>assets/img/jana_gana_mana.mp3" type="audio/mpeg">
    Your browser does not support the audio tag. </audio>-->
</div>
<div class="form-group"> Lowest level of Grade/ Class:
  <select name="Q1G1" id="Q1G1" onChange="ComputePrimary()" class="form-control"
                    style="display:inline; width:10%; margin-left:10px;">
    <option <?php echo set_value('Q1G1', 1); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 1 ? "selected" : ""; ?>> 1 </option>
    <option <?php echo set_value('Q1G1', 2); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 2 ? "selected" : ""; ?>> 2 </option>
    <option <?php echo set_value('Q1G1', 3); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 3 ? "selected" : ""; ?>> 3 </option>
    <option <?php echo set_value('Q1G1', 4); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 4 ? "selected" : ""; ?>> 4 </option>
    <option <?php echo set_value('Q1G1', 5); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 5 ? "selected" : ""; ?>> 5 </option>
    <option <?php echo set_value('Q1G1', 6); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 6 ? "selected" : ""; ?>> 6 </option>
    <option <?php echo set_value('Q1G1', 7); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 7 ? "selected" : ""; ?>> 7 </option>
    <option <?php echo set_value('Q1G1', 8); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 8 ? "selected" : ""; ?>> 8 </option>
    <option <?php echo set_value('Q1G1', 9); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 9 ? "selected" : ""; ?>> 9 </option>
    <option <?php echo set_value('Q1G1', 10); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 10 ? "selected" : ""; ?>> 10 </option>
    <option <?php echo set_value('Q1G1', 11); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 11 ? "selected" : ""; ?>> 11 </option>
    <option <?php echo set_value('Q1G1', 12); ?> <?php if (isset($data['Q1G1'])) echo $data['Q1G1'] == 12 ? "selected" : ""; ?>> 12 </option>
  </select>
</div>
<div class="clear-fix">&nbsp;</div>
<div class="form-group"> Highest level of Grade/ Class:
  <select name="Q1G2" id="Q1G2" onChange="ComputePrimary(),hello()" class="form-control"
                    style="display:inline; width:10%; margin-left:7px;">
    <option value="<?php echo set_value('Q1G2', 1); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 1 ? "selected" : ""; ?>> 1 </option>
    <option value="<?php echo set_value('Q1G2', 2); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 2 ? "selected" : ""; ?>> 2 </option>
    <option value="<?php echo set_value('Q1G2', 3); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 3 ? "selected" : ""; ?>> 3 </option>
    <option value="<?php echo set_value('Q1G2', 4); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 4 ? "selected" : ""; ?>> 4 </option>
    <option value="<?php echo set_value('Q1G2', 5); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 5 ? "selected" : ""; ?>> 5 </option>
    <option value="<?php echo set_value('Q1G2', 6); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 6 ? "selected" : ""; ?>> 6 </option>
    <option value="<?php echo set_value('Q1G2', 7); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 7 ? "selected" : ""; ?>> 7 </option>
    <option value="<?php echo set_value('Q1G2', 8); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 8 ? "selected" : ""; ?>> 8</option>
    <option value="<?php echo set_value('Q1G2', 9); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 9 ? "selected" : ""; ?>> 9</option>
    <option value="<?php echo set_value('Q1G2', 10); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 10 ? "selected" : ""; ?>> 10</option>
    <option value="<?php echo set_value('Q1G2', 11); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 11 ? "selected" : ""; ?>> 11</option>
    <option value="<?php echo set_value('Q1G2', 12); ?>" <?php if (isset($data['Q1G2'])) echo $data['Q1G2'] == 12 ? "selected" : ""; ?>> 12</option>
  </select>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label class="control-label"><span class="cube">2</span>Is your school single gender or mixed
  gender?</label>
  <div class="">
    <label class="radio-inline">
    <input type="radio" name="Q2G1" class="radio" onClick="Gender(1)" id="Q2G1Boys"
                           value="<?php echo set_value('Q2G1', 1) ?>" <?php if (isset($data['Q2G1'])) echo $data['Q2G1'] == 1 ? "checked" : "" ?>/>
    Only boys </label>
    <label class="radio-inline">
    <input type="radio" name="Q2G1" class="radio" onClick="Gender(2)" id="Q2G1Girls"
                           value="<?php echo set_value('Q2G1', 2) ?>" <?php if (isset($data['Q2G1'])) echo $data['Q2G1'] == 2 ? "checked" : "" ?>/>
    Only girls </label>
    <label class="radio-inline">
    <input type="radio" name="Q2G1" class="radio" onClick="Gender(3)" id="Q2G1Mixed"
                           value="<?php echo set_value('Q2G1', 3) ?>" <?php if (isset($data['Q2G1'])) echo $data['Q2G1'] == 3 ? "checked" : "" ?>/>
    Mixed/Co-education </label>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label for="username" class="control-label"><span class="cube">3</span>Which board of education does the school follow? <a class="tt"
                                 data-tooltip="For Other: For example: school-specific curriculum board of education, open learning, etc"><span
                            class="badge">?</span></a></label>
  <div class="answer-item radio-item">
    <label class="radio">
    <input type="radio" class="radio" onClick="StateValidation(1)" name="Q3G1"
                           value="<?php echo set_value('Q3G1', 1) ?>" <?php if (isset($data['Q3G1'])) echo $data['Q3G1'] == 1 ? "checked" : "" ?>>
    State board of education </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q3G1" onClick="StateValidation(2)"
                           value="<?php echo set_value('Q3G1', 2) ?>" <?php if (isset($data['Q3G1'])) echo $data['Q3G1'] == 2 ? "checked" : "" ?>>
    Central Board of Secondary Education </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q3G1" onClick="StateValidation(2)"
                           value="<?php echo set_value('Q3G1', 3) ?>" <?php if (isset($data['Q3G1'])) echo $data['Q3G1'] == 3 ? "checked" : "" ?>>
    Indian Certificate of Secondary Education </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q3G1" onClick="StateValidation(2)"
                           value="<?php echo set_value('Q3G1', 4) ?>" <?php if (isset($data['Q3G1'])) echo $data['Q3G1'] == 4 ? "checked" : "" ?>>
    International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE)
    combination </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q3G1" onClick="StateValidation(3)"
                           value="<?php echo set_value('Q3G1', 5) ?>" <?php if (isset($data['Q3G1'])) echo $data['Q3G1'] == 5 ? "checked" : "" ?>>
    Others </label>
    <input type="text" id="Q3G1O" name="Q3G1O"
                       placeholder="<?php if (isset($data['Q3G1O'])) echo $data['Q3G1O'] ?>"
                       value="<?php echo set_value('Q3G1O'); ?>"<?php
                if (isset($data['Q3G1']))
                    echo "readonly"; ?>/>
  </div>
</div>
<div class="clearfix">&nbsp;</div>

<?php
        if (isset($data['Q3G1'])){
        if ($data['Q3G1'] == 1){
        ?>
<div class="form-group" id="Q3G2">
  <?php } else { ?>
  <div class="form-group" id="Q3G2" style="display: none;">
    <?php }
                } else { ?>
    <div class="form-group" id="Q3G2" style="display: none;">
      <?php } ?>
      <label class="control-label"><span class="cube">3(a)</span> Select State for Board of Education: </label>
      <div class="form-group row">
        <?php if (empty($data["Q3G2"])) $data['Q3G2'] = 0;
                        echo form_dropdown('Q3G2', $states, set_value('Q3G2', $data["Q3G2"]), array('class' => 'form-control', 'id' => 'select')); ?>
      </div>
    </div>
    <input type="hidden" id="state" value="<?php if (isset($school['state'])) echo $school['state']; ?>">
    <div class="clearfix">&nbsp;</div>
    <div class="form-group">
      <label class="control-label"><span class="cube">4(a)</span> What is the total permanent population of the school? <a class="tt"
                                         data-tooltip="Permanent members are students, teachers, non-teaching staff such as technical and administrative staff, guards, etc."><span
                                    class="badge">?</span></a></label>
      <div class="form-group row">
        <div class="col-xs-2"></div>
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
          <input class="form-control space-textbox" id="male" type="number" min="0"
                                   onKeyUp="CalculateStudent()" onChange="CalculateStudent()" name="Q4G1S1"
                                   placeholder="<?php if (isset($data['Q4G1S1'])) echo $data['Q4G1S1'] ?>"
                                   value="<?php echo set_value('Q4G1S1'); ?>"<?php if (isset($data['Q2G1'])) if ($data['Q2G1'] == 2) echo "disabled"; ?>/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="female" type="number" min="0"
                                   onKeyUp="CalculateStudent()" onChange="CalculateStudent()" name="Q4G1S2"
                                   placeholder="<?php if (isset($data['Q4G1S2'])) echo $data['Q4G1S2'] ?>"
                                   value="<?php echo set_value('Q4G1S2'); ?>" <?php if (isset($data['Q2G1'])) if ($data['Q2G1'] == 1) echo "disabled"; ?> />
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="mixed" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G1S3"
                                   placeholder="<?php if (isset($data['Q4G1S3'])) echo $data['Q4G1S3'] ?>"
                                   value="<?php echo set_value('Q4G1S3'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label for="ex1">Teachers</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="teacherMale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G2S1"
                                   placeholder="<?php if (isset($data['Q4G2S1'])) echo $data['Q4G2S1'] ?>"
                                   value="<?php echo set_value('Q4G2S1'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="teacherFemale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G2S2"
                                   placeholder="<?php if (isset($data['Q4G2S2'])) echo $data['Q4G2S2'] ?>"
                                   value="<?php echo set_value('Q4G2S2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="teacherMixed" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G2S3"
                                   placeholder="<?php if (isset($data['Q4G2S3'])) echo $data['Q4G2S3'] ?>"
                                   value="<?php echo set_value('Q4G2S3'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label for="ex1">Non-teaching Staff</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="NteacherMale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G3S1"
                                   placeholder="<?php if (isset($data['Q4G3S1'])) echo $data['Q4G3S1'] ?>"
                                   value="<?php echo set_value('Q4G3S1'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="NteacherFemale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G3S2"
                                   placeholder="<?php if (isset($data['Q4G3S2'])) echo $data['Q4G3S2'] ?>"
                                   value="<?php echo set_value('Q4G3S2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="NteacherMixed" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G3S3"
                                   placeholder="<?php if (isset($data['Q4G3S3'])) echo $data['Q4G3S3'] ?>"
                                   value="<?php echo set_value('Q4G3S3'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label for="ex1">Sub-Total</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="subMale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G4S1"
                                   placeholder="<?php if (isset($data['Q4G4S1'])) echo $data['Q4G4S1'] ?>"
                                   value="<?php echo set_value('Q4G4S1'); ?>" readonly/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" id="subFemale" onKeyUp="CalculateStudent()"
                                   onChange="CalculateStudent()" type="number" min="0" name="Q4G4S2"
                                   placeholder="<?php if (isset($data['Q4G4S2'])) echo $data['Q4G4S2'] ?>"
                                   value="<?php echo set_value('Q4G4S2'); ?>" readonly/>
        </div>
        <div class="col-xs-2">
          <?php
                            if (empty($data['Q4G4S3']))
                                $data['Q4G4S3'] = 0;
                            $attribs = array("class" => "form-control", "id" => "subMix", "onkeyup" => "CalculateStudent()", "type" => "number", "name" => "Q4G4S3", "readonly" => "true");
                            echo form_input('Q4G4S3', $data['Q4G4S3'], $attribs);
                            ?>
        </div>
      </div>
      <div class="clearfix">&nbsp;</div>
      <div class=" form-group">
        <label for="ex1"><span class="cube">4(b)</span>How many visitors visit your school? <a class="tt"
                                                                                                              data-tooltip="Visitors are students from other schools, teachers from other schools, technicians, NGOs, contractors and laborers, vendors, chief guests, etc . Please provide the average number of visitors for any month, between August - October."><span
                                        class="badge">?</span></a></label>
        <input class="form-control" id="Q5G1" type="number" min="0" name="Q5G1"
                               placeholder="<?php if (isset($data['Q5G1'])) echo $data['Q5G1'] ?>" readonly
                               value="00"/>
      </div>
      <div class="form-group">
        <label><span class="cube">5</span>What is the total number of working days of your school in a
        year? <a class="tt" data-tooltip="On an average, a day scholar school runs for 220-230 days in a year."><span class="badge">?</span></a> </label>
        <input class="form-control" id="Q6G1" type="number" min="0" max="366" name="Q6G1"
                               placeholder="<?php if (isset($data['Q6G1'])) echo $data['Q6G1'] ?>" readonly
                               value="00"/>
      </div>
      <div id='playerzpumcZwzBZKD'></div>
      <div class="clearfix">&nbsp;</div>
      <div class="form-group">
        <label><span class="cube">6</span>Please select the month(s) in which the GSP audit was carried
        out? <a class="tt"d
                                 data-tooltip="GSP Waste Transformers will continue from Dec 2020 to Jan 2021."><span
                            class="badge">?</span></a></label>
        <ul class="list-inline">
          <li style="width:200px;">Months</li>
          <li>
            <label for="ex3">Jan</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G1"
                                       value="<?php echo set_value('Q7G1', 'true'); ?>" checked />
          </li>
          <li>
            <label for="ex3">Feb</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G2"
                                       value="<?php echo set_value('Q7G2', 'true'); ?>" <?php if (isset($data['Q7G2'])) echo "checked" ?> />
          </li>
          <li>
            <label for="ex3">Mar</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G3"
                                       value="<?php echo set_value('Q7G3', 'true'); ?>" <?php if (isset($data['Q7G3'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">April</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G4"
                                       value="<?php echo set_value('Q7G4', 'true'); ?>" <?php if (isset($data['Q7G4'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">May</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G5"
                                       value="<?php echo set_value('Q7G5', 'true'); ?>" <?php if (isset($data['Q7G5'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">June</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G6"
                                       value="<?php echo set_value('Q7G6', 'true'); ?>" <?php if (isset($data['Q7G6'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">July</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G7"
                                       value="<?php echo set_value('Q7G7', 'true'); ?>" <?php if (isset($data['Q7G7'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">Aug</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G8"
                                       value="<?php echo set_value('Q7G8', 'true'); ?>" <?php if (isset($data['Q7G8'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">Sept</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G9"
                                       value="<?php echo set_value('Q7G9', 'true'); ?>" <?php if (isset($data['Q7G9'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">Oct</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G10"
                                       value="<?php echo set_value('Q7G10', 'true'); ?>" <?php if (isset($data['Q7G10'])) echo "checked" ?>/>
          </li>
          <li>
            <label for="ex3">Nov</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G11"
                                       value="<?php echo set_value('Q7G11', 'true'); ?>" <?php if (isset($data['Q7G11'])) echo "checked" ?> />
          </li>
          <li>
            <label for="ex3">Dec</label>
            <br/>
            <input type="checkbox" class="Question7G1" name="Q7G12"
                                       value="<?php echo set_value('Q7G12', 'true'); ?>" checked />
          </li>
        </ul>
      </div>
      <div class="clearfix">&nbsp;</div>
      <div class="form-group">
        <label class="control-label"><span class="cube">7</span>Where is the school located? <a
                                    class="tt"
                                    data-tooltip="Urban area has a municipality/corporation/cantonment board/notified town area, a minimum population of 5000 and a density of population of at least 400 per square kilometer. Any area which is not covered by the definition of Urban is Rural."><span
                                        class="badge">?</span></a></label>
        <div class="radio">
          <label>
          <input type="radio" name="Q8G1"
                                       value="<?php echo set_value('Q8G1', 1) ?>" <?php if (isset($data['Q8G1'])) echo $data['Q8G1'] == 1 ? "checked" : "" ?>>
          Urban Area </label>
        </div>
        <div class="radio">
          <label>
          <input type="radio" name="Q8G1"
                                       value="<?php echo set_value('Q8G1', 2) ?>" <?php if (isset($data['Q8G1'])) echo $data['Q8G1'] == 2 ? "checked" : "" ?>>
          Rural Area </label>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label class="control-label"><span class="cube">8</span>What type is your school?
        <!-- <a class="tt" data-tooltip=""><span class="badge">?</span></a> -->
        </label>
        <div class="radio">
          <label>
          <input type="radio" name="Q9G1"
                                       value="<?php echo set_value('Q9G1', 1) ?>" <?php if (isset($data['Q9G1'])) echo $data['Q9G1'] == 1 ? "checked" : "" ?>>
          Government School</label>
        </div>
        <div class="radio">
          <label>
          <input type="radio" name="Q9G1"
                                       value="<?php echo set_value('Q9G1', 2) ?>" <?php if (isset($data['Q9G1'])) echo $data['Q9G1'] == 2 ? "checked" : "" ?>>
          Government – Aided School</label>
        </div>
        <div class="radio">
          <label>
          <input type="radio" name="Q9G1"
                                       value="<?php echo set_value('Q9G1', 3) ?>" <?php if (isset($data['Q9G1'])) echo $data['Q9G1'] == 3 ? "checked" : "" ?>>
          Private School</label>
        </div>
      </div>
      <div class="text-center">
        <button type="button" class="org-btn" id="btnGeneralPrevious">Previous</button>
        <button type="submit" id="movenextbtn" value="movenext" accesskey="n"
                                class="submit button">Next </button>
        <button type="button" class="submit button" id="generalsave">Save and Resume Later</button>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<script>
            $(document).ready(function () {
                $('#btnGeneralPrevious').on('click', function (data) {
                    var fd = $('#general-form').serialize();
                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
							if($('.Question7G1:checked').length<=0){
                             alert("Please Fill The Question 7.");
                            }
                           else{
                             window.location.href = "<?php echo base_url('WasteTransformers'); ?>";
                            }
                            
                        }
                    });
                });
				
				/**This Code Used For Submit Form Through Menu**/
					$('ol li').click(function(){
					  var fd = $('#general-form').serialize();
							$.ajax({
								type: 'POST',
								url: '<?php echo base_url('previous/generalajax') ?>',
								data: fd,
								success: function (data) {
									<!--window.location.href = "<?php echo base_url('general'); ?>";-->
								}
							});
					});
				
				
                $('#generalsave').on('click', function (data) {
                    var fd = $('#general-form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
                            window.location.href = "<?php echo base_url('logout'); ?>";
                        }
                    });
                });
            });
	     $(document).ready(function(){
			   var selectedValue="<?php echo getFiled("Q10G1",$this->session->userdata('USER_ID')); ?>";
			   var value="<?php echo getFiled("Q1G2",$this->session->userdata('USER_ID')); ?>";
			   if(selectedValue==="2"){
			     if(value==='8'){
			       $("#Q1G2 option").removeAttr();	     
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else if(value==='9'){  
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else{
			     $("#Q1G2 option[value='8']").attr("selected",true);}
			   }
			   
			   if(selectedValue==="1"){$("#Q1G2 option[value='5']").attr("selected",true);}
			   else if(selectedValue==="3"){
			      if(value==='9'){
			       $("#Q1G2 option").removeAttr();	      
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else if(value==='10'){  
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else if(value==='11'){  
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else{
			     $("#Q1G2 option[value='10']").attr("selected",true);}  
			   }
			   else if(selectedValue==="4"){
			     if(value==='11'){
			       $("#Q1G2 option").removeAttr();	     
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else if(value==='12'){  
			       $("#Q1G2 option[value='"+value+"']").attr("selected",true);}
				 else{
			     $("#Q1G2 option[value='12']").attr("selected",true);}  
			   }
			});
		    $("#movenextbtn").click(function(){ 
			if($("input[name='Q7G1']").length==0 && $("input[name='Q7G2']").length==0 && $("input[name='Q7G3']").length==0 && $("input[name='Q7G4']").length==0 && $("input[name='Q7G5']").length==0 && $("input[name='Q7G6']").length==0 && $("input[name='Q7G7']").length==0 && $("input[name='Q7G8']").length==0 && $("input[name='Q7G9']").length==0 && $("input[name='Q7G10']").length==0 && $("input[name='Q7G11']").length==0 && $("input[name='Q7G12']").length==0){
			 alert("Q6:Please select the month(s) in which the GSP audit was carried out?");
			}
			});
        </script>
	
	<script>
		$("#movenextbtn").click(function(e){
      if($("input[name='Q7G1']").prop('checked') == false && $("input[name='Q7G2']").prop('checked') == false && $("input[name='Q7G3']").prop('checked') == false && $("input[name='Q7G4']").prop('checked') == false && $("input[name='Q7G5']").prop('checked') == false && $("input[name='Q7G6']").prop('checked') == false && $("input[name='Q7G7']").prop('checked') == false && $("input[name='Q7G8']").prop('checked') == false && $("input[name='Q7G9']").prop('checked') == false && $("input[name='Q7G10']").prop('checked') == false && $("input[name='Q7G11']").prop('checked') == false && $("input[name='Q7G12']").prop('checked') == false){
           alert("6 Please select the month(s) in which the GSP audit was carried out.");
             e.preventDefault();
	      if(e.isDefaultPrevented()){
	        setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	      }
          }
          });
	</script>
<!---<script src="http://jwpsrv.com/library/A7o4ns39EeS3agp+lcGdIw.js"></script>-->
	
	
	<script type="text/javascript">
  
 function hello(){
  var selectedValue="<?php echo getFiled("Q10G1",$this->session->userdata('USER_ID')); ?>";

  var matchvalue = $('#Q1G2').val();
  
      if(selectedValue == '1')
      {
             
            if(matchvalue=='1' || matchvalue=='2' || matchvalue=='3' || matchvalue=='4' || matchvalue=='5') 
            {
                

            }else {
               alert('You select your school a primary school');
                  location.reload();

            }

      }


      if(selectedValue == '2')
      {
             
            if(matchvalue=='6' || matchvalue=='7' || matchvalue=='8') 
            {
                

            }else {
               alert('You select your school an elementary school');
                  location.reload();

            }

      }


      if(selectedValue == '3')
      {
             
            if(matchvalue=='9' || matchvalue=='10') 
            {
                

            }else {
             alert('You select your school a secondary school');
                  location.reload();

            }

      }


      if(selectedValue == '4')
      {
             
            if(matchvalue=='11' || matchvalue=='12') 
            {
                

            }else {
             alert('You select your school a higher secondary school');
                  location.reload();

            }

      }
         

        
 }
      


</script>
