<div class="top-area">
        <h2>Total School Started Audit But Did Not Complete<a href="<?php echo base_url('admin/survey/Audit/excel_started_but_not_complete') ?>"><button class="exportBtn">Export to Excel</button></a></h2>
</div>

      <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
           <th>S.No</th>
            <th>Sch.Id</th>
	    <th>UDISE Code</th>
            <th>School Name</th>
            <th>pincode</th>
            <th>City</th>
            <th>State</th>
            <th>District</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Progress</th>

            <th>Action</th>
          </tr>
        </thead>
        <?php //echo '<pre>'; print_r($record); ?>
        <tbody>
          <?php $i=1; foreach($records as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $r->id; ?></td>
		<td><?php echo $r->udise; ?></td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->pincode; ?></td>
                 <td><?php echo $r->city; ?></td>
               <td><?php echo $r->state_name; ?></td>
                <td><?php echo $r->district_name; ?></td>
                <td><?php echo $r->coname; ?></td>
                <td><?php echo $r->coemail; ?></td>
                <td><?php echo $r->comobile; ?></td>
                <td><?php echo $r->progress_phase_1; ?></td>
                <td class="action"><a target="_blank" href="<?php echo base_url('admin/audit_started/response/').$r->id; ?>" title="View Responses"><img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a></td>
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	 
