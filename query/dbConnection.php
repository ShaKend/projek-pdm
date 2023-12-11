<?php
//custom port sesuai dengan local host
$dbLocal = "localhost";
$dbUser = "root";
$dbPass = "password";
$dbName = "pdm_sem1";
$dbPort = "3307";
$conn = new mysqli($dbLocal, $dbUser, $dbPass, $dbName, $dbPort);
if($conn->connect_error){
    die("failed to connect");
}


?>