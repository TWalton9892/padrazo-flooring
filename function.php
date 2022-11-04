<?php

function emptyInputSignup($name, $pwd, $pwdRepeat, $email, $phn){
    $result;
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat) || empty($phn)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function invalidUid($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//code to prevent sql injection
function uidExists($conn, $name, $email) {
    $sql = "SELECT * FROM customers WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: contact.php?error=stmtfailed");
    exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
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

function createUser($conn, $name, $email, $pwd, $phn) {
    $sql = "INSERT INTO customers (name, email, pwd, phone )VALUES (?, ?, ?, ?); ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: contact.php?error=stmtfailed");
    exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $phn );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: contact.php?error=none");
    exit();
}

// function emptyInputLogin($name, $pwd){
//     $result;
//     if (empty($name) ||  empty($pwd)){
//         $result = true;
//     }
//     else{
//         $result = false;
//     }
//     return $result;
// }

// function loginUser($conn, $name, $pwd){
//     $uidExists = uidExists($conn, $name, $email);

//     if($uidExists === false){
//         header("location: login.php?error=wronglogin");
//         exit();
//     }

    
//     $pwdHashed = $uidExists["usersPwd"]; 
//     $checkPwd = password_verify($pwd, $pwdHashed);

//     if ($checkPwd === false){
//         header("location: login.php?error=wronglogin");
//         exit();
//     }
// //    ' else if($checkPwd === true){
// //         sessiom_start();
// //         $_SESSION("name")= $uidExists["nameId"];
// //         $_SESSION("nameUid")= $uidExists["nameuid"];
// //         header("location: index.php");
// //         exit();
// //     }
// // }'