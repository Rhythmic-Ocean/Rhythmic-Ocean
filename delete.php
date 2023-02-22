<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Fool";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$user = $_SESSION['username'];
$sql = "DELETE FROM Abyss WHERE username = '$user'";

 if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Account deleted successfully')</script>";
    echo "<script>setTimeout(function() {window.location.href = 'signup.php';}, 500);</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>