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
              <li><a href="response_detail8.php?id=<?php echo $_REQUEST['id']; ?>">Waste</a></li>
              <li class="active"><a href="response_feedback.php?id=<?php echo $_REQUEST['id']; ?>">Feedback</a></li>
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
    <h1>Feedback
      
	  <span class="school-name"><?php echo $sql_data['266617X34X1590']; ?></span>
    </h1>
    <!--close progress-->
    
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">1</span> Has your school participated in the Green Schools Programme (GSP) Audit before? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2426'] == "Y")
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
    <?php  if($sql_data['266617X39X2426'] == "Y"){ ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">1(a)</span> If yes, then in which year did your school first participate in the GSP Audit? </span> </label>
      <p class="formanswertext">
        <?php
           echo $sql_data['266617X39X2427'];
           ?>
      </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">1(b)</span> If yes, how many times have you done the audit? </span> </label>
      <p class="formanswertext">
        <?php
           echo $sql_data['266617X39X2428'];
           ?>
      </p>
    </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">2</span> Have teachers from your school participated in teacher interactive workshops organized by the GSP team? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2429'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">3</span> Did you find the online information relevant to your environmental education activities? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2430'] == "Y")
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
    <?php  if($sql_data['266617X39X2430'] == "N")
           { ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">3(a)</span> If no, then please share your suggestions: </span> </label>
      <p class="formanswertext">
        <?php
           echo $sql_data['266617X39X2430'];
           ?>
      </p>
    </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">4</span> Was the audit easy-to-understand and self-explanatory? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2432'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">5</span> Did you understand the present format of the GSP? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2433'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">6</span> Do you think your school will be a Green School (resource efficient) by 2019? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2434'] == "Y")
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
    <?php if($sql_data['266617X39X2434'] == "N")
           {  ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">6(a)</span> If no, why? </span> </label>
      <p class="formanswertext">
        <?php
          echo $sql_data['266617X39X2435'];
           ?>
      </p>
    </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">7</span> What would be the help required to make your school a Green School? </span> </label>
      <p class="formanswertext">
        <?php
          echo $sql_data['266617X39X2436'];
           ?>
      </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">8</span> How would you rate the overall design of the audit? </span> </label>
      <div class="answer clearfix">
        <table>
          <colgroup class="col-responses">
          <col width="50%">
          <col width="50%">
          </colgroup>
          <thead>
            <tr class="dontread">
              <td>Aspect</td>
              <th>Good / Average /Bad</th>
            </tr>
          </thead>
          <tbody>
            <tr id="javatbd266617X39X2437SQ001" class="array2 answers-list radio-list">
              <th class="answertext"> Content
                <input type="hidden" name="java266617X39X2437SQ001" id="java266617X39X2437SQ001" value="A1">
              </th>
              <td class="answer_cell_00A1 answer-item radio-item">
                <?php if($sql_data['266617X39X2437SQ001']=="A1"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A1">Good</label>
                <?php } if($sql_data['266617X39X2437SQ001']=="A2"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A2">Average</label>
                <?php } if($sql_data['266617X39X2437SQ001']=="A3"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A3">Bad</label>
                <?php } ?>
              </td>
            </tr>
            <tr id="javatbd266617X39X2437SQ002" class="array1 answers-list radio-list">
              <th class="answertext"> Distribution of time among tasks
                <input type="hidden" name="java266617X39X2437SQ002" id="java266617X39X2437SQ002" value="A2">
              </th>
              <td class="answer_cell_00A1 answer-item radio-item">
                <?php if($sql_data['266617X39X2437SQ002']=="A1"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A1">Good</label>
                <?php } if($sql_data['266617X39X2437SQ002']=="A2"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A2">Average</label>
                <?php } if($sql_data['266617X39X2437SQ002']=="A3"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A3">Bad</label>
                <?php } ?>
              </td>
            </tr>
            <tr id="javatbd266617X39X2437SQ003" class="array2 answers-list radio-list">
              <th class="answertext"> Sequencing of tasks
                <input type="hidden" name="java266617X39X2437SQ003" id="java266617X39X2437SQ003" value="A2">
              </th>
              <td class="answer_cell_00A1 answer-item radio-item">
                <?php if($sql_data['266617X39X2437SQ003']=="A1"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A1">Good</label>
                <?php } if($sql_data['266617X39X2437SQ003']=="A2"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A2">Average</label>
                <?php } if($sql_data['266617X39X2437SQ003']=="A3"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A3">Bad</label>
                <?php } ?>
              </td>
            </tr>
            <tr id="javatbd266617X39X2437SQ004" class="array1 answers-list radio-list">
              <th class="answertext"> Orientation for conducting tasks
                <input type="hidden" name="java266617X39X2437SQ004" id="java266617X39X2437SQ004" value="A2">
              </th>
              <td class="answer_cell_00A1 answer-item radio-item">
                <?php if($sql_data['266617X39X2437SQ004']=="A1"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A1">Good</label>
                <?php } if($sql_data['266617X39X2437SQ004']=="A2"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A2">Average</label>
                <?php } if($sql_data['266617X39X2437SQ004']=="A3"){ ?>
                <label class="read" for="answer266617X39X2437SQ001-A3">Bad</label>
                <?php } ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">9</span> Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2442'] == "Y")
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
    <?php if($sql_data['266617X39X2442'] == "Y")
           {?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">9(a)</span> If yes, please share your suggestions: </span> </label>
      <p class="formanswertext">
        <?php
           echo $sql_data['266617X39X2443'];
           ?>
      </p>
    </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">10</span> Could you finish all the tasks in given period of time online? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2444'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">11</span> How many times did you contact the Green Schools Programme Team for guidance and counseling? </span> </label>
      <p class="formanswertext">
        <?php 
                $Programme=array(1=>"Never",2=>"Once",3=>"Twice",4=>"More than twice");	
				$index_arr=$sql_data['266617X39X2445'];
				echo $Programme[$index_arr];
            ?>
      </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">12</span> Water being the focus this year, did you find the questionnaire in Water section helpful to make your school understand how to become water efficient? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2446'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">12(a)</span> If no, please share your suggestions: </span> </label>
      <p class="formanswertext">
        <?php
           echo $sql_data['266617X39X2447'];
         
           ?>
      </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">13</span> Did your students enjoy doing the Water activities? </span> </label>
      <p class="formanswertext">
        <?php
           if($sql_data['266617X39X2448'] == "Y")
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
      <label for="exampleInputEmail1"> <span class="question-text"> <span class="cube">13(a)</span> How many students were involved in the activities? </span> </label>
      <p class="formanswertext">
        <?php
           echo number_format($sql_data['266617X39X2449']);
           ?>
      </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Checklist of uploaded documents</h6>
      </div>
      </label>
      <div class="answer clearfix">
        <div class="answer clearfix">
          <input type="hidden" name="MULTI266617X39X2681" value="28">
          <ul class="subquestions-list questions-list checkbox-list">
            <li id="javatbd266617X39X26811" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26811']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26811" id="answer266617X39X26811" value="Y" checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26811" id="answer266617X39X26811" value="N" >
              <?php } ?>
              <label for="answer266617X39X26811" class="answertext">PUC certificates of not more than five buses</label>
            </li>
            <li id="javatbd266617X39X26812" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26812']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26812" id="answer266617X39X26812" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26812" >
              <?php } ?>
              <label for="answer266617X39X26812" class="answertext">Picture of Air Quality Monitoring equipment of school</label>
            </li>
            <li id="javatbd266617X39X26813" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26813']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26813" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26813" >
              <?php } ?>
              <label for="answer266617X39X26813" class="answertext">Fuel Bills</label>
            </li>
            <li id="javatbd266617X39X26814" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26814']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26814" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26814" >
              <?php } ?>
              <label for="answer266617X39X26814" class="answertext">Picture of School owned vehicles</label>
            </li>
            <li id="javatbd266617X39X26815" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26815']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26815" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26815" >
              <?php } ?>
              <label for="answer266617X39X26815" class="answertext">Electricity Bill</label>
            </li>
            <li id="javatbd266617X39X26816" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26816']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26816" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26816" >
              <?php } ?>
              <label for="answer266617X39X26816" class="answertext">Picture of 5 star appliances used by school </label>
            </li>
            <li id="javatbd266617X39X26817" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26817']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26817" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26817" >
              <?php } ?>
              <label for="answer266617X39X26817" class="answertext">Picture of Renewable sources of Energy</label>
            </li>
            <li id="javatbd266617X39X26818" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26818']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26818" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26818" >
              <?php } ?>
              <label for="answer266617X39X26818" class="answertext">Picture of Mid-day meal being served</label>
            </li>
            <li id="javatbd266617X39X26819" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X26819']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26819" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X26819" >
              <?php } ?>
              <label for="answer266617X39X26819" class="answertext">Photographs of lunch boxes</label>
            </li>
            <li id="javatbd266617X39X268110" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268110']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268110" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268110" >
              <?php } ?>
              <label for="answer266617X39X268110" class="answertext">Picture of Canteen selling UPPF</label>
            </li>
            <li id="javatbd266617X39X268111" class="question-item answer-item checkbox-item">
              <input class="checkbox" type="checkbox" name="266617X39X268111" id="answer266617X39X268111" value="Y" onclick="cancelBubbleThis(event);checkconditions(this.value, this.name, this.type)">
              <?php if($sql_data['266617X39X268111']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268111" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268111" >
              <?php } ?>
              <label for="answer266617X39X268111" class="answertext">Traditional food items sold in canteen</label>
            </li>
            <li id="javatbd266617X39X268112" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268112']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268112" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268112" >
              <?php } ?>
              <label for="answer266617X39X268112" class="answertext">Pictures of Events sponsored by UPPF companies</label>
            </li>
            <li id="javatbd266617X39X268113" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268113']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268113" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268113" >
              <?php } ?>
              <label for="answer266617X39X268113" class="answertext">Pictures of Green Cover</label>
            </li>
            <li id="javatbd266617X39X268114" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268114']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268114" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268114" >
              <?php } ?>
              <label for="answer266617X39X268114" class="answertext">Pictures of landscaped area </label>
            </li>
            <li id="javatbd266617X39X268115" class="question-item answer-item checkbox-item">
              <input class="checkbox" type="checkbox" name="266617X39X268115" id="answer266617X39X268115" value="Y" onclick="cancelBubbleThis(event);checkconditions(this.value, this.name, this.type)">
              <?php if($sql_data['266617X39X268115']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268115" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268115" >
              <?php } ?>
              <label for="answer266617X39X268115" class="answertext">Building construction plan</label>
            </li>
            <li id="javatbd266617X39X268116" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268116']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268116" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268116" >
              <?php } ?>
              <label for="answer266617X39X268116" class="answertext">Pictures of bio-pesticides</label>
            </li>
            <li id="javatbd266617X39X268117" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268117']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268117" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268117" >
              <?php } ?>
               <label for="answer266617X39X268117" class="answertext">Pictures of dustbins in classroom showing segregation at source</label>
            </li>
            <li id="javatbd266617X39X268118" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268118']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268118" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268118" >
              <?php } ?>
              <label for="answer266617X39X268118" class="answertext">Pictures of playground with more than two dustbins</label>
            </li>
            <li id="javatbd266617X39X268119" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268119']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268119" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268119" >
              <?php } ?>
              <label for="answer266617X39X268119" class="answertext">Picture of audit team weighing solid waste</label>
            </li>
            <li id="javatbd266617X39X268120" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268120']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268120" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268120" >
              <?php } ?>
              <label for="answer266617X39X268120" class="answertext">Picture of types of solid waste generated</label>
            </li>
            <li id="javatbd266617X39X268121" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268121']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268121" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268121" >
              <?php } ?>
              <label for="answer266617X39X268121" class="answertext">Pictures of recycling units - composting pit, paper recycling machine, selling paper to kabadiwala, recyclers,etc</label>
            </li>
            <li id="javatbd266617X39X268122" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268122']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268122" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268122" >
              <?php } ?>
              <label for="answer266617X39X268122" class="answertext">Pictures of housekeeping staff disposing different types of solid waste</label>
            </li>
            <li id="javatbd266617X39X268123" class="question-item answer-item checkbox-item">
              <input class="checkbox" type="checkbox" name="266617X39X268123" id="answer266617X39X268123" value="Y" onclick="cancelBubbleThis(event);checkconditions(this.value, this.name, this.type)">
              <?php if($sql_data['266617X39X268123']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268123" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268123" >
              <?php } ?>
              <label for="answer266617X39X268123" class="answertext">Pictures of burning waste</label>
            </li>
            <li id="javatbd266617X39X268124" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268124']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268124" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268124" >
              <?php } ?>
              <label for="answer266617X39X268124" class="answertext">Pictures of Electronic items used by school and storage of non-working electronic items</label>
            </li>
            <li id="javatbd266617X39X268125" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268125']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268125" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268125" >
              <?php } ?>
              <label for="answer266617X39X268125" class="answertext">Certificate of disposing e-waste from authorised dealer/dismantler</label>
            </li>
            <li id="javatbd266617X39X268126" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268126']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268126" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268126" >
              <?php } ?>
              <label for="answer266617X39X268126" class="answertext">Waste Policy</label>
            </li>
            <li id="javatbd266617X39X268127" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268127']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268127" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268127" >
              <?php } ?>
              <label for="answer266617X39X268127" class="answertext">Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc</label>
            </li>
            <li id="javatbd266617X39X268128" class="question-item answer-item checkbox-item">
              <?php if($sql_data['266617X39X268128']=="Y"){ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268128" value="Y"  checked="checked">
              <?php }else{ ?>
              <input class="checkbox" type="checkbox" name="266617X39X268128" >
              <?php } ?>
              <label for="answer266617X39X268128" class="answertext">Pictures of respective audit teams doing survey</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <center>
      <a class="btn org-btn" href="response_detail8.php?id=<?php echo $_REQUEST['id'] ?>">PREVIOUS</a>
    </center>
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