<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<body>

	<div class="container" style="border-radius: 7px; background-color: #F8F8FF;">
		<h3>Catatan <span style="color: #dd0a37;"><b><?php 
				$idadm=$_SESSION['id'];
				$sql=$koneksi->query("SELECT * FROM admin WHERE id='$idadm'");
				while ($e=$sql->fetch_assoc()) {
					echo $e['nama_lengkap']; }?></h3>
		<br>
					
		<div class="row">
			<!-- hasil cari -->
			<?php 
			 while($catatan = mysqli_fetch_assoc($ambil)) { 

			?>
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="../gambar_catatan/<?php echo $catatan['foto_catatan']; ?>" style="width: 200px; height: 250px;">
					<div class="caption">
						<h4><?php echo $catatan['judul_catatan']; ?></h4>
						<h5>Tanggal : <?php echo $catatan['tanggalpembuatan']; ?></h5>
						<a href="detailcatatan.php?id=<?php echo $catatan['id_catatan']; ?>" class="btn btn-success">Buka</a>
						<a href="aksihapuscatatan.php?id=<?php echo $catatan['id_catatan']; ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>

			</div>
			<?php } ?>
			
		</div>
	</div>

</body>
</html>