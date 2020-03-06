<!DOCTYPE html>
<html>
<head>
	<title>ROBANDER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{asset('business/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('business/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('business/fontawesome.0-web/css/all.min.css')}}">
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<!--navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="hotel-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">ROBENDAR</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto my-2">
					<li class="nav-item px-4"><a href="{{route('main')}}" class="nav-link">Home</a></li>
					<li class="nav-item px-4"><a href="#" class="nav-link">Service</a></li>
					<li class="nav-item px-4"><a href="{{route('about')}}" class="nav-link">About</a></li>
					<li class="nav-item px-4"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>


					@if(Auth::user())
					<li class="nav-item dropdown pr-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right px-4" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    
					<li class="nav-item px-4 btn btn-success"><a href="{{route('booking')}}" class="nav-link text-light">Booking</a></li>

					@else
					<li class="nav-item px-4 btn btn-success mx-1"><a href="{{route('registers')}}" class="nav-link text-light">Register</a></li>
					<li class="nav-item px-4 btn btn-success mx-2"><a href="{{route('logins')}}" class="nav-link text-light" >Login</a></li>
					@endif

					
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navbar -->
		<!-- header image -->
		<div id="carouselExampleCaptions" class="carousel slide carousel-fade home_carousel" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('business/images/bg_1.jpg')}}" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>More Than Hotel...</h1>
						<p>The Best Performance Hotel</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('business/images/bg_2.jpg')}}" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>More Than Hotel...</h1>
						<p>The Best Performance Hotel</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('business/images/bg_3.jpg')}}" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>More Than Hotel...</h1>
						<p>The Most Popular Hotel</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end header image -->
		@yield('content')
		<!-- start footer -->
		<footer>
			<div class="container-fluid bg-dark py-5">
				<div class="row mb-5">
					<div class="col-md">
						<div class="mb-4 social">
							<h2 class="">Robander</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="mt-5">
								<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Useful Links</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Our Blog</a></li>
								<li><a href="#" class="py-2 d-block"> Our Rooms</a></li>
								<li><a href="#" class="py-2 d-block">Amenities</a></li>
								<li><a href="#" class="py-2 d-block">Gift Card</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Privacy</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Career</a></li>
								<li><a href="#" class="py-2 d-block">About</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
								<li><a href="#" class="py-2 d-block">Services</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Contact</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><p>203 BoSawNaung.st, North Dargon ,Yangon</p></li>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">+959447156128</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">robander@gamil.com.mm</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>All rights reserved | This template is made with by <a href="https://mawkunaung.me" target="_blank">Robander</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		@yield('script')
		<script type="text/javascript" src="{{asset('business/js/jquery.min.js')}}"></script>
		<script src="{{asset('business/js/owl.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('business/js/bootstrap.bundle.min.js')}}"></script>
		
		<script type="text/javascript" src="{{asset('custom.js')}}"></script>
	</body>
	</html>