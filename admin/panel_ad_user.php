<!DOCTYPE html>
<?php
include "../koneksi.php";
session_start();
if (isset($_SESSION['nameAD'])) {
    $gd = mysqli_query($konek, "SELECT * FROM user");
    $try = 0;
} else {
    echo "<script>alert('Anda Belum Login silahkan login terlebih dahulu !!!!'); document.location= '../Login/Login_Admin.html'</script>";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADMIN - Panel</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark bg-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-user-secret"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Dream Game
                            <br>Room</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link text-md-light" href="panel_ad_operator.php"><i class="fas fa-users-cog"></i><span>Operator</span></a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-md-light active" href="panel_ad_user.php"><i class="fas fa-users"></i><span>User</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['nameAD'] ?></span><img class="border rounded-circle img-profile" src="../assets/img/iconorg.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="../index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Data User</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">User Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID_User</th>
                                            <th>Nama</th>
                                            <th>Ubah Data</th>
                                            <th>Hapus ?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($data = mysqli_fetch_assoc($gd)) { ?>
                                            <tr>
                                                <td><img class="rounded-circle mr-2" width="30" height="30" src="../assets/img/iconorg.png"><?php echo $data['NID'] ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <!--button edit + pop upnya -->
                                                <td>
                                                    <button type="button" class="btn btn-primary  btn-sm" type="submit" data-toggle="modal" data-target="#myModaledituser<?php echo $try ?>">Edit</button>
                                                    <!--pop up Edit  Operator-->
                                                    <div id="myModaledituser<?php echo $try ?>" class="modal fade " role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- konten modal-->
                                                            <div class="modal-content">
                                                                <form action="EditSave.php" method="POST">
                                                                    <!-- heading modal -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title ">Edit Data Operator
                                                                        </h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    <!-- body modal -->
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <div class="form-group"><label for="Nama"><strong>Nama</strong></label><input class="form-control" type="text" placeholder="Nama" name="Nama" value="<?php echo $data['nama'] ?>"></div>
                                                                            <div class="form-group"><label for="Identitas"><strong>Identitas</strong><br><?php echo $data['NID'] ?></label></div>
                                                                            <div class="form-group"><label for="Email"><strong>Email
                                                                                    </strong></label><input class="form-control" type="Email" placeholder="Alamat Email @" name="Email" value="<?php echo $data['email'] ?>">
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col">
                                                                                    <div class="form-group"><label for="Password"><strong>Password</strong></label><input class="form-control" type="Password" placeholder="password" name="Password" value="<?php echo $data['pass'] ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group"><label for="UlangiPassword"><strong>Ulangi
                                                                                                Password</strong></label><input class="form-control" type="password" placeholder="Ulangi password" name="UlangiPassword" value="<?php echo $data['pass'] ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- footer modal -->
                                                                    <div class="modal-footer">
                                                                        <div class="col4">
                                                                            <button type="submit" class="btn btn-primary submit btn-sm" name="submit" value="US:edit:<?php echo $data['NID'] ?>">Perbarui
                                                                                Data</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--Button Hapus + pop upnya-->
                                                <td>    
                                                    <button type="button" class="btn btn-primary  btn-sm" type="submit" data-toggle="modal" data-target="#myModalhapususer<?php echo $try ?>">Hapus !</button>
                                                    <!--pop up Hapus  Operator-->
                                                    <div id="myModalhapususer<?php echo $try ?>" class="modal fade " role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- konten modal-->
                                                            <div class="modal-content">
                                                                <!-- heading modal -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <!-- body modal -->
                                                                <div class="modal-body">
                                                                    <p>Yakin Hapus User ?</p>
                                                                </div>
                                                                <!-- footer modal -->
                                                                <div class="modal-footer">
                                                                    <div class="col4">
                                                                        <form action="EditSave.php" method="POST">
                                                                            <button type="submit" class="btn btn-primary submit btn-sm" name="submit" value="US:hapus:<?php echo $data['NID'] ?>">Yaqien</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $try++;
                                        } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>ID_User</strong></td>
                                            <td><strong>Nama</strong></td>
                                            <td><strong>Ubah Data</strong></td>
                                            <td><strong>Hapus ?</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
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
    <script src="../assets/js/validate.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>