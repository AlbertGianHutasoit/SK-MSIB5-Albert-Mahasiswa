<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style type="text/css">
        input {
            padding: 6px;
            width: 100px
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: salmon;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    EDIT PRODUK:
    <?php 
    include 'koneksi.php';

    $cs = mysqli_query($conn,"SELECT * from produk where id_produk = '$_GET[id_produk]'");

    while($c = mysqli_fetch_array($cs)){
        $id_produk=$c["id_produk"];
        $id_kategori=$c["id_kategori"];
        $id_produksi=$c["id_produksi"];
        $nama_produk=$c["nama_produk"];
        $deskripsi_produk=$c["deskripsi_produk"];
        $harga=$c["harga"];
        $gambar=$c["gambar"];
    }

    ?>
    <form action="proses_edit.php?id_produk=<?php echo $id_produk?>" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="number" name="id_produk" disabled value="<?php echo $id_produk ?>"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>
            <select name="id_kategori" id="id_kategori">
                    <option value="1" <?php if ($id_kategori == '1') echo 'selected'; ?>>Burger</option>
                    <option value="2" <?php if ($id_kategori == '2') echo 'selected'; ?>>Pelengkap</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Produksi</td>
            <td>:</td>
            <td>
            <select name="id_produksi" id="id_produksi">
                    <option value="1" <?php if ($id_produksi == '1') echo 'selected'; ?>>< 20 Menit</option>
                    <option value="2" <?php if ($id_produksi == '2') echo 'selected'; ?>>> 20 Menit</option>
                </select>
        </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_produk" value="<?php echo $nama_produk ?>"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi_produk" value="<?php echo $deskripsi_produk ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga" value="<?php echo $harga ?>"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" value="<?php echo $gambar ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" id="Submit" value="Simpan">


    </form>
</body>
</html>