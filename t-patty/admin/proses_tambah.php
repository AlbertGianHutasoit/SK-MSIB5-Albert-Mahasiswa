<?php
include "koneksi.php";

$target_dir = "../images/file_sql/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = true;
move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

//get variabel from form input
$id_produk=$_POST["id_produk"];
$id_kategori=$_POST["id_kategori"];
$id_produksi=$_POST["id_produksi"];
$nama_produk=$_POST["nama_produk"];
$deskripsi_produk=$_POST["deskripsi_produk"];
$harga=$_POST["harga"];
$gambar=$_FILES["gambar"]["name"];


$result = mysqli_query($conn, "INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_produksi`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`) Values ('$id_produk', '$id_kategori', '$id_produksi', '$nama_produk', '$deskripsi_produk', '$harga', '$gambar');");

header("Location:index.php");
?>