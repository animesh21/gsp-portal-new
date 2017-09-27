<?php $this->load->view('header'); ?>

<div class="container">
<div class="content-form">
<div class="log-nav">
  <div class="welcome">Welcome, <span
                        style="font-weight:bold"><?php echo $this->session->userdata('USERNAME'); ?></span></div>
  <ul>
    <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
    <li>|</li>
    <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
  </ul>
</div>
<div id="pprg" class="newprog progress" style="text-align:center">
  <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
</div>
<div class="intro">
  <h1>WASTE</h1>
  <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
                            src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div>
</div>
<p> Schools can provide excellent educational opportunities for creating awareness about waste and its
  management.<br>
  Waste reduction initiatives save natural resources, energy and landfill space.<br>
  Reducing, reusing, recycling waste material will improve the economic and environmental performance of the
  school.<br>
  The school's waste management programme has the potential to transform the school environment into a
  laboratory for learning.<br>
  It also provides numerous opportunities for the students to understand this issue and its implications on
  the local environment.<br>
  <br>
  <b> The unit of measurement to be used in the Waste section is Kilogram (kg).</b></p>
<?php echo form_open('waste/set', array('id' => 'waste')); ?>
<div class="form-group">
  <label>
  <h6>Task 1: Choose your Waste Audit Team.</h6>
  </label>
  <br>
  The housekeeping and cleaning staff of your school shall be the core members of your team, as you will have
  to enlist their help at every task. A teacher with interest in waste and five to 10 students will be ideal
  for your team. Administrative staff is important as they will provide the permissions required for the
  housekeeping staff to work with you. </div>
<br>
<input type="hidden" id="Q4G4S3" value="<?php if (isset($other['Q4G4S3'])) echo $other['Q4G4S3']; ?>">
<input type="hidden" id="Q4A1" value="<?php if (isset($other['Q4A1'])) echo $other['Q4A1']; ?>">
<input type="hidden" id="Q4L4" value="<?php if (isset($other['Q4L4'])) echo $other['Q4L4']; ?>">
<input type="hidden" id="Q4L6" value="<?php if (isset($other['Q4L6'])) echo $other['Q4L6']; ?>">
<input type="hidden" id="Q4F1" value="<?php if (isset($other['Q4F1'])) echo $other['Q4F1']; ?>">
<input type="hidden" id="Q4W2" value="<?php if (isset($other['Q4W2'])) echo $other['Q4W2']; ?>">
<input type="hidden" id="Q6A2S1T1" value="<?php if (isset($other['Q6A2S1T1'])) echo $other['Q6A2S1T1']; ?>">
<input type="hidden" id="Q6A2S1T2" value="<?php if (isset($other['Q6A2S1T2'])) echo $other['Q6A2S1T2']; ?>">
<input type="hidden" id="Q6A2S1T3" value="<?php if (isset($other['Q6A2S1T3'])) echo $other['Q6A2S1T3']; ?>">
<input type="hidden" id="Q6A2S1T4" value="<?php if (isset($other['Q6A2S1T4'])) echo $other['Q6A2S1T4']; ?>">
<input type="hidden" id="Q6A2S1T5" value="<?php if (isset($other['Q6A2S1T5'])) echo $other['Q6A2S1T5']; ?>">
<input type="hidden" id="Q6A2S1T6" value="<?php if (isset($other['Q6A2S1T6'])) echo $other['Q6A2S1T6']; ?>">
<div class="form-group">
<label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
<div class="form-group row">
  <div class="col-xs-1"></div>
  <div class="col-xs-3">
    <label>First Name</label>
  </div>
  <div class="col-xs-3">
    <label>Last Name</label>
  </div>
  <div class="col-xs-3">
    <label>Email ID</label>
  </div>
</div></div>
<div class="form-group row">
  <div class="col-xs-1"> 1</div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S1" type="text" name="Q1Wa1S1"
                           placeholder="<?php if (isset($data['Q1Wa1S1'])) echo $data['Q1Wa1S1']; ?>"
                           value="<?php echo set_value('Q1Wa1S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S3" type="text" name="Q1Wa1S3"
                           placeholder="<?php if (isset($data['Q1Wa1S3'])) echo $data['Q1Wa1S3']; ?>"
                           value="<?php echo set_value('Q1Wa1S3'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('email'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S2" type="email" name="Q1Wa1S2"
                           placeholder="<?php if (isset($data['Q1Wa1S2'])) echo $data['Q1Wa1S2']; ?>"
                           value="<?php echo set_value('Q1Wa1S2'); ?>"/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 2</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1Wa2S1" type="text" name="Q1Wa2S1"
                           placeholder="<?php if (isset($data['Q1Wa2S1'])) echo $data['Q1Wa2S1'] ?>"
                           value="<?php echo set_value('Q1Wa2S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa2S3" type="text" name="Q1Wa2S3"
                           placeholder="<?php if (isset($data['Q1Wa2S3'])) echo $data['Q1Wa2S3']; ?>"
                           value="<?php echo set_value('Q1Wa2S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1Wa2S2" type="email" name="Q1Wa2S2"
                           placeholder="<?php if (isset($data['Q1Wa2S2'])) echo $data['Q1Wa2S2'] ?>"
                           value="<?php echo set_value('Q1Wa2S2'); ?>"/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 3</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1Wa3S1" type="text" name="Q1Wa3S1"
                           placeholder="<?php if (isset($data['Q1Wa3S1'])) echo $data['Q1Wa3S1'] ?>"
                           value="<?php echo set_value('Q1Wa3S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa3S3" type="text" name="Q1Wa3S3"
                           placeholder="<?php if (isset($data['Q1Wa3S3'])) echo $data['Q1Wa3S3']; ?>"
                           value="<?php echo set_value('Q1Wa3S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1Wa3S2" type="email" name="Q1Wa3S2"
                           placeholder="<?php if (isset($data['Q1Wa3S2'])) echo $data['Q1Wa3S2'] ?>"
                           value="<?php echo set_value('Q1Wa3S2'); ?>"/>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Administrative staff (maximum of five staff can be part of the
  team):</label>
  <div class="form-group row">
    <div class="col-xs-1"></div>
    <div class="col-xs-3">
      <label>First Name</label>
    </div>
    <div class="col-xs-3">
      <label>Last Name</label>
    </div>
    <div class="col-xs-3">
      <label>Email ID</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 1</div>
    <div class="col-xs-3"> <?php echo form_error('name1'); ?>
      <input class="form-control space-textbox" id="Q2Wa1S1" type="text" name="Q2Wa1S1"
                               placeholder="<?php if (isset($data['Q2Wa1S1'])) echo $data['Q2Wa1S1'] ?>"
                               value="<?php echo set_value('Q2Wa1S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa1S3" type="text" name="Q2Wa1S3"
                               placeholder="<?php if (isset($data['Q2Wa1S3'])) echo $data['Q2Wa1S3'] ?>"
                               value="<?php echo set_value('Q2Wa1S3'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2Wa1S2" type="email" name="Q2Wa1S2"
                               placeholder="<?php if (isset($data['Q2Wa1S2'])) echo $data['Q2Wa1S2'] ?>"
                               value="<?php echo set_value('Q2Wa1S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa2S1" type="text" name="Q2Wa2S1"
                               placeholder="<?php if (isset($data['Q2Wa2S1'])) echo $data['Q2Wa2S1'] ?>"
                               value="<?php echo set_value('Q2Wa2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa2S3" type="text" name="Q2Wa2S3"
                               placeholder="<?php if (isset($data['Q2Wa2S3'])) echo $data['Q2Wa2S3'] ?>"
                               value="<?php echo set_value('Q2Wa2S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa2S2" type="email" name="Q2Wa2S2"
                               placeholder="<?php if (isset($data['Q2Wa2S2'])) echo $data['Q2Wa2S2'] ?>"
                               value="<?php echo set_value('Q2Wa2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa3S1" type="text" name="Q2Wa3S1"
                               placeholder="<?php if (isset($data['Q2Wa3S1'])) echo $data['Q2Wa3S1'] ?>"
                               value="<?php echo set_value('Q2Wa3S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa3S3" type="text" name="Q2Wa3S3"
                               placeholder="<?php if (isset($data['Q2Wa3S3'])) echo $data['Q2Wa3S3'] ?>"
                               value="<?php echo set_value('Q2Wa3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa3S2" type="email" name="Q2Wa3S2"
                               placeholder="<?php if (isset($data['Q2Wa3S2'])) echo $data['Q2Wa3S2'] ?>"
                               value="<?php echo set_value('Q2Wa3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa4S1" type="text" name="Q2Wa4S1"
                               placeholder="<?php if (isset($data['Q2Wa4S1'])) echo $data['Q2Wa4S1']; ?>"
                               value="<?php echo set_value('Q2Wa4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa4S3" type="text" name="Q2Wa4S3"
                               placeholder="<?php if (isset($data['Q2Wa4S3'])) echo $data['Q2Wa4S3']; ?>"
                               value="<?php echo set_value('Q2Wa4S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa4S2" type="email" name="Q2Wa4S2"
                               placeholder="<?php if (isset($data['Q2Wa4S2'])) echo $data['Q2Wa4S2']; ?>"
                               value="<?php echo set_value('Q2Wa4S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa5S1" type="text" name="Q2Wa5S1"
                               placeholder="<?php if (isset($data['Q2Wa5S1'])) echo $data['Q2Wa5S1'] ?>"
                               value="<?php echo set_value('Q2Wa5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa5S3" type="text" name="Q2Wa5S3"
                               placeholder="<?php if (isset($data['Q2Wa5S3'])) echo $data['Q2Wa5S3'] ?>"
                               value="<?php echo set_value('Q2Wa5S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa5S2" type="email" name="Q2Wa5S2"
                               placeholder="<?php if (isset($data['Q2Wa5S2'])) echo $data['Q2Wa5S2'] ?>"
                               value="<?php echo set_value('Q2Wa5S2'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Students (maximum of ten students can be part of the team):</label>
  <div class="form-group row">
    <div class="col-xs-1"></div>
    <div class="col-xs-3">
      <label>First Name</label>
    </div>
    <div class="col-xs-3">
      <label>Last Name</label>
    </div>
    <div class="col-xs-3">
      <label>Grade</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 1</div>
    <div class="col-xs-3"> <?php echo form_error('name2'); ?>
      <input class="form-control space-textbox" id="Q3Wa1S1" type="text" name="Q3Wa1S1"
                               placeholder="<?php if (isset($data['Q3Wa1S1'])) echo $data['Q3Wa1S1'] ?>"
                               value="<?php echo set_value('Q3Wa1S1'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3Wa1S2" type="text" name="Q3Wa1S2"
                               placeholder="<?php if (isset($data['Q3Wa1S2'])) echo $data['Q3Wa1S2'] ?>"
                               value="<?php echo set_value('Q3Wa1S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa1S3" type="text" name="Q3Wa1S3"
                               placeholder="<?php if (isset($data['Q3Wa1S3'])) echo $data['Q3Wa1S3'] ?>"
                               value="<?php echo set_value('Q3Wa1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa2S1" type="text" name="Q3Wa2S1"
                               placeholder="<?php if (isset($data['Q3Wa2S1'])) echo $data['Q3Wa2S1'] ?>"
                               value="<?php echo set_value('Q3Wa2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa2S2" type="text" name="Q3Wa2S2"
                               placeholder="<?php if (isset($data['Q3Wa2S2'])) echo $data['Q3Wa2S2'] ?>"
                               value="<?php echo set_value('Q3Wa2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa2S3" type="text" name="Q3Wa2S3"
                               placeholder="<?php if (isset($data['Q3Wa2S3'])) echo $data['Q3Wa2S3'] ?>"
                               value="<?php echo set_value('Q3Wa2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa3S1" type="text" name="Q3Wa3S1"
                               placeholder="<?php if (isset($data['Q3Wa3S1'])) echo $data['Q3Wa3S1'] ?>"
                               value="<?php echo set_value('Q3Wa3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa3S2" type="text" name="Q3Wa3S2"
                               placeholder="<?php if (isset($data['Q3Wa3S2'])) echo $data['Q3Wa3S2'] ?>"
                               value="<?php echo set_value('Q3Wa3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa3S3" type="text" name="Q3Wa3S3"
                               placeholder="<?php if (isset($data['Q3Wa3S3'])) echo $data['Q3Wa3S3'] ?>"
                               value="<?php echo set_value('Q3Wa3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa4S1" type="text" name="Q3Wa4S1"
                               placeholder="<?php if (isset($data['Q3Wa4S1'])) echo $data['Q3Wa4S1'] ?>"
                               value="<?php echo set_value('Q3Wa4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa4S2" type="text" name="Q3Wa4S2"
                               placeholder="<?php if (isset($data['Q3Wa4S2'])) echo $data['Q3Wa4S2'] ?>"
                               value="<?php echo set_value('Q3Wa4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa4S3" type="text" name="Q3Wa4S3"
                               placeholder="<?php if (isset($data['Q3Wa4S3'])) echo $data['Q3Wa4S3'] ?>"
                               value="<?php echo set_value('Q3Wa4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa5S1" type="text" name="Q3Wa5S1"
                               placeholder="<?php if (isset($data['Q3Wa5S1'])) echo $data['Q3Wa5S1'] ?>"
                               value="<?php echo set_value('Q3Wa5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa5S2" type="text" name="Q3Wa5S2"
                               placeholder="<?php if (isset($data['Q3Wa5S2'])) echo $data['Q3Wa5S2'] ?>"
                               value="<?php echo set_value('Q3Wa5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa5S3" type="text" name="Q3Wa5S3"
                               placeholder="<?php if (isset($data['Q3Wa5S3'])) echo $data['Q3Wa5S3'] ?>"
                               value="<?php echo set_value('Q3Wa5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 6</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa6S1" type="text" name="Q3Wa6S1"
                               placeholder="<?php if (isset($data['Q3Wa6S1'])) echo $data['Q3Wa6S1'] ?>"
                               value="<?php echo set_value('Q3Wa6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa6S2" type="text" name="Q3Wa6S2"
                               placeholder="<?php if (isset($data['Q3Wa6S2'])) echo $data['Q3Wa6S2'] ?>"
                               value="<?php echo set_value('Q3Wa6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa6S3" type="text" name="Q3Wa6S3"
                               placeholder="<?php if (isset($data['Q3Wa6S3'])) echo $data['Q3Wa6S3'] ?>"
                               value="<?php echo set_value('Q3Wa6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 7</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa7S1" type="text" name="Q3Wa7S1"
                               placeholder="<?php if (isset($data['Q3Wa7S1'])) echo $data['Q3Wa7S1'] ?>"
                               value="<?php echo set_value('Q3Wa7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa7S2" type="text" name="Q3Wa7S2"
                               placeholder="<?php if (isset($data['Q3Wa7S2'])) echo $data['Q3Wa7S2'] ?>"
                               value="<?php echo set_value('Q3Wa7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa7S3" type="text" name="Q3Wa7S3"
                               placeholder="<?php if (isset($data['Q3Wa7S3'])) echo $data['Q3Wa7S3'] ?>"
                               value="<?php echo set_value('Q3Wa7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 8</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa8S1" type="text" name="Q3Wa8S1"
                               placeholder="<?php if (isset($data['Q3Wa8S1'])) echo $data['Q3Wa8S1'] ?>"
                               value="<?php echo set_value('Q3Wa8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa8S2" type="text" name="Q3Wa8S2"
                               placeholder="<?php if (isset($data['Q3Wa8S2'])) echo $data['Q3Wa8S2'] ?>"
                               value="<?php echo set_value('Q3Wa8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa8S3" type="text" name="Q3Wa8S3"
                               placeholder="<?php if (isset($data['Q3Wa8S3'])) echo $data['Q3Wa8S3'] ?>"
                               value="<?php echo set_value('Q3Wa8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 9</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa9S1" type="text" name="Q3Wa9S1"
                               placeholder="<?php if (isset($data['Q3Wa9S1'])) echo $data['Q3Wa9S1'] ?>"
                               value="<?php echo set_value('Q3Wa9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa9S2" type="text" name="Q3Wa9S2"
                               placeholder="<?php if (isset($data['Q3Wa9S2'])) echo $data['Q3Wa9S2'] ?>"
                               value="<?php echo set_value('Q3Wa9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa9S3" type="text" name="Q3Wa9S3"
                               placeholder="<?php if (isset($data['Q3Wa9S3'])) echo $data['Q3Wa9S3'] ?>"
                               value="<?php echo set_value('Q3Wa9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 10</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa10S1" type="text" name="Q3Wa10S1"
                               placeholder="<?php if (isset($data['Q3Wa10S1'])) echo $data['Q3Wa10S1'] ?>"
                               value="<?php echo set_value('Q3Wa10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa10S2" type="text" name="Q3Wa10S2"
                               placeholder="<?php if (isset($data['Q3Wa10S2'])) echo $data['Q3Wa10S2'] ?>"
                               value="<?php echo set_value('Q3Wa10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa10S3" type="text" name="Q3Wa10S3"
                               placeholder="<?php if (isset($data['Q3Wa10S3'])) echo $data['Q3Wa10S3'] ?>"
                               value="<?php echo set_value('Q3Wa10S3'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 2: What is the waste segregation system in your school?</h6>
  </label>
  <br>
  Segregation means sorting. Let’s understand the waste segregation system because the amount of waste
  recycled or reused will depend on the method of collection. To understand the waste segregation system
  of your school, fill the table below.<br>
  <br>
  <b>To collect data:</b> Students will have to survey the waste collection area and talk to the
  house-keeping staff to know whether waste is segregated in the school and in what quantity. </div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">1</span>Does your school segregate solid waste?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q4Wa1" onClick="WasteSegregate(1)" class="radio" id="Q4Wa1"
                               value="<?php echo set_value('Q4Wa1', 'Y') ?>" <?php if (isset($data['Q4Wa1'])) echo $data['Q4Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q4Wa1" onClick="WasteSegregate(2)" class="Q4Wa1" id="Q4Wa1"
                               value="<?php echo set_value('Q4Wa1', 'N') ?>" <?php if (isset($data['Q4Wa1'])) echo $data['Q4Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<?php
            if (isset($data['Q4Wa1']))
                if ($data['Q4Wa1'] == 'Y') {
                    ?>
<div class="form-group row" id="Q1A">
  <label><span class="cube">1(a)</span>Who segregates the waste at source? </label>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S1"
                                       value="<?php echo set_value('Q4Wa2S1', 1); ?>" <?php if (isset($data['Q4Wa2S1'])) echo "checked" ?>>
    Students and teachers</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S2"
                                       value="<?php echo set_value('Q4Wa2S2', 1); ?>" <?php if (isset($data['Q4Wa2S2'])) echo "checked" ?>>
    Housekeeping (Sweeper)</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S3"
                                       value="<?php echo set_value('Q4Wa2S3', 1); ?>" <?php if (isset($data['Q4Wa2S3'])) echo "checked" ?>>
    Gardener</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S4"
                                          value="<?php echo set_value('Q4Wa2S4', 1); ?>" <?php if (isset($data['Q4Wa2S4'])) echo "checked" ?>>
    Ragpickers </label>
  </div>
  <div class="">
    <label>Other: &nbsp
    <input type="text" name="Q4Wa2S5" value="<?php echo set_value('Q4Wa2S5'); ?>"
                                       placeholder="<?php if (isset($data['Q4Wa2S5'])) echo $data['Q4Wa2'] ?>">
    </label>
  </div>
</div>
<?php
                }
            ?>
<div class="form-group row" id="Q1A" style="display: none;">
  <label><span class="cube">1(a)</span>Who segregates the waste at source? </label>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S1"
                               value="<?php echo set_value('Q4Wa2S1', 1); ?>" <?php if (isset($data['Q4Wa2S1'])) echo "checked" ?>>
    Students and teachers</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S2"
                               value="<?php echo set_value('Q4Wa2S2', 1); ?>" <?php if (isset($data['Q4Wa2S2'])) echo "checked" ?>>
    Housekeeping (Sweeper)</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S3"
                               value="<?php echo set_value('Q4Wa2S3', 1); ?>" <?php if (isset($data['Q4Wa2S3'])) echo "checked" ?>>
    Gardener</label>
  </div>
  <div class="">
    <label>
    <input type="checkbox" name="Q4Wa2S4"
                               value="<?php echo set_value('Q4Wa2S4', 1); ?>" <?php if (isset($data['Q4Wa2S4'])) echo "checked" ?>>
    Ragpickers</label>
  </div>
  <div class="">
    <label>Other: &nbsp
    <input type="text" name="Q4Wa2S5" value="<?php echo set_value('Q4Wa2S5'); ?>"
                               placeholder="<?php if (isset($data['Q4Wa2S5'])) echo $data['Q4Wa2'] ?>">
    </label>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">2</span>How many categories does your school segregate waste into? <a
                            class="tt"
                            data-tooltip="Students will have to count the number of waste disposal points in the school as, for instance, one dustbin, two dustbins or more. If there are no dustbins, please say zero (o)"
                    ><span class="badge">?</span></a></label>
  <ul>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2"
                                   value="<?php echo set_value('Q4Wa2', 1) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 1 ? "checked" : "" ?>>
      Two </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2"
                                   value="<?php echo set_value('Q4Wa2', 2) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 2 ? "checked" : "" ?>>
      Three </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="Q4Wa2" id="Q4Wa2"
                                   value="<?php echo set_value('Q4Wa2', 3) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 3 ? "checked" : "" ?>>
      More than three </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">2(a)</span> How many categories does your school
  segregate waste into?</label>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Area </label>
    </div>
    <div class="col-xs-2">
      <label>No. of waste collection points with no bin </label>
    </div>
    <div class="col-xs-2">
      <label>No. of waste collection points with one bin (mixed waste) </label>
    </div>
    <div class="col-xs-2">
      <label>No. of waste collection points with two bins (wet & dry) </label>
    </div>
    <div class="col-xs-2">
      <label>No. of waste collection points with three bins or more </label>
    </div>
    <div class="col-xs-2">
      <label>Total no. of waste collection points </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Classrooms </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S1"
                               type="number" name="Q5Wa1S1"
                               placeholder="<?php if (isset($data['Q5Wa1S1'])) echo $data['Q5Wa1S1'] ?>"
                               value="<?php echo set_value('Q5Wa1S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S2"
                               type="number" name="Q5Wa1S2"
                               placeholder="<?php if (isset($data['Q5Wa1S2'])) echo $data['Q5Wa1S2'] ?>"
                               value="<?php echo set_value('Q5Wa1S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S3"
                               type="number" name="Q5Wa1S3"
                               placeholder="<?php if (isset($data['Q5Wa1S3'])) echo $data['Q5Wa1S3'] ?>"
                               value="<?php echo set_value('Q5Wa1S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S4"
                               type="number" name="Q5Wa1S4"
                               placeholder="<?php if (isset($data['Q5Wa1S4'])) echo $data['Q5Wa1S4'] ?>"
                               value="<?php echo set_value('Q5Wa1S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <?php
                        if (empty($data['Q5Wa1S5']))
                            $data['Q5Wa1S5'] = 0;
                        $attribs = array("class" => "form-control space-textbox", "id" => "Q5Wa1S5", "type" => "number", "name" => "Q5Wa1S5", "readonly" => "true");
                        echo form_input('Q5Wa1S5', $data['Q5Wa1S5'], $attribs);
                        ?>
      <!-- <input class="form-control space-textbox" id="Q5Wa1S5" type="number" name="Q5Wa1S5" placeholder="<?php if (isset($data['Q5Wa1S5'])) echo $data['Q5Wa1S5'] ?>" value="<?php echo set_value('Q5Wa1S5'); ?>" readonly/>
               -->
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Playgrounds </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S1"
                               type="number" name="Q5Wa2S1"
                               placeholder="<?php if (isset($data['Q5Wa2S1'])) echo $data['Q5Wa2S1'] ?>"
                               value="<?php echo set_value('Q5Wa2S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S2"
                               type="number" name="Q5Wa2S2"
                               placeholder="<?php if (isset($data['Q5Wa2S2'])) echo $data['Q5Wa2S2'] ?>"
                               value="<?php echo set_value('Q5Wa2S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S3"
                               type="number" name="Q5Wa2S3"
                               placeholder="<?php if (isset($data['Q5Wa2S3'])) echo $data['Q5Wa2S3'] ?>"
                               value="<?php echo set_value('Q5Wa2S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S4"
                               type="number" name="Q5Wa2S4"
                               placeholder="<?php if (isset($data['Q5Wa2S4'])) echo $data['Q5Wa2S4'] ?>"
                               value="<?php echo set_value('Q5Wa2S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa2S5" type="number" name="Q5Wa2S5"
                               placeholder="<?php if (isset($data['Q5Wa2S5'])) echo $data['Q5Wa2S5'] ?>"
                               value="<?php echo set_value('Q5Wa2S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Common area </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S1"
                               type="number" name="Q5Wa3S1"
                               placeholder="<?php if (isset($data['Q5Wa3S1'])) echo $data['Q5Wa3S1'] ?>"
                               value="<?php echo set_value('Q5Wa3S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S2"
                               type="number" name="Q5Wa3S2"
                               placeholder="<?php if (isset($data['Q5Wa3S2'])) echo $data['Q5Wa3S2'] ?>"
                               value="<?php echo set_value('Q5Wa3S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S3"
                               type="number" name="Q5Wa3S3"
                               placeholder="<?php if (isset($data['Q5Wa3S3'])) echo $data['Q5Wa3S3'] ?>"
                               value="<?php echo set_value('Q5Wa3S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S4"
                               type="number" name="Q5Wa3S4"
                               placeholder="<?php if (isset($data['Q5Wa3S4'])) echo $data['Q5Wa3S4'] ?>"
                               value="<?php echo set_value('Q5Wa3S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S5"
                               type="number" name="Q5Wa3S5"
                               placeholder="<?php if (isset($data['Q5Wa3S5'])) echo $data['Q5Wa3S5'] ?>"
                               value="<?php echo set_value('Q5Wa3S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Staffroom </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S1"
                               type="number" name="Q5Wa4S1"
                               placeholder="<?php if (isset($data['Q5Wa4S1'])) echo $data['Q5Wa4S1'] ?>"
                               value="<?php echo set_value('Q5Wa4S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S2"
                               type="number" name="Q5Wa4S2"
                               placeholder="<?php if (isset($data['Q5Wa4S2'])) echo $data['Q5Wa4S2'] ?>"
                               value="<?php echo set_value('Q5Wa4S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S3"
                               type="number" name="Q5Wa4S3"
                               placeholder="<?php if (isset($data['Q5Wa4S3'])) echo $data['Q5Wa4S3'] ?>"
                               value="<?php echo set_value('Q5Wa4S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S4"
                               type="number" name="Q5Wa4S4"
                               placeholder="<?php if (isset($data['Q5Wa4S4'])) echo $data['Q5Wa4S4'] ?>"
                               value="<?php echo set_value('Q5Wa4S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S5"
                               type="number" name="Q5Wa4S5"
                               placeholder="<?php if (isset($data['Q5Wa4S5'])) echo $data['Q5Wa4S5'] ?>"
                               value="<?php echo set_value('Q5Wa4S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Laboratory </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S1"
                               type="number" name="Q5Wa5S1"
                               placeholder="<?php if (isset($data['Q5Wa5S1'])) echo $data['Q5Wa5S1'] ?>"
                               value="<?php echo set_value('Q5Wa5S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S2"
                               type="number" name="Q5Wa5S2"
                               placeholder="<?php if (isset($data['Q5Wa5S2'])) echo $data['Q5Wa5S2'] ?>"
                               value="<?php echo set_value('Q5Wa5S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S3"
                               type="number" name="Q5Wa5S3"
                               placeholder="<?php if (isset($data['Q5Wa5S3'])) echo $data['Q5Wa5S3'] ?>"
                               value="<?php echo set_value('Q5Wa5S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S4"
                               type="number" name="Q5Wa5S4"
                               placeholder="<?php if (isset($data['Q5Wa5S4'])) echo $data['Q5Wa5S4'] ?>"
                               value="<?php echo set_value('Q5Wa5S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa5S5" type="number" name="Q5Wa5S5"
                               placeholder="<?php if (isset($data['Q5Wa5S5'])) echo $data['Q5Wa5S5'] ?>"
                               value="<?php echo set_value('Q5Wa5S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Canteen </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S1"
                               type="number" name="Q5Wa6S1"
                               placeholder="<?php if (isset($data['Q5Wa6S1'])) echo $data['Q5Wa6S1'] ?>"
                               value="<?php echo set_value('Q5Wa6S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S2"
                               type="number" name="Q5Wa6S2"
                               placeholder="<?php if (isset($data['Q5Wa6S2'])) echo $data['Q5Wa6S2'] ?>"
                               value="<?php echo set_value('Q5Wa6S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S3"
                               type="number" name="Q5Wa6S3"
                               placeholder="<?php if (isset($data['Q5Wa6S3'])) echo $data['Q5Wa6S3'] ?>"
                               value="<?php echo set_value('Q5Wa6S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S4"
                               type="number" name="Q5Wa6S4"
                               placeholder="<?php if (isset($data['Q5Wa6S4'])) echo $data['Q5Wa6S4'] ?>"
                               value="<?php echo set_value('Q5Wa6S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa6S5" type="number" name="Q5Wa6S5"
                               placeholder="<?php if (isset($data['Q5Wa6S5'])) echo $data['Q5Wa6S5'] ?>"
                               value="<?php echo set_value('Q5Wa6S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Clinic/sick room </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S1"
                               type="number" name="Q5Wa7S1"
                               placeholder="<?php if (isset($data['Q5Wa7S1'])) echo $data['Q5Wa7S1'] ?>"
                               value="<?php echo set_value('Q5Wa7S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S2"
                               type="number" name="Q5Wa7S2"
                               placeholder="<?php if (isset($data['Q5Wa7S2'])) echo $data['Q5Wa7S2'] ?>"
                               value="<?php echo set_value('Q5Wa7S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S3"
                               type="number" name="Q5Wa7S3"
                               placeholder="<?php if (isset($data['Q5Wa7S3'])) echo $data['Q5Wa7S3'] ?>"
                               value="<?php echo set_value('Q5Wa7S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S4"
                               type="number" name="Q5Wa7S4"
                               placeholder="<?php if (isset($data['Q5Wa7S4'])) echo $data['Q5Wa7S4'] ?>"
                               value="<?php echo set_value('Q5Wa7S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S5"
                               type="number" name="Q5Wa7S5"
                               placeholder="<?php if (isset($data['Q5Wa7S5'])) echo $data['Q5Wa7S5'] ?>"
                               value="<?php echo set_value('Q5Wa7S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Library </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S1"
                               type="number" name="Q5Wa8S1"
                               placeholder="<?php if (isset($data['Q5Wa8S1'])) echo $data['Q5Wa8S1'] ?>"
                               value="<?php echo set_value('Q5Wa8S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S2"
                               type="number" name="Q5Wa8S2"
                               placeholder="<?php if (isset($data['Q5Wa8S2'])) echo $data['Q5Wa8S2'] ?>"
                               value="<?php echo set_value('Q5Wa8S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S3"
                               type="number" name="Q5Wa8S3"
                               placeholder="<?php if (isset($data['Q5Wa8S3'])) echo $data['Q5Wa8S3'] ?>"
                               value="<?php echo set_value('Q5Wa8S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S4"
                               type="number" name="Q5Wa8S4"
                               placeholder="<?php if (isset($data['Q5Wa8S4'])) echo $data['Q5Wa8S4'] ?>"
                               value="<?php echo set_value('Q5Wa8S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S5"
                               type="number" name="Q5Wa8S5"
                               placeholder="<?php if (isset($data['Q5Wa8S5'])) echo $data['Q5Wa8S5'] ?>"
                               value="<?php echo set_value('Q5Wa8S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Toilets </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S1"
                               type="number" name="Q5Wa9S1"
                               placeholder="<?php if (isset($data['Q5Wa9S1'])) echo $data['Q5Wa9S1'] ?>"
                               value="<?php echo set_value('Q5Wa9S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S2"
                               type="number" name="Q5Wa9S2"
                               placeholder="<?php if (isset($data['Q5Wa9S2'])) echo $data['Q5Wa9S2'] ?>"
                               value="<?php echo set_value('Q5Wa9S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S3"
                               type="number" name="Q5Wa9S3"
                               placeholder="<?php if (isset($data['Q5Wa9S3'])) echo $data['Q5Wa9S3'] ?>"
                               value="<?php echo set_value('Q5Wa9S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S4"
                               type="number" name="Q5Wa9S4"
                               placeholder="<?php if (isset($data['Q5Wa9S4'])) echo $data['Q5Wa9S4'] ?>"
                               value="<?php echo set_value('Q5Wa9S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S5"
                               type="number" name="Q5Wa9S5"
                               placeholder="<?php if (isset($data['Q5Wa9S5'])) echo $data['Q5Wa9S5'] ?>"
                               value="<?php echo set_value('Q5Wa9S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Others </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S1"
                               type="number" name="Q5Wa10S1"
                               placeholder="<?php if (isset($data['Q5Wa10S1'])) echo $data['Q5Wa10S1'] ?>"
                               value="<?php echo set_value('Q5Wa10S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S2"
                               type="number" name="Q5Wa10S2"
                               placeholder="<?php if (isset($data['Q5Wa10S2'])) echo $data['Q5Wa10S2'] ?>"
                               value="<?php echo set_value('Q5Wa10S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S3"
                               type="number" name="Q5Wa10S3"
                               placeholder="<?php if (isset($data['Q5Wa10S3'])) echo $data['Q5Wa10S3'] ?>"
                               value="<?php echo set_value('Q5Wa10S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S4"
                               type="number" name="Q5Wa10S4"
                               placeholder="<?php if (isset($data['Q5Wa10S4'])) echo $data['Q5Wa10S4'] ?>"
                               value="<?php echo set_value('Q5Wa10S4'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S5"
                               type="number" name="Q5Wa10S5"
                               placeholder="<?php if (isset($data['Q5Wa10S5'])) echo $data['Q5Wa10S5'] ?>"
                               value="<?php echo set_value('Q5Wa10S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Total </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S1" type="number" name="Q5Wa11S1"
                               placeholder="<?php if (isset($data['Q5Wa11S1'])) echo $data['Q5Wa11S1'] ?>"
                               value="<?php echo set_value('Q5Wa11S1'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S2" type="number" name="Q5Wa11S2"
                               placeholder="<?php if (isset($data['Q5Wa11S2'])) echo $data['Q5Wa11S2'] ?>"
                               value="<?php echo set_value('Q5Wa11S2'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S3" type="number" name="Q5Wa11S3"
                               placeholder="<?php if (isset($data['Q5Wa11S3'])) echo $data['Q5Wa11S3'] ?>"
                               value="<?php echo set_value('Q5Wa11S3'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S4" type="number" name="Q5Wa11S4"
                               placeholder="<?php if (isset($data['Q5Wa11S4'])) echo $data['Q5Wa11S4'] ?>"
                               value="<?php echo set_value('Q5Wa11S4'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S5" type="number" name="Q5Wa11S5"
                               placeholder="<?php if (isset($data['Q5Wa11S5'])) echo $data['Q5Wa11S5'] ?>"
                               value="<?php echo set_value('Q5Wa11S5'); ?>" readonly/>
    </div>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of dustbins in classroom showing segregation at source<br>
  • Pictures of playground with more than two dustbins<br>
  Kindly attach the aforementioned documents along with the survey<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Segregation Source Classrooms" data-toggle="modal"
                        data-target="#airModal" type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($segregationClassroom as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Segregation_Source_Classrooms_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="form-group">
  <label>
  <h6>Task 3: How much waste does your school generate?</h6>
  </label>
  <br>
  There is nothing known as waste – waste is just a misplaced resource. Therefore ideally, a school should
  not generate any waste. But there is waste, as most human activities result in some waste. Wastes are of
  many types such as bio-degradable and non-biodegradable, hazardous and non-hazardous, etc. Each of these
  categories has to be handled carefully. Please wear gloves, masks while handling waste. E-waste should
  be handled by adults.<br>
  <br>
  <b>To collect data:</b> Arrange a meeting between the student audit team and the key people in your
  house-keeping staff. Let the students describe the project with them. Segregate all waste, put them in
  small packs and weigh using a spring balance. If the practice of segregation of waste has already been
  adopted, then it will be easy to find out the amount of waste paper and other common trash. For Silt and
  Soil – Put a small mesh wire under the dustbin. And find the amount collected beneath. Or pour the waste
  on a mesh, so that the dust and silt passes through and then weigh the silt. </div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">3</span>Determine the quantity of waste generated in
  your school. (in kilogram) <a class="tt"
                                                  data-tooltip="Please note that some categories of waste may happen daily, weekly, monthly, bi-annually or annually. Please convert these to monthly average before entering."><span
                                class="badge">?</span></a></label>
</div>
<div class="form-group">
  <label><span class="cube">a.</span>Biodegradable/Wet Waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Garden/horticulture waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S1" type="number"
                               name="Q6Wa1S1" placeholder="<?php if (isset($data['Q6Wa1S1'])) echo $data['Q6Wa1S1'] ?>"
                               value="<?php echo set_value('Q6Wa1S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Kitchen waste—Raw </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S2" type="number"
                               name="Q6Wa1S2" placeholder="<?php if (isset($data['Q6Wa1S2'])) echo $data['Q6Wa1S2'] ?>"
                               value="<?php echo set_value('Q6Wa1S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Kitchen waste—Cooked </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S3" type="number"
                               name="Q6Wa1S3" placeholder="<?php if (isset($data['Q6Wa1S3'])) echo $data['Q6Wa1S3'] ?>"
                               value="<?php echo set_value('Q6Wa1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Wet waste from classrooms etc. </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S4" type="number"
                               name="Q6Wa1S4" placeholder="<?php if (isset($data['Q6Wa1S4'])) echo $data['Q6Wa1S4'] ?>"
                               value="<?php echo set_value('Q6Wa1S4'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S5" type="number"
                               name="Q6Wa1S5" placeholder="<?php if (isset($data['Q6Wa1S5'])) echo $data['Q6Wa1S5'] ?>"
                               value="<?php echo set_value('Q6Wa1S5'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (a): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S6" type="number"
                               name="Q6Wa1S6" placeholder="<?php if (isset($data['Q6Wa1S6'])) echo $data['Q6Wa1S6'] ?>"
                               value="<?php echo set_value('Q6Wa1S6'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">b.</span>Dry/recyclable waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated
      (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Plastic </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S1" type="number"
                               name="Q6Wa2S1" placeholder="<?php if (isset($data['Q6Wa2S1'])) echo $data['Q6Wa2S1'] ?>"
                               value="<?php echo set_value('Q6Wa2S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Paper </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S2" type="number"
                               name="Q6Wa2S2" placeholder="<?php if (isset($data['Q6Wa2S2'])) echo $data['Q6Wa2S2'] ?>"
                               value="<?php echo set_value('Q6Wa2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Wood or classroom furniture </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S3" type="number"
                               name="Q6Wa2S3" placeholder="<?php if (isset($data['Q6Wa2S3'])) echo $data['Q6Wa2S3'] ?>"
                               value="<?php echo set_value('Q6Wa2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Glass </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S4" type="number"
                               name="Q6Wa2S4" placeholder="<?php if (isset($data['Q6Wa2S4'])) echo $data['Q6Wa2S4'] ?>"
                               value="<?php echo set_value('Q6Wa2S4'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Metal </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S5" type="number"
                               name="Q6Wa2S5" placeholder="<?php if (isset($data['Q6Wa2S5'])) echo $data['Q6Wa2S5'] ?>"
                               value="<?php echo set_value('Q6Wa2S5'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Thermocol </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S6" type="number"
                               name="Q6Wa2S6" placeholder="<?php if (isset($data['Q6Wa2S6'])) echo $data['Q6Wa2S6'] ?>"
                               value="<?php echo set_value('Q6Wa2S6'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Tetra packs </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S7" type="number"
                               name="Q6Wa2S7" placeholder="<?php if (isset($data['Q6Wa2S7'])) echo $data['Q6Wa2S7'] ?>"
                               value="<?php echo set_value('Q6Wa2S7'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S8" type="number"
                               name="Q6Wa2S8" placeholder="<?php if (isset($data['Q6Wa2S8'])) echo $data['Q6Wa2S8'] ?>"
                               value="<?php echo set_value('Q6Wa2S8'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (b): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S9" type="number"
                               name="Q6Wa2S9" placeholder="<?php if (isset($data['Q6Wa2S9'])) echo $data['Q6Wa2S9'] ?>"
                               value="<?php echo set_value('Q6Wa2S9'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">c.</span>Domestic hazardous waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Hazardous and toxic waste (Paints, lab waste, etc) </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S1" type="number"
                               name="Q6Wa3S1" placeholder="<?php if (isset($data['Q6Wa3S1'])) echo $data['Q6Wa3S1'] ?>"
                               value="<?php echo set_value('Q6Wa3S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Oil from DG sets </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S2" type="number"
                               name="Q6Wa3S2" placeholder="<?php if (isset($data['Q6Wa3S2'])) echo $data['Q6Wa3S2'] ?>"
                               value="<?php echo set_value('Q6Wa3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S3" type="number"
                               name="Q6Wa3S3" placeholder="<?php if (isset($data['Q6Wa3S3'])) echo $data['Q6Wa3S3'] ?>"
                               value="<?php echo set_value('Q6Wa3S3'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (c). </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S4" type="number"
                               name="Q6Wa3S4" placeholder="<?php if (isset($data['Q6Wa3S4'])) echo $data['Q6Wa3S4'] ?>"
                               value="<?php echo set_value('Q6Wa3S4'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">d.</span>E-Waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>E-waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="EWaste()" id="Q6Wa4S1" type="number"
                               name="Q6Wa4S1" placeholder="<?php if (isset($data['Q6Wa4S1'])) echo $data['Q6Wa4S1'] ?>"
                               value="<?php echo set_value('Q6Wa4S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (d): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="EWaste()" id="Q6Wa4S2" type="number"
                               name="Q6Wa4S2" placeholder="<?php if (isset($data['Q6Wa4S2'])) echo $data['Q6Wa4S2'] ?>"
                               value="<?php echo set_value('Q6Wa4S2'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">e.</span>Biomedical waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Biomedical waste such as syringes, band–aids, expired medicines etc. </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteBiomedical()" id="Q6Wa5S1" type="number"
                               name="Q6Wa5S1" placeholder="<?php if (isset($data['Q6Wa5S1'])) echo $data['Q6Wa5S1'] ?>"
                               value="<?php echo set_value('Q6Wa5S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (e): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteBiomedical()" id="Q6Wa5S2" type="number"
                               name="Q6Wa5S2" placeholder="<?php if (isset($data['Q6Wa5S2'])) echo $data['Q6Wa5S2'] ?>"
                               value="<?php echo set_value('Q6Wa5S2'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">f.</span>Sanitary waste </label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Sanitary waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteSanitary()" id="Q6Wa6S1" type="number"
                               name="Q6Wa6S1" placeholder="<?php if (isset($data['Q6Wa6S1'])) echo $data['Q6Wa6S1'] ?>"
                               value="<?php echo set_value('Q6Wa6S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (f): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteSanitary()" id="Q6Wa6S2" type="number"
                               name="Q6Wa6S2" placeholder="<?php if (isset($data['Q6Wa6S2'])) echo $data['Q6Wa6S2'] ?>"
                               value="<?php echo set_value('Q6Wa6S2'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">g.</span>Cc& D Waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated(monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Construction and demolition waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteConstruction()" id="Q6Wa7S1"
                               type="number" name="Q6Wa7S1"
                               placeholder="<?php if (isset($data['Q6Wa7S1'])) echo $data['Q6Wa7S1'] ?>"
                               value="<?php echo set_value('Q6Wa7S1'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (g): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteConstruction()" id="Q6Wa7S2"
                               type="number" name="Q6Wa7S2"
                               placeholder="<?php if (isset($data['Q6Wa7S2'])) echo $data['Q6Wa7S2'] ?>"
                               value="<?php echo set_value('Q6Wa7S2'); ?>" readonly/>
    </div>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Picture of audit team weighing solid waste<br>
  • Picture of types of solid waste generated<br>
  Kindly attach the aforementioned documents along with the survey<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Audit Team Weighing Solid Waste" data-toggle="modal"
                        data-target="#airModal" type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($solidWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Audit_Team_Weighing_Solid_Waste_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="form-group">
  <label>
  <h6>Task 4: How much waste does your school treat/recycle?</h6>
  </label>
  <br>
  <p> <b>To Collect Data:</b> Find out whether your school has any waste recycling facility like compost
    pit, paper recycling machine, etc. If you have a paper recycling unit, the person in charge will
    definitely be recording the input and output from the unit. If the school is selling newspapers or
    bottles or metal scrap to the local waste dealer (kabadiwala), that can also be included in the
    quantity recycled.<a class="tt" data-tooltip="Includes all waste recycled, reused or treated."
                                         style="position:relative; top:-18px;"><span class="badge">?</span></a></p>
</div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">4</span>Does your school recycle any generated waste? <a
                            class="tt"
                            data-tooltip=" In kg/day or kg/month, you can check daily waste generation and then find out how much of it goes for recycling or treatment."
                    ><span class="badge">?</span></a><a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#recyclingRefuse" target="_blank"> </a></label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8Wa1" onClick="WasteGenerated(1)" class="radio" id="Q8Wa1"
                               value="<?php echo set_value('Q8Wa1', 'Y') ?>" <?php if (isset($data['Q8Wa1'])) echo $data['Q8Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8Wa1" onClick="WasteGenerated(2)" class="radio" id="Q8Wa1"
                               value="<?php echo set_value('Q8Wa1', 'N') ?>" <?php if (isset($data['Q8Wa1'])) echo $data['Q8Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<?php
            if(isset($data['Q8Wa1']))
            {  if($data['Q8Wa1'] == 'Y')
            {
            ?>
<div class="form-group" id="Q8Wa2">
<?php } else { ?>
<div class="form-group" id="Q8Wa2" style="display: none;">
<?php }
                    } else {?>
<div class="form-group" id="Q8Wa2" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">4(a)</span>Please provide quantity of which is
  applicable</label>
  <div class="form-group">
    <label><span class="cube">a.</span>Biodegradable/Wet Waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste reuse/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Garden/horticulture waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S1"
                                           type="number" name="Q8Wa1S1"
                                           placeholder="<?php if (isset($data['Q8Wa1S1'])) echo $data['Q8Wa1S1'] ?>"
                                           value="<?php echo set_value('Q8Wa1S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Kitchen waste—Raw </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S2"
                                           type="number" name="Q8Wa1S2"
                                           placeholder="<?php if (isset($data['Q8Wa1S2'])) echo $data['Q8Wa1S2'] ?>"
                                           value="<?php echo set_value('Q8Wa1S2'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Kitchen waste—Cooked </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S3"
                                           type="number" name="Q8Wa1S3"
                                           placeholder="<?php if (isset($data['Q8Wa1S3'])) echo $data['Q8Wa1S3'] ?>"
                                           value="<?php echo set_value('Q8Wa1S3'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Wet waste from classrooms etc. </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S4"
                                           type="number" name="Q8Wa1S4"
                                           placeholder="<?php if (isset($data['Q8Wa1S4'])) echo $data['Q8Wa1S4'] ?>"
                                           value="<?php echo set_value('Q8Wa1S4'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q8Wa1S5"
                                           type="number" name="Q8Wa1S5"
                                           placeholder="<?php if (isset($data['Q8Wa1S5'])) echo $data['Q8Wa1S5'] ?>"
                                           value="<?php echo set_value('Q8Wa1S5'); ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (a): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q8Wa1S6"
                                           type="number" name="Q8Wa1S6"
                                           placeholder="<?php if (isset($data['Q8Wa1S6'])) echo $data['Q8Wa1S6'] ?>"
                                           value="<?php echo set_value('Q8Wa1S6'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">b.</span>Dry/recyclable waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated
        (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Plastic </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S1"
                                           type="number" name="Q8Wa2S1"
                                           placeholder="<?php if (isset($data['Q8Wa2S1'])) echo $data['Q8Wa2S1'] ?>"
                                           value="<?php echo set_value('Q8Wa2S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Paper </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S2"
                                           type="number" name="Q8Wa2S2"
                                           placeholder="<?php if (isset($data['Q8Wa2S2'])) echo $data['Q8Wa2S2'] ?>"
                                           value="<?php echo set_value('Q8Wa2S2'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Wood or classroom furniture </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S3"
                                           type="number" name="Q8Wa2S3"
                                           placeholder="<?php if (isset($data['Q8Wa2S3'])) echo $data['Q8Wa2S3'] ?>"
                                           value="<?php echo set_value('Q8Wa2S3'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Glass </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S4"
                                           type="number" name="Q8Wa2S4"
                                           placeholder="<?php if (isset($data['Q8Wa2S4'])) echo $data['Q8Wa2S4'] ?>"
                                           value="<?php echo set_value('Q8Wa2S4'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Metal </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S5"
                                           type="number" name="Q8Wa2S5"
                                           placeholder="<?php if (isset($data['Q8Wa2S5'])) echo $data['Q8Wa2S5'] ?>"
                                           value="<?php echo set_value('Q8Wa2S5'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Thermocol </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S6"
                                           type="number" name="Q8Wa2S6"
                                           placeholder="<?php if (isset($data['Q8Wa2S6'])) echo $data['Q8Wa2S6'] ?>"
                                           value="<?php echo set_value('Q8Wa2S6'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Tetra packs </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S7"
                                           type="number" name="Q8Wa2S7"
                                           placeholder="<?php if (isset($data['Q8Wa2S7'])) echo $data['Q8Wa2S7'] ?>"
                                           value="<?php echo set_value('Q8Wa2S7'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S8"
                                           type="number" name="Q8Wa2S8"
                                           placeholder="<?php if (isset($data['Q8Wa2S8'])) echo $data['Q8Wa2S8'] ?>"
                                           value="<?php echo set_value('Q8Wa2S8'); ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (b): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S9"
                                           type="number" name="Q8Wa2S9"
                                           placeholder="<?php if (isset($data['Q8Wa2S9'])) echo $data['Q8Wa2S9'] ?>"
                                           value="<?php echo set_value('Q8Wa2S9'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">c.</span>Domestic hazardous waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated(monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Hazardous and toxic waste(Paints, lab waste, etc) </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S1"
                                           type="number" name="Q8Wa3S1"
                                           placeholder="<?php if (isset($data['Q8Wa3S1'])) echo $data['Q8Wa3S1'] ?>"
                                           value="<?php echo set_value('Q8Wa3S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Oil from DG sets </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S2"
                                           type="number" name="Q8Wa3S2"
                                           placeholder="<?php if (isset($data['Q8Wa3S2'])) echo $data['Q8Wa3S2'] ?>"
                                           value="<?php echo set_value('Q8Wa3S2'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S3"
                                           type="number" name="Q8Wa3S3"
                                           placeholder="<?php if (isset($data['Q8Wa3S3'])) echo $data['Q8Wa3S3'] ?>"
                                           value="<?php echo set_value('Q8Wa3S3'); ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (c). </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S4"
                                           type="number" name="Q8Wa3S4"
                                           placeholder="<?php if (isset($data['Q8Wa3S4'])) echo $data['Q8Wa3S4'] ?>"
                                           value="<?php echo set_value('Q8Wa3S4'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">d.</span>E-Waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated(monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>E-waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="EWaste1()" id="Q8Wa4S1"
                                           type="number" name="Q8Wa4S1"
                                           placeholder="<?php if (isset($data['Q8Wa4S1'])) echo $data['Q8Wa4S1'] ?>"
                                           value="<?php echo set_value('Q8Wa4S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (d): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="EWaste1()" id="Q8Wa4S2"
                                           type="number" name="Q8Wa4S2"
                                           placeholder="<?php if (isset($data['Q8Wa4S2'])) echo $data['Q8Wa4S2'] ?>"
                                           value="<?php echo set_value('Q8Wa4S2'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">e.</span>Biomedical waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated(monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Biomedical waste such as syringes, band–aids, expired medicines etc. </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteBiomedical1()" id="Q8Wa5S1"
                                           type="number" name="Q8Wa5S1"
                                           placeholder="<?php if (isset($data['Q8Wa5S1'])) echo $data['Q8Wa5S1'] ?>"
                                           value="<?php echo set_value('Q8Wa5S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (e): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteBiomedical1()" id="Q8Wa5S2"
                                           type="number" name="Q8Wa5S2"
                                           placeholder="<?php if (isset($data['Q8Wa5S2'])) echo $data['Q8Wa5S2'] ?>"
                                           value="<?php echo set_value('Q8Wa5S2'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">f.</span>Sanitary waste </label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated(monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Sanitary waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteSanitary1()" id="Q8Wa6S1"
                                           type="number" name="Q8Wa6S1"
                                           placeholder="<?php if (isset($data['Q8Wa6S1'])) echo $data['Q8Wa6S1'] ?>"
                                           value="<?php echo set_value('Q8Wa6S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (f): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteSanitary1()" id="Q8Wa6S2"
                                           type="number" name="Q8Wa6S2"
                                           placeholder="<?php if (isset($data['Q8Wa6S2'])) echo $data['Q8Wa6S2'] ?>"
                                           value="<?php echo set_value('Q8Wa6S2'); ?>" readonly/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">g.</span>C & D Waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste generated(monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Construction and demolition waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteConstruction1()"
                                           id="Q8Wa7S1" type="number" name="Q8Wa7S1"
                                           placeholder="<?php if (isset($data['Q8Wa7S1'])) echo $data['Q8Wa7S1'] ?>"
                                           value="<?php echo set_value('Q8Wa7S1'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (g): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteConstruction1()"
                                           id="Q8Wa7S2" type="number" name="Q8Wa7S2"
                                           placeholder="<?php if (isset($data['Q8Wa7S2'])) echo $data['Q8Wa7S2'] ?>"
                                           value="<?php echo set_value('Q8Wa7S2'); ?>" readonly/>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">5</span>Does your school have a composting
  facility?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q9Wa1" onClick="WasteFacility(1)" class="radio" id="Q9Wa1_1"
                               value="<?php echo set_value('Q9Wa1', 'Y') ?>" <?php if (isset($data['Q9Wa1'])) echo $data['Q9Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q9Wa1" onClick="WasteFacility(2)" class="radio" id="Q9Wa1_2"
                               value="<?php echo set_value('Q9Wa1', 'N') ?>" <?php if (isset($data['Q9Wa1'])) echo $data['Q9Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of recycling units - composting pit<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Composting Pit" data-toggle="modal"
                        data-target="#airModal" type="button">UPLOAD FILES </button>
  <br>
</div>
<br>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($composingPit as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Composting_Pit_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<?php
                  if(isset($data['Q9Wa1']))
                  {  if($data['Q9Wa1'] == 'Y')
                  {
                  ?>
<div class="form-group" id="Q9Wa2">
<?php } else { ?>
<div class="form-group" id="Q9Wa2" style="display: none;">
<?php }
                          } else {?>
<div class="form-group" id="Q9Wa2" style="display: none;">
<?php } ?>
<div class="form-group row" id="Q9Wa2">
  <label><span class="cube">5(a)</span>What is the methodology used?</label>
  <div class="text-gray">
    <label>
    <input type="checkbox" name="Q9Wa2S1"
                               value="<?php echo set_value('Q9Wa2S1', 1); ?>" <?php if (isset($data['Q9Wa2S1'])) echo "checked" ?>>
    Natural composting without added microbes</label>
  </div>
  <div class="text-gray">
    <label>
    <input type="checkbox" name="Q9Wa2S2"
                               value="<?php echo set_value('Q9Wa2S2', 1); ?>" <?php if (isset($data['Q9Wa2S2'])) echo "checked" ?>>
    Vermi composting</label>
  </div>
  <div class="text-gray">
    <label>
    <input type="checkbox" name="Q9Wa2S3"
                               value="<?php echo set_value('Q9Wa2S3', 1); ?>" <?php if (isset($data['Q9Wa2S3'])) echo "checked" ?>>
    Mechanical composting</label>
  </div>
  <div class="text-gray">
    <label>Other: &nbsp
    <input type="text" name="Q9Wa2S4" value="<?php echo set_value('Q9Wa2S4'); ?>"
                               placeholder="<?php if (isset($data['Q9Wa2S4'])) echo $data['Q9Wa2S4'] ?>">
    </label>
  </div>
</div>
<?php
                  if(isset($data['Q9Wa1']))
                  {  if($data['Q9Wa1'] == 'Y')
                  {
                  ?>
<div class="form-group" id="Q9Wa3">
<?php } else { ?>
<div class="form-group" id="Q9Wa3" style="display: none;">
<?php }
                          } else {?>
<div class="form-group" id="Q9Wa3" style="display: none;">
  <?php } ?>
  <div class="form-group" id="Q9Wa3">
    <label for="username" class="control-label"><span class="cube">5(b)</span>What is the quantity of
    compost that is generated per month (in kilogram)?</label>
    <br>
    <input type="text" name="Q9Wa3" id="Q9Wa31" class="form-control space-textbox"
                       placeholder="<?php if (isset($data['Q9Wa3'])) echo $data['Q9Wa3'] ?>"
                       value="<?php echo set_value('Q9Wa3'); ?>">
  </div>
</div>
<br>
<?php
                  if(isset($data['Q9Wa1']))
                  {  if($data['Q9Wa1'] == 'Y')
                  {
                  ?>
<div class="form-group" id="Q9Wa4">
<?php } else { ?>
<div class="form-group" id="Q9Wa4" style="display: none;">
<?php }
                          } else {?>
<div class="form-group" id="Q9Wa4" style="display: none;">
<?php } ?>
<div class="form-group row" id="Q9Wa4">
  <label><span class="cube">5(c)</span> What is the purpose of the compost that is generated per month? </label>
  <div class="form-group row">
    <label class="text-gray">
    <input type="checkbox" name="Q9Wa4S1"
                           value="<?php echo set_value('Q9Wa4S1', 1); ?>" <?php if (isset($data['Q9Wa4S1'])) echo "checked" ?>>
    For horticultural purposes </label>
  </div>
  <div class="form-group row">
    <label class="text-gray">
    <input type="checkbox" name="Q9Wa4S2"
                           value="<?php echo set_value('Q9Wa4S2', 1); ?>" <?php if (isset($data['Q9Wa4S2'])) echo "checked" ?>>
    For school garden</label>
  </div>
  <div class="form-group row">
    <label class="text-gray">
    <input type="checkbox" name="Q9Wa4S3"
                           value="<?php echo set_value('Q9Wa4S3', 1); ?>" <?php if (isset($data['Q9Wa4S3'])) echo "checked" ?>>
    For sale</label>
  </div>
  <div class="form-group row">
    <label class="text-gray">
    <input type="checkbox" name="Q9Wa4S4"
                           value="<?php echo set_value('Q9Wa4S4', 1); ?>" <?php if (isset($data['Q9Wa4S4'])) echo "checked" ?>>
    For charity</label>
  </div>
</div>
</div>
</div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">6</span>Does your school encourage students & teachers to
  reuse textbooks? <a class="kplink"
                                    href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#chomp"
                                    target="_blank"></a></label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q10Wa1" class="radio" id="Q10Wa1_1"
                           value="<?php echo set_value('Q10Wa1', 'Y') ?>" <?php if (isset($data['Q10Wa1'])) echo $data['Q10Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q10Wa1" class="radio" id="Q10Wa1_2"
                           value="<?php echo set_value('Q10Wa1', 'N') ?>" <?php if (isset($data['Q10Wa1'])) echo $data['Q10Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">7</span>Please fill the table to understand whether waste
  recycling procedures are applied to waste. <a class="kplink"
                                                              href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#whatWeDo"
                                                              target="_blank"> </a></label>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Category of waste </label>
    </div>
    <div class="col-xs-2">
      <label>Local scrap collector (kabadiwala) </label>
    </div>
    <div class="col-xs-2">
      <label>Authorized dealer </label>
    </div>
    <div class="col-xs-2">
      <label>Dumped at a designated community site </label>
    </div>
    <div class="col-xs-2">
      <label>Internal procedure </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Paper </label>
    </div>
    <div class="col-xs-2">
      <input type="checkbox" id="Q11Wa1S1" name="Q11Wa1S1"
                           value="<?php echo set_value('Q11Wa1S1', 1); ?>" <?php if (isset($data['Q11Wa1S1'])) if ($data['Q11Wa1S1'] == 1) echo set_checkbox('Q11Wa1S1', '1', true); ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S2" type="checkbox" name="Q11Wa1S2"
                           value="<?php echo set_value('Q11Wa1S2', 1); ?>" <?php if (isset($data['Q11Wa1S2'])) if ($data['Q11Wa1S2'] == 1) echo set_checkbox('Q11Wa1S2', '1', true); ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S3" type="checkbox" name="Q11Wa1S3"
                           value="<?php echo set_value('Q11Wa1S3', 1); ?>" <?php if (isset($data['Q11Wa1S3'])) if ($data['Q11Wa1S3'] == 1) echo set_checkbox('Q11Wa1S3', '1', true); ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S4" type="checkbox" name="Q11Wa1S4"
                           value="<?php echo set_value('Q11Wa1S4', 1); ?>" <?php if (isset($data['Q11Wa1S4'])) if ($data['Q11Wa1S4'] == 1) echo set_checkbox('Q11Wa1S4', '1', true); ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Plastic </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S1" type="checkbox" name="Q11Wa2S1"
                           value="<?php echo set_value('Q11Wa2S1', 1); ?>" <?php if (isset($data['Q11Wa2S1'])) if ($data['Q11Wa2S1'] == 1) echo set_checkbox('Q11Wa2S1', '1', true); ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S2" type="checkbox" name="Q11Wa2S2"
                           value="<?php echo set_value('Q11Wa2S2', 1); ?>" <?php if (isset($data['Q11Wa2S2'])) if ($data['Q11Wa2S2'] == 1) echo set_checkbox('Q11Wa2S2', '1', true); ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S3" type="checkbox" name="Q11Wa2S3"
                           value="<?php echo set_value('Q11Wa2S3', 1); ?>" <?php if (isset($data['Q11Wa2S3'])) if ($data['Q11Wa2S3'] == 1) echo set_checkbox('Q11Wa2S3', '1', true); ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S4" type="checkbox" name="Q11Wa2S4"
                           value="<?php echo set_value('Q11Wa2S4', 1); ?>" <?php if (isset($data['Q11Wa2S4'])) if ($data['Q11Wa2S4'] == 1) echo set_checkbox('Q11Wa2S4', '1', true); ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Horticultural waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S1" type="checkbox" name="Q11Wa3S1"
                           value="<?php echo set_value('Q11Wa3S1', 1); ?>" <?php if (isset($data['Q11Wa3S1'])) if ($data['Q11Wa3S1'] == 1) echo set_checkbox('Q11Wa3S1', '1', true); ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S2" type="checkbox" name="Q11Wa3S2"
                           value="<?php echo set_value('Q11Wa3S2', 1); ?>" <?php if (isset($data['Q11Wa3S2'])) if ($data['Q11Wa3S2'] == 1) echo set_checkbox('Q11Wa3S2', '1', true); ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S3" type="checkbox" name="Q11Wa3S3"
                           value="<?php echo set_value('Q11Wa3S3', 1); ?>" <?php if (isset($data['Q11Wa3S3'])) if ($data['Q11Wa3S3'] == 1) echo set_checkbox('Q11Wa3S3', '1', true); ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S4" type="checkbox" name="Q11Wa3S4"
                           value="<?php echo set_value('Q11Wa3S4', 1); ?>" <?php if (isset($data['Q11Wa3S4'])) if ($data['Q11Wa3S4'] == 1) echo set_checkbox('Q11Wa3S4', '1', true); ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>E-waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S1" type="checkbox" name="Q11Wa4S1"
                           value="<?php echo set_value('Q11Wa4S1', 1); ?>" <?php if (isset($data['Q11Wa4S1'])) if ($data['Q11Wa4S1'] == 1) echo set_checkbox('Q11Wa4S1', '1', true); ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S2" type="checkbox" name="Q11Wa4S2"
                           value="<?php echo set_value('Q11Wa4S2', 1); ?>" <?php if (isset($data['Q11Wa4S2'])) if ($data['Q11Wa4S2'] == 1) echo set_checkbox('Q11Wa4S2', '1', true); ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S3" type="checkbox" name="Q11Wa4S3"
                           value="<?php echo set_value('Q11Wa4S3', 1); ?>" <?php if (isset($data['Q11Wa4S3'])) if ($data['Q11Wa4S3'] == 1) echo set_checkbox('Q11Wa4S3', '1', true); ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S4" type="checkbox" name="Q11Wa4S4"
                           value="<?php echo set_value('Q11Wa4S4', 1); ?>" <?php if (isset($data['Q11Wa4S4'])) if ($data['Q11Wa4S4'] == 1) echo set_checkbox('Q11Wa4S4', '1', true); ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Hazardous waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S1" type="checkbox" name="Q11Wa5S1"
                           value="<?php echo set_value('Q11Wa5S1', 1); ?>" <?php if (isset($data['Q11Wa5S1'])) if ($data['Q11Wa5S1'] == 1) echo set_checkbox('Q11Wa5S1', '1', true); ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S2" type="checkbox" name="Q11Wa5S2"
                           value="<?php echo set_value('Q11Wa5S2', 1); ?>" <?php if (isset($data['Q11Wa5S2'])) if ($data['Q11Wa5S2'] == 1) echo set_checkbox('Q11Wa5S2', '1', true); ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S3" type="checkbox" name="Q11Wa5S3"
                           value="<?php echo set_value('Q11Wa5S3', 1); ?>" <?php if (isset($data['Q11Wa5S3'])) if ($data['Q11Wa5S3'] == 1) echo set_checkbox('Q11Wa5S3', '1', true); ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S4" type="checkbox" name="Q11Wa5S4"
                           value="<?php echo set_value('Q11Wa5S4', 1); ?>" <?php if (isset($data['Q11Wa5S4'])) if ($data['Q11Wa5S4'] == 1) echo set_checkbox('Q11Wa5S4', '1', true); ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Wood, glass, metal </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S1" type="checkbox" name="Q11Wa6S1"
                           value="<?php echo set_value('Q11Wa6S1', 1); ?>" <?php if (isset($data['Q11Wa6S1'])) if ($data['Q11Wa6S1'] == 1) echo set_checkbox('Q11Wa6S1', '1', true); ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S2" type="checkbox" name="Q11Wa6S2"
                           value="<?php echo set_value('Q11Wa6S2', 1); ?>" <?php if (isset($data['Q11Wa6S2'])) if ($data['Q11Wa6S2'] == 1) echo set_checkbox('Q11Wa6S2', '1', true); ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S3" type="checkbox" name="Q11Wa6S3"
                           value="<?php echo set_value('Q11Wa6S3', 1); ?>" <?php if (isset($data['Q11Wa6S3'])) if ($data['Q11Wa6S3'] == 1) echo set_checkbox('Q11Wa6S3', '1', true); ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S4" type="checkbox" name="Q11Wa6S4"
                           value="<?php echo set_value('Q11Wa6S4', 1); ?>" <?php if (isset($data['Q11Wa6S4'])) if ($data['Q11Wa6S4'] == 1) echo set_checkbox('Q11Wa6S4', '1', true); ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Biomedical waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S1" type="checkbox" name="Q11Wa7S1"
                           value="<?php echo set_value('Q11Wa7S1', 1); ?>" <?php if (isset($data['Q11Wa7S1'])) if ($data['Q11Wa7S1'] == 1) echo set_checkbox('Q11Wa7S1', '1', true); ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S2" type="checkbox" name="Q11Wa7S2"
                           value="<?php echo set_value('Q11Wa7S2', 1); ?>" <?php if (isset($data['Q11Wa7S2'])) if ($data['Q11Wa7S2'] == 1) echo set_checkbox('Q11Wa7S2', '1', true); ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S3" type="checkbox" name="Q11Wa7S3"
                           value="<?php echo set_value('Q11Wa7S3', 1); ?>" <?php if (isset($data['Q11Wa7S3'])) if ($data['Q11Wa7S3'] == 1) echo set_checkbox('Q11Wa7S3', '1', true); ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S4" type="checkbox" name="Q11Wa7S4"
                           value="<?php echo set_value('Q11Wa7S4', 1); ?>" <?php if (isset($data['Q11Wa7S4'])) if ($data['Q11Wa7S4'] == 1) echo set_checkbox('Q11Wa7S4', '1', true); ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Others </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S1" type="checkbox" name="Q11Wa8S1"
                           value="<?php echo set_value('Q11Wa8S1', 1); ?>" <?php if (isset($data['Q11Wa8S1'])) if ($data['Q11Wa8S1'] == 1) echo set_checkbox('Q11Wa8S1', '1', true); ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S2" type="checkbox" name="Q11Wa8S2"
                           value="<?php echo set_value('Q11Wa8S2', 1); ?>" <?php if (isset($data['Q11Wa8S2'])) if ($data['Q11Wa8S2'] == 1) echo set_checkbox('Q11Wa8S2', '1', true); ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S3" type="checkbox" name="Q11Wa8S3"
                           value="<?php echo set_value('Q11Wa8S3', 1); ?>" <?php if (isset($data['Q11Wa8S3'])) if ($data['Q11Wa8S3'] == 1) echo set_checkbox('Q11Wa8S3', '1', true); ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S4" type="checkbox" name="Q11Wa8S4"
                           value="<?php echo set_value('Q11Wa8S4', 1); ?>" <?php if (isset($data['Q11Wa8S4'])) if ($data['Q11Wa8S4'] == 1) echo set_checkbox('Q11Wa8S4', '1', true); ?>/>
    </div>
  </div>
  <!-- <div class="form-group row">
  <sdiv class="col-xs-2">
    <label >Total
    </label>
  </div>
  <div class="col-xs-2">
   <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S1" type="checkbox" name="Q11Wa9S1" placeholder="<?php if (isset($data['Q11Wa9S1'])) echo $data['Q11Wa9S1'] ?>" value="<?php echo set_value('Q11Wa9S1'); ?>" readonly/>
 </div>
 <div class="col-xs-2">
   <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S2" type="checkbox" name="Q11Wa9S2" placeholder="<?php if (isset($data['Q11Wa9S2'])) echo $data['Q11Wa9S2'] ?>" value="<?php echo set_value('Q11Wa9S2'); ?>" readonly/>
 </div>
 <div class="col-xs-2">
   <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S3" type="checkbox" name="Q11Wa9S3" placeholder="<?php if (isset($data['Q11Wa9S3'])) echo $data['Q11Wa9S3'] ?>" value="<?php echo set_value('Q11Wa9S3'); ?>" readonly/>
 </div>
 <div class="col-xs-2">
   <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S4" type="checkbox" name="Q11Wa9S4" placeholder="<?php if (isset($data['Q11Wa9S4'])) echo $data['Q11Wa9S4'] ?>" value="<?php echo set_value('Q11Wa9S4'); ?>" readonly/>
 </div>

</div>
 -->
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of recycling units - paper recycling machine, selling paper to kabadiwala, recyclers,etc<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Recycling Machine" data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<br>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($recycleMachine as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Recycling_Machine_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label class="control-label"><span class="cube">8</span>Does your school have the following? If yes, please
  give the numbers of items in working condition and those that are not.</label>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Item </label>
  </div>
  <div class="col-xs-2">
    <label>BEE star rating </label>
  </div>
  <div class="col-xs-2">
    <label>Working condition </label>
  </div>
  <div class="col-xs-2">
    <label>Non-working condition </label>
  </div>
  <div class="col-xs-2">
    <label>Total no. of items </label>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>TVs </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa1S1" type="number"
                       name="Q12Wa1S1" placeholder="<?php if (isset($data['Q12Wa1S1'])) echo $data['Q12Wa1S1'] ?>"
                       value="<?php echo set_value('Q12Wa1S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa1S2" type="number"
                       name="Q12Wa1S2" placeholder="<?php if (isset($data['Q12Wa1S2'])) echo $data['Q12Wa1S2'] ?>"
                       value="<?php echo set_value('Q12Wa1S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa1S3" type="number"
                       name="Q12Wa1S3" placeholder="<?php if (isset($data['Q12Wa1S3'])) echo $data['Q12Wa1S3'] ?>"
                       value="<?php echo set_value('Q12Wa1S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa1S4" type="number"
                       name="Q12Wa1S4" placeholder="<?php if (isset($data['Q12Wa1S4'])) echo $data['Q12Wa1S4'] ?>"
                       value="<?php echo set_value('Q12Wa1S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>VCR or DVD players </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa2S1" type="number"
                       name="Q12Wa2S1" placeholder="<?php if (isset($data['Q12Wa2S1'])) echo $data['Q12Wa2S1'] ?>"
                       value="<?php echo set_value('Q12Wa2S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa2S2" type="number"
                       name="Q12Wa2S2" placeholder="<?php if (isset($data['Q12Wa2S2'])) echo $data['Q12Wa2S2'] ?>"
                       value="<?php echo set_value('Q12Wa2S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa2S3" type="number"
                       name="Q12Wa2S3" placeholder="<?php if (isset($data['Q12Wa2S3'])) echo $data['Q12Wa2S3'] ?>"
                       value="<?php echo set_value('Q12Wa2S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa2S4" type="number"
                       name="Q12Wa2S4" placeholder="<?php if (isset($data['Q12Wa2S4'])) echo $data['Q12Wa2S4'] ?>"
                       value="<?php echo set_value('Q12Wa2S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Refrigerators and freezers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa3S1" type="number"
                       name="Q12Wa3S1" placeholder="<?php if (isset($data['Q12Wa3S1'])) echo $data['Q12Wa3S1'] ?>"
                       value="<?php echo set_value('Q12Wa3S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa3S2" type="number"
                       name="Q12Wa3S2" placeholder="<?php if (isset($data['Q12Wa3S2'])) echo $data['Q12Wa3S2'] ?>"
                       value="<?php echo set_value('Q12Wa3S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa3S3" type="number"
                       name="Q12Wa3S3" placeholder="<?php if (isset($data['Q12Wa3S3'])) echo $data['Q12Wa3S3'] ?>"
                       value="<?php echo set_value('Q12Wa3S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa3S4" type="number"
                       name="Q12Wa3S4" placeholder="<?php if (isset($data['Q12Wa3S4'])) echo $data['Q12Wa3S4'] ?>"
                       value="<?php echo set_value('Q12Wa3S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Washing machines </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa4S1" type="number"
                       name="Q12Wa4S1" placeholder="<?php if (isset($data['Q12Wa4S1'])) echo $data['Q12Wa4S1'] ?>"
                       value="<?php echo set_value('Q12Wa4S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa4S2" type="number"
                       name="Q12Wa4S2" placeholder="<?php if (isset($data['Q12Wa4S2'])) echo $data['Q12Wa4S2'] ?>"
                       value="<?php echo set_value('Q12Wa4S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa4S3" type="number"
                       name="Q12Wa4S3" placeholder="<?php if (isset($data['Q12Wa4S3'])) echo $data['Q12Wa4S3'] ?>"
                       value="<?php echo set_value('Q12Wa4S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa4S4" type="number"
                       name="Q12Wa4S4" placeholder="<?php if (isset($data['Q12Wa4S4'])) echo $data['Q12Wa4S4'] ?>"
                       value="<?php echo set_value('Q12Wa4S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Air conditioners </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa5S1" type="number"
                       name="Q12Wa5S1" placeholder="<?php if (isset($data['Q12Wa5S1'])) echo $data['Q12Wa5S1'] ?>"
                       value="<?php echo set_value('Q12Wa5S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa5S2" type="number"
                       name="Q12Wa5S2" placeholder="<?php if (isset($data['Q12Wa5S2'])) echo $data['Q12Wa5S2'] ?>"
                       value="<?php echo set_value('Q12Wa5S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa5S3" type="number"
                       name="Q12Wa5S3" placeholder="<?php if (isset($data['Q12Wa5S3'])) echo $data['Q12Wa5S3'] ?>"
                       value="<?php echo set_value('Q12Wa5S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa5S4" type="number"
                       name="Q12Wa5S4" placeholder="<?php if (isset($data['Q12Wa5S4'])) echo $data['Q12Wa5S4'] ?>"
                       value="<?php echo set_value('Q12Wa5S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Heaters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa6S1" type="number"
                       name="Q12Wa6S1" placeholder="<?php if (isset($data['Q12Wa6S1'])) echo $data['Q12Wa6S1'] ?>"
                       value="<?php echo set_value('Q12Wa6S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa6S2" type="number"
                       name="Q12Wa6S2" placeholder="<?php if (isset($data['Q12Wa6S2'])) echo $data['Q12Wa6S2'] ?>"
                       value="<?php echo set_value('Q12Wa6S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa6S3" type="number"
                       name="Q12Wa6S3" placeholder="<?php if (isset($data['Q12Wa6S3'])) echo $data['Q12Wa6S3'] ?>"
                       value="<?php echo set_value('Q12Wa6S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa6S4" type="number"
                       name="Q12Wa6S4" placeholder="<?php if (isset($data['Q12Wa6S4'])) echo $data['Q12Wa6S4'] ?>"
                       value="<?php echo set_value('Q12Wa6S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Microwaves </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa7S1" type="number"
                       name="Q12Wa7S1" placeholder="<?php if (isset($data['Q12Wa7S1'])) echo $data['Q12Wa7S1'] ?>"
                       value="<?php echo set_value('Q12Wa7S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa7S2" type="number"
                       name="Q12Wa7S2" placeholder="<?php if (isset($data['Q12Wa7S2'])) echo $data['Q12Wa7S2'] ?>"
                       value="<?php echo set_value('Q12Wa7S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa7S3" type="number"
                       name="Q12Wa7S3" placeholder="<?php if (isset($data['Q12Wa7S3'])) echo $data['Q12Wa7S3'] ?>"
                       value="<?php echo set_value('Q12Wa7S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa7S4" type="number"
                       name="Q12Wa7S4" placeholder="<?php if (isset($data['Q12Wa7S4'])) echo $data['Q12Wa7S4'] ?>"
                       value="<?php echo set_value('Q12Wa7S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Ovens </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa8S1" type="number"
                       name="Q12Wa8S1" placeholder="<?php if (isset($data['Q12Wa8S1'])) echo $data['Q12Wa8S1'] ?>"
                       value="<?php echo set_value('Q12Wa8S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa8S2" type="number"
                       name="Q12Wa8S2" placeholder="<?php if (isset($data['Q12Wa8S2'])) echo $data['Q12Wa8S2'] ?>"
                       value="<?php echo set_value('Q12Wa8S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa8S3" type="number"
                       name="Q12Wa8S3" placeholder="<?php if (isset($data['Q12Wa8S3'])) echo $data['Q12Wa8S3'] ?>"
                       value="<?php echo set_value('Q12Wa8S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa8S4" type="number"
                       name="Q12Wa8S4" placeholder="<?php if (isset($data['Q12Wa8S4'])) echo $data['Q12Wa8S4'] ?>"
                       value="<?php echo set_value('Q12Wa8S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Toasters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa9S1" type="number"
                       name="Q12Wa9S1" placeholder="<?php if (isset($data['Q12Wa9S1'])) echo $data['Q12Wa9S1'] ?>"
                       value="<?php echo set_value('Q12Wa9S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa9S2" type="number"
                       name="Q12Wa9S2" placeholder="<?php if (isset($data['Q12Wa9S2'])) echo $data['Q12Wa9S2'] ?>"
                       value="<?php echo set_value('Q12Wa9S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa9S3" type="number"
                       name="Q12Wa9S3" placeholder="<?php if (isset($data['Q12Wa9S3'])) echo $data['Q12Wa9S3'] ?>"
                       value="<?php echo set_value('Q12Wa9S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa9S4" type="number"
                       name="Q12Wa9S4" placeholder="<?php if (isset($data['Q12Wa9S4'])) echo $data['Q12Wa9S4'] ?>"
                       value="<?php echo set_value('Q12Wa9S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Electric kettles </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa10S1" type="number"
                       name="Q12Wa10S1" placeholder="<?php if (isset($data['Q12Wa10S1'])) echo $data['Q12Wa10S1'] ?>"
                       value="<?php echo set_value('Q12Wa10S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa10S2" type="number"
                       name="Q12Wa10S2" placeholder="<?php if (isset($data['Q12Wa10S2'])) echo $data['Q12Wa10S2'] ?>"
                       value="<?php echo set_value('Q12Wa10S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa10S3" type="number"
                       name="Q12Wa10S3" placeholder="<?php if (isset($data['Q12Wa10S3'])) echo $data['Q12Wa10S3'] ?>"
                       value="<?php echo set_value('Q12Wa10S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa10S4" type="number"
                       name="Q12Wa10S4" placeholder="<?php if (isset($data['Q12Wa10S4'])) echo $data['Q12Wa10S4'] ?>"
                       value="<?php echo set_value('Q12Wa10S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Personal computers (CPU, mouse, screen and keyboard included) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S1" type="number"
                       name="Q12Wa11S1" placeholder="<?php if (isset($data['Q12Wa11S1'])) echo $data['Q12Wa11S1'] ?>"
                       value="<?php echo set_value('Q12Wa11S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S2" type="number"
                       name="Q12Wa11S2" placeholder="<?php if (isset($data['Q12Wa11S2'])) echo $data['Q12Wa11S2'] ?>"
                       value="<?php echo set_value('Q12Wa11S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa11S3" type="number"
                       name="Q12Wa11S3" placeholder="<?php if (isset($data['Q12Wa11S3'])) echo $data['Q12Wa11S3'] ?>"
                       value="<?php echo set_value('Q12Wa11S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa11S4" type="number"
                       name="Q12Wa11S4" placeholder="<?php if (isset($data['Q12Wa11S4'])) echo $data['Q12Wa11S4'] ?>"
                       value="<?php echo set_value('Q12Wa11S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Laptop computer (CPU, mouse, screen and keyboard included) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S1" type="number"
                       name="Q12Wa12S1" placeholder="<?php if (isset($data['Q12Wa12S1'])) echo $data['Q12Wa12S1'] ?>"
                       value="<?php echo set_value('Q12Wa12S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S2" type="number"
                       name="Q12Wa12S2" placeholder="<?php if (isset($data['Q12Wa12S2'])) echo $data['Q12Wa12S2'] ?>"
                       value="<?php echo set_value('Q12Wa12S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa12S3" type="number"
                       name="Q12Wa12S3" placeholder="<?php if (isset($data['Q12Wa12S3'])) echo $data['Q12Wa12S3'] ?>"
                       value="<?php echo set_value('Q12Wa12S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa12S4" type="number"
                       name="Q12Wa12S4" placeholder="<?php if (isset($data['Q12Wa12S4'])) echo $data['Q12Wa12S4'] ?>"
                       value="<?php echo set_value('Q12Wa12S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Notebook computers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S1" type="number"
                       name="Q12Wa13S1" placeholder="<?php if (isset($data['Q12Wa13S1'])) echo $data['Q12Wa13S1'] ?>"
                       value="<?php echo set_value('Q12Wa13S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S2" type="number"
                       name="Q12Wa13S2" placeholder="<?php if (isset($data['Q12Wa13S2'])) echo $data['Q12Wa13S2'] ?>"
                       value="<?php echo set_value('Q12Wa13S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa13S3" type="number"
                       name="Q12Wa13S3" placeholder="<?php if (isset($data['Q12Wa13S3'])) echo $data['Q12Wa13S3'] ?>"
                       value="<?php echo set_value('Q12Wa13S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa13S4" type="number"
                       name="Q12Wa13S4" placeholder="<?php if (isset($data['Q12Wa13S4'])) echo $data['Q12Wa13S4'] ?>"
                       value="<?php echo set_value('Q12Wa13S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Notepad computers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S1" type="number"
                       name="Q12Wa14S1" placeholder="<?php if (isset($data['Q12Wa14S1'])) echo $data['Q12Wa14S1'] ?>"
                       value="<?php echo set_value('Q12Wa14S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S2" type="number"
                       name="Q12Wa14S2" placeholder="<?php if (isset($data['Q12Wa14S2'])) echo $data['Q12Wa14S2'] ?>"
                       value="<?php echo set_value('Q12Wa14S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa14S3" type="number"
                       name="Q12Wa14S3" placeholder="<?php if (isset($data['Q12Wa14S3'])) echo $data['Q12Wa14S3'] ?>"
                       value="<?php echo set_value('Q12Wa14S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa14S4" type="number"
                       name="Q12Wa14S4" placeholder="<?php if (isset($data['Q12Wa14S4'])) echo $data['Q12Wa14S4'] ?>"
                       value="<?php echo set_value('Q12Wa14S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Printers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S1" type="number"
                       name="Q12Wa15S1" placeholder="<?php if (isset($data['Q12Wa15S1'])) echo $data['Q12Wa15S1'] ?>"
                       value="<?php echo set_value('Q12Wa15S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S2" type="number"
                       name="Q12Wa15S2" placeholder="<?php if (isset($data['Q12Wa15S2'])) echo $data['Q12Wa15S2'] ?>"
                       value="<?php echo set_value('Q12Wa15S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa15S3" type="number"
                       name="Q12Wa15S3" placeholder="<?php if (isset($data['Q12Wa15S3'])) echo $data['Q12Wa15S3'] ?>"
                       value="<?php echo set_value('Q12Wa15S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa15S4" type="number"
                       name="Q12Wa15S4" placeholder="<?php if (isset($data['Q12Wa15S4'])) echo $data['Q12Wa15S4'] ?>"
                       value="<?php echo set_value('Q12Wa15S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Copying equipment (photocopiers) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S1" type="number"
                       name="Q12Wa16S1" placeholder="<?php if (isset($data['Q12Wa16S1'])) echo $data['Q12Wa16S1'] ?>"
                       value="<?php echo set_value('Q12Wa16S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S2" type="number"
                       name="Q12Wa16S2" placeholder="<?php if (isset($data['Q12Wa16S2'])) echo $data['Q12Wa16S2'] ?>"
                       value="<?php echo set_value('Q12Wa16S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa16S3" type="number"
                       name="Q12Wa16S3" placeholder="<?php if (isset($data['Q12Wa16S3'])) echo $data['Q12Wa16S3'] ?>"
                       value="<?php echo set_value('Q12Wa16S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa16S4" type="number"
                       name="Q12Wa16S4" placeholder="<?php if (isset($data['Q12Wa16S4'])) echo $data['Q12Wa16S4'] ?>"
                       value="<?php echo set_value('Q12Wa16S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Projectors </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S1" type="number"
                       name="Q12Wa17S1" placeholder="<?php if (isset($data['Q12Wa17S1'])) echo $data['Q12Wa17S1'] ?>"
                       value="<?php echo set_value('Q12Wa17S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S2" type="number"
                       name="Q12Wa17S2" placeholder="<?php if (isset($data['Q12Wa17S2'])) echo $data['Q12Wa17S2'] ?>"
                       value="<?php echo set_value('Q12Wa17S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa17S3" type="number"
                       name="Q12Wa17S3" placeholder="<?php if (isset($data['Q12Wa17S3'])) echo $data['Q12Wa17S3'] ?>"
                       value="<?php echo set_value('Q12Wa17S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa17S4" type="number"
                       name="Q12Wa17S4" placeholder="<?php if (isset($data['Q12Wa17S4'])) echo $data['Q12Wa17S4'] ?>"
                       value="<?php echo set_value('Q12Wa17S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Whiteboards </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S1" type="number"
                       name="Q12Wa18S1" placeholder="<?php if (isset($data['Q12Wa18S1'])) echo $data['Q12Wa18S1'] ?>"
                       value="<?php echo set_value('Q12Wa18S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S2" type="number"
                       name="Q12Wa18S2" placeholder="<?php if (isset($data['Q12Wa18S2'])) echo $data['Q12Wa18S2'] ?>"
                       value="<?php echo set_value('Q12Wa18S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa18S3" type="number"
                       name="Q12Wa18S3" placeholder="<?php if (isset($data['Q12Wa18S3'])) echo $data['Q12Wa18S3'] ?>"
                       value="<?php echo set_value('Q12Wa18S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa18S4" type="number"
                       name="Q12Wa18S4" placeholder="<?php if (isset($data['Q12Wa18S4'])) echo $data['Q12Wa18S4'] ?>"
                       value="<?php echo set_value('Q12Wa18S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Electrical and electronic typewriters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S1" type="number"
                       name="Q12Wa19S1" placeholder="<?php if (isset($data['Q12Wa19S1'])) echo $data['Q12Wa19S1'] ?>"
                       value="<?php echo set_value('Q12Wa19S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S2" type="number"
                       name="Q12Wa19S2" placeholder="<?php if (isset($data['Q12Wa19S2'])) echo $data['Q12Wa19S2'] ?>"
                       value="<?php echo set_value('Q12Wa19S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa19S3" type="number"
                       name="Q12Wa19S3" placeholder="<?php if (isset($data['Q12Wa19S3'])) echo $data['Q12Wa19S3'] ?>"
                       value="<?php echo set_value('Q12Wa19S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa19S4" type="number"
                       name="Q12Wa19S4" placeholder="<?php if (isset($data['Q12Wa19S4'])) echo $data['Q12Wa19S4'] ?>"
                       value="<?php echo set_value('Q12Wa19S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Pocket and desk calculators </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S1" type="number"
                       name="Q12Wa20S1" placeholder="<?php if (isset($data['Q12Wa20S1'])) echo $data['Q12Wa20S1'] ?>"
                       value="<?php echo set_value('Q12Wa20S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S2" type="number"
                       name="Q12Wa20S2" placeholder="<?php if (isset($data['Q12Wa20S2'])) echo $data['Q12Wa20S2'] ?>"
                       value="<?php echo set_value('Q12Wa20S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa20S3" type="number"
                       name="Q12Wa20S3" placeholder="<?php if (isset($data['Q12Wa20S3'])) echo $data['Q12Wa20S3'] ?>"
                       value="<?php echo set_value('Q12Wa20S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa20S4" type="number"
                       name="Q12Wa20S4" placeholder="<?php if (isset($data['Q12Wa20S4'])) echo $data['Q12Wa20S4'] ?>"
                       value="<?php echo set_value('Q12Wa20S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Fax machines </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S1" type="number"
                       name="Q12Wa21S1" placeholder="<?php if (isset($data['Q12Wa21S1'])) echo $data['Q12Wa21S1'] ?>"
                       value="<?php echo set_value('Q12Wa21S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S2" type="number"
                       name="Q12Wa21S2" placeholder="<?php if (isset($data['Q12Wa21S2'])) echo $data['Q12Wa21S2'] ?>"
                       value="<?php echo set_value('Q12Wa21S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa21S3" type="number"
                       name="Q12Wa21S3" placeholder="<?php if (isset($data['Q12Wa21S3'])) echo $data['Q12Wa21S3'] ?>"
                       value="<?php echo set_value('Q12Wa21S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa21S4" type="number"
                       name="Q12Wa21S4" placeholder="<?php if (isset($data['Q12Wa21S4'])) echo $data['Q12Wa21S4'] ?>"
                       value="<?php echo set_value('Q12Wa21S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Telex </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S1" type="number"
                       name="Q12Wa22S1" placeholder="<?php if (isset($data['Q12Wa22S1'])) echo $data['Q12Wa22S1'] ?>"
                       value="<?php echo set_value('Q12Wa22S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S2" type="number"
                       name="Q12Wa22S2" placeholder="<?php if (isset($data['Q12Wa22S2'])) echo $data['Q12Wa22S2'] ?>"
                       value="<?php echo set_value('Q12Wa22S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa22S3" type="number"
                       name="Q12Wa22S3" placeholder="<?php if (isset($data['Q12Wa22S3'])) echo $data['Q12Wa22S3'] ?>"
                       value="<?php echo set_value('Q12Wa22S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa22S4" type="number"
                       name="Q12Wa22S4" placeholder="<?php if (isset($data['Q12Wa22S4'])) echo $data['Q12Wa22S4'] ?>"
                       value="<?php echo set_value('Q12Wa22S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Telephones </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S1" type="number"
                       name="Q12Wa23S1" placeholder="<?php if (isset($data['Q12Wa23S1'])) echo $data['Q12Wa23S1'] ?>"
                       value="<?php echo set_value('Q12Wa23S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S2" type="number"
                       name="Q12Wa23S2" placeholder="<?php if (isset($data['Q12Wa23S2'])) echo $data['Q12Wa23S2'] ?>"
                       value="<?php echo set_value('Q12Wa23S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa23S3" type="number"
                       name="Q12Wa23S3" placeholder="<?php if (isset($data['Q12Wa23S3'])) echo $data['Q12Wa23S3'] ?>"
                       value="<?php echo set_value('Q12Wa23S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa23S4" type="number"
                       name="Q12Wa23S4" placeholder="<?php if (isset($data['Q12Wa23S4'])) echo $data['Q12Wa23S4'] ?>"
                       value="<?php echo set_value('Q12Wa23S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Pay telephones </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S1" type="number"
                       name="Q12Wa24S1" placeholder="<?php if (isset($data['Q12Wa24S1'])) echo $data['Q12Wa24S1'] ?>"
                       value="<?php echo set_value('Q12Wa24S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S2" type="number"
                       name="Q12Wa24S2" placeholder="<?php if (isset($data['Q12Wa24S2'])) echo $data['Q12Wa24S2'] ?>"
                       value="<?php echo set_value('Q12Wa24S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa24S3" type="number"
                       name="Q12Wa24S3" placeholder="<?php if (isset($data['Q12Wa24S3'])) echo $data['Q12Wa24S3'] ?>"
                       value="<?php echo set_value('Q12Wa24S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa24S4" type="number"
                       name="Q12Wa24S4" placeholder="<?php if (isset($data['Q12Wa24S4'])) echo $data['Q12Wa24S4'] ?>"
                       value="<?php echo set_value('Q12Wa24S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Mobiles </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S1" type="number"
                       name="Q12Wa25S1" placeholder="<?php if (isset($data['Q12Wa25S1'])) echo $data['Q12Wa25S1'] ?>"
                       value="<?php echo set_value('Q12Wa25S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S2" type="number"
                       name="Q12Wa25S2" placeholder="<?php if (isset($data['Q12Wa25S2'])) echo $data['Q12Wa25S2'] ?>"
                       value="<?php echo set_value('Q12Wa25S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa25S3" type="number"
                       name="Q12Wa25S3" placeholder="<?php if (isset($data['Q12Wa25S3'])) echo $data['Q12Wa25S3'] ?>"
                       value="<?php echo set_value('Q12Wa25S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa25S4" type="number"
                       name="Q12Wa25S4" placeholder="<?php if (isset($data['Q12Wa25S4'])) echo $data['Q12Wa25S4'] ?>"
                       value="<?php echo set_value('Q12Wa25S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Answering systems </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S1" type="number"
                       name="Q12Wa26S1" placeholder="<?php if (isset($data['Q12Wa26S1'])) echo $data['Q12Wa26S1'] ?>"
                       value="<?php echo set_value('Q12Wa26S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S2" type="number"
                       name="Q12Wa26S2" placeholder="<?php if (isset($data['Q12Wa26S2'])) echo $data['Q12Wa26S2'] ?>"
                       value="<?php echo set_value('Q12Wa26S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa26S3" type="number"
                       name="Q12Wa26S3" placeholder="<?php if (isset($data['Q12Wa26S3'])) echo $data['Q12Wa26S3'] ?>"
                       value="<?php echo set_value('Q12Wa26S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa26S4" type="number"
                       name="Q12Wa26S4" placeholder="<?php if (isset($data['Q12Wa26S4'])) echo $data['Q12Wa26S4'] ?>"
                       value="<?php echo set_value('Q12Wa26S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Induction cookers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S1" type="number"
                       name="Q12Wa27S1" placeholder="<?php if (isset($data['Q12Wa27S1'])) echo $data['Q12Wa27S1'] ?>"
                       value="<?php echo set_value('Q12Wa27S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S2" type="number"
                       name="Q12Wa27S2" placeholder="<?php if (isset($data['Q12Wa27S2'])) echo $data['Q12Wa27S2'] ?>"
                       value="<?php echo set_value('Q12Wa27S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa27S3" type="number"
                       name="Q12Wa27S3" placeholder="<?php if (isset($data['Q12Wa27S3'])) echo $data['Q12Wa27S3'] ?>"
                       value="<?php echo set_value('Q12Wa27S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa27S4" type="number"
                       name="Q12Wa27S4" placeholder="<?php if (isset($data['Q12Wa27S4'])) echo $data['Q12Wa27S4'] ?>"
                       value="<?php echo set_value('Q12Wa27S4'); ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Geysers/water heaters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S1" type="number"
                       name="Q12Wa28S1" placeholder="<?php if (isset($data['Q12Wa28S1'])) echo $data['Q12Wa28S1'] ?>"
                       value="<?php echo set_value('Q12Wa28S1'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S2" type="number"
                       name="Q12Wa28S2" placeholder="<?php if (isset($data['Q12Wa28S2'])) echo $data['Q12Wa28S2'] ?>"
                       value="<?php echo set_value('Q12Wa28S2'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa28S3" type="number"
                       name="Q12Wa28S3" placeholder="<?php if (isset($data['Q12Wa28S3'])) echo $data['Q12Wa28S3'] ?>"
                       value="<?php echo set_value('Q12Wa28S3'); ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa28S4" type="number"
                       name="Q12Wa28S4" placeholder="<?php if (isset($data['Q12Wa28S4'])) echo $data['Q12Wa28S4'] ?>"
                       value="<?php echo set_value('Q12Wa28S4'); ?>" readonly/>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of Electronic items used by school and storage of non-working electronic items<br>
  • Certificate of disposing e-waste from authorized dealer/dismantler<br>
  <br>
  <button class="btn uploadbtn upload" data-id="E-Waste" data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<div class="clearfix">&nbsp;</div>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_E-Waste_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label class="control-label"><span class="cube">9</span>Do you know that your e-waste can be collected by an
  authorized dealer or dismantler? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q13Wa1" onClick="WasteDealer (1)" class="radio" id="Q13Wa1"
                           value="<?php echo set_value('Q13Wa1', 'Y') ?>" <?php if (isset($data['Q13Wa1'])) echo $data['Q13Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q13Wa1" onClick="WasteDealer(2)" class="radio" id="Q13Wa1"
                           value="<?php echo set_value('Q13Wa1', 'N') ?>" <?php if (isset($data['Q13Wa1'])) echo $data['Q13Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<?php
                  if(isset($data['Q13Wa1']))
                  {  if($data['Q13Wa1'] == 'Y')
                  {
                  ?>
<div class="form-group" id="Q13Wa21">
<?php } else { ?>
<div class="form-group" id="Q13Wa21" style="display: none;">
<?php }
                          } else {?>
<div class="form-group" id="Q13Wa21" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">9(a)</span>Who collects your e-waste, when not in working condition?</label>
  <div class="radio">
    <label>
    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2', 1) ?>" <?php if (isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 1 ? "checked" : "" ?>>
    Kabadiwalla/ Scrapdealer </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2', 2) ?>" <?php if (isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 2 ? "checked" : "" ?>>
    Taken back by manufacturer/vendor </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2', 3) ?>" <?php if (isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 3 ? "checked" : "" ?>>
    Authorised dealer </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2', 4) ?>" <?php if (isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 4 ? "checked" : "" ?>>
    Authorised dismantler </label>
  </div>
  <div class="form-group row">
    <label>Other: &nbsp
    <input type="text" name="Q13Wa2O" value="<?php echo set_value('Q13Wa2O'); ?>" placeholder="<?php if (isset($data['Q13Wa2O'])) echo $data['Q13Wa2O'] ?>">
    </label>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Certificate of disposing e-waste from authorised dealer/dismantler<br>
  <br>
  <button class="btn uploadbtn upload" data-id="E-waste authorised dealer" data-toggle="modal"
                            data-target="#airModal" type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<br>
<br>
<div class="form-group">
  <label>
  <h6>Task 5: How does your school dispose of waste?</h6>
  </label>
  <br>
</div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">10</span>What is the final destination for waste from your
  school that is disposed of externally? <a class="kplink"
                                                          href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#landfillingPractices"
                                                          target="_blank"> </a></label>
  <div class="radio">
    <label>
    <input type="radio" name="Q14Wa1"
                           value="<?php echo set_value('Q14Wa1', 1) ?>" <?php if (isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 1 ? "checked" : "" ?>>
    Open dumping </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q14Wa1"
                           value="<?php echo set_value('Q14Wa1', 2) ?>" <?php if (isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 2 ? "checked" : "" ?>>
    Designated dumping site (Dhalao) </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q14Wa1"
                           value="<?php echo set_value('Q14Wa1', 3) ?>" <?php if (isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 3 ? "checked" : "" ?>>
    Landfill Site </label>
  </div>
  <div class="radio">
    <label>
    <input type="radio" name="Q14Wa1"
                           value="<?php echo set_value('Q14Wa1', 4) ?>" <?php if (isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 4 ? "checked" : "" ?>>
    Don’t know </label>
  </div>
</div>
<br>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of housekeeping staff disposing different types of solid waste<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Housekeeping"
                    data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<div class="clearfix">&nbsp;</div>
<table width="100%" class="question uploadedfiles">
  <thead>
    <tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($houseKeeping as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Housekeeping_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label class="control-label"><span class="cube">11</span>Does your school burn waste? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q15Wa1" onClick="WasteBurn(1)" class="radio" id="Q15Wa1"
                           value="<?php echo set_value('Q15Wa1', 'Y') ?>" <?php if (isset($data['Q15Wa1'])) echo $data['Q15Wa1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q15Wa1" onClick="WasteBurn(2)" class="radio" id="Q15Wa1"
                           value="<?php echo set_value('Q15Wa1', 'N') ?>" <?php if (isset($data['Q15Wa1'])) echo $data['Q15Wa1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of burning waste<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Buring Waste" data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<table width="100%" class="question uploadedfiles">
  <thead>
		<tr>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($burningWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php $name = str_replace(" ", "_", $f->name . "_Buring_Waste_"); ?>
			
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php
              if(isset($data['Q15Wa1']))
              {  
                if($data['Q15Wa1'] == 'Y')
                {
              ?>
<div class="form-group" id="Q15Wa2">
<?php } else { ?>
<div class="form-group" id="Q15Wa2" style="display: none;">
<?php }
              } else {?>
<div class="form-group" id="Q15Wa2" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">11(a)</span>Where does your school burn
  waste?</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q15Wa2" class="radio" id="Q15Wa2"
                                           value="<?php echo set_value('Q15Wa2', 1) ?>" <?php if (isset($data['Q15Wa2'])) echo $data['Q15Wa2'] == 1 ? "checked" : "" ?>>
        Inside the school </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q15Wa2" class="radio" id="Q15Wa2"
                                           value="<?php echo set_value('Q15Wa2', 2) ?>" <?php if (isset($data['Q15Wa2'])) echo $data['Q15Wa2'] == 2 ? "checked" : "" ?>>
        Outside the school </label>
      </li>
    </ul>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<?php
              if(isset($data['Q15Wa1']))
              {  
                if($data['Q15Wa1'] == 'Y')
                {
              ?>
<div class="form-group" id="Q15Wa3">
<?php } else { ?>
<div class="form-group" id="Q15Wa3" style="display: none;">
  <?php }
              } else {?>
  <div class="form-group" id="Q15Wa3" style="display: none;">
    <?php } ?>
    <label class="control-label"><span class="cube">11(b)</span>What kind of waste is burnt/
    incinerated?</label>
    <div class="form-group">
      <ul>
        <li>
          <label class="radio-inline text-gray">
          <input type="checkbox" name="Q15Wa2S1"
                                           value="<?php echo set_value('Q15Wa2S1', 1); ?>" <?php if (isset($data['Q15Wa2S1'])) echo "checked" ?>>
          Horticultural </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="checkbox" name="Q15Wa2S2"
                                           value="<?php echo set_value('Q15Wa2S2', 1); ?>" <?php if (isset($data['Q15Wa2S2'])) echo "checked" ?>>
          Plastic </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="checkbox" name="Q15Wa2S3"
                                           value="<?php echo set_value('Q15Wa2S3', 1); ?>" <?php if (isset($data['Q15Wa2S3'])) echo "checked" ?>>
          Tyres </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="checkbox" name="Q15Wa2S4"
                                           value="<?php echo set_value('Q15Wa2S4', 1); ?>" <?php if (isset($data['Q15Wa2S4'])) echo "checked" ?>>
          Paper </label>
        </li>
      </ul>
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="form-group">
    <label class="control-label"><span class="cube">12</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </label>
    <div class="form-group">
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16Wa1" class="radio" id="Q16Wa1" value="<?php echo set_value('Q16Wa1', 'Y') ?>" <?php if (isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16Wa1"class="radio" id="Q16Wa1" value="<?php echo set_value('Q16Wa1', 'N') ?>" <?php if (isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label>
    <h6>Task 6: School's initiatives.</h6>
    </label>
    <br>
    It is important to appreciate the initiatives taken by the management on issues related to waste. The
    management's approach to these issues can be assessed in the following way:
    Seek an appointment with the Chairperson, Manager and Principal of your school and ask them the following
    questions: </div>
  <br>
  <div class="form-group">
    <label class="control-label"><span class="cube">13</span>Does the school have a policy on waste?</label>
    <div class="form-group">
      <label class="radio-inline text-gray">
      <input type="radio" name="Q17Wa1" class="radio" onClick="WastePolicy(1)" id="Q17Wa1"
                           value="<?php echo set_value('Q17Wa1', 'Y') ?>" <?php if (isset($data['Q17Wa1'])) echo $data['Q17Wa1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q17Wa1" class="radio" onClick="WastePolicy(2)" id="Q17Wa1"
                           value="<?php echo set_value('Q17Wa1', 'N') ?>" <?php if (isset($data['Q17Wa1'])) echo $data['Q17Wa1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
  </div>
  <br>
  <?php if (isset($data['Q17Wa1']))
            if ($data['Q17Wa1'] == 'Y') {
                ?>
  <br>
  <div class="form-group" id="WastePolicy">
    <label class="control-label">Please upload supporting documents:</label>
    <br>
    • Waste Policy<br>
    <br>
    <button class="btn uploadbtn upload" data-id="Waste Policy" data-toggle="modal"
                            data-target="#airModal" type="button">UPLOAD FILES </button>
    <br>
    <br>
  </div>
  <?php
            } ?>
  <br>
  <div class="form-group" id="WastePolicy" style="display: none;">
    <label class="control-label">Please upload supporting documents:</label>
    <br>
    • Waste Policy<br>
    <br>
    <button class="btn uploadbtn upload" data-id="Water Policy" data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
    <br>
  </div>
  <div class="form-group">
    <label class="control-label"><span class="cube">14</span>Are there awareness drives with regard to Reduce,
    Recycle and Reuse? <a class="kplink"
                                      href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation"
                                      target="_blank"></a></label>
    <div class="form-group">
      <label class="radio-inline text-gray">
      <input type="radio" name="Q18Wa1" class="radio" onClick="WasteAwareness(1)" id="Q18Wa1"
                           value="<?php echo set_value('Q18Wa1', 'Y') ?>" <?php if (isset($data['Q18Wa1'])) echo $data['Q18Wa1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q18Wa1" class="radio" onClick="WasteAwareness(2)" id="Q18Wa1"
                           value="<?php echo set_value('Q18Wa1', 'N') ?>" <?php if (isset($data['Q18Wa1'])) echo $data['Q18Wa1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
  </div>
  <br>
  <?php
            if(isset($data['Q18Wa1']))
            {  if($data['Q18Wa1'] == 'Y')
            {
            ?>
  <div class="form-group" id="awareness">
    <?php } else { ?>
    <div class="form-group" id="awareness" style="display: none;">
      <?php }
                    } else {?>
      <div class="form-group" id="awareness" style="display: none;">
        <?php } ?>
        <br>
        <label class="control-label">Please upload supporting documents:</label>
        <br>
        • Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc<br>
        <br>
        <button class="btn uploadbtn upload" data-id="School Initiatives" data-toggle="modal"
                            data-target="#airModal" type="button">UPLOAD FILES </button>
        <br>
        <br>
      </div>
      <?php
            if(isset($data['Q18Wa1']))
            {  if($data['Q18Wa1'] == 'Y')
            {
            ?>
      <div class="form-group" id="Q18Wa3">
        <?php } else { ?>
        <div class="form-group" id="Q18Wa3" style="display: none;">
          <?php }
                    } else {?>
          <div class="form-group" id="Q18Wa3" style="display: none;">
            <?php } ?>
            <label class="control-label"><span class="cube">14(a)</span>What form do these awareness drives
            take? </label>
            <ul>
              <li>
                <div class="form-group">
                  <label class="radio text-gray">
                  <input type="checkbox" name="Q18Wa2S1"
                                           value="<?php echo set_value('Q18Wa2S1', 1); ?>" <?php if (isset($data['Q18Wa2S1'])) echo "checked" ?>>
                  As part of the curriculum </label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <label class="radio text-gray">
                  <input type="checkbox" name="Q18Wa2S2"
                                           value="<?php echo set_value('Q18Wa2S2', 2); ?>" <?php if (isset($data['Q18Wa2S2'])) echo "checked" ?>>
                  As part of extracurricular activities such as guest lectures </label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <label class="radio text-gray">
                  <input type="checkbox" name="Q18Wa2S3"
                                           value="<?php echo set_value('Q18Wa2S3', 3); ?>" <?php if (isset($data['Q18Wa2S3'])) echo "checked" ?>>
                  By the showcasing of posters and stickers </label>
                </div>
              </li>
            </ul>
          </div>
          <div class="form-group">
            <label class="control-label"><span class="cube">15</span>Is the study of the environment integrated into the
            curriculum?</label>
            <div class="form-group">
              <label class="radio-inline text-gray">
              <input type="radio" name="Q19Wa1" class="radio" onClick="WasteWwareness(1)" id="Q19Wa1"
                           value="<?php echo set_value('Q19Wa1', 'Y') ?>" <?php if (isset($data['Q19Wa1'])) echo $data['Q19Wa1'] == 'Y' ? "checked" : "" ?>>
              Yes </label>
              <label class="radio-inline text-gray">
              <input type="radio" name="Q19Wa1" class="radio" onClick="WasteWwareness(2)" id="Q19Wa1"
                           value="<?php echo set_value('Q19Wa1', 'N') ?>" <?php if (isset($data['Q19Wa1'])) echo $data['Q19Wa1'] == 'N' ? "checked" : "" ?>>
              No </label>
            </div>
          </div>
          <br>
          <div class="form-group" id="WastePolicy">
            <label class="control-label">Please upload supporting documents:</label>
            <br>
            • Pictures of audit team doing survey
            Please upload all supporting documents related to this section here. Note, files must be one of the
            following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
            File size per document should not exceed 500 KB.<br>
            <br>
            <button class="btn uploadbtn upload" data-id="Audit Team Doing Survey Waste" data-toggle="modal"
                    data-target="#airModal" type="button">UPLOAD FILES </button>
            <br>
          </div>
          <table width="100%" class="question uploadedfiles">
            <thead>
							<tr>
                <th>File name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($teamDoingWaste as $f) { ?>
              <tr id="index<?php echo $f->id; ?>">
                <?php $name = str_replace(" ", "_", $f->name . "_Audit_Team_Doing_Survey_"); ?>
								
                <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <div class="text-center">
            <button type="button" class="org-btn" id="btnWastePrevious">Previous</button>
            <button type="submit" class="org-btn" id="wastenext" value="movenext">Next</button>
            <button type="button" class="org-btn submit button" id="wastesave">Save and Resume Later</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
<style type="text/css">
    .text-gray {
        color: #666666 !important;
        /*font-weight:100!important;*/
    }
</style>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/CI-iGmii5Yk" frameborder="0"
                    allowfullscreen></iframe>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
    $('.close').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/CI-iGmii5Yk");
    });
    $('body').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/CI-iGmii5Yk");
    });

    $(document).ready(function () {
        $('#btnWastePrevious').on('click', function (data) {
            var fd = $('#waste').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/wasteajax') ?>',
                data: fd,
                success: function (data)
                {
                    window.location.href = "<?php echo base_url('water'); ?>";
                }
            });
        });
        $('#wastesave').on('click', function (data) {
            var fd = $('#waste').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/wasteajax') ?>',
                data: fd,
                success: function (data)
                {
                    window.location.href = "<?php echo base_url('logout'); ?>";
                }
            });
        });

        //delete air files
        $('body').on('click', '.air-delete-files', function (data) {
            var test = confirm("Are you sure you want to delete this file");
            if (test == true)
            {
                var divId = $(this).attr('data-id');
                $.ajax({
                    url: '<?php echo base_url('upload_files/deletFiles') ?>',
                    type: 'POST',
                    data: {id: $(this).attr('data-id')},
                    success: function (data)
                    {
                        if (data == "success")
                        {
                            console.log('index' + divId);
                            $('#msg').html('<div class="alert alert-success">' +
                                '<strong>&#10004; Success!</strong> Files deleted successfully.' +
                                '</div>');
                            $('#index' + divId).html('');
                        } else if (data == "error")
                        {
                            $('#msg').html('<div class="alert alert-danger">' +
                                '<strong>&#x2716; Error!</strong> There is an error deleting your files.' +
                                '</div>');
                        }
                    }
                });
            }
        });
    });
</script>
