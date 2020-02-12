<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <!-- Pop Up Log In  -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h3 class="title">Log In</h3></center>
                </div>

            <!-- BODY -->
                <div class="modal-body">
                    <div class="loginini">
                        <form action="login.php" method="POST">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            <!-- FOOTER -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="login" value="login">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>