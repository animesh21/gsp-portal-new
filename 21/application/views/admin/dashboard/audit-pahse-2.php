<h1>Dashboard <small class="h5" style="color:#e86549 !important; font-weight:600;">( Audit Phase 2 )</small></h1>
<div class="schools-statics "> <a href="../<?php base_url()?>dashboard/registration_2019_phase_2">
  <div class="statics-circle"> <span><?php echo count($Schools_pahse2);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Total School Registrations</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/school_that_started_audit_phase_2">
  <div class="statics-circle"> <span> <?php echo $audit1; ?> </span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools That Started The Audit</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/school_that_complete_audit_phase_2">
  <div class="statics-circle"> <span><?php echo count($complete_audit_phase_2_count);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Completed The Audit But Not Submitted</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/school_that_submit_audit_phase_2">
  <div class="statics-circle"> <span><?php echo $submitcount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Submitted The Audit</div>
</div>
<div class="schools-statics"><a href="../<?php base_url()?>dashboard/audit_started_but_not_complete_phase_2">
  <div class="statics-circle"> <span><?php echo $uncompletecount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Started The Audit But Did Not Complete</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/schools_did_not_start_the_audit_phase_2">
  <div class="statics-circle"> <span><?php echo $notstartcount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Did Not Start The Audit</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/registration_2017_phase_new_2">
  <div class="statics-circle"> <span><?php echo $schoolcount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">2019 Registration</div>
</div>
