<div class="top-area">
    <h2>REGISTRATION 2017 <a href="<?php echo base_url('admin/audit_started_2017/excel') ?>"><button class="exportBtn">Export to Excel</button></a></h2>
</div>
<table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>School Name</th>
            <th>State</th>
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
    <?php //echo '<pre>'; print_r($record); ?>
    <tbody>
        <?php $i = 1;
        foreach ($record as $r) { ?>
            <tr role="row" class="<?php echo ($i % 2 == 0) ? "even" : "odd"; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $r->id; ?></td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->state_name; ?></td>
                <td><?php echo $r->district_name; ?></td>
                <td><?php echo $r->city; ?></td>
                <td><?php echo $r->coname; ?></td>
                <td><?php echo $r->coemail; ?></td>
                <td><?php echo $r->comobile; ?></td>
                <td><?php echo $r->progress . '%'; ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($r->date_added)); ?></td>
                <td class="action"><a target="_blank" href="<?php echo base_url('admin/audit_started_2017/response/') . $r->id; ?>" title="View Responses">
                        <img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a>
                    <a target="_blank" href="<?php echo base_url('admin/audit_started_2017/pdf/') . $r->id; ?>" title="Download PDF"><img src="<?php echo base_url() ?>assets/front/images/1446327681_1-02.png" height="20" width="20"></a>
                    <br>
                    <a target="_blank" href="<?php echo base_url('admin/audit_started_2017/edit/') . $r->id; ?>" title="Edit Record"><img src="<?php echo base_url() ?>assets/front/images/edit.png" height="20" width="20"></a>  
                    <br>
                    <a target="_self" onclick="Myfun(<?php echo $r->id ?>)" title="Delete Record"><img src="<?php echo base_url() ?>assets/front/images/delete1.png" data-toggle="modal" data-target="#myModal" height="20" width="20"></a> 
                    
                </td>
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    GSP Auth
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <?php echo form_open('admin/Login/Auth'); ?>
                    <div class="form-group">
                    
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Please enter Passcode"/>
                    </div>
                   </div>
                   <div class="form-group">
                    
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="userid" id="schoolid" value=""/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class=" col-sm-10">
                     <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
                    </div>
                  </div>
                <?php echo form_close(); ?>
            </div>    
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </tr>
    <?php $i++;
} ?>


</tbody>
</table>
<script>
function Myfun(argID){
   $('#schoolid').val(argID);
}
</script>
