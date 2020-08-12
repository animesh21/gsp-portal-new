<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
    <div class="intro">
      <h1>ENERGY <span class="h5">(<?php echo $school->name;
?>)</span></h1>
      <p> Prior to answering these questions, please consider using a meter to measure the monthly average amount
        of energy used from the respective energy sources.</p>
      <p class="unit"><strong>The unit of measurement to be used in the Energy section is megajoule (mj).</strong> </p>
    </div>
    <div class="form-group">
      <label>
      <h6>Task 1: Choose your Energy Audit Team</h6>
      </label>
      <p>The school administrative staff must be members of your team as you would require electricity bills, fuel
        consumption bills, etc. Other support staff such as generator attendant and electricians are also
        important contacts. It would be a good idea to rope in a Physics or Science teacher as well and, most
        importantly, a team of five to 10 of your schoolmates.</p>
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
          <td><?php echo (getFiled('Q1E3S1', $schoolUserID) != "") ? getFiled('Q1A3S1', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q1E3S3', $schoolUserID) != "") ? getFiled('Q1E3S3', $schoolUserID) : "N/A"; ?> </td>
          <td><?php echo (getFiled('Q1E3S2', $schoolUserID) != "") ? getFiled('Q1E3S2', $schoolUserID) : "N/A"; ?> </td>
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
    </div>
    <div class="form-group">
      <label class="control-label">Students (maximum of ten students can be part of the team):</label>
      <table class="table table-bordered table-striped">
        <tr>
          <th></th>
          <th> First Name </th>
          <th> Last Name </th>
          <th> Grade </th>
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
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 2: How much energy does your school consume?</h6>
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
      </div>
      </label>
      <div class="answer clearfix"></div>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">1</span>Does your school have access to an electricity
      bill?</label>
      <p> <?php echo (getFiled('Q4E1', $schoolUserID) != "") ? (getFiled('Q4E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </div>
    <?php if(getFiled('Q4E1', $schoolUserID) == "Y"){ ?>
    <div class="form-group" id="ebill">
      <label class="control-label">Please upload the most recent electricity bill here</label>
      <br>
      <?php
            if (!empty($electricityBills)) {
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
          <?php foreach ($electricityBills as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Electricity_Bill_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <?php } ?>
    <div class="form-group" id="ebill" style="display:none">
      <label class="control-label">Please upload the most recent electricity bill here</label>
      <br>
    </div>
    <input type="hidden" id="Q6A1Val" value="">
    <div class="form-group">
      <label class="control-label"><span class="cube">2</span>Does your school have its own vehicles?</label>
      <p> <?php echo (getFiled('Q5E1', $schoolUserID) != "") ? (getFiled('Q5E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">3</span>Provide the details of total energy consumed by the school:</label>
      <table class="table table-bordered question uploadedfiles">
        <tr>
          <th>Source of energy</th>
          <th>Quantity consumed/monthly average</th>
          <th>Energy consumed in Megajoules (mj)</th>
          <th>Type of use</th>
        </tr>
        <tr>
          <th>Electricity from the board (kwh)</th>
          <th><?php echo (getFiled('Q6E1S1', $schoolUserID) != "") ? getFiled('Q6E1S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E1S2', $schoolUserID) != "") ? getFiled('Q6E1S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E1S3', $schoolUserID) != "") ? getFiled('Q6E1S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Electricity from generator (diesel) (litres)</th>
          <th><?php echo (getFiled('Q6E2S1', $schoolUserID) != "") ? getFiled('Q6E2S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E2S2', $schoolUserID) != "") ? getFiled('Q6E2S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E2S3', $schoolUserID) != "") ? getFiled('Q6E2S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Petrol (litres)</th>
          <th><?php echo (getFiled('Q6E3S1', $schoolUserID) != "") ? getFiled('Q6E3S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E3S2', $schoolUserID) != "") ? getFiled('Q6E3S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E3S3', $schoolUserID) != "") ? getFiled('Q6E3S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Diesel (litres)</th>
          <th><?php echo (getFiled('Q6E4S1', $schoolUserID) != "") ? getFiled('Q6E4S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E4S2', $schoolUserID) != "") ? getFiled('Q6E4S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E4S3', $schoolUserID) != "") ? getFiled('Q6E4S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> CNG (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E5S1', $schoolUserID) != "") ? getFiled('Q6E5S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E5S2', $schoolUserID) != "") ? getFiled('Q6E5S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E5S3', $schoolUserID) != "") ? getFiled('Q6E5S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Kerosene (litres)</th>
          <th><?php echo (getFiled('Q6E6S1', $schoolUserID) != "") ? getFiled('Q6E6S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E6S2', $schoolUserID) != "") ? getFiled('Q6E6S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E6S3', $schoolUserID) != "") ? getFiled('Q6E6S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Coal (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E7S1', $schoolUserID) != "") ? getFiled('Q6E7S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E7S2', $schoolUserID) != "") ? getFiled('Q6E7S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E7S3', $schoolUserID) != "") ? getFiled('Q6E7S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Wood (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E16S1', $schoolUserID) != "") ? getFiled('Q6E16S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E16S2', $schoolUserID) != "") ? getFiled('Q6E16S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E16S3', $schoolUserID) != "") ? getFiled('Q6E16S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Animal waste (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E8S1', $schoolUserID) != "") ? getFiled('Q6E8S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E8S2', $schoolUserID) != "") ? getFiled('Q6E8S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E8S3', $schoolUserID) != "") ? getFiled('Q6E8S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Solar (kwh)</th>
          <th><?php echo (getFiled('Q6E9S1', $schoolUserID) != "") ? getFiled('Q6E9S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E9S2', $schoolUserID) != "") ? getFiled('Q6E9S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E9S3', $schoolUserID) != "") ? getFiled('Q6E9S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Wind (kwh)</th>
          <th><?php echo (getFiled('Q6E10S1', $schoolUserID) != "") ? getFiled('Q6E10S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E10S2', $schoolUserID) != "") ? getFiled('Q6E10S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E10S3', $schoolUserID) != "") ? getFiled('Q6E10S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> LPG (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E11S1', $schoolUserID) != "") ? getFiled('Q6E11S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E11S2', $schoolUserID) != "") ? getFiled('Q6E11S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E11S3', $schoolUserID) != "") ? getFiled('Q6E11S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Piped Natural Gas (kilogrammes)</th>
          <th><?php echo (getFiled('Q6E12S1', $schoolUserID) != "") ? getFiled('Q6E12S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E12S2', $schoolUserID) != "") ? getFiled('Q6E12S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E12S3', $schoolUserID) != "") ? getFiled('Q6E12S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Biogas</th>
          <th><?php echo (getFiled('Q6E13S1', $schoolUserID) != "") ? getFiled('Q6E13S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E13S2', $schoolUserID) != "") ? getFiled('Q6E13S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E13S3', $schoolUserID) != "") ? getFiled('Q6E13S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Others (specify)</th>
          <th><?php echo (getFiled('Q6E14S1', $schoolUserID) != "") ? getFiled('Q6E14S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E14S2', $schoolUserID) != "") ? getFiled('Q6E14S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E14S3', $schoolUserID) != "") ? getFiled('Q6E14S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th> Total</th>
          <th><?php echo (getFiled('Q6E15S1', $schoolUserID) != "") ? getFiled('Q6E15S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q6E15S2', $schoolUserID) != "") ? getFiled('Q6E15S2', $schoolUserID) : "N/A"; ?></th>
          <th></th>
        </tr>
      </table>
    </div>
    <div class="form-group">
      <label class="control-label">Please upload fuel bills</label>
      <?php
            if (!empty($fulesBills)) {
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
          <?php foreach ($fulesBills as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Fuels_Bills_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <div class="form-group">
      <label><span class="cube">4</span> What appliances does your school have? </label>
      <table class="table table-bordered question uploadedfiles">
        <tr>
          <th>Appliances/Equipments</th>
          <th>Number</th>
          <th>Size</th>
          <th>BEE Star Rating</th>
        </tr>
        <tr>
          <th>Air Conditioners</th>
          <th><?php echo (getFiled('Q7E2S1', $schoolUserID) != "") ? getFiled('Q7E2S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E2S2', $schoolUserID) != "") ? getFiled('Q7E2S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E2S3', $schoolUserID) != "") ? getFiled('Q7E2S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>Refrigerator</th>
          <th><?php echo (getFiled('Q7E3S1', $schoolUserID) != "") ? getFiled('Q7E3S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E3S2', $schoolUserID) != "") ? getFiled('Q7E3S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E3S3', $schoolUserID) != "") ? getFiled('Q7E3S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>Microwave</th>
          <th><?php echo (getFiled('Q7E4S1', $schoolUserID) != "") ? getFiled('Q7E4S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E4S2', $schoolUserID) != "") ? getFiled('Q7E4S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E4S3', $schoolUserID) != "") ? getFiled('Q7E4S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>Tube Lights</th>
          <th><?php echo (getFiled('Q7E5S1', $schoolUserID) != "") ? getFiled('Q7E5S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E5S2', $schoolUserID) != "") ? getFiled('Q7E5S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E5S3', $schoolUserID) != "") ? getFiled('Q7E5S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>CFL Bulbs</th>
          <th><?php echo (getFiled('Q7E6S1', $schoolUserID) != "") ? getFiled('Q7E6S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E6S2', $schoolUserID) != "") ? getFiled('Q7E6S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E6S3', $schoolUserID) != "") ? getFiled('Q7E6S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>LED Lights</th>
          <th><?php echo (getFiled('Q7E7S1', $schoolUserID) != "") ? getFiled('Q7E7S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E7S2', $schoolUserID) != "") ? getFiled('Q7E7S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E7S3', $schoolUserID) != "") ? getFiled('Q7E7S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
        <tr>
          <th>Fans</th>
          <th><?php echo (getFiled('Q7E8S1', $schoolUserID) != "") ? getFiled('Q7E8S1', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E8S2', $schoolUserID) != "") ? getFiled('Q7E8S2', $schoolUserID) : "N/A"; ?></th>
          <th><?php echo (getFiled('Q7E8S3', $schoolUserID) != "") ? getFiled('Q7E8S3', $schoolUserID) : "N/A"; ?></th>
        </tr>
      </table>
    </div>
    <div class="form-group">
      <label class="control-label">Please upload picture of five start appliances used by school</label>
      <?php
            if (!empty($appliancesBills)) {
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
          <?php foreach ($appliancesBills as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Five_Star_Appliances_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <div class="form-group">
      <label>
      <h6> Task 3: Is your school using any renewable sources of energy? </h6>
      </label>
    </div>
    <div class="form-group">
      <label><span class="cube">5</span>What is the average number of sunny days in your area? </label>
      <p> <?php echo (getFiled('Q8E1', $schoolUserID) != "") ? getFiled('Q8E1', $schoolUserID) : "N/A"; ?></p>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">6</span>Are there any alternate sources of energy
      employed/ installed in your school?</label>
      <p> <?php echo (getFiled('Q9E1', $schoolUserID) != "") ? (getFiled('Q9E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </div>
    <?php if(getFiled('Q9E1', $schoolUserID) == "Y") { ?>
    <div class="form-group" id="alternativeEnergy">
      <label class="control-label">If yes, please upload a picture of alternative source of energy
      installed that is currently in use.</label>
      <br>
      <?php
            if (!empty($Alternative_Source_of_Energy)) {
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
          <?php foreach ($Alternative_Source_of_Energy as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Alternative_Source_of_Energy_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <div class="form-group" id="typeofenergy">
      <div class="form-group">
        <label><span class="cube">6(a)</span>If yes, do you use:</label>
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
      </div>
    </div>
    <?php } ?>
    <div class="form-group">
      <div class="form-group">
        <label><span class="cube">7</span>Does your school use solar water heater:</label>
        <p> <?php echo (getFiled('Q10E1', $schoolUserID) != "") ? (getFiled('Q10E1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
      </div>
    </div>
    <div class="form-group" id="WastePolicy">
      <label class="control-label">Please upload supporting documents:</label>
      <br>
      •Pictures of audit team doing survey<br>
      Please upload all supporting documents related to this section here. Note, files must be one of the
      following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
      File size per document should not exceed 500 KB. <br>
      <br>
      <br>
    </div>
    <div class="clearfix">&nbsp;</div>
    <?php
        if (!empty($energySupport)) {
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
        <?php foreach ($energySupport as $a) { ?>
        <tr>
          <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
          <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Supporting_Document_Energy_"), " ", $a->file_name); ?></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
    <?php } ?>
    <div class="clearfix">&nbsp;</div>
    <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/air/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/food/' . $id) ?>">NEXT</a> </div>
  </div>
</div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
