<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/index') ?>">
                    <i class="fas fa-server"></i>
                    <span>Data User</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('admin/pengaduan') ?>">
                    <i class="fas fa-server"></i>
                    <span>Data Pengaduan</span></a>
            </li>





            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Keluar</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto"></ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center"></h6>
                        </div>
                        <div class="card-body">
                            <?php foreach ($user as $datas) { ?>
                                <form class=" form-signin" action="<?= site_url('admin/update_user/' . $datas->id) ?>" method="POST">
                                    <div class="form-group">
                                        <h5 class="text-left">ID</h5>
                                        <label for="inputid" class="sr-only">Id</label>
                                        <input value="<?= $datas->id; ?>" type="text" name="id" id="inputid" class="form-control mb-3" disabled>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="text-left">Nama</h5>
                                        <label for="inputNama" class="sr-only">Nama</label>
                                        <input value="<?= $datas->nama; ?>" type="text" name="nama" id="inputNama" class="form-control mb-3" placeholder="Insert nama" required="" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <h5 class="text-left">email</h5>
                                        <label for="inputUsername" class="sr-only">email</label>
                                        <input value="<?= $datas->email; ?>" type="text" name="email" id="inputEmail" class="form-control mb-3" placeholder="Insert Username" required="" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <h5 class="text-left">Password</h5>
                                        <label for="inputPassword" class="sr-only">Password</label>
                                        <input value="<?= $datas->password; ?>" type="text" name="pw" id="inputPassword" class="form-control mb-3" placeholder="Insert password" required="" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-left">Role id</h5>
                                        <label for="inputPassword" class="sr-only">Role id</label>
                                        <input value="<?= $datas->role_id; ?>" type="number" name="roleid" id="inputRole" class="form-control mb-3" placeholder="Insert password" required="" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-left">User Aktive</h5>
                                        <label for="inputPassword" class="sr-only">user aktive</label>
                                        <input value="<?= $datas->user_aktive; ?>" type="number" name="useraktive" id="inputUseraktive" class="form-control mb-3" placeholder="Insert password" required="" autofocus="">
                                    </div>
                                    <button style="width: 10%;" class="btn btn-small btn-success btn-block" type="submit"><i class="far fa-save"></i></button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Lapor Dong! <?= date('Y') ?></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>