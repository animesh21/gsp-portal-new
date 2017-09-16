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
    document.title = 'Built Uo Area Profiling Report(GSP-Audit-2015)';
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
      	<h2>Green Cover Report</h2>
        </div>
            
     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
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
     $i = 0;
     $sql_states = mysql_query("select * from `states_india`");
     while($states_array = mysql_fetch_assoc($sql_states))
     {
        $sql_total_schools = mysql_query("SELECT * FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <= 0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'");
        $total_schools = mysql_num_rows($sql_total_schools);
        
        $sql_region_name = mysql_fetch_array(mysql_query("select * from `region` where `rid` = '".$states_array['rid']."'"));
        
		
        $sql_ground_cov_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X1810SQ001_SQ002) as ground_cov_area FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <= 0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        
        $sql_floors = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X1810SQ014_SQ002) as total_floors FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        $avg_floors = $sql_floors['total_floors']/$total_schools;
        
         
        $sql_roof_top_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X1810SQ011_SQ002) as roof_top FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
        
        $sql_built_up_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X1810SQ013_SQ002) as built_up_area FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
		
		 $sql_Total_population = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X32X33SQ004_SQ003) as total_population FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft <=0 AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['state_id']."'"));
		
		$population=$sql_Total_population['total_population'];
		$sqlbuiltuparea=$sql_built_up_area['built_up_area'];
		//$Per_capita_builtup_area=($sql_built_up_area/$sql_Total_population['total_population']);
		if($population!="" && $sql_built_up_area!="")
		{
		$Per_capita_builtup_area=($sqlbuiltuparea/$population);	
		//exit;
		}
		
		
        $i++;
        
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_region_name['name']; ?></td>
     <td><?php echo $states_array['name']; ?></td>
     <td><?php echo number_format($sql_ground_cov_area['ground_cov_area'],2); ?></td>
     <td><?php echo number_format($avg_floors,1); ?></td>
     <td><?php echo number_format($sql_roof_top_area['roof_top'],2); ?></td>
     <td><?php echo number_format($sql_built_up_area['built_up_area'],2); ?></td>
	 <td><?php echo $sql_Total_population['total_population']; ?></td>
	 <td><?php echo number_format($Per_capita_builtup_area,2); ?></td>
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

