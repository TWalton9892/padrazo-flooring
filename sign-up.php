<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "padrazo";


$conn = mysqli_connect($server,$username,$password,$dbname);

if (isset($_POST["submit"])){
    echo "It works";
}

if ( isset($_POST["submit"])){
    echo "it works";
    
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    $phn = $_POST["phn"];

    require_once 'function.php';

    if ( emptyInputSignup($name, $pwd, $pwdRepeat, $email, $phn) !== false){
        header("location: contact.php?error=emptyinput");
        exit();
    }

    if (invalidUid($name) !== false){
        header("location: contact.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: contact.php?error=invalidEmail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: contact.php?error=invalidPwd");
    exit();
    }
    
    if (uidExists($conn, $name, $email) !== false){
        header("location: contact.php?error=usernametaken");
    exit();

    }

    createUser($conn, $name, $email, $pwd, $phn );

    }
    else{
        header("location ../signup.php");
        exit();
    }