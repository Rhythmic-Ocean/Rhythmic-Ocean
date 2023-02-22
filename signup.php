<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/topbar.css">
        <title>
            Signup
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
        <a class="login" href="login.php">Log In</a>
    </nav>
    
    </div >

    </div>
    <hr class="line">
    
    <div class="bdy">
    <img style=" margin-bottom: -70px; margin-left: 370px;" class="welcome" src="wel.png" alt="">
    <div class="login1">  
        
    <form action="main.php" id="signup" method="post">    
        <label class="Uname"><b>User Name     
        </b>    
        </label>
        <br>    
        <input class="name" type="text" name="Uname" id="Uname" placeholder="User Name">    
        <br><br>
        <label class="Uname"><b>Email     
        </b>    
        </label>
        <br>    
        <input class="name" type="email" name="email" id="email" placeholder="Email">    
        <br><br>    
        <label class="Uname"><b>Password     
        </b> 
        <br>   
        </label>    
        <input class="name" type="Password" name="Pass" id="pass" placeholder="Password">    
        <br><br>  
        <label class="Uname"><b>Confirm Password     
        </b> 
        <br>   
        </label>    
        <input class="name" type="Password" name="CPass" id="Cpass" placeholder="Confirm Password">    
        <br><br>   
        <input href="login.php" class="log" onclick="valid(event)" type="submit" name="log" id="sign-up" value="Sign Up Here">       
        <br><br>     
        <br><br>    
        <a href="" style="text-decoration: none; background-color: orangered; font-size: 15px;">Forgot Password</a>  
        <div class="in">
        <p style="text-decoration: none; background-color: orangered; font-size: 15px;">Already a member? <a  href="login.php">Log In</a> here!</p>
        </div> 
    </div>
</div>
 </form>
<script>
    function valid(event) {
  Uname = document.getElementById('Uname').value;
  Email = document.getElementById('email').value;
  Pass = document.getElementById('pass').value;
  Cpass = document.getElementById('Cpass').value;

  if (Uname == '') {
    alert('Username is required');
    event.preventDefault(); 
    return;
  }
  if (Email == '') {
    alert('Email is required');
    event.preventDefault();
    return;
  }
  if (Pass == '' || Pass.length < 8) {
    alert('Password is required and make sure it contains minimum 8 characters');
    event.preventDefault();
    return;
  }
  if (Pass !== Cpass) {
    alert('Password and confirm password must match');
    event.preventDefault();
    return;
  }
  alert("Signup success")
  document.getElementById('signup').submit();
}

</script>
    
    </body>
</html>