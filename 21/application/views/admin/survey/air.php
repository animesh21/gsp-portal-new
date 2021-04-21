<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
    <div class="intro">
      <h1>AIR <span class="h5">(<?php echo $school->name;
?>)</span></h1>
      <p> The Air section involves finding out your school's contribution in polluting the air. The information
        will help in devising strategies for clean air in the coming years.</p>
      <p><strong>The unit of measurement to be used in the Air section is square meter (m<sup>2</sup>).</strong> </p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 1: Choose your Air Audit Team</h6>
        <p> You would require at least five to 10 of your schoolmates in the Air audit team. The teacher
          co-ordinator may be a science or social science teacher, with an interest in air pollution
          issues. Do include the school transport in-charge and the drivers of the school vehicles in your
          audit team.</p>
      </div>
      </label>
    </div>
    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label class="control-label">Administrative staff (maximum of five staff can be part of the
      team):</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label class="control-label">Students (maximum of ten students can be part of the team):</label>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Sr no</th>
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
    <div class="clearfix">&nbsp;</div>
    <div class="form-group">
      <label>
      <h6>Task 2: Are the rooms in your school well-ventilated?</h6>
      </label>
      <br>
      1. For this exercise, classrooms that are occupied by students regularly should be considered. Do not
      add laboratories or the auditorium.<br>
      2. Openings: are there any windows and ventilators which can be opened on regular basis and can be
      opened anytime? <br>
      3. This exercise should be done by schools with centrally air conditioning system also. <br>
      4. The exercise should be carried out for ten classrooms only. Sample size should have representation
      from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and
      higher secondary. If your school is up to Standard X only, then, at your discretion, you can add a class
      to any tier. <br>
      5. This activity is for all schools (non-air-conditioned buildings as well as air-conditioned
      buildings). </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">1</span>How many classrooms does your school
      have?</label>
      <p><?php echo (getFiled('Q4A1', $schoolUserID) != "") ? getFiled('Q4A1', $schoolUserID) : "N/A"; ?></p>
    </div>
  </div>
  <div class="form-group" id="Ratio">
    <label class="control-label"><span class="cube">2</span>To calculate the Window-floor ratio of classrooms in
    your school, please fill the table below:</label>
    <table class="table table-bordered table-striped">
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
  </div>
  <div class="form-group">
    <label>
    <h6> Task 3: How eco-friendly are the vehicles in your school?</h6>
    </label>
    <p> In this section, you will maintain a record of vehicles used by your school. Two critical parameters
      indicate if your vehicles are eco-friendly. One?type of fuel?is given in the table below.</p>
  </div>
  <div class="form-group">
    <label class="control-label"><span class="cube">3</span>What is the ownership of the vehicles used by your
    school? Please choose what is applicable.</label>
    <br/>
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
  </div>
  <?php if(getFiled('Q6A1', $schoolUserID)==3 ||getFiled('Q6A1', $schoolUserID)==4 || getFiled('Q6A1', $schoolUserID)==5){ ?>
  <div class="form-group" id="vehicle">
    <label class="control-label"><span class="cube">3(a)</span>Provide details of school-owned motorised
    vehicles </label>
    <div class="form-group-1 row">
      <div class="col-xs-2">
        <label>Vehicle Details</label>
      </div>
      <div class="col-xs-2">
        <label>Buses</label>
      </div>
      <div class="col-xs-2">
        <label>Cars</label>
      </div>
      <div class="col-xs-2">
        <label>Vans / SUVs</label>
      </div>
      <div class="col-xs-2">
        <label>Others</label>
      </div>
      <div class="col-xs-2">
        <label>Total</label>
      </div>
    </div>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>No. of vehicles</label>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1B1', $schoolUserID) != "") ? getFiled('Q6A2S1B1', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1C1', $schoolUserID) != "") ? getFiled('Q6A2S1C1', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1V1', $schoolUserID) != "") ? getFiled('Q6A2S1V1', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1O1', $schoolUserID) != "") ? getFiled('Q6A2S1O1', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T1', $schoolUserID) != "") ? getFiled('Q6A2S1T1', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
    <hr>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>No. of vehicles more than eight years old</label>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1B2', $schoolUserID) != "") ? getFiled('Q6A2S1B2', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1C2', $schoolUserID) != "") ? getFiled('Q6A2S1C2', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1V2', $schoolUserID) != "") ? getFiled('Q6A2S1V2', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1O2', $schoolUserID) != "") ? getFiled('Q6A2S1O2', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T2', $schoolUserID) != "") ? getFiled('Q6A2S1T2', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
    <hr>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>No. of Air conditioned vehicles</label>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1B3', $schoolUserID) != "") ? getFiled('Q6A2S1B3', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1C3', $schoolUserID) != "") ? getFiled('Q6A2S1C3', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1V3', $schoolUserID) != "") ? getFiled('Q6A2S1V3', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1O3', $schoolUserID) != "") ? getFiled('Q6A2S1O3', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T3', $schoolUserID) != "") ? getFiled('Q6A2S1T3', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
    <hr>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>PUC done</label>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1B4', $schoolUserID) != "") ? getFiled('Q6A2S1B4', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1C4', $schoolUserID) != "") ? getFiled('Q6A2S1C4', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1V4', $schoolUserID) != "") ? getFiled('Q6A2S1V4', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1O4', $schoolUserID) != "") ? getFiled('Q6A2S1O4', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T4', $schoolUserID) != "") ? getFiled('Q6A2S1T4', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
    <hr>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>Authorised parking available </label>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1B5', $schoolUserID) != "") ? getFiled('Q6A2S1B5', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1C5', $schoolUserID) != "") ? getFiled('Q6A2S1C5', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1V5', $schoolUserID) != "") ? getFiled('Q6A2S1V5', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1O5', $schoolUserID) != "") ? getFiled('Q6A2S1O5', $schoolUserID) : "N/A"; ?> </td>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T5', $schoolUserID) != "") ? getFiled('Q6A2S1T5', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
    <hr>
    <div class="form-group1 row">
      <div class="col-xs-2">
        <label>Annual road worthiness certificate (Yes / No)</label>
      </div>
      <div class="col-xs-2">
        <p> <?php echo (getFiled('Q6A2S1B6', $schoolUserID) != "") ? (getFiled('Q6A2S1B6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
      <div class="col-xs-2">
        <p> <?php echo (getFiled('Q6A2S1C6', $schoolUserID) != "") ? (getFiled('Q6A2S1C6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
      <div class="col-xs-2">
        <p> <?php echo (getFiled('Q6A2S1V6', $schoolUserID) != "") ? (getFiled('Q6A2S1V6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
      <div class="col-xs-2">
        <p> <?php echo (getFiled('Q6A2S1O6', $schoolUserID) != "") ? (getFiled('Q6A2S1O6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
      <div class="col-xs-2">
        <td><?php echo (getFiled('Q6A2S1T6', $schoolUserID) != "") ? getFiled('Q6A2S1T6', $schoolUserID) : "N/A"; ?> </td>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="form-group" id="vehicle1" style="display:none;"> </div>
  <div class="form-group">
    <label>Upload supporting documents</label>
    <br>
    PUC certificates of not more than five buses.<br>
    Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image
    File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong> </div>
  <div class="clearfix">&nbsp;</div>
  <?php
    if (!empty($pucCertificate)) {
        ?>
  <table width="100%" class="table">
    <thead>
      <tr>
        <th>image</th>
        <th>File name</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pucCertificate as $a) { ?>
      <tr>
        <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_PUC_Certificate_"), " ", $a->file_name); ?></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
  <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
  <div class="form-group" id="vehicle2">
    <label class="control-label"><span class="cube">3(b)</span>Specify the type of fuel used by your school?s vehicles:</label>
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
          <td><p> <?php echo (getFiled('Q6A2S3D1', $schoolUserID) != "") ? getFiled('Q6A2S3D1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3P1', $schoolUserID) != "") ? getFiled('Q6A2S3P1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3L1', $schoolUserID) != "") ? getFiled('Q6A2S3L1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3C1', $schoolUserID) != "") ? getFiled('Q6A2S3C1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3E1', $schoolUserID) != "") ?  getFiled('Q6A2S3E1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3H1', $schoolUserID) != "") ? getFiled('Q6A2S3H1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3B1', $schoolUserID) != "") ?  getFiled('Q6A2S3B1', $schoolUserID) : "N/A"; ?></p>
        </tr>
        <tr>
          <td>Cars</td>
          <td><p> <?php echo (getFiled('Q6A2S3B1', $schoolUserID) != "") ? getFiled('Q6A2S3B1', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3D2', $schoolUserID) != "") ? getFiled('Q6A2S3D2', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3P2', $schoolUserID) != "") ? getFiled('Q6A2S3P2', $schoolUserID)  : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3L2', $schoolUserID) != "") ?  getFiled('Q6A2S3L2', $schoolUserID)  : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3C2', $schoolUserID) != "") ?  getFiled('Q6A2S3C2', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3E2', $schoolUserID) != "") ?  getFiled('Q6A2S3E2', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3H2', $schoolUserID) != "") ?  getFiled('Q6A2S3H2', $schoolUserID) : "N/A"; ?></p>
        </tr>
        <tr>
          <td>Vans</td>
          <td><p> <?php echo (getFiled('Q6A2S3D3', $schoolUserID) != "") ?  getFiled('Q6A2S3D3', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3P3', $schoolUserID) != "") ?  getFiled('Q6A2S3P3', $schoolUserID)  : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3L3', $schoolUserID) != "") ?  getFiled('Q6A2S3L3', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3C3', $schoolUserID) != "") ?  getFiled('Q6A2S3C3', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3E3', $schoolUserID) != "") ?  getFiled('Q6A2S3E3', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3H3', $schoolUserID) != "") ?  getFiled('Q6A2S3H3', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3B3', $schoolUserID) != "") ? getFiled('Q6A2S3B3', $schoolUserID) : "N/A"; ?></p>
        </tr>
        <tr>
          <td>Other vehicles</td>
          <td><p> <?php echo (getFiled('Q6A2S3D4', $schoolUserID) != "") ?  getFiled('Q6A2S3D4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3P4', $schoolUserID) != "") ?  getFiled('Q6A2S3P4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3L4', $schoolUserID) != "") ?  getFiled('Q6A2S3L4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3C4', $schoolUserID) != "") ?  getFiled('Q6A2S3C4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3E4', $schoolUserID) != "") ?  getFiled('Q6A2S3E4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3H4', $schoolUserID) != "") ?  getFiled('Q6A2S3H4', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3B4', $schoolUserID) != "") ?  getFiled('Q6A2S3B4', $schoolUserID) : "N/A"; ?></p>
        </tr>
        <tr>
          <td>Sub-Total</td>
          <td><p> <?php echo (getFiled('Q6A2S3D5', $schoolUserID) != "") ?  getFiled('Q6A2S3D5', $schoolUserID): "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3P5', $schoolUserID) != "") ?  getFiled('Q6A2S3P5', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3L5', $schoolUserID) != "") ?  getFiled('Q6A2S3L5', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3C5', $schoolUserID) != "") ?  getFiled('Q6A2S3C5', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3E5', $schoolUserID) != "") ?  getFiled('Q6A2S3E5', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3H5', $schoolUserID) != "") ? getFiled('Q6A2S3H5', $schoolUserID) : "N/A"; ?></p>
          <td><p> <?php echo (getFiled('Q6A2S3B5', $schoolUserID) != "") ?  getFiled('Q6A2S3B5', $schoolUserID) : "N/A"; ?></p>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="form-group">
    <label class="control-label">Upload supporting documents</label>
    <br>
    Fuel bills<br>
    Picture of school owned vehicles<br>
    Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image
    File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong>
    <div class="clearfix">&nbsp;</div>
    <?php
        if (!empty($filesfules)) {
            ?>
    <table width="100%" class="table">
      <thead>
        <tr>
          <th>image</th>
          <th>File name</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($filesfules as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Fuels_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <div class="form-group" id="Q6A3S1">
    <label class="control-label"><span class="cube">3(c)</span>IS CNG AVAILABLE IN YOUR STATE?</label>
    <br/>
    <?php echo (getFiled('Q6A3', $schoolUserID) != "") ? (getFiled('Q6A3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </div>
  <?php if(getFiled('Q6A3', $schoolUserID) == "Y"){ ?>
  <div class="form-group" id="Q6A3S1">
    <label class="control-label"><span class="cube">3(c)a</span>IS CNG AVAILABLE IN YOUR AREA?</label>
    <br/>
    <?php echo (getFiled('Q6A4S1', $schoolUserID) != "") ? (getFiled('Q6A4S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </div>
  <?php } ?>
  <div class="form-group">
    <label>
    <h6> Task 4: How do you travel to school every day? </h6>
    </label>
    <p> To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the
      team should ask individual class monitors to record the commuting practices of his/her classmates and the
      teachers, and forward the data to the audit team. After completing the survey, provide the compiled information
      below.</p>
  </div>
  <div class="form-group">
    <label class="control-label"><span class="cube">4</span>Please specify how many members of the
    school community use each type of transport: </label>
    <table class="table table-bordered table-striped">
      <tr>
        <td colspan="5"><label class="control-label"><span class="cube">4(a)</span> Sustainable Motorised Vehicles </label>
        </td>
      </tr>
      <tr>
        <td><label>Mode of transport</label>
        </td>
        <td><label>Students</label>
        </td>
        <td><label>Teaching Staff</label>
        </td>
        <td><label>Non-Teaching Staff</label>
        </td>
        <td><label>Total</label>
        </td>
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
        <td colspan="5"><label class="control-label"><span class="cube">4(b)</span>Private Vehicles</label></td>
      </tr>
      <tr>
        <td><label>Mode of transport</label>
        </td>
        <td><label>Students</label>
        </td>
        <td><label>Teaching Staff</label>
        </td>
        <td><label>Non-Teaching Staff</label>
        </td>
        <td><label>Total</label>
        </td>
      </tr>
      <tr>
        <td><label>Personal four-wheeler</label>
        </td>
        <td><?php echo (getFiled('Q7A7S1', $schoolUserID) != "") ? getFiled('Q7A7S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A7S2', $schoolUserID) != "") ? getFiled('Q7A7S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A7S3', $schoolUserID) != "") ? getFiled('Q7A7S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A7S4', $schoolUserID) != "") ? getFiled('Q7A7S4', $schoolUserID) : "N/A"; ?></td>
      </tr>
      <tr>
        <td><label>Personal two-wheeler</label>
        </td>
        <td><?php echo (getFiled('Q7A8S1', $schoolUserID) != "") ? getFiled('Q7A8S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A8S2', $schoolUserID) != "") ? getFiled('Q7A8S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A8S3', $schoolUserID) != "") ? getFiled('Q7A8S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A8S4', $schoolUserID) != "") ? getFiled('Q7A8S4', $schoolUserID) : "N/A"; ?></td>
      </tr>
      <tr>
        <td colspan="5"><label class="control-label"><span class="cube">4(c)</span>Non-Polluting Mode</label></td>
      </tr>
      <tr>
        <td><label>Mode of transport</label>
        </td>
        <td><label>Students</label>
        </td>
        <td><label>Teaching Staff</label>
        </td>
        <td><label>Non-Teaching Staff</label>
        </td>
        <td><label>Total</label>
        </td>
      </tr>
      <tr>
        <td><label>Bicycle</label>
        </td>
        <td><?php echo (getFiled('Q7A9S1', $schoolUserID) != "") ? getFiled('Q7A9S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A9S2', $schoolUserID) != "") ? getFiled('Q7A9S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A9S3', $schoolUserID) != "") ? getFiled('Q7A9S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A9S4', $schoolUserID) != "") ? getFiled('Q7A9S4', $schoolUserID) : "N/A"; ?></td>
      <tr>
        <td><label>On foot</label>
        </td>
        <td><?php echo (getFiled('Q7A10S1', $schoolUserID) != "") ? getFiled('Q7A10S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A10S2', $schoolUserID) != "") ? getFiled('Q7A10S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A10S3', $schoolUserID) != "") ? getFiled('Q7A10S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A10S4', $schoolUserID) != "") ? getFiled('Q7A10S4', $schoolUserID) : "N/A"; ?></td>
      </tr>
      <tr>
        <td><label>Others (non-motorized)</label>
        </td>
        <td><?php echo (getFiled('Q7A11S1', $schoolUserID) != "") ? getFiled('Q7A11S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A11S2', $schoolUserID) != "") ? getFiled('Q7A11S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A11S3', $schoolUserID) != "") ? getFiled('Q7A11S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A11S4', $schoolUserID) != "") ? getFiled('Q7A11S4', $schoolUserID) : "N/A"; ?></td>
      </tr>
      <tr>
        <td><label>Total</label>
        </td>
        <td><?php echo (getFiled('Q7A12S1', $schoolUserID) != "") ? getFiled('Q7A12S1', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A12S2', $schoolUserID) != "") ? getFiled('Q7A12S2', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A12S3', $schoolUserID) != "") ? getFiled('Q7A12S3', $schoolUserID) : "N/A"; ?></td>
        <td><?php echo (getFiled('Q7A12S4', $schoolUserID) != "") ? getFiled('Q7A12S4', $schoolUserID) : "N/A"; ?></td>
      </tr>
    </table>
  </div>
  <div class="form-group">
    <label class="control-label">
    <h6>Task 5: How good is the air you breathe in your school? </h6>
    </label>
    <p> The starting point of air quality monitoring is to first study if an area has an air pollution problem.
      Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards
      are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>
  </div>
  <div class="form-group">
    <label class="control-label"> <span class="cube">5</span>How many students suffer from respiratory problems? </label>
    <p class="question answer-item text-item numeric-item  integeronly"><?php echo (getFiled('Q8A1', $schoolUserID) != "") ? getFiled('Q8A1', $schoolUserID) : "N/A"; ?></p>
  </div>
  <div class="form-group">
    <label class="control-label"> <span class="cube">6</span>Does the school laboratory have air quality monitoring
    equipment? </label>
    <p><?php echo (getFiled('Q9A1', $schoolUserID) != "") ? (getFiled('Q9A1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
  </div>
  <div class="form-group" id="lab1">
    <label class="control-label">Upload supporting documents</label>
    <br>
    Picture of Air Quality Monitoring equipment of school<br>
    <br>
    Please upload all supporting documents related to this section here. Note: files must be in one of the
    following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per
    document should not exceed <strong>100 KB.</strong><br>
    <br>
    <?php
        if (!empty($airQualityMonitering)) {
            ?>
    <table width="100%" class="table">
      <thead>
        <tr>
          <th>image</th>
          <th>File name</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($airQualityMonitering as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Air_Quality_Monitoring_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <?php if(getFiled('Q9A1', $schoolUserID) != "Y"){ ?>
  <div class="form-group" id="lab" style="display: block;">
    <label class="control-label"><span class="cube">6(a)</span>If No, is there an air quality monitoring
    station
    (private or government) close to your school?</label>
    <p> <?php echo (getFiled('Q9A2', $schoolUserID) != "") ? (getFiled('Q9A2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?> </p>
  </div>
  <?php } ?>
  <div class="form-group" id="WastePolicy">
    <label class="control-label">
    <h6>Please upload supporting documents:</h6>
    </label>
    <br>
    Pictures of audit team doing survey<br>
    Please upload all supporting documents related to this section here. Note, files must be one of the
    following
    formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
    File size per document should not exceed <strong>100 KB.</strong> <br>
    <br>
    <?php
        if (!empty($Supporting_Document_Air)) {
            ?>
    <table width="100%" class="table">
      <thead>
        <tr>
          <th>image</th>
          <th>File name</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Supporting_Document_Air as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Supporting_Document_Air_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
  </div>
  <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/general/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/energy/' . $id) ?>">NEXT</a> </div>
</div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
