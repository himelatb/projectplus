<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student management system</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/1904060.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-image:url('{{asset('images/bg-01.jpg')}}');">

@yield('content')
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
  	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
  	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('js/main.js')}}"></script>

		@if($errors->any())
		<script type="text/javascript">
			$('#exampleModal').modal('show');
		</script>
		@endif
  </body>
  </html>
