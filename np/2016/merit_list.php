<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('functions.php');

include('header.php');
?>

<script type = 'text/javascript'>
$(document).ready(function() {
    document.title = 'Merit List Report(GSP-Audit-2015)';
    $('#example').DataTable( {
          dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>Merit List</h2>
        </div>
            

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>Region/Zone</th>
     <th>State</th>
     <th>School Name</th>
     <th>Principal Name</th>
     <th>Score</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $sql_data = mysql_query("SELECT tt.token,tt.attribute_5,tt.attribute_1,tt.attribute_13,regi.name AS region_name,rs.name AS state_name 
FROM `lime_tokens_266617` AS `tt` JOIN `lime_survey_266617` AS `st`,states_india AS rs, region AS regi 
WHERE st.token = tt.token AND tt.`completed` !='N' 
AND tt.`usesleft` <= 0 AND st.submitdate IS NOT NULL AND regi.rid = rs.rid AND tt.attribute_5 = rs.state_id");
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {  
$token=$data['token']; 
         //$sql_region_details = mysql_fetch_array(mysql_query("select `rid` from `region_states` where `name` = '".$data['attribute_5']."'"));
         //$sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
         
        // $sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$data['token']."'"));
         
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['region_name']; ?></td>
     <td><?php echo $data['state_name']; ?></td>
     <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $data['attribute_13']; ?></td>
     <td><?php echo number_format(GetAirPoints($token)+GetEnergyPoints($token)+GetFoodPoints($token)+GetLandPoints($token)+GetWaterPoints($token)+GetWastePoints($token), 2); ?></td>
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

