<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <header>
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
         <p>
            <label for="mo_isbn">No ISBN </label>
            <label><input type="text" name="no_isbn" ></label>
        </p>
        <p>
            <label for="judul">Judul </label>
            <input type="text" name="judul">
        </p>
        <p>
            <label for="pengarang">Nama Pengarang </label>
            <input type="text" name="pengarang" placeholder="Nama pengarang" />
        </p>
        <p>
            <label for="kategori">Kategori </label>
            <label><input type="text" name="kategori" ></label>
        </p>
        <p>
            <label for="tanggal_terbit">Tanggal Terbit </label>
            <label><input type="text" name="tanggal_terbit" ></label>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit </label>
            <input type="text" name="tahun_terbit" placeholder="tahun_terbit" />
        </p>
        <p>
            <button type="submit" value="Daftar" name="daftar">Daftar</button>
            <button class="tombol"><a href="index.php" class="tombol" style="text-decoration:none">Halaman Utama</a></button>       
        </p>
           
        </fieldset>
        
    </form>
            
    </body>
</html>
