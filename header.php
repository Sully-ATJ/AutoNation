<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" type="text/css" href="Css/reset.css">
    <title>AutoNation</title>
</head>
<body>
    <div class="nav">
        <h1>AutoNation</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#aboutus">About Us</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    if($_SESSION["usertype"] == 1){
                        echo "<li><a href='client.php'>Profile</a></li>";
                    }
                    elseif ($_SESSION["usertype"] == 2) {
                        echo "<li><a href='worker.php'>Profile</a></li>";
                    }
                    echo "<li><a href='includes/logout.inc.php'> Log out</a></li>";
                }
                else {
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </div>