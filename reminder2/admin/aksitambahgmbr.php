<?php 
include '../koneksi.php';

if (isset($_POST['go'])) {
    $idgmbr = $_POST['idgmbr'];
    $idctt = $_POST['idctt'];
    $deskripsi = $_POST['deskripsi'];

    $ekstensi_diperbolehkan = array('png','jpg');
    $ukuran=$_FILES['gambar']['size'];
    $nama=$_FILES['gambar']['name'];
    $x= explode('.', $nama);
    $ekstensi=strtolower(end($x));
    $nsmn=$_FILES['gambar']['tmp_name'];
    $nama_baru=round(microtime(true)).".".$ekstensi;
    if (in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
    if ($ukuran < 2044070) {
    move_uploaded_file($nsmn, "../gambar_tambahan/".$nama_baru);
     $masuk=mysqli_query($koneksi, "INSERT INTO `gambar_tambahan`(`id_gambar`, `id_catatan`, `gambar`, `deskripsi`) VALUES ('$idgmbr','$idctt','$nama_baru','$deskripsi')");
            
        //validasi data masuk atau belum
        if ($masuk) {
                echo "<script>alert('TERSIMPAN')</script>";
                echo "<script>location='detailcatatan.php?id=$idctt'</script>";
            } else {
                 echo "<script>alert('GAGAL')</script>";
                echo "<script>location='detailcatatan.php?id=$idctt'</script>";
            }
        }
    }
}





