<!DOCTYPE html>

<?php
    session_start();
    include "koneksi.php";
    if (isset($_SESSION['name'])){
        $id = $_SESSION['id'];
        $rs = mysqli_query($konek, "SELECT * FROM resi WHERE NID='$id' ");
    }else{
        echo "<script>alert('Anda Belum Login silahkan login terlebih dahulu !!!!'); document.location= './Login/Login_User.html'</script>";
    }
    
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MY Booking- User</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Bold-BS4-Pricing-Table-Style-47.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav
            class="navbar navbar-dark bg-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Dream Game
                            <br>Room</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark active"
                            href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="my_Booking.php"><i
                                class="fas fa-table"></i><span>My Booking</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        data-toggle="dropdown" aria-expanded="false" href="#"><span
                                            class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION["name"];?></span><img
                                            class="border rounded-circle img-profile" src="./assets/img/iconorg.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="#"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" role="presentation" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation"
                                            href="./index.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">MY Booking</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">History Booking</p>
                        </div>
                        <div class="card-body">
                            <!-- isi dari my boking history wkwkw -->
                            <div class="text-dark block-content">
                                <div class="clean-blog-post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img class="rounded img-fluid" src="assets/img/incon2.png"></div>
                                        <div class="col-lg-7">
                                            <table>
                                                <?php 
                                                    while ($data = mysqli_fetch_assoc($rs)){?>
                                                    <tr>
                                                        <td>
                                                        <h3>PC-<?php echo $data['NoPC'] ?></h3>
                                                        <div class="info"><span class="text-muted"><?php echo $data['tanggal']?> by&nbsp;<a
                                                        href="#"><?php echo $_SESSION['name'] ?></a></span></div>
                                            <p>Silahkan Datang sebelum 15 menit sebelum jam yang sudah di tentukan </p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <nav
                                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                        aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-dark sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright bg-dark"><span>Copyright © DREAM TEAM 2020</span>
                    </div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>