<?php 
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');


//$sql_data_elaborate1 = mysql_query("select * from `lime_tokens_266617`");
//$sql_data_elaborate2 = mysql_query("select * from `lime_survey_266617`");
$sql_data_elaborate1 = mysql_query("select count('token') as token1 from `lime_tokens_266617`");
$sql_data_elaborate2 = mysql_query("select * from `lime_survey_266617`");

//echo "select token from `lime_tokens_266617` NOT IN (SELECT token FROM lime_survey_266617)";
$sql_data_elaborate3 = mysql_query("SELECT count(token) as token1 FROM lime_tokens_266617 WHERE lime_tokens_266617.token NOT IN (SELECT token FROM lime_survey_266617)");


//print_r(mysql_fetch_array($sql_data_elaborate3));


$total_count = mysql_query("select * from `lime_survey_266617` where `submitdate` is null");


$sql_data = mysql_query("SELECT `token` FROM lime_tokens_266617 WHERE lime_tokens_266617.token NOT IN (SELECT token FROM lime_survey_266617)");    

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Data - Green Schools Programme Audit 2015</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script type = 'text/javascript'>
function subForm()
{
    var option = document.getElementById("srtoption").value;
    window.location = "?sort=" + option;
}

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</head>

<body>
<?php include('header.php'); ?>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>TOTAL SCHOOLS WHO HAVE NOT STARTED THE AUDIT</h2>
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
     <th>Date</th>
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
     <td><?php echo $sql_details_array['firstname']; ?></td>
     <td><?php echo $sql_details_array['email']; ?></td>
     <td><?php echo $sql_details_array['attribute_18']; ?></td>
     <td><?php echo date('d-m-Y', strtotime($sql_details_array['datetime'])); ?></td>
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