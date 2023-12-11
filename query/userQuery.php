<?php
include('./dbConnection.php');

//login
if(isset($_POST['usernameReg']) && isset($_POST['useremailReg']) && isset($_POST['userpassReg'])){
    $nameReg = $_POST['usernameReg'];
    $emailReg = $_POST['useremailReg'];
    $passReg = $_POST['userpassReg'];

    $sql = "INSERT INTO user (userName, userEmail, userPass) VALUES ('$nameReg', '$emailReg', '$passReg')";

    if ($conn->query($sql) == true) {
        echo 1;
    }else{
        echo 0;
    }
}


//cek email sudah terdaftar atau blm
if(isset($_POST['useremailRegValid'])){
    $userEmail = $_POST['useremailRegValid'];
    $sql = "SELECT userEmail FROM user WHERE userEmail = '".$userEmail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo $row;
}


?>