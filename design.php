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

    <form action="design.php" method="POST">
        <h2>Find Your Match</h2>
        <p>Enter the name of the Tile you are looking for.</p>
        <input type="text" name="search"  placeholder="Search..." >
        <button type="submit" class="button" name="submit">Submit</button>
    </form>
    <br><br><br>

    
    <?php
        if (isset($_POST['submit'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql ="SELECT * FROM product WHERE itemname LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            echo "There are ".$queryResults." results!";

            if ($queryResults > 0){
                while( $row = mysqli_fetch_assoc($result)){
                    echo "<div>
                    <h3>".$row['id']."</h3>
                    <p>".$row['itemname']."</p>
                    <p>".$row['price']."</p>
                    <p>".$row['type']."</p>
                    </div>";
                }
              
            }else{
                echo "There was no results matching your search";
            }
        }
    ?>

</html> 
 



