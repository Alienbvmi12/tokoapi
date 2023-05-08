<?php
header("Content-Type: application/json");
include "koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = file_get_contents("php://input");
    $data = json_decode($data, true);
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $username = $data['username'];
    $password = $data['password'];
    $query = mysqli_query($koneksi, "select username from user where username='$username'");
    if(mysqli_num_rows($query) > 0){
        echo json_encode(["status" => false]);
    }
    else{
        mysqli_query($koneksi, "insert into user values('', 'Pelanggan', '$nama', '$alamat', '', '$username', '$password')");
        echo json_encode(["status" => true]);
    }
}