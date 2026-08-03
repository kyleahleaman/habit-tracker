<?php
    session_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // load db config
    require_once('dbconfig.php');

    // connect to the database
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // best sql to extra protect the data
    $sql = "SELECT * from users where username = ? and bestpassword = SHA2(CONCAT('salt', ?, 'pepper'), 0);";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$user, $pass]);
    $result = $stmt->get_result();
    // print_r($result);
    // exit;

    //Adjust variables based on survey questions
    if ($result->num_rows > 0){
        $row = $result->fetch_all(MYSQLI_ASSOC);
        // print_r($row);
        // exit;
        $_SESSION['loggedIn'] = 'YES';
        $_SESSION['username'] = $row[0]['username'];
        $_SESSION['coins'] = $row[0]['coins'];
        $conn->close();
        header('location:../homepage.php');
    }else{
        $_SESSION['loggedIn'] = 'NO';
        $_SESSION['username'] = 'hacker';
        $_SESSION['coins'] = 0;
        $conn->close();
        header('location:../index.php?message=Login failed.');
    }
?>