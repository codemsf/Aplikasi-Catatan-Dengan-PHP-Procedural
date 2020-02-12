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
    $query=mysqli_query($koneksi, "SELECT max(id_gambar) as idgede FROM gambar_tambahan");
    $pecah=mysqli_fetch_assoc($query);
    $iduser=$pecah['idgede'];
    // Tuker jadi interger
    $urutan = (int) substr($iduser, 3, 3);
    $urutan++;
    //STRING DATANYA
    $char="GMB";
    $newID=$char .sprintf("%03s", $urutan);
     ?>
    
    <!-- Pop Up Log In  -->
    <div class="modal fade" id="tbhGambar" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h3 class="title">Tambah Gambar</h3></center>
                </div>

            <!-- BODY -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="aksitambahgmbr.php" method="POST" enctype="multipart/form-data">
                        <label>Tambah Gambar/Foto Catatan</label>
                        <input type="text" hidden="" readonly="" value="<?php echo $_GET['id']; ?>" name="idctt"><br>
                        <input type="text" readonly="" hidden="" value="<?php echo $newID ?>" name="idgmbr">
                        <input type="file" name="gambar">
                        <br>
                        <label>Desripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Desripsi Gambar" required="required">
                        <br>
            <!-- FOOTER -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="go" value="gbrtambah">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>