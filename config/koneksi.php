<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "dabar";

$kon = mysqli_connect ($host, $username, $password, $database);
if(mysqli_connect_error()){
    echo "error connection", mysqli_connect_error();
    exit;
}







?>