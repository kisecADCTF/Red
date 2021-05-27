<?php
    $str1 = "Kisec";
    $str2 = "KISEC";

    if(preg_match($str1, "Kisec", $match))
        echo $str1 ."은 kisec과 같습니다. (1)";
    if(preg_match($str1, "kisec"))
        echo $str1 ."은 kisec과 같습니다. (2)";

    $a = preg_replace("sec", "sa", $str2);
    echo "변경 후 (1) :". $a ."<br/>";

    $a = preg_replace("sec", "sa", $str2);
    echo "변경 후 (2) :". $a ."<br/>";

?>
