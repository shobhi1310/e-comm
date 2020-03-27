<?php
include 'common.php';
$user_id = $_SESSION['user_id'];
$item_id_string = $_GET['string_id'];

$query = "UPDATE users_items SET status='confirmed' WHERE user_id='" .$user_id. "' AND product_id IN (" .$item_id_string. ") AND status='Added to Cart' ";
mysqli_query($con,$query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success | Life Style Store</title>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap-3.3.7/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="extraStyles.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="jumbotron" align="center">
                    <h3>Your order is confirmed. Thank you for shopping with us.</h3></hr>
                    <p><a href="products.php">Click here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
    </body>
</html>