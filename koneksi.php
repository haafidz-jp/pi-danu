<?php

// $servername = "localhost";
// $database = "db_tournament";
// $username = "root";
// $password = "";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conn);
// 

	//melakukan koneksi ke database
	$koneksi = mysqli_connect("us-cdbr-east-05.cleardb.net", "b53269878fd1ca", "e9532d3b"); // masukan host, username, password
	$db = mysqli_select_db("heroku_4c38b44740000e4"); // pilih nama database

	// membuat variabel isi form
	$namapj = $_REQUEST['namapj'];
	$nohp = $_REQUEST['nohp'];
	$turnamen = $_REQUEST['turnamen'];
	$alamat = $_REQUEST['alamat'];
	$email = $_REQUEST['email'];
	$kotaasal = $_REQUEST['kotaasal'];

	//membuat Query untuk menyimpan data
	$sql="INSERT INTO data_peserta (namapj, nohp, turnamen, alamat, email, kotaasal) VALUE ('$namapj','$nohp','$turnamen', '$alamat', '$email', '$kotaasal' )";

	//menyimpan data ke database
	mysql_query($sql);
	echo "<alert> Data Telah Disimpan </alert>";
?>