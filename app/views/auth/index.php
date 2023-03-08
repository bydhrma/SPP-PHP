<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/css/styles.css">
  
  <link href="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>

    <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5 ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                            <div class="col-5 bg-gradient-primary">
                                <div class="row justify-content-center py-5">
                                <div class="p-5">
                                    <h1 class="h3 text-white">Hai,</h1>
                                    <p class="text-warning pb-5">Selamat Datang Di Pembayaran SPP SMKN 1 Denpasar</p>
                                </div>
                                </div>
                            </div>
                                <div class="col-lg-7 py-5">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-primary mb-5">Silahkan Login</h1>
                                        </div>
                                        <form action="<?=BASEURL?>Auth/login" method="post" class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    id="exampleInputEmail" name="username" aria-describedby="emailHelp"
                                                    placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" name="username" placeholder="Password" required>
                                            </div>
                                            <a href="<?=BASEURL?>Auth/login" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </a>
                                            
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=BASEURL;?>startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>

</body>
</html>