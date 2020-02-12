<?php 

	include '../koneksi.php';

		$id_catatan = $_GET['id'];

		$ambil = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan='$id_catatan'");
		$pecah = mysqli_fetch_assoc($ambil);
		$fotocatatan = $pecah['foto_catatan'];
		if (file_exists("../gambar_catatan/$fotocatatan")) 
		{
			unlink("../gambar_catatan/$fotocatatan");
		}

		$sql = mysqli_query($koneksi, "DELETE FROM catatan WHERE id_catatan='$id_catatan'")or die(mysqli_error());

			echo "<script>alert('Terhapus !');</script>";
			echo "<script>location='index.php';</script>";

 ?>