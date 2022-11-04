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

    <h1 class="underline">
        Here's our story!
    </h1>
    <div>
   <p class="text">
        We are a Tiling company located in the heart of Valdosta, Georgia! We are a team of six who implements Planks, Backslpahes, Planks and Counter Tops. We try our best to uphold or goals and morals to give our customers the house of their dreams. Any of our workers will be glad to talk to our customers about any design their interested in and will work to implement designs that completely fits our clients desires! 
    </p>
</div>

<h1 class="underline">
    Meet the Team!
</h1>
<div class="row">
    <div class="column">
        <img class="img" src="John.jpg" alt="Pedro Padrazo">
        <P>
            Pedro Padrazo: 10 Years of expierence. From: Miami,Florida.
        </p>
    </div>
    <div class="column"> 
        <img class="img" src="Carl.jpg" alt="Carl Smith">
        <P>
            Carl Smith: 8 Years of expierence. From: Miami,Florida.
        </p>
    </div>
    <div class="column">
        <img class="img" src="winston.jpg"alt="Winston Bishop">
        <P>
            Winston Bishop: 8 Years of expierence. From:Valdosta, Georgia.
        </p>
    </div>
    <div class="column">
        <img class="img" src="cam.jpg" alt="Cameron Griner">
        <P>
            Cameron Griner: 6 Years of expierence. From: Montgomery, Alabama.
        </p>
    </div>
    <div class="column"> 
        <img class="img" src="nick.jpg" alt="Nicholas Smith">
        <P>
            Nicholas Smith: 3 Years of expierence. From: Atlanta, Georgia.
        </p>
    </div>
    <div class="column">
        <img class="img" src="oscar.jpg" alt="Oscar Herring">
        <P>
            Oscar Herring: 3 Years of expierence. From: Orlando,Florida.
        </p>
    </div>
</div>
</html>