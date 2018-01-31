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
              <li><a href="response_detail5.php?id=<?php echo $_REQUEST['id']; ?>">Food</a></li>
              <li><a href="response_detail6.php?id=<?php echo $_REQUEST['id']; ?>">Land</a></li>
              <li><a href="response_detail7.php?id=<?php echo $_REQUEST['id']; ?>">Water</a></li>
              <li class="active"><a href="response_detail8.php?id=<?php echo $_REQUEST['id']; ?>">Waste</a></li>
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
   <h1>Waste <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span></h1>
   
    <!--close progress-->
    <p>
        Schools can provide excellent educational opportunities for creating awareness about waste and its management.
    </p>
    <ul>
	<li>
		Waste reduction initiatives save natural resources, energy and landfill space.</li>
	<li>
		Reducing, reusing, recycling waste material will improve the economic and environmental performance of the school.</li>
	<li>
		The school's waste management programme has the potential to transform the school environment into a laboratory for learning.</li>
	<li>
		It also provides numerous opportunities for the students to understand this issue and its implications on the local environment.</li>
</ul>
    
    <p>
	<strong>The unit of measurement to be used in the Waste section is Kilogram (kg).</strong></p>
  <form>
      <div class="question multiple-short-txt" id="question1973">
<input type="hidden" value="1973" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 1: Waste Audit Team</h6>
                <p> The house-keeping and cleaning staff of your school shall be the core members of your team, as you will have to enlist their help at every task. A teacher with interest in waste and five to ten students will be ideal for your team. Administrative staff is important, as they will provide the necessary permissions required for the house-keeping staff to work with you.</p>

            </span>
            </label>

        <div class="answer clearfix">
          
<h5>Teachers</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X38X2607SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2607SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X38X2607SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2607SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X38X2607SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2607SQ003_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Administrative staff</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X38X2613SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2613SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X38X2613SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2613SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X38X2613SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2613SQ003_SQ002']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X38X2613SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2613SQ004_SQ002']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X38X2613SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2613SQ005_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Students</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X38X2621SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ001_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ001_SQ003']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X38X2621SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ002_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ002_SQ003']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X38X2621SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ003_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ003_SQ003']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X38X2621SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ004_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ004_SQ003']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X38X2621SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ005_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ005_SQ003']; ?></td></tr>
			<tr><td>6.</td><td><?php echo $sql_data['266617X38X2621SQ006_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ006_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ006_SQ003']; ?></td></tr>
			<tr><td>7.</td><td><?php echo $sql_data['266617X38X2621SQ007_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ007_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ007_SQ003']; ?></td></tr>
			<tr><td>8.</td><td><?php echo $sql_data['266617X38X2621SQ008_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ008_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ008_SQ003']; ?></td></tr>
			<tr><td>9.</td><td><?php echo $sql_data['266617X38X2621SQ009_SQ001']; ?></td> <td><?php echo $sql_data['266617X38X2621SQ009_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ009_SQ003']; ?></td></tr>
			<tr><td>10.</td><td><?php echo $sql_data['266617X38X2621SQ010_SQ001'];?></td> <td><?php echo $sql_data['266617X38X2621SQ010_SQ002']; ?></td><td><?php echo $sql_data['266617X38X2621SQ010_SQ003']; ?></td></tr>
				
			</table>
        </div>
    </div>
</div>
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: What is the waste segregation system in your school?</h6>
<p>
	Segregation means sorting. Let's understand the waste segregation system because the amount of waste recycled or reused will depend on the method of collection. To understand the waste segregation system of your school, fill the table below.</p>
<p>
	To collect data: Students will have to survey the waste collection area and talk to the house-keeping staff to know whether waste is segregated in the school and in what quantity.</p>

            </span>
            </label>

        <div class="answer clearfix">

            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X38X2031" name="266617X38X2031">          
            </div>
           
        </div>
    </div>
      
   <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1</span> Does your school segregate solid waste?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X38X2032'] == "Y")
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
    </div>  
      <?php
           if($sql_data['266617X38X2032'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1(a)</span> Who segregates the waste at source?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
        if($sql_data['266617X38X2033SQ001'] == "Y")
        {
            echo "Students and teachers";
        }
        if($sql_data['266617X38X2033SQ002'] == "Y")
        {
            echo "<br>";
            echo "Housekeeping (Sweeper)";
        }
		
		if($sql_data['266617X38X2033SQ003'] == "Y")
        {
            echo "<br>";
            echo "Gardener";
        }
		
        if($sql_data['266617X38X2033SQ004'] == "Y")
        {
            echo "<br>";
            echo "Ragpicker";
        }
        if($sql_data['266617X38X2033other'] != "")
        {
            echo "<br>";
            echo "Other: ". $sql_data['266617X38X2033other'];
        }
        ?>   
        </p>
        </div>
    </div>
      
      <!--
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">1(b)</span> Who segregates the waste in classrooms?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php /*
        if($sql_data['266617X38X2037SQ001'] == "Y")
        {
            echo "Students and Teachers";
        }
        if($sql_data['266617X38X2037SQ002'] == "Y")
        {
            echo "<br>";
            echo "Housekeeping (Sweeper)";
        }
        if($sql_data['266617X38X2037other'] != "")
        {
            echo "<br>";
            echo "Other: ". $sql_data['266617X38X2037other'];
        }
        */
        ?>   
        </p>
        </div>
    </div>
	-->
      
      
      <?php
      }
      ?>
      
      
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2</span> Waste collection points in your school. <a data-tooltip="Students will have to count the number of waste disposal points in the school as, for instance, one dustbin, two dustbins or more. If there are no dustbins, please say zero (0)" class="tt"><span class="badge">?</span></a> 
            </span>
            </label>

        <div class="answer clearfix">
   
        <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Total No. of collection points</th>
	<th>No. of collection points with No bin</th>
	<th>No. of collection points with One bin</th>
	<th>No. of collection points with Two bins (wet & dry)</th>
	<th>No. of collection points with Three bins or more</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ001">
	<th width="20%" class="answertext">
Classrooms
<input type="hidden" value="" id="java266617X38X2143SQ001" name="java266617X38X2143SQ001" class="form-control">
	</th>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ001_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ001_SQ001" class="hide read">No bin</label>
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ001_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ001_SQ001" name="266617X38X2143SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ001_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ001_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ001_SQ002" name="266617X38X2143SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ001_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ001_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ001_SQ003" name="266617X38X2143SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X38X2143SQ001_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ001_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ001_SQ004" name="266617X38X2143SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ002">
	<th width="20%" class="answertext">
Playgrounds
<input type="hidden" value="" id="java266617X38X2143SQ002" name="java266617X38X2143SQ002" class="form-control">
	</th>
	
		<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ001']); ?>" id="java266617X38X2143SQ002_SQ001" name="java266617X38X2143SQ002_SQ001" class="form-control">
<label for="answer266617X38X2143SQ002_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ002_SQ001" name="266617X38X2143SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ002']); ?>" id="java266617X38X2143SQ002_SQ002" name="java266617X38X2143SQ002_SQ002" class="form-control">
<label for="answer266617X38X2143SQ002_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ002_SQ002" name="266617X38X2143SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ003']); ?>" id="java266617X38X2143SQ002_SQ003" name="java266617X38X2143SQ002_SQ003" class="form-control">
<label for="answer266617X38X2143SQ002_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ002_SQ003" name="266617X38X2143SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ002_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ002_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ002_SQ004" name="266617X38X2143SQ002_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ003">
	<th width="20%" class="answertext">
Common area (e.g. reception, corridors)
<input type="hidden" value="" id="java266617X38X2143SQ003" name="java266617X38X2143SQ003" class="form-control">
	</th>
	
<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ001']); ?>" id="java266617X38X2143SQ003_SQ001" name="java266617X38X2143SQ003_SQ001" class="form-control">
<label for="answer266617X38X2143SQ003_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ003_SQ001" name="266617X38X2143SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ002']); ?>" id="java266617X38X2143SQ003_SQ002" name="java266617X38X2143SQ003_SQ002" class="form-control">
<label for="answer266617X38X2143SQ003_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ003_SQ002" name="266617X38X2143SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ003']); ?>" id="java266617X38X2143SQ003_SQ003" name="java266617X38X2143SQ003_SQ003" class="form-control">
<label for="answer266617X38X2143SQ003_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ003_SQ003" name="266617X38X2143SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

<label for="answer266617X38X2143SQ003_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ003_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ003_SQ004" name="266617X38X2143SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ004">
	<th width="20%" class="answertext">
Staffroom
<input type="hidden" value="" id="java266617X38X2143SQ004" name="java266617X38X2143SQ004" class="form-control">
	</th>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ001']); ?>" id="java266617X38X2143SQ004_SQ001" name="java266617X38X2143SQ004_SQ001" class="form-control">
<label for="answer266617X38X2143SQ004_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ004_SQ001" name="266617X38X2143SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ002']); ?>" id="java266617X38X2143SQ004_SQ002" name="java266617X38X2143SQ004_SQ002" class="form-control">
<label for="answer266617X38X2143SQ004_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ004_SQ002" name="266617X38X2143SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ003']); ?>" id="java266617X38X2143SQ004_SQ003" name="java266617X38X2143SQ004_SQ003" class="form-control">
<label for="answer266617X38X2143SQ004_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ004_SQ003" name="266617X38X2143SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ004_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ004_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ004_SQ004" name="266617X38X2143SQ004_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ005">
	<th width="20%" class="answertext">
Laboratory
<input type="hidden" value="" id="java266617X38X2143SQ005" name="java266617X38X2143SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ005_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ005_SQ001" name="266617X38X2143SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ002']); ?>" id="java266617X38X2143SQ005_SQ002" name="java266617X38X2143SQ005_SQ002" class="form-control">
<label for="answer266617X38X2143SQ005_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ005_SQ002" name="266617X38X2143SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ003']); ?>" id="java266617X38X2143SQ005_SQ003" name="java266617X38X2143SQ005_SQ003" class="form-control">
<label for="answer266617X38X2143SQ005_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ005_SQ003" name="266617X38X2143SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ005_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ005_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ005_SQ004" name="266617X38X2143SQ005_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ006">
	<th width="20%" class="answertext">
Canteen (or area where food items are being sold)
<input type="hidden" value="" id="java266617X38X2143SQ006" name="java266617X38X2143SQ006" class="form-control">
	</th>
	
		<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ006_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ006_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ006_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ006_SQ001" name="266617X38X2143SQ006_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ006_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ006_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ006_SQ002" name="266617X38X2143SQ006_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ006_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ006_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ006_SQ003" name="266617X38X2143SQ006_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ006_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ006_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ006_SQ004" name="266617X38X2143SQ006_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ007">
	<th width="20%" class="answertext">
Clinic/ Sick room
<input type="hidden" value="" id="java266617X38X2143SQ007" name="java266617X38X2143SQ007" class="form-control">
	</th>
	
		<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ001']); ?>" id="java266617X38X2143SQ007_SQ001" name="java266617X38X2143SQ007_SQ001" class="form-control">
<label for="answer266617X38X2143SQ007_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ007_SQ001" name="266617X38X2143SQ007_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ002']); ?>" id="java266617X38X2143SQ007_SQ002" name="java266617X38X2143SQ007_SQ002" class="form-control">
<label for="answer266617X38X2143SQ007_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ007_SQ002" name="266617X38X2143SQ007_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ003']); ?>" id="java266617X38X2143SQ007_SQ003" name="java266617X38X2143SQ007_SQ003" class="form-control">
<label for="answer266617X38X2143SQ007_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ007_SQ003" name="266617X38X2143SQ007_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ007_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ007_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ007_SQ004" name="266617X38X2143SQ007_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ008">
	<th width="20%" class="answertext">
Library
<input type="hidden" value="" id="java266617X38X2143SQ008" name="java266617X38X2143SQ008" class="form-control">
	</th>
	
		<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ008_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ008_SQ001" name="266617X38X2143SQ008_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ008_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ008_SQ002" name="266617X38X2143SQ008_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ003']); ?>" id="java266617X38X2143SQ008_SQ003" name="java266617X38X2143SQ008_SQ003" class="form-control">
<label for="answer266617X38X2143SQ008_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ008_SQ003" name="266617X38X2143SQ008_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ008_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ008_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ008_SQ004" name="266617X38X2143SQ008_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ009">
	<th width="20%" class="answertext">
Toilets
<input type="hidden" value="" id="java266617X38X2143SQ009" name="java266617X38X2143SQ009" class="form-control">
	</th>
	
	
		<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ009_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ009_SQ001" name="266617X38X2143SQ009_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ002']); ?>" id="java266617X38X2143SQ009_SQ002" name="java266617X38X2143SQ009_SQ002" class="form-control">
<label for="answer266617X38X2143SQ009_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ009_SQ002" name="266617X38X2143SQ009_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ003']); ?>" id="java266617X38X2143SQ009_SQ003" name="java266617X38X2143SQ009_SQ003" class="form-control">
<label for="answer266617X38X2143SQ009_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ009_SQ003" name="266617X38X2143SQ009_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2143SQ009_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ009_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ009_SQ004" name="266617X38X2143SQ009_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ010">
	<th width="20%" class="answertext">
Others
<input type="hidden" value="" id="java266617X38X2143SQ010" name="java266617X38X2143SQ010" class="form-control">
	</th>
	
<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ010_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>

	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ010_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ010_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ010_SQ001" name="266617X38X2143SQ010_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ010_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ010_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ010_SQ002" name="266617X38X2143SQ010_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X38X2143SQ010_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ010_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ010_SQ003" name="266617X38X2143SQ010_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ010_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ010_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ010_SQ004" name="266617X38X2143SQ010_SQ004" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2143SQ011">
	<th width="20%" class="answertext">
Total

	</th>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ011_SQ004']); ?>"  class="multiflexitext text  em_sq_validation good form-control" disabled="">
</td>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X38X2143SQ011_SQ001" class="hide read">No bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ011_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="No bin" size="5" maxlength="5" id="answer266617X38X2143SQ011_SQ001" name="266617X38X2143SQ011_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly>
	</td>
	
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X38X2143SQ011_SQ002" class="hide read">One bin</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ011_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="One bin" size="5" maxlength="5" id="answer266617X38X2143SQ011_SQ002" name="266617X38X2143SQ011_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly>
	</td>
	
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X38X2143SQ011_SQ003" class="hide read">Two bins (wet &amp; dry)</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ011_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Two bins (wet &amp; dry)" size="5" maxlength="5" id="answer266617X38X2143SQ011_SQ003" name="266617X38X2143SQ011_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly>
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X38X2143SQ011_SQ004" class="hide read">Three bins or more</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2143SQ011_SQ005']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Three bins or more" size="5" maxlength="5" id="answer266617X38X2143SQ011_SQ004" name="266617X38X2143SQ011_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly>
	</td>
</tr>

	</tbody>
</table>
            </div>
           
        </div>
    </div>
	
	
	
	 <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>
           <?php
           if($sql_data['266617X38X2672_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2672_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2672']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
                <h6>
	Task 3: How much waste does your school generate?</h6>
<p>
	There is nothing known as waste &ndash; waste is just a misplaced resource. Therefore ideally, a school should not generate any waste. But there is waste, as most human activities result in some waste. Wastes are of many types such as bio-degradable and non-biodegradable, hazardous and non-hazardous, etc. Each of these categories has to be handled carefully. Please wear gloves, masks while handling waste. E-waste should be handled by adults.</p>
<p>
	<strong>Unit of measurement should remain constant: Kilogram (kg).</strong></p>
<p>
	TO COLLECT DATA: Arrange a meeting between the student audit team and the key people in your house-keeping staff. Let the students describe the project with them. Segregate all waste, put them in small packs and weigh using a spring balance. If the practice of segregation of waste has already been adopted, then it will be easy to find out the amount of waste paper and other common trash. For Silt and Soil &ndash; Put a small mesh wire under the dustbin. And find the amount collected beneath. Or pour the waste on a mesh, so that the dust and silt passes through and then weigh the silt.</p>
<p>&nbsp;
	</p>
<div style="margin-left:300px;">
	<table cellspacing="1" cellpadding="1" border="1" style="width: 500px;">
		<tbody>
			<tr>
				<td>
					<p>
						<strong>Type of Waste</strong></p>
				</td>
				<td>
					<p>
						<strong>Examples of waste</strong></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						Garden waste/&nbsp;Horticultural waste</p>
				</td>
				<td>
					<p>
						Leaves, shrubs, trees, twigs, silt, soil</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						e-Waste</p>
				</td>
				<td>
					<p>
						Electronic and computer consumables, Batteries, tube lights, CFL bulbs</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						Wood, glass, metal, classroom furniture</p>
				</td>
				<td>&nbsp;
					</td>
			</tr>
			<tr>
				<td>
					<p>
						Paper</p>
				</td>
				<td>
					<p>
						Text books, exam sheets</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						Biomedical waste, including sanitary waste</p>
				</td>
				<td>
					<p>
						Bandages, bloody cotton, needles, used sanitary napkins/ cloth</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						C &amp; D (Construction and Demolition) waste</p>
				</td>
				<td>
					<p>
						Building and construction; debris waste</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
						Hazardous waste</p>
				</td>
				<td>
					<p>
						Chemicals from labs, paints from art room, oils</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<p>&nbsp;
	</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2030"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X38X2030" name="266617X38X2030">          
            </div>
            
            
    
        </div>
    </div>     
      
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span> Determine the quantity of waste generated in your school.(in kilogram) <a data-tooltip="Please note that some categories of waste may happen daily, weekly, monthly, bi-annually or annually. Please convert these to monthly averages before entering." class="tt"><span class="badge">?</span></a> <input type="hidden" value="1283" name="totalpopulation"><input type="hidden" value="&lt;span style='background-color: #eee8aa;'&gt;&lt;span title='Undefined variable' style='border-style: solid; border-width: 2px; border-color: red;'&gt;&lt;span title='Undefined variable' style='color: red; font-weight: bold'&gt;INSERTANS:266617X34X1608&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;" name="stype"> 
            </span>
            </label>

        <div class="answer clearfix">   
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-10">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Collection per month (in kilogram, frequency may differ)</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ001">
	<th width="20%" class="answertext">
Garden/ horticulture waste
<input type="hidden" value="" id="java266617X38X2125SQ001" name="java266617X38X2125SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ001_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
<input type="text" value="<?php echo $sql_data['266617X38X2125SQ001_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ001_SQ001" name="266617X38X2125SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ002">
	<th width="20%" class="answertext">
Kitchen waste
<input type="hidden" value="" id="java266617X38X2125SQ002" name="java266617X38X2125SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ002_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ002_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ002_SQ001" name="266617X38X2125SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ003">
	<th width="20%" class="answertext">
Paper
<input type="hidden" value="" id="java266617X38X2125SQ003" name="java266617X38X2125SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ003_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ003_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ003_SQ001" name="266617X38X2125SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ004">
	<th width="20%" class="answertext">
Plastic
<input type="hidden" value="" id="java266617X38X2125SQ004" name="java266617X38X2125SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	<input type="hidden" value="<?php echo $sql_data['266617X38X2125SQ004_SQ001']; ?>" id="java266617X38X2125SQ004_SQ001" name="java266617X38X2125SQ004_SQ001" class="form-control">
<label for="answer266617X38X2125SQ004_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ004_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ004_SQ001" name="266617X38X2125SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ005">
	<th width="20%" class="answertext">
Wood, glass, metal, classroom furniture
<input type="hidden" value="" id="java266617X38X2125SQ005" name="java266617X38X2125SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ005_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ005_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ005_SQ001" name="266617X38X2125SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ006">
	<th width="20%" class="answertext">
E-waste
<input type="hidden" value="" id="java266617X38X2125SQ006" name="java266617X38X2125SQ006" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ006_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ006_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ006_SQ001" name="266617X38X2125SQ006_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ007">
	<th width="20%" class="answertext">
Biomedical waste
<input type="hidden" value="" id="java266617X38X2125SQ007" name="java266617X38X2125SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ007_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ007_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ007_SQ001" name="266617X38X2125SQ007_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ008">
	<th width="20%" class="answertext">
Sanitary waste
<input type="hidden" value="" id="java266617X38X2125SQ008" name="java266617X38X2125SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ008_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ008_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ008_SQ001" name="266617X38X2125SQ008_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ010">
	<th width="20%" class="answertext">
Construction and Demolition (C &amp; D) waste
<input type="hidden" value="" id="java266617X38X2125SQ010" name="java266617X38X2125SQ010" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ010_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ010_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ010_SQ001" name="266617X38X2125SQ010_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ011">
	<th width="20%" class="answertext">
Hazardous waste
<input type="hidden" value="" id="java266617X38X2125SQ011" name="java266617X38X2125SQ011" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ011_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ011_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ011_SQ001" name="266617X38X2125SQ011_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2125SQ009">
	<th width="20%" class="answertext">
Total
<input type="hidden" value="" id="java266617X38X2125SQ009" name="java266617X38X2125SQ009" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-10">
	
<label for="answer266617X38X2125SQ009_SQ001" class="hide read">Collection per month (Frequency may differ)</label>
	<input type="text" value="<?php echo $sql_data['266617X38X2125SQ009_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Collection per month (Frequency may differ)" size="5" maxlength="10" id="answer266617X38X2125SQ009_SQ001" name="266617X38X2125SQ009_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly>
	</td>
</tr>
	</tbody>
</table>
          
            </div>
 
    </div> 
      
	  
	  <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>
           <?php
           if($sql_data['266617X38X2673_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2673_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2673']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
                <h6>
	Task 4: How much waste does your school recycle/treat?</h6>
<p>
	<strong>TO COLLECT DATA: </strong></p>
<p>
	Find out whether your school has any waste recycling facility like compost pit, paper recycling machine. If you have a paper recycling unit, the person in charge will definitely be recording the input and output from the unit. If the school is selling newspapers or bottles or metal scrap to the local waste dealer (kabadiwala), that can also be included in the quantity recycled.<a data-tooltip="Includes all waste recycled, reused or treated." class="tt"><span class="badge">?</span></a></p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2040"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X38X2040" name="266617X38X2040">          
            </div>
            
            
    
        </div>
    </div>   
      
      
      
     <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4</span>  Does your school recycle any generated waste?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2041'] == "Y")
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
           if($sql_data['266617X38X2041'] == "Y")
           {
      ?>
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4(a)</span>&nbsp;Please provide quantity of which is applicable. 

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
	<th>Quantity of Waste Recycled per month (in kilogram, frequency may differ)</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ001">
	<th width="20%" class="answertext">
Garden/ horticulture waste 
<input type="hidden" value="" id="java266617X38X2042SQ001" name="java266617X38X2042SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ001_SQ001" name="java266617X38X2042SQ001_SQ001" class="form-control">
<label for="answer266617X38X2042SQ001_SQ001" class="hide read">Quantity</label>
<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ001_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ001_SQ001" name="266617X38X2042SQ001_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ002">
	<th width="20%" class="answertext">
Kitchen waste
<input type="hidden" value="" id="java266617X38X2042SQ002" name="java266617X38X2042SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ002_SQ001" name="java266617X38X2042SQ002_SQ001" class="form-control">
<label for="answer266617X38X2042SQ002_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ002_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ002_SQ001" name="266617X38X2042SQ002_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ003">
	<th width="20%" class="answertext">
Paper
<input type="hidden" value="" id="java266617X38X2042SQ003" name="java266617X38X2042SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ003_SQ001" name="java266617X38X2042SQ003_SQ001" class="form-control">
<label for="answer266617X38X2042SQ003_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ003_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ003_SQ001" name="266617X38X2042SQ003_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ003">
	<th width="20%" class="answertext">
Plastic
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X38X2042SQ003_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ011_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ003_SQ001" name="266617X38X2042SQ003_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>




	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ004">
	<th width="20%" class="answertext">
Wood, glass, metal, classroom furniture
<input type="hidden" value="" id="java266617X38X2042SQ004" name="java266617X38X2042SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ004_SQ001" name="java266617X38X2042SQ004_SQ001" class="form-control">
<label for="answer266617X38X2042SQ004_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ004_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ004_SQ001" name="266617X38X2042SQ004_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ005">
	<th width="20%" class="answertext">
E-waste
<input type="hidden" value="" id="java266617X38X2042SQ005" name="java266617X38X2042SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ005_SQ001" name="java266617X38X2042SQ005_SQ001" class="form-control">
<label for="answer266617X38X2042SQ005_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ005_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ005_SQ001" name="266617X38X2042SQ005_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ006">
	<th width="20%" class="answertext">
Bio-medical waste
<input type="hidden" value="" id="java266617X38X2042SQ006" name="java266617X38X2042SQ006" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ006_SQ001" name="java266617X38X2042SQ006_SQ001" class="form-control">
<label for="answer266617X38X2042SQ006_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ006_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ006_SQ001" name="266617X38X2042SQ006_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ007">
	<th width="20%" class="answertext">
Sanitary waste
<input type="hidden" value="" id="java266617X38X2042SQ007" name="java266617X38X2042SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ007_SQ001" name="java266617X38X2042SQ007_SQ001" class="form-control">
<label for="answer266617X38X2042SQ007_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ007_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ007_SQ001" name="266617X38X2042SQ007_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ008">
	<th width="20%" class="answertext">
Construction and Demolition D Waste
<input type="hidden" value="" id="java266617X38X2042SQ008" name="java266617X38X2042SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ008_SQ001" name="java266617X38X2042SQ008_SQ001" class="form-control">
<label for="answer266617X38X2042SQ008_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ008_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ008_SQ001" name="266617X38X2042SQ008_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ009">
	<th width="20%" class="answertext">
Hazardous waste
<input type="hidden" value="" id="java266617X38X2042SQ009" name="java266617X38X2042SQ009" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ009_SQ001" name="java266617X38X2042SQ009_SQ001" class="form-control">
<label for="answer266617X38X2042SQ009_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ009_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ009_SQ001" name="266617X38X2042SQ009_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2042SQ010">
	<th width="20%" class="answertext">
Total
<input type="hidden" value="" id="java266617X38X2042SQ010" name="java266617X38X2042SQ010" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X38X2042SQ010_SQ001" name="java266617X38X2042SQ010_SQ001" class="form-control">
<label for="answer266617X38X2042SQ010_SQ001" class="hide read">Quantity</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2042SQ010_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Quantity" size="5" maxlength="5" id="answer266617X38X2042SQ010_SQ001" name="266617X38X2042SQ010_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" readonly>
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
      <?php
           }
      ?>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">5</span>  Does your school have a composting facility?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2064'] == "Y")
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
           if($sql_data['266617X38X2064'] == "Y")
           {
      ?>
      <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2674_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2674_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2674']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
      <?php
           }
       
           if($sql_data['266617X38X2064'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5(a)</span> What is the methodology used? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
        if($sql_data['266617X38X2065SQ001'] == "Y")
        {
            echo "Natural composting without added microbes";
        }
        if($sql_data['266617X38X2065SQ002'] == "Y")
        {
            echo "<br>";
            echo "Mechanical composting (with electricity/ machines)";
        }
        if($sql_data['266617X38X2065other'] != "")
        {
            echo "<br>";
            echo "Other: ".$sql_data['266617X38X2065other'];
        }
        ?>   
        </p>
        </div>
          
          
          
    </div>
      <?php
           }
      ?>
       <?php
           if($sql_data['266617X38X2064'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5(b)</span>  What is the quantity of compost that is generated per month(in kilogram)?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
        echo number_format($sql_data['266617X38X2068'],2);
        ?>   
        </p>
        </div>
           
    </div>
	
	
	   <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5(c)</span> What is the purpose of the compost that is generated per month?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
		$arr5c=array();
		if($sql_data['266617X38X2069SQ001']=="Y")
        {
			$arr5c[]="For horticultural purposes";
		}
		if($sql_data['266617X38X2069SQ002']=="Y")
        {
			$arr5c[]="For school garden";
		}
		if($sql_data['266617X38X2069SQ003']=="Y")
        {
			$arr5c[]="For sale";
		}
		
		if($sql_data['266617X38X2069SQ004']=="Y")
        {
			$arr5c[]="For charity";
		}
		
		echo implode($arr5c, " , ")
        ?>   
        </p>
        </div>
          
          
          
    </div>
	
	
	
	
      <?php
           } 
      ?>
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does your school encourage students & teachers to reuse textbooks?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2074'] == "Y")
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
                <span class="cube">7</span> Table to understand whether internal or external waste recycling procedures are applied to waste. 

<a target="_blank" href="www.greenschoolsprogramme.org/demo/knowledge-bank/waste/#whatWeDo" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp" id="vmsg_2171"></span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Check or uncheck the answer for each subquestion. " class="question subquestions-list questions-list  checkbox-list ">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Local kabadiwala (the scrap collector)</th>
	<th>Authorised dealer</th>
	<th>Dumped at a designated community site</th>
	<th>Internal procedure</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ001">
	<th width="20%" class="answertext">
Paper (e.g., used notebooks, used examination paper, subscription newspaper and magazines)
<input type="hidden" value="" id="java266617X38X2171SQ001" name="java266617X38X2171SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ001_SQ001" name="java266617X38X2171SQ001_SQ001" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ001_SQ001" name="266617X38X2171SQ001_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ001_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }
        else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ001_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ001_SQ002" name="java266617X38X2171SQ001_SQ002" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ001_SQ002" name="266617X38X2171SQ001_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ001_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ001_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ001_SQ003" name="java266617X38X2171SQ001_SQ003" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ001_SQ003" name="266617X38X2171SQ001_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ001_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ001_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ001_SQ004" name="java266617X38X2171SQ001_SQ004" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ001_SQ004" name="266617X38X2171SQ001_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ001_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ001_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ002">
	<th width="20%" class="answertext">
Plastic (e.g. plastic bottles)
<input type="hidden" value="" id="java266617X38X2171SQ002" name="java266617X38X2171SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ002_SQ001" name="java266617X38X2171SQ002_SQ001" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ002_SQ001" name="266617X38X2171SQ002_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ002_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ002_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ002_SQ002" name="java266617X38X2171SQ002_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ002_SQ002" name="266617X38X2171SQ002_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ002_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ002_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ002_SQ003" name="java266617X38X2171SQ002_SQ003" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ002_SQ003" name="266617X38X2171SQ002_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ002_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ002_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ002_SQ004" name="java266617X38X2171SQ002_SQ004" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ002_SQ004" name="266617X38X2171SQ002_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ002_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ002_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ003">
	<th width="20%" class="answertext">
Horticultural waste
<input type="hidden" value="" id="java266617X38X2171SQ003" name="java266617X38X2171SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ003_SQ001" name="java266617X38X2171SQ003_SQ001" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ003_SQ001" name="266617X38X2171SQ003_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ003_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ003_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ003_SQ002" name="java266617X38X2171SQ003_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ003_SQ002" name="266617X38X2171SQ003_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ003_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ003_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ003_SQ003" name="java266617X38X2171SQ003_SQ003" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ003_SQ003" name="266617X38X2171SQ003_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ003_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ003_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ003_SQ004" name="java266617X38X2171SQ003_SQ004" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ003_SQ004" name="266617X38X2171SQ003_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ003_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ003_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ004">
	<th width="20%" class="answertext">
E-waste (e.g. broken, unusable computers)
<input type="hidden" value="" id="java266617X38X2171SQ004" name="java266617X38X2171SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ004_SQ001" name="java266617X38X2171SQ004_SQ001" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ004_SQ001" name="266617X38X2171SQ004_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ004_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ004_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ004_SQ002" name="java266617X38X2171SQ004_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ004_SQ002" name="266617X38X2171SQ004_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ004_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ004_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ004_SQ003" name="java266617X38X2171SQ004_SQ003" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ004_SQ003" name="266617X38X2171SQ004_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ004_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ004_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ004_SQ004" name="java266617X38X2171SQ004_SQ004" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ004_SQ004" name="266617X38X2171SQ004_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ004_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ004_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ007">
	<th width="20%" class="answertext">
Hazardous waste (e.g. diesel fuel, battery)
<input type="hidden" value="" id="java266617X38X2171SQ007" name="java266617X38X2171SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ007_SQ001" name="java266617X38X2171SQ007_SQ001" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ007_SQ001" name="266617X38X2171SQ007_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ007_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ007_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ007_SQ002" name="java266617X38X2171SQ007_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ007_SQ002" name="266617X38X2171SQ007_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ007_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ007_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ007_SQ003" name="java266617X38X2171SQ007_SQ003" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ007_SQ003" name="266617X38X2171SQ007_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ007_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ007_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ007_SQ004" name="java266617X38X2171SQ007_SQ004" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ007_SQ004" name="266617X38X2171SQ007_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ007_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ007_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ005">
	<th width="20%" class="answertext">
Wood,glass, metal scrap, other scrap
<input type="hidden" value="" id="java266617X38X2171SQ005" name="java266617X38X2171SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ005_SQ001" name="java266617X38X2171SQ005_SQ001" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ005_SQ001" name="266617X38X2171SQ005_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ005_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ005_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ005_SQ002" name="java266617X38X2171SQ005_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ005_SQ002" name="266617X38X2171SQ005_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ005_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ005_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ005_SQ003" name="java266617X38X2171SQ005_SQ003" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ005_SQ003" name="266617X38X2171SQ005_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ005_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ005_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ005_SQ004" name="java266617X38X2171SQ005_SQ004" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ005_SQ004" name="266617X38X2171SQ005_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ005_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ005_SQ004" class="read"></label>
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  checkbox-list" id="javatbd266617X38X2171SQ008">
	<th width="20%" class="answertext">
Biomedical waste (e.g. waste from Nurse's room in school, e.g. band-aids, syringe)
<input type="hidden" value="" id="java266617X38X2171SQ008" name="java266617X38X2171SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  checkbox-item">
	<input type="hidden" value="" id="java266617X38X2171SQ008_SQ001" name="java266617X38X2171SQ008_SQ001" class="form-control">
	<input type="hidden" value="" id="answer266617X38X2171SQ008_SQ001" name="266617X38X2171SQ008_SQ001" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ008_SQ001'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ008_SQ001" class="read"></label>
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ008_SQ002" name="java266617X38X2171SQ008_SQ002" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ008_SQ002" name="266617X38X2171SQ008_SQ002" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ008_SQ002'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ008_SQ002" class="read"></label>
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ008_SQ003" name="java266617X38X2171SQ008_SQ003" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ008_SQ003" name="266617X38X2171SQ008_SQ003" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ008_SQ003'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>
<label for="cbox_266617X38X2171SQ008_SQ003" class="read"></label>
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  checkbox-item">
	<input type="hidden" value="1" id="java266617X38X2171SQ008_SQ004" name="java266617X38X2171SQ008_SQ004" class="form-control">
	<input type="hidden" value="1" id="answer266617X38X2171SQ008_SQ004" name="266617X38X2171SQ008_SQ004" class="form-control">
	<?php
        if($sql_data['266617X38X2171SQ008_SQ004'] == 1)
        {
           echo '<img src="images/1445961706_tick.png">';
        }else
        {
            echo '<img src="images/1445961880_cross.png">';
        }
        ?>

<label for="cbox_266617X38X2171SQ008_SQ004" class="read"></label>
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2675_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2675_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2675']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
                <h6>
	Task 5: How does your school dispose waste?</h6>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2075"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X38X2075" name="266617X38X2075">          
            </div>
            
            
    
        </div>
    </div>    
      
      
    <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">8</span> What is the final destination for waste that is disposed of externally?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2076'] == "A1")
           {
               echo "Open dumping";
           }
           elseif($sql_data['266617X38X2076'] == "A2")
           {
               echo "Designated dumping site (Dhalao)";
           }
           elseif($sql_data['266617X38X2076'] == "A3")
           {
               echo "Landfill Site";
           }
           elseif($sql_data['266617X38X2076'] == "A4")
           {
               echo "Don't know";
           }
           ?>   
          </p>
      </div>  
      
	  
	   <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2676_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2676_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2676']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
      <span class="cube">9</span> Does your school burn waste?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2081'] == "Y")
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
	  
	  <?php  if($sql_data['266617X38X2081'] == "Y")
           { ?>
	  
	   <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2677_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2677_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2677']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
     <span class="cube">9(a)</span> Where does your school burn waste?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
		if($sql_data['266617X38X2082']=="A1")
		{
			echo "Inside the school";
		}else{
		echo "Outside the school";	
		}
        ?>   
        </p>
        </div>
        
     </div>
	
	
	 <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">9(b)</span>  What kind of waste is being burnt/ incinerated?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
		$arr9b=array();
		if($sql_data['266617X38X2083SQ001']=="Y")
        {
			$arr9b[]="Horticultural";
		}
		if($sql_data['266617X38X2083SQ002']=="Y")
        {
			$arr9b[]=" Plastic";
		}
		if($sql_data['266617X38X2083SQ003']=="Y")
        {
			$arr9b[]=" Tyres";
		}
		
		if($sql_data['266617X38X2083SQ004']=="Y")
        {
			$arr9b[]=" Paper";
		}
		
		echo implode($arr9b, " , ")
        ?>   
        </p>
        </div>
              
    </div>
	  
		   <?php } ?>
	  
	  
	  
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">10</span>&nbsp;Does your school have the following? If yes, please give the numbers.

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/waste/#eWaste" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2087"><div id='vmsg_2087_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Total no. of items</th>
	<th>Working conditions</th>
	<th>Non-working condition</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ001">
	<th width="20%" class="answertext">
TVs
<input type="hidden" value="" id="java266617X38X2087SQ001" name="java266617X38X2087SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ001']); ?>" id="java266617X38X2087SQ001_SQ001" name="java266617X38X2087SQ001_SQ001" class="form-control">
<label for="answer266617X38X2087SQ001_SQ001" class="hide read">Number</label>
<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ001_SQ001" name="266617X38X2087SQ001_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ002']); ?>" id="java266617X38X2087SQ001_SQ002" name="java266617X38X2087SQ001_SQ002" class="form-control">
<label for="answer266617X38X2087SQ001_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ001_SQ002" name="266617X38X2087SQ001_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ003']); ?>" id="java266617X38X2087SQ001_SQ003" name="java266617X38X2087SQ001_SQ003" class="form-control">
<label for="answer266617X38X2087SQ001_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ001_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ001_SQ003" name="266617X38X2087SQ001_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ002">
	<th width="20%" class="answertext">
VCR or DVD players
<input type="hidden" value="" id="java266617X38X2087SQ002" name="java266617X38X2087SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ001']); ?>" id="java266617X38X2087SQ002_SQ001" name="java266617X38X2087SQ002_SQ001" class="form-control">
<label for="answer266617X38X2087SQ002_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ002_SQ001" name="266617X38X2087SQ002_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ002']); ?>" id="java266617X38X2087SQ002_SQ002" name="java266617X38X2087SQ002_SQ002" class="form-control">
<label for="answer266617X38X2087SQ002_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ002_SQ002" name="266617X38X2087SQ002_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ003']); ?>" id="java266617X38X2087SQ002_SQ003" name="java266617X38X2087SQ002_SQ003" class="form-control">
<label for="answer266617X38X2087SQ002_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ002_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ002_SQ003" name="266617X38X2087SQ002_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ003">
	<th width="20%" class="answertext">
Refrigerators and freezers
<input type="hidden" value="" id="java266617X38X2087SQ003" name="java266617X38X2087SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ001']); ?>" id="java266617X38X2087SQ003_SQ001" name="java266617X38X2087SQ003_SQ001" class="form-control">
<label for="answer266617X38X2087SQ003_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ003_SQ001" name="266617X38X2087SQ003_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ002']); ?>" id="java266617X38X2087SQ003_SQ002" name="java266617X38X2087SQ003_SQ002" class="form-control">
<label for="answer266617X38X2087SQ003_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ003_SQ002" name="266617X38X2087SQ003_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ003']); ?>" id="java266617X38X2087SQ003_SQ003" name="java266617X38X2087SQ003_SQ003" class="form-control">
<label for="answer266617X38X2087SQ003_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ003_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ003_SQ003" name="266617X38X2087SQ003_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ004">
	<th width="20%" class="answertext">
Washing machines
<input type="hidden" value="" id="java266617X38X2087SQ004" name="java266617X38X2087SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ001']); ?>" id="java266617X38X2087SQ004_SQ001" name="java266617X38X2087SQ004_SQ001" class="form-control">
<label for="answer266617X38X2087SQ004_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ004_SQ001" name="266617X38X2087SQ004_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ002']); ?>" id="java266617X38X2087SQ004_SQ002" name="java266617X38X2087SQ004_SQ002" class="form-control">
<label for="answer266617X38X2087SQ004_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ004_SQ002" name="266617X38X2087SQ004_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ003']); ?>" id="java266617X38X2087SQ004_SQ003" name="java266617X38X2087SQ004_SQ003" class="form-control">
<label for="answer266617X38X2087SQ004_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ004_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ004_SQ003" name="266617X38X2087SQ004_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ005">
	<th width="20%" class="answertext">
Air conditioners
<input type="hidden" value="" id="java266617X38X2087SQ005" name="java266617X38X2087SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ001']); ?>" id="java266617X38X2087SQ005_SQ001" name="java266617X38X2087SQ005_SQ001" class="form-control">
<label for="answer266617X38X2087SQ005_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ005_SQ001" name="266617X38X2087SQ005_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ002']); ?>" id="java266617X38X2087SQ005_SQ002" name="java266617X38X2087SQ005_SQ002" class="form-control">
<label for="answer266617X38X2087SQ005_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ005_SQ002" name="266617X38X2087SQ005_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ003']); ?>" id="java266617X38X2087SQ005_SQ003" name="java266617X38X2087SQ005_SQ003" class="form-control">
<label for="answer266617X38X2087SQ005_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ005_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ005_SQ003" name="266617X38X2087SQ005_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ006">
	<th width="20%" class="answertext">
Heaters
<input type="hidden" value="" id="java266617X38X2087SQ006" name="java266617X38X2087SQ006" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ001']); ?>" id="java266617X38X2087SQ006_SQ001" name="java266617X38X2087SQ006_SQ001" class="form-control">
<label for="answer266617X38X2087SQ006_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ006_SQ001" name="266617X38X2087SQ006_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ002']); ?>" id="java266617X38X2087SQ006_SQ002" name="java266617X38X2087SQ006_SQ002" class="form-control">
<label for="answer266617X38X2087SQ006_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ006_SQ002" name="266617X38X2087SQ006_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ003']); ?>" id="java266617X38X2087SQ006_SQ003" name="java266617X38X2087SQ006_SQ003" class="form-control">
<label for="answer266617X38X2087SQ006_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ006_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ006_SQ003" name="266617X38X2087SQ006_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ007">
	<th width="20%" class="answertext">
Microwaves
<input type="hidden" value="" id="java266617X38X2087SQ007" name="java266617X38X2087SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ001']); ?>" id="java266617X38X2087SQ007_SQ001" name="java266617X38X2087SQ007_SQ001" class="form-control">
<label for="answer266617X38X2087SQ007_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ007_SQ001" name="266617X38X2087SQ007_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ002']); ?>" id="java266617X38X2087SQ007_SQ002" name="java266617X38X2087SQ007_SQ002" class="form-control">
<label for="answer266617X38X2087SQ007_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ007_SQ002" name="266617X38X2087SQ007_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ003']); ?>" id="java266617X38X2087SQ007_SQ003" name="java266617X38X2087SQ007_SQ003" class="form-control">
<label for="answer266617X38X2087SQ007_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ007_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ007_SQ003" name="266617X38X2087SQ007_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ008">
	<th width="20%" class="answertext">
Ovens
<input type="hidden" value="" id="java266617X38X2087SQ008" name="java266617X38X2087SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ001']); ?>" id="java266617X38X2087SQ008_SQ001" name="java266617X38X2087SQ008_SQ001" class="form-control">
<label for="answer266617X38X2087SQ008_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ008_SQ001" name="266617X38X2087SQ008_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ002']); ?>" id="java266617X38X2087SQ008_SQ002" name="java266617X38X2087SQ008_SQ002" class="form-control">
<label for="answer266617X38X2087SQ008_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ008_SQ002" name="266617X38X2087SQ008_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ003']); ?>" id="java266617X38X2087SQ008_SQ003" name="java266617X38X2087SQ008_SQ003" class="form-control">
<label for="answer266617X38X2087SQ008_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ008_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ008_SQ003" name="266617X38X2087SQ008_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ009">
	<th width="20%" class="answertext">
Toasters
<input type="hidden" value="" id="java266617X38X2087SQ009" name="java266617X38X2087SQ009" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ001']); ?>" id="java266617X38X2087SQ009_SQ001" name="java266617X38X2087SQ009_SQ001" class="form-control">
<label for="answer266617X38X2087SQ009_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ009_SQ001" name="266617X38X2087SQ009_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ002']); ?>" id="java266617X38X2087SQ009_SQ002" name="java266617X38X2087SQ009_SQ002" class="form-control">
<label for="answer266617X38X2087SQ009_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ009_SQ002" name="266617X38X2087SQ009_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ003']); ?>" id="java266617X38X2087SQ009_SQ003" name="java266617X38X2087SQ009_SQ003" class="form-control">
<label for="answer266617X38X2087SQ009_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ009_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ009_SQ003" name="266617X38X2087SQ009_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ010">
	<th width="20%" class="answertext">
Electric Kettles
<input type="hidden" value="" id="java266617X38X2087SQ010" name="java266617X38X2087SQ010" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ001']); ?>" id="java266617X38X2087SQ010_SQ001" name="java266617X38X2087SQ010_SQ001" class="form-control">
<label for="answer266617X38X2087SQ010_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ010_SQ001" name="266617X38X2087SQ010_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ002']); ?>" id="java266617X38X2087SQ010_SQ002" name="java266617X38X2087SQ010_SQ002" class="form-control">
<label for="answer266617X38X2087SQ010_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ010_SQ002" name="266617X38X2087SQ010_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ003']); ?>" id="java266617X38X2087SQ010_SQ003" name="java266617X38X2087SQ010_SQ003" class="form-control">
<label for="answer266617X38X2087SQ010_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ010_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ010_SQ003" name="266617X38X2087SQ010_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ011">
	<th width="20%" class="answertext">
Personal computers (CPU, mouse, screen and keyboard included)
<input type="hidden" value="" id="java266617X38X2087SQ011" name="java266617X38X2087SQ011" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ001']); ?>" id="java266617X38X2087SQ011_SQ001" name="java266617X38X2087SQ011_SQ001" class="form-control">
<label for="answer266617X38X2087SQ011_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ011_SQ001" name="266617X38X2087SQ011_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ002']); ?>" id="java266617X38X2087SQ011_SQ002" name="java266617X38X2087SQ011_SQ002" class="form-control">
<label for="answer266617X38X2087SQ011_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ011_SQ002" name="266617X38X2087SQ011_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ003']); ?>" id="java266617X38X2087SQ011_SQ003" name="java266617X38X2087SQ011_SQ003" class="form-control">
<label for="answer266617X38X2087SQ011_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ011_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ011_SQ003" name="266617X38X2087SQ011_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ012">
	<th width="20%" class="answertext">
Laptop computer (CPU, mouse, screen and keyboard included)
<input type="hidden" value="" id="java266617X38X2087SQ012" name="java266617X38X2087SQ012" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ001']); ?>" id="java266617X38X2087SQ012_SQ001" name="java266617X38X2087SQ012_SQ001" class="form-control">
<label for="answer266617X38X2087SQ012_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ012_SQ001" name="266617X38X2087SQ012_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ002']); ?>" id="java266617X38X2087SQ012_SQ002" name="java266617X38X2087SQ012_SQ002" class="form-control">
<label for="answer266617X38X2087SQ012_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ012_SQ002" name="266617X38X2087SQ012_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ003']); ?>" id="java266617X38X2087SQ012_SQ003" name="java266617X38X2087SQ012_SQ003" class="form-control">
<label for="answer266617X38X2087SQ012_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ012_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ012_SQ003" name="266617X38X2087SQ012_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ013">
	<th width="20%" class="answertext">
Notebook computers
<input type="hidden" value="" id="java266617X38X2087SQ013" name="java266617X38X2087SQ013" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ001']); ?>" id="java266617X38X2087SQ013_SQ001" name="java266617X38X2087SQ013_SQ001" class="form-control">
<label for="answer266617X38X2087SQ013_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ013_SQ001" name="266617X38X2087SQ013_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ002']); ?>" id="java266617X38X2087SQ013_SQ002" name="java266617X38X2087SQ013_SQ002" class="form-control">
<label for="answer266617X38X2087SQ013_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ013_SQ002" name="266617X38X2087SQ013_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ003']); ?>" id="java266617X38X2087SQ013_SQ003" name="java266617X38X2087SQ013_SQ003" class="form-control">
<label for="answer266617X38X2087SQ013_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ013_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ013_SQ003" name="266617X38X2087SQ013_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ014">
	<th width="20%" class="answertext">
Notepad computers
<input type="hidden" value="" id="java266617X38X2087SQ014" name="java266617X38X2087SQ014" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ001']); ?>" id="java266617X38X2087SQ014_SQ001" name="java266617X38X2087SQ014_SQ001" class="form-control">
<label for="answer266617X38X2087SQ014_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ014_SQ001" name="266617X38X2087SQ014_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ002']); ?>" id="java266617X38X2087SQ014_SQ002" name="java266617X38X2087SQ014_SQ002" class="form-control">
<label for="answer266617X38X2087SQ014_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ014_SQ002" name="266617X38X2087SQ014_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ003']); ?>" id="java266617X38X2087SQ014_SQ003" name="java266617X38X2087SQ014_SQ003" class="form-control">
<label for="answer266617X38X2087SQ014_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ014_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ014_SQ003" name="266617X38X2087SQ014_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ015">
	<th width="20%" class="answertext">
Printers
<input type="hidden" value="" id="java266617X38X2087SQ015" name="java266617X38X2087SQ015" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ001']); ?>" id="java266617X38X2087SQ015_SQ001" name="java266617X38X2087SQ015_SQ001" class="form-control">
<label for="answer266617X38X2087SQ015_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ015_SQ001" name="266617X38X2087SQ015_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ002']); ?>" id="java266617X38X2087SQ015_SQ002" name="java266617X38X2087SQ015_SQ002" class="form-control">
<label for="answer266617X38X2087SQ015_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ015_SQ002" name="266617X38X2087SQ015_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ003']); ?>" id="java266617X38X2087SQ015_SQ003" name="java266617X38X2087SQ015_SQ003" class="form-control">
<label for="answer266617X38X2087SQ015_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ015_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ015_SQ003" name="266617X38X2087SQ015_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ016">
	<th width="20%" class="answertext">
Copying equipment (Photocopiers)
<input type="hidden" value="" id="java266617X38X2087SQ016" name="java266617X38X2087SQ016" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ001']); ?>" id="java266617X38X2087SQ016_SQ001" name="java266617X38X2087SQ016_SQ001" class="form-control">
<label for="answer266617X38X2087SQ016_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ016_SQ001" name="266617X38X2087SQ016_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ002']); ?>" id="java266617X38X2087SQ016_SQ002" name="java266617X38X2087SQ016_SQ002" class="form-control">
<label for="answer266617X38X2087SQ016_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ016_SQ002" name="266617X38X2087SQ016_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ003']); ?>" id="java266617X38X2087SQ016_SQ003" name="java266617X38X2087SQ016_SQ003" class="form-control">
<label for="answer266617X38X2087SQ016_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ016_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ016_SQ003" name="266617X38X2087SQ016_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ017">
	<th width="20%" class="answertext">
Projectors
<input type="hidden" value="" id="java266617X38X2087SQ017" name="java266617X38X2087SQ017" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ001']); ?>" id="java266617X38X2087SQ017_SQ001" name="java266617X38X2087SQ017_SQ001" class="form-control">
<label for="answer266617X38X2087SQ017_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ017_SQ001" name="266617X38X2087SQ017_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ002']); ?>" id="java266617X38X2087SQ017_SQ002" name="java266617X38X2087SQ017_SQ002" class="form-control">
<label for="answer266617X38X2087SQ017_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ017_SQ002" name="266617X38X2087SQ017_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ003']); ?>" id="java266617X38X2087SQ017_SQ003" name="java266617X38X2087SQ017_SQ003" class="form-control">
<label for="answer266617X38X2087SQ017_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ017_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ017_SQ003" name="266617X38X2087SQ017_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ018">
	<th width="20%" class="answertext">
Whiteboards
<input type="hidden" value="" id="java266617X38X2087SQ018" name="java266617X38X2087SQ018" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ001']); ?>" id="java266617X38X2087SQ018_SQ001" name="java266617X38X2087SQ018_SQ001" class="form-control">
<label for="answer266617X38X2087SQ018_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ018_SQ001" name="266617X38X2087SQ018_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ002']); ?>" id="java266617X38X2087SQ018_SQ002" name="java266617X38X2087SQ018_SQ002" class="form-control">
<label for="answer266617X38X2087SQ018_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ018_SQ002" name="266617X38X2087SQ018_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ003']); ?>" id="java266617X38X2087SQ018_SQ003" name="java266617X38X2087SQ018_SQ003" class="form-control">
<label for="answer266617X38X2087SQ018_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ018_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ018_SQ003" name="266617X38X2087SQ018_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ019">
	<th width="20%" class="answertext">
Electrical &amp; electronic typewriters
<input type="hidden" value="" id="java266617X38X2087SQ019" name="java266617X38X2087SQ019" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ001']); ?>" id="java266617X38X2087SQ019_SQ001" name="java266617X38X2087SQ019_SQ001" class="form-control">
<label for="answer266617X38X2087SQ019_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ019_SQ001" name="266617X38X2087SQ019_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ002']); ?>" id="java266617X38X2087SQ019_SQ002" name="java266617X38X2087SQ019_SQ002" class="form-control">
<label for="answer266617X38X2087SQ019_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ019_SQ002" name="266617X38X2087SQ019_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ003']); ?>" id="java266617X38X2087SQ019_SQ003" name="java266617X38X2087SQ019_SQ003" class="form-control">
<label for="answer266617X38X2087SQ019_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ019_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ019_SQ003" name="266617X38X2087SQ019_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ020">
	<th width="20%" class="answertext">
Pocket &amp; desk calculators
<input type="hidden" value="" id="java266617X38X2087SQ020" name="java266617X38X2087SQ020" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ001']); ?>" id="java266617X38X2087SQ020_SQ001" name="java266617X38X2087SQ020_SQ001" class="form-control">
<label for="answer266617X38X2087SQ020_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ020_SQ001" name="266617X38X2087SQ020_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ002']); ?>" id="java266617X38X2087SQ020_SQ002" name="java266617X38X2087SQ020_SQ002" class="form-control">
<label for="answer266617X38X2087SQ020_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ020_SQ002" name="266617X38X2087SQ020_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ002']); ?>" id="java266617X38X2087SQ020_SQ003" name="java266617X38X2087SQ020_SQ003" class="form-control">
<label for="answer266617X38X2087SQ020_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ020_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ020_SQ003" name="266617X38X2087SQ020_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ021">
	<th width="20%" class="answertext">
Fax machines
<input type="hidden" value="" id="java266617X38X2087SQ021" name="java266617X38X2087SQ021" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ001']); ?>" id="java266617X38X2087SQ021_SQ001" name="java266617X38X2087SQ021_SQ001" class="form-control">
<label for="answer266617X38X2087SQ021_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ021_SQ001" name="266617X38X2087SQ021_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ002']); ?>" id="java266617X38X2087SQ021_SQ002" name="java266617X38X2087SQ021_SQ002" class="form-control">
<label for="answer266617X38X2087SQ021_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ021_SQ002" name="266617X38X2087SQ021_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ003']); ?>" id="java266617X38X2087SQ021_SQ003" name="java266617X38X2087SQ021_SQ003" class="form-control">
<label for="answer266617X38X2087SQ021_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ021_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ021_SQ003" name="266617X38X2087SQ021_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ022">
	<th width="20%" class="answertext">
Telex
<input type="hidden" value="" id="java266617X38X2087SQ022" name="java266617X38X2087SQ022" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ001']); ?>" id="java266617X38X2087SQ022_SQ001" name="java266617X38X2087SQ022_SQ001" class="form-control">
<label for="answer266617X38X2087SQ022_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ022_SQ001" name="266617X38X2087SQ022_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ002']); ?>" id="java266617X38X2087SQ022_SQ002" name="java266617X38X2087SQ022_SQ002" class="form-control">
<label for="answer266617X38X2087SQ022_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ022_SQ002" name="266617X38X2087SQ022_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ003']); ?>" id="java266617X38X2087SQ022_SQ003" name="java266617X38X2087SQ022_SQ003" class="form-control">
<label for="answer266617X38X2087SQ022_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ022_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ022_SQ003" name="266617X38X2087SQ022_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ023">
	<th width="20%" class="answertext">
Telephones
<input type="hidden" value="" id="java266617X38X2087SQ023" name="java266617X38X2087SQ023" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ001']); ?>" id="java266617X38X2087SQ023_SQ001" name="java266617X38X2087SQ023_SQ001" class="form-control">
<label for="answer266617X38X2087SQ023_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ023_SQ001" name="266617X38X2087SQ023_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ002']); ?>" id="java266617X38X2087SQ023_SQ002" name="java266617X38X2087SQ023_SQ002" class="form-control">
<label for="answer266617X38X2087SQ023_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ023_SQ002" name="266617X38X2087SQ023_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ003']); ?>" id="java266617X38X2087SQ023_SQ003" name="java266617X38X2087SQ023_SQ003" class="form-control">
<label for="answer266617X38X2087SQ023_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ023_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ023_SQ003" name="266617X38X2087SQ023_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ024">
	<th width="20%" class="answertext">
Pay telephones
<input type="hidden" value="" id="java266617X38X2087SQ024" name="java266617X38X2087SQ024" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ001']); ?>" id="java266617X38X2087SQ024_SQ001" name="java266617X38X2087SQ024_SQ001" class="form-control">
<label for="answer266617X38X2087SQ024_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ024_SQ001" name="266617X38X2087SQ024_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ002']); ?>" id="java266617X38X2087SQ024_SQ002" name="java266617X38X2087SQ024_SQ002" class="form-control">
<label for="answer266617X38X2087SQ024_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ024_SQ002" name="266617X38X2087SQ024_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ003']); ?>" id="java266617X38X2087SQ024_SQ003" name="java266617X38X2087SQ024_SQ003" class="form-control">
<label for="answer266617X38X2087SQ024_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ024_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ024_SQ003" name="266617X38X2087SQ024_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ025">
	<th width="20%" class="answertext">
Mobiles
<input type="hidden" value="" id="java266617X38X2087SQ025" name="java266617X38X2087SQ025" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ001']); ?>" id="java266617X38X2087SQ025_SQ001" name="java266617X38X2087SQ025_SQ001" class="form-control">
<label for="answer266617X38X2087SQ025_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ025_SQ001" name="266617X38X2087SQ025_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ002']); ?>" id="java266617X38X2087SQ025_SQ002" name="java266617X38X2087SQ025_SQ002" class="form-control">
<label for="answer266617X38X2087SQ025_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ025_SQ002" name="266617X38X2087SQ025_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ003']); ?>" id="java266617X38X2087SQ025_SQ003" name="java266617X38X2087SQ025_SQ003" class="form-control">
<label for="answer266617X38X2087SQ025_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ025_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ025_SQ003" name="266617X38X2087SQ025_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X38X2087SQ026">
	<th width="20%" class="answertext">
Answering systems
<input type="hidden" value="" id="java266617X38X2087SQ026" name="java266617X38X2087SQ026" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ001']); ?>" id="java266617X38X2087SQ026_SQ001" name="java266617X38X2087SQ026_SQ001" class="form-control">
<label for="answer266617X38X2087SQ026_SQ001" class="hide read">Number</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Number" size="5" maxlength="5" id="answer266617X38X2087SQ026_SQ001" name="266617X38X2087SQ026_SQ001" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ002']); ?>" id="java266617X38X2087SQ026_SQ002" name="java266617X38X2087SQ026_SQ002" class="form-control">
<label for="answer266617X38X2087SQ026_SQ002" class="hide read">Working conditions</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Working conditions" size="5" maxlength="5" id="answer266617X38X2087SQ026_SQ002" name="266617X38X2087SQ026_SQ002" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ003']); ?>" id="java266617X38X2087SQ026_SQ003" name="java266617X38X2087SQ026_SQ003" class="form-control">
<label for="answer266617X38X2087SQ026_SQ003" class="hide read">Non-working condition</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X38X2087SQ026_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-working condition" size="5" maxlength="5" id="answer266617X38X2087SQ026_SQ003" name="266617X38X2087SQ026_SQ003" class="multiflexitext text  empty em_sq_validation good form-control" disabled="">
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
      
      
      
       <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2678_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2678_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2678']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
      <span class="cube">11</span> Do you know that your E-waste can be collected by an authorised dealer or dismantler? 
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2114'] == "Y")
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
           if($sql_data['266617X38X2114'] == "Y")
           {
      ?>
	  
	   <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2679_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2679_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2679']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
     <span class="cube">11(a)</span> Who collects your e-waste, when not in working condition? 


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
        if($sql_data['266617X38X2115'] == "A1")
        {
            echo "Kabadiwalla/ Scrapdealer";
        }
        elseif($sql_data['266617X38X2115'] == "A2")
        {
            echo "Taken back by manufacturer";
        }
        elseif($sql_data['266617X38X2115'] == "A4")
        {
            echo "Authorised dealer";
        }
        elseif($sql_data['266617X38X2115'] == "A5")
        {
            echo "Authorised dismantler";
        }
        elseif($sql_data['266617X38X2115other'] != "")
        {
            echo "Other: ".$sql_data['266617X38X2115other'];
        }
        ?>   
        </p>
        </div>
    </div>
      <?php
           }
      ?>
      
      
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 6: School's initiatives</h6>
<p>
	It is important to appreciate the initiatives taken by the management on issues related to waste. The management's approach to these issues can be assessed in the following way:</p>
<p>
	Seek an appointment with the Chairperson, Manager and Principal of your school and ask them the following questions:</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2120"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X38X2120" name="266617X38X2120">          
            </div>
            
            
    
        </div>
    </div>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">12</span> Does the school have a policy on waste?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2121'] == "Y")
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
           if($sql_data['266617X38X2121'] == "Y")
           {
      ?>
      <p>Policy document:
      <?php
      if($sql_data['266617X38X2255_filecount'] > 0)
      {
      
      $data_arr = json_decode($sql_data['266617X38X2255']);
               //echo '<a target="_blank" href="../../audit2015/upload/surveys/266617/files/'.$data_arr[0]->filename.'">';
               //echo str_replace('%20', ' ', $data_arr[0]->name).' ('.floor($data_arr[0]->size).' KB)';
               //echo '</a>'; 
															
														 echo '<a target="_blank" href="filedownload.php?dbfilename='.$data_arr[0]->filename.'&actualfilename='.$data_arr[0]->name.'">';
															echo str_replace('%20', ' ', $data_arr[0]->name).' ('.floor($data_arr[0]->size).' KB)';
															echo '</a>';

      } 
      ?>
      <?php
           }
      ?>
      
      </p>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">13</span> Are there awareness drives with regard to Reduce, Recycle and Reuse?  
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2122'] == "Y")
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
           if($sql_data['266617X38X2122'] == "Y")
           {
      ?>
	  
	   <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2680_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2680_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2680']);
              //print_r($data_arr);
              foreach($data_arr as $dataResult)
               {
                  echo '<a target="_blank" href="filedownload.php?dbfilename='.$dataResult->filename.'&actualfilename='.$dataResult->name.'">';
                  echo "<li>";                                         
                  echo str_replace('%20', ' ', $dataResult->name).' ('.floor($dataResult->size).' KB)';
                  echo "</li>";
                  echo '</a>';
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
     <span class="cube">13(a)</span> What form do these awareness drives take?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php $ques13a=array();
        if($sql_data['266617X38X2123SQ001'] == "Y")
        {
            $ques13a[]=" As part of the curriculum";
        }
        if($sql_data['266617X38X2123SQ002'] == "Y")
        {
            $ques13a[]=" As part of extracurricular activities such as guest lectures";
        }
        if($sql_data['266617X38X2123SQ003'] == "Y")
        {
           $ques13a[]=" By the showcasing of posters and stickers";
        }
        //print_r($ques13a);
		echo implode($ques13a," , ");
        ?>   
        </p>
        </div>
    </div>
      <?php
           }
      ?>
      
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">14</span> Is the study of the environment integrated into the curriculum?   
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X38X2124'] == "Y")
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
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X38X2256_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X38X2256_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X38X2256']);
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
      	<a class="btn org-btn" href="response_detail7.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>

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