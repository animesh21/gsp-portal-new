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
        "iDisplayLength": 50
    } );
} );
</script>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>Green Cover Report</h2>
        </div>
            
     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>Region/Zone</th>
     <th>State</th>
     <th>Green Landscaped area on ground(m<sup>2</sup>)</th>
     <th>Terrace green cover(m<sup>2</sup>)</th>
     <th>Grass Play area(m<sup>2</sup>)</th>
     <th>Total Site Area(m<sup>2</sup>)</th>
     <th>Percentage of the total green cover(%)</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $i = 0;
     $sql_states = mysql_query("select * from `states_india`");
     while($states_array = mysql_fetch_assoc($sql_states))
     {
        $sql_region_name = mysql_fetch_assoc(mysql_query("select * from `region` where `rid` = '".$states_array['rid']."'"));
        
        $sql_green_landscaped = mysql_fetch_assoc(mysql_query("SELECT sum(greencount.266617X7X1810SQ002_SQ002) as green_land FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        
        $sql_terrace_green = mysql_fetch_assoc(mysql_query("SELECT sum(greencount.266617X7X1810SQ003_SQ002) as terrace_green FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        
        $sql_grass_play = mysql_fetch_assoc(mysql_query("SELECT sum(greencount.266617X7X1810SQ006_SQ002) as grass_play FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        
        $sql_site_area = mysql_fetch_assoc(mysql_query("SELECT sum(greencount.266617X7X1810SQ009_SQ002) as total_site FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        $i++;
        
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_region_name['name']; ?></td>
     <td><?php echo $states_array['name']; ?></td>
     <td><?php echo number_format($sql_green_landscaped['green_land'],2); ?></td>
     <td><?php echo number_format($sql_terrace_green['terrace_green'],2); ?></td>
     <td><?php echo number_format($sql_grass_play['grass_play'],2); ?></td>
     <td><?php echo number_format($sql_site_area['total_site'],2); ?></td>
     <td>
         <?php
         $total_green_area = $sql_green_landscaped['green_land'] + $sql_terrace_green['terrace_green'] + $sql_grass_play['grass_play'];
         $total_area = $sql_site_area['total_site'];
         echo $perc_green_area = number_format(($total_green_area*100)/$total_area,2);
         ?>
     </td>
     </tr>
     <?php
     }
     ?>
	  <tfoot>
		<tr>
		<td colspan='3'> <span style="float:right;" >Total</span> </td>
		
		<td colspan='0'> <span style="float:left;" id ='totalgreenLandscaped'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalterracegreen'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalgrassplay'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalsitearea'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalpercentagegreencover'></span></td>
		</tr>
		
	</tfoot>
	 
     </tbody>
     </table>
    </div>
    
  </div>
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>

