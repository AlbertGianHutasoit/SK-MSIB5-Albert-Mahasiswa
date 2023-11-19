<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
        <?php
        include "koneksi.php";
        $query = mysqli_query($conn, "SELECT id_produk, k.kategori, wp.waktu_produksi, nama_produk, deskripsi_produk, harga, gambar FROM `produk` as p join kategori as k on p.id_kategori=k.id join waktu_produksi as wp on wp.id=p.id_produksi ORDER BY p.id_produk");
        ?>

        <center><h1>Data Produk:</h1></center>
        <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php"> Tambah Produk</a>
            <table class="table table-striped table-bordered" id="customerTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Produksi</th>
                        <th>Nama_produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($query) > 0){
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                    <td><?php echo $data["id_produk"] ?></td>
                        <td><?php echo $data["kategori"] ?></td>
                        <td><?php echo $data["waktu_produksi"] ?></td>
                        <td><?php echo $data["nama_produk"] ?></td>
                        <td><?php echo $data["deskripsi_produk"] ?></td>
                        <td><?php echo "Rp. " . number_format($data["harga"],0,',','.'); ?></td>
                        <td><img src="../<?php echo $data["gambar"]?>"width="130px"></td>
                        <td>
                            <a href="proses_hapus.php?id_produk=<?php echo $data["id_produk"]?>" id="hapus" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                            <a href="edit.php?id_produk=<?php echo $data["id_produk"] ?>" class="btn btn-warning">Ubah</a>
                        </td>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#customerTable').DataTable();
    });
</script>
</body>
</html>
