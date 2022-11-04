<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "padrazo";


$conn = mysqli_connect($server,$username,$password,$dbname);
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
    <div class="sticky">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="design.php">Design</a></li>
        <li><a href="tiletype.php">Tile Type</a></li>
        <li><a href="aboutus.php">About US</a></li>
        </ul>
    </div>

    <!-- Images -->
    <div>
        <img class="main" src="Mainpic.jpg" alt="Tiled Walls and Floor"><br>
        <h2 class="underline">Key Services</h2>
    </div>
<div class="row">
    <div class="column">
        <img class="img" src="bs1.jpg" alt="BackSplash"><br>
        <p>Backsplashes</p>
    </div>
    <div class="column">
        <img class="img" src="TF1.jpg" alt="Flooring"><br>
        <p>Tile Flooring</p>
    </div>
    <div class="column">
        <img class="img" src="p.jpg" alt="Planks"><br>
        <p>Planks</p>
    </div>
    <div class="column">
        <img class="img" src="ct.jpg" alt="Counter"><br>
        <p>Counter Tops</p>
    </div>
</div>

    <!-- Goals -->
    <div>
        <h2 class="underline">Goals for our Customers</h2>
        <h3>Provide customer with the design of their dreams.<h3><br>
        <h3>Create an enviroment in which the customer feels at home.</h3><br>
        <h3>Create a decor that portrays our customer personality.</h3><br>
    </div>

</body>
</html>