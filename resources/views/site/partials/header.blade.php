<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>Property Manager</title>
	<meta name="generator" content="editplus">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
    <link href="{{ asset('/') }}dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/') }}dist/font-awesome-4.7.0/css/font-awesome.min.css">	
	<link href="{{ asset('/') }}dist/css/style.css" rel="stylesheet">
	<link href="{{ asset('/') }}dist/css/skdslider.css" rel="stylesheet">
	<script charset="utf-8" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('/') }}dist/js/popper.js"></script>
	<script charset="utf-8" src="{{ asset('/') }}dist/js/bootstrap.min.js"></script>
	<script src="{{ asset('/') }}dist/js/skdslider.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
</head>

 <body>
	<!-- header -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col text-left phNumber-top"><i class="fa fa-phone-square" aria-hidden="true"></i> 123-4567-890</div>
				<div class="col text-right">
				@guest
					<a href="{{ route('login') }}">
						<i class="fa fa-power-off" aria-hidden="true"></i>  Login
					</a>
					<a href="{{ route('register') }}">
						<i class="fa fa-sign-in" aria-hidden="true"></i>  Register
					</a>
				@else
				<a href="#">
					<i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;Hi {{ Auth::user()->name }}
				</a>	
				<div>
					<li class="top-icon-li"><a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class=" glyphicon glyphicon-off"></i>&nbsp; LOGOUT</li></a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					 @csrf
					</form>
				</div>
				
				@endguest
				</div>
				
				
				<!--ul class="top-icon">
					@guest
						<li class="top-icon-li"><a  href="{{ route('login') }}"> <i class=" glyphicon glyphicon-off"></i>&nbsp;LOG IN </li></a>
						<li class="top-icon-li"> <a  href="{{ route('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; REGISTER</li></a>
					@else
						<li class="top-icon-li"><a  href="#">&nbsp;Hi {{ Auth::user()->name }}</li></a>
							<div>
								<li class="top-icon-li"><a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class=" glyphicon glyphicon-off"></i>&nbsp; LOGOUT</li></a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								 @csrf
								</form>
							</div>
						</li>
					@endguest
							
				</ul-->
				
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-md">
		<div class="container">
			<a class="navbar-brand" href="{{URL::to('/')}}"><img src="<?php echo URL::to('dist/images/logo.png');?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
				<ul class="nav ">
					<li class="nav-item active">
						<a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="search-home.html">Search homes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="list-property.html">List a Property</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blogs.html">Blogs</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
									
				</ul>
			</div>
		</div>
	</nav>
	<!-- /header -->