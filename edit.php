<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/topbar.css">
        <title>
            Edit
        </title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
        <style>
            .topum{
                margin-left: 150px;
            }
            .bdy{
                margin-left: 150px;
            }
        </style>
        <div class="topum">
        <div class="top">
            <img class="logo" src="logo.jfif" alt="logo">
            <h1 class="title">Ficool</h1>
        <nav class="navi">
            <a  class="navitems" href="">Library</a>
            <a  class="navitems"href="">Write</a>
            <a class="navitems" href="">Contact</a>
            <a  class="navitems"href="">About </a>
        </nav>
        <div class="searching">
            <table class="container">
            <tr>
                <td>
                    <input type="text" placeholder="Search" class="search">
                </td>
            </tr>
        </table>
    </div>
    <nav class="naviext">
        <a class="coins" href="">Earn Coins</a>
        <a class="login" href="login.php">Log Out</a>
    </nav>
    
    </div >
    
    </div>
    <hr class="line">
    
    <div class="bdy">
    <h1 style="margin-left: 400px; font-size:30px; font-family: 'Courier New', Courier, monospace;">Edit This Profile</h1>
    <div class="login1">  
        
 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="Fool";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	session_start();
	if(isset($_SESSION['username'])){
		$user = $_SESSION['username'];
	} else {
		echo "Please log in to edit your profile";
		exit();
	}
	
	$sql = "SELECT * FROM Abyss WHERE username = '$user'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    $row = $result->fetch_assoc();
	} else {
	    echo "No results found";
	    exit();
	}
    echo '<form action="update.php" method="post">';
	echo '<label class="Uname" for="name">Username:</label> <br><input class="name" type="text" name="Uname" id="Uname" value="' . $row['username'] . '"><br><br>';
	echo '<label class="Uname" for="email">Email:</label><br> <input class="name" type="email" name="email" id="email" value="' . $row['email'] . '"><br><br>';
	echo '<label class="Uname" for="password">Password:</label><br> <input class="name" type="Password" name="Pass" id="pass" value="' . $row['pass'] . '"><br><br>';
	echo '<br> <input class="log" type="submit" name="log" id="sign-up" value="Update Profile">';
	echo '</form>';
	$conn->close();
	?>
    </div>
</div>
</body>
</html>
