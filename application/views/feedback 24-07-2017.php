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
    <div class="form-group hide" id="Question1a">
      <label><span class="cube">1(a)</span> If your answer is yes, in which year did your school first participate in the audit? </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group hide" id="Question1b">
      <label><span class="cube">1(b)</span> If your answer is yes, how many times have you done the audit? </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group">
      <label><span class="cube">2</span> Did you find the online information relevant to your environmental education activities? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe2" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe2" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group hide" id="Question2a">
      <label><span class="cube">2(a)</span> If your answer is no, please share your suggestions: </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group">
      <label><span class="cube">3</span> Was the audit easy to understand and self-explanatory? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe3" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe3" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">4</span> Do you think your school will be a Green School (resource efficient) by 2019? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe4" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe4" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group hide" id="Question4a">
      <label><span class="cube">4(a)</span> If your answer is no, why? </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group">
      <label><span class="cube">5</span> What would be the help required to make your school a Green School? </label>
      <input type="text" name="" id="" class="form-control" />
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
          <th><input type="text" name="" id=""  /></th>
          <th><input type="text" name="" id=""  /></th>
          <th><input type="text" name="" id=""/></th>
        </tr>
        <tr>
          <th>Distribution of time among tasks</th>
          <th><input type="text" name="" id="" /></th>
          <th><input type="text" name="" id="" /></th>
          <th><input type="text" name="" id=""  /></th>
        </tr>
        <tr>
          <th>Sequencing of questions</th>
          <th><input type="text" name="" id="" /></th>
          <th><input type="text" name="" id="" /></th>
          <th><input type="text" name="" id=""  /></th>
        </tr>
        <tr>
          <th>Sequencing of questions</th>
          <th><input type="text" name="" id=""  /></th>
          <th><input type="text" name="" id=""  /></th>
          <th><input type="text" name="" id=""  /></th>
        </tr>
      </table>
    </div>
    <div class="form-group">
      <label><span class="cube">7</span> Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe7" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe7" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group hide" id="Question7a">
      <label><span class="cube">7(a)</span> If your answer is yes, please share your suggestions: </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group">
      <label><span class="cube">8</span> Could you finish all the tasks in given period of time (August?October)? </label>
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
      <label><span class="cube">9</span> How many times did you contact the Green Schools Programme Team for guidance and counseling? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe9" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Never</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe9" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          Once</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe9" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          Twice</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe9" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          More than twice</label>
        </li>
      </ul>
    </div>
    <div class="form-group">
      <label><span class="cube">10</span> Water being the focus of this year, did you find the questionnaire in Water section helpful to make schools understand how to become water efficient? </label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe10" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe10" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group hide" id="Question10a">
      <label><span class="cube">10(a)</span> If your answer is no, please share your suggestions </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group">
      <label><span class="cube">11</span> Did your students enjoy doing Water activities?</label>
      <ul class="list-inline">
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe11" value="<?php echo set_value('Q1Fe1','Y')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'Y'?"checked":"" ?>>
          Yes</label>
        </li>
        <li>
          <label class="radio-inline">
          <input type="radio" name="Q1Fe11" value="<?php echo set_value('Q1Fe1','N')?>" <?php if(isset($data['Q1Fe1'])) echo $data['Q1Fe1'] == 'N'?"checked":"" ?>>
          No</label>
        </li>
      </ul>
    </div>
    <div class="form-group hide" id="Question11a">
      <label><span class="cube">11(a)</span> If your answer is yes, why did they enjoy doing outdoor activities? </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group hide" id="Question11b">
      <label><span class="cube">11(a)</span>If your answer is no, please state why? </label>
      <input type="text" name="" id="" class="form-control" />
    </div>
    <div class="form-group text-center">
      <ul class="list-inline">
        <li>
          <input type="text" name="" id="" class="textbox-style" /><br/>(Teacher's signature)	
        </li>
        <li>
          <input type="text" name="" id="" class="textbox-style" /><br/>(Teacher's signature)	
        </li>
        <li>
          <input type="text" name="" id="" class="textbox-style" /> <br/>(Date)
        </li>
      </ul>
    </div>
	
<div class="text-center">
  <button type="submit" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
  <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
  <input type="submit" class="submit button" id="movenextbtn" value="Save and Resume Later" />
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
.radio-inline{  min-width:100px; clear:both; }
.checkbox-inline{  clear:both;}
input[type="radio"]{ background:#fff!important; clear:both;}
.textbox-style{ border:none!important; border-bottom:1px dotted #000!important;}
.table{ width:800px;}
.table tr td input{ width:100%!important; height:59px!important; border:none!important;}
</style>
<script type="text/javascript">
/**Validation Question 1 Feedback show 1a & 1b***/
  $('input[name="Q1Fe1"]').click(function(){
   if($(this).closest('input[name="Q1Fe1"]').val()==='Y'){
     $('#Question1a').removeClass('hide');
	 $('#Question1b').removeClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe1"]').val()==='N'){
     $('#Question1a').addClass('hide');
	 $('#Question1b').addClass('hide');
   }  
  });
  
  /**Validation Question 2 Feedback show 2a***/
  $('input[name="Q1Fe2"]').click(function(){
   if($(this).closest('input[name="Q1Fe2"]').val()==='N'){
     $('#Question2a').removeClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe2"]').val()==='Y'){
     $('#Question2a').addClass('hide');
   }  
  });
  
  
  /**Validation Question 4 Feedback show 4a***/
  $('input[name="Q1Fe4"]').click(function(){
   if($(this).closest('input[name="Q1Fe4"]').val()==='N'){
     $('#Question4a').removeClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe4"]').val()==='Y'){
     $('#Question4a').addClass('hide');
   }  
  });
  
   /**Validation Question 7 Feedback show 7a***/
  $('input[name="Q1Fe7"]').click(function(){
   if($(this).closest('input[name="Q1Fe7"]').val()==='Y'){
     $('#Question7a').removeClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe7"]').val()==='N'){
     $('#Question7a').addClass('hide');
   }  
  });
  
  /**Validation Question 10 Feedback show 10a***/
  $('input[name="Q1Fe10"]').click(function(){
   if($(this).closest('input[name="Q1Fe10"]').val()==='N'){
     $('#Question10a').removeClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe10"]').val()==='Y'){
     $('#Question10a').addClass('hide');
   }  
  });
  
  /**Validation Question 11 Feedback show 11a***/
  $('input[name="Q1Fe11"]').click(function(){
   if($(this).closest('input[name="Q1Fe11"]').val()==='Y'){
     $('#Question11a').removeClass('hide');
      $('#Question11b').addClass('hide');
   }
   else if($(this).closest('input[name="Q1Fe11"]').val()==='N'){
     $('#Question11b').removeClass('hide');
	 $('#Question11a').addClass('hide');
   }  
  });
</script>
