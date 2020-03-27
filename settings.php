<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle</title>
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
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                                <li class="active"><a><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container container_style">
            <form method="post" action="settings_db.php">
                <h3>Change Password</h3>
                <div class="form-group">
                    <input type="password" name="oldpswd" placeholder="Old Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="newpswd" placeholder="New Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="rpswd" placeholder="Re-type New Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Change" class="btn btn-primary">
                </div>
            </form>
            <?php
            $error = $_GET['error'];
            echo "<br><br><b class='red'>" . $error . "</b>";
            ?>
        </div>
        <footer>
            <div class="container">
                <p>Copyright &copy; Lifestyle Store. All Rights Reserved| Contact Us: 6304126471</p>
            </div>
        </footer>
    </body>
</html>
