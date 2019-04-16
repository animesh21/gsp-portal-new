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
        <th>Total Energy Point</th>
        <th>Total Food Point</th>        
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

        $state = getStateById($t->state);

        $district=getdistrictById($t->district)
		?>
      <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $t->school_id; ?></td>
	      <td><?php echo $t->userid; ?></td>
        <td><?php echo $t->name; ?></td>
        <td><?php echo $t->category; ?></td>
        <td><?php echo $t->population; ?></td>
  	    <td><?php echo $state; ?></td>
  	    <td><?php echo $district; ?></td>
  	    <td><?php echo $t->codinator_mail; ?></td>
  	    <td><?php echo $t->codinator_mobile; ?></td>	      
        <td><?php echo $t->air_points; ?></td>
        <td><?php echo $t->energy_points; ?></td>
        <td><?php echo $t->food_points; ?></td>
        <td><?php echo $t->land_points; ?></td>
    		<td><?php echo $t->water_points; ?></td>
        <td><?php echo $t->waste_points; ?></td>
    		<td><?php echo $t->air_points + $t->energy_points + $t->food_points + $t->land_points + $t->water_points + $t->waste_points; ?></td>
    		<td><?php 
		  global $percentage;
		  $total=$t->air_points + $t->energy_points + $t->food_points + $t->land_points + $t->water_points + $t->waste_points; 

          if($t->higest_level < 6)
          {

          	$percentage= number_format(($total*100)/95,2);
		    echo $percentage;

          } else{

          	$percentage= number_format(($total*100)/164,2);
		    echo $percentage;

          }

		  
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
<?php

     
      foreach($record1 as $t){

        $state = getStateById($t->state);

        $district=getdistrictById($t->district)
    ?>
      <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $t->school_id; ?></td>
        <td><?php echo $t->userid; ?></td>
        <td><?php echo $t->name; ?></td>
        <td><?php echo $t->category; ?></td>
        <td><?php echo $t->population; ?></td>
        <td><?php echo $state; ?></td>
        <td><?php echo $district; ?></td>
        <td><?php echo $t->codinator_mail; ?></td>
        <td><?php echo $t->codinator_mobile; ?></td>        
        <td><?php echo $t->air_points; ?></td>
        <td><?php echo $t->energy_points; ?></td>
        <td><?php echo $t->food_points; ?></td>
        <td><?php echo $t->land_points; ?></td>
        <td><?php echo $t->water_points; ?></td>
        <td><?php echo $t->waste_points; ?></td>
        <td><?php echo $t->air_points + $t->energy_points + $t->food_points + $t->land_points + $t->water_points + $t->waste_points; ?></td>
        <td><?php 
      global $percentage;
      $total=$t->air_points + $t->energy_points + $t->food_points + $t->land_points + $t->water_points + $t->waste_points; 

          if($t->higest_level < 6)
          {

            $percentage= number_format(($total*100)/95,2);
        echo $percentage;

          } else{

            $percentage= number_format(($total*100)/164,2);
        echo $percentage;

          }

      
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
