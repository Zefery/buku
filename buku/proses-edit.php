<?php

include('login/config.php');

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){    

    // ambil data dari formulir
    $id = $_POST['id'];
    $isbn = $_POST['no_isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];
    $terbit = $_POST['tanggal_terbit'];
    $tahun = $_POST['tahun_terbit'];

    // buat query update
    $sql = "UPDATE ukk_perpustakaan SET no_isbn='$isbn', judul='$judul', pengarang='$pengarang',kategori='$kategori', tanggal_terbit='$terbit' ,tahun_terbit='$tahun' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: home-page.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>