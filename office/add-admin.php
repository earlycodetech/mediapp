<?php
include '../config/alert.message.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin | MediApp</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Add a hospital admin</h2>

        <div class="card p-2" style="width: 48rem;margin:0 auto">
            <?php echo ErrorMessage(); echo SuccessMessage();?>

            <form action="system/_add-admin.php" method="POST">
                <div class="row">
                    <div class="col-6">
                        <label>First name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="col-6">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-5">
                        <label>Phone number</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>
                    <div class="col-7">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>Create password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Confirm password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                </div>
             
                <div class="mb-2">
                    <label>Contact address</label>
                    <textarea name="contact_add" class="form-control"></textarea>
                </div>
                <div class="row mb-2">
                    <span>Gender</span>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" checked>
                            <label class="form-check-label" for="femal">Female</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <label>Date of birth</label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <select name="designation" class="form-select">
                        <option value="none">Select designation</option>
                        <option>Doctor</option>
                        <option>Nurse</option>
                        <option>Radiologist</option>
                        <option>Dentist</option>
                        <option>Receptionist</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="add-admin">Add admin</button>
            </form>
        </div>
    </div>
<script src="../assets/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>