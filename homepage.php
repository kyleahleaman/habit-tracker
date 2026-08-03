<?php
    session_start();

    if($_SESSION["loggedIn"] == "NO"){
        exit;
    }
    include "navbar.php";
    echo "homepage";
?>