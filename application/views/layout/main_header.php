<style type="text/css">
.d-flex{
	height: 70px;
}
.p-2 text-dark{
	color: blue;
}
</style>
<html>
<head>
	<title>Smart City Semarang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
		$(function () {
			CKEDITOR.replace('ckeditor');
		});</script>
	</head>
	<body>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
			<h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark" href="<?php echo base_url() ?>">Smart City Semarang</a></h5>
			<!-- <nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="<?php echo base_url().'Pengelolaansampah' ?>">Pengelolaan Sampah</a>
				<a class="p-2 text-dark" href="<?php echo base_url().'Pertamanan' ?>">Pertamanan</a>
				<a class="p-2 text-dark" href="<?php echo base_url() ?>">Perizinan</a>
				<a class="p-2 text-dark" href="<?php echo base_url().'smartcity/logout' ?>">tentang</a>
				<a class="p-2 text-dark" href="<?php echo base_url().'smartcity/pengaduan' ?>">pengaduan</a>
			</nav> -->
			<nav class="navbar navbar-expand-lg">
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pertamanan
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?php echo base_url().'Pertamanan' ?>">Taman</a>
								<a class="dropdown-item" href="<?php echo base_url().'Pertamanan/listacara' ?>">Acara</a>
								<a class="dropdown-item" href="<?php echo base_url().'Pertamanan/laporan' ?>">Laporan</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pengelolaan Sampah
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?php echo base_url().'pengelolaansampah' ?>">Berita Pengelolaan Sampah</a>
								<a class="dropdown-item" href="<?php echo base_url().'pengelolaansampah/pemetaan' ?>">Pemetaan Lokasi</a>
								<a class="dropdown-item" href="<?php echo base_url().'pengelolaansampah/jadwal' ?>">Jadwal Pengambilan</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Perizinan
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?php echo base_url().'perizinan/taman' ?>">Penggunaan ruang terbuka hijau</a>
								<a class="dropdown-item" href="<?php echo base_url().'perizinan/angkutan' ?>">izin angkutan</a>
								<a class="dropdown-item" href="<?php echo base_url().'perizinan/cek' ?>">cek perizinan</a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								lainya
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?php echo base_url().'smartcity/pengaduan' ?>">pengaduan</a>
								<a class="dropdown-item" href="<?php echo base_url().'smartcity/daftar' ?>"">daftar</a>
								<a class="dropdown-item" href="<?php echo base_url().'smartcity/logout' ?>"">keluar</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- <nav>
				<a class="p-2 text-dark" href="<?php echo base_url().'smartcity/pengaduan' ?>">pengaduan</a>
			</nav> -->
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="#"><?php echo $this->session->userdata("user_nama"); ?></a>
			</nav>
			<a class="btn btn-outline-primary" href="<?php echo base_url().'login' ?>">login</a>
		</div>
