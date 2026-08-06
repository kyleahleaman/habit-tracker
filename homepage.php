<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home: Habit Tracker</title>
    <style>
        button {
            background-color: white;
            border: none;
        }

        .flex-container {
            display: flex;
            gap: 50px; 
        }
        .animal {
            width: 50vw;
            height: 82vh;
        }

        .buttons {
            width: 25vw;
           
        }

        .stats {
            width: 25vw;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin-top: none;
        }

        .penguin {
            height: 97%;
            margin-top: 10px;
        }

        .statsdiv {
            background-color: #91c7b1;
            border-radius: 15px;
            padding: 10px;
            margin-right: 60px;
            height: 375px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
            width: 250px;
            display: flex;
            flex-direction: column;
            margin-top: none;
        }

        .buttonsdiv {
            background-color: #91c7b1;
            border-radius: 15px;
            padding: 10px;
            margin-left: 40px;
            height: 425px;
            overflow: auto;
            width: 200px;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
        }

        .buttonsdiv button {
            border-radius: 10px;
            margin: 5px;
            padding: 5px;
            cursor: pointer;
        }

        h4 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .buttonsdiv input[type=number] {
            width: 40px;
        }

        h3 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        /* .reset-button button {
            border-radius: 10px;
            margin: 5px;
            padding: 8px;
            margin: auto;
            background-color: #91c7b1;
            align-items: center;
            width: 100%;
        }

        .reset-button {
            margin-top: 15px;
            align-items: center;
            justify-content: center; 
            margin-right: 40px;
            width: 250px;
            border-radius: 15px;
            background-color: #91c7b1;
        } */

        .reset-button {
            margin-top: 10px;
            margin-right: 60px; /* Changed from 40px to 60px to match statsdiv */
            width: 265px;       /* Identical width */
            border-radius: 15px; /* Identical border radius */
            background-color: #91c7b1;
            display: flex;       /* Centers the button inside */
            justify-content: center;
            align-items: center;
            padding: 5px 0;    /* Adds vertical height to the container */
        }

        .reset-button button {
            border: none;
            background: transparent;
            font-size: 1.2rem;   /* Makes the text bigger */
            font-weight: bold;   /* Makes it stand out */
            cursor: pointer;
            width: 100%;         /* Spans full width of the container */
            padding: 2px;       /* Adds clickable padding space */
            text-align: center;  /* Centers the text */
        }

    </style>
</head>
<body>
    <?php
        session_start();

        if($_SESSION["loggedIn"] == "NO"){
            exit;
        }

        include "navbar.php";
    ?>

        <div class="flex-container">
            <div class="buttons">
                <br><br><br>
                <div class="buttonsdiv">
                    <h3>Input your stats here!</h3>
                    <div class="bsections">
                        <h4>Sleep</h4>
                        <input type = "number" name = "shours" id = "shours" max="24" min="0">
                        <span>hours</span><br>
                        <button onclick = "testSleep(event)">Add to today's stats!</button>
                    </div>   

                    <div class="bsections">
                        <h4>Exercise</h4>
                        <form>
                            <input type = "number" name = "ehours" id = "ehours" max="10" min="0">
                            <span>hours</span><br>
                            <button onclick = "addExercise(event)">Add to today's stats!</button>
                        </form>
                    </div>

                    <div class="bsections">
                        <h4>Water</h4>
                        <input type = "number" name = "wounces" id = "wounces" max="99" min="0">
                        <span>ounces</span><br>
                        <button onclick = "addWater(event)">Add to today's stats!</button>
                    </div>

                    <div class="bsections">
                        <h4>Screen Time</h4>
                        <input type = "number" name = "thours" id = "thours" max="24" min="0">
                        <span>hours</span><br>
                        <button onclick = "addScreenTime(event)">Add to today's stats!</button>
                    </div>
                </div>
            </div>

            <div class="animal">
                <img src="images/penguin.png" class="penguin"> <!--  PLACEHOLDER -->
            </div>


            <?php 
                require_once('processes/dbconfig.php');
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM stats where username='{$_SESSION['user']}';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();

                $rows = $result->fetch_all(MYSQLI_ASSOC);
            ?> 

            <div class="stats">
                <br><br>
                <div class="statsdiv">
                    <h3>Today you...</h3>
                            <?php
                                for ($i = 0; $i < count($rows); $i++){
                                    $coinsS = $rows[$i]['coins'];
                                    $ageS = $rows[$i]['age'];
                                    $sleepS = $rows[$i]['sleep'];
                                    $exerciseS = $rows[$i]['exercise'];
                                    $waterS = $rows[$i]['water'];
                                    $screenS = $rows[$i]['screen'];
                                }

                                if ($ageS < 12){
                                    $sugSleep = 9;
                                    $sugEx = 1;
                                    $sugO = 32;
                                    $sugS = 1;
                                } else if ($ageS < 18) {
                                    $sugSleep = 8;
                                    $sugEx = 1;
                                    $sugO = 64;
                                    $sugS = 2;
                                }else{
                                    $sugSleep = 8;
                                    $sugEx = 1.25;
                                    $sugO = 90;
                                    $sugS = 3;
                                }
                               

                            ?>

                        <div class="bsections">
                            <h4> - have <?php echo $coinsS; ?> coins!</h4>
                        </div>

                        <div class="bsections">
                            <h4> - slept <?php echo $sleepS; ?> out of <?php echo $sugSleep; ?> recommended hours!</h4>
                        </div>

                        <div class="bsections">
                            <h4> - exercised <?php echo $exerciseS; ?> out of <?php echo $sugEx; ?> recommended hours!</h4>
                        </div>

                        <div class="bsections">
                            <h4> - drank <?php echo $waterS; ?> out of <?php echo $sugO; ?> recommended ounces!</h4>
                        </div>

                        <div class="bsections">
                            <h4> - had <?php echo $screenS; ?> out of <?php echo $sugS; ?> recommended hours of screen time!</h4>
                        </div>
                </div>

                <div class="reset-button">
                    <button onclick = "resetDay(event)">Reset Day!</button></button>
                </div>
            </div>
        </div>

        <?php $conn->close(); include 'footer.php'; ?>

        <script>
            
            function testSleep() {
                event.preventDefault();
                let sleep = document.getElementById("shours").value;
                alert(`Added ${sleep} hours to your stats!`);

                window.location.href = "updates/sleep.php?sleep=" + sleep;
            }

            function addExercise() {
                event.preventDefault();
                let exercise = document.getElementById("ehours").value;
                alert(`Added ${exercise} hours to your stats!`);

                window.location.href = "updates/exercise.php?exercise=" + exercise;
            }

            function addWater() {
                event.preventDefault();
                let water = document.getElementById("wounces").value;
                alert(`Added ${water} ounces to your stats!`);

                window.location.href = "updates/water.php?water=" + water;
            }

            function addScreenTime() {
                event.preventDefault();
                let screen = document.getElementById("thours").value;
                alert(`Added ${screen} hours to your stats!`);

                window.location.href = "updates/screen.php?screen=" + screen;
            }

            function resetDay() {
                event.preventDefault();
                alert("It's a new day! ☀️ Keep up with your habits, you can do it!")
                window.location.href = "updates/reset.php?";
            }
        </script>
</body>
</html>