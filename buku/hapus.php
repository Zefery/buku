<?php

include("login/config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM ukk_perpustakaan WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: home-page.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>