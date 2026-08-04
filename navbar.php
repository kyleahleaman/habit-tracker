
<html lang="en">
<head>
    <style>
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
        }

        li a {
            display: block;
            color: #2a2b2e;
            padding: 14px 26px;
            text-decoration: none;
            font-size: 18px;
        }

        li a:hover {
            background-color: rgb(236, 193, 199);
        }

        .content-hidden{
              display: none;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?PHP if($_SERVER["SERVER_ADDR"]=="127.0.0.1"){ ?>
                    <li><a href="/habit-tracker/homepage.php"><img src="/habit-tracker/images/home.png" width="75%"></a></li>
                    <li><a href="/habit-tracker/shop.php"><img src="/habit-tracker/images/shop.png" width="75%"></a></li>
                    <li><a href="/habit-tracker/profile.php"><img src="/habit-tracker/images/profile.png" width="25%"><?php $_SESSION["user"]; ?></a><li>
                    <button type="button" class="collapsible">▼</button>

                    <div class="content-hidden">
                        <a href="/habit-tracker/profile.php">Profile</a>
                        <a href="/habit-tracker/shop.php">Shop</a>
                        <a href="/habit-tracker/surveyPage.html">Habits</a>
                        <a href="/habit-tracker/processes/logout.php">Logout</a>
                    </div>


                <?PHP }else{ ?>
                    <li><a href="/homepage.php"><img src="/images/home.png" width="75%"></a></li>
                    <li><a href="/shop.php"><img src="/images/shop.png" width="75%"></a></li>
                    <li><a href="/profile.php"><img src="/images/profile.png" width="25%"><?php $_SESSION["user"]; ?></a><li>

                    <div class="content-hidden">
                        <a href="/profile.php">Profile</a>
                        <a href="/shop.php">Shop</a>
                        <a href="/surveyPage.html">Habits</a>
                        <a href="/processes/logout.php">Logout</a>
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
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }});}
    </script>
</html>


<!-- PROFILE DROP DOWN 

    SHOP 
    PROFILE 
    LOGOUT 
    HABIT -->