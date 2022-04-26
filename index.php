<?php

require './functions.php';
require 'vendor/autoload.php';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "api";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

echo "Connected successfully";


$method = $_SERVER['REQUEST_METHOD'];
$page = $_GET['page'];

if($page === "songs"){
    if($method === "GET"){
        echo json_encode("GET REQUEST");
    }elseif($method === "POST"){
        echo json_encode("POST REQUEST");
    }
}elseif($page === "socket"){
    require 'socket.php';
    shell_exec('php socket.php');
}else{
    echo 1;
}
