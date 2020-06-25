<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama_produk = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];    

    // buat query
    $sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah, id) VALUE ('$nama_produk', '$keterangan', '$harga', '$jumlah', NULL)";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: produk.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: produk.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>