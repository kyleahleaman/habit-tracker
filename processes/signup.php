<?php
    session_start();
    require_once('dbconfig.php');

    $_SESSION['user'] = $_POST['username'];
    $pass = $_POST["password"];

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare the SQL messages
    $sql = "INSERT INTO users(username, bestpassword, coins, approved, createdOn)
    Values ('{$_SESSION['user']}', SHA2(CONCAT('salt','{$pass}','pepper'),0), 0, 1, NOW());";

    // send this SQL message
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }catch(mysqli_sql_exception $e){
        $conn->close();
        header('location:../processes/register.php?message=Username is already taken.');
    }

    $sql = "SELECT * from users where username='{$_SESSION['user']}';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all(MYSQLI_ASSOC);
    $id = $row[0]['id'];
    $sql2 = "INSERT INTO stats(id, username, coins, sleep, exercise, water, screen)
    Values ({$id},'{$_SESSION['user']}', 0, 0, 0, 0, 0);";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $sql3 = "INSERT INTO totals(id, username, coins, sleep, exercise, water, screen)
    Values ({$id},'{$_SESSION['user']}', 0, 0, 0, 0, 0);";
    $stmt = $conn->prepare($sql3);
    $stmt->execute();

    $conn->close();
    header('location:../surveyPage.html');
?>