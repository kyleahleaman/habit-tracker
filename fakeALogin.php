<?php

session_start();


$_SESSION["loggedIn"] = "YES";

header("location:homepage.php");
?>