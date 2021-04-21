<style>
    .panel
    {
        border-radius: 0px !important;
    }
    .danger
    {
        color:red !important;
        font-size: 12px !important;
        font-weight: bold !important;
    }
    .list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
</style>
<div class="top-area">
    <h2>Send FeedBack</h2>
</div>
<div class="row">
    <div class="col-md-6 ">
    <div class="panel panel-default">
      <div class="panel-heading">Select Filters</div>
      <div class="panel-body">
        <h3>Select User:</h3>
        <ul class="list-unstyled">
          <li>
            <label class="checkbox-inline">
            <input type="checkbox" value="coemail" name="coemail" id="coemail"  />
            Coordinator Email</label>
          </li>
          <li>
            <label class="checkbox-inline">
            <input type="checkbox" value="schoolemail" name="schoolemail" id="schoolemail" />
            School Email</label>
          </li>
        </ul>
        <h3>Select Progress:</h3>
        <ul class="list-unstyled">
          
          <li>
            <label class="checkbox-inline">
                <input type="checkbox" value="1"  name="progress" class="progress" />
            Progress greater than 5% but less than 50% or equal</label>
          </li>
          <li>
            <label class="checkbox-inline">
            <input type="checkbox" value="2"  name="progress" class="progress"   />
            Progress greater than 50% but less than 75% or equal</label>
          </li>
          <li>
            <label class="checkbox-inline">
            <input type="checkbox" value="3"  name="progress" class="progress"   />
            Progress complete 100%</label>
          </li>
          <li>
            <label class="checkbox-inline">
            <input type="checkbox" value="4"  name="progress" class="progress" />
            75% Uncomplete</label>
          </li>
        </ul>
        <h3>Select State:</h3>
        <select class="form-control chosen" name="email[]" data-placeholder="Select cordinator's email..." >
          <option value="">Select State</option>
          <?php foreach ($state as $s) { ?>
          <option value="<?php echo $s->id; ?>"><?php echo $s->name; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Select School</div>
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger alert-dismissable">';
                    echo $this->session->flashdata('error');
                    echo '</div></div>';
                }
                ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open(base_url('admin/audit_started/feedback'), array('id' => 'feedbackform')); ?>
                <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
				<input type="checkbox" id="select_all" name="checkbox" value="value" style="opacity: 1 !important; position: inherit !important;">Select-All&nbsp;&nbsp;&nbsp;
					<input type="checkbox" id="select_all1" name="checkbox1" value="value1" style="opacity: 1 !important; position: inherit !important;">UnSelect-All
                <div class="form-group" id="hiso">
					<label for="pwd">Email:</label><br/>
					<select class="form-control chosen" name="email[]" data-placeholder="Select cordinator's email..." multiple id="email">
                        <?php foreach ($school as $s) { ?>
                          <option value="<?php echo $s->coemail . ',' . $s->name; ?>"><?php echo $s->coemail; ?></option>
			<!--<option value="<?php //echo $s->coemail; ?>"><?php //echo $s->coemail; ?></option> -->
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pwd">Message:</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <button type="button" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   $('#select_all').click(function() {
    $('#email option').prop('selected', true);
});
$('#select_all1').click(function() {
    $('#email option').prop('selected', false);
});

$("#select_all").click(function(){
        $("#hiso").hide();
    });
    $("#select_all1").click(function(){
        $("#hiso").show();
    });
</script>

<script type="text/javascript">
 $("input[name='progress']").click(function(){
   var ratings="";
    $("input[name='progress']:checked").each(function(){
   var temp = $(this).val();
   ratings = ratings+ temp +",";
  });
    //alert(ratings);
 $.ajax({
          type: "POST",
          url: "<?php echo base_url('admin/audit_started/feed') ?>",
          data: {"id": ratings},
          success:function(data){
            alert(data);
        }
     });
 });
</script>
