<?php
    $serverName = "127.0.0.1";
    $dbuserName = "root";
    $dbPwd = "1234567890";
    $dbName = "autonation";

    $conn = mysqli_connect($serverName,$dbuserName,$dbPwd,$dbName);

    if(!$conn){
        die("Connection Failed due to: " . mysqli_connect_error());
    }

?>