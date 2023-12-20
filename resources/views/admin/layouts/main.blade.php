<!DOCTYPE html>
<!--
This is a sangkuriang project 🔥 must be fast to build ges.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Administrator WarungSkill</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicons - Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('user') }}/img/favicons/apple-icon-57x57.webp">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('user') }}/img/favicons/apple-icon-60x60.webp">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('user') }}/img/favicons/apple-icon-72x72.webp">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('user') }}/img/favicons/apple-icon-76x76.webp">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('user') }}/img/favicons/apple-icon-114x114.webp">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('user') }}/img/favicons/apple-icon-120x120.webp">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('user') }}/img/favicons/apple-icon-144x144.webp">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('user') }}/img/favicons/apple-icon-152x152.webp">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user') }}/img/favicons/apple-icon-180x180.webp">
	<link rel="icon" type="image/webp" sizes="192x192" href="{{ asset('user') }}/img/favicons/android-icon-192x192.webp">
	<link rel="icon" type="image/webp" sizes="32x32" href="{{ asset('user') }}/img/favicons/favicon-32x32.webp">
	<link rel="icon" type="image/webp" sizes="96x96" href="{{ asset('user') }}/img/favicons/favicon-96x96.webp">
	<link rel="icon" type="image/webp" sizes="16x16" href="{{ asset('user') }}/img/favicons/favicon-16x16.webp">
	<link rel="manifest" href="{{ asset('user') }}/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.webp">
	<meta name="theme-color" content="#ffffff">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/fontawesome-free/css/all.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">

	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/select2/css/select2.min.css">
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/dist') }}/css/AdminLTE.min.css">

	<!-- summernote -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/summernote/summernote-bs4.min.css">

	<!-- lightbox -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

	<!-- daterangepicker -->
	<link href="{{ asset('admin/plugins') }}/daterangepicker/daterangepicker.css" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		@include('admin.layouts.partials.navbar')
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		@include('admin.layouts.partials.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					@yield('content')
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		{{-- <aside class="control-sidebar control-sidebar-dark">
						<!-- Control sidebar content goes here -->
						<div class="p-3">
								<h5>Admin BliMoto</h5>
								<p>Sidebar content</p>
						</div>
				</aside> --}}
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		@include('admin.layouts.partials.footer')
	</div>
	<!-- ./wrapper -->



	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="{{ asset('admin/plugins') }}/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="{{ asset('admin/plugins') }}/datatables/jquery.dataTables.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/jszip/jszip.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>


	<!-- Select2 -->
	<script src="{{ asset('admin/plugins') }}/select2/js/select2.full.min.js"></script>

	<!-- InputMask -->
	<script src="{{ asset('admin/plugins') }}/moment/moment.min.js"></script>
	<script src="{{ asset('admin/plugins') }}/inputmask/jquery.inputmask.min.js"></script>

	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{ asset('admin/plugins') }}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- AdminLTE App -->
	<script src="{{ asset('admin/dist') }}/js/adminlte.min.js"></script>

	<!-- Summernote -->
	<script src="{{ asset('admin/plugins') }}/summernote/summernote-bs4.min.js"></script>

	<!-- chart -->
	<script src="{{ asset('admin/plugins') }}/chart.js/Chart.min.js"></script>

	<!-- dashboard js -->
	<script src="{{ asset('admin/dist') }}/js/pages/dashboard2.js"></script>

	{{-- sweet alert --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

	<!-- light box -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

	<!-- daterangepicker -->
	<script src="{{ asset('admin/plugins') }}/daterangepicker/daterangepicker.js"></script>


	@stack('script')

</body>

</html>