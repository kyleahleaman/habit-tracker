<?php
session_start();
    $_SESSION['loggedIn'] = '';
    $_SESSION['user'] = '';
    $_SESSION['coins'] = 0;
    header('location:../index.php')
?>