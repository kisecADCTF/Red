<html>
    <head><title>Reflected XSS</title></head>
    <body>
        <form action="" method="GET">
            <input type="text" name="text" />
            <input type="submit" name="submit" />
        </form>
    </body>
</html>

<?php

    $text = $_GET['text'];
    //if(isset($test)) {
    if(preg_match('/</', $_GET['text'])) {
        $a = preg_replace('/</', "&lt", $_GET['text']);
        echo $a;
        }
    else{
        echo $_GET['text'];
    }

//   <script>alert(1)</script>

?>