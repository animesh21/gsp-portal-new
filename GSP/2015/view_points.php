<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('website_db.php');

$total_count = mysql_query("select * from `lime_survey_266617` where `submitdate` is not null");
$sql_data = mysql_query("select `token` from `lime_survey_266617` where `submitdate` is not null");    
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
<div class="container">
	<header>
  	<img src="images/header-2.jpg" width="1028" height="117">
    <img src="images/icons.png" width="605" height="94" class="icon">
  </header>
</div>
<main class="bdr">
	<div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>TOTAL SCHOOLS STARTS THE AUDIT</h2>
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
     <th>Score</th>
     <th>Bonus Points</th>
     </tr>
    </thead>
    <tbody>
<?php 
$i = 0;
while($sql_data_array=mysql_fetch_array($sql_data))
{
    $sql_details = mysql_query("select * from `lime_tokens_266617` where `token` = '".$sql_data_array['token']."'");
    $sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$sql_data_array['token']."' GROUP BY `token`"));
    
    $sql_bonus = mysql_fetch_array(mysql_query("select SUM(bonus) as bonus from `calculation` where `token` = '".$sql_data_array['token']."' GROUP BY `token`"));
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
     <td><?php echo number_format($sql_score['score2'], 2); ?></td>
     <td><?php echo number_format($sql_bonus['bonus'], 2); ?></td>
     
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