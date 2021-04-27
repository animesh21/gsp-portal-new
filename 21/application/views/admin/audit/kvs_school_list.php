<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<div class="top-area">
  <h2>KVS REGISTRATION 2021 
    <a href="<?php echo base_url('admin/audit_started/excel_kvs_school_list') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>

<div style="overflow-x:auto;">
  <span style="font-size: 18px; margin-left: 18; float: right;" > Search: <input id="myInput" type="text" class="placeholder aria-controls"> </span> 
<table  class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
      <th>Udise</th>
      <th>School Name</th>
      <th>School Email Id</th>
      <th style="width:150px">State</th>
      <th>District</th>
      <th>City</th>
      <th>Pincode</th>
      <th>Co-ord. Name</th>
      <th>Co-ord. Email</th>
      <th>Co-ord. Mobile</th>
      <th>Completeness</th>
      <th>Reg. Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php $i=1; foreach($record as $record){ ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $record->id; ?></td>
      <td><?php echo $record->udise; ?></td>
      <td><?php echo $record->name; ?></td>
      <td><?php echo $record->schoolemail; ?></td>
      <td><?php echo getStateById($record->state); ?></td>
      <td><?php echo getdistrictById($record->district); ?></td>
      <td><?php echo $record->city; ?></td>
      <td><?php echo $record->pincode; ?></td>
      <td><?php echo $record->coname; ?></td>
      <td><?php echo $record->coemail; ?></td>
      <td><?php echo $record->comobile; ?></td>
      <td><?php echo $record->progress; ?></td>
      <td><?php echo $record->date_added; ?></td>
      <td>
      <button class="btn btn-success" onclick="get_aprove(<?php echo $record->id; ?>)" >APPROVE</button>

      </br>
      <button style="margin-top:10px" class="btn btn-success"  onclick="makeSchoolDisable(<?php echo $record->id; ?>)" >DISABLE</button>
      </br>
      <!-- <button class="btn btn-primary" onclick="get_merge(<?php echo $record->id;?>)" style="width: 90px; margin-top: 10px;">MERGE</button> -->
      <a onclick="get_merge(<?php echo $record->id; ?>)" id="mymodal122" data-toggle="modal" data-target="#myModal12e" class="btn btn-primary" style="width: 90px; margin-top: 10px;" >MERGE</a>

    </td>      
    </tr>
  <?php } ?>
  </tbody>
</table>
  
</div>

<script type="text/javascript">
    
   function get_aprove($id){
    $.ajax({
       url:'<?php echo base_url("admin/audit_started/kvs_school_mail");?>',
       type: 'POST',
       data: {'school_id':$id },
       success: function (data){
       alert("Mail has been send to school Successfully!");
       location.reload();
    }
 });
}

function makeSchoolDisable($id){
$.ajax({
       url:'<?php echo base_url("admin/audit_started/disable_schoolapp");?>',
       type: 'POST',
       data: {'school_id':$id },
       success: function (data){
       alert('School Has Been Successfully Disabled');
       location.reload();
    }
 });
}
function Myfun(argID){
   $('#schoolid').val(argID);
   $('#myModal').css('display','');
}
</script>







<div class="modal fade" id="myModal12e" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Old School Id</h4>
      </div>
     <?php echo form_open_multipart('admin/audit_started/kvs_school_merge'); ?>
      <div class="modal-body">
       <label style="font-weight:600;">
        Old School Id
      </label>
      <input type="text" class="form-control" name="old_school_id" id="old_school_id" required="">
      <input type="text" class="form-control" name="mergeid" id="mergeid">

    
   
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-primary" id="submit" style="margin: 0px 0px 0px 240px;">Submit</button>
      </div>
    <?php echo form_close();?>
    </div>
  </div>
</div>



<script type="text/javascript">
  
 function get_merge($id)
 {
   var id = $id; 
   $('#mergeid').val(id); 

 }
</script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    // alert(value);
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

