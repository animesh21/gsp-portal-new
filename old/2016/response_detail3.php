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
    <figure class="logo2"><a href="http://www.greenschoolsprogramme.org/dashboard/2016/dashboard.php"><img src="images/logo.png" alt="" class="img-responsive"></a></figure>
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
              <li class="active"><a href="response_detail3.php?id=<?php echo $_REQUEST['id']; ?>">Air</a></li>
              <li><a href="response_detail4.php?id=<?php echo $_REQUEST['id']; ?>">Energy</a></li>
              <li><a href="response_detail5.php?id=<?php echo $_REQUEST['id']; ?>">Food</a></li>
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
   <h1>Air <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span></h1>
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
	Task 1: Air Audit Team</h6>


            </span>
            </label>

        <div class="answer clearfix">
          
            
            <div class="answer clearfix">
					<h5>Teachers</h5>
			<table border="1">
<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
<?php
if($sql_data['266617X4X2409SQ001_SQ001']!="")
{
?>
<tr><td>1.</td><td><?php echo $sql_data['266617X4X2409SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2409SQ001_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2409SQ002_SQ001']!="")
{
?>
<tr><td>2.</td><td><?php echo $sql_data['266617X4X2409SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2409SQ002_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2409SQ003_SQ001']!="")
{
   ?>
<tr><td>3.</td><td><?php echo $sql_data['266617X4X2409SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2409SQ003_SQ002']; ?></td></tr>
<?php }?>		
			</table>
			
			<h5>Administrative staff</h5>
			<table border="1">
<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
<?php
if($sql_data['266617X4X2410SQ001_SQ001']!="")
{
?>
<tr><td>1.</td><td><?php echo $sql_data['266617X4X2410SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2410SQ001_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2410SQ002_SQ001']!="")
{
?>
<tr><td>2.</td><td><?php echo $sql_data['266617X4X2410SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2410SQ002_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2410SQ003_SQ001']!="")
{
   ?>
<tr><td>3.</td><td><?php echo $sql_data['266617X4X2410SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2410SQ003_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2410SQ004_SQ001']!="")
{
    ?>

<tr><td>4.</td><td><?php echo $sql_data['266617X4X2410SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2410SQ004_SQ002']; ?></td></tr>
<?php
}
if($sql_data['266617X4X2410SQ005_SQ001']!="")
{
   ?>
<tr><td>5.</td><td><?php echo $sql_data['266617X4X2410SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2410SQ005_SQ002']; ?></td></tr>
<?php }
?>
			
			</table>
			
			<h5>Students</h5>
			<table border="1">
<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>

<tr><td>1.</td><td><?php echo $sql_data['266617X4X2411SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ001_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ001_SQ003']; ?></td></tr>
<tr><td>2.</td><td><?php echo $sql_data['266617X4X2411SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ002_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ002_SQ003']; ?></td></tr>
<tr><td>3.</td><td><?php echo $sql_data['266617X4X2411SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ003_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ003_SQ003']; ?></td></tr>
<tr><td>4.</td><td><?php echo $sql_data['266617X4X2411SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ004_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ004_SQ003']; ?></td></tr>
<tr><td>5.</td><td><?php echo $sql_data['266617X4X2411SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ005_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ005_SQ003']; ?></td></tr>
<tr><td>6.</td><td><?php echo $sql_data['266617X4X2411SQ006_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ006_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ006_SQ003']; ?></td></tr>
<tr><td>7.</td><td><?php echo $sql_data['266617X4X2411SQ007_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ007_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ007_SQ003']; ?></td></tr>
<tr><td>8.</td><td><?php echo $sql_data['266617X4X2411SQ008_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ008_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ008_SQ003']; ?></td></tr>
<tr><td>9.</td><td><?php echo $sql_data['266617X4X2411SQ009_SQ001']; ?></td> <td><?php echo $sql_data['266617X4X2411SQ009_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ009_SQ003']; ?></td></tr>
<tr><td>10.</td><td><?php echo $sql_data['266617X4X2411SQ010_SQ001'];?></td> <td><?php echo  $sql_data['266617X4X2411SQ010_SQ002']; ?></td><td><?php echo $sql_data['266617X4X2411SQ010_SQ003']; ?></td></tr>
			
			
			</table>
		  
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      <div class="question boilerplate" id="question1977">
<input type="hidden" value="1977" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: Are the rooms in your school well-ventilated?</h6>
<ol>
	<li>
		For this exercise, classrooms that are occupied by students regularly should be considered. Do not add laboratories or the auditorium.</li>
	<li>
		Openings: ventilators or windows of any size can be opened on regular basis.</li>
	<li>
		This exercise should be done by schools with centrally air conditioning system also.</li>
	<li>
		The exercise should be carried out for ten classrooms only. Sample size should have representation from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and higher secondary. If your school is up to Standard X only, then, at your discretion,you can add a class to any tier. In case your school has less than 10 classrooms, include all.</li>
	<li>
		This activity is for all schools (non-air-conditioned buildings as well as air-conditioned buildings).&nbsp;</li>
</ol>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1977"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X4X1977" name="266617X4X1977">          
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">1</span> How many classrooms does your school have? </label>
        <p class="formanswertext"><?php echo number_format($sql_data['266617X4X1127']); ?></p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">2</span> Window-floor ratio of classrooms in the school.</label>
        
        <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list   ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="15%" class="odd">
<col width="15%" class="even">
<col width="15%" class="odd">
<col width="15%" class="even">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Details of the classroom (e.g. Class II section b)</th>
	<th class="answertext">X = Area of floor (LxB)</th>
	<th class="answertext">Y = Area of openings (LxH)</th>
	<th class="answertext">Percentage of the floor area being ventilated (y/x x 100)</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ001">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ001" name="java266617X4X2197SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ001_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ001_SQ001" name="java266617X4X2197SQ001_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ001_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ001" name="266617X4X2197SQ001_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ001_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ001_SQ002" name="java266617X4X2197SQ001_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ001_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ002" name="266617X4X2197SQ001_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ001_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ001_SQ003" name="java266617X4X2197SQ001_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ001_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ003" name="266617X4X2197SQ001_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ001_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ001_SQ004" name="java266617X4X2197SQ001_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ001_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ004" name="266617X4X2197SQ001_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ002">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ002" name="java266617X4X2197SQ002" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ002_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ002_SQ001" name="java266617X4X2197SQ002_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ002_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ001" name="266617X4X2197SQ002_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ002_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ002_SQ002" name="java266617X4X2197SQ002_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ002_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ002" name="266617X4X2197SQ002_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ002_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ002_SQ003" name="java266617X4X2197SQ002_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ002_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ003" name="266617X4X2197SQ002_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ002_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ002_SQ004" name="java266617X4X2197SQ002_SQ004" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X4X2197SQ002_SQ004'],2); ?>" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ004" name="266617X4X2197SQ002_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ003">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ003" name="java266617X4X2197SQ003" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ003_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ003_SQ001" name="java266617X4X2197SQ003_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ003_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ001" name="266617X4X2197SQ003_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ003_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ003_SQ002" name="java266617X4X2197SQ003_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ003_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ002" name="266617X4X2197SQ003_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ003_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ003_SQ003" name="java266617X4X2197SQ003_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ003_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ003" name="266617X4X2197SQ003_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ003_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ003_SQ004" name="java266617X4X2197SQ003_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ003_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ004" name="266617X4X2197SQ003_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ004">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ004" name="java266617X4X2197SQ004" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ004_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ004_SQ001" name="java266617X4X2197SQ004_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ004_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ001" name="266617X4X2197SQ004_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ004_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ004_SQ002" name="java266617X4X2197SQ004_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ004_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ002" name="266617X4X2197SQ004_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ004_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ004_SQ003" name="java266617X4X2197SQ004_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ004_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ003" name="266617X4X2197SQ004_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ004_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ004_SQ004" name="java266617X4X2197SQ004_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ004_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ004" name="266617X4X2197SQ004_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ005">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ005" name="java266617X4X2197SQ005" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ005_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ005_SQ001" name="java266617X4X2197SQ005_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ005_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ001" name="266617X4X2197SQ005_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ005_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ005_SQ002" name="java266617X4X2197SQ005_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ005_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ002" name="266617X4X2197SQ005_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ005_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ005_SQ003" name="java266617X4X2197SQ005_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ005_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ003" name="266617X4X2197SQ005_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ005_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ005_SQ004" name="java266617X4X2197SQ005_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ005_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ004" name="266617X4X2197SQ005_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ006">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ006" name="java266617X4X2197SQ006" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ006_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ006_SQ001" name="java266617X4X2197SQ006_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ006_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ001" name="266617X4X2197SQ006_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ006_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ006_SQ002" name="java266617X4X2197SQ006_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ006_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ002" name="266617X4X2197SQ006_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ006_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ006_SQ003" name="java266617X4X2197SQ006_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ006_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ003" name="266617X4X2197SQ006_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ006_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ006_SQ004" name="java266617X4X2197SQ006_SQ004" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X4X2197SQ006_SQ004'],2); ?>" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ004" name="266617X4X2197SQ006_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ007">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ007" name="java266617X4X2197SQ007" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ007_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ007_SQ001" name="java266617X4X2197SQ007_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ007_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ001" name="266617X4X2197SQ007_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ007_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ007_SQ002" name="java266617X4X2197SQ007_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ007_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ002" name="266617X4X2197SQ007_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ007_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ007_SQ003" name="java266617X4X2197SQ007_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ007_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ003" name="266617X4X2197SQ007_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ007_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ007_SQ004" name="java266617X4X2197SQ007_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ007_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ004" name="266617X4X2197SQ007_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ008">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ008" name="java266617X4X2197SQ008" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ008_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ008_SQ001" name="java266617X4X2197SQ008_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ008_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ001" name="266617X4X2197SQ008_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ008_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ008_SQ002" name="java266617X4X2197SQ008_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ008_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ002" name="266617X4X2197SQ008_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ008_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ008_SQ003" name="java266617X4X2197SQ008_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ008_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ003" name="266617X4X2197SQ008_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ008_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ008_SQ004" name="java266617X4X2197SQ008_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ008_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ004" name="266617X4X2197SQ008_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ009">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ009" name="java266617X4X2197SQ009" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ009_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ009_SQ001" name="java266617X4X2197SQ009_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ009_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ001" name="266617X4X2197SQ009_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ009_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ009_SQ002" name="java266617X4X2197SQ009_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ009_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ002" name="266617X4X2197SQ009_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ009_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ009_SQ003" name="java266617X4X2197SQ009_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ009_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ003" name="266617X4X2197SQ009_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ009_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ009_SQ004" name="java266617X4X2197SQ009_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ009_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ004" name="266617X4X2197SQ009_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ010">
			<th class="answertext">
				
				<input type="hidden" value="" id="java266617X4X2197SQ010" name="java266617X4X2197SQ010" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ010_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ010_SQ001" name="java266617X4X2197SQ010_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ010_SQ001']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ001" name="266617X4X2197SQ010_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ010_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ010_SQ002" name="java266617X4X2197SQ010_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ010_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ002" name="266617X4X2197SQ010_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ010_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ010_SQ003" name="java266617X4X2197SQ010_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ010_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ003" name="266617X4X2197SQ010_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ010_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ010_SQ004" name="java266617X4X2197SQ010_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ010_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ004" name="266617X4X2197SQ010_SQ004" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ011">
			<th class="answertext">
				Total
				<input type="hidden" value="" id="java266617X4X2197SQ011" name="java266617X4X2197SQ011" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X4X2197SQ011_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
				<input type="hidden" id="java266617X4X2197SQ011_SQ001" name="java266617X4X2197SQ011_SQ001" class="form-control">
				<input type="text" value="" size="20" class="empty form-control" id="answer266617X4X2197SQ011_SQ001" name="266617X4X2197SQ011_SQ001" style="display: none;">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X4X2197SQ011_SQ002" class="hide read">X = Area of floor (LxB)</label>
				<input type="hidden" id="java266617X4X2197SQ011_SQ002" name="java266617X4X2197SQ011_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ011_SQ002']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ002" name="266617X4X2197SQ011_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X4X2197SQ011_SQ003" class="hide read">Y = Area of openings (LxH)</label>
				<input type="hidden" id="java266617X4X2197SQ011_SQ003" name="java266617X4X2197SQ011_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ011_SQ003']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ003" name="266617X4X2197SQ011_SQ003" readonly="">
			</td>
	<td class="answer_cell_00SQ004 answer-item text-item">
				<label for="answer266617X4X2197SQ011_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
				<input type="hidden" id="java266617X4X2197SQ011_SQ004" name="java266617X4X2197SQ011_SQ004" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X4X2197SQ011_SQ004']; ?>" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ004" name="266617X4X2197SQ011_SQ004" style="display: none;" readonly="">
			</td>

		</tr>
	</tbody>
</table>
        
        
      </div>
      
      
      <div class="question boilerplate" id="question1978">
<input type="hidden" value="1978" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task &nbsp;3: How eco-friendly are the vehicles in your school?</h6>
<p>
	In this section, you will maintain a record of vehicles used by your school. Two critical parameters indicate if your vehicles are eco-friendly - fuel used by each vehicle and age of the vehicle.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
          
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X4X1978" name="266617X4X1978">          
            </div>
       
        </div>
    </div>
</div>
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> What is the ownership used by the vehicles used in your school? Please choose what is applicable?
      </span>
      </label>
          <p class="formanswertext">
           <?php 
		   
            if($sql_data['266617X4X164'] == "A1")
                {
                  echo "School does not use or own vehicles";
                }
           elseif($sql_data['266617X4X164'] == "A2")
                {
                  echo "Operator-owned vehicles";
                }   
           elseif($sql_data['266617X4X164'] == "A3")
                {
                  echo "School-owned vehicles";
                }    
            elseif($sql_data['266617X4X164'] == "A4")
                {
                  echo "A combination of school-owned and operator-owned vehicles";
                }    
            
                ?>
          </p>
      </div>
      <?php
      
      if($sql_data['266617X4X164'] == "A4" || $sql_data['266617X4X164'] == "A3")
{
    ?>
          <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3(a)</span> Provide details of school-owned motorized vehicles
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_165"><div id='vmsg_165_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="12%" class="odd">
<col width="12%" class="even">
<col width="12%" class="odd">
<col width="12%" class="even">
<col width="12%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Buses</th>
	<th>Cars</th>
	<th>Vans</th>
	<th>Others</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X165SQ001">
	<th width="20%" class="answertext">
No. of vehicles
<input type="hidden" value="" id="java266617X4X165SQ001" name="java266617X4X165SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="1" id="java266617X4X165SQ001_SQ001" name="java266617X4X165SQ001_SQ001" class="form-control">
<label for="answer266617X4X165SQ001_SQ001" class="hide read">Buses</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ001_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Buses" size="5" maxlength="5" id="answer266617X4X165SQ001_SQ001" name="266617X4X165SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="2" id="java266617X4X165SQ001_SQ002" name="java266617X4X165SQ001_SQ002" class="form-control">
<label for="answer266617X4X165SQ001_SQ002" class="hide read">Cars</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ001_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Cars" size="5" maxlength="5" id="answer266617X4X165SQ001_SQ002" name="266617X4X165SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ008 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="3" id="java266617X4X165SQ001_SQ008" name="java266617X4X165SQ001_SQ008" class="form-control">
<label for="answer266617X4X165SQ001_SQ008" class="hide read">Vans</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ001_SQ008']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Vans" size="5" maxlength="5" id="answer266617X4X165SQ001_SQ008" name="266617X4X165SQ001_SQ008" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ007 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="4" id="java266617X4X165SQ001_SQ007" name="java266617X4X165SQ001_SQ007" class="form-control">
<label for="answer266617X4X165SQ001_SQ007" class="hide read">Others</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ001_SQ007']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Others" size="5" maxlength="5" id="answer266617X4X165SQ001_SQ007" name="266617X4X165SQ001_SQ007" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="10" id="java266617X4X165SQ001_SQ003" name="java266617X4X165SQ001_SQ003" class="form-control">
<label for="answer266617X4X165SQ001_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ001_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X165SQ001_SQ003" name="266617X4X165SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X165SQ002">
	<th width="20%" class="answertext">
No. of vehicles more than five years old
<input type="hidden" value="" id="java266617X4X165SQ002" name="java266617X4X165SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="1" id="java266617X4X165SQ002_SQ001" name="java266617X4X165SQ002_SQ001" class="form-control">
<label for="answer266617X4X165SQ002_SQ001" class="hide read">Buses</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ002_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Buses" size="5" maxlength="5" id="answer266617X4X165SQ002_SQ001" name="266617X4X165SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="2" id="java266617X4X165SQ002_SQ002" name="java266617X4X165SQ002_SQ002" class="form-control">
<label for="answer266617X4X165SQ002_SQ002" class="hide read">Cars</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ002_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Cars" size="5" maxlength="5" id="answer266617X4X165SQ002_SQ002" name="266617X4X165SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ008 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="3" id="java266617X4X165SQ002_SQ008" name="java266617X4X165SQ002_SQ008" class="form-control">
<label for="answer266617X4X165SQ002_SQ008" class="hide read">Vans</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ002_SQ008']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Vans" size="5" maxlength="5" id="answer266617X4X165SQ002_SQ008" name="266617X4X165SQ002_SQ008" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ007 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="4" id="java266617X4X165SQ002_SQ007" name="java266617X4X165SQ002_SQ007" class="form-control">
<label for="answer266617X4X165SQ002_SQ007" class="hide read">Others</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ002_SQ007']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Others" size="5" maxlength="5" id="answer266617X4X165SQ002_SQ007" name="266617X4X165SQ002_SQ007" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="10" id="java266617X4X165SQ002_SQ003" name="java266617X4X165SQ002_SQ003" class="form-control">
<label for="answer266617X4X165SQ002_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ002_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X165SQ002_SQ003" name="266617X4X165SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X165SQ004">
	<th width="20%" class="answertext">
No. of Air conditioned vehicles
<input type="hidden" value="" id="java266617X4X165SQ004" name="java266617X4X165SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="1" id="java266617X4X165SQ004_SQ001" name="java266617X4X165SQ004_SQ001" class="form-control">
<label for="answer266617X4X165SQ004_SQ001" class="hide read">Buses</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ004_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Buses" size="5" maxlength="5" id="answer266617X4X165SQ004_SQ001" name="266617X4X165SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="2" id="java266617X4X165SQ004_SQ002" name="java266617X4X165SQ004_SQ002" class="form-control">
<label for="answer266617X4X165SQ004_SQ002" class="hide read">Cars</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ004_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Cars" size="5" maxlength="5" id="answer266617X4X165SQ004_SQ002" name="266617X4X165SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ008 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="3" id="java266617X4X165SQ004_SQ008" name="java266617X4X165SQ004_SQ008" class="form-control">
<label for="answer266617X4X165SQ004_SQ008" class="hide read">Vans</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ004_SQ008']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Vans" size="5" maxlength="5" id="answer266617X4X165SQ004_SQ008" name="266617X4X165SQ004_SQ008" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ007 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="4" id="java266617X4X165SQ004_SQ007" name="java266617X4X165SQ004_SQ007" class="form-control">
<label for="answer266617X4X165SQ004_SQ007" class="hide read">Others</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ004_SQ007']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Others" size="5" maxlength="5" id="answer266617X4X165SQ004_SQ007" name="266617X4X165SQ004_SQ007" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="10" id="java266617X4X165SQ004_SQ003" name="java266617X4X165SQ004_SQ003" class="form-control">
<label for="answer266617X4X165SQ004_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ004_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X165SQ004_SQ003" name="266617X4X165SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X165SQ005">
	<th width="20%" class="answertext">
No. of vehicles with PUC done
<input type="hidden" value="" id="java266617X4X165SQ005" name="java266617X4X165SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="1" id="java266617X4X165SQ005_SQ001" name="java266617X4X165SQ005_SQ001" class="form-control">
<label for="answer266617X4X165SQ005_SQ001" class="hide read">Buses</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ005_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Buses" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ001" name="266617X4X165SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="2" id="java266617X4X165SQ005_SQ002" name="java266617X4X165SQ005_SQ002" class="form-control">
<label for="answer266617X4X165SQ005_SQ002" class="hide read">Cars</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ005_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Cars" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ002" name="266617X4X165SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ008 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="3" id="java266617X4X165SQ005_SQ008" name="java266617X4X165SQ005_SQ008" class="form-control">
<label for="answer266617X4X165SQ005_SQ008" class="hide read">Vans</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ005_SQ008']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Vans" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ008" name="266617X4X165SQ005_SQ008" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ007 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="4" id="java266617X4X165SQ005_SQ007" name="java266617X4X165SQ005_SQ007" class="form-control">
<label for="answer266617X4X165SQ005_SQ007" class="hide read">Others</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ005_SQ007']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Others" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ007" name="266617X4X165SQ005_SQ007" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="10" id="java266617X4X165SQ005_SQ003" name="java266617X4X165SQ005_SQ003" class="form-control">
<label for="answer266617X4X165SQ005_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ005_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ003" name="266617X4X165SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>






	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X165SQ005">
	<th width="20%" class="answertext">
Parking area (m2)
<input type="hidden" value="" id="java266617X4X165SQ005" name="java266617X4X165SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="1" id="java266617X4X165SQ005_SQ001" name="java266617X4X165SQ005_SQ001" class="form-control">
<label for="answer266617X4X165SQ005_SQ001" class="hide read">Buses</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ006_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Buses" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ001" name="266617X4X165SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="2" id="java266617X4X165SQ005_SQ002" name="java266617X4X165SQ005_SQ002" class="form-control">
<label for="answer266617X4X165SQ005_SQ002" class="hide read">Cars</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ006_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Cars" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ002" name="266617X4X165SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ008 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="3" id="java266617X4X165SQ005_SQ008" name="java266617X4X165SQ005_SQ008" class="form-control">
<label for="answer266617X4X165SQ005_SQ008" class="hide read">Vans</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ006_SQ008']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Vans" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ008" name="266617X4X165SQ005_SQ008" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ007 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="4" id="java266617X4X165SQ005_SQ007" name="java266617X4X165SQ005_SQ007" class="form-control">
<label for="answer266617X4X165SQ005_SQ007" class="hide read">Others</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ006_SQ007']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Others" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ007" name="266617X4X165SQ005_SQ007" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="10" id="java266617X4X165SQ005_SQ003" name="java266617X4X165SQ005_SQ003" class="form-control">
<label for="answer266617X4X165SQ005_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X165SQ006_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X165SQ005_SQ003" name="266617X4X165SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	</tbody>
</table>
          
 </div>
            
<div class="survey-question-help"><img align="left" alt="Help" src="/audit/images/help.gif"><p>
	Do not enter any personal vehicle.</p>
</div>
    
        </div>
    </div>
    
    
	<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X4X2670_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X4X2670_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X4X2670']);
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
	
	
	
    
<?php } ?>
      
      
      
      
      <div class="question array-multi-flexi" id="question2217">
<input type="hidden" value="2217" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3(b)</span>&nbsp;Specify the type of fuel used by your school's vehicles:

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#criticalParameters" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2217"><div id='vmsg_2217_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
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
	<th>Diesel</th>
	<th>Petrol</th>
	<th>LPG</th>
	<th>CNG</th>
	<th>Electric</th>
	<th>Hybrid</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ001">
	<th width="20%" class="answertext">
Bus
<input type="hidden" value="" id="java266617X4X2217SQ001" name="java266617X4X2217SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ001_SQ001']; ?>" id="java266617X4X2217SQ001_SQ001" name="java266617X4X2217SQ001_SQ001" class="form-control" readonly="">
<label for="answer266617X4X2217SQ001_SQ001" class="hide read">Diesel</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ001" name="266617X4X2217SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ001_SQ002']; ?>" id="java266617X4X2217SQ001_SQ002" name="java266617X4X2217SQ001_SQ002" class="form-control" readonly="">
<label for="answer266617X4X2217SQ001_SQ002" class="hide read">Petrol</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ002" name="266617X4X2217SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ001_SQ003']; ?>" id="java266617X4X2217SQ001_SQ003" name="java266617X4X2217SQ001_SQ003" class="form-control" readonly="">
<label for="answer266617X4X2217SQ001_SQ003" class="hide read">LPG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ003" name="266617X4X2217SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ001_SQ004']; ?>" id="java266617X4X2217SQ001_SQ004" name="java266617X4X2217SQ001_SQ004" class="form-control" readonly="">
<label for="answer266617X4X2217SQ001_SQ004" class="hide read">CNG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ004" name="266617X4X2217SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
		<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ005']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ001_SQ006']; ?>"  class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ002">
	<th width="20%" class="answertext">
Car
<input type="hidden" value="" id="java266617X4X2217SQ002" name="java266617X4X2217SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ002_SQ001']; ?>" id="java266617X4X2217SQ002_SQ001" name="java266617X4X2217SQ002_SQ001" class="form-control" readonly="">
<label for="answer266617X4X2217SQ002_SQ001" class="hide read">Diesel</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ001" name="266617X4X2217SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ002_SQ002']; ?>" id="java266617X4X2217SQ002_SQ002" name="java266617X4X2217SQ002_SQ002" class="form-control" readonly="">
<label for="answer266617X4X2217SQ002_SQ002" class="hide read">Petrol</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ002" name="266617X4X2217SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ002_SQ003']; ?>" id="java266617X4X2217SQ002_SQ003" name="java266617X4X2217SQ002_SQ003" class="form-control" readonly="">
<label for="answer266617X4X2217SQ002_SQ003" class="hide read">LPG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ003" name="266617X4X2217SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ002_SQ004']; ?>" id="java266617X4X2217SQ002_SQ004" name="java266617X4X2217SQ002_SQ004" class="form-control" readonly="">
<label for="answer266617X4X2217SQ002_SQ004" class="hide read">CNG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ004" name="266617X4X2217SQ002_SQ004" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ005']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ002_SQ006']; ?>"  class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ003">
	<th width="20%" class="answertext">
Van
<input type="hidden" value="" id="java266617X4X2217SQ003" name="java266617X4X2217SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ003_SQ001']; ?>" id="java266617X4X2217SQ003_SQ001" name="java266617X4X2217SQ003_SQ001" class="form-control" readonly="">
<label for="answer266617X4X2217SQ003_SQ001" class="hide read">Diesel</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ001" name="266617X4X2217SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ003_SQ002']; ?>" id="java266617X4X2217SQ003_SQ002" name="java266617X4X2217SQ003_SQ002" class="form-control" readonly="">
<label for="answer266617X4X2217SQ003_SQ002" class="hide read">Petrol</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ002" name="266617X4X2217SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ003_SQ003']; ?>" id="java266617X4X2217SQ003_SQ003" name="java266617X4X2217SQ003_SQ003" class="form-control" readonly="">
<label for="answer266617X4X2217SQ003_SQ003" class="hide read">LPG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ003" name="266617X4X2217SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ003_SQ004']; ?>" id="java266617X4X2217SQ003_SQ004" name="java266617X4X2217SQ003_SQ004" class="form-control" readonly="">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">CNG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ004" name="266617X4X2217SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ005']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	
		<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">	
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ006']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>

	
</tr>


<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ003">
	<th width="20%" class="answertext">
	Other vehicles
<input type="hidden" value="" id="java266617X4X2217SQ003" name="java266617X4X2217SQ003" class="form-control">
	</th>
	
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ001" class="hide read">Diesel</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ005_SQ001']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X4X2217SQ003_SQ002" class="hide read">Petrol</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ003_SQ002']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X4X2217SQ003_SQ003" class="hide read">LPG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ005_SQ003']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">CNG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ005_SQ004']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	
		<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ005_SQ005']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	
		<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ005_SQ006']; ?>"  class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
</tr>



	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ004">
	<th width="20%" class="answertext">
Sub-Total
<input type="hidden" value="" id="java266617X4X2217SQ004" name="java266617X4X2217SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ004_SQ001']; ?>" id="java266617X4X2217SQ004_SQ001" name="java266617X4X2217SQ004_SQ001" class="form-control" readonly="">
<label for="answer266617X4X2217SQ004_SQ001" class="hide read">Diesel</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ001" name="266617X4X2217SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ004_SQ002']; ?>" id="java266617X4X2217SQ004_SQ002" name="java266617X4X2217SQ004_SQ002" class="form-control" readonly="">
<label for="answer266617X4X2217SQ004_SQ002" class="hide read">Petrol</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ002" name="266617X4X2217SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ004_SQ003']; ?>" id="java266617X4X2217SQ004_SQ003" name="java266617X4X2217SQ004_SQ003" class="form-control" readonly="">
<label for="answer266617X4X2217SQ004_SQ003" class="hide read">LPG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ003" name="266617X4X2217SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X2217SQ004_SQ004']; ?>" id="java266617X4X2217SQ004_SQ004" name="java266617X4X2217SQ004_SQ004" class="form-control" readonly="">
<label for="answer266617X4X2217SQ004_SQ004" class="hide read">CNG</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ004" name="266617X4X2217SQ004_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ005']; ?>" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
<label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
	<input type="text" value="<?php echo $sql_data['266617X4X2217SQ004_SQ006']; ?>"  class="multiflexitext text  em_sq_validation good form-control" readonly="">
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
           if($sql_data['266617X4X2671_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X4X2671_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X4X2671']);
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
	
	
	
	
</div>
      
      
      <div class="question boilerplate" id="question1979">
<input type="hidden" value="1979" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 4: How do you travel to school every day?</h6>
<p>
	To know how the students, teachers and other staff in your school travel daily, the teacher/coordinator in the team should ask individual class monitors to record the commuting practices of his/ her classmates and the teachers, and forward to the audit team. After completing the survey, provide the compiled information below.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1979"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X4X1979" name="266617X4X1979">          
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      
      <div class="question array-multi-flexi" id="question176">
<input type="hidden" value="176" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4</span> How many members of the school community use each type of transport: <input type="hidden" value="1283" name="totalpopulation"><input type="hidden" value="&lt;span style='background-color: #eee8aa;'&gt;&lt;span title='Undefined variable' style='border-style: solid; border-width: 2px; border-color: red;'&gt;&lt;span title='Undefined variable' style='color: red; font-weight: bold'&gt;INSERTANS:266617X34X1608&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;" name="stype"> 
<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#publicTransport" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_176"><div id='vmsg_176_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
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
	<th>Students</th>
	<th>Teaching Staff</th>
	<th>Non-Teaching Staff</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ001">
	<th width="20%" class="answertext">
School bus
<input type="hidden" value="" id="java266617X4X176SQ001" name="java266617X4X176SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ001_SQ001']; ?>" id="java266617X4X176SQ001_SQ001" name="java266617X4X176SQ001_SQ001" class="form-control">
<label for="answer266617X4X176SQ001_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ001_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ001" name="266617X4X176SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ001_SQ002']; ?>" id="java266617X4X176SQ001_SQ002" name="java266617X4X176SQ001_SQ002" class="form-control">
<label for="answer266617X4X176SQ001_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ001_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ002" name="266617X4X176SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ001_SQ003']; ?>" id="java266617X4X176SQ001_SQ003" name="java266617X4X176SQ001_SQ003" class="form-control">
<label for="answer266617X4X176SQ001_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ001_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ003" name="266617X4X176SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ001_SQ004']; ?>" id="java266617X4X176SQ001_SQ004" name="java266617X4X176SQ001_SQ004" class="form-control">
<label for="answer266617X4X176SQ001_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ001_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ004" name="266617X4X176SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ002">
	<th width="20%" class="answertext">
Public bus
<input type="hidden" value="" id="java266617X4X176SQ002" name="java266617X4X176SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ002_SQ001']; ?>" id="java266617X4X176SQ002_SQ001" name="java266617X4X176SQ002_SQ001" class="form-control">
<label for="answer266617X4X176SQ002_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ002_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ001" name="266617X4X176SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ002_SQ002']; ?>" id="java266617X4X176SQ002_SQ002" name="java266617X4X176SQ002_SQ002" class="form-control">
<label for="answer266617X4X176SQ002_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ002_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ002" name="266617X4X176SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ002_SQ003']; ?>" id="java266617X4X176SQ002_SQ003" name="java266617X4X176SQ002_SQ003" class="form-control">
<label for="answer266617X4X176SQ002_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ002_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ003" name="266617X4X176SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ002_SQ004']; ?>" id="java266617X4X176SQ002_SQ004" name="java266617X4X176SQ002_SQ004" class="form-control">
<label for="answer266617X4X176SQ002_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ002_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ004" name="266617X4X176SQ002_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ003">
	<th width="20%" class="answertext">
School transport (other than bus)
<input type="hidden" value="" id="java266617X4X176SQ003" name="java266617X4X176SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ003_SQ001']; ?>" id="java266617X4X176SQ003_SQ001" name="java266617X4X176SQ003_SQ001" class="form-control">
<label for="answer266617X4X176SQ003_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ003_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ001" name="266617X4X176SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ003_SQ002']; ?>" id="java266617X4X176SQ003_SQ002" name="java266617X4X176SQ003_SQ002" class="form-control">
<label for="answer266617X4X176SQ003_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ003_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ002" name="266617X4X176SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ003_SQ003']; ?>" id="java266617X4X176SQ003_SQ003" name="java266617X4X176SQ003_SQ003" class="form-control">
<label for="answer266617X4X176SQ003_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ003_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ003" name="266617X4X176SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ003_SQ004']; ?>" id="java266617X4X176SQ003_SQ004" name="java266617X4X176SQ003_SQ004" class="form-control">
<label for="answer266617X4X176SQ003_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ003_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ004" name="266617X4X176SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ0012">
	<th width="20%" class="answertext">
Public transport (other than bus, Metro, car pool)
<input type="hidden" value="" id="java266617X4X176SQ0012" name="java266617X4X176SQ0012" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ0012_SQ001']; ?>" id="java266617X4X176SQ0012_SQ001" name="java266617X4X176SQ0012_SQ001" class="form-control">
<label for="answer266617X4X176SQ0012_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ0012_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ001" name="266617X4X176SQ0012_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ0012_SQ002']; ?>" id="java266617X4X176SQ0012_SQ002" name="java266617X4X176SQ0012_SQ002" class="form-control">
<label for="answer266617X4X176SQ0012_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ0012_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ002" name="266617X4X176SQ0012_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ0012_SQ003']; ?>" id="java266617X4X176SQ0012_SQ003" name="java266617X4X176SQ0012_SQ003" class="form-control">
<label for="answer266617X4X176SQ0012_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ0012_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ003" name="266617X4X176SQ0012_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ0012_SQ004']; ?>" id="java266617X4X176SQ0012_SQ004" name="java266617X4X176SQ0012_SQ004" class="form-control">
<label for="answer266617X4X176SQ0012_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ0012_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ004" name="266617X4X176SQ0012_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ005">
	<th width="20%" class="answertext">
Taxi four-wheeler
<input type="hidden" value="" id="java266617X4X176SQ005" name="java266617X4X176SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ005_SQ001']; ?>" id="java266617X4X176SQ005_SQ001" name="java266617X4X176SQ005_SQ001" class="form-control">
<label for="answer266617X4X176SQ005_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ005_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ001" name="266617X4X176SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ005_SQ002']; ?>" id="java266617X4X176SQ005_SQ002" name="java266617X4X176SQ005_SQ002" class="form-control">
<label for="answer266617X4X176SQ005_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ005_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ002" name="266617X4X176SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ005_SQ003']; ?>" id="java266617X4X176SQ005_SQ003" name="java266617X4X176SQ005_SQ003" class="form-control">
<label for="answer266617X4X176SQ005_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ005_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ003" name="266617X4X176SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ005_SQ004']; ?>" id="java266617X4X176SQ005_SQ004" name="java266617X4X176SQ005_SQ004" class="form-control">
<label for="answer266617X4X176SQ005_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ005_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ004" name="266617X4X176SQ005_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ006">
	<th width="20%" class="answertext">
Taxi three-wheeler
<input type="hidden" value="" id="java266617X4X176SQ006" name="java266617X4X176SQ006" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ006_SQ001']; ?>" id="java266617X4X176SQ006_SQ001" name="java266617X4X176SQ006_SQ001" class="form-control">
<label for="answer266617X4X176SQ006_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ006_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ001" name="266617X4X176SQ006_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ006_SQ002']; ?>" id="java266617X4X176SQ006_SQ002" name="java266617X4X176SQ006_SQ002" class="form-control">
<label for="answer266617X4X176SQ006_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ006_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ002" name="266617X4X176SQ006_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ006_SQ003']; ?>" id="java266617X4X176SQ006_SQ003" name="java266617X4X176SQ006_SQ003" class="form-control">
<label for="answer266617X4X176SQ006_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ006_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ003" name="266617X4X176SQ006_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ006_SQ004']; ?>" id="java266617X4X176SQ006_SQ004" name="java266617X4X176SQ006_SQ004" class="form-control">
<label for="answer266617X4X176SQ006_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ006_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ004" name="266617X4X176SQ006_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ007">
	<th width="20%" class="answertext">
Personal four-wheeler
<input type="hidden" value="" id="java266617X4X176SQ007" name="java266617X4X176SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ007_SQ001']; ?>" id="java266617X4X176SQ007_SQ001" name="java266617X4X176SQ007_SQ001" class="form-control">
<label for="answer266617X4X176SQ007_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ007_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ001" name="266617X4X176SQ007_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ007_SQ002']; ?>" id="java266617X4X176SQ007_SQ002" name="java266617X4X176SQ007_SQ002" class="form-control">
<label for="answer266617X4X176SQ007_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ007_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ002" name="266617X4X176SQ007_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ007_SQ003']; ?>" id="java266617X4X176SQ007_SQ003" name="java266617X4X176SQ007_SQ003" class="form-control">
<label for="answer266617X4X176SQ007_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ007_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ003" name="266617X4X176SQ007_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ007_SQ004']; ?>" id="java266617X4X176SQ007_SQ004" name="java266617X4X176SQ007_SQ004" class="form-control">
<label for="answer266617X4X176SQ007_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ007_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ004" name="266617X4X176SQ007_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ008">
	<th width="20%" class="answertext">
Personal two-wheeler
<input type="hidden" value="" id="java266617X4X176SQ008" name="java266617X4X176SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ008_SQ001']; ?>" id="java266617X4X176SQ008_SQ001" name="java266617X4X176SQ008_SQ001" class="form-control">
<label for="answer266617X4X176SQ008_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ008_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ001" name="266617X4X176SQ008_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ008_SQ002']; ?>" id="java266617X4X176SQ008_SQ002" name="java266617X4X176SQ008_SQ002" class="form-control">
<label for="answer266617X4X176SQ008_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ008_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ002" name="266617X4X176SQ008_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ008_SQ003']; ?>" id="java266617X4X176SQ008_SQ003" name="java266617X4X176SQ008_SQ003" class="form-control">
<label for="answer266617X4X176SQ008_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ008_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ003" name="266617X4X176SQ008_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ008_SQ004']; ?>" id="java266617X4X176SQ008_SQ004" name="java266617X4X176SQ008_SQ004" class="form-control">
<label for="answer266617X4X176SQ008_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ008_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ004" name="266617X4X176SQ008_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ009">
	<th width="20%" class="answertext">
Bicycle
<input type="hidden" value="" id="java266617X4X176SQ009" name="java266617X4X176SQ009" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ009_SQ001']; ?>" id="java266617X4X176SQ009_SQ001" name="java266617X4X176SQ009_SQ001" class="form-control">
<label for="answer266617X4X176SQ009_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ009_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ001" name="266617X4X176SQ009_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ009_SQ002']; ?>" id="java266617X4X176SQ009_SQ002" name="java266617X4X176SQ009_SQ002" class="form-control">
<label for="answer266617X4X176SQ009_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ009_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ002" name="266617X4X176SQ009_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ009_SQ003']; ?>" id="java266617X4X176SQ009_SQ003" name="java266617X4X176SQ009_SQ003" class="form-control">
<label for="answer266617X4X176SQ009_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ009_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ003" name="266617X4X176SQ009_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ009_SQ004']; ?>" id="java266617X4X176SQ009_SQ004" name="java266617X4X176SQ009_SQ004" class="form-control">
<label for="answer266617X4X176SQ009_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ009_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ004" name="266617X4X176SQ009_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ010">
	<th width="20%" class="answertext">
On foot
<input type="hidden" value="" id="java266617X4X176SQ010" name="java266617X4X176SQ010" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ010_SQ001']; ?>" id="java266617X4X176SQ010_SQ001" name="java266617X4X176SQ010_SQ001" class="form-control">
<label for="answer266617X4X176SQ010_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ010_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ001" name="266617X4X176SQ010_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ010_SQ002']; ?>" id="java266617X4X176SQ010_SQ002" name="java266617X4X176SQ010_SQ002" class="form-control">
<label for="answer266617X4X176SQ010_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ010_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ002" name="266617X4X176SQ010_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ010_SQ003']; ?>" id="java266617X4X176SQ010_SQ003" name="java266617X4X176SQ010_SQ003" class="form-control">
<label for="answer266617X4X176SQ010_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ010_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ003" name="266617X4X176SQ010_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ010_SQ004']; ?>" id="java266617X4X176SQ010_SQ004" name="java266617X4X176SQ010_SQ004" class="form-control">
<label for="answer266617X4X176SQ010_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ010_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ004" name="266617X4X176SQ010_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ011">
	<th width="20%" class="answertext">
Others (non-motorised)
<input type="hidden" value="" id="java266617X4X176SQ011" name="java266617X4X176SQ011" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ011_SQ001']; ?>" id="java266617X4X176SQ011_SQ001" name="java266617X4X176SQ011_SQ001" class="form-control">
<label for="answer266617X4X176SQ011_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ011_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ001" name="266617X4X176SQ011_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ011_SQ002']; ?>" id="java266617X4X176SQ011_SQ002" name="java266617X4X176SQ011_SQ002" class="form-control">
<label for="answer266617X4X176SQ011_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ011_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ002" name="266617X4X176SQ011_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ011_SQ003']; ?>" id="java266617X4X176SQ011_SQ003" name="java266617X4X176SQ011_SQ003" class="form-control">
<label for="answer266617X4X176SQ011_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ011_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ003" name="266617X4X176SQ011_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ011_SQ004']; ?>" id="java266617X4X176SQ011_SQ004" name="java266617X4X176SQ011_SQ004" class="form-control">
<label for="answer266617X4X176SQ011_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ011_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ004" name="266617X4X176SQ011_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ004">
	<th width="20%" class="answertext">
Total
<input type="hidden" value="" id="java266617X4X176SQ004" name="java266617X4X176SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ004_SQ001']; ?>" id="java266617X4X176SQ004_SQ001" name="java266617X4X176SQ004_SQ001" class="form-control">
<label for="answer266617X4X176SQ004_SQ001" class="hide read">Students</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ004_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ001" name="266617X4X176SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ004_SQ002']; ?>" id="java266617X4X176SQ004_SQ002" name="java266617X4X176SQ004_SQ002" class="form-control">
<label for="answer266617X4X176SQ004_SQ002" class="hide read">Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ004_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ002" name="266617X4X176SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ004_SQ003']; ?>" id="java266617X4X176SQ004_SQ003" name="java266617X4X176SQ004_SQ003" class="form-control">
<label for="answer266617X4X176SQ004_SQ003" class="hide read">Non-Teaching Staff</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ004_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ003" name="266617X4X176SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo $sql_data['266617X4X176SQ004_SQ004']; ?>" id="java266617X4X176SQ004_SQ004" name="java266617X4X176SQ004_SQ004" class="form-control">
<label for="answer266617X4X176SQ004_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X4X176SQ004_SQ004']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ004" name="266617X4X176SQ004_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      <div class="question boilerplate" id="question1980">
<input type="hidden" value="1980" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 5: How good is the air you breathe in your school?</h6>
<p>
	The starting point of air quality monitoring is to first study if an area has an air pollution problem. Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1980"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X4X1980" name="266617X4X1980">          
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      <div class="question numeric mandatory" id="question184">
<input type="hidden" value="184" id="q_number" name="q_number[]" class="em_sq_validation good">
<input type="hidden" value="4" id="group_id" name="group_id[]" class="em_sq_validation good">  
<input type="hidden" value="testnp" id="school_name" name="school_name" class="em_sq_validation good"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">5</span> How many students suffer from respiratory ailments ?

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#pmLevels" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            <div class="answer clearfix">
                <p class="question answer-item text-item numeric-item  integeronly"> 
	<?php echo number_format($sql_data['266617X4X184']); ?>
</p>
          
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does the school laboratory have air quality monitoring equipment?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X4X187'] == "Y")
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
           if($sql_data['266617X4X2252_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X4X2252_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X4X2252']);
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
      
	   <?php if($sql_data['266617X4X187'] == "N")
           { ?>
	  
	  <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6(a)</span>   If No, is there an air quality monitoring station (private or government) close to your school?
      </span>
      </label>
          <p class="formanswertext">
           <?php 
           if($sql_data['266617X4X2606'] == "Y")
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
	  
	  
      
      <center>
      	<a class="btn org-btn" href="response_detail2.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail4.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
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