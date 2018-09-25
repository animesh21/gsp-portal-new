<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

$east_india = array("West Bengal", "Odisha", "Jharkhand", "Chhattisgarh", "Andaman and Nicobar Islands", "Bihar");
$north_india = array("Punjab", "Jammu and Kashmir", "Haryana", "Rajasthan", "Himachal Pradesh", "Uttar Pradesh", "Uttarakhand", "Delhi", "Chandigarh", "Arunachal Pradesh", "Assam", "Manipur",
"Meghalaya", "Mizoram", "Nagaland", "Sikkim", "Tripura");
$south_india = array("Andhra Pradesh", "Karnataka", "Kerala", "Tamil Nadu", "Telangana", "Lakshadweep", "Puducherry");
$west_india = array("Gujarat", "Maharashtra", "Goa", "Daman and Diu", "Dadra and Nagar Haveli", "Madhya Pradesh");

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
     $sql_states = mysql_query("select * from `region_states`");
     while($states_array = mysql_fetch_array($sql_states))
     {
        $sql_total_schools = mysql_query("SELECT * FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'");
        $total_schools = mysql_num_rows($sql_total_schools);
        
        $sql_region_name = mysql_fetch_array(mysql_query("select * from `region` where `rid` = '".$states_array['rid']."'"));
        
		
        $sql_ground_cov_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X2279SQ001) as ground_cov_area FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
        
        $sql_floors = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X2279SQ002) as total_floors FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
        $avg_floors = $sql_floors['total_floors']/$total_schools;
        
        
        $sql_roof_top_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X2279SQ003) as roof_top FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
        
        $sql_built_up_area = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X7X2279SQ004) as built_up_area FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
		
		
		 $sql_Total_population = mysql_fetch_array(mysql_query("SELECT sum(greencount.266617X32X33SQ004_SQ003) as total_population FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate where greencount.token=takesytate.token AND takesytate.usesleft='0' AND takesytate.completed !='N' AND takesytate.attribute_5='".$states_array['name']."'"));
		
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

