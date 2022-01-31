<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $namapj = $_POST['namapj'];
	$nohp = $_POST['nohp'];
	$turnamen = $_POST['turnamen'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$kotaasal = $_POST['kotaasal'];

    // buat query
    $sql = "INSERT INTO data_peserta (namapj, nohp, turnamen, alamat, email, kotaasal) VALUE ('$namapj', '$nohp', '$turnamen', '$alamat', '$email', '$kotaasal')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        // header('Location: index.php?status=sukses');
		echo '<META HTTP-EQUIV="Refresh" Content="0;">';
        header('Location: ./tes.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // header('Location: index.php?status=gagal');
        echo '<script>alert("GAGAL Menginput Data")</script>';
    }


} else {
    die("Akses dilarang...");
}

?>