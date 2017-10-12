<?php

   //echo '<pre>'; print_r($download[20]->file_name);    die();
    //foreach ($image as $r){ 

    $data = file_get_contents(base_url()."/uploads/files/".$download[20]->file_name); // Read the file's contents
    $name = $download[20]->file_name;
 
    force_download($name, $data);
    //}

?>
