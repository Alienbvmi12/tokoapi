<?php
header("Content-Type: application/json");
include "koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = file_get_contents("php://input");
    $data = json_decode($data);
    $nama = $data['nama'];
    $obat = $data['obat'];
    $jenis = $data['jenis'];
    $total = $data['total'];
    mysqli_query($koneksi, "insert into transaksi values ('', '$nama', '$obat', '$jenis', '$total')");
    echo json_encode(["status" => true]);
}