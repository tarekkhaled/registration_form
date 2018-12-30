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
                                        <input type="text" name="show-name">
                                    </div>                               
                                </div>
                                <div class="profile-item">
                                    <div class="headers-profile">
                                        <h3>email :</h3>
                                    </div>    
                                    <div class="info-profile">
                                        <input type="text"  name="show-email">
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