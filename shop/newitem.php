<?php
    session_start();
    require_once('../processes/dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['item']) && isset($_SESSION['user'])) {
        $item = $_GET['item'];
        $current_user = $_SESSION['user'];

        $sql = "UPDATE users SET item = ? WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $item, $current_user);
        
        $stmt->execute();
        $stmt->close();
    }

    header("Location: ../homepage.php");
    exit();
?>