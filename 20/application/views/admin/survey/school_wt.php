<html>
<head>
<meta charset="utf-8">
<title>Green School Programms Audit Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- <link href="<?php //echo base_url(); ?>assets/css/pdf.css" rel="stylesheet"> -->
<style type="text/css">

body {font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.3; color: #4f4f4f; margin: 0; padding: 0;} /* set for consistency across browsers */
@page { margin: 15mm; }
h1,h2,h3,h4 {line-height: 1.2;}
table { border-collapse: collapse; border-spacing: 0; }
* {box-sizing:border-box;}
ul {list-style-type: none;}
.cover {background: #e0e0e0; width: 100%;}
.cover .logo {padding: 30px 0 30px 110px;}
.cover h1 {font-size: 24px; color: #fff; background: #9397a0; text-align: center; padding: 25px 0;}
.school-detail {width: 90%; margin: 50px auto 10px;}
.school-detail p {font-size: 20px; margin-bottom: 5px;}
.school-detail p span {display: inline-block; vertical-align: top;}
.school-detail p span:first-child {color: #e86549; width: 200px;}
.school-detail p span:last-child {max-width: 62%;}
.cover .address-wrap {width: 100%; height: 410px; position: relative;}
.cover .address {width: 70%; text-align: center; color: #fff; position: absolute; top: 42%; left: 17%; display: inline-block;}
.cover .address p:first-child {font-size: 20px; margin-bottom: 10px;}


.container {width: 100%; padding: 30px 0 30px;}
.auditor-detail h1 {font-size: 24px; color: #e86549; margin-bottom: 20px;}
.auditor-detail p {font-size: 18px; margin-bottom: 5px;}
.auditor-detail p span:first-child {color: #e86549; margin-right: 5px;}
.heading {text-transform: uppercase; color: #fff; background: #9397a0; padding: 8px 20px; margin: 0px; font-size: 18px; position: relative;}
.heading.section {padding-left: 100px; margin: 20px 0 10px;}
.heading.section > img {margin-left: -10px;}
.heading.section:before {content: ''; width: 15px; height: 100%; position: absolute; left: 0; top: 0;}
.heading.air {background: #d5bb2b;}
.heading.energy {background: #e29e15;}
.heading.food {background: #f153a8;}
.heading.land {background: #a5b642;}
.heading.water {background: #0072bc;}
.heading.waste {background: #7265ad;}
.heading.section > img {position: absolute; left: 0; top: -25px;}
.list {padding: 0;}
.list li {margin-bottom: 20px;}
.list li p {padding:-20 0 0 75px; font-size: 14px; margin: 0px;}
.list li p span:first-child {display: inline-block; text-align: center; font-size: 13px; width:60px; height: 25px; padding-top: 7px; background: #e86549; color: #fff; vertical-align: baseline; margin: 0 15px 0 0;}
.list li p.orange {color: #e86549; padding: 0;}
.list li ol { margin-left: 25px; font-size: 14px; }

.page-number {text-align: right; padding-right: 75px; background: url(images/row-dot.png) left center repeat-x; margin-bottom: 30px;}
.page-number p {display: inline-block; vertical-align: middle; background: #fff; padding: 0 5px; color: #e86549;}
.page-number p span {width: 36px; height: 36px; background: #e86549; color: #fff; line-height: 36px; margin-left: 5px; text-align: center; border-radius: 50%; font-size: 15px; display: inline-block;}

.task {font-size: 18px; color: #e86549; margin-bottom: 15px;}
.task-area {padding: 10px 0 10px; font-size: 14px; line-height: 16px;}
.task-area p { margin: 0px; padding: 0px; }
.task-area p span:first-child {display: inline-block; color: #e86549; margin-right: 5px; width: 30%;}
.table {font-size: 13px; margin: 10px 0; width: 100% }
.table.tick img { height: 10px; width: 10px; }
.table th {color: #fff; background: #e86549; padding: 10px 10px; text-align: center; border-left: 1px solid #fff; font-weight: normal;}
.table th:first-child, .table td:first-child {text-align: left; border-left: none;}
.table td {padding: 8px 20px; background: #dee1e7; border: 1px solid #fff; border-right: none; text-align: center; border-bottom: none;}
.table tr.total td {background: #9397a0; text-transform: uppercase; color: #fff;}
.table tr td:first-child {text-align: left;}
.auditor-detail p span, .task-area p span, .list li p span {display: inline-block; vertical-align: top;}
.auditor-detail p span {max-width: 82%;}
.task-area p:nth-child(3) span {max-width: 69%;}
.task-area p:last-child span:last-child {width: 80%;}
.list li p span {max-width: 93%;}

.table.question1ge th {padding: 8px 3px !important; width: 8%;}
.support_files {padding: 10px; background: rgb(242, 222, 222); border: 1px solid rgb(235, 204, 209); color: rgb(169, 68, 66); font-size: 16px; margin-top: 20px;}
.support_files_head {padding: 10px; background: rgb(223, 240, 216); border: 1px solid rgb(214, 233, 198); color: rgb(60, 118, 61); font-size: 16px;  }
.support_files_head ol { font-size: 13px; padding-top: 10px; }

.page_break{ page-break-before: always;  }

ol.support-docs { margin: 0px; padding:0 0 15px 15px;  }


.table{table-layout:fixed;}
.table tr td{ font-size:12px!important; word-wrap: break-word; }
.break-text{  
   display:inline;
   width:300px;
   word-wrap:break-word;
}
</style>
</head>
<body>
<script type="text/php">
  <?php
  if ( isset($pdf) ) {
  $font = Font_Metrics::get_font("helvetica", "bold");
  $pdf->page_text(280, 15, "{PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));
  } 
  ?>
</script>
<div class="cover"> <img src="assets/img/images/logo.png" width="436" height="100" class="logo">
  <h1>Responses For Green Schools Programme Audit 2019</h1>
  <div class="school-detail">
    <p><span>School Name:</span><span style="font-size:18px;"><?php echo $school[0]->name; ?></span></p>
    <p><span>Address:</span><span style="font-size:18px;"><?php echo $school[0]->address1; ?></span></p>
    <p><span>Coordinator Name:</span><span style="font-size:18px;"><?php echo $school[0]->coname; ?></span></p>
  </div>
  <div class="address-wrap" style="margin-top: 80px"> <img src="assets/img/images/cover.png" width="100%">
    <div class="address" style="margin-top: 40px">
      <p>Green Schools Programme <br />
        Centre for Science and Environment</p><span>41, Tughlakabad Institutional Area, New Delhi. India - 110062<br/>
        Tel: +91-11 29955124, 29956110, 40616000<br/>
        http://www.greenschoolsprogramme.org/</span>
    </div>
  </div>
</div>
<div class="container">
  <h2 class="heading">School Profile</h2>
  <div class="wrapper">
    <ul class="list">
      <li>
        <p class="orange"><span>1</span><span>Name of the School / Institution</span></p>
        <p><?php echo $school[0]->name; ?></p>
      </li>
      <li>
        <p class="orange"><span>2</span><span>Address Line 1</span></p>
        <p><?php echo $school[0]->address1; ?></p>
      </li>
      <li>
        <p class="orange" ><span>3</span><span>Address Line 2</span></p>
        <p style="margin-bottom: -20px">
          <?php  if(!empty($school[0]->address2)){echo $school[0]->address2;}else{ echo "Address 2 Not provided by School.";} ?>
        </p>
      </li>
      <li>
        <p class="orange"><span>4</span><span>Country</span></p>
        <p><?php echo 'India'; ?></p>
      </li>
      <li>
        <p class="orange"><span>5</span><span>State</span></p>
        <p><?php echo $school[0]->state_name; ?></p>
      </li>
      <li>
        <p class="orange"><span>6</span><span>District</span></p>
        <p><?php echo $school[0]->district; ?></p>
      </li>
      <li>
        <p class="orange"><span>7</span><span>City</span></p>
        <p><?php echo $school[0]->city; ?></p>
      </li>
      <li>
        <p class="orange"><span>8</span><span>Pincode</span></p>
        <p><?php echo $school[0]->pincode; ?></p>
      </li>
      <li>
        <p class="orange"><span>9</span><span>Telephone Number (Landline Number with STD code)</span></p>
        <p>(ISD) &nbsp;91  &nbsp;&nbsp; (STD) &nbsp;<?php echo $school[0]->std; ?> &nbsp;&nbsp; (Number)<?php echo $school[0]->telephone; ?></p>
      </li>
      <li>
        <p class="orange"><span>10</span><span>Mobile Number (Mobile Number with STD code)</span></p>
        <p>(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school[0]->mobile; ?></p>
      </li>
      <li>
        <p class="orange"><span>11</span><span>Principal Name</span></p>
        <p><?php echo $school[0]->principle_name; ?></p>
      </li>
      <li>
        <p class="orange"><span>12</span><span>GSP Coordinator Name</span></p>
        <p><?php echo $school[0]->coname; ?></p>
      </li>
      <li>
        <p class="orange"><span>13</span><span>GSP Coordinator Email</span></p>
        <p><?php echo $school[0]->coemail; ?></p>
      </li>
      <li>
        <p class="orange"><span>14</span><span>GSP Coordinator Mobile Number</span></p>
        <p>(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school[0]->comobile; ?></p>
      </li>
      <li>
        <p class="orange"><span>15</span><span>Category Of The School</span></p>
        <p>
          <?php
                            $arr = array(
                                '1' => 'Day Scholar',
                                '2' => 'Day Boarding',
                                '3' => 'Residential',
                                '4' => 'Day Scholar + Day Boarding',
                                '5' => 'Day Boarding + Residential',
                                '6' => 'Day Scholar + Residential',
                                '7' => 'Day Scholar + Day Boarding + Residential'
                            );
                            ?>
          <?php echo (getFiled('Q1S1', $schoolUserID) != '') ? $arr[getFiled('Q1S1', $schoolUserID)] : ""; ?> </p>
      </li>
      <li>
        <p class="orange"><span>16</span><span>School Shift</span></p>
        <p>
          <?php
                            $arr1 = array(
                                '1' => 'Morning',
                                '2' => 'Evening',
                                '3' => 'Both',
                            );
                            ?>
          <?php echo (getFiled('Q2S1', $schoolUserID)) ? $arr1[getFiled('Q2S1', $schoolUserID)] : ""; ?> </p>
      </li>
      <li>
        <p class="orange"><span>17</span><span> School Level:</span></p>
        <p>
          <?php
                            $arr1 = array(
                                '1' => 'Is your school a primary school <br/> (upto Class 5)',
                                '2' => 'Is your school an elementary school <br/> (upto Class 8)',
                                '3' => 'Is your school a secondary school <br/> (upto Class 10)',
                                '4' => 'Is your school a higher secondary school <br/> (upto Class 12)',
                            );
                            ?>
          <?php echo (getFiled('Q10G1', $schoolUserID)) ? $arr1[getFiled('Q10G1', $schoolUserID)] : ""; ?> </p>
      </li>
    </ul>
  </div>
</div>
<h2 class="heading page_break">General Questions</h2>
<div class="wrapper">
  <ul class="list">
    <li>
      <p class="orange"><span>1</span><span>How many levels does your school have? Please choose what is applicable.</span></p>
      <p class="formanswertext"> Lowest level of grade:<?php echo getFiled('Q1G1',
                        $schoolUserID);
                    ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Highest level of grade:<?php echo getFiled('Q1G2',
                        $schoolUserID);
                    ?></p>
    </li>
    <li>
      <p class="orange"><span>2</span><span> Is your school single gender or mixed gender?</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q2G1', $schoolUserID) == 1):
                            echo "Only boys";
                        elseif (getFiled('Q2G1', $schoolUserID) == 2):
                            echo "Only Girls";
                        elseif (getFiled('Q2G1', $schoolUserID) == 3):
                            echo "Mixed/Co-education";

                        endif;
                        ?>
      </p>
    </li>
    <li>
      <p class="orange"><span>3</span><span> Which board of education does the school follow?</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q3G1', $schoolUserID) == 1):
                            echo " State board of education (please specify your state)";
                        elseif (getFiled('Q3G1', $schoolUserID) == 2):
                            echo " Central Board of Secondary Education ";
                        elseif (getFiled('Q3G1', $schoolUserID) == 3):
                            echo "Indian Certificate of Secondary Education";
                        elseif (getFiled('Q3G1', $schoolUserID) == 4):
                            echo "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE)
                    combination";
                        elseif (getFiled('Q3G1', $schoolUserID) == 5):
                            echo "  Others";

                        endif;
                        ?>
      </p>
    </li>
    <!-- <li>
      <p class="orange"><span>3.1</span><span> Select State for Board of Education:</span></p>
      <p><?php //echo (getFiled('Q3G2', $schoolUserID) != "") ? getFiled('Q3G2', $schoolUserID) : "N/A"; ?></p>
    </li>-->
    <li>
      <p class="orange"><span>4</span>Total population of the school</p>
      <table class="table">
        <tr>
          <th></th>
          <th>Male</th>
          <th>Female</th>
          <th>Total</th>
        </tr>
        <tr>
          <td> Students </td>
          <td><?php echo (getFiled('Q4G1S1', $schoolUserID) != "") ? getFiled('Q4G1S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G1S2', $schoolUserID) != "") ? getFiled('Q4G1S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G1S3', $schoolUserID) != "") ? getFiled('Q4G1S3', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Teachers </td>
          <td><?php echo (getFiled('Q4G2S1', $schoolUserID) != "") ? getFiled('Q4G2S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G2S2', $schoolUserID) != "") ? getFiled('Q4G2S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G2S3', $schoolUserID) != "") ? getFiled('Q4G2S3', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Non-teaching Staff </td>
          <td><?php echo (getFiled('Q4G3S1', $schoolUserID) != "") ? getFiled('Q4G3S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G3S2', $schoolUserID) != "") ? getFiled('Q4G3S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G3S3', $schoolUserID) != "") ? getFiled('Q4G3S3', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Sub-Total </td>
          <td><?php echo (getFiled('Q4G4S1', $schoolUserID) != "") ? getFiled('Q4G4S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G4S2', $schoolUserID) != "") ? getFiled('Q4G4S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q4G4S3', $schoolUserID) != "") ? getFiled('Q4G4S3', $schoolUserID) : "N/A"; ?> </td>
        </tr>
      </table>
      </p>
    </li>
    <li>
      <p class="orange"><span>4(b)</span><span>How many visitors visit your school </span></p>
      <p class="formanswertext"><?php echo (getFiled('Q5G1', $schoolUserID) != "") ? getFiled('Q5G1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <?php if(getFiled('Q1S1', $schoolUserID) != ""){ if(getFiled('Q1S1', $schoolUserID)==3){ ?>
    <li>
      <p class="orange"><span>4(c)</span><span>How many family members stay in the
        school campus? </span></p>
      <p class="formanswertext"><?php echo (getFiled('Q5G2', $schoolUserID) != "") ? getFiled('Q5G2', $schoolUserID) : "N/A"; ?> </p>
    </li>
    <?php }} ?>
    <li>
      <p class="orange"><span>5</span><span> What is the total number of working days of your school in a year?</span></p>
      <p><?php echo (getFiled('Q6G1', $schoolUserID) != "") ? getFiled('Q6G1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span>6</span><span> Month(s) in which the GSP audit was carried out?</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q7G1', $schoolUserID) == 'true') {
                            echo "Jan" . ",";
                        }
                        if (getFiled('Q7G2', $schoolUserID) == 'true') {
                            echo "Feb" . ",";
                        }
                        if (getFiled('Q7G3', $schoolUserID) == 'true') {
                            echo "Mar" . ",";
                        }
                        if (getFiled('Q7G4', $schoolUserID) == 'true') {
                            echo "April" . ",";
                        }
                        if (getFiled('Q7G5', $schoolUserID) == 'true') {
                            echo "May" . ",";
                        }
                        if (getFiled('Q7G6', $schoolUserID) == 'true') {
                            echo "June" . ",";
                        }
                        if (getFiled('Q7G7', $schoolUserID) == 'true') {
                            echo "July" . ",";
                        }
                        if (getFiled('Q7G8', $schoolUserID) == 'true') {
                            echo "Aug" . ",";
                        }
                        if (getFiled('Q7G9', $schoolUserID) == 'true') {
                            echo "Sept" . ",";
                        }
                        if (getFiled('Q7G10', $schoolUserID) == 'true') {
                            echo "Oct" . ",";
                        }
                        if (getFiled('Q7G11', $schoolUserID) == 'true') {
                            echo "Nov" . ",";
                        }
                        if (getFiled('Q7G12', $schoolUserID) == 'true') {
                            echo "Dec.", ",";
                        }
                        ?>
      </p>
    </li>
    <li>
      <p class="orange"><span>7</span><span> Where is the school located?</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q8G1', $schoolUserID) == 1) {
                            echo "Urban Area";
                        }
                        if (getFiled('Q8G1', $schoolUserID) == 2) {
                            echo "Rural Area";
                        }
                        ?>
      </p>
    </li>
    <li>
      <p class="orange"><span>8</span><span>Whether your school is:</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q9G1', $schoolUserID) == 1) {
                            echo "Government School";
                        }
                        if (getFiled('Q9G1', $schoolUserID) == 2) {
                            echo "Government – Aided School";
                        }
                        if (getFiled('Q9G1', $schoolUserID) == 3) {
                            echo "Private School";
                        }
                        ?>
      </p>
    </li>
  </ul>
</div>




<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section waste page_break"><img src="assets/img/images/waste.png" width="94" height="94">Waste</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">BASELINE</h3>
    <p>The first step to efficient solid waste management (SWM) is to become aware of what we do - benchmarking how much waste we generate and how much is processed. It is only then that we can find more sustainable ways to manage waste.</p>
    <p>The Baseline section of GSP Waste Transformers motivates schools to find out the types of waste generated in previous years' audits and measure the actual volume. The Baseline will help schools chalk out their solid waste management plan better. The school's waste management programme has the potential to transform the school environment, and therefore, the objective is to create a plan for zero-waste zones in every school that can be implemented once schools reopen.</p>
    <p class="orange" style="margin-top:12px;"><span>For Baseline:</span></p>
    <p>1.Choose your SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team.</p>                  
    <p>2.With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan.</p>                 
    <p>3.The details of the Action Plan team members will need to be provided in the last section 'The Team'.</p>                   
    <p>4.As a team, study the latest baseline data in comparison to previous years, where applicable.</p>                   
    <p>5.Based on the study, design an Action Plan for SWM in school as per the questions asked in the next section.</p>
    <p>6.The section on Action Plan will open on 23 Dec 2020, and you will only be able to access it once you answer all the questions in the previous sections.</p>
    <p>7.As always, the Action Plan will be submitted online by the school.</p>



    
  </div>
  <div class="task-area">
    <h3 class="task">Task 2: What is the waste segregation system in your school?</h3>
    <p>Segregation means sorting. Let’s understand the waste segregation system because the amount of waste
      recycled or reused will depend on the method of collection. To understand the waste segregation system
      of your school, fill the table below.<br>
      <br>
      <b>To collect data:</b> Students will have to survey the waste collection area and talk to the
      house-keeping staff to know whether waste is segregated in the school and in what quantity. </p>
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">1</span><span> Does your school segregate solid waste?</span></p> </li>
        <li>
        <p class="formanswertext"> <?php echo (getFiled('Q4Wa1', $schoolUserID) != "") ? (getFiled('Q4Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q4Wa1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span class="cube">1(a)</span><span> Who segregates the waste at source?</span></p>
        <p class="formanswertext">
        <?php
        if (getFiled('Q4Wa2S1', $schoolUserID) == 1):
            echo "Students and teachers, ";
            echo "<br/>";
        endif;
        if (getFiled('Q4Wa2S2', $schoolUserID) == 1):
            echo "Housekeeping (Sweeper), ";
            echo "<br/>";
        endif;
        if (getFiled('Q4Wa2S3', $schoolUserID) == 1):
            echo "Gardener, ";
            echo "<br/>";
        endif;
        if (getFiled('Q4Wa2S4', $schoolUserID) == 1):
            echo "Ragpickers, ";
            echo "<br/>";
        endif;
        if (getFiled('Q4Wa2S5', $schoolUserID) !=''):
            echo "Other and Value: ".getFiled('Q4Wa2S5', $schoolUserID);
            echo "<br/>";
        endif;
        ?>
      </p>
      </li>
      <?php endif; ?>
      <li>
        <p class="orange"><span class="cube">2</span><span>How many categories does your school segregate waste into? </span></p>
        <p class="formanswertext">
          <?php
        if (getFiled('Q4Wa2', $schoolUserID) == 1):
            echo "Two";
        elseif (getFiled('Q4Wa2', $schoolUserID) == 2):
            echo "Three";
        elseif (getFiled('Q4Wa2', $schoolUserID) == 3):
            echo "More than three";

        endif;
        ?>
        </p>
      </li>
      <?php if(!empty(getFiled('Q4Wa2', $schoolUserID))): ?>
      <li>
        <p class="orange"><span class="cube">2(a)</span> How many categories does your school segregate waste into?</p>
        <table class="table">
          <tr>
            <th>Area</th>
            <th>No. of waste collection points with no bin</th>
            <th>with one bin (mixed waste)</th>
            <th>with one bin (for only dry waste)</th>
            <th>with two bins (wet &amp; dry)</th>
            <th>with three bins or more</th>
            <th>Total no. of waste collection points</th>
          </tr>
          <tr>
            <td>Classrooms</td>
            <td><?php echo (getFiled('Q5Wa1S1', $schoolUserID) != "") ? getFiled('Q5Wa1S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S2', $schoolUserID) != "") ? getFiled('Q5Wa1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S3', $schoolUserID) != "") ? getFiled('Q5Wa1S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S6', $schoolUserID) != "") ? getFiled('Q5Wa1S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S4', $schoolUserID) != "") ? getFiled('Q5Wa1S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S5', $schoolUserID) != "") ? getFiled('Q5Wa1S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Playgrounds </td>
            <td><?php echo (getFiled('Q5Wa2S1', $schoolUserID) != "") ? getFiled('Q5Wa2S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S2', $schoolUserID) != "") ? getFiled('Q5Wa2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S3', $schoolUserID) != "") ? getFiled('Q5Wa2S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S6', $schoolUserID) != "") ? getFiled('Q5Wa2S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S4', $schoolUserID) != "") ? getFiled('Q5Wa2S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S5', $schoolUserID) != "") ? getFiled('Q5Wa2S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Common area </td>
            <td><?php echo (getFiled('Q5Wa3S1', $schoolUserID) != "") ? getFiled('Q5Wa3S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S2', $schoolUserID) != "") ? getFiled('Q5Wa3S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S3', $schoolUserID) != "") ? getFiled('Q5Wa3S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S6', $schoolUserID) != "") ? getFiled('Q5Wa3S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S4', $schoolUserID) != "") ? getFiled('Q5Wa3S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S5', $schoolUserID) != "") ? getFiled('Q5Wa3S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Staffroom </td>
            <td><?php echo (getFiled('Q5Wa4S1', $schoolUserID) != "") ? getFiled('Q5Wa4S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S2', $schoolUserID) != "") ? getFiled('Q5Wa4S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S3', $schoolUserID) != "") ? getFiled('Q5Wa4S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S6', $schoolUserID) != "") ? getFiled('Q5Wa4S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S4', $schoolUserID) != "") ? getFiled('Q5Wa4S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S5', $schoolUserID) != "") ? getFiled('Q5Wa4S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Laboratory </td>
            <td><?php echo (getFiled('Q5Wa5S1', $schoolUserID) != "") ? getFiled('Q5Wa5S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S2', $schoolUserID) != "") ? getFiled('Q5Wa5S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S3', $schoolUserID) != "") ? getFiled('Q5Wa5S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S6', $schoolUserID) != "") ? getFiled('Q5Wa5S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S4', $schoolUserID) != "") ? getFiled('Q5Wa5S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S5', $schoolUserID) != "") ? getFiled('Q5Wa5S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Canteen </td>
            <td><?php echo (getFiled('Q5Wa6S1', $schoolUserID) != "") ? getFiled('Q5Wa6S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S2', $schoolUserID) != "") ? getFiled('Q5Wa6S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S3', $schoolUserID) != "") ? getFiled('Q5Wa6S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S6', $schoolUserID) != "") ? getFiled('Q5Wa6S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S4', $schoolUserID) != "") ? getFiled('Q5Wa6S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S5', $schoolUserID) != "") ? getFiled('Q5Wa6S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Clinic/sick room </td>
            <td><?php echo (getFiled('Q5Wa7S1', $schoolUserID) != "") ? getFiled('Q5Wa7S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S2', $schoolUserID) != "") ? getFiled('Q5Wa7S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S3', $schoolUserID) != "") ? getFiled('Q5Wa7S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S6', $schoolUserID) != "") ? getFiled('Q5Wa7S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S4', $schoolUserID) != "") ? getFiled('Q5Wa7S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S5', $schoolUserID) != "") ? getFiled('Q5Wa7S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Library </td>
            <td><?php echo (getFiled('Q5Wa8S1', $schoolUserID) != "") ? getFiled('Q5Wa8S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S2', $schoolUserID) != "") ? getFiled('Q5Wa8S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S3', $schoolUserID) != "") ? getFiled('Q5Wa8S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S6', $schoolUserID) != "") ? getFiled('Q5Wa8S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S4', $schoolUserID) != "") ? getFiled('Q5Wa8S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S5', $schoolUserID) != "") ? getFiled('Q5Wa8S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Toilets </td>
            <td><?php echo (getFiled('Q5Wa9S1', $schoolUserID) != "") ? getFiled('Q5Wa9S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S2', $schoolUserID) != "") ? getFiled('Q5Wa9S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S3', $schoolUserID) != "") ? getFiled('Q5Wa9S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S6', $schoolUserID) != "") ? getFiled('Q5Wa9S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S4', $schoolUserID) != "") ? getFiled('Q5Wa9S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S5', $schoolUserID) != "") ? getFiled('Q5Wa9S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others </td>
            <td><?php echo (getFiled('Q5Wa10S1', $schoolUserID) != "") ? getFiled('Q5Wa10S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S2', $schoolUserID) != "") ? getFiled('Q5Wa10S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S3', $schoolUserID) != "") ? getFiled('Q5Wa10S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S6', $schoolUserID) != "") ? getFiled('Q5Wa10S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S4', $schoolUserID) != "") ? getFiled('Q5Wa10S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S5', $schoolUserID) != "") ? getFiled('Q5Wa10S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total </td>
            <td><?php echo (getFiled('Q5Wa11S1', $schoolUserID) != "") ? getFiled('Q5Wa11S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S2', $schoolUserID) != "") ? getFiled('Q5Wa11S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S3', $schoolUserID) != "") ? getFiled('Q5Wa11S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S6', $schoolUserID) != "") ? getFiled('Q5Wa11S6', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S4', $schoolUserID) != "") ? getFiled('Q5Wa11S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S5', $schoolUserID) != "") ? getFiled('Q5Wa11S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <?php endif; ?>
    </ul>
    <?php
       
        if (!empty($segregationClassroom)) {
            ?>
    <div>
      <table  class="table">
        <tr>
          <th>Image</th>
          <th>File Name</th>
        </tr>
        <?php foreach ($segregationClassroom as $a) { 

           $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
          <td><?php $segregationClassroom =  str_replace(str_replace(' ', '_', $school[0]->name . "_Segregation_Source_Classrooms_"), " ", $a->file_name); echo wordwrap($segregationClassroom, 70, '<br />', true);?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files">No documents uploaded by the school. </div>
    <?php } ?>
  </div>
  <div class="task-area">
    <h3 class="task">Task 3: How much waste does your school generate?</h3>
    <p>There is nothing known as waste is just a misplaced resource. Therefore ideally, a school should
      not generate any waste. But there is waste, as most human activities result in some waste. Wastes are of
      many types such as bio-degradable and non-biodegradable, hazardous and non-hazardous, etc. Each of these
      categories has to be handled carefully. Please wear gloves, masks while handling waste. E-waste should
      be handled by adults.<br>
      <br>
      <b>To collect data:</b> Arrange a meeting between the student audit team and the key people in your
      house-keeping staff. Let the students describe the project with them. Segregate all waste, put them in
      small packs and weigh using a spring balance. If the practice of segregation of waste has already been
      adopted, then it will be easy to find out the amount of waste paper and other common trash. For Silt and
      Soil – Put a small mesh wire under the dustbin. And find the amount collected beneath. Or pour the waste
      on a mesh, so that the dust and silt passes through and then weigh the silt.</p>
    <ul class="list">
      <li>
        <p class="orange">
          <label><span class="cube">3</span>Determine the quantity of waste generated in your school. (in kilogram) </label></p>
        <strong style="font-size:15px;">A: Biodegradable/Wet Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Garden/horticulture waste </td>
            <td><?php echo (getFiled('Q6Wa1S1', $schoolUserID) != "") ? getFiled('Q6Wa1S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Kitchen waste—Raw </td>
            <td><?php echo (getFiled('Q6Wa1S2', $schoolUserID) != "") ? getFiled('Q6Wa1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Kitchen waste—Cooked </td>
            <td><?php echo (getFiled('Q6Wa1S3', $schoolUserID) != "") ? getFiled('Q6Wa1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Wet waste from classrooms etc.</td>
            <td><?php echo (getFiled('Q6Wa1S4', $schoolUserID) != "") ? getFiled('Q6Wa1S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste </td>
            <td><?php echo (getFiled('Q6Wa1S5', $schoolUserID) != "") ? getFiled('Q6Wa1S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste generation (a):</td>
            <td><?php echo (getFiled('Q6Wa1S6', $schoolUserID) != "") ? getFiled('Q6Wa1S6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">B: Dry/recyclable waste</strong>
        <table class="table ">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Plastic</td>
            <td><?php echo (getFiled('Q6Wa2S1', $schoolUserID) != "") ? getFiled('Q6Wa2S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Paper </td>
            <td><?php echo (getFiled('Q6Wa2S2', $schoolUserID) != "") ? getFiled('Q6Wa2S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Wood or classroom furniture </td>
            <td><?php echo (getFiled('Q6Wa2S3', $schoolUserID) != "") ? getFiled('Q6Wa2S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Glass</td>
            <td><?php echo (getFiled('Q6Wa2S4', $schoolUserID) != "") ? getFiled('Q6Wa2S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Metal </td>
            <td><?php echo (getFiled('Q6Wa2S5', $schoolUserID) != "") ? getFiled('Q6Wa2S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Thermocol</td>
            <td><?php echo (getFiled('Q6Wa2S6', $schoolUserID) != "") ? getFiled('Q6Wa2S6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Tetra packs</td>
            <td><?php echo (getFiled('Q6Wa2S7', $schoolUserID) != "") ? getFiled('Q6Wa2S7', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste</td>
            <td><?php echo (getFiled('Q6Wa2S8', $schoolUserID) != "") ? getFiled('Q6Wa2S8', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste generation (b):</td>
            <td><?php echo (getFiled('Q6Wa2S9', $schoolUserID) != "") ? getFiled('Q6Wa2S9', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">C: Domestic hazardous waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Hazardous and toxic waste (Paints, lab waste, etc)</td>
            <td><?php echo (getFiled('Q6Wa3S1', $schoolUserID) != "") ? getFiled('Q6Wa3S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Oil from diesel generator sets </td>
            <td><?php echo (getFiled('Q6Wa3S2', $schoolUserID) != "") ? getFiled('Q6Wa3S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste </td>
            <td><?php echo (getFiled('Q6Wa3S3', $schoolUserID) != "") ? getFiled('Q6Wa3S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste generation (c).</td>
            <td><?php echo (getFiled('Q6Wa3S4', $schoolUserID) != "") ? getFiled('Q6Wa3S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">D: E-Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> E-waste</td>
            <td><?php echo (getFiled('Q6Wa4S1', $schoolUserID) != "") ? getFiled('Q6Wa4S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Per capita waste generation (d): </td>
            <td><?php echo (getFiled('Q6Wa4S2', $schoolUserID) != "") ? getFiled('Q6Wa4S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">E: Biomedical waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Biomedical waste such as syringes, band–aids, expired medicines etc.</td>
            <td><?php echo (getFiled('Q6Wa5S1', $schoolUserID) != "") ? getFiled('Q6Wa5S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Per capita waste generation (e): </td>
            <td><?php echo (getFiled('Q6Wa5S2', $schoolUserID) != "") ? getFiled('Q6Wa5S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">F: Sanitary waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Sanitary waste</td>
            <td><?php echo (getFiled('Q6Wa6S1', $schoolUserID) != "") ? getFiled('Q6Wa6S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Per capita waste generation (f): </td>
            <td><?php echo (getFiled('Q6Wa6S2', $schoolUserID) != "") ? getFiled('Q6Wa6S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">G: C & D Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL GENERATE?</th>
            <th>Quantity of solid waste generated(monthly average in kg) </th>
          </tr>
          <tr>
            <td> Construction and demolition waste</td>
            <td><?php echo (getFiled('Q6Wa7S1', $schoolUserID) != "") ? getFiled('Q6Wa7S1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Per capita waste generation (f): </td>
            <td><?php echo (getFiled('Q6Wa7S2', $schoolUserID) != "") ? getFiled('Q6Wa7S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <?php
        if (!empty($solidWaste)) {
            ?>
        <div>
          <table class="table">
            <tr>
              <th>image</th>
              <th>File name</th>
            </tr>
            <?php foreach ($solidWaste as $a) { 

               $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
              <td><?php $solidWaste =  str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_Weighing_Solid_Waste_"), " ", $a->file_name); echo wordwrap($solidWaste, 70, '<br />', true);?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php } else { ?>
        <div class="support_files">No documents uploaded by the school.</div>
        <?php } ?>
         
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 4: How much waste does your school treat/recycle?</h3>
    <p><b>To Collect Data:</b> Find out whether your school has any waste recycling facility like compost
      pit, paper recycling machine, etc. If you have a paper recycling unit, the person in charge will
      definitely be recording the input and output from the unit. If the school is selling newspapers or
      bottles or metal scrap to the local waste dealer (kabadiwala), that can also be included in the
      quantity recycled.</p>
    <ul class="list">
      <li>
        <p class="orange"> <span class="cube">4</span><span>Does your school recycle any generated waste? </span> </p>
        <p> <?php echo (getFiled('Q8Wa1', $schoolUserID) != "") ? (getFiled('Q8Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q8Wa1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange">
          <label><span class="cube">4(a)</span><span>Please provide quantity of which is applicable</label><span></p>
        <strong style="font-size:15px;">a. Biodegradable/Wet Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td> Garden/horticulture waste </td>
            <td><?php echo (getFiled('Q8Wa1S1', $schoolUserID) != "") ? getFiled('Q8Wa1S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Kitchen waste—Raw</td>
            <td><?php echo (getFiled('Q8Wa1S2', $schoolUserID) != "") ? getFiled('Q8Wa1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Kitchen waste—Cooked </td>
            <td><?php echo (getFiled('Q8Wa1S3', $schoolUserID) != "") ? getFiled('Q8Wa1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Wet waste from classrooms etc.</td>
            <td><?php echo (getFiled('Q8Wa1S4', $schoolUserID) != "") ? getFiled('Q8Wa1S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste</td>
            <td><?php echo (getFiled('Q8Wa1S5', $schoolUserID) != "") ? getFiled('Q8Wa1S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (a):</td>
            <td><?php echo (getFiled('Q8Wa1S6', $schoolUserID) != "") ? getFiled('Q8Wa1S6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">b. Dry/recyclable waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td> Plastic </td>
            <td><?php echo (getFiled('Q8Wa2S1', $schoolUserID) != "") ? getFiled('Q8Wa2S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Paper</td>
            <td><?php echo (getFiled('Q8Wa2S2', $schoolUserID) != "") ? getFiled('Q8Wa2S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Wood or classroom furniture </td>
            <td><?php echo (getFiled('Q8Wa2S3', $schoolUserID) != "") ? getFiled('Q8Wa2S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Glass</td>
            <td><?php echo (getFiled('Q8Wa2S4', $schoolUserID) != "") ? getFiled('Q8Wa2S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Metal</td>
            <td><?php echo (getFiled('Q8Wa2S5', $schoolUserID) != "") ? getFiled('Q8Wa2S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Thermocol</td>
            <td><?php echo (getFiled('Q8Wa2S6', $schoolUserID) != "") ? getFiled('Q8Wa2S6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Tetra packs</td>
            <td><?php echo (getFiled('Q8Wa2S7', $schoolUserID) != "") ? getFiled('Q8Wa2S7', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste</td>
            <td><?php echo (getFiled('Q8Wa2S8', $schoolUserID) != "") ? getFiled('Q8Wa2S8', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (b):</td>
            <td><?php echo (getFiled('Q8Wa2S9', $schoolUserID) != "") ? getFiled('Q8Wa2S9', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">c. Domestic hazardous waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td> Hazardous and toxic waste(Paints, lab waste, etc) </td>
            <td><?php echo (getFiled('Q8Wa3S1', $schoolUserID) != "") ? getFiled('Q8Wa3S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Oil from DG sets </td>
            <td><?php echo (getFiled('Q8Wa3S2', $schoolUserID) != "") ? getFiled('Q8Wa3S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total amount of waste </td>
            <td><?php echo (getFiled('Q8Wa3S3', $schoolUserID) != "") ? getFiled('Q8Wa3S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (c).</td>
            <td><?php echo (getFiled('Q8Wa3S4', $schoolUserID) != "") ? getFiled('Q8Wa3S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">d. E-Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td> E-waste </td>
            <td><?php echo (getFiled('Q8Wa4S1', $schoolUserID) != "") ? getFiled('Q8Wa4S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (d): </td>
            <td><?php echo (getFiled('Q8Wa4S2', $schoolUserID) != "") ? getFiled('Q8Wa4S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">e. Biomedical waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td>Biomedical waste such as syringes, band–aids, expired medicines etc. </td>
            <td><?php echo (getFiled('Q8Wa5S1', $schoolUserID) != "") ? getFiled('Q8Wa5S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (e): </td>
            <td><?php echo (getFiled('Q8Wa5S2', $schoolUserID) != "") ? getFiled('Q8Wa5S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">f. Sanitary waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td>Sanitary waste </td>
            <td><?php echo (getFiled('Q8Wa6S1', $schoolUserID) != "") ? getFiled('Q8Wa6S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (f): </td>
            <td><?php echo (getFiled('Q8Wa6S2', $schoolUserID) != "") ? getFiled('Q8Wa6S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <strong style="font-size:15px;">g. C &amp; D Waste</strong>
        <table class="table">
          <thead>
          </thead>
          <tr>
            <th> HOW MUCH WASTE DOES YOUR SCHOOL REUSE/RECYCLE? </th>
            <th>Quantity of solid waste reuse/recycled (monthly average in kg) </th>
          </tr>
          <tr>
            <td>Construction and demolition waste </td>
            <td><?php echo (getFiled('Q8Wa7S1', $schoolUserID) != "") ? getFiled('Q8Wa7S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Per capita waste reused/recycled (g): </td>
            <td><?php echo (getFiled('Q8Wa7S2', $schoolUserID) != "") ? getFiled('Q8Wa7S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <?php endif; ?>
    </ul>
  </div>
  <ul class="list">
    <li>
      <p class="orange">
        <label><span class="cube">5</span><span>Does your school have a composting facility?</label></span> </p>
      <p> <?php echo (getFiled('Q9Wa1', $schoolUserID) != "") ? (getFiled('Q9Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>

<p class="orange" style="font-size: 16px;">Please upload supporting documents</p>

  <?php
       
        if (!empty($composingPit)) {
            ?>
    <div>
      <table  class="table">
        <tr>
          <th>Image</th>
          <th>File Name</th>
        </tr>
        <?php foreach ($composingPit as $a) { 

           $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
          <td><?php $composingPit =  str_replace(str_replace(' ', '_', $school[0]->name . "_Composting_Pit_"), " ", $a->file_name); echo wordwrap($composingPit, 70, '<br />', true);?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files">No documents uploaded by the school. </div>
    <?php } ?>


    </li>
    <?php if(strcmp(getFiled('Q9Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange">
        <label><span class="cube">5(a)</span><span>What is the methodology used?</label>
      </span></p>
      <p class="formanswertext">
        <?php
        if (getFiled('Q9Wa2S1', $schoolUserID) == 1):
            echo "Natural composting without added microbes";
            echo "<br/>";
        endif;
        if (getFiled('Q9Wa2S2', $schoolUserID) == 1):
            echo "Vermi composting";
            echo "<br/>";
        endif;
        if (getFiled('Q9Wa2S3', $schoolUserID) == 1):
            echo "Mechanical composting";
            echo "<br/>";
        endif;
        if (getFiled('Q9Wa2S4', $schoolUserID) == 1):
            echo " Other: &nbsp;";
            echo "<br/>";
        endif;
        ?>
      </p>
    </li>
    <li>
      <p class="orange">
        <label for="username"><span class="cube">5(b)</span><span>What is the quantity of compost that is generated per month (in kilogram)?</label></span>
      </p>
      <p class="formanswertext"><?php echo (getFiled('Q9Wa3', $schoolUserID) != "") ? getFiled('Q9Wa3', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">5(c)</span><span>What is the purpose of the compost that is generated per month? </label></span>
      </p>
      <p class="formanswertext">
        <?php
    if (getFiled('Q9Wa4S1', $schoolUserID) == 1):
        echo "For horticultural purposes";
        echo "<br/>";
    endif;
    if (getFiled('Q9Wa4S2', $schoolUserID) == 1):
        echo "For school garden";
        echo "<br/>";
    endif;
    if (getFiled('Q9Wa4S3', $schoolUserID) == 1):
        echo "For sale";
        echo "<br/>";
    endif;
    if (getFiled('Q9Wa4S4', $schoolUserID) == 1):
        echo "For charity";
        echo "<br/>";
    endif;
    ?>
      </p>
    </li>
    <?php endif; ?>
    <li>
      <p class="orange">
        <label><span class="cube">6</span><span>Does your school encourage students &amp; teachers to reuse textbooks? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#chomp" target="_blank"></a></label></span>
      </p>
      <p class="formanswertext"> <?php echo (getFiled('Q10Wa1', $schoolUserID) != "") ? (getFiled('Q10Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">7</span>Please fill the table to understand whether waste recycling procedures are applied to waste. <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#whatWeDo" target="_blank"> </a></label>
      </p>
      <table class="table">
        <tr>
          <td> Category of waste </td>
          <td> Local scrap collector (kabadiwala) </td>
          <td> Authorized dealer </td>
          <td> Dumped at a designated community site </td>
          <td> Internal procedure </td>
        </tr>
        <tr>
          <td> Paper </td>
          <td><?php
                if (getFiled('Q11Wa1S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
          </td>
          <td><?php
                if (getFiled('Q11Wa1S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
          </td>
          <td><?php
                if (getFiled('Q11Wa1S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
          </td>
          <td><?php
                if (getFiled('Q11Wa1S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
          </td>
        </tr>
        <tr>
          <td> Plastic </td>
          <td><?php
                if (getFiled('Q11Wa2S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
          </td>
          <td><?php
                if (getFiled('Q11Wa2S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa2S2" type="checkbox" name="Q11Wa2S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa2S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa2S3" type="checkbox" name="Q11Wa2S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa2S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa2S4" type="checkbox" name="Q11Wa2S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> Horticultural waste </td>
          <td><?php
                if (getFiled('Q11Wa3S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa3S1" type="checkbox" name="Q11Wa3S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa3S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa3S2" type="checkbox" name="Q11Wa3S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa3S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa3S3" type="checkbox" name="Q11Wa3S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa3S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!-- <input class="form-control space-textbox" id="Q11Wa3S4" type="checkbox" name="Q11Wa3S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> E-waste </td>
          <td><?php
                if (getFiled('Q11Wa4S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa4S1" type="checkbox" name="Q11Wa4S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa4S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!-- <input class="form-control space-textbox" id="Q11Wa4S2" type="checkbox" name="Q11Wa4S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa4S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!-- <input class="form-control space-textbox" id="Q11Wa4S3" type="checkbox" name="Q11Wa4S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa4S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa4S4" type="checkbox" name="Q11Wa4S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> Hazardous waste </td>
          <td><?php
                if (getFiled('Q11Wa5S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa5S1" type="checkbox" name="Q11Wa5S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa5S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa5S2" type="checkbox" name="Q11Wa5S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa5S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa5S3" type="checkbox" name="Q11Wa5S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa5S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa5S4" type="checkbox" name="Q11Wa5S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> Wood, glass, metal </td>
          <td><?php
                if (getFiled('Q11Wa6S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa6S1" type="checkbox" name="Q11Wa6S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa6S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa6S2" type="checkbox" name="Q11Wa6S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa6S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa6S3" type="checkbox" name="Q11Wa6S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa6S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!-- <input class="form-control space-textbox" id="Q11Wa6S4" type="checkbox" name="Q11Wa6S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> Biomedical waste </td>
          <td><?php
                if (getFiled('Q11Wa7S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa7S1" type="checkbox" name="Q11Wa7S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa7S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa7S2" type="checkbox" name="Q11Wa7S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa7S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa7S3" type="checkbox" name="Q11Wa7S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa7S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!-- <input class="form-control space-textbox" id="Q11Wa7S4" type="checkbox" name="Q11Wa7S4" value="1">-->
          </td>
        </tr>
        <tr>
          <td> Others </td>
          <td><?php
                if (getFiled('Q11Wa8S1', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa8S1" type="checkbox" name="Q11Wa8S1" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa8S2', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa8S2" type="checkbox" name="Q11Wa8S2" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa8S3', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa8S3" type="checkbox" name="Q11Wa8S3" value="1">-->
          </td>
          <td><?php
                if (getFiled('Q11Wa8S4', $schoolUserID) == 1):
                    echo "1";
                else:
                    echo "0";
                endif;
                ?>
            <!--<input class="form-control space-textbox" id="Q11Wa8S4" type="checkbox" name="Q11Wa8S4" value="1">-->
          </td>
        </tr>
      </table>
    </li>
  </ul>
  <?php
    if (!empty($recycleMachine)) {
        ?>
  <div>
    <table class="table">
      <tr>
        <th>image</th>
        <th>File name</th>
      </tr>
      <?php foreach ($recycleMachine as $a) { 

         $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
        <td><?php $recycleMachine =  str_replace(str_replace(' ', '_', $school[0]->name . "_Recycling_Machine_"), " ", $a->file_name); echo wordwrap($recycleMachine, 70, '<br />', true);?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> No documents uploaded by the school.</div>
  <?php } ?>
  <ul class="list">
    <li>
      <p class="orange">
        <label><span class="cube">8</span><span>Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.</span></label>
      </p>
      <table class="table">
        <tr>
          <td> Item </td>
          <td> BEE star rating </td>
          <td> Working condition </td>
          <td> Non-working condition </td>
          <td> Total no. of items </td>
        </tr>
        <tr>
          <td> TVs </td>
          <td><?php echo (getFiled('Q12Wa1S1', $schoolUserID) != "") ? getFiled('Q12Wa1S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa1S2', $schoolUserID) != "") ? getFiled('Q12Wa1S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa1S3', $schoolUserID) != "") ? getFiled('Q12Wa1S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa1S4', $schoolUserID) != "") ? getFiled('Q12Wa1S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> VCR or DVD players </td>
          <td><?php echo (getFiled('Q12Wa2S1', $schoolUserID) != "") ? getFiled('Q12Wa2S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa2S2', $schoolUserID) != "") ? getFiled('Q12Wa2S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa2S3', $schoolUserID) != "") ? getFiled('Q12Wa2S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa2S4', $schoolUserID) != "") ? getFiled('Q12Wa2S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Refrigerators and freezers </td>
          <td><?php echo (getFiled('Q12Wa3S1', $schoolUserID) != "") ? getFiled('Q12Wa3S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa3S2', $schoolUserID) != "") ? getFiled('Q12Wa3S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa3S3', $schoolUserID) != "") ? getFiled('Q12Wa3S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa3S4', $schoolUserID) != "") ? getFiled('Q12Wa3S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Washing machines </td>
          <td><?php echo (getFiled('Q12Wa4S1', $schoolUserID) != "") ? getFiled('Q12Wa4S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa4S2', $schoolUserID) != "") ? getFiled('Q12Wa4S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa4S3', $schoolUserID) != "") ? getFiled('Q12Wa4S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa4S4', $schoolUserID) != "") ? getFiled('Q12Wa4S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Air conditioners </td>
          <td><?php echo (getFiled('Q12Wa5S1', $schoolUserID) != "") ? getFiled('Q12Wa5S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa5S2', $schoolUserID) != "") ? getFiled('Q12Wa5S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa5S3', $schoolUserID) != "") ? getFiled('Q12Wa5S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa5S4', $schoolUserID) != "") ? getFiled('Q12Wa5S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Heaters </td>
          <td><?php echo (getFiled('Q12Wa6S1', $schoolUserID) != "") ? getFiled('Q12Wa6S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa6S2', $schoolUserID) != "") ? getFiled('Q12Wa6S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa6S3', $schoolUserID) != "") ? getFiled('Q12Wa6S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa6S4', $schoolUserID) != "") ? getFiled('Q12Wa6S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Microwaves </td>
          <td><?php echo (getFiled('Q12Wa7S1', $schoolUserID) != "") ? getFiled('Q12Wa7S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa7S2', $schoolUserID) != "") ? getFiled('Q12Wa7S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa7S3', $schoolUserID) != "") ? getFiled('Q12Wa7S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa7S4', $schoolUserID) != "") ? getFiled('Q12Wa7S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Ovens </td>
          <td><?php echo (getFiled('Q12Wa8S1', $schoolUserID) != "") ? getFiled('Q12Wa8S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa8S2', $schoolUserID) != "") ? getFiled('Q12Wa8S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa8S3', $schoolUserID) != "") ? getFiled('Q12Wa8S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa8S4', $schoolUserID) != "") ? getFiled('Q12Wa8S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Toasters </td>
          <td><?php echo (getFiled('Q12Wa9S1', $schoolUserID) != "") ? getFiled('Q12Wa9S1', $schoolUserID) : "N/A"; ?>
            <!--  <input class="form-control space-textbox" onkeyup="computeItems()" id="Q12Wa9S1" type="number" name="Q12Wa9S1" placeholder="" value="">-->
          </td>
          <td><?php echo (getFiled('Q12Wa9S2', $schoolUserID) != "") ? getFiled('Q12Wa9S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa9S3', $schoolUserID) != "") ? getFiled('Q12Wa9S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa9S4', $schoolUserID) != "") ? getFiled('Q12Wa9S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Electric kettles </td>
          <td><?php echo (getFiled('Q12Wa10S1', $schoolUserID) != "") ? getFiled('Q12Wa10S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa10S2', $schoolUserID) != "") ? getFiled('Q12Wa10S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa10S3', $schoolUserID) != "") ? getFiled('Q12Wa10S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa10S4', $schoolUserID) != "") ? getFiled('Q12Wa10S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Personal computers (CPU, mouse, screen and keyboard included) </td>
          <td><?php echo (getFiled('Q12Wa11S1', $schoolUserID) != "") ? getFiled('Q12Wa11S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa11S2', $schoolUserID) != "") ? getFiled('Q12Wa11S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa11S3', $schoolUserID) != "") ? getFiled('Q12Wa11S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa11S4', $schoolUserID) != "") ? getFiled('Q12Wa11S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Laptop computer (CPU, mouse, screen and keyboard included) </td>
          <td><?php echo (getFiled('Q12Wa12S1', $schoolUserID) != "") ? getFiled('Q12Wa12S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa12S2', $schoolUserID) != "") ? getFiled('Q12Wa12S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa12S3', $schoolUserID) != "") ? getFiled('Q12Wa12S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa12S4', $schoolUserID) != "") ? getFiled('Q12Wa12S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Notebook computers </td>
          <td><?php echo (getFiled('Q12Wa13S1', $schoolUserID) != "") ? getFiled('Q12Wa13S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa13S2', $schoolUserID) != "") ? getFiled('Q12Wa13S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa13S3', $schoolUserID) != "") ? getFiled('Q12Wa13S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa13S4', $schoolUserID) != "") ? getFiled('Q12Wa13S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Notepad computers </td>
          <td><?php echo (getFiled('Q12Wa14S1', $schoolUserID) != "") ? getFiled('Q12Wa14S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa14S2', $schoolUserID) != "") ? getFiled('Q12Wa14S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa14S3', $schoolUserID) != "") ? getFiled('Q12Wa14S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa14S4', $schoolUserID) != "") ? getFiled('Q12Wa14S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Printers </td>
          <td><?php echo (getFiled('Q12Wa15S1', $schoolUserID) != "") ? getFiled('Q12Wa15S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa15S2', $schoolUserID) != "") ? getFiled('Q12Wa15S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa15S3', $schoolUserID) != "") ? getFiled('Q12Wa15S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa15S4', $schoolUserID) != "") ? getFiled('Q12Wa15S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Copying equipment (photocopiers) </td>
          <td><?php echo (getFiled('Q12Wa16S1', $schoolUserID) != "") ? getFiled('Q12Wa16S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa16S2', $schoolUserID) != "") ? getFiled('Q12Wa16S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa16S3', $schoolUserID) != "") ? getFiled('Q12Wa16S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa16S4', $schoolUserID) != "") ? getFiled('Q12Wa16S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Projectors </td>
          <td><?php echo (getFiled('Q12Wa17S1', $schoolUserID) != "") ? getFiled('Q12Wa17S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa17S2', $schoolUserID) != "") ? getFiled('Q12Wa17S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa17S3', $schoolUserID) != "") ? getFiled('Q12Wa17S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa17S4', $schoolUserID) != "") ? getFiled('Q12Wa17S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Whiteboards </td>
          <td><?php echo (getFiled('Q12Wa18S1', $schoolUserID) != "") ? getFiled('Q12Wa18S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa18S2', $schoolUserID) != "") ? getFiled('Q12Wa18S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa18S3', $schoolUserID) != "") ? getFiled('Q12Wa18S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa18S4', $schoolUserID) != "") ? getFiled('Q12Wa18S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Electrical and electronic typewriters </td>
          <td><?php echo (getFiled('Q12Wa19S1', $schoolUserID) != "") ? getFiled('Q12Wa19S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa19S2', $schoolUserID) != "") ? getFiled('Q12Wa19S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa19S3', $schoolUserID) != "") ? getFiled('Q12Wa19S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa19S4', $schoolUserID) != "") ? getFiled('Q12Wa19S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Pocket and desk calculators </td>
          <td><?php echo (getFiled('Q12Wa20S1', $schoolUserID) != "") ? getFiled('Q12Wa20S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa20S2', $schoolUserID) != "") ? getFiled('Q12Wa20S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa20S3', $schoolUserID) != "") ? getFiled('Q12Wa20S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa20S4', $schoolUserID) != "") ? getFiled('Q12Wa20S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Fax machines </td>
          <td><?php echo (getFiled('Q12Wa21S1', $schoolUserID) != "") ? getFiled('Q12Wa21S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa21S2', $schoolUserID) != "") ? getFiled('Q12Wa21S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa21S3', $schoolUserID) != "") ? getFiled('Q12Wa21S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa21S4', $schoolUserID) != "") ? getFiled('Q12Wa21S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Telex </td>
          <td><?php echo (getFiled('Q12Wa22S1', $schoolUserID) != "") ? getFiled('Q12Wa22S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa22S2', $schoolUserID) != "") ? getFiled('Q12Wa22S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa22S3', $schoolUserID) != "") ? getFiled('Q12Wa22S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa22S4', $schoolUserID) != "") ? getFiled('Q12Wa22S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Telephones </td>
          <td><?php echo (getFiled('Q12Wa23S1', $schoolUserID) != "") ? getFiled('Q12Wa23S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa23S2', $schoolUserID) != "") ? getFiled('Q12Wa23S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa23S3', $schoolUserID) != "") ? getFiled('Q12Wa23S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa23S4', $schoolUserID) != "") ? getFiled('Q12Wa23S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Pay telephones </td>
          <td><?php echo (getFiled('Q12Wa24S1', $schoolUserID) != "") ? getFiled('Q12Wa24S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa24S2', $schoolUserID) != "") ? getFiled('Q12Wa24S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa24S3', $schoolUserID) != "") ? getFiled('Q12Wa24S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa24S4', $schoolUserID) != "") ? getFiled('Q12Wa24S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Mobiles </td>
          <td><?php echo (getFiled('Q12Wa25S1', $schoolUserID) != "") ? getFiled('Q12Wa25S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa25S2', $schoolUserID) != "") ? getFiled('Q12Wa25S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa25S3', $schoolUserID) != "") ? getFiled('Q12Wa25S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa25S4', $schoolUserID) != "") ? getFiled('Q12Wa25S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Answering systems </td>
          <td><?php echo (getFiled('Q12Wa26S1', $schoolUserID) != "") ? getFiled('Q12Wa26S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa26S2', $schoolUserID) != "") ? getFiled('Q12Wa26S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa26S3', $schoolUserID) != "") ? getFiled('Q12Wa26S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa26S4', $schoolUserID) != "") ? getFiled('Q12Wa26S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Induction cookers </td>
          <td><?php echo (getFiled('Q12Wa27S1', $schoolUserID) != "") ? getFiled('Q12Wa27S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa27S2', $schoolUserID) != "") ? getFiled('Q12Wa27S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa27S3', $schoolUserID) != "") ? getFiled('Q12Wa27S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa27S4', $schoolUserID) != "") ? getFiled('Q12Wa27S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td> Geysers/water heaters </td>
          <td><?php echo (getFiled('Q12Wa28S1', $schoolUserID) != "") ? getFiled('Q12Wa28S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa28S2', $schoolUserID) != "") ? getFiled('Q12Wa28S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa28S3', $schoolUserID) != "") ? getFiled('Q12Wa28S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q12Wa28S4', $schoolUserID) != "") ? getFiled('Q12Wa28S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
      </table>
    </li>
    <li>
      <?php if (!empty($eWaste)) { ?>
      <table class="table">
        <tr>
          <th>Image</th>
          <th>File Name</th>
        </tr>
        <?php foreach ($eWaste as $a) { 

           $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
          <td><?php $eWaste =  str_replace(str_replace(' ', '_', $school[0]->name . "_E-Waste_"), " ", $a->file_name); echo wordwrap($eWaste, 70, '<br />', true);?></td>
        </tr>
        <?php } ?>
      </table>
      <?php } else { ?>
      <div class="support_files">No documents uploaded by the school.</div>
      <?php } ?>
    </li>
  </ul>
  <ul class="list">
    <li>
      <p class="orange"> <span class="cube">9</span><span>Do you know that your e-waste can be collected by an authorized dealer or dismantler? </span> </p>
      <p> <?php echo (getFiled('Q13Wa1', $schoolUserID) != "") ? (getFiled('Q13Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(strcmp(getFiled('Q13Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"> <span class="cube">9(a)</span><span>Who collects your e-waste, when not in working condition? </span></p>
      <p>
        <?php
    if (getFiled('Q13Wa2', $schoolUserID) == 1):
        echo "Kabadiwalla/ Scrapdealer";
    elseif (getFiled('Q13Wa2', $schoolUserID) == 2):
        echo "Taken back by manufacturer/vendor";
    elseif (getFiled('Q13Wa2', $schoolUserID) == 3):
        echo " Authorised dealer";
    elseif (getFiled('Q13Wa2', $schoolUserID) == 4):
        echo " Authorised dismantler";
    elseif (getFiled('Q13Wa2O', $schoolUserID) == 4):
        echo getFiled('Q13Wa2O', $schoolUserID);
    endif;
    ?>
      </p>
    </li>
    <?php endif; ?>
    <li>
      <?php if (!empty($authorised_dealer)) { ?>
      <table class="table">
        <tr>
          <th>Image</th>
          <th>File Name</th>
        </tr>
        <?php foreach ($authorised_dealer as $a) {

         $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
          <td> <?php $authorised_dealer =  str_replace(str_replace(' ', '_', $school[0]->name . "_E-waste_authorised_dealer_"), " ", $a->file_name); echo wordwrap($authorised_dealer, 70, '<br />', true);?></td>
        </tr>
        <?php } ?>
      </table>
      <?php } else { ?>
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
    </li>
  </ul>
</div>
<div class="task-area">
  <h3 class="task">Task 5: How does your school dispose of waste?</h3>
  <ul class="list">
    <li>
      <p class="orange"><span>10</span><span>What is the final destination for waste from your school that is disposed of externally? </span> </p>
      <p>
        <?php
    if (getFiled('Q14Wa1', $schoolUserID) == 1):
        echo "Open dumping";
    elseif (getFiled('Q14Wa1', $schoolUserID) == 2):
        echo "Designated dumping site (Dhalao)";
    elseif (getFiled('Q14Wa1', $schoolUserID) == 3):
        echo " Landfill Site";
    elseif (getFiled('Q14Wa1', $schoolUserID) == 4):
        echo "Don’t know";

    endif;
    ?>
      </p>
    </li>
    <li>
      <?php
    if (!empty($houseKeeping)) {
        ?>
      <div>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($houseKeeping as $a) { 

             $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
            <td> <?php $houseKeeping =  str_replace(str_replace(' ', '_', $school[0]->name . "_Housekeeping_"), " ", $a->file_name); echo wordwrap($houseKeeping, 70, '<br />', true);?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <?php } else { ?>
      <div class="support_files">No documents uploaded by the school. </div>
      <?php } ?>
    </li>
    <li>
      <p class="orange">
        <label class="control-label"><span class="cube">11</span><span>Does your school burn waste? </label></span>
      </p>
      <p> <?php echo (getFiled('Q15Wa1', $schoolUserID) != "") ? (getFiled('Q15Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <?php
    if (!empty($burningWaste)) {
        ?>
      <div>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($burningWaste as $a) { 

             $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
            <td><?php $burningWaste =  str_replace(str_replace(' ', '_', $school[0]->name . "_Buring_Waste_"), " ", $a->file_name); echo wordwrap($burningWaste, 70, '<br />', true);?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <?php } else { ?>
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
    </li>
    <?php if(strcmp(getFiled('Q15Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"><span>11(a)</span><span>Where does your school burn
        waste? </span></p>
      <p>
        <?php
    if (getFiled('Q15Wa2', $schoolUserID) == 1):
        echo "Inside the school";
    elseif (getFiled('Q15Wa2', $schoolUserID) == 2):
        echo "Outside the school";

    endif;
    ?>
      </p>
    </li>
    <li>
      <p class="orange"><span>11(b)</span><span>What kind of waste is burnt/incinerated? </span></p>
      <p>
        <?php
    if (getFiled('Q15Wa2S1', $schoolUserID) == 1):
        echo " Horticultural";
        echo "<br/>";
    endif;
    if (getFiled('Q15Wa2S2', $schoolUserID) == 1):
        echo "Plastic";
        echo "<br/>";
    endif;
    if (getFiled('Q15Wa2S3', $schoolUserID) == 1):
        echo "Tyres";
        echo "<br/>";
    endif;
    if (getFiled('Q15Wa2S4', $schoolUserID) == 1):
        echo " Paper";
        echo "<br/>";
    endif;
    ?>
      </p>
    </li>
    <?php endif; ?>
    <!--<li>
      <p class="orange"><span>12</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </p>
      <p> <?php //echo (getFiled('Q16Wa1', $schoolUserID) != "") ? (getFiled('Q16Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>-->
  </ul>
</div>
<div class="task-area">
  <h3 class="task">Task 6: School's initiatives.</h3>
  <p>It is important to appreciate the initiatives taken by the management on issues related to waste. The
    management's approach to these issues can be assessed in the following way:
    Seek an appointment with the Chairperson, Manager and Principal of your school and ask them the following
    questions:</p>
  <ul class="list">
    <li>
      <p class="orange"><span>12</span><span>Does the school have a policy on waste? </span></p>
      <p> <?php echo (getFiled('Q17Wa1', $schoolUserID) != "") ? (getFiled('Q17Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
     <li> <br/>
      <p class="orange" style="font-size: 16px;">Please upload supporting documents:</p>
      <?php
    if (!empty($chikoo)) {
        ?>
      <div>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($chikoo as $a) { 

             $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
            <td><?php $chikoo =  str_replace(str_replace(' ', '_', $school[0]->name . "_Waste_Policy_"), " ", $a->file_name); echo wordwrap($chikoo, 70, '<br />', true);?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <?php } else { ?>
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
    </li>
    <li>
      <p class="orange"><span>13</span><span>Are there awareness drives with regard to Reduce,Recycle and Reuse? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation" target="_blank"></a></span></p>
      <p> <?php echo (getFiled('Q18Wa1', $schoolUserID) != "") ? (getFiled('Q18Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
   
    <?php if(getFiled('Q18Wa1', $schoolUserID) == "Y"){ ?>
    <li>
      <p class="orange" style="font-size: 16px;">Please upload supporting documents:</p>
     
      <br/>
      <?php
    if (!empty($Initiatives)) {
        ?>
      <div>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($Initiatives as $a) { 

             $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
            <td><?php $Initiatives =  str_replace(str_replace(' ', '_', $school[0]->name . "_School_Initiatives_"), " ", $a->file_name); echo wordwrap($Initiatives, 70, '<br />', true);?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <?php } else { ?>
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
      <br/>
      <p class="orange"><span>13(a)</span><span>What form do these awareness drives
        take? </span></p>
      <p>
        <?php
     if (getFiled('Q18Wa2S1', $schoolUserID) == 1){
        echo "As part of the curriculum <br/>";}
     if (getFiled('Q18Wa2S2', $schoolUserID) == 1){
        echo " As part of extracurricular activities such as guest lectures <br/>";}
      if (getFiled('Q18Wa2S3', $schoolUserID) == 1){
        echo " By the showcasing of posters and stickers  ";}
  ?>
      </p>
    </li>
    <?php } ?>
    <li>
      <p class="orange"><span>14</span><span>Is the study of the environment integrated into the curriculum? </span></p>
      <p> <?php echo (getFiled('Q19Wa1', $schoolUserID) != "") ? (getFiled('Q19Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <?php if (!empty($teamDoingWaste)) { ?>
      <table  class="table">
        <tr>
          <th>Image</th>
          <th>File Name</th>
        </tr>
        <?php foreach ($teamDoingWaste as $a) { 

        $file_parts = pathinfo($a->file_name);
        $file_extension = $file_parts['extension']; ?>
        <tr>
          <td>
            <?php if($file_extension=="pdf") { ?>
            <img src="assets/img/performance/pdficon.png" lass="img-responsive" width="100" height="100">
          <?php } elseif($file_extension=="docx"){ ?>
             <img src="assets/img/performance/wordicon.png" lass="img-responsive" width="100" height="100">
           <?php }  else {?>
            <img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" />
          <?php } ?>
          </td>
          <td><div class="break-text"><?php $teamDoingWaste =  str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_Doing_Survey_"), " ", $a->file_name); echo wordwrap($teamDoingWaste, 70, '<br />', true);?></div></td>
        </tr>
        <?php } ?>
      </table>
      <?php } else { ?>
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
    </li>
  </ul>
  <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo (getFiled('Q1Wa1S1', $schoolUserID) != "") ? getFiled('Q1Wa1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1Wa1S3', $schoolUserID) != "") ? getFiled('Q1Wa1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1Wa1S2', $schoolUserID) != "") ? getFiled('Q1Wa1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q1Wa2S1', $schoolUserID) != "") ? getFiled('Q1Wa2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1Wa2S3', $schoolUserID) != "") ? getFiled('Q1Wa2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1Wa2S2', $schoolUserID) != "") ? getFiled('Q1Wa2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q1Wa3S1', $schoolUserID) != "") ? getFiled('Q1Wa3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1Wa3S3', $schoolUserID) != "") ? getFiled('Q1Wa3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1Wa3S2', $schoolUserID) != "") ? getFiled('Q1Wa3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
    <p class="orange"><span>Administrative staff:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo (getFiled('Q2Wa1S1', $schoolUserID) != "") ? getFiled('Q2Wa1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2Wa1S3', $schoolUserID) != "") ? getFiled('Q2Wa1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2Wa1S2', $schoolUserID) != "") ? getFiled('Q2Wa1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q2Wa2S1', $schoolUserID) != "") ? getFiled('Q2Wa2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2Wa2S3', $schoolUserID) != "") ? getFiled('Q2Wa2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2Wa2S2', $schoolUserID) != "") ? getFiled('Q2Wa2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q2Wa3S1', $schoolUserID) != "") ? getFiled('Q2Wa3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2Wa3S3', $schoolUserID) != "") ? getFiled('Q2Wa3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2Wa3S2', $schoolUserID) != "") ? getFiled('Q2Wa3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q2Wa4S1', $schoolUserID) != "") ? getFiled('Q2Wa4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2Wa4S3', $schoolUserID) != "") ? getFiled('Q2Wa4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2Wa4S2', $schoolUserID) != "") ? getFiled('Q2Wa4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q2Wa5S1', $schoolUserID) != "") ? getFiled('Q2Wa5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2Wa5S3', $schoolUserID) != "") ? getFiled('Q2Wa5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2Wa5S2', $schoolUserID) != "") ? getFiled('Q2Wa5S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
    <p class="orange"><span>Students:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Grade </th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo (getFiled('Q3Wa1S1', $schoolUserID) != "") ? getFiled('Q3Wa1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa1S2', $schoolUserID) != "") ? getFiled('Q3Wa1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa1S3', $schoolUserID) != "") ? getFiled('Q3Wa1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q3Wa2S1', $schoolUserID) != "") ? getFiled('Q3Wa2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa2S2', $schoolUserID) != "") ? getFiled('Q3Wa2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa2S3', $schoolUserID) != "") ? getFiled('Q3Wa2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q3Wa3S1', $schoolUserID) != "") ? getFiled('Q3Wa3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa3S2', $schoolUserID) != "") ? getFiled('Q3Wa3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa3S3', $schoolUserID) != "") ? getFiled('Q3Wa3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q3Wa4S1', $schoolUserID) != "") ? getFiled('Q3Wa4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa4S2', $schoolUserID) != "") ? getFiled('Q3Wa4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa4S3', $schoolUserID) != "") ? getFiled('Q3Wa4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q3Wa5S1', $schoolUserID) != "") ? getFiled('Q3Wa5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa5S2', $schoolUserID) != "") ? getFiled('Q3Wa5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa5S3', $schoolUserID) != "") ? getFiled('Q3Wa5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>6</td>
        <td><?php echo (getFiled('Q3Wa6S1', $schoolUserID) != "") ? getFiled('Q3Wa6S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa6S2', $schoolUserID) != "") ? getFiled('Q3Wa6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa6S3', $schoolUserID) != "") ? getFiled('Q3Wa6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>7</td>
        <td><?php echo (getFiled('Q3Wa7S1', $schoolUserID) != "") ? getFiled('Q3Wa7S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa7S2', $schoolUserID) != "") ? getFiled('Q3Wa7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa7S3', $schoolUserID) != "") ? getFiled('Q3Wa7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>8</td>
        <td><?php echo (getFiled('Q3Wa8S1', $schoolUserID) != "") ? getFiled('Q3Wa8S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa8S2', $schoolUserID) != "") ? getFiled('Q3Wa8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa8S3', $schoolUserID) != "") ? getFiled('Q3Wa8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>9</td>
        <td><?php echo (getFiled('Q3Wa9S1', $schoolUserID) != "") ? getFiled('Q3Wa9S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa9S2', $schoolUserID) != "") ? getFiled('Q3Wa9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa9S3', $schoolUserID) != "") ? getFiled('Q3Wa9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>10</td>
        <td><?php echo (getFiled('Q3Wa10S1', $schoolUserID) != "") ? getFiled('Q3Wa10S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3Wa10S2', $schoolUserID) != "") ? getFiled('Q3Wa10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3Wa10S3', $schoolUserID) != "") ? getFiled('Q3Wa10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
</div>
</body>
</html>
