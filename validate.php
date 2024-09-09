<?php
include_once 'connect.php';
if($_POST['username'] =='salma jafari' && $_POST['password'] =='salmajr##'){
    header("location:admin_homepage.html");
}else{
    echo ("wrong password or username");
}
?>