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
              <li><a href="response_detail6.php?id=<?php echo $_REQUEST['id']; ?>">Land</a></li>
              <li class="active"><a href="response_detail7.php?id=<?php echo $_REQUEST['id']; ?>">Water</a></li>
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
   <h1>Water <div style="float: right">Percentage Completion: <?php echo $sql_percentage['completeness']; ?>%</div></h1>
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
	Task 1: Choose your Water Audit Team</h6>
                <p> Before you start, you must get together a team. An ideal team would consist of one teacher (science or social science) to guide you during the audit. You would also require the help of the administrative staff of your school and other staff like plumber, electrician and other maintenance staff. And most importantly five to ten of your schoolmates.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1973"></span></div> -->
            
            <div class="answer clearfix">
                <ul class="subquestions-list questions-list text-list">
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ001">

<label for="answer266617X4X1973SQ001">Name of Teacher:</label>
	<span>

            <input type="text" value="<?php echo $sql_data['266617X37X1982SQ001']; ?>" id="answer266617X4X1973SQ001" name="266617X4X1973SQ001" size="20" class="text" disabled="">

	</span>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ002">

<label for="answer266617X4X1973SQ002">Name of Administrative staff:</label>
	<span>

<input type="text" value="<?php echo $sql_data['266617X37X1982SQ002']; ?>" id="answer266617X4X1973SQ002" name="266617X4X1973SQ002" size="20" class="text"  disabled="">

	</span>
	</li>
	

	<li class="question-item answer-item text-item" id="javatbd266617X4X1973SQ003">

<label for="answer266617X4X1973SQ003">Name of Students:</label>
	<span>

<input type="text" value="<?php echo $sql_data['266617X37X1982SQ003']; ?>" id="answer266617X4X1973SQ003" name="266617X4X1973SQ003" size="20" class="text" disabled="">

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
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1986"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X37X1986" name="266617X37X1986">          
            </div>
            
            
    
        </div>
    </div>
      
      
     <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">1</span> What is your school's total water consumption per day? 
            </span>
            </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1883">Answer</label>
	<?php echo number_format($sql_data['266617X37X1883']); ?>
        </p>
          
            
            
    
        </div>
    </div>
      
      
      
    <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 3: What are the sources, supply and storage of water in your school 
<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/water/#sourceOfWater" class="kplink"></a></h6>
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
                <span class="cube">2</span> Where does the water you use come from? Please provide the quantity.
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1884"></span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-5  ">
	<colgroup class="col-responses">

		<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
	</colgroup>

	<thead>
		<tr class="dontread">
			<td width="20%">&nbsp;</td>
	<th class="answertext">Surface water (streams/ lakes/ ponds, etc)</th>
	<th class="answertext">Ground water (hand pump/ borewell/ well, etc)</th>
	<th class="answertext">Stored rainwater</th>
</tr>
	</thead>
<tbody>

	<tr class="array2 subquestion-list questions-list" id="javatbd266617X37X1884SQ001">
			<th class="answertext">
				Municipality
				<input type="hidden" value="" id="java266617X37X1884SQ001" name="java266617X37X1884SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X37X1884SQ001_SQ001" class="hide read">Surface water (streams/ lakes/ ponds, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ001_SQ001" name="java266617X37X1884SQ001_SQ001" class="form-control">
                                <input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ001_SQ001']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ001_SQ001" name="266617X37X1884SQ001_SQ001" disabled="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X37X1884SQ001_SQ002" class="hide read">Ground water (hand pump/ borewell/ well, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ001_SQ002" name="java266617X37X1884SQ001_SQ002" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ001_SQ002']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ001_SQ002" name="266617X37X1884SQ001_SQ002" disabled="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X37X1884SQ001_SQ003" class="hide read">Stored rainwater</label>
				<input type="hidden" id="java266617X37X1884SQ001_SQ003" name="java266617X37X1884SQ001_SQ003" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ001_SQ003']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ001_SQ003" name="266617X37X1884SQ001_SQ003" disabled="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X37X1884SQ002">
			<th class="answertext">
				Panchayat
				<input type="hidden" value="" id="java266617X37X1884SQ002" name="java266617X37X1884SQ002" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X37X1884SQ002_SQ001" class="hide read">Surface water (streams/ lakes/ ponds, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ002_SQ001" name="java266617X37X1884SQ002_SQ001" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ002_SQ001']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ002_SQ001" name="266617X37X1884SQ002_SQ001" disabled="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X37X1884SQ002_SQ002" class="hide read">Ground water (hand pump/ borewell/ well, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ002_SQ002" name="java266617X37X1884SQ002_SQ002" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ002_SQ002']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ002_SQ002" name="266617X37X1884SQ002_SQ002" disabled="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X37X1884SQ002_SQ003" class="hide read">Stored rainwater</label>
				<input type="hidden" id="java266617X37X1884SQ002_SQ003" name="java266617X37X1884SQ002_SQ003" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ002_SQ003']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ002_SQ003" name="266617X37X1884SQ002_SQ003" disabled="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X37X1884SQ003">
			<th class="answertext">
				Private supplier
				<input type="hidden" value="" id="java266617X37X1884SQ003" name="java266617X37X1884SQ003" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X37X1884SQ003_SQ001" class="hide read">Surface water (streams/ lakes/ ponds, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ003_SQ001" name="java266617X37X1884SQ003_SQ001" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ003_SQ001']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ003_SQ001" name="266617X37X1884SQ003_SQ001" disabled="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X37X1884SQ003_SQ002" class="hide read">Ground water (hand pump/ borewell/ well, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ003_SQ002" name="java266617X37X1884SQ003_SQ002" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ003_SQ002']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ003_SQ002" name="266617X37X1884SQ003_SQ002" disabled="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X37X1884SQ003_SQ003" class="hide read">Stored rainwater</label>
				<input type="hidden" id="java266617X37X1884SQ003_SQ003" name="java266617X37X1884SQ003_SQ003" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ003_SQ003']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ003_SQ003" name="266617X37X1884SQ003_SQ003" disabled="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X37X1884SQ004">
			<th class="answertext">
				School's own supply (Example: borewell; rainwater harvesting facility, etc)
				<input type="hidden" value="" id="java266617X37X1884SQ004" name="java266617X37X1884SQ004" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X37X1884SQ004_SQ001" class="hide read">Surface water (streams/ lakes/ ponds, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ004_SQ001" name="java266617X37X1884SQ004_SQ001" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ004_SQ001']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ004_SQ001" name="266617X37X1884SQ004_SQ001" disabled="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X37X1884SQ004_SQ002" class="hide read">Ground water (hand pump/ borewell/ well, etc)</label>
				<input type="hidden" id="java266617X37X1884SQ004_SQ002" name="java266617X37X1884SQ004_SQ002" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ004_SQ002']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ004_SQ002" name="266617X37X1884SQ004_SQ002" disabled="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X37X1884SQ004_SQ003" class="hide read">Stored rainwater</label>
				<input type="hidden" id="java266617X37X1884SQ004_SQ003" name="java266617X37X1884SQ004_SQ003" class="form-control">
				<input type="text" value="<?php echo number_format($sql_data['266617X37X1884SQ004_SQ003']); ?>" size="20" maxlength="5" class="form-control" id="answer266617X37X1884SQ004_SQ003" name="266617X37X1884SQ004_SQ003" disabled="">
			</td>

		</tr>
	</tbody>
</table>
<script type="text/javascript">
&lt;!--
    $('#question1884 .question').delegate('input[type=text]:visible:enabled','blur keyup',function(event){
        checkconditions($(this).val(), $(this).attr('name'), 'text');
        return true;
    })
// --&gt;
</script>          
            </div>
            
            
    
        </div>
    </div> 
      
      
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">3</span>Do you get 24/7 supply of water?
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
           if($sql_data['266617X37X1885'] == "N")
           {
      ?>
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">3(a)</span>How many hours of water supply does your school get? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           echo $sql_data['266617X37X1886'];
           ?>   
        </p>
        </div>
    </div> 
      
      
           <?php } ?>     
      
      
       <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4</span> Do you use storage tanks to store water?
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X37X1887'] == "Y")
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
           if($sql_data['266617X37X1887'] == "Y")
           {
      ?>
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">4(a)</span> What is the capacity of the tank(s)? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           echo number_format($sql_data['266617X37X1888']);
           ?>   
        </p>
        </div>
    </div> 
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4(b)</span>&nbsp;When is the storage tank refilled?
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1889"><div id='vmsg_1889_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
<div id='vmsg_1889_value_range' class='em_value_range emtip'>Each answer must be at least 1</div>
</span></div> -->
            
            <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  minvalue minvalue- numberonly maxchars maxchars-5">
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
	<th>Morning</th>
	<th>After Noon</th>
	<th>Evening</th>
	<th>As and when required</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1889SQ001">
	<th width="20%" class="answertext">
Duration(Mins)
<input type="hidden" value="" id="java266617X37X1889SQ001" name="java266617X37X1889SQ001" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X37X1889SQ001_SQ001" name="java266617X37X1889SQ001_SQ001" class="form-control">
<label for="answer266617X37X1889SQ001_SQ001" class="hide read">Morning</label>
<input type="text" value="<?php echo number_format($sql_data['266617X37X1889SQ001_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Morning" size="5" maxlength="5" id="answer266617X37X1889SQ001_SQ001" name="266617X37X1889SQ001_SQ001" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X37X1889SQ001_SQ002" name="java266617X37X1889SQ001_SQ002" class="form-control">
<label for="answer266617X37X1889SQ001_SQ002" class="hide read">After Noon</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1889SQ001_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="After Noon" size="5" maxlength="5" id="answer266617X37X1889SQ001_SQ002" name="266617X37X1889SQ001_SQ002" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X37X1889SQ001_SQ003" name="java266617X37X1889SQ001_SQ003" class="form-control">
<label for="answer266617X37X1889SQ001_SQ003" class="hide read">Evening</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1889SQ001_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Evening" size="5" maxlength="5" id="answer266617X37X1889SQ001_SQ003" name="266617X37X1889SQ001_SQ003" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  minvalue minvalue- numberonly maxchars maxchars-5">
	<input type="hidden" id="java266617X37X1889SQ001_SQ004" name="java266617X37X1889SQ001_SQ004" class="form-control">
<label for="answer266617X37X1889SQ001_SQ004" class="hide read">As and when required</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1889SQ001_SQ004']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="As and when required" size="5" maxlength="5" id="answer266617X37X1889SQ001_SQ004" name="266617X37X1889SQ001_SQ004" class="multiflexitext text  empty form-control em_sq_validation good" disabled="">
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
	Task 4: Are the plumbing and sanitation facilities in your school adequate? <a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/water/#sanitaryFitting" class="kplink"></a></h6>
<p>
	Hygiene and sanitation facilities are vitally important for a child's health. Lack of these hampers attendance, especially of girls in senior grades.</p>
<p>
	<u><strong>To collect data:</strong></u> Count the total number of water closets, urinal pots/slots, drinking water taps and ablution taps you have in school.</p>

            </span>
            </label>

       
    </div>      
      
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5</span> How many drinking water taps do you have? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1893">Answer</label>
        <?php
           echo number_format($sql_data['266617X37X1893']);
           ?>   
        </p>
        </div>
    </div> 
      
     <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6</span> How many ablution taps (taps used for washing hands only) do you have? 
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1894">Answer</label>
        <?php
           echo number_format($sql_data['266617X37X1894']);
           ?>   
        </p>
        </div>
    </div>  
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">7</span> How many urinals (strictly used for urination only) do you have? 
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
                <span class="cube">8</span> How many water closets (used for defecation and urination) do you have?<script type="text/javascript">
   $(function () {
 
      $('#answer266617X37X1896SQ005_SQ001').bind('change keyup',function ()
      {
      //get value of selected option
      var q1Answer = $('#answer266617X37X1896SQ005_SQ001').val();
      var q2Answer = $('#answer266617X37X1896SQ005_SQ003').val();
      var q3Answer = $('#answer266617X37X1896SQ005_SQ002').val();
      
      
      var SumAns = Number(q1Answer) + Number(q2Answer) + Number(q3Answer)
      
      $('#answer266617X37X1896SQ005_SQ004').val(SumAns);
      $("#answer266617X37X1896SQ005_SQ004").prop("readonly", true);
      //alert(SumAns);
      
      
 
    }).change();

    $('#answer266617X37X1896SQ005_SQ003').bind('change keyup',function ()
      {
      //get value of selected option
      var q1Answer = $('#answer266617X37X1896SQ005_SQ001').val();
      var q2Answer = $('#answer266617X37X1896SQ005_SQ003').val();
      var q3Answer = $('#answer266617X37X1896SQ005_SQ002').val();
      
      
      var SumAns = Number(q1Answer) + Number(q2Answer) + Number(q3Answer)
      
      $('#answer266617X37X1896SQ005_SQ004').val(SumAns);
      $("#answer266617X37X1896SQ005_SQ004").prop("readonly", true);
      //alert(SumAns);
      
      
 
    }).change();

   $('#answer266617X37X1896SQ005_SQ002').bind('change keyup',function ()
      {
      //get value of selected option
      var q1Answer = $('#answer266617X37X1896SQ005_SQ001').val();
      var q2Answer = $('#answer266617X37X1896SQ005_SQ003').val();
      var q3Answer = $('#answer266617X37X1896SQ005_SQ002').val();
      
      
      var SumAns = Number(q1Answer) + Number(q2Answer) + Number(q3Answer)
      
      $('#answer266617X37X1896SQ005_SQ004').val(SumAns);
      $("#answer266617X37X1896SQ005_SQ004").prop("readonly", true);
      //alert(SumAns);
      
      
 
    }).change();


    
 
  });
</script>
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1896"><div id='vmsg_1896_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
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
	<input type="hidden" value="12" id="java266617X37X1896SQ005_SQ001" name="java266617X37X1896SQ005_SQ001" class="form-control">
<label for="answer266617X37X1896SQ005_SQ001" class="hide read">Girls</label>
<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Girls" size="5" maxlength="5" id="answer266617X37X1896SQ005_SQ001" name="266617X37X1896SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X37X1896SQ005_SQ003" name="java266617X37X1896SQ005_SQ003" class="form-control">
<label for="answer266617X37X1896SQ005_SQ003" class="hide read">Boys</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Boys" size="5" maxlength="5" id="answer266617X37X1896SQ005_SQ003" name="266617X37X1896SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="12" id="java266617X37X1896SQ005_SQ002" name="java266617X37X1896SQ005_SQ002" class="form-control">
<label for="answer266617X37X1896SQ005_SQ002" class="hide read">Common</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Common" size="5" maxlength="5" id="answer266617X37X1896SQ005_SQ002" name="266617X37X1896SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="36" id="java266617X37X1896SQ005_SQ004" name="java266617X37X1896SQ005_SQ004" class="form-control">
<label for="answer266617X37X1896SQ005_SQ004" class="hide read">Total</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1896SQ005_SQ004']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X37X1896SQ005_SQ004" name="266617X37X1896SQ005_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
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
	Task 5: Does your school harvest rainwater? <a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/water/#rainFalls" class="kplink"></a></h6>
<p>
	Rainfall (precipitation) is the primary source of fresh water on land. In this section you find out how much rainwater can your school catch? Or how much can it harvest? Rainwater harvesting, is a traditional, time-tested technology of collecting of rainwater, and using it to recharge groundwater, or storing it for other uses. Rain falls on three kinds of surfaces:</p>
<p>
	Rain water can be harvested for two purposes:</p>
<ol>
	<li>
		Stored for ready use in containers above or below the ground</li>
	<li>
		Charged into the soil for withdrawal later.</li>
</ol>
<p>
	To find out the rainwater harvesting potential of your school, you will need to explore the rooftop, and the paved and unpaved area within its premises.</p>
<p>
	For data on average annual rainfall in your area, check the internet or call the local meteorological department. Schools can approach Indian Meteorological Department to get rainfall data for their city. The Central Ground Water Board also comes up with district report (www.cgwb.gov.in). Schools can also go to www.rainwaterharvesting.org and search for "Rainfall data for major Cities of India</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1989"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X37X1989" name="266617X37X1989">          
            </div>
            
            
    
        </div>
    </div>  
      
      
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">9</span> What is the average annual rainfall received by your area (In mm)?
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1897"><div id='vmsg_1897_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
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
	<th>Local</th>
	<th>District</th>
	<th>State</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1897SQ004">
	<th width="20%" class="answertext">
Quantity
<input type="hidden" value="" id="java266617X37X1897SQ004" name="java266617X37X1897SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ001']); ?>" id="java266617X37X1897SQ004_SQ001" name="java266617X37X1897SQ004_SQ001" class="form-control">
<label for="answer266617X37X1897SQ004_SQ001" class="hide read">Local</label>
<input type="text" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Local" size="5" maxlength="5" id="answer266617X37X1897SQ004_SQ001" name="266617X37X1897SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ003']); ?>" id="java266617X37X1897SQ004_SQ003" name="java266617X37X1897SQ004_SQ003" class="form-control">
<label for="answer266617X37X1897SQ004_SQ003" class="hide read">District</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="District" size="5" maxlength="5" id="answer266617X37X1897SQ004_SQ003" name="266617X37X1897SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ002']); ?>" id="java266617X37X1897SQ004_SQ002" name="java266617X37X1897SQ004_SQ002" class="form-control">
<label for="answer266617X37X1897SQ004_SQ002" class="hide read">State</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1897SQ004_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="State" size="5" maxlength="5" id="answer266617X37X1897SQ004_SQ002" name="266617X37X1897SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
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
                <span class="cube">10</span> What is the average annual rainfall of your area (In mm)?
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1898"><div id='vmsg_1898_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
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
	<th>10-year average</th>
	<th>25-year average</th>
	<th>30-year average</th>
</tr>
	</thead>

<tbody>

	<tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X37X1898SQ004">
	<th width="20%" class="answertext">
Quantity
<input type="hidden" value="" id="java266617X37X1898SQ004" name="java266617X37X1898SQ004" class="form-control">
	</th>
	<td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ001']); ?>" id="java266617X37X1898SQ004_SQ001" name="java266617X37X1898SQ004_SQ001" class="form-control">
<label for="answer266617X37X1898SQ004_SQ001" class="hide read">10-year average</label>
<input type="text" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ001']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="10-year average" size="5" maxlength="5" id="answer266617X37X1898SQ004_SQ001" name="266617X37X1898SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ003']); ?>" id="java266617X37X1898SQ004_SQ003" name="java266617X37X1898SQ004_SQ003" class="form-control">
<label for="answer266617X37X1898SQ004_SQ003" class="hide read">25-year average</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ003']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="25-year average" size="5" maxlength="5" id="answer266617X37X1898SQ004_SQ003" name="266617X37X1898SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" disabled="">
	</td>
	<td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
	<input type="hidden" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ002']); ?>" id="java266617X37X1898SQ004_SQ002" name="java266617X37X1898SQ004_SQ002" class="form-control">
<label for="answer266617X37X1898SQ004_SQ002" class="hide read">30-year average</label>
	<input type="text" value="<?php echo number_format($sql_data['266617X37X1898SQ004_SQ002']); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="30-year average" size="5" maxlength="5" id="answer266617X37X1898SQ004_SQ002" name="266617X37X1898SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" disabled="">
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
                <span class="cube">11</span> What is the number of rainy days in your area?
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1899"><div id='vmsg_1899_default' class='em_default emtip'>Only numbers may be entered in this field.</div>
</span></div> -->
            
            <div class="answer clearfix">
                <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X37X1899">Answer</label>
	        <?php echo number_format($sql_data['266617X37X1899']); ?>
                </p>
          
            </div>
            
            
    
        </div>
    </div>  
      
     
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">12</span> Do you have RWH system in your school? 


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
           if($sql_data['266617X37X1900'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">12(a)</span> If yes, what kind of RWH system do you use?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
        if($sql_data['266617X37X1901SQ002'] == "Y")
        {
            echo "Storage Tanks";
        }
        if($sql_data['266617X37X1901SQ003'] == "Y")
        {
            echo "<br>";
            echo "Recharging of ground water";
        }
        if($sql_data['266617X37X1901SQ004'] == "Y")
        {
            echo "<br>";
            echo "Combination of recharging groundwater and storage";
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
	Task 6: Does your school reuse/recycle water? <a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/water/#recyclingSewageWater" class="kplink"></a></h6>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1990"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X37X1990" name="266617X37X1990">          
            </div>
            
            
    
        </div>
    </div>
      
      
      
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13</span> Do you recycle/reuse the generated waste water?


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X37X1904'] == "Y")
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
           if($sql_data['266617X37X1904'] == "Y")
           {
      ?>
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">13(a)</span> If you recycle/reuse waste water, do you treat the waste water? 


     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X37X1905'] == "Y")
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
           if($sql_data['266617X37X1905'] == "Y")
           {  
    ?>
      
      <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">13(b)</span>&nbsp;If your school partially treats the waste water, locate the waste water exit-point in your school and give its location(s) on the school site.
            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1906"></span></div> -->
            
            <div class="answer clearfix">
                <p class="question answer-item text-item "><label class="hide label" for="answer266617X37X1906">Answer</label>
                <?php
                echo $sql_data['266617X37X1906'];
                ?>
                </p>
          
            </div>
            
            
    
        </div>
    </div>
      
    <?php
           }
    ?>
      
      
      
      <?php     
      }
      ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
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