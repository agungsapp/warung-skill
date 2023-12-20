<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Warung Skill</title>
	<meta name="author" content="themeholy">
	<meta name="description" content="Warungskill - Website terbaik selampung">
	<meta name="keywords" content="Warungskill - Website terbaik selampung">
	<meta name="robots" content="INDEX,FOLLOW">

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
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="{{ asset('admin/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/dist') }}/css/AdminLTE.min.css">

</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="" class="h1">
					<img src="{{asset('user/img/logo.webp')}}" alt="logo blimoto" srcset="">
				</a>
			</div>
			<div class="card-body">
				<h3 class="login-box-msg fw-bold">Login</h3>

				@error('error')
				<div class="alert alert-danger">
					{{ $message }}
				</div>
				@enderror

				<form action="{{ route('admin.login') }}" method="post">
					@csrf
					@method('POST')
					@error('username')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>

					@error('password')
					<span class="text-danger">{{ $message }}</span>
					@enderror
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>

					<div class="social-auth-links mb-3 mt-2 text-center">
						<button type="submit" class="btn btn-block btn-primary">
							Login
						</button>

						<a href="{{ asset('admin/home') }}" class="btn btn-block btn-danger">
							Home
						</a>
					</div>
				</form>

				@if (session('login'))
				<div class="alert alert-danger">
					{{ session('login') }}
				</div>
				@endif

			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="{{ asset('admin/plugins') }}/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('admin/dist') }}/js/adminlte.min.js"></script>
</body>

</html>