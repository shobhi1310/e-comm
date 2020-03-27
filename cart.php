<?php
include 'common.php';
$id = "";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle |Cart</title>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap-3.3.7/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="extraStyles.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="row">
                <nav class="navbar navbar-fixed-top navbar-inverse">
                    <div class="container">
                        <div class="navbar-header navbar-brand">
                            LifeStyle
                        </div>
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                                <li><a href="settings.php?error="><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container container_style">
            <table class="table table-hover">
                <?php
                $sum = 0;
                $user_id = $_SESSION['user_id'];
                $query = "SELECT items.price, items.id, items.name FROM users_items JOIN items on users_items.product_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to Cart' ";
                $result = mysqli_query($con,$query);
                if (mysqli_num_rows($result)>0){
                ?>
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody><?php
                        while($row = mysqli_fetch_array($result)){
                            $sum += $row['price'];
                            $id .= $row['id']. ",";
                            echo "<tr><td>" .$row['id']. "</td><td>" .$row['name']. "</td><td>" .$row['price']. "</td><td><a href='remove.php?id={$row['id']}'>Remove</a></td></tr>";
                        }
                        $id = rtrim($id,",");
                        echo "<tr><td></td><td><b>Total</b></td><td><b>" .$sum. "</b></td><td></td></tr>";
                        ?>
                    </tbody>
                <?php
                } else {
                    echo "Add items to cart!";
                }
                ?>
            </table>
            <?php echo "<a href='success.php?string_id=" .$id. "' class='btn btn-primary'>Confirm Order</a>" ?>
        </div>
        <div class="jumbotron">
            <div align="center">
                <h4>Continue <a href="products.php">Shopping</a></h4>
            </div>
        </div>
        <footer>
            <div class="container">
                <p>Copyright &copy; Lifestyle Store. All Rights Reserved| Contact Us: 6304126471</p>
            </div>
        </footer>
    </body>
</html>

<?php

?>