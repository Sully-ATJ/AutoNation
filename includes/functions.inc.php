<?php

    function emptyInputLogin( $username, $pwd){
        $result;
        if(empty($username) || empty($pwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function uidExists($conn, $username, $email){
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location: ../login.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt,"ss",$username, $email);
        mysqli_stmt_execute($stmt);


        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        
        mysqli_stmt_close($stmt);
    }


    function loginUser($conn,$username,$pwd){
        $uidExists = uidExists($conn,$username,$username);

        if ($uidExists === false) {
            header("location: ../login.php?error=notregistered");
            exit();
        }

        /*$pwdHashed = $uidExists["customersPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false) {
            header("location: ../login.php?error=wrongpwd");
            exit();
        }
        elseif ($checkPwd === true) {*/
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersEmail"];
            $_SESSION["username"] = $uidExists["usersName"];
            $_SESSION["usertype"] = $uidExists["usersType"];
            //check the user type and send them to different UIs
            if ($uidExists["usersType"] == 1) {
                header("location: ../client.php");
                exit();
            }
            elseif ($uidExists["usersType"] == 2) {
                header("location: ../worker.php");
                exit();
            }
        //}
    }

    function addRepair($conn,$worker,$car,$price,$details,$part){
        $status  ="Ongoing";
        $sql = "INSERT INTO repairs (repairsDescription, partId, workerId, vehicleId, repairsPrice, repairsStatus) VALUES ('$details', '$part','$worker','$car','$price','$status');";
        if(mysqli_query($conn,$sql)){
            header("location: ../worker.php?error=none");
            exit();
        }
        else {
            header("location: ../worker.php?error=error");
            exit();
        }
        
    }

?>
