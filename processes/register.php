<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "Stylesheet" href = "style.css">
</head>
<body>
    <div class = "container">
        <form name = "register" method = "post" id = "register" action = "../processes/signup.php">
            <h1>Register</h1>

            <label for = "username">Username:</label><br>
            <input type = "text" name = "username" id = "username"><br><br>

            <label for = "password">New Password:</label><br>
            <input type = "password" name = "password" id = "password"><br><br>

            <label for = "cpassword">Confirm Password:</label><br>
            <input type = "password" name = "cpassword" id = "cpassword"><br><br>

            <label for = "age">Age:</label><br>
            <input type = "number" name = "age" id = "age"><br><br>

            <button onclick = "registerUser(event)">Register</button>
        </form>
    </div>

    <script>
        function registerUser(event){
            event.preventDefault()
            var registerForm = document.getElementById("register")
            if(registerForm.elements["username"].value == "" || registerForm.elements["password"].value == "" || registerForm.elements["age"].value == ""){
                alert("Enter a username, password, and age.")
            }else if(registerForm.elements["cpassword"].value != registerForm.elements["password"].value){
                alert("Your passwords do not match. Please re-confirm your password.")
            }else{
                registerForm.submit()
            }
        }
    </script>
</body>
</html> -->