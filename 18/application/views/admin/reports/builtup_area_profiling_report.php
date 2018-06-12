<div class="top-area">
  <h2>GREEN COVER REPORT</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="example1" class="display dataTable no-footer">
      <thead>
        <tr role="row">
          <th>S.No</th>
          <th>Region/Zone</th>
          <th>State</th>
          <th>Ground Coverage Area(m<sup>2</sup>)</th>
          <th>Avg. Number of Floors</th>
          <th>Roof Top Area(m<sup>2</sup>)</th>
          <th>Total built-up area(m<sup>2</sup>)</th>
          <th>Population</th>
          <th>Per capita built-up area</th>
        </tr>
      </thead>
      <tbody>
        <?php 
	   $srno=0;
	   for($i=0; $i<sizeof($records); ++$i){ 
	   ?>
        <tr role="row" class="odd">
          <td><?php echo ++$srno; ?></td>
          <td><?php echo $records[$i]['region']; ?></td>
          <td><?php echo $records[$i]['statename']; ?></td>
          <td><?php 
		  $stateId=getStateIdByName($records[$i]['statename']); 
		  echo number_format((float)calculateGroundCoverageArea($stateId), 2, '.', '');
		   ?></td>
          <td><?php 
		  $stateId=getStateIdByName($records[$i]['statename']); 
		  echo number_format((float)calculateNumberOfFloors($stateId), 2, '.', '');
		  ?></td>
          <td>
		   <?php 
		    $stateId=getStateIdByName($records[$i]['statename']); 
			echo number_format((float)calculateRoofTopArea($stateId), 2, '.', '');
		   ?>
		  </td>
          <td>
		    <?php 
			$stateId=getStateIdByName($records[$i]['statename']); 
			echo number_format((float)calculateBuildUpconstructedArea($stateId), 2, '.', '');
			?>
		  </td>
          <td><?php 
		   $stateId=getStateIdByName($records[$i]['statename']); 
		   echo calculatePopulation($stateId);
		   ?></td>
          <td>
		   <?php 
		   if(!empty(calculatePopulation($stateId))){
			$stateId=getStateIdByName($records[$i]['statename']); 
			$totalPercapitabuilduparea=calculateBuildUpconstructedArea($stateId)/calculatePopulation($stateId);
			echo number_format((float)$totalPercapitabuilduparea, 2, '.', '');
			}
			?>
		  </td>
        </tr>
        <?php } ?>
      </tbody>
      </tbody>
    </table>
  </div>
</div>
