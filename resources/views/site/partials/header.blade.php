<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Property</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ asset('/') }}dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="{{ asset('/') }}dist/css/style1.css"/>
		<link rel="stylesheet" href="{{ asset('/') }}dist/Fontawesome/css/font-awesome.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	<!-- header -->
    <header>
		<!-- bg-skyblue and icon-1-->
		<div class=" bg-skyblue icon-1">
			<!-- container-->
			<div class="container ">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<i class="fa fa-phone-square" aria-hidden="true"></i>
						 1234 567 890
					</div>
					<div class="col-md-8  col-sm-8 col-xs-12">
					<ul class="top-icon">
							<li class="top-icon-li"><a  href="{{ route('login') }}"> <i class=" glyphicon glyphicon-off"></i>&nbsp;LOG IN </li></a>
							<li class="top-icon-li"> <a  href="{{ route('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; REGISTER</li></a>
					</ul>
					</div>
				</div>
			</div>
			<!--/ container-->
		</div>
	     <!-- / bg-skyblue and icon-1 -->
		 <!-- header and navbar -->
	    <nav class="navbar navbar-default">
		    <!-- bg-navbar start-->
			<div class=" bg-navbar">
			    <!-- .container start-->
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						 </button>
						  <!-- logo -->
					     <a class="navbar-brand " href="#"> <img src="image/logo.png" alt="logo"   class="img-responsive logo " /> </a>
					</div>
					<!-- navbar-collapse -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">HOME</a></li>
							<li><a href="#">ABOUT US </a></li>
							<li><a href="#">SERVICE </a></li>
							<li><a href="#">PROPERTY</a></li>
							<li><a href="#">CONTACT US</a></li>
						</ul>
					</div>
					<!-- / navbar-collapse -->
				</div>
				<!-- / container-->
			</div>
			<!-- / bg-navbar -->
		</nav>
		<!--/ nav -->
	</header>
	<!--/ header-->
