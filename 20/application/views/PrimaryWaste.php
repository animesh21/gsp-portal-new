<?php $this->load->view('header');?>
<style type="text/css">
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
                <!--- <li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
                <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<!--                 <li>|</li>
                <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
            </ul>
        </div>
        <div id="pprg" class="newprog progress" style="text-align:center">
            <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
        </div>
        <div class="intro">
            <h1>WASTE<span style="text-transform:capitalize">(Primary)</span> <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
<!--             <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="<?php echo base_url(); ?>assets/img/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div> -->
        </div>
        <p> Schools can provide excellent educational opportunities for creating awareness about waste and its management.<br>
            &bull; Waste reduction initiatives save natural resources, energy and landfill space.<br>
            &bull; Reducing, reusing, recycling waste material will improve the economic and environmental performance of the school.<br>
            &bull;  It also provides numerous opportunities for the students to understand this issue and its implications on the local environment.<br>
            <br>
            <b> The unit of measurement to be used in the Waste section is Kilogram (kg).</b> </p>
        <?php echo form_open('waste/set',array('id'=>'waste')); ?>
        <div class="form-group">
            <label>
                <h6>Task 1: Choose your Waste Audit Team.</h6>
            </label>
            <br>
            The housekeeping and cleaning staff of your school shall be the core members of your team, as you will have to enlist their help at every task. A teacher with interest in waste and five to 10 students will be ideal for your team. Administrative staff is important as they will provide the permissions required for the housekeeping staff to work with you.</div>
        <input type="hidden" id="Q4G4S3" value="<?php if(isset($other['Q4G4S3'])) echo $other['Q4G4S3']; ?>">
        <input type="hidden" id="Q4A1" value="<?php if(isset($other['Q4A1'])) echo $other['Q4A1']; ?>">
        <input type="hidden" id="Q4L4" value="<?php if(isset($other['Q4L4'])) echo $other['Q4L4']; ?>">
        <input type="hidden" id="Q4L6" value="<?php if(isset($other['Q4L6'])) echo $other['Q4L6']; ?>">
        <input type="hidden" id="Q4F1" value="<?php if(isset($other['Q4F1'])) echo $other['Q4F1']; ?>">
        <input type="hidden" id="Q4W2" value="<?php if(isset($other['Q4W2'])) echo $other['Q4W2']; ?>">
        <input type="hidden" id="Q6A2S1T1" value="<?php if(isset($other['Q6A2S1T1'])) echo $other['Q6A2S1T1']; ?>">
        <input type="hidden" id="Q6A2S1T2" value="<?php if(isset($other['Q6A2S1T2'])) echo $other['Q6A2S1T2']; ?>">
        <input type="hidden" id="Q6A2S1T3" value="<?php if(isset($other['Q6A2S1T3'])) echo $other['Q6A2S1T3']; ?>">
        <input type="hidden" id="Q6A2S1T4" value="<?php if(isset($other['Q6A2S1T4'])) echo $other['Q6A2S1T4']; ?>">
        <input type="hidden" id="Q6A2S1T5" value="<?php if(isset($other['Q6A2S1T5'])) echo $other['Q6A2S1T5']; ?>">
        <input type="hidden" id="Q6A2S1T6" value="<?php if(isset($other['Q6A2S1T6'])) echo $other['Q6A2S1T6']; ?>">
        <div class="form-group">
            <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
            <div class="form-group-1 row">
                <div class="col-xs-1"> </div>
                <div class="col-xs-3">
                    <label >First Name</label>
                </div>
                <div class="col-xs-3">
                    <label >Last Name</label>
                </div>
                <div class="col-xs-3">
                    <label >Email ID</label>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-1"> 1 </div>
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1Wa1S1" type="text" name="Q1Wa1S1" placeholder="<?php if(isset($data['Q1Wa1S1'])) echo $data['Q1Wa1S1']; ?>" value="<?php echo set_value('Q1Wa1S1'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1Wa1S1" type="text" name="Q1Wa1S3" placeholder="<?php if(isset($data['Q1Wa1S3'])) echo $data['Q1Wa1S3']; ?>" value="<?php echo set_value('Q1Wa1S3'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('email'); ?>
                    <input class="form-control space-textbox" id="Q1Wa1S1" type="email"  name="Q1Wa1S2" placeholder="<?php if(isset($data['Q1Wa1S2'])) echo $data['Q1Wa1S2']; ?>" value="<?php echo set_value('Q1Wa1S2'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-1"> 2 </div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1Wa1" type="text"  name="Q1Wa2S1" placeholder="<?php if(isset($data['Q1Wa2S1'])) echo $data['Q1Wa2S1'] ?>" value="<?php echo set_value('Q1Wa2S1'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1Wa2S1" type="text" name="Q1Wa2S3" placeholder="<?php if(isset($data['Q1Wa2S3'])) echo $data['Q1Wa2S3']; ?>" value="<?php echo set_value('Q1Wa2S3'); ?>"/>
                </div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1Wa1" type="email"  name="Q1Wa2S2" placeholder="<?php if(isset($data['Q1Wa2S2'])) echo $data['Q1Wa2S2'] ?>" value="<?php echo set_value('Q1Wa2S2'); ?>"/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-1"> 3 </div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1Wa1" type="text"  name="Q1Wa3S1" placeholder="<?php if(isset($data['Q1Wa3S1'])) echo $data['Q1Wa3S1'] ?>" value="<?php echo set_value('Q1Wa3S1'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1Wa3S1" type="text" name="Q1Wa3S3" placeholder="<?php if(isset($data['Q1Wa3S3'])) echo $data['Q1Wa3S3']; ?>" value="<?php echo set_value('Q1Wa3S3'); ?>"/>
                </div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1Wa1" type="email"  name="Q1Wa3S2" placeholder="<?php if(isset($data['Q1Wa3S2'])) echo $data['Q1Wa3S2'] ?>" value="<?php echo set_value('Q1Wa3S2'); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
                <div class="form-group-1 row">
                    <div class="col-xs-1"> </div>
                    <div class="col-xs-3">
                        <label >First Name</label>
                    </div>
                    <div class="col-xs-3">
                        <label >Last Name</label>
                    </div>
                    <div class="col-xs-3">
                        <label >Email ID</label>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 1 </div>
                    <div class="col-xs-3"> <?php echo form_error('name1'); ?>
                        <input class="form-control space-textbox" type="text"  name="Q2Wa1S1" placeholder="<?php if(isset($data['Q2Wa1S1'])) echo $data['Q2Wa1S1'] ?>" value="<?php echo set_value('Q2Wa1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa1S3" placeholder="<?php if(isset($data['Q2Wa1S3'])) echo $data['Q2Wa1S3'] ?>" value="<?php echo set_value('Q2Wa1S3'); ?>"/>
                    </div>
                    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
                        <input class="form-control space-textbox" type="email"  name="Q2Wa1S2" placeholder="<?php if(isset($data['Q2Wa1S2'])) echo $data['Q2Wa1S2'] ?>" value="<?php echo set_value('Q2Wa1S2'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 2 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa2S1" placeholder="<?php if(isset($data['Q2Wa2S1'])) echo $data['Q2Wa2S1'] ?>" value="<?php echo set_value('Q2Wa2S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa2S3" placeholder="<?php if(isset($data['Q2Wa2S3'])) echo $data['Q2Wa2S3'] ?>" value="<?php echo set_value('Q2Wa2S3'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="email"  name="Q2Wa2S2" placeholder="<?php if(isset($data['Q2Wa2S2'])) echo $data['Q2Wa2S2'] ?>" value="<?php echo set_value('Q2Wa2S2'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 3 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa3S1" placeholder="<?php if(isset($data['Q2Wa3S1'])) echo $data['Q2Wa3S1'] ?>" value="<?php echo set_value('Q2Wa3S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa3S3" placeholder="<?php if(isset($data['Q2Wa3S3'])) echo $data['Q2Wa3S3'] ?>" value="<?php echo set_value('Q2Wa3S3'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="email"  name="Q2Wa3S2" placeholder="<?php if(isset($data['Q2Wa3S2'])) echo $data['Q2Wa3S2'] ?>" value="<?php echo set_value('Q2Wa3S2'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 4 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa4S1" placeholder="<?php if(isset($data['Q2Wa4S1'])) echo $data['Q2Wa4S1']; ?>" value="<?php echo set_value('Q2Wa4S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa4S3" placeholder="<?php if(isset($data['Q2Wa4S3'])) echo $data['Q2Wa4S3']; ?>" value="<?php echo set_value('Q2Wa4S3'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="email"  name="Q2Wa4S2" placeholder="<?php if(isset($data['Q2Wa4S2'])) echo $data['Q2Wa4S2']; ?>" value="<?php echo set_value('Q2Wa4S2'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 5 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa5S1" placeholder="<?php if(isset($data['Q2Wa5S1'])) echo $data['Q2Wa5S1'] ?>" value="<?php echo set_value('Q2Wa5S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="text"  name="Q2Wa5S3" placeholder="<?php if(isset($data['Q2Wa5S3'])) echo $data['Q2Wa5S3'] ?>" value="<?php echo set_value('Q2Wa5S3'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" type="email"  name="Q2Wa5S2" placeholder="<?php if(isset($data['Q2Wa5S2'])) echo $data['Q2Wa5S2'] ?>" value="<?php echo set_value('Q2Wa5S2'); ?>"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label">Students (maximum of ten students can be part of the team):</label>
                <div class="form-group-1 row">
                    <div class="col-xs-1"> </div>
                    <div class="col-xs-3">
                        <label >First Name</label>
                    </div>
                    <div class="col-xs-3">
                        <label >Last Name</label>
                    </div>
                    <div class="col-xs-3">
                        <label >Grade</label>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 1 </div>
                    <div class="col-xs-3"> <?php echo form_error('name2'); ?>
                        <input class="form-control space-textbox" id="ex1" type="text"  name="Q3Wa1S1" placeholder="<?php if(isset($data['Q3Wa1S1'])) echo $data['Q3Wa1S1'] ?>"  value="<?php echo set_value('Q3Wa1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
                        <input class="form-control space-textbox" id="ex2" type="text"  name="Q3Wa1S2" placeholder="<?php if(isset($data['Q3Wa1S2'])) echo $data['Q3Wa1S2'] ?>" value="<?php echo set_value('Q3Wa1S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa1S3" placeholder="<?php if(isset($data['Q3Wa1S3'])) echo $data['Q3Wa1S3'] ?>" value="<?php echo set_value('Q3Wa1S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 2 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text"  name="Q3Wa2S1" placeholder="<?php if(isset($data['Q3Wa2S1'])) echo $data['Q3Wa2S1'] ?>" value="<?php echo set_value('Q3Wa2S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text"  name="Q3Wa2S2" placeholder="<?php if(isset($data['Q3Wa2S2'])) echo $data['Q3Wa2S2'] ?>" value="<?php echo set_value('Q3Wa2S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa2S3" placeholder="<?php if(isset($data['Q3Wa2S3'])) echo $data['Q3Wa2S3'] ?>" value="<?php echo set_value('Q3Wa2S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 3 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text"  name="Q3Wa3S1" placeholder="<?php if(isset($data['Q3Wa3S1'])) echo $data['Q3Wa3S1'] ?>" value="<?php echo set_value('Q3Wa3S3'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text"  name="Q3Wa3S2" placeholder="<?php if(isset($data['Q3Wa3S2'])) echo $data['Q3Wa3S2'] ?>" value="<?php echo set_value('Q3Wa3S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  name="Q3Wa3S3" placeholder="<?php if(isset($data['Q3Wa3S3'])) echo $data['Q3Wa3S3'] ?>" value="<?php echo set_value('Q3Wa3S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 4 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text"  name="Q3Wa4S1" placeholder="<?php if(isset($data['Q3Wa4S1'])) echo $data['Q3Wa4S1'] ?>" value="<?php echo set_value('Q3Wa4S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text"  name="Q3Wa4S2" placeholder="<?php if(isset($data['Q3Wa4S2'])) echo $data['Q3Wa4S2'] ?>" value="<?php echo set_value('Q3Wa4S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa4S3" placeholder="<?php if(isset($data['Q3Wa4S3'])) echo $data['Q3Wa4S3'] ?>" value="<?php echo set_value('Q3Wa4S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 5 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa5S1" placeholder="<?php if(isset($data['Q3Wa5S1'])) echo $data['Q3Wa5S1'] ?>" value="<?php echo set_value('Q3Wa5S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa5S2" placeholder="<?php if(isset($data['Q3Wa5S2'])) echo $data['Q3Wa5S2'] ?>" value="<?php echo set_value('Q3Wa5S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa5S3" placeholder="<?php if(isset($data['Q3Wa5S3'])) echo $data['Q3Wa5S3'] ?>" value="<?php echo set_value('Q3Wa5S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 6 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa6S1" placeholder="<?php if(isset($data['Q3Wa6S1'])) echo $data['Q3Wa6S1'] ?>" value="<?php echo set_value('Q3Wa6S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa6S2" placeholder="<?php if(isset($data['Q3Wa6S2'])) echo $data['Q3Wa6S2'] ?>" value="<?php echo set_value('Q3Wa6S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa6S3" placeholder="<?php if(isset($data['Q3Wa6S3'])) echo $data['Q3Wa6S3'] ?>" value="<?php echo set_value('Q3Wa6S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 7 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa7S1" placeholder="<?php if(isset($data['Q3Wa7S1'])) echo $data['Q3Wa7S1'] ?>" value="<?php echo set_value('Q3Wa7S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa7S2" placeholder="<?php if(isset($data['Q3Wa7S2'])) echo $data['Q3Wa7S2'] ?>" value="<?php echo set_value('Q3Wa7S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa7S3" placeholder="<?php if(isset($data['Q3Wa7S3'])) echo $data['Q3Wa7S3'] ?>" value="<?php echo set_value('Q3Wa7S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 8 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa8S1" placeholder="<?php if(isset($data['Q3Wa8S1'])) echo $data['Q3Wa8S1'] ?>" value="<?php echo set_value('Q3Wa8S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa8S2" placeholder="<?php if(isset($data['Q3Wa8S2'])) echo $data['Q3Wa8S2'] ?>" value="<?php echo set_value('Q3Wa8S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa8S3" placeholder="<?php if(isset($data['Q3Wa8S3'])) echo $data['Q3Wa8S3'] ?>" value="<?php echo set_value('Q3Wa8S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 9 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa9S1" placeholder="<?php if(isset($data['Q3Wa9S1'])) echo $data['Q3Wa9S1'] ?>" value="<?php echo set_value('Q3Wa9S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa9S2" placeholder="<?php if(isset($data['Q3Wa9S2'])) echo $data['Q3Wa9S2'] ?>" value="<?php echo set_value('Q3Wa9S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa9S3" placeholder="<?php if(isset($data['Q3Wa9S3'])) echo $data['Q3Wa9S3'] ?>" value="<?php echo set_value('Q3Wa9S3'); ?>"/>
                    </div>
                </div>
                <div class="form-group1 row">
                    <div class="col-xs-1"> 10 </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex1" type="text" name="Q3Wa10S1" placeholder="<?php if(isset($data['Q3Wa10S1'])) echo $data['Q3Wa10S1'] ?>" value="<?php echo set_value('Q3Wa10S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex2" type="text" name="Q3Wa10S2" placeholder="<?php if(isset($data['Q3Wa10S2'])) echo $data['Q3Wa10S2'] ?>" value="<?php echo set_value('Q3Wa10S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="ex3" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="Q3Wa10S3" placeholder="<?php if(isset($data['Q3Wa10S3'])) echo $data['Q3Wa10S3'] ?>" value="<?php echo set_value('Q3Wa10S3'); ?>"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <h6> Task 2: What is the waste segregation system in your school?</h6>
                </label>
                <br>
                Segregation means sorting. Let’s understand the waste segregation system because the amount of waste recycled or reused will depend on the method of collection. To understand the waste segregation system of your school, fill the table below.<br>
                <br>
                <b>To collect data:</b> Students will have to survey the waste collection area and talk to the house-keeping staff to know whether waste is segregated in the school. </div>
            <br>
            <div class="form-group">
                <label class="control-label"><span class="cube">1</span>Does your school segregate solid waste? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#wasteSegregation" target="_blank"></a></label>
                <ul class="list-inline">
                    <li>
                        <label class="radio-inline text-gray text-gray">
                            <input type="radio" name="Q4Wa1" onclick="WasteSegregate(1)" class="radio" id="Q4Wa1" value="<?php echo set_value('Q4Wa1','Y')?>" <?php if(isset($data['Q4Wa1'])) echo $data['Q4Wa1'] == 'Y' ?"checked":"" ?>>
                            Yes </label>
                    </li>
                    <li>
                        <label class="radio-inline text-gray text-gray">
                            <input type="radio" name="Q4Wa1" onclick="WasteSegregate(2)" class="Q4Wa1" id="Q4Wa1" value="<?php echo set_value('Q4Wa1','N')?>" <?php if(isset($data['Q4Wa1'])) echo $data['Q4Wa1'] == 'N' ?"checked":"" ?>>
                            No </label>
                    </li>
                </ul>
            </div>
            <?php
            if(isset($data['Q4Wa1']))
                if($data['Q4Wa1'] == 'Y')
                {
                    ?>
                    <div class="form-group row" id="Q1A">
                        <label><span class="cube">1(a)</span>Who segregates the waste at source? </label>
                        <ul class="list-inline">
                            <li>
                                <label class="text-gray">
                                    <input type="checkbox" name="Q4Wa2S1" value="<?php echo set_value('Q4Wa2S1',1); ?>" <?php if(isset($data['Q4Wa2S1'])) echo "checked" ?>>
                                    Students and teachers</label>
                            </li>
                            <li>
                                <label class="text-gray">
                                    <input type="checkbox" name="Q4Wa2S2" value="<?php echo set_value('Q4Wa2S2',1); ?>" <?php if(isset($data['Q4Wa2S2'])) echo "checked" ?>>
                                    Housekeeping (Sweeper)</label>
                            </li>
                            <li>
                                <label class="text-gray">
                                    <input type="checkbox" name="Q4Wa2S3" value="<?php echo set_value('Q4Wa2S3',1); ?>" <?php if(isset($data['Q4Wa2S3'])) echo "checked" ?>>
                                    Gardener</label>
                            </li>
                            <li>
                                <label class="text-gray">
                                    <input type="checkbox" name="Q4Wa2S4" value="<?php echo set_value('Q4Wa2S4',1); ?>" <?php if(isset($data['Q4Wa2S4'])) echo "checked" ?>>
                                    Ragpickers</label>
                            </li>
                            <li>
                                <label class="text-gray">Other: &nbsp
                                    <input type="text" name="Q4Wa2S5" value="<?php echo set_value('Q4Wa2S5'); ?>" placeholder="<?php if(isset($data['Q4Wa2S5'])) echo $data['Q4Wa2'] ?>">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <?php
                }
            ?>
            <div class="form-group row" id="Q1A" style="display: none;">
                <label><span class="cube">1(a)</span>Who segregates the waste at source? </label>
                <ul class="list-unstyled">
                    <li>
                        <label class="text-gray">
                            <input type="checkbox" name="Q4Wa2S1" value="<?php echo set_value('Q4Wa2S1',1); ?>" <?php if(isset($data['Q4Wa2S1'])) echo "checked" ?>>
                            Students and teachers</label>
                    </li>
                    <li>
                        <label class="text-gray">
                            <input type="checkbox" name="Q4Wa2S2" value="<?php echo set_value('Q4Wa2S2',1); ?>" <?php if(isset($data['Q4Wa2S2'])) echo "checked" ?>>
                            Housekeeping (Sweeper)</label>
                    </li>
                    <li>
                        <label class="text-gray">
                            <input type="checkbox" name="Q4Wa2S3" value="<?php echo set_value('Q4Wa2S3',1); ?>" <?php if(isset($data['Q4Wa2S3'])) echo "checked" ?>>
                            Gardener</label>
                    </li>
                    <li>
                        <label class="text-gray">
                            <input type="checkbox" name="Q4Wa2S4" value="<?php echo set_value('Q4Wa2S4',1); ?>" <?php if(isset($data['Q4Wa2S4'])) echo "checked" ?>>
                            Ragpickers</label>
                    </li>
                    <li>
                        <label class="text-gray">Other: &nbsp
                            <input type="text" name="Q4Wa2S5" value="<?php echo set_value('Q4Wa2S5'); ?>" placeholder="<?php if(isset($data['Q4Wa2S5'])) echo $data['Q4Wa2'] ?>">
                        </label>
                    </li>
                </ul>
            </div>
            <div class="form-group">
                <label><span class="cube">2</span>How many categories does your school segregate waste into? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#pickUpProblems" target="_blank"> </a> <a class="tt" data-tooltip="Students will have to count the number of waste disposal points in the school as, for instance, one dustbin, two dustbins or more. If there are no dustbins, please say zero (o)"><span class="badge">?</span></a> </label>
                <ul class="list-inline">
                    <li>
                        <label class="radio-inline text-gray">
                            <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2" value="<?php echo set_value('Q4Wa2',1)?>" <?php if(isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 1 ?"checked":"" ?>>
                            Two </label>
                    </li>
                    <li>
                        <label class="radio-inline text-gray">
                            <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2" value="<?php echo set_value('Q4Wa2',2)?>" <?php if(isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 2 ?"checked":"" ?>>
                            Three </label>
                    </li>
                    <li>
                        <label class="radio-inline text-gray">
                            <input type="radio" name="Q4Wa2" class="radio" id="Q4Wa2" value="<?php echo set_value('Q4Wa2',3)?>" <?php if(isset($data['Q4Wa2'])) echo $data['Q4Wa2'] == 3 ?"checked":"" ?>>
                            More than three </label>
                    </li>
                </ul>
            </div>
<div class="form-group">
  <label class="control-label"><span class="cube">2(a)</span> How many categories does your school
  segregate waste into? <a class="tt" data-tooltip="Collection points are the areas (classroom, playground, sick room, etc) where dustbins have been placed. "><span class="badge">?</span></a></label>
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
      <label>Total no. of waste collection points </label>
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
            <div class="form-group">
                <label class="control-label">Please upload supporting documents:</label>
                <br>
                &bull; Pictures of dustbins in classroom showing segregation at source<br>
                &bull; Pictures of playground with more than two dustbins<br>
                &bull; Kindly attach the aforementioned documents along with the survey<br>
                <br/>
                <button class="btn uploadbtn upload" data-id="Segregation Source Classrooms" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
                <?php foreach ($segregationClassroom as $f) { ?>
                    <tr id="index<?php echo $f->id; ?>">
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
                    <h6>Task 3: Does your school treat/recycle waste?</h6>
                </label>
                <br>
                <div class="form-group">
                    <label class="control-label"><span class="cube">3</span>Does your school recycle any generated waste? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#recyclingRefuse" target="_blank"> </a> </label>
                    <a class="tt" data-tooltip=" In kg/day or kg/month, you can check daily waste generation and then find out how much of it goes for recycling or treatment."><span class="badge">?</span></a>
                    <ul class="list-inline">
                        <li>
                            <label class="radio-inline text-gray">
                                <input type="radio" name="Q8Wa1" onclick="WasteGenerated(1)" class="radio" id="Q8Wa1" value="<?php echo set_value('Q8Wa1','Y')?>" <?php if(isset($data['Q8Wa1'])) echo $data['Q8Wa1'] == 'Y' ?"checked":"" ?>>
                                Yes </label>
                        </li>
                        <li>
                            <label class="radio-inline text-gray">
                                <input type="radio" name="Q8Wa1" onclick="WasteGenerated(2)" class="radio" id="Q8Wa1" value="<?php echo set_value('Q8Wa1','N')?>" <?php if(isset($data['Q8Wa1'])) echo $data['Q8Wa1'] == 'N' ?"checked":"" ?>>
                                No </label>
                        </li>
                    </ul>
                </div>
                <?php
                if(isset($data['Q8Wa1']))
                {
                if($data['Q8Wa1'] == 'Y')
                {
                ?>
                <div class="form-group" id="Q8Wa2">
                    <?php } else { ?>
                    <div class="form-group" id="Q8Wa2" style="display: none;">
                        <?php }
                        }
                        else { ?>
                        <div class="form-group" id="Q8Wa2" style="display: none;">
                            <?php } ?>
                            <label><span class="cube">3(a)</span></label>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Type of waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <label >Yes </label>
                                </div>
                                <div class="col-xs-3">
                                    <label > No </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Garden waste/ Horticultural waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S1" type="radio" name="Q8Wa2S1" value="<?php echo set_value('Q8Wa2S1','Y'); ?>" <?php if(isset($data['Q8Wa2S1'])) echo $data['Q8Wa2S1'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S1" type="radio" name="Q8Wa2S1" value="<?php echo set_value('Q8Wa2S1','N'); ?>" <?php if(isset($data['Q8Wa2S1'])) echo $data['Q8Wa2S1'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Kitchen Waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S2" type="radio" name="Q8Wa2S2" value="<?php echo set_value('Q8Wa2S2','Y'); ?>" <?php if(isset($data['Q8Wa2S2'])) echo $data['Q8Wa2S2'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S2" type="radio" name="Q8Wa2S2" value="<?php echo set_value('Q8Wa2S2','N'); ?>" <?php if(isset($data['Q8Wa2S2'])) echo $data['Q8Wa2S2'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Paper </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S3" type="radio" name="Q8Wa2S3" value="<?php echo set_value('Q8Wa2S3','Y'); ?>" <?php if(isset($data['Q8Wa2S3'])) echo $data['Q8Wa2S3'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S3" type="radio" name="Q8Wa2S3" value="<?php echo set_value('Q8Wa2S3','N'); ?>" <?php if(isset($data['Q8Wa2S3'])) echo $data['Q8Wa2S3'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Plastic </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S4" type="radio" name="Q8Wa2S4" value="<?php echo set_value('Q8Wa2S4','Y'); ?>" <?php if(isset($data['Q8Wa2S4'])) echo $data['Q8Wa2S4'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S4" type="radio" name="Q8Wa2S4" value="<?php echo set_value('Q8Wa2S4','N'); ?>" <?php if(isset($data['Q8Wa2S4'])) echo $data['Q8Wa2S4'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Wood, glass, metal, classroom furniture </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S5" type="radio" name="Q8Wa2S5" value="<?php echo set_value('Q8Wa2S5','Y'); ?>" <?php if(isset($data['Q8Wa2S5'])) echo $data['Q8Wa2S5'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S5" type="radio" name="Q8Wa2S5" value="<?php echo set_value('Q8Wa2S5','N'); ?>" <?php if(isset($data['Q8Wa2S5'])) echo $data['Q8Wa2S5'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >E-waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S6" type="radio" name="Q8Wa2S6" value="<?php echo set_value('Q8Wa2S6','Y'); ?>" <?php if(isset($data['Q8Wa2S6'])) echo $data['Q8Wa2S6'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S6" type="radio" name="Q8Wa2S6" value="<?php echo set_value('Q8Wa2S6','N'); ?>" <?php if(isset($data['Q8Wa2S6'])) echo $data['Q8Wa2S6'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6 space-textbox">
                                    <label >Biomedical waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S7" type="radio" name="Q8Wa2S7" value="<?php echo set_value('Q8Wa2S7','Y'); ?>" <?php if(isset($data['Q8Wa2S7'])) echo $data['Q8Wa2S7'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S7" type="radio" name="Q8Wa2S7" value="<?php echo set_value('Q8Wa2S7','N'); ?>" <?php if(isset($data['Q8Wa2S7'])) echo $data['Q8Wa2S7'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Sanitary waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S8" type="radio" name="Q8Wa2S8" value="<?php echo set_value('Q8Wa2S8','Y'); ?>" <?php if(isset($data['Q8Wa2S8'])) echo $data['Q8Wa2S8'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S8" type="radio" name="Q8Wa2S8" value="<?php echo set_value('Q8Wa2S8','N'); ?>" <?php if(isset($data['Q8Wa2S8'])) echo $data['Q8Wa2S8'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6 space-textbox">
                                    <label >Construction and Demolition (C & D) waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S9" type="radio" name="Q8Wa2S9" value="<?php echo set_value('Q8Wa2S9','Y'); ?>" <?php if(isset($data['Q8Wa2S9'])) echo $data['Q8Wa2S9'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S9" type="radio" name="Q8Wa2S9" value="<?php echo set_value('Q8Wa2S9','N'); ?>" <?php if(isset($data['Q8Wa2S9'])) echo $data['Q8Wa2S9'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label >Hazardous waste </label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S10" type="radio" name="Q8Wa2S10" value="<?php echo set_value('Q8Wa2S10','Y'); ?>" <?php if(isset($data['Q8Wa2S10'])) echo $data['Q8Wa2S10'] == 'Y'?"checked":"" ?>/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q8Wa2S10" type="radio" name="Q8Wa2S10" value="<?php echo set_value('Q8Wa2S10','N'); ?>" <?php if(isset($data['Q8Wa2S10'])) echo $data['Q8Wa2S10'] == 'N'?"checked":"" ?>/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label"><span class="cube">4</span>Does your school have a composting facility?</label>
                            <ul class="list-inline">
                                <li>
                                    <label class="radio-inline text-gray">
                                        <input type="radio" name="Q9Wa1" onclick="WasteFacility(1)" class="radio" id="Q9Wa1" value="<?php echo set_value('Q9Wa1','Y')?>" <?php if(isset($data['Q9Wa1'])) echo $data['Q9Wa1'] == 'Y' ?"checked":"" ?>>
                                        Yes </label>
                                </li>
                                <li>
                                    <label class="radio-inline text-gray">
                                        <input type="radio" name="Q9Wa1" onclick="WasteFacility(2)" class="radio" id="Q9Wa1" value="<?php echo set_value('Q9Wa1','N')?>" <?php if(isset($data['Q9Wa1'])) echo $data['Q9Wa1'] == 'N' ?"checked":"" ?>>
                                        No </label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Please upload supporting documents:</label>
                            <br>
                            &bull; Pictures of recycling units - composting pit<br>
                            <br/>
                            <button class="btn uploadbtn upload" data-id="Recycling Units" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
                            <?php foreach ($composingPit as $f) { ?>
                                <tr id="index<?php echo $f->id; ?>">
                                    <?php $name = str_replace(" ", "_", $f->name . "_Composting_Pit_"); ?>
                                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                    </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <?php
                        if(isset($data['Q9Wa1']))
                            if($data['Q9Wa1'] == 'Y')
                            {
                                ?>
                                <div class="form-group row" id="Q9Wa4">
                                    <label><span class="cube">4(a)</span> What is the purpose of the compost that is generated per month? </label>
                                    <ul class="list-inline">
                                        <li>
                                            <label class="text-gray">
                                                <input type="checkbox" name="Q9Wa4S1" value="<?php echo set_value('Q9Wa4S1',1); ?>" <?php if(isset($data['Q9Wa4S1'])) echo "checked" ?>>
                                                For horticultural purposes </label>
                                        </li>
                                        <li>
                                            <label class="text-gray">
                                                <input type="checkbox" name="Q9Wa4S2" value="<?php echo set_value('Q9Wa4S2',1); ?>" <?php if(isset($data['Q9Wa4S2'])) echo "checked" ?>>
                                                For school garden</label>
                                        </li>
                                        <li>
                                            <label class="text-gray">
                                                <input type="checkbox" name="Q9Wa4S3" value="<?php echo set_value('Q9Wa4S3',1); ?>" <?php if(isset($data['Q9Wa4S3'])) echo "checked" ?>>
                                                For sale</label>
                                        </li>
                                        <li>
                                            <label class="text-gray">
                                                <input type="checkbox" name="Q9Wa4S4" value="<?php echo set_value('Q9Wa4S4',1); ?>" <?php if(isset($data['Q9Wa4S4'])) echo "checked" ?>>
                                                For charity</label>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                            }
                        ?>
                        <div class="form-group row" id="Q9Wa2" style="display: none;"> </div>
                        <div class="form-group" id="Q9Wa3" style="display: none;"> </div>
                        <div class="form-group row" id="Q9Wa4" style="display: none;">
                            <label><span class="cube">4(a)</span> What is the purpose of the compost that is generated per month? </label>
                            <ul class="list-inline">
                                <li>
                                    <label class="text-gray">
                                        <input type="checkbox" name="Q9Wa3S1" value="<?php echo set_value('Q9Wa3S1',1); ?>" <?php if(isset($data['Q9Wa3S1'])) echo "checked" ?>>
                                        For horticultural purposes </label>
                                </li>
                                <li>
                                    <label class="text-gray">
                                        <input type="checkbox" name="Q9Wa3S2" value="<?php echo set_value('Q9Wa3S2',1); ?>" <?php if(isset($data['Q9Wa3S2'])) echo "checked" ?>>
                                        For school garden</label>
                                </li>
                                <li>
                                    <label class="text-gray">
                                        <input type="checkbox" name="Q9Wa3S3" value="<?php echo set_value('Q9Wa3S3',1); ?>" <?php if(isset($data['Q9Wa3S3'])) echo "checked" ?>>
                                        For sale</label>
                                </li>
                                <li>
                                    <label class="text-gray">
                                        <input type="checkbox" name="Q9Wa3S4" value="<?php echo set_value('Q9Wa3S4',1); ?>" <?php if(isset($data['Q9Wa3S4'])) echo "checked" ?>>
                                        For charity</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label"><span class="cube">5</span>Does your school encourage students & teachers to reuse textbooks? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#chomp" target="_blank"></a></label>
                            <ul class="list-inline">
                                <li>
                                    <label class="radio-inline text-gray">
                                        <input type="radio" name="Q10Wa1" class="radio" id="Q10Wa1" value="<?php echo set_value('Q10Wa1','Y')?>" <?php if(isset($data['Q10Wa1'])) echo $data['Q10Wa1'] == 'Y' ?"checked":"" ?>>
                                        Yes </label>
                                </li>
                                <li>
                                    <label class="radio-inline text-gray">
                                        <input type="radio" name="Q10Wa1" class="radio" id="Q10Wa1" value="<?php echo set_value('Q10Wa1','N')?>" <?php if(isset($data['Q10Wa1'])) echo $data['Q10Wa1'] == 'N' ?"checked":"" ?>>
                                        No </label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Please upload supporting documents:</label>
                            <br>
                            &bull; Pictures of recycling units - paper recycling machine, selling paper to kabadiwala, recyclers,etc <br>
                            <br/>
                            <button class="btn uploadbtn upload" data-id="Recycling Units" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
                            <?php foreach ($composingPit as $f) { ?>
                                <tr id="index<?php echo $f->id; ?>">
                                    <?php $name = str_replace(" ", "_", $f->name . "_Composting_Pit_"); ?>
                                    <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                    </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                            <label  class="control-label"><span class="cube">6</span>Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.</label>
                            <div class="form-group-1 row">
                                <div class="col-md-4">
                                    <label >Item </label>
                                </div>
                                <div class="col-md-2">
                                    <label >BEE star rating </label>
                                </div>
                                <div class="col-md-2">
                                    <label >Working condition </label>
                                </div>
                                <div class="col-md-2">
                                    <label >Non-working condition </label>
                                </div>
                                <div class="col-md-2">
                                    <label >Total no. of items </label>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >TVs </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa1S1" type="number" name="Q12Wa1S1" placeholder="<?php if(isset($data['Q12Wa1S1'])) echo $data['Q12Wa1S1'] ?>" value="<?php echo set_value('Q12Wa1S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa1S2" type="number" name="Q12Wa1S2" placeholder="<?php if(isset($data['Q12Wa1S2'])) echo $data['Q12Wa1S2'] ?>" value="<?php echo set_value('Q12Wa1S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa1S3" type="number" name="Q12Wa1S3" placeholder="<?php if(isset($data['Q12Wa1S3'])) echo $data['Q12Wa1S3'] ?>" value="<?php echo set_value('Q12Wa1S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa1S4" type="number" name="Q12Wa1S4" placeholder="<?php if(isset($data['Q12Wa1S4'])) echo $data['Q12Wa1S4'] ?>" value="<?php echo set_value('Q12Wa1S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >VCR or DVD players </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa2S1" type="number" name="Q12Wa2S1" placeholder="<?php if(isset($data['Q12Wa2S1'])) echo $data['Q12Wa2S1'] ?>" value="<?php echo set_value('Q12Wa2S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa2S2" type="number" name="Q12Wa2S2" placeholder="<?php if(isset($data['Q12Wa2S2'])) echo $data['Q12Wa2S2'] ?>" value="<?php echo set_value('Q12Wa2S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa2S3" type="number" name="Q12Wa2S3" placeholder="<?php if(isset($data['Q12Wa2S3'])) echo $data['Q12Wa2S3'] ?>" value="<?php echo set_value('Q12Wa2S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa2S4" type="number" name="Q12Wa2S4" placeholder="<?php if(isset($data['Q12Wa2S4'])) echo $data['Q12Wa2S4'] ?>" value="<?php echo set_value('Q12Wa2S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Refrigerators and freezers </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa3S1" type="number" name="Q12Wa3S1" placeholder="<?php if(isset($data['Q12Wa3S1'])) echo $data['Q12Wa3S1'] ?>" value="<?php echo set_value('Q12Wa3S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa3S2" type="number" name="Q12Wa3S2" placeholder="<?php if(isset($data['Q12Wa3S2'])) echo $data['Q12Wa3S2'] ?>" value="<?php echo set_value('Q12Wa3S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa3S3" type="number" name="Q12Wa3S3" placeholder="<?php if(isset($data['Q12Wa3S3'])) echo $data['Q12Wa3S3'] ?>" value="<?php echo set_value('Q12Wa3S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa3S4" type="number" name="Q12Wa3S4" placeholder="<?php if(isset($data['Q12Wa3S4'])) echo $data['Q12Wa3S4'] ?>" value="<?php echo set_value('Q12Wa3S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Washing machines </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa4S1" type="number" name="Q12Wa4S1" placeholder="<?php if(isset($data['Q12Wa4S1'])) echo $data['Q12Wa4S1'] ?>" value="<?php echo set_value('Q12Wa4S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa4S2" type="number" name="Q12Wa4S2" placeholder="<?php if(isset($data['Q12Wa4S2'])) echo $data['Q12Wa4S2'] ?>" value="<?php echo set_value('Q12Wa4S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa4S3" type="number" name="Q12Wa4S3" placeholder="<?php if(isset($data['Q12Wa4S3'])) echo $data['Q12Wa4S3'] ?>" value="<?php echo set_value('Q12Wa4S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa4S4" type="number" name="Q12Wa4S4" placeholder="<?php if(isset($data['Q12Wa4S4'])) echo $data['Q12Wa4S4'] ?>" value="<?php echo set_value('Q12Wa4S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Air conditioners </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa5S1" type="number" name="Q12Wa5S1" placeholder="<?php if(isset($data['Q12Wa5S1'])) echo $data['Q12Wa5S1'] ?>" value="<?php echo set_value('Q12Wa5S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa5S2" type="number" name="Q12Wa5S2" placeholder="<?php if(isset($data['Q12Wa5S2'])) echo $data['Q12Wa5S2'] ?>" value="<?php echo set_value('Q12Wa5S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa5S3" type="number" name="Q12Wa5S3" placeholder="<?php if(isset($data['Q12Wa5S3'])) echo $data['Q12Wa5S3'] ?>" value="<?php echo set_value('Q12Wa5S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa5S4" type="number" name="Q12Wa5S4" placeholder="<?php if(isset($data['Q12Wa5S4'])) echo $data['Q12Wa5S4'] ?>" value="<?php echo set_value('Q12Wa5S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Heaters </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa6S1" type="number" name="Q12Wa6S1" placeholder="<?php if(isset($data['Q12Wa6S1'])) echo $data['Q12Wa6S1'] ?>" value="<?php echo set_value('Q12Wa6S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa6S2" type="number" name="Q12Wa6S2" placeholder="<?php if(isset($data['Q12Wa6S2'])) echo $data['Q12Wa6S2'] ?>" value="<?php echo set_value('Q12Wa6S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa6S3" type="number" name="Q12Wa6S3" placeholder="<?php if(isset($data['Q12Wa6S3'])) echo $data['Q12Wa6S3'] ?>" value="<?php echo set_value('Q12Wa6S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa6S4" type="number" name="Q12Wa6S4" placeholder="<?php if(isset($data['Q12Wa6S4'])) echo $data['Q12Wa6S4'] ?>" value="<?php echo set_value('Q12Wa6S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Microwaves </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa7S1" type="number" name="Q12Wa7S1" placeholder="<?php if(isset($data['Q12Wa7S1'])) echo $data['Q12Wa7S1'] ?>" value="<?php echo set_value('Q12Wa7S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa7S2" type="number" name="Q12Wa7S2" placeholder="<?php if(isset($data['Q12Wa7S2'])) echo $data['Q12Wa7S2'] ?>" value="<?php echo set_value('Q12Wa7S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa7S3" type="number" name="Q12Wa7S3" placeholder="<?php if(isset($data['Q12Wa7S3'])) echo $data['Q12Wa7S3'] ?>" value="<?php echo set_value('Q12Wa7S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa7S4" type="number" name="Q12Wa7S4" placeholder="<?php if(isset($data['Q12Wa7S4'])) echo $data['Q12Wa7S4'] ?>" value="<?php echo set_value('Q12Wa7S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Ovens </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa8S1" type="number" name="Q12Wa8S1" placeholder="<?php if(isset($data['Q12Wa8S1'])) echo $data['Q12Wa8S1'] ?>" value="<?php echo set_value('Q12Wa8S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa8S2" type="number" name="Q12Wa8S2" placeholder="<?php if(isset($data['Q12Wa8S2'])) echo $data['Q12Wa8S2'] ?>" value="<?php echo set_value('Q12Wa8S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa8S3" type="number" name="Q12Wa8S3" placeholder="<?php if(isset($data['Q12Wa8S3'])) echo $data['Q12Wa8S3'] ?>" value="<?php echo set_value('Q12Wa8S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa8S4" type="number" name="Q12Wa8S4" placeholder="<?php if(isset($data['Q12Wa8S4'])) echo $data['Q12Wa8S4'] ?>" value="<?php echo set_value('Q12Wa8S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Toasters </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa9S1" type="number" name="Q12Wa9S1" placeholder="<?php if(isset($data['Q12Wa9S1'])) echo $data['Q12Wa9S1'] ?>" value="<?php echo set_value('Q12Wa9S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa9S2" type="number" name="Q12Wa9S2" placeholder="<?php if(isset($data['Q12Wa9S2'])) echo $data['Q12Wa9S2'] ?>" value="<?php echo set_value('Q12Wa9S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa9S3" type="number" name="Q12Wa9S3" placeholder="<?php if(isset($data['Q12Wa9S3'])) echo $data['Q12Wa9S3'] ?>" value="<?php echo set_value('Q12Wa9S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa9S4" type="number" name="Q12Wa9S4" placeholder="<?php if(isset($data['Q12Wa9S4'])) echo $data['Q12Wa9S4'] ?>" value="<?php echo set_value('Q12Wa9S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Electric kettles </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa10S1" type="number" name="Q12Wa10S1" placeholder="<?php if(isset($data['Q12Wa10S1'])) echo $data['Q12Wa10S1'] ?>" value="<?php echo set_value('Q12Wa10S1'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa10S2" type="number" name="Q12Wa10S2" placeholder="<?php if(isset($data['Q12Wa10S2'])) echo $data['Q12Wa10S2'] ?>" value="<?php echo set_value('Q12Wa10S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa10S3" type="number" name="Q12Wa10S3" placeholder="<?php if(isset($data['Q12Wa10S3'])) echo $data['Q12Wa10S3'] ?>" value="<?php echo set_value('Q12Wa10S3'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa10S4" type="number" name="Q12Wa10S4" placeholder="<?php if(isset($data['Q12Wa10S4'])) echo $data['Q12Wa10S4'] ?>" value="<?php echo set_value('Q12Wa10S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Personal computers (CPU, mouse, screen and keyboard included) </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa11S1" type="number" name="Q12Wa11S1" placeholder="<?php if(isset($data['Q12Wa11S1'])) echo $data['Q12Wa11S1'] ?>" value="<?php echo set_value('Q12Wa11S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa11S2" type="number" name="Q12Wa11S2" placeholder="<?php if(isset($data['Q12Wa11S2'])) echo $data['Q12Wa11S2'] ?>" value="<?php echo set_value('Q12Wa11S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa11S3" type="number" name="Q12Wa11S3" placeholder="<?php if(isset($data['Q12Wa11S3'])) echo $data['Q12Wa11S3'] ?>" value="<?php echo set_value('Q12Wa11S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa11S4" type="number" name="Q12Wa11S4" placeholder="<?php if(isset($data['Q12Wa11S4'])) echo $data['Q12Wa11S4'] ?>" value="<?php echo set_value('Q12Wa11S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Laptop computer (CPU, mouse, screen and keyboard included) </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa12S1" type="number" name="Q12Wa12S1" placeholder="<?php if(isset($data['Q12Wa12S1'])) echo $data['Q12Wa12S1'] ?>" value="<?php echo set_value('Q12Wa12S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa12S2" type="number" name="Q12Wa12S2" placeholder="<?php if(isset($data['Q12Wa12S2'])) echo $data['Q12Wa12S2'] ?>" value="<?php echo set_value('Q12Wa12S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa12S3" type="number" name="Q12Wa12S3" placeholder="<?php if(isset($data['Q12Wa12S3'])) echo $data['Q12Wa12S3'] ?>" value="<?php echo set_value('Q12Wa12S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa12S4" type="number" name="Q12Wa12S4" placeholder="<?php if(isset($data['Q12Wa12S4'])) echo $data['Q12Wa12S4'] ?>" value="<?php echo set_value('Q12Wa12S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Notebook computers </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa13S1" type="number" name="Q12Wa13S1" placeholder="<?php if(isset($data['Q12Wa13S1'])) echo $data['Q12Wa13S1'] ?>" value="<?php echo set_value('Q12Wa13S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa13S2" type="number" name="Q12Wa13S2" placeholder="<?php if(isset($data['Q12Wa13S2'])) echo $data['Q12Wa13S2'] ?>" value="<?php echo set_value('Q12Wa13S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa13S3" type="number" name="Q12Wa13S3" placeholder="<?php if(isset($data['Q12Wa13S3'])) echo $data['Q12Wa13S3'] ?>" value="<?php echo set_value('Q12Wa13S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa13S4" type="number" name="Q12Wa13S4" placeholder="<?php if(isset($data['Q12Wa13S4'])) echo $data['Q12Wa13S4'] ?>" value="<?php echo set_value('Q12Wa13S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Notepad computers </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa14S1" type="number" name="Q12Wa14S1" placeholder="<?php if(isset($data['Q12Wa14S1'])) echo $data['Q12Wa14S1'] ?>" value="<?php echo set_value('Q12Wa14S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa14S2" type="number" name="Q12Wa14S2" placeholder="<?php if(isset($data['Q12Wa14S2'])) echo $data['Q12Wa14S2'] ?>" value="<?php echo set_value('Q12Wa14S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa14S3" type="number" name="Q12Wa14S3" placeholder="<?php if(isset($data['Q12Wa14S3'])) echo $data['Q12Wa14S3'] ?>" value="<?php echo set_value('Q12Wa14S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa14S4" type="number" name="Q12Wa14S4" placeholder="<?php if(isset($data['Q12Wa14S4'])) echo $data['Q12Wa14S4'] ?>" value="<?php echo set_value('Q12Wa14S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Printers </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa15S1" type="number" name="Q12Wa15S1" placeholder="<?php if(isset($data['Q12Wa15S1'])) echo $data['Q12Wa15S1'] ?>" value="<?php echo set_value('Q12Wa15S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa15S2" type="number" name="Q12Wa15S2" placeholder="<?php if(isset($data['Q12Wa15S2'])) echo $data['Q12Wa15S2'] ?>" value="<?php echo set_value('Q12Wa15S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa15S3" type="number" name="Q12Wa15S3" placeholder="<?php if(isset($data['Q12Wa15S3'])) echo $data['Q12Wa15S3'] ?>" value="<?php echo set_value('Q12Wa15S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa15S4" type="number" name="Q12Wa15S4" placeholder="<?php if(isset($data['Q12Wa15S4'])) echo $data['Q12Wa15S4'] ?>" value="<?php echo set_value('Q12Wa15S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Copying equipment (photocopiers) </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa16S1" type="number" name="Q12Wa16S1" placeholder="<?php if(isset($data['Q12Wa16S1'])) echo $data['Q12Wa16S1'] ?>" value="<?php echo set_value('Q12Wa16S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa16S2" type="number" name="Q12Wa16S2" placeholder="<?php if(isset($data['Q12Wa16S2'])) echo $data['Q12Wa16S2'] ?>" value="<?php echo set_value('Q12Wa16S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa16S3" type="number" name="Q12Wa16S3" placeholder="<?php if(isset($data['Q12Wa16S3'])) echo $data['Q12Wa16S3'] ?>" value="<?php echo set_value('Q12Wa16S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa16S4" type="number" name="Q12Wa16S4" placeholder="<?php if(isset($data['Q12Wa16S4'])) echo $data['Q12Wa16S4'] ?>" value="<?php echo set_value('Q12Wa16S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Projectors </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa17S1" type="number" name="Q12Wa17S1" placeholder="<?php if(isset($data['Q12Wa17S1'])) echo $data['Q12Wa17S1'] ?>" value="<?php echo set_value('Q12Wa17S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa17S2" type="number" name="Q12Wa17S2" placeholder="<?php if(isset($data['Q12Wa17S2'])) echo $data['Q12Wa17S2'] ?>" value="<?php echo set_value('Q12Wa17S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa17S3" type="number" name="Q12Wa17S3" placeholder="<?php if(isset($data['Q12Wa17S3'])) echo $data['Q12Wa17S3'] ?>" value="<?php echo set_value('Q12Wa17S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa17S4" type="number" name="Q12Wa17S4" placeholder="<?php if(isset($data['Q12Wa17S4'])) echo $data['Q12Wa17S4'] ?>" value="<?php echo set_value('Q12Wa17S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Whiteboards </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa18S1" type="number" name="Q12Wa18S1" placeholder="<?php if(isset($data['Q12Wa18S1'])) echo $data['Q12Wa18S1'] ?>" value="<?php echo set_value('Q12Wa18S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa18S2" type="number" name="Q12Wa18S2" placeholder="<?php if(isset($data['Q12Wa18S2'])) echo $data['Q12Wa18S2'] ?>" value="<?php echo set_value('Q12Wa18S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa18S3" type="number" name="Q12Wa18S3" placeholder="<?php if(isset($data['Q12Wa18S3'])) echo $data['Q12Wa18S3'] ?>" value="<?php echo set_value('Q12Wa18S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa18S4" type="number" name="Q12Wa18S4" placeholder="<?php if(isset($data['Q12Wa18S4'])) echo $data['Q12Wa18S4'] ?>" value="<?php echo set_value('Q12Wa18S4'); ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Electrical and electronic typewriters </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa19S1" type="number" name="Q12Wa19S1" placeholder="<?php if(isset($data['Q12Wa19S1'])) echo $data['Q12Wa19S1'] ?>" value="<?php echo set_value('Q12Wa19S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa19S2" type="number" name="Q12Wa19S2" placeholder="<?php if(isset($data['Q12Wa19S2'])) echo $data['Q12Wa19S2'] ?>" value="<?php echo set_value('Q12Wa19S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa19S3" type="number" name="Q12Wa19S3" placeholder="<?php if(isset($data['Q12Wa19S3'])) echo $data['Q12Wa19S3'] ?>" value="<?php echo set_value('Q12Wa19S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa19S4" type="number" name="Q12Wa19S4" placeholder="<?php if(isset($data['Q12Wa19S4'])) echo $data['Q12Wa19S4'] ?>" value="<?php echo set_value('Q12Wa19S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Pocket and desk calculators </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa20S1" type="number" name="Q12Wa20S1" placeholder="<?php if(isset($data['Q12Wa20S1'])) echo $data['Q12Wa20S1'] ?>" value="<?php echo set_value('Q12Wa20S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa20S2" type="number" name="Q12Wa20S2" placeholder="<?php if(isset($data['Q12Wa20S2'])) echo $data['Q12Wa20S2'] ?>" value="<?php echo set_value('Q12Wa20S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa20S3" type="number" name="Q12Wa20S3" placeholder="<?php if(isset($data['Q12Wa20S3'])) echo $data['Q12Wa20S3'] ?>" value="<?php echo set_value('Q12Wa20S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa20S4" type="number" name="Q12Wa20S4" placeholder="<?php if(isset($data['Q12Wa20S4'])) echo $data['Q12Wa20S4'] ?>" value="<?php echo set_value('Q12Wa20S4'); ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Fax machines </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa21S1" type="number" name="Q12Wa21S1" placeholder="<?php if(isset($data['Q12Wa21S1'])) echo $data['Q12Wa21S1'] ?>" value="<?php echo set_value('Q12Wa21S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa21S2" type="number" name="Q12Wa21S2" placeholder="<?php if(isset($data['Q12Wa21S2'])) echo $data['Q12Wa21S2'] ?>" value="<?php echo set_value('Q12Wa21S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa21S3" type="number" name="Q12Wa21S3" placeholder="<?php if(isset($data['Q12Wa21S3'])) echo $data['Q12Wa21S3'] ?>" value="<?php echo set_value('Q12Wa21S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa21S4" type="number" name="Q12Wa21S4" placeholder="<?php if(isset($data['Q12Wa21S4'])) echo $data['Q12Wa21S4'] ?>" value="<?php echo set_value('Q12Wa21S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Telex </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa22S1" type="number" name="Q12Wa22S1" placeholder="<?php if(isset($data['Q12Wa22S1'])) echo $data['Q12Wa22S1'] ?>" value="<?php echo set_value('Q12Wa22S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa22S2" type="number" name="Q12Wa22S2" placeholder="<?php if(isset($data['Q12Wa22S2'])) echo $data['Q12Wa22S2'] ?>" value="<?php echo set_value('Q12Wa22S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa22S3" type="number" name="Q12Wa22S3" placeholder="<?php if(isset($data['Q12Wa22S3'])) echo $data['Q12Wa22S3'] ?>" value="<?php echo set_value('Q12Wa22S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa22S4" type="number" name="Q12Wa22S4" placeholder="<?php if(isset($data['Q12Wa22S4'])) echo $data['Q12Wa22S4'] ?>" value="<?php echo set_value('Q12Wa22S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Telephones </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa23S1" type="number" name="Q12Wa23S1" placeholder="<?php if(isset($data['Q12Wa23S1'])) echo $data['Q12Wa23S1'] ?>" value="<?php echo set_value('Q12Wa23S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa23S2" type="number" name="Q12Wa23S2" placeholder="<?php if(isset($data['Q12Wa23S2'])) echo $data['Q12Wa23S2'] ?>" value="<?php echo set_value('Q12Wa23S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa23S3" type="number" name="Q12Wa23S3" placeholder="<?php if(isset($data['Q12Wa23S3'])) echo $data['Q12Wa23S3'] ?>" value="<?php echo set_value('Q12Wa23S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa23S4" type="number" name="Q12Wa23S4" placeholder="<?php if(isset($data['Q12Wa23S4'])) echo $data['Q12Wa23S4'] ?>" value="<?php echo set_value('Q12Wa23S4'); ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Pay telephones </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa24S1" type="number" name="Q12Wa24S1" placeholder="<?php if(isset($data['Q12Wa24S1'])) echo $data['Q12Wa24S1'] ?>" value="<?php echo set_value('Q12Wa24S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa24S2" type="number" name="Q12Wa24S2" placeholder="<?php if(isset($data['Q12Wa24S2'])) echo $data['Q12Wa24S2'] ?>" value="<?php echo set_value('Q12Wa24S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa24S3" type="number" name="Q12Wa24S3" placeholder="<?php if(isset($data['Q12Wa24S3'])) echo $data['Q12Wa24S3'] ?>" value="<?php echo set_value('Q12Wa24S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa24S4" type="number" name="Q12Wa24S4" placeholder="<?php if(isset($data['Q12Wa24S4'])) echo $data['Q12Wa24S4'] ?>" value="<?php echo set_value('Q12Wa24S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Mobiles </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa25S1" type="number" name="Q12Wa25S1" placeholder="<?php if(isset($data['Q12Wa25S1'])) echo $data['Q12Wa25S1'] ?>" value="<?php echo set_value('Q12Wa25S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa25S2" type="number" name="Q12Wa25S2" placeholder="<?php if(isset($data['Q12Wa25S2'])) echo $data['Q12Wa25S2'] ?>" value="<?php echo set_value('Q12Wa25S2'); ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa25S3" type="number" name="Q12Wa25S3" placeholder="<?php if(isset($data['Q12Wa25S3'])) echo $data['Q12Wa25S3'] ?>" value="<?php echo set_value('Q12Wa25S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa25S4" type="number" name="Q12Wa25S4" placeholder="<?php if(isset($data['Q12Wa25S4'])) echo $data['Q12Wa25S4'] ?>" value="<?php echo set_value('Q12Wa25S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Answering systems </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa26S1" type="number" name="Q12Wa26S1" placeholder="<?php if(isset($data['Q12Wa26S1'])) echo $data['Q12Wa26S1'] ?>" value="<?php echo set_value('Q12Wa26S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa26S2" type="number" name="Q12Wa26S2" placeholder="<?php if(isset($data['Q12Wa26S2'])) echo $data['Q12Wa26S2'] ?>" value="<?php echo set_value('Q12Wa26S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa26S3" type="number" name="Q12Wa26S3" placeholder="<?php if(isset($data['Q12Wa26S3'])) echo $data['Q12Wa26S3'] ?>" value="<?php echo set_value('Q12Wa26S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa26S4" type="number" name="Q12Wa26S4" placeholder="<?php if(isset($data['Q12Wa26S4'])) echo $data['Q12Wa26S4'] ?>" value="<?php echo set_value('Q12Wa26S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Induction cookers </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa27S1" type="number" name="Q12Wa27S1" placeholder="<?php if(isset($data['Q12Wa27S1'])) echo $data['Q12Wa27S1'] ?>" value="<?php echo set_value('Q12Wa27S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa27S2" type="number" name="Q12Wa27S2" placeholder="<?php if(isset($data['Q12Wa27S2'])) echo $data['Q12Wa27S2'] ?>" value="<?php echo set_value('Q12Wa27S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa27S3" type="number" name="Q12Wa27S3" placeholder="<?php if(isset($data['Q12Wa27S3'])) echo $data['Q12Wa27S3'] ?>" value="<?php echo set_value('Q12Wa27S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa27S4" type="number" name="Q12Wa27S4" placeholder="<?php if(isset($data['Q12Wa27S4'])) echo $data['Q12Wa27S4'] ?>" value="<?php echo set_value('Q12Wa27S4'); ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group1 row">
                                <div class="col-md-4">
                                    <label >Geysers/water heaters </label>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa28S1" type="number" name="Q12Wa28S1" placeholder="<?php if(isset($data['Q12Wa28S1'])) echo $data['Q12Wa28S1'] ?>" value="<?php echo set_value('Q12Wa28S1'); ?>"  />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa28S2" type="number" name="Q12Wa28S2" placeholder="<?php if(isset($data['Q12Wa28S2'])) echo $data['Q12Wa28S2'] ?>" value="<?php echo set_value('Q12Wa28S2'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa28S3" type="number" name="Q12Wa28S3" placeholder="<?php if(isset($data['Q12Wa28S3'])) echo $data['Q12Wa28S3'] ?>" value="<?php echo set_value('Q12Wa28S3'); ?>" />
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control space-textbox"  onkeyup="computeItems()" id="Q12Wa28S4" type="number" name="Q12Wa28S4" placeholder="<?php if(isset($data['Q12Wa28S4'])) echo $data['Q12Wa28S4'] ?>" value="<?php echo set_value('Q12Wa28S4'); ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Please upload supporting documents:</label>
                                <br>
                                &bull; Pictures of Electronic items used by school and storage of non-working electronic items<br>
                                &bull; Certificate of disposing e-waste from authorized dealer/dismantler<br>
                                <br/>
                                <button class="btn uploadbtn upload" data-id="E-Waste Storage" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
                                <?php foreach ($ewasteStorage as $f) { ?>
                                    <tr id="index<?php echo $f->id; ?>">
                                        <?php $name = str_replace(" ", "_", $f->name . "_E-Waste_Storage_"); ?>
                                        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <label class="control-label"><span class="cube">7</span>Do you know that your e-waste can be collected by an authorized dealer or dismantler? </label>
                                <ul class="list-inline">
                                    <li>
                                        <label class="radio-inline text-gray">
                                            <input type="radio" name="Q13Wa1" onclick="WasteDealer (1)" class="radio" id="Q13Wa1" value="<?php echo set_value('Q13Wa1','Y')?>" <?php if(isset($data['Q13Wa1'])) echo $data['Q13Wa1'] == 'Y' ?"checked":"" ?>>
                                            Yes </label>
                                    </li>
                                    <li>
                                        <label class="radio-inline text-gray">
                                            <input type="radio" name="Q13Wa1" onclick="WasteDealer(2)" class="radio" id="Q13Wa1" value="<?php echo set_value('Q13Wa1','N')?>" <?php if(isset($data['Q13Wa1'])) echo $data['Q13Wa1'] == 'N' ?"checked":"" ?>>
                                            No </label>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            if(isset($data['Q13Wa1']))
                            {
                            if($data['Q13Wa1'] == 'Y')
                            {
                            ?>
                            <div class="form-group" id="Q13Wa2">
                                <?php } else { ?>
                                <div class="form-group" id="Q13Wa2" style="display: none;">
                                    <?php }
                                    } else { ?>
                                    <div class="form-group" id="Q13Wa2" style="display: none;">
                                        <?php } ?>
                                        <label class="control-label"><span class="cube">7(a)</span>Who collects your e-waste, when not in working condition?</label>
                                        <ul list="list-unstyled">
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2',1)?>" <?php if(isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 1 ?"checked":"" ?>>
                                                    Kabadiwalla/ Scrapdealer </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2',2)?>" <?php if(isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 2 ?"checked":"" ?>>
                                                    Taken back by manufacturer/vendor </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q13Wa2" value="<?php echo set_value('Q13Wa2',3)?>" <?php if(isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 3 ?"checked":"" ?>>
                                                    Authorised dealer </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio"  name="Q13Wa2" value="<?php echo set_value('Q13Wa2',4)?>" <?php if(isset($data['Q13Wa2'])) echo $data['Q13Wa2'] == 4 ?"checked":"" ?>>
                                                    Authorised dismantler </label>
                                            </li>
                                             <li style="font-weight: 700">
                                              <input type="radio" <?php if(isset($data['Q13Wa2']) && $data['Q13Wa2']!=is_numeric($data['Q13Wa2'])) echo "checked"?>  name="Q13Wa2" id="other" > Other <br/> <input id="inputother" placeholder="<?php if($data['Q13Wa2']!='' && $data['Q13Wa2']!=is_numeric($data['Q13Wa2'])) echo $data['Q13Wa2']; ?>" type="text" onchange="changeradioother()" / style="width: 20%;">
                                                 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <h6> Task 4: How does your school dispose of waste?</h6>
                                        </label>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"><span class="cube">8</span>What is the final destination for waste from your school that is disposed of externally?</label>
                                        <ul class="list-unstyled">
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q14Wa1" value="<?php echo set_value('Q14Wa1',1)?>" <?php if(isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 1 ?"checked":"" ?>>
                                                    Open dumping </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q14Wa1" value="<?php echo set_value('Q14Wa1',2)?>" <?php if(isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 2 ?"checked":"" ?>>
                                                    Designated dumping site (Dhalao) </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" name="Q14Wa1" value="<?php echo set_value('Q14Wa1',3)?>" <?php if(isset($data['Q14Wa1'])) echo $data['Q14Wa1'] == 3 ?"checked":"" ?>>
                                                    Landfill Site </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Please upload supporting documents:</label>
                                        <br>
                                        &bull; Pictures of housekeeping staff disposing different types of solid waste<br>
                                        <br/>
                                        <!--    <input type="file" name="" class="org-btn">  <br>-->
                                        <button class="btn uploadbtn upload"
                                                data-id="Disposing" data-toggle="modal"
                                                data-target="#airModal" type="button">UPLOAD FILES </button>
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
                                        <?php foreach ($disposing as $f) { ?>
                                            <tr id="index<?php echo $f->id; ?>">
                                                <?php $name = str_replace(" ", "_", $f->name . "_Disposing_"); ?>
                                                <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                                <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="form-group">
                                        <label class="control-label"><span class="cube">9</span>Does your school burn waste? </label>
                                        <ul class="list-inline">
                                            <li>
                                                <label class="radio-inline text-gray">
                                                    <input type="radio" name="Q15Wa1" onclick="WasteBurn(1)" class="radio" id="Q15Wa1" value="<?php echo set_value('Q15Wa1','Y')?>" <?php if(isset($data['Q15Wa1'])) echo $data['Q15Wa1'] == 'Y' ?"checked":"" ?>>
                                                    Yes </label>
                                            </li>
                                            <li>
                                                <label class="radio-inline text-gray">
                                                    <input type="radio" name="Q15Wa1" onclick="WasteBurn(2)" class="radio" id="Q15Wa1" value="<?php echo set_value('Q15Wa1','N')?>" <?php if(isset($data['Q15Wa1'])) echo $data['Q15Wa1'] == 'N' ?"checked":"" ?>>
                                                    No </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Please upload supporting documents:</label>
                                        <br>
                                        &bull;  Pictures of burning waste<br>
                                        <br/>
                                        <button class="btn uploadbtn upload" data-id="Burning Waste" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <table width="100%" class="question uploadedfiles">
                                        <thead>
                                        <tr>
                                           <th>File name</th>
                                           <th>Delete</th>
                                           <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($burningWaste as $f) { ?>
                                            <tr id="index<?php echo $f->id; ?>">
                                                <?php $name = str_replace(" ", "_", $f->name . "_Buring_Waste_"); ?>
                                                <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                                <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="clearfix">&nbsp;</div>
                                    <?php
                                    if(isset($data['Q15Wa1']))
                                    {  if($data['Q15Wa1'])
                                    {
                                    ?>
                                    <div class="form-group" id="Q15Wa2">
                                        <?php } else { ?>
                                        <div class="form-group" id="Q15Wa2" style="display: none;">
                                            <?php }
                                            } else {?>
                                            <div class="form-group" id="Q15Wa2" style="display: none;">
                                                <?php } ?>
                                                <label class="control-label"><span class="cube">9(a)</span> Where does your school burn waste? </label>
                                                <ul class="list-inline">
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q15Wa2" class="radio" id="Q15Wa2" value="<?php echo set_value('Q15Wa2',1)?>" <?php if(isset($data['Q15Wa2'])) echo $data['Q15Wa2'] == 1 ?"checked":"" ?>>
                                                            Inside the school </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q15Wa2" class="radio" id="Q15Wa2" value="<?php echo set_value('Q15Wa2',2)?>" <?php if(isset($data['Q15Wa2'])) echo $data['Q15Wa2'] == 2 ?"checked":"" ?>>
                                                            Outside the school </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group" id="Q15Wa3">
                                                <label class="control-label"><span class="cube">9(b)</span> What kind of waste is being burnt/ incinerated? </label>
                                                <ul class="list-inline">
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="checkbox" name="Q15Wa2S1" value="<?php echo set_value('Q15Wa2S1',1); ?>" <?php if(isset($data['Q15Wa2S1'])) echo "checked" ?>>
                                                            Horticultural </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="checkbox" name="Q15Wa2S2" value="<?php echo set_value('Q15Wa2S2',1); ?>" <?php if(isset($data['Q15Wa2S2'])) echo "checked" ?>>
                                                            Plastic </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="checkbox" name="Q15Wa2S3" value="<?php echo set_value('Q15Wa2S3',1); ?>" <?php if(isset($data['Q15Wa2S3'])) echo "checked" ?>>
                                                            Tyres </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="checkbox" name="Q15Wa2S4" value="<?php echo set_value('Q15Wa2S4',1); ?>" <?php if(isset($data['Q15Wa2S4'])) echo "checked" ?>>
                                                            Paper </label>
                                                    </li>
                                                </ul>
                                            </div>
    <!-- <div class="form-group">
        <label class="control-label"><span class="cube">10</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </label>
        <ul class="list-inline">
        <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q16Wa1" class="radio" id="Q16Wa1" value="<?php echo set_value('Q16Wa1','Y')?>" <?php if(isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'Y' ?"checked":"" ?>>
        Yes </label>
        </li>
        <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q16Wa1"class="radio" id="Q16Wa1" value="<?php echo set_value('Q16Wa1','N')?>" <?php if(isset($data['Q16Wa1'])) echo $data['Q16Wa1'] == 'N' ?"checked":"" ?>>
        No </label>
        </li>
        </ul>
        </div>
        <div class="form-group">
        <label class="control-label">Please upload supporting documents:</label>
        <br>
        &bull; Certificate of disposing e-waste from authorised dealer/dismantler<br>
        <br/>
        <button class="btn uploadbtn upload" data-id="E-Waste Disposing Certificate" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
        <?php foreach ($eWasteDisposing as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
        <?php $name = str_replace(" ", "_", $f->name . "_E-Waste_Disposing_Certificate_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
         </tr>
        <?php } ?>
        </tbody>
        </table> -->
                                            <div class="clearfix">&nbsp;</div>
                                            <div class="form-group">
                                                <label>
                                                    <h6> Task 5: School’s initiatives </h6>
                                                </label>
                                                <br>
                                                It is important to appreciate the initiatives taken by the management on issues related to waste. The management's approach to these issues can be assessed in the following way:
                                                Seek an appointment with the Chairperson, Manager and Principal of your school and ask them the following questions: </div>

                        <div class="form-group">
                            <label class="control-label"><span class="cube">10</span> During Covid 19, where do students dispose of their single-use masks and/or gloves used against severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) at the school? <a class="tt" data-tooltip="It is assumed that all individuals, including children will need to take precautions and wear masks and/or gloves till such time, advisories are issued to stop using them."><span class="badge">?</span></a> <a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a> </label>
                              <div class="radio">
                                <label>
                                <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q10NWa1', 1) ?>" <?php if (isset($data['Q10NWa1'])) echo $data['Q10NWa1'] == 1 ? "checked" : "" ?>> Mixed bin </label>
                             </div>

                             <div class="radio">
                                <label>
                                <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q10NWa1', 2) ?>" <?php if (isset($data['Q10NWa1'])) echo $data['Q10NWa1'] == 2 ? "checked" : "" ?>> Yellow/separate bin for COVID waste </label>
                             </div>

                             <div class="radio">
                                <label>
                                <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q10NWa1', 3) ?>" <?php if (isset($data['Q10NWa1'])) echo $data['Q10NWa1'] == 3 ? "checked" : "" ?>> Wet waste bin </label>
                             </div>

                             <div class="radio">
                                <label>
                                <input type="radio" name="Q12NWa1" value="<?php echo set_value('Q10NWa1', 4) ?>" <?php if (isset($data['Q10NWa1'])) echo $data['Q10NWa1'] == 4 ? "checked" : "" ?>> We use reusable masks and/or gloves </label>
                             </div>                             

                        </div>

                                            <div class="form-group">
                                                <label class="control-label"><span class="cube">11</span>Does the school have a policy on waste?</label>
                                                <ul class="list-inline">
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q17Wa1" class="radio" onclick="WastePolicy(1)" id="Q17Wa1" value="<?php echo set_value('Q17Wa1','Y')?>" <?php if(isset($data['Q17Wa1'])) echo $data['Q17Wa1'] == 'Y' ?"checked":"" ?>>
                                                            Yes </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q17Wa1" class="radio" onclick="WastePolicy(2)" id="Q17Wa1" value="<?php echo set_value('Q17Wa1','N')?>" <?php if(isset($data['Q17Wa1'])) echo $data['Q17Wa1'] == 'N' ?"checked":"" ?>>
                                                            No </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php if(isset($data['Q17Wa1']))
                                                if($data['Q17Wa1'] == 'Y')
                                                {
                                                    ?>
                                                    <div class="form-group" id="WastePolicy">
                                                        <label class="control-label">Please upload supporting documents:</label>
                                                        <br>
                                                        &bull; Waste Policy<br>
                                                        <br/>
                                                        <button class="btn uploadbtn upload" data-id="Waste Policy" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                     <table width="100%" class="question uploadedfiles">
        <thead>
        <tr>
            <th>File name</th>
            <th>Delete</th>
            <th>Download</th>
        </tr>
        </thead>
        <tbody>
           
<?php
  
foreach ($chikoo as $u) { ?>
    <tr id="index<?php echo $u->id; ?>">
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
                                                }?>
                                            <div class="form-group" id="WastePolicy" style="display: none;">
                                                <label class="control-label">Please upload supporting documents:</label>
                                                <br>
                                                &bull; Waste Policy<br>
                                                <button class="btn uploadbtn upload" data-id="Waste Policy" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                                                
                               
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"><span class="cube">12</span>Are there awareness drives with regard to Reduce, Recycle and Reuse? </label>
                                                <ul class="list-inline">
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q18Wa1" class="radio" onclick="WasteAwareness(1)" id="Q18Wa1" value="<?php echo set_value('Q18Wa1','Y')?>" <?php if(isset($data['Q18Wa1'])) echo $data['Q18Wa1'] == 'Y' ?"checked":"" ?>>
                                                            Yes </label>
                                                    </li>
                                                    <li>
                                                        <label class="radio-inline text-gray">
                                                            <input type="radio" name="Q18Wa1" class="radio" onclick="WasteAwareness(2)" id="Q18Wa1" value="<?php echo set_value('Q18Wa1','N')?>" <?php if(isset($data['Q18Wa1'])) echo $data['Q18Wa1'] == 'N' ?"checked":"" ?>>
                                                            No </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <?php if(isset($data['Q18Wa1']))
                                                if($data['Q18Wa1'] == 'Y')
                                                {
                                                    ?>
                                                    <div class="form-group" id="awareness">
                                                        <label class="control-label">Please upload supporting documents:</label>
                                                        <br>
                                                        &bull; Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc<br>
                                                        <br/>
                                                        <button class="btn uploadbtn upload" data-id="School Initiatives" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
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
<?php foreach ($Initiatives as $u) { ?>
    <tr id="index<?php echo $u->id; ?>">
    <?php $name = str_replace(" ", "_", $u->name . "_Initiatives_"); ?>
                                                                                                                                                                                                                                            
    <td class="upload edit"><?php echo str_replace($name, "", $u->file_name); ?></td>
    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $u->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $u->file_name; ?>" download="<?php echo $u->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
<?php } ?>
        </tbody>
    </table>
                                                    </div>
                                                    <div class="form-group" id="Q18Wa3">
                                                        <label class="control-label"><span class="cube">12(a)</span>What form do these awareness drives take? </label>
                                                        <div class="form-group">
                                                            <label class="radio text-gray">
                                                                <input type="checkbox" name="Q18Wa2S1" value="<?php echo set_value('Q18Wa2S1',1); ?>" <?php if(isset($data['Q18Wa2S1'])) echo "checked" ?>>
                                                                As part of the curriculum </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="radio text-gray">
                                                                <input type="checkbox" name="Q18Wa2S2" value="<?php echo set_value('Q18Wa2S2',1); ?>" <?php if(isset($data['Q18Wa2S2'])) echo "checked" ?>>
                                                                As part of extracurricular activities such as guest lectures </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="radio text-gray">
                                                                <input type="checkbox" name="Q18Wa2S3" value="<?php echo set_value('Q18Wa2S3',1); ?>" <?php if(isset($data['Q18Wa2S3'])) echo "checked" ?>>
                                                                By the showcasing of posters and stickers </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }?>
                                            <div class="form-group" id="WastePolicy" style="display: none;">
                                                <label class="control-label">Please upload supporting documents:</label>
                                                <br>
                                                Waste Policy<br>
                                                <button class="btn uploadbtn upload" data-id="Waste Policy" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                                                <br>
                                                <br>
                                            </div>
                                            <div class="form-group" id="Q18Wa3" style="display: none;">
                                                <label class="control-label"><span class="cube">13(a)</span>What form do these awareness drives take? </label>
                                                <div class="form-group">
                                                    <label class="radio-inline text-gray">
                                                        <input type="checkbox" name="Q18Wa2S1" value="<?php echo set_value('Q18Wa2S1',1); ?>" <?php if(isset($data['Q18Wa2S1'])) echo "checked" ?>>
                                                        Horticultural </label>
                                                    <label class="radio-inline text-gray">
                                                        <input type="checkbox" name="Q18Wa2S2" value="<?php echo set_value('Q18Wa2S2',1); ?>" <?php if(isset($data['Q18Wa2S2'])) echo "checked" ?>>
                                                        Plastic </label>
                                                    <label class="radio-inline text-gray">
                                                        <input type="checkbox" name="Q18Wa2S3" value="<?php echo set_value('Q18Wa2S3',1); ?>" <?php if(isset($data['Q18Wa2S3'])) echo "checked" ?>>
                                                        Tyres </label>
                                                    <label class="radio-inline text-gray">
                                                        <input type="checkbox" name="Q18Wa2S4" value="<?php echo set_value('Q18Wa2S4',1); ?>" <?php if(isset($data['Q18Wa2S4'])) echo "checked" ?>>
                                                        Paper </label>
                                                </div>
                                            </div>
                                            <div class="form-group" id="WastePolicy">
                                                <label class="control-label">Please upload supporting documents:</label>
                                                <br>
                                                &bull;Pictures of audit team doing survey<br/>
                                                Please upload all supporting documents related to this section here. Note, files must be one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
                                                File size per document should not exceed <strong>100 KB.</strong> <br/>
                                                <br/>
                                                <button class="btn uploadbtn upload" data-id="Pictures of Audit Team Waste" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>
                                            </div>
                                            <div class="clearfix">&nbsp;</div>
                                            <table width="100%" class="question uploadedfiles">
                                                <thead>
                                                <tr>
                                                    <th>File name</th>
                                                    <th>Delete</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($pictures as $f) { ?>
                                                    <tr id="index<?php echo $f->id; ?>">
                                                        <?php $name = str_replace(" ", "_", $f->name . "_Pictures_of_Audit_Team_Waste_"); ?>
                                                        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                                                        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                                                    <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                            </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                            <div class="clearfix">&nbsp;</div>
                                            <div class="text-center">
                                                <button type="button" class="org-btn" id="btnWastePrevious">Previous</button>
                                                <button type="submit" class="org-btn" id="wastenext" value="movenext">Next</button>
                                                <button type="button" class="org-btn" class="submit button" id="wastesave">
                                                    Save and Resume Later
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?> </div>
                            </div>
                        </div>
                        <!-- /.container -->
                        <?php $this->load->view('footer');?>
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

/*Teacher Record Validation*/
/*Teachers (maximum of three teachers can be part of the team): */
$("#wastenext").click(function(e){
   if($("#Q1Wa1S1").attr('placeholder')==""  || $("#Q1Wa1S3").attr('placeholder')==""  || $("#Q1Wa1S2").attr('placeholder')==""){ 
     if($("#Q1Wa1S1").val()==""  || $("#Q1Wa1S3").val()==""  || $("#Q1Wa1S2").val()==""){ 
      alert("School Must Add Teacher First Name, Last Name & Email ID.");
      e.preventDefault();
    }
   }
});
/*Administrative Record Validation*/
/*Administrative staff (maximum of five staff can be part of the team): */
$("#wastenext").click(function(e){
   if($("#Q2Wa1S1").attr('placeholder')==""  || $("#Q2Wa1S3").attr('placeholder')==""  || $("#Q2Wa1S2").attr('placeholder')==""){
      if($("#Q2Wa1S1").val()=="" || $("#Q2Wa1S3").val()==""  || $("#Q2Wa1S2").val()==""){  
    alert("School Must Add Administrative Staff  First Name, Last Name & Email ID.");
    e.preventDefault();
    }
   }
});
/*Student Record Validation*/
/*Student (maximum of five staff can be part of the team): */
$("#wastenext").click(function(e){
   if($("#Q3Wa1S1").attr('placeholder')==""  || $("#Q3Wa1S2").attr('placeholder')==""  || $("#Q3Wa1S3").attr('placeholder')==""){ 
    if($("#Q3Wa1S1").val()==""  || $("#Q3Wa1S2").val()==""  || $("#Q3Wa1S3").val()==""){ 
    alert("School Must Add Student First Name, Last Name & Grade.");
    e.preventDefault();
    }
   }
});
$("#wastenext").click(function(e){
/**Q1 Does your school segregate solid waste?**/
 if($("input[name='Q4Wa1']:checked").length==0){
       alert("Q1 Does your school segregate solid waste?");
       e.preventDefault();
 } 
/**Q1(a)Who segregates the waste at source?**/
  if($("input[name='Q4Wa1']:checked").val()==="Y"){
    if($("input[name='Q4Wa2S1']:checked").length==0 && $("input[name='Q4Wa2S2']:checked").length==0 && $("input[name='Q4Wa2S3']:checked").length==0 && $("input[name='Q4Wa2S4']:checked").length==0){
     alert("Q1(a)Who segregates the waste at source?");
     e.preventDefault();
   }
  }
/**Q2 How many categories does your school segregate waste into?**/
 if($("input[name='Q4Wa2']:checked").length==0){
       alert("Q2 How many categories does your school segregate waste into?");
       e.preventDefault();
 } 

/**Q3 Does your school recycle any generated waste?**/
 if($("input[name='Q8Wa1']:checked").length==0){
       alert("Q3 Does your school recycle any generated waste?");
       e.preventDefault();
 }  
/**Q5 Does your school encourage students & teachers to reuse textbooks?**/
 if($("input[name='Q10Wa1']:checked").length==0){
       alert("Q5 Does your school encourage students & teachers to reuse textbooks?");
       e.preventDefault();
 } 
/**Q7 Do you know that your e-waste can be collected by an authorized dealer or dismantler?**/
 if($("input[name='Q13Wa1']:checked").length==0){
       alert("Q7 Do you know that your e-waste can be collected by an authorized dealer or dismantler?");
       e.preventDefault();
 } 
 /**Q8 What is the final destination for waste from your school that is disposed of externally?**/
 if($("input[name='Q14Wa1']:checked").length==0){
       alert("Q8 What is the final destination for waste from your school that is disposed of externally?");
       e.preventDefault();
 } 
/**Q9 Does your school burn waste?**/
 if($("input[name='Q15Wa1']:checked").length==0){
       alert("Q9 Does your school burn waste?");
       e.preventDefault();
 } 
/**Q10 Do you know that your E-waste can be collected by an authorised dealer or dismantler?**/
 // if($("input[name='Q16Wa1']:checked").length==0){
    //    alert("Q10 Do you know that your E-waste can be collected by an authorised dealer or dismantler?");
 //       e.preventDefault();
 // } 
/*************************************************************/
if($("input[name='Q15Wa1']:checked").val()==="Y"){
   /**Q9(a) Where does your school burn waste?**/
   if($("input[name='Q15Wa2']:checked").length==0){
       alert("Q9(a) Where does your school burn waste?");
       e.preventDefault();
   }
  /**9(b) What kind of waste is being burnt/ incinerated?**/  
  if($("input[name='Q15Wa2S1']:checked").length==0 && $("input[name='Q15Wa2S2']:checked").length==0 && $("input[name='Q15Wa2S3']:checked").length==0 && $("input[name='Q15Wa2S4']:checked").length==0){
       alert("Q9(b) What kind of waste is being burnt/ incinerated?");
       e.preventDefault();
   }
} 
/*************************************************************/
if($("input[name='Q8Wa1']:checked").val()==="Y"){
  if($("input[name='Q8Wa2S1']:checked").length==0){
    alert("3(a) Type of waste: Garden waste/ Horticultural waste");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S2']:checked").length==0){
    alert("3(a) Type of waste: Kitchen Waste");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S3']:checked").length==0){
    alert("3(a) Type of waste: Paper");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S4']:checked").length==0){
    alert("3(a) Type of waste: Plastic");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S5']:checked").length==0){
    alert("3(a) Type of waste: Wood, glass, metal, classroom furniture");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S6']:checked").length==0){
    alert("3(a) Type of waste: E-waste");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S7']:checked").length==0){
    alert("3(a) Type of waste: Biomedical waste");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S8']:checked").length==0){
    alert("3(a) Type of waste: Sanitary waste");
    e.preventDefault();
  }
  if($("input[name='Q8Wa2S9']:checked").length==0){
    alert("3(a) Type of waste: Construction and Demolition (C & D) waste");
    e.preventDefault();
  }
  
  if($("input[name='Q8Wa2S10']:checked").length==0){
    alert("3(a) Type of waste: Hazardous waste");
    e.preventDefault();
  } 
}
/*Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.*/
if($("input[name='Q12Wa1S1']").attr('placeholder')=="" || $("input[name='Q12Wa1S2']").attr('placeholder')=="" || $("input[name='Q12Wa1S3']").attr('placeholder')==""){
if($("input[name='Q12Wa1S1']").val()=="" || $("input[name='Q12Wa1S2']").val()=="" || $("input[name='Q12Wa1S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: TVs");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa2S1']").attr('placeholder')=="" || $("input[name='Q12Wa2S2']").attr('placeholder')=="" || $("input[name='Q12Wa2S3']").attr('placeholder')==""){
if($("input[name='Q12Wa2S1']").val()=="" || $("input[name='Q12Wa2S2']").val()=="" || $("input[name='Q12Wa2S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: VCR or DVD players");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa3S1']").attr('placeholder')=="" || $("input[name='Q12Wa3S2']").attr('placeholder')=="" || $("input[name='Q12Wa3S3']").attr('placeholder')==""){
if($("input[name='Q12Wa3S1']").val()=="" || $("input[name='Q12Wa3S2']").val()=="" || $("input[name='Q12Wa3S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Refrigerators and freezers");
    e.preventDefault();
  }
}

if($("input[name='Q9Wa1']:checked").val()==='Y'){
  if($("input[name='Q9Wa4S1']:checked").length==0 && $("input[name='Q9Wa4S2']:checked").length==0 && $("input[name='Q9Wa4S3']:checked").length==0 && $("input[name='Q9Wa4S4']:checked").length==0 ){
    alert("4(a) What is the purpose of the compost that is generated per month?");
    e.preventDefault();
  }
}
    
if($("input[name='Q13Wa1']:checked").val()==='Y'){
  if($("input[name='Q13Wa2']:checked").length==0){
    alert("7(a) Who collects your e-waste, when not in working condition?");
    e.preventDefault();
  }
}

if($("input[name='Q18Wa1']:checked").val()==='Y'){
 if($("input[name='Q18Wa2S1']:checked").length==0 && $("input[name='Q18Wa2S2']:checked").length==0 && $("input[name='Q18Wa2S2']:checked").length==0 ){
    alert("12(a) What form do these awareness drives take?");
    e.preventDefault();
  }
}
    
if($("input[name='Q12Wa4S1']").attr('placeholder')=="" || $("input[name='Q12Wa4S2']").attr('placeholder')=="" || $("input[name='Q12Wa4S3']").attr('placeholder')==""){
if($("input[name='Q12Wa4S1']").val()=="" || $("input[name='Q12Wa4S2']").val()=="" || $("input[name='Q12Wa4S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Washing machines");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa5S1']").attr('placeholder')=="" || $("input[name='Q12Wa5S2']").attr('placeholder')=="" || $("input[name='Q12Wa5S3']").attr('placeholder')==""){
if($("input[name='Q12Wa5S1']").val()=="" || $("input[name='Q12Wa5S2']").val()=="" || $("input[name='Q12Wa5S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Air conditioners");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa6S1']").attr('placeholder')=="" || $("input[name='Q12Wa6S2']").attr('placeholder')=="" || $("input[name='Q12Wa6S3']").attr('placeholder')==""){
if($("input[name='Q12Wa6S1']").val()=="" || $("input[name='Q12Wa6S2']").val()=="" || $("input[name='Q12Wa6S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Heaters");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa7S1']").attr('placeholder')=="" || $("input[name='Q12Wa7S2']").attr('placeholder')=="" || $("input[name='Q12Wa7S3']").attr('placeholder')==""){
if($("input[name='Q12Wa7S1']").val()=="" || $("input[name='Q12Wa7S2']").val()=="" || $("input[name='Q12Wa7S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Microwaves");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa8S1']").attr('placeholder')=="" || $("input[name='Q12Wa8S2']").attr('placeholder')=="" || $("input[name='Q12Wa8S3']").attr('placeholder')==""){
if($("input[name='Q12Wa8S1']").val()=="" || $("input[name='Q12Wa8S2']").val()=="" || $("input[name='Q12Wa8S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Ovens");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa9S1']").attr('placeholder')=="" || $("input[name='Q12Wa9S2']").attr('placeholder')=="" || $("input[name='Q12Wa9S3']").attr('placeholder')==""){
if($("input[name='Q12Wa9S1']").val()=="" || $("input[name='Q12Wa9S2']").val()=="" || $("input[name='Q12Wa9S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Toasters");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa10S1']").attr('placeholder')=="" || $("input[name='Q12Wa10S2']").attr('placeholder')=="" || $("input[name='Q12Wa10S3']").attr('placeholder')==""){
if($("input[name='Q12Wa10S1']").val()=="" || $("input[name='Q12Wa10S2']").val()=="" || $("input[name='Q12Wa10S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Electric kettles");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa11S1']").attr('placeholder')=="" || $("input[name='Q12Wa11S2']").attr('placeholder')=="" || $("input[name='Q12Wa11S3']").attr('placeholder')==""){
if($("input[name='Q12Wa11S1']").val()=="" || $("input[name='Q12Wa11S2']").val()=="" || $("input[name='Q12Wa11S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Personal computers (CPU, mouse, screen and keyboard included)");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa12S1']").attr('placeholder')=="" || $("input[name='Q12Wa12S2']").attr('placeholder')=="" || $("input[name='Q12Wa12S3']").attr('placeholder')==""){
if($("input[name='Q12Wa12S1']").val()=="" || $("input[name='Q12Wa12S2']").val()=="" || $("input[name='Q12Wa12S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Laptop computer (CPU, mouse, screen and keyboard included))");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa13S1']").attr('placeholder')=="" || $("input[name='Q12Wa13S2']").attr('placeholder')=="" || $("input[name='Q12Wa13S3']").attr('placeholder')==""){
if($("input[name='Q12Wa13S1']").val()=="" || $("input[name='Q12Wa13S2']").val()=="" || $("input[name='Q12Wa13S3']").attr()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Notebook computers");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa14S1']").attr('placeholder')=="" || $("input[name='Q12Wa14S2']").attr('placeholder')=="" || $("input[name='Q12Wa14S3']").attr('placeholder')==""){
if($("input[name='Q12Wa14S1']").val()=="" || $("input[name='Q12Wa14S2']").val()=="" || $("input[name='Q12Wa14S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Printers");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa16S1']").attr('placeholder')=="" || $("input[name='Q12Wa16S2']").attr('placeholder')=="" || $("input[name='Q12Wa16S3']").attr('placeholder')==""){
if($("input[name='Q12Wa16S1']").val()=="" || $("input[name='Q12Wa16S2']").val()=="" || $("input[name='Q12Wa16S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Copying equipment (photocopiers)");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa17S1']").attr('placeholder')=="" || $("input[name='Q12Wa17S2']").attr('placeholder')=="" || $("input[name='Q12Wa17S3']").attr('placeholder')==""){
if($("input[name='Q12Wa17S1']").val()=="" || $("input[name='Q12Wa17S2']").val()=="" || $("input[name='Q12Wa17S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Projectors");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa18S1']").attr('placeholder')=="" || $("input[name='Q12Wa18S2']").attr('placeholder')=="" || $("input[name='Q12Wa18S3']").attr('placeholder')==""){
if($("input[name='Q12Wa18S1']").val()=="" || $("input[name='Q12Wa18S2']").val()=="" || $("input[name='Q12Wa18S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Whiteboards");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa19S1']").attr('placeholder')=="" || $("input[name='Q12Wa19S2']").attr('placeholder')=="" || $("input[name='Q12Wa19S3']").attr('placeholder')==""){
if($("input[name='Q12Wa19S1']").val()=="" || $("input[name='Q12Wa19S2']").val()=="" || $("input[name='Q12Wa19S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Electrical and electronic typewriters");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa20S1']").attr('placeholder')=="" || $("input[name='Q12Wa20S2']").attr('placeholder')=="" || $("input[name='Q12Wa20S3']").attr('placeholder')==""){
if($("input[name='Q12Wa20S1']").val()=="" || $("input[name='Q12Wa20S2']").val()=="" || $("input[name='Q12Wa20S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Pocket and desk calculators");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa21S1']").attr('placeholder')=="" || $("input[name='Q12Wa21S2']").attr('placeholder')=="" || $("input[name='Q12Wa21S3']").attr('placeholder')==""){
if($("input[name='Q12Wa21S1']").val()=="" || $("input[name='Q12Wa21S2']").val()=="" || $("input[name='Q12Wa21S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Fax machines");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa22S1']").attr('placeholder')=="" || $("input[name='Q12Wa22S2']").attr('placeholder')=="" || $("input[name='Q12Wa22S3']").attr('placeholder')==""){
if($("input[name='Q12Wa22S1']").val()=="" || $("input[name='Q12Wa22S2']").val()=="" || $("input[name='Q12Wa22S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Telex");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa23S1']").attr('placeholder')=="" || $("input[name='Q12Wa23S2']").attr('placeholder')=="" || $("input[name='Q12Wa23S3']").attr('placeholder')==""){
if($("input[name='Q12Wa23S1']").val()=="" || $("input[name='Q12Wa23S2']").val()=="" || $("input[name='Q12Wa23S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Telephones");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa24S1']").attr('placeholder')=="" || $("input[name='Q12Wa24S2']").attr('placeholder')=="" || $("input[name='Q12Wa24S3']").attr('placeholder')==""){
if($("input[name='Q12Wa24S1']").val()=="" || $("input[name='Q12Wa24S2']").attr()=="" || $("input[name='Q12Wa24S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Pay telephones");
    e.preventDefault();
  }
} 
if($("input[name='Q12Wa25S1']").attr('placeholder')=="" || $("input[name='Q12Wa25S2']").attr('placeholder')=="" || $("input[name='Q12Wa25S3']").attr('placeholder')==""){
if($("input[name='Q12Wa25S1']").val()=="" || $("input[name='Q12Wa25S2']").val()=="" || $("input[name='Q12Wa25S3']").val()==""){
// alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Mobiles");
    //e.preventDefault();
    }
}
if($("input[name='Q12Wa26S1']").attr('placeholder')=="" || $("input[name='Q12Wa26S2']").attr('placeholder')=="" || $("input[name='Q12Wa26S3']").attr('placeholder')==""){
if($("input[name='Q12Wa26S1']").val()=="" || $("input[name='Q12Wa26S2']").val()=="" || $("input[name='Q12Wa26S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Answering systems");
    e.preventDefault();
  }
}
if($("input[name='Q12Wa27S1']").attr('placeholder')=="" || $("input[name='Q12Wa27S2']").attr('placeholder')=="" || $("input[name='Q12Wa27S3']").attr('placeholder')==""){
if($("input[name='Q12Wa27S1']").val()=="" || $("input[name='Q12Wa27S2']").val()=="" || $("input[name='Q12Wa27S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Induction cookers");
    e.preventDefault();
    }
}
if($("input[name='Q12Wa28S1']").attr('placeholder')=="" || $("input[name='Q12Wa28S2']").attr('placeholder')=="" || $("input[name='Q12Wa28S3']").attr('placeholder')==""){
if($("input[name='Q12Wa28S1']").val()=="" || $("input[name='Q12Wa28S2']").val()=="" || $("input[name='Q12Wa28S3']").val()==""){
 alert("Q6 Does your school have the following? If yes, please give the numbers of items in working condition and those that are not: Geysers/water heaters");
    e.preventDefault();
    }
}
});             
                        </script>
                        <style type="text/css">
                            .text-gray{
                                color: #666666!important;
                            }
                        </style>

<script type="text/javascript">
    
    $(document).ready(function(){

    for (i = 1; i <= 28; i++) {
      $('#Q12Wa'+[i]+'S1').keyup(function(){
        var p = $(this).val();
        
        if(p>5){
            alert('BEE star rating should not be greater than 5')
            $(this).val('');
        }

       });
}
});

if($("input[name='Q15Wa1']:checked").val()==="N"){
    $("#Q15Wa2").css('display','none');
    $("#Q15Wa3").css('display','none');

}

</script>

