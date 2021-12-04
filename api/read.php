<?php
    include "../config/koneksi.php";

    $data = [];

    $query = mysqli_query($kon, "SELECT * FROM `barang` ORDER BY id DESC");

    if($query){
        $status = true;
        $pesan = "request succes";
        while($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
    }else{
        $status = false;
        $pesan = "reuest failed";
    }
    $json = [
        "status" => $status,
        "pesan" => $pesan,
        "data" => $data
    ];
    header("content-type: application/json");
    echo json_encode($json);
?>