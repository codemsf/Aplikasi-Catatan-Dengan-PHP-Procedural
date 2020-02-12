<?php

	include 'koneksi.php';
	session_start();

	$name = $_POST['username'];
	$pass = $_POST['password'];

	$login = $koneksi->query("SELECT * FROM admin WHERE username='$name' AND password='$pass'");
	$tes = mysqli_num_rows($login);

	if ($tes > 0) 
	{
		$data=mysqli_fetch_assoc($login);
		$_SESSION['id']=$data['id'];
		echo "<script>location='admin/index.php';</script>";
	} else {
		echo "<script>alert('Data yang Anda Masukan Salah');;</script>";
		echo "<script>location='index.php';</script>";
	}

?>