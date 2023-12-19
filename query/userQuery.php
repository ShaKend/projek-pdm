<?php
include('./dbConnection.php');
session_start();

//register
if(isset($_POST['usernameReg']) && isset($_POST['useremailReg']) && isset($_POST['userpassReg'])){
    $nameReg = $_POST['usernameReg'];
    $emailReg = $_POST['useremailReg'];
    $passReg = $_POST['userpassReg'];

    $sql = "INSERT INTO user (userName, userEmail, userPass) VALUES ('$nameReg', '$emailReg', '$passReg')";

    if ($conn->query($sql) == true) {
        echo 1;
        $_SESSION['userLogin'] = true;
        $_SESSION['username'] = $nameReg;
    }else{
        echo 0;
        $_SESSION['userLogin'] = false;
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

//login
if(isset($_POST['emailLog']) && isset($_POST['passLog'])){
    $userEmail = $_POST['emailLog'];
    $userPass = $_POST['passLog'];

    $sql = "SELECT username FROM user WHERE useremail = ? AND userpass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $userEmail, $userPass);
    $stmt->execute();
    $stmt->bind_result($userName);
    $stmt->fetch();
    $stmt->close();
    if($userName){
        // $row = $result->fetch_assoc();  
        $_SESSION['userLogin'] = true;
        $_SESSION['userName'] = $userName;
        echo 1;
    }else{
        $_SESSION['userLogin'] = false;
        echo 0;
    }
}







?>