<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: login.php");
} else {
?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Restoran Dessert Kelongtong</title>
  </head>

  <body>
    <header class="bg-danger" style=" height: 70px;">
      <div class="atas">
        <H3 style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: #ffff; padding-left: 0px; padding-top: 10px;">
          <img src="images/d.png" style=" width: 3%; margin-bottom: 13px; " class="rounded " alt="...">Dessert Kelongtong
        </H3>
      </div>
    </header>

    <div class="container-fluid" style="margin-top: 0px;">
      <div class="row"></div>
      <div class="row">
        <div class="col-2 px-0" height="700px ">
          <div style="height: 1500px;" class="bg-danger">
            <div class="list-group " style="padding-top: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
              <a href="user.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Home</a>
              <a href="menu_pembeli.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px; padding:15px">Daftar Menu</a>
              <a href="pesanan_pembeli.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Pesanan Anda</a>
              <a href="About.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">About</a>
              <a href="logout.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Logout</a>
            </div>
          </div>
        </div>

        <div class="col-10">
          <!-- Jumbotron -->
          <!-- <div class="jumbotron jumbotron-fluid text-center" style="background-color: #CCF5FC; ">
                    <div class="container">
                        <h1 class="display-8"><span class="font-weight-bold">RESTORAN KELONGTONG BARU</span></h1>
                        <hr>
                        <p class="lead font-weight-bold">"Selamat Datang di Beranda Admin"</p>
                    </div>
                </div> -->
          <!-- Akhir Jumbotron -->
          <!-- Menu -->
          <div class="container">
            <div class="judul text-center mt-5">
              <h3 class="font-weight-bold" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">RESTORAN DESSERT KELONGTONG </h3>
              <h5 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Selamat Datang di Restoran Dessert Kami</h5>
            </div>

            <div class="row mb-5 mt-5 ">
              <div class="col-md-6 d-flex justify-content-end">
                <div class="card bg-dark text-white border-light">
                  <img src="images/menu.jpg" class="card-img" alt="Lihat Daftar Menu">
                  <div class="card-img-overlay mt-5 text-center">
                    <a href="menu_pembeli.php" class="btn btn-info">LIHAT DAFTAR DESSERT</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 d-flex justify-content-start">
                <div class="card bg-dark text-white border-light">
                  <img src="images/menuP.jpg" class="card-img" alt="Lihat Pesanan">
                  <div class="card-img-overlay mt-5 text-center">
                    <a href="pesanan_pembeli.php" class="btn btn-info">LIHAT PESANAN ANDA</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Menu -->

        </div>

      </div>
    </div>
    </div>

    <footer class="bg-danger" style=" height: 70px;">
      <div class="atas">
        <label class="font-weight-bold" style="margin-top: 20px; margin-left: 650px;">Sekian dan Terima Kasih </label>
        <img src="images/smile.png" class="mr-1 ml-2" data-toggle="tooltip" title="Facebook">
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>

  </html>
<?php } ?>