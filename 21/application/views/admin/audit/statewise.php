<div class="top-area">
    <h2>REGISTRATION BY STATE (2020)</h2>
</div>
<div class="row" style="margin: 20px 0; min-height: 300px">
    <?php echo form_open(base_url('admin/audit_started/search')); ?>
    <div class="col-lg-5">
        <div class="input-group">

            <?php echo form_dropdown('state',$states,$this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?>

        </div>


    </div>

    <div class="col-lg-5">
        <div class="input-group">

            <?php echo form_dropdown('school', array('2'=>'All','0' => 'Primary', '1' => 'Secondary'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?>

        </div>

    </div>
    <span class="input-group-btn col-lg-2">
        <input type="submit" class="btn btn-danger"  value="Submit" name="Submit">     

    </span>
    <?php echo form_close(); ?>
</div>
