<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php 
$idadm=$_SESSION['id'];
$sql=$koneksi->query("SELECT * FROM admin WHERE id='$idadm'");
while ($e=$sql->fetch_assoc()) {
 ?>
    <!-- Pop Up Log In  -->
    <div class="modal fade" id="ubahdata" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h3 class="title">UBAH DATA</h3></center>
                </div>

            <!-- BODY -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="" method="POST">
                        <label>USERNAME</label>
                        <input type="text" name="us" class="form-control" value="<?php echo $e['username'] ?>" required="required"><br>
                        <label>PASSWORD</label>
                       <input type="text" name="pw" class="form-control" value="<?php echo $e['password'] ?>" required="required"><br>
                         <label>NAMA LENGKAP</label>
                       <input type="text" name="nm" class="form-control" value="<?php echo $e['nama_lengkap'] ?>" required="required"><br>
            <!-- FOOTER -->
                            <div class="modal-footer">
                               <center> <button type="submit" class="btn btn-primary" name="edit">Edit</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php 
}
 ?> 
    </div>
</body>
</html>

<?php 
if (isset($_POST['edit'])) {
    $us=$_POST['us'];
    $pw=$_POST['pw'];
    $nm=$_POST['nm'];

    $go=$koneksi->query("UPDATE admin SET username='$us',password='$pw',nama_lengkap='$nm'");
    if ($go) {
        echo "<script>alert('DATA BERHASIL DI PERBARUI');</script>";
        echo "<script>location='index.php';</script>";
    } else {
           echo "<script>alert('DATA GAGAL   DI PERBARUI');</script>";
        echo "<script>location='index.php';</script>";
    }
}