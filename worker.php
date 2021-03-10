<?php
    include_once 'header.php';
    include_once 'includes/db.inc.php';
?>
<!-- Worker UI for mechanics/workers-->
<div class="main">
    <?php
        $id = $_SESSION['userid'];
        $name = $_SESSION['username'];
        echo "<h3>Welcome " . $name ."</h3><br>";
    ?>
    <div class="main-content">
        <div class="work">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add part
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="includes/repair.inc.php" method="POST" id="repair-form">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                        <label for="worker-id">Worker ID :</label>
                                        <div class="textarea">
                                            <input type="number" name="worker-id" id="repair-details" value="" required>
                                        </div>
                                </li>
                                <br>
                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                        <label for="vehicle-id">Vehicle ID :</label>
                                        <div class="textarea">
                                            <input type="number" name="vehicle-id" id="vehicle-id" value="" required>
                                        </div>
                                </li>

                                <br>
                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                        <label for="part-price">Price :</label>
                                        <div class="textarea">
                                            <input type="number" name="part-price" id="part-price" value="" required>
                                        </div>
                                </li>

                                <br>

                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                        <label for="worker-id">Repair Details :</label> 
                                        <div class="textarea">
                                            <textarea name="repair-details" id="repair-details" rows="6" required></textarea>
                                        </div>
                                </li>

                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                        <label for="part">Part :</label>
                                        <div class="textarea">
                                            <select name="part" id="">
                                                <option value="">>---Select---<</option>
                                                <?php
                                                    $sql = "SELECT * FROM parts;";
                                                    $result = mysqli_query($conn,$sql);
                                                    $resultCheck = mysqli_num_rows($result);
                                    
                                                    if ($resultCheck > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value=" . $row['partsId'] .">
                                                                    " . $row['partsType'] ."
                                                                    </option>";
                                                        }
                                                    }
                                                    else {
                                                        echo"error";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                </li>

                                <br>
                            </ul>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="repair-submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM repairs WHERE workerId ='$id' AND repairsStatus = 'Ongoing' LIMIT 10;";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='repair-entry'>
                                <h4>Ref No: #" . $row['repairsId'] ."</h4>
                                <h5>Vehicle ID: " . $row['vehicleId'] ."</h5>
                                <h5>Repair Details: " . $row['repairsDescription'] ."</h5>
                                </div>";
                    }
                }
            ?>
        </div>
        <div class="search-data">
            <form action="worker.php" method="POST">
                <input type="text" name="search" placeholder="Search">
                <button type="submit" name="search-submit">Search</button>
            </form>
            <?php
                if (isset($_POST['search-submit'])) {
                    $search = mysqli_real_escape_string($conn,$_POST['search']);
                    $sql = "SELECT * FROM repairs INNER JOIN customers ON repairs.vehicleId = customers.vehicleId WHERE repairs.vehicleId = '$search';";
                    $result = mysqli_query($conn,$sql);
                    $queryResult = mysqli_num_rows($result);

                    if ($queryResult > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='querybox'>
                                <p>Customer Name:" .$row['customersName'] . "</p>
                                <p>Customer ID:" .$row['customersId'] . "</p>
                                <p>Customer Debt:" .$row['customersDebt'] . "(TL)</p>
                                <h4>Ref No: #". $row['repairsId'] . "</h4>
                                <h5>Vehicle ID: ". $row['vehicleId'] ."</h5>
                                <p> Repair Details: " .$row['repairsDescription'] . "</p>
                            </div>";
                        }
                    }
                    else {
                        echo "No result matching query!";
                    }
                }
            ?>
        </div>
    </div>
</div>
   
<?php
    include_once 'footer.php'
?>