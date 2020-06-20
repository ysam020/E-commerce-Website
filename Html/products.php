<?php
require '../Includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/products.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
</head>
<body>
    <!--Header-->
    <?php include '../Includes/header.php';
    include '../Html/check_if_added.php';
    ?>

    <!--Content-->
    <div class="container">
        <div class="jumbotron jumbotron-custom">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
    </div>

    <div class="container">
        <!--Row1-->
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/5.jpg">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price Rs. 36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=1" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/2.jpg">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price Rs. 36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(2)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=2" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/3.jpg">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price Rs. 50000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(3)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=3" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/4.jpg">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price Rs. 80000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(4)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=4" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Row 2-->
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/9.jpg">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price Rs. 13000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(5)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=5" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/10.jpg">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price Rs. 3000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(6)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=6" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/11.jpg">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price Rs. 8000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(7)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=7" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/12.jpg">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price Rs. 18000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(8)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=8" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Row 3-->
        <div class="row">
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/8.jpg">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price Rs. 800.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(9)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=9" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/6.jpg">
                    <div class="caption">
                        <h3>Luis Phill</h3>
                        <p>Price Rs. 1000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(10)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=10" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/13.jpg">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price Rs. 1500.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(11)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=11" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail">
                    <img src="../Media/14.jpg">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price Rs. 1300.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn btn-primary btn btn-block" type="submit">Buy Now</a>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(12)){ ?>
                                <a href="#" class="btn btn-primary btn btn-block" type="submit" disabled>Add to Cart</a>
                            <?php
                            }
                            else{ ?>
                                <a href="cart_add.php?item_id=12" class="btn btn-primary btn btn-block" type="submit">Add to Cart</a>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Includes/footer.php'; ?>

</body>
</html>