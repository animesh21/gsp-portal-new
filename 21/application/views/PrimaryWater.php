<?php $this->load->view('header');?>
<style>
    .form-group > label ul {
        list-style-type:none !important;
    }
    .bold{ color:#e86549;}
    .form-group{
        margin-bottom:20px;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{      border-top:none;
    }
    .list-inline li{
        width:220px;
    }
    .list-inline-1 li{
        width:70px;
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
    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<!--     <li>|</li>
    <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
  </ul>
</div>
<div id="pprg" class="newprog progress" style="text-align:center">
  <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
</div>
<div class="intro">
  <h1>WATER <span style="text-transform:capitalize">(Primary)</span> <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--   <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="<?php echo base_url(); ?>assets/img/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
</div>
<br>
To understand water, it is important to know the source of water in your school premise. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive. The questions below will help students to understand where their water is coming from – at a cost. <br>
<br>
<strong>The unit of measurement to be used in the Water section is Litre (L).</strong> <br>
<br>
<?php echo form_open('water/set',array('id'=>'PrimaryWater')); ?>
<div class="form-group">
  <label>
  <h6> Task 1: Choose your Water Audit Team <a class="tt" data-tooltip="The first name of need to have both first and last name. In the rest of the rows, if a team member does not have a last name, then they can press the space bar once and move to the next field."><span class="badge">?</span></a> </h6>
  </label>
  <br>
  Before you start, you must put together a team. An ideal team would consist of one teacher  to guide you during the audit. You would also require the help of the administrative staff of your school and other staff, such as the plumber, electrician and other maintenance staff. And, most importantly, five to 10 of your schoolmates </div>
<div class="form-group">
  <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
</div>
<div class="form-group-1 row">
  <div class="col-xs-1"> </div>
  <div class="col-xs-3">
    <label class="text-gray">First Name</label>
  </div>
  <div class="col-xs-3">
    <label class="text-gray">Last Name</label>
  </div>
  <div class="col-xs-3">
    <label class="text-gray">Email ID</label>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 1 </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W1S1" type="text" name="Q1W1S1" placeholder="<?php if(isset($data['Q1W1S1'])) echo $data['Q1W1S1']; ?>" value="<?php echo set_value('Q1W1S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W1S3" type="text" name="Q1W1S3" placeholder="<?php if(isset($data['Q1W1S3'])) echo $data['Q1W1S3']; ?>" value="<?php echo set_value('Q1W1S3'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('email'); ?>
    <input class="form-control space-textbox" id="Q1W1S2" type="email"  name="Q1W1S2" placeholder="<?php if(isset($data['Q1W1S2'])) echo $data['Q1W1S2']; ?>" value="<?php echo set_value('Q1W1S2'); ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 2 </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W2S1" type="text"  name="Q1W2S1" placeholder="<?php if(isset($data['Q1W2S1'])) echo $data['Q1W2S1'] ?>" value="<?php echo set_value('Q1W2S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W2S3" type="text" name="Q1W2S3" placeholder="<?php if(isset($data['Q1W2S3'])) echo $data['Q1W2S3']; ?>" value="<?php echo set_value('Q1W2S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W2S2" type="email"  name="Q1W2S2" placeholder="<?php if(isset($data['Q1W2S2'])) echo $data['Q1W2S2'] ?>" value="<?php echo set_value('Q1W2S2'); ?>"/>
  </div>
</div>
<div class="form-group1 row">
  <div class="col-xs-1"> 3 </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W3S1" type="text"  name="Q1W3S1" placeholder="<?php if(isset($data['Q1W3S1'])) echo $data['Q1W3S1'] ?>" value="<?php echo set_value('Q1W3S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W3S3" type="text" name="Q1W3S3" placeholder="<?php if(isset($data['Q1W3S3'])) echo $data['Q1W3S3']; ?>" value="<?php echo set_value('Q1W3S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W3S2" type="email"  name="Q1W3S2" placeholder="<?php if(isset($data['Q1W3S2'])) echo $data['Q1W3S2'] ?>" value="<?php echo set_value('Q1W3S2'); ?>"/>
  </div>
</div>
<div class="form-group">
  <label  class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
  <div class="form-group-1 row">
    <div class="col-xs-1"> </div>
    <div class="col-xs-3">
      <label class="text-gray">First Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Last Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Email ID</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 1 </div>
    <div class="col-xs-3"> <?php echo form_error('name1'); ?>
      <input class="form-control space-textbox" id="Q2W1S1" type="text"  name="Q2W1S1" placeholder="<?php if(isset($data['Q2W1S1'])) echo $data['Q2W1S1'] ?>" value="<?php echo set_value('Q2W1S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W1S3" type="text"  name="Q2W1S3" placeholder="<?php if(isset($data['Q2W1S3'])) echo $data['Q2W1S3'] ?>" value="<?php echo set_value('Q2W1S3'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2W1S2" type="email"  name="Q2W1S2" placeholder="<?php if(isset($data['Q2W1S2'])) echo $data['Q2W1S2'] ?>" value="<?php echo set_value('Q2W1S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S1" type="text"  name="Q2W2S1" placeholder="<?php if(isset($data['Q2W2S1'])) echo $data['Q2W2S1'] ?>" value="<?php echo set_value('Q2W2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S3" type="text"  name="Q2W2S3" placeholder="<?php if(isset($data['Q2W2S3'])) echo $data['Q2W2S3'] ?>" value="<?php echo set_value('Q2W2S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S2" type="email"  name="Q2W2S2" placeholder="<?php if(isset($data['Q2W2S2'])) echo $data['Q2W2S2'] ?>" value="<?php echo set_value('Q2W2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S1" type="text"  name="Q2W3S1" placeholder="<?php if(isset($data['Q2W3S1'])) echo $data['Q2W3S1'] ?>" value="<?php echo set_value('Q2W3S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S3" type="text"  name="Q2W3S3" placeholder="<?php if(isset($data['Q2W3S3'])) echo $data['Q2W3S3'] ?>" value="<?php echo set_value('Q2W3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S2" type="email"  name="Q2W3S2" placeholder="<?php if(isset($data['Q2W3S2'])) echo $data['Q2W3S2'] ?>" value="<?php echo set_value('Q2W3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S1" type="text"  name="Q2W4S1" placeholder="<?php if(isset($data['Q2W4S1'])) echo $data['Q2W4S1']; ?>" value="<?php echo set_value('Q2W4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S3" type="text"  name="Q2W4S3" placeholder="<?php if(isset($data['Q2W4S3'])) echo $data['Q2W4S3'] ?>" value="<?php echo set_value('Q2W4S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S2" type="email"  name="Q2W4S2" placeholder="<?php if(isset($data['Q2W4S2'])) echo $data['Q2W4S2']; ?>" value="<?php echo set_value('Q2W4S2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S1" type="text"  name="Q2W5S1" placeholder="<?php if(isset($data['Q2W5S1'])) echo $data['Q2W5S1'] ?>" value="<?php echo set_value('Q2W5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S3" type="text"  name="Q2W5S3" placeholder="<?php if(isset($data['Q2W5S3'])) echo $data['Q2W5S3'] ?>" value="<?php echo set_value('Q2W5S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S2" type="email"  name="Q2W5S2" placeholder="<?php if(isset($data['Q2W5S2'])) echo $data['Q2W5S2'] ?>" value="<?php echo set_value('Q2W5S2'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label  class="control-label">Students (maximum of ten students can be part of the team):</label>
  <div class="form-group-1 row">
    <div class="col-xs-1"> </div>
    <div class="col-xs-3">
      <label class="text-gray">First Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Last Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Grade</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 1 </div>
    <div class="col-xs-3"> <?php echo form_error('name2'); ?>
      <input class="form-control space-textbox" id="Q3W1S1" type="text"  name="Q3W1S1" placeholder="<?php if(isset($data['Q3W1S1'])) echo $data['Q3W1S1'] ?>"  value="<?php echo set_value('Q3W1S1'); ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3W1S2" type="text"  name="Q3W1S2" placeholder="<?php if(isset($data['Q3W1S2'])) echo $data['Q3W1S2'] ?>" value="<?php echo set_value('Q3W1S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W1S3" type="text"  name="Q3W1S3" placeholder="<?php if(isset($data['Q3W1S3'])) echo $data['Q3W1S3'] ?>" value="<?php echo set_value('Q3W1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 2 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S1" type="text"  name="Q3W2S1" placeholder="<?php if(isset($data['Q3W2S1'])) echo $data['Q3W2S1'] ?>" value="<?php echo set_value('Q3W2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S2" type="text"  name="Q3W2S2" placeholder="<?php if(isset($data['Q3W2S2'])) echo $data['Q3W2S2'] ?>" value="<?php echo set_value('Q3W2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S3" type="text"  name="Q3W2S3" placeholder="<?php if(isset($data['Q3W2S3'])) echo $data['Q3W2S3'] ?>" value="<?php echo set_value('Q3W2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 3 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S1" type="text"  name="Q3W3S1" placeholder="<?php if(isset($data['Q3W3S1'])) echo $data['Q3W3S1'] ?>" value="<?php echo set_value('Q3W3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S2" type="text"  name="Q3W3S2" placeholder="<?php if(isset($data['Q3W3S2'])) echo $data['Q3W3S2'] ?>" value="<?php echo set_value('Q3W3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S3" type="text"  name="Q3W3S3" placeholder="<?php if(isset($data['Q3W3S3'])) echo $data['Q3W3S3'] ?>" value="<?php echo set_value('Q3W3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S1" type="text"  name="Q3W4S1" placeholder="<?php if(isset($data['Q3W4S1'])) echo $data['Q3W4S1'] ?>" value="<?php echo set_value('Q3W4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S2" type="text"  name="Q3W4S2" placeholder="<?php if(isset($data['Q3W4S2'])) echo $data['Q3W4S2'] ?>" value="<?php echo set_value('Q3W4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S3" type="text"  name="Q3W4S3" placeholder="<?php if(isset($data['Q3W4S3'])) echo $data['Q3W4S3'] ?>" value="<?php echo set_value('Q3W4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 5 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S1" type="text" name="Q3W5S1" placeholder="<?php if(isset($data['Q3W5S1'])) echo $data['Q3W5S1'] ?>" value="<?php echo set_value('Q3W5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S2" type="text" name="Q3W5S2" placeholder="<?php if(isset($data['Q3W5S2'])) echo $data['Q3W5S2'] ?>" value="<?php echo set_value('Q3W5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S3" type="text" name="Q3W5S3" placeholder="<?php if(isset($data['Q3W5S3'])) echo $data['Q3W5S3'] ?>" value="<?php echo set_value('Q3W5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 6 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S1" type="text" name="Q3W6S1" placeholder="<?php if(isset($data['Q3W6S1'])) echo $data['Q3W6S1'] ?>" value="<?php echo set_value('Q3W6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S2" type="text" name="Q3W6S2" placeholder="<?php if(isset($data['Q3W6S2'])) echo $data['Q3W6S2'] ?>" value="<?php echo set_value('Q3W6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S3" type="text" name="Q3W6S3" placeholder="<?php if(isset($data['Q3W6S3'])) echo $data['Q3W6S3'] ?>" value="<?php echo set_value('Q3W6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 7 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S1" type="text" name="Q3W7S1" placeholder="<?php if(isset($data['Q3W7S1'])) echo $data['Q3W7S1'] ?>" value="<?php echo set_value('Q3W7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S2" type="text" name="Q3W7S2" placeholder="<?php if(isset($data['Q3W7S2'])) echo $data['Q3W7S2'] ?>" value="<?php echo set_value('Q3W7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S3" type="text" name="Q3W7S3" placeholder="<?php if(isset($data['Q3W7S3'])) echo $data['Q3W7S3'] ?>" value="<?php echo set_value('Q3W7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 8 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S1" type="text" name="Q3W8S1" placeholder="<?php if(isset($data['Q3W8S1'])) echo $data['Q3W8S1'] ?>" value="<?php echo set_value('Q3W8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S2" type="text" name="Q3W8S2" placeholder="<?php if(isset($data['Q3W8S2'])) echo $data['Q3W8S2'] ?>" value="<?php echo set_value('Q3W8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S3" type="text" name="Q3W8S3" placeholder="<?php if(isset($data['Q3W8S3'])) echo $data['Q3W8S3'] ?>" value="<?php echo set_value('Q3W8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 9 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S1" type="text" name="Q3W9S1" placeholder="<?php if(isset($data['Q3W9S1'])) echo $data['Q3W9S1'] ?>" value="<?php echo set_value('Q3W9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S2" type="text" name="Q3W9S2" placeholder="<?php if(isset($data['Q3W9S2'])) echo $data['Q3W9S2'] ?>" value="<?php echo set_value('Q3W9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S3" type="text" name="Q3W9S3" placeholder="<?php if(isset($data['Q3W9S3'])) echo $data['Q3W9S3'] ?>" value="<?php echo set_value('Q3W9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-1"> 10 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S1" type="text" name="Q3W10S1" placeholder="<?php if(isset($data['Q3W10S1'])) echo $data['Q3W10S1'] ?>" value="<?php echo set_value('Q3W10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S2" type="text" name="Q3W10S2" placeholder="<?php if(isset($data['Q3W10S2'])) echo $data['Q3W10S2'] ?>" value="<?php echo set_value('Q3W10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S3" type="text" name="Q3W10S3" placeholder="<?php if(isset($data['Q3W10S3'])) echo $data['Q3W10S3'] ?>" value="<?php echo set_value('Q3W10S3'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <div class="question-text">
    <h6> Task 2: How much water does your school use? (This activity should be done by teacher and / or administrative staff)</h6>
    <p> To find total consumption, monitor water consumption over a period of three working days, spread over one month and take the average.The observations should be carried out when more than 90% of school strength is present</p>
    <p> For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all three total consumptions and then divide it with number of days of observation (that is three days). You will get an average per day water consumption.</p>
    <p> <strong>To collect data: </strong><a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/" target="_blank"> </a></p>
    <p> <strong>The bill method:</strong> If the school’s water meter is monitored regularly—water bills by the government/municipality state the actual amount used—students can simply compile bills to assess total consumption.</p>
    <p> <strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then monitor the overhead tanks. Note the difference in levels of water in your overhead tank between the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check the water level when school is over by noting the difference in levels of water in your overhead tank between beginning and end of a day. Estimate consumption.</p>
    <p> <strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know its measurement. Then switch on the underground-water pump. Let the water run out of the hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate the flow of water in litres per minute. Find out (from the gardener or other administrative staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor is run by how much water comes out from the hose pipe in a minute. The administrative staff and the plumber would be helpful in gauging the above. Conduct an audit for two or three days and then take an average to find the total consumption.</p>
  </div>
  </label>
</div>
<div class="question-text form-group"> <span class="cube"></span> Calculate your school’s water consumption, per activity:
  <p>&nbsp; </p>
  <p> <strong>&nbsp;To collect data:</strong></p>
  <p> The school will use a glass (250 ml) for drinking during the audit period; they should know the volume of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.</p>
  <p> To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please monitor over a period of 15 working days.</p>
  <p> <strong>Gardening:</strong> To measure total water used in Gardening, first find out what is the method of watering garden.</p>
  <ul>
    <li> If water from water storage tank is used with hose pipes then measure the capacity of storage tank. Fill the storage tank before watering session. After watering the plants, measure the water left in the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank.&nbsp;</li>
    <li> If garden is watered manually with buckets then measure the capacity of the bucket and multiply by number of times the bucket is filled to water plants.</li>
    <li> If sprinkler irrigation is used to water garden, then measure the quantity of water released by the sprinklers and multiply it by the time the sprinkler system &nbsp;works.&nbsp;</li>
  </ul>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">1</span>Total water consumption of your school</label>
  <div class="form-group-1 row">
    <div class="col-xs-3">
      <label class="text-gray">Activity</label>
    </div>
    <div class="col-xs-5">
      <label class="text-gray"> Total Quantity (litres per day)</label>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Drinking</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W1" type="number" min="0" name="Q4W1" placeholder="<?php if(isset($data['Q4W1'])) echo $data['Q4W1'] ?>" value="<?php echo set_value('Q4W1'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Toilet flushing</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W2" type="number" min="0" name="Q4W2" placeholder="<?php if(isset($data['Q4W2'])) echo $data['Q4W2'] ?>" value="<?php echo set_value('Q4W2'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Personal cleaning</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()"  id="Q4W3" type="number" min="0" name="Q4W3" placeholder="<?php if(isset($data['Q4W3'])) echo $data['Q4W3'] ?>" value="<?php echo set_value('Q4W3'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Washing clothes</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W4" type="number" min="0" name="Q4W4" placeholder="<?php if(isset($data['Q4W4'])) echo $data['Q4W4'] ?>" value="<?php echo set_value('Q4W4'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Cooking</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W5" type="number" min="0" name="Q4W5" placeholder="<?php if(isset($data['Q4W5'])) echo $data['Q4W5'] ?>" value="<?php echo set_value('Q4W5'); ?>"/>
    </div>
  </div>
  <!-- <div class="form-group1 row">
                <div class="col-xs-3">
                    <label class="text-gray">Service Area on ground</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W6" type="number" min="0" name="Q4W6" placeholder="<?php if(isset($data['Q4W6'])) echo $data['Q4W6'] ?>" value="<?php echo set_value('Q4W6'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-3">
                    <label class="text-gray">Roof and terrace area</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W7" type="number" min="0" name="Q4W7" placeholder="<?php if(isset($data['Q4W7'])) echo $data['Q4W7'] ?>" value="<?php echo set_value('Q4W7'); ?>"/>
                </div>
            </div> -->
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Cleaning Utensils</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W6" type="number" min="0" name="Q4W6" placeholder="<?php if(isset($data['Q4W6'])) echo $data['Q4W6'] ?>" value="<?php echo set_value('Q4W6'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Washing Vegetables</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W7" type="number" min="0" name="Q4W7" placeholder="<?php if(isset($data['Q4W7'])) echo $data['Q4W7'] ?>" value="<?php echo set_value('Q4W7'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Mopping floors</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W8" type="number" min="0" name="Q4W8" placeholder="<?php if(isset($data['Q4W8'])) echo $data['Q4W8'] ?>" value="<?php echo set_value('Q4W8'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Gardening</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W9" type="number" min="0" name="Q4W9" placeholder="<?php if(isset($data['Q4W9'])) echo $data['Q4W9'] ?>" value="<?php echo set_value('Q4W9'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Others</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()" id="Q4W10" type="number" min="0" name="Q4W10" placeholder="<?php if(isset($data['Q4W10'])) echo $data['Q4W10'] ?>" value="<?php echo set_value('Q4W10'); ?>"/>
    </div>
  </div>
  <div class="form-group1 row">
    <div class="col-xs-3">
      <label class="text-gray">Total</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" id="Q4W11" type="number" min="0" name="Q4W11" placeholder="<?php if(isset($data['Q4W11'])) echo $data['Q4W11'] ?>" value="<?php echo set_value('Q4W11'); ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 3: What Are The Sources, Supply and Storage of Water in your School? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#sourceOfWater" target="_blank"> </a></h6>
  </label>
  <p> To understand water, it is important to know the source of water in your school premises. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive.<br>
  </p>
  <p> The questions below will help students to understand where their water is coming from – at a cost. </p>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">2</span>Where does the water your school uses, come from? (please tick the correct options):</label>
  <div class="form-group">
    <ul>
      <li>
        <input type="checkbox" name="Q5W1" value="<?php echo set_value('Q5W1',1); ?>" <?php if(isset($data['Q5W1'])) echo set_checkbox('Q5W1', '1', true); ?> />
        <label class="text-gray">Ground water (Borewell and handpump)</label>
      </li>
      <li>
        <input type="checkbox" id="Q5W2" name="Q5W2" value="<?php echo set_value('Q5W2',1); ?>" <?php if(isset($data['Q5W2'])) echo set_checkbox('Q5W2', '1', true); ?> />
        <label class="text-gray">Surface water (River water, pond, etc)</label>
      </li>
      <li>
        <input type="checkbox" id="Q5W3" name="Q5W3" value="<?php echo set_value('Q5W3',1); ?>" <?php if(isset($data['Q5W3'])) echo set_checkbox('Q5W3', '1', true); ?>/>
        <label class="text-gray">Rain water (stored)</label>
      </li>
      <li>
        <input type="checkbox" name="Q5W4" value="<?php echo set_value('Q5W4',1); ?>" <?php if(isset($data['Q5W4'])) echo set_checkbox('Q5W4', '1', true); ?>/>
        <label class="text-gray">Recycled waste water</label>
      </li>
    </ul>
  </div>
</div>
<!--div class="form-group">
      <label  class="control-label"> <span class="cube">3</span>Who supplies the water in your school? (please tick the correct options):</label>
      <br>
      <ul class="list-unstyled">
        <li>
          <input  type="checkbox" name="Q6W1" value="<?php echo set_value('Q6W1',1); ?>" <?php if(isset($data['Q6W1'])) echo set_checkbox('Q6W1', '1', true); ?>/>
          <label class="text-gray">Municipality</label>
        </li>
        <li>
          <input type="checkbox" name="Q6W2" value="<?php echo set_value('Q6W2',1); ?>" <?php if(isset($data['Q6W2'])) echo set_checkbox('Q6W2', '1', true); ?> />
          <label class="text-gray">Panchayat</label>
        </li>
        <li>
          <input type="checkbox" name="Q6W3" value="<?php echo set_value('Q6W3',1); ?>" <?php if(isset($data['Q6W3'])) echo set_checkbox('Q6W3', '1', true); ?>/>
          <label class="text-gray">Public Health Engineering Department (PHED)</label>
        </li>
        <li>
          <input type="checkbox" name="Q6W4" value="<?php echo set_value('Q6W4',1); ?>" <?php if(isset($data['Q6W4'])) echo set_checkbox('Q6W4', '1', true); ?>/>
          <label class="text-gray">Private supplier</label>
        </li>
        <li>
          <input type="checkbox" name="Q6W5" value="<?php echo set_value('Q6W5',1); ?>" <?php if(isset($data['Q6W5'])) echo set_checkbox('Q6W5', '1', true); ?>/>
          <label class="text-gray">School’s own supply (bore well, rainwater harvesting facility, etc)</label>
        </li>
      </ul>
    </div-->
<div class="form-group">
  <label  class="control-label"> <span class="cube">3</span>Does your school get daily water supply?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q7W1" onclick="WaterSupply(1)" value="<?php echo set_value('Q7W1','Y')?>" <?php if(isset($data['Q7W1'])) echo $data['Q7W1'] == 'Y'?"checked":"" ?>/>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q7W1" onclick="WaterSupply(2)" value="<?php echo set_value('Q7W1','N')?>" <?php if(isset($data['Q7W1'])) echo $data['Q7W1'] == 'N'?"checked":"" ?>/>
      No </label>
    </li>
  </ul>
</div>
<?php
        if(isset($data['Q7W1']))
        {if($data['Q7W1'] == 'Y')
        {
        ?>
<div class="form-group" id="Q7W2">
<?php } else { ?>
<div class="form-group" id="Q7W2" style="display: none;">
<?php }} else {?>
<div class="form-group" id="Q7W2" style="display: none;">
  <?php } ?>
  <label  class="control-label"> <span class="cube">3(a)</span>Does your school get daily water supply?</label>
  <ul class="list-unstyled">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q7W22" name="Q7W2" value="<?php echo set_value('Q7W2',1)?>" <?php if(isset($data['Q7W2'])) echo $data['Q7W2'] == 1?"checked":""; ?>/>
      ≤1 hours </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q7W22" name="Q7W2" value="<?php echo set_value('Q7W2',2)?>" <?php if(isset($data['Q7W2'])) echo $data['Q7W2'] == 2?"checked":""; ?>/>
      2-6 hours </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q7W22" name="Q7W2" value="<?php echo set_value('Q7W2',3)?>" <?php if(isset($data['Q7W2'])) echo $data['Q7W2'] == 3?"checked":""; ?>/>
      7-12 hours </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q7W22" name="Q7W2" value="<?php echo set_value('Q7W2',4)?>" <?php if(isset($data['Q7W2'])) echo $data['Q7W2'] == 4?"checked":""; ?>/>
      13-18 hours </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q7W22" name="Q7W2" value="<?php echo set_value('Q7W2',5)?>" <?php if(isset($data['Q7W2'])) echo $data['Q7W2'] == 5?"checked":""; ?>/>
      19-24 hours </label>
    </li>
  </ul>
</div>
<?php
                if(isset($data['Q7W1']))
                {if($data['Q7W1'] == 'N')
                {
                ?>
<div class="form-group" id="Q7W3">
<?php } else { ?>
<div class="form-group" id="Q7W3" style="display: none;">
  <?php }} else {?>
  <div class="form-group" id="Q7W3" style="display: none;">
    <?php } ?>
    <label  class="control-label"> <span class="cube">3(b)</span>Does your school get daily water supply?</label>
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3" value="<?php echo set_value('Q7W3', 1)?>" <?php if(isset($data['Q7W3'])) echo $data['Q7W3'] == 1?"checked":"" ?>>
        ≤1 day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3" value="<?php echo set_value('Q7W3',2)?>" <?php if(isset($data['Q7W3'])) echo $data['Q7W3'] == 2?"checked":"" ?>>
        2 days in a week </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3" value="<?php echo set_value('Q7W3',3)?>" <?php if(isset($data['Q7W3'])) echo $data['Q7W3'] == 3?"checked":"" ?>>
        3 days in a week </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3" value="<?php echo set_value('Q7W3',4)?>" <?php if(isset($data['Q7W3'])) echo $data['Q7W3'] == 4 ?"checked":"" ?>>
        Every alternate day in a week </label>
      </li>
    </ul>
  </div>
  <!--
    <div class="form-group">
      <label>
      <h6>Task 4: What are the water conservation practices followed in your school?</h6>
      </label>
      <div class="form-group">
        <label class="control-label"><span class="cube">4</span> What are the water conservation practices your school follows</label>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10" > Does your school have any water and sanitation policy? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S1" value="<?php echo set_value('Q8W1S1','Y')?>" <?php if(isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'Y'?"checked":"" ?>/>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S1" value="<?php echo set_value('Q8W1S1','N')?>" <?php if(isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> If your school has an eco-club, do they have water component? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S2" value="<?php echo set_value('Q8W1S2','Y')?>" <?php if(isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S2" value="<?php echo set_value('Q8W1S2','N')?>" <?php if(isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Do all tanks in the school have float valves installed to stop overflow? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S3" value="<?php echo set_value('Q8W1S3','Y')?>" <?php if(isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S3" value="<?php echo set_value('Q8W1S3','N')?>" <?php if(isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Do the drinking water points have spill proof taps to check overflow? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S4" value="<?php echo set_value('Q8W1S4','Y')?>" <?php if(isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S4" value="<?php echo set_value('Q8W1S4','N')?>" <?php if(isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Does your school use appliances with a quick-wash setting? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S5" value="<?php echo set_value('Q8W1S5','Y')?>" <?php if(isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S5" value="<?php echo set_value('Q8W1S5','N')?>" <?php if(isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Are dual flush systems installed in the toilets? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S6" value="<?php echo set_value('Q8W1S6','Y')?>" <?php if(isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S6" value="<?php echo set_value('Q8W1S6','N')?>" <?php if(isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Does your school encourage bottled water for drinking water? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S7" value="<?php echo set_value('Q8W1S7','Y')?>" <?php if(isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S7" value="<?php echo set_value('Q8W1S7','N')?>" <?php if(isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Does your school grow local plant species which require limited amount of water to grow? </label>
          <label class="radio-inline text-gray">
          <?php
                        if(empty($data['Q8W1S8']))
                            if(isset($other['Q5L1S3']))
                                if(isset($other['Q5L1S3']))
                                {
                                    $data['Q8W1S8'] = 'Y';
                                }
                        ?>
          <input type="hidden" id="Q5L1S3" value="<?php if(isset($other['Q5L1S3'])) echo $other['Q5L1S3']; ?>">
          <input type="radio" id="Q8W1S8_1" name="Q8W1S8" value="<?php echo set_value('Q8W1S8','Y')?>" <?php if(isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" id="Q8W1S8_2" name="Q8W1S8" value="<?php echo set_value('Q8W1S8','N')?>" <?php if(isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Has your school initiated any water conservation steps in the school or outside, in the past one year? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S9" value="<?php echo set_value('Q8W1S9','Y')?>" <?php if(isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S9" value="<?php echo set_value('Q8W1S9','N')?>" <?php if(isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Does your school use a drip or irrigation system? </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','Y')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S10" value="<?php echo set_value('Q8W1S10','N')?>" <?php if(isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'N'?"checked":"" ?>>
          No </label>
        </div>
        <div class="form-group">
          <label class="radio-inline text-gray col-xs-10"> Any other step taken for water conservation? (if Yes, please specify) </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S11" value="<?php echo set_value('Q8W1S11','Y')?>" <?php if(isset($data['Q8W1S11'])) echo $data['Q8W1S11'] == 'Y'?"checked":"" ?>>
          Yes </label>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W1S11" value="<?php echo set_value('Q8W1S11','N')?>" <?php if(isset($data['Q8W1S11'])) echo $data['Q8W1S11'] == 'N'?"checked":"" ?>/>
          No </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>Upload supporting documents</label>
      <br>
      <label style="font-color: white !important; ">Please upload all supporting documents related to this section here. Note: files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg)</label>
      <button class="btn uploadbtn upload" data-id="Task 4 Supporting docs" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
      <br><br>
    </div>
     -->
  <div class="form-group">
    <label>
    <h6>Task 4: Does your school harvest rainwater? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></h6>
    </label>
    <br>
    Rainfall (precipitation) is the primary source of freshwater on land. In this section, you will find out how much rainwater your school can catch, and how much your school can harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater and using it to recharge groundwater or storing it for other uses.<br>
    To know the types of catchment <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></div>
  <div class="form-group">
    <label><span class="cube">4</span>Do you have Rainwater harvesting (RWH) system in your school?</label>
    <ul class="list-inline">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2_1" name="Q8W2" onclick="harvest(1)" value="<?php echo set_value('Q8W2','Y')?>" <?php if(isset($data['Q8W2'])) echo $data['Q8W2'] == 'Y'?"checked":"" ?>>
        Yes </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2_2" name="Q8W2" onclick="harvest(2)" value="<?php echo set_value('Q8W2','N')?>" <?php if(isset($data['Q8W2'])) echo $data['Q8W2'] == 'N'?"checked":"" ?>/>
        No </label>
      </li>
    </ul>
  </div>
	
	<div class="Q8W2_2_error" style="display: none;"><label> To calculate your school’s RWH potential visit this link  : </label><a href="http://www.greenschoolsprogramme.org/knowledge-bank/water/formulae-to-remember/" target="_blank" ><span style="color:blue;">Here</span></a> </div>
  <div class="form-group" id="Q8W2S1"
                            <?php
                            if(isset($data['Q8W2']))
                                if($data['Q8W2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(a)</span>Which is/are the catchment area(s) being harvested by your school? </label>
    <ul class="list-unstled">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',1)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 1?"checked":"" ?>>
        Rooftop </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',2)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 2?"checked":"" ?>/>
        Paved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',3)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 3?"checked":"" ?>/>
        Unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',4)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 4?"checked":"" ?>/>
        Rooftop + paved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',5)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 5?"checked":"" ?>/>
        Paved + unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',6)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 6?"checked":"" ?>/>
        Rooftop + unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',7)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 7?"checked":"" ?>/>
        Rooftop + paved + unpaved </label>
      </li>
    </ul>
  </div>
  <div class="form-group" id="Q8W2S1S1"
                            <?php
                            if(isset($data['Q8W2S1']))
                                if($data['Q8W2S1'] == 'Y')
                                {
                                    echo ' style="display:block;"';
                                }
                                else
                                {
                                    echo ' style="display:none;"';
                                }
                            else
                            {
                                echo ' style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">6(a)(1)</span>Which is the catchment area being harvested by your school? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',1)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 1?"checked":"" ?>>
            Rooftop </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',2)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 2?"checked":"" ?>/>
            Paved </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',3)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 3?"checked":"" ?>/>
            Unpaved </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',4)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 4?"checked":"" ?>/>
            Rooftop + paved </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',5)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 5?"checked":"" ?>/>
            Paved + unpaved </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',6)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 6?"checked":"" ?>/>
            Rooftop + unpaved </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S1S1" value="<?php echo set_value('Q8W2S1S1',7)?>" <?php if(isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 7?"checked":"" ?>/>
            Rooftop + paved + unpaved </label>
          </li>
        </ul>
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S2"
                            <?php
                            if(isset($data['Q8W2']))
                                if($data['Q8W2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)</span> How does your school harvest rainwater? </label>
    <ul class="list-inline">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" onclick="RainwaterHarvest(1)" name="Q8W2S2" value="<?php echo set_value('Q8W2S2',1)?>" <?php if(isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 1?"checked":"" ?>>
        By storing </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" onclick="RainwaterHarvest(2)" name="Q8W2S2" value="<?php echo set_value('Q8W2S2',2)?>" <?php if(isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 2?"checked":"" ?>/>
        By recharging groundwater </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" onclick="RainwaterHarvest(1)" name="Q8W2S2" value="<?php echo set_value('Q8W2S2',3)?>" <?php if(isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 3?"checked":"" ?>/>
        Combination of both</label>
      </li>
    </ul>
  </div>
  <div class="form-group" id="Q8W2S2S1"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3)
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(1)</span>If your school only stores rainwater, please select the use of stored rainwater: </label>
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',1)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 1?"checked":"" ?>>
        Drinking </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',2)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 2?"checked":"" ?>/>
        Gardening </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',3)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 3?"checked":"" ?>/>
        Mopping </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',4)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 4?"checked":"" ?>/>
        Toilets </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',5)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 5?"checked":"" ?>/>
        Washing vehicles </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',6)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 6?"checked":"" ?>/>
        Kitchen (Cooking/Washing vegetables and utensils) </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',7)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 7?"checked":"" ?>/>
        Shower, Brushing teeth, Bathing, Hand washing </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',8)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 8?"checked":"" ?>/>
        Swimming Pool </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',9)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 9?"checked":"" ?>/>
        Fire fighting </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1" value="<?php echo set_value('Q8W2S2S1',10)?>" <?php if(isset($data['Q8W2S2S1'])) echo $data['Q8W2S2S1'] == 10?"checked":"" ?>/>
        Desert coolers </label>
      </li>
    </ul>
  </div>
  <div class="form-group" id="Q8W2S2S2"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3)
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(2)</span> Does your school have rainwater storage tank? </label>
    <ul class="list-inline">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S2" onclick="Storage(1)" value="<?php echo set_value('Q8W2S2S2','Y')?>" <?php if(isset($data['Q8W2S2S2'])) echo $data['Q8W2S2S2'] == 'Y'?"checked":"" ?>>
        Yes </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S2_2" name="Q8W2S2S2" onclick="Storage(2)" value="<?php echo set_value('Q8W2S2S2','N')?>" <?php if(isset($data['Q8W2S2S2'])) echo $data['Q8W2S2S2'] == 'N'?"checked":"" ?>/>
        No </label>
      </li>
    </ul>
  </div>
  <div class="form-group" id="Q8W2S2S3"
                            <?php
                            if(isset($data['Q8W2S2S2']))
                                if($data['Q8W2S2S2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(2) A</span>If yes, please provide: </label>
    <div class="form-group">
      <label class="text-gray"> Total number of storage tank (litres): </label>
      <input class="form-control space-textbox" id="Q8W2S2S3A" type="number" name="Q8W2S2S3" value="<?php echo set_value('Q8W2S2S3')?>" placeholder="<?php if(isset($data['Q8W2S2S3'])) echo $data['Q8W2S2S3'] ?>">
    </div>
  </div>
  <div class="form-group" id="Q8W2S2S4"
                            <?php
                            if(isset($data['Q8W2S2S2']))
                                if($data['Q8W2S2S2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(2) B</span>If yes, please provide: </label>
    <div class="form-group">
      <label class="radio-inline text-gray"> Total capacity of each storage tank (litres): </label>
      <input  class="form-control space-textbox" id="Q8W2S2S4A" type="number" name="Q8W2S2S4" value="<?php echo set_value('Q8W2S2S4')?>" placeholder="<?php if(isset($data['Q8W2S2S4'])) echo $data['Q8W2S2S4'] ?>">
    </div>
  </div>
  <div class="form-group" id="Q8W2S2S5"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(2) C</span>Location of tanks: </label>
    <div class="form-group">
      <ul>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',1)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 1?"checked":"" ?>>
          Underground </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',2)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 2?"checked":"" ?>/>
          Over ground </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',3)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 3?"checked":"" ?>/>
          Semi underground </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',4)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 4?"checked":"" ?>/>
          Over- ground + semi underground </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',5)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 5?"checked":"" ?>/>
          Underground + semi underground </label>
        </li>
        <li>
          <label class="radio-inline text-gray">
          <input type="radio" name="Q8W2S2S5" value="<?php echo set_value('Q8W2S2S5',6)?>" <?php if(isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 6?"checked":"" ?>/>
          Underground + Over- ground + semi underground </label>
        </li>
      </ul>
    </div>
  </div>
  <div class="form-group" id="Q8W2S2S6"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(b)(2) D</span> Material options for tanks: </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S2S6" value="<?php echo set_value('Q8W2S2S6',1)?>" <?php if(isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 1?"checked":"" ?>>
            PVC </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S2S6" value="<?php echo set_value('Q8W2S2S6',2)?>" <?php if(isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 2?"checked":"" ?>/>
            RCC </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S2S6" value="<?php echo set_value('Q8W2S2S6',3)?>" <?php if(isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 3?"checked":"" ?>/>
            Brick </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S2S6" value="<?php echo set_value('Q8W2S2S6',4)?>" <?php if(isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 4?"checked":"" ?>/>
            Combination of PVC + RCC + brick </label>
          </li>
        </ul>
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S27"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3)
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(3)</span>Does your school have groundwater recharge structure? </label>
    <ul class="list-inline">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio"  name="Q8W2S2S7" onclick="Recharge(1)" value="<?php echo set_value('Q8W2S2S7','Y')?>" <?php if(isset($data['Q8W2S2S7'])) echo $data['Q8W2S2S7'] == 'Y'?"checked":"" ?>>
        Yes </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S7_2" name="Q8W2S2S7" onclick="Recharge(2)" value="<?php echo set_value('Q8W2S2S7','N')?>" <?php if(isset($data['Q8W2S2S7'])) echo $data['Q8W2S2S7'] == 'N'?"checked":"" ?>/>
        No </label>
      </li>
    </ul>
  </div>
  <div class="form-group" id="Q8W2S2S8"
                            <?php
                            if(isset($data['Q8W2S2S7']))
                                if($data['Q8W2S2S7'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(b)(3) i</span>If yes, please provide: </label>
      <div class="form-group">
        <label class="radio-inline text-gray"> Please share the total number of groundwater recharge structures </label>
        <input  class="form-control space-textbox" id="Q8W2S2S8A" type="number" name="Q8W2S2S8" value="<?php echo set_value('Q8W2S2S8')?>" placeholder="<?php if(isset($data['Q8W2S2S8'])) echo $data['Q8W2S2S8'] ?>">
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S2S9"
                            <?php
                            if(isset($data['Q8W2S2S7']))
                                if($data['Q8W2S2S7'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <label><span class="cube">4(b)(3) i</span>Please tick the type of groundwater recharge structure used in your school: </label>
    <div class="form-group">
      <ul>
        <!-- <li>
            <input  type="checkbox" name="Q8W2S2S91" value="<?php echo set_value('Q8W2S2S91',1); ?>" <?php if(isset($data['Q8W2S2S91'])) if($data['Q8W2S2S91'] == 1) echo set_checkbox('Q8W2S2S91', '1', true); ?> />
            <label  col-xs-4>Percolation pit/tank</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S2S92" name="Q8W2S2S92" value="<?php echo set_value('Q8W2S2S92',1); ?>" <?php if(isset($data['Q8W2S2S92'])) if($data['Q8W2S2S92'] == 1) echo set_checkbox('Q8W2S2S92', '1', true); ?> />
            <label class="text-gray">Recharge through abandoned dug well</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S2S93" name="Q8W2S2S93" value="<?php echo set_value('Q8W2S2S93',1); ?>" <?php if(isset($data['Q8W2S2S93'])) if($data['Q8W2S2S93'] == 1) echo set_checkbox('Q8W2S2S93', 1, true); ?>/>
            <label class="text-gray">Recharge through abandoned tube well/bore well</label>
          </li>
           -->
        <li>
          <input type="checkbox" name="Q8W2S2S94" value="<?php echo set_value('Q8W2S2S94',1); ?>" <?php if(isset($data['Q8W2S2S94'])) if($data['Q8W2S2S94'] == 1) echo set_checkbox('Q8W2S2S94', '1', true); ?>/>
          <label class="text-gray">Recharge well</label>
        </li>
        <li>
          <input type="checkbox" name="Q8W2S2S95" value="<?php echo set_value('Q8W2S2S95',1); ?>" <?php if(isset($data['Q8W2S2S95'])) if($data['Q8W2S2S95'] == 1) echo set_checkbox('Q8W2S2S95', '1', true); ?>/>
          <label class="text-gray">Recharge trenches</label>
        </li>
        <li>
          <input type="checkbox" name="Q8W2S2S96" value="<?php echo set_value('Q8W2S2S96',1); ?>" <?php if(isset($data['Q8W2S2S96'])) if($data['Q8W2S2S96'] == 1) echo set_checkbox('Q8W2S2S96', '1', true); ?>/>
          <label class="text-gray">Recharge through ponds/water bodies</label>
        </li>
        <!-- <li>
            <input type="checkbox" name="Q8W2S2S97" value="<?php echo set_value('Q8W2S2S97',1); ?>" <?php if(isset($data['Q8W2S2S97'])) if($data['Q8W2S2S97'] == 1) echo set_checkbox('Q8W2S2S97', '1', true); ?>/>
            <label class="text-gray">Soak pit</label>
          </li> -->
      </ul>
    </div>
  </div>
  <div class="form-group" id="Q8W2S2S10"
                            <?php
                            if(isset($data['Q8W2S2']))
                                if($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3)
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(b)(4)</span>If your school practices rainwater harvesting, then what is the ratio between storage and recharge </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S2S10"  value="<?php echo set_value('Q8W2S2S10',1)?>" <?php if(isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 1?"checked":"" ?>>
            Storage = Recharge </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10" value="<?php echo set_value('Q8W2S2S10',2)?>" <?php if(isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 2?"checked":"" ?>/>
            Storage > Recharge </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10" value="<?php echo set_value('Q8W2S2S10',3)?>" <?php if(isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 3?"checked":"" ?>/>
            Recharge > Storage </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10"  value="<?php echo set_value('Q8W2S2S10',4)?>" <?php if(isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 4?"checked":"" ?>/>
            Only recharge </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10" value="<?php echo set_value('Q8W2S2S10',5)?>" <?php if(isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 5?"checked":"" ?>/>
            Only storage </label>
          </li>
        </ul>
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S3"
                            <?php
                            if(isset($data['Q8W2']))
                                if($data['Q8W2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(c)</span>How much area in your school is harvested? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',1)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 1?"checked":"" ?>>
            10 to 20 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',2)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 2?"checked":"" ?>/>
            21 to 30 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',3)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 3?"checked":"" ?>/>
            31 to 40 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',4)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 4?"checked":"" ?>/>
            41 to 50 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',5)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 5?"checked":"" ?>/>
            51 to 60 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',6)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 6?"checked":"" ?>/>
            61 to 70 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',7)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 7?"checked":"" ?>/>
            71 to 80 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',8)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 8?"checked":"" ?>/>
            81 to 90 per cent </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4" value="<?php echo set_value('Q8W2S4',9)?>" <?php if(isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 9?"checked":"" ?>/>
            91 to 100 per cent </label>
          </li>
        </ul>
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S4"
                            <?php
                            if(isset($data['Q8W2']))
                                if($data['Q8W2'] == 'Y')
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(d)</span>Please select (from the list given below) the rainwater harvesting structures present in your school: </label>
      <div class="form-group">
        <ul>
          <li>
            <input  type="checkbox" name="Q8W2S31" value="<?php echo set_value('Q8W2S31',1); ?>" <?php if(isset($data['Q8W2S31'])) if($data['Q8W2S31'] == 1) echo set_checkbox('Q8W2S31', '1', true); ?> />
            <label class="text-gray">Conduits</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S32" name="Q8W2S32" value="<?php echo set_value('Q8W2S32',1); ?>" <?php if(isset($data['Q8W2S32'])) if($data['Q8W2S32'] == 1) echo set_checkbox('Q8W2S32', '1', true); ?> />
            <label class="text-gray">Gutters</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S33" onclick="HarvestingStructure()" name="Q8W2S33" value="<?php echo set_value('Q8W2S33',1); ?>" <?php if(isset($data['Q8W2S33'])) if($data['Q8W2S33'] == 1) echo set_checkbox('Q8W2S33', 1, true); ?>/>
            <label class="text-gray">Filter unit</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S34" value="<?php echo set_value('Q8W2S34',1); ?>" <?php if(isset($data['Q8W2S34'])) if($data['Q8W2S34'] == 1) echo set_checkbox('Q8W2S34', '1', true); ?>/>
            <label class="text-gray">First flush</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S35" value="<?php echo set_value('Q8W2S35',1); ?>" <?php if(isset($data['Q8W2S35'])) if($data['Q8W2S35'] == 1) echo set_checkbox('Q8W2S35', '1', true); ?>/>
            <label class="text-gray">Storage tank</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S36" value="<?php echo set_value('Q8W2S36',1); ?>" <?php if(isset($data['Q8W2S36'])) if($data['Q8W2S36'] == 1) echo set_checkbox('Q8W2S36', '1', true); ?>/>
            <label class="text-gray">Collection sump</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S37" value="<?php echo set_value('Q8W2S37',1); ?>" <?php if(isset($data['Q8W2S37'])) if($data['Q8W2S37'] == 1) echo set_checkbox('Q8W2S37', '1', true); ?>/>
            <label class="text-gray">Pump unit</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S38" value="<?php echo set_value('Q8W2S38',1); ?>" <?php if(isset($data['Q8W2S38'])) if($data['Q8W2S38'] == 1) echo set_checkbox('Q8W2S38', '1', true); ?>/>
            <label class="text-gray">Recharge structure</label>
          </li>
        </ul>
      </div> -->
  </div>
  <div class="form-group" id="Q8W2S4S1"
                            <?php
                            if(isset($data['Q8W2S33']))
                                if($data['Q8W2S33'] == 1)
                                {
                                    echo 'style="display:block;"';
                                }
                                else
                                {
                                    echo 'style="display:none;"';
                                }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
    <!-- <label><span class="cube">4(d)(1)</span> Where is your filter unit? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S4S1"  value="<?php echo set_value('Q8W2S4S1',1)?>" <?php if(isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 1?"checked":"" ?>>
            Before storage tank </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1" value="<?php echo set_value('Q8W2S4S1',2)?>" <?php if(isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 2?"checked":"" ?>/>
            Before recharge system </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1" value="<?php echo set_value('Q8W2S4S1',3)?>" <?php if(isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 3?"checked":"" ?>/>
            Before both storage tank and recharge system </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1"  value="<?php echo set_value('Q8W2S4S1',4)?>" <?php if(isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 4?"checked":"" ?>/>
            We do not use filters </label>
          </li>
        </ul> -->
  </div>
</div>
<div class="form-group" id="Q8W2S4S2"
                        <?php
                        if(isset($data['Q8W2S33']))
                            if($data['Q8W2S33'] == 1)
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(d)(2)</span>Types of filter used in your school: </label>
      <div class="form-group">
        <ul>
          <li>
            <input  type="checkbox" name="Q8W2S41" value="<?php echo set_value('Q8W2S4S21'); ?>" <?php if(isset($data['Q8W2S4S21'])) if($data['Q8W2S4S21'] == 1) echo set_checkbox('Q8W2S4S21', '1', true); ?> />
            <label class="text-gray">Sand gravel filter</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S4S22" name="Q8W2S4S22" value="<?php echo set_value('Q8W2S4S22'); ?>" <?php if(isset($data['Q8W2S4S22'])) if($data['Q8W2S4S22'] == 1) echo set_checkbox('Q8W2S4S22', '1', true); ?> />
            <label class="text-gray">Charcoal filter</label>
          </li>
          <li>
            <input type="checkbox" id="Q8W2S4S23" name="Q8W2S4S23" value="<?php echo set_value('Q8W2S4S23'); ?>" <?php if(isset($data['Q8W2S4S23'])) if($data['Q8W2S4S23'] == 1) echo set_checkbox('Q8W2S4S23', 1, true); ?>/>
            <label class="text-gray">Readymade on line filter</label>
          </li>
          <li>
            <input type="checkbox" name="Q8W2S4S24" value="<?php echo set_value('Q8W2S4S24'); ?>" <?php if(isset($data['Q8W2S4S24'])) if($data['Q8W2S4S24'] == 1) echo set_checkbox('Q8W2S4S24', '1', true); ?>/>
            <label class="text-gray">Chemical used</label>
          </li>
        </ul>
      </div> -->
</div>
<div class="form-group" id="Q8W2S5"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(e)</span>Rate your catchment on cleanliness: </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S5" value="<?php echo set_value('Q8W2S5',1)?>" <?php if(isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 1?"checked":"" ?>>
            Good </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S5" value="<?php echo set_value('Q8W2S5',2)?>" <?php if(isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 2?"checked":"" ?>/>
            Average </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S5" value="<?php echo set_value('Q8W2S5',3)?>" <?php if(isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 3?"checked":"" ?>/>
            Poor </label>
          </li>
        </ul>
      </div> -->
</div>
<br>
<div class="form-group" id="file"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!--<label>Please upload a flow chart (hand drawn) of the wastewater treatment process.<br>
                        <button class="btn uploadbtn upload" data-id="Water Treatment Process" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                        <br>
                        </label>-->
</div>
<div class="form-group" id="Q8W2S61"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <label><span class="cube">4(c)</span>Does your school clean your catchment and system </label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W2S61" onclick="WaterCatchment(1)" value="<?php echo set_value('Q8W2S61','Y')?>" <?php if(isset($data['Q8W2S61'])) echo $data['Q8W2S61'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W2S61" onclick="WaterCatchment(2)" value="<?php echo set_value('Q8W2S61','N')?>" <?php if(isset($data['Q8W2S61'])) echo $data['Q8W2S61'] == 'N'?"checked":"" ?>/>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group" id="Q8W2S7"
                        <?php
                        if(isset($data['Q8W2S61']))
                            if($data['Q8W2S61'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>
                    >
  <!-- <label><span class="cube">4(f)(1)</span>Please specify when does your school clean the catchment and RWH system? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S7" value="<?php echo set_value('Q8W2S7',1)?>" <?php if(isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 1?"checked":"" ?>>
            Pre-monsoon </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S7" value="<?php echo set_value('Q8W2S7',2)?>" <?php if(isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 2?"checked":"" ?>/>
            Post-monsoon </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S7" value="<?php echo set_value('Q8W2S7',3)?>" <?php if(isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 3?"checked":"" ?>/>
            Do not follow any such pattern </label>
          </li>
        </ul>
      </div> -->
</div>
<div class="form-group" id="Q8W2S8"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(g)</span>Does your school monitor the rainwater harvesting structure for its efficiency? </label>
      <div class="form-group">
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S8" onclick="RainEfficiency(1)" value="<?php echo set_value('Q8W2S8','Y')?>" <?php if(isset($data['Q8W2S8'])) echo $data['Q8W2S8'] == 'Y'?"checked":"" ?>>
        Yes </label>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S8" onclick="RainEfficiency(2)" value="<?php echo set_value('Q8W2S8','N')?>" <?php if(isset($data['Q8W2S8'])) echo $data['Q8W2S8'] == 'N'?"checked":"" ?>/>
        No </label>
      </div> -->
</div>
<div class="form-group" id="Q8W2S9"
                        <?php
                        if(isset($data['Q8W2S8']))
                            if($data['Q8W2S8'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(g)(1)</span>Please specify when does your school monitor the groundwater level? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S9" value="<?php echo set_value('Q8W2S9',1)?>" <?php if(isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 1?"checked":"" ?>>
            Pre-monsoon </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S9" value="<?php echo set_value('Q8W2S9',2)?>" <?php if(isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 2?"checked":"" ?>/>
            Post-monsoon </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S9" value="<?php echo set_value('Q8W2S9',3)?>" <?php if(isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 3?"checked":"" ?>/>
            Do not follow any such pattern </label>
          </li>
        </ul>
      </div> -->
</div>
<div class="form-group" id="Q8W2S10"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(h)</span>What is the trend of groundwater level in your school across the year? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S10" onclick="WaterDecrease(1)" value="<?php echo set_value('Q8W2S10',1)?>" <?php if(isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 1?"checked":"" ?>>
            If there was a decrease, please specify </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S10" onclick="WaterDecrease(2)" value="<?php echo set_value('Q8W2S10',2)?>" <?php if(isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 2?"checked":"" ?>/>
            If there was an increase, please specify </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S10" onclick="WaterDecrease(0)" value="<?php echo set_value('Q8W2S10',3)?>" <?php if(isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 3?"checked":"" ?>/>
            No change </label>
          </li>
        </ul>
      </div> -->
</div>
<div class="form-group" id="Q8W2S11"
                        <?php
                        if(isset($data['Q8W2S10']))
                            if($data['Q8W2S10'] == 1)
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(h)(1)</span>Please specify how much was the decrease? </label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S11" value="<?php echo set_value('Q8W2S11',1)?>" <?php if(isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 1?"checked":"" ?>>
            Less than a metre annually </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S11" value="<?php echo set_value('Q8W2S11',2)?>" <?php if(isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 2?"checked":"" ?>/>
            1-5 metre annually </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="radio" name="Q8W2S11" value="<?php echo set_value('Q8W2S11',3)?>" <?php if(isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 3?"checked":"" ?>/>
            More than 5 metres annually </label>
          </li>
        </ul>
      </div> -->
</div>
<div class="form-group" id="Q8W2S12"
                        <?php
                        if(isset($data['Q8W2S10']))
                            if($data['Q8W2S10'] == 2)
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(h)(1)</span>Please specify how much was the increase? </label>
      <div class="form-group">
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S12" value="<?php echo set_value('Q8W2S12',1)?>" <?php if(isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 1?"checked":"" ?>>
        Less than a metre annually </label>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S12" value="<?php echo set_value('Q8W2S12',2)?>" <?php if(isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 2?"checked":"" ?>/>
        1-5 metre annually </label>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S12" value="<?php echo set_value('Q8W2S12',3)?>" <?php if(isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 3?"checked":"" ?>/>
        More than 5 metres annually </label>
      </div> -->
</div>
<div class="form-group" id="Q8W2S13"
                        <?php
                        if(isset($data['Q8W2']))
                        {
                            if($data['Q8W2'] == 'Y')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(i)</span>If your school's RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure?</label>
      <div class="form-group">
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S13" value="<?php echo set_value('Q8W2S13','Y')?>" <?php if(isset($data['Q8W2S13'])) echo $data['Q8W2S13'] == 'Y'?"checked":"" ?>>
        Yes </label>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S13" value="<?php echo set_value('Q8W2S13','N')?>" <?php if(isset($data['Q8W2S13'])) echo $data['Q8W2S13'] == 'N'?"checked":"" ?>/>
        No </label>
      </div> -->
</div>
<div class="form-group" id="Q8W2S6"
                        <?php
                        if(isset($data['Q8W2']))
                            if($data['Q8W2'] == 'N')
                            {
                                echo 'style="display:block;"';
                            }
                            else
                            {
                                echo 'style="display:none;"';
                            }
                        else
                        {
                            echo 'style="display:none;"';
                        }
                        ?>

                    >
  <!-- <label><span class="cube">4(a)</span> Calculate your school’s rainwater harvesting potential (in litres).</label>
      <input class="form-control space-textbox" id="Q8W2S6A" type="number" min="0" name="Q8W2S6" placeholder="<?php if(isset($data['Q8W2S6'])) echo $data['Q8W2S6']; ?>" value="<?php echo set_value('Q8W2S6'); ?>"/> -->
</div>
<div class="form-group">
  <label>
  <h6>Task 5: Are the plumbing and sanitation facilities in your school adequate?</h6>
  </label>
  <br>
  Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these hampers attendance, especially of girls in senior grades. </div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">5</span>Please share details about sanitation and hygiene practices in your school: </label>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10" > Does the school have separate toilets for males and females? </label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S1" value="<?php echo set_value('Q8W3S1','Y')?>" <?php if(isset($data['Q8W3S1'])) echo $data['Q8W3S1'] == 'Y'?"checked":"" ?>/>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S1" value="<?php echo set_value('Q8W3S1','N')?>" <?php if(isset($data['Q8W3S1'])) echo $data['Q8W3S1'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Are there sufficient toilets for women in your school?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S2" value="<?php echo set_value('Q8W3S2','Y')?>" <?php if(isset($data['Q8W3S2'])) echo $data['Q8W3S2'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S2" value="<?php echo set_value('Q8W3S2','N')?>" <?php if(isset($data['Q8W3S2'])) echo $data['Q8W3S2'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Are there sufficient toilets for men in your school?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S3" value="<?php echo set_value('Q8W3S3','Y')?>" <?php if(isset($data['Q8W3S3'])) echo $data['Q8W3S3'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S3" value="<?php echo set_value('Q8W3S3','N')?>" <?php if(isset($data['Q8W3S3'])) echo $data['Q8W3S3'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10"> Are the toilets accessible and safe to use for children? </label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S4" value="<?php echo set_value('Q8W3S4','Y')?>" <?php if(isset($data['Q8W3S4'])) echo $data['Q8W3S4'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S4" value="<?php echo set_value('Q8W3S4','N')?>" <?php if(isset($data['Q8W3S4'])) echo $data['Q8W3S4'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Are the toilets accessible and safe to use for differently abled children? </label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S5" value="<?php echo set_value('Q8W3S5','Y')?>" <?php if(isset($data['Q8W3S5'])) echo $data['Q8W3S5'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S5" value="<?php echo set_value('Q8W3S5','N')?>" <?php if(isset($data['Q8W3S5'])) echo $data['Q8W3S5'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S6" value="<?php echo set_value('Q8W3S6','Y')?>" <?php if(isset($data['Q8W3S6'])) echo $data['Q8W3S6'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S6" value="<?php echo set_value('Q8W3S6','N')?>" <?php if(isset($data['Q8W3S6'])) echo $data['Q8W3S6'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Are the toilets situated in the right location in terms of privacy and safety?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S7" value="<?php echo set_value('Q8W3S7','Y')?>" <?php if(isset($data['Q8W3S7'])) echo $data['Q8W3S7'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S7" value="<?php echo set_value('Q8W3S7','N')?>" <?php if(isset($data['Q8W3S7'])) echo $data['Q8W3S7'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Is there sufficient light during day time?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S8" value="<?php echo set_value('Q8W3S8','Y')?>" <?php if(isset($data['Q8W3S8'])) echo $data['Q8W3S8'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S8" value="<?php echo set_value('Q8W3S8','N')?>" <?php if(isset($data['Q8W3S8'])) echo $data['Q8W3S8'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Do you use soap to wash hands before and after lunch?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S9" value="<?php echo set_value('Q8W3S9','Y')?>" <?php if(isset($data['Q8W3S9'])) echo $data['Q8W3S9'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S9" value="<?php echo set_value('Q8W3S9','N')?>" <?php if(isset($data['Q8W3S9'])) echo $data['Q8W3S9'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group-1">
  <label class="radio-inline text-gray col-xs-10">Do you use soap to wash hands before and after using the toilet ?</label>
  <ul class="list-inline list-inline-1">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S10" value="<?php echo set_value('Q8W3S10','Y')?>" <?php if(isset($data['Q8W3S10'])) echo $data['Q8W3S10'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W3S10" value="<?php echo set_value('Q8W3S10','N')?>" <?php if(isset($data['Q8W3S10'])) echo $data['Q8W3S10'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label><span class="cube">6</span>How many drinking water taps do you have?</label>
  <input class="form-control space-textbox" id="Q9W1" type="number" min="0" name="Q9W1" placeholder="<?php if(isset($data['Q9W1'])) echo $data['Q9W1']; ?>" value="<?php echo set_value('Q9W1'); ?>"/>
</div>
<div class="form-group">
  <label><span class="cube">7</span>How many hand pumps do you have?</label>
  <input class="form-control space-textbox" id="Q10W1" type="number" min="0" name="Q10W1" placeholder="<?php if(isset($data['Q10W1'])) echo $data['Q10W1']; ?>" value="<?php echo set_value('Q10W1'); ?>"/>
</div>
<div class="form-group">
  <label><span class="cube">8</span>How many ablution taps (taps used for washing hands only) do you have?</label>
  <input class="form-control space-textbox" id="Q11W1" type="number" min="0" name="Q11W1" placeholder="<?php if(isset($data['Q11W1'])) echo $data['Q11W1']; ?>" value="<?php echo set_value('Q11W1'); ?>"/>
</div>
<!--div class="form-group">
      <label><span class="cube">9</span>How many water closets (used for defecation and urination) do you have?</label>
      <input class="form-control space-textbox" type="number" min="0" name="Q12W1" placeholder="<?php if(isset($data['Q12W1'])) echo $data['Q12W1']; ?>" value="<?php echo set_value('Q12W1'); ?>"/>
    </div-->
<div class="form-group">
  <label  class="control-label"><span class="cube">9</span>How many water closets (used for defecation and urination) do you have?</label>
  <div class="form-group row">
    <div class="col-xs-2">
      <label class="text-gray">Number of toilets</label>
    </div>
    <div class="col-xs-2">
      <label class="text-gray"> Girls</label>
      <input class="form-control space-textbox" onkeyup="Toilets()" id="Q13W1S1" type="number" min="0" name="Q13W1S1" placeholder="<?php if(isset($data['Q13W1S1'])) echo $data['Q13W1S1'] ?>"  value="<?php echo set_value('Q13W1S1'); ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Boys</label>
      <input class="form-control space-textbox" onkeyup="Toilets()" id="Q13W1S2" type="number" min="0" name="Q13W1S2" placeholder="<?php if(isset($data['Q13W1S2'])) echo $data['Q13W1S2'] ?>" value="<?php echo set_value('Q13W1S2'); ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Common</label>
      <input class="form-control space-textbox" onkeyup="Toilets()" id="Q13W1S3" type="number" min="0" name="Q13W1S3" placeholder="<?php if(isset($data['Q13W1S3'])) echo $data['Q13W1S3'] ?>" value="<?php echo set_value('Q13W1S3'); ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Total</label>
      <input class="form-control space-textbox" onkeyup="Toilets()" id="Q13W1S4" type="number" min="0" name="Q13W1S4" placeholder="<?php if(isset($data['Q13W1S4'])) echo $data['Q13W1S4'] ?>" value="<?php echo set_value('Q13W1S4'); ?>" readonly/>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">10</span>How many urinals (strictly used for urination only) do you have?</label>
    <input class="form-control space-textbox" id="Q14W1" type="number" min="0" name="Q14W1" placeholder="<?php if(isset($data['Q14W1'])) echo $data['Q14W1']; ?>" value="<?php echo set_value('Q14W1'); ?>"/>
  </div>
  <div class="form-group">
    <label><span class="cube">11</span>How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?</label>
    <input class="form-control space-textbox" id="Q15W1" type="number" min="0" name="Q15W1" placeholder="<?php if(isset($data['Q15W1'])) echo $data['Q15W1']; ?>" value="<?php echo set_value('Q15W1'); ?>"/>
  </div>
</div>
<div class="form-group">
  <label> Water supply and cleaning of toilets in your school: </label>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">12</span>Is there a water storage system in place to supply water in the toilets?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16W1" value="<?php echo set_value('Q16W1','Y')?>" <?php if(isset($data['Q16W1'])) echo $data['Q16W1'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q16W1" value="<?php echo set_value('Q16W1','N')?>" <?php if(isset($data['Q16W1'])) echo $data['Q16W1'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">13</span>Is the water supply sufficient?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q17W1" value="<?php echo set_value('Q17W1','Y')?>" <?php if(isset($data['Q17W1'])) echo $data['Q17W1'] == 'Y'?"checked":""; ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q17W1" value="<?php echo set_value('Q17W1','N')?>" <?php if(isset($data['Q17W1'])) echo $data['Q17W1'] == 'N'?"checked":""; ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">14</span>Are the toilets cleaned?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q18W1" onclick="ToiletCleaned(1)" value="<?php echo set_value('Q18W1','Y')?>" <?php if(isset($data['Q18W1'])) echo $data['Q18W1'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q18W1" onclick="ToiletCleaned(2)" value="<?php echo set_value('Q18W1','N')?>" <?php if(isset($data['Q18W1'])) echo $data['Q18W1'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
                    if(isset($data['Q18W1']))
                    {if($data['Q18W1'] == 'Y')
                    {
                    ?>
<div class="form-group" id="Q18W2">
<?php } else { ?>
<div class="form-group" id="Q18W2" style="display: none;">
<?php }} else {?>
<div class="form-group" id="Q18W2" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">14(a)</span>If yes, please specify</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2" value="<?php echo set_value('Q18W2',1)?>" <?php if(isset($data['Q18W2'])) echo $data['Q18W2'] == 1?"checked":"" ?>>
        Once a day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2" value="<?php echo set_value('Q18W2',2)?>" <?php if(isset($data['Q18W2'])) echo $data['Q18W2'] == 2?"checked":"" ?>>
        Twice a day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2" value="<?php echo set_value('Q18W2',3)?>" <?php if(isset($data['Q18W2'])) echo $data['Q18W2'] == 3?"checked":"" ?>>
        More than twice a day </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 7: Does your school reuse/recycle waste water? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#recyclingSewageWater" target="_blank"> </a></h6>
  </label>
  <br>
  Water recycling is the process of treating waste or used water, in order to upgrade its quality, so that it can be used again. When water, once used for a particular purpose, is put to use again, it is then being reused. </div>
<div class="form-group">
  <label  class="control-label"><span class="cube">15</span>Does your school treat wastewater?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q19W1" value="<?php echo set_value('Q19W1','Y')?>" <?php if(isset($data['Q19W1'])) echo $data['Q19W1'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q19W1" value="<?php echo set_value('Q19W1','N')?>" <?php if(isset($data['Q19W1'])) echo $data['Q19W1'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label  class="control-label"><span class="cube">16</span>Does your school reuse the treated wastewater?</label>
  <ul class="list-inline">
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q20W1" onclick="WasteWater(1)" value="<?php echo set_value('Q20W1','Y')?>" <?php if(isset($data['Q20W1'])) echo $data['Q20W1'] == 'Y'?"checked":"" ?>>
      Yes </label>
    </li>
    <li>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q20W1" onclick="WasteWater(2)" value="<?php echo set_value('Q20W1','N')?>" <?php if(isset($data['Q20W1'])) echo $data['Q20W1'] == 'N'?"checked":"" ?>>
      No </label>
    </li>
  </ul>
</div>
<?php
                            if(isset($data['Q20W1']))
                            {if($data['Q20W1'] == 'Y')
                            {
                            ?>
<div class="form-group" id="Q20W1Q">
<?php } else { ?>
<div class="form-group" id="Q20W1Q" style="display: none;">
<?php }} else {?>
<div class="form-group" id="Q20W1Q" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">16(a)</span>How does your school reuse wastewater?</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="checkbox-inline text-gray">
        <input type="checkbox" name="Q20W2" value="<?php echo set_value('Q20W2',1)?>" <?php if(isset($data['Q20W2'])) echo $data['Q20W2'] == 1?"checked":"" ?>>
        Gardening </label>
      </li>
      <li>
        <label class="checkbox-inline text-gray">
        <input type="checkbox" name="Q20W21" value="<?php echo set_value('Q20W21',2)?>" <?php if(isset($data['Q20W21'])) echo $data['Q20W21'] == 2?"checked":"" ?>>
        Flushing</label>
      </li>
      <li>
        <label class="checkbox-inline text-gray">
        <input type="checkbox" name="Q20W22" value="<?php echo set_value('Q20W22',3)?>" <?php if(isset($data['Q20W22'])) echo $data['Q20W22'] == 3?"checked":"" ?>>
        Recharge Ground Water</label>
      </li>
    </ul>
  </div>
</div>
<?php
                                    if(isset($data['Q20W1']))
                                    {if($data['Q20W1'] == 'N')
                                    {
                                    ?>
<div class="form-group" id="Q19W2">
  <?php } else { ?>
  <div class="form-group" id="Q19W2" style="display: none;">
    <?php }} else {?>
    <div class="form-group" id="Q19W2" style="display: none;">
      <?php } ?>
      <label  class="control-label"><span class="cube">16(a)</span>Please specify the fate of wastewater:</label>
      <ul>
        <li>
          <label class="checkbox-inline text-gray">
          <input type="checkbox" name="Q20W3" value="<?php echo set_value('Q20W3',1)?>" <?php if(isset($data['Q20W3'])) echo $data['Q20W3'] == 1?"checked":"" ?>>
          Wastewater flows directly to the drains </label>
        </li>
        <li>
          <label class="checkbox-inline text-gray">
          <input type="checkbox" name="Q20W31" value="<?php echo set_value('Q20W31',2)?>" <?php if(isset($data['Q20W31'])) echo $data['Q20W31'] == 2?"checked":"" ?>>
          Used for groundwater recharge </label>
        </li>
        <li>
          <label class="checkbox-inline text-gray">
          <input type="checkbox" name="Q20W32" value="<?php echo set_value('Q20W32',3)?>" <?php if(isset($data['Q20W32'])) echo $data['Q20W32'] == 3?"checked":"" ?>>
          Used for gardening and horticulture </label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label>Please upload a flow chart (hand drawn) of the wastewater treatment process.</label>
      <br/>
      <br/>
      <button class="btn uploadbtn
                                                upload" data-id="Water
                                                Treatment Process"
                                                        data-toggle="modal"
                                                        data-target="#uploadModal" type="button">UPLOAD FILES</button>
      <br>
      </label>
    </div>
    <table width="100%" class="question uploadedfiles">
      <thead>
        <tr>
          <th>File name</th>
          <th>Delete</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($waterTreatment as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php $name = str_replace(" ", "_", $f->name . "_Water_Treatment_Process_"); ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
	  </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="form-group" id="WastePolicy">
      <label class="control-label">Please upload supporting documents:</label>
      <br>
      &bull;Pictures of audit team doing survey<br/>
      Please upload all supporting documents related to this section here. Note, files must be one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
      File size per document should not exceed <strong>100 KB.</strong> <br/>
      <br/>
      <button class="btn uploadbtn
                                                upload" data-id="Supporting
                                                Document Water"
                                                        data-toggle="modal"
                                                        data-target="#uploadModal" type="button">UPLOAD FILES</button>
      <br>
      <br>
    </div>
    <table width="100%" class="question uploadedfiles">
      <thead>
        <tr>
          <th>File name</th>
          <th>Delete</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($supportDocWater as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Water_"); ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
         <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
	  </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="text-center">
      <button type="button" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
      <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
      <button type="button" class="org-btn" id="watersave">Save and Resume Later</button>
    </div>
    <?php echo form_close(); ?> </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer');?>
<style type="text/css">
                                        .text-gray{
                                            color: #666666!important;
                                            /*font-weight:100!important;*/
                                        }
                                    </style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/TcyZ1vtXsMw" id="video" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<!--                                    Upload Modal Starts Here-->
<div id="uploadModal" class="modal
                                        fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"
                                                     style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal"> &times; </button>
        <h4
                                                            class="modal-title">Upload your files</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="msg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3" id="test">
            <form enctype="multipart/form-data">
              <input
                                                                        type="file" name="file[]" id="file1" multiple />
              <input
                                                                        type="hidden" name="Fules" value="" id="Fules_bill" />
            </form>
          </div>
        </div>
        <div class="row pull-right">
          <div class="col-md-12">
            <button class="btn btn-default" id="uploadFiles" type="button">UPLOAD</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Return to survey</button>
          </div>
        </div>
        <div class="clerarfix">&nbsp;</div>
        <div class="clerarfix">&nbsp;</div>
      </div>
    </div>
  </div>
</div>
<!--                                    Ends Here-->
<script type="text/javascript">
                                        $('.close').click(function(){
                                            $('#video').attr("src","https://www.youtube.com/embed/TcyZ1vtXsMw");
                                        });
                                        $('body').click(function(){
                                            $('#video').attr("src","https://www.youtube.com/embed/TcyZ1vtXsMw");
                                        });

                                        $(document).ready(function () {
                                            $('#moveprevbtn').on('click', function (data) {
                                                var fd = $('#PrimaryWater').serialize();
                                                //console.log(fd);
                                                $.ajax({
                                                    type: 'POST',
                                                    url: '<?php echo base_url('previous/waterajax') ?>',
                                                    data: fd,
                                                    success: function (data)
                                                    {
                                                        window.location.href = "<?php echo base_url('land'); ?>";
                                                    }
                                                });
                                            });

                                            $('#watersave').on('click', function (data) {
                                                var fd = $('#PrimaryWater').serialize();
                                                //console.log(fd);
                                                $.ajax({
                                                    type: 'POST',
                                                    url: '<?php echo base_url('previous/waterajax') ?>',
                                                    data: fd,
                                                    success: function (data)
                                                    {
                                                        window.location.href = "<?php echo base_url('logout'); ?>";
                                                    }
                                                });
                                            });

                                            //                                                File Upload Plugin
                                            $('#file1').fileuploader({
                                                addMore: true,
                                                theme: 'onebutton',
                                                limit: 5,
                                                fileMaxSize:0.5,
                                                extensions: ['jpg', 'jpeg', 'png','pdf','doc','docx'],
                                                captions: {
                                                    button: "Select File",
                                                    errors: {
                                                        fileSize: '${name} is too large! Please choose a file up ' +
                                                        'to 512KB.',

                                                    }
                                                }
                                            });
                                            //Ends Here....
                                            //Upload Files
                                            $('#uploadFiles').on('click', function () {
                                                $('#msg').html('');
                                                var formdata = new FormData();
                                                var ins = document
                                                    .getElementById('file1').files.length;
                                                if (ins == 0)
                                                {
                                                    $('#msg').html('<div class="alert alert-danger">' +
                                                        '<strong>&#x2716; Error!</strong> Please Select a File to upload' +
                                                        '</div>');
                                                } else
                                                {
                                                    for (var x = 0; x < ins; x++) {
                                                        formdata.append
                                                        ("files[]", document.getElementById('file1').files[x]);
                                                    }
                                                    formdata.append('Fuels', $('#Fules_bill').val());
                                                    $.ajax({
                                                        url: '<?php echo base_url('upload_files'); ?>', // point to server-side PHP script
                                                        dataType: 'text', // what to expect back from the PHP script
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false,
                                                        data: formdata,
                                                        type: 'post',
                                                        success: function (response) {
                                                            if (response == "success")
                                                            {
                                                                $('#msg').html('<div class="alert alert-success">' +
                                                                    '<strong>&#10004; Success!</strong> Files uploaded successfully.' +
                                                                    '</div>');
                                                            } else if (response == "error")
                                                            {
                                                                $('#msg').html('<div class="alert alert-danger">' +
                                                                    '<strong>&#x2716; Error!</strong> There is an error uploading your files.' +
                                                                    '</div>');
                                                            }
                                                        }

                                                    });
                                                }
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

                                        //Get Data When Modal Open
                                        $("#uploadModal").on('shown.bs' +
                                            '.modal',
                                            function (e) {
                                                var id = e.relatedTarget.dataset.id;
                                                $('#Fules_bill').val(id);
                                            });

                                        //Remove Data When Modal Close
                                        $("#uploadModal").on("hidden.bs.modal", function () {
                                            $('#test').html("");
                                            var fd = $('#' + document.forms[0].id).serialize();
                                            ///alert(fd);
                                            var redirect = '';
                                            switch (document.forms[0].id)
                                            {
                                                case "air":
                                                    redirect = "airprevious";
                                                    break;
                                                case "food":
                                                    redirect = "foodajax";
                                                    break;
                                                case "energy":
                                                    redirect = "energyajax";
                                                    break;
                                                case "land":
                                                    redirect = "landajax";
                                                    break;
                                                case "water":
                                                    redirect = "waterajax";
                                                    break;
                                                case "PrimaryWater":
                                                    redirect = "waterajax";
                                                    break;
                                                case "waste":
                                                    redirect = "wasteajax";
                                                    break;
                                                case "PrimaryWaste":
                                                    redirect = "wasteajax";
                                                    break;
                                                case "PrimaryAir":
                                                    //alert('Case Called');
                                                    redirect="airprevious";
                                                    break;
                                                case "PrimaryEnergy":
                                                    redirect = "energyajax";
                                                    break;
                                                case "PrimaryFood":
                                                    redirect = "foodajax";
                                                    break;
                                                case "PrimaryLand":
                                                    redirect= "landajax";
                                            }

                                            //console.log(fd);
                                            $.ajax({
                                                type: 'POST',
                                                url: '<?php echo base_url() ?>previous/' + redirect,
                                                data: fd,
                                                success: function (data) {
                                                    location.reload();
                                                }
                                            });
                                        });
	
/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#movenextbtn").click(function(e){
   if($("#Q1W1S1").attr('placeholder')==""  || $("#Q1W1S3").attr('placeholder')==""  || $("#Q1W1S2").attr('placeholder')==""){ 
     if($("#Q1W1S1").val()==""  || $("#Q1W1S3").val()==""  || $("#Q1W1S2").val()==""){ 
      alert("School Must Add Teacher First Name, Last Name & Email ID.");
	  e.preventDefault();
	}
   }
});
/*Administrative Record Validation*/
/*Administrative staff (maximum of five staff can be part of the team): */
$("#movenextbtn").click(function(e){
   if($("#Q2W1S1").attr('placeholder')==""  || $("#Q2W1S3").attr('placeholder')==""  || $("#Q2W1S2").attr('placeholder')==""){
      if($("#Q2W1S1").val()=="" || $("#Q2W1S3").val()==""  || $("#Q2W1S2").val()==""){  
    alert("School Must Add Administrative Staff  First Name, Last Name & Email ID.");
	e.preventDefault();
	}
   }
});
/*Student Record Validation*/
/*Student (maximum of five staff can be part of the team): */
$("#movenextbtn").click(function(e){
   if($("#Q3W1S1").attr('placeholder')==""  || $("#Q3W1S2").attr('placeholder')==""  || $("#Q3W1S3").attr('placeholder')==""){ 
    if($("#Q3W1S1").val()==""  || $("#Q3W1S2").val()==""  || $("#Q3W1S3").val()==""){ 
    alert("School Must Add Student First Name, Last Name & Grade.");
	e.preventDefault();
	}
   }
});
$("#movenextbtn").click(function(e){
/*Q1 Total water consumption of your school:*/
if($("input[name='Q4W1']").attr('placeholder')=="" && $("input[name='Q4W1']").val()==""){
  if($("input[name='Q4W1']").val()==""){
   alert("Q1 Total water consumption of your school: Drinking");
   e.preventDefault();
  }
}
if($("input[name='Q4W2']").attr('placeholder')=="" && $("input[name='Q4W2']").val()==""){
  if($("input[name='Q4W2']").val()==""){
   alert("Q1 Total water consumption of your school: Toilet flushing");
   e.preventDefault();
  }
}
if($("input[name='Q4W3']").attr('placeholder')=="" && $("input[name='Q4W3']").val()==""){
 if($("input[name='Q4W3']").val()==""){
  alert("Q1 Total water consumption of your school: Personal cleaning");
  e.preventDefault();
 }
}
if($("input[name='Q4W4']").attr('placeholder')=="" && $("input[name='Q4W4']").val()==""){
 if($("input[name='Q4W4']").val()==""){
  alert("Q1 Total water consumption of your school: Washing clothes");
  e.preventDefault();
 }
}
if($("input[name='Q4W5']").attr('placeholder')=="" && $("input[name='Q4W5']").val()==""){
 if($("input[name='Q4W5']").val()==""){
  alert("Q1 Total water consumption of your school: Cooking");
  e.preventDefault();
 }
}
if($("input[name='Q4W6']").attr('placeholder')=="" && $("input[name='Q4W6']").val()==""){
 if($("input[name='Q4W6']").val()==""){
  alert("Q1 Total water consumption of your school: Cleaning Utensils");
  e.preventDefault();
 }
}
if($("input[name='Q4W7']").attr('placeholder')=="" && $("input[name='Q4W7']").val()==""){
 if($("input[name='Q4W7']").val()==""){ 
  alert("Q1 Total water consumption of your school: Washing Vegetables");
  e.preventDefault();
 }
}
if($("input[name='Q4W8']").attr('placeholder')=="" && $("input[name='Q4W8']").val()==""){
 if($("input[name='Q4W8']").val()==""){  
  alert("Q1 Total water consumption of your school: Mopping floors");
  e.preventDefault();
 }
}
if($("input[name='Q4W9']").attr('placeholder')=="" && $("input[name='Q4W9']").val()==""){
 if($("input[name='Q4W9']").val()==""){  
  alert("Q1 Total water consumption of your school: Gardening");
  e.preventDefault();
 }
}
if($("input[name='Q4W10']").attr('placeholder')=="" && $("input[name='Q4W10']").val()==""){
 if($("input[name='Q4W10']").val()==""){  
  alert("Q1 Total water consumption of your school: Others");
  e.preventDefault();
 }
}
/*Q2 Where does the water your school uses, come from? (please tick the correct options):*/
if($("input[name='Q5W1']:checked").length==0 && $("input[name='Q5W2']:checked").length==0 && $("input[name='Q5W3']:checked").length==0 && $("input[name='Q5W4']:checked").length==0){
  alert("Q2 Where does the water your school uses, come from? (please tick the correct options):");
  e.preventDefault();
}
/*Q3 Does your school get daily water supply?:*/
if($("input[name='Q7W1']:checked").length==0){
  alert("Q3 Does your school get daily water supply?:");
  e.preventDefault();
}
/*Q4 Do you have Rainwater harvesting (RWH) system in your school?:*/
if($("input[name='Q8W2']:checked").length==0){
  alert("Q4 Do you have Rainwater harvesting (RWH) system in your school?:");
  e.preventDefault();
}
/*Q6 How many drinking water taps do you have?:*/
if($("input[name='Q9W1']").attr('placeholder')=="" && $("input[name='Q9W1']").val()==""){
  if($("input[name='Q9W1']").val()==""){
   alert("Q6 How many drinking water taps do you have?:");
   e.preventDefault();
  }
}
/*Q7 How many hand pumps do you have?:*/
if($("input[name='Q10W1']").attr('placeholder')=="" && $("input[name='Q10W1']").val()==""){
  if($("input[name='Q10W1']").val()==""){
    alert("Q7 How many hand pumps do you have?:");
    e.preventDefault();
  }
}
/*Q8 How many ablution taps (taps used for washing hands only) do you have?:*/
if($("input[name='Q11W1']").attr('placeholder')=="" && $("input[name='Q11W1']").val()==""){
 if($("input[name='Q11W1']").val()==""){ 
  alert("Q8 How many ablution taps (taps used for washing hands only) do you have?:");
  e.preventDefault();
 }
}
/*Q8 How many ablution taps (taps used for washing hands only) do you have?:*/
if($("input[name='Q11W1']").attr('placeholder')=="" && $("input[name='Q11W1']").val()==""){
  if($("input[name='Q11W1']").val()==""){ 
   alert("Q8 How many ablution taps (taps used for washing hands only) do you have?:");
   e.preventDefault();
  }
}
/*Q9 How many water closets (used for defecation and urination) do you have?:*/
if($("input[name='Q13W1S1']").attr('placeholder')=="" ||  $("input[name='Q13W1S2']").attr('placeholder')=="" || $("input[name='Q13W1S3']").attr('placeholder')==""){
if($("input[name='Q13W1S1']").val()=="" ||  $("input[name='Q13W1S2']").val()=="" || $("input[name='Q13W1S3']").val()==""){
  alert("Q9 How many water closets (used for defecation and urination) do you have?:");
  e.preventDefault();
  }
}
/*Q10 How many urinals (strictly used for urination only) do you have?*/
if($("input[name='Q14W1']").attr('placeholder')=="" && $("input[name='Q14W1']").val()==""){
  if($("input[name='Q14W1']").val()==""){
  alert("Q10 How many urinals (strictly used for urination only) do you have?");
  e.preventDefault();
  }
}
/*Q11 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?*/
if($("input[name='Q15W1']").attr('placeholder')=="" && $("input[name='Q15W1']").val()==""){
 if($("input[name='Q15W1']").val()==""){
   alert("Q11 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?");
   e.preventDefault();
  }
}
/*Q12 Is there a water storage system in place to supply water in the toilets?:*/
if($("input[name='Q16W1']:checked").length==0){
  alert("Q12 Is there a water storage system in place to supply water in the toilets?:");
  e.preventDefault();
}
/*Q13 Is the water supply sufficient?:*/
if($("input[name='Q17W1']:checked").length==0){
  alert("Q13 Is the water supply sufficient?:");
  e.preventDefault();
}
/*Q14 Are the toilets cleaned?:*/
if($("input[name='Q18W1']:checked").length==0){
  alert("Q14 Are the toilets cleaned?:");
  e.preventDefault();
}
/*Q15 Does your school treat wastewater?:*/
if($("input[name='Q19W1']:checked").length==0){
  alert("Q15 Does your school treat wastewater?:");
  e.preventDefault();
}
/*Q16 Does your school reuse the treated wastewater?:*/
if($("input[name='Q20W1']:checked").length==0){
  alert("Q16 Does your school reuse the treated wastewater?:");
  e.preventDefault();
}
/*Q14(a) Are the toilets cleaned?:*/
if($("input[name='Q18W1']:checked").val()==="Y"){
  if($("input[name='Q18W2']:checked").length==0){
  alert("Q14(a) Are the toilets cleaned?:");
  e.preventDefault();
  }
}
/*Q16(a)How does your school reuse wastewater?*/
if($("input[name='Q20W1']:checked").val()==="Y"){
  if($("input[name='Q20W2']:checked").length==0 && $("input[name='Q20W21']:checked").length==0 && $("input[name='Q20W22']:checked").length==0){
  alert("Q16(a)How does your school reuse wastewater?");
  e.preventDefault();
  }
}
/*Q16(a)How does your school reuse wastewater?*/
if($("input[name='Q20W1']:checked").val()==="N"){
  if($("input[name='Q20W3']:checked").length==0 && $("input[name='Q20W31']:checked").length==0 && $("input[name='Q20W32']:checked").length==0){
  alert("Q16(a)How does your school reuse wastewater?");
  e.preventDefault();
  }
}
/**Q5 Please share details about sanitation and hygiene practices in your school:**/
if($("input[name='Q8W3S1']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Does the school have separate toilets for males and females?)");
  e.preventDefault();
}
if($("input[name='Q8W3S2']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are there sufficient toilets for women in your school?)");
  e.preventDefault();
}
if($("input[name='Q8W3S3']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are there sufficient toilets for men in your school?)");
  e.preventDefault();
}
if($("input[name='Q8W3S4']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are the toilets accessible and safe to use for children?)");
  e.preventDefault();
}
if($("input[name='Q8W3S5']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are the toilets accessible and safe to use for differently abled children?)");
  e.preventDefault();
}
if($("input[name='Q8W3S6']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)?)");
  e.preventDefault();
}
if($("input[name='Q8W3S7']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Are the toilets situated in the right location in terms of privacy and safety?)");
  e.preventDefault();
}
if($("input[name='Q8W3S8']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Is there sufficient light during day time?)");
  e.preventDefault();
}
if($("input[name='Q8W3S9']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Do you use soap to wash hands before and after lunch?)");
  e.preventDefault();
}
if($("input[name='Q8W3S10']:checked").length==0){
  alert("Q5 Please share details about sanitation and hygiene practices in your school: (Do you use soap to wash hands before and after using the toilet ?)");
  e.preventDefault();
}
/************************************************************/
/************************************************************/
/************************************************************/
if($("input[name='Q8W2']:checked").val()==="Y"){
/************************************************************/
/*Q4(a) Which is/are the catchment area(s) being harvested by your school?*/
if($("input[name='Q8W2S1S1']:checked").length==0){
   alert("Q4(a)Which is/are the catchment area(s) being harvested by your school?");
  e.preventDefault();
}
/*Q4(b) How does your school harvest rainwater?*/
if($("input[name='Q8W2S2']:checked").length==0){
   alert("Q4(b) How does your school harvest rainwater?");
  e.preventDefault();
}
/*Q4(b)(1)If your school only stores rainwater, please select the use of stored rainwater:?*/
if($("input[name='Q8W2S2']:checked").val()==="3"){
  if($("input[name='Q8W2S2S1']:checked").length==0 && $("input[name='Q8W2S2S11']:checked").length==0 && $("input[name='Q8W2S2S12']:checked").length==0 && $("input[name='Q8W2S2S13']:checked").length==0 && $("input[name='Q8W2S2S14']:checked").length==0 && $("input[name='Q8W2S2S15']:checked").length==0 && $("input[name='Q8W2S2S16']:checked").length==0 && $("input[name='Q8W2S2S17']:checked").length==0 && $("input[name='Q8W2S2S18']:checked").length==0 && $("input[name='Q8W2S2S19']:checked").length==0){
   alert("4(b)(1) If your school only stores rainwater, please select the use of stored rainwater:?");
   e.preventDefault();
  }
}
/*Q4(b)(2) Does your school have rainwater storage tank?*/
 if($("input[name='Q8W2S2S2']:checked").length==0){
   alert("Q4(b)(2) Does your school have rainwater storage tank?");
   e.preventDefault();
 }
/*********************************************************/
if($("input[name='Q8W2S2S2']:checked").val()==="Y"){
/*4(b)(2) A If yes, please provide: (Total number of storage tank (litres):) */
  if($("input[name='Q8W2S2S3']").attr('placeholder')=="" && $("input[name='Q8W2S2S3']").val()==""){
   if($("input[name='Q8W2S2S3']").val()==""){
    alert("4(b)(2) A If yes, please provide: (Total number of storage tank (litres):)?");
    e.preventDefault();
   }
  }
/*4(b)(2) B If yes, please provide: (Total number of storage tank (litres):) */
  if($("input[name='Q8W2S2S4']").attr('placeholder')=="" && $("input[name='Q8W2S2S4']").val()==""){
  if($("input[name='Q8W2S2S4']").val()==""){
   alert("4(b)(2) B If yes, please provide: (Total capacity of each storage tank (litres):)?");
   e.preventDefault();
   }
  }  
}
/*Q4(b)(3)Does your school have groundwater recharge structure?*/
 if($("input[name='Q8W2S2S7']:checked").length==0){
   alert("Q4(b)(3)Does your school have groundwater recharge structure?");
   e.preventDefault();
 } 
/**Q4(b)(3) iPlease tick the type of groundwater recharge structure used in your school:**/ 
 if($("input[name='Q8W2S2S7']:checked").val()==="Y"){
    if($("input[name='Q8W2S2S94']:checked").length==0 && $("input[name='Q8W2S2S95']:checked").length==0 && $("input[name='Q8W2S2S96']:checked").length==0){
	 alert("Q4(b)(3) iPlease tick the type of groundwater recharge structure used in your school:");
     e.preventDefault();
	}
 }
/*Q4(c) Does your school clean your catchment and system?*/
 if($("input[name='Q8W2S61']:checked").length==0){
   alert("Q4(c)Does your school clean your catchment and system?");
   e.preventDefault();
 }  

/*3(a)Does your school get daily water supply?*/
if($("input[name='Q7W1']:checked").val()==="Y"){
  if($("input[name='Q7W2']:checked").length==0){
    alert("3(a)Does your school get daily water supply?");
    e.preventDefault();
  }
}
  
  /*3(b)Does your school get daily water supply?*/
  if($("input[name='Q7W1']:checked").val()==="N"){
    if($("input[name='Q7W3']:checked").length==0){
      alert("3(b)Does your school get daily water supply?");
      e.preventDefault();
    }
  }

}
});	
	
	
                                    </script>
	
	
	<script type="text/javascript">
 
  
  $("input[name='Q8W2']").click(function(){

    var p = $(this).val();

    
    if(p == 'N'){

      $(".Q8W2_2_error").css('display', 'block');
      
    }

    else{

      $(".Q8W2_2_error").css('display', 'none');


    }


  });
 
</script>
	
	
	
