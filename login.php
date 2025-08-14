<?php

$uname=$_GET['username'];
$upass=$_GET['password'];


session_start();

$_SESSION["login_status"]=false;

if($uname=="acme" && $upass=="intern"){

    $_SESSION["login_status"]=true;
    echo "<h1>Login sucsecfull</h1>";
    // header("location:htts://www.google.com")

    header("location:home.php");
}

else{

    echo "<h1>invalid credentials</h1>";
}

?>