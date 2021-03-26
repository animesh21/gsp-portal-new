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
<div class="cover"> <img src="assets/img/images/logo.png" width="436" height="189" class="logo">
  <h1>Responses For Green Schools Programme Audit 2019</h1>
  <div class="school-detail">
    <p><span>School Name:</span><span style="font-size:18px;"><?php echo $school[0]->name; ?></span></p>
    <p><span>Address:</span><span style="font-size:18px;"><?php echo $school[0]->address1; ?></span></p>
    <p><span>Coordinator Name:</span><span style="font-size:18px;"><?php echo $school[0]->coname; ?></span></p>
  </div>
  <div class="address-wrap" style="margin-top: 20px"> <img src="assets/img/images/cover4.png" width="100%" style="margin-top:-60px;">
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
    <p>1. Choose your SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team.</p>                  
    <p>2. With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan.</p>                 
    <p>3. The details of the Action Plan team members will need to be provided in the last section 'The Team'.</p>                   
    <p>4. As a team, study the latest baseline data in comparison to previous years, where applicable.</p>                   
    <p>5. Based on the study, design an Action Plan for SWM in school as per the questions asked in the next section.</p>
    <p>6. The section on Action Plan will open on 23 Dec 2020, and you will only be able to access it once you answer all the questions in the previous sections.</p>
    <p>7. As always, the Action Plan will be submitted online by the school.</p>



    
  </div>
  <div class="col-md-12">
        <?php 
          $schoolId=getSchoolId($this->session->userdata('USER_ID')); 
      $wasteSection=downloadWasteSectionQuestions($schoolId); 
      
     ?>
        <table class="table table-bordered display" style="margin-top: 40px;">
          <tr>
            <td><b>Audit Year</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><b><?php echo !empty($wasteSection[$i]->audit_year)?$wasteSection[$i]->audit_year:"NA"; ?></b></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>1. School segregates solid waste</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->school_segregated_solid_waste)?$wasteSection[$i]->school_segregated_solid_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>2. Composting facility</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->composting_facility)?$wasteSection[$i]->composting_facility:"NA"; ?></td>
            <?php } ?>
          </tr>          
          <tr>
            <td><b>3. Total biodegradable waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_generated)?$wasteSection[$i]->total_biodegradable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>4. Total Dry/recyclable waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_generated)?$wasteSection[$i]->total_dry_recyclable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>5. Total Domestic waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_generated)?$wasteSection[$i]->total_domestic_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>6. E-waste generated (kg/month)<</b>/td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_generated)?$wasteSection[$i]->e_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>7. Biomedical waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_generated)?$wasteSection[$i]->biomedical_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>8. Sanitary Waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_generated)?$wasteSection[$i]->sanitary_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>9. C&D waste generated (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_generated)?$wasteSection[$i]->cd_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>10. Total biodegradable waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_recycled)?$wasteSection[$i]->total_biodegradable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td><b>11. Total Dry/recyclable waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_recycled)?$wasteSection[$i]->total_dry_recyclable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td><b>12. Total Domestic waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_recycled)?$wasteSection[$i]->total_domestic_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td><b>13. E-waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_recycled)?$wasteSection[$i]->e_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td><b>14. Biomedical waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_recycled)?$wasteSection[$i]->biomedical_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td><b>15. Sanitary Waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_recycled)?$wasteSection[$i]->sanitary_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
     <tr>
            <td><b>16. C&D waste recycled (kg/month)</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_recycled)?$wasteSection[$i]->cd_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
    <tr>
            <td><b> 17. Does your school reuse textbooks?</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->reuse_textbooks)?$wasteSection[$i]->reuse_textbooks:"NA"; ?></td>
            <?php } ?>
          </tr>
  <tr>
            <td><b>18. Final destination for waste disposed of externally?</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->what_is_the_final_destination_for_waste_from_your)?$wasteSection[$i]->what_is_the_final_destination_for_waste_from_your:"NA"; ?></td>
            <?php } ?>
          </tr>

    <tr>
            <td><b>19. Does your school burn waste?</b></td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->does_your_school_burn_waste)?$wasteSection[$i]->does_your_school_burn_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
        </table>
    </div>
  <div class="task-area">
    
    <ul class="list" >
      <li>
        <p class="orange" style="padding-top:10px;"><span class="cube">1</span><span>Per capita waste generation in school</span></p> </li>
        <li>
        <p><?php echo (getFiled('Q1B1', $schoolUserID) != "") ? getFiled('Q1B1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>
  </div>

  <div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <h2 class="heading section waste page_break"><img src="assets/img/images/waste.png" width="94" height="94">WASTE</h2>
  <div class="wrapper">
  <div class="task-area">
    <h3 class="task">ACTION PLAN</h3>
    <p><b>Please read the following carefully before answering the questions:</b></p>
    <p>1. GSP Waste Transformers aims at reinforcing the concept of circular economy in schools where the focus is on use, reuse and restoration of materials, rather than linear use and disposal.</p>
    <p>2. The plan by the students will be assessed on the following: feasibility, cost effectiveness, localised to school needs, data clarity, specificity of strategies. Provide data to strengthen your Action Plan.</p>
    <p>3. Descriptive responses will have a character limit, as mentioned for each question below.</p>
    <p>4. Student involvement is essential as school teams who make it to the final round will need to present the plan online to a jury.</p>
    <p>5. Please document all the data and responses at your end in case the GSP team requests it for further clarity.</p>
    
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">1</span><span>Title of the plan: Make sure your title is short, catchy & conveys the idea behind your Action Plan. (Max 150 characters)</span></p> </li>
        <li>
        <p style="padding-top:1px;"><?php echo (getFiled('Q1AP2', $schoolUserID) != "") ? getFiled('Q1AP2', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>
    
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">2</span><span>Area Profile: Where is the nearest dumping site or landfill? What are the prominent waste management issues in the vicinity of the school? (Max 250 characters)</span></p> </li>
        <li>
        <p style="padding-top:1px;"><?php echo (getFiled('Q2AP1', $schoolUserID) != "") ? getFiled('Q2AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>
    
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">3</span><span>What are the existing major solid waste management (SWM) issues in school that need an action plan? (Max 250 characters)</span></p> </li>
        <li>
        <p style="padding-top:1px;"><?php echo (getFiled('Q3AP1', $schoolUserID) != "") ? getFiled('Q3AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>

    <ul class="list">
    <li>
      <p class="orange"><span>4</span><span>In the past years, what was the frequency of waste collection from the school?</span></p>
      <p class="orange"><span>4(a)</span><span>Wet / biodegradable / organic waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP1', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP1', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP1', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP1', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP1', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP1', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>

    <ul class="list">
    <li>
      <p class="orange"><span>4(b)</span><span>Dry / recyclable waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP2', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP2', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP2', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP2', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP2', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP2', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>
    <ul class="list">
    <li>
      <p class="orange"><span>4(c)</span><span>Domestic hazardous waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP3', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP3', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP3', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP3', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP3', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP3', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>
    <ul class="list">
    <li>
      <p class="orange"><span>4(d)</span><span>E-waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP4', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP4', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP4', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP4', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP4', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP4', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>
    <ul class="list">
    <li>
      <p class="orange"><span>4(e)</span><span>Biomedical waste including sanitary waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP5', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP5', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP5', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP5', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP5', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP5', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>
    <ul class="list">
    <li>
      <p class="orange"><span>4(f)</span><span>Construction & Demolition waste</span></p>
      <p class="formanswertext">
        <?php
                        if (getFiled('Q4AP6', $schoolUserID) == 1) {
                            echo "Not Applicable";
                        }
                        if (getFiled('Q4AP6', $schoolUserID) == 2) {
                            echo "Every day";
                        }
                        if (getFiled('Q4AP6', $schoolUserID) == 3) {
                            echo "Twice a week";
                        }
                        if (getFiled('Q4AP6', $schoolUserID) == 4) {
                          echo "Weekly";
                        }
                        if (getFiled('Q4AP6', $schoolUserID) == 5) {
                          echo "Fortnightly";
                        }
                        if (getFiled('Q4AP6', $schoolUserID) == 6) {
                          echo "Monthly";
                        }
                        ?>
      </p>
    </li>
    </ul>


    <ul class="list">
      <li>
        <p class="orange"><span class="cube">5</span><span>What strategies do you propose to improve SWM in the school? (Max 750 characters)</span></p> </li>
        <li>
        <p><?php echo (getFiled('Q5AP1', $schoolUserID) != "") ? getFiled('Q5AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>

    <ul class="list">
      <li>
        <p class="orange"><span class="cube">6</span><span> Is your school a single-use plastic-free zone?</span></p> </li>
        <li>
        <p class="formanswertext"> <?php echo (getFiled('Q6AP1', $schoolUserID) != "") ? (getFiled('Q6AP1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q6AP1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span class="cube">6(a)</span><span> Please mention 2 ways in which plastic ban is ensured. (Max 150 characters)</span></p>
        <p ><?php echo (getFiled('Q6AP11', $schoolUserID) != "") ? getFiled('Q6AP11', $schoolUserID) : "N/A"; ?></p>
      </li>
      <?php endif; ?>
      <?php if(strcmp(getFiled('Q6AP1', $schoolUserID),'N')==0): ?>
      <li>
        <p class="orange"><span class="cube">6(a)</span><span>Please mention 2 specific ways to phase out single-use plastics in school. (Max 150 characters)</span></p>
        <p ><?php echo (getFiled('Q6AP12', $schoolUserID) != "") ? getFiled('Q6AP12', $schoolUserID) : "N/A"; ?></p>
      </li>
      <?php endif; ?>
    
    </ul>
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">7</span><span>How will you ensure student and community involvement in the action plan? Please include curriculum interventions, if any. (Max 250 characters)</span></p> </li>
        <li>
        <p style="padding-top:1px;"><?php echo (getFiled('Q7AP1', $schoolUserID) != "") ? getFiled('Q7AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>

    <ul class="list">
      <li>
        <p class="orange"><span class="cube">8</span><span>Provide 3-5 indicators on which the implementation of the plan will be assessed. Include at least one example of all types of indicators: environmental (estimated quantity of waste reduction; management), infrastructural (minor to major changes), and behavioural (culture of SWM within the school community). (Max 350 characters)</span></p> </li>
        <li>
        <p style="padding-top:5px;"><?php echo (getFiled('Q8AP1', $schoolUserID) != "") ? getFiled('Q8AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>

    <ul class="list">
      <li>
        <p class="orange" style="padding-top:10px"><span class="cube">9</span><span>What are the plan’s estimated costs? (Max 250 characters)</span></p> </li>
        <li>
        <p><?php echo (getFiled('Q9AP1', $schoolUserID) != "") ? getFiled('Q9AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>

    <ul class="list">
      <li>
        <p class="orange"><span class="cube">10</span><span>Please mention two short-term and two long-term benefits of your plan with reference to Q5 above. (Max 250 characters)</span></p> </li>
        <li>
        <p style="padding-top:1px;"><?php echo (getFiled('Q10AP1', $schoolUserID) != "") ? getFiled('Q10AP1', $schoolUserID) : "N/A"; ?></p>
      </li>
    </ul>
    </div>
  </div>

  <div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <h2 class="heading section waste page_break"><img src="assets/img/images/waste.png" width="94" height="94">WASTE</h2>
  <div class="wrapper">
  <div class="task-area">
  <h3 class="task">THE TEAM</h3>
  <p>Please provide the details of the SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team. With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan.</p>
  <p>Please enter the details below carefully as the same will be printed on the digital certificates.</p>
  
  <p class="orange" style="padding-top:10px;"><span>GSP Coordinator:</span></p>

  <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo (getFiled('Q1A1S1', $schoolUserID) != "") ? getFiled('Q1A1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1A1S3', $schoolUserID) != "") ? getFiled('Q1A1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1A1S2', $schoolUserID) != "") ? getFiled('Q1A1S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td><?php echo (getFiled('Q2A1S1', $schoolUserID) != "") ? getFiled('Q2A1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2A1S3', $schoolUserID) != "") ? getFiled('Q2A1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2A1S2', $schoolUserID) != "") ? getFiled('Q2A1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q2A2S1', $schoolUserID) != "") ? getFiled('Q2A2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2A2S3', $schoolUserID) != "") ? getFiled('Q2A2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2A2S2', $schoolUserID) != "") ? getFiled('Q2A2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q2A3S1', $schoolUserID) != "") ? getFiled('Q2A3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2A3S3', $schoolUserID) != "") ? getFiled('Q2A3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2A3S2', $schoolUserID) != "") ? getFiled('Q2A3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q2A4S1', $schoolUserID) != "") ? getFiled('Q2A4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2A4S3', $schoolUserID) != "") ? getFiled('Q2A4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2A4S2', $schoolUserID) != "") ? getFiled('Q2A4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q2A5S1', $schoolUserID) != "") ? getFiled('Q2A5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2A5S3', $schoolUserID) != "") ? getFiled('Q2A5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2A5S2', $schoolUserID) != "") ? getFiled('Q2A5S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td><?php echo (getFiled('Q3A1S1', $schoolUserID) != "") ? getFiled('Q3A1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A1S2', $schoolUserID) != "") ? getFiled('Q3A1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A1S3', $schoolUserID) != "") ? getFiled('Q3A1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q3A2S1', $schoolUserID) != "") ? getFiled('Q3A2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A2S2', $schoolUserID) != "") ? getFiled('Q3A2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A2S3', $schoolUserID) != "") ? getFiled('Q3A2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q3A3S1', $schoolUserID) != "") ? getFiled('Q3A3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A3S2', $schoolUserID) != "") ? getFiled('Q3A3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A3S3', $schoolUserID) != "") ? getFiled('Q3A3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q3A4S1', $schoolUserID) != "") ? getFiled('Q3A4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A4S2', $schoolUserID) != "") ? getFiled('Q3A4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A4S3', $schoolUserID) != "") ? getFiled('Q3A4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q3A5S1', $schoolUserID) != "") ? getFiled('Q3A5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A5S2', $schoolUserID) != "") ? getFiled('Q3A5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A5S3', $schoolUserID) != "") ? getFiled('Q3A5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>6</td>
        <td><?php echo (getFiled('Q3A6S1', $schoolUserID) != "") ? getFiled('Q3A6S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A6S2', $schoolUserID) != "") ? getFiled('Q3A6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A6S3', $schoolUserID) != "") ? getFiled('Q3A6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>7</td>
        <td><?php echo (getFiled('Q3A7S1', $schoolUserID) != "") ? getFiled('Q3A7S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A7S2', $schoolUserID) != "") ? getFiled('Q3A7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A7S3', $schoolUserID) != "") ? getFiled('Q3A7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>8</td>
        <td><?php echo (getFiled('Q3A8S1', $schoolUserID) != "") ? getFiled('Q3A8S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A8S2', $schoolUserID) != "") ? getFiled('Q3A8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A8S3', $schoolUserID) != "") ? getFiled('Q3A8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>9</td>
        <td><?php echo (getFiled('Q3A9S1', $schoolUserID) != "") ? getFiled('Q3A9S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A9S2', $schoolUserID) != "") ? getFiled('Q3A9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A9S3', $schoolUserID) != "") ? getFiled('Q3A9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>10</td>
        <td><?php echo (getFiled('Q3A10S1', $schoolUserID) != "") ? getFiled('Q3A10S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3A10S2', $schoolUserID) != "") ? getFiled('Q3A10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3A10S3', $schoolUserID) != "") ? getFiled('Q3A10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
    </div>
    </div>
</div>
</body>
</html>
