<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

        <!-- BIKIN ID OTOMATIS -->
    <?php 
    $query=mysqli_query($koneksi, "SELECT max(id_catatan) as idgede FROM catatan");
    $pecah=mysqli_fetch_assoc($query);
    $iduser=$pecah['idgede'];
    // Tuker jadi interger
    $urutan = (int) substr($iduser, 3, 3);
    $urutan++;
    //STRING DATANYA
    $char="CTT";
    $newID=$char .sprintf("%03s", $urutan);
     ?>
     
    <!-- Pop Up Log In  -->
    <div class="modal fade" id="tbhCatatan" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h3 class="title">Tambah Catatan</h3></center>
                </div>

            <!-- BODY -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="aksitambahctt.php" method="POST" enctype="multipart/form-data">
                        <input type="text" hidden="" readonly="" value="<?php echo $newID; ?>" name="idctt">
                        <label>Judul Catatan</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul Catatan" required="required"><br>
                        <label>Isi Catatan</label>
                        <textarea name="isi" class="form-control" placeholder="Isi Catatan" required="required"></textarea>
                        <label>Gambar/Foto Catatan (MAKS 2MB)</label>
                        <input type="file" name="gambar">
                        
            <!-- FOOTER -->
            <br>
                            <div class="modal-footer">
                               <center> <button type="submit" class="btn btn-primary" name="tambah" value="tambah">Tambah</button>
                                  <button class="btn btn-danger" type="reset" value="Reset">Reset</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>