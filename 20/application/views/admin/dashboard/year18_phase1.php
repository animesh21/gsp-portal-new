<h1>Dashboard <small class="h5" style="color:#e86549 !important; font-weight:600;">( Audit Phase 1 )</small></h1>
<div class="schools-statics "> <a href="<?php base_url()?>total_registration" target="_blank">
  <div class="statics-circle"> <span><?php echo count($total_school); ?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Total School Registration</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>total18_startedtheaudit">
  <div class="statics-circle"> <span> <?php echo count($startedtheaudit); ?> </span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools That Started The Audit</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>total18_CompletedAuditButNotSubmitted">
  <div class="statics-circle"> <span><?php echo count($CompletedAuditButNotSubmitted);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Completed The Audit But Not Submitted</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>total18_SubmittedTheAudit">
  <div class="statics-circle"> <span><?php echo count($SubmittedTheAudit);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Submitted The Audit</div>
</div>
<div class="schools-statics"><a href="<?php base_url()?>total18_StartedAuditButDidNotComplete">
  <div class="statics-circle"> <span><?php echo count($StartedAuditButDidNotComplete);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Started The Audit But Did Not Complete</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>total18_NotStartTheAudit">
  <div class="statics-circle"> <span><?php echo count($NotStartTheAudit);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Did Not Start The Audit</div>
</div>
<div class="schools-statics "> <a href="<?php base_url()?>total18_registration" target="_blank">
  <div class="statics-circle"> <span><?php echo count($school); ?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Total School Registration (2018)</div>
</div>
<div class="schools-statics "> <a href="<?php echo base_url("admin/audit_started/disabled_school")?>" target="_blank">
  <div class="statics-circle"> <span><?php echo $disable_count; ?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Disabled School (2018)</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>audit_started/getDigitalCertificateRecord_2018">
  <div class="statics-circle"> <span><?php echo $certificate_count;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Digital Certificates Of Schools</div>
</div>

