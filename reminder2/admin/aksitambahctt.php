<!-- METHOD -->
<?php
    
    include '../koneksi.php';

//ambil data dari form
    if (isset($_POST['tambah'])) 
    {
        $idc=$_POST['idctt'];
        $jud=$_POST['judul'];
        $isi=$_POST['isi'];
        $tanggal = date("Y-m-d");

        //kumpulan ekstensi yang diperbolehkan
        $ekstensi_diperbolehkan = array('png','jpg');
        //ambil ukuran gambar
        $ukuran = $_FILES['gambar']['size'];
        //ambil nama gambar
        $nama = $_FILES['gambar']['name'];
        // memisah nama dan ekstensi gambar
        $x = explode('.', $nama);
        //mengambil ekstensi untuk divalidasi
        $ekstensi = strtolower(end($x));
        //memberi nama sementara ke gambar
        $nsmn = $_FILES['gambar']['tmp_name'];
        //mengubah nama gambar
        $nama_baru = round(microtime(true)) . "." . $ekstensi;
        //validasi ekstensi gambar
       if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        //validasi ukuran gambar
        if($ukuran < 2044070){  
            //memindah gambar ke tempat penyimpanan gambar
        move_uploaded_file($nsmn, "../gambar_catatan/".$nama_baru);
        //memasukan data yang di proses ke database
        $masuk=mysqli_query($koneksi, "INSERT INTO catatan VALUES('$idc','$jud', '$isi','$tanggal','$nama_baru')");
            
        //validasi data masuk atau belum
        if ($masuk) {
          echo "<script>alert('Tersimpan !');</script>";
            echo "<script>location='index.php';</script>";
        } else {
            //data tidak masuk
            echo "<script>alert('GAGAL !');</script>";
            echo "<script>location='index.php';</script>";
        }

     } else {
        //ukuran file terlalu besar
          echo "<script>alert('FILE TERLALU BESAR !');</script>";
            echo "<script>location='index.php';</script>";
           
        }
    } else {
        //ekstensi file tidak diperbolehkan
        echo "<script>alert('EKSTENSI FILE BERMASALAH, SILAHKAN GUNAKAN EKSTENSI YANG DIPERBOLEHKAN (PNG, JPG) !');</script>";
            echo "<script>location='index.php';</script>";
        
    } 
}

?>