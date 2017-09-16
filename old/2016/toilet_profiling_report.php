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
    document.title = 'Toilet Profiling Report(GSP-Audit-2015)';
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
      	<h2>Toilet Profiling Report</h2>
        </div>
            
     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>Region</th>
     <th>State</th>
     <th>Shift</th>
     <th>Location</th>
     <th>Category</th>
    
     <th>Actual Load(Drinking Water Taps)</th>
     <th>Ablution Taps</th>
     <th>Urinals</th>
     <th>No. of Toilets(Water Closets)Girls</th>
     <th>No. of Toilets(Water Closets)Boys</th>
     <th>No. of Toilets(Water Closets)Common</th>
	 <th>Total</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $state = "Delhi";
     $sql_data = mysql_query("SELECT  regi.name, rs.name AS state_name, 
CASE 
WHEN greencount.266617X34X1609 ='A1' THEN 'Morning'
WHEN greencount.266617X34X1609 ='A2' THEN 'Evening' 
WHEN greencount.266617X34X1609 ='A3' THEN 'Both' END AS Shift, 

CASE 
WHEN greencount.266617X32X27 ='A1' THEN 'Male'
WHEN greencount.266617X32X27 ='A2' THEN 'Female' 
WHEN greencount.266617X32X27 ='A3' THEN 'Mixed' END AS Gender, 

CASE 
WHEN greencount.266617X32X56 ='A1' THEN 'Urban Area'
WHEN greencount.266617X32X56 ='A2' THEN 'Rural Area' END AS Location, 

CASE
WHEN greencount.266617X34X1608  ='1' THEN 'Day Scholar'
WHEN greencount.266617X34X1608  ='2' THEN 'Day Boarding'
WHEN greencount.266617X34X1608  ='3' THEN 'Residential' 
WHEN greencount.266617X34X1608  ='4' THEN 'Day Scholar + Day Boarding'
WHEN greencount.266617X34X1608 ='5' THEN 'Day Boarding + Residential'
WHEN greencount.266617X34X1608 ='6' THEN 'Day Scholar + Residential'
WHEN greencount.266617X34X1608 ='7' THEN 'Day Scholar + Day Boarding + Residential'
END AS Category,

SUM(greencount.266617X37X1893) AS dt,
SUM(greencount.266617X32X33SQ004_SQ003) AS tp,SUM(greencount.266617X37X1894) AS at, 
SUM(greencount.266617X37X1895) AS ut,
SUM(greencount.266617X37X1896SQ005_SQ001) AS twcg, 
SUM(greencount.266617X37X1896SQ005_SQ003) AS twcb, 
SUM(greencount.266617X37X1896SQ005_SQ002) AS twcc,
greencount.266617X34X1608 AS cat1
FROM `lime_survey_266617` AS greencount,lime_tokens_266617 AS takesytate, states_india AS rs, region AS regi
WHERE greencount.token=takesytate.token AND takesytate.usesleft <=0 AND regi.rid = rs.rid AND takesytate.attribute_5 = rs.state_id
GROUP BY takesytate.attribute_5, Shift, Location, Category");
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
   
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['name']; ?></td>
     <td><?php echo $data['state_name']; ?></td>
     <td><?php echo $data['Shift']; ?></td>
     <td><?php echo $data['Location']; ?></td>
     <td><?php echo $data['Category']; ?></td>
  
     <td><?php echo $dtload = number_format($data['tp']/$data['dt'],2); ?></td>
     <td><?php echo $atload = number_format($data['tp']/$data['at'],2); ?></td>
     <td><?php echo $utload = number_format($data['tp']/$data['ut'],2); ?></td>
     <td><?php echo $data['twcg']; ?></td>
     <td><?php echo $data['twcb']; ?></td>
     <td><?php echo $data['twcc']; ?></td>
	 
	 	<?php $toiletstotal=$data['twcg']+$data['twcb']+$data['twcc']; 
	 $totalload = number_format($data['tp']/$toiletstotal,2); ?>
	 <td><?php echo $totalload; ?></td>
	 
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

