<?php

    session_start();


    $_SESSION["loggedIn"] = "YES";
    $_SESSION["user"] = 'apple';

    header("location:homepage.php");

?>