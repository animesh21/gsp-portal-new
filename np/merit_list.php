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
            
<!--            <div class="" style="float:left; font-size: 13px;">
                <select class="form-control " id="srtoption" onchange="subForm(this.value)">
                    <option value="">Sort by</option>
                    <option value="1" <?php if($_GET['sort'] == 1) { ?>selected="selected"<?php } ?>>State (Descending) (Z-A)</option>
                    <option value="2" <?php if($_GET['sort'] == 2) { ?>selected="selected"<?php } ?>>State (Accending) (A-Z)</option>
                    <option value="3" <?php if($_GET['sort'] == 3) { ?>selected="selected"<?php } ?>>City (Descending) (Z-A)</option>
                    <option value="4" <?php if($_GET['sort'] == 4) { ?>selected="selected"<?php } ?>>City (Accending) (A-Z)</option>
                    <option value="6" <?php if($_GET['sort'] == 6) { ?>selected="selected"<?php } ?>>Date (Descending) (Z-A)</option>
                    <option value="7" <?php if($_GET['sort'] == 7) { ?>selected="selected"<?php } ?>>Date (Accending) (A-Z)</option>
                    <option value="8" <?php if($_GET['sort'] == 8) { ?>selected="selected"<?php } ?>>Name (Descending) (Z-A)</option>
                    <option value="9" <?php if($_GET['sort'] == 9) { ?>selected="selected"<?php } ?>>Name (Accending) (A-Z)</option>
                    
                    
                    
                    <option value="5" <?php if($_GET['sort'] == 5) { ?>selected="selected"<?php } ?>>No Sort</option>
                </select>    
            </div>-->
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
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0");
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
         $sql_region_details = mysql_fetch_array(mysql_query("select `rid` from `region_states` where `name` = '".$data['attribute_5']."'"));
         $sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
         
         $sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$data['token']."'"));
         
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_region_name['name']; ?></td>
     <td><?php echo $data['attribute_5']; ?></td>
     <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $data['attribute_13']; ?></td>
     <td><?php echo number_format($sql_score['score2'],2); ?></td>
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

