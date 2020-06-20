<?php
require '../Includes/common.php';

$con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));

$email= $_POST['email'];
$password_str= $_POST['password'];
$password= md5($password_str);

$fetch_user_data= "SELECT * FROM users WHERE email= '$email' && password='$password'";
$result= mysqli_query($con, $fetch_user_data);
$row= mysqli_fetch_row($result);
$id= $row['0'];

$rows_fetched= mysqli_num_rows($result);

if ($rows_fetched> 0){
    $_SESSION['email']= $email;
    $_SESSION['id']= $id;
    header('location: products.php');
}
else{
    echo "Incorrect Email or Password";
}

?>
