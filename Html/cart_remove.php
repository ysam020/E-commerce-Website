<?php
include '../Includes/common.php';

$user_id= $_SESSION['id'];
$item_id= $_GET['item_id'];

$con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));

$delete_data= "DELETE FROM users_items WHERE user_id='$user_id' && item_id='$item_id'";
$result= mysqli_query($con, $delete_data);
header('location: products.php');
?>