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
              <li><a href="response_detail5.php?id=<?php echo $_REQUEST['id']; ?>">GOOD FOOD</a></li>
              <li class="active"><a href="response_detail6.php?id=<?php echo $_REQUEST['id']; ?>">Land</a></li>
              <li><a href="response_detail7.php?id=<?php echo $_REQUEST['id']; ?>">Water</a></li>
              <li><a href="response_detail8.php?id=<?php echo $_REQUEST['id']; ?>">WASTE</a></li>
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
    <div class="content-form" style="padding-top: 2px;">
    
    <!--close log-nav-->
   <h1>Land <div style="float: right">Percentage Completion: <?php echo $sql_percentage['completeness']; ?>%</div></h1>
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
	Task 1: Choose your Land Audit Team</h6>
                <p> The GSP audit helps the school community draw up a roadmap for sustainable use of its land.<br>

                    <strong>The unit of measurement to be used in the Land section is Square Metre (m2).</strong>  </p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1973"></span></div> -->
            
            <div class="answer clearfix">
                <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">

<label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<span>

            <input type="text" value="<?php echo $sql_data['266617X7X1991SQ001']; ?>" id="answer266617X4X1973SQ001" name="266617X4X1973SQ001" size="20" class="text" disabled="">

	</span>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">

<label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<span>

<input type="text" value="<?php echo $sql_data['266617X7X1991SQ002']; ?>" id="answer266617X4X1973SQ002" name="266617X4X1973SQ002" size="20" class="text"  disabled="">

	</span>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">

<label for="answer266617X4X1973SQ003">Name of Students:</label>
	<span>

<input type="text" value="<?php echo $sql_data['266617X7X1991SQ003']; ?>" id="answer266617X4X1973SQ003" name="266617X4X1973SQ003" size="20" class="text" disabled="">

	</span>
	</li>
</ul>
          
            </div>
            
            
    
        </div>
    </div>
</div>
      
   
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: Measure the four critical areas of your school campus</h6>
<p>
	Measurement Unit to be used: Square Meters (m2)</p>
<p>
	The total constructed area can be sourced from the building construction plan of the school which will be available in the school office. Or else, measure the constructed spaces and use the formula for calculating areas of various shapes such as a square or rectangle to derive the data and add them all.</p>
<p>
	To find out the land/ site area of your school, you need to measure:</p>
<ul>
	<li>
		Ground coverage area</li>
	<li>
		Open Area (on-ground)</li>
	<li>
		Service Area&nbsp;(on-ground)</li>
<li>
		Service Parking </li>
</ul>

<p>
	<strong>Ground Coverage Area</strong></p>
<p>
	will include all permanent structure buildings, such as administration block, auditorium, school building, etc. Does not include floors.&nbsp;</p>
<p>
	<strong>Open Areas</strong></p>
<p>
	<strong>Green cover or green, landscaped area on-ground &ndash;</strong> this includes areas covered by grass, trees, lawn or horticulture, flower beds, grasscrete paver tiles, etc.</p>
<p>
	<strong>Green cover on terrace/ balconies</strong> includes terrace garden, but not potted plants.</p>
<p>
	<strong>Play area that is paved/ concrete&nbsp;</strong>includes all outdoor playfields such as basketball court; skating rink; assembly ground; swimming pool, etc.</p>
<p>
	<strong>Play area covered by grass:</strong> tennis grass court, cricket/ football grounds etc.</p>
<p>
	<strong>Service area</strong> is any area&nbsp;on&nbsp;ground that is not a permanent structure, but dedicated&nbsp;to&nbsp;services&nbsp;such as cooling&nbsp;towers&nbsp;for air&nbsp;conditioning, generators,&nbsp;portable cabins&nbsp;for&nbsp;security&nbsp;guards, etc (picture).</p>
<p>
	<strong>Others</strong> will include paved paths, and other open area that your school has, but not covered in the above list.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1992"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X7X1992" name="266617X7X1992">          
            </div>
            
            
    
        </div>
    </div>
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span> Complete the table:

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/land/#openAreaIncludes" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1810"><div id='vmsg_1810_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="60%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Your school's area</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ001">
	<th width="20%" class="answertext">
Ground coverage area
<input type="hidden" value="" id="java266617X7X1810SQ001" name="java266617X7X1810SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ001_SQ002" name="java266617X7X1810SQ001_SQ002" class="form-control">
<label for="answer266617X7X1810SQ001_SQ002" class="hide read">Your school’s area</label>
<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ001_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ001_SQ002" name="266617X7X1810SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ002">
	<th width="20%" class="answertext">
Green landscaped area on-ground
<input type="hidden" value="" id="java266617X7X1810SQ002" name="java266617X7X1810SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ002_SQ002" name="java266617X7X1810SQ002_SQ002" class="form-control">
<label for="answer266617X7X1810SQ002_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ002_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ002_SQ002" name="266617X7X1810SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ003">
	<th width="20%" class="answertext">
Green cover on terrace/ balconies
<input type="hidden" value="" id="java266617X7X1810SQ003" name="java266617X7X1810SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="121" id="java266617X7X1810SQ003_SQ002" name="java266617X7X1810SQ003_SQ002" class="form-control">
<label for="answer266617X7X1810SQ003_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ003_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ003_SQ002" name="266617X7X1810SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ004">
	<th width="20%" class="answertext">
Surface parking area
<input type="hidden" value="" id="java266617X7X1810SQ004" name="java266617X7X1810SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ004_SQ002" name="java266617X7X1810SQ004_SQ002" class="form-control">
<label for="answer266617X7X1810SQ004_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ004_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ004_SQ002" name="266617X7X1810SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ005">
	<th width="20%" class="answertext">
Play area that is paved/ concrete
<input type="hidden" value="" id="java266617X7X1810SQ005" name="java266617X7X1810SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ005_SQ002" name="java266617X7X1810SQ005_SQ002" class="form-control">
<label for="answer266617X7X1810SQ005_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ005_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ005_SQ002" name="266617X7X1810SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ006">
	<th width="20%" class="answertext">
Play area that has grass
<input type="hidden" value="" id="java266617X7X1810SQ006" name="java266617X7X1810SQ006" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ006_SQ002" name="java266617X7X1810SQ006_SQ002" class="form-control">
<label for="answer266617X7X1810SQ006_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ006_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ006_SQ002" name="266617X7X1810SQ006_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ007">
	<th width="20%" class="answertext">
Service Area
<input type="hidden" value="" id="java266617X7X1810SQ007" name="java266617X7X1810SQ007" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ007_SQ002" name="java266617X7X1810SQ007_SQ002" class="form-control">
<label for="answer266617X7X1810SQ007_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ007_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ007_SQ002" name="266617X7X1810SQ007_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ008">
	<th width="20%" class="answertext">
Others
<input type="hidden" value="" id="java266617X7X1810SQ008" name="java266617X7X1810SQ008" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X7X1810SQ008_SQ002" name="java266617X7X1810SQ008_SQ002" class="form-control">
<label for="answer266617X7X1810SQ008_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ008_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ008_SQ002" name="266617X7X1810SQ008_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X1810SQ009">
	<th width="20%" class="answertext">
Total site area in m2
<input type="hidden" value="" id="java266617X7X1810SQ009" name="java266617X7X1810SQ009" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="205" id="java266617X7X1810SQ009_SQ002" name="java266617X7X1810SQ009_SQ002" class="form-control">
<label for="answer266617X7X1810SQ009_SQ002" class="hide read">Your school’s area</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X1810SQ009_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Your school’s area" size="5" maxlength="5" id="answer266617X7X1810SQ009_SQ002" name="266617X7X1810SQ009_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div> 
      
      
   <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2&nbsp;</span>Complete the table: 
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2279"><div id='vmsg_2279_default' class='em_default emtip'>Only numbers may be entered in these fields.</div>
</span></div> -->
            
            <div class="answer clearfix">
                <ul class="subquestions-list questions-list text-list numeric-list">
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ001">

<label class="numeric-label" for="answer266617X7X2279SQ001">Ground coverage area</label>
<span class="input">
	
    <input type="text" maxlength="10" onkeyup="fixnum_checkconditions(this.value, this.name, this.type);" value="<?php echo number_format($sql_data['266617X7X2279SQ001']); ?>" title="Only numbers may be entered in this field." id="answer266617X7X2279SQ001" name="266617X7X2279SQ001" size="10" class="text  em_sq_validation good" disabled="">
	
</span>
	</li>
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ002">

<label class="numeric-label" for="answer266617X7X2279SQ002">Number of floors</label>
<span class="input">
	
	<input type="text" maxlength="10" onkeyup="fixnum_checkconditions(this.value, this.name, this.type);" value="<?php echo number_format($sql_data['266617X7X2279SQ002']); ?>" title="Only numbers may be entered in this field." id="answer266617X7X2279SQ002" name="266617X7X2279SQ002" size="10" class="text  em_sq_validation good" disabled="">
	
</span>
	</li>
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ003">

<label class="numeric-label" for="answer266617X7X2279SQ003">Rooftop</label>
<span class="input">
	
	<input type="text" maxlength="10" onkeyup="fixnum_checkconditions(this.value, this.name, this.type);" value="<?php echo number_format($sql_data['266617X7X2279SQ003']); ?>" title="Only numbers may be entered in this field." id="answer266617X7X2279SQ003" name="266617X7X2279SQ003" size="10" class="text  em_sq_validation good" disabled="">
	
</span>
	</li>
	

	<li class="question-item answer-item text-item numeric-item numberonly maxchars maxchars-10" id="javatbd266617X7X2279SQ004">

<label class="numeric-label" for="answer266617X7X2279SQ004">Total built-up area</label>
<span class="input">
	
    <input type="text" maxlength="10" onkeyup="fixnum_checkconditions(this.value, this.name, this.type);" value="<?php echo number_format($sql_data['266617X7X2279SQ004']); ?>" title="Only numbers may be entered in this field." id="answer266617X7X2279SQ004" name="266617X7X2279SQ004" size="10" class="text  em_sq_validation good" disabled="">
	
</span>
	</li>
</ul>
          
            </div>
            
            
    
        </div>
    </div>   
      
      
      
      
      
      
      
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 3: Explore the number of species of plants and animals in your school</h6>
<p>
	This task will help you to understand the number and variety of plants and animals that your school campus supports. Identify and count the various species of plants and animals in your school.</p>
<p>
	<strong>To collect data:</strong></p>
<p>
	Make two teams of students. One for plant species and the other for animal species. Get the school gardener and the biology teacher to accompany them. Count plant species and animal species that are visible to the naked eye.</p>
<p>
	Native (definition): a species that occurs naturally within a region, either evolving there or arriving and becoming established without human assistance</p>
<p>
	Exotic (definition): An exotic plant or animal, which is invasive, is a species that meets the following conditions:</p>
<ol>
	<li>
		Originate outside the local area.</li>
	<li>
		Have the potential to spread long distances on its own;.</li>
	<li>
		Once established, have the potential to out-compete native species in the wild.</li>
</ol>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1996"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X7X1996" name="266617X7X1996">          
            </div>
            
            
    
        </div>
    </div>
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span> How many species of plants and animals exist in your school?
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_189"><div id='vmsg_189_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
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
	<th>Native</th>
	<th>Exotic</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X189SQ001">
	<th width="20%" class="answertext">
Plants
<input type="hidden" value="" id="java266617X7X189SQ001" name="java266617X7X189SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ002']); ?>" id="java266617X7X189SQ001_SQ002" name="java266617X7X189SQ001_SQ002" class="form-control">
<label for="answer266617X7X189SQ001_SQ002" class="hide read">Native</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Native" size="5" maxlength="5" id="answer266617X7X189SQ001_SQ002" name="266617X7X189SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ003']); ?>" id="java266617X7X189SQ001_SQ003" name="java266617X7X189SQ001_SQ003" class="form-control">
<label for="answer266617X7X189SQ001_SQ003" class="hide read">Exotic</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Exotic" size="5" maxlength="5" id="answer266617X7X189SQ001_SQ003" name="266617X7X189SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ004']); ?>" id="java266617X7X189SQ001_SQ004" name="java266617X7X189SQ001_SQ004" class="form-control">
<label for="answer266617X7X189SQ001_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ001_SQ004']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X7X189SQ001_SQ004" name="266617X7X189SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X7X189SQ003">
	<th width="20%" class="answertext">
Animals
<input type="hidden" value="" id="java266617X7X189SQ003" name="java266617X7X189SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ002']); ?>" id="java266617X7X189SQ003_SQ002" name="java266617X7X189SQ003_SQ002" class="form-control">
<label for="answer266617X7X189SQ003_SQ002" class="hide read">Native</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Native" size="5" maxlength="5" id="answer266617X7X189SQ003_SQ002" name="266617X7X189SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ003']); ?>" id="java266617X7X189SQ003_SQ003" name="java266617X7X189SQ003_SQ003" class="form-control">
<label for="answer266617X7X189SQ003_SQ003" class="hide read">Exotic</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Exotic" size="5" maxlength="5" id="answer266617X7X189SQ003_SQ003" name="266617X7X189SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ004']); ?>" id="java266617X7X189SQ003_SQ004" name="java266617X7X189SQ003_SQ004" class="form-control">
<label for="answer266617X7X189SQ003_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X7X189SQ003_SQ004']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X7X189SQ003_SQ004" name="266617X7X189SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>
	</tbody>
</table>
          
            </div>
            
            
    
        </div>
    </div> 
      
      
  <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 4: Find out if your school uses pesticides</h6>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1997"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X7X1997" name="266617X7X1997">          
            </div>
            
            
    
        </div>
    </div>    
      
      
      
    <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">4</span> Do you use chemical based pesticides in your school green cover?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X7X196'] == "Y")
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
           if($sql_data['266617X7X2258_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X7X2258_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X7X2258']);
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
      	<a class="btn org-btn" href="response_detail5.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail7.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
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