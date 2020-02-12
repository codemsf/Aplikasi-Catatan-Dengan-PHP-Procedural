<?php

	include '../koneksi.php';
	session_start();
	include 'headlogin.php';
	$idcatatan = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Catatan</title>
	<link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css">
	<script type="text/javascript" src="../bs/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../bs/css/inimsf.css">	
	    <script type="text/javascript" src="../bs/js/inimsf.js">
    </script>
	<script type="text/javascript" src="../bs/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #D3D3D3;  padding-top: 4%">

	<?php 
	$ambil = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan='$idcatatan'");
	$pecah = mysqli_fetch_assoc($ambil);

	 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img class="zoom" src="../gambar_catatan/<?php echo $pecah['foto_catatan']; ?>">
					<div class="caption">
						<p style="background-color: lightblue; border-radius: 4px; text-align: center;"><?php echo $pecah['tanggalpembuatan']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="container-fluid" style="background-color: white; border-radius: 4px;">
					<h2>
						<?php echo $pecah['judul_catatan']; ?>
					</h2>
					<p>
						<?php echo nl2br(htmlspecialchars($pecah['isi_catatan'])); ?>
					</p>
				</div>
				<div class="caption">
					<br>
					<a href="ubahctt.php?id=<?php echo $pecah['id_catatan'] ?>" class="btn btn-info">Ubah Catatan</a>
					<a href="aksihapuscatatan.php?id=<?php echo $pecah['id_catatan']; ?>" class="btn btn-danger" name="hapus" value="hapus">Hapus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 2%;">
		<div class="jumbotron" style="background-color: #F8F8FF;">
			<div class="title">
				<h2>Gambar Tambahan <p><p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#tbhGambar">Tambah Gambar</a> </h2> <?php include 'tambahgambar.php'; ?>
			</div>
			<br>
			<div class="row">
				<?php 
				$a=$koneksi->query("SELECT * FROM gambar_tambahan WHERE id_catatan='$idcatatan'");
				while ($p2=$a->fetch_assoc()) {
				 ?>
				<div class="col-md-4">
					<div class="thumbnail">
					<img class="zoom" src="../gambar_tambahan/<?php echo $p2['gambar'] ?>"><br>
					<div class="caption">
					<h2><?php echo nl2br(htmlspecialchars($p2['deskripsi'])); ?></h2>
					</div>
				<a href="aksihapusgambar.php?id=<?php echo $p2['id_gambar']; ?>" class="btn btn-danger" name="hapus" value="hapus">Hapus</a>
				</div>
				</div>
				<?php 	} ?>
			</div>
		</div>
	</div>

</body>
</html>