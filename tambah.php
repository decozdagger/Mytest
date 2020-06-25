<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Produk</title>
</head>

<body>
    <header>
        <h3>Form Tambah Produk</h3>
    </header>

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Produk: </label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga"/>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah"/>
        </p>
        <p>
            <input type="submit" value="tambah" name="tambah" />
        </p>
        </fieldset>
    </form>

    </body>
</html>