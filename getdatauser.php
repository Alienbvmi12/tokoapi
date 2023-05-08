<?php
header("Content-Type: application/json");
include "koneksi.php";
$username = $_GET['username'];
$password = $_GET['password'];
$query = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$data = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) > 0){
    $data['telpon'] = "kosong";
    echo json_encode($data);
}