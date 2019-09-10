<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin | Destinasi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar.jpg">
            <div class="sidebar-wrapper" style="overflow: hidden;">
                <div class="logo">
                    <a href="paket.php" class="simple-text">
                        JagadTour
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="paket.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Paket</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="destinasi.php">
                            <i class="nc-icon nc-square-pin"></i>
                            <p>Destinasi</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="hotel.php">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Hotel</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="fasilitas.php">
                            <i class="nc-icon nc-preferences-circle-rotate"></i>
                            <p>Fasilitas</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="rencana.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>rencana</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="testimoni.php">
                            <i class="nc-icon nc-tap-01"></i>
                            <p>Testimoni</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="galeri.php">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Galeri</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="faqs.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Faqs</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="destinasi.php"> Destinasi </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Destinasi</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Destinasi</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Nomor</th>
                                            <th>Nama Destinasi</th>
                                            <th>Kota Destinasi</th>
                                            <th>Foto Destinasi</th>
                                            <th>Kontrol</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Bromo</td>
                                                <td>img</td>
                                                <td>
                                                    <div class="img-box">
                                                        <img src="assets/img/bromo1.jpg" alt="bromo" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td style="display:table-cell;">
                                                    <a href="#" class="control-icon alert-success">
                                                        <i class="nc-icon nc-settings-tool-66"></i>
                                                        Edit
                                                    </a>
                                                    <a class="control-icon alert-danger" data-toggle="modal" data-target="#myModal1" href="#pablo">
                                                        <i class="nc-icon nc-simple-remove"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box text-center">
                    <a href="tambah/destinasi.php" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                </div>
                <!-- Mini Confirmation -->
                    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                </div>
                                <div class="modal-body text-center">
                                    <p>Yakin hapus paket ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link btn-simple">Hapus</button>
                                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--  End Confirmation -->
            </div>
            <!-- End Content -->

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
