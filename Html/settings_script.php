<?php
require '../Includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));

$email= $_SESSION['email'];
$old_password_str= $_POST['old_password'];
$new_password_str= $_POST['new_password'];
$retype_password_str= $_POST['retype_password'];

if($new_password_str!=$retype_password_str){
    echo "Passwords do not match";
    return;
}

$old_password= md5($old_password_str);
$new_password= md5($new_password_str);

$fetch_user_data= "SELECT * FROM users WHERE email ='$email' && password='$old_password'";
$result= mysqli_query($con, $fetch_user_data) or die(mysqli_error($con));

$rows_fetched= mysqli_num_rows($result);

if ($rows_fetched> 0){
    $update_query= "UPDATE users SET password='$new_password' WHERE email='$email'";
    $password_changed= mysqli_query($con, $update_query) or die(mysqli_error($con));
    echo "Password Updated";
    }
else{
    echo "Invalid User Details";
}

?>