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
            margin-top: auto;
        }
    </style>
</head>

<script>
    function buy (event) {
        event.preventDefault();
        console.log(event);
        var s = event.srcElement.id;
        console.log(s);
        alert ('Bought! Thank you for doing business with us!')
    }
</script>

<body>
    <?php 
        include '../navbar.php';
        include 'food.php';
        echo '<br>';
        include 'hats.php';
        echo '<br>';
        include '../footer.php';
    ?>
</body>
</html>