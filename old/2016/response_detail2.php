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
              <li class="active"><a href="response_detail2.php?id=<?php echo $_REQUEST['id']; ?>">GENERAL QUESTIONS </a></li>
              <li><a href="response_detail3.php?id=<?php echo $_REQUEST['id']; ?>">Air</a></li>
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
   <h1>General Questions <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span> </h1>
    <!--close progress-->
   
   <form>
      
       
       <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> How many levels does your school have?
      </span>
      </label>
          <p class="formanswertext">	
Lowest level of grade:<?php echo $sql_data['266617X32X1674SQ001']; ?>
          </p>
		  <p>
Highest level of grade:<?php echo $sql_data['266617X32X1674SQ002']; ?>
</p>
      </div>
       
       
       
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Is your school single gender or mixed gender? 
      </span>
      </label>
          <p class="formanswertext">
           <?php 
            if($sql_data['266617X32X27'] == "A1")
                {
                   echo "Only boys";
                } 
            elseif($sql_data['266617X32X27'] == "A3")
            {
                echo "Only girls";
            }
            elseif($sql_data['266617X32X27'] == "A2")
            {
                echo "Mixed/Co-education";
            }
            
            ?> 
          </p>
      </div>
      
       <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> Which board of education does the school follow?
      </span>
      </label>
          <p class="formanswertext">
           <?php 
            
            
            
            if($sql_data['266617X32X28'] == "1")
                {
                   echo "State Board of Education (please select name of your state from the list below if applicable)";
                   echo "<br>";
                   echo "State: "." ".$sql_state['name']." ";
                } 
            if($sql_data['266617X32X28'] ==2)
            {
                echo "Central Board of Secondary Education";
            }
            if($sql_data['266617X32X28'] ==3)
            {
                echo "Indian Certificate of Secondary Education";
            }
            if($sql_data['266617X32X28'] ==4)
            {
                echo "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
            if($sql_data['266617X32X28'] == "-oth-")
            {
                echo "Other: "." '".$sql_data['266617X32X28other']."' ";
            }
            ?> 
          </p>
      </div>
     
      
       
       
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">4</span> Total permanent population of the school </label>
        <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly">
	<colgroup class="col-responses">

	<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Male</th>
	<th>Female</th>
	<th>Total</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ001">
	<th width="20%" class="answertext">
Students
<input type="hidden" value="" id="java266617X32X33SQ001" name="java266617X32X33SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ001_SQ001']; ?>" id="java266617X32X33SQ001_SQ001" name="java266617X32X33SQ001_SQ001" class="form-control">
<label for="answer266617X32X33SQ001_SQ001" class="hide read">Male</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ001_SQ001']; ?>"  title="Male" size="5" id="answer266617X32X33SQ001_SQ001" name="266617X32X33SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ001_SQ002']; ?>" id="java266617X32X33SQ001_SQ002" name="java266617X32X33SQ001_SQ002" class="form-control">
<label for="answer266617X32X33SQ001_SQ002" class="hide read">Female</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ001_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ001_SQ002" name="266617X32X33SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ001_SQ003']; ?>" id="java266617X32X33SQ001_SQ003" name="java266617X32X33SQ001_SQ003" class="form-control">
<label for="answer266617X32X33SQ001_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ001_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ001_SQ003" name="266617X32X33SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ002">
	<th width="20%" class="answertext">
Teachers
<input type="hidden" value="" id="java266617X32X33SQ002" name="java266617X32X33SQ002" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ002_SQ001']; ?>" id="java266617X32X33SQ002_SQ001" name="java266617X32X33SQ002_SQ001" class="form-control">
<label for="answer266617X32X33SQ002_SQ001" class="hide read">Male</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ002_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ002_SQ001" name="266617X32X33SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ002_SQ002']; ?>" id="java266617X32X33SQ002_SQ002" name="java266617X32X33SQ002_SQ002" class="form-control">
<label for="answer266617X32X33SQ002_SQ002" class="hide read">Female</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ002_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ002_SQ002" name="266617X32X33SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ002_SQ003']; ?>" id="java266617X32X33SQ002_SQ003" name="java266617X32X33SQ002_SQ003" class="form-control">
<label for="answer266617X32X33SQ002_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ002_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ002_SQ003" name="266617X32X33SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ003">
	<th width="20%" class="answertext">
Non-Teaching Staff
<input type="hidden" value="" id="java266617X32X33SQ003" name="java266617X32X33SQ003" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ003_SQ001']; ?>" id="java266617X32X33SQ003_SQ001" name="java266617X32X33SQ003_SQ001" class="form-control">
<label for="answer266617X32X33SQ003_SQ001" class="hide read">Male</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ003_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ003_SQ001" name="266617X32X33SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ003_SQ002']; ?>" id="java266617X32X33SQ003_SQ002" name="java266617X32X33SQ003_SQ002" class="form-control">
<label for="answer266617X32X33SQ003_SQ002" class="hide read">Female</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ003_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ003_SQ002" name="266617X32X33SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ003_SQ003']; ?>" id="java266617X32X33SQ003_SQ003" name="java266617X32X33SQ003_SQ003" class="form-control">
<label for="answer266617X32X33SQ003_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ003_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ003_SQ003" name="266617X32X33SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>


	<tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ004">
	<th width="20%" class="answertext">
Total
<input type="hidden" value="" id="java266617X32X33SQ004" name="java266617X32X33SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ004_SQ001']; ?>" id="java266617X32X33SQ004_SQ001" name="java266617X32X33SQ004_SQ001" class="form-control">
<label for="answer266617X32X33SQ004_SQ001" class="hide read">Male</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ004_SQ001']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ004_SQ001" name="266617X32X33SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ004_SQ002']; ?>" id="java266617X32X33SQ004_SQ002" name="java266617X32X33SQ004_SQ002" class="form-control">
<label for="answer266617X32X33SQ004_SQ002" class="hide read">Female</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ004_SQ002']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ004_SQ002" name="266617X32X33SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
	<input type="hidden" value="<?php echo $sql_data['266617X32X33SQ004_SQ003']; ?>" id="java266617X32X33SQ004_SQ003" name="java266617X32X33SQ004_SQ003" class="form-control">
<label for="answer266617X32X33SQ004_SQ003" class="hide read">Total</label>
	<input type="text" value="<?php echo $sql_data['266617X32X33SQ004_SQ003']; ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ004_SQ003" name="266617X32X33SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>
	</tbody>
</table>
      </div> 
       
	   
	 
 <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">4(b)</span>How many visitors visit your school</label>
        <p class="formanswertext"><?php echo number_format($sql_data['266617X32X2297'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></p>
      </div>
	 
       <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">5</span>  What is the total number of working days of your school in a year?</label>
        <p class="formanswertext"><?php echo number_format($sql_data['266617X32X40'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></p>
      </div>
       
       <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">6</span>  Month(s) in which the GSP audit was carried out? </label>
        <p class="formanswertext">
            <?php
           //$sql_values = mysql_query("select `266617X32X43SQ001_SQ001`, `266617X32X43SQ001_SQ002`, `266617X32X43SQ001_SQ003`, `266617X32X43SQ001_SQ004`, `266617X32X43SQ001_SQ005`, `266617X32X43SQ001_SQ006`, `266617X32X43SQ001_SQ007`, `266617X32X43SQ001_SQ008`, `266617X32X43SQ001_SQ009`, `266617X32X43SQ001_SQ010`, `266617X32X43SQ001_SQ011`, `266617X32X43SQ001_SQ012` from lime_survey_266617 WHERE `token`='".$sql_token_details."'"); 
           $month = array(); 
           if($sql_data['266617X32X43SQ001_SQ001'] != "")
                   {
                      $month[] = "Jan";
                   }
            if($sql_data['266617X32X43SQ001_SQ003'] != "")
                   {
                       $month[] = "Feb";
                   }
            if($sql_data['266617X32X43SQ001_SQ002'] != "")
                   {
                       $month[] = "March";
                   }
            if($sql_data['266617X32X43SQ001_SQ004'] != "")
                   {
                       $month[] = "April";
                   }
            if($sql_data['266617X32X43SQ001_SQ005'] != "")
                   {
                       $month[] = "May";
                   }
            if($sql_data['266617X32X43SQ001_SQ006'] != "")
                   {
                       $month[] = "June";
                   }
            if($sql_data['266617X32X43SQ001_SQ007'] != "")
                   {
                       $month[] = "July";
                   }
            if($sql_data['266617X32X43SQ001_SQ008'] != "")
                   {
                      $month[] = "Aug";
                   }
            if($sql_data['266617X32X43SQ001_SQ009'] != "")
                   {
                       $month[] = "Sep";
                   }
            if($sql_data['266617X32X43SQ001_SQ010'] != "")
                   {
                       $month[] = "Oct";
                   }
            if($sql_data['266617X32X43SQ001_SQ011'] != "")
                   {
                       $month[] = "Nov";
                   }
            if($sql_data['266617X32X43SQ001_SQ012'] != "")
                   {
                       $month[] = "Dec";
                   }
            echo implode($month, ',');
            ?>
            
        </p>
      </div>
       
       <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">7</span>  Where is the school located?</label>
        <p class="formanswertext">
            <?php 
            if($sql_data['266617X32X56'] == "A1")
                { 
                echo "Urban Area"; 
                }
                else 
                {
                echo "Rural Area"; 
                } 
                    ?>
        
        </p>
      </div>
       
       
      <center>
      	 <a class="btn org-btn" href="response_detail1.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail3.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
           
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