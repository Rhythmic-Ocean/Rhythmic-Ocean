<?php 
if (isset($_POST['log'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Fool";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        // If there was an error, display a message and exit the script
        die("Connection failed: " . $conn->connect_error);
    }
    
    $column1 = $_POST['Uname'];
    $column2 = $_POST['email'];
    $column3 = $_POST['Pass'];

    $column1 = mysqli_real_escape_string($conn, $column1);
    $column2 = mysqli_real_escape_string($conn, $column2);
    $column3 = mysqli_real_escape_string($conn, $column3);

    $sql = "INSERT INTO Abyss (username,email,pass)
    VALUES ('$column1', '$column2', '$column3')";

    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

