<div class="top-area">
  <h2>Total Point Calculation</h2>
</div>
<div style="overflow: scroll">
  <table class="display dataTable no-footer" id="tablePerformance">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>School ID</th>
	<th>User Id</th>
        <th>School Name</th>
        <th>School Category</th>
        <th>School Population</th>
	 <th>State</th>
	 <th>District</th>
	  <th>CoEmail</th>
	  <th>CoMobile</th>      
        <th>Total Air Point</th>
        <th>Total Food Point</th>
        <th>Total Energy Point</th>
        <th>Total Land Point</th>
        <th>Total Water Point</th>
        <th>Total Waste Point</th>
		<th>Total Point</th>
		<th>Total Point In Percentage</th>
		<th>Remark</th>
      </tr>
    </thead>
    <tbody>
      <?php
	    $i=0;
	    foreach($record as $t){
		?>
      <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $t->id; ?></td>
	<td><?php echo $t->userid; ?></td>
        <td><?php echo $t->name; ?></td>
        <td><?php echo $t->category; ?></td>
        <td><?php echo $t->population; ?></td>
	<td><?php echo $t->state_name; ?></td>
	      <td><?php echo $t->district_name; ?></td>
	      <td><?php echo $t->coemail; ?></td>
	      <td><?php echo $t->comobile; ?></td>
	      
        <td><?php echo $t->air_point; ?></td>
        <td><?php echo $t->energy_point; ?></td>
        <td><?php echo $t->food_point; ?></td>
        <td><?php echo $t->land_point; ?></td>
		<td><?php echo $t->water_point; ?></td>
        <td><?php echo $t->waste_point; ?></td>
		<td><?php echo $t->air_point + $t->energy_point + $t->food_point + $t->land_point + $t->water_point + $t->waste_point; ?></td>
		<td><?php 
		  global $percentage;
		  $total=$t->air_point + $t->energy_point + $t->food_point + $t->land_point + $t->water_point + $t->waste_point; 
		  $percentage= ($total/164)*100;
		  $percentage=number_format($percentage,1);
		  echo $percentage;
		 ?></td>
		 <td> 
		 <?php
		  if($percentage>=70):
		   echo "<label class='label label-success'>Green</label>";
		  elseif($percentage>=50 && $percentage<=69.9):
		  		   echo "<label class='label label-warning' style='background:yellow; color:black;'>Yellow</label>";
		  elseif($percentage>=35 && $percentage<=49.9):
		  		   echo "<label class='label label-success' style='background:orange; color:black;'>Orange</label>";
		  elseif($percentage<=34.9):
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
