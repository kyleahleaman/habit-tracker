<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home: Habit Tracker</title>
    <style>
        .flex-container {
            display: flex; /* Aligns children horizontally */
            gap: 50px; /* Optional: Adds spacing between columns */
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
            background-color: white;
            border-radius: 15px;
            padding: 5px;
            margin-right: 40px;
            height: 425px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
        }

        .buttonsdiv {
            background-color: white;
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

        /* h4 {
            margin-top: 10px;
            margin-bottom: 10px;
        } */

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
                    <div class="bsections">
                        <h4>Sleep</h4>
                        <button onclick = "testSleep(event)">Add to today's stats!</button>
                    </div>   

                    <div class="bsections">
                        <h4>Exercise</h4>
                        <form>
                            <input type = "text" name = "ehours" id = "ehours">
                            <button onclick = "addExercise(event)">Add to today's stats!</button>
                        </form>
                    </div>

                    <div class="bsections">
                        <h4>Water</h4>
                        <button onclick = "addWater(event)">Add to today's stats!</button>
                    </div>

                    <div class="bsections">
                        <h4>Screen Time</h4>
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
                alert('sleep');
                window.location.reload();
            }

            function addExercise() {
                alert('exercise');
                window.location.reload();
            }

            function addWater() {
                alert('water');
                window.location.reload();
            }

            function addScreenTime() {
                alert('screen time');
                window.location.reload();
            }
        </script>
</body>
</html>

