<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        } 

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #91c7b1;
            border-radius: 15px;
        }

        li {
            float: left;
            justify-content: center;
            align-items: center;
        }

        li a {
            display: block;
            color: #2a2b2e;
            padding: 14px 26px;
            text-decoration: none;
            font-size: 18px;
            justify-content: center;
            align-items: center;
        }

        li a:hover {
            background-color: rgb(236, 193, 199);
        }

        .content-hidden{
            display: none;
            flex-direction: column;
        }

        .content-hidden li a{
            display: inline-block;
            color: #2a2b2e;
            text-decoration: none;
            font-size: 18px;
            justify-content: center;
            align-items: center;
            height: 31px;
            padding-top: 20px;
            padding-bottom: 8px;
        }

        .left {
            display: flex;
            justify-content: flex-end;
        }

        img {
            margin-left: 2px;
        }

        .collapsible {
            background-color: #91c7b1;
            border: none;
        }

        .collapsible:hover {
            background-color: rgb(236, 193, 199);
        }

        .center{
            float: left;
            margin-left: 440px;
            margin-top: 20px;
            text-transform: capitalize;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?PHP if($_SERVER["SERVER_ADDR"]=="127.0.0.1"){ ?>
                    <li><a href="/habit-tracker/homepage.php"><img src="/habit-tracker/images/home.png" width="70%" style="margin-top: 2px;"></a></li>
                    <li><a href="/habit-tracker/shop/shop.php"><img src="/habit-tracker/images/shop.png" width="70%" style="margin-top: 2px;"></a></li>

                    <div class="center">
                        <li><?php echo $_SESSION['avatar_name']; ?></li>
                    </div>

                    <div class="left">
                        <li><a href="/habit-tracker/profile.php"><img src="/habit-tracker/images/profile.png" width="66%" style="margin-left: 7px;"></a></li>
                        <button type="button" class="collapsible">►</button>

                        <div class="content-hidden">
                            <ul>
                                <li><a href="/habit-tracker/profile.php">Profile</a><br></li>
                                <li><a href="/habit-tracker/shop/shop.php">Shop</a><br></li>
                                <li><a href="/habit-tracker/surveyPage.html">Habits</a><br></li>
                                <li><a href="/habit-tracker/processes/logout.php">Logout</a><br></li>
                            </ul>
                        </div>
                    </div>
                <?PHP }else{ ?>
                    <li><a href="/homepage.php"><img src="/images/home.png" width="75%"></a></li>
                    <li><a href="/shop/shop.php"><img src="/images/shop.png" width="75%"></a></li>

                    <div class="left">
                        <li><a href="/profile.php"><img src="/images/profile.png" width="66%" style="margin-left: 7px;"></a></li>
                        <button type="button" class="collapsible">►</button>

                        <div class="content-hidden">
                            <ul>
                                <li><a href="/profile.php">Profile</a><br></li>
                                <li><a href="/shop/shop.php">Shop</a><br></li>
                                <li><a href="/surveyPage.html">Habits</a><br></li>
                                <li><a href="/processes/logout.php">Logout</a><br></li>
                            </ul>
                        </div>
                    </div>
                <?PHP }; ?>
            </ul>
        </nav>
    </header>
</body>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "flex") {
                    content.style.display = "none";
                } else {
                    content.style.display = "flex";
                }});}
    </script>
</html>


<!-- PROFILE DROP DOWN 

    SHOP 
    PROFILE 
    LOGOUT 
    HABIT -->