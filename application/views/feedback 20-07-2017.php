<?php $this->load->view('header');?>
<div class="container">
  <div class="content-form">
    <div class="log-nav">
      <div class="welcome">Welcome, <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME');?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        <li>|</li>
        <li><a class="lptext" title="Change Password Form" href="/audit2016/upload/templates/tfr_responsive/changepass.php?mail=menon.ranjita@gmail.com" rel="shadowbox;width=580;height=500;">Change Password</a></li>
      </ul>
    </div>
 <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width:100%; height: 35px;">100%</div>
    </div>
    <!--<div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: 37.5%; height: 35px;">37.5%</div>
    </div>-->
    <h1>FEEDBACK</h1>
    <?php echo form_open('feedback/set'); ?>
  
    <div class="form-group">
      <label><span class="cube">1</span> Has your school participated in the Green Schools Programme (GSP) Audit before? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe1" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe1" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">2</span> Have teachers from your school participated in teacher interactive workshops organized by the GSP team?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q2Fe1" value="<?php echo set_value('Q2Fe1','Y')?>" <?php if(isset($data['Q2Fe1'])) echo $data['Q2Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q2Fe1" value="<?php echo set_value('Q2Fe1','N')?>" <?php if(isset($data['Q2Fe1'])) echo $data['Q2Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">3</span> Did you find the online information relevant to your environmental education activities?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q3Fe1" value="<?php echo set_value('Q3Fe1','Y')?>" <?php if(isset($data['Q3Fe1'])) echo $data['Q3Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q3Fe1" value="<?php echo set_value('Q3Fe1','N')?>" <?php if(isset($data['Q3Fe1'])) echo $data['Q3Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">4</span> Was the audit easy-to-understand and self-explanatory? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q4Fe1" value="<?php echo set_value('Q4Fe1','Y')?>" <?php if(isset($data['Q4Fe1'])) echo $data['Q4Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q4Fe1" value="<?php echo set_value('Q4Fe1','N')?>" <?php if(isset($data['Q4Fe1'])) echo $data['Q4Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">5</span> Did you understand the present format of the GSP?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q5Fe1" value="<?php echo set_value('Q5Fe1','Y')?>" <?php if(isset($data['Q5Fe1'])) echo $data['Q5Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q5Fe1" value="<?php echo set_value('Q5Fe1','N')?>" <?php if(isset($data['Q5Fe1'])) echo $data['Q5Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">6</span> Do you think your school will be a Green School (resource efficient) by 2019?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q6Fe1" value="<?php echo set_value('Q6Fe1','Y')?>" <?php if(isset($data['Q6Fe1'])) echo $data['Q6Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q6Fe1" value="<?php echo set_value('Q6Fe1','N')?>" <?php if(isset($data['Q6Fe1'])) echo $data['Q6Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">7</span> What would be the help required to make your school a Green School?</label>
    	<textarea type="textbox" rows="5"  name="Q7Fe1" placeholder="<?php if(isset($data['Q7Fe1'])) echo $data['Q7Fe1'] ?>" value="<?php echo set_value('Q7Fe1'); ?>"></textarea>  <br>
     </div>
    <div class="form-group">
      <label><span class="cube">8</span> How would you rate the overall design of the audit?</label>
      <ul class="list-unstyled list-type">
        <li>Content
          <ul class="list-inline list-radio">
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q8Fe1" value="<?php echo set_value('Q8Fe1',1)?>" <?php if(isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 1?"checked":"" ?>>
          	Good</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q8Fe1" value="<?php echo set_value('Q8Fe1',2)?>" <?php if(isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 2?"checked":"" ?>>
          	Average</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q8Fe1" value="<?php echo set_value('Q8Fe1',3)?>" <?php if(isset($data['Q8Fe1'])) echo $data['Q8Fe1'] == 3?"checked":"" ?>>
          	Bad</label>
            </li>
          </ul>
        </li>
        <li>Distribution of time among tasks
          <ul class="list-inline">
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q9Fe1" value="<?php echo set_value('Q9Fe1',1)?>" <?php if(isset($data['Q9Fe1'])) echo $data['Q9Fe1'] == 1?"checked":"" ?>>
          	Good</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q9Fe1" value="<?php echo set_value('Q9Fe1',2)?>" <?php if(isset($data['Q9Fe1'])) echo $data['Q9Fe1'] == 2?"checked":"" ?>>
          	Average</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q9Fe1" value="<?php echo set_value('Q9Fe1',3)?>" <?php if(isset($data['Q9Fe1'])) echo $data['Q9Fe1'] == 3?"checked":"" ?>>
          	Bad</label>
            </li>
          </ul>
        </li>
        <li>Sequencing of tasks
          <ul class="list-inline">
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q10Fe1" value="<?php echo set_value('Q10Fe1',1)?>" <?php if(isset($data['Q10Fe1'])) echo $data['Q10Fe1'] == 1?"checked":"" ?>>
          	Good</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q10Fe1" value="<?php echo set_value('Q10Fe1',2)?>" <?php if(isset($data['Q10Fe1'])) echo $data['Q10Fe1'] == 2?"checked":"" ?>>
          	Average</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q10Fe1" value="<?php echo set_value('Q10Fe1',3)?>" <?php if(isset($data['Q10Fe1'])) echo $data['Q10Fe1'] == 3?"checked":"" ?>>
          	Bad</label>
            </li>
          </ul>
        </li>
        <li>Orientation for conducting tasks
          <ul class="list-inline list-radio">
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q11Fe1" value="<?php echo set_value('Q11Fe1',1)?>" <?php if(isset($data['Q11Fe1'])) echo $data['Q11Fe1'] == 1?"checked":"" ?>>
          	Good</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q11Fe1" value="<?php echo set_value('Q11Fe1',2)?>" <?php if(isset($data['Q11Fe1'])) echo $data['Q11Fe1'] == 2?"checked":"" ?>>
          	Average</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" name="Q11Fe1" value="<?php echo set_value('Q11Fe1',3)?>" <?php if(isset($data['Q11Fe1'])) echo $data['Q11Fe1'] == 3?"checked":"" ?>>
          	Bad</label>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">9</span>Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q12Fe1" value="<?php echo set_value('Q12Fe1','Y')?>" <?php if(isset($data['Q12Fe1'])) echo $data['Q12Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q12Fe1" value="<?php echo set_value('Q12Fe1','N')?>" <?php if(isset($data['Q12Fe1'])) echo $data['Q12Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">10</span>Could you finish all the tasks in given period of time online?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q13Fe1" value="<?php echo set_value('Q13Fe1','Y')?>" <?php if(isset($data['Q13Fe1'])) echo $data['Q13Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q13Fe1" value="<?php echo set_value('Q13Fe1','N')?>" <?php if(isset($data['Q13Fe1'])) echo $data['Q13Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">11</span> How many times did you contact the Green Schools Programme Team for guidance and counseling?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q16Fe1" value="<?php echo set_value('Q16Fe1',1)?>" <?php if(isset($data['Q16Fe1'])) echo $data['Q16Fe1'] == 1?"checked":"" ?>>
          Never</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q16Fe1" value="<?php echo set_value('Q16Fe1',2)?>" <?php if(isset($data['Q16Fe1'])) echo $data['Q16Fe1'] == 2?"checked":"" ?>>
          Once</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q16Fe1" value="<?php echo set_value('Q16Fe1',3)?>" <?php if(isset($data['Q16Fe1'])) echo $data['Q16Fe1'] == 3?"checked":"" ?>>
          Twice</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q16Fe1" value="<?php echo set_value('Q16Fe1',4)?>" <?php if(isset($data['Q16Fe1'])) echo $data['Q16Fe1'] == 4?"checked":"" ?>>
          More than twice</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">12</span> Water being the focus this year, did you find the questionnaire in Water section helpful to make your school understand how to become water efficient?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q14Fe1" value="<?php echo set_value('Q14Fe1','Y')?>" <?php if(isset($data['Q14Fe1'])) echo $data['Q14Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q14Fe1" value="<?php echo set_value('Q14Fe1','N')?>" <?php if(isset($data['Q14Fe1'])) echo $data['Q14Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">13</span> Did your students enjoy doing the Water activities?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q15Fe1" value="<?php echo set_value('Q15Fe1','Y')?>" <?php if(isset($data['Q15Fe1'])) echo $data['Q15Fe1'] == 'Y'?"checked":"" ?>>
           Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q15Fe1" value="<?php echo set_value('Q15Fe1','N')?>" <?php if(isset($data['Q15Fe1'])) echo $data['Q15Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label>
      <h6>Checklist of uploaded documents</h6>
      </label>
      <p>Please confirm that you have uploaded the following documents related to their respective sections:</p>
      <ul class="list-unstyled">
        <li>
          <label class="checkbox-inline">
            <input type="checkbox" name="Q17Fe1" value="<?php echo set_value('Q17Fe1',1); ?>" <?php if(isset($data['Q17Fe1'])) echo "checked" ?>>
            PUC certificates of not more than five buses</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe2" value="<?php echo set_value('Q17Fe2',1); ?>" <?php if(isset($data['Q17Fe2'])) echo "checked" ?>>
           Picture of Air Quality Monitoring equipment of school</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe3" value="<?php echo set_value('Q17Fe3',1); ?>" <?php if(isset($data['Q17Fe3'])) echo "checked" ?>>
            Fuel Bills</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe4" value="<?php echo set_value('Q17Fe4',1); ?>" <?php if(isset($data['Q17Fe4'])) echo "checked" ?>>
            Picture of School owned vehicles</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe5" value="<?php echo set_value('Q17Fe5',1); ?>" <?php if(isset($data['Q17Fe5'])) echo "checked" ?>>
            Electricity Bill</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe6" value="<?php echo set_value('Q17Fe6',1); ?>" <?php if(isset($data['Q17Fe6'])) echo "checked" ?>>
            Picture of 5 star appliances used by school</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe7" value="<?php echo set_value('Q17Fe7',1); ?>" <?php if(isset($data['Q17Fe7'])) echo "checked" ?>>
            Picture of Renewable sources of Energy</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe8" value="<?php echo set_value('Q17Fe8',1); ?>" <?php if(isset($data['Q17Fe8'])) echo "checked" ?>>
            Picture of Mid-day meal being served</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe9" value="<?php echo set_value('Q17Fe9',1); ?>" <?php if(isset($data['Q17Fe9'])) echo "checked" ?>>
            Photographs of lunch boxes</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe10" value="<?php echo set_value('Q17Fe10',1); ?>" <?php if(isset($data['Q17Fe10'])) echo "checked" ?>>
            Picture of Canteen selling UPPF</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe11" value="<?php echo set_value('Q17Fe11',1); ?>" <?php if(isset($data['Q17Fe11'])) echo "checked" ?>>
            Traditional food items sold in canteen</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe12" value="<?php echo set_value('Q17Fe12',1); ?>" <?php if(isset($data['Q17Fe12'])) echo "checked" ?>>
            Pictures of Events sponsored by UPPF companies</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe13" value="<?php echo set_value('Q17Fe13',1); ?>" <?php if(isset($data['Q17Fe13'])) echo "checked" ?>>
            Pictures of Green Cover</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe14" value="<?php echo set_value('Q17Fe14',1); ?>" <?php if(isset($data['Q17Fe14'])) echo "checked" ?>>
            Pictures of landscaped area</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe15" value="<?php echo set_value('Q17Fe15',1); ?>" <?php if(isset($data['Q17Fe15'])) echo "checked" ?>>
            Building construction plan</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe16" value="<?php echo set_value('Q17Fe16',1); ?>" <?php if(isset($data['Q17Fe16'])) echo "checked" ?>>
            Pictures of bio-pesticides</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe17" value="<?php echo set_value('Q17Fe17',1); ?>" <?php if(isset($data['Q17Fe17'])) echo "checked" ?>>
            Pictures of dustbins in classroom showing segregation at source</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe18" value="<?php echo set_value('Q17Fe18',1); ?>" <?php if(isset($data['Q17Fe18'])) echo "checked" ?>>
            Pictures of playground with more than two dustbins</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe19" value="<?php echo set_value('Q17Fe19',1); ?>" <?php if(isset($data['Q17Fe19'])) echo "checked" ?>>
            Picture of audit team weighing solid waste</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe20" value="<?php echo set_value('Q17Fe20',1); ?>" <?php if(isset($data['Q17Fe20'])) echo "checked" ?>>
            Picture of types of solid waste generated</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe21" value="<?php echo set_value('Q17Fe21',1); ?>" <?php if(isset($data['Q17Fe21'])) echo "checked" ?>>
            Pictures of recycling units - composting pit, paper recycling machine, selling paper to kabadiwala, recyclers,etc</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe22" value="<?php echo set_value('Q17Fe22',1); ?>" <?php if(isset($data['Q17Fe22'])) echo "checked" ?>>
            Pictures of housekeeping staff disposing different types of solid waste</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe23" value="<?php echo set_value('Q17Fe23',1); ?>" <?php if(isset($data['Q17Fe23'])) echo "checked" ?>>
            Pictures of burning waste</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe24" value="<?php echo set_value('Q17Fe24',1); ?>" <?php if(isset($data['Q17Fe24'])) echo "checked" ?>>
            Pictures of Electronic items used by school and storage of non-working electronic items</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe25" value="<?php echo set_value('Q17Fe25',1); ?>" <?php if(isset($data['Q17Fe25'])) echo "checked" ?>>
            Certificate of disposing e-waste from authorised dealer/dismantler</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe26" value="<?php echo set_value('Q17Fe26',1); ?>" <?php if(isset($data['Q17Fe26'])) echo "checked" ?>>
            Waste Policy</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe27" value="<?php echo set_value('Q17Fe27',1); ?>" <?php if(isset($data['Q17Fe27'])) echo "checked" ?>>
            Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc</label>
        </li>
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q17Fe28" value="<?php echo set_value('Q17Fe28',1); ?>" <?php if(isset($data['Q17Fe28'])) echo "checked" ?>>
            Pictures of respective audit teams doing survey</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label>The GSP Awards 2016</label>
      <p> The GSP Awards acknowledge and reward schools that have adopted the most innovative and effective practices to manage the natural resources within their own premises. The Awards are given away at the GSP Awards ceremony, an annual event, where top performers from across the country are rewarded for environmental activities that made an impact in their respective schools.</p>
    </div>
    <div class="form-group">
      <ul class="list-inline">
        <li>
          <label class="checkbox-inline">
          <input type="checkbox" name="Q18Fe" value="<?php echo set_value('Q18Fe',1); ?>" <?php if(isset($data['Q18Fe'])) echo "checked" ?>>
            Please enter my school for Green School Awards.</label>
        </li>
      </ul>
    </div>
    <div class="navbar navbar-default" role="navigation">
      <button type="submit" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
      <button type="submit" id="movesubmitbtn" value="movesubmit" name="movesubmit" accesskey="l" class="submit button">Submit Audit</button>
      <button type="submit" id="saveallbtn" value="saveall" name="saveall" class="saveall submit button bottomMargin100">Save &amp; Resume later</button>
    
    </div>
  <?php echo form_close(); ?> </div>
                
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer');?>
<style type="text/css">
.form-group{ margin-bottom:22px;}
.list-type li{ padding:0px 0px 0px 0px; clear:both;}
.list-type li ul{ float:right;}
.radio-inline{ font-weight:100!important; min-width:100px; clear:both; }
.checkbox-inline{ font-weight:100!important; clear:both;}
input[type="radio"]{ background:#fff!important; clear:both;}
</style>
