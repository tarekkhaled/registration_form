<?php 
session_start();
if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "you must log in first" ;
    header('location: index.php');
    $href = "index.php";
    $log = "login";
} 
else {
    $href = "?logout" ;
    $log = "logout";
}

if (isset($_GET['logout'])) {

    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>

<!-- Database -->
<?php require "includes/db.inc.php"?>


<!-- Place to header.php -->
<?php require "includes/header.php" ?>
<body>
    <header id="header-sec">
        <div class="overlay-header">
            <!-- navigation bar -->
            <?php require "includes/navbar.php" ?>
            
            <div class="profile-header">
                <div class="container">
                    <div class="row profile-row">
                        <div class="col-md-3">
                            <div class="img-profile">
                                <img src="images/profile.png" alt="profile">
                            </div>     
                        </div>
                        <div class="col-md-9 m-auto">
                            <div class="info-profile">
                                <div class="profile-item">
                                    <div class="headers-profile">
                                        <h3>name :</h3>
                                    </div>    
                                    <div class="info-profile">
                                        <input type="text" name="show-name" value=<?php echo $_SESSION['name']?> >
                                    </div>                               
                                </div>
                                <div class="profile-item">
                                    <div class="headers-profile">
                                        <h3>email :</h3>
                                    </div>    
                                    <div class="info-profile">
                                        <input type="text"  name="show-email" value=<?php  echo $_SESSION['mail'] ?>> 
                                    </div>                               
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

</body>


<!-- Place to footer.php
<?php require "includes/footer.php" ?>