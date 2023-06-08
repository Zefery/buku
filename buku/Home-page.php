<?php 

    include("login/config.php"); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Growup CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- BOX Icons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- ICON -->
    <link rel="shortcut icon" href="assets/img/brand/favicon-bar.svg" type="image/x-icon">

    <!-- table -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- JS -->
    <script async src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script async src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script async src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Growup</title>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/brand/growup-logo.svg" alt="brand">
                <span>Grow up</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Product</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contatc</a>
                </div>
                <a href="#" class="btn btn-primary shadow-none">Get started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy" data-aos="fade-up" data-aos-duration="3000">
                        <div class="text-label">
                            Changes your bussines is more better
                        </div>
                        <div class="text-hero-bold">
                            Grow Up Your Mind In the future.
                        </div>
                        <div class="text-hero-regular">
                            There are so many variations passages of management Your mindset about bussines in your
                            company or agency
                        </div>
                        <div class="cta">
                            <a href="form-daftar.php" class="btn btn-primary shadow-none">Daftar</a>
                            <a href="#" class="btn btn-secondary shadow-none ms-3">See pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <img src="assets/img/illustration/Hero Image.svg" class="w-100" alt="img">
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>


<!-- Tabel -->


<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="display-4">Table</h1>
            <table id="table" class="table table-striped table-bordered">
        <thead>
        <tr>
                <th>No</th>
                <th>No IBSN</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Tanggal Terbit</th>
                <th>Tahun Terbit</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM ukk_perpustakaan";
            $query = mysqli_query($conn, $sql);
    
            while($ukk_perpustakaan = mysqli_fetch_array($query)){
                echo "<tr>";
    
                echo "<td>".$ukk_perpustakaan['id']."</td>";
                echo "<td>".$ukk_perpustakaan['no_isbn']."</td>";
                echo "<td>".$ukk_perpustakaan['judul']."</td>";
                echo "<td>".$ukk_perpustakaan['pengarang']."</td>";
                echo "<td>".$ukk_perpustakaan['kategori']."</td>";
                echo "<td>".$ukk_perpustakaan['tanggal_terbit']."</td>";
                echo "<td>".$ukk_perpustakaan['tahun_terbit']."</td>";
    
                echo "<td>";
                echo "<a href='form-edit.php?id=".$ukk_perpustakaan['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$ukk_perpustakaan['id']."'>Hapus</a>";
                echo "</td>";
    
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
            </div>           
        </div>
    </div>
</body>

</html>