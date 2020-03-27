<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>LifeStyle |Log In</title>
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="signUp.php?m="><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li class="active"><a><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container container_style panel panel-primary ">
            <div class="panel-heading">We are there for you!</div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form class="container-fluid" method="post" action="login_db.php">
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" placeholder="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" placeholder="password" name="password">
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                    <div>
                        <?php
                        $m = $_GET['m'];
                        echo $m;
                        ?>
                    </div>
                </form>
            </div>
            <div class="panel-footer">Don't have an account? <a href="signUp.php?m=">Register.</a></div>
        </div>
        <footer>
            <div>
                <p>Copyright &copy; Lifestyle Store. All Rights Reserved| Contact Us: 6304126471</p>
            </div>
        </footer>
    </body>
</html>
