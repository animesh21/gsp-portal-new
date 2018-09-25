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
    document.title = 'Water Consumption Pattern Report';
    $('#example').DataTable( {
        dom: 'lBfrtip',
	   buttons: [
           'excel'
       ],
	   "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": -1
    } );
} );
</script>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>Water Consumption Pattern Report</h2>
        </div>
            
     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>Region/Zone</th>
     <th>State</th>
     
     <th>Total Water Consumption</th>
	  <th>Population</th>
	   <th>Per capita Water Consumption</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $i = 0;
     $sql_states = mysql_query("select * from `region_states`");
     while($states_array = mysql_fetch_array($sql_states))
     {
        $sql_total_schools = mysql_query("SELECT * FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'");
        $total_schools = mysql_num_rows($sql_total_schools);
        
        $sql_region_name = mysql_fetch_array(mysql_query("select * from `region` where `rid` = '".$states_array['rid']."'"));
        
        
        $sql_waterconsumption = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X37X1883) as waterconsumption FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
		
		
		 $sql_Total_population = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X32X33SQ004_SQ003) as total_population FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
		
		$population=$sql_Total_population['total_population'];
		$waterconsumption=$sql_waterconsumption['waterconsumption'];
		
		

		if($population!="" && $waterconsumption!="")
		{
		$Per_capita_waterconsumption=($waterconsumption/$population);	
		//exit;
		}
		
		
        $i++;
        
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_region_name['name']; ?></td>
     <td><?php echo $states_array['name']; ?></td>
     <td><?php echo number_format($sql_waterconsumption['waterconsumption'],2); ?></td>
	 <td><?php echo $sql_Total_population['total_population']; ?></td>
	 <td><?php echo number_format($Per_capita_waterconsumption,2); ?></td>
     </tr>
     <?php
     }
     ?>
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

