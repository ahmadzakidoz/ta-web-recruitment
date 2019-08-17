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
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/jquery-ui/jquery-ui.css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <li class="nav-item <?php if ($this->uri->segment(2) == "") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Pelamar
            </div>

            <li class="nav-item <?php if ($this->uri->segment(2) == "biodata") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user/biodata'); ?>">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Biodata</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == "pendidikan") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user/pendidikan'); ?>">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Pendidikan</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == "upload") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user/upload'); ?>">
                    <i class="fas fa-fw fa-file-upload"></i>
                    <span>Upload Dokumen</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(2) == "dok_pendukung") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user/dok_pendukung'); ?>">
                    <i class="fas fa-fw fa-file-upload"></i>
                    <span>Dokumen Pendukung</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaturan Akun
            </div>

            <li class="nav-item <?php if ($this->uri->segment(2) == "ganti_password") {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="<?= base_url('user/ganti_password'); ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Ganti Password</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/logout'); ?>">
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