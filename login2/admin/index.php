<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_2.css"
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

    
	<!-- <div class="jumbotron">
  		<div class="container">
  			<h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="font-weight-bold">SKATERS JAKARTA</span></h1>
  <hr class="my-4">
</div>
</div> -->

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="skate.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="font-weight-bold">SKATER JAKARTA</span></h1>
        <hr class="my-4">
      </div>
    </div>
    <div class="carousel-item">
      <img src="skate.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="skate.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- akhir carousel -->

<!-- About Us -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Tentang Kami</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p class="text-justify">Visi<br>Kami Pertama:
            Kami poetra dan poetri Indonesia, mengakoe bertoempah darah jang satoe, tanah Indonesia.<br>
            Kedoea:
            Kami poetra dan poetri Indonesia mengakoe berbangsa jang satoe, bangsa Indonesia.<br>
            Ketiga:
            Kami poetra dan poetri Indonesia mendjoendjoeng bahasa persatoean, bahasa Indonesia.</p>
          </div>
          <div class="col-sm-6">
            <p class="text-justify">Misi<br>Kami Pertama:
            Kami poetra dan poetri Indonesia, mengakoe bertoempah darah jang satoe, tanah Indonesia.<br>
            Kedoea:
            Kami poetra dan poetri Indonesia mengakoe berbangsa jang satoe, bangsa Indonesia.<br>
            Ketiga:
            Kami poetra dan poetri Indonesia mendjoendjoeng bahasa persatoean, bahasa Indonesia.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir About Us -->

    <!-- Photos -->
    <section class="photos" id="photos">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Foto</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <a href="">
              <img src="photo/1.jpg"  alt="" class="img-thumbnail">
              <div class="text1">
                <h8>15 Oktober 2019</h8>
              </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="">
              <img src="photo/2.jpg"  alt="" class="img-thumbnail">
              <div class="text1">
                <h8>20 Oktober</h8>
              </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="">
              <img src="photo/3.jpg" alt="" class="img-thumbnail">
              <div class="text1">
                <h8>15 November 2019</h8>
              </div>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="">
              <img src="photo/4.jpg" alt="" class="img-thumbnail">
              <div class="text1">
                <h8>08 Desember 2019</h8>
              </div>
            </a>
          </div> 
        </div>
      </div>
    </section>
    <!-- akhir Photos -->


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
</div>
</body>
</html>