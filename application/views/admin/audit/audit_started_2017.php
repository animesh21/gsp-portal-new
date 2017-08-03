 <div class="top-area">
        <h2>REGISTRATION 2017 <a href="<?php echo base_url('admin/audit_started_2017/excel') ?>"><button class="exportBtn">Export to Excel</button></a></h2>
         </div>
      <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
<!--            <th>Sch.Id</th>-->
            <th>School Name</th>
            <th>State</th>
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
          <?php $i=1; foreach($record as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $r->name; ?></td>
                <td><?php echo $r->state_name; ?></td>
                <td><?php echo $r->city; ?></td>
                <td><?php echo $r->coname; ?></td>
                <td><?php echo $r->coemail; ?></td>
                <td><?php echo $r->comobile; ?></td>
                <td><?php echo $r->progress.'%'; ?></td>
                <td><?php echo date('d-m-Y',strtotime($r->date_added)); ?></td>
                <td class="action"><a target="_blank" href="<?php echo base_url('admin/audit_started_2017/response/').$r->id; ?>" title="View Responses"><img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a><a href="#" title="Download PDF"><img src="<?php echo base_url() ?>assets/front/images/1446327681_1-02.png" height="20" width="20"></a></td>
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>