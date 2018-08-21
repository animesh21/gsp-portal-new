<div class="top-area">
  <h2>Master View</h2>
</div>
<div style="overflow: scroll">
  <table class="display dataTable no-footer" id="tablePerformance">
    <thead>
      <tr>
        <th>S.No</th>
        <th>School Id</th>
        <th>Name of the Schools submitting GSP Audit</th>
        <th>State</th>
        <th>District</th>
		<?php $unique_year=getUniqueyear();  ?>
		<?php for($i=0;$i<sizeof($unique_year);$i++){ ?>     
        <th><?php echo $unique_year[$i]->year_ref; ?></th>
		<?php } ?>
      </tr>
    </thead>
    <tbody>
	 <?php 
	 error_reporting(0);
	        ini_set('memory_limit', '-1');
	 $sr_no=0;
	 $r=0;
	 for($i=0;$i<sizeof($record);++$i){ $r=0; ?>
      <tr>
        <td><?php echo ++$sr_no; ?></td>
        <td><?php echo $record[$i]->school_id; ?></td>
        <td><?php $school_name=getSchoolDaTaByScHooLId($record[$i]->school_id);  echo $school_name[$r]->name; ?></td>
        <td><?php $school_name=getSchoolDaTaByScHooLId($record[$i]->school_id);  echo $school_name[$r]->state_name; ?></td>
        <td><?php $school_name=getSchoolDaTaByScHooLId($record[$i]->school_id);  echo $school_name[$r]->district_name; ?></td>
       <?php $unique_year=getUniqueyear();  ?>
		<?php for($i=0;$i<sizeof($unique_year);$i++){ ?>     
        <td><?php echo getSchoolPointYOY($record[$i]->school_id,$unique_year[$i]->year_ref); ?></td>
		<?php } ?>
      </tr>
	  <?php } ?>
    </tbody>
  </table>
</div>
