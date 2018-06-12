<div class="top-area">
        <h2>2017 Performance Pdf</h2>
</div>
<?php echo form_open('admin/Performance_Report/PdfById'); ?>
<?php echo form_label('Please enter school id  :'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>