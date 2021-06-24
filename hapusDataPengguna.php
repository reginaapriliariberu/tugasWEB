<?php

require 'koneksi.php';
$id_user = $_GET["id_user"];


if (hapus($id_user) > 0) {
    echo "
         <script>
          alert('Data berhasil dihapus');
          document.location.href='P_DaftarPengguna.php'; 
         </script>
        ";
} else {
    echo "
         <script>
          alert('Data gagal dihapus');
          document.location.href='P_DaftarPengguna.php'; 
         </script>
        ";
}
