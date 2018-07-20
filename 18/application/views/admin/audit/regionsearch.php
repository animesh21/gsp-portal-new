<div class="row" style="margin: 20px 0; min-height: 30px">

    <?php echo form_open(base_url('admin/audit_started/regionsearch')); ?>
    <div class="col-lg-5">
        <div class="input-group">
               <label>Region </label>
          <select name="region" class="form-control">
		  <option value="All">All</option>
		   <option value="North">North</option>
		    <option value="South">South</option>
			 <option value="East">East</option>
			  <option value="West">West</option>
			   <option value="North East">North East</option>
			    <option value="Central">Central</option>
		  
		  </select>  

        </div>


    </div>

    <div class="col-lg-5">
        <div class="input-group">
 <label> School - Level </label>
            <?php echo form_dropdown('school', array('2'=>'All','0' => 'Primary', '1' => 'Secondary'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?>

        </div>

    </div>
    <span class="input-group-btn col-lg-2">
        <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Submit" name="Submit">     
    </span>
    <?php echo form_close(); ?>
</div>
<table class="display dataTable no-footer tablepluging" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>School Name</th>
			<th>Pincode</th>
            <th>State</th>
            <th>City</th>
			<th>District</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
			<th>Progress</th>
<!--            <th>Completeness</th>-->
<!--            <th>Reg. Date</th>-->
            <th>Action</th>
        </tr>
    </thead>
    <?php //echo '<pre>'; print_r($record); ?>
    <tbody>
        <?php $i = 1;
		ini_set('memory_limit', '-1');
        foreach ($record as $r) { ?>
            <tr role="row" class="<?php echo ($i % 2 == 0) ? "even" : "odd"; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $r->id; ?></td>
                <td><?php echo $r->name; ?></td>
				<td><?php echo $r->pincode; ?></td>
                <td><?php echo $r->state_name; ?></td>
                <td><?php echo $r->city; ?></td>
				<td><?php echo $r->district_name; ?></td>
				<td><?php echo $r->coname; ?></td>
                <td><?php echo $r->coemail; ?></td>
                <td><?php echo $r->comobile; ?></td>
				<td><?php echo $r->progress; ?></td>
                <td class="action"><a target="_blank" href="#" title="View Responses"><img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a></td>
            </tr>
            <?php $i++;
} ?>
    </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
