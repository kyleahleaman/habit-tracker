<?php
    session_start();

    if($_SESSION["loggedIn"] == "NO"){
        exit;
    }

    include "navbar.php";
    include 'footer.php';
    
?>