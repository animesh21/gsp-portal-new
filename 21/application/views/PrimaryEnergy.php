<?php $this->load->view('header'); ?>
<style type="text/css">
    .form-group{
        margin-bottom:20px;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{      border-top:none;
    }
    .list-inline li{
        width:229px;
    }
    .form-group-1{
        margin-bottom:20px;
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
    <!-- <li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
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
  <h1>ENERGY <span style="text-transform:capitalize">(Primary)</span> <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--   <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
                            src="<?php echo base_url(); ?>assets/img/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
<!--  <p> Prior to answering these questions, please consider using a meter to measure the monthly average amount
    of energy used from the respective energy sources.</p>-->
  <p class="unit"><strong>The unit of measurement to be used in the Energy section is megajoule (mj).</strong> </p>
</div>
</div>
<?php echo form_open('energy/set', array('id' => "PrimaryEnergy")); ?>
<div class="form-group">
  <label>
  <h6>Task 1: Choose your Energy Audit Team <a class="tt" data-tooltip="The first row should have both first name and last name. In the rest of the rows, if a team member does not have a last name, then they can press the spacebar once and move to the next field."><span class="badge">?</span></a> </h6>
  </label>
  <p>The school administrative staff must be members of your team as you would require electricity bills, fuel
    consumption bills, etc. Other support staff such as generator attendants and electricians are also
    important contacts. It would be a good idea to rope in a Physics or Science teacher as well and, most
    importantly, a team of five to 10 of your schoolmates.</p>
</div>
<div class="form-group">
<label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
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
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E1S1" type="text" name="Q1E1S1"
                           placeholder="<?php if (isset($data['Q1E1S1'])) echo $data['Q1E1S1']; ?>"
                           value="<?php echo set_value('Q1E1S1'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E1S3" type="text" name="Q1E1S3"
                           placeholder="<?php if (isset($data['Q1E1S3'])) echo $data['Q1E1S3']; ?>"
                           value="<?php echo set_value('Q1E1S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E1S2" type="email" name="Q1E1S2"
                           placeholder="<?php if (isset($data['Q1E1S2'])) echo $data['Q1E1S2']; ?>"
                           value="<?php echo set_value('Q1E1S2'); ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 2</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E2S1" type="text" name="Q1E2S1"
                           placeholder="<?php if (isset($data['Q1E2S1'])) echo $data['Q1E2S1'] ?>"
                           value="<?php echo set_value('Q1E2S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1E2S3" type="text" name="Q1E2S3"
                           placeholder="<?php if (isset($data['Q1E2S3'])) echo $data['Q1E2S3']; ?>"
                           value="<?php echo set_value('Q1E2S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E2S2" type="email" name="Q1E2S2"
                           placeholder="<?php if (isset($data['Q1E2S2'])) echo $data['Q1E2S2'] ?>"
                           value="<?php echo set_value('Q1E2S2'); ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 3</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E3S1" type="text" name="Q1E3S1"
                           placeholder="<?php if (isset($data['Q1E3S1'])) echo $data['Q1E3S1'] ?>"
                           value="<?php echo set_value('Q1E3S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1E3S3" type="text" name="Q1E3S3"
                           placeholder="<?php if (isset($data['Q1E3S3'])) echo $data['Q1E3S3']; ?>"
                           value="<?php echo set_value('Q1E3S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E3S2" type="email" name="Q1E3S2"
                           placeholder="<?php if (isset($data['Q1E3S2'])) echo $data['Q1E3S2'] ?>"
                           value="<?php echo set_value('Q1E3S2'); ?>"/>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Administrative staff (maximum of five staff can be part of the
  team):</label>
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
      <input class="form-control space-textbox" id="Q2E1S1" type="text" name="Q2E1S1"
                               placeholder="<?php if (isset($data['Q2E1S1'])) echo $data['Q2E1S1'] ?>"
                               value="<?php echo set_value('Q2E1S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E1S3" type="text" name="Q2E1S3"
                               placeholder="<?php if (isset($data['Q2E1S3'])) echo $data['Q2E1S3'] ?>"
                               value="<?php echo set_value('Q2E1S3'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2E1S2" type="email" name="Q2E1S2"
                               placeholder="<?php if (isset($data['Q2E1S2'])) echo $data['Q2E1S2'] ?>"
                               value="<?php echo set_value('Q2E1S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E2S1" type="text" name="Q2E2S1"
                               placeholder="<?php if (isset($data['Q2E2S1'])) echo $data['Q2E2S1'] ?>"
                               value="<?php echo set_value('Q2E2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E2S3" type="text" name="Q2E2S3"
                               placeholder="<?php if (isset($data['Q2E2S3'])) echo $data['Q2E2S3'] ?>"
                               value="<?php echo set_value('Q2E2S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E2S2" type="email" name="Q2E2S2"
                               placeholder="<?php if (isset($data['Q2E2S2'])) echo $data['Q2E2S2'] ?>"
                               value="<?php echo set_value('Q2E2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E3S1" type="text" name="Q2E3S1"
                               placeholder="<?php if (isset($data['Q2E3S1'])) echo $data['Q2E3S1'] ?>"
                               value="<?php echo set_value('Q2E3S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E3S3" type="text" name="Q2E3S3"
                               placeholder="<?php if (isset($data['Q2E3S3'])) echo $data['Q2E3S3'] ?>"
                               value="<?php echo set_value('Q2E3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E3S2" type="email" name="Q2E3S2"
                               placeholder="<?php if (isset($data['Q2E3S2'])) echo $data['Q2E3S2'] ?>"
                               value="<?php echo set_value('Q2E3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E4S1" type="text" name="Q2E4S1"
                               placeholder="<?php if (isset($data['Q2E4S1'])) echo $data['Q2E4S1']; ?>"
                               value="<?php echo set_value('Q2E4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E4S3" type="text" name="Q2E4S3"
                               placeholder="<?php if (isset($data['Q2E4S3'])) echo $data['Q2E4S3'] ?>"
                               value="<?php echo set_value('Q2E4S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E4S2" type="email" name="Q2E4S2"
                               placeholder="<?php if (isset($data['Q2E4S2'])) echo $data['Q2E4S2']; ?>"
                               value="<?php echo set_value('Q2E4S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E5S1" type="text" name="Q2E5S1"
                               placeholder="<?php if (isset($data['Q2E5S1'])) echo $data['Q2E5S1'] ?>"
                               value="<?php echo set_value('Q2E5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E5S3" type="text" name="Q2E5S3"
                               placeholder="<?php if (isset($data['Q2E5S3'])) echo $data['Q2E5S3'] ?>"
                               value="<?php echo set_value('Q2E5S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E5S2" type="email" name="Q2E5S2"
                               placeholder="<?php if (isset($data['Q2E5S2'])) echo $data['Q2E5S2'] ?>"
                               value="<?php echo set_value('Q2E5S2'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Students (maximum of ten students can be part of the team):</label>
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
      <input class="form-control space-textbox" id="Q3E1S1" type="text" name="Q3E1S1"
                               placeholder="<?php if (isset($data['Q3E1S1'])) echo $data['Q3E1S1'] ?>"
                               value="<?php echo set_value('Q3E1S1'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3E1S2" type="text" name="Q3E1S2"
                               placeholder="<?php if (isset($data['Q3E1S2'])) echo $data['Q3E1S2'] ?>"
                               value="<?php echo set_value('Q3E1S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E1S3" type="text" name="Q3E1S3"
                               placeholder="<?php if (isset($data['Q3E1S3'])) echo $data['Q3E1S3'] ?>"
                               value="<?php echo set_value('Q3E1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E2S1" type="text" name="Q3E2S1"
                               placeholder="<?php if (isset($data['Q3E2S1'])) echo $data['Q3E2S1'] ?>"
                               value="<?php echo set_value('Q3E2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E2S2" type="text" name="Q3E2S2"
                               placeholder="<?php if (isset($data['Q3E2S2'])) echo $data['Q3E2S2'] ?>"
                               value="<?php echo set_value('Q3E2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E2S3" type="text" name="Q3E2S3"
                               placeholder="<?php if (isset($data['Q3E2S3'])) echo $data['Q3E2S3'] ?>"
                               value="<?php echo set_value('Q3E2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E3S1" type="text" name="Q3E3S1"
                               placeholder="<?php if (isset($data['Q3E3S1'])) echo $data['Q3E3S1'] ?>"
                               value="<?php echo set_value('Q3E3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E3S2" type="text" name="Q3E3S2"
                               placeholder="<?php if (isset($data['Q3E3S2'])) echo $data['Q3E3S2'] ?>"
                               value="<?php echo set_value('Q3E3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E3S3" type="text" name="Q3E3S3"
                               placeholder="<?php if (isset($data['Q3E3S3'])) echo $data['Q3E3S3'] ?>"
                               value="<?php echo set_value('Q3E3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E4S1" type="text" name="Q3E4S1"
                               placeholder="<?php if (isset($data['Q3E4S1'])) echo $data['Q3E4S1'] ?>"
                               value="<?php echo set_value('Q3E4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E4S2" type="text" name="Q3E4S2"
                               placeholder="<?php if (isset($data['Q3E4S2'])) echo $data['Q3E4S2'] ?>"
                               value="<?php echo set_value('Q3E4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E4S3" type="text" name="Q3E4S3"
                               placeholder="<?php if (isset($data['Q3E4S3'])) echo $data['Q3E4S3'] ?>"
                               value="<?php echo set_value('Q3E4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E5S1" type="text" name="Q3E5S1"
                               placeholder="<?php if (isset($data['Q3E5S1'])) echo $data['Q3E5S1'] ?>"
                               value="<?php echo set_value('Q3E5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E5S2" type="text" name="Q3E5S2"
                               placeholder="<?php if (isset($data['Q3E5S2'])) echo $data['Q3E5S2'] ?>"
                               value="<?php echo set_value('Q3E5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E5S3" type="text" name="Q3E5S3"
                               placeholder="<?php if (isset($data['Q3E5S3'])) echo $data['Q3E5S3'] ?>"
                               value="<?php echo set_value('Q3E5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 6</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E6S1" type="text" name="Q3E6S1"
                               placeholder="<?php if (isset($data['Q3E6S1'])) echo $data['Q3E6S1'] ?>"
                               value="<?php echo set_value('Q3E6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E6S2" type="text" name="Q3E6S2"
                               placeholder="<?php if (isset($data['Q3E6S2'])) echo $data['Q3E6S2'] ?>"
                               value="<?php echo set_value('Q3E6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E6S3" type="text" name="Q3E6S3"
                               placeholder="<?php if (isset($data['Q3E6S3'])) echo $data['Q3E6S3'] ?>"
                               value="<?php echo set_value('Q3E6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 7</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E7S1" type="text" name="Q3E7S1"
                               placeholder="<?php if (isset($data['Q3E7S1'])) echo $data['Q3E7S1'] ?>"
                               value="<?php echo set_value('Q3E7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E7S2" type="text" name="Q3E7S2"
                               placeholder="<?php if (isset($data['Q3E7S2'])) echo $data['Q3E7S2'] ?>"
                               value="<?php echo set_value('Q3E7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E7S3" type="text" name="Q3E7S3"
                               placeholder="<?php if (isset($data['Q3E7S3'])) echo $data['Q3E7S3'] ?>"
                               value="<?php echo set_value('Q3E7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 8</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E8S1" type="text" name="Q3E8S1"
                               placeholder="<?php if (isset($data['Q3E8S1'])) echo $data['Q3E8S1'] ?>"
                               value="<?php echo set_value('Q3E8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E8S2" type="text" name="Q3E8S2"
                               placeholder="<?php if (isset($data['Q3E8S2'])) echo $data['Q3E8S2'] ?>"
                               value="<?php echo set_value('Q3E8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E8S3" type="text" name="Q3E8S3"
                               placeholder="<?php if (isset($data['Q3E8S3'])) echo $data['Q3E8S3'] ?>"
                               value="<?php echo set_value('Q3E8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 9</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E9S1" type="text" name="Q3E9S1"
                               placeholder="<?php if (isset($data['Q3E9S1'])) echo $data['Q3E9S1'] ?>"
                               value="<?php echo set_value('Q3E9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E9S2" type="text" name="Q3E9S2"
                               placeholder="<?php if (isset($data['Q3E9S2'])) echo $data['Q3E9S2'] ?>"
                               value="<?php echo set_value('Q3E9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E9S3" type="text" name="Q3E9S3"
                               placeholder="<?php if (isset($data['Q3E9S3'])) echo $data['Q3E9S3'] ?>"
                               value="<?php echo set_value('Q3E9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 10</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E10S1" type="text" name="Q3E10S1"
                               placeholder="<?php if (isset($data['Q3E10S1'])) echo $data['Q3E10S1'] ?>"
                               value="<?php echo set_value('Q3E10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E10S2" type="text" name="Q3E10S2"
                               placeholder="<?php if (isset($data['Q3E10S2'])) echo $data['Q3E10S2'] ?>"
                               value="<?php echo set_value('Q3E10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E10S3" type="text" name="Q3E10S3"
                               placeholder="<?php if (isset($data['Q3E10S3'])) echo $data['Q3E10S3'] ?>"
                               value="<?php echo set_value('Q3E10S3'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">
  <div class="question-text">
    <h6> Task 2: How much energy does your school consume?</h6>
    <p> In this section you will be asked questions related to energy consumption of your school. </p>
  </div>
  </label>
  <div class="answer clearfix"></div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">1</span>Does your school have access to an electricity
  bill?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline">
      <input type="radio" id="Q4E1_1" name="Q4E1" onclick="ElectricityBill(1)"
                                   value="<?php echo set_value('Q4E1', 'Y') ?>" <?php if (isset($data['Q4E1'])) echo $data['Q4E1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline">
      <input type="radio" name="Q4E1" onclick="ElectricityBill(2)"
                                   value="<?php echo set_value('Q4E1', 'N') ?>" <?php if (isset($data['Q4E1'])) echo $data['Q4E1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
            if (isset($data['Q4E1']))
                if ($data['Q4E1'] == 'Y') {
                    ?>
<div class="form-group" id="ebill">
  <label class="control-label">Please upload the most recent electricity bill here</label>
  <br>
  <button class="btn uploadbtn upload" data-id="Electricity Bill" data-toggle="modal"
                                data-target="#airModal" type="button">UPLOAD FILES </button>
</div>

                        <br>
                        <table width="100%" class="question uploadedfiles">
                            <thead>
                                <tr>
                                    <th>File name</th>
                                    <th>Delete</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($electricityBills as $f) { ?>
                                    <tr id="index<?php echo $f->id; ?>">
                                        <?php $name = str_replace(" ", "_", $f->name . "_Electricity_Bill_"); ?>
                                        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                     <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php

                }
            ?>
<div class="form-group" id="ebill" style="display:none">
  <label class="control-label">Please upload the most recent electricity bill here</label>
  <br>
  <button class="btn uploadbtn upload" data-id="Electricity Bill" data-toggle="modal"
                        data-target="#airModal" type="button">UPLOAD FILES </button>
</div>
<input type="hidden" id="Q6A1Val" value="<?php if (isset($other['Q6A1'])) echo $other['Q6A1'] ?>"/>
<div class="form-group">
  <label class="control-label"><span class="cube">2</span>Does your school have its own vehicles?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline">
      <input type="radio" id="Q5E1" onclick="AirCrossLink1(1)" name="Q5E1"
                                   value="<?php echo set_value('Q5E1', 'Y') ?>" <?php if (isset($data['Q5E1'])) echo $data['Q5E1'] == 'Y' ? "checked" : "" ?>
                                   required>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline">
      <input type="radio" id="Q5E2" name="Q5E1" onclick="AirCrossLink1(2)"
                                   value="<?php echo set_value('Q5E1', 'N') ?>" <?php if (isset($data['Q5E1'])) echo $data['Q5E1'] == 'N' ? "checked" : "" ?>
                                   required>
      No </label>
    </li>
  </ul>
</div>
<!--  <div class="form-group">
        <label class="control-label"><span class="cube">3</span>Provide the details of total energy consumed by
        the school: <a class="tt" data-tooltip="Type of use/purpose (mention the type of use in the above table):
1. Lighting 2. Housekeeping 3. Cooking 4. Transport 5. Teaching/ learning aid. If your school does not use a particular source of energy, enter 0."><span
                                class="badge">?</span></a></label>
        <div class="form-group-1 row">
          <div class="col-xs-3">
            <label>Source of energy</label>
          </div>
          <div class="col-xs-3">
            <label>Quantity consumed/monthly average</label>
          </div>
          <div class="col-xs-3">
            <label>Energy consumed in Megajoules (mj)</label>
          </div>
          <div class="col-xs-3">
            <label>Type of use</label>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Electricity from the board (kwh) </label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E1S1']))
                $data['Q6E1S1'] = 0;

            $attribs = array('name' => 'Q6E1S1', 'value' => $data['Q6E1S1'], "class" => "form-control space-textbox", "id" => "Q6E1S1", "type" => "number", "onchange" => "Megajoules(this.value)", "min" => "0");

            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E1S2" type="number" min="0" name="Q6E1S2"
                               placeholder="<?php if (isset($data['Q6E1S2'])) echo $data['Q6E1S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E1S3'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E1S3']))
                $data['Q6E1S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E1S3", "type" => "text", "min" => "0");

            echo form_input('Q6E1S3', $data['Q6E1S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Electricity from generator (diesel) (litres)</label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E2S1']))
                $data['Q6E2S1'] = 0;

            $attribs = array();
            $attribs = array('name' => 'Q6E2S1', 'value' => $data['Q6E2S1'], "class" => "form-control space-textbox", "id" => "Q6E2S1", "type" => "number", "onchange" => "MegajoulesDiesel(this.value,'Q6E2S2')", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E2S2" type="number" min="0" name="Q6E2S2"
                               placeholder="<?php if (isset($data['Q6E2S2'])) echo $data['Q6E2S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E2S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E2S3']))
                $data['Q6E2S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E2S3", "type" => "text", "min" => "0");

            echo form_input('Q6E2S3', $data['Q6E2S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Petrol (litres)</label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E3S1']))
                $data['Q6E3S1'] = 0;

            $attribs = array('name' => 'Q6E3S1', 'value' => $data['Q6E3S1'], "class" => "form-control space-textbox", "id" => "Q6E3S1", "type" => "number", "onchange" => "MegajoulesPetrol(this.value,'Q6E3S2')", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E3S2" type="number" min="0" name="Q6E3S2"
                               placeholder="<?php if (isset($data['Q6E3S2'])) echo $data['Q6E3S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E3S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E3S3']))
                $data['Q6E3S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E3S3", "type" => "text", "min" => "0");

            echo form_input('Q6E3S3', $data['Q6E3S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Diesel (litres)</label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E4S1']))
                $data['Q6E4S1'] = 0;


            $attribs = array('name' => 'Q6E4S1', 'value' => $data['Q6E4S1'], "class" => "form-control space-textbox", "id" => "Q6E4S1", "type" => "number", "onchange" => "MegajoulesDiesel(this.value,'Q6E4S2')", "min" => "0");

            echo form_input($attribs);
            ?>
            <?php
            //    if(empty($data['Q6E4S1']))
            //      $data['Q6E4S1'] = 0;
            //    $attribs = array("class"=>"form-control space-textbox", "id"=>"Q6E4S1", "type"=>"number", "name"=>"Q6E4S1");
            //    echo form_input('Q6E4S1', $data['Q6E4S1'],$attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E4S2" type="number" min="0" name="Q6E4S2"
                               placeholder="<?php if (isset($data['Q6E4S2'])) echo $data['Q6E4S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E4S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E4S3']))
                $data['Q6E4S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E4S3", "type" => "text", "min" => "0");

            echo form_input('Q6E4S3', $data['Q6E4S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>CNG (kilogrammes)</label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E5S1']))
                $data['Q6E5S1'] = 0;

            $attribs = array('name' => 'Q6E5S1', 'value' => $data['Q6E5S1'], "class" => "form-control space-textbox", "id" => "Q6E5S1", "type" => "number", "onchange" => "MegajoulesCNG(this.value,'Q6E5S2')", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E5S2" type="number" min="0" name="Q6E5S2"
                               placeholder="<?php if (isset($data['Q6E5S2'])) echo $data['Q6E5S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E5S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E5S3']))
                $data['Q6E5S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E5S3", "type" => "text", "min" => "0");

            echo form_input('Q6E5S3', $data['Q6E5S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Kerosene (litres)</label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E6S1']))
                $data['Q6E6S1'] = 0;

            $attribs = array('name' => 'Q6E6S1', 'value' => $data['Q6E6S1'], "class" => "form-control space-textbox", "id" => "Q6E6S1", "type" => "number", "onchange" => "MegajoulesKerosene(this.value,'Q6E6S2')", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E6S2" type="number" min="0" name="Q6E6S2"
                               placeholder="<?php if (isset($data['Q6E6S2'])) echo $data['Q6E6S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E6S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E6S3']))
                $data['Q6E6S3'] = 0;

            $attribs = array('name' => 'Q6E6S3', "class" => "form-control space-textbox", "id" => "Q6E6S3", "type" => "text", "min" => "0");
            echo form_input('Q6E6S3', $data['Q6E6S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Coal (kilogrammes) </label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E7S1']))
                $data['Q6E7S1'] = 0;

            $attribs = array('name' => 'Q6E7S1', 'value' => $data['Q6E7S1'], "class" => "form-control space-textbox", "id" => "Q6E7S1", "type" => "number", "onchange" => "MegajoulesCoal(this.value)", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E7S2" type="number" min="0" name="Q6E7S2"
                               placeholder="<?php if (isset($data['Q6E7S2'])) echo $data['Q6E7S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E7S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E7S3']))
                $data['Q6E7S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E7S3", "type" => "text", "min" => "0");

            echo form_input('Q6E7S3', $data['Q6E7S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Wood (kilogrammes) </label>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E16S1']))
                $data['Q6E16S1'] = 0;

            $attribs = array('name' => 'Q6E16S1', 'value' => $data['Q6E16S1'], "class" => "form-control space-textbox", "id" => "Q6E16S1", "type" => "number", "onchange" => "MegajoulesWood(this.value,'Q6E16S2')", "min" => "0");
            echo form_input($attribs);
            ?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E16S2" type="number" min="0" name="Q6E16S2"
                               placeholder="<?php if (isset($data['Q6E16S2'])) echo $data['Q6E16S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E16S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E16S3']))
                $data['Q6E16S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E16S3", "type" => "text", "min" => "0");

            echo form_input('Q6E16S3', $data['Q6E16S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Animal waste (kilogrammes) </label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E8S1']))
    $data['Q6E8S1'] = 0;

$attribs = array('name' => 'Q6E8S1', 'value' => $data['Q6E8S1'], "class" => "form-control space-textbox", "id" => "Q6E8S1", "type" => "number", "onchange" => "MegajoulesAnimal(this.value,'Q6E8S2')", "min" => "0");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E8S2" type="number" min="0" name="Q6E8S2"
                               placeholder="<?php if (isset($data['Q6E8S2'])) echo $data['Q6E8S2'];
else echo "0"; ?>"
                               value="<?php echo set_value('Q6E8S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E8S3']))
    $data['Q6E8S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E8S3", "type" => "text", "min" => "0");

echo form_input('Q6E8S3', $data['Q6E8S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Solar (kwh) </label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E9S1']))
    $data['Q6E9S1'] = 0;

$attribs = array('name' => 'Q6E9S1', 'value' => $data['Q6E9S1'], "class" => "form-control space-textbox", "id" => "Q6E9S1", "type" => "number", "min" => "0", "onchange" => "ComputeCrossLinkEnergy('Solar',this.value)");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E9S2" type="number" min="0" name="Q6E9S2"
                               placeholder="<?php if (isset($data['Q6E9S2'])) echo $data['Q6E9S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E9S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E9S3']))
    $data['Q6E9S3'] = 0;

$attribs = array('name' => 'Q6E9S3', 'value' => $data['Q6E9S3'], "class" => "form-control space-textbox", "id" => "Q6E9S3", "type" => "text", "min" => "0");
echo form_input('Q6E9S3', $data['Q6E9S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Wind (kwh) </label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E10S1']))
    $data['Q6E10S1'] = 0;

$attribs = array('name' => 'Q6E10S1', 'value' => $data['Q6E10S1'], "class" => "form-control space-textbox", "id" => "Q6E10S1", "type" => "number", "min" => "0", "onchange" => "ComputeCrossLinkEnergy('Wind',this.value)");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E10S2" type="number" min="0" name="Q6E10S2"
                               placeholder="<?php if (isset($data['Q6E10S2'])) echo $data['Q6E10S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E10S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E10S3']))
    $data['Q6E10S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E10S3", "type" => "text", "min" => "0");

echo form_input('Q6E10S3', $data['Q6E10S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> LPG (kilogrammes) </label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E11S1']))
    $data['Q6E11S1'] = 0;

$attribs = array('name' => 'Q6E11S1', 'value' => $data['Q6E11S1'], "class" => "form-control space-textbox", "id" => "Q6E11S1", "type" => "number", "onchange" => "MegajoulesLPG(this.value,'Q6E11S2')", "min" => "0");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E11S2" type="number" min="0" name="Q6E11S2"
                               placeholder="<?php if (isset($data['Q6E11S2'])) echo $data['Q6E11S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E11S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E11S3']))
    $data['Q6E11S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E11S3", "type" => "text", "min" => "0");
echo form_input('Q6E11S3', $data['Q6E11S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Piped Natural Gas (kilogrammes)</label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E12S1']))
    $data['Q6E12S1'] = 0;

$attribs = array('name' => 'Q6E12S1', 'value' => $data['Q6E12S1'], "class" => "form-control space-textbox", "id" => "Q6E12S1", "type" => "number", "onchange" => "MegajoulesBiomas(this.value,'Q6E12S2')", "min" => "0");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E12S2" type="number" min="0" name="Q6E12S2"
                               placeholder="<?php if (isset($data['Q6E12S2'])) echo $data['Q6E12S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E12S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E12S3']))
    $data['Q6E12S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E12S3", "type" => "text", "min" => "0");

echo form_input('Q6E12S3', $data['Q6E12S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Biogas</label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E13S1']))
    $data['Q6E13S1'] = 0;

$attribs = array('name' => 'Q6E13S1', 'value' => $data['Q6E13S1'], "class" => "form-control space-textbox", "id" => "Q6E13S1", "type" => "number", "onchange" => "MegajoulesBiomas(this.value,'Q6E13S2')", "min" => "0");
echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E13S2" type="number" min="0" name="Q6E13S2"
                               placeholder="<?php if (isset($data['Q6E13S2'])) echo $data['Q6E13S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E13S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <?php
            if (empty($data['Q6E13S3']))
                $data['Q6E13S3'] = 0;

            $attribs = array("class" => "form-control space-textbox", "id" => "Q6E13S3", "type" => "text", "min" => "0");
            echo form_input('Q6E13S3', $data['Q6E13S3'], $attribs);
            ?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label> Others (specify)</label>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E14S1']))
    $data['Q6E14S1'] = 0;

$attribs = array('name' => 'Q6E14S1', 'value' => $data['Q6E14S1'], "class" => "form-control space-textbox", "id" => "Q6E14S1", "type" => "number", "min" => "0");

echo form_input($attribs);
?>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E14S2" onchange="computeJoules()" type="number"
                               min="0" name="Q6E14S2"
                               placeholder="<?php if (isset($data['Q6E14S2'])) echo $data['Q6E14S2'];
            else echo "0"; ?>"
                               value="<?php echo set_value('Q6E14S2'); ?>"/>
          </div>
          <div class="col-xs-3">
<?php
if (empty($data['Q6E14S3']))
    $data['Q6E14S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E14S3", "type" => "text", "min" => "0");

echo form_input('Q6E14S3', $data['Q6E14S3'], $attribs);
?>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-3">
            <label>Total</label>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E15S1" type="number" min="0" name="Q6E15S1"
                               placeholder="<?php if (isset($data['Q6E15S1'])) echo $data['Q6E15S1'];
else echo "0"; ?>"
                               value="<?php echo set_value('Q6E15S1'); ?>" readonly/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q6E15S2" type="number" min="0" name="Q6E15S2"
                               placeholder="<?php if (isset($data['Q6E15S2'])) echo $data['Q6E15S2'];
else echo "0"; ?>"
                               value="<?php echo set_value('Q6E15S2'); ?>" readonly/>
          </div>
          <div class="col-xs-3"></div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Please upload fuel bills</label>
        <br>
        <button class="btn uploadbtn upload" data-id="Fuels Bills" data-toggle="modal" data-target="#airModal"
                        type="button">UPLOAD FILES </button>
      </div>-->
<div class="form-group">
  <label><span class="cube">3</span> Please share if your school uses the following types of energy: </label>
  <table class="table">
    <tr>
      <td width="800px">Electricity from the board (kwh)</td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E1" value="<?php echo set_value('Q6E1', 'Y') ?>" <?php if (isset($data['Q6E1'])) echo $data['Q6E1'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E1" value="<?php echo set_value('Q6E1', 'N') ?>" <?php if (isset($data['Q6E1'])) echo $data['Q6E1'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Electricity from generator (diesel) (litres)</td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E2" value="<?php echo set_value('Q6E2', 'Y') ?>" <?php if (isset($data['Q6E2'])) echo $data['Q6E2'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E2" value="<?php echo set_value('Q6E2', 'N') ?>" <?php if (isset($data['Q6E2'])) echo $data['Q6E2'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Petrol (litres)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E3" value="<?php echo set_value('Q6E3', 'Y') ?>" <?php if (isset($data['Q6E3'])) echo $data['Q6E3'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E3" value="<?php echo set_value('Q6E3', 'N') ?>" <?php if (isset($data['Q6E3'])) echo $data['Q6E3'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Diesel (litres)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E4" value="<?php echo set_value('Q6E4', 'Y') ?>" <?php if (isset($data['Q6E4'])) echo $data['Q6E4'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E4" value="<?php echo set_value('Q6E4', 'N') ?>" <?php if (isset($data['Q6E4'])) echo $data['Q6E4'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>CNG (kilogrammes)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E5" value="<?php echo set_value('Q6E5', 'Y') ?>" <?php if (isset($data['Q6E5'])) echo $data['Q6E5'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E5" value="<?php echo set_value('Q6E5', 'N') ?>" <?php if (isset($data['Q6E5'])) echo $data['Q6E5'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Kerosene (litres)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E6" value="<?php echo set_value('Q6E6', 'Y') ?>" <?php if (isset($data['Q6E6'])) echo $data['Q6E6'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E6" value="<?php echo set_value('Q6E6', 'N') ?>" <?php if (isset($data['Q6E6'])) echo $data['Q6E6'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Coal (kilogrammes)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E7" value="<?php echo set_value('Q6E7', 'Y') ?>" <?php if (isset($data['Q6E7'])) echo $data['Q6E7'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E7" value="<?php echo set_value('Q6E7', 'N') ?>" <?php if (isset($data['Q6E7'])) echo $data['Q6E7'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Wood (kilogrammes)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E8" value="<?php echo set_value('Q6E8', 'Y') ?>" <?php if (isset($data['Q6E8'])) echo $data['Q6E8'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E8" value="<?php echo set_value('Q6E8', 'N') ?>" <?php if (isset($data['Q6E8'])) echo $data['Q6E8'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Animal waste (kilogrammes)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E9" value="<?php echo set_value('Q6E9', 'Y') ?>" <?php if (isset($data['Q6E9'])) echo $data['Q6E9'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E9" value="<?php echo set_value('Q6E9', 'N') ?>" <?php if (isset($data['Q6E9'])) echo $data['Q6E9'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Solar (kwh)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E10" value="<?php echo set_value('Q6E10', 'Y') ?>" <?php if (isset($data['Q6E10'])) echo $data['Q6E10'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E10" value="<?php echo set_value('Q6E10', 'N') ?>" <?php if (isset($data['Q6E10'])) echo $data['Q6E10'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    </tr>
    <tr>
      <td>Wind (kwh)</td>
    <td><label class="radio-inline">
        <input type="radio" name="Q6E11" value="<?php echo set_value('Q6E11', 'Y') ?>" <?php if (isset($data['Q6E11'])) echo $data['Q6E11'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E11" value="<?php echo set_value('Q6E11', 'N') ?>" <?php if (isset($data['Q6E11'])) echo $data['Q6E11'] == 'N' ? "checked" : "" ?>  />
        No</label></td>
    <tr>
      <td>LPG (kilogrammes)</td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E12" value="<?php echo set_value('Q6E12', 'Y') ?>" <?php if (isset($data['Q6E12'])) echo $data['Q6E12'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E12" value="<?php echo set_value('Q6E12', 'N') ?>" <?php if (isset($data['Q6E12'])) echo $data['Q6E12'] == 'N' ? "checked" : "" ?>  />
        No</label></td>

    </tr>
    <tr>
      <td>Piped Natural Gas (kilogrammes)</td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E13" value="<?php echo set_value('Q6E13', 'Y') ?>" <?php if (isset($data['Q6E13'])) echo $data['Q6E13'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E13" value="<?php echo set_value('Q6E13', 'N') ?>" <?php if (isset($data['Q6E13'])) echo $data['Q6E13'] == 'N' ? "checked" : "" ?>  />
        No</label></td>

    </tr>
    <tr>
      <td>Biogas (kilogrammes)</td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E14" value="<?php echo set_value('Q6E14', 'Y') ?>" <?php if (isset($data['Q6E14'])) echo $data['Q6E14'] == 'Y' ? "checked" : "" ?> />
        Yes</label></td>
      <td><label class="radio-inline">
        <input type="radio" name="Q6E14" value="<?php echo set_value('Q6E14', 'N') ?>" <?php if (isset($data['Q6E14'])) echo $data['Q6E14'] == 'N' ? "checked" : "" ?>  />
        No</label></td>

    </tr>
  </table>
</div>
<div class="form-group">
  <label><span class="cube">4</span> What appliances does your school have? </label>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Appliances/Equipments</label>
    </div>
    <div class="col-xs-3">
      <label>Number</label>
    </div>
    <div class="col-xs-3">
      <label>Please do not fill these columns </label>
    </div>
    <div class="col-xs-3">
      <label>Please do not fill these columns</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Air Conditioners</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S1" type="number" min="0" name="Q7E2S1"
                               placeholder="<?php if (isset($data['Q7E2S1'])) echo $data['Q7E2S1'] ?>"
                               value="<?php echo set_value('Q7E2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S2" type="text" name="Q7E2S2"
                               placeholder="<?php echo isset($data['Q7E2S2']) ? $data['Q7E2S2'] : "(tonn)" ?>"
                               value="<?php echo set_value('Q7E2S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S3" type="text" name="Q7E2S3"
                               placeholder="<?php if (isset($data['Q7E2S3'])) echo $data['Q7E2S3'] ?>"
                               value="<?php echo set_value('Q7E2S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Refrigerator</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S1" type="number" min="0" name="Q7E3S1"
                               placeholder="<?php if (isset($data['Q7E3S1'])) echo $data['Q7E3S1'] ?>"
                               value="<?php echo set_value('Q7E3S3'); ?>" />
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S2" type="text" name="Q7E3S2"
                               placeholder="<?php echo isset($data['Q7E3S2']) ? $data['Q7E3S2'] : "(litres)" ?>"
                               value="<?php echo set_value('Q7E3S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S3" type="text" name="Q7E3S3"
                               placeholder="<?php if (isset($data['Q7E3S3'])) echo $data['Q7E3S3'] ?>"
                               value="<?php echo set_value('Q7E3S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Microwave</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S1" type="number" min="0" name="Q7E4S1"
                               placeholder="<?php if (isset($data['Q7E4S1'])) echo $data['Q7E4S1'] ?>"
                               value="<?php echo set_value('Q7E4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S2" type="text" name="Q7E4S2"
                               placeholder="<?php echo isset($data['Q7E4S2']) ? $data['Q7E4S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E4S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S3" type="text" name="Q7E4S3"
                               placeholder="<?php if (isset($data['Q7E4S3'])) echo $data['Q7E4S3'] ?>"
                               value="<?php echo set_value('Q7E4S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Tube Lights</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S1" type="number" min="0" name="Q7E5S1"
                               placeholder="<?php if (isset($data['Q7E5S1'])) echo $data['Q7E5S1'] ?>"
                               value="<?php echo set_value('Q7E5S1'); ?>" />
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S2" type="text" name="Q7E5S2"
                               placeholder="<?php echo isset($data['Q7E5S2']) ? $data['Q7E5S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E5S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S3" type="text" name="Q7E5S3"
                               placeholder="<?php if (isset($data['Q7E5S3'])) echo $data['Q7E5S3'] ?>"
                               value="<?php echo set_value('Q7E5S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> CFL Bulbs</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S1" type="number" min="0" name="Q7E6S1"
                               placeholder="<?php if (isset($data['Q7E6S1'])) echo $data['Q7E6S1'] ?>"
                               value="<?php echo set_value('Q7E6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S2" type="text" name="Q7E6S2"
                               placeholder="<?php echo isset($data['Q7E6S2']) ? $data['Q7E6S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E6S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S3" type="text" name="Q7E6S3"
                               placeholder="<?php if (isset($data['Q7E6S3'])) echo $data['Q7E6S3'] ?>"
                               value="<?php echo set_value('Q7E6S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> LED Lights</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S1" type="number" min="0" name="Q7E7S1"
                               placeholder="<?php if (isset($data['Q7E7S1'])) echo $data['Q7E7S1'] ?>"
                               value="<?php echo set_value('Q7E7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S2" type="text" name="Q7E7S2"
                               placeholder="<?php echo isset($data['Q7E7S2']) ? $data['Q7E7S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E7S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S3" type="text" name="Q7E7S3"
                               placeholder="<?php if (isset($data['Q7E7S3'])) echo $data['Q7E7S3'] ?>"
                               value="<?php echo set_value('Q7E7S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Fans</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S1" type="number" min="0" name="Q7E8S1"
                               placeholder="<?php if (isset($data['Q7E8S1'])) echo $data['Q7E8S1'] ?>"
                               value="<?php echo set_value('Q7E8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S2" type="text" name="Q7E8S2"
                               placeholder="<?php echo isset($data['Q7E8S2']) ? $data['Q7E8S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E8S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S3" type="text" name="Q7E8S3"
                               placeholder="<?php if (isset($data['Q7E8S3'])) echo $data['Q7E8S3'] ?>"
                               value="<?php echo set_value('Q7E8S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Incandescent bulbs</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E9S1" type="number" min="0" name="Q7E9S1"
                               placeholder="<?php if (isset($data['Q7E9S1'])) echo $data['Q7E9S1'] ?>"
                               value="<?php echo set_value('Q7E9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E9S2" type="text" name="Q7E9S2"
                               placeholder="<?php echo isset($data['Q7E9S2']) ? $data['Q7E9S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E9S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E9S3" type="text" name="Q7E9S3"
                               placeholder="<?php if (isset($data['Q7E9S3'])) echo $data['Q7E9S3'] ?>"
                               value="<?php echo set_value('Q7E9S3'); ?>" readonly=""/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Overhead projectors
      (smart classroom)</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E10S1" type="number" min="0" name="Q7E10S1"
                               placeholder="<?php if (isset($data['Q7E10S1'])) echo $data['Q7E10S1'] ?>"
                               value="<?php echo set_value('Q7E10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E10S2" type="text" name="Q7E10S2"
                               placeholder="<?php echo isset($data['Q7E10S2']) ? $data['Q7E10S2'] : "(Watts)" ?>"
                               value="<?php echo set_value('Q7E10S2'); ?>" readonly=""/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S3" type="text" name="Q7E8S3"
                               placeholder="<?php if (isset($data['Q7E10S3'])) echo $data['Q7E10S3'] ?>"
                               value="<?php echo set_value('Q7E10S3'); ?>" readonly=""/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <h6> Task 3: Is your school using any renewable sources of energy? </h6>
  </label>
</div>
<!--<div class="form-group">
        <label><span class="cube">5</span>What is the average number of sunny days in your area? <a
                            class="kplink"
                            href="http://www.greenschoolsprogramme.org/knowledge-bank/energy/#averageConsumption"
                            target="_blank"> </a></label>
        <input class="form-control space-textbox" id="Q8E1" type="number" min="0" max="366" name="Q8E1"
                       placeholder="<?php if (isset($data['Q8E1'])) echo $data['Q8E1'] ?>"
                       value="<?php echo set_value('Q8E1'); ?>"/>
      </div>-->
<div class="form-group">
  <label class="control-label"><span class="cube">5</span>Are there any alternate sources of energy
  employed/ installed in your school? <a class="kplink"
                                                           href="http://www.greenschoolsprogramme.org/knowledge-&#10;&#10;bank/energy/#averageConsumption"
                                                           target="_blank"> </a></label>
  <ul class="list-inline">
    <li>
      <label class="">
      <input type="radio" id="Q9E1" name="Q9E1" onclick="AlternativeSource(1)"
                                   value="<?php echo set_value('Q9E1', 'Y') ?>" <?php if (isset($data['Q9E1'])) echo $data['Q9E1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="">
      <input type="radio" id="Q9E2" name="Q9E1" onclick="AlternativeSource(2)"
                                   value="<?php echo set_value('Q9E1', 'N') ?>" <?php if (isset($data['Q9E1'])) echo $data['Q9E1'] == 'N' ? "checked" : "" ?>>

      No </label>
    </li>
  </ul>
</div>
<?php
            if (isset($data['Q9E1']))
            if ($data['Q9E1'] == 'Y') {
            ?>
<div class="form-group" id="alternativeEnergy">
<?php } else { ?>
<div class="form-group" id="alternativeEnergy" style="display:none">
  <?php } else {?>
  <div class="form-group" id="alternativeEnergy" style="display:none">
    <?php }?>
    <label class="control-label">If yes, please upload a picture of the alternative source of energy
    installed that is currently in use.</label>
    <br>
    <button class="btn uploadbtn upload" data-id="Alternative Source of Energy" data-toggle="modal"
                                data-target="#airModal" type="button">UPLOAD FILES </button>
    <table width="100%" class="question uploadedfiles">
        <thead>
        <tr>
            <th>File name</th>
             <th>Delete</th>
             <th>Download</th>
        </tr>
        </thead>
        <tbody>
<?php foreach ($alternativeResource as $u) { ?>
    <tr id="index<?php echo $u->id; ?>">
    <?php $name = str_replace(" ", "_", $u->name . "_Alternative_Source_of_Energy_"); ?>
                                                                                                                      
    <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
<?php } ?>
        </tbody>
    </table>  
  </div>
  <?php
                    if (isset($data['Q9E1']))
                    if ($data['Q9E1'] == 'Y') {
                    ?>
  <div class="form-group" id="typeofenergy">
    <?php } else { ?>
    <div class="form-group" id="typeofenergy" style="display:none">
      <?php }
                            else {?>
      <div class="form-group" id="typeofenergy" style="display:none">
        <?php }?>
        <div class="form-group">
          <label><span class="cube">5(a)</span>If yes, do you use:</label>
          <ul class="list-inline">
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" name="Q9E1S1" id=""
                                                   value="<?php echo set_value('Q9E1S1',1); ?>" <?php if (isset($data['Q9E1S1'])) echo set_checkbox('Q9E1S1', '1', true); ?>/>
              Solar</label>
            </li>
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" name="Q9E1S2" id=""
                                                   value="<?php echo set_value('Q9E1S2',1); ?>" <?php if (isset($data['Q9E1S2'])) echo set_checkbox('Q9E1S2', '1', true); ?>/>
              Wind</label>
            </li>
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" name="Q9E1S3" id="Hydro"
                                                   value="<?php echo set_value('Q9E1S3',1); ?>" <?php if (isset($data['Q9E1S3'])) echo set_checkbox('Q9E1S3', '1', true); ?>/>
              Hydro</label>
            </li>
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" name="Q9E1S5"
                                                   value="<?php echo set_value('Q9E1S5',1); ?>" <?php if (isset($data['Q9E1S5'])) echo set_checkbox('Q9E1S5', '1', true); ?>/>
              Biogas Plant</label>
            </li>
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" name="Q9E1S4" id="Combination"
                                                   value="<?php echo set_value('Q9E1S4', 1); ?>" <?php if (isset($data['Q9E1S4'])) echo set_checkbox('Q9E1S4', '1', true); ?>/>
              Combination of solar and wind</label>
            </li>
          </ul>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group">
          <label><span class="cube">6</span>Does your school use a solar water heater(s)?</label>
          <ul class="list-inline">
            <li>
              <label>
              <input type="radio" name="Q10E1"
                                                   value="<?php echo set_value('Q10E1', 'Y') ?>" <?php if (isset($data['Q10E1'])) echo $data['Q10E1'] == 'Y' ? "checked" : "" ?>/>
              Yes</label>
            </li>
            <li>
              <label>
              <input type="radio" name="Q10E1"
                                                   value="<?php echo set_value('Q10E1', 'N') ?>" <?php if (isset($data['Q10E1'])) echo $data['Q10E1'] == 'N' ? "checked" : "" ?>/>
              No</label>
            </li>
          </ul>
        </div>
      </div>
      <div class="form-group" id="WastePolicy">
        <label class="control-label">Please upload supporting documents:</label>
        <br>
        &bull; Pictures of audit team doing survey<br/>
        Please upload all supporting documents related to this section here. Note, files must be one of the
        following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
        File size per document should not exceed <strong>100 KB.</strong> <br/>
        <br/>
        <button class="btn uploadbtn upload" data-id="Supporting Document Energy" data-toggle="modal"
                                        data-target="#airModal" type="button">UPLOAD FILES </button>

                                <br>
                            </div>
                            <div class="clearfix">&nbsp</div>
                            <table width="100%" class="question uploadedfiles">
                                <thead>
                                    <tr>
                                    <th>File name</th>
                                    <th>Delete</th>
                                    <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php foreach ($energySupport as $f) { ?>
                                        <tr id="index<?php echo $f->id; ?>">
                    <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Energy_"); ?>
                                            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                            <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
<?php } ?>
                                </tbody>
                            </table>
                            <div class="clearfix">&nbsp;</div>
                            <div class="text-center">
                                <button type="button" class="org-btn" id="btnEnergyPrevious">Previous</button>
                                <button type="submit" class="org-btn" id="energynext" value="movenext">Next</button>
                                <button type="button" class="org-btn submit button" id="energysave" >Save and Resume Later</button>
                            </div>
<?php echo form_close(); ?> </div>
                    </div>
                </div>
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
                            <iframe width="100%" height="330px" src="https://www.youtube.com/embed/i6DM3E5euRE" frameborder="0" id="video" allowfullscreen></iframe>
    </div>
  </div>
</div>
<script type="text/javascript">
                    $('.close').click(function () {
                        $('#video').attr("src", "https://www.youtube.com/embed/i6DM3E5euRE");
                    });
                    $('.body').click(function () {
                        $('#video').attr("src", "https://www.youtube.com/embed/i6DM3E5euRE");
                    });

                    $(document).ready(function () {
                        $('#btnEnergyPrevious').on('click', function (data) {
                            var fd = $('#energy').serialize();
                            //console.log(fd);
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url('previous/energyajax') ?>',
                                data: fd,
                                success: function (data) {
                                    window.location.href = "<?php echo base_url('air'); ?>";
                                }
                            });
                        });

                        $('#energysave').on('click', function (data) {
                            var fd = $('#energy').serialize();
                            //console.log(fd);
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url('previous/energyajax') ?>',
                                data: fd,
                                success: function (data) {
                                    window.location.href = "<?php echo base_url('logout'); ?>";
                                }
                            });
                        });

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

/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#energynext").click(function(e){
   if($("#Q1E1S1").attr('placeholder')==""  || $("#Q1E1S3").attr('placeholder')==""  || $("#Q1E1S2").attr('placeholder')==""){ 
     if($("#Q1E1S1").val()==""  || $("#Q1E1S3").val()==""  || $("#Q1E1S2").val()==""){ 
      alert("School Must Add Teacher First Name, Last Name & Email ID.");
    e.preventDefault();
  }
   }
});
/*Administrative Record Validation*/
/*Administrative staff (maximum of five staff can be part of the team): */
$("#energynext").click(function(e){
   if($("#Q2E1S1").attr('placeholder')==""  || $("#Q2E1S3").attr('placeholder')==""  || $("#Q2E1S2").attr('placeholder')==""){
      if($("#Q2E1S1").val()=="" || $("#Q2E1S3").val()==""  || $("#Q2E1S2").val()==""){  
    alert("School Must Add Administrative Staff  First Name, Last Name & Email ID.");
  e.preventDefault();
  }
   }
});
/*Student Record Validation*/
/*Student (maximum of five staff can be part of the team): */
$("#energynext").click(function(e){
   if($("#Q3E1S1").attr('placeholder')==""  || $("#Q3E1S2").attr('placeholder')==""  || $("#Q3E1S3").attr('placeholder')==""){ 
    if($("#Q3E1S1").val()==""  || $("#Q3E1S2").val()==""  || $("#Q3E1S3").val()==""){ 
    alert("School Must Add Student First Name, Last Name & Grade.");
  e.preventDefault();
  }
   }
});
  $("#energynext").click(function(e){
/*Q1: Does your school have access to an electricity bill?*/
if($("input[name='Q4E1']:checked").length==0){
alert("Q1: Does your school have access to an electricity bill?");
  e.preventDefault();
}
/*Q2: Does your school have its own vehicles??*/
if($("input[name='Q5E1']:checked").length==0){
 alert("Q2: Does your school have its own vehicles?");
  e.preventDefault();
}
/*Q5: Are there any alternate sources of energy employed/ installed in your school?*/
if($("input[name='Q9E1']:checked").length==0){
 alert("Q5: Are there any alternate sources of energy employed/ installed in your school? ");
  e.preventDefault();
}
/*Q4:  What appliances does your school have?*/
if($("input[name='Q7E2S1']").val()=="" && $("input[name='Q7E2S1']").attr("placeholder")=="" || $("input[name='Q7E3S1']").val()=="" && $("input[name='Q7E3S1']").attr("placeholder")=="" || $("input[name='Q7E4S1']").val()=="" && $("input[name='Q7E4S1']").attr("placeholder")==""|| $("input[name='Q7E5S1']").val()=="" && $("input[name='Q7E5S1']").attr("placeholder")==""|| $("input[name='Q7E6S1']").val()=="" && $("input[name='Q7E6S1']").attr("placeholder")==""|| $("input[name='Q7E7S1']").val()=="" && $("input[name='Q7E7S1']").attr("placeholder")==""|| $("input[name='Q7E8S1']").val()=="" && $("input[name='Q7E8S1']").attr("placeholder")==""|| $("input[name='Q7E9S1']").val()=="" && $("input[name='Q7E9S1']").attr("placeholder")=="" || $("input[name='Q7E10S1']").val()=="" && $("input[name='Q7E10S1']").attr("placeholder")=="" ){
 alert("Q4:  What appliances does your school have?");
  e.preventDefault();
}
/**Q3 Please share if your school uses the following types of energy:**/
if($("input[name='Q6E1']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Electricity from the board (kwh))?");
  e.preventDefault();
}
if($("input[name='Q6E2']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Electricity from generator (diesel) (litres))?");
  e.preventDefault();
}
if($("input[name='Q6E3']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Petrol (litres))?");
  e.preventDefault();
}
if($("input[name='Q6E4']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Diesel (litres))?");
  e.preventDefault();
}
if($("input[name='Q6E5']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(CNG (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E6']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Kerosene (litres))?");
  e.preventDefault();
}
if($("input[name='Q6E7']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Coal (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E8']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Wood (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E9']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Animal waste (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E10']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Solar (kwh))?");
  e.preventDefault();
}
if($("input[name='Q6E11']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Wind (kwh))?");
  e.preventDefault();
}
if($("input[name='Q6E12']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(LPG (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E13']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Piped Natural Gas (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q6E14']:checked").length==0){
 alert("Q3 Please share if your school uses the following types of energy:(Biogas (kilogrammes))?");
  e.preventDefault();
}
if($("input[name='Q9E1']:checked").val()==="Y"){
  if($("input[name='Q9E1S1']:checked").length==0 && $("input[name='Q9E1S2']:checked").length==0 && $("input[name='Q9E1S3']:checked").length==0 && $("input[name='Q9E1S4']:checked").length==0 && $("input[name='Q9E1S5']:checked").length==0){
    alert("Q5(a)If yes, do you use:?");
  e.preventDefault();
  }
}   
});
                </script>
  
  
  
  <script type="text/javascript">
  
  $("input[name='Q9E1']").click(function(){

var solar = $("input[name='Q6E10']:checked").val(); 


    if(solar == 'Y'){

var alternate_source =  $("input[name='Q9E1']:checked").val();

              if(alternate_source == 'N'){
                   
                   alert('You cannot select NO since you have selected Solar in Ques 3')

                   $(this).prop('checked', false); 
}
 }

  });


</script>
  
   
  
