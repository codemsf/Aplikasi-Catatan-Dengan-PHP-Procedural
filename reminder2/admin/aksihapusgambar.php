<?php 

	include '../koneksi.php';

		$id_gambar = $_GET['id'];

		$ambil = mysqli_query($koneksi, "SELECT * FROM gambar_tambahan WHERE id_gambar='$id_gambar'");
		$pecah = mysqli_fetch_assoc($ambil);
		$gambar = $pecah['gambar'];
		$idctt=$pecah['id_catatan'];
		$sql = mysqli_query($koneksi, "DELETE FROM gambar_tambahan WHERE id_gambar='$id_gambar'");
		if (file_exists("../gambar_tambahan/$gambar")) 
		{
			unlink("../gambar_tambahan/$gambar");
			}
		if ($sql) {
			echo "<script>alert('Terhapus !');</script>";
		   echo "<script>location='detailcatatan.php?id=$idctt'</script>";
		} else {
			echo "<script>alert('GAGAL !');</script>";
		   echo "<script>location='detailcatatan.php?id=$idctt'</script>";
		}