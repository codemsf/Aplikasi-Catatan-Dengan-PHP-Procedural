<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <!-- Pop Up Log In  -->
    <div class="modal fade" id="caricatatan" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h3 class="title">CARI CATATAN</h3></center>
                </div>

            <!-- BODY -->
                <div class="modal-body">
                    <div class="form-group">
                        <form action="index.php" method="POST">
                        <input type="text" name="us" class="form-control" placeholder="Masukan kata kunci" required="required"><br>
            <!-- FOOTER -->
                            <div class="modal-footer">
                               <center> <button type="cari" class="btn btn-primary" name="cari">Cari</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>