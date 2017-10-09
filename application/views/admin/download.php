<?php

//  print_r($download);    die();
    //foreach ($download as $r){ 
$i=20;
   while($i>17){     
    $data = file_get_contents(base_url()."/uploads/files/".$download[$i]->file_name); // Read the file's contents
    $name = $download[$i]->file_name;
 
    force_download($name, $data,true);
    $i--;
    };

?>
