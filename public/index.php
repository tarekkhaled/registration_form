<!-- Database -->
<?php require "includes/server.php"?>

<!-- Place to header section -->
<?php require "includes/header.php" ?>

<body>

    <header id="header-sec">
        <!-- Place to include navbar.php -->
        <?php require "includes/navbar.php"?> 

        <div class="overlay-header">
              <!-- Section for errors that will be back from server -->
              <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- if there are errors -->
                            <?php include "includes/errors.php" ?>
                        </div>
                    </div>
                </div>
            <!-- Content for this page : form to login   -->
            <form action="index.php" method="POST" class="form-sec" id="login">
                <div class="container form-container">
                    <div class="row">
                        <div class="col-md-3 ">
                            <div class='login-form'>
                                <!-- part of image -->
                                <div class="img-user">
                                    <img src="images/icon.png" alt="user-icon">
                                </div>

                                <!-- part of inputs -->
                                <div class="item-login">
                                    <div class="icon-item">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input class="input-item pwd-input" type="text" name="username" placeholder="username..">
                                </div>

                                <div class="item-login">
                                    <div class="icon-item">
                                        <i class="fa fa-unlock-alt"></i>
                                    </div>
                                    <input class="input-item pwd-input" type="password" name="password" placeholder="password..">
                                </div>

                                <label class="buttons-form">
                                    <input type="checkbox" name="remember-me">  remember me
                                </label>

                                <p clas="buttons-form">
                                    Don't have an account? | <a href="signup.php">Signup</a>
                                </p>

                                <div class="item-submit">
                                    <input class="sub" type="submit" value="login" name="login_user">
                                </div>
                        
                        
                            </div>
                        </div>
                    </div>
                </div>          
            </form>
        </div>

    </header>

   

<!-- Place to include footer.php -->
<?php require "includes/footer.php" ?>











