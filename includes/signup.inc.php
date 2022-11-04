<?php
//submit sign up info
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    //checking for user erorrs
    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header('location: ../index.php?emptyinput');
        exit();
    }
    if(invalidUid($username) !== false){
        header('location: ../index.php?invalidUid');
        exit();
    }
    if(invalidEmail($email) !== false){
        header('location: ../index.php?invalidEmail');
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header('location: ../index.php?passwordsdontmatch');
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header('location: ../index.php?usernametaken');
        exit();
    }

    createUser($conn,$name,$username,$email,$pwd);

}
else{
   $signUp = header('location: ../index.php?signup');
    exit();
}