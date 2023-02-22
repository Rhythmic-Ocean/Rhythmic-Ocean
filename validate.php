<?php
session_start(); // start the session

$servername="localhost";
$username="root";
$password="";
$dbname="Fool";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['log'])) {
    $username = $_POST['Uname'];
    $password = $_POST['Passw'];
}

$sql = "SELECT * FROM Abyss WHERE username='$username' AND pass='$password'";

// Execute the query and get the result set
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username; // store the username in session variable
    header("Location:index.php");
} else {
    echo "Invalid username or password";
}
$conn->close();
?>
