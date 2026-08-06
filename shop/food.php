
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hat Store</title>
    <style>
        body{
            background-color:#fbfffd;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1{
            text-align: center;
        }

        .gallery{
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /*to show items in same space evenly, centered in the role wo spaces*/
            gap: 20px; /*space btwn cards*/
        }

        .card{
            width: 200px;
            background-color:#91c7b1;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 8px #739f8e;
            display: flex;
            flex-direction: column;
        }

        .card img{
            width: 100%;
            border-radius: 8px;

        }
    </style>
</head>
<body>
<br>
<h1>Food</h1>

<div class="gallery">

    <div class="card">
    <img src= "images/food/cake.png" width= "50" height = "auto" alt = "Cake slice">
        <h3>Cake</h3>
        <h4>5 coins</h4>
        <button class = "store" onclick = "buy(event)" id = "cake">Buy</button>
    </div>

    <div class="card">
    <img src= "images/food/apple.png" width= "50" height = "auto" alt = "Apple">
        <h3>Apple</h3>
        <h4>5 coins</h4>
        <button class = "store" onclick = "buy(event)" id = "apple">Buy</button>
    </div>

    
    <div class="card">
    <img src= "images/food/taco.png" width= "50" height = "auto" alt = "taco">
        <h3>Taco</h3>
        <h4>5 coins</h4>
        <button class = "store" onclick = "buy(event)" id = "taco">Buy</button>
    </div>
    
    <div class="card">
    <img src= "images/food/milkshake.png" width= "50" height = "auto" alt = "milkshake">
        <h3>Milkshake</h3>
        <h4>5 coins</h4>
        <button class = "store" onclick = "buy(event)" id = "milkshake">Buy</button>
    </div>


    <div class="card">
    <img src= "images/food/sushi.png" width= "50" height = "auto" alt = "Sushi">
        <h3>Sushi</h3>
        <h4>5 coins</h4>
        <button class = "store" onclick = "buy(event)" id = "sushi">Buy</button>
    </div>
</div>

</body>
</html>
