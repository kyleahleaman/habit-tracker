<?php
    session_start();
    require_once('../processes/dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['sleep']) && isset($_SESSION['user'])) {
        $sleep_amount = floatval($_GET['sleep']);
        $current_user = $_SESSION['user'];

        $sql = "UPDATE stats SET sleep = sleep + ? WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ds", $sleep_amount, $current_user);
        
        $stmt->execute();
        $stmt->close();
    }

    header("Location: ../homepage.php");
    exit();
?>