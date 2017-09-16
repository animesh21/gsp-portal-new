<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
error_reporting(0);
include('functions.php'); 
session_start();
if(isset($_GET['sort']))
     {
         //$_SESSION['sorting'] = 1;
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
    <div class="container" style="width:100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>REGISTRATION DATA</h2>
        </div>
  
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
     <th>Registration Date</th>
     <th>Action</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $start=0;
     $limit=100;
     
     if(isset($_GET['id']))
     {
     $id=$_GET['id'];
     }
     else
     {
     $id=1;    
     }
     $start=($id-1)*$limit;
    
     if($_GET['id'] == ""  && $_SESSION['sortby'] != "")
     {
         if($_SESSION['sortby'] == 1)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 2)
         {
             echo $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 3)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 4)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 6)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 7)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 8)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 9)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` ASC LIMIT $start, $limit";
         }
         
         
         
         if($_SESSION['sortby'] == 5)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
         }
         
     }
     
     else if(($_GET['id'] !="") && ($_SESSION['sortby'] != ""))
     {
	$id=$_GET['id'];
	if($_SESSION['sortby'] == 1)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 2)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_5` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 3)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 4)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_7` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 6)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 7)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` ASC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 8)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` DESC LIMIT $start, $limit";
         }
         if($_SESSION['sortby'] == 9)
         {
             $sql = "select * from `lime_tokens_266617` ORDER BY `attribute_1` ASC LIMIT $start, $limit";
         }
         
         
         if($_SESSION['sortby'] == 5)
         {
            $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
            session_destroy();
         } 
        
     }
     
     else if($_GET['id'] != ""  && $_SESSION['sortby'] == "")
     {
         $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
     }
     
     else if(($_GET['id'] !="") && ($_SESSION['sortby'] == ""))
     {
        $id=$_GET['id'];
	$sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
        session_destroy();
     }
     
     else
     {
         $start=1;
         $sql = "select * from `lime_tokens_266617` ORDER BY `datetime`";
     }
     //echo $sql = "select * from `lime_tokens_266617` ORDER BY `datetime` DESC LIMIT $start, $limit";
     $sql_data = mysqli_query($conn, $sql);
     
     if($_GET['id'] > 1)
     {
         $i=$start;;
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
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $data['attribute_5']; ?></td>
     <td><?php echo $data['attribute_7']; ?></td>
     <td><?php echo $data['firstname']; ?></td>
     <td><?php echo $data['email']; ?></td>
     <td><?php echo $data['attribute_18']; ?></td>
     <td><?php echo date('d-m-Y', strtotime($data['datetime'])); ?></td>
     <td style="text-align: center"><a href="response_detail1.php?id=<?php echo $data['token']; ?>" title="View Responses"><img src="images/1446146277_view6.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="email_pdf.php?id=<?php echo $data['token']; ?>" title="Send PDF to Coordinator's Email Id"><img src="images/1446146350_email-send.png" height="20" width="20"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="create_response_pdf.php?id=<?php echo $data['token']; ?>" title="Download PDF"><img src="images/1446327681_1-02.png" height="20" width="20"></a></td>
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
