<?php

header("Content-Type: application/json");
include "koneksi.php";

$query = mysqli_query($koneksi, "select id_obat, nama_obat, harga from obat");
$result = [];
while($data = mysqli_fetch_assoc($query)){
    array_push($result, $data);
}
echo json_encode($result);