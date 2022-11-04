<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "padrazo";


$conn = mysqli_connect($server,$username,$password,$dbname);

if (isset($_POST["submit"])){
    echo "It works";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padrazo's Flooring</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- header of the webpage -->
    <header>
        <p class="right">(229)-412-3464</p>
        <h1>Padrazo's Flooring</h1>
    </header>

    <!-- Navigation Page -->
    <div>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="design.php">Design</a></li>
        <li><a href="tiletype.php">Tile Type</a></li>
        <li><a href="aboutus.php">About US</a></li>
        </ul>
    </div>

    <div class="signup">
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all Fields!</p>";
        }
        else if($_GET["error"] == "invalidUid"){
            echo "<p>Choose a proper username!</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email!</p>";
        }
        else if($_GET["error"] == "invalidPwd"){
            echo "<p>Password does not match!</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong!</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken!</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
        <h1>Sign Up Now!</h1>
        <form action ="sign-up.php" method ="post">
            <input type="text" name="name" class="input" placeholder="Full Name">
            <input type="password" name="pwd" class="input" placeholder="Password">
            <input type="password" name="pwdrepeat" class="input" placeholder="Repeat password">
            <input type="email" name="email" class="input" placeholder="Your Email">
            <input typer="text" name="phn"class="input" placeholder="Phone Number">
            <p><span><input type="checkbox"></span>I agree to Terms and Services.</p>
            <button type="submit" name="submit" class="button">Submit</button>
            <hr>
        </form>
    </div>
  
    </body>
