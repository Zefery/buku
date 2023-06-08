<?php

include('login/config.php');

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){ //jika button daftar di klik

    // ambil data dari formulir
    $isbn = $_POST['no_isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];
    $terbit = $_POST['tanggal_terbit'];
    $tahun = $_POST['tahun_terbit'];

    // buat query
    $sql = "INSERT INTO ukk_perpustakaan (no_isbn, judul, pengarang, kategori, tanggal_terbit, tahun_terbit) VALUE ('$isbn', '$judul', '$pengarang', '$kategori', '$terbit', '$tahun')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: home-page.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: home-page.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>