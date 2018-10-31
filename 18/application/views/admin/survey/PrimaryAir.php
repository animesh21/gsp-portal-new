<?php $this->load->view('header'); ?>
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
            <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width:10%; height: 35px;">10%</div>
        </div>
        <div class="intro">
            <h1>AIR <span style="text-transform:capitalize">(Primary)</span></h1>
            <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#myModal"><img
                            src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div>
            <p> The Air section involves finding out your school's contribution in polluting the air. The information
                will help in devising strategies for clean air in the coming years.</p>
            <p> <strong>The unit of measurement to be used in the Air section is square meter (m<sup>2</sup>).</strong> </p>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">
                <div class="question-text">
                    <h6> Task 1: Choose your Air Audit Team</h6>
                    <p> You would require at least five to 10 of your schoolmates in the Air audit team. The teacher
                        co-ordinator may be a science or social science teacher, with an interest in air pollution
                        issues. Do include the school transport in-charge and the drivers of the school vehicles in your
                        audit team.</p>
                </div>
            </label>
        </div>
        <?php echo form_open('air/set', array('id' => 'PrimaryAir')); ?>
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
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1A1S1" type="text" name="Q1A1S1"
                           placeholder="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"
                           value="<?php echo set_value('Q1A1S1'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1A1S3" type="text" name="Q1A1S3"
                           placeholder="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"
                           value="<?php echo set_value('Q1A1S3'); ?>"/>
                </div>
                <div class="col-xs-3"> <?php echo form_error('email'); ?>
                    <input class="form-control space-textbox" id="Q1A1S2" type="email" name="Q1A1S2"
                           placeholder="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"
                           value="<?php echo set_value('Q1A1S2'); ?>"/>
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
                        <input class="form-control space-textbox" id="Q2A1S1" type="text" name="Q2A1S1"
                               placeholder="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"
                               value="<?php echo set_value('Q2A1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="Q2A1S3" type="text" name="Q2A1S3"
                               placeholder="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"
                               value="<?php echo set_value('Q2A1S3'); ?>"/>
                    </div>
                    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
                        <input class="form-control space-textbox" id="Q2A1S2" type="email" name="Q2A1S2"
                               placeholder="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"
                               value="<?php echo set_value('Q2A1S2'); ?>"/>
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
                        <input class="form-control space-textbox" id="Q3A1S1" type="text" name="Q3A1S1"
                               placeholder="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"
                               value="<?php echo set_value('Q3A1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
                        <input class="form-control space-textbox" id="Q3A1S2" type="text" name="Q3A1S2"
                               placeholder="<?php if (isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>"
                               value="<?php echo set_value('Q3A1S2'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="Q3A1S3" type="text" name="Q3A1S3"
                               placeholder="<?php if (isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>"
                               value="<?php echo set_value('Q3A1S3'); ?>"/>
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
                        <input class="form-control space-textbox" id="Q3A2S3" type="text" name="Q3A2S3"
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
                        <input class="form-control space-textbox" id="Q3A3S3" type="text" name="Q3A3S3"
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
                        <input class="form-control space-textbox" id="Q3A4S3" type="text" name="Q3A4S3"
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
                        <input class="form-control space-textbox" id="Q3A5S3" type="text" name="Q3A5S3"
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
                        <input class="form-control space-textbox" id="Q3A6S3" type="text" name="Q3A6S3"
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
                        <input class="form-control space-textbox" id="Q3A7S3" type="text" name="Q3A7S3"
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
                        <input class="form-control space-textbox" id="Q3A8S3" type="text" name="Q3A8S3"
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
                        <input class="form-control space-textbox" id="Q3A9S3" type="text" name="Q3A9S3"
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
                        <input class="form-control space-textbox" id="Q3A10S3" type="text" name="Q3A10S3"
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
                1. For this exercise, classrooms that are occupied by students regularly should be considered. Do not
                add laboratories or the auditorium.<br>
                2. Openings: are there any windows and ventilators which can be opened on regular basis and can be
                opened anytime? Please do not consider / add doors.<br>
                3. This exercise should be done by schools with centrally air conditioning system also. <br>
                4. The exercise should be carried out for all classrooms in the school and determine how many classrooms are well ventilated by following the tooltip. Only classrooms have to be considered. <br>
                5. This activity is for all schools (non-air-conditioned buildings as well as air-conditioned
                buildings). </div>
            <div class="clearfix">&nbsp;</div>
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
        <div class="clearfix">&nbsp;</div>
        <div class="form-group" id="Ratio">
            <label class="control-label"><span class="cube">2</span>Are the rooms in your school well-ventilated <a class="tt" data-tooltip="Survey all the classrooms in your school. Consider a classroom as well ventilated if it has crossed ventilation – windows on one wall and door/s on opposite or adjacent wall."><span class="badge">?</span></a> <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/air" target="_blank"> </a></label>
            <table class="table">
                <tr>
                    <td>Total number of classrooms in your school</td>
                    <td><input name="Q5A1" placeholder="<?php if (isset($data['Q5A1'])) echo $data['Q5A1'] ?>" type="text" class="form-control" style="width:250px;" id="input-1" value="<?php if (isset($data['Q5A1'])) echo $data['Q5A1'] ?>"  readonly=""/></td>
                </tr>
                <tr>
                    <td>Total number of well-ventilated classrooms in your school</td>
                    <td><input name="Q5A2" placeholder="<?php if (isset($data['Q5A2'])) echo $data['Q5A2'] ?>" type="text" class="form-control" style="width:250px;" id="input-2" value="<?php echo set_value('Q5A2') ?>" value="0" /></td>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <label>
                <h6> Task 3: How eco-friendly are the vehicles in your school?</h6>
            </label>
            <p> In this section, you will maintain a record of vehicles used by your school. Type of fuel used by vehicles is a critical parameters which indicates if your vehicles are eco-friendly.</p>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
            <label class="control-label"><span class="cube">3</span>What is the ownership of the vehicles used by your
                school? Please choose what is applicable.</label>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 1) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 1 ? "checked" : "" ?>>
                    School does not use or own vehicles </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 2) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 2 ? "checked" : "" ?>>
                    Operator-owned vehicles / private vehicles </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 3) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 3 ? "checked" : "" ?>>
                    School-owned vehicles </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 4) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 4 ? "checked" : "" ?>>
                    A combination of school-owned and operator-owned vehicles / private vehicles </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 5) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 5 ? "checked" : "" ?>>
                    Hired-vehicles (JNV schools) </label>
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
                            data-tooltip="Schools who use a combination of school-owned and operator-owned vehicles have to upload information only about school-owned vehicles. Do not add any personal vehicles."> <span class="badge"> ? </span> </a> </label>
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
                    <label>Vans/SUVs</label>
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
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="b1" type="number" min="0"
                           name="Q6A2S1B1" placeholder="<?php if (isset($data['Q6A2S1B1'])) echo $data['Q6A2S1B1'] ?>"
                           value="<?php echo set_value('Q6A2S1B1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryPrimaryDetails()" id="c1" type="number" min="0"
                           name="Q6A2S1C1" placeholder="<?php if (isset($data['Q6A2S1C1'])) echo $data['Q6A2S1C1'] ?>"
                           value="<?php echo set_value('Q6A2S1C1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="v1" type="number" min="0"
                           name="Q6A2S1V1" placeholder="<?php if (isset($data['Q6A2S1V1'])) echo $data['Q6A2S1V1'] ?>"
                           value="<?php echo set_value('Q6A2S1V1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="o1" type="number" min="0"
                           name="Q6A2S1O1" placeholder="<?php if (isset($data['Q6A2S1O1'])) echo $data['Q6A2S1O1'] ?>"
                           value="<?php echo set_value('Q6A2S1O1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="t1" type="number" min="0"
                           name="Q6A2S1T1" placeholder="<?php if (isset($data['Q6A2S1T1'])) echo $data['Q6A2S1T1'] ?>"
                           value="<?php echo set_value('Q6A2S1T1'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-2">
                    <label>No. of vehicles more than eight years old</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="b2" type="number" min="0"
                           name="Q6A2S1B2" placeholder="<?php if (isset($data['Q6A2S1B2'])) echo $data['Q6A2S1B2'] ?>"
                           value="<?php echo set_value('Q6A2S1B2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="c2" type="number" min="0"
                           name="Q6A2S1C2" placeholder="<?php if (isset($data['Q6A2S1C2'])) echo $data['Q6A2S1C2'] ?>"
                           value="<?php echo set_value('Q6A2S1C2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="v2" type="number" min="0"
                           name="Q6A2S1V2" placeholder="<?php if (isset($data['Q6A2S1V2'])) echo $data['Q6A2S1V2'] ?>"
                           value="<?php echo set_value('Q6A2S1V2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="o2" type="number" min="0"
                           name="Q6A2S1O2" placeholder="<?php if (isset($data['Q6A2S1O2'])) echo $data['Q6A2S1O2'] ?>"
                           value="<?php echo set_value('Q6A2S1O2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="t2" type="number" min="0"
                           name="Q6A2S1T2" placeholder="<?php if (isset($data['Q6A2S1T2'])) echo $data['Q6A2S1T2'] ?>"
                           value="<?php echo set_value('Q6A2S1T2'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group1 row">
                <div class="col-xs-2">
                    <label>No. of Air conditioned vehicles</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="b3" type="number" min="0"
                           name="Q6A2S1B3" placeholder="<?php if (isset($data['Q6A2S1B3'])) echo $data['Q6A2S1B3'] ?>"
                           value="<?php echo set_value('Q6A2S1B3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="c3" type="number" min="0"
                           name="Q6A2S1C3" placeholder="<?php if (isset($data['Q6A2S1C3'])) echo $data['Q6A2S1C3'] ?>"
                           value="<?php echo set_value('Q6A2S1C3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="v3" type="number" min="0"
                           name="Q6A2S1V3" placeholder="<?php if (isset($data['Q6A2S1V3'])) echo $data['Q6A2S1V3'] ?>"
                           value="<?php echo set_value('Q6A2S1V3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="o3" type="number" min="0"
                           name="Q6A2S1O3" placeholder="<?php if (isset($data['Q6A2S1O3'])) echo $data['Q6A2S1O3'] ?>"
                           value="<?php echo set_value('Q6A2S1O3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="t3" type="number" min="0"
                           name="Q6A2S1T3" placeholder="<?php if (isset($data['Q6A2S1T3'])) echo $data['Q6A2S1T3'] ?>"
                           value="<?php echo set_value('Q6A2S1T3'); ?>" readonly/>
                </div>
            </div>

            <div class="form-group1 row">
                <div class="col-xs-2">
                    <label>Authorised parking available <a class="tt" data-tooltip="For parking area, give the number of vehicles (Of the total) that have designated parking areas."><span class="badge">?</span></a></label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="b5" type="number" min="0"
                           name="Q6A2S1B5" placeholder="<?php if (isset($data['Q6A2S1B5'])) echo $data['Q6A2S1B5'] ?>"
                           value="<?php echo set_value('Q6A2S1B5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="c5" type="number" min="0"
                           name="Q6A2S1C5" placeholder="<?php if (isset($data['Q6A2S1C5'])) echo $data['Q6A2S1C5'] ?>"
                           value="<?php echo set_value('Q6A2S1C5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="v5" type="number" min="0"
                           name="Q6A2S1V5" placeholder="<?php if (isset($data['Q6A2S1V5'])) echo $data['Q6A2S1V5'] ?>"
                           value="<?php echo set_value('Q6A2S1V5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="o5" type="number" min="0"
                           name="Q6A2S1O5" placeholder="<?php if (isset($data['Q6A2S1O5'])) echo $data['Q6A2S1O5'] ?>"
                           value="<?php echo set_value('Q6A2S1O5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="t5" type="number" min="0"
                           name="Q6A2S1T5" placeholder="<?php if (isset($data['Q6A2S1T5'])) echo $data['Q6A2S1T5'] ?>"
                           value="<?php echo set_value('Q6A2S1T5'); ?>" readonly/>
                </div>
            </div>
            <!--div class="form-group1 row">
                <div class="col-xs-2">
                    <label>Total</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="b6" type="type" min="0"
                           name="Q6A2S1B6" placeholder="<?php if (isset($data['Q6A2S1B6'])) echo $data['Q6A2S1B6'] ?>"
                           value="<?php echo set_value('Q6A2S1B6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="c6" type="type" min="0"
                           name="Q6A2S1C6" placeholder="<?php if (isset($data['Q6A2S1C6'])) echo $data['Q6A2S1C6'] ?>"
                           value="<?php echo set_value('Q6A2S1C6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="v6" type="type" min="0"
                           name="Q6A2S1V6" placeholder="<?php if (isset($data['Q6A2S1V6'])) echo $data['Q6A2S1V6'] ?>"
                           value="<?php echo set_value('Q6A2S1V6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="o6" type="type" min="0"
                           name="Q6A2S1O6" placeholder="<?php if (isset($data['Q6A2S1O6'])) echo $data['Q6A2S1O6'] ?>"
                           value="<?php echo set_value('Q6A2S1O6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="PrimaryDetails()" id="t6" type="number" min="0"
                           name="Q6A2S1T6" placeholder="<?php if (isset($data['Q6A2S1T6'])) echo $data['Q6A2S1T6'] ?>"
                           value="<?php echo set_value('Q6A2S1T6'); ?>" />
                </div>
            </div-->
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
        <label class="control-label">Upload supporting documents</label>
        <br/>
        • Picture of school owned vehicles and parking area<br>
        Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image
        File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong>
        <div class="clearfix">&nbsp;</div>
        <button class="btn uploadbtn upload" data-id="Fuels" data-toggle="modal" data-target="#airModal" type="button"> UPLOAD FILES </button>
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
            <?php foreach ($filesfules as $a) { ?>
                <tr id="index<?php echo $a->id; ?>">
                    <?php $Text = str_replace(" ", "_", $a->name . "_Fuels_"); ?>
                    <td class="upload edit"><?php echo str_replace($Text, " ", $a->file_name); ?></td>
                    <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $a->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    if (isset($data['Q6A1']))
        if ($data['Q6A1'] == 1 || $data['Q6A1'] == 2)
            echo '<div class="form-group" id="vehicle2" style="display:none;">';
        else
            echo '<div class="form-group" id="vehicle2">';
    else
        echo '<div class="form-group" id="vehicle2" style="display:none;">';

    ?>
    <label class="control-label"><span class="cube">3(b)</span>Specify the type of fuel used by your school’s vehicles: <a class="tt" data-tooltip="The below is an indicative list of type of vehicles.  If the school has other than these vehicles, please provide details in ‘Other vehicles’ section."><span
                    class="badge">?</span></a></label>
    <table class="table">
        <tr class="text-center">
            <td>Type of vehicles</td>
            <td>Diesel</td>
            <td>Petrol</td>
            <td>LPG</td>
            <td>CNG</td>
            <td>Hybrid</td>
            <td>Electric/Bio Fuel</td>
            <td>Total</td>
        </tr>
        <tr>
            <td>Buses</td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3D1"
                       type="number" min="0" name="Q6A2S3D1"
                       placeholder="<?php if (isset($data['Q6A2S3D1'])) echo $data['Q6A2S3D1'] ?>"
                       value="<?php echo set_value('Q6A2S3D1'); ?>" /></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3P1"
                       type="number" min="0" name="Q6A2S3P1"
                       placeholder="<?php if (isset($data['Q6A2S3P1'])) echo $data['Q6A2S3P1'] ?>"
                       value="<?php echo set_value('Q6A2S3P1'); ?>" /></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3L1"
                       type="number" min="0" name="Q6A2S3L1"
                       placeholder="<?php if (isset($data['Q6A2S3L1'])) echo $data['Q6A2S3L1'] ?>"
                       value="<?php echo set_value('Q6A2S3L1'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3C1"
                       type="number" min="0" name="Q6A2S3C1"
                       placeholder="<?php if (isset($data['Q6A2S3C1'])) echo $data['Q6A2S3C1'] ?>"
                       value="<?php echo set_value('Q6A2S3C1'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3E1"
                       type="number" min="0" name="Q6A2S3E1"
                       placeholder="<?php if (isset($data['Q6A2S3E1'])) echo $data['Q6A2S3E1'] ?>"
                       value="<?php echo set_value('Q6A2S3E1'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3H1"
                       type="number" min="0" name="Q6A2S3H1"
                       placeholder="<?php if (isset($data['Q6A2S3H1'])) echo $data['Q6A2S3H1'] ?>"
                       value="<?php echo set_value('Q6A2S3H1'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3B1"
                       type="number" min="0" name="Q6A2S3B1"
                       placeholder="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"
                       value="<?php echo set_value('Q6A2S3B1'); ?>" readonly/></td>
        </tr>
        <tr>
            <td>Cars</td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3D2"
                       type="number" min="0" name="Q6A2S3B1"
                       placeholder="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"
                       value="<?php echo set_value('Q6A2S3B1'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3P2"
                       type="number" min="0" name="Q6A2S3D2"
                       placeholder="<?php if (isset($data['Q6A2S3D2'])) echo $data['Q6A2S3D2'] ?>"
                       value="<?php echo set_value('Q6A2S3D2'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3L2"
                       type="number" min="0" name="Q6A2S3P2"
                       placeholder="<?php if (isset($data['Q6A2S3P2'])) echo $data['Q6A2S3P2'] ?>"
                       value="<?php echo set_value('Q6A2S3P2'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3C2"
                       type="number" min="0" name="Q6A2S3L2"
                       placeholder="<?php if (isset($data['Q6A2S3L2'])) echo $data['Q6A2S3L2'] ?>"
                       value="<?php echo set_value('Q6A2S3L2'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3E2"
                       type="number" min="0" name="Q6A2S3C2"
                       placeholder="<?php if (isset($data['Q6A2S3C2'])) echo $data['Q6A2S3C2'] ?>"
                       value="<?php echo set_value('Q6A2S3C2'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3H2"
                       type="number" min="0" name="Q6A2S3E2"
                       placeholder="<?php if (isset($data['Q6A2S3E2'])) echo $data['Q6A2S3E2'] ?>"
                       value="<?php echo set_value('Q6A2S3E2'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3B2"
                       type="number" min="0" name="Q6A2S3H2"
                       placeholder="<?php if (isset($data['Q6A2S3H2'])) echo $data['Q6A2S3H2'] ?>"
                       value="<?php echo set_value('Q6A2S3H2'); ?>" readonly/></td>
        </tr>
        <tr>
            <td>Vans</td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3D3"
                       type="number" min="0" name="Q6A2S3D3"
                       placeholder="<?php if (isset($data['Q6A2S3D3'])) echo $data['Q6A2S3D3'] ?>"
                       value="<?php echo set_value('Q6A2S3D3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3P3"
                       type="number" min="0" name="Q6A2S3P3"
                       placeholder="<?php if (isset($data['Q6A2S3P3'])) echo $data['Q6A2S3P3'] ?>"
                       value="<?php echo set_value('Q6A2S3P3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3L3"
                       type="number" min="0" name="Q6A2S3L3"
                       placeholder="<?php if (isset($data['Q6A2S3L3'])) echo $data['Q6A2S3L3'] ?>"
                       value="<?php echo set_value('Q6A2S3L3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3C3"
                       type="number" min="0" name="Q6A2S3C3"
                       placeholder="<?php if (isset($data['Q6A2S3C3'])) echo $data['Q6A2S3C3'] ?>"
                       value="<?php echo set_value('Q6A2S3C3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3E3"
                       type="number" min="0" name="Q6A2S3E3"
                       placeholder="<?php if (isset($data['Q6A2S3E3'])) echo $data['Q6A2S3E3'] ?>"
                       value="<?php echo set_value('Q6A2S3E3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3H3"
                       type="number" min="0" name="Q6A2S3H3"
                       placeholder="<?php if (isset($data['Q6A2S3H3'])) echo $data['Q6A2S3H3'] ?>"
                       value="<?php echo set_value('Q6A2S3H3'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3B3"
                       type="number" min="0" name="Q6A2S3B3"
                       placeholder="<?php if (isset($data['Q6A2S3B3'])) echo $data['Q6A2S3B3'] ?>"
                       value="<?php echo set_value('Q6A2S3B3'); ?>" readonly/></td>
        </tr>
        <tr>
            <td>Other vehicles</td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3D4"
                       type="number" min="0" name="Q6A2S3D4"
                       placeholder="<?php if (isset($data['Q6A2S3D4'])) echo $data['Q6A2S3D4'] ?>"
                       value="<?php echo set_value('Q6A2S3D4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3P4"
                       type="number" min="0" name="Q6A2S3P4"
                       placeholder="<?php if (isset($data['Q6A2S3P4'])) echo $data['Q6A2S3P4'] ?>"
                       value="<?php echo set_value('Q6A2S3P4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3L4"
                       type="number" min="0" name="Q6A2S3L4"
                       placeholder="<?php if (isset($data['Q6A2S3L4'])) echo $data['Q6A2S3L4'] ?>"
                       value="<?php echo set_value('Q6A2S3L4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3C4"
                       type="number" min="0" name="Q6A2S3C4"
                       placeholder="<?php if (isset($data['Q6A2S3C4'])) echo $data['Q6A2S3C4'] ?>"
                       value="<?php echo set_value('Q6A2S3C4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3E4"
                       type="number" min="0" name="Q6A2S3E4"
                       placeholder="<?php if (isset($data['Q6A2S3E4'])) echo $data['Q6A2S3E4'] ?>"
                       value="<?php echo set_value('Q6A2S3E4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3H4"
                       type="number" min="0" name="Q6A2S3H4"
                       placeholder="<?php if (isset($data['Q6A2S3H4'])) echo $data['Q6A2S3H4'] ?>"
                       value="<?php echo set_value('Q6A2S3H4'); ?>"/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3B4"
                       type="number" min="0" name="Q6A2S3B4"
                       placeholder="<?php if (isset($data['Q6A2S3B4'])) echo $data['Q6A2S3B4'] ?>"
                       value="<?php echo set_value('Q6A2S3B4'); ?>" readonly/></td>
        </tr>
        <tr>
            <td>Sub-Total</td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3D5"
                       type="number" min="0" name="Q6A2S3D5"
                       placeholder="<?php if (isset($data['Q6A2S3D5'])) echo $data['Q6A2S3D5'] ?>"
                       value="<?php echo set_value('Q6A2S3D5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3P5"
                       type="number" min="0" name="Q6A2S3P5"
                       placeholder="<?php if (isset($data['Q6A2S3P5'])) echo $data['Q6A2S3P5'] ?>"
                       value="<?php echo set_value('Q6A2S3P5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3L5"
                       type="number" min="0" name="Q6A2S3L5"
                       placeholder="<?php if (isset($data['Q6A2S3L5'])) echo $data['Q6A2S3L5'] ?>"
                       value="<?php echo set_value('Q6A2S3L5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3C5"
                       type="number" min="0" name="Q6A2S3C5"
                       placeholder="<?php if (isset($data['Q6A2S3C5'])) echo $data['Q6A2S3C5'] ?>"
                       value="<?php echo set_value('Q6A2S3C5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3E5"
                       type="number" min="0" name="Q6A2S3E5"
                       placeholder="<?php if (isset($data['Q6A2S3E5'])) echo $data['Q6A2S3E5'] ?>"
                       value="<?php echo set_value('Q6A2S3E5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3H5"
                       type="number" min="0" name="Q6A2S3H5"
                       placeholder="<?php if (isset($data['Q6A2S3H5'])) echo $data['Q6A2S3H5'] ?>"
                       value="<?php echo set_value('Q6A2S3H5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onChange="PrimaryDetails2()" id="S3B5"
                       type="number" min="0" name="Q6A2S3B5"
                       placeholder="<?php if (isset($data['Q6A2S3B5'])) echo $data['Q6A2S3B5'] ?>"
                       value="<?php echo set_value('Q6A2S3B5'); ?>" readonly/></td>
        </tr>
    </table>
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
</div>
<div class="form-group">
    <label>
        <h6> Task 4: How do you travel to school every day? </h6>
    </label>
    <p> To know how the students, teachers and other staff in your school usually travel, the teacher/co-ordinator in the
        team should ask individual class monitors to record the commuting practices of his/her classmates and the
        teachers, and forward the data to the Audit team. After completing the survey, provide the compiled information
        below.</p>
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A1S1" type="number" min="0" name="Q7A1S1"
                   placeholder="<?php if (isset($data['Q7A1S1'])) echo $data['Q7A1S1'] ?>"
                   value="<?php echo set_value('Q7A1S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A1S2" type="number" min="0" name="Q7A1S2"
                   placeholder="<?php if (isset($data['Q7A1S2'])) echo $data['Q7A1S2'] ?>"
                   value="<?php echo set_value('Q7A1S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A1S3" type="number" min="0" name="Q7A1S3"
                   placeholder="<?php if (isset($data['Q7A1S3'])) echo $data['Q7A1S3'] ?>"
                   value="<?php echo set_value('Q7A1S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A2S1" type="number" min="0" name="Q7A2S1"
                   placeholder="<?php if (isset($data['Q7A2S1'])) echo $data['Q7A2S1'] ?>"
                   value="<?php echo set_value('Q7A2S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A2S2" type="number" min="0" name="Q7A2S2"
                   placeholder="<?php if (isset($data['Q7A2S2'])) echo $data['Q7A2S2'] ?>"
                   value="<?php echo set_value('Q7A2S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A2S3" type="number" min="0" name="Q7A2S3"
                   placeholder="<?php if (isset($data['Q7A2S3'])) echo $data['Q7A2S3'] ?>"
                   value="<?php echo set_value('Q7A2S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A3S1" type="number" min="0" name="Q7A3S1"
                   placeholder="<?php if (isset($data['Q7A3S1'])) echo $data['Q7A3S1'] ?>"
                   value="<?php echo set_value('Q7A3S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A3S2" type="number" min="0" name="Q7A3S2"
                   placeholder="<?php if (isset($data['Q7A3S2'])) echo $data['Q7A3S2'] ?>"
                   value="<?php echo set_value('Q7A3S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A3S3" type="number" min="0" name="Q7A3S3"
                   placeholder="<?php if (isset($data['Q7A3S3'])) echo $data['Q7A3S3'] ?>"
                   value="<?php echo set_value('Q7A3S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A4S1" type="number" min="0" name="Q7A4S1"
                   placeholder="<?php if (isset($data['Q7A4S1'])) echo $data['Q7A4S1'] ?>"
                   value="<?php echo set_value('Q7A4S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A4S2" type="number" min="0" name="Q7A4S2"
                   placeholder="<?php if (isset($data['Q7A4S2'])) echo $data['Q7A4S2'] ?>"
                   value="<?php echo set_value('Q7A4S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A4S3" type="number" min="0" name="Q7A4S3"
                   placeholder="<?php if (isset($data['Q7A4S3'])) echo $data['Q7A4S3'] ?>"
                   value="<?php echo set_value('Q7A4S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A5S1" type="number" min="0" name="Q7A5S1"
                   placeholder="<?php if (isset($data['Q7A5S1'])) echo $data['Q7A5S1'] ?>"
                   value="<?php echo set_value('Q7A5S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A5S2" type="number" min="0" name="Q7A5S2"
                   placeholder="<?php if (isset($data['Q7A5S2'])) echo $data['Q7A5S2'] ?>"
                   value="<?php echo set_value('Q7A5S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A5S3" type="number" min="0" name="Q7A5S3"
                   placeholder="<?php if (isset($data['Q7A5S3'])) echo $data['Q7A5S3'] ?>"
                   value="<?php echo set_value('Q7A5S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A6S1" type="number" min="0" name="Q7A6S1"
                   placeholder="<?php if (isset($data['Q7A6S1'])) echo $data['Q7A6S1'] ?>"
                   value="<?php echo set_value('Q7A6S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A6S2" type="number" min="0" name="Q7A6S2"
                   placeholder="<?php if (isset($data['Q7A6S2'])) echo $data['Q7A6S2'] ?>"
                   value="<?php echo set_value('Q7A6S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A6S3" type="number" min="0" name="Q7A6S3"
                   placeholder="<?php if (isset($data['Q7A6S3'])) echo $data['Q7A6S3'] ?>"
                   value="<?php echo set_value('Q7A6S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A7S1" type="number" min="0" name="Q7A7S1"
                   placeholder="<?php if (isset($data['Q7A7S1'])) echo $data['Q7A7S1'] ?>"
                   value="<?php echo set_value('Q7A7S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A7S2" type="number" min="0" name="Q7A7S2"
                   placeholder="<?php if (isset($data['Q7A7S2'])) echo $data['Q7A7S2'] ?>"
                   value="<?php echo set_value('Q7A7S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A7S3" type="number" min="0" name="Q7A7S3"
                   placeholder="<?php if (isset($data['Q7A7S3'])) echo $data['Q7A7S3'] ?>"
                   value="<?php echo set_value('Q7A7S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A8S1" type="number" min="0" name="Q7A8S1"
                   placeholder="<?php if (isset($data['Q7A8S1'])) echo $data['Q7A8S1'] ?>"
                   value="<?php echo set_value('Q7A8S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A8S2" type="number" min="0" name="Q7A8S2"
                   placeholder="<?php if (isset($data['Q7A8S2'])) echo $data['Q7A8S2'] ?>"
                   value="<?php echo set_value('Q7A8S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A8S3" type="number" min="0" name="Q7A8S3"
                   placeholder="<?php if (isset($data['Q7A8S3'])) echo $data['Q7A8S3'] ?>"
                   value="<?php echo set_value('Q7A8S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A9S1" type="number" min="0" name="Q7A9S1"
                   placeholder="<?php if (isset($data['Q7A9S1'])) echo $data['Q7A9S1'] ?>"
                   value="<?php echo set_value('Q7A9S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A9S2" type="number" min="0" name="Q7A9S2"
                   placeholder="<?php if (isset($data['Q7A9S2'])) echo $data['Q7A9S2'] ?>"
                   value="<?php echo set_value('Q7A9S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A9S3" type="number" min="0" name="Q7A9S3"
                   placeholder="<?php if (isset($data['Q7A9S3'])) echo $data['Q7A9S3'] ?>"
                   value="<?php echo set_value('Q7A9S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A10S1" type="number" min="0" name="Q7A10S1"
                   placeholder="<?php if (isset($data['Q7A10S1'])) echo $data['Q7A10S1'] ?>"
                   value="<?php echo set_value('Q7A10S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A10S2" type="number" min="0" name="Q7A10S2"
                   placeholder="<?php if (isset($data['Q7A10S2'])) echo $data['Q7A10S2'] ?>"
                   value="<?php echo set_value('Q7A10S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A10S3" type="number" min="0" name="Q7A10S3"
                   placeholder="<?php if (isset($data['Q7A10S3'])) echo $data['Q7A10S3'] ?>"
                   value="<?php echo set_value('Q7A10S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A11S1" type="number" min="0" name="Q7A11S1"
                   placeholder="<?php if (isset($data['Q7A11S1'])) echo $data['Q7A11S1'] ?>"
                   value="<?php echo set_value('Q7A11S1'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A11S2" type="number" min="0" name="Q7A11S2"
                   placeholder="<?php if (isset($data['Q7A11S2'])) echo $data['Q7A11S2'] ?>"
                   value="<?php echo set_value('Q7A11S2'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
                   id="Q7A11S3" type="number" min="0" name="Q7A11S3"
                   placeholder="<?php if (isset($data['Q7A11S3'])) echo $data['Q7A11S3'] ?>"
                   value="<?php echo set_value('Q7A11S3'); ?>"/>
        </div>
        <div class="col-xs-2">
            <input class="form-control space-textbox" onkeyup="computeTransport()" onchange="computeTransport()"
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
    <label class="control-label"> <span class="cube">5</span>How many students suffer from breathing and coughing problems? <a
                class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/air/#pmLevels"
                target="_blank"> </a></label>
    <input type="number" min="0" name="Q8A1" id="Q8A1" class="form-control"
           placeholder="<?php if (isset($data['Q8A1'])) echo $data['Q8A1'] ?>"
           value="<?php echo set_value('Q8A1'); ?>"/>
</div>
<div class="form-group" id="WastePolicy">
    <label class="control-label">Please upload supporting documents:</label>
    <br>
    &bull; Pictures of audit team doing survey<br/>
    Please upload all supporting documents related to this section here. Note, files must be one of the following
    formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
    File size per document should not exceed <strong>100 KB.</strong> <br/>
    <br/>
    <button class="btn uploadbtn upload" data-id="Supporting Document Air" data-toggle="modal" data-target="#airModal"
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
        <?php foreach ($files as $f) { ?>
            <tr id="index<?php echo $f->id; ?>">
                <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Air_"); ?>
                <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="text-center">
    <button type="button" class="org-btn" id="airprevious" value="movenext"
            onClick="javasript:window.location.href='<?php echo base_url('general'); ?>'">Previous </button>
    <button type="submit" class="org-btn" id="airnext" value="movenext">Next</button>
    <button type="button" class="org-btn submit button" id="airsave">Save and Resume Later</button>
</div>
<?php echo form_close(); ?>
</div>
</div>
<!-- /.container -->
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
</div>
</div>
<script type="text/javascript">
    $('.close').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/klen-TOrXFA");
    });
    $('body').click(function () {
        $('#video').attr("src", "https://www.youtube.com/embed/klen-TOrXFA");
    });

    $(document).ready(function () {
        $('#airprevious').on('click', function (data) {
            var fd = $('#PrimaryAir').serialize();
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
            var fd = $('#PrimaryAir').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airajax') ?>',
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
    $("input[name='Q4A1']").change(function(){
        var total_classroom=$("input[name='Q4A1']").val();
        $("#input-1").val(total_classroom);
    });

    $("#input-2").change(function(){
        var total_classroom=$("#input-1").val();
        var total_existing_classroom=$("#input-2").val();
        if(total_classroom<total_existing_classroom){
            alert("The total no. of well-ventilated classroom can not exceed the no in Q(1).");
            $("#input-2").val('0');
        }
    });
    
</script>
