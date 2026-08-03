<!-- <?php
require_once('dbconfig.php');

$user = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$age = $_POST['age'];

// connect to my database
$conn = new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare the SQL message
$sql = "INSERT INTO users(username, bestpassword, age, approved, createdOn) 
VALUES ('{$user}', SHA2(CONCAT('salt', '{$pass}', 'pepper'), 0), {$age}, 1, NOW());";

// send this SQL message
$stmt = $conn->prepare($sql);
$stmt->execute();
$conn->close();

header('location:../index.php?message=Thanks for registering. Log in.')

?> -->