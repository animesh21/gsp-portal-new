<div class="top-area">
    <h2>REGISTRATION BY STATE</h2>
</div>
<div class="row" style="margin: 20px 0; min-height: 300px">
    <?php echo form_open(base_url('admin/audit_started/search')); ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Submit" name="Submit">
    </div>
    <?php echo form_close(); ?>
</div>