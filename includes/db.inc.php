<?php
    $serverName = "serverName";
    $dbuserName = "userName4DB";
    $dbPwd = "pwd4DB";
    $dbName = "nameOfDB";

    $conn = mysqli_connect($serverName,$dbuserName,$dbPwd,$dbName);

    if(!$conn){
        die("Connection Failed due to: " . mysqli_connect_error());
    }

?>
