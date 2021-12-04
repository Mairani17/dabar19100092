<?php

include "../config/koneksi.php";

$id = @$_POST['id'];
$namaBarang = @$_POST['Nama_barang'];
$jumlahBarang = @$_POST['Jumlah_barang'];

$data = [];

$query = mysqli_query($kon, "UPDATE `barang` 
SET `Nama_barang`='". $namaBarang ."',`Jumlah_barang`='". $jumlahBarang ."' 
WHERE `id`='". $id ."',");

if($query){
    $status = true;
    $pesan = "request succes";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "request failed";
}
$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];
header("content-type: application/json");
echo json_encode($json);

?>