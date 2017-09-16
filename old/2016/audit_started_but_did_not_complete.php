<?php 
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');
 
?>

<?php include('header.php'); ?>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>Schools Started The Audit But Did Not Complete</h2>
        </div>
            
<!--            <a href="export_excell.php">
            <div class="exportBtn">
            Export to Excel    
            </div> 
            </a>-->

<table id="example" class="display" cellspacing="0" width="100%">
     <thead>
     <tr>
     <th>S.No</th>
     <th>School Name</th>
     <th>State</th>
     <th>City</th>
     <th>Coordinator's Name</th>
     <th>Coordinator's Email</th>
     <th>Coordinator's Mobile</th>
     <th>Completeness</th>
     <th>Last Login Date</th>
	 <th>View Response</th>
     </tr>
     </thead>
     <tbody>
<?php
$query="SELECT limetoken.attribute_1,limetoken.attribute_5,limetoken.attribute_7,limetoken.firstname,limetoken.email,limetoken.attribute_18,
 progress.completeness,survey.datestamp ,state.name AS state_name,survey.token,limetoken.completed,limetoken.usesleft,limetoken.email,survey.submitdate
 FROM lime_tokens_266617 AS limetoken,lime_answers_for_progress AS progress, lime_survey_266617 AS survey,states_india AS state
 WHERE 
 limetoken.token=survey.token 
 AND limetoken.token=progress.token
 AND  state.state_id=limetoken.attribute_5
 AND  progress.completeness>9 AND  limetoken.usesleft=1  AND  limetoken.completed='N' AND survey.`submitdate` IS NULL ORDER BY survey.datestamp DESC";
$sql_data=mysql_query($query);

$i = 1;
while($sql_data_array=mysql_fetch_array($sql_data))
{
    ?>
     <tr>
     <td><?php echo $i++; ?></td>
     <td><?php echo $sql_data_array['attribute_1']; ?></td>
     <td><?php echo $sql_data_array['state_name']; ?></td>
     <td><?php echo $sql_data_array['attribute_7']; ?></td>
     <td><?php echo $sql_data_array['firstname']; ?></td>
     <td><?php echo $sql_data_array['email']; ?></td>
     <td><?php echo $sql_data_array['attribute_18']; ?></td>
     <td><?php 
         if($sql_data_array['completeness'] != "")
         { 
             echo $sql_data_array['completeness']; 
         } 
         else 
         { 
         echo 0;  
         } 
         ?>%
     </td>
     <td><?php echo date('d-m-Y g:i a', strtotime($sql_data_array['datestamp'])); ?></td>
	 <td><a href="response_detail1.php?id=<?php echo $sql_data_array['token'] ?>" target="_blank" title="View Responses"><img src="images/1446146277_view6.png"/></a></td>
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
<script type = 'text/javascript'>
function subForm()
{
    var option = document.getElementById("srtoption").value;
    window.location = "?sort=" + option;
}

$(document).ready(function() {
     $('#example').DataTable({
          dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
});
</script>
</body>

</html>