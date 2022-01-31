<?php

$server = "us-cdbr-east-05.cleardb.net";
$user = "b53269878fd1ca";
$password = "e9532d3b";
$nama_database = "heroku_4c38b44740000e4";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>