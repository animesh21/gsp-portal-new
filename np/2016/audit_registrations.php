<?php
session_start();
if($_SESSION['username'] == "")
{
	header('location:index.php');
}

include('functions.php');

if(isset($_GET['sort']))
{
	$_SESSION['sortby'] = $_GET['sort'];
}  
include('header.php');
?>
<script type = 'text/javascript'>
$(document).ready(function() {
 //alert("test");
      $('#example').DataTable( {
        /*dom: 'lBfrtip',
        buttons: [
            'excel'
        ],*/
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>

<main class="bdr" style="border: none;">
  <div class="container">
    <div class="wrapper">
      <div class="top-area">
        <h2>REGISTRATIONS</h2>
        <a href="export_excel.php"><button class="exportBtn">Export to Excel</button></a>
      </div>
      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>School Name</th>
            <!--     <th>Token</th>-->
            <th>State</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <!--     <th>Token</th>-->
            <th>Completeness</th>
            <th>Reg. Date</th>
            <th>Action</th>
            <!--     <th>Submit Date</th>--> 
          </tr>
        </thead>
        <tbody>
          <?php

         $start=1;
         //$sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC";
	$sql="SELECT * FROM `lime_tokens_266617` AS t1 JOIN `states_india` AS t2 ON t1.attribute_5=t2.state_id ORDER BY `datetime` DESC"; 

     $sql_data = mysqli_query($conn, $sql);
     
     if(isset($_GET['id']) && $_GET['id'] > 1)
     {
         $i=$start;
     }
     else
     {
         $i=0;
     }
         while($data = mysqli_fetch_array($sql_data))
     {
        
         $sq = "SELECT `completeness` FROM `lime_answers_for_progress` where `token`='".$data['token']."'";
         $sql_1 = mysqli_query($conn,$sq);
         $sql_comp = mysqli_fetch_array($sql_1);
         
         $sq_comdate = "SELECT `submitdate` FROM `lime_survey_266617` where `token`='".$data['token']."'";
         $sql_cmd = mysqli_query($conn,$sq_comdate);
         $sql_cmd_date = mysqli_fetch_array($sql_cmd);
         $i++;
     ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['tid']; ?></td>
            <td><?php echo $data['attribute_1']; ?></td>
            <!--     <td><?php //echo $data['token']; ?></td>-->
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['attribute_7']; ?></td>
            <td><?php echo $data['firstname']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['attribute_18']; ?></td>
            
            <!-- <td><?php //echo $data['token']; ?></td>-->
            <td>
              <?php 
         if($sql_comp['completeness'] != "")
         { 
             echo $sql_comp['completeness']; 
         } 
         else 
             { 
             echo 0;  
             } 
             ?>
              % </td>
            <td><?php echo date('d-m-Y', strtotime($data['datetime'])); ?></td>
            <td class="action"><a target="_blank" href="response_detail1.php?id=<?php echo $data['token']; ?>" title="View Responses"><img src="images/1446146277_view6.png"></a><a href="create_response_pdf.php?id=<?php echo $data['token']; ?>" title="Download PDF"><img src="images/1446327681_1-02.png" height="20" width="20"></a></td>
            <!--     <td><?php //echo $sql_cmd_date['submitdate']; ?></td>--> 
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
</body></html>