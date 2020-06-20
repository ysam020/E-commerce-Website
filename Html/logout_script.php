<?php
require '../Includes/common.php';
if (isset($_SESSION['email'])) {
    session_destroy();
    header('location: index.php');
}
else{
    header('location: products.php');
}
?>