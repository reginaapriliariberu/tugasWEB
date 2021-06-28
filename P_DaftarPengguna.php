<?php
require 'koneksi.php';



$dataPengguna = query("SELECT * FROM user");
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: index.php");
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
                            <a href="admin.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Home</a>
                            <a href="daftar_menu.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px; padding:15px">Daftar Menu</a>
                            <a href="pesanan.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Pesanan</a>
                            <a href="About.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">About</a>
                            <a href="logout.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="col-10" style="background-color: #CCF5FC">

                    <h1 style="text-align: center; font-size: 30px; padding-top: 10px;"><span class="font-weight-bold">KELONGTONG BARU</span></h1>

                    <p class="lead font-weight-bold" style="text-align: center; font-size: 20px; ">"Daftar Data Pengguna dan Karyawan"</p>
                    <!-- Jumbotron -->
                    <!-- <div class="jumbotron jumbotron-fluid text-center" style="background-color: #CCF5FC; ">
                    <div class="container">
                        <h1 class="display-8"><span class="font-weight-bold">RESTORAN KELONGTONG BARU</span></h1>
                        <hr>
                        <p class="lead font-weight-bold">"Selamat Datang di Beranda Admin"</p>
                    </div>
                </div> -->
                    <!-- Akhir Jumbotron -->
                    <!-- Tabel Data Karyawan -->
                    <!-- <div class="container"> -->
                    <div class="modal-footer">
                        <a href="register.php" class="btn btn-info mt-3" ">TAMBAH DATA PENGGUNA</a>
                </div>
                
                <table border=" 5" class="table table-hover">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>

                                    <th>Nama Pengguna</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>

                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dataPengguna as $row) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $row["username"] ?></td>

                                        <td><?= $row["nama_lengkap"] ?></td>
                                        <td><?= $row["jenis_kelamin"] ?></td>
                                        <td><?= $row["tanggal_lahir"] ?></td>
                                        <td><?= $row["alamat"] ?></td>
                                        <td><?= $row["hp"] ?></td>
                                        <td><?= $row["status"] ?></td>
                                        <td>
                                            <a href="P_Ubah_Data1.php?id_user=<?= $row["id_user"] ?>" class="btn btn-info btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="hapusDataPengguna.php?id_user=<?= $row["id_user"] ?>" onclick=" return confirm('Apakah Data Ingin Dihapus?');" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-pencil"></i>Delete</a>

                                        </td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                    </div>
                    <!-- Akhir Data Karyawan -->

                </div>
            </div>
            <!-- </div> -->
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