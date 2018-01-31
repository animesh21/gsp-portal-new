<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');
//$link = mysql_connect($servername, $username, $password) or die("Couldn't make connection.");
//$db = mysql_select_db($dbname, $link) or die("Couldn't select database");


include('header.php');
?>
<script language="javascript" type="text/javascript">

function popitup(url) {
newwindow=window.open(url,'name','height=200,width=600');
if (window.focus) {newwindow.focus()}
return false;
}


</script>
<script type = 'text/javascript'>
$(document).ready(function() {
	//alert("test");
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

<main class="bdr"  style='border: none;'>
	<div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>AUDIT COMPLETED</h2>
        </div>
            <?php
            if(isset($_REQUEST['para']) && $_REQUEST['para'] == "success")
            {
            ?>
            <div style="text-align: center; color: green; font-size:16px; ">Response PDF has been successfully sent to the Co-ordinator's mail id.</div>
            <?php 
            }
            ?>
            <a href="export_excell_complete.php">
            <div class="exportBtn">
            Export to Excel    
            </div> 
            </a>
            
<table id="example" class="display" cellspacing="0" width="100%">
     <thead>
     <tr>
     <th>S.No</th>
     <th>Sch.Id</th>
     <th>School Name</th>
     <th>State</th>
     <th>City</th>
     <th>Reg. Date</th>
     <th>Comp. Date</th>
     <th>Air Points</th>
     <th>Energy Points</th>
     <th>Food Points</th>
     <th>Land Points</th>
     <th>Water Points</th>
     <th>Waste Points</th>
     <th>Total</th>
     <th>Bonus</th>
     <th>Action</th>
<!--     <th>Completeness</th>-->
     </tr>
     </thead> 
     <tbody>
<?php
//$total_count = mysql_query("select * from `lime_survey_266617` where `submitdate` is not null");
$sql_data = mysql_query("select id,token,266617X4X2252_filecount,266617X8X2260_filecount,266617X36X2259_filecount,266617X7X2258_filecount,266617X37X2257_filecount,266617X38X2256_filecount from `lime_survey_266617` where `submitdate` is not null order by `startdate` DESC");    

$i = 0;
while($sql_data_array=mysql_fetch_array($sql_data))
{
    
   // $sq = "SELECT `completeness` FROM `lime_answers_for_progress` where `token`='".$sql_data_array['token']."'";
   // $sql_1 = mysql_query($sq);
  //  $sql_comp = mysql_fetch_array($sql_1);
    
   
    
$sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$sql_data_array['token']."'"));
    
$sql_bonus = mysql_fetch_array(mysql_query("select SUM(bonus) as bonus from `calculation` where `token` = '".$sql_data_array['token']."'"));
    
    //Air
    $sql_score_air = mysql_fetch_array(mysql_query("select SUM(score) as scoreAir from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='4'"));
    
    //Energy
    $sql_score_energy = mysql_fetch_array(mysql_query("select SUM(score) as scoreEnergy from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='8'"));
    
    //Food
    $sql_score_food = mysql_fetch_array(mysql_query("select SUM(score) as scoreFood from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='36'"));
    
    //Land
    $sql_score_land = mysql_fetch_array(mysql_query("select SUM(score) as scoreLand from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='7'"));
    
    //Water
    $sql_score_water = mysql_fetch_array(mysql_query("select SUM(score) as scoreWater from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='37'"));
    
    //Waste
    $sql_score_waste = mysql_fetch_array(mysql_query("select SUM(score) as scoreWaste from `calculation` where `token` = '".$sql_data_array['token']."' AND `section_id`='38'"));
     
    //For Feedback Icon
    $sql_chk_feedback = mysql_query("select * from `gsp_feedback` where `token` = '".$sql_data_array['token']."'");
    if(mysql_num_rows($sql_chk_feedback) > 0)
    {
        $feedback_icon = 1;
    }
    else
    { 
        $feedback_icon = 0;
    }
	
 $sql_details = mysql_query("select token,attribute_1,attribute_5,attribute_7,datetime,completed from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");	
	
    while($sql_details_array=mysql_fetch_array($sql_details))
    {
        $i++;
    $download_file_link = 0;  
    
    if(($sql_data_array['266617X4X2252_filecount'] !=0) || ($sql_data_array['266617X8X2260_filecount'] !=0) || ($sql_data_array['266617X36X2259_filecount'] !=0) || ($sql_data_array['266617X7X2258_filecount'] !=0) || ($sql_data_array['266617X37X2257_filecount'] !=0) || ($sql_data_array['266617X38X2256_filecount'] !=0))
    {
        $download_file_link = 1;
    }
    ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $sql_data_array['id']; ?></td>
     <td><?php echo $sql_details_array['attribute_1']; ?></td>
     <td><?php echo $sql_details_array['attribute_5']; ?></td>
     <td><?php echo $sql_details_array['attribute_7']; ?></td>
     <td><?php echo date('d-m-Y', strtotime($sql_details_array['datetime'])); ?></td>
     <td><?php if($sql_details_array['completed'] != "N") { echo date('d-m-Y', strtotime($sql_details_array['completed'])); } else { echo "N/A"; } ?></td>
     <td><?php echo number_format($sql_score_air['scoreAir'], 2); ?></td>
     <td><?php echo number_format($sql_score_energy['scoreEnergy'], 2); ?></td>
     <td><?php echo number_format($sql_score_food['scoreFood'], 2); ?></td>
     <td><?php echo number_format($sql_score_land['scoreLand'], 2); ?></td>
     <td><?php echo number_format($sql_score_water['scoreWater'], 2); ?></td>
     <td><?php echo number_format($sql_score_waste['scoreWaste'], 2); ?></td>
     <td><?php echo number_format($sql_score['score2'], 2); ?></td>
     <td><?php echo number_format($sql_bonus['bonus'], 2); ?></td>
     <td class="action">
     <a href="response_detail1.php?id=<?php echo $sql_details_array['token'] ?>" target="_blank" title="View Responses"><img src="images/1446146277_view6.png"/></a>
     <a href="create_response_pdf.php?id=<?php echo $sql_details_array['token']; ?>" target="_blank" title="Download Responses PDF"><img src="images/1446327681_1-02.png"/></a>
     
     <a href="email_pdf.php?id=<?php echo $sql_details_array['token']; ?>" onclick="return popitup('email_pdf.php?id=<?php echo $sql_details_array['token']; ?>')" title="Email PDF to School"><img src="images/1446146350_email-send.png" height="20" width="20"/></a>
     
     <?php if($feedback_icon == 1) { ?>
     <a href="view_complete_feedback.php?stid=<?php echo $sql_details_array['token']; ?>" target="_blank" title="View Feedback"><img src="images/1446579449__feedback.png" height="20" width="20"/></a>
     <?php } ?>
     <?php if($download_file_link == 1) { ?>
     <a href="http://greenschoolsprogramme.org/audit2015/upload/surveys/266617/download_zip.php?stid=<?php echo $sql_details_array['token']; ?>" title="Download Documents"><img src="images/download_zip.png" height="20" width="20"/></a>
     <?php } ?>
     </td>
<!--     <td><?php //echo $sql_comp['completeness']; ?></td>-->
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
    <div class="text-center">Copyright &copy; <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>