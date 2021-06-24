<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "database_kue"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal:".mysqli_connect_error());
    }
    

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function hapus($id_user)
{
    global $koneksi;
    $query = "DELETE FROM user WHERE id_user=$id_user";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
 ?>