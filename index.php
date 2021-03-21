<?php
 include 'function.php';
 $content = query("SELECT * FROM tb_artikel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');
    	.control{
    		margin-right: 100px;
    	}
      .row{
        margin-top: 60px;

      }
      .nav-item{
        color: #1dd1a1;
        font-family:  'Noto Sans', sans-serif;
      }
    </style>
	<title class="fs-3">Pintar IT</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Pintar IT</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active me-5" aria-current="page control" href="#" style=" color: #1dd1a1;"><i class="bi-house"></i> Home</a>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style=" color: #1dd1a1;" aria-expanded="false">
            Berita
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index2.html">Berita Hangat</a></li>
            <li><a class="dropdown-item" href="index3.html">Berita Terbaru</a></li>
          </ul>
        </li>

        </li>
         <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active me-5" aria-current="page control" href="./MyResume/index.html" style=" color: #1dd1a1;"><i class="bi-person"></i> Tentang</a>
        <li class="nav-item">
          <a class="nav-link" aria-current="page control" href="#" style=" color: #1dd1a1;"><i class="bi bi-person-plus"></i> Gabung</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class=" " style=" height: 860px; 
           background-color: #dfe6e9; border-radius: 20px;">

           <div class="container">
  <div class="row">
    <div class="col-7"></div>
      <div class="col-9"><br>
         <h2><b>PROGRAM STUDY TEKHNOLOGI IT DENGAN<br>SISTEM MODERN SANGAT DI GEMARI</b></h2>
        <img src="asset/tek1.jpg" class="img-fluid mt-0 " style="height: 200px; width: 400px; border-radius: 10px;">
        <h4><b>Program Study Tekhnologi</b></h4>
        <h6>Program studi Kurikulum dan Teknologi Pendidikan berfokus pada pengembangan kurikulum pendidikan dan pemanfaatan teknologi bagi dunia pendidikan. ... Tak hanya itu, para mahasiswa juga disiapkan supaya fasih dalam menggunakan teknologi dan komunikasi untuk dunia pendidikan dan proses belajar mengajar</h6>
        <br>
        <h6>Program studi Kurikulum dan Teknologi Pendidikan berfokus pada pengembangan kurikulum pendidikan dan pemanfaatan teknologi bagi dunia pendidikan. ... Tak hanya itu, para mahasiswa juga disiapkan supaya fasih dalam menggunakan teknologi dan komunikasi untuk dunia pendidikan dan proses belajar mengajar</h6>
      </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<footer class="text-center text-white rounded-top" style="background-color: #1dd1a1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fas fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Contact Me :
    <a class="text-warning stretched-link" href="">Bootstrap Riyan</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>



<!-- style="width: 396px;  height: 194px; left: 165px; margin-top: -51px;   border-radius: 10px;
 -->