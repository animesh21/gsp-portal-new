<h1>Dashboard <small class="h5" style="color:#e86549 !important; font-weight:600;">( Gsp Audit 2019 Combined )</small></h1>
<div class="schools-statics "> <a href="../<?php base_url()?>dashboard/combinded_total_school">
  <div class="statics-circle"> <span><?php echo count($total_school);?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Total School Registrations</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/combinded_startedtheaudit">
  <div class="statics-circle"> <span> <?php echo $startedtheaudit; ?> </span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools That Started The Audit</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/combinded_completecount">
  <div class="statics-circle"> <span><?php echo $completecount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Completed The Audit But Not Submitted</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>dashboard/combinded_submitcount">
  <div class="statics-circle"> <span><?php echo $submitcount  ;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Submitted The Audit</div>
</div>
<div class="schools-statics"><a href="../<?php base_url()?>dashboard/combinded_uncompletecount">
  <div class="statics-circle"> <span><?php echo $uncompletecount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">Schools Started The Audit But Did Not Complete</div>
</div>
<div class="schools-statics"> <a href="../<?php base_url()?>audit_started/getSummary">
  <div class="statics-circle"> 
    <label style="margin-top: 15px; color: #fff; font-weight: bold;">Summary</label>
  </div>
  </a>
  <div class="title">GSP Audit Summary</div>
</div>
<!-- <div class="schools-statics"> <a href="../<?php base_url()?>dashboard/registration_2017_phase_new_2">
  <div class="statics-circle"> <span><?php echo $schoolcount;?></span>
    <label>view</label>
  </div>
  </a>
  <div class="title">2019 Registration</div>
</div> -->
