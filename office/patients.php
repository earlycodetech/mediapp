<?php
include_once '../config/db.connect.php';
include '../config/alert.message.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>All registered patients</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Card Number</td>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Date of Birth</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM users WHERE acctype='patient' ORDER BY id DESC LIMIT 20";
                $sql_result = mysqli_query($db_connect,$sql);
                while($rows = mysqli_fetch_assoc($sql_result)){
                ?>
                <tr>
                    <td><?php echo $rows['card_no']; ?></td>
                    <td><?php echo $rows['lastname']; ?></td>
                    <td><?php echo $rows['firstname']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['dob']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>