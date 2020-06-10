<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<div class="top-area">
  <h2>KVS REGISTRATION 2020 <a href="<?php echo base_url('admin/audit_started_2017/excel_phase1') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div style="overflow-x:auto;">
<table id="example3" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
      <th>Udise</th>
      <th>School Name</th>
      <th style="width:150px">State</th>
      <th>District</th>
      <th>City</th>
      <th>Co-ord. Name</th>
      <th>Co-ord. Email</th>
      <th>Co-ord. Mobile</th>
      <th>Completeness</th>
      <th>Reg. Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach($record as $record){ ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $record->id; ?></td>
      <td><?php echo $record->udise; ?></td>
      <td><?php echo $record->name; ?></td>
      <td><?php echo getStateById($record->state); ?></td>
      <td><?php echo getdistrictById($record->district); ?></td>
      <td><?php echo $record->city; ?></td>
      <td><?php echo $record->coname; ?></td>
      <td><?php echo $record->coemail; ?></td>
      <td><?php echo $record->comobile; ?></td>
      <td><?php echo $record->progress; ?></td>
      <td><?php echo $record->date_added; ?></td>
      <td>
      <button class="btn btn-success" onclick="get_aprove(<?php echo $record->id; ?>)" >APPROVE</button>
      <button class="btn btn-primary" onclick="get_merge(<?php echo $record->id;?>)" style="width: 90px; margin-top: 10px;">MERGE</button>
    </td>      
    </tr>
  <?php } ?>
  </tbody>
</table>
	
</div>

<script type="text/javascript">
    
   function get_aprove($id){
    $.ajax({
       url:'<?php echo base_url("admin/Audit_started_2017/kvs_school_mail");?>',
       type: 'POST',
       data: {'school_id':$id },
       success: function (data){
       alert("Mail has been send to school Successfully!");
       location.reload();
    }
 });
}
</script>

