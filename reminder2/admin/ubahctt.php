<!DOCTYPE html>
<html>
<head>
	<title>Detail Catatan</title>
	<link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css">
	<script type="text/javascript" src="../bs/js/jquery.js"></script>
	<script type="text/javascript" src="../bs/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #D3D3D3;  padding-top: 4%">

	<?php 

	include '../koneksi.php';
	session_start();
	include 'headlogin.php';

	$idcatatan = $_GET['id'];

	$ambil = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan='$idcatatan'");
	$pecah = mysqli_fetch_assoc($ambil);

	 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="../gambar_catatan/<?php echo $pecah['foto_catatan']; ?>">
					<div class="caption">
						<p style="background-color: lightblue; border-radius: 4px; text-align: center;"><?php echo $pecah['tanggalpembuatan']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="container-fluid" style="background-color: white; border-radius: 4px;">
					<form action="aksiubahctt.php" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo 	$idcatatan ?>"><br>
						<input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul_catatan']; ?>"><br>
						<textarea name="isi" class="form-control"><?php echo$pecah['isi_catatan']; ?></textarea><br>
					  <label>Ubah Gambar/Foto Catatan (MAKS 2MB)</label>
                        <input type="file" name="gambar"> <br>
                        <input type="hidden" name="gambarhapus" value="<?php echo $pecah['foto_catatan'] ?>">
				</div>
				<br>
                   <div class="caption">
					<button class="btn btn-info" name="edit">SIMPAN</button>
					<button type="reset" class="btn btn-danger" name="reset">RESET</button>
					<a href="detailcatatan.php?id=<?php echo $pecah['id_catatan']; ?>" class="btn btn-success">KEMBALI</a>
					</div>
			</form>
		</div>
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
					<img class="zoom" src="../gambar_tambahan/<?php echo $p2['gambar'] ?>" style="width: 300px; height: 250px;"><br>
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
