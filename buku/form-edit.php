<?php

    include("login/config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: home-page.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM ukk_perpustakaan WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $ukk_perpustakaan = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="form.css">
</head>

<body >
    <header>
        <h1>Formulir Edit Siswa</h1>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $ukk_perpustakaan['id'] ?>" />

        <p>
            <label for="no_isbn">No ISBN </label>
            <input type="text" name="no_isbn" placeholder="No ISBN" value="<?php echo $ukk_perpustakaan['no_isbn'] ?>" />
        </p>
        <p>
            <label for="judul">Judul </label>
            <input type="text" name="judul" value="<?php echo $ukk_perpustakaan['judul'] ?>">
        </p>
        <p>
            <label for="pengarang">Pengarang</label>
            <label><input type="text" name="pengarang" value="<?php echo $ukk_perpustakaan['pengarang'] ?>"></label>
        </p>
        <p>
            <label for="kategori">Judul </label>
            <input type="text" name="kategori" placeholder="kategori" value="<?php echo $ukk_perpustakaan['kategori'] ?>" />
        </p>
        <p>
            <label for="tanggal_terbit">Tanggal Terbit </label>
            <label><input type="text" name="tanggal_terbit" value="<?php echo $ukk_perpustakaan['tanggal_terbit'] ?>"></label>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit </label>
            <input type="text" name="tahun_terbit" value="<?php echo $ukk_perpustakaan['tahun_terbit'] ?>"/>
        </p>
        <p>
        <button type="submit" value="Simpan" name="simpan">Simpan</button>
        </p>

        </fieldset>


    </form>

    <div class="input-group">
        <a href="list-siswa.php" class="btn">Tabel</a>
    </div>
    </body>
</html>