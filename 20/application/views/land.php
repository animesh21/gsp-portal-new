<?php $this->load->view('header'); ?>
<style type="text/css">

.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q6L1-error
{
   color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 500px;
    text-shadow: 1px 1px 1px #000;
}

#land2019_1-error{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 340px;
    text-shadow: 1px 1px 1px #000;

}

#land2019_2-error{
       
        color: #fb4f2a !important;
        font-size: 18px !important;
        margin-top: -35px !important;
        position: absolute;
        margin-left: 570px;
        text-shadow: 1px 1px 1px #000;

}

    .bold {
        color: #e86549;
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
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li> <a href="<?php echo base_url('logout'); ?>">Logout</a> </li>
<!--         <li>|</li>
        <li><a class="lptext" title="Change Password Form"
                       data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change
          Password</a></li> -->
      </ul>
    </div>
    <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
    </div>
    <div class="intro">
      <h1>LAND <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--       <div class="video"><a class="lptext" href="#" data-toggle="modal"
                                  data-target="#videoModal"><img
                            src="<?php echo base_url(); ?>assets/img/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a> </div> -->
      <p> The GSP audit helps the school community draw up a roadmap for
        sustainable use of its land.<br>
        <b>The unit of measurement to be used in the Land section is
        Square Meter (m<sup>2</sup>).</b></p>
    </div>
    <?php echo form_open('land/set', array('id' => 'land')); ?>
    <div class="form-group">
      <label>
      <h6>Task 1: Choose your Land Audit Team <a class="tt" data-tooltip="The first name of need to have both first and last name. In the rest of the rows, if a team member does not have a last name, then they can press the space bar once and move to the next field."><span class="badge">?</span></a> </h6>
      </label>
      <br>
      Your school gardener is certainly the best person to be a part of
      your audit team. Make sure your
      biology or geography teacher joins your team. Just like all other
      teams, five to 10 of your committed
      and interested schoolmates would make a strong team. Try and involve
      some students of the photography or
      painting clubs of your school. </div>
    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can
      be part of the team):</label>
    </div>
    <div class="form-group-1 row">
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
        <input class="form-control space-textbox" id="Q1L1S1"
                       type="text" name="Q1L1S1"
                       placeholder="<?php if (isset($data['Q1L1S1'])) echo $data['Q1L1S1']; ?>"
                       value="<?php if (isset($data['Q1L1S1'])) echo $data['Q1L1S1']; ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('name'); ?>
        <input class="form-control space-textbox" id="Q1L1S3"
                       type="text" name="Q1L1S3"
                       placeholder="<?php if (isset($data['Q1L1S3'])) echo $data['Q1L1S3']; ?>"
                       value="<?php if (isset($data['Q1L1S3'])) echo $data['Q1L1S3']; ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('email'); ?>
        <input class="form-control space-textbox" id="Q1L1S2"
                       type="email" name="Q1L1S2"
                       placeholder="<?php if (isset($data['Q1L1S2'])) echo $data['Q1L1S2']; ?>"
                       value="<?php if (isset($data['Q1L1S2'])) echo $data['Q1L1S2']; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 2</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q1L2S1"
                       type="text" name="Q1L2S1"
                       placeholder="<?php if (isset($data['Q1L2S1'])) echo $data['Q1L2S1'] ?>"
                       value="<?php if (isset($data['Q1L2S1'])) echo $data['Q1L2S1'] ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('name'); ?>
        <input class="form-control space-textbox" id="Q1L2S3"
                       type="text" name="Q1L2S3"
                       placeholder="<?php if (isset($data['Q1L2S3'])) echo $data['Q1L2S3']; ?>"
                       value="<?php if (isset($data['Q1L2S3'])) echo $data['Q1L2S3']; ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q1L2S2"
                       type="email" name="Q1L2S2"
                       placeholder="<?php if (isset($data['Q1L2S2'])) echo $data['Q1L2S2'] ?>"
                       value="<?php if (isset($data['Q1L2S2'])) echo $data['Q1L2S2'] ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 3</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q1L3S1"
                       type="text" name="Q1L3S1"
                       placeholder="<?php if (isset($data['Q1L3S1'])) echo $data['Q1L3S1'] ?>"
                       value="<?php echo set_value('Q1L3S1'); ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('name'); ?>
        <input class="form-control space-textbox" id="Q1L3S3"
                       type="text" name="Q1L3S3"
                       placeholder="<?php if (isset($data['Q1L3S3'])) echo $data['Q1L3S3']; ?>"
                       value="<?php echo set_value('Q1L3S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q1L3S2"
                       type="email" name="Q1L3S2"
                       placeholder="<?php if (isset($data['Q1L3S2'])) echo $data['Q1L3S2'] ?>"
                       value="<?php echo set_value('Q1L3S2'); ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label">Administrative staff (maximum of five
      staff can be part of the
      team):</label>
    </div>
    <div class="form-group-1 row">
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
        <input class="form-control space-textbox" id="Q2L1S1"
                       type="text" name="Q2L1S1"
                       placeholder="<?php if (isset($data['Q2L1S1'])) echo $data['Q2L1S1'] ?>"
                       value="<?php if (isset($data['Q2L1S1'])) echo $data['Q2L1S1'] ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L1S3"
                       type="text" name="Q2L1S3"
                       placeholder="<?php if (isset($data['Q2L1S3'])) echo $data['Q2L1S3'] ?>"
                       value="<?php if (isset($data['Q2L1S3'])) echo $data['Q2L1S3'] ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('email1'); ?>
        <input class="form-control space-textbox" id="Q2L1S2"
                       type="email" name="Q2L1S2"
                       placeholder="<?php if (isset($data['Q2L1S2'])) echo $data['Q2L1S2'] ?>"
                       value="<?php if (isset($data['Q2L1S2'])) echo $data['Q2L1S2'] ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 2</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L2S1"
                       type="text" name="Q2L2S1"
                       placeholder="<?php if (isset($data['Q2L2S1'])) echo $data['Q2L2S1'] ?>"
                       value="<?php echo set_value('Q2L2S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L2S3"
                       type="text" name="Q2L2S3"
                       placeholder="<?php if (isset($data['Q2L2S3'])) echo $data['Q2L2S3'] ?>"
                       value="<?php echo set_value('Q2L2S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L2S2"
                       type="email" name="Q2L2S2"
                       placeholder="<?php if (isset($data['Q2L2S2'])) echo $data['Q2L2S2'] ?>"
                       value="<?php echo set_value('Q2L2S2'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 3</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L3S1"
                       type="text" name="Q2L3S1"
                       placeholder="<?php if (isset($data['Q2L3S1'])) echo $data['Q2L3S1'] ?>"
                       value="<?php echo set_value('Q2L3S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L3S3"
                       type="text" name="Q2L3S3"
                       placeholder="<?php if (isset($data['Q2L3S3'])) echo $data['Q2L3S3'] ?>"
                       value="<?php echo set_value('Q2L3S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L3S2"
                       type="email" name="Q2L3S2"
                       placeholder="<?php if (isset($data['Q2L3S2'])) echo $data['Q2L3S2'] ?>"
                       value="<?php echo set_value('Q2L3S2'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 4</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L4S1"
                       type="text" name="Q2L4S1"
                       placeholder="<?php if (isset($data['Q2L4S1'])) echo $data['Q2L4S1']; ?>"
                       value="<?php echo set_value('Q2L4S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L4S3"
                       type="text" name="Q2L4S3"
                       placeholder="<?php if (isset($data['Q2L4S3'])) echo $data['Q2L4S3'] ?>"
                       value="<?php echo set_value('Q2L4S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L4S2"
                       type="email" name="Q2L4S2"
                       placeholder="<?php if (isset($data['Q2L4S2'])) echo $data['Q2L4S2']; ?>"
                       value="<?php echo set_value('Q2L4S2'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 5</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L5S1"
                       type="text" name="Q2L5S1"
                       placeholder="<?php if (isset($data['Q2L5S1'])) echo $data['Q2L5S1'] ?>"
                       value="<?php echo set_value('Q2L5S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L5S3"
                       type="text" name="Q2L5S3"
                       placeholder="<?php if (isset($data['Q2L5S3'])) echo $data['Q2L5S3'] ?>"
                       value="<?php echo set_value('Q2L5S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L5S2"
                       type="email" name="Q2L5S2"
                       placeholder="<?php if (isset($data['Q2L5S2'])) echo $data['Q2L5S2'] ?>"
                       value="<?php echo set_value('Q2L5S2'); ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label">Students (maximum of ten students can
      be part of the team):</label>
    </div>
    <div class="form-group-1 row">
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
        <input class="form-control space-textbox" id="Q3L1S1"
                       type="text" name="Q3L1S1"
                       placeholder="<?php if (isset($data['Q3L1S1'])) echo $data['Q3L1S1'] ?>"
                       value="<?php if (isset($data['Q3L1S1'])) echo $data['Q3L1S1'] ?>"/>
      </div>
      <div class="col-xs-3"> <?php echo form_error('email2'); ?>
        <input class="form-control space-textbox" id="Q3L1S2"
                       type="text" name="Q3L1S2"
                       placeholder="<?php if (isset($data['Q3L1S2'])) echo $data['Q3L1S2'] ?>"
                       value="<?php if (isset($data['Q3L1S2'])) echo $data['Q3L1S2'] ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L1S3"
                       type="number" name="Q3L1S3"
                       placeholder="<?php if (isset($data['Q3L1S3'])) echo $data['Q3L1S3'] ?>"
                       value="<?php if (isset($data['Q3L1S3'])) echo $data['Q3L1S3'] ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 2</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L2S1"
                       type="text" name="Q3L2S1"
                       placeholder="<?php if (isset($data['Q3L2S1'])) echo $data['Q3L2S1'] ?>"
                       value="<?php echo set_value('Q3L2S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L2S2"
                       type="text" name="Q3L2S2"
                       placeholder="<?php if (isset($data['Q3L2S2'])) echo $data['Q3L2S2'] ?>"
                       value="<?php echo set_value('Q3L2S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L2S3"
                       type="number" name="Q3L2S3"
                       placeholder="<?php if (isset($data['Q3L2S3'])) echo $data['Q3L2S3'] ?>"
                       value="<?php echo set_value('Q3L2S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 3</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L3S1"
                       type="text" name="Q3L3S1"
                       placeholder="<?php if (isset($data['Q3L3S1'])) echo $data['Q3L3S1'] ?>"
                       value="<?php echo set_value('Q3L3S3'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L3S2"
                       type="text" name="Q3L3S2"
                       placeholder="<?php if (isset($data['Q3L3S2'])) echo $data['Q3L3S2'] ?>"
                       value="<?php echo set_value('Q3L3S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L3S3"
                       type="number" name="Q3L3S3"
                       placeholder="<?php if (isset($data['Q3L3S3'])) echo $data['Q3L3S3'] ?>"
                       value="<?php echo set_value('Q3L3S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 4</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L4S1"
                       type="text" name="Q3L4S1"
                       placeholder="<?php if (isset($data['Q3L4S1'])) echo $data['Q3L4S1'] ?>"
                       value="<?php echo set_value('Q3L4S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L4S2"
                       type="text" name="Q3L4S2"
                       placeholder="<?php if (isset($data['Q3L4S2'])) echo $data['Q3L4S2'] ?>"
                       value="<?php echo set_value('Q3L4S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L4S3"
                       type="number" name="Q3L4S3"
                       placeholder="<?php if (isset($data['Q3L4S3'])) echo $data['Q3L4S3'] ?>"
                       value="<?php echo set_value('Q3L4S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 5</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L5S1"
                       type="text" name="Q3L5S1"
                       placeholder="<?php if (isset($data['Q3L5S1'])) echo $data['Q3L5S1'] ?>"
                       value="<?php echo set_value('Q3L5S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L5S2"
                       type="text" name="Q3L5S2"
                       placeholder="<?php if (isset($data['Q3L5S2'])) echo $data['Q3L5S2'] ?>"
                       value="<?php echo set_value('Q3L5S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L5S3"
                       type="number" name="Q3L5S3"
                       placeholder="<?php if (isset($data['Q3L5S3'])) echo $data['Q3L5S3'] ?>"
                       value="<?php echo set_value('Q3L5S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 6</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L6S1"
                       type="text" name="Q3L6S1"
                       placeholder="<?php if (isset($data['Q3L6S1'])) echo $data['Q3L6S1'] ?>"
                       value="<?php echo set_value('Q3L6S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L6S2"
                       type="text" name="Q3L6S2"
                       placeholder="<?php if (isset($data['Q3L6S2'])) echo $data['Q3L6S2'] ?>"
                       value="<?php echo set_value('Q3L6S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L6S3"
                       type="number" name="Q3L6S3"
                       placeholder="<?php if (isset($data['Q3L6S3'])) echo $data['Q3L6S3'] ?>"
                       value="<?php echo set_value('Q3L6S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 7</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L7S1"
                       type="text" name="Q3L7S1"
                       placeholder="<?php if (isset($data['Q3L7S1'])) echo $data['Q3L7S1'] ?>"
                       value="<?php echo set_value('Q3L7S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L7S2"
                       type="text" name="Q3L7S2"
                       placeholder="<?php if (isset($data['Q3L7S2'])) echo $data['Q3L7S2'] ?>"
                       value="<?php echo set_value('Q3L7S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L7S3"
                       type="number" name="Q3L7S3"
                       placeholder="<?php if (isset($data['Q3L7S3'])) echo $data['Q3L7S3'] ?>"
                       value="<?php echo set_value('Q3L7S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 8</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L8S1"
                       type="text" name="Q3L8S1"
                       placeholder="<?php if (isset($data['Q3L8S1'])) echo $data['Q3L8S1'] ?>"
                       value="<?php echo set_value('Q3L8S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L8S2"
                       type="text" name="Q3L8S2"
                       placeholder="<?php if (isset($data['Q3L8S2'])) echo $data['Q3L8S2'] ?>"
                       value="<?php echo set_value('Q3L8S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L8S3"
                       type="number" name="Q3L8S3"
                       placeholder="<?php if (isset($data['Q3L8S3'])) echo $data['Q3L8S3'] ?>"
                       value="<?php echo set_value('Q3L8S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 9</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L9S1"
                       type="text" name="Q3L9S1"
                       placeholder="<?php if (isset($data['Q3L9S1'])) echo $data['Q3L9S1'] ?>"
                       value="<?php echo set_value('Q3L9S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L9S2"
                       type="text" name="Q3L9S2"
                       placeholder="<?php if (isset($data['Q3L9S2'])) echo $data['Q3L9S2'] ?>"
                       value="<?php echo set_value('Q3L9S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L9S3"
                       type="number" name="Q3L9S3"
                       placeholder="<?php if (isset($data['Q3L9S3'])) echo $data['Q3L9S3'] ?>"
                       value="<?php echo set_value('Q3L9S3'); ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-1"> 10</div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L10S1"
                       type="text" name="Q3L10S1"
                       placeholder="<?php if (isset($data['Q3L10S1'])) echo $data['Q3L10S1'] ?>"
                       value="<?php echo set_value('Q3L10S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L10S2"
                       type="text" name="Q3L10S2"
                       placeholder="<?php if (isset($data['Q3L10S2'])) echo $data['Q3L10S2'] ?>"
                       value="<?php echo set_value('Q3L10S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q3L10S3"
                       type="number" name="Q3L10S3"
                       placeholder="<?php if (isset($data['Q3L10S3'])) echo $data['Q3L10S3'] ?>"
                       value="<?php echo set_value('Q3L10S3'); ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label>
      <div class="question-text">
        <h6> Task 2: Measure the critical areas of your school
          campus</h6>
        <strong>To find out the land/ site area of your school, you
        need to measure:</strong>
        <p> 1. Ground coverage area includes all permanent structure
          buildings, such as
          administration block, auditorium, school building, etc.
          It does not include floors.</p>
        <p> 2. Green cover or green, landscaped area on ground
          includes areas covered by grass,
          trees, lawn or horticulture, flower beds, shrubs, etc.
          excluding play area covered by the grass on ground. </p>
        <p> 3. Surface parking area refers to any parking lots
          directly on land.</p>
        <p> 4. Play areas that are paved / concrete include outdoor
          playfields, such as basketball
          courts, skating rinks, assembly grounds and swimming
          pools. </p>
        <p> 5. Play area covered by grass on ground include grass
          tennis-courts and circket or
          football grounds. </p>
        <p> 6. Service area on ground is any area on ground that is
          not a permanent structure but is
          dedicated to service, such as cooling towers for air
          conditioning, generators and
          portable cabin for security guards, etc. </p>
        <p> 7. Roof and terrace area: A roof is the covering on the
          uppermost part of a building. A
          terrace is an outdoor, occupiable extension of a
          building above ground level.</p>
        <p> 8. Green cover on terraces/ balconies includes terrace
          gardens but not potted
          plants.</p>
        <p> 9. Total built-up/constructed area refers to the total
          area of all floors of the
          building, including ground floors of built-up spaces,
          which include classrooms, labs,
          staff rooms, office area, auditoriums, corridors, and
          balconies and terraces, multiplied
          by the number of floors.</p>
        <!--<p> 10. Other will include paved paths and other open area
                        that your school has but is not
                        covered in the list above.</p>-->
      </div>
      </label>
      <div class="answer clearfix"></div>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">1</span> What is the
      total site/plot area of your school? <a class="kplink"
                                                        href="http://www.greenschoolsprogramme.org/knowledge-bank/land/"
                                                        target="_blank"> </a></label>
    </div>
    <div class="form-group-1 row">
      <div class="col-xs-5">
        <label>Description</label>
      </div>
      <div class="col-xs-5">
        <label> Your school's area
        (<strong>m<sup>2</sup></strong>)</label>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label>Site area in square meter (<strong>m<sup>2</sup></strong>)</label>
      </div>
      <div class="col-xs-5">
        <?php $placeholder_Default = "m²";
                // echo $placeholder_Default;

                ?>
        <input class="form-control space-textbox" id="Q4L123"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="1"
                       name="Q4L1"
                       value="<?php if (isset($data['Q4L1'])) echo $data['Q4L1']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L1'])) echo $data['Q4L1']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label><span class="cube">1A</span>Total green cover <a class="tt" data-tooltip="Ideally, total green landscaped area on-ground available in school should be 35 per cent of total site area (in square meters), out of which 15 per cent should be from green landscaped area on ground."><span
                            class="badge">?</span></a> </label>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(a)</strong> Ground coverage
        area</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L2"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="1"
                       name="Q4L2"
                       value="<?php if (isset($data['Q4L2'])) echo $data['Q4L2']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L2'])) echo $data['Q4L2']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(b1)</strong> Green Landscaped area
        on ground</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L3"
                       onkeyup="GreenArea()"
                       onchange="GreenArea()" type="number" min="0" name="Q4L3"
                       value="<?php if (isset($data['Q4L3'])) echo $data['Q4L3']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L3'])) echo $data['Q4L3']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(b2)</strong> Play area that has
        grass on ground</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L4"
                       onkeyup="GreenArea()"
                       onchange="GreenArea()" type="number" min="0" name="Q4L4"
                       value="<?php if (isset($data['Q4L4'])) echo $data['Q4L4']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L4'])) echo $data['Q4L4']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(b3)</strong> Green area on
        ground</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L5"
                       onchange="BuildUpArea()" type="number" min="0"
                       name="Q4L5"
                       value="<?php if (isset($data['Q4L5'])) echo $data['Q4L5']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L5'])) echo $data['Q4L5']; else echo $placeholder_Default; ?>" readonly/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(c)</strong> Play area that is
        paved/concrete on ground</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L6"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="0"
                       name="Q4L6"
                       value="<?php if (isset($data['Q4L6'])) echo $data['Q4L6']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L6'])) echo $data['Q4L6']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(d)</strong> Surface parking
        area</label>
      </div>
      <div class="col-xs-5">
        <input type="hidden" id="Q6A2S1T5"
                       value="<?php if (isset($other['Q6A2S1T5'])) echo $other['Q6A2S1T5']; ?>">
        <input class="form-control space-textbox" id="Q4L7"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" name="Q4L7"
                       value="<?php if (isset($data['Q4L7'])) echo $data['Q4L7']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L7'])) echo $data['Q4L7']; else echo $placeholder_Default; ?>"
                       min="0"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(e)</strong> Service area on ground</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L8"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="0"
                       name="Q4L8"
                       value="<?php if (isset($data['Q4L8'])) echo $data['Q4L8']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L8'])) echo $data['Q4L8']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label><span class="cube">1B</span>Other General Area in Campus</label>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(i)</strong> Roof and terrace area </label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L9"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="0"
                       name="Q4L9"
                       value="<?php if (isset($data['Q4L9'])) echo $data['Q4L9']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L9'])) echo $data['Q4L9']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(ii)</strong> Green cover on exposed
        roof and terrace</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L10"
                       onkeyup="BuildUpArea()"
                       onchange="BuildUpArea()" type="number" min="0"
                       name="Q4L10"
                       value="<?php if (isset($data['Q4L10'])) echo $data['Q4L10']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L10'])) echo $data['Q4L10']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(iii)</strong> Total
        built-up/constructed area</label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L11"
                       type="number" min="0" name="Q4L11"
                       value="<?php if (isset($data['Q4L11'])) echo $data['Q4L11']; else echo $placeholder_Default; ?>"
                       placeholder="<?php if (isset($data['Q4L11'])) echo $data['Q4L11']; else echo $placeholder_Default; ?>"/>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-5">
        <label><strong class="bold">(iv)</strong> Total number of floors
        (excluding ground floor) <a class="tt"
                                                data-tooltip="Please give number of floors only"
                                                style="position:relative; top:-5px;"><span
                                class="badge">?</span></a></label>
      </div>
      <div class="col-xs-5">
        <input class="form-control space-textbox" id="Q4L12"
                       type="number" min="0" name="Q4L12"
                       value="<?php if (isset($data['Q4L12'])) echo $data['Q4L12']; ?>"
                       placeholder="<?php if (isset($data['Q4L12'])) echo $data['Q4L12']; ?>"/>
      </div>
    </div>



     <div class="form-group">
      <label class="control-label"><span class="cube">2</span>Do you have vertical gardens in your school? <a class="tt" data-tooltip="The interior or exterior walls covered with the various plant species in two different ways; prefabricated modular panel or in-situ applied panels, i.e. the plants need to be rooted on a structure on the wall or any vertical support structure."><span
                            class="badge">?</span></a></label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q2V1" value="<?php echo set_value('Q2V1', 'Y') ?>" <?php if (isset($data['Q2V1'])) echo $data['Q2V1'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q2V1" value="<?php echo set_value('Q2V1', 'N') ?>" <?php if (isset($data['Q2V1'])) echo $data['Q2V1'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div> 


            <div class="form-group" id="land2019_1_sec1"
<?php
if (isset($data['Q2V1'])) {
if ($data['Q2V1'] == 'N') {
echo 'style="display:none;"';
} else {
echo 'style="display:block;"';
}
} else {
echo 'style="display:none;"';
}
?> >

<br>
                <button class="btn uploadbtn upload" data-id="Vertical Gardens"
                data-toggle="modal" data-target="#airModal" type="button">UPLOAD
    FILES </button>
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
        <?php //echo '<pre>'; print_r($greenCover);  ?>
        <?php foreach ($Vertical_Gardens as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php 
           // $array = explode('.',$f->file_name); 
       // $count = count($array);
      // $extension = $array[$count-1];
                ?>
          <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
          <!--<td> <img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
          file_name ?>" class="img-responsive" />
          </td>
          -->
          <?php //}else{ ?>
          <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
          <?php //}?>
          <?php $name = str_replace(" ", "_", $f->name . "_Green_Cover_"); //echo $name; ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files"
                           data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png"
                                    style="position:relative; top:5px"/></a></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
              </div>


    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 3: Explore the number of species of plants and
          animals in your school</h6>
        <p> This task will help you to understand the number and
          variety of plants and animals that
          your school campus supports. Identify and count the
          various species of plants and
          animals in your school.</p>
        <p><strong>To collect data:</strong></p>
        <p> Make two teams of students. One for plant species and
          the other for animal species. Get
          the school gardener and the biology teacher to accompany
          them. Count plant species and
          animal species that are visible to the naked eye.</p>
        <p> Native (definition): a species that occurs naturally
          within a region, either evolving
          there or arriving and becoming established without human
          assistance</p>
        <p> Exotic (definition): An exotic plant or animal, which is
          invasive, is a species that
          meets the following conditions:</p>
        <ol>
          <li> Originate outside the local area.</li>
          <li> Have the potential to spread long distances on its
            own. </li>
          <li> Once established, have the potential to out-compete
            native species in the wild. </li>
        </ol>
      </div>
      </label>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">3</span>How many
      species of plants and animals exist
      in your school?</label>
      <table class="table" style="width:700px;">
        <tr>
          <th><label></label>
          </th>
          <th><label>Native</label>
          </th>
          <th><label>Exotic</label>
          </th>
          <th><label>Total</label>
          </th>
        </tr>
        <tr>
          <td><label> Plants</label>
          </td>
          <td><input class="form-control" onKeyUp="computeAnimal()"
                               id="Q5L1S1"
                               type="number" min="0" name="Q5L1S1"
                               placeholder="<?php if (isset($data['Q5L1S1'])) echo $data['Q5L1S1'] ?>"
                               value="<?php if (isset($data['Q5L1S1'])) echo $data['Q5L1S1'] ?>"/>
          </td>
          <td><input class="form-control" onKeyUp="computeAnimal()"
                               id="Q5L1S2"
                               type="number" min="0" name="Q5L1S2"
                               placeholder="<?php if (isset($data['Q5L1S2'])) echo $data['Q5L1S2'] ?>"
                               value="<?php if (isset($data['Q5L1S2'])) echo $data['Q5L1S2'] ?>"/>
          </td>
          <td><input class="form-control" id="Q5L1S3" type="number"
                               min="0"
                               name="Q5L1S3"
                               placeholder="<?php if (isset($data['Q5L1S3'])) echo $data['Q5L1S3'] ?>"
                               value="<?php if (isset($data['Q5L1S3'])) echo $data['Q5L1S3'] ?>"
                               readonly/>
          </td>
        </tr>
        <tr>
          <td><label>Animals</label>
          </td>
          <td><input class="form-control" onKeyUp="computeAnimal()"
                               id="Q5L2S1"
                               type="number" min="0" name="Q5L2S1"
                               placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>"
                               value="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>"/>
          </td>
          <td><input class="form-control" onKeyUp="computeAnimal()"
                               id="Q5L2S2"
                               type="number" min="0" name="Q5L2S2"
                               placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>"
                               value="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>"/>
          </td>
          <td><input class="form-control" id="Q5L2S3" type="number"
                               min="0"
                               name="Q5L2S3"
                               placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>"
                               value="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>"
                               readonly/>
          </td>
        </tr>
      </table>
    </div>
    <div class="form-group">
      <label>
<h6> Task 4: Find out if your school uses pesticides </h6>
      </label>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">4</span>Do you use chemical-based pesticides in your school green cover?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'Y') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'N') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label>
      <h6>Upload supporting documents</h6>
      </label>
      <br/>
      Please upload the following supporting documents:<br>
      &bull; Pictures of green cover<br>
      &bull; Pictures of landscaped area<br>
      &bull; Building construction plan<br>
      Uploaded files must be in one of the following formats: PDF Document
      (.pdf), Word Document
      (.doc, .docx), Image File (.jpg, .jpeg). File size per document
      should not exceed <strong>100 KB.</strong> </div>
    <button class="btn uploadbtn upload" data-id="Green Cover"
                data-toggle="modal" data-target="#airModal" type="button">UPLOAD
    FILES </button>
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
        <?php //echo '<pre>'; print_r($greenCover);  ?>
        <?php foreach ($greenCover as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php 
           // $array = explode('.',$f->file_name); 
       // $count = count($array);
      // $extension = $array[$count-1];
                ?>
          <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
          <!--<td> <img style="width:62px; height:46px;" ;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
          file_name ?>" class="img-responsive" />
          </td>
          -->
          <?php //}else{ ?>
          <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
          <?php //}?>
          <?php $name = str_replace(" ", "_", $f->name . "_Green_Cover_"); //echo $name; ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files"
                           data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png"
                                    style="position:relative; top:5px"/></a></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="text-center">
      <button type="button" class="org-btn" id="btnlandPrevious"> Previous </button>
      <button type="submit" id="movenextbtn" value="movenext"
                    name="movenext" accesskey="n"
                    class="submit button">Next </button>
      <button type="button" class="org-btn" id="landsave">Save and Resume
      Later </button>
    </div>
  </div>
  <?php echo form_close(); ?> </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<style type="text/css">
    .text-gray {
        color: #666666 !important;
    }
</style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content"
             style="background:transparent; border-radius:0px;">
      <div class="modal-header"
                 style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal"> &times; </button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px" id="video"
                    src="https://www.youtube.com/embed/todM6wToHHQ"
                    frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>



<script>
  jQuery(document).ready(function(){
  
  jQuery('#land').validate({
    rules:{
          Q1L1S1:{
          required:true,
        },
               Q1L1S3:{
          required:true,
        },
          Q1L1S2:{
                 required:true,
              },
          Q2L1S1:{
                    required:true,
               },
          Q2L1S3:{
                    required:true,
               },
          Q2L1S2:{
                    required:true,
              },
          Q3L1S1:{
                    required:true,
              },
          Q3L1S2:{
                    required:true,
            },
          Q3L1S3:{
                    required:true,
            },
          Q4L1:{
                    required:true,
              },
          Q4L2:{
                    required:true,
            },
          Q4L3:{
                    required:true,
            },
          Q4L4:{
                    required:true,
            },
          Q4L6:{
                    required:true,
              },
          Q4L7:{
                    required:true,
            },
          Q4L8:{
                    required:true,
             },
          Q4L9:{
                    required:true,
              },
          Q4L10:{
                    required:true,
              },
          Q4L12:{
                    required:true,
              },
          Q5L1S1:{
                    required:true,
             },
              Q5L1S2:{
                                  required:true,
                           },
              Q5L2S1:{
                                  required:true,
                           },
              Q5L2S2:{
                                  required:true,
                           },
              Q6L1:{
                                  required:true,
                           },
                       Q4L11:{
                                  required:true,
                            },
                            land2019_1:{

                              required:true,
                            },
                            land2019_2:{

                              required:true,
                            }
        
    }
       
  });
  });
  
  jQuery('#movenextbtn').click(function(e){
    
    
    $r=jQuery('#land').valid();
    if($r == false)
    {
         e.preventDefault();
			alert('You will need to enter data in all fields to move forward. Please scroll above to check again.');
         jQuery('#land').valid();
    }
    
    
  });
  
  </script>


<script type="text/javascript">
    $('.close').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/9r3Lwrd9BUs");
    });
    $('body').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/9r3Lwrd9BUs");
    });

    $(document).ready(function () {
        $('#btnlandPrevious').on('click', function (data) {
            var fd = $('#land').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/landajax') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('food'); ?>";
                }
            });
        });
        $('#landsave').on('click', function (data) {
            var fd = $('#land').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/landajax') ?>',
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
/*Validation For This Question*/
/*Site/ Plot area in square meter (m2): Backend: A+B3+C+D+E = 1A*/
$("input[name='Q4L8']").change(function(){
  var Site_Plot_area_in_square_meter;
  var Total_green_cover;
  var Ground_coverage_area;
  var Green_area_on_ground;
  var Play_area_that_is_paved_concrete_on_ground;
  var Surface_parking_area;
  var Service_area_on_ground;
  /**/
  Ground_coverage_area=$("input[name='Q4L2']").val();
  /**/
  Green_area_on_ground=$("input[name='Q4L5']").val();
   /**/
  Play_area_that_is_paved_concrete_on_ground=$("input[name='Q4L6']").val();
   /**/
  Surface_parking_area=$("input[name='Q4L7']").val();
     /**/
  Service_area_on_ground=$("input[name='Q4L8']").val();
  /**/
  Site_Plot_area_in_square_meter=$("input[name='Q4L1']").val();
  /**/
  Total_green_cover=parseInt(Ground_coverage_area)+parseInt(Green_area_on_ground)+parseInt(Play_area_that_is_paved_concrete_on_ground)+parseInt(Surface_parking_area)+parseInt(Service_area_on_ground);
  if(Site_Plot_area_in_square_meter<Total_green_cover){
   alert("The total of 1A cannot exceed the total site area");
   /*Placeholder Value*/
   $("input[name='Q4L2']").attr('placeholder','Please enter correct data');
   $("input[name='Q4L6']").attr('placeholder','Please enter correct data');
   $("input[name='Q4L7']").attr('placeholder','Please enter correct data');
   $("input[name='Q4L8']").attr('placeholder','Please enter correct data'); 
   /*Real Value*/
   $("input[name='Q4L2']").val(' ');
   $("input[name='Q4L6']").val(' ');
   $("input[name='Q4L7']").val(' ');
   $("input[name='Q4L8']").val(' ');
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
/*Validation For Ground Coverage Area*/
$("input[name='Q4L2']").change(function(){
  if($(this).val()==0){
    alert("Zero as an entry should not be allowed.");
  $("input[name='Q4L2']").attr('placeholder','Please enter correct data');
  $("input[name='Q4L2']").val(' ');
  }
});
/*Validation For Total built-up/constructed area*/
$("input[name='Q4L11']").change(function(){
  if($(this).val()==0){
    alert("Zero as an entry should not be allowed.");
  $("input[name='Q4L11']").attr('placeholder','Please enter correct data');
  $("input[name='Q4L11']").val(' ');
  }
});   
</script>
<script>
/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#movenextbtn").click(function(e){
if($("#Q1L1S1").attr('placeholder')==""  || $("#Q1L1S3").attr('placeholder')==""  || $("#Q1L1S2").attr('placeholder')==""){ 
if($("#Q1L1S1").val()==""  || $("#Q1L1S3").val()==""  || $("#Q1L1S2").val()==""){ 
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
$("#movenextbtn").click(function(e){
if($("#Q2L1S1").attr('placeholder')==""  || $("#Q2L1S3").attr('placeholder')==""  || $("#Q2L1S2").attr('placeholder')==""){
if($("#Q2L1S1").val()=="" || $("#Q2L1S3").val()==""  || $("#Q2L1S2").val()==""){  
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
$("#movenextbtn").click(function(e){
if($("#Q3L1S1").attr('placeholder')==""  || $("#Q3L1S2").attr('placeholder')==""  || $("#Q3L1S3").attr('placeholder')==""){ 
if($("#Q3L1S1").val()==""  || $("#Q3L1S2").val()==""  || $("#Q3L1S3").val()==""){ 
alert("School Must Add Student  First Name, Last Name & Grade.");
e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}
});
/*Validation Code Used For Q1*/
/*What is the total site/plot area of your school?  */
$("#movenextbtn").click(function(e){ 
  if($("input[name='Q4L1']").val()==""){
    alert("Site area in square meter (m2)");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L2']").val()==""){
    alert("Ground coverage area");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L3']").val()==""){
    alert("Green Landscaped area on ground");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L4']").val()==""){
    alert("Play area that has grass on ground");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L6']").val()==""){
    alert("Play area that is paved/concrete on ground");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L7']").val()==""){
    alert("Surface parking area");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L8']").val()==""){
    alert("Surface parking area");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L9']").val()=="" || $("input[name='Q4L9']").val()==='m²'){
    alert("Roof and terrace area");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L10']").val()=="" || $("input[name='Q4L9']").val()==='m²'){
    alert("Green cover on exposed roof and terrace");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L11']").val()=="" || $("input[name='Q4L9']").val()==='m²'){
    alert("Total built-up/constructed area");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($("input[name='Q4L12']").val()=="" || $("input[name='Q4L9']").val()==='m²'){
    alert("Total number of floors (excluding ground floor)");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  } 
});
/*Validation Code Used For Q2*/
/*How many species of plants and animals exist in your school? */
$("#movenextbtn").click(function(e){ 
  if($("input[name='Q5L1S1']").val()=="" || $("input[name='Q5L1S2']").val()=="" || $("input[name='Q5L2S1']").val()=="" || $("input[name='Q5L2S2']").val()==""){
    alert("Q2: How many species of plants and animals exist in your school?");
     e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
    /**Q3 Do you use chemical-based pesticides in your school green cover?**/
  if($("input[name='Q6L1']:checked").length==0){
    alert("Q3: Do you use chemical-based pesticides in your school green cover?");
  e.preventDefault();
  }   
  } 
}); 
</script>

<script type="text/javascript">
  
 $("input[name='land2019_1']").click(function(){

    var t = $(this).val();
    if(t == 'Y')
    {
          $('#land2019_1_sec1').show();

    }else{

      $('#land2019_1_sec1').hide();
    }


 });


</script>
