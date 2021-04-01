<?php
    $hostName = "localhost";
    $userName = "root";
    $passWord = "";
    $databaseName = "appbaemin";

    $con = new mysqli($hostName,$userName,$passWord,$databaseName);

    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $con->connect_error;
        exit();
    }else{
        $con -> set_charset("utf8");
    }


?>