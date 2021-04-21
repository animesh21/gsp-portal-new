<div class="top-area">
  <h2>MERIT LIST</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="example1" class="display dataTable no-footer">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending" style="width: 74.0208px;">S.No</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Region/Zone: activate to sort column ascending" style="width: 156.021px;">Region/Zone</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 196.021px;">State</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="School Name: activate to sort column ascending" style="width: 341.021px;">School Name</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Principal Name: activate to sort column ascending" style="width: 343.021px;">Principal Name</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Score: activate to sort column ascending" style="width: 85.0208px;">Score</th>
        </tr>
      </thead>
      <tbody>
        <?php 
	     $srno=0;
	     for($i=0; $i<sizeof($records); ++$i){ 
	    ?>
        <tr role="row" class="odd">
          <td><?php echo ++$srno; ?></td>
          <td><?php 
		   if (in_array($records[$i]->state,$east))
		   {
		     echo "East";
		   }
		   if (in_array($records[$i]->state,$west))
		   {
		     echo "West";
		   }
		   if (in_array($records[$i]->state,$north))
		   {
		     echo "North";
		   }
		   if (in_array($records[$i]->state,$south))
		   {
		     echo "South";
		   }
		   if (in_array($records[$i]->state,$north_east))
		   {
		     echo "North East";
		   }
		   if (in_array($records[$i]->state,$central))
		   {
		     echo "Central";
		   }
		   ?></td>
          <td><?php echo getStateById($records[$i]->state); ?></td>
          <td><?php echo $records[$i]->name; ?></td>
          <td><?php echo $records[$i]->principal; ?></td>
          <td><?php 
		     $total_point=$records[$i]->air_points+$records[$i]->energy_points+$records[$i]->food_points+$records[$i]->land_points+$records[$i]->land_points+$records[$i]->water_points+$records[$i]->waste_points;
			 $percentage= ($total_point/164)*100;
	          $percentage=number_format($percentage,1);
		  echo $percentage;
		   ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
