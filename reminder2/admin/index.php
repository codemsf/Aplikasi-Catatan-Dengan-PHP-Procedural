<?php
	include '../koneksi.php';
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		echo "<script>alert('Anda Harus Login !');</script>";
		echo "<script>location='../index.php';</script>";
		exit();
	}
?>
<?php include 'headlogin.php'; ?>
<!-- session -->
<!-- <pre><?php print_r($_SESSION) ?></pre> -->
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body style="background-color: #D3D3D3; padding-top: 4%">

	<?php 
/*	<!-- isi -->*/

	if (isset($_POST['cari'])) {
	$us=$_POST['us'];
	 $ambil = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan like '$us' or judul_catatan like '$us' or isi_catatan like '$us' ");
	 echo "<center>"."<b>HASIL PENCARIAN : ".$us."</>"."<br>"."<a href='index.php'>KEMBALI</a>"."</enter>";
} else {
			 $ambil = mysqli_query($koneksi, "SELECT * FROM catatan ORDER BY tanggalpembuatan ASC");
			}

include 'allbody.php';
		
?>

</body>
</html>