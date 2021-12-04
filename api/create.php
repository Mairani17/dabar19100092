<?php

    include "../config/koneksi.php";

    $namaBarang = @$_POST["Nama_barang"];
    $jumlahBarang = @$_POST["Jumlah_barang"];

    $data = [];

    $query = mysqli_query($kon, "INSERT INTO `barang`( `Nama_barang`,`Jumlah_barang`) 
            VALUES 
            ('". $namaBarang ."',
            '". $jumlahBarang ."')");
    
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