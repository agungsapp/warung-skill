<!doctype html>
<html class="no-js" lang="zxx">

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
		<link rel="icon" type="image/webp" sizes="192x192"
				href="{{ asset('user') }}/img/favicons/android-icon-192x192.webp">
		<link rel="icon" type="image/webp" sizes="32x32" href="{{ asset('user') }}/img/favicons/favicon-32x32.webp">
		<link rel="icon" type="image/webp" sizes="96x96" href="{{ asset('user') }}/img/favicons/favicon-96x96.webp">
		<link rel="icon" type="image/webp" sizes="16x16" href="{{ asset('user') }}/img/favicons/favicon-16x16.webp">
		<link rel="manifest" href="{{ asset('user') }}/img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.webp">
		<meta name="theme-color" content="#ffffff">

		<!--==============================
	Google Fonts
	============================== -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
				href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
				rel="stylesheet">


		<!--==============================
	All CSS File
	============================== -->
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/bootstrap.min.css">
		<!-- Fontawesome Icon -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/fontawesome.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/magnific-popup.min.css">
		<!-- Slick Slider -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/slick.min.css">
		<!-- Nice Select -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/nice-select.min.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('user') }}/css/style.css">

</head>

<body>

		<!--==============================
					Preloader
				==============================-->
		<div class="preloader">
				<button class="th-btn style3 preloaderCls">Cancel Preloader </button>
				<div class="preloader-inner">
						<span class="loader"></span>
				</div>
		</div>


		{{-- navbar --}}
		@include('user.layouts.partials.navbar')


		@yield('content')

		@include('user.layouts.partials.footer')
