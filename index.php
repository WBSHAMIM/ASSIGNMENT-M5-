<?php


session_start();
if(! isset ($_SESSION["email"])){
    header("location: login.php");
}

if($_SESSION["role"] == "admin"){
    header("location: admin.php");
}
elseif($_SESSION["role"] == "manager"){
    header("location: manager.php");
}
elseif($_SESSION["role"] == "user"){
    header("location: user.php");
}

