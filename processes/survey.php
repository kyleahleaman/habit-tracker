<?php
    session_start();
    require_once('dbconfig.php');

    $_SESSION["avatar"] = $_POST['character'];
    $_SESSION["age"] = $_POST['age'];
    $_SESSION["sleep"] = isset($_POST['sleep']);
    $_SESSION["exercise"] = isset($_POST['exercise']);
    $_SESSION["water"] = isset($_POST['water']);
    $_SESSION["screen"] = isset($_POST['screen']);

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //check if in database
    // prepare the SQL message
    $sql = "UPDATE users
        SET avatar = '{$_SESSION["avatar"]}',
        age = '{$_SESSION["age"]}',
        sleep = '{$_SESSION["sleep"]}',
        exercise = '{$_SESSION["exercise"]}',
        screen = '{$_SESSION["screen"]}',
        water = '{$_SESSION["water"]}'
        WHERE username = '{$_SESSION["user"]}';";

    // send this SQL message
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn->close();

    header('location:../index.php?message=Thank you for signing up. Please log in.')

?>