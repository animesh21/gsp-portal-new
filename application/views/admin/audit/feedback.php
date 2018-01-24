<style type="text/css">
.panel{border-radius: 0px !important;}
.danger{color:red !important; font-size: 12px !important; font-weight: bold !important;}
.list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
.list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
.list-unstyled li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
.list-inline li{ list-style:none; padding:3px 3px 3px 3px;}
.list-inline li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
.list-inline li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
</style>
<div class="top-area">
  <h2>Send FeedBack</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Select Filters</div>
      <?php echo form_open('admin/audit_started/filter_email/',array('id'=>'frmSendblukemail')); ?>
      <div class="panel-body">
        <div class="form-group col-md-12">
          <label>Subject:</label>
          <input type="text" class="form-control" name="subject" id="subject">
        </div>
        <div class="form-group col-md-12">
          <label for="pwd">Message:</label>
          <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select User Email-Id:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="coemail" name="email" id="coemail"/>
              Coordinator Email</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="schoolemail" name="email" id="schoolemail" />
              School Email</label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-8">
          <label for="pwd">Select Progress Based User:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="100" name="progress" id="progress"  />
              Audit Submitted</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="75" name="progress" id="progress" />
              75 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="50" name="progress" id="progress" />
              50 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" BETWEEN 10 AND 40" name="progress" id="progress"  />
              10-40 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="5" name="progress" id="progress"  />
              5 percent</label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-12">
          <label for="pwd">Select School Category :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_category" id="school_category"/>
              Day Scholar</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_category" id="school_category"/>
              Day Boarding </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_category" id="school_category"/>
              Residential</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="4" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="5" name="school_category" id="school_category"/>
              Day Boarding + Residential</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="6" name="school_category" id="school_category"/>
              Day Scholar + Residential </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="7" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding + Residential </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select School Type :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_type" id="school_type"/>
              Only boys </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_type" id="school_type"/>
              Only Girls </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_type" id="school_type"/>
              Mixed/Co-education </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-8">
          <label for="pwd">Select Type of Aid:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_aid" id="school_type"/>
              Government School</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_aid" id="school_type"/>
              Government - Aided School </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_aid" id="school_type"/>
              Private School </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select State :</label>
          <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
        <div class="form-group  col-lg-4">
          <label for="pwd">School-Category :</label>
          <?php echo form_dropdown('school', array('0' => 'Primary', '1' => 'Secondary','2'=>'All'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
		<div class="form-group  col-lg-4">
          <label for="pwd">Ratings :</label>
		<select class="form-control" name="rating">
		    <option value="">Select Rating</option>
		    <option value="Green">Green</option>
			<option value="Yellow">Yellow</option>
			<option value="Orange">Orange</option>
			<option value="Red">Red</option>
		  </select>
           </div>
		   <div class="form-group col-md-4">
		   		<label for="pwd">Select Name :</label>
				<select class="form-control" name="schoolname">
				<option value="">Select School</option>
					<option value="Satya Bharti">Satya Bharti</option>
					<option value="Mount Litera">Mount Litera</option>
					<option value="Kendriya Vidyalaya">KVS</option>
					<option value="Jawahar Navodya">JNV</option>
		  	    </select>
		   </div>
        <div class="form-group col-md-12">
          <div class="col-md-6">
            <button type="submit" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Filter Email</button>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<script type="text/javascript">
   var email="", user, category, type, aid, state, school_category, rating;
   
</script>
