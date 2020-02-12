<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css">
	<script type="text/javascript" src="../bs/js/jquery.js"></script>
	<script type="text/javascript" src="../bs/js/bootstrap.min.js"></script>
<body>
<?php include 'tambahcatatan.php'; ?>
<?php include 'caricatatan.php'; ?>
<?php include 'ubahdata.php'; ?>
		<nav class="navbar navbar-fixed-top" style="background-color: #F8F8FF;">
			<div class="container-fluid" >
				<div class="navbar-header" style="margin-left: 8%;">
					<a href="index.php" class="navbar-brand" style="color: #dd0a37;">MY WEB NOTES</a>
				</div>
				<nav id="nav">
					<ul class="main-nav nav navbar-nav">
						<!-- popup tambah catatan -->
						<li><a href="" data-toggle="modal" data-target="#tbhCatatan">Tambah Catatan</a></li>
						
						<!-- popup cari catatan -->
						<li><a href="" data-toggle="modal" data-target="#caricatatan">Cari Catatan</a></li>
						
						<!-- popup ubah info -->
						<li><a href="" data-toggle="modal" data-target="#ubahdata">Ubah Informasi</a></li>
						
					</ul>
				</nav>
				<div class="navbar-right" style="margin-right: 8%; margin-top: 7px;">
					<a href="logout.php" class="btn btn-danger">Log Out</a>
				</div>
			</div>
		</nav>

</body>
</html>