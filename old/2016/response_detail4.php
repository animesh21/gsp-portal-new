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
              <li class="active"><a href="response_detail4.php?id=<?php echo $_REQUEST['id']; ?>">Energy</a></li>
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
   <h1>Energy <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span></h1>
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
	Task 1: Energy Audit Team</h6>
<p>The school administrative staff must be members of your team as you would require electricity bills, fuel consumption bills, etc. Other support staff such as generator attendant and electricians are also important contacts. It would be a good idea to rope in a Physics or Science teacher as well and, most importantly, a team of five to ten of your schoolmates.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1973"></span></div> -->
            
            <div class="answer clearfix">
			
				<h5>Teachers</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X8X2491SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2491SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X8X2491SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2491SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X8X2491SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2491SQ003_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Administrative staff</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X8X2492SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2492SQ001_SQ002']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X8X2492SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2492SQ002_SQ002']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X8X2492SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2492SQ003_SQ002']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X8X2492SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2492SQ004_SQ002']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X8X2492SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2492SQ005_SQ002']; ?></td></tr>
			
			</table>
			
			<h5>Students</h5>
			<table border="1">
			<tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>
			<tr><td>1.</td><td><?php echo $sql_data['266617X8X2493SQ001_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ001_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ001_SQ003']; ?></td></tr>
			<tr><td>2.</td><td><?php echo $sql_data['266617X8X2493SQ002_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ002_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ002_SQ003']; ?></td></tr>
			<tr><td>3.</td><td><?php echo $sql_data['266617X8X2493SQ003_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ003_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ003_SQ003']; ?></td></tr>
			<tr><td>4.</td><td><?php echo $sql_data['266617X8X2493SQ004_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ004_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ004_SQ003']; ?></td></tr>
			<tr><td>5.</td><td><?php echo $sql_data['266617X8X2493SQ005_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ005_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ005_SQ003']; ?></td></tr>
			<tr><td>6.</td><td><?php echo $sql_data['266617X8X2493SQ006_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ006_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ006_SQ003']; ?></td></tr>
			<tr><td>7.</td><td><?php echo $sql_data['266617X8X2493SQ007_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ007_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ007_SQ003']; ?></td></tr>
			<tr><td>8.</td><td><?php echo $sql_data['266617X8X2493SQ008_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ008_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ008_SQ003']; ?></td></tr>
			<tr><td>9.</td><td><?php echo $sql_data['266617X8X2493SQ009_SQ001']; ?></td> <td><?php echo $sql_data['266617X8X2493SQ009_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ009_SQ003']; ?></td></tr>
			<tr><td>10.</td><td><?php echo $sql_data['266617X8X2493SQ010_SQ001'];?></td> <td><?php echo  $sql_data['266617X8X2493SQ010_SQ002']; ?></td><td><?php echo $sql_data['266617X8X2493SQ010_SQ003']; ?></td></tr>
			
			
			</table>
			
			
            </div>
            
            
    
        </div>
    </div>
</div>
      
      
   <div class="form-group"> 
            <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: How much energy does your school consume?</h6>
<p>
	In this section you will be asked questions related to energy consumption of your school. This will involve finding out the different sources of energy used and jotting down the monthly consumption. .</p>
<p>
	<strong>Collecting Data</strong></p>
<p>Please collect all the bills that your school receives for its energy consumption, e.g. electricity and gas bills. If the frequency of any energy consumption bill is fortnightly, bi-monthly, quarterly or half yearly, try to convert them into monthly averages. Take an average of the bills for a minimum of four months &ndash; e.g January to April.
	&nbsp;</p>
<p>
	<strong><em>Electricity</em>:&nbsp;</strong>The audit team will have to get in touch with the administrative staff in the school office to procure the electricity bills.</p>
<p>
	<strong><em>Diesel</em>: </strong>Ask the generator attendant to show the log book of fuels and find out how many litres are being used. If diesel is being used for transport, the transport in-charge will have the register/log book with details about the amount consumed and cost paid. Remember the energy output of a generator would be taken only in terms of input, i.e, fuel used.</p>
<p>
	<strong><em>LPG</em>: </strong>Ask the mess/canteen staff, how many cylinders are used in one month on an average. Remember each gas cylinder generally weighs 14.2 kg.</p>

            </span>
            </label>

        <div class="answer clearfix">
            
            
            
            <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2003"></span></div> -->
            
            <div class="answer clearfix">
                <input type="hidden" value="" id="answer266617X8X2003" name="266617X8X2003">          
            </div>
            
            
    
        </div>
    </div>
      
      
      <div class="form-group"> 
      <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> Does your school have access to an electricity bill?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X8X237'] == "Y")
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
     if($sql_data['266617X8X2412_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X8X2412_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X8X2412']);
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
      <span class="cube">2</span> Does your school have its own vehicles?
      </span>
      </label>
          <p class="formanswertext">
           <?php
           if($sql_data['266617X8X2274'] == "Y")
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
            <span class="cube">3</span> Provide the details of total energy consumed by the school: <a data-tooltip="Type of use/purpose (mention the type of use in the above table): 1. Lighting 2. Housekeeping 3. Cooking 4. Transport 5. Teaching/learning aid. If your school does not use a particular source of energy." class="tt"><span class="badge">?</span></a> 
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
                
<table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list  maxchars maxchars-10  ">
<colgroup class="col-responses">

<col width="20%" class="answertext">
<col width="20%" class="odd">
<col width="20%" class="even">
<col width="20%" class="odd">
</colgroup>

<thead>
<tr class="dontread">
	<td width="20%">&nbsp;</td>
	<th class="answertext">Quantity consumed/monthly average</th>
	<th class="answertext">Energy consumed in Megajoules (MJ)</th>
	<th class="answertext">Type of use</th>
</tr>
</thead>
<tbody>
 
	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ001">
			<th class="answertext">
				Electricity from the board (kwh)
				<input type="hidden" value="" id="java266617X8X2180SQ001" name="java266617X8X2180SQ001" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ001_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ001_SQ001" name="java266617X8X2180SQ001_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ001_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ001_SQ001" name="266617X8X2180SQ001_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ001_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ001_SQ002" name="java266617X8X2180SQ001_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ001_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ001_SQ002" name="266617X8X2180SQ001_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ001_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ001_SQ003" name="java266617X8X2180SQ001_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ001_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ001_SQ003" name="266617X8X2180SQ001_SQ003" readonly="">
			</td>

		</tr>
		
		
		<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ001">
			<th class="answertext">
				Electricity from generator (diesel) (litres)	
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ014_SQ001']; ?>" size="20" maxlength="10" class="form-control"  name="266617X8X2180SQ014_SQ001" readonly="">
	</td>
	<td class="answer_cell_00SQ002 answer-item text-item">	
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ014_SQ002']; ?>" size="20" maxlength="10" class="form-control"  readonly="">
	</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ014_SQ003']; ?>" size="20" maxlength="10" class="form-control" readonly="">
    </td>
    </tr>
		
		
		


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ002">
			<th class="answertext">
				Petrol (litres)
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ002_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ002_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ002_SQ001" name="266617X8X2180SQ002_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ002_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ002_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ002_SQ002" name="266617X8X2180SQ002_SQ002" readonly="">
	</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ002_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ002_SQ003" name="java266617X8X2180SQ002_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ002_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ002_SQ003" name="266617X8X2180SQ002_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ003">
	<th class="answertext">
	Diesel (litres)
	</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ003_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ003_SQ001" name="266617X8X2180SQ003_SQ001" readonly="">
	</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ003_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ003_SQ002" name="266617X8X2180SQ003_SQ002" readonly="">
	</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ003_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ003_SQ003" name="266617X8X2180SQ003_SQ003" readonly="">
	</td>
    </tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ004">
			<th class="answertext">
				CNG (kilogrammes)
				<input type="hidden" value="" id="java266617X8X2180SQ004" name="java266617X8X2180SQ004" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ004_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ004_SQ001" name="java266617X8X2180SQ004_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ004_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ004_SQ001" name="266617X8X2180SQ004_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ004_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ004_SQ002" name="java266617X8X2180SQ004_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ004_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ004_SQ002" name="266617X8X2180SQ004_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ004_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ004_SQ003" name="java266617X8X2180SQ004_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ004_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ004_SQ003" name="266617X8X2180SQ004_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ005">
			<th class="answertext">
				Kerosene (litres)
				<input type="hidden" value="" id="java266617X8X2180SQ005" name="java266617X8X2180SQ005" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ005_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ005_SQ001" name="java266617X8X2180SQ005_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ005_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ005_SQ001" name="266617X8X2180SQ005_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ005_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ005_SQ002" name="java266617X8X2180SQ005_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ005_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ005_SQ002" name="266617X8X2180SQ005_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ005_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ005_SQ003" name="java266617X8X2180SQ005_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ005_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ005_SQ003" name="266617X8X2180SQ005_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ006">
			<th class="answertext">
				Coal (kilogrammes)
				<input type="hidden" value="" id="java266617X8X2180SQ006" name="java266617X8X2180SQ006" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ006_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ006_SQ001" name="java266617X8X2180SQ006_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ006_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ006_SQ001" name="266617X8X2180SQ006_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ006_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ006_SQ002" name="java266617X8X2180SQ006_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ006_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ006_SQ002" name="266617X8X2180SQ006_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ006_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ006_SQ003" name="java266617X8X2180SQ006_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ006_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ006_SQ003" name="266617X8X2180SQ006_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ007">
			<th class="answertext">
				Wood (kilogrammes)
				<input type="hidden" value="" id="java266617X8X2180SQ007" name="java266617X8X2180SQ007" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ007_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ007_SQ001" name="java266617X8X2180SQ007_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ007_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ007_SQ001" name="266617X8X2180SQ007_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ007_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ007_SQ002" name="java266617X8X2180SQ007_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ007_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ007_SQ002" name="266617X8X2180SQ007_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ007_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ007_SQ003" name="java266617X8X2180SQ007_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ007_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ007_SQ003" name="266617X8X2180SQ007_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ008">
			<th class="answertext">
				Animal waste (kilogrammes)
				<input type="hidden" value="" id="java266617X8X2180SQ008" name="java266617X8X2180SQ008" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ008_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ008_SQ001" name="java266617X8X2180SQ008_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ008_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ008_SQ001" name="266617X8X2180SQ008_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ008_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ008_SQ002" name="java266617X8X2180SQ008_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ008_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ008_SQ002" name="266617X8X2180SQ008_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ008_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ008_SQ003" name="java266617X8X2180SQ008_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ008_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ008_SQ003" name="266617X8X2180SQ008_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ009">
			<th class="answertext">
				Solar (kwh)
				<input type="hidden" value="" id="java266617X8X2180SQ009" name="java266617X8X2180SQ009" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ009_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ009_SQ001" name="java266617X8X2180SQ009_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ009_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ009_SQ001" name="266617X8X2180SQ009_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ009_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ009_SQ002" name="java266617X8X2180SQ009_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ009_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ009_SQ002" name="266617X8X2180SQ009_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ009_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ009_SQ003" name="java266617X8X2180SQ009_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ009_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ009_SQ003" name="266617X8X2180SQ009_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ010">
			<th class="answertext">
				Wind (kwh)
				<input type="hidden" value="" id="java266617X8X2180SQ010" name="java266617X8X2180SQ010" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ010_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ010_SQ001" name="java266617X8X2180SQ010_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ010_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ010_SQ001" name="266617X8X2180SQ010_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ010_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ010_SQ002" name="java266617X8X2180SQ010_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ010_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ010_SQ002" name="266617X8X2180SQ010_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ010_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ010_SQ003" name="java266617X8X2180SQ010_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ010_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ010_SQ003" name="266617X8X2180SQ010_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ011">
			<th class="answertext">
			LPG (kilogrammes)
				<input type="hidden" value="" id="java266617X8X2180SQ011" name="java266617X8X2180SQ011" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ011_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ011_SQ001" name="java266617X8X2180SQ011_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ011_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ011_SQ001" name="266617X8X2180SQ011_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ011_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ011_SQ002" name="java266617X8X2180SQ011_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ011_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ011_SQ002" name="266617X8X2180SQ011_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ011_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ011_SQ003" name="java266617X8X2180SQ011_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ011_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ011_SQ003" name="266617X8X2180SQ011_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array1 subquestion-list questions-list" id="javatbd266617X8X2180SQ012">
			<th class="answertext">
				Piped Natural Gas (kilogrammes)
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ012_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ012_SQ001" name="java266617X8X2180SQ012_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ015_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ012_SQ001" name="266617X8X2180SQ012_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ012_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ012_SQ002" name="java266617X8X2180SQ012_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ015_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ012_SQ002" name="266617X8X2180SQ012_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ012_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ012_SQ003" name="java266617X8X2180SQ012_SQ003" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ015_SQ003']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ012_SQ003" name="266617X8X2180SQ012_SQ003" readonly="">
			</td>

		</tr>


	<tr class="array2 subquestion-list questions-list" id="javatbd266617X8X2180SQ013">
			<th class="answertext">
				Total
				<input type="hidden" value="" id="java266617X8X2180SQ013" name="java266617X8X2180SQ013" class="form-control">
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				<label for="answer266617X8X2180SQ013_SQ001" class="hide read">Quantity consumed/monthly average</label>
				<input type="hidden" id="java266617X8X2180SQ013_SQ001" name="java266617X8X2180SQ013_SQ001" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ013_SQ001']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ013_SQ001" name="266617X8X2180SQ013_SQ001" readonly="">
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				<label for="answer266617X8X2180SQ013_SQ002" class="hide read">Energy consumed in Megajoules (MJ)</label>
				<input type="hidden" id="java266617X8X2180SQ013_SQ002" name="java266617X8X2180SQ013_SQ002" class="form-control">
				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ013_SQ002']; ?>" size="20" maxlength="10" class="form-control" id="answer266617X8X2180SQ013_SQ002" name="266617X8X2180SQ013_SQ002" readonly="">
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				<label for="answer266617X8X2180SQ013_SQ003" class="hide read">Type of use</label>
				<input type="hidden" id="java266617X8X2180SQ013_SQ003" name="java266617X8X2180SQ013_SQ003" class="form-control">
<!--				<input type="text" value="<?php echo $sql_data['266617X8X2180SQ013_SQ003']; ?>" size="20" maxlength="10" class="empty form-control" id="answer266617X8X2180SQ013_SQ003" name="266617X8X2180SQ013_SQ003" readonly="">-->
			</td>

		</tr>
	</tbody>
</table>
       
            </div>
            
            <div class="survey-question-help"><img align="left" alt="Help" src="/audit2016/images/help.gif"><p>
	Type of use/purpose (mention the type of use in the above table):</p>
<p>
	Enter 1 for Lighting</p>
<p>
	Enter2 for Housekeeping</p>
<p>
	Enter 3 for Cooking</p>
<p>
	Enter 4 for Transport</p>
<p>
	Enter 5 for Teaching/learning aid.</p>
</div>
    
        </div>
    </div>
	
	
	<div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X8X2668_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X8X2668_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X8X2668']);
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
            <span class="cube">4</span> What appliances does your school have? 
            </div>
            </label>
        <div class="answer clearfix">      
<table class="question subquestions-list questions-list" summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. ">
	<colgroup class="col-responses">

		<col class="answertext" width="20%">
<col class="odd" width="20%">
<col class="even" width="20%">
<col class="odd" width="20%">
	</colgroup>

	<thead>
		<tr class="dontread">
	<th width="20%">Appliances/Equipments</th>
	<th class="answertext">Number</th>
	<th class="answertext">Size</th>
	<th class="answertext">BEE Star Rating</th>
</tr>
	</thead>
<tbody>

	<tr id="javatbd266617X8X2415SQ001" class="array2 subquestion-list questions-list">
			<th class="answertext">
				Air Conditioners
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ001_SQ001" value="<?php echo $sql_data['266617X8X2415SQ001_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ001_SQ002" value="<?php echo $sql_data['266617X8X2415SQ001_SQ002']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ001_SQ003" value="<?php echo $sql_data['266617X8X2415SQ001_SQ003']; ?>"  size="20" class="form-control" readonly >
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ002" class="array1 subquestion-list questions-list">
			<th class="answertext">
				Refrigerator
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ002_SQ001" value="<?php echo $sql_data['266617X8X2415SQ002_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
			
				<input type="text" name="266617X8X2415SQ002_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ002_SQ002']; ?>"  size="20" class="form-control" readonly >
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ002_SQ003"   value="<?php echo $sql_data['266617X8X2415SQ002_SQ003']; ?>"  size="20" class="form-control" readonly>
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ003" class="array2 subquestion-list questions-list">
			<th class="answertext">
				Microwave
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ003_SQ001"  value="<?php echo $sql_data['266617X8X2415SQ003_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ003_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ003_SQ002']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ003_SQ003"  value="<?php echo $sql_data['266617X8X2415SQ003_SQ003']; ?>"  size="20" class="form-control" readonly>
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ004" class="array1 subquestion-list questions-list">
			<th class="answertext">
				Tube Lights
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ004_SQ001"  value="<?php echo $sql_data['266617X8X2415SQ004_SQ001']; ?>"  size="20" class="form-control" readonly >
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ004_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ004_SQ002']; ?>"  size="20" class="form-control" readonly >
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ004_SQ003"  value="<?php echo $sql_data['266617X8X2415SQ004_SQ003']; ?>"  size="20" class="form-control" readonly >
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ005" class="array2 subquestion-list questions-list">
			<th class="answertext">
				CFL Bulbs
				
	<td class="answer_cell_00SQ001 answer-item text-item">
			
				<input type="text" name="266617X8X2415SQ005_SQ001"  value="<?php echo $sql_data['266617X8X2415SQ005_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ005_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ005_SQ002']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ005_SQ003"  value="<?php echo $sql_data['266617X8X2415SQ005_SQ003']; ?>"  size="20" class="form-control" readonly>
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ006" class="array1 subquestion-list questions-list">
			<th class="answertext">
				LED Lights
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ006_SQ001"  value="<?php echo $sql_data['266617X8X2415SQ006_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ006_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ006_SQ002']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ006_SQ003"  value="<?php echo $sql_data['266617X8X2415SQ006_SQ003']; ?>"  size="20" class="form-control" readonly>
			</td>

		</tr>


	<tr id="javatbd266617X8X2415SQ007" class="array2 subquestion-list questions-list">
			<th class="answertext">
				Fans
				
			</th>
	<td class="answer_cell_00SQ001 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ007_SQ001"  value="<?php echo $sql_data['266617X8X2415SQ007_SQ001']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ002 answer-item text-item">
				
				
				<input type="text" name="266617X8X2415SQ007_SQ002"  value="<?php echo $sql_data['266617X8X2415SQ007_SQ002']; ?>"  size="20" class="form-control" readonly>
			</td>
	<td class="answer_cell_00SQ003 answer-item text-item">
				
				<input type="text" name="266617X8X2415SQ007_SQ003"  value="<?php echo $sql_data['266617X8X2415SQ007_SQ003']; ?>"  size="20" class="form-control" readonly>
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
           if($sql_data['266617X8X2669_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X8X2669_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X8X2669']);
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
                <h6>Task 3: Is your school using any renewable sources of energy?</h6>

            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
        <input type="hidden" value="" id="answer266617X8X2005" name="266617X8X2005">          
        </div>
        </div>
     </div>
      
      
     <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">5</span> What is the average number of sunny days in your area?

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/energy/#weFindAlternatives" class="kplink"></a>
            </span>
            </label>

        <div class="answer clearfix">
        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
	<?php
        echo number_format($sql_data['266617X8X260']);
        ?>
        </p>
        </div>
        </div>
    </div> 
	
      
     <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6</span> Are there any alternate sources of energy employed/ installed in your school?

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/energy/#weFindAlternatives" class="kplink"></a>
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X8X261'] == "Y")
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
     if($sql_data['266617X8X261'] == "Y")
     {
     ?>
     
      <div class="form-group"> 
     <label for="exampleInputEmail1">
     <span class="question-text">
     <span class="cube">6(a)</span> Name the alternate sources of energy employed/ installed in your school?

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/energy/#weFindAlternatives" class="kplink"></a>
     </span>
     </label>

        <div class="answer clearfix">
        <p class="question answer-item text-item numeric-item "> <label class="hide label" for="answer266617X8X260">Answer</label>
        <?php
           if($sql_data['266617X8X262SQ001'] == "Y")
           {
               echo "Solar";
           }
           if($sql_data['266617X8X262SQ002'] == "Y")
           {
               echo ", Wind";
           }
           if($sql_data['266617X8X262SQ003'] == "Y")
           {
               echo ", Hydro";
           }
           if($sql_data['266617X8X262SQ004'] == "Y")
           {
               echo ", Combination of solar and wind";
           }
           ?>   
        </p>
        </div>
    </div> 
      
     <?php } ?>
      
      
      
      <div class="form-group">
        <label for="exampleInputEmail1"> Supporting Documents  </label>
        <ul class="support-docs">
            <li>

           <?php
           if($sql_data['266617X8X2634_filecount'] > 0)
      {
    $q = 0;
      echo '
        <ol class="support-docs">';       
           if($sql_data['266617X8X2634_filecount'] > 0)
           {
              $data_arr = json_decode($sql_data['266617X8X2634']);
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
      	<a class="btn org-btn" href="response_detail3.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
          <a class="btn org-btn" href="response_detail5.php?id=<?php echo $_REQUEST['id'] ?>">NEXT</a>
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