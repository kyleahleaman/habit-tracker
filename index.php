<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit Tracker</title>
    <link rel='stylesheet' href='wf_style.css'>
</head>
<body>
    <?php
        if(isset($_GET["message"])){
            $message = $_GET["message"] . "<BR><BR>";
        }else{
            $message = "";
        }
?>
    <div class = "container">
        <form name = "login" method = "post" id = "login" action = "processes/login.php">
            <font color = "red">
            <?php echo $message; ?>
            </font>

            <label for = "username">Username:</label><br>
            <input type = "text" name = "username" id = "username"><br><br>

            <label for = "password">Password:</label><br>
            <input type = "password" name = "password" id = "password"><br><br>

            <button onclick = "loginUser(event)">Login</button><br>

            <a href = "register.php">Not a member yet? Register here!</a>
        </form>
    </div>

    <script>
        function loginUser(event){
            event.preventDefault()
            var loginForm = document.getElementById("login")
            if(loginForm.elements["username"].value == "" || loginForm.elements["password"].value == ""){
                alert("Enter a username and password")
            }else{
                loginForm.submit()
            }
        }
    </script>
</body>
</html>