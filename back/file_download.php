<?php
    $file_name = "a.txt";
    $path = "./upload/$filename";
    $file_size = filesize($path);

    header("Pragma: public");
    header("expires: 0");
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: binary");
    header("content-Length:" .$file_size);
    header("Content-Disposition: attachment; filename=" .$file_name);

    ob_clean();
    flush();
    readfile($path);
?>