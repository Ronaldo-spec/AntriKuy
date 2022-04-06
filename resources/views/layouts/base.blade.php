<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Rs Tadika Mesra</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>

<body>

	@yield('body')

	<!-- JavaScript Libraries -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="{{asset('asset/lib/chart/chart.min.js')}}"></script>
	<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
	<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
	<script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
	<script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

	<!-- Template Javascript -->
	<script src="{{asset('asset/js/main.js')}}"></script>
</body>

</html>