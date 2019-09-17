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
    <title>Admin | Paket</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link rel="stylesheet" href="assets/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="paket.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Paket</p>
                        </a>
                    </li>
                    <li>
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
            <nav class="navbar navbar-expand-lg navbar-sticky" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="paket.php"> Paket </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Paket</span>
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
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Paket</h4>
                                </div>
                                <div class="btn-box">
                                    <a href="tambah/paket.php" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th class="w-25">Paket</th>
                                            <th>Tipe</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Jumlah Grup</th>
                                            <th>Lokasi</th>
                                            <th>Hari</th>
                                            <th>Kontrol</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include "crud/koneksi.php";
                                                $query="SELECT * FROM paket";
                                                $hasil=mysqli_query($koneksi_db,$query);
                                                while($data=mysqli_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $data['nama_paket'];?></td>
                                                <td><?php echo $data['id_type'];?></td>
                                                <td>
                                                    <div class="img-box">
                                                        <img src="<?php echo $data['gambar_paket'];?>" alt="bromo" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td>Dewasa : <br> <?php echo $data['harga_dewasa'];?> <br> Anak : <br> <?php echo $data['harga_anak'];?> </td>
                                                <td><?php echo $data['grup_size'];?></td>
                                                <td><?php echo $data['lokasi'];?></td>
                                                <td>3 Hari <br> 2 Malam</td>
                                                <td style="display:table-cell;">
                                                    <a class="control-icon alert-info"  data-toggle="modal" data-target="#myModal1" href="#pablo">
                                                        <i class="nc-icon nc-paper-2"></i>
                                                        More
                                                    </a>
                                                    <a href="#" class="control-icon alert-success">
                                                        <i class="nc-icon nc-settings-tool-66"></i>
                                                        Edit
                                                    </a>
                                                    <a class="control-icon alert-danger" data-toggle="modal" data-target="#myModal2" href="#pablo">
                                                        <i class="nc-icon nc-simple-remove"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mini Detail -->
                    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog custom-modal">
                            <div class="modal-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card strpied-tabled-with-hover">
                                            <div class="card-header ">
                                                <h4 class="card-title">Paket Bromo</h4>
                                            </div>
                                            <div class="card-body table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <th>Paket</th>
                                                        <th>Tipe</th>
                                                        <th>Foto</th>
                                                        <th>Harga</th>
                                                        <th class="w-250">Overview</th>
                                                        <th>Jumlah Grup</th>
                                                        <th>Lokasi</th>
                                                        <th>Jam</th>
                                                        <th>Hari</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bromo</td>
                                                            <td>Family Trip</td>
                                                            <td>
                                                                <div class="img-box">
                                                                    <img src="assets/img/bromo1.jpg" alt="bromo" class="img-fluid">
                                                                </div>
                                                            </td>
                                                            <td>Dewasa : <br> Rp 550.000 <br> Anak : <br> Rp 350.000</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio reprehenderit earum quam aliquid soluta facilis beatae enim similique impedit. Soluta, iusto deleniti nostrum porro debitis temporibus molestiae voluptatem dolores.</td>
                                                            <td>5 orang</td>
                                                            <td>Bromo Tengger <br> Semeru National Park</td>
                                                            <td>2</td>
                                                            <td>3 Hari <br> 2 Malam</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--  End Detail -->
                <!-- Mini Confirmation -->
                    <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!-- Plugin -->
<script src="assets/datatables/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('table').DataTable({
            "autoWidth": false,
            "info": false
        });
    } );
</script>

</html>
