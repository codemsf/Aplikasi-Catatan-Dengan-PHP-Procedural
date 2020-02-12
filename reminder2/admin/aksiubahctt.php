
<?php 

include '../koneksi.php';

if (isset($_POST['edit'])) {
 	$id=$_POST['id'];
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];

	//ambil nama gabar
	$nama = $_FILES['gambar']['name'];
	// memberi nama sementara
	$lokasi = $_FILES['gambar']['tmp_name'];


//bila gambar diganti
	if (!empty($lokasi)) 
{
		//pisah nama dengan ekstensi
		$x = explode('.', $nama);
		//mencocokan ekstensi dengan ekstensi yang diperbolehkan
		$ekstensi_diperbolehkan = array('png','jpg');
		$ekstensi = strtolower(end($x));
		//validasi gambar yang dicocokan
		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			//ambil ukuran gambar
			$ukuran=$_FILES['gambar']['size'];
			//validasi ukuran gambar
			if ($ukuran<1044070) {
				//hapus data lama
				//ambil data dari form
				$gambarhapus=$_POST['gambarhapus'];
				//cari lokasi file lama
				$d= '../gambar_catatan/'.$gambarhapus;
				//hapus
				unlink("$d");

				//ubah nama gambar baru
				$nama_baru = round(microtime(true)).".".$ekstensi;
				//simpan file gambar ke directory
				move_uploaded_file($lokasi, "../gambar_catatan/".$nama_baru);
				//masukan semua data ke db
				$masuk=$koneksi->query("UPDATE catatan SET judul_catatan='$judul', isi_catatan='$isi', foto_catatan='$nama_baru' WHERE id_catatan='$id'");

			} else {
				echo "<script>alert('DATA TERLALU BESAR')</script>";
				echo "<script>location='detailcatatan.php?id=$id'</script>";
			}
		} else {
			echo "<script>alert('EKSTENSI FILE TIDAK DIPERBOLEHKAN!')</script>";
				echo "<script>location='detailcatatan.php?id=$id'</script>";
		}
	} else{
		//bila gambar tidak diubah
		$masuk=$koneksi->query("UPDATE catatan SET judul_catatan='$judul', 	isi_catatan='$isi' WHERE id_catatan='$id' ");
	}

		//validasi data masuk atau belum
	if ($masuk) {
          echo "<script>alert('DATA BERHASIL DI UPDATE!')</script>";
				echo "<script>location='detailcatatan.php?id=$id'</script>";
        } else {
            echo "<script>alert('DATA GAGAL DI UPDATE!')</script>";
          echo "<script>location='detailcatatan.php?id=$id'</script>";
        }
}

 ?>