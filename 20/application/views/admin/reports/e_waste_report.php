<div class="top-area">
  <h2>E-WASTE REPORT</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <div style="overflow-y: hidden; overflow-x: scroll; width:100%;">
      <table id="example" class="display dataTable no-footer">
        <thead>
          <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No.: activate to sort column descending" style="width: 31.0208px;">S.No.</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Region/Zone: activate to sort column ascending" style="width: 76.0208px;">Region/Zone</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 32.0208px;">State</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 51.0208px;">Location</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 55.0208px;">Category</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="TVs: activate to sort column ascending" style="width: 23.0208px;">TVs</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="VCR/DVD Players: activate to sort column ascending" style="width: 60.0208px;">VCR/DVD Players</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Refrigerators and freezers: activate to sort column ascending" style="width: 79.0208px;">Refrigerators and freezers</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Washing machines: activate to sort column ascending" style="width: 56.0208px;">Washing machines</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Air conditioners: activate to sort column ascending" style="width: 75.0208px;">Air conditioners</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Heaters: activate to sort column ascending" style="width: 48.0208px;">Heaters</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Microwaves: activate to sort column ascending" style="width: 71.0208px;">Microwaves</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Ovens: activate to sort column ascending" style="width: 38.0208px;">Ovens</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Toasters: activate to sort column ascending" style="width: 50.0208px;">Toasters</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Electric Kettles: activate to sort column ascending" style="width: 45.0208px;">Electric Kettles</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Personal Computers: activate to sort column ascending" style="width: 66.0208px;">Personal Computers</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Laptop computer: activate to sort column ascending" style="width: 58.0208px;">Laptop computer</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Notebook computers: activate to sort column ascending" style="width: 64.0208px;">Notebook computers</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Notepad computers: activate to sort column ascending" style="width: 64.0208px;">Notepad computers</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Printers: activate to sort column ascending" style="width: 48.0208px;">Printers</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Copying Equipment (Photocopiers): activate to sort column ascending" style="width: 87.0208px;">Copying Equipment (Photocopiers)</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Projectors: activate to sort column ascending" style="width: 61.0208px;">Projectors</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Whiteboards: activate to sort column ascending" style="width: 78.0208px;">Whiteboards</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Electrical &amp;amp; electronic typewriters: activate to sort column ascending" style="width: 69.0208px;">Electrical &amp; electronic typewriters</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Pocket &amp;amp; desk calculators: activate to sort column ascending" style="width: 65.0208px;">Pocket &amp; desk calculators</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Fax machines: activate to sort column ascending" style="width: 56.0208px;">Fax machines</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Telex: activate to sort column ascending" style="width: 31.0208px;">Telex</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Telephones: activate to sort column ascending" style="width: 67.0208px;">Telephones</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Pay telephones: activate to sort column ascending" style="width: 66.0208px;">Pay telephones</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Mobiles: activate to sort column ascending" style="width: 48.0208px;">Mobiles</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Answering systems: activate to sort column ascending" style="width: 64.0208px;">Answering systems</th>
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
            <td><?php echo $records[$i]->location; ?></td>
            <td><?php echo $records[$i]->category; ?></td>
            <td><?php echo $records[$i]->Q12Wa1S4;?></td>
            <td><?php echo $records[$i]->Q12Wa2S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa3S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa4S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa5S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa6S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa7S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa8S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa9S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa10S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa11S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa12S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa13S4; ?></td>
            <td><?php //echo $records[$i]->Q12Wa14S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa15S4; ?></td>
            <td><?php echo $records[$i]->Q12Wa16S4; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
            <td><?php echo $records[$i]->Q7E3S1; ?></td>
          </tr>
          <?php } ?>
        <tfoot>
          <tr>
            <td colspan="5"><span class="pull-right">Total</span></td>
            <td id="tvtotal"></td>
            <td id="vcrdvdtotal"></td>
            <td id="totalRefrigerator"></td>
            <td id="Washingmachines"></td>
            <td id="Air_cond"></td>
            <td id="Heaters"></td>
            <td id="Microwaves"></td>
            <td id="Ovens"></td>
            <td id="Toasters"></td>
            <td id="ElectricKettles"></td>
            <td id="pernacomp"></td>
            <td id="Laptop"></td>
            <td id="NotebookComp"></td>
            <td id="Notepadcomp"></td>
            <td id="Printers"></td>
            <td id="Photocopiers"></td>
            <td id="Projectors"></td>
            <td id="Whiteboards"></td>
            <td id="electronictypewriters"></td>
            <td id="Pocket"></td>
            <td id="Faxmachines"></td>
            <td id="Telex"></td>
            <td id="Telephones"></td>
            <td id="Paytelephones"></td>
            <td id="Mobiles"></td>
            <td id="Answering_systems"></td>
          </tr>
        </tfoot>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    document.title = 'E-Waste Report(GSP-Audit-2017)';
    $('#example').DataTable( {
		
		"sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 
	           
				
				// tv total this page
				tvtotal = api.column( 5, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );

				$('#tvtotal').html(tvtotal.toFixed(0));	

				
				// vcrdvdtotal total this page
				vcrdvdtotal = api.column( 6, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#vcrdvdtotal').html(vcrdvdtotal.toFixed(0));
				
				
              // Total totalRefrigerator  over this page
				totalRefrigerator = api.column( 7, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalRefrigerator').html(totalRefrigerator.toFixed(0));	
			  
			  
			   // Total Washingmachines over this page
				Washingmachines = api.column( 8, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Washingmachines').html(Washingmachines.toFixed(0));	

			     // Total Air_cond over this page
				Air_cond = api.column( 9, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Air_cond').html(Air_cond.toFixed(0));	

			      // Total Heaters over this page
				Heaters = api.column( 10, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Heaters').html(Heaters.toFixed(0));

			    // Total Microwaves over this page
				Microwaves = api.column( 11, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Microwaves').html(Microwaves.toFixed(0));
		
		    // Total Ovens over this page
				Ovens = api.column( 12, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Ovens').html(Ovens.toFixed(0));
		
		    // Total Toasters over this page
				Toasters = api.column( 13, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Toasters').html(Toasters.toFixed(0));

			  		    // Total ElectricKettles over this page
				ElectricKettles = api.column( 14, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#ElectricKettles').html(ElectricKettles.toFixed(0));
			  
			  	    // Total pernacomp over this page
				pernacomp = api.column( 15, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#pernacomp').html(pernacomp.toFixed(0));

		
		 // Total Laptop over this page
				Laptop = api.column( 16, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Laptop').html(Laptop.toFixed(0));
		
			 // Total NotebookComp over this page
				NotebookComp = api.column( 17, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#NotebookComp').html(NotebookComp.toFixed(0));

			   // Total Notepad computer over this page
				Notepadcomp = api.column( 18, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Notepadcomp').html(Notepadcomp.toFixed(0));
		
			   // Total Printers over this page
				Printers = api.column( 19, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Printers').html(Printers.toFixed(0));
		
		
		// Total Photocopiers over this page
				Photocopiers = api.column( 20, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Photocopiers').html(Photocopiers.toFixed(0));

		// Total Projectors over this page
				Projectors = api.column( 21, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Projectors').html(Projectors.toFixed(0));
			  
			  // Total Whiteboards over this page
				Whiteboards = api.column( 22, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Whiteboards').html(Whiteboards.toFixed(0));
			  
			  
			    // Total electronictypewriters over this page
				electronictypewriters = api.column( 23, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#electronictypewriters').html(electronictypewriters.toFixed(0));
	

	  // Total Pocket over this page
				Pocket = api.column( 24, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Pocket').html(Pocket.toFixed(0));
			  
			  
			    // Total Faxmachines over this page
				Faxmachines = api.column( 25, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Faxmachines').html(Faxmachines.toFixed(0));
		

			    // Total Telex over this page
				Telex = api.column( 26, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Telex').html(Telex.toFixed(0));
		
		
		// Total Telephones over this page
				Telephones = api.column( 27, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Telephones').html(Telephones.toFixed(0));
			  
			  
			  	// Total Paytelephones over this page
				Paytelephones = api.column( 28, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Paytelephones').html(Paytelephones.toFixed(0));
			  
			  
			  // Total Mobiles over this page
				Mobiles = api.column( 29, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Mobiles').html(Mobiles.toFixed(0));
		
		  // Total Answering_systems over this page
				Answering_systems = api.column( 30, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#Answering_systems').html(Answering_systems.toFixed(0));
		

			
			},
		
		
        dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 10
    } );
} );
</script>
