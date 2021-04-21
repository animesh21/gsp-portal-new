<!-- <?php $this->

load->view('header'); ?>
<style type="text/css">
.form-group{
margin-bottom:20px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{      border-top:none;
}
.list-inline li{
width:200px;
}
.list-inline-1 li{
width:78px!important;
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
    <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->


<style>
  .error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q11F3-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -34px !important;
    position: absolute;
    margin-left: 600px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}
#Q5F2S2-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S3-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S4-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S5-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S6-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S7-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S8-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S9-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S10-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S11-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S12-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S13-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2S14-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -1px !important;
    position: absolute;
    margin-left: -214px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F1S1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -34px !important;
    position: absolute;
    margin-left: 335px;
    text-shadow: 1px 1px 1px #000;
}

#Q9F1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 617px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F2-error
{
      color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -50px !important;
    position: absolute;
    margin-left: 380px;
    text-shadow: 1px 1px 1px #000;
}

#Q7F1-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -56px !important;
    position: absolute;
    margin-left: 416px;
    text-shadow: 1px 1px 1px #000;
}

#Q8F1-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -56px !important;
    position: absolute;
    margin-left: 435px;
    text-shadow: 1px 1px 1px #000;
}

#Q10F1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 703px;
    text-shadow: 1px 1px 1px #000;
}

#Q11F1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 766px;
    text-shadow: 1px 1px 1px #000;
}

#Q5F1-error
{
   color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 309px;
    text-shadow: 1px 1px 1px #000;

}

#Q4F1-error
{
   color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -56px !important;
    position: absolute;
    margin-left: 683px;
    text-shadow: 1px 1px 1px #000;
}


#food2019_1-error{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 664px;
    text-shadow: 1px 1px 1px #000;
  }
  </style>


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
  <h1>FOOD <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--   <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
src="<?php echo base_url(); ?>assets/img/video-icon.png"
style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
</div>
<?php echo form_open('food/set', array('id' => 'food')); ?>
<div class="form-group">
<label>
<h6> Task 1: Choose your Food Audit Team <a class="tt" data-tooltip="The first name of need to have both first and last name. In the rest of the rows, if a team member does not have a last name, then they can press the space bar once and move to the next field."><span class="badge">?</span></a> </h6>
</label>
<br>
You would require at least 5 to 10 of your schoolmates in the Food audit team. The teacher co-ordinator may
be a science or home science teacher or midday meal in-charge with an interest in food and nutrition. Do
include the canteen in-charge in your audit team. <br>
<br>
<div class="form-group">
  <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
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
    <input class="form-control space-textbox" id="Q1F1S1" type="text" name="Q1F1S1"
placeholder="<?php if (isset($data['Q1F1S1'])) echo $data['Q1F1S1']; ?>"
value="<?php if (isset($data['Q1F1S1'])) echo $data['Q1F1S1']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1F1S3" type="text" name="Q1F1S3"
placeholder="<?php if (isset($data['Q1F1S3'])) echo $data['Q1F1S3']; ?>"
value="<?php if (isset($data['Q1F1S3'])) echo $data['Q1F1S3']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('email'); ?>
    <input class="form-control space-textbox" id="Q1F1S2" type="email" name="Q1F1S2"
placeholder="<?php if (isset($data['Q1F1S2'])) echo $data['Q1F1S2']; ?>"
value="<?php if (isset($data['Q1F1S2'])) echo $data['Q1F1S2']; ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 2</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1F2S1" type="text" name="Q1F2S1"
placeholder="<?php if (isset($data['Q1F2S1'])) echo $data['Q1F2S1'] ?>"
value="<?php echo set_value('Q1F2S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1F2S3" type="text" name="Q1F2S3"
placeholder="<?php if (isset($data['Q1F2S3'])) echo $data['Q1F2S3']; ?>"
value="<?php echo set_value('Q1F2S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1F2S2" type="email" name="Q1F2S2"
placeholder="<?php if (isset($data['Q1F2S2'])) echo $data['Q1F2S2'] ?>"
value="<?php echo set_value('Q1F2S2'); ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 3</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1F3S1" type="text" name="Q1F3S1"
placeholder="<?php if (isset($data['Q1F3S1'])) echo $data['Q1F3S1'] ?>"
value="<?php echo set_value('Q1F3S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1F3S3" type="text" name="Q1F3S3"
placeholder="<?php if (isset($data['Q1F3S3'])) echo $data['Q1F3S3']; ?>"
value="<?php echo set_value('Q1F3S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1F3S2" type="email" name="Q1F3S2"
placeholder="<?php if (isset($data['Q1F3S2'])) echo $data['Q1F3S2'] ?>"
value="<?php echo set_value('Q1F3S2'); ?>"/>
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
      <input class="form-control space-textbox" id="Q2F1S1" type="text" name="Q2F1S1"
placeholder="<?php if (isset($data['Q2F1S1'])) echo $data['Q2F1S1'] ?>"
value="<?php if (isset($data['Q2F1S1'])) echo $data['Q2F1S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F1S3" type="text" name="Q2F1S3"
placeholder="<?php if (isset($data['Q2F1S3'])) echo $data['Q2F1S3'] ?>"
value="<?php if (isset($data['Q2F1S3'])) echo $data['Q2F1S3'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2F1S2" type="email" name="Q2F1S2"
placeholder="<?php if (isset($data['Q2F1S2'])) echo $data['Q2F1S2'] ?>"
value="<?php if (isset($data['Q2F1S2'])) echo $data['Q2F1S2'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F2S1" type="text" name="Q2F2S1"
placeholder="<?php if (isset($data['Q2F2S1'])) echo $data['Q2F2S1'] ?>"
value="<?php echo set_value('Q2F2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F2S3" type="text" name="Q2F2S3"
placeholder="<?php if (isset($data['Q2F2S3'])) echo $data['Q2F2S3'] ?>"
value="<?php echo set_value('Q2F2S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F2S2" type="email" name="Q2F2S2"
placeholder="<?php if (isset($data['Q2F2S2'])) echo $data['Q2F2S2'] ?>"
value="<?php echo set_value('Q2F2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F3S1" type="text" name="Q2F3S1"
placeholder="<?php if (isset($data['Q2F3S1'])) echo $data['Q2F3S1'] ?>"
value="<?php echo set_value('Q2F3S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F3S3" type="text" name="Q2F3S3"
placeholder="<?php if (isset($data['Q2F3S3'])) echo $data['Q2F3S3'] ?>"
value="<?php echo set_value('Q2F3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F3S2" type="email" name="Q2F3S2"
placeholder="<?php if (isset($data['Q2F3S2'])) echo $data['Q2F3S2'] ?>"
value="<?php echo set_value('Q2F3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F4S1" type="text" name="Q2F4S1"
placeholder="<?php if (isset($data['Q2F4S1'])) echo $data['Q2F4S1']; ?>"
value="<?php echo set_value('Q2F4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F4S3" type="text" name="Q2F4S3"
placeholder="<?php if (isset($data['Q2F4S3'])) echo $data['Q2F4S3'] ?>"
value="<?php echo set_value('Q2F4S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F4S2" type="email" name="Q2F4S2"
placeholder="<?php if (isset($data['Q2F4S2'])) echo $data['Q2F4S2']; ?>"
value="<?php echo set_value('Q2F4S2'); ?>"/>
    </div>
    </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F5S1" type="text" name="Q2F5S1"
placeholder="<?php if (isset($data['Q2F5S1'])) echo $data['Q2F5S1'] ?>"
value="<?php echo set_value('Q2F5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F5S3" type="text" name="Q2F5S3"
placeholder="<?php if (isset($data['Q2F5S3'])) echo $data['Q2F5S3'] ?>"
value="<?php echo set_value('Q2F5S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2F5S2" type="email" name="Q2F5S2"
placeholder="<?php if (isset($data['Q2F5S2'])) echo $data['Q2F5S2'] ?>"
value="<?php echo set_value('Q2F5S2'); ?>"/>
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
      <input class="form-control space-textbox" id="Q3F1S1" type="text" name="Q3F1S1"
placeholder="<?php if (isset($data['Q3F1S1'])) echo $data['Q3F1S1'] ?>"
value="<?php if (isset($data['Q3F1S1'])) echo $data['Q3F1S1'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3F1S2" type="text" name="Q3F1S2"
placeholder="<?php if (isset($data['Q3F1S2'])) echo $data['Q3F1S2'] ?>"
value="<?php if (isset($data['Q3F1S2'])) echo $data['Q3F1S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F1S3" type="number" name="Q3F1S3"
placeholder="<?php if (isset($data['Q3F1S3'])) echo $data['Q3F1S3'] ?>"
value="<?php if (isset($data['Q3F1S3'])) echo $data['Q3F1S3'] ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F2S1" type="text" name="Q3F2S1"
placeholder="<?php if (isset($data['Q3F2S1'])) echo $data['Q3F2S1'] ?>"
value="<?php echo set_value('Q3F2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F2S2" type="text" name="Q3F2S2"
placeholder="<?php if (isset($data['Q3F2S2'])) echo $data['Q3F2S2'] ?>"
value="<?php echo set_value('Q3F2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F2S3" type="number" name="Q3F2S3"
placeholder="<?php if (isset($data['Q3F2S3'])) echo $data['Q3F2S3'] ?>"
value="<?php echo set_value('Q3F2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F3S1" type="text" name="Q3F3S1"
placeholder="<?php if (isset($data['Q3F3S1'])) echo $data['Q3F3S1'] ?>"
value="<?php echo set_value('Q3F3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F3S2" type="text" name="Q3F3S2"
placeholder="<?php if (isset($data['Q3F3S2'])) echo $data['Q3F3S2'] ?>"
value="<?php echo set_value('Q3F3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F3S3" type="number" name="Q3F3S3"
placeholder="<?php if (isset($data['Q3F3S3'])) echo $data['Q3F3S3'] ?>"
value="<?php echo set_value('Q3F3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F4S1" type="text" name="Q3F4S1"
placeholder="<?php if (isset($data['Q3F4S1'])) echo $data['Q3F4S1'] ?>"
value="<?php echo set_value('Q3F4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F4S2" type="text" name="Q3F4S2"
placeholder="<?php if (isset($data['Q3F4S2'])) echo $data['Q3F4S2'] ?>"
value="<?php echo set_value('Q3F4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F4S3" type="number" name="Q3F4S3"
placeholder="<?php if (isset($data['Q3F4S3'])) echo $data['Q3F4S3'] ?>"
value="<?php echo set_value('Q3F4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F5S1" type="text" name="Q3F5S1"
placeholder="<?php if (isset($data['Q3F5S1'])) echo $data['Q3F5S1'] ?>"
value="<?php echo set_value('Q3F5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F5S2" type="text" name="Q3F5S2"
placeholder="<?php if (isset($data['Q3F5S2'])) echo $data['Q3F5S2'] ?>"
value="<?php echo set_value('Q3F5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F5S3" type="number" name="Q3F5S3"
placeholder="<?php if (isset($data['Q3F5S3'])) echo $data['Q3F5S3'] ?>"
value="<?php echo set_value('Q3F5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 6</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F6S1" type="text" name="Q3F6S1"
placeholder="<?php if (isset($data['Q3F6S1'])) echo $data['Q3F6S1'] ?>"
value="<?php echo set_value('Q3F6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F6S2" type="text" name="Q3F6S2"
placeholder="<?php if (isset($data['Q3F6S2'])) echo $data['Q3F6S2'] ?>"
value="<?php echo set_value('Q3F6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F6S3" type="number" name="Q3F6S3"
placeholder="<?php if (isset($data['Q3F6S3'])) echo $data['Q3F6S3'] ?>"
value="<?php echo set_value('Q3F6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 7</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F7S1" type="text" name="Q3F7S1"
placeholder="<?php if (isset($data['Q3F7S1'])) echo $data['Q3F7S1'] ?>"
value="<?php echo set_value('Q3F7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F7S2" type="text" name="Q3F7S2"
placeholder="<?php if (isset($data['Q3F7S2'])) echo $data['Q3F7S2'] ?>"
value="<?php echo set_value('Q3F7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F7S3" type="number" name="Q3F7S3"
placeholder="<?php if (isset($data['Q3F7S3'])) echo $data['Q3F7S3'] ?>"
value="<?php echo set_value('Q3F7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 8</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F8S1" type="text" name="Q3F8S1"
placeholder="<?php if (isset($data['Q3F8S1'])) echo $data['Q3F8S1'] ?>"
value="<?php echo set_value('Q3F8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F8S2" type="text" name="Q3F8S2"
placeholder="<?php if (isset($data['Q3F8S2'])) echo $data['Q3F8S2'] ?>"
value="<?php echo set_value('Q3F8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F8S3" type="number" name="Q3F8S3"
placeholder="<?php if (isset($data['Q3F8S3'])) echo $data['Q3F8S3'] ?>"
value="<?php echo set_value('Q3F8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 9</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F9S1" type="text" name="Q3F9S1"
placeholder="<?php if (isset($data['Q3F9S1'])) echo $data['Q3F9S1'] ?>"
value="<?php echo set_value('Q3F9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F9S2" type="text" name="Q3F9S2"
placeholder="<?php if (isset($data['Q3F9S2'])) echo $data['Q3F9S2'] ?>"
value="<?php echo set_value('Q3F9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F9S3" type="number" name="Q3F9S3"
placeholder="<?php if (isset($data['Q3F9S3'])) echo $data['Q3F9S3'] ?>"
value="<?php echo set_value('Q3F9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 10</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F10S1" type="text" name="Q3F10S1"
placeholder="<?php if (isset($data['Q3F10S1'])) echo $data['Q3F10S1'] ?>"
value="<?php echo set_value('Q3F10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F10S2" type="text" name="Q3F10S2"
placeholder="<?php if (isset($data['Q3F10S2'])) echo $data['Q3F10S2'] ?>"
value="<?php echo set_value('Q3F10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3F10S3" type="number" name="Q3F10S3"
placeholder="<?php if (isset($data['Q3F10S3'])) echo $data['Q3F10S3'] ?>"
value="<?php echo set_value('Q3F10S3'); ?>"/>
    </div>
  </div>
</div>
<input type="hidden" id="Q9G1" value="<?php if (isset($other['Q9G1'])) echo $other['Q9G1'] ?>"/>
<input type="hidden" id="Q4G1S3" value="<?php if (isset($other['Q4G1S3'])) echo $other['Q4G1S3'] ?>"/>
<div class="form-group">
  <label>
  <h6>Task 2: Find out about the food service in your school.<a class="tt" data-tooltip="Any place, permanent or temporary (like canteen, tuck shop, etc), run by school, outsourced to vendors or self help groups or shopkeepers, to sell products during/after/before schools hours should be considered. If the space is limited please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section."><span
class="badge">?</span></a></h6>
  </label>
  <div class="form-group">
    <input type="hidden" id="Q1S1" value="<?php if (isset($other['Q1S1'])) echo $other['Q1S1']; ?>">
    <?php if (empty($data['Q4F1'])) if (isset($other['Q1S1'])) if ($other['Q1S1'] >= 3) $data['Q4F1'] = 'Y' ?>
    <label class="control-label"><span class="cube">1</span> Does your school have a provision/space
    to sell packaged food items within the campus<a class="tt" data-tooltip="Packaged food is any food item which is commercially prepared, processed for a longer shelf life and is ready to eat and drink. Packaged food items are of various flavours such as chips, instant noodles, soft drinks and chocolates are ultra-processed, aggressively marketed, cheaper and more easily available than fresh-food options. They have chemical additives as these are not freshly prepared."><span
class="badge">?</span></a>
    <audio controls id="BEEstarrating" style="float:left;" class="hide">
      <source src="<?php echo base_url(); ?>assets/audio-files/Whole day meals.MP3" type="audio/mpeg">
      Your browser does not support the audio element. </audio>
    <a class="btn" id="btn" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
    <ul class="list-inline">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q4F1_1" onClick="FoodQ4F1(1)" name="Q4F1"
value="<?php echo set_value('Q4F1', 'Y') ?>" <?php if (isset($data['Q4F1'])) echo $data['Q4F1'] == 'Y' ? "checked" : "" ?>>
        Yes </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q4F1_2" onClick="FoodQ4F1(2)" name="Q4F1"
value="<?php echo set_value('Q4F1', 'N') ?>" <?php if (isset($data['Q4F1'])) echo $data['Q4F1'] == 'N' ? "checked" : "" ?> >
        No </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">2</span>Does your school serve midday meals?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1" onClick="MealsToggle(1)"
value="<?php echo set_value('Q5F1', 'Y') ?>" <?php if (isset($data['Q5F1'])) echo $data['Q5F1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1" onClick="MealsToggle(2)"
value="<?php echo set_value('Q5F1', 'N') ?>" <?php if (isset($data['Q5F1'])) echo $data['Q5F1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
if (isset($data['Q5F1'])) {
if ($data['Q5F1'] == 'Y') {
?>
<div class="form-group" id="meals1">
<?php
} else {
?>
<div class="form-group" id="meals1" style="display: none;">
<?php
}
?>
<?php
} else {
?>
<div class="form-group" id="meals1" style="display: none;">
  <?php
}
?>
  <label class="control-label">Please upload pictures of Mid-day meal being
  served</label>
  <br/>
  <button class="btn uploadbtn upload" data-id="Mid Day Meal" data-toggle="modal"
data-target="#airModal" type="button">UPLOAD FILES </button>
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
      <?php foreach ($midDayMeal as $f) { ?>
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
        <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php // }?>
        <?php $name = str_replace(" ", "_", $f->name . "_Mid_Day_Meal_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<input type="hidden" value="<?php if (isset($other['Q4G4S3'])) echo $other['Q4G4S3']; ?>"
id="Q4G4S3"/>
<?php
if (isset($data['Q5F1'])) {
if ($data['Q5F1'] == 'Y') {
?>
<div class="form-group" id="meals11">
<?php
} else {
?>
<div class="form-group" id="meals11" style="display: none;">
<?php
}
?>
<?php
} else {
?>
<div class="form-group" id="meals11" style="display: none;">
  <?php
}
?>
  <label class="control-label"><span class="cube">2(a)</span>If yes, then midday meal
  is served under:</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1"
       value="<?php echo set_value('Q5F1S1', 1) ?>" <?php if (isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 1 ? "checked" : "" ?>>
      Government Scheme </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1"
       value="<?php echo set_value('Q5F1S1', 2) ?>" <?php if (isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 2 ? "checked" : "" ?>>
      School’s personal initiative </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1"
       value="<?php echo set_value('Q5F1S1', 3) ?>" <?php if (isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 3 ? "checked" : "" ?>>
      Others </label>
    </li>
  </ul>
</div>
<?php
if (isset($data['Q5F1'])) {
if ($data['Q5F1'] == 'N') {
?>
<div class="form-group" id="meals2">
<?php
} else {
?>
<div class="form-group" id="meals2" style="display: none;">
<?php
}
?>
<?php
} else {
?>
<div class="form-group" id="meals2" style="display: none;">
  <?php
}
?>
  <label class="control-label"><span class="cube">2(a)</span>Do students bring their
  own lunch from home?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1" onClick="MealsToggletwo(1)"
           value="<?php echo set_value('Q5F1S1', 'Y') ?>" <?php if (isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1" onClick="MealsToggletwo(2)"
           value="<?php echo set_value('Q5F1S1', 'N') ?>" <?php if (isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
if (isset($data['Q5F1S1'])) {
if ($data['Q5F1S1'] == 'Y') {
?>
<div class="form-group" id="Q5F1SF">
<?php
} else {
?>
<div class="form-group" id="Q5F1SF" style="display: none;">
<?php
}
} else {
?>
<div class="form-group" id="Q5F1SF" style="display: none;">
  <?php
}
?>
  <label class="control-label">Please upload photographs of lunch
  boxes</label>
  <br>
  <button class="btn uploadbtn upload" data-id="Lunch Boxes"
        data-toggle="modal" data-target="#airModal" type="button">UPLOAD
  FILES </button>
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
      <?php foreach ($lunch as $u) { ?>
      <tr id="index<?php echo $u->id; ?>">
        <?php 
      //  $array = explode('.',$u->file_name); 
     // $count = count($array);
    //  $extension = $array[$count-1];
                ?>
        <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
        <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
        file_name ?>" class="img-responsive" />
        </td>
        -->
        <?php //}else{ ?>
        <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php //}?>
        <?php $name = str_replace(" ", "_", $u->name . "_Lunch_Boxes_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
  if (isset($data['Q5F1S1'])) {
    if ($data['Q5F1S1'] == 'Y') {
      ?>
<div class="form-group" id="Q5F1S2">
<?php
      } else {
        ?>
<div class="form-group" id="Q5F1S2" style="display: none;">
<?php
      }
    } else {
      ?>
<div class="form-group" id="Q5F1S2" style="display: none;">
  <?php
}
?>
  <label class="control-label"><span class="cube">2(a)(1)</span> How many students out of the total student population bring lunch from home? </label>
  <br>
  <input type="number" min="0" name="Q5F1S2" id="Q5F1S2A"
             class="form-control space-textbox"
             placeholder="<?php if (isset($data['Q5F1S2'])) echo $data['Q5F1S2'] ?>"
             value="<?php if (isset($data['Q5F1S2'])) echo $data['Q5F1S2'] ?>">
</div>
<?php
    if (isset($data['Q5F1S1'])) {
      if ($data['Q5F1S1'] == 'Y') {
        ?>
<div class="form-group" id="Q5F1S3">
<?php
        } else {
          ?>
<div class="form-group" id="Q5F1S3" style="display: none;">
<?php
        }
      } else {
        ?>
<div class="form-group" id="Q5F1S3" style="display: none;">
  <?php
        }
        ?>
  <label class="control-label"><span
                class="cube">2(a)(2)</span>Of the students who
  bring lunch from home, how many bring packaged
  food?</label>
  <br>
  <input type="text" id="Q5F1S3A" name="Q5F1S3"
                 class="form-control space-textbox"
                 placeholder="<?php if (isset($data['Q5F1S3'])) echo $data['Q5F1S3'] ?>"
                 value="<?php if (isset($data['Q5F1S3'])) echo $data['Q5F1S3'] ?>">
</div>
<?php
      if (isset($data['Q5F1S1'])) {
        if ($data['Q5F1S1'] == 'Y') {
          ?>
<div class="form-group" id="Q5F1S4">
<?php
          } else {
            ?>
<div class="form-group" id="Q5F1S4" style="display: none;">
<?php
          }
        } else {
          ?>
<div class="form-group" id="Q5F1S4" style="display: none;">
  <?php
          }
          ?>
  <label class="control-label"><span class="cube">2(a)(3)</span>Do
  teachers have the responsibility to ensure that
  students are carrying lunch from home?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S4"
                           value="<?php echo set_value('Q5F1S4', 'Y') ?>" <?php if (isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S4"
                           value="<?php echo set_value('Q5F1S4', 'N') ?>" <?php if (isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'N' ? "checked" : "" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
          if (isset($data['Q5F1']))
            if ($data['Q5F1'] == 'Y') {
              ?>
<div class="form-group" id="Q5F2">
<?php
              } else {
                ?>
<div class="form-group" id="Q5F2" style="display: none;">
  <?php } else {
              ?>
  <div class="form-group" id="Q5F2" style="display: none;">
    <?php } ?>
    <label class="control-label"><span
                        class="cube">2(b)</span>What
    kind of food items are served in midday
    meal?</label>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">1.
      Rice</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S1"
                                 value="<?php echo set_value('Q5F2S1', 'Y') ?>" <?php if (isset($data['Q5F2S1'])) echo $data['Q5F2S1'] == 'Y' ? "checked" : "" ?>/>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S1"
                                 value="<?php echo set_value('Q5F2S1', 'N') ?>" <?php if (isset($data['Q5F2S1'])) echo $data['Q5F2S1'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">2.
      Wheat</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S2"
                                 value="<?php echo set_value('Q5F2S2', 'Y') ?>" <?php if (isset($data['Q5F2S2'])) echo $data['Q5F2S1'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S2"
                                 value="<?php echo set_value('Q5F2S2', 'N') ?>" <?php if (isset($data['Q5F2S2'])) echo $data['Q5F2S2'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">3.
      Pulses/dal</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S3"
                                 value="<?php echo set_value('Q5F2S3', 'Y') ?>" <?php if (isset($data['Q5F2S3'])) echo $data['Q5F2S3'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S3"
                                 value="<?php echo set_value('Q5F2S3', 'N') ?>" <?php if (isset($data['Q5F2S3'])) echo $data['Q5F2S3'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">4.
      Vegetables</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S4"
                                 value="<?php echo set_value('Q5F2S4', 'Y') ?>" <?php if (isset($data['Q5F2S4'])) echo $data['Q5F2S4'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S4"
                                 value="<?php echo set_value('Q5F2S4', 'N') ?>" <?php if (isset($data['Q5F2S4'])) echo $data['Q5F2S4'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">5.
      Egg</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S5"
                                 value="<?php echo set_value('Q5F2S5', 'Y') ?>" <?php if (isset($data['Q5F2S5'])) echo $data['Q5F2S5'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S5"
                                 value="<?php echo set_value('Q5F2S5', 'N') ?>" <?php if (isset($data['Q5F2S5'])) echo $data['Q5F2S5'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">6.
      Porridge</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S6"
                                 value="<?php echo set_value('Q5F2S6', 'Y') ?>" <?php if (isset($data['Q5F2S6'])) echo $data['Q5F2S6'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S6"
                                 value="<?php echo set_value('Q5F2S6', 'N') ?>" <?php if (isset($data['Q5F2S6'])) echo $data['Q5F2S6'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">7.
      Upma</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S7"
                                 value="<?php echo set_value('Q5F2S7', 'Y') ?>" <?php if (isset($data['Q5F2S7'])) echo $data['Q5F2S7'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S7"
                                 value="<?php echo set_value('Q5F2S7', 'N') ?>" <?php if (isset($data['Q5F2S7'])) echo $data['Q5F2S7'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">8.
      Khichdi</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S8"
                                 value="<?php echo set_value('Q5F2S8', 'Y') ?>" <?php if (isset($data['Q5F2S8'])) echo $data['Q5F2S8'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S8"
                                 value="<?php echo set_value('Q5F2S8', 'N') ?>" <?php if (isset($data['Q5F2S8'])) echo $data['Q5F2S8'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">9.
      Curd/butter milk</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S9"
                                 value="<?php echo set_value('Q5F2S9', 'Y') ?>" <?php if (isset($data['Q5F2S9'])) echo $data['Q5F2S9'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S9"
                                 value="<?php echo set_value('Q5F2S9', 'N') ?>" <?php if (isset($data['Q5F2S9'])) echo $data['Q5F2S9'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">10.
      Biscuits</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S10"
                                 value="<?php echo set_value('Q5F2S10', 'Y') ?>" <?php if (isset($data['Q5F2S10'])) echo $data['Q5F2S10'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S10"
                                 value="<?php echo set_value('Q5F2S10', 'N') ?>" <?php if (isset($data['Q5F2S10'])) echo $data['Q5F2S10'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">11.
      Packaged chips</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S11"
                                 value="<?php echo set_value('Q5F2S11', 'Y') ?>" <?php if (isset($data['Q5F2S11'])) echo $data['Q5F2S11'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S11"
                                 value="<?php echo set_value('Q5F2S11', 'N') ?>" <?php if (isset($data['Q5F2S11'])) echo $data['Q5F2S11'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">12.
      Bread butter</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S12"
                                 value="<?php echo set_value('Q5F2S12', 'Y') ?>" <?php if (isset($data['Q5F2S12'])) echo $data['Q5F2S12'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S12"
                                 value="<?php echo set_value('Q5F2S12', 'N') ?>" <?php if (isset($data['Q5F2S12'])) echo $data['Q5F2S12'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">13.
      Sandwich</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S13"
                                 value="<?php echo set_value('Q5F2S13', 'Y') ?>" <?php if (isset($data['Q5F2S13'])) echo $data['Q5F2S13'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S13"
                                 value="<?php echo set_value('Q5F2S13', 'N') ?>" <?php if (isset($data['Q5F2S13'])) echo $data['Q5F2S13'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
    <div class="form-group-1">
      <label class="radio-inline text-gray col-xs-10">14.
      Packaged juice</label>
      <ul class="list-inline list-inline-1">
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S14"
                                 value="<?php echo set_value('Q5F2S14', 'Y') ?>" <?php if (isset($data['Q5F2S14'])) echo $data['Q5F2S14'] == 'Y' ? "checked" : "" ?>>
          Yes </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q5F2S14"
                                 value="<?php echo set_value('Q5F2S14', 'N') ?>" <?php if (isset($data['Q5F2S14'])) echo $data['Q5F2S14'] == 'N' ? "checked" : "" ?>>
          No </label>
        </li>
      </ul>
    </div>
  </div>
  <?php
if (isset($data['Q5F1']))
if ($data['Q5F1'] == 'Y') {
?>
  <div class="form-group" id="Q5F3">
    <?php
} else {
?>
    <div class="form-group" id="Q5F3"
                           style="display: none;">
      <?php } else {
?>
      <div class="form-group" id="Q5F3"
                           style="display: none;">
        <?php } ?>
        <label class="control-label"><span
                            class="cube">2(b)(1)</span>How
        many students out of total
        student population avail of the
        midday meal services
        provided?</label>
        <div class="form-group">
          <input type="number"
                               class="form-control space-textbox"
                               id="Q5F3S1" name="Q5F3S1"
                               value="<?php if (isset($data['Q5F3S1'])) echo $data['Q5F3S1']; ?>"
                               placeholder="<?php if (isset($data['Q5F3S1'])) echo $data['Q5F3S1']; ?>">
        </div>
      </div>
      <?php
if (isset($other['Q1S1']))
if ($other['Q1S1'] >= 3 && $other['Q1S1'] != 4) {
?>
      <div class="form-group">
        <label class="control-label"><span class="cube">2.1</span>Does your school serve whole day’s
        meals? <a class="tt" data-tooltip="Applicable for residential schools only"><span class="badge">?</span></a></label>
        <ul class="list-inline">
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q5F2"
                                       value="<?php echo set_value('Q5F2', 'Y') ?>" <?php if (isset($data['Q5F2'])) echo $data['Q5F2'] == 'Y' ? "checked" : "" ?>>
            Yes </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q5F2"
                                       value="<?php echo set_value('Q5F2', 'N') ?>" <?php if (isset($data['Q5F2'])) echo $data['Q5F2'] == 'N' ? "checked" : "" ?>>
            No </label>
          </li>
        </ul>
      </div>
      <?php
                      }
                    ?>
      <div class="form-group">
        <label class="control-label">
        <h6> Task 3: What kind of food is
          served/sold in your
          school <a class="tt" data-tooltip="Any place, permanent or temporary, run by school, outsourced to vendors or self help groups or shopkeepers, to sell products during/after/before schools hours should be considered. If the space is limited please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section.
                                  "><span class="badge">?</span></a></h6>
        </label>
      </div>
      <?php
if (isset($data['Q4F1']))
if ($data['Q4F1'] == 'Y') {
?>
      <div class="form-group" id="Q6F1">
        <?php } else { ?>
        <div class="form-group" id="Q6F1"  style="display: none;">
          <?php } else {
?>
          <div class="form-group" id="Q6F1" style="display: none;">
            <?php } ?>
            <label class="control-label"><span class="cube">3</span>What
            kind of food is being
            served / sold in your
            school? <a class="tt" data-tooltip="For types and varieties of packaged food items, please count each brand and flavor available in your school. For example, if Lay’s chips and five of its variants (Baked, Herbs and onions, Original salted, Sunkissed tomatoes, American style cream) are available, then please count as 5. (Please note it is advisable not to have hawkers, vendors and shops selling ultra processed packaged items near the school.)"><span
                                  class="badge">?</span></a> </label>
            <!--div class=" row">
<div class="col-xs-3">
<label >Packaged food items served / sold inside school campus</label>

</div>
<div class="col-xs-3">
<input class="form-control space-textbox" id="ex2" type="number" name="Q6F1S1" placeholder="<?php if (isset($data['Q6F1S1'])) echo $data['Q6F1S1'] ?>" value="<?php if (isset($data['Q6F1S1'])) echo $data['Q6F1S1'] ?>"/>
</div>
<div class="col-xs-3">
<input class="form-control space-textbox" id="ex3" type="number" name="Q6F1S2" placeholder="<?php if (isset($data['Q6F1S2'])) echo $data['Q6F1S2'] ?>" value="<?php if (isset($data['Q6F1S2'])) echo $data['Q6F1S2'] ?>" />
</div>
<div class="col-xs-3">
<input class="form-control space-textbox" id="ex3" type="text" name="Q6F1S3" placeholder="<?php if (isset($data['Q6F1S3'])) echo $data['Q6F1S3'] ?>" value="<?php if (isset($data['Q6F1S3'])) echo $data['Q6F1S3'] ?>"/>
</div>
</div-->
            <table class="table">
              <tr>
                <th width="442px">Packaged food items served / sold inside school campus</th>
                <th width="192px">Please count all flavours/variants available in the school separately</th>
                <th width="192px">Total no. of items sold, on an average, in a month</th>
                <th width="192px">Month the food items were sold in <a class="tt" data-tooltip="Please enter the month in numeric form: e.g: 1 for January, 2 for February and so on. If a particular item is not sold, then enter ‘0’ in all fields. "><span
                                  class="badge">?</span></a></th>
              </tr>
              <tr>
                <td> Savoury snacks and
                  similar packaged
                  food like chips,
                  Kurkure, Cheetos,
                  potato crisps, corn
                  snacks, nuts and
                  seeds, etc </td>
                <td><input class="form-control"
                                       id="Q6F2S1"
                                       type="number"
                                       name="Q6F2S1"
                                       placeholder="<?php if (isset($data['Q6F2S1'])) echo $data['Q6F2S1'] ?>"
                                       value="<?php if (isset($data['Q6F2S1'])) echo $data['Q6F2S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F2S2"
                                       type="number"
                                       name="Q6F2S2"
                                       placeholder="<?php if (isset($data['Q6F2S2'])) echo $data['Q6F2S2'] ?>"
                                       value="<?php if (isset($data['Q6F2S2'])) echo $data['Q6F2S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F2S3"
                                       type="text"
                                       name="Q6F2S3"
                                       placeholder="<?php if (isset($data['Q6F2S3'])) echo $data['Q6F2S3'] ?>"
                                       value="<?php if (isset($data['Q6F2S3'])) echo $data['Q6F2S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Instant Noodles like
                  Knorr,
                  Cup-a-noodles, Top
                  Ramen, Wai-wai,
                  Yippee, Foodles,
                  Maggi, etc </td>
                <td><input class="form-control"
                                       id="Q6F3S1"
                                       type="number"
                                       name="Q6F3S1"
                                       placeholder="<?php if (isset($data['Q6F3S1'])) echo $data['Q6F3S1'] ?>"
                                       value="<?php if (isset($data['Q6F3S1'])) echo $data['Q6F3S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F3S2"
                                       type="number"
                                       name="Q6F3S2"
                                       placeholder="<?php if (isset($data['Q6F3S2'])) echo $data['Q6F3S2'] ?>"
                                       value="<?php if (isset($data['Q6F3S2'])) echo $data['Q6F3S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F3S3"
                                       type="text"
                                       name="Q6F3S3"
                                       placeholder="<?php if (isset($data['Q6F3S3'])) echo $data['Q6F3S3'] ?>"
                                       value="<?php if (isset($data['Q6F3S3'])) echo $data['Q6F3S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Potato fries and
                  burgers </td>
                <td><input class="form-control"
                                       id="Q6F4S1"
                                       type="number"
                                       name="Q6F4S1"
                                       placeholder="<?php if (isset($data['Q6F4S1'])) echo $data['Q6F4S1'] ?>"
                                       value="<?php if (isset($data['Q6F4S1'])) echo $data['Q6F4S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F4S2"
                                       type="number"
                                       name="Q6F4S2"
                                       placeholder="<?php if (isset($data['Q6F4S2'])) echo $data['Q6F4S2'] ?>"
                                       value="<?php if (isset($data['Q6F4S2'])) echo $data['Q6F4S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F4S3"
                                       type="text"
                                       name="Q6F4S3"
                                       placeholder="<?php if (isset($data['Q6F4S3'])) echo $data['Q6F4S3'] ?>"
                                       value="<?php if (isset($data['Q6F4S3'])) echo $data['Q6F4S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Confectionery items
                  (chocolate, candies,
                  gums) </td>
                <td><input class="form-control"
                                       id="Q6F5S1"
                                       type="number"
                                       name="Q6F5S1"
                                       placeholder="<?php if (isset($data['Q6F5S1'])) echo $data['Q6F5S1'] ?>"
                                       value="<?php if (isset($data['Q6F5S1'])) echo $data['Q6F5S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F5S2"
                                       type="number"
                                       name="Q6F5S2"
                                       placeholder="<?php if (isset($data['Q6F5S2'])) echo $data['Q6F5S2'] ?>"
                                       value="<?php if (isset($data['Q6F5S2'])) echo $data['Q6F5S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F5S3"
                                       type="text"
                                       name="Q6F5S3"
                                       placeholder="<?php if (isset($data['Q6F5S3'])) echo $data['Q6F5S3'] ?>"
                                       value="<?php if (isset($data['Q6F5S3'])) echo $data['Q6F5S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Ice cream </td>
                <td><input class="form-control"
                                       id="Q6F6S1"
                                       type="number"
                                       name="Q6F6S1"
                                       placeholder="<?php if (isset($data['Q6F6S1'])) echo $data['Q6F6S1'] ?>"
                                       value="<?php if (isset($data['Q6F6S1'])) echo $data['Q6F6S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F6S2"
                                       type="number"
                                       name="Q6F6S2"
                                       placeholder="<?php if (isset($data['Q6F6S2'])) echo $data['Q6F6S2'] ?>"
                                       value="<?php if (isset($data['Q6F6S2'])) echo $data['Q6F6S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F6S3"
                                       type="text"
                                       name="Q6F6S3"
                                       placeholder="<?php if (isset($data['Q6F6S3'])) echo $data['Q6F6S3'] ?>"
                                       value="<?php if (isset($data['Q6F6S3'])) echo $data['Q6F6S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Carbonated beverages </td>
                <td><input class="form-control"
                                       id="Q6F7S1"
                                       type="number"
                                       name="Q6F7S1"
                                       placeholder="<?php if (isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>"
                                       value="<?php if (isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F7S2"
                                       type="number"
                                       name="Q6F7S2"
                                       placeholder="<?php if (isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>"
                                       value="<?php if (isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F7S3"
                                       type="text"
                                       name="Q6F7S3"
                                       placeholder="<?php if (isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>"
                                       value="<?php if (isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Sugar sweetened
                  non-carbonated
                  beverages </td>
                <td><input class="form-control"
                                       id="Q6F8S1"
                                       type="number"
                                       name="Q6F8S1"
                                       placeholder="<?php if (isset($data['Q6F8S1'])) echo $data['Q6F8S1'] ?>"
                                       value="<?php if (isset($data['Q6F8S1'])) echo $data['Q6F8S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F8S2"
                                       type="number"
                                       name="Q6F8S2"
                                       placeholder="<?php if (isset($data['Q6F8S2'])) echo $data['Q6F8S2'] ?>"
                                       value="<?php if (isset($data['Q6F8S2'])) echo $data['Q6F8S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F8S3"
                                       type="text"
                                       name="Q6F8S3"
                                       placeholder="<?php if (isset($data['Q6F8S3'])) echo $data['Q6F8S3'] ?>"
                                       value="<?php if (isset($data['Q6F8S3'])) echo $data['Q6F8S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Packaged/bottled
                  nimboo
                  paani/lassi/flavoured
                  milk </td>
                <td><input class="form-control"
                                       id="Q6F9S1"
                                       type="number"
                                       name="Q6F9S1"
                                       placeholder="<?php if (isset($data['Q6F9S1'])) echo $data['Q6F9S1'] ?>"
                                       value="<?php if (isset($data['Q6F9S1'])) echo $data['Q6F9S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F9S2"
                                       type="number"
                                       name="Q6F9S2"
                                       placeholder="<?php if (isset($data['Q6F9S2'])) echo $data['Q6F9S2'] ?>"
                                       value="<?php if (isset($data['Q6F9S2'])) echo $data['Q6F9S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F9S3"
                                       type="text"
                                       name="Q6F9S3"
                                       placeholder="<?php if (isset($data['Q6F9S3'])) echo $data['Q6F9S3'] ?>"
                                       value="<?php if (isset($data['Q6F9S3'])) echo $data['Q6F9S3'] ?>"/>
                </td>
              </tr>
              <tr>
                <td> Packaged/bottled
                  energy drinks </td>
                <td><input class="form-control"
                                       id="Q6F10S1"
                                       type="number"
                                       name="Q6F10S1"
                                       placeholder="<?php if (isset($data['Q6F10S1'])) echo $data['Q6F10S1'] ?>"
                                       value="<?php if (isset($data['Q6F10S1'])) echo $data['Q6F10S1'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F10S2"
                                       type="number"
                                       name="Q6F10S2"
                                       placeholder="<?php if (isset($data['Q6F10S2'])) echo $data['Q6F10S2'] ?>"
                                       value="<?php if (isset($data['Q6F10S2'])) echo $data['Q6F10S2'] ?>"/>
                </td>
                <td><input class="form-control"
                                       id="Q6F10S3"
                                       type="text"
                                       name="Q6F10S3"
                                       placeholder="<?php if (isset($data['Q6F10S3'])) echo $data['Q6F10S3'] ?>"
                                       value="<?php if (isset($data['Q6F10S3'])) echo $data['Q6F10S3'] ?>"/>
                </td>
              </tr>
            </table>
          </div>
          <?php
if (isset($data['Q4F1']))
if ($data['Q4F1'] == 'Y') {
?>
          <div class="form-group"  id="Q7F1">
            <?php } else { ?>
            <div class="form-group"  id="Q7F1" style="display: none;">
              <?php } else { ?>
              <div class="form-group"  id="Q7F1"  style="display: none;">
                <?php } ?>
                <label class="control-label"><span
                                    class="cube">4</span>Does
                your school
                serve
                traditional
                Indian snacks?<a
                                    class="tt"
                                    data-tooltip="Traditional Indian snacks are any food item prepared within the school on the same day for immediate consumption. Monitor over a period of a month."><span
                                      class="badge">?</span></a></label>
                <ul class="list-inline">
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           name="Q7F1"
                                           onclick="ComputeTraditionalFood(1)"
                                           value="<?php echo set_value('Q7F1', 'Y') ?>" <?php if (isset($data['Q7F1'])) echo $data['Q7F1'] == 'Y' ? "checked" : "" ?>/>
                    Yes </label>
                  </li>
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           id="Q7F1_2"
                                           name="Q7F1"
                                           onclick="ComputeTraditionalFood(2)"
                                           value="<?php echo set_value('Q7F1', 'N') ?>" <?php if (isset($data['Q7F1'])) echo $data['Q7F1'] == 'N' ? "checked" : "" ?>/>
                    No </label>
                  </li>
                </ul>
              </div>
              <?php
//if (isset($data['Q4F1']))
//if ($data['Q4F1'] == 'Y')
//if (isset($data['Q7F1']))
//if ($data['Q7F1'] == 'Y') {
?>
              <div class="form-group" id="traditional" style="display:none;">
                <label class="control-label"><span class="cube">4(a)</span>Please
                provide
                the
                details:<a class="tt" data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section."> <span class="badge">?</span> </a></label>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Traditional
                    Indian
                    snacks</label>
                  </div>
                  <div class="col-xs-5">
                    <label>Number
                    of
                    servings
                    sold
                    when
                    on
                    the
                    menu</label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Samosas</label>
                  </div>
                  <div class="col-xs-5">
                    <input class="form-control space-textbox"
                                                 id="Q7F1S1"
                                                 type="number"
                                                 name="Q7F1S1"
                                                 placeholder="<?php if (isset($data['Q7F1S1'])) echo $data['Q7F1S1'] ?>"
                                                 value="<?php if (isset($data['Q7F1S1'])) echo $data['Q7F1S1'] ?>"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Idli/vada
                    and
                    sambhar</label>
                  </div>
                  <div class="col-xs-5">
                    <input class="form-control space-textbox"
                                                 id="Q7F1S2"
                                                 type="number"
                                                 name="Q7F1S2"
                                                 placeholder="<?php if (isset($data['Q7F1S2'])) echo $data['Q7F1S2'] ?>"
                                                 value="<?php if (isset($data['Q7F1S2'])) echo $data['Q7F1S2'] ?>"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Pav
                    bhaji</label>
                  </div>
                  <div class="col-xs-5">
                    <input class="form-control space-textbox"
                                                 id="Q7F1S3"
                                                 type="number"
                                                 name="Q7F1S3"
                                                 placeholder="<?php if (isset($data['Q7F1S3'])) echo $data['Q7F1S3'] ?>"
                                                 value="<?php if (isset($data['Q7F1S3'])) echo $data['Q7F1S3'] ?>"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Momos</label>
                  </div>
                  <div class="col-xs-5">
                    <input class="form-control space-textbox"
                                                 id="Q7F1S4"
                                                 type="number"
                                                 name="Q7F1S4"
                                                 placeholder="<?php if (isset($data['Q7F1S4'])) echo $data['Q7F1S4'] ?>"
                                                 value="<?php if (isset($data['Q7F1S4'])) echo $data['Q7F1S4'] ?>"/>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-xs-3">
                    <label>Others</label>
                  </div>
                  <div class="col-xs-5">
                    <input class="form-control space-textbox"
                                                 id="Q7F1S5"
                                                 type="number"
                                                 name="Q7F1S5"
                                                 placeholder="<?php if (isset($data['Q7F1S5'])) echo $data['Q7F1S5'] ?>"
                                                 value="<?php if (isset($data['Q7F1S5'])) echo $data['Q7F1S5'] ?>"/>
                  </div>
                </div>

    
            <div class="form-group"
                                         id="Q7F2S1">
                <label class="control-label">Please
                upload
                picture
                of
                traditional
                food
                items
                sold
                in
                canteen</label>
                <br/>
                <button class="btn uploadbtn upload"
                                            data-id="Canteen Food Items"
                                            data-toggle="modal"
                                            data-target="#airModal"
                                            type="button"> UPLOAD
                FILES </button>
                <br>
                <br>
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
                  <?php foreach ($canteen as $f) { ?>
                  <tr id="index<?php echo $f->id; ?>">
                    <?php 
       // $array = explode('.',$f->file_name); 
     // $count = count($array);
      ///$extension = $array[$count-1];
                ?>
                    <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
                    <!--   <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
                    file_name ?>" class="img-responsive" />
                    </td>
                    -->
                    <?php //}else{ ?>
                    <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
                    <?php //}?>
                    <?php $name = str_replace(" ", "_", $f->name . "_Canteen_Food_Items_"); ?>
                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="form-group"
                                         id="Q7F3S1">
                <label class="control-label"><span
                                            class="cube">4(b)</span>Give
                descriptions
                for
                rare
                local
                snacks
                served
                in
                your
                school:</label>
                <textarea
                                          type="textbox"
                                          rows="5"
                                          name="Q7F3S1"
                                          placeholder="<?php if (isset($data['Q7F3S1'])) echo $data['Q7F3S1'] ?>"
                                          ><?php if (isset($data['Q7F3S1'])) echo $data['Q7F3S1'] ?></textarea>
                <br>
              </div>


              </div>
             
              <?php
//}
?>
              <?php
if (isset($data['Q4F1']))
if ($data['Q4F1'] == 'Y') {
?>
              <div class="form-group"
                                     id="Q8F1">
                <?php } else { ?>
                <div class="form-group"
                                       id="Q8F1"
                                       style="display: none;">
                  <?php } else { ?>
                  <div class="form-group"
                                       id="Q8F1"
                                       style="display: none;">
                    <?php } ?>
                    <label class="control-label"><span
                                        class="cube">5</span>Does
                    your
                    school
                    serve
                    traditional
                    Indian
                    beverages?<a
                                        class="tt"
                                        data-tooltip="Traditional Indian beverages are any drink items prepared within the school on the same day for immediate consumption. Monitor over a period of a month."><span
                                          class="badge">?</span></a></label>
                    <ul class="list-inline">
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio"
                                               name="Q8F1"
                                               onclick="ComputeBeverages(1)"
                                               value="<?php echo set_value('Q8F1', 'Y') ?>" <?php if (isset($data['Q8F1'])) echo $data['Q8F1'] == 'Y' ? "checked" : "" ?>>
                        Yes </label>
                      </li>
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio"
                                               id="Q8F1_2"
                                               name="Q8F1"
                                               onclick="ComputeBeverages(2)"
                                               value="<?php echo set_value('Q8F1', 'N') ?>" <?php if (isset($data['Q8F1'])) echo $data['Q8F1'] == 'N' ? "checked" : "" ?>/>
                        No </label>
                      </li>
                    </ul>
                  </div>
                  <?php
/* if (isset($data['Q4F1']))
if ($data['Q4F1'] == 'Y')
if (isset($data['Q8F1']))
if ($data['Q8F1'] == 'Y') { */
?>
                  <div class="form-group"  id="beverages" style="display:none;">
                    <label class="control-label"><span
                                                class="cube">5(a)</span>Please
                    provide
                    details:<a
                                                class="tt"
                                                data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section."
                                                href="#"><span
                                                  class="badge">?</span></a></label>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Traditional
                        Indian
                        beverages</label>
                      </div>
                      <div class="col-xs-5">
                        <label>Number
                        of
                        servings
                        sold
                        when
                        on
                        the
                        menu</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Nimboo
                        Pani</label>
                      </div>
                      <div class="col-xs-5">
                        <input class="form-control space-textbox"
                                                     id="Q8F1S1"
                                                     type="number"
                                                     name="Q8F1S1"
                                                     placeholder="<?php if (isset($data['Q8F1S1'])) echo $data['Q8F1S1'] ?>"
                                                     value="<?php if (isset($data['Q8F1S1'])) echo $data['Q8F1S1'] ?>"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Sweet
                        Lassi</label>
                      </div>
                      <div class="col-xs-5">
                        <input class="form-control space-textbox"
                                                     id="Q8F1S2"
                                                     type="number"
                                                     name="Q8F1S2"
                                                     placeholder="<?php if (isset($data['Q8F1S2'])) echo $data['Q8F1S2'] ?>"
                                                     value="<?php if (isset($data['Q8F1S2'])) echo $data['Q8F1S2'] ?>"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Salted
                        Butter
                        Milk</label>
                      </div>
                      <div class="col-xs-5">
                        <input class="form-control space-textbox"
                                                     id="Q8F1S3"
                                                     type="number"
                                                     name="Q8F1S3"
                                                     placeholder="<?php if (isset($data['Q8F1S3'])) echo $data['Q8F1S3'] ?>"
                                                     value="<?php if (isset($data['Q8F1S3'])) echo $data['Q8F1S3'] ?>"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Aam
                        Panna</label>
                      </div>
                      <div class="col-xs-5">
                        <input class="form-control space-textbox"
                                                     id="Q8F1S4"
                                                     type="number"
                                                     name="Q8F1S4"
                                                     placeholder="<?php if (isset($data['Q8F1S4'])) echo $data['Q8F1S4'] ?>"
                                                     value="<?php if (isset($data['Q8F1S4'])) echo $data['Q8F1S4'] ?>"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-3">
                        <label>Others</label>
                      </div>
                      <div class="col-xs-5">
                        <input class="form-control space-textbox"
                                                     id="Q8F1S5"
                                                     type="number"
                                                     name="Q8F1S5"
                                                     placeholder="<?php if (isset($data['Q8F1S5'])) echo $data['Q8F1S5'] ?>"
                                                     value="<?php if (isset($data['Q8F1S5'])) echo $data['Q8F1S5'] ?>"/>
                      </div>
                    </div>
                  </div>
                  <?php
/* } */
?>
                  <div class="form-group">
                    <label>
                    <h6> Task
                      4:
                      What
                      kind
                      of
                      food
                      does
                      your
                      school
                      promote?</h6>
                    </label>
                  </div>
      
      
          <div class="form-group">
                    <label class="control-label"><span
                                        class="cube">6</span> Does your school allow the students to bring packaged food items (from home) for lunch? </label>
                    <ul class="list-inline">
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio" name="Q9F1C1" value="<?php echo set_value('Q9F1C1', 'Y') ?>" <?php if (isset($data['Q9F1C1'])) echo $data['Q9F1C1'] == 'Y' ? "checked" : "" ?>>
                        Yes </label>
                      </li>
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio" name="Q9F1C1" id="Q9F1C1" value="<?php echo set_value('Q9F1C1', 'N') ?>" <?php if (isset($data['Q9F1C1'])) echo $data['Q9F1C1'] == 'N' ? "checked" : "" ?>/>
                        No </label>
                      </li>
                    </ul>
                  </div>    
      
      
      
      
                  <div class="form-group">
                    <label class="control-label"><span
                                        class="cube">7</span> Does the
                    school
                    distribute
                    packaged
                    food
                    items as
                    rewards
                    during
                    schools
                    events?</label>
                    <ul class="list-inline">
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio"
                                               name="Q9F1"
                                               onclick="ComputePackaged(1)"
                                               value="<?php echo set_value('Q9F1', 'Y') ?>" <?php if (isset($data['Q9F1'])) echo $data['Q9F1'] == 'Y' ? "checked" : "" ?>>
                        Yes </label>
                      </li>
                      <li>
                        <label class="radio-inline text-gray">
                        <input type="radio"
                                               name="Q9F1" id="Q9F1_N"
                                               onclick="ComputePackaged(2)"
                                               value="<?php echo set_value('Q9F1', 'N') ?>" <?php if (isset($data['Q9F1'])) echo $data['Q9F1'] == 'N' ? "checked" : "" ?>/>
                        No </label>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php
/* if (isset($data['Q9F1']))
if ($data['Q9F1'] == 'Y') { */
?>
                <div class="form-group"  id="Q9F2" style="display:none;">
                  <label class="control-label"><span
                                          class="cube">7(a)</span>Please
                  provide
                  details:<a
                                          class="tt"
                                          data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut"
                                          href="#"><span
                                            class="badge">?</span></a></label>
                  <textarea
                                        type="text"
                                        rows="5"
                                        id="Q9F2"
                                        name="Q9F2"
                                        placeholder="<?php if (isset($data['Q9F2'])) echo $data['Q9F2'] ?>"
                                        ><?php if (isset($data['Q9F2'])) echo $data['Q9F2'] ?></textarea>
                  <br>
                </div>
                <?php
/* } */
?>
                <div class="form-group">
                  <label class="control-label"><span
                                      class="cube">8</span>Does
                  the
                  school
                  distribute
                  chocolates/similar
                  products
                  as
                  refreshments
                  during
                  schools
                  events?</label>
                  <ul class="list-inline">
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             id="Q10F1"
                                             name="Q10F1"
                                             onclick="ComputeChocolates(1)"
                                             value="<?php echo set_value('Q10F1', 'Y') ?>" <?php if (isset($data['Q10F1'])) echo $data['Q10F1'] == 'Y' ? "checked" : "" ?>>
                      Yes </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             id="Q10F1"
                                             name="Q10F1"
                                             onclick="ComputeChocolates(2)"
                                             value="<?php echo set_value('Q10F1', 'N') ?>" <?php if (isset($data['Q10F1'])) echo $data['Q10F1'] == 'N' ? "checked" : "" ?>/>
                      No </label>
                    </li>
                  </ul>
                </div>
                <?php
if (isset($data['Q10F1']))
if ($data['Q10F1'] == 'Y') {
?>
                <div class="form-group"
                                       id="Q10F2">
                  <label class="control-label"><span
                                          class="cube">8(a)</span>Please
                  provide
                  the
                  names: <a class="tt" data-tooltip="For example, Fanta, small packets of chips or Kurkure, etc."><span class="badge">?</span></a></label>
                  <textarea
                                        type="text"
                                        id="Q10F2"
                                        rows="5"
                                        name="Q10F2"
                                        placeholder="<?php if (isset($data['Q10F2'])) echo $data['Q10F2'] ?>"
                                        ><?php if (isset($data['Q10F2'])) echo $data['Q10F2'] ?></textarea>
                  <br>
                </div>
                <?php
}
?>
                <div class="form-group"
                                   id="Q10F2"
                                   style="display: none;">
                  <label class="control-label"><span
                                      class="cube">8(a)</span>Please
                  provide
                  the
                  names: <a class="tt" data-tooltip="For example, Fanta, small packets of chips or Kurkure, etc."><span class="badge">?</span></a></label>
                  <textarea
                                    type="text"
                                    id="Q10F2"
                                    rows="5"
                                    name="Q10F2"
                                    placeholder="<?php if (isset($data['Q10F2'])) echo $data['Q10F2'] ?>"
                                    value="<?php if (isset($data['Q10F2'])) echo $data['Q10F2'] ?>"></textarea>
                  <br>
                </div>
                <div class="form-group">
                  <label class="control-label"><span
                                      class="cube">9</span>Are
                  your
                  school
                  events
                  such as
                  quiz
                  shows,
                  talent
                  shows,
                  debates
                  sponsored
                  by food
                  companies/brands?</label>
                  <ul class="list-inline">
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q11F1"
                                             onclick="ComputeBanners(1)"
                                             value="<?php echo set_value('Q11F1', 'Y') ?>" <?php if (isset($data['Q11F1'])) echo $data['Q11F1'] == 'Y' ? "checked" : "" ?>>
                      Yes </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q11F1"
                                             onclick="ComputeBanners(2)"
                                             value="<?php echo set_value('Q11F1', 'N') ?>" <?php if (isset($data['Q11F1'])) echo $data['Q11F1'] == 'N' ? "checked" : "" ?>
                                             /I>
                      No </label>
                    </li>
                  </ul>
                </div>
                <div class="form-group"
                                   id="Q11F2"
<?php
if (isset($data['Q11F1'])) {
if ($data['Q11F1'] == 'Y') {
echo 'style="display:block;"';
} else {
echo 'style="display:none;"';
}
} else {
echo 'style="display:none;"';
}
?>
                                   >
                  <label class="control-label"><span
                                      class="cube">9(a)</span> Please
                  provide
                  the
                  names
                  of
                  sponsors:<a
                                      class="tt"
                                      data-tooltip="For example Complan, Quaker Oats, Cadbury, etc."
                                      href="#"><span
                                        class="badge">?</span></a></label>
                  <textarea
                                    type="text"
                                    id="Q11F2"
                                    rows="5"
                                    name="Q11F2"
                                    placeholder="<?php if (isset($data['Q11F2'])) echo $data['Q11F2'] ?>"
                                    ><?php if (isset($data['Q11F2'])) echo $data['Q11F2'] ?></textarea>
                  <br>
                </div>
                <div class="form-group"
                                   id="Q11F3"
<?php
if (isset($data['Q11F1'])) {
if ($data['Q11F1'] == 'Y') {
echo 'style="display:block;"';
} else {
echo 'style="display:none;"';
}
} else {
echo 'style="display:none;"';
}
?>
                                   >
                  <label class="control-label"><span
                                      class="cube">9(b)</span>Are
                  their
                  banners,
                  brochures,
                  hoardings,
                  stalls
                  etc.
                  put
                  up
                  during
                  the
                  events?</label>
                  <ul class="list-inline">
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             id="Q11F3"
                                             name="Q11F3"
                                             value="<?php echo set_value('Q11F3', 'Y') ?>" <?php if (isset($data['Q11F3'])) echo $data['Q11F3'] == 'Y' ? "checked" : "" ?>>
                      Yes </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             id="Q11F3"
                                             name="Q11F3"
                                             value="<?php echo set_value('Q11F3', 'N') ?>" <?php if (isset($data['Q11F3'])) echo $data['Q11F3'] == 'N' ? "checked" : "" ?>
                                             /I>
                      No </label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <label>Please upload pictures of events sponsored by UPPF (ultra-processed packaged food) companies</label>
                <br>
                Please
                upload all
                supporting
                documents
                related to
                this section
                here. Note:
                files must
                be in one of
                the
                following
                formats: PDF
                Document
                (.pdf), Word
                Document
                (.doc,
                .docx), Image File
                (.jpg,
                .jpeg). File
                size per
                document
                should not
                exceed <strong>100
                KB.</strong><br/>
                <br/>
                <button class="btn uploadbtn upload"
                                    data-id="Audit Team doing Survey"
                                    data-toggle="modal"
                                    data-target="#airModal"
                                    type="button"> UPLOAD
                FILES </button>
                <br>
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
                  <?php foreach ($files as $f) { ?>
                  <tr id="index<?php echo $f->id; ?>">
                    <?php 
         // $array = explode('.',$f->file_name); 
         // $count = count($array);
         // $extension = $array[$count-1];
                  ?>
                    <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
                    <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
                    file_name ?>" class="img-responsive" />
                    </td>
                    -->
                    <?php //}else{ ?>
                    <!-- <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
                    <?php // }?>
                    <?php $name = str_replace(" ", "_", $f->name . "_Audit_Team_doing_Survey_"); ?>
                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="form-group">
                <label>
                <h6> Task
                  5:
                  School
                  Initiatives</h6>
                </label>
              </div>
              <div class="form-group">
                <label class="control-label"><span
                                    class="cube">10</span> Does
                your
                school
                measure
                height
                and
                weight
                of all
                the
                students?</label>
                <ul class="list-inline">
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           name="Q12F1"
                                           onclick="Measure(1)"
                                           value="<?php echo set_value('Q12F1', 'Y') ?>" <?php if (isset($data['Q12F1'])) echo $data['Q12F1'] == 'Y' ? "checked" : "" ?>>
                    Yes </label>
                  </li>
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           name="Q12F1"
                                           onclick="Measure(2)"
                                           value="<?php echo set_value('Q12F1', 'N') ?>" <?php if (isset($data['Q12F1'])) echo $data['Q12F1'] == 'N' ? "checked" : "" ?>/>
                    No </label>
                  </li>
                </ul>
              </div>
              <div class="form-group"
                                 id="Q12F2"
<?php
if (isset($data['Q12F1'])) {
if ($data['Q12F1'] == 'N') {
echo 'style="display:none;"';
} else {
echo 'style="display:block;"';
}
} else {
echo 'style="display:none;"';
}
?> >
                <label class="control-label"><span
                                    class="cube">10(a)</span>How
                regularly
                is
                height
                and
                weight
                of the
                students
                measured?</label>
                <div class="form-group">
                  <ul>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q12F2"
                                             value="<?php echo set_value('Q12F2', 1) ?>" <?php if (isset($data['Q12F2'])) echo $data['Q12F2'] == 1 ? "checked" : "" ?>>
                      Monthly </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q12F2"
                                             value="<?php echo set_value('Q12F2', 2) ?>" <?php if (isset($data['Q12F2'])) echo $data['Q12F2'] == 2 ? "checked" : "" ?>
                                             >
                      Quarterly </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q12F2"
                                             value="<?php echo set_value('Q12F2', 3) ?>" <?php if (isset($data['Q12F2'])) echo $data['Q12F2'] == 3 ? "checked" : "" ?>
                                             >
                      Bi-annually </label>
                    </li>
                    <li>
                      <label class="radio-inline text-gray">
                      <input type="radio"
                                             name="Q12F2"
                                             value="<?php echo set_value('Q12F2', 4) ?>" <?php if (isset($data['Q12F2'])) echo $data['Q12F2'] == 4 ? "checked" : "" ?>
                                             >
                      Annually </label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label"><span
                                    class="cube">11</span>Is
                cooking
                part of
                any
                regular
                subjects
                or
                extracurricular
                activities?</label>
                <ul class="list-inline">
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           name="Q13F1"
                                           onclick="ExtraCurricular(1)"
                                           value="<?php echo set_value('Q13F1', 'Y') ?>" <?php if (isset($data['Q13F1'])) echo $data['Q13F1'] == 'Y' ? "checked" : "" ?>>
                    Yes </label>
                  </li>
                  <li>
                    <label class="radio-inline text-gray">
                    <input type="radio"
                                           name="Q13F1"
                                           onclick="ExtraCurricular(2)"
                                           value="<?php echo set_value('Q13F1', 'N') ?>" <?php if (isset($data['Q13F1'])) echo $data['Q13F1'] == 'N' ? "checked" : "" ?>/>
                    No </label>
                  </li>
                </ul>
              </div>
              <div class="form-group"
                                 id="Q13F2"
<?php
if (isset($data['Q13F1'])) {
if ($data['Q13F1'] == 'N') {
echo 'style="display:none;"';
} else {
echo 'style="display:block"';
}
} else
echo 'style="display:none;"';
?>
                                 >
                <label for="username"
                                     class="control-label"><span
                                    class="cube">11(a)</span>If
                yes,
                please
                share
                the
                details</label>
                <textarea type="text" rows="5" id="Q13F2" name="Q13F2" placeholder="<?php if (isset($data['Q13F2'])) echo $data['Q13F2'] ?>"><?php if (isset($data['Q13F2'])) echo $data['Q13F2'] ?></textarea>
              </div>
              <div class="form-group">
                <label class="control-label">Please
                upload
                pictures
                of your
                Audit
                Team
                doing
                the
                survey</label>
                <br>
                <br>
                Please
                upload all
                supporting
                documents
                related to
                this section
                here. Note:
                files must
                be in one of
                the
                following
                formats: PDF
                Document
                (.pdf), Word
                Document
                (.doc,
                .docx), Image File
                (.jpg,
                .jpeg). File
                size per
                document
                should not
                exceed <strong>100
                KB.</strong><br>
                <div class="clearfix"> &nbsp; </div>
                <button class="btn uploadbtn upload" data-id="UPPF" data-toggle="modal"
                                    data-target="#airModal" type="button"> UPLOAD FILES </button>
                <br>
                <br>
              </div>
              <div class="clearfix">&nbsp;</div>
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
                  <?php foreach ($uppc as $u) { ?>
                  <tr id="index<?php echo $u->id; ?>">
                    <?php 
      //  $array = explode('.',$u->file_name); 
    //  $count = count($array);
     // $extension = $array[$count-1];
                ?>
                    <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
                    <!-- <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $u->
                    file_name ?>" class="img-responsive" />
                    </td>
                    -->
                    <?php //}else{ ?>
                    <!--  <td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
                    <?php //}?>
                    <?php $name = str_replace(" ", "_", $u->name . "_UPPF_"); ?>
                    <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="text-center">
                <button type="button"
                                    class="org-btn"
                                    id="btnFoodPrevious"> Previous </button>
                <button type="submit"
                                    class="org-btn"
                                    id="foodnext"
                                    value="movenext"> Next </button>
                <button type="button" class="org-btn submit button" id="foodsave"> Save and Resume Later</button>
                <?php echo form_close(); ?> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<style type="text/css">
                  .text-gray {
                    color: #666666 !important;
                    /*font-weight:100!important;*/
                  }
                </style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close"  data-dismiss="modal">&times; </button>
        <h4 class="modal-title">View video
          tutorial</h4>
      </div>
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/9r3Lwrd9BUs" id="video" frameborder="0"
                          allowfullscreen></iframe>
    </div>
  </div>
</div>



<script>
  jQuery(document).ready(function(){
  
  jQuery('#food').validate({
    rules:{
          Q1F1S1:{
          required:true,
        },
        Q1F1S3:{
          required:true,
        },
        Q1F1S2:{
          required:true,
        },
        Q2F1S1:{
          required:true,
        },
         Q2F1S3:{
          required:true,
        },
         Q2F1S2:{
          required:true,
        },
        Q3F1S1:{
          required:true,
        },
        Q3F1S2:{
          required:true,
        },
        Q3F1S3:{
          required:true,
        },
        Q4F1:{
          required:true,
        },
        Q5F1:{
          required:true,
        },
                            Q5F2:{
                                required:true,
                              },
        Q5F1S1:{
          required:true,
        },
        Q5F2S1:{
          required:true,
        },
        Q5F2S2:{
          required:true,
        },
        Q5F2S3:{
          required:true,
        },
        Q5F2S4:{
          required:true,
        },
        Q5F2S5:{
          required:true,
        },
        Q5F2S6:{
          required:true,
        },
        Q5F2S7:{
          required:true,
        },
        Q5F2S8:{
          required:true,
        },
        Q5F2S9:{
          required:true,
        },
        Q5F2S10:{
          required:true,
        },
        Q5F2S11:{
          required:true,
        },
        Q5F2S12:{
          required:true,
        },
        Q5F2S13:{
          required:true,
        },
        Q5F2S14:{
          required:true,
        },
        Q5F3S1:{
          required:true,
        },
        Q6F2S1:{
          required:true,
        },
        Q6F2S2:{
          required:true,
        },
        Q6F2S3:{
          required:true,
        },
        Q6F3S1:{
          required:true,
        },
        Q6F3S2:{
          required:true,
        },
        Q6F3S3:{
          required:true,
        },
        Q6F4S1:{
          required:true,
        },
        Q6F4S2:{
          required:true,
        },
        Q6F4S3:{
          required:true,
        },
        Q6F5S1:{
          required:true,
        },
        Q6F5S2:{
          required:true,
        },
        Q6F5S3:{
          required:true,
        },
        Q6F6S1:{
          required:true,
        },
        Q6F6S2:{
          required:true,
        },
        Q6F6S3:{
          required:true,
        },
        Q6F7S1:{
          required:true,
        },
        Q6F7S2:{
          required:true,
        },
        Q6F7S3:{
          required:true,
        },
        Q6F8S1:{
          required:true,
        },
        Q6F8S2:{
          required:true,
        },
        Q6F8S3:{
          required:true,
        },
        Q6F9S1:{
          required:true,
        },
        Q6F9S2:{
          required:true,
        },
        Q6F9S3:{
          required:true,
        },
        Q6F10S1:{
          required:true,
        },
        Q6F10S2:{
          required:true,
        },
        Q6F10S3:{
          required:true,
        },
        Q7F1:{
          required:true,
        },
        Q8F1:{
          required:true,
        },
        Q9F1:{
          required:true,
        },
        Q10F1:{
          required:true,
        },
        Q10F2:{
          required:true,
        },
        Q11F1:{
          required:true,
        },
        Q11F2:{
          required:true,
        },
        Q11F3:{
          required:true,
        },   
        Q12F1:{
          required:true,
        },
        Q12F2:{
          required:true,
        },
        Q13F1:{
          required:true,
        },
        Q13F2:{
          required:true,
        },
        Q7F1S1:{
          required:true,
        },
        Q7F1S2:{
          required:true,
        },
        Q7F1S3:{
          required:true,
        },
        Q7F1S4:{
          required:true,
        },
        Q7F1S5:{
          required:true,
        },
        Q7F3S1:{
          required:true,
        },
        Q8F1S1:{
          required:true,
        },
        Q8F1S2:{
          required:true,
        },
        Q8F1S3:{
          required:true,
        },
        Q8F1S4:{
          required:true,
        },
        Q8F1S5:{
          required:true,
        },
        Q9F2:{
          required:true,
        },
        Q13F2:{
          required:true,
        },
                         food2019_1:{
                                 required:true,
                           } 
    }
       
  });
  });
  
  jQuery('#foodnext').click(function(e){
    
    
    $r=jQuery('#food').valid();
    if($r == false)
    {
         e.preventDefault();
			alert('You will need to enter data in all fields to move forward. Please scroll above to check again.');
         jQuery('#food').valid();
    }
    
    
  });
  
  </script>


<script>
 $(document).ready(function(){
   
 
   $("input[name='Q9F1']").click(function(){
      if($(this).val()==='Y'){
       $("#Q9F2").show();
      }else{
        $("#Q9F2").hide();
      }
   });
   });
  
  
   $(window).load(function() {
  if ($("input[name='Q9F1']").is(":checked")) {
     if($("input[name='Q9F1']:checked").val()==='Y'){
    $("#Q9F2").show();
   }else{
    $("#Q9F2").hide(); 
   }
  }
 });
</script>

<script>
 $(document).ready(function(){
  
   $("input[name='Q7F1']").click(function(){
      if($(this).val()==='Y'){
       $("#traditional").show();
      }else{
        $("#traditional").hide();
      }
   });
   });
  
   $(window).load(function() {
   if ($("input[name='Q7F1']").is(":checked")) {
   
   if($("input[name='Q7F1']:checked").val()==='Y'){
     $("#traditional").show();
     }else {
     $("#traditional").hide();
   }
   }
 });
</script>

<script>
 $(document).ready(function(){
  
   $("input[name='Q8F1']").click(function(){
      if($(this).val()==='Y'){
       $("#beverages").show();
      }else{
        $("#beverages").hide();
      }
   });
  });
  
  
   $(window).load(function() {
    if ($("input[name='Q8F1']").is(":checked")) {
     
     if($("input[name='Q8F1']:checked").val()==='Y'){

     $("#beverages").show();
   }else{
      $("#beverages").hide();
   }
   
  }
 });
</script>


<script>
jQuery('#foodnext').click(function(e){
if($("input[name='Q12F1']:checked").val()==='Y'){
    if($('input[name=Q12F2]:checked').length == 0){
 
       alert("9(a) How regularly is height and weight of the students measured?");
         e.preventDefault();
     }
}

if($("input[name='Q13F1']:checked").val()==='Y'){
 if($("textarea[name='Q13F2']").val()==''){
         alert("10(a)If yes, please share the details");
         e.preventDefault();
 }
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
    $('#btnFoodPrevious').on('click', function (data) {
      var fd = $('#food').serialize();
       // console.log(fd);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('previous/foodajax') ?>',
        data: fd,
        success: function (data) {
               // console.log(data);
               window.location.href = "<?php echo base_url('energy'); ?>";  
        }
      });
    });
  
    $('#foodsave').on('click', function (data) {
      var fd = $('#food').serialize();
      //console.log(fd);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('previous/foodajax') ?>',
        data: fd,
        success: function (data) {
          window.location.href = "<?php echo base_url('logout'); ?>";
        }
      });
    });
    
    /**This Code Used For Submit Form Through Menu**/
          $('ol li').click(function(){
            var fd = $('#food').serialize();
              $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/foodajax') ?>',
                data: fd,
                success: function (data) {
                  <!--window.location.href = "<?php echo base_url('general'); ?>";-->
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
</script>
<script>
/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#foodnext").click(function(e){
if($("#Q1F1S1").attr('placeholder')==""  || $("#Q1F1S3").attr('placeholder')==""  || $("#Q1F1S2").attr('placeholder')==""){ 
if($("#Q1F1S1").val()==""  || $("#Q1F1S3").val()==""  || $("#Q1F1S2").val()==""){ 
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
$("#foodnext").click(function(e){
if($("#Q2F1S1").attr('placeholder')==""  || $("#Q2F1S3").attr('placeholder')==""  || $("#Q2F1S2").attr('placeholder')==""){
if($("#Q2F1S1").val()=="" || $("#Q2F1S3").val()==""  || $("#Q2F1S2").val()==""){  
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
$("#foodnext").click(function(e){
if($("#Q3F1S1").attr('placeholder')==""  || $("#Q3F1S2").attr('placeholder')==""  || $("#Q3F1S3").attr('placeholder')==""){ 
if($("#Q3F1S1").val()==""  || $("#Q3F1S2").val()==""  || $("#Q3F1S3").val()==""){ 
alert("School Must Add Student  First Name, Last Name & Grade.");
e.preventDefault();
  if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
}
}
});
/**Q6(a) Validation**/  
$("#foodnext").click(function(e){
 if($("input[name='Q9F1']:checked").val()==='Y'){
   /*if($("input[name='Q9F2']").val()===undefined){  
     alert("Q6(a) Please Provide Details.."); 
      e.preventDefault();
   }*/
   if($("input[name='Q9F2']").val()=="" || $("input[name='Q9F2']").attr("placeholder")==""){
      alert("Q6(a) Please Provide Details.."); 
      e.preventDefault();
     if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
  }
 /**Q10 Validation**/
 if($("input[name='Q13F1']").val()=="" && $("input[name='Q13F1']").attr("placeholder")=="" && $("input[name='Q13F1']").val()===undefined){
   alert("Q10 Is cooking part of any regular subjects or extracurricular activities?.."); 
   e.preventDefault();
  }
 /**Q10(a) Validation**/  
 if($("input[name='Q13F1']:checked").val()==='Y'){
  if($("input[name='Q13F2']").val()==""){
   alert("Q10(a) Please Provide Details.."); 
   e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
   }
 }
 /**Q2 Validation**/
   if($("input[name='Q5F1']:checked").val()==='Y'){
     if($('input[name="Q5F1S1"]:checked').length == 0){
        alert("Q2(a) If yes, then midday meal is served under:.."); 
        e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
     }
     if($('input[name="Q5F2S1"]:checked').length == 0 || $('input[name="Q5F2S2"]:checked').length == 0 || $('input[name="Q5F2S3"]:checked').length == 0 || $('input[name="Q5F2S4"]:checked').length == 0 || $('input[name="Q5F2S5"]:checked').length == 0 || $('input[name="Q5F2S6"]:checked').length == 0 || $('input[name="Q5F2S7"]:checked').length == 0 || $('input[name="Q5F2S8"]:checked').length == 0 || $('input[name="Q5F2S9"]:checked').length == 0 || $('input[name="Q5F2S10"]:checked').length == 0 || $('input[name="Q5F2S11"]:checked').length == 0 || $('input[name="Q5F2S12"]:checked').length == 0 || $('input[name="Q5F2S13"]:checked').length == 0 || $('input[name="Q5F2S14"]:checked').length == 0){
       alert("Q2(b) What kind of food items are served in midday meal?.."); 
      e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
         }   
  }
 /**Q1 Validation**/
  if($('input[name="Q4F1"]:checked').length == 0){
        alert("Q1 Does your school have a provision/space to sell packaged food items within the campus.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 /**Q4 Validation**/
if($('input[name="Q4F1"]:checked').val()==='Y'){  
  if($('input[name="Q7F1"]:checked').length == 0){
        alert("Q4 Does your school serve traditional Indian snacks?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 /**Q5 Validation**/
  if($('input[name="Q8F1"]:checked').length == 0){
        alert("Q5 Does your school serve traditional Indian beverages?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
} 

 /**Q7 Validation**/
  if($('input[name="Q10F1"]:checked').length == 0){
        alert("Q7 Does the school distribute chocolates/similar products as refreshments during schools events?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 /**Q8 Validation**/
  if($('input[name="Q11F1"]:checked').length == 0){
        alert("Q8 Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 /**Q9 Validation**/
  if($('input[name="Q12F1"]:checked').length == 0){
        alert("Q9 Does your school measure height and weight of all the students?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
 /**Q10 Validation**/
  if($('input[name="Q13F1"]:checked').length == 0){
        alert("Q10 Is cooking part of any regular subjects or extracurricular activities?.."); 
        e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
 }
/*Q7a Validation*/
  if($("input[name='Q10F1']:checked").val()==='Y'){
     if($('input[name="Q10F2"]').attr("placeholder")==""){
        alert("Q7(a) Please provide the names: .."); 
        e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
     }
     if(escape($("input[name='Q10F2']").val())===undefined && escape($('input[name="Q10F2"]').attr("placeholder"))===undefined){   
            alert("Q7(a) Please provide the names: .."); 
             e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
       }
  }
/*Q8a Validation*/
  if($("input[name='Q11F1']:checked").val()==='Y'){
     if($('input[name="Q11F2"]').val()==""){
        alert("Q8(a) Please provide the names of sponsors: .."); 
        e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
     }
       if(escape($("input[name='Q11F2']").val())===undefined){   
            alert("Q8(a) Please provide the names of sponsors: .."); 
             e.preventDefault();
         if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
       }
  }
 /*Q10a Validation*/
  if($("input[name='Q13F1']:checked").val()==='Y'){
     if($("input[name='Q13F2']").attr('placeholder')==""){
        alert("Q10(a) If yes, please share the details .."); 
        e.preventDefault();
       if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
     }
       if($("input[name='Q13F2']").attr('placeholder')==""){   
            alert("Q10(a) If yes, please share the details: .."); 
             e.preventDefault();
         if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
       }
  }
/*Q3 Validation*/
  if($('input[name="Q4F1"]:checked').val()==='Y'){  
  if($('input[name="Q6F2S1"]').val()=="" || $('input[name="Q6F2S2"]').val()=="" || $('input[name="Q6F2S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc)"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F3S1"]').val()=="" || $('input[name="Q6F3S2"]').val()=="" || $('input[name="Q6F3S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc)"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F4S1"]').val()=="" || $('input[name="Q6F4S2"]').val()=="" || $('input[name="Q6F4S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Potato fries and burgers)"); 
            e.preventDefault(); 
  }
  if($('input[name="Q6F5S1"]').val()=="" || $('input[name="Q6F5S2"]').val()=="" || $('input[name="Q6F5S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Confectionery items (chocolate, candies, gums))"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F6S1"]').val()=="" || $('input[name="Q6F6S2"]').val()=="" || $('input[name="Q6F6S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Ice cream))"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F7S1"]').val()=="" || $('input[name="Q6F7S2"]').val()=="" || $('input[name="Q6F7S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Carbonated beverages))"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F8S1"]').val()=="" || $('input[name="Q6F8S2"]').val()=="" || $('input[name="Q6F8S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Sugar sweetened non-carbonated beverages))"); 
            e.preventDefault();
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F9S1"]').val()=="" || $('input[name="Q6F9S2"]').val()=="" || $('input[name="Q6F9S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Packaged/bottled nimboo paani/lassi/flavoured milk))"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  if($('input[name="Q6F10S1"]').val()=="" || $('input[name="Q6F10S2"]').val()=="" || $('input[name="Q6F10S3"]').val()==""){
      alert("Q3 What kind of food is being served / sold in your school? ..(Packaged/bottled energy drinks))"); 
            e.preventDefault(); 
    if(e.isDefaultPrevented()){
       setTimeout(function(){ $(".hide_one").css("display","none"); },600);
    }
  }
  }   
});
</script>
<style type="text/css">
.tt{ top:-21px;}
</style>
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

