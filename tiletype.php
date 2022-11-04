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

    <?php
if(isset($_GET["error"])){
        if($_GET["error"] == "none"){
            echo "<p>Your request has been recorded!</p>";
        }
    }

?>

<h1 class="underline">
    Request a Tile Order!
</h1>

<form method="post" action="process.php">
    <input type="text" name="name" class="input" placeholder="Name" required/>
    <input type="email" name="email" class="input" placeholder="Your Email" required/>
    <input type="text" name="type" class="input" placeholder="Name of Tile" requuired/>
    <button type="submit" class="button" name="submit">Submit</button>
</form><br>

    <h1 class="underline">
        Look at our Products!
</h1><br><br>

    <div class="row">
        <div class="column">
            <img class="img" src="subway.jpg" alt="White Subway Tile"><p>White Subway Tile</p><br>
            <p>Material: Ceramic <p>
        </div>
        <div class="column">
            <img class="img" src="merola.jpg" alt="Merola Tile" ><p>Mereola Tile</p><br>
            <p>Material: Porcelain</p>
        </div>
    <div class="column">
        <img class="img" src="absolute.jpg" alt="Satori Absolute" ><p>Satori Absolute</p><br>
        <p>Material: Granite</p>
    </div>
    <div class="column" >
        <img class="img" src="nero.jpg" alt="Nero Marquinea" ><p>Nero Marquinea</p><br>
        <p>Material: Glass</p>
    </div>
    <div class="column">
        <img class="img" src="swiss.jpg" alt="Swiss Hextile"><p>Swiss Hextile</p><br>
        <p>Material: Porcelain</p>
    </div>
    <div class="column">
        <img class="img" src="statuary.jpg" alt="Statuary White"><p>Statuary White</p><br>
        <p>Material: Marble</p>
    </div>
    <div class="column">
        <img class="img"src="glazed.jpg" alt="Glazed Subway Tile"><p>Glazed Subway Tile</p><br>
        <p>Material: Ceramic</p>
    </div>
    <div class="column">
        <img class="img" src="btiger.jpg" alt="Brazilian Tiger Tile"><p>Brazilian Tiger Tile</p><br>
        <p>Material: Porcelain</p>
    </div>
    <div class="column">
        <img class="img" src="eleanor.jpg" alt="Eleanor"><p>Eleanor</p><br>
        <p>Material: Cement</p>
    </div>
    <div class="column">
        <img class="img" src="blackg.jpg" alt="Black Galaxy"><p>Black Galaxy</p><br>
        <p>Material: Marble</p>
    </div>
    <div class="column">
        <img class="img" src="carrara.jpg" alt="Carrara"><p>Carrara</p><br>
        <p>Material: Marble</p>
    </div>
    <div class="column">
        <img class="img" src="cyellow.jpg" alt="Crsytal Yellow"><p>Crystal Yellow</p><br>
        <p>Material: Granite</p>
    </div>
    <div class="column">
        <img class="img" src="crema.jpg" alt="Cream Marfil"><p>Cream Marfil</p><br>
        <p>Material: Marble</p>
    </div>
    <div class="column">
        <img class="img" src="emperador.jpg" alt="Emperador Dark"><p>Emperador Dark</p><br>
        <p>Material: Marble</p>
    </div>
    <div class="column">
        <img class="img" src="emser.jpg" alt="Emser"><p>Emser</p><br>
        <p>Material: Marble</p>
        <p></p>
    </div>
    <div class="column">
        <img class="img" src="molten.jpg" alt="Molten Hexagon"><p>Molten Hexagon</p><br>
        <p>Glass</p>
    </div>
    <div class="column">
        <img class="img" src="rosy.jpg" alt="Rosy Pink"><p>Rosy Pink</p><br>
        <p>Material: Glass</p>
    </div>
    <div class="column">
        <img class="img" src="maple.jpg" alt="Rosy Pink"><p>Maple Wood</p><br>
        <p>Material: Planks</p>
    </div>
    <div class="column">
        <img class="img" src="cherry.jpg" alt="Rosy Pink"><p>Cherry Wood</p><br>
        <p>Material: Planks</p>
    </div>
    <div class="column">
        <img class="img" src="walnut.jpg" alt="Rosy Pink"><p>Walnut Wood</p><br>
        <p>Material: Planks</p>
    </div>
    <div class="column">
        <img class="img" src="lyptus.jpg" alt="Rosy Pink"><p>Lyptus Wood</p><br>
        <p>Material: Planks</p>
    </div>

</div>