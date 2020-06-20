<?php 
    function check_if_added_to_cart($item_id){
    include '../Includes/common.php';
    $con= mysqli_connect('localhost', 'ysam020', 'F6dzW8iMS710FAlJ', 'store') or die(mysqli_error($con));
    $user_id= $_SESSION["id"];
    $fetch_data= "SELECT * FROM users_items WHERE item_id='$item_id' && user_id ='$user_id' && status='Added to cart'";
    $result= mysqli_query($con, $fetch_data) or die(mysqli_error($con));
    $rows_fetched= mysqli_num_rows($result);
    if($rows_fetched>=1){
        $count=1;
    }
    else{
        $count=0;
    }
    return $count;
    }
    ?>