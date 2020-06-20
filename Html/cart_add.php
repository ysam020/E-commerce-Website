<?php
include '../Includes/common.php';

$user_id= $_SESSION["id"];
$item_id= $_GET['item_id'];

$con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));

$insert_data= "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$result= mysqli_query($con, $insert_data);
header('location: products.php');
?>