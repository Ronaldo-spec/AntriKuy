@extends('layouts.base')

@section('body')
<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">RS Tadika Mesra</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="{{ url('../home') }}">Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

			@yield('content')

			<footer class="site-footer">
				<div class="container">
					<div class="pull-left">

						<address>
							<strong>RS Tadika Mesra</strong>
							<p> <img src="images/instagram.png" width="20" height="20">   @ps_tamesra</p>
						</address>
						

						<a href="#" class="phone">+ 1 800 931 033</a>
					</div> <!-- .pull-left -->
					<div class="pull-right">

						<div class="social-links">

							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>

						</div>

					</div> <!-- .pull-right -->

					<div class="colophon">
					<img src="images/facebook.png" width="20" height="20">
						ps.tamesra
					</div>

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>
@endsection
    