<?php
include "koneksi.php";

//get variabel from form input
$id_kategori=$_POST["id_kategori"];
$id_produksi=$_POST["id_produksi"];
$nama_produk=$_POST["nama_produk"];
$deskripsi_produk=$_POST["deskripsi_produk"];
$harga=$_POST["harga"];
if(isset($_FILES)){
    $target_dir = "../images/file_sql/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = true;
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    $gambar = $_FILES["gambar"]["name"];
}


$result = mysqli_query($conn, "UPDATE `produk` set `id_kategori` = '$id_kategori', `id_produksi` = '$id_produksi', `nama_produk`= '$nama_produk', `deskripsi_produk` = '$deskripsi_produk', `harga`= '$harga', `gambar` = '$gambar' where `id_produk` = '$_GET[id_produk]'");
header("Location:index.php");
?>