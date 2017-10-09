
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
</style>
<div class="top-area">
    <h2>Send FeedBack</h2>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
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
                <button type="submit" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Submit</button>
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
