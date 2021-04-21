<div class="top-area">
  <h2>GREEN COVER REPORT</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="example" class="display dataTable no-footer">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending" style="width: 28px;">S.No</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Region/Zone: activate to sort column ascending" style="width: 76px;">Region/Zone</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 136px;">State</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Green Landscaped area on ground(m2): activate to sort column ascending" style="width: 200px;">Green Landscaped area on ground(m<sup>2</sup>)</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Terrace green cover(m2): activate to sort column ascending" style="width: 124px;">Terrace green cover(m<sup>2</sup>)</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Grass Play area(m2): activate to sort column ascending" style="width: 101px;">Grass Play area(m<sup>2</sup>)</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Total Site Area(m2): activate to sort column ascending" style="width: 97px;">Total Site Area(m<sup>2</sup>)</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Percentage of the total green cover(%): activate to sort column ascending" style="width: 201px;">Percentage of the total green cover(%)</th>
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
		  echo number_format((float)calculateGreenLandscaped($stateId), 2, '.', '');
		   ?></td>
          <td><?php 
		  $stateId=getStateIdByName($records[$i]['statename']); 
		  echo number_format((float)calculateTerracegreen($stateId), 2, '.', '');
		  ?></td>
          <td><?php 
		    $stateId=getStateIdByName($records[$i]['statename']); 
			echo number_format((float)calculateGrassGreenPlayArea($stateId), 2, '.', '');
		   ?>
          </td>
          <td><?php 
			$stateId=getStateIdByName($records[$i]['statename']);
			echo number_format((float)calculateTotalSiteArea($stateId), 2, '.', '');
			?>
          </td>
          <td><?php 
		   $stateId=getStateIdByName($records[$i]['statename']); 
		   echo number_format(calculateGreenCoverTotalArea($stateId), 2, '.', '');
		   ?></td>
          </td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" rowspan="1"><span style="float:right;">Total</span> </td>
          <td colspan="1" rowspan="1" id="totalgreenLandscaped"></td>
          <td colspan="1" rowspan="1" id="totalterracegreen"></td>
          <td colspan="1" rowspan="1" id="totalgrassplay"> </td>
          <td colspan="1" rowspan="1" id="totalsitearea"></td>
          <td colspan="1" rowspan="1" id="totalpercentagegreencover"></td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    document.title = 'Green Cover Report(GSP-Audit-2015)';
   $('#example').DataTable( {
	   "sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 
				// Green Landscaped area on ground
				totalgreenLandscaped = api.column( 3, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalgreenLandscaped').html(totalgreenLandscaped.toFixed(2));

				
               // Terrace green cover
				totalterracegreen = api.column( 4, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalterracegreen').html(totalterracegreen.toFixed(2));
				
				
				  // Grass Play area
				totalgrassplay = api.column( 5, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalgrassplay').html(totalgrassplay.toFixed(2));
				
				//Total Site Area
				totalsitearea = api.column( 6, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalsitearea').html(totalsitearea.toFixed(2));
				
				
				var total =(totalgreenLandscaped+totalterracegreen+totalgrassplay);
				//alert(total);
				
				var per=(total/totalsitearea);
				//alert(per);
				var totalpercentage=(per*100);
				
				
				//Percentage of the total green cover
				totalpercentagegreencover = api.column( 7, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalpercentagegreencover').html(totalpercentage.toFixed(2));
				
				
			},	
			
        dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>
