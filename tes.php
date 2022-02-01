<?php 
	require ('./config.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bagus Danukusumo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<!-- loader
	<div class="bg-loader">
		<div class="loader"></div>
	</div> -->

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.youtube.com/channel/UChh2LkYclnwFnL_tTqOpiDw"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UChh2LkYclnwFnL_tTqOpiDw"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UChh2LkYclnwFnL_tTqOpiDw"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php">Bagus Danukusumo</a></h1>
			<ul>
			<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="galery.php">GALERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li class="active"><a href="tes.php">FORM PENDAFTARAN</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Service</p>
		</div>
	</section>
<body>
	
	<?php if(isset($_GET['status'])): ?>
		<p>
			<?php
				if($_GET['status'] == 'sukses'){
					echo '<script>alert("Sukses Menginput Data")</script>';
				} else {
					echo '<script>alert("GAGAL Menginput Data")</script>';

				}
			?>
		</p>
	<?php endif; ?>

	<div>
	<form action="proses-input.php" method="POST">
	<fieldset>
        <div class="form-group col-sm-4 mx-auto mt-2">
            <label for="namapj">Nama Penanggung Jawab</label>
            <input type="text" name="namapj" class="form-control" id="namapj" placeholder="Masukan Nama Penganggung Jawab" required>
        </div>
        <div class="form-group col-sm-4 mx-auto mt-2">
            <label for="nohp">Masukan Nomor Hp</label>
          <input type="number" name="nohp" class="form-control" id="nohp" placeholder="Masukan Nomor Hp" required>
        </div>
        <div class="form-group col-sm-4 mx-auto">
            <label for="turnamen">Tournament</label>
            <select class="form-control" name="turnamen" id="turnamen" required>
                <option value="">- Pilih Jenis Tournament -</option>
                <option value="Futsal U20">Futsal U20</option>
                <option value="Futsal U15">Futsal U15</option>
                <option value="Futsal Umum">Futsal UMUM</option>
            </select>
        </div>
        <div class="form-group col-sm-4 mx-auto">
            <label for="alamat">Masukkan Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group col-sm-4 mx-auto mt-2">
          <label for="email">Alamat Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Alamat Email" required>
        </div>
        <div class="form-group col-sm-4 mx-auto">
            <label for="kotaasal">Pilih Kota Asal</label>
            <select class="form-control" name="kotaasal" id="kotaasal" required>
                <option value="">- Pilih Kota Asal -</option>
                <option value="Bekasi">Bekasi</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Tangerang">Tangerang</option>
            </select>
        </div>
        
        <div class="col-sm-4 mx-auto">
            <button type="submit" name="submit" class="btn btn-primary mr-3">Simpan</button>
            <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
        </div>
		<fieldset>
      </form>
			</div>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="far fa-calendar-alt"></i></div>
					<h4>EVENT ORGENIZER</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-file-video"></i></div>
					<h4>VIDIO EDITING</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-edit"></i></div>
					<h4>DESIGN</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-camera-retro"></i></div>
					<h4>Dokumentasi</h4>
				</div>
			</div>
		</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Random Sport. All Rights Reserved.</small>
		</div>
	</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>