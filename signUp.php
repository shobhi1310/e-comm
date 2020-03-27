<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle |Sign Up</title>
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
                    <div>
                        <div class="navbar-header navbar-brand">
                            LifeStyle
                        </div>
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="login.php?m="><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container container_style">
            <form method="post" action="signUp_db.php" class="col-lg-5 col-lg-offset-3">
                <h3><b>Sign Up</b></h3>
                            <div class=form-group>
                          
                                  <input type="text" placeholder="Name" name="name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" class="form-control">
                            </div>
                            <div class="form-group">
                                  
                                  <input type="email" placeholder="Email" name="email" class="form-control">
                                  <?php
                                  echo $_GET['m'];
                                  ?>
                            </div>
                            <div class="form-group">
                                  
                                  <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                  
                                  <input type="text" placeholder="Contact" name="contact" pattern="^[6-9][0-9]{9}$" class="form-control">
                            </div>
                            <div class="form-group">
                                  <input type="text" placeholder="City" name="city" class="form-control">
                            </div>
                            <div class="form-group">
                                  
                                  <input type="text" placeholder="Address" name="address" class="form-control">
                            </div>
                            <div>
                                <input type="submit" value="Submit" class="btn btn-primary btn-block form-control">
                            </div>
            </form>
        </div>
        <footer>
            <!--<div class="container">-->
                <p>Copyright &copy; Lifestyle Store. All Rights Reserved| Contact Us: 6304126471</p>
            <!--</div>-->
        </footer>
    </body>
</html>
