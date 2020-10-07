<h1>Dashboard <small class="h5" style="color:#e86549 !important; font-weight:600;">( Audit Phase 1 )</small></h1>
<div class="schools-statics "> <a href="<?php base_url()?>total_registration" target="_blank">
  <div class="statics-circle"> <span><?php echo count($total_school); ?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Total School Registration</div>
</div>
<div class="schools-statics"> <!-- <a href="<?php base_url()?>total19_startedtheaudit" target="_blank"> -->
  <div class="statics-circle"> <span>0 <!-- <?php echo count($startedtheaudit); ?>  --></span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Schools That Started The Audit</div>
</div>
<div class="schools-statics"> <!-- <a href="<?php base_url()?>total19_CompletedAuditButNotSubmitted" target="_blank" >  -->
  <div class="statics-circle"> <span>0 <!-- <?php echo count($CompletedAuditButNotSubmitted);?> --> </span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Schools Completed The Audit But Not Submitted</div>
</div>
<div class="schools-statics"> <!-- <a href="<?php base_url()?>total19_SubmittedTheAudit" target="_blank">  -->
  <div class="statics-circle"> <span>0 <!-- <?php echo count($SubmittedTheAudit);?> --> </span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Schools Submitted The Audit</div>
</div>
<div class="schools-statics"> <!-- <a href="<?php base_url()?>total19_StartedAuditButDidNotComplete" target="_blank"> -->
  <div class="statics-circle"> <span>0 <!-- <?php echo count($StartedAuditButDidNotComplete);?> --> </span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Schools Started The Audit But Did Not Complete</div>
</div>
<div class="schools-statics"> <!-- <a href="<?php base_url()?>total19_NotStartTheAudit" target="_blank"> --> 
  <div class="statics-circle"> <span>0 <!-- <?php echo count($NotStartTheAudit);?> --> </span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Schools Did Not Start The Audit</div>
</div>
<div class="schools-statics "> <!-- <a href="<?php base_url()?>total19_registration" target="_blank"> -->
  <div class="statics-circle"> <span>0 <!-- <?php echo count($school); ?> --></span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">New Registrations (2020)</div>
</div>
<div class="schools-statics "> <!-- <a href="<?php //echo base_url("admin/Audit/disabled_school")?>" target="_blank"> --> 
  <div class="statics-circle"> <span>0 <!-- <?php echo $disable_count; ?> --> </span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Disabled School (2020)</div>
</div>
<div class="schools-statics"> <!-- <a href="./<?php base_url()?>audit_started/getDigitalCertificateRecord" target="_blank"> -->
  <div class="statics-circle"> <span>0 <!-- <?php echo $certificate_count;?> --></span>
    <label>view</label>
  </div>
  <!-- </a> -->
  <div class="title">Digital Certificates Of Schools</div>
</div>


<div class="schools-statics "> <a href="<?php base_url()?>communityPortalNewSchool" target="_blank">
  <div class="statics-circle"> <span><?php echo count($records); ?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Community Portal New School</div>
</div>
