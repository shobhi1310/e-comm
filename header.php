<nav class="navbar navbar-fixed-top navbar-inverse">
                    <div class="container">
                        <div class="navbar-header navbar-brand">
                            LifeStyle
                        </div>
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                <?php
                                if(isset($_SESSION['email'])){
                                ?>
                                <li class="active"><a>Home</a></li>
                                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                                <li><a href="settings.html"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="signUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
</nav>