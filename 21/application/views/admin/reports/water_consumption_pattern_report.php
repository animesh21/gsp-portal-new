<div class="top-area">
  <h2>WATER CONSUMPTION PATTERN REPORT</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
      <thead>
        <tr role="row">
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="S.No: activate to sort column ascending" style="width: 68.0208px;">S.No</th>
          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Region/Zone: activate to sort column descending" aria-sort="ascending" style="width: 146.021px;">Region/Zone</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 271.021px;">State</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Total Water Consumption: activate to sort column ascending" style="width: 266.021px;">Total Water Consumption</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Population: activate to sort column ascending" style="width: 128.021px;">Population</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Per capita Water Consumption: activate to sort column ascending" style="width: 315.021px;">Per capita Water Consumption</th>
        </tr>
      </thead>
      <tbody>
        <?php 
	   $srno=0;
	   for($i=0; $i<sizeof($records); ++$i){ 
	   ?>
        <tr role="row" class="odd">
          <td class=""><?php echo ++$srno; ?></td>
          <td class="sorting_1"><?php echo $records[$i]['region']; ?></td>
          <td><?php echo $records[$i]['statename']; ?></td>
          <td><?php 
		   $stateId=getStateIdByName($records[$i]['statename']); 
		   echo calculateWaterconsumption($stateId); ?></td>
          <td><?php 
		   $stateId=getStateIdByName($records[$i]['statename']); 
		   echo calculatePopulation($stateId);
		   ?></td>
          <td><?php 
		  $stateId=getStateIdByName($records[$i]['statename']); 
		  $Waterconsumption=calculateWaterconsumption($stateId);
		  $Population=calculatePopulation($stateId);
		   if(!empty($Population)){
		     $perCaptiaWaterconsumption=$Waterconsumption/$Population;
		     echo number_format((float)$perCaptiaWaterconsumption, 2, '.', '');
		   }
		   ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
