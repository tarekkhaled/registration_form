<?php
$serverName = 'localhost' ;
$serverUser = 'root' ; 
$serverPwd = '';
$serverDatabase = 'registration';       


$connection = mysqli_connect($serverName,$serverUser,$serverPwd,$serverDatabase);

if ($connection) {
    
} 
else {

    die ("Connection failed: " .mysqli_connect_error());

}
?>