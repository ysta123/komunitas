<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylejadwal.css"
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<title>Skater</title>
</head>
<body id="page-top">
<?php 
include '../config.php';


session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
?>
<!-- Navbar -->
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <div class="container">
      <a class="navbar-brand font-weight-bold" href="index.php">
        <img src="logo.png" width="30" height="30" alt="">SKATER</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="index.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="jadwal.php">JADWAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="kontak.php">KONTAK</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['username'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../home.html">Logout</a>
        </div>
      </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
<div class="jumbotron">
</div>
<!-- akhir jumbotron -->
    <!-- akhir navbar -->

    <section class="jadwal" id="jadwal">
      <div class="container">
        <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Jadwal</h2>
          <hr>
        </div>
        </div>
      </div>
    </section>

    <!-- Tabel Jadwal -->
<table class="table table-striped table-dark text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Tempat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>10 November2019</td>
      <td>16:00</td>
      <td>Skatepark Budi Luhur<br>RT.1/RW.2, Petukangan Utara, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>17 November 2019</td>
      <td>16:00</td>
      <td>Twilo Skatepark<br>Jl. Kemang II No.37, RT.13/RW.1, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>24 November 2019</td>
      <td>16:00</td>
      <td>Twilo Skatepark<br>Jl. Kemang II No.37, RT.13/RW.1, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</td>
    </tr>
  </tbody>
</table>
    <!-- akhir Tabel Jadwal -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright 2019. |by. Skater Jakarta</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>