<?php
    include_once 'header.php';
    include_once 'includes/db.inc.php';
?>
<!-- Client UI for customers-->


<div class="repair-updates">
        <?php
            $id = $_SESSION['userid'];
            $name = $_SESSION['username'];
            $vehicle = $_SESSION['vehicleId'];
            echo "<h5>Welcome " . $name ."</h5><br>";
            $sql = "SELECT * FROM repairs INNER JOIN customers ON repairs.vehicleId = customers.vehicleId WHERE customers.customersId ='$id' AND repairsStatus = 'Ongoing';";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                $price = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo"<div class='update'>
                        <h4>Ref No: #" . $row['repairsId'] ."</h4>
                        <h4>Repair Description: " . $row['repairsDescription'] ."</h4>
                        <h4>Price: " . $row['repairsPrice'] ."(TL)</h4>
                    </div>";
                    $price = $price + $row['repairsPrice'];
                }
                echo "Total Repair price:" . $price . "(TL)";
            }
            else{
                echo "<h2 style='position:relative; top:35%; left:30%'>There are currently no <em>Ongoing</em> repairs.</h2>";
            }
        ?>
    </div>
<?php
    include_once 'footer.php'
?>