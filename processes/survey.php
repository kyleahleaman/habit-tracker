<?php
    session_start();
    require_once('dbconfig.php');

    $_SESSION["avatar"] = $_POST['character'];
    $_SESSION["age"] = $_POST['age'];

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare the SQL messages
    $sql = "UPDATE users
        SET avatar = '{$_SESSION["avatar"]}', age = {$_SESSION["age"]}
        WHERE username = '{$_SESSION["user"]}';";

    $sql2 = "UPDATE stats
        SET age = {$_SESSION["age"]}
        WHERE username = '{$_SESSION["user"]}';";
    
    $sql3 = "UPDATE totals
        SET age = {$_SESSION["age"]}
        WHERE username = '{$_SESSION["user"]}';";

    // send SQL messages
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt = $conn->prepare($sql2);
    $stmt->execute();

    $stmt = $conn->prepare($sql3);
    $stmt->execute();

    $conn->close();
    header('location:../index.php?message=Please log in.');
?>