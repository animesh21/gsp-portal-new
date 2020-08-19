<?php $this->load->view('header'); ?>
<style type="text/css">

.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}
 

#Q5E1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 313px;
    text-shadow: 1px 1px 1px #000;
  
}
#Q9E1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 655px;
    text-shadow: 1px 1px 1px #000;
  
}

#Q10E1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 295px;
    text-shadow: 1px 1px 1px #000;
}

#Q4E1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 388px;
    text-shadow: 1px 1px 1px #000;
}
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
  <h1>ENERGY <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--   <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
                        src="<?php echo base_url(); ?>assets/img/video-icon.png"
                        style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
  <p> Prior to answering these questions, please consider using a meter to measure the monthly average amount
    of energy used from the respective energy sources.</p>
  <p class="unit"><strong>The unit of measurement to be used in the Energy section is megajoule (MJ).</strong> </p>
</div>
<?php echo form_open('energy/set', array('id' => "energy")); ?>
<!---Store Value For Vidation----->
<input type="hidden" name="dieselValidation" id="dieselValidation" value="<?php if (isset($other['Q6A2S3D5'])) echo $other['Q6A2S3D5'] ?>" />
<input type="hidden" name="PetrolValidation" id="PetrolValidation" value="<?php if (isset($other['Q6A2S3P5'])) echo $other['Q6A2S3P5'] ?>" />
<input type="hidden" name="CNGValidation" id="CNGValidation" value="<?php if (isset($other['Q6A2S3C5'])) echo $other['Q6A2S3C5'] ?>" />
<!---Store Value For Vidation----->
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
                           value="<?php if (isset($data['Q1E1S1'])) echo $data['Q1E1S1']; ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E1S3" type="text" name="Q1E1S3"
                           placeholder="<?php if (isset($data['Q1E1S3'])) echo $data['Q1E1S3']; ?>"
                           value="<?php if (isset($data['Q1E1S3'])) echo $data['Q1E1S3']; ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1E1S2" type="email" name="Q1E1S2"
                           placeholder="<?php if (isset($data['Q1E1S2'])) echo $data['Q1E1S2']; ?>"
                           value="<?php if (isset($data['Q1E1S2'])) echo $data['Q1E1S2']; ?>"/>
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
                               value="<?php if (isset($data['Q2E1S1'])) echo $data['Q2E1S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2E1S3" type="text" name="Q2E1S3"
                               placeholder="<?php if (isset($data['Q2E1S3'])) echo $data['Q2E1S3'] ?>"
                               value="<?php if (isset($data['Q2E1S3'])) echo $data['Q2E1S3'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2E1S2" type="email" name="Q2E1S2"
                               placeholder="<?php if (isset($data['Q2E1S2'])) echo $data['Q2E1S2'] ?>"
                               value="<?php if (isset($data['Q2E1S2'])) echo $data['Q2E1S2'] ?>"/>
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
                               value="<?php if (isset($data['Q3E1S1'])) echo $data['Q3E1S1'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3E1S2" type="text" name="Q3E1S2"
                               placeholder="<?php if (isset($data['Q3E1S2'])) echo $data['Q3E1S2'] ?>"
                               value="<?php if (isset($data['Q3E1S2'])) echo $data['Q3E1S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3E1S3" type="number" name="Q3E1S3"
                               placeholder="<?php if (isset($data['Q3E1S3'])) echo $data['Q3E1S3'] ?>"
                               value="<?php if (isset($data['Q3E1S3'])) echo $data['Q3E1S3'] ?>"/>
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
      <input class="form-control space-textbox" id="Q3E2S3" type="number" name="Q3E2S3"
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
      <input class="form-control space-textbox" id="Q3E3S3" type="number" name="Q3E3S3"
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
      <input class="form-control space-textbox" id="Q3E4S3" type="number" name="Q3E4S3"
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
      <input class="form-control space-textbox" id="Q3E5S3" type="number" name="Q3E5S3"
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
      <input class="form-control space-textbox" id="Q3E6S3" type="number" name="Q3E6S3"
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
      <input class="form-control space-textbox" id="Q3E7S3" type="number" name="Q3E7S3"
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
      <input class="form-control space-textbox" id="Q3E8S3" type="number" name="Q3E8S3"
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
      <input class="form-control space-textbox" id="Q3E9S3" type="number" name="Q3E9S3"
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
      <input class="form-control space-textbox" id="Q3E10S3" type="number" name="Q3E10S3"
                               placeholder="<?php if (isset($data['Q3E10S3'])) echo $data['Q3E10S3'] ?>"
                               value="<?php echo set_value('Q3E10S3'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">
  <div class="question-text">
    <h6> Task 2: How much energy does your school consume?</h6>
    <p> In this section you will be asked questions related to energy consumption of your school.
      This will involve finding out the different sources of energy used and jotting down the
      monthly consumption.</p>
    <p><strong>To collect data:</strong></p>
    <p> Please collect all the bills that your school receives for its energy consumption, e.g.
      electricity and gas bills. If the frequency of any energy consumption bill is fortnightly,
      bi-monthly, quarterly or half yearly, try to convert them into monthly averages. Take an
      average of the bills for a minimum of four months – e.g January to April. &nbsp;</p>
    <p><strong>Electricity:&nbsp;</strong>The audit team will have to get in touch with the
      administrative staff in the school office to procure the electricity bills.</p>
    <p><strong>Diesel: </strong>Ask the generator attendant to show the log book of fuels and find
      out how many litres are being used. If diesel is being used for transport, the transport
      in-charge will have the register/log book with details about the amount consumed and cost
      paid. Remember the energy output of a generator would be taken only in terms of input, i.e,
      fuel used.</p>
    <p><strong>LPG: </strong>Ask the mess/canteen staff, how many cylinders are used in one month on
      an average. Remember each gas cylinder generally weighs 14.2 kg.</p>
    
    <p><strong>PNG: </strong>If the school has a PNG connection, ask the mess/canteen staff for a copy of the PNG bill, which is usually raised once or twice in a quarter.</p>
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
      <input type="radio" id="Q4E1_1" name="Q4E1" onClick="ElectricityBill(1)"
                                   value="<?php echo set_value('Q4E1', 'Y') ?>" <?php if (isset($data['Q4E1'])) echo $data['Q4E1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline">
      <input type="radio" name="Q4E1" onClick="ElectricityBill(2)"
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
  <br>
  <table width="100%" class="question uploadedfiles">
    <thead>
      <tr>
        <!-- <th>Image</th>-->
        <th>File name</th>
        <th>Delete</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($electricityBills as $f) { ?>
      <tr id="index<?php echo $f->id; ?>">
        <?php 
        //$array = explode('.',$f->file_name); 
     // $count = count($array);
     // $extension = $array[$count-1];
                ?>
        <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
        <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
        file_name ?>" class="img-responsive" />
        </td>
        -->
        <?php //}else{ ?>
        <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php //}?>
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
      <input type="radio" id="Q5E1" onClick="AirCrossLink1(1)" name="Q5E1"
                                   value="<?php echo set_value('Q5E1', 'Y') ?>" <?php if (isset($data['Q5E1'])) echo $data['Q5E1'] == 'Y' ? "checked" : "" ?>
                                   required>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline">
      <input type="radio" id="Q5E2" name="Q5E1" onClick="AirCrossLink1(2)"
                                   value="<?php echo set_value('Q5E1', 'N') ?>" <?php if (isset($data['Q5E1'])) echo $data['Q5E1'] == 'N' ? "checked" : "" ?>
                                   required>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">3</span>Provide the details of total energy consumed by the school:</label>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Source of energy</label>
    </div>
    <div class="col-xs-3">
      <label>Quantity consumed/monthly average</label>
    </div>
    <div class="col-xs-3">
      <label>Energy consumed in Megajoules (MJ)</label>
    </div>
    <div class="col-xs-3">
      <label>Type of use <a class="tt" data-tooltip="Type of use/purpose (mention the type of use in the above table): 1. Lighting 2. Housekeeping 3. Cooking 4. Transport 5. Teaching/ learning aid  6. Burning/Incineration of Waste. If your school does not use a particular source of energy, enter 0."><span class="badge">?</span></a> </label>
      <style type="text/css">
      .tooltip:after, [data-tooltip]:after{
        min-width: 300px;
      }
    </style>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label> Electricity from Discom (kwh) </label>
    </div>
    <div class="col-xs-3">
      <?php
                        if (empty($data['Q6E1S1']))
                            $data['Q6E1S1'] = 0;

                        $attribs = array('name' => 'Q6E1S1', 'placeholder' => $data['Q6E1S1'], "class" => "form-control space-textbox", "id" => "Q6E1S1", "type" => "number", "onchange" => "Megajoules(this.value)", "min" => "0");

                        echo form_input($attribs);
                        ?>
    </div>
    <div class="col-xs-3">
      <input class="form-control" id="Q6E1S2" type="number" min="0" name="Q6E1S2"
                               placeholder="<?php if (isset($data['Q6E1S2'])) echo $data['Q6E1S2'];
                        else echo "0"; ?>"
                               value="<?php echo set_value('Q6E1S3'); ?>" readonly/>
    </div>
    <div class="col-xs-3">
      <?php
                        if (empty($data['Q6E1S3']))
                            $data['Q6E1S3'] = 0;

                        $attribs = array("class" => "form-control", "id" => "Q6E1S3", "type" => "text");

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
                        $attribs = array('name' => 'Q6E2S1', 'placeholder' => $data['Q6E2S1'], "class" => "form-control space-textbox", "id" => "Q6E2S1", "type" => "number", "onchange" => "MegajoulesDiesel(this.value,'Q6E2S2')", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E2S3", "type" => "text");

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

                        $attribs = array('name' => 'Q6E3S1', 'placeholder' => $data['Q6E3S1'], "class" => "form-control space-textbox", "id" => "Q6E3S1", "type" => "number", "onchange" => "MegajoulesPetrol(this.value,'Q6E3S2')", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E3S3", "type" => "text");

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


                        $attribs = array('name' => 'Q6E4S1', 'placeholder' => $data['Q6E4S1'], "class" => "form-control space-textbox", "id" => "Q6E4S1", "type" => "number", "onchange" => "MegajoulesDiesel(this.value,'Q6E4S2')", "min" => "0");

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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E4S3", "type" => "text");

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

                        $attribs = array('name' => 'Q6E5S1', 'placeholder' => $data['Q6E5S1'], "class" => "form-control space-textbox", "id" => "Q6E5S1", "type" => "number", "onchange" => "MegajoulesCNG(this.value,'Q6E5S2')", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E5S3", "type" => "text");

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

                        $attribs = array('name' => 'Q6E6S1', 'placeholder' => $data['Q6E6S1'], "class" => "form-control space-textbox", "id" => "Q6E6S1", "type" => "number", "onchange" => "MegajoulesKerosene(this.value,'Q6E6S2')", "min" => "0");
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

                        $attribs = array('name' => 'Q6E6S3', "class" => "form-control space-textbox", "id" => "Q6E6S3", "type" => "text");
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

                        $attribs = array('name' => 'Q6E7S1', 'placeholder' => $data['Q6E7S1'], "class" => "form-control space-textbox", "id" => "Q6E7S1", "type" => "number", "onchange" => "MegajoulesCoal(this.value)", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E7S3", "type" => "text");

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

                        $attribs = array('name' => 'Q6E16S1', 'placeholder' => $data['Q6E16S1'], "class" => "form-control space-textbox", "id" => "Q6E16S1", "type" => "number", "onchange" => "MegajoulesWood(this.value,'Q6E16S2')", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E16S3", "type" => "text");

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

$attribs = array('name' => 'Q6E8S1', 'placeholder' => $data['Q6E8S1'], "class" => "form-control space-textbox", "id" => "Q6E8S1", "type" => "number", "onchange" => "MegajoulesAnimal(this.value,'Q6E8S2')", "min" => "0");
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

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E8S3", "type" => "text");

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

$attribs = array('name' => 'Q6E9S1', 'placeholder' => $data['Q6E9S1'], "class" => "form-control space-textbox", "id" => "Q6E9S1", "type" => "number", "min" => "0", "onchange" => "ComputeCrossLinkEnergy('Solar',this.value)");
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

$attribs = array('name' => 'Q6E9S3', 'placeholder' => $data['Q6E9S3'], "class" => "form-control space-textbox", "id" => "Q6E9S3", "type" => "text");
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

$attribs = array('name' => 'Q6E10S1', 'placeholder' => $data['Q6E10S1'], "class" => "form-control space-textbox", "id" => "Q6E10S1", "type" => "number", "min" => "0", "onchange" => "ComputeCrossLinkEnergy('Wind',this.value)");
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

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E10S3", "type" => "text");

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

$attribs = array('name' => 'Q6E11S1', 'placeholder' => $data['Q6E11S1'], "class" => "form-control space-textbox", "id" => "Q6E11S1", "type" => "number", "onchange" => "MegajoulesLPG(this.value,'Q6E11S2')", "min" => "0");
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

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E11S3", "type" => "text");
echo form_input('Q6E11S3', $data['Q6E11S3'], $attribs);
?>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label> Piped Natural Gas (Litres or standard cubic metre)</label>
    </div>
    <div class="col-xs-3">
      <?php
if (empty($data['Q6E12S1']))
    $data['Q6E12S1'] = 0;

$attribs = array('name' => 'Q6E12S1', 'placeholder' => $data['Q6E12S1'], "class" => "form-control space-textbox", "id" => "Q6E12S1", "type" => "number", "onchange" => "MegajoulesBiomas(this.value,'Q6E12S2')", "min" => "0");
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

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E12S3", "type" => "text");

echo form_input('Q6E12S3', $data['Q6E12S3'], $attribs);
?>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label> Biogas (Litres or standard cubic metre)</label>
    </div>
    <div class="col-xs-3">
      <?php
if (empty($data['Q6E13S1']))
    $data['Q6E13S1'] = 0;

$attribs = array('name' => 'Q6E13S1', 'placeholder' => $data['Q6E13S1'], "class" => "form-control space-textbox", "id" => "Q6E13S1", "type" => "number", "onchange" => "MegajoulesBiomas(this.value,'Q6E13S2')", "min" => "0");
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

                        $attribs = array("class" => "form-control space-textbox", "id" => "Q6E13S3", "type" => "text");
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

$attribs = array('name' => 'Q6E14S1', 'placeholder' => $data['Q6E14S1'], "class" => "form-control space-textbox", "id" => "Q6E14S1", "type" => "number", "min" => "0");

echo form_input($attribs);
?>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q6E14S2" onChange="computeJoules()" type="number"
                               min="0" name="Q6E14S2"
                               placeholder="<?php if (isset($data['Q6E14S2'])) echo $data['Q6E14S2'];
                        else echo "0"; ?>"
                               value="<?php echo set_value('Q6E14S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <?php
if (empty($data['Q6E14S3']))
    $data['Q6E14S3'] = 0;

$attribs = array("class" => "form-control space-textbox", "id" => "Q6E14S3", "type" => "text");

echo form_input('Q6E14S3', $data['Q6E14S3'], $attribs);
?>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label>Total</label>
    </div>
    <!-- <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q6E15S1" type="number" min="0" name="Q6E15S1"
                               placeholder="<?php if (isset($data['Q6E15S1'])) echo $data['Q6E15S1'];
else echo "0"; ?>"
                               value="<?php echo set_value('Q6E15S1'); ?>" readonly/>
    </div> -->
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q6E15S2" type="number" min="0" name="Q6E15S2"
                               placeholder="<?php if (isset($data['Q6E15S2'])) echo $data['Q6E15S2'];
else echo "0"; ?>"
                               value="<?php echo set_value('Q6E15S2'); ?>" style="margin-left: 247px;" readonly/>
    </div>
    <div class="col-xs-3"></div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Please upload fuel bills</label>
  <br>
  <button class="btn uploadbtn upload" data-id="Fuels Bills" data-toggle="modal" data-target="#airModal"
                        type="button">UPLOAD FILES </button>
</div>
<table width="100%" class="question uploadedfiles">
  <thead>
    <tr>
      <!-- <th>Image</th>-->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($fulesBills as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
           // $array = explode('.',$f->file_name); 
        //$count = count($array);
      // $extension = $array[$count-1];
                ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Fuels_Bills_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="form-group">
  <label><span class="cube">4</span> What appliances does your school have?
  <audio controls id="BEEstarrating" class="audio hide">
    <source src="<?php echo base_url(); ?>assets/audio-files/BEE star rating.MP3" type="audio/mpeg">
    Your browser does not support the audio element. </audio>
  <a class="btn" id="btn" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label>Appliances/Equipments</label>
    </div>
    <div class="col-xs-3">
      <label>Number</label>
    </div>
    <div class="col-xs-3">
      <label>Size/Wattage</label>
    </div>
    <div class="col-xs-3">
      <label>BEE Star Rating</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Air Conditioners</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S1" type="number" min="0" name="Q7E2S1"
                               placeholder="<?php if (isset($data['Q7E2S1'])) echo $data['Q7E2S1'] ?>"
                               value="<?php if (isset($data['Q7E2S1'])) echo $data['Q7E2S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S2" type="text" name="Q7E2S2"
                               placeholder="<?php echo isset($data['Q7E2S2']) ? $data['Q7E2S2'] : "(tonn)" ?>"
                               value="<?php if (isset($data['Q7E2S2'])) echo $data['Q7E2S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E2S3" type="text" name="Q7E2S3"
                               placeholder="<?php if (isset($data['Q7E2S3'])) echo $data['Q7E2S3'] ?>"
                               value="<?php if (isset($data['Q7E2S3'])) echo $data['Q7E2S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Refrigerator</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S1" type="number" min="0" name="Q7E3S1"
                               placeholder="<?php if (isset($data['Q7E3S1'])) echo $data['Q7E3S1'] ?>"
                               value="<?php if (isset($data['Q7E3S1'])) echo $data['Q7E3S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S2" type="text" name="Q7E3S2"
                               placeholder="<?php echo isset($data['Q7E3S2']) ? $data['Q7E3S2'] : "(litres)" ?>"
                               value="<?php if (isset($data['Q7E3S2'])) echo $data['Q7E3S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E3S3" type="text" name="Q7E3S3"
                               placeholder="<?php if (isset($data['Q7E3S3'])) echo $data['Q7E3S3'] ?>"
                               value="<?php if (isset($data['Q7E3S3'])) echo $data['Q7E3S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Microwave</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S1" type="number" min="0" name="Q7E4S1"
                               placeholder="<?php if (isset($data['Q7E4S1'])) echo $data['Q7E4S1'] ?>"
                               value="<?php if (isset($data['Q7E4S1'])) echo $data['Q7E4S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S2" type="text" name="Q7E4S2"
                               placeholder="<?php echo isset($data['Q7E4S2']) ? $data['Q7E4S2'] : "(Watts)" ?>"
                               value="<?php if (isset($data['Q7E4S2'])) echo $data['Q7E4S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E4S3" type="text" name="Q7E4S3"
                               placeholder="<?php if (isset($data['Q7E4S3'])) echo $data['Q7E4S3'] ?>"
                               value="<?php if (isset($data['Q7E4S3'])) echo $data['Q7E4S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Tube Lights</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S1" type="number" min="0" name="Q7E5S1"
                               placeholder="<?php if (isset($data['Q7E5S1'])) echo $data['Q7E5S1'] ?>"
                               value="<?php if (isset($data['Q7E5S1'])) echo $data['Q7E5S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S2" type="text" name="Q7E5S2"
                               placeholder="<?php echo isset($data['Q7E5S2']) ? $data['Q7E5S2'] : "(Watts)" ?>"
                               value="<?php if (isset($data['Q7E5S2'])) echo $data['Q7E5S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E5S3" type="text" name="Q7E5S3"
                               placeholder="<?php if (isset($data['Q7E5S3'])) echo $data['Q7E5S3'] ?>"
                               value="<?php if (isset($data['Q7E5S3'])) echo $data['Q7E5S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> CFL Bulbs</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S1" type="number" min="0" name="Q7E6S1"
                               placeholder="<?php if (isset($data['Q7E6S1'])) echo $data['Q7E6S1'] ?>"
                               value="<?php if (isset($data['Q7E6S1'])) echo $data['Q7E6S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S2" type="text" name="Q7E6S2"
                               placeholder="<?php echo isset($data['Q7E6S2']) ? $data['Q7E6S2'] : "(Watts)" ?>"
                               value="<?php if (isset($data['Q7E6S2'])) echo $data['Q7E6S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E6S3" type="text" name="Q7E6S3"
                               placeholder="<?php if (isset($data['Q7E6S3'])) echo $data['Q7E6S3'] ?>"
                               value="<?php if (isset($data['Q7E6S3'])) echo $data['Q7E6S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> LED Lights</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S1" type="number" min="0" name="Q7E7S1"
                               placeholder="<?php if (isset($data['Q7E7S1'])) echo $data['Q7E7S1'] ?>"
                               value="<?php if (isset($data['Q7E7S1'])) echo $data['Q7E7S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S2" type="text" name="Q7E7S2"
                               placeholder="<?php echo isset($data['Q7E7S2']) ? $data['Q7E7S2'] : "(Watts)" ?>"
                               value="<?php if (isset($data['Q7E7S2'])) echo $data['Q7E7S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E7S3" type="text" name="Q7E7S3"
                               placeholder="<?php if (isset($data['Q7E7S3'])) echo $data['Q7E7S3'] ?>"
                               value="<?php if (isset($data['Q7E7S3'])) echo $data['Q7E7S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3"> Fans</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S1" type="number" min="0" name="Q7E8S1"
                               placeholder="<?php if (isset($data['Q7E8S1'])) echo $data['Q7E8S1'] ?>"
                               value="<?php if (isset($data['Q7E8S1'])) echo $data['Q7E8S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S2" type="text" name="Q7E8S2"
                               placeholder="<?php echo isset($data['Q7E8S2']) ? $data['Q7E8S2'] : "(Watts)" ?>"
                               value="<?php if (isset($data['Q7E8S2'])) echo $data['Q7E8S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q7E8S3" type="text" name="Q7E8S3"
                               placeholder="<?php if (isset($data['Q7E8S3'])) echo $data['Q7E8S3'] ?>"
                               value="<?php if (isset($data['Q7E8S3'])) echo $data['Q7E8S3'] ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Please upload pictures of the five star appliances used by the school.</label>
  <br>
  <button class="btn uploadbtn upload" data-id="Five Star Appliances" data-toggle="modal" data-target="#airModal"
                        type="button">UPLOAD FILES </button>
</div>
<table width="100%" class="question uploadedfiles">
  <thead>
    <tr>
      <!--<th>Image</th>-->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($appliancesBills as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
            
         // $array = explode('.',$f->file_name); 
       //   $count = count($array);
       // $extension = $array[$count-1];
          ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Five_Star_Appliances_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="form-group">
  <label>
  <h6> Task 3: Is your school using any renewable sources of energy? </h6>
  </label>
</div>
<div class="form-group">
  <label><span class="cube">5</span>What is the average number of sunny days (in one year) in your area? <a
                        class="kplink"
                        href="http://www.greenschoolsprogramme.org/knowledge-bank/energy/#averageConsumption"
                        target="_blank"> </a></label>
  <input class="form-control space-textbox" id="Q8E1" type="number" min="0" max="366" name="Q8E1"
                       placeholder="<?php if (isset($data['Q8E1'])) echo $data['Q8E1'] ?>"
                       value="<?php if (isset($data['Q8E1'])) echo $data['Q8E1'] ?>"/>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">6</span>Are there any alternate sources of energy
  employed/ installed in your school? <a class="kplink"
          href="http://www.greenschoolsprogramme.org/knowledge-&#10;&#10;bank/energy/#averageConsumption"
                  target="_blank"> </a> <a class="tt" data-tooltip="Do not add solar water heater(s) here. Consider only solar panels which provide electricity."><span
                            class="badge">?</span></a></label>
  <ul class="list-inline">
    <li>
      <label class="">
      <input type="radio" id="Q9E1" name="Q9E1" onClick="AlternativeSource(1)"
                                   value="<?php echo set_value('Q9E1', 'Y') ?>" <?php if (isset($data['Q9E1'])) echo $data['Q9E1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="">
      <input type="radio" id="Q9E2" name="Q9E1" onClick="AlternativeSource(2)"
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
  <?php } else { ?>
  <div class="form-group" id="alternativeEnergy" style="display:none">
    <?php } ?>
    <label class="control-label">If yes, please upload a picture of the alternative source of energy
    installed that is currently in use.</label>
    
  </div>
  <?php
if (isset($data['Q9E1']))
    if ($data['Q9E1'] == 'Y') {
        ?>
  <div class="form-group" id="typeofenergy">
    <?php } else { ?>
    <div class="form-group" id="typeofenergy" style="display:none">
      <?php } else {
    ?>
      <div class="form-group" id="typeofenergy" style="display:none">
        <?php } ?>
        <div class="form-group">
          <label><span class="cube">6(a)</span>If yes, do you use:</label>
          <ul class="list-unstyled">
            <li>
              <label>Solar</label>
              <input type="checkbox" name="Q9E1S1" id="Solar"
              value="<?php echo set_value('Q9E1S1', 1); ?>" <?php if (isset($data['Q9E1S1'])) echo set_checkbox('Q9E1S1', '1', true); ?>/>
            </li>
            <li>
              <label>Wind</label>
              <input type="checkbox" name="Q9E1S2" id="Wind"
                                                   value="<?php echo set_value('Q9E1S2', 1); ?>" <?php if (isset($data['Q9E1S2'])) echo set_checkbox('Q9E1S2', '1', true); ?>/>
            </li>
            <li>
              <label>Hydro</label>
              <input type="checkbox" name="Q9E1S3" id="Hydro"
                                                   value="<?php echo set_value('Q9E1S3', 1); ?>" <?php if (isset($data['Q9E1S3'])) echo set_checkbox('Q9E1S3', '1', true); ?>/>
            </li>
            <li>
              <label>Biogas Plant</label>
              <input type="checkbox" name="Q9E1S5"
                                                   value="<?php echo set_value('Q9E1S5', 1); ?>" <?php if (isset($data['Q9E1S5'])) echo set_checkbox('Q9E1S5', '1', true); ?>/>
            </li>
           <!--  <li>
              <label>Combination of solar and wind</label>
              <input type="checkbox" name="Q9E1S4" id="Combination"
                                                   value="<?php// echo set_value('Q9E1S4', 1); ?>" <?php// if (isset($data['Q9E1S4'])) echo set_checkbox('Q9E1S4', '1', true); ?>/>
            </li> -->
          </ul>
    
    
    <br>
    <button class="btn uploadbtn upload" data-id="Alternative Source of Energy" data-toggle="modal"
                                data-target="#airModal" type="button">UPLOAD FILES </button>
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
        <?php foreach ($alternativeResource as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php 
            
       // $array = explode('.',$f->file_name); 
       // $count = count($array);
     // $extension = $array[$count-1];
        ?>
          <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
          <!-- <td><img style="width:62px; height:46px;"  src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
          file_name ?>" class="img-responsive" />
          </td>
          -->
          <?php //}else{ ?>
          <!--   <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
          <?php //}?>
          <?php $name = str_replace(" ", "_", $f->name . "_Alternative_Source_of_Energy_"); ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    
    
        </div>
      </div>
       
        <div class="form-group">
          <label><span class="cube">7</span>Does your school use a solar water heater(s)?</label>
          <ul class="list-inline">
            <li>
              <label>Yes</label>
              <input type="radio" name="Q10E1"
              value="<?php echo set_value('Q10E1', 'Y') ?>" <?php if (isset($data['Q10E1'])) echo $data['Q10E1'] == 'Y' ? "checked" : "" ?>/>
            </li>
            <li>
              <label>No</label>
              <input type="radio" name="Q10E1"
              value="<?php echo set_value('Q10E1', 'N') ?>" <?php if (isset($data['Q10E1'])) echo $data['Q10E1'] == 'N' ? "checked" : "" ?>/>
            </li>
          </ul>
        </div>      
      
      <div class="form-group" id="WastePolicy">
        <label class="control-label">Please upload supporting documents:</label>
        <br>
        &bull;Pictures of audit team doing survey<br/>
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
            <!-- <th>Image</th>-->
            <th>File name</th>
            <th>Delete</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($energySupport as $f) { ?>
          <tr id="index<?php echo $f->id; ?>">
            <?php 
            
          //$array = explode('.',$f->file_name); 
         // $count = count($array);
       // $extension = $array[$count-1];
          ?>
            <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
            <!--<td><img style="width:62px; height:46px;"  src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
            file_name ?>" class="img-responsive" />
            </td>
            -->
            <?php //}else{ ?>
            <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
            <?php //}?>
            <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Energy_"); ?>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
            <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

<br/>

 <div class="form-group">
          <label><span class="cube">8</span>Did you avail any state subsidy for installation?</label>
          <ul class="list-inline">
            <li>
              <label>Yes</label>
              <input type="radio" name="Q11E1"
              value="<?php echo set_value('Q11E1', 'Y') ?>" <?php if (isset($data['Q11E1'])) echo $data['Q11E1'] == 'Y' ? "checked" : "" ?>/>
            </li>
            <li>
              <label>No</label>
              <input type="radio" name="Q11E1"
              value="<?php echo set_value('Q11E1', 'N') ?>" <?php if (isset($data['Q11E1'])) echo $data['Q11E1'] == 'N' ? "checked" : "" ?>/>
            </li>
          </ul>
        </div>

  <div class="section_A" style="display: none;">
      <div class="form-group">
        <label class="control-label">(A) Solar rooftop systems</label>
      </div>
        <div class="form-group">           
          <label class="control-label"><span class="cube">9</span>What is the installed capacity of solar photovoltaic (PV) panels on the school rooftop (in kW)?  <a class="tt" data-tooltip="Installed capacity is the maximum electric output that can be produced by a power plant under specific conditions. A solar rooftop plant's capacity, being small, will be expressed in terms of kilowatt (kW). The information on installed capacity will be available on the solar rooftop plant's online performance monitoring system as well as the back side of each solar panel. The values of all the panels can be summed to estimate the installed capacity. Alternatively, it would also be mentioned in the order for installation placed with the solar rooftop installer or vendor."><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q13E1" type="text" onkeypress="return isNumberKey(event)" name="Q13E1"  placeholder="<?php if (isset($data['Q13E1'])) echo $data['Q13E1']; ?>" value="<?php if (isset($data['Q13E1'])) echo $data['Q13E1']; ?>">
        </div>   
         
        <div class="form-group">           
          <label class="control-label"><span class="cube">10</span>What is the connected load of the school (kW)?<a class="tt" data-tooltip="The connected load of a consumer is the load in kilowatt (kW) which the power distribution company has agreed to supply to the consumer. The electricity bill of the consumer (i.e. school) will contain this information, mentioned as connected load, sanctioned load or just load. "><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q14E1" type="text" onkeypress="return isNumberKey(event)" name="Q14E1" placeholder="<?php if (isset($data['Q14E1'])) echo $data['Q14E1']; ?>" value="<?php if (isset($data['Q14E1'])) echo $data['Q14E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">11</span>What is the size of inverters associated with the solar photovoltaic panel (PV)? </label> <br/>
          <span >Inverters are required to convert the direct current (DC) output generated by solar rooftop systems or batteries to alternating current (AC) for further use. In general, inverter wattage (expressed in kilo-volt-amperes or kVA) is 20-25 per cent more than the installed capacity to avoid the loss of excess DC.</span>  <br/> <br/>

<input class="form-control space-textbox" id="Q15E1" type="text" onkeypress="return isNumberKey(event)" name="Q15E1" placeholder="<?php if (isset($data['Q15E1'])) echo $data['Q15E1']; ?>" value="<?php if (isset($data['Q15E1'])) echo $data['Q15E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">12</span>What operational model has been adopted for the solar rooftop system?</label> <br/>
          <span>Solar rooftop systems can either be standalone (off-grid) or grid-connected. A standalone system is wired only to the house and requires a battery back up to store any excess power generated or to meet power deficits. Example: standalone solar street lights, solar lamps, rooftop panels <button class="btn-btn-primary" id="readmore" style="margin: 2px 5px; min-width: 95px; padding: 3px 3px; text-transform:none;" >Read more+</button> </span>
<span class="read_1" style="display: none;">Grid-interactive systems, on the other hand, utilise the grid for storing and extracting electricity, as per the requirement. Example: Solar rooftop panels, on ground solar panels etc. Interactions with the grid can be facilitated either via gross or net metering. <br/>
 Under gross metering, all generated electricity is sold to the grid at a feed-in-tariff determined by the state electricity regulatory commission. The consumer continues to procure the required power from the distribution company, as per their tariff bracket. The bills are either settled individually or as net billing.<br/> 
 Under net metering, the consumer uses all the energy produced by the solar rooftop (SRT) system and relies on the grid for any excess energy required. The consumer is only charged for the excess energy they consume, as per their tariff bracket. Any surplus generation can be fed back to the grid. <br/>
  This information will also be reflected in the electricity bill of the school as a net-metering billing would only be for net consumption.<br/>
Generally, on-grid systems have the benefit of transferring surplus power to the grid, while in off-grid systems surplus power may get wasted if there is not enough battery storage available.
 <button class="btn-btn-primary" id="readless" style="margin: 2px 5px; min-width: 95px; padding: 3px 3px; text-transform:none; margin-bottom: 20px" >Read less</button> </span>

<ul class="list-inline">
            <li>              
              <input type="radio" name="Q16E1" value="<?php echo set_value('Q16E1', '1') ?>" <?php if (isset($data['Q16E1'])) echo $data['Q16E1'] == '1' ? "checked" : "" ?>/>
              <label>Off-grid</label>
            </li>
 
            <li>              
              <input type="radio" name="Q16E1" value="<?php echo set_value('Q16E1', '2') ?>" <?php if (isset($data['Q16E1'])) echo $data['Q16E1'] == '2' ? "checked" : "" ?>/>
              <label>On-grid net metering</label>
            </li>

            <li>              
              <input type="radio" name="Q16E1" value="<?php echo set_value('Q16E1', '3') ?>" <?php if (isset($data['Q16E1'])) echo $data['Q16E1'] == '3' ? "checked" : "" ?>/>
              <label>On-grid gross metering</label>
            </li>
          </ul>


        </div>

      <div class="form-group">           
          <label class="control-label"><span class="cube">13</span>What is the power generated by the solar rooftop panel in a year (kWh)?<a class="tt" data-tooltip="Information on power generation by the solar rooftop system can be sourced either from the solar rooftop plant’s online performance monitoring system or from the electricity bill."><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q19E1" type="text" onkeypress="return isNumberKey(event)" name="Q19E1" placeholder="<?php if (isset($data['Q19E1'])) echo $data['Q19E1']; ?>" value="<?php if (isset($data['Q19E1'])) echo $data['Q19E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">14</span>What are the operation and maintenance (O&M)  practices adopted?<a class="tt" data-tooltip="Solar rooftop systems require periodic cleaning as accumulation of dust can lead to significant decline in performance."><span class="badge">?</span></a></label>


          <ul class="list-unstyled">             
            <li>              
              <input type="checkbox" name="Q9E1S1020" id="Q9E1S1020" value="<?php echo set_value('Q9E1S1020', 1); ?>" <?php if (isset($data['Q9E1S1020'])) echo "checked" ?>/>              
              <label>Wet cleaning at least once a week</label>
            </li>
            <li>              
              <input type="checkbox" name="Q9E1S1021" id="Q9E1S1021" value="<?php echo set_value('Q9E1S1021', 2); ?>" <?php if (isset($data['Q9E1S1021'])) echo "checked" ?>/>
              <label>Dry cleaning daily</label>
            </li>
             <li>              
              <input type="checkbox" name="Q9E1S1022" id="Q9E1S1022" value="<?php echo set_value('Q9E1S1022', 3); ?>" <?php if (isset($data['Q9E1S1022'])) echo "checked" ?>/>
              <label>Annual maintenance contract with the vendor for maintenance of electrical and other technical components</label>
            </li>
             <li>              
              <input type="checkbox" name="Q9E1S1023" id="Q9E1S1023" value="<?php echo set_value('Q9E1S1023', 4); ?>" <?php if (isset($data['Q9E1S1023'])) echo "checked" ?>/>
              <label>Regular monitoring of the integrated software and real-time tracking of performance (usually through a smart phone or computer)</label>
            </li>             
          </ul>
        </div>
     </div>

      <div class="form-group">
        <label class="control-label">(B) Advanced questions on other renewable energy systems</label>
      </div>
        <div class="form-group">           
          <label class="control-label"><span class="cube">15</span>What is the non-solar source of renewable energy (RE) for the school?
           </span></a></label>

<ul class="list-unstyled">
   <li>
     <span style="font-weight: bold; font-size: 18px">a. </span><label style="margin-left:5px">Biofuel</label>
  <input type="checkbox" name="Q9E1S101" id="Q9E1S101" value="<?php echo set_value('Q9E1S101', 1); ?>" <?php if (isset($data['Q9E1S101'])) echo  "checked"; ?>/>

              <div class="biogas" style="display: none" >
              <div class="biogas_1" style="margin-left: 45px">
              <span style="font-weight: bold; font-size: 18px">i. </span>
              <input type="checkbox" name="Q9E1S1024" id="Q9E1S1024" value="<?php echo set_value('Q9E1S1024', 1); ?>" <?php if (isset($data['Q9E1S1024'])) echo  "checked";?>/>
              <label>Biogas</label>
              </div> 
              <div class="biogas_4" style="margin-left: 45px">
              <span style="font-weight: bold; font-size: 18px">ii. </span>
               <input type="checkbox" name="Q9E1S1025" id="Q9E1S1025" value="<?php echo set_value('Q9E1S1025', 2); ?>" <?php if (isset($data['Q9E1S1025'])) echo  "checked"; ?>/>
              <label>Biomass</label>
              </div>
            </div>
             
               
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">b. </span><label style="margin-left:5px">Wind</label>
              <input type="checkbox" name="Q9E1S102" id="Q9E1S102" value="<?php echo set_value('Q9E1S102', 2); ?>" <?php if (isset($data['Q9E1S102'])) echo  "checked";?>/>               
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">c. </span><label style="margin-left:5px">Small hydro</label>
              <input type="checkbox" name="Q9E1S103" id="Q9E1S103" value="<?php echo set_value('Q9E1S103', 3); ?>" <?php if (isset($data['Q9E1S103'])) echo  "checked"; ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">d. </span><label style="margin-left:5px">Other</label>
              <input type="checkbox" name="Q27E3" id="Q27E3" value="<?php echo set_value('Q27E3', 4); ?>" <?php if (isset($data['Q27E3'])) echo  "checked"; ?>/>
              </li>
              <div class="details" style="margin-left:25px" >
                <label>Give details:</label>
              <input onkeypress="return /[a-z]/i.test(event.key)" class="form-control space-textbox" id="Q27E1" type="text" name="Q27E1"  placeholder="<?php if (isset($data['Q27E1'])) echo $data['Q27E1']; ?>" value="<?php if (isset($data['Q27E1'])) echo $data['Q27E1']; ?>">
              </div>

            
            <li>
              <span style="font-weight: bold; font-size: 18px">e. </span><label style="margin-left:5px">Not applicable</label>
              <input type="checkbox" name="Q27E2" id="Q27E2" value="<?php echo set_value('Q27E2', 5); ?>" <?php if (isset($data['Q27E2'])) echo "checked" ?>/>
            </li>
           
          </ul>
        </div>
  <div class="displayNone">
        <div class="form-group">           
          <label class="control-label"><span class="cube">16</span>What is the size of the invertors associated with the non-solar RE system (kVA)?</label>

<input class="form-control space-textbox" id="Q33E1" type="text" onkeypress="return isNumberKey(event)" name="Q33E1" placeholder="<?php if (isset($data['Q33E1'])) echo $data['Q33E1']; ?>" value="<?php if (isset($data['Q33E1'])) echo $data['Q33E1']; ?>">
        </div>

        
        <div class="form-group">           
          <label class="control-label"><span class="cube">17</span>What is the installed capacity of non-solar RE system in your school (kW)?<a class="tt" data-tooltip="Installed capacity is rated (full-load) generation capacity of a power plant."><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q29E1" type="text" onkeypress="return isNumberKey(event)" name="Q29E1" placeholder="<?php if (isset($data['Q29E1'])) echo $data['Q29E1']; ?>" value="<?php if (isset($data['Q29E1'])) echo $data['Q29E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">18</span>What is the connected load of the school (kW)?<a class="tt" data-tooltip="The connected load of a consumer is the load in kilowatt (kW) which the power distribution company has agreed to supply to the consumer"><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q30E1" type="text" onkeypress="return isNumberKey(event)" name="Q30E1" placeholder="<?php if (isset($data['Q30E1'])) echo $data['Q30E1']; ?>" value="<?php if (isset($data['Q30E1'])) echo $data['Q30E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">19</span>What is the power generated by the non-solar RE system in a year (kWh)?<a class="tt" data-tooltip="Information on power generation by the non- solar RE system can be sourced from the performance monitoring system or from the bill."><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q31E1" type="text" onkeypress="return isNumberKey(event)" name="Q31E1" placeholder="<?php if (isset($data['Q31E1'])) echo $data['Q31E1']; ?>" value="<?php if (isset($data['Q31E1'])) echo $data['Q31E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">20</span>What are the operation and maintenance (O&M)  practices adopted for the installed non-solar RE plant?</label>


            <ul class="list-unstyled">             
            <li>              
              <input type="checkbox" name="Q9E1S1026" id="Q9E1S1026" value="<?php echo set_value('Q9E1S1026', 1); ?>" <?php if (isset($data['Q9E1S1026'])) echo "checked" ?>/>              
              <label>Annual maintenance contract with the vendor for maintenance of electrical and other technical components</label>
            </li>
            <li>              
              <input type="checkbox" name="Q9E1S1027" id="Q9E1S1027" value="<?php echo set_value('Q9E1S1027', 2); ?>" <?php if (isset($data['Q9E1S1027'])) echo "checked" ?>/>
              <label>Regular monitoring of the integrated software and real-time tracking of performance (usually through a smart phone or computer)</label>
            </li>                       
          </ul>
        </div>
  </div>


<div class="section_C" style="display: none">

      <div class="form-group">
        <label class="control-label">(C) Advanced questions on Biofuels</label>
      </div>
        <div class="form-group">           
          <label class="control-label"><span class="cube">21</span>What are the different types of biomass used by the school?
           </span></a></label>

<ul class="list-unstyled">             
            <li>              
              <input type="checkbox" name="Q9E1S106" id="Q9E1S106" value="<?php echo set_value('Q9E1S106', 1); ?>" <?php if (isset($data['Q9E1S106'])) echo "checked" ?>/>              
              <label>Food waste</label>
            </li>
            <li>              
              <input type="checkbox" name="Q9E1S107" id="Q9E1S107" value="<?php echo set_value('Q9E1S107', 2); ?>" <?php if (isset($data['Q9E1S107'])) echo "checked" ?>/>
              <label>Animal solid waste (cow dung, etc.)</label>
            </li>
             <li>              
              <input type="checkbox" name="Q9E1S108" id="Q9E1S108" value="<?php echo set_value('Q9E1S108', 3); ?>" <?php if (isset($data['Q9E1S108'])) echo "checked" ?>/>
              <label>Wood chips/ pellets</label>
            </li>
             <li>              
              <input type="checkbox" name="Q9E1S109" id="Q9E1S109" value="<?php echo set_value('Q9E1S109', 4); ?>" <?php if (isset($data['Q9E1S109'])) echo "checked" ?>/>
              <label>Grass/straw based/dry leaves</label>
            </li>
            <li>              
              <input type="checkbox" name="Q9E1S1010" id="Q9E1S1010" value="<?php echo set_value('Q9E1S1010', 5); ?>" <?php if (isset($data['Q9E1S1010'])) echo "checked" ?>/>
              <label>Others</label>              
            </li>             
          </ul>
          <div class="other_option" style="margin-left: 25px" >
              <label>Give details:</label>
              <input class="form-control space-textbox" id="Q34E1" onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" type="text" name="Q34E1" placeholder="<?php if (isset($data['Q34E1'])) echo $data['Q34E1']; ?>" value="<?php if (isset($data['Q34E1'])) echo $data['Q34E1']; ?>">
             </div>
        </div>

        
        <div class="form-group">           
          <label class="control-label"><span class="cube">22</span>How much waste is utilized by the biomass plant in a day (in kg)?</label>

<input class="form-control space-textbox" id="Q38E1" type="text" onkeypress="return isNumberKey(event)" name="Q38E1" placeholder="<?php if (isset($data['Q38E1'])) echo $data['Q38E1']; ?>" value="<?php if (isset($data['Q38E1'])) echo $data['Q38E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">23</span>For what purpose is the energy from biofuel generated in school used?
           </span></a></label>

<ul class="list-unstyled">             
            <li>
              <span style="font-weight: bold; font-size: 18px">a. </span><label style="margin-left:5px">Electricity</label>
              <input type="checkbox" name="Q9E1S1011" id="Q9E1S1011" value="<?php echo set_value('Q9E1S1011', 1); ?>" <?php if (isset($data['Q9E1S1011'])) echo "checked" ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">b. </span><label style="margin-left:5px">Heating</label>
              <input type="checkbox" name="Q9E1S1012" id="Q9E1S1012" value="<?php echo set_value('Q9E1S1012', 2); ?>" <?php if (isset($data['Q9E1S1012'])) echo "checked" ?>/>
            </li>
             <li>
              <span style="font-weight: bold; font-size: 18px">c. </span><label style="margin-left:5px">Cooking</label>
              <input type="checkbox" name="Q9E1S1013" id="Q9E1S1013" value="<?php echo set_value('Q9E1S1013', 3); ?>" <?php if (isset($data['Q9E1S1013'])) echo "checked" ?>/>
            </li>
             
             
          </ul>
        </div>
        <div class="que_21a" style="display: none" >
        <div class="form-group">           
          <label class="control-label"><span class="cube">23(a)</span>If biogas is being used for cooking:</label>
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">a.</span>What is the approximate capacity of the biogas unit (in terms of m3/day)?<a class="tt" data-tooltip="Likely to be mentioned on the gasifier itself /or the order placed with vendor."><span class="badge">?</span></a></label>

<input class="form-control space-textbox" id="Q42E1" type="text" onkeypress="return isNumberKey(event)" name="Q42E1" placeholder="<?php if (isset($data['Q42E1'])) echo $data['Q42E1']; ?>" value="<?php if (isset($data['Q42E1'])) echo $data['Q42E1']; ?>">
        </div>

        <div class="form-group">           
          <label class="control-label"><span class="cube">b.</span>Do you add water in the biogas unit?</label>
          <ul class="list-inline">
          <li>
            <label class="radio-inline">
            <input type="radio" name="Q43E1" id="Q43E1" class="Q43E1_yes" value="<?php echo set_value('Q43E1', '1') ?>" <?php if (isset($data['Q43E1'])) echo $data['Q43E1'] == '1' ? "checked" : "" ?>/>
            Yes </label>
          </li>
          <li>
            <label class="radio-inline">
            <input type="radio" name="Q43E1" value="<?php echo set_value('Q43E1', '2') ?>" <?php if (isset($data['Q43E1'])) echo $data['Q43E1'] == '2' ? "checked" : "" ?>/>
            No </label>
          </li>
        </ul> <br/>
        <div class="form-group" style="display:none" id="Q43E1_b">
        <label class="control-label"><span class="cube">23(b)(i)</span>If yes, what is the quantity of water (in litres) added per kg of waste (in a day)?</label>
<input class="form-control space-textbox" id="Q44E1" type="text" onkeypress="return isNumberKey(event)" name="Q44E1" placeholder="<?php if (isset($data['Q44E1'])) echo $data['Q44E1']; ?>" value="<?php if (isset($data['Q44E1'])) echo $data['Q44E1']; ?>">
        </div>
      </div>

 <div class="form-group">           
          <label class="control-label"><span class="cube">c.</span>What are the components of the biogas unit?</span></a></label>

<ul class="list-unstyled">             
            <li>
              <span style="font-weight: bold; font-size: 18px">a. </span><label style="margin-left:5px">Inlet pipe</label>
              <input type="checkbox" name="Q9E1S1014" id="Q9E1S1014" value="<?php echo set_value('Q9E1S1014', 1); ?>" <?php if (isset($data['Q9E1S1014'])) echo "checked" ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">b. </span><label style="margin-left:5px">Drum/chamber</label>
              <input type="checkbox" name="Q9E1S1015" id="Q9E1S1015" value="<?php echo set_value('Q9E1S1015', 2); ?>" <?php if (isset($data['Q9E1S1015'])) echo "checked" ?>/>
            </li>
             <li>
              <span style="font-weight: bold; font-size: 18px">c. </span><label style="margin-left:5px">Outlet pipe</label>
              <input type="checkbox" name="Q9E1S1016" id="Q9E1S1016" value="<?php echo set_value('Q9E1S1016', 3); ?>" <?php if (isset($data['Q9E1S1016'])) echo "checked" ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">d. </span><label style="margin-left:5px">Scrubber</label>
              <input type="checkbox" name="Q9E1S1017" id="Q9E1S1017" value="<?php echo set_value('Q9E1S1017', 4); ?>" <?php if (isset($data['Q9E1S1017'])) echo "checked" ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">e. </span><label style="margin-left:5px">Gas outlet</label>
              <input type="checkbox" name="Q9E1S1018" id="Q9E1S1018" value="<?php echo set_value('Q9E1S1018', 5); ?>" <?php if (isset($data['Q9E1S1018'])) echo "checked" ?>/>
            </li>
            <li>
              <span style="font-weight: bold; font-size: 18px">f. </span><label style="margin-left:5px">Gas pump</label>
              <input type="checkbox" name="Q9E1S1019" id="Q9E1S1019" value="<?php echo set_value('Q9E1S1019', 6); ?>"<?php if (isset($data['Q9E1S1019'])) echo "checked" ?>>
            </li>  
          </ul>
        </div>

        <div class="form-group">
          <label class="control-label"><span class="cube">d.</span>How many hours of cooking is done per day using biogas? </label>
          <input class="form-control space-textbox" id="Q51E1" type="text" onkeypress="return isNumberKey(event)" name="Q51E1" placeholder="<?php if (isset($data['Q51E1'])) echo $data['Q51E1']; ?>" value="<?php if (isset($data['Q51E1'])) echo $data['Q51E1']; ?>">
        </div>

        <div class="form-group">
          <label class="control-label"><span class="cube">e.</span>What other fuel sources are used for cooking (LPG or PNG etc.)?</label>
          <input class="form-control space-textbox" id="Q52E1" type="text" name="Q52E1" placeholder="<?php if (isset($data['Q52E1'])) echo $data['Q52E1']; ?>" value="<?php if (isset($data['Q52E1'])) echo $data['Q52E1']; ?>">
        </div>

        <div class="form-group">
          <label class="control-label"><span class="cube">f.</span>How many hours of cooking is done per day using other sources?</label>
          <input class="form-control space-textbox" id="Q53E1" type="text" onkeypress="return isNumberKey(event)" name="Q53E1" placeholder="<?php if (isset($data['Q53E1'])) echo $data['Q53E1']; ?>" value="<?php if (isset($data['Q53E1'])) echo $data['Q53E1']; ?>">
        </div>
       </div>
     </div>


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
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/i6DM3E5euRE" frameborder="0"
                                    id="video" allowfullscreen></iframe>
    </div>
  </div>
</div>


<script>
  jQuery(document).ready(function(){
  
  jQuery('#energy').validate({
    rules:{
          Q1E1S1:{
          required:true,
        },
        Q1E1S3:{
          required:true,
        },
        Q1E1S2:{
          required:true,
        },
        Q2E1S1:{
          required:true,
        },
         Q2E1S3:{
          required:true,
        },
         Q2E1S2:{
          required:true,
        },
         Q3E1S1:{
          required:true,
        },
         Q3E1S2:{
          required:true,
        },
         Q3E1S3:{
          required:true,
        }, 
        Q4E1:{
          required:true,
        }, 
        Q5E1:{
          required:true,
        }, 
        Q7E2S1:{
          required:true,
        },
        Q7E2S2:{
          required:true,
        },
        Q7E2S3:{
          required:true,
        },
        Q7E3S1:{
          required:true,
        },
        Q7E3S2:{
          required:true,
        },
        Q7E3S3:{
          required:true,
        },
        Q7E4S1:{
          required:true,
        },
        Q7E4S2:{
          required:true,
        },
        Q7E4S3:{
          required:true,
        },
        Q7E5S1:{
          required:true,
        },
        Q7E5S2:{
          required:true,
        },
        Q7E5S3:{
          required:true,
        },
        Q7E6S1:{
          required:true,
        },
        Q7E6S2:{
          required:true,
        },
        Q7E6S3:{
          required:true,
        },
        Q7E7S1:{
          required:true,
        },
        Q7E7S2:{
          required:true,
        },
        Q7E8S1:{
          required:true,
        },
        Q7E8S2:{
          required:true,
        },
        Q7E8S3:{
          required:true,
        },
        Q7E7S3:{
          required:true,
        },
        
        Q8E1:{
          required:true,
        },
        Q9E1:{
          required:true,
        },
        Q10E1:{
          required:true,
        },
        Q6E4S3:{
          required:true,
        },
        Q13E1:{
          required:true,
        },
        Q14E1:{
          required:true,
        },
        Q15E1:{
          required:true,
        },
        Q16E1:{
          required:true,
        },
        Q19E1:{
          required:true,
        },
        Q20E1:{
          required:true,
        },
        Q32E1:{
          required:true,
        },
        Q38E1:{
          required:true,
        },
        Q42E1:{
          required:true,
        },
        Q43E1:{
          required:true,
        },
        Q44E1:{
          required:true,
        },
        Q51E1:{
          required:true,
        },
        Q52E1:{
          required:true,
        },
        Q53E1:{
          required:true,
        }
        
       
    }
       
  });
  });
  
  jQuery('#energynext').click(function(e){
    
    
    $r=jQuery('#energy').valid();
    if($r == false)
    {
         e.preventDefault();
      alert('You will need to enter data in all fields to move forward. Please scroll above to check again.');
         jQuery('#energy').valid();
    }
    
    
  });
  
  </script>





<script type="text/javascript">
                    $('.close').click(function () {
                        $('#video').attr("src", "https://www.youtube.com/embed/i6DM3E5euRE");
                    });
                    $('.body').click(function () {
                        $('#video').attr("src", "https://www.youtube.com/embed/i6DM3E5euRE");
                    });
                    
          /**This Code Used For Submit Form Through Menu**/
          $('ol li').click(function(){
            var fd = $('#energy').serialize();
              $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/energyajax') ?>',
                data: fd,
                success: function (data) {
                  <!--window.location.href = "<?php echo base_url('general'); ?>";-->
                }
              });
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
  //delete  files
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
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }   
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
   if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }     
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
   if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }   
  }
   }
  /**Q7 Does your school use solar water heater?**/
  if($("input[name='Q10E1']:checked").length==0){
    alert("Q7: Does your school use solar water heater?");
  e.preventDefault();
  } 
});

/*This Code Used For Stopping Enter 'E' Alphabet In Textbox Type 'Number'*/
$(document).ready(function(){
   $("input[type='number']").keypress(function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
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
/**Validation For Question 4 BEE Star Rating**/
/*Event Perform On Keypress*/
$("input[name='Q7E2S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E3S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E4S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E5S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E6S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E7S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
$("input[name='Q7E8S3']").change(function(){
  if($(this).val()>5){
    alert("BEE star rating cannot be more than 5");
  $(this).val("");
  $(this).attr("placeholder","BEE Star rating (0 to 5)")
  }
});
/**Validation For CNG (kilogrammes)**/
$("input[name='Q6E5S1']").change(function(){
  if($("#CNGValidation").val()==0){
    if($("#CNGValidation").val()<$("input[name='Q6E5S1']").val()){
    alert("CNG (kilogrammes) "+$("#CNGValidation").val()+" in Air Section");
    $("input[name='Q6E5S1']").val(0);
    $("input[name='Q6E5S2']").val(0);
  }
  }
});           
</script>
<script>
var nyan = document.getElementById('BEEstarrating');
var nyanBtn = document.getElementById('btn');
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

</script>
  
  
  
  <script type="text/javascript">
  
 $("input[name='Q9E1S5']").click(function(){

 if($("input[name='Q6E13S1']").val() <= 0){

  alert('You Select Biogas as 0 in Q3');

  $("input[name='Q9E1S5']").prop("checked", false);



 }
 
 });


</script>
  
  
  
<style>
             #btn{ 
    background: rgb(232, 101, 73);
                color: rgb(0, 0, 0);
                box-shadow: rgba(0, 0, 0, 0.125) 0px 0px 0px 0px inset;
                height: 20px;
                position: relative;
                padding-top: 0px;
         display:none; 
     }  
</style>

<script type="text/javascript">
  $(document).ready(function(){

  
  $('#readmore').click(function(e){
     
    $('.read_1').css('display', 'block');
    $('#readmore').css('display', 'none');    
    e.preventDefault();

  });

  $('#readless').click(function(e){
    $('.read_1').css('display', 'none');
    $('#readmore').css('display', 'block');     
     e.preventDefault();

  });
 
});

</script>

<script type="text/javascript">
  
// $('input[name="Q9E1S1"]').click(function(){

//   if($('input[name="Q9E1S1"]').prop('checked')){

//     $('.section_A').css('display', 'block');
//   }else{

//    $('.section_A').css('display', 'none');
//   }
   
// });


$(document).ready(function(){

if($('input[name="Q9E1S1"]').prop('checked')){

    $('.section_A').css('display', 'block');
  }else{

   $('.section_A').css('display', 'none');
  }


});
$(document).ready(function(){

if ($('#Q9E1S101').is(":checked"))
{
  $('.section_C').css('display', 'block');
  $('.biogas').css('display', 'block');
  
}


});


 

$('#Q9E1S101').click(function(){
   
   if ($('#Q9E1S101').is(":checked"))
{
  $('.section_C').css('display', 'block');
  $('.biogas').css('display', 'block');
  
}
else{
 
  $('.section_C').css('display', 'none');
  $('.biogas').css('display', 'none');
  $('input[name="Q23R1"]' ).prop( "checked", false );
  $('input[name="Q23R1_f"]' ).prop( "checked", false );
  $('input[name="Q9E1S106"]' ).prop( "checked", false );
  $('input[name="Q9E1S107"]' ).prop( "checked", false );
  $('input[name="Q9E1S108"]' ).prop( "checked", false );
  $('input[name="Q9E1S109"]' ).prop( "checked", false );
  $('input[name="Q37E1"]' ).prop( "checked", false );
  $('#Q38E1').val('');
  $('input[name="Q9E1S1011"]' ).prop( "checked", false );
  $('input[name="Q9E1S1012"]' ).prop( "checked", false );
  $('input[name="Q9E1S1013"]' ).prop( "checked", false );
  $('#Q42E1').val('');
  $('input[name="Q43E1"]' ).prop( "checked", false );
  $('input[name="Q9E1S1014"]' ).prop( "checked", false );
  $('input[name="Q9E1S1015"]' ).prop( "checked", false );
  $('input[name="Q9E1S1016"]' ).prop( "checked", false );
  $('input[name="Q9E1S1017"]' ).prop( "checked", false );
  $('input[name="Q9E1S1018"]' ).prop( "checked", false );
  $('input[name="Q9E1S1019"]' ).prop( "checked", false );
  $('input[name="Q9E1S1024"]' ).prop( "checked", false );
  $('input[name="Q9E1S1025"]' ).prop( "checked", false );
  $('#Q51E1').val('');
  $('#Q52E1').val('');
  $('#Q53E1').val('');
  $('#Q44E1').val('');  
   
}
  

});

$(document).ready(function(){

  if ($('#Q9E1S1013').is(":checked"))
{
  $('.que_21a').css('display', 'block');
}
else{

  $('.que_21a').css('display', 'none');
}

});


$('#Q9E1S1013').click(function(){


   
   if ($('#Q9E1S1013').is(":checked"))
{
  $('.que_21a').css('display', 'block');
}
else{

  $('.que_21a').css('display', 'none');
}
  

});

 

$("input[name='Q43E1']").click(function(){


  var f = $(this).val();  

   if (f=='1')
{
  $('#Q43E1_b').css('display', 'block');
}
else{

  $('#Q43E1_b').css('display', 'none');

}
  

});





$(document).ready(function(){

if ($('#Q43E1').is(":checked"))
{
  $('#Q43E1_b').css('display', 'block');
}
else{

  $('#Q43E1_b').css('display', 'none');
}

});




</script>

<script>
  $("#energynext").click(function(e){
    if($("input[name='Q9E1S101']").prop('checked') == false && $("input[name='Q9E1S102']").prop('checked') == false && $("input[name='Q9E1S103']").prop('checked') == false && $("input[name='Q27E3']").prop('checked') == false && $("input[name='Q27E2']").prop('checked') == false){
      alert("What is the non-solar source of renewable energy (RE) for the school? You Choose checkbox option : Other or not applicable than countinue next step");
      e.preventDefault();
      if(e.isDefaultPrevented()){
           setTimeout(function(){ $(".hide_one").css("display","none"); },600);
        }
    }
    
      else if($("input[name='Q9E1S102']").prop('checked') == true || $("input[name='Q9E1S103']").prop('checked') == true || $("input[name='Q27E3']").prop('checked') == true || $("input[name='Q27E2']").prop('checked') == true || $("input[name='Q37E1']").prop('checked') == true)
      {
        $(this).unbind("click");
      }
}); 
  </script>

  <script>
  $("#energynext").click(function(e){
if($("input[name='Q9E1S101']").prop('checked') == true && $("input[name='Q9E1S106']").prop('checked') == false && $("input[name='Q9E1S107']").prop('checked') == false && $("input[name='Q9E1S108']").prop('checked') == false && $("input[name='Q9E1S109']").prop('checked') == false && $("input[name='Q37E1']").prop('checked') == false){
  alert("What are types of biomass being used by the school?");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}





}); 
  </script>

   <script>
  $("#energynext").click(function(e){
if($("input[name='Q9E1S101']").prop('checked') == true && $("input[name='Q9E1S1011']").prop('checked') == false && $("input[name='Q9E1S1012']").prop('checked') == false && $("input[name='Q9E1S1013']").prop('checked') == false ){
  alert("For what purpose is the energy from biofuel generated in school, used?");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}); 
  </script>


  <script>
  $("#energynext").click(function(e){
if($("input[name='Q9E1S101']").prop('checked') == true && $("input[name='Q9E1S1013']").prop('checked') == true && $("input[name='Q9E1S1014']").prop('checked') == false && $("input[name='Q9E1S1015']").prop('checked') == false && $("input[name='Q9E1S1016']").prop('checked') == false && $("input[name='Q9E1S1017']").prop('checked') == false && $("input[name='Q9E1S1018']").prop('checked') == false && $("input[name='Q9E1S1019']").prop('checked') == false ){
  alert("What are the components of biogas unit?");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}); 
  </script>

 
    <script type="text/javascript">
          function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
        </script>


        <script type="text/javascript">
          $(document).ready(function(){
          
          $('#Q14E1').keyup(function(e){
            
             var val1 =  $('#Q13E1').val();
             //alert(val1);
             var val2 =  $('#Q14E1').val();
             //alert(val2);
             var val3=val1*1.5;
            // alert(val3);
             if(val3>=val2){
              
             }
              
             else{
              $('#Q14E1').val('');
              alert('invertor size cannot be more: '+val3);
              return false;
               
             }

             });

          });
        


        </script>


        <script type="text/javascript">
          
        $(document).ready(function(){
        $("#Q52E1").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    });

        </script>

  <script>
  $("#energynext").click(function(e){
if($("input[name='Q9E1S101']").prop('checked') == false && $("input[name='Q9E1S102']").prop('checked') == false && $("input[name='Q9E1S103']").prop('checked') == false && $("input[name='Q27E3']").prop('checked') == false && $("input[name='Q27E2']").prop('checked') == false){
  alert("You can not left blank Q.No:20 What are the operation and maintenance (O&M) practices adopted for installed non-solar RE plant?");
  e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}); 
  </script>

 
   <script type="text/javascript">
    
    $(document).ready(function () {
   var ckbox = $("input[name='Q27E2']");

    $("input[name='Q27E2']").on('click',function () {
        if (ckbox.is(':checked')) {
           // alert('You have Checked it');
            $(".displayNone").css('display', 'none');            
            $('.displayNone').find('input:text').val('');
            $("input[name='Q9E1S1026']").attr('checked',false);
            $("input[name='Q9E1S1027']").attr('checked',false);
        } else {
           // alert('You Un-Checked it');
            $(".displayNone").css('display', 'block');
        }
    });
});
  </script>

  <script type="text/javascript">
     if($("input[name='Q27E2']:checked").val()==="5")
        {
           $(".displayNone").css('display', 'none');
        }
  </script>



 <script type="text/javascript">
    

      $('#energynext').click(function(){

        var t = $('#Q9E1').val();
        if(t==="N"){
          if($("input[name='Q27E3']").prop('checked') == false && $("input[name='Q27E2']").prop('checked') == false)
          {
            return false;
          }
          else{
            return true;
          }
        }

        else if($("input[name='Q27E3']").prop('checked')==true){
           return true; }


      });

  </script>
