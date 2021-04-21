<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
    <div class="intro">
      <h1>WASTE <span class="h5">(<?php echo $school->name;
?>)</span></h1>
      <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><!--<img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;">--></a></div>
    </div>
    <p> Schools can provide excellent educational opportunities for creating awareness about waste and its
      management.<br>
      Waste reduction initiatives save natural resources, energy and landfill space.<br>
      Reducing, reusing, recycling waste material will improve the economic and environmental performance of the
      school.<br>
      The school's waste management programme has the potential to transform the school environment into a
      laboratory for learning.<br>
      It also provides numerous opportunities for the students to understand this issue and its implications on
      the local environment.<br>
      <br>
      <b> The unit of measurement to be used in the Waste section is Kilogram (kg).</b></p>
    <form action="http://localhost/gsp-portal-new/waste/set" id="waste" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label>
      <h6>Task 1: Choose your Waste Audit Team.</h6>
      </label>
      <br>
      The housekeeping and cleaning staff of your school shall be the core members of your team, as you will have
      to enlist their help at every task. A teacher with interest in waste and five to 10 students will be ideal
      for your team. Administrative staff is important as they will provide the permissions required for the
      housekeeping staff to work with you. </div>
    <br>
    <input type="hidden" id="Q4G4S3" value="400">
    <input type="hidden" id="Q4A1" value="10">
    <input type="hidden" id="Q4L4" value="">
    <input type="hidden" id="Q4L6" value="">
    <input type="hidden" id="Q4F1" value="Y">
    <input type="hidden" id="Q4W2" value="1">
    <input type="hidden" id="Q6A2S1T1" value="40">
    <input type="hidden" id="Q6A2S1T2" value="40">
    <input type="hidden" id="Q6A2S1T3" value="40">
    <input type="hidden" id="Q6A2S1T4" value="40">
    <input type="hidden" id="Q6A2S1T5" value="40">
    <input type="hidden" id="Q6A2S1T6" value="2/2">
    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Sr.No </th>
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
    </div>
    <div class="form-group">
      <label class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Sr.No </th>
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
    </div>
    <div class="form-group">
      <label class="control-label">Students (maximum of ten students can be part of the team):</label>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Sr.No </th>
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
    <div class="form-group">
      <label>
      <h6>Task 2: What is the waste segregation system in your school?</h6>
      </label>
      <br>
      Segregation means sorting. Let’s understand the waste segregation system because the amount of waste
      recycled or reused will depend on the method of collection. To understand the waste segregation system
      of your school, fill the table below.<br>
      <br>
      <b>To collect data:</b> Students will have to survey the waste collection area and talk to the
      house-keeping staff to know whether waste is segregated in the school and in what quantity. </div>
    <br>
    <div class="form-group">
      <label class="control-label"><span class="cube">1</span>Does your school segregate solid waste?</label>
      <div class="form-group">
        <p> <?php echo (getFiled('Q4Wa1', $schoolUserID) != "") ? (getFiled('Q4Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
    </div>
    <?php if(getFiled('Q4Wa1', $schoolUserID) == "Y"){ ?>
    <div class="form-group row" id="Q1A">
      <label><span class="cube">1(a)</span>Who segregates the waste at source? </label>
      <br/>
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
    </div>
    <?php } ?>
    <div class="form-group">
      <label><span class="cube">2</span>How many categories does your school segregate waste into? </label>
      <br/>
      <?php
                if (getFiled('Q4Wa2', $schoolUserID) == 1):
                    echo "Two";
                elseif (getFiled('Q4Wa2', $schoolUserID) == 2):
                    echo "Three";
                elseif (getFiled('Q4Wa2', $schoolUserID) == 3):
                    echo "More than three";

                endif;
                ?>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">2(a)</span> How many categories does your school
      segregate waste into?</label>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Area </label>
        </div>
        <div class="col-xs-2">
          <label>No. of waste collection points with no bin </label>
        </div>
        <div class="col-xs-2">
          <label>No. of waste collection points with one bin (mixed waste) </label>
        </div>
        <div class="col-xs-2">
          <label>No. of waste collection points with two bins (wet &amp; dry) </label>
        </div>
        <div class="col-xs-2">
          <label>No. of waste collection points with three bins or more </label>
        </div>
        <div class="col-xs-2">
          <label>Total no. of waste collection points </label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Classrooms </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa1S1', $schoolUserID) != "") ? getFiled('Q5Wa1S1', $schoolUserID) : "N/A"; ?>
          <!--<input class="form-control space-textbox" onkeyup="computeeSegregate()" id="Q5Wa1S1" type="number" name="Q5Wa1S1" placeholder="" value="">-->
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa1S2', $schoolUserID) != "") ? getFiled('Q5Wa1S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa1S3', $schoolUserID) != "") ? getFiled('Q5Wa1S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa1S4', $schoolUserID) != "") ? getFiled('Q5Wa1S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa1S5', $schoolUserID) != "") ? getFiled('Q5Wa1S5', $schoolUserID) : "N/A"; ?>
          <!-- <input class="form-control space-textbox" id="Q5Wa1S5" type="number" name="Q5Wa1S5" placeholder="0" value="" readonly/>
                        -->
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Playgrounds </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa2S1', $schoolUserID) != "") ? getFiled('Q5Wa2S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa2S2', $schoolUserID) != "") ? getFiled('Q5Wa2S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa2S3', $schoolUserID) != "") ? getFiled('Q5Wa2S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa2S4', $schoolUserID) != "") ? getFiled('Q5Wa2S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa2S5', $schoolUserID) != "") ? getFiled('Q5Wa2S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Common area </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa3S1', $schoolUserID) != "") ? getFiled('Q5Wa3S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa3S2', $schoolUserID) != "") ? getFiled('Q5Wa3S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa3S3', $schoolUserID) != "") ? getFiled('Q5Wa3S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa3S4', $schoolUserID) != "") ? getFiled('Q5Wa3S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa3S5', $schoolUserID) != "") ? getFiled('Q5Wa3S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Staffroom </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa4S1', $schoolUserID) != "") ? getFiled('Q5Wa4S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa4S2', $schoolUserID) != "") ? getFiled('Q5Wa4S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa4S3', $schoolUserID) != "") ? getFiled('Q5Wa4S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa4S4', $schoolUserID) != "") ? getFiled('Q5Wa4S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa4S5', $schoolUserID) != "") ? getFiled('Q5Wa4S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Laboratory </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa5S1', $schoolUserID) != "") ? getFiled('Q5Wa5S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa5S2', $schoolUserID) != "") ? getFiled('Q5Wa5S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa5S3', $schoolUserID) != "") ? getFiled('Q5Wa5S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa5S4', $schoolUserID) != "") ? getFiled('Q5Wa5S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa5S5', $schoolUserID) != "") ? getFiled('Q5Wa5S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Canteen </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa6S1', $schoolUserID) != "") ? getFiled('Q5Wa6S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa6S2', $schoolUserID) != "") ? getFiled('Q5Wa6S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa6S3', $schoolUserID) != "") ? getFiled('Q5Wa6S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa6S4', $schoolUserID) != "") ? getFiled('Q5Wa6S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa6S5', $schoolUserID) != "") ? getFiled('Q5Wa6S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Clinic/sick room </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa7S1', $schoolUserID) != "") ? getFiled('Q5Wa7S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa7S2', $schoolUserID) != "") ? getFiled('Q5Wa7S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa7S3', $schoolUserID) != "") ? getFiled('Q5Wa7S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa7S4', $schoolUserID) != "") ? getFiled('Q5Wa7S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa7S5', $schoolUserID) != "") ? getFiled('Q5Wa7S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Library </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa8S1', $schoolUserID) != "") ? getFiled('Q5Wa8S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa8S2', $schoolUserID) != "") ? getFiled('Q5Wa8S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa8S3', $schoolUserID) != "") ? getFiled('Q5Wa8S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa8S4', $schoolUserID) != "") ? getFiled('Q5Wa8S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa8S5', $schoolUserID) != "") ? getFiled('Q5Wa8S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Toilets </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa9S1', $schoolUserID) != "") ? getFiled('Q5Wa9S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa9S2', $schoolUserID) != "") ? getFiled('Q5Wa9S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa9S3', $schoolUserID) != "") ? getFiled('Q5Wa9S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa9S4', $schoolUserID) != "") ? getFiled('Q5Wa9S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa9S5', $schoolUserID) != "") ? getFiled('Q5Wa9S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Others </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa10S1', $schoolUserID) != "") ? getFiled('Q5Wa10S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa10S2', $schoolUserID) != "") ? getFiled('Q5Wa10S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa10S3', $schoolUserID) != "") ? getFiled('Q5Wa10S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa10S4', $schoolUserID) != "") ? getFiled('Q5Wa10S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa10S5', $schoolUserID) != "") ? getFiled('Q5Wa10S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-2">
          <label>Total </label>
        </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa11S1', $schoolUserID) != "") ? getFiled('Q5Wa11S1', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa11S2', $schoolUserID) != "") ? getFiled('Q5Wa11S2', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa11S3', $schoolUserID) != "") ? getFiled('Q5Wa11S3', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa11S4', $schoolUserID) != "") ? getFiled('Q5Wa11S4', $schoolUserID) : "N/A"; ?> </div>
        <div class="col-xs-2"> <?php echo (getFiled('Q5Wa11S5', $schoolUserID) != "") ? getFiled('Q5Wa11S5', $schoolUserID) : "N/A"; ?> </div>
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="control-label">Please upload supporting documents:</label>
      <br>
      • Pictures of dustbins in classroom showing segregation at source<br>
      • Pictures of playground with more than two dustbins<br>
      Kindly attach the aforementioned documents along with the survey<br>
      <br>
    </div>
    <?php
            if (!empty($segregationClassroom)) {
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
        <?php foreach ($segregationClassroom as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Segregation_Source_Classrooms_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <div class="form-group">
      <label>
      <h6>Task 3: How much waste does your school generate?</h6>
      </label>
      <br>
      There is nothing known as waste – waste is just a misplaced resource. Therefore ideally, a school should
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
      on a mesh, so that the dust and silt passes through and then weigh the silt. </div>
    <br>
    <div class="form-group">
      <label class="control-label"><span class="cube">3</span>Determine the quantity of waste generated in
      your school. (in kilogram) </label>
    </div>
    <div class="form-group">
      <label><span class="cube">a.</span>Biodegradable/Wet Waste</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">b.</span>Dry/recyclable waste</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">c.</span>Domestic hazardous waste</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">d.</span>E-Waste</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">e.</span>Biomedical waste</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">f.</span>Sanitary waste </label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label><span class="cube">g.</span>Cc&amp; D Waste</label>
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
      <table width="100%" class="table">
        <thead>
          <tr>
            <th>image</th>
            <th>File name</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($solidWaste as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Audit_Team_Weighing_Solid_Waste_"), " ", $a->file_name); ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <br>
    <div class="form-group">
      <label class="control-label">Please upload supporting documents:</label>
      <br>
      • Picture of audit team weighing solid waste<br>
      • Picture of types of solid waste generated<br>
      Kindly attach the aforementioned documents along with the survey <br>
      <br>
    </div>
    <?php
            if (!empty($composingPit)) {
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
        <?php foreach ($composingPit as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Composting_Pit_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <div class="form-group">
      <label>
      <h6>Task 4: How much waste does your school treat/recycle?</h6>
      </label>
      <br>
      <p> <b>To Collect Data:</b> Find out whether your school has any waste recycling facility like compost
        pit, paper recycling machine, etc. If you have a paper recycling unit, the person in charge will
        definitely be recording the input and output from the unit. If the school is selling newspapers or
        bottles or metal scrap to the local waste dealer (kabadiwala), that can also be included in the
        quantity recycled.</p>
    </div>
    <br>
    <div class="form-group">
      <label class="control-label"><span class="cube">4</span>Does your school recycle any generated waste? </label>
      <div class="form-group">
        <p> <?php echo (getFiled('Q8Wa1', $schoolUserID) != "") ? (getFiled('Q8Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
    </div>
    <?php if(getFiled('Q8Wa1', $schoolUserID) == "Y"){ ?>
    <div class="form-group" id="Q8Wa2">
      <label class="control-label"><span class="cube">4(a)</span>Please provide quantity of which is
      applicable</label>
      <div class="form-group">
        <label><span class="cube">a.</span>Biodegradable/Wet Waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">b.</span>Dry/recyclable waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">c.</span>Domestic hazardous waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">d.</span>E-Waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">e.</span>Biomedical waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">f.</span>Sanitary waste </label>
        <table class="table table-bordered table-striped">
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
      </div>
      <div class="form-group">
        <label><span class="cube">g.</span>C &amp; D Waste</label>
        <table class="table table-bordered table-striped">
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
      </div>
    </div>
    <br>
    <br>
    <?php } ?>
    <div class="form-group">
      <label class="control-label"><span class="cube">5</span>Does your school have a composting facility?</label>
      <div class="form-group">
        <p> <?php echo (getFiled('Q9Wa1', $schoolUserID) != "") ? (getFiled('Q9Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="control-label">Please upload supporting documents:</label>
      • Pictures of recycling units - composting pit<br>
    </div>
    <br>
    <?php
           
            if (!empty($composingPit)) {
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
        <?php foreach ($composingPit as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Composting_Pit_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>
    <?php if(getFiled('Q9Wa1', $schoolUserID) == "Y"){ ?>
    <div class="form-group" id="Q9Wa2" style="display: block;">
      <div class="form-group row" id="Q9Wa2">
        <label><span class="cube">5(a)</span>What is the methodology used?</label>
        <br/>
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
      </div>
      <div class="form-group" id="Q9Wa3" style="display: block;">
        <div class="form-group" id="Q9Wa3">
          <label for="username" class="control-label"><span class="cube">5(b)</span>What is the quantity of
          compost that is generated per month (in kilogram)?</label>
          <br>
          <?php echo (getFiled('Q9Wa3', $schoolUserID) != "") ? getFiled('Q9Wa3', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <br>
      <div class="form-group" id="Q9Wa4" style="display: block;">
        <div class="form-group row" id="Q9Wa4">
          <label><span class="cube">5(c)</span> What is the purpose of the compost that is generated per month? </label>
          <br/>
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
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="control-label"><span class="cube">6</span>Does your school encourage students &amp; teachers to
          reuse textbooks?</label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q10Wa1', $schoolUserID) != "") ? (getFiled('Q10Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label"><span class="cube">7</span>Please fill the table to understand whether waste
          recycling procedures are applied to waste. </label>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Category of waste </label>
            </div>
            <div class="col-xs-2">
              <label>Local scrap collector (kabadiwala) </label>
            </div>
            <div class="col-xs-2">
              <label>Authorized dealer </label>
            </div>
            <div class="col-xs-2">
              <label>Dumped at a designated community site </label>
            </div>
            <div class="col-xs-2">
              <label>Internal procedure </label>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Paper </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa1S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input type="checkbox" id="Q11Wa1S1" name="Q11Wa1S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa1S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa1S2" type="checkbox" name="Q11Wa1S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa1S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa1S3" type="checkbox" name="Q11Wa1S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa1S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa1S4" type="checkbox" name="Q11Wa1S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Plastic </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa2S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa2S1" type="checkbox" name="Q11Wa2S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa2S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa2S2" type="checkbox" name="Q11Wa2S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa2S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa2S3" type="checkbox" name="Q11Wa2S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa2S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa2S4" type="checkbox" name="Q11Wa2S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Horticultural waste </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa3S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa3S1" type="checkbox" name="Q11Wa3S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa3S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa3S2" type="checkbox" name="Q11Wa3S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa3S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa3S3" type="checkbox" name="Q11Wa3S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa3S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa3S4" type="checkbox" name="Q11Wa3S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>E-waste </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa4S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa4S1" type="checkbox" name="Q11Wa4S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa4S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa4S2" type="checkbox" name="Q11Wa4S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa4S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa4S3" type="checkbox" name="Q11Wa4S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa4S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa4S4" type="checkbox" name="Q11Wa4S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Hazardous waste </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa5S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa5S1" type="checkbox" name="Q11Wa5S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa5S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa5S2" type="checkbox" name="Q11Wa5S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa5S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa5S3" type="checkbox" name="Q11Wa5S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa5S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa5S4" type="checkbox" name="Q11Wa5S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Wood, glass, metal </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa6S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa6S1" type="checkbox" name="Q11Wa6S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa6S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa6S2" type="checkbox" name="Q11Wa6S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa6S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa6S3" type="checkbox" name="Q11Wa6S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa6S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa6S4" type="checkbox" name="Q11Wa6S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Biomedical waste </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa7S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa7S1" type="checkbox" name="Q11Wa7S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa7S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa7S2" type="checkbox" name="Q11Wa7S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa7S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa7S3" type="checkbox" name="Q11Wa7S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa7S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!-- <input class="form-control space-textbox" id="Q11Wa7S4" type="checkbox" name="Q11Wa7S4" value="1">-->
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-2">
              <label>Others </label>
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa8S1', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa8S1" type="checkbox" name="Q11Wa8S1" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa8S2', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa8S2" type="checkbox" name="Q11Wa8S2" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa8S3', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa8S3" type="checkbox" name="Q11Wa8S3" value="1">-->
            </div>
            <div class="col-xs-2">
              <?php
                                if (getFiled('Q11Wa8S4', $schoolUserID) == 1):
                                    echo "1";
                                else:
                                    echo "0";
                                endif;
                                ?>
              <!--<input class="form-control space-textbox" id="Q11Wa8S4" type="checkbox" name="Q11Wa8S4" value="1">-->
            </div>
          </div>
          <!-- <div class="form-group row">
              <sdiv class="col-xs-2">
                <label >Total
                </label>
              </div>
              <div class="col-xs-2">
               <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S1" type="checkbox" name="Q11Wa9S1" placeholder="" value="" readonly/>
             </div>
             <div class="col-xs-2">
               <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S2" type="checkbox" name="Q11Wa9S2" placeholder="" value="" readonly/>
             </div>
             <div class="col-xs-2">
               <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S3" type="checkbox" name="Q11Wa9S3" placeholder="" value="" readonly/>
             </div>
             <div class="col-xs-2">
               <input class="form-control space-textbox" onkeyup="computeRecycling()" id="Q11Wa9S4" type="checkbox" name="Q11Wa9S4" placeholder="" value="" readonly/>
             </div>
            
            </div>
                        -->
        </div>
        <br>
        <div class="form-group">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of recycling units - paper recycling machine, selling paper to kabadiwala, recyclers,etc<br>
        </div>
        <br>
        <?php
                    if (!empty($recycleMachine)) {
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
            <?php foreach ($recycleMachine as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Recycling_Machine_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
          <label class="control-label"><span class="cube">8</span>Does your school have the following? If yes, please
          give the numbers of items in working condition and those that are not.</label>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Item </label>
          </div>
          <div class="col-xs-2">
            <label>BEE star rating </label>
          </div>
          <div class="col-xs-2">
            <label>Working condition </label>
          </div>
          <div class="col-xs-2">
            <label>Non-working condition </label>
          </div>
          <div class="col-xs-2">
            <label>Total no. of items </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>TVs </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa1S1', $schoolUserID) != "") ? getFiled('Q12Wa1S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa1S2', $schoolUserID) != "") ? getFiled('Q12Wa1S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa1S3', $schoolUserID) != "") ? getFiled('Q12Wa1S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa1S4', $schoolUserID) != "") ? getFiled('Q12Wa1S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>VCR or DVD players </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa2S1', $schoolUserID) != "") ? getFiled('Q12Wa2S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa2S2', $schoolUserID) != "") ? getFiled('Q12Wa2S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa2S3', $schoolUserID) != "") ? getFiled('Q12Wa2S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa2S4', $schoolUserID) != "") ? getFiled('Q12Wa2S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Refrigerators and freezers </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa3S1', $schoolUserID) != "") ? getFiled('Q12Wa3S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa3S2', $schoolUserID) != "") ? getFiled('Q12Wa3S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa3S3', $schoolUserID) != "") ? getFiled('Q12Wa3S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa3S4', $schoolUserID) != "") ? getFiled('Q12Wa3S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Washing machines </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa4S1', $schoolUserID) != "") ? getFiled('Q12Wa4S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa4S2', $schoolUserID) != "") ? getFiled('Q12Wa4S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa4S3', $schoolUserID) != "") ? getFiled('Q12Wa4S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa4S4', $schoolUserID) != "") ? getFiled('Q12Wa4S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Air conditioners </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa5S1', $schoolUserID) != "") ? getFiled('Q12Wa5S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa5S2', $schoolUserID) != "") ? getFiled('Q12Wa5S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa5S3', $schoolUserID) != "") ? getFiled('Q12Wa5S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa5S4', $schoolUserID) != "") ? getFiled('Q12Wa5S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Heaters </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa6S1', $schoolUserID) != "") ? getFiled('Q12Wa6S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa6S2', $schoolUserID) != "") ? getFiled('Q12Wa6S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa6S3', $schoolUserID) != "") ? getFiled('Q12Wa6S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa6S4', $schoolUserID) != "") ? getFiled('Q12Wa6S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Microwaves </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa7S1', $schoolUserID) != "") ? getFiled('Q12Wa7S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa7S2', $schoolUserID) != "") ? getFiled('Q12Wa7S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa7S3', $schoolUserID) != "") ? getFiled('Q12Wa7S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa7S4', $schoolUserID) != "") ? getFiled('Q12Wa7S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Ovens </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa8S1', $schoolUserID) != "") ? getFiled('Q12Wa8S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa8S2', $schoolUserID) != "") ? getFiled('Q12Wa8S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa8S3', $schoolUserID) != "") ? getFiled('Q12Wa8S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa8S4', $schoolUserID) != "") ? getFiled('Q12Wa8S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Toasters </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa9S1', $schoolUserID) != "") ? getFiled('Q12Wa9S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa9S2', $schoolUserID) != "") ? getFiled('Q12Wa9S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa9S3', $schoolUserID) != "") ? getFiled('Q12Wa9S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa9S4', $schoolUserID) != "") ? getFiled('Q12Wa9S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Electric kettles </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa10S1', $schoolUserID) != "") ? getFiled('Q12Wa10S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa10S2', $schoolUserID) != "") ? getFiled('Q12Wa10S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa10S3', $schoolUserID) != "") ? getFiled('Q12Wa10S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa10S4', $schoolUserID) != "") ? getFiled('Q12Wa10S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Personal computers (CPU, mouse, screen and keyboard included) </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa11S1', $schoolUserID) != "") ? getFiled('Q12Wa11S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa11S2', $schoolUserID) != "") ? getFiled('Q12Wa11S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa11S3', $schoolUserID) != "") ? getFiled('Q12Wa11S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa11S4', $schoolUserID) != "") ? getFiled('Q12Wa11S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Laptop computer (CPU, mouse, screen and keyboard included) </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa12S1', $schoolUserID) != "") ? getFiled('Q12Wa12S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa12S2', $schoolUserID) != "") ? getFiled('Q12Wa12S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa12S3', $schoolUserID) != "") ? getFiled('Q12Wa12S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa12S4', $schoolUserID) != "") ? getFiled('Q12Wa12S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Notebook computers </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa13S1', $schoolUserID) != "") ? getFiled('Q12Wa13S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa13S2', $schoolUserID) != "") ? getFiled('Q12Wa13S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa13S3', $schoolUserID) != "") ? getFiled('Q12Wa13S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa13S4', $schoolUserID) != "") ? getFiled('Q12Wa13S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Notepad computers </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa14S1', $schoolUserID) != "") ? getFiled('Q12Wa14S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa14S2', $schoolUserID) != "") ? getFiled('Q12Wa14S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa14S3', $schoolUserID) != "") ? getFiled('Q12Wa14S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa14S4', $schoolUserID) != "") ? getFiled('Q12Wa14S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Printers </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa15S1', $schoolUserID) != "") ? getFiled('Q12Wa15S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa15S2', $schoolUserID) != "") ? getFiled('Q12Wa15S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa15S3', $schoolUserID) != "") ? getFiled('Q12Wa15S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa15S4', $schoolUserID) != "") ? getFiled('Q12Wa15S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Copying equipment (photocopiers) </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa16S1', $schoolUserID) != "") ? getFiled('Q12Wa16S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa16S2', $schoolUserID) != "") ? getFiled('Q12Wa16S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa16S3', $schoolUserID) != "") ? getFiled('Q12Wa16S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa16S4', $schoolUserID) != "") ? getFiled('Q12Wa16S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Projectors </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa17S1', $schoolUserID) != "") ? getFiled('Q12Wa17S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa17S2', $schoolUserID) != "") ? getFiled('Q12Wa17S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa17S3', $schoolUserID) != "") ? getFiled('Q12Wa17S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa17S4', $schoolUserID) != "") ? getFiled('Q12Wa17S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Whiteboards </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa18S1', $schoolUserID) != "") ? getFiled('Q12Wa18S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa18S2', $schoolUserID) != "") ? getFiled('Q12Wa18S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa18S3', $schoolUserID) != "") ? getFiled('Q12Wa18S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa18S4', $schoolUserID) != "") ? getFiled('Q12Wa18S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Electrical and electronic typewriters </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa19S1', $schoolUserID) != "") ? getFiled('Q12Wa19S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa19S2', $schoolUserID) != "") ? getFiled('Q12Wa19S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa19S3', $schoolUserID) != "") ? getFiled('Q12Wa19S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa19S4', $schoolUserID) != "") ? getFiled('Q12Wa19S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Pocket and desk calculators </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa20S1', $schoolUserID) != "") ? getFiled('Q12Wa20S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa20S2', $schoolUserID) != "") ? getFiled('Q12Wa20S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa20S3', $schoolUserID) != "") ? getFiled('Q12Wa20S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa20S4', $schoolUserID) != "") ? getFiled('Q12Wa20S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Fax machines </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa21S1', $schoolUserID) != "") ? getFiled('Q12Wa21S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa21S2', $schoolUserID) != "") ? getFiled('Q12Wa21S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa21S3', $schoolUserID) != "") ? getFiled('Q12Wa21S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa21S4', $schoolUserID) != "") ? getFiled('Q12Wa21S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Telex </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa22S1', $schoolUserID) != "") ? getFiled('Q12Wa22S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa22S2', $schoolUserID) != "") ? getFiled('Q12Wa22S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa22S3', $schoolUserID) != "") ? getFiled('Q12Wa22S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa22S4', $schoolUserID) != "") ? getFiled('Q12Wa22S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Telephones </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa23S1', $schoolUserID) != "") ? getFiled('Q12Wa23S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa23S2', $schoolUserID) != "") ? getFiled('Q12Wa23S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa23S3', $schoolUserID) != "") ? getFiled('Q12Wa23S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa23S4', $schoolUserID) != "") ? getFiled('Q12Wa23S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Pay telephones </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa24S1', $schoolUserID) != "") ? getFiled('Q12Wa24S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa24S2', $schoolUserID) != "") ? getFiled('Q12Wa24S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa24S3', $schoolUserID) != "") ? getFiled('Q12Wa24S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa24S4', $schoolUserID) != "") ? getFiled('Q12Wa24S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Mobiles </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa25S1', $schoolUserID) != "") ? getFiled('Q12Wa25S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa25S2', $schoolUserID) != "") ? getFiled('Q12Wa25S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa25S3', $schoolUserID) != "") ? getFiled('Q12Wa25S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa25S4', $schoolUserID) != "") ? getFiled('Q12Wa25S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Answering systems </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa26S1', $schoolUserID) != "") ? getFiled('Q12Wa26S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa26S2', $schoolUserID) != "") ? getFiled('Q12Wa26S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa26S3', $schoolUserID) != "") ? getFiled('Q12Wa26S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa26S4', $schoolUserID) != "") ? getFiled('Q12Wa26S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Induction cookers </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa27S1', $schoolUserID) != "") ? getFiled('Q12Wa27S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa27S2', $schoolUserID) != "") ? getFiled('Q12Wa27S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa27S3', $schoolUserID) != "") ? getFiled('Q12Wa27S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa27S4', $schoolUserID) != "") ? getFiled('Q12Wa27S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-4">
            <label>Geysers/water heaters </label>
          </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa28S1', $schoolUserID) != "") ? getFiled('Q12Wa28S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa28S2', $schoolUserID) != "") ? getFiled('Q12Wa28S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa28S3', $schoolUserID) != "") ? getFiled('Q12Wa28S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2"> <?php echo (getFiled('Q12Wa28S4', $schoolUserID) != "") ? getFiled('Q12Wa28S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <br>
        <div class="form-group">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of Electronic items used by school and storage of non-working electronic items<br>
          • Certificate of disposing e-waste from authorized dealer/dismantler<br>
        </div>
        <div class="clearfix">&nbsp;</div>
        <?php
                    if (!empty($eWaste)) {
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
            <?php foreach ($eWaste as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_E-Waste_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
          <label class="control-label"><span class="cube">9</span>Do you know that your e-waste can be collected by an
          authorized dealer or dismantler? </label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q13Wa1', $schoolUserID) != "") ? (getFiled('Q13Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <?php if(getFiled('Q13Wa1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="Q13Wa21">
          <label class="control-label"><span class="cube">9(a)</span>Who collects your e-waste, when not in working condition?</label>
          <br/>
          <?php
                        if (getFiled('Q13Wa2', $schoolUserID) == 1):
                            echo "Kabadiwalla/ Scrapdealer";
                        elseif (getFiled('Q13Wa2', $schoolUserID) == 2):
                            echo "Taken back by manufacturer/vendor";
                        elseif (getFiled('Q13Wa2', $schoolUserID) == 3):
                            echo " Authorised dealer";
                        elseif (getFiled('Q13Wa2', $schoolUserID) == 4):
                            echo " Authorised dismantler";

                        endif;
                        ?>
          <div class="form-group row">
            <label>Other: &nbsp;</label>
            <?php echo (getFiled('Q13Wa2O', $schoolUserID) != "") ? getFiled('Q13Wa2O', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Certificate of disposing e-waste from authorised dealer/dismantler<br>
        </div>
        <br>
        <?php
                    if (!empty($authorised_dealer)) {
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
            <?php foreach ($authorised_dealer as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_E-waste_authorised_dealer_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <div class="form-group">
          <label>
          <h6>Task 5: How does your school dispose of waste?</h6>
          </label>
          <br>
        </div>
        <br>
        <div class="form-group">
          <label class="control-label"><span class="cube">10</span>What is the final destination for waste from your
          school that is disposed of externally? </label>
          <br/>
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
        </div>
        <br>
        <div class="form-group">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of housekeeping staff disposing different types of solid waste<br>
          <br>
        </div>
        <div class="clearfix">&nbsp;</div>
        <?php
                    
                    if (!empty($houseKeeping)) {
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
            <?php foreach ($houseKeeping as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Housekeeping_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
          <label class="control-label"><span class="cube">11</span>Does your school burn waste? </label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q15Wa1', $schoolUserID) != "") ? (getFiled('Q15Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of burning waste<br>
          <br>
        </div>
        <?php
            if (!empty($burningWaste)) {
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
            <?php foreach ($burningWaste as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Buring_Waste_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <?php if(getFiled('Q15Wa1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="Q15Wa2">
          <label class="control-label"><span class="cube">11(a)</span>Where does your school burn
          waste?</label>
          <div class="form-group">
            <?php
                            if (getFiled('Q15Wa2', $schoolUserID) == 1):
                                echo "Inside the school";
                            elseif (getFiled('Q15Wa2', $schoolUserID) == 2):
                                echo "Outside the school";

                            endif;
                            ?>
          </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group" id="Q15Wa3">
          <label class="control-label"><span class="cube">11(b)</span>What kind of waste is burnt/
          incinerated?</label>
          <br/>
          <div class="form-group">
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
          </div>
        </div>
        <?php } ?>
        <div class="clearfix">&nbsp;</div>
        <div class="form-group">
          <label class="control-label"><span class="cube">12</span>Do you know that your E-waste can be collected by an authorised dealer or dismantler? </label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q16Wa1', $schoolUserID) != "") ? (getFiled('Q16Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label>
          <h6>Task 6: School's initiatives.</h6>
          </label>
          <br>
          It is important to appreciate the initiatives taken by the management on issues related to waste. The
          management's approach to these issues can be assessed in the following way:
          Seek an appointment with the Chairperson, Manager and Principal of your school and ask them the following
          questions: </div>
        <br>
        <div class="form-group">
          <label class="control-label"><span class="cube">13</span>Does the school have a policy on waste?</label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q17Wa1', $schoolUserID) != "") ? (getFiled('Q17Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <br>
        <div class="form-group" id="WastePolicy" >
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Waste Policy<br>
        </div>
        <div class="form-group">
          <label class="control-label"><span class="cube">14</span>Are there awareness drives with regard to Reduce,
          Recycle and Reuse? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/waste/#partnerInOperation" target="_blank"></a></label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q18Wa1', $schoolUserID) != "") ? (getFiled('Q18Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <br>
        <div class="form-group" id="awareness"> <br>
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of various school initiatives e.g. rally, debate, street play, art competition, etc<br>
        </div>
        <?php if(getFiled('Q18Wa1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="Q18Wa3">
          <p>
            <label class="control-label"><span class="cube">14(a)</span>What form do these awareness drives
            take? </label>
          </p>
          <?php
                        if (getFiled('Q18Wa2S1', $schoolUserID) == 1){
                            echo "As part of the curriculum <br/>";}
                        if (getFiled('Q18Wa2S2', $schoolUserID) == 2){
                            echo " As part of extracurricular activities such as guest lectures <br/>";}
                        if (getFiled('Q18Wa2S3', $schoolUserID) == 3){
                            echo " By the showcasing of posters and stickers <br/> ";}
			?>
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="control-label"><span class="cube">15</span>Is the study of the environment integrated into the
          curriculum?</label>
          <div class="form-group">
            <p> <?php echo (getFiled('Q19Wa1', $schoolUserID) != "") ? (getFiled('Q19Wa1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </div>
        </div>
        <br>
        <div class="form-group" id="WastePolicy">
          <label class="control-label">Please upload supporting documents:</label>
          <br>
          • Pictures of audit team doing survey
          Please upload all supporting documents related to this section here. Note, files must be one of the
          following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
          File size per document should not exceed <strong>100 KB.</strong><br>
        </div>
        <?php
                    if (!empty($teamDoingWaste)) {
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
            <?php foreach ($teamDoingWaste as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Audit_Team_Doing_Survey_Waste_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
        <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/water/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/feedback/' . $id) ?>">NEXT</a> </div>
      </div>
    </div>
    <style type="text/css">
                .text-gray {
                    color: #666666 !important;
                    /*font-weight:100!important;*/
                }
            </style>
    <!-- /.container -->
    <style type="text/css">

                .btn-circle {
                    width: 30px;
                    height: 30px;
                    text-align: center;
                    padding: 6px 0;
                    font-size: 12px;
                    line-height: 1.428571429;
                    border-radius: 15px;
                }
                .btn-circle.btn-lg {
                    width: 50px;
                    height: 50px;
                    padding: 10px 16px;
                    font-size: 18px;
                    line-height: 1.33;
                    border-radius: 25px;
                }
                .btn-circle.btn-xl {
                    width: 70px;
                    height: 70px;
                    padding: 10px 16px;
                    font-size: 24px;
                    line-height: 1.33;
                    border-radius: 35px;
                }
                #copyright{ color:#FFFFFF; font-size:10px; padding:6px 0px 6px 0px;}
            </style>
    <a class="" onClick="topFunction()" id="myBtn" data-original-title="" title="" style="display: inline;"><strong><img src="http://localhost/gsp-portal-new/assets/img/top.png"></strong></a>
    <link rel="stylesheet" href="http://localhost/gsp-portal-new/assets/css/jquery.fileuploader.css">
    <link href="http://localhost/gsp-portal-new/assets/css/jquery.fileuploader-theme-onebutton.css" media="all" rel="stylesheet">
    <style>
                .alert{
                    height: 50px !important;
                    padding:15px !important;
                    font-weight: bold;
                    border-radius: 0px;
                }
                .alert-success
                {
                    border: 2px solid green;
                }
                .alert-danger
                {
                    border: 2px solid red;
                }
            </style>
    <div id="airModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Upload your files</h4>
          </div>
          <div class="modal-body" id="test"> </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="http://localhost/gsp-portal-new/assets/js/jquery.fileuploader.js"></script>
    <script>
                //Get Data When Modal Open
                $("#airModal").on('shown.bs.modal', function (e) {
                    var id = e.relatedTarget.dataset.id;
                    $.get('http://localhost/gsp-portal-new/upload_files/getHtml', function (data) {
                        $('#test').html(data);
                        $('#Fules_bill').val(id);
                        //alert($('#Fules_bill').val());
                    });
                });
                //Remove Data When Modal Close
                $("#airModal").on("hidden.bs.modal", function () {
                    $('#test').html("");
                    var fd = $('#' + document.forms[0].id).serialize();
                    ///alert(fd);
                    var redirect = '';
                    switch (document.forms[0].id)
                    {
                        case "air":
                            redirect = "airprevious";
                            break;
                        case "food":
                            redirect = "foodajax";
                            break;
                        case "energy":
                            redirect = "energyajax";
                            break;
                        case "land":
                            redirect = "landajax";
                            break;
                        case "water":
                            redirect = "waterajax";
                            break;
                        case "PrimaryWater":
                            redirect = "waterajax";
                            break;
                        case "waste":
                            redirect = "wasteajax";
                            break;
                        case "PrimaryWaste":
                            redirect = "wasteajax";
                            break;
                        case "PrimaryAir":
                            //alert('Case Called');
                            redirect = "airprevious";
                            break;
                        case "PrimaryEnergy":
                            redirect = "energyajax";
                            break;
                        case "PrimaryFood":
                            redirect = "foodajax";
                            break;
                        case "PrimaryLand":
                            redirect = "landajax";
                    }

                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/gsp-portal-new/previous/' + redirect,
                        data: fd,
                        success: function (data) {
                            location.reload();
                        }
                    });
                });
            </script>
    <!--Ends Here-->
    <div id="ChangePass" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h4 class="modal-title">Change Password </h4>
    </div>
    <div class="modal-body">
    <div class="col-lg-12">
    <div class="col-lg-12">
      <p></p>
    </div>
    <form action="http://localhost/gsp-portal-new/Login/ChangePass" method="post" accept-charset="utf-8">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Old Password</label>
          <input type="Password" name="oldPassword" class="form-control">
        </div>
        <div class="form-group">
          <label>New Password</label>
          <input type="Password" name="pass" pattern=".{8,12}" required="" title="8 to 12 characters" class="form-control">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="modal-footer">
  <button class="btn btn-default" type="submit">Submit</button>
  <button type="button" class="btn btn-default" data-dismiss="modal" id="movenextbtn" style="margin:0px;">Return to survey</button>
</div>
</div>
</div>
</div>
<footer>
  <!--div class="container">
                <ul class="links list-inline">
                 <li class="store"><a href="http://csestore.cse.org.in/" target="_blank"><img src="http://localhost/gsp-portal-new/assets/img/store.jpg" class="img-responsive"></a></li>
                 <li class="portal"><a href="http://www.indiaenvironmentportal.org.in/" target="_blank"><img src="http://localhost/gsp-portal-new/assets/img/portal.jpg" class="img-responsive"></a></li>
                 <li class="earth"><a href="http://www.downtoearth.org.in/" target="_blank"><img src="http://localhost/gsp-portal-new/assets/img/earth.jpg" class="img-responsive"></a></li>
                 <li class="rain"><a href="http://www.rainwaterharvesting.org/" target="_blank"><img src="http://localhost/gsp-portal-new/assets/img/rain.jpg" class="img-responsive"></a></li>
                 <li class="times"><a href="http://www.gobartimes.org/" target="_blank"><img src="http://localhost/gsp-portal-new/assets/img/times.jpg" class="img-responsive"></a></li>
                </ul>
               </div-->
</footer>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px" src="https://www.youtube.com/embed/CI-iGmii5Yk" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </div>
</div>
<script type="text/javascript">
                $('.close').click(function () {
                    $('#video').attr("src", "https://www.youtube.com/embed/CI-iGmii5Yk");
                });
                $('body').click(function () {
                    $('#video').attr("src", "https://www.youtube.com/embed/CI-iGmii5Yk");
                });

                $(document).ready(function () {
                    $('#btnWastePrevious').on('click', function (data) {
                        var fd = $('#waste').serialize();
                        //console.log(fd);
                        $.ajax({
                            type: 'POST',
                            url: 'http://localhost/gsp-portal-new/previous/wasteajax',
                            data: fd,
                            success: function (data)
                            {
                                window.location.href = "http://localhost/gsp-portal-new/water";
                            }
                        });
                    });
                    $('#wastesave').on('click', function (data) {
                        var fd = $('#waste').serialize();
                        //console.log(fd);
                        $.ajax({
                            type: 'POST',
                            url: 'http://localhost/gsp-portal-new/previous/wasteajax',
                            data: fd,
                            success: function (data)
                            {
                                window.location.href = "http://localhost/gsp-portal-new/logout";
                            }
                        });
                    });

                    //delete air files
                    $('body').on('click', '.air-delete-files', function (data) {
                        var test = confirm("Are you sure you want to delete this file");
                        if (test == true)
                        {
                            var divId = $(this).attr('data-id');
                            $.ajax({
                                url: 'http://localhost/gsp-portal-new/upload_files/deletFiles',
                                type: 'POST',
                                data: {id: $(this).attr('data-id')},
                                success: function (data)
                                {
                                    if (data == "success")
                                    {
                                        console.log('index' + divId);
                                        $('#msg').html('<div class="alert alert-success">' +
                                                '<strong>&#10004; Success!</strong> Files deleted successfully.' +
                                                '</div>');
                                        $('#index' + divId).html('');
                                    } else if (data == "error")
                                    {
                                        $('#msg').html('<div class="alert alert-danger">' +
                                                '<strong>&#x2716; Error!</strong> There is an error deleting your files.' +
                                                '</div>');
                                    }
                                }
                            });
                        }
                    });
                });
            </script>
</div>
</form>
</div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
