<?php
    session_start();
    require_once('dbconfig.php');

    $_SESSION["avatar"] = $_POST['character'];
    $_SESSION["age"] = $_POST['age'];
    $_SESSION["sleep"] = isset($_POST['sleep']);
    $_SESSION["exercise"] = isset($_POST['exercise']);
    $_SESSION["water"] = isset($_POST['water']);
    $_SESSION["screen"] = isset($_POST['screen']);

    // connect to my database
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare the SQL message
    $sql = "UPDATE users
        SET avatar = '{$_SESSION["avatar"]}',
        age = {$_SESSION["age"]},
        sleep = '{$_SESSION["sleep"]}',
        exercise = '{$_SESSION["exercise"]}',
        screen = '{$_SESSION["screen"]}',
        water = '{$_SESSION["water"]}'
        WHERE username = '{$_SESSION["user"]}';";

    // send this SQL message
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //add habits
    $habits = ['sleep', 'exercise', 'screen', 'water'];

    for($i = 0; $i < 4; $i++){
        $sql = "SELECT * from users where username = '{$_SESSION["user"]}' AND bestpassword = '{$_SESSION["pass"]}';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC);
        $_SESSION["id"] = $row[0]['id'];

        if($row[0][$habits[$i]] == 1){
            $sql2 = "SELECT * from '{$habits[$i]}' where username = '{$_SESSION["user"]}' AND bestpassword = '{$_SESSION["pass"]}';";
            $stmt = $conn->prepare($sql2);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                $sql3 = "UPDATE '{$habits[$i]}'
                SET age = {$_SESSION["age"]},
                WHERE id = {$_SESSION["id"]};";
                $stmt = $conn->prepare($sql3);
                $stmt->execute();
            }else{
                $sql3 = "INSERT INTO '{$habits[$i]}' (id, age)
                VALUES ({$_SESSION["id"]}, {$_SESSION["age"]});";
                $stmt = $conn->prepare($sql3);
                $stmt->execute();
            }
        }else{
            $sql2 = "SELECT * from '{$habits[$i]}' where username = '{$_SESSION["user"]}' AND bestpassword = '{$_SESSION["pass"]}';";
            $stmt = $conn->prepare($sql2);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                $sql3 = "DELETE FROM '{$habits[$i]}' WHERE id={$_SESSION["id"]};";
                $stmt = $conn->prepare($sql3);
                $stmt->execute();
            }
        }
    }

    $conn->close();
    header('location:../index.php?message=Please log in.');
?>