<?php
    session_start();
    require_once('../processes/dbconfig.php');
    
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_SESSION['user'])) {
        $current_user = $_SESSION['user'];

        $sql = "UPDATE stats SET coins = 0, sleep = 0.00, exercise = 0.00, screen = 0.00, water = 0.00 WHERE username = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $current_user);
        
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();

    header("Location: ../homepage.php");
    exit();
?>
