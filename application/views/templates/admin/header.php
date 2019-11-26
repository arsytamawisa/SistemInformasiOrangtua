<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/admin/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/admin/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div id="wrapper">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url("admin/dashboard") ?>">SMA Taman Madya Jetis</a>
			</div>
		</nav>
		<nav class="navbar-default navbar-side">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="aktif"><a href="<?= base_url("admin/dashboard") ?>">Dashboard</a></li>
				</ul>
				<ul class="nav" id="main-menu">
					<li class="tr-tree">
						<a href="#">Data Master</a>
						<ul class="tr-tree-menu">
							<li><a href="<?= site_url('admin/tahun') ?>">&emsp;&emsp;Data Tahun Ajaran</a></li>
							<li><a href="<?= site_url('admin/jurusan') ?>">&emsp;&emsp;Data Jurusan</a></li>
							<li><a href="<?= site_url('admin/kelas') ?>">&emsp;&emsp;Data Kelas</a></li>
							<li><a href="<?= site_url('admin/siswa') ?>">&emsp;&emsp;Data Siswa</a></li>
							<li><a href="<?= site_url('admin/mapel') ?>">&emsp;&emsp;Data Mapel</a></li>
							<?php if ($_SESSION['admin']['level']=="Super Admin"): ?>
								<li><a href="<?= site_url('admin/akun') ?>">&emsp;&emsp;Data Admin</a></li>
							<?php endif ?>
						</ul>
					</li>
				</ul>
				<ul class="nav" id="main-menu">
					<li><a href="<?= site_url('admin/nilai') ?>">Nilai</a></li>
					<li><a href="<?= site_url('admin/presensi') ?>">Presensi</a></li>
					<li><a href="<?= site_url('admin/pengumuman') ?>">Pengumuman</a></li>
				</ul>
				<ul class="nav" id="main-menu">
					<li class="tr-tree">
						<a href="#">Pengaturan</a>
						<ul class="tr-tree-menu">
							<li><a href="<?= site_url('admin/pengaturan') ?>">&emsp;&emsp;Ganti Password</a></li>
							<li><a href="<?= site_url('admin/keluar') ?>">&emsp;&emsp;Keluar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div id="page-wrapper">
