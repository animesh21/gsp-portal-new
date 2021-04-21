<?php
/*****************************************************************************/
/*DATABASE CONNECTIVITY CODE*/
/*****************************************************************************/
function db_connection() {
    $host_name = "localhost";
    $database = "GSP_2018"; 
    $username = "gsp2018_usr"; 
    $password = "studio@123"; 
    try {
        $db = new PDO('mysql:host=' . $host_name . ';dbname=' . $database, $username, $password);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $db;
}
/*****************************************************************************/
/*SET PASSWORD IN GSP AUDIT 2017*/
/*****************************************************************************/
function setPasswordGSPAudit2017($userId,$setPassword){
    $db=db_connection();  
    $stmt=$db->query("UPDATE gsp_user SET password='$setPassword' WHERE id='$userId'");
	if($stmt){
	  echo "Password Has Been Set Successful...";
	}
}
/*****************************************************************************/
/*SET PASSWORD IN GSP AUDIT 2017 BY Email Id*/
/*****************************************************************************/
function setPasswordGSPAudit2017ByEmail($email,$setPassword){
    $db=db_connection();  
    $stmt=$db->query("UPDATE gsp_user SET password='$setPassword' WHERE email='$email'");
	if($stmt){
	  echo "Password Has Been Set Successful...";
	}
}
/*****************************************************************************/
/*CALLING FUNCTION*/
/*****************************************************************************/
if(isset($_GET['userId'])&& !empty(isset($_GET['userId'])) && strcmp($_GET['function_name'],"setPasswordGSPAudit2017")==0){
  $userId=$_GET['userId'];
  $setPassword=$_GET['setPassword'];
  setPasswordGSPAudit2017($userId,$setPassword);
}
if(isset($_GET['email'])&& !empty(isset($_GET['email'])) && strcmp($_GET['function_name'],"setPasswordGSPAudit2017ByEmail")==0){
  $email=$_GET['email'];
  $setPassword=$_GET['setPassword'];
  setPasswordGSPAudit2017ByEmail($email,$setPassword);
}
?>
