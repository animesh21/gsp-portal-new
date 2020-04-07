<div>
  <div class="top-area">
    <h2>ALL EXCEL DUMP Of PRIMARY PHASE-1</h2>
  </div>
  <div style="overflow: scroll">
    <table class="display dataTable no-footer" id="tablePerformance">
      <thead>
        <tr>
          <th>S.No</th>
          <th>School Id</th>
          <th>Name of the School/Institution</th>
	  <th>School email</th>
          <th>Address Line 1</th>
          <th>Address Line 2</th>
          <th>Country</th>
          <th>State</th>
          <th>District</th>
          <th>City</th>
          <th>Pin code</th>
          <th>ISD Code</th>
          <th>STD Code</th>
          <th>Landline No.</th>
          <th>Mobile No.</th>
          <th>Principal&#39;s Name</th>
          <th>GSP Coordintor Name</th>
          <th>GSP Coordintor Email</th>
          <th>GSP Coordintor Mobile</th>
          <th>Password</th>
          <th>Air Point </th>
          <th>Energy Point </th>
          <th>Food Point </th>
          <th>Land Point </th>
          <th>Water Point </th>
          <th>Waste Points</th>
          <th>Total Point</th>
          <th>Total Point In Percentage</th>
          <th>Remark</th>
        </tr>
      </thead>
      <tbody>
        <?php
		    error_reporting(0);
	        ini_set('memory_limit', '-1');
	        for ($i = 0; $i < count($record1); $i++) {
		    ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <td><?php echo $record1[$i]->school_id; ?></td>
          <td><?php echo $record1[$i]->name; ?></td>
	  <td><?php echo $record1[$i]->schoolemail; ?></td>
          <td><?php echo $record1[$i]->address1; ?></td>
          <td><?php echo $record1[$i]->address2; ?></td>
          <td><?php echo $record1[$i]->country; ?></td>
          <td><?php echo $record1[$i]->state_name; ?></td>
          <td><?php echo $record1[$i]->district_name; ?></td>
          <td><?php echo $record1[$i]->city; ?></td>
          <td><?php echo $record1[$i]->pincode; ?></td>
          <td><?php echo $record1[$i]->isd; ?></td>
          <td><?php echo $record1[$i]->std; ?></td>
          <td><?php echo $record1[$i]->landline; ?></td>
          <td><?php echo $record1[$i]->mobile; ?></td>
          <td><?php echo $record1[$i]->principal; ?></td>
          <td><?php echo $record1[$i]->codinator; ?></td>
          <td><?php echo $record1[$i]->codinator_mail; ?></td>
          <td><?php echo $record1[$i]->codinator_mobile; ?></td>
          <td><?php echo getPasswordBySchoolUserId1($record1[$i]->userid); ?></td>
          <td><?php echo number_format($record1[$i]->air_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->energy_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->food_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->land_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->water_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->waste_points,2); ?></td>
          <td><?php echo number_format($record1[$i]->air_points + $record1[$i]->energy_points + $record1[$i]->food_points + $record1[$i]->land_points + $record1[$i]->water_points + $record1[$i]->waste_points,2); ?></td>
          <td><?php 
		  global $percentage;
		  $total=$record1[$i]->air_points + $record1[$i]->energy_points + $record1[$i]->food_points + $record1[$i]->land_points + $record1[$i]->water_points + $record1[$i]->waste_points; 
		  $percentage= ($total/95)*100;
	          $percentage=number_format($percentage,2);
		  echo $percentage;
		 ?></td>
          <td><?php
		  if(floor($percentage)>=70):
		   echo "<label class='label label-success'>Green</label>";
		  elseif(floor($percentage)>=50 && floor($percentage)<=69.9):
		  		   echo "<label class='label label-warning' style='background:yellow; color:black;'>Yellow</label>";
		  elseif(floor($percentage)>=35 && floor($percentage)<=49.9):
		  		   echo "<label class='label label-success' style='background:orange; color:black;'>Orange</label>";
		  elseif(floor($percentage)<=34.9):
		  		   echo "<label class='label label-danger'>Red</label>";
		  else:
		    echo "Not Rated";
		  endif;
		  
		?></td>
        </tr>
        <?php
}
?> 
      </tbody>
    </table>
  </div>
</div>
