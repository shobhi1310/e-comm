<?php

function cart_checker($product_id){
    // include 'common.php';
    $user_id = $_SESSION['user_id'];
    // require("common.php");
    $con = mysqli_connect("localhost","root","","store");
    $query = "SELECT * FROM users_items WHERE product_id = '" .$product_id. "' AND user_id = '" .$user_id. "' AND status = 'Added to Cart' ";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)>=1){
        return 1;
    }else{
        return 0;
    }
}

?>