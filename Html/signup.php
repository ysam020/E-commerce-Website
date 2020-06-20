<?php
require '../Includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <title>Sign up</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php'; ?>

    <!--Content-->
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <form class="signup" method="post" action="../Html/signup_script.php">
                <h1>Sign up</h1>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="E-mail" name="email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="tel" placeholder="Contact" name="contact">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="City" name="city">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn btn-block" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>

</body>
</html>