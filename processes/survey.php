<?php
    require_once('dbconfig.php');
    include_once('signup.php');

    $avatar = $_POST['avatar'];
    $age = $_POST['age'];
    $sleep = $_POST['sleep'];
    $exercise = $_POST['exercise'];
    $water = $_POST['water'];
    $screen = $_POST['screen'];

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare the SQL message
    $sql = "UPDATE users
        SET avater = $avater,
        age = $age,
        sleep = $sleep,
        exercise = $exercise,
        screen = $screen,
        water = $water
        WHERE username = '{$user}';";

    // send this SQL message
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn->close();

    header('../index.php?message=Thank you for signing up. Please log in.')

?>