<div class="top-area">
  <h2>Master View</h2>
</div>
<div style="overflow: scroll">
  <table class="display dataTable no-footer" id="tablePerformance">
    <thead>
      <tr>
        <th>S.No</th>
        <th>School Id</th>
        <th>Name of the Schools submitting GSP Audit in 2017</th>
        <th>State</th>
        <th>District</th>
        <th>2017 Submission</th>
        <th>2016 Submission</th>
        <th>2015 submission</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	 $sr_no=0;
	 for($i=0;$i<sizeof($record);++$i){ ?>
      <tr>
        <td><?php echo ++$sr_no; ?></td>
        <td><?php echo $record[$i]->school_id; ?></td>
        <td><?php echo $record[$i]->school_name; ?></td>
        <td><?php echo $record[$i]->state; ?></td>
        <td><?php echo $record[$i]->district; ?></td>
        <td><?php echo $record[$i]->data_2017; ?></td>
        <td><?php echo $record[$i]->data_2016; ?></td>
        <td><?php echo $record[$i]->data_2015; ?></td>
      </tr>
	  <?php } ?>
    </tbody>
  </table>
</div>
