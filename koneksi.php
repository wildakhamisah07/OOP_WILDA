<?php

$_hostname = "localhost";
$_username = "root";
$_password = "";
$_database = "db_oop_kendaraan";

$koneksi = mysqli_connect($_hostname, $_username, $_password, $_database);

if (!$koneksi) {
    die('koneksi gagal' . mysqli_connect_error());
}
