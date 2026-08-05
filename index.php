<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit Tracker</title>
    <style>
        body {
            background-color: #91c7b1;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
        }

        .split-container {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        form {
            margin-top: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
            padding: 20px;
            width: 50%;
            background-color: white;
            margin: auto;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px #5a5a66;
            border-style: solid;
            box-sizing: border-box;
        }

        input:hover[type="text"], input:hover[type="password"]{
            background-color: #ddeaee;
        }

        button {
            background-color: #98bcdc;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 15px;
        }

        button:hover {
            opacity: 0.8;
        }

        .form-part {
            flex: 1;
            background-color: #98bcdc;
            padding: 40px 20px;
            overflow-y: auto; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
            align-items: center;
        }

        .picture {
            flex: 1;
            background-image: url('sky.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET["message"])){
            $message = $_GET["message"] . "<BR><BR>";
        }else{
            $message = "";
        }
    ?>

    <div class = "split-container">
        <div class="picture"></div>

        <div class="form-part">
            <form name = "login" method = "post" id = "login" action = "processes/login.php">
                <font color = "red"><?php echo $message; ?></font>

                <h1>Login</h1>
                <label for = "username">Username:</label><br>
                <input type = "text" name = "username" id = "username"><br><br>

                <label for = "password">Password:</label><br>
                <input type = "password" name = "password" id = "password"><br><br>
            
                <button onclick = "loginUser(event)">Login</button>
                <br><br>

                <a href = "processes/register.php">Not a member yet? Register here!</a>
                <br><br> 
            </form>
        </div>
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