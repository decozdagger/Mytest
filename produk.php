<?php
//config database
include('config.php');

//ambil database
$sql = "SELECT * FROM produk";
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PRODUK</title>
    </head>

<body>
    <header>CRUD PRODUK</header>
    <nav>
        <a href="tambah.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>keterangan</th>
                <th>harga</th>
                <th>jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($produk = mysqli_fetch_array($query)){
                echo "<tr>";
                    echo "<td>".$produk['id']."</td>";
                    echo "<td>".$produk['nama_produk']."</td>";
                    echo "<td>".$produk['keterangan']."</td>";
                    echo "<td>".$produk['harga']."</td>";
                    echo "<td>".$produk['jumlah']."</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=".$produk['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
                    echo "</td>";
            
                    echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p> Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html>

