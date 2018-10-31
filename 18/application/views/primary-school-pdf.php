<html>
<head>
<meta charset="utf-8">
<title>Green School Programms Audit Portal</title>
<link href="assets/css/pdf.css" rel="stylesheet">
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

<div class="cover"> <img src="assets/img/images/logo.png" width="436" height="118" class="logo">
  <h1>Responses For Green Schools Programme Audit 2015</h1>
 <div class="school-detail">
    <p><span>School Name:</span> <span><?php echo $school[0]->name; ?></span></p>
    <p><span>Address:</span> <span><?php echo $school[0]->address1; ?></span></p>
    <p><span>Coordinator Name:</span> <span><?php echo $school[0]->coname; ?></span></p>
  </div>
  <div class="address-wrap"> <img src="assets/img/images/cover.png" width="100%">
    <div class="address">
      <p>Green Schools Programme <br/>
        Centre for Science and Environment</p>
      <p>41, Tughlakabad Institutional Area, New Delhi. India - 110062<br/>
        Tel: +91-11 29955124, 29956110, 40616000<br/>
        http://www.greenschoolsprogramme.org/</p>
    </div>
  </div>
</div>
<div class="container">
  <h2 class="heading">School Profile</h2>
  <div class="wrapper">
    <ul class="list">
      
        <li>
		<?php //print_r($school);exit;?>
        <p class="orange"><span>1</span><span>Name of the School / Institution</span></p>
        <p><?php echo $school[0]->name; ?></p>
      </li>
      <li>
         <p class="orange"><span>2</span><span>Address1</span></p>
       <p><?php echo $school[0]->address1; ?></p>
      </li>
	   <li>
         <p class="orange"><span>3</span><span>Address2</span></p>
       <p><?php echo $school[0]->address2; ?></p>
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
        <p><?php  echo $school[0]->pincode; ?></p>
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
          <?php echo (getFiled('Q1S1', $schoolUserID) != '') ? $arr[getFiled('Q1S1', $schoolUserID)] : ""; ?></p>
      </li>
      <li>
         <p class="orange"><span>16</span><span>Category For Your School </span></p>
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
    </ul>
  </div>
</div>
<h2 class="heading page_break">General Questions</h2>
<div class="wrapper">
  <ul class="list">
    <li>
      <p class="orange"><span>1</span><span>How many levels does your school have? Please choose what is applicable.</span></p>
    <p class="formanswertext"> Lowest level of grade:<?php echo getFiled('Q1G1', $schoolUserID);
                    ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Highest level of grade:<?php echo getFiled('Q1G2', $schoolUserID);
                    ?></p>
    </li>
    <li>
      <p class="orange"><span>2</span><span> Is your school single gender or mixed gender?</span></p>
      <p>
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
      <p>
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
	<?php if(getFiled('Q3G1', $schoolUserID)==1): ?>
    <li>
      <p class="orange"><span>3.1</span><span> Select State for Board of Education:</span></p>
      <p><?php echo $school[0]->state_name; ?></p>
    </li>
	<?php endif; ?>
	
    <li>
       <p class="orange"><span>4a</span><span> Total population of the school</span></p>
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
       <p class="orange"><span class="cube">4(b)</span>How many visitors visit your school </p>
      <p><?php echo (getFiled('Q5G1', $schoolUserID) != "") ? getFiled('Q5G1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <!-- <li>
      <p class="orange"><span class="cube">4(c)</span>How many family members stay in the
        school campus? </p>
      <p><?php //echo (getFiled('Q5G2', $schoolUserID) != "") ? getFiled('Q5G2', $schoolUserID) : "N/A"; ?> </p>
    </li> -->
    <li>
      <p class="orange"><span>5</span><span> What is the total number of working days of your school in a year?</span></p>
      <p><?php echo (getFiled('Q6G1', $schoolUserID) != "") ? getFiled('Q6G1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
       <p class="orange"><span>6</span><span> Month(s) in which the GSP audit was carried out?</span></p>
      <p>
        <?php
                        if (getFiled('Q7G1', $schoolUserID) == 1) {
                            echo "Jan" . ",";
                        }
                        if (getFiled('Q7G2', $schoolUserID) == 2) {
                            echo "Feb" . ",";
                        }
                        if (getFiled('Q7G3', $schoolUserID) == 3) {
                            echo "Mar" . ",";
                        }
                        if (getFiled('Q7G4', $schoolUserID) == 4) {
                            echo "April" . ",";
                        }
                        if (getFiled('Q7G5', $schoolUserID) == 5) {
                            echo "May" . ",";
                        }
                        if (getFiled('Q7G6', $schoolUserID) == 6) {
                            echo "June" . ",";
                        }
                        if (getFiled('Q7G7', $schoolUserID) == 7) {
                            echo "July" . ",";
                        }
                        if (getFiled('Q7G8', $schoolUserID) == 8) {
                            echo "Aug" . ",";
                        }
                        if (getFiled('Q7G9', $schoolUserID) == 9) {
                            echo "Sept" . ",";
                        }
                        if (getFiled('Q7G10', $schoolUserID) == 10) {
                            echo "Oct" . ",";
                        }
                        if (getFiled('Q7G11', $schoolUserID) == 11) {
                            echo "Nov" . ",";
                        }
                        if (getFiled('Q7G12', $schoolUserID) == 12) {
                            echo "Dec.", ",";
                        }
                        ?>
      </p>
    </li>
    <li>
      <p class="orange"><span>7</span><span> Where is the school located?</span></p>
      <p>
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
     <p class="orange"><span>8</span> <span>Whether your school is:</span></p>
      <p>
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
  </ul>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section air"><img src="assets/img/images/air.png" width="94" height="94">Air</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Air Audit Team</h3>
    <p> You would require at least five to 10 of your schoolmates in the Air audit team. The teacher
      co-ordinator may be a science or social science teacher, with an interest in air pollution
      issues. Do include the school transport in-charge and the drivers of the school vehicles in your
      audit team.</p>
  </div>
  <p class="orange"><span>Teachers:</span></p>
  <table class="table">
    <tr>
      <th></th>
      <th> First Name </th>
      <th> Last Name </th>
      <th> Email ID </th>
    </tr>
    <tr>
      <td> 1</td>
      <td><?php echo (getFiled('Q1A1S1', $schoolUserID) != "") ? getFiled('Q1A1S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A1S3', $schoolUserID) != "") ? getFiled('Q1A1S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A1S2', $schoolUserID) != "") ? getFiled('Q1A1S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 2</td>
      <td><?php echo (getFiled('Q1A1S2', $schoolUserID) != "") ? getFiled('Q1A2S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A2S3', $schoolUserID) != "") ? getFiled('Q1A2S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A2S2', $schoolUserID) != "") ? getFiled('Q1A2S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 3</td>
      <td><?php echo (getFiled('Q1A3S1', $schoolUserID) != "") ? getFiled('Q1A3S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A3S3', $schoolUserID) != "") ? getFiled('Q1A3S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A3S2', $schoolUserID) != "") ? getFiled('Q1A3S2', $schoolUserID) : "N/A"; ?> </td>
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
      <td> 1</td>
      <td><?php echo (getFiled('Q2A1S1', $schoolUserID) != "") ? getFiled('Q2A1S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A1S3', $schoolUserID) != "") ? getFiled('Q2A1S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q1A1S2', $schoolUserID) != "") ? getFiled('Q2A1S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 2</td>
      <td><?php echo (getFiled('Q2A2S1', $schoolUserID) != "") ? getFiled('Q2A2S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A2S3', $schoolUserID) != "") ? getFiled('Q2A2S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A2S2', $schoolUserID) != "") ? getFiled('Q2A2S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 3</td>
      <td><?php echo (getFiled('Q2A3S1', $schoolUserID) != "") ? getFiled('Q2A3S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A3S3', $schoolUserID) != "") ? getFiled('Q2A3S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A3S2', $schoolUserID) != "") ? getFiled('Q2A3S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 4</td>
      <td><?php echo (getFiled('Q2A4S1', $schoolUserID) != "") ? getFiled('Q2A4S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A4S3', $schoolUserID) != "") ? getFiled('Q2A4S3', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q2A4S2', $schoolUserID) != "") ? getFiled('Q2A4S2', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 5</td>
      <td><?php echo (getFiled('Q2A5S1', $schoolUserID) != "") ? getFiled('Q2A5S1', $schoolUserID) : "N/A"; ?> </td>
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
      <td> 1</td>
      <td><?php echo (getFiled('Q3A1S1', $schoolUserID) != "") ? getFiled('Q3A1S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A1S2', $schoolUserID) != "") ? getFiled('Q3A1S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A1S3', $schoolUserID) != "") ? getFiled('Q3A1S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 2</td>
      <td><?php echo (getFiled('Q3A2S1', $schoolUserID) != "") ? getFiled('Q3A2S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A2S2', $schoolUserID) != "") ? getFiled('Q3A2S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A2S3', $schoolUserID) != "") ? getFiled('Q3A2S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 3</td>
      <td><?php echo (getFiled('Q3A3S1', $schoolUserID) != "") ? getFiled('Q3A3S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A3S2', $schoolUserID) != "") ? getFiled('Q3A3S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A3S3', $schoolUserID) != "") ? getFiled('Q3A3S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 4</td>
      <td><?php echo (getFiled('Q3A4S1', $schoolUserID) != "") ? getFiled('Q3A4S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A4S2', $schoolUserID) != "") ? getFiled('Q3A4S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A4S3', $schoolUserID) != "") ? getFiled('Q3A4S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 5</td>
      <td><?php echo (getFiled('Q3A5S1', $schoolUserID) != "") ? getFiled('Q3A5S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A5S2', $schoolUserID) != "") ? getFiled('Q3A5S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A5S3', $schoolUserID) != "") ? getFiled('Q3A5S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 6</td>
      <td><?php echo (getFiled('Q3A6S1', $schoolUserID) != "") ? getFiled('Q3A6S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A6S2', $schoolUserID) != "") ? getFiled('Q3A6S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A6S3', $schoolUserID) != "") ? getFiled('Q3A6S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 7</td>
      <td><?php echo (getFiled('Q3A7S1', $schoolUserID) != "") ? getFiled('Q3A7S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A7S2', $schoolUserID) != "") ? getFiled('Q3A7S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A7S3', $schoolUserID) != "") ? getFiled('Q3A7S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 8</td>
      <td><?php echo (getFiled('Q3A8S1', $schoolUserID) != "") ? getFiled('Q3A8S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A8S2', $schoolUserID) != "") ? getFiled('Q3A8S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A8S3', $schoolUserID) != "") ? getFiled('Q3A8S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 9</td>
      <td><?php echo (getFiled('Q3A9S1', $schoolUserID) != "") ? getFiled('Q3A9S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A9S2', $schoolUserID) != "") ? getFiled('Q3A9S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A9S3', $schoolUserID) != "") ? getFiled('Q3A9S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
    <tr>
      <td> 10</td>
      <td><?php echo (getFiled('Q3A10S1', $schoolUserID) != "") ? getFiled('Q3A10S1', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A10S2', $schoolUserID) != "") ? getFiled('Q3A10S2', $schoolUserID) : "N/A"; ?> </td>
      <td><?php echo (getFiled('Q3A10S3', $schoolUserID) != "") ? getFiled('Q3A10S3', $schoolUserID) : "N/A"; ?> </td>
    </tr>
  </table>
</div>
<div class="task-area">
  <h3 class="task">Task 2: Are the rooms in your school well-ventilated?</h3>
  <p>* For this exercise, classrooms that are occupied by students regularly should be considered. Do not
    add laboratories or the auditorium.<br>
    * Openings: are there any windows and ventilators which can be opened on regular basis and can be
    opened anytime? <br>
    * This exercise should be done by schools with centrally air conditioning system also. <br>
    * The exercise should be carried out for ten classrooms only. Sample size should have representation
    from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and
    higher secondary. If your school is up to Standard X only, then, at your discretion, you can add a class
    to any tier. <br>
    * This activity is for all schools (non-air-conditioned buildings as well as air-conditioned
    buildings). </p>
</div>
<ul class="list">
  <li>
   <p class="orange"><span>1</span><span>How many classrooms does your school have?</span></p>
    <p><?php echo (getFiled('Q4A1', $schoolUserID) != "") ? getFiled('Q4A1', $schoolUserID) : "N/A"; ?></p>
  </li>
  <li>
   
    <p class="orange"><span>2</span>Are the rooms in your school well-ventilated</span></p>
    <table class="table">
      <tr>
        <td>Total number of classrooms in your school</td>
        <td><?php echo (getFiled('Q5A1', $schoolUserID) != "") ? getFiled('Q5A1', $schoolUserID) : "N/A"; ?></td>
      </tr>
      <tr>
        <td>Total number of well-ventilated classrooms in your school</td>
        <td><?php echo (getFiled('Q5A2', $schoolUserID) != "") ? getFiled('Q5A2', $schoolUserID) : "N/A"; ?></td>
      </tr>
    </table>
  </li>
</ul>
<div class="task-area">
  <h3 class="task">Task 3: How eco-friendly are the vehicles in your school?</h3>
  <p>In this section, you will maintain a record of vehicles used by your school. Two critical parameters
    indicate if your vehicles are eco-friendly. One?type of fuel?is given in the table below.</p>
</div>
<ul class="list">
  <li>
    <p class="orange"><span>3</span><span> What is the ownership used by the vehicles used in your school? Please choose what is applicable? </span></p>
    <p>
      <?php
            if (getFiled('Q6A1', $schoolUserID) == 1):
                echo "School does not use or own vehicles";
            elseif (getFiled('Q6A1', $schoolUserID) == 2):
                echo "School does not use or own vehicles";
            elseif (getFiled('Q6A1', $schoolUserID) == 3):
                echo " School-owned vehicles ";
            elseif (getFiled('Q6A1', $schoolUserID) == 4):
                echo "A combination of school-owned and operator-owned vehicles / private vehicles";
            elseif (getFiled('Q6A1', $schoolUserID) == 5):
                echo "Hired-vehicles (JNV schools)";

            endif;
            ?>
    </p>
  </li>
  
  <?php $dat=getFiled('Q6A1', $schoolUserID); if(($dat)==3 || ($dat)==4 || ($dat)==5){ ?>	
  <li>
    <p class="orange"><span>3a</span><span>Provide details of school-owned motorised vehicles</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th>Buses</th>
        <th>Cars</th>
        <th>Vans</th>
        <th>Others</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>No. of vehicles </td>
        <td><?php echo (getFiled('Q6A2S1B1', $schoolUserID) != "") ? getFiled('Q6A2S1B1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q6A2S1C1', $schoolUserID) != "") ? getFiled('Q6A2S1C1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1V1', $schoolUserID) != "") ? getFiled('Q6A2S1V1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1O1', $schoolUserID) != "") ? getFiled('Q6A2S1O1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1T1', $schoolUserID) != "") ? getFiled('Q6A2S1T1', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>No. of vehicles more than eight years old</td>
        <td><?php echo (getFiled('Q6A2S1B2', $schoolUserID) != "") ? getFiled('Q6A2S1B2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1C2', $schoolUserID) != "") ? getFiled('Q6A2S1C2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1V2', $schoolUserID) != "") ? getFiled('Q6A2S1V2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1O2', $schoolUserID) != "") ? getFiled('Q6A2S1O2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1T2', $schoolUserID) != "") ? getFiled('Q6A2S1T2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>Air conditioned </td>
        <td><?php echo (getFiled('Q6A2S1B3', $schoolUserID) != "") ? getFiled('Q6A2S1B3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1C3', $schoolUserID) != "") ? getFiled('Q6A2S1C3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1V3', $schoolUserID) != "") ? getFiled('Q6A2S1V3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1O3', $schoolUserID) != "") ? getFiled('Q6A2S1O3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1T3', $schoolUserID) != "") ? getFiled('Q6A2S1T3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>Authorised parking available </td>
        <td><?php echo (getFiled('Q6A2S1B5', $schoolUserID) != "") ? getFiled('Q6A2S1B5', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1C5', $schoolUserID) != "") ? getFiled('Q6A2S1C5', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1V5', $schoolUserID) != "") ? getFiled('Q6A2S1V5', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1O5', $schoolUserID) != "") ? getFiled('Q6A2S1O5', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q6A2S1T5', $schoolUserID) != "") ? getFiled('Q6A2S1T5', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
  </li>

  <li>
    <p class="orange"><span>3b</span><span>Specify the type of fuel used by your school vehicles:</span></p>
    <table class="table">
        <tbody>
          <tr class="text-center">
            <td>Type of vehicles</td>
            <td>Diesel</td>
            <td>Petrol</td>
            <td>LPG</td>
            <td>CNG</td>
            <td>Hybrid</td>
            <td>Electric</td>
            <td>Bio Fuel</td>
          </tr>
          <tr>
            <td>Buses</td>
            <td><?php echo (getFiled('Q6A2S3D1', $schoolUserID) != "") ? getFiled('Q6A2S3D1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3P1', $schoolUserID) != "") ? getFiled('Q6A2S3P1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3L1', $schoolUserID) != "") ? getFiled('Q6A2S3L1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3C1', $schoolUserID) != "") ? getFiled('Q6A2S3C1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3E1', $schoolUserID) != "") ?  getFiled('Q6A2S3E1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3H1', $schoolUserID) != "") ? getFiled('Q6A2S3H1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3B1', $schoolUserID) != "") ?  getFiled('Q6A2S3B1', $schoolUserID) : "N/A"; ?> 
          </tr>
          <tr>
            <td>Cars</td>
            <td><?php echo (getFiled('Q6A2S3B1', $schoolUserID) != "") ? getFiled('Q6A2S3B1', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3D2', $schoolUserID) != "") ? getFiled('Q6A2S3D2', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3P2', $schoolUserID) != "") ? getFiled('Q6A2S3P2', $schoolUserID)  : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3L2', $schoolUserID) != "") ?  getFiled('Q6A2S3L2', $schoolUserID)  : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3C2', $schoolUserID) != "") ?  getFiled('Q6A2S3C2', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3E2', $schoolUserID) != "") ?  getFiled('Q6A2S3E2', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3H2', $schoolUserID) != "") ?  getFiled('Q6A2S3H2', $schoolUserID) : "N/A"; ?> 
          </tr>
          <tr>
            <td>Vans</td>
            <td><?php echo (getFiled('Q6A2S3D3', $schoolUserID) != "") ?  getFiled('Q6A2S3D3', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3P3', $schoolUserID) != "") ?  getFiled('Q6A2S3P3', $schoolUserID)  : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3L3', $schoolUserID) != "") ?  getFiled('Q6A2S3L3', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3C3', $schoolUserID) != "") ?  getFiled('Q6A2S3C3', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3E3', $schoolUserID) != "") ?  getFiled('Q6A2S3E3', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3H3', $schoolUserID) != "") ?  getFiled('Q6A2S3H3', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3B3', $schoolUserID) != "") ? getFiled('Q6A2S3B3', $schoolUserID) : "N/A"; ?> 
          </tr>
          <tr>
            <td>Other vehicles</td>
            <td><?php echo (getFiled('Q6A2S3D4', $schoolUserID) != "") ?  getFiled('Q6A2S3D4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3P4', $schoolUserID) != "") ?  getFiled('Q6A2S3P4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3L4', $schoolUserID) != "") ?  getFiled('Q6A2S3L4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3C4', $schoolUserID) != "") ?  getFiled('Q6A2S3C4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3E4', $schoolUserID) != "") ?  getFiled('Q6A2S3E4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3H4', $schoolUserID) != "") ?  getFiled('Q6A2S3H4', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3B4', $schoolUserID) != "") ?  getFiled('Q6A2S3B4', $schoolUserID) : "N/A"; ?> 
          </tr>
          <tr>
            <td>Sub-Total</td>
            <td><?php echo (getFiled('Q6A2S3D5', $schoolUserID) != "") ?  getFiled('Q6A2S3D5', $schoolUserID): "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3P5', $schoolUserID) != "") ?  getFiled('Q6A2S3P5', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3L5', $schoolUserID) != "") ?  getFiled('Q6A2S3L5', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3C5', $schoolUserID) != "") ?  getFiled('Q6A2S3C5', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3E5', $schoolUserID) != "") ?  getFiled('Q6A2S3E5', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3H5', $schoolUserID) != "") ? getFiled('Q6A2S3H5', $schoolUserID) : "N/A"; ?>
            <td><?php echo (getFiled('Q6A2S3B5', $schoolUserID) != "") ?  getFiled('Q6A2S3B5', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </tbody>
      </table>
  </li>
  <?php } ?>
</ul>
<div class="task-area">
  <h3 class="task">Task 4: How do you travel to school every day? </h3>
  <p> To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the
    team should ask individual class monitors to record the commuting practices of his/her classmates and the
    teachers, and forward the data to the audit team. After completing the survey, provide the compiled information
    below.</p>
  <ul class="list">
    <li>
     <p class="orange"><span>4</span><span>How many members of the school community use each type of transport:</span></p>
      <table class="table">
        <tr>
          <td colspan="5"> Sustainable Motorised Vehicles </td>
        </tr>
        <tr>
          <th>Mode of transport</th>
          <th>Students</th>
          <th>Teaching Staff</th>
          <th>Non Teaching Staff</th>
          <th>Total</th>
        </tr>
        <tr>
          <td><label>School bus</label>
          </td>
          <td><?php echo (getFiled('Q7A1S1', $schoolUserID) != "") ? getFiled('Q7A1S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A1S2', $schoolUserID) != "") ? getFiled('Q7A1S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A1S3', $schoolUserID) != "") ? getFiled('Q7A1S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A1S4', $schoolUserID) != "") ? getFiled('Q7A1S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td><label>Public bus</label>
          </td>
          <td><?php echo (getFiled('Q7A2S1', $schoolUserID) != "") ? getFiled('Q7A2S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A2S2', $schoolUserID) != "") ? getFiled('Q7A2S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A2S3', $schoolUserID) != "") ? getFiled('Q7A2S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A2S4', $schoolUserID) != "") ? getFiled('Q7A2S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td><label>School transport (other than bus)</label>
          </td>
          <td><?php echo (getFiled('Q7A3S1', $schoolUserID) != "") ? getFiled('Q7A3S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A3S2', $schoolUserID) != "") ? getFiled('Q7A3S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A3S3', $schoolUserID) != "") ? getFiled('Q7A3S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A3S4', $schoolUserID) != "") ? getFiled('Q7A3S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td><label>Public transport (other than bus)</label>
          </td>
          <td><?php echo (getFiled('Q7A4S1', $schoolUserID) != "") ? getFiled('Q7A4S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A4S2', $schoolUserID) != "") ? getFiled('Q7A4S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A4S3', $schoolUserID) != "") ? getFiled('Q7A4S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A4S4', $schoolUserID) != "") ? getFiled('Q7A4S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td><label>Taxi four-wheeler</label>
          </td>
          <td><?php echo (getFiled('Q7A5S1', $schoolUserID) != "") ? getFiled('Q7A5S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A5S2', $schoolUserID) != "") ? getFiled('Q7A5S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A5S3', $schoolUserID) != "") ? getFiled('Q7A5S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A5S4', $schoolUserID) != "") ? getFiled('Q7A5S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td><label>Taxi three-wheeler</label>
          </td>
          <td><?php echo (getFiled('Q7A6S1', $schoolUserID) != "") ? getFiled('Q7A6S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A6S2', $schoolUserID) != "") ? getFiled('Q7A6S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A6S3', $schoolUserID) != "") ? getFiled('Q7A6S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A6S4', $schoolUserID) != "") ? getFiled('Q7A6S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td colspan="5">4(b)Private Vehicles</td>
        </tr>
        <tr>
          <td>Mode of transport </td>
          <td>Students </td>
          <td>Teaching Staff </td>
          <td>Non-Teaching Staff </td>
          <td>Total> </td>
        </tr>
        <tr>
          <td>Personal four-wheeler </td>
          <td><?php echo getFiled('Q7A7S1', $schoolUserID) ? getFiled('Q7A7S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A7S2', $schoolUserID) != "") ? getFiled('Q7A7S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A7S3', $schoolUserID) != "") ? getFiled('Q7A7S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A7S4', $schoolUserID) != "") ? getFiled('Q7A7S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td>Personal two-wheeler </td>
          <td><?php echo (getFiled('Q7A8S1', $schoolUserID) != "") ? getFiled('Q7A8S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A8S2', $schoolUserID) != "") ? getFiled('Q7A8S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A8S3', $schoolUserID) != "") ? getFiled('Q7A8S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A8S4', $schoolUserID) != "") ? getFiled('Q7A8S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td colspan="5">4(c)Non-Polluting Mode</td>
        </tr>
        <tr>
          <td>Mode of transport</td>
          <td>Students </td>
          <td>Teaching Staff </td>
          <td>Non-Teaching Staff </td>
          <td>Total </td>
        </tr>
        <tr>
          <td>Bicycle </td>
          <td><?php echo (getFiled('Q7A9S1', $schoolUserID) != "") ? getFiled('Q7A9S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A9S2', $schoolUserID) != "") ? getFiled('Q7A9S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A9S3', $schoolUserID) != "") ? getFiled('Q7A9S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A9S4', $schoolUserID) != "") ? getFiled('Q7A9S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td>On foot </td>
          <td><?php echo (getFiled('Q7A10S1', $schoolUserID) != "") ? getFiled('Q7A10S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A10S2', $schoolUserID) != "") ? getFiled('Q7A10S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A10S3', $schoolUserID) != "") ? getFiled('Q7A10S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A10S4', $schoolUserID) != "") ? getFiled('Q7A10S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr>
          <td>Others (non-motorized) </td>
          <td><?php echo (getFiled('Q7A11S1', $schoolUserID) != "") ? getFiled('Q7A11S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A11S2', $schoolUserID) != "") ? getFiled('Q7A11S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A11S3', $schoolUserID) != "") ? getFiled('Q7A11S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A11S4', $schoolUserID) != "") ? getFiled('Q7A11S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
        <tr class="total">
          <td>Sub-Total</td>
          <td><?php echo (getFiled('Q7A12S1', $schoolUserID) != "") ? getFiled('Q7A12S1', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A12S2', $schoolUserID) != "") ? getFiled('Q7A12S2', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A12S3', $schoolUserID) != "") ? getFiled('Q7A12S3', $schoolUserID) : "N/A"; ?></td>
          <td><?php echo (getFiled('Q7A12S4', $schoolUserID) != "") ? getFiled('Q7A12S4', $schoolUserID) : "N/A"; ?></td>
        </tr>
      </table>
    </li>
  </ul>
  <div class="task-area">
    <h3 class="task">Task 5: How good is the air you breathe in your school? </h3>
    <p> The starting point of air quality monitoring is to first study if an area has an air pollution problem.
      Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards
      are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>
  </div>
  <ul class="list">
    <li>
     <p class="orange"><span>5</span><span>How many students suffer from breathing and coughing problems?</span></p>
      <p><?php echo (getFiled('Q8A1', $schoolUserID) != "") ? getFiled('Q8A1', $schoolUserID) : "N/A"; ?></p>
    </li>
  </ul>
  <div class="support_files_head">Supporting Documents</div>
  <label class="support-docs">Please upload supporting documents:</label>
  <p> Picture of Air Quality Monitoring equipment of school<br>
    <br>
    Please upload all supporting documents related to this section here. Note: files must be in one of the
    following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per
    document should not exceed <strong>100 KB.</strong></p>
  <?php
            $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Supporting_Document_Air', $schoolUserID);
            
            if (!empty($arrImages)) {
                ?>
  <div>
    <table class="table support-docs">
      <tr>
        <th>image</th>
        <th>File name</th>
      </tr>
      <?php foreach ($arrImages as $a) { ?>
      <tr>
        <td><img src="uploads/files/<?php echo $a->file_name; ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Supporting_Document_Air"), " ", $a->file_name); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section energy page_break"><img src="assets/img/images/energy.png" width="94" height="94">Energy</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1:Energy Audit Team</h3>
    <p> You would require at least five to 10 of your schoolmates in the Air audit team. The teacher
      co-ordinator may be a science or social science teacher, with an interest in air pollution
      issues. Do include the school transport in-charge and the drivers of the school vehicles in your
      audit team.</p>
    <p class="orange"><span>Teachers:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td> 1</td>
        <td><?php echo (getFiled('Q1E1S1', $schoolUserID) != "") ? getFiled('Q1E1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E1S3', $schoolUserID) != "") ? getFiled('Q1E1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E1S2', $schoolUserID) != "") ? getFiled('Q1E1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q1E2S1', $schoolUserID) != "") ? getFiled('Q1E2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E2S3', $schoolUserID) != "") ? getFiled('Q1E2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E2S2', $schoolUserID) != "") ? getFiled('Q1E2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q1E3S1', $schoolUserID) != "") ? getFiled('Q1E3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E3S3', $schoolUserID) != "") ? getFiled('Q1E3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1E3S2', $schoolUserID) != "") ? getFiled('Q1E3S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td> 1</td>
        <td><?php echo (getFiled('Q2E1S1', $schoolUserID) != "") ? getFiled('Q2E1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E1S3', $schoolUserID) != "") ? getFiled('Q2E1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E1S2', $schoolUserID) != "") ? getFiled('Q2E1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q2E2S1', $schoolUserID) != "") ? getFiled('Q2E2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E2S3', $schoolUserID) != "") ? getFiled('Q2E2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E2S2', $schoolUserID) != "") ? getFiled('Q2E2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q2E3S1', $schoolUserID) != "") ? getFiled('Q2E3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E3S3', $schoolUserID) != "") ? getFiled('Q2E3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E3S2', $schoolUserID) != "") ? getFiled('Q2E3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q2E4S1', $schoolUserID) != "") ? getFiled('Q2E4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E4S3', $schoolUserID) != "") ? getFiled('Q2E4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E4S2', $schoolUserID) != "") ? getFiled('Q2E4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q2E5S1', $schoolUserID) != "") ? getFiled('Q2E5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E5S3', $schoolUserID) != "") ? getFiled('Q2E5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2E5S2', $schoolUserID) != "") ? getFiled('Q2E5S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
    <p class="orange"><span>Students:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td> 1</td>
        <td><?php echo (getFiled('Q3E1S1', $schoolUserID) != "") ? getFiled('Q3E1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E1S2', $schoolUserID) != "") ? getFiled('Q3E1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E1S3', $schoolUserID) != "") ? getFiled('Q3E1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q3E2S1', $schoolUserID) != "") ? getFiled('Q3E2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E2S2', $schoolUserID) != "") ? getFiled('Q3E2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E2S3', $schoolUserID) != "") ? getFiled('Q3E2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q3E3S1', $schoolUserID) != "") ? getFiled('Q3E3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E3S2', $schoolUserID) != "") ? getFiled('Q3E3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E3S3', $schoolUserID) != "") ? getFiled('Q3E3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q3E4S1', $schoolUserID) != "") ? getFiled('Q3E4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E4S2', $schoolUserID) != "") ? getFiled('Q3E4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E4S3', $schoolUserID) != "") ? getFiled('Q3E4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q3E5S1', $schoolUserID) != "") ? getFiled('Q3E5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E5S2', $schoolUserID) != "") ? getFiled('Q3E5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E5S3', $schoolUserID) != "") ? getFiled('Q3E5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 6</td>
        <td><?php echo (getFiled('Q3E6S1', $schoolUserID) != "") ? getFiled('Q3E6S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E6S2', $schoolUserID) != "") ? getFiled('Q3E6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E6S3', $schoolUserID) != "") ? getFiled('Q3E6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 7</td>
        <td><?php echo (getFiled('Q3E7S1', $schoolUserID) != "") ? getFiled('Q3E7S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E7S2', $schoolUserID) != "") ? getFiled('Q3E7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E7S3', $schoolUserID) != "") ? getFiled('Q3E7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 8</td>
        <td><?php echo (getFiled('Q3E8S1', $schoolUserID) != "") ? getFiled('Q3E8S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E8S2', $schoolUserID) != "") ? getFiled('Q3E8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E8S3', $schoolUserID) != "") ? getFiled('Q3E8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 9</td>
        <td><?php echo (getFiled('Q3E9S1', $schoolUserID) != "") ? getFiled('Q3E9S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E9S2', $schoolUserID) != "") ? getFiled('Q3E9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E9S3', $schoolUserID) != "") ? getFiled('Q3E9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 10</td>
        <td><?php echo (getFiled('Q3E10S1', $schoolUserID) != "") ? getFiled('Q3E10S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E10S2', $schoolUserID) != "") ? getFiled('Q3E10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3E10S3', $schoolUserID) != "") ? getFiled('Q3E10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
  </div>
  <div class="task-area">
    <h3 class="task">Task 2: How much energy does your school consume?</h3>
    <p> In this section you will be asked questions related to energy consumption of your school. </p>
    <ul class="list">
      <li>
        <p class="orange"><span>1</span><span> Does your school have access to an electricity bill?</span></p>
        <p><?php echo (getFiled('Q4E1', $schoolUserID) != "") ? (getFiled('Q4E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <h6>Please upload the most recent electricity bill here</h6>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($electricityBills as $f) { ?>
          <tr id="index<?php echo $f->id; ?>">
            <?php $name = str_replace(" ", "_", $f->name . "_Electricity_Bill_"); ?>
            <td><img src="uploads/files/<?php echo $f->file_name; ?>" class="img-thumbnail" style="height:80px;width:80px;"></img></td>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
      <li>
         <p class="orange"><span>2</span><span> Does your school have its own vehicles?</span></p>
        <p><?php echo (getFiled('Q5E1', $schoolUserID) != "") ? (getFiled('Q5E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
         <p class="orange"><span>3</span><span>Provide the details of total energy consumed by the school</span></p>
        <table class="table">
          <tr>
            <th>Source of energy</th>
            <th>Yes/no</th>
         </tr>
          <tr>
            <td>Electricity from the board (kwh)</td>
			<td><?php echo (getFiled('Q6E1', $schoolUserID) != "") ? (getFiled('Q6E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Electricity from generator (diesel) (litres)</td>
            <td><?php echo (getFiled('Q6E2', $schoolUserID) != "") ? (getFiled('Q6E2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Petrol (litres)</td>
            <td><?php echo (getFiled('Q6E3', $schoolUserID) != "") ? (getFiled('Q6E3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Diesel (litres)</td>
            <td><?php echo (getFiled('Q6E4', $schoolUserID) != "") ? (getFiled('Q6E4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>CNG (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E5', $schoolUserID) != "") ? (getFiled('Q6E5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Kerosene (litres)</td>
            <td><?php echo (getFiled('Q6E6', $schoolUserID) != "") ? (getFiled('Q6E6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Coal (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E7', $schoolUserID) != "") ? (getFiled('Q6E7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
         </tr>
          <tr>
            <td>Wood (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E8', $schoolUserID) != "") ? (getFiled('Q6E8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Animal waste (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E9', $schoolUserID) != "") ? (getFiled('Q6E9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Solar (kwh)</td>
            <td><?php echo (getFiled('Q6E10', $schoolUserID) != "") ? (getFiled('Q6E10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
           
          </tr>
          <tr>
            <td>Wind (kwh)</td>
            <td><?php echo (getFiled('Q6E11', $schoolUserID) != "") ? (getFiled('Q6E11', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
           </tr>
          <tr>
            <td>LPG (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E12', $schoolUserID) != "") ? (getFiled('Q6E12', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Piped Natural Gas (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E13', $schoolUserID) != "") ? (getFiled('Q6E13', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
            </tr>
          <tr>
            <td>Biogas</td>
            <td><?php echo (getFiled('Q6E14', $schoolUserID) != "") ? (getFiled('Q6E14', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
           </tr>
       </table>
      </li>
      <li>
        <p class="orange"><span>4</span> What appliances does your school have? </p>
        <table class="table">
          <tr>
            <th>Appliances/Equipments</th>
            <th>Number</th>
            <th>Please do not fill</th>
            <th>Please do not fill</th>
          </tr>
          <tr>
            <td>Air Conditioners</td>
            <td><?php echo (getFiled('Q7E2S1', $schoolUserID) != "") ? getFiled('Q7E2S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E2S2', $schoolUserID) != "") ? getFiled('Q7E2S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E2S3', $schoolUserID) != "") ? getFiled('Q7E2S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Refrigerator</td>
            <td><?php echo (getFiled('Q7E3S1', $schoolUserID) != "") ? getFiled('Q7E3S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E3S2', $schoolUserID) != "") ? getFiled('Q7E3S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E3S3', $schoolUserID) != "") ? getFiled('Q7E3S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Microwave</td>
            <td><?php echo (getFiled('Q7E4S1', $schoolUserID) != "") ? getFiled('Q7E4S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E4S2', $schoolUserID) != "") ? getFiled('Q7E4S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E4S3', $schoolUserID) != "") ? getFiled('Q7E4S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Tube Lights</td>
            <td><?php echo (getFiled('Q7E5S1', $schoolUserID) != "") ? getFiled('Q7E5S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E5S2', $schoolUserID) != "") ? getFiled('Q7E5S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E5S3', $schoolUserID) != "") ? getFiled('Q7E5S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>CFL Bulbs</td>
            <td><?php echo (getFiled('Q7E6S1', $schoolUserID) != "") ? getFiled('Q7E6S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E6S2', $schoolUserID) != "") ? getFiled('Q7E6S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E6S3', $schoolUserID) != "") ? getFiled('Q7E6S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>LED Lights</td>
            <td><?php echo (getFiled('Q7E7S1', $schoolUserID) != "") ? getFiled('Q7E7S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E7S2', $schoolUserID) != "") ? getFiled('Q7E7S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E7S3', $schoolUserID) != "") ? getFiled('Q7E7S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Fans</td>
            <td><?php echo (getFiled('Q7E8S1', $schoolUserID) != "") ? getFiled('Q7E8S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E8S2', $schoolUserID) != "") ? getFiled('Q7E8S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E8S3', $schoolUserID) != "") ? getFiled('Q7E8S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Incandescent bulbs</td>
            <td><?php echo (getFiled('Q7E9S1', $schoolUserID) != "") ? getFiled('Q7E9S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E9S2', $schoolUserID) != "") ? getFiled('Q7E8S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E9S3', $schoolUserID) != "") ? getFiled('Q7E9S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Overhead projectors(smart classroom)</td>
            <td><?php echo (getFiled('Q7E10S1', $schoolUserID) != "") ? getFiled('Q7E10S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E10S2', $schoolUserID) != "") ? getFiled('Q7E8S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q7E10S3', $schoolUserID) != "") ? getFiled('Q7E10S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 3: Is your school using any renewable sources of energy? </h3>
    <ul class="list">
      <li>
        <p class="orange"><span>6</span><span> Are there any alternate sources of energy employed/ installed in your school?</span> </p>
        <p><?php echo (getFiled('Q9E1', $schoolUserID) != "") ? (getFiled('Q9E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q9E1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>6a</span><span> Name the alternate sources of energy employed/ installed in your school?</span></p>
        <p>
          <?php
                $var_answer = "";
                if (getFiled('Q9E1S1', $schoolUserID) == 1) {
                    echo "Solar" . ",";
                }
                if (getFiled('Q9E1S2', $schoolUserID) == 1) {
                    echo "Wind" . ",";
                }
                if (getFiled('Q9E1S3', $schoolUserID) == 1) {
                    echo "Hydro" . ",";
                }
                if (getFiled('Q9E1S4', $schoolUserID) == 1) {
                    echo "Combination of solar and wind" . ",";
                }
                if (getFiled('Q9E1S5', $schoolUserID) == 1) {
                    echo "Biogas Plant";
                }
                ?>
        </p>
      </li>
      <?php endif; ?>
      <li>
       <p class="orange"><span>6</span><span> Does your school use solar water heater:</span></p>
        <p> <?php echo (getFiled('Q10E1', $schoolUserID) != "") ? (getFiled('Q10E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
      </li>
    </ul>
    <div class="support_files_head">Supporting Documents</div>
    <label class="support-docs">Please upload supporting documents:</label>
    <p> •Pictures of audit team doing survey<br>
      Please upload all supporting documents related to this section here. Note, files must be one of the
      following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
      File size per document should not exceed <strong>100 KB.</strong> </p>
    <?php
            $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) .'_Supporting_Document_Energy_', $schoolUserID);
            
            if (!empty($arrImages)) {
                ?>
    <div>
      <table class="table support-docs">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name; ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name .'_Supporting_Document_Energy_'), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section food page_break"><img src="assets/img/images/food.png" width="94" height="94">Food(Primary)</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Food Audit Team</h3>
    <p class="orange"><span>Teachers:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td> 1</td>
        <td><?php echo (getFiled('Q1F1S1', $schoolUserID) != "") ? getFiled('Q1F1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F1S3', $schoolUserID) != "") ? getFiled('Q1F1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F1S2', $schoolUserID) != "") ? getFiled('Q1F1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q1F2S1', $schoolUserID) != "") ? getFiled('Q1F2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F2S3', $schoolUserID) != "") ? getFiled('Q1F2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F2S2', $schoolUserID) != "") ? getFiled('Q1F2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q1F3S1', $schoolUserID) != "") ? getFiled('Q1F3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F3S3', $schoolUserID) != "") ? getFiled('Q1F3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1F3S2', $schoolUserID) != "") ? getFiled('Q1F3S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td> 1</td>
        <td><?php echo (getFiled('Q2F1S1', $schoolUserID) != "") ? getFiled('Q2F1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F1S3', $schoolUserID) != "") ? getFiled('Q2F1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F1S2', $schoolUserID) != "") ? getFiled('Q2F1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q2F2S1', $schoolUserID) != "") ? getFiled('Q2F2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F2S3', $schoolUserID) != "") ? getFiled('Q2F2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F2S2', $schoolUserID) != "") ? getFiled('Q2F2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q2F3S1', $schoolUserID) != "") ? getFiled('Q2F3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F3S3', $schoolUserID) != "") ? getFiled('Q2F3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F3S2', $schoolUserID) != "") ? getFiled('Q2F3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q2F4S1', $schoolUserID) != "") ? getFiled('Q2F4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F4S3', $schoolUserID) != "") ? getFiled('Q2F4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F4S2', $schoolUserID) != "") ? getFiled('Q2F4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q2F5S1', $schoolUserID) != "") ? getFiled('Q2F5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F5S3', $schoolUserID) != "") ? getFiled('Q2F5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2F5S2', $schoolUserID) != "") ? getFiled('Q2F5S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td> 1</td>
        <td><?php echo (getFiled('Q3F1S1', $schoolUserID) != "") ? getFiled('Q3F1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F1S2', $schoolUserID) != "") ? getFiled('Q3F1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F1S3', $schoolUserID) != "") ? getFiled('Q3F1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q3F2S1', $schoolUserID) != "") ? getFiled('Q3F2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F2S2', $schoolUserID) != "") ? getFiled('Q3F2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F2S3', $schoolUserID) != "") ? getFiled('Q3F2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q3F3S1', $schoolUserID) != "") ? getFiled('Q3F3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F3S2', $schoolUserID) != "") ? getFiled('Q3F3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F3S3', $schoolUserID) != "") ? getFiled('Q3F3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q3F4S1', $schoolUserID) != "") ? getFiled('Q3F4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F4S2', $schoolUserID) != "") ? getFiled('Q3F4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F4S3', $schoolUserID) != "") ? getFiled('Q3F4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q3F5S1', $schoolUserID) != "") ? getFiled('Q3F5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F5S2', $schoolUserID) != "") ? getFiled('Q3F5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F5S3', $schoolUserID) != "") ? getFiled('Q3F5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 6</td>
        <td><?php echo (getFiled('Q3F6S1', $schoolUserID) != "") ? getFiled('Q3F6S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F6S2', $schoolUserID) != "") ? getFiled('Q3F6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F6S3', $schoolUserID) != "") ? getFiled('Q3F6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 7</td>
        <td><?php echo (getFiled('Q3F7S1', $schoolUserID) != "") ? getFiled('Q3F7S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F7S2', $schoolUserID) != "") ? getFiled('Q3F7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F7S3', $schoolUserID) != "") ? getFiled('Q3F7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 8</td>
        <td><?php echo (getFiled('Q3F8S1', $schoolUserID) != "") ? getFiled('Q3F8S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F8S2', $schoolUserID) != "") ? getFiled('Q3F8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F8S3', $schoolUserID) != "") ? getFiled('Q3F8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 9</td>
        <td><?php echo (getFiled('Q3E9S1', $schoolUserID) != "") ? getFiled('Q3E9S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F9S2', $schoolUserID) != "") ? getFiled('Q3F9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F9S3', $schoolUserID) != "") ? getFiled('Q3F9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 10</td>
        <td><?php echo (getFiled('Q3F10S1', $schoolUserID) != "") ? getFiled('Q3F10S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F10S2', $schoolUserID) != "") ? getFiled('Q3F10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3F10S3', $schoolUserID) != "") ? getFiled('Q3F10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
  </div>
  <div class="task-area">
    <h3 class="task">Task 2: Find out about the food service in your school.</h3>
    <ul class="list">
      <li>
         <p class="orange"><span>1</span><span> Does your school have a provision/space to sell packaged food items within the campus</span></p>
        <p> <?php echo (getFiled('Q4F1', $schoolUserID) != "") ? (getFiled('Q4F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>2</span><span> Does your school serve midday-meals?</span></p>
        <p><?php echo (getFiled('Q5F1', $schoolUserID) != "") ? (getFiled('Q5F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange">
          <label class="control-label">Please upload picture of Mid-day meal being served</label>
        <p>
       <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($midDayMeal as $f) { ?>
          <tr id="index<?php echo $f->id; ?>">
            <?php $name = str_replace(" ", "_", $f->name . "_Mid_Day_Meal_"); ?>
            <td><img src="<?php echo 'uploads/files/' . $f->file_name ?>" class="img-thumbnail" style="height:80px;width:80px;"></img></td>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
	  
	
	
      <?php if(strcmp(getFiled('Q5F1', $schoolUserID),'N')==0):  ?>
      <li>
        <p class="orange"><span>2(a)</span>Do students bring their own lunch from home?</p>
        <p> <?php echo (getFiled('Q5F1S1', $schoolUserID) != "") ? (getFiled('Q5F1S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
	  
	  
      <?php if(strcmp(getFiled('Q5F1S1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>2a(1)</span> How many students out of total student population bring home-made lunch? </p>
        <p><?php echo (getFiled('Q5F1S2', $schoolUserID) != "") ? getFiled('Q5F1S2', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>2a(2)</span>Of the students who  bring lunch from home, how many bring packaged food?</p>
        <p><?php echo (getFiled('Q5F1S3', $schoolUserID) != "") ? getFiled('Q5F1S3', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>2a(3)</span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</p>
        <p> <?php echo (getFiled('Q5F1S4', $schoolUserID) != "") ? (getFiled('Q5F1S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
	  
	  
	  
	  <?php if(strcmp(getFiled('Q5F1', $schoolUserID),'Y')==0): ?>
	 
	 <li>
        <p class="orange"><span>2(a)</span>If yes, then midday meal is served under:</p>
        <p>
          <?php
		   if(getFiled('Q5F1S1', $schoolUserID)==1):
		   echo "Government Scheme";
		   elseif(getFiled('Q5F1S1', $schoolUserID)==2):
		   echo "School's personal initiative";
		   elseif(getFiled('Q5F1S1', $schoolUserID)==3):
		   echo "Others";
		   endif; 
		   ?>
        </p>
      </li>
	  
      <li>
         <p class="orange"><span>2(b)</span>What kind of food items are served in midday meal?</p>
        <table class="table">
          <tr>
            <td>1</td>
            <td> Rice</td>
            <td><?php echo (getFiled('Q5F2S1', $schoolUserID) != "") ? (getFiled('Q5F2S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>2</td>
            <td> Wheat</td>
            <td><?php echo (getFiled('Q5F2S2', $schoolUserID) != "") ? (getFiled('Q5F2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>3</td>
            <td> Pulses/dal</td>
            <td><?php echo (getFiled('Q5F2S3', $schoolUserID) != "") ? (getFiled('Q5F2S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>4</td>
            <td> Vegetables</td>
            <td><?php echo (getFiled('Q5F2S4', $schoolUserID) != "") ? (getFiled('Q5F2S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>5</td>
            <td> Egg</td>
            <td><?php echo (getFiled('Q5F2S5', $schoolUserID) != "") ? (getFiled('Q5F2S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>6</td>
            <td> Porridge</td>
            <td><?php echo (getFiled('Q5F2S6', $schoolUserID) != "") ? (getFiled('Q5F2S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>7</td>
            <td> Upma</td>
            <td><?php echo (getFiled('Q5F2S7', $schoolUserID) != "") ? (getFiled('Q5F2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>8</td>
            <td> Khichdi</td>
            <td><?php echo (getFiled('Q5F2S8', $schoolUserID) != "") ? (getFiled('Q5F2S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>9</td>
            <td> Curd/butter milk</td>
            <td><?php echo (getFiled('Q5F2S9', $schoolUserID) != "") ? (getFiled('Q5F2S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>10</td>
            <td> Biscuits</td>
            <td><?php echo (getFiled('Q5F2S10', $schoolUserID) != "") ? (getFiled('Q5F2S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>11</td>
            <td> Packaged chips</td>
            <td><?php echo (getFiled('Q5F2S11', $schoolUserID) != "") ? (getFiled('Q5F2S11', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>12</td>
            <td> Bread butter</td>
            <td><?php echo (getFiled('Q5F2S12', $schoolUserID) != "") ? (getFiled('Q5F2S12', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>13</td>
            <td> Sandwich</td>
            <td><?php echo (getFiled('Q5F2S12', $schoolUserID) != "") ? (getFiled('Q5F2S12', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>14</td>
            <td> Packaged juice</td>
            <td><?php echo (getFiled('Q5F2S14', $schoolUserID) != "") ? (getFiled('Q5F2S14', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
        </table>
      </li>
	 
	  
	  
      <li>
        <p class="orange"><span>2b.1</span>How many students out of total students population avail of the midday meal service provided ?</p>
        <p><?php echo (getFiled('Q5F3S1', $schoolUserID) != "") ? getFiled('Q5F3S1', $schoolUserID) : "N/A"; ?> </p>
      </li>
	   <?php endif; ?>
     <!-- <li>
        <p class="orange"><span>2.1</span>Does your school serve whole day’s meals?</p>
        <p><?php //echo (getFiled('Q5F2', $schoolUserID) != "") ? (getFiled('Q5F2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li> -->
    </ul>
  </div>
  
  
  
 <!-- <div class="task-area">
    <h3 class="task">Task 3: What kind of food is served/sold in your school.</h3>
    <ul class="list">
      <li>
        <p class="orange"><span>3.1</span>Does your school serve traditional Indian snacks?</p>
        <p> <?php //echo (getFiled('Q8F1', $schoolUserID) != "") ? (getFiled('Q8F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
       <p class="orange"><span>3.1a</span>Please provide the details: </p>
        <table class="table">
          <tr>
            <th>Traditional Indian beverages </th>
            <th> Number of servings sold  when on  the menu </th>
          </tr>
          <tr>
            <td> Nimboo Pani</td>
            <td><?php// echo (getFiled('Q8F1S1', $schoolUserID) != "") ? getFiled('Q8F1S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Sweet Lassi</td>
            <td><?php// echo (getFiled('Q8F1S2', $schoolUserID) != "") ? getFiled('Q8F1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Salted  Butter Milk</td>
            <td><?php// echo (getFiled('Q8F1S3', $schoolUserID) != "") ? getFiled('Q8F1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Aam Panna</td>
            <td><?php //echo (getFiled('Q8F1S4', $schoolUserID) != "") ? getFiled('Q8F1S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others</td>
            <td><?php// echo (getFiled('Q8F1S5', $schoolUserID) != "") ? getFiled('Q8F1S5', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </table>
      </li>
    </ul>
  </div>-->
  <div class="task-area">
    <h3 class="task">Task 3: What kind  of food does your school promote?</h3>
    <ul class="list">
      <li>
	      <p class="orange"><span>3</span>Does your school allow students  to bring packaged food items(from home) for lunch?</p>
        <p> <?php echo (getFiled('Q9F1', $schoolUserID) != "") ? (getFiled('Q9F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
       <p class="orange"><span>4</span>Does the school distribute packaged food items as rewards during schools events?</p>
        <p> <?php echo (getFiled('Q9F2', $schoolUserID) != "") ? (getFiled('Q9F2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q9F2', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>4a</span>Please provide details:</p>
        <p> <?php echo (getFiled('Q9F2', $schoolUserID) != "") ? getFiled('Q9F2', $schoolUserID) : "N/A"; ?> </p>
      </li>
	   <?php endif; ?>
      <li>
       <p class="orange"><span>5</span> Does the school distribute chocolates/similar
          products as refreshments during schools events?</p>
        <p> <?php echo (getFiled('Q10F1', $schoolUserID) != "") ? (getFiled('Q10F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q10F1', $schoolUserID),'Y')==0): ?>
      <li>
       <p class="orange"><span>5a</span> Please provide the names:</p>
        <p> <?php echo (getFiled('Q10F2', $schoolUserID) != "") ? getFiled('Q10F2', $schoolUserID) : "N/A"; ?> </p>
      </li>
	   <?php endif; ?>
      <li>
        <p class="orange"><span>6</span>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</p>
        <p> <?php echo (getFiled('Q11F1', $schoolUserID) != "") ? (getFiled('Q11F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q11F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>6a</span>Please provide the names of sponsors:</p>
        <p> <?php echo (getFiled('Q11F2', $schoolUserID) != "") ? getFiled('Q11F2', $schoolUserID) : "N/A"; ?></p>
      </li>
	  
      <li>
         <p class="orange"><span>6b</span>Are their banners, brochures, hoardings, stalls etc. put up during the events?</p>
        <p> <?php echo (getFiled('Q11F3', $schoolUserID) != "") ? (getFiled('Q11F3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php endif; ?>
      <li>
        <p style="color: #e86549;">Please upload pictures of events sponsored by UPPF (ultra-processed packaged food) companies</p>
        <p>Please upload all supporting documents related to this section here. Note: files must be in one of the
          following formats: PDF Document (.pdf), Word Document .doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong></p>
      </li>
    </ul>
   <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Audit_Team_doing_Survey_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
    <div>
      <table class="table">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_doing_Survey_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <div class="task-area">
    <h3 class="task">Task 4: School Initiatives</h3>
    <ul class="list">
      <li>
         <p class="orange"><span>7</span>Does your school measure height and weight  of all the students?</p>
        <p> <?php echo (getFiled('Q12F1', $schoolUserID) != "") ? (getFiled('Q12F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q12F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>7a</span>How regularly is height and weight of the students measured?</p>
        <p>
          <?php
                    if (getFiled('Q12F2', $schoolUserID) == 1):
                        echo "Monthly";
                    elseif (getFiled('Q12F2', $schoolUserID) == 2):
                        echo "Quarterly";
                    elseif (getFiled('Q12F2', $schoolUserID) == 3):
                        echo "Bi-annually";
                    elseif (getFiled('Q12F2', $schoolUserID) == 4):
                        echo "Annually";
                    endif;
                    ?>
        </p>
      </li>
	  <?php endif; ?>
      <li>
        <p class="orange"><span>8</span>Is cooking part of  any regular subjects or extracurricular activities?</p>
        <p> <?php echo (getFiled('Q13F1', $schoolUserID) != "") ? (getFiled('Q13F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q13F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>8a</span>If  yes, please share the details</p>
        <p> <?php echo (getFiled('Q13F2', $schoolUserID) != "") ? getFiled('Q13F2', $schoolUserID) : "N/A"; ?></p>
      </li>
	   <?php endif; ?>
    </ul>
  </div>
  <div class="support_files_head">
    <label style="color: #e86549;">Please upload pictures your Audit Team doing the survey</label>
    <p> Please upload all supporting documents related to this section Note: files must be in one of the
      following formats: PDF Document .pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File
      size per document should not  exceed <strong>100 KB.</strong></p>
  </div>
 <?php
            $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_UPPF_', $schoolUserID);
            if (!empty($arrImages)) {
                ?>
  <div>
    <table class="table support-docs">
      <tr>
        <th>image</th>
        <th>File name</th>
      </tr>
      <?php foreach ($arrImages as $a) { ?>
      <tr>
        <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_UPPF_"), " ", $a->file_name); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section land page_break"><img src="assets/img/images/land.png" width="94" height="94">Land(Primary)</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Land Audit Team</h3>
    <p>The GSP audit helps the school community draw up a roadmap for sustainable use of its land.<br>
      <strong class="unit"> The unit of measurement to be used in the Land section is Square Meter (m2).</strong></p>
    <p class="orange"><span>Teachers:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td> 1</td>
        <td><?php echo (getFiled('Q1L1S1', $schoolUserID) != "") ? getFiled('Q1L1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L1S3', $schoolUserID) != "") ? getFiled('Q1L1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L1S2', $schoolUserID) != "") ? getFiled('Q1L1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q1L2S1', $schoolUserID) != "") ? getFiled('Q1L2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L2S3', $schoolUserID) != "") ? getFiled('Q1L2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L2S2', $schoolUserID) != "") ? getFiled('Q1L2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q1L3S1', $schoolUserID) != "") ? getFiled('Q1L3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L3S3', $schoolUserID) != "") ? getFiled('Q1L3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1L3S2', $schoolUserID) != "") ? getFiled('Q1L3S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td> 1</td>
        <td><?php echo (getFiled('Q2L1S1', $schoolUserID) != "") ? getFiled('Q2L1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L1S3', $schoolUserID) != "") ? getFiled('Q2L1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L1S2', $schoolUserID) != "") ? getFiled('Q2L1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q2L2S1', $schoolUserID) != "") ? getFiled('Q2L2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L2S3', $schoolUserID) != "") ? getFiled('Q2L2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L2S2', $schoolUserID) != "") ? getFiled('Q2L2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q2L3S1', $schoolUserID) != "") ? getFiled('Q2L3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L3S3', $schoolUserID) != "") ? getFiled('Q2L3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L3S2', $schoolUserID) != "") ? getFiled('Q2L3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q2L4S1', $schoolUserID) != "") ? getFiled('Q2L4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L4S3', $schoolUserID) != "") ? getFiled('Q2L4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L4S2', $schoolUserID) != "") ? getFiled('Q2L4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q2L5S1', $schoolUserID) != "") ? getFiled('Q2L5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L5S3', $schoolUserID) != "") ? getFiled('Q2L5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2L5S2', $schoolUserID) != "") ? getFiled('Q2L5S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td> 1</td>
        <td><?php echo (getFiled('Q3L1S1', $schoolUserID) != "") ? getFiled('Q3L1S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L1S2', $schoolUserID) != "") ? getFiled('Q3L1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L1S3', $schoolUserID) != "") ? getFiled('Q3L1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 2</td>
        <td><?php echo (getFiled('Q3L2S1', $schoolUserID) != "") ? getFiled('Q3L2S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L2S2', $schoolUserID) != "") ? getFiled('Q3L2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L2S3', $schoolUserID) != "") ? getFiled('Q3L2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 3</td>
        <td><?php echo (getFiled('Q3L3S1', $schoolUserID) != "") ? getFiled('Q3L3S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L3S2', $schoolUserID) != "") ? getFiled('Q3L3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L3S3', $schoolUserID) != "") ? getFiled('Q3L3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 4</td>
        <td><?php echo (getFiled('Q3L4S1', $schoolUserID) != "") ? getFiled('Q3L4S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L4S2', $schoolUserID) != "") ? getFiled('Q3L4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L4S3', $schoolUserID) != "") ? getFiled('Q3L4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 5</td>
        <td><?php echo (getFiled('Q3L5S1', $schoolUserID) != "") ? getFiled('Q3L5S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L5S2', $schoolUserID) != "") ? getFiled('Q3L5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L5S3', $schoolUserID) != "") ? getFiled('Q3L5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 6</td>
        <td><?php echo (getFiled('Q3L6S1', $schoolUserID) != "") ? getFiled('Q3L6S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L6S2', $schoolUserID) != "") ? getFiled('Q3L6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L6S3', $schoolUserID) != "") ? getFiled('Q3L6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 7</td>
        <td><?php echo (getFiled('Q3L7S1', $schoolUserID) != "") ? getFiled('Q3L7S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L7S2', $schoolUserID) != "") ? getFiled('Q3L7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L7S3', $schoolUserID) != "") ? getFiled('Q3L7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 8</td>
        <td><?php echo (getFiled('Q3L8S1', $schoolUserID) != "") ? getFiled('Q3L8S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L8S2', $schoolUserID) != "") ? getFiled('Q3L8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L8S3', $schoolUserID) != "") ? getFiled('Q3L8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 9</td>
        <td><?php echo (getFiled('Q3L9S1', $schoolUserID) != "") ? getFiled('Q3L9S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L9S2', $schoolUserID) != "") ? getFiled('Q3L9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L9S3', $schoolUserID) != "") ? getFiled('Q3L9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td> 10</td>
        <td><?php echo (getFiled('Q3L10S1', $schoolUserID) != "") ? getFiled('Q3L10S1', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L10S2', $schoolUserID) != "") ? getFiled('Q3L10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3L10S3', $schoolUserID) != "") ? getFiled('Q3L10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
  </div>
  <div class="task-area">
    <h3 class="task">Task 2: Identify the types of areas in your school. <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/land" target="_blank"> </a></h3>
    <ul class="list">
      <li>
       <p class="orange"><span>1</span> What is the total site/plot area of your school?</p>
        <table class="table">
          <tr>
            <td> Types of Area </td>
            <td> Numbers </td>
          </tr>
          <tr>
            <td> No. of Playgrounds </td>
            <td><?php echo (getFiled('Q4L1', $schoolUserID) != "") ? getFiled('Q4L1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of <i>Kachcha</i> (unpaved) playgrounds with grass </td>
            <td><?php echo (getFiled('Q4L2', $schoolUserID) != "") ? getFiled('Q4L2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of <i>Kachcha</i> (unpaved) playgrounds with grass </td>
            <td><?php echo (getFiled('Q4L3', $schoolUserID) != "") ? getFiled('Q4L3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of <i>Pucca</i> (paved) playgrounds </td>
            <td><?php echo (getFiled('Q4L4', $schoolUserID) != "") ? getFiled('Q4L4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of constructed buildings - Academic </td>
            <td><?php echo (getFiled('Q4L5', $schoolUserID) != "") ? getFiled('Q4L5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of constructed buildings – Official </td>
            <td><?php echo (getFiled('Q4L6', $schoolUserID) != "") ? getFiled('Q4L6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> No. of floors (does not include ground floor) </td>
            <td><?php echo (getFiled('Q4L7', $schoolUserID) != "") ? getFiled('Q4L7', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Rooftop/Terrace Gardens </td>
            <td><?php echo (getFiled('Q4L8', $schoolUserID) != "") ? getFiled('Q4L8', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 3: Explore the number of species of plants and animals in your school</h3>
    <p> This task will help you to understand the number and
      variety of plants and animals that
      your school campus supports. Identify and count the
      various species of plants and
      animals in your school.</p>
    <p><strong>To collect data:</strong></p>
    <p> Make two teams of students. One for plant species and
      the other for animal species. Get
      the school gardener and the biology teacher to accompany
      them. Count plant species and
      animal species that are visible to the naked eye.</p>
    <ul class="list">
      <li>
       <p class="orange"><span>2</span> How many types of plants are there in your school?</p>
        <table class="table">
          <tr>
            <th></th>
            <th>Flowering</th>
            <th>Fruiting</th>
            <th>Total</th>
          </tr>
          <tr>
            <td>Plants</td>
            <td><?php echo (getFiled('Q5L1S1', $schoolUserID) != "") ? getFiled('Q5L1S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S2', $schoolUserID) != "") ? getFiled('Q5L1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S3', $schoolUserID) != "") ? getFiled('Q5L1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <li>
        <p class="orange"><span>3</span> How many types of animals and birds are there in your school?</p>
        <table class="table">
          <tr>
            <th></th>
            <th>Birds</th>
            <th>Animal</th>
            <th>Total</th>
          </tr>
          <tr>
            <td>Animals</td>
            <td><?php echo (getFiled('Q5L2S1', $schoolUserID) != "") ? getFiled('Q5L2S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L2S2', $schoolUserID) != "") ? getFiled('Q5L2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L2S3', $schoolUserID) != "") ? getFiled('Q5L2S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 4: Find out if your school uses pesticides </h3>
	   <ul class="list">
		   <li>
   <p class="orange"><span>4</span>Do you use chemical-based pesticides in your school green cover?</p>
    <p> <?php echo (getFiled('Q6L1', $schoolUserID) != "") ? (getFiled('Q6L1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
			   </li>
  </div>
  <div class="support_files_head">
    <label style="color: #e86549;">Please Upload supporting documents</label>
    <p>Please upload the following supporting documents:<br>
      • Pictures of <i>Kachcha</i> playground with grass<br>
      • Pictures of <i>Pucca</i> (paved) playground<br>
      Uploaded files must be in one of the following formats: PDF Document
      (.pdf), Word Document
      (.doc, .docx), Image File (.jpg, .jpeg). File size per document
      should not exceed <strong>100 KB.</strong></p>
  </div>
  <?php
            $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Green_Cover_', $schoolUserID);

            if (!empty($arrImages)) {
                ?>
  <div>
    <table class="table support-docs">
      <tr>
        <th>image</th>
        <th>File name</th>
      </tr>
      <?php foreach ($arrImages as $a) { ?>
      <tr>
        <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Green_Cover_"), " ", $a->file_name); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section waterpage_break"><img src="assets/img/images/water.png" width="94" height="94">Water(Primary)</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Choose your Water Audit Team</h3>
    <p>Before you start, you must put together a team. An ideal team would consist of one teacher (Science or
      Social Science) to guide you during the audit. You would also require the help of the administrative staff
      of your school and other staff, such as the plumber, electrician and other maintenance staff. And, most
      importantly, five to 10 of your schoolmates</p>
    <p class="orange"><span>Teachers:</span></p>
    <table class="table">
      <tr>
        <th></th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email ID </th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo (getFiled('Q1W1S1', $schoolUserID) != "") ? getFiled('Q1W1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1W1S3', $schoolUserID) != "") ? getFiled('Q1W1S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1W1S2', $schoolUserID) != "") ? getFiled('Q1W1S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q1W2S1', $schoolUserID) != "") ? getFiled('Q1W2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1W2S3', $schoolUserID) != "") ? getFiled('Q1W2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1W3S1', $schoolUserID) != "") ? getFiled('Q1W3S1', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q1W3S1', $schoolUserID) != "") ? getFiled('Q1W3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q1W3S3', $schoolUserID) != "") ? getFiled('Q1W3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q1W3S2', $schoolUserID) != "") ? getFiled('Q1W3S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td><?php echo (getFiled('Q2W1S1', $schoolUserID) != "") ? getFiled('Q2W1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2W1S2', $schoolUserID) != "") ? getFiled('Q2W1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2W1S3', $schoolUserID) != "") ? getFiled('Q2W1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q2W2S1', $schoolUserID) != "") ? getFiled('Q2W2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2W2S3', $schoolUserID) != "") ? getFiled('Q2W2S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2W2S2', $schoolUserID) != "") ? getFiled('Q2W2S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q2W3S1', $schoolUserID) != "") ? getFiled('Q2W3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2W3S3', $schoolUserID) != "") ? getFiled('Q2W3S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2W3S2', $schoolUserID) != "") ? getFiled('Q2W3S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q2W4S1', $schoolUserID) != "") ? getFiled('Q2W4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2W4S3', $schoolUserID) != "") ? getFiled('Q2W4S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2W4S2', $schoolUserID) != "") ? getFiled('Q2W4S2', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q2W5S1', $schoolUserID) != "") ? getFiled('Q2W5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q2W5S3', $schoolUserID) != "") ? getFiled('Q2W5S3', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q2W5S2', $schoolUserID) != "") ? getFiled('Q2W5S2', $schoolUserID) : "N/A"; ?> </td>
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
        <td><?php echo (getFiled('Q3W1S1', $schoolUserID) != "") ? getFiled('Q3W1S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W1S2', $schoolUserID) != "") ? getFiled('Q3W1S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W1S3', $schoolUserID) != "") ? getFiled('Q3W1S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo (getFiled('Q3W2S1', $schoolUserID) != "") ? getFiled('Q3W2S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W2S2', $schoolUserID) != "") ? getFiled('Q3W2S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W2S3', $schoolUserID) != "") ? getFiled('Q3W2S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo (getFiled('Q3W3S1', $schoolUserID) != "") ? getFiled('Q3W3S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W3S2', $schoolUserID) != "") ? getFiled('Q3W3S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W3S3', $schoolUserID) != "") ? getFiled('Q3W3S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo (getFiled('Q3W4S1', $schoolUserID) != "") ? getFiled('Q3W4S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W4S2', $schoolUserID) != "") ? getFiled('Q3W4S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W4S3', $schoolUserID) != "") ? getFiled('Q3W4S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo (getFiled('Q3W5S1', $schoolUserID) != "") ? getFiled('Q3W5S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W5S2', $schoolUserID) != "") ? getFiled('Q3W5S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W5S3', $schoolUserID) != "") ? getFiled('Q3W5S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>6</td>
        <td><?php echo (getFiled('Q3W6S1', $schoolUserID) != "") ? getFiled('Q3W6S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W6S2', $schoolUserID) != "") ? getFiled('Q3W6S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W6S3', $schoolUserID) != "") ? getFiled('Q3W6S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>7</td>
        <td><?php echo (getFiled('Q3W7S1', $schoolUserID) != "") ? getFiled('Q3W7S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W7S2', $schoolUserID) != "") ? getFiled('Q3W7S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W7S3', $schoolUserID) != "") ? getFiled('Q3W7S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>8</td>
        <td><?php echo (getFiled('Q3W8S1', $schoolUserID) != "") ? getFiled('Q3W8S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W8S2', $schoolUserID) != "") ? getFiled('Q3W8S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W8S3', $schoolUserID) != "") ? getFiled('Q3W8S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>9</td>
        <td><?php echo (getFiled('Q3W9S1', $schoolUserID) != "") ? getFiled('Q3W9S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W9S2', $schoolUserID) != "") ? getFiled('Q3W9S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W9S3', $schoolUserID) != "") ? getFiled('Q3W9S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
      <tr>
        <td>10</td>
        <td><?php echo (getFiled('Q3W10S1', $schoolUserID) != "") ? getFiled('Q3W10S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q3W10S2', $schoolUserID) != "") ? getFiled('Q3W10S2', $schoolUserID) : "N/A"; ?> </td>
        <td><?php echo (getFiled('Q3W10S3', $schoolUserID) != "") ? getFiled('Q3W10S3', $schoolUserID) : "N/A"; ?> </td>
      </tr>
    </table>
  </div>
  <div class="task-area">
    <h3 class="task">Task 2: How much water does your school use?</h3>
    <p> To find total consumption, monitor water consumption over a period of three working days, spread over one month and take the average.The observations should be carried out when more than 90% of school strength is present</p>
    <p> For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all three total consumptions and then divide it with number of days of observation (that is three days). You will get an average per day water consumption.</p>
    <p> <strong>To collect data: </strong><a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/" target="_blank"> </a></p>
    <p> <strong>The bill method:</strong> If the school’s water meter is monitored regularly—water bills by the government/municipality state the actual amount used—students can simply compile bills to assess total consumption.</p>
    <p> <strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then monitor the overhead tanks. Note the difference in levels of water in your overhead tank between the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check the water level when school is over by noting the difference in levels of water in your overhead tank between beginning and end of a day. Estimate consumption.</p>
    <p> <strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know its measurement. Then switch on the underground-water pump. Let the water run out of the hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate the flow of water in litres per minute. Find out (from the gardener or other administrative staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor is run by how much water comes out from the hose pipe in a minute. The administrative staff and the plumber would be helpful in gauging the above. Conduct an audit for two or three days and then take an average to find the total consumption.</p>
	<p><strong>Calculate your school’s water consumption, per activity:</strong></p>
        <p><strong>&nbsp;To collect data:</strong></p>
        <p> The school will use a glass (250 ml) for drinking during the audit period; they should know the volume
          of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.</p>
        <p> To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be
          used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please
          monitor over a period of 15 working days.</p>
        <p><strong>Gardening:</strong> To measure total water used in Gardening, first find out what is the method
          of watering garden.</p>
		 <p> If water from water storage tank is used with hose pipes then measure the capacity of storage tank.
            Fill the storage tank before watering session. After watering the plants, measure the water left in
            the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank.</p>
			<p>If garden is watered manually with buckets then measure the capacity of the bucket and multiply by
            number of times the bucket is filled to water plants.
			If sprinkler irrigation is used to water garden, then measure the quantity of water released by the
            sprinklers and multiply it by the time the sprinkler system &nbsp;works.&nbsp;</p>
    <ul class="list">
      <li>
       <p class="orange"><span>1</span>Total water consumption of your school</p>
        <table class="table">
          <tr>
            <th> Activity </th>
            <th>Total Quantity (litres per day) </th>
          </tr>
          <tr>
            <td> Drinking </td>
            <td><?php echo (getFiled('Q4W1', $schoolUserID) != "") ? getFiled('Q4W1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Toilet flushing</td>
            <td><?php echo (getFiled('Q4W2', $schoolUserID) != "") ? getFiled('Q4W2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Personal cleaning </td>
            <td><?php echo (getFiled('Q4W3', $schoolUserID) != "") ? getFiled('Q4W3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Washing clothes</td>
            <td><?php echo (getFiled('Q4W4', $schoolUserID) != "") ? getFiled('Q4W4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Cooking</td>
            <td><?php echo (getFiled('Q4W5', $schoolUserID) != "") ? getFiled('Q4W5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Cleaning Utensils</td>
            <td><?php echo (getFiled('Q4W6', $schoolUserID) != "") ? getFiled('Q4W6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Washing Vegetables</td>
            <td><?php echo (getFiled('Q4W7', $schoolUserID) != "") ? getFiled('Q4W7', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Mopping floors</td>
            <td><?php echo (getFiled('Q4W8', $schoolUserID) != "") ? getFiled('Q4W8', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Gardening</td>
            <td><?php echo (getFiled('Q4W9', $schoolUserID) != "") ? getFiled('Q4W9', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others</td>
            <td><?php echo (getFiled('Q4W10', $schoolUserID) != "") ? getFiled('Q4W10', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total</td>
            <td><?php echo (getFiled('Q4W11', $schoolUserID) != "") ? getFiled('Q4W11', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3>Task 3: What Are The Sources, Supply and Storage of Water in your School? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#sourceOfWater" target="_blank"> </a> </h3>
    <p> To understand water, it is important to know the source of water in your school premises. As you know,
      most cities in India have to deal with depleting water supply, marked by falling ground water levels,
      vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are
      forced to source water from further and further away. This is expensive. </p>
    <p> The questions below will help students to understand where their water is coming from – at a cost. </p>
    <ul class="list">
      <li>
         <p class="orange"><span>2</span> Where does the water your school uses, come from? (please tick the correct options):</p>
        <ul>
          <?php
                    if (getFiled('Q5W1', $schoolUserID) == 1):
                        echo "Ground water";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q5W2', $schoolUserID) == 1):
                        echo "Surface water";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q5W3', $schoolUserID) == 1):
                        echo "Rain water";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q5W4', $schoolUserID) == 1):
                        echo "Recycled waste water";
                    endif;
                    ?>
        </ul>
      </li>
      <li>
       <p class="orange"><span>3</span> Does your school get daily water supply?</p>
        <p> <?php echo (getFiled('Q7W1', $schoolUserID) != "") ? (getFiled('Q7W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q7W1', $schoolUserID),'Y')==0): ?>
      <li>
       <p class="orange"><span>3(a)</span> Does your school get daily water supply?</p>
        <ul class="list-unstyled">
          <p>
            <?php
                        if (getFiled('Q7W2', $schoolUserID) == 1):
                            echo "≤1 hours";
                        elseif (getFiled('Q7W2', $schoolUserID) == 2):
                            echo "2-6 hours";
                        elseif (getFiled('Q7W2', $schoolUserID) == 3):
                            echo "7-12 hours";
                        elseif (getFiled('Q7W2', $schoolUserID) == 4):
                            echo "13-18 hours";
                        elseif (getFiled('Q7W2', $schoolUserID) == 5):
                            echo "19-24 hours";
                        endif;
                        ?>
          </p>
        </ul>
      </li>
	   <?php else: ?>
      <li>
        <p class="orange"><span>3(b)</span> Does your school get daily water supply?</p>
        <p>
          <?php
                        if (getFiled('Q7W3', $schoolUserID) == 1):
                            echo "≤1 day";
                        elseif (getFiled('Q7W3', $schoolUserID) == 2):
                            echo "2 days in a week";
                        elseif (getFiled('Q7W3', $schoolUserID) == 3):
                            echo "3 days in a week";
                        elseif (getFiled('Q7W3', $schoolUserID) == 4):
                            echo "Every alternate day in a week";

                        endif;
                        ?>
        </p>
      </li>
	   <?php endif; ?>
    </ul>
  </div>
  <div class="task-area">
    <h3>Task 4: Does your school harvest rainwater? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></h3>
    <p>Rainfall (precipitation) is the primary source of freshwater on land. In this section, you
      will find out how much rainwater your school can catch, and how much your school can
      harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater
      and using it to recharge groundwater or storing it for other uses.<br>
      To know the types of catchment <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></p>
    <ul class="list">
      <li>
       <p class="orange"><span>4</span>Do you have Rainwater harvesting (RWH) system in your school?</p>
        <p> <?php echo (getFiled('Q8W2', $schoolUserID) != "") ? (getFiled('Q8W2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q8W2', $schoolUserID),'Y')==0){?>
      <li>
       <p class="orange"><span>4(a)</span>Which is the catchment area being harvested by your school? </p>
        <ul>
          <?php
                    if (getFiled('Q8W2S1S1', $schoolUserID) == 1):
                        echo "Rooftop";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 2):
                        echo "Paved";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 3):
                        echo "Unpaved";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 4):
                        echo "Rooftop + paved";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 5):
                        echo "Paved + unpaved";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 6):
                        echo "Rooftop + unpave";
                    elseif (getFiled('Q8W2S1S1', $schoolUserID) == 7):
                        echo "Rooftop + paved + unpaved";

                    endif;
                    ?>
        </ul>
      </li>
      <li>
        <p class="orange"><span class="cube">4(b)</span> How does your school harvest rainwater? </p>
        <p>
          <?php
                if (getFiled('Q8W2S2', $schoolUserID) == 1):
                    echo "By storing";
                elseif (getFiled('Q8W2S2', $schoolUserID) == 2):
                    echo "By recharging groundwater";
                elseif (getFiled('Q8W2S2', $schoolUserID) == 3):
                    echo "Combination of both";
                endif;
                ?>
        </p>
      </li>
	  
	  <?php if(!empty(getFiled('Q8W2S2', $schoolUserID))){
	  if(getFiled('Q8W2S2', $schoolUserID) == 1 || getFiled('Q8W2S2', $schoolUserID) == 3){ ?>	 
	  
      <li>
      <p class="orange"><span class="cube">4b.1</span>If your school only stores rainwater, please select
        the use of stored rainwater: </p>
        <p>
          <?php
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 1):
                        echo "Drinking";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 2):
                        echo "Gardening";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 3):
                        echo "Mopping";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 4):
                        echo " Toilets";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 5):
                        echo "Washing vehicles";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 6):
                        echo "Kitchen (Cooking/Washing vegetables and utensils)";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 7):
                        echo "Shower, Brushing teeth, Bathing, Hand washing";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 8):
                        echo "Swimming Pool";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 9):
                        echo "Fire fighting";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 10):
                        echo "Desert coolers";
                    endif;
                    ?>
        </p>
      </li>
      <li>
        <p class="orange"><span class="cube">4b.2</span> Does your school have rainwater storage tank?</p>
        <p> <?php echo (getFiled('Q8W2S2S2', $schoolUserID) != "") ? (getFiled('Q8W2S2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q8W2S2S2', $schoolUserID),'Y')==0) {?>
      <li>
        <p class="orange"><span class="cube">4b2A</span>Total number of storage tank (litres): </p>
        <p> <?php echo (getFiled('Q8W2S2S3', $schoolUserID) != "") ? getFiled('Q8W2S2S3', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
       <p class="orange"><span class="cube">4b2B</span>Total capacity of each storage tank (litres): </p>
       <p><?php echo (getFiled('Q8W2S2S4', $schoolUserID) != "") ? getFiled('Q8W2S2S4', $schoolUserID) : "N/A"; ?> </p>
      </li>
	  <?php } ?>
      <li>
         <p class="orange"><span class="cube">4b2C</span>Location of tanks:</p>
        <ul>
          <?php
                    if (getFiled('Q8W2S2S5', $schoolUserID) == 1):
                        echo "Underground";
                    elseif (getFiled('Q8W2S2S5', $schoolUserID) == 2):
                        echo "Over ground";
                    elseif (getFiled('Q8W2S2S5', $schoolUserID) == 3):
                        echo "Semi underground";
                    elseif (getFiled('Q8W2S2S5', $schoolUserID) == 4):
                        echo "Over- ground + semi underground ";
                    elseif (getFiled('Q8W2S2S5', $schoolUserID) == 5):
                        echo "Underground + semi underground";
                    elseif (getFiled('Q8W2S2S5', $schoolUserID) == 6):
                        echo "Underground + Over- ground + semi underground ";

                    endif;
                    ?>
        </ul>
      </li>
      <!--<li>
        <p class="orange"><span class="cube">4b2D</span>Material options for tanks:</p>
        <ul>
        //  <?php
                   // if (getFiled('Q8W2S2S6', $schoolUserID) == 1):
                      //  echo "PVC";
                  //  elseif (getFiled('Q8W2S2S6', $schoolUserID) == 2):
                    //    echo "RCC";
                  //  elseif (getFiled('Q8W2S2S6', $schoolUserID) == 3):
                     //   echo "Brick";
                   // elseif (getFiled('Q8W2S2S6', $schoolUserID) == 4):
                     //   echo "Combination of PVC + RCC + brick ";


                  //  endif;
                  //  ?>
        </ul>
      </li> -->
      <li>
	      <p class="orange"><span class="cube">4b3</span>Does your school have groundwater recharge
          structure? </p>
        <p> <?php echo (getFiled('Q8W2S2S7', $schoolUserID) != "") ? (getFiled('Q8W2S2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q8W2S2S7', $schoolUserID),'Y')==0) {?>
      <li>
        <p class="orange"><span class="cube">4b3i</span>Please tick the type of groundwater recharge
        structure used in your school: </p>
        <p>
          <?php
                    if (getFiled('Q8W2S2S94', $schoolUserID) == 1):
                        echo " Recharge pits";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S95', $schoolUserID) == 1):
                        echo "Recharge trenches";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S96', $schoolUserID) == 1):
                        echo "Recharge through ponds/water bodies";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S97', $schoolUserID) == 1):
                        echo "Soak pit";
                        echo "<br/>";
                    endif;
                    ?>
        </p>
      </li>
	   <?php } ?>
	  
	  <?php } } ?>
      <li>
	  
        <p class="orange"><span class="cube">4c</span>
       Does your school clean your catchment and system
        </p>
        <p> <?php echo (getFiled('Q8W2S61', $schoolUserID) != "") ? (getFiled('Q8W2S61', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php } ?>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 5: Are the plumbing and sanitation facilities in your school adequate?</h3>
    <p>Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these
      hampers attendance, especially of girls in senior grades.</p>
    <ul class="list">
      <li>
        <p class="orange"><span>5</span>
          <label>Please share details about
          sanitation and hygiene practices in your school: </label>
        </p>
        <table class="table">
          <tr>
            <td> Does the school have separate toilets
              for males and females?</td>
            <td><?php echo (getFiled('Q8W3S1', $schoolUserID) != "") ? (getFiled('Q8W3S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Are there sufficient toilets for women
              in your school?</td>
            <td><?php echo (getFiled('Q8W3S2', $schoolUserID) != "") ? (getFiled('Q8W3S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Are there sufficient toilets for men in
              your school? </td>
            <td><?php echo (getFiled('Q8W3S3', $schoolUserID) != "") ? (getFiled('Q8W3S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Are the toilets accessible and safe to
              use for children?</td>
            <td><?php echo (getFiled('Q8W3S4', $schoolUserID) != "") ? (getFiled('Q8W3S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Are the toilets accessible and safe to
              use for differently abled children?</td>
            <td><?php echo (getFiled('Q8W3S5', $schoolUserID) != "") ? (getFiled('Q8W3S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Are the toilets accessible and safe to
              use for differently abled staff (teaching and non-teaching)?</td>
            <td><?php echo (getFiled('Q8W3S6', $schoolUserID) != "") ? (getFiled('Q8W3S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Are the toilets situated in the right
              location in terms of privacy and safety?</td>
            <td><?php echo (getFiled('Q8W3S7', $schoolUserID) != "") ? (getFiled('Q8W3S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Is there sufficient light during day
              time?</td>
            <td><?php echo (getFiled('Q8W3S8', $schoolUserID) != "") ? (getFiled('Q8W3S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Do you use soap to wash hands before and after lunch?</td>
            <td><?php echo (getFiled('Q8W3S9', $schoolUserID) != "") ? (getFiled('Q8W3S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Do you use soap to wash hands before and after using the toilet ?</td>
            <td><?php echo (getFiled('Q8W3S10', $schoolUserID) != "") ? (getFiled('Q8W3S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <li>
       <p class="orange"><span>6</span>
          <label>How many drinking water taps do you have?</label>
        </p>
        <p><?php echo (getFiled('Q9W1', $schoolUserID) != "") ? getFiled('Q9W1', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>7</span>
          <label>How many hand pumps do you have?</label>
        </p>
        <p><?php echo (getFiled('Q10W1', $schoolUserID) != "") ? getFiled('Q10W1', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
       <p class="orange"><span>8</span>
          <label>How many ablution taps (taps used for washing hands only)
          do you have?</label>
        </p>
        <p><?php echo (getFiled('Q11W1', $schoolUserID) != "") ? getFiled('Q11W1', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>9</span>How many water closets (used for
          defecation and urination) do you have?
        </p>
        <p><strong>Number of toilets</strong></p>
        <table class="table">
          <tr>
            <th>Girls</th>
            <th>Boys</th>
            <th>Common</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><?php echo (getFiled('Q13W1S1', $schoolUserID) != "") ? getFiled('Q13W1S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q13W1S2', $schoolUserID) != "") ? getFiled('Q13W1S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q13W1S3', $schoolUserID) != "") ? getFiled('Q13W1S3', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q13W1S4', $schoolUserID) != "") ? getFiled('Q13W1S4', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </table>
      </li>
      <li>
        <p class="orange"><span>10</span>How many urinals (strictly used for urination only)
          do you have?
        </p>
        <p><?php echo (getFiled('Q14W1', $schoolUserID) != "") ? getFiled('Q14W1', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>11</span>How many other water outlets (example: taps in play
          fields, sprinklers, swimming pool) do you have?
        </p>
        <p> <?php echo (getFiled('Q15W1', $schoolUserID) != "") ? getFiled('Q15W1', $schoolUserID) : "N/A"; ?> </p>
        <label><strong> Water supply and cleaning of toilets in your school: </strong></label>
      </li>
      <li>
        <p class="orange"><span>12</span>
          <label>Is there a water storage system in
          place to supply water in the toilets?</label>
        </p>
        <p> <?php echo (getFiled('Q16W1', $schoolUserID) != "") ? (getFiled('Q16W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>13</span>Is the water supply
          sufficient?</label>
        </p>
        <p> <?php echo (getFiled('Q17W1', $schoolUserID) != "") ? (getFiled('Q17W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>14</span>Are the toilets cleaned?</label>
        </p>
        <p> <?php echo (getFiled('Q18W1', $schoolUserID) != "") ? (getFiled('Q18W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q18W1', $schoolUserID),'Y')==0) {?>
      <li>
        <p class="orange"><span>14(a)</span>If yes, please
          specify </p>
		  <p>
        <?php
                if (getFiled('Q18W2', $schoolUserID) == 1):
                    echo "Once a day";
                elseif (getFiled('Q18W2', $schoolUserID) == 2):
                    echo "Twice a day";
                elseif (getFiled('Q18W2', $schoolUserID) == 3):
                    echo "More than twice a day ";

                endif;
                ?>
				</p>
      </li>
	   <?php } ?>
    </ul>
  </div>
  <div class="task-area">
    <h3>Task 6: Does your school reuse/recycle waste water? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#recyclingSewageWater" target="_blank"> </a></h3>
    <p>Water recycling is the process of treating waste or used water, in order to upgrade its quality, so that it can be used again. When water, once used for a particular
      purpose, is put to use again, it is then being reused.</p>
    <ul class="list">
      <li>
        <p class="orange"><span>15</span> Does your school treat
          wastewater?</p>
        <p> <?php echo (getFiled('Q19W1', $schoolUserID) != "") ? (getFiled('Q19W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>16</span>Does your school reuse the
          treated wastewater?</label>
        </p>
        <p> <?php echo (getFiled('Q20W1', $schoolUserID) != "") ? (getFiled('Q20W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q20W1', $schoolUserID),'Y')==0) {?>
      <li>
        <p class="orange"><span>16a</span>How does your
          school reuse wastewater?</p>
        <p>
          <?php
                if (getFiled('Q20W2', $schoolUserID) == 1):
                    echo "Wastewater flows directly to the drains";
                elseif (getFiled('Q20W2', $schoolUserID) == 2):
                    echo "Flushing";
                elseif (getFiled('Q20W2', $schoolUserID) == 3):
                    echo " Recharge Ground Water";

                endif;
                ?>
        </p>
      </li>
	   <?php } ?>
	   
	   <?php if(strcmp(getFiled('Q20W1', $schoolUserID),'N')==0) {?>
	  
      <li>
       <p class="orange"><span>16a</span>
          <label>Please specify the fate of wastewater:</label>
        </p>
        <p>
          <?php
                if (getFiled('Q20W3', $schoolUserID) == 1):
                    echo "Wastewater flows directly to the drains";
                elseif (getFiled('Q20W3', $schoolUserID) == 2):
                    echo "Used for groundwater recharge";
                elseif (getFiled('Q20W3', $schoolUserID) == 3):
                    echo " Used for gardening and horticulture";

                endif;
                ?>
        </p>
      </li>
	  
	   <?php } ?>
    </ul>
    <p><strong>Please upload a flow chart (hand drawn) of the wastewatertreatment process.</strong> </p>
    <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Flow_Chart_Hand_Drwan_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
    <div>
      <table class="table">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Flow_Chart_Hand_Drwan_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <p style="color: #e86549;">
    <label>Please upload supportingdocuments:</label>
  </p>
  <p> •Pictures of audit team doing survey<br>
    Please upload all supporting documents related to this section here.
    Note, files must be one of the following formats: PDF Document
    (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
    File size per document should not exceed <strong>100 KB.</strong> </p>
  <?php
            $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Supporting_Document_Water_', $schoolUserID);
            if (!empty($arrImages)) {
                ?>
  <div>
    <table  class="table">
      <tr>
        <th>image</th>
        <th>File name</th>
      </tr>
      <?php foreach ($arrImages as $a) { ?>
      <tr>
        <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Supporting_Document_Water_"), " ", $a->file_name); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section waterpage_break"><img src="assets/img/images/waste.png" width="94" height="94">Waste</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Choose your Waste Audit Team</h3>
    <p>The housekeeping and cleaning staff of your school shall be the core members of your team, as you will have
      to enlist their help at every task. A teacher with interest in waste and five to 10 students will be ideal
      for your team. Administrative staff is important as they will provide the permissions required for the
      housekeeping staff to work with you</p>
    <p class="orange"><span>Teachers:</span></p>
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
  <div class="task-area">
    <h3 class="task">Task 2: What is the waste segregation system in your school?</h3>
    <p>Segregation means sorting. Let’s understand the waste segregation system because the amount of waste
      recycled or reused will depend on the method of collection. To understand the waste segregation system
      of your school, fill the table below.<br>
      <b>To collect data:</b> Students will have to survey the waste collection area and talk to the
      house-keeping staff to know whether waste is segregated in the school and in what quantity. </p>
    <ul class="list">
      <li>
         <p class="orange"><span class="cube">1</span> Does your school segregate solid waste?</p>
        <p> <?php echo (getFiled('Q4Wa1', $schoolUserID) != "") ? (getFiled('Q4Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	   <?php if(strcmp(getFiled('Q4Wa1', $schoolUserID),'Y')==0): ?>
      <li>
         <p class="orange"><span class="cube">1(a)</span> Who segregates the waste at source?</p>
        <p>
          <?php
                if (getFiled('Q4Wa2S1', $schoolUserID) == 1):
                    echo "Students and teachers";
                    echo "<br/>";
                endif;
                if (getFiled('Q4Wa2S2', $schoolUserID) == 1):
                    echo "Housekeeping (Sweeper)";
                    echo "<br/>";
                endif;
                if (getFiled('Q4Wa2S3', $schoolUserID) == 1):
                    echo "Gardener";
                    echo "<br/>";
                endif;
                if (getFiled('Q4Wa2S4', $schoolUserID) == 1):
                    echo "Ragpickers";
                    echo "<br/>";
                endif;
                if (getFiled('Q4Wa2S5', $schoolUserID) == 1):
                    echo "Other";
                    echo "<br/>";
                endif;
                ?>
        </p>
      </li>
	  <?php endif; ?>
      <li>
        <p class="orange"><span class="cube">2</span>How many categories does your school segregate waste into? </p>
        <p>
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
         <p class="orange"><span class="cube">2(a)</span> How many categories does your school
          segregate waste into?</p>
        <table class="table">
          <tr>
            <th>Area</th>
            <th>No. of waste collection points with no bin</th>
            <th>with one bin (mixed waste)</th>
            <th>with two bins (wet &amp; dry)</th>
            <th>with three bins or more</th>
            <th>Total no. of waste collection points</th>
          </tr>
          <tr>
            <td>Classrooms</td>
            <td><?php echo (getFiled('Q5Wa1S1', $schoolUserID) != "") ? getFiled('Q5Wa1S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S2', $schoolUserID) != "") ? getFiled('Q5Wa1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S3', $schoolUserID) != "") ? getFiled('Q5Wa1S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S4', $schoolUserID) != "") ? getFiled('Q5Wa1S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa1S5', $schoolUserID) != "") ? getFiled('Q5Wa1S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Playgrounds </td>
            <td><?php echo (getFiled('Q5Wa2S1', $schoolUserID) != "") ? getFiled('Q5Wa2S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S2', $schoolUserID) != "") ? getFiled('Q5Wa2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S3', $schoolUserID) != "") ? getFiled('Q5Wa2S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S4', $schoolUserID) != "") ? getFiled('Q5Wa2S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa2S5', $schoolUserID) != "") ? getFiled('Q5Wa2S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Common area </td>
            <td><?php echo (getFiled('Q5Wa3S1', $schoolUserID) != "") ? getFiled('Q5Wa3S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S2', $schoolUserID) != "") ? getFiled('Q5Wa3S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S3', $schoolUserID) != "") ? getFiled('Q5Wa3S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S4', $schoolUserID) != "") ? getFiled('Q5Wa3S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa3S5', $schoolUserID) != "") ? getFiled('Q5Wa3S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Staffroom </td>
            <td><?php echo (getFiled('Q5Wa4S1', $schoolUserID) != "") ? getFiled('Q5Wa4S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S2', $schoolUserID) != "") ? getFiled('Q5Wa4S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S3', $schoolUserID) != "") ? getFiled('Q5Wa4S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S4', $schoolUserID) != "") ? getFiled('Q5Wa4S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa4S5', $schoolUserID) != "") ? getFiled('Q5Wa4S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          
          <tr>
            <td> Canteen </td>
            <td><?php echo (getFiled('Q5Wa6S1', $schoolUserID) != "") ? getFiled('Q5Wa6S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S2', $schoolUserID) != "") ? getFiled('Q5Wa6S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S3', $schoolUserID) != "") ? getFiled('Q5Wa6S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S4', $schoolUserID) != "") ? getFiled('Q5Wa6S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa6S5', $schoolUserID) != "") ? getFiled('Q5Wa6S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Clinic/sick room </td>
            <td><?php echo (getFiled('Q5Wa7S1', $schoolUserID) != "") ? getFiled('Q5Wa7S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S2', $schoolUserID) != "") ? getFiled('Q5Wa7S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S3', $schoolUserID) != "") ? getFiled('Q5Wa7S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S4', $schoolUserID) != "") ? getFiled('Q5Wa7S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa7S5', $schoolUserID) != "") ? getFiled('Q5Wa7S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Library </td>
            <td><?php echo (getFiled('Q5Wa8S1', $schoolUserID) != "") ? getFiled('Q5Wa8S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S2', $schoolUserID) != "") ? getFiled('Q5Wa8S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S3', $schoolUserID) != "") ? getFiled('Q5Wa8S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S4', $schoolUserID) != "") ? getFiled('Q5Wa8S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa8S5', $schoolUserID) != "") ? getFiled('Q5Wa8S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Toilets </td>
            <td><?php echo (getFiled('Q5Wa9S1', $schoolUserID) != "") ? getFiled('Q5Wa9S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S2', $schoolUserID) != "") ? getFiled('Q5Wa9S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S3', $schoolUserID) != "") ? getFiled('Q5Wa9S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S4', $schoolUserID) != "") ? getFiled('Q5Wa9S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa9S5', $schoolUserID) != "") ? getFiled('Q5Wa9S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others </td>
            <td><?php echo (getFiled('Q5Wa10S1', $schoolUserID) != "") ? getFiled('Q5Wa10S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S2', $schoolUserID) != "") ? getFiled('Q5Wa10S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S3', $schoolUserID) != "") ? getFiled('Q5Wa10S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S4', $schoolUserID) != "") ? getFiled('Q5Wa10S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa10S5', $schoolUserID) != "") ? getFiled('Q5Wa10S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total </td>
            <td><?php echo (getFiled('Q5Wa11S1', $schoolUserID) != "") ? getFiled('Q5Wa11S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S2', $schoolUserID) != "") ? getFiled('Q5Wa11S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S3', $schoolUserID) != "") ? getFiled('Q5Wa11S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S4', $schoolUserID) != "") ? getFiled('Q5Wa11S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa11S5', $schoolUserID) != "") ? getFiled('Q5Wa11S5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
	  <?php endif; ?>
    </ul>
    <p style="color: #e86549;">
      <label class="control-label">Please upload supporting documents:</label>
    </p>
    <p> • Pictures of dustbins in classroom showing segregation at source<br>
      • Pictures of playground with more than two dustbins<br>
      Kindly attach the aforementioned documents along with the survey</p>
    <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Segregation_Source_Classrooms_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
    <div>
      <table  class="table">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Segregation_Source_Classrooms_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <div class="task-area">
    <h3 class="task">Task 3: How much waste does your school treat/recycle?</h3>
    <ul class="list">
      <li>
       
        <p class="orange">
		<label><span class="cube">3</span>
          <label>Does your school recycle any generated waste? </label>
        </p>
        <p> <?php echo (getFiled('Q8Wa1', $schoolUserID) != "") ? (getFiled('Q8Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  <?php if(strcmp(getFiled('Q8Wa1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange">
          <label><span class="cube">3a</span>
         Please provide quantity of which is applicable</label>
        </p>
        <table class="table">
          <tr>
            <th> Type of Waste </th>
            <th>Yes/No </th>
          </tr>
          <tr>
            <td> Garden waste/ Horticultural waste </td>
			
            <td><?php echo (getFiled('Q8Wa2S1', $schoolUserID) != "") ? (getFiled('Q8Wa2S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Kitchen Waste</td>
            <td><?php echo (getFiled('Q8Wa2S2', $schoolUserID) != "") ? (getFiled('Q8Wa2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Paper </td>
            <td><?php echo (getFiled('Q8Wa2S3', $schoolUserID) != "") ? (getFiled('Q8Wa2S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Plastic </td>
            <td><?php echo (getFiled('Q8Wa2S4', $schoolUserID) != "") ? (getFiled('Q8Wa2S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Wood, glass, metal, classroom furniture</td>
            <td><?php echo (getFiled('Q8Wa2S5', $schoolUserID) != "") ? (getFiled('Q8Wa2S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> E-waste </td>
            <td><?php echo (getFiled('Q8Wa2S6', $schoolUserID) != "") ? (getFiled('Q8Wa2S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Biomedical waste</td>
            <td><?php echo (getFiled('Q8Wa2S7', $schoolUserID) != "") ? (getFiled('Q8Wa2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td> Sanitary waste </td>
            <td><?php echo (getFiled('Q8Wa2S8', $schoolUserID) != "") ? (getFiled('Q8Wa2S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Construction and Demolition (C & D) waste </td>
            <td><?php echo (getFiled('Q8Wa2S9', $schoolUserID) != "") ? (getFiled('Q8Wa2S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Hazardous waste </td>
            <td><?php echo (getFiled('Q8Wa2S10', $schoolUserID) != "") ? (getFiled('Q8Wa2S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
         
         
        </table>
      </li>
	  <?php endif; ?>
      <li>
         <p class="orange"><span class="cube">4</span>
          <label>Does your school have a composting facility?</label>
        </p>
        <p> <?php echo (getFiled('Q9Wa1', $schoolUserID) != "") ? (getFiled('Q9Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
    </ul>
    <p style="color: #e86549;">
      <label>Please upload supporting documents:</label>
    </p>
    <p>• Pictures of recycling units - composting pit</p>
    <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Composting_Pit_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
    <div>
      <table class="table">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Composting_Pit_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <ul class="list">
	<?php if(strcmp(getFiled('Q9Wa1', $schoolUserID),'Y')==0): ?>
      <li>
         <p class="orange"><span class="cube">4a</span> What is the purpose of the compost that is generated per month? </p>
        <p>
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
         <p class="orange"><span class="cube">5</span> Does your school encourage students &amp; teachers to reuse textbooks? </p>
	<p> <?php echo (getFiled('Q10Wa1', $schoolUserID) != "") ? (getFiled('Q10Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p style="color: #e86549;">
          <label>Please upload supporting documents:</label>
        </p>
        <p> • Pictures of recycling units - paper recycling machine, selling paper to kabadiwala, recyclers,etc<br>
        </p>
        <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Recycling_Machine_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
        <div>
          <table class="table">
            <tr>
              <th>image</th>
              <th>File name</th>
            </tr>
            <?php foreach ($arrImages as $a) { ?>
            <tr>
              <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Recycling_Machine_"), " ", $a->file_name); ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </li>
      <?php } else { ?>
      <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
      <li>
         <p class="orange"><span class="cube">6</span> 
          <label>Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.</label>
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
    </ul>
    <p style="color: #e86549;">
      <label>Please upload supporting documents:</label>
    </p>
    <p> • Pictures of Electronic items used by school and storage of non-working electronic items<br>
      • Certificate of disposing e-waste from authorized dealer/dismantler </p>
    <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_E-Waste_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
    <div>
      <table class="table">
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_E-Waste_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <ul class="list">
      <li>
         <p class="orange"><span class="cube">7</span>
          <label>Do you know that your e-waste can be collected by an authorized dealer or dismantler? </label>
        </p>
        <p> <?php echo (getFiled('Q13Wa1', $schoolUserID) != "") ? (getFiled('Q13Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
     <!-- <li>
         <p class="orange"><span class="cube">8</span> </p><span>Who collects your e-waste, when not in working condition?</span> </p>
        <p>
        //  <?php
               // if (getFiled('Q13Wa2', $schoolUserID) == 1):
                   // echo "Kabadiwalla/ Scrapdealer";
                //elseif (getFiled('Q13Wa2', $schoolUserID) == 2):
                    //echo "Taken back by manufacturer/vendor";
              //  elseif (getFiled('Q13Wa2', $schoolUserID) == 3):
                  //  echo " Authorised dealer";
               // elseif (getFiled('Q13Wa2', $schoolUserID) == 4):
                 //   echo " Authorised dismantler";
              //  else:
                  //  echo " Others";

               // endif;
              //  ?>
        </p>
      </li> -->
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 5: How does your school dispose of waste?</h3>
    <ul class="list">
      <li>
        <p class="orange"><span class="cube">8</span> What is the final destination for waste from your
          school that is disposed of externally?
        </p>
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
        <p style="color: #e86549;">
          <label class="control-label">Please upload supporting documents:</label>
        </p>
        <p> • Pictures of housekeeping staff disposing different types of solid waste<br>
        </p>
        <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Housekeeping_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
        <div>
          <table class="table">
            <tr>
              <th>image</th>
              <th>File name</th>
            </tr>
            <?php foreach ($arrImages as $a) { ?>
            <tr>
              <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Housekeeping_"), " ", $a->file_name); ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php } else { ?>
        <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
      </li>
      <li>
         <p class="orange"><span class="cube">9</span> Does your school burn waste? </p>
        <p> <?php echo (getFiled('Q15Wa1', $schoolUserID) != "") ? (getFiled('Q15Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p style="color: #e86549;">
          <label class="control-label">Please upload supporting documents:</label>
        </p>
        <p> • Pictures of burning waste</p>
        <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Buring_Waste_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
        <div>
          <table class="table">
            <tr>
              <th>image</th>
              <th>File name</th>
            </tr>
            <?php foreach ($arrImages as $a) { ?>
            <tr>
              <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Buring_Waste_"), " ", $a->file_name); ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php } else { ?>
        <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
		 </li>
		 <?php if(strcmp(getFiled('Q15Wa1', $schoolUserID),'Y')==0): ?>
		<li> 
        <p class="orange"><span class="cube">9a</span> Where does your school burn
          waste?</p>
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
         <p class="orange"><span class="cube">9b</span>What kind of waste is burnt/ncinerated? </p>
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
	 <li>
        <p class="orange"><span class="cube">10</span>  Do you know that your E-waste can be collected by an authorised dealer or dismantler? </p>
        <p> <?php echo (getFiled('Q16Wa1', $schoolUserID) != "") ? (getFiled('Q16Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
		</li>
     
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
         <p class="orange"><span class="cube">11</span>
          <label class="control-label">Does the school have a policy on waste?</label>
        </p>
        <p> <?php echo (getFiled('Q17Wa1', $schoolUserID) != "") ? (getFiled('Q17Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
	  
      <li>
        <p style="color: #e86549;">
          <label class="control-label">Please upload supporting documents:</label>
        </p>
        <p>• Waste Policy</p>
        <p class="orange"><span class="cube">12</span> 
          <label class="control-label">Are there awareness drives with regard to Reduce,
          Recycle and Reuse? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation" target="_blank"></a></label>
        </p>
        <p> <?php echo (getFiled('Q18Wa1', $schoolUserID) != "") ? (getFiled('Q18Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <li>
        <p style="color: #e86549;">
          <label class="control-label">Please upload supporting documents:</label>
        </p>
        <p> • Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc</p>
		</li>
		<li>
        <p class="orange"><span class="cube">12a</span>
          <label class="control-label">What form do these awareness drives take? </label>
        </p>
        <p>
          <?php
                if (getFiled('Q18Wa2S1', $schoolUserID) == 1):
                    echo "As part of the curriculum";
                elseif (getFiled('Q18Wa2S2', $schoolUserID) == 2):
                    echo "As part of extracurricular activities such as guest lectures";
                elseif (getFiled('Q18Wa2S3', $schoolUserID) == 3):
                    echo "By the showcasing of posters and stickers";
                endif;
                ?>
        </p>
      </li>
      <li>
        <p style="color: #e86549;">
          <label class="control-label">Please upload supporting documents:</label>
        </p>
        <p> • Pictures of audit team doing survey
          Please upload all supporting documents related to this section here. Note, files must be one of the
          following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
          File size per document should not exceed <strong>100 KB.</strong></p>
        <?php
                $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Audit_Team_Doing_Survey_Waste_', $schoolUserID);
                if (!empty($arrImages)) {
                    ?>
        <div>
          <table  class="table">
            <tr>
              <th>image</th>
              <th>File name</th>
            </tr>
            <?php foreach ($arrImages as $a) { ?>
            <tr>
              <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_Doing_Survey_Waste_"), " ", $a->file_name); ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php } else { ?>
        <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
