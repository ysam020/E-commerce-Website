<?php
require '../Includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifestyle Store</title>
</head>
<body>
    <?php include '../Includes/header.php'; ?>

    <!--Content-->
    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h1>We sell lifestyle.</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="login.php"><button class="btn btn-danger btn-lg active">Shop Now</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 id="featured">Featured Categories</h1>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="#"><img src="../Media/1.jpg">
                    <div class="caption caption-custom">
                        <a href="login.php"><h3>Cameras</h3>
                        <p>Choose among the best available in the world</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="login.php"><img src="../Media/7.jpg">
                    <div class="caption caption-custom">
                        <h3>Watches</h3>
                        <p>Original watches from the best brands</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="login.php"><img src="../Media/8.jpg">
                    <div class="caption caption-custom">
                        <h3>Shirts</h3>
                        <p>Our exquisite collection of shirts</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>
</body>
</html>