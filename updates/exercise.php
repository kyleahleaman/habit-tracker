<?php
    session_start();
    require_once('../processes/dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['exercise']) && isset($_SESSION['user'])) {
        $exercise_amount = floatval($_GET['exercise']);
        $current_user = $_SESSION['user'];

        $sql = "UPDATE stats SET exercise = exercise + ? WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ds", $exercise_amount, $current_user);
        
        $stmt->execute();
        $stmt->close();

        $sql2 = "UPDATE totals SET exercise = exercise + ? WHERE username = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("ds", $exercise_amount, $current_user);
        
        $stmt2->execute();
        $stmt2->close();
    }

    header("Location: ../homepage.php");
    exit();
?>