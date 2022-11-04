<?php
        if (isset($_POST['submit-search'])){
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