<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


  <title>Halaman Login</title>
</head>

<body>
  <!-- <div class="container1">
    <h5>haloo</h5>
  </div> -->
  <!-- Form Login -->

  <div class="container" style="background-color: #DA2525; color: #ffff;" >
    
    <h4 style="text-align: left;  ">Log in</h4>
    <h6 style="text-align: left;  ">ini cepat dan mudah</h6>
    <hr style="height:1px;border:none;color:#333;background-color:#ffff;">
    <form method="POST" action="" >
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
        </div>
      </div>
      <div class="mb-3">
        <small><a href="register1.php" style="color: #ffff;">Belum Punya Akun ? Buat Akun Anda !</a></small>
      </div>
      <button type="submit" name="submit" class="btn btn-light" style="color: #DA2525; font-weight: bold;">LOGIN</button>
      <button type="reset" name="reset" class="btn btn-light" style="color: #DA2525; font-weight: bold;">RESET</button>
    </form>
    <!-- Akhir Form Login -->

    <!-- Eksekusi Form Login -->
    <?php
    if (isset($_POST['submit'])) {
      $user = $_POST['username'];
      $password = $_POST['password'];

      // Query untuk memilih tabel
      $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
      $hasil = mysqli_fetch_array($cek_data);
      $status = $hasil['status'];
      $login_user = $hasil['username'];
      $row = mysqli_num_rows($cek_data);

      // Pengecekan Kondisi Login Berhasil/Tidak
      if ($row > 0) {
        session_start();
        $_SESSION['login_user'] = $login_user;

        if ($status == 'admin') {
          echo "<script> alert ('Login Berhasil!');document.location.href='admin.php'</script>";
         
        } elseif ($status == 'pelanggan') {
          echo "<script> alert ('Login Berhasil!');document.location.href='user.php'</script>";
        
        }
      } else {
        echo "<script> alert ('Login Gagal, Username atau Password salah!');document.location.href='index.php'</script>";
      }
    }
    ?>
  </div>
  <!-- Akhir Eksekusi Form Login -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>