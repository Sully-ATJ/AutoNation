<?php
    include_once 'header.php';
?>
<div class="login-form">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <label for="uid">Username: </label>
        <input type="text" name="uid" placeholder="Username/email">
        <label for="pwd">Password: </label>
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
</div>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo"<p>Fill in all fields!</p>";
        }
        elseif ($_GET["error"] == "notregistered") {
            echo"<p>User not found</p>";
        }
        elseif ($_GET["error"] == "wrongpwd") {
            echo"<p>Incorrect password!</p>";
        }
        elseif ($_GET["error"] == "stmtfailed") {
            echo"<p>Error, try again</p>";
        }
    }   
    include_once 'footer.php';
?>