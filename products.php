<?php
include 'common.php';
include 'cart_checker.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle |Products</title>
        <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap-3.3.7/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="extraStyles.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="navbar navbar-fixed-top navbar-inverse">
                <nav class="container">
                    <!--<div class="container">-->
                        <div class="navbar-header navbar-brand">
                            LifeStyle
                        </div>
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                                <li><a href="settings.php?error="><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            </ul>
                        </div>
                    <!--</div>-->
                </nav>
        </div>
        <div class="container_style container-fluid">
            <div class="jumbotron">
                <h1>Welcome to LifeStyle Stores</h1>
                <p>We have the best brands for watches, shirts and cameras.</p>
            </div>
            <div class="container col-lg-offset-2">
                <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/canon DSLR.jpg" alt="canon DSLR">
                        <div class="caption">
                            <h4>Cannon DSLR EOS</h4>
                            <p>Price: <del>50,0000</del> 20,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(1)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=1" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/canon_powershot_sx540.jpg" alt="canon DSLR" width="192">
                        <div class="caption">
                            <h4>Canon Powershot SX540</h4>
                            <p>Price: 30,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(2)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=2" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/nikon-coolpix-p530-rs-16000.jpg" alt="canon DSLR" width="220">
                        <div class="caption">
                            <h4>Nikon Coolpix P530</h4>
                            <p>Price: 16,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(3)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=3" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/raymond.jpg" alt="Raymond" width="174">
                        <div class="caption">
                            <h4>Raymond Classics</h4>
                            <p>Price: <del>5,000</del> 3,500</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(4)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=4" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/allen_solly.jpg" alt="Allen Solly">
                        <div class="caption">
                            <h4>Allen Solly</h4>
                            <p>Price: <del>5,000</del> 3,500</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(5)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=5" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/armani_drshirt_212_a.jpg" alt="armani shirt" width="174">
                        <div class="caption">
                            <h4>Vintage Armani</h4>
                            <p>Price: 2,500</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(6)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=6" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="Tissot Classic">
                        <div class="caption">
                            <h4>Tissot classic X edition</h4>
                            <p>Price: 30,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(7)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=7" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="Adam Kimmel" width="222">
                        <div class="caption">
                            <h4>Adam Kimmel(designer) watches</h4>
                            <p>Price: <del>55,0000</del> 50,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(8)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=8" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="Diamond Dier">
                        <div class="caption">
                            <h4>Diamond Diar</h4>
                            <p>Price: 50,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(9)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/woodland.jpg" alt="woodland" width="235">
                        <div class="caption">
                            <h4>Woodland</h4>
                            <p>Price: <del>5,000</del> 3,500</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(10)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=10" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/hush_puppies.jpg" alt="hush puppies ">
                        <div class="caption">
                            <h4>Hush Puppies</h4>
                            <p>Price: 3,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(11)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=11" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sneakers.jpg" alt="sneakers" width="222">
                        <div class="caption">
                            <h4>Sneazy Sneakers</h4>
                            <p>Price: 2,000</p>
                        </div>
                        <div>
                            <?php
                            if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php?m=" class="btn btn-primary btn-block">Buy Now</a>
                            <?php
                            } else {
                                if(cart_checker(12)){
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Already Added</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=12" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        
        </div>
        <footer>
            <!--<div class="container">-->
                <p>Copyright &copy; Lifestyle Store. All Rights Reserved| Contact Us: 6304126471</p>
            <!--</div>-->
        </footer>
    </body>
</html>
