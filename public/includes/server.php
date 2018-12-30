<?php

// start session to make all pages remember the user
session_start ();

$href = "index.php" ;
$log = "login";



// include database 
include "db.inc.php";


// initialzing variables 

$username = "";
$email = "" ;
$errors = array () ;


// Sign up part of code will be executed behind the sign up button clicked  

if(isset($_POST['signup_user'])) {
    
    // recieve all inputs from the form 
    $fullName = mysqli_real_escape_string($connection,$_POST['name']);
    $userName = mysqli_real_escape_string($connection,$_POST['username']);
    $userMail = mysqli_real_escape_string($connection,$_POST['email']);
    $userPwd1 = mysqli_real_escape_string($connection,$_POST['password']);
    $userPwd2 = mysqli_real_escape_string($connection,$_POST['confirm-password']);

    //form validation : ensure that the form is correctly filled ..

    if(empty($fullName)) {
        array_push($errors,"Fullname is requried field");
    }
    if(empty($userName)) {
        array_push($errors,"Username is requried field");
    }

    if(empty($userMail)) {
        array_push($errors,"Email is requried field");
    }
    if(empty($userPwd1)) {
        array_push($errors,"Password is requried field");
    }

    if($userPwd1 != $userPwd2) {
        array_push($errors,"The Passwords do not matct");
    }
    if(!filter_var ($userMail,FILTER_VALIDATE_EMAIL)) {
        array_push($errors , "Invaild Email ");
    }
    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        array_push($errors , "username contains characters and numbers only");
    }

    // check the database to make sure a user doesn't exists  already 

    $check_query = "SELECT * FROM users WHERE user_name='$userName' OR user_mail='$userMail' LIMIT 1";
    $result = mysqli_query($connection ,$check_query);
    $users = mysqli_fetch_assoc ($result); 

    if ($users) { // this mean we found rows
        if ($users['user_name']=== $userName){
            array_push($errors,"Username already exists");
        }
        if ($users['user_mail']=== $userMail) {
            array_push($errors,"Email already exists");
        }
    }

    // Check if no errors you can now go to your new profile
    if (count($errors) == 0) {
        $password = md5($userPwd1) ;

        $query = "INSERT INTO users (user_name , user_mail , user_password , name )
            VALUES ('$userName' , '$userMail' , '$password' , '$userName')" ;
        
        mysqli_query($connection , $query) ;
        $_SESSION['username'] = $username ;
        $_SESSION['success'] = "you are now logged in ";
        $_SESSION['name'] = $fullName ;
        $_SESSION['mail'] = $userMail ;
        header('location: profile.php');
    }

}


//Login part of code will be executed behind the sign up button clicked 
if (isset($_POST['login_user'])) {
    $username = mysqli_escape_string ($connection , $_POST['username']);
    $password = mysqli_escape_string ($connection , $_POST['password']);

    if (empty($username)) {
        array_push($errors,"Username is required");
    }
    
    if(empty($password)) {
        array_push($errors,"Password is required");
    }

    if(count($errors) == 0) {
        $password = md5 ($password) ;
        $query = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";
        $results = mysqli_query($connection,$query);
        $onRes = mysqli_fetch_assoc($results);
        


        if(mysqli_num_rows($results) ==1) {
            $_SESSION['username'] = $username ;
            $_SESSION['mail'] =  $onRes['user_mail'];
            $_SESSION['name'] = $onRes['name'];
            $_SESSION['success'] = "you are now logged in ";
            header('location: profile.php');
        } else {
            array_push($errors,"Wrong username / password combination");
        }

    }

}







?>