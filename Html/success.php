<?php
require '../Includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/success.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php'; ?>

    <!--Content-->
    <div class="container message">
        <?php
        $user_id= $_SESSION['id'];
 
        $item_id_str= $_GET['item_id'];
        $item_id= array_map('intval', explode(',', $item_id_str));
       
        $con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));
        foreach($item_id as $id) {
            $update_query = "UPDATE users_items SET status='Confirmed' WHERE user_id ='$user_id' AND item_id = '$id'";
            $result= mysqli_query($con, $update_query);
          }
          echo "<h3>Your order is confirmed. Thank you for shopping with us. <a href='products.php'>​Click here​ </a>to purchase any other item.</h3>";
       
        
        ?>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>

</body>
</html>
    