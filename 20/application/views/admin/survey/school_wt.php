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
  <h1>Responses For Green Schools Programme Audit 2017</h1>
  <div class="school-detail">
    <p><span>School Name:</span><span><?php echo $school[0]->name; ?></span></p>
    <p><span>Address:</span><span><?php echo $school[0]->address1; ?></span></p>
    <p><span>Coordinator Name:</span><span><?php echo $school[0]->coname; ?></span></p>
  </div>
  <div class="address-wrap"> <img src="assets/img/images/cover.png" width="100%">
    <div class="address">
      <p>Green Schools Programme <br />
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
        <p class="orange"><span>1</span><span>Name of the School / Institution</span></p>
        <p><?php echo $school[0]->name; ?></p>
      </li>
      <li>
        <p class="orange"><span>2</span><span>Address</span></p>
        <p><?php echo $school[0]->address1; ?>, <?php echo $school[0]->address2; ?></p>
      </li>
      <li>
        <p class="orange"><span>3</span><span>Country</span></p>
        <p><?php echo 'India'; ?></p>
      </li>
      <li>
        <p class="orange"><span>4</span><span>State</span></p>
        <p><?php echo $school[0]->state_name; ?></p>
      </li>
      <li>
        <p class="orange"><span>5</span><span>District</span></p>
        <p><?php echo $school[0]->district; ?></p>
      </li>
      <li>
        <p class="orange"><span>6</span><span>City</span></p>
        <p><?php echo $school[0]->city; ?></p>
      </li>
      <li>
        <p class="orange"><span>7</span><span>Pincode</span></p>
        <p><?php echo $school[0]->pincode; ?></p>
      </li>	    
      <li>
        <p class="orange"><span>8</span><span>Telephone Number (Landline Number with STD code)</span></p>
        <p>(ISD) &nbsp;91  &nbsp;&nbsp; (STD) &nbsp;<?php echo $school[0]->std; ?> &nbsp;&nbsp; (Number)<?php echo $school[0]->telephone; ?></p>
      </li>
      <li>
        <p class="orange"><span>9</span><span>Mobile Number (Mobile Number with STD code)</span></p>
        <p>(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school[0]->mobile; ?></p>
      </li>
      <li>
        <p class="orange"><span>10</span><span>Principal Name</span></p>
        <p><?php echo $school[0]->principle_name; ?></p>
      </li>
      <li>
        <p class="orange"><span>11</span><span>GSP Coordinator Name</span></p>
        <p><?php echo $school[0]->coname; ?></p>
      </li>
      <li>
        <p class="orange"><span>12</span><span>GSP Coordinator Email</span></p>
        <p><?php echo $school[0]->coemail; ?></p>
      </li>
      <li>
        <p class="orange"><span>13</span><span>GSP Coordinator Mobile Number</span></p>
        <p>(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school[0]->comobile; ?></p>
      </li>
      <li>
        <p class="orange"><span>14</span><span>Category Of The School</span></p>
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
        <p class="orange"><span>15</span><span>Category For Your School (Not Applicable in Case of Residential Category)</span></p>
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
      <p class="formanswertext"> Lowest level of grade:<?php echo getFiled('Q1G1',
                        $schoolUserID);
                    ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Highest level of grade:<?php echo getFiled('Q1G2',
                        $schoolUserID);
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
    <!-- <li>
      <p class="orange"><span>3.1</span><span> Select State for Board of Education:</span></p>
      <p><?php //echo (getFiled('Q3G2', $schoolUserID) != "") ? getFiled('Q3G2', $schoolUserID) : "N/A"; ?></p>
    </li>-->
    <li>
      <p class="orange"><span>4</span><span> Total population of the school</span></p>
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
    <li>
      <p class="orange"><span class="cube">4(c)</span>How many family members stay in the
        school campus? </p>
      <p><?php echo (getFiled('Q5G2', $schoolUserID) != "") ? getFiled('Q5G2', $schoolUserID) : "N/A"; ?> </p>
    </li>
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
    </li>
  </ul>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section air"><img src="assets/img/images/air.png" width="94" height="94">BASELINE</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task"></h3>
    <p> The first step to efficient solid waste management (SWM) is to become aware of what we do - benchmarking how much waste we generate and how much is processed. It is only then that we can find more sustainable ways to manage waste.</p>
    <p>The Baseline section of GSP Waste Transformers motivates schools to find out the types of waste generated in previous years' audits and measure the actual volume. The Baseline will help schools chalk out their solid waste management plan better. The school's waste management programme has the potential to transform the school environment, and therefore, the objective is to create a plan for zero-waste zones in every school that can be implemented once schools reopen.</p>
  </div>
  <div class="task-area">
    <h3 class="task">For Baseline:</h3>
    <ul>
    <li>Choose your SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team.</li>
    <li>With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan.</li>
    <li>The details of the Action Plan team members will need to be provided in the last section 'The Team'.</li>
    <li>As a team, study the latest baseline data in comparison to previous years, where applicable.</li>
    <li>Based on the study, design an Action Plan for SWM in school as per the questions asked in the next section.</li>
    <li>The section on Action Plan will open on 23 Dec 2020, and you will only be able to access it once you answer all the questions in the previous sections.</li>
    <li>As always, the Action Plan will be submitted online by the school.</li>
    </ul>
  </div>
  <ul class="list">
    <li>
      <p class="orange"><span>1</span><span>Per capita waste generation in school</span></p>
      <p><?php echo (getFiled('Q4A1', $schoolUserID) != "") ? getFiled('Q4A1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span>2</span><span>Window-floor ratio of classrooms in the school.</span></p>
      <table class="table">
        <tr>
          <th>Details of the classroom (e.g. Class II section b)</th>
          <th>X = Area of floor (LxB) (square meters)</th>
          <th>Y = Sum of area of openings ? (LxH)</th>
          <th>Percentage of the floor area being ventilated (Y/X x 100)</th>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A1S1', $schoolUserID) != "") ? getFiled('Q5A1S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A1S2', $schoolUserID) != "") ? getFiled('Q5A1S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A1S3', $schoolUserID) != "") ? getFiled('Q5A1S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A1S4', $schoolUserID) != "") ? getFiled('Q5A1S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A2S1', $schoolUserID) != "") ? getFiled('Q5A2S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A2S2', $schoolUserID) != "") ? getFiled('Q5A2S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A2S3', $schoolUserID) != "") ? getFiled('Q5A2S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A2S4', $schoolUserID) != "") ? getFiled('Q5A2S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A3S1', $schoolUserID) != "") ? getFiled('Q5A3S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A3S2', $schoolUserID) != "") ? getFiled('Q5A3S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A3S3', $schoolUserID) != "") ? getFiled('Q5A3S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A3S4', $schoolUserID) != "") ? getFiled('Q5A3S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A4S1', $schoolUserID) != "") ? getFiled('Q5A4S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A4S2', $schoolUserID) != "") ? getFiled('Q5A4S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A4S3', $schoolUserID) != "") ? getFiled('Q5A4S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A4S4', $schoolUserID) != "") ? getFiled('Q5A4S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A5S1', $schoolUserID) != "") ? getFiled('Q5A5S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A5S2', $schoolUserID) != "") ? getFiled('Q5A5S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A5S3', $schoolUserID) != "") ? getFiled('Q5A5S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A5S4', $schoolUserID) != "") ? getFiled('Q5A5S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A6S1', $schoolUserID) != "") ? getFiled('Q5A6S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A6S2', $schoolUserID) != "") ? getFiled('Q5A6S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A6S3', $schoolUserID) != "") ? getFiled('Q5A6S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A6S4', $schoolUserID) != "") ? getFiled('Q5A6S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A7S1', $schoolUserID) != "") ? getFiled('Q5A7S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A7S2', $schoolUserID) != "") ? getFiled('Q5A7S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A7S3', $schoolUserID) != "") ? getFiled('Q5A7S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A7S4', $schoolUserID) != "") ? getFiled('Q5A7S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A8S1', $schoolUserID) != "") ? getFiled('Q5A8S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A8S2', $schoolUserID) != "") ? getFiled('Q5A8S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A8S3', $schoolUserID) != "") ? getFiled('Q5A8S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A8S4', $schoolUserID) != "") ? getFiled('Q5A8S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A9S1', $schoolUserID) != "") ? getFiled('Q5A9S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A9S2', $schoolUserID) != "") ? getFiled('Q5A9S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A9S3', $schoolUserID) != "") ? getFiled('Q5A9S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A9S4', $schoolUserID) != "") ? getFiled('Q5A9S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td><?php echo (getFiled('Q5A10S1', $schoolUserID) != "") ? getFiled('Q5A10S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A10S2', $schoolUserID) != "") ? getFiled('Q5A10S2', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A10S3', $schoolUserID) != "") ? getFiled('Q5A10S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q5A10S4', $schoolUserID) != "") ? getFiled('Q5A10S4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td>Total</td>
          <td><?php echo getFiled('Q5A110S2', $schoolUserID); ?></td>
          <td><?php echo getFiled('Q5A110S3', $schoolUserID); ?></td>
          <td></td>
        </tr>
      </table>
      <?php /*?><table class="table">
                    <tr>
                        <th>Details of the classroom (e.g. Class II section b)</th> 
                        <th>X = Area of floor (LxB) (square meters)</th> 
                        <th>Y = Sum of area of openings ? (LxH)</th> 
                        <th>Percentage of the floor area being ventilated (Y/X x 100)
                        </th>
                    </tr>
                    <?php
                    $var_tr_count = getFiled('Q4A1', $schoolUserID);
                    for ($var_row = 1; $var_row <= $var_tr_count; ++$var_row):
                        ?>
                        <tr>
                            <td><?php echo getFiled('Q5A' . $var_row . 'S1', $schoolUserID); ?></td>
                            <td><?php echo getFiled('Q5A' . $var_row . 'S2', $schoolUserID); ?></td>
                            <td><?php echo getFiled('Q5A' . $var_row . 'S3', $schoolUserID); ?></td>
                            <td><?php echo getFiled('Q5A' . $var_row . 'S4', $schoolUserID); ?></td>
                        </tr>
                    <?php endfor; ?>
                    <tr>
                        <td>Total</td>  
                        <td><?php echo getFiled('Q5A110S2', $schoolUserID); ?>
                        </td> 
                        <td><?php echo getFiled('Q5A110S3', $schoolUserID); ?>
                        </td> 
                        <td></td> 
                    </tr>
                    
                </table><?php */?>
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
		  $arrBoard=array(
                            '1'=>'School does not use or own vehicles',
                            '2'=>'Operator-owned vehicles',
                            '3'=>'School-owned vehicles',
                            '4'=>'A combination of school-owned and operator-owned vehicles',
                            '5'=>'Hired vehicles (JNV schools)'
                        );
						echo (getFiled('Q6A1', $schoolUserID)!="") ?
                        $arrBoard[getFiled('Q6A1', $schoolUserID)] : "";
		
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
          <td>No. of vehicles with PUC done </td>
          <td><?php echo (getFiled('Q6A2S1B4', $schoolUserID) != "") ? getFiled('Q6A2S1B4', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1C4', $schoolUserID) != "") ? getFiled('Q6A2S1C4', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1V4', $schoolUserID) != "") ? getFiled('Q6A2S1V4', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1O4', $schoolUserID) != "") ? getFiled('Q6A2S1O4', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1T4', $schoolUserID) != "") ? getFiled('Q6A2S1T4', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td>Authorised parking available</td>
          <td><?php echo (getFiled('Q6A2S1B5', $schoolUserID) != "") ? getFiled('Q6A2S1B5', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1C5', $schoolUserID) != "") ? getFiled('Q6A2S1C5', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1V5', $schoolUserID) != "") ? getFiled('Q6A2S1V5', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1O5', $schoolUserID) != "") ? getFiled('Q6A2S1O5', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1T5', $schoolUserID) != "") ? getFiled('Q6A2S1T5', $schoolUserID) : "N/A"; ?> </td>
        </tr>
        <tr>
          <td>Annual road worthiness certificate (Yes / No)</td>
          <td><?php echo (getFiled('Q6A2S1B6', $schoolUserID) != "") ? (getFiled('Q6A2S1B6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1C6', $schoolUserID) != "") ? (getFiled('Q6A2S1C6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1V6', $schoolUserID) != "") ? (getFiled('Q6A2S1V6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1O6', $schoolUserID) != "") ? (getFiled('Q6A2S1O6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q6A2S1T6', $schoolUserID) != "") ? getFiled('Q6A2S1T6', $schoolUserID) : "N/A"; ?> </td>
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
    <li>
      <p class="orange"><span>3(c)</span> IS CNG AVAILABLE IN YOUR STATE? </p>
      <p><?php echo (getFiled('Q6A3', $schoolUserID) != "") ? (getFiled('Q6A3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
    </li>
    <?php if(strcmp(getFiled('Q6A3', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"><span>3(c)a</span> IS CNG AVAILABLE IN YOUR AREA? </p>
      <p><?php echo (getFiled('Q6A4S1', $schoolUserID) != "") ? (getFiled('Q6A4S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
    </li>
    <?php endif; ?>
<?php } ?>	  
  </ul>
  <div class="task-area">
    <h3 class="task">Task 4: How do you travel to school every day? </h3>
    <p> To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the
      team should ask individual class monitors to record the commuting practices of his/her classmates and the
      teachers, and forward the data to the audit team. After completing the survey, provide the compiled information
      below.</p>
  </div>
  <ul class="list">
    <li>
      <p class="orange"><span>4</span><span>How many members of the school community use each type of transport:</span></p>
      <table class="table">
        <tr>
          <td colspan="5"> Sustainable Motorised Vehicles </td>
        </tr>
        <tr>
          <th></th>
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
          <td>Total </td>
        </tr>
        <tr>
          <td>Personal four-wheeler </td>
          <td><?php echo (getFiled('Q7A7S1', $schoolUserID) != "") ? getFiled('Q7A7S1', $schoolUserID) : "N/A"; ?></td>
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
      <p class="orange"><span>5</span><span> How many students suffer from respiratory ailments ?</span></p>
      <p><?php echo (getFiled('Q8A1', $schoolUserID) != "") ? getFiled('Q8A1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span>6</span><span> Does the school laboratory have air quality monitoring equipment?</span></p>
      <p><?php echo (getFiled('Q9A1', $schoolUserID) != "") ? (getFiled('Q9A1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
  </ul>
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
  <div class="support_files"> No documents uploaded by the school. </div>
  <?php } ?>
<?php if(getFiled('Q9A1', $schoolUserID) != "Y"){ ?>	
  <ul class="list">
    <li>
      <p class="orange"><span>6(a)</span> If No, is there an air quality monitoring station(private or government) close to your school? </p>
      <p> <?php echo (getFiled('Q9A2', $schoolUserID) != "") ? (getFiled('Q9A2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
    </li>
  </ul>
<?php } ?>	
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section energy page_break"><img src="assets/img/images/energy.png" width="94" height="94">Energy</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Energy Audit Team</h3>
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
    <p> In this section you will be asked questions related to energy consumption of your school.
      This will involve finding out the different sources of energy used and jotting down the
      monthly consumption.</p>
    <p><strong>To collect data:</strong></p>
    <p> Please collect all the bills that your school receives for its energy consumption, e.g.
      electricity and gas bills. If the frequency of any energy consumption bill is fortnightly,
      bi-monthly, quarterly or half yearly, try to convert them into monthly averages. Take an
      average of the bills for a minimum of four months – e.g January to April. &nbsp;</p>
    <p><strong>Electricity:&nbsp;</strong>The audit team will have to get in touch with the
      administrative staff in the school office to procure the electricity bills.</p>
    <p><strong>Diesel: </strong>Ask the generator attendant to show the log book of fuels and find
      out how many litres are being used. If diesel is being used for transport, the transport
      in-charge will have the register/log book with details about the amount consumed and cost
      paid. Remember the energy output of a generator would be taken only in terms of input, i.e,
      fuel used.</p>
    <p><strong>LPG: </strong>Ask the mess/canteen staff, how many cylinders are used in one month on
      an average. Remember each gas cylinder generally weighs 14.2 kg.</p>
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
            <th>Quantity consumed/monthly average</th>
            <th>Energy consumed in Megajoules (mj)</th>
            <th>Type of use</th>
          </tr>
          <tr>
            <td>Electricity from the board (kwh)</td>
            <td><?php echo (getFiled('Q6E1S1', $schoolUserID) != "") ? getFiled('Q6E1S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E1S2', $schoolUserID) != "") ? getFiled('Q6E1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6E1S3', $schoolUserID) != "") ? getFiled('Q6E1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Electricity from generator (diesel) (litres)</td>
            <td><?php echo (getFiled('Q6E2S1', $schoolUserID) != "") ? getFiled('Q6E2S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E2S2', $schoolUserID) != "") ? getFiled('Q6E2S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E2S3', $schoolUserID) != "") ? getFiled('Q6E2S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Petrol (litres)</td>
            <td><?php echo (getFiled('Q6E3S1', $schoolUserID) != "") ? getFiled('Q6E3S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E3S2', $schoolUserID) != "") ? getFiled('Q6E3S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E3S3', $schoolUserID) != "") ? getFiled('Q6E3S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Diesel (litres)</td>
            <td><?php echo (getFiled('Q6E4S1', $schoolUserID) != "") ? getFiled('Q6E4S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E4S2', $schoolUserID) != "") ? getFiled('Q6E4S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E4S3', $schoolUserID) != "") ? getFiled('Q6E4S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>CNG (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E5S1', $schoolUserID) != "") ? getFiled('Q6E5S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E5S2', $schoolUserID) != "") ? getFiled('Q6E5S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E5S3', $schoolUserID) != "") ? getFiled('Q6E5S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Kerosene (litres)</td>
            <td><?php echo (getFiled('Q6E6S1', $schoolUserID) != "") ? getFiled('Q6E6S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E6S2', $schoolUserID) != "") ? getFiled('Q6E6S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E6S3', $schoolUserID) != "") ? getFiled('Q6E6S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Coal (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E7S1', $schoolUserID) != "") ? getFiled('Q6E7S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E7S2', $schoolUserID) != "") ? getFiled('Q6E7S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E7S3', $schoolUserID) != "") ? getFiled('Q6E7S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Wood (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E16S1', $schoolUserID) != "") ? getFiled('Q6E16S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6E16S2', $schoolUserID) != "") ? getFiled('Q6E16S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E16S3', $schoolUserID) != "") ? getFiled('Q6E16S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Animal waste (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E8S1', $schoolUserID) != "") ? getFiled('Q6E8S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E8S2', $schoolUserID) != "") ? getFiled('Q6E8S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E8S3', $schoolUserID) != "") ? getFiled('Q6E8S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Solar (kwh)</td>
            <td><?php echo (getFiled('Q6E9S1', $schoolUserID) != "") ? getFiled('Q6E9S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E9S2', $schoolUserID) != "") ? getFiled('Q6E9S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E9S3', $schoolUserID) != "") ? getFiled('Q6E9S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Wind (kwh)</td>
            <td><?php echo (getFiled('Q6E10S1', $schoolUserID) != "") ? getFiled('Q6E10S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E10S2', $schoolUserID) != "") ? getFiled('Q6E10S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E10S3', $schoolUserID) != "") ? getFiled('Q6E10S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>LPG (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E11S1', $schoolUserID) != "") ? getFiled('Q6E11S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E11S2', $schoolUserID) != "") ? getFiled('Q6E11S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E11S3', $schoolUserID) != "") ? getFiled('Q6E11S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Piped Natural Gas (kilogrammes)</td>
            <td><?php echo (getFiled('Q6E12S1', $schoolUserID) != "") ? getFiled('Q6E12S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E12S2', $schoolUserID) != "") ? getFiled('Q6E12S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E12S3', $schoolUserID) != "") ? getFiled('Q6E12S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Biogas</td>
            <td><?php echo (getFiled('Q6E13S1', $schoolUserID) != "") ? getFiled('Q6E13S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E13S2', $schoolUserID) != "") ? getFiled('Q6E13S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E13S3', $schoolUserID) != "") ? getFiled('Q6E13S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>Others (specify)</td>
            <td><?php echo (getFiled('Q6E14S1', $schoolUserID) != "") ? getFiled('Q6E14S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E14S2', $schoolUserID) != "") ? getFiled('Q6E14S2', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E14S3', $schoolUserID) != "") ? getFiled('Q6E14S3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr class="total">
            <td>Total</td>
            <td><?php echo (getFiled('Q6E15S1', $schoolUserID) != "") ? getFiled('Q6E15S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q6E15S2', $schoolUserID) != "") ? getFiled('Q6E15S2', $schoolUserID) : "N/A"; ?></td>
            <td></td>
          </tr>
        </table>
      </li>
      <li>
        <p>Please upload fuel bills</p>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($fulesBills as $f) { ?>
          <tr id="index<?php echo $f->id; ?>">
            <?php $name = str_replace(" ", "_", $f->name . "_Fuels_Bills_"); ?>
            <td><img src="uploads/files/<?php echo $f->file_name; ?>" class="img-thumbnail" style="height:80px;width:80px;"></img></td>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
      <li>
        <p class="orange"><span>4</span> What appliances does your school have? </p>
        <p>
        <table class="table">
          <tr>
            <th>Appliances/Equipments</th>
            <th>Number</th>
            <th>Size</th>
            <th>BEE Star Rating</th>
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
        </table>
        </p>
      </li>
    </ul>
  </div>
  <div class="task-area">
    <h3 class="task">Task 3: Is your school using any renewable sources of energy? </h3>
    <ul class="list">
      <li>
        <p class="orange"><span>5</span><span> What is the average number of sunny days in your area?</span></p>
        <p><?php echo (getFiled('Q8E1', $schoolUserID) != "") ? getFiled('Q8E1', $schoolUserID) : "N/A"; ?></p>
      </li>
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
        <p class="orange"><span>7</span><span> Does your school use solar water heater:</span></p>
        <p> <?php echo (getFiled('Q10E1', $schoolUserID) != "") ? (getFiled('Q10E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
      </li>
    </ul>
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
    <div class="support_files"> No documents uploaded by the school. </div>
    <?php } ?>
  </div>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section food page_break"><img src="assets/img/images/food.png" width="94" height="94">Food</h2>
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
            <td><img src="<?php echo 'uploads/files/' . $f->file_name; ?>" class="img-thumbnail" style="height:80px;width:80px;"></img></td>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
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
      <?php elseif(strcmp(getFiled('Q5F1', $schoolUserID),'N')==0):  ?>
      <li>
        <p class="orange"><span>2(a)</span>Do students bring their own lunch from home?</p>
        <p> <?php echo (getFiled('Q5F1S1', $schoolUserID) != "") ? (getFiled('Q5F1S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
      <?php if(strcmp(getFiled('Q5F1S1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>2(a)(1)</span> How many students out of total student population bring home-made lunch? </p>
        <p><?php echo (getFiled('Q5F1S2', $schoolUserID) != "") ? getFiled('Q5F1S2', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>2(a)(2)</span>Of the students who  bring lunch from home, how many bring packaged food?</p>
        <p><?php echo (getFiled('Q5F1S3', $schoolUserID) != "") ? getFiled('Q5F1S3', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>2(a)(3)</span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</p>
        <p> <?php echo (getFiled('Q5F1S4', $schoolUserID) != "") ? (getFiled('Q5F1S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
      <?php if(strcmp(getFiled('Q5F1', $schoolUserID),'Y')==0): ?>
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
      <?php endif; ?>
      <?php if(getFiled('Q1S1', $schoolUserID)>=3 && getFiled('Q1S1', $schoolUserID)!=4): ?>
      <li>
        <p class="orange"><span>2.1</span>Does your school serve whole day’s meals?</p>
        <p><?php echo (getFiled('Q5F2', $schoolUserID) != "") ? (getFiled('Q5F2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
      <li>
        <p class="orange"><span>2(b)(1)</span>How many students out of total students population avail of the midday meal service provided ?</p>
        <p><?php echo (getFiled('Q5F3S1', $schoolUserID) != "") ? (getFiled('Q5F3S1', $schoolUserID)): 0 ; ?></p>
      </li> 
    </ul>
  </div>
  <?php if(strcmp(getFiled('Q4F1', $schoolUserID),'Y')==0): ?>
  <div class="task-area">
    <h3 class="task">Task 3: What kind of food is served/sold in your school.</h3>
    <ul class="list">
      <li>
        <p class="orange"><span>3</span>What  kind of food is being served / sold in your school?</p>
        <table class="table">
          <tr>
            <th>Packaged food items served / sold inside school campus</th>
            <th>Please count all flavours/variants available in the school separately</th>
            <th>Total no. of items sold, on an average, in a month</th>
            <th>Month the food items were sold in</th>
          </tr>
          <tr>
            <td> Savoury snacks and
              similar packaged
              food like chips,
              Kurkure, Cheetos,
              potato crisps, corn
              snacks, nuts and
              seeds, etc </td>
            <td><?php echo (getFiled('Q6F2S1', $schoolUserID) != "") ? getFiled('Q6F2S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F2S2', $schoolUserID) != "") ? getFiled('Q6F2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F4S3', $schoolUserID) != "") ? getFiled('Q6F4S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Instant Noodles like
              Knorr,
              Cup-a-noodles, Top
              Ramen, Wai-wai,
              Yippee, Foodles,
              Maggi, etc </td>
            <td><?php echo (getFiled('Q6F3S1', $schoolUserID) != "") ? getFiled('Q6F3S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F3S2', $schoolUserID) != "") ? getFiled('Q6F3S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F3S3', $schoolUserID) != "") ? getFiled('Q6F3S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Potato fries and
              burgers </td>
            <td><?php echo (getFiled('Q6F4S1', $schoolUserID) != "") ? getFiled('Q6F4S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F4S2', $schoolUserID) != "") ? getFiled('Q6F4S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F4S3', $schoolUserID) != "") ? getFiled('Q6F4S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Confectionery items
              (chocolate, candies,
              gums) </td>
            <td><?php echo (getFiled('Q6F5S1', $schoolUserID) != "") ? getFiled('Q6F5S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F5S2', $schoolUserID) != "") ? getFiled('Q6F5S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F5S3', $schoolUserID) != "") ? getFiled('Q6F5S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Ice cream </td>
            <td><?php echo (getFiled('Q6F6S1', $schoolUserID) != "") ? getFiled('Q6F6S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F6S2', $schoolUserID) != "") ? getFiled('Q6F6S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F6S3', $schoolUserID) != "") ? getFiled('Q6F6S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Carbonated beverages </td>
            <td><?php echo (getFiled('Q6F7S1', $schoolUserID) != "") ? getFiled('Q6F7S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F7S2', $schoolUserID) != "") ? getFiled('Q6F7S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F7S3', $schoolUserID) != "") ? getFiled('Q6F7S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Sugar sweetened
              non-carbonated
              beverages </td>
            <td><?php echo (getFiled('Q6F8S1', $schoolUserID) != "") ? getFiled('Q6F8S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F8S2', $schoolUserID) != "") ? getFiled('Q6F8S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F8S3', $schoolUserID) != "") ? getFiled('Q6F8S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Packaged/bottled
              nimboo
              paani/lassi/flavoured
              milk </td>
            <td><?php echo (getFiled('Q6F9S1', $schoolUserID) != "") ? getFiled('Q6F9S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F9S2', $schoolUserID) != "") ? getFiled('Q6F9S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F9S3', $schoolUserID) != "") ? getFiled('Q6F9S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Packaged/bottled
              energy drinks </td>
            <td><?php echo (getFiled('Q6F10S1', $schoolUserID) != "") ? getFiled('Q6F10S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F10S2', $schoolUserID) != "") ? getFiled('Q6F10S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q6F10S3', $schoolUserID) != "") ? getFiled('Q6F10S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <li>
        <p class="orange"><span>4</span>Does your school serve traditional Indian snacks?</p>
        <p><?php echo (getFiled('Q7F1', $schoolUserID) != "") ? (getFiled('Q7F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q7F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>4(a)</span>Please provide the details: </p>
        <table class="table">
          <tr>
            <th>Traditional Indian snacks </th>
            <th> Number of servings sold when on the menu </th>
          </tr>
          <tr>
            <td> Samosas</td>
            <td><?php echo (getFiled('Q7F1S1', $schoolUserID) != "") ? getFiled('Q7F1S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Idli/vada and sambhar</td>
            <td><?php echo (getFiled('Q7F1S2', $schoolUserID) != "") ? getFiled('Q7F1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Pav bhaji</td>
            <td><?php echo (getFiled('Q7F1S3', $schoolUserID) != "") ? getFiled('Q7F1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Momos</td>
            <td><?php echo (getFiled('Q7F1S4', $schoolUserID) != "") ? getFiled('Q7F1S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others</td>
            <td><?php echo (getFiled('Q7F1S5', $schoolUserID) != "") ? getFiled('Q7F1S5', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </table>
      </li>
      <?php endif; ?>
      <li>
        <p class="orange">Please upload picture of traditional food items sol in canteen</p>
        <table width="100%" class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($midDayMeal as $f) { ?>
          <tr id="index<?php echo $f->id; ?>">
            <?php $name = str_replace(" ", "_", $f->name . "_Mid_Day_Meal_"); ?>
            <td><img src="<?php echo 'uploads/files/' . $f->file_name ?>" style="height:100px;width:100px"></img></td>
            <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
      <li>
        <p class="orange"><span>4(b)</span>Give descriptions for rare local snacks served in your school:</p>
        <p><?php echo (getFiled('Q7F3S1', $schoolUserID) != "") ? getFiled('Q7F3S1', $schoolUserID) : "N/A"; ?> </p>
      </li>
      <li>
        <p class="orange"><span>5</span>Doesyourschool serve traditional Indian  beverages?</p>
        <p> <?php echo (getFiled('Q8F1', $schoolUserID) != "") ? (getFiled('Q8F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q7F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>5(a)</span>Please provide details: </p>
        <table class="table">
          <tr>
            <th>Traditional Indian beverages </th>
            <th> Number of servings sold  when on  the menu </th>
          </tr>
          <tr>
            <td> Nimboo Pani</td>
            <td><?php echo (getFiled('Q8F1S1', $schoolUserID) != "") ? getFiled('Q8F1S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Sweet Lassi</td>
            <td><?php echo (getFiled('Q8F1S2', $schoolUserID) != "") ? getFiled('Q8F1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Salted  Butter Milk</td>
            <td><?php echo (getFiled('Q8F1S3', $schoolUserID) != "") ? getFiled('Q8F1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Aam Panna</td>
            <td><?php echo (getFiled('Q8F1S4', $schoolUserID) != "") ? getFiled('Q8F1S4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others</td>
            <td><?php echo (getFiled('Q8F1S5', $schoolUserID) != "") ? getFiled('Q8F1S5', $schoolUserID) : "N/A"; ?></td>
          </tr>
        </table>
      </li>
      <?php endif ?>
    </ul>
  </div>
  <?php endif; ?>
  <div class="task-area">
    <h3 class="task">Task 4: What kind  of food does your school promote?</h3>
    <ul class="list">
      <li>
        <p class="orange"><span>6</span> Does the school distribute packaged food items as rewards during schools events?</p>
        <p> <?php echo (getFiled('Q9F1', $schoolUserID) != "") ? (getFiled('Q9F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q9F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>6(a)</span> Please provide details: </p>
        <p><?php echo (getFiled('Q9F2', $schoolUserID) != "") ? getFiled('Q9F2', $schoolUserID) : "N/A"; ?></p>
      </li>
      <?php endif; ?>
      <li>
        <p class="orange"><span>7</span> Does the school distribute chocolates/similar
          products as refreshments during schools events?</p>
        <p> <?php echo (getFiled('Q10F1', $schoolUserID) != "") ? (getFiled('Q10F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q10F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>7(a)</span> Please provide the names:</p>
        <p> <?php echo (getFiled('Q10F2', $schoolUserID) != "") ? getFiled('Q10F2', $schoolUserID) : "N/A"; ?> </p>
      </li>
      <?php endif; ?>
      <li>
        <p class="orange"><span>8</span>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</p>
        <p> <?php echo (getFiled('Q11F1', $schoolUserID) != "") ? (getFiled('Q11F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q11F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>8(a)</span>Please provide the names of sponsors:</p>
        <p> <?php echo (getFiled('Q11F2', $schoolUserID) != "") ? getFiled('Q11F2', $schoolUserID) : "N/A"; ?></p>
      </li>
      <li>
        <p class="orange"><span>8(b)</span>Are their banners, brochures, hoardings, stalls etc. put up during the events?</p>
        <p> <?php echo (getFiled('Q11F3', $schoolUserID) != "") ? (getFiled('Q11F3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php endif; ?>
    </ul>
    <?php
        $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Audit_Team_doing_Survey_', $schoolUserID);
        if (!empty($arrImages)) {
            ?>
    <table class="table">
      <thead>
        <tr>
          <th>image</th>
          <th>File name</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($arrImages as $a) { ?>
        <tr>
          <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_doing_Survey_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="support_files">No documents uploaded by the school.</div>
    <?php } ?>
  </div>
  <div class="task-area">
    <h3 class="task">Task 5: School Initiatives</h3>
    <ul class="list">
      <li>
        <p class="orange"><span>9</span>Does your school measure height and weight  of all the students?</p>
        <p> <?php echo (getFiled('Q12F1', $schoolUserID) != "") ? (getFiled('Q12F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q12F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>9(a)</span>How regularly is height and weight of the students measured?</p>
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
        <p class="orange"><span>10</span>Is cooking part of  any regular subjects or extracurricular activities?</p>
        <p> <?php echo (getFiled('Q13F1', $schoolUserID) != "") ? (getFiled('Q13F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q13F1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>10(a)</span>If  yes, please share the details</p>
        <p> <?php echo (getFiled('Q13F2', $schoolUserID) != "") ? getFiled('Q13F2', $schoolUserID) : "N/A"; ?></p>
      </li>
      <?php endif; ?>
    </ul>
  </div>
  <div class="support_files_head"> </div>
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
  <div class="support_files">No documents uploaded by the school.</div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section land page_break"><img src="assets/img/images/land.png" width="94" height="94">Land</h2>
<div class="wrapper">
  <div class="task-area">
    <h3 class="task">Task 1: Land Audit Team</h3>
    <p>Your school gardener is certainly the best person to be a part of
      your audit team. Make sure your
      biology or geography teacher joins your team. Just like all other
      teams, five to 10 of your committed
      and interested schoolmates would make a strong team. Try and involve
      some students of the photography or
      painting clubs of your school.</p>
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
    <h3 class="task">Task 2: Measure the critical areas of your school campus</h3>
    <p> <strong>To find out the land/ site area of your school, you
      need to measure:</strong></p>
    <p> 1. Ground coverage area includes all permanent structure
      building, such as
      administration block, auditorium, school building, etc.
      It does not include floors.</p>
    <p> 2. Green cover or green, landscaped area on ground
      includes areas covered by grass,
      trees, lawn or horticulture, flower beds, shrubs, etc.
      excluding play area covered by the grass on ground. </p>
    <p> 3. Surface parking area refers to any parking lots
      directly on land.</p>
    <p> 4. Play areas that are paved / concrete include outdoor
      playfields, such as basketball
      courts, skating rinks, assembly grounds and swimming
      pools. </p>
    <p> 5. Play area covered by grass on ground include grass
      tennis-courts and circket or
      football grounds. </p>
    <p> 6. Service area on ground is any area on ground that is
      not a permanent structure but is
      dedicated to service, such as cooling towers for air
      conditioning, generators and
      portable cabin for security guards, etc. </p>
    <p> 7. Roof and terrace area: A roof is the covering on the
      uppermost part of a building. A
      terrace is an outdoor, occupiable extension of a
      building above ground level.</p>
    <p> 8. Green cover on terraces/ balconies includes terrace
      gardens but not potted
      plants.</p>
    <p> 9. Total built-up/constructed area refers to the total
      area of all floors of the
      building, including ground floors of built-up spaces,
      which include classrooms, labs,
      staff rooms, office area, auditoriums, corridors, and
      balconies and terraces, multiplied
      by the number of floors.</p>
    <p> 10. Other will include paved paths and other open area
      that your school has but is not
      covered in the list above.</p>
    <ul class="list">
      <li>
        <p class="orange"><span>1</span> What is the total site/plot area of your school?</p>
        <table class="table">
          <tr>
            <th>Description</th>
            <th>Your school's area (m<Sup>2</Sup>)</th>
          </tr>
          <tr>
            <td>Site area in square meter (m<Sup>2</Sup>)</td>
            <td><?php echo (getFiled('Q4L1', $schoolUserID) != "") ? getFiled('Q4L1', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td colspan="2"><label><span class="cube">1A</span>Total green cover</label></td>
          </tr>
          <tr>
            <td>(a) Ground coverage area</td>
            <td><?php echo (getFiled('Q4L2', $schoolUserID) != "") ? getFiled('Q4L2', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(b1) Green Landscaped area on ground</td>
            <td><?php echo (getFiled('Q4L3', $schoolUserID) != "") ? getFiled('Q4L3', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(b2) Play area that has grass on ground</td>
            <td><?php echo (getFiled('Q4L4', $schoolUserID) != "") ? getFiled('Q4L4', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(b3) Green area on ground</td>
            <td><?php echo (getFiled('Q4L5', $schoolUserID) != "") ? getFiled('Q4L5', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(c) Play area that is paved/concrete on ground</td>
            <td><?php echo (getFiled('Q4L6', $schoolUserID) != "") ? getFiled('Q4L6', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(d) Surface parking area</td>
            <td><?php echo (getFiled('Q4L7', $schoolUserID) != "") ? getFiled('Q4L7', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(e) Service area on ground</td>
            <td><?php echo (getFiled('Q4L8', $schoolUserID) != "") ? getFiled('Q4L8', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td colspan="2"><label><span class="cube">1B</span>Other General Area in Campus</label></td>
          </tr>
          <tr>
            <td>(i) Roof and terrace area</td>
            <td><?php echo (getFiled('Q4L9', $schoolUserID) != "") ? getFiled('Q4L9', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(ii) Green cover on exposed roof and terrace</td>
            <td><?php echo (getFiled('Q4L10', $schoolUserID) != "") ? getFiled('Q4L10', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(iii) Total built-up/constructed area</td>
            <td><?php echo (getFiled('Q4L11', $schoolUserID) != "") ? getFiled('Q4L11', $schoolUserID) : "N/A"; ?></td>
          </tr>
          <tr>
            <td>(iv) Total number of floors (excluding ground floor) </td>
            <td><?php echo (getFiled('Q4L12', $schoolUserID) != "") ? getFiled('Q4L12', $schoolUserID) : "N/A"; ?></td>
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
    <p> Native (definition): a species that occurs naturally
      within a region, either evolving
      there or arriving and becoming established without human
      assistance</p>
    <p> Exotic (definition): An exotic plant or animal, which is
      invasive, is a species that
      meets the following conditions:</p>
    <ol>
      <li> Originate outside the local area.</li>
      <li> Have the potential to spread long distances on its
        own. </li>
      <li> Once established, have the potential to out-compete
        native species in the wild. </li>
    </ol>
    <ul class="list">
      <li>
        <p class="orange"><span>2</span> How many species of plants and animals exist in your school?</p>
        <table class="table">
          <tr>
            <th></th>
            <th>Native</th>
            <th>Exotic</th>
            <th>Total</th>
          </tr>
          <tr>
            <td>Plants</td>
            <td><?php echo (getFiled('Q5L1S1', $schoolUserID) != "") ? getFiled('Q5L1S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S2', $schoolUserID) != "") ? getFiled('Q5L1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S3', $schoolUserID) != "") ? getFiled('Q5L1S3', $schoolUserID) : "N/A"; ?> </td>
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
        <p class="orange"><span>3</span>Do you use chemical-based pesticides in your school green cover?</p>
        <p> <?php echo (getFiled('Q6L1', $schoolUserID) != "") ? (getFiled('Q6L1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
    </ul>
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
  <div class="support_files"> No documents uploaded by the school. </div>
  <?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section waterpage_break page_break"><img src="assets/img/images/water.png" width="94" height="94">Water</h2>
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
    <p> To find total consumption, monitor water consumption over a period of three working days, spread
      over one month and take the average.The observations should be carried out when more than 90% of
      school strength is present</p>
    <p> For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all
      three total consumptions and then divide it with number of days of observation (that is three
      days). You will get an average per day water consumption.</p>
    <p><strong>To collect data: </strong><a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/" target="_blank"> </a></p>
    <p><strong>The bill method:</strong> If the school’s water meter is monitored regularly—water bills
      by the government/municipality state the actual amount used—students can simply compile bills to
      assess total consumption.</p>
    <p><strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then
      monitor the overhead tanks. Note the difference in levels of water in your overhead tank between
      the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check
      the water level when school is over by noting the difference in levels of water in your overhead
      tank between beginning and end of a day. Estimate consumption.</p>
    <p><strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know
      its measurement. Then switch on the underground-water pump. Let the water run out of the
      hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate
      the flow of water in litres per minute. Find out (from the gardener or other administrative
      staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor
      runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor
      is run by how much water comes out from the hose pipe in a minute. The administrative staff and
      the plumber would be helpful in gauging the above. Conduct an audit for two or three days and
      then take an average to find the total consumption.</p>
    <p class="orange"><span>1</span><span>Calculate your school’s water consumption, per activity:</span></p>
    <p><strong>&nbsp;To collect data:</strong></p>
    <p> The school will use a glass (250 ml) for drinking during the audit period; they should know the volume
      of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.</p>
    <p> To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be
      used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please
      monitor over a period of 15 working days.</p>
    <p><strong>Gardening:</strong> To measure total water used in Gardening, first find out what is the method
      of watering garden.</p>
    <ul>
      <li> If water from water storage tank is used with hose pipes then measure the capacity of storage tank.
        Fill the storage tank before watering session. After watering the plants, measure the water left in
        the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank.&nbsp; </li>
      <li> If garden is watered manually with buckets then measure the capacity of the bucket and multiply by
        number of times the bucket is filled to water plants. </li>
      <li> If sprinkler irrigation is used to water garden, then measure the quantity of water released by the
        sprinklers and multiply it by the time the sprinkler system &nbsp;works.&nbsp; </li>
    </ul>
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
        <p class="orange"><span>3</span> Who supplies the water in your school? (please tick the correct options):</p>
        <ul class="list-unstyled">
          <?php
                    if (getFiled('Q6W1', $schoolUserID) == 1):
                        echo "Municipality";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W2', $schoolUserID) == 1):
                        echo "Panchayat";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W3', $schoolUserID) == 1):
                        echo "Public Health Engineering Department (PHED)";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W4', $schoolUserID) == 1):
                        echo "Private supplier";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W5', $schoolUserID) == 1):
                        echo "School's own supply (bore well, rainwater harvesting facility, etc)";
                    endif;
                    ?>
        </ul>
      </li>
      <li>
        <p class="orange"><span>4</span> Does your school get daily water supply?</p>
        <p> <?php echo (getFiled('Q7W1', $schoolUserID) != "") ? (getFiled('Q7W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q7W1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange"><span>4(a)</span> Does your school get daily water supply?</p>
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
      </li>
      <?php else: ?>
      <li>
        <p class="orange"><span>4(b)</span> Does your school get daily water supply?</p>
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
    <h3>Task 4: What are the water conservation practices followed in your school?</h3>
    <ul class="list">
      <li>
        <p class="orange"><span>5</span> What are the water conservation practices your school follows</p>
        <table class="table">
          <tr>
            <th> Activity </th>
            <th>Total Quantity (litres per day) </th>
          </tr>
          <tr>
            <td> Does your school have any water and
              sanitation policy?</td>
            <td><?php echo (getFiled('Q8W1S1', $schoolUserID) != "") ? (getFiled('Q8W1S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>If your school has an eco-club, do
              they have water component?</td>
            <td><?php echo (getFiled('Q8W1S2', $schoolUserID) != "") ? (getFiled('Q8W1S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Do all tanks in the school have
              float valves installed to stop overflow? </td>
            <td><?php echo (getFiled('Q8W1S3', $schoolUserID) != "") ? (getFiled('Q8W1S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Do the drinking water points have
              spill proof taps to check overflow?</td>
            <td><?php echo (getFiled('Q8W1S4', $schoolUserID) != "") ? (getFiled('Q8W1S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Does your school use appliances
              with a quick-wash setting?</td>
            <td><?php echo (getFiled('Q8W1S5', $schoolUserID) != "") ? (getFiled('Q8W1S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Are dual flush systems installed in
              the toilets?</td>
            <td><?php echo (getFiled('Q8W1S6', $schoolUserID) != "") ? (getFiled('Q8W1S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Does your school encourage bottled
              water for drinking water?</td>
            <td><?php echo (getFiled('Q8W1S7', $schoolUserID) != "") ? (getFiled('Q8W1S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Does your school grow local plant
              species which require limited amount of water to grow?</td>
            <td><?php echo (getFiled('Q8W1S8', $schoolUserID) != "") ? (getFiled('Q8W1S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Has your school initiated any water
              conservation steps in the school or outside, in the past one year?</td>
            <td><?php echo (getFiled('Q8W1S9', $schoolUserID) != "") ? (getFiled('Q8W1S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Does your school use a drip or
              irrigation system?</td>
            <td><?php echo (getFiled('Q8W1S10', $schoolUserID) != "") ? (getFiled('Q8W1S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>Any other step taken for water
              conservation? (if Yes, please specify)</td>
            <td><?php echo (getFiled('Q8W1S11', $schoolUserID) != "") ? (getFiled('Q8W1S11', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </td>
          </tr>
        </table>
      </li>
      <li>
        <p class="orange"><span>4.2</span>Upload supporting documents</p>
        <p>Please upload all supporting documents related to this section here. Note: files must be in one of the following formats: PDF Document
          .pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg)</p>
        <?php
        $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Task_4_Supporting_docs_', $schoolUserID);
        if (!empty($arrImages)) {
            ?>
        <table class="table">
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
          <?php foreach ($arrImages as $a) { ?>
          <tr>
            <td><img src="uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Task_4_Supporting_docs_"), " ", $a->file_name); ?></td>
          </tr>
          <?php } ?>
        </table>
      </li>
    </ul>
  </div>
  <?php } else { ?>
  <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
</div>
<div class="task-area">
  <h3>Task 5: Does your school harvest rainwater? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></h3>
  <p>Rainfall (precipitation) is the primary source of freshwater on land. In this section, you
    will find out how much rainwater your school can catch, and how much your school can
    harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater
    and using it to recharge groundwater or storing it for other uses.<br>
    To know the types of catchment <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></p>
  <ul class="list">
    <li>
      <p class="orange"><span>6</span>Do you have Rainwater harvesting (RWH) system in your school?</p>
      <p> <?php echo (getFiled('Q8W2', $schoolUserID) != "") ? (getFiled('Q8W2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(strcmp(getFiled('Q8W2', $schoolUserID),'N')==0): ?>
    <li>
      <p class="orange"><span>6(a)</span>Calculate your school's rainwater harvesting potential (in litres). </p>
      <p> <?php echo (getFiled('Q8W2S6', $schoolUserID) != "") ? getFiled('Q8W2S6', $schoolUserID)  : "N/A"; ?></p>
    </li>
    <?php elseif(strcmp(getFiled('Q8W2', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"><span>6(a)</span>Does your school harvest different catchments? </p>
      <p> <?php echo (getFiled('Q8W2S1', $schoolUserID) != "") ? (getFiled('Q8W2S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
<?php if(!empty(getFiled('Q8W2S1', $schoolUserID)) && getFiled('Q8W2S1', $schoolUserID) == "Y"){ ?>	  
    <li>
      <p class="orange"><span>6(a)(1)</span>Which is the catchment area being harvested by your school? </p>
      <p>
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
      </p>
    </li>
<?php } ?>	  
    <li>
      <p class="orange"><span>6(b)</span> How does your school harvest rainwater? </p>
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
      <p class="orange"><span class="cube">6(b)(1)</span>If your school only stores rainwater, please select
        the use of stored rainwater: </p>
      <p>
        <?php
            if (getFiled('Q8W2S2S1', $schoolUserID) == 1):
                echo "Drinking";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S2', $schoolUserID) == 1):
                echo "Gardening";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S3', $schoolUserID) == 1):
                echo "Mopping";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S4', $schoolUserID) == 1):
                echo " Toilets";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S5', $schoolUserID) == 1):
                echo "Washing vehicles";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S6', $schoolUserID) == 1):
                echo "Kitchen (Cooking/Washing vegetables and utensils)";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S7', $schoolUserID) == 1):
                echo "Shower, Brushing teeth, Bathing, Hand washing";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S8', $schoolUserID) == 1):
                echo "Swimming Pool";
            endif;
            if (getFiled('Q8W2S2S9', $schoolUserID) == 1):
                echo "Fire fighting";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S10', $schoolUserID) == 1):
                echo "Desert coolers";
            endif;
            ?>
      </p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(2)</span> Does your school have rainwater storage tank?</p>
      <p> <?php echo (getFiled('Q8W2S2S2', $schoolUserID) != "") ? (getFiled('Q8W2S2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(2) A</span>If yes, please provide: </p>
      <p> <strong>Total number of storage tank (litres): </strong><br/>
        <?php echo (getFiled('Q8W2S2S3', $schoolUserID) != "") ? getFiled('Q8W2S2S3', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(2) B</span>If yes, please provide: </p>
      <p><strong>Total capacity of each storage tank
        (litres): </strong><br/>
        <?php echo (getFiled('Q8W2S2S4', $schoolUserID) != "") ? getFiled('Q8W2S2S4', $schoolUserID) : "N/A"; ?> </p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(2) C</span>Location of tanks:</p>
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
    <li>
      <p class="orange"><span class="cube">6(b)(2) D</span>Material options for tanks:</p>
      <ul>
        <?php
            if (getFiled('Q8W2S2S6', $schoolUserID) == 1):
                echo "PVC";
            elseif (getFiled('Q8W2S2S6', $schoolUserID) == 2):
                echo "RCC";
            elseif (getFiled('Q8W2S2S6', $schoolUserID) == 3):
                echo "Brick";
            elseif (getFiled('Q8W2S2S6', $schoolUserID) == 4):
                echo "Combination of PVC + RCC + brick ";


            endif;
            ?>
      </ul>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(3)</span>Does your school have groundwater recharge
        structure? </p>
      <p> <?php echo (getFiled('Q8W2S2S7', $schoolUserID) != "") ? (getFiled('Q8W2S2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(3) i</span>If yes, please provide: </p>
      <p><strong> Please share the total number of groundwater
        recharge structures </strong><br/>
        <?php echo (getFiled('Q8W2S2S8', $schoolUserID) != "") ? getFiled('Q8W2S2S8', $schoolUserID) : "N/A"; ?> </p>
    </li>
    <li>
      <p class="orange"><span class="cube">6(b)(3) ii</span>Please tick the type of groundwater recharge
        structure used in your school: </p>
      <p>
        <?php
            if (getFiled('Q8W2S2S91', $schoolUserID) == 1):
                echo "Percolation pit/tank";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S92', $schoolUserID) == 1):
                echo "Recharge through abandoned dug well";
                echo "<br/>";
            endif;
            if (getFiled('Q8W2S2S93', $schoolUserID) == 1):
                echo "Recharge through abandoned tube well/bore well";
                echo "<br/>";
            endif;
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
    <li>
      <p class="orange">
        <label><span class="cube">6(b)(4)</span>If your school practices rainwater harvesting, then
        what is the ratio between storage and recharge </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S2S10', $schoolUserID) == 1):
            echo "Storage = Recharge";
        elseif (getFiled('Q8W2S2S10', $schoolUserID) == 2):
            echo "Storage &gt; Recharge";
        elseif (getFiled('Q8W2S2S10', $schoolUserID) == 3):
            echo "Recharge &gt; Storage";
        elseif (getFiled('Q8W2S2S10', $schoolUserID) == 4):
            echo "Only recharge ";
        elseif (getFiled('Q8W2S2S10', $schoolUserID) == 5):
            echo "Only storage ";
        endif;
        ?>
      </p>
    </li>
<?php } } ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(c)</span>How much area in your school is harvested? </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S4', $schoolUserID) == 1):
            echo "10 to 20 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 2):
            echo "21 to 30 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 3):
            echo "31 to 40 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 4):
            echo "41 to 50 per cente ";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 5):
            echo "51 to 60 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 6):
            echo "61 to 70 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 7):
            echo "71 to 80 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 8):
            echo " 81 to 90 per cent";
        elseif (getFiled('Q8W2S4', $schoolUserID) == 9):
            echo "91 to 100 per cent";
        endif;
        ?>
      </p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">6(d)</span>Please select (from the list given below) the rainwater
        harvesting structures present in your school: </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S31', $schoolUserID) == 1):
            echo "Conduits";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S32', $schoolUserID) == 1):
            echo "Gutters";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S33', $schoolUserID) == 1):
            echo "Filter unit";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S34', $schoolUserID) == 1):
            echo " First flush";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S35', $schoolUserID) == 1):
            echo "Storage tank";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S36', $schoolUserID) == 1):
            echo "Collection sump";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S37', $schoolUserID) == 1):
            echo "Pump unit";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S38', $schoolUserID) == 1):
            echo "Recharge structure";
            echo "<br/>";
        endif;
        ?>
      </p>
    </li>
<?php if (getFiled('Q8W2S33', $schoolUserID) == 1){ ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(d)(1)</span> Where is your filter unit? </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S4S1', $schoolUserID) == 1):
            echo "Before storage tank";
        elseif (getFiled('Q8W2S4S1', $schoolUserID) == 2):
            echo "Before recharge system";
        elseif (getFiled('Q8W2S4S1', $schoolUserID) == 3):
            echo "Before both storage tank and recharge systemt";
        elseif (getFiled('Q8W2S4S1', $schoolUserID) == 4):
            echo "We do not use filters";
        endif;
        ?>
      </p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">6(d)(2)</span>Types of filter used in your school: </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S4S21', $schoolUserID) == 1):
            echo "Sand gravel filter";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S4S22', $schoolUserID) == 1):
            echo "Charcoal filter";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S4S23', $schoolUserID) == 1):
            echo "Readymade on line filter";
            echo "<br/>";
        endif;
        if (getFiled('Q8W2S4S24', $schoolUserID) == 1):
            echo " Chemical used";
            echo "<br/>";
        endif;
        ?>
      </p>
    </li>
 <?php } ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(e)</span>Rate your catchment on cleanliness: </label>
      </p>
      <p>
        <?php
        if (getFiled('Q8W2S5', $schoolUserID) == 1):
            echo "Good";
        elseif (getFiled('Q8W2S5', $schoolUserID) == 2):
            echo "Average";
        elseif (getFiled('Q8W2S5', $schoolUserID) == 3):
            echo "Poor";

        endif;
        ?>
      </p>
    </li>
    <p class="orange">
      <label>Please upload a flow chart (hand drawn) of the wastewater treatment process.<br>
      </label>
    </p>
    <?php
        $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Water_Treatment_Process_', $schoolUserID);
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
          <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Water_Treatment_Process_"), " ", $a->file_name); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <?php } else { ?>
    <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <li>
      <p class="orange">
        <label><span class="cube">6(f)</span>Does your school clean your catchment and system </label>
      </p>
      <p> <?php echo (getFiled('Q8W2S61', $schoolUserID) != "") ? (getFiled('Q8W2S61', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
<?php if(!empty(getFiled('Q8W2S61', $schoolUserID)) && getFiled('Q8W2S61', $schoolUserID) == "Y"){ ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(f)(1)</span>Please specify when does your school clean the
        catchment and RWH system? </label>
      </p>
      <?php
        if (getFiled('Q8W2S7', $schoolUserID) == 1):
            echo "Pre-monsoon";
        elseif (getFiled('Q8W2S7', $schoolUserID) == 2):
            echo "Post-monsoon";
        elseif (getFiled('Q8W2S7', $schoolUserID) == 3):
            echo "Do not follow any such pattern";

        endif;
        ?>
    </li>
<?php } ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(g)</span>Does your school monitor the rainwater harvesting
        structure for its efficiency? </label>
      </p>
      <p> <?php echo (getFiled('Q8W2S8', $schoolUserID) != "") ? (getFiled('Q8W2S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
<?php if(!empty(getFiled('Q8W2S8', $schoolUserID)) && getFiled('Q8W2S8', $schoolUserID) == "Y"){ ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(g)(1)</span>Please specify when does your school monitor the
        groundwater level? </label>
      </p>
      <?php
        if (getFiled('Q8W2S9', $schoolUserID) == 1):
            echo "Pre-monsoon";
        elseif (getFiled('Q8W2S9', $schoolUserID) == 2):
            echo "Post-monsoon";
        elseif (getFiled('Q8W2S9', $schoolUserID) == 3):
            echo "Do not follow any such pattern";

        endif;
        ?>
    </li>
<?php } ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(h)</span>What is the trend of groundwater level in your school
        across the year? </label>
      </p>
      <?php
        if (getFiled('Q8W2S10', $schoolUserID) == 1):
            echo "If there was a decrease, please specify";
        elseif (getFiled('Q8W2S10', $schoolUserID) == 2):
            echo "If there was an increase, please specify ";
        elseif (getFiled('Q8W2S10', $schoolUserID) == 3):
            echo "No change ";

        endif;
        ?>
    </li>
 <?php if(getFiled('Q8W2S10', $schoolUserID) != 3){ ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(h)(1)</span>Please specify how much was the decrease? </label>
      </p>
      <?php
        if (getFiled('Q8W2S11', $schoolUserID) == 1):
            echo "Less than a metre annually";
        elseif (getFiled('Q8W2S11', $schoolUserID) == 2):
            echo "1-5 metre annually ";
        elseif (getFiled('Q8W2S11', $schoolUserID) == 3):
            echo "More than 5 metres annually ";

        endif;
        ?>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">6(h)(2)</span>Please specify how much was the increase? </label>
      </p>
      <?php
        if (getFiled('Q8W2S12', $schoolUserID) == 1):
            echo "Less than a metre annually";
        elseif (getFiled('Q8W2S12', $schoolUserID) == 2):
            echo "1-5 metre annually ";
        elseif (getFiled('Q8W2S12', $schoolUserID) == 3):
            echo "More than 5 metres annually ";

        endif;
        ?>
    </li>
<?php } ?>	  
    <li>
      <p class="orange">
        <label><span class="cube">6(i)</span>If your school's RWH structure is more than a year old,
        is there any improvement in the groundwater quality after the implementation of the RWH
        structure?</label>
      </p>
      <p> <?php echo (getFiled('Q8W2S13', $schoolUserID) != "") ? (getFiled('Q8W2S13', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php endif; ?>
  </ul>
  <p class="orange">
    <label>To calculate the maximum rainwater harvesting potential:</label>
  </p>
  <p> Area = length X breadth<br>
    Roof top potential (cu.m ) = Rooftop area (in sq m) x mm (if in mm then convert to m) of
    rainfall x 0.85<br>
    Paved potential (cu.m.) = Paved area (sq m) x mm (if in mm then convert to m) of rainfall x
    0.70<br>
    Unpaved potential (cu.m.) = Unpaved area (sq m) x mm (if in mm then convert to m) of
    rainfall x 0.30<br>
    <b>Maximum rainwater harvesting potential of the school</b>= Maximum Rooftop potential
    ___(cu.m) + Maximum Paved potential__ (cu.m) + Maximum Unpaved potential ______(cu.m)<br>
    Run-off coefficient is the amount of rainwater retained in an area and mainly dependent on
    roof type and catchment.</p>
  <table class="table">
    <tr>
      <td> Area</td>
      <td> Catchment Run-off coefficient</td>
    </tr>
    <tr>
      <td> Roof</td>
      <td> 0.85</td>
    </tr>
    <tr>
      <td> Paved area Driveways/courtyards, roads</td>
      <td> 0.70</td>
    </tr>
    <tr>
      <td> Unpaved area garden, playground</td>
      <td> 0.30</td>
    </tr>
  </table>
  <p><strong> Note:</strong> *For Average Rainfall Data refer to Knowledge Bank: <a class="kplink" href="&#10;http://www.greenschoolsprogramme.org/knowledge-bank/water/annexure-i/" target="_blank"> </a>www.greenschoolsprogramme.org </p>
</div>
<div class="task-area">
  <h3 class="task">Task 6: Are the plumbing and sanitation facilities in your school adequate?</h3>
  <p>Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these
    hampers attendance, especially of girls in senior grades.</p>
  <ul class="list">
    <li>
      <p class="orange">
        <label><span class="cube">7</span>Please share details about
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
      </table>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">8</span>How many drinking water taps do you have?</label>
      </p>
      <p><?php echo (getFiled('Q9W1', $schoolUserID) != "") ? getFiled('Q9W1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">9</span>How many hand pumps do you have?</label>
      </p>
      <p><?php echo (getFiled('Q10W1', $schoolUserID) != "") ? getFiled('Q10W1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">10</span>How many ablution taps (taps used for washing hands only)
        do you have?</label>
      </p>
      <p><?php echo (getFiled('Q11W1', $schoolUserID) != "") ? getFiled('Q11W1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">11</span>How many water closets (used for
        defecation and urination) do you have?</label>
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
      <p class="orange">
        <label><span class="cube">12</span>How many urinals (strictly used for urination only)
        do you have?</label>
      </p>
      <p><?php echo (getFiled('Q14W1', $schoolUserID) != "") ? getFiled('Q14W1', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">13</span>How many other water outlets (example: taps in play
        fields, sprinklers, swimming pool) do you have?</label>
      </p>
      <p> <?php echo (getFiled('Q15W1', $schoolUserID) != "") ? getFiled('Q15W1', $schoolUserID) : "N/A"; ?> </p>
    </li>
    <li>
      <label><strong> Water supply and cleaning of toilets in your school: </strong></label>
      <p class="orange">
        <label ><span class="cube">14</span>Is there a water storage system in
        place to supply water in the toilets?</label>
      </p>
      <p> <?php echo (getFiled('Q16W1', $schoolUserID) != "") ? (getFiled('Q16W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">15</span>Is the water supply
        sufficient?</label>
      </p>
      <p> <?php echo (getFiled('Q21W1', $schoolUserID) != "") ? (getFiled('Q21W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">16</span>Are the toilets cleaned?</label>
      </p>
      <p> <?php echo (getFiled('Q18W1', $schoolUserID) != "") ? (getFiled('Q18W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(strcmp(getFiled('Q18W1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange">
        <label><span class="cube">16(a)</span>If yes, please
        specify</label>
      </p>
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
    <?php endif; ?>
  </ul>
</div>
<div class="task-area">
  <h3>Task 7: Does your school reuse/recycle waste water? </h3>
  <p>Water recycling is the process of treating waste or used water, in order to upgrade its quality, so that it can be used again. When water, once used for a particular
    purpose, is put to use again, it is then being reused.</p>
  <ul class="list">
    <li>
      <p class="orange"><span class="cube">17</span>Does your school treat
        wastewater?</p>
      <p> <?php echo (getFiled('Q19W1', $schoolUserID) != "") ? (getFiled('Q19W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">18</span>Does your school reuse the
        treated wastewater?</label>
      </p>
      <p> <?php echo (getFiled('Q20W1', $schoolUserID) != "") ? (getFiled('Q20W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(strcmp(getFiled('Q20W1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"><span class="cube">18(a)</span>How does your
        school reuse wastewater?</p>
      <p>
        <?php
                    if (getFiled('Q20W2', $schoolUserID) == 1):
                        echo "Grdening";
                    elseif (getFiled('Q20W2', $schoolUserID) == 2):
                        echo "Flushing";
                    elseif (getFiled('Q20W2', $schoolUserID) == 3):
                        echo " Recharge Ground Water";

                    endif;
                    ?>
      </p>
    </li>
    <?php else: ?>
    <li>
      <p class="orange">
        <label><span class="cube">18(a)</span>Please specify the fate of wastewater:</label>
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
    <?php endif; ?>
    <li>
      <?php
        $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Flow_Chart_Hand_Drwan_', $schoolUserID);
        if (!empty($arrImages)) {
            ?>
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
    </li>
  </ul>
</div>
<?php } else { ?>
<div class="support_files">No documents uploaded by the school. </div>
<?php } ?>
</div>
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
<div class="support_files"> No documents uploaded by the school. </div>
<?php } ?>
</div>
<div style="text-align: center; padding: 0;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<h2 class="heading section waste page_break"><img src="assets/img/images/waste.png" width="94" height="94">Waste</h2>
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
      </li>
      <?php endif; ?>
      <li>
        <p class="orange"><span class="cube">2</span>How many categories does your school segregate waste into? </p>
        <?php
        if (getFiled('Q4Wa2', $schoolUserID) == 1):
            echo "Two";
        elseif (getFiled('Q4Wa2', $schoolUserID) == 2):
            echo "Three";
        elseif (getFiled('Q4Wa2', $schoolUserID) == 3):
            echo "More than three";

        endif;
        ?>
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
            <td> Laboratory </td>
            <td><?php echo (getFiled('Q5Wa5S1', $schoolUserID) != "") ? getFiled('Q5Wa5S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S2', $schoolUserID) != "") ? getFiled('Q5Wa5S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S3', $schoolUserID) != "") ? getFiled('Q5Wa5S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S4', $schoolUserID) != "") ? getFiled('Q5Wa5S4', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5Wa5S5', $schoolUserID) != "") ? getFiled('Q5Wa5S5', $schoolUserID) : "N/A"; ?> </td>
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
    <h3 class="task">Task 3: How much waste does your school generate?</h3>
    <p>There is nothing known as waste – waste is just a misplaced resource. Therefore ideally, a school should
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
          <label><span class="cube">3</span>Determine the quantity of waste generated in your school. (in kilogram) </label>
        </p>
        <h6>a. Biodegradable/Wet Waste</h6>
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
        <h6>b. Dry/recyclable waste</h6>
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
        <h6>C. Domestic hazardous waste</h6>
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
            <td> Oil from DG sets </td>
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
        <h6>d. E-Waste</h6>
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
        <h6>d. Biomedical waste</h6>
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
        <h6>f. Sanitary waste</h6>
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
        <h6>g. Cc& D Waste</h6>
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
        $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_Audit_Team_Weighing_Solid_Waste_', $schoolUserID);
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
              <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_Audit_Team_Weighing_Solid_Waste_"), " ", $a->file_name); ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <?php } else { ?>
        <div class="support_files"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
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
        <p class="orange">
          <span class="cube">4</span>Does your school recycle any generated waste?
        </p>
        <p> <?php echo (getFiled('Q8Wa1', $schoolUserID) != "") ? (getFiled('Q8Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </li>
      <?php if(strcmp(getFiled('Q8Wa1', $schoolUserID),'Y')==0): ?>
      <li>
        <p class="orange">
          <label><span class="cube">4(a)</span>Please provide quantity of which is applicable</label>
        </p>
        <h6>a. Biodegradable/Wet Waste</h6>
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
        <h6>b. Dry/recyclable waste</h6>
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
        <h6>c. Domestic hazardous waste</h6>
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
        <h6>d. E-Waste</h6>
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
        <h6>e. Biomedical waste</h6>
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
        <h6>f. Sanitary waste</h6>
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
        <h6>g. C &amp; D Waste</h6>
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
        <label><span class="cube">5</span>Does your school have a composting facility?</label>
      </p>
      <p> <?php echo (getFiled('Q9Wa1', $schoolUserID) != "") ? (getFiled('Q9Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
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
    </li>
    <?php if(strcmp(getFiled('Q9Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange">
        <label><span class="cube">5(a)</span>What is the methodology used?</label>
      </p>
      <p>
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
        <label for="username"><span class="cube">5(b)</span>What is the quantity of compost that is generated per month (in kilogram)?</label>
      </p>
      <p><?php echo (getFiled('Q9Wa3', $schoolUserID) != "") ? getFiled('Q9Wa3', $schoolUserID) : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange">
        <label><span class="cube">5(c)</span> What is the purpose of the compost that is generated per month? </label>
      </p>
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
      <p class="orange">
        <label><span class="cube">6</span>Does your school encourage students &amp; teachers to reuse textbooks? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#chomp" target="_blank"></a></label>
      </p>
      <p> <?php echo (getFiled('Q10Wa1', $schoolUserID) != "") ? (getFiled('Q10Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
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
  <?php } else { ?>
  <div class="support_files"> No documents uploaded by the school.</div>
  <?php } ?>
  <ul class="list">
    <li>
      <p class="orange">
        <label><span class="cube">8</span>Does your school have the following? If yes, please give the numbers of items in working condition and those that are not.</label>
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
  <div class="support_files">No documents uploaded by the school.</div>
  <?php } ?>
  <ul class="list">
    <li>
      <p class="orange"> <span class="cube">9</span>Do you know that your e-waste can be collected by an authorized dealer or dismantler? </p>
      <p> <?php echo (getFiled('Q13Wa1', $schoolUserID) != "") ? (getFiled('Q13Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(strcmp(getFiled('Q13Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"> <span class="cube">9(a)</span>Who collects your e-waste, when not in working condition? </p>
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
  </ul>
  <?php
    $arrImages = getUploadData(str_replace(' ', '_', $school[0]->name) . '_E-waste_authorised_dealer_', $schoolUserID);
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
        <td><?php echo str_replace(str_replace(' ', '_', $school[0]->name . "_E-waste_authorised_dealer_"), " ", $a->file_name); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } else { ?>
  <div class="support_files"> No documents uploaded by the school. </div>
  <?php } ?>
</div>
<div class="task-area">
  <h3 class="task">Task 5: How does your school dispose of waste?</h3>
  <ul class="list">
    <li>
      <p class="orange"><span>10</span> What is the final destination for waste from your
        school that is disposed of externally? </p>
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
      <div class="support_files">No documents uploaded by the school. </div>
      <?php } ?>
    </li>
    <li>
      <p class="orange">
        <label class="control-label"><span class="cube">11</span>Does your school burn waste? </label>
      </p>
      <p> <?php echo (getFiled('Q15Wa1', $schoolUserID) != "") ? (getFiled('Q15Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
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
      <div class="support_files"> No documents uploaded by the school. </div>
      <?php } ?>
    </li>
    <?php if(strcmp(getFiled('Q15Wa1', $schoolUserID),'Y')==0): ?>
    <li>
      <p class="orange"> <span>11(a)</span>Where does your school burn
        waste? </p>
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
      <p class="orange"> <span>11(b)</span>What kind of waste is burnt/incinerated? </p>
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
      <p class="orange"> <span>12</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </p>
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
      <p class="orange"><span>13</span>Does the school have a policy on waste?</p>
      <p> <?php echo (getFiled('Q17Wa1', $schoolUserID) != "") ? (getFiled('Q17Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <li>
      <p class="orange"><span>14</span> Are there awareness drives with regard to Reduce,
        Recycle and Reuse? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation" target="_blank"></a></p>
      <p> <?php echo (getFiled('Q18Wa1', $schoolUserID) != "") ? (getFiled('Q18Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
    <?php if(getFiled('Q18Wa1', $schoolUserID) == "Y"){ ?>
    <li>
      <p class="orange">
        <label class="control-label">Please upload supporting documents:</label>
      </p>
      <p> Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc</p>
      <p class="orange"><span>14(a)</span> What form do these awareness drives
        take? </p>
      <?php
     if (getFiled('Q18Wa2S1', $schoolUserID) == 1){
        echo "As part of the curriculum <br/>";}
     if (getFiled('Q18Wa2S2', $schoolUserID) == 2){
        echo " As part of extracurricular activities such as guest lectures <br/>";}
      if (getFiled('Q18Wa2S3', $schoolUserID) == 3){
        echo " By the showcasing of posters and stickers  ";}
	?>
    </li>
    <?php } ?>
    <li>
      <p class="orange"><span>15</span> Is the study of the environment integrated into the
        curriculum?</p>
      <p> <?php echo (getFiled('Q19Wa1', $schoolUserID) != "") ? (getFiled('Q19Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </li>
  </ul>
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
  <div class="support_files"> No documents uploaded by the school. </div>
  <?php } ?>
</div>
</body>
</html>
