<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Serial Perpustakaan UIN Sunan Kalijaga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Selamat Datang di Sistem Informasi Serial Perpustakaan UIN Sunan Kalijaga" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/perpus/logo-perpus.png">

    <!-- App css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <!-- sweetalert2 -->
    <link href="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image: linear-gradient(rgba(0, 0, 0, 0.69),rgba(0, 0, 0, 0.22)),url('<?php echo base_url() ?>assets/img/perpus/gedung-perpus.jpg');background-position:center;background-size:cover;">
    <div class="account-pages mt-5 mb-5" style="margin-top: 12rem !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="text-center account-logo-box">
                            <div class="mt-2 mb-2" style="color: #FFF;">
                                <img src="<?php echo base_url() ?>assets/img/perpus/logo-perpus.png" alt="" height="36">
                                <span style="font-weight: bold;font-size:18px">SISTEM INFORMASI SERIAL</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="username" required="" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" required="" id="password" placeholder="Password">
                                </div>
                                <div class="form-group account-btn text-center mt-2">
                                    <div class="col-12">
                                        <button class="btn width-md btn-bordered btn-success waves-effect waves-light" id="btn-login"><i class="ion ion-md-log-in"></i> Masuk</button>
                                    </div>
                                </div>
                                <br />
                                <div class="row mt-5">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted"><b>© Sistem Informasi dan jaringan <br /> Perpustakaan UIN Sunan Kalijaga 2025.</b></a></p>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <!-- Vendor js -->
    <script src="<?php echo base_url() ?>assets/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>

    <!-- sweetalert2 -->
    <script src="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo base_url() ?>assets/libs/moment/moment.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn-login").click(function(e) {
                e.preventDefault();

                var username = $("#username").val();
                var password = $("#password").val();
                if (username.length == "") {
                    Swal.fire({
                        title: "OOPS!!",
                        text: "Username Harus Disi",
                        type: "error",
                    });
                    return false;
                }

                if (password.length == "") {
                    Swal.fire({
                        title: "OOPS!!",
                        text: "Password Harus Disi",
                        type: "error",
                    });
                    return false;
                }

                //ajax
                $.ajax({
                    url: "<?php echo base_url() . INDEX_URL ?>login/auth",
                    type: "POST",
                    data: {
                        "username": username,
                        "password": password
                    },
                    success: function(response) {
                        console.log(response);
                        // return false;
                        response = JSON.parse(response);
                        if (response.status == 1) {
                            Swal.fire({
                                title: "Success",
                                text: response.message,
                                type: "success",
                            });

                            // similar behavior as clicking on a link
                            window.location.href = "<?php echo base_url() . INDEX_URL ?>dashboard/home";
                        } else {
                            Swal.fire({
                                title: "OOPS!",
                                text: response.message,
                                type: "error",
                            });
                            return false;
                        }
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "OOPS!",
                            text: "Server Error",
                            type: "error",
                        });
                    }
                })
            });
        });
    </script>
</body>

</html>