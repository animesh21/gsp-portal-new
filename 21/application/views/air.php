<?php $this->load->view('header'); ?>
<style type="text/css">

.error{
  color: #fb4f2a !important;
  font-size: 18px !important;
  text-shadow: 1px 1px 1px #000;
}
	
	#Q9A2-error{

  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 689px;
    text-shadow: 1px 1px 1px #000;
}

#Q6A1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 689px;
    text-shadow: 1px 1px 1px #000;
}

#Q9A1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 512px;
    text-shadow: 1px 1px 1px #000;
}

#Q6A3-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 313px;
    text-shadow: 1px 1px 1px #000;
}

#Q6A4S1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 313px;
    text-shadow: 1px 1px 1px #000;
}

    .form-group {
        margin-bottom: 20px;
    }


    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        border-top: none;
    }

    .list-inline li {
        width: 200px;
    }

    .form-group-1 {
        margin-bottom: 20px;
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
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<!--         <li>|</li>
        <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
      </ul>
    </div>
    <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
    </div>
    <div class="intro">
      <h1>AIR <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--       <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#myModal"> <img
                            src="<?php echo base_url(); ?>assets/img/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
      <p> The Air section involves finding out your school's contribution in polluting the air. The information
        will help in devising strategies for clean air in the coming years.</p>
      <p><strong>The unit of measurement to be used in the Air section is square meter (m<sup>2</sup>).</strong> </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 1: Choose your Air Audit Team <a class="tt" data-tooltip="The first row should have both first name and last name. In the rest of the rows, if a team member does not have a last name, then they can press the spacebar once and move to the next field."><span class="badge">?</span></a> </h6>
        <p> You would require at least five to 10 of your schoolmates in the Air audit team. The teacher
          co-ordinator may be a science or social science teacher, with an interest in air pollution
          issues. Do include the school transport in-charge and the drivers of the school vehicles in your
          audit team.</p>
      </div>
      </label>
    </div>
    <?php echo form_open('air/set', array('id' => 'air')); ?>
    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
      <div class="form-group1 row">
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
      <div class="form-group1 row">
        <div class="col-xs-1"> 1</div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A1S1" type="text" name="Q1A1S1"
                           placeholder="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"
                           value="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A1S3" type="text" name="Q1A1S3"
                           placeholder="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"
                           value="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('email'); ?>
          <input class="form-control space-textbox" id="Q1A1S2" type="email" name="Q1A1S2"
                           placeholder="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"
                           value="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-1"> 2</div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1A2S1" type="text" name="Q1A2S1"
                           placeholder="<?php if (isset($data['Q1A2S1'])) echo $data['Q1A2S1'] ?>"
                           value="<?php echo set_value('Q1A2S1'); ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A2S3" type="text" name="Q1A2S3"
                           placeholder="<?php if (isset($data['Q1A2S3'])) echo $data['Q1A2S3']; ?>"
                           value="<?php echo set_value('Q1A2S3'); ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1A2S2" type="email" name="Q1A2S2"
                           placeholder="<?php if (isset($data['Q1A2S2'])) echo $data['Q1A2S2'] ?>"
                           value="<?php echo set_value('Q1A2S2'); ?>"/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-1"> 3</div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1A3S1" type="text" name="Q1A3S1"
                           placeholder="<?php if (isset($data['Q1A3S1'])) echo $data['Q1A3S1'] ?>"
                           value="<?php echo set_value('Q1A3S1'); ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A3S3" type="text" name="Q1A3S3"
                           placeholder="<?php if (isset($data['Q1A3S3'])) echo $data['Q1A3S3']; ?>"
                           value="<?php echo set_value('Q1A3S3'); ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1A3S2" type="email" name="Q1A3S2"
                           placeholder="<?php if (isset($data['Q1A3S2'])) echo $data['Q1A3S2'] ?>"
                           value="<?php echo set_value('Q1A3S2'); ?>"/>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Administrative staff (maximum of five staff can be part of the
        team):</label>
        <div class="form-group1 row">
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
        <div class="form-group1 row">
          <div class="col-xs-1"> 1</div>
          <div class="col-xs-3"> <?php echo form_error('name1'); ?>
            <input class="form-control space-textbox" id="Q2A1S1" type="text" name="Q2A1S1"
                               placeholder="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"
                               value="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A1S3" type="text" name="Q2A1S3"
                               placeholder="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"
                               value="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"/>
          </div>
          <div class="col-xs-3"> <?php echo form_error('email1'); ?>
            <input class="form-control space-textbox" id="Q2A1S2" type="email" name="Q2A1S2"
                               placeholder="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"
                               value="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 2</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S1" type="text" name="Q2A2S1"
                               placeholder="<?php if (isset($data['Q2A2S1'])) echo $data['Q2A2S1'] ?>"
                               value="<?php echo set_value('Q2A2S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S3" type="text" name="Q2A2S3"
                               placeholder="<?php if (isset($data['Q2A2S3'])) echo $data['Q2A2S3'] ?>"
                               value="<?php echo set_value('Q2A2S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S2" type="email" name="Q2A2S2"
                               placeholder="<?php if (isset($data['Q2A2S2'])) echo $data['Q2A2S2'] ?>"
                               value="<?php echo set_value('Q2A2S2'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 3</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S1" type="text" name="Q2A3S1"
                               placeholder="<?php if (isset($data['Q2A3S1'])) echo $data['Q2A3S1'] ?>"
                               value="<?php echo set_value('Q2A3S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S3" type="text" name="Q2A3S3"
                               placeholder="<?php if (isset($data['Q2A3S3'])) echo $data['Q2A3S3'] ?>"
                               value="<?php echo set_value('Q2A3S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S2" type="email" name="Q2A3S2"
                               placeholder="<?php if (isset($data['Q2A3S2'])) echo $data['Q2A3S2'] ?>"
                               value="<?php echo set_value('Q2A3S2'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 4</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S1" type="text" name="Q2A4S1"
                               placeholder="<?php if (isset($data['Q2A4S1'])) echo $data['Q2A4S1']; ?>"
                               value="<?php echo set_value('Q2A4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S3" type="text" name="Q2A4S3"
                               placeholder="<?php if (isset($data['Q2A4S3'])) echo $data['Q2A4S3'] ?>"
                               value="<?php echo set_value('Q2A4S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S2" type="email" name="Q2A4S2"
                               placeholder="<?php if (isset($data['Q2A4S2'])) echo $data['Q2A4S2']; ?>"
                               value="<?php echo set_value('Q2A4S2'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 5</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S1" type="text" name="Q2A5S1"
                               placeholder="<?php if (isset($data['Q2A5S1'])) echo $data['Q2A5S1'] ?>"
                               value="<?php echo set_value('Q2A5S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S3" type="text" name="Q2A5S3"
                               placeholder="<?php if (isset($data['Q2A5S3'])) echo $data['Q2A5S3'] ?>"
                               value="<?php echo set_value('Q2A5S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S2" type="email" name="Q2A5S2"
                               placeholder="<?php if (isset($data['Q2A5S2'])) echo $data['Q2A5S2'] ?>"
                               value="<?php echo set_value('Q2A5S2'); ?>"/>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Students (maximum of ten students can be part of the team):</label>
        <div class="form-group1 row">
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
        <div class="form-group1 row">
          <div class="col-xs-1"> 1</div>
          <div class="col-xs-3"> <?php echo form_error('name2'); ?>
            <input class="form-control space-textbox" id="Q3A1S1" type="text" name="Q3A1S1"
                               placeholder="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"
                               value="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"/>
          </div>
          <div class="col-xs-3"> <?php echo form_error('email2'); ?>
            <input class="form-control space-textbox" id="Q3A1S2" type="text" name="Q3A1S2"
                               placeholder="<?php if (isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>"
                               value="<?php if (isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A1S3" type="number" name="Q3A1S3"
                               placeholder="<?php if (isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>"
                               value="<?php if (isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 2</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S1" type="text" name="Q3A2S1"
                               placeholder="<?php if (isset($data['Q3A2S1'])) echo $data['Q3A2S1'] ?>"
                               value="<?php echo set_value('Q3A2S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S2" type="text" name="Q3A2S2"
                               placeholder="<?php if (isset($data['Q3A2S2'])) echo $data['Q3A2S2'] ?>"
                               value="<?php echo set_value('Q3A2S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S3" type="number" name="Q3A2S3"
                               placeholder="<?php if (isset($data['Q3A2S3'])) echo $data['Q3A2S3'] ?>"
                               value="<?php echo set_value('Q3A2S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 3</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S1" type="text" name="Q3A3S1"
                               placeholder="<?php if (isset($data['Q3A3S1'])) echo $data['Q3A3S1'] ?>"
                               value="<?php echo set_value('Q3A3S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S2" type="text" name="Q3A3S2"
                               placeholder="<?php if (isset($data['Q3A3S2'])) echo $data['Q3A3S2'] ?>"
                               value="<?php echo set_value('Q3A3S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S3" type="number" name="Q3A3S3"
                               placeholder="<?php if (isset($data['Q3A3S3'])) echo $data['Q3A3S3'] ?>"
                               value="<?php echo set_value('Q3A3S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 4</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S1" type="text" name="Q3A4S1"
                               placeholder="<?php if (isset($data['Q3A4S1'])) echo $data['Q3A4S1'] ?>"
                               value="<?php echo set_value('Q3A4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S2" type="text" name="Q3A4S2"
                               placeholder="<?php if (isset($data['Q3A4S2'])) echo $data['Q3A4S2'] ?>"
                               value="<?php echo set_value('Q3A4S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S3" type="number" name="Q3A4S3"
                               placeholder="<?php if (isset($data['Q3A4S3'])) echo $data['Q3A4S3'] ?>"
                               value="<?php echo set_value('Q3A4S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 5</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S1" type="text" name="Q3A5S1"
                               placeholder="<?php if (isset($data['Q3A5S1'])) echo $data['Q3A5S1'] ?>"
                               value="<?php echo set_value('Q3A5S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S2" type="text" name="Q3A5S2"
                               placeholder="<?php if (isset($data['Q3A5S2'])) echo $data['Q3A5S2'] ?>"
                               value="<?php echo set_value('Q3A5S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S3" type="number" name="Q3A5S3"
                               placeholder="<?php if (isset($data['Q3A5S3'])) echo $data['Q3A5S3'] ?>"
                               value="<?php echo set_value('Q3A5S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 6</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S1" type="text" name="Q3A6S1"
                               placeholder="<?php if (isset($data['Q3A6S1'])) echo $data['Q3A6S1'] ?>"
                               value="<?php echo set_value('Q3A6S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S2" type="text" name="Q3A6S2"
                               placeholder="<?php if (isset($data['Q3A6S2'])) echo $data['Q3A6S2'] ?>"
                               value="<?php echo set_value('Q3A6S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S3" type="number" name="Q3A6S3"
                               placeholder="<?php if (isset($data['Q3A6S3'])) echo $data['Q3A6S3'] ?>"
                               value="<?php echo set_value('Q3A6S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 7</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S1" type="text" name="Q3A7S1"
                               placeholder="<?php if (isset($data['Q3A7S1'])) echo $data['Q3A7S1'] ?>"
                               value="<?php echo set_value('Q3A7S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S2" type="text" name="Q3A7S2"
                               placeholder="<?php if (isset($data['Q3A7S2'])) echo $data['Q3A7S2'] ?>"
                               value="<?php echo set_value('Q3A7S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S3" type="number" name="Q3A7S3"
                               placeholder="<?php if (isset($data['Q3A7S3'])) echo $data['Q3A7S3'] ?>"
                               value="<?php echo set_value('Q3A7S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 8</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S1" type="text" name="Q3A8S1"
                               placeholder="<?php if (isset($data['Q3A8S1'])) echo $data['Q3A8S1'] ?>"
                               value="<?php echo set_value('Q3A8S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S2" type="text" name="Q3A8S2"
                               placeholder="<?php if (isset($data['Q3A8S2'])) echo $data['Q3A8S2'] ?>"
                               value="<?php echo set_value('Q3A8S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S3" type="number" name="Q3A8S3"
                               placeholder="<?php if (isset($data['Q3A8S3'])) echo $data['Q3A8S3'] ?>"
                               value="<?php echo set_value('Q3A8S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 9</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S1" type="text" name="Q3A9S1"
                               placeholder="<?php if (isset($data['Q3A9S1'])) echo $data['Q3A9S1'] ?>"
                               value="<?php echo set_value('Q3A9S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S2" type="text" name="Q3A9S2"
                               placeholder="<?php if (isset($data['Q3A9S2'])) echo $data['Q3A9S2'] ?>"
                               value="<?php echo set_value('Q3A9S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S3" type="number" name="Q3A9S3"
                               placeholder="<?php if (isset($data['Q3A9S3'])) echo $data['Q3A9S3'] ?>"
                               value="<?php echo set_value('Q3A9S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 10</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S1" type="text" name="Q3A10S1"
                               placeholder="<?php if (isset($data['Q3A10S1'])) echo $data['Q3A10S1'] ?>"
                               value="<?php echo set_value('Q3A10S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S2" type="text" name="Q3A10S2"
                               placeholder="<?php if (isset($data['Q3A10S2'])) echo $data['Q3A10S2'] ?>"
                               value="<?php echo set_value('Q3A10S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S3" type="number" name="Q3A10S3"
                               placeholder="<?php if (isset($data['Q3A10S3'])) echo $data['Q3A10S3'] ?>"
                               value="<?php echo set_value('Q3A10S3'); ?>"/>
          </div>
        </div>
      </div>
      <div class="clearfix">&nbsp;</div>
      <div class="form-group">
        <label>
        <h6>Task 2: Are the rooms in your school well-ventilated?</h6>
        </label>
        <br>
        1. For this exercise, classrooms that are occupied by students regularly should be considered. Do not add laboratories and auditoriums.<br>
        2. Openings: Are there any windows and ventilators which can be opened on a regular basis and can be opened anytime? Please do not consider/add doors.<br>
        3. This exercise should be done by schools with centrally air conditioning system also. <br>
        4. The exercise should be carried out for ten classrooms only. Sample size should have representation
        from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and
        higher secondary. If your school is up to Standard X only, then, at your discretion, you can add a class
        to any tier. <br>
        5. This activity is for all schools (non-air-conditioned buildings as well as air-conditioned
        buildings). </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">1</span>How many classrooms does your school
        have?</label>
        <div class="clearfix">&nbsp;</div>
        <?php
                if (empty($data['Q4A1']))
                    $data['Q4A1'] = 0;
                $attribs = array("class" => "form-control", "id" => "WindowRatio", "type" => "number", "name" => "Q4A1", "onchange" => "WindowFloorRatio(this.value)");
                echo form_input('Q4A1', $data['Q4A1'], $attribs);
                ?>
        <!--    <input type="text"  id="WindowRatio" name="Q4A1" class="form-control" placeholder="<?php if (isset($data['Q4A1'])) echo $data['Q4A1'] ?>" value="<?php echo set_value('Q4A1'); ?>">
         -->
      </div>
    </div>
    <div class="form-group" id="Ratio">
      <label class="control-label"><span class="cube">2</span>To calculate the Window-floor ratio (WFR)  of classrooms in
      your school, please fill the table below:</label>
      <div class="form-group1 row">
        <div class="col-xs-3">
          <label>Details of the classroom (e.g. Class II section b)</label>
        </div>
        <div class="col-xs-3">
          <label>X = Area of floor (LxB) (square meters)</label>
        </div>
        <div class="col-xs-3">
          <label>Y = Area of openable windows/ventilators ∑ (LxH)</label>
        </div>
        <div class="col-xs-3">
          <label>Percentage of the floor area being ventilated (Y/X x 100)</label>
        </div>
      </div>
      <div class="form-group1 row" id="A1S1"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 0)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A1S1" type="text"
                           name="Q5A1S1" placeholder="<?php if (isset($data['Q5A1S1'])) echo $data['Q5A1S1'] ?>"
                           value="<?php if (isset($data['Q5A1S1'])) echo $data['Q5A1S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A1S2" type="number"
                           min="0" name="Q5A1S2" placeholder="<?php if (isset($data['Q5A1S2'])) echo $data['Q5A1S2'] ?>"
                           value="<?php if (isset($data['Q5A1S2'])) echo $data['Q5A1S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A1S3" type="number"
                           min="0" name="Q5A1S3" placeholder="<?php if (isset($data['Q5A1S3'])) echo $data['Q5A1S3'] ?>"
                           value="<?php if (isset($data['Q5A1S3'])) echo $data['Q5A1S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A1S4" type="number"
                           min="0" name="Q5A1S4" placeholder="<?php if (isset($data['Q5A1S4'])) echo $data['Q5A1S4'] ?>"
                           value="<?php if (isset($data['Q5A1S4'])) echo $data['Q5A1S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S2"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 1)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A2S1" type="text"
                            name="Q5A2S1" placeholder="<?php if (isset($data['Q5A2S1'])) echo $data['Q5A2S1'] ?>"
                           value="<?php if (isset($data['Q5A2S1'])) echo $data['Q5A2S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A2S2" type="number"
                           min="0" name="Q5A2S2" placeholder="<?php if (isset($data['Q5A2S2'])) echo $data['Q5A2S2'] ?>"
                           value="<?php if (isset($data['Q5A2S2'])) echo $data['Q5A2S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A2S3" type="number"
                           min="0" name="Q5A2S3" placeholder="<?php if (isset($data['Q5A2S3'])) echo $data['Q5A2S3'] ?>"
                           value="<?php if (isset($data['Q5A2S3'])) echo $data['Q5A2S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A2S4" type="number"
                           min="0" name="Q5A2S4" placeholder="<?php if (isset($data['Q5A2S4'])) echo $data['Q5A2S4'] ?>"
                           value="<?php if (isset($data['Q5A2S4'])) echo $data['Q5A2S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S3"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 2)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A3S1" type="text"
                           name="Q5A3S1" placeholder="<?php if (isset($data['Q5A3S1'])) echo $data['Q5A3S1'] ?>"
                           value="<?php if (isset($data['Q5A3S1'])) echo $data['Q5A3S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A3S2" type="number"
                           min="0" name="Q5A3S2" placeholder="<?php if (isset($data['Q5A3S2'])) echo $data['Q5A3S2'] ?>"
                           value="<?php if (isset($data['Q5A3S2'])) echo $data['Q5A3S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A3S3" type="number"
                           min="0" name="Q5A3S3" placeholder="<?php if (isset($data['Q5A3S3'])) echo $data['Q5A3S3'] ?>"
                           value="<?php if (isset($data['Q5A3S3'])) echo $data['Q5A3S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A3S4" type="number"
                           min="0" name="Q5A3S4" placeholder="<?php if (isset($data['Q5A3S4'])) echo $data['Q5A3S4'] ?>"
                           value="<?php if (isset($data['Q5A3S4'])) echo $data['Q5A3S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S4"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 3)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A4S1" type="text"
                            name="Q5A4S1" placeholder="<?php if (isset($data['Q5A4S1'])) echo $data['Q5A4S1'] ?>"
                           value="<?php if (isset($data['Q5A4S1'])) echo $data['Q5A4S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A4S2" type="number"
                           min="0" name="Q5A4S2" placeholder="<?php if (isset($data['Q5A4S2'])) echo $data['Q5A4S2'] ?>"
                           value="<?php if (isset($data['Q5A4S2'])) echo $data['Q5A4S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A4S3" type="number"
                           min="0" name="Q5A4S3" placeholder="<?php if (isset($data['Q5A4S3'])) echo $data['Q5A4S3'] ?>"
                           value="<?php if (isset($data['Q5A4S3'])) echo $data['Q5A4S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A4S4" type="number"
                           min="0" name="Q5A4S4" placeholder="<?php if (isset($data['Q5A4S4'])) echo $data['Q5A4S4'] ?>"
                           value="<?php if (isset($data['Q5A4S4'])) echo $data['Q5A4S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S5"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 4)
                        echo " style='display:block;'";
                    else
                        echo " style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A5S1" type="text"
                           name="Q5A5S1" placeholder="<?php if (isset($data['Q5A5S1'])) echo $data['Q5A5S1'] ?>"
                           value="<?php if (isset($data['Q5A5S1'])) echo $data['Q5A5S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A5S2" type="number"
                           min="0" name="Q5A5S2" placeholder="<?php if (isset($data['Q5A5S2'])) echo $data['Q5A5S2'] ?>"
                           value="<?php if (isset($data['Q5A5S2'])) echo $data['Q5A5S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A5S3" type="number"
                           min="0" name="Q5A5S3" placeholder="<?php if (isset($data['Q5A5S3'])) echo $data['Q5A5S3'] ?>"
                           value="<?php if (isset($data['Q5A5S3'])) echo $data['Q5A5S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A5S4" type="number"
                           min="0" name="Q5A5S4" placeholder="<?php if (isset($data['Q5A5S4'])) echo $data['Q5A5S4'] ?>"
                           value="<?php if (isset($data['Q5A5S4'])) echo $data['Q5A5S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S6"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 5)
                        echo " style='display:block;'";
                    else
                        echo " style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A6S1" type="text"
                            name="Q5A6S1" placeholder="<?php if (isset($data['Q5A6S1'])) echo $data['Q5A6S1'] ?>"
                           value="<?php if (isset($data['Q5A6S1'])) echo $data['Q5A6S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A6S2" type="number"
                           min="0" name="Q5A6S2" placeholder="<?php if (isset($data['Q5A6S2'])) echo $data['Q5A6S2'] ?>"
                           value="<?php if (isset($data['Q5A6S2'])) echo $data['Q5A6S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A6S3" type="number"
                           min="0" name="Q5A6S3" placeholder="<?php if (isset($data['Q5A6S3'])) echo $data['Q5A6S3'] ?>"
                           value="<?php if (isset($data['Q5A6S3'])) echo $data['Q5A6S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A6S4" type="number"
                           min="0" name="Q5A6S4" placeholder="<?php if (isset($data['Q5A6S4'])) echo $data['Q5A6S4'] ?>"
                           value="<?php if (isset($data['Q5A6S4'])) echo $data['Q5A6S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S7"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 6)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A7S1" type="text"
                            name="Q5A7S1" placeholder="<?php if (isset($data['Q5A7S1'])) echo $data['Q5A7S1'] ?>"
                           value="<?php if (isset($data['Q5A7S1'])) echo $data['Q5A7S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A7S2" type="number"
                           min="0" name="Q5A7S2" placeholder="<?php if (isset($data['Q5A7S2'])) echo $data['Q5A7S2'] ?>"
                           value="<?php if (isset($data['Q5A7S2'])) echo $data['Q5A7S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A7S3" type="number"
                           min="0" name="Q5A7S3" placeholder="<?php if (isset($data['Q5A7S3'])) echo $data['Q5A7S3'] ?>"
                           value="<?php if (isset($data['Q5A7S3'])) echo $data['Q5A7S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A7S4" type="number"
                           min="0" name="Q5A7S4" placeholder="<?php if (isset($data['Q5A7S4'])) echo $data['Q5A7S4'] ?>"
                           value="<?php if (isset($data['Q5A7S4'])) echo $data['Q5A7S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S8"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 7)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A8S1" type="text"
                           name="Q5A8S1" placeholder="<?php if (isset($data['Q5A8S1'])) echo $data['Q5A8S1'] ?>"
                           value="<?php if (isset($data['Q5A8S1'])) echo $data['Q5A8S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A8S2" type="number"
                           min="0" name="Q5A8S2" placeholder="<?php if (isset($data['Q5A8S2'])) echo $data['Q5A8S2'] ?>"
                           value="<?php if (isset($data['Q5A8S2'])) echo $data['Q5A8S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A8S3" type="number"
                           min="0" name="Q5A8S3" placeholder="<?php if (isset($data['Q5A8S3'])) echo $data['Q5A8S3'] ?>"
                           value="<?php if (isset($data['Q5A8S3'])) echo $data['Q5A8S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A8S4" type="number"
                           min="0" name="Q5A8S4" placeholder="<?php if (isset($data['Q5A8S4'])) echo $data['Q5A8S4'] ?>"
                           value="<?php if (isset($data['Q5A8S4'])) echo $data['Q5A8S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S9"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 8)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A9S1" type="text"
                           name="Q5A9S1" placeholder="<?php if (isset($data['Q5A9S1'])) echo $data['Q5A9S1'] ?>"
                           value="<?php if (isset($data['Q5A9S1'])) echo $data['Q5A9S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A9S2" type="number"
                           min="0" name="Q5A9S2" placeholder="<?php if (isset($data['Q5A9S2'])) echo $data['Q5A9S2'] ?>"
                           value="<?php if (isset($data['Q5A9S2'])) echo $data['Q5A9S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A9S3" type="number"
                           min="0" name="Q5A9S3" placeholder="<?php if (isset($data['Q5A9S3'])) echo $data['Q5A9S3'] ?>"
                           value="<?php if (isset($data['Q5A9S3'])) echo $data['Q5A9S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A9S4" type="number"
                           min="0" name="Q5A9S4" placeholder="<?php if (isset($data['Q5A9S4'])) echo $data['Q5A9S4'] ?>"
                           value="<?php if (isset($data['Q5A9S4'])) echo $data['Q5A9S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row" id="A1S10"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 9)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A10S1" type="text"
                           name="Q5A10S1"
                           placeholder="<?php if (isset($data['Q5A10S1'])) echo $data['Q5A10S1'] ?>"
                           value="<?php if (isset($data['Q5A10S1'])) echo $data['Q5A10S1'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A10S2" type="number"
                           min="0" name="Q5A10S2"
                           placeholder="<?php if (isset($data['Q5A10S2'])) echo $data['Q5A10S2'] ?>"
                           value="<?php if (isset($data['Q5A10S2'])) echo $data['Q5A10S2'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A10S3" type="number"
                           min="0" name="Q5A10S3"
                           placeholder="<?php if (isset($data['Q5A10S3'])) echo $data['Q5A10S3'] ?>"
                           value="<?php if (isset($data['Q5A10S3'])) echo $data['Q5A10S3'] ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" onChange="computePercent()" id="Q5A10S4" type="number"
                           min="0" name="Q5A10S4"
                           placeholder="<?php if (isset($data['Q5A10S4'])) echo $data['Q5A10S4'] ?>"
                           value="<?php if (isset($data['Q5A10S4'])) echo $data['Q5A10S4'] ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-3">
          <input type="text" class="form-control space-textbox" placeholder="Total" style="text-align:center;"
                           readonly=""/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q5A110S2" type="number" min="0" name="Q5A110S2"
                           placeholder="<?php if (isset($data['Q5A110S2'])) echo $data['Q5A110S2'] ?>"
                           value="<?php if (isset($data['Q5A110S2'])) echo $data['Q5A110S2'] ?>" readonly/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q5A110S3" type="number" min="0" name="Q5A110S3"
                           placeholder="<?php if (isset($data['Q5A110S3'])) echo $data['Q5A110S3'] ?>"
                           value="<?php if (isset($data['Q5A110S3'])) echo $data['Q5A110S3'] ?>" readonly/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q5A110S4" type="number" min="0" name="Q5A110S4"
                           readonly/>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>
      <h6> Task 3: How eco-friendly are the vehicles in your school?</h6>
      </label>
      <p>
        <!--In this section, you will maintain a record of vehicles used by your school. Two critical parameters
        indicate if your vehicles are eco-friendly. One—type of fuel—is given in the table below.
		-->
        In this section, you will maintain a record of vehicles used by your school. The type of fuel used
        by the vehicles is a critical parameter that indicates if your vehicles are eco-friendly. </p>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">3</span>What is the ownership of the vehicles used by your
      school? Please choose what is applicable.</label>
      <div class="radio">
        <label>
        <input type="radio" id="Q6A1" required onClick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 1) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 1 ? "checked" : "" ?>>
        School does not use or own vehicles </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" id="Q6A1" required onClick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 2) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 2 ? "checked" : "" ?>>
        Operator-owned vehicles </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" id="Q6A1" required onClick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 3) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 3 ? "checked" : "" ?>>
        School-owned vehicles </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" id="Q6A1" required onClick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 4) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 4 ? "checked" : "" ?>>
        A combination of school-owned and operator-owned vehicles </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" id="Q6A1" required onClick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 5) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 5 ? "checked" : "" ?>>
        Hired vehicles (For instance: JNV schools) </label>
      </div>
    </div>
    <div class="form-group" id="vehicle"
            <?php
            if (isset($data['Q6A1']))
                if ($data['Q6A1'] == 1 || $data['Q6A1'] == 2)
                    echo 'style="display:none;"';
                else
                    echo 'style="display:block;"';
            else
                echo 'style="display:none;"';
            ?>>
      <label class="control-label"><span class="cube">3(a)</span>Provide details of school-owned motorised
      vehicles <a class="tt"
                            data-tooltip="Schools who use a combination of school-owned and operator-owned vehicles have to upload information only about school-owned vehicles. Do not add any personal vehicles."><span
                            class="badge">?</span></a></label>
      <div class="form-group-1 row">
        <div class="col-xs-2">
          <label>Vehicle Details</label>
        </div>
        <div class="col-xs-2">
          <label>Buses</label>
        </div>
        <div class="col-xs-2">
          <label>Cars</label>
        </div>
        <div class="col-xs-2">
          <label>Vans / SUVs</label>
        </div>
        <div class="col-xs-2">
          <label>Others</label>
        </div>
        <div class="col-xs-2">
          <label>Total</label>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>No. of vehicles</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="b1" type="number" min="0"
                           name="Q6A2S1B1" placeholder="<?php if (isset($data['Q6A2S1B1'])) echo $data['Q6A2S1B1'] ?>"
                           value="<?php if (isset($data['Q6A2S1B1'])) echo $data['Q6A2S1B1'] ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="c1" type="number" min="0"
                           name="Q6A2S1C1" placeholder="<?php if (isset($data['Q6A2S1C1'])) echo $data['Q6A2S1C1'] ?>"
                           value="<?php if (isset($data['Q6A2S1C1'])) echo $data['Q6A2S1C1'] ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="v1" type="number" min="0"
                           name="Q6A2S1V1" placeholder="<?php if (isset($data['Q6A2S1V1'])) echo $data['Q6A2S1V1'] ?>"
                           value="<?php if (isset($data['Q6A2S1V1'])) echo $data['Q6A2S1V1'] ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="o1" type="number" min="0"
                           name="Q6A2S1O1" placeholder="<?php if (isset($data['Q6A2S1O1'])) echo $data['Q6A2S1O1'] ?>"
                           value="<?php if (isset($data['Q6A2S1O1'])) echo $data['Q6A2S1O1'] ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t1" type="number" min="0"
                           name="Q6A2S1T1" placeholder="<?php if (isset($data['Q6A2S1T1'])) echo $data['Q6A2S1T1'] ?>"
                           value="<?php echo set_value('Q6A2S1T1'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>No. of vehicles more than eight years old</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="b2" type="number" min="0"
                           name="Q6A2S1B2" placeholder="<?php if (isset($data['Q6A2S1B2'])) echo $data['Q6A2S1B2'] ?>"
                           value="<?php echo set_value('Q6A2S1B2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="c2" type="number" min="0"
                           name="Q6A2S1C2" placeholder="<?php if (isset($data['Q6A2S1C2'])) echo $data['Q6A2S1C2'] ?>"
                           value="<?php echo set_value('Q6A2S1C2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="v2" type="number" min="0"
                           name="Q6A2S1V2" placeholder="<?php if (isset($data['Q6A2S1V2'])) echo $data['Q6A2S1V2'] ?>"
                           value="<?php echo set_value('Q6A2S1V2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="o2" type="number" min="0"
                           name="Q6A2S1O2" placeholder="<?php if (isset($data['Q6A2S1O2'])) echo $data['Q6A2S1O2'] ?>"
                           value="<?php echo set_value('Q6A2S1O2'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t2" type="number" min="0"
                           name="Q6A2S1T2" placeholder="<?php if (isset($data['Q6A2S1T2'])) echo $data['Q6A2S1T2'] ?>"
                           value="<?php echo set_value('Q6A2S1T2'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>No. of Air conditioned vehicles</label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="b3" type="number" min="0"
                           name="Q6A2S1B3" placeholder="<?php if (isset($data['Q6A2S1B3'])) echo $data['Q6A2S1B3'] ?>"
                           value="<?php echo set_value('Q6A2S1B3'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="c3" type="number" min="0"
                           name="Q6A2S1C3" placeholder="<?php if (isset($data['Q6A2S1C3'])) echo $data['Q6A2S1C3'] ?>"
                           value="<?php echo set_value('Q6A2S1C3'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="v3" type="number" min="0"
                           name="Q6A2S1V3" placeholder="<?php if (isset($data['Q6A2S1V3'])) echo $data['Q6A2S1V3'] ?>"
                           value="<?php echo set_value('Q6A2S1V3'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="o3" type="number" min="0"
                           name="Q6A2S1O3" placeholder="<?php if (isset($data['Q6A2S1O3'])) echo $data['Q6A2S1O3'] ?>"
                           value="<?php echo set_value('Q6A2S1O3'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t3" type="number" min="0"
                           name="Q6A2S1T3" placeholder="<?php if (isset($data['Q6A2S1T3'])) echo $data['Q6A2S1T3'] ?>"
                           value="<?php echo set_value('Q6A2S1T3'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>PUC done <a class="tt" data-tooltip="Pollution Under Control (PUC) Certificate is legal mandatory requirement for all motor vehicles plying on Indian roads Motor Vehicles Act, 1988"><span class="badge">?</span></a></label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="b4" type="number" min="0"
                           name="Q6A2S1B4" placeholder="<?php if (isset($data['Q6A2S1B4'])) echo $data['Q6A2S1B4'] ?>"
                           value="<?php echo set_value('Q6A2S1B4'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="c4" type="number" min="0"
                           name="Q6A2S1C4" placeholder="<?php if (isset($data['Q6A2S1C4'])) echo $data['Q6A2S1C4'] ?>"
                           value="<?php echo set_value('Q6A2S1C4'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="v4" type="number" min="0"
                           name="Q6A2S1V4" placeholder="<?php if (isset($data['Q6A2S1V4'])) echo $data['Q6A2S1V4'] ?>"
                           value="<?php echo set_value('Q6A2S1V4'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="o4" type="number" min="0"
                           name="Q6A2S1O4" placeholder="<?php if (isset($data['Q6A2S1O4'])) echo $data['Q6A2S1O4'] ?>"
                           value="<?php echo set_value('Q6A2S1O4'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t4" type="number" min="0"
                           name="Q6A2S1T4" placeholder="<?php if (isset($data['Q6A2S1T4'])) echo $data['Q6A2S1T4'] ?>"
                           value="<?php echo set_value('Q6A2S1T4'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>Authorised parking available <a class="tt"
                                                           data-tooltip="For parking area, give the number of vehicles (Of the total) that have designated parking areas."><span
                                    class="badge">?</span></a></label>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="b5" type="number" min="0"
                           name="Q6A2S1B5" placeholder="<?php if (isset($data['Q6A2S1B5'])) echo $data['Q6A2S1B5'] ?>"
                           value="<?php echo set_value('Q6A2S1B5'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="c5" type="number" min="0"
                           name="Q6A2S1C5" placeholder="<?php if (isset($data['Q6A2S1C5'])) echo $data['Q6A2S1C5'] ?>"
                           value="<?php echo set_value('Q6A2S1C5'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="v5" type="number" min="0"
                           name="Q6A2S1V5" placeholder="<?php if (isset($data['Q6A2S1V5'])) echo $data['Q6A2S1V5'] ?>"
                           value="<?php echo set_value('Q6A2S1V5'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="o5" type="number" min="0"
                           name="Q6A2S1O5" placeholder="<?php if (isset($data['Q6A2S1O5'])) echo $data['Q6A2S1O5'] ?>"
                           value="<?php echo set_value('Q6A2S1O5'); ?>"/>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t5" type="number" min="0"
                           name="Q6A2S1T5" placeholder="<?php if (isset($data['Q6A2S1T5'])) echo $data['Q6A2S1T5'] ?>"
                           value="<?php echo set_value('Q6A2S1T5'); ?>" readonly/>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-2">
          <label>Annual road worthiness certificate (Yes / No)</label>
        </div>
        <div class="col-xs-2">
          <select class="form-control space-textbox" onChange="details()" id="b6" type="text"  name="Q6A2S1B6">
            <option value="">Select</option>
            <option value="Yes" <?php if(isset($data['Q6A2S1B6'])){ if(strcmp($data['Q6A2S1B6'],"Yes")==0) { echo "selected"; } }  ?>>Yes</option>
            <option value="No" <?php if(isset($data['Q6A2S1B6'])){ if(strcmp($data['Q6A2S1B6'],"No")==0) { echo "selected"; } }  ?>>No</option>
          </select>
        </div>
        <div class="col-xs-2">
          <select class="form-control space-textbox" onChange="details()" id="c6" type="text"  name="Q6A2S1C6">
            <option value="">Select</option>
            <option value="Yes" <?php if(isset($data['Q6A2S1C6'])){ if(strcmp($data['Q6A2S1C6'],"Yes")==0) { echo "selected"; } }  ?>>Yes</option>
            <option value="No" <?php if(isset($data['Q6A2S1C6'])){ if(strcmp($data['Q6A2S1C6'],"No")==0) { echo "selected"; } }  ?>>No</option>
          </select>
        </div>
        <div class="col-xs-2">
          <select class="form-control space-textbox" onChange="details()" id="v6" type="text"  name="Q6A2S1V6">
            <option value="">Select</option>
            <option value="Yes" <?php if(isset($data['Q6A2S1V6'])){ if(strcmp($data['Q6A2S1V6'],"Yes")==0) { echo "selected"; } }  ?>>Yes</option>
            <option value="No" <?php if(isset($data['Q6A2S1V6'])){ if(strcmp($data['Q6A2S1V6'],"No")==0) { echo "selected"; } }  ?>>No</option>
          </select>
        </div>
        <div class="col-xs-2">
          <select class="form-control space-textbox" onChange="details()" id="o6" type="text"  name="Q6A2S1O6">
            <option value="">Select</option>
            <option value="Yes" <?php if(isset($data['Q6A2S1O6'])){ if(strcmp($data['Q6A2S1O6'],"Yes")==0) { echo "selected"; } }  ?>>Yes</option>
            <option value="No" <?php if(isset($data['Q6A2S1O6'])){ if(strcmp($data['Q6A2S1O6'],"No")==0) { echo "selected"; } }  ?>>No</option>
          </select>
        </div>
        <div class="col-xs-2">
          <input class="form-control space-textbox" onKeyUp="details()" id="t6" type="text" 
                           name="Q6A2S1T6" placeholder="<?php if (isset($data['Q6A2S1T6'])) echo $data['Q6A2S1T6'] ?>"
                           value="<?php echo set_value('Q6A2S1T6'); ?>" readonly=""/>
        </div>
      </div>
    </div>
    <?php
        if (isset($data['Q6A1']))
            if ($data['Q6A1'] == 1 || $data['Q6A1'] == 2)
                echo '<div class="form-group" id="vehicle1" style="display:none;">';
            else
                echo '<div class="form-group" id="vehicle1">';
        else
            echo '<div class="form-group" id="vehicle1" style="display:none;">';

        ?>
  </div>
  <div class="form-group">
    <label>Upload supporting documents</label>
    <br/>
    • PUC certificates of not more than five buses.<br/>
     
  </div>
  <div class="clearfix">&nbsp;</div>
  
  <?php
    if (isset($data['Q6A1']))
        if ($data['Q6A1'] == 1 || $data['Q6A1'] == 2)
            echo '<div class="form-group" id="vehicle2" style="display:none;">';
        else
            echo '<div class="form-group" id="vehicle2">';
    else
        echo '<div class="form-group" id="vehicle2" style="display:none;">';
    ?>
  <label class="control-label"><span class="cube">3(b)</span>Specify the type of fuel used by your school’s vehicles: <a class="tt"
           data-tooltip="The below is an indicative list of type of vehicles.  If the school has other than these vehicles, please provide details in ‘Other vehicles’ section.Enter the number of vehicles run on each type of fuel"><span
                    class="badge">?</span></a></label>
  <table class="table">
    <tr class="text-center">
      <td>Type of vehicles</td>
      <td>Diesel</td>
      <td>Petrol</td>
      <td>LPG</td>
      <td>CNG</td>
      <td>Hybrid</td>
      <td>Electric</td>
      <td>Bio Fuel</td>
    </tr>
    <tr>
      <td>Buses</td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D1"
                       type="number" min="0" name="Q6A2S3D1"
                       placeholder="<?php if (isset($data['Q6A2S3D1'])) echo $data['Q6A2S3D1'] ?>"
                       value="<?php if (isset($data['Q6A2S3D1'])) echo $data['Q6A2S3D1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P1"
                       type="number" min="0" name="Q6A2S3P1"
                       placeholder="<?php if (isset($data['Q6A2S3P1'])) echo $data['Q6A2S3P1'] ?>"
                       value="<?php if (isset($data['Q6A2S3P1'])) echo $data['Q6A2S3P1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L1"
                       type="number" min="0" name="Q6A2S3L1"
                       placeholder="<?php if (isset($data['Q6A2S3L1'])) echo $data['Q6A2S3L1'] ?>"
                       value="<?php if (isset($data['Q6A2S3L1'])) echo $data['Q6A2S3L1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C1"
                       type="number" min="0" name="Q6A2S3C1"
                       placeholder="<?php if (isset($data['Q6A2S3C1'])) echo $data['Q6A2S3C1'] ?>"
                       value="<?php if (isset($data['Q6A2S3C1'])) echo $data['Q6A2S3C1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E1"
                       type="number" min="0" name="Q6A2S3E1"
                       placeholder="<?php if (isset($data['Q6A2S3E1'])) echo $data['Q6A2S3E1'] ?>"
                       value="<?php if (isset($data['Q6A2S3E1'])) echo $data['Q6A2S3E1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H1"
                       type="number" min="0" name="Q6A2S3H1"
                       placeholder="<?php if (isset($data['Q6A2S3H1'])) echo $data['Q6A2S3H1'] ?>"
                       value="<?php if (isset($data['Q6A2S3H1'])) echo $data['Q6A2S3H1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B1"
                       type="number" min="0" name="Q6A2S3B1R"
                       placeholder="<?php if (isset($data['Q6A2S3B1R'])) echo $data['Q6A2S3B1R'] ?>"
                       value="<?php if (isset($data['Q6A2S3B1R'])) echo $data['Q6A2S3B1R'] ?>"/></td>
    </tr>
    <tr>
      <td>Cars</td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D2"
                       type="number" min="0" name="Q6A2S3B1"
                       placeholder="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"
                       value="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P2"
                       type="number" min="0" name="Q6A2S3D2"
                       placeholder="<?php if (isset($data['Q6A2S3D2'])) echo $data['Q6A2S3D2'] ?>"
                       value="<?php if (isset($data['Q6A2S3D2'])) echo $data['Q6A2S3D2'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L2"
                       type="number" min="0" name="Q6A2S3P2"
                       placeholder="<?php if (isset($data['Q6A2S3P2'])) echo $data['Q6A2S3P2'] ?>"
                       value="<?php if (isset($data['Q6A2S3P2'])) echo $data['Q6A2S3P2'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C2"
                       type="number" min="0" name="Q6A2S3L2"
                       placeholder="<?php if (isset($data['Q6A2S3L2'])) echo $data['Q6A2S3L2'] ?>"
                       value="<?php if (isset($data['Q6A2S3L2'])) echo $data['Q6A2S3L2'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E2"
                       type="number" min="0" name="Q6A2S3C2"
                       placeholder="<?php if (isset($data['Q6A2S3C2'])) echo $data['Q6A2S3C2'] ?>"
                       value="<?php if (isset($data['Q6A2S3C2'])) echo $data['Q6A2S3C2'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H2"
                       type="number" min="0" name="Q6A2S3E2"
                       placeholder="<?php if (isset($data['Q6A2S3E2'])) echo $data['Q6A2S3E2'] ?>"
                       value="<?php if (isset($data['Q6A2S3E2'])) echo $data['Q6A2S3E2'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B2"
                       type="number" min="0" name="Q6A2S3H2"
                       placeholder="<?php if (isset($data['Q6A2S3H2'])) echo $data['Q6A2S3H2'] ?>"
                       value="<?php if (isset($data['Q6A2S3H2'])) echo $data['Q6A2S3H2'] ?>"/></td>
    </tr>
    <tr>
      <td>Vans</td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D3"
                       type="number" min="0" name="Q6A2S3D3"
                       placeholder="<?php if (isset($data['Q6A2S3D3'])) echo $data['Q6A2S3D3'] ?>"
                       value="<?php if (isset($data['Q6A2S3D3'])) echo $data['Q6A2S3D3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P3"
                       type="number" min="0" name="Q6A2S3P3"
                       placeholder="<?php if (isset($data['Q6A2S3P3'])) echo $data['Q6A2S3P3'] ?>"
                       value="<?php if (isset($data['Q6A2S3P3'])) echo $data['Q6A2S3P3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L3"
                       type="number" min="0" name="Q6A2S3L3"
                       placeholder="<?php if (isset($data['Q6A2S3L3'])) echo $data['Q6A2S3L3'] ?>"
                       value="<?php if (isset($data['Q6A2S3L3'])) echo $data['Q6A2S3L3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C3"
                       type="number" min="0" name="Q6A2S3C3"
                       placeholder="<?php if (isset($data['Q6A2S3C3'])) echo $data['Q6A2S3C3'] ?>"
                       value="<?php if (isset($data['Q6A2S3C3'])) echo $data['Q6A2S3C3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E3"
                       type="number" min="0" name="Q6A2S3E3"
                       placeholder="<?php if (isset($data['Q6A2S3E3'])) echo $data['Q6A2S3E3'] ?>"
                       value="<?php if (isset($data['Q6A2S3E3'])) echo $data['Q6A2S3E3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H3"
                       type="number" min="0" name="Q6A2S3H3"
                       placeholder="<?php if (isset($data['Q6A2S3H3'])) echo $data['Q6A2S3H3'] ?>"
                       value="<?php if (isset($data['Q6A2S3H3'])) echo $data['Q6A2S3H3'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B3"
                       type="number" min="0" name="Q6A2S3B3"
                       placeholder="<?php if (isset($data['Q6A2S3B3'])) echo $data['Q6A2S3B3'] ?>"
                       value="<?php if (isset($data['Q6A2S3B3'])) echo $data['Q6A2S3B3'] ?>"/></td>
    </tr>
    <tr>
      <td>Other vehicles</td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D4"
                       type="number" min="0" name="Q6A2S3D4"
                       placeholder="<?php if (isset($data['Q6A2S3D4'])) echo $data['Q6A2S3D4'] ?>"
                       value="<?php if (isset($data['Q6A2S3D4'])) echo $data['Q6A2S3D4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P4"
                       type="number" min="0" name="Q6A2S3P4"
                       placeholder="<?php if (isset($data['Q6A2S3P4'])) echo $data['Q6A2S3P4'] ?>"
                       value="<?php if (isset($data['Q6A2S3P4'])) echo $data['Q6A2S3P4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L4"
                       type="number" min="0" name="Q6A2S3L4"
                       placeholder="<?php if (isset($data['Q6A2S3L4'])) echo $data['Q6A2S3L4'] ?>"
                       value="<?php if (isset($data['Q6A2S3L4'])) echo $data['Q6A2S3L4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C4"
                       type="number" min="0" name="Q6A2S3C4"
                       placeholder="<?php if (isset($data['Q6A2S3C4'])) echo $data['Q6A2S3C4'] ?>"
                       value="<?php if (isset($data['Q6A2S3C4'])) echo $data['Q6A2S3C4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E4"
                       type="number" min="0" name="Q6A2S3E4"
                       placeholder="<?php if (isset($data['Q6A2S3E4'])) echo $data['Q6A2S3E4'] ?>"
                       value="<?php if (isset($data['Q6A2S3E4'])) echo $data['Q6A2S3E4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H4"
                       type="number" min="0" name="Q6A2S3H4"
                       placeholder="<?php if (isset($data['Q6A2S3H4'])) echo $data['Q6A2S3H4'] ?>"
                       value="<?php if (isset($data['Q6A2S3H4'])) echo $data['Q6A2S3H4'] ?>"/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B4"
                       type="number" min="0" name="Q6A2S3B4"
                       placeholder="<?php if (isset($data['Q6A2S3B4'])) echo $data['Q6A2S3B4'] ?>"
                       value="<?php if (isset($data['Q6A2S3B4'])) echo $data['Q6A2S3B4'] ?>"/></td>
    </tr>
    <tr>
      <td>Sub-Total</td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D5"
                       type="number" min="0" name="Q6A2S3D5"
                       placeholder="<?php if (isset($data['Q6A2S3D5'])) echo $data['Q6A2S3D5'] ?>"
                       value="<?php if (isset($data['Q6A2S3D5'])) echo $data['Q6A2S3D5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P5"
                       type="number" min="0" name="Q6A2S3P5"
                       placeholder="<?php if (isset($data['Q6A2S3P5'])) echo $data['Q6A2S3P5'] ?>"
                       value="<?php if (isset($data['Q6A2S3P5'])) echo $data['Q6A2S3P5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L5"
                       type="number" min="0" name="Q6A2S3L5"
                       placeholder="<?php if (isset($data['Q6A2S3L5'])) echo $data['Q6A2S3L5'] ?>"
                       value="<?php if (isset($data['Q6A2S3L5'])) echo $data['Q6A2S3L5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C5"
                       type="number" min="0" name="Q6A2S3C5"
                       placeholder="<?php if (isset($data['Q6A2S3C5'])) echo $data['Q6A2S3C5'] ?>"
                       value="<?php if (isset($data['Q6A2S3C5'])) echo $data['Q6A2S3C5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E5"
                       type="number" min="0" name="Q6A2S3E5"
                       placeholder="<?php if (isset($data['Q6A2S3E5'])) echo $data['Q6A2S3E5'] ?>"
                       value="<?php if (isset($data['Q6A2S3E5'])) echo $data['Q6A2S3E5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H5"
                       type="number" min="0" name="Q6A2S3H5"
                       placeholder="<?php if (isset($data['Q6A2S3H5'])) echo $data['Q6A2S3H5'] ?>"
                       value="<?php if (isset($data['Q6A2S3H5'])) echo $data['Q6A2S3H5'] ?>" readonly/></td>
      <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B5"
                       type="number" min="0" name="Q6A2S3B5"
                       placeholder="<?php if (isset($data['Q6A2S3B5'])) echo $data['Q6A2S3B5'] ?>"
                       value="<?php if (isset($data['Q6A2S3B5'])) echo $data['Q6A2S3B5'] ?>" readonly/></td>
    </tr>
  </table>
</div>
<div class="form-group">
  <label class="control-label">Upload supporting documents</label>
  <br>
  • Fuel bills<br>
  • Picture of school owned vehicles<br>
  
</div>
<?php
if (isset($data['Q6A1']))
    if ($data['Q6A1'] == 1 || $data['Q6A1'] == 2)
        echo '<div class="form-group" id="Q6A3" style="display:none;">';
    else
        echo '<div class="form-group" id="Q6A3">';
else
    echo '<div class="form-group" id="Q6A3" style="display:none;">';

?>
<label class="control-label"><span class="cube">3(c)</span>Is CNG available in your state?</label>
<ul class="list-inline">
  <li>
    <label>
    <input type="radio" name="Q6A3" id="Q6A3Answer" onClick="AvailableState(1)"
                   value="<?php echo set_value('Q6A3', 'Y') ?>" <?php if (isset($data['Q6A3'])) echo $data['Q6A3'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
  </li>
  <li>
    <label>
    <input type="radio" name="Q6A3" id="Q6A3Answer" onClick="AvailableState(2)"
                   value="<?php echo set_value('Q6A3', 'N') ?>" <?php if (isset($data['Q6A3'])) echo $data['Q6A3'] == 'N' ? "checked" : "" ?>>
    No </label>
  </li>
</ul>
</div>
<?php
if (isset($data['Q6A3']))
    if ($data['Q6A3'] == 'Y')
        echo '<div class="form-group" id="Q6A3S1">';
    else
        echo '<div class="form-group" id="Q6A3S1" style="display:none;">';
else
    echo '<div class="form-group" id="Q6A3S1" style="display:none;">';

?>
<label class="control-label"><span class="cube">3(c)a</span>Is CNG available in your area?</label>
<ul class="list-inline">
  <li>
    <label>
    <input type="radio" name="Q6A4S1" id="Q6A3S1Answer"
                   value="<?php echo set_value('Q6A4S1', 'Y') ?>" <?php if (isset($data['Q6A4S1'])) echo $data['Q6A4S1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
  </li>
  <li>
    <label>
    <input type="radio" name="Q6A4S1" id="Q6A3S1Answer"
                   value="<?php echo set_value('Q6A4S1', 'N') ?>" <?php if (isset($data['Q6A4S1'])) echo $data['Q6A4S1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </li>
</ul>
</div>
<div class="form-group">
  <label>
  <h6> Task 4: How do you travel to school every day? </h6>
  </label>
  <p> To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the
    team should ask individual class monitors to record the commuting practices of his/her classmates and the
    teachers, and forward the data to the audit team. After completing the survey, provide the compiled information
    below.</p>
	
	<p>If the students, teachers and other staff are using more than one mode of transport, the mode of transport used to cover the maximum of the total distance should be considered. Also consider the transport mode used the most times in a month.</p>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">4</span>Please specify how many members of the
  school community use each type of transport: <a class="tt"
                                                        data-tooltip="Frequency of use in a month of a particular mode (enter 0 in case a mode is not used)"><span
                    class="badge">?</span></a> <a class="kplink"
                                                  href="http://www.greenschoolsprogramme.org/knowledge-bank/air/#publicTransport"
                                                  target="_blank"> </a></label>
  <div class="form-group row">
    <label class="control-label"><span class="cube">4(a)</span> Sustainable Motorised Vehicles </label>
  </div>
  <input type="hidden" id="Q4G4S3"
           value="<?php if (isset($other['Q4G4S3'])) if ($other['Q4G4S3']) echo $other['Q4G4S3']; ?>"/>
  <input type="hidden" id="Q4G1S3"
           value="<?php if (isset($other['Q4G1S3'])) if ($other['Q4G1S3']) echo $other['Q4G1S3']; ?>"/>
  <input type="hidden" id="Q4G2S3"
           value="<?php if (isset($other['Q4G2S3'])) if ($other['Q4G2S3']) echo $other['Q4G2S3']; ?>"/>
  <input type="hidden" id="Q4G3S3"
           value="<?php if (isset($other['Q4G3S3'])) if ($other['Q4G3S3']) echo $other['Q4G3S3']; ?>"/>
  <script></script>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Mode of transport</label>
    </div>
    <div class="col-xs-2">
      <label>Students</label>
    </div>
    <div class="col-xs-2">
      <label>Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Non-Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Total</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>School bus</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A1S1" type="number" min="0" name="Q7A1S1"
                   placeholder="<?php if (isset($data['Q7A1S1'])) echo $data['Q7A1S1'] ?>"
                   value="<?php echo set_value('Q7A1S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A1S2" type="number" min="0" name="Q7A1S2"
                   placeholder="<?php if (isset($data['Q7A1S2'])) echo $data['Q7A1S2'] ?>"
                   value="<?php echo set_value('Q7A1S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A1S3" type="number" min="0" name="Q7A1S3"
                   placeholder="<?php if (isset($data['Q7A1S3'])) echo $data['Q7A1S3'] ?>"
                   value="<?php echo set_value('Q7A1S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A1S4" type="number" min="0" name="Q7A1S4"
                   placeholder="<?php if (isset($data['Q7A1S4'])) echo $data['Q7A1S4'] ?>"
                   value="<?php echo set_value('Q7A1S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Public bus</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A2S1" type="number" min="0" name="Q7A2S1"
                   placeholder="<?php if (isset($data['Q7A2S1'])) echo $data['Q7A2S1'] ?>"
                   value="<?php echo set_value('Q7A2S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A2S2" type="number" min="0" name="Q7A2S2"
                   placeholder="<?php if (isset($data['Q7A2S2'])) echo $data['Q7A2S2'] ?>"
                   value="<?php echo set_value('Q7A2S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A2S3" type="number" min="0" name="Q7A2S3"
                   placeholder="<?php if (isset($data['Q7A2S3'])) echo $data['Q7A2S3'] ?>"
                   value="<?php echo set_value('Q7A2S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A2S4" type="number" min="0" name="Q7A2S4"
                   placeholder="<?php if (isset($data['Q7A2S4'])) echo $data['Q7A2S4'] ?>"
                   value="<?php echo set_value('Q7A2S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>School transport (other than bus)</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A3S1" type="number" min="0" name="Q7A3S1"
                   placeholder="<?php if (isset($data['Q7A3S1'])) echo $data['Q7A3S1'] ?>"
                   value="<?php echo set_value('Q7A3S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A3S2" type="number" min="0" name="Q7A3S2"
                   placeholder="<?php if (isset($data['Q7A3S2'])) echo $data['Q7A3S2'] ?>"
                   value="<?php echo set_value('Q7A3S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A3S3" type="number" min="0" name="Q7A3S3"
                   placeholder="<?php if (isset($data['Q7A3S3'])) echo $data['Q7A3S3'] ?>"
                   value="<?php echo set_value('Q7A3S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A3S4" type="number" min="0" name="Q7A3S4"
                   placeholder="<?php if (isset($data['Q7A3S4'])) echo $data['Q7A3S4'] ?>"
                   value="<?php echo set_value('Q7A3S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Public transport (other than bus)</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A4S1" type="number" min="0" name="Q7A4S1"
                   placeholder="<?php if (isset($data['Q7A4S1'])) echo $data['Q7A4S1'] ?>"
                   value="<?php echo set_value('Q7A4S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A4S2" type="number" min="0" name="Q7A4S2"
                   placeholder="<?php if (isset($data['Q7A4S2'])) echo $data['Q7A4S2'] ?>"
                   value="<?php echo set_value('Q7A4S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A4S3" type="number" min="0" name="Q7A4S3"
                   placeholder="<?php if (isset($data['Q7A4S3'])) echo $data['Q7A4S3'] ?>"
                   value="<?php echo set_value('Q7A4S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A4S4" type="number" min="0" name="Q7A4S4"
                   placeholder="<?php if (isset($data['Q7A4S4'])) echo $data['Q7A4S4'] ?>"
                   value="<?php echo set_value('Q7A4S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Taxi four-wheeler</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A5S1" type="number" min="0" name="Q7A5S1"
                   placeholder="<?php if (isset($data['Q7A5S1'])) echo $data['Q7A5S1'] ?>"
                   value="<?php echo set_value('Q7A5S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A5S2" type="number" min="0" name="Q7A5S2"
                   placeholder="<?php if (isset($data['Q7A5S2'])) echo $data['Q7A5S2'] ?>"
                   value="<?php echo set_value('Q7A5S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A5S3" type="number" min="0" name="Q7A5S3"
                   placeholder="<?php if (isset($data['Q7A5S3'])) echo $data['Q7A5S3'] ?>"
                   value="<?php echo set_value('Q7A5S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A5S4" type="number" min="0" name="Q7A5S4"
                   placeholder="<?php if (isset($data['Q7A5S4'])) echo $data['Q7A5S4'] ?>"
                   value="<?php echo set_value('Q7A5S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Taxi three-wheeler</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A6S1" type="number" min="0" name="Q7A6S1"
                   placeholder="<?php if (isset($data['Q7A6S1'])) echo $data['Q7A6S1'] ?>"
                   value="<?php echo set_value('Q7A6S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A6S2" type="number" min="0" name="Q7A6S2"
                   placeholder="<?php if (isset($data['Q7A6S2'])) echo $data['Q7A6S2'] ?>"
                   value="<?php echo set_value('Q7A6S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A6S3" type="number" min="0" name="Q7A6S3"
                   placeholder="<?php if (isset($data['Q7A6S3'])) echo $data['Q7A6S3'] ?>"
                   value="<?php echo set_value('Q7A6S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A6S4" type="number" min="0" name="Q7A6S4"
                   placeholder="<?php if (isset($data['Q7A6S4'])) echo $data['Q7A6S4'] ?>"
                   value="<?php echo set_value('Q7A6S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label"><span class="cube">4(b)</span>Private Vehicles</label>
  </div>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Mode of transport</label>
    </div>
    <div class="col-xs-2">
      <label>Students</label>
    </div>
    <div class="col-xs-2">
      <label>Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Non-Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Total</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Personal four-wheeler</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A7S1" type="number" min="0" name="Q7A7S1"
                   placeholder="<?php if (isset($data['Q7A7S1'])) echo $data['Q7A7S1'] ?>"
                   value="<?php echo set_value('Q7A7S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A7S2" type="number" min="0" name="Q7A7S2"
                   placeholder="<?php if (isset($data['Q7A7S2'])) echo $data['Q7A7S2'] ?>"
                   value="<?php echo set_value('Q7A7S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A7S3" type="number" min="0" name="Q7A7S3"
                   placeholder="<?php if (isset($data['Q7A7S3'])) echo $data['Q7A7S3'] ?>"
                   value="<?php echo set_value('Q7A7S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A7S4" type="number" min="0" name="Q7A7S4"
                   placeholder="<?php if (isset($data['Q7A7S4'])) echo $data['Q7A7S4'] ?>"
                   value="<?php echo set_value('Q7A7S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Personal two-wheeler</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A8S1" type="number" min="0" name="Q7A8S1"
                   placeholder="<?php if (isset($data['Q7A8S1'])) echo $data['Q7A8S1'] ?>"
                   value="<?php echo set_value('Q7A8S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A8S2" type="number" min="0" name="Q7A8S2"
                   placeholder="<?php if (isset($data['Q7A8S2'])) echo $data['Q7A8S2'] ?>"
                   value="<?php echo set_value('Q7A8S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A8S3" type="number" min="0" name="Q7A8S3"
                   placeholder="<?php if (isset($data['Q7A8S3'])) echo $data['Q7A8S3'] ?>"
                   value="<?php echo set_value('Q7A8S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A8S4" type="number" min="0" name="Q7A8S4"
                   placeholder="<?php if (isset($data['Q7A8S4'])) echo $data['Q7A8S4'] ?>"
                   value="<?php echo set_value('Q7A8S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label"><span class="cube">4(c)</span>Non-Polluting Mode</label>
  </div>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Mode of transport</label>
    </div>
    <div class="col-xs-2">
      <label>Students</label>
    </div>
    <div class="col-xs-2">
      <label>Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Non-Teaching Staff</label>
    </div>
    <div class="col-xs-2">
      <label>Total</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Bicycle</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A9S1" type="number" min="0" name="Q7A9S1"
                   placeholder="<?php if (isset($data['Q7A9S1'])) echo $data['Q7A9S1'] ?>"
                   value="<?php echo set_value('Q7A9S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A9S2" type="number" min="0" name="Q7A9S2"
                   placeholder="<?php if (isset($data['Q7A9S2'])) echo $data['Q7A9S2'] ?>"
                   value="<?php echo set_value('Q7A9S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A9S3" type="number" min="0" name="Q7A9S3"
                   placeholder="<?php if (isset($data['Q7A9S3'])) echo $data['Q7A9S3'] ?>"
                   value="<?php echo set_value('Q7A9S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A9S4" type="number" min="0" name="Q7A9S4"
                   placeholder="<?php if (isset($data['Q7A9S4'])) echo $data['Q7A9S4'] ?>"
                   value="<?php echo set_value('Q7A9S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>On foot</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A10S1" type="number" min="0" name="Q7A10S1"
                   placeholder="<?php if (isset($data['Q7A10S1'])) echo $data['Q7A10S1'] ?>"
                   value="<?php echo set_value('Q7A10S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A10S2" type="number" min="0" name="Q7A10S2"
                   placeholder="<?php if (isset($data['Q7A10S2'])) echo $data['Q7A10S2'] ?>"
                   value="<?php echo set_value('Q7A10S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A10S3" type="number" min="0" name="Q7A10S3"
                   placeholder="<?php if (isset($data['Q7A10S3'])) echo $data['Q7A10S3'] ?>"
                   value="<?php echo set_value('Q7A10S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A10S4" type="number" min="0" name="Q7A10S4"
                   placeholder="<?php if (isset($data['Q7A10S4'])) echo $data['Q7A10S4'] ?>"
                   value="<?php echo set_value('Q7A10S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Others (non-motorized)</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A11S1" type="number" min="0" name="Q7A11S1"
                   placeholder="<?php if (isset($data['Q7A11S1'])) echo $data['Q7A11S1'] ?>"
                   value="<?php echo set_value('Q7A11S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A11S2" type="number" min="0" name="Q7A11S2"
                   placeholder="<?php if (isset($data['Q7A11S2'])) echo $data['Q7A11S2'] ?>"
                   value="<?php echo set_value('Q7A11S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A11S3" type="number" min="0" name="Q7A11S3"
                   placeholder="<?php if (isset($data['Q7A11S3'])) echo $data['Q7A11S3'] ?>"
                   value="<?php echo set_value('Q7A11S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" onKeyUp="computeTransport()" onChange="computeTransport()"
                   id="Q7A11S4" type="number" min="0" name="Q7A11S4"
                   placeholder="<?php if (isset($data['Q7A11S4'])) echo $data['Q7A11S4'] ?>"
                   value="<?php echo set_value('Q7A11S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Total</label>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q7A12S1" type="number" min="0" name="Q7A12S1"
                   placeholder="<?php if (isset($data['Q7A12S1'])) echo $data['Q7A12S1'] ?>"
                   value="<?php echo set_value('Q7A12S1'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q7A12S2" type="number" min="0" name="Q7A12S2"
                   placeholder="<?php if (isset($data['Q7A12S2'])) echo $data['Q7A12S2'] ?>"
                   value="<?php echo set_value('Q7A12S2'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <input class="form-control space-textbox" id="Q7A12S3" type="number" min="0" name="Q7A12S3"
                   placeholder="<?php if (isset($data['Q7A12S3'])) echo $data['Q7A12S3'] ?>"
                   value="<?php echo set_value('Q7A12S3'); ?>" readonly/>
    </div>
    <div class="col-xs-2">
      <?php
            if (empty($data['Q7A12S4']))
                $data['Q7A12S4'] = 0;
            $attribs = array("class" => "form-control", "id" => "Q7A12S4", "type" => "number", "name" => "Q7A12S4", "readonly" => "true");
            echo form_input('Q7A12S4', $data['Q7A12S4'], $attribs);
            ?>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">
  <h6>Task 5: How good is the air you breathe in your school? <a class="tt"
                                                                       data-tooltip="The teacher/coordinator in the team should ask individual class monitors to find out the number of students suffering from asthma, bronchitis and other respiratory-related issues. Record the number in the field given below."><span
                        class="badge">?</span></a></h6>
  </label>
  <p> The starting point of air quality monitoring is to first study if an area has an air pollution problem.
    Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards
    are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>
</div>
<div class="form-group">
  <label class="control-label"> <span class="cube">5</span>How many students suffer from respiratory problems? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/air/#pmLevels"
                target="_blank"> </a></label>
  <input type="number" min="0" name="Q8A1" id="Q8A1" class="form-control"
           placeholder="<?php if (isset($data['Q8A1'])) echo $data['Q8A1'] ?>"
           value="<?php if (isset($data['Q8A1'])) echo $data['Q8A1'] ?>"/>
</div>
<div class="form-group">
  <label class="control-label"> <span class="cube">6</span>Does the school laboratory have air quality monitoring
  equipment? </label>
  <ul class="list-inline">
    <li>
      <label>
      <input type="radio" onClick="ComputeLab(1)" id="Q9A1" required name="Q9A1"
                       value="<?php echo set_value('Q8A1', 'Y') ?>" <?php if (isset($data['Q9A1'])) echo $data['Q9A1'] == 'Y' ? "checked" : "" ?>>
      Yes</label>
    </li>
    <li>
      <label>
      <input type="radio" onClick="ComputeLab(2)" id="Q9A1" required name="Q9A1"
                       value="<?php echo set_value('Q9A1', 'N') ?>" <?php if (isset($data['Q9A1'])) echo $data['Q9A1'] == 'N' ? "checked" : "" ?>>
      No</label>
    </li>
  </ul>
</div>
<div class="form-group" id="lab1" <?php
if (isset($data['Q9A1']))
{
    if ($data['Q9A1'] == 'Y') {
        echo "style='display: block;'";
    } else {
        echo "style=\"display: none;\"";
    }
} else {
    echo "style=\"display: none;\"";

} ?>

>
  <label class="control-label">Upload supporting documents</label>
  <br>
  &bull; Picture of Air Quality Monitoring equipment of school<br>
  </div>

 <div class="form-group" id="lab"

    <?php
    if (isset($data['Q9A1']))
    {
        if ($data['Q9A1'] == 'N') {
            echo "style='display: block;'";
        } else {
            echo "style=\"display: none;\"";
        }
    } else {
        echo "style=\"display: none;\"";

    } ?>
 >
  <label class="control-label"><span class="cube">6(a)</span>If No, is there an air quality monitoring
  station
  (private or government) close to your school?</label>
  <ul class="list-inline">
    <li>
      <label>
      <input type="radio" id="Q9A2_1" name="Q9A2"
                       value="<?php echo set_value('Q9A2', 'Y') ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 'Y' ? "checked" : "" ?>>
      Yes</label>
    </li>
    <li>
      <label>
      <input type="radio" id="Q9A2_2" name="Q9A2"
                       value="<?php echo set_value('Q9A2', 'N') ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 'N' ? "checked" : "" ?>>
      No</label>
    </li>
  </ul>
</div> 
<div class="form-group" id="WastePolicy">
  <label class="control-label">
  <h6>Please upload supporting documents:</h6>
  </label>
  <br>
  &bull; Pictures of audit team doing survey<br/>
  Please upload all supporting documents related to this section here. Note, files must be one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg)
  File size per document should not exceed 100 KB
  <br/> 
  <br/>
  <button class="btn uploadbtn upload" data-id="Supporting Document Air" data-toggle="modal"
            data-target="#airModal"
            type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
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
    <?php foreach ($files as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
	    		  
            //$array = explode('.',$f->file_name); 
           // $count = count($array);
	 // $extension = $array[$count-1];
            ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
     <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->file_name ?>" class="img-responsive" /></td>-->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Air_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="text-center">
  <button type="button" class="org-btn" id="btnAirPrevious">Previous</button>
  <button type="submit" class="org-btn" id="airnext" value="movenext">Next</button>
  <button type="button" class="org-btn submit button" id="airsave">Save and Resume Later</button>
</div>
<?php echo form_close(); ?>
</div>
</div>
<?php $this->load->view('footer'); ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/klen-TOrXFA" frameborder="0"
                    id="video" allowfullscreen></iframe>
    </div>
  </div>
</div>

 
<script>
	jQuery(document).ready(function(){
	
	jQuery('#air').validate({
		rules:{
		    Q1A1S1:{
				  required:true,
			  },
			  Q1A1S3:{
				  required:true,
			  },
			  Q1A1S2:{
				  required:true,
			  },
			  Q2A1S1:{
				  required:true,
			  },
			  Q2A1S3:{
				  required:true,
			  },
			  Q2A1S2:{
				  required:true,
			  },
			  Q3A1S1:{
				  required:true,
			  },
			  Q3A1S2:{
				  required:true,
			  },
			  Q3A1S3:{
				  required:true,
			  },
			  Q4A1:{
				  required:true,
			  },
			  Q6A1:{
				  required:true,
			  },
			  Q6A3:{
				  required:true,
			  },
			  Q6A4S1:{
				  required:true,
			  },
			  Q9A1:{
				  required:true,
			  },
			  Q8A1:{
				   required:true,
			  },
			 Q9A2:{
            required:true,
            },
      Q5A1S1:{
          required:true,
          },
      Q5A1S2:{
          required:true,
          },
      Q5A1S3:{
      required:true,
          },
      Q5A1S4:{
      required:true,
          },
      Q5A2S1:{
      required:true,
          },
      Q5A2S2:{
      required:true,
          },
      Q5A2S3:{
      required:true,
          },
      Q5A2S4:{
      required:true,
          },
      Q5A3S1:{
      required:true,
          },
      Q5A3S2:{
      required:true,
          },
      Q5A3S3:{
      required:true,
          },
      Q5A3S4:{
      required:true,
          },
      Q5A4S1:{
      required:true,
          },
      Q5A4S2:{
      required:true,
          },
      Q5A4S3:{
      required:true,
          },
      Q5A4S4:{
      required:true,
          },
      Q5A5S1:{
      required:true,
          },
      Q5A5S2:{
      required:true,
          },
      Q5A5S3:{
      required:true,
          },
      Q5A5S4:{
      required:true,
          },
      Q5A6S1:{
      required:true,
          },
      Q5A6S2:{
      required:true,
          },
      Q5A6S3:{
      required:true,
          },
      Q5A6S4:{
      required:true,
          },
      Q5A7S1:{
      required:true,
          },
      Q5A7S2:{
      required:true,
          },
      Q5A7S3:{
      required:true,
          },
      Q5A7S4:{
      required:true,
          },
      Q5A8S1:{
      required:true,
          },
      Q5A8S2:{
      required:true,
          },
      Q5A8S3:{
      required:true,
          },
      Q5A8S4:{
      required:true,
          },
      Q5A9S1:{
      required:true,
          },
      Q5A9S2:{
      required:true,
          },
      Q5A9S3:{
      required:true,
          },
      Q5A9S4:{
      required:true,
          },
      Q5A10S1:{
      required:true,
          },
      Q5A10S2:{
      required:true,
          },
      Q5A10S3:{
      required:true,
          },
      Q5A10S4:{
      required:true,
          }
		}
       
	});
	});
	
	jQuery('#airnext').click(function(e){
		
		
		$r=jQuery('#air').valid();
		if($r == false)
		{
			   e.preventDefault();
			alert('You will need to enter data in all fields to move forward. Please scroll above to check again.');
			   jQuery('#air').valid();
		}
		
		
	});
	
	</script>
		 
	
	
<script>
	jQuery('#airnext').click(function(e){

	
	if($("input[name='Q6A1']:checked").val()==='3'){
			if($('input[name=Q6A3]:checked').length == 0){
		 
			   alert("3(c)IS CNG AVAILABLE IN YOUR STATE?");
				 
			 }
	}

	if($("input[name='Q6A3']:checked").val()==='Y'){
			 if($('input[name=Q6A4S1]:checked').length == 0){
					 alert("3(c)(a) IS CNG AVAILABLE IN YOUR AREA?");
					
			 }
	}
});
	
	
	
	
	</script>


<script type="text/javascript">
    $('.close').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/klen-TOrXFA");
    });

    $('body').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/klen-TOrXFA");
    });
	
	
	/**This Code Used For Submit Form Through Menu**/
	$('ol li').click(function(){
	  var fd = $('#air').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    /*window.location.href = "<?php echo base_url('general'); ?>";*/
                }
            });
	});
	
	
    $(document).ready(function () {
        $('#btnAirPrevious').on('click', function (data) {
            var fd = $('#air').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('general'); ?>";
                }
            });
        });

        $('#airsave').on('click', function (data) {
            var fd = $('#air').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
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
<script type="text/javascript">
  $('#b6,#c6,#v6,#o6').change(function(){
    var Total_Yes=0;
	var Total_No=0;
    if($('#b6').val()==='Yes'){
	Total_Yes=Total_Yes+1;
	}
	else{
	Total_No=Total_No+1;
	} 
	if($('#c6').val()==='Yes'){
	Total_Yes=Total_Yes+1;
	}
	else{
	Total_No=Total_No+1;
	} 
	if($('#v6').val()==='Yes'){
	Total_Yes=Total_Yes+1;
	}
	else{
	Total_No=Total_No+1;
	}
	if($('#o6').val()==='Yes'){
	Total_Yes=Total_Yes+1;
	}
	else{
	Total_No=Total_No+1;
	}
	$('#t6').val(Total_Yes+"/"+Total_No);
  });
</script>
<script type="text/javascript">
/*This Function Used For Runtime Calculation Below Field*/
/*Percentage of the floor area being ventilated (Y/X x 100)*/
 $(document).ready(function(){
       var x;
       if($("input[name='Q4A1']").val()>10){
        x =10;
       }else{
	x=$("input[name='Q4A1']").val();
	}
	var sumFloorAreaBeingVentilated=0;
	for(i=1; i<=x; ++i){
	  if($("#Q5A"+i+"S4").attr("placeholder")!="undefined"){
	   sumFloorAreaBeingVentilated= parseFloat(sumFloorAreaBeingVentilated) + parseFloat($("#Q5A"+i+"S4").attr("placeholder"));
	  }
	}
	sumFloorAreaBeingVentilated=sumFloorAreaBeingVentilated/x;
	$("#Q5A110S4").val(sumFloorAreaBeingVentilated.toFixed(2));
 });
/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#airnext").click(function(e){
   if($("#Q1A1S1").attr('placeholder')==""  || $("#Q1A1S3").attr('placeholder')==""  || $("#Q1A1S2").attr('placeholder')==""){ 
     if($("#Q1A1S1").val()==""  || $("#Q1A1S3").val()==""  || $("#Q1A1S2").val()==""){ 
      alert("School Must Add Teacher First Name, Last Name & Email ID.");
	  e.preventDefault();
	  if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }   
	}
   }
});
/*Administrative Record Validation*/
/*Administrative staff (maximum of five staff can be part of the team): */
$("#airnext").click(function(e){
   if($("#Q2A1S1").attr('placeholder')==""  || $("#Q2A1S3").attr('placeholder')==""  || $("#Q2A1S2").attr('placeholder')==""){
      if($("#Q2A1S1").val()=="" || $("#Q2A1S3").val()==""  || $("#Q2A1S2").val()==""){  
    alert("School Must Add Administrative Staff  First Name, Last Name & Email ID.");
	e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }      
      }
   }
});
/*Student Record Validation*/
/*Student (maximum of five staff can be part of the team): */
$("#airnext").click(function(e){
   if($("#Q3A1S1").attr('placeholder')==""  || $("#Q3A1S2").attr('placeholder')==""  || $("#Q3A1S3").attr('placeholder')==""){ 
    if($("#Q3A1S1").val()==""  || $("#Q3A1S2").val()==""  || $("#Q3A1S3").val()==""){ 
    alert("School Must Add Students First Name, Last Name & Grade.");
	e.preventDefault();
	 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }    
	}
   }
 /**Q2 To calculate the Window-floor ratio of classrooms in your school, please fill the table below:**/ 
  var numberofloop=$('input[name="Q4A1"]').val()!=""?$('input[name="Q4A1"]').val():$('input[name="Q4A1"]').attr('placeholder');
  if(numberofloop>11){
    for(i=1;i<=10;i++){
	 var firstColumn="Q5A"+i+"S1";
	 var secondColumn="Q5A"+i+"S2";
	 var thirdColumn="Q5A"+i+"S3";
	  if($("input[name='"+firstColumn+"']").val()==""  || $("input[name='"+secondColumn+"']").val()=="" || $("input[name='"+thirdColumn+"']").val()=="" ){
	     alert("Q2:To calculate the Window-floor ratio of classrooms in your school, please fill the table below:");
		 evt.preventDefault();
		
	    }
	}
  }
  else{ 
    for(i=0;i<=numberofloop;i++){
	 var firstColumn="Q5A"+i+"S1";
	 var secondColumn="Q5A"+i+"S2";
	 var thirdColumn="Q5A"+i+"S3";
	  $status=0;
	  if($("input[name='"+firstColumn+"']").val()==""  || $("input[name='"+secondColumn+"']").val()=="" || $("input[name='"+thirdColumn+"']").val()=="" ){
		$status=1;
	  }else{
	    $status=0;
	  }
	}
	if($status==1){
	     alert("Q2:To calculate the Window-floor ratio of classrooms in your school, please fill the table below:");
		 evt.preventDefault();
		 
	}
  }		
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
  $('input[type=number]').on('wheel', function(e){
    return false;
  });	
});	


 
$("#airnext").click(function(e){ 

var Q6A2S1B1 = $('input[name="Q6A2S1B1"]').val();
var Q6A2S1C1 = $('input[name="Q6A2S1C1"]').val();
var Q6A2S1V1 = $('input[name="Q6A2S1V1"]').val();
var Q6A2S1O1 = $('input[name="Q6A2S1O1"]').val();
// buss
var Q6A2S3D1 = $('input[name="Q6A2S3D1"]').val();
var Q6A2S3P1 = $('input[name="Q6A2S3P1"]').val();
var Q6A2S3L1 = $('input[name="Q6A2S3L1"]').val();
var Q6A2S3C1 = $('input[name="Q6A2S3C1"]').val();
var Q6A2S3E1 = $('input[name="Q6A2S3E1"]').val();
var Q6A2S3H1 = $('input[name="Q6A2S3H1"]').val();
var Q6A2S3B1R = $('input[name="Q6A2S3B1R"]').val();

var buss = parseInt(Q6A2S3D1) + parseInt(Q6A2S3P1) + parseInt(Q6A2S3L1) + parseInt(Q6A2S3C1) + parseInt(Q6A2S3E1) + parseInt(Q6A2S3H1) + parseInt(Q6A2S3B1R);

// car
var Q6A2S3B1 = $('input[name="Q6A2S3B1"]').val();
var Q6A2S3D2 = $('input[name="Q6A2S3D2"]').val();
var Q6A2S3P2 = $('input[name="Q6A2S3P2"]').val();
var Q6A2S3L2 = $('input[name="Q6A2S3L2"]').val();
var Q6A2S3C2 = $('input[name="Q6A2S3C2"]').val();
var Q6A2S3E2 = $('input[name="Q6A2S3E2"]').val();
var Q6A2S3H2 = $('input[name="Q6A2S3H2"]').val();

var car = parseInt(Q6A2S3B1) + parseInt(Q6A2S3D2) + parseInt(Q6A2S3P2) + parseInt(Q6A2S3L2) + parseInt(Q6A2S3C2) + parseInt(Q6A2S3E2) + parseInt(Q6A2S3H2);

// Vans
var Q6A2S3D3 = $('input[name="Q6A2S3D3"]').val();
var Q6A2S3P3 = $('input[name="Q6A2S3P3"]').val();
var Q6A2S3L3 = $('input[name="Q6A2S3L3"]').val();
var Q6A2S3C3 = $('input[name="Q6A2S3C3"]').val();
var Q6A2S3E3 = $('input[name="Q6A2S3E3"]').val();
var Q6A2S3H3 = $('input[name="Q6A2S3H3"]').val();
var Q6A2S3B3 = $('input[name="Q6A2S3B3"]').val();

var vans = parseInt(Q6A2S3D3) + parseInt(Q6A2S3P3) + parseInt(Q6A2S3L3) + parseInt(Q6A2S3C3) + parseInt(Q6A2S3E3) + parseInt(Q6A2S3H3) + parseInt(Q6A2S3B3);

// Other vehicles
var Q6A2S3D4 = $('input[name="Q6A2S3D4"]').val();
var Q6A2S3P4 = $('input[name="Q6A2S3P4"]').val();
var Q6A2S3L4 = $('input[name="Q6A2S3L4"]').val();
var Q6A2S3C4 = $('input[name="Q6A2S3C4"]').val();
var Q6A2S3E4 = $('input[name="Q6A2S3E4"]').val();
var Q6A2S3H4 = $('input[name="Q6A2S3H4"]').val();
var Q6A2S3B4 = $('input[name="Q6A2S3B4"]').val();

var other = parseInt(Q6A2S3D4) + parseInt(Q6A2S3P4) + parseInt(Q6A2S3L4) + parseInt(Q6A2S3C4) + parseInt(Q6A2S3E4) + parseInt(Q6A2S3H4) + parseInt(Q6A2S3B4);

if(Q6A2S1B1!=buss){
  alert('You can not enter 0 3(b) question because you have positive value in question 3(a)');
  e.preventDefault();
  return false;
}

if(Q6A2S1C1!=car){
  alert('You can not enter 0 3(b) question because you have positive value in question 3(a)');
  e.preventDefault();
  return false;
}

if(Q6A2S1V1!=vans){
  alert('You can not enter 0 3(b) question because you have positive value in question 3(a)');
  e.preventDefault();
  return false;
}

if(Q6A2S1O1!=other){
  alert('You can not enter 0 3(b) question because you have positive value in question 3(a)');
  e.preventDefault();
  return false;
} 
   
});

</script>
