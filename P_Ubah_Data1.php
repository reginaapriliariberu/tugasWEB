<?php
// koneksi ke database
include 'koneksi.php';
// cek apakah tombol submit sudah dikklik

$id_user = $_GET['id_user'];
$data_pengguna = query("SELECT * FROM user WHERE id_user=$id_user")[0];
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
                    <img src="images/d.png" style=" width: 3%; margin-bottom: 13px; " class="rounded " alt="...">Kelongtong
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
                            <a href="logout.php" class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4" style="border: 0px;  padding:15px">Logout</a>
                        </div>
                    </div>
                </div>

                <div class="col-10" style="background-color: #CCF5FC">
                    <!-- Jumbotron -->
                    <!-- <div class="jumbotron jumbotron-fluid text-center" style="background-color: #CCF5FC; ">
                    <div class="container">
                        <h1 class="display-8"><span class="font-weight-bold">RESTORAN KELONGTONG BARU</span></h1>
                        <hr>
                        <p class="lead font-weight-bold">"Selamat Datang di Beranda Admin"</p>
                    </div>
                </div> -->
                    <!-- Akhir Jumbotron -->
                    <!-- Form Registrasi -->
                    <div class="container">

                        <div class="card p-2 mb-0" style="background-color: #CCF5FC;">
                            <form action="" method="post">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $data_pengguna["id_user"]; ?>">
                                <div class="form-group">

                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $data_pengguna["username"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="passworrd">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="<?= $data_pengguna["password"]; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data_pengguna["nama_lengkap"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $data_pengguna["jenis_kelamin"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data_pengguna["tanggal_lahir"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_pengguna["alamat"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor Handphone</label>
                                    <input type="text" class="form-control" id="hp" name="hp" value="<?= $data_pengguna["hp"]; ?>">
                                </div>
                              
                                <!-- <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?= $data_pengguna["status_daftar"]; ?>">
        </div> -->

                                <!-- <div class="form-group">
                                    <label>Status</label>
                                    <select type="text" name="status" id="status" class="form-control select2">
                                        <option value="Pelanggan" <?= ($data_pengguna["status"] == "Pelanggan") ? 'selected' : ''; ?>>-- Pilih Satu --</option>
                                        <option value="admin" <?= ($data_pengguna["status"] == "admin") ? 'selected' : ''; ?>>Admin</option>
                                        <option value="kasir" <?= ($data_pengguna["status"] == "kasir") ? 'selected' : ''; ?>>Kasir</option>
                                        <option value="pelayan" <?= ($data_pengguna["status"] == "pelayan") ? 'selected' : ''; ?>>Pelayan</option>
                                    </select>

                                </div> -->
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value="<?= $data_pengguna["status"]; ?>">
                                </div>
                        </div>



                        <div class="modal-footer" style="padding-top: 20px;">
                            <!-- <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button> -->
                            <button type="submit" id="edit1" name="edit1" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>


                        </form>
                        <?php
                        if (isset($_POST['edit1'])) {
                            $usernamee = htmlspecialchars($_POST["username"]);
                            $passworrdd = htmlspecialchars($_POST["password"]);
                            $nama_pengguna = htmlspecialchars($_POST["nama_lengkap"]);
                            $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
                            $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
                            $alamat = htmlspecialchars($_POST["alamat"]);
                            $hp = htmlspecialchars($_POST["hp"]);
                            $status = htmlspecialchars($_POST["status"]);

                            global $koneksi;
                            // move_uploaded_file($source, $folder . $nama_file);
                            $EDITT = mysqli_query($koneksi, "UPDATE user SET username='$usernamee', password='$passworrdd', nama_lengkap='$nama_pengguna', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', hp='$hp', status='$status' WHERE id_user='$id_user' ");
                            // $insert = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$stok', '$harga', '$nama_file')");

                            if ($EDITT) {
                                echo "
        <script>
         alert('Data berhasil diubah');
         document.location.href='P_DaftarPengguna.php'; 
        </script>
       ";
                            } else {
                                echo "
        <script>
         alert('Data gagal diubah, silahkan isi kembali data anda');
         document.location.href='P_DaftarPengguna.php'; 
        </script>
       ";
                            }
                        }

                        ?>
                    </div>

                </div>
            </div>
            <!-- Akhir Form Registrasi -->

        </div>
        </div>
        </div>
    </div>
  
      <footer class="bg-danger" style=" height: 70px;">
        <div class="atas">
        <label class="font-weight-bold"  style="margin-top: 20px; margin-left: 650px;">Sekian dan Terima Kasih </label>
        <img src="images/smile.png"  class="mr-1 ml-2" data-toggle="tooltip" title="Facebook">
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