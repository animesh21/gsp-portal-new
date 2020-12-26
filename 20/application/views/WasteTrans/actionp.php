<?php $this->load->view('WasteTrans/headerw'); ?>

<style>

.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q10G1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 133px;
    text-shadow: 1px 1px 1px #000;
}

#Q2S1-error
{
	    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 356px;
    text-shadow: 1px 1px 1px #000;
}

#Q1S1-error
{
	    color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 457px;
    text-shadow: 1px 1px 1px #000;
}

</style>


<script type="text/javascript">
    window.onload = function () {
        Shadowbox.init();

    };
    var getCities = function () {
        var value = new Object();
        value.id = $('#country-select').val();
        var URL = "<?php echo base_url(); ?>";
        $.ajax({
            url: URL + 'ajax/citites',
            type: 'POST',
            data: value,
            success: function (html) {
                $('#city-select').html(html);
            }
        });
    };



   

</script>

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
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onClick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        <!-- <li>|</li> -->
        <!-- <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
      </ul>
    </div>
    <!-- <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
    </div> -->
    <h1>Action Plan</h1>
    <div class="intro">
      <p> Please read the following carefully before answering the questions:</p>
      <ul>
      <li>GSP Waste Transformers aims at reinforcing the concept of circular economy in schools where the focus is on use, reuse and restoration of materials, rather than linear use and disposal.</li>
      <li>The plan by the students will be assessed on the following: feasibility, cost effectiveness, localised to school needs, data clarity, specificity of strategies. Provide data to strengthen your Action Plan.</li>
      <li>Descriptive responses will have a character limit, as mentioned for each question below.</li>
      <li>Student involvement is essential as school teams who make it to the final round will need to present the plan online to a jury.</li>
      <li>Please document all the data and responses at your end in case the GSP team requests it for further clarity.</li>
      
      </ul>

    </div>
    <?php echo form_open('Actionp/set', array('id' => 'action-form')); ?>
            <div style= "margin-top:2%;"></div>
            <div class="form-group">
                    <label class="control-label"> <span class="cube">1</span>Title of the plan: Make sure your title is short, catchy & conveys the idea behind your Action Plan. (Max 150 characters)</label>
                    <input type="text" name="Q1AP2" id="Q1AP2" class="form-control" maxlength = "150"
                            placeholder="<?php if (isset($data['Q1AP2'])) echo $data['Q1AP2'] ?>"
                            value="<?php if (isset($data['Q1AP2'])) echo $data['Q1AP2'] ?>"/>
            </div>
            <div style= "margin-top:2%;"></div>
            <div class="form-group">
                    <label class="control-label"> <span class="cube">2</span>Area Profile: Where is the nearest dumping site or landfill? What are the prominent waste management issues in the vicinity of the school? (Max 250 characters)</label>
                    <input type="text"  name="Q2AP1" id="Q2AP1" class="form-control" maxlength = "250"
                            placeholder="<?php if (isset($data['Q2AP1'])) echo $data['Q2AP1'] ?>"
                            value="<?php if (isset($data['Q2AP1'])) echo $data['Q2AP1'] ?>"/>
            </div>
            <div style= "margin-top:2%;"></div>
            <div class="form-group">
                    <label class="control-label"> <span class="cube">3</span>What are the existing major solid waste management (SWM) issues in school that need an action plan? (Max 250 characters)</label>
                    <input type="text"  name="Q3AP1" id="Q3AP1" class="form-control" maxlength = "250"
                            placeholder="<?php if (isset($data['Q3AP1'])) echo $data['Q3AP1'] ?>"
                            value="<?php if (isset($data['Q3AP1'])) echo $data['Q3AP1'] ?>"/>
            </div>
            <div style= "margin-top:2%;"></div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group">
                <label class="control-label"><span class="cube">4</span>In the past years, what was the frequency of waste collection from the school? </label>
</br>
                <label class="control-label"><span class="cube">4(a)</span>Wet / biodegradable / organic waste </label>
                <p>Please choose ‘Not Applicable’ if waste is composted within campus.</p>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1" 
                                            value="<?php echo set_value('Q4AP1', 1) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1"
                                            value="<?php echo set_value('Q4AP1', 2) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1"
                                            value="<?php echo set_value('Q4AP1', 3) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1"
                                            value="<?php echo set_value('Q4AP1', 4) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1"
                                            value="<?php echo set_value('Q4AP1', 5) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP1"
                                            value="<?php echo set_value('Q4AP1', 6) ?>" <?php if (isset($data['Q4AP1'])) echo $data['Q4AP1'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <br>
            <div class="form-group">

                <label class="control-label"><span class="cube">4(b)</span>Dry / recyclable waste</label>

                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2" 
                                            value="<?php echo set_value('Q4AP2', 1) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2"
                                            value="<?php echo set_value('Q4AP2', 2) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2"
                                            value="<?php echo set_value('Q4AP2', 3) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2"
                                            value="<?php echo set_value('Q4AP2', 4) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2"
                                            value="<?php echo set_value('Q4AP2', 5) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP2"
                                            value="<?php echo set_value('Q4AP2', 6) ?>" <?php if (isset($data['Q4AP2'])) echo $data['Q4AP2'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <br>
            <div class="form-group">

                <label class="control-label"><span class="cube">4(c)</span>Domestic hazardous waste</label>

                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3" 
                                            value="<?php echo set_value('Q4AP3', 1) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3"
                                            value="<?php echo set_value('Q4AP3', 2) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3"
                                            value="<?php echo set_value('Q4AP3', 3) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3"
                                            value="<?php echo set_value('Q4AP3', 4) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3"
                                            value="<?php echo set_value('Q4AP3', 5) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP3"
                                            value="<?php echo set_value('Q4AP3', 6) ?>" <?php if (isset($data['Q4AP3'])) echo $data['Q4AP3'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group">

                <label class="control-label"><span class="cube">4(d)</span>E-waste</label>

                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4" 
                                            value="<?php echo set_value('Q4AP4', 1) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4"
                                            value="<?php echo set_value('Q4AP4', 2) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4"
                                            value="<?php echo set_value('Q4AP4', 3) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4"
                                            value="<?php echo set_value('Q4AP4', 4) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4"
                                            value="<?php echo set_value('Q4AP4', 5) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP4"
                                            value="<?php echo set_value('Q4AP4', 6) ?>" <?php if (isset($data['Q4AP4'])) echo $data['Q4AP4'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <br>

            <div class="form-group">

                <label class="control-label"><span class="cube">4(e)</span>Biomedical waste including sanitary waste</label>

                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5" 
                                            value="<?php echo set_value('Q4AP5', 1) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5"
                                            value="<?php echo set_value('Q4AP5', 2) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5"
                                            value="<?php echo set_value('Q4AP5', 3) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5"
                                            value="<?php echo set_value('Q4AP5', 4) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5"
                                            value="<?php echo set_value('Q4AP5', 5) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP5"
                                            value="<?php echo set_value('Q4AP5', 6) ?>" <?php if (isset($data['Q4AP5'])) echo $data['Q4AP5'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="form-group">

                <label class="control-label"><span class="cube">4(f)</span>Construction & Demolition waste</label>

                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6" 
                                            value="<?php echo set_value('Q4AP6', 1) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 1 ? "checked" : "" ?>>
                                            Not Applicable </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6"
                                            value="<?php echo set_value('Q4AP6', 2) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 2 ? "checked" : "" ?>>
                                            Every day</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6"
                                            value="<?php echo set_value('Q4AP6', 3) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 3 ? "checked" : "" ?>>
                                            Twice a week</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6"
                                            value="<?php echo set_value('Q4AP6', 4) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 4 ? "checked" : "" ?>>
                                            Weekly</label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6"
                                            value="<?php echo set_value('Q4AP6', 5) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 5 ? "checked" : "" ?>>
                                            Fortnightly </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="Q4AP6"
                                            value="<?php echo set_value('Q4AP6', 6) ?>" <?php if (isset($data['Q4AP6'])) echo $data['Q4AP6'] == 6 ? "checked" : "" ?>>
                                            Monthly </label>
                </div>
            </div>
            <div style= "margin-top:2%;"></div>
            <div class="form-group">
                    <label class="control-label"> <span class="cube">5</span>What strategies do you propose to improve SWM in the school? (Max 750 characters)</label>
                    <p>Explain and elaborate on the <strong> specific steps to be taken to reduce and manage each type of waste stream mentioned in Q4.</strong><i>( How will the changes be introduced and implemented, as and when schools open in 2021? Also include the possibility of continuation of COVID-19 related materials, such as masks and gloves. How long will the process take – from issue identification to implementation? What will be the challenges and their solutions? Include statistics like cost effectiveness, infrastructural requirement if any, ease of replication if desired. Please give numerical data wherever possible.)</i></p>
                    <input type="text"  name="Q5AP1" id="Q5AP1" class="form-control" maxlength = "750"
                            placeholder="<?php if (isset($data['Q5AP1'])) echo $data['Q5AP1'] ?>"
                            value="<?php if (isset($data['Q5AP1'])) echo $data['Q5AP1'] ?>"/>
            </div>
            <div style= "margin-top:2%;"></div>
            <div class="clearfix">&nbsp;</div>
            
            <div class="form-group">
            <label class="control-label"> <span class="cube">6</span>Is your school a single-use plastic-free zone?<a class="tt"
                                                                       data-tooltip="Single-use plastics are a by-product of petroleum and are thrown away after just one use. The school campus is a single-use plastic-free zone if there are no such plastics present or are being used in any way, inside the campus."><span
                        class="badge">?</span></a><a class="kplink" href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" target="_blank"> </a></label>
            <ul class="list-inline">
                <li>
                <label>
                <input type="radio" onClick="ComputeLab(1)" id="Q6AP1" required name="Q6AP1"
                                value="<?php echo set_value('Q6AP1', 'Y') ?>" <?php if (isset($data['Q6AP1'])) echo $data['Q6AP1'] == 'Y' ? "checked" : "" ?>>
                Yes</label>
                </li>
                <li>
                <label>
                <input type="radio" onClick="ComputeLab(2)" id="Q6AP1" required name="Q6AP1"
                                value="<?php echo set_value('Q6AP1', 'N') ?>" <?php if (isset($data['Q6AP1'])) echo $data['Q6AP1'] == 'N' ? "checked" : "" ?>>
                No</label>
                </li>
            </ul>
            </div>
            <div class="form-group" id="lab1" <?php
                if (isset($data['Q6AP1']))
                {
                    if ($data['Q6AP1'] == 'Y') {
                        echo "style='display: block;'";
                    } else {
                        echo "style=\"display: none;\"";
                    }
                } else {
                    echo "style=\"display: none;\"";

                } ?>

                >
                <label class="control-label"><span class="cube">6(a)</span>Please mention 2 ways in which plastic ban is ensured. (Max 150 characters)</label>
                <input type="text"  name="Q6AP11" id="Q6AP11" class="form-control" maxlength = "150"
                            placeholder="<?php if (isset($data['Q6AP11'])) echo $data['Q6AP11'] ?>"
                            value="<?php if (isset($data['Q6AP11'])) echo $data['Q6AP11'] ?>"/>
                            </div>
                <div class="form-group" id="lab"

                    <?php
                    if (isset($data['Q6AP1']))
                    {
                        if ($data['Q6AP1'] == 'N') {
                            echo "style='display: block;'";
                        } else {
                            echo "style=\"display: none;\"";
                        }
                    } else {
                        echo "style=\"display: none;\"";

                    } ?>
                >
                <label class="control-label"><span class="cube">6(a)</span>Please mention 2 specific ways to phase out single-use plastics in school. (Max 150 characters)</label>
                <input type="text"  name="Q6AP12" id="Q6AP12" class="form-control" maxlength = "150"
                            placeholder="<?php if (isset($data['Q6AP12'])) echo $data['Q6AP12'] ?>"
                            value="<?php if (isset($data['Q6AP12'])) echo $data['Q6AP12'] ?>"/>
                </div> 
                <div style= "margin-top:2%;"></div>
	            <div class="form-group">
	                    <label class="control-label"> <span class="cube">7</span>How will you ensure student and community involvement in the action plan? Please include curriculum interventions, if any. (Max 250 characters)</label>
	                    <input type="text"  name="Q7AP1" id="Q7AP1" class="form-control" maxlength = "250"
	                            placeholder="<?php if (isset($data['Q7AP1'])) echo $data['Q7AP1'] ?>"
	                            value="<?php if (isset($data['Q7AP1'])) echo $data['Q7AP1'] ?>"/>
	            </div>
	            <div style= "margin-top:2%;"></div>
	            
	            <div class="form-group">
	                    <label class="control-label"> <span class="cube">8</span>Provide 3-5 indicators on which the implementation of the plan will be assessed. Include at least one example of all types of indicators: environmental (estimated quantity of waste reduction; management), infrastructural (minor to major changes), and behavioural (culture of SWM within the school community). (Max 350 characters)</label>
	                    <input type="text" name="Q8AP1" id="Q8AP1" class="form-control" maxlength = "350"
	                            placeholder="<?php if (isset($data['Q8AP1'])) echo $data['Q8AP1'] ?>"
	                            value="<?php if (isset($data['Q8AP1'])) echo $data['Q8AP1'] ?>"/>
	            </div>
                <div style= "margin-top:2%;"></div>
	            <div class="form-group">
	                    <label class="control-label"> <span class="cube">9</span>What are the plan’s estimated costs? (Max 250 characters)</label>
	                    <input type="text" name="Q9AP1" id="Q9AP1" class="form-control" maxlength = "250"
	                            placeholder="<?php if (isset($data['Q9AP1'])) echo $data['Q9AP1'] ?>"
	                            value="<?php if (isset($data['Q9AP1'])) echo $data['Q9AP1'] ?>"/>
	            </div>
	            <div style= "margin-top:2%;"></div>
	            
	            <div class="form-group">
	                    <label class="control-label"> <span class="cube">10</span>Please mention two short-term and two long-term benefits of your plan with reference to Q5 above. (Max 250 characters)</label>
	                    <input type="text" name="Q10AP1" id="Q10AP1" class="form-control" maxlength = "350"
	                            placeholder="<?php if (isset($data['Q10AP1'])) echo $data['Q10AP1'] ?>"
	                            value="<?php if (isset($data['Q10AP1'])) echo $data['Q10AP1'] ?>"/>
	            </div>
                <div style= "margin-top:2%;"></div>
                <div class="form-group" id="WastePolicy">
        <label class="control-label">
        <h6>Please upload supporting documents:</h6>
        </label>
        <br>
        &bull;
        Please upload upto three relevant documents and/or pictures, if any.
        Files must be one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 100 KB.

        <br/> 
        <br/>
        <button class="btn uploadbtn upload" data-id="Supporting Document Air" data-toggle="modal"
                    data-target="#airModal"
                    type="button">UPLOAD FILES </button>
        <br>
        <br>
        </div>
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
            <?php foreach ($files as $f) { ?>
            <tr id="index<?php echo $f->id; ?>">
            <?php 
                        
                    $array = explode('.',$f->file_name); 
                $count = count($array);
            $extension = $array[$count-1];
                    ?>
            <?php if($extension == "jpg" || $extension == "jpeg"){ ?>
            <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name ?>" class="img-responsive" /></td>
            <?php }else{ ?>
            <td><img style="width:62px; height:46px;" src="<?php echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>
            <?php }?>
            <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Air_"); ?>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
            <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>





    
    <div class="text-center">
    <button type="button" class="org-btn" id="actionplanp">Previous</button>

      <button type="submit" class="org-btn" id="actionnext" value="movenext">Next</button>
     <input type="button" class="org-btn submit button" value="Save and Resume Later" id="actionresume" style="border:none;" />
    </div> 
    <?php echo form_close(); ?> </div>
</div>
<?php $this->load->view('footer'); ?>

<script>

    $(document).ready(function () {
                $('#actionplanp').on('click', function (data) {
                    var fd = $('#action-form').serialize();
                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
              
                             window.location.href = "<?php echo base_url('Baseline/downloadWasteSection'); ?>";
                            
                            
                        }
                    });
                });
                jQuery(document).ready(function(){
                
                            jQuery('#action-form').validate({
                                rules:{
                                    Q1AP2:{
                                        required:true,
                                    },
                                    Q2AP1:{
                                        required:true,
                                    },
                                    Q3AP1:{
                                        required:true,
                                    },
                                    Q4AP1:{
                                        required:true,
                                    },
                                    Q4AP2:{
                                        required:true,
                                    },
                                    Q4AP3:{
                                        required:true,
                                    },
                                    Q4AP4:{
                                        required:true,
                                    },
                                    Q4AP5:{
                                        required:true,
                                    },
                                    Q4AP6:{
                                        required:true,
                                    },
                                    Q5AP1:{
                                        required:true,
                                    },
                                    Q6AP1:{
                                        required:true,
                                    },
                                    Q7AP1:{
                                        required:true,
                                    },
                                    Q8AP1:{
                                        required:true,
                                    },
                                    Q9AP1:{
                                        required:true,
                                    },
                                    Q10AP1:{
                                        required:true,
                                    }

                                    
                                }
                            
                            });
                
	
                jQuery('#action-form').submit(function(e){
                    
                    
                    $r=jQuery('#action-form').valid();
                    if($r == false)
                    {
                        e.preventDefault();
                        jQuery('#action-form').valid();
                    }
                    
                    
                });



	            /**This Function Used For Save & Logout**/
                $('#actionresume').on('click', function (data) {
                    var fd = $('#action-form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('actionp/set') ?>',
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
        });
</script>