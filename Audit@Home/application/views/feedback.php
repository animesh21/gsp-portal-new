<?php $this->load->view('header'); ?>
<style>
.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q1Fe1-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 619px;
    text-shadow: 1px 1px 1px #000;
}


#feedback2019_2-error{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 455px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe2-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 672px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe3-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 445px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe4-error
{
        color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 585px;
    text-shadow: 1px 1px 1px #000;
}

#Q8Fe1-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -3px !important;
    position: absolute;
    margin-left: 475px;
    text-shadow: 1px 1px 1px #000;
}

#Q8Fe2-error{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -3px !important;
    position: absolute;
    margin-left: 475px;
    text-shadow: 1px 1px 1px #000;
}

#Q8Fe3-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -3px !important;
    position: absolute;
    margin-left: 475px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe7-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 824px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe8-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 524px;
    text-shadow: 1px 1px 1px #000;  
}

#Q1Fe9-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 738px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe10-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 170px;
    text-shadow: 1px 1px 1px #000;
}

#Q1Fe11-error
{
    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -35px !important;
    position: absolute;
    margin-left: 375px;
    text-shadow: 1px 1px 1px #000;
}
</style>
<div class="container">
    <div class="content-form">
        <div class="log-nav">
            <div class="welcome">Welcome <span
                        style="font-weight:bold">
                        <?php $user_id = $this->session->userdata('USER_ID'); 

                    //    $School_name = getSchoolNameBYUniqueId($user_id);
                    //    echo $School_name;
                        ?></span></div>
            <ul>
                <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
                <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
<!--                 <li>|</li>
                <li><a class="lptext" title="Change Password Form"
                       href="/audit2016/upload/templates/tfr_responsive/changepass.php?mail=menon.ranjita@gmail.com"
                       rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
            </ul>
        </div>
        <div id="pprg" class="newprog progress" style="text-align:center">
            <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width:100%; height: 35px;">100%
            </div>
        </div>
        <!--<div id="pprg" class="newprog progress" style="text-align:center">
          <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: 37.5%; height: 35px;">37.5%</div>
        </div>-->
        <h1>FEEDBACK <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
        <?php echo form_open('feedback/set',array('id'=>'feedback')); ?>
        <div class="form-group">
            <label><span class="cube">1</span> Has your school participated in the Green Schools Programme (GSP) Audit
                before? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe1"
                               value="<?php echo set_value('Q1Fe1', 'Y') ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe1"
                               value="<?php echo set_value('Q1Fe1', 'N') ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group hide" id="Question1a"
         <?php
if (isset($data['Q1Fe1'])) {
    if ($data['Q1Fe1'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?> >
            <label><span class="cube">1(a)</span> If your answer is yes, in which year did your school first participate
                in the audit? </label>
            <input type="text" name="Q1Fe211" id="Q1Fe211" class="form-control"
                   placeholder="<?php if (isset($data['Q1Fe211'])) echo $data['Q1Fe211']; ?>"
                           value="<?php echo set_value('Q1Fe211'); ?>"/>
        </div>
        <div class="form-group hide" id="Question1b"
  <?php
  if (isset($data['Q1Fe1'])) {
    if ($data['Q1Fe1'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?> >         
    
            <label><span class="cube">1(b)</span> If your answer is yes, how many times have you done the audit?
            </label>
            <input type="text" name="Q1Fe212" id="Q1Fe212" class="form-control"
                   placeholder="<?php if (isset($data['Q1Fe212'])) echo $data['Q1Fe212']; ?>"
                           value="<?php echo set_value('Q1Fe212'); ?>"/>
        </div>
        <div class="form-group">
            <label><span class="cube">2</span> Did you find the online information relevant to your environmental
                education activities? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe2"
                               value="<?php echo set_value('Q1Fe2', 'Y') ?>" <?php if (isset($data['Q1Fe2'])) echo $data['Q1Fe2'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe2"
                               value="<?php echo set_value('Q1Fe2', 'N') ?>" <?php if (isset($data['Q1Fe2'])) echo $data['Q1Fe2'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group hide" id="Question2a"
         <?php
if (isset($data['Q1Fe2'])) {
    if ($data['Q1Fe2'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?> >
            <label><span class="cube">2(a)</span> If your answer is no, please share your suggestions: </label>
            <input type="text" name="Q1Fe221" id="Q1Fe221" class="form-control"
                   placeholder="<?php if (isset($data['Q1Fe221'])) echo $data['Q1Fe221']; ?>"
                           value="<?php echo set_value('Q1Fe221'); ?>"/>
        </div>
        <div class="form-group">
            <label><span class="cube">3</span> Was the audit easy to understand and self-explanatory? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe3"
                               value="<?php echo set_value('Q1Fe3', 'Y') ?>" <?php if (isset($data['Q1Fe3'])) echo $data['Q1Fe3'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe3"
                               value="<?php echo set_value('Q1Fe3', 'N') ?>" <?php if (isset($data['Q1Fe3'])) echo $data['Q1Fe3'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label><span class="cube">4</span> Do you think your school will be a Green School (resource efficient) by 2020? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe4"
                               value="<?php echo set_value('Q1Fe4', 'Y') ?>" <?php if (isset($data['Q1Fe4'])) echo $data['Q1Fe4'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe4"
                               value="<?php echo set_value('Q1Fe4', 'N') ?>" <?php if (isset($data['Q1Fe4'])) echo $data['Q1Fe4'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group hide" id="Question4a"
          <?php
if (isset($data['Q1Fe4'])) {
    if ($data['Q1Fe4'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?> >
            <label><span class="cube">4(a)</span> If your answer is no, why? </label>
            <input type="text" name="Q1Fe411" id="Q1Fe411" class="form-control"
                    placeholder="<?php if (isset($data['Q1Fe411'])) echo $data['Q1Fe411']; ?>"
                           value="<?php echo set_value('Q1Fe411'); ?>"/>
        </div>
        <div class="form-group">
            <label><span class="cube">5</span> What would be the help required to make your school a Green School?
            </label>
            <input type="text" name="Q1Fe511" id="Q1Fe511" class="form-control"
                   placeholder="<?php if (isset($data['Q1Fe511'])) echo $data['Q1Fe511']; ?>"
                           value="<?php if (isset($data['Q1Fe511'])) echo $data['Q1Fe511']; ?>"/>
        </div>
        <div class="form-group">
            <label><span class="cube">6</span> How would you rate the overall design of the audit? </label>
            <table class="table table-bordered">
                <tr>
                    <th>Audit</th>
                    <th>Good</th>
                    <th>Average</th>
                    <th>Bad</th>
                </tr>
                <tr>
                    <th>Content</th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe1"
                                   value="<?php echo set_value('Q8Fe1', 1) ?>" <?php if (isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 1 ? "checked" : "" ?>>
                            Good</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe1"
                                   value="<?php echo set_value('Q8Fe1', 2) ?>" <?php if (isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 2 ? "checked" : "" ?>>
                            Average</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe1"
                                   value="<?php echo set_value('Q8Fe1', 3) ?>" <?php if (isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 3 ? "checked" : "" ?>>
                            Bad</label></th>
                </tr>
                <tr>
                    <th>Distribution of time among tasks</th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe2"
                                   value="<?php echo set_value('Q8Fe2', 1) ?>" <?php if (isset($data['Q8Fe2'])) echo $data['Q8Fe2'] == 1 ? "checked" : "" ?>>
                            Good</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe2"
                                   value="<?php echo set_value('Q8Fe2', 2) ?>" <?php if (isset($data['Q8Fe2'])) echo $data['Q8Fe2'] == 2 ? "checked" : "" ?>>
                            Average</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe2"
                                   value="<?php echo set_value('Q8Fe2', 3) ?>" <?php if (isset($data['Q8Fe2'])) echo $data['Q8Fe2'] == 3 ? "checked" : "" ?>>
                            Bad</label></th>
                </tr>
                <tr>
                    <th>Sequencing of questions</th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe3"
                                   value="<?php echo set_value('Q8Fe3', 1) ?>" <?php if (isset($data['Q8Fe3'])) echo $data['Q8Fe3'] == 1 ? "checked" : "" ?>>
                            Good</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe3"
                                   value="<?php echo set_value('Q8Fe3', 2) ?>" <?php if (isset($data['Q8Fe3'])) echo $data['Q8Fe3'] == 2 ? "checked" : "" ?>>
                            Average</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe3"
                                   value="<?php echo set_value('Q8Fe3', 3) ?>" <?php if (isset($data['Q8Fe3'])) echo $data['Q8Fe3'] == 3 ? "checked" : "" ?>>
                            Bad</label></th>
                </tr>
                <!--<tr>
                    <th>Sequencing of questions</th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe4"
                                   value="<?php //echo set_value('Q8Fe4', 1) ?>" <?php //if (isset($data['Q8Fe4'])) echo $data['Q8Fe4'] == 1 ? "checked" : "" ?>>
                            Good</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe4"
                                   value="<?php //echo set_value('Q8Fe4', 2) ?>" <?php //if (isset($data['Q8Fe4'])) echo $data['Q8Fe4'] == 2 ? "checked" : "" ?>>
                            Average</label></th>
                    <th><label class="radio-inline">
                            <input type="radio" name="Q8Fe4"
                                   value="<?php //echo set_value('Q8Fe4', 3) ?>" <?php //if (isset($data['Q8Fe4'])) echo $data['Q8Fe4'] == 3 ? "checked" : "" ?>>
                            Bad</label></th>
                </tr>-->
            </table>
        </div>
        <div class="form-group">
            <label><span class="cube">7</span> Would your school like to recommend any topic/s that you strongly feel
                should be added or deleted in the audit? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe7"
                               value="<?php echo set_value('Q1Fe7', 'Y') ?>" <?php if (isset($data['Q1Fe7'])) echo $data['Q1Fe7'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe7"
                               value="<?php echo set_value('Q1Fe7', 'N') ?>" <?php if (isset($data['Q1Fe7'])) echo $data['Q1Fe7'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group hide" id="Question7a"
            <?php
if (isset($data['Q1Fe7'])) {
    if ($data['Q1Fe7'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?>>
            <label><span class="cube">7(a)</span> Topics your school feels should be added or deleted. Please write ‘to be added’ and ‘to be deleted’ in front of the topics.</label>
            <input type="text" name="Q1Fe711" id="Q1Fe711" class="form-control"
                   placeholder="<?php if (isset($data['Q1Fe711'])) echo $data['Q1Fe711']; ?>"
                           value="<?php echo set_value('Q1Fe711'); ?>"/>
        </div>
        <div class="form-group">
            <label><span class="cube">8</span> Could you finish all the tasks in given period of time ?
            </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe8"
                               value="<?php echo set_value('Q1Fe8', 'Y') ?>" <?php if (isset($data['Q1Fe8'])) echo $data['Q1Fe8'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe8"
                               value="<?php echo set_value('Q1Fe8', 'N') ?>" <?php if (isset($data['Q1Fe8'])) echo $data['Q1Fe8'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label><span class="cube">9</span> How many times did you contact the Green Schools Programme Team for
                guidance and counseling? </label>
            <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe9"
                               value="<?php echo set_value('Q1Fe9', 1) ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe9'] == 1 ? "checked" : "" ?>>
                        Never</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe9"
                               value="<?php echo set_value('Q1Fe9', 2) ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe9'] == 2 ? "checked" : "" ?>>
                        Once</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe9"
                               value="<?php echo set_value('Q1Fe9', 3) ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe9'] == 3 ? "checked" : "" ?>>
                        Twice</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe9"
                               value="<?php echo set_value('Q1Fe9', 4) ?>" <?php if (isset($data['Q1Fe1'])) echo $data['Q1Fe9'] == 4 ? "checked" : "" ?>>
                        More than twice</label>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label><span class="cube">10</span> Does your school have an alumni network? If yes, please give the frequency of alumni meetings in the box below. <a
                            class="tt"
                            data-tooltip="Alumni network is a meeting/reunion of all the passed out students from your school in past years"
                    ><span class="badge">?</span></a> </label>
        <input class="form-control space-textbox" id="feedback2019_1" type="text" name="feedback2019_1"
                               placeholder="<?php if (isset($data['feedback2019_1'])) echo $data['feedback2019_1']; ?>"
                               value="<?php if (isset($data['feedback2019_1'])) echo $data['feedback2019_1']; ?>"/>
        
            <!-- <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe10"
                               value="<?php echo set_value('Q1Fe10', 'Y') ?>" <?php if (isset($data['Q1Fe10'])) echo $data['Q1Fe10'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="Q1Fe10"
                               value="<?php echo set_value('Q1Fe10', 'N') ?>" <?php if (isset($data['Q1Fe10'])) echo $data['Q1Fe10'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul> -->
        </div>
        <div class="form-group hide" id="Question10a"
         <?php
if (isset($data['Q1Fe10'])) {
    if ($data['Q1Fe10'] == 'Y') {
        echo 'style="display:block;"';
    } else {
        echo 'style="display:none;"';
    }
} else {
    echo 'style="display:none;"';
}
?>>
            <label><span class="cube">10(a)</span> If your answer is no, please share your suggestions </label>
            <input type="text" name="Q1Fe1011" id="Q1Fe1011" class="form-control"
                    placeholder="<?php if (isset($data['Q1Fe1011'])) echo $data['Q1Fe1011']; ?>"
                           value="<?php echo set_value('Q1Fe1011'); ?>"/>
        </div>          




      <div class="form-group">
            <label><span class="cube">11</span> Did you use GSP Audit activities in the classroom teaching? </label>
       
        
             <ul class="list-inline">
                <li>
                    <label class="radio-inline">
                   <input type="radio" name="feedback2019_2"
                               value="<?php echo set_value('feedback2019_2', 'Y') ?>" <?php if (isset($data['feedback2019_2'])) echo $data['feedback2019_2'] == 'Y' ? "checked" : "" ?>>
                        Yes</label>
                </li>
                <li>
                    <label class="radio-inline">
                        <input type="radio" name="feedback2019_2"
                               value="<?php echo set_value('feedback2019_2', 'N') ?>" <?php if (isset($data['feedback2019_2'])) echo $data['feedback2019_2'] == 'N' ? "checked" : "" ?>>
                        No</label>
                </li>
            </ul> 
        </div>


         <div class="form-group">
      <label>
      <h6>Generate Digital Certificates</h6>
      <h5><strong>Please ensure that you select unique names to avoid duplication in digital certificates</strong></h5>
      </label>
      <br/>
      <button class="lptext" type="button" title="Change Password Form" data-toggle="modal" data-target="#Certificate"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Digital Certificate</button>
    </div>
        
        
        
        
        <div class="form-group">
            <label>
                <h6>Checklist of uploaded documents</h6>
            </label>
            <ul class="list-unstyled">
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe1"
                               value="<?php echo set_value('Q17Fe1', 1); ?>" <?php if (isset($data['Q17Fe1'])) echo "checked" ?>>
                        PUC certificates of not more than five buses</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe2"
                               value="<?php echo set_value('Q17Fe2', 1); ?>" <?php if (isset($data['Q17Fe2'])) echo "checked" ?>>
                        Picture of Air Quality Monitoring equipment of school</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe3"
                               value="<?php echo set_value('Q17Fe3', 1); ?>" <?php if (isset($data['Q17Fe3'])) echo "checked" ?>>
                        Fuel Bills</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe4"
                               value="<?php echo set_value('Q17Fe4', 1); ?>" <?php if (isset($data['Q17Fe4'])) echo "checked" ?>>
                        Picture of School owned vehicles</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe5"
                               value="<?php echo set_value('Q17Fe5', 1); ?>" <?php if (isset($data['Q17Fe5'])) echo "checked" ?>>
                        Electricity Bill</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe6"
                               value="<?php echo set_value('Q17Fe6', 1); ?>" <?php if (isset($data['Q17Fe6'])) echo "checked" ?>>
                        Picture of 5 star appliances used by school</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe7"
                               value="<?php echo set_value('Q17Fe7', 1); ?>" <?php if (isset($data['Q17Fe7'])) echo "checked" ?>>
                        Picture of Renewable sources of Energy</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe8"
                               value="<?php echo set_value('Q17Fe8', 1); ?>" <?php if (isset($data['Q17Fe8'])) echo "checked" ?>>
                        Picture of Mid-day meal being served</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe9"
                               value="<?php echo set_value('Q17Fe9', 1); ?>" <?php if (isset($data['Q17Fe9'])) echo "checked" ?>>
                        Photographs of lunch boxes</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe10"
                               value="<?php echo set_value('Q17Fe10', 1); ?>" <?php if (isset($data['Q17Fe10'])) echo "checked" ?>>
                        Picture of Canteen selling UPPF</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe11"
                               value="<?php echo set_value('Q17Fe11', 1); ?>" <?php if (isset($data['Q17Fe11'])) echo "checked" ?>>
                        Traditional food items sold in canteen</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe12"
                               value="<?php echo set_value('Q17Fe12', 1); ?>" <?php if (isset($data['Q17Fe12'])) echo "checked" ?>>
                        Pictures of Events sponsored by UPPF companies</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe13"
                               value="<?php echo set_value('Q17Fe13', 1); ?>" <?php if (isset($data['Q17Fe13'])) echo "checked" ?>>
                        Pictures of Green Cover</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe14"
                               value="<?php echo set_value('Q17Fe14', 1); ?>" <?php if (isset($data['Q17Fe14'])) echo "checked" ?>>
                        Pictures of landscaped area</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe15"
                               value="<?php echo set_value('Q17Fe15', 1); ?>" <?php if (isset($data['Q17Fe15'])) echo "checked" ?>>
                        Building construction plan</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe16"
                               value="<?php echo set_value('Q17Fe16', 1); ?>" <?php if (isset($data['Q17Fe16'])) echo "checked" ?>>
                        Pictures of bio-pesticides</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe17"
                               value="<?php echo set_value('Q17Fe17', 1); ?>" <?php if (isset($data['Q17Fe17'])) echo "checked" ?>>
                        Pictures of dustbins in classroom showing segregation at source</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe18"
                               value="<?php echo set_value('Q17Fe18', 1); ?>" <?php if (isset($data['Q17Fe18'])) echo "checked" ?>>
                        Pictures of playground with more than two dustbins</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe19"
                               value="<?php echo set_value('Q17Fe19', 1); ?>" <?php if (isset($data['Q17Fe19'])) echo "checked" ?>>
                        Picture of audit team weighing solid waste</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe20"
                               value="<?php echo set_value('Q17Fe20', 1); ?>" <?php if (isset($data['Q17Fe20'])) echo "checked" ?>>
                        Picture of types of solid waste generated</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe21"
                               value="<?php echo set_value('Q17Fe21', 1); ?>" <?php if (isset($data['Q17Fe21'])) echo "checked" ?>>
                        Pictures of recycling units - composting pit, paper recycling machine, selling paper to
                        kabadiwala, recyclers,etc</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe22"
                               value="<?php echo set_value('Q17Fe22', 1); ?>" <?php if (isset($data['Q17Fe22'])) echo "checked" ?>>
                        Pictures of housekeeping staff disposing different types of solid waste</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe23"
                               value="<?php echo set_value('Q17Fe23', 1); ?>" <?php if (isset($data['Q17Fe23'])) echo "checked" ?>>
                        Pictures of burning waste</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe24"
                               value="<?php echo set_value('Q17Fe24', 1); ?>" <?php if (isset($data['Q17Fe24'])) echo "checked" ?>>
                        Pictures of Electronic items used by school and storage of non-working electronic items</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe25"
                               value="<?php echo set_value('Q17Fe25', 1); ?>" <?php if (isset($data['Q17Fe25'])) echo "checked" ?>>
                        Certificate of disposing e-waste from authorised dealer/dismantler</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe26"
                               value="<?php echo set_value('Q17Fe26', 1); ?>" <?php if (isset($data['Q17Fe26'])) echo "checked" ?>>
                        Waste Policy</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe27"
                               value="<?php echo set_value('Q17Fe27', 1); ?>" <?php if (isset($data['Q17Fe27'])) echo "checked" ?>>
                        Pictures of various school initiatives e.g. rally, debate, street play, art competition,
                        etc</label>
                </li>
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q17Fe28"
                               value="<?php echo set_value('Q17Fe28', 1); ?>" <?php if (isset($data['Q17Fe28'])) echo "checked" ?>>
                        Pictures of respective audit teams doing survey</label>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label>The GSP Awards 2020</label>
            <p> The GSP Awards acknowledge and reward schools that have adopted the most innovative and effective
                practices to manage the natural resources within their own premises. The Awards are given away at the
                GSP Awards ceremony, an annual event, where top performers from across the country are rewarded for
                environmental activities that made an impact in their respective schools.</p>
        </div>
        <div class="form-group">
            <ul class="list-inline">
                <li>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="Q18Fe"
                               value="<?php echo set_value('Q18Fe', 1); ?>" <?php if (isset($data['Q18Fe'])) echo "checked" ?> checked="checked">
                        Please enter my school for Green School Awards.</label>
                </li>
            </ul>
        </div>

        <div class="navbar navbar-default" role="navigation">
            <button type="button" class="org-btn" id="btnFeedbackPrevious">Previous</button>
            <button type="submit" id="movesubmitbtn" value="movesubmit" name="movesubmit" accesskey="l"
                    class="submit button">Submit Audit
            </button>
            <button type="submit" id="saveallbtn" value="saveall" name="saveall"
                    class="saveall submit button bottomMargin100">Save &amp; Resume later
            </button>

        </div>
        <?php echo form_close(); ?> </div>
</div>

<div id="Certificate" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content" style="width: 834px; margin-left: -120px;">
                      <div class="modal-header" style="background: #24a5a0; color:#fff;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Generate Your Digital Certificate </h4>
                      </div>
                      
           <?php echo form_open('Feedback/insert_digitalcertificate/'.$school_name[0]->userid,array("id"=>"frmDigitalCertificate"));?>
           <script>
           $("#frmDigitalCertificate").on("submit",function(e){
   var formData = $('#frmDigitalCertificate')[0]; // You need to use standard javascript object here
  var formDatas = new FormData(formData);
   e.preventDefault();
$.ajax({
  url: '<?php echo base_url("Feedback/insert_digitalcertificate/".$school_name[0]->userid); ?>',
  data: formDatas,
  type: 'POST',
  contentType: false,
  processData: false,
  success: function (reponse) {
              // alert("Digital Certificate Has Been Generated Successfully.");
              $("#Certificate").css("display","none");
              $("#Certificate").removeClass("in");
             $(".modal-backdrop").css("position","inherit");
             $(".modal-open").css("overflow","inherit");
           }
 });
})

           </script>
                      <div class="modal-body">
                        <div class="col-lg-12">
                          <h4>Please ensure that you select unique names to avoid duplication in digital certificates.<br>
                          (The digital certificates will be generated in February end.)</h4>
                         <table class="table table-bordered table-striped">
        <tr>
          <th colspan="4">Digital Certificates Of Teachers & Staff Members</th>
        </tr>
        <tr>
          <th>Sr No.</th>
          <th>Name</th>
          <th>School Name</th>
          <th>Checked</th>
        </tr>
        <?php 
         for($i=0,$r=0;$i<sizeof($staff_certificate);++$i){ 
         ?>
        <tr>
          <th><?php echo ++$r; ?></th>
          <th><?php echo $staff_certificate[$i]['teacher']; ?></th>
          <th><?php echo $staff_certificate[$i]['school']; ?></th>
          <th><input type="checkbox" class="digitalCertificate" name="digitalCertificateName[]" value="<?php echo $staff_certificate[$i]['teacher']; ?>" <?php $condition=checkDigitalCertificate($staff_certificate[$i]['teacher'],$staff_certificate[$i]['school']); if($condition==1){ echo "checked    disbaled";} ?>   />
          <input type="hidden" id="certificate_schoolname" value="<?php echo $staff_certificate[$i]['school']; ?>" />
          </th>
        </tr>
        <?php }?>
        <tr>
          <th colspan="4">Digital Certificates Of Students</th>
        </tr>
        <tr>
          <th>Sr No.</th>
          <th>First-Name & Grade</th>
          <th>School Name</th>
          <th>Checked</th>
        </tr>
        <?php 
         for($i=0,$r=0;$i<sizeof($student_certificate);++$i){ 
         ?>
        <tr>
          <th><?php echo ++$r; ?></th>
          <th><?php echo $student_certificate[$i]['name']." "."(".$student_certificate[$i]['grade'].")"; ?></th>
          <th><?php echo $student_certificate[$i]['school_name']; ?></th>
          <th><input type="checkbox" class="digitalCertificate" name="digitalCertificateName[]" value="<?php echo $student_certificate[$i]['name']." "."(".$student_certificate[$i]['grade'].")"; ?>" <?php $condition=checkDigitalCertificate($student_certificate[$i]['name'],$student_certificate[$i]['school_name']); if($condition==1){ echo "checked";} ?> />
          </th>
        </tr>
        <?php } ?>
      </table>
                          
                        </div>
                        

                        
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-default" type="submit">Submit</button> 
                          <button type="button" class="btn btn-default" data-dismiss="modal" id="movenextbtn" style="margin:0px;">Return to survey</button>
                      </div>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
</div>



</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<style type="text/css">
    .form-group {
        margin-bottom: 22px;
    }

    .list-type li {
        padding: 0px 0px 0px 0px;
        clear: both;
    }

    .list-type li ul {
        float: right;
    }

    .radio-inline {
        min-width: 100px;
        clear: both;
    }

    .checkbox-inline {
        clear: both;
    }

    input[type="radio"] {
        background: #fff !important;
        clear: both;
    }

    .textbox-style {
        border: none !important;
        border-bottom: 1px dotted #000 !important;
    }

    .table {
        width: 800px;
    }

    .table tr td input {
        width: 100% !important;
        height: 59px !important;
        border: none !important;
    }
</style>




<script>
    $(document).ready(function(){
    
    $('#feedback').validate({
        rules:{
              Q1Fe1:{
                  required:true,
              },
              Q1Fe2:{
                  required:true,
              },
              Q1Fe3:{
                  required:true,
              },
              Q1Fe4:{
                  required:true,
              },
              Q1Fe511:{
                  required:true,
              },
              Q8Fe1:{
                  required:true,
              },
              Q8Fe2:{
                  required:true,
              },
              Q8Fe3:{
                  required:true,
              },
              Q1Fe7:{
                  required:true,
              },
              Q1Fe8:{
                  required:true,
              },
              Q1Fe9:{
                  required:true,
              },
              Q1Fe10:{
                  required:true,
              },
              
              feedback2019_1:{
                required:true,
              },
              feedback2019_2:{
                required:true,
              }
        }
       
    });
    });
    
    $('#movesubmitbtn').click(function(e){
        
        
        $r=$('#feedback').valid();
        if($r == false)
        {
             
               e.preventDefault();
               $('#feedback').valid();
        }
        
        
    });
    
    </script>

<script type="text/javascript">
    /**Validation Question 1 Feedback show 1a & 1b***/
    $('input[name="Q1Fe1"]').click(function () {
        if ($(this).closest('input[name="Q1Fe1"]').val() === 'Y') {
            $('#Question1a').removeClass('hide');
            $('#Question1b').removeClass('hide');
        }
        else if ($(this).closest('input[name="Q1Fe1"]').val() === 'N') {
            $('#Question1a').addClass('hide');
            $('#Question1b').addClass('hide');
        }
    });

    /**Validation Question 2 Feedback show 2a***/
    $('input[name="Q1Fe2"]').click(function () {
        if ($(this).closest('input[name="Q1Fe2"]').val() === 'N') {
            $('#Question2a').removeClass('hide');
        }
        else if ($(this).closest('input[name="Q1Fe2"]').val() === 'Y') {
            $('#Question2a').addClass('hide');
        }
    });


    /**Validation Question 4 Feedback show 4a***/
    $('input[name="Q1Fe4"]').click(function () {
        if ($(this).closest('input[name="Q1Fe4"]').val() === 'N') {
            $('#Question4a').removeClass('hide');
        }
        else if ($(this).closest('input[name="Q1Fe4"]').val() === 'Y') {
            $('#Question4a').addClass('hide');
        }
    });

    /**Validation Question 7 Feedback show 7a***/
    $('input[name="Q1Fe7"]').click(function () {
        if ($(this).closest('input[name="Q1Fe7"]').val() === 'Y') {
            $('#Question7a').removeClass('hide');
        }
        else if ($(this).closest('input[name="Q1Fe7"]').val() === 'N') {
            $('#Question7a').addClass('hide');
        }
    });

    /**Validation Question 10 Feedback show 10a***/
    // $('input[name="Q1Fe10"]').click(function () {
    //     if ($(this).closest('input[name="Q1Fe10"]').val() === 'N') {
    //         $('#Question10a').removeClass('hide');
    //     }
    //     else if ($(this).closest('input[name="Q1Fe10"]').val() === 'Y') {
    //         $('#Question10a').addClass('hide');
    //     }
    // });

    /**Validation Question 11 Feedback show 11a***/
    // $('input[name="Q1Fe11"]').click(function () {
    //     if ($(this).closest('input[name="Q1Fe11"]').val() === 'Y') {
    //         $('#Question11a').removeClass('hide');
    //         $('#Question11b').addClass('hide');
    //     }
    //     else if ($(this).closest('input[name="Q1Fe11"]').val() === 'N') {
    //         $('#Question11b').removeClass('hide');
    //         $('#Question11a').addClass('hide');
    //     }
    // });

    $(document).ready(function () {
        $('#btnFeedbackPrevious').on('click', function (data) {
            var fd = $('#feedback').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/feedbackajax') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('waste'); ?>";
                }
            });
        });
    });
    $(".submit").click(function(e){
        
     $.ajax({
           url:'<?php echo base_url("feedback/getDigitalValue"); ?>',
           type: 'POST',
           data: {"userid":<?php echo $this->session->userdata('USER_ID'); ?>},
           success: function (reponse) {
               if(reponse==='false')
               {
                 alert('Please Sumbit Your Digital Certificate After Select');
                  window.location.href = "<?php echo base_url('feedback'); ?>";
                
               }
            }
        }); 
        
        
    });
    
    $(".submit").click(function(e){
        var ckbox=$('.digitalCertificate:checkbox:checked')
        if (ckbox.is(':checked')) {
            
        }else{
             
             alert('Please Generate Your Digital Certificate');
            e.preventDefault();
            
        }
        
    });
    
    
    
</script>
