<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: Habit Tracker</title>
    <style>
        .flex-container {
            display: flex;
            gap: 50px; 
        }
        
        .stats {
            width: 50vw;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin-top: none;
        }

        .statsdiv {
            background-color: #91c7b1;
            border-radius: 15px;
            padding: 10px;
            height: 375px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
            width: 400px;
            display: flex;
            flex-direction: column;
            margin-top: none;
        }

        .animal {
            width: 50vw;
            margin: 22px;
        }

        h2 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include 'navbar.php'; 


        if($_SESSION["loggedIn"] == "NO"){
            exit;
        }

        require_once('processes/dbconfig.php');
    ?>
              
    <div class="flex-container">
        <?php 
            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM totals where username='{$_SESSION['user']}';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
        ?> 

        <div class="stats">
            <h2>Hi, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
            <br><br>
            <div class="statsdiv">
                <h4>In total, you've...</4>
                <?php
                    for ($i = 0; $i < count($rows); $i++){
                        $coinsS = $rows[$i]['coins'];
                        $ageS = $rows[$i]['age'];
                        $sleepS = $rows[$i]['sleep'];
                        $exerciseS = $rows[$i]['exercise'];
                        $waterS = $rows[$i]['water'];
                        $screenS = $rows[$i]['screen'];
                    }
                ?>

                <div class="bsections">
                    <h4> - earned <?php echo $coinsS; ?> coins!</h4>
                </div>

                <div class="bsections">
                    <h4> - slept <?php echo $sleepS; ?> hours!</h4>
                </div>

                <div class="bsections">
                    <h4> - exercised <?php echo $exerciseS; ?> hours!</h4>
                </div>

                <div class="bsections">
                    <h4> - had <?php echo $screenS; ?> hours of screen time!</h4>
                </div>
                <h4>Keep making progress, you can do it!</4>
            </div>
        </div>

        <div class="animal">
            <img src="images/penguin.png" class="penguin"> <!--  PLACEHOLDER -->
        </div>
    </div>

        <?php $conn->close(); include 'footer.php'; ?>
</body>
</html>