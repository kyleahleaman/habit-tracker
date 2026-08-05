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
        }

        .penguin {
            height: 97%;
            margin-top: 10px;
        }

        .statsdiv {
            background-color: #91c7b1;
            border-radius: 15px;
            padding: 5px;
            margin-right: 40px;
            height: 425px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
        }

        .buttonsdiv {
            background-color: #91c7b1;
            border-radius: 15px;
            padding: 10px;
            margin-left: 40px;
            height: 425px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
        }

        .buttonsdiv button {
            border-radius: 10px;
            margin: 5px;
            padding: 5px;
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

            <div class="stats">
                <br><br><br>
                <div class="statsdiv">
                    <h4>Today you...</4>
                        <!-- use the user id
                             sql to get into sleep table (- slept ... hours) and if 0, then :(
                             sql to get into exercise table (- exercised ... hours ) anf if 0, then :(
                             and continue
                             refresh button that forces it to update -->
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

        <script>
            
            function testSleep() {
                event.preventDefault();
                let sleep = document.getElementById("shours").value;
                alert(`Added ${sleep} hours to your stats!`);
                window.location.reload();
            }

            function addExercise() {
                event.preventDefault();
                let exercise = document.getElementById("ehours").value;
                alert(`Added ${exercise} hours to your stats!`);
                window.location.reload();
            }

            function addWater() {
                event.preventDefault();
                let water = document.getElementById("wounces").value;
                alert(`Added ${water} ounces to your stats!`);
                window.location.reload();
            }

            function addScreenTime() {
                event.preventDefault();
                let screen = document.getElementById("thours").value;
                alert(`Added ${screen} hours to your stats!`);
                window.location.reload();
            }
        </script>
</body>
</html>