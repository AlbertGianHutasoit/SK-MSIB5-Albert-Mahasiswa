<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
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
    <script>
        $(document).ready(function () {
            $('input').on('input', function () {
                var allFilled = true;
                $('input').each(function () {
                    if ($(this).val() === '') {
                        allFilled = false;
                        return false;
                    }
                });

                if (allFilled == true) {
                    $('#Submit').prop('disabled', false);
                } else {
                    $('#Submit').prop('disabled', true);
                }
            });
        });
    </script>
</head>
<body>
    ADD PRODUK :
    <form action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="number" name="id_produk"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>
                <select name="id_kategori" id="id_kategori">
                    <option value="1">Burger</option>
                    <option value="2">Pelengkap</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Produksi</td>
            <td>:</td>
            <td>
                <select name="id_produksi" id="id_produksi">
                    <option value="1">< 20 menit</option>
                    <option value="2">> 20 menit</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_produk"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi_produk"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td>
                <input type="file" name="gambar" id="exampleInputFile">
            </td>
        </tr>
    </table>
    <input type="submit" name="Submit" id="Submit" value="Simpan">

    </form>
</body>
</html>