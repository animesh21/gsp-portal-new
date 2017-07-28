<?php $this->load->view('header'); ?>
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
            <h1>AIR</h1>
            <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#myModal"><img
                            src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div>
            <p> The Air section involves finding out your school's contribution in polluting the air. The information
                will help in devising strategies for clean air in the coming years.
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix"></div>
            <b>The unit of measurement to be used in the Air section is square meter (m<sup>2</sup>).</b> </p>
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

        <?php echo form_open('air/set', array('id' => 'air')); ?>
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
            <div class="form-group row">
                <div class="col-xs-1"> 1</div>
                <div class="col-xs-3">
                    <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1A1S1" type="text" name="Q1A1S1"
                           placeholder="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"
                           value="<?php echo set_value('Q1A1S1'); ?>"/>
                </div>
                <div class="col-xs-3">
                    <?php echo form_error('name'); ?>
                    <input class="form-control space-textbox" id="Q1A1S3" type="text" name="Q1A1S3"
                           placeholder="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"
                           value="<?php echo set_value('Q1A1S3'); ?>"/>
                </div>

                <div class="col-xs-3">
                    <?php echo form_error('email'); ?>
                    <input class="form-control space-textbox" id="Q1A1S2" type="email" name="Q1A1S2"
                           placeholder="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"
                           value="<?php echo set_value('Q1A1S2'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-1"> 2</div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1A2S1" type="text" name="Q1A2S1"
                           placeholder="<?php if (isset($data['Q1A2S1'])) echo $data['Q1A2S1'] ?>"
                           value="<?php echo set_value('Q1A2S1'); ?>"/>
                </div>
                <div class="col-xs-3">
                    <?php echo form_error('name'); ?>
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
            <div class="form-group row">
                <div class="col-xs-1"> 3</div>
                <div class="col-xs-3">
                    <input class="form-control space-textbox" id="Q1A3S1" type="text" name="Q1A3S1"
                           placeholder="<?php if (isset($data['Q1A3S1'])) echo $data['Q1A3S1'] ?>"
                           value="<?php echo set_value('Q1A3S1'); ?>"/>
                </div>
                <div class="col-xs-3">
                    <?php echo form_error('name'); ?>
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
                    <div class="col-xs-3">
                        <?php echo form_error('name1'); ?>
                        <input class="form-control space-textbox" id="Q2A1S1" type="text" name="Q2A1S1"
                               placeholder="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"
                               value="<?php echo set_value('Q2A1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control space-textbox" id="Q2A1S3" type="text" name="Q2A1S3"
                               placeholder="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"
                               value="<?php echo set_value('Q2A1S3'); ?>"/>
                    </div>

                    <div class="col-xs-3">
                        <?php echo form_error('email1'); ?>
                        <input class="form-control space-textbox" id="Q2A1S2" type="email" name="Q2A1S2"
                               placeholder="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"
                               value="<?php echo set_value('Q2A1S2'); ?>"/>
                    </div>
                </div>
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                    <div class="col-xs-3">
                        <?php echo form_error('name2'); ?>
                        <input class="form-control space-textbox" id="Q3A1S1" type="text" name="Q3A1S1"
                               placeholder="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"
                               value="<?php echo set_value('Q3A1S1'); ?>"/>
                    </div>
                    <div class="col-xs-3">
                        <?php echo form_error('email2'); ?>
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <div class="form-group row">
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
                <label><h6>Task 2: Are the rooms in your school well-ventilated?</h6></label>
                <br>
                1. For this exercise, classrooms that are occupied by students regularly should be considered. Do not
                add laboratories or the auditorium.<br>
                2. Openings: are there any windows and ventilators which can be opened on regular basis and can be
                opened anytime? <br>
                3. This exercise should be done by schools with centrally air conditioning system also. <br>
                4. The exercise should be carried out for ten classrooms only. Sample size should have representation
                from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and
                higher secondary. If your school is up to Standard X only, then, at your discretion, you can add a class
                to any tier. <br>
                5. This activity is for all schools (non-air-conditioned buildings as well as air-conditioned
                buildings).
            </div>
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
            <label class="control-label"><span class="cube">2</span>To calculate the Window-floor ratio of classrooms in
                your school, please fill the table below:</label>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Details of the classroom (e.g. Class II section b)</label>
                </div>
                <div class="col-xs-2">
                    <label>X = Area of floor (LxB) (square meters)</label>
                </div>
                <div class="col-xs-2">
                    <label>Y = Sum of area of openings ∑ (LxH)</label>
                </div>
                <div class="col-xs-2">
                    <label>Percentage of the floor area being ventilated (Y/X x 100)</label>
                </div>
            </div>
            <div class="form-group row" id="A1S1"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 0)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A1S1" type="text"
                           min="0" name="Q5A1S1" placeholder="<?php if (isset($data['Q5A1S1'])) echo $data['Q5A1S1'] ?>"
                           value="<?php echo set_value('Q5A1S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A1S2" type="number"
                           min="0" name="Q5A1S2" placeholder="<?php if (isset($data['Q5A1S2'])) echo $data['Q5A1S2'] ?>"
                           value="<?php echo set_value('Q5A1S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A1S3" type="number"
                           min="0" name="Q5A1S3" placeholder="<?php if (isset($data['Q5A1S3'])) echo $data['Q5A1S3'] ?>"
                           value="<?php echo set_value('Q5A1S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A1S4" type="number"
                           min="0" name="Q5A1S4" placeholder="<?php if (isset($data['Q5A1S4'])) echo $data['Q5A1S4'] ?>"
                           value="<?php echo set_value('Q5A1S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S2"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 1)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A2S1" type="text"
                           min="0" name="Q5A2S1" placeholder="<?php if (isset($data['Q5A2S1'])) echo $data['Q5A2S1'] ?>"
                           value="<?php echo set_value('Q5A2S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A2S2" type="number"
                           min="0" name="Q5A2S2" placeholder="<?php if (isset($data['Q5A2S2'])) echo $data['Q5A2S2'] ?>"
                           value="<?php echo set_value('Q5A2S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A2S3" type="number"
                           min="0" name="Q5A2S3" placeholder="<?php if (isset($data['Q5A2S3'])) echo $data['Q5A2S3'] ?>"
                           value="<?php echo set_value('Q5A2S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A2S4" type="number"
                           min="0" name="Q5A2S4" placeholder="<?php if (isset($data['Q5A2S4'])) echo $data['Q5A2S4'] ?>"
                           value="<?php echo set_value('Q5A2S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S3"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 2)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>
            >
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A3S1" type="text"
                           min="0" name="Q5A3S1" placeholder="<?php if (isset($data['Q5A3S1'])) echo $data['Q5A3S1'] ?>"
                           value="<?php echo set_value('Q5A3S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A3S2" type="number"
                           min="0" name="Q5A3S2" placeholder="<?php if (isset($data['Q5A3S2'])) echo $data['Q5A3S2'] ?>"
                           value="<?php echo set_value('Q5A3S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A3S3" type="number"
                           min="0" name="Q5A3S3" placeholder="<?php if (isset($data['Q5A3S3'])) echo $data['Q5A3S3'] ?>"
                           value="<?php echo set_value('Q5A3S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A3S4" type="number"
                           min="0" name="Q5A3S4" placeholder="<?php if (isset($data['Q5A3S4'])) echo $data['Q5A3S4'] ?>"
                           value="<?php echo set_value('Q5A3S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S4"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 3)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A4S1" type="text"
                           min="0" name="Q5A4S1" placeholder="<?php if (isset($data['Q5A4S1'])) echo $data['Q5A4S1'] ?>"
                           value="<?php echo set_value('Q5A4S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A4S2" type="number"
                           min="0" name="Q5A4S2" placeholder="<?php if (isset($data['Q5A4S2'])) echo $data['Q5A4S2'] ?>"
                           value="<?php echo set_value('Q5A4S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A4S3" type="number"
                           min="0" name="Q5A4S3" placeholder="<?php if (isset($data['Q5A4S3'])) echo $data['Q5A4S3'] ?>"
                           value="<?php echo set_value('Q5A4S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A4S4" type="number"
                           min="0" name="Q5A4S4" placeholder="<?php if (isset($data['Q5A4S4'])) echo $data['Q5A4S4'] ?>"
                           value="<?php echo set_value('Q5A4S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S5"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 4)
                        echo " style='display:block;'";
                    else
                        echo " style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A5S1" type="text"
                           min="0" name="Q5A5S1" placeholder="<?php if (isset($data['Q5A5S1'])) echo $data['Q5A5S1'] ?>"
                           value="<?php echo set_value('Q5A5S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A5S2" type="number"
                           min="0" name="Q5A5S2" placeholder="<?php if (isset($data['Q5A5S2'])) echo $data['Q5A5S2'] ?>"
                           value="<?php echo set_value('Q5A5S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A5S3" type="number"
                           min="0" name="Q5A5S3" placeholder="<?php if (isset($data['Q5A5S3'])) echo $data['Q5A5S3'] ?>"
                           value="<?php echo set_value('Q5A5S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A5S4" type="number"
                           min="0" name="Q5A5S4" placeholder="<?php if (isset($data['Q5A5S4'])) echo $data['Q5A5S4'] ?>"
                           value="<?php echo set_value('Q5A5S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S6"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 5)
                        echo " style='display:block;'";
                    else
                        echo " style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A6S1" type="text"
                           min="0" name="Q5A6S1" placeholder="<?php if (isset($data['Q5A6S1'])) echo $data['Q5A6S1'] ?>"
                           value="<?php echo set_value('Q5A6S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A6S2" type="number"
                           min="0" name="Q5A6S2" placeholder="<?php if (isset($data['Q5A6S2'])) echo $data['Q5A6S2'] ?>"
                           value="<?php echo set_value('Q5A6S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A6S3" type="number"
                           min="0" name="Q5A6S3" placeholder="<?php if (isset($data['Q5A6S3'])) echo $data['Q5A6S3'] ?>"
                           value="<?php echo set_value('Q5A6S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A6S4" type="number"
                           min="0" name="Q5A6S4" placeholder="<?php if (isset($data['Q5A6S4'])) echo $data['Q5A6S4'] ?>"
                           value="<?php echo set_value('Q5A6S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S7"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 6)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A7S1" type="text"
                           min="0" name="Q5A7S1" placeholder="<?php if (isset($data['Q5A7S1'])) echo $data['Q5A7S1'] ?>"
                           value="<?php echo set_value('Q5A7S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A7S2" type="number"
                           min="0" name="Q5A7S2" placeholder="<?php if (isset($data['Q5A7S2'])) echo $data['Q5A7S2'] ?>"
                           value="<?php echo set_value('Q5A7S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A7S3" type="number"
                           min="0" name="Q5A7S3" placeholder="<?php if (isset($data['Q5A7S3'])) echo $data['Q5A7S3'] ?>"
                           value="<?php echo set_value('Q5A7S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A7S4" type="number"
                           min="0" name="Q5A7S4" placeholder="<?php if (isset($data['Q5A7S4'])) echo $data['Q5A7S4'] ?>"
                           value="<?php echo set_value('Q5A7S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S8"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 7)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A8S1" type="text"
                           min="0" name="Q5A8S1" placeholder="<?php if (isset($data['Q5A8S1'])) echo $data['Q5A8S1'] ?>"
                           value="<?php echo set_value('Q5A8S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A8S2" type="number"
                           min="0" name="Q5A8S2" placeholder="<?php if (isset($data['Q5A8S2'])) echo $data['Q5A8S2'] ?>"
                           value="<?php echo set_value('Q5A8S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A8S3" type="number"
                           min="0" name="Q5A8S3" placeholder="<?php if (isset($data['Q5A8S3'])) echo $data['Q5A8S3'] ?>"
                           value="<?php echo set_value('Q5A8S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A8S4" type="number"
                           min="0" name="Q5A8S4" placeholder="<?php if (isset($data['Q5A8S4'])) echo $data['Q5A8S4'] ?>"
                           value="<?php echo set_value('Q5A8S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S9"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 8)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A9S1" type="text"
                           min="0" name="Q5A9S1" placeholder="<?php if (isset($data['Q5A9S1'])) echo $data['Q5A9S1'] ?>"
                           value="<?php echo set_value('Q5A9S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A9S2" type="number"
                           min="0" name="Q5A9S2" placeholder="<?php if (isset($data['Q5A9S2'])) echo $data['Q5A9S2'] ?>"
                           value="<?php echo set_value('Q5A9S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A9S3" type="number"
                           min="0" name="Q5A9S3" placeholder="<?php if (isset($data['Q5A9S3'])) echo $data['Q5A9S3'] ?>"
                           value="<?php echo set_value('Q5A9S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A9S4" type="number"
                           min="0" name="Q5A9S4" placeholder="<?php if (isset($data['Q5A9S4'])) echo $data['Q5A9S4'] ?>"
                           value="<?php echo set_value('Q5A9S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row" id="A1S10"
                <?php
                if (isset($data['Q4A1']))
                    if ($data['Q4A1'] > 9)
                        echo "style='display:block;'";
                    else
                        echo "style='display:none;'";
                ?>>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A10S1" type="text"
                           min="0" name="Q5A10S1"
                           placeholder="<?php if (isset($data['Q5A10S1'])) echo $data['Q5A10S1'] ?>"
                           value="<?php echo set_value('Q5A10S1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A10S2" type="number"
                           min="0" name="Q5A10S2"
                           placeholder="<?php if (isset($data['Q5A10S2'])) echo $data['Q5A10S2'] ?>"
                           value="<?php echo set_value('Q5A10S2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A10S3" type="number"
                           min="0" name="Q5A10S3"
                           placeholder="<?php if (isset($data['Q5A10S3'])) echo $data['Q5A10S3'] ?>"
                           value="<?php echo set_value('Q5A10S3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onchange="computePercent()" id="Q5A10S4" type="number"
                           min="0" name="Q5A10S4"
                           placeholder="<?php if (isset($data['Q5A10S4'])) echo $data['Q5A10S4'] ?>"
                           value="<?php echo set_value('Q5A10S4'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" id="Q5A110S2" type="number" min="0" name="Q5A110S2"
                           placeholder="<?php if (isset($data['Q5A110S2'])) echo $data['Q5A110S2'] ?>"
                           value="<?php echo set_value('Q5A110S2'); ?>" readonly/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" id="Q5A110S3" type="number" min="0" name="Q5A110S3"
                           placeholder="<?php if (isset($data['Q5A110S3'])) echo $data['Q5A110S3'] ?>"
                           value="<?php echo set_value('Q5A110S3'); ?>" readonly/>
                </div>
                <div class="col-xs-2"></div>
            </div>

        </div>

        <div class="clearfix">&nbsp;</div>

        <div class="form-group"><label><h6> Task 3: How eco-friendly are the vehicles in your school?</h6></label>
            <p>
                In this section, you will maintain a record of vehicles used by your school. Two critical parameters
                indicate if your vehicles are eco-friendly. One—type of fuel—is given in the table below.</p></div>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
            <label class="control-label"><span class="cube">3</span>What is the ownership of the vehicles used by your
                school? Please choose what is applicable.</label>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 1) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 1 ? "checked" : "" ?>>
                    School does not use or own vehicles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(1)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 2) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 2 ? "checked" : "" ?>>
                    Operator-owned vehicles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 3) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 3 ? "checked" : "" ?>>
                    School-owned vehicles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 4) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 4 ? "checked" : "" ?>>
                    A combination of school-owned and operator-owned vehicles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q6A1" required onclick="Air(2)" name="Q6A1"
                           value="<?php echo set_value('Q6A1', 5) ?>" <?php if (isset($data['Q6A1'])) echo $data['Q6A1'] == 5 ? "checked" : "" ?>>
                    Hired-vehicles (JNV schools)
                </label>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
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
                vehicles</label>

            <div class="form-group row">
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
                    <label>Vans</label>

                </div>
                <div class="col-xs-2">
                    <label>Others</label>
                </div>
                <div class="col-xs-2">
                    <label>Total</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>No. of vehicles</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b1" type="number" min="0"
                           name="Q6A2S1B1" placeholder="<?php if (isset($data['Q6A2S1B1'])) echo $data['Q6A2S1B1'] ?>"
                           value="<?php echo set_value('Q6A2S1B1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c1" type="number" min="0"
                           name="Q6A2S1C1" placeholder="<?php if (isset($data['Q6A2S1C1'])) echo $data['Q6A2S1C1'] ?>"
                           value="<?php echo set_value('Q6A2S1C1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v1" type="number" min="0"
                           name="Q6A2S1V1" placeholder="<?php if (isset($data['Q6A2S1V1'])) echo $data['Q6A2S1V1'] ?>"
                           value="<?php echo set_value('Q6A2S1V1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o1" type="number" min="0"
                           name="Q6A2S1O1" placeholder="<?php if (isset($data['Q6A2S1O1'])) echo $data['Q6A2S1O1'] ?>"
                           value="<?php echo set_value('Q6A2S1O1'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t1" type="number" min="0"
                           name="Q6A2S1T1" placeholder="<?php if (isset($data['Q6A2S1T1'])) echo $data['Q6A2S1T1'] ?>"
                           value="<?php echo set_value('Q6A2S1T1'); ?>" readonly/>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>No. of vehicles more than eight years old</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b2" type="number" min="0"
                           name="Q6A2S1B2" placeholder="<?php if (isset($data['Q6A2S1B2'])) echo $data['Q6A2S1B2'] ?>"
                           value="<?php echo set_value('Q6A2S1B2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c2" type="number" min="0"
                           name="Q6A2S1C2" placeholder="<?php if (isset($data['Q6A2S1C2'])) echo $data['Q6A2S1C2'] ?>"
                           value="<?php echo set_value('Q6A2S1C2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v2" type="number" min="0"
                           name="Q6A2S1V2" placeholder="<?php if (isset($data['Q6A2S1V2'])) echo $data['Q6A2S1V2'] ?>"
                           value="<?php echo set_value('Q6A2S1V2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o2" type="number" min="0"
                           name="Q6A2S1O2" placeholder="<?php if (isset($data['Q6A2S1O2'])) echo $data['Q6A2S1O2'] ?>"
                           value="<?php echo set_value('Q6A2S1O2'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t2" type="number" min="0"
                           name="Q6A2S1T2" placeholder="<?php if (isset($data['Q6A2S1T2'])) echo $data['Q6A2S1T2'] ?>"
                           value="<?php echo set_value('Q6A2S1T2'); ?>" readonly/>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>No. of Air conditioned vehicles</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b3" type="number" min="0"
                           name="Q6A2S1B3" placeholder="<?php if (isset($data['Q6A2S1B3'])) echo $data['Q6A2S1B3'] ?>"
                           value="<?php echo set_value('Q6A2S1B3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c3" type="number" min="0"
                           name="Q6A2S1C3" placeholder="<?php if (isset($data['Q6A2S1C3'])) echo $data['Q6A2S1C3'] ?>"
                           value="<?php echo set_value('Q6A2S1C3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v3" type="number" min="0"
                           name="Q6A2S1V3" placeholder="<?php if (isset($data['Q6A2S1V3'])) echo $data['Q6A2S1V3'] ?>"
                           value="<?php echo set_value('Q6A2S1V3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o3" type="number" min="0"
                           name="Q6A2S1O3" placeholder="<?php if (isset($data['Q6A2S1O3'])) echo $data['Q6A2S1O3'] ?>"
                           value="<?php echo set_value('Q6A2S1O3'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t3" type="number" min="0"
                           name="Q6A2S1T3" placeholder="<?php if (isset($data['Q6A2S1T3'])) echo $data['Q6A2S1T3'] ?>"
                           value="<?php echo set_value('Q6A2S1T3'); ?>" readonly/>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>PUC done</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b4" type="number" min="0"
                           name="Q6A2S1B4" placeholder="<?php if (isset($data['Q6A2S1B4'])) echo $data['Q6A2S1B4'] ?>"
                           value="<?php echo set_value('Q6A2S1B4'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c4" type="number" min="0"
                           name="Q6A2S1C4" placeholder="<?php if (isset($data['Q6A2S1C4'])) echo $data['Q6A2S1C4'] ?>"
                           value="<?php echo set_value('Q6A2S1C4'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v4" type="number" min="0"
                           name="Q6A2S1V4" placeholder="<?php if (isset($data['Q6A2S1V4'])) echo $data['Q6A2S1V4'] ?>"
                           value="<?php echo set_value('Q6A2S1V4'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o4" type="number" min="0"
                           name="Q6A2S1O4" placeholder="<?php if (isset($data['Q6A2S1O4'])) echo $data['Q6A2S1O4'] ?>"
                           value="<?php echo set_value('Q6A2S1O4'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t4" type="number" min="0"
                           name="Q6A2S1T4" placeholder="<?php if (isset($data['Q6A2S1T4'])) echo $data['Q6A2S1T4'] ?>"
                           value="<?php echo set_value('Q6A2S1T4'); ?>" readonly/>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Authorised parking available</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b5" type="number" min="0"
                           name="Q6A2S1B5" placeholder="<?php if (isset($data['Q6A2S1B5'])) echo $data['Q6A2S1B5'] ?>"
                           value="<?php echo set_value('Q6A2S1B5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c5" type="number" min="0"
                           name="Q6A2S1C5" placeholder="<?php if (isset($data['Q6A2S1C5'])) echo $data['Q6A2S1C5'] ?>"
                           value="<?php echo set_value('Q6A2S1C5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v5" type="number" min="0"
                           name="Q6A2S1V5" placeholder="<?php if (isset($data['Q6A2S1V5'])) echo $data['Q6A2S1V5'] ?>"
                           value="<?php echo set_value('Q6A2S1V5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o5" type="number" min="0"
                           name="Q6A2S1O5" placeholder="<?php if (isset($data['Q6A2S1O5'])) echo $data['Q6A2S1O5'] ?>"
                           value="<?php echo set_value('Q6A2S1O5'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t5" type="number" min="0"
                           name="Q6A2S1T5" placeholder="<?php if (isset($data['Q6A2S1T5'])) echo $data['Q6A2S1T5'] ?>"
                           value="<?php echo set_value('Q6A2S1T5'); ?>" readonly/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Annual road worthiness certificate</label>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="b6" type="number" min="0"
                           name="Q6A2S1B6" placeholder="<?php if (isset($data['Q6A2S1B6'])) echo $data['Q6A2S1B6'] ?>"
                           value="<?php echo set_value('Q6A2S1B6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="c6" type="number" min="0"
                           name="Q6A2S1C6" placeholder="<?php if (isset($data['Q6A2S1C6'])) echo $data['Q6A2S1C6'] ?>"
                           value="<?php echo set_value('Q6A2S1C6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="v6" type="number" min="0"
                           name="Q6A2S1V6" placeholder="<?php if (isset($data['Q6A2S1V6'])) echo $data['Q6A2S1V6'] ?>"
                           value="<?php echo set_value('Q6A2S1V6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="o6" type="number" min="0"
                           name="Q6A2S1O6" placeholder="<?php if (isset($data['Q6A2S1O6'])) echo $data['Q6A2S1O6'] ?>"
                           value="<?php echo set_value('Q6A2S1O6'); ?>"/>
                </div>
                <div class="col-xs-2">
                    <input class="form-control space-textbox" onkeyup="details()" id="t6" type="number" min="0"
                           name="Q6A2S1T6" placeholder="<?php if (isset($data['Q6A2S1T6'])) echo $data['Q6A2S1T6'] ?>"
                           value="<?php echo set_value('Q6A2S1T6'); ?>" readonly/>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>

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
        <div class="clearfix">&nbsp;</div>
        • Fuel bills<br>
        • Picture of school owned vehicles<br>

        Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image
        File (.jpg, .jpeg). File size per document should not exceed 500 KB.
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <button class="btn uploadbtn upload" data-id="Fuels" data-toggle="modal" data-target="#airModal" type="button">
            UPLOAD FILES
        </button>
        <br>
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
    <label class="control-label"><span class="cube">3(b)</span>Specify the type of fuel used by your school’s vehicles:
        <a class="tt"
           data-tooltip="The below is an indicative list of type of vehicles.  If the school has other than these vehicles, please provide details in ‘Other vehicles’ section."><span
                    class="badge">?</span></a></label>
    </label>
    <table class="table table-bordered">
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
                       value="<?php echo set_value('Q6A2S3D1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P1"
                       type="number" min="0" name="Q6A2S3P1"
                       placeholder="<?php if (isset($data['Q6A2S3P1'])) echo $data['Q6A2S3P1'] ?>"
                       value="<?php echo set_value('Q6A2S3P1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L1"
                       type="number" min="0" name="Q6A2S3L1"
                       placeholder="<?php if (isset($data['Q6A2S3L1'])) echo $data['Q6A2S3L1'] ?>"
                       value="<?php echo set_value('Q6A2S3L1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C1"
                       type="number" min="0" name="Q6A2S3C1"
                       placeholder="<?php if (isset($data['Q6A2S3C1'])) echo $data['Q6A2S3C1'] ?>"
                       value="<?php echo set_value('Q6A2S3C1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E1"
                       type="number" min="0" name="Q6A2S3E1"
                       placeholder="<?php if (isset($data['Q6A2S3E1'])) echo $data['Q6A2S3E1'] ?>"
                       value="<?php echo set_value('Q6A2S3E1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H1"
                       type="number" min="0" name="Q6A2S3H1"
                       placeholder="<?php if (isset($data['Q6A2S3H1'])) echo $data['Q6A2S3H1'] ?>"
                       value="<?php echo set_value('Q6A2S3H1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B1"
                       type="number" min="0" name="Q6A2S3B1"
                       placeholder="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"
                       value="<?php echo set_value('Q6A2S3B1'); ?>"/></td>
        </tr>
        <tr>
            <td>Cars</td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D2"
                       type="number" min="0" name="Q6A2S3B12"
                       placeholder="<?php if (isset($data['Q6A2S3B1'])) echo $data['Q6A2S3B1'] ?>"
                       value="<?php echo set_value('Q6A2S3B1'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P2"
                       type="number" min="0" name="Q6A2S3D2"
                       placeholder="<?php if (isset($data['Q6A2S3D2'])) echo $data['Q6A2S3D2'] ?>"
                       value="<?php echo set_value('Q6A2S3D2'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L2"
                       type="number" min="0" name="Q6A2S3P2"
                       placeholder="<?php if (isset($data['Q6A2S3P2'])) echo $data['Q6A2S3P2'] ?>"
                       value="<?php echo set_value('Q6A2S3P2'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C2"
                       type="number" min="0" name="Q6A2S3L2"
                       placeholder="<?php if (isset($data['Q6A2S3L2'])) echo $data['Q6A2S3L2'] ?>"
                       value="<?php echo set_value('Q6A2S3L2'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E2"
                       type="number" min="0" name="Q6A2S3C2"
                       placeholder="<?php if (isset($data['Q6A2S3C2'])) echo $data['Q6A2S3C2'] ?>"
                       value="<?php echo set_value('Q6A2S3C2'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H2"
                       type="number" min="0" name="Q6A2S3E2"
                       placeholder="<?php if (isset($data['Q6A2S3E2'])) echo $data['Q6A2S3E2'] ?>"
                       value="<?php echo set_value('Q6A2S3E2'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B2"
                       type="number" min="0" name="Q6A2S3H2"
                       placeholder="<?php if (isset($data['Q6A2S3H2'])) echo $data['Q6A2S3H2'] ?>"
                       value="<?php echo set_value('Q6A2S3H2'); ?>"/></td>
        </tr>
        <tr>
            <td>Vans</td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D3"
                       type="number" min="0" name="Q6A2S3D3"
                       placeholder="<?php if (isset($data['Q6A2S3D3'])) echo $data['Q6A2S3D3'] ?>"
                       value="<?php echo set_value('Q6A2S3D3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P3"
                       type="number" min="0" name="Q6A2S3P3"
                       placeholder="<?php if (isset($data['Q6A2S3P3'])) echo $data['Q6A2S3P3'] ?>"
                       value="<?php echo set_value('Q6A2S3P3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L3"
                       type="number" min="0" name="Q6A2S3L3"
                       placeholder="<?php if (isset($data['Q6A2S3L3'])) echo $data['Q6A2S3L3'] ?>"
                       value="<?php echo set_value('Q6A2S3L3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C3"
                       type="number" min="0" name="Q6A2S3C3"
                       placeholder="<?php if (isset($data['Q6A2S3C3'])) echo $data['Q6A2S3C3'] ?>"
                       value="<?php echo set_value('Q6A2S3C3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E3"
                       type="number" min="0" name="Q6A2S3E3"
                       placeholder="<?php if (isset($data['Q6A2S3E3'])) echo $data['Q6A2S3E3'] ?>"
                       value="<?php echo set_value('Q6A2S3E3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H3"
                       type="number" min="0" name="Q6A2S3H3"
                       placeholder="<?php if (isset($data['Q6A2S3H3'])) echo $data['Q6A2S3H3'] ?>"
                       value="<?php echo set_value('Q6A2S3H3'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B3"
                       type="number" min="0" name="Q6A2S3B3"
                       placeholder="<?php if (isset($data['Q6A2S3B3'])) echo $data['Q6A2S3B3'] ?>"
                       value="<?php echo set_value('Q6A2S3B3'); ?>"/></td>
        </tr>
        <tr>
            <td>Other vehicles</td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D4"
                       type="number" min="0" name="Q6A2S3D4"
                       placeholder="<?php if (isset($data['Q6A2S3D4'])) echo $data['Q6A2S3D4'] ?>"
                       value="<?php echo set_value('Q6A2S3D4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P4"
                       type="number" min="0" name="Q6A2S3P4"
                       placeholder="<?php if (isset($data['Q6A2S3P4'])) echo $data['Q6A2S3P4'] ?>"
                       value="<?php echo set_value('Q6A2S3P4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L4"
                       type="number" min="0" name="Q6A2S3L4"
                       placeholder="<?php if (isset($data['Q6A2S3L4'])) echo $data['Q6A2S3L4'] ?>"
                       value="<?php echo set_value('Q6A2S3L4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C4"
                       type="number" min="0" name="Q6A2S3C4"
                       placeholder="<?php if (isset($data['Q6A2S3C4'])) echo $data['Q6A2S3C4'] ?>"
                       value="<?php echo set_value('Q6A2S3C4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E4"
                       type="number" min="0" name="Q6A2S3E4"
                       placeholder="<?php if (isset($data['Q6A2S3E4'])) echo $data['Q6A2S3E4'] ?>"
                       value="<?php echo set_value('Q6A2S3E4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H4"
                       type="number" min="0" name="Q6A2S3H4"
                       placeholder="<?php if (isset($data['Q6A2S3H4'])) echo $data['Q6A2S3H4'] ?>"
                       value="<?php echo set_value('Q6A2S3H4'); ?>"/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B4"
                       type="number" min="0" name="Q6A2S3B4"
                       placeholder="<?php if (isset($data['Q6A2S3B4'])) echo $data['Q6A2S3B4'] ?>"
                       value="<?php echo set_value('Q6A2S3B4'); ?>"/></td>
        </tr>
        <tr>
            <td>Sub-Total</td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3D5"
                       type="number" min="0" name="Q6A2S3D5"
                       placeholder="<?php if (isset($data['Q6A2S3D5'])) echo $data['Q6A2S3D5'] ?>"
                       value="<?php echo set_value('Q6A2S3D5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3P5"
                       type="number" min="0" name="Q6A2S3P5"
                       placeholder="<?php if (isset($data['Q6A2S3P5'])) echo $data['Q6A2S3P5'] ?>"
                       value="<?php echo set_value('Q6A2S3P5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3L5"
                       type="number" min="0" name="Q6A2S3L5"
                       placeholder="<?php if (isset($data['Q6A2S3L5'])) echo $data['Q6A2S3L5'] ?>"
                       value="<?php echo set_value('Q6A2S3L5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3C5"
                       type="number" min="0" name="Q6A2S3C5"
                       placeholder="<?php if (isset($data['Q6A2S3C5'])) echo $data['Q6A2S3C5'] ?>"
                       value="<?php echo set_value('Q6A2S3C5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3E5"
                       type="number" min="0" name="Q6A2S3E5"
                       placeholder="<?php if (isset($data['Q6A2S3E5'])) echo $data['Q6A2S3E5'] ?>"
                       value="<?php echo set_value('Q6A2S3E5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3H5"
                       type="number" min="0" name="Q6A2S3H5"
                       placeholder="<?php if (isset($data['Q6A2S3H5'])) echo $data['Q6A2S3H5'] ?>"
                       value="<?php echo set_value('Q6A2S3H5'); ?>" readonly/></td>
            <td><input class="form-control space-textbox" onKeyUp="details2()" onChange="details2()" id="S3B5"
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


<label class="control-label"><span class="cube">3(c)</span>IS CNG AVAILABLE IN YOUR STATE?</label>
<div class="radio">
    <label>
        <input type="radio" name="Q6A3" id="Q6A3Answer" onclick="AvailableState(1)"
               value="<?php echo set_value('Q6A3', 'Y') ?>" <?php if (isset($data['Q6A3'])) echo $data['Q6A3'] == 'Y' ? "checked" : "" ?>>
        Yes
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="Q6A3" id="Q6A3Answer" onclick="AvailableState(2)"
               value="<?php echo set_value('Q6A3', 'N') ?>" <?php if (isset($data['Q6A3'])) echo $data['Q6A3'] == 'N' ? "checked" : "" ?>>
        No
    </label>
</div>
</div>
<div class="clearfix">&nbsp;</div>

<?php
if (isset($data['Q6A3']))
    if ($data['Q6A3'] == 'Y')
        echo '<div class="form-group" id="Q6A3S1">';
    else
        echo '<div class="form-group" id="Q6A3S1" style="display:none;">';
else
    echo '<div class="form-group" id="Q6A3S1" style="display:none;">';

?>


<label class="control-label"><span class="cube">3(c)A</span>IS CNG AVAILABLE IN YOUR AREA?</label>
<div class="radio">
    <label>
        <input type="radio" name="Q6A4S1" id="Q6A3S1Answer"
               value="<?php echo set_value('Q6A4S1', 'Y') ?>" <?php if (isset($data['Q6A4S1'])) echo $data['Q6A4S1'] == 'Y' ? "checked" : "" ?>>
        Yes
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="Q6A4S1" id="Q6A3S1Answer"
               value="<?php echo set_value('Q6A4S1', 'N') ?>" <?php if (isset($data['Q6A4S1'])) echo $data['Q6A4S1'] == 'N' ? "checked" : "" ?>>
        No
    </label>
</div>
</div>
<div class="clearfix">&nbsp;</div>


<div class="form-group"><label><h6> Task 4: How do you travel to school every day? </h6></label>
    <p> To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the
        team should ask individual class monitors to record the commuting practices of his/her classmates and the
        teachers, and forward the data to the audit team. After completing the survey, provide the compiled information
        below.</p></div>
<div class="form-group"><label class="control-label"><span class="cube">4</span>Please specify how many members of the
        school community use each type of transport: <a class="tt"
                                                        data-tooltip="Frequency of use in a month of a particular mode (enter 0 in case a mode is not used)"><span
                    class="badge">?</span></a> <a class="kplink"
                                                  href="http://www.greenschoolsprogramme.org/knowledge-bank/air/#publicTransport"
                                                  target="_blank"> </a></label>
    <div class="form-group row">
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
    <div class="form-group row">
        <label class="control-label"><span class="cube">A</span> Sustainable Motorised Vehicles </label>

    </div>
    <input type="hidden" id="Q4G4S3"
           value="<?php if (isset($other['Q4G4S3'])) if ($other['Q4G4S3']) echo $other['Q4G4S3']; ?>"/>
    <input type="hidden" id="Q4G1S3"
           value="<?php if (isset($other['Q4G1S3'])) if ($other['Q4G1S3']) echo $other['Q4G1S3']; ?>"/>
    <script></script>
    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
        <label class="control-label"><span class="cube">B</span>Private Vehicles</label>
    </div>
    <div class="form-group row">
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
    <div class="form-group row">
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
        <label class="control-label"><span class="cube">C</span>Non Polluting Mode</label>
    </div>

    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
    <div class="form-group row">
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
<div class="clearfix">&nbsp;</div>
<div class="form-group">
    <label class="control-label"><h6>Task 5: How good is the air you breathe in your school? <a class="tt"
                                                                                                data-tooltip="The teacher/coordinator in the team should ask individual class monitors to find out the number of students suffering from asthma, bronchitis and other respiratory-related issues. Record the number in the field given below."><span
                        class="badge">?</span></a></h6></label>
    <p> The starting point of air quality monitoring is to first study if an area has an air pollution problem.
        Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards
        are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
    <label class="control-label"> <span class="cube">5</span>How many students suffer from respiratory problems? <a
                class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/air/#pmLevels"
                target="_blank"> </a></label>
    <input type="number" min="0" name="Q8A1" id="Q8A1" class="form-control"
           placeholder="<?php if (isset($data['Q8A1'])) echo $data['Q8A1'] ?>"
           value="<?php echo set_value('Q8A1'); ?>"/>
</div>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
    <label class="control-label"> <span class="cube">6</span>Does the school laboratory have air quality monitoring
        equipment? </label>
    <div class="radio">
        <label>
            <input type="radio" onclick="ComputeLab(1)" id="Q9A1" required name="Q9A1"
                   value="<?php echo set_value('Q8A1', 'Y') ?>" <?php if (isset($data['Q9A1'])) echo $data['Q9A1'] == 'Y' ? "checked" : "" ?>>
            Yes</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" onclick="ComputeLab(2)" id="Q9A1" required name="Q9A1"
                   value="<?php echo set_value('Q9A1', 'N') ?>" <?php if (isset($data['Q9A1'])) echo $data['Q9A1'] == 'N' ? "checked" : "" ?>>
            No</label>
    </div>
</div>
<div class="clearfix">&nbsp;</div>


<?php
if (isset($data['Q9A1']))
    if ($data['Q9A1'] == 'Y') {
        ?>
        <div class="form-group" id="lab1">
            <label class="control-label">Upload supporting documents</label>
            <br>
            &bull; Picture of Air Quality Monitoring equipment of school<br>
            <br>
            Please upload all supporting documents related to this section here. Note: files must be in one of the
            following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per
            document should not exceed 500 KB.<br/>
            <br/>
            <button class="btn uploadbtn upload" data-id="Air Quality Monitoring" data-toggle="modal"
                    data-target="#airModal" type="button">UPLOAD FILES
            </button>
            <br>
            <br>
            <br/>
        </div>
        <?php
    } else {
        ?>


        <div class="form-group" id="lab">
            <label class="control-label"><span class="cube">6(a)</span>If No, is there an air quality monitoring station
                (private or government) close to your school?</label>
            <div class="radio">
                <label>
                    <input type="radio" id="Q9A2_1" name="Q9A2"
                           value="<?php echo set_value('Q9A2', 1) ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 1 ? "checked" : "" ?>>
                    Yes</label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="Q9A2_2" name="Q9A2"
                           value="<?php echo set_value('Q9A2', 2) ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 2 ? "checked" : "" ?>>
                    No</label>
            </div>
        </div>
    <?php } ?>
<div class="form-group" id="lab1" style="display:none;">
    <label class="control-label">Upload supporting documents</label>
    <br>
    &bull; Picture of Air Quality Monitoring equipment of school<br>
    <br>
    Please upload all supporting documents related to this section here. Note: files must be in one of the following
    formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should
    not exceed 500 KB.<br/>
    <br/>
    <button class="btn uploadbtn upload" type="button">UPLOAD FILES</button>
    <br>
</div>
<div class="form-group" id="lab2" style="display:none;">
    <label class="control-label"><span class="cube">6(a)</span>If No, is there an air quality monitoring station
        (private or government) close to your school?</label>
    <div class="radio">
        <label>
            <input type="radio" id="Q9A2_1" name="Q9A2"
                   value="<?php echo set_value('Q9A2', 1) ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 1 ? "checked" : "" ?>>
            Yes</label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" id="Q9A2_2" name="Q9A2"
                   value="<?php echo set_value('Q9A2', 2) ?>" <?php if (isset($data['Q9A2'])) echo $data['Q9A2'] == 2 ? "checked" : "" ?>>
            No</label>
    </div>
</div>

<br>
<div class="form-group" id="WastePolicy">
    <label class="control-label">Please upload supporting documents:</label>
    <br>
    &bull;Pictures of audit team doing survey<br/>
    Please upload all supporting documents related to this section here. Note, files must be one of the following
    formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
    File size per document should not exceed 500 KB.
    <br/><br/>
    <button class="btn uploadbtn upload" data-id="Supporting Document Air" data-toggle="modal" data-target="#airModal"
            type="button">UPLOAD FILES
    </button>
    <br>
    <br>
</div>


<div class="text-center">
    <button type="button" class="org-btn" id="btnAirPrevious">Previous</button>
    <button type="submit" class="org-btn" id="airnext" value="movenext">Next</button>
    <button type="button" class="org-btn" class="submit button" id="airsave">Save and Resume Later</button>
</div>

<?php echo form_close(); ?>

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
    });
</script>
