<html lang="en">
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #91c7b1;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #2a2b2e;
            padding: 14px 26px;
            text-decoration: none;
            font-size: 17px;
            
        }

        li a:hover {
            background-color: rgb(236, 193, 199);
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?PHP if($_SERVER["SERVER_ADDR"]=="127.0.0.1"){ ?>
                    <li><a href="/habit-tracker/homepage.php"><img src="/habit-tracker/images/home.png" width="50%"; margin: 0 auto;></a></li>
                    <li><a href="/habit-tracker/shop.php">Shop</a></li>
                    <li><a href="/habit-tracker/profile.php">{USERNAME}</a><li>

                <?PHP }else{ ?>
                    <li><a href="/homepage.php"><img src="/habit-tracker/images/home.png" width="50%"></a></li>
                    <li><a href="/habit-tracker/shop.php">Shop</a></li>
                    <li><a href="/habit-tracker/profile.php">{USERNAME}</a><li>
                <?PHP }; ?>
            </ul>
        </nav>
    </header>
</body>
</html>


<!-- PROFILE DROP DOWN 

    SHOP 
    PROFILE 
    LOGOUT 
    HABIT -->