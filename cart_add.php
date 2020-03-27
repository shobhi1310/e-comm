<?php
include 'common.php';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query_stmt = "INSERT INTO users_items(user_id, product_id, status) VALUES('" .$user_id. "', '" .$item_id. "', 'Added to Cart')";
    mysqli_query($con,$query_stmt) or die(mysqli_error($con));
    header('location: products.php');
}
?>