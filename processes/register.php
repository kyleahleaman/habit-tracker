<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                background-image: url(../sky.jpg);
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
            <form name = "register" method = "post" id = "register" action = "../processes/signup.php">
                <font color = "red"><?php echo $message; ?></font>
                <h1>Register</h1>

                <label for = "username">Username:</label><br>
                <input type = "text" name = "username" id = "username"><br><br>

                <label for = "password">New Password:</label><br>
                <input type = "password" name = "password" id = "password"><br><br>

                <label for = "cpassword">Confirm Password:</label><br>
                <input type = "password" name = "cpassword" id = "cpassword"><br><br>

                <button onclick = "registerUser(event)">Register</button>

                <h4>Not intended for users under 6!</h4>
            </form>
        </div>
    </div>

    <script>
        function registerUser(event){
            event.preventDefault()
            var registerForm = document.getElementById("register")
            if(registerForm.elements["username"].value == "" || registerForm.elements["password"].value == ""){
                alert("Enter a username, and password.")
            }else if(registerForm.elements["cpassword"].value != registerForm.elements["password"].value){
                alert("Your passwords do not match. Please re-confirm your password.")
            }else{
                registerForm.submit()
            }
        }
    </script>
</body>
