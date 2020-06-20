<?php
require '../Includes/common.php';
//if (!isset($_SESSION['email'])) {
   // header('location: index.php');
//}
if (!isset($_SESSION["id"])) {
    header('location: index.php');
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/settings.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php'; ?>

    <!--Content-->
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <form class="settings" method="post" action="../Html/settings_script.php">
                <h1>Change Password</h1>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Old Password" name="old_password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="New Password" name="new_password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Re-type New Password" name="retype_password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn btn-block" type="submit">Change</button>
                </div>
            </form>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>

</body>
</html>