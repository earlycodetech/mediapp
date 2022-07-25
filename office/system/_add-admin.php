<?php
include_once '../../config/db.connect.php';
include '../../config/alert.message.php';

if(!isset($_POST['add-admin'])){
    header('Location:../dashboard');
}

//COLLECT DATA FROM FORM
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

//check if email exists
$sql_check_email = "SELECT * FROM users WHERE email='$email';";
$sql_check_email_result = mysqli_query($db_connect,$sql_check_email);
if(mysqli_num_rows($sql_check_email_result) >= 1){
    $_SESSION['error'] = 'User already exist. Please login to your account';
    header('Location:../add-admin');
}

$password = password_hash($_POST['password'],PASSWORD_DEFAULT); //encrypt password
$contact_add = $_POST['contact_add'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$acct_type = $_POST['designation'];

$now = new DateTime();
$timestamp = $now->getTimestamp();

//INSERT RECORDS INTO DB
$sql = "INSERT INTO users (firstname,lastname,phone,email,password,conaddress,gender,dob,acctype,timestamp) VALUES(?,?,?,?,?,?,?,?,?,?);";

$stmt = mysqli_stmt_init($db_connect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,'sssssssssi',$first_name,$last_name,$phone,$email,$password,$contact_add,$gender,$dob,$acct_type,$timestamp);

if(mysqli_stmt_execute($stmt)){
    $_SESSION['success'] = 'Admin was added successfully';
    header('Location:../add-admin');
}else{
    $_SESSION['error'] = 'Error while adding admin';
    header('Location:../add-admin');
}