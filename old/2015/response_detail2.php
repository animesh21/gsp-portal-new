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
              <li class="active"><a href="response_detail2.php?id=<?php echo $_REQUEST['id']; ?>">GENERAL QUESTIONS </a></li>
              <li><a href="response_detail3.php?id=<?php echo $_REQUEST['id']; ?>">Air</a></li>
              <li><a href="response_detail4.php?id=<?php echo $_REQUEST['id']; ?>">Energy</a></li>
              <li><a href="response_detail5.php?id=<?php echo $_REQUEST['id']; ?>">GOOD FOOD</a></li>
              <li><a href="response_detail6.php?id=<?php echo $_REQUEST['id']; ?>">Land</a></li>
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
   <h1>General Questions <div style="float: right">Percentage Completion: <?php echo $sql_percentage['completeness']; ?>%</div> </h1>
    <!--close progress-->
   
   <form>
      
       
       <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> How many levels does your school have?
      </span>
      </label>
          <p class="formanswertext">
           <?php 
           $sql_values = mysql_query("select `266617X32X1674SQ001_SQ001`, `266617X32X1674SQ001_SQ002`, `266617X32X1674SQ001_SQ004`, `266617X32X1674SQ001_SQ005`, `266617X32X1674SQ001_SQ006`, `266617X32X1674SQ001_SQ007`, `266617X32X1674SQ001_SQ008`, `266617X32X1674SQ001_SQ009`, `266617X32X1674SQ001_SQ010`, `266617X32X1674SQ001_SQ011`, `266617X32X1674SQ001_SQ012`, `266617X32X1674SQ001_SQ013`, `266617X32X1674SQ001_SQ014` from lime_survey_266617 WHERE `token`='".$sql_token_details."'");
           $a = array();
           if($sql_data['266617X32X1674SQ001_SQ001'] != "")
            {
                $a[] = "Pre-primary ";
            } 
            if($sql_data['266617X32X1674SQ001_SQ002'] != "")
            {
                $a[] = "1st ";
            }
            if($sql_data['266617X32X1674SQ001_SQ004'] != "")
            {
                $a[] = "12th ";
            }if($sql_data['266617X32X1674SQ001_SQ005'] != "")
            {
                $a[] = "11th ";
            }if($sql_data['266617X32X1674SQ001_SQ006'] != "")
            {
                $a[] = "10th ";
            }if($sql_data['266617X32X1674SQ001_SQ007'] != "")
            {
                $a[] = "9th ";
            }if($sql_data['266617X32X1674SQ001_SQ008'] != "")
            {
                $a[] = "8th ";
            }if($sql_data['266617X32X1674SQ001_SQ009'] != "")
            {
                $a[] = "7th ";
            }if($sql_data['266617X32X1674SQ001_SQ010'] != "")
            {
                $a[] = "6th ";
            }if($sql_data['266617X32X1674SQ001_SQ011'] != "")
            {
                $a[] = "5th ";
            }if($sql_data['266617X32X1674SQ001_SQ012'] != "")
            {
                $a[] = "4th ";
            }if($sql_data['266617X32X1674SQ001_SQ013'] != "")
            {
                $a[] = "3rd ";
            }if($sql_data['266617X32X1674SQ001_SQ014'] != "")
            {
                $a[] =  "2nd ";
            }
            echo implode($a, ',');
            ?>
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
            
            
            
            if($sql_data['266617X32X28SQ001'] != "")
                {
                   echo "State Board of Education (please select name of your state from the list below if applicable)";
                   echo "<br>";
                   
                   if($sql_data['266617X32X274'] == 1)
                   {
                       $state = "Andaman and Nicobar Islands";
                   }elseif($sql_data['266617X32X274'] == 2)
                   {
                       $state = "Andhra Pradesh";
                   }elseif($sql_data['266617X32X274'] == 3)
                   {
                       $state = "Arunachal Pradesh";
                   }elseif($sql_data['266617X32X274'] == 4)
                   {
                       $state = "Assam";
                   }elseif($sql_data['266617X32X274'] == 5)
                   {
                       $state = "Bihar";
                   }elseif($sql_data['266617X32X274'] == 6)
                   {
                       $state = "Chandigarh";
                   }elseif($sql_data['266617X32X274'] == 7)
                   {
                       $state = "Chhattisgarh";
                   }elseif($sql_data['266617X32X274'] == 8)
                   {
                       $state = "Dadra and Nagar Haveli";
                   }elseif($sql_data['266617X32X274'] == 9)
                   {
                       $state = "Daman and Diu";
                   }elseif($sql_data['266617X32X274'] == 10)
                   {
                       $state = "Delhi";
                   }elseif($sql_data['266617X32X274'] == 11)
                   {
                       $state = "Goa";
                   }elseif($sql_data['266617X32X274'] == 12)
                   {
                       $state = "Gujarat";
                   }elseif($sql_data['266617X32X274'] == 13)
                   {
                       $state = "Haryana";
                   }elseif($sql_data['266617X32X274'] == 14)
                   {
                       $state = "Himachal Pradesh";
                   }elseif($sql_data['266617X32X274'] == 15)
                   {
                       $state = "Jammu and Kashmir";
                   }elseif($sql_data['266617X32X274'] == 16)
                   {
                       $state = "Jharkhand";
                   }elseif($sql_data['266617X32X274'] == 17)
                   {
                       $state = "Karnataka";
                   }elseif($sql_data['266617X32X274'] == 18)
                   {
                       $state = "Kerala";
                   }elseif($sql_data['266617X32X274'] == 19)
                   {
                       $state = "Lakshadweep";
                   }elseif($sql_data['266617X32X274'] == 20)
                   {
                       $state = "Madhya Pradesh";
                   }elseif($sql_data['266617X32X274'] == 21)
                   {
                       $state = "Maharashtra";
                   }elseif($sql_data['266617X32X274'] == 22)
                   {
                       $state = "Manipur";
                   }elseif($sql_data['266617X32X274'] == 23)
                   {
                       $state = "Meghalaya";
                   }elseif($sql_data['266617X32X274'] == 24)
                   {
                       $state = "Mizoram";
                   }elseif($sql_data['266617X32X274'] == 25)
                   {
                       $state = "Nagaland";
                   }elseif($sql_data['266617X32X274'] == 26)
                   {
                       $state = "Odisha (Orissa)";
                   }elseif($sql_data['266617X32X274'] == 27)
                   {
                       $state = "Puducherry";
                   }elseif($sql_data['266617X32X274'] == 28)
                   {
                       $state = "Punjab";
                   }elseif($sql_data['266617X32X274'] == 29)
                   {
                       $state = "Rajasthan";
                   }elseif($sql_data['266617X32X274'] == 30)
                   {
                       $state = "Sikkim";
                   }elseif($sql_data['266617X32X274'] == 31)
                   {
                       $state = "Tamil Nadu";
                   }elseif($sql_data['266617X32X274'] == 32)
                   {
                       $state = "Telangana";
                   }elseif($sql_data['266617X32X274'] == 33)
                   {
                       $state = "Tripura";
                   }elseif($sql_data['266617X32X274'] == 34)
                   {
                       $state = "Uttar Pradesh";
                   }elseif($sql_data['266617X32X274'] == 35)
                   {
                       $state = "Uttarakhand";
                   }elseif($sql_data['266617X32X274'] == 36)
                   {
                       $state = "West Bengal";
                   }
                  
                   
                   echo "State: "." ".$state." ";
                } 
            if($sql_data['266617X32X28SQ002'] != "")
            {
                echo "Central Board of Secondary Education";
            }
            if($sql_data['266617X32X28SQ003'] != "")
            {
                echo "Indian Certificate of Secondary Education";
            }
            if($sql_data['266617X32X28SQ004'] != "")
            {
                echo "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
            if($sql_data['266617X32X28other'] != "")
            {
                echo "Other: "." '".$sql_data['266617X32X28other']."' ";
            }
            ?>
          </p>
      </div>
     
      
       
       
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">4</span> Total population of the school </label>
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
        <label for="exampleInputEmail1"> <span class="cube">5</span>  What is the total number of working days of your school in a year?</label>
        <p class="formanswertext"><?php echo number_format($sql_data['266617X32X40'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></p>
      </div>
       
       <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">6</span>  Month(s) in which the GSP audit was carried out? </label>
        <p class="formanswertext">
            <?php
           $sql_values = mysql_query("select `266617X32X43SQ001_SQ001`, `266617X32X43SQ001_SQ002`, `266617X32X43SQ001_SQ003`, `266617X32X43SQ001_SQ004`, `266617X32X43SQ001_SQ005`, `266617X32X43SQ001_SQ006`, `266617X32X43SQ001_SQ007`, `266617X32X43SQ001_SQ008`, `266617X32X43SQ001_SQ009`, `266617X32X43SQ001_SQ010`, `266617X32X43SQ001_SQ011`, `266617X32X43SQ001_SQ012` from lime_survey_266617 WHERE `token`='".$sql_token_details."'"); 
           $state = array(); 
           if($sql_data['266617X32X43SQ001_SQ001'] != "")
                   {
                      $state[] = "Jan";
                   }
            if($sql_data['266617X32X43SQ001_SQ003'] != "")
                   {
                       $state[] = "Feb";
                   }
            if($sql_data['266617X32X43SQ001_SQ002'] != "")
                   {
                       $state[] = "March";
                   }
            if($sql_data['266617X32X43SQ001_SQ004'] != "")
                   {
                       $state[] = "April";
                   }
            if($sql_data['266617X32X43SQ001_SQ005'] != "")
                   {
                       $state[] = "May";
                   }
            if($sql_data['266617X32X43SQ001_SQ006'] != "")
                   {
                       $state[] = "June";
                   }
            if($sql_data['266617X32X43SQ001_SQ007'] != "")
                   {
                       $state[] = "July";
                   }
            if($sql_data['266617X32X43SQ001_SQ008'] != "")
                   {
                       $state[] = "Aug";
                   }
            if($sql_data['266617X32X43SQ001_SQ009'] != "")
                   {
                       $state[] = "Sep";
                   }
            if($sql_data['266617X32X43SQ001_SQ010'] != "")
                   {
                       $state[] = "Oct";
                   }
            if($sql_data['266617X32X43SQ001_SQ011'] != "")
                   {
                       $state[] = "Nov";
                   }
            if($sql_data['266617X32X43SQ001_SQ012'] != "")
                   {
                       $state[] = "Dec";
                   }
            echo implode($state, ',');
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