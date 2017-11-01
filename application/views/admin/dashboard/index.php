<h1>Dashboard</h1>

<div class="schools-statics "> <a href="<?php base_url()?>dashboard/total_school_registration" target="_blank">
        <div class="statics-circle"> <span><?php echo $Schools;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Total School Registrations</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/school_that_started_audit">
        <div class="statics-circle"> <span>
		<?php echo $audit1; ?>
		</span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Schools That Started The Audit</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/school_that_complete_audit">
        <div class="statics-circle"> <span><?php echo $completecount;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Schools Completed The Audit</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/school_that_submit_audit">
        <div class="statics-circle"> <span><?php echo $submitcount;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Schools Submitted The Audit</div>
</div>
<div class="schools-statics"><a href="<?php base_url()?>dashboard/audit_started_but_not_complete" target="_blank">
        <div class="statics-circle"> <span><?php echo $uncompletecount;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Schools Started The Audit But Did Not Complete</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/schools_did_not_start_the_audit">
        <div class="statics-circle"> <span><?php echo $notstartcount;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">Schools Did Not Start The Audit</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/registration_2017">
        <div class="statics-circle"> <span><?php echo$schoolcount;?></span>
            <label>view</label>
        </div>
    </a>
    <div class="title">2017 Registration</div>
</div>
