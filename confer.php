<?php
error_reporting(0);
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "capture_moments";
    $port       = "3307";

    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    if ($conn) {
        // echo "Connecetion established";
    }
    else {
        echo "Connection unavilable".mysqli_connect_error();
    }
?>