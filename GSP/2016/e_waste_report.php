<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

include('header.php');
?>

<script type = 'text/javascript'>
$(document).ready(function() {
    document.title = 'E-Waste Report(GSP-Audit-2016)';
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

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
			
      	<h2>E-Waste Report</h2>
        </div>
          
		  <div style="overflow: scroll">  

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No.</th>
     <th>Region/Zone</th>
     <th>State</th>
     <th>Location</th>
	 <th>Category</th>
     <th>TVs</th>
     <th>VCR/DVD Players</th>
	 <th>Refrigerators and freezers</th>
	 <th>Washing machines</th>
	 <th>Air conditioners</th>
     <th>Heaters</th>
     <th>Microwaves</th>
     <th>Ovens</th>
     <th>Toasters</th>
     <th>Electric Kettles</th>
     <th>Personal Computers</th>
     <th>Laptop computer</th>
     <th>Notebook computers</th>
     <th>Notepad computers</th>
     <th>Printers</th>
     <th>Copying Equipment (Photocopiers)</th>
    <th>Projectors</th>
    <th>Whiteboards</th>
    <th>Electrical & electronic typewriters</th>
    <th>Pocket & desk calculators</th>
    <th>Fax machines</th>
    <th>Telex</th>
    <th>Telephones</th>
    <th>Pay telephones</th>
    <th>Mobiles</th>
    <th>Answering systems</th>	 
	
     </tr>
     </thead>
     <tbody>
     <?php
	 
$sql_query ="SELECT  regi.name, rs.name AS state_name, 
CASE 
WHEN greencount.266617X34X1609 ='A1' THEN 'Morning'
WHEN greencount.266617X34X1609 ='A2' THEN 'Evening' 
WHEN greencount.266617X34X1609 ='A3' THEN 'Both' END AS Shift, 

CASE 
WHEN greencount.266617X32X56 ='A1' THEN 'Urban Area'
WHEN greencount.266617X32X56 ='A2' THEN 'Rural Area' END AS Location, 

CASE
 WHEN greencount.266617X34X1608 ='1' THEN 'Day Scholar' 
 WHEN greencount.266617X34X1608 ='2' THEN 'Day Boarding' 
 WHEN greencount.266617X34X1608 ='3' THEN 'Residential' 
 WHEN greencount.266617X34X1608 ='4' THEN 'Day Scholar + Day Boarding'
 WHEN greencount.266617X34X1608 ='5' THEN 'Day Boarding + Residential'
 WHEN greencount.266617X34X1608 ='6' THEN 'Day Scholar + Residential'
 WHEN greencount.266617X34X1608 ='7' THEN 'Day Scholar + Day Boarding + Residential' END AS Category,

SUM(greencount.266617X38X2087SQ001_SQ001) AS tvtotal,
SUM(greencount.266617X38X2087SQ002_SQ001) AS vcrdvdtotal,
SUM(greencount.266617X38X2087SQ003_SQ001) AS totalRefrigerator,
SUM(greencount.266617X38X2087SQ004_SQ001) AS Washingmachines,
SUM(greencount.266617X38X2087SQ005_SQ001) AS Air_cond,
SUM(greencount.266617X38X2087SQ006_SQ001) AS Heaters,
SUM(greencount.266617X38X2087SQ007_SQ001) AS Microwaves,
SUM(greencount.266617X38X2087SQ008_SQ001) AS Ovens,
SUM(greencount.266617X38X2087SQ009_SQ001) AS Toasters,
SUM(greencount.266617X38X2087SQ010_SQ001) AS ElectricKettles,
SUM(greencount.266617X38X2087SQ011_SQ001) AS pernacomp,
SUM(greencount.266617X38X2087SQ012_SQ001) AS Laptop,
SUM(greencount.266617X38X2087SQ013_SQ001) AS NotebookComp,
SUM(greencount.266617X38X2087SQ014_SQ001) AS Notepadcomp,
SUM(greencount.266617X38X2087SQ015_SQ001) AS Printers,
SUM(greencount.266617X38X2087SQ016_SQ001) AS Photocopiers,
SUM(greencount.266617X38X2087SQ017_SQ001) AS Projectors,
SUM(greencount.266617X38X2087SQ018_SQ001) AS Whiteboards,
SUM(greencount.266617X38X2087SQ019_SQ001) AS electronictypewriters,
SUM(greencount.266617X38X2087SQ020_SQ001) AS Pocket,
SUM(greencount.266617X38X2087SQ021_SQ001) AS Faxmachines,
SUM(greencount.266617X38X2087SQ022_SQ001) AS Telex,
SUM(greencount.266617X38X2087SQ023_SQ001) AS Telephones,
SUM(greencount.266617X38X2087SQ024_SQ001) AS Paytelephones,
SUM(greencount.266617X38X2087SQ025_SQ001) AS Mobiles,
SUM(greencount.266617X38X2087SQ026_SQ001) AS Answering_systems	

FROM `lime_survey_266617` AS greencount,lime_tokens_266617 AS takesytate, states_india AS rs, region AS regi
WHERE greencount.token=takesytate.token AND takesytate.usesleft <=0 AND regi.rid = rs.rid AND takesytate.attribute_5 = rs.state_id
GROUP BY takesytate.attribute_5, Shift, Location, Category";
     
    $query_result=mysql_query($sql_query);     
     $i = 0;
while($row_data=mysql_fetch_array($query_result))
{  
$i++; 
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row_data['name'];  ?></td>
     <td><?php echo $row_data['state_name']; ?></td>
     <td><?php echo $row_data['Location']; ?></td>
	 <td><?php echo $row_data['Category']; ?></td>
     <td><?php echo $row_data['tvtotal']; ?></td>
	 <td><?php echo $row_data['vcrdvdtotal']; ?></td>
     <td><?php echo $row_data['totalRefrigerator']; ?></td>
     <td><?php echo $row_data['Washingmachines']; ?></td>
	 <td><?php echo $row_data['Air_cond']; ?></td>
     <td><?php echo $row_data['Heaters']; ?></td>
	 <td><?php echo $row_data['Microwaves']; ?></td>
	 <td><?php echo $row_data['Ovens']; ?></td>
     <td><?php echo $row_data['Toasters']; ?></td>
     <td><?php echo $row_data['ElectricKettles']; ?></td>
	 <td><?php echo $row_data['pernacomp']; ?></td>
     <td><?php echo $row_data['Laptop']; ?></td> 
	 <td><?php echo $row_data['NotebookComp']; ?></td>
	 <td><?php echo $row_data['Notepadcomp']; ?></td>
     <td><?php echo $row_data['Printers']; ?></td>
     <td><?php echo $row_data['Photocopiers']; ?></td>
	 <td><?php echo $row_data['Projectors']; ?></td>
     <td><?php echo $row_data['Whiteboards']; ?></td>
	 <td><?php echo $row_data['electronictypewriters']; ?></td>
	 <td><?php echo $row_data['Pocket']; ?></td>
     <td><?php echo $row_data['Faxmachines']; ?></td>
     <td><?php echo $row_data['Telex']; ?></td>
	 <td><?php echo $row_data['Telephones']; ?></td>
     <td><?php echo $row_data['Paytelephones']; ?></td>
	 <td><?php echo $row_data['Mobiles']; ?></td>
	 <td><?php echo $row_data['Answering_systems']; ?></td>
     </tr>
<?php } ?>
     
     </tbody>
	 
	 
	  <tfoot>
		<tr>
		<td colspan='5'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='tvtotal'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='vcrdvdtotal'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalRefrigerator'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Washingmachines'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Air_cond'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Heaters'></span></td>
		
		<td colspan='0'> <span style="float:left;" id ='Microwaves'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Ovens'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Toasters'></span></td>
		<td colspan='0'> <span style="float:left;" id ='ElectricKettles'></span></td>
		<td colspan='0'> <span style="float:left;" id ='pernacomp'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Laptop'></span></td>
		
		
	    <td colspan='0'> <span style="float:left;" id ='NotebookComp'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Notepadcomp'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Printers'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Photocopiers'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Projectors'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Whiteboards'></span></td>
		
		<td colspan='0'> <span style="float:left;" id ='electronictypewriters'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Pocket'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='Faxmachines'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Telex'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Telephones'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Paytelephones'></span></td>
		
	    <td colspan='0'> <span style="float:left;" id ='Mobiles'></span></td>
		<td colspan='0'> <span style="float:left;" id ='Answering_systems'></span></td>
		
		</tr>
		
	</tfoot>
	 
	 
	 
     </table>
	 
</div>
	 
	 
    </div>
    
  </div>
  
  
  
  
  
  
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>

