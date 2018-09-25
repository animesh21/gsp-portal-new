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
     $sql_data = mysql_query("SELECT  regi.name, takesytate.attribute_5, 
case 
when greencount.266617X34X1609 ='A1' then 'Morning'
when greencount.266617X34X1609 ='A2' then 'Evening' 
when greencount.266617X34X1609 ='A3' then 'Both' end as Shift, 

case 
when greencount.266617X32X27 ='A1' then 'Male'
when greencount.266617X32X27 ='A2' then 'Female' 
when greencount.266617X32X27 ='A3' then 'Mixed' end as Gender, 

case 
when greencount.266617X32X56 ='A1' then 'Urban Area'
when greencount.266617X32X56 ='A2' then 'Rural Area' end as Location, 

case
when greencount.266617X34X1608SQ001  ='Y' then 'Day Scholar (6 hours)'
when greencount.266617X34X1608SQ002  ='Y' then 'Day Boarding (8 hours)'
when greencount.266617X34X1608SQ003  ='Y' then 'Residential (24 hours)' end as Category,

sum(greencount.266617X37X1893) as dt, sum(greencount.266617X32X33SQ004_SQ003) as tp,sum(greencount.266617X37X1894) as at , sum(greencount.266617X37X1895) as ut, sum(greencount.266617X37X1896SQ005_SQ001) as twcg, sum(greencount.266617X37X1896SQ005_SQ003) as twcb, sum(greencount.266617X37X1896SQ005_SQ002) as twcc, greencount.266617X34X1608SQ001 as cat1, greencount.266617X34X1608SQ002 as cat2, greencount.266617X34X1608SQ003 as cat3
FROM `lime_survey_266617` as greencount,lime_tokens_266617 as takesytate, region_states as rs, region as regi
where greencount.token=takesytate.token and takesytate.usesleft='0' AND regi.rid = rs.rid AND takesytate.attribute_5 = rs.name
GROUP BY takesytate.attribute_5, Shift, Location, Category");
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
         if($data['cat1'] == "Y")
         {
             $recomended_load = 50;
         }
         elseif($data['cat2'] == "Y")
         {
             $recomended_load = 50;
         }
         elseif($data['cat3'] == "Y")
         {
             $recomended_load = 50;
         }
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['name']; ?></td>
     <td><?php echo $data['attribute_5']; ?></td>
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

