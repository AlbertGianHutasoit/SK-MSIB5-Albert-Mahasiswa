<?php
include "koneksi.php";

$result = mysqli_query($conn, "DELETE FROM `produk` where `id_produk` = '$_GET[id_produk]'");
header("Location:index.php");
?>