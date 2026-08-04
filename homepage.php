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
            padding: 5px;
            margin-left: 40px;
            height: 425px;
            overflow: auto;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
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
                    <h4>Exercise</h4>
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
</body>
</html>

