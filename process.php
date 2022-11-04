<?php
    $result="";

$server = "localhost";
$username = "root";
$password = "";
$dbname = "padrazo";


$conn = mysqli_connect($server,$username,$password,$dbname);

$name= $_POST["name"];
$email= $_POST["email"];
$type= $_POST["type"];

createOrder($conn,$name,$email,$type);

if (uidExists($conn, $name, $email,$type) !== false){
    header("location: tiletype.php?error=usernametaken");
exit();

}

if ( emptyInputSignup($name,$email, $type ) !== false){
    header("location: tiletype.php?error=emptyinput");
    exit();
}

function createOrder($conn,$name,$email,$type){
    $sql = "INSERT INTO orders (name, email, type )VALUES (?, ?, ?); ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: tiletype.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $type);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: tiletype.php?error=none");
    exit();
}

function emptyInputSignup($name, $email, $type){
    $result;
    if (empty($name) || empty($email) || empty($type)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $name, $email,$type) {
    $sql = "SELECT * FROM orders WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: tiletype.php?error=stmtfailed");
    exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $name, $email,$type);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result; 
    }

    mysqli_stmt_close($stmt);
}