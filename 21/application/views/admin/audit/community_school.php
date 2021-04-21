    <div class="top-area">
      <h2>Community Portal New School<a href="<?php echo base_url('admin/survey/audit_started_2019/excel_all_total_school') ?>"><button class="exportBtn">Export to Excel</button></a></h2>
    </div>
    <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
      <thead>
       <tr role="row">
         <th>S.No</th>
         <th>Date of Birth</th>
         <th>School Name</th>
         <th>Pincode</th>
         <th>State</th>
         <th>District</th>
         <th>Student Name</th>
         <th>Student Email</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
      <?php $i=1; foreach($records as $record){ ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $record->date_of_birth; ?></td>
          <td><?php echo $record->school_name; ?></td>
          <td><?php echo $record->pincode; ?></td>
          <td><?php echo get_state_gsp($record->user_state_id); ?></td>
          <td><?php echo get_city_gsp($record->city); ?></td>
          <td><?php echo $record->first_name ." ". $record->last_name; ?></td>
          <td><?php echo $record->email; ?></td>          
          <td class="action">
          <a href="<?php echo 'https://greenschoolsprogramme.org/community/admin/editStudent?id='.$record->id;?>" target="blank" class='btn btn-primary'>Edit Record</a>
          <a href="<?php echo 'https://greenschoolsprogramme.org/community/admin/disabled?id='.$record->id;?>" target="blank" class='btn btn-danger'>Make School Disable</a></td>
        </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
