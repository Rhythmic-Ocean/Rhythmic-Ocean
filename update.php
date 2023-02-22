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
$Uname=$_SESSION['username'];
$user = $_POST['Uname'];
$email = $_POST['email'];
$pass = $_POST['Pass'];


$delete_query = "DELETE FROM Abyss WHERE username='$Uname'";
if ($conn->query($delete_query) === FALSE) {
    echo "Error deleting record: " . $conn->error;
}


$sql = "INSERT INTO Abyss (username, email, pass) VALUES ('$user', '$email', '$pass')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Record Updated Successfully')</script>";
    session_abort();
    echo "<script>setTimeout(function() {window.location.href = 'login.php';}, 500);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
