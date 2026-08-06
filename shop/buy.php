<?php
    session_start();
    require_once('../processes/dbconfig.php');
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['item']) && isset($_SESSION['user'])) {
        if($_SESSION["coins"] >= 5){
            $item = $_GET['item'];
            $current_user = $_SESSION['user'];

            $sql = "UPDATE users SET item = ? WHERE username = ?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $item, $current_user);
            $stmt->execute();

            $_SESSION["coins"] = $_SESSION["coins"] - 5;
            $sql2 = "UPDATE users SET coins = {$_SESSION["coins"]} WHERE username = '{$_SESSION['user']}';";

            $stmt = $conn->prepare($sql2);
            $stmt->execute();
            $conn->close();
        }else{
            echo "<script>alert('This is an alert message!');</script>";
        }
    }

    header("Location: ../homepage.php");
    exit();
?>