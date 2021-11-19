<?php $this->load->view('header'); ?>
<style>
.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q4Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -39px !important;
    position: absolute;
    margin-left: 319px;
    text-shadow: 1px 1px 1px #000;
}

#Q4Wa2-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 519px;
    text-shadow: 1px 1px 1px #000;
}

#Q8Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 424px;
    text-shadow: 1px 1px 1px #000;
}

#Q9Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 358px;
    text-shadow: 1px 1px 1px #000;
}

#Q10Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 558px;
    text-shadow: 1px 1px 1px #000;
}

#Q13Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -40px !important;
    position: absolute;
    margin-left: 658px;
    text-shadow: 1px 1px 1px #000;
}

#Q14Wa1-error
{
      color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -34px !important;
    position: absolute;
    margin-left: 672px;
    text-shadow: 1px 1px 1px #000;
}

#Q15Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 255px;
    text-shadow: 1px 1px 1px #000;
}

#Q17Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 330px;
    text-shadow: 1px 1px 1px #000;
}

#Q18Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 575px;
    text-shadow: 1px 1px 1px #000;
}

#Q19Wa1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 492px;
    text-shadow: 1px 1px 1px #000;
}

#Q15Wa2-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 320px;
    text-shadow: 1px 1px 1px #000;
}

#Q13Wa2-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 474px;
    text-shadow: 1px 1px 1px #000;
}

</style>
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
<div id="pprg" class="newprog progress" style="text-align:center">
  <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
</div>
<div class="intro">
  <h1>WASTE <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--   <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
                            src="<?php echo base_url(); ?>assets/img/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
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
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 1</div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S1" type="text" name="Q1Wa1S1"
                           placeholder="<?php if (isset($data['Q1Wa1S1'])) echo $data['Q1Wa1S1']; ?>"
                           value="<?php if (isset($data['Q1Wa1S1'])) echo $data['Q1Wa1S1']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S3" type="text" name="Q1Wa1S3"
                           placeholder="<?php if (isset($data['Q1Wa1S3'])) echo $data['Q1Wa1S3']; ?>"
                           value="<?php if (isset($data['Q1Wa1S3'])) echo $data['Q1Wa1S3']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('email'); ?>
    <input class="form-control space-textbox" id="Q1Wa1S2" type="email" name="Q1Wa1S2"
                           placeholder="<?php if (isset($data['Q1Wa1S2'])) echo $data['Q1Wa1S2']; ?>"
                           value="<?php if (isset($data['Q1Wa1S2'])) echo $data['Q1Wa1S2']; ?>"/>
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
                               value="<?php if (isset($data['Q2Wa1S1'])) echo $data['Q2Wa1S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2Wa1S3" type="text" name="Q2Wa1S3"
                               placeholder="<?php if (isset($data['Q2Wa1S3'])) echo $data['Q2Wa1S3'] ?>"
                               value="<?php if (isset($data['Q2Wa1S3'])) echo $data['Q2Wa1S3'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2Wa1S2" type="email" name="Q2Wa1S2"
                               placeholder="<?php if (isset($data['Q2Wa1S2'])) echo $data['Q2Wa1S2'] ?>"
                               value="<?php if (isset($data['Q2Wa1S2'])) echo $data['Q2Wa1S2'] ?>"/>
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
                               value="<?php if (isset($data['Q3Wa1S1'])) echo $data['Q3Wa1S1'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3Wa1S2" type="text" name="Q3Wa1S2"
                               placeholder="<?php if (isset($data['Q3Wa1S2'])) echo $data['Q3Wa1S2'] ?>"
                               value="<?php if (isset($data['Q3Wa1S2'])) echo $data['Q3Wa1S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3Wa1S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa1S3"
                               placeholder="<?php if (isset($data['Q3Wa1S3'])) echo $data['Q3Wa1S3'] ?>"
                               value="<?php if (isset($data['Q3Wa1S3'])) echo $data['Q3Wa1S3'] ?>"/>
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
      <input class="form-control space-textbox" id="Q3Wa2S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa2S3"
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
      <input class="form-control space-textbox" id="Q3Wa3S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa3S3"
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
      <input class="form-control space-textbox" id="Q3Wa4S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa4S3"
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
      <input class="form-control space-textbox" id="Q3Wa5S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa5S3"
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
      <input class="form-control space-textbox" id="Q3Wa6S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa6S3"
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
      <input class="form-control space-textbox" id="Q3Wa7S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa7S3"
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
      <input class="form-control space-textbox" id="Q3Wa8S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa8S3"
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
      <input class="form-control space-textbox" id="Q3Wa9S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa9S3"
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
      <input class="form-control space-textbox" id="Q3Wa10S3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa10S3"
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
    <input type="radio" name="Q4Wa1" onClick="WasteSegregate(2)" class="Q4Wa1" id="Q4Wa1_1"
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
                                       placeholder="<?php if (isset($data['Q4Wa2S5'])) echo $data['Q4Wa2S5'] ?>">
    </label>
  </div>
</div>
<?php }  ?>
 
<div class="form-group">
  <label><span class="cube">2</span>How many categories does your school segregate waste into? </label>
  <ul>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2"
                                   value="<?php echo set_value('Q4Wa2', 1) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 1 ? "checked" : "" ?>>
      Two </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2_1"
                                   value="<?php echo set_value('Q4Wa2', 2) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 2 ? "checked" : "" ?>>
      Three </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="Q4Wa2" id="Q4Wa2_2"
                                   value="<?php echo set_value('Q4Wa2', 3) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 3 ? "checked" : "" ?>>
      More than three </label>
    </li>

    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q4Wa2" class="Q4Wa2" id="Q4Wa2_3"
                                   value="<?php echo set_value('Q4Wa2', 4) ?>" <?php if (isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 4 ? "checked" : "" ?>>
      None </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">2(a)</span> If your school segregates waste, please count the areas (collection points) that are with and without dustbins and enter below </label> <br/>
  <div class="form-group" style="margin-left: 55px;">
      <ul>
        <li>
            Waste collection points are the areas (classrooms, playgrounds, sick room, etc) where dustbins are placed. Students will have to count the number of waste collection points in the school.
        </li>
        <li>
          For instance, given below is an example of a school that has 10 classrooms (row 1) and waste collection points as follows:
        </li>
        <li>
          ● Two classrooms have no dustbins, then the school will enter 0 in column 1
        </li>
        <li>
          ● One classroom has one bin (mixed waste), enter 1 in column 2 
        </li>
        <li>
          ● Four classrooms with one bin system (for only dry waste) enter 4 in column 3
        </li>
        <li>
          ● Three classrooms with two bins (wet and dry) enter 3 in column 4  
        </li>
        <li>
          ● Zero classrooms with three bins or more enter 0 in column 5 
        </li>
         
      </ul>
    </div>
    <br/>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Area </label>
    </div>
    <div class="col-xs-1">
      <label>Column 1 <br/> No. of waste collection points with no bin </label>
    </div>
    <div class="col-xs-2">
      <label>Column 2 <br/> No. of waste collection points with one bin (mixed waste) </label>
    </div>

    <div class="col-xs-2">
      <label>Column 3 <br/> No. of waste collection points with one bin (for only dry waste) </label>
    </div>

    <div class="col-xs-2">
      <label>Column 4 <br/> No. of waste collection points with two bins (wet & dry) </label>
    </div>
    <div class="col-xs-2">
      <label>Column 5 <br/> No. of waste collection points with three bins or more </label>
    </div>
    <div class="col-xs-2">
      <label>Total no. of collection points </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Classrooms </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S1"
                               type="number"   step="any"   name="Q5Wa1S1"
                               placeholder="<?php if (isset($data['Q5Wa1S1'])) echo $data['Q5Wa1S1'] ?>"
                               value="<?php if (isset($data['Q5Wa1S1'])) echo $data['Q5Wa1S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S2"
                               type="number"   step="any"   name="Q5Wa1S2"
                               placeholder="<?php if (isset($data['Q5Wa1S2'])) echo $data['Q5Wa1S2'] ?>"
                               value="<?php if (isset($data['Q5Wa1S2'])) echo $data['Q5Wa1S2'] ?>"/>
    </div>


    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S6"
                               type="number"   step="any"   name="Q5Wa1S6"
                               placeholder="<?php if (isset($data['Q5Wa1S6'])) echo $data['Q5Wa1S6'] ?>"
                               value="<?php if (isset($data['Q5Wa1S6'])) echo $data['Q5Wa1S6'] ?>"/>
    </div>



    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S3"
                               type="number"   step="any"   name="Q5Wa1S3"
                               placeholder="<?php if (isset($data['Q5Wa1S3'])) echo $data['Q5Wa1S3'] ?>"
                               value="<?php if (isset($data['Q5Wa1S3'])) echo $data['Q5Wa1S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa1S4"
                               type="number"   step="any"   name="Q5Wa1S4"
                               placeholder="<?php if (isset($data['Q5Wa1S4'])) echo $data['Q5Wa1S4'] ?>"
                               value="<?php if (isset($data['Q5Wa1S4'])) echo $data['Q5Wa1S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <?php
                        if (empty($data['Q5Wa1S5']))
                            $data['Q5Wa1S5'] = 0;
                        $attribs = array("class" => "form-control space-textbox", "id" => "Q5Wa1S5", "type" => "number", "name" => "Q5Wa1S5", "readonly" => "true");
                        echo form_input('Q5Wa1S5', $data['Q5Wa1S5'], $attribs);
                        ?>
      <!-- <input class="form-control space-textbox" id="Q5Wa1S5" type="number"   step="any"   name="Q5Wa1S5" placeholder="<?php if (isset($data['Q5Wa1S5'])) echo $data['Q5Wa1S5'] ?>" value="<?php echo set_value('Q5Wa1S5'); ?>" readonly/>
               -->
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Playgrounds </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S1"
                               type="number"   step="any"   name="Q5Wa2S1"
                               placeholder="<?php if (isset($data['Q5Wa2S1'])) echo $data['Q5Wa2S1'] ?>"
                               value="<?php if (isset($data['Q5Wa2S1'])) echo $data['Q5Wa2S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S2"
                               type="number"   step="any"   name="Q5Wa2S2"
                               placeholder="<?php if (isset($data['Q5Wa2S2'])) echo $data['Q5Wa2S2'] ?>"
                               value="<?php if (isset($data['Q5Wa2S2'])) echo $data['Q5Wa2S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S6"
                               type="number"   step="any"   name="Q5Wa2S6"
                               placeholder="<?php if (isset($data['Q5Wa2S6'])) echo $data['Q5Wa2S6'] ?>"
                               value="<?php if (isset($data['Q5Wa2S6'])) echo $data['Q5Wa2S6'] ?>"/>
    </div>
    

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S3"
                               type="number"   step="any"   name="Q5Wa2S3"
                               placeholder="<?php if (isset($data['Q5Wa2S3'])) echo $data['Q5Wa2S3'] ?>"
                               value="<?php if (isset($data['Q5Wa2S3'])) echo $data['Q5Wa2S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa2S4"
                               type="number"   step="any"   name="Q5Wa2S4"
                               placeholder="<?php if (isset($data['Q5Wa2S4'])) echo $data['Q5Wa2S4'] ?>"
                               value="<?php if (isset($data['Q5Wa2S4'])) echo $data['Q5Wa2S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa2S5" type="number"   step="any"   name="Q5Wa2S5"
                               placeholder="<?php if (isset($data['Q5Wa2S5'])) echo $data['Q5Wa2S5'] ?>"
                               value="<?php if (isset($data['Q5Wa2S5'])) echo $data['Q5Wa2S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Common area </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S1"
                               type="number"   step="any"   name="Q5Wa3S1"
                               placeholder="<?php if (isset($data['Q5Wa3S1'])) echo $data['Q5Wa3S1'] ?>"
                               value="<?php if (isset($data['Q5Wa3S1'])) echo $data['Q5Wa3S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S2"
                               type="number"   step="any"   name="Q5Wa3S2"
                               placeholder="<?php if (isset($data['Q5Wa3S2'])) echo $data['Q5Wa3S2'] ?>"
                               value="<?php if (isset($data['Q5Wa3S2'])) echo $data['Q5Wa3S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S6"
                               type="number"   step="any"   name="Q5Wa3S6"
                               placeholder="<?php if (isset($data['Q5Wa3S6'])) echo $data['Q5Wa3S6'] ?>"
                               value="<?php if (isset($data['Q5Wa3S6'])) echo $data['Q5Wa3S6'] ?>"/>
    </div>



    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S3"
                               type="number"   step="any"   name="Q5Wa3S3"
                               placeholder="<?php if (isset($data['Q5Wa3S3'])) echo $data['Q5Wa3S3'] ?>"
                               value="<?php if (isset($data['Q5Wa3S3'])) echo $data['Q5Wa3S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S4"
                               type="number"   step="any"   name="Q5Wa3S4"
                               placeholder="<?php if (isset($data['Q5Wa3S4'])) echo $data['Q5Wa3S4'] ?>"
                               value="<?php if (isset($data['Q5Wa3S4'])) echo $data['Q5Wa3S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa3S5"
                               type="number"   step="any"   name="Q5Wa3S5"
                               placeholder="<?php if (isset($data['Q5Wa3S5'])) echo $data['Q5Wa3S5'] ?>"
                               value="<?php if (isset($data['Q5Wa3S5'])) echo $data['Q5Wa3S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Staffroom </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S1"
                               type="number"   step="any"   name="Q5Wa4S1"
                               placeholder="<?php if (isset($data['Q5Wa4S1'])) echo $data['Q5Wa4S1'] ?>"
                               value="<?php if (isset($data['Q5Wa4S1'])) echo $data['Q5Wa4S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S2"
                               type="number"   step="any"   name="Q5Wa4S2"
                               placeholder="<?php if (isset($data['Q5Wa4S2'])) echo $data['Q5Wa4S2'] ?>"
                               value="<?php if (isset($data['Q5Wa4S2'])) echo $data['Q5Wa4S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S6"
                               type="number"   step="any"   name="Q5Wa4S6"
                               placeholder="<?php if (isset($data['Q5Wa4S6'])) echo $data['Q5Wa4S6'] ?>"
                               value="<?php if (isset($data['Q5Wa4S6'])) echo $data['Q5Wa4S6'] ?>"/>
    </div>


    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S3"
                               type="number"   step="any"   name="Q5Wa4S3"
                               placeholder="<?php if (isset($data['Q5Wa4S3'])) echo $data['Q5Wa4S3'] ?>"
                               value="<?php if (isset($data['Q5Wa4S3'])) echo $data['Q5Wa4S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S4"
                               type="number"   step="any"   name="Q5Wa4S4"
                               placeholder="<?php if (isset($data['Q5Wa4S4'])) echo $data['Q5Wa4S4'] ?>"
                               value="<?php if (isset($data['Q5Wa4S4'])) echo $data['Q5Wa4S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa4S5"
                               type="number"   step="any"   name="Q5Wa4S5"
                               placeholder="<?php if (isset($data['Q5Wa4S5'])) echo $data['Q5Wa4S5'] ?>"
                               value="<?php if (isset($data['Q5Wa4S5'])) echo $data['Q5Wa4S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Laboratory </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S1"
                               type="number"   step="any"   name="Q5Wa5S1"
                               placeholder="<?php if (isset($data['Q5Wa5S1'])) echo $data['Q5Wa5S1'] ?>"
                               value="<?php if (isset($data['Q5Wa5S1'])) echo $data['Q5Wa5S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S2"
                               type="number"   step="any"   name="Q5Wa5S2"
                               placeholder="<?php if (isset($data['Q5Wa5S2'])) echo $data['Q5Wa5S2'] ?>"
                               value="<?php if (isset($data['Q5Wa5S2'])) echo $data['Q5Wa5S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S6"
                               type="number"   step="any"   name="Q5Wa5S6"
                               placeholder="<?php if (isset($data['Q5Wa5S6'])) echo $data['Q5Wa5S6'] ?>"
                               value="<?php if (isset($data['Q5Wa5S6'])) echo $data['Q5Wa5S6'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S3"
                               type="number"   step="any"   name="Q5Wa5S3"
                               placeholder="<?php if (isset($data['Q5Wa5S3'])) echo $data['Q5Wa5S3'] ?>"
                               value="<?php if (isset($data['Q5Wa5S3'])) echo $data['Q5Wa5S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa5S4"
                               type="number"   step="any"   name="Q5Wa5S4"
                               placeholder="<?php if (isset($data['Q5Wa5S4'])) echo $data['Q5Wa5S4'] ?>"
                               value="<?php if (isset($data['Q5Wa5S4'])) echo $data['Q5Wa5S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa5S5" type="number"   step="any"   name="Q5Wa5S5"
                               placeholder="<?php if (isset($data['Q5Wa5S5'])) echo $data['Q5Wa5S5'] ?>"
                               value="<?php if (isset($data['Q5Wa5S5'])) echo $data['Q5Wa5S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Canteen </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S1"
                               type="number"   step="any"   name="Q5Wa6S1"
                               placeholder="<?php if (isset($data['Q5Wa6S1'])) echo $data['Q5Wa6S1'] ?>"
                               value="<?php if (isset($data['Q5Wa6S1'])) echo $data['Q5Wa6S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S2"
                               type="number"   step="any"   name="Q5Wa6S2"
                               placeholder="<?php if (isset($data['Q5Wa6S2'])) echo $data['Q5Wa6S2'] ?>"
                               value="<?php if (isset($data['Q5Wa6S2'])) echo $data['Q5Wa6S2'] ?>"/>
    </div>


    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S6"
                               type="number"   step="any"   name="Q5Wa6S6"
                               placeholder="<?php if (isset($data['Q5Wa6S6'])) echo $data['Q5Wa6S6'] ?>"
                               value="<?php if (isset($data['Q5Wa6S6'])) echo $data['Q5Wa6S6'] ?>"/>
    </div>


    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S3"
                               type="number"   step="any"   name="Q5Wa6S3"
                               placeholder="<?php if (isset($data['Q5Wa6S3'])) echo $data['Q5Wa6S3'] ?>"
                               value="<?php if (isset($data['Q5Wa6S3'])) echo $data['Q5Wa6S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa6S4"
                               type="number"   step="any"   name="Q5Wa6S4"
                               placeholder="<?php if (isset($data['Q5Wa6S4'])) echo $data['Q5Wa6S4'] ?>"
                               value="<?php if (isset($data['Q5Wa6S4'])) echo $data['Q5Wa6S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa6S5" type="number"   step="any"   name="Q5Wa6S5"
                               placeholder="<?php if (isset($data['Q5Wa6S5'])) echo $data['Q5Wa6S5'] ?>"
                               value="<?php if (isset($data['Q5Wa6S5'])) echo $data['Q5Wa6S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Clinic/sick room </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S1"
                               type="number"   step="any"   name="Q5Wa7S1"
                               placeholder="<?php if (isset($data['Q5Wa7S1'])) echo $data['Q5Wa7S1'] ?>"
                               value="<?php if (isset($data['Q5Wa7S1'])) echo $data['Q5Wa7S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S2"
                               type="number"   step="any"   name="Q5Wa7S2"
                               placeholder="<?php if (isset($data['Q5Wa7S2'])) echo $data['Q5Wa7S2'] ?>"
                               value="<?php if (isset($data['Q5Wa7S2'])) echo $data['Q5Wa7S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S6"
                               type="number"   step="any"   name="Q5Wa7S6"
                               placeholder="<?php if (isset($data['Q5Wa7S6'])) echo $data['Q5Wa7S6'] ?>"
                               value="<?php if (isset($data['Q5Wa7S6'])) echo $data['Q5Wa7S6'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S3"
                               type="number"   step="any"   name="Q5Wa7S3"
                               placeholder="<?php if (isset($data['Q5Wa7S3'])) echo $data['Q5Wa7S3'] ?>"
                               value="<?php if (isset($data['Q5Wa7S3'])) echo $data['Q5Wa7S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S4"
                               type="number"   step="any"   name="Q5Wa7S4"
                               placeholder="<?php if (isset($data['Q5Wa7S4'])) echo $data['Q5Wa7S4'] ?>"
                               value="<?php if (isset($data['Q5Wa7S4'])) echo $data['Q5Wa7S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa7S5"
                               type="number"   step="any"   name="Q5Wa7S5"
                               placeholder="<?php if (isset($data['Q5Wa7S5'])) echo $data['Q5Wa7S5'] ?>"
                               value="<?php if (isset($data['Q5Wa7S5'])) echo $data['Q5Wa7S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Library </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S1"

                               type="number"   step="any"   name="Q5Wa8S1"
                               placeholder="<?php if (isset($data['Q5Wa8S1'])) echo $data['Q5Wa8S1'] ?>"
                               value="<?php if (isset($data['Q5Wa8S1'])) echo $data['Q5Wa8S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S2"
                               type="number"   step="any"   name="Q5Wa8S2"
                               placeholder="<?php if (isset($data['Q5Wa8S2'])) echo $data['Q5Wa8S2'] ?>"
                               value="<?php if (isset($data['Q5Wa8S2'])) echo $data['Q5Wa8S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S6"
                               type="number"   step="any"   name="Q5Wa8S6"
                               placeholder="<?php if (isset($data['Q5Wa8S6'])) echo $data['Q5Wa8S6'] ?>"
                               value="<?php if (isset($data['Q5Wa8S6'])) echo $data['Q5Wa8S6'] ?>"/>
    </div>


    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S3"
                               type="number"   step="any"   name="Q5Wa8S3"
                               placeholder="<?php if (isset($data['Q5Wa8S3'])) echo $data['Q5Wa8S3'] ?>"
                               value="<?php if (isset($data['Q5Wa8S3'])) echo $data['Q5Wa8S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S4"
                               type="number"   step="any"   name="Q5Wa8S4"
                               placeholder="<?php if (isset($data['Q5Wa8S4'])) echo $data['Q5Wa8S4'] ?>"
                               value="<?php if (isset($data['Q5Wa8S4'])) echo $data['Q5Wa8S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa8S5"
                               type="number"   step="any"   name="Q5Wa8S5"
                               placeholder="<?php if (isset($data['Q5Wa8S5'])) echo $data['Q5Wa8S5'] ?>"
                               value="<?php if (isset($data['Q5Wa8S5'])) echo $data['Q5Wa8S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Toilets </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S1"
                               type="number"   step="any"   name="Q5Wa9S1"
                               placeholder="<?php if (isset($data['Q5Wa9S1'])) echo $data['Q5Wa9S1'] ?>"
                               value="<?php if (isset($data['Q5Wa9S1'])) echo $data['Q5Wa9S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S2"
                               type="number"   step="any"   name="Q5Wa9S2"
                               placeholder="<?php if (isset($data['Q5Wa9S2'])) echo $data['Q5Wa9S2'] ?>"
                               value="<?php if (isset($data['Q5Wa9S2'])) echo $data['Q5Wa9S2'] ?>"/>
    </div>
     
     <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S6"
                               type="number"   step="any"   name="Q5Wa9S6"
                               placeholder="<?php if (isset($data['Q5Wa9S6'])) echo $data['Q5Wa9S6'] ?>"
                               value="<?php if (isset($data['Q5Wa9S6'])) echo $data['Q5Wa9S6'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S3"
                               type="number"   step="any"   name="Q5Wa9S3"
                               placeholder="<?php if (isset($data['Q5Wa9S3'])) echo $data['Q5Wa9S3'] ?>"
                               value="<?php if (isset($data['Q5Wa9S3'])) echo $data['Q5Wa9S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S4"
                               type="number"   step="any"   name="Q5Wa9S4"
                               placeholder="<?php if (isset($data['Q5Wa9S4'])) echo $data['Q5Wa9S4'] ?>"
                               value="<?php if (isset($data['Q5Wa9S4'])) echo $data['Q5Wa9S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa9S5"
                               type="number"   step="any"   name="Q5Wa9S5"
                               placeholder="<?php if (isset($data['Q5Wa9S5'])) echo $data['Q5Wa9S5'] ?>"
                               value="<?php if (isset($data['Q5Wa9S5'])) echo $data['Q5Wa9S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Others </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S1"
                               type="number"   step="any"   name="Q5Wa10S1"
                               placeholder="<?php if (isset($data['Q5Wa10S1'])) echo $data['Q5Wa10S1'] ?>"
                               value="<?php if (isset($data['Q5Wa10S1'])) echo $data['Q5Wa10S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S2"
                               type="number"   step="any"   name="Q5Wa10S2"
                               placeholder="<?php if (isset($data['Q5Wa10S2'])) echo $data['Q5Wa10S2'] ?>"
                               value="<?php if (isset($data['Q5Wa10S2'])) echo $data['Q5Wa10S2'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S6"
                               type="number"   step="any"   name="Q5Wa10S6"
                               placeholder="<?php if (isset($data['Q5Wa10S6'])) echo $data['Q5Wa10S6'] ?>"
                               value="<?php if (isset($data['Q5Wa10S6'])) echo $data['Q5Wa10S6'] ?>"/>
    </div>

    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S3"
                               type="number"   step="any"   name="Q5Wa10S3"
                               placeholder="<?php if (isset($data['Q5Wa10S3'])) echo $data['Q5Wa10S3'] ?>"
                               value="<?php if (isset($data['Q5Wa10S3'])) echo $data['Q5Wa10S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S4"
                               type="number"   step="any"   name="Q5Wa10S4"
                               placeholder="<?php if (isset($data['Q5Wa10S4'])) echo $data['Q5Wa10S4'] ?>"
                               value="<?php if (isset($data['Q5Wa10S4'])) echo $data['Q5Wa10S4'] ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeeSegregate()" id="Q5Wa10S5"
                               type="number"   step="any"   name="Q5Wa10S5"
                               placeholder="<?php if (isset($data['Q5Wa10S5'])) echo $data['Q5Wa10S5'] ?>"
                               value="<?php if (isset($data['Q5Wa10S5'])) echo $data['Q5Wa10S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1">
      <label>Total </label>
    </div>
    <div class="col-xs-1">
      <input class="form-control space-textbox" id="Q5Wa11S1" type="number"   step="any"   name="Q5Wa11S1"
                               placeholder="<?php if (isset($data['Q5Wa11S1'])) echo $data['Q5Wa11S1'] ?>"
                               value="<?php if (isset($data['Q5Wa11S1'])) echo $data['Q5Wa11S1'] ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S2" type="number"   step="any"   name="Q5Wa11S2"
                               placeholder="<?php if (isset($data['Q5Wa11S2'])) echo $data['Q5Wa11S2'] ?>"
                               value="<?php if (isset($data['Q5Wa11S2'])) echo $data['Q5Wa11S2'] ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S6" type="number"   step="any"   name="Q5Wa11S6"
                               placeholder="<?php if (isset($data['Q5Wa11S6'])) echo $data['Q5Wa11S6'] ?>"
                               value="<?php if (isset($data['Q5Wa11S6'])) echo $data['Q5Wa11S6'] ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S3" type="number"   step="any"   name="Q5Wa11S3"
                               placeholder="<?php if (isset($data['Q5Wa11S3'])) echo $data['Q5Wa11S3'] ?>"
                               value="<?php if (isset($data['Q5Wa11S3'])) echo $data['Q5Wa11S3'] ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S4" type="number"   step="any"   name="Q5Wa11S4"
                               placeholder="<?php if (isset($data['Q5Wa11S4'])) echo $data['Q5Wa11S4'] ?>"
                               value="<?php if (isset($data['Q5Wa11S4'])) echo $data['Q5Wa11S4'] ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q5Wa11S5" type="number"   step="any"   name="Q5Wa11S5"
                               placeholder="<?php if (isset($data['Q5Wa11S5'])) echo $data['Q5Wa11S5'] ?>"
                               value="<?php if (isset($data['Q5Wa11S5'])) echo $data['Q5Wa11S5'] ?>" readonly/>
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
      <!-- <th>Image</th>     -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($segregationClassroom as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
    //$array = explode('.',$f->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!-- <td><img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Segregation_Source_Classrooms_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Garden/horticulture waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S1" type="number"   step="any"  
                               name="Q6Wa1S1" placeholder="<?php if (isset($data['Q6Wa1S1'])) echo $data['Q6Wa1S1'] ?>"
                               value="<?php if (isset($data['Q6Wa1S1'])) echo $data['Q6Wa1S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Kitchen waste—Raw </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S2" type="number"   step="any"  
                               name="Q6Wa1S2" placeholder="<?php if (isset($data['Q6Wa1S2'])) echo $data['Q6Wa1S2'] ?>"
                               value="<?php if (isset($data['Q6Wa1S2'])) echo $data['Q6Wa1S2'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Kitchen waste—Cooked </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S3" type="number"   step="any"  
                               name="Q6Wa1S3" placeholder="<?php if (isset($data['Q6Wa1S3'])) echo $data['Q6Wa1S3'] ?>"
                               value="<?php if (isset($data['Q6Wa1S3'])) echo $data['Q6Wa1S3'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Wet waste from classrooms etc. </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S4" type="number"   step="any"  
                               name="Q6Wa1S4" placeholder="<?php if (isset($data['Q6Wa1S4'])) echo $data['Q6Wa1S4'] ?>"
                               value="<?php if (isset($data['Q6Wa1S4'])) echo $data['Q6Wa1S4'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S5" type="number"   step="any"  
                               name="Q6Wa1S5" placeholder="<?php if (isset($data['Q6Wa1S5'])) echo $data['Q6Wa1S5'] ?>"
                               value="<?php if (isset($data['Q6Wa1S5'])) echo $data['Q6Wa1S5'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (a): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q6Wa1S6" type="number"   step="any"  
                               name="Q6Wa1S6" placeholder="<?php if (isset($data['Q6Wa1S6'])) echo $data['Q6Wa1S6'] ?>"
                               value="<?php echo set_value('Q6Wa1S6'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">b.</span>Dry/recyclable waste
  <audio controls id="TetraPak" class="audio hide">
    <source src="<?php echo base_url(); ?>assets/audio-files/Tetra Pak.MP3" type="audio/mpeg">
    Your browser does not support the audio element. </audio>
  <a class="btn" id="btn" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Plastic </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S1" type="number"   step="any"  
                               name="Q6Wa2S1" placeholder="<?php if (isset($data['Q6Wa2S1'])) echo $data['Q6Wa2S1'] ?>"
                               value="<?php if (isset($data['Q6Wa2S1'])) echo $data['Q6Wa2S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Paper </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S2" type="number"   step="any"  
                               name="Q6Wa2S2" placeholder="<?php if (isset($data['Q6Wa2S2'])) echo $data['Q6Wa2S2'] ?>"
                               value="<?php if (isset($data['Q6Wa2S2'])) echo $data['Q6Wa2S2'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Wood or classroom furniture </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S3" type="number"   step="any"  
                               name="Q6Wa2S3" placeholder="<?php if (isset($data['Q6Wa2S3'])) echo $data['Q6Wa2S3'] ?>"
                               value="<?php if (isset($data['Q6Wa2S3'])) echo $data['Q6Wa2S3'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Glass </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S4" type="number"   step="any"  
                               name="Q6Wa2S4" placeholder="<?php if (isset($data['Q6Wa2S4'])) echo $data['Q6Wa2S4'] ?>"
                               value="<?php if (isset($data['Q6Wa2S4'])) echo $data['Q6Wa2S4'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Metal </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S5" type="number"   step="any"  
                               name="Q6Wa2S5" placeholder="<?php if (isset($data['Q6Wa2S5'])) echo $data['Q6Wa2S5'] ?>"
                               value="<?php if (isset($data['Q6Wa2S5'])) echo $data['Q6Wa2S5'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Thermocol </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S6" type="number"   step="any"  
                               name="Q6Wa2S6" placeholder="<?php if (isset($data['Q6Wa2S6'])) echo $data['Q6Wa2S6'] ?>"
                               value="<?php if (isset($data['Q6Wa2S6'])) echo $data['Q6Wa2S6'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Tetra packs </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S7" type="number"   step="any"  
                               name="Q6Wa2S7" placeholder="<?php if (isset($data['Q6Wa2S7'])) echo $data['Q6Wa2S7'] ?>"
                               value="<?php if (isset($data['Q6Wa2S7'])) echo $data['Q6Wa2S7'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S8" type="number"   step="any"  
                               name="Q6Wa2S8" placeholder="<?php if (isset($data['Q6Wa2S8'])) echo $data['Q6Wa2S8'] ?>"
                               value="<?php if (isset($data['Q6Wa2S8'])) echo $data['Q6Wa2S8'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (b): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="solidRecyclable()" id="Q6Wa2S9" type="number"   step="any"  
                               name="Q6Wa2S9" placeholder="<?php if (isset($data['Q6Wa2S9'])) echo $data['Q6Wa2S9'] ?>"
                               value="<?php if (isset($data['Q6Wa2S9'])) echo $data['Q6Wa2S9'] ?>" readonly/>
    </div>
  </div>

  <div class="clearfix">&nbsp;</div>
<div class="form-group">
    <label class="control-label"><span class="cube">b(1)</span>Is your school a single-use plastic-free zone? <a class="tt" data-tooltip="Single-use plastics are a by-product of petroleum and are thrown away after just one use. The school campus is a single-use plastic-free zone if there are no such plastics present or being used in any way, inside the campus."><span class="badge">?</span></a> <a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a></label>
     <div class="form-group">
     <label class="radio-inline text-gray">
        <input type="radio" name="Q3bWa1" value="<?php echo set_value('Q3bWa1', 'Y') ?>" <?php if (isset($data['Q3bWa1'])) echo $data['Q3bWa1'] == 'Y' ? "checked" : "" ?>> Yes </label>
      
     <label class="radio-inline text-gray">
        <input type="radio" name="Q3bWa1" value="<?php echo set_value('Q3bWa1', 'N') ?>" <?php if (isset($data['Q3bWa1'])) echo $data['Q3bWa1'] == 'N' ? "checked" : "" ?>> No </label>
     </div>
   </div>

<div class="clearfix">&nbsp;</div>
   <div class="form-group">
    <label class="control-label"><span class="cube">b(2)</span>Does the school give plastic items during meetings and events or to the visitors? <a class="tt" data-tooltip="For example, new notepads which are inside plastic clear bags, plastic pens, mementos"><span class="badge">?</span></a></label>
     <div class="form-group">
     <label class="radio-inline text-gray">
        <input type="radio" name="Q3b2Wa1" value="<?php echo set_value('Q3b2Wa1', 'Y') ?>" <?php if (isset($data['Q3b2Wa1'])) echo $data['Q3b2Wa1'] == 'Y' ? "checked" : "" ?>> Yes </label>
      
     <label class="radio-inline text-gray">
        <input type="radio" name="Q3b2Wa1" value="<?php echo set_value('Q3b2Wa1', 'N') ?>" <?php if (isset($data['Q3b2Wa1'])) echo $data['Q3b2Wa1'] == 'N' ? "checked" : "" ?>> No </label>
     </div>
   </div>

   <div class="clearfix">&nbsp;</div>

    <div class="form-group" id="Q9Wa3_b2a" style="display: none">
      <label for="username" class="control-label"><span class="cube">b(2)(a)</span>If yes, please provide details:</label>
      <br>
      <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name="Q3b2Wa2" id="Q3b2Wa2" class="form-control space-textbox"
                   placeholder="<?php if (isset($data['Q3b2Wa2'])) echo $data['Q3b2Wa2'] ?>"
                   value="<?php if (isset($data['Q3b2Wa2'])) echo $data['Q3b2Wa2'] ?>">
    </div>

<div class="clearfix">&nbsp;</div>

 <div class="form-group row">
    <label><span class="cube">b(3)</span>What is the material used to wrap prizes/awards at school events?</label>
    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b3Wa1" value="<?php echo set_value('Q3b3Wa1', 1); ?>" <?php if (isset($data['Q3b3Wa1'])) echo "checked" ?>> &nbsp; Gift wrapping paper</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa1" value="<?php echo set_value('Q3b4Wa1', 1); ?>" <?php if (isset($data['Q3b4Wa1'])) echo "checked" ?>> &nbsp; Coated gift-wrapping plastic sheet</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b5Wa1" value="<?php echo set_value('Q3b5Wa1', 1); ?>" <?php if (isset($data['Q3b5Wa1'])) echo "checked" ?>> &nbsp; Newspaper </label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b6Wa1" value="<?php echo set_value('Q3b6Wa1', 1); ?>" <?php if (isset($data['Q3b6Wa1'])) echo "checked" ?>> &nbsp; Plastic wrapping used for flower bouquets </label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b7Wa1" value="<?php echo set_value('Q3b7Wa1', 1); ?>" <?php if (isset($data['Q3b7Wa1'])) echo "checked" ?>> &nbsp; Other </label>
    </div>     
     
  </div>

  <div class="clearfix">&nbsp;</div>

 <div class="form-group row">
    <label><span class="cube">b(4)</span>Please select the material your school uses to display information for events such as quizzes, talent shows, debates on the noticeboard?</label>
    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa4" value="<?php echo set_value('Q3b4Wa4', 1); ?>" <?php if (isset($data['Q3b4Wa4'])) echo "checked" ?>> &nbsp; Metal </label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa5" value="<?php echo set_value('Q3b4Wa5', 1); ?>" <?php if (isset($data['Q3b4Wa5'])) echo "checked" ?>> &nbsp; Poly Vinyl chloride (PVC) Flexible Sheets/Flex plastic sheets</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa6" value="<?php echo set_value('Q3b4Wa6', 1); ?>" <?php if (isset($data['Q3b4Wa6'])) echo "checked" ?>> &nbsp; Glass</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa7" value="<?php echo set_value('Q3b4Wa7', 1); ?>" <?php if (isset($data['Q3b4Wa7'])) echo "checked" ?>> &nbsp; Fabric</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa8" value="<?php echo set_value('Q3b4Wa8', 1); ?>" <?php if (isset($data['Q3b4Wa8'])) echo "checked" ?>> &nbsp; Paper/chart paper</label>
    </div>

    <div class="text-gray">
      <label>
      <input type="checkbox" name="Q3b4Wa9" value="<?php echo set_value('Q3b4Wa9', 1); ?>" <?php if (isset($data['Q3b4Wa9'])) echo "checked" ?>> &nbsp; Others</label>
    </div>     
     
  </div>


  <div class="clearfix">&nbsp;</div>


<div class="form-group">
  <label><span class="cube">c.</span>Domestic hazardous waste</label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Hazardous and toxic waste (Paints, lab waste, etc) </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S1" type="number"   step="any"  
                               name="Q6Wa3S1" placeholder="<?php if (isset($data['Q6Wa3S1'])) echo $data['Q6Wa3S1'] ?>"
                               value="<?php if (isset($data['Q6Wa3S1'])) echo $data['Q6Wa3S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Oil from diesel generator sets </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S2" type="number"   step="any"  
                               name="Q6Wa3S2" placeholder="<?php if (isset($data['Q6Wa3S2'])) echo $data['Q6Wa3S2'] ?>"
                               value="<?php if (isset($data['Q6Wa3S2'])) echo $data['Q6Wa3S2'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Total amount of waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S3" type="number"   step="any"  
                               name="Q6Wa3S3" placeholder="<?php if (isset($data['Q6Wa3S3'])) echo $data['Q6Wa3S3'] ?>"
                               value="<?php if (isset($data['Q6Wa3S3'])) echo $data['Q6Wa3S3'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (c). </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteDomestic()" id="Q6Wa3S4" type="number"   step="any"  
                               name="Q6Wa3S4" placeholder="<?php if (isset($data['Q6Wa3S4'])) echo $data['Q6Wa3S4'] ?>"
                               value="<?php if (isset($data['Q6Wa3S4'])) echo $data['Q6Wa3S4'] ?>" readonly/>
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
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>E-waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="EWaste()" id="Q6Wa4S1" type="number"   step="any"  
                               name="Q6Wa4S1" placeholder="<?php if (isset($data['Q6Wa4S1'])) echo $data['Q6Wa4S1'] ?>"
                               value="<?php if (isset($data['Q6Wa4S1'])) echo $data['Q6Wa4S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (d): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="EWaste()" id="Q6Wa4S2" type="number"   step="any"  
                               name="Q6Wa4S2" placeholder="<?php if (isset($data['Q6Wa4S2'])) echo $data['Q6Wa4S2'] ?>"
                               value="<?php if (isset($data['Q6Wa4S2'])) echo $data['Q6Wa4S2'] ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">e.</span>Biomedical waste <a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a> </label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Biomedical waste such as syringes, band–aids, expired medicines etc. </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteBiomedical()" id="Q6Wa5S1" type="number"   step="any"  
                               name="Q6Wa5S1" placeholder="<?php if (isset($data['Q6Wa5S1'])) echo $data['Q6Wa5S1'] ?>"
                               value="<?php if (isset($data['Q6Wa5S1'])) echo $data['Q6Wa5S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (e): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteBiomedical()" id="Q6Wa5S2" type="number"   step="any"  
                               name="Q6Wa5S2" placeholder="<?php if (isset($data['Q6Wa5S2'])) echo $data['Q6Wa5S2'] ?>"
                               value="<?php if (isset($data['Q6Wa5S2'])) echo $data['Q6Wa5S2'] ?>" readonly/>
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
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Sanitary waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteSanitary()" id="Q6Wa6S1" type="number"   step="any"  
                               name="Q6Wa6S1" placeholder="<?php if (isset($data['Q6Wa6S1'])) echo $data['Q6Wa6S1'] ?>"
                               value="<?php if (isset($data['Q6Wa6S1'])) echo $data['Q6Wa6S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (f): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteSanitary()" id="Q6Wa6S2" type="number"   step="any"  
                               name="Q6Wa6S2" placeholder="<?php if (isset($data['Q6Wa6S2'])) echo $data['Q6Wa6S2'] ?>"
                               value="<?php if (isset($data['Q6Wa6S2'])) echo $data['Q6Wa6S2'] ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label><span class="cube">g.</span>C & D Waste <a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a> </label>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>HOW MUCH WASTE DOES YOUR SCHOOL GENERATE? </label>
    </div>
    <div class="col-xs-6">
      <label>Quantity of solid waste generated (monthly average in kg) </label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Construction and demolition waste </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteConstruction()" id="Q6Wa7S1"
                               type="number"   step="any"   name="Q6Wa7S1"
                               placeholder="<?php if (isset($data['Q6Wa7S1'])) echo $data['Q6Wa7S1'] ?>"
                               value="<?php if (isset($data['Q6Wa7S1'])) echo $data['Q6Wa7S1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-6">
      <label>Per capita waste generation (g): </label>
    </div>
    <div class="col-xs-6">
      <input class="form-control space-textbox" onKeyUp="WasteConstruction()" id="Q6Wa7S2"
                               type="number"   step="any"   name="Q6Wa7S2"
                               placeholder="<?php if (isset($data['Q6Wa7S2'])) echo $data['Q6Wa7S2'] ?>"
                               value="<?php if (isset($data['Q6Wa7S2'])) echo $data['Q6Wa7S2'] ?>" readonly/>
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
      <!-- <th>Image</th>     -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($solidWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
    //$array = explode('.',$f->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!-- <td><img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Audit_Team_Weighing_Solid_Waste_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="form-group">
  <label>
  <h6>Task 4: How much waste does your school treat/recycle? <a class="tt" data-tooltip="Includes all waste recycled, reused or treated." style="position:relative; top:0px;"><span class="badge">?</span></a></h6>
  </label>
  <br>
  <p> <b>To Collect Data:</b> Find out whether your school has any waste recycling facility like compost
    pit, paper recycling machine, etc. If you have a paper recycling unit, the person in charge will
    definitely be recording the input and output from the unit. If the school is selling newspapers or
    bottles or metal scrap to the local waste dealer (kabadiwala), that can also be included in the
    quantity recycled.</p>
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
    <input type="radio" name="Q8Wa1" onClick="WasteGenerated(2)" class="radio" id="Q8Wa1_1"
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
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Garden/horticulture waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S1"
                                           type="number"   step="any"   name="Q8Wa1S1"
                                           placeholder="<?php if (isset($data['Q8Wa1S1'])) echo $data['Q8Wa1S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S1'])) echo $data['Q8Wa1S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Kitchen waste—Raw </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S2"
                                           type="number"   step="any"   name="Q8Wa1S2"
                                           placeholder="<?php if (isset($data['Q8Wa1S2'])) echo $data['Q8Wa1S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S2'])) echo $data['Q8Wa1S2'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Kitchen waste—Cooked </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S3"
                                           type="number"   step="any"   name="Q8Wa1S3"
                                           placeholder="<?php if (isset($data['Q8Wa1S3'])) echo $data['Q8Wa1S3'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S3'])) echo $data['Q8Wa1S3'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Wet waste from classrooms etc. </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste1()" id="Q8Wa1S4"
                                           type="number"   step="any"   name="Q8Wa1S4"
                                           placeholder="<?php if (isset($data['Q8Wa1S4'])) echo $data['Q8Wa1S4'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S4'])) echo $data['Q8Wa1S4'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q8Wa1S5"
                                           type="number"   step="any"   name="Q8Wa1S5"
                                           placeholder="<?php if (isset($data['Q8Wa1S5'])) echo $data['Q8Wa1S5'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S5'])) echo $data['Q8Wa1S5'] ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (a): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidWaste()" id="Q8Wa1S6"
                                           type="number"   step="any"   name="Q8Wa1S6"
                                           placeholder="<?php if (isset($data['Q8Wa1S6'])) echo $data['Q8Wa1S6'] ?>"
                                           value="<?php if (isset($data['Q8Wa1S6'])) echo $data['Q8Wa1S6'] ?>" readonly/>
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
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Plastic </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S1"
                                           type="number"   step="any"   name="Q8Wa2S1"
                                           placeholder="<?php if (isset($data['Q8Wa2S1'])) echo $data['Q8Wa2S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S1'])) echo $data['Q8Wa2S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Paper </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S2"
                                           type="number"   step="any"   name="Q8Wa2S2"
                                           placeholder="<?php if (isset($data['Q8Wa2S2'])) echo $data['Q8Wa2S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S2'])) echo $data['Q8Wa2S2'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Wood or classroom furniture </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S3"
                                           type="number"   step="any"   name="Q8Wa2S3"
                                           placeholder="<?php if (isset($data['Q8Wa2S3'])) echo $data['Q8Wa2S3'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S3'])) echo $data['Q8Wa2S3'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Glass </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S4"
                                           type="number"   step="any"   name="Q8Wa2S4"
                                           placeholder="<?php if (isset($data['Q8Wa2S4'])) echo $data['Q8Wa2S4'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S4'])) echo $data['Q8Wa2S4'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Metal </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S5"
                                           type="number"   step="any"   name="Q8Wa2S5"
                                           placeholder="<?php if (isset($data['Q8Wa2S5'])) echo $data['Q8Wa2S5'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S5'])) echo $data['Q8Wa2S5'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Thermocol </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S6"
                                           type="number"   step="any"   name="Q8Wa2S6"
                                           placeholder="<?php if (isset($data['Q8Wa2S6'])) echo $data['Q8Wa2S6'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S6'])) echo $data['Q8Wa2S6'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Tetra packs </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S7"
                                           type="number"   step="any"   name="Q8Wa2S7"
                                           placeholder="<?php if (isset($data['Q8Wa2S7'])) echo $data['Q8Wa2S7'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S7'])) echo $data['Q8Wa2S7'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S8"
                                           type="number"   step="any"   name="Q8Wa2S8"
                                           placeholder="<?php if (isset($data['Q8Wa2S8'])) echo $data['Q8Wa2S8'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S8'])) echo $data['Q8Wa2S8'] ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (b): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="solidRecyclable1()" id="Q8Wa2S9"
                                           type="number"   step="any"   name="Q8Wa2S9"
                                           placeholder="<?php if (isset($data['Q8Wa2S9'])) echo $data['Q8Wa2S9'] ?>"
                                           value="<?php if (isset($data['Q8Wa2S9'])) echo $data['Q8Wa2S9'] ?>" readonly/>
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
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Hazardous and toxic waste(Paints, lab waste, etc) </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S1"
                                           type="number"   step="any"   name="Q8Wa3S1"
                                           placeholder="<?php if (isset($data['Q8Wa3S1'])) echo $data['Q8Wa3S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa3S1'])) echo $data['Q8Wa3S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Oil from DG sets </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S2"
                                           type="number"   step="any"   name="Q8Wa3S2"
                                           placeholder="<?php if (isset($data['Q8Wa3S2'])) echo $data['Q8Wa3S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa3S2'])) echo $data['Q8Wa3S2'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Total amount of waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S3"
                                           type="number"   step="any"   name="Q8Wa3S3"
                                           placeholder="<?php if (isset($data['Q8Wa3S3'])) echo $data['Q8Wa3S3'] ?>"
                                           value="<?php if (isset($data['Q8Wa3S3'])) echo $data['Q8Wa3S3'] ?>" readonly/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (c). </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteDomestic1()" id="Q8Wa3S4"
                                           type="number"   step="any"   name="Q8Wa3S4"
                                           placeholder="<?php if (isset($data['Q8Wa3S4'])) echo $data['Q8Wa3S4'] ?>"
                                           value="<?php if (isset($data['Q8Wa3S4'])) echo $data['Q8Wa3S4'] ?>" readonly/>
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
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>E-waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="EWaste1()" id="Q8Wa4S1"
                                           type="number"   step="any"   name="Q8Wa4S1"
                                           placeholder="<?php if (isset($data['Q8Wa4S1'])) echo $data['Q8Wa4S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa4S1'])) echo $data['Q8Wa4S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (d): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="EWaste1()" id="Q8Wa4S2"
                                           type="number"   step="any"   name="Q8Wa4S2"
                                           placeholder="<?php if (isset($data['Q8Wa4S2'])) echo $data['Q8Wa4S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa4S2'])) echo $data['Q8Wa4S2'] ?>" readonly/>
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
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Biomedical waste such as syringes, band–aids, expired medicines etc. </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteBiomedical1()" id="Q8Wa5S1"
                                           type="number"   step="any"   name="Q8Wa5S1"
                                           placeholder="<?php if (isset($data['Q8Wa5S1'])) echo $data['Q8Wa5S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa5S1'])) echo $data['Q8Wa5S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (e): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteBiomedical1()" id="Q8Wa5S2"
                                           type="number"   step="any"   name="Q8Wa5S2"
                                           placeholder="<?php if (isset($data['Q8Wa5S2'])) echo $data['Q8Wa5S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa5S2'])) echo $data['Q8Wa5S2'] ?>" readonly/>
      </div>
    </div>
  </div>
  <!-- <div class="form-group">
    <label><span class="cube">f.</span>Sanitary waste </label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Sanitary waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteSanitary1()" id="Q8Wa6S1"
                                           type="number"   step="any"   name="Q8Wa6S1"
                                           placeholder="<?php if (isset($data['Q8Wa6S1'])) echo $data['Q8Wa6S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa6S1'])) echo $data['Q8Wa6S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (f): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteSanitary1()" id="Q8Wa6S2"
                                           type="number"   step="any"   name="Q8Wa6S2"
                                           placeholder="<?php if (isset($data['Q8Wa6S2'])) echo $data['Q8Wa6S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa6S2'])) echo $data['Q8Wa6S2'] ?>" readonly/>
      </div>
    </div>
  </div> -->
  <div class="form-group">
    <label><span class="cube">f.</span>C & D Waste</label>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </label>
      </div>
      <div class="col-xs-6">
        <label>Quantity of solid waste reused/recycled (monthly average in kg) </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Construction and demolition waste </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteConstruction1()"
                                           id="Q8Wa7S1" type="number"   step="any"   name="Q8Wa7S1"
                                           placeholder="<?php if (isset($data['Q8Wa7S1'])) echo $data['Q8Wa7S1'] ?>"
                                           value="<?php if (isset($data['Q8Wa7S1'])) echo $data['Q8Wa7S1'] ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label>Per capita waste reused/recycled (g): </label>
      </div>
      <div class="col-xs-6">
        <input class="form-control space-textbox" onKeyUp="WasteConstruction1()"
                                           id="Q8Wa7S2" type="number"   step="any"   name="Q8Wa7S2"
                                           placeholder="<?php if (isset($data['Q8Wa7S2'])) echo $data['Q8Wa7S2'] ?>"
                                           value="<?php if (isset($data['Q8Wa7S2'])) echo $data['Q8Wa7S2'] ?>" readonly/>
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
  <table width="100%" class="question uploadedfiles">
    <thead>
      <tr>
        <!-- <th>Image</th>     -->
        <th>File name</th>
        <th>Delete</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($composingPit as $u) { ?>
      <tr id="index<?php echo $u->id; ?>">
        <?php 
    //$array = explode('.',$u->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
        <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
        <!-- <td><img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
        file_name ?>" class="img-responsive" />
        </td>
        -->
        <?php //}else{ ?>
        <!-- <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php //}?>
        <?php $name = str_replace(" ", "_", $u->name . "_Composting_Pit_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<br>
<div class="clearfix">&nbsp;</div>
<div id="compositive" style="display:none;">
  <!-- Q5 div hide -->
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
      Vermicomposting</label>
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
  <div class="form-group" id="Q9Wa3">
    <div class="form-group" id="Q9Wa3">
      <label for="username" class="control-label"><span class="cube">5(b)</span>What is the quantity of compost that is generated per month (in kilogram)?</label>
      <br>
      <input type="number" name="Q9Wa3" id="Q9Wa31" class="form-control space-textbox"
                   placeholder="<?php if (isset($data['Q9Wa3'])) echo $data['Q9Wa3'] ?>"
                   value="<?php if (isset($data['Q9Wa3'])) echo $data['Q9Wa3'] ?>">
    </div>
  </div>
  <br>
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
<!-- Q5 div hide -->
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
                                                              target="_blank"> </a>
  <audio controls id="DESIGNATEDCOMMUNITYDUMPSITE" class="audio hide">
    <source src="<?php echo base_url(); ?>assets/audio-files/Designated dump site.MP3" type="audio/mpeg">
    Your browser does not support the audio element. </audio>
  <a class="btn" id="btn1" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
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
    value="<?php echo set_value('Q11Wa1S1', 1); ?>" <?php if (isset($data['Q11Wa1S1'])) { if($data['Q11Wa1S1'] == 1){echo set_checkbox('Q11Wa1S1', '1', true);} if($data['Q11Wa1S1'] == true){echo set_checkbox('Q11Wa1S1', '1', true);} }?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S2" type="checkbox" name="Q11Wa1S2"
    value="<?php echo set_value('Q11Wa1S2', 1); ?>" <?php if (isset($data['Q11Wa1S2'])){ if($data['Q11Wa1S2'] == 1){ echo set_checkbox('Q11Wa1S2', '1', true);} if($data['Q11Wa1S2'] == true){ echo set_checkbox('Q11Wa1S2', '1', true);} } ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S3" type="checkbox" name="Q11Wa1S3"
      value="<?php echo set_value('Q11Wa1S3', 1); ?>" <?php if (isset($data['Q11Wa1S3'])){ if($data['Q11Wa1S3'] == 1){echo set_checkbox('Q11Wa1S3', '1', true);} if($data['Q11Wa1S3'] == true){echo set_checkbox('Q11Wa1S3', '1', true);}} ?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa1S4" type="checkbox" name="Q11Wa1S4"
      value="<?php echo set_value('Q11Wa1S4', 1); ?>" <?php if (isset($data['Q11Wa1S4'])) { if($data['Q11Wa1S4'] == 1){echo set_checkbox('Q11Wa1S4', '1', true);} if($data['Q11Wa1S4'] == true){echo set_checkbox('Q11Wa1S4', '1', true);} }?> <?php if (isset($data['Q6Wa2S2'])) if ($data['Q6Wa2S2'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Plastic </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S1" type="checkbox" name="Q11Wa2S1"
      value="<?php echo set_value('Q11Wa2S1', 1); ?>" <?php if (isset($data['Q11Wa2S1'])){ if($data['Q11Wa2S1'] == 1){echo set_checkbox('Q11Wa2S1', '1', true);} if($data['Q11Wa2S1'] ==true){echo set_checkbox('Q11Wa2S1', '1', true);}} ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S2" type="checkbox" name="Q11Wa2S2"
     value="<?php echo set_value('Q11Wa2S2', 1); ?>" <?php if (isset($data['Q11Wa2S2'])){ if($data['Q11Wa2S2'] == 1){ echo set_checkbox('Q11Wa2S2', '1', true);} if($data['Q11Wa2S2'] == true){ echo set_checkbox('Q11Wa2S2', '1', true);}}  ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S3" type="checkbox" name="Q11Wa2S3"
    value="<?php echo set_value('Q11Wa2S3', 1); ?>" <?php if (isset($data['Q11Wa2S3'])) { if($data['Q11Wa2S3'] == 1){ echo set_checkbox('Q11Wa2S3', '1', true);} if($data['Q11Wa2S3'] == true){ echo set_checkbox('Q11Wa2S3', '1', true);} } ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa2S4" type="checkbox" name="Q11Wa2S4"
    value="<?php echo set_value('Q11Wa2S4', 1); ?>" <?php if (isset($data['Q11Wa2S4'])){ if($data['Q11Wa2S4'] == 1){ echo set_checkbox('Q11Wa2S4', '1', true);} if($data['Q11Wa2S4'] == true){ echo set_checkbox('Q11Wa2S4', '1', true);} } ?> <?php if (isset($data['Q6Wa2S1'])) if ($data['Q6Wa2S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Horticultural waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S1" type="checkbox" name="Q11Wa3S1"
     value="<?php echo set_value('Q11Wa3S1', 1); ?>" <?php if (isset($data['Q11Wa3S1'])){ if($data['Q11Wa3S1'] == 1){ echo set_checkbox('Q11Wa3S1', '1', true);} if($data['Q11Wa3S1'] == true){ echo set_checkbox('Q11Wa3S1', '1', true);} } ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S2" type="checkbox" name="Q11Wa3S2"
     value="<?php echo set_value('Q11Wa3S2', 1); ?>" <?php if (isset($data['Q11Wa3S2'])) { if($data['Q11Wa3S2'] == 1){ echo set_checkbox('Q11Wa3S2', '1', true);} if($data['Q11Wa3S2'] == true){ echo set_checkbox('Q11Wa3S2', '1', true);} }?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S3" type="checkbox" name="Q11Wa3S3"
     value="<?php echo set_value('Q11Wa3S3', 1); ?>" <?php if (isset($data['Q11Wa3S3'])) { if($data['Q11Wa3S3'] == 1){echo set_checkbox('Q11Wa3S3', '1', true);} if($data['Q11Wa3S3'] == true){echo set_checkbox('Q11Wa3S3', '1', true);} } ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa3S4" type="checkbox" name="Q11Wa3S4"
     value="<?php echo set_value('Q11Wa3S4', 1); ?>" <?php if (isset($data['Q11Wa3S4'])) { if($data['Q11Wa3S4'] == 1){echo set_checkbox('Q11Wa3S4', '1', true);} if($data['Q11Wa3S4'] == true){echo set_checkbox('Q11Wa3S4', '1', true);} } ?> <?php if (isset($data['Q6Wa1S1'])) if ($data['Q6Wa1S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>E-waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S1" type="checkbox" name="Q11Wa4S1"
      value="<?php echo set_value('Q11Wa4S1', 1); ?>" <?php if (isset($data['Q11Wa4S1'])){ if($data['Q11Wa4S1'] == 1){echo set_checkbox('Q11Wa4S1', '1', true);} if($data['Q11Wa4S1'] == true){echo set_checkbox('Q11Wa4S1', '1', true);} } ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S2" type="checkbox" name="Q11Wa4S2"
    value="<?php echo set_value('Q11Wa4S2', 1); ?>" <?php if (isset($data['Q11Wa4S2'])){ if($data['Q11Wa4S2'] == 1){echo set_checkbox('Q11Wa4S2', '1', true);} if($data['Q11Wa4S2'] == true){echo set_checkbox('Q11Wa4S2', '1', true);} }?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S3" type="checkbox" name="Q11Wa4S3"
    value="<?php echo set_value('Q11Wa4S3', 1); ?>" <?php if (isset($data['Q11Wa4S3'])){ if($data['Q11Wa4S3'] == 1){ echo set_checkbox('Q11Wa4S3', '1', true);} if($data['Q11Wa4S3'] == true){ echo set_checkbox('Q11Wa4S3', '1', true);}} ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa4S4" type="checkbox" name="Q11Wa4S4"
     value="<?php echo set_value('Q11Wa4S4', 1); ?>" <?php if(isset($data['Q11Wa4S4'])){ if($data['Q11Wa4S4'] == 1){ echo set_checkbox('Q11Wa4S4', '1', true);} if($data['Q11Wa4S4'] == true){ echo set_checkbox('Q11Wa4S4', '1', true);}}  ?> <?php if (isset($data['Q6Wa4S1'])) if ($data['Q6Wa4S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Hazardous waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S1" type="checkbox" name="Q11Wa5S1"
     value="<?php echo set_value('Q11Wa5S1', 1); ?>" <?php if (isset($data['Q11Wa5S1'])){ if($data['Q11Wa5S1'] == 1){echo set_checkbox('Q11Wa5S1', '1', true);} if($data['Q11Wa5S1'] == true){echo set_checkbox('Q11Wa5S1', '1', true);}} ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S2" type="checkbox" name="Q11Wa5S2"
     value="<?php echo set_value('Q11Wa5S2', 1); ?>" <?php if (isset($data['Q11Wa5S2'])){ if($data['Q11Wa5S2'] == 1){ echo set_checkbox('Q11Wa5S2', '1', true);} if($data['Q11Wa5S2'] == true){ echo set_checkbox('Q11Wa5S2', '1', true);}} ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S3" type="checkbox" name="Q11Wa5S3"
     value="<?php echo set_value('Q11Wa5S3', 1); ?>" <?php if (isset($data['Q11Wa5S3'])){ if($data['Q11Wa5S3'] == 1){echo set_checkbox('Q11Wa5S3', '1', true);} if($data['Q11Wa5S3'] == true){echo set_checkbox('Q11Wa5S3', '1', true);}} ?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa5S4" type="checkbox" name="Q11Wa5S4"
   value="<?php echo set_value('Q11Wa5S4', 1); ?>" <?php if (isset($data['Q11Wa5S4'])){ if($data['Q11Wa5S4'] == 1){echo set_checkbox('Q11Wa5S4', '1', true);} if($data['Q11Wa5S4'] == true){echo set_checkbox('Q11Wa5S4', '1', true);} }?> <?php if (isset($data['Q6Wa3S1'])) if ($data['Q6Wa3S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Wood, glass, metal </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S1" type="checkbox" name="Q11Wa6S1"
  value="<?php echo set_value('Q11Wa6S1', 1); ?>" <?php if (isset($data['Q11Wa6S1'])){ if($data['Q11Wa6S1'] == 1){ echo set_checkbox('Q11Wa6S1', '1', true);} if($data['Q11Wa6S1'] == true){ echo set_checkbox('Q11Wa6S1', '1', true);} } ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S2" type="checkbox" name="Q11Wa6S2"
    value="<?php echo set_value('Q11Wa6S2', 1); ?>" <?php if (isset($data['Q11Wa6S2'])) { if($data['Q11Wa6S2'] == 1){ echo set_checkbox('Q11Wa6S2', '1', true);} if($data['Q11Wa6S2'] == true){ echo set_checkbox('Q11Wa6S2', '1', true);}} ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S3" type="checkbox" name="Q11Wa6S3"
   value="<?php echo set_value('Q11Wa6S3', 1); ?>" <?php if (isset($data['Q11Wa6S3'])){ if($data['Q11Wa6S3'] == 1){ echo set_checkbox('Q11Wa6S3', '1', true);} if($data['Q11Wa6S3'] == true){ echo set_checkbox('Q11Wa6S3', '1', true);} }?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa6S4" type="checkbox" name="Q11Wa6S4"
   value="<?php echo set_value('Q11Wa6S4', 1); ?>" <?php if (isset($data['Q11Wa6S4'])){ if($data['Q11Wa6S4'] == 1){ echo set_checkbox('Q11Wa6S4', '1', true);} if($data['Q11Wa6S4'] == true){ echo set_checkbox('Q11Wa6S4', '1', true);}} ?> <?php if (isset($data['Q6Wa2S3'])) if ($data['Q6Wa2S3'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Biomedical waste </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S1" type="checkbox" name="Q11Wa7S1"
    value="<?php echo set_value('Q11Wa7S1', 1); ?>" <?php if (isset($data['Q11Wa7S1'])){ if($data['Q11Wa7S1'] == 1){ echo set_checkbox('Q11Wa7S1', '1', true);} if($data['Q11Wa7S1'] == true){ echo set_checkbox('Q11Wa7S1', '1', true);}} ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S2" type="checkbox" name="Q11Wa7S2"
    value="<?php echo set_value('Q11Wa7S2', 1); ?>" <?php if (isset($data['Q11Wa7S2'])){ if($data['Q11Wa7S2'] == 1){ echo set_checkbox('Q11Wa7S2', '1', true);} if($data['Q11Wa7S2'] == true){ echo set_checkbox('Q11Wa7S2', '1', true);}} ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S3" type="checkbox" name="Q11Wa7S3"
     value="<?php echo set_value('Q11Wa7S3', 1); ?>" <?php if (isset($data['Q11Wa7S3'])){ if($data['Q11Wa7S3'] == 1){ echo set_checkbox('Q11Wa7S3', '1', true);}  if($data['Q11Wa7S3'] == true){ echo set_checkbox('Q11Wa7S3', '1', true);} } ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa7S4" type="checkbox" name="Q11Wa7S4"
     value="<?php echo set_value('Q11Wa7S4', 1); ?>" <?php if(isset($data['Q11Wa7S4'])){ if($data['Q11Wa7S4'] == 1){ echo set_checkbox('Q11Wa7S4', '1', true);} if($data['Q11Wa7S4'] == true){ echo set_checkbox('Q11Wa7S4', '1', true);} } ?> <?php if (isset($data['Q6Wa5S1'])) if ($data['Q6Wa5S1'] < 1) echo "disabled"; ?>/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
      <label>Others </label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S1" type="checkbox" name="Q11Wa8S1"
     value="<?php echo set_value('Q11Wa8S1', 1); ?>" <?php if (isset($data['Q11Wa8S1'])){ if($data['Q11Wa8S1'] == 1){ echo set_checkbox('Q11Wa8S1', '1', true);}  if($data['Q11Wa8S1'] == true){ echo set_checkbox('Q11Wa8S1', '1', true);} }?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S2" type="checkbox" name="Q11Wa8S2"
    value="<?php echo set_value('Q11Wa8S2', 1); ?>" <?php if (isset($data['Q11Wa8S2'])) {if($data['Q11Wa8S2'] == 1){ echo set_checkbox('Q11Wa8S2', '1', true);} if($data['Q11Wa8S2'] == true){ echo set_checkbox('Q11Wa8S2', '1', true);}} ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S3" type="checkbox" name="Q11Wa8S3"
    value="<?php echo set_value('Q11Wa8S3', 1); ?>" <?php if (isset($data['Q11Wa8S3'])){ if($data['Q11Wa8S3'] == 1){ echo set_checkbox('Q11Wa8S3', '1', true);} if($data['Q11Wa8S3'] == true){ echo set_checkbox('Q11Wa8S3', '1', true);}}  ?>/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q11Wa8S4" type="checkbox" name="Q11Wa8S4"
    value="<?php echo set_value('Q11Wa8S4', 1); ?>" <?php if (isset($data['Q11Wa8S4'])){ if($data['Q11Wa8S4'] == 1){ echo set_checkbox('Q11Wa8S4', '1', true);} if($data['Q11Wa8S4'] == true){ echo set_checkbox('Q11Wa8S4', '1', true);}} ?>/>
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
      <!-- <th>Image</th>  -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($recycleMachine as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
    //$array = explode('.',$f->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--  <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Recycling_Machine_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label class="control-label"><span class="cube">8</span>Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.<a class="tt" data-tooltip="Please give the numbers of items that are  in working condition and those that are not. This will help to make an inventory of electronic waste."><span class="badge">?</span></a></label>
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
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa1S1" type="number"   step="any"  
                       name="Q12Wa1S1" placeholder="<?php if (isset($data['Q12Wa1S1'])) echo $data['Q12Wa1S1'] ?>"
                       value="<?php if (isset($data['Q12Wa1S1'])) echo $data['Q12Wa1S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa1S2" type="number"   step="any"  
                       name="Q12Wa1S2" placeholder="<?php if (isset($data['Q12Wa1S2'])) echo $data['Q12Wa1S2'] ?>"
                       value="<?php if (isset($data['Q12Wa1S2'])) echo $data['Q12Wa1S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa1S3" type="number"   step="any"  
                       name="Q12Wa1S3" placeholder="<?php if (isset($data['Q12Wa1S3'])) echo $data['Q12Wa1S3'] ?>"
                       value="<?php if (isset($data['Q12Wa1S3'])) echo $data['Q12Wa1S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa1S4" type="number"   step="any"  
                       name="Q12Wa1S4" placeholder="<?php if (isset($data['Q12Wa1S4'])) echo $data['Q12Wa1S4'] ?>"
                       value="<?php if (isset($data['Q12Wa1S4'])) echo $data['Q12Wa1S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>VCR or DVD players </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa2S1" type="number"   step="any"  
                       name="Q12Wa2S1" placeholder="<?php if (isset($data['Q12Wa2S1'])) echo $data['Q12Wa2S1'] ?>"
                       value="<?php if (isset($data['Q12Wa2S1'])) echo $data['Q12Wa2S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa2S2" type="number"   step="any"  
                       name="Q12Wa2S2" placeholder="<?php if (isset($data['Q12Wa2S2'])) echo $data['Q12Wa2S2'] ?>"
                       value="<?php if (isset($data['Q12Wa2S2'])) echo $data['Q12Wa2S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa2S3" type="number"   step="any"  
                       name="Q12Wa2S3" placeholder="<?php if (isset($data['Q12Wa2S3'])) echo $data['Q12Wa2S3'] ?>"
                       value="<?php if (isset($data['Q12Wa2S3'])) echo $data['Q12Wa2S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa2S4" type="number"   step="any"  
                       name="Q12Wa2S4" placeholder="<?php if (isset($data['Q12Wa2S4'])) echo $data['Q12Wa2S4'] ?>"
                       value="<?php if (isset($data['Q12Wa2S4'])) echo $data['Q12Wa2S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Refrigerators and freezers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa3S1" type="number"   step="any"  
                       name="Q12Wa3S1" placeholder="<?php if (isset($data['Q12Wa3S1'])) echo $data['Q12Wa3S1'] ?>"
                       value="<?php if (isset($data['Q12Wa3S1'])) echo $data['Q12Wa3S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa3S2" type="number"   step="any"  
                       name="Q12Wa3S2" placeholder="<?php if (isset($data['Q12Wa3S2'])) echo $data['Q12Wa3S2'] ?>"
                       value="<?php if (isset($data['Q12Wa3S2'])) echo $data['Q12Wa3S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa3S3" type="number"   step="any"  
                       name="Q12Wa3S3" placeholder="<?php if (isset($data['Q12Wa3S3'])) echo $data['Q12Wa3S3'] ?>"
                       value="<?php if (isset($data['Q12Wa3S3'])) echo $data['Q12Wa3S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa3S4" type="number"   step="any"  
                       name="Q12Wa3S4" placeholder="<?php if (isset($data['Q12Wa3S4'])) echo $data['Q12Wa3S4'] ?>"
                       value="<?php if (isset($data['Q12Wa3S4'])) echo $data['Q12Wa3S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Washing machines </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa4S1" type="number"   step="any"  
                       name="Q12Wa4S1" placeholder="<?php if (isset($data['Q12Wa4S1'])) echo $data['Q12Wa4S1'] ?>"
                       value="<?php if (isset($data['Q12Wa4S1'])) echo $data['Q12Wa4S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa4S2" type="number"   step="any"  
                       name="Q12Wa4S2" placeholder="<?php if (isset($data['Q12Wa4S2'])) echo $data['Q12Wa4S2'] ?>"
                       value="<?php if (isset($data['Q12Wa4S2'])) echo $data['Q12Wa4S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa4S3" type="number"   step="any"  
                       name="Q12Wa4S3" placeholder="<?php if (isset($data['Q12Wa4S3'])) echo $data['Q12Wa4S3'] ?>"
                       value="<?php if (isset($data['Q12Wa4S3'])) echo $data['Q12Wa4S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa4S4" type="number"   step="any"  
                       name="Q12Wa4S4" placeholder="<?php if (isset($data['Q12Wa4S4'])) echo $data['Q12Wa4S4'] ?>"
                       value="<?php if (isset($data['Q12Wa4S4'])) echo $data['Q12Wa4S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Air conditioners </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa5S1" type="number"   step="any"  
                       name="Q12Wa5S1" placeholder="<?php if (isset($data['Q12Wa5S1'])) echo $data['Q12Wa5S1'] ?>"
                       value="<?php if (isset($data['Q12Wa5S1'])) echo $data['Q12Wa5S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa5S2" type="number"   step="any"  
                       name="Q12Wa5S2" placeholder="<?php if (isset($data['Q12Wa5S2'])) echo $data['Q12Wa5S2'] ?>"
                       value="<?php if (isset($data['Q12Wa5S2'])) echo $data['Q12Wa5S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa5S3" type="number"   step="any"  
                       name="Q12Wa5S3" placeholder="<?php if (isset($data['Q12Wa5S3'])) echo $data['Q12Wa5S3'] ?>"
                       value="<?php if (isset($data['Q12Wa5S3'])) echo $data['Q12Wa5S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa5S4" type="number"   step="any"  
                       name="Q12Wa5S4" placeholder="<?php if (isset($data['Q12Wa5S4'])) echo $data['Q12Wa5S4'] ?>"
                       value="<?php if (isset($data['Q12Wa5S4'])) echo $data['Q12Wa5S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Heaters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa6S1" type="number"   step="any"  
                       name="Q12Wa6S1" placeholder="<?php if (isset($data['Q12Wa6S1'])) echo $data['Q12Wa6S1'] ?>"
                       value="<?php if (isset($data['Q12Wa6S1'])) echo $data['Q12Wa6S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa6S2" type="number"   step="any"  
                       name="Q12Wa6S2" placeholder="<?php if (isset($data['Q12Wa6S2'])) echo $data['Q12Wa6S2'] ?>"
                       value="<?php if (isset($data['Q12Wa6S2'])) echo $data['Q12Wa6S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa6S3" type="number"   step="any"  
                       name="Q12Wa6S3" placeholder="<?php if (isset($data['Q12Wa6S3'])) echo $data['Q12Wa6S3'] ?>"
                       value="<?php if (isset($data['Q12Wa6S3'])) echo $data['Q12Wa6S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa6S4" type="number"   step="any"  
                       name="Q12Wa6S4" placeholder="<?php if (isset($data['Q12Wa6S4'])) echo $data['Q12Wa6S4'] ?>"
                       value="<?php if (isset($data['Q12Wa6S4'])) echo $data['Q12Wa6S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Microwaves </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa7S1" type="number"   step="any"  
                       name="Q12Wa7S1" placeholder="<?php if (isset($data['Q12Wa7S1'])) echo $data['Q12Wa7S1'] ?>"
                       value="<?php if (isset($data['Q12Wa7S1'])) echo $data['Q12Wa7S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa7S2" type="number"   step="any"  
                       name="Q12Wa7S2" placeholder="<?php if (isset($data['Q12Wa7S2'])) echo $data['Q12Wa7S2'] ?>"
                       value="<?php if (isset($data['Q12Wa7S2'])) echo $data['Q12Wa7S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa7S3" type="number"   step="any"  
                       name="Q12Wa7S3" placeholder="<?php if (isset($data['Q12Wa7S3'])) echo $data['Q12Wa7S3'] ?>"
                       value="<?php if (isset($data['Q12Wa7S3'])) echo $data['Q12Wa7S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa7S4" type="number"   step="any"  
                       name="Q12Wa7S4" placeholder="<?php if (isset($data['Q12Wa7S4'])) echo $data['Q12Wa7S4'] ?>"
                       value="<?php if (isset($data['Q12Wa7S4'])) echo $data['Q12Wa7S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Ovens </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa8S1" type="number"   step="any"  
                       name="Q12Wa8S1" placeholder="<?php if (isset($data['Q12Wa8S1'])) echo $data['Q12Wa8S1'] ?>"
                       value="<?php if (isset($data['Q12Wa8S1'])) echo $data['Q12Wa8S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa8S2" type="number"   step="any"  
                       name="Q12Wa8S2" placeholder="<?php if (isset($data['Q12Wa8S2'])) echo $data['Q12Wa8S2'] ?>"
                       value="<?php if (isset($data['Q12Wa8S2'])) echo $data['Q12Wa8S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa8S3" type="number"   step="any"  
                       name="Q12Wa8S3" placeholder="<?php if (isset($data['Q12Wa8S3'])) echo $data['Q12Wa8S3'] ?>"
                       value="<?php if (isset($data['Q12Wa8S3'])) echo $data['Q12Wa8S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa8S4" type="number"   step="any"  
                       name="Q12Wa8S4" placeholder="<?php if (isset($data['Q12Wa8S4'])) echo $data['Q12Wa8S4'] ?>"
                       value="<?php if (isset($data['Q12Wa8S4'])) echo $data['Q12Wa8S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Toasters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa9S1" type="number"   step="any"  
                       name="Q12Wa9S1" placeholder="<?php if (isset($data['Q12Wa9S1'])) echo $data['Q12Wa9S1'] ?>"
                       value="<?php if (isset($data['Q12Wa9S1'])) echo $data['Q12Wa9S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa9S2" type="number"   step="any"  
                       name="Q12Wa9S2" placeholder="<?php if (isset($data['Q12Wa9S2'])) echo $data['Q12Wa9S2'] ?>"
                       value="<?php if (isset($data['Q12Wa9S2'])) echo $data['Q12Wa9S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa9S3" type="number"   step="any"  
                       name="Q12Wa9S3" placeholder="<?php if (isset($data['Q12Wa9S3'])) echo $data['Q12Wa9S3'] ?>"
                       value="<?php if (isset($data['Q12Wa9S3'])) echo $data['Q12Wa9S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa9S4" type="number"   step="any"  
                       name="Q12Wa9S4" placeholder="<?php if (isset($data['Q12Wa9S4'])) echo $data['Q12Wa9S4'] ?>"
                       value="<?php if (isset($data['Q12Wa9S4'])) echo $data['Q12Wa9S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Electric kettles </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa10S1" type="number"   step="any"  
                       name="Q12Wa10S1" placeholder="<?php if (isset($data['Q12Wa10S1'])) echo $data['Q12Wa10S1'] ?>"
                       value="<?php if (isset($data['Q12Wa10S1'])) echo $data['Q12Wa10S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa10S2" type="number"   step="any"  
                       name="Q12Wa10S2" placeholder="<?php if (isset($data['Q12Wa10S2'])) echo $data['Q12Wa10S2'] ?>"
                       value="<?php if (isset($data['Q12Wa10S2'])) echo $data['Q12Wa10S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa10S3" type="number"   step="any"  
                       name="Q12Wa10S3" placeholder="<?php if (isset($data['Q12Wa10S3'])) echo $data['Q12Wa10S3'] ?>"
                       value="<?php if (isset($data['Q12Wa10S3'])) echo $data['Q12Wa10S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa10S4" type="number"   step="any"  
                       name="Q12Wa10S4" placeholder="<?php if (isset($data['Q12Wa10S4'])) echo $data['Q12Wa10S4'] ?>"
                       value="<?php if (isset($data['Q12Wa10S4'])) echo $data['Q12Wa10S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Personal computers (CPU, mouse, screen and keyboard included) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S1" type="number"   step="any"  
                       name="Q12Wa11S1" placeholder="<?php if (isset($data['Q12Wa11S1'])) echo $data['Q12Wa11S1'] ?>"
                       value="<?php if (isset($data['Q12Wa11S1'])) echo $data['Q12Wa11S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S2" type="number"   step="any"  
                       name="Q12Wa11S2" placeholder="<?php if (isset($data['Q12Wa11S2'])) echo $data['Q12Wa11S2'] ?>"
                       value="<?php if (isset($data['Q12Wa11S2'])) echo $data['Q12Wa11S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S3" type="number"   step="any"  
                       name="Q12Wa11S3" placeholder="<?php if (isset($data['Q12Wa11S3'])) echo $data['Q12Wa11S3'] ?>"
                       value="<?php if (isset($data['Q12Wa11S3'])) echo $data['Q12Wa11S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa11S4" type="number"   step="any"  
                       name="Q12Wa11S4" placeholder="<?php if (isset($data['Q12Wa11S4'])) echo $data['Q12Wa11S4'] ?>"
                       value="<?php if (isset($data['Q12Wa11S4'])) echo $data['Q12Wa11S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Laptop computer (CPU, mouse, screen and keyboard included) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S1" type="number"   step="any"  
                       name="Q12Wa12S1" placeholder="<?php if (isset($data['Q12Wa12S1'])) echo $data['Q12Wa12S1'] ?>"
                       value="<?php if (isset($data['Q12Wa12S1'])) echo $data['Q12Wa12S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S2" type="number"   step="any"  
                       name="Q12Wa12S2" placeholder="<?php if (isset($data['Q12Wa12S2'])) echo $data['Q12Wa12S2'] ?>"
                       value="<?php if (isset($data['Q12Wa12S2'])) echo $data['Q12Wa12S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S3" type="number"   step="any"  
                       name="Q12Wa12S3" placeholder="<?php if (isset($data['Q12Wa12S3'])) echo $data['Q12Wa12S3'] ?>"
                       value="<?php if (isset($data['Q12Wa12S3'])) echo $data['Q12Wa12S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa12S4" type="number"   step="any"  
                       name="Q12Wa12S4" placeholder="<?php if (isset($data['Q12Wa12S4'])) echo $data['Q12Wa12S4'] ?>"
                       value="<?php if (isset($data['Q12Wa12S4'])) echo $data['Q12Wa12S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Notebook computers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S1" type="number"   step="any"  
                       name="Q12Wa13S1" placeholder="<?php if (isset($data['Q12Wa13S1'])) echo $data['Q12Wa13S1'] ?>"
                       value="<?php if (isset($data['Q12Wa13S1'])) echo $data['Q12Wa13S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S2" type="number"   step="any"  
                       name="Q12Wa13S2" placeholder="<?php if (isset($data['Q12Wa13S2'])) echo $data['Q12Wa13S2'] ?>"
                       value="<?php if (isset($data['Q12Wa13S2'])) echo $data['Q12Wa13S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S3" type="number"   step="any"  
                       name="Q12Wa13S3" placeholder="<?php if (isset($data['Q12Wa13S3'])) echo $data['Q12Wa13S3'] ?>"
                       value="<?php if (isset($data['Q12Wa13S3'])) echo $data['Q12Wa13S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa13S4" type="number"   step="any"  
                       name="Q12Wa13S4" placeholder="<?php if (isset($data['Q12Wa13S4'])) echo $data['Q12Wa13S4'] ?>"
                       value="<?php if (isset($data['Q12Wa13S4'])) echo $data['Q12Wa13S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Notepad computers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S1" type="number"   step="any"  
                       name="Q12Wa14S1" placeholder="<?php if (isset($data['Q12Wa14S1'])) echo $data['Q12Wa14S1'] ?>"
                       value="<?php if (isset($data['Q12Wa14S1'])) echo $data['Q12Wa14S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S2" type="number"   step="any"  
                       name="Q12Wa14S2" placeholder="<?php if (isset($data['Q12Wa14S2'])) echo $data['Q12Wa14S2'] ?>"
                       value="<?php if (isset($data['Q12Wa14S2'])) echo $data['Q12Wa14S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S3" type="number"   step="any"  
                       name="Q12Wa14S3" placeholder="<?php if (isset($data['Q12Wa14S3'])) echo $data['Q12Wa14S3'] ?>"
                       value="<?php if (isset($data['Q12Wa14S3'])) echo $data['Q12Wa14S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa14S4" type="number"   step="any"  
                       name="Q12Wa14S4" placeholder="<?php if (isset($data['Q12Wa14S4'])) echo $data['Q12Wa14S4'] ?>"
                       value="<?php if (isset($data['Q12Wa14S4'])) echo $data['Q12Wa14S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Printers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S1" type="number"   step="any"  
                       name="Q12Wa15S1" placeholder="<?php if (isset($data['Q12Wa15S1'])) echo $data['Q12Wa15S1'] ?>"
                       value="<?php if (isset($data['Q12Wa15S1'])) echo $data['Q12Wa15S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S2" type="number"   step="any"  
                       name="Q12Wa15S2" placeholder="<?php if (isset($data['Q12Wa15S2'])) echo $data['Q12Wa15S2'] ?>"
                       value="<?php if (isset($data['Q12Wa15S2'])) echo $data['Q12Wa15S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S3" type="number"   step="any"  
                       name="Q12Wa15S3" placeholder="<?php if (isset($data['Q12Wa15S3'])) echo $data['Q12Wa15S3'] ?>"
                       value="<?php if (isset($data['Q12Wa15S3'])) echo $data['Q12Wa15S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa15S4" type="number"   step="any"  
                       name="Q12Wa15S4" placeholder="<?php if (isset($data['Q12Wa15S4'])) echo $data['Q12Wa15S4'] ?>"
                       value="<?php if (isset($data['Q12Wa15S4'])) echo $data['Q12Wa15S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Copying equipment (photocopiers) </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S1" type="number"   step="any"  
                       name="Q12Wa16S1" placeholder="<?php if (isset($data['Q12Wa16S1'])) echo $data['Q12Wa16S1'] ?>"
                       value="<?php if (isset($data['Q12Wa16S1'])) echo $data['Q12Wa16S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S2" type="number"   step="any"  
                       name="Q12Wa16S2" placeholder="<?php if (isset($data['Q12Wa16S2'])) echo $data['Q12Wa16S2'] ?>"
                       value="<?php if (isset($data['Q12Wa16S2'])) echo $data['Q12Wa16S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S3" type="number"   step="any"  
                       name="Q12Wa16S3" placeholder="<?php if (isset($data['Q12Wa16S3'])) echo $data['Q12Wa16S3'] ?>"
                       value="<?php if (isset($data['Q12Wa16S3'])) echo $data['Q12Wa16S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa16S4" type="number"   step="any"  
                       name="Q12Wa16S4" placeholder="<?php if (isset($data['Q12Wa16S4'])) echo $data['Q12Wa16S4'] ?>"
                       value="<?php if (isset($data['Q12Wa16S4'])) echo $data['Q12Wa16S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Projectors </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S1" type="number"   step="any"  
                       name="Q12Wa17S1" placeholder="<?php if (isset($data['Q12Wa17S1'])) echo $data['Q12Wa17S1'] ?>"
                       value="<?php if (isset($data['Q12Wa17S1'])) echo $data['Q12Wa17S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S2" type="number"   step="any"  
                       name="Q12Wa17S2" placeholder="<?php if (isset($data['Q12Wa17S2'])) echo $data['Q12Wa17S2'] ?>"
                       value="<?php if (isset($data['Q12Wa17S2'])) echo $data['Q12Wa17S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S3" type="number"   step="any"  
                       name="Q12Wa17S3" placeholder="<?php if (isset($data['Q12Wa17S3'])) echo $data['Q12Wa17S3'] ?>"
                       value="<?php if (isset($data['Q12Wa17S3'])) echo $data['Q12Wa17S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa17S4" type="number"   step="any"  
                       name="Q12Wa17S4" placeholder="<?php if (isset($data['Q12Wa17S4'])) echo $data['Q12Wa17S4'] ?>"
                       value="<?php if (isset($data['Q12Wa17S4'])) echo $data['Q12Wa17S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Whiteboards </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S1" type="number"   step="any"  
                       name="Q12Wa18S1" placeholder="<?php if (isset($data['Q12Wa18S1'])) echo $data['Q12Wa18S1'] ?>"
                       value="<?php if (isset($data['Q12Wa18S1'])) echo $data['Q12Wa18S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S2" type="number"   step="any"  
                       name="Q12Wa18S2" placeholder="<?php if (isset($data['Q12Wa18S2'])) echo $data['Q12Wa18S2'] ?>"
                       value="<?php if (isset($data['Q12Wa18S2'])) echo $data['Q12Wa18S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S3" type="number"   step="any"  
                       name="Q12Wa18S3" placeholder="<?php if (isset($data['Q12Wa18S3'])) echo $data['Q12Wa18S3'] ?>"
                       value="<?php if (isset($data['Q12Wa18S3'])) echo $data['Q12Wa18S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa18S4" type="number"   step="any"  
                       name="Q12Wa18S4" placeholder="<?php if (isset($data['Q12Wa18S4'])) echo $data['Q12Wa18S4'] ?>"
                       value="<?php if (isset($data['Q12Wa18S4'])) echo $data['Q12Wa18S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Electrical and electronic typewriters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S1" type="number"   step="any"  
                       name="Q12Wa19S1" placeholder="<?php if (isset($data['Q12Wa19S1'])) echo $data['Q12Wa19S1'] ?>"
                       value="<?php if (isset($data['Q12Wa19S1'])) echo $data['Q12Wa19S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S2" type="number"   step="any"  
                       name="Q12Wa19S2" placeholder="<?php if (isset($data['Q12Wa19S2'])) echo $data['Q12Wa19S2'] ?>"
                       value="<?php if (isset($data['Q12Wa19S2'])) echo $data['Q12Wa19S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S3" type="number"   step="any"  
                       name="Q12Wa19S3" placeholder="<?php if (isset($data['Q12Wa19S3'])) echo $data['Q12Wa19S3'] ?>"
                       value="<?php if (isset($data['Q12Wa19S3'])) echo $data['Q12Wa19S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa19S4" type="number"   step="any"  
                       name="Q12Wa19S4" placeholder="<?php if (isset($data['Q12Wa19S4'])) echo $data['Q12Wa19S4'] ?>"
                       value="<?php if (isset($data['Q12Wa19S4'])) echo $data['Q12Wa19S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Pocket and desk calculators </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S1" type="number"   step="any"  
                       name="Q12Wa20S1" placeholder="<?php if (isset($data['Q12Wa20S1'])) echo $data['Q12Wa20S1'] ?>"
                       value="<?php if (isset($data['Q12Wa20S1'])) echo $data['Q12Wa20S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S2" type="number"   step="any"  
                       name="Q12Wa20S2" placeholder="<?php if (isset($data['Q12Wa20S2'])) echo $data['Q12Wa20S2'] ?>"
                       value="<?php if (isset($data['Q12Wa20S2'])) echo $data['Q12Wa20S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S3" type="number"   step="any"  
                       name="Q12Wa20S3" placeholder="<?php if (isset($data['Q12Wa20S3'])) echo $data['Q12Wa20S3'] ?>"
                       value="<?php if (isset($data['Q12Wa20S3'])) echo $data['Q12Wa20S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa20S4" type="number"   step="any"  
                       name="Q12Wa20S4" placeholder="<?php if (isset($data['Q12Wa20S4'])) echo $data['Q12Wa20S4'] ?>"
                       value="<?php if (isset($data['Q12Wa20S4'])) echo $data['Q12Wa20S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Fax machines </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S1" type="number"   step="any"  
                       name="Q12Wa21S1" placeholder="<?php if (isset($data['Q12Wa21S1'])) echo $data['Q12Wa21S1'] ?>"
                       value="<?php if (isset($data['Q12Wa21S1'])) echo $data['Q12Wa21S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S2" type="number"   step="any"  
                       name="Q12Wa21S2" placeholder="<?php if (isset($data['Q12Wa21S2'])) echo $data['Q12Wa21S2'] ?>"
                       value="<?php if (isset($data['Q12Wa21S2'])) echo $data['Q12Wa21S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S3" type="number"   step="any"  
                       name="Q12Wa21S3" placeholder="<?php if (isset($data['Q12Wa21S3'])) echo $data['Q12Wa21S3'] ?>"
                       value="<?php if (isset($data['Q12Wa21S3'])) echo $data['Q12Wa21S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa21S4" type="number"   step="any"  
                       name="Q12Wa21S4" placeholder="<?php if (isset($data['Q12Wa21S4'])) echo $data['Q12Wa21S4'] ?>"
                       value="<?php if (isset($data['Q12Wa21S4'])) echo $data['Q12Wa21S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Telex </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S1" type="number"   step="any"  
                       name="Q12Wa22S1" placeholder="<?php if (isset($data['Q12Wa22S1'])) echo $data['Q12Wa22S1'] ?>"
                       value="<?php if (isset($data['Q12Wa22S1'])) echo $data['Q12Wa22S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S2" type="number"   step="any"  
                       name="Q12Wa22S2" placeholder="<?php if (isset($data['Q12Wa22S2'])) echo $data['Q12Wa22S2'] ?>"
                       value="<?php if (isset($data['Q12Wa22S2'])) echo $data['Q12Wa22S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S3" type="number"   step="any"  
                       name="Q12Wa22S3" placeholder="<?php if (isset($data['Q12Wa22S3'])) echo $data['Q12Wa22S3'] ?>"
                       value="<?php if (isset($data['Q12Wa22S3'])) echo $data['Q12Wa22S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa22S4" type="number"   step="any"  
                       name="Q12Wa22S4" placeholder="<?php if (isset($data['Q12Wa22S4'])) echo $data['Q12Wa22S4'] ?>"
                       value="<?php if (isset($data['Q12Wa22S4'])) echo $data['Q12Wa22S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Telephones </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S1" type="number"   step="any"  
                       name="Q12Wa23S1" placeholder="<?php if (isset($data['Q12Wa23S1'])) echo $data['Q12Wa23S1'] ?>"
                       value="<?php if (isset($data['Q12Wa23S1'])) echo $data['Q12Wa23S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S2" type="number"   step="any"  
                       name="Q12Wa23S2" placeholder="<?php if (isset($data['Q12Wa23S2'])) echo $data['Q12Wa23S2'] ?>"
                       value="<?php if (isset($data['Q12Wa23S2'])) echo $data['Q12Wa23S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S3" type="number"   step="any"  
                       name="Q12Wa23S3" placeholder="<?php if (isset($data['Q12Wa23S3'])) echo $data['Q12Wa23S3'] ?>"
                       value="<?php if (isset($data['Q12Wa23S3'])) echo $data['Q12Wa23S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa23S4" type="number"   step="any"  
                       name="Q12Wa23S4" placeholder="<?php if (isset($data['Q12Wa23S4'])) echo $data['Q12Wa23S4'] ?>"
                       value="<?php if (isset($data['Q12Wa23S4'])) echo $data['Q12Wa23S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Pay telephones </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S1" type="number"   step="any"  
                       name="Q12Wa24S1" placeholder="<?php if (isset($data['Q12Wa24S1'])) echo $data['Q12Wa24S1'] ?>"
                       value="<?php if (isset($data['Q12Wa24S1'])) echo $data['Q12Wa24S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S2" type="number"   step="any"  
                       name="Q12Wa24S2" placeholder="<?php if (isset($data['Q12Wa24S2'])) echo $data['Q12Wa24S2'] ?>"
                       value="<?php if (isset($data['Q12Wa24S2'])) echo $data['Q12Wa24S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S3" type="number"   step="any"  
                       name="Q12Wa24S3" placeholder="<?php if (isset($data['Q12Wa24S3'])) echo $data['Q12Wa24S3'] ?>"
                       value="<?php if (isset($data['Q12Wa24S3'])) echo $data['Q12Wa24S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa24S4" type="number"   step="any"  
                       name="Q12Wa24S4" placeholder="<?php if (isset($data['Q12Wa24S4'])) echo $data['Q12Wa24S4'] ?>"
                       value="<?php if (isset($data['Q12Wa24S4'])) echo $data['Q12Wa24S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Mobiles </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S1" type="number"   step="any"  
                       name="Q12Wa25S1" placeholder="<?php if (isset($data['Q12Wa25S1'])) echo $data['Q12Wa25S1'] ?>"
                       value="<?php if (isset($data['Q12Wa25S1'])) echo $data['Q12Wa25S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S2" type="number"   step="any"  
                       name="Q12Wa25S2" placeholder="<?php if (isset($data['Q12Wa25S2'])) echo $data['Q12Wa25S2']; ?>"
                       value="<?php if (isset($data['Q12Wa25S2'])) echo $data['Q12Wa25S2']; ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S3" type="number"   step="any"  
                       name="Q12Wa25S3" placeholder="<?php if (isset($data['Q12Wa25S3'])) echo $data['Q12Wa25S3'] ?>"
                       value="<?php if (isset($data['Q12Wa25S3'])) echo $data['Q12Wa25S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa25S4" type="number"   step="any"  
                       name="Q12Wa25S4" placeholder="<?php if (isset($data['Q12Wa25S4'])) echo $data['Q12Wa25S4'] ?>"
                       value="<?php if (isset($data['Q12Wa25S4'])) echo $data['Q12Wa25S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Answering systems </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S1" type="number"   step="any"  
                       name="Q12Wa26S1" placeholder="<?php if (isset($data['Q12Wa26S1'])) echo $data['Q12Wa26S1'] ?>"
                       value="<?php if (isset($data['Q12Wa26S1'])) echo $data['Q12Wa26S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S2" type="number"   step="any"  
                       name="Q12Wa26S2" placeholder="<?php if (isset($data['Q12Wa26S2'])) echo $data['Q12Wa26S2'] ?>"
                       value="<?php if (isset($data['Q12Wa26S2'])) echo $data['Q12Wa26S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S3" type="number"   step="any"  
                       name="Q12Wa26S3" placeholder="<?php if (isset($data['Q12Wa26S3'])) echo $data['Q12Wa26S3'] ?>"
                       value="<?php if (isset($data['Q12Wa26S3'])) echo $data['Q12Wa26S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa26S4" type="number"   step="any"  
                       name="Q12Wa26S4" placeholder="<?php if (isset($data['Q12Wa26S4'])) echo $data['Q12Wa26S4'] ?>"
                       value="<?php if (isset($data['Q12Wa26S4'])) echo $data['Q12Wa26S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Induction cookers </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S1" type="number"   step="any"  
                       name="Q12Wa27S1" placeholder="<?php if (isset($data['Q12Wa27S1'])) echo $data['Q12Wa27S1'] ?>"
                       value="<?php if (isset($data['Q12Wa27S1'])) echo $data['Q12Wa27S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S2" type="number"   step="any"  
                       name="Q12Wa27S2" placeholder="<?php if (isset($data['Q12Wa27S2'])) echo $data['Q12Wa27S2'] ?>"
                       value="<?php if (isset($data['Q12Wa27S2'])) echo $data['Q12Wa27S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S3" type="number"   step="any"  
                       name="Q12Wa27S3" placeholder="<?php if (isset($data['Q12Wa27S3'])) echo $data['Q12Wa27S3'] ?>"
                       value="<?php if (isset($data['Q12Wa27S3'])) echo $data['Q12Wa27S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa27S4" type="number"   step="any"  
                       name="Q12Wa27S4" placeholder="<?php if (isset($data['Q12Wa27S4'])) echo $data['Q12Wa27S4'] ?>"
                       value="<?php if (isset($data['Q12Wa27S4'])) echo $data['Q12Wa27S4'] ?>" readonly/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-4">
    <label>Geysers/water heaters </label>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S1" type="number"   step="any"  
                       name="Q12Wa28S1" placeholder="<?php if (isset($data['Q12Wa28S1'])) echo $data['Q12Wa28S1'] ?>"
                       value="<?php if (isset($data['Q12Wa28S1'])) echo $data['Q12Wa28S1'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S2" type="number"   step="any"  
                       name="Q12Wa28S2" placeholder="<?php if (isset($data['Q12Wa28S2'])) echo $data['Q12Wa28S2'] ?>"
                       value="<?php if (isset($data['Q12Wa28S2'])) echo $data['Q12Wa28S2'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S3" type="number"   step="any"  
                       name="Q12Wa28S3" placeholder="<?php if (isset($data['Q12Wa28S3'])) echo $data['Q12Wa28S3'] ?>"
                       value="<?php if (isset($data['Q12Wa28S3'])) echo $data['Q12Wa28S3'] ?>"/>
  </div>
  <div class="col-xs-2">
    <input class="form-control space-textbox" onKeyUp="computeItems()" id="Q12Wa28S4" type="number"   step="any"  
                       name="Q12Wa28S4" placeholder="<?php if (isset($data['Q12Wa28S4'])) echo $data['Q12Wa28S4'] ?>"
                       value="<?php if (isset($data['Q12Wa28S4'])) echo $data['Q12Wa28S4'] ?>" readonly/>
  </div>
</div>
<br>
<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  • Pictures of electronic items used by school and storage of non-working electronic items<br>
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
      <!--<th>Image</th>    -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
    //$array = explode('.',$f->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_E-Waste_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
    <input type="radio" name="Q13Wa1" onClick="WasteDealer(2)" class="radio" id="Q13Wa1_1"
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
    <input type="text" name="Q13Wa2O" value="<?php if (isset($data['Q13Wa2O'])) echo $data['Q13Wa2O']; ?>" placeholder="<?php if (isset($data['Q13Wa2O'])) echo $data['Q13Wa2O'] ?>">
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
  <table width="100%" class="question uploadedfiles">
    <thead>
      <tr>
        <!-- <th>Image</th>     -->
        <th>File name</th>
        <th>Delete</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($authorised_dealer as $u) { ?>
      <tr id="index<?php echo $u->id; ?>">
        <?php 
    //$array = explode('.',$u->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
        <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
        <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
        file_name ?>" class="img-responsive" />
        </td>
        -->
        <?php //}else{ ?>
        <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php //}?>
        <?php $name = str_replace(" ", "_", $u->name . "_E-waste_authorised_dealer_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
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
                                                          target="_blank"> </a>
  <audio controls id="DESIGNATEDCOMMUNITYDUMPSITE" class="audio hide">
    <source src="<?php echo base_url(); ?>assets/audio-files/Designated dump site.MP3" type="audio/mpeg">
    Your browser does not support the audio element. </audio>
  <a class="btn" id="btn2" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
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
      <!-- <th>Image</th>     -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($houseKeeping as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
          //$array = explode('.',$f->file_name); 
         // $count = count($array);
          //$extension = $array[$count-1];
          ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" />-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Housekeeping_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
    <input type="radio" name="Q15Wa1" onClick="WasteBurn(2)" class="radio" id="Q15Wa1_1"
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
      <!--<th>Image</th>      -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($burningWaste as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
    //$array = explode('.',$f->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!--   <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Buring_Waste_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
          <input type="radio" name="Q15Wa2" class="radio" id="Q15Wa2_1"
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

           <li>
              <label class="radio-inline text-gray">
              <input type="checkbox" name="Q15Wa2S5"
                                           value="<?php echo set_value('Q15Wa2S5', 1); ?>" <?php if (isset($data['Q15Wa2S5'])) echo "checked" ?>>
              Sanitary waste </label>
            </li>
          </ul>
        </div>
      </div>

  <div class="form-group">
    <label class="control-label"><span class="cube">12</span>How do you dispose of sanitary waste?</label>
      <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 1) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 1 ? "checked" : "" ?>> Incinerator </label>
     </div>

     <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 2) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 2 ? "checked" : "" ?>> Sent to nearby medical facility </label>
     </div>

     <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 3) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 3 ? "checked" : "" ?>> Burnt inside/outside the school campus </label>
     </div>

     <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 4) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 4 ? "checked" : "" ?>> Given to the municipal waste collector </label>
     </div>

     <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 5) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 5 ? "checked" : "" ?>> Collected by a biomedical waste processing facilitator  </label>
     </div>

     <div class="radio">
        <label>
        <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q12NWa1', 6) ?>" <?php if (isset($data['Q12NWa1'])) echo $data['Q12NWa1'] == 6 ? "checked" : "" ?>> Not applicable </label>
     </div>

     <br>

<div class="form-group">
  <label class="control-label">Please upload supporting documents:</label>
  <br>
  ● If sanitary waste is sent to nearby medical facility or collected by a biomedical waste processing facilitator, please upload picture of sanitary waste receipt certificate provided by the facility/facilitator<br>
  <br>
  <button class="btn uploadbtn upload" data-id="Disposesanitary"
                    data-toggle="modal" data-target="#airModal"
                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<div class="clearfix">&nbsp;</div>
<table width="100%" class="question uploadedfiles">
  <thead>
    <tr>
      <!-- <th>Image</th>     -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($disposesanitary)) { ?>
    <?php foreach ($disposesanitary as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
          //$array = explode('.',$f->file_name); 
         // $count = count($array);
          //$extension = $array[$count-1];
          ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" />-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Disposesanitary_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>

<div class="form-group">
  <label class="control-label"><span class="cube">13</span> During Covid 19, where do students dispose of their single-use masks and/or gloves used against severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) at the school? <a class="tt" data-tooltip="It is assumed that all individuals, including children will need to take precautions and wear masks and/or gloves till such time, advisories are issued to stop using them."><span class="badge">?</span></a> <a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a> </label>
  <div class="radio">
        <label>
        <input type="radio" name="Q13NWa1" value="<?php echo set_value('Q13NWa1', 1) ?>" <?php if (isset($data['Q13NWa1'])) echo $data['Q13NWa1'] == 1 ? "checked" : "" ?>> Mixed bin </label>
     </div>

<div class="radio">
        <label>
        <input type="radio" name="Q13NWa1" value="<?php echo set_value('Q13NWa1', 2) ?>" <?php if (isset($data['Q13NWa1'])) echo $data['Q13NWa1'] == 2 ? "checked" : "" ?>> Yellow/separate bin for COVID waste </label>
     </div>

<div class="radio">
        <label>
        <input type="radio" name="Q13NWa1" value="<?php echo set_value('Q13NWa1', 3) ?>" <?php if (isset($data['Q13NWa1'])) echo $data['Q13NWa1'] == 3 ? "checked" : "" ?>> Wet waste bin </label>
     </div>

<div class="radio">
        <label>
        <input type="radio" name="Q13NWa1" value="<?php echo set_value('Q13NWa1', 4) ?>" <?php if (isset($data['Q13NWa1'])) echo $data['Q13NWa1'] == 4 ? "checked" : "" ?>> We use reusable masks and/or gloves </label>
     </div>


</div>
    
</div>

      <div class="clearfix">&nbsp;</div>
      <!--<div class="form-group">
    <label class="control-label"><span class="cube">12</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </label>
    <div class="form-group">
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16Wa1" class="radio" id="Q16Wa1" value="<?php //echo set_value('Q16Wa1', 'Y') ?>" <?php //if (isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16Wa1"class="radio" id="Q16Wa1" value="<?php //echo set_value('Q16Wa1', 'N') ?>" <?php //if (isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
  </div>
  <br>-->
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
        <label class="control-label"><span class="cube">14</span>Does the school have a policy on waste?</label>
        <div class="form-group">
          <label class="radio-inline text-gray">
          <input type="radio" name="Q17Wa1" class="radio" onClick="WastePolicy(1)" id="Q17Wa1"
                           value="<?php echo set_value('Q17Wa1', 'Y') ?>" <?php if (isset($data['Q17Wa1'])) echo $data['Q17Wa1'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q17Wa1" class="radio" onClick="WastePolicy(2)" id="Q17Wa1_1"
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
        <table width="100%" class="question uploadedfiles">
          <thead>
            <tr>
              <!--   <th>Image</th>     -->
              <th>File name</th>
              <th>Delete</th>
              <th>Download</th>
            </tr>
          </thead>
          <tbody>
            <?php
   
 foreach ($chikoo as $u) { ?>
            <tr id="index<?php echo $u->id; ?>">
              <?php 
    //$array = explode('.',$u->file_name); 
    //$count = count($array);
    //$extension = $array[$count-1];
    ?>
              <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
              <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
              file_name ?>" class="img-responsive" />
              </td>
              -->
              <?php //}else{ ?>
              <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
              <?php //}?>
              <?php $name = str_replace(" ", "_", $u->name . "_Waste_Policy_"); ?>
              <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
              <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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
        <table width="100%" class="question uploadedfiles">
          <thead>
            <tr>
              <!--  <th>Image</th>-->
              <th>File name</th>
              <th>Delete</th>
              <th>Download</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($chikoo as $u) { ?>
            <tr id="index<?php echo $u->id; ?>">
              <?php 
   //$array = explode('.',$u->file_name); 
   //$count = count($array);
   //$extension = $array[$count-1];
   ?>
              <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
              <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
              file_name ?>" class="img-responsive" />
              </td>
              -->
              <?php //}else{ ?>
              <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
              <?php // }?>
              <?php $name = str_replace(" ", "_", $u->name . "_Waste_Policy_"); ?>
              <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
              <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">15</span>Are there awareness drives with regard to Reduce,
        Recycle and Reuse? <a class="kplink"
                                      href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation"
                                      target="_blank"></a></label>
        <div class="form-group">
          <label class="radio-inline text-gray">
          <input type="radio" name="Q18Wa1" class="radio" onClick="WasteAwareness(1)" id="Q18Wa1"
                           value="<?php echo set_value('Q18Wa1', 'Y') ?>" <?php if (isset($data['Q18Wa1'])) echo $data['Q18Wa1'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q18Wa1" class="radio" onClick="WasteAwareness(2)" id="Q18Wa1_1"
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
            <table width="100%" class="question uploadedfiles">
              <thead>
                <tr>
                  <!--  <th>Image</th>      -->
                  <th>File name</th>
                  <th>Delete</th>
                  <th>Download</th>
                </tr>
              </thead>
              <tbody>
                <?php
   
 foreach ($Initiatives as $u) { ?>
                <tr id="index<?php echo $u->id; ?>">
                  <?php 
         //$array = explode('.',$u->file_name); 
         // $count = count($array);
         // $extension = $array[$count-1];
          ?>
                  <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
                  <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
                  file_name ?>" class="img-responsive" />
                  </td>
                  -->
                  <?php //}else{ ?>
                  <!--   <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
                  <?php //}?>
                  <?php $name = str_replace(" ", "_", $u->name . "_School_Initiatives_"); ?>
                  <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
                  <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                  <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
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
                <label class="control-label"><span class="cube">15(a)</span>What form do these awareness drives
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
                <label class="control-label"><span class="cube">16</span>Is the study of the environment integrated into the
                curriculum?</label>
                <div class="form-group">
                  <label class="radio-inline text-gray">
                  <input type="radio" name="Q19Wa1" class="radio" onClick="WasteWwareness(1)" id="Q19Wa1"
                           value="<?php echo set_value('Q19Wa1', 'Y') ?>" <?php if (isset($data['Q19Wa1'])) echo $data['Q19Wa1'] == 'Y' ? "checked" : "" ?>>
                  Yes </label>
                  <label class="radio-inline text-gray">
                  <input type="radio" name="Q19Wa1" class="radio" onClick="WasteWwareness(2)" id="Q19Wa1_1"
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
                File size per document should not exceed <strong>100 KB.</strong><br>
                <br>
                <button class="btn uploadbtn upload" data-id="Audit Team Doing Survey Waste" data-toggle="modal"
                    data-target="#airModal" type="button">UPLOAD FILES </button>
                <br>
              </div>
              <table width="100%" class="question uploadedfiles">
                <thead>
                  <tr>
                    <!-- <th>Image</th>     -->
                    <th>File name</th>
                    <th>Delete</th>
                    <th>Download</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($teamDoingWaste as $f) { ?>
                  <tr id="index<?php echo $f->id; ?>">
                    <?php 
         // $array = explode('.',$f->file_name); 
         // $count = count($array);
         // $extension = $array[$count-1];
          ?>
                    <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
                    <!-- <td><img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
                    file_name ?>" class="img-responsive" />
                    </td>
                    -->
                    <?php //}else{ ?>
                    <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
                    <?php //}?>
                    <?php $name = str_replace(" ", "_", $f->name . "_Audit_Team_Doing_Survey_"); ?>
                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
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
<script>
  $(document).ready(function(){
  
  $('#waste').validate({
    rules:{
          Q1Wa1S1:{
          required:true,
        },
        Q1Wa1S3:{
          required:true,
        },
        Q1Wa1S2:{
          required:true,
        },  
        Q2Wa1S1:{
          required:true,
        },
        Q2Wa1S3:{
          required:true,
        },
        Q2Wa1S2:{
          required:true,
        },
        Q3Wa1S1:{
          required:true,
        },
        Q3Wa1S2:{
          required:true,
        },
        Q3Wa1S3:{
          required:true,
        },
        Q4Wa1:{
          required:true,
        },
        Q4Wa2:{
          required:true,
        },
        Q5Wa1S1:{
          required:true,
        },
        Q5Wa1S2:{
          required:true,
        },
        Q5Wa1S3:{
          required:true,
        },
        Q5Wa1S4:{
          required:true,
        },
        Q5Wa2S1:{
          required:true,
        },
        Q5Wa2S2:{
          required:true,
        },
        Q5Wa2S3:{
          required:true,
        },
        Q5Wa2S4:{
          required:true,
        },
        Q5Wa3S1:{
          required:true,
        },
        Q5Wa3S2:{
          required:true,
        },
        Q5Wa3S3:{
          required:true,
        },
        Q5Wa3S4:{
          required:true,
        },
        Q5Wa4S1:{
          required:true,
        },
        Q5Wa4S2:{
          required:true,
        },
        Q5Wa4S3:{
          required:true,
        },
        Q5Wa4S4:{
          required:true,
        },
        Q5Wa5S1:{
          required:true,
        },
        Q5Wa5S2:{
          required:true,
        },
        Q5Wa5S3:{
          required:true,
        },
        Q5Wa5S4:{
          required:true,
        },
        Q5Wa6S1:{
          required:true,
        },
        Q5Wa6S2:{
          required:true,
        },
        Q5Wa6S3:{
          required:true,
        },
        Q5Wa6S4:{
          required:true,
        },
        Q5Wa7S1:{
          required:true,
        },
        Q5Wa7S2:{
          required:true,
        },
        Q5Wa7S3:{
          required:true,
        },
        Q5Wa7S4:{
          required:true,
        },
        Q5Wa8S1:{
          required:true,
        },
        Q5Wa8S2:{
          required:true,
        },
        Q5Wa8S3:{
          required:true,
        },
        Q5Wa8S4:{
          required:true,
        },
        Q5Wa9S1:{
          required:true,
        },
        Q5Wa9S2:{
          required:true,
        },
        Q5Wa9S3:{
          required:true,
        },
        Q5Wa9S4:{
          required:true,
        },
        Q5Wa10S1:{
          required:true,
        },
        Q5Wa10S2:{
          required:true,
        },
        Q5Wa10S3:{
          required:true,
        },
        Q5Wa10S4:{
          required:true,
        },
        Q6Wa1S1:{
          required:true,
        },
        Q6Wa1S2:{
          required:true,
        },
        Q6Wa1S3:{
          required:true,
        },
        Q6Wa1S4:{
          required:true,
        },
        Q6Wa2S1:{
          required:true,
        },
        Q6Wa2S2:{
          required:true,
        },
        Q6Wa2S3:{
          required:true,
        },
        Q6Wa2S3:{
          required:true,
        },
        Q6Wa2S4:{
          required:true,
        },
        Q6Wa2S5:{
          required:true,
        },
        Q6Wa2S6:{
          required:true,
        },
        Q6Wa2S7:{
          required:true,
        },
        Q6Wa3S1:{
          required:true,
        },
        Q6Wa3S2:{
          required:true,
        },
        Q6Wa4S1:{
          required:true,
        },
        Q6Wa5S1:{
          required:true,
        },
        Q6Wa6S1:{
          required:true,
        },
        Q6Wa7S1:{
          required:true,
        },
        Q8Wa1:{
          required:true,
        },
        Q8Wa1S1:{
          required:true,
        },
        Q8Wa1S2:{
          required:true,
        },
        Q8Wa1S3:{
          required:true,
        },
        Q8Wa1S4:{
          required:true,
        },
        Q8Wa2S1:{
          required:true,
        },
        Q8Wa2S2:{
          required:true,
        },
        Q8Wa2S3:{
          required:true,
        },
        Q8Wa2S4:{
          required:true,
        },
        Q8Wa2S5:{
          required:true,
        },
        Q8Wa2S6:{
          required:true,
        },
        Q8Wa2S7:{
          required:true,
        },
        Q8Wa3S1:{
          required:true,
        },
        Q8Wa3S2:{
          required:true,
        },
        Q8Wa4S1:{
          required:true,
        },
        Q8Wa5S1:{
          required:true,
        },
        Q8Wa6S1:{
          required:true,
        },
        Q8Wa7S1:{
          required:true,
        },
        Q9Wa1:{
          required:true,
        },
        Q9Wa3:{
          required:true,
        },
        Q10Wa1:{
          required:true,
        },
        Q12Wa1S1:{
          required:true,  
        },
        Q12Wa1S2:{
          required:true,
        },
        Q12Wa1S3:{
          required:true,
        },
        Q12Wa2S1:{
          required:true,
        },
        Q12Wa2S2:{
          required:true,
        },
        Q12Wa2S3:{
          required:true,
        },
        Q12Wa3S1:{
          required:true,
        },
        Q12Wa3S2:{
          required:true,
        },
        Q12Wa3S3:{
          required:true,
        },
        Q12Wa4S1:{
          required:true,
        },
        Q12Wa4S2:{
          required:true,
        },
        Q12Wa4S3:{
          required:true,
        },
        Q12Wa5S1:{
          required:true,
        },
        Q12Wa5S2:{
          required:true,
        },
        Q12Wa5S3:{
          required:true,
        },
        Q12Wa6S1:{
          required:true,
        },
        Q12Wa6S2:{
          required:true,
        },
        Q12Wa6S3:{
          required:true,
        },
        Q12Wa7S1:{
          required:true,
        },
        Q12Wa7S2:{
          required:true,
        },
        Q12Wa7S3:{
          required:true,
        },
        Q12Wa8S1:{
          required:true,
        },
        Q12Wa8S2:{
          required:true,
        },
        Q12Wa8S3:{
          required:true,
        },
        Q12Wa9S1:{
          required:true,
        },
        Q12Wa9S2:{
          required:true,
        },
        Q12Wa9S3:{
          required:true,
        },
        Q12Wa10S1:{
          required:true,
        },
        Q12Wa10S2:{
          required:true,
        },
        Q12Wa10S3:{
          required:true,
        },
        Q12Wa11S1:{
          required:true,
        },
        Q12Wa11S2:{
          required:true,
        },
        Q12Wa11S3:{
          required:true,
        },
        Q12Wa12S1:{
          required:true,
        },
        Q12Wa12S2:{
          required:true,
        },
        Q12Wa12S3:{
          required:true,
        },
        Q12Wa13S1:{
          required:true,
        },
        Q12Wa13S2:{
          required:true,
        },
        Q12Wa13S3:{
          required:true,
        },
        Q12Wa14S1:{
          required:true,
        },
        Q12Wa14S2:{
          required:true,
        },
        Q12Wa14S3:{
          required:true,
        },
        Q12Wa15S1:{
          required:true,
        },
        Q12Wa15S2:{
          required:true,
        },
        Q12Wa15S3:{
          required:true,
        },
        Q12Wa16S1:{
          required:true,
        },
        Q12Wa16S2:{
          required:true,
        },
        Q12Wa16S3:{
          required:true,
        },
        Q12Wa17S1:{
          required:true,
        },
        Q12Wa17S2:{
          required:true,
        },
        Q12Wa17S3:{
          required:true,
        },
        Q12Wa18S1:{
          required:true,
        },
        Q12Wa18S2:{
          required:true,
        },
        Q12Wa18S3:{
          required:true,
        },
        Q12Wa19S1:{
          required:true,
        },
        Q12Wa19S2:{
          required:true,
        },
        Q12Wa19S3:{
          required:true,
        },
        Q12Wa20S1:{
          required:true,
        },
        Q12Wa20S2:{
          required:true,
        },
        Q12Wa20S3:{
          required:true,
        },
        Q12Wa21S1:{
          required:true,
        },
        Q12Wa21S2:{
          required:true,
        },
        Q12Wa21S3:{
          required:true,
        },
        Q12Wa22S1:{
          required:true,
        },
        Q12Wa22S2:{
          required:true,
        },
        Q12Wa22S3:{
          required:true,
        },
        Q12Wa23S1:{
          required:true,
        },
        Q12Wa23S2:{
          required:true,
        },
        Q12Wa23S3:{
          required:true,
        },
        Q12Wa24S1:{
          required:true,
        },
        Q12Wa24S2:{
          required:true,
        },
        Q12Wa24S3:{
          required:true,
        },
        Q12Wa25S1:{
          required:true,
        },
        Q12Wa25S3:{
          required:true,
        },
        Q12Wa26S1:{
          required:true,
        },
        Q12Wa26S2:{
          required:true,
        },
        Q12Wa26S3:{
          required:true,
        },
        Q12Wa27S1:{
          required:true,
        },
        Q12Wa27S2:{
          required:true,
        },
        Q12Wa27S3:{
          required:true,
        },
        Q12Wa28S1:{
          required:true,
        },
        Q12Wa28S2:{
          required:true,
        },
        Q12Wa28S3:{
          required:true,  
        },
        Q13Wa1:{
          required:true,
        },
        Q14Wa1:{
          required:true,
        },
        Q15Wa1:{
          required:true,
        },
        Q15Wa2:{
          required:true,
        },
        Q17Wa1:{
          required:true,
        },
        Q18Wa1:{
          required:true,
        },
        Q19Wa1:{
          required:true,
        },
        Q5Wa1S6:{
          required:true,
        },
        Q5Wa2S6:{
          required:true,
        },
        Q5Wa3S6:{
          required:true,
        },
        Q5Wa4S6:{
          required:true,
        },
        Q5Wa5S6:{
          required:true,
        },
        Q5Wa6S6:{
          required:true,
        },
        Q5Wa7S6:{
          required:true,
        },
        Q5Wa8S6:{
          required:true,
        },
        Q5Wa9S6:{
          required:true,
        },
        Q5Wa10S6:{
          required:true,
        }

    }
       
  });
  });
  
  $('#wastenext').click(function(e){
    
    
    $r=$('#waste').valid();
    if($r == false)
    {
       
         e.preventDefault();
      alert('You will need to enter data in all fields to move forward. Please scroll above to check again.');
         $('#waste').valid();
    }
    
    
  });
  
  </script>
<script>
 $(document).ready(function(){
  
   $("input[name='Q9Wa1']").click(function(){
      if($(this).val()==='Y'){
       $("#compositive").show();
      }else{
        $("#compositive").hide();
      }
   });
  });
  
  
   $(window).load(function() {
    if ($("input[name='Q9Wa1']").is(":checked")) {
     
    if($("input[name='Q9Wa1']:checked").val()==='Y'){

     $("#compositive").show();
   }else{
      $("#compositive").hide();
   }
   
  }
 });
</script>
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
                    window.location.href = "<?php echo base_url('energy'); ?>";
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

/*This Code Used For Stopping Enter 'E' Alphabet In Textbox Type 'Number'*/
$(document).ready(function(){
   $("input[type='number']").keypress(function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 45 || evt.which > 57)
    {
        evt.preventDefault();
      if(evt.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
    }
  });
});
/**Validation For Question 4 BEE Star Rating**/
/*Event Perform On Keypress*/
$("input[name='Q12Wa1S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa2S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa3S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa4S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa5S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa6S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa7S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa8S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa9S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa10S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa11S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa12S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa13S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa14S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa15S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa16S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa17S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa18S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa19S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa20S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa21S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa22S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa23S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa24S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa25S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa26S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa27S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
});
$("input[name='Q12Wa28S1']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (1 to 5)")
  }
}); 
</script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa1S1']").is(':disabled') == false && $("input[name='Q11Wa1S2']").is(':disabled') == false && $("input[name='Q11Wa1S3']").is(':disabled') == false && $("input[name='Q11Wa1S4']").is(':disabled') == false){
if($("input[name='Q11Wa1S1']").prop('checked') == false && $("input[name='Q11Wa1S2']").prop('checked') == false && $("input[name='Q11Wa1S3']").prop('checked') == false && $("input[name='Q11Wa1S4']").prop('checked') == false){
  alert("Q7 fill the Paper section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
  if($("input[name='Q11Wa2S1']").is(':disabled') == false && $("input[name='Q11Wa2S2']").is(':disabled') == false && $("input[name='Q11Wa2S3']").is(':disabled') == false && $("input[name='Q11Wa2S4']").is(':disabled') == false){
if($("input[name='Q11Wa2S1']").prop('checked') == false && $("input[name='Q11Wa2S2']").prop('checked') == false && $("input[name='Q11Wa2S3']").prop('checked') == false && $("input[name='Q11Wa2S4']").prop('checked') == false){
  alert("Q7 fill the Plastic section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa3S1']").is(':disabled') == false && $("input[name='Q11Wa3S2']").is(':disabled') == false && $("input[name='Q11Wa3S3']").is(':disabled') == false && $("input[name='Q11Wa3S4']").is(':disabled') == false){ 
if($("input[name='Q11Wa3S1']").prop('checked') == false && $("input[name='Q11Wa3S2']").prop('checked') == false && $("input[name='Q11Wa3S3']").prop('checked') == false && $("input[name='Q11Wa3S4']").prop('checked') == false){
  alert("Q7 fill the Horticultural waste section.");
  e.preventDefault();
}
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa4S1']").is(':disabled') == false && $("input[name='Q11Wa4S2']").is(':disabled') == false && $("input[name='Q11Wa4S3']").is(':disabled') == false && $("input[name='Q11Wa4S4']").is(':disabled') == false){
if($("input[name='Q11Wa4S1']").prop('checked') == false && $("input[name='Q11Wa4S2']").prop('checked') == false && $("input[name='Q11Wa4S3']").prop('checked') == false && $("input[name='Q11Wa4S4']").prop('checked') == false){
  alert("Q7 fill the Horticultural waste section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa4S1']").is(':disabled') == false && $("input[name='Q11Wa4S2']").is(':disabled') == false && $("input[name='Q11Wa4S3']").is(':disabled') == false && $("input[name='Q11Wa4S4']").is(':disabled') == false){   
if($("input[name='Q11Wa4S1']").prop('checked') == false && $("input[name='Q11Wa4S2']").prop('checked') == false && $("input[name='Q11Wa4S3']").prop('checked') == false && $("input[name='Q11Wa4S4']").prop('checked') == false){ 
 alert("Q7 fill the E-waste section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
  if($("input[name='Q11Wa5S1']").is(':disabled') == false && $("input[name='Q11Wa5S2']").is(':disabled') == false && $("input[name='Q11Wa5S3']").is(':disabled') == false && $("input[name='Q11Wa5S4']").is(':disabled') == false){
if($("input[name='Q11Wa5S1']").prop('checked') == false && $("input[name='Q11Wa5S2']").prop('checked') == false && $("input[name='Q11Wa5S3']").prop('checked') == false && $("input[name='Q11Wa5S4']").prop('checked') == false){
  alert("Q7 fill the Hazardous waste section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 }
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa6S1']").is(':disabled') == false && $("input[name='Q11Wa6S2']").is(':disabled') == false && $("input[name='Q11Wa6S3']").is(':disabled') == false && $("input[name='Q11Wa6S4']").is(':disabled') == false){ 
if($("input[name='Q11Wa6S1']").prop('checked') == false && $("input[name='Q11Wa6S2']").prop('checked') == false && $("input[name='Q11Wa6S3']").prop('checked') == false && $("input[name='Q11Wa6S4']").prop('checked') == false){
  alert("Q7 fill the Wood, glass, metal section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa7S1']").is(':disabled') == false && $("input[name='Q11Wa7S2']").is(':disabled') == false && $("input[name='Q11Wa7S3']").is(':disabled') == false && $("input[name='Q11Wa7S4']").is(':disabled') == false){ 
if($("input[name='Q11Wa7S1']").prop('checked') == false && $("input[name='Q11Wa7S2']").prop('checked') == false && $("input[name='Q11Wa7S3']").prop('checked') == false && $("input[name='Q11Wa7S4']").prop('checked') == false){
  alert("Q7 fill the Biomedical waste section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
if($("input[name='Q11Wa8S1']").is(':disabled') == false && $("input[name='Q11Wa8S2']").is(':disabled') == false && $("input[name='Q11Wa8S3']").is(':disabled') == false && $("input[name='Q11Wa8S4']").is(':disabled') == false){ 
if($("input[name='Q11Wa8S1']").prop('checked') == false && $("input[name='Q11Wa8S2']").prop('checked') == false && $("input[name='Q11Wa8S3']").prop('checked') == false && $("input[name='Q11Wa8S4']").prop('checked') == false){
  alert("Q7 fill the Others waste section.");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
}
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
     if($("input[name='Q4Wa1']:checked").val()==='Y'){
     if($("input[name='Q4Wa2S1']").prop('checked') == false && $("input[name='Q4Wa2S2']").prop('checked') == false && $("input[name='Q4Wa2S3']").prop('checked') == false && $("input[name='Q4Wa2S4']").prop('checked') == false){
  if($("input[name='Q4Wa2S5']").val()==''){
         alert("Q1(a) Who segregates the waste at source?");
   e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
        }
     }
   }
}); 
  </script>
<script>
  $("#wastenext").click(function(e){
  if($("input[name='Q15Wa1']:checked").val()==='Y'){    
   if($("input[name='Q15Wa2S1']").prop('checked') == false && $("input[name='Q15Wa2S2']").prop('checked') == false && $("input[name='Q15Wa2S3']").prop('checked') == false && $("input[name='Q15Wa2S4']").prop('checked') == false && $("input[name='Q15Wa2S5']").prop('checked') == false){
   alert("11(b) What kind of waste is being burnt/ incinerated?");
   e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
  }

  /*Validation Code On Question Q1,Q2,Q4,Q5,Q6,Q9,Q10,Q11,Q12,Q13,Q14,Q15*/
   if($("input[name='Q4Wa1']:checked").length == 0){
     alert("Q1: Does your school segregate solid waste?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
   if($("input[name='Q4Wa2']:checked").length == 0){
     alert("Q2: How many categories does your school segregate waste into? ");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
   if($("input[name='Q8Wa1']:checked").length == 0){
     alert("Q4: Does your school recycle any generated waste?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
   if($("input[name='Q9Wa1']:checked").length == 0){
     alert("Q5: Does your school have a composting facility?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   } 
   if($("input[name='Q10Wa1']:checked").length == 0){
     alert("Q6: Does your school encourage students & teachers to reuse textbooks?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   } 
   if($("input[name='Q13Wa1']:checked").length == 0){
     alert("Q9: Do you know that your e-waste can be collected by an authorized dealer or dismantler?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   } 
   if($("input[name='Q14Wa1']:checked").length == 0){
     alert("Q10: What is the final destination for waste from your school that is disposed of externally? ");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   } 
     if($("input[name='Q15Wa1']:checked").length == 0){
     alert("Q11: Does your school burn waste?");
     e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
     if($("input[name='Q17Wa1']:checked").length == 0){
     alert("Q13: Does the school have a policy on waste?");
     e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
   if($("input[name='Q18Wa1']:checked").length == 0){
     alert("Q14: Are there awareness drives with regard to Reduce, Recycle and Reuse?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }   
   if($("input[name='Q19Wa1']:checked").length == 0){
     alert("Q15: Is the study of the environment integrated into the curriculum?");
     e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }  
  /*Q8 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.
  (Validation)*/  
  if($("input[name='Q12Wa1S1']").attr("placeholder")=="" && $("input[name='Q12Wa1S1']").val()=="" || $("input[name='Q12Wa1S2']").attr("placeholder")=="" && $("input[name='Q12Wa1S2']").val()=="" || $("input[name='Q12Wa1S3']").attr("placeholder")=="" && $("input[name='Q12Wa1S3']").val()==""){
    if($("input[name='Q12Wa1S1']").val()=="" || $("input[name='Q12Wa1S2']").val()=="" || $("input[name='Q12Wa1S3']").val()=="" ){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (TVs)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa2S1']").attr("placeholder")=="" && $("input[name='Q12Wa2S1']").val()=="" || $("input[name='Q12Wa2S2']").attr("placeholder")=="" && $("input[name='Q12Wa2S2']").val()=="" || $("input[name='Q12Wa2S3']").attr("placeholder")=="" && $("input[name='Q12Wa2S3']").val()==""){
   if($("input[name='Q12Wa2S1']").val()=="" || $("input[name='Q12Wa2S2']").val()=="" || $("input[name='Q12Wa2S3']").val()=="" ){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (VCR or DVD players)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa3S1']").attr("placeholder")=="" && $("input[name='Q12Wa3S1']").val()=="" || $("input[name='Q12Wa3S2']").attr("placeholder")=="" && $("input[name='Q12Wa3S2']").val()=="" || $("input[name='Q12Wa3S3']").attr("placeholder")=="" && $("input[name='Q12Wa3S3']").val()==""){
  if($("input[name='Q12Wa3S1']").val()=="" ||  $("input[name='Q12Wa3S2']").val()=="" || $("input[name='Q12Wa3S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Refrigerators and freezers)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa4S1']").attr("placeholder")=="" && $("input[name='Q12Wa4S1']").val()=="" || $("input[name='Q12Wa4S2']").attr("placeholder")=="" && $("input[name='Q12Wa4S2']").val()=="" || $("input[name='Q12Wa4S3']").attr("placeholder")=="" && $("input[name='Q12Wa4S3']").val()==""){
  if($("input[name='Q12Wa4S1']").val()=="" || $("input[name='Q12Wa4S2']").val()=="" ||  $("input[name='Q12Wa4S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Washing machines)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa5S1']").attr("placeholder")=="" && $("input[name='Q12Wa5S1']").val()=="" || $("input[name='Q12Wa5S2']").attr("placeholder")=="" && $("input[name='Q12Wa5S2']").val()=="" || $("input[name='Q12Wa5S3']").attr("placeholder")=="" && $("input[name='Q12Wa5S3']").val()==""){
    if($("input[name='Q12Wa5S1']").val()=="" || $("input[name='Q12Wa5S2']").val()=="" || $("input[name='Q12Wa5S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Air conditioners)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa6S1']").attr("placeholder")=="" || $("input[name='Q12Wa6S2']").attr("placeholder")=="" || $("input[name='Q12Wa6S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa6S1']").val()=="" || $("input[name='Q12Wa6S2']").val()=="" || $("input[name='Q12Wa6S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Heaters)");
     e.preventDefault();;
    }
  }
  if($("input[name='Q12Wa7S1']").attr("placeholder")=="" || $("input[name='Q12Wa7S2']").attr("placeholder")=="" || $("input[name='Q12Wa7S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa7S1']").val()=="" || $("input[name='Q12Wa7S2']").val()=="" || $("input[name='Q12Wa7S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Microwaves)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa8S1']").attr("placeholder")=="" || $("input[name='Q12Wa8S2']").attr("placeholder")=="" || $("input[name='Q12Wa8S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa8S1']").val()=="" || $("input[name='Q12Wa8S2']").val()=="" || $("input[name='Q12Wa8S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Ovens)");
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q12Wa9S1']").attr("placeholder")=="" || $("input[name='Q12Wa9S2']").attr("placeholder")=="" || $("input[name='Q12Wa9S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa9S1']").val()=="" || $("input[name='Q12Wa9S2']").val()=="" || $("input[name='Q12Wa9S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Toasters)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa10S1']").attr("placeholder")=="" || $("input[name='Q12Wa10S2']").attr("placeholder")=="" || $("input[name='Q12Wa10S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa10S1']").val()=="" || $("input[name='Q12Wa10S2']").val()=="" || $("input[name='Q12Wa10S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Electric kettles)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa11S1']").attr("placeholder")=="" || $("input[name='Q12Wa11S2']").attr("placeholder")=="" || $("input[name='Q12Wa11S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa11S1']").val()=="" || $("input[name='Q12Wa11S2']").val()=="" || $("input[name='Q12Wa11S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Personal computers (CPU, mouse, screen and keyboard included))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa12S1']").attr("placeholder")=="" || $("input[name='Q12Wa12S2']").attr("placeholder")=="" || $("input[name='Q12Wa12S3']").attr("placeholder")==""){
    if($("input[name='Q12Wa12S1']").val()=="" || $("input[name='Q12Wa12S2']").val()=="" || $("input[name='Q12Wa12S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Laptop computer (CPU, mouse, screen and keyboard included)))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa13S1']").attr("placeholder")=="" || $("input[name='Q12Wa13S2']").attr("placeholder")=="" || $("input[name='Q12Wa13S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa13S1']").val()=="" || $("input[name='Q12Wa13S2']").val()=="" || $("input[name='Q12Wa13S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Notebook computers)))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa14S1']").attr("placeholder")=="" || $("input[name='Q12Wa14S2']").attr("placeholder")=="" || $("input[name='Q12Wa14S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa14S1']").val()=="" || $("input[name='Q12Wa14S2']").val()=="" || $("input[name='Q12Wa14S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Notebook computers)))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa15S1']").attr("placeholder")=="" || $("input[name='Q12Wa15S2']").attr("placeholder")=="" || $("input[name='Q12Wa15S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa15S1']").val()=="" || $("input[name='Q12Wa15S2']").val()=="" || $("input[name='Q12Wa15S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Printers)))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa16S1']").attr("placeholder")=="" || $("input[name='Q12Wa16S2']").attr("placeholder")=="" || $("input[name='Q12Wa16S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa16S1']").val()=="" || $("input[name='Q12Wa16S2']").val()=="" || $("input[name='Q12Wa16S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Copying equipment (photocopiers))))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa17S1']").attr("placeholder")=="" || $("input[name='Q12Wa17S2']").attr("placeholder")=="" || $("input[name='Q12Wa17S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa17S1']").val()=="" || $("input[name='Q12Wa17S2']").val()=="" || $("input[name='Q12Wa17S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Copying equipment (Whiteboards))))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa18S1']").attr("placeholder")=="" || $("input[name='Q12Wa18S2']").attr("placeholder")=="" || $("input[name='Q12Wa18S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa18S1']").val()=="" || $("input[name='Q12Wa18S2']").val()=="" || $("input[name='Q12Wa18S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Copying equipment (Electrical and electronic typewriters))))");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa19S1']").attr("placeholder")=="" || $("input[name='Q12Wa19S2']").attr("placeholder")=="" || $("input[name='Q12Wa19S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa19S1']").val()=="" || $("input[name='Q12Wa19S2']").val()=="" || $("input[name='Q12Wa19S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Electrical and electronic typewriters)");
     e.preventDefault();
    }
  } 
  if($("input[name='Q12Wa20S1']").attr("placeholder")=="" || $("input[name='Q12Wa20S2']").attr("placeholder")=="" || $("input[name='Q12Wa20S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa20S1']").val()=="" || $("input[name='Q12Wa20S2']").val()=="" || $("input[name='Q12Wa20S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Pocket and desk calculators)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa21S1']").attr("placeholder")=="" || $("input[name='Q12Wa21S2']").attr("placeholder")=="" || $("input[name='Q12Wa21S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa21S1']").val()=="" || $("input[name='Q12Wa21S2']").val()=="" || $("input[name='Q12Wa21S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Fax machines)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa22S1']").attr("placeholder")=="" || $("input[name='Q12Wa22S2']").attr("placeholder")=="" || $("input[name='Q12Wa22S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa22S1']").val()=="" || $("input[name='Q12Wa22S2']").val()=="" || $("input[name='Q12Wa22S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Telex)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa23S1']").attr("placeholder")=="" || $("input[name='Q12Wa23S2']").attr("placeholder")=="" || $("input[name='Q12Wa23S3']").attr("placeholder")==""){
    if($("input[name='Q12Wa23S1']").val()=="" || $("input[name='Q12Wa23S2']").val()=="" || $("input[name='Q12Wa23S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Telephones)");
     e.preventDefault();
    }
  } 
  if($("input[name='Q12Wa24S1']").attr("placeholder")=="" || $("input[name='Q12Wa24S2']").attr("placeholder")=="" || $("input[name='Q12Wa24S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa24S1']").val()=="" || $("input[name='Q12Wa24S2']").val()=="" || $("input[name='Q12Wa24S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Pay telephones)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa25S1']").attr("placeholder")=="" || $("input[name='Q12Wa25S2']").attr("placeholder")=="" || $("input[name='Q12Wa25S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa25S1']").val()=="" || $("input[name='Q12Wa25S2']").val("placeholder")=="" || $("input[name='Q12Wa25S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Mobiles)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa26S1']").attr("placeholder")=="" || $("input[name='Q12Wa26S2']").attr("placeholder")=="" || $("input[name='Q12Wa26S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa26S1']").val()=="" || $("input[name='Q12Wa26S2']").val()=="" || $("input[name='Q12Wa26S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Answering systems)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa27S1']").attr("placeholder")=="" || $("input[name='Q12Wa27S2']").attr("placeholder")=="" || $("input[name='Q12Wa27S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa27S1']").val()=="" || $("input[name='Q12Wa27S2']").val()=="" || $("input[name='Q12Wa27S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Induction cookers)");
     e.preventDefault();
    }
  }
  if($("input[name='Q12Wa28S1']").attr("placeholder")=="" || $("input[name='Q12Wa28S2']").attr("placeholder")=="" || $("input[name='Q12Wa28S3']").attr("placeholder")==""){
  if($("input[name='Q12Wa28S1']").val()=="" || $("input[name='Q12Wa28S2']").val()=="" || $("input[name='Q12Wa28S3']").val()==""){
     alert("Q8: Does your school have the following? If yes, please give the numbers of items in working condition and those that are not?: (Geysers/water heaters)");
     e.preventDefault();
    }
  }
  if($("input[name='Q4Wa1']:checked").val()==="Y"){
     if($("input[name='Q4Wa2S1']").prop('checked') == false && $("input[name='Q4Wa2S2']").prop('checked') == false && $("input[name='Q4Wa2S3']").prop('checked') == false
       && $("input[name='Q4Wa2S4']").prop('checked') == false && $("input[name='Q4Wa2S5']:checked").val()==""){
         alert("1(a) Who segregates the waste at source?");
    e.preventDefault();  
    if(e.isDefaultPrevented()){
           setTimeout(function(){ $(".hide_one").css("display","none"); },600);
       }
     }
  } 


if($("input[name='Q18Wa1']:checked").val()==="Y"){
     if($("input[name='Q18Wa2S1']").prop('checked') == false && $("input[name='Q18Wa2S2']").prop('checked') == false && $("input[name='Q18Wa2S3']").prop('checked') == false){
         alert("Q14(a) What form do these awareness drives take?");
    e.preventDefault();  
    if(e.isDefaultPrevented()){
           setTimeout(function(){ $(".hide_one").css("display","none"); },600);
       }
     }
  }


     });  
</script>
<script>
var nyan = document.getElementById('TetraPak');
var nyanBtn = document.getElementById('btn');
var nyan1 = document.getElementById('DESIGNATEDCOMMUNITYDUMPSITE');
var nyanBtn1 = document.getElementById('btn1');
var nyan2 = document.getElementById('DESIGNATEDCOMMUNITYDUMPSITE');
var nyanBtn2 = document.getElementById('btn2');
function playPause(song){
   if (song.paused && song.currentTime >= 0 && !song.ended) {
      song.play();
   } else {
      song.pause();
   }
}

function reset(btn, song){
   if(btn.classList.contains('playing')){
      btn.classList.toggle('playing');
   }
   song.pause();
   song.currentTime = 0;
}

function progress(btn, song){
   setTimeout(function(){
      var end = song.duration; 
      var current = song.currentTime;
      var percent = current/(end/100);
      //check if song is at the end
      if(current==end){
         reset(btn, song);
      }
      //set inset box shadow
      btn.style.boxShadow = "inset " + btn.offsetWidth * (percent/100) + "px 0px 0px 0px rgba(0,0,0,0.125)"
      //call function again
      progress(btn, song);     
   }, 1000);
}

nyanBtn.addEventListener('click', function(){
   nyanBtn.classList.toggle('playing');
   playPause(nyan);
   progress(nyanBtn, nyan);
});
nyanBtn1.addEventListener('click', function(){
   nyanBtn1.classList.toggle('playing');
   playPause(nyan1);
   progress(nyanBtn1, nyan1);
});
nyanBtn2.addEventListener('click', function(){
   nyanBtn2.classList.toggle('playing');
   playPause(nyan2);
   progress(nyanBtn2, nyan2);
});
</script>


<script type="text/javascript">
$(function(){  
$("input[name='Q9Wa3']").keyup(function(){

  var smaller=$(this).val();
  var larger=$("input[name='Q8Wa1S5']").val();
  
 var smaller_val =  parseFloat(smaller);
 var larger_val = parseFloat(larger);

 if(smaller_val > larger_val){
  alert('Quantity of compost is not greater than total Biodegradable/Wet Waste');
    $(this).val('');
 }

});
});

</script>
  
<script type="text/javascript">
  $(document).ready(function(){
    $("#wastenext").click(function(e){

      if($("input[name='Q13Wa1']:checked").val()==="Y")
      {
        if($("input[name='Q13Wa2']").length == 0 && $("input[name='Q13Wa2O']").val()=='' ){
          alert("9(a)Who collects your e-waste, when not in working condition?");
          e.preventDefault();
          if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
        }

      }

    });

  });

</script>

<script type="text/javascript">
     $("input[name='Q3b2Wa1']").click(function(){
      var Q3b2Wa1 = $('input[name="Q3b2Wa1"]:checked').val();

      if(Q3b2Wa1=='Y'){
        $("#Q9Wa3_b2a").css('display','inline');
      }else{
        $("#Q9Wa3_b2a").css('display','none');
      }
    });
  
</script>


<style>
       #btn,#btn1,#btn2{ 
    background: rgb(232, 101, 73);
                color: rgb(0, 0, 0);
                box-shadow: rgba(0, 0, 0, 0.125) 0px 0px 0px 0px inset;
                height: 20px;
                position: relative;
                padding-top: 0px;
    display:none;     
    } 
  </style>
