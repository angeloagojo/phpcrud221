<?php 
    session_start();
    $_SESSION['user_name'] = '';
    session_unset();
    header('location:login.php');