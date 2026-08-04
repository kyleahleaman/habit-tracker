<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
        <style>
            body {
                background-color: #91c7b1;
                font-family: Arial, Helvetica, sans-serif;
            }

            form {
                margin-top: 20px;
                border-radius: 15px;
                box-shadow: 0 0 10px rgb(0, 0, 0, 0.2);
                padding: 20px;
                width: 30%;
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
                background-color: #91c7b1;
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
        </style>
</head>
<body>
    <br><br><br><br>
    <div class = "container">
        <form name = "register" method = "post" id = "register" action = "../processes/signup.php">
            <h1>Register</h1>

            <label for = "username">Username:</label><br>
            <input type = "text" name = "username" id = "username"><br><br>

            <label for = "password">New Password:</label><br>
            <input type = "password" name = "password" id = "password"><br><br>

            <label for = "cpassword">Confirm Password:</label><br>
            <input type = "password" name = "cpassword" id = "cpassword"><br><br>

            <button onclick = "registerUser(event)">Register</button>
        </form>
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
