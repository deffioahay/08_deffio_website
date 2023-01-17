<?php 

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"]; 
    $harga_barang = $_POST["harga_barang"];
    $jumlah = $_POST["jumlah"];

    $query = "INSERT INTO data_barang (id_barang, nama_barang, harga_barang, jumlah) VALUES ('$id_barang', '$nama_barang', '$harga_barang', '$jumlah')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>