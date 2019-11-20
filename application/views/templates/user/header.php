<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Orangtua SMA Taman Madya Jetis</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <link rel="stylesheet" href="<?= base_url() ?>assets/user/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/user/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/fontastic.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/style.default.css" id="theme-stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/custom.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  
  <!-- <link rel="shortcut icon" href="<?= base_url() ?>assets/user/img/favicon.ico"> -->

</head>

<body>
  <div class="page">
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header">
              <a href="#" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block">
                  <span>Sistem Informasi Orangtua &nbsp;</span>
                  <strong>SMA Taman Madya Jetis</strong>
                </div>
                <div class="brand-text d-none d-sm-inline-block d-lg-none">
                  <strong>SMA Taman Madya</strong>
                </div>
              </a>
              <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <li class="nav-item dropdown">
                <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                  <img src="<?= base_url() ?>assets/user/img/settings.svg">
                  <span class="d-none d-sm-inline-block">Pengaturan</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a rel="nofollow" href="<?= base_url('pengaturan') ?>" class="dropdown-item">
                      <i class="fa fa-key"></i>Ganti Password
                    </a>
                  </li>
                  <li class="nav-item">
                    <a rel="nofollow" href="<?= base_url('keluar') ?>" class="dropdown-item">
                      <i class="fa fa-sign-out"></i>Keluar
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <? $login = $this->session->userdata('siswa') ?>
    <div class="page-content d-flex align-items-stretch"> 
      <nav class="side-navbar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="title">
            <h1 class="h4">Selamat Datang</h1>
            <p>Orangtua dari</p>
            <p><?= $login['nama_siswa'] ?></p>
          </div>
        </div>
        <ul class="list-unstyled">

          <li id="li" class="<?php if($this->uri->segment('1') == 'dashboard') { echo "active" ;} ?>">
            <a href="<?= base_url() ?>dashboard"> <i class="icon-home"></i>Dashboard </a>
          </li>

          <li id="li" class="<?php if($this->uri->segment('1') == 'presensi') { echo "active" ;} ?>">
            <a href="<?= base_url() ?>presensi"> <i class="icon-grid"></i>Presensi </a>
          </li>

          <li id="li" class="<?php if($this->uri->segment('1') == 'nilai') { echo "active" ;} ?>">
            <a href="<?= base_url() ?>nilai"> <i class="fa fa-bar-chart"></i>Nilai </a>
          </li>

        </ul>
      </nav>

