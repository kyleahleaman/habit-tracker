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
            width: 50vw
        }

        .buttons {
            width: 25vw;
        }

        .stats {
            width: 25vw;
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
            <div>Column 1</div>
            <div class="animal">
                <img src="images/penguin.png">
            </div>
            <div>Column 3</div>
        </div>
        <?php
        include 'footer.php'; ?>
</body>
</html>

