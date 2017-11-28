<div class="top-area">
  <h2>AIR</h2>
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
        <th>Total Air Point</th>
        <th>Total Food Point</th>
        <th>Total Energy Point</th>
        <th>Total Land Point</th>
        <th>Total Water Point</th>
        <th>Total Waste Point</th>
      </tr>
    </thead>
    <tbody>
      <?php
	    $i=0;
	    foreach($record as $t){
		?>
      <tr>
        <td><?php echo $i + 1; ?></td>
        <td><?php echo $t->id; ?></td>
		<td><?php echo $t->userid; ?></td>
        <td><?php echo $t->name; ?></td>
        <td><?php echo $t->category; ?></td>
        <td><?php echo $t->population; ?></td>
        <td><?php echo $t->air_point; ?></td>
        <td><?php echo $t->energy_point; ?></td>
        <td><?php echo $t->food_point; ?></td>
        <td><?php echo $t->land_point; ?></td>
		<td><?php echo $t->water_point; ?></td>
        <td><?php echo $t->waste_point; ?></td>
      </tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
