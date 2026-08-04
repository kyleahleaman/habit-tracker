<?php

    include "navbar.php";
    if($_SESSION["loggedIn"] == "NO"){
        exit;
    }
    include 'footer.php';
    
?>