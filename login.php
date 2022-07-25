<?php
include('config/alert.message.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MediApp</title>
    <link rel="stylesheet" href="assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('includes/primarynav.php'); ?>

    <div class="container py-3">
        <div class="card px-3 py-2" style="width:28rem;margin:0 auto">
        
            <?php echo ErrorMessage(); echo SuccessMessage();?>

            <h1>Login to your account</h1>

            <form action="app/login.app.php" method="POST">
                <div class="mb-2">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login and Continue</button>
            </form>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>    
    <script src="assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>