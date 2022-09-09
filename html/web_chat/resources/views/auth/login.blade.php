<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | {{ config('app.name') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/1904060.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-image:url('{{asset('images/bg-01.jpg')}}');">
    <div class="limiter">
     <div class="container-login100" style="background-image:url('{{asset('images/bg-01.jpg')}}');">
       <div class="wrap-login100  p-l-55 p-r-55 p-t-65 p-b-54">
         <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
           @csrf
           <span class="login100-form-title p-b-49">
             Login
           </span>
           @if(session()->has('success'))
           <p class="alert alert-success">{{ session()->get('success') }}</p>
           @endif
           @if(session()->has('error'))
           <p class="alert alert-danger">{{ session()->get('error') }}</p>
           @endif
           @error('success')
           <p class="alert alert-success">{{ $message }}</p>
           @enderror
           @error('invalid-credentials')
           <p class="alert alert-danger">{{ $message }}</p>
           @enderror
           <div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
             <span class="label-input100">Email</span>
             <input class="input100" type="text" name="email" value="{{ old('email') ?? '' }}" placeholder="Type your Email">
             @error('email')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
             <span class="focus-input100" data-symbol="&#xf206;"></span>
           </div>
           <div class="wrap-input100 validate-input" data-validate="Password is required">
             <span class="label-input100">Password</span>
             <input class="input100" type="password" name="password" placeholder="Type your password">
             @error('password')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
             <span class="focus-input100" data-symbol="&#xf190;"></span>
           </div>

           <div class="text-right p-t-8 p-b-31">
             <a class="btn-link" href="{{ route('register') }}">
               Register Here
             </a>
           </div>

           <div class="container-login100-form-btn">
             <div class="wrap-login100-form-btn">
               <div class="login100-form-bgbtn"></div>
               <button class="login100-form-btn">Login</button>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
    <div id="dropDownSelect1"></div>
    <script src="{{asset('js/main.js')}}"></script>

		@if($errors->any())
		<script type="text/javascript">
			$('#exampleModal').modal('show');
		</script>
		@endif
  </body>
  </html>
