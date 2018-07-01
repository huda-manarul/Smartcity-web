<style type="text/css">
	
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
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark" href="<?php echo base_url().'Pengelolaansampah' ?>">Pengelolaan Sampah</a>
				<a class="p-2 text-dark" href="<?php echo base_url().'Pertamanan' ?>">Pertamanan</a>
				<a class="p-2 text-dark" href="<?php echo base_url() ?>">Perizinan</a>
				<a class="p-2 text-dark" href="<?php echo base_url().'smartcity/logout' ?>">tentang</a>
			</nav>
			<a class="btn btn-outline-primary" href="<?php echo base_url().'login' ?>">login</a>
		</div>
