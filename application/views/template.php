<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Informasi Korona</title>

	<!-- Other tags -->
	<meta name="dicoding:email" content="syarifulumam7@gmail.com">
	<!-- Other tags -->
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css')?>">
	<!-- Select2 |tanggal-->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/select2/css/select2.min.css')?>">
	<link rel="stylesheet"
		href="<?= base_url('assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css')?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url('assets/stylebaru.css') ?>" />
	<!-- logo bar website -->
	<link rel="icon" href="<?= base_url('assets/image/logo-donor.png') ?>">

</head>

<body class="hold-transition sidebar-collapse">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-light navbar-white border-bottom">
			<div class="container">
				<a href="<?= base_url('home')?>" class="navbar-brand">
					<img src="<?= base_url('assets/image/logo-donor.png')?>" alt="AdminLTE Logo" class="brand-image"
						style="width: 50px;">
					<span class="brand-text font-weight-bold ml-1">Korona</span>
				</a>

				<!-- <div class="collapse navbar-collapse"> -->
				<!-- Left navbar links -->
				<ul class="navbar-nav ml-auto d-none d-md-flex">
					<li class="nav-item">
						<a href="<?= base_url('edukasi')?>" class="nav-link">Edukasi</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('periksa')?>" class="nav-link">Periksa</a>
					</li>
					<li class="nav-item">
						<a href="https://kitabisa.com/" target="_blank" class="nav-link">Donasi</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('tentang')?>" class="nav-link">Tentang</a>
					</li>
				</ul>
				<!-- button navigasi sidebar smartphone -->
				<button class="navbar-toggler order-1" type="button" aria-expanded="false"
					aria-label="Toggle navigation" data-widget="pushmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?= base_url('assets/image/logo-donor.png')?>" alt="AdminLTE Logo" class="brand-image">
				<span class="brand-text font-weight-light">Korona</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar Menu Smartphone -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('donor') ?>" class="nav-link">
								<p>Edukasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('periksa') ?>" class="nav-link">
								<p>Periksa</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="https://kitabisa.com/" target="_blank" class="nav-link">
								<p>Donasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('tentang') ?>" class="nav-link">
								<p>Tentang</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- Main content -->
		<?= $contents ?>

		<!-- Main Footer -->
		<footer>
			<div class="container">
				<div class="row text-left">
					<div class="col-md-3 col-sm-12 donorin">
						<h3>Conntact</h3>
						<p class="pertama float-none">Nomor Telpn. 081 112 112 112</p>
						<p>E-mail email@gmail.com</p>
						<p>Call Center 112</p>
					</div>
					<div class="col-md-3 col-sm-12">
						<h3>Tentang</h3>
						<a href="#">About Us</a>
						<a href="#">Periksa</a>
						<a href="#">Tentang</a>
					</div>
					<div class="col-md-3 col-sm-12">
						<h3>Dukungan</h3>
						<a href="#">Privacy Policy</a>
						<a href="#">Terms & Conditions</a>
						<a href="#">Contact Us</a>
					</div>
					<div class="col-md-3 col-sm-12 sosmed">
						<h3>Follow Us On</h3>
						<a href="#"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
						<a href="#"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
						<a href="#"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
						<a href="#"><i class="fab fa-youtube"></i> <span>Youtube</span></a>
					</div>
				</div>
			</div>
		</footer>
		<div class="copy-right text-center">&copy; 2020 Syariful Umam</div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- Select2 |tanggal-->
	<script src="<?= base_url('assets/adminlte/plugins/select2/js/select2.full.min.js')?>"></script>
	<!-- InputMask |tanggal-->
	<script src="<?= base_url('assets/adminlte/plugins/moment/moment.min.js')?>"></script>
	<script src="<?= base_url('assets/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
	<script src="<?= base_url('assets/') ?>main.js"></script>
	<!-- Page script -->
	<script>
		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Datemask yyyy/mm/dd
			$('#datemask').inputmask('yyyy/mm/dd', {
				'placeholder': 'yyyy/mm/dd'
			})
			//Money Euro
			$('[data-mask]').inputmask()

		})

	</script>
</body>

</html>
