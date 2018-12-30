<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>INTCORE | Task</title>

    <link rel="icon" href="images/favicon.png">
    
    <!-- ______________libraries_____________ --> 

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Aleo|Raleway" rel="stylesheet">

    <!-- Bootstrap --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- our Css file --> 
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <header id="header-sec">
        <!-- Place to include navbar.php -->
        <?php require "includes/navbar.php"?> 

        <div class="overlay-header">
            <!-- Content for this page : form to login   -->
            <form action="profile.php" method="POST" id="form-sec">
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











<!-- ___________Scripts__________ -->

<!--Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!--our script file -->
<script src="scripts/bundle.js"></script>
</body>
</html>