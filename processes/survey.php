<?php
    session_start();
    require_once('dbconfig.php');

    $avatar = $_POST['character'];
    $age = $_POST['age'];
    $sleep = isset($_POST['sleep']);
    $exercise = isset($_POST['exercise']);
    $water = isset($_POST['water']);
    $screen = isset($_POST['screen']);

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare the SQL message
    $sql = "UPDATE users
        SET avater = '{$avatar}',
        age = '{$age}',
        sleep = '{$sleep}',
        exercise = '{$exercise}',
        screen = '{$screen}',
        water = '{$water}'
        WHERE username = '{$_SESSION["user"]}';";

    // send this SQL message
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn->close();

    header('location:../index.php?message=Thank you for signing up. Please log in.')

?>