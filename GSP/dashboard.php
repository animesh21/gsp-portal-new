<?php
session_start();
        if(isset($_SESSION['year']))
        header('location:/GSP/sid/'.$_SESSION['year'].'/dashboard.php');
        else
        header('location:/GSP/sid/dashboard/'); 

if($_SESSION['username'] == "")
{
    header('location:index.php?action=authorization');
    exit();
}
include('website_db.php');
$null = "NULL";
//Total Schools
$sql_total_schools = mysql_query("select count(*) from `lime_tokens_266617`");
$total_registrations = mysql_result($sql_total_schools,0,0);
/*
$sql_Started_Audit = mysql_query("select count(id) as total from `lime_survey_266617`");
$Started_Audit_count = mysql_result($sql_Started_Audit,0,0);
*/
// Audit Started
$sql_Started_Audit = mysql_query("select count(id) as total from `lime_answers_for_progress`");
$Started_Audit_count = mysql_result($sql_Started_Audit,0,0);

// Audit Completed
$sql_data = mysql_query("select count(*) from `lime_survey_266617` where `submitdate` is not null");
$audit_completed = mysql_result($sql_data,0,0);

// Audit Not Completed
/*
$sql_data_more = mysql_query("select count(*) from `lime_survey_266617` where `submitdate` is null");
$audit_not_completed = mysql_result($sql_data_more,0,0);
*/
$audit_not_completed = $Started_Audit_count - $audit_completed;

// Audit Not Started
$schools_not_started = $total_registrations - $Started_Audit_count;

// Feedback
$sql_feedbacks = mysql_query("select * from `gsp_feedback`");
$total_feeback = mysql_num_rows($sql_feedbacks);

include('header.php');
?>


<div class="container">
    <div class="content-form wrapper" style="padding-top: 0px;">
    <div class="log-nav">
      <ul>
          <li>Welcome <?php echo $_SESSION['name']; ?>,&nbsp;&nbsp;<a href="regist.php">Logout</a></li>
<!--        <li>|</li>
        <li><a href="#">Change Password</a></li>-->
      </ul>
    </div>
    
    
    <h1>Dashboard</h1>
    <div class="schools-statics ">
        <a href="audit_registrations.php" target="_blank">
        <div class="statics-circle">
            <span><?php echo $total_registrations; ?></span>
            <label>view</label>
        </div>
            </a>
        <div class="title">Total School Registrations</div>
	</div> 
	
	
	<div class="schools-statics">
        
        <div class="statics-circle">
            <span><?php echo $Started_Audit_count; ?></span>
            <label>view</label>
        </div>
          
        <div class="title">Schools That Started The Audit</div>
    </div> 
	
	
    <div class="schools-statics">
        <a href="audit_completed.php" target="_blank">
        <div class="statics-circle">
            <span><?php echo $audit_completed; ?></span>
            <label>view</label>
        </div>
            </a>
        <div class="title">Schools Completed The Audit</div>
    </div> 
	
	
    <div class="schools-statics">
        <a href="sanc_data.php" target="_blank">
        <div class="statics-circle">
            <span><?php echo $audit_not_completed; ?></span>
            <label>view</label>
        </div>
            </a> 
        <div class="title">Schools Started The Audit But Did Not Complete</div>
    </div> 
	
	
    <div class="schools-statics">
        <a href="snsa_data.php" target="_blank">
        <div class="statics-circle">
            <span><?php echo $schools_not_started; ?></span>
            <label>view</label>
        </div>
            </a>
        <div class="title">Schools Did Not Start The Audit</div>
    </div> 
    
<!--    <div class="schools-statics">
        <a href="view_all_responces.php" target="_blank">
        <div class="statics-circle">
            <span></span>
            <label style="margin: 15px 0 0;">view</label>
        </div>
            </a>
        <div class="title">View Responses</div>
    </div>-->
    
<!--    <div class="schools-statics">
        <a href="view_points.php" target="_blank">
        <div class="statics-circle">
            <span></span>
            <label style="margin: 15px 0 0;">view</label>
        </div>
            </a>
        <div class="title">View Calculated Points</div>
    </div>
    -->
    <div class="schools-statics">
        <a href="audit_feedback.php" target="_blank">
        <div class="statics-circle">
            <span><?php echo $total_feeback; ?></span>
            <label>view</label>
        </div>
            </a>  
        <div class="title">Schools Provided Feedback</div>
    </div>
    
    
  </div>
  <!--close content-form--> 
</div>
<!--close container-->
<?php
include('footer.php');
?>