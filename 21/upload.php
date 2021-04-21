<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

/*
 * Access-Control headers are received during OPTIONS requests
 */
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

$varParams = json_decode(file_get_contents('php://input'), true);
if (!empty($varParams['profile_image'])) {
//    $rand = rand();
//    $imagename = $rand.'.jpeg';
    $user_id = $varParams['user_id'];

    $imagename = $varParams['fileName'];
    $destination = './uploads/files/'.$imagename;
    file_put_contents($destination, base64_decode($varParams['profile_image']));
    mysql_connect('localhost', 'gsp2018_usr', 'studio@123');
    mysql_select_db('GSP_2019');
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO files(file_name, created, modified, status, userid) VALUES('".$imagename."',
     '".$date."', '".$date."', 1, '".$user_id."')";
    mysql_query($sql);


//    $new_image_name = $_FILES["file"]["name"];
//    $tmpFilePath = $_FILES['file']['tmp_name'];
//    $filePath = "./uploads/";
//    move_uploaded_file($tmpFilePath, $filePath . $new_image_name);
}
?>
