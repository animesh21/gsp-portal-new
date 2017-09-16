<?php ob_implicit_flush(true); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
ob_implicit_flush(true);
ob_end_flush();

for ($i=0; $i<5; $i++) {
    echo $i.'<br>';
    ob_flush();
    flush();   
    sleep(1);
}  
?>

</body>
</html>