<?php
    session_start();

    if(!isset($_SESSION['id'])){
        header('Location:../login');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <a href="../logout">Logout</a>
    <script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>