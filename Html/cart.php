<?php
require '../Includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php'; ?>

    <!--Content-->
    <div class="container">
        <div class="row" id="cart">
            <div class="col-xs-4 col-xs-offset-4">
                <table class="table table-bordered">
                    <?php
                    $con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));
                    $sum= 0;
                    $user_id= $_SESSION["id"];
                    $query= "SELECT items.id, items.name AS Name, items.price AS Price FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' && status='Added to cart'";
                    $result= mysqli_query($con, $query);// or die(mysqli_error($con));
                    $rows_fetched= mysqli_num_rows($result);
                    if($rows_fetched>0){
                    ?>
                        <thead>
                            <tr>
                                <th>Item number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id='';
                            while($row= mysqli_fetch_array($result)){
                                $sum+=$row["Price"];
                                $id.= $row["id"].",";
                                echo "<tr><td>"."#".$row["id"]."</td><td>".$row["Name"]."</td><td>Rs ".$row["Price"]."</td><td><a href= 'cart_remove.php?item_id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
                            }

                            $id= rtrim($id, ",");
                            echo "<tr><td></td><td>Total</td><td>Rs ".$sum."</td><td><a href='success.php?item_id={$id}' class='btn btn-primary'>Confirm Order</a></td></tr>";
                        
                            ?>
                        </tbody>
                    <?php
                    }
                    else{
                        echo "<h3 style='margin-top: 100px;'><center>Nothing here. <a href='products.php' style='text-decoration: none'>Add items to cart</a></center></h3>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>

</body>
</html>