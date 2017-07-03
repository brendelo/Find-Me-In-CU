<?php
    // session_start();
    require 'connection.php';
    if(!isset($_SESSION['user_username'])){
        header("location:adminlogin.php?session=notset");
    }
?>