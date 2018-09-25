<?php
session_start();
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
//$sql_Started_Audit = mysql_query("select count(id) as total from `lime_answers_for_progress` where completeness>9");

$sql_Started_Audit = mysql_query("select count(*) from 
lime_tokens_266617 as token join lime_answers_for_progress as progress 
on token.token = progress.token
where progress.completeness > 9");
$Started_Audit_count = mysql_result($sql_Started_Audit,0,0);

// Audit Completed
$sql_data = mysql_query("SELECT count(*) FROM lime_survey_266617 AS survey,lime_tokens_266617 AS surtoken WHERE survey.token=surtoken.token AND surtoken.usesleft<=0  AND surtoken.completed !='N' AND survey.`submitdate` IS NOT NULL");

//$sql_data = mysql_query("SELECT count(*) FROM lime_tokens_266617 AS token
//JOIN lime_answers_for_progress AS progress ON token.token = progress.token
//JOIN lime_survey_266617 AS survey ON survey.token = token.token
//where token.usesleft < 1 and token.completed != 'N' and survey.submitdate is not null");

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
  <div class="content-form wrapper"> 
    <h1>Dashboard</h1>
    <div class="schools-statics "> <a href="audit_registrations.php" target="_blank">
      <div class="statics-circle"> <span><?php echo $total_registrations; ?></span>
        <label>view</label>
      </div>
      </a>
      <div class="title">Total School Registrations</div>
    </div>
    <div class="schools-statics"> <a href="audit_started.php">
      <div class="statics-circle"> <span><?php echo $Started_Audit_count; ?></span>
        <label>view</label>
      </div>
      </a>
      <div class="title">Schools That Started The Audit</div>
    </div>
    <div class="schools-statics"> <a href="audit_completed.php">
      <div class="statics-circle"> <span><?php echo $audit_completed; ?></span>
        <label>view</label>
      </div>
      </a>
      <div class="title">Schools Completed The Audit</div>
    </div>
    <div class="schools-statics"><a href="audit_started_but_did_not_complete.php" target="_blank">
      <div class="statics-circle"> <span><?php echo $audit_not_completed; ?></span>
        <label>view</label>
      </div>
	  </a>
      <div class="title">Schools Started The Audit But Did Not Complete</div>
    </div>
    <div class="schools-statics"> <a href="schools_did_not_start_the_audit.php">
      <div class="statics-circle"> <span><?php echo $schools_not_started; ?></span>
        <label>view</label>
      </div>
      </a>
      <div class="title">Schools Did Not Start The Audit</div>
    </div>
  </div>
  <!--close content-form--> 
</div>
<!--close container-->
<?php
include('footer.php');
?>
