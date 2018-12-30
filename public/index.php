<!-- Place to header section -->
<?php require "includes/header.php" ?>

<body>

    <header id="header-sec">
        <!-- Place to include navbar.php -->
        <?php require "includes/navbar.php"?> 

        <div class="overlay-header">
            <!-- Content for this page : form to login   -->
            <form action="profile.php" method="POST" class="form-sec">
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

                                <div class="item-submit">
                                    <input type="submit" value="login">
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











