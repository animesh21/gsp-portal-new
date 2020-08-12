<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
  <div class="intro">
    <h1>LAND <span class="h5">(<?php echo $school->name;
?>)</span></h1>
    <p> The GSP audit helps the school community draw up a roadmap for
      sustainable use of its land.<br>
      <b>The unit of measurement to be used in the Land section is
      Square Meter (m<sup>2</sup>).</b></p>
  </div>
  <form action="http://localhost/gsp-portal-new/land/set" id="land" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label>
      <h6>Task 1: Choose your Land Audit Team</h6>
      </label>
      <br>
      Your school gardener is certainly the best person to be a part of
      your audit team. Make sure your
      biology or geography teacher joins your team. Just like all other
      teams, five to 10 of your committed
      and interested schoolmates would make a strong team. Try and involve
      some students of the photography or
      painting clubs of your school. </div>
    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can
      be part of the team):</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
      <table class="table table-bordered table-striped">
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
    </div>
    <div class="form-group">
      <label class="control-label">Students (maximum of ten students can
      be part of the team):</label>
      <table class="table table-bordered table-striped">
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
    <div class="form-group">
      <label>
      <div class="question-text">
        <h6> Task 2: Measure the critical areas of your school
          campus</h6>
        <strong>To find out the land/ site area of your school, you
        need to measure:</strong>
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
      </div>
      </label>
      <div class="answer clearfix"></div>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">1</span> What is the
      total site/plot area of your school?</label>
      <table class="table table-bordered table-striped">
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
    </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 3: Explore the number of species of plants and
          animals in your school</h6>
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
      </div>
      </label>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">2</span>How many
      species of plants and animals exist
      in your school?</label>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th><label></label>
            </th>
            <th><label>Native</label>
            </th>
            <th><label>Exotic</label>
            </th>
            <th><label>Total</label>
            </th>
          </tr>
          <tr>
            <td><label> Plants</label>
            </td>
            <td><?php echo (getFiled('Q5L1S1', $schoolUserID) != "") ? getFiled('Q5L1S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S2', $schoolUserID) != "") ? getFiled('Q5L1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L1S3', $schoolUserID) != "") ? getFiled('Q5L1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td><label>Animals</label>
            </td>
            <td><?php echo (getFiled('Q5L2S1', $schoolUserID) != "") ? getFiled('Q5L2S1', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L2S2', $schoolUserID) != "") ? getFiled('Q5L2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q5L2S3', $schoolUserID) != "") ? getFiled('Q5L2S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="form-group">
      <label>
      <h6> Task 4: Find out if your school uses pesticides </h6>
      </label>
    </div>
    <div class="form-group">
      <label class="control-label"><span class="cube">3</span>Do you use
      chemical-based pesticides in
      your school green cover?</label>
      <p> <?php echo (getFiled('Q6L1', $schoolUserID) != "") ? (getFiled('Q6L1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </div>
    <div class="form-group">
      <label>
      <h6>Upload supporting documents</h6>
      </label>
      <br>
      Please upload the following supporting documents:<br>
      • Pictures of green cover<br>
      • Pictures of landscaped area<br>
      • Building construction plan<br>
      Uploaded files must be in one of the following formats: PDF Document
      (.pdf), Word Document
      (.doc, .docx), Image File (.jpg, .jpeg). File size per document
      should not exceed <strong>100 KB.</strong> <br>
      <?php
        if (!empty($greenCover)) {
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
          <?php foreach ($greenCover as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Green_Cover_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
    </div>
    <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/food/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/water/' . $id) ?>">NEXT</a> </div>
  </form>
</div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
