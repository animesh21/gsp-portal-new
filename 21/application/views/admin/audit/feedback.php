<style type="text/css">
    .panel{border-radius: 0px !important;}
    .danger{color:red !important; font-size: 12px !important; font-weight: bold !important;}
    .list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-inline li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .error{color: #e86549;
   text-shadow: 1px 1px 1px #000;}
</style>

<script defer src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>

<script>
 $(document).ready(function(){
  $("#frmSendblukemail").validate({
         rules: {
             subject: {
                 required: true,
             },
              message: {
                 required: true,
               },
               
          }
});
});

$('#frmSendblukemail').submit(function(e){

	// alert('hiii');
	// e.preventDefault();
        
        
        var r=jQuery('#frmSendblukemail').valid();
        if(r == false)
        {
                e.preventDefault();
                jQuery('#frmSendblukemail').valid();
        }
        
        
    });
    
</script>


<div class="top-area">
    <h2>Send FeedBack</h2>
</div>
<div class="row">
    <div class="col-md-12">
	<div class="panel panel-default">
	    <div class="panel-heading">Select Filters</div>
	    <?php echo form_open('admin/audit_started/filter_email/', array('id' => 'frmSendblukemail')); ?>
         
          <?php

                if($this->session->flashdata('success'))
                {
                    echo '<div class="alert alert-success alert-dismissable" style="width: 100%; font-size: 15px; text-align: center;">';
                    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                    echo $this->session->flashdata('success');
                    echo '</div>';
                }

          ?>


	    <div class="panel-body">
                <div class="form-group col-md-4">
		    <label for="pwd">Select Phase:</label>
		    <select  class="form-control" name="phase">
                        <option value="0"> Both</option>
                        <option value="1"> First Phase</option>
			<option value="2"> Second Phase</option>
		    </select>
		</div>
		<div class="form-group col-md-12">
		    <label>Subject:</label>
		    <input type="text" class="form-control" name="subject" id="subject">
		</div>
		<div class="form-group col-md-12">
		    <label for="pwd">Message:</label>
		     <textarea name="message" id="editor1" rows="10" cols="80"></textarea>
		</div>
		<div class="form-group col-md-4">
		    <label for="pwd">Select User Email-Id:</label>
		    <select  class="form-control" name="email">
                        <option value="allemail" selected="selected"> All Email</option>
			<option value="coemail"> Coordinator Email</option>
			<option value="schoolemail">  School Email</option>
		    </select>
		</div>
		<div class="form-group col-md-8">
		    <label for="pwd">Select Progress Based User:</label>
		    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="100" name="complete" id="complete"  />
				Audit Submitted</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="100" name="progress[]" id="progress"  />
				100 percent</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="75" name="progress[]" id="progress" />
				75 percent</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="50" name="progress[]" id="progress" />
				50 percent</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value= "BETWEEN 10 AND 40" name="progress_range" id="progress_range"  />
				10-40 percent <a href="#" data-toggle="tooltip" title="This filter will not work with any other combinations."><span class="badge">?</span></a></label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="5" name="progress[]" id="progress"  />
				5 percent</label>
			</li>
		    </ul>
		</div>
		<div class="form-group col-md-12">
		    <label for="pwd">Select School Category :</label>
		    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="1" name="school_category[]" id="school_category"/>
				Day Scholar</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="2" name="school_category[]" id="school_category"/>
				Day Boarding </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="3" name="school_category[]" id="school_category"/>
				Residential</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="4" name="school_category[]" id="school_category"/>
				Day Scholar + Day Boarding </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="5" name="school_category[]" id="school_category"/>
				Day Boarding + Residential</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="6" name="school_category[]" id="school_category"/>
				Day Scholar + Residential </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="7" name="school_category[]" id="school_category"/>
				Day Scholar + Day Boarding + Residential </label>
			</li>
		    </ul>
		</div>
		<div class="form-group col-md-4">
		    <label for="pwd">Select School Type :</label>
		    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="1" name="school_type[]" id="school_type"/>
				Only boys </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="2" name="school_type[]" id="school_type"/>
				Only Girls </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="3" name="school_type[]" id="school_type"/>
				Mixed/Co-education </label>
			</li>
		    </ul>
		</div>
		<div class="form-group col-md-8">
		    <label for="pwd">Select Type of Aid:</label>
		    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="1" name="school_aid[]" id="school_type"/>
				Government School</label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="2" name="school_aid[]" id="school_type"/>
				Government - Aided School </label>
			</li>
			<li>
			    <label class="checkbox-inline">
				<input type="checkbox" value="3" name="school_aid[]" id="school_type"/>
				Private School </label>
			</li>
		    </ul>
		</div>
                <div class="form-group  col-md-4">
		    <label for="pwd">Board of Education:</label>
		    <select class="form-control" name="board">
			<option value="">All</option>
			<option value="1">State board of education</option>
			<option value="2">Central Board of Secondary Education</option>
			<option value="3">Indian Certificate of Secondary Educations</option>
			<option value="4">IB/IGCSE</option>
                        <option value="5">Others</option>
		    </select>
		</div>
		<div class="form-group col-md-4">
		    <label for="pwd">Select State :</label>
		    <?php echo form_dropdown('state', $states, 0, array('class' => 'form-control', 'id' => 'country-select')); ?></div>
		<div class="form-group  col-lg-4">
		    <label for="pwd">School-Category :</label>
		    <?php echo form_dropdown('school', array('0' => 'Primary', '1' => 'Secondary', '2' => 'All'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
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
		    <select class="form-control" name="partner_status">
			<option value="">Select School</option>
			<option value="6">Satya Bharti</option>
			<option value="4">Mount Litera</option>
			<option value="3">KVS</option>
			<option value="2">JNV</option>
			    <option value="1">Church of South India</option>
			<option value="7">Satya Bharti School</option>
			<option value="8">BF Quality Support Programme</option>
			<option value="4">Montfortian Education Foundation</option>
		    </select>
		</div>
		<div class="form-group col-md-4">
		    <label for="pwd">Select District :</label>
		    <?php echo form_dropdown('district', $district, 0, array('class' => 'form-control', 'id' => 'district-select')); ?>
		</div>
		<div class="form-group col-md-4">
		    <label for="pwd">BY School Alphabet :</label>
		    <input type="text" name = "alphabate" />
		</div>    
		    
		<div class="form-group col-md-12">
		    <div class="col-md-6">
			<button type="submit" name="filter" class="btn btn-default btn-block btn-lg">Filter Email</button>
		    </div>
		</div>
	    </div>
	    <?php echo form_close(); ?> </div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>

<script type="text/javascript">
	
CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');

</script>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<style type="text/css">
	.btn-lg:hover {
  background-color: #2291a4;
  border:2px solid gray;
  color: white;
}
</style>
