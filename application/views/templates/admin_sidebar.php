<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/datatables/colReorder.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/datatables/buttons.dataTables.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon">
                    <img style="height:50px;" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">PPSU CIPINANG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($this->uri->segment(2) == "dashboard") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item <?php if (($this->uri->segment(2) == "akun") || ($this->uri->segment(2) == "detail")) {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelamar" aria-expanded="true" aria-controls="collapsePelamar">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pelamar</span>
                </a>
                <div id="collapsePelamar" class="collapse <?php if (($this->uri->segment(2) == "akun") || ($this->uri->segment(2) == "detail")) {
                                                                echo 'show';
                                                            } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "akun") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/akun'); ?>"><i class="fas fa-fw fa-user"></i> Akun Pelamar</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "detail") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/detail'); ?>"><i class="fas fa-fw fa-user-tie"></i> Detail Pelamar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item <?php if (($this->uri->segment(2) == "seleksi_1") || ($this->uri->segment(2) == "seleksi_2") || ($this->uri->segment(2) == "seleksi_3") || ($this->uri->segment(2) == "seleksi_4") || ($this->uri->segment(2) == "seleksi_5")) {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeleksi" aria-expanded="true" aria-controls="collapseSeleksi">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Hasil Seleksi</span>
                </a>
                <div id="collapseSeleksi" class="collapse <?php if (($this->uri->segment(2) == "seleksi_1") || ($this->uri->segment(2) == "seleksi_2") || ($this->uri->segment(2) == "seleksi_3") || ($this->uri->segment(2) == "seleksi_4") || ($this->uri->segment(2) == "seleksi_5")) {
                                                                echo 'show';
                                                            } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_1") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_1'); ?>"><i class="fas fa-fw fa-user"></i> Seleksi Administrasi</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_2") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_2'); ?>"><i class="fas fa-fw fa-user-tie"></i> Pengalaman Kerja</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_3") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_3'); ?>"><i class="fas fa-fw fa-user-tie"></i> Praktek Lapangan</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_4") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_4'); ?>"><i class="fas fa-fw fa-user-tie"></i> Tes Tertulis</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_5") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_5'); ?>"><i class="fas fa-fw fa-user-tie"></i> Wawancara</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "seleksi_total") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/seleksi_total'); ?>"><i class="fas fa-fw fa-user-tie"></i> Hasil Total</a>
                    </div>
                </div>
            </li>

            <li class="nav-item <?php if (($this->uri->segment(2) == "pengumuman") || ($this->uri->segment(2) == "add_pengumuman")) {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengumuman" aria-expanded="true" aria-controls="collapsePengumuman">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Pengumuman</span>
                </a>
                <div id="collapsePengumuman" class="collapse <?php if (($this->uri->segment(2) == "pengumuman") || ($this->uri->segment(2) == "add_pengumuman")) {
                                                                    echo 'show';
                                                                } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "pengumuman") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/pengumuman'); ?>"><i class="fas fa-fw fa-newspaper"></i> List Pengumuman</a>
                        <a class="collapse-item <?php if ($this->uri->segment(2) == "add_pengumuman") {
                                                    echo 'active';
                                                } ?>" href="<?= base_url('admin/add_pengumuman'); ?>"><i class="fas fa-fw fa-edit"></i> Add Pengumuman</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaturan Akun
            </div>

            <li class="nav-item <?php if ($this->uri->segment(2) == "admin") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('admin/admin'); ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Akun Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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