<?php
require '../Includes/common.php';
if(isset($_SESSION['email'])){
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
    <link rel="stylesheet" href="../CSS/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php'; ?>

    <!--Panel-->
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary login-panel">
                <div class="panel-heading">
                    <h1>Login</h1>
                </div>
                <div class="panel-body">
                    <p>Login to make a purchase</p>
                    <form method="post" action="../Html/login_submit.php">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="E-mail" name="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group>">
                            <button class="btn btn-primary btn btn-block" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <span>Don't have an account?</span>   <a href="signup.php">Sign up</a>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>
    
</body>
</html>