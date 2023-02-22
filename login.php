<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/topbar.css">
        <title>
            Login 
        </title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
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
        <a class="login" href="signup.php">Sign Up</a>
    </nav>
    
    </div >

    </div>
    <hr class="line">
    
    <div class="bdy">
    <img class="welcome" src="welcome.png" alt="">
    <div class="login1">  
        
    <form action="validate.php" id="login" method="post">    
        <label class="Uname"><b>User Name     
        </b>    
        </label>
        <br>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label class="Uname"><b>Password     
        </b> 
        <br>   
        </label>    
        <input type="Password" name="Passw" id="Uname" placeholder="Password">    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <p class="span">Remember me</span>    
        <br><br>    
         <a href="" style="text-decoration: none; background-color: orangered;">Forgot Password</a>    
    
  
    </div>
</fieldset>
</div>
        </form>
    
    </body>
</html>