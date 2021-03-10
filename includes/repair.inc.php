<?php

    if (isset($_POST["repair-submit"])) {
        $worker = $_POST["worker-id"];
        $car = $_POST["vehicle-id"];
        $price = $_POST["part-price"];
        $details = $_POST["repair-details"];
        $part = $_POST["part"];

        require_once 'db.inc.php';
        require_once 'functions.inc.php';

        addRepair($conn,$worker,$car,$price,$details,$part);
    }
?>