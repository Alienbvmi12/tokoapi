<?php
include "koneksi.php";
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = file_get_contents("php://input");
    $data = json_decode($data, true);
    $username = $data['username'];
    $password = $data['password'];
    $query = mysqli_query($koneksi, "select username from user where username='$username' and password='$password'");
    if(mysqli_num_rows($query) > 0){
        echo json_encode(["status" => true]);
    }
    else{
        echo json_encode(["status" => false]);
    }
}