<?php
require '../Includes/common.php';

$con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));

$name= $_POST['name'];
$email= $_POST['email'];
$password_str= $_POST['password'];
$contact= $_POST['contact'];
$city= $_POST['city'];
$address= $_POST['address'];
$password= md5($password_str);

$fetch_user_data= "SELECT * FROM users WHERE email= '$email'";
$result= mysqli_query($con, $fetch_user_data);
$rows_fetched= mysqli_num_rows($result);

if ($rows_fetched> 0){
    echo "Email Already Taken";
}
else{
    $user_registration= "INSERT INTO users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";
    $user_registration_submit= mysqli_query($con, $user_registration);  
    echo "Registration Successful";
}

?>
