<!DOCTYPE html>
<html lang="en">
<head>
    <title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('vendor/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('vendor/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('vendor/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('vendor/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('vendor/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('vendor/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>

    @include('partials.navbar')

    @yield('content')
    

    @include('partials.footer')






    	<script src="{{asset('vendor/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('vendor/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('vendor/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('vendor/js/main.js')}}"></script>
</body>
</html>