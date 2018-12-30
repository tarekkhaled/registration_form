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
                <form action="signup.php" method="POST" class="form-sec" id="signup">
                    <div class="container form-container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class='signup-form'>   
                                    <!-- part of inputs -->

                                    <div class="item-signup">
                                        <div class="icon-item">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input class="input-item name-inp" type="text" name="name" placeholder="fullname..">
                                    </div>          
                                                              
                                    <div class="item-signup">
                                        <div class="icon-item">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input class="input-item username-inp" type="text" name="username" placeholder="username..">
                                    </div>

                                    <div class="item-signup">
                                        <div class="icon-item">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input class="input-item email-inp" type="text" name="email" placeholder="e-mail..">
                                    </div>

                                    <div class="item-signup">
                                        <div class="icon-item">
                                            <i class="fa fa-unlock-alt"></i>
                                        </div>
                                        <input class="input-item pwd-input" type="password" name="password" placeholder="password..">
                                    </div>

                                    <div class="item-signup">
                                        <div class="icon-item">
                                            <i class="fa fa-unlock-alt"></i>
                                        </div>
                                        <input class="input-item pwd-confirm--input" type="password" name="confirm-password" placeholder="confirm password..">
                                    </div>

                                    <p clas="buttons-form">
                                        Already have an account? | <a href="index.php">login</a>
                                    </p>


                                    <div class="item-submit">
                                        <input type="submit" value="Signup" name="signup_user">
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>


<!-- Place to footer section -->
<?php require "includes/footer.php"?>