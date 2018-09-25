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
              <li class="active"><a href="response_detail7.php?id=<?php echo $_REQUEST['id']; ?>">Water</a></li>
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
   <h1>Water <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span></h1>
    <!--close progress-->
    
    <p>
        To understand water, it is important to know the source of water in your school premise. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive. The questions below will help students to understand where their water is coming from &ndash; at a cost.<br><br>
        <strong>The unit of measurement to be used in the Water section is Litre (L).  </strong>
    </p>
  <form>
      <div class="question multiple-short-txt" id="question1973">
<input type="hidden" value="1973" id="q_number" name="q_number[]">
<input type="hidden" value="4" id="group_id" name="group_id[]">  
<input type="hidden" value="testnp" id="school_name" name="school_name"> 
        <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 1: Water Audit Team</h6>
                <p> Before you start, you must get together a team. An ideal team would consist of one teacher (science or social science) to guide you during the audit. You would also require the help of the administrative staff of your school and other staff like plumber, electrician and other maintenance staff. And most importantly five to ten of your schoolmates.</p>

            </span>
            </label>

        <div class="answer clearfix">
              
            <div class="answer clearfix">
			
			<h5>Teachers</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X37X2406SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2406SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X37X2406SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2406SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X37X2406SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2406SQ003_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Administrative staff</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X37X2407SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2407SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X37X2407SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2407SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X37X2407SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2407SQ003_SQ002']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X37X2407SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2407SQ004_SQ002']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X37X2407SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2407SQ005_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Students</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X37X2408SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ001_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ001_SQ003']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X37X2408SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ002_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ002_SQ003']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X37X2408SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ003_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ003_SQ003']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X37X2408SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ004_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ004_SQ003']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X37X2408SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ005_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ005_SQ003']; ?></td></tr>
			<tr><td>6.</td><td><?php echo $sql_data['266617X37X2408SQ006_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ006_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ006_SQ003']; ?></td></tr>
			<tr><td>7.</td><td><?php echo $sql_data['266617X37X2408SQ007_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ007_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ007_SQ003']; ?></td></tr>
			<tr><td>8.</td><td><?php echo $sql_data['266617X37X2408SQ008_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ008_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ008_SQ003']; ?></td></tr>
			<tr><td>9.</td><td><?php echo $sql_data['266617X37X2408SQ009_SQ001']; ?></td> <td><?php echo $sql_data['266617X37X2408SQ009_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ009_SQ003']; ?></td></tr>
			<tr><td>10.</td><td><?php echo $sql_data['266617X37X2408SQ010_SQ001'];?></td> <td><?php echo $sql_data['266617X37X2408SQ010_SQ002']; ?></td><td><?php echo $sql_data['266617X37X2408SQ010_SQ003']; ?></td></tr>
			
			</table>
				
            </div>
            
            
    
        </div>
    </div>
</div>
      
   
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: How much water does your school use?</h6>
<p>
	To find total consumption, monitor water consumption over a period of three working days, spread over one month and take the average.</p>
<p>
	For example: you can monitor the water consumption on Oct 5, October 15 and October 25. Add all three total consumptions and then divide it with number of days of observation (that is three days). You will get an average per day water consumption.</p>
<p>
	<strong>To collect data:</strong></p>
<p>
	<strong>The bill method:</strong> If the school's water meter is monitored regularly&mdash;water bills by the government/municipality state the actual amount used&mdash;students can simply compile bills to assess total consumption.</p>
<p>
	<strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then monitor the overhead tanks. Note the difference in levels of water in your overhead tank between the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check the water level when school is over by noting the difference in levels of water in your overhead tank between beginning and end of a day. Estimate consumption.</p>
<p>
	<strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know its measurement. Then switch on the underground-water pump. Let the water run out of the hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate the flow of water in litres per minute. Find out (from the gardener or other administrative staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor is run by how much water comes out from the hose pipe in a minute. The administrative staff and the plumber would be helpful in gauging the above. Conduct an audit for two or three days and then take an average to find the total consumption.</p>

            </span>
            </label>

        <div class="answer clearfix">

            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X37X1986" name="266617X37X1986">          
            </div>

        </div>
    </div>
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span> Calculate your school’s water consumption, per activity:
            </span>
            </label>
          <!--
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1883">Answer</label>
	<?php echo number_format($sql_data['266617X37X1883']); ?>
        </p>
        </div>
		-->
		
		
		<div class="answer clearfix">
            
<table class="question subquestions-list questions-list  numeric-item text-list  numberonly" summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. ">
	<colgroup class="col-responses">

	<col class="answertext" width="20%">
<col class="odd" width="60%">
	</colgroup>

	<thead>
<tr class="dontread">
	<td>&nbsp;</td>
	<th>Total Quantity (litres per day)</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 questions-list text-list">
	<th class="answertext" width="20%">
Drinking

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	<input type="text" value="<?php echo $sql_data['266617X37X1883SQ001_SQ001']; ?>" name="266617X37X1883SQ001_SQ001" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ002" class="array1 questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Toilet flushing

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">

	<input type="text"  name="266617X37X1883SQ002_SQ001" value="<?php echo $sql_data['266617X37X1883SQ002_SQ001']; ?>" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ003" class="array2 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Personal cleaning

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">

	<input type="text"  name="266617X37X1883SQ003_SQ001" value="<?php echo $sql_data['266617X37X1883SQ003_SQ001']; ?>" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ004" class="array1 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Washing clothes

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	
	<input type="text"  name="266617X37X1883SQ004_SQ001" value="<?php echo $sql_data['266617X37X1883SQ004_SQ001']; ?>" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ005" class="array2 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Cooking

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
	
		<input type="text"  name="266617X37X1883SQ005_SQ001" value="<?php echo $sql_data['266617X37X1883SQ005_SQ001']; ?>" class="form-control" readonly>

	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ006" class="array1 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Cleaning Utensils

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
		<input type="text"  name="266617X37X1883SQ006_SQ001" value="<?php echo $sql_data['266617X37X1883SQ006_SQ001']; ?>" class="form-control" readonly>

	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ007" class="array2 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Washing Vegetables

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
<input type="text"  name="266617X37X1883SQ007_SQ001" value="<?php echo $sql_data['266617X37X1883SQ007_SQ001']; ?>" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ008" class="array1 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Mopping floors

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
<input type="text"  name="266617X37X1883SQ008_SQ001" value="<?php echo $sql_data['266617X37X1883SQ008_SQ001']; ?>" class="form-control" readonly>

	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ009" class="array2 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Gardening 

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
<input type="text"  name="266617X37X1883SQ009_SQ001" value="<?php echo $sql_data['266617X37X1883SQ009_SQ001']; ?>" class="form-control" readonly>
	</td>
</tr>


	<tr id="javatbd266617X37X1883SQ010" class="array1 subquestions-list questions-list  numeric-item text-list">
	<th class="answertext" width="20%">
Total

	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
<input type="text"  name="266617X37X1883SQ010_SQ001" value="<?php echo $sql_data['266617X37X1883SQ010_SQ001']; ?>" class="form-control" readonly>

	</td>
</tr>
	</tbody>
</table>
          
            </div>
		
		
    </div>
      
      
      
    <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 3: What are the sources, supply and storage of water in your school 
<a target="_blank" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#sourceOfWater" class="kplink"></a></h6>
<p>
	To understand water, it is important to know the source of water in your school premise. As you know, most cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water from further and further away. This is expensive.</p>
<p>
	The questions below will help students to understand where their water is coming from &ndash; at a cost.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1987"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X37X1987" name="266617X37X1987">          
            </div>
            
            
    
        </div>
    </div>  
      
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">2</span> Where does the water your school uses, come from?
            </span>
            </label>

        <div class="answer clearfix">
		<p class="formanswertext">
            <?php
			$water_come_from  = array(); 
           if($sql_data['266617X37X1884SQ001'] != "")
                   {
                      $water_come_from[] = "Ground water";
                   }
            if($sql_data['266617X37X1884SQ002'] != "")
                   {
                       $water_come_from[] = "Surface water";
                   }
            if($sql_data['266617X37X1884SQ003'] != "")
                   {
                       $water_come_from[] = "Rain water";
                   }
            if($sql_data['266617X37X1884SQ004'] != "")
                   {
                       $water_come_from[] = "Recycled waste water";
                   }
            
            echo implode($water_come_from, ', ');
			?>
			</p>
        </div>
    </div> 
      
      
	  
	  <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3</span> Who supplies the water in your school?
            </span>
            </label>

        <div class="answer clearfix">
		<p class="formanswertext">
            <?php
			$Who_supplies_water  = array(); 
           if($sql_data['266617X37X2303SQ001'] != "")
                   {
                      $Who_supplies_water[] = "Municipality";
                   }
            if($sql_data['266617X37X2303SQ002'] != "")
                   {
                       $Who_supplies_water[] = "Panchayat";
                   }
            if($sql_data['266617X37X2303SQ003'] != "")
                   {
                       $Who_supplies_water[] = "Public Health Engineering Department (PHED)";
                   }
            if($sql_data['266617X37X2303SQ004'] != "")
                   {
                       $Who_supplies_water[] = "Private supplier";
                   }
			if($sql_data['266617X37X2303SQ005'] != "")
                   {
                       $Who_supplies_water[] = "School's own supply (bore well, rainwater harvesting facility, etc)";
                   }
            
            echo implode($Who_supplies_water, ', ');
			?>
			</p>
        </div>
    </div> 
      
	  
	  
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4</span>Does your school get daily water supply?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X37X1885'] == "Y")
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
           if($sql_data['266617X37X1885'] == "Y")
           {
      ?>
      
    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text"> 
     <span class="cube">4(a)</span>If supply of water is daily, please tick the correct option
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
         <?php 

                $water_supply_time=array('A1'=>"≤1 hours",'A2'=>"2-6 hours",'A3'=>"7-12 hours",'A4'=>"13-18 hours",'A5'=>"19-24 hours");			
					
				$time=$sql_data['266617X37X1886'];
				echo $water_supply_time[$time];
            ?>  
        </p>
        </div>
    </div> 
     
           <?php } ?>   
	 
      <?php
           if($sql_data['266617X37X1885'] == "N")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4(b)</span> If supply of water is not daily, please tick the correct option:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php 

                $water_supply_not_daily=array('A1'=>"≤1 day",'A2'=>"2 days in a week",'A3'=>"3 days in a week",'A4'=>"Every alternate day in a week");			
					
				$time=$sql_data['266617X37X1887'];
				echo $water_supply_not_daily[$time];
            ?>    
        </p>
        </div>
    </div> 
           <?php } ?>     
      
      
    
<div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 4: What are the water conservation practices followed in your school?

            </span>
            </label>   
    </div>      
      
	  
	  
	  
	  
	  <div class="form-group"> 
            <label for="exampleInputEmail1">
            <div class="question-text">
            <span class="cube">5</span> What are the water conservation practices your school follows<a class="tt" data-tooltip="Please tick “Yes�? if your school follows the below mentioned practices. Do upload images/ jpegs, where relevant."><span class="badge">?</span></a>
            </div>
            </label>
        <div class="answer clearfix">
            
         
            
            <div class="answer clearfix">
            
<table class="question subquestions-list questions-list " summary="An array with sub-question on each line. The answers are contained in the table header. ">
	<colgroup class="col-responses">
	<col class="col-answers" width="70%">
<col class="odd" width="15%">
<col class="even" width="15%">
	</colgroup>
	<thead><tr class="dontread">
	<td>&nbsp;</td>
	<th>Yes/No</th>
	
</tr></thead>
	
<tbody>

	<tr id="javatbd266617X37X2320SQ001" class="array2 answers-list radio-list">
	<th class="answertext">
Does your school have any water and sanitation policy?

	</th>
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ001']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ001-A1">Yes</label>
	<?php }else{ ?>
<label class="read" for="answer266617X37X2320SQ001-A2">No</label>
	<?php } ?>
	</td>
</tr>


	<tr id="javatbd266617X37X2320SQ002" class="array1 answers-list radio-list">
	<th class="answertext">
If your school has an eco-club, do they have water component?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ002']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ002-A1">Yes</label>
	<?php }else{ ?>		
<label class="read" for="answer266617X37X2320SQ002-A2">No</label>
	<?php } ?>
	</td>
</tr>


	<tr id="javatbd266617X37X2320SQ003" class="array2 answers-list radio-list">
	<th class="answertext">
Do all tanks in the school have float valves installed to stop overflow?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ003']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr id="javatbd266617X37X2320SQ003" class="array2 answers-list radio-list">
	<th class="answertext">
Do the drinking water points have spill proof taps to check overflow?<
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ004']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>

<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Does your school use appliances with a quick-wash setting?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ005']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Are dual flush systems installed in the toilets?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ006']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Does your school encourage bottled water for drinking water?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ007']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Does your school grow local plant species which require limited amount of water to grow?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ008']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Has your school initiated any water conservation steps in the school or outside, in the past one year?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ009']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>
	
	<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Does your school use a drip or irrigation system?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ010']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
</td>
</tr>


<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Any other step taken for water conservation? (if Yes, please specify)
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2320SQ011']=="A1"){ ?>
<label class="read" for="answer266617X37X2320SQ003-A1">Yes</label>
<?php }else{ ?>	
<label class="read" for="answer266617X37X2320SQ003-A2">No</label>
	<?php } ?>
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
           if($sql_data['266617X37X2257_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X37X2257_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X37X2257']);
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
            <div class="question-text">
            <h6>
	Task 5: Does your school harvest rainwater? </h6>
<p>
	Rainfall (precipitation) is the primary source of freshwater on land. In this section, you will find out how much rainwater your school can catch, and how much your school can harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater and using it to recharge groundwater or storing it for other uses.</p>
<p>
	To know the types of catchment </p>

            </div>
            </label>
        <div class="answer clearfix">
            <div class="answer clearfix">
            <input type="hidden" name="266617X37X1989" id="answer266617X37X1989" value="">          
            </div>
            
        </div>
    </div>
	  
	  
	
 <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6</span>  Do you have Rainwater harvesting (RWH) system in your school?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X37X1900'] == "Y")
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
	  if($sql_data['266617X37X1900'] == "N")
           { ?>
	  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(a)</span>  Calculate your school’s rainwater harvesting potential (in litres).
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
         echo $sql_data['266617X37X2476'];
           ?>   
        </p>
        </div>
    </div>
		   <?php } ?>
      
      <?php
           if($sql_data['266617X37X1900'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(a)</span>  Does your school harvest different catchments?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
         if($sql_data['266617X37X2353'] == "Y")
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
      
		   
	  <?php  // if 6(a) is yes then
 	   if($sql_data['266617X37X2353'] == "Y")
           {
	  ?>
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(a)(1)</span>   Which is the catchment area being harvested by your school?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
         <?php 

                $school_harvest=array('A1'=>"Rooftop",'A2'=>"Paved",'A3'=>"Unpaved",'A4'=>"Rooftop + Paved",'A5'=>"Paved + Unpaved",'A5'=>"Paved + Unpaved",'A6'=>"Rooftop + Unpaved",'A7'=>"Rooftop + Paved + Unpaved");			
					
				$index_arr=$sql_data['266617X37X2354'];
				echo $school_harvest[$index_arr];
            ?> 
        </p>
        </div>
    </div>
	  
		   <?php } ?>
		   
		   
		   <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)</span>  How does your school harvest rainwater?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
         <?php 
                $harvest_rainwater=array('A1'=>"By storing",'A2'=>"By recharging groundwater",'A3'=>"Combination of both");	
				$index_arr=$sql_data['266617X37X2355'];
				echo $harvest_rainwater[$index_arr];
            ?> 
        </p>
        </div>
    </div>
	
	<?php //if 6(b) By recharging groundwater
	if($sql_data['266617X37X2355']=="A2")            
	{
	?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(1)</span>  Does your school have groundwater recharge structure?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
			
           if($sql_data['266617X37X2372'] == "Y")
                   {
					   echo "Yes";
				   }else{echo "No";}
			?>
        </p>
        </div>
    </div>
      
       <?php  if($sql_data['266617X37X2372'] == "Y")
         {?>
          <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">i</span>Please share the total number of groundwater recharge structures
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
            <?php
           if($sql_data['266617X37X2642'] != "")
                   {
		 echo $sql_data['266617X37X2642'];
                   }
			?>
        </p>
        </div>
    </div>
	  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">ii</span> Please tick the type of groundwater recharge structure used in your school:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
            <?php 
     $groundwater_rs=array(1=>"Percolation pit/tank",2=>"Recharge through abandoned dug well",3=>"Recharge through abandoned tube well/bore well",4=>"Recharge pits",5=>"Recharge trenches",6=>"Recharge through ponds/water bodies",7=>"Soak pit");	
				$index_arr=$sql_data['266617X37X2643'];
				echo $groundwater_rs[$index_arr];
            ?> 
        </p>
        </div>
    </div>
	
         <?php }?>
      
	
	<?php 
        
        
        
                                   } ?>   
		   
		   
		   
		   
		   <?php //if 6(b) is By storing & Combination of both
	if($sql_data['266617X37X2355']=="A1" || $sql_data['266617X37X2355']=="A3")
	{
	?>
	 
	 <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(1)</span>  If your school only stores rainwater, please select the use of stored rainwater:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
			$stores_rainwater  = array(); 
           if($sql_data['266617X37X23561'] != "")
                   {
                      $stores_rainwater[] = "Drinking";
                   }
            if($sql_data['266617X37X23562'] != "")
                   {
                       $stores_rainwater[] = "Gardening";
                   }
            if($sql_data['266617X37X23563'] != "")
                   {
                       $stores_rainwater[] = "Mopping";
                   }
            if($sql_data['266617X37X23564'] != "")
                   {
                       $stores_rainwater[] = "Toilets";
                   }
			if($sql_data['266617X37X23565'] != "")
                   {
                       $stores_rainwater[] = "Washing vehicles";
                   }
			if($sql_data['266617X37X23566'] != "")
                   {
                       $stores_rainwater[] = "Kitchen (Cooking/Washing vegetables and utensils)";
                   }
			if($sql_data['266617X37X23567'] != "")
                   {
                       $stores_rainwater[] = "Shower, Brushing teeth, Bathing, Hand washing";
                   }
		    if($sql_data['266617X37X23568'] != "")
                   {
                       $stores_rainwater[] = "Swimming Pool";
                   }
            
            echo implode($stores_rainwater, ', ');
			?>
        </p>
        </div>
    </div>
	
<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(2)</span> Does your school have rainwater storage tank?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
			
           if($sql_data['266617X37X2366'] == "Y")
                   {
					   echo "Yes";
				   }else{echo "No";}
			?>
        </p>
        </div>
    </div>
	
	<?php 
  //if 6(b)(2) is Yes Then
  if($sql_data['266617X37X2366'] == "Y"){
	?>
	
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(2)(a)</span> Total capacity of storage tank (litres)
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
           echo $sql_data['266617X37X2368'];
			?>
        </p>
        </div>
    </div>
	
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(2)(b)</span>  Total number of storage tanks?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
           echo $sql_data['266617X37X2369'];
			?>
        </p>
        </div>
    </div>
	
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(2)(c)</span>  Location of tanks:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php 
                $Locationoftanks=array(1=>"Underground",2=>"Over ground",3=>"Semi underground",4=>"Underground + Over-ground",5=>"Over- ground + Semi underground",6=>"Underground + Over-ground + Semi underground");	
				$index_arr=$sql_data['266617X37X2370'];
				echo $Locationoftanks[$index_arr];
            ?> 
        </p>
        </div>
    </div>
	
		<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(2)(d)</span> Material options for tanks:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php 
                $Materialtanks=array(1=>"PVC",2=>"RCC",3=>"Brick",4=>"Combination of PVC + RCC + Brick");	
				$index_arr=$sql_data['266617X37X2371'];
				echo $Materialtanks[$index_arr];
            ?> 
        </p>
        </div>
    </div>
        
        
<!--        <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(3)</span>Does your school have groundwater recharge structure?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
            <?php
           if($sql_data['266617X37X2641'] == "Y")
                   {
		 echo "Yes";
				   }else{echo "No";}
			?>
        </p>
        </div>
    </div>
        -->
        
        
<!--        <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(4)</span> If your school practices rainwater harvesting, then what is the ratio between storage and recharge
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
            <?php 
     $p_rainwater=array(1=>"Storage = Recharge",2=>"Storage > Recharge",3=>"Recharge > Storage",4=>"Only Recharge",5=>"Only Storage");	
				$index_arr=$sql_data['266617X37X2375'];
				echo $p_rainwater[$index_arr];
            ?> 
        </p>
        </div>
    </div>-->
       
                 <?php  } ?>
	<?php } ?>
		   

<!--<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(b)(1)</span>  If your school only stores rainwater, please select the use of stored rainwater:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
          <?php
			
           if($sql_data['266617X37X2372'] == "Y")
                   {
					   echo "Yes";
				   }else{echo "No";}
			?>
        </p>
        </div>
    </div>		  -->
		
		
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(c)</span> How much area in your school is harvested?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php 
                $harvested=array(1=>"10 to 20 per cent",2=>"21 to 30 per cent",3=>"31 to 40 per cent",4=>"41 to 50 per cent",5=>"51 to 60 per cent",6=>"61 to 70 per cent",7=>"71 to 80 per cent",8=>"81 to 90 per cent",9=>"91 to 100 per cent");	
				$index_arr=$sql_data['266617X37X2376'];
				echo $harvested[$index_arr];
            ?> 
        </p>
        </div>
    </div>

	
		<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(d)</span>  Please select (from the list given below) the rainwater harvesting structures present in your school?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
 <?php
			$rainwater_harvesting  = array(); 
           if($sql_data['266617X37X23771'] != "")
                   {
                      $rainwater_harvesting[] = "Conduits";
                   }
            if($sql_data['266617X37X23772'] != "")
                   {
                       $rainwater_harvesting[] = "Gutters";
                   }
            if($sql_data['266617X37X23773'] != "")
                   {
                       $rainwater_harvesting[] = "Filter unit";
                   }
            if($sql_data['266617X37X23774'] != "")
                   {
                       $rainwater_harvesting[] = "First flush";
                   }
			if($sql_data['266617X37X23775'] != "")
                   {
                       $rainwater_harvesting[] = "Storage tank";
                   }
			if($sql_data['266617X37X23776'] != "")
                   {
                       $rainwater_harvesting[] = "Collection sump";
                   }
			if($sql_data['266617X37X23777'] != "")
                   {
                       $rainwater_harvesting[] = "Pump unit";
                   }
		    if($sql_data['266617X37X23778'] != "")
                   {
                       $rainwater_harvesting[] = "Recharge structure";
                   }
            
            echo implode($rainwater_harvesting, ', ');
			?>       
	   
        </p>
        </div>
    </div>


<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(d)(1)</span> Where is your filter unit?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X23882">Answer</label>
  <?php 
                $Rating=array(1=>"Before storage tank",2=>"Before recharge system",3=>"Before both storage tank and recharge system",4=>"Before both storage tank and recharge system");	
				$index_arr=$sql_data['266617X37X2388'];
				echo $Rating[$index_arr];
            ?>     
	   
        </p>
        </div>
    </div>

<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(d)(2)</span> Types of filter used in your school:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
 <?php
            $filter_used   = array(); 
           if($sql_data['266617X37X23891'] != "")
                   {
                      $filter_used[] = "Sand gravel filter";
                   }
            if($sql_data['266617X37X23892'] != "")
                   {
                       $filter_used[] = "Charcoal filter";
                   }
            if($sql_data['266617X37X23893'] != "")
                   {
                       $filter_used[] = "Readymade on line filter";
                   }
            if($sql_data['266617X37X23894'] != "")
                   {
                       $filter_used[] = "Chemical used";
                   }
	           
            echo implode($filter_used, ', ');
			?>      	   
        </p>
        </div>
    </div>


	
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(e)</span> Rate your catchment on cleanliness:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
  <?php 
                $Rating=array(1=>"Good",2=>"Average",3=>"Poor");	
				$index_arr=$sql_data['266617X37X2396'];
				echo $Rating[$index_arr];
            ?>     
	   
        </p>
        </div>
    </div>
	
	
	 <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X37X2397_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X37X2397_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X37X2397']);
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
     <span class="cube">6(f)</span> Does your school clean your catchment and system (structure?)?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
  <?php  if($sql_data['266617X37X2398']=="Y")
            {
	        echo "Yes";
           }else{
			   echo "No";
		   }
            ?>     
	   
        </p>
        </div>
    </div>
	<?php //if 6(f) is Yes then open this question.
if($sql_data['266617X37X2398']=="Y"){
	?>
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(f)(1)</span> Please specify when does your school clean the catchment and RWH system?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
    <?php 
                $schoolclean=array(1=>"Pre-monsoon",2=>"Post-monsoon",3=>"Do not follow any such pattern");	
				$index_arr=$sql_data['266617X37X2399'];
				echo $schoolclean[$index_arr];
            ?>     
	   
        </p>
        </div>
    </div>
<?php } ?>

<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(g)</span>  Does your school monitor the rainwater harvesting structure for its efficiency?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
    <?php 
          if($sql_data['266617X37X2400']=="Y")
		  {
			  echo "Yes";
		  }else{
			  echo "No";
		  }
    ?> 
        </p>
        </div>
    </div>
	
	<?php 
	 if($sql_data['266617X37X2400']=="Y")
		  {
	?>
	<div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(g)(1)</span> Please specify when does your school monitor the groundwater level?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php 
                $schoolclean=array(1=>"Pre-monsoon",2=>"Post-monsoon",3=>"Do not follow any such pattern");	
				$index_arr=$sql_data['266617X37X2401'];
				echo $schoolclean[$index_arr];
            ?>
        </p>
        </div>
    </div>
		  <?php } ?>
		  
		  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(h)</span> What is the trend of groundwater level in your school across the year?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php 
                $groundwater=array(1=>"If there was a decrease, please specify",2=>"If there was an increase, please specify",3=>"No change");	
				$index_arr=$sql_data['266617X37X2402'];
				echo $groundwater[$index_arr];
            ?>
        </p>
        </div>
    </div>
	<?php 
	if($sql_data['266617X37X2402']==1)
	{
	?>
			  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(h)(1)</span> Please specify how much was the decrease
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php 
                $decrease=array(1=>"Less than a metre annually",2=>"1-5 metre annually",3=>"More than 5 metres annually");	
				$index_arr=$sql_data['266617X37X2403'];
				echo $decrease[$index_arr];
            ?>
        </p>
        </div>
    </div>  
	<?php } ?>

<?php 
	if($sql_data['266617X37X2402']==2)
	{
	?>
			  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(h)(1)</span> Please specify how much was the increase?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php 
                $decrease=array(1=>"Less than a metre annually",2=>"1-5 metre annually",3=>"More than 5 metres annually");	
				$index_arr=$sql_data['266617X37X2404'];
				echo $decrease[$index_arr];
            ?>
        </p>
        </div>
    </div>  
	<?php } ?>
	
	 <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(i)</span>  If your school's RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php if($sql_data['266617X37X2405']=="Y"){echo "Yes";} else{echo "No";}
		   ?>
        </p>
        </div>
    </div>  
	
	<?php } // if close Yes Condition ?>
		   <!-- End  Question No.6-->
	  
	  <div class="form-group"> 
            <label for="exampleInputEmail1">
            <div class="question-text">
            <h6>
	Task 6: Are the plumbing and sanitation facilities in your school adequate?</h6>
<p>
	Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these hampers attendance, especially of girls in senior grades.</p>

            </div>
            </label> 
    </div>
	  
	  
	  
	  <div class="form-group"> 
            <label for="exampleInputEmail1">
            <div class="question-text">
            <span class="cube">7</span> Please share details about sanitation and hygiene practices in your school: <a class="tt" data-tooltip="Toilets for women include wash basin(s) and water closet(s); Toilets for men include wash basin(s) and water closet(s), and may or may not include urinals."> <span class="badge">?</span> </a>
            </div>
            </label>
        <div class="answer clearfix">
            
            
            <!-- <div class='text-success'><span class="questionhelp" id="vmsg_2337"></span></div> -->
            
            <div class="answer clearfix">
            
<table class="question subquestions-list questions-list " summary="An array with sub-question on each line. The answers are contained in the table header. ">
	<colgroup class="col-responses">
	<col class="col-answers" width="70%">
<col class="odd" width="15%">
<col class="even" width="15%">
	</colgroup>
	<thead><tr class="dontread">
	<td>&nbsp;</td>
	<th>Yes/No</th>
	
</tr></thead>
	
<tbody>

	<tr class="array2 answers-list radio-list">
	<th class="answertext">
Does the school have separate toilets for males and females?
	</th>
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ001']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ001-A1">Yes</label>
	<?php }else{ ?>			
<label class="read" for="answer266617X37X2337SQ001-A2">No</label>
	<?php } ?>
</td>
</tr>


	<tr class="array1 answers-list radio-list">
	<th class="answertext">
Are there sufficient toilets for women in your school?
	</th>
			<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ002']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>

</td>

</tr>


	<tr id="javatbd266617X37X2337SQ003" class="array2 answers-list radio-list">
	<th class="answertext">
Are there sufficient toilets for men in your school?>
	</th>
	
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ003']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
</td>

</tr>


	<tr  class="array1 answers-list radio-list">
	<th class="answertext">
Are the toilets accessible and safe to use for children?
	</th>
		<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ004']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
</td>
</tr>


	<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Are the toilets accessible and safe to use for differently abled children?<input type="hidden" name="java266617X37X2337SQ005" id="java266617X37X2337SQ005" value="A1">
	</th>
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ005']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
</td>
</tr>


	<tr id="javatbd266617X37X2337SQ006" class="array1 answers-list radio-list">
	<th class="answertext">
Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)? <input type="hidden" name="java266617X37X2337SQ006" id="java266617X37X2337SQ006" value="A1">
	</th>
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ006']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
</td>
</tr>


	<tr  class="array2 answers-list radio-list">
	<th class="answertext">
Are the toilets situated in the right location in terms of privacy and safety?
	</th>
	
	<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ007']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
</td>
</tr>


	<tr id="javatbd266617X37X2337SQ008" class="array1 answers-list radio-list">
	<th class="answertext">
Is there sufficient light during day time?
	</th>
	
		<td class="answer_cell_00A1 answer-item radio-item">
	<?php if($sql_data['266617X37X2337SQ008']=="A1"){ ?>
<label class="read" for="answer266617X37X2337SQ002-A1">Yes</label>
	<?php }else{ ?>	
<label class="read" for="answer266617X37X2337SQ002-A2">No</label>
	<?php } ?>
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
     <span class="cube">8</span> How many drinking water taps do you have?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php echo number_format($sql_data['266617X37X1893']);
		   ?>
        </p>
        </div>
    </div>  
	  
	  
	  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">9</span>  How many hand pumps do you have?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php echo number_format($sql_data['266617X37X2346']);
		   ?>
        </p>
        </div>
    </div>  
	  
	   <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">10</span>  How many ablution taps (taps used for washing hands only) do you have?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
           <?php echo number_format($sql_data['266617X37X1894']);
		   ?>
        </p>
        </div>
    </div>  
	
	
	
	 <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">11</span> How many water closets (used for defecation and urination) do you have?
            </span>
            </label>
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
	<th>Girls</th>
	<th>Boys</th>
	<th>Common</th>
	<th>Total</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1896SQ005">
	<th width="20%" class="answertext">
Number of toilets
<input type="hidden" value="" id="java266617X37X1896SQ005" name="java266617X37X1896SQ005" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	
<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ001']); ?>" name="266617X37X1896SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ003']); ?>" name="266617X37X1896SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ002']); ?>" name="266617X37X1896SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ004']); ?>" name="266617X37X1896SQ005_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
	</td>
</tr>
	</tbody>
</table>
        </div>
    </div> 
	
	
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">12</span> How many urinals (strictly used for urination only) do you have? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
        <?php
           echo number_format($sql_data['266617X37X1895']);
           ?>   
        </p>
        </div>
    </div> 
	
	
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13</span>How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
        <?php
           echo number_format($sql_data['266617X37X2347']);
           ?>   
        </p>
        </div>
    </div> 
	
	
	  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">14</span>Is there a water storage system in place to supply water in the toilets?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
        <?php
           if($sql_data['266617X37X2349']=="Y"){
			   echo "Yes";
		   }else{
			  echo "No"; 
		   }
           ?>   
        </p>
        </div>
    </div> 
	
	
	  <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">15</span> Is the water supply sufficient?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
        <?php
           if($sql_data['266617X37X2350']=="Y"){
			   echo "Yes";
		   }else{
			  echo "No"; 
		   }
           ?>   
        </p>
        </div>
    </div> 
	  
	  
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">16</span>Are the toilets cleaned?
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
        <?php
           if($sql_data['266617X37X2351']=="Y"){
			   echo "Yes";
		   }else{
			  echo "No"; 
		   }
           ?>   
        </p>
        </div>
    </div> 
	  
	  <?php if($sql_data['266617X37X2351']=="Y"){ ?>
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">16(a)</span>If yes, please specify
     </span>
     </label>
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1895">Answer</label>
         <?php 
                $toiletscleaned=array('A1'=>"Once a day",'A2'=>"Twice a day",'A3'=>"More than twice a day");	
				$index_arr=$sql_data['266617X37X2352'];
				echo $toiletscleaned[$index_arr];
            ?>
        </p>
        </div>
    </div> 
	  <?php } ?>
	  
	  
<div class="form-group"> 
            <label for="exampleInputEmail1">
            <div class="question-text">
            <h6>
	Task 7: Does your school reuse/recycle waste water?</h6>
<p>Water recycling is the process of treating waste or used water, in order to upgrade its quality, so that it can be used again. When water, once used for a particular purpose, is put to use again, it is then being reused.</p>
</div>
</label>
</div>
	  
  
	  
	  
	  
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">17</span>Does your school treat wastewater?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1893">Answer</label>
        <?php
           if($sql_data['266617X37X2332']=="Y"){
			   echo "Yes";
		   }else{
			  echo "No"; 
		   }
           ?>     
        </p>
        </div>
    </div> 
      
	  
	  
	       <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">18</span> Does your school reuse the treated wastewater?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1893">Answer</label>
        <?php
           if($sql_data['266617X37X2654']=="Y"){
			   echo "Yes";
		   }else{
			  echo "No"; 
		   }
           ?>     
        </p>
        </div>
    </div> 
	  
	  <?php  if($sql_data['266617X37X2654']=="Y"){ ?>
	    <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">18(a)</span> How does your school reuse wastewater?
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1893">Answer</label>
        
<?php
			$reuse_wastewater  = array(); 
           if($sql_data['266617X37X26551'] != "")
                   {
                      $reuse_wastewater[] = "Gardening";
                   }
            if($sql_data['266617X37X26552'] != "")
                   {
                       $reuse_wastewater[] = "Flushing";
                   }
            if($sql_data['266617X37X26553'] != "")
                   {
                       $reuse_wastewater[] = "Recharge Ground Water";
                   }
            echo implode($reuse_wastewater, ', ');
			?> 
		
        </p>
        </div>
    </div> 
	  <?php }	?>
	  
	  
        <?php  if($sql_data['266617X37X2654']=="N"){ ?>
      
	   <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">18(a)</span> Please specify the fate of wastewater:
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1893">Answer</label>
         <?php 
                $fateofwastewater=array(1=>"Wastewater flows directly to the drains",2=>"Used for groundwater recharge",3=>"Used for gardening and horticulture");	
				$index_arr=$sql_data['266617X37X2660'];
				echo $fateofwastewater[$index_arr];
            ?>  
        </p>
        </div>
    </div>
	
	
	 <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X37X2661_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X37X2661_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X37X2661']);
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
  
      <center>
      	<a class="btn org-btn" href="response_detail6.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail8.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
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