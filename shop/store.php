<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <style>
        .store {
            background-color: white;
            width: 90%;
            border: none;
            border-radius: 10px;
            padding: 5px;
            margin-left: 10px;
            margin-top: auto;
        }
    </style>
</head>

<script>
    function buy (event) {
        event.preventDefault();
        var s = event.srcElement.id;
        alert ('Bought! Great job earning yourself a treat!')
        window.location.href = "buy.php?item=" + s;
    }
</script>

<body>

    <?php session_start(); ?>

    <?php 
        include '../navbar.php';
        include 'food.php';
        // echo '<br>';
        // include 'hats.php';
        echo '<br>';
        echo '<br>';
        echo '<p></p>';
        echo '<p></p>';
    include '../footer.php';
    ?>
</body>
</html>