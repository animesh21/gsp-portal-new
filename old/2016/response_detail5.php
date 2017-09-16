<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Green Schools Programme</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="form-hdr ">
  <div class="container">
    <figure class="logo2"><a href="#"><img src="images/logo.png" alt="" class="img-responsive"></a></figure>
    <img src="images/top-bnr.png" alt=""  class="top-bnr1 "> </div>
  <!--close container-->
  
  <div class="container-fluid nav_main">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="response_detail1.php?id=<?php echo $_REQUEST['id']; ?>">SCHOOL PROFILE </a></li>
              <li><a href="response_detail2.php?id=<?php echo $_REQUEST['id']; ?>">GENERAL QUESTIONS </a></li>
              <li><a href="response_detail3.php?id=<?php echo $_REQUEST['id']; ?>">Air</a></li>
              <li><a href="response_detail4.php?id=<?php echo $_REQUEST['id']; ?>">Energy</a></li>
              <li class="active"><a href="response_detail5.php?id=<?php echo $_REQUEST['id']; ?>">Food</a></li>
              <li><a href="response_detail6.php?id=<?php echo $_REQUEST['id']; ?>">Land</a></li>
              <li><a href="response_detail7.php?id=<?php echo $_REQUEST['id']; ?>">Water</a></li>
              <li><a href="response_detail8.php?id=<?php echo $_REQUEST['id']; ?>">Waste</a></li>
			  <li><a href="response_feedback.php?id=<?php echo $_REQUEST['id']; ?>">Feedback</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
      </nav>
    </div>
  </div>
</header>
<!--close header-->

<div class="container">
    <div class="content-form">
    
    <!--close log-nav-->
   <h1>Food <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span></h1>
    <!--close progress-->
    
  <form>
      <div class="question multiple-short-txt" id="question1973">
<input type="hidden" value="1973" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 1: Food Audit Team</h6>
<p>You would require at least five to ten of your schoolmates in the food audit team. The teacher coordinator may be a science, home science teacher or mid-day meal in charge with interest in food and nutrition. Do include the canteen in-charge in your audit team.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
			<h5>Teachers</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X36X2501SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2501SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X36X2501SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2501SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X36X2501SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2501SQ003_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Administrative staff</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X36X2502SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2502SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X36X2502SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2502SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X36X2502SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2502SQ003_SQ002']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X36X2502SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2502SQ004_SQ002']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X36X2502SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2502SQ005_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Students</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X36X2503SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ001_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ001_SQ003']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X36X2503SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ002_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ002_SQ003']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X36X2503SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ003_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ003_SQ003']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X36X2503SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ004_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ004_SQ003']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X36X2503SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ005_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ005_SQ003']; ?></td></tr>
			<tr><td>6.</td><td><?php echo $sql_data['266617X36X2503SQ006_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ006_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ006_SQ003']; ?></td></tr>
			<tr><td>7.</td><td><?php echo $sql_data['266617X36X2503SQ007_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ007_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ007_SQ003']; ?></td></tr>
			<tr><td>8.</td><td><?php echo $sql_data['266617X36X2503SQ008_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ008_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ008_SQ003']; ?></td></tr>
			<tr><td>9.</td><td><?php echo $sql_data['266617X36X2503SQ009_SQ001']; ?></td> <td><?php echo $sql_data['266617X36X2503SQ009_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ009_SQ003']; ?></td></tr>
			<tr><td>10.</td><td><?php echo $sql_data['266617X36X2503SQ010_SQ001'];?></td> <td><?php echo  $sql_data['266617X36X2503SQ010_SQ002']; ?></td><td><?php echo $sql_data['266617X36X2503SQ010_SQ003']; ?></td></tr>
			
			</table>
           
        </div>
    </div>
</div>
      
      
   <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2:  Find out about the food service in your school.</h6>
            </span>
        
    </div>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span>Does your school have a provision/space to sell packaged food items within the campus:
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1858'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Does your school serve midday-meals?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1859'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
		  
		  
      </div> 
	  <?php
	  if($sql_data['266617X36X1859'] == "Y")
           { ?>
	   <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X36X2665_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X36X2665_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2665']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo "<li>";
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo '</a>';
                  echo "</li>";
                  
               }
      
           }
          echo '
        </ol>
      ';
      }
      else
      {
          echo '<div class="support_files">';
          echo "No documents uploaded by the school.";
          echo '</div>';
      }
           ?>
            </li>
        </ul>
      </div>
      
		   <?php } ?>
	  
	  
	  
      
      
      <?php
      if($sql_data['266617X36X1859'] == "N")
      {
      ?>
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)</span> Do students bring their own lunch from home?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1860'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      <?php } ?>
      
      
      <?php 
      if($sql_data['266617X36X1860'] == "Y")
      {
      ?>
	  
	  
	  <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents (photographs of lunch boxes) </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X36X2666_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X36X2666_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2666']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo "<li>";
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo '</a>';
                  echo "</li>";
                  
               }
      
           }
          echo '
        </ol>
      ';
      }
      else
      {
          echo '<div class="support_files">';
          echo "No documents uploaded by the school.";
          echo '</div>';
      }
           ?>
            </li>
        </ul>
      </div>
	  
	  
	  
	  
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)(1)</span>  How many students out of total student population bring home-made lunch?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           echo number_format($sql_data['266617X36X1861']);
           ?>
          </p>
      </div>
	  
	     <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)(2)</span>  Of the students who bring lunch from home, how many bring packaged food?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           echo number_format($sql_data['266617X36X1862']);
           ?>
          </p>
      </div>
	  
	     
	   <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2(a)(3)</span> Do teachers have the responsibility to ensure if the students are carrying lunch from home?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1863'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
	  
	  
	  
	  
      <?php } ?>
      
      
     
      
     
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>Task 3: What kind of food is served/sold in and outside your school?</h6>

            </span>
            </label>

       
     </div>
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span>&nbsp;What kind of food is being served/sold in your school? 
            </span>
            </label>

        <div class="answer clearfix">

            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-24  ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Please count all flavours/variants available in the school canteen separately</th>
	<th class="answertext">Total number of items sold in a month in the canteen</th>
	<th class="answertext">Month the food items were sold in </th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ001">
			<th class="answertext">
				Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc
				>
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ001_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ001_SQ002" name="java266617X36X1871SQ001_SQ002" class="form-control">
                                <input type="text" value="<?php echo $sql_data['266617X36X1871SQ001_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ001_SQ002" name="266617X36X1871SQ001_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ001_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ001_SQ001" name="java266617X36X1871SQ001_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ001_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ001_SQ001" name="266617X36X1871SQ001_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ001_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ001_SQ003" name="java266617X36X1871SQ001_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ001_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ001_SQ003" name="266617X36X1871SQ001_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ002">
			<th class="answertext">
				Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee,  Foodles, Maggi, etc
				<input type="hidden" value="" id="java266617X36X1871SQ002" name="java266617X36X1871SQ002" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ002_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ002_SQ002" name="java266617X36X1871SQ002_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ002_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ002_SQ002" name="266617X36X1871SQ002_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ002_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ002_SQ001" name="java266617X36X1871SQ002_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ002_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ002_SQ001" name="266617X36X1871SQ002_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ002_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ002_SQ003" name="java266617X36X1871SQ002_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ002_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ002_SQ003" name="266617X36X1871SQ002_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ003">
			<th class="answertext">
				Potato fries and Burgers
				<input type="hidden" value="" id="java266617X36X1871SQ003" name="java266617X36X1871SQ003" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ003_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ003_SQ002" name="java266617X36X1871SQ003_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ003_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ003_SQ002" name="266617X36X1871SQ003_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ003_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ003_SQ001" name="java266617X36X1871SQ003_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ003_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ003_SQ001" name="266617X36X1871SQ003_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ003_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ003_SQ003" name="java266617X36X1871SQ003_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ003_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ003_SQ003" name="266617X36X1871SQ003_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ004">
			<th class="answertext">
				Confectionery items (chocolate, candies, gums)
				<input type="hidden" value="" id="java266617X36X1871SQ004" name="java266617X36X1871SQ004" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ004_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ004_SQ002" name="java266617X36X1871SQ004_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ004_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ004_SQ002" name="266617X36X1871SQ004_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ004_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ004_SQ001" name="java266617X36X1871SQ004_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ004_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ004_SQ001" name="266617X36X1871SQ004_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ004_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ004_SQ003" name="java266617X36X1871SQ004_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ004_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ004_SQ003" name="266617X36X1871SQ004_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ005">
			<th class="answertext">
				Ice-cream
				<input type="hidden" value="" id="java266617X36X1871SQ005" name="java266617X36X1871SQ005" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ005_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ005_SQ002" name="java266617X36X1871SQ005_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ005_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ005_SQ002" name="266617X36X1871SQ005_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ005_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ005_SQ001" name="java266617X36X1871SQ005_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ005_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ005_SQ001" name="266617X36X1871SQ005_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ005_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ005_SQ003" name="java266617X36X1871SQ005_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ005_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ005_SQ003" name="266617X36X1871SQ005_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ006">
			<th class="answertext">
				Carbonated beverages
				<input type="hidden" value="" id="java266617X36X1871SQ006" name="java266617X36X1871SQ006" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ006_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ006_SQ002" name="java266617X36X1871SQ006_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ006_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ006_SQ002" name="266617X36X1871SQ006_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ006_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ006_SQ001" name="java266617X36X1871SQ006_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ006_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ006_SQ001" name="266617X36X1871SQ006_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ006_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ006_SQ003" name="java266617X36X1871SQ006_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ006_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ006_SQ003" name="266617X36X1871SQ006_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ007">
			<th class="answertext">
				Sugar sweetened non-carbonated beverages
				<input type="hidden" value="" id="java266617X36X1871SQ007" name="java266617X36X1871SQ007" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ007_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ007_SQ002" name="java266617X36X1871SQ007_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ007_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ007_SQ002" name="266617X36X1871SQ007_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ007_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ007_SQ001" name="java266617X36X1871SQ007_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ007_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ007_SQ001" name="266617X36X1871SQ007_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ007_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ007_SQ003" name="java266617X36X1871SQ007_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ007_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ007_SQ003" name="266617X36X1871SQ007_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X1871SQ008">
			<th class="answertext">
				Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk
				<input type="hidden" value="" id="java266617X36X1871SQ008" name="java266617X36X1871SQ008" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ008_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ008_SQ002" name="java266617X36X1871SQ008_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ008_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ008_SQ002" name="266617X36X1871SQ008_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ008_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ008_SQ001" name="java266617X36X1871SQ008_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ008_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ008_SQ001" name="266617X36X1871SQ008_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ008_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ008_SQ003" name="java266617X36X1871SQ008_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ008_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ008_SQ003" name="266617X36X1871SQ008_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X1871SQ009">
			<th class="answertext">
				Packaged/Bottled Energy Drinks
				<input type="hidden" value="" id="java266617X36X1871SQ009" name="java266617X36X1871SQ009" class="form-control">
			</th>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X36X1871SQ009_SQ002" class="hide read">Please count all flavours/variants available in the school canteen separately</label>
				<input type="hidden" id="java266617X36X1871SQ009_SQ002" name="java266617X36X1871SQ009_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ009_SQ002']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ009_SQ002" name="266617X36X1871SQ009_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X36X1871SQ009_SQ001" class="hide read">Total number of items sold in a month in the canteen</label>
				<input type="hidden" id="java266617X36X1871SQ009_SQ001" name="java266617X36X1871SQ009_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ009_SQ001']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ009_SQ001" name="266617X36X1871SQ009_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X36X1871SQ009_SQ003" class="hide read">Month the food items were sold in </label>
				<input type="hidden" id="java266617X36X1871SQ009_SQ003" name="java266617X36X1871SQ009_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X36X1871SQ009_SQ003']; ?>" size="20" maxlength="24" class="form-control" id="answer266617X36X1871SQ009_SQ003" name="266617X36X1871SQ009_SQ003" readonly="">
			</td>

		</tr>
	</tbody>
</table>
        
            </div>
            
            <div class="survey-question-help"><img align="left" alt="Help" src="/audit/images/help.gif">If the space is limited please create the table in a word document and upload as attachment. Option has been provided at the end of the section.</div>
    
        </div>
    </div>
      
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4</span> Does your school serve traditional Indian snacks?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X2238'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      
      <?php
      if($sql_data['266617X36X2238'] == "Y")
      {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4(a)</span> Please provide the details:
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2239"></span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list   ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Number of plates sold when on the menu</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X2239SQ001">
			<th class="answertext">
				Samosas
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
		<input type="text" value="<?php echo number_format($sql_data['266617X36X2239SQ001_SQ001']); ?>" size="20" class="form-control" id="answer266617X36X2239SQ001_SQ001" name="266617X36X2239SQ001_SQ001" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ002">
			<th class="answertext">
				Idli/vada and sambhar
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
			
				<input type="text" value="<?php echo number_format($sql_data['266617X36X2239SQ002_SQ001']); ?>" size="20" class="form-control" id="answer266617X36X2239SQ002_SQ001" name="266617X36X2239SQ002_SQ001" readonly="">
			</td>

		</tr>

	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ004">
			<th class="answertext">
				Pav bhaji
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" value="<?php echo number_format($sql_data['266617X36X2239SQ003_SQ001']); ?>" size="20" class="form-control"  readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X36X2239SQ005">
			<th class="answertext">
				Momos
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" value="<?php echo number_format($sql_data['266617X36X2239SQ004_SQ001']); ?>" size="20" class="form-control"  name="266617X36X2239SQ004_SQ001" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X36X2239SQ006">
			<th class="answertext">
				Others
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" value="<?php echo $sql_data['266617X36X2239SQ005_SQ001']; ?>" size="20" class="form-control" name="266617X36X2239SQ005_SQ001" readonly="">
			</td>

		</tr>
	</tbody>
</table>
            </div>
            
            <div class="survey-question-help"><img align="left" alt="Help" src="/audit/images/help.gif">If the space is limited please create the table in a word document and upload as attachment. Option has been provided at the end of the section.</div>
    
        </div>
    </div>
	
	
	 <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X36X2664_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X36X2664_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2664']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo "<li>";
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo '</a>';
                  echo "</li>";
                  
               }
      
           }
          echo '
        </ol>
      ';
      }
      else
      {
          echo '<div class="support_files">';
          echo "No documents uploaded by the school.";
          echo '</div>';
      }
           ?>
            </li>
        </ul>
      </div>
      
	
	    <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4(b)</span>  Give descriptions for rare local snacks served in your school:
      </span>
      </label>
          <p class="formanswertext">
           <?php
           echo $sql_data['266617X36X2640'];
           ?>   
          </p>
      </div>
	
	
	
	
      <?php } ?>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">5</span> Does your school serve traditional Indian beverages?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X2246'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      <?php
      if($sql_data['266617X36X2246'] == "Y")
      {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">5(a)</span> Details are as follows: <a href="#" data-tooltip="If the space is limited please create the table in a word document and upload as attachment. Option has been provided at the end of the section." class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
            
   
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Number of servings sold when on the menu</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ001">
	<th width="20%" class="answertext">
Nimboo pani
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

<input type="text" value="<?php echo $sql_data['266617X36X2247SQ001_SQ001'] ?>"  name="266617X36X2247SQ001_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ003">
	<th width="20%" class="answertext">
Sweet lassi
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo $sql_data['266617X36X2247SQ003_SQ001'] ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number of servings sold when on the menu" size="5" maxlength="5" id="answer266617X36X2247SQ003_SQ001" name="266617X36X2247SQ003_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" readonly="">
	</td>
</tr>

	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ002">
	<th width="20%" class="answertext">
Salted butter milk
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo $sql_data['266617X36X2247SQ002_SQ001'] ?>" class="form-control" readonly="">
	</td>
</tr>

<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ002">
	<th width="20%" class="answertext">
Aam Panna
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo $sql_data['266617X36X2247SQ004_SQ001'] ?>" class="form-control" readonly="">
	</td>
</tr>

<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X36X2247SQ002">
	<th width="20%" class="answertext">
Others
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo $sql_data['266617X36X2247SQ005_SQ001'] ?>" class="form-control" readonly="">
	</td>
</tr>



	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
      <?php } ?>
      
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 4: What kind of food does your school promote?</h6>

            </span>
            </label>

    </div>
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does the school distribute packaged food items as rewards during schools events?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1864'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      <?php
      if($sql_data['266617X36X1864'] == "Y")
           {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">6(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">
             <?php echo $sql_data['266617X36X1865']; ?>   
            </p>
        </div>
        </div>
    </div>
           <?php } ?>
      
      
      
      
    <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">7</span> Does the school distribute chocolates/similar products as refreshments during schools events?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1866'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      <?php
      if($sql_data['266617X36X1866'] == "Y")
           {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">7(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">
             <?php echo $sql_data['266617X36X1867']; ?>   
            </p>
        </div>
        </div>
    </div>
           <?php } ?>  
      
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">8</span> Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1868'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
      <?php
      if($sql_data['266617X36X1868'] == "Y")
           {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">8(a)</span>&nbsp;Please provide details:<a href="#" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" class="tt"><span class="badge">?</span></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
            <p class="question answer-item text-item ">
             <?php echo $sql_data['266617X36X1869']; ?>   
            </p>
        </div>
        </div>
    </div>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">8(b)</span> Are their banners, brochures, hoardings, stalls etc. put-up during the events?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X36X1870'] == "Y")
           {
               echo "Yes";
           }
           else
           {
               echo "No";
           }
           ?>   
          </p>
      </div>
	  
	  
	  <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents (events sponsored by UPPF companies)  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X36X2663_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X36X2663_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2663']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo "<li>";
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo '</a>';
                  echo "</li>";
               }
      
           }
          echo '
        </ol>
      ';
      }
      else
      {
          echo '<div class="support_files">';
          echo "No documents uploaded by the school.";
          echo '</div>';
      }
           ?>
            </li>
        </ul>
      </div>
	  
	  
	  
	  
           <?php } ?>  
      
      
      
      <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X36X2259_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X36X2259_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X36X2259']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo "<li>";
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo '</a>';
                  echo "</li>";
               }
      
           }
          echo '
        </ol>
      ';
      }
      else
      {
          echo '<div class="support_files">';
          echo "No documents uploaded by the school.";
          echo '</div>';
      }
           ?>
            </li>
        </ul>
      </div>
      
       
    
      <center>
      	<a class="btn org-btn" href="response_detail4.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail6.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
      </center>
      
    </form>
    
    
    
  </div>
  <!--close content-form--> 
</div>
<!--close container-->

<footer>
  
  <!--close container--> 
</footer>
<!--close footer--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>