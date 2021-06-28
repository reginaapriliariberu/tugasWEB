<?php
include('koneksi.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Restoran Dessert Kelongtong</title>
</head>

<body>
    <header class="bg-danger" style=" height: 70px;">
        <div class="atas">
            <H3
                style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; color: #ffff; padding-left: 0px; padding-top: 10px;">
                <img src="images/d.png" style=" width: 3%; margin-bottom: 13px; " class="rounded " alt="...">Dessert
                Kelongtong
            </H3>
        </div>
    </header>

    <div class="container-fluid" style="margin-top: 0px;">
        <div class="row"></div>
        <div class="row">
            <div class="col-2 px-0" height="700px ">
                <div style="height: 1500px;" class="bg-danger">
                    <div class="list-group "
                        style="padding-top: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
                        <a href="admin.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Home</a>
                        <a href="daftar_menu.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px; padding:15px">Daftar Menu</a>
                        <a href="pesanan.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Pesanan</a>
                        <a href="About.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">About</a>
                        <a href="logout.php"
                            class="list-group-item list-group-item-action bg-danger text-light fw-bolder fs-4"
                            style="border: 0px;  padding:15px">Logout</a>
                    </div>
                </div>
            </div>

            <div class="col-10" style="background-color: #CCF5FC">
                <div class="container">
                    <div class="judul-pesanan mt-5">

                        <h3 class="text-center font-weight-bold">DATA PESANAN PELANGGAN</h3>
                    </div>

                    <?php
                        $ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
                        ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>

                    <input type="text" name="id" value="<?php echo $pecah['id_pemesanan']; ?>">

                    <input type="text" name="tgl_pesan" value="<?php echo $pecah['tanggal_pemesanan']; ?>">

                    <input type="text" name="total" value="<?php echo number_format($pecah['total_belanja']); ?>">
                    <?php } ?>

                    <div class="judul-pesanan mt-5">

                        <h3 class="text-center font-weight-bold">DETAIL PESANAN</h3>

                    </div>
                    <?php
                        $ambil = $koneksi->query("SELECT * FROM pemesanan_produk JOIN produk ON pemesanan_produk.id_menu=produk.id_menu 
                            WHERE pemesanan_produk.id_pemesanan='$_GET[id]'");
                        ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <?php $subharga1 = $pecah['harga'] * $pecah['jumlah']; ?>
                    <input type="text" name="id_detail" value="<?php echo $pecah['id_pemesanan']; ?>">
                    <input type="text" name="id_packing" value="<?php echo $pecah['id_pemesanan_produk']; ?>">
                    <input type="text" name="id_menu" value="<?php echo $pecah['nama_menu']; ?>">
                    <input type="text" value="<?php echo number_format($pecah['harga']); ?>">
                    <input type="text" name="jumlah" value="<?php echo $pecah['jumlah']; ?>">
                    <input type="text" value="<?php echo number_format($pecah['harga'] * $pecah['jumlah']); ?>" name=""
                        id="">
                    <?php } ?>



                </div>

                <form action="" method="POST">
                    <button class="btn btn-success" type="submit" name="pack">Packing</button>
                </form>
            </div>
            <?php
                $id = $_POST['id'];
                $tgl_pesan = $_POST['tgl_pesan'];
                $total = $_POST['total'];
                if (isset($_POST['pack'])) {
                    $insert = mysqli_query($koneksi, "INSERT INTO packing (id, tgl_pesan, total) VALUES ('$id', '$tgl_pesan', '$total')");
                }
                ?>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
<?php } ?>