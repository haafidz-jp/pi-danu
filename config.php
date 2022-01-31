<?php

$server = "localhost";
$user = "haafidzx_danu";
$password = "Power@123";
$nama_database = "haafidzx_db_tournament";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>