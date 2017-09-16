<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');
$sql_data = mysql_query("select * from `gsp_feedback`");    
include('header.php');
?>
<script type = 'text/javascript'>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<main class="bdr" style='border: none;'>
	<div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>FEEDBACK</h2>
        </div>
            
            <a href="export_excell_feedbacks.php">
            <div class="exportBtn">
            Export to Excel    
            </div> 
            </a>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead> 
     <tr>
     <th>S.No</th>
     <th>School Name</th>
     <th>State</th>
     <th>City</th>
     <th>Date</th>
     <th>View</th>
     </tr>
    </thead>
    <tbody>
<?php
$i = 0;
while($sql_data_array=mysql_fetch_array($sql_data))
{
    $sql_details = mysql_query("select * from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");
    while($sql_details_array=mysql_fetch_array($sql_details))
    {
        $i++;
    ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_details_array['attribute_1']; ?></td>
     <td><?php echo $sql_details_array['attribute_5']; ?></td>
     <td><?php echo $sql_details_array['attribute_7']; ?></td>
     <td><?php echo date('d-m-Y', strtotime($sql_data_array['date'])); ?></td>
     <td><a target="_blank" href="view_complete_feedback.php?stid=<?php echo $sql_details_array['token']; ?>"><img src="images/1446146277_view6.png"></a></td>
     </tr>

    <?php
    }
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