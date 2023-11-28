<?php

$koneksi = mysqli_connect("localhost", "root", "", "keretaapi");

if (!$koneksi) {
	die("Gagal Menghubungkan Silahkan Check kembali" . mysqli_connect_error()) ;
}

?>