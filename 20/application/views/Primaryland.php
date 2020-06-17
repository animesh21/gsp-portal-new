<?php $this->load->view('header'); ?>
<style type="text/css">
    .bold{ color:#e86549;}
    .form-group{
        margin-bottom:20px;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{      border-top:none;
    }
    .list-inline li{
        width:200px;
    }
    .form-group-1{
        margin-bottom:20px;
    }
  .cube-1{
   display: inline-block;
     min-width: 30px;
     line-height: 27px;
     background: #e86549;
     text-align: center;
     margin: 0 10px 0 0;
     color: #fff;
     padding: 0 8px;
   }
   .error{
     color: #fb4f2a !important;
     font-size: 15px !important;
     text-shadow: 1px 1px 1px #000;
     position: absolute;
     padding-top: 20px;
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
<!--                 <li>|</li>
                <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
            </ul>
        </div>
        <div id="pprg" class="newprog progress" style="text-align:center">
            <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
        </div>
        <div class="intro">
            <h1>LAND <span style="text-transform:capitalize">(Primary)</span> <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--             <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="<?php echo base_url(); ?>assets/img/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
        </div>
        <p> The GSP audit helps the school community draw up a roadmap for sustainable use of its land.<br>
            <strong class="unit"> The unit of measurement to be used in the Land section is Square Meter (m2).</strong> </p>
        <?php echo form_open('land/set',array('id'=>'PrimaryLand')); ?>
        <div class="form-group">
            <label><h6>Task 1: Choose your Land Audit Team <a class="tt" data-tooltip="The first name of need to have both first and last name. In the rest of the rows, if a team member does not have a last name, then they can press the space bar once and move to the next field."><span class="badge">?</span></a> </h6></label>
            <br>
            Your school gardener is certainly the best person to be a part of your audit team. Just like all other teams, five to 10 of your committed and interested schoolmates would make a strong team. </div>
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
                <input class="form-control space-textbox" id="Q1L1S1" type="text" name="Q1L1S1"
                       placeholder="<?php if (isset($data['Q1L1S1'])) echo $data['Q1L1S1']; ?>"
                       value="<?php echo set_value('Q1L1S1'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L1S3" type="text" name="Q1L1S3"
                       placeholder="<?php if (isset($data['Q1L1S3'])) echo $data['Q1L1S3']; ?>"
                       value="<?php echo set_value('Q1L1S3'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('email'); ?>
                <input class="form-control space-textbox" id="Q1L1S2" type="email" name="Q1L1S2"
                       placeholder="<?php if (isset($data['Q1L1S2'])) echo $data['Q1L1S2']; ?>"
                       value="<?php echo set_value('Q1L1S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 2</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L2S1" type="text" name="Q1L2S1"
                       placeholder="<?php if (isset($data['Q1L2S1'])) echo $data['Q1L2S1'] ?>"
                       value="<?php echo set_value('Q1L2S1'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L2S3" type="text" name="Q1L2S3"
                       placeholder="<?php if (isset($data['Q1L2S3'])) echo $data['Q1L2S3']; ?>"
                       value="<?php echo set_value('Q1L2S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L2S2" type="email" name="Q1L2S2"
                       placeholder="<?php if (isset($data['Q1L2S2'])) echo $data['Q1L2S2'] ?>"
                       value="<?php echo set_value('Q1L2S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 3</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L3S1" type="text" name="Q1L3S1"
                       placeholder="<?php if (isset($data['Q1L3S1'])) echo $data['Q1L3S1'] ?>"
                       value="<?php echo set_value('Q1L3S1'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L3S3" type="text" name="Q1L3S3"
                       placeholder="<?php if (isset($data['Q1L3S3'])) echo $data['Q1L3S3']; ?>"
                       value="<?php echo set_value('Q1L3S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L3S2" type="email" name="Q1L3S2"
                       placeholder="<?php if (isset($data['Q1L3S2'])) echo $data['Q1L3S2'] ?>"
                       value="<?php echo set_value('Q1L3S2'); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Administrative staff (maximum of five staff can be part of the
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
                <input class="form-control space-textbox" id="Q2L1S1" type="text" name="Q2L1S1"
                       placeholder="<?php if (isset($data['Q2L1S1'])) echo $data['Q2L1S1'] ?>"
                       value="<?php echo set_value('Q2L1S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L1S3" type="text" name="Q2L1S3"
                       placeholder="<?php if (isset($data['Q2L1S3'])) echo $data['Q2L1S3'] ?>"
                       value="<?php echo set_value('Q2L1S3'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('email1'); ?>
                <input class="form-control space-textbox" id="Q2L1S2" type="email" name="Q2L1S2"
                       placeholder="<?php if (isset($data['Q2L1S2'])) echo $data['Q2L1S2'] ?>"
                       value="<?php echo set_value('Q2L1S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 2</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L2S1" type="text" name="Q2L2S1"
                       placeholder="<?php if (isset($data['Q2L2S1'])) echo $data['Q2L2S1'] ?>"
                       value="<?php echo set_value('Q2L2S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L2S3" type="text" name="Q2L2S3"
                       placeholder="<?php if (isset($data['Q2L2S3'])) echo $data['Q2L2S3'] ?>"
                       value="<?php echo set_value('Q2L2S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L2S2" type="email" name="Q2L2S2"
                       placeholder="<?php if (isset($data['Q2L2S2'])) echo $data['Q2L2S2'] ?>"
                       value="<?php echo set_value('Q2L2S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 3</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L3S1" type="text" name="Q2L3S1"
                       placeholder="<?php if (isset($data['Q2L3S1'])) echo $data['Q2L3S1'] ?>"
                       value="<?php echo set_value('Q2L3S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L3S3" type="text" name="Q2L3S3"
                       placeholder="<?php if (isset($data['Q2L3S3'])) echo $data['Q2L3S3'] ?>"
                       value="<?php echo set_value('Q2L3S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L3S2" type="email" name="Q2L3S2"
                       placeholder="<?php if (isset($data['Q2L3S2'])) echo $data['Q2L3S2'] ?>"
                       value="<?php echo set_value('Q2L3S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 4</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L4S1" type="text" name="Q2L4S1"
                       placeholder="<?php if (isset($data['Q2L4S1'])) echo $data['Q2L4S1']; ?>"
                       value="<?php echo set_value('Q2L4S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L4S3" type="text" name="Q2L4S3"
                       placeholder="<?php if (isset($data['Q2L4S3'])) echo $data['Q2L4S3'] ?>"
                       value="<?php echo set_value('Q2L4S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L4S2" type="email" name="Q2L4S2"
                       placeholder="<?php if (isset($data['Q2L4S2'])) echo $data['Q2L4S2']; ?>"
                       value="<?php echo set_value('Q2L4S2'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 5</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L5S1" type="text" name="Q2L5S1"
                       placeholder="<?php if (isset($data['Q2L5S1'])) echo $data['Q2L5S1'] ?>"
                       value="<?php echo set_value('Q2L5S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L5S3" type="text" name="Q2L5S3"
                       placeholder="<?php if (isset($data['Q2L5S3'])) echo $data['Q2L5S3'] ?>"
                       value="<?php echo set_value('Q2L5S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L5S2" type="email" name="Q2L5S2"
                       placeholder="<?php if (isset($data['Q2L5S2'])) echo $data['Q2L5S2'] ?>"
                       value="<?php echo set_value('Q2L5S2'); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Students (maximum of ten students can be part of the team):</label>
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
                <input class="form-control space-textbox" id="Q3L1S1" type="text" name="Q3L1S1"
                       placeholder="<?php if (isset($data['Q3L1S1'])) echo $data['Q3L1S1'] ?>"
                       value="<?php echo set_value('Q3L1S1'); ?>"/>
            </div>
            <div class="col-xs-3"> <?php echo form_error('email2'); ?>
                <input class="form-control space-textbox" id="Q3L1S2" type="text" name="Q3L1S2"
                       placeholder="<?php if (isset($data['Q3L1S2'])) echo $data['Q3L1S2'] ?>"
                       value="<?php echo set_value('Q3L1S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L1S3" type="text" name="Q3L1S3"
                       placeholder="<?php if (isset($data['Q3L1S3'])) echo $data['Q3L1S3'] ?>"
                       value="<?php echo set_value('Q3L1S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 2</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L2S1" type="text" name="Q3L2S1"
                       placeholder="<?php if (isset($data['Q3L2S1'])) echo $data['Q3L2S1'] ?>"
                       value="<?php echo set_value('Q3L2S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L2S2" type="text" name="Q3L2S2"
                       placeholder="<?php if (isset($data['Q3L2S2'])) echo $data['Q3L2S2'] ?>"
                       value="<?php echo set_value('Q3L2S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L2S3" type="text" name="Q3L2S3"
                       placeholder="<?php if (isset($data['Q3L2S3'])) echo $data['Q3L2S3'] ?>"
                       value="<?php echo set_value('Q3L2S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 3</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L3S1" type="text" name="Q3L3S1"
                       placeholder="<?php if (isset($data['Q3L3S1'])) echo $data['Q3L3S1'] ?>"
                       value="<?php echo set_value('Q3L3S3'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L3S2" type="text" name="Q3L3S2"
                       placeholder="<?php if (isset($data['Q3L3S2'])) echo $data['Q3L3S2'] ?>"
                       value="<?php echo set_value('Q3L3S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L3S3" type="text" name="Q3L3S3"
                       placeholder="<?php if (isset($data['Q3L3S3'])) echo $data['Q3L3S3'] ?>"
                       value="<?php echo set_value('Q3L3S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 4</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L4S1" type="text" name="Q3L4S1"
                       placeholder="<?php if (isset($data['Q3L4S1'])) echo $data['Q3L4S1'] ?>"
                       value="<?php echo set_value('Q3L4S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L4S2" type="text" name="Q3L4S2"
                       placeholder="<?php if (isset($data['Q3L4S2'])) echo $data['Q3L4S2'] ?>"
                       value="<?php echo set_value('Q3L4S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L4S3" type="text" name="Q3L4S3"
                       placeholder="<?php if (isset($data['Q3L4S3'])) echo $data['Q3L4S3'] ?>"
                       value="<?php echo set_value('Q3L4S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 5</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L5S1" type="text" name="Q3L5S1"
                       placeholder="<?php if (isset($data['Q3L5S1'])) echo $data['Q3L5S1'] ?>"
                       value="<?php echo set_value('Q3L5S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L5S2" type="text" name="Q3L5S2"
                       placeholder="<?php if (isset($data['Q3L5S2'])) echo $data['Q3L5S2']  ?>"
                       value="<?php echo set_value('Q3L5S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L5S3" type="text" name="Q3L5S3"
                       placeholder="<?php if (isset($data['Q3L5S3'])) echo $data['Q3L5S3'] ?>"
                       value="<?php echo set_value('Q3L5S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 6</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L6S1" type="text" name="Q3L6S1"
                       placeholder="<?php if (isset($data['Q3L6S1'])) echo $data['Q3L6S1'] ?>"
                       value="<?php echo set_value('Q3L6S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L6S2" type="text" name="Q3L6S2"
                       placeholder="<?php if (isset($data['Q3L6S2'])) echo $data['Q3L6S2'] ?>"
                       value="<?php echo set_value('Q3L6S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L6S3" type="text" name="Q3L6S3"
                       placeholder="<?php if (isset($data['Q3L6S3'])) echo $data['Q3L6S3'] ?>"
                       value="<?php echo set_value('Q3L6S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 7</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L7S1" type="text" name="Q3L7S1"
                       placeholder="<?php if (isset($data['Q3L7S1'])) echo $data['Q3L7S1'] ?>"
                       value="<?php echo set_value('Q3L7S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L7S2" type="text" name="Q3L7S2"
                       placeholder="<?php if (isset($data['Q3L7S2'])) echo $data['Q3L7S2'] ?>"
                       value="<?php echo set_value('Q3L7S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L7S3" type="text" name="Q3L7S3"
                       placeholder="<?php if (isset($data['Q3L7S3'])) echo $data['Q3L7S3'] ?>"
                       value="<?php echo set_value('Q3L7S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 8</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L8S1" type="text" name="Q3L8S1"
                       placeholder="<?php if (isset($data['Q3L8S1'])) echo $data['Q3L8S1'] ?>"
                       value="<?php echo set_value('Q3L8S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L8S2" type="text" name="Q3L8S2"
                       placeholder="<?php if (isset($data['Q3L8S2'])) echo $data['Q3L8S2'] ?>"
                       value="<?php echo set_value('Q3L8S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L8S3" type="text" name="Q3L8S3"
                       placeholder="<?php if (isset($data['Q3L8S3'])) echo $data['Q3L8S3'] ?>"
                       value="<?php echo set_value('Q3L8S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 9</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L9S1" type="text" name="Q3L9S1"
                       placeholder="<?php if (isset($data['Q3L9S1'])) echo $data['Q3L9S1'] ?>"
                       value="<?php echo set_value('Q3L9S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L9S2" type="text" name="Q3L9S2"
                       placeholder="<?php if (isset($data['Q3L9S2'])) echo $data['Q3L9S2'] ?>"
                       value="<?php echo set_value('Q3L9S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L9S3" type="text" name="Q3L9S3"
                       placeholder="<?php if (isset($data['Q3L9S3'])) echo $data['Q3L9S3'] ?>"
                       value="<?php echo set_value('Q3L9S3'); ?>"/>
            </div>
        </div>
        <div class="form-group1 row">
            <div class="col-xs-1"> 10</div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L10S1" type="text" name="Q3L10S1"
                       placeholder="<?php if (isset($data['Q3L10S1'])) echo $data['Q3L10S1'] ?>"
                       value="<?php echo set_value('Q3L10S1'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L10S2" type="text" name="Q3L10S2"
                       placeholder="<?php if (isset($data['Q3L10S2'])) echo $data['Q3L10S2'] ?>"
                       value="<?php echo set_value('Q3L10S2'); ?>"/>
            </div>
            <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q3L10S3" type="text" name="Q3L10S3"
                       placeholder="<?php if (isset($data['Q3L10S3'])) echo $data['Q3L10S3'] ?>"
                       value="<?php echo set_value('Q3L10S3'); ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="control-label"><h6> Task 2: Identify the types of areas in your school. <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/land" target="_blank"> </a></h6></label>
            
      <div class="form-group-1 row">
                <div class="col-xs-5">
                    <label for="ex1"><span class="cube-1">1</span> Types of Area</label>
                </div>
                <div class="col-xs-5">
                    <label for="ex2"> Numbers</label>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of Playgrounds</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L1" type="number" name="Q4L1" placeholder="<?php if (isset($data['Q4L1'])) echo $data['Q4L1'] ?>" value="<?php echo set_value('Q4L1'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of <i>Kachcha</i> (unpaved) playgrounds with grass</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L2" type="number" name="Q4L2" placeholder="<?php if (isset($data['Q4L2'])) echo $data['Q4L2'] ?>" value="<?php echo set_value('Q4L2'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of <i>Kachcha</i> (unpaved) playgrounds without grass</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L3" type="number" name="Q4L3" placeholder="<?php if (isset($data['Q4L3'])) echo $data['Q4L3'] ?>" value="<?php echo set_value('Q4L3'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of <i>Pucca</i> (paved) playgrounds</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L4" type="number" name="Q4L4" placeholder="<?php if (isset($data['Q4L4'])) echo $data['Q4L4'] ?>" value="<?php echo set_value('Q4L4'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of constructed buildings - Academic</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L5" type="number" name="Q4L5" placeholder="<?php if (isset($data['Q4L5'])) echo $data['Q4L5'] ?>" value="<?php echo set_value('Q4L5'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of constructed buildings – Official</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L6" type="number" name="Q4L6" placeholder="<?php if (isset($data['Q4L6'])) echo $data['Q4L6'] ?>" value="<?php echo set_value('Q4L6'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">No. of floors (does not include ground floor) <a class="tt" data-tooltip="Please give no. of floors only." style="position:relative; top:-5px;"><span class="badge">?</span></a></label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L7" type="number" name="Q4L7" placeholder="<?php if (isset($data['Q4L7'])) echo $data['Q4L7'] ?>" value="<?php echo set_value('Q4L7'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-5">
                    <label for="ex3">Rooftop/Terrace Gardens</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox space-textbox" id="Q4L8" type="number" name="Q4L8" placeholder="<?php if (isset($data['Q4L8'])) echo $data['Q4L8'] ?>" value="<?php echo set_value('Q4L8'); ?>"/>
                </div>
            </div>
            <!--            <div class="form-group row">
                                      <div class="col-xs-3">
                                        <label for="ex3">Green cover on exposed roof & terrace</label>
                                      </div>
                                      <div class="col-xs-5">
                                        <input class="form-control space-textbox" id="ex2" type="number" name="Q4L9" placeholder="<?php if (isset($data['Q4L9'])) echo $data['Q4L9'] ?>" value="<?php echo set_value('Q4L9'); ?>"/>
                                      </div>
                                    </div>-->
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
      
      
      <div class="form-group" id="Q2V1_sec1"
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
            <label>
                <h6>Task 3: Explore the types of plants and animals in your school</h6>
            </label>
            <br/>
            This task will help you to understand the number and variety of plants and animals that your school campus supports. Identify and count the various species of plants and animals in your school.<br>
            <label>To collect data:</label>
            <br>
            Make two teams of students. One for plant species and the other for animal species. Get the school gardener and the teacher to accompany them. Count plant species and animal species that are visible to the naked eye.<br>
            <!--            Native (definition): a species that occurs naturally within a region, either evolving there or arriving and becoming established without human assistance<br>-->
            <!--            Exotic (definition): An exotic plant or animal, which is invasive, is a species that meets the following conditions:<br>-->
            <!--            1. Originate outside the local area.<br>
                                        2. Have the potential to spread long distances on its own.<br>
                                        3. Once established, have the potential to out-compete native species in the wild.<br>-->
        </div>
        <div class="form-group">
            <label for="username" class="control-label"><span class="cube">2</span>How many types of plants are there in your school?</label>
            <table class="table" style="width:700px;">
                <tr>
                    <td><label></label>
                    </td>
                    <td><label>Flowering</label>
                    </td>
                    <td><label>Fruiting</label>
                    </td>
                    <td><label>Total</label>
                    </td>
                </tr>
                <tr>
                    <td><label> Plants</label>
                    </td>
                    <td><input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S1" type="number" name="Q5L1S1" placeholder="<?php if (isset($data['Q5L1S1'])) echo $data['Q5L1S1'] ?>" value="<?php echo set_value('Q5L1S1'); ?>"/>
                    </td>
                    <td><input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S2" type="number" name="Q5L1S2" placeholder="<?php if (isset($data['Q5L1S2'])) echo $data['Q5L1S2'] ?>" value="<?php echo set_value('Q5L1S2'); ?>" />
                    </td>
                    <td><input class="form-control space-textbox"  id="Q5L1S3" type="number" name="Q5L1S3" placeholder="<?php if (isset($data['Q5L1S3'])) echo $data['Q5L1S3'] ?>" value="<?php echo set_value('Q5L1S3'); ?>" readonly/>
                    </td>
                </tr>
            </table>
            <!--              <div class="form-group row">
                                            <div class="col-xs-3">
                                              <label>Animals</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                                            </div>
                                          </div>-->
        </div>
        <div class="form-group">
            <label for="username" class="control-label"><span class="cube">3</span>How many types of animals and birds are there in your school?</label>
            <table class="table" style="width:700px;">
                <tr>
                    <td><label></label>
                    </td>
                    <td><label>Birds</label>
                    </td>
                    <td><label>Animal</label>
                    </td>
                    <td><label>Total</label>
                    </td>
                </tr>
                <tr>
                    <td><label style="width:36px;">&nbsp;</label>
                    </td>
                    <td><input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                    </td>
                    <td><input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                    </td>
                    <td><input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                    </td>
                </tr>
                <!--              <div class="form-group row">
                                            <div class="col-xs-3">
                                              <label>Animals</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                                            </div>
                                          </div>-->
            </table>
        </div>
        <div class="form-group">
            <label>
                <h6> Task 4: Find out if your school uses pesticides</h6>
            </label>
        </div>
        <div class="form-group">
            <label for="username" class="control-label"><span class="cube">4</span>Do you use chemical-based pesticides in your school green cover?</label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'Y') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'Y' ? "checked" : "" ?>>
                        Yes </label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'N') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'N' ? "checked" : "" ?>>
                        No </label>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label><h6>Upload supporting documents</h6></label>
            <br>
            Please upload the following supporting documents:<br/>
            <br/>
            &bull; Pictures of  <i>Kachcha</i> playground with grass<br/>
            &bull; Pictures of <i>Pucca</i> (paved) playground<br/>
            &bull; Pictures of green cover<br/>
            &bull; Pictures of landscaped area<br/>
            &bull; Building construction plan<br/> <br/>

            Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong> </div>
        <button class="btn uploadbtn upload" data-id="Green Cover" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
            <?php //echo '<pre>'; print_r($greenCover);  ?>
            <?php foreach ($greenCover as $f) { ?>
                <tr id="index<?php echo $f->id; ?>">
                    <?php $name = str_replace(" ", "_", $f->name . "_Green_Cover_"); //echo $name; ?>
                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files"
                           data-id="<?php echo $f->id; ?>"><img
                                    src="<?php echo base_url(); ?>assets/front/images/delete.png"
                                    style="position:relative; top:5px"/></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="clearfix">&nbsp;</div>
        <div class="text-center">
            <button type="button" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
            <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
            <button type="button" value="Submit" class="org-btn" id=""landsave>Save and Resume Later</button>
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
            <iframe width="100%" height="330px" id="video"  src="https://www.youtube.com/embed/todM6wToHHQ" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.close').click(function(){
        $('#video').attr("src","https://www.youtube.com/embed/9r3Lwrd9BUs");
    });

    $(document).ready(function () {
        $('#moveprevbtn').on('click', function (data) {
            var fd = $('#PrimaryLand').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/landajax') ?>',
                data: fd,
                success: function (data)
                {
                    window.location.href = "<?php echo base_url('food'); ?>";
                }
            });
        });
        $('#landsave').on('click', function (data) {
            var fd = $('#PrimaryLand').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/landajax') ?>',
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

/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#movenextbtn").click(function(e){
   if($("#Q1L1S1").attr('placeholder')==""  || $("#Q1L1S3").attr('placeholder')==""  || $("#Q1L1S2").attr('placeholder')==""){ 
     if($("#Q1L1S1").val()==""  || $("#Q1L1S3").val()==""  || $("#Q1L1S2").val()==""){ 
      alert("School Must Add Teacher First Name, Last Name & Email ID.");
    e.preventDefault();
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
  }
   }
});
/*Student Record Validation*/
/*Student (maximum of five staff can be part of the team): */
$("#movenextbtn").click(function(e){
   if($("#Q3L1S1").attr('placeholder')==""  || $("#Q3L1S2").attr('placeholder')==""  || $("#Q3L1S3").attr('placeholder')==""){ 
    if($("#Q3L1S1").val()==""  || $("#Q3L1S2").val()==""  || $("#Q3L1S3").val()==""){ 
    alert("School Must Add Student First Name, Last Name & Grade.");
  e.preventDefault();
  }
   }
});
/************************************************************/
$("#movenextbtn").click(function(e){
/*Q1 Types of Area:*/
if($("input[name='Q4L1']").attr('placeholder')=="" && $("input[name='Q4L1']").val()==""){
 if($("input[name='Q4L1']").val()==""){ 
   alert("Q1 Types of Area: No. of Playgrounds");
   e.preventDefault();
 }
}
if($("input[name='Q4L2']").attr('placeholder')=="" && $("input[name='Q4L2']").val()==""){
  if($("input[name='Q4L2']").val()==""){ 
   alert("Q1 Types of Area: No. of Kachcha (unpaved) playgrounds with grass");
   e.preventDefault();
  }
}
if($("input[name='Q4L3']").attr('placeholder')=="" && $("input[name='Q4L3']").val()==""){
  if($("input[name='Q4L3']").val()==""){ 
   alert("Q1 Types of Area: No. of Kachcha (unpaved) playgrounds with grass");
   e.preventDefault();
  }
}
if($("input[name='Q4L4']").attr('placeholder')=="" && $("input[name='Q4L4']").val()==""){
  if($("input[name='Q4L4']").val()==""){ 
   alert("Q1 Types of Area: No. of Pucca (paved) playgrounds");
   e.preventDefault();
  }
}
if($("input[name='Q4L5']").attr('placeholder')=="" && $("input[name='Q4L5']").val()==""){
 if($("input[name='Q4L1']").val()==""){  
  alert("Q1 Types of Area: No. of Pucca (paved) playgrounds");
  e.preventDefault();
 }
}
if($("input[name='Q4L6']").attr('placeholder')=="" && $("input[name='Q4L6']").val()==""){
 if($("input[name='Q4L6']").val()==""){ 
  alert("Q1 Types of Area: No. of constructed buildings – Official");
  e.preventDefault();
 }
}
if($("input[name='Q4L7']").attr('placeholder')=="" && $("input[name='Q4L7']").val()==""){
 if($("input[name='Q4L7']").val()==""){ 
  alert("Q1 Types of Area: No. of floors (does not include ground floor)");
  e.preventDefault();
 }
}
if($("input[name='Q4L8']").attr('placeholder')=="" && $("input[name='Q4L8']").val()==""){
 if($("input[name='Q4L8']").val()==""){  
  alert("Q1 Types of Area: Rooftop/Terrace Gardens");
  e.preventDefault();
 }
}
/**Q2 How many types of plants are there in your school?**/
if($("input[name='Q5L1S1']").attr('placeholder')=="" && $("input[name='Q5L1S1']").val()==""){
 if($("input[name='Q5L1S1']").val()==""){
  alert("Q2 How many types of plants are there in your school?");
  e.preventDefault();
  }
}
if($("input[name='Q5L1S2']").attr('placeholder')==""){
  if($("input[name='Q5L1S2']").val()==""){
  alert("Q2 How many types of plants are there in your school?");
  e.preventDefault();
  }
}
/**Q3 How many types of animals and birds are there in your school?**/
if($("input[name='Q5L2S1']").attr('placeholder')=="" && $("input[name='Q5L2S1']").val()){
   if($("input[name='Q5L2S1']").val()==""){
      alert("Q3 How many types of animals and birds are there in your school?");
      e.preventDefault();
   }
}
if($("input[name='Q5L2S2']").attr('placeholder')=="" && $("input[name='Q5L2S2']").val()==""){
  if($("input[name='Q5L2S2']").val()==""){
  alert("Q3 How many types of animals and birds are there in your school?");
  e.preventDefault();
  }
}
/**Q4 Do you use chemical-based pesticides in your school green cover?**/
if($("input[name='Q6L1']:checked").length==0){
  alert("Q4 Do you use chemical-based pesticides in your school green cover?");
  e.preventDefault();
}
}); 
</script>



<script type="text/javascript">
  
 $("input[name='Q4L4']").keyup(function(){

  var kucha = parseFloat($(this).val());
  var playground = parseFloat($("input[name='Q4L1']").val());

  if(kucha > playground){

    alert('No. of Pucca (paved) playgrounds cannot be greater than No. of Playgrounds');

     $(this).val('');
  }


 });
</script>


<script type="text/javascript">
  
 $("input[name='Q2V1']").click(function(){

    var t = $(this).val();
    if(t == 'Y')
    {
          $('#Q2V1_sec1').show();

    }else{

      $('#Q2V1_sec1').hide();
    }


 });


</script>

<script>

$(document).ready(function(){
  
  $('#PrimaryLand').validate({
    rules:{
          Q2V1:{
          required:true,
        }
        
    }
       
  });
  });
  
  $('#movenextbtn').click(function(e){
    
    
    $r=$('#PrimaryLand').valid();
    if($r == false)
    {
         e.preventDefault();
         $('#PrimaryLand').valid();
    }
    
    
  });
  
  </script>
