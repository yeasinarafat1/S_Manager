<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","Student info");
    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    if ($connection) {
        
    }
    else{
        die('connection failed');
    };
?>