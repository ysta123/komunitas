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
<form action="../simpankomentar.php" method="post">
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
            <a class="nav-link js-scroll-trigger" href="kontak.html">KONTAK</a>
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
     <!-- jumbotron -->
<div class="jumbotron">
</div>
    <!-- akhir jumbotron -->

    <!-- kontak -->
    <section class="kontak" id="kontak">
      <div class="container">
        <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>KONTAK</h2>
          <hr>
        </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body text-center">
                <h5 class="card-title">Kontak Kami</h5>
              </div>
            </div>
            <ul class="list-group text-justify ">
              <li class="list-group-item">
                <i class="fab fa-instagram">  @skate_jakarta</i>
              </li>
              <li class="list-group-item">
                <i class="fab fa-facebook-f"> Skate Jakarta </i>
              </li>
              <li class="list-group-item">
                <i class="fab fa-twitter">  @skate_jakarta</i>
              </li>
              <li class="list-group-item">
                <i class="fab fa-whatsapp"> 0895330034458</i>
              </li>
              <li class="list-group-item">
                <i class="fas fa-envelope-square">  skate_jakarta48@gmail.com</i>
              </li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukan Email">
              </div>
              <div class="form-group">
                <label for="komentar">Komentar</label>
                <textarea name="komentar" name="komentar" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim</button>  
              </div>
              <a href="../tampilkomentar.php">[Lihat Komentar]</a></td>
            </form>
          </div>


        </div>
    </section>
    <!-- akhir kontak -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright 2019. | Built by. Skater Jakarta</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </form>
  </body>
</html>