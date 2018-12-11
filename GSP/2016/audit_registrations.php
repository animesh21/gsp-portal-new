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
    $('#example').DataTable();
} );
</script>
 
<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>REGISTRATIONS</h2>
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
            <a href="export_excell.php">
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
//     $start=0;
//     $limit=100;
//     
//     if(isset($_GET['id']))
//     {
//     $id=$_GET['id'];
//     }
//     else
//     {
//     $id=1;    
//     }
//     $start=($id-1)*$limit;
//    
//     if($_GET['id'] == ""  && $_SESSION['sortby'] != "")
//     {
//         if($_SESSION['sortby'] == 1)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 2)
//         {
//             echo $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 3)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 4)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 6)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 7)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 8)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 9)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` ASC LIMIT $start, $limit";
//         }
//         
//         
//         
//         if($_SESSION['sortby'] == 5)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//         }
//         
//     }
//     
//     else if(($_GET['id'] !="") && ($_SESSION['sortby'] != ""))
//     {
//	$id=$_GET['id'];
//	if($_SESSION['sortby'] == 1)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 2)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 3)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 4)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 6)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 7)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` ASC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 8)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` DESC LIMIT $start, $limit";
//         }
//         if($_SESSION['sortby'] == 9)
//         {
//             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` ASC LIMIT $start, $limit";
//         }
//         
//         
//         if($_SESSION['sortby'] == 5)
//         {
//            $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//            session_destroy();
//         } 
//        
//     }
//     
//     else if($_GET['id'] != ""  && $_SESSION['sortby'] == "")
//     {
//         $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//     }
//     
//     else if(($_GET['id'] !="") && ($_SESSION['sortby'] == ""))
//     {
//        $id=$_GET['id'];
//	$sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
//        session_destroy();
//     }
//     
//     else
//     {
         $start=1;
         $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC";
//     }
     //echo $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
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
         //$sql_cntryname = "select `name` from `countries` where `id`='".$data['country']."'";
         //$sql_cname_array = mysqli_query($conn, $sql_cntryname);
         //$sql_cname = mysqli_fetch_array($sql_cname_array);
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
     <td><?php echo $data['attribute_5']; ?></td>
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
             ?>%
     </td>
     <td><?php echo date('d-m-Y', strtotime($data['datetime'])); ?></td>
     <td class="action"><a target="_blank" href="response_detail1.php?id=<?php echo $data['token']; ?>" title="View Responses"><img src="images/1446146277_view6.png"></a><a href="create_response_pdf.php?id=<?php echo $data['token']; ?>" title="Download PDF"><img src="images/1446327681_1-02.png" height="20" width="20"></a></td>
<!--     <td><?php //echo $sql_cmd_date['submitdate']; ?></td>-->
     </tr>
     <?php
     }
     ?>
     </tbody>
     </table>
      
      <?php
      //$limit=100;
      //$dtrows = "select * from `lime_tokens_266617`";
      //$sql_data = mysqli_query($conn, $dtrows);
      //$rows = mysqli_num_rows($sql_data);
      //$total=ceil($rows/$limit);
      //$id=$_GET['id'];
      //$start=($id-1)*$limit;
      
      //echo "<ul class='pagination pull-right'>";
     
      //for($i=1;$i<=$total;$i++)
		//{
			//if($i==$id) { echo "<li class='active'><a href=''>".$i."</a></li>"; }
			
			//else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		//}
      //echo "</ul>";
      //echo "<div style=clear:both></div>";
      
      ?>      
            
            
      
    </div>
    
  </div>
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>
